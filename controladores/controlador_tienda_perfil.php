<?php
session_start();
require_once '../bean/Tiendabean.php'; 
require_once '../dao/TiendaDAO.php'; 
$opc =$_GET['op'];
switch ($opc){
    case 1:{
        $lista=$_SESSION['lista'];      
        foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        } 
        $objtiendabean=new Tiendabean();
        
        $objtiendabean->setID_USUARIO($id_usuario);
         $objtiendadao=new TiendaDAO();
         
         $lista=$objtiendadao->ListarTienda($objtiendabean);
         $_SESSION['lista_tienda']=$lista;
            header("Location:../vista/Perfil/tienda/perfil_tienda.php");
        break;
    }
    case 2 :{    
            $objtiendaDAO = new TiendaDAO();
                $res=$objtiendaDAO->Mostrar_toda_tienda();
                $_SESSION['nona_tienda']=$res;
        header("Location:../vista/Perfil/principal/perfil_principio.php");
        break; }
}
?>
