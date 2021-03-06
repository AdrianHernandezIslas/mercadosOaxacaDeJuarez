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

<br><br><br><br>
<form method="POST" action="<?php echo base_url().'Mercado/actualizar/'.$mercado->idMercado;?>">
  <div class="row">
         <div class="col-lg-2 col-md-1 col-sm-1"></div>
              <div class="col-lg-4 col-md-4 col-sm-5">
                 <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mercado->nombre; ?>" placeholder="Escribe nombre" required>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-5">
                <div class="form-group">
                  <label>Direccion</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $mercado->direccion; ?>"></input>
                </div>
              </div>
  </div>
   <div class="row">
         <div class="col-lg-2 col-md-1 col-sm-1"></div>
              <div class="col-lg-4 col-md-4 col-sm-5">
                 <div class="form-group">
                      <label>Telefono</label>
                      <input type="numeric" class="form-control" id="telefono" name="telefono" value="<?php echo $mercado->telefono; ?>" placeholder="9511002240">
                  </div>
              </div>
               <div class="form-group col-lg-4 col-md-4 col-sm-5">
                  <label for="inputState">Zona</label>
                  <select id="zona" name="zona" class="form-control">
                    <option value="C" <?php if ($mercado->zona == 'C') { echo "selected"; } ?>>Centro</option>
                    <option value="S" <?php if ($mercado->zona == 'S') { echo "selected"; } ?>>Sur</option>
                    <option value="CH" <?php if ($mercado->zona == 'CH') { echo "selected"; } ?>>Centro Historico</option>
                    <option value="N" <?php if ($mercado->zona == 'N') { echo "selected"; } ?>>Norte</option>
                    <option value="P" <?php if ($mercado->zona == 'P') { echo "selected"; } ?>>Poniente</option>
                    <option value="O" <?php if ($mercado->zona == 'O') { echo "selected"; } ?>>Oriente</option>
                  </select>
              </div>
  </div>
   <div class="row">
         <div class="col-lg-2 col-md-1 col-sm-1"></div>  
              <div class="col-lg-8 col-md-4 col-sm-5">
                <div class="form-group">
                  <label>Historia</label>
                  <textarea class="form-control" rows="5" id="historia" name="historia" required="Es requerido" ><?php echo $mercado->historia; ?></textarea>
                </div>
              </div>
  </div>
  <div class="row">
  	<div class="col-lg-2 col-md-1 col-sm-1"></div>
  	<div class="col-lg-8 col-md-4 col-sm-5">
                 <div class="form-group">
                      <label>Descripción</label>
                      <textarea class="form-control" rows="3" id="descripcion" name="descripcion" placeholder="Descripción" required><?php echo $mercado->descripcion; ?>
                      </textarea>
                  </div>
              </div>
  </div>
  <div class="row">
         <div class="col-lg-2 col-md-1 col-sm-1"></div>
              <div class="col-3">
                 <div class="form-group">
                      <label>latitud</label>
                      <input type="text" class="form-control" id="latitud" name="latitud" value="<?php echo $mercado->latitud; ?>" placeholder="12.3444"  required>
                  </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label>Longitud</label>
                  <input type="text" class="form-control" id="longitud" name="longitud" value="<?php echo $mercado->longitud; ?>" placeholder="2332.12"></input>
                </div>
              </div>
              <div class="col-2">
                 <div class="form-group">
                      <label>Horario</label>
                      <input type="text" class="form-control" id="horario" name="horario" value="<?php echo $mercado->horario; ?>" placeholder="Horario" required>
                 </div>
              </div>
  </div>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
    </div>
  </div>
</form>
<br>
<form method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Mercado/insertImgMercado/'.$mercado->idMercado;?>">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-3">
      <div class="input-group">
          <div class="custom-file">
             <input type="file" class="custom-file-input" id="foto" name="foto">
             <label class="custom-file-label" for="inputGroupFile04">Elija el Archivo</label>
          </div>
          <div class="input-group-append">
            <button type="submit" class="btn btn-success">Subir</button>
          </div>
      </div>  
    </div>
    <div class="col-3">
       <select class="custom-select" id="tipo" name="tipo">
            <option value="2" selected>Para Galeria</option>
            <option value="1">Principal</option>               
        </select>
    </div>
  </div>
</form>
<div class= "row mx-auto  style-centrado">
<div class="col-2"></div>
  <div class="col-9">
    <h1>Imagenes</h1>
      <div class="card-columns">

      <?php foreach ($imagenes as $key => $value){ ?>
        <div class="card" style="width: 18rem;" id="<?php echo $value['nombre'];  ?>">
          <img class="card-img-top" src="<?php echo base_url().$value['imagen'];?>" alt="Card image cap">
          <div class="card-body">
            <div class="btn-group" role="group" aria-label="Basic example">
              <form method="POST" action="<?php echo base_url().'Imagen/eliminarImagen/'.$value['nombre'].'/'.$mercado->idMercado;?>">
                <button type="submit" class="btn btn-warning" id="<?php echo 'btn'.$value['nombre'];  ?>">Eliminar</button>
              </form>
              
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>