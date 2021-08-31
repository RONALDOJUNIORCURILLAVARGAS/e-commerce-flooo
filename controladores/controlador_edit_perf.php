<?php
$op=$_GET['op'];
        switch($op){
            case 1:{
                header('location:../vista/Perfil/principal/perfil_editar.php');
                break;}
            case 2:{
                 header('location:../vista/Perfil/principal/perfil_principio.php');
                break;}
        }
?>
