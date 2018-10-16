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
INSERT INTO `imagen` VALUES (1,'socrates','assets/img/picture.png','0','27/09/2018'),(2,'empa','assets/img/picture.png','0','27/09/2018'),(3,'enfri','assets/img/picture.png','0','27/09/2018'),(4,'entom','assets/img/picture.png','0','27/09/2018'),(5,NULL,'assets/img/picture.png','0','29/09/2018'),(6,NULL,'assets/img/picture.png','0','29/09/2018'),(7,'_MG_5508','assets/recursos/img/original/_MG_5508.jpg','0','29/09/2018'),(8,'Inesita','assets/recursos/img/mediana/Inesita.jpg','0','29/09/2018'),(9,'','assets/img/picture.png','0','29/09/2018'),(10,'Frutas_la_providencia','assets/recursos/img/mediana/44_44B_45_45B_Comedor_Leo_dueña_Gualalupe_Ríos_Méndez_001.JPG','0','29/09/2018'),(11,NULL,'assets/img/picture.png','0','29/09/2018'),(12,NULL,'assets/img/picture.png','0','29/09/2018'),(13,NULL,'assets/img/picture.png','0','29/09/2018'),(14,NULL,'assets/img/picture.png','0','29/09/2018');
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
INSERT INTO `local` VALUES (1,8,'Comedor \"La Malinche\"',1,'La Malinche','assets/recursos/img/original/22_Comedor_La_Malinche_dueña_trinidad_hernández_002.JPG','En el año de 1894 el negocio le pertenecía a Sebastiana Hernández, luego pasó de generación en generación hasta Trinidad Hernández, nieta de la fundadora.','Tlayudas,Tamales,Chiles rellenos,Mole negro,Coloradito'),(2,8,'Típico Oaxaqueño',1,'Exquisito sazón oaxaqueño','assets/recursos/img/original/_MG_1201.JPG','El Típico Oaxaqueño se ha distinguido por ofrecer alimentos de calidad, cuidando el sazón de varias generaciones, preservando las costumbres y tradiciones de Oaxaca.','Mole,Coloradito,Tlayudas,Chocolate,Chile relleno'),(3,8,'Fonda \"Chofi\"',1,'Comida tradicional oaxaqueña','assets/recursos/img/original/_MG_1129.JPG','Es un negocio tradicional de tres generaciones(abuela, madre e hija), desde 1946 y se caracteriza por conservar las recetas de la comida tradicional de las 8 Regiones de Oaxaca.\r\n','Enchiladas de mole colorado,Estofado de pollo,Salsa de chicharrón,Amarillo Espinaso,,Chichilo'),(4,8,'Chocolate \"Conchita\"',1,'100% Oaxaqueño un producto artesanal','assets/recursos/img/original/260_Chocolate_Conchita_dueño_Rosendo_Rodriguez_Soriano_001.JPG','Empresa familiar fundada en el año de 1968, ofrece chocolate 100%  natural elaborado artesanalmente preservando así, el característico sabor y aroma oaxaqueño. Además de los productos tradicionales también ofrecemos productos novedosos para satisfacer hasta el paladar más exigente. \r\n','Chocolate,Mole,Café,Cacao tostado,Cacao crudo'),(5,8,'Mole y chocolate \"Oaxaca\"',1,'El único mole que no te da agruras','assets/recursos/img/original/67,78_Mole_y_chocolate_Oaxaca_dueña_Guadalupe_Pérez_Rojas_001.JPG','Somos una empresa familiar 100% oaxaqueña, que se dedica a la producción de mole, chocolate en distintas variedades. Utilizamos ingredientes totalmente naturales. Tenemos aproximadamente 10 años trabajando para cada día ofrecer un mejor producto.\r\n','Mole en pasta,chocolate semiamargo,Mole en polvo,Mole amarillo'),(6,8,'María Alejandra (Comida típica oaxaqueña)',1,'¡Sin comentarios, servimos bien!','assets/recursos/img/original/98_-_María_Alejandra_(Comida_típica_oaxaqueña)_dueña_Matilde_Cuevas_Rosas_002.JPG','Fue fundado en el año de 1965 y desde entonces es atendido por su propietaria, con esmero y dedicación, lo cual ha sido el éxito y el prestigio con el que cuenta hasta el día de hoy. Se empezó con un negocio pequeño y el día de hoy es uno de los mas amplios en el interior del mercado.\r\n','tamal,Tlayuda mixta,Platillo típico oaxaqueño ,Moles típicos de oaxaca,Chocolate de leche, agua, champurrado'),(7,8,'Panadería \"La soledad\"',2,'La mejor calidad de pan oaxaqueño','assets/recursos/img/original/184,_206,_207_Panadería_La_soledad_Dueña_Evangelina_Santiago_Cortes_001.JPG','Somos una panadería con 45  años de experiencia con la mejor calidad en pan de la región 100% artesanal\r\n','Pan de Yema,Chocolate,Mole,Pan de cazuela,Pan marquezote'),(8,8,'Comedor \"Leo\"',1,'El buen sabor oaxaqueño','assets/recursos/img/original/44_44B_45_45B_Comedor_Leo_dueña_Gualalupe_Ríos_Méndez_001.JPG','Negocio familiar fundado por Leonarda Pacheco, creadora de las recetas que hasta el momento le dan el sabor a nuestros deliciosos y tradicionales platillos preparados con el más puro amor, brindándole el mejor trato a nuestros clientes. Los años de tradición y dedicación en el negocio nos respaldan   \r\n','Verde de Espinazo,Mole negro,Estofado'),(9,8,'Comedor \"Calenda\"',1,'Una fiesta de sabor en tu paladar ','assets/recursos/img/original/31,32,33_Comedor_Calenda_dueña_María_Isabel_Hernández_Cuevas_001.JPG','Comedor \"Calenda\" es un negocio familiar con el objetivo de preservar  la tradición culinaria de nuestros antecesores y de la región.\r\n','Enchiladas,Platillo mixto,Enchiladas del valle,Platillo Oaxaqueño,Tlayuda especial'),(10,8,'Carnes asadas \"Inesita\"',5,'Para ese momento especial','assets/recursos/img/original/Inesita.jpg','Negocio fundado en 1948 para satisfacer el paladar de los comensales ofreciendo servicio a domicilio.\r\n','Tasajo,Cecina Enchilada,Chorizo,Tripa,Costilla enchilada'),(11,8,'Comedor \"Florita\"',1,'Saboree la auténtica comida Oaxaqueña','assets/recursos/img/original/112_113_113B_154_154B_175_Comedor_Florita_dueña_Juana_Hernández_Cruz_001.JPG','Negocio fundado  por la señora Flora Cruz Guzmán, con una antigüedad de más de 50 años, que han abarcado tres generaciones, las cuales siguen conservando la tradición y el sazón en cada uno de los platillos.\r\n','Empanadas de amarillo,Memelas,Enchiladas de coloradito,Atole de panela,Chichilo '),(12,8,'Comedor \"Celita\"',1,'Tradición y sabor en cada comida.','assets/recursos/img/original/34_-_Comedor_Celita_dueño_Yolanda_Domínguez_Acevedo_001.JPG','El comedor Celita cuenta con una historia que conlleva a tres generaciones, las cuales han cuidado el buen servicio y limpieza, así como la dedicación en la elaboración de cada uno de sus platillos.\r\n','Mole negro,Tlayudas,Amarillo,Estofado,Coloradito'),(13,8,'Caldo de menudo \"Juanita\"',3,'No somos los únicos, pero si los más sabrosos','assets/recursos/img/original/_MG_1163.JPG','El puesto caldos de menudo \"Juanita\" es un negocio familiar, que representa a tres generaciones, cuenta con más de 60 años satisfaciendo el paladar de sus clientes y visitantes tanto nacionales como extranjeros. Con el paso del tiempo se ha podido mantener e innovar la atención y la comodidad para sus visitantes.\r\n','Caldo de pancita,Caldo de pata,Caldo de libro,Caldo de lengua,Caldo de cachete'),(14,8,'Comedor \"Lidia\"',1,'  ','assets/recursos/img/original/75_Comedor_Lidia_dueño_Raymundo_Javier_Vargas_001.JPG','Es un negocio familiar con 74 años de historia, que inicialmente se instaló en el mercado \"Benito Juárez\" en el año de 1944.\r\n','Mole negro,Coloradito,Amarillo,Entomatadas,Enfrijoladas'),(15,8,'Comedor típico \"La abuelita\"',1,'Orgullosas tradición que perdura','assets/recursos/img/original/1,_2,_101_Comedor_típico_La_abuelita_dueña_Magdalena_Virgen_Victoria_Rodriguez.JPG','Hace aproximadamente 65 años la señora Apolonia López Aquino junto con su esposo y su hijo Gonzalo Daniel Victorio López fundaron el negocio del comedor típico La Abuelita, que actualmente sus propietarios son los hermanos Victorio Rodríguez, los cuales continúan con la tradición de la gastronomía oaxaqueña.\r\n','Tlayudas,Mole negro,Coloradito,Caldo \"la abuelita\",Platillo típico oaxaqueño'),(16,8,'Menudos \"Conchita\"',3,'No somos los únicos, pero si los mejores','assets/recursos/img/original/_MG_1187.JPG','Es un negocio completamente familiar que cuenta con 40 años de tradición y la tercera generación.\r\n',' '),(17,8,'Caldos de menudo \"Las Güeras\"',3,'Imitados pero jamás igualados.','assets/recursos/img/original/_MG_1168.JPG','La historia data de 1955 cuando los padres de Jorge iniciaron con la venta de estos platillos, continuando con este legado su hermana y que el día de hoy él, su esposa y sus hijos continúan con el negocio familiar cumpliendo así con la tercera generación.\r\n','Caldo de pancita,Caldo de corazón,Caldo de cachete,Refresco,Caldo de cabeza'),(18,8,'Menudos \"Angelita\"',3,'Los ricos caldos de menudo de \"Angelita\"','assets/recursos/img/original/_MG_1175.JPG','Cuatro Generaciones nos respaldan. Higiene y Precios 100% Producto Oaxaqueño\r\n',' '),(19,8,'Caldos de menudo \"Lolita\"',3,'Por que la panza es primero','assets/recursos/img/original/180_Caldos_de_menudo_Lolita_dueña_Caldos_de_menudo_Lolita_002.JPG','Con 70 años de tradición somos la cuarta generación con el mismo sabor y la calidad de siempre.\r\n','Caldo Menudo,Caldo Pata,Caldo Libro ,Caldo Corazón,Caldo Cuajo'),(20,8,'Los Agachados',1,'Para todo mal, mezcal. Para todo bien también y para la cruda \"Los Agachados\"','assets/recursos/img/original/_MG_1162.JPG',' ','Caldo Menudo,Caldo Pata,Caldo Libro ,Caldo Corazón,Caldo Cuajo'),(21,8,'Los Jarritos',1,' Los Jarritos','assets/recursos/img/original/40_Los_Jarritos,_dueña_Sandra_Robles_de_la_Cruz_001.jpg','Negocio con 15 años de tradición y experiencia \r\n','Tlayuda,Mole,Caldo de Res ,Coloradiro,Tamales'),(22,8,'Comedor \"La Gloria\"',1,'Comida','assets/recursos/img/original/55_Comerdor_La_Gloria_dueña_Agustina_Maria_Magdalena_Zoto_001.jpg',' ','Tlayuda,Mole negro,Huevo a la Oaxaqueña,Enchiladas Verdes,Coloradito'),(23,8,'Comedor \"Alex\"',1,'Comedor Alex','assets/recursos/img/original/49_Comedor_Alex_dueño_Felipe_de_Jesus_Cruz_001.jpg','Tradición Familiar \r\n','Chocolate,Enfrijolada,Enchilada,Tlayuda,Caldo de Pollo'),(24,1,'Nevería Malena',1,'Una tradición que perdurará','assets/recursos/img/original/Malena.jpg','La señora Malena hija numero 5 de los señores Ángel Armengol y Anacleta Hernández, quienes le enseñaron el oficio y muy pronto se convirtió en una de las mas prestigiadas y famosas por el sazón y sabor que le daba a sus nieves.','nieve,tres marias, banana split, luna nueva, orgullo oaxaqueño'),(25,1,'El LIRIO Nevería',1,'Nieve Tipo Artesanal','assets/recursos/img/original/EL_LIRIO.jpg','De la mano de mi madre aprendí a ver la vida a caminar y  verla trabajar incansablemente. De la mano de mi abuela aprendí el oficio de hacer la nieve día a día que en cada parte de los sabores va un pedacito de corazón...','lirio de oaxaca,beso mixteco,beso celestial,emperador,chocoroll'),(26,1,'La Glorieta, Nieves Pepe',1,'Convertimos la fruta en tradición.','assets/recursos/img/original/La_glorieta_nieves_pepe.jpg','su origen se remonta a 1932, sus fundadores fueron: La Sra. Anacleta Hernández y  su esposo el Sr. José Velasco. En aquel entones, vendían nieves de manera ambulante en el zócalo, frente al reloj de la catedral. Hoy ofrecen mas de 50 sabores.','fresas con crema,platano con crema,banana split, tres marias,crema de uva'),(27,1,'Alameda Nevería',1,'El mejor sabor, Historia, Servicio y Calidad.','assets/recursos/img/original/Alameda.jpg','Alameda Nevería desde 1930. El mejor sabor, Historia, Servicio y Calidad.','mango,tamarindo,guanabana,nanche,limon'),(28,1,'La Oaxaqueña Nevería',1,'Nevería La Oaxaqueña','assets/recursos/img/original/La_oaxaqueña.jpg','Fundada por Doña Hermelinda en 1950. Actualmente Doña Hermelinda sigue atendiendo La Oaxaqueña, orgullosa de su tradición familiar de cuatro generaciones, que siempre ha procurado hacer nieves de alta calidad y crear nuevos sabores.','nieves de agua, nieves de leche, flotantes, chamoyadas, especialidades'),(29,1,'Nevería  El Niagara',1,'Gracias por su preferencia.','assets/recursos/img/original/El_NIAGARA.jpg','Fundada en 1927 por Don José González Giron y Doña Sortera Vasquez. Heredaron esta tradición a sus hijas, conservando las recetas originales preparadas en casa artesanalmente y con productos totalmente naturales.','queso,mezcal,elote,arandano,chocolate'),(30,1,'Nevería Kenia',1,'Nieves artesanales con fruta, sabores con tradición desde 1980.','assets/recursos/img/original/Kenia.jpg','Nevería Kenia. Nieves artesanales con fruta, sabores con tradición desde 1980.','banana split,napolitano, gansito,maracuya,chapulin'),(31,1,'Nevería Chabelita',1,'Con sabores tradicionales.','assets/recursos/img/original/Chabelita.jpg','Caseta #6 Jardín Sócrates.','chicle,guanabana,limon,tuna,beso de angel');
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
INSERT INTO `mercado` VALUES (1,'Jardin Socrates','Av. de la Independencia Centro, CP 68000, Oaxaca de Juarez','','C','Subiendo las escaleras de la calle Independencia, se ve la plazuela del Jardín Sócrates, lugar que conforma el conjunto arquitectónico de la Basílica de la Soledad, la Plaza de la Danza y el Palacio capitalino, donde desde el año 1980 se ofrece a sus visitantes ricas nieves preparadas con frutas de la temporada, mezcal y otros sabores.','Subiendo las escaleras de la calle Independencia, se ve la plazuela del Jardín Sócrates, lugar que conforma el conjunto arquitectónico de la Basílica de la Soledad, la Plaza de la Danza y el Palacio capitalino, donde desde el año 1980 se ofrece a sus visitantes ricas nieves preparadas con frutas de la temporada, mezcal y otros sabores.','17.063158','-96.729247','8:00 -  20:00'),(2,'Paz Migueles','Proletariado Mexicano, Volcanes, 68020 Oaxaca, Oax.','','N','Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”.','Al norte de la ciudad, uno de los mercados queridos es el “Paz Migueles”, que luego de una rehabilitación, está más que fresco y renovado para recibir a todos sus clientes que, por su ubicación privilegiada y su cercanía con muchos fraccionamientos y colonias, han logrado que sea el sitio perfecto para desayunar, comer, o hacer la compra de los productos de la semana para el hogar.','17.088151','-96.711087','6:00 - 18:00'),(3,'Hidalgo','Palmeras s/n, Reforma, Oaxaca, Oax.','','N','El famoso mercadito de la colonia reforma donde puedes encontrar desde  la más exótica fruta hasta la más  rica carne.','Esta es su historia','17.076676','-96.715813','7:00 - 20:00'),(4,'La Cascada','Río Pedregal 105, La Cascada, 68040 Oaxaca, Oax.','','N','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX','Esta es su historia','17.077017','-96.724504','7:00 - 18:00'),(5,'Candiani','Universidad, Agencia de Policia de Candiani, 68130 Oaxaca, Oax.','','S','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXX','Esta es su historia','17.045500','-96.717200','7:00 - 18:00'),(6,'Venustiano Carranza','Miguel Alemán Valdez, 68120 Oaxaca, Oax.','','S','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX X XXXXXXXXXXXXXXXXXXXXXX','Esta es su historia','17.049069','-96.726230','7:00 - 21:00'),(7,'Benito Juárez','OAX_RE_BENITO JUAREZ, Centro, 68000 Oaxaca, Oax.','9515162352','CH','Animado mercado techado con vendedores que ofrecen productos, comidas preparadas, artesanías y telas.','El mercado municipal de estilo francés, que inicialmente llevó el nombre del General “Porfirio Díaz” y en 1911 cambió por el de “Benito Juárez” encierra grandes tradiciones; es y ha sido parte de la historia y la cultura de Oaxaca.','17.058954','-96.726704','7:00 - 21:00'),(8,'20 de Noviembre','20 de Noviembre 512, Centro, 68000 Oaxaca, Oax.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXX','Una parada obligada para quienes buscan lugares tradicionales para comer en Oaxaca es sin duda alguna el pasillo de carnes asadas del Mercado 20 de noviembre en la ciudad de Oaxaca.','17.057874','-96.727260','7:00 - 21:00'),(9,'Artesanías','Gral. Ignacio Zaragoza, OAX_RE_BENITO JUAREZ, Centro, 68000 Oaxaca, Oax.','','CH','El mercado de Artesanías en Oaxaca sin sorpresas es dedicado a la venta de productos artesanales. Todas las artesanías de Oaxaca están encontradas aquí.','Desde hace 38 años, en el centro de la ciudad, el Mercado de las Artesanías de Oaxaca se ha convertido en un referente de propios y visitantes nacionales e internacionales para adquirir y admirar las creaciones de las manos de artesanos oaxaqueños de las regiones del estado: las artesanías.','17.057078','-96.728453','12:00 - 19:00'),(10,'IV centenario','Alfonso Mercado, IV Centenario, Centro, 68000 Durango, Oax.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXX','El mercado IV Centenario es punto limítrofe en el Oaxaca colonial entre la ciudad y el antiguo barrio del Marquesado, asentado alrededor del templo del mismo nombre. Le decían “de la rayita” o “mercado de la raya” precisamente porque ahí estaba la raya imaginaria que ponía límite a la ciudad.','17.063768','-96.731467','7:00 - 18:00'),(11,'Sánchez Pascuas','Calle Porfirio Díaz 719, RUTA INDEPENDENCIA, Centro, 68000 Oaxaca, Oax.','','CH','Este pequeño mercado también es llamado Mercado del Carmen, por su proximidad al Templo del mismo Nombre. ','Entre las calles de Joaquín Amaro y Porfirio Díaz, en el centro de la Ciudad, está ubicado el Mercado Sánchez Pascuas o Del Carmen Alto, se le llama así por su proximidad al Templo de la Virgen del Carmen Alto, lo más curioso es que el propio mercado ha habilitado en su interior una capillita para el culto. Se trata de un mercado típico de Oaxaca muy atractivo para quienes gustan de probar la tradicional comida oaxaqueña y saborear las famosas empanadas de flor de calabaza y los tamales de chepil o de mole acompañados con atole blanco.','17.068669','-96.725505','6:00 - 18:00'),(12,'La merced','Mercado de la Merced, y del, Privada Morelos, San Pedro de los Baños, Nicolás, Méx.','','CH','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Entre los lugares más comunes para visitar en el día a día de un ciudadano oaxaqueño es el Mercado de La Merced que existe desde 1973. Hoy en día se mantiene como uno de los lugares comerciales más tradicionales de la ciudad, ofreciendo una amplia variedad de productos locales como quesos, tamales, panes, dulces regionales, frutas, tortillas y tostadas hechas a mano, carnes, etc.','17.0776480','-96.7381142','6:00 - 18:00'),(13,'Las flores','Cuarta Orquídeas 210, Las Flores Sur, Santa Lucía del Camino, Oax.','','O','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXX','El mercado Las Flores, dependiente del municipio de Oaxaca de Juárez, inició operaciones en 1974; sin embargo, en 1985 se construyó el inmueble que hoy alberga a casi 100 locatarios de este mercado.','17.069764','-96.702616','6:00 - 18:00'),(14,' Zonal Santa Rosa','Santa Carolina 816, Santa Rosa, 68274 Oaxaca, Oax.','9581065616','P','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','“Buenos días, pásele, qué le vamos a dar, aquí está lo bueno, lleve pan calientito, tamales,” es lo primero que se escucha al visitar uno de los sitios más visitados los días domingos al poniente de la ciudad: el mercado zonal de Santa Rosa.','17.093824','-96.747707','6:00 - 18:00'),(15,'Mercado de Abasto \"Margarita Maza  de Juárez\"','Sin direccion','9581065616','C','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Es el más grande, llamado también Mercado Margarita Maza de Juárez, recibiendo productos de todo el estado e incluso de otros puntos del país. Se deduce, pues, que tiene de todo: desde luego, lo relacionado con la alimentación, como verduras, maíz, chiles, chapulines, cacao, café, cacahuetes, pescado, etc.; pero también hamacas, carbón, copal, madera y hasta hierbas curativas.','12.2','23.3','Horario conocido'),(16,'La Noria','Sin direccion','9581065616','C','XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXX','Esta es su historia','12.2','23.3','Horario conocido');
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
INSERT INTO `recurso` VALUES (8,1,1,'Comedor \"La Malinche\"','image','assets/recursos/img/mediana/22_Comedor_La_Malinche_dueña_trinidad_hernández_002.JPG','assets/recursos/img/original/22_Comedor_La_Malinche_dueña_trinidad_hernández_002.JPG','.JPG','7143.06','5184x3456','2018-10-14'),(8,2,2,'Típico Oaxaqueño','image','assets/recursos/img/mediana/_MG_1201.JPG','assets/recursos/img/original/_MG_1201.JPG','.JPG','7579.91','5184x3456','2018-10-14'),(8,3,3,'Fonda \"Chofi\"','image','assets/recursos/img/mediana/_MG_1129.JPG','assets/recursos/img/original/_MG_1129.JPG','.JPG','8155.06','5184x3456','2018-10-14'),(8,4,4,'Chocolate \"Conchita\"','image','assets/recursos/img/mediana/260_Chocolate_Conchita_dueño_Rosendo_Rodriguez_Soriano_001.JPG','assets/recursos/img/original/260_Chocolate_Conchita_dueño_Rosendo_Rodriguez_Soriano_001.JPG','.JPG','8980.51','5184x3456','2018-10-14'),(8,5,5,'Mole y chocolate \"Oaxaca\"','image','assets/recursos/img/mediana/67,78_Mole_y_chocolate_Oaxaca_dueña_Guadalupe_Pérez_Rojas_001.JPG','assets/recursos/img/original/67,78_Mole_y_chocolate_Oaxaca_dueña_Guadalupe_Pérez_Rojas_001.JPG','.JPG','12663.59','5184x3456','2018-10-14'),(8,6,6,'María Alejandra (Comida típica oaxaqueña)','image','assets/recursos/img/mediana/98_-_María_Alejandra_(Comida_típica_oaxaqueña)_dueña_Matilde_Cuevas_Rosas_002.JPG','assets/recursos/img/original/98_-_María_Alejandra_(Comida_típica_oaxaqueña)_dueña_Matilde_Cuevas_Rosas_002.JPG','.JPG','7828.2','5184x3456','2018-10-14'),(8,7,7,'Panadería \"La soledad\"','image','assets/recursos/img/mediana/184,_206,_207_Panadería_La_soledad_Dueña_Evangelina_Santiago_Cortes_001.JPG','assets/recursos/img/original/184,_206,_207_Panadería_La_soledad_Dueña_Evangelina_Santiago_Cortes_001.JPG','.JPG','8859.41','5184x3456','2018-10-14'),(8,8,8,'Comedor \"Leo\"','image','assets/recursos/img/mediana/44_44B_45_45B_Comedor_Leo_dueña_Gualalupe_Ríos_Méndez_001.JPG','assets/recursos/img/original/44_44B_45_45B_Comedor_Leo_dueña_Gualalupe_Ríos_Méndez_001.JPG','.JPG','6165.71','5184x3456','2018-10-14'),(8,9,9,'Comedor \"Calenda\"','image','assets/recursos/img/mediana/31,32,33_Comedor_Calenda_dueña_María_Isabel_Hernández_Cuevas_001.JPG','assets/recursos/img/original/31,32,33_Comedor_Calenda_dueña_María_Isabel_Hernández_Cuevas_001.JPG','.JPG','6810.46','5184x2912','2018-10-14'),(8,10,10,'Carnes asadas \"Inesita\"','image','assets/recursos/img/mediana/Inesita.jpg','assets/recursos/img/original/Inesita.jpg','.jpg','11047.43','5184x3456','2018-10-14'),(8,11,11,'Comedor \"Florita\"','image','assets/recursos/img/mediana/112_113_113B_154_154B_175_Comedor_Florita_dueña_Juana_Hernández_Cruz_001.JPG','assets/recursos/img/original/112_113_113B_154_154B_175_Comedor_Florita_dueña_Juana_Hernández_Cruz_001.JPG','.JPG','7350.92','5184x3456','2018-10-14'),(8,12,12,'Comedor \"Celita\"','image','assets/recursos/img/mediana/34_-_Comedor_Celita_dueño_Yolanda_Domínguez_Acevedo_001.JPG','assets/recursos/img/original/34_-_Comedor_Celita_dueño_Yolanda_Domínguez_Acevedo_001.JPG','.JPG','7666.95','5184x3456','2018-10-14'),(8,13,13,'Caldo de menudo \"Juanita\"','image','assets/recursos/img/mediana/_MG_1163.JPG','assets/recursos/img/original/_MG_1163.JPG','.JPG','9032.16','5184x3456','2018-10-14'),(8,14,14,'Comedor \"Lidia\"','image','assets/recursos/img/mediana/75_Comedor_Lidia_dueño_Raymundo_Javier_Vargas_001.JPG','assets/recursos/img/original/75_Comedor_Lidia_dueño_Raymundo_Javier_Vargas_001.JPG','.JPG','6714.25','5184x3456','2018-10-14'),(8,15,15,'Comedor típico \"La abuelita\"','image','assets/recursos/img/mediana/1,_2,_101_Comedor_típico_La_abuelita_dueña_Magdalena_Virgen_Victoria_Rodriguez.JPG','assets/recursos/img/original/1,_2,_101_Comedor_típico_La_abuelita_dueña_Magdalena_Virgen_Victoria_Rodriguez.JPG','.JPG','7848.67','5184x3456','2018-10-14'),(8,16,16,'Menudos \"Conchita\"','image','assets/recursos/img/mediana/_MG_1187.JPG','assets/recursos/img/original/_MG_1187.JPG','.JPG','6457.72','5184x3456','2018-10-14'),(8,17,17,'Caldos de menudo \"Las Güeras\"','image','assets/recursos/img/mediana/_MG_1168.JPG','assets/recursos/img/original/_MG_1168.JPG','.JPG','8332.36','5184x3456','2018-10-14'),(8,18,18,'Menudos \"Angelita\"','image','assets/recursos/img/mediana/_MG_1175.JPG','assets/recursos/img/original/_MG_1175.JPG','.JPG','7301.2','5184x3456','2018-10-14'),(8,19,19,'Caldos de menudo \"Lolita\"','image','assets/recursos/img/mediana/180_Caldos_de_menudo_Lolita_dueña_Caldos_de_menudo_Lolita_002.JPG','assets/recursos/img/original/180_Caldos_de_menudo_Lolita_dueña_Caldos_de_menudo_Lolita_002.JPG','.JPG','6263.38','5184x3456','2018-10-14'),(8,20,20,'Los Agachados','image','assets/recursos/img/mediana/_MG_1162.JPG','assets/recursos/img/original/_MG_1162.JPG','.JPG','8536.23','5184x3456','2018-10-14'),(8,21,21,'Los Jarritos','image','assets/recursos/img/mediana/40_Los_Jarritos,_dueña_Sandra_Robles_de_la_Cruz_001.jpg','assets/recursos/img/original/40_Los_Jarritos,_dueña_Sandra_Robles_de_la_Cruz_001.jpg','.jpg','6090.59','4160x3120','2018-10-14'),(8,22,22,'Comedor \"La Gloria\"','image','assets/recursos/img/mediana/55_Comerdor_La_Gloria_dueña_Agustina_Maria_Magdalena_Zoto_001.jpg','assets/recursos/img/original/55_Comerdor_La_Gloria_dueña_Agustina_Maria_Magdalena_Zoto_001.jpg','.jpg','5645.14','4160x3120','2018-10-14'),(8,23,23,'Comedor \"Alex\"','image','assets/recursos/img/mediana/49_Comedor_Alex_dueño_Felipe_de_Jesus_Cruz_001.jpg','assets/recursos/img/original/49_Comedor_Alex_dueño_Felipe_de_Jesus_Cruz_001.jpg','.jpg','4049.24','4160x2080','2018-10-14'),(1,24,24,'Nevería Malena','image','assets/recursos/img/mediana/Malena.jpg','assets/recursos/img/original/Malena.jpg','.jpg','3685.88','5184x3456','2018-10-15'),(1,25,25,'El LIRIO Neveria','image','assets/recursos/img/mediana/EL_LIRIO.jpg','assets/recursos/img/original/EL_LIRIO.jpg','.jpg','3485.54','5184x3456','2018-10-15'),(1,26,26,'La Glorieta, Nieves Pepe','image','assets/recursos/img/mediana/La_glorieta_nieves_pepe.jpg','assets/recursos/img/original/La_glorieta_nieves_pepe.jpg','.jpg','2841.9','5184x3456','2018-10-15'),(1,27,27,'Alameda Nevería','image','assets/recursos/img/mediana/Alameda.jpg','assets/recursos/img/original/Alameda.jpg','.jpg','3899.24','5184x3456','2018-10-15'),(1,28,28,'La Oaxaqueña Nevería','image','assets/recursos/img/mediana/La_oaxaqueña.jpg','assets/recursos/img/original/La_oaxaqueña.jpg','.jpg','3609.16','5184x3456','2018-10-15'),(1,29,29,'Nevería  El Niagara','image','assets/recursos/img/mediana/El_NIAGARA.jpg','assets/recursos/img/original/El_NIAGARA.jpg','.jpg','3431.59','5184x3456','2018-10-15'),(1,30,30,'Nevería Kenia','image','assets/recursos/img/mediana/Kenia.jpg','assets/recursos/img/original/Kenia.jpg','.jpg','2917.17','5184x3456','2018-10-15'),(1,31,31,'Nevería Chabelita','image','assets/recursos/img/mediana/Chabelita.jpg','assets/recursos/img/original/Chabelita.jpg','.jpg','2772.46','5184x3456','2018-10-15');
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

-- Dump completed on 2018-10-16 16:07:25
