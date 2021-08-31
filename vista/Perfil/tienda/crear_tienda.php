 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <script>
         function registrar(opc){
            var nombre=window.document.form.txtnombre.value;
            var ubicacion=window.document.form.txtubicacion.value;
            var descripcion=window.document.form.txtdescripcion.value;
            if(nombre.length !== 0 && ubicacion.length !==0 && descripcion.length!==0)
            {
                window.document.form.action="../../../controladores/controlador_reg_t_user.php";
                window.document.form.method="GET";
                window.document.form.op.value=opc;
                window.document.form.nombre.value=nombre;
                window.document.form.ubicacion.value=ubicacion;
                window.document.form.descripcion.value=descripcion;
                window.document.form.submit();  
            }
            else{
                alert("Complete todo los campos por favor !!");
            }
            
            }
        </script>
        <link href="../../../css/tienda/csscreartienda.css" rel="stylesheet" type="text/css"/>
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
    </head>
    
    <body>
        
        <main >
            
            <div class="container">
                  <form name="form">
                  <input type="hidden" name="op">
                  <input type="hidden" name="nombre">
                  <input type="hidden" name="ubicacion">
                  <input type="hidden" name="descripcion">
            
                     <h1>Registro de tiendas</h1>
                     <div class="form-group">
                         <label>NOMBRE</label>
                         <input class="form-control" type="text" name="txtnombre">
                     </div>
                       <div class="form-group">
                           <label>UBICACION</label>
                           <input class="form-control" type="text" name="txtubicacion">
                     </div>
                       <div class="form-group">
                           <label>DESCRIPCION</label>
                           <textarea class="form-control" name="txtdescripcion"></textarea>
                      </div>
                                     
                      <input class="btn btn-success" type="button" value="registrar" onclick="registrar('1')" >
                                
                    </form>
            </div>
         </main>
         <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
          <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>