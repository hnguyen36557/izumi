-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: izumi
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `cates`
--

DROP TABLE IF EXISTS `cates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cates`
--

LOCK TABLES `cates` WRITE;
/*!40000 ALTER TABLE `cates` DISABLE KEYS */;
INSERT INTO `cates` VALUES (1,'Áo','ao',0,'2016-08-19 08:53:38','2016-08-19 08:53:38'),(2,'Quần','quan',0,'2016-08-19 08:53:52','2016-08-19 08:53:52'),(3,'Đầm','dam',0,'2016-08-19 08:54:01','2016-08-19 08:54:01'),(4,'Váy','vay',0,'2016-08-19 08:54:26','2016-08-19 08:54:26'),(5,'Áo Nam','ao-nam',1,'2016-08-19 08:54:44','2016-08-19 08:54:44'),(6,'Áo Nữ','ao-nu',1,'2016-08-19 08:55:00','2016-08-19 08:55:00'),(7,'Áo Tay Dài','ao-tay-dai',1,'2016-08-19 08:55:19','2016-08-19 08:55:19'),(8,'Áo Tay Ngắn','ao-tay-ngan',1,'2016-08-19 08:55:36','2016-08-19 08:55:36'),(9,'Quần Tây Nam','quan-tay-nam',2,'2016-08-19 08:56:05','2016-08-19 08:56:05'),(10,'Quần Tây Nữ','quan-tay-nu',2,'2016-08-19 08:56:32','2016-08-19 08:56:32'),(11,'Quần Jean Nam','quan-jean-nam',2,'2016-08-19 08:56:58','2016-08-19 08:56:58'),(12,'Quần Jean Nữ','quan-jean-nu',2,'2016-08-19 08:57:34','2016-08-19 08:57:34'),(13,'Đầm Bầu','dam-bau',3,'2016-08-19 08:58:26','2016-08-19 08:58:26'),(14,'Đầm Xòe','dam-xoe',3,'2016-08-19 08:58:54','2016-08-19 09:04:20'),(15,'Đầm Dạ Hội','dam-da-hoi',3,'2016-08-19 08:59:14','2016-08-19 08:59:14');
/*!40000 ALTER TABLE `cates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_08_16_021150_create_cates_table',1),('2016_08_16_030950_create_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,14,'Đần Xòe Tay Ngắn','dan-xoe-tay-ngan',5000000,'<p>\r\n	B&agrave;i viết cho sản phẩm đang được cập nhật</p>\r\n',0,'product1.jpg','nokia','qưeqweqwe','','2016-08-19 09:06:39','2016-08-19 09:06:39'),(2,7,'Áo Jean Nam','ao-jean-nam',5400000,'<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật</p>\r\n',0,'product13.jpg','','','fffffffffffffffffffffffffffffff','2016-08-19 09:12:09','2016-08-19 09:12:09'),(3,3,'Đầm Voan Mỏng','dam-voan-mong',5800000,'<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật</p>\r\n',400000,'product6.jpg','lg','fffffffffffffffffffffffffff','','2016-08-19 09:14:20','2016-08-19 09:14:20'),(4,4,'TV LG 4000','tv-lg-4000',4000000,'<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật</p>\r\n',200000,'product2.jpg','apple','ahdkhaskdhas','','2016-08-19 09:20:48','2016-08-19 09:20:48'),(5,3,'Tv Panasonic','tv-panasonic',6000000,'<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật</p>\r\n',0,'product3.jpg','lenovo','ahdkahdkjahsd','','2016-08-19 09:28:12','2016-08-19 09:28:12'),(6,10,'TV Samsung','tv-samsung',5500000,'<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật</p>\r\n',0,'product4.jpg','blackberry','adjalkjdad','','2016-08-19 09:30:09','2016-08-19 09:30:09'),(7,10,'Tv LG 5000','tv-lg-5000',5000000,'<p>\r 	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật</p>\r ',0,'product5.jpg','htv','ádasdasdasd','','2016-08-19 09:31:10','2016-08-19 09:31:10'),(8,6,'Tv JVC 500','tv-jvc-500',10000000,'<p>\r\n	B&agrave;i viết của sản phẩm n&agrave;y đang được cập nhật</p>\r\n',500000,'product7.jpg','Samsung','áhdjahsd','','2016-08-19 09:32:15','2016-08-19 09:32:15');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2016-08-19  9:56:18
