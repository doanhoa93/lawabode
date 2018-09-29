-- MySQL dump 10.15  Distrib 10.0.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ciblogdb
-- ------------------------------------------------------
-- Server version	10.0.36-MariaDB-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `primary_key` int(11) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (1,'post',0,'image/jpeg','.jpg','190.48','10','assets/uploads/10.jpg',1,'2015-12-24 23:43:29','2015-12-24 23:43:29'),(2,'post',0,'image/jpeg','.jpg','305.92','6','assets/uploads/6.jpg',1,'2015-12-24 23:48:00','2015-12-24 23:48:00'),(3,'post',0,'image/jpeg','.jpg','340.45','9','assets/uploads/9.jpg',1,'2015-12-24 23:48:29','2015-12-24 23:48:29'),(4,'post',0,'image/jpeg','.jpg','190.48','10','assets/uploads/10.jpg',1,'2015-12-24 23:48:45','2015-12-24 23:48:45'),(5,'post',0,'image/jpeg','.jpg','467.65','hero','assets/uploads/hero.jpg',1,'2015-12-24 23:49:10','2015-12-24 23:49:10'),(6,'post',0,'image/jpeg','.jpg','552.86','blur','assets/uploads/blur.jpg',1,'2015-12-24 23:49:42','2015-12-24 23:49:42'),(7,'post',0,'image/jpeg','.jpg','305.92','6','assets/uploads/6.jpg',1,'2015-12-24 23:55:13','2015-12-24 23:55:13'),(8,'post',0,'image/jpeg','.jpg','186.94','8','assets/uploads/8.jpg',1,'2015-12-24 23:57:38','2015-12-24 23:57:38'),(9,'post',0,'image/jpeg','.jpg','552.86','blur','assets/uploads/blur.jpg',1,'2015-12-24 23:57:50','2015-12-24 23:57:50'),(10,'post',0,'image/jpeg','.jpg','186.94','8','assets/uploads/8.jpg',1,'2015-12-24 23:57:56','2015-12-24 23:57:56'),(11,'post',0,'image/jpeg','.jpg','190.48','10','assets/uploads/10.jpg',1,'2015-12-24 23:58:33','2015-12-24 23:58:33'),(12,'post',0,'image/jpeg','.jpg','340.45','9','assets/uploads/9.jpg',1,'2015-12-24 23:58:58','2015-12-24 23:58:58'),(13,'post',0,'image/jpeg','.jpg','305.92','6','assets/uploads/6.jpg',1,'2015-12-25 00:00:54','2015-12-25 00:00:54'),(14,'post',0,'image/jpeg','.jpg','209.27','7','assets/uploads/7.jpg',1,'2015-12-25 00:02:24','2015-12-25 00:02:24'),(15,'post',0,'image/jpeg','.jpg','209.27','7','assets/uploads/7.jpg',9,'2015-12-26 02:35:57','2015-12-26 02:35:57'),(16,'post',0,'image/jpeg','.jpg','268.98','5','assets/uploads/5.jpg',9,'2015-12-26 02:37:39','2015-12-26 02:37:39'),(17,'post',0,'image/jpeg','.jpg','238.62','3','assets/uploads/3.jpg',9,'2015-12-26 02:40:10','2015-12-26 02:40:10'),(26,'post',0,'image/jpeg','.jpg','29.4','37228333_865455656982204_3937225549927153664_o','assets/uploads/37228333_865455656982204_3937225549927153664_o.jpg',1,'2018-08-04 16:51:01','2018-08-04 16:51:01'),(27,'post',0,'image/jpeg','.jpg','31.33','3','assets/uploads/3.jpg',1,'2018-09-03 22:08:43','2018-09-03 22:08:43'),(28,'post',0,'image/jpeg','.jpg','347.37','Yasuo_splash_5','assets/uploads/Yasuo_splash_5.jpg',1,'2018-09-03 22:09:25','2018-09-03 22:09:25'),(29,'post',0,'image/jpeg','.jpg','53.42','2','assets/uploads/2.jpg',1,'2018-09-03 22:09:37','2018-09-03 22:09:37'),(30,'post',0,'image/jpeg','.jpg','94.97','1','assets/uploads/1.jpg',1,'2018-09-03 22:09:43','2018-09-03 22:09:43'),(31,'post',0,'image/jpeg','.jpg','347.37','Yasuo_splash_5','assets/uploads/Yasuo_splash_5.jpg',1,'2018-09-03 22:11:23','2018-09-03 22:11:23'),(32,'post',0,'image/jpeg','.jpg','53.42','2','assets/uploads/2.jpg',1,'2018-09-13 21:02:05','2018-09-13 21:02:05'),(33,'post',0,'image/jpeg','.jpg','31.33','3','assets/uploads/3.jpg',1,'2018-09-13 21:02:16','2018-09-13 21:02:16');
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets_posts`
--

DROP TABLE IF EXISTS `assets_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_assets_posts_posts1` (`post_id`),
  KEY `fk_assets_posts_assets1` (`asset_id`),
  CONSTRAINT `fk_assets_posts_assets1` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_assets_posts_posts1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets_posts`
