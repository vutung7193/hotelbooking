-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2015 at 11:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `person_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `user_id`, `date_from`, `date_to`, `person_no`, `room_id`, `status`, `date_create`) VALUES
(75, 1, '2015-07-05', '2015-07-11', 3, 1, 0, '2015-05-23 09:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_booking_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `person_no` int(11) NOT NULL,
  `hotel_service_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_booking_detail`
--

INSERT INTO `tbl_booking_detail` (`id`, `booking_id`, `name`, `phone`, `email`, `address`, `person_no`, `hotel_service_id`) VALUES
(1, 75, 'r', 'j', 'j', 'j', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `content` text,
  `point` int(11) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `user_id`, `hotel_id`, `content`, `point`, `date_create`) VALUES
(1, 1, 2, NULL, 3, '2015-05-22 18:30:04'),
(2, 2, 2, NULL, 5, '2015-05-22 18:30:04'),
(3, 3, 2, '', 6, '2015-05-22 18:30:04'),
(4, 3, 3, '', 2, '2015-05-22 18:30:04'),
(5, 3, 7, '', 9, '2015-05-22 18:30:04'),
(6, 3, 7, 'bad hotel', 1, '2015-05-22 18:30:04'),
(7, 3, 4, '', 9, '2015-05-22 18:30:04'),
(8, 3, 7, 'this is good hotel with good views,\r\nfood is cheap, good services.\r\nI will come back', 6, '2015-05-22 18:30:04'),
(9, 3, 9, 'lovely hotel,\r\ni will share with my friend', 7, '2015-05-22 18:30:04'),
(10, 2, 7, '', 7, '2015-05-22 18:30:04'),
(11, 2, 9, 'lol', 9, '2015-05-22 18:30:04'),
(12, 2, 4, 'gôd', 8, '2015-05-22 18:30:04'),
(13, 2, 9, 'test', 6, '2015-05-22 18:30:04'),
(14, 2, 4, 'fbfgngfngh', 2, '2015-05-22 18:30:04'),
(15, 2, 4, '', 6, '2015-05-22 18:30:04'),
(16, 2, 2, 'Enter comment htungere...', 4, '2015-05-22 18:30:04'),
(17, 2, 2, 'sdkbvkdsvbfdnv', 8, '2015-05-22 18:30:04'),
(18, 2, 9, 'vuvantung', 10, '2015-05-22 18:30:04'),
(19, 5, 4, 'lol', 5, '2015-05-22 18:30:04'),
(20, 1, 5, 'chg', 5, '2015-05-22 18:30:04'),
(21, 1, 5, 'xdfdxfdxgdgfcbvc', 8, '2015-05-22 18:30:04'),
(22, 2, 5, 'nn vc jkvc  nvkdjnv cnb njbk fbnkjfbngf nn vc jkvc  nvkdjnv cnb njbk fbnkjfbngfnn vc jkvc  nvkdjnv cnb njbk fbnkjfbngfnn vc jkvc  nvkdjnv cnb njbk fbnkjfbngfnn vc jkvc  nvkdjnv cnb njbk fbnkjfbngfnn vc jkvc  nvkdjnv cnb njbk fbnkjfbngfnn vc jkvc  nvkdjnv cnb njbk fbnkjfbngfnn vc jkvc  nvkdjnv cnb njbk fbnkjfbngf', 5, '2015-05-22 18:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_convenient`
--

CREATE TABLE IF NOT EXISTS `tbl_convenient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_convenient`
--

INSERT INTO `tbl_convenient` (`id`, `name`) VALUES
(1, 'TV'),
(2, 'Parking '),
(3, 'Wifi Network'),
(4, 'Launch Dry');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotels`
--

CREATE TABLE IF NOT EXISTS `tbl_hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `City` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `rank` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `aver_point` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_hotels`
--

INSERT INTO `tbl_hotels` (`id`, `name`, `City`, `address`, `description`, `rank`, `logo`, `tel`, `aver_point`) VALUES
(2, 'Muong Thanh Hotel', 'Ha Noi', 'Nam Tu Liem', 'dsfsd', 3, '/Upload/2015-05-22/thumb-07.jpg', '0987234567', 5.2),
(3, 'Trang Tien Ha Noi Hotel', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'dsvdfbfgnmm\r\nghmhjmj\r\njh,hj,\r\n', 5, '/Upload/2015-05-22/thumb-01.jpg', '', 2),
(4, 'Ha Thanh Plaza', 'Ha Noi', 'nam t? liêm hà n?i', ' skvd fkv', 4, '/Upload/2015-05-22/thumb-02.jpg', '', 6),
(5, 'Royal Hotel Ha Noi', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'sc  ,mv', 5, '/Upload/2015-05-22/thumb-03.jpg', '', 6),
(7, 'Mariot Ha Noi', 'Ha Noi', 'nam t? liêm hà n?i', 'dfgdfgd', 5, '/Upload/2015-05-22/thumb-04.jpg', '', 5.75),
(8, 'Kaeng Nam Ha Noi', 'Hà N?i', 'Nam Tu Liem , Ha Noi , Viet Nam', 'ksdvksdnv', 5, '/Upload/2015-05-22/thumb-05.jpg', '', NULL),
(9, 'KeangNam', 'Ha Noi', '371 Khuong Trung Ha Noi', 'jd vf fv jf v fjkvf jv', 5, '/Upload/2015-05-22/thumb-06.jpg', '', 8),
(10, 'Phu Quy Hotel', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'dsvdv', 4, '/Upload/2015-05-22/thumb-08.jpg', '', NULL),
(11, 'Tan Thanh Hotel', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'c smc', 3, '/Upload/2015-05-22/thumb-09.jpg', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_convenient`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel_convenient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) NOT NULL,
  `convenient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `convenient_id` (`convenient_id`),
  KEY `hotel_id` (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_hotel_convenient`
