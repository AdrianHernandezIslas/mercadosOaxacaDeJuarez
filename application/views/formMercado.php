<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/carrucel-card-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/homeStyle.css">

    <title>Conoce Oaxaca</title>
  </head>
  <body class="type-leter">

    <div class="row">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bar-color">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <img class="icon-navbar" src="<?php echo base_url();?>assets/img/lm.png"  alt="Smiley face">
                <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link separator-option" href="<?php echo base_url();?>Controladormercado">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link separator-option" href="#">Galeria</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link disabled separator-option" href="<?php echo base_url(); ?>Mercado/nosotros">Nosotros</a>
                  </li>
                </ul>
              <form method="POST" action="<?php echo base_url();?>Mercado/busqueda" class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Mercado" aria-label="Mercado" id="tags" name="tags">
                <button class="btn btn-light" type="submit">Buscar</button>
              </form>
          </div>
      </nav>
    </div>

<br><br><br><br>
<form method="POST" action="<?php echo base_url();?>Mercado/nuevo">
  <div class="row">
         <div class="col-lg-2 col-md-1 col-sm-1"></div>
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
         <div class="col-lg-2 col-md-1 col-sm-1"></div>
              <div class="col-lg-4 col-md-4 col-sm-5">
                 <div class="form-group">
                      <label>Telefono</label>
                      <input type="numeric" class="form-control" id="telefono" name="telefono" placeholder="9511002240" required>
                  </div>
              </div>
               <div class="form-group col-3">
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
              <div class="col-3">
                 <div class="form-group">
                      <label>Descripción</label>
                      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required>
                  </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label>Historia</label>
                  <input type="text" class="form-control" id="historia" name="historia"></input>
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
              <div class="col-6">
                 <div class="form-group">
                      <label>Horario</label>
                      <input type="text" class="form-control" id="horario" name="horario" placeholder="Horario" required>
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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/js/carrucel-card-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>