<?php
session_start();
require_once '../dao/ProductoDAO.php'; 
require_once '../dao/ServicioDAO.php'; 
require_once '../dao/TiendaDAO.php'; 
$op=$_GET['op'];
  switch($op){
            case 1:{
                $objtiendaDAO = new TiendaDAO();
                $res=$objtiendaDAO->Mostrar_toda_tienda();
                $_SESSION['nona_tienda']=$res;
              header('location:../vista/Perfil/principal/perfil_principio.php');
              break;
                }
             case 2:
             {
                 
   
                 $objproductoDAO=new ProductoDAO();
                 $lis=$objproductoDAO->Mostrar_todo_producto();
                 $_SESSION['secta_producto']=$lis;
                 //Estado de la existencia de tiendas
                 $_SESSION['existe_tienda']=true;
                  $_SESSION['estado_envio_correo']=0;
               header('location:../vista/Perfil/productos/perfil_productos.php');
              break;
                }
              case 3:
           { 
             $_SESSION['estado']=true;
             $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Mostrar_todo_servicio();
             $_SESSION['secta_servicio']=$lisa;
              //Estado de la existencia de tiendas   
             $_SESSION['existe_tienda']=true;
             $_SESSION['estado_envio_correo']=0;
             header('location:../vista/Perfil/servicios/perfil_servicios.php');
            break;
            }  
             case 4:
           { 
             header('location:../vista/Perfil/nosotros/perfil_nosotros.php');
            break;
            }  
            
             case 5:
           { 
             header('location:../vista/principal/login_reg/registro.php');
            break;
            }    
             case 6:
           { 
             header('location:../vista/principal/login_reg/login.php');
            break;
            }    
      }

?>

