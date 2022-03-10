-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: futbol1
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `partits`
--

DROP TABLE IF EXISTS `partits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` timestamp NULL DEFAULT NULL,
  `equipLocal_id` bigint(20) unsigned DEFAULT NULL,
  `equipVisitant_id` bigint(20) unsigned DEFAULT NULL,
  `golsLocal` int(11) NOT NULL,
  `golsVisitant` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partits_equiplocal_id_foreign` (`equipLocal_id`),
  KEY `partits_equipvisitant_id_foreign` (`equipVisitant_id`),
  CONSTRAINT `partits_equiplocal_id_foreign` FOREIGN KEY (`equipLocal_id`) REFERENCES `equips` (`id`) ON DELETE SET NULL,
  CONSTRAINT `partits_equipvisitant_id_foreign` FOREIGN KEY (`equipVisitant_id`) REFERENCES `equips` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partits`
--

LOCK TABLES `partits` WRITE;
/*!40000 ALTER TABLE `partits` DISABLE KEYS */;
INSERT INTO `partits` VALUES (1,'2022-03-08 09:47:04',1,2,6,0,NULL,'2022-03-08 09:08:37'),(4,'2003-12-31 16:00:00',2,1,2,1,NULL,NULL),(5,'2022-07-08 10:00:00',1,2,3,3,NULL,NULL),(6,'2022-04-08 10:00:00',3,1,0,1,'2022-03-08 14:44:42','2022-03-08 14:45:08'),(7,'2022-03-07 23:00:00',4,3,1,0,'2022-03-09 16:55:04','2022-03-09 16:55:04');
/*!40000 ALTER TABLE `partits` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-10 15:50:14
