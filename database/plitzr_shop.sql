-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2013 at 03:33 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `plitzr_shop`
--
CREATE DATABASE IF NOT EXISTS `plitzr_shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `plitzr_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(25) NOT NULL,
  `product_quantity` int(25) NOT NULL,
  `small_pic_url` varchar(255) NOT NULL,
  `big_pic_url` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_quantity`, `small_pic_url`, `big_pic_url`, `availability`) VALUES
(1, 'White Tshirt', 200, 1, 'C://wamp/www/plitzr/images/tshirt.png', 'white_tshirt.jpg', 1),
(2, 'Black Tshirt', 100, 2, 'C://wamp/www/plitzr/images/shorts.png', 'black_tshirt.jpg', 0),
(3, 'Stripped Cap', 70, 1, 'C:\\wamp\\www\\facebookshop\\15370\\stripped_cap.jpg', 'stripped_cap.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
