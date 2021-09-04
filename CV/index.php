<?php 
?>
<!-- // three.js - https://github.com/mrdoob/three.js
var THREE=THREE||{REVISION:"56"} -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ericka Simancas</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <!--Para que el css se vea en todos los navegadores igual:normalize-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <!--Fuente-->
    <link
      href="https://fonts.googleapis.com/css2?family=Acme&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link type="text/css" rel="stylesheet" href="css/profile.css" />
    <link type="text/css" rel="stylesheet" href="css/navbar.css" />
    <link type="text/css" rel="stylesheet" href="css/skills.css" />
    <link type="text/css" rel="stylesheet" href="css/about.css" />
    <link type="text/css" rel="stylesheet" href="css/experiencies.css" />
    <link type="text/css" rel="stylesheet" href="css/services.css" />

    <!--el defer es para que al momento de que el dom se haya cargado car-->

  </head>
  <body>
    <header class="header">
      <nav class="topnav active" id="nav">
        <a href="#" class="logo">
          <img
            src="img/ericka-logo.jpg"
            width="50"
            height="50"
            alt="programador"
          />
          <div>Ericka Simancas <br />{Dev-Ingeniera}</div>
        </a>
        <div id="open-icon">
          <button class="open-menu" aria-label="Abrir Menu">
            <span class="top-line"></span>
            <span class="middle-line"></span>
            <span class="bottom-line"></span>
          </button>
        </div>

        <ul class="menu animation move-left">
          <li><a href="#skills" class="selected">Habilidades</a></li>
          <li><a href="#experiences">Experiencias</a></li>
          <li><a href="#about">Sobre mi</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#projects">Proyectos</a></li>
          <li><a href="#certi">Certificados</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav>
    </header>
    <div class="loading-text">0%</div>
    <section class="fondo"></section>
