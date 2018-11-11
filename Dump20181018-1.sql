-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: mercados
-- ------------------------------------------------------
-- Server version	8.0.1-dmr-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `idLocal` int(3) NOT NULL,
  `FBLlink` mediumtext,
  `FBUser` varchar(60) DEFAULT NULL,
  `instagramLink` mediumtext,
  `instagramUser` varchar(60) DEFAULT NULL,
  `twiterLink` mediumtext,
  `twiterUser` varchar(60) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  KEY `fk_local_contacto_idx` (`idLocal`),
  CONSTRAINT `fk_local_contacto` FOREIGN KEY (`idLocal`) REFERENCES `local` (`idLocal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giro`
--

DROP TABLE IF EXISTS `giro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giro` (
  `idGiro` int(2) NOT NULL AUTO_INCREMENT,
  `nombreGiro` varchar(45) NOT NULL,
  PRIMARY KEY (`idGiro`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giro`
--

LOCK TABLES `giro` WRITE;
/*!40000 ALTER TABLE `giro` DISABLE KEYS */;
INSERT INTO `giro` VALUES (1,'Alimentos'),(2,'Panaderia'),(3,'Menudo'),(4,'Flores'),(5,'Carnes'),(6,'Artesanias'),(7,'Textil');
/*!40000 ALTER TABLE `giro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen`
--

DROP TABLE IF EXISTS `imagen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen` (
  `idMercado` int(2) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `rutaMediana` longtext,
  `rutaAbsoluta` longtext NOT NULL,
  `peso` varchar(12) DEFAULT NULL,
  `fechaCreacion` varchar(10) NOT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  KEY `fk_idmenrcado_idx` (`idMercado`),
  CONSTRAINT `fk_idmenrcado` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen`
--

LOCK TABLES `imagen` WRITE;
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `local` (
  `idLocal` int(3) NOT NULL AUTO_INCREMENT,
  `idMercado` int(2) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `idGiro` int(2) NOT NULL,
  `eslogan` varchar(100) DEFAULT NULL,
  `logo` longtext,
  `historia` longtext,
  `tags` longtext NOT NULL,
  PRIMARY KEY (`idLocal`),
  KEY `fk_mercado_idx` (`idMercado`),
  CONSTRAINT `fk_mercado` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercado`
--

DROP TABLE IF EXISTS `mercado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mercado` (
  `idMercado` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `zona` varchar(2) NOT NULL,
  `descripcion` longtext,
  `historia` longtext,
  `latitud` varchar(15) NOT NULL,
  `longitud` varchar(15) NOT NULL,
  `horario` varchar(45) NOT NULL,
  PRIMARY KEY (`idMercado`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercado`
--

LOCK TABLES `mercado` WRITE;
/*!40000 ALTER TABLE `mercado` DISABLE KEYS */;
INSERT INTO `mercado` VALUES (1,'Jardín Sócrates','Av. de la Independencia Centro, CP 68000, Oaxaca de Juarez','','C','Subiendo las escaleras de la calle Independencia, se ve la plazuela del Jardín Sócrates, lugar que conforma el conjunto arquitectónico de la Basílica de la Soledad, la Plaza de la Danza y el Palacio capitalino, donde desde el año 1980 se ofrece a sus visitantes ricas nieves preparadas con frutas de la temporada, mezcal y otros sabores.','Subiendo las escaleras de la calle Independencia, se ve la plazuela del Jardín Sócrates, lugar que conforma el conjunto arquitectónico de la Basílica de la Soledad, la Plaza de la Danza y el Palacio capitalino, donde desde el año 1980 se ofrece a sus visitantes ricas nieves preparadas con frutas de la temporada, mezcal y otros sabores. La Plaza de la Danza fue construida en 1959 para la educación estética y para esparcimiento del pueblo, por el Lic. Eduardo Vasconcelos. En esta plaza se celebran eventos culturales, y ha sido escenario de presentaciones de artistas, orquestas internacionales y eventos políticos. La plaza está construida totalmente con piedra de cantera, aprovechándose la pendiente natural del terreno para hacer las gradas. Las plazas escalonadas forman tres ámbitos distintos: el atrio de la Soledad, la Plaza de la Danza y el Jardín Sócrates. Este establecimiento se ubica inmediatamente al sudeste de la Plaza de la Danza, anteriormente fue conocida como Plazuela de la Soledad. La antigua plazuela de la Soledad fue convertida en jardín público en 1881, con el nombre de Jardín Sócrates, la fuente labrada en cantera que se encuentra actualmente, ha conservado su mismo sitio. En 1981 se remodeló el jardín, se colocó otro piso de cantera, se instalaron accesorios para puestos y se dotó de servicios sanitarios públicos. Es también en este lugar donde se encuentran las tradicionales nieves de Oaxaca, que han creado fama internacional y que han sido paladeadas por grandes personajes, entre ellos, la reina Isabel de Inglaterra y la Sra. Gandhi, quien fue primer ministro de la India. Poco se sabe de la historia de los negocios de nieves que están hoy en el jardín Sócrates, anteriormente no estaban en esa ubicación, es decir, su historia no nació en este sitio; hoy la quinta y sexta generación narran que todo inició en el corazón de la ciudad, primero comenzaron a ofertar las nieves alrededor de la Plaza de la Constitución, con el paso del tiempo,  los ubicaron a un costado del Marqués del Valle, posteriormente, pasaron a la Alameda de León sin embargo hace casi más de 37 años con la visita de su santidad Juan Pablo II, las autoridades Municipales y Estatales los reubicaron para que la Alameda estuviera libre de vendedores. Para los vendedores existen fechas emblemáticas, donde todos los negocios están a su capacidad total, las vacaciones de Semana Santa, la Guelaguetza y la fiesta de la Virgen de la Soledad, por lo que se ha acuñado una frase muy característica: “Si no fuiste por tu nieve al jardín Sócrates no viniste a la fiesta de la Virgen de la Soledad”.','17.063158','-96.729247','8:00 -  20:00'),(2,'Paz Migueles','Proletariado Mexicano, Volcanes, 68020 Oaxaca, Oax.','','N','Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”.','Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”, que luego de una rehabilitación, está más que fresco y renovado para recibir a todos sus clientes que, por su ubicación privilegiada y su cercanía con muchos fraccionamientos y colonias, han logrado que sea el sitio perfecto para desayunar, comer, o hacer la compra de los productos de la semana para el hogar. Por sus pasillos se puede encontrar muchos productos de consumo frecuente y que se necesita tener en casa, frutas, verduras, cremerías, carnicerías, juguerías, florerías, cocinas, venta de pan, entre otros más que, gracias a los vecinos, los consideran de la mejor calidad y que es un elemento principal para que la gente regrese y les otorgue su confianza. Si algo que hace ganar corazones es encontrar un sitio con todo lo que se busca, el mercado Paz Migueles es uno de ellos. Por cada local, se encontrará de todo, así que, si se necesita comprar la lista de la semana para la casa, este es el lugar perfecto, que desde temprana hora recibe a clientes; todo el día los compradores pululan por sus pasillos. El mercado Paz Migueles abrió sus puertas por primera vez el 20 de noviembre de 1983 y está conformado por 74 locatarios, quienes tienen para propios y extraños, diversos productos de la mejor calidad, así como espacios para degustar la gastronomía de nuestro estado.','17.088151','-96.711087','6:00 - 18:00'),(3,'Hidalgo','Palmeras s/n, Reforma, Oaxaca, Oax.','','N','El famoso mercadito de la colonia reforma donde puedes encontrar desde  la más exótica fruta hasta la más  rica carne.','Esta es su historia','17.076676','-96.715813','7:00 - 20:00'),(4,'La Cascada','Río Pedregal 105, La Cascada, 68040 Oaxaca, Oax.','','N','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX','Esta es su historia','17.077017','-96.724504','7:00 - 18:00'),(5,'Candiani','Universidad, Agencia de Policia de Candiani, 68130 Oaxaca, Oax.','','S','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXX','Esta es su historia','17.045500','-96.717200','7:00 - 18:00'),(6,'Venustiano Carranza','Miguel Alemán Valdez, 68120 Oaxaca, Oax.','','S','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX X XXXXXXXXXXXXXXXXXXXXXX','Esta es su historia','17.049069','-96.726230','7:00 - 21:00'),(7,'Benito Juárez','OAX_RE_BENITO JUAREZ, Centro, 68000 Oaxaca, Oax.','9515162352','CH','Animado mercado techado con vendedores que ofrecen productos, comidas preparadas, artesanías y telas.','El mercado municipal de estilo francés, que inicialmente llevó el nombre del General “Porfirio Díaz” y en 1911 cambió por el de “Benito Juárez” encierra grandes tradiciones; es y ha sido parte de la historia y la cultura de Oaxaca. Construido en 1893 por la Compañía Real Campbell, empresa que antes había construido el ferrocarril México-Oaxaca. Este mercado encierra grandes tradiciones, además de que es y ha sido parte de la historia y la cultura de la Ciudad. Construido con una estructura de hierro fundido, material que se utilizó en los ferrocarriles, el inmueble que ha soportado los sismos que han sacudido y destruido gran parte de la capital del estado, sigue siendo el alma cultural, tradicional y comercial de los oaxaqueños desde hace 112 años. Con ocho puertas de hierro forjado en sus cuatro costados y los 876 locales totalmente remodelados, los locatarios iniciaron sus operaciones comerciales y con ello el bullicio, la alegría, los colores, la textura y los sabores inundaron el ambiente. Los locatarios ofrecen a propios y visitantes sus artesanías, nieves, aguas frescas, el tejate, los chapulines y dulces regionales; dulces artesanales, flores, los quesos, el pan que se expende en los accesos y las tortillas blandas y tlayudas. A todo esto, hay que agregar las carnes de pollo, de res, de borrego y cerdo, sin olvidar los huaraches, los sombreros, la mercería, joyería, ropa típica, verduras, frutas mezcal, mercería, piñatas, entre otros artículos. Situado muy cerca del Zócalo (término mexicano para referirse a la plaza mayor), este mercado al que se accede por ocho posibles puertas es un mini-laberinto de pasillos abarrotados de telas, flores, especias, joyas, cestas, zumos, frutas y mil cosas más, pero con un producto estrella: los chapulines, unos minúsculos saltamontes que se utilizan como relleno de las clásicas tortillas y de los que se dice que quien los prueba repite.','17.058954','-96.726704','7:00 - 21:00'),(8,'20 de Noviembre','20 de Noviembre 512, Centro, 68000 Oaxaca, Oax.','','CH','Uno de los dos mercados más representativos de Oaxaca, se conoce también, por los turistas, como mercado de las carnes, aquí el sabor de los antojos del estado se reúnen para ofrecer una experiencia maravillosa.','Una parada obligada para quienes buscan lugares tradicionales para comer en Oaxaca es sin duda alguna el pasillo de carnes asadas del Mercado 20 de noviembre en la ciudad de Oaxaca. Casi todo el mercado 20 de noviembre está consagrado a la venta de comida, como materia prima o ya preparada. El pasillo oriente es un corredor donde se venden tasajo, cecina y chorizo de manera tradicional. Ahí mismo echarán a las brasas la carne, ofrecerán todo lo que se necesita para acompañar: guacamole, cebollas, cilantro, aguacates, limones, chiles, jitomate, tortillas, cervezas y refrescos. Una experiencia deliciosa. La calle 20 de Noviembre da nombre a este mercado donde también brilla con luz propia la cocina local. Tiene un buen puñado de comedores o puestos de viandas, parte de los cuales han instalado bancos y/o mesas para probarlas in situ. El confort en este caso se limita exclusivamente al sentido del gusto. La variedad de comida deleita los sentidos, desde los panes de yema con ajonjolí hasta los exquisitos moles que sirven en las fondas ordenadas en el interior del mercado. En lo alto de la entrada norte se ve la fecha de 1888, aunque las obras dieron comienzo a principios de 1862, sin embargo, las invasiones y constantes luchas intestinas provocaron más de 20 años de demora para inaugurarse. La fachada norte, sobre la calle de Aldama, es alta y sobria. El ancho pasillo se llena de populares canciones del momento y los cálidos “pásele, pásele” de las cocineras. Sobre la entrada oriente que desemboca a la calle Miguel Cabrera, se alinean los puestos que venden carne de res y de puerco para prepararse en anafres, como tradicionalmente se viene realizando en la cocina oaxaqueña. En un principio se llamó Mercado de La Industria, posiblemente porque ahí se ofrecían productos de metal, lozas, tejidos, etc. Fue construido sobre terrenos de los que fuera la primera catedral de la Verde Antequera (actualmente Oaxaca de Juárez), San Juan de Dios. Para los años cuarenta del siglo XX ya se le conocía como la Plaza Vieja, donde llegaban las cargas de diversos granos, así como las tortilleras, tizateras (vendedoras de copal y carbón) y vendedores de cestería. En el pasillo oeste los carniceros ofrecen sus productos a los “marchantes”, quienes pueden asar la carne en los braseros, a un costado de los puestos; comerla caminando o sentados sobre el piso, con las tradicionales cebollitas y chiles de agua. El mercado 20 de noviembre es un testigo de la historia de la ciudad y concentra los sabores y olores que distinguen a Oaxaca de otros lugares del mundo. Se puede llegar al mercado partiendo del Zócalo, caminando dos cuadras y media hacia el sur, sobre la calle Flores Magón y a mano derecha se ve la entrada de los anafres. O también partiendo del Zócalo andando sobre la calle de Valerio Trujano hacia el oeste, dar vuelta a mano izquierda en la calle 20 de noviembre y caminar un par de cuadras más.','17.057874','-96.727260','7:00 - 21:00'),(9,'Artesanías','Gral. Ignacio Zaragoza, OAX_RE_BENITO JUAREZ, Centro, 68000 Oaxaca, Oax.','','CH','El mercado de Artesanías en Oaxaca sin sorpresas es dedicado a la venta de productos artesanales. Todas las artesanías de Oaxaca están encontradas aquí.','Desde hace 38 años, en el centro de la ciudad, el Mercado de las Artesanías de Oaxaca se ha convertido en un referente de propios y visitantes nacionales e internacionales para adquirir y admirar las creaciones de las manos de artesanos oaxaqueños de las regiones del estado: las artesanías. Hoy, a 38 años de su creación, más de 130 locatarios integran este mercado que ofrecen piezas de barro, huipiles, textiles, trajes regionales, hojalata, alebrijes, entre otros producto, lás que llevan el sentimiento de los artesanos de las ocho regiones de la entidad. Especialmente indicado para los forasteros con ganas de llevarse un souvenir típico, alejado de la mercadotecnia común, este lugar inaugurado en 1980 acumula todo tipo de productos de artesanía y folklore. Todo el que visita Oaxaca no puede irse sin visitar el Mercado de Artesanías y ver el grandioso trabajo que hacen los artesanos con la alfarería y la joyería, tanto que han alcanzado fama mundial. La artesanía oaxaqueña se destaca por ser muy colorida, basta con recorrer el mercado para darse cuenta de todo lo que representa para ellos hacer un buen trabajo.','17.057078','-96.728453','12:00 - 19:00'),(10,'IV centenario','Alfonso Mercado, IV Centenario, Centro, 68000 Durango, Oax.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXX','El mercado IV Centenario es punto limítrofe en el Oaxaca colonial entre la ciudad y el antiguo barrio del Marquesado, asentado alrededor del templo del mismo nombre. Le decían “de la rayita” o “mercado de la raya” precisamente porque ahí estaba la raya imaginaria que ponía límite a la ciudad. Actualmente en sus instalaciones, se disfrutan de los más tradicionales productos oaxaqueños, las quesadillas con epazote, los molotes, los tacos de cazuela, jugos de todas las frutas y verduras, que son disfrutados por centenas de comensales que acuden a desayunar a este mercado ubicado en la calle de Independencia.','17.063768','-96.731467','7:00 - 18:00'),(11,'Sánchez Pascuas','Calle Porfirio Díaz 719, RUTA INDEPENDENCIA, Centro, 68000 Oaxaca, Oax.','','CH','Este pequeño mercado también es llamado Mercado del Carmen, por su proximidad al Templo del mismo Nombre. ','Entre las calles de Joaquín Amaro y Porfirio Díaz, en el centro de la Ciudad, está ubicado el Mercado Sánchez Pascuas o Del Carmen Alto, se le llama así por su proximidad al Templo de la Virgen del Carmen Alto, lo más curioso es que el propio mercado ha habilitado en su interior una capillita para el culto. Se trata de un mercado típico de Oaxaca muy atractivo para quienes gustan de probar la tradicional comida oaxaqueña y saborear las famosas empanadas de flor de calabaza y los tamales de chepil o de mole acompañados con atole blanco. Su día de esplendor es el domingo, cuando en la plataforma del Amaro, el paseante puede apreciar los trabajos de los carpinteros locales: libreros, mesas, camas, mientras de un costado se observa un arcoíris de colores, entre sus puestos de flores, frutas, el cantar de sus tortilleras ofreciendo blanda o Tlayuda, donde se respira la tranquilidad del pueblo Oaxaqueño. El mercado Sánchez Pascuas tiene casi más de 45 años de recibir a diario, a decenas de personas que adquieren lo mejor de los productos de Oaxaca, pues es un mercado de gran tamaño. Este sitio nació muy cerca de su ubicación actual, en la explanada de la iglesia de El Carmen Alto, en donde casi más de 160 vendedores de diversos productos ofrecían sobre pequeñas lonas.En 1972, el mercado estrenó su ubicación –la actual- bajo el nombre del arquitecto que trazó el primer sistema de alcantarillado en el primer cuadro de la ciudad. Pero más allá de eso, este mercado se ha posicionado como un sitio obligatorio para degustar los fines de semana los mejores alimentos que nos ofrece el área de cocinas; y el lugar exacto para comprar toda la lista de los productos que necesitamos para la semana. Este mercado está distribuido en tres zonas. En la primera encontraremos todo sobre abarrotes y diversas tiendas que ofrecen ropa, zapatos, accesorios y hasta detalles para algún regalo. En la segunda zona se ubican las carnicerías, fruterías, pollerías, queserías, todo lo necesario para surtir nuestra lista de la semana. Y la tercera zona de este mercado es el área de comida, donde todos los sábados y domingos, aunque también diversos días de la semana, suele abarrotarse de propios y extraños, quienes acuden a degustar los deliciosos platillos, sin olvidarse de pedir un exquisito licuado o jugo natural.','17.068669','-96.725505','6:00 - 18:00'),(12,'La merced','Mercado de la Merced, y del, Privada Morelos, San Pedro de los Baños, Nicolás, Méx.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Entre los lugares más comunes para visitar en el día a día de un ciudadano oaxaqueño es el Mercado de La Merced que existe desde 1973. Hoy en día se mantiene como uno de los lugares comerciales más tradicionales de la ciudad, ofreciendo una amplia variedad de productos locales como quesos, tamales, panes, dulces regionales, frutas, tortillas y tostadas hechas a mano, carnes, etc. Es el lugar típico para desayunar los domingos en familia y también para los visitantes de la ciudad es una buena alternativa para degustar algunos platillos típicos a precios muy accesibles. Entre los lugares para comer más famosos del mercado se encuentra la fonda “Florecita” que tiene una pared con mensajes de personas de todo el mundo que han estado ahí, conservando todavía las firmas de personalidades famosas como Bono de U2 o el pintor Rodolfo Morales. A inicios del 1900 el atrio de la Iglesia de la Merced propiamente fue un espacio arbolado y por ello utilizado por la gente que venía de nuestros pueblos a vender algunos productos. Al crecer la población de la ciudad a mediados del siglo XIX el gobierno de don Emilio Pimentel (1902-1911) instaló un casetón metálico que cubría una gran parte del atrio formando un mercado más formal. Debido a la extensión de la población en 1973 acordaron su traslado a la esquina de la Avenida Morelos y Nicolás del Puerto, terreno ocupado por el antiguo rastro de la ciudad y colindando con la Escuela Francisco J. Mujica. Hoy en día es uno de los mercados más importantes de la ciudad debido a su gran variedad gastronómica, ya que puedes encontrar exquisitas memelas y empanadas de diversos de guisos y en su área de comedores una variedad de platillos tradicionales de Oaxaca.','17.0776480','-96.7381142','6:00 - 18:00'),(13,'Las flores','Cuarta Orquídeas 210, Las Flores Sur, Santa Lucía del Camino, Oax.','','O','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX','El mercado Las Flores, dependiente del municipio de Oaxaca de Juárez, inició operaciones en 1974; sin embargo, en 1985 se construyó el inmueble que hoy alberga a casi 100 locatarios de este mercado. Ni muy grande ni muy pequeño, el Mercado Zonal Las Flores lo tiene de todo. En sus pasillos se puede encontrar una gran variedad de negocios, desde carnicerías, molinos, juguerías, frutas y legumbres, florerías, plásticos, mercerías, cremerías, cocinas, entre otras más. A casi más de 42 años de fundación, el mercado se ha posicionado en el gusto de la gente, por su calidez, hospitalidad, buena atención, así como la gran calidad de los productos y como dijeran muchos locatarios de este sitio: “lo que busca, seguro aquí lo encuentra”.','17.069764','-96.702616','6:00 - 18:00'),(14,' Zonal Santa Rosa','Santa Carolina 816, Santa Rosa, 68274 Oaxaca, Oax.','9581065616','P','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','“Buenos días, pásele, qué le vamos a dar, aquí está lo bueno, lleve pan calientito, tamales,” es lo primero que se escucha al visitar uno de los sitios más visitados los días domingos al poniente de la ciudad: el mercado zonal de Santa Rosa. Empezar el recorrido por sus pasillos, abrirá el apetito que invitará a probar un poco de todo lo que se ofrece. Pan dulce, tamales, gelatinas, licuados, deliciosas memelitas, exquisita barbacoa, es un poco de todo lo que se podrá encontrar en este mercado tradicional.','17.093824','-96.747707','6:00 - 18:00'),(15,'Mercado de Abasto \"Margarita Maza  de Juárez\"','Sin direccion','9581065616','C','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Es el más grande, llamado también Mercado Margarita Maza de Juárez, recibiendo productos de todo el estado e incluso de otros puntos del país. Se deduce, pues, que tiene de todo: desde luego, lo relacionado con la alimentación, como verduras, maíz, chiles, chapulines, cacao, café, cacahuetes, pescado, etc.; pero también hamacas, carbón, copal, madera y hasta hierbas curativas. El mercado Margarita Maza de Juárez mejor conocido como \"Mercado de Abasto\" se ubica al poniente de la ciudad y forma parte de la cabecera municipal, a sus alrededores se han congregado una serie de sitios de taxis colectivos provenientes de diferentes pueblos de valles centrales, además de que, a un costado de dicho mercado, se encuentra la Central de Autobuses de Segunda Clase de Oaxaca, situación que ha dado pie a que el mercado se convierta en un punto clave, pues es aquí donde se congregan personas provenientes de las ocho regiones del estado, dando como resultado la concentración, en un solo lugar, de un sinfín de idiomas, costumbres y productos de las diferentes regiones, formando un mosaico multicultural. En este sitio, gran parte de los capitalinos acuden a proveerse de los artículos de primera necesidad, tales como, alimentos, materias primas, especias y una gran variedad de productos de diversa índole. El mercado está dividido en cinco áreas principales que son: Módulos, Zona Seca, Zona Húmeda, Bodegas y Tianguis. El sábado es el día de mayor actividad y al recorrer estas secciones se puede fácilmente encontrar de todo tipo de productos, entre los que se encuentran: artículos para el hogar, artesanías hechas de barro, de piel o palma, trajes y accesorio típicos. Dentro de la gran gama de alimentos se puede adquirir barbacoa de Tlacolula, empanadas de amarillo y de flor de calabaza, chapulines, pan de Etla, mezcal de Sola de Vega, pescados horneados y asados provenientes del Istmo, quesos y otros derivados de la leche, diferentes tipos de carnes, frutas, hortalizas y granos, entre muchos otros. Conocer la Central de Abasto es una de las experiencias más interesantes de Oaxaca. En todas partes desde las alfombras y cestas colgantes, suculentas comidas, frutas tropicales y trajes regionales, hasta amontonadas cabras, pollos, hortalizas y animales en venta, así como el cantar de los vendedores \"qué va a llevar\" Tlayudas, tortillas, Queso, quesillo. Pronto se convierte en parte del ruido, los olores de los alimentos y flores, las llamadas de los vendedores. Los sábados de mercado este se encuentra más vivo que nunca, las tejedoras sentadas en el suelo que trabajan en sus telares, con blusas, rojo, blanco y negro, huipiles colgando por encima de ellas, en la sección de artesanía (sureste de la sección de pan, chocolate y restaurantes) los vendedores de las jaulas de aves, de paja y de palma arnés, cuerdas, hamacas, bolsas, cestas y repartidas en tres largos pasillos.  También se puede encontrar figuras realizadas con Carrizo para hacer maravillosos platos, bastidores, camiones y aviones de juguete, y las jaulas de aves en formas tan divertidas como de pequeñas casas e iglesias. En un centro de pasillo los fabricantes de hamacas y en la calle los productores de San Antonino venden sus vegetales. Los largos pasillos están dedicados al verde de cristal y cerámica beige natural de Atzompa y el famoso negro pulido de cerámica de San Bartolo Coyotepec, patos, búhos, Conejos, aves, y collares, molcajetes, o cómales, de entre los puestos de venta de cerámica son de madera pintados animales en una miríada de colores de los acrílicos, los pequeños artículos de cuero (carteras, cinturones, bolsos maravillosos), agitadores de madera. ','12.2','23.3','Horario conocido'),(16,'La Noria','Sin direccion','9581065616','C','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Esta es su historia','12.2','23.3','Horario conocido');
/*!40000 ALTER TABLE `mercado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recurso`
--

DROP TABLE IF EXISTS `recurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recurso` (
  `idMercado` int(2) NOT NULL,
  `idLocal` int(3) DEFAULT NULL,
  `idRecurso` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(5) NOT NULL,
  `rutaMediana` varchar(150) NOT NULL,
  `rutaAbsoluta` varchar(150) NOT NULL,
  `extension` varchar(5) DEFAULT NULL,
  `peso` varchar(12) DEFAULT NULL,
  `medidas` varchar(45) DEFAULT NULL,
  `fechaCreacion` date NOT NULL,
  PRIMARY KEY (`idRecurso`),
  KEY `fk_mercado_recurso_idx` (`idMercado`),
  KEY `fk_local_recurso_idx` (`idLocal`),
  CONSTRAINT `fk_local_recurso` FOREIGN KEY (`idLocal`) REFERENCES `local` (`idLocal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mercado_recurso` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recurso`
--

LOCK TABLES `recurso` WRITE;
/*!40000 ALTER TABLE `recurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `recurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefono` (
  `idLocal` int(3) NOT NULL,
  `numero` varchar(15) NOT NULL,
  KEY `fk_local_idx` (`idLocal`),
  CONSTRAINT `fk_local` FOREIGN KEY (`idLocal`) REFERENCES `local` (`idLocal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mercados'
--

--
-- Dumping routines for database 'mercados'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-18 19:58:36
