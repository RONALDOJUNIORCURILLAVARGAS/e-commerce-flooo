<?php
session_start();
$estado=$_SESSION['estadoinsertar'];
if($estado===false)
{
    echo '<script>alert("Este correo ya se encuentra registrado vuelva a intentarlo");</script>';
    $estado=true;
    $_SESSION['estadoinsertar']=true;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link href="../../css/cssCurill/styleregis.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/hola.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/registro/registro.js"></script>
    </head>
    <body>
        <form name="form">
            <input type="hidden" name="op">
            <input type="hidden" name="nombre">
            <input type="hidden" name="apellido">
            <input type="hidden" name="direccion">
            <input type="hidden" name="documento">
            <input type="hidden" name="celular">
            <input type="hidden" name="usuario">
            <input type="hidden" name="pass">
           
            <header >
                <div class="img"><img src="../../img/imgcurilla/flooop.png" width="150" height="100"/></div>
                <div class="menu">
                    <ul>
                        <li onclick="redireccion('1')">Inicio</li></a>
                        <li onclick="redireccion('2')">Servicios</li>
                        <li onclick="redireccion('3')">Productos</li>
                        <li onclick="redireccion('4')">Nosotros</li>
                    </ul>
                </div>
            </header>
            <center>
             <main>
                 <div class="login_tittle"><span>CREAR CUENTA</span></div>
                 <div class="login_write_t">
               
                            <div class="login_write_user">
                                <table border="0">
                                    
                                   
                                        <tr>
                                            <td class="lab"><label>Nombres</label></td>
                                            <td><input class="inp" type="text" placeholder="nombres" id="log_mail" name="txtnombre"/></td>
                                        </tr>
                                        <tr>
                                           <td class="lab"><label>Apellidos</label></td>
                                            <td><input class="inp" type="text" placeholder="apellidos" id="log_mail" name="txtapellido"/></td>
                                       </tr>
                                       <tr>
                                           <td class="lab"><label>Direccion</label></td>
                                            <td><input class="inp" type="text" placeholder="direccion" id="log_mail" name="txtdireccion"/></td>
                                       </tr>
                                       <tr>
                                           <td class="lab"><label>Nºdocumento de identidad</label></td>
                                            <td><input class="inp" type="number" min="10000000" max="99999999" placeholder="doc.identidad" id="log_mail" name="txtdni"/></td>
                                       </tr>
                                       <tr>
                                           <td class="lab"><label>Nºcelular </label></td>
                                           <td><input class="inp" type="number" min="900000000" max="999999999" placeholder="nº celular" id="log_mail" name="txtcelular"/></td>
                                       </tr>
                                        <tr>
                                            <td class="lab"><label>Correo electronico</label></td>
                                            <td><input class="inp" type="email" placeholder="example@gmail.com" id="log_mail" name="txtusuario"/></td>
                                       </tr>
                                        <tr>
                                            <td class="lab"><label>Contraseña</label></td>
                                            <td><input class="inp" type="password" placeholder="contraseña" id="log_mail" name="txtclave1" value="" /></td>
                                       </tr>
                                        <tr>
                                            <td class="lab"><label>Confirmar contraseña</label></td>
                                            <td><input class="inp" type="password" placeholder="repetir contraseña" id="log_mail" name="txtclave2"/></td>
                                        </tr>
                              
                                </table>

                              </div>
                     
                     
                            <div class="login_chk">
                                <input type="checkbox" id="chk_log" name="chk_log" >
                                <span>¿Acepta los <u>terminos y condiciones</u>?</span>
                            </div>
                            
                            <div class="button_log">
                                <br>
                                <a onclick="crear()" class="button"> Crear Cuenta</a>
                                
                            </div>
                            <br>
                            <br>
                            <br><br><br><br>
                            <div class="link_log">
                                <a id="a1">¿Ya tiene una cuenta?</a>
                                <a id="a2" onclick="redireccion('6')">Iniciar sesión</a>
                            </div>
                 </div> 
            </main>
                
            </center>
            <br><br><br><br>
         <?php 
         include '../principal/footer.php';
         ?>
            
        </form>
        
        
      
    </body>
</html>
