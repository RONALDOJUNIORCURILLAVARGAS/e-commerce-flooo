
function eliminar_producto(id){
         window.document.form.action="../../../controladores/controlador_delete_productos.php";
         window.document.form.method="GET";
         window.document.form.cod.value=id;
         window.document.form.submit(); 
         } 

function editar_producto(opc,id){
         window.document.form.action="../../../controladores/controlador_update_productos.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.cod.value=id;
         window.document.form.submit();     
         }
         
function salir_tabla(opc){
         window.document.form.action="../../../controladores/controlador_reg_producto.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.submit();
         }