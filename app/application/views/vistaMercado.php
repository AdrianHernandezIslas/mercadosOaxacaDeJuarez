<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/css/homeStyle.css">
    <link rel="stylesheet" href="/assets/css/lightbox.min.css">
    <link rel="shortcut icon" href="/assets/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">  
    <title>Mercado <?php echo $mercado->nombre;?></title>
  </head>

<body class="type-leter">
  <div class="menu-abajo">
    <img src="/assets/img/info.png" class="img-arriba">
    <img src="/assets/img/document.png" class="img-arriba">
    <img src="/assets/img/iconimagen.png" class="img-arriba">
    <img src="/assets/img/imagenlocal.png" class="img-arriba">
    <img src="/assets/img/ubicacion.png" class="img-arriba">
  </div>
  <div class="menu-abajo fixed-left">
    <ul>
      <li><a href="#info">Info.General</a></li>
      <li><a href="#historia">Historia</a></li>
      <li><a href="#locales">Locales</a></li>
      <li><a href="#galeria">Galería</a></li>
      <li><a href="#localizacion">Localización</a></li>
    </ul>
  </div>
  
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
            <a class="nav-link separator-option" href="<?php echo '/'; ?>Mercado/nosotros">Nosotros</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link separator-option" href="<?php echo '/'; ?>Mercado/galeria">Galería</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link separator-option" href="<?php echo '/'; ?>Mercado/descargas">App Móvil</a>
          </li>
        </ul>
         <form method="POST" action="/Mercado/busqueda" class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Ej. nieve,tlayuda" aria-label="Mercado" id="tags" name="tags">
                <button class="btn btn-light" type="submit">Buscar</button>
              </form>
      </div>
    </nav>
  </div>
<div class="container-fluid">
  <br>
  <div class="contenedor">
     <img class ="img-fluid imageninicio" src="<?php echo '/'.$principal->rutaAbsoluta; ?>" height="500">
     <div class="centrado"><h1 class="text-white bold"><?php echo '#'.$mercado->nombre; ?></h1></div>
     <a name="info"></a>
  </div>
</div>
<br><br>

<div class="container">
  <div class="row">
      <div class="col-xs-12 col-md-12">
        <h1 class = "text-center color-pink"><b>Información General</b></h1>
        <hr>
      </div>
    </div>
<div class="row style-centrado">
    <div class="col-xs-12 col-md-4" >
        <br><br>
        <img class="img-fluid" src="<?php echo '/'.$logo->rutaAbsoluta;?>" height="200">
    </div>

<div class="col-xs-12 col-md-8">
<br>
<div class="row">
<div class="col-xs-12 col-md-11">
       <div class="card text-center radio">
         <div class="card-header nav-bar-color text-white bold">
              <h5>Información</h5>
       </div>
<div class="card-body">
<table class="table col-xs-12 col-md-10 col-xl-8 style-centrado">
  <thead class="thead-dark">
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="color-pink"><h5><b>Dirección:</b></h5></th>
      <td><p class="text-right"><?php echo $mercado->direccion;?></p></td>
    </tr>
    <tr>
      <th scope="row" class="color-pink"><h5><b>Horario:</b></h5></th>
      <td> <p class="text-right"><?php echo 'Todos los días '.'&nbsp &nbsp &nbsp &nbsp &nbsp'.$mercado->horario;?></p></td>
    </tr>
    <tr>
      <th scope="row" class="color-pink"><h5><b>Teléfono:</b></h5></th>
      <td><p class="text-right"><?php if($mercado->telefono == ''){ echo 'Sin Teléfono'; }else{ echo $mercado->telefono;}  ?></p></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>  
</div>
</div>
</div>



<a name="historia"></a>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <br><br><br>
        <h1 class = "text-center color-pink"><label><b>Historia</b></label></h1>
        <hr>
      
    </div>
</div>

<br>
<div class="row">
    <div class="columnas-separator col-xs-12 col-md-1">
    </div>
     <div class="columnas-separator col-xs-12 col-md-10 text-justify">

       <h6 class="interlineado"><?php echo $mercado->historia;?></h6>
     </div>
     <div class="columnas-separator col-xs-12 col-md-1">
    </div>
</div>
<br>

<br>
<a name="locales"></a>
<div class="row margen-abajo">
      <div class="col-xs-12 col-md-12">
        <br>
        <h1 class = "text-center color-pink"><label><b>Locales</b></label></h1>
        <hr>
      </div>
</div>

