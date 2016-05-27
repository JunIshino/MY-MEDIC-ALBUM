-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.39 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `mymedicalbum` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mymedicalbum`;


-- Dumping structure for table personal details

CREATE TABLE IF NOT EXISTS `personaldetails` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(15) NULL DEFAULT NULL,
	`sn` VARCHAR(15) NULL DEFAULT NULL,
	`dob` VARCHAR(15) NULL DEFAULT NULL,
	`na` VARCHAR(15) NULL DEFAULT NULL,	
	`gen` VARCHAR(10) NULL DEFAULT NULL,
	`add` VARCHAR(60) NULL DEFAULT NULL,
	`ph` INTEGER(50) NULL DEFAULT NULL,
	`email` VARCHAR(30) NULL DEFAULT NULL,
	`ht` INTEGER(200) NULL DEFAULT NULL,
	`wt` INTEGER(200) NULL DEFAULT NULL,
	`bd` VARCHAR(5) NULL DEFAULT NULL,
	`ma` VARCHAR(300) NULL DEFAULT NULL,
	`vac` VARCHAR(300) NULL DEFAULT NULL,
	
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.



-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
