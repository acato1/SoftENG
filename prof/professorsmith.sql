-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 02:59 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `professorsmith`
--

-- --------------------------------------------------------

--
-- Table structure for table `math110`
--

DROP TABLE IF EXISTS `math110`;
CREATE TABLE IF NOT EXISTS `math110` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pw` varchar(16) NOT NULL,
  `devid` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `math120`
--

DROP TABLE IF EXISTS `math120`;
CREATE TABLE IF NOT EXISTS `math120` (
  `sid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pw` varchar(16) NOT NULL,
  `devid` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `math120`
--

INSERT INTO `math120` (`sid`, `name`, `pw`, `devid`) VALUES
(1, 'Terry Crews', 'password1', '54665154');

-- --------------------------------------------------------

--
-- Table structure for table `math170`
--

DROP TABLE IF EXISTS `math170`;
CREATE TABLE IF NOT EXISTS `math170` (
  `sid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pw` varchar(16) NOT NULL,
  `devid` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
