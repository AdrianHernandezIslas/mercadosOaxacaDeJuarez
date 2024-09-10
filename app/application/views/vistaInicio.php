<!doctype html>
<html lang="en">
  <head>
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>
    <link rel="stylesheet" href="/assets/css/homepage.css" >
    <title>Mercado</title>
  </head>
  <body >
    
    <?php include(APPPATH . 'views/templates/dashboard/NavBarInicio.php'); ?>

    <div class="position-absolute">
        <h2 class="float-md-start texto-conoce">Conoce los</h2>
        <h1 class="float-md-start texto-mercados">Mercados</h1>
        <h2 class="float-md-start texto-oaxaca">de Oaxaca de Juárez</h2>
    </div>

    <div class="container-fluid contenedor-inicio">
      <img src="/assets/img/inicio2.jpg" class="img-fluid imagen-inicio" alt="inicio">
    </div>

    <div class="container-fluid contenedor-inicio">
      <img src="/assets/img/busqueda.png" class="img-fluid imagen-busqueda" alt="inicio">
    </div>

    
      <form method="POST" action="<?php echo '/';?>Mercado/busqueda" class="input-group mb-3 input-busqueda">
        <input type="text" class="form-control " style="border-radius: 50px 0px 0px 50px" placeholder="Nieve, Tlayuda, Tejate, Pan, Chapulines, etc." aria-label="Mercado" id="tags" name="tags">
        <button class="btn btn-outline-secondary boton-buscar" style="border-radius: 0px 50px 50px 0px" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
      </form>
   



    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
  </body>
</html>