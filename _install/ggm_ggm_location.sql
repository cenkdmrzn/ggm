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
-- Table structure for table `ggm_location`
--

DROP TABLE IF EXISTS `ggm_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ggm_location` (
  `id` int(11) NOT NULL,
  `loc_name` varchar(100) DEFAULT NULL,
  `loc_lat` varchar(45) DEFAULT NULL,
  `loc_long` varchar(45) DEFAULT NULL,
  `loc_address` varchar(100) DEFAULT NULL,
  `loc_city` varchar(45) DEFAULT NULL,
  `loc_state` varchar(45) DEFAULT NULL,
  `loc_zipcode` varchar(45) DEFAULT NULL,
  `loc_phone` varchar(45) DEFAULT NULL,
  `loc_fax` varchar(45) DEFAULT NULL,
  `loc_email` varchar(45) DEFAULT NULL,
  `loc_website` varchar(45) DEFAULT NULL,
  `loc_image` varchar(200) DEFAULT NULL,
  `loc_hours` varchar(200) DEFAULT NULL,
  `loc_info` varchar(200) DEFAULT NULL,
  `loc_created` datetime DEFAULT NULL,
  `loc_updated` datetime DEFAULT NULL,
  `loc_sort_order` int(11) DEFAULT NULL,
  `loc_status` tinyint(1) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ggm_location`
--

LOCK TABLES `ggm_location` WRITE;
/*!40000 ALTER TABLE `ggm_location` DISABLE KEYS */;
/*!40000 ALTER TABLE `ggm_location` ENABLE KEYS */;
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
