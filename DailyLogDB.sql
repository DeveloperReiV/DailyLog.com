-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2017 at 03:08 PM
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
  `description` varchar(255) DEFAULT NULL,
  `crt_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` timestamp NULL DEFAULT NULL,
  `importance` tinyint(1) NOT NULL DEFAULT '0',
  `category` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `header`, `description`, `crt_date`, `date`, `importance`, `category`) VALUES
(4, 'Заметка 4', 'Ваш e-mail не будет опубликован. Обязательные поля помечены 4', '2017-03-29 05:47:33', '2017-03-30 17:19:00', 1, 2),
(5, 'Заметка 5', 'Если вы хотите вставиv ть в текст комментария код HTML, CSS, PHP, JavaScript, то обрамите код в соответствии необходимыми тегами:', '2017-03-29 05:47:42', '2017-03-30 20:00:00', 1, 2),
(7, 'Заметка 7', 'Добавляйте практически любой HTML, даже для связанного списка групп, как показано ниже.', '2017-03-30 08:56:22', '2017-03-31 15:56:00', 0, 3),
(24, 'ghfgh', 'fghfghfghfghfghfghrrrrrrrrrrrrrrrrrr54545', '2017-04-03 12:27:01', '2017-04-02 20:00:00', 0, 3),
(25, 'gggff', 'dffgdfgdfgsss', '2017-04-04 04:40:43', '2017-04-13 01:56:00', 0, 2),
(29, 'asdasd', 'asdasd', '2017-04-04 06:21:41', '2017-04-03 20:00:00', 1, 2),
(34, 'wwww', 'wwwwwwwwwwwwwwwwwwwwwwwwww', '2017-04-07 06:05:58', '2017-04-07 20:00:00', 1, 3),
(35, '546456', '546456456ddd', '2017-04-07 06:10:12', '2017-04-06 20:00:00', 0, 3),
(37, 'sdsd', 'sdasdasd', '2017-04-07 06:15:27', '2017-04-07 20:00:00', 0, 1),
(38, 'fgsdfgsd', 'fgdfgdgfgggg', '2017-04-07 06:17:32', '2017-04-06 20:00:00', 0, 1),
(39, 'asd', 'asdasd', '2017-04-07 06:26:54', '2017-04-07 20:00:00', 0, 1),
(40, 'rtyrty', 'rtyrtyrt', '2017-04-10 05:09:17', '2017-04-09 21:00:00', 1, 1),
(41, 'fdgf', 'dfgdfgdfg', '2017-04-10 11:37:43', '2017-04-10 21:00:00', 1, 3),
(42, '111111111111ывапывп', 'ывпывпывп', '2017-04-10 13:18:35', '2017-04-13 21:00:00', 1, 1),
(43, 'ssssss', 'ssssssssssssssssssssssss', '2017-04-24 05:49:35', '2017-04-23 21:00:00', 1, 1),
(44, '23444444444444444444', '234444444444444444', '2017-04-24 06:54:20', '2017-04-23 21:00:00', 0, 1),
(45, '23444444444444444444', '234444444444444444', '2017-04-24 06:54:50', '2017-04-23 21:00:00', 0, 1),
(46, '23444444444444444444', '234444444444444444', '2017-04-24 07:00:15', '2017-04-23 21:00:00', 0, 1),
(47, '23444444444444444444', '234444444444444444', '2017-04-24 07:04:19', '2017-04-23 21:00:00', 0, 1),
(48, '211111111111111111111', 'вафываыва', '2017-04-24 07:04:57', '2017-04-23 21:00:00', 0, 1),
(49, '211111111111111111111', 'вафываыва', '2017-04-24 07:05:19', '2017-04-23 21:00:00', 0, 1),
(50, 'фвыфвфы', 'вфывфывфыв', '2017-04-24 07:06:20', '2017-04-24 21:00:00', 0, 1),
(51, 'смисм', 'ипрпар', '2017-04-24 07:07:00', '2017-04-23 21:00:00', 0, 1),
(52, 'смисм', 'ипрпар', '2017-04-24 07:07:26', '2017-04-23 21:00:00', 0, 1),
(53, 'выаыва', 'ываываыва', '2017-04-24 07:09:33', '2017-04-23 21:00:00', 0, 1),
(54, 'аываыв', 'аываывав', '2017-04-24 07:11:01', '2017-04-18 21:00:00', 0, 1),
(55, 'авпвап', 'апвапвп', '2017-04-24 07:12:21', '2017-04-23 21:00:00', 0, 1),
(56, 'чаываыв', 'аываывав', '2017-04-24 07:14:00', '2017-04-23 21:00:00', 0, 1),
(57, 'ывавы', 'аываыва', '2017-04-24 07:19:45', '2017-04-11 21:00:00', 0, 1),
(58, 'фывф', 'ывфывфыв', '2017-04-24 07:38:51', '2017-04-24 21:00:00', 0, 1),
(59, 'sdfsdf', 'sdfsdfsdf', '2017-04-24 07:52:16', '2017-04-24 21:00:00', 0, 1),
(60, 'sdssdf', 'sdfsdfsdf', '2017-04-24 07:52:49', '2017-04-17 21:00:00', 0, 1),
(61, 'fdgdfg', 'dfgdfgdfgdfg', '2017-04-24 07:54:20', '2017-04-23 21:00:00', 0, 1),
(62, 'asas', 'sasas', '2017-04-24 08:01:37', '2017-04-24 21:00:00', 0, 1),
(63, 'sdfsdf', 'sdfsdfsdf', '2017-04-24 08:02:20', '2017-04-23 21:00:00', 0, 1),
(64, 'dfgg', 'dfgdfgdfg', '2017-04-24 08:05:01', '2017-04-24 21:00:00', 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `teldir`
--

INSERT INTO `teldir` (`id`, `owner`, `phone`, `note_id`) VALUES
(3, 'бэтмен хомяков', '563-631-55', NULL),
(6, 'еее', '75858', NULL),
(7, 'ggggggggggggg', '3356', NULL),
(8, 'dfsdf', '324234', NULL),
(9, 'sdfsd', '234', NULL);

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
