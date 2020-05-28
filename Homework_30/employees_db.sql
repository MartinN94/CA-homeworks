-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.adresses
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `street_num` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.adresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `adresses` DISABLE KEYS */;
INSERT INTO `adresses` (`id`, `country`, `city`, `zip_code`, `street`, `street_num`) VALUES
	(1, 'USA', 'Marvel', '15000', 'Marvel str', 'no1'),
	(2, 'MKD', 'Skopje', '1000', 'ul. Narodni Heroi', 'br. 23'),
	(3, 'MKD', 'Kicevo', '2360', 'bul. Makedonija', '26/3-2'),
	(4, 'USA', 'New York', '16800', 'Manhatten', '29/1'),
	(5, 'USA', 'Los Angeles', '12200', 'Beverly Hills', '2-5/6');
/*!40000 ALTER TABLE `adresses` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL DEFAULT '0',
  `social_num` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.employees: ~0 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `firstname`, `lastname`, `social_num`) VALUES
	(1, 'John', 'Doe', '56658416454'),
	(2, 'Toso', 'Malerot', '987432189465'),
	(3, 'Mile', 'Panika', '56489434631'),
	(4, 'Bill', 'Gates', '1111111111'),
	(5, 'Donald', 'Trump', '56645654');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.phones
CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(11) DEFAULT NULL,
  `office_num` varchar(50) DEFAULT NULL,
  `work_mobile` varchar(50) DEFAULT NULL,
  `home_num` varchar(50) DEFAULT NULL,
  `private_mobile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.phones: ~0 rows (approximately)
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` (`id`, `office_num`, `work_mobile`, `home_num`, `private_mobile`) VALUES
	(1, 'local 111', '006356584', '/', '/'),
	(2, '/', '078565858', '023525656', '070565484'),
	(3, '/', '075231621', '/', '070987456'),
	(4, 'local 01', '0879548421', '04564748', '07549524'),
	(5, '/', '+968548424', '+3562156', '+96854569451');
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;

-- Dumping structure for table employees_db.work_positions
CREATE TABLE IF NOT EXISTS `work_positions` (
  `id` int(11) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `supervisor` varchar(50) DEFAULT NULL,
  `dep_manager` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.work_positions: ~0 rows (approximately)
/*!40000 ALTER TABLE `work_positions` DISABLE KEYS */;
INSERT INTO `work_positions` (`id`, `position`, `department`, `supervisor`, `dep_manager`) VALUES
	(1, 'hero', 'marvel heroes', 'Bob', '/'),
	(2, 'actor', 'comedy actors', 'Cacko', 'k-15 ceo'),
	(3, 'actor', 'comedy actor', 'Cacko', 'k-15 ceo'),
	(4, 'CEO', '/', '/', '/'),
	(5, 'financial manager', 'finance', 'Ivanka Trump', 'Melinda Trump');
/*!40000 ALTER TABLE `work_positions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
