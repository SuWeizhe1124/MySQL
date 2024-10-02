-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-01-14 09:21:13
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mybooks`
--
CREATE DATABASE IF NOT EXISTS `mybooks` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mybooks`;

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `id` char(5) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `author` varchar(15) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `pubdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`, `category`, `pubdate`) VALUES
('D0001', 'Access 2013入門與實作', '陳會安', '450', '資料庫', '2014-06-01'),
('P0001', '資料結構 - 使用C語言', '陳會安', '520', '資料結構', '2014-04-01'),
('P0002', 'Java程式設計入門與實作', '陳會安', '550', '程式設計', '2015-07-01'),
('P0003', 'Scratch+fChart程式邏輯訓練', '陳會安', '350', '程式設計', '2015-04-01'),
('W0001', 'PHP與MySQL入門與實作', '陳會安', '550', '網頁設計', '2014-09-01'),
('W0002', 'jQuery Mobile與Bootstrap網頁設計', '陳會安', '500', '網頁設計', '2015-10-01');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
