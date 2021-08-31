<?php
session_start();
require_once '../dao/ProductoDAO.php'; 
$opc=$_GET['opcion_busqueda'];
switch($opc){
    case 1:{
        $txtbuscar=$_GET['txtbusqueda'];
        $objproductoDAO=new ProductoDAO();
        $lista=$objproductoDAO->Buscar_todo_producto($txtbuscar);
         $_SESSION['secta_producto']=$lista;
                 //Estado de la existencia de tiendas
                 $_SESSION['existe_tienda']=true;
                  $_SESSION['estado_envio_correo']=0;
               header('location:../vista/Perfil/productos/perfil_productos.php');
        break;
    }
    case 2:{
         $id_producto=$_GET['id_categoria'];
          $objproductoDAO=new ProductoDAO();
        $lista=$objproductoDAO->Buscar_categoria_todo_producto($id_producto);
         $_SESSION['secta_producto']=$lista;
                 //Estado de la existencia de tiendas
                 $_SESSION['existe_tienda']=true;
                  $_SESSION['estado_envio_correo']=0;
               header('location:../vista/Perfil/productos/perfil_productos.php');
        break;
    }
    
}
?>