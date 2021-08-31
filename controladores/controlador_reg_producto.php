<?php
session_start();
require_once '../bean/ProductoBean.php';
require_once '../dao/ProductoDAO.php';
require_once '../dao/ProductoDAO.php';
require_once '../bean/Tiendabean.php';
require_once '../dao/TiendaDAO.php';
//require_once '../bean/CategoriaProductobean.php';
require_once '../dao/CategoriaProductoDAO.php';
$opc=$_GET['op'];
switch ($opc){
    case 1:
    {   
        $lista=$_SESSION['lista'];
        foreach ($lista as $reg)
        {
        $id_usuario=$reg['ID_USUARIO'];    
        }
        //CREAMOS UN OBJETO TIENDA PARA HACER LA VERFICACION DE EZISTENCIA DE TIENDAS
        $objtiendabean =new Tiendabean();
        $objtiendabean->setID_USUARIO($id_usuario);
        $objtiendaDAO=new TiendaDAO();
        $i=$objtiendaDAO->ListarTienda($objtiendabean);
        if($i==null)
        {
            $_SESSION['existe_tienda']=false;
             $_SESSION['estado_envio_correo']=0;
            header("Location:../vista/Perfil/productos/perfil_productos.php");
            break;
        }
       
       $objproductodao=new ProductoDAO();
       $lista=$objproductodao->ListarProducto($id_usuario);
       
       $_SESSION['lista_producto']=$lista;
        
        
            header("Location:../vista/Perfil/productos/tabla_productos.php");
        break;
    }
    case 2:{ 
        
         $lista=$_SESSION['lista'];
        foreach ($lista as $reg)
        {
        $id_usuario=$reg['ID_USUARIO'];    
        }

        $nombreprod=$_GET['txtnombre'];
        $descripcionprod=$_GET['txtdescripcion'];
        $cantidadprod=$_GET['txtcantidad'];
        $precioprod=$_GET['txtprecio'];
        $tiendaprod=$_GET['combobo'];
        $categoriaprod=$_GET['combobox']; 


        
       $objproductobean=new ProductoBean();
       $objproductobean->setNOMBRE($nombreprod);
       $objproductobean->setDESCRIPCION($descripcionprod);
       $objproductobean->setCANTIDAD($cantidadprod);
       $objproductobean->setPRECIO($precioprod);
       $objproductobean->setID_TIENDA($tiendaprod);
       $objproductobean->setID_CATEGORIA($categoriaprod);
       
       $objproductodao=new ProductoDAO();
       $estado=$objproductodao->RegistrarProducto($objproductobean);
       $lista=$objproductodao->ListarProducto($id_usuario);
       
       $_SESSION['lista_producto']=$lista;
        
        
            header("Location:../vista/Perfil/productos/tabla_productos.php");
        break;
        
        
        /*$lista=$_SESSION['lista'];
        foreach ($lista as $reg)
        {
        $id_usuario=$reg['ID_USUARIO'];    
        }
        
        $objcategoriadao=new CategoriaProductoDAO();
        $i=$objcategoriadao->RecuperarCategoria();
        $_SESSION['categoriaproducto']=$i;
        
        $objtinedadean=new Tiendabean();
        $objtinedadean->setID_USUARIO($id_usuario);
        $objtiendadao=new TiendaDAO();
        $cat=$objtiendadao->ListarTienda($objtinedadean);
        $_SESSION['listatienda']=$cat;
        header("Location:../vista/Perfil/productos/Registro_producto.php");
            break;   */
    }
    case 3:{
        $lista=$_SESSION['lista'];
        foreach ($lista as $reg)
        {
        $id_usuario=$reg['ID_USUARIO'];    
        }
        $objtiendabean=new Tiendabean();
        $objtiendabean->setID_USUARIO($id_usuario);
        $objtiendaDAO=new TiendaDAO();
        $i=$objtiendaDAO->ListarTienda($objtiendabean);
        $objcategoria= new CategoriaProductoDAO();
        $a=$objcategoria->RecuperarCategoria();
             $_SESSION['listatienda']=$i;   
             $_SESSION['categoriaproducto']=$a;
            header("Location:../vista/Perfil/productos/Registro_producto.php");
        break;
    }
    case 4:
    {       
            unset($_SESSION['lista_producto']);
             $objproductoDAO=new ProductoDAO();
                 $lis=$objproductoDAO->Mostrar_todo_producto();
                 $_SESSION['secta_producto']=$lis;
                  $_SESSION['estado_envio_correo']=0;
            header("Location:../vista/Perfil/productos/perfil_productos.php");
        break;
    }
   
}



?>
