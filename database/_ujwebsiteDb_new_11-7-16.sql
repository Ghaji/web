# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: web_db
# Generation Time: 2016-11-07 04:48:40 +0000
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
	('2016_10_25_145016_create_sub_navigations_table',1),
	('2016_10_31_093901_create_news_table',1);

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
	(1,'Home','home',1,0,1,1,'fa fa-home','2016-11-01 13:44:48','2016-11-01 13:44:48'),
	(2,'About','about-us',2,1,1,1,'','2016-11-01 13:44:48','2016-11-01 13:44:48'),
	(6,'Portal','Portal',6,1,1,1,'','2016-11-01 13:44:48','2016-11-06 20:12:39'),
	(7,'Campuses','Campuses',7,1,1,1,'','2016-11-01 13:44:48','2016-11-06 19:12:42'),
	(8,'Contact','contact',8,0,1,0,'','2016-11-01 13:44:48','2016-11-01 13:44:48'),
	(9,'Communities','communities',9,1,1,1,'','2016-11-01 13:44:48','2016-11-01 13:44:48'),
	(10,'Strategic Plan','Strategic-Plan',3,0,1,1,'','2016-11-06 07:02:41','2016-11-06 12:46:25'),
	(11,'Useful-Links','Useful-links',4,1,0,0,'','2016-11-06 07:57:45','2016-11-06 18:47:59'),
	(12,'Faculties/Directorates','Faculties-Directorates',5,1,1,1,'','2016-11-06 12:52:19','2016-11-06 12:54:12');

