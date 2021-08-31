<?php
session_set_cookie_params(10);
session_start();
require_once '../dao/ProductoDAO.php'; 
require_once '../dao/ServicioDAO.php'; 
$op=$_GET['op'];
  switch($op){
            case 1:{
                
              header('location:../vista/principal/FrmInicioUsuario.php');
              break;
                }
             case 2:
             {
                 $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Mostrar_todo_servicio();
             $_SESSION['secta_servicio']=$lisa;
              header('location:../vista/Servicios/servicios.php');
              break;
                }
              case 3:
           { 
                   $objproductoDAO=new ProductoDAO();
                 $lis=$objproductoDAO->Mostrar_todo_producto();
                 $_SESSION['secta_producto']=$lis;
             header('location:../vista/Productos/productos.php');
            break;
            }  
             case 4:
           { 
             header('location:../vista/Nosotros/nosotros.php');
            break;
            }  
            
             case 5:
           { 
                $_SESSION['estadoinsertar']=true; 
             header('location:../vista/seguridad/registro.php');
            break;
            }    
             case 6:
           { 
                  $_SESSION['estado']=true;   
             header('location:../vista/seguridad/login.php');
            break;
            }    
      }

?>

