-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 12:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--
CREATE DATABASE IF NOT EXISTS `voting_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voting_system`;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `cand_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pos_id` int(100) NOT NULL,
  `election_id` int(100) NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='candidate details';

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`cand_id`, `user_id`, `pos_id`, `election_id`) VALUES
(1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE IF NOT EXISTS `election` (
  `elec_id` int(100) NOT NULL AUTO_INCREMENT,
  `elec_name` varchar(100) NOT NULL,
  `elec_desc` varchar(200) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `end_date` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`elec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`elec_id`, `elec_name`, `elec_desc`, `start_date`, `end_date`, `active`) VALUES
(1, 'General Election', 'General Election', '2022-03-16', '2022-03-17', 1),
(2, 'School Election', 'General school Election', '2022-03-16', '2022-03-17', 1),
(3, 'general election', '8th aug 2017', '2017-08-08', '2017-09-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `pos_id` int(100) NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(100) NOT NULL,
  `pos_desc` varchar(200) NOT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`pos_id`, `pos_name`, `pos_desc`) VALUES
(1, 'President', 'head of government'),
(2, 'Vice President', 'deputises President'),
(3, 'Secretary General', 'deputises Vice President'),
(4, 'Academics Secretary', 'deputizes sec gen'),
(5, 'Sports and Entertainment Secretary', 'deputizes sec gen'),
(6, 'Social Welfare Representative', 'deputizes sec gen');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(25) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL COMMENT 'user first name',
  `lname` varchar(100) NOT NULL COMMENT 'user last name',
  `email` varchar(200) NOT NULL COMMENT 'user email',
  `password` varchar(255) NOT NULL COMMENT 'user password',
  `phone_no` varchar(10) NOT NULL COMMENT 'user tel no',
  `gender` enum('female','male') NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email_uindex` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='user table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `phone_no`, `gender`) VALUES
(1, 'earl', 'ben', 'earlben@gmail.com', '$2y$10$MM4LFgKukEPdcfZvMhlUoeIiL7xGVQxvU7U0s4gv1UGSUasHiu9QS', '785954512', 'male'),
(2, 'john', 'ben', 'johnben@gmail.com', '$2y$10$sX2dwfxdLRlMPqa2KfyMiO3Jn0JdPke1E8qR3VSvR1aygm6X4jzKm', '785954515', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