<div class="observer-root-margin"></div> 
    <section id="profiless">
      <div id="cont">
        <div class="container">
          <div id="script">
            <script src="js/script.js"></script>
          </div>

          <div id="info">
            <h4 class="profile-title">
              Hola soy Ericka <br />
              <span class="typed-text"></span
              ><span class="cursor"> &nbsp;</span>
            </h4>
            <p class="profile-details">
              Soy amante de la tecnologia y de la programacion. Me considero
              amante del aprendizaje y asedora de diversos retos. Desarrollador
              Fullstack
            </p>
            <button class="profile-btn">Descargar CV</button>
          </div>
        </div>
      </div>
      <div id="profile-img">
        <span class="profile-img-sec">
          <img
            src="img/profile_ericka.png"
            class="profile-img"
            alt="Programador web"
          />
          <div class="profile-img-line"></div>
        </span>
      </div>
    </section>
 
    <div class="bg">
      <img src="./img/waes.svg" alt="experiencias" class="wave-skill" />
   
      <div class="skill-small" id="skills">
        <div class="title-skills">
          <h1>Habilidades</h1>
        </div>
        <section id="skills" class="skillss hover-left">
          <div class="skills left">
            <div class="title">
              <h2 class="skills-title">Front-end</h2>
            </div>
            <ul class="skills-list">
              <li class="skills-skill blue">CSS</li>
              <li class="skills-skill blue">Bootstrap</li>
              <li class="skills-skill blue">JS</li>
              <li class="skills-skill blue">HTML</li>
              <li class="skills-skill blue">Jquery</li>
              <li class="skills-skill blue">Vue</li>
              <li class="skills-skill blue">Angular</li>
            </ul>
          </div>
          <div class="skills right">
            <div class="title">
              <h2 class="skills-title">Backend</h2>
            </div>
            <ul class="skills-list">
              <li class="skills-skill white">CSS</li>
              <li class="skills-skill white">Bootstrap</li>
              <li class="skills-skill white">JS</li>
              <li class="skills-skill white">HTML</li>
              <li class="skills-skill white">Jquery</li>
              <li class="skills-skill white">Vue</li>
              <li class="skills-skill white">Angular</li>
            </ul>
          </div>
        </section>
        <img src="./img/waes.svg" alt="Habilidades" class="wavek wavek_bottom" >
      </div>
      <br><br><br>
      <section class="experiencess" id="experiences">
        <img src="./img/waes.svg" alt="experiencias" class="wave" />

        <div class="experiences-body">
          <h2 class="experiences-title">Experiencia</h2>
          <div class="experences-grid">
            <div class="empty"></div>
            <!--Esto es para colocar un espacio vasio con linea-->
            <div class="line"></div>
            <div class="experiences">
              <div class="experience-date">2018-2019</div>
              <div class="experience-company">
                Sistema para la comunidad de Figure Eight Task
              </div>
              <div class="experience-position">Programador web PHP</div>
              <div class="experience-description">
                Sistema web que llevaba un control de datos de usuarios,
                guias,permisologias especificas y un sistema de seguridad
                adaptada al usuario.
                <br />
                Trabaje de la mano con el cliente. (Laravel 5.7, VueJs, MySQL,
                DigitalOcean)(2018-2019):
              </div>
            </div>

            <div class="experiences">
              <div class="experience-date">2016-2017</div>
              <div class="experience-company">
                Sistema de Gestion de Personal (Pasantias)
              </div>
              <div class="experience-position">Programador web</div>
              <div class="experience-description">
                Forme parte del desarrollo de un Sistema de Control de Horarios
                y Asistencias de Personal para Mukumbarí, Sistema Teleférico de
                Mérida.
                <br />
                Sistema Instalado en una red intranet. Hecho en Codeigniter en
                su version 2.3, jquery, PostgreSQL)
              </div>
            </div>
            <div class="line"></div>
            <!--Aqui la linea de nuevo-->
            <div class="empty"></div>
            <!--Vacio de la derecha,-->
            <div class="empty"></div>
            <!--Vacio izquierda, abajo -->
            <div class="line"></div>
            <!--Linea-->
            <div class="experiences">
              <div class="experience-date">2018-2019</div>
              <div class="experience-company">
                Sistema de control de uso de equipos de computación (SACUEC)
              </div>
              <div class="experience-position">Programador web PHP</div>
              <div class="experience-description">
                Sistema Automatizado para el Control de Uso de Equipos de
                Computación .
                <br />
                Sistema instalado en una red intranet. Hecho en Codeigniter en
                su versión 3, jquery, PostgreSQL)
              </div>
            </div>
            <div class="experiences">
              <div class="experience-date">2020-2021</div>
              <div class="experience-company">
                SEO / Supervisión de Redacción de Contenido en Notifresh SL.
              </div>
              <div class="experience-position">
                Especialista Seo / Analista de contenido
              </div>
              <div class="experience-description">
                Análisis de Keywords, long-tail, Uso de Google Search Console,
                indexación de paginas. Optimización de contenido, distribución
                correcta de palabras claves, estructura correcta del contenido.
                <br />
                Elección de contenido por temas de viralidad y mercado.
              </div>
            </div>
            <div class="line"></div>
            <!--Aqui la linea de nuevo-->
            <div class="empty"></div>
            <!--Vacio de la derecha,-->
            <div class="empty"></div>
            <!--Vacio izquierda, abajo -->
            <div class="line"></div>
            <!--Linea-->
            <div class="experiences">
              <div class="experience-date">2019-2021</div>
              <div class="experience-company">
                Redactor Especializado SEO en Enlazalia.
              </div>
              <div class="experience-position">Redactor Linkbuilding</div>
              <div class="experience-description">
                Conocimientos amplios en linkbuilding (enlaces internos, enlaces
                externos Folow-Nofollow).
              </div>
            </div>
          </div>
        </div>
      </section>
      <img src="./img/waes.svg" alt="experiencias" class="wave wave_bottom" />
      <!--<canvas width="718" height="1376" style="width: 359px; height: 600px;"></canvas>-->
      <section id="about">
        <div class="slider-container">
          <div class="left-slide">
            <div style="background-color: rgba(43, 43, 43, 0.7)">
              <h1>Autodidacta</h1>
              <p>all in pink</p>
            </div>
            <div style="background-color: #2a86ba">
              <h1 style="font-size: 30px">Desarrollador Web</h1>
              <p>
                Programador en tecnologias como PHP, NodeJS.<br /><br />
                Desarrollo de SPA, Api-Rest, Api-Rest FULL
                <br />
                Desenvolvimiento en javascript con framework como Angular y
                VueJS
              </p>
            </div>
            <div style="background-color: #252e33">
              <h1>SEO</h1>
              <p>
                En los ultimos años me he desempeñado en tareas de
                posicionamiento web, asi como tambien la segmentacion de
                keywords y mucho mas
              </p>
            </div>
            <div style="background-color: rgba(43, 43, 43, 0.7)">
              <h1>Sobre mi</h1>
              <h3>Ingeniero en Informática, graduada en 2017</h3>
              <br /><br />
              <p>
                Con un sólido conocimiento en tecnologías de desarrollo web
                tales como PHP, MysQL/PostgreSQL , Laravel, etc. Autodidacta con
                un continuo aprendizaje y desarrollo de metas.
              </p>
            </div>
          </div>
          <div class="right-slide">
            <div
              class="first-image"
              style="background-image: url('img/codigo.jpg')"
            ></div>
            <div
              class="second-image"
              style="background-image: url('img/codigo2.jpg')"
            ></div>
            <div
              class="tercer-image"
              style="
                background-image: url('https://www.salesrenewal.com/wp-content/uploads/2019/01/data.jpg');
              "
            ></div>
            <div
              class="cuarto-image"
              style="
                background-image: url('https://images.unsplash.com/photo-1510942201312-84e7962f6dbb?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=da4ca7a78004349f1b63f257e50e4360&auto=format&fit=crop&w=1050&q=80');
              "
            ></div>
          </div>
        </div>
      </section>
      <div class="action-buttons">
        <button class="down-button">
          <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
     <img src="./img/waes-verde.svg" alt="services" class="wave-verde" />
    
      <section id="services">
       <div class="services">
        <div class="services-title"> 
          <h1>Servicios</h1>
        </div>
        
          <div class="card" id="c2">
            <div class="image" id="i0">
              <div class="city">
                <?xml version="1.0" encoding="utf-8"?>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 300 225" style="enable-background:new 0 0 300 225;" xml:space="preserve">
                <ellipse class="st5" id="sh3" cx="150.5" cy ="224.75" rx="77.5" ry="77.5"/>
          
                <ellipse class="st5" id="sh2" cx=	"150.5" cy ="224.75" rx="57.5" ry="57.5"/>
                <ellipse id="XMLID_15_" class="st5" cx="150.5" cy="224.75" rx="37.5" ry="37.5"/>
                l:none;stroke:#000000;stroke-miterlimit:10;}
                </style>l:none;stroke:#000000;stroke-miterlimit:10;}
                </style>
                l:none;stroke:#000000;stroke-miterlimit:10;}
                </style>
                <polygon id="XMLID_1_" class="st10" points="69.807,224.719 72.715,209.374 71.974,203.342 120.42,211.753 118.199,217.581 
                  115.799,232.384 "/>
                <polygon id="XMLID_2_" class="st10" points="77.295,204.276 79.544,191.37 78.827,186.294 119.809,193.405 118.277,198.349 
                  116.264,210.769 "/>
                <polygon id="XMLID_3_" class="st10" points="80.163,186.582 82.413,173.676 81.696,168.6 122.677,175.711 121.146,180.655 
                  119.132,193.075 "/>
                <polygon id="XMLID_4_" class="st10" points="83.032,168.888 85.282,155.982 84.565,150.906 125.546,158.017 124.015,162.961 
                  122.001,175.381 "/>
                <polygon id="XMLID_5_" class="st10" points="85.901,151.194 88.151,138.288 87.433,133.212 128.415,140.323 126.884,145.267 
                  124.87,157.687 "/>
                <polygon id="XMLID_6_" class="st10" points="88.77,133.5 91.019,120.594 90.302,115.518 131.284,122.629 129.752,127.573 
                  127.739,139.993 "/>
                <polygon id="XMLID_7_" class="st10" points="91.638,115.806 93.888,102.9 93.171,97.824 134.152,104.935 132.621,109.879 
                  130.607,122.299 "/>
                <path id="XMLID_8_" class="st10" d="M127.114,103.327L99.59,98.865l2.466-15.208c0.608-3.75,4.14-6.296,7.89-5.688l13.452,2.181
                  c4.022,0.652,6.754,4.441,6.102,8.463L127.114,103.327z"/>
                <line id="XMLID_9_" class="st11" x1="109.946" y1="77.968" x2="84.783" y2="226.86"/>
                <line id="XMLID_10_" class="st11" x1="115.708" y1="79.915" x2="90.545" y2="228.807"/>
                <line id="XMLID_11_" class="st11" x1="120.804" y1="79.728" x2="95.641" y2="228.62"/>
                <line id="XMLID_12_" class="st11" x1="125.739" y1="80.529" x2="100.577" y2="229.421"/>
                <line id="XMLID_13_" class="st11" x1="100.502" y1="98.724" x2="75.339" y2="247.616"/>
                <line id="XMLID_14_" class="st11" x1="128.141" y1="103.205" x2="102.978" y2="252.097"/>
                <circle id="XMLID_11_" class="st7" cx="24.5" cy="68.5" r="2.5"/>
                <circle id="XMLID_12_" class="st7" cx="119.5" cy="28.5" r="1.5"/>
                <circle id="XMLID_13_" class="st7" cx="172.5" cy="103.5" r="2.0"/>
                <circle id="XMLID_14_" class="st7" cx="244.5" cy="92.5" r="1.0"/>
                <circle id="XMLID_11_" class="st7" cx="214.5" cy="18.5" r="2.5"/>
                <circle id="XMLID_12_" class="st7" cx="119.5" cy="38.5" r="1.5"/>
                <circle id="XMLID_13_" class="st7" cx="172.5" cy="203.5" r="2.0"/>
                <circle id="XMLID_14_" class="st7" cx="144.5" cy="12.5" r="1.0"/>
                </svg>
                </div>
            </div>
            <div class="story" id="s0">
              <div class="infos text-primer">
              <h3 class="tex-title-f">Desarrollo Web</h3>
              <p> Built during a time when Egypt was one of the richest and most powerful civilizations in the world. Their massive scale reflects the unique role that the pharaoh played in ancient Egyptian society.</p>
              </div>
            </div>
          </div>
          
          <div class="card" id="c1">
            <div class="image" id="i1">
              <div class="city">
              <?xml version="1.0" encoding="utf-8"?>
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 
                 300 225" style="enable-background:new 0 0 300 225;" xml:space="preserve">
              </svg>
              </div>
            </div>
            <div class="story" id="s1">
              <div class="infos">
                <h3>Stonehenge</h3>
              <p> Stonehenge is a prehistoric monument in Wiltshire, England. It was constructed in several stages between 3000 and 1500 B.C., spanninng to the Bronze Age.</p>
              </div>
            </div>
          </div>

          <div class="card" id="c3">
            <div class="image" id="i2">
              <div class="city">
              <?xml version="1.0" encoding="utf-8"?>
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 300 225" style="enable-background:new 0 0 300 225;" xml:space="preserve">
              <ellipse class="st5" id="sh3" cx="150.5" cy ="224.75" rx="77.5" ry="77.5"/>
        
              <ellipse class="st5" id="sh2" cx=	"150.5" cy ="224.75" rx="57.5" ry="57.5"/>
              <ellipse id="XMLID_15_" class="st5" cx="150.5" cy="224.75" rx="37.5" ry="37.5"/>
              l:none;stroke:#000000;stroke-miterlimit:10;}
              </style>l:none;stroke:#000000;stroke-miterlimit:10;}
              </style>
              l:none;stroke:#000000;stroke-miterlimit:10;}
              </style>
              <polygon id="XMLID_1_" class="st10" points="69.807,224.719 72.715,209.374 71.974,203.342 120.42,211.753 118.199,217.581 
                115.799,232.384 "/>
              <polygon id="XMLID_2_" class="st10" points="77.295,204.276 79.544,191.37 78.827,186.294 119.809,193.405 118.277,198.349 
                116.264,210.769 "/>
              <polygon id="XMLID_3_" class="st10" points="80.163,186.582 82.413,173.676 81.696,168.6 122.677,175.711 121.146,180.655 
                119.132,193.075 "/>
              <polygon id="XMLID_4_" class="st10" points="83.032,168.888 85.282,155.982 84.565,150.906 125.546,158.017 124.015,162.961 
                122.001,175.381 "/>
              <polygon id="XMLID_5_" class="st10" points="85.901,151.194 88.151,138.288 87.433,133.212 128.415,140.323 126.884,145.267 
                124.87,157.687 "/>
              <polygon id="XMLID_6_" class="st10" points="88.77,133.5 91.019,120.594 90.302,115.518 131.284,122.629 129.752,127.573 
                127.739,139.993 "/>
              <polygon id="XMLID_7_" class="st10" points="91.638,115.806 93.888,102.9 93.171,97.824 134.152,104.935 132.621,109.879 
                130.607,122.299 "/>
              <path id="XMLID_8_" class="st10" d="M127.114,103.327L99.59,98.865l2.466-15.208c0.608-3.75,4.14-6.296,7.89-5.688l13.452,2.181
                c4.022,0.652,6.754,4.441,6.102,8.463L127.114,103.327z"/>
              <line id="XMLID_9_" class="st11" x1="109.946" y1="77.968" x2="84.783" y2="226.86"/>
              <line id="XMLID_10_" class="st11" x1="115.708" y1="79.915" x2="90.545" y2="228.807"/>
              <line id="XMLID_11_" class="st11" x1="120.804" y1="79.728" x2="95.641" y2="228.62"/>
              <line id="XMLID_12_" class="st11" x1="125.739" y1="80.529" x2="100.577" y2="229.421"/>
              <line id="XMLID_13_" class="st11" x1="100.502" y1="98.724" x2="75.339" y2="247.616"/>
              <line id="XMLID_14_" class="st11" x1="128.141" y1="103.205" x2="102.978" y2="252.097"/>
              <circle id="XMLID_11_" class="st7" cx="24.5" cy="68.5" r="2.5"/>
              <circle id="XMLID_12_" class="st7" cx="119.5" cy="28.5" r="1.5"/>
              <circle id="XMLID_13_" class="st7" cx="172.5" cy="103.5" r="2.0"/>
              <circle id="XMLID_14_" class="st7" cx="244.5" cy="92.5" r="1.0"/>
              <circle id="XMLID_11_" class="st7" cx="214.5" cy="18.5" r="2.5"/>
              <circle id="XMLID_12_" class="st7" cx="119.5" cy="38.5" r="1.5"/>
              <circle id="XMLID_13_" class="st7" cx="172.5" cy="203.5" r="2.0"/>
              <circle id="XMLID_14_" class="st7" cx="144.5" cy="12.5" r="1.0"/>
              </svg>
              </div>
            </div>
            <div class="story" id="s2">
              <div class="infos">
              <h3>Tower of Pisa</h3>
              <p> The Leaning Tower of Pisa or simply the Tower of Pisa is the campanile, or freestanding bell tower, of the cathedral of the Italian city of Pisa, known worldwide for its unintended tilt</p>
              </div>
            </div>
          </div>
        </div>
        </section>
    
  </body>
  <script defer src="js/cont.js"></script>
  <script defer src="js/menu.js"></script>
  <script defer src="js/app.js"></script>
  <script defer src="js/skill.js"></script>
</html>
