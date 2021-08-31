
function redireccion(opc){ 
     window.document.form.action="../../../controladores/controladorMenuPerfil.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     window.document.form.submit();
}
function entrar_tienda(opc){
    window.document.form.action="../../../controladores/controlador_tienda_perfil.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     window.document.form.submit();
}
function entrar_solicitud(opc){
    window.document.form.action="../../../controladores/controlador_solicitud.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     window.document.form.submit();
}

function salir(opc){
     window.document.form.action="../../../controladores/controlador_reg_login.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     window.document.form.submit();
}
function editar_perf(opc){
    window.document.form.action="../../../controladores/controlador_edit_perf.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     window.document.form.submit();
}
function actualizar_perf(opc){
    window.document.form.action="../../../controladores/controlador_update_perf.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     
     window.document.form.submit();
}