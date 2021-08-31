<?php

   session_start();
require_once '../bean/ServicioBean.php'; 
require_once '../dao/ServicioDAO.php'; 
require_once '../dao/LineaSolicitudDAO.php';
$id=$_GET['cod'];
$objserviciobean= new ServicioBean();
$lista=$_SESSION['lista'];      
foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        } 
$objserviciobean->setID($id);
$objsolicitudDAO =new  LineaSolicitudDAO();
$e=$objsolicitudDAO->BorrarSolicitudLineaServicio($id);
$objservicioDAO=new ServicioDAO();
$i=$objservicioDAO->EliminarServicio($objserviciobean);
$lis=$objservicioDAO->ListarServicio($id_usuario);
$_SESSION['lista_servicio']=$lis;
header("Location:../vista/Perfil/servicios/tabla_servicios.php");

?>
