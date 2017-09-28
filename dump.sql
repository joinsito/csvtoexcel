-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: excels
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Current Database: `excels`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `excels` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `excels`;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(45) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,'australian_rail_495815725.xls','2017-09-23 22:52:53'),(2,'australian_rail_951727246.xls','2017-09-23 22:53:59'),(3,'australian_rail_1227372789.xls','2017-09-23 22:54:09'),(4,'australian_rail_1863292579.xls','2017-09-23 22:54:51'),(5,'australian_rail_2076543001.xls','2017-09-23 22:55:27'),(6,'australian_rail_1812917135.xls','2017-09-23 22:55:41'),(7,'australian_rail_256748282.xls','2017-09-23 22:59:42'),(8,'australian_rail_572741873.xls','2017-09-23 23:25:42'),(9,'australian_rail_1436916039.xls','2017-09-23 23:25:51'),(10,'australian_rail_1253349891.xls','2017-09-23 23:26:37'),(11,'australian_rail_750466968.xls','2017-09-23 23:26:39'),(12,'australian_rail_1054133580.xls','2017-09-23 23:27:31'),(13,'australian_rail_270043182.xls','2017-09-23 23:45:53'),(14,'australian_rail_1310735350.xls','2017-09-23 23:46:23'),(15,'\'australian_rail_468924030.xls','2017-09-23 23:46:56'),(16,'australian_rail_561408901.xls','2017-09-23 23:48:25'),(17,'australian_rail_310766288.xls','2017-09-23 23:48:39'),(18,'australian_rail_462240511.xls','2017-09-24 21:25:48'),(19,'australian_rail_1975844850.xls','2017-09-24 21:26:09'),(20,'australian_rail_154204057.xls','2017-09-26 21:57:50'),(21,'australian_rail_555812255.xls','2017-09-26 21:57:53'),(22,'australian_rail_1971191186.xls','2017-09-27 14:55:18'),(23,'australian_rail_1387688145.xls','2017-09-27 14:55:45'),(24,'australian_rail_434088306.xls','2017-09-27 16:34:42');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-27 16:47:28
