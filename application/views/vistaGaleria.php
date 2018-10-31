<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/homeStyle.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.min.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <title>Mercados de Oaxaca</title>
  </head>
  <body class="type-leter">
     <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bar-color">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
      
         

       <a href="<?php echo base_url();?>"><img class="icon-navbar" src="<?php echo base_url();?>assets/img/lm.png"  alt="Smiley face"></a>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link separator-option" href="<?php echo base_url();?>">Inicio <span class="sr-only">(current)</span></a>
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

    

  <div class="container">
      
        <div class="row col-xs-4">
          <div class="col-xs-12 col-md-12">
            <br><br><br><br>
              <h1 class = "text-center color-pink"><label><b>Galería</b></label></h1>
             <hr>
          </div> <br><br>
        </div>
       <br><br>
        <div class="gallery" id="gallery">

         <?php foreach ($imagenes as $key) { ?>
          <div class="mb-3 pics animation all 2">
            <a href="<?php echo base_url().$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo base_url().$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
          </div>

         <?php } ?>
 
         </div>
         <br><br><br><br>
  </div>

<br>
<footer class="footer nav-bar-color">
      <div class="container-fluid">
        <br>
        <div class="row">
          <div class="col-xs-1 col-md-1 col-xl-1">
          </div>

             <div class="col-xs-5 col-md-8 col-xl-8">
             <h1 class="texto-foot text-orange"><b>CONTACTO</b></h1>
             <p class="text-white texto-foot-2"><b>Dirección: </b>PLAZA DE LA DANZA S/N CENTRO HISTÓRICO OAXACA DE JUÁREZ, OAX. C.P. 68000 MÉXICO
             <br><b>Telefono: </b>(951)50-155-00
             </p>
           </div>

            <div class="col-xs-5 col-md-2 col-xl-2 text-center">
            <h5 class="text-orange texto-foot">Redes Sociales</h5>

            <a href="https://www.facebook.com/GobCdOax/"><img class="img-tam text-right" src="<?php echo base_url();?>assets/img/facebook-icono.png"></a>
            <a href="https://twitter.com/gobcdoax?lang=es"><img class="img-tam text-right" src="<?php echo base_url();?>assets/img/twitter-icono.png"></a>
             <a href="https://www.instagram.com/oaxtravel/?hl=es-la"><img class="img-tam text-right" src="<?php echo base_url();?>assets/img/instagram-icono.png"></a>
           </div>
           <div class="col-xs-1 col-md-1 col-xl-1">
          </div>
           <br>
           <div class="col-xs-0 col-md-0 col-xl-1"></div>
           <div class="col-xs-12 col-xl-12">
            <p class="text-white texto-foot-2 text-center">© 2018 Todos los derechos reservados</p>
           </div>

          </div>
      </div>
      
</footer>


    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
  </body>
</html>