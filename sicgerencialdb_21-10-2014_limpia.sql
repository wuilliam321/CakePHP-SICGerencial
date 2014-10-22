-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sicgerencialdb
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.04.2

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
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,170),(2,1,NULL,NULL,'Asignaciones',2,25),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(20,1,NULL,NULL,'Pages',26,37),(21,20,NULL,NULL,'display',27,28),(22,1,NULL,NULL,'Users',38,69),(28,22,NULL,NULL,'profile',39,40),(29,22,NULL,NULL,'login',41,42),(30,22,NULL,NULL,'logout',43,44),(31,22,NULL,NULL,'checkAro',45,46),(32,22,NULL,NULL,'initDB',47,48),(33,22,NULL,NULL,'rebuildARO',49,50),(34,1,NULL,NULL,'AclExtras',70,71),(37,2,NULL,NULL,'getAsignaciones',13,14),(39,1,NULL,NULL,'Avances',72,89),(40,39,NULL,NULL,'index',73,74),(42,39,NULL,NULL,'add',75,76),(43,39,NULL,NULL,'edit',77,78),(44,39,NULL,NULL,'delete',79,80),(45,2,NULL,NULL,'finalizar',15,16),(46,1,NULL,NULL,'Comunicaciones',90,113),(48,46,NULL,NULL,'index',91,92),(49,46,NULL,NULL,'view',93,94),(50,46,NULL,NULL,'add',95,96),(51,46,NULL,NULL,'edit',97,98),(52,46,NULL,NULL,'delete',99,100),(53,46,NULL,NULL,'getComunicaciones',101,102),(59,1,NULL,NULL,'Directorios',114,135),(60,59,NULL,NULL,'index',115,116),(62,59,NULL,NULL,'add',117,118),(63,59,NULL,NULL,'edit',119,120),(64,59,NULL,NULL,'delete',121,122),(65,59,NULL,NULL,'getDirectorios',123,124),(72,2,NULL,NULL,'get_last_code',17,18),(73,2,NULL,NULL,'increase_contador',19,20),(74,39,NULL,NULL,'get_last_code',81,82),(75,39,NULL,NULL,'increase_contador',83,84),(76,46,NULL,NULL,'get_last_code',103,104),(77,46,NULL,NULL,'increase_contador',105,106),(80,59,NULL,NULL,'get_last_code',125,126),(81,59,NULL,NULL,'increase_contador',127,128),(84,20,NULL,NULL,'get_last_code',29,30),(85,20,NULL,NULL,'increase_contador',31,32),(88,22,NULL,NULL,'get_last_code',51,52),(89,22,NULL,NULL,'increase_contador',53,54),(90,2,NULL,NULL,'decrease_contador',21,22),(91,39,NULL,NULL,'decrease_contador',85,86),(92,46,NULL,NULL,'decrease_contador',107,108),(94,59,NULL,NULL,'decrease_contador',129,130),(96,20,NULL,NULL,'decrease_contador',33,34),(98,22,NULL,NULL,'decrease_contador',55,56),(99,2,NULL,NULL,'download',23,24),(100,39,NULL,NULL,'download',87,88),(101,46,NULL,NULL,'download',109,110),(103,59,NULL,NULL,'download',131,132),(105,20,NULL,NULL,'download',35,36),(107,22,NULL,NULL,'download',57,58),(108,1,NULL,NULL,'Upload',136,137),(109,1,NULL,NULL,'Resumen',138,149),(110,109,NULL,NULL,'index',139,140),(111,109,NULL,NULL,'get_last_code',141,142),(112,109,NULL,NULL,'increase_contador',143,144),(113,109,NULL,NULL,'decrease_contador',145,146),(114,109,NULL,NULL,'download',147,148),(115,1,NULL,NULL,'Comunicacioncategorias',150,169),(116,115,NULL,NULL,'index',151,152),(117,115,NULL,NULL,'view',153,154),(118,115,NULL,NULL,'add',155,156),(119,115,NULL,NULL,'edit',157,158),(120,115,NULL,NULL,'delete',159,160),(121,115,NULL,NULL,'get_last_code',161,162),(122,115,NULL,NULL,'increase_contador',163,164),(123,115,NULL,NULL,'decrease_contador',165,166),(124,115,NULL,NULL,'download',167,168),(125,22,NULL,NULL,'index',59,60),(126,22,NULL,NULL,'view',61,62),(127,22,NULL,NULL,'add',63,64),(128,22,NULL,NULL,'edit',65,66),(129,22,NULL,NULL,'delete',67,68),(130,46,NULL,NULL,'finalizar',111,112),(131,59,NULL,NULL,'finalizar',133,134);
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
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,10),(2,NULL,'Group',2,NULL,11,20),(3,NULL,'Group',3,NULL,21,22),(4,NULL,'Group',4,NULL,23,24),(5,NULL,'Group',5,NULL,25,26),(6,NULL,'Group',6,NULL,27,28),(7,NULL,'Group',7,NULL,29,30),(8,NULL,'Group',8,NULL,31,32),(9,NULL,'Group',9,NULL,33,92),(10,NULL,'Group',99,NULL,93,302),(11,1,'User',1,NULL,2,3),(12,2,'User',5,NULL,12,13),(13,2,'User',7,NULL,14,15),(14,2,'User',8,NULL,16,17),(15,9,'User',9,NULL,76,77),(16,2,'User',10,NULL,18,19),(17,9,'User',11,NULL,34,35),(18,9,'User',12,NULL,36,37),(19,9,'User',13,NULL,38,39),(20,10,'User',14,NULL,94,95),(21,9,'User',15,NULL,78,79),(22,10,'User',16,NULL,96,97),(23,10,'User',17,NULL,98,99),(24,10,'User',18,NULL,100,101),(25,10,'User',19,NULL,102,103),(26,10,'User',20,NULL,104,105),(27,9,'User',21,NULL,42,43),(28,9,'User',22,NULL,40,41),(29,9,'User',23,NULL,80,81),(30,9,'User',24,NULL,44,45),(31,9,'User',25,NULL,46,47),(32,9,'User',26,NULL,82,83),(33,10,'User',27,NULL,106,107),(34,9,'User',28,NULL,48,49),(35,9,'User',29,NULL,84,85),(36,10,'User',30,NULL,108,109),(37,10,'User',31,NULL,110,111),(38,10,'User',32,NULL,112,113),(39,10,'User',33,NULL,114,115),(40,10,'User',34,NULL,116,117),(41,10,'User',35,NULL,118,119),(42,10,'User',36,NULL,120,121),(43,10,'User',37,NULL,122,123),(44,9,'User',38,NULL,50,51),(45,9,'User',39,NULL,72,73),(46,9,'User',40,NULL,52,53),(47,9,'User',41,NULL,86,87),(48,10,'User',42,NULL,124,125),(49,10,'User',43,NULL,126,127),(50,10,'User',44,NULL,128,129),(51,10,'User',45,NULL,130,131),(52,10,'User',46,NULL,132,133),(53,10,'User',47,NULL,134,135),(54,10,'User',48,NULL,136,137),(55,10,'User',49,NULL,138,139),(56,10,'User',50,NULL,140,141),(57,10,'User',51,NULL,142,143),(58,10,'User',52,NULL,144,145),(59,9,'User',53,NULL,54,55),(60,10,'User',54,NULL,146,147),(61,10,'User',55,NULL,148,149),(62,9,'User',56,NULL,56,57),(63,9,'User',57,NULL,58,59),(64,10,'User',58,NULL,150,151),(65,9,'User',59,NULL,60,61),(66,10,'User',60,NULL,152,153),(67,10,'User',61,NULL,154,155),(68,10,'User',62,NULL,156,157),(69,10,'User',63,NULL,158,159),(70,10,'User',64,NULL,160,161),(71,10,'User',65,NULL,162,163),(72,10,'User',66,NULL,164,165),(73,10,'User',67,NULL,166,167),(74,10,'User',68,NULL,168,169),(75,9,'User',69,NULL,62,63),(76,9,'User',70,NULL,64,65),(77,10,'User',71,NULL,170,171),(78,10,'User',72,NULL,172,173),(79,9,'User',73,NULL,88,89),(80,9,'User',74,NULL,66,67),(81,10,'User',75,NULL,174,175),(82,10,'User',76,NULL,176,177),(83,1,'User',77,NULL,6,7),(84,1,'User',78,NULL,4,5),(85,9,'User',79,NULL,90,91),(86,9,'User',80,NULL,68,69),(87,10,'User',81,NULL,178,179),(88,10,'User',82,NULL,180,181),(89,10,'User',83,NULL,182,183),(90,10,'User',84,NULL,184,185),(91,10,'User',85,NULL,186,187),(92,10,'User',86,NULL,188,189),(93,10,'User',87,NULL,190,191),(94,10,'User',88,NULL,192,193),(95,10,'User',89,NULL,194,195),(96,10,'User',90,NULL,196,197),(97,9,'User',91,NULL,74,75),(98,10,'User',92,NULL,198,199),(99,10,'User',93,NULL,200,201),(100,10,'User',94,NULL,202,203),(101,10,'User',95,NULL,204,205),(102,10,'User',96,NULL,206,207),(103,9,'User',97,NULL,70,71),(104,10,'User',98,NULL,208,209),(105,10,'User',99,NULL,210,211),(106,10,'User',100,NULL,212,213),(107,10,'User',101,NULL,214,215),(108,10,'User',102,NULL,216,217),(109,10,'User',103,NULL,218,219),(110,10,'User',104,NULL,220,221),(111,10,'User',105,NULL,222,223),(112,10,'User',106,NULL,224,225),(113,10,'User',107,NULL,226,227),(114,10,'User',108,NULL,228,229),(115,10,'User',109,NULL,230,231),(116,10,'User',110,NULL,232,233),(117,10,'User',111,NULL,234,235),(118,10,'User',112,NULL,236,237),(119,10,'User',113,NULL,238,239),(120,10,'User',114,NULL,240,241),(121,10,'User',115,NULL,300,301),(122,10,'User',116,NULL,242,243),(123,10,'User',117,NULL,244,245),(124,10,'User',118,NULL,246,247),(125,10,'User',119,NULL,248,249),(126,10,'User',120,NULL,250,251),(127,10,'User',121,NULL,252,253),(128,10,'User',122,NULL,254,255),(129,10,'User',123,NULL,256,257),(130,10,'User',124,NULL,258,259),(131,10,'User',125,NULL,260,261),(132,10,'User',126,NULL,262,263),(133,10,'User',127,NULL,264,265),(134,10,'User',128,NULL,266,267),(135,10,'User',129,NULL,268,269),(136,10,'User',130,NULL,270,271),(137,10,'User',131,NULL,272,273),(138,10,'User',132,NULL,274,275),(139,10,'User',133,NULL,276,277),(140,10,'User',134,NULL,278,279),(141,10,'User',135,NULL,280,281),(142,10,'User',136,NULL,282,283),(143,10,'User',137,NULL,284,285),(144,10,'User',138,NULL,286,287),(145,10,'User',139,NULL,288,289),(146,10,'User',140,NULL,290,291),(147,10,'User',141,NULL,292,293),(148,10,'User',142,NULL,294,295),(149,10,'User',143,NULL,296,297),(150,10,'User',144,NULL,298,299),(151,1,'User',149,NULL,8,9);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones`
--

LOCK TABLES `asignaciones` WRITE;
/*!40000 ALTER TABLE `asignaciones` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones_users`
--

