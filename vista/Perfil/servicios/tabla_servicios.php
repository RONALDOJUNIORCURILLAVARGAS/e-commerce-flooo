<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
    die();
}
$richiboy=$_SESSION['lista_servicio'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de servicios</title>
        <link href="../../../css/tienda/cssperfiltienda.css" rel="stylesheet" type="text/css"/>
        
         <link href="../../../css/cssRichard/bootstrap.min.css" rel="stylesheet"/>
        
        <script src="../../../js/registro/tb_servicios.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <form name="form">
            <input type="hidden" name="op">
            <input type="hidden" name="cod">

            <main >
                <button class="btn btn-success" bgcolor="green" onclick="salir_tabla('4')" ">Regresar</button>
                    <center>
                        <thead>Mis servicios <input type="button" class="btn btn-success" value="Registrar Servicio" onclick="salir_tabla('3')" ></thead>
                     </center>
                      <br>
                         <div class="container">
                        <table  class="table  table-bordered table-hover">
                            
                            <tbody>
                                <tr class="info">
                                    <th>  NOMBRE </th>
                                    <th>   DESCRIPCION </th>
                                    <th>   FECHA DE REGISTRO </th>
                                    <th>   EDITAR </th>
                                    <th>   ELIMINAR </th>
                                </tr>
                                <?php foreach($richiboy as $reg) {     ?>
                                <tr>
                                    <td><?php echo $reg['NOMBRE_SERVICIO'];?></td>
                                    <td><?php echo $reg['DESCRIPCION_SERVICIO'];?></td>
                                    <td><?php echo $reg['FECHA_REG_SERVICIO'];?></td>
                                    <td><input class="btn btn-warning" type="button" value="Editar" onclick="editar_servicio('1',<?php echo $reg['ID_SERVICIO'];?>)"></td>
                                    <td><input class="btn btn-danger"  type="button" value="Eliminar" onclick="eliminar_servicio(<?php echo $reg['ID_SERVICIO'];?>)"></td>
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
