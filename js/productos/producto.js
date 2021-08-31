 function redirecciona(opc){
      window.document.form.action="../../controladores/controlador_inicio.php";
     window.document.form.method="GET";
     window.document.form.op.value=opc;
     window.document.form.submit();
 }
