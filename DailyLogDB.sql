-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2017 at 02:40 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `header`, `description`, `crt_date`, `date`, `importance`, `category`) VALUES
(2, 'Заметка ецщ', 'доброго времени суток, действительно программа очень полезна, но иногда возникает с ней ошибки, которые я не могу определить самостоятельно.', '2017-03-29 05:47:19', '2017-03-31 09:45:00', 1, 1),
(4, 'Заметка 4', 'Ваш e-mail не будет опубликован. Обязательные поля помечены 4', '2017-03-29 05:47:33', '2017-03-30 17:19:00', 1, 2),
(5, 'Заметка 5', 'Если вы хотите вставить в текст комментария код HTML, CSS, PHP, JavaScript, то обрамите код в соответствии необходимыми тегами:', '2017-03-29 05:47:42', '2017-03-30 20:00:00', 1, 2),
(7, 'Заметка 7', 'Добавляйте практически любой HTML, даже для связанного списка групп, как показано ниже.', '2017-03-30 08:56:22', '2017-03-31 15:56:00', 0, 3),
(8, 'Заметка 8', 'Хотя не всегда необходимо, но иногда нужно во что-то упаковать DOM. Для таких случаев, попробуйте компонент панели.', '2017-03-30 08:56:53', '2017-03-30 19:56:43', 1, 4),
(13, 'семья заметка', 'оаоаарарарарра', '2017-04-03 10:04:21', '2017-04-06 01:30:00', 1, 4),
(17, 'Работа ред', 'выалфплтваппплыыыдптвао  пдолд ыаssd фпрфлварп фводплолвапрвафрп фджпрфврпофвбчстямьблдыврпв', '2017-04-03 10:36:59', '2017-04-05 07:09:00', 0, 1),
(22, 'вввпврп', 'врврвпр', '2017-04-03 12:16:10', '2017-04-05 20:00:00', 0, 1),
(23, 'пппп', 'ппарпрапр', '2017-04-03 12:21:29', '2017-04-04 21:00:00', 1, 1),
(24, 'ghfgh', 'fghfghfghfghfghfghrrrrrrrrrrrrrrrrrr54545', '2017-04-03 12:27:01', '2017-04-02 20:00:00', 0, 3),
(25, 'gggff', 'dffgdfgdfgsss', '2017-04-04 04:40:43', '2017-04-13 01:56:00', 0, 2),
(26, 'asdas', 'dasdasdsad', '2017-04-04 06:06:27', '2017-04-04 20:00:00', 0, 3),
(28, '666', '6666666666eeeee', '2017-04-04 06:21:23', '2017-04-03 20:00:00', 1, 1),
(29, 'asdasd', 'asdasd', '2017-04-04 06:21:41', '2017-04-03 20:00:00', 1, 2),
(30, 'ssssss', 'ssss', '2017-04-06 07:18:05', '2017-04-05 22:33:00', 1, 1),
(31, 'Заметка вторая', '', '2017-04-06 11:00:55', '2017-04-05 20:00:00', 0, 1),
(32, 'ssssdasd', 'asdasdas', '2017-04-06 11:05:18', '2017-04-05 20:00:00', 0, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teldir`
--

INSERT INTO `teldir` (`id`, `owner`, `phone`, `note_id`) VALUES
(2, 'гимлер бубнов', '45-63-95', NULL),
(3, 'бэтмен хомяков', '563-631-55', NULL),
(4, 'афоня', '344-234234-332', NULL),
(5, 'пирун', '324234', NULL),
(6, 'еее', '75858', NULL);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `middlename`, `description`, `year`, `photo`, `phone`) VALUES
(1, 'Анна', 'Скударнова', 'Владимировна', 'Липовая отличница', '1995-07-21', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
