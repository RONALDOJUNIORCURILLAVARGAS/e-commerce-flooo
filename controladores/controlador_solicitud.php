<?php
session_start();
require_once '../dao/TiendaDAO.php';
require_once '../dao/LineaSolicitudDAO.php';
$opc=$_GET['op'];
switch ($opc){
    case 1:{
        $lista=$_SESSION['lista'];      
        foreach ($lista as $reg){ 
           $id_usuario=$reg['ID_USUARIO'];
        } 
        $objLineaSolicitud=new LineaSolicitudDAO();
        $res=$objLineaSolicitud->ListarmisSolicitudes($id_usuario);
        $es=$objLineaSolicitud->ListarmisSolicitudesser($id_usuario);
        $_SESSION['lista_solicitud_producto']=$res;
        $_SESSION['lista_solicitud_servicio']=$es;
            header("Location:../vista/Perfil/solicitud/perfil_solicitud.php");
        break;
    }
    case 2:{
        $objtiendaDAO = new TiendaDAO();
                $res=$objtiendaDAO->Mostrar_toda_tienda();
                $_SESSION['nona_tienda']=$res;
              header('location:../vista/Perfil/principal/perfil_principio.php');
        break;
    }
}
?>