/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.50-0ubuntu0.14.04.1 : Database - transcript
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`transcript` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `transcript`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `ci_sessions` */

LOCK TABLES `ci_sessions` WRITE;

insert  into `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('14d133efdbe0542fe115f97c940d06ca','::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/51.0.2704.79 Chrome/51.0.2704.79 ',1472631703,'a:3:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:13:\"user_language\";s:5:\"en-GB\";}');

UNLOCK TABLES;

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `credit_value` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

LOCK TABLES `courses` WRITE;

insert  into `courses`(`course_id`,`course_name`,`course_code`,`credit_value`) values (1,'Data Security','SE408',4),(2,'System Design','SE301',3);

UNLOCK TABLES;

/*Table structure for table `enrollments` */

DROP TABLE IF EXISTS `enrollments`;

CREATE TABLE `enrollments` (
  `enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `program_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `student_id` (`student_id`),
  KEY `program_id` (`program_id`),
  CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `school_programs` (`program_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `enrollments` */

LOCK TABLES `enrollments` WRITE;

UNLOCK TABLES;

/*Table structure for table `levels` */

DROP TABLE IF EXISTS `levels`;

CREATE TABLE `levels` (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) NOT NULL,
  `level_index` int(11) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `levels` */

LOCK TABLES `levels` WRITE;

insert  into `levels`(`level_id`,`level_name`,`level_index`) values (1,'Level 1',1),(2,'Level 2',2),(3,'Level 3',3);

UNLOCK TABLES;

/*Table structure for table `personel` */

DROP TABLE IF EXISTS `personel`;

CREATE TABLE `personel` (
  `personId` int(11) NOT NULL AUTO_INCREMENT,
  `personName` varchar(50) NOT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`personId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `personel` */

LOCK TABLES `personel` WRITE;

UNLOCK TABLES;

/*Table structure for table `program_courses` */

DROP TABLE IF EXISTS `program_courses`;

CREATE TABLE `program_courses` (
  `program_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `credit_value` int(11) NOT NULL,
  KEY `courseId` (`course_id`),
  KEY `program_id` (`program_id`),
  KEY `level_id` (`level_id`),
  CONSTRAINT `program_courses_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `school_programs` (`program_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `program_courses_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `program_courses` */

LOCK TABLES `program_courses` WRITE;

insert  into `program_courses`(`program_id`,`course_id`,`level_id`,`semester`,`credit_value`) values (20,1,3,2,4),(20,2,2,1,3);

UNLOCK TABLES;

/*Table structure for table `school_programs` */

DROP TABLE IF EXISTS `school_programs`;

CREATE TABLE `school_programs` (
  `program_id` int(11) NOT NULL AUTO_INCREMENT,
  `program_name` varchar(100) NOT NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`program_id`),
  KEY `school_id` (`school_id`),
  CONSTRAINT `school_programs_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `school_programs` */

LOCK TABLES `school_programs` WRITE;

insert  into `school_programs`(`program_id`,`program_name`,`school_id`) values (14,'Shoe Mendings',4),(18,'Accounting',2),(19,'Mangement',2),(20,'Software Engineering',1),(21,'Electrical Engineering',1),(22,'Telecommunications',3),(23,'ICT',3),(24,'Network Administration',3),(25,'Physics',5),(26,'Maths',5),(27,'French',5);

UNLOCK TABLES;

/*Table structure for table `schools` */

DROP TABLE IF EXISTS `schools`;

CREATE TABLE `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(200) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `schools` */

LOCK TABLES `schools` WRITE;

insert  into `schools`(`school_id`,`school_name`) values (1,'Engineering'),(2,'Business'),(3,'Technology'),(4,'Arts'),(5,'Science');

UNLOCK TABLES;

/*Table structure for table `student_courses` */

DROP TABLE IF EXISTS `student_courses`;

CREATE TABLE `student_courses` (
  `enrollment_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `ca_mark` decimal(10,0) DEFAULT NULL,
  `exam_mark` decimal(10,0) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `student_courses_ibfk_1` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`enrollment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_courses_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `personel` (`personId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_courses_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student_courses` */

LOCK TABLES `student_courses` WRITE;

UNLOCK TABLES;

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `matricule` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `students` */

LOCK TABLES `students` WRITE;

UNLOCK TABLES;

/*Table structure for table `system_settings` */

DROP TABLE IF EXISTS `system_settings`;

CREATE TABLE `system_settings` (
  `settingName` varchar(500) NOT NULL,
  `settingValue` text NOT NULL,
  PRIMARY KEY (`settingName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `system_settings` */

LOCK TABLES `system_settings` WRITE;

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `full_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `phone_number` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `permission_level` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `permission_level` (`permission_level`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`user_id`,`username`,`password`,`full_name`,`email`,`phone_number`,`permission_level`,`is_admin`,`language`) values (1,'titus','123','Yusinyu Titus Nsami','titus@suresoft.cm','679684428',65535,1,'en-GB'),(3,'karl','123','Karl Tingume','','',65535,1,'en-GB'),(5,'joseph','123','Ebune Joseph','','',65535,0,'en-GB');

UNLOCK TABLES;

/*Table structure for table `detailed_program_courses` */

DROP TABLE IF EXISTS `detailed_program_courses`;

/*!50001 DROP VIEW IF EXISTS `detailed_program_courses` */;
/*!50001 DROP TABLE IF EXISTS `detailed_program_courses` */;

/*!50001 CREATE TABLE  `detailed_program_courses`(
 `program_id` int(11) ,
 `course_id` int(11) ,
 `credit_value` int(11) ,
 `level_id` int(11) ,
 `semester` int(11) ,
 `program_name` varchar(100) ,
 `school_id` int(11) ,
 `course_name` varchar(50) ,
 `course_code` varchar(10) 
)*/;

/*View structure for view detailed_program_courses */

/*!50001 DROP TABLE IF EXISTS `detailed_program_courses` */;
/*!50001 DROP VIEW IF EXISTS `detailed_program_courses` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detailed_program_courses` AS select `pc`.`program_id` AS `program_id`,`pc`.`course_id` AS `course_id`,`pc`.`credit_value` AS `credit_value`,`pc`.`level_id` AS `level_id`,`pc`.`semester` AS `semester`,`sp`.`program_name` AS `program_name`,`sp`.`school_id` AS `school_id`,`c`.`course_name` AS `course_name`,`c`.`course_code` AS `course_code` from ((`program_courses` `pc` left join `school_programs` `sp` on((`sp`.`program_id` = `pc`.`program_id`))) left join `courses` `c` on((`pc`.`course_id` = `c`.`course_id`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
