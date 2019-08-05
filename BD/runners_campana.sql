-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: laravel-database
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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


DROP DATABASE IF EXISTS runners_campana;
CREATE DATABASE runners_campana;
USE runners_campana;

--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `weight` float(3,1) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `role` int(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `users`
--
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,NULL,'Hernan','Bueno','M',37,69,170,'hernan@gmail.com','123456','fotohernan.jpg',9),(2,NULL,NULL,'Esteban','Angeletti','M',36,71,172,'esteban@gmail.com','123456','fotoesteban.jpg',1),(3,NULL,NULL,'Cintia','Beron','F',32,67,170,'cintia@gmail.com','123456','fotocintia.jpg',1),(4,NULL,NULL,'Joaquin','Combet','M',16,50,155,'joaquin@gmail.com','123456','fotojoaquin.jpg',1),(5,NULL,NULL,'Alejandra','Morello','F',34,57,160,'alejandra@gmail.com','123456','fotoalejandra.jpg',1),(6,NULL,NULL,'Giselle','Britez','F',21,53,170,'giselle@gmail.com','123456','fotogiselle.jpg',1),(7,NULL,NULL,'Piera','Pedemonte','F',30,55,161,'piera@gmail.com','123456','fotopiera.jpg',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goals`
--
DROP TABLE IF EXISTS `goals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `goals`
--
LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;
INSERT INTO `goals` VALUES (1,NULL,NULL,'Maraton de Buenos Aires','2019-09-22'),(2,NULL,NULL,'Media Maraton de Buenos Aires','2019-08-25'),(3,NULL,NULL,'15K NB Buenos Aires','2019-08-04'),(4,NULL,NULL,'15K NB Rosario','2019-10-06'),(5,NULL,NULL,'30K Puente Rosario-Victoria','2019-09-08');
/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_goals`
--
DROP TABLE IF EXISTS `users_goals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_goals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `goal_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_goals_user_id_foreign` (`user_id`),
  KEY `user_goals_goal_id_foreign` (`goal_id`),
  CONSTRAINT `user_goals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `user_goals_goal_id_foreign` FOREIGN KEY (`goal_id`) REFERENCES `goals` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `users_goals`
--
LOCK TABLES `users_goals` WRITE;
/*!40000 ALTER TABLE `users_goals` DISABLE KEYS */;
INSERT INTO `users_goals` VALUES (1,NULL,NULL,1,2),(2,NULL,NULL,2,1),(3,NULL,NULL,2,2),(4,NULL,NULL,2,3),(5,NULL,NULL,2,4),(6,NULL,NULL,2,5),(7,NULL,NULL,7,2);
/*!40000 ALTER TABLE `users_goals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_sessions`
--
DROP TABLE IF EXISTS `training_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_sessions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `training_sessions`
--
LOCK TABLES `training_sessions` WRITE;
/*!40000 ALTER TABLE `training_sessions` DISABLE KEYS */;
INSERT INTO `training_sessions` VALUES (1,NULL,NULL,'6 pasadas de 200m','2019-07-10'),(2,NULL,NULL,'8 pasadas de 200m','2019-07-10'),(3,NULL,NULL,'10 pasadas de 200m','2019-07-10'),(4,NULL,NULL,'Testeo de 1 km','2019-07-11'),(5,NULL,NULL,'45 min de trote ritmo progresivo','2019-07-12'),(6,NULL,NULL,'10 km, 5 km a 5:15 y 5 km a 5:00','2019-07-13'),(7,NULL,NULL,'10 km, 5 km a 5:45 y 5 km a 5:35','2019-07-13');
/*!40000 ALTER TABLE `training_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_training_sessions`
--
DROP TABLE IF EXISTS `users_training_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_training_sessions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `training_session_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_training_sessions_user_id_foreign` (`user_id`),
  KEY `user_training_sessions_training_session_id_foreign` (`training_session_id`),
  CONSTRAINT `user_training_sessions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `user_training_sessions_training_session_id_foreign` FOREIGN KEY (`training_session_id`) REFERENCES `training_sessions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `users_training_sessions`
--
LOCK TABLES `users_training_sessions` WRITE;
/*!40000 ALTER TABLE `users_training_sessions` DISABLE KEYS */;
INSERT INTO `users_training_sessions` VALUES (1,NULL,NULL,1,1),(2,NULL,NULL,1,2),(3,NULL,NULL,1,3),(4,NULL,NULL,1,4),(5,NULL,NULL,1,3),(6,NULL,NULL,1,5),(7,NULL,NULL,1,3),(8,NULL,NULL,1,6),(9,NULL,NULL,2,1),(10,NULL,NULL,2,2),(11,NULL,NULL,2,3),(12,NULL,NULL,2,4),(13,NULL,NULL,2,3),(14,NULL,NULL,2,5),(15,NULL,NULL,2,3),(16,NULL,NULL,2,6);
/*!40000 ALTER TABLE `users_training_sessions` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-12 10:09:28
