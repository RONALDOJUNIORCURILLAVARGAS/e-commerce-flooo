 <div class="container-menu">
  <div class="cont-menu">
     
     <div id="profile">
         <div id="foto"><img src="../../../imagenes/perro.jpg" style=" border-radius: 50%;
                                                      width: 50%; 
                                                      box-sizing: border-box;
                                                      padding: var(--padding);
                                                      margin: 0 auto; 
                                                      font-size: 24px;
                                                      padding: var(--padding) 0;
                                                      overflow: hidden; 
                                                      display:  inline-block;
                                                      display:block;
                                                      margin:auto;
                                                      "></div>
                     <div id="name" style="font-size: 24px;
                             padding: var(--padding) 0;
                             overflow: hidden;
                             text-align:center;
                             color: white;"><span><?php foreach ($lista as $reg){ 
                         echo $reg['NOMBRE_USUARIO'];
                        } 
                        ?></span>
                      <br>
                        <span style="font-size: 12px;"><?php foreach ($lista as $reg){ 
                         echo $reg['CORREO_USUARIO'];
                        } 
                        ?></span></div>

                 </div>
                <div id="menu-items">
                <nav>
                    <a style="cursor: pointer;" onclick="entrar_solicitud('1')">Mis solicitudes</a>
                <!-- <a onclick="alert('chau')">Mis Clientes</a>-->
                 <a style="cursor: pointer;" onclick="entrar_tienda('1')">Mis tiendas</a>
                 <a style="cursor: pointer;" onclick="editar_perf('1')">Editar Perfil</a>
                 <a style="cursor: pointer;" onclick="salir('2')">Cerrar sesion</a>
                </nav>
                 </div>
               <label for="btn-menu">✖</label>
                </div>
                 </div>  