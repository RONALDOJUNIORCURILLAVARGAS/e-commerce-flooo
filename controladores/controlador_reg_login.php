<?php
session_start();
require_once '../bean/Personabean.php'; 
require_once '../dao/PersonaDAO.php'; 
require_once '../dao/TiendaDAO.php'; 
$op=$_GET['op'];

  switch($op){
       case 1:{
            unset($_SESSION['lista']);
            /*Creamos una sesion que retornara el estado*/
             $_SESSION['estado']=true;
        /*Capturamos el valor mandado por la funcion que le asigno valores a los  hidden creados*/
        $usuario=$_GET['usuario'];
        $pass=$_GET['clave'];
        /*Creamos un objeto de la clase Personabean*/
       $objPersonaBean=new Personabean();
        /*Insertamos los valores dentro de ese objeto con las variables creadas*/
       $objPersonaBean->setUSUARIO($usuario);
       $objPersonaBean->setPASS($pass);
       /* Creamos un objeto de la clase PersonaDAO que es donde se encuentran nuestras funciones*/
        $objPersonaDAO=new PersonaDAO();
         /*El return enviado de esa funcion se captura en $lista que es un array en este caso , por eso ejecutamos enviando parametros que son los del objeto $objPersonaBean*/
        $lista=$objPersonaDAO->IngresarUsuario($objPersonaBean);  
        /*El elemento capturado necesita ser usado en otra pagina para eso lo enviaremos dentro de un $_SESSION*/
        if($lista==null)
        {
            /*Asignamos el estado a la sesion estado*/
         $_SESSION['estado']=false;   
         header('location:../vista/seguridad/login.php');
        break;
        }
         $objtiendaDAO = new TiendaDAO();
                $res=$objtiendaDAO->Mostrar_toda_tienda();
                $_SESSION['nona_tienda']=$res;
        $_SESSION['lista']=$lista;
        header('location:../vista/Perfil/principal/perfil_principio.php');
        break;
          }
        case 2:
           { 
            unset($_SESSION['lista']);
             header('location:../vista/seguridad/login.php');
            break;
            }            
      }
?>