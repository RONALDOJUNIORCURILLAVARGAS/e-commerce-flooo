<?php
session_start();
require_once '../bean/ProductoBean.php'; 
require_once '../dao/ProductoDAO.php'; 
require_once '../dao/LineaSolicitudDAO.php';
$id=$_GET['cod'];

$objproductobean= new ProductoBean();
$lista=$_SESSION['lista'];      
foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        } 
$objproductobean->setID($id);
$objsolicitudDAO=new LineaSolicitudDAO();
$e=$objsolicitudDAO->BorrarSolicitudLineaProducto($id);
$objproductoDAO=new ProductoDAO();
$i=$objproductoDAO->EliminarProducto($objproductobean);
$lis=$objproductoDAO->ListarProducto($id_usuario);
$_SESSION['lista_producto']=$lis;
header("Location:../vista/Perfil/productos/tabla_productos.php");

?>