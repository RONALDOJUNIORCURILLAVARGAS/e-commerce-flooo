           function crear()
               {
                var nombre=window.document.form.txtnombre.value;
                var apellido=window.document.form.txtapellido.value;
                var direccion=window.document.form.txtdireccion.value;
                var documento=window.document.form.txtdni.value;
                var celular=window.document.form.txtcelular.value;
                var usuario=window.document.form.txtusuario.value;
                var clave=window.document.form.txtclave1.value;
                var clave2=window.document.form.txtclave2.value;
                var concat="";
                for(var i=(usuario.length-10);i<usuario.length;i++)
                {
                    concat=concat + usuario.charAt(i);
                }
                if(nombre.length!==0 && apellido.length!==0 && direccion.length!==0 &&documento.length!==0 && celular.length!==0 && usuario.length!==0 && clave.length!==0 && clave2.length!==0 )
                {
                   if(concat==="@gmail.com")
                   {    
                    if(clave===clave2 ){
                   window.document.form.action="../../controladores/controlador_reg_user.php";
                  window.document.form.method="GET";
                  window.document.form.op.value="1";
                  window.document.form.nombre.value=nombre;
                  window.document.form.apellido.value=apellido;
                  window.document.form.direccion.value=direccion;
                  window.document.form.documento.value=documento;
                  window.document.form.celular.value=celular;
                  window.document.form.usuario.value=usuario;
                  window.document.form.pass.value=clave;
                  window.document.form.submit(); 
                }
                else{
                    alert("Ingrese la misma contraseña por favor!!!");
                     window.document.form.txtclave2.value="";
                    window.document.form.txtclave2.focus();
                }
                   }
                   else{
                       alert("Ingrese un correo Gmail valido");
                   }
                  
              
                }
                else{
                    alert("Complete todo los campos por favor!!!")
                }
                
            
            
           }
            
            
            function login(){
                window.document.form.action="controladores/login_reg_controlador.php";
                window.document.form.method="post";
                window.document.form.op.value="2";
                window.document.form.submit();
            };
             function redireccion(opc){
                   window.document.form.action="../../controladores/controlador_inicio.php";
                    window.document.form.method="GET";
                    window.document.form.op.value=opc;
                    window.document.form.submit();
            }