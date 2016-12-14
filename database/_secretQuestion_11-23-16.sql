# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: laravel_acl
# Generation Time: 2016-11-23 21:06:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table permissions
# ------------------------------------------------------------

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'role-list','Display Role Listing','See only Listing Of Role','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(2,'role-create','Create Role','Create New Role','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(3,'role-edit','Edit Role','Edit Role','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(4,'role-delete','Delete Role','Delete Role','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(5,'item-list','Display Item Listing','See only Listing Of Item','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(6,'item-create','Create Item','Create New Item','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(7,'item-edit','Edit Item','Edit Item','2016-11-22 21:22:05','2016-11-22 21:22:05'),
	(8,'item-delete','Delete Item','Delete Item','2016-11-22 21:22:05','2016-11-22 21:22:05');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
