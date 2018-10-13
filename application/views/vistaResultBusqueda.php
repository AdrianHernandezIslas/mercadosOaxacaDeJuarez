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

<br><br><br><br><br><br>
<?php foreach ($local as $key => $value) {
  echo '<br>';
  print_r($value);
} ?>
 

		



 
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/js/carrucel-card-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>