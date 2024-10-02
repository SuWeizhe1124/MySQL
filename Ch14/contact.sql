-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-01-15 01:39:36
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `contact`
--
CREATE DATABASE IF NOT EXISTS `contact` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `contact`;

-- --------------------------------------------------------

--
-- 資料表結構 `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `contacts`
--

INSERT INTO `contacts` (`name`, `email`) VALUES
('江小魚', 'smallfish@gmail.com'),
('陳允傑', 'hueyan_chen@yahoo.com.tw'),
('陳會安', 'hueyan@ms2.hinet.net'),
('李小姐', 'lee@yahoo.com.tw');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
