<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/prueba.css">
    <title>Hello, world!</title>
  </head>
  <body>
    
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
                            <a href="#">Registar</a>
                        </li>
                        <li>
                            <a href="#">Algo 2</a>
                        </li>
                        <li>
                            <a href="#">Algo 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Imagenes</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reportes</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
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
        <!-- Page Content  -->
<div id="content">
<div class= "row mx-auto  style-centrado">
  <div class="col-9">
    <h1>Zona Centro Histórico</h1>
      <div class="card-columns">

      <?php foreach ($CH as $key) { ?>
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            <h6 class="card-text"><?php echo $key['nombre'];  ?></h6>
          </div>
          <img class="card-img-top" src="<?php echo base_url().$key['imagen'];?>" alt="Card image cap">
          <div class="card-body">
            <a href="<?php echo base_url().'Mercado/updateMercado/'.$key['idMercado'];?>" class="btn btn-sm btn-ovalo btn-lrg nav-bar-color text-white">Editar</a>
            <a href="#" class="btn btn-sm btn-ovalo nav-bar-color text-white">Eliminar</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
</div>

            <div class="line"></div>         
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
