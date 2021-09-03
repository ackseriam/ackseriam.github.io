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
 const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => { /* con entries de la funcion intersection,
        cuando una sesion este visible se agarra la id*/ 
      const id =  entry.target.getAttribute("id"); /* se obtiene el id*/ 
      /* se selecciona los a hrf que sean igual a # mas el nombre de la id */
      const menuLink = document.querySelector(`.menu a[href="#${id}"]`);
      console.log(menuLink);
      /* si se encuentra una interseaccion de un espacio se resalta el enlace perteneciente
      a esa caja*/ 
      if(entry.isIntersecting){
        document.querySelector(".menu a.selected").classList.remove("selected");
        menuLink.classList.add("selected");
      } /*else{
        menuLink.classList.remove("selected");
      }*/          console.log(entries);
    });
  }, 
  {rootMargin: "-30px 0px -70px 0px"}
  
  );


/* aqui como estamos recorriendo todos los enlaces*/
 menuLinks.forEach(menuLink => {
menuLink.addEventListener("click", function(){
    menu.classList.remove("menu_opened");
    openMenuBtn.classList.toggle('open');
  })

const hash = menuLink.getAttribute("href");
const target = document.querySelector(hash);

if(target)
{ 
    observer.observe(target);
}

})

/*
/* aqui se selecciona el a href con el id de la seccion posicionada
const hash = menuLink.getAttribute("href");
/*en el se elige el hash  
const target = document.querySelector(hash);
if(target){ /* si existe el a href o la seleccion
  se debe colocar dendro de observer  
    observer.observe(target);
}
 */


window.addEventListener("scroll",function()
{
    var header = document.querySelector("header");
    let windowPosiion = window.scrollY > 0;
    header.classList.toggle("scroll",windowPosiion);
})

