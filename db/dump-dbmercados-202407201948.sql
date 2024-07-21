-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: dbmercados
-- ------------------------------------------------------
-- Server version	5.7.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS dbmercados;

USE dbmercados;


--
-- Table structure for table `giro`
--

DROP TABLE IF EXISTS `giro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `giro` (
  `idGiro` int(11) NOT NULL AUTO_INCREMENT,
  `nombreGiro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idGiro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giro`
--

LOCK TABLES `giro` WRITE;
/*!40000 ALTER TABLE `giro` DISABLE KEYS */;
INSERT INTO `giro` VALUES (1,'Alimentos');
/*!40000 ALTER TABLE `giro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen`
--

DROP TABLE IF EXISTS `imagen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagen` (
  `idMercado` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) DEFAULT NULL,
  `rutaAbsoluta` varchar(100) DEFAULT NULL,
  `rutaMediana` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `peso` varchar(100) DEFAULT NULL,
  `fechaCreacion` varchar(100) DEFAULT NULL,
  KEY `imagen_mercado_FK` (`idMercado`),
  CONSTRAINT `imagen_mercado_FK` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen`
--

LOCK TABLES `imagen` WRITE;
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
INSERT INTO `imagen` VALUES (1,'1','assets/recursos/img/original/General_005.JPG','assets/recursos/img/mediana/General_005.JPG','General_005.JPG','9487.48','2024-7-21'),(2,'1','assets/recursos/img/original/principal_sanchez.jpg','assets/recursos/img/mediana/principal_sanchez.jpg','principal_sanchez.jpg','9487.48','2024-7-21'),(3,'1','assets/recursos/img/original/principal_sanchez.jpg','assets/recursos/img/mediana/principal_sanchez.jpg','principal_sanchez.jpg','9487.48','2024-7-21'),(4,'2','assets/recursos/img/original/Malena.jpg','assets/recursos/img/mediana/Malena.jpg','Malena.jpg','451.68','2024-7-21');
/*!40000 ALTER TABLE `imagen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `local` (
  `idMercado` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `eslogan` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `historia` varchar(100) DEFAULT NULL,
  `idGiro` int(11) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idLocal`),
  KEY `local_mercado_FK` (`idMercado`),
  KEY `local_giro_FK` (`idGiro`),
  CONSTRAINT `local_giro_FK` FOREIGN KEY (`idGiro`) REFERENCES `giro` (`idGiro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `local_mercado_FK` FOREIGN KEY (`idMercado`) REFERENCES `mercado` (`idMercado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (2,1,'Chuchita','Amas es convivir',NULL,'Esta es una historia chida',1,'nieve'),(2,2,'Chuchita','Amas es convivir',NULL,'Esta es una historia chida',1,'nieve');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercado`
--

DROP TABLE IF EXISTS `mercado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mercado` (
  `idMercado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `zona` varchar(100) DEFAULT NULL,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `historia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMercado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercado`
--

LOCK TABLES `mercado` WRITE;
/*!40000 ALTER TABLE `mercado` DISABLE KEYS */;
INSERT INTO `mercado` VALUES (1,'Benito Juarez','es un mercado grandote que esta en el centro de oaxaca                      ','CH','10.5','1.5','Colonia centro','19:00','9581065616','loreme isojkhocjkheiochoericer3w'),(2,'Paz Migueles','En el norte esta grandote que esta en el centro de oaxaca                      ','N','10.5','1.5','Colonia centro','19:00','9581065616','loreme isojkhocjkheiochoericer3w'),(3,'Artesanias','es un mercado grandote que esta en el centro de oaxaca                      ','CH','10.5','1.5','Colonia centro','19:00','9581065616','loreme isojkhocjkheiochoericer3w'),(4,'Merced','es un mercado grandote que esta en el centro de oaxaca','CH','10.5','1.5','Colonia centro','19:44','9581065616','                              \r\n                            ');
/*!40000 ALTER TABLE `mercado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recurso`
--

DROP TABLE IF EXISTS `recurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recurso` (
  `idMercado` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `rutaMiniatura` varchar(100) DEFAULT NULL,
  `rutaMediana` varchar(100) DEFAULT NULL,
  `rutaAbsoluta` varchar(100) DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `peso` varchar(100) DEFAULT NULL,
  `medidas` varchar(100) DEFAULT NULL,
  `fechaCreacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recurso`
--

LOCK TABLES `recurso` WRITE;
/*!40000 ALTER TABLE `recurso` DISABLE KEYS */;
INSERT INTO `recurso` VALUES (2,2,'img_2_1721529994','image/jpeg','assets/recursos/img/miniatura/img_2_1721529994.JPG','assets/recursos/img/mediana/img_2_1721529994.JPG','assets/recursos/img/original/img_2_1721529994.JPG','.JPG','253.73','1080x720','2024-7-21');
/*!40000 ALTER TABLE `recurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dbmercados'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-20 20:51:54
