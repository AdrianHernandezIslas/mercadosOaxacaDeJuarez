<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/css/homeStyle.css">
    <link rel="stylesheet" href="/assets/css/lightbox.min.css">
    <link rel="shortcut icon" href="/assets/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">  
    <title>Mercados de Oaxaca</title>
  </head>
  <body class="type-leter">
     <div class="row">
     <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bar-color">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       <a href="/"><img class="icon-navbar" src="/assets/img/lm.png"  alt="Smiley face"></a>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link separator-option" href="/">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link separator-option" href="/Mercado/nosotros">Nosotros</a>
          </li>
          <li class="nav-item active titulo-negritas">
            <a class="nav-link separator-option" href="#">Galería</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link separator-option" href="/Mercado/descargas">App Móvil</a>
          </li>
        </ul>
         <form method="POST" action="/Mercado/busqueda" class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Ej. nieve,tlayuda" aria-label="Mercado" id="tags" name="tags">
                <button class="btn btn-light" type="submit">Buscar</button>
              </form>
      </div>
    </nav>
  </div>

  <div class="container">
      
        <div class="row col-xs-4">
          <div class="col-xs-12 col-md-12">
            <br><br><br><br>
              <h1 class = "text-center color-pink"><label><b>Galería</b></label></h1>
             <hr>
          </div> <br><br>
        </div>
       <br><br>
  <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active pink-pill" id="pills-noviembre-tab" data-toggle="pill" href="#pills-noviembre" role="tab" aria-controls="pills-noviembre" aria-selected="true">20 de Noviembre</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-artesanias-tab" data-toggle="pill" href="#pills-artesanias" role="tab" aria-controls="pills-artesanias" aria-selected="false">Artesanías</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-ivcentenario-tab" data-toggle="pill" href="#pills-ivcentenario" role="tab" aria-controls="pills-ivcentenario" aria-selected="false">IV Centenario</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-pascuas-tab" data-toggle="pill" href="#pills-pascuas" role="tab" aria-controls="pills-pascuas" aria-selected="false">Sánchez Pascuas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-merced-tab" data-toggle="pill" href="#pills-merced" role="tab" aria-controls="pills-merced" aria-selected="false">La Merced</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-socrates-tab" data-toggle="pill" href="#pills-socrates" role="tab" aria-controls="pills-socrates" aria-selected="false">Jardín Sócrates</a>
    </li>
</ul>

  <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-noviembre" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="gallery" id="noviembre">
          <?php foreach ($noviembre as $key) { ?>
            <div class="mb-3 pics animation all 2">
              <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
            </div>
          <?php } ?>
          </div>
      </div>

      <div class="tab-pane fade" id="pills-artesanias" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="gallery" id="artesanias">
          <?php foreach ($artesanias as $key) { ?>
            <div class="mb-3 pics animation all 2">
              <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
            </div>
          <?php } ?>
          </div>
      </div>

      <div class="tab-pane fade" id="pills-ivcentenario" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="gallery" id="centenario">
          <?php foreach ($centenario as $key) { ?>
            <div class="mb-3 pics animation all 2">
              <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
            </div>
          <?php } ?>
          </div>
      </div>

      <div class="tab-pane fade" id="pills-pascuas" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="gallery" id="pascuas">
          <?php foreach ($pascuas as $key) { ?>
            <div class="mb-3 pics animation all 2">
              <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
            </div>
          <?php } ?>
          </div>
      </div>

      <div class="tab-pane fade" id="pills-merced" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="gallery" id="merced">
          <?php foreach ($merced as $key) { ?>
            <div class="mb-3 pics animation all 2">
              <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
            </div>
          <?php } ?>
          </div>
      </div>

      <div class="tab-pane fade" id="pills-socrates" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="gallery" id="socrates">
          <?php foreach ($socrates as $key) { ?>
            <div class="mb-3 pics animation all 2">
              <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
            </div>
          <?php } ?>
          </div>
      </div>

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

            <a href="https://www.facebook.com/GobCdOax/"><img class="img-tam text-right" src="/assets/img/facebook-icono.png"></a>
            <a href="https://twitter.com/gobcdoax?lang=es"><img class="img-tam text-right" src="/assets/img/twitter-icono.png"></a>
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


    <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/lightbox-plus-jquery.min.js"></script>
  </body>
</html>