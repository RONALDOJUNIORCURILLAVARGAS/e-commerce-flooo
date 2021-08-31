<?php
session_start();
require_once '../bean/Tiendabean.php'; 
require_once '../dao/TiendaDAO.php'; 
//require_once '../dao/PersonaDAO.php'; 
$opc=$_GET['op'];
switch ($opc){
    case 1:{
        $lista=$_SESSION['lista'];      
        foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        } 
        $nombre=$_GET['nombre'];
        $descripcion=$_GET['descripcion'];
        $ubicacion=$_GET['ubicacion'];
        
        $objtiendabean=new Tiendabean();
        $objtiendabean->setNOMBRE($nombre);
        $objtiendabean->setUBICACION($ubicacion);
        $objtiendabean->setDESCRIPCION($descripcion);
        $objtiendabean->setID_USUARIO($id_usuario);
        
        $objtiendadao=new TiendaDAO();
        $estado=$objtiendadao->InsertarTienda($objtiendabean);
        //Insertando por defaulta la calificacion 0
        $a=$objtiendadao->BuscarIDtienda($objtiendabean);
        foreach ($a as $rec){ 
           $id_tienda=$rec['ID_TIENDA'];
        }       
        $objtiendabean->setID($id_tienda);
        $r=$objtiendadao->Insertarcalificaciondefault($objtiendabean);
        $lista=$objtiendadao->ListarTienda($objtiendabean);
        $_SESSION['lista_tienda']=$lista;
        header("Location:../vista/Perfil/tienda/perfil_tienda.php");
        break;}
    case 2:{
        
        berak;}
}
?>
