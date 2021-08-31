<?php
session_start();
require_once '../dao/CalificacionDAO.php';
require_once '../dao/TiendaDAO.php';
$id_tienda=$_GET['id_tienda'];
$calificar=$_GET['calif'];
$lista=$_SESSION['lista'];
foreach ($lista as $value) {
    $id_usuario=$value['ID_USUARIO'];
}
$objcalificar=new CalificacionDAO();
$search=$objcalificar->BuscarCALIFICACIONdeUSUARIO($id_tienda, $id_usuario);
if($search){
    $update=$objcalificar->ActualizarCALIFICACION($id_tienda, $id_usuario,$calificar);
}
else{
$insert=$objcalificar->InsertarCALIFICACION($id_tienda, $id_usuario,$calificar);
}
$objtiendaDAO = new TiendaDAO();
                $res=$objtiendaDAO->Mostrar_toda_tienda();
                $_SESSION['nona_tienda']=$res;
              header('location:../vista/Perfil/principal/perfil_principio.php');
?>