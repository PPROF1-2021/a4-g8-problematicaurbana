-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: miobservador
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ciudad` (
  `idCiudad` int NOT NULL AUTO_INCREMENT,
  `nombreCiudad` varchar(25) NOT NULL,
  `idProvincia` int NOT NULL,
  PRIMARY KEY (`idCiudad`),
  KEY `CIUDAD_idProvincia` (`idProvincia`),
  CONSTRAINT `CIUDAD_idProvincia` FOREIGN KEY (`idProvincia`) REFERENCES `provincia` (`idProvincia`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (51,'Achiras',81),(52,'Adelia Maria',81),(53,'Agua de Oro',81),(54,'Alcira Gigena',81),(55,'Aldea Santa Maria',81),(56,'Alejandro Roca',81),(57,'Alejo Ledesma',81),(58,'Alicia',81),(59,'Almafuerte',81),(60,'Alpa Corral',81),(61,'Alta Gracia',81),(62,'Alto Alegre',81),(63,'Alto de Los Quebrachos',81),(64,'Altos de Chipion',81),(65,'Amboy',81),(66,'Ambul',81),(67,'Ana Zumaran',81),(68,'Anisacate',81),(69,'Arguello',81),(70,'Arias',81),(71,'Arroyito',81),(72,'Arroyo Algodon',81),(73,'Arroyo Cabral',81),(74,'Arroyo Los Patos',81),(75,'Assunta',81),(76,'Atahona',81),(77,'Ausonia',81),(78,'Avellaneda',81),(79,'Ballesteros',81),(80,'Ballesteros Sud',81),(81,'Balnearia',81),(82,'Bañado de Soto',81),(83,'Bell Ville',81),(84,'Bengolea',81),(85,'Benjamin Gould',81),(86,'Berrotaran',81),(87,'Bialet Masse',81),(88,'Bouwer',81),(89,'Brinkmann',81),(90,'Buchardo',81),(91,'Bulnes',81),(92,'Cabalango',81),(93,'Calamuchita',81),(94,'Calchin',81),(95,'Calchin Oeste',81),(96,'Calmayo',81),(97,'Camilo Aldao',81),(98,'Caminiaga',81),(99,'Cañada de Luque',81),(100,'Cañada de Machado',81),(101,'Cañada de Rio Pinto',81),(102,'Cañada del Sauce',81),(103,'Canals',81),(104,'Candelaria Sud',81),(105,'Capilla de Remedios',81),(106,'Capilla de Siton',81),(107,'Capilla del Carmen',81),(108,'Capilla del Monte',81),(109,'Capital',81),(110,'Capitan Gral B. O´Higgins',81),(111,'Carnerillo',81),(112,'Carrilobo',81),(113,'Casa Grande',81),(114,'Cavanagh',81),(115,'Cerro Colorado',81),(116,'Chaján',81),(117,'Chalacea',81),(118,'Chañar Viejo',81),(119,'Chancaní',81),(120,'Charbonier',81),(121,'Charras',81),(122,'Chazón',81),(123,'Chilibroste',81),(124,'Chucul',81),(125,'Chuña',81),(126,'Chuña Huasi',81),(127,'Churqui Cañada',81),(128,'Cienaga Del Coro',81),(129,'Cintra',81),(130,'Col. Almada',81),(131,'Col. Anita',81),(132,'Col. Barge',81),(133,'Col. Bismark',81),(134,'Col. Bremen',81),(135,'Col. Caroya',81),(136,'Col. Italiana',81),(137,'Col. Iturraspe',81),(138,'Col. Las Cuatro Esquinas',81),(139,'Col. Las Pichanas',81),(140,'Col. Marina',81),(141,'Col. Prosperidad',81),(142,'Col. San Bartolome',81),(143,'Col. San Pedro',81),(144,'Col. Tirolesa',81),(145,'Col. Vicente Aguero',81),(146,'Col. Videla',81),(147,'Col. Vignaud',81),(148,'Col. Waltelina',81),(149,'Colazo',81),(150,'Comechingones',81),(151,'Conlara',81),(152,'Copacabana',81),(153,'Coronel Baigorria',81),(154,'Coronel Moldes',81),(155,'Corral de Bustos',81),(156,'Corralito',81),(157,'Cosquín',81),(158,'Costa Sacate',81),(159,'Cruz Alta',81),(160,'Cruz de Caña',81),(161,'Cruz del Eje',81),(162,'Cuesta Blanca',81),(163,'Dean Funes',81),(164,'Del Campillo',81),(165,'Despeñaderos',81),(166,'Devoto',81),(167,'Diego de Rojas',81),(168,'Dique Chico',81),(169,'El Arañado',81),(170,'El Brete',81),(171,'El Chacho',81),(172,'El Crispín',81),(173,'El Fortín',81),(174,'El Manzano',81),(175,'El Rastreador',81),(176,'El Rodeo',81),(177,'El Tío',81),(178,'Elena',81),(179,'Embalse',81),(180,'Esquina',81),(181,'Estación Gral. Paz',81),(182,'Estación Juárez Celman',81),(183,'Estancia de Guadalupe',81),(184,'Estancia Vieja',81),(185,'Etruria',81),(186,'Eufrasio Loza',81),(187,'Falda del Carmen',81),(188,'Freyre',81),(189,'Gral. Baldissera',81),(190,'Gral. Cabrera',81),(191,'Gral. Deheza',81),(192,'Gral. Fotheringham',81),(193,'Gral. Levalle',81),(194,'Gral. Roca',81),(195,'Guanaco Muerto',81);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-13 21:52:20
