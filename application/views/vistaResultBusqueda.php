<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/carrucel-card-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/homeStyle.css">

    <title>Buscar Mercado</title>
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
                    <a class="nav-link separator-option" href="../">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link separator-option" href="<?php echo base_url(); ?>Mercado/galeria">Galeria</a>
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

<br><br><br>

<div class="container">

  <div class="row">
    <div class="col-sm-0 col-md-0 col-lg-2 col-xl-2"></div>
      <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
         <img class="img-fluid" src="<?php echo base_url();?>assets/img/seo.png" height="30" width="50">
      </div>
    <div class="col-sm-11 col-md-11 col-lg-9 col-xl-9"> 
      <h1 class = "text-left color-pink"><b>Resultados de búsqueda</b></h1>
    </div>
  </div>
</div>
  

<!-- tarjetas --------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<div class="container">
<?php if (!empty($socrates)) { ?>
  <br>
  <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2 class = "text-left color-orange"><b>Jardín Sócrates</b></h2>
          <hr>
        </div>
  </div>

<div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($socrates as $key => $value) {   
      ?>
      <div class="col-xs-12 col-md-6 col-xl-4" style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
        <h2 class = "text-left color-orange"><b>Mercado Paz Migueles</b></h2>
        <hr>
      </div>
</div>

<div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($paz as $key => $value) {   
      ?>
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
          <br>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado Hidalgo</b></h2>
          <hr>
          </div>
       </div>
      <div class="row mx-auto p-3" style="margin: 0 auto;">
       
      <?php 
         foreach ($hidalgo as $key => $value) {   
      ?>
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado La Cascada</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($cascada as $key => $value) {   
      ?>
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado Candiani</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($candiani as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado Venustiano Carranza</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($venustiano as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado Benito Juárez</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($benito as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado 20 de Noviembre</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($veinte as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado de Artesanías</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($artesanias as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado IV Centenario</b></h2>
          <hr>
        </div>
  </div>
 
      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($centenario as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado Sánchez</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($sanchez as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado de la Merced</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($merced as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado de las Flores</b></h2>
          <hr>
        </div>
  </div>


      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($flores as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado Zonal Santa Rosa</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($santarosa as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado de Abastos</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($abastos as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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
          <h2 class = "text-left color-orange"><b>Mercado la Noria</b></h2>
          <hr>
        </div>
  </div>

      <div class="row mx-auto p-3" style="margin: 0 auto;">
      <?php 
         foreach ($noria as $key => $value) {   
      ?>
      
      <div class="col-xs-12 col-md-6 col-xl-4 " style="margin: 0 auto;">
      <div class="card separator-card shadow-lg" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().$value['logo'];?>" alt="Card image cap" height="225">
          <div class="card-body">
          <h5 class="card-title"><p><b><?php echo $value['nombreLocal'] ?></b></p></h5>
          <h6 class="card-subtitle pink-card mb-2"><b><?php echo $value['eslogan'] ?></b></h6>
          <h6 class="card-text text-min text-justify"><?php echo $value['historia'] ?></h6>
          
          </div>
       </div>
        <br>
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

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS  -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/js/carrucel-card-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>