-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: localhost    Database: ggm
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `ggm_map_config`
--

DROP TABLE IF EXISTS `ggm_map_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ggm_map_config` (
  `id` int(11) NOT NULL,
  `map_width` varchar(45) DEFAULT NULL,
  `map_height` varchar(45) DEFAULT NULL,
  `map_lat` int(11) DEFAULT NULL,
  `map_long` int(11) DEFAULT NULL,
  `zoom_value` varchar(100) DEFAULT NULL,
  `zoom_control_options` varchar(100) DEFAULT NULL,
  `zoom_control_pos` varchar(100) DEFAULT NULL,
  `type_control` varchar(100) DEFAULT NULL,
  `type_control_pos` varchar(100) DEFAULT NULL,
  `pan_control` varchar(100) DEFAULT NULL,
  `pan_control_pos` varchar(100) DEFAULT NULL,
  `scale_control` varchar(100) DEFAULT NULL,
  `scale_control_pos` varchar(100) DEFAULT NULL,
  `filter_options` varchar(100) DEFAULT NULL,
  `page_options` varchar(100) DEFAULT NULL,
  `map_created` datetime DEFAULT NULL,
  `map_updated` datetime DEFAULT NULL,
  `map_status` tinyint(1) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ggm_map_config`
--

LOCK TABLES `ggm_map_config` WRITE;
/*!40000 ALTER TABLE `ggm_map_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `ggm_map_config` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-09 16:20:07
