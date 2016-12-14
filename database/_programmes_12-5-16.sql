# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: mis
# Generation Time: 2016-12-05 08:18:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table reg_academic_programme
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reg_academic_programme`;

CREATE TABLE `reg_academic_programme` (
  `programme_id` int(11) NOT NULL AUTO_INCREMENT,
  `programme_name` varchar(100) NOT NULL DEFAULT '',
  `programme_duration` int(11) NOT NULL DEFAULT '0',
  `department_id` int(11) NOT NULL DEFAULT '0',
  `qualification_type_id` int(11) NOT NULL DEFAULT '0',
  `programme_category_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`programme_id`),
  KEY `qualification_type_id` (`qualification_type_id`),
  KEY `programme_category_id` (`programme_category_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `reg_academic_programme` WRITE;
/*!40000 ALTER TABLE `reg_academic_programme` DISABLE KEYS */;

INSERT INTO `reg_academic_programme` (`programme_id`, `programme_name`, `programme_duration`, `department_id`, `qualification_type_id`, `programme_category_id`)
VALUES
	(1,'English Language',4,1,1,2),
	(2,'English Literature',4,1,1,2),
	(3,'History/Intn\'l. Studies',4,2,1,2),
	(4,'French',4,3,1,2),
	(5,'French/Linguistics',4,3,1,2),
	(6,'Languages/Linguistics',4,3,1,2),
	(7,'Arabic Studies',4,4,1,2),
	(8,'Christian Religious Studies',4,4,1,2),
	(9,'Islamic Studies',4,4,1,2),
	(10,'Religion and Philosophy',4,4,1,2),
	(11,'African Traditional Religion',4,4,1,2),
	(12,'Theatre and Film Arts',4,5,1,2),
	(13,'Mass Communication',4,33,1,2),
	(14,'Special Education',4,8,1,2),
	(15,'English Education',4,39,1,2),
	(16,'Economics Education',4,6,1,2),
	(17,'French Education',4,39,1,2),
	(18,'History/Intn\'l. Studies Education',4,39,1,2),
	(19,'Religion Education',4,39,1,2),
	(20,'Educational Administration and Planning',4,36,1,2),
	(21,'Adult Education',4,36,1,2),
	(22,'Guidance and Counselling',4,36,1,2),
	(23,'Social Studies Education',4,6,1,2),
	(24,'Biology Education',4,7,1,2),
	(25,'Chemistry Education',4,7,1,2),
	(26,'Geography Education',4,7,1,2),
	(27,'Mathematics Education',4,7,1,2),
	(28,'Physics Education',4,7,1,2),
	(29,'Special Education (Without Teaching Subjects)',4,8,1,2),
	(30,'Special Education (With Teaching Subjects)',4,8,1,2),
	(31,'Special Education (Rehabilitation Sciences)',4,8,1,2),
	(32,'Architecture',4,9,1,1),
	(33,'Building',5,10,1,2),
	(34,'Geography and Planning',4,11,1,2),
	(35,'Law',5,12,4,1),
	(36,'Anatomy',4,13,1,2),
	(37,'Medicine',6,13,1,1),
	(38,'Biochemistry',4,28,1,2),
	(39,'Plant Science And Technology',4,14,1,2),
	(40,'Chemistry',4,15,1,2),
	(41,'Geology',4,16,1,2),
	(42,'Computer Science',4,54,1,1),
	(43,'Mathematics',4,17,1,2),
	(44,'Statistics',4,17,1,2),
	(45,'Microbiology',4,18,1,2),
	(46,'Physics',7,19,1,2),
	(47,'Zoology',4,20,1,2),
	(48,'Pharmacy',5,21,5,1),
	(49,'Accounting',4,22,1,1),
	(50,'Economics',4,23,1,2),
	(51,'Psychology',4,24,1,2),
	(52,'Management Science',4,25,1,2),
	(53,'Political Science',4,26,1,2),
	(54,'Sociology',6,27,1,2),
	(56,'Nursing',7,29,1,1),
	(57,'Home Economics Education',4,7,3,1),
	(58,'Construction Technology Education',4,7,3,1),
	(59,'Industrial Chemistry',4,15,1,2),
	(60,'English/Linguistics',4,3,1,2),
	(61,'Special Education & Rehabilitation Sciences - LD(Biology)',4,8,1,2),
	(62,'Special Education & Rehabilitation Sciences - LD(Integrated Science)',4,8,1,2),
	(63,'Special Education & Rehabilitation Sciences - LD(Chemistry)',4,8,1,2),
	(64,'Special Education & Rehabilitation Sciences - LD(Geography)',4,8,1,2),
	(65,'Special Education & Rehabilitation Sciences - LD(Mathematics)',4,8,1,2),
	(66,'Special Education & Rehabilitation Sciences - LD(Physics)',4,8,1,2),
	(67,'Special Education & Rehabilitation Sciences - LD(History)',4,8,1,2),
	(68,'Special Education & Rehabilitation Sciences - LD(Economics)',4,8,1,2),
	(69,'Special Education & Rehabilitation Sciences - LD(Social Studies)',4,8,1,2),
	(70,'Special Education & Rehabilitation Sciences - LD(English)',4,8,1,2),
	(71,'Special Education & Rehabilitation Sciences - LD(Religous Studies)',4,8,1,2),
	(72,'Special Education & Rehabilitation Sciences - LD(French)',4,8,1,2),
	(73,'Special Education & Rehabilitation Sciences - HH(Biology)',4,8,1,2),
	(74,'Special Education & Rehabilitation Sciences - HH(Integrated Science)',4,8,1,2),
	(75,'Special Education & Rehabilitation Sciences - HH(Chemistry)',4,8,1,2),
	(76,'Special Education & Rehabilitation Sciences - HH(Geography)',4,8,1,2),
	(77,'Special Education & Rehabilitation Sciences - HH(Mathematics)',4,8,1,2),
	(78,'Special Education & Rehabilitation Sciences - HH(Physics)',4,8,1,2),
	(79,'Special Education & Rehabilitation Sciences - HH(History)',4,8,1,2),
	(80,'Special Education & Rehabilitation Sciences - HH(Economics)',4,8,1,2),
	(81,'Special Education & Rehabilitation Sciences - HH(Social Studies)',4,8,1,2),
	(82,'Special Education & Rehabilitation Sciences - HH(English)',4,8,1,2),
	(83,'Special Education & Rehabilitation Sciences - HH(Religous Studies)',4,8,1,2),
	(84,'Special Education & Rehabilitation Sciences - HH(French)',4,8,1,2),
	(85,'Special Education & Rehabilitation Sciences - VH(Biology)',4,8,1,2),
	(86,'Special Education & Rehabilitation Sciences - VH(Integrated Science)',4,8,1,2),
	(87,'Special Education & Rehabilitation Sciences - VH(Chemistry)',4,8,1,2),
	(88,'Special Education & Rehabilitation Sciences - VH(Geography)',4,8,1,2),
	(89,'Special Education & Rehabilitation Sciences - VH(Mathematics)',4,8,1,2),
	(90,'Special Education & Rehabilitation Sciences - VH(Physics)',4,8,1,2),
	(91,'Special Education & Rehabilitation Sciences - VH(History)',4,8,1,2),
	(92,'Special Education & Rehabilitation Sciences - VH(Economics)',4,8,1,2),
	(93,'Special Education & Rehabilitation Sciences - VH(Social Studies)',4,8,1,2),
	(94,'Special Education & Rehabilitation Sciences - VH(English)',4,8,1,2),
	(95,'Special Education & Rehabilitation Sciences - VH(Religous Studies)',4,8,1,2),
	(96,'Special Education & Rehabilitation Sciences - VH(French)',4,8,1,2),
	(97,'Linguistics(Major)',4,3,1,2),
	(98,'English Linguistics',4,3,1,2),
	(99,'Guidance and Counseling(Economics)',4,36,1,2),
	(100,'Guidance and Counseling(History)',4,36,1,2),
	(101,'Guidance and Counseling(English)',4,36,1,2),
	(102,'Guidance and Counseling(Social Studies)',4,36,1,2),
	(103,'Educational Administration and Planning(SOS)',4,36,1,2),
	(104,'Educational Administration and Planning(Economics)',4,36,1,2),
	(105,'Educational Administration and Planning(English)',4,36,1,2),
	(106,'Educational Administration and Planning(Religion)',4,36,1,2),
	(107,'Educational Administration and Planning(History)',4,36,1,2),
	(108,'Christian Religious Studies Education',4,40,1,2),
	(109,'Political Science Education',4,1,1,2),
	(110,'Library And Information Science',4,6,1,2),
	(111,'Medical Laboratory Sciences',5,32,6,2),
	(112,'Adult Education(Social Studies)',4,6,1,2),
	(113,'Adult Education(English)',4,6,1,2),
	(114,'Adult Education(Economics)',4,6,1,2),
	(115,'Adult Education(Religion)',4,6,1,2),
	(116,'Quantity Surveying_old',5,10,1,2),
	(117,'Estate Management_old',5,10,1,2),
	(118,'Guidance and Counseling(CRS)',4,36,1,2),
	(119,'Science Laboratory Technology(SLT)',4,34,6,2),
	(123,'Special Education Without Teaching Subjects(HH)',4,8,1,2),
	(124,'Special Education Without Teaching Subjects(LD)',4,8,1,2),
	(125,'Early Childhood Education',4,36,1,2),
	(126,'Technical Education',4,7,1,2),
	(127,'M.A. English Language',2,1,1,2),
	(128,'M.A. Literature in English',2,1,1,2),
	(129,'M.Phil English Language',2,1,1,2),
	(130,'M.Phil Litreature in English',2,1,1,2),
	(131,'Ph.D English Language',1,1,1,2),
	(132,'Ph.D Litreature in English',1,1,1,2),
	(133,'M.A. Nigerian History(Central Nigeria)',2,2,1,2),
	(134,'M.A. Economic History',2,2,1,2),
	(135,'M.Phil/Ph.D Nigerian History(Central Nigeria)',2,2,1,2),
	(136,'M.Phil/Ph.D Economic History',2,2,1,2),
	(137,'Ph.D Nigerian History(Central Nigeria)',1,2,1,2),
	(138,'Ph.D Economic History',1,2,1,2),
	(139,'M.A. Ethics and Philosophy',2,4,1,2),
	(140,'M.A. African Traditional Religion',2,4,1,2),
	(141,'M.A.Church History',2,4,1,2),
	(142,'M.A. New Testament',2,4,1,2),
	(143,'M.A. Old Testament',2,4,1,2),
	(144,'M.A. Arabic',2,4,1,2),
	(145,'M.A. Islamic Studies',2,4,1,2),
	(146,'M.A. Interaction of Religion',2,4,1,2),
	(147,'M.A. Sociology of Religion',2,4,1,2),
	(148,'M.Phil African Traditional Religion',2,4,1,2),
	(149,'M.Phil/Ph.D Church History',2,4,1,2),
	(150,'M.Phil/Ph.D New Testament',2,4,1,2),
	(151,'M.Phil/Ph.D Old Testament',2,4,1,2),
	(152,'M.Phil/Ph.D Interaction of Religion',2,4,1,2),
	(153,'M.Phil Sociology of Religions',2,4,1,2),
	(154,'M.Phil/Ph.D Ethics and Philosophy',1,4,1,2),
	(155,'Ph.D African Traditional Religion',1,4,1,2),
	(156,'Ph.D Church History',1,4,1,2),
	(157,'Ph.D New Testament',1,4,1,2),
	(158,'Ph.D Old Testament',1,4,1,2),
	(159,'Ph.D Interaction of Religion',1,4,1,2),
	(160,'Ph.D Sociology of Religions',1,4,1,2),
	(161,'M.A. Play Directing/Production',2,5,1,2),
	(162,'M.A. Dramatic Litreature',2,5,1,2),
	(163,'M.A. Play Creating',2,5,1,2),
	(164,'M.Phil Dramatic Litreature',2,5,1,2),
	(165,'M.Phil Play Creating',2,5,1,2),
	(166,'M.Phil Play Directing/Production',2,5,1,2),
	(167,'Ph.D Play Directing/Production',1,5,1,2),
	(168,'Ph.D Dramatic Litreature',1,5,1,2),
	(169,'Ph.D Play Creating',1,5,1,2),
	(170,'M.ED Hearing Handicap',2,8,1,2),
	(171,'M.ED Learning Disabilities',2,8,1,2),
	(172,'M.ED Visual Handicaps',2,8,1,2),
	(173,'M.Phil/Ph.D Hearing Handicap',2,8,1,2),
	(174,'M.Phil/Ph.D Learning Disabilities',2,8,1,2),
	(175,'M.Phil/Ph.D Visual Handicaps',2,8,1,2),
	(176,'Ph.D Hearing Handicap',1,8,1,2),
	(177,'Ph.D Learning Disabilities',1,8,1,2),
	(178,'Ph.D Visual Handicaps',1,8,1,2),
	(179,'M.ED Guidance and Counseling',2,6,1,2),
	(180,'M.ED Social Studies Education',2,6,1,2),
	(181,'M.ED Philosophy of Education',2,6,1,2),
	(182,'M.ED Sociology of Education',2,6,1,2),
	(183,'M.ED Psycology of Education',2,6,1,2),
	(184,'M.ED Christian Religion Education',2,6,1,2),
	(185,'MA.ED History and International Studies Education',2,6,1,2),
	(186,'M.ED Test and Measurement',2,6,1,2),
	(187,'M.ED Educational Administration and Planning',2,6,1,2),
	(188,'M.Phil Guidance and Counseling',2,6,1,2),
	(189,'M.Phil Social Studies Education',2,6,1,2),
	(190,'M.Phil Philosophy of Education',2,6,1,2),
	(191,'M.ED English Education',2,6,1,2),
	(192,'M.Phil English Education',2,6,1,2),
	(193,'M.Phil Sociology of Education',2,6,1,2),
	(194,'M.Phil/Ph.d Educational Psychology',2,6,1,2),
	(195,'M.Phil Christian Religion Education',2,6,1,2),
	(196,'M.Phil History Education',2,6,1,2),
	(197,'M.Phil Test and Measurement',2,6,1,2),
	(198,'M.Phil Educational Administration and Planning',2,6,1,2),
	(199,'Ph.D Guidance and Counseling',1,6,1,2),
	(200,'Ph.D Social Studies Education',1,6,1,2),
	(201,'Ph.D Philosophy of Education',1,6,1,2),
	(202,'Ph.D English Education',1,6,1,2),
	(203,'Ph.D Sociology of Education',1,6,1,2),
	(204,'Ph.D Psycology of Education(Child Development)',1,6,1,2),
	(205,'Ph.D Christian Religion Education',1,6,1,2),
	(206,'Ph.D History Education',1,6,1,2),
	(207,'Ph.D Test and Measurement',1,6,1,2),
	(208,'Ph.D Educational Administration and Planning',1,6,1,2),
	(209,'M.ED Science Education',2,7,1,2),
	(210,'M.ED Curriculum Planning and Development',2,7,1,2),
	(211,'M.Sc. Education in Biology',2,7,1,2),
	(212,'M.Sc. Education in Chemistry',2,7,1,2),
	(213,'M.Sc. Education in Physics',2,7,1,2),
	(214,'M.Sc. Education in Geography',2,7,1,2),
	(215,'M.Sc. Education in Mathematics',2,7,1,2),
	(216,'M.Phil Curriculum Planning and Development',2,7,1,2),
	(217,'M.Phil/Ph.D Science Education',2,7,1,2),
	(218,'M.Phil/Ph.D Education in Biology',2,7,1,2),
	(219,'M.Phil/Ph.D Education in Chemistry',2,7,1,2),
	(220,'M.Phil/Ph.D Education in Physics',2,7,1,2),
	(221,'M.Phil Education in Geography',2,7,1,2),
	(222,'M.Phil Education in Mathematics',2,7,1,2),
	(223,'Ph.D Science Education',1,7,1,2),
	(224,'Ph.D Curriculum Planning and Development',1,7,1,2),
	(225,'Ph.D Education in Biology',1,7,1,2),
	(226,'Ph.D Education in Chemistry',1,7,1,2),
	(227,'Ph.D Education in Physics',1,7,1,2),
	(228,'M.Sc. Education in Geography',1,7,1,2),
	(229,'Ph.D Education in Mathematics',1,7,1,2),
	(230,'M.Sc. Architecture',2,9,1,2),
	(231,'Postgraduate Diploma in Architecture (PGDARCH)',2,9,1,2),
	(232,'M.Sc. Construction Management',2,10,1,2),
	(233,'M.Sc. Construction Technology',2,10,1,2),
	(234,'M.Phil/Ph.D Construction Management',2,10,1,2),
	(235,'M.Phil/Ph.D Construction Materials',2,10,1,2),
	(236,'Ph.D Construction Management',1,10,1,2),
	(237,'Ph.D Construction Materials',1,10,1,2),
	(238,'M.Sc. Environmental and Resources Planning (ERP)',2,11,1,2),
	(239,'M.Sc. Population and Man Power Planning(PMP)',2,11,1,2),
	(240,'M.Sc. Urban and Regional Planning(URP)',2,11,1,2),
	(241,'M.Phil Environmental and Resources Planning (ERP)',2,11,1,2),
	(242,'M.Phil Population and Man Power Planning(PMP)',2,11,1,2),
	(243,'M.Phil Urban and Regional Planning(URP)',2,11,1,2),
	(244,'Ph.D Environmental and Resources Planning (ERP)',1,11,1,2),
	(245,'Ph.D Population and Man Power Planning(PMP)',1,11,1,2),
	(246,'Ph.D Urban and Regional Planning(URP)',1,11,1,2),
	(247,'Masters Programme in Law(LLM)',2,12,1,2),
	(248,'M.Sc. Medical Microbiology',2,18,1,2),
	(249,'M.Phil Medical Microbiology',2,18,1,2),
	(250,'M.Phil/Ph.D Law',2,12,1,2),
	(251,'Ph.D Medical Microbiology',1,18,1,2),
	(252,'M.A Law and Diplomacy',2,12,1,2),
	(253,'M.Phil/Ph.D Law and Diplomacy',2,12,1,2),
	(254,'Ph.D Law(LLM)',1,12,1,2),
	(255,'Ph.D Law and Diplomacy',1,12,1,2),
	(256,'Masters Programme of Laws in Telecommunication Law',2,12,1,2),
	(257,'M.Sc. Biochemistry',2,28,1,2),
	(258,'M.Phil Biochemistry',2,28,1,2),
	(259,'Ph.D Biochemistry',1,28,1,2),
	(260,'M.Sc. Human Physiology',2,33,1,2),
	(261,'M.Phil Human Physiology',2,33,1,2),
	(262,'Ph.D Human Physiology',1,33,1,2),
	(263,'M.D Human Physiology',2,33,1,2),
	(264,'M.Sc. Cytogenetics and Plant Breeding',2,14,1,2),
	(265,'M.Sc. Applied Microbiology and Plant Pathology',2,14,1,2),
	(266,'M.Phil / Ph.D Cytogenetics and Plant Breeding',1,14,1,2),
	(267,'M.Phil/Ph.D Applied Microbiology and Plant Pathology',1,14,1,2),
	(268,'M.Sc. Applied Analytical Chemistry',2,15,1,2),
	(269,'M.Sc. Applied Inorganic Chemistry',2,15,1,2),
	(270,'M.Sc. Applied Organic Chemistry',2,15,1,2),
	(271,'M.Sc. Applied Physical Chemistry',2,15,1,2),
	(272,'M.Phil/Ph.D Applied Analytical Chemistry',2,15,1,2),
	(273,'M.Phil/Ph.D Applied Inorganic Chemistry',2,15,1,2),
	(274,'M.Phil/Ph.D Applied Organic Chemistry',2,15,1,2),
	(275,'M.Phil/Ph.D Applied Physical Chemistry',2,15,1,2),
	(276,'Ph.D Applied Organic Chemistry',1,15,1,2),
	(277,'Ph.D Applied Analytical Chemistry',1,15,1,2),
	(278,'Ph.D Applied Inorganic Chemistry',1,15,1,2),
	(279,'Ph.D Applied Physical Chemistry',1,15,1,2),
	(280,'Postgraduate Diploma in Environmental and Industrial Chemistry',2,15,1,2),
	(281,'M.Sc. Mineral Exploration',2,16,1,2),
	(282,'M.Sc. Engineering Geology and Hydrogeology',2,16,1,2),
	(283,'M.Phil Geophysics',2,16,1,2),
	(284,'M.Phil Ore Geology',2,16,1,2),
	(285,'M.Phil Geochemistry',2,16,1,2),
	(286,'Ph.D Geophysics',1,16,1,2),
	(287,'Ph.D Ore Geology',1,16,1,2),
	(288,'M.Phil Geochemistry',1,16,1,2),
	(289,'Postgraduate Diploma in Mining Geology(PDMG)',2,16,1,2),
	(290,'Postgraduate Diploma in Environmental Geology(PDEG)',2,16,1,2),
	(291,'M.Sc. Complex Analysis',2,17,1,2),
	(292,'M.Sc. Abstract Algebra',2,17,1,2),
	(293,'M.Sc. Numerical Analysis',2,17,1,2),
	(294,'M.Phil Numerical Analysis',2,17,1,2),
	(295,'M.Phil Abstract Algebra',2,17,1,2),
	(296,'M.Phil Complex Analysis',2,17,1,2),
	(297,'Ph.D Numerical Analysis',1,17,1,2),
	(298,'Ph.D Complex Analysis',1,17,1,2),
	(299,'Ph.D Abstract Algebra',1,17,1,2),
	(300,'Postgraduate Diploma in Statistics',2,17,1,2),
	(301,'M.Sc. Theoretical Solid State and Quantum Physics',2,19,1,2),
	(302,'M.Sc. Applied Physics(Acoustics)',2,19,1,2),
	(303,'M.Sc. Applied Physics(Atmospheric Physics)',2,19,1,2),
	(304,'M.Sc. Applied Physics(Biophysics)',2,19,1,2),
	(305,'M.Sc. Applied Physics(Electronics and Comunications)',2,19,1,2),
	(306,'M.Phil Physics(Atmospheric Aerosols and Pollution)',2,19,1,2),
	(307,'M.Phil Physics(Medical Physics)',2,19,1,2),
	(308,'M.Phil Physics(Applied Acoustics)',2,19,1,2),
	(309,'Ph.D Physics(Applied Acoustics)',1,19,1,2),
	(310,'Ph.D Physics(Medical Physics)',1,19,1,2),
	(311,'Ph.D Physics(Applied Acoustics)',1,19,1,2),
	(312,'Postgraduate Diploma in Electronics Electrical Technology and Physics',2,19,1,2),
	(313,'M.Sc. Applied Entomology and Parasitology',2,20,1,2),
	(314,'M.Sc. Applied Hybrobiology and Fisheries',2,20,1,2),
	(315,'M.Sc. Conservation Biology',2,20,1,2),
	(316,'M.Phil Parasitology',2,20,1,2),
	(317,'M.Phil Entomology',2,20,1,2),
	(318,'M.Phil Hydrobiology and Fisheries',2,20,1,2),
	(319,'M.Phil/Ph.D Animal Physiology',2,20,1,2),
	(320,'Ph.D Parasitology',1,20,1,2),
	(321,'Ph.D Entomology',1,20,1,2),
	(322,'Ph.D Hydrobiology and Fisheries',1,20,1,2),
	(323,'Ph.D Animal and Physiology',1,20,1,2),
	(324,'M.Sc. Pharmacology',2,21,1,2),
	(325,'M.Phil Pharmacology',2,21,1,2),
	(326,'Ph.D Pharmacology',1,21,1,2),
	(327,'M.Sc. Pharmaceutical Chemistry',2,39,1,2),
	(328,'M.Phil Pharmaceutical Chemistry',2,39,1,2),
	(329,'Ph.D Pharmaceutical Chemistry',1,21,1,2),
	(330,'M.Sc. Economics',2,23,1,2),
	(331,'M.Phil Economics',2,23,1,2),
	(332,'Ph.D Economics',1,23,1,2),
	(333,'Masters in Public Administration(MPA)',2,26,1,2),
	(334,'M.Sc. International Relations and Strategic Studies',2,26,1,2),
	(335,'M.Sc. Political Science',2,26,1,2),
	(336,'Ph.D International Relations and Strategic Studies',1,26,1,2),
	(337,'M.Phil/Ph.D Political Economy and Development Studies',1,26,1,2),
	(338,'M.Phil/Ph.D Public Administration',1,26,1,2),
	(339,'M.Sc. Clinical Psychology',2,34,1,2),
	(340,'M.Sc.Organizational Psychology',2,34,1,2),
	(341,'M.Phil/Ph.D Clinical Psychology',2,34,1,2),
	(342,'M.Phil/Ph.D Organizational Psychology',2,34,1,2),
	(343,'Ph.D Clinical Psycology',1,34,1,2),
	(344,'Ph.D Organizational Psycology',1,34,1,2),
	(345,'M.Sc. Sociology',2,27,1,2),
	(346,'M.Phil Sociology',2,27,1,2),
	(347,'M.Phil Social Work/MSSW',2,27,1,2),
	(348,'M.Sc. Social Work/MSSW',2,27,1,2),
	(349,'Ph.D Sociology',1,27,1,2),
	(350,'Ph.D Social Work/MSSW',1,27,1,2),
	(351,'Postgraduate Diploma in Social Work/PGDSW',2,27,1,2),
	(352,'Postgraduate Diploma in Hiv/Aids Studies',2,27,1,2),
	(353,'Masters in Business Administration MBA',2,25,1,2),
	(354,'MBA Executive',2,25,1,2),
	(355,'M.Phil Management Studies',2,25,1,2),
	(356,'Ph.D Management Studies',1,25,1,2),
	(357,'M.Phil/Ph.D Law(Commercial Law)',0,12,1,2),
	(358,'Ph.D Law (Intl Law and Jur)',0,12,1,2),
	(359,'Ph.D Law (Private Law)',0,12,1,2),
	(360,'Ph.D Law (Public Law)',0,12,1,2),
	(361,'Postgraduate diploma in ICT Policy and Regulations',0,12,1,2),
	(362,'M.A History',0,2,1,2),
	(363,'M.Phil/Ph.D Biochemistry',0,28,1,2),
	(364,'M.Phil/Ph.D Human Physiology',0,33,1,2),
	(365,'M.Phil/Ph.D Medical Microbiology',0,18,1,2),
	(366,'M.Phil/Ph.D Chemistry',0,15,1,2),
	(367,'M.Sc. Chemistry',0,15,1,2),
	(368,'M.Phil/Ph.D Applied Microbiology',0,14,1,2),
	(369,'M.Phil/Ph.D Conservation Biology',3,20,1,2),
	(370,'M.Phil/Ph.D Hydrobiology and Fishries',0,20,1,2),
	(371,'M.Phil/Ph.D Entomology and Parasitology',0,20,1,2),
	(372,'M.sc. Mathematics',0,17,1,2),
	(373,'M.sc. Physics',0,19,1,2),
	(374,'M.Phil/Ph.D Physics',0,19,1,2),
	(375,'M.Sc. Mineral Exploration and Mining Geology',0,16,1,2),
	(376,'M.Phil/Ph.D Pharmaceutical Chemistry',0,39,1,2),
	(377,'Postgraduate Diploma in Management Science(PGDM)',0,25,1,2),
	(378,'M.Phil/Ph.D Management Studies',0,25,1,2),
	(379,'M.Phil/Ph.D General and applied Psychology',0,34,1,2),
	(380,'Postgraduate diploma in Education(PGDE)',0,32,1,2),
	(381,'M.Phil/Ph.D Sociology of Religions',0,4,1,2),
	(382,'M.Phil/Ph.D African Traditional Religion',0,4,1,2),
	(383,'M.Phil/Ph.D Curriculum Studies Education',0,7,1,2),
	(384,'M.Phil/Ph.D Mathematics Education',0,7,1,2),
	(385,'M.Phil/Ph.D Educational Technology',0,7,1,2),
	(386,'M.SC.(ED) Educational Technology',0,7,1,2),
	(387,'M.SC.(ED) (CURRICULUM EDUCATION)',0,7,1,2),
	(388,'M.Phil/Ph.D English Language',0,1,1,2),
	(389,'M.Phil/PH.D Special Education & Rehabilitation Sciences',0,8,1,2),
	(390,'M.Phil/Ph.D Mathematics',0,17,1,2),
	(391,'M.Phil/Ph D Pharmaceutical Technology',0,40,1,2),
	(392,'Msc Pharmaceutical Technology',0,40,1,2),
	(393,'MA Theatre Arts',0,5,1,2),
	(394,'M Phil/PhD Political Science',0,26,1,2),
	(395,'M Phil/PhD Theatre Arts',0,5,1,2),
	(396,'M Phil/PhD Educational Administration and Planning',0,6,1,2),
	(397,'Msc Political Economy and Developmental Studies',0,26,1,2),
	(398,'M Phil/PhD English Education',0,6,1,2),
	(399,'M Phil/PhD Sociology of Education',0,6,1,2),
	(400,'M Phil/PhD Guidance and Counseling',0,6,1,2),
	(401,'M Phil/PhD Philosophy of Education',0,6,1,2),
	(402,'M Phil/PhD Social Studies Education',0,6,1,2),
	(403,'M Phil/PhD Religion Education',0,6,1,2),
	(404,'M Phil/PhD History and International Studies Education',0,6,1,2),
	(405,'M Phil/PhD Test and Measurement Evaluation',0,6,1,2),
	(406,'M.ED Religion',0,6,1,2),
	(407,'M.ED Economics Education',0,6,1,2),
	(408,'M Phil/PhD Environmental and Resources Planning (ERP)',0,11,1,2),
	(409,'M Phil/PhD Urban and Regional Planning(URP)',0,11,1,2),
	(410,'M.Phil/PhD M.Phil Population and Man Power Planning(PMP)',0,11,1,2),
	(411,'Postgraduate diploma in Conflict Management and Peace Studies',0,36,1,2),
	(412,'M.Phil/Ph.D Obstetrics and Gynaecology',0,35,1,2),
	(413,'M. ED Special Education',0,8,1,2),
	(414,'M.Phil/PhD Economics',0,23,1,2),
	(415,'M Phil/PhD Sociology',0,27,1,2),
	(416,'M Phil/PhD History And International Studies',0,2,1,2),
	(417,'M Phil/PhD Social Works',0,27,1,2),
	(418,'M Phil/PhD Geology and Mining',0,16,1,2),
	(419,'M.Phil/Ph.D Psychology of Education',0,6,1,2),
	(420,'M.Phil/Ph.D Pharmacology',0,21,1,2),
	(421,'M.Phil/Ph.D Islamic Studies',0,4,1,2),
	(422,'M.Phil/Ph.D International Relations and Strategic Studies',0,26,1,2),
	(423,'M.A. African History',0,2,1,2),
	(424,'M.Sc. Accounting And Finance',0,22,1,2),
	(425,'M.Phil/Ph.D Accounting And Finance',0,22,1,2),
	(426,'M.Sc. Conflict Management and Peace Studies',0,36,1,2),
	(427,'M.Sc. Applied Physics',0,19,1,2),
	(428,'Masters in Public Health',0,37,1,2),
	(429,'M.A. Mass Communication',0,38,1,2),
	(430,'M.Phil/Ph.D Architecture',0,9,1,2),
	(431,'M.Phil/Ph.D Literature in English',0,1,1,2),
	(432,'M. A Hausa Language',1,3,1,2),
	(433,'Post Graduate Diploma in Accounting(PGDA)',2,22,1,2),
	(434,'M.A. Languages And Linguistics',2,3,1,2),
	(435,'M.A. History & International Studies',2,2,1,2),
	(436,'M.Phil/PhD Construction Technology',4,10,1,2),
	(437,'M.Phil/Ph.D Mineral Exploration and Mining Geology',4,16,1,2),
	(438,'M.Sc. Hydrobiology And Fisheries',2,20,1,2),
	(439,'M.Phil/Ph.D Languages And Linguistics',4,3,1,2),
	(440,'M.Phil/PhD Economics Education',0,6,1,2),
	(441,'M.Sc. Human Anatomy',2,31,1,2),
	(442,'M.Phil/PhD Human Anatomy',4,31,1,2),
	(443,'M.ED English Education',2,41,1,2),
	(444,'M Phil/PhD English Education',0,41,1,2),
	(445,'M.A.Ed History and International Studies Education',2,41,1,2),
	(446,'M Phil/PhD History and International Studies Education',0,41,1,2),
	(447,'M.ED Religion',2,41,1,2),
	(448,'M Phil/PhD Religion Education',0,41,1,2),
	(449,'M.Phil/PhD Geography Education',4,7,1,2),
	(450,'M.Ed Educational Psychology',2,34,1,2),
	(451,'M.Ed Educational Psychology',2,34,1,2),
	(464,'BANKING AND FINANCE',4,41,1,2),
	(465,'Archaeology',4,53,1,2),
	(467,'Special Education Without Teaching Subjects(VH)',4,8,1,2),
	(468,'Music',4,55,1,2),
	(469,'Estate Management',5,56,1,2),
	(470,'Urban & Regional Planing(URP)',4,57,1,2),
	(471,'Fine & Applied Arts',4,37,1,2),
	(472,'Quantity Surveying',4,59,1,2),
	(473,'Criminology & Security Studies',5,60,1,2),
	(474,'Insurance',4,61,1,2),
	(475,'Actuarial Science',4,62,1,2),
	(476,'Marketing',4,63,1,2),
	(477,'Civil Engineering',4,64,1,2),
	(478,'Mechanical Engineering',5,65,1,2),
	(479,'Electrical Electronics Engineering',5,66,1,2),
	(480,'Mining Engineering',5,67,1,2),
	(481,'Agricultural Science (Economics & Extension)',5,68,1,2),
	(482,'Agricultural Science (Animal Production)',5,69,1,2),
	(483,'Agricultural Science (Crop Production)',5,70,1,2),
	(484,'Veterinary Medicine',6,71,1,2),
	(485,'Integrated Science Education',4,72,1,2),
	(486,'Physical and Health Education',4,73,1,2),
	(487,'Special Education (Visual Handicap)',4,8,1,2),
	(488,'Special Education (Learning Disabilities)',4,8,1,2),
	(489,'Special Education (Hearing Handicap)',4,8,1,2),
	(490,'Computer  Science Education',4,7,1,2),
	(491,'Dentistry',6,75,1,1);

/*!40000 ALTER TABLE `reg_academic_programme` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;