-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2016 at 04:52 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `b_id` int(100) NOT NULL AUTO_INCREMENT,
  `b_title` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`b_id`, `b_title`) VALUES
(1, 'Apple'),
(2, 'Samsaung'),
(3, 'Sony'),
(4, 'Xiaomi'),
(5, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `delivery` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Order_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`brand`, `model`, `price`, `phone`, `delivery`, `address`, `Order_no`) VALUES
('Apple', 'iPhone 6plus', '$680', '123456789', '5 days', '36St.', 'no88'),
('Sony', 'Xperia C4', '$320', '111111111', '3 days', '36St.', 'no21'),
('Apple', 'iPhone 6plus', '$680', '111111111', '5 days', '35St.', 'no30');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `phone`, `feedback`) VALUES
('aye@gmail.com', '2222222', 'need to improve.'),
('aye@gmail.com', '2222222', 'delivery fee is expensive a little.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_brand` text NOT NULL,
  `p_model` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_image` text NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_brand`, `p_model`, `p_price`, `p_image`, `p_desc`) VALUES
(1, 'Samsaung', 'galaxy note 5', '$670', 'samsaung5.jpg', 'This is a new arrival. SIM: Nano, 5.7 inches screen size, Android OS,v5.1.1(Lollipop), 64 GB internal memeory and 4 GB RAM, Camera:16 MP,secondary:5 MP.'),
(2, 'Xiaomi', 'redmi note 3', '$200', 'xiaomi3.jpeg', 'This is also a new arrival one. SIM:dual, 5.5 inches screen size, Android OS,v5.0.2(Lollipop), 16 GB internal memory and 2 GB RAM, Camera:13 MP,secondary:5 MP.'),
(3, 'Sony', 'Xperia Z5', '$620', 'sonyZ5.jpg', 'This is a new arrival too. SIM:Nano, 5.2 inches screen size, Android OS,v5.1.1(Lollipop), 32 GB internal memory and 3 GB RAM, Camera:23 MP,secondary:5.1 MP.'),
(5, 'Apple', 'iPhone 6', '$590', '6.png', 'SIM:Nano, 4.7 inches screen size, iOS 8, 16 GB internal memory and 1 GB RAM, Camera:8 MP,secondary:1.2 MP.'),
(6, 'Apple', 'iPhone 6plus', '$680', '6plus.jpg', 'SIM:Nano, 5.5 inches screen size, iOS 8, 64 GB internal memory and 1 GB RAM, Camera:8 MP,secondary:1.2 MP.'),
(7, 'Apple', 'iPhone 6S', '$740', '6s.jpg', 'SIM:Nano, 4.7 inches screen size, iOS 9, 64 GB internal memory and 2 GB RAM, Camera:12 MP,secondary:5 MP.'),
(8, 'Samsaung', 'Galaxy Note 4', '$500', 'note4.jpg', 'SIM: Micro, 5.7 inches screen size, Android OS,v4.4.4(KitKat), 32 GB internal memeory and 3 GB RAM, Camera:16 MP,secondary:3.7 MP.'),
(9, 'Samsaung', 'Galaxy S5', '$390', 's5.jpg', 'SIM: Nano, 5.7 inches screen size, Android OS,v5.1.1(Lollipop), 64 GB internal memeory and 4 GB RAM, Camera:16 MP,secondary:5 MP.'),
(10, 'Samsaung', 'Galaxy S6', '$470', 's6.jpg', 'SIM: Nano, 5.1 inches screen size, Android OS,v5.0.2(Lollipop), 64 GB internal memeory and 3 GB RAM, Camera:16 MP,secondary:5 MP.'),
(11, 'Samsaung', 'Galaxy S6 edge', '$580', 's6edge.jpg', 'SIM: Nano, 5.1 inches screen size, Android OS,v5.0.2(Lollipop), 64 GB internal memeory and 3 GB RAM, Camera:16 MP,secondary:5 MP.'),
(12, 'Sony', 'Xperia C4', '$320', 'sonyc4.jpg', 'SIM: Nano, 5.5 inches screen size, Android OS,v5.0(Lollipop), 16 GB internal memeory and 2 GB RAM, Camera:13 MP,secondary:5 MP.'),
(13, 'Sony', 'Xperia E4', '$120', 'sonye4.jpg', 'SIM: Micro, 5.0 inches screen size, Android OS,v4.4.4(KitKat), 8 GB internal memeory and 1 GB RAM, Camera:5 MP,secondary:2 MP.'),
(14, 'Sony', 'Xperia M5', '$460', 'sonym5.jpg', 'SIM: Nano, 5.0 inches screen size, Android OS,v5.0(Lollipop), 16 GB internal memeory and 2 GB RAM, Camera:21.2 MP,secondary:13 MP.'),
(15, 'Sony', 'Xperia ZR', '$230', 'sonyzr.jpg', 'SIM: Micro, 4.55 inches screen size, Android OS,v4.1.2(Jelly Bean), 8 GB internal memeory and 2 GB RAM, Camera:13.1 MP,secondary:VGA.'),
(16, 'Xiaomi', 'Redmi Note 2', '$190', 'Xiaomi-Redmi-Note-2.jpg', 'SIM: Dual, 5.5 inches screen size, Android OS,v4.2(Jelly Bean), 8 GB internal memeory and 1 GB RAM, Camera:13 MP,secondary:5 MP.'),
(17, 'Huawei', 'Ascend P7', '$300', 'Ascend-P7.jpg', 'SIM: Micro, 5.0 inches screen size, Android OS,v4.4.2(KitKat), 16 GB internal memeory and 2 GB RAM, Camera:13 MP,secondary:8 MP.'),
(21, 'Huawei', 'Ascend P8', '$350', 'Ascend-P8.jpeg', 'SIM: Dual, 5.2 inches screen size, Android OS,v4.4.2(KitKat), 16 GB internal memeory and 3 GB RAM, Camera:13 MP,secondary:8 MP.'),
(22, 'Apple', 'iPhone 5S', '$470', 'iphone5S-silver.jpg', 'SIM: Nano, 4.0 inches screen size, iOS 7, 32 GB internal memeory and 1 GB RAM, Camera:8 MP,secondary:1.2 MP.');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `township` text NOT NULL,
  `email_noti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`first_name`, `last_name`, `email`, `password`, `phone_no`, `gender`, `birthday`, `country`, `city`, `township`, `email_noti`) VALUES
('Aye', 'Aye', 'aye@gmail.com', 'aye123', '123456789', 'female', '1/1/1996', 'Myanmar', 'Yangon', 'Kamaryut', 'yes'),
('Lily', 'Brown', 'lily@gmail.com', 'lily123', '987654321', 'female', '1/10/1980', 'Myanmar', 'Yangon', 'Insein', 'no'),
('Zaw', 'Zaw', 'zaw@gmail.com', 'zaw123', '111222333', 'male', '20/12/1997', 'Myanmar', 'Yangon', 'Mayangone', 'no'),
('Aung', 'Aung', 'aung@gmail.com', 'augn123', '444555666', 'male', '17/2/1987', 'Myanmar', 'Yangon', 'Mayangone', 'yes'),
('Kyaw', 'Kyaw', 'kyaw@gmail.com', 'kyaw123', '159753852', 'male', '1/1/1990', 'Myanmar', 'Yangon', 'Insein', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`) VALUES
('admin', 'user123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
