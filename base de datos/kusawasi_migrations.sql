-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: kusawasi
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_06_30_113500_create_comments_table',1),(4,'2019_06_21_072335_create_brands_table',1),(5,'2019_06_22_195158_create_products_table',1),(6,'2019_06_23_175717_create_tags_table',1),(7,'2019_06_24_180345_create-product-tags-table',1),(8,'2019_06_24_196106_create_attributes_table',1),(9,'2019_06_24_197339_create_attribute__values_table',1),(10,'2019_06_25_101245_create_categories_table',1),(11,'2019_06_25_102602_create_category__products_table',1),(12,'2019_06_25_121417_create_photos_table',1),(13,'2019_06_25_143737_create_colors_table',1),(14,'2019_06_25_144246_create_color_products_table',1),(15,'2019_08_26_143052_create_addresses_table',1),(16,'2019_08_29_171350_create_gift_cards_table',1),(17,'2019_08_30_082406_create_check_gift_table',1),(18,'2019_08_31_140221_create_orders_table',1),(19,'2019_08_31_140419_create_details_orders_table',1),(20,'2019_10_12_080836_create_ratings_table',1),(21,'2019_12_15_144438_create_permission_tables',1),(22,'2019_12_17_195443_create_settings_table',1),(23,'2019_12_18_165629_create_favorites_table',1),(24,'2019_12_26_081413_create_payments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-18 14:18:00
