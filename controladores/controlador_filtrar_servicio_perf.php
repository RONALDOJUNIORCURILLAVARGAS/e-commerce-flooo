<?php
session_start();
require_once '../dao/ServicioDAO.php';  
$opc=$_GET['opcion_busqueda'];
switch($opc){
    case 1:{
        $txtbuscar=$_GET['txtbuscar'];
        $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Buscar_todo_servicio($txtbuscar);
             $_SESSION['secta_servicio']=$lisa;
              //Estado de la existencia de tiendas   
             $_SESSION['existe_tienda']=true;
             $_SESSION['estado_envio_correo']=0;
             header('location:../vista/Perfil/servicios/perfil_servicios.php');
        break;
    }
    case 2:{
        $id_servicio=$_GET['id_categoria'];
        $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Buscar_categoria_todo_servicio($id_servicio);
             $_SESSION['secta_servicio']=$lisa;
              //Estado de la existencia de tiendas   
             $_SESSION['existe_tienda']=true;
             $_SESSION['estado_envio_correo']=0;
             header('location:../vista/Perfil/servicios/perfil_servicios.php');
        break;
    }
    
}
?>