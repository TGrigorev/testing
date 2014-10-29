-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2014 г., 13:27
-- Версия сервера: 5.5.35-log
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `date_create`, `date_update`) VALUES
(5, 'Keir Thomas', '2014-10-29 09:52:24', '2014-10-29 09:52:24'),
(6, 'Sharon Zardetto', '2014-10-29 09:53:01', '2014-10-29 09:53:01'),
(7, 'J.D. Biersdorfer', '2014-10-29 09:53:16', '2014-10-29 09:53:16'),
(8, 'Tonya Engst', '2014-10-29 09:53:30', '2014-10-29 09:53:30'),
(9, 'Zeeshan Chawdhary', '2014-10-29 09:53:51', '2014-10-29 09:53:59'),
(10, 'Renee J. Valdez', '2014-10-29 09:54:08', '2014-10-29 09:54:08');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `date_create`, `date_update`) VALUES
(1, 'iPad mini For Dummies, 2nd Edition iPad mini For Dummies, 2nd Edition', '2014-10-27 11:06:55', '2014-10-29 09:51:10'),
(2, 'Take Control of iBooks', '2014-10-27 11:07:07', '2014-10-29 09:51:36'),
(3, 'Teach Yourself VISUALLY iPad, 2nd Edition', '2014-10-27 16:44:25', '2014-10-29 09:51:59');

-- --------------------------------------------------------

--
-- Структура таблицы `book_author`
--

CREATE TABLE IF NOT EXISTS `book_author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_book` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_book_author_book_id` (`id_book`),
  KEY `FK_book_author_author_id` (`id_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `book_author`
--

INSERT INTO `book_author` (`id`, `id_book`, `id_author`) VALUES
(8, 1, 5),
(9, 1, 10),
(10, 1, 8),
(11, 2, 10),
(13, 3, 9),
(14, 3, 7),
(15, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `book_reader`
--

CREATE TABLE IF NOT EXISTS `book_reader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_book` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_book_reader_book_id` (`id_book`),
  KEY `FK_book_reader_reader_id` (`id_reader`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `book_reader`
--

INSERT INTO `book_reader` (`id`, `id_book`, `id_reader`, `date_start`, `date_end`) VALUES
(7, 1, 2, '2014-10-29 09:56:31', NULL),
(8, 2, 2, '2014-10-29 09:56:41', NULL),
(9, 3, 2, '2014-10-29 09:56:50', NULL),
(10, 2, 7, '2014-10-29 09:58:03', NULL),
(11, 2, 6, '2014-10-29 09:58:13', NULL),
(12, 3, 4, '2014-10-29 09:58:23', NULL),
(13, 3, 6, '2014-10-29 09:58:33', NULL),
(14, 3, 5, '2014-10-29 09:58:46', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `reader`
--

INSERT INTO `reader` (`id`, `name`, `date_create`, `date_update`) VALUES
(2, 'Наташа', '2014-10-27 00:00:00', '2014-10-27 16:45:54'),
(4, 'Лена', '2014-10-27 16:46:04', '2014-10-27 16:46:04'),
(5, 'Таня', '2014-10-27 16:46:16', '2014-10-27 16:46:16'),
(6, 'Света', '2014-10-27 16:46:27', '2014-10-27 16:46:27'),
(7, 'Надя', '2014-10-27 16:46:43', '2014-10-27 16:46:43');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `FK_book_author_author_id` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `FK_book_author_book_id` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`);

--
-- Ограничения внешнего ключа таблицы `book_reader`
--
ALTER TABLE `book_reader`
  ADD CONSTRAINT `FK_book_reader_reader_id` FOREIGN KEY (`id_reader`) REFERENCES `reader` (`id`),
  ADD CONSTRAINT `FK_book_reader_book_id` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
