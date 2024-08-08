<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/css/homeStyle.css">
    <link rel="shortcut icon" href="/assets/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"> 
    <title>Nosotros</title>
  </head>
  <body class="type-leter img-aplicacion">
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
            <a class="nav-link separator-option" href="<?php echo '/'; ?>Mercado/nosotros">Nosotros</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link separator-option" href="<?php echo '/'; ?>Mercado/galeria">Galería</a>
          </li>
          <li class="nav-item active titulo-negritas">
            <a class="nav-link separator-option" href="#">App Móvil</a>
          </li>
        </ul>
        <form method="POST" action="/Mercado/busqueda" class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Ej. nieve,tlayuda" aria-label="Mercado" id="tags" name="tags">
                <button class="btn btn-light" type="submit">Buscar</button>
              </form>
      </div>
    </nav>
        <br><br>
    <div class="container">
      <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6 col-xl-5 text-white texto-aplicacion">
        <br>
        <h2 class="titulo-negritas">¡Descarga nuestra aplicación!</h2>
        <p class="text-justify margen-iz-modal titulo-negritas">
        Lleva la experiencia de los mercados de Oaxaca a todos lados, descargando gratis la app para Android, con la que podrás tener las siguientes funciones:</p>
        <ul class="ul-app">
          <li>Recibe notificaciones diarias sobre mercados de interés.</li>
          <li>Ve la información detallada de cada local.</li>
          <li>Ubica cada mercado de manera sencilla.</li>
        </ul>
        <a href="<?php echo '/'.'Mercado/getFile';  ?>" class="a-app">Descarga aquí</a>
       
      </div> 
    </div> 

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
  </body>
</html>