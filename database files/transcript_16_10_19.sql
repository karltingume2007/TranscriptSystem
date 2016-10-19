SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('14d133efdbe0542fe115f97c940d06ca', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/51.0.2704.79 Chrome/51.0.2704.79 ', 1472631703, 'a:3:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:13:"user_language";s:5:"en-GB";}');

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `credit_value` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `credit_value`) VALUES
(1, 'Data Security', 'SE408', 4),
(2, 'System Design', 'SE301', 3),
(3, 'Introduction to Microbiology', 'MLS301', 4),
(4, 'Entrepreneurship', 'COT307', 3);
DROP VIEW IF EXISTS `detailed_program_courses`;
CREATE TABLE IF NOT EXISTS `detailed_program_courses` (
`program_course_id` int(11)
,`program_id` int(11)
,`course_id` int(11)
,`credit_value` int(11)
,`level_id` int(11)
,`semester` int(11)
,`program_name` varchar(100)
,`school_id` int(11)
,`course_name` varchar(50)
,`course_code` varchar(10)
);
DROP TABLE IF EXISTS `enrollments`;
CREATE TABLE IF NOT EXISTS `enrollments` (
  `enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `academic_year` varchar(10) CHARACTER SET latin1 NOT NULL,
  `program_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `student_id` (`student_id`),
  KEY `program_id` (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `levels`;
CREATE TABLE IF NOT EXISTS `levels` (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) NOT NULL,
  `level_index` int(11) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `levels` (`level_id`, `level_name`, `level_index`) VALUES
(1, 'Level 1', 1),
(2, 'Level 2', 2),
(3, 'Level 3', 3);

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `personId` int(11) NOT NULL AUTO_INCREMENT,
  `personName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `qualification` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`personId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `program_courses`;
CREATE TABLE IF NOT EXISTS `program_courses` (
  `program_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `credit_value` int(11) NOT NULL,
  PRIMARY KEY (`program_course_id`),
  KEY `courseId` (`course_id`),
  KEY `program_id` (`program_id`),
  KEY `level_id` (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `program_courses` (`program_course_id`, `program_id`, `course_id`, `level_id`, `semester`, `credit_value`) VALUES
(1, 20, 1, 3, 2, 4),
(2, 20, 2, 2, 1, 3),
(3, 20, 3, 3, 1, 4),
(4, 20, 4, 3, 1, 3);

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(200) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO `schools` (`school_id`, `school_name`) VALUES
(1, 'Engineering'),
(2, 'Business'),
(3, 'Technology'),
(4, 'Arts'),
(5, 'Science');

DROP TABLE IF EXISTS `school_programs`;
CREATE TABLE IF NOT EXISTS `school_programs` (
  `program_id` int(11) NOT NULL AUTO_INCREMENT,
  `program_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`program_id`),
  KEY `school_id` (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

INSERT INTO `school_programs` (`program_id`, `program_name`, `school_id`) VALUES
(14, 'Shoe Mendings', 4),
(18, 'Accounting', 2),
(19, 'Mangement', 2),
(20, 'Software Engineering', 1),
(21, 'Electrical Engineering', 1),
(22, 'Telecommunications', 3),
(23, 'ICT', 3),
(24, 'Network Administration', 3),
(25, 'Physics', 5),
(26, 'Maths', 5),
(27, 'French', 5);

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `phone_number` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `matricule` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `student_courses`;
CREATE TABLE IF NOT EXISTS `student_courses` (
  `enrollment_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `ca_mark` decimal(10,0) DEFAULT NULL,
  `exam_mark` decimal(10,0) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE IF NOT EXISTS `system_settings` (
  `settingName` varchar(500) CHARACTER SET latin1 NOT NULL,
  `settingValue` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`settingName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `full_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `phone_number` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `permission_level` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `permission_level` (`permission_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `phone_number`, `permission_level`, `is_admin`, `language`) VALUES
(1, 'titus', '123', 'Yusinyu Titus Nsami', 'titus@suresoft.cm', '679684428', 65535, 1, 'en-GB'),
(3, 'karl', '123', 'Karl Tingume', '', '', 65535, 1, 'en-GB'),
(5, 'joseph', '123', 'Ebune Joseph', '', '', 65535, 0, 'en-GB');
DROP TABLE IF EXISTS `detailed_program_courses`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detailed_program_courses` AS select `pc`.`program_course_id` AS `program_course_id`,`pc`.`program_id` AS `program_id`,`pc`.`course_id` AS `course_id`,`pc`.`credit_value` AS `credit_value`,`pc`.`level_id` AS `level_id`,`pc`.`semester` AS `semester`,`sp`.`program_name` AS `program_name`,`sp`.`school_id` AS `school_id`,`c`.`course_name` AS `course_name`,`c`.`course_code` AS `course_code` from ((`program_courses` `pc` left join `school_programs` `sp` on((`sp`.`program_id` = `pc`.`program_id`))) left join `courses` `c` on((`pc`.`course_id` = `c`.`course_id`)));


ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `school_programs` (`program_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `program_courses`
  ADD CONSTRAINT `program_courses_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `school_programs` (`program_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_courses_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`);

ALTER TABLE `school_programs`
  ADD CONSTRAINT `school_programs_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `student_courses`
  ADD CONSTRAINT `student_courses_ibfk_1` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`enrollment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_courses_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `personel` (`personId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_courses_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
