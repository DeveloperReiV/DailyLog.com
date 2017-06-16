-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2017 at 08:36 AM
-- Server version: 5.5.45
-- PHP Version: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DailyLogDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `header` varchar(255) DEFAULT NULL,
  `description` text,
  `crt_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` timestamp NULL DEFAULT NULL,
  `importance` tinyint(1) NOT NULL DEFAULT '0',
  `category` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `header`, `description`, `crt_date`, `date`, `importance`, `category`) VALUES
(1, 'Заметка 1', 'Собеседование - один из важнейших этапов трудоустройства. Умение правильно себя позиционировать и быть готовым ответить на любые вопросы рекрутера, несомненно, будет полезным как начинающим специалистам, так и топ-менеджерам крупных компаний. В данном курсе подробно разбираются все этапы проведения собеседования, а так же процесс подготовки к каждому из них. Вы почувствуете себя гораздо увереннее после того, как будете знать мотивацию ректутера и основные вопросы, с которыми вам придется столкнуться на любом собеседовании.', '2017-06-16 05:25:56', '2017-06-15 23:01:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teldir`
--

CREATE TABLE IF NOT EXISTS `teldir` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `owner` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `note_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `year` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `middlename`, `description`, `year`, `photo`, `phone`, `login`, `password`) VALUES
(1, 'Анна', 'Скударнова', 'Владимировна', 'Липовая отличница', '1995-06-21', 'ava.jpg', '89200916288', 'anna', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
