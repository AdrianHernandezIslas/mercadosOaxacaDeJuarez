<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/css/prueba.css">
    <script src="/assets/js/js/Validar.js"></script>
    <script src="/assets/js/js/Main.js"></script>

	<title>Mercados</title>
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

                            <a href="<?php echo '/'.'Mercado/nuevo'; ?>">Registrar</a>
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
                            <a href="<?php echo '/'.'Local/nuevo'; ?>">Registrar</a>
                        </li>
                        <li>
                            <a href="#sublevel2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Listar</a>
                            <ul class="collapse list-unstyled" id="sublevel2">
                                <li><a href="">Mercaodo1</a></li>
                            </ul>
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

            <div class="line"></div> 
        </nav>
</div>
        <!-- Page Content  -->
<div id="content">
<div class= "row mx-auto  style-centrado">
  <div class="col-12">
    <h1 class="color-orange">Zona Centro Histórico</h1>
      <div class="card-columns">

      <?php foreach ($CH as $key) { ?>
        <div class="card shadow-lg" style="width: 18rem;">
          <div class="card-header">
            <h6 class="card-text"><?php echo $key['nombre'];  ?></h6>
          </div>
          <img class="card-img-top" src="<?php echo '/'.$key['imagen'];?>" alt="Card image cap">
          <div class="card-body">
            <a href="<?php echo '/'.'Mercado/updateMercado/'.$key['idMercado'];?>" class="btn btn-sm btn-ovalo btn-lrg nav-bar-color text-white">Editar</a>
            <a  class="btn btn-sm btn-ovalo nav-bar-color text-white" onclick= "Main.eliminar(<?php echo $key['idMercado']; ?>)">Eliminar</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
</div>

<div class= "row mx-auto  style-centrado">
  <div class="col-12">
    <h1 class="color-orange">Zona Centro, Norte, Poniente</h1>
      <div class="card-columns">
      <?php foreach ($C as $key) { ?>
        <div class="card shadow-lg" style="width: 18rem;">
          <div class="card-header">
            <h6 class="card-text"><?php echo $key['nombre'];  ?></h6>
          </div>
          <img class="card-img-top" src="<?php echo '/'.$key['imagen'];?>" alt="Card image cap">
          <div class="card-body">
            <a href="<?php echo '/'.'Mercado/updateMercado/'.$key['idMercado'];?>" class="btn btn-sm btn-ovalo btn-lrg nav-bar-color text-white">Editar</a>
            <a  class="btn btn-sm btn-ovalo nav-bar-color text-white" onclick= "Main.eliminar(<?php echo $key['idMercado']; ?>)">Eliminar</a>
          </div>
        </div>
        <?php } ?>
        <?php foreach ($P as $key) { ?>
        <div class="card shadow-lg" style="width: 18rem;">
          <div class="card-header">
            <h6 class="card-text"><?php echo $key['nombre'];  ?></h6>
          </div>
          <img class="card-img-top" src="<?php echo '/'.$key['imagen'];?>" alt="Card image cap">
          <div class="card-body">
            <a href="<?php echo '/'.'Mercado/updateMercado/'.$key['idMercado'];?>" class="btn btn-sm btn-ovalo btn-lrg nav-bar-color text-white">Editar</a>
            <a  class="btn btn-sm btn-ovalo nav-bar-color text-white" onclick= "Main.eliminar(<?php echo $key['idMercado']; ?>)">Eliminar</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
</div>
        <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Mercado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta Seguro que desea elimiar Este mercado
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn-confirma">Confirmar</button>
      </div>
    </div>
  </div>
</div>

  
</div>

<script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>