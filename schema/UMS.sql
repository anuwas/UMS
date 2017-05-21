-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: ums
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `sys_company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `label_name` varchar(255) NOT NULL,
  `custom_label` varchar(255) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `company_status` int(2) NOT NULL,
  `parent_sys_company_id` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) DEFAULT NULL,
  `company_creation_time` datetime NOT NULL,
  `company_created_by` int(11) NOT NULL,
  `company_updated_time` datetime NOT NULL,
  `company_updated_by` int(11) NOT NULL,
  PRIMARY KEY (`sys_company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'PeoplePro','PeoplePro','',NULL,1,0,NULL,'2017-05-02 20:26:31',1,'2017-05-02 20:26:31',1),(2,'Redknee','Redknee','Redknee',NULL,1,0,NULL,'2017-05-08 23:27:21',1,'2017-05-08 23:27:32',1),(3,'Redknee Asia Pacific','Redknee Asia Pacific','Redknee Asia Pacific',NULL,1,2,NULL,'2017-05-08 23:28:36',1,'2017-05-08 23:28:41',1),(4,'Redknee India','Redknee India','Redknee India',NULL,1,3,NULL,'2017-05-08 23:29:39',1,'2017-05-08 23:29:45',1),(5,'Redknee Easter Region','Redknee Easter Region','Redknee Easter Region',NULL,1,4,NULL,'2017-05-08 23:30:39',1,'2017-05-08 23:30:47',1),(6,'Redknee Kolkata','Redknee Kolkata','Redknee Kolkata',NULL,1,5,NULL,'2017-05-08 23:31:20',1,'2017-05-08 23:31:27',1),(7,'Redknee Bhuvneshwar','Redknee Bhuvneshwar','Redknee Bhuvneshwar',NULL,1,5,NULL,'2017-05-08 23:32:17',1,'2017-05-10 21:11:05',1);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppl_employees`
--

DROP TABLE IF EXISTS `ppl_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppl_employees` (
  `sys_employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_company_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_name` varchar(250) NOT NULL,
  `employee_doj` date NOT NULL,
  `employee_dob` date NOT NULL,
  `employee_photo_img` varchar(250) DEFAULT NULL,
  `Address` text,
  `Gender` int(11) NOT NULL,
  PRIMARY KEY (`sys_employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppl_employees`
--

LOCK TABLES `ppl_employees` WRITE;
/*!40000 ALTER TABLE `ppl_employees` DISABLE KEYS */;
INSERT INTO `ppl_employees` VALUES (1,1,1,'PPL Admin','2017-01-01','2017-01-01','aa','aa',1),(2,1,2,'PPL User 2','2017-01-01','2017-01-01','1','a',1),(3,1,3,'PPL User 3','2017-01-01','2017-01-01','2','2',1),(4,2,4,'RK_admin','2017-01-01','2017-01-01','1','a',1),(5,3,5,'RK_AP','2017-01-01','2017-01-01','','',1),(6,4,6,'RK_india','2017-01-01','2017-01-01','','',1),(7,5,7,'RK_ER','2017-01-01','2017-01-01','','',1),(8,6,8,'RK_kol','2017-01-01','2017-01-01','','',1),(9,7,9,'RK_bhub','2017-01-01','2017-01-01','','',1),(10,6,10,'Kol Emp 1','2017-01-01','2017-01-01','','',1),(16,6,16,'Anupam Biswas','2017-01-01','2017-01-01','','',1),(17,6,17,'Biswas Anupam','2017-01-01','2017-01-01','','',1);
/*!40000 ALTER TABLE `ppl_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_company`
--

DROP TABLE IF EXISTS `ums_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_company` (
  `sys_company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `label_name` varchar(255) NOT NULL,
  `custom_label` varchar(255) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `company_status` int(2) NOT NULL,
  `parent_sys_company_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `company_creation_time` datetime NOT NULL,
  `company_created_by` int(11) NOT NULL,
  `company_updated_time` datetime NOT NULL,
  `company_updated_by` int(11) NOT NULL,
  PRIMARY KEY (`sys_company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_company`
--

LOCK TABLES `ums_company` WRITE;
/*!40000 ALTER TABLE `ums_company` DISABLE KEYS */;
INSERT INTO `ums_company` VALUES (1,'TCS','TataCS','',NULL,1,0,NULL,'2017-05-02 20:26:31',1,'2017-05-02 20:26:31',1);
/*!40000 ALTER TABLE `ums_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_login_details`
--

DROP TABLE IF EXISTS `ums_login_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_login_details` (
  `user_id` int(11) NOT NULL,
  `system_session_id` varchar(50) NOT NULL,
  `native_token` varchar(100) DEFAULT NULL,
  `login_time` datetime NOT NULL,
  `access_ip` varchar(45) DEFAULT NULL,
  `access_port` varchar(5) DEFAULT NULL,
  `access_gateway` varchar(45) DEFAULT NULL,
  `actual_access_ip` varchar(45) DEFAULT NULL,
  `device_type` varchar(100) DEFAULT NULL,
  `operating_system` varchar(100) DEFAULT NULL,
  `operating_system_manufacturer` varchar(100) DEFAULT NULL,
  `browser_name` varchar(100) DEFAULT NULL,
  `browser_version` varchar(100) DEFAULT NULL,
  `browser_manufacturer` varchar(100) DEFAULT NULL,
  `browser_type` varchar(100) DEFAULT NULL,
  `browser_rendering_engine` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`system_session_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `ums_login_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ums_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_login_details`