<?php if ($mercado->idMercado == '1'): ?>
    <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($locales as $key) {   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
            <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
             
            </div> 
            </div> 
           <br>
          </div>

         
          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby=<?php echo "label".$idnombre ?> aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id=<?php echo "label".$idnombre ?>> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaAbsoluta'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
    </div>

<?php else: ?>
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active pink-pill" id="pills-alimentos-tab" data-toggle="pill" href="#pills-alimentos" role="tab" aria-controls="pills-alimentos" aria-selected="true">Alimentos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-panaderia-tab" data-toggle="pill" href="#pills-panaderia" role="tab" aria-controls="pills-panaderia" aria-selected="false">Panadería</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-menudo-tab" data-toggle="pill" href="#pills-menudo" role="tab" aria-controls="pills-menudo" aria-selected="false">Menudo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-flores-tab" data-toggle="pill" href="#pills-flores" role="tab" aria-controls="pills-flores" aria-selected="false">Flores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-carnes-tab" data-toggle="pill" href="#pills-carnes" role="tab" aria-controls="pills-carnes" aria-selected="false">Carnes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-artesanias-tab" data-toggle="pill" href="#pills-artesanias" role="tab" aria-controls="pills-artesanias" aria-selected="false">Artesanías</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pink-pill" id="pills-textil-tab" data-toggle="pill" href="#pills-textil" role="tab" aria-controls="pills-textil" aria-selected="false">Textil</a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-alimentos" role="tabpanel" aria-labelledby="pills-alimentos-tab">
    
   <?php if ($alimentos == null): ?>
      <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
      </div>

  <?php else: ?>
     <div class= "row mx-auto p-3 style-centrado">
      <?php 
         foreach ($alimentos as $key) {   
      ?>
      <?php $idnombre = $key['idLocal']; ?>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
       <div class="card separator-card shadow-lg style-tarjeta">
        <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
          <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
          </div> 
       </div> 
       <br>
       </div>

       <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
      <?php } ?>
    </div>
  <?php endif ?>

    </div>
  <div class="tab-pane fade" id="pills-panaderia" role="tabpanel" aria-labelledby="pills-profile-tab">
    <?php if ($panaderia == null): ?>
          <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
          </div>

    <?php else: ?>
        <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($panaderia as $key){   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
          <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
            </div> 
          </div> 
           <br>
          </div>

          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
        </div>
    <?php endif ?>
 </div>
 <div class="tab-pane fade" id="pills-menudo" role="tabpanel" aria-labelledby="pills-contact-tab">
      <?php if ($menudo == null): ?>
        <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
          </div>

      <?php else: ?>
      <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($menudo as $key) {   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
          <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
            </div> 
          </div> 
           <br>
          </div>

          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
        </div>
    <?php endif ?>
  </div>
  <div class="tab-pane fade" id="pills-flores" role="tabpanel" aria-labelledby="pills-contact-tab">
      <?php if ($flores == null): ?>
       <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
          </div>

      <?php else: ?>
      <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($flores as $key) {   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
          <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
            </div> 
          </div> 
           <br>
          </div>

          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
        </div>
     <?php endif ?>
  </div>
  <div class="tab-pane fade" id="pills-carnes" role="tabpanel" aria-labelledby="pills-contact-tab">
      <?php if ($carnes == null): ?>
          <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
          </div>

       <?php else: ?>
      <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($carnes as $key) {   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
          <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
            </div> 
          </div> 
           <br>
          </div>

          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
        </div>
    <?php endif ?>
  </div>
  <div class="tab-pane fade" id="pills-artesanias" role="tabpanel" aria-labelledby="pills-contact-tab">
      <?php if ($artesanias == null): ?>
        <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
          </div>
      <?php else: ?>
      <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($artesanias as $key) {   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
          <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
            </div> 
          </div> 
           <br>
          </div>

          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
        </div>
    <?php endif ?>
  </div>
  <div class="tab-pane fade" id="pills-textil" role="tabpanel" aria-labelledby="pills-contact-tab">
      <?php if ($textil == null): ?>
          <div class= "texto-centrado">
           <img class="img-no-local" src="/assets/img/nolocal.png">
           <h6>Ningún local en esta categoría</h6>
          </div>

      <?php else: ?>
      <div class= "row mx-auto p-3 style-centrado">
          <?php 
            foreach ($textil as $key) {   
          ?>
          <?php $idnombre = $key['idLocal']; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 style-centrado">
          <div class="card separator-card shadow-lg style-tarjeta">
            <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>" alt="Card image cap" height="225">
            <div class="card-body">
              <h5 class="card-title"><p><b><?php echo $key['nombre'] ?></b></p></h5>
              <h6 class="card-subtitle pink-card mb-2"><b><?php echo $key['eslogan'] ?></b></h6>
              <h6 class="card-text text-min text-justify"><?php echo $key['historia'] ?></h6>
              <button type="button" class="btn btn-sm btn-ovalo text-boton-local" data-toggle="modal" data-target=<?php echo "#local".$idnombre ?>>Ver más</button>
            </div> 
          </div> 
           <br>
          </div>

          <div class="modal fade" id=<?php echo "local".$idnombre ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title negritas color-pink" id="exampleModalLabel"> <img src="/assets/img/locales_logo.png" class="margen-derecho-modal" height="34"><?php echo $key['nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                       <img class="card-img-top" src="<?php echo '/'.$key['rutaMediana'];?>">
                       <h6 class="negritas margen-arriba">Núm. Local: <?php echo $key['idLocal'] ?></h6>
                       <p class="separador text-modal"><?php echo $key['historia'] ?></p>
                       <h6 class="color-pink margen-iz-modal">Principales sabores: </h6>
                       <?php $arre = explode(',',$key['tags']); ?>
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
          <?php } ?>
        </div>
     <?php endif ?>
  </div>
</div>
<?php endif ?>

<br><br>
<a name="galeria"></a>
<div class="row col-xs-4">
    <div class="col-xs-12 col-md-12">
        <br><br>
        <h1 class = "text-center color-pink"><label><b>Galería</b></label></h1>
        <hr>
      
    </div>
</div> <br><br>

<div class="gallery" id="gallery">

  <?php foreach ($imagenes as $key) { ?>
    <div class="mb-3 pics animation all 2">
    <a href="<?php echo '/'.$key['rutaAbsoluta'];?>" data-lightbox="roadtrip"><img class="img-fluid" src="<?php echo '/'.$key['rutaAbsoluta'];?>" alt="Card image cap"></a>
  </div>

  <?php } ?>
</div>


<br><br>
<a name="localizacion"></a>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <br><br>
        <h1 class = "text-center color-pink"><label><b>Localización</b></label></h1>
        <hr>
      
    </div>
</div>
<!--Google map-->
<div id="mapa" style="height: 500px"></div>
 <!--Google Maps-->
<script  type ="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDz_WZm_szEfRfP8UB55fg3xbOFiC3MbHM"></script>
<!-- Google Maps settings -->
<script type="text/javascript">
  var divMapa = document.getElementById('mapa');
   navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
   function fn_mal(){}
   function fn_ok(rta){
    var lat = rta.coords.latitude;
    var lon = rta.coords.longitude;
    var latmercado = "<?php echo $mercado->latitud;?>";
    var lonmercado = "<?php echo $mercado->longitud;?>";

    var gLatLon = new google.maps.LatLng(lat,lon);
    var gLatLonMercado = new google.maps.LatLng(latmercado,lonmercado);
    
    var objConfig = {
      zoom: 11,
      center: gLatLon
    }

    var gMapa = new google.maps.Map(divMapa, objConfig);

    var objConfigMarker = {
      position: gLatLon,
      map: gMapa
    }
    var gMarker = new google.maps.Marker(objConfigMarker);

    var objHTML1 = {
      content: '<div style="height: 50px; width: 100px"><h1 class="texto-chico">Tu ubicación</h1></div>'
    }
    var gIW1 = new google.maps.InfoWindow(objHTML1);
    gIW1.open(gMapa, gMarker);

    google.maps.event.addListener(gMarker, 'click',function(){  
            gIW1.open(gMapa, gMarker);
     });

     var var_location = new google.maps.LatLng(latmercado, lonmercado);
     var var_marker = new google.maps.Marker({
          position: var_location,
          map: gMapa,
          title: "Mercado"
      });

     var objHTML2 = {
      content: '<div style="height: 80px; width: 120px"><h1 class="texto-chico"><?php echo $mercado->nombre;?></h1><h3 class="texto-direccion"><?php echo $mercado->direccion;?></h3></div>'
    }
    var gIW2 = new google.maps.InfoWindow(objHTML2);
     gIW2.open(gMapa, var_marker);

    google.maps.event.addListener(var_marker, 'click',function(){  
            gIW2.open(gMapa, var_marker);
     });
    
  
      var objConfigDR = {
        map: gMapa,
        suppressMarkers: true
      }

      var objConfigDS = {
        origin: gLatLon,
        destination: gLatLonMercado,
        travelMode: google.maps.TravelMode.DRIVING
      }

      var ds = new google.maps.DirectionsService();//obtener coordenadas
      var dr = new google.maps.DirectionsRenderer(objConfigDR);//traduce coordenadas y las dibuja

      ds.route(objConfigDS, fnRutear);

      function fnRutear(resultados, status){
        if(status == 'OK'){
          dr.setDirections(resultados);
        }else{
          alert('Error '+status);
        }
      }
   }
</script>
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