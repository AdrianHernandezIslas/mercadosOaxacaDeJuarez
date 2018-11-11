<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/prueba.css">
	 

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
                            <a href="<?php echo base_url().'Mercado/nuevo'; ?>">Registrar</a>
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
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Local</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="<?php echo base_url().'Local/nuevo'; ?>">Registrar</a>
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
        <form method="POST" action="<?php echo base_url();?>Mercado/nuevo">
            <div class="row">
                <div class="col-lg-3 col-md-1 col-sm-1"></div>
                    <div class="col-lg-4 col-md-4 col-sm-5">
                       <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5">
                      <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"></input>
                      </div>
                    </div>
            </div>
            <div class="row">
                   <div class="col-lg-3 col-md-1 col-sm-1"></div>
                        <div class="col-lg-4 col-md-4 col-sm-5">
                           <div class="form-group">
                                <label>Telefono</label>
                                <input type="numeric" class="form-control" id="telefono" name="telefono" placeholder="9511002240" required>
                            </div>
                        </div>
                         <div class="form-group col-4">
                            <label for="inputState">Zona</label>
                            <select id="zona" name="zona" class="form-control">
                              <option selected>Seleccione...</option>
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
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required>
                            </div>
                        </div>
                        
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-1 col-sm-1"></div>
              <div class="col-8">
                          <div class="form-group">
                            <label>Historia</label>
                            <textarea class="form-control" id="historia" name="historia" rows="10">
                              
                            </textarea>
                          </div>
               </div>
            </div>
            <div class="row">
                   <div class="col-3"></div>
                        <div class="col-3">
                           <div class="form-group">
                                <label>latitud</label>
                                <input type="text" class="form-control" id="latitud" name="latitud" placeholder="12.3444" required>
                            </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Longitud</label>
                            <input type="text" class="form-control" id="longitud" name="longitud" placeholder="2332.12"></input>
                          </div>
                        </div>
            </div>
            <div class="row">
                   <div class="col-3"></div>
                        <div class="col-4">
                           <div class="form-group">
                                <label>Hora Apertura</label>
                                <input type="time" class="form-control" id="horario" name="horario" placeholder="Horario" required>
                           </div>
                        </div>
                         <div class="col-4">
                           <div class="form-group">
                                <label>Hora Cierre</label>
                                <input type="time" class="form-control" id="horario" name="horario" placeholder="Horario" required>
                           </div>
                        </div>
                       
            </div>
            <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
              </div>
            </div>
  </form>
</div>
    


  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/js/carrucel-card-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>