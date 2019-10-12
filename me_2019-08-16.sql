# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: me
# Generation Time: 2019-08-16 09:22:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table abouts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `abouts`;

CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `col1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;

INSERT INTO `abouts` (`id`, `title`, `description`, `col1`, `col2`, `col3`, `col4`, `title1`, `created_at`, `updated_at`)
VALUES
	(1,'WHO AM I ?','<p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>','Web Design','Android','Web Developer','UI/UX','I am happy to know you  that 300+ projects done sucessfully!','2019-08-07 23:07:06','2019-08-09 06:40:14');

/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table education
# ------------------------------------------------------------

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;

INSERT INTO `education` (`id`, `title`, `title1`, `description1`, `title2`, `description2`, `title3`, `description3`, `title4`, `description4`, `title5`, `description5`, `created_at`, `updated_at`)
VALUES
	(1,'l','ml','kjlk','l','lk',';lk','l;k','lkl;','k','kljkl','jkl','2019-08-14 05:01:12','2019-08-14 05:01:12');

/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table homes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `homes`;

CREATE TABLE `homes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `homes` WRITE;
/*!40000 ALTER TABLE `homes` DISABLE KEYS */;

INSERT INTO `homes` (`id`, `title`, `description`, `file`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'Hi! <br> I\'m Ali','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed','files/r9UCzcaVDs7mt6ZNWNaHZC8uJgT7ZnIqns4EyJO7.pdf','images/STL8bo2AYfEFFuq73WBc7O8Ob5s6akouiE8DiuKg.jpeg','2019-08-06 22:12:46','2019-08-07 05:59:09'),
	(2,'I\'m Programmer','Lorem ipsum dolor sit amet, consectetur adipisicing','files/YipRO9p7l1lBSBhcJ65mxW0h1U55HgYqyyST4dRI.pdf','images/1tsUpCiLUfWHc9iM0AdabmJ37I9n5Qk3Z6IO3Pj9.jpeg','2019-08-06 22:20:08','2019-08-07 05:55:34');

/*!40000 ALTER TABLE `homes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kas`;

CREATE TABLE `kas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kas` WRITE;
/*!40000 ALTER TABLE `kas` DISABLE KEYS */;

INSERT INTO `kas` (`id`, `item`, `qty`, `harga`, `total`, `created_at`, `updated_at`)
VALUES
	(1,'Topi','1','1000','1000','2019-08-15 23:39:45','2019-08-15 23:39:45'),
	(2,'Sepatu 1','2','5000','10000','2019-08-15 23:47:04','2019-08-16 00:00:07'),
	(4,'Kursi','2','10000','20000','2019-08-16 00:07:35','2019-08-16 00:07:35'),
	(6,'sfd','23','243','4','2019-08-16 00:49:08','2019-08-16 00:49:08'),
	(7,'meja','3','100','3004','2019-08-16 01:00:17','2019-08-16 01:00:24'),
	(8,'tas','2','100','2002','2019-08-16 01:32:04','2019-08-16 01:32:10'),
	(9,'roti','2','100','200','2019-08-16 01:58:35','2019-08-16 01:58:35'),
	(10,'papan','4','3000','12000','2019-08-16 02:11:03','2019-08-16 02:11:18');

/*!40000 ALTER TABLE `kas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(4,'2014_10_12_000000_create_users_table',1),
	(5,'2014_10_12_100000_create_password_resets_table',1),
	(6,'2019_07_29_034347_create_posts_table',1),
	(8,'2019_08_06_160120_create_homes_table',2),
	(10,'2019_08_08_031049_create_abouts_table',3),
	(11,'2019_08_09_011137_create_services_table',4),
	(12,'2019_08_13_053821_create_skills_table',5),
	(13,'2019_08_14_112818_create_education_table',6),
	(15,'2019_08_16_061755_create_kas_table',7);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'Rasa Jeruk','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','images/KDiSv39IkxpHrhnmq9Apmq2ZMqY3cEN5cRSNoCYM.jpeg','2019-08-04 01:28:53','2019-08-04 01:30:44'),
	(2,'Malam Dingin','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','images/xha3KA2oGgZE0SaiQg5vpErRW7AETEeRRdXB8WKQ.jpeg','2019-08-04 09:36:57','2019-08-04 09:36:57');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `title`, `title1`, `description1`, `title2`, `description2`, `title3`, `description3`, `title4`, `description4`, `title5`, `description5`, `title6`, `description6`, `image`, `title7`, `title8`, `title9`, `title10`, `created_at`, `updated_at`)
VALUES
	(1,'HERE ARE SOME OF MY EXPERTISE','Judul1','Separated they live in Bookmarksgrove right at the coast of the Semantics','judul2','Separated they live in Bookmarksgrove right at the coast of the Semantics','judul3','Separated they live in Bookmarksgrove right at the coast of the Semantics','judul4','Separated they live in Bookmarksgrove right at the coast of the Semantics','judul5','Separated they live in Bookmarksgrove right at the coast of the Semantics','judul6','Separated they live in Bookmarksgrove right at the coast of the Semantics','images/8SEFsrWND3hyXBAJYBSMwKmGq0VRqZK1RxRs8NzD.png','judul7','judul8','judul9','judul10','2019-08-08 22:55:11','2019-08-09 06:53:03');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;

INSERT INTO `skills` (`id`, `title`, `description`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `created_at`, `updated_at`)
VALUES
	(1,'MY SKILLS','<p>Lorem ipsum dolor sit <strong>amet</strong>, consectetur adipisicing</p>','lore','lore','dlsafds','KJIOJ','LKJKL','JK','2019-08-12 23:19:55','2019-08-13 00:18:37');

/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Moh Ali','mohali@gmail.com',NULL,'$2y$10$WIstvD1Htw4dvFH/By/xN.brDntM15PnH3q4U9PC8PPrwXCWx2wgq',NULL,'2019-08-04 01:26:46','2019-08-04 01:26:46');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
