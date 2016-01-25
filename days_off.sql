-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 04 2016 г., 00:59
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `days`
--

-- --------------------------------------------------------

--
-- Структура таблицы `days_off`
--

CREATE TABLE IF NOT EXISTS `days_off` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_day` date NOT NULL,
  `date_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `days_off`
--

INSERT INTO `days_off` (`id`, `date_day`, `date_name`) VALUES
(1, '2016-01-07', 'Christmas'),
(2, '2016-01-14', 'Old New Year'),
(3, '2016-01-21', 'Halloween'),
(6, '2016-04-05', 'My Birth Day'),
(7, '2016-12-08', 'Jena Birth Day'),
(8, '2016-05-01', 'Firt May'),
(9, '2016-01-09', 'Another Day');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
