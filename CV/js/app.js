/*
const loadText = document.querySelector('.loading-text');
const bg = document.querySelector('.bg');
const profiles = document.querySelector('#profiless');

profiles.style.display = 'none';
const body = document.body;
let load = 0

let int = setInterval(blurring, 5)

function blurring() {
  load++

  if (load > 99) {
    clearInterval(int)
    bg.style.background='none';
    body.style.overflowX= 'hidden';
    body.style.overflowY= 'auto';
    profiles.style.display = 'block';
 }

  loadText.innerText = `${load}%`
  loadText.style.opacity = scale(load, 0, 100, 1, 0)
  bg.style.filter = `blur(${scale(load, 0, 100, 30, 0)}px)`
  
    

}

// https://stackoverflow.com/questions/10756313/javascript-jquery-map-a-range-of-numbers-to-another-range-of-numbers
const scale = (num, in_min, in_max, out_min, out_max) => {
  return ((num - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min

}

/* Menu*/
/*
const menu = document.querySelector(".menu");
const openMenuBtn = document.querySelector(".open-menu");

function toggleMenu(){
    menu.classList.toggle("move-left");
    menu.classList.toggle("animation");
    menu.classList.toggle("menu_opened");
    menu.classList.toggle("info");  
    openMenuBtn.classList.toggle('open');/* con la primera la clase aparece y al segundo click desaparece
}
openMenuBtn.addEventListener("click", toggleMenu);

window.addEventListener("scroll",function()
{
    var header = document.querySelector("header");
    let windowPosiion = window.scrollY > 0;
    header.classList.toggle("scroll",windowPosiion);
})

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