<?php

session_start();
require_once '../bean/ServicioBean.php'; 
require_once '../dao/ServicioDAO.php'; 
require_once '../bean/Tiendabean.php';
require_once '../dao/TiendaDAO.php';
require_once '../dao/CategoriaServicioDAO.php';
$opc=$_GET['op'];
switch ($opc){
    case 1:
        $lista=$_SESSION['lista'];      
            foreach ($lista as $reg){ 
               $id_usuario=$reg['ID_USUARIO'];
            } 
        $_SESSION['id_servicio']=$_GET['cod'];
      
        $objtiendabean=new Tiendabean();
        $objtiendabean->setID_USUARIO($id_usuario);
        $objtiendaDAO=new TiendaDAO();
        $i=$objtiendaDAO->ListarTienda($objtiendabean);
        $objcategoria= new CategoriasServicioDAO();
        $a=$objcategoria->RecuperarCategoria();
             $_SESSION['listatienda']=$i;   
             $_SESSION['categoriasevicio']=$a;
        
        header("Location:../vista/Perfil/servicios/editar_servicio.php");
       break;
    case 2:
        $lista=$_SESSION['lista'];      
            foreach ($lista as $reg){ 
               $id_usuario=$reg['ID_USUARIO'];
            } 
             $id_servicio=$_SESSION['id_servicio'];
             $nombreserv=$_GET['txtserv'];
             $descripcionserv=$_GET['txtdescrip'];            
             $tiendaserv=$_GET['combobo'];
             $categoriaserv=$_GET['combobox'];
             
             $objserviciobean=new ServicioBean();
             $objserviciobean->setID($id_servicio);
             $objserviciobean->setNOMBRE($nombreserv);
             $objserviciobean->setDESCRIPCION($descripcionserv);           
             $objserviciobean->setID_TIENDA($tiendaserv);
             $objserviciobean->setID_CATEGORIA($categoriaserv);
        $objservicioDAO = new ServicioDAO();
        $i=$objservicioDAO->ActualizarServicio($objserviciobean);  
        $lis=$objservicioDAO->ListarServicio($id_usuario);
        $_SESSION['lista_servicio']=$lis;
         header("Location:../vista/Perfil/servicios/tabla_servicios.php");
        break;
}



?>