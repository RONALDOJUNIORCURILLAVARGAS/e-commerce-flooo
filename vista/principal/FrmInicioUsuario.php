<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRINCIPAL</title>
        <link href="../../css/cssRichard/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/jquery/jquery.js"></script>
        <script src="../../js/inicio/inicio.js"></script>  
    </head>
    <body>
        
        <form name="form" id="form">
        <input  type="hidden" name="op"> 
        <?php 
        include './menu.php';
        ?>
        <main>
            <video src="../../imagenes/inicio/Video/vid03.mp4" autoplay loop>
                
            </video>
            <article>
                <div class="caja">
                    <center>
                        <h1>BIENVENIDOS A FLOOOP</h1>
                        <p><font color="white" >Con este medio te ayudaremos a buscar el servicio el cual puede encontrarse lo  
                        más  cerca de lo que se imagina y poder contactarse con el prestador de servicio y llegar a un acuerdo 
                        en menos de lo que se pueda imaginar. 
                        </font></p>
                         <p><font color="white" >Deje de estar buscando en otros medios, que solo hacen que pierdas más tiempo en 
                         ubicarlos.</font></p>
                           <p><font color="white" >A qui podrás encontrar lo que estas buscando para solucionar el problema que 
                               tiene en casa o en tu empresa, solo ingrese a la categoría que usted esta buscando o registrese si 
                               es el que presta los servicio.    
                               </font></p>
                    </center>
                </div>
            </article>
            <aside>
                
                
                <a href="https://www.youtube.com/watch?v=kXYiU_JCYtU" class="button">
                    <span class="icon-play_store_icon_153506">
                    </span>Descargue en PlayStore
                </a>
            </aside>
        </main>
         <?php 
         include './footer.php';
         ?>
            </form>
    </body>
</html>
