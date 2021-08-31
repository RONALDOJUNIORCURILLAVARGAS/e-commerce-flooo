<?php
session_start();
require_once '../bean/Personabean.php'; 
require_once '../dao/PersonaDAO.php'; 
$opcion=$_GET['op'];

switch ($opcion){
case 1:
        { 
    /*Capturamos el valor mandado por la funcion que le asigno valores a los  hidden creados*/
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $usuario=$_GET['usuario'];
        $password=$_GET['pass'];
        $direccion=$_GET['direccion'];
        $documento=$_GET['documento'];
        $celular=$_GET['celular'];
        
        
        /*Creamos un objeto de la clase Personabean*/
       $objPersonaBean=new Personabean();
       /*Insertamos los valores dentro de ese objeto con las variables creadas*/
       $objPersonaBean->setNOMBRE($nombre);
       $objPersonaBean->setAPELLIDO($apellido);
       $objPersonaBean->setUSUARIO($usuario);
       $objPersonaBean->setPASS($password);
       $objPersonaBean->setDIRECCION($direccion);
       $objPersonaBean->setDNI($documento);
       $objPersonaBean->setCELULAR($celular);
       /* Creamos un objeto de la clase PersonaDAO que es donde se encuentran nuestras funciones*/
        $objPersonaDAO=new PersonaDAO();
        $estado=$objPersonaDAO->VerificarUsuario($objPersonaBean);
        if($estado==null){
            /*El return enviado de esa funcion se captura en $i , por eso ejecutamos enviando parametros que son los del objeto $objPersonaBean*/
        $i=$objPersonaDAO->InsertarUsuario($objPersonaBean);
        /*El elemento capturado necesita ser usado en otra pagina para eso lo enviaremos dentro de un $_SESSION*/
        $_SESSION['estadoinsertar']=$i; 
         /*Actualizando lista*/
        header('location:../vista/principal/FrmInicioUsuario.php');
        break;
        }
        else{
            $_SESSION['estadoinsertar']=false;
            header('location:../vista/seguridad/registro.php');
        }
        
       
       
     break;
        }
case 2:{
        unset($_SESSION['lista']);
        header('location:../vista/frmmenu.php');
        break;
}

}

?>
