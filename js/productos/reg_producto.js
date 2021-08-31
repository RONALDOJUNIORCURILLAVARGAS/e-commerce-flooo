

function añadirProducto(opc){
    
    window.document.form.action="../../../controladores/controlador_reg_producto.php";
    window.document.form.method="GET";
    window.document.form.op.value=opc;
    window.document.form.submit();
}
function RegistrarProducto(opc){
    
    var nombreprod=window.document.form.txtnombre.value;
    var descripcionprod=window.document.form.txtdescripcion.value;
    var cantidadprod=window.document.form.txtcantidad.value;
    var precioprod=window.document.form.txtprecio.value;
    var tiendaprod=window.document.form.combobo.value;
    var categoriaprod=window.document.form.combobox.value;
   
    if(nombreprod.length!==0 && descripcionprod.length!==0 && cantidadprod.length!==0 && precioprod.length!==0 && tiendaprod.length!==0 && categoriaprod.length!==0)
    {
    window.document.form.action="../../../controladores/controlador_reg_producto.php";
    window.document.form.method="GET";
    window.document.form.op.value=opc;
    window.document.form.submit();
    }else
    {
        alert("Complete todo los campos por favor !!");
    }
}
function actualizarProducto(opc){
    var nombreprod=window.document.form.txtnombre.value;
    var descripcionprod=window.document.form.txtdescripcion.value;
    var cantidadprod=window.document.form.txtcantidad.value;
    var precioprod=window.document.form.txtprecio.value;
    var tiendaprod=window.document.form.combobo.value;
    var categoriaprod=window.document.form.combobox.value;
   
    if(nombreprod.length!==0 && descripcionprod.length!==0 && cantidadprod.length!==0 && precioprod.length!==0 && tiendaprod.length!==0 && categoriaprod.length!==0)
    {
    window.document.form.action="../../../controladores/controlador_update_productos.php";
    window.document.form.method="GET";
    window.document.form.op.value=opc;
    window.document.form.submit();
    }
    else
    {
        alert("Complete todo los campos por favor !!");
    }
}

function regresar_producto(opc){
         window.document.form.action="../../../controladores/controlador_reg_producto.php";
         window.document.form.method="GET";
         window.document.form.op.value=opc;
         window.document.form.submit();
     }

