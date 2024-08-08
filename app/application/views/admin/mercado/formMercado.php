<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/css/prueba.css">
	  <script src="/assets/js/js/Validar.js"></script>
    <script src="/assets/js/js/Main.js"></script>

    <title>Conoce Oaxaca</title>
  </head>
  <body class="type-leter">
     <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-white">Administrador SU</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Mercados Oaxaca</p>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mercado</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="">Registrar</a>
                        </li>
                        <li>
                            <a href="<?php echo '/'.'Mercado/admin'; ?>">Listar</a>
                        </li>
                        <li>
                            <a href="#">Otro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Local</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="<?php echo '/'.'Local/nuevo'; ?>">Registrar</a>
                        </li>
                        <li>
                            <a href="#">Listar</a>
                        </li>
                        <li>
                            <a href="#">Otro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Imagenes</a>
                </li>
                <li>
                    <a href="#">Usuarios</a>
                </li>
                <li>
                    <a href="#">Extras</a>
                </li>
            </ul>

            
        </nav>
</div>
<div class="content">
        <br>
        <form method="POST" enctype="multipart/form-data" action="/Mercado/insertMercado" onSubmit="return Main.ejecutar();">
            <div class="row">
                <div class="col-lg-3 col-md-1 col-sm-1"></div>
                    <div class="col-lg-4 col-md-4 col-sm-5">
                       <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre" maxlength="45" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5">
                      <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" maxlength="50"></input>
                      </div>
                    </div>
            </div>
            <div class="row">
                   <div class="col-lg-3 col-md-1 col-sm-1"></div>
                        <div class="col-lg-4 col-md-4 col-sm-5">
                           <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="9511002240" maxlength="10" pattern="[0-9]*" onkeypress="return Validar.tipoNumero(event);" required>
                            </div>
                        </div>
                         <div class="form-group col-4">
                            <label for="inputState">Zona</label>
                            <select id="zona" name="zona" class="form-control">
                              <option selected>Selecciona Zona...</option>
                              <option value="C">Centro</option>
                              <option value="S">Sur</option>
                              <option value="CH">Centro Historico</option>
                              <option value="N">Norte</option>
                              <option value="P">Poniente</option>
                              <option value="O">Oriente</option>
                            </select>
                        </div>
            </div>
            <div class="row">
                   <div class="col-3"></div>
                        <div class="col-8">
                           <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" maxlength="105" required>
                            </div>
                        </div>
                        
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-1 col-sm-1"></div>
              <div class="col-8">
                          <div class="form-group">
                            <label>Historia</label>
                            <textarea class="form-control" id="historia" name="historia" rows="10" maxlength="1060"></textarea>
                          </div>
               </div>
            </div>
            <div class="row">
                   <div class="col-3"></div>
                        <div class="col-2">
                           <div class="form-group">
                                <label>latitud</label>
                                <input type="text" class="form-control" id="latitud" name="latitud" placeholder="12.3444" minlength="3" maxlength="10" onkeypress="return Validar.filterFloat(event,this);" required>
                            </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>Longitud</label>
                            <input type="text" class="form-control" id="longitud" name="longitud" placeholder="2332.12" minlength="3" maxlength="10" onkeypress="return Validar.filterFloat(event,this);" required></input>
                          </div>
                        </div>
                        <div class="col-2">
                           <div class="form-group">
                                <label>Hora Apertura</label>
                                <input type="time" class="form-control" id="horaA" name="horaA" placeholder="Horario" required>
                           </div>
                        </div>
                         <div class="col-2">
                           <div class="form-group">
                                <label>Hora Cierre</label>
                                <input type="time" class="form-control" id="horaC" name="horaC" placeholder="10:10" required>
                           </div>
                        </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-4">
                  <div class="input-group">
                      <div class="custom-file">
                         <input type="file" class="custom-file-input" id="foto" name="foto" required>
                         <label class="custom-file-label" for="inputGroupFile04">Elija el Archivo</label>
                      </div>
                      <div class="input-group-append">
                        
                      </div>
                  </div>  
                </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"></div>
              <div class="col-6">
                <button type="submit" class="btn btn-block btn-subir">Registrar</button>
              </div>
            </div>
  </form>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hora Invalida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Las horas son Incorrectas verifica porfavor
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn btn-warning" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/js/carrucel-card-script.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>