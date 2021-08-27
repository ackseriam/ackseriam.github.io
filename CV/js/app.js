/* Menu*/
const menu = document.querySelector(".menu");

const openMenuBtn = document.querySelector(".open-menu");
const closeMenuBtn = document.querySelector(".close-menu");


openMenuBtn.onclick = () => {
  /*          
    skill = document.getElementById("skills");
    skill.style.display = "none";
    info.style.position = "none";  */       
}
closeMenuBtn.onclick = () => {
    info =  document.getElementById("cont");
    info.style.display = "block";

    profile = document.getElementById("profile-img");
    profile.style.display = "block";

    skill = document.getElementById("skills");
    skill.style.display = "block";
}

function toggleMenu(){
    menu.classList.toggle("menu_opened");
    menu.classList.toggle("info");
    
  
}
openMenuBtn.addEventListener("click", toggleMenu);
closeMenuBtn.addEventListener("click", toggleMenu);

window.addEventListener("scroll",function()
{
    var header = document.querySelector("header");
    let windowPosiion = window.scrollY > 0;
    header.classList.toggle("scroll",windowPosiion);
})

/* escritura*/
const typedTextSpan = document.querySelector('.typed-text');
const cursorSpan = document.querySelector('.cursor');

const textArray = [" Web Developer", "Ingeniero en Informática","Autodidacta", "Fullstack developer"];
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

/* Skills efecto */

const left = document.querySelector('.left')
const right = document.querySelector('.right')
const rightb = document.querySelector('.right::before')
const skills = document.querySelector('.skillss')

left.addEventListener('mouseenter', () => skills.classList.add('hover-left'))
left.addEventListener('mouseleave', () => skills.classList.hidden('hover-left'))

right.addEventListener('mouseenter', () => skills.classList.add('hover-right'))
right.addEventListener('mouseleave', () => skills.classList.remove('hover-right'))

/* Slider Sobre mi*/
const sliderContainer = document.querySelector('.slider-container')
const slideRight = document.querySelector('.right-slide')
const slideLeft = document.querySelector('.left-slide')
const upButton = document.querySelector('.up-button')
const downButton = document.querySelector('.down-button')
const slidesLength = slideRight.querySelectorAll('div').length


let activeSlideIndex = 0

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`

upButton.addEventListener('click', () => changeSlide('up'))
downButton.addEventListener('click', () => changeSlide('down'))

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight
    if(direction === 'up') {
        activeSlideIndex++
        if(activeSlideIndex > slidesLength - 1) {
            activeSlideIndex = 0
        }
    } else if(direction === 'down') {
        activeSlideIndex--
        if(activeSlideIndex < 0) {
            activeSlideIndex = slidesLength - 1
        }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
}