-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sicgerencialdb
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,210),(2,1,NULL,NULL,'Asignaciones',2,25),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,1,NULL,NULL,'Groups',26,45),(9,8,NULL,NULL,'index',27,28),(10,8,NULL,NULL,'view',29,30),(11,8,NULL,NULL,'add',31,32),(12,8,NULL,NULL,'edit',33,34),(13,8,NULL,NULL,'delete',35,36),(20,1,NULL,NULL,'Pages',46,57),(21,20,NULL,NULL,'display',47,48),(22,1,NULL,NULL,'Users',58,89),(23,22,NULL,NULL,'index',59,60),(24,22,NULL,NULL,'view',61,62),(25,22,NULL,NULL,'add',63,64),(26,22,NULL,NULL,'edit',65,66),(27,22,NULL,NULL,'delete',67,68),(28,22,NULL,NULL,'profile',69,70),(29,22,NULL,NULL,'login',71,72),(30,22,NULL,NULL,'logout',73,74),(31,22,NULL,NULL,'checkAro',75,76),(32,22,NULL,NULL,'initDB',77,78),(33,22,NULL,NULL,'rebuildARO',79,80),(34,1,NULL,NULL,'AclExtras',90,91),(37,2,NULL,NULL,'getAsignaciones',13,14),(39,1,NULL,NULL,'Avances',92,111),(40,39,NULL,NULL,'index',93,94),(41,39,NULL,NULL,'view',95,96),(42,39,NULL,NULL,'add',97,98),(43,39,NULL,NULL,'edit',99,100),(44,39,NULL,NULL,'delete',101,102),(45,2,NULL,NULL,'finalizar',15,16),(46,1,NULL,NULL,'Comunicaciones',112,133),(47,1,NULL,NULL,'Correcciones',134,153),(48,46,NULL,NULL,'index',113,114),(49,46,NULL,NULL,'view',115,116),(50,46,NULL,NULL,'add',117,118),(51,46,NULL,NULL,'edit',119,120),(52,46,NULL,NULL,'delete',121,122),(53,46,NULL,NULL,'getComunicaciones',123,124),(54,47,NULL,NULL,'index',135,136),(55,47,NULL,NULL,'view',137,138),(56,47,NULL,NULL,'add',139,140),(57,47,NULL,NULL,'edit',141,142),(58,47,NULL,NULL,'delete',143,144),(59,1,NULL,NULL,'Directorios',154,175),(60,59,NULL,NULL,'index',155,156),(61,59,NULL,NULL,'view',157,158),(62,59,NULL,NULL,'add',159,160),(63,59,NULL,NULL,'edit',161,162),(64,59,NULL,NULL,'delete',163,164),(65,59,NULL,NULL,'getDirectorios',165,166),(66,1,NULL,NULL,'Puntos',176,195),(67,66,NULL,NULL,'index',177,178),(68,66,NULL,NULL,'view',179,180),(69,66,NULL,NULL,'add',181,182),(70,66,NULL,NULL,'edit',183,184),(71,66,NULL,NULL,'delete',185,186),(72,2,NULL,NULL,'get_last_code',17,18),(73,2,NULL,NULL,'increase_contador',19,20),(74,39,NULL,NULL,'get_last_code',103,104),(75,39,NULL,NULL,'increase_contador',105,106),(76,46,NULL,NULL,'get_last_code',125,126),(77,46,NULL,NULL,'increase_contador',127,128),(78,47,NULL,NULL,'get_last_code',145,146),(79,47,NULL,NULL,'increase_contador',147,148),(80,59,NULL,NULL,'get_last_code',167,168),(81,59,NULL,NULL,'increase_contador',169,170),(82,8,NULL,NULL,'get_last_code',37,38),(83,8,NULL,NULL,'increase_contador',39,40),(84,20,NULL,NULL,'get_last_code',49,50),(85,20,NULL,NULL,'increase_contador',51,52),(86,66,NULL,NULL,'get_last_code',187,188),(87,66,NULL,NULL,'increase_contador',189,190),(88,22,NULL,NULL,'get_last_code',81,82),(89,22,NULL,NULL,'increase_contador',83,84),(90,2,NULL,NULL,'decrease_contador',21,22),(91,39,NULL,NULL,'decrease_contador',107,108),(92,46,NULL,NULL,'decrease_contador',129,130),(93,47,NULL,NULL,'decrease_contador',149,150),(94,59,NULL,NULL,'decrease_contador',171,172),(95,8,NULL,NULL,'decrease_contador',41,42),(96,20,NULL,NULL,'decrease_contador',53,54),(97,66,NULL,NULL,'decrease_contador',191,192),(98,22,NULL,NULL,'decrease_contador',85,86),(99,2,NULL,NULL,'download',23,24),(100,39,NULL,NULL,'download',109,110),(101,46,NULL,NULL,'download',131,132),(102,47,NULL,NULL,'download',151,152),(103,59,NULL,NULL,'download',173,174),(104,8,NULL,NULL,'download',43,44),(105,20,NULL,NULL,'download',55,56),(106,66,NULL,NULL,'download',193,194),(107,22,NULL,NULL,'download',87,88),(108,1,NULL,NULL,'Upload',196,197),(109,1,NULL,NULL,'Resumen',198,209),(110,109,NULL,NULL,'index',199,200),(111,109,NULL,NULL,'get_last_code',201,202),(112,109,NULL,NULL,'increase_contador',203,204),(113,109,NULL,NULL,'decrease_contador',205,206),(114,109,NULL,NULL,'download',207,208);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,6),(2,NULL,'Group',2,NULL,7,16),(3,NULL,'Group',3,NULL,17,18),(4,NULL,'Group',4,NULL,19,20),(5,NULL,'Group',5,NULL,21,22),(6,NULL,'Group',6,NULL,23,24),(7,NULL,'Group',7,NULL,25,26),(8,NULL,'Group',8,NULL,27,28),(9,NULL,'Group',9,NULL,29,74),(10,NULL,'Group',99,NULL,75,300),(11,1,'User',1,NULL,2,3),(12,2,'User',5,NULL,8,9),(13,2,'User',7,NULL,10,11),(14,2,'User',8,NULL,12,13),(15,9,'User',9,NULL,72,73),(16,2,'User',10,NULL,14,15),(17,9,'User',11,NULL,30,31),(18,9,'User',12,NULL,32,33),(19,9,'User',13,NULL,34,35),(20,10,'User',14,NULL,76,77),(21,10,'User',15,NULL,78,79),(22,10,'User',16,NULL,80,81),(23,10,'User',17,NULL,82,83),(24,10,'User',18,NULL,84,85),(25,10,'User',19,NULL,86,87),(26,10,'User',20,NULL,88,89),(27,9,'User',21,NULL,38,39),(28,9,'User',22,NULL,36,37),(29,10,'User',23,NULL,90,91),(30,9,'User',24,NULL,40,41),(31,9,'User',25,NULL,42,43),(32,10,'User',26,NULL,92,93),(33,10,'User',27,NULL,94,95),(34,9,'User',28,NULL,44,45),(35,10,'User',29,NULL,96,97),(36,10,'User',30,NULL,98,99),(37,10,'User',31,NULL,100,101),(38,10,'User',32,NULL,102,103),(39,10,'User',33,NULL,104,105),(40,10,'User',34,NULL,106,107),(41,10,'User',35,NULL,108,109),(42,10,'User',36,NULL,110,111),(43,10,'User',37,NULL,112,113),(44,9,'User',38,NULL,46,47),(45,9,'User',39,NULL,68,69),(46,9,'User',40,NULL,48,49),(47,10,'User',41,NULL,114,115),(48,10,'User',42,NULL,116,117),(49,10,'User',43,NULL,118,119),(50,10,'User',44,NULL,120,121),(51,10,'User',45,NULL,122,123),(52,10,'User',46,NULL,124,125),(53,10,'User',47,NULL,126,127),(54,10,'User',48,NULL,128,129),(55,10,'User',49,NULL,130,131),(56,10,'User',50,NULL,132,133),(57,10,'User',51,NULL,134,135),(58,10,'User',52,NULL,136,137),(59,9,'User',53,NULL,50,51),(60,10,'User',54,NULL,138,139),(61,10,'User',55,NULL,140,141),(62,9,'User',56,NULL,52,53),(63,9,'User',57,NULL,54,55),(64,10,'User',58,NULL,142,143),(65,9,'User',59,NULL,56,57),(66,10,'User',60,NULL,144,145),(67,10,'User',61,NULL,146,147),(68,10,'User',62,NULL,148,149),(69,10,'User',63,NULL,150,151),(70,10,'User',64,NULL,152,153),(71,10,'User',65,NULL,154,155),(72,10,'User',66,NULL,156,157),(73,10,'User',67,NULL,158,159),(74,10,'User',68,NULL,160,161),(75,9,'User',69,NULL,58,59),(76,9,'User',70,NULL,60,61),(77,10,'User',71,NULL,162,163),(78,10,'User',72,NULL,164,165),(79,10,'User',73,NULL,166,167),(80,9,'User',74,NULL,62,63),(81,10,'User',75,NULL,168,169),(82,10,'User',76,NULL,170,171),(83,10,'User',77,NULL,172,173),(84,1,'User',78,NULL,4,5),(85,10,'User',79,NULL,174,175),(86,9,'User',80,NULL,64,65),(87,10,'User',81,NULL,176,177),(88,10,'User',82,NULL,178,179),(89,10,'User',83,NULL,180,181),(90,10,'User',84,NULL,182,183),(91,10,'User',85,NULL,184,185),(92,10,'User',86,NULL,186,187),(93,10,'User',87,NULL,188,189),(94,10,'User',88,NULL,190,191),(95,10,'User',89,NULL,192,193),(96,10,'User',90,NULL,194,195),(97,9,'User',91,NULL,70,71),(98,10,'User',92,NULL,196,197),(99,10,'User',93,NULL,198,199),(100,10,'User',94,NULL,200,201),(101,10,'User',95,NULL,202,203),(102,10,'User',96,NULL,204,205),(103,9,'User',97,NULL,66,67),(104,10,'User',98,NULL,206,207),(105,10,'User',99,NULL,208,209),(106,10,'User',100,NULL,210,211),(107,10,'User',101,NULL,212,213),(108,10,'User',102,NULL,214,215),(109,10,'User',103,NULL,216,217),(110,10,'User',104,NULL,218,219),(111,10,'User',105,NULL,220,221),(112,10,'User',106,NULL,222,223),(113,10,'User',107,NULL,224,225),(114,10,'User',108,NULL,226,227),(115,10,'User',109,NULL,228,229),(116,10,'User',110,NULL,230,231),(117,10,'User',111,NULL,232,233),(118,10,'User',112,NULL,234,235),(119,10,'User',113,NULL,236,237),(120,10,'User',114,NULL,238,239),(121,10,'User',115,NULL,298,299),(122,10,'User',116,NULL,240,241),(123,10,'User',117,NULL,242,243),(124,10,'User',118,NULL,244,245),(125,10,'User',119,NULL,246,247),(126,10,'User',120,NULL,248,249),(127,10,'User',121,NULL,250,251),(128,10,'User',122,NULL,252,253),(129,10,'User',123,NULL,254,255),(130,10,'User',124,NULL,256,257),(131,10,'User',125,NULL,258,259),(132,10,'User',126,NULL,260,261),(133,10,'User',127,NULL,262,263),(134,10,'User',128,NULL,264,265),(135,10,'User',129,NULL,266,267),(136,10,'User',130,NULL,268,269),(137,10,'User',131,NULL,270,271),(138,10,'User',132,NULL,272,273),(139,10,'User',133,NULL,274,275),(140,10,'User',134,NULL,276,277),(141,10,'User',135,NULL,278,279),(142,10,'User',136,NULL,280,281),(143,10,'User',137,NULL,282,283),(144,10,'User',138,NULL,284,285),(145,10,'User',139,NULL,286,287),(146,10,'User',140,NULL,288,289),(147,10,'User',141,NULL,290,291),(148,10,'User',142,NULL,292,293),(149,10,'User',143,NULL,294,295),(150,10,'User',144,NULL,296,297);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(2,9,1,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignaciones`
--

DROP TABLE IF EXISTS `asignaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `asignador_id` int(11) NOT NULL,
  `responsable_id` int(11) NOT NULL,
  `dependencia_id` int(11) DEFAULT NULL,
  `titulo` text NOT NULL,
  `detalles` text NOT NULL,
  `porcentaje_asignado` int(11) NOT NULL DEFAULT '100',
  `porcentaje_distribuido` int(11) NOT NULL DEFAULT '0',
  `progreso` int(11) NOT NULL DEFAULT '0',
  `fecha_asignacion` datetime NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `fecha_recepcion` datetime DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `completada` tinyint(1) DEFAULT '0',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `es_nueva` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones`
--

LOCK TABLES `asignaciones` WRITE;
/*!40000 ALTER TABLE `asignaciones` DISABLE KEYS */;
INSERT INTO `asignaciones` VALUES (85,'A000000001',1,9,10,'test','<p>test</p>\r\n',100,100,50,'2014-08-18 09:00:14','2014-08-22 09:00:14',NULL,NULL,0,1,4,1,'2014-08-18 09:01:14','2014-08-18 09:45:38'),(86,'',1,12,10,'Llevar a cabo la tarea de tal cosa con tal cosa mas estado cosa','<p>Esto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asign</p>\r\n\r\n<p>acionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asig</p>\r\n\r\n<p>nacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asi</p>\r\n\r\n<p>gnacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asi</p>\r\n\r\n<p>gnacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionE</p>\r\n\r\n<p>sto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una <strong>prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una</strong> prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacionEsto no es mas que una prueba de asignacion</p>\r\n',100,0,25,'2014-08-18 09:15:36','2014-08-19 09:15:36',NULL,85,0,2,3,1,'2014-08-18 09:16:06','2014-08-18 12:02:52');
/*!40000 ALTER TABLE `asignaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignaciones_users`
--

DROP TABLE IF EXISTS `asignaciones_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignaciones_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `asignacione_id` int(11) NOT NULL,
  `es_nueva` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_asignaciones_users_asignaciones_idx` (`asignacione_id`),
  CONSTRAINT `fk_asignaciones_users_asignaciones` FOREIGN KEY (`asignacione_id`) REFERENCES `asignaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones_users`
--

LOCK TABLES `asignaciones_users` WRITE;
/*!40000 ALTER TABLE `asignaciones_users` DISABLE KEYS */;
INSERT INTO `asignaciones_users` VALUES (212,12,85,1);
/*!40000 ALTER TABLE `asignaciones_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(20) NOT NULL,
  `foreign_key` int(11) NOT NULL,
  `name` text NOT NULL,
  `attachment` text NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` VALUES (1,'Avance',3,'energia','700724742-energia.pdf','files/avances/','application/pdf',513866,1),(2,'Asignacione',85,'cambiar_tipo_sac.py','365902976-cambiar_tipo_sac.py','files/asignaciones/','text/x-python',1415,1),(3,'Comunicacione',3,'path3890','246895921-path3890.png','files/comunicaciones/','image/png',1037,1),(4,'Avance',3,'ddl','732596909-ddl.log','files/avances/','text/x-log',33834,1),(5,'Avance',3,'energia.architect','928707791-energia.architect','files/avances/','application/octet-stream',63862,1),(6,'Asignacione',86,'cambiar_tipo_sac.py','259569612-cambiar_tipo_sac.py','files/asignaciones/','text/x-python',1415,1),(7,'Comunicacione',1,'energia','378106204-energia.pdf','files/comunicaciones/','application/pdf',513866,1),(8,'Comunicacione',9,'path3890','337596124-path3890.png','files/comunicaciones/','image/png',1037,1),(9,'Comunicacione',12,'energia.architect','145376788-energia.architect','files/comunicaciones/','application/octet-stream',63862,1),(10,'Directorio',2,'test_lenguajes','561008442-test_lenguajes.ods','files/directorios/','application/vnd.oasis.opendocument.spreadsheet',74762,1),(11,'Directorio',1,'print','552010507-print.pdf','files/directorios/','application/pdf',29544,1);
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avances`
--

DROP TABLE IF EXISTS `avances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asignacione_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `detalles` text NOT NULL,
  `porcentaje_avanzado` int(11) NOT NULL DEFAULT '0',
  `es_nueva` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_avances_asignaciones1_idx` (`asignacione_id`),
  CONSTRAINT `fk_avances_asignaciones1` FOREIGN KEY (`asignacione_id`) REFERENCES `asignaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avances`
--

LOCK TABLES `avances` WRITE;
/*!40000 ALTER TABLE `avances` DISABLE KEYS */;
INSERT INTO `avances` VALUES (3,86,12,'<p>Ya va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas dYa va caminando la cosa asdas d</p>\r\n',25,1,'2014-08-18 09:23:01','2014-08-18 11:43:56'),(4,86,12,'<p>Esta es otra causa de avance, todo va muy bien , caminando todo fino, EDITED</p>\r\n',45,1,'2014-08-18 09:27:13','2014-08-18 09:30:37'),(5,86,12,'<p>ya voy mejor! :D</p>\r\n',55,1,'2014-08-18 09:45:01','2014-08-18 09:45:01');
/*!40000 ALTER TABLE `avances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunicacioncategorias`
--

DROP TABLE IF EXISTS `comunicacioncategorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunicacioncategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `dependencia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicacioncategorias`
--

LOCK TABLES `comunicacioncategorias` WRITE;
/*!40000 ALTER TABLE `comunicacioncategorias` DISABLE KEYS */;
INSERT INTO `comunicacioncategorias` VALUES (1,'Oficio de lago',1),(2,'Comunicacion para tal cosa',2),(3,'Oficio de esta otra cosa',3),(4,'Documento de kakkaka',4),(5,'Otro documento',5),(6,'Comuinicacion para tal cosa',6),(7,'Correspondencia de tal cosa',7),(8,'Archivo de tal cosa',8),(9,'Comunicaciones especiales de tal cosa',9),(10,'Mensajes externos para tal cosa',10),(11,'Comunicacion externa para esta otra broma',11),(12,'Detalles de tal cosa',12),(13,'Otro tipo de categoria de mensaje',13),(14,'Comunicaciones de tipos que no conocemos',14),(15,'Otros tipos desconocidos',15),(16,'Probando mas tiepos',16),(17,'Otras pruebas',17),(18,'Mensajes de otras cosas',18),(19,'Otro mas',19),(99,'Para su conocimiento',NULL);
/*!40000 ALTER TABLE `comunicacioncategorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunicaciones`
--

DROP TABLE IF EXISTS `comunicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `remitente_id` int(11) NOT NULL,
  `comunicacioncategoria_id` int(11) NOT NULL,
  `detalles` text NOT NULL,
  `fecha_remision` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `fecha_recepcion` datetime DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `es_leida` tinyint(1) DEFAULT '0',
  `es_nueva` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comunicaciones_comunicacioncategorias1_idx` (`comunicacioncategoria_id`),
  CONSTRAINT `fk_comunicaciones_comunicacioncategorias1` FOREIGN KEY (`comunicacioncategoria_id`) REFERENCES `comunicacioncategorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones`
--

LOCK TABLES `comunicaciones` WRITE;
/*!40000 ALTER TABLE `comunicaciones` DISABLE KEYS */;
INSERT INTO `comunicaciones` VALUES (12,'C000000003',1,7,'<p>Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;Esta es la comunuicacion&nbsp;</p>\r\n','2014-08-18 15:57:09','2014-08-18 15:56:51',NULL,NULL,1,8,0,1,'2014-08-18 15:57:09','2014-08-18 15:58:09'),(13,'',1,7,'<p>testte</p>\r\n','2014-08-18 16:06:02','0000-00-00 00:00:00',NULL,12,2,7,0,1,'2014-08-18 16:06:02','2014-08-18 16:06:02'),(14,'',1,7,'<p>dadasdasdsa</p>\r\n','2014-08-18 16:06:10','0000-00-00 00:00:00',NULL,13,3,6,0,1,'2014-08-18 16:06:10','2014-08-18 16:06:10'),(15,'',1,7,'<p>asddsadsa</p>\r\n','2014-08-18 16:06:18','0000-00-00 00:00:00',NULL,14,4,5,0,1,'2014-08-18 16:06:18','2014-08-18 16:11:06');
/*!40000 ALTER TABLE `comunicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunicaciones_users`
--

DROP TABLE IF EXISTS `comunicaciones_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunicaciones_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comunicacione_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `es_nueva` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_comunicaciones_users_comunicaciones1_idx` (`comunicacione_id`),
  CONSTRAINT `fk_comunicaciones_users_comunicaciones1` FOREIGN KEY (`comunicacione_id`) REFERENCES `comunicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones_users`
--

LOCK TABLES `comunicaciones_users` WRITE;
/*!40000 ALTER TABLE `comunicaciones_users` DISABLE KEYS */;
INSERT INTO `comunicaciones_users` VALUES (153,12,1,1),(154,12,7,1),(155,12,9,1),(156,12,12,1),(157,13,1,1),(158,14,1,1),(159,15,1,1);
/*!40000 ALTER TABLE `comunicaciones_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correcciones`
--

DROP TABLE IF EXISTS `correcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comunicacione_id` int(11) NOT NULL,
  `nro_correccion` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_correcciones_comunicaciones1_idx` (`comunicacione_id`),
  CONSTRAINT `fk_correcciones_comunicaciones1` FOREIGN KEY (`comunicacione_id`) REFERENCES `comunicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correcciones`
--

LOCK TABLES `correcciones` WRITE;
/*!40000 ALTER TABLE `correcciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `correcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directorios`
--

DROP TABLE IF EXISTS `directorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `es_nueva` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios`
--

LOCK TABLES `directorios` WRITE;
/*!40000 ALTER TABLE `directorios` DISABLE KEYS */;
INSERT INTO `directorios` VALUES (1,'D000000001','2014-08-19 15:47:14','2014-08-19 15:47:14',1,'2014-08-18 14:55:11','2014-08-19 15:47:21'),(2,'D000000002','2014-08-19 14:21:38','2014-08-19 14:21:38',1,'2014-08-19 13:38:49','2014-08-19 14:21:44');
/*!40000 ALTER TABLE `directorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directorios_users`
--

DROP TABLE IF EXISTS `directorios_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directorios_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `directorio_id` int(11) NOT NULL,
  `es_nueva` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_directorios_users_directorios1_idx` (`directorio_id`),
  CONSTRAINT `fk_directorios_users_directorios1` FOREIGN KEY (`directorio_id`) REFERENCES `directorios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios_users`
--

LOCK TABLES `directorios_users` WRITE;
/*!40000 ALTER TABLE `directorios_users` DISABLE KEYS */;
INSERT INTO `directorios_users` VALUES (1,9,2,1),(2,13,2,1),(3,21,2,1),(4,22,2,1),(5,24,2,1),(6,25,2,1),(7,28,2,1),(8,38,2,1),(9,39,2,1),(10,40,2,1),(11,53,2,1),(12,56,2,1),(13,57,2,1),(14,59,2,1),(15,69,2,1),(16,70,2,1),(17,74,2,1),(18,78,2,1),(19,80,2,1),(20,91,2,1),(21,97,2,1);
/*!40000 ALTER TABLE `directorios_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluaciones`
--

DROP TABLE IF EXISTS `evaluaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asignacione_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `evaluacion` int(11) NOT NULL,
  `entrega_temprana` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_asignacionevaluaciones_asignaciones1_idx` (`asignacione_id`),
  CONSTRAINT `fk_asignacionevaluaciones_asignaciones1` FOREIGN KEY (`asignacione_id`) REFERENCES `asignaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluaciones`
--

LOCK TABLES `evaluaciones` WRITE;
/*!40000 ALTER TABLE `evaluaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enviador_id` int(11) NOT NULL,
  `receptor_id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametros`
--

DROP TABLE IF EXISTS `parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(400) NOT NULL,
  `valor` varchar(400) DEFAULT NULL,
  `descipcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametros`
--

LOCK TABLES `parametros` WRITE;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
INSERT INTO `parametros` VALUES (1,'contador_asignaciones','1',NULL),(2,'contador_comunicaciones','3',NULL),(3,'contador_directorio','2',NULL);
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puntos`
--

DROP TABLE IF EXISTS `puntos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `detalles` text NOT NULL,
  `conclusiones` text,
  `directorio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_puntos_directorios1_idx` (`directorio_id`),
  CONSTRAINT `fk_puntos_directorios1` FOREIGN KEY (`directorio_id`) REFERENCES `directorios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntos`
--

LOCK TABLES `puntos` WRITE;
/*!40000 ALTER TABLE `puntos` DISABLE KEYS */;
INSERT INTO `puntos` VALUES (1,'Este es el punto 1 del directorio 1','aqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla d',NULL,1),(2,'Aqui va el punto 2 del directorio 2','aqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla d','aqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla d',1),(3,'Aqui va el punto 3 del directorio 3 ','3aqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla daqua ksldjalk djlas dlajdla jdla d',NULL,1),(7,'Titulo punto 4','Este es el punto 4 ',NULL,2),(8,'Este es el titlo del punto 22','Este si va a ser el punto 2',NULL,2),(9,'Testo de punto3','Tesss3333',NULL,2),(10,'Titulo punto 4','TEstts 444',NULL,2);
/*!40000 ALTER TABLE `puntos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-22 10:16:49
