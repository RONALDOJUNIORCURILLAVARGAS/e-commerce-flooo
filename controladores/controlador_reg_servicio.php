<?php
session_start();
require_once '../bean/ServicioBean.php';
require_once '../dao/ServicioDAO.php';
require_once '../bean/Tiendabean.php';
require_once '../dao/TiendaDAO.php';
//require_once '../bean/CategoriaServiciobean.php';
require_once '../dao/CategoriaServicioDAO.php';
$opc=$_GET['op'];
switch ($opc){
    case 1:{
        $lista=$_SESSION['lista'];
             
             foreach ($lista as $reg){
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
                header("Location:../vista/Perfil/servicios/perfil_servicios.php");
                break;
            }
             $objserviciodao=new ServicioDAO();
             $lista=$objserviciodao->ListarServicio($id_usuario);
             $_SESSION['lista_servicio']=$lista;
             header("Location:../vista/Perfil/servicios/tabla_servicios.php");
             break;
        /*$lista=$_SESSION['lista'];
        foreach ($lista as $reg){
            $id_usuario=$reg['ID_USUARIO'];
        }
        $objcategoriadao=new CategoriasServicioDAO();
        $i=$objcategoriadao->RecuperarCategoria();
        $_SESSION['categoriasevicio']=$i;
        
        $objtiendadean=new Tiendabean();
       $objtiendadean->setID_USUARIO($id_usuario);
        $objtiendadao=new TiendaDAO();
        $cat=$objtiendadao->ListarTienda($objtiendadean);
        $_SESSION['listatienda']= $cat;
            header("Location:../vista/Perfil/servicios/Registro_servicio.php");
            break;*/
    }
    case 2:{      
             $lista=$_SESSION['lista'];
             
             foreach ($lista as $reg){
                 $id_usuario=$reg['ID_USUARIO'];
             }
             
             $nombreserv=$_GET['txtserv'];
             $descripcionserv=$_GET['txtdescrip'];
             $tiendaserv=$_GET['combobo'];
             $categoriaserv=$_GET['combobox'];
             
             $objserviciobean=new ServicioBean();
             $objserviciobean->setNOMBRE($nombreserv);
             $objserviciobean->setDESCRIPCION($descripcionserv);
             $objserviciobean->setID_TIENDA($tiendaserv);
             $objserviciobean->setID_CATEGORIA($categoriaserv);
             
             $objserviciodao=new ServicioDAO();
             $estado=$objserviciodao->RegistrarServicio($objserviciobean);
             $lista=$objserviciodao->ListarServicio($id_usuario);
             $_SESSION['lista_servicio']=$lista;
             header("Location:../vista/Perfil/servicios/tabla_servicios.php");
        break;
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
        $objcategoria= new CategoriasServicioDAO();
        $a=$objcategoria->RecuperarCategoria();
             $_SESSION['listatienda']=$i;   
             $_SESSION['categoriasevicio']=$a;
            header("Location:../vista/Perfil/servicios/Registro_servicio.php");
        break;
    }
    case 4:{ 
            unset($_SESSION['lista_servicio']);
            $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Mostrar_todo_servicio();
             $_SESSION['secta_servicio']=$lisa;
              $_SESSION['estado_envio_correo']=0;
            header("Location:../vista/Perfil/servicios/perfil_servicios.php");
            break;
    }
   
}

?>

