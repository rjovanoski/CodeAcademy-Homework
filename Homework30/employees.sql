-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.20 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `employees_db`;

-- Dumping structure for table employees_db.address
CREATE TABLE IF NOT EXISTS `address` (
  `employee_id` int DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table employees_db.address: ~0 rows (approximately)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`employee_id`, `address`) VALUES
	(1, '1938 Sullivan Place, Metropolis'),
	(2, '344 Clinton Street, Metropolis'),
	(3, 'Iland of The Amazones'),
	(4, 'Gotham City, Waine Mannor'),
	(5, 'Holly Drive; Central City');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Dumping structure for table employees_db.email
CREATE TABLE IF NOT EXISTS `email` (
  `employee_id` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table employees_db.email: ~0 rows (approximately)
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` (`employee_id`, `email`, `type`) VALUES
	(1, 'clark@kent.com', 'work'),
	(2, 'lois@lane.com', 'work'),
	(3, 'diana@prince.com', 'work'),
	(4, 'bruce@weyne.com', 'work'),
	(5, 'barry@allen.com', 'home');
/*!40000 ALTER TABLE `email` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees info
CREATE TABLE IF NOT EXISTS `employees info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table employees_db.employees info: ~0 rows (approximately)
/*!40000 ALTER TABLE `employees info` DISABLE KEYS */;
INSERT INTO `employees info` (`id`, `name`, `lastname`) VALUES
	(1, 'Clark', 'Kent'),
	(2, 'Lois', 'Lane'),
	(3, 'Diana', 'Prince'),
	(4, 'Bruce', 'Weyne'),
	(5, 'Barry', 'Allen');
/*!40000 ALTER TABLE `employees info` ENABLE KEYS */;

-- Dumping structure for table employees_db.phone
CREATE TABLE IF NOT EXISTS `phone` (
  `employee_id` int DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table employees_db.phone: ~0 rows (approximately)
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;
INSERT INTO `phone` (`employee_id`, `phone`, `type`) VALUES
	(1, '111111111', 'home'),
	(2, '222222222', 'home'),
	(3, '333333333', 'home'),
	(4, '444444444', 'work'),
	(5, '555555555', 'home');
/*!40000 ALTER TABLE `phone` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
