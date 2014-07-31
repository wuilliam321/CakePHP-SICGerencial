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
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,198),(2,1,NULL,NULL,'Asignaciones',2,25),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,1,NULL,NULL,'Groups',26,45),(9,8,NULL,NULL,'index',27,28),(10,8,NULL,NULL,'view',29,30),(11,8,NULL,NULL,'add',31,32),(12,8,NULL,NULL,'edit',33,34),(13,8,NULL,NULL,'delete',35,36),(20,1,NULL,NULL,'Pages',46,57),(21,20,NULL,NULL,'display',47,48),(22,1,NULL,NULL,'Users',58,89),(23,22,NULL,NULL,'index',59,60),(24,22,NULL,NULL,'view',61,62),(25,22,NULL,NULL,'add',63,64),(26,22,NULL,NULL,'edit',65,66),(27,22,NULL,NULL,'delete',67,68),(28,22,NULL,NULL,'profile',69,70),(29,22,NULL,NULL,'login',71,72),(30,22,NULL,NULL,'logout',73,74),(31,22,NULL,NULL,'checkAro',75,76),(32,22,NULL,NULL,'initDB',77,78),(33,22,NULL,NULL,'rebuildARO',79,80),(34,1,NULL,NULL,'AclExtras',90,91),(37,2,NULL,NULL,'getAsignaciones',13,14),(39,1,NULL,NULL,'Avances',92,111),(40,39,NULL,NULL,'index',93,94),(41,39,NULL,NULL,'view',95,96),(42,39,NULL,NULL,'add',97,98),(43,39,NULL,NULL,'edit',99,100),(44,39,NULL,NULL,'delete',101,102),(45,2,NULL,NULL,'finalizar',15,16),(46,1,NULL,NULL,'Comunicaciones',112,133),(47,1,NULL,NULL,'Correcciones',134,153),(48,46,NULL,NULL,'index',113,114),(49,46,NULL,NULL,'view',115,116),(50,46,NULL,NULL,'add',117,118),(51,46,NULL,NULL,'edit',119,120),(52,46,NULL,NULL,'delete',121,122),(53,46,NULL,NULL,'getComunicaciones',123,124),(54,47,NULL,NULL,'index',135,136),(55,47,NULL,NULL,'view',137,138),(56,47,NULL,NULL,'add',139,140),(57,47,NULL,NULL,'edit',141,142),(58,47,NULL,NULL,'delete',143,144),(59,1,NULL,NULL,'Directorios',154,175),(60,59,NULL,NULL,'index',155,156),(61,59,NULL,NULL,'view',157,158),(62,59,NULL,NULL,'add',159,160),(63,59,NULL,NULL,'edit',161,162),(64,59,NULL,NULL,'delete',163,164),(65,59,NULL,NULL,'getDirectorios',165,166),(66,1,NULL,NULL,'Puntos',176,195),(67,66,NULL,NULL,'index',177,178),(68,66,NULL,NULL,'view',179,180),(69,66,NULL,NULL,'add',181,182),(70,66,NULL,NULL,'edit',183,184),(71,66,NULL,NULL,'delete',185,186),(72,2,NULL,NULL,'get_last_code',17,18),(73,2,NULL,NULL,'increase_contador',19,20),(74,39,NULL,NULL,'get_last_code',103,104),(75,39,NULL,NULL,'increase_contador',105,106),(76,46,NULL,NULL,'get_last_code',125,126),(77,46,NULL,NULL,'increase_contador',127,128),(78,47,NULL,NULL,'get_last_code',145,146),(79,47,NULL,NULL,'increase_contador',147,148),(80,59,NULL,NULL,'get_last_code',167,168),(81,59,NULL,NULL,'increase_contador',169,170),(82,8,NULL,NULL,'get_last_code',37,38),(83,8,NULL,NULL,'increase_contador',39,40),(84,20,NULL,NULL,'get_last_code',49,50),(85,20,NULL,NULL,'increase_contador',51,52),(86,66,NULL,NULL,'get_last_code',187,188),(87,66,NULL,NULL,'increase_contador',189,190),(88,22,NULL,NULL,'get_last_code',81,82),(89,22,NULL,NULL,'increase_contador',83,84),(90,2,NULL,NULL,'decrease_contador',21,22),(91,39,NULL,NULL,'decrease_contador',107,108),(92,46,NULL,NULL,'decrease_contador',129,130),(93,47,NULL,NULL,'decrease_contador',149,150),(94,59,NULL,NULL,'decrease_contador',171,172),(95,8,NULL,NULL,'decrease_contador',41,42),(96,20,NULL,NULL,'decrease_contador',53,54),(97,66,NULL,NULL,'decrease_contador',191,192),(98,22,NULL,NULL,'decrease_contador',85,86),(99,2,NULL,NULL,'download',23,24),(100,39,NULL,NULL,'download',109,110),(101,46,NULL,NULL,'download',131,132),(102,47,NULL,NULL,'download',151,152),(103,59,NULL,NULL,'download',173,174),(104,8,NULL,NULL,'download',43,44),(105,20,NULL,NULL,'download',55,56),(106,66,NULL,NULL,'download',193,194),(107,22,NULL,NULL,'download',87,88),(108,1,NULL,NULL,'Upload',196,197);
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,NULL,'Group',2,NULL,5,16),(3,NULL,'Group',3,NULL,17,18),(4,NULL,'Group',4,NULL,19,20),(5,NULL,'Group',5,NULL,21,22),(6,NULL,'Group',6,NULL,23,24),(7,NULL,'Group',7,NULL,25,26),(8,NULL,'Group',8,NULL,27,28),(9,NULL,'Group',9,NULL,29,34),(10,NULL,'Group',99,NULL,35,36),(11,1,'User',1,NULL,2,3),(12,2,'User',5,NULL,6,7),(13,2,'User',7,NULL,8,9),(14,2,'User',8,NULL,10,11),(15,2,'User',9,NULL,12,13),(16,2,'User',10,NULL,14,15),(17,9,'User',11,NULL,30,31),(18,9,'User',12,NULL,32,33);
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones`
--

LOCK TABLES `asignaciones` WRITE;
/*!40000 ALTER TABLE `asignaciones` DISABLE KEYS */;
INSERT INTO `asignaciones` VALUES (59,'A000000001',1,2,4,'estoe  para todos test','esto es para todos test EDITADA',100,100,14,'2014-07-30 15:42:37','2014-08-06 15:42:37',NULL,NULL,0,1,4,1,'2014-07-31 15:42:44','2014-07-31 15:50:57'),(61,'A000000002',1,12,1,'test 2 ','test 2 ',100,0,33,'2014-07-30 15:45:11','2014-08-02 15:45:11',NULL,NULL,0,5,6,1,'2014-07-31 15:45:18','2014-07-31 15:51:15'),(62,'A000000003',1,2,1,'Esto solo para alfredo','adsadas das asd',100,0,100,'2014-07-31 15:49:58','2014-07-31 15:49:58',NULL,NULL,0,7,8,1,'2014-07-31 15:50:08','2014-07-31 15:50:08');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones_users`
--

