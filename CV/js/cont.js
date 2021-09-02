
/* conteo*/
const loadText = document.querySelector('.loading-text');
const bg = document.querySelector('.bg');
const profiles = document.querySelector('#profiless');
const fondo = document.querySelector('.fondo');
fondo.style.zIndex = 50;

const img = document.querySelector('#profile-img');
img.style.zIndex = -1;

/*const profile = document.querySelector('.profile-img')
profile.style.display = 'none';*/


const body = document.body;
let load = 0
let resul = 0
let int = setInterval(blurring, 5)

function blurring() {
 load++  
 resul= load*50;
  if (load > 99) {
    clearInterval(int)
    bg.style.background='none';
    body.style.overflowX= 'hidden';
    body.style.overflowY= 'auto';
    fondo.style.zIndex = -1;
    profiles.style.zIndex = 1;
    img.style.display = 'block';
    /* 
     
  bg.style.display='none';*/
}

  loadText.innerText = `${load}%`
  loadText.style.opacity = scale(load, 0, 100, 1, 0)
  bg.style.filter = `blur(${scale(load, 0, 100, 30, 0)}px)`
     
}

// https://stackoverflow.com/questions/10756313/javascript-jquery-map-a-range-of-numbers-to-another-range-of-numbers
const scale = (num, in_min, in_max, out_min, out_max) => {
  return ((num - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min

}