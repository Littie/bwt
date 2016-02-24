-- MySQL dump 10.13  Distrib 5.5.47, for Win32 (x86)
--
-- Host: localhost    Database: bwt_test
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `message` text,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id_idx` (`user_id`),
  KEY `fk_guest_id_idx` (`guest_id`),
  CONSTRAINT `fk_guest_id` FOREIGN KEY (`guest_id`) REFERENCES `guest_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,1,NULL,'Клара у Карла украла корралы','2016-02-15 10:00:00'),(2,2,NULL,'Бла бла бла бла бла','2016-02-16 10:00:00'),(3,1,NULL,'Message','0000-00-00 00:00:00'),(4,1,NULL,'Hello, I am Ivan','0000-00-00 00:00:00'),(5,1,NULL,'With time','2016-02-22 11:50:50'),(6,1,NULL,'My name is ...','2016-02-22 12:17:13'),(7,5,NULL,'Baton is awesome','2016-02-22 12:19:13'),(8,6,NULL,'Lisij Lisij Lisij Lisij Lisij ','2016-02-22 12:22:55'),(9,7,NULL,'I will be back!!!!','2016-02-22 23:33:38'),(10,1,NULL,'With right capcha','2016-02-22 23:45:41'),(11,1,NULL,'bla bla bla bla','2016-02-23 00:19:20'),(12,NULL,2,'blaaaaaaaa','2016-02-24 14:00:20'),(13,NULL,3,'bla blaaaaaaaaaaaaaaaaaaaaaaaa','2016-02-24 14:00:20'),(14,NULL,3,'aaaaaaaaaaaaaaaaaaaaa','2016-02-24 15:00:20'),(15,NULL,4,'Petrovna la la la la','2016-02-24 14:31:25');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest_users`
--

DROP TABLE IF EXISTS `guest_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guest_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest_users`
--

LOCK TABLES `guest_users` WRITE;
/*!40000 ALTER TABLE `guest_users` DISABLE KEYS */;
INSERT INTO `guest_users` VALUES (2,'max','max@gmail.com'),(3,'sem','sem@gmail.com'),(4,'Petrovna','petrovna@gmail.com');
/*!40000 ALTER TABLE `guest_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `surename` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `sex` enum('male','female') DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ivan','Ivanov','827ccb0eea8a706c4c34a16891f84e7b','ivanov@gmail.com','male','1986-12-12'),(2,'Vasja','Vasiliev','e10adc3949ba59abbe56e057f20f883e','vasiliev@gmail.com','male','1995-03-15'),(3,'Artem','Polik','810159a253f77b53f94f4a4ec3517d69','artem@gmail.com','','0000-00-00'),(4,'Vovan','Vovanchik','e10adc3949ba59abbe56e057f20f883e','vovan@gmail.com','male','1999-11-23'),(5,'Baton','','','baton@gmail.com',NULL,NULL),(6,'Lisij','','084e0343a0486ff05530df6c705c8bb4','lisij@gmail.com',NULL,NULL),(7,'Kop','','084e0343a0486ff05530df6c705c8bb4','kop@gmail.com',NULL,NULL),(10,'Bolt','Boltovich','d41d8cd98f00b204e9800998ecf8427e','bolt@gmail.com','','0000-00-00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-24 15:36:56
