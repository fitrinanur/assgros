# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: aps
# Generation Time: 2019-09-01 14:00:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table stuffs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stuffs`;

CREATE TABLE `stuffs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stuff_code` varchar(255) DEFAULT NULL,
  `stuff_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `stuffs` WRITE;
/*!40000 ALTER TABLE `stuffs` DISABLE KEYS */;

INSERT INTO `stuffs` (`id`, `stuff_code`, `stuff_name`, `created_at`, `updated_at`)
VALUES
	(1,'KB001','shampo',NULL,NULL),
	(2,'KB002','sabun mandi',NULL,NULL),
	(3,'KB003','pasta gigi',NULL,NULL),
	(4,'KB004','sikat gigi',NULL,NULL),
	(5,'KB005','hand body',NULL,NULL),
	(6,'KB006','cotton bud',NULL,NULL),
	(7,'KB007','tisu',NULL,NULL),
	(8,'KB008','parfum',NULL,NULL),
	(9,'KB009','pisau cukur',NULL,NULL),
	(10,'KB010','semir rambut',NULL,NULL),
	(11,'KB011','kosmetik',NULL,NULL),
	(12,'KB012','telur',NULL,NULL),
	(13,'KB013','minyak goreng',NULL,NULL),
	(14,'KB014','gula',NULL,NULL),
	(15,'KB015','garam',NULL,NULL),
	(16,'KB016','teh',NULL,NULL),
	(17,'KB017','beras',NULL,NULL),
	(18,'KB018','saus',NULL,NULL),
	(19,'KB019','mentega',NULL,NULL),
	(20,'KB020','bumbu masak',NULL,NULL),
	(21,'KB021','sosis',NULL,NULL),
	(22,'KB022','jelly',NULL,NULL),
	(23,'KB023','abon',NULL,NULL),
	(24,'KB024','snack',NULL,NULL),
	(25,'KB025','permen',NULL,NULL),
	(26,'KB026','roti',NULL,NULL),
	(27,'KB027','minuman bersoda',NULL,NULL),
	(28,'KB028','minuman non soda',NULL,NULL),
	(29,'KB029','susu',NULL,NULL),
	(30,'KB030','es krim',NULL,NULL),
	(31,'KB031','kopi',NULL,NULL),
	(32,'KB032','diapers',NULL,NULL),
	(33,'KB033','makanan bayi',NULL,NULL),
	(34,'KB034','sabun cuci',NULL,NULL),
	(35,'KB035','kaos kaki',NULL,NULL),
	(36,'KB036','ATK',NULL,NULL),
	(37,'KB037','rokok',NULL,NULL),
	(38,'KB038','baterai',NULL,NULL),
	(39,'KB039','tusuk gigi',NULL,NULL),
	(40,'KB040','obat',NULL,NULL),
	(41,'KB041','pewangi pakaian',NULL,NULL),
	(42,'KB042','korek',NULL,NULL),
	(43,'KB043','mie',NULL,NULL),
	(44,'KB044','madu',NULL,NULL),
	(45,'KB045','detergen',NULL,NULL),
	(46,'KB046','tepung',NULL,NULL),
	(47,'KB047','obat hewan',NULL,NULL),
	(48,'KB048','pembalut',NULL,NULL),
	(49,'KB049','gunting kuku',NULL,NULL),
	(50,'KB050','multivitamin',NULL,NULL),
	(51,'KB051','karbol',NULL,NULL),
	(52,'KB052','pengharum ruangan',NULL,NULL),
	(53,'KB053','salonpas',NULL,NULL),
	(54,'KB054','obat nyamuk',NULL,NULL),
	(55,'KB055','pembersih lantai',NULL,NULL);

/*!40000 ALTER TABLE `stuffs` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