/*!40000 ALTER TABLE `navigations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `itype` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `latest_news` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_line` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `has_image` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `visible` int(11) NOT NULL,
  `archived` int(11) NOT NULL,
  `archived_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archived_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verified` int(11) NOT NULL,
  `verified_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` int(11) NOT NULL,
  `deleted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_title_index` (`title`),
  KEY `news_display_line_index` (`display_line`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `itype`, `category_id`, `sub_category_id`, `latest_news`, `title`, `display_line`, `slug`, `content`, `has_image`, `image_id`, `position`, `visible`, `archived`, `archived_by`, `archived_date`, `author`, `verified`, `verified_by`, `verified_date`, `deleted`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`)
VALUES
	(1,7,0,0,1,'This is the Fisrt news Item','This is the Fisrt news Item','This-is-the-Fisrt-news-Item','In my previous post, you learn how you can create a simple CRUD(Create Read Update Delete) application with Laravel 5.2 , i hope after following steps you will create your first admin panel.\r\n\r\nNow I will tell you that how to create application with search , pagination and CRUD in Laravel 5.2 and AngularJS, kindly follow each step to create your first web application having modules with create, edit, delete, list, search and pagination functionality. Using AngularJS it is much more easier to work with events and workin with Laravel AngularJs then it make your application awesome. You must have knowledge about basic AngularJS before goint to create CRUD Application in Laravel AngularJS.\r\n\r\nIn my previous post, you learn how you can create a simple CRUD(Create Read Update Delete) application with Laravel 5.2 , i hope after following steps you will create your first admin panel.\r\n\r\nNow I will tell you that how to create application with search , pagination and CRUD in Laravel 5.2 and AngularJS, kindly follow each step to create your first web application having modules with create, edit, delete, list, search and pagination functionality. Using AngularJS it is much more easier to work with events and workin with Laravel AngularJs then it make your application awesome. You must have knowledge about basic AngularJS before goint to create CRUD Application in Laravel AngularJS.\r\n\r\nIn my previous post, you learn how you can create a simple CRUD(Create Read Update Delete) application with Laravel 5.2 , i hope after following steps you will create your first admin panel.\r\n\r\nNow I will tell you that how to create application with search , pagination and CRUD in Laravel 5.2 and AngularJS, kindly follow each step to create your first web application having modules with create, edit, delete, list, search and pagination functionality. Using AngularJS it is much more easier to work with events and workin with Laravel AngularJs then it make your application awesome. You must have knowledge about basic AngularJS before goint to create CRUD Application in Laravel AngularJS.',1,1,1,1,0,'','2016-11-06 20:26:12','Mohammed Ghaji',1,'Ghaji','0000-00-00 00:00:00',0,'','0000-00-00 00:00:00','2016-11-06 05:06:21','2016-11-06 19:26:12'),
	(2,2,0,0,1,'The New IJMB Programme is out please','The New IJMB Programme is out please','The-New-IJMB-Programme-is-out-please','This is another new new new This is another new new new This is another new new new This is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new <br>',1,0,1,1,0,'','2016-11-06 20:42:29','Ahmed Ghaji',0,'','0000-00-00 00:00:00',0,'','0000-00-00 00:00:00','2016-11-06 16:14:59','2016-11-06 19:42:29'),
	(3,1,0,0,1,'About the new University of Jos website','About the new University of Jos website','About-the-new-University-of-Jos-website','<h3>About the new University of Jos website<br></h3><p>It was hard for me to create rest API before but Laravel have developed with rest API concept.</p>\r\n<p>In this tutorial, i will tell you how to create rest API in Laravel \r\nwith resourceful routes for create, read, update and delete records.</p>\r\n<p>REST known as Representational State Transfer. A REST API basically \r\ndefine set of method which handle request of client and generate \r\nresponses via HTTP protocol such as GET and POST.</p>\r\n<p>Here i write a rest api in Laravel which return in response of JSON format.</p>\r\n<p>You can create rest APIs in minutes with Laravel.</p>\r\n<p>If you want to quickly create your first test API with Laravel then \r\nopen your routes.php and paste this code to see the response of API.</p><p>It was hard for me to create rest API before but Laravel have developed with rest API concept.</p>\r\n<p>In this tutorial, i will tell you how to create rest API in Laravel \r\nwith resourceful routes for create, read, update and delete records.</p>\r\n<p>REST known as Representational State Transfer. A REST API basically \r\ndefine set of method which handle request of client and generate \r\nresponses via HTTP protocol such as GET and POST.</p>\r\n<p>Here i write a rest api in Laravel which return in response of JSON format.</p>\r\n<p>You can create rest APIs in minutes with Laravel.</p>\r\n<p>If you want to quickly create your first test API with Laravel then \r\nopen your routes.php and paste this code to see the response of API.</p><p><br></p><p>It was hard for me to create rest API before but Laravel have developed with rest API concept.</p>\r\n<p>In this tutorial, i will tell you how to create rest API in Laravel \r\nwith resourceful routes for create, read, update and delete records.</p>\r\n<p>REST known as Representational State Transfer. A REST API basically \r\ndefine set of method which handle request of client and generate \r\nresponses via HTTP protocol such as GET and POST.</p>\r\n<p>Here i write a rest api in Laravel which return in response of JSON format.</p>\r\n<p>You can create rest APIs in minutes with Laravel.</p>\r\n<p>If you want to quickly create your first test API with Laravel then \r\nopen your routes.php and paste this code to see the response of API.</p><p>It was hard for me to create rest API before but Laravel have developed with rest API concept.</p>\r\n<p>In this tutorial, i will tell you how to create rest API in Laravel \r\nwith resourceful routes for create, read, update and delete records.</p>\r\n<p>REST known as Representational State Transfer. A REST API basically \r\ndefine set of method which handle request of client and generate \r\nresponses via HTTP protocol such as GET and POST.</p>\r\n<p>Here i write a rest api in Laravel which return in response of JSON format.</p>\r\n<p>You can create rest APIs in minutes with Laravel.</p>\r\n<p>If you want to quickly create your first test API with Laravel then \r\nopen your routes.php and paste this code to see the response of API.</p>',0,0,1,1,0,'','2016-11-06 17:23:27','Mohammed Ghaji Ahmed',0,'','0000-00-00 00:00:00',0,'','0000-00-00 00:00:00','2016-11-06 16:23:27','2016-11-06 16:23:27'),
	(4,5,0,0,1,'This is another new news item','This is another new news item','This-is-another-new-news-item','This is another new new new This is another new new new This is another new new new This is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new new This is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new new<br>',1,0,1,1,0,'','2016-11-06 19:52:54','Ahmed Ghaji',0,'','0000-00-00 00:00:00',0,'','0000-00-00 00:00:00','2016-11-06 17:33:25','2016-11-06 18:52:54'),
	(5,4,0,0,1,'The Sales of forms for remedial Sciences is out','The Sales of forms for remedial Sciences is out','The-Sales-of-forms-for-remedial-Sciences-is-out','This is another new new new This is another new new new This is another new new new This is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new new This is another new new newThis is another new new newThis is another new new newThis is another new new newThis is another new new new<br>',1,0,1,1,0,'','2016-11-06 19:54:34','Ahmed Ghaji',0,'','0000-00-00 00:00:00',0,'','0000-00-00 00:00:00','2016-11-06 17:35:34','2016-11-06 18:54:34'),
	(6,1,0,0,0,'2016-2017 Admission is Out','2016-2017 Admission is Out','2016-2017-Admission-is-Out','2016/2017 Admission is out for admissions into the following programmes<br>',0,0,10,1,0,'','2016-11-06 19:46:35','Mohammed Ghaji',1,'','0000-00-00 00:00:00',0,'','0000-00-00 00:00:00','2016-11-06 18:46:35','2016-11-06 18:46:35');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
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
	(1,'email','email',0,'Test Page Example One',0,0,'',0,NULL,NULL),
	(2,'elearning','elearning',0,' \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). \n\n \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). ',0,0,'',0,NULL,NULL),
	(3,'Strategic Plan','Strategic-Plan',0,' \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). \n\n \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). ',0,0,'',0,NULL,NULL);

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
  `has_children` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sub_navigations` WRITE;
/*!40000 ALTER TABLE `sub_navigations` DISABLE KEYS */;

