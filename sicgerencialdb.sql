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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,100),(2,1,NULL,NULL,'Asignaciones',2,19),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,1,NULL,NULL,'Groups',20,31),(9,8,NULL,NULL,'index',21,22),(10,8,NULL,NULL,'view',23,24),(11,8,NULL,NULL,'add',25,26),(12,8,NULL,NULL,'edit',27,28),(13,8,NULL,NULL,'delete',29,30),(20,1,NULL,NULL,'Pages',32,35),(21,20,NULL,NULL,'display',33,34),(22,1,NULL,NULL,'Users',36,59),(23,22,NULL,NULL,'index',37,38),(24,22,NULL,NULL,'view',39,40),(25,22,NULL,NULL,'add',41,42),(26,22,NULL,NULL,'edit',43,44),(27,22,NULL,NULL,'delete',45,46),(28,22,NULL,NULL,'profile',47,48),(29,22,NULL,NULL,'login',49,50),(30,22,NULL,NULL,'logout',51,52),(31,22,NULL,NULL,'checkAro',53,54),(32,22,NULL,NULL,'initDB',55,56),(33,22,NULL,NULL,'rebuildARO',57,58),(34,1,NULL,NULL,'AclExtras',60,61),(36,2,NULL,NULL,'getAsignacionesByTipo',13,14),(37,2,NULL,NULL,'getAsignaciones',15,16),(39,1,NULL,NULL,'Avances',62,73),(40,39,NULL,NULL,'index',63,64),(41,39,NULL,NULL,'view',65,66),(42,39,NULL,NULL,'add',67,68),(43,39,NULL,NULL,'edit',69,70),(44,39,NULL,NULL,'delete',71,72),(45,2,NULL,NULL,'finalizar',17,18),(46,1,NULL,NULL,'Comunicaciones',74,87),(47,1,NULL,NULL,'Correcciones',88,99),(48,46,NULL,NULL,'index',75,76),(49,46,NULL,NULL,'view',77,78),(50,46,NULL,NULL,'add',79,80),(51,46,NULL,NULL,'edit',81,82),(52,46,NULL,NULL,'delete',83,84),(53,46,NULL,NULL,'getComunicaciones',85,86),(54,47,NULL,NULL,'index',89,90),(55,47,NULL,NULL,'view',91,92),(56,47,NULL,NULL,'add',93,94),(57,47,NULL,NULL,'edit',95,96),(58,47,NULL,NULL,'delete',97,98);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adjuntos`
--

DROP TABLE IF EXISTS `adjuntos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adjuntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asignacione_id` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `created` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_asignacionadjuntos_asignaciones1_idx` (`asignacione_id`),
  CONSTRAINT `fk_asignacionadjuntos_asignaciones1` FOREIGN KEY (`asignacione_id`) REFERENCES `asignaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos`
--

LOCK TABLES `adjuntos` WRITE;
/*!40000 ALTER TABLE `adjuntos` DISABLE KEYS */;
/*!40000 ALTER TABLE `adjuntos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,NULL,'Group',2,NULL,5,16),(3,NULL,'Group',3,NULL,17,18),(4,NULL,'Group',4,NULL,19,20),(5,NULL,'Group',5,NULL,21,22),(6,NULL,'Group',6,NULL,23,24),(7,NULL,'Group',7,NULL,25,26),(8,NULL,'Group',8,NULL,27,28),(9,NULL,'Group',9,NULL,29,32),(10,NULL,'Group',99,NULL,33,34),(11,1,'User',1,NULL,2,3),(12,2,'User',5,NULL,6,7),(13,2,'User',7,NULL,8,9),(14,2,'User',8,NULL,10,11),(15,2,'User',9,NULL,12,13),(16,2,'User',10,NULL,14,15),(17,9,'User',11,NULL,30,31);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1');
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
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones`
--

LOCK TABLES `asignaciones` WRITE;
/*!40000 ALTER TABLE `asignaciones` DISABLE KEYS */;
INSERT INTO `asignaciones` VALUES (42,'001',1,10,1,'Hacer tal cosa con tal cosa','Debes hacer esto con esto con esto mas esto en esto con lo otro ir a tal lado con tal carro de tal lugar y vovler para hacer esto lo otro y esto. Para el 31 urgente!',100,0,0,'2014-07-29 15:32:00','2014-07-31 15:32:00',NULL,NULL,0,1,2,'2014-07-29 15:32:41','2014-07-29 15:33:19');
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
  PRIMARY KEY (`id`),
  KEY `fk_asignaciones_users_asignaciones_idx` (`asignacione_id`),
  CONSTRAINT `fk_asignaciones_users_asignaciones` FOREIGN KEY (`asignacione_id`) REFERENCES `asignaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaciones_users`
--

LOCK TABLES `asignaciones_users` WRITE;
/*!40000 ALTER TABLE `asignaciones_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignaciones_users` ENABLE KEYS */;
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
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_avances_asignaciones1_idx` (`asignacione_id`),
  CONSTRAINT `fk_avances_asignaciones1` FOREIGN KEY (`asignacione_id`) REFERENCES `asignaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
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
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones`
--

LOCK TABLES `comunicaciones` WRITE;
/*!40000 ALTER TABLE `comunicaciones` DISABLE KEYS */;
INSERT INTO `comunicaciones` VALUES (1,'001',1,'tes','test','2014-07-29 16:19:00','2014-07-29 16:19:00','2014-07-29 16:19:00',NULL,1,6,0,'2014-07-29 16:20:01','2014-07-29 16:22:47'),(2,'',2,'asdasdasd','asdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds aasdasd asd sds ds a','2014-07-29 16:22:00','2014-07-29 16:22:00','2014-07-29 16:22:00',1,2,5,0,'2014-07-29 16:23:00','2014-07-29 16:27:14'),(3,'',1,'adsdas','adsdasdsaads','2014-07-29 16:23:00','2014-07-29 16:23:00','2014-07-29 16:23:00',2,3,4,0,'2014-07-29 16:23:22','2014-07-29 16:23:22');
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
  PRIMARY KEY (`id`),
  KEY `fk_comunicaciones_users_comunicaciones1_idx` (`comunicacione_id`),
  CONSTRAINT `fk_comunicaciones_users_comunicaciones1` FOREIGN KEY (`comunicacione_id`) REFERENCES `comunicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones_users`
--

LOCK TABLES `comunicaciones_users` WRITE;
/*!40000 ALTER TABLE `comunicaciones_users` DISABLE KEYS */;
INSERT INTO `comunicaciones_users` VALUES (2,1,2),(3,2,1),(4,3,2);
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-29 16:34:37
