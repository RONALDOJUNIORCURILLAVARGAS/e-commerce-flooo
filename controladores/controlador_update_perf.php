<?php
session_start();
require_once '../bean/Personabean.php'; 
require_once '../dao/PersonaDAO.php'; 
$nombre=$_GET['txtnombre'];
$apellido=$_GET['txtapellido'];
$direccion=$_GET['txtdireccion'];
$dni=$_GET['txtdni'];
$celular=$_GET['txtcelular'];
$lista=$_SESSION['lista'];      
        foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
           $correo=$reg['CORREO_USUARIO'];
           $clave=$reg['PASSWORD_USUARIO'];
        } 
$objPersonaBean = new Personabean();
$objPersonaBean->setID($id_usuario);
$objPersonaBean->setNOMBRE($nombre);
$objPersonaBean->setAPELLIDO($apellido);
$objPersonaBean->setDIRECCION($direccion);
$objPersonaBean->setDNI($dni);
$objPersonaBean->setCELULAR($celular);
$objPersonaBean->setUSUARIO($correo);
$objPersonaBean->setPASS($clave);

$objPersonaDAO= new PersonaDAO();
$i=$objPersonaDAO->ActualizarUsuario($objPersonaBean);

 $lis=$objPersonaDAO->IngresarUsuario($objPersonaBean);       
 $_SESSION['lista']=$lis;

header("Location:../vista/Perfil/principal/perfil_principio.php");
?>