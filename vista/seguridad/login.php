
<?php
session_start();
$estado=$_SESSION['estado'];
if($estado===false)
{
    echo '<script>alert("Esta cuenta no existe");</script>';
    $estado=true;
    $_SESSION['estado']=true;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
        <link href="../../css/cssCurill/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/hola.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/login/login.js"></script>
        
    </head>
    <body>
        <form name="form">
         <input type="hidden" name="op">
          <input type="hidden" name="usuario">
          <input type="hidden" name="clave">
            <header >
                <div class="img"><img src="../../img/imgcurilla/flooop.png" width="150" height="100"/></div>
                <div class="menu">
                    <ul>
                        <li onclick="redireccion('1')" >Inicio</li>
                        <li onclick="redireccion('2')">Servicios</li>
                        <li onclick="redireccion('3')">Productos</li>
                        <li onclick="redireccion('4')">Nosotros</li>
                    </ul>
                </div>
            </header>
            <center>
             <main>
                 <div class="login_tittle"><span>INICIAR SESION</span></div>
                 <div class="login_write">
               
                            <div class="login_write_user">
                                <label>Correo electrónico</label><br>
                                <input class="inp" type="text" placeholder="Correo electrónico" id="log_mail" name="txtusuario"/><br>
                            </div>
                            <br>
                            <div class="login_write_pass">
                                <br><label>Contraseña</label><br>
                                <input class="inp" type="password" placeholder="Contraseña" id="log_pass" name="txtclave"/><br>
                            </div>
                            <div class="login_chk">
                                <input type="checkbox" id="chk_log" name="chk_log" >
                                <span>Recordar inicio de sesión</span>
                            </div>
                            
                            <div class="button_log">
                                <br>
                                <br><button type="submit" class="btn_log" onclick="Entrar()">Iniciar Sesión</button><br>
                                
                            </div>
                            <br>
                            <br>
                            <br><br><br><br><br><br>
                            <div class="link_log">
                                <a id="a1">¿No tiene una cuenta?</a>
                                <a onclick="redireccion('5')" > Registrate</a>
                              
                             
                               
                            </div>
                 </div> 
            </main>
                
            </center>
              <br><br><br>
         <?php 
         include '../principal/footer.php';
         ?>
            
        </form>
        
        
    </body>
</html>
