
function eliminar_servicio(id){
         window.document.form.action="../../../controladores/controlador_delete_servicios.php";
         window.document.form.method="GET";
         window.document.form.cod.value=id;
         window.document.form.submit(); 
         } 

function editar_servicio(opc,id){
         window.document.form.action="../../../controladores/controlador_update_servicios.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.cod.value=id;
         window.document.form.submit();     
         }
         
function salir_tabla(opc){
         window.document.form.action="../../../controladores/controlador_reg_servicio.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.submit();
         }
