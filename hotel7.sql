-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Mai 2015 à 09:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hotel7`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomid` bigint(20) NOT NULL,
  `datefrom` date NOT NULL,
  `numberofnights` smallint(6) NOT NULL,
  `dateto` date NOT NULL,
  `onlinepayment` int(11) NOT NULL,
  `confirmreservation` int(11) NOT NULL,
  `roomsavailable` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reservationdetails`
--

CREATE TABLE IF NOT EXISTS `reservationdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservationid` int(11) NOT NULL,
  `title` varchar(3) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contactnumber` varchar(20) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `postaddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `otherinfo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reservationid` (`reservationid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `roomcharge`
--

CREATE TABLE IF NOT EXISTS `roomcharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roomid` (`roomid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `roomdetails`
--

CREATE TABLE IF NOT EXISTS `roomdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomid` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roomid` (`roomid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `roomtype`
--

CREATE TABLE IF NOT EXISTS `roomtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `roomtype`
--

INSERT INTO `roomtype` (`id`, `description`) VALUES
(1, 'vip');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_type` varchar(255) NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `card_owner` varchar(255) NOT NULL,
  `CVC` varchar(4) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `person_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `user_id`, `date_from`, `date_to`, `person_no`, `room_id`, `status`) VALUES
(15, 2, '2015-05-07', '2015-05-09', 2, 15, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `content` text,
  `point` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `user_id`, `hotel_id`, `content`, `point`) VALUES
(1, 1, 2, NULL, 3),
(2, 2, 2, NULL, 5),
(3, 3, 2, '', 6),
(4, 3, 3, '', 2),
(5, 3, 7, '', 9),
(6, 3, 7, 'bad hotel', 1),
(7, 3, 4, '', 9),
(8, 3, 7, 'this is good hotel with good views,\r\nfood is cheap, good services.\r\nI will come back', 6),
(9, 3, 9, 'lovely hotel,\r\ni will share with my friend', 7),
(10, 2, 7, '', 7),
(11, 2, 9, 'lol', 9);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_convenient`
--

CREATE TABLE IF NOT EXISTS `tbl_convenient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tbl_convenient`
--

INSERT INTO `tbl_convenient` (`id`, `name`) VALUES
(1, 'TV'),
(2, 'Parking '),
(3, 'Wifi Network'),
(4, 'Launch Dry');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_hotels`
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
-- Contenu de la table `tbl_hotels`
--

INSERT INTO `tbl_hotels` (`id`, `name`, `City`, `address`, `description`, `rank`, `logo`, `tel`, `aver_point`) VALUES
(2, 'Muong Thanh Hotel', 'Ha Noi', 'Nam Tu Liem', 'dsfsd', 3, '/Upload/2015-05-20/thumb-05.jpg', '', 4.6666666666667),
(3, 'Trang Tien Ha Noi Hotel', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'dsvdfbfgnmm\r\nghmhjmj\r\njh,hj,\r\n', 5, NULL, NULL, 2),
(4, 'Ha Thanh Plaza', 'Ha Noi', 'nam t? liêm hà n?i', ' skvd fkv', 4, NULL, NULL, 9),
(5, 'Royal Hotel Ha Noi', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'sc  ,mv', 5, NULL, NULL, NULL),
(7, 'Mariot Ha Noi', 'Ha Noi', 'nam t? liêm hà n?i', 'dfgdfgd', 5, NULL, NULL, 5.75),
(8, 'Kaeng Nam Ha Noi', 'Hà N?i', 'nam t? liêm hà n?i', 'ksdvksdnv', 5, NULL, NULL, NULL),
(9, 'KeangNam', 'Ha Noi', '371 Khuong Trung Ha Noi', 'jd vf fv jf v fjkvf jv', 5, NULL, NULL, 8),
(10, 'Phu Quy Hotel', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'dsvdv', 4, NULL, NULL, NULL),
(11, 'Tan Thanh Hotel', 'Ha Noi', '130 Trang Tien Hoan Kiem Ha Noi', 'c smc', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_hotel_convenient`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel_convenient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) NOT NULL,
  `convenient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `convenient_id` (`convenient_id`),
  KEY `hotel_id` (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(500) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hotel_id` (`hotel_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `birthday`, `tel`, `address`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00', '', ''),
(2, 'Demo', 'Demo', '0000-00-00', '0988332563', ''),
(3, 'vũ văn', 'tùng', '2015-04-01', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_profiles_fields`
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
-- Contenu de la table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 2, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 2),
(4, 'tel', 'Mobile', 'VARCHAR', 20, 0, 0, '', '', '', '', '', '', '', 0, 3),
(5, 'address', 'Address', 'VARCHAR', 255, 0, 0, '', '', '', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_purpose`
--

CREATE TABLE IF NOT EXISTS `tbl_purpose` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tbl_purpose`
--

INSERT INTO `tbl_purpose` (`id`, `name`, `description`) VALUES
(1, 'Wedding', ''),
(2, 'WEDDING', ''),
(3, 'Meeting', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_rooms`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `name`, `hotel_id`, `purpose_id`, `roomtype_id`, `price`, `description`, `logo`) VALUES
(1, 'Meeting-Vip', 2, 3, 13, 1600000, '', '/Upload/2015-05-20/04.jpg'),
(2, 'Meeting-Deluxe', 2, 3, 14, 2000000, '', '/Upload/2015-05-20/07.jpg'),
(3, 'test', 2, 3, 13, 1230000, '', NULL),
(4, 'Meeting-Casual', 2, 3, 13, 12, '', NULL),
(5, '101', 2, 3, 13, 19, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_rooms2`
--

CREATE TABLE IF NOT EXISTS `tbl_rooms2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomtype_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `purpose_id` (`purpose_id`),
  UNIQUE KEY `roomtype_id` (`roomtype_id`),
  KEY `hotel_id` (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_rooms3`
--

CREATE TABLE IF NOT EXISTS `tbl_rooms3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `purpose_id` (`purpose_id`,`roomtype_id`),
  UNIQUE KEY `roomtype_id` (`roomtype_id`),
  KEY `hotel_id` (`hotel_id`,`purpose_id`,`roomtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `tbl_rooms3`
--

INSERT INTO `tbl_rooms3` (`id`, `name`, `hotel_id`, `purpose_id`, `roomtype_id`, `price`, `description`) VALUES
(14, 'Meeting-Vip', 2, 3, 13, 1230000, ''),
(15, 'Meeting-Casual', 2, 3, 15, 1500000, ''),
(16, 'Meeting-Deluxe', 2, 3, 14, 1600000, '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_roomtype`
--

CREATE TABLE IF NOT EXISTS `tbl_roomtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `tbl_roomtype`
--

INSERT INTO `tbl_roomtype` (`id`, `name`, `description`) VALUES
(13, 'Vip', ''),
(14, 'Deluxe', ''),
(15, 'Casual ', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_room_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_room_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `number_room` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_room_convenient`
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
-- Contenu de la table `tbl_room_convenient`
--

INSERT INTO `tbl_room_convenient` (`id`, `room_id`, `convenient_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1432102373, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1432020858, 0, 1),
(3, 'duy1409', '7aa8cd628b1f45844237852a9334eb40', 'mndvdjfkjdfb@gmail.com', '324f5a01a350e6d2d8d2c50a1cab2f6e', 1427947831, 1431750852, 0, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservationdetails`
--
ALTER TABLE `reservationdetails`
  ADD CONSTRAINT `reservationdetails_ibfk_3` FOREIGN KEY (`reservationid`) REFERENCES `reservation` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `roomcharge`
--
ALTER TABLE `roomcharge`
  ADD CONSTRAINT `roomcharge_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `roomtype` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD CONSTRAINT `roomdetails_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `roomtype` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_booking_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `tbl_rooms3` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_hotel_convenient`
--
ALTER TABLE `tbl_hotel_convenient`
  ADD CONSTRAINT `tbl_hotel_convenient_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_hotel_convenient_ibfk_2` FOREIGN KEY (`convenient_id`) REFERENCES `tbl_convenient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD CONSTRAINT `tbl_image_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_rooms2`
--
ALTER TABLE `tbl_rooms2`
  ADD CONSTRAINT `tbl_rooms2_ibfk_3` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_rooms2_ibfk_4` FOREIGN KEY (`purpose_id`) REFERENCES `tbl_purpose` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_rooms2_ibfk_5` FOREIGN KEY (`roomtype_id`) REFERENCES `roomtype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_rooms3`
--
ALTER TABLE `tbl_rooms3`
  ADD CONSTRAINT `tbl_rooms3_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_rooms3_ibfk_2` FOREIGN KEY (`purpose_id`) REFERENCES `tbl_purpose` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_room_booking`
--
ALTER TABLE `tbl_room_booking`
  ADD CONSTRAINT `tbl_room_booking_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `tbl_rooms2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_room_booking_ibfk_2` FOREIGN KEY (`booking_id`) REFERENCES `tbl_booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_room_booking_ibfk_3` FOREIGN KEY (`booking_id`) REFERENCES `tbl_booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_room_booking_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `tbl_rooms2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_room_convenient`
--
ALTER TABLE `tbl_room_convenient`
  ADD CONSTRAINT `tbl_room_convenient_ibfk_2` FOREIGN KEY (`convenient_id`) REFERENCES `tbl_convenient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
