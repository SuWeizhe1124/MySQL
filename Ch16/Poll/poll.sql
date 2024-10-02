-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-01-15 09:29:07
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `poll`
--
CREATE DATABASE IF NOT EXISTS `poll` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `poll`;

-- --------------------------------------------------------

--
-- 資料表結構 `poll`
--

CREATE TABLE `poll` (
  `pollid` char(3) NOT NULL DEFAULT '',
  `pollname` varchar(50) NOT NULL DEFAULT '',
  `pollquestion` varchar(254) NOT NULL DEFAULT '',
  `choice0` varchar(50) DEFAULT NULL,
  `choice1` varchar(50) DEFAULT NULL,
  `choice2` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='網路投票';

--
-- 資料表的匯出資料 `poll`
--

INSERT INTO `poll` (`pollid`, `pollname`, `pollquestion`, `choice0`, `choice1`, `choice2`) VALUES
('001', '網站滿意度', '對於網站內容上的意見', '滿意', '普通', '不滿意'),
('002', '網頁技術', '請問目前使用的伺端網頁技術?', 'ASP.NET', 'PHP', 'JSP'),
('003', 'AppServ使用調查', '請問使用AppServ工具開發PHP的意見?', '滿意', '普通', '不滿意');

-- --------------------------------------------------------

--
-- 資料表結構 `pollresults`
--

CREATE TABLE `pollresults` (
  `pollid` char(3) NOT NULL DEFAULT '',
  `pollanswer` double NOT NULL DEFAULT '0',
  `polladdress` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='網路投票結果';

--
-- 資料表的匯出資料 `pollresults`
--

INSERT INTO `pollresults` (`pollid`, `pollanswer`, `polladdress`) VALUES
('001', 2, '127.0.0.1'),
('001', 3, '127.0.0.1'),
('001', 2, '127.0.0.1'),
('001', 2, '127.0.0.1'),
('002', 1, '127.0.0.1'),
('002', 2, '127.0.0.1'),
('001', 3, '127.0.0.1'),
('001', 3, '127.0.0.1'),
('001', 2, '192.168.0.1'),
('001', 3, '192.168.0.1'),
('002', 3, '192.168.0.1'),
('003', 2, '192.168.0.1'),
('003', 1, '192.168.0.1'),
('003', 1, '192.168.0.1'),
('002', 3, '192.168.0.1'),
('002', 2, '192.168.0.1'),
('002', 2, '192.168.0.1'),
('001', 1, '127.0.0.1'),
('001', 1, '127.0.0.1'),
('002', 2, '127.0.0.1'),
('002', 1, '127.0.0.1'),
('002', 2, '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
