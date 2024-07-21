-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: technotour
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `booking`
--
CREATE DATABASE technotour;
USE technotour;
DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `b_tittle` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `start_time` int DEFAULT NULL,
  `end_time` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total_atten` int DEFAULT NULL,
  `total_external` int DEFAULT NULL,
  `no_room` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`),
  CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (3,'event test',4,5,'2023-04-17',70,15,'A104',45,4),(4,'amr booking',4,5,'2023-04-19',100,15,'A105',41,4),(7,'event test 2',2,4,'2023-04-10',40,20,'A105',41,4),(11,'event test 2',1,3,'2023-04-16',60,10,'A106',46,4),(12,'sdfsdf',5,7,'2023-04-23',34,10,'A102',42,4),(16,'event test 2',5,7,'2023-05-10',100,15,'A106',46,23),(17,'event test 2',2,4,'2023-06-12',100,20,'A105',41,23),(18,'event test 2',1,2,'2023-06-13',50,10,'A105',41,23),(19,'fast booking',3,5,'2023-06-13',0,0,'41',41,23),(20,'Booking test ',5,6,'2023-06-14',NULL,NULL,'47',47,23),(21,'adasd',5,7,'2023-06-18',NULL,NULL,'41',41,23),(22,'fast booking',1,1,'2023-06-20',NULL,NULL,'42',42,23),(23,'fast booking',6,8,'2023-06-20',NULL,NULL,'42',42,23),(24,'event test 2',2,4,'2023-06-25',100,20,'A108',48,23),(25,'fast booking',2,4,'2023-06-25',NULL,NULL,'44',44,23),(26,'book test',3,4,'2023-06-25',NULL,NULL,'48',48,23),(27,'test90',2,4,'2023-06-27',NULL,NULL,'53',53,23),(28,'test 33',1,3,'2023-07-04',NULL,NULL,'41',41,23),(29,'sdfx',2,3,'2023-07-04',NULL,NULL,'47',47,23);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `broadcast`
--

DROP TABLE IF EXISTS `broadcast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `broadcast` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `caption` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_broadcast` (`user_id`),
  CONSTRAINT `user_broadcast` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `broadcast`
--

