-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `percent` DECIMAL(10,5) NOT NULL,
  `description` varchar(50) NOT NULL, 
  PRIMARY KEY (catID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--
INSERT INTO `categories` (`percent`, `description`) VALUES
(0.7, 'essentials'), 
(0.15, 'personal'), 
(0.15, 'savings');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
	`incomeID` int(11) NOT NULL AUTO_INCREMENT,
  `incomeAmount` int(11) NOT NULL,
  `incomeDate` date NOT NULL, 
  `userID` int(11) NOT NULL, 
  PRIMARY KEY (incomeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`incomeAmount`, `incomeDate`, `userID`) VALUES
(2000, '2022-11-11', 12),
(3456, '2022-11-25', 12);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchaseID` int(11) NOT NULL AUTO_INCREMENT,
  `purchaseDate` date DEFAULT NULL,
  `purchaseAmount` float(10,2) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL, 
  `userID` int(11) NOT NULL, 
  PRIMARY KEY (purchaseID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchaseDate`, `purchaseAmount`, `category`, `description`, `userID`) VALUES
('2022-10-31', 37.5, 'Food', 'Applebees', 12),
('2022-11-01', 2000, 'Rent', 'rent payment', 12),
('2022-11-09', 186.78, 'Auto', 'Car Payment', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL, 
  PRIMARY KEY (userID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `email`, `phone`) VALUES
('test', 'password', 'Cory', 'Kjar', 'cory@email.com', '6364879498');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;