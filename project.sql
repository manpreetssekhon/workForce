-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 08:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE IF NOT EXISTS `citizen` (
  `uid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`uid`, `name`, `mobile`, `email`, `address`, `city`, `pincode`, `state`) VALUES
('dcds', 'hjkll', '', 'hbbi', 'ihihjio', 'hijiioj', 'jioj', 'jiojioo'),
('dsfklsjhkl', 'sdasd', 'hkhkh', 'jklhkl', 'kjkljkl', 'jjkjkl', 'kljlkj', 'kjkljlk'),
('HARMAN', 'Harman chahal', '8054986543', 'kjhgfdfghjkl;lkjhgfs', 'ajit road', 'Bathinda', '151001', 'Punjab'),
('its_tarsem', 'Manpreet singh', '8847623486', 'manpreetssekhon007@g', 'ajit road', 'Bathinda', '151001', 'jammu'),
('manpreetssekhon007', 'Manpreet singh', '8847623486', 'manpreetssekhon007@g', '#20282,st.no-16,Guru Teg Bahad', 'Bathinda', '151001', 'Punjab'),
('sdaguii', 'guigug', '', 'ughuihiu', 'huhui', 'uihuihui', 'ihiu', 'iuiihi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `pwd`, `mobile`, `type`) VALUES
('', '', '', ''),
('HARMAN', '499', '8765678743', 'citizen'),
('JASPREET', '123456', '98765432', 'citizen'),
('khusi', '12345', '8264434564', 'worker'),
('manjot', '22135911', '8976542353', 'worker'),
('manpreet', '2213599107', '8847623486', 'citizen'),
('NAMAN', '789', '123456789', 'citizen'),
('treat', '123456', '9876543', 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `uid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `addhar` varchar(50) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `other` varchar(225) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`uid`, `name`, `mobile`, `address`, `category`, `experience`, `age`, `pic`, `id`, `city`, `country`, `addhar`, `qualification`, `other`) VALUES
('harjinder07', 'harjinder singh', '7896258941', 'bibi wala road', 'Painter', 'Citizen', '24', 'pexels-photo-683929.jpeg', 'pexels-photo-305223.jpeg', 'CHANDIGARH', 'India', '87552642312349856', 'B.TECH', 'DSUYTREWRTYUIOIUYTR\r\n\r\n                                '),
('harman_07', 'Harman chahal', '8847623486', 'ajit road', 'Carpainter', 'Citizen', '50', 'amazing-architecture-beautiful-1487674.jpg', 'download (1).jpg', 'ludhiana', 'India', '876543456798', 'BSc', 'bjsdghdfhjhdgfhisjk\r\n\r\n                                '),
('its_rachan', 'Rachan ', '8837636003', 'ajit road', 'Painter', 'Citizen', '40', '', 'download (1).jpg', 'Bathinda', 'India', '87654345678', 'BSc', 'ghghjgfghdgfhddfa\r\n\r\n                                '),
('jaspreet_07', 'jhk', 'hjih', 'hjinbhj', 'Painter', 'Worker', '25', 'download (1).jpg', 'DBH3__17369.1462447875.386.513.jpg', 'Bathinda', 'India', '67867878664', 'hl', 'gyftrydyhkl\r\n\r\n                                '),
('sdg', 'ffdh', 'hgh', 'hfhj', 'Painter', 'Worker', '34', '2018_roush_mustang_729_4k-1280x720.jpg', 'adult-blur-church-1309052 (1).jpg', 'tfg', 'sdg', 'dgf', 'rg', 'dfdfhg\r\n\r\n                                ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
