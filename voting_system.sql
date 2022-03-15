-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 01:45 AM
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
