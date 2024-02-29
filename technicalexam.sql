-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for technicalexam
CREATE DATABASE IF NOT EXISTS `technicalexam` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `technicalexam`;

-- Dumping structure for table technicalexam.department
CREATE TABLE IF NOT EXISTS `department` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(50) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table technicalexam.department: ~2 rows (approximately)
INSERT INTO `department` (`Id`, `DepartmentName`, `Description`) VALUES
	(1, 'ITSM', ''),
	(2, 'Mayor\'s Office', NULL);

-- Dumping structure for table technicalexam.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RoleType` char(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table technicalexam.roles: ~2 rows (approximately)
INSERT INTO `roles` (`Id`, `RoleType`) VALUES
	(1, 'Admin'),
	(2, 'Basic');

-- Dumping structure for table technicalexam.useraccounts
CREATE TABLE IF NOT EXISTS `useraccounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Roles` int(11) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table technicalexam.useraccounts: ~1 rows (approximately)
INSERT INTO `useraccounts` (`ID`, `UserId`, `Password`, `Roles`, `Status`) VALUES
	(5, 'raytaliman', 'raytaliman', 1, 'Active');

-- Dumping structure for table technicalexam.userdetails
CREATE TABLE IF NOT EXISTS `userdetails` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountsID` int(11) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Gender` char(50) DEFAULT NULL,
  `Barangay` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Province` varchar(50) DEFAULT NULL,
  `ContactNumber` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DepartmentID` int(11) DEFAULT NULL,
  `SSS` varchar(50) DEFAULT NULL,
  `TIN` varchar(50) DEFAULT NULL,
  `Philhealth` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table technicalexam.userdetails: ~1 rows (approximately)
INSERT INTO `userdetails` (`Id`, `UserAccountsID`, `FirstName`, `MiddleName`, `LastName`, `Birthday`, `Gender`, `Barangay`, `City`, `Province`, `ContactNumber`, `Email`, `DepartmentID`, `SSS`, `TIN`, `Philhealth`) VALUES
	(13, 5, 'Ray', 'Ray', 'Taliman', '0000-00-00', 'Male', 'Ma. Cristina West', 'Bangar', 'La Union', '2147483647', 'raytaliman@icloud.com', 1, '001010101', '1102-112-110-00000', '1-4432-43343');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