--

LOCK TABLES `ums_login_details` WRITE;
/*!40000 ALTER TABLE `ums_login_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_login_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_option`
--

DROP TABLE IF EXISTS `ums_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_option` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(25) NOT NULL,
  `option_description` varchar(200) DEFAULT NULL,
  `option_type` int(2) NOT NULL,
  `option_area` int(2) NOT NULL,
  `option_status` int(2) NOT NULL,
  `option_link` varchar(200) NOT NULL DEFAULT '#',
  `option_icon` varchar(100) DEFAULT NULL,
  `option_order` int(2) NOT NULL DEFAULT '0',
  `parent_option_id` int(11) NOT NULL,
  `enable_toolbox` tinyint(1) NOT NULL DEFAULT '0',
  `object_reference_key` varchar(100) DEFAULT NULL,
  `level` int(1) NOT NULL DEFAULT '0',
  `icon_class` varchar(100) DEFAULT NULL,
  `add_data` int(1) NOT NULL DEFAULT '0',
  `edit_data` int(1) NOT NULL DEFAULT '0',
  `delete_data` int(1) NOT NULL DEFAULT '0',
  `view_data` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_option`
--

LOCK TABLES `ums_option` WRITE;
/*!40000 ALTER TABLE `ums_option` DISABLE KEYS */;
INSERT INTO `ums_option` VALUES (1,'User','',1,1,1,'#','1492791555_option.png',1,0,0,'Object reference key1',0,'fa-image',0,0,0,0),(2,'User List','',1,1,1,'umsuser','1492791584_option.png',1,1,0,'Object reference key1',0,'fa-file-image-o',0,0,0,0),(3,'Role -&- Option ','',1,1,1,'#','1492791743_option.png',2,0,0,'Object reference key1',0,'fa-list-alt',0,0,0,0),(4,'Role managment','',1,1,1,'umsrole','1492791777_option.png',1,3,0,'Object reference key1',0,'fa-youtube',0,0,0,0),(5,'Option managment','',1,1,1,'umsoption','1492791820_option.png',2,3,0,'Object reference key1',0,'fa-th-large',0,0,0,0),(6,'Role - option relation','',1,1,1,'umsroleoptionmap','1492791855_option.png',3,3,0,'Object reference key1',0,'fa-comments-o',0,0,0,0),(7,'About','',1,1,1,'about','1492792081_option.png',4,0,0,'Object reference key1',0,'fa-circle-o',0,0,0,0),(8,'Help','',1,1,3,'#','1492853658_option.png',1,0,0,'NA',0,'fa-list-alt',0,0,0,0),(9,'Company Managment','',1,1,1,'#','1493727052_option.png',3,0,0,'Object reference key1',0,'fa-puzzle-piece',0,0,0,0),(10,'Company List','',1,1,1,'company','1493727131_option.png',1,9,0,'Object reference key1',0,'fa-user',0,0,0,0),(11,'Company Tree',NULL,1,1,1,'company/tree',NULL,1,9,0,NULL,0,'fa-tree',0,0,0,0),(12,'Employee List',NULL,1,1,1,'pplemployees',NULL,1,1,0,NULL,0,'fa-user',0,0,0,0),(13,'User Role',NULL,1,1,1,'umsuserrolemap',NULL,1,3,0,NULL,0,'fa-user',0,0,0,0);
/*!40000 ALTER TABLE `ums_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_role`
--

DROP TABLE IF EXISTS `ums_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  `role_description` varchar(500) DEFAULT NULL,
  `role_area` int(2) NOT NULL,
  `role_status` int(2) NOT NULL,
  `additional_id` varchar(100) DEFAULT NULL,
  `role_creation_time` datetime NOT NULL,
  `role_created_by` int(11) NOT NULL,
  `role_updated_time` datetime NOT NULL,
  `role_updated_by` int(11) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_role`
--

LOCK TABLES `ums_role` WRITE;
/*!40000 ALTER TABLE `ums_role` DISABLE KEYS */;
INSERT INTO `ums_role` VALUES (1,'PPL Administrators Role','This is for admin to get all permission.',1,1,'Admin','2017-04-21 21:47:28',1,'2017-04-21 21:47:28',1),(2,'sub role1','',1,1,'Additional 1','2017-04-21 21:58:45',1,'2017-04-21 21:58:45',1),(3,'U-manager','',2,1,'123','2017-04-24 12:00:19',1,'2017-04-24 12:00:19',1),(4,'Company Administrator','This is company specific administration',1,1,'Admin','2017-05-20 12:00:19',1,'2017-05-20 12:00:19',1);
/*!40000 ALTER TABLE `ums_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_role_option_map`
--

DROP TABLE IF EXISTS `ums_role_option_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_role_option_map` (
  `role_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `ums_role_option_map_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ums_role_option_map_id`),
  KEY `FK_role_option_role` (`role_id`),
  KEY `FK_role_option_option` (`option_id`),
  CONSTRAINT `FK_role_option_option` FOREIGN KEY (`option_id`) REFERENCES `ums_option` (`option_id`),
  CONSTRAINT `FK_role_option_role` FOREIGN KEY (`role_id`) REFERENCES `ums_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_role_option_map`
--

LOCK TABLES `ums_role_option_map` WRITE;
/*!40000 ALTER TABLE `ums_role_option_map` DISABLE KEYS */;
INSERT INTO `ums_role_option_map` VALUES (3,1,1,1),(3,2,1,2),(2,1,1,3),(2,2,1,4),(2,3,1,5),(2,5,1,6),(2,7,1,7),(1,1,1,8),(1,2,1,9),(1,3,1,10),(1,4,1,11),(1,5,1,12),(1,6,1,13),(1,7,1,14),(1,9,1,15),(1,10,1,16),(1,11,1,17),(1,12,1,18),(4,1,1,19),(4,2,1,20),(4,3,1,21),(4,4,1,22),(4,6,1,23),(4,9,1,24),(4,10,1,25),(4,11,1,26),(1,13,1,27),(4,13,1,28),(4,12,1,29);
/*!40000 ALTER TABLE `ums_role_option_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_session_details`
--

DROP TABLE IF EXISTS `ums_session_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_session_details` (
  `user_id` int(11) NOT NULL,
  `system_session_id` varchar(50) NOT NULL,
  `session_status` int(2) NOT NULL,
  `native_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`system_session_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `ums_session_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ums_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_session_details`
--

LOCK TABLES `ums_session_details` WRITE;
/*!40000 ALTER TABLE `ums_session_details` DISABLE KEYS */;
INSERT INTO `ums_session_details` VALUES (1,'08l57a0bisfkr86ki0p0urctnjoebom7',1,'ti9amoqzwwrf90bgxrjqwheyla1bk2oyuv0m1xxxb0v8q60xos'),(6,'9njckfgfe2mqkhl8c5d3084rt57nm50i',1,'nk57et2cyht8orr3vwshe74x3g1fpbwofpabkwspxev5zxyef6'),(1,'b8hp99it3u554v5kik43jd9kt49nb82j',1,'tb2fvepb2i3c9lbnc1y78b0k388yefw3gbhqlin4qnf7dkw8z3'),(1,'er8jjhkgjuihgh5gcei1ctqs9blcnju3',1,'qv9z8za4mhw60uh622l222cyl325go3vf9163cysw2byq2t9rh'),(1,'g365kfr5qsf7io16ihbcactngt3e1i7t',1,'frecwlvszz8cj40r860zwfiw9hwcdb0pqnbp9yb54k2nylveb7'),(1,'gap7qkeulds909mptp667gt75co0ek5f',1,'y291nzs58s8m5al3cejaeimoedtfr9o9ai3y7d3xdqn9aqgt7r'),(1,'m31st0pqr53jpefj5temu2s1199coqks',1,'rmkzwgg1tcwhqdva4qiwmldxs1zd1vr2xadppjxm139nmdkscm'),(1,'ogsggcnekcoin01tt9vvtk52u51msnv1',1,'cq37n8e9aa4z76vebyjpmcwean5vcqiyvvf3s7gtdfa8hoj39z'),(1,'s87elfclufuphbe50dptmtsviv3mj62i',1,'iwem3pu3cci03hbnl82hskwngwncggl9pd0dwqa8cc141ba9e9');
/*!40000 ALTER TABLE `ums_session_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_user`
--

DROP TABLE IF EXISTS `ums_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_access_key` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(90) NOT NULL,
  `user_type` int(10) NOT NULL,
  `user_status` int(2) NOT NULL,
  `additional_id` int(10) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `user_creation_stamp` datetime NOT NULL,
  `user_created_by` int(11) DEFAULT NULL,
  `user_updated_stamp` datetime NOT NULL,
  `user_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_access_key` (`user_access_key`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_user`
--

LOCK TABLES `ums_user` WRITE;
/*!40000 ALTER TABLE `ums_user` DISABLE KEYS */;
INSERT INTO `ums_user` VALUES (1,'1','ppl_admin','4439c90d70a03c66d5de0a73ee8c7f50',1,1,1,'Adminfirst','Adminlast','admin@admin.com','2017-04-11 00:00:00',NULL,'2017-04-11 00:00:00',NULL),(3,'2','ppl_user2','21232f297a57a5a743894a0e4a801fc3',2,1,1,'First Nam21','Last Name21','aaa@aaa11.com','2017-04-19 18:18:34',1,'2017-04-21 21:59:13',1),(6,'3','ppl_user3','21232f297a57a5a743894a0e4a801fc3',2,1,1,'Emp','Admin','emp_admin@gmail.com','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(7,'4','rk_admin','21232f297a57a5a743894a0e4a801fc3',2,1,2,'a','a','a','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(11,'5','rk_asia_pacific_admin','21232f297a57a5a743894a0e4a801fc3',2,1,3,'a','a','a','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(12,'6','rk_india_admin','21232f297a57a5a743894a0e4a801fc3',2,1,4,'a','a','a','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(13,'7','rk_estern_region_admin','21232f297a57a5a743894a0e4a801fc3',2,1,5,'a','a','a','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(14,'8','rk_kolkata_admin','21232f297a57a5a743894a0e4a801fc3',2,1,6,'a','a','a','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(15,'9','rk_bhuban_admin','21232f297a57a5a743894a0e4a801fc3',2,1,7,'a','a','a','2017-04-24 12:02:54',1,'2017-04-24 12:02:54',1),(16,'10','10','21232f297a57a5a743894a0e4a801fc3',2,1,6,'fname','lname','demo@gmail.com','2017-05-21 05:51:45',1,'2017-05-21 05:51:45',1),(17,'16','Red16_Anupam','21232f297a57a5a743894a0e4a801fc3',2,1,6,'fname','lname','demo@gmail.com','2017-05-21 06:11:54',1,'2017-05-21 06:11:54',1),(18,'17','RED17_Biswas','21232f297a57a5a743894a0e4a801fc3',1,1,6,'fname','lname','demo@gmail.com','2017-05-21 06:16:42',1,'2017-05-21 06:16:42',1);
/*!40000 ALTER TABLE `ums_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_user_role_map`
--

DROP TABLE IF EXISTS `ums_user_role_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_user_role_map` (
  `ums_user_role_map_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`ums_user_role_map_id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `ums_user_role_map_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ums_user` (`user_id`),
  CONSTRAINT `ums_user_role_map_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `ums_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_user_role_map`
--

LOCK TABLES `ums_user_role_map` WRITE;
/*!40000 ALTER TABLE `ums_user_role_map` DISABLE KEYS */;
INSERT INTO `ums_user_role_map` VALUES (1,1,1),(2,3,2),(3,6,2),(4,6,3),(5,7,4),(6,14,4);
/*!40000 ALTER TABLE `ums_user_role_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_user_verification`
--

DROP TABLE IF EXISTS `ums_user_verification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_user_verification` (
  `user_id` int(11) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  KEY `user_id` (`user_id`),
  CONSTRAINT `ums_user_verification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ums_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_user_verification`
--

LOCK TABLES `ums_user_verification` WRITE;
/*!40000 ALTER TABLE `ums_user_verification` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_user_verification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_view_configuration`
--

DROP TABLE IF EXISTS `ums_view_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_view_configuration` (
  `ums_view_configuration_id` int(10) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(155) DEFAULT NULL,
  `attribute_name` varchar(155) DEFAULT NULL,
  `index_view` int(1) NOT NULL DEFAULT '1',
  `create_view` int(1) NOT NULL DEFAULT '1',
  `update_view` int(1) NOT NULL DEFAULT '1',
  `view_view` int(1) DEFAULT '1',
  `sequence_number` int(10) NOT NULL,
  PRIMARY KEY (`ums_view_configuration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=409 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_view_configuration`
--

LOCK TABLES `ums_view_configuration` WRITE;
/*!40000 ALTER TABLE `ums_view_configuration` DISABLE KEYS */;
INSERT INTO `ums_view_configuration` VALUES (202,'company','sys_company_id',1,1,1,1,1),(203,'company','company_name',1,1,1,1,2),(204,'company','label_name',1,1,1,1,3),(205,'company','custom_label',1,1,1,1,4),(206,'company','address_id',1,1,1,1,5),(207,'company','company_status',1,1,1,1,6),(208,'company','parent_sys_company_id',1,1,1,1,7),(209,'company','company_id',1,1,1,1,8),(210,'company','company_creation_time',1,1,1,1,9),(211,'company','company_created_by',1,1,1,1,10),(212,'company','company_updated_time',1,1,1,1,11),(213,'company','company_updated_by',1,1,1,1,12),(220,'ums_role_option_map','role_id',1,1,1,1,1),(221,'ums_role_option_map','option_id',1,1,1,1,2),(222,'ums_role_option_map','enable',1,1,1,1,3),(223,'ums_role_option_map','ums_role_option_map_id',1,1,1,1,4),(308,'ums_user','user_id',1,1,1,1,1),(309,'ums_user','user_access_key',1,1,1,1,2),(310,'ums_user','username',1,1,1,1,3),(311,'ums_user','password',1,1,1,1,4),(312,'ums_user','user_type',1,1,1,1,5),(313,'ums_user','user_status',1,1,1,1,6),(314,'ums_user','additional_id',1,1,1,1,7),(315,'ums_user','first_name',1,1,1,1,8),(316,'ums_user','last_name',1,1,1,1,9),(317,'ums_user','email_id',1,1,1,1,10),(318,'ums_user','user_creation_stamp',1,1,1,1,11),(319,'ums_user','user_created_by',1,1,1,1,12),(320,'ums_user','user_updated_stamp',1,1,1,1,13),(321,'ums_user','user_updated_by',1,1,1,1,14),(358,'ums_option','option_id',1,1,1,1,1),(359,'ums_option','option_name',1,1,1,1,2),(360,'ums_option','option_description',1,1,1,1,3),(361,'ums_option','option_type',1,1,1,1,4),(362,'ums_option','option_area',1,1,1,1,5),(363,'ums_option','option_status',1,1,1,1,6),(364,'ums_option','option_link',1,1,1,1,7),(365,'ums_option','option_icon',1,1,1,1,8),(366,'ums_option','option_order',1,1,1,1,9),(367,'ums_option','parent_option_id',1,1,1,1,10),(368,'ums_option','enable_toolbox',1,1,1,1,11),(369,'ums_option','object_reference_key',1,1,1,1,12),(370,'ums_option','level',1,1,1,1,13),(371,'ums_option','icon_class',1,1,1,1,14),(372,'ums_option','add_data',1,1,1,1,15),(373,'ums_option','edit_data',1,1,1,1,16),(374,'ums_option','delete_data',1,1,1,1,17),(375,'ums_option','view_data',1,1,1,1,18),(379,'ums_user_role_map','ums_user_role_map_id',1,1,1,1,1),(380,'ums_user_role_map','user_id',1,1,1,1,2),(381,'ums_user_role_map','role_id',1,1,1,1,3),(400,'ppl_employees','sys_employee_id',1,1,1,1,1),(401,'ppl_employees','sys_company_id',1,1,1,1,2),(402,'ppl_employees','employee_id',1,1,1,1,3),(403,'ppl_employees','employee_name',1,1,1,1,4),(404,'ppl_employees','employee_doj',1,1,1,1,5),(405,'ppl_employees','employee_dob',1,1,1,1,6),(406,'ppl_employees','employee_photo_img',1,1,1,1,7),(407,'ppl_employees','Address',1,1,1,1,8),(408,'ppl_employees','Gender',1,1,1,1,9);
/*!40000 ALTER TABLE `ums_view_configuration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-21 21:16:26
