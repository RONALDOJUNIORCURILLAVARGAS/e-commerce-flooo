<?php
session_start();
$lista=$_SESSION['lista'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nosotros</title>
       
         <script src="../../../js/perfil/inicio.js"></script>
           <link href="../../../css/estilos_1.css" rel="stylesheet" type="text/css"/>
               <link rel="stylesheet" type="text/css" media="screen" href="../../../css/nosotros/style.css">
    </head>
    <body >     
        <form name="form">
            <input type="hidden" name="op">
            <header class="header" style="background-color: #35B668">
                  <div class="container" >
                  <div class="btn-menu">
                  <label for="btn-menu">☰</label>
                 </div>
                    <div class="logo">
                        <h1><img src="../../../imagenes/flooop.png" width="200px" height="100px"></h1>
                   </div>
                <nav class="menu" >
                    <a onclick="redireccion('1')">Inicio</a>
                    <a onclick="redireccion('2')">Productos</a>
                    <a onclick="redireccion('3')">Servicios</a>
                    <a onclick="redireccion('4')">Nosotros</a>
                </nav>
               </div>
 </header>  
   
      
        
         
        <center>
                <main>
                    <br><br><br><br>
                            <div class="frase"> NOSOTROS </div>
                            <div class="curved-div upper" style="margin-top: -200px;">                               
                                <svg viewBox="0 0 1440 319">
                                 <path fill="#35B668" fill-opacity="1" d="M0,32L48,80C96,
                                       128,192,224,288,224C384,224,480,128,576,90.7C672,
                                       53,768,75,864,96C960,117,1056,139,1152,149.3C1248
                                       ,160,1344,160,1392,160L1440,160L1440,320L1392,
                                       320C1344,320,1248,320,1152,320C1056,320,960,
                                       320,864,320C768,320,672,320,576,320C480,320,384,
                                       320,288,320C192,320,96,320,48,320L0,320Z"></path>
                                 </svg>
                            </div> 
                          
                            <div class="curved-div">  
                               
                                <h1>   
                                Quiénes somos
                                </h1>
                                <p>
                                    Somos una empresa preocupada por contribuir al país y a su gente en estos tiempos de pandemia a reducir 
                                    el nivel de contagio a través del uso de las tecnologías de información poder ayudar a las personas en cumplir 
                                    el distanciamiento social.
                                </p>
                                <h2>   
                                El proyecto
                                </h2>
                                <p1>
                                    El proyecto de la empresa consiste en desarrollar una plataforma digital donde muchas personas 
                                    puedan acceder a tiendas o servicios en todo lima metropolitana.
                                </p1>
                                <svg viewBox="0 0 1440 319">
                                 <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,
                                       128,192,224,288,224C384,224,480,128,576,90.7C672,
                                       53,768,75,864,96C960,117,1056,139,1152,149.3C1248
                                       ,160,1344,160,1392,160L1440,160L1440,320L1392,
                                       320C1344,320,1248,320,1152,320C1056,320,960,
                                       320,864,320C768,320,672,320,576,320C480,320,384,
                                       320,288,320C192,320,96,320,48,320L0,320Z"></path>
                                 </svg>
                            </div>
                                
                </main>                     
            </center>  
        
        
 <div class="capa"> </div>
 <input type="checkbox" id="btn-menu"> 
 <div class="container-menu">
  <div class="cont-menu">
     
     <div id="profile">
         <div id="foto"><img src="../../../imagenes/perro.jpg" style=" border-radius: 50%;
                                                      width: 50%; 
                                                      box-sizing: border-box;
                                                      padding: var(--padding);
                                                      margin: 0 auto; 
                                                      font-size: 24px;
                                                      padding: var(--padding) 0;
                                                      overflow: hidden; 
                                                      display:  inline-block;
                                                      display:block;
                                                      margin:auto;
                                                      "></div>
       <div id="name" style="font-size: 24px;
                             padding: var(--padding) 0;
                             overflow: hidden;
                             text-align:center;
                             color: white;"><span><?php foreach ($lista as $reg){ 
                         echo $reg['NOMBRE_USUARIO'];
                        } 
                        ?></span>
                        <span style="font-size: 12px;"><?php foreach ($lista as $reg){ 
                         echo $reg['CORREO_USUARIO'];
                        } 
                        ?></span></div>

     </div>
     <div id="menu-items">
        <nav>
            <a href="#">Editar Perfil</a>
            <a href="#">Mis Clientes</a>
            <a href="#">Mis teindas</a>
            <a href="#">Facebook</a>
            <a href="#">Yuoutbe</a>
            <a href="#">Instagram</a>
        </nav>
     </div>
     <label for="btn-menu">✖</label>
  </div>
 </div>
 <footer>
            <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Dirección</h1>
                    <p>Av. Oscar Benavides 452
                        Cercado de Lima
                        Lima, Perú</p>
                </div>
                
                <div class="colum2">
                    <h1>Nuestras Redes</h1>
                    <div class="row2"><img src="../../../img/imgRichar/facebook.png"><label>Facebook</label>
                    </div>
                    <div class="row2"><img src="../../../img/imgRichar/twitter.png"><label>Twitter</label>
                    </div>
                    <div class="row2"><img src="../../../img/imgRichar/whatsapp.png"><label>Whatsapp</label>
                    </div>
                </div>
                <div class="colum3">
                    <h1>Contáctanos</h1>
                    <div class="row">
                        <img src="../../../img/imgRichar/celular.png">
                        <label>
                           992-666-893
                        </label>
                    </div>
                    <div class="row">
                        <img src="../../../img/imgRichar/Gmail.png">
                        <label>
                           flooter@gmail.com
                        </label>
                    </div>
                </div>
            </div>
            </div>
            <div class="container-footer">
                <div class="copyright">
                    (c) 2020 Todos los Derechos Reservados | R-S-J
                </div>
                
                <div class="informacion">
                    <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Termino y condiciones</a> 
                </div>
            </div>
        </footer>
    </form>
    </body>
</html>