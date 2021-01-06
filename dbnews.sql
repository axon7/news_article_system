-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: news_article_system
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `article_authors`
--

DROP TABLE IF EXISTS `article_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_authors`
--

LOCK TABLES `article_authors` WRITE;
/*!40000 ALTER TABLE `article_authors` DISABLE KEYS */;
INSERT INTO `article_authors` VALUES (1,1,13,'2021-01-03 19:29:29'),(2,1,14,'2021-01-06 19:29:35'),(3,2,15,'2021-01-03 19:29:40'),(4,2,16,'2021-01-03 21:55:34'),(5,2,17,'2021-01-03 21:55:50'),(6,1,18,'2021-01-03 21:56:55'),(7,1,19,'2021-01-06 21:56:58'),(8,6,20,'2021-01-02 21:59:49'),(9,9,21,'2021-01-02 22:00:27');
/*!40000 ALTER TABLE `article_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'title 1','text 1','2020-10-01 21:42:59'),(2,'title 2','title 2','2020-10-01 21:43:06'),(3,'title 3 ','text 3','2020-10-01 21:43:13'),(4,'title 4','text 4','2020-10-01 21:43:54'),(5,'title 5','text 5','2020-10-01 21:44:02'),(6,'title 6','text 6','2020-10-01 21:44:29'),(7,'title 7','text 7','2020-10-01 21:44:36'),(8,'title 8','text 8','2020-10-01 21:44:46'),(9,'title 9 ','text 9','2020-10-01 21:44:54'),(10,'dupa','weojr','2020-10-02 00:03:43'),(11,'werwer','werwrwerwer','2021-01-06 15:03:48'),(12,'dupa','dddd','2021-01-06 15:04:48'),(13,'dupa','qwrqwrqw','2021-01-06 19:29:29'),(14,'qwrqwrqw','qwrqwrqr','2021-01-06 19:29:35'),(15,'qwrqwrqwqgg','egrger','2021-01-06 19:29:40'),(16,'wer','wefw','2021-01-06 21:55:34'),(17,'dupa','qwe','2021-01-06 21:55:50'),(18,'test','wewefwef','2021-01-06 21:56:55'),(19,'wefwe','wef','2021-01-06 21:56:58'),(20,'wefwe','wef','2021-01-06 21:59:49'),(21,'wef','ewf','2021-01-06 22:00:27');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Author A'),(2,'Author B'),(3,'Author C'),(4,'Author D'),(5,'Author E'),(6,'Author F'),(7,'Author G'),(8,'Author H'),(9,'Author I'),(10,'Author J');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-06 22:18:46
