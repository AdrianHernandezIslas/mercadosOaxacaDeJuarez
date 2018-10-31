<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/homeStyle.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css/carrucel-card-style.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <title>Mercados de Oaxaca</title>
  </head>
  <body class="type-leter">
    <div class="row">
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
                    <a class="nav-link disabled separator-option" href="<?php echo base_url(); ?>Mercado/nosotros">Nosotros</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link separator-option" href="<?php echo base_url(); ?>Mercado/galeria">Galeria</a>
                  </li>
                </ul>
              <form method="POST" action="<?php echo base_url();?>Mercado/busqueda" class="form-inline mt-2 mt-md-0">
                <button class="btn btn-light sepbtn" type="submit">Buscar</button>
                <input class="form-control mr-sm-2 sepbtn" type="text" placeholder="Mercado" aria-label="Mercado" id="tags" name="tags">
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
      <h1 class="text-center color-pink bold"><label>Todos los Mercados</label></h1>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-12">
       <h5 class="text-center text-secondary"><label>Conoce los 14 mercados que te ofrece Oaxaca</label></h5>
    </div>
  </div>
  <div class="row">
    <h2 class="color-orange">Mercados Zona Centro</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <?php $flag=true; foreach ($CH as $key => $value) {  ?>
      <div class="carousel-item col-md-4 <?php if($flag){ echo 'active'; $flag=false; } ?>">
        <div class="card text-center shadow-lg">
              <img class="card-img-top img-fluid" src="<?php echo base_url().$value['imagen']; ?>"></img>
              <div class="card-body">
                <h4><?php echo $value['nombre']; ?></h4>
                <p class="card-text text-justify"><?php echo $value['descripcion']; ?></p>
                <a href="<?php echo base_url().'Mercado/mercado/'.$value['idMercado']; ?>" class="btn btn-sm btn-ovalo nav-bar-color text-white">Ver mas</a>
              </div>
          </div>
      </div>
     <?php } ?>
      <?php foreach ($C as $key => $value) {  ?>
      <div class="carousel-item col-md-4">
        <div class="card text-center shadow-lg">
              <img class="card-img-top img-fluid" src="<?php echo base_url().$value['imagen']; ?>"></img>
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
    <h2 class="color-orange">Mercados Zona Norte</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
       <?php $flag=true; foreach ($N as $key => $value) {  ?>
              <div class="carousel-item col-md-4 <?php if($flag){ echo 'active'; $flag=false; } ?>">
               <div class="card text-center shadow-lg">
                  <img class="card-img-top img-fluid" src="<?php echo base_url().$value['imagen']; ?>"></img>
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
    <h2 class="color-orange">Mercados Sur, Este y Poniente</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
       <?php $flag=true; foreach ($S as $key => $value) {  ?>
              <div class="carousel-item col-md-4 <?php if($flag){ echo 'active'; $flag=false; } ?>">
               <div class="card text-center shadow-lg">
                  <img class="card-img-top img-fluid" src="<?php echo base_url().$value['imagen']; ?>"></img>
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
                  <img class="card-img-top img-fluid" src="<?php echo base_url().$value['imagen']; ?>"></img>
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
    <img class="img-fluid imageninicio" src="<?php echo base_url();?>assets/img/andador.jpg">
    <div class="centrado"><h1 class="text-white font-img-size bold">Conoce más de</h1></div>
    <div class="centrado"><h1 class="color-pink font-img-size bold"><br><br>#Oaxaca</h1></div>
  </div>  
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6" >
        <br>
        <h2 class ="margen_texto1">Ciudad de Oaxaca</h2>
        <hr class="color-orange">
        <p class="text-justify text-secondary pmodal">La ciudad de Oaxaca es una de las más grandes joyas de México. Desde el momento mismo de su origen hasta el día de hoy, Oaxaca se ha distinguido por la estrecha convivencia entre su bella naturaleza y la creatividad artística del hombre. Esto ha dado lugar a una de las ciudades más hermosas y armoniosas del país.  
Oaxaca es célebre por su gastronomía. Como parte de sus riquezas naturales, históricas, culturales, artísticas, brilla la cocina tradicional oaxaqueña. La preservación de las culturas indígenas hasta convertirse en un presente vivo y actuante en Oaxaca, tiene una de sus mejores expresiones en cada uno de sus platillos típicos; destacan los moles, que aquí son de los más variados sabores y colores: moles negros, verdes, rojos, coloraditos, amarillos, pipianes, chichilos, manchamanteles, estofados... 
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal1">Ver más</button></p>
      </div>
      <div class="col-xs-12 col-md-6">
        <br><br><br><br>
        <img class="img-fluid shadow-lg" src="<?php echo base_url();?>assets/recursos/img/original/General_005.JPG" height="350" width="550">
      </div>
  </div>
</div>

 <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title bold" id="exampleModalLongTitle">#Oaxaca de Juárez</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
        <p>La ciudad de Oaxaca es una de las más grandes joyas de México. Desde el momento mismo de su origen hasta el día de hoy, Oaxaca se ha distinguido por la estrecha convivencia entre su bella naturaleza y la creatividad artística del hombre. Esto ha dado lugar a una de las ciudades más hermosas y armoniosas del país.  
Oaxaca es célebre por su gastronomía. Como parte de sus riquezas naturales, históricas, culturales, artísticas, brilla la cocina tradicional oaxaqueña. La preservación de las culturas indígenas hasta convertirse en un presente vivo y actuante en Oaxaca, tiene una de sus mejores expresiones en cada uno de sus platillos típicos; destacan los moles, que aquí son de los más variados sabores y colores: moles negros, verdes, rojos, coloraditos, amarillos, pipianes, chichilos, manchamanteles, estofados, etcétera.  
Junto con ellos, otras delicias tradicionales de Oaxaca como el tasajo, la cecina, las tlayudas, la hoja santa, tamales, quesos, y un muy largo etcétera. Todo acompañado por el mezcal, también típico de la región, aguas de sabores como limón con chía u horchata con nuez; y para terminar un tejate de maíz y cacao, o un chocolate. 
Además de los muchos restaurantes, de todas categorías y con estupendas cocinas, en Oaxaca es famosa la experiencia de comer en los mercados, como el 20 de noviembre, el de La Merced o el Benito Juárez.  
En la ciudad de Oaxaca y sus alrededores hay testimonios vivos de un orgullo ancestral que la hace única.   
Los mercados de Oaxaca ofrecen una delicia para todos los sentidos. Caminar por los mercados de la ciudad se convierte en toda una aventura de sabores, olores, texturas y colores que difícilmente pueden apreciarse en otros lugares de México. 
Los mercados de Oaxaca ofrecen una experiencia de compra única para los visitantes del Estado. La mayoría de los mercados están abiertos los 365 días del año.  
En los mercados de Oaxaca se encuentra todo lo que se puede espera y más, se puede disfrutar de los colores de las frutas y hortalizas, la artesanía de los artesanos locales y por supuesto, el olor y el sabor de los alimentos frescos. 
Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”, que luego de una rehabilitación, está más que fresco y renovado para recibir a todos sus clientes, que por su ubicación privilegiada y su cercanía con muchos fraccionamientos y colonias, han logrado que sea el sitio perfecto para desayunar, comer, o hacer la compra de los productos de la semana para el hogar. 
Por sus pasillos se puede encontrar muchos productos de consumo frecuente y que se necesita tener en casa. Frutas, verduras, cremerías, carnicerías, juguerías, florerías, cocinas, venta de pan, entre otros más que, gracias a los vecinos, los consideran de la mejor calidad y que es un elemento principal para que la gente regrese y les otorgue su confianza. 
Si algo que hace ganar corazones es encontrar un sitio con todo lo que se busca, el mercado Paz Migueles es uno de ellos. Por cada local, se encontrará de todo, así que si se necesita comprar la lista de la semana para la casa, este es el lugar perfecto, que desde temprana hora recibe a clientes; todo el día los compradores pululan por sus pasillos. 
El mercado Paz Migueles abrió sus puertas por primera vez el 20 de noviembre de 1983. Este mercado está conformado por 74 locatarios, quienes tienen para propios y extraños, diversos productos de la mejor calidad, así como espacios para degustar la gastronomía de nuestro estado. 
Desde hace 38 años, en el centro de la ciudad, el Mercado de las Artesanías de Oaxaca se ha convertido en un referente de propios y visitantes nacionales e internacionales para adquirir y admirar las creaciones de las manos de artesanos oaxaqueños de las regiones del estado: las artesanías. 
Hoy, a 38 años de su creación, más de 130 locatarios integran este mercado que ofrecen piezas de barro, huipiles, textiles, trajes regionales, hojalata, alebrijes, entre otras artesanías más que llevan el sentimiento de los artesanos de las ocho regiones de la entidad. 
Una parada obligada para quienes buscan lugares tradicionales para comer en Oaxaca es sin duda alguna el pasillo de carnes asadas del Mercado 20 de noviembre en la ciudad de Oaxaca.
Los mercados de Oaxaca son coloridos lugares llenos de movimiento y tradiciones vivas y han sido el punto de reunión tradicional desde mucho antes de la colonización.  
Casi todo el mercado 20 de noviembre está consagrado a la venta de comida, como materia prima o ya preparada. El pasillo oriente es un corredor donde se venden tasajo, cecina y chorizo de manera tradicional. Ahí mismo echarán a las brasas la carne ofrecerán todo lo que se necesita para acompañar: guacamole, cebollas, cilantro, aguacates, limones, chiles, jitomate, tortillas, cervezas y refrescos. Una experiencia deliciosa. 
“Buenos días, pásele, qué le vamos a dar, aquí está lo bueno, lleve pan calientito, tamales,” es lo primero que se escucha al visitar uno de los sitios más visitados los días domingos al poniente de la ciudad: el mercado zonal de Santa Rosa. 
Empezar el recorrido por sus pasillos, abrirá el apetito que invitará a probar un poco de todo que lo ofrece. Pan dulce, tamales, gelatinas, licuados, deliciosas memelitas, exquisita barbacoa, es un poco de todo lo que se podrá encontrar en este mercado tradicional. 
El mercado IV Centenario es punto limítrofe en el Oaxaca colonial entre la ciudad y el antiguo barrio del Marquesado, asentado alrededor del templo del mismo nombre. Le decían “de la rayita” o “mercado de la raya” precisamente porque ahí estaba la raya imaginaria que ponía límite a la ciudad.  
Actualmente en sus instalaciones, se disfrutan de los más tradicionales productos oaxaqueños. Las quesadillas con epazote, los molotes, los tacos de cazuela, jugos de todas las frutas y verduras, que son disfrutados por centenas de comensales que acuden a desayunar a este mercado ubicado en la calle de Independencia. 
Entre las calles de Joaquín Amaro y Porfirio Díaz, en el centro de la Ciudad, está ubicado el Mercado Sánchez Pascuas o Del Carmen Alto, se le llama así por su proximidad al Templo de la Virgen del Carmen Alto, incluso existiendo en su interior una pequeña capilla de adoración. Se trata de un mercado típico de Oaxaca muy atractivo para quienes gustan de probar la tradicional comida oaxaqueña y saborear las famosas empanadas de flor de calabaza y los tamales de chepil o de mole acompañados con atole blanco.  
Su día de esplendor es el domingo, cuando en la plataforma del Amaro, el paseante puede apreciar los trabajos de los carpinteros locales: libreros, mesas, camas, mientras de un costado se observa un arcoíris de colores, entre sus puestos de flores, frutas, el cantar de sus tortilleras ofreciendo blanda o Tlayuda, donde se respira la tranquilidad del pueblo Oaxaqueño. 
Entre los lugares más comunes para visitar en el día a día de un ciudadano oaxaqueño es el Mercado de La Merced que existe desde 1973. Hoy en día se mantiene como uno de los lugares comerciales más tradicionales de la ciudad, ofreciendo una amplia variedad de productos locales como quesos, tamales, panes, dulces regionales, frutas, tortillas y tostadas hechas a mano, carnes, etc.  
Es el lugar típico para desayunar los domingos en familia y también para los visitantes de la ciudad es una buena alternativa para degustar algunos platillos típicos a precios muy accesibles. Entre los comerciales más tradicionales de la ciudad, ofreciendo una amplia variedad de productos locales como quesos, tamales, panes, dulces regionales, frutas, tortillas y tostadas hechas a mano, carnes, etc.  
Lugares para comer más famosos del mercado se encuentra la fonda “Florecita” que tiene una pared con mensajes de personas de todo el mundo que han estado ahí, conservando todavía las firmas de personalidades famosas como Bono de U2 o el pintor Rodolfo Morales. 
El mercado Las Flores, dependiente del municipio de Oaxaca de Juárez, inició operaciones en 1974; sin embargo, en 1985 se construyó el inmueble que hoy alberga a casi 100 locatarios de este mercado.  
Ni muy grande ni muy pequeño, el Mercado Zonal Las Flores lo tiene de todo. En sus pasillos se puede encontrar una gran variedad de negocios, desde carnicerías, molinos, juguerías, frutas y legumbres, florerías, peleterías, plásticos, mercerías, cremerías, cocinas, entre otras más.  
A casi más de 42 años de fundación, el mercado se ha posicionado en el gusto de la gente, por su calidez, hospitalidad, buena atención, así como la gran calidad de los productos y como dijeran muchos locatarios de este sitio: “lo que busca, seguro aquí lo encuentra”.  
El mercado municipal de estilo francés, que inicialmente llevó el nombre del General “Porfirio Díaz” y en 1911 cambió por el de “Benito Juárez” encierra grandes tradiciones; es y ha sido parte de la historia y la cultura de Oaxaca. 
Construido en 1893 por la Compañía Real Campbell, empresa que antes había construido el ferrocarril México-Oaxaca. Este mercado encierra grandes tradiciones, además de que es y ha sido parte de la historia y la cultura de Oaxaca. Construido con una estructura de hierro fundido, material que se utilizó en los ferrocarriles, el inmueble que ha soportado los sismos que han sacudido y destruido gran parte de la capital del estado, sigue siendo el alma cultural, tradicional y comercial de los oaxaqueños desde hace 112 años.  
Con ocho puertas de hierro forjado en sus cuatro costados y los 876 locales totalmente remodelados, los locatarios iniciaron sus operaciones comerciales y con ello el bullicio, la alegría, los colores, la textura y los sabores inundaron el ambiente.  
Los locatarios ofrecen a propios y visitantes sus artesanías, nieves, aguas frescas, el tejate, los chapulines y dulces regionales; dulces artesanales, flores, los quesos, el pan que se expende en los accesos y las tortillas blandas y tlayudas.  
A todo esto, hay que agregar las carnes de pollo, de res, de borrego y cerdo, sin olvidar los huaraches, los sombreros, la mercería, joyería, ropa típica, verduras, frutas mezcal, mercería, piñatas, entre otros artículos. 
Los mercados oaxaqueños son una fiesta para los sentidos. 
 </p>
      </div>
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-ovalo nav-bar-color text-white" data-dismiss="modal">Cerrar</button>
       </div>
      </div>
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
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!--script src="<?php echo base_url();?>assets/js/js/carrucel-card-script.js" --><!--/script-->
  </body>
</html>