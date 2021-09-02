/* Menu*/
const menu = document.querySelector(".menu");
const openMenuBtn = document.querySelector(".open-menu");

/*
openMenuBtn.onclick = () => {
              
}*/

function toggleMenu(){
    menu.classList.toggle("move-left");
    menu.classList.toggle("animation");
    menu.classList.toggle("menu_opened");
    menu.classList.toggle("info");  
    openMenuBtn.classList.toggle('open');/* con la primera la clase aparece y al segundo click desaparece*/
}
openMenuBtn.addEventListener("click", toggleMenu);
 
/* aqui es para que el enlace con el menu responsive lo cierre
 el: ^= es para decir que todos los a herf que comience por #, "*/

 const menuLinks = document.querySelectorAll('.menu a[href^="#"]');
menuLinks.forEach(menuLink => {
menuLink.addEventListener("click", function(){
    menu.classList.remove("menu_opened");
    openMenuBtn.classList.toggle('open');
  }) 
})

window.addEventListener("scroll",function()
{
    var header = document.querySelector("header");
    let windowPosiion = window.scrollY > 0;
    header.classList.toggle("scroll",windowPosiion);
})