INSERT INTO `sub_navigations` (`id`, `navigations_id`, `name`, `slug`, `position`, `content`, `visible`, `weight`, `icon`, `created_at`, `updated_at`, `has_children`)
VALUES
	(1,2,'Future Development','Future Development',1,'University of Jos, Future Development',1,1,'',NULL,NULL,NULL),
	(2,2,'Facts and Figures','Facts and Figures',1,'University of Jos, Facts and Figures',1,1,'',NULL,NULL,NULL),
	(3,2,'History','History',1,'University of Jos, History',1,1,'',NULL,NULL,NULL),
	(4,2,'Mission and Vision','Mission and Vision',1,'University of Jos, Mission and Vision',1,1,'',NULL,NULL,NULL),
	(5,2,'Act','Act',1,'University of Jos, Act',1,1,'',NULL,NULL,NULL),
	(6,2,'Anthem','Anthem',1,'University of Jos, Anthem',1,1,'',NULL,NULL,NULL),
	(7,2,'Governing Council','Governing Council',1,'University of Jos, Governing Council',1,1,'',NULL,NULL,NULL),
	(8,2,'Management','Management',1,'University of Jos, Management',1,1,'',NULL,NULL,NULL),
	(9,6,'eLearning','elearning',1,'University of Jos, Learning Management System MOODLE',1,1,'',NULL,NULL,NULL),
	(10,6,'Email','email',1,'University of Jos, Mail Service System',1,1,'',NULL,NULL,NULL),
	(11,6,'iRepository','iRepository',1,'University of Jos, Institutional Repository',1,1,'',NULL,NULL,NULL),
	(12,5,'Directorates','Directorates',1,'University of Jos, Directorates',1,1,'',NULL,NULL,1),
	(13,5,'Faculties','Faculties',1,'University of Jos, Faculties',1,1,'',NULL,NULL,1),
	(14,5,'Institutes','Institutes',1,'University of Jos, Institutes',1,1,'',NULL,NULL,1),
	(15,5,'Centers','Centers',1,'University of Jos, Centers',1,1,'',NULL,NULL,1),
	(16,6,'Staff','Staff',1,'University of Jos, Staff',1,1,'',NULL,NULL,NULL),
	(17,6,'Students','Students',1,'University of Jos, Students',1,1,'',NULL,NULL,NULL),
	(18,6,'Parent & Family','Parent & Family',1,'University of Jos, Parent & Family',1,1,'',NULL,NULL,NULL),
	(19,7,'Main Campus','Main Campus',1,'University of Jos, Main Campus, Bauchi Road',1,1,'',NULL,NULL,NULL),
	(20,7,'JUTH Campus','JUTH Campus',1,'University of Jos,JUTH Campus, Medical School',1,1,'',NULL,NULL,NULL),
	(21,7,'Naraguta Campus','Naraguta Campus',1,'University of Jos, Naraguta Campus',1,1,'',NULL,NULL,NULL),
	(22,9,'Staff School','Staff School',1,'University of Jos, Staff School',1,1,'',NULL,NULL,NULL),
	(23,9,'Women Association','Women Association',1,'University of Jos, Women Association',1,1,'',NULL,NULL,NULL),
	(24,9,'Multipurpose Cooperative  Society','Multipurpose Cooperative  Society',1,'University of Jos, Multipurpose Cooperative  Society',1,1,'',NULL,NULL,NULL),
	(25,9,'Consultancy Services','Consultancy Services',1,'University of Jos, Consultancy Services',1,1,'',NULL,NULL,NULL),
	(26,9,'Security Unit','Security Unit',1,'University of Jos, Security Unit',1,1,'',NULL,NULL,NULL),
	(27,9,'Press','Press',1,'University of Jos, Press',1,1,'',NULL,NULL,NULL),
	(28,9,'Hotel','Hotel',1,'University of Jos, Hotel',1,1,'',NULL,NULL,NULL),
	(29,9,'Student Union Government','SUG',1,'University of Jos, Student Union Government (SUG)',1,1,'',NULL,NULL,NULL),
	(30,9,'Christian Chapel','Christian Chapel',1,'University of Jos, Christian Chapel',1,1,'',NULL,NULL,NULL),
	(31,9,'Muslim Umma','Muslim Umma',1,'University of Jos, Muslim Umma',1,1,'',NULL,NULL,NULL),
	(32,6,'Alumni','Alumni',1,'University of Jos, Alumni',1,1,'',NULL,NULL,NULL),
	(33,7,'Old Campus','Old Campus',1,'University of Jos, Old Campus, Gangare',1,1,'',NULL,NULL,NULL);

