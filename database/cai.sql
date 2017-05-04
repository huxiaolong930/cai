-- --------------------------------------------------------
-- 主机:                           localhost
-- 服务器版本:                        10.1.21-MariaDB - mariadb.org binary distribution
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.2.0.4972
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 cai 的数据库结构
CREATE DATABASE IF NOT EXISTS `cai` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cai`;


-- 导出  表 cai.bet 结构
CREATE TABLE IF NOT EXISTS `bet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stockCode` varchar(50) DEFAULT NULL,
  `stockName` varchar(50) DEFAULT NULL,
  `weekNo` int(11) DEFAULT NULL COMMENT '哪年的第几周 201718',
  `weekInterval` varchar(50) DEFAULT NULL COMMENT '周的时间区间 20170501-20170507',
  `enable` tinyint(4) DEFAULT NULL COMMENT '0:禁用 1:启用',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  cai.bet 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `bet` DISABLE KEYS */;
INSERT INTO `bet` (`id`, `stockCode`, `stockName`, `weekNo`, `weekInterval`, `enable`, `created_at`, `updated_at`) VALUES
	(1, '002457', '青龙管业', 18, '20170501-20170507', 1, '2017-04-30 18:09:23', '2017-04-30 18:09:25');
/*!40000 ALTER TABLE `bet` ENABLE KEYS */;


-- 导出  表 cai.interval 结构
CREATE TABLE IF NOT EXISTS `interval` (
  `name` varchar(50) NOT NULL,
  `startPoint` int(11) DEFAULT NULL,
  `endPoint` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  cai.interval 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `interval` DISABLE KEYS */;
INSERT INTO `interval` (`name`, `startPoint`, `endPoint`) VALUES
	('down1_two', 0, -2),
	('down2_five', -2, -5),
	('down3_bottom', -5, -100),
	('down_sh', 0, -100),
	('up1_three', 0, 3),
	('up2_eight', 3, 8),
	('up3_top', 8, 100),
	('up_sh', 0, 100);
/*!40000 ALTER TABLE `interval` ENABLE KEYS */;


-- 导出  表 cai.order 结构
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `betid` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `interval_name` varchar(50) DEFAULT NULL,
  `up_down_range` decimal(10,2) DEFAULT NULL,
  `settlement` decimal(10,2) DEFAULT NULL,
  `profit` decimal(10,2) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `ipaddr` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- 正在导出表  cai.order 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`id`, `uid`, `betid`, `cost`, `day`, `interval_name`, `up_down_range`, `settlement`, `profit`, `ip`, `ipaddr`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 5, 20170504, 'down2_five', NULL, NULL, NULL, NULL, NULL, '2017-05-04 18:33:33', '2017-05-04 18:33:34'),
	(2, 1, 0, 10, 20170504, 'up_sh', NULL, NULL, NULL, NULL, NULL, '2017-05-04 18:35:24', '2017-05-04 18:35:26');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- 导出  表 cai.user 结构
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `totalIn` int(11) DEFAULT NULL,
  `totalOut` int(11) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `cash` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  cai.user 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nickname`, `phone`, `pwd`, `totalIn`, `totalOut`, `balance`, `cash`, `created_at`, `updated_at`) VALUES
	(1, 'lonfen1108', '18601067675', '123456', 100, 0, 100.00, 0, '2017-05-04 18:19:40', '2017-05-04 18:19:42');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