--

LOCK TABLES `assets_posts` WRITE;
/*!40000 ALTER TABLE `assets_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `assets_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Web Programming','web-programming',1),(2,'Web Design','web-design',1),(3,'Network  & Security','network-security',1),(4,'Search Engine Optimation (SEO)','search-engine-optimation-seo',1),(5,'Tutorial Web','tutorial-web',0),(8,'Test kategori','test-kategori',0);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Quang Hòa','hoa.cristiano@gmail.com','Cấp lại mật khẩu','sdsd',1),(2,'Quang Hòa','doan.quang.hoa@framgia.com','fhghjf','sdsdsd',1),(3,'dsds','hoa9x3@gmail.com','sdsdsd','sdsd',0),(4,'dsds','hoa9x3@gmail.com','sdsdsd','sdsd',0),(5,'sdsdsd','hoa9x3@gmail.com','fhghjf','sdsd',0),(6,'sdsdsd','hoa9x3@gmail.com','fhghjf','sdsd',0),(7,'sdsd','hoa9x3@gmail.com','fhghjf','sd',0),(8,'sdsd','sdsd','sdsd','sdsd',1);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `featured_image` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (3,'Quang Hòa','assets/uploads/37228333_865455656982204_3937225549927153664_o.jpg'),(4,'Quang Thu','assets/uploads/6.jpg');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templete`
--

DROP TABLE IF EXISTS `email_templete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `body` varchar(45) NOT NULL,
  `email_templetecol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templete`
--

LOCK TABLES `email_templete` WRITE;
/*!40000 ALTER TABLE `email_templete` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_templete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (12,'sdsdsdfgfhgjhkj','assets/uploads/3.jpg'),(13,'sdsd','assets/uploads/2.jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'members','General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industries` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `featured_image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industries`
--

LOCK TABLES `industries` WRITE;
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
INSERT INTO `industries` VALUES (1,'ENERGY, NATURAL RESOURCES &amp;amp; ENVIRONMENT','assets/uploads/2.jpg'),(2,'MARITIME, SHIPPING','assets/uploads/37228333_865455656982204_3937225549927153664_o.jpg');
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `position` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (12,'Home','home',0,1,12,NULL),(13,'About','read/about-us',0,1,14,NULL),(18,'Services','read/services',0,1,13,NULL),(21,'News','news',0,1,21,NULL),(22,'Blogs','read/blogs',0,1,22,NULL),(23,'Gallery','galleries',0,1,23,NULL),(24,'Contact','contacts',0,1,24,NULL),(25,'About Us','read/about-us',13,1,25,NULL),(26,'CEO','read/ceo',13,1,26,NULL),(27,'Associates','read/associates',13,1,27,NULL),(28,'Advisors','read/advisors',13,1,28,NULL),(29,'Industries We Serve','read/industries-we-serve',18,1,29,NULL),(30,'Services','read/services',18,1,30,NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `methods`
--

DROP TABLE IF EXISTS `methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `methods`
--

LOCK TABLES `methods` WRITE;
/*!40000 ALTER TABLE `methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `methods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `methods_groups`
--

DROP TABLE IF EXISTS `methods_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `methods_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method_id` int(11) NOT NULL DEFAULT '0',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `allow_access` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_methods_groups_groups1` (`group_id`),
  KEY `fk_methods_groups_methods1` (`method_id`),
  CONSTRAINT `fk_methods_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_methods_groups_methods1` FOREIGN KEY (`method_id`) REFERENCES `methods` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `methods_groups`
--

LOCK TABLES `methods_groups` WRITE;
/*!40000 ALTER TABLE `methods_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `methods_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text,
  `type` varchar(100) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `published_at` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL COMMENT '	',
  `create_by` varchar(45) DEFAULT 'Admin',
  `show_home_page` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (6,'About Us','about-us','<div class=\"row about-block\"> <div class=\"col-sm-6 col-xs-12\"> <div class=\"alignleft\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/about_us.jpg\" data-width=\"568\" data-height=\"356\"></span> <span data-src=\"/project-blog/assets/themes/web/images/about_us.jpg\" data-width=\"568\" data-height=\"356\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/about_us.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/about_us.jpg\" width=\"568\" height=\"356\" alt=\"image description\" ></noscript> </span> </a> </div> </div> <div class=\"col-sm-6 col-xs-12 txt-box\"> <header class=\"about-heading\"> <p>We are a registered Law firm providing legal assistance to global clients. We protect International Investment and ease International Trade for the global clients intending to trade with and invest in Bangladesh.</p> </header> <p>For more than 40 years, the partners of <strong>Law Abode Global Ltd</strong> <code>(www.lawabode.com)</code>, a specialized firm of International Trade and Investment, VAT, Customs &amp; Tax, civil matters Consultancy, Litigation and Arbitration, has been providing exceptional services to clients in complex litigation, corporate and tax, civil and counseling matters. Our visionaries have made the groundwork for next century of superior legal work and client service. Our firm comprises a group of legal professionals who are dedicated to teamwork, collaboration and superior client service. Sitting in a country of Asia, we understand and work to fulfill the needs of our global clients. We are global from Asia.</p> <a href=\"team.html\" class=\"btn btn-default\">Meet Our Team</a> </div> </div> <div class=\"row\"> <article class=\"col-sm-4 col-xs-12 about-info\"> <h2>Global Reach</h2> <p>We work to secure the international investments in Bangladesh and trade with Bangladesh. To give consultancies and to relieve our global clients from any problem they are confronted with, we work in close cooperation with the Bangladesh offices and Embassies of Bangladesh in the country concerned or the office of the said country in Bangladesh. We harness our knowledge to provide thoughtful advice for the innumerable legal and business challenges that our clients face.</p> <!-- <ul class=\"about-nav list-unstyled\"> <li><a href=\"#\"><i class=\"fa fa-check\"></i> Dolor sit amet, consectetuer adipiscing elit.</a></li> </ul> --> </article> <article class=\"col-sm-4 col-xs-12 about-info\"> <h2>Pro bono &amp; Legal researches</h2> <!-- accordian of the page --> <p> Our lawyers and consultants devote a good amount of pro bono hours annually, playing a vital role in bringing changes in lives and trades. We work with some charitable organizations as part of our corporate responsibility program. </p> <p> We are engaged with researches to bring ethics in prominence in the businesses. We are honest in working to reduce the backlog of the cases in courts and improve dispute resolution mechanism through ADR. </p> </article> <article class=\"col-sm-4 col-xs-12 about-info\"> <h2>Training &amp; Research Centre</h2> <!-- progress-area of the page --> <p> Law Abode is undertaking Associate’s training that combines a legal practice with development programs including formal training, mock exercises, lectures and presentations. Law Abode is in a process of formalizing a training and Research Center. </p> </article> </div> <div class=\"row\"> <article class=\"col-sm-4 col-xs-12 about-info\"> <h2>Our Mission</h2> <!-- progress-area of the page --> <!-- <p class=\"text-capitalize\"> The Mission of our firm is: </p> --> <ul class=\"about-nav list-unstyled\"> <li><a href=\"#\"><i class=\"fa fa-check\"></i> To help Bangladesh to be a business hub of Asia by giving highest comfort and security to the foreign investors, thus to encourage FDI in Bangladesh</a></li> <li><a href=\"#\"><i class=\"fa fa-check\"></i> To provide the highest quality of professional service to our clients</a></li> <li><a href=\"#\"><i class=\"fa fa-check\"></i> To adhere to the highest ethical standards</a></li> <li><a href=\"#\"><i class=\"fa fa-check\"></i> To be an influential part of each client\'s success</a></li> <li><a href=\"#\"><i class=\"fa fa-check\"></i> To would engage our utmost endeavor for the betterment of the legal profession and the diverse communities in which we practice</a></li> <li><a href=\"#\"><i class=\"fa fa-check\"></i> To develop, support and encourage new generations of lawyers to carry on our commitment to excellence and integrity</a></li> <!--<li><a href=\"#\"><i class=\"fa fa-check\"></i> We seek long-term, partnering relationships with clients, to the end of providing the best total solution to the client\'s legal needs</a></li>--> </ul> </article> <article class=\"col-sm-4 col-xs-12 about-info\"> <h2>Objective of our firm</h2> <p>Having the end objective to bring positive results for the clients, we engage innovative and realistic strategies and do hard work to ensure that our clients\' legal needs are met. We maintain out ethical values. In our firm we conduct periodic review sessions to measure our progress against those objectives.</p> <p> We seek long-term, partnering relationships with clients, to the end of providing the best total solution to the client\'s legal needs.</p> <!-- <ul class=\"about-nav list-unstyled\"> <li><a href=\"#\"><i class=\"fa fa-check\"></i> Dolor sit amet, consectetuer adipiscing elit.</a></li> </ul> --> </article> <article class=\"col-sm-4 col-xs-12 about-info\"> <h2>Comfort to the clients</h2> <!-- accordian of the page --> <p> Our software always updates our clients about the developments in the dispute resolution, about cases in the courts and about possibility of dispute resolution by ‘negotiation’ first, then mediation or arbitration. Thus our firm keeps pace with today\'s technology by providing our lawyers, staff and clients with the most advanced technology tools available to facilitate the practice of law. </p> </article> </div>','page','',1,'2015-12-26',1,'2015-12-26 19:08:39','2018-08-02 23:27:06',NULL,NULL),(8,'News','news','<div>News page</div><div><br></div>','page','',1,'0000-00-00',1,'2018-07-28 19:13:13','2018-07-29 22:06:29',NULL,NULL),(9,'Services','services','<div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col\"> <div class=\"img-box\"></div> <h2><a href=\"#\">WTO & Trade Law- specially Export & Import related </a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col approch\"> <div class=\"img-box\"></div> <h2><a href=\"#\">International Investment Law</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col rules\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Direct & Indirect Taxation</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col client\"> <div class=\"img-box\"></div> <h2><a href=\"#\">All Corporate Consulting</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col defence\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Banking & Investment</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col divorce\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Litigation & Arbitration</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col drug\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Anti-Dumping & Anti-Subsidies</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col death\"> <div class=\"img-box\"></div> <h2><a href=\"#\">FDI- One stop solution and consultancy</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Information Technology & E-Commerce</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col approch\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Infrastructure & Real Estate</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col rules\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Aviation</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col client\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Capital Market</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col defence\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Intellectual Property</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col divorce\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Media & Entertainment</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col drug\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Competition & Consumer Protection</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col death\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Water, Gas & Power</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Financial Crimes, Anti-Money Laundering and Mobile Banking</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col approch\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Public Limited Company Representation</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col rules\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Project Development and Financial consultancy</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col client\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Investment Funds management- consultancy and security</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col defence\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Islamic Finance, Investment and banking</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col divorce\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Mergers and Acquisitions</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col drug\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Renewable energy</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col death\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Healthcare and Life Sciences</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Negotiation with Venture capital</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col approch\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Legal support to Entrepreneurship</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col rules\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Product Liability and Consumer Class Actions</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col client\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Environment, Land & Resources</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col defence\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Telecommunications</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col divorce\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Company Matters</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col drug\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Admiralty</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col death\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Cybercrime & Security</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div> <div class=\"row services-holder services\"> <div class=\"col-sm-3 col-xs-12 services-col rules\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Insurance- Personal and corporate</a></h2> <!--<p class=\"height-200\">Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> <div class=\"col-sm-3 col-xs-12 services-col client\"> <div class=\"img-box\"></div> <h2><a href=\"#\">Labor and Employment Issues</a></h2> <!--<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p> <a href=\"#\" class=\"btn btn-default\">Read More +</a>--> </div> </div>','page','',1,'2018-07-28',1,'2018-07-28 20:07:41','2018-07-30 21:38:42',NULL,NULL),(11,'Contact','contact','<main id=\"main\"> <!-- contact-form about of the page --> <div class=\"container\"> <div class=\"row\"> <div class=\"col-xs-12\"> <div class=\"site-map\"> <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d542.9368074937964!2d90.40978809110396!3d23.73207939578404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f68f68cb71%3A0x52ab4dc282fae1e!2sM.L.+Hotel+Tower+Ltd.!5e0!3m2!1sen!2s!4v1515242545384\" width=\"1200\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe> </div> </div> </div> <br/><br/> <div class=\"row\"> <div class=\"col-xs-12 team-contact add\"> <h2>Get In Touch</h2> <div> <p>Please fill out the form below along with your query and someone from our team will get back to you..<br/> Alternatively you can email  <a href=\"mailto:kawsar@lawabode.com\">info@lawabode.com</a>, <a href=\"mailto:kawsar@lawabode.com\">kawsar@lawabode.com</a>, <a href=\"mailto:kawsar@lawabode.com\">kawsar215@yahoo.co.uk</a> </p> </div> <br/> <!-- comments-form of the page --> <form class=\"comments-form add\" action=\"#\"> <div class=\"form-row\"> <div class=\"form-group\"> <label for=\"name1\"><i class=\"fa fa-user\"></i></label> <input type=\"text\" name=\"name\" placeholder=\"Name\" id=\"name1\" class=\"form-control\"> </div> <div class=\"form-group\"> <label for=\"emailaddress\"><i class=\"fa fa-envelope\"></i></label> <input type=\"text\" name=\"email\" placeholder=\"Email\" id=\"emailaddress\" class=\"form-control\"> </div> <div class=\"form-group\"> <label for=\"web\"><i class=\"fa fa-dribbble\"></i></label> <input type=\"text\" name=\"subject\" placeholder=\"Subject\" id=\"web\" class=\"form-control\"> </div> </div> <div class=\"form-row textarea\"> <div class=\"form-group\"> <label for=\"textarea\"><i class=\"fa fa-paper-plane\"></i></label> <textarea placeholder=\"Comment...\" name=\"message\" id=\"textarea\" rows=\"10\" cols=\"30\" class=\"form-control\"></textarea> </div> </div> <button class=\"btn btn-default\" id=\"submit\" type=\"submit\">Submit</button> </form> </div> </div> </div> <!-- clients-gallery of the Page --> </main>','page','',1,'2018-07-28',1,'2018-07-28 21:22:32','2018-07-28 22:08:05',NULL,NULL),(12,'Gallery','gallery','<section class=\" practice practice2\"> <div class=\"row practice-block\"> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g1.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g1.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g1.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g1.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Trade mark Cases</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Trade mark Cases</strong> --> <p>Chairman is receiving Gold Medal from the Honorable Prime Minister Shekh Hasina (in 1997).</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g2.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g2.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g2.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g2.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Crime Cases</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Crime Cases</strong> --> <p>Chairman, among the Board of Directors of DCCI, meets President of Bangladesh</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g3.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g3.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g3.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g3.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Accidental Cases</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Accidental Cases</strong> --> <p>Chairman in a meeting with the Hon’ble Finance Minister of Bangladesh</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> </div> <div class=\"row practice-block\"> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g4.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g4.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g4.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g4.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Real Estate &amp; Land</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Real Estate &amp; Land</strong> --> <p>Chairman meets former governor of Bangladesh Bank, the Central Bank of Bangladesh</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g5.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g5.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g5.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g5.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Business &amp; Financial</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Business &amp; Financial</strong> --> <p>CEO Presented the Key Note in the seminar entitled “Media laws of Bangladesh: Problems and Prospects”</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g6.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g6.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g6.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g6.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Family Law</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Family Law</strong> --> <p>CEO with Barrister Azmalul Hossain QC and Barrister Khaled Hamid FCIArb</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> </div> <div class=\"row practice-block\"> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g7.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g7.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g7.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g7.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Fraud cases</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Fraud cases</strong> --> <p>CEO before presenting at a seminar</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g8.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g8.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g8.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g8.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Drug Offences</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Drug Offences</strong> --> <p>Guest review session in the seminar “Media laws of Bangladesh: Problems and Prospects ” </p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g9.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g9.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g9.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g9.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Money Laundering</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Money Laundering</strong> --> <p>After providing a training in BIAC</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> </div> <div class=\"row practice-block\"> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g10.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g10.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g10.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g10.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Fraud cases</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Fraud cases</strong> --> <p>Before the office of BIAC</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g11.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g11.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g11.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g11.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Drug Offences</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Drug Offences</strong> --> <p>In a talk show in GTV in the issue of ‘Financial Crime’</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> <div class=\"col-sm-4 col-xs-12 practice-col\"> <a href=\"#\"> <span data-picture=\"\" data-alt=\"image description\"> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g12.jpg\" data-width=\"368\" data-height=\"279\"></span> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g12.jpg\" data-width=\"368\" data-height=\"279\" data-media=\"(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)\"></span> <!-- retina 2x desktop --> <!--[if (lt IE 9) & (!IEMobile)]> <span data-src=\"/project-blog/assets/themes/web/images/gallery/g12.jpg\"></span> <![endif]--> <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. --> <noscript><img src=\"/project-blog/assets/themes/web/images/gallery/g12.jpg\" width=\"368\" height=\"279\" alt=\"image description\" ></noscript> </span> <!-- <h3>Money Laundering</h3> --> <div class=\"over\"> <div class=\"box\"> <div class=\"block\"> <div class=\"frame\"> <!-- <strong class=\"title\">Money Laundering</strong> --> <p>In a talk show in Asian TV in the issue of ‘Value Added Tax’</p> <span class=\"btn-read\">[+]</span> </div> </div> </div> </div> </a> </div> </div> </section>','page','',1,'2018-07-28',1,'2018-07-28 21:39:11','2018-08-02 19:57:21',NULL,NULL),(16,'CEO','ceo','CEO page<br>','page','',1,'0000-00-00',1,'2018-07-29 22:01:12','2018-07-29 22:01:38',NULL,NULL),(17,'Associates','associates','Associates page<br>','page','',1,'0000-00-00',1,'2018-07-29 22:02:42','2018-07-29 22:02:42',NULL,NULL),(18,'Industries We Serve','industries-we-serve','Industries We Serve page<br>','page','',1,'0000-00-00',1,'2018-07-29 22:03:39','2018-07-29 22:03:39',NULL,NULL),(19,'Blogs','blogs','Blogs page<br>','page','',1,'0000-00-00',1,'2018-07-29 22:04:52','2018-07-29 22:04:52',NULL,NULL),(20,'Advisors','advisors','Advisors page<br>','page','',1,'0000-00-00',1,'2018-07-29 22:05:33','2018-07-29 22:05:33',NULL,NULL),(21,'sdsdsdsdsdsd','sdsdsdsdsdsd','<img src=\"/project-blog/assets/uploads/3.jpg\" width=\"265\" height=\"259\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src=\"/project-blog/assets/uploads/5.jpg\" width=\"264\" height=\"257\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src=\"http://127.0.0.1/project-blog/assets/uploads/5.jpg\" width=\"264\" height=\"257\">','page','',1,'0000-00-00',1,'2018-07-30 21:14:53','2018-07-30 21:16:12',NULL,NULL),(23,'Tin bong da','tin-bong-da','Ha','post','assets/uploads/2.jpg',1,'2018-09-24',1,'2018-09-24 00:38:57','2018-09-24 00:38:57','Admin',NULL),(28,'dsd','dsd','sd','post','',1,'0000-00-00',1,'2018-09-25 22:47:46','2018-09-25 23:03:53','Admin',1),(29,'sdsd','sdsd','sdsdsd','post','',1,'0000-00-00',1,'2018-09-25 22:48:09','2018-09-25 22:52:48','Admin',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_categories`
--

DROP TABLE IF EXISTS `posts_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_categories_categories1` (`category_id`),
  KEY `fk_posts_categories_posts1` (`post_id`),
  CONSTRAINT `fk_posts_categories_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_posts_categories_posts1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_categories`
--

LOCK TABLES `posts_categories` WRITE;
/*!40000 ALTER TABLE `posts_categories` DISABLE KEYS */;
INSERT INTO `posts_categories` VALUES (2,23,3);
/*!40000 ALTER TABLE `posts_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_tags`
--

DROP TABLE IF EXISTS `posts_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_tags_tags1` (`tag_id`),
  KEY `fk_posts_tags_posts1` (`post_id`),
  CONSTRAINT `fk_posts_tags_posts1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_posts_tags_tags1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_tags`
--

LOCK TABLES `posts_tags` WRITE;
/*!40000 ALTER TABLE `posts_tags` DISABLE KEYS */;
INSERT INTO `posts_tags` VALUES (2,23,5);
/*!40000 ALTER TABLE `posts_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `content` text COLLATE latin1_general_ci,
  `status` tinyint(4) NOT NULL,
  `featured_image` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'LITIGATION & FREE LEGAL ADVICE','We provide Litigation support In Supreme Court of Bangladesh, District Courts and Tribunals. We provide litigation support in Labour Tribunal, VAT, Customs Tribunal, Administrative Tribunal and other tribunals. We provide free legal advice to our clients everyday (except Friday and Saturday) from 6pm to 7pm. For free legal advice call- 0088-01613776651\n\n',1,NULL),(2,'ARBITRATION & MEDIATION','We advice mediation first, then Arbitration for any dispute resolution. We provide Arbitration support and help in arrangement of ad hoc or institutional arbitration.',1,NULL),(3,'BUSINESS NEGOTIATION','A good negotiation skill helps your business expansion. We provide training as well as we participate in business negotiations, such as, in International and National Procurement, Sales and in CBA issues etc.',1,NULL),(4,'CONSULTANCY & CLIENT CONFERENCING\n','We provide consultancy to FDI and other International Trade and Investments. We also provide consultancy to trade and investment to the national organizations. To give a perfect advice to our client, we arrange client conferencing to find out real merit of the case. Then give advice accordingly.',1,NULL),(8,'sdfhgd','sddfsdsd',0,'assets/uploads/9.jpg');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'email_contact','doan.quang.hoa@framgia.com',''),(2,'image_max_size','2000',''),(3,'file_max_size','3000',''),(4,'file_type','doc|zip|pdf|xlsx|xls|ppt|docx|pptx','Tipe file yang di ijinkan untk di upload'),(5,'image_type','jpg|jpeg|png|gif','Tipe image yang diperbolehkan untuk di upload'),(6,'pagination_limit','15','Batas list /record (artikel, file, dll) per halaman'),(7,'main_office','13F, Keangnam Hanoi Landmark Tower, Plot E6, Me Tri, Nam Tu Liem, Hanoi, Vietnam',''),(8,'site_title','My Blog',''),(9,'facebook_link','https://www.facebook.com/quanghoa93',''),(10,'twitter_link','asasas',''),(11,'tumblr_link','asasas',''),(12,'flickr_flickr','asas',''),(13,'linkedin_link','https://www.linkedin.com/in/h%C3%B2a-%C4%91o%C3%A0n-a86355125/',''),(18,'pagination_limit_directory','15','');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'sdsd','assets/uploads/3.jpg',1),(4,'sdsdasdfg','assets/uploads/3.jpg',0),(5,'sdsdssdsdfghjjghfgdfdf b 111111111dsdfgfdf','assets/uploads/37228333_865455656982204_3937225549927153664_o.jpg',1);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'CodeIgniter','codeigniter',1),(2,'Responsive','responsive',1),(3,'basic cms','basic-cms',1),(4,'tag baru','tag-baru',1),(5,'Simple CMS','simple-cms',1),(6,'Security Tips','security-tips',1),(7,'Hack & DDOS','hack-ddos',1);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `featured_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'127.0.0.1','administrator','$2y$08$aKqjmKe5p6.Pz9wTDWBFTOuegzRZPR0Bi3iSCEYhJloDfiA/bGZDO','','hoa9x3@gmail.com','',NULL,NULL,'MQM3sTTHBt1CqaissQVfLe',1268889823,1538208859,1,'Admin','istrator','ADMINsssss','0','assets/uploads/37228333_865455656982204_3937225549927153664_o.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (9,1,1),(10,1,2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-29 15:18:07
