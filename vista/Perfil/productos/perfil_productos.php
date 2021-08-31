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
$estado=$_SESSION['existe_tienda'];
$lis_producto=$_SESSION['secta_producto'];
$estado_envio=$_SESSION['estado_envio_correo'];
switch ($estado_envio)
{
    case 1: {
        echo '<script>alert("Se envio correctamente su solicitud")</script>';
        $_SESSION['estado_envio_correo']=0;
        break;}
    case 2: {
         echo '<script>alert("No se pudo enviar su solicitud el mensaje")</script>';
         $_SESSION['estado_envio_correo']=0;
        break;}
}
if($estado===false)
{
    echo '<script>alert("Usted no registra tiendas "+"\nRegistre su tienda en la barra izquierda!!\n");</script>';
    $estado=true;
    $_SESSION['existe_tienda']=true;
}
//echo '<script>alert("Esta cuenta no existe");</script>';

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Productos</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../../../css/productos/style.css">
        <link rel="stylesheet" href="../../../css/productos/flexslider.css">
        <link rel="stylesheet" href="../../../css/productos/font-awesome.css">
        <link href="../../../css/perfil/perfil_producto.css" rel="stylesheet" type="text/css"/>

        <link href="../../../css/estilos_1.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
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
        <script src="../../../js/productos/jquery-3.1.0.min.js"></script>
        <script src="../../../js/productos/jquery.flexslider.js"></script>
        <script src="../../../js/productos/main.js"></script>
        <script src="../../../js/perfil/inicio.js"></script>
        <script src="../../../js/productos/reg_producto.js" type="text/javascript"></script>
        <script>
        var calificar;
        var correo_mail;
        var nombre_producto;
        var id_producto;
        function popup(calificacion,correo,nombre,id_produc){
          calificar=calificacion; 
          correo_mail=correo;
          nombre_producto=nombre;
          id_producto=id_produc;
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
        
        function solicitar(){
            
          var cantidad= document.form.txtcantidadproducto.value;
            if(cantidad>calificar || cantidad.length==0)
            {
           alert('Ingrese una cantidad valida \nPor que el stock del producto es : '+calificar);
            }
            else{
                window.document.form.action="../../../controladores/controlador_correo.php";
                window.document.form.method="GET";
                window.document.form.op.value=correo_mail;
                window.document.form.producto.value=nombre_producto;
                window.document.form.id_producto.value=id_producto;
                window.document.form.opcion.value='1';
                window.document.form.submit();
            }
        }
        function buscar(){
              window.document.form.action="../../../controladores/controlador_filtrar_producto_perf.php";
                window.document.form.method="GET";
                window.document.form.opcion_busqueda.value='1';
                window.document.form.submit();
        }
         function buscar_categoria(id){
             window.document.form.action="../../../controladores/controlador_filtrar_producto_perf.php";
                window.document.form.method="GET";
                window.document.form.opcion_busqueda.value='2';
                window.document.form.id_categoria.value=id;
                window.document.form.submit();
        }
        </script>
    </head>
    <body>
        
        <form name="form">
            <input type="hidden" name="opcion">
            <input type="hidden" name="op">
            <input type="hidden" name="producto">
            <input type="hidden" name="opcion_busqueda">
            <input type="hidden" name="id_categoria">
            <input type="hidden" name="id_producto">
           <?php
           include '../principal/perfil_header.php';
           ?>
            <main>
               <center>
                <main>
                            <br>
                            
                                <table cellspacing="0">
                                    <tr>
                                        <td><div class="buscador"><input type="text" placeholder="Buscar productos" name="txtbusqueda" >
                                                <a onclick="buscar()" style="cursor:pointer;"><img src="../../../imagenes/lupa.png" alt="" class="lupita"/></a>
                                                </div></td>                                                                          
                                    </tr>
                                </table>
                                
                            
                                  <table>
                                    <tr>
                                       <input class="btn_reg" type="button" value="Añadir Productos" onclick="añadirProducto('1')" >
                                    </tr>
                                    </table>
                                    <div class="categorias">
                                        <h1><a id="cat">CATEGORÍAS</a></h1> 
                                        <h2><a onclick="buscar_categoria(1)"> <span class="Icon icon-heart"></span> Salud y Belleza</a> </h2>
                                        <h2><a onclick="buscar_categoria(2)"><span class="Icon icon-home2"> </span> Hogar e Interiores</a></h2>
                                        <h2><a onclick="buscar_categoria(3)"><span class="Icon icon-mobile"> </span> Electrónica</a></h2>
                                        <h2><a onclick="buscar_categoria(4)"><span class="Icon icon-woman"> </span> Moda</a></h2>
                                        <h2><a onclick="buscar_categoria(5)"><span class="Icon icon-accessibility"> </span> Deportes</a></h2>
                                        <h2><a onclick="buscar_categoria(6)"><span class="Icon icon-windows"></span> Informática</a></h2>
                                        <h2><a onclick="buscar_categoria(7)"><span class="Icon icon-glass"></span> Bebidas</a></h2>
                                    </div>
                    
                             
                            
                              
                            <div class="div01">
                                    
                                    <ul style="margin-bottom:0px;">
                                        <?php foreach ($lis_producto as $value) {?>
                                        <li class="mostrar_lis" onclick="popup(<?php echo $value['CANTIDAD_PRODUCTO']; ?>,'<?php echo $value['CORREO_USUARIO']; ?>','<?php echo $value['NOMBRE_PRODUCTO']; ?>','<?php echo $value['ID_PRODUCTO']; ?>')"><label style="margin-top:5px;"><?php echo $value['NOMBRE_PRODUCTO']; ?></label>
                                            <div class="lista_contenido">
                                                <label class="lis_label">Descripcion : <?php echo $value['DESCRIPCION_PRODUCTO']; ?></label>
                                                <label class="lis_label">Precio : S/ <?php echo $value['PRECIO']; ?></label>
                                                <label class="lis_label">Categoria :  <?php echo $value['NOMBRE_CAT_PROD']; ?></label>
                                                 <label class="lis_label">Cantidad :  <?php echo $value['CANTIDAD_PRODUCTO']; ?></label>
                                            </div>
                                        </li>
                                        <?php } ?>
                                         
                                    </ul>
                                </div>
                               
                            </div>
                            
                </main>                     
            </center>
                  <div class="overlay" id="overlay">
                <div class="popup" id="popup">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup" onclick="cerrar_popup()">X</a>
                    <h3>Solicitud</h3>
                    <!--
                    <form action=""> -->
                        <div class="contenedor-inputs">
                                <center>
                                <table>
                                   
                                    <tr>
                                        <td>Cantidad:</td>
                                        <td><input type="number" name="txtcantidadproducto"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">¿ Desea añadir un mensaje al vendedor ?</td>
                                        
                                    </tr>  
                                    <tr>
                                        <td colspan="2" ><textarea name="txtmensaje" style=" width: 300px;height: 200px;"></textarea></td>
                                        
                                    </tr>
                                </table>
                                    <br>
                                </center>
                        </div>
                    <input type="button" class="btn-submit" value="Solicitar" onclick="solicitar()">
                  
                </div>
            </div>  
     
      
            
       
           
<!-- <div class="capa"> </div> -->
 <input type="checkbox" id="btn-menu"> 
   <?php 
include '../principal/barra_perfil.php';?>
            </main>
        </form>
      
    </body>
</html>