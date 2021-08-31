<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
   // die();
    header('location:../../../vista/principal/FrmInicioUsuario.php');
}
$lista=$_SESSION['lista_tienda'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
        function salir_tienda(opc){
         window.document.form.action="../../../controladores/controlador_tienda_perfil.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.submit();
     }
         function registrar_tienda(opc){
         window.document.form.action="../../../controladores/controlador_registrar_tienda.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.submit(); 
         }
         function eliminar_tienda(id){
         window.document.form.action="../../../controladores/controlador_delete_tienda.php";
         window.document.form.method="GET";
         window.document.form.cod.value=id;
         window.document.form.submit(); 
         } 
         function editar_tienda(opc,id){
         window.document.form.action="../../../controladores/controlador_update_tienda.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.cod.value=id;
         window.document.form.submit();     
         }

        </script>
        <link href="../../../css/tienda/cssperfiltienda.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
    </head>
    <body>
        <form name="form">
            <input type="hidden" name="op">
            <input type="hidden" name="cod">
            
            <main >
                 <input class="btn btn-success" type="button" value="Regresar" onclick="salir_tienda('2')" >
                 <center>
                       <thead>Mis tiendas <input class="btn btn-success" type="button" value="Registrar" onclick="registrar_tienda('1')" ></thead>
                 </center>
                 <br>
                <div class="container">
                        <table  class="table  table-bordered table-hover">
                          
                            <tbody>
                                <tr class="info">
                                    <th>  NOMBRE </th>
                                    <th>   DESCRIPCION </th>
                                    <th>   DIRECCION </th>
                                    <th>   CALIFICACION PROMEDIO </th>
                                    <th>   EDITAR </th>
                                    <th>   ELIMINAR </th>
                                </tr>
                                <?php foreach($lista as $reg) {     ?>
                                <tr>
                                    <td><?php echo $reg['NOMBRE_TIENDA'];?></td>
                                    <td><?php echo $reg['DESCRIPCION_TIENDA'];?></td>
                                    <td><?php echo $reg['UBICACION_TIENDA'];?></td>
                                    <td><?php echo $reg['PROM_CALIFICACION'];?></td>
                                    <td><input class="btn btn-warning" type="button" value="Editar" onclick="editar_tienda('1',<?php echo $reg['ID_TIENDA'];?>)"></td>
                                    <td><input class="btn btn-danger"  type="button" value="Eliminar" onclick="eliminar_tienda(<?php echo $reg['ID_TIENDA'];?>)"></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>  

                </div>
            </main>
        </form>
        <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
                <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>