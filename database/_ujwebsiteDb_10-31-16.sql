# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: web_db
# Generation Time: 2016-10-31 07:06:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2016_10_24_214513_create_navigations_table',1),
	('2016_10_25_145016_create_sub_navigations_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table navigations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `navigations`;

CREATE TABLE `navigations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `has_sub_nav` int(11) NOT NULL,
  `visible` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `navigations` WRITE;
/*!40000 ALTER TABLE `navigations` DISABLE KEYS */;

INSERT INTO `navigations` (`id`, `name`, `slug`, `position`, `has_sub_nav`, `visible`, `weight`, `icon`, `created_at`, `updated_at`)
VALUES
	(1,'Home','home',1,0,1,1,'fa fa-home','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(2,'About','About',2,1,1,1,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(3,'Strategic Plan','Strategic Plan',3,0,1,1,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(4,'Useful Links','Useful Links',4,1,1,0,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(5,'Faculties/Directorates','Faculties/Directorates',5,1,1,1,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(6,'Portal','Portal',6,1,1,1,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(7,'Campuses','Campuses',7,1,1,1,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(8,'Contact','Contact',8,0,1,0,'','2016-10-27 09:20:01','2016-10-27 09:20:01'),
	(9,'Communities','Communities',9,1,1,1,'','2016-10-27 09:20:01','2016-10-27 09:20:01');

/*!40000 ALTER TABLE `navigations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `visible` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `name`, `slug`, `position`, `content`, `visible`, `weight`, `icon`, `author_id`, `created_at`, `updated_at`)
VALUES
	(1,'test','email',0,'Test Page Example One',0,0,'',0,NULL,NULL);

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table sub_navigations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_navigations`;

CREATE TABLE `sub_navigations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `navigations_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `visible` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sub_navigations` WRITE;
/*!40000 ALTER TABLE `sub_navigations` DISABLE KEYS */;

INSERT INTO `sub_navigations` (`id`, `navigations_id`, `name`, `slug`, `position`, `content`, `visible`, `weight`, `icon`, `created_at`, `updated_at`)
VALUES
	(1,2,'Future Development','Future Development',1,'University of Jos, Future Development',1,1,'',NULL,NULL),
	(2,2,'Facts and Figures','Facts and Figures',1,'University of Jos, Facts and Figures',1,1,'',NULL,NULL),
	(3,2,'History','History',1,'University of Jos, History',1,1,'',NULL,NULL),
	(4,2,'Mission and Vision','Mission and Vision',1,'University of Jos, Mission and Vision',1,1,'',NULL,NULL),
	(5,2,'Act','Act',1,'University of Jos, Act',1,1,'',NULL,NULL),
	(6,2,'Anthem','Anthem',1,'University of Jos, Anthem',1,1,'',NULL,NULL),
	(7,2,'Governing Council','Governing Council',1,'University of Jos, Governing Council',1,1,'',NULL,NULL),
	(8,2,'Management','Management',1,'University of Jos, Management',1,1,'',NULL,NULL),
	(9,6,'eLearning','eLearning',1,'University of Jos, Learning Management System MOODLE',1,1,'',NULL,NULL),
	(10,6,'Email','eMail',1,'University of Jos, Mail Service System',1,1,'',NULL,NULL),
	(11,6,'iRepository','iRepository',1,'University of Jos, Institutional Repository',1,1,'',NULL,NULL),
	(12,5,'Directorates','Directorates',1,'University of Jos, Directorates',1,1,'',NULL,NULL),
	(13,5,'Faculties','Faculties',1,'University of Jos, Faculties',1,1,'',NULL,NULL),
	(14,5,'Institutes','Institutes',1,'University of Jos, Institutes',1,1,'',NULL,NULL),
	(15,5,'Centers','Centers',1,'University of Jos, Centers',1,1,'',NULL,NULL),
	(16,6,'Staff','Staff',1,'University of Jos, Staff',1,1,'',NULL,NULL),
	(17,6,'Students','Students',1,'University of Jos, Students',1,1,'',NULL,NULL),
	(18,6,'Parent & Family','Parent & Family',1,'University of Jos, Parent & Family',1,1,'',NULL,NULL),
	(19,7,'Main Campus','Main Campus',1,'University of Jos, Main Campus, Bauchi Road',1,1,'',NULL,NULL),
	(20,7,'JUTH Campus','JUTH Campus',1,'University of Jos,JUTH Campus, Medical School',1,1,'',NULL,NULL),
	(21,7,'Naraguta Campus','Naraguta Campus',1,'University of Jos, Naraguta Campus',1,1,'',NULL,NULL),
	(22,9,'Staff School','Staff School',1,'University of Jos, Staff School',1,1,'',NULL,NULL),
	(23,9,'Women Association','Women Association',1,'University of Jos, Women Association',1,1,'',NULL,NULL),
	(24,9,'Multipurpose Cooperative  Society','Multipurpose Cooperative  Society',1,'University of Jos, Multipurpose Cooperative  Society',1,1,'',NULL,NULL),
	(25,9,'Consultancy Services','Consultancy Services',1,'University of Jos, Consultancy Services',1,1,'',NULL,NULL),
	(26,9,'Security Unit','Security Unit',1,'University of Jos, Security Unit',1,1,'',NULL,NULL),
	(27,9,'Press','Press',1,'University of Jos, Press',1,1,'',NULL,NULL),
	(28,9,'Hotel','Hotel',1,'University of Jos, Hotel',1,1,'',NULL,NULL),
	(29,9,'Student Union Government','SUG',1,'University of Jos, Student Union Government (SUG)',1,1,'',NULL,NULL),
	(30,9,'Christian Chapel','Christian Chapel',1,'University of Jos, Christian Chapel',1,1,'',NULL,NULL),
	(31,9,'Muslim Umma','Muslim Umma',1,'University of Jos, Muslim Umma',1,1,'',NULL,NULL),
	(32,6,'Alumni','Alumni',1,'University of Jos, Alumni',1,1,'',NULL,NULL),
	(33,7,'Old Campus','Old Campus',1,'University of Jos, Old Campus, Gangare',1,1,'',NULL,NULL);

