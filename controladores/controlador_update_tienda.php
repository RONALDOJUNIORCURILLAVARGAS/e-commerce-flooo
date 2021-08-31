<?php
session_start();
require_once '../bean/Tiendabean.php'; 
require_once '../dao/TiendaDAO.php'; 
$opc=$_GET['op'];
switch($opc){
    case 1:{
        $COD=$_GET['cod'];
        $_SESSION['id_tienda']=$COD;
        header("Location:../vista/Perfil/tienda/editar_tienda.php");
        break;   
    }
    case 2 :{
            header("Location:../vista/Perfil/tienda/perfil_tienda.php");
        break;
    }
    case 3:{
        /*Capturamos los valores sin el hidden*/
        $id=$_SESSION['id_tienda'];
        $nombre=$_GET['txtnombre'];
        $ubicacion=$_GET['txtubicacion'];
        $descripcion=$_GET['txtdescripcion'];
        $lista=$_SESSION['lista'];      
        foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        }            
        
        $objtiendabean=new Tiendabean();
        $objtiendabean->setID($id);
        $objtiendabean->setNOMBRE($nombre);
        $objtiendabean->setUBICACION($ubicacion);
        $objtiendabean->setDESCRIPCION($descripcion);
        $objtiendabean->setID_USUARIO($id_usuario);
        $objtiendaDAO=new TiendaDAO();
        $i=$objtiendaDAO->ActualizarTienda($objtiendabean);    
        $lis=$objtiendaDAO->ListarTienda($objtiendabean);
        $_SESSION['lista_tienda']=$lis;
        header("Location:../vista/Perfil/tienda/perfil_tienda.php");
        break;
    }
}

?>