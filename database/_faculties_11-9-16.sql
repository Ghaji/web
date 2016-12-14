# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: _unijos_db
# Generation Time: 2016-11-09 10:33:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table faculty
# ------------------------------------------------------------

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `fac_id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(1) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `fac_name` varchar(100) NOT NULL DEFAULT '',
  `slug` varchar(100) NOT NULL,
  `fac_code` varchar(10) NOT NULL DEFAULT '',
  `fac_image` varchar(255) NOT NULL,
  `fac_description` text NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  `weight` int(1) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;

INSERT INTO `faculty` (`fac_id`, `category_id`, `category_name`, `fac_name`, `slug`, `fac_code`, `fac_image`, `fac_description`, `image_id`, `position`, `visible`, `weight`, `icon`, `created_at`, `updated_at`)
VALUES
	(1,3,'faculties','Arts','','AR','theater-arts-door.JPG','To nurture a faculty of the highest standards that nurtures and shapes moral values and human virtues in the citizenry.<br>\r\n* training citizens to apply their acquired knowledge to solving societal problems\r\n\r\n<br>\r\n* training students in methods of scholarship, scientific research and other creative endeavours;\r\n<br>\r\n* training citizens to make them patriotic with high moral values, good human virtues and resulting in a responsible citizenry.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(2,3,'faculties','Education','','ED','Psite_special_edu1.jpg','The Faculty of Education normally offers a four-year full-time programme leading to the Bachelor of Arts, Science and Special Education degrees. The objectives for these degree programmes are derived from the National Policy on Education namely:<br>\r\n* to produce highly motivated, conscientious research-oriented and efficient classroom teachers,:<br>\r\n* to encourage the spirit of inquiry and creativity in teachers,:<br>\r\n* to help teachers fit into the social life of the community and society at large and to enhance their commitment to national objectives,.....\r\n',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(3,3,'faculties','Environmental Sciences','','EV','archi2.jpg','At present, the faculty maintains effective joint research linkages with Durham University, (U.K) and Mc-Master University (Canada). In reality, achievements as regards research undertakings and research results have been tremendous. The faculty does not enjoy direct financial remuneration accruing from such research linkages but staff have benefitted through opportunities to further their education through them.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(4,3,'faculties','Law','','LW','law1.jpg','The programme herein approved is designed to ensure that the graduate of Law will have a clear understanding of the place and importance of Law in society. <br>Because all human activities  social, economic, political, etc. - take place within legal framework, it is necessary that the student of Law should have a broad general knowledge and exposure to other disciplines in the process of acquiring legal education.......',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(5,3,'faculties','Medical Sciences','','MD','pharm blind.jpg','The primary aim of the college of Medical sciences of the university of Jos is to participate in meeting the national objectives on Medical Education and health care delivery. \r\n<br>The college in this regard will aim to evolve an educational system based on the production of health care team. This concept emphasizes the key role of the doctor, working in close collaboration with other health personnel in health care delivery.rship and research...........',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(6,3,'faculties','Natural Sciences','','NS','natural_sciences.jpg','Vision of the Faculty is to nurture a faculty of the highest standard so that it is rated as the best in Nigeria and among the three best in West Africa<br>\r\n to provide practically oriented training so that graduates can apply their knowledge to solve societal problems including those caused by natural hazards.\r\n<br> to carry out relevant and meaningful research in pure and applied natural sciences.\r\n<br> to assist the community with professional advice and solution to specific problems.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(7,3,'faculties','Pharmaceutical Sciences','','PH','pharmdrugs.jpg','',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(8,3,'faculties','Social Sciences','','SS','law5.jpg','The faculty of Social Science of the University of Jos In its current pursuit of the objectives of teaching, research and community service, the faculty has had to contend with the growing reduction in resources and material allocation . Having to depend solely on its overhead costs coming from the University, great limitations have been placed on her path to meaningful achievement of the above objectives and goals.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(9,2,'directorates','General Studies','','GS','students.jpg','The General Studies  prepares students to think critically and analytically across a wide range of disciplines or fields of study.As a broader,multidisciplinary course of study rather than a traditional major/minor, Students take the majority of their courses in a Focus which requires programme credit  units. The remaining courses are taken in, with Gst Credit units required in each Concentration. The Focus  and the Concentration themes are discussed in more depth on the Gst page.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(10,5,'library','Library','','LI','','',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(11,3,'faculties','Management Sciences','','MS','center_for_accoun.jpg','The Faculty of Management Sciences delivers a portfolio of teaching, research, and service activities in broadly defined areas for the University.\nThe faculty providing academic program support in the technical fields of business statistics and operations research. The Operations Management  faculty teach and conduct research in the areas of manufacturing and service operations. Academic majors are offered at the undergraduate, MBA, and PhD levels in Operations Management.\n',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(12,2,'directorates','Information and Communication Technology','','ICT','multimedia2.jpg','ICT will be one of the key enablers for the step\r\nchange business transformation of all functions\r\nof the University.<br>\r\nICT will provide contemporary services to\r\nsupport, enable and facilitate University of jos in the\r\nachievement of its strategic objectives,\r\nencompassing learning & teaching, research\r\nand community engagement.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(13,2,'directorates','Physical Facilities','','PF','campuses.png','The Directorate has a core mandate of conceptualising and actualising the physical planning and development of the University. It also has the responsibility of maintenance and rehabilitation of academic buildings, students hostels, residential quarters as well as basic infrastructure such as water, electricity and road network. Others include procurement and maintenance of Vehicles, Plants and Machiner',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(14,2,'directorates','Health Service','','HS','pharm blind.jpg','Health Services offers University of Jos students the same services as a family doctor\'s office, and more. We provide confidential, student-centered health care, including comprehensive medical care, travel medicine and education, immunization, and referrals for specialized treatment.<br><br>\n \nThe multidisciplinary health team includes family physicians, registered nurses, a dietician, and support staff. We\'re here to help support you in achieving your personal and academic goals.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(15,7,'services','Counsultancy Services','','CS','','',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(16,2,'directorates','Academic Office','','AP','nursinglibrary.jpg','The Academic Office delivers academic services to students at all levels of study from the point of enrolment to graduation. It contributes to securing the quality and standards of academic courses of study and the appropriate deployment of space on campus to support the student experience.<br><br>\n\n\n\nThe <b> Exams and Records </b> Offices main role is to act as the definitive record keeper about students and courses on behalf of the University. In doing this it provides important services to the student and academic communities.<br>\n\nIt guides and supports the work of academic and administrative staff in a number of areas including: rules & regulations, quality assurance and student assessment.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(17,2,'directorates','Students\' Affairs','','SA','Psite_spot.jpg','The Directorate of Student Affairs is concerned mainly with students <br>welfare. It serves as a counseling body, where students receive assistance and advice on matters affecting them including housing, orientation, financial aid, [if possible] career, health and personal problems.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(18,8,'research','Office of Research and Development','','ORD','','',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(19,4,'Institutes','Institute of Education','','IOE','','',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(20,1,'centers','Centre for Biotechnology and Genetic Engineering','','CBGE','biochemlab1.jpg','Before the advent of biotechnology,\nobtaining adequate quantities\nof such molecules was an\narduous exercise in protein isolation\nand purification. With the\ninvention of genetic engineering,\nscientists could harness bacteria\nto crank out quantities of proteins\nthat made them feasible as drugs.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(21,1,'centers','Centre for Gender and Women Studies','','CGWS','hod.jpg','The Centre for Gender and Womens Studies is an internationally renowned research and teaching centre.<br> The centre is distinctly interdisciplinary in its focus and also aims to foster links between academic research, and political movements for gender equality and social justice.<br>\r\n\r\nWe welcome anybody with an interest in gender, sexuality and feminist research to participate in the informal and formal events organised through and affiliated with the centre.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(22,2,'directorates','Advancement Office','','AO','advancement.jpg','The University of Jos Advancement Office is a bold attempt at recreating and empowering the institution to identify and seek funding from different donors, thus making the Federal Government a major, rather than a sole funding agent. The Advancement Office will raise funds that will cover capital projects, reinvigorate research, endow chairs in areas of excellence and provide scholarships to different categories of students in the University. This will put the University on a right footing to compete and excel internationally. Alumni, parents and friends can give to the University of Jos in a variety of ways. Options include cash, cheques, bank drafts and other assets.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(23,1,'centers','Center for Normadic Education','','CNE','nomadic4.jpg','To carry out researches, experiments and evaluation<br>  that will guide, promote,facilitate and strengthen their education of nomads namely: migrant <br> pastoralists <br> and farmers who are educationally disadvantaged groups in Nigeria that will:',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(24,2,'directorates','SIWES','','SIWES','siwes-logo.GIF','<b>Students Industrial Work Experience Scheme (SIWES)</b><br>\r\nThis Scheme was designed to expose students to industrial work situation they are likely to meet after graduation. Therefore, the Scheme affords students the opportunity of familiarizing with and being exposed to the needed practical skills and experiences in handling machinery and equipment that are not readily available in institutions.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(25,1,'centers','Centre for Conflict Management and Peace Studies','','CCMPS','uj_fm2.jpg','Conflict and peace studies explore social conflict and violent behaviors. While peace studies focus on addressing these issues using nonviolent methods, war studies address the use of violent means to achieve an outcome. Conflict and peace studies graduate programs may also be known as: international conflict security, conflict management and negotiations, social change, human rights, terrorism, global security, conflict analysis, conflict resolution, mediation, social justice and human rights.\r\n<br>\r\nBasic concept in peace studies and conflict resolution, peace as vehicle of unity and development, conflict issues, types of conflict, e.g. ethnic/ religious/ political/ economic conflicts, root causes of conflicts and violence in Africa, indigene/ settler phenomenon, peace- building, management of conflict and security. Other vital topics that students are supposed to know include elements of peace studies and conflict resolution, developing a culture of peace, peace mediation and peace-keeping, alternative dispute resolution (ADR).  Dialogue/arbitration in conflict resolution, role of international organisations in conflict resolution, e.g. ECOWAS, African Union, United Nations etc are also to be understood.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(26,1,'centers','Centre for Entrepreneurship Studies','','CES','02.jpg','The Entrepreneurial Studies  enables students to develop a comprehensive understanding of entrepreneurship and the steps and background required to start a business, such as writing a business plan, funding the business, financial and managerial accounting, sales and marketing, strategic planning, business law, ethics, business management, leadership, business communications and networking<br>\r\neach student can identify opportunities for business in the courses they are offering or their environment, which they can finance or ask others to finance and thus contribute to national development',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(27,1,'centers','A. P. Leventis Ornithological Research Institute','','APLORI','APLORIbuilding.jpg','APLORIs main purpose is capacity building for conservation in West<br>  Africa. We do this primarily by running a Masters in Conservation Biology.<br> Although we grant degrees through the University of Jos we are an autonomous research institute answering directly to the Vice-Chancellor of the University.<br>  Our degree is European standard with teaching from invited international academics, exams set and run by staff of the St Andrews University, and external examiners from international universities such as Edinburgh, Ghent, Groningen and Oxford. We provide a proper Masters education without <br> compromise to fully equip tomorrows conservationists.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(28,2,'directorates','Academic Planning and Management','','APM','law.png','Planning is bringing the future into the\r\npresent so that you can do something about it\r\nnow<b> by :\r\nAlan Lakein </b><br>\r\n\r\n\r\nWhen planning for a year, plant corn. When planning\r\nfor a decade, plant trees. When planning for life, train\r\nand educate people.<b>Chinese Proverbs</b><br>\r\n\r\n<br>Environmental Scanning,<br>Curriculum Planning,<br>\r\nEnrollment Management,<br>Human Resources\r\nPlanning,<br>Planning for Information Technology,<br>\r\nStudent Services,<br>Academic Planning Within the\r\nLarger Context,<br> and <br>Linking Quality and\r\nAccountability. <b>by Brian P. Nedwek<br></b>\r\n\r\n\r\n\r\nGOOD PLANNING',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(29,1,'centers','African Centre of Excellence on Phytomedicine Research and Development','','ACEPRD','plant_sci11.jpg','The centre is strongly committed to excellence in research on the production of modern drugs from plants.<br> Research will be focused on different African leaves, <br>roots and plants so as to extract their medicinal contents for the use of human beings.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(30,3,'faculties','Agriculture','','AGRIC','works-img9.jpg','The issues facing the world today shape our work in agriculture and the environment. Learn about our commitment to people, our investment in leading research facilities and our wide network of research and education partners in agriculture.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(31,3,'faculties','Veterinary Medicine','','VET','Aplori_GARGO.jpg','Veterinarians have never been more needed by society, and we are enthusiastic about providing a science-based education second to none, that will deliver the broadly educated veterinarians that will be required to meet the animal health challenges of the future.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(32,3,'faculties','Engineering','','ENG','building_practicals2.jpg','We provide our students with an outstanding engineering education, that brings together cutting edge researchers, exceptional teachers and state-of-the-art facilities in inspiring physical and virtual environments.',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(35,6,'schools','School of Postgraduate Studies','','pg','','',NULL,NULL,1,NULL,NULL,NULL,NULL),
	(36,1,'centers','Center for Accountig Postgraduate Reseaarch','','CFAPR','center_for_accoun.jpg','The effect of economic events on the process of summarizing, analyzing, verifying, and reporting standardized financial information, and on the effects of reported information on economic events.<br>\nProfessors typically will choose a subject area and a methodology in which to focus their efforts. Subject areas include the topical areas considered under the umbrella term \"accounting.\" These include information systems, auditing and assurance, corporate governance, financial, forensic, managerial, and tax',NULL,NULL,1,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
