<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
    // die();
    header('location:../../../vista/principal/FrmInicioUsuario.php');
}


$lista=$_SESSION['lista'];
$lista_tiena=$_SESSION['nona_tienda'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Principal</title>
         <script src="../../../js/perfil/inicio.js"></script>
           <link href="../../../css/estilos_1.css" rel="stylesheet" type="text/css"/>
           
            <style>
       
.overlay{
    background: rgba(0,0,0,.3);
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
}

.overlay.active{
    visibility: visible;
}
/**/
.popup{
    background: white;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
    border-radius: 20px;
    padding: 20px;
    text-align: center;
    width: 600px;
    transition: .3s ease all;
    transform: scale(0.7);
    opacity: 0;
}
.popup .btn-cerrar-popup{
    font-size: 16px;
    line-height: 16px;
    display: block;
    text-align: right;
    /*color: white;*/
    transition: .3s ease all;
}
.popup h3{
    font-size: 36px;
    margin-bottom: 10px;
}
.btn-submit{
    padding: 0 20px;
    height: 40px;
    border: none;
    color: #fff;
    background: #5E7DE3;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
    transition: .3s ease all;
}
.btn-submit:hover{
    background: rgba(94,125,227,.9);
}

.popup.active{
    opacity: 1;
    transform: scale(1);
}
input{
    height: 25px;
}

/*POPUP2*/


        </style>
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <script>
            var id_tienda;     
         function popup(id_tien){
          id_tienda=id_tien;
        var overlay=document.getElementById('overlay');
        var popup=document.getElementById('popup');
        overlay.classList.add('active'); 
        popup.classList.add( 'active');      
        }
        function cerrar_popup(){         
        var overlay=document.getElementById('overlay');
        var popup=document.getElementById('popup');
        overlay.classList.remove('active');
        popup.classList.remove('active');
        }
        function calificare(){
            
             var cal=window.document.form.calif.value;
                window.document.form.action="../../../controladores/controlador_calificar.php";
                window.document.form.method="GET";
                window.document.form.id_tienda.value=id_tienda;
                window.document.form.submit();
         }
        
        </script>
    </head>
    <body style="background: url(../../../img/tienda123.jpg); height: 100%;
           background-size: 100vw 146vh;
           background-repeat: no-repeat;"> 
        <form name="form">
            <input type="hidden" name="op">
            <input type="hidden" name="id_tienda">
           <?php
           include './perfil_header.php';
           ?> 
            <main>

        <div id="hero" style="height: 350px;background-size: cover;">
        <div class="container" style="position: relative;
  width: 100%;
  max-width: 960px;
  margin: 0 auto;
  padding: 0 20px;
  box-sizing: border-box;">
            <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero" style="margin-top: 80px;color: white;position: relative; margin-bottom: 0;">
                               
                                <form action="#" id="busqueda" method="post" class="formulario">
                                    
                                </form>
                        </div>
                    </div>
            </div> 
               <h1 id="encabezado" class="encabezado" style="text-align: center;color: black;">Tiendas Y Servicios en Lìnea</h1>
     <br><br>
        </div>
            <div class="productos" style="overflow: hidden;
                                          height: 660px;
                                           ">
            
                <div class="row center-xs" style="display: flex;
                                          flex-direction: row;
                                          flex-wrap: wrap;
                                          font-size: 22px;
                                          object-fit: cover;
                                         position: relative;
                                       
                                          ">
                    <?php foreach ($lista_tiena as $value) {?>
                    <div class="col-xs-10  col-sm-6 col-md-4 product " >
                        <div class="card" style="background: url(../../../img/img16.jpg);width: 320px;background-size: 22vw 40vh; background-repeat: no-repeat;color: white;">
                            <h2 ><?php echo $value['NOMBRE_TIENDA'];?></h2>
                        <p><?php echo $value['DESCRIPCION_TIENDA'];?></p>  
                        <label style="color: white;">Calificación:
                            <?php $calificacion=round($value['CALIFICAION_PROM']);?>
                           <?php for($i=0; $i<$calificacion;$i++) {?> 
                            <span class="fa fa-star" style="cursor: pointer;color: #E1E10B ;" ></span>
                           <?php  } ?>
                            <?php for($i=0; $i<5-$calificacion;$i++) {?> 
                            <span class="fa fa-star" style="cursor: pointer;" ></span>
                           <?php  } ?>
                            <br><br>
                            <center>
                                <input type="button" value="Calificar" onclick="popup('<?php echo $value['ID_TIENDA'];?>')" style="color: white; font-size: 20px;"> 
                            </center>
                               
                            
                            
                            
                                                              <!--    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                                                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                                                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id=4estrella"></span>
                                                                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span></label>
                                                                -->

                        
                        </div>
                    </div> 
                    <?php } ?>
                    
                </div>  
            </div>
            
        </div>   
        </div>  
        <div class="overlay" id="overlay">
            <div class="popup" id="popup" >
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup" onclick="cerrar_popup()">X</a>
                    <h3>Calificar</h3>
                    <!--
                    <form action=""> -->
                        <div class="contenedor-inputs">
                                <center>
                                <table>
                                   
                                    <tr>
                                        
                                                <td><select name="calif">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                            </select>
                                             <!--    <span class="fa fa-star" style="cursor: pointer; color: white;" ></span> -->
                                    </tr>
                                    
                                    
                                </table>
                                    <br>
                                </center>
                        </div>
                    <input type="button" class="btn-submit" value="Registrar" onclick="calificare()">
                  
                </div>
            </div> 
        
           
 <input type="checkbox" id="btn-menu"> 
<?php 
include './barra_perfil.php';?>
            </main>
            <br><br><br> <br><br><br> <br><br><br> <br><br><br><br><br><br><br><br><br>
    <?php
    include './perfil_footer.php';?>

    </form>
        <script>
               var contador;
               function calificar(item){
                   console.log(item);
                   contador=item.id[0];
                   let nombre = item.id.substring(1);//captura las estrellas 
                   for(let i=0;i<5;i++){
                       if(i<contador){
                           document.getElementById((i+1)+nombre).style.color="orange";
                    
                       }else{
                           document.getElementById((i+1)+nombre).style.color="black"; 
                          
                       }
                   }
               }
           </script>
           <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
