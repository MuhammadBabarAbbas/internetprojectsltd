/*
SQLyog Ultimate v8.55 
MySQL - 8.0.31 : Database - fruits
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fruits` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `fruits`;

/*Table structure for table `doctrine_migration_versions` */

DROP TABLE IF EXISTS `doctrine_migration_versions`;

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `doctrine_migration_versions` */

insert  into `doctrine_migration_versions`(`version`,`executed_at`,`execution_time`) values ('DoctrineMigrations\\Version20230411201020','2023-04-11 20:11:17',67);

/*Table structure for table `fruit` */

DROP TABLE IF EXISTS `fruit`;

CREATE TABLE `fruit` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genus` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nutritions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favorite` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fruit` */

insert  into `fruit`(`id`,`name`,`family`,`ordar`,`genus`,`nutritions`,`favorite`) values (1,'Banana','Musaceae','Zingiberales','Musa','{\"calories\":96,\"fat\":0.2,\"sugar\":17.2,\"carbohydrates\":22,\"protein\":1}',0),(2,'Orange','Rutaceae','Sapindales','Citrus','{\"calories\":43,\"fat\":0.2,\"sugar\":8.2,\"carbohydrates\":8.3,\"protein\":1}',0),(3,'Strawberry','Rosaceae','Rosales','Fragaria','{\"calories\":29,\"fat\":0.4,\"sugar\":5.4,\"carbohydrates\":5.5,\"protein\":0.8}',1),(4,'Pear','Rosaceae','Rosales','Pyrus','{\"calories\":57,\"fat\":0.1,\"sugar\":10,\"carbohydrates\":15,\"protein\":0.4}',1),(5,'Tomato','Solanaceae','Solanales','Solanum','{\"calories\":74,\"fat\":0.2,\"sugar\":2.6,\"carbohydrates\":3.9,\"protein\":0.9}',1),(6,'Apple','Rosaceae','Rosales','Malus','{\"calories\":52,\"fat\":0.4,\"sugar\":10.3,\"carbohydrates\":11.4,\"protein\":0.3}',0),(9,'Cherry','Rosaceae','Rosales','Prunus','{\"calories\":50,\"fat\":0.3,\"sugar\":8,\"carbohydrates\":12,\"protein\":1}',0),(10,'Pineapple','Bromeliaceae','Poales','Ananas','{\"calories\":50,\"fat\":0.12,\"sugar\":9.85,\"carbohydrates\":13.12,\"protein\":0.54}',0),(23,'Raspberry','Rosaceae','Rosales','Rubus','{\"calories\":53,\"fat\":0.7,\"sugar\":4.4,\"carbohydrates\":12,\"protein\":1.2}',0),(25,'Watermelon','Cucurbitaceae','Cucurbitales','Citrullus','{\"calories\":30,\"fat\":0.2,\"sugar\":6,\"carbohydrates\":8,\"protein\":0.6}',0),(26,'Lemon','Rutaceae','Sapindales','Citrus','{\"calories\":29,\"fat\":0.3,\"sugar\":2.5,\"carbohydrates\":9,\"protein\":1.1}',0),(27,'Mango','Anacardiaceae','Sapindales','Mangifera','{\"calories\":60,\"fat\":0.38,\"sugar\":13.7,\"carbohydrates\":15,\"protein\":0.82}',0),(33,'Blueberry','Rosaceae','Rosales','Fragaria','{\"calories\":29,\"fat\":0.4,\"sugar\":5.4,\"carbohydrates\":5.5,\"protein\":0}',0),(35,'Apricot','Rosaceae','Rosales','Prunus','{\"calories\":15,\"fat\":0.1,\"sugar\":3.2,\"carbohydrates\":3.9,\"protein\":0.5}',0),(37,'Guava','Myrtaceae','Myrtales','Psidium','{\"calories\":68,\"fat\":1,\"sugar\":9,\"carbohydrates\":14,\"protein\":2.6}',0),(41,'Melon','Cucurbitaceae','Cucurbitaceae','Cucumis','{\"calories\":34,\"fat\":0,\"sugar\":8,\"carbohydrates\":8,\"protein\":0}',0),(42,'Papaya','Caricaceae','Caricacea','Carica','{\"calories\":43,\"fat\":0.4,\"sugar\":1,\"carbohydrates\":11,\"protein\":0}',1),(44,'Lime','Rutaceae','Sapindales','Citrus','{\"calories\":25,\"fat\":0.1,\"sugar\":1.7,\"carbohydrates\":8.4,\"protein\":0.3}',1),(52,'Persimmon','Ebenaceae','Rosales','Diospyros','{\"calories\":81,\"fat\":0,\"sugar\":18,\"carbohydrates\":18,\"protein\":0}',0),(60,'Durian','Malvaceae','Malvales','Durio','{\"calories\":147,\"fat\":5.3,\"sugar\":6.75,\"carbohydrates\":27.1,\"protein\":1.5}',0),(64,'Blackberry','Rosaceae','Rosales','Rubus','{\"calories\":40,\"fat\":0.4,\"sugar\":4.5,\"carbohydrates\":9,\"protein\":1.3}',1),(65,'Lingonberry','Ericaceae','Ericales','Vaccinium','{\"calories\":50,\"fat\":0.34,\"sugar\":5.74,\"carbohydrates\":11.3,\"protein\":0.75}',1),(66,'Kiwi','Actinidiaceae','Struthioniformes','Apteryx','{\"calories\":61,\"fat\":0.5,\"sugar\":9,\"carbohydrates\":15,\"protein\":1.1}',0),(67,'Lychee','Sapindaceae','Sapindales','Litchi','{\"calories\":66,\"fat\":0.44,\"sugar\":15,\"carbohydrates\":17,\"protein\":0.8}',0),(68,'Fig','Moraceae','Rosales','Ficus','{\"calories\":74,\"fat\":0.3,\"sugar\":16,\"carbohydrates\":19,\"protein\":0.8}',0),(69,'Gooseberry','Grossulariaceae','Saxifragales','Ribes','{\"calories\":44,\"fat\":0.6,\"sugar\":0,\"carbohydrates\":10,\"protein\":0.9}',0),(70,'Passionfruit','Passifloraceae','Malpighiales','Passiflora','{\"calories\":97,\"fat\":0.7,\"sugar\":11.2,\"carbohydrates\":22.4,\"protein\":2.2}',0),(71,'Plum','Rosaceae','Rosales','Prunus','{\"calories\":46,\"fat\":0.28,\"sugar\":9.92,\"carbohydrates\":11.4,\"protein\":0.7}',0),(72,'GreenApple','Rosaceae','Rosales','Malus','{\"calories\":21,\"fat\":0.1,\"sugar\":6.4,\"carbohydrates\":3.1,\"protein\":0.4}',0),(76,'Feijoa','Myrtaceae','Myrtoideae','Sellowiana','{\"calories\":44,\"fat\":0.4,\"sugar\":3,\"carbohydrates\":8,\"protein\":0.6}',0),(77,'Tangerine','Rutaceae','Sapindales','Citrus','{\"calories\":45,\"fat\":0.4,\"sugar\":9.1,\"carbohydrates\":8.3,\"protein\":0}',0),(78,'Pitahaya','Cactaceae','Caryophyllales','Cactaceae','{\"calories\":36,\"fat\":0.4,\"sugar\":3,\"carbohydrates\":7,\"protein\":1}',1),(79,'Pomegranate','Lythraceae','Myrtales','Punica','{\"calories\":83,\"fat\":1.2,\"sugar\":13.7,\"carbohydrates\":18.7,\"protein\":1.7}',0),(80,'Dragonfruit','Cactaceae','Caryophyllales','Selenicereus','{\"calories\":60,\"fat\":1.5,\"sugar\":8,\"carbohydrates\":9,\"protein\":9}',1),(81,'Grape','Vitaceae','Vitales','Vitis','{\"calories\":69,\"fat\":0.16,\"sugar\":16,\"carbohydrates\":18.1,\"protein\":0.72}',1),(82,'Morus','Moraceae','Rosales','Morus','{\"calories\":43,\"fat\":0.39,\"sugar\":8.1,\"carbohydrates\":9.8,\"protein\":1.44}',0),(84,'Avocado','Lauraceae','Laurales','Persea','{\"calories\":160,\"fat\":14.66,\"sugar\":0.66,\"carbohydrates\":8.53,\"protein\":2}',0),(85,'Kiwifruit','Actinidiaceae','Ericales','Actinidia','{\"calories\":61,\"fat\":0.5,\"sugar\":8.9,\"carbohydrates\":14.6,\"protein\":1.14}',0),(86,'Peach','Rosaceae','Rosales','Prunus','{\"calories\":39,\"fat\":0.25,\"sugar\":8.4,\"carbohydrates\":9.5,\"protein\":0.9}',0),(87,'Cranberry','Ericaceae','Ericales','Vaccinium','{\"calories\":46,\"fat\":0.1,\"sugar\":4,\"carbohydrates\":12.2,\"protein\":0.4}',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
