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
  `rutaAbsoluta` varchar(150) NOT NULL,
  `peso` varchar(12) DEFAULT NULL,
  `fechaCreacion` varchar(10) NOT NULL,
  KEY `fk_idmenrcado_idx` (`idMercado`),
  CONSTRAINT `fk_idmenrcado` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen`
--

LOCK TABLES `imagen` WRITE;
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
INSERT INTO `imagen` VALUES (1,'socrates','assets/img/picture.png','0','27/09/2018'),(2,'empa','assets/img/picture.png','0','27/09/2018'),(3,'enfri','assets/img/picture.png','0','27/09/2018'),(4,'entom','assets/img/picture.png','0','27/09/2018'),(5,NULL,'assets/img/picture.png','0','29/09/2018'),(6,NULL,'assets/img/picture.png','0','29/09/2018'),(7,NULL,'assets/img/picture.png','0','29/09/2018'),(8,NULL,'assets/img/picture.png','0','29/09/2018'),(9,'','assets/img/picture.png','0','29/09/2018'),(10,'empa','assets/img/picture.png','0','29/09/2018'),(11,NULL,'assets/img/picture.png','0','29/09/2018'),(12,NULL,'assets/img/picture.png','0','29/09/2018'),(13,NULL,'assets/img/picture.png','0','29/09/2018'),(14,NULL,'assets/img/picture.png','0','29/09/2018');
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
  `tags` varchar(100) NOT NULL,
  PRIMARY KEY (`idLocal`),
  KEY `fk_mercado_idx` (`idMercado`),
  CONSTRAINT `fk_mercado` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (48,1,'Nevería Malena ',1,'Una tradición que perdurará ','assets/recursos/img/Malena.jpg','La señora Malena hija numero 5 de los señores Ángel Armengol y Anacleta Hernández, quienes le enseñaron el oficio y muy pronto se convirtió en una de las mas prestigiadas y famosas por el sazón y sabor que le daba a sus nieves. ','nieve,tres marias, banana split, luna nueva, orgullo oaxaqueño '),(49,1,'El LIRIO Neveria',1,'Nieve Tipo Artesanal ','assets/recursos/img/EL_LIRIO.jpg','De la mano de mi madre aprendí a ver la vida a caminar y  verla trabajar incansablemente. De la mano de mi abuela aprendí el oficio de hacer la nieve día a día que en cada parte de los sabores va un pedacito de corazón... ','lirio de oaxaca, beso mixteco, beso celestial,emperador, chocoroll'),(50,1,'LA GLORIETA, Nieves Pepe',1,'Convertimos la fruta en tradición. ','assets/recursos/img/La_glorieta_nieves_pepe2.jpg','su origen se remonta a 1932, sus fundadores fueron: La Sra. Anacleta Hernandez y  su esposo el Sr. Jose Velasco. En aquel entones, vendían nieves de manera ambulante en el zócalo, frente al reloj de la catedral. Hoy ofrecen mas de 50 sabores.','fresas con crema,platano con crema,banana split, tres marias,crema de uva'),(51,1,'ALAMEDA NEVERÍA ',1,'El mejor sabor, Historia, Servicio y Calidad. ','assets/recursos/img/Alameda.jpg','Alameda Neveria desde 1930.\r\nEl mejor sabor, Historia, Servicio y Calidad. ','mango,tamarindo,guanabana,nanche,limon'),(52,1,'LA OAXAQUEÑA NEVERIA',1,'Neveria La Oaxaqueña ','assets/recursos/img/La_oaxaqueña.jpg','Fue fundada por Doña Hermelinda en 1950. Actualmente Doña Hermelinda sigue atendiendo La Oaxaqueña, orgullosa de su tradición familiar de cuatro generaciones, que siempre ha procurado hacer nieves de alta calidad y crear nuevos sabores. ','nieves de agua, nieves de leche, flotantes, chamoyadas, especialidades '),(53,1,'NEVERÍA  EL NIAGARA',1,'Gracias por su preferencia.','assets/recursos/img/El_NIAGARA2.jpg','Fundada en 1927 por Don Jose Gonzalez Giron y Doña Sortera Vasquez. Heredaron esta tradición a sus hijas, conservando las recetas originales preparadas en casa artesanalmente y con productos totalmente naturales. ','queso,mezcal,elote,arandano,chocolate'),(54,1,'NEVERÍA KENIA ',1,'Nieves artesanales con fruta, sabores con tradición desde 1810.','assets/recursos/img/Kenia2.jpg','Neveria KENIA.\r\nNieves artesanales con fruta, sabores con tradición desde 1810.','banana split, napolitano, gansito,maracuya, chapulin'),(55,1,'NEVERÍA CHABELITA ',1,'con sabores tradicionales. ','assets/recursos/img/Chabelita.jpg','Caseta #6 Jardin Socrates.','chicle,guanabana, limon,tuna,beso de angel'),(56,8,'Comedor \"Lopez\"',1,'\"El mejor sabor\"','assets/recursos/img/A.jpg','Esta es una histria \" con comillas\"','Nieve, Helado, Freza'),(57,8,'Local de Prueba \"Con Comilas\"',2,'Es un local con eslogan genial','assets/recursos/img/original/Alameda.jpg','La historia por el momento es irrelevante ','Nieve, Helado, Freza'),(58,8,'Nombre con comillas',2,'xxxxxxxxxxxxxxxxxxxxxxxxxxxx  ddddddd cccccccccccc','assets/recursos/img/original/Alameda1.jpg','esta es su sfregrt trgrtrtbrtb vrr ','Nieve, Helado, Freza'),(59,3,'Otra prueba',1,'algo','assets/recursos/img/original/Alameda2.jpg','Algo','Nieve, Helado, Freza'),(60,8,'adria',2,'algo','assets/recursos/img/original/Alameda3.jpg','algo','Nieve, Helado, Freza'),(61,3,'zzzzzzzzzzzzzzz',1,'Adrisn','assets/recursos/img/original/Alameda.jpg','aaaaaaaaaaaaaaa','Nieve, Helado, Freza');
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
  `descripcion` text,
  `historia` text,
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
INSERT INTO `mercado` VALUES (1,'Jardin Socrates','Av. de la Independencia Centro, CP 68000, Oaxaca de Juarez','','C','Subiendo las escaleras de la calle Independencia, se ve la plazuela del Jardín Sócrates, lugar que conforma el conjunto arquitectónico de la Basílica de la Soledad, la Plaza de la Danza y el Palacio capitalino, donde desde el año 1980 se ofrece a sus visitantes ricas nieves preparadas con frutas de la temporada, mezcal y otros sabores.','La Plaza de la Danza fue construida en 1959 para la educación estética y para esparcimiento del pueblo, por el Lic. Eduardo Vasconcelos. En esta plaza se celebran eventos culturales, y ha sido escenario de presentaciones de artistas, orquestas internacionales y eventos políticos. La plaza está construida totalmente con piedra de cantera, aprovechándose la pendiente natural del terreno para hacer las gradas.Las plazas escalonadas forman tres ámbitos distintos: el atrio de la Soledad, la Plaza de la Danza y el Jardín Sócrates. Este establecimiento se ubica inmediatamente al sudeste de la Plaza de la Danza, anteriormente fue conocida como Plazuela de la Soledad. La antigua plazuela de la Soledad fue convertida en jardín público en 1881, con el nombre de Jardín Sócrates, la fuente labrada en cantera que se encuentra actualmente, ha conservado su mismo sitio.','17.063158','-96.729247','8:00 -  20:00'),(2,'Paz Migueles','Proletariado Mexicano, Volcanes, 68020 Oaxaca, Oax.','','N','Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”.','Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”, que luego de una rehabilitación, está más que fresco y renovado para recibir a todos sus clientes, que por su ubicación privilegiada y su cercanía con muchos fraccionamientos y colonias, han logrado que sea el sitio perfecto para desayunar, comer, o hacer la compra de los productos de la semana para el hogar.','17.088151','-96.711087','6:00 - 18:00'),(3,'Hidalgo','Palmeras s/n, Reforma, Oaxaca, Oax.','','N','El famoso mercadito de la colonia reforma donde puedes encontrar desde  la más exótica fruta hasta la más  rica carne.','Esta es su historia','17.076676','-96.715813','7:00 - 20:00'),(4,'La Cascada','Río Pedregal 105, La Cascada, 68040 Oaxaca, Oax.','','N','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX','Esta es su historia','17.077017','-96.724504','7:00 - 18:00'),(5,'Candiani','Universidad, Agencia de Policia de Candiani, 68130 Oaxaca, Oax.','','S','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXX','Esta es su historia','17.045500','-96.717200','7:00 - 18:00'),(6,'Venustiano Carranza','Miguel Alemán Valdez, 68120 Oaxaca, Oax.','','S','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX X XXXXXXXXXXXXXXXXXXXXXX','Esta es su historia','17.049069','-96.726230','7:00 - 21:00'),(7,'Benito Juárez','OAX_RE_BENITO JUAREZ, Centro, 68000 Oaxaca, Oax.','9515162352','CH','Animado mercado techado con vendedores que ofrecen productos, comidas preparadas, artesanías y telas.','El mercado municipal de estilo francés, que inicialmente llevó el nombre del General “Porfirio Díaz” y en 1911 cambió por el de “Benito Juárez” encierra grandes tradiciones; es y ha sido parte de la historia y la cultura de Oaxaca.','17.058954','-96.726704','7:00 - 21:00'),(8,'20 de Noviembre','20 de Noviembre 512, Centro, 68000 Oaxaca, Oax.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX','Una parada obligada para quienes buscan lugares tradicionales para comer en Oaxaca es sin duda alguna el pasillo de carnes asadas del Mercado 20 de noviembre en la ciudad de Oaxaca. Los mercados de Oaxaca son coloridos lugares llenos de movimiento y tradiciones vivas y han sido el punto de reunión tradicional desde mucho antes de la colonización. Casi todo el mercado 20 de noviembre está consagrado a la venta de comida, como materia prima o ya preparada. El pasillo oriente es un corredor donde se venden tasajo, cecina y chorizo de manera tradicional. Ahí mismo echarán a las brasas la carne y le venderán todo lo que necesita para acompañar: guacamole, cebollas, cilantro, aguacates, limones, chiles, jitomate, tortillas, cervezas y refrescos. Una experiencia deliciosa.','17.057874','-96.727260','7:00 - 21:00'),(9,'Artesanías','Gral. Ignacio Zaragoza, OAX_RE_BENITO JUAREZ, Centro, 68000 Oaxaca, Oax.','','CH','El mercado de Artesanías en Oaxaca sin sorpresas es dedicado a la venta de productos artesanales. Todas las artesanías de Oaxaca están encontradas aquí.','Desde hace 38 años, en el centro de la ciudad, el Mercado de las Artesanías de Oaxaca se ha convertido en un referente de propios y visitantes nacionales e internacionales para adquirir y admirar las creaciones de las manos de artesanos oaxaqueños de las regiones del estado: las artesanías.','17.057078','-96.728453','12:00 - 19:00'),(10,'IV centenario','Alfonso Mercado, IV Centenario, Centro, 68000 Durango, Oax.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXX','Punto limítrofe en el Oaxaca colonial entre la ciudad y el antiguo barrio del Marquesado, asentado alrededor del templo del mismo nombre. Le decían “de la rayita” o “mercado de la raya” precisamente porque ahí estaba la raya imaginaria que ponía límite a la ciudad.','17.063768','-96.731467','7:00 - 18:00'),(11,'Sánchez Pascuas','Calle Porfirio Díaz 719, RUTA INDEPENDENCIA, Centro, 68000 Oaxaca, Oax.','','CH','Este pequeño mercado también es llamado Mercado del Carmen, por su proximidad al Templo del mismo Nombre. ','Entre las calles de Joaquín Amaro y Porfirio Díaz, en el centro de la Ciudad, está ubicado el Mercado Sánchez Pascuas o Del Carmen Alto, se le llama así por su proximidad al Templo de la Virgen del Carmen Alto, incluso existiendo en su interior una pequeña capilla de adoración. Se trata de un mercado típico de Oaxaca muy atractivo para quienes gustan de probar la tradicional comida oaxaqueña y saborear las famosas empanadas de flor de calabaza y los tamales de chepil o de mole acompañados con atole blanco.','17.068669','-96.725505','6:00 - 18:00'),(12,'La merced','Mercado de la Merced, y del, Privada Morelos, San Pedro de los Baños, Nicolás, Méx.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Entre los lugares más comunes para visitar en el día a día de un ciudadano oaxaqueño es el Mercado de La Merced que existe desde 1973. Hoy en día se mantiene como uno de los lugares comerciales más tradicionales de la ciudad, ofreciendo una amplia variedad de productos locales como quesos, tamales, panes, dulces regionales, frutas, tortillas y tostadas hechas a mano, carnes, etc.','17.0776480','-96.7381142','6:00 - 18:00'),(13,'Las flores','Cuarta Orquídeas 210, Las Flores Sur, Santa Lucía del Camino, Oax.','','O','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX','El mercado Las Flores, dependiente del municipio de Oaxaca de Juárez, inició operaciones en 1974; sin embargo, en 1985 se construyó el inmueble que hoy alberga a casi 100 locatarios de este mercado.','17.069764','-96.702616','6:00 - 18:00'),(14,' Zonal Santa Rosa','Santa Carolina 816, Santa Rosa, 68274 Oaxaca, Oax.','9581065616','P','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','“Buenos días, pásele, qué le vamos a dar, aquí está lo bueno, lleve pan calientito, tamales,” es lo primero que escuchamos al visitar uno de los sitios más visitados los días domingos al poniente de la ciudad: el mercado zonal de Santa Rosa.','17.093824','-96.747707','6:00 - 18:00'),(15,'Mercado de Abasto \"Margarita Maza  de Juárez\"','Sin direccion','9581065616','C','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Esta es su historia','12.2','23.3','Horario conocido'),(16,'La Noria','Sin direccion','9581065616','C','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Esta es su historia','12.2','23.3','Horario conocido');
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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recurso`
--

LOCK TABLES `recurso` WRITE;
/*!40000 ALTER TABLE `recurso` DISABLE KEYS */;
INSERT INTO `recurso` VALUES (3,61,49,'zzzzzzzzzzzzzzz','image','assets/recursos/img/mediana/Alameda.jpg','assets/recursos/img/original/Alameda.jpg','.jpg','3899.24','5184x3456','2018-10-13');
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

-- Dump completed on 2018-10-13 10:58:52
