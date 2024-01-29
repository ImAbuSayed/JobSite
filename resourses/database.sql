-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for job_portal
CREATE DATABASE IF NOT EXISTS `job_portal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `job_portal`;

-- Dumping structure for table job_portal.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table job_portal.categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'IT'),
	(2, 'BUSINESS'),
	(3, 'GENERAL');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table job_portal.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` timestamp NULL DEFAULT NULL,
  `responsibility` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table job_portal.jobs: ~4 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_time`, `deadline`, `responsibility`) VALUES
	(1, 2, 'Aliibaba', 'Digital Marketing Manager', 'We need a Digital Marketer', '3000$/M', 'Singapore', 'Abu Sayed', 'sayed@alibaba.com', '2024-01-16 06:13:29', '2024-01-19 00:00:00', '1. Manage Facebook Pages.'),
	(2, 1, 'Apple', 'Software Developer', 'We Need a Software Developer', '47$/h', 'USA (Remote)', 'Sayed', 'sayed@apple.com', '2024-01-16 07:04:36', '2024-01-31 00:00:00', '1. Know Basic of PHP.'),
	(7, 3, 'A2Z Online Teaching Center', 'Arabic Teacher', 'We need a Muslim Teacher, Who can tech students Arabic Language online.', '20000 BDT/M', 'Remote', 'Abu Sayed', 'sayed@a2zotc.com', '2024-01-27 13:19:58', '2024-01-29 00:00:00', '1. Teach Read in Arabic.\r\n2. Teach Write in Arabic.\r\n3. Teach History of Islam.'),
	(8, 3, '5 Minutes College', 'English Teacher', 'We need a English Teacher, Who have Master in English and IELTS Score 7+. ', '36000 BDT/M', 'Remote', 'Abu Sayed', 'sayed@5mc.org', '2024-01-27 13:41:25', '2024-03-20 00:00:00', '1. Teach Read in English.\r\n2. Teach Write in English.\r\n3. Prepare Students for IELTS Exam.');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