LOCK TABLES `asignaciones_users` WRITE;
/*!40000 ALTER TABLE `asignaciones_users` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avances`
--

LOCK TABLES `avances` WRITE;
/*!40000 ALTER TABLE `avances` DISABLE KEYS */;
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
INSERT INTO `comunicacioncategorias` VALUES (99,'Para su conocimiento',NULL);
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
  `completada` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comunicaciones_comunicacioncategorias1_idx` (`comunicacioncategoria_id`),
  CONSTRAINT `fk_comunicaciones_comunicacioncategorias1` FOREIGN KEY (`comunicacioncategoria_id`) REFERENCES `comunicacioncategorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones`
--

LOCK TABLES `comunicaciones` WRITE;
/*!40000 ALTER TABLE `comunicaciones` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones_users`
--

LOCK TABLES `comunicaciones_users` WRITE;
/*!40000 ALTER TABLE `comunicaciones_users` DISABLE KEYS */;
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
  `completada` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios`
--

LOCK TABLES `directorios` WRITE;
/*!40000 ALTER TABLE `directorios` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios_users`
--

LOCK TABLES `directorios_users` WRITE;
/*!40000 ALTER TABLE `directorios_users` DISABLE KEYS */;
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
INSERT INTO `parametros` VALUES (1,'contador_asignaciones','0',NULL),(2,'contador_comunicaciones','0',NULL),(3,'contador_directorio','0',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntos`
--

LOCK TABLES `puntos` WRITE;
/*!40000 ALTER TABLE `puntos` DISABLE KEYS */;
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

-- Dump completed on 2014-10-21 11:28:41