/*!40000 ALTER TABLE `sub_navigations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_number` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin_user` tinyint(2) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `othername` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `secret_question_id` tinyint(2) NOT NULL,
  `secret_answer` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `suspended` tinyint(2) NOT NULL,
  `visible` tinyint(2) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `unique_number`, `is_admin_user`, `username`, `surname`, `firstname`, `othername`, `email`, `phone_number`, `password`, `address`, `secret_question_id`, `secret_answer`, `suspended`, `visible`, `slug`, `last_login`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'4444',0,'ghaji','Mohammed','Ahmed','Ghaji','mohammedghaji@gmail.com','08036338821','$2y$10$f3FD2pI5985QQRrAtWweIuEyEW8BrrBS5j5UwUt2418HZ.X.RVJ5u','ICT Directorate University of Jos',1,'Ahmad',0,1,'ghaji','2016-10-29 18:46:09','FNDUZXoOGS4aGtKNZ8VCMTwUuWTewf76Sm1W2yfAJp2mT9NLitZEBBtmTB5d','2016-10-27 09:20:01','2016-10-30 11:47:20'),
	(2,'5555',0,'iman','Mohammed','Rabi','Ghaji','mohammedghaji@yahoo.com','08036338822','$2y$10$f3FD2pI5985QQRrAtWweIuEyEW8BrrBS5j5UwUt2418HZ.X.RVJ5u','H65 Race course filling Sukuwa Jos Plateau State Nigeria',1,'Imaan',1,0,'imaan','2016-10-29 18:46:09','PyDKMmyeDzGoygWUVV3jSjdNUs33uSD7XQarfLfEqNm2RqKwY2sHMfhkzvlr','2016-10-27 09:20:01','2016-10-29 18:46:09'),
	(4,'5693',2,'imaan','Mohammed','Mohammed','Ghaji','talk2ahmed555@yahoo.com','08093007589','$2y$10$06VopGyYvz09AgKvHM2FH.FMAwUDTzE6w8/S7sOIzUwH8kZZKsk9S','ICT Directorate Unijos',0,'',0,1,'imaan',NULL,NULL,'2016-10-30 11:37:23','2016-10-30 11:37:23'),
	(5,'5313',3,'shaheedu','Mohammed','Shaheed','Ghaji','talk2ahmed555@unijos.edu.com','08093007581','$2y$10$RrQd/kjN4B3VXNO/tms6JeWY20SMi8nm6Raok5aYgJHqpWlJHybem','Race Course Filling Sukuwa Jos',0,'',1,1,'shaheedu',NULL,NULL,'2016-10-30 11:40:30','2016-10-30 11:40:30'),
	(6,'5314',1,'kega','Yahaya','Halima','Kega','halimakega@gmail.com','08065358841','$2y$10$5ww5gs/xQBWh.VTCW4eweeQzFQuS1L7DsMiDm3INEBbG.zsUlvAGe','H65 Race Course Filling Sukuwa Jos Plateau State Nigeria...',0,'',0,1,'kega',NULL,NULL,'2016-10-30 11:43:02','2016-10-31 05:24:31');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
