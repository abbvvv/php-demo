-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 26 日 07:10
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `gdmec`
--
CREATE DATABASE `gdmec` DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci;
USE `gdmec`;

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentId` varchar(8) NOT NULL,
  `term` char(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`id`, `studentId`, `term`, `subject`, `mark`) VALUES
(1, '07160605', '2016-2017-1', 'php', 70),
(2, '07160606', '2016-2017-1', 'java', 74),
(3, '07160801', '2016-2017-1', 'php', 80);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentId` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `className` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `sex` char(1) NOT NULL DEFAULT '男',
  `nation` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `studentId`, `name`, `className`, `birthday`, `sex`, `nation`) VALUES
(1, '07160801', '张三', '软件1608', '2000-01-01', '男', '汉族'),
(3, '07160803', '２２２', '２２２', '2013-04-22', '男', '汉族'),
(5, '07160605', '张三', '软件1606', '2000-12-31', '男', '回族'),
(6, '07160606', '三三', '软件1606', '1996-12-31', '女', '高山族');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(48) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0),
(2, 'rrr', '8578173555a47d4ea49e697badfda270dee0858f', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
