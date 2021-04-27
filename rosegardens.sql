-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2021 at 07:35 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosegardens`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'indoor'),
(2, 'outdoor'),
(3, 'office plants');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buy`
--

DROP TABLE IF EXISTS `tbl_buy`;
CREATE TABLE IF NOT EXISTS `tbl_buy` (
  `Buy_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Buy_date` date NOT NULL,
  `Buy_quantity` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Buy_id`),
  UNIQUE KEY `Reg_id` (`Reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `Fd_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Feedback` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Fd_id`),
  UNIQUE KEY `Reg_id` (`Reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `role`, `username`, `password`, `status`) VALUES
(16, 'user', 'jeswin', '7472bc62bdc0177f6d1c555d7ec81e83', 1),
(15, 'user', 'jeswin', 'b66b176ec79b5f676e1de2bdfa9f8e8f', 1),
(14, 'user', 'ahil123', '3675b7d486abfafdbd9f561cff9c1320', 1),
(13, 'user', 'ahil123', '3675b7d486abfafdbd9f561cff9c1320', 1),
(12, 'admin', 'admin', '19a6515ac94a5b0dc1d904eebe73deeb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `Order_id` int(11) NOT NULL,
  `Plant_id` int(11) NOT NULL,
  `Order_no` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Order_id`),
  UNIQUE KEY `Plant_id` (`Plant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `Pay_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Pay_date` date NOT NULL,
  `Pay_mode` varchar(20) NOT NULL,
  `Pay_amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Pay_id`),
  UNIQUE KEY `Reg_id` (`Reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plant`
--

DROP TABLE IF EXISTS `tbl_plant`;
CREATE TABLE IF NOT EXISTS `tbl_plant` (
  `Plant_id` int(11) NOT NULL AUTO_INCREMENT,
  `Plant_name` varchar(50) NOT NULL,
  `Plant_category` int(20) NOT NULL,
  `Plant_description` varchar(50) NOT NULL,
  `Plant_height` varchar(20) NOT NULL,
  `Common_name` varchar(50) NOT NULL,
  `Bloom_time` varchar(50) NOT NULL,
  `Flower_colour` varchar(20) NOT NULL,
  `Planting_care` varchar(50) NOT NULL,
  `Plant_amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Image1` varchar(50) NOT NULL,
  PRIMARY KEY (`Plant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_plant`
--

INSERT INTO `tbl_plant` (`Plant_id`, `Plant_name`, `Plant_category`, `Plant_description`, `Plant_height`, `Common_name`, `Bloom_time`, `Flower_colour`, `Planting_care`, `Plant_amount`, `Status`, `Image1`) VALUES
(21, 'Bamboo Plant', 1, '2 Layer Lucky Bamboo Plant ', '100cm', 'Lucky Bamboo Plant', 'Not a Flowering Plant', 'No Flower', 'Easy to maintain', 500, 1, 'lucky bamboo.jpeg'),
(22, 'hhrh', 2, 'dadaddwd', '100cm', 'Lucky Bamboo Plant', 'nil', 'nil', 'Easy to maintain', 250, 1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

DROP TABLE IF EXISTS `tbl_register`;
CREATE TABLE IF NOT EXISTS `tbl_register` (
  `Reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  PRIMARY KEY (`Reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`Reg_id`, `login_id`, `fname`, `lname`, `email`, `phone`) VALUES
(12, 8, 'adhin', 'babu', 'adhin@gmail.com', 7907212392),
(18, 17, 'jeswin', 'antony', 'jeswin@gmail.com', 7907212392);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
