<?php
session_start();
require_once '../bean/Tiendabean.php'; 
require_once '../dao/TiendaDAO.php'; 
require_once '../dao/ServicioDAO.php';
require_once '../bean/ServicioBean.php';
require_once '../dao/ProductoDAO.php';
require_once '../bean/ProductoBean.php';
require_once '../dao/LineaSolicitudDAO.php';
$id=$_GET['cod'];
$objtiendabean= new Tiendabean();
$lista=$_SESSION['lista'];      
        foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        }   
 $objserviciobean=new ServicioBean();
 $objproductobean=new ProductoBean();
 $objservicioDAO=new ServicioDAO();
 $objproductoDAO=new ProductoDAO();
 $objLineaSolicitud=new LineaSolicitudDAO();
 $li_ser=$objservicioDAO->ListarServicio($id_usuario);
 foreach ($li_ser as $value) {
    $id_servicio=$value['ID_SERVICIO'];
    $Res=$objLineaSolicitud->BorrarSolicitudLineaServicio($id_servicio);  
    $objserviciobean->setID($id_servicio);
    $res_servicio=$objservicioDAO->EliminarServicio($objserviciobean);
}
$li_pro=$objproductoDAO->ListarProducto($id_usuario);
 foreach ($li_pro as $value) {
    $id_producto=$value['ID_PRODUCTO'];
    $Res=$objLineaSolicitud->BorrarSolicitudLineaProducto($id_producto);
    $objproductobean->setID($id_producto);
    $res_producto=$objproductoDAO->EliminarProducto($objproductobean);
}
 $objproductoDAO=new ProductoDAO();
        
$objtiendabean->setID_USUARIO($id_usuario);
$objtiendabean->setID($id);
$objtiendaDAO=new TiendaDAO();
$a=$objtiendaDAO->EliminarCalificacion($objtiendabean);
$i=$objtiendaDAO->EliminarTienda($objtiendabean);
$lis=$objtiendaDAO->ListarTienda($objtiendabean);
$_SESSION['lista_tienda']=$lis;
header("Location:../vista/Perfil/tienda/perfil_tienda.php");
?>