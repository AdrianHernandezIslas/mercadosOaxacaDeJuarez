<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/homeStyle.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/carrucel-card-style.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/lm.png">
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
      <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x4OEmME-u6o?autoplay=1" allowfullscreen></iframe>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <br>
      <h1 class="text-center color-pink"><label><b>Todos los Mercados</b></label></h1>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-12">
       <h5 class="text-center text-secondary"><label>Conoce los 14 mercados que te ofrece Oaxaca</label></h5>
    </div>
  </div>
  <div class="row">
    <h1 class="color-orange">Mercados Zona Centro</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <?php $flag=true; foreach ($CH as $key => $value) {  ?>
      <div class="carousel-item col-md-4 <?php if($flag){ echo 'active'; $flag=false; } ?>">
        <div class="card text-center shadow-lg">
              <img class="card-img-top img-fluid" src="<?php echo base_url().'assets/img/f1.JPG' ?>"></img>
              <div class="card-body">
                <h4><?php echo $value['nombre']; ?></h4>
                <p class="card-text text-justify"><?php echo $value['descripcion']; ?></p>
                <a href="<?php echo base_url().'Mercado/mercado/'.$value['idMercado']; ?>" class="btn btn-sm btn-ovalo nav-bar-color text-white">Ver mas</a>
              </div>
          </div>
      </div>
     <?php } ?>
      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  </div>
  <br>
  <div class="row">
    <h1 class="color-orange">Mercados Zona Norte</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
       <?php $flag=true; foreach ($N as $key => $value) {  ?>
              <div class="carousel-item col-md-4 <?php if($flag){ echo 'active'; $flag=false; } ?>">
               <div class="card text-center shadow-lg">
                  <img class="card-img-top img-fluid" src="<?php echo base_url().'assets/img/f1.JPG' ?>"></img>
                <div class="card-body">
                    <h4><?php echo $value['nombre']; ?></h4>
                    <p class="card-text text-justify"><?php echo $value['descripcion']; ?></p>
                    <a href="<?php echo base_url().'Mercado/mercado/'.$value['idMercado']; ?>" class="btn btn-sm btn-ovalo nav-bar-color text-white">Ver mas</a>
                </div>
               </div>
              </div>
       <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <br>
  <div class="row">
    <h1 class="color-orange">Mercados Sur, Este y Poniente</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
       <?php $flag=true; foreach ($S as $key => $value) {  ?>
              <div class="carousel-item col-md-4 <?php if($flag){ echo 'active'; $flag=false; } ?>">
               <div class="card text-center shadow-lg">
                  <img class="card-img-top img-fluid" src="<?php echo base_url().'assets/img/f1.JPG' ?>"></img>
                <div class="card-body">
                    <h4><?php echo $value['nombre']; ?></h4>
                    <p class="card-text text-justify"><?php echo $value['descripcion']; ?></p>
                    <a href="<?php echo base_url().'Mercado/mercado/'.$value['idMercado']; ?>" class="btn btn-sm btn-ovalo nav-bar-color text-white">Ver mas</a>
                </div>
               </div>
              </div>
       <?php } ?>
       <?php $flag=true; foreach ($P as $key => $value) {  ?>
              <div class="carousel-item col-md-4">
               <div class="card text-center shadow-lg">
                  <img class="card-img-top img-fluid" src="<?php echo base_url().'assets/img/f1.JPG' ?>"></img>
                <div class="card-body">
                    <h4><?php echo $value['nombre']; ?></h4>
                    <p class="card-text text-justify"><?php echo $value['descripcion']; ?></p>
                    <a href="<?php echo base_url().'Mercado/mercado/'.$value['idMercado']; ?>" class="btn btn-sm btn-ovalo nav-bar-color text-white">Ver mas</a>
                </div>
               </div>
              </div>
       <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>


<div class="container-fluid">
  <br>
  <div class="contenedor">
    <img class="img-fluid" src="<?php echo base_url();?>assets/img/andador.jpg" width="100%">
    <div class="centrado"><h1 class="text-white font-img-size">Conoce más de</h1></div>
    <div class="centrado"><h1 class="color-pink font-img-size"><br><br>#Oaxaca</h1></div>
  </div>  
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6" >
        <br>
        <h2><b>Ciudad de Oaxaca</b></h2>
        <hr class="nav-bar-color">
        <p class="text-justify text-secondary">La ciudad de Oaxaca es una de las más grandes joyas de México. Desde el momento mismo de su origen hasta el día de hoy, Oaxaca se ha distinguido por la estrecha convivencia entre su bella naturaleza y la creatividad artística del hombre. Esto ha dado lugar a una de las ciudades más hermosas y armoniosas del país.

        Oaxaca es célebre por su gastronomía. Como parte de sus riquezas naturales, históricas, culturales, artísticas, brilla la cocina tradicional oaxaqueña... <a href="">Ver mas</a></p>
      </div>
      <div class="col-xs-12 col-md-6">
        <br><br><br><br>
        <img class="img-fluid shadow-lg" src="<?php echo base_url();?>assets/img/img1.jpg" height="350" width="550">
      </div>
  </div>
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
             <a href="https://www.instagram.com/explore/locations/234302199/oaxaca-city/"><img class="img-tam text-right" src="<?php echo base_url();?>assets/img/instagram-icono.png"></a>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!--script src="<?php echo base_url();?>assets/js/js/carrucel-card-script.js" --><!--/script-->
  </body>
</html>