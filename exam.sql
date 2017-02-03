-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van exam wordt geschreven
CREATE DATABASE IF NOT EXISTS `exam` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `exam`;

-- Structuur van  tabel exam.answers wordt geschreven
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) NOT NULL DEFAULT '0',
  `question_id` int(11) NOT NULL DEFAULT '0',
  `answer` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=303 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.answers: 9 rows
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`id`, `exam_id`, `question_id`, `answer`) VALUES
	(294, 81, 1, b'1'),
	(295, 81, 3, b'1'),
	(296, 81, 4, b'1'),
	(297, 81, 2, b'1'),
	(298, 81, 5, b'1'),
	(299, 80, 1, b'1'),
	(300, 80, 3, b'1'),
	(301, 80, 4, b'1'),
	(302, 80, 2, b'1');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

-- Structuur van  tabel exam.calendar wordt geschreven
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.calendar: 3 rows
/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
INSERT INTO `calendar` (`id`, `exam_id`, `date`) VALUES
	(79, 80, '2017-01-30 19:05:00'),
	(84, 85, '2017-02-03 12:25:00'),
	(83, 84, '2017-02-01 12:12:00');
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;

-- Structuur van  tabel exam.exam wordt geschreven
CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `exam_template_id` int(11) DEFAULT NULL,
  `submit` bit(1) NOT NULL DEFAULT b'0',
  `examiner_id_1` int(11) DEFAULT NULL,
  `examiner_id_2` int(11) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=latin1 COMMENT='tabel which connects questions to exam type';

-- Dumpen data van tabel exam.exam: 24 rows
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` (`id`, `student_id`, `exam_template_id`, `submit`, `examiner_id_1`, `examiner_id_2`, `adress`, `city`) VALUES
	(74, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(73, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(72, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(71, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(70, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(69, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(68, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(67, 49, 2, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(66, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(65, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(64, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(63, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(62, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(75, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(76, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(77, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(78, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(79, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(80, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(81, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(82, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(83, 49, 1, b'1', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(84, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk'),
	(85, 49, 1, b'0', NULL, NULL, 'Reijerweg 118', 'Ridderkerk');
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;

-- Structuur van  tabel exam.examiner wordt geschreven
CREATE TABLE IF NOT EXISTS `examiner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `permission_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.examiner: 1 rows
/*!40000 ALTER TABLE `examiner` DISABLE KEYS */;
INSERT INTO `examiner` (`id`, `username`, `password`, `permission_id`) VALUES
	(1, 'default', '0', 1);
/*!40000 ALTER TABLE `examiner` ENABLE KEYS */;

-- Structuur van  tabel exam.exam_template wordt geschreven
CREATE TABLE IF NOT EXISTS `exam_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL DEFAULT '0',
  `year` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.exam_template: 2 rows
/*!40000 ALTER TABLE `exam_template` DISABLE KEYS */;
INSERT INTO `exam_template` (`id`, `title`, `year`) VALUES
	(1, 'Examen 1', '2017'),
	(2, 'Examen 2', '2017');
/*!40000 ALTER TABLE `exam_template` ENABLE KEYS */;

-- Structuur van  tabel exam.permission wordt geschreven
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.permission: 1 rows
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` (`id`, `title`) VALUES
	(1, 'examiner');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;

-- Structuur van  tabel exam.questions wordt geschreven
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_title` char(50) NOT NULL DEFAULT '0',
  `possible_score` int(11) NOT NULL DEFAULT '0',
  `subtitle_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.questions: 5 rows
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `question_title`, `possible_score`, `subtitle_id`) VALUES
	(1, 'Vraag 1', 0, 1),
	(2, 'Vraag 2', 1, 2),
	(3, 'Vraag 3', 1, 1),
	(4, 'Vraag 4', 2, 1),
	(5, 'Vraag 5', 1, 2);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Structuur van  tabel exam.score_needed wordt geschreven
CREATE TABLE IF NOT EXISTS `score_needed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `exam_template_id` int(11) NOT NULL DEFAULT '0',
  `correct` int(11) NOT NULL DEFAULT '0',
  `sufficient` int(11) NOT NULL DEFAULT '0',
  `unsufficient` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.score_needed: 0 rows
/*!40000 ALTER TABLE `score_needed` DISABLE KEYS */;
/*!40000 ALTER TABLE `score_needed` ENABLE KEYS */;

-- Structuur van  tabel exam.student wordt geschreven
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `ov_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.student: 1 rows
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`id`, `first_name`, `last_name`, `ov_number`) VALUES
	(49, 'Floris', 'de Graaff', '99027458');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

-- Structuur van  tabel exam.subtitle wordt geschreven
CREATE TABLE IF NOT EXISTS `subtitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL DEFAULT '0',
  `exam_template_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel exam.subtitle: 2 rows
/*!40000 ALTER TABLE `subtitle` DISABLE KEYS */;
INSERT INTO `subtitle` (`id`, `title`, `exam_template_id`) VALUES
	(1, 'Subtitel 1', 1),
	(2, 'Subtitel 2', 1);
/*!40000 ALTER TABLE `subtitle` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
