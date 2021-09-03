

/* escritura*/
const typedTextSpan = document.querySelector('.typed-text');
const cursorSpan = document.querySelector('.cursor');

const textArray = [" Web Developer", "Ingeniero en Informática","Autodidacta", "Fullstack developer","Especialista SEO"];
const typingDelay = 150;
const erasingDelay = 200;
const newTextDelay = 200;
let textArrayIndex = 0;
let charIndex = 0;

function type(){
    if(!(cursorSpan.classList.contains('typing'))){
        cursorSpan.classList.add('typing');
    }

    if(charIndex < textArray[textArrayIndex].length){
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
    }else{
        cursorSpan.classList.remove('typing');
        setTimeout(erase,newTextDelay)
    }
}
function erase(){
    if(!(cursorSpan.classList.contains('typing'))){
        cursorSpan.classList.add('typing');
    }
    if(charIndex > 0){
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, erasingDelay);
    }else{
        cursorSpan.classList.remove('typing');
        textArrayIndex++;
        
        if(textArrayIndex >= textArray.length){
            textArrayIndex = 0;
        }
        setTimeout(type, typingDelay + 1100);
    }
}
document.addEventListener('DOMContentLoaded', () =>{
    if(textArray.length){
        setTimeout(type, newTextDelay + 250);
    }

});