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
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `attribute_values`
--

LOCK TABLES `attribute_values` WRITE;
/*!40000 ALTER TABLE `attribute_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `attribute_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `check_gift`
--

LOCK TABLES `check_gift` WRITE;
/*!40000 ALTER TABLE `check_gift` DISABLE KEYS */;
/*!40000 ALTER TABLE `check_gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `color_product`
--

LOCK TABLES `color_product` WRITE;
/*!40000 ALTER TABLE `color_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `color_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'negro','#000000'),(2,'plata','#C0C0C0'),(3,'gris','#808080'),(4,'blanco','#FFFFFF'),(5,'granate','#800000'),(6,'rojo','#FF0000'),(7,'purpura','#800080'),(8,'fucsia','#FF00FF'),(9,'verde','#008000'),(10,'lima','#00FF00'),(11,'olivo','#808000'),(12,'amarillo','#FFFF00'),(13,'azul marino','#000080'),(14,'azul','#0000FF'),(15,'azul verdoso','#008080'),(16,'agua','#00FFFF'),(17,'azul oscuro','#00008B'),(18,'azul medio','#0000CD'),(19,'verde oscuro','#006400'),(20,'cian oscuro','#008B8B'),(21,'celeste profundo','#00BFFF'),(22,'turquesa oscuro','#00CED1'),(23,'verde primavera medio','#00FA9A'),(24,'verde primavera','#00FF7F'),(25,'cian','#00FFFF'),(26,'azul medianoche','#191970'),(27,'verde marino claro','#20B2AA'),(28,'verde bosque','#228B22'),(29,'verde marino','#2E8B57'),(30,'gris oscuro','#2F4F4F'),(31,'verde lima','#32CD32'),(32,'verde marino medio','#3CB371'),(33,'turquesa','#40E0D0'),(34,'azul real','#4169E1'),(35,'azul acero','#4682B4'),(36,'turquesa medio','#48D1CC'),(37,'indigo','#4B0082'),(38,'verde olivo medio','#556B2F'),(39,'azul cadete','#5F9EA0'),(40,'agua marina medio','#66CDAA'),(41,'gris tenue','#696969'),(42,'verde cesped','#7CFC00'),(43,'agua marina','#7FFFD4'),(44,'celeste','#87CEEB'),(45,'celeste claro','#87CEFA'),(46,'azul violeta','#8A2BE2'),(47,'rojo oscuro','#8B0000'),(48,'magenta oscuro','#8B008B'),(49,'verde claro','#90EE90'),(50,'purpura medio','#9370DB'),(51,'violeta oscuro','#9400D3'),(52,'verde palido','#98FB98'),(53,'orquidea oscuro','#9932CC'),(54,'amarillo verdoso','#9ACD32'),(55,'marron','#A52A2A'),(56,'chocolate','#D2691E'),(57,'orquidea','#DA70D6'),(58,'carmesi','#DC143C'),(59,'ciruela','#DDA0DD'),(60,'lavanda','#E6E6FA'),(61,'violeta','#EE82EE'),(62,'coral claro','#F08080'),(63,'azure','#F0FFFF'),(64,'beige','#F5F5DC'),(65,'blanco humo','#F5F5F5'),(66,'salmon','#FA8072'),(67,'magenta','#FF00FF'),(68,'anaranjado','#FF4500'),(69,'tomate','#FF6347'),(70,'coral','#FF7F50'),(71,'naranja oscuro','#FF8C00'),(72,'naranja','#FFA500'),(73,'rosa','#FFC0CB'),(74,'dorado','#FFD700'),(75,'mocasin','#FFE4B5'),(76,'nieve','#FFFAFA'),(77,'amarillo claro','#FFFFE0');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `details_orders`
--

LOCK TABLES `details_orders` WRITE;
/*!40000 ALTER TABLE `details_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `details_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `gift_cards`
--

LOCK TABLES `gift_cards` WRITE;
/*!40000 ALTER TABLE `gift_cards` DISABLE KEYS */;
/*!40000 ALTER TABLE `gift_cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_06_30_113500_create_comments_table',1),(4,'2019_06_21_072335_create_brands_table',1),(5,'2019_06_22_195158_create_products_table',1),(6,'2019_06_23_175717_create_tags_table',1),(7,'2019_06_24_180345_create-product-tags-table',1),(8,'2019_06_24_196106_create_attributes_table',1),(9,'2019_06_24_197339_create_attribute__values_table',1),(10,'2019_06_25_101245_create_categories_table',1),(11,'2019_06_25_102602_create_category__products_table',1),(12,'2019_06_25_121417_create_photos_table',1),(13,'2019_06_25_143737_create_colors_table',1),(14,'2019_06_25_144246_create_color_products_table',1),(15,'2019_08_26_143052_create_addresses_table',1),(16,'2019_08_29_171350_create_gift_cards_table',1),(17,'2019_08_30_082406_create_check_gift_table',1),(18,'2019_08_31_140221_create_orders_table',1),(19,'2019_08_31_140419_create_details_orders_table',1),(20,'2019_10_12_080836_create_ratings_table',1),(21,'2019_12_15_144438_create_permission_tables',1),(22,'2019_12_17_195443_create_settings_table',1),(23,'2019_12_18_165629_create_favorites_table',1),(24,'2019_12_26_081413_create_payments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','web','2020-11-17 05:26:56','2020-11-17 05:26:56'),(2,'role-create','web','2020-11-17 05:26:56','2020-11-17 05:26:56'),(3,'role-edit','web','2020-11-17 05:26:56','2020-11-17 05:26:56'),(4,'role-delete','web','2020-11-17 05:26:56','2020-11-17 05:26:56'),(5,'product-list','web','2020-11-17 05:26:56','2020-11-17 05:26:56'),(6,'product-create','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(7,'product-edit','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(8,'product-delete','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(9,'order-list','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(10,'order-create','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(11,'order-edit','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(12,'order-delete','web','2020-11-17 05:26:57','2020-11-17 05:26:57'),(13,'gift-list','web','2020-11-17 05:26:58','2020-11-17 05:26:58'),(14,'gift-create','web','2020-11-17 05:26:58','2020-11-17 05:26:58'),(15,'gift-edit','web','2020-11-17 05:26:58','2020-11-17 05:26:58'),(16,'gift-delete','web','2020-11-17 05:26:58','2020-11-17 05:26:58'),(17,'see-dashboard','web','2020-11-17 05:26:58','2020-11-17 05:26:58');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `product_tags`
--

LOCK TABLES `product_tags` WRITE;
/*!40000 ALTER TABLE `product_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super-admin','can do anything','web',NULL,NULL),(2,'employee','can edit and create products , add new brands and categories , manage comments','web',NULL,NULL),(3,'author','can create products , manage comments ','web',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Kusawasi','Kusawasi','setting_eplus.png','setting_e.png','Lima, Peru','+51 987654321','equipokusawasi@gmail.com','+51 987654321');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_has_permissions`
--

LOCK TABLES `user_has_permissions` WRITE;
/*!40000 ALTER TABLE `user_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_has_roles`
--

LOCK TABLES `user_has_roles` WRITE;
/*!40000 ALTER TABLE `user_has_roles` DISABLE KEYS */;
INSERT INTO `user_has_roles` VALUES (1,'App\\User',1);
/*!40000 ALTER TABLE `user_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','equipo@kusawasi.com',NULL,NULL,'$2y$10$J0SC5bBaZtaf4uLXmEuGLup7Q4veMv3wglBqJPK3N5f9PVHslB0Ka',NULL,'2020-11-18 21:28:31','2020-11-18 21:28:31');
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

-- Dump completed on 2020-11-18 16:37:38
