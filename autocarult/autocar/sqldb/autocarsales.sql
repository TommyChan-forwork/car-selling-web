-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-10 07:48:03
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `autocarsales`
--

-- --------------------------------------------------------

--
-- 資料表結構 `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(20) NOT NULL,
  `userID` varchar(20) DEFAULT NULL,
  `make` varchar(20) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `userID`, `make`, `appdate`, `apptime`) VALUES
(15, 'optommy', 'Audi TT Roadster 1.8', '2020-07-28', '14:00:00'),
(18, 'optommy', 'Mercedes-Benz B200', '2020-07-16', '23:45:00'),
(19, 'optommy', 'Mercedes-Benz B200', '2020-07-16', '23:45:00');

-- --------------------------------------------------------

--
-- 資料表結構 `carinventory`
--

CREATE TABLE `carinventory` (
  `ID` char(12) NOT NULL,
  `Make` varchar(30) DEFAULT NULL,
  `Model` varchar(30) DEFAULT NULL,
  `YearManufactured` date DEFAULT NULL,
  `BrandNew` char(3) DEFAULT NULL COMMENT '“Y”, “N”',
  `Odometer` int(11) DEFAULT NULL,
  `Color` text DEFAULT NULL,
  `Transmission` varchar(20) DEFAULT NULL COMMENT 'A – auto; M – manual',
  `FuelType` varchar(30) DEFAULT NULL COMMENT 'P – petrol, G- gas, M - mixed',
  `price` int(11) DEFAULT NULL,
  `isSold` tinyint(1) DEFAULT NULL,
  `soldquanity` int(50) DEFAULT NULL,
  `ModelString` varchar(100) DEFAULT NULL,
  `imgupload` blob DEFAULT NULL,
  `carreview` int(5) DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `SellOrderNo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `carinventory`
--

INSERT INTO `carinventory` (`ID`, `Make`, `Model`, `YearManufactured`, `BrandNew`, `Odometer`, `Color`, `Transmission`, `FuelType`, `price`, `isSold`, `soldquanity`, `ModelString`, `imgupload`, `carreview`, `userId`, `SellOrderNo`) VALUES
('10000', '	\r\naudi', 'Audi A8L 60 TFSI quattro', '2019-12-25', 'yes', 0, 'grey', 'Automatic', 'Gas', 1732800, 1, 11, '	\r\n\r\nAudiA8L60TFSIquattro', 0x75706c6f61642f417564695f41384c5f36305f544653495f7175617474726f2e6a7067, NULL, NULL, 0),
('10001', 'audi', 'Audi A5 Cabriolet 45 TFSI quat', '2016-10-19', 'Yes', 0, 'black', 'Manuel', 'Electricity', 894900, 1, 9, 'AudiA5Cabriolet45TFSIquat', 0x75706c6f61642f417564695f41355f43616272696f6c65745f34355f544653495f7175617474726f2e6a7067, 3, NULL, 0),
('10002', 'audi', 'Audi TT Roadster 1.8T', '2015-06-12', 'Yes', 0, 'red', 'Automatic', 'Mixed', 864670, 1, 1, 'AudiTTRoadster1.8T', 0x75706c6f61642f417564695f54545f526f6164737465725f312e38542e6a7067, 4, NULL, 0),
('10004', 'benz', 'Mercedes-Benz E500 Cabriolet', '2010-08-11', 'No', 298, 'white', 'Automatic', 'Gas', 1116500, 1, 4, 'Mercedes-BenzE500Cabriolet', 0x75706c6f61642f4d657263656465732d42656e7a5f453530305f43616272696f6c65742e6a7067, 5, NULL, 0),
('10005', 'benz', 'Mercedes-Benz AMG C43 4MATIC', '2019-05-08', 'Yes', 0, 'red', 'Manuel', 'Gas', 789900, 1, 6, 'Mercedes-BenzAMGC434MATIC', 0x75706c6f61642f4d657263656465732d42656e7a5f414d475f4334335f344d415449432e6a7067, NULL, NULL, 0),
('10006', 'benz', 'Mercedes-Benz B200', '2014-11-08', 'No', 398, 'dark blue', 'Automatic', 'Electricity', 490001, 1, 8, 'Mercedes-BenzB200', 0x75706c6f61642f4d657263656465732d42656e7a5f423230302e6a7067, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `UserId` varchar(10) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Phone` varchar(12) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`UserId`, `Password`, `Name`, `Phone`, `Email`, `Address`) VALUES
('11111', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL),
('1234', '1bc29b36f6', NULL, NULL, NULL, NULL),
('12345', '827ccb0eea', NULL, NULL, NULL, NULL),
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL),
('optommy', 'alpmqz10', NULL, NULL, NULL, NULL),
('pignose', '827ccb0eea', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `OrderId` int(20) NOT NULL,
  `UserId` varchar(10) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `imgupload` blob NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `purchaseorder`
--

INSERT INTO `purchaseorder` (`OrderId`, `UserId`, `Model`, `price`, `imgupload`, `date`) VALUES
(1, 'optommy', 'Audi A5 Cabriolet 45 TFSI quat', 894900, 0x75706c6f61642f417564695f41355f43616272696f6c65745f34355f544653495f7175617474726f2e6a7067, '2020-07-08'),
(2, 'optommy', 'Audi A5 Cabriolet 45 TFSI quat', 894900, 0x75706c6f61642f417564695f41355f43616272696f6c65745f34355f544653495f7175617474726f2e6a7067, '2020-07-08'),
(3, 'optommy', 'Audi A5 Cabriolet 45 TFSI quat', 894900, 0x75706c6f61642f417564695f41355f43616272696f6c65745f34355f544653495f7175617474726f2e6a7067, '2020-07-08'),
(4, 'optommy', 'Audi TT Roadster 1.8T', 864670, 0x75706c6f61642f417564695f54545f526f6164737465725f312e38542e6a7067, '2020-07-08');

-- --------------------------------------------------------

--
-- 資料表結構 `sellorder`
--

CREATE TABLE `sellorder` (
  `OrderNo` int(10) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `OrderDate` date DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `DeliveryDate` date DEFAULT NULL,
  `Remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`);

--
-- 資料表索引 `carinventory`
--
ALTER TABLE `carinventory`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserId`);

--
-- 資料表索引 `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`OrderId`);

--
-- 資料表索引 `sellorder`
--
ALTER TABLE `sellorder`
  ADD PRIMARY KEY (`OrderNo`,`userID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `OrderId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `sellorder`
--
ALTER TABLE `sellorder`
  MODIFY `OrderNo` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
