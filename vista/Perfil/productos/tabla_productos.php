<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
    die();
}
$jojo=$_SESSION['lista_producto'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de productos</title>
        <link href="../../../css/tienda/cssperfiltienda.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/productos/tb_productos.js" type="text/javascript"></script>
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <form name="form">
            <input type="hidden" name="op">
            <input type="hidden" name="cod">
      
            <main >
                 <input class="btn btn-success" type="button" value="Regresar" onclick="salir_tabla('4')" ">
                 <center>
                      <thead>Mis productos <input type="button" class="btn btn-success" value="Registrar Producto" onclick="salir_tabla('3')"></thead>
                 </center>
                 <br>
                 <div class="container">
                        <table  class="table  table-bordered table-hover"> 
                            <tbody>
                                <tr class="info">
                                    <th>  NOMBRE </th>
                                    <th>   DESCRIPCION </th>
                                    <th>   FECHA DE REGISTRO </th>
                                    <th>   CANTIDAD </th>
                                    <th>   PRECIO </th>
                                    <th>   EDITAR </th>
                                    <th>   ELIMINAR </th>
                                </tr>
                                <?php foreach($jojo as $reg) {     ?>
                                <tr>
                                    <td><?php echo $reg['NOMBRE_PRODUCTO'];?></td>
                                    <td><?php echo $reg['DESCRIPCION_PRODUCTO'];?></td>
                                    <td><?php echo $reg['FECHA_REG_PRODUCTO'];?></td>
                                    <td><?php echo $reg['CANTIDAD_PRODUCTO'];?> und.</td>
                                    <td>S/ <?php echo $reg['PRECIO'];?></td>
                                    <td><input class="btn btn-warning"  type="button" value="Editar" onclick="editar_producto('1',<?php echo $reg['ID_PRODUCTO'];?>)"></td>
                                    <td><input class="btn btn-danger"  type="button" value="Eliminar" onclick="eliminar_producto(<?php echo $reg['ID_PRODUCTO'];?>)"></td>
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
