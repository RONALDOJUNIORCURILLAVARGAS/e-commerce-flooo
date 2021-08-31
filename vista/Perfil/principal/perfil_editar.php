
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
        function editar_perf(opc){
            
        window.document.form.action="../../../controladores/controlador_edit_perf.php";
        window.document.form.method="GET";
        window.document.form.op.value=opc;
        window.document.form.submit();
        }
        function actualizar_perf() {
            
           
            var nombre=window.document.form.txtnombre.value;
            var apellido=window.document.form.txtapellido.value;
            var direccion=window.document.form.txtdireccion.value;
            var dni=window.document.form.txtdni.value;
            var celular=window.document.form.txtcelular.value;
            if(nombre.length !== 0 && apellido.length !==0 && direccion.length!==0 && dni.length!==0 && celular.length!==0)
            {
            window.document.form.action="../../../controladores/controlador_update_perf.php";
            window.document.form.method="GET";
            window.document.form.submit();   
            }
            else{
                alert("Complete todo los campos por favor !!");
            }  
            
       
        }

        </script>
        <link href="../../../css/tienda/csseditarperfil.css" rel="stylesheet" type="text/css"/>
          <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
    </head>
    <body>
         <main >
             <input class="btn btn-success" type="button" value="regresar" onclick="editar_perf('2')"/>
             <div class="container">
        <form name="form">
            <input type="hidden" name="op">
            <center>
                  <h2>Edite sus datos personales</h2>
            </center>
            
                 
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                          <input class="form-control" type="text" name="txtnombre"/>
                    </div>
                    
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input class="form-control" type="text"  name="txtapellido"/>
                    </div>
                    <div class="form-group">
                       <label>Direccion</label>
                       <input class="form-control" type="text" name="txtdireccion"/> 
                    </div>
                    <div class="form-group">
                        <label>Nºdocumento de identidad</label>
                        <input class="form-control" type="number" min="10000000" max="99999999"  name="txtdni"/>
                    </div>
                    <div class="form-group">
                         <label>Nºcelular </label>
                         <input class="form-control" type="number" min="900000000" max="999999999" name="txtcelular"/>
                    </div>
                    

            
            </form>
                 </div>
              
                 <center>      
                      <input class="btn btn-success" type="button" value="registrar actualización" onclick="actualizar_perf()"/>
                 </center>
             </main>
        <footer>
            <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Dirección</h1>
                    <p>Av. Oscar Benavides 452
                        Cercado de Lima
                        Lima, Perú</p>
                </div>
                
                <div class="colum2">
                    <h1>Nuestras Redes</h1>
                    <div class="row2"><img src="../../../img/imgRichar/facebook.png"><label>Facebook</label>
                    </div>
                    <div class="row2"><img src="../../../img/imgRichar/twitter.png"><label>Twitter</label>
                    </div>
                    <div class="row2"><img src="../../../img/imgRichar/whatsapp.png"><label>Whatsapp</label>
                    </div>
                </div>
                <div class="colum3">
                    <h1>Contáctanos</h1>
                    <div class="row">
                        <img src="../../../img/imgRichar/celular.png">
                        <label>
                           992-666-893
                        </label>
                    </div>
                    <div class="row">
                        <img src="../../../img/imgRichar/Gmail.png">
                        <label>
                           flooter@gmail.com
                        </label>
                    </div>
                </div>
            </div>
            </div>
            <div class="container-footer">
                <div class="copyright">
                    (c) 2020 Todos los Derechos Reservados | R-S-J
                </div>
                
                <div class="informacion">
                    <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Termino y condiciones</a> 
                </div>
            </div>
        </footer>
        <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>