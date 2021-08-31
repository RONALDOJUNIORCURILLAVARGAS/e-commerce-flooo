<?php
$opc =$_GET['op'];
switch ($opc){
    case 1:{
            header("Location:../vista/Perfil/tienda/crear_tienda.php");
        break;
    }
    case 2 :{    
            header("Location:../vista/Perfil/tienda/perfil_tienda.php");
        break; }
}

?>