LOCK TABLES `broadcast` WRITE;
/*!40000 ALTER TABLE `broadcast` DISABLE KEYS */;
INSERT INTO `broadcast` VALUES (40,23,'the learning i getting bigger and bigger and the world need this technology for the future.<br />\r\ntechno tour team has made this website for the NCTU to make everything easy.','posts/6780566124 photo.png','2023-06-16','05:45:21'),(42,23,'3d model of room A206 is available now <br />\r\n<br />\r\nSee here : <a href=\"./rooms.php?theme=b\">A206 </a>','posts/1577265817 photo.png','2023-06-16','05:46:23'),(43,23,'New Cairo Technological University is offering courses in ICT field (CCNA,AI,CCNP, Machine learning)<br />\r\n','posts/6332034529 photo.png','2023-06-16','05:45:54'),(47,23,'Techno Tour Poster','posts/9175258822 photo.png','2023-07-01','04:56:35');
/*!40000 ALTER TABLE `broadcast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user1_id` int DEFAULT NULL,
  `user2_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user1_id` (`user1_id`,`user2_id`),
  KEY `user2_id` (`user2_id`),
  CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`user1_id`) REFERENCES `members` (`id`),
  CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`user2_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (13,4,24),(4,23,4),(15,23,20),(3,23,23),(11,23,24),(14,24,20),(12,24,24);
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dr_ass`
--

DROP TABLE IF EXISTS `dr_ass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dr_ass` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `position` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `dr_eng_dr_ass` (`user_id`),
  CONSTRAINT `dr_eng_dr_ass` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dr_ass`
--

LOCK TABLES `dr_ass` WRITE;
/*!40000 ALTER TABLE `dr_ass` DISABLE KEYS */;
INSERT INTO `dr_ass` VALUES (3,'mohmed khamis',20,'Assisstant'),(6,'amr khamis',23,'Dr'),(7,'shahd aboelkaramat',24,'Dr');
/*!40000 ALTER TABLE `dr_ass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lname` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(700) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `position` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (4,'Tecnho','Tour','TechnoTour2023@gmail.com','$2y$10$NIojxYL9LD9/En1oIUqT/.xA7i.vSjXhwRmPfBqbFZ3o9Neh/uVoe','Dr',NULL,''),(20,'mohmed','khamis','mhamedkhamiis@gmail.com','$2y$10$TSxEYNHiVe4vnaulonT6ReG88kdh.EGa8Zp.bWtETfXcldVsT617C','Assisstant',NULL,'5X96KSOZWJ'),(23,'amr','khamis','khamisamr90@gmail.com','$2y$10$NIojxYL9LD9/En1oIUqT/.xA7i.vSjXhwRmPfBqbFZ3o9Neh/uVoe','Dr','khamisamr90@gmail.com photo.png','ROGH6ZK9C5'),(24,'shahd','aboelkaramat','amrk99504@gmail.com','$2y$10$9kehOHLZwmh8etMTMnqIH.24Rx6njkKJvueX9qjc0XoWWO9bbAUcG','Dr','amrk99504@gmail.com photo.png',''),(25,'amr','khamis','khamisamr902@gmail.com','$2y$10$NIojxYL9LD9/En1oIUqT/.xA7i.vSjXhwRmPfBqbFZ3o9Neh/uVoe','Technical',NULL,' ');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `chat_id` int DEFAULT NULL,
  `from_id` int DEFAULT NULL,
  `to_id` int DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chat_id` (`chat_id`,`from_id`,`to_id`),
  KEY `from_id` (`from_id`),
  KEY `to_id` (`to_id`),
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`id`),
  CONSTRAINT `message_ibfk_2` FOREIGN KEY (`from_id`) REFERENCES `members` (`id`),
  CONSTRAINT `message_ibfk_3` FOREIGN KEY (`to_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pcs`
--

DROP TABLE IF EXISTS `pcs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pc_num` int NOT NULL,
  `room_num` int NOT NULL,
  `state` int NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_num` (`room_num`),
  CONSTRAINT `pcs_ibfk_1` FOREIGN KEY (`room_num`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcs`
--

LOCK TABLES `pcs` WRITE;
/*!40000 ALTER TABLE `pcs` DISABLE KEYS */;
INSERT INTO `pcs` VALUES (1,1,54,1,''),(2,2,54,1,''),(3,3,54,1,''),(4,4,54,1,''),(5,5,54,1,''),(6,6,54,1,''),(7,7,54,1,''),(8,8,54,1,''),(9,9,54,1,''),(10,10,54,1,''),(11,11,54,1,''),(12,12,54,1,''),(13,13,54,1,''),(14,14,54,1,''),(15,15,54,1,''),(16,16,54,1,''),(17,17,54,1,''),(18,18,54,1,''),(19,19,54,1,''),(20,20,54,1,'');
/*!40000 ALTER TABLE `pcs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `report` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `room_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `report1` (`room_id`),
  KEY `report2` (`user_id`),
  CONSTRAINT `report1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  CONSTRAINT `report2` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_no` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pc_no` int DEFAULT NULL,
  `projector` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `condetioner` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fixed_pc` int DEFAULT NULL,
  `broken_pc` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (41,'A105',25,'good','good',0,0),(42,'A102',0,'good','good',0,0),(43,'A101',0,'good','good',0,0),(44,'A103',0,'good','good',0,0),(45,'A104',0,'good','good',0,0),(46,'A106',0,'good','good',0,0),(47,'A107',0,'good','good',0,0),(48,'A108',0,'good','good',0,0),(49,'A201',10,'good','good',0,0),(50,'A202',10,'good','good',0,0),(51,'A203',10,'good','good',0,0),(52,'A204',0,'good','good',0,0),(53,'A205',0,'good','good',0,0),(54,'A206',0,'good','good',0,0),(55,'A207',0,'good','good',0,0),(56,'A208',0,'good','good',0,0),(57,'A209',0,'good','good',0,0),(58,'A210',0,'good','good',0,0),(59,'A301',10,'good','good',0,0),(60,'A302',10,'good','good',0,0),(61,'A303',10,'good','good',0,0),(62,'A304',0,'good','good',0,0),(63,'A305',0,'good','good',0,0),(64,'A306',0,'good','good',0,0),(65,'A307',0,'good','good',0,0),(66,'A308',0,'good','good',0,0),(67,'A309',0,'good','good',0,0),(68,'A310',0,'good','good',0,0),(69,'A401',10,'good','good',0,0),(70,'A402',10,'good','good',0,0),(71,'A403',10,'good','good',0,0),(72,'A404',0,'good','good',0,0),(73,'A405',0,'good','good',0,0),(74,'A406',0,'good','good',0,0),(75,'A407',0,'good','good',0,0),(76,'A408',0,'good','good',0,0),(77,'A409',0,'good','good',0,0);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `time_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_id` int DEFAULT NULL,
  `start_time` int NOT NULL,
  `end_time` int NOT NULL,
  `weekday` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `sub_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `book` tinyint(1) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `sec` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`,`user_id`,`sub_name`),
  KEY `dr_eng_dr_ass7` (`user_id`),
  CONSTRAINT `dr_eng_dr_ass7` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`),
  CONSTRAINT `time_table_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_table`
--

LOCK TABLES `time_table` WRITE;
/*!40000 ALTER TABLE `time_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `time_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-05  3:56:51
