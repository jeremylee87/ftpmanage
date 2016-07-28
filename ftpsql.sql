-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 07 月 28 日 07:52
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ftp_manage`
--

-- --------------------------------------------------------

--
-- 表的结构 `ftp_info`
--

CREATE TABLE IF NOT EXISTS `ftp_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sitetype` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sitename` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ftpurl` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ftpname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ftppwd` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dbname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dbuser` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dbpwd` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginurl` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginpwd` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tips` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- 导出表中的数据 `ftp_info`
--

INSERT INTO `ftp_info` (`id`, `sitetype`, `sitename`, `ftpurl`, `ftpname`, `ftppwd`, `dbname`, `dbuser`, `dbpwd`, `loginurl`, `loginname`, `loginpwd`, `tips`, `modtime`) VALUES
(23, 'PC', '站点名称', 'FTP地址', 'FTP账号', 'FTP密码', '数据库名称', '数据库用户', '数据库密码', '后台登录地址', '用户名', '用户名', '备注', '2016-07-28 15:50:56');