--

INSERT INTO `tbl_hotel_convenient` (`id`, `hotel_id`, `convenient_id`) VALUES
(1, 2, 3),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_services`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hotel_id` (`hotel_id`,`service_id`),
  UNIQUE KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_hotel_services`
--

INSERT INTO `tbl_hotel_services` (`id`, `hotel_id`, `service_id`, `price`) VALUES
(1, 2, 1, 10),
(2, 2, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE IF NOT EXISTS `tbl_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `tel`, `address`) VALUES
(1, 'Admin', 'Administrator', '', ''),
(2, 'Demo', 'Demo', '0988332563', ''),
(3, 'vũ văn', 'tùng', '', ''),
(5, ' cj vdn', 'fdhgdfn', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 0, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 0),
(4, 'tel', 'Mobile', 'VARCHAR', 20, 0, 0, '', '', '', '', '', '', '', 0, 3),
(5, 'address', 'Address', 'VARCHAR', 255, 0, 0, '', '', '', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purpose`
--

CREATE TABLE IF NOT EXISTS `tbl_purpose` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_purpose`
--

INSERT INTO `tbl_purpose` (`id`, `name`, `description`) VALUES
(1, 'Wedding', ''),
(2, 'WEDDING', ''),
(3, 'Meeting', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE IF NOT EXISTS `tbl_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `description` text,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `name`, `hotel_id`, `purpose_id`, `roomtype_id`, `price`, `description`, `logo`) VALUES
(1, 'Meeting-Vip', 2, 3, 13, 1600000, ' nmknxckjsn kvndkfnvkjfdnvkjfdnkv', '/Upload/2015-05-20/13.jpg'),
(2, 'Meeting-Deluxe', 2, 3, 14, 2000000, '', '/Upload/2015-05-20/07.jpg'),
(3, 'test', 2, 3, 13, 1230000, '', NULL),
(4, 'Meeting-Casual', 2, 3, 13, 12, '', '/Upload/2015-05-22/thumb-24.jpg'),
(5, '101', 2, 3, 13, 19, '', NULL),
(6, 'rom9', 9, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomtype`
--

CREATE TABLE IF NOT EXISTS `tbl_roomtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_roomtype`
--

INSERT INTO `tbl_roomtype` (`id`, `name`, `description`) VALUES
(13, 'Vip', ''),
(14, 'Deluxe', ''),
(15, 'Casual ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_convenient`
--

CREATE TABLE IF NOT EXISTS `tbl_room_convenient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `convenient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `convenient_id` (`convenient_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_room_convenient`
--

INSERT INTO `tbl_room_convenient` (`id`, `room_id`, `convenient_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `name`, `description`) VALUES
(1, 'massage sauna', ''),
(2, 'Parking free online services', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1432358035, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1432329850, 0, 1),
(3, 'duy1409', '7aa8cd628b1f45844237852a9334eb40', 'mndvdjfkjdfb@gmail.com', '324f5a01a350e6d2d8d2c50a1cab2f6e', 1427947831, 1431750852, 0, 1),
(5, 'dungq', 'c47d3fda295432f8ed189fa4c3830bab', 'dungq@gmail.com', '25da8a34be173da75f1652c8bee312a9', 1432199788, 1432276147, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_booking_detail`
--
ALTER TABLE `tbl_booking_detail`
  ADD CONSTRAINT `tbl_booking_detail_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `tbl_booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hotel_convenient`
--
ALTER TABLE `tbl_hotel_convenient`
  ADD CONSTRAINT `tbl_hotel_convenient_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_hotel_convenient_ibfk_2` FOREIGN KEY (`convenient_id`) REFERENCES `tbl_convenient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hotel_services`
--
ALTER TABLE `tbl_hotel_services`
  ADD CONSTRAINT `tbl_hotel_services_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD CONSTRAINT `tbl_messages_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `tbl_booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_room_convenient`
--
ALTER TABLE `tbl_room_convenient`
  ADD CONSTRAINT `tbl_room_convenient_ibfk_2` FOREIGN KEY (`convenient_id`) REFERENCES `tbl_convenient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
