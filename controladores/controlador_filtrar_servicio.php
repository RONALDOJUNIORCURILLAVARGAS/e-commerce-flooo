<?php
session_start();
require_once '../dao/ServicioDAO.php';  
$opc=$_GET['opcion'];
switch($opc){
    case 1:{
        $txtbuscar=$_GET['txtbuscar'];
        $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Buscar_todo_servicio($txtbuscar);
             $_SESSION['secta_servicio']=$lisa;
             header('location:../vista/Servicios/servicios.php');
        break;
    }
    case 2:{
        $id_servicio=$_GET['id_categoria'];
        $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Buscar_categoria_todo_servicio($id_servicio);
             $_SESSION['secta_servicio']=$lisa;
             header('location:../vista/Servicios/servicios.php');
        break;
    }
    
}
?>