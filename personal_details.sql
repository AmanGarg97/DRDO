-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2018 at 04:26 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

DROP TABLE IF EXISTS `academic_details`;
CREATE TABLE IF NOT EXISTS `academic_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `adm_year` int(4) DEFAULT NULL,
  `pass_year` int(4) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `spec` text,
  `company1` text,
  `company2` text,
  `company3` text,
  `enroll_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`id`, `adm_year`, `pass_year`, `Branch`, `spec`, `company1`, `company2`, `company3`, `enroll_id`) VALUES
(7, 2016, 2020, 'CSE', 'Web Development', 'DRDO', '', '', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `enroll_id` varchar(25) DEFAULT NULL,
  `b_day` date DEFAULT NULL,
  `gender` text,
  `father_name` varchar(20) DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `address` text,
  `state` varchar(20) DEFAULT NULL,
  `pin_code` int(10) DEFAULT NULL,
  `phone` bigint(15) DEFAULT NULL,
  `email_id` varchar(25) DEFAULT NULL,
  `telephone` bigint(12) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `enroll_id`, `b_day`, `gender`, `father_name`, `mother_name`, `address`, `state`, `pin_code`, `phone`, `email_id`, `telephone`, `password`, `status`) VALUES
(24, 'Aman', 'Garg', '1234', '0001-01-01', NULL, 'Aman', 'Aman', 'Shahdara Delhi ', 'Delhi ', 110032, 985632569, 'amangarg34.ag@gmail.com', 9563256, 'aman', 'Accepted'),
(25, 'Naman', 'Garg', '1234', '2000-02-12', NULL, 'aman', 'aman', 'shahdara delhi ', 'Delhi ', 110036, 798523654, 'a@gmail.com', 789632562, 'naman', 'Pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
