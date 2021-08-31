


function añadirServicio(opc){
    
    window.document.form.action="../../../controladores/controlador_reg_servicio.php";
    window.document.form.method="GET";
    window.document.form.op.value=opc;
    window.document.form.submit();
}
function RegistrarServicio(opc){
    
    var nombreserv=window.document.form.txtserv.value;
    var descripcionserv=window.document.form.txtdescrip.value;
    var tiendaserv=window.document.form.combobo.value;
    var categoriaserv=window.document.form.combobox.value;
   
    if(nombreserv.length!==0 && descripcionserv.length!==0  && tiendaserv.length!==0 && categoriaserv.length!==0)
    {
    window.document.form.action="../../../controladores/controlador_reg_servicio.php";
    window.document.form.method="GET";
    window.document.form.op.value=opc;
    window.document.form.submit();
    }else
    {
        alert("Complete todo los campos por favor !!");
    }
}
function actualizarServicio(opc){
    
    var nombreserv=window.document.form.txtserv.value;
    var descripcionserv=window.document.form.txtdescrip.value;
    var tiendaserv=window.document.form.combobo.value;
    var categoriaserv=window.document.form.combobox.value;
   
    if(nombreserv.length!==0 && descripcionserv.length!==0 && tiendaserv.length!==0 && categoriaserv.length!==0)
    {
    window.document.form.action="../../../controladores/controlador_update_servicios.php";
    window.document.form.method="GET";
    window.document.form.op.value=opc;
    window.document.form.submit();
    }else
    {
        alert("Complete todo los campos por favor !!");
    }
}
function regresar_servicio(opc){
         window.document.form.action="../../../controladores/controlador_reg_servicio.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.submit();
     }