/*!40000 ALTER TABLE `sub_navigations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `unique_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `othername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `secret_question_id` int(11) NOT NULL,
  `secret_answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suspended` int(11) NOT NULL,
  `visible` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `admin_id`, `unique_number`, `is_admin_user`, `username`, `surname`, `firstname`, `othername`, `email`, `phone_number`, `password`, `address`, `secret_question_id`, `secret_answer`, `suspended`, `visible`, `slug`, `last_login`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,0,'4445',0,'imaan','Mohammed','Musa','Mohammed','mohammedghajii@yahoo.com','08065358841','$2y$10$yWNyMakP/FjEIe0waEeB8.2U1cNpW5NoG0iHG116V8JraFwy3eniy','H65 Race Course Filling Sukuwa Jos Behind University of Jos Senior Staff Quarters.',0,'',1,1,'imaan','2016-11-01 13:48:14','Navza1EfUnzepXzMghhgYtsfpIWnBFe6bhBkiqJfmIBLntT5z3vBeJmUrNeE','2016-11-01 12:39:38','2016-11-01 12:48:14'),
	(2,0,'4444',0,'ghaji','Mohammed','Ahmed','Ghaji','mohammedghaji@gmail.com','08036338821','$2y$10$3FaHulpF66KpH/Aj4t0UpeG86hIVmBJD7TXvpd1cQ1/JjcDbFuICi','ICT Directorate University of Jos Plateau State Nigeria',0,'',0,1,'ghaji','2016-11-06 20:19:29','yaBmHQUvj1TYBB8O2PXlcxv4brNf6iVuXNGj2ad8K1xWropcSfYNuKXvPzso','2016-11-01 12:42:25','2016-11-06 19:19:29'),
	(3,2,'4441',2,'gana','Mohammed','Mohammed','Gana','gana@gmail.com','08080808080','$2y$10$UkqoKO1mXlFwlg/UhCLu1Oy1FshB4Df3Fn.xZGkrEdAwVTfxqO4Mq','Niger State, Nigeria.',0,'',0,1,'gana','2016-11-06 07:08:54',NULL,'2016-11-06 05:06:21','2016-11-06 06:08:54');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
