<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/css/css/carrucel-card-style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/css/homeStyle.css">
    <link rel="shortcut icon" href="/assets/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">  
    <title>Buscar Mercado</title>
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
                    <a class="nav-link separator-option" href="../">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link separator-option" href="/Mercado/nosotros">Nosotros</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link separator-option" href="/Mercado/galeria">Galería</a>
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

<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-0 col-md-0 col-lg-2 col-xl-2"></div>
      <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
         <img class="img-fluid" src="/assets/img/seo.png" height="30" width="50">
      </div>
    <div class="col-sm-11 col-md-11 col-lg-9 col-xl-9"> 
      <h1 class = "text-left color-pink"><b>Resultados de búsqueda</b></h1>
    </div>
  </div>
</div>
<div class="container">
<?php if (!empty($socrates)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Jardín Sócrates</h2>
          <hr>
        </div>
  </div>
<div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($socrates as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>
<div class="container">
<?php if (!empty($paz)) { ?>
  <br>
<div class="row3">
      <div class="col-xs-12 col-md-12">
        <h2 class = "text-left color-orange">Mercado Paz Migueles</h2>
        <hr>
      </div>
</div>
<div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($paz as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
          <br>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
  <?php if (!empty($hidalgo)) { ?>
  <br>
       <div class="row">
          <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado Hidalgo</h2>
          <hr>
          </div>
       </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
       
      <?php 
         foreach ($hidalgo as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
<?php if (!empty($cascada)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado La Cascada</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($cascada as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
<?php if (!empty($candiani)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado Candiani</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($candiani as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>

<div class="container">
  <?php if (!empty($venustiano)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado Venustiano Carranza</h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($venustiano as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>

<div class="container">
    <?php if (!empty($benito)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado Benito Juárez</h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($benito as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
    <?php if (!empty($veinte)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado 20 de Noviembre</h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($veinte as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

       <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>

<div class="container">
    <?php if (!empty($artesanias)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado de Artesanías</h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($artesanias as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
  <?php if (!empty($centenario)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado IV Centenario</h2>
          <hr>
        </div>
  </div>
 
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($centenario as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>

<div class="container">
  <?php if (!empty($sanchez)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado Sánchez</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($sanchez as $key => $value) {   
      ?>
      
     <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>

<div class="container">
    <?php if (!empty($merced)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado de la Merced</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($merced as $key => $value) {   
      ?>
      
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
    <?php if (!empty($flores)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado de las Flores</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($flores as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
    <?php if (!empty($santarosa)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado Zonal Santa Rosa</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($santarosa as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
    <?php if (!empty($abastos)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado de Abastos</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($abastos as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<div class="container">
    <?php if (!empty($noria)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange">Mercado la Noria</h2>
          <hr>
        </div>
  </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($noria as $key => $value) {   
      ?>
      <?php $idnombre = $value['idLocal']; ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div>
       </div>
        <br>
      </div>

      <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $value['nombreLocal'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$value['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $value['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $value['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$value['tags']); ?>
                       <ul>
                         <?php 
                            foreach ($arre as $key) {   
                         ?>
                            <li class="lista"><?php echo $key ?></li>
                         <?php } ?>
                       </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
</div>
<br><br>
<footer class="footer nav-bar-color">
      <div class="container-fluid">
        <br>
        <div class="row">
          <div class="col-xs-1 col-md-1 col-xl-1">
          </div>
             <div class="col-xs-5 col-md-8 col-xl-8">
             <h1 class="texto-foot text-orange bold">CONTACTO</h1>
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
    <script src="/assets/js/js/carrucel-card-script.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>