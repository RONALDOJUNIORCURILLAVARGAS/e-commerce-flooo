<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
    die();
}
$richiboy=$_SESSION['lista_solicitud_producto'];
$lis_ser=$_SESSION['lista_solicitud_servicio'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de servicios</title>
        <link href="../../../css/tienda/cssperfiltienda.css" rel="stylesheet" type="text/css"/>
        
         <link href="../../../css/cssRichard/bootstrap.min.css" rel="stylesheet"/>
       <script src="../../../js/perfil/inicio.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <form name="form">
            <input type="hidden" name="op">

            <main >
                <button class="btn btn-success" bgcolor="green" onclick="entrar_solicitud('2')" ">Regresar</button>
                    <center>
                        SOLICITUD DE PRODUCTOS
                     </center>
                      <br>
                         <div class="container">
                        <table  class="table  table-bordered table-hover">
                            
                            <tbody>
                                <tr class="info">
                                    <th>  NOMBRE TIENDA </th>
                                    <th>  NOMBRE PRODUCTO</th>
                                    <th>  CANTIDAD </th>
                                </tr>
                                <?php foreach($richiboy as $reg) {     ?>
                                <tr>
                                    <td><?php echo $reg['NOMBRE_TIENDA'];?></td>
                                    <td><?php echo $reg['NOMBRE_PRODUCTO'];?></td>
                                    <td><?php echo $reg['CANTIDAD'];?></td>                        
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>  
                </div>
                      <center>
                        SOLICITUD DE SERVICIOS
                     </center>
                      <br>
                         <div class="container">
                        <table  class="table  table-bordered table-hover">
                            
                            <tbody>
                                <tr class="info">
                                    <th>  NOMBRE TIENDA </th>
                                    <th>  NOMBRE SERVICIO</th>
                           
                                </tr>
                                <?php foreach($lis_ser as $reg) {     ?>
                                <tr>
                                    <td><?php echo $reg['NOMBRE_TIENDA'];?></td>
                                    <td><?php echo $reg['NOMBRE_SERVICIO'];?></td>                      
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>  
                </div>
          
            </main>
            
            
        </form>
        <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
