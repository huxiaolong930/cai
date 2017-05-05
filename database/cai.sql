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
DROP TABLE IF EXISTS `bet`;
CREATE TABLE IF NOT EXISTS `bet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_code` varchar(50) DEFAULT NULL,
  `stock_name` varchar(50) DEFAULT NULL,
  `week_number` int(11) DEFAULT NULL COMMENT '哪年的第几周 201718',
  `week_interval` varchar(50) DEFAULT NULL COMMENT '周的时间区间 20170501-20170507',
  `day` int(11) DEFAULT NULL,
  `interval_name` varchar(50) DEFAULT NULL COMMENT '收盘时的涨跌情况',
  `enable` tinyint(4) DEFAULT NULL COMMENT '0:禁用 1:启用',
  `total_user` int(11) DEFAULT NULL COMMENT '总人数',
  `total_user_win` int(11) DEFAULT NULL COMMENT '胜方人数',
  `total_user_lose` int(11) DEFAULT NULL COMMENT '负方人数',
  `total_cost` int(11) DEFAULT NULL COMMENT '总金额',
  `total_cost_win` int(11) DEFAULT NULL COMMENT '胜方金额',
  `total_cost_lose` int(11) DEFAULT NULL COMMENT '负方金额',
  `fee` int(11) DEFAULT NULL COMMENT '手续费',
  `round_off` int(11) DEFAULT NULL COMMENT '因取整而收益的费用',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  cai.bet 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `bet` DISABLE KEYS */;
INSERT INTO `bet` (`id`, `stock_code`, `stock_name`, `week_number`, `week_interval`, `day`, `interval_name`, `enable`, `total_user`, `total_user_win`, `total_user_lose`, `total_cost`, `total_cost_win`, `total_cost_lose`, `fee`, `round_off`, `created_at`, `updated_at`) VALUES
	(1, '002457', '青龙管业', 18, '20170501-20170507', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-30 18:09:23', '2017-04-30 18:09:25');
/*!40000 ALTER TABLE `bet` ENABLE KEYS */;


-- 导出  表 cai.interval 结构
DROP TABLE IF EXISTS `interval`;
CREATE TABLE IF NOT EXISTS `interval` (
  `name` varchar(50) NOT NULL,
  `start_point` int(11) DEFAULT NULL,
  `end_point` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  cai.interval 的数据：~7 rows (大约)
/*!40000 ALTER TABLE `interval` DISABLE KEYS */;
INSERT INTO `interval` (`name`, `start_point`, `end_point`) VALUES
	('down1_two', 0, -2),
	('down2_five', -2, -5),
	('down3_bottom', -5, -100),
	('down_sh', 0, -100),
	('up1_three', 0, 3),
	('up2_eight', 3, 8),
	('up3_top', 8, 100),
	('up_sh', 0, 100);
/*!40000 ALTER TABLE `interval` ENABLE KEYS */;


-- 导出  表 cai.issue 结构
DROP TABLE IF EXISTS `issue`;
CREATE TABLE IF NOT EXISTS `issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(11) DEFAULT NULL,
  `interval_name` varchar(50) DEFAULT NULL COMMENT '收盘时的涨跌情况',
  `total_user` int(11) DEFAULT NULL COMMENT '总人数',
  `total_user_win` int(11) DEFAULT NULL COMMENT '胜方人数',
  `total_user_lose` int(11) DEFAULT NULL COMMENT '负方人数',
  `total_cost` int(11) DEFAULT NULL COMMENT '总金额',
  `total_cost_win` int(11) DEFAULT NULL COMMENT '胜方金额',
  `total_cost_lose` int(11) DEFAULT NULL COMMENT '负方金额',
  `fee` int(11) DEFAULT NULL COMMENT '手续费',
  `round_off` int(11) DEFAULT NULL COMMENT '因取整而收益的费用',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `day` (`day`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  cai.issue 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `issue` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue` ENABLE KEYS */;


-- 导出  表 cai.moneyflow 结构
DROP TABLE IF EXISTS `moneyflow`;
CREATE TABLE IF NOT EXISTS `moneyflow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `change` int(11) DEFAULT NULL COMMENT '余额变动 +3|-5',
  `des` varchar(50) DEFAULT NULL COMMENT '简短描述用途，比如充值',
  `balance` int(11) DEFAULT NULL COMMENT '变动后的余额',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  cai.moneyflow 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `moneyflow` DISABLE KEYS */;
/*!40000 ALTER TABLE `moneyflow` ENABLE KEYS */;


-- 导出  表 cai.order 结构
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `betid` int(11) DEFAULT NULL COMMENT '0:表示大盘，其他为个股',
  `cost` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `interval_name` varchar(50) DEFAULT NULL,
  `up_down_range` decimal(10,2) DEFAULT NULL COMMENT '不带%',
  `settlement` int(11) DEFAULT NULL COMMENT '结算额',
  `profit` decimal(10,2) DEFAULT NULL COMMENT '收益率',
  `ip` varchar(50) DEFAULT NULL,
  `ip_addr` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- 正在导出表  cai.order 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`id`, `uid`, `betid`, `cost`, `day`, `interval_name`, `up_down_range`, `settlement`, `profit`, `ip`, `ip_addr`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 5, 20170504, 'down2_five', NULL, NULL, NULL, NULL, NULL, '2017-05-04 18:33:33', '2017-05-04 18:33:34'),
	(2, 1, 0, 10, 20170504, 'up_sh', NULL, NULL, NULL, NULL, NULL, '2017-05-04 18:35:24', '2017-05-04 18:35:26');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- 导出  表 cai.user 结构
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `total_in` int(11) DEFAULT NULL COMMENT '总充值',
  `total_out` int(11) DEFAULT NULL COMMENT '总花费',
  `balance` int(11) DEFAULT NULL COMMENT '余额',
  `cash` int(11) DEFAULT NULL COMMENT '提现',
  `ROI` decimal(10,2) DEFAULT NULL COMMENT '回报率盈利率',
  `win_count` int(11) DEFAULT NULL COMMENT '胜次数',
  `lose_count` int(11) DEFAULT NULL COMMENT '负次数',
  `WP` decimal(10,2) DEFAULT NULL COMMENT '胜率',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  cai.user 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nickname`, `phone`, `pwd`, `total_in`, `total_out`, `balance`, `cash`, `ROI`, `win_count`, `lose_count`, `WP`, `created_at`, `updated_at`) VALUES
	(1, 'lonfen1108', '18601067675', '123456', 100, 15, 85, 0, NULL, NULL, NULL, NULL, '2017-05-04 18:19:40', '2017-05-04 18:19:42');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
