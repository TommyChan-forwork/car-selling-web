-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 06:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocarsales`
--

-- --------------------------------------------------------

--
-- Table structure for table `carinventory`
--

CREATE TABLE `carinventory` (
  `ID` char(12) NOT NULL,
  `Make` varchar(30) DEFAULT NULL,
  `Model` varchar(30) DEFAULT NULL,
  `YearManufactured` date DEFAULT NULL,
  `BrandNew` char(1) DEFAULT NULL COMMENT '“Y”, “N”',
  `Odometer` int(11) DEFAULT NULL,
  `Color` text DEFAULT NULL,
  `Transmission` char(1) DEFAULT NULL COMMENT 'A – auto; M – manual',
  `FuelType` varchar(10) DEFAULT NULL COMMENT 'P – petrol, G- gas, M - mixed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carinventory`
--

INSERT INTO `carinventory` (`Modelstring`) VALUES
('AudiA8L60TFSIquattro'),
('AudiA5Cabriolet45TFSIquat'),
('AudiTTRoadster1.8T'),
('Mercedes-BenzE500Cabriolet'),
('Mercedes-BenzE500Cabriolet'),
('Mercedes-BenzAMGC434MATIC'),
('Mercedes-BenzAMGC434MATIC'),
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carinventory`
--
ALTER TABLE `carinventory`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