LOCK TABLES `asignaciones_users` WRITE;
/*!40000 ALTER TABLE `asignaciones_users` DISABLE KEYS */;
INSERT INTO `asignaciones_users` VALUES (5,1,59,1),(6,2,59,1),(7,5,59,1),(8,7,59,1),(9,8,59,1),(10,9,59,1),(11,10,59,1),(12,11,59,1),(13,12,59,1),(14,9,62,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` VALUES (36,'Comunicacione',50,'logo_yireh','692944264-logo_yireh.png','files/comunicaciones/','image/png',255868,1);
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
/*!40000 ALTER TABLE `avances` ENABLE KEYS */;
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
  `titulo` text NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones`
--

LOCK TABLES `comunicaciones` WRITE;
/*!40000 ALTER TABLE `comunicaciones` DISABLE KEYS */;
INSERT INTO `comunicaciones` VALUES (45,'C000000001',11,'test','test','2014-07-31 15:16:30','2014-07-31 15:14:54',NULL,NULL,1,2,0,1,'2014-07-31 15:16:30','2014-07-31 15:16:43'),(46,'C000000002',1,'Ilich mira este problema','Tengo este asunto','2014-07-31 15:18:16','2014-07-31 15:17:59',NULL,NULL,3,4,0,1,'2014-07-31 15:18:16','2014-07-31 15:18:16'),(47,'C000000003',1,'Test','Este si es para ti','2014-07-31 15:29:38','2014-07-31 15:29:29',NULL,NULL,5,10,0,1,'2014-07-31 15:29:38','2014-07-31 16:23:18'),(48,'',12,'>> Test','esta es de ser ldap para wuilliam\r\n--Mensaje Original--\r\n>> Este si es para ti','2014-07-31 15:52:36','2014-07-31 15:52:36',NULL,47,6,9,0,1,'2014-07-31 15:52:36','2014-07-31 15:52:36'),(49,'',1,'>> >> Test','Esta muy bien, sigue asi\r\n--Mensaje Original--\r\n>> esta es de ser ldap para wuilliam\r\n\r\n>> Este si es para ti','2014-07-31 15:53:08','2014-07-31 15:52:36',NULL,48,7,8,0,1,'2014-07-31 15:53:08','2014-07-31 15:53:08'),(50,'C000000004',1,'test para todos con adjunto','a todos','2014-07-31 16:19:30','2014-07-31 16:19:04',NULL,NULL,11,12,0,1,'2014-07-31 16:19:30','2014-07-31 16:23:08');
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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones_users`
--

LOCK TABLES `comunicaciones_users` WRITE;
/*!40000 ALTER TABLE `comunicaciones_users` DISABLE KEYS */;
INSERT INTO `comunicaciones_users` VALUES (43,45,1,1),(44,46,11,1),(45,47,12,1),(46,48,1,1),(47,49,12,1),(48,50,1,1),(49,50,2,1),(50,50,5,1),(51,50,7,1),(52,50,8,1),(53,50,9,1),(54,50,10,1),(55,50,11,1),(56,50,12,1);
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
  `objetivo` text NOT NULL,
  `detalles` text NOT NULL,
  `es_nueva` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios`
--

LOCK TABLES `directorios` WRITE;
/*!40000 ALTER TABLE `directorios` DISABLE KEYS */;
INSERT INTO `directorios` VALUES (5,'D000000001','2014-07-31 16:03:51','2014-07-31 16:03:51','privado','solo asdasdsad das da ',1,'2014-07-31 16:04:01','2014-07-31 16:04:01'),(6,'D000000002','2014-07-31 16:04:14','2014-07-31 16:04:14','Directorio para todos','alkdaskljsadas ljkasdkljdsalkdslkjads ',1,'2014-07-31 16:04:24','2014-07-31 16:04:24');
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios_users`
--

LOCK TABLES `directorios_users` WRITE;
/*!40000 ALTER TABLE `directorios_users` DISABLE KEYS */;
INSERT INTO `directorios_users` VALUES (32,1,5,1),(33,2,5,1),(34,1,6,1),(35,2,6,1),(36,5,6,1),(37,7,6,1),(38,8,6,1),(39,9,6,1),(40,10,6,1),(41,11,6,1),(42,12,6,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` VALUES (1,1,2,'test',NULL,1,4,'2014-07-22 11:09:09'),(2,2,1,'test',1,2,3,'2014-07-22 11:09:47');
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
INSERT INTO `parametros` VALUES (1,'contador_asignaciones','3',NULL),(2,'contador_comunicaciones','4',NULL),(3,'contador_directorio','2',NULL);
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
  `detalles` text NOT NULL,
  `directorio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_puntos_directorios1_idx` (`directorio_id`),
  CONSTRAINT `fk_puntos_directorios1` FOREIGN KEY (`directorio_id`) REFERENCES `directorios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
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

-- Dump completed on 2014-07-31 16:24:07
