   
          
            function Entrar()
        {
            var usuario1=window.document.form.txtusuario.value;
            var clave1=window.document.form.txtclave.value;
            
            if(usuario1.length===0){
                alert("El campo usuario esta vacio!!!");
                window.document.form.txtusuario.focus();
                 return ;
            }else if(clave1.length===0){
                
              alert("El campo clave  esta vacio!!!");
                window.document.form.txtclave.focus();
               return ;
            }
            else{
                  window.document.form.action="../../controladores/controlador_reg_login.php";
                  window.document.form.method="GET";
                  window.document.form.op.value="1";
                  window.document.form.usuario.value=usuario1;
                  window.document.form.clave.value=clave1;
                  window.document.form.submit();
                  

            }
            
           }
        
          function reg(){
                window.document.form.action="controladores/login_reg_controlador.php";
                window.document.form.method="post";
                window.document.form.op.value="1";
                window.document.form.submit();
            }
            function redireccion(opc){
                    window.document.form.action="../../controladores/controlador_inicio.php";
                    window.document.form.method="GET";
                    window.document.form.op.value=opc;
                    window.document.form.submit();
            }