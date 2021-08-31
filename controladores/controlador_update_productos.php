<?php

session_start();
require_once '../bean/ProductoBean.php'; 
require_once '../dao/ProductoDAO.php'; 
require_once '../dao/CategoriaProductoDAO.php';
require_once '../dao/TiendaDAO.php';
require_once '../bean/Tiendabean.php';
$opc=$_GET['op'];
switch($opc){
    case 1:
        $lista=$_SESSION['lista'];      
            foreach ($lista as $reg){ 
               $id_usuario=$reg['ID_USUARIO'];
            } 
        $_SESSION['id_producto']=$_GET['cod'];
      
        $objtiendabean=new Tiendabean();
        $objtiendabean->setID_USUARIO($id_usuario);
        $objtiendaDAO=new TiendaDAO();
        $i=$objtiendaDAO->ListarTienda($objtiendabean);
        $objcategoria= new CategoriaProductoDAO();
        $a=$objcategoria->RecuperarCategoria();
             $_SESSION['listatienda']=$i;   
             $_SESSION['categoriaproducto']=$a;
        
        header("Location:../vista/Perfil/productos/editar_producto.php");
        break;
    case 2:
        $lista=$_SESSION['lista'];      
            foreach ($lista as $reg){ 
               $id_usuario=$reg['ID_USUARIO'];
            } 
        
        $objproductobean=new ProductoBean();
        $id_producto=$_SESSION['id_producto'];
        $nombreprod=$_GET['txtnombre'];
        $descripcionprod=$_GET['txtdescripcion'];
        $cantidadprod=$_GET['txtcantidad'];
        $precioprod=$_GET['txtprecio'];
        $tiendaprod=$_GET['combobo'];
        $categoriaprod=$_GET['combobox']; 


        
       $objproductobean=new ProductoBean();
       $objproductobean->setID($id_producto);
       $objproductobean->setNOMBRE($nombreprod);
       $objproductobean->setDESCRIPCION($descripcionprod);
       $objproductobean->setCANTIDAD($cantidadprod);
       $objproductobean->setPRECIO($precioprod);
       $objproductobean->setID_TIENDA($tiendaprod);
       $objproductobean->setID_CATEGORIA($categoriaprod);
        
        
        $objproductoDAO=new ProductoDAO();
       
        $i=$objproductoDAO->ActualizarProducto($objproductobean);
        $lis=$objproductoDAO->ListarProducto($id_usuario);
        $_SESSION['lista_producto']=$lis;
        header("Location:../vista/Perfil/productos/tabla_productos.php");
        break;
}


?>