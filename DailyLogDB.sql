-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2017 at 03:39 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `header`, `description`, `crt_date`, `date`, `importance`, `category`) VALUES
(1, 'Заметка 1', 'Здравствуйте уважаемые друзья! Т.к. данный видеурок я добавлю в первых числах мая, хочу поздравить всех с майскими праздниками и пожелать всегда мирного неба над головой. Ну а теперь перейдем непосредственно к самому уроку.', '2017-03-29 05:47:00', '2017-03-30 05:16:00', 0, 1),
(2, 'Заметка 2', 'доброго времени суток, действительно программа очень полезна, но иногда возникает с ней ошибки, которые я не могу определить самостоятельно.', '2017-03-29 05:47:19', '2017-03-31 09:45:01', 1, 1),
(3, 'Заметка 3', 'Речь пойдет о таком замечательном инструменте, как Firebug. Данный инструмент позволяет инспектировать html и css коды прямо на лету. Единственное, что нам остается сделать это скопировать созданные правила в наш файл стилей.', '2017-03-29 05:47:26', '2017-03-29 20:00:00', 1, 2),
(4, 'Заметка 4', 'Ваш e-mail не будет опубликован. Обязательные поля помечены 4', '2017-03-29 05:47:33', '2017-03-30 17:19:00', 1, 2),
(5, 'Заметка 5', 'Если вы хотите вставить в текст комментария код HTML, CSS, PHP, JavaScript, то обрамите код в соответствии необходимыми тегами:', '2017-03-29 05:47:42', '2017-03-30 20:00:00', 1, 2),
(6, 'Заметка 6', 'Ссылочные пункты списков групп создаются с помощью тегов', '2017-03-30 08:55:41', '2017-03-31 13:55:23', 1, 3),
(7, 'Заметка 7', 'Добавляйте практически любой HTML, даже для связанного списка групп, как показано ниже.', '2017-03-30 08:56:22', '2017-03-31 15:56:00', 0, 3),
(8, 'Заметка 8', 'Хотя не всегда необходимо, но иногда нужно во что-то упаковать DOM. Для таких случаев, попробуйте компонент панели.', '2017-03-30 08:56:53', '2017-03-30 19:56:43', 1, 4);

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
