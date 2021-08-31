
<?php
session_start();
$lis_producto=$_SESSION['secta_producto'];


?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Producto</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../../css/productos/style.css">
        <link href="../../css/perfil/producto_inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/productos/font-awesome.css">
        <link href="../../css/productos/producto.css"rel="stylesheet" type="text/css" >
        <link href="../../css/principal/estilo.css" rel="stylesheet" type="text/css"/> 
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
        <script src="../../js/productos/jquery-3.1.0.min.js"></script>
        <script src="../../js/productos/jquery.flexslider.js"></script>
        <script src="../../js/productos/main.js"></script>
       <!-- <script src="../../js/productos/producto.js"></script> 
        <script src="../../js/jquery/jquery.js"></script>-->
        <script src="../../js/inicio/inicio.js"></script>  
        <script>
        
        function popup(){
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
        function buscar(){
                window.document.form.action="../../controladores/controlador_filtrar_producto.php";
                window.document.form.method="GET";
                window.document.form.opcion.value='1';
                window.document.form.submit();
        }
        function buscar_categoria(id){
             window.document.form.action="../../controladores/controlador_filtrar_producto.php";
                window.document.form.method="GET";
                window.document.form.opcion.value='2';
                window.document.form.id_categoria.value=id;
                window.document.form.submit();
        }
        </script>
    </head>
    <body>
        
        <form name="form" id="form">
            <input type="hidden" name="op">
            <input type="hidden" name="opcion">
            <input type="hidden" name="id_categoria">
             <?php 
        include '../principal/menu.php';
        ?>
            <center>
                <main>
                            <div class="busqueda">
                                <table cellspacing="0">
                                    <tr>
                                        <td><div class="buscador"><Input type="text" placeholder="Buscar productos " name="txtbusqueda"></div></td>
                                        <td><div class="btn_busc"><button onclick="buscar()"><img src="../../imagenes/productos/lupa.png"></button></div></td>
                                    </tr>
                                </table>
                            </div>
                                    <div class="categorias">
                                        <h1><a id="cat">CATEGORÍAS</a></h1> 
                                        <h2><a onclick="buscar_categoria(1)"> <span class="Icon icon-heart"></span> Salud y Belleza</a> </h2>
                                        <h2><a onclick="buscar_categoria(2)"><span class="Icon icon-home2"> </span> Hogar e interiores</a></h2>
                                        <h2><a onclick="buscar_categoria(3)"><span class="Icon icon-mobile"> </span> Electrónica</a></h2>
                                        <h2><a onclick="buscar_categoria(4)"><span class="Icon icon-woman"> </span> Moda</a></h2>
                                        <h2><a onclick="buscar_categoria(5)"><span class="Icon icon-accessibility"> </span> Deportes</a></h2>
                                        <h2><a onclick="buscar_categoria(6)"><span class="Icon icon-windows"></span> Informática</a></h2>
                                        <h2><a onclick="buscar_categoria(7)"><span class="Icon icon-glass"></span> Alimentos</a></h2>
                                    </div>
                                    

                              
    <div class="div01">
                                    
                                    <ul style="margin-bottom:0px;">
                                        <?php foreach ($lis_producto as $value) {?>
                                        <li class="mostrar_lis" onclick="popup()"><label style="margin-top:5px;"><?php echo $value['NOMBRE_PRODUCTO']; ?></label>
                                            <div class="lista_contenido">
                                                <label class="lis_label">Descripcion : <?php echo $value['DESCRIPCION_PRODUCTO']; ?></label><br>
                                                <label class="lis_label">Precio : S/ <?php echo $value['PRECIO']; ?></label><br>
                                                <label class="lis_label">Categoria :  <?php echo $value['NOMBRE_CAT_PROD']; ?></label><br>
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
                  
                    <h3>BIENVENIDO</h3>
                    <!--
                    <form action=""> -->
                        <div class="contenedor-inputs">
                                <center>
                                <table>              
                                    <tr>
                                        <td colspan="2">Por favor inicie sesion antes de solicitar un producto !! </td>                                      
                                    </tr>  
                          
                                </table>
                                    <br>
                                </center>
                        </div>
                    <input type="button" class="btn-submit" value="OK !!" onclick="cerrar_popup()">
                  
                </div>
            </div>  
            <br><br><br><br><br><br>   
           <?php 
         include '../principal/footer.php';
         ?>
        </form>
    </body>
</html>
