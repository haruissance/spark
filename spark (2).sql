-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 10:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `area1`
--

CREATE TABLE `area1` (
  `ID` int(10) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Login` time NOT NULL,
  `Logout` time NOT NULL,
  `Timing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area2`
--

CREATE TABLE `area2` (
  `ID` int(10) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area3`
--

CREATE TABLE `area3` (
  `ID` int(10) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area4`
--

CREATE TABLE `area4` (
  `ID` int(10) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area5`
--

CREATE TABLE `area5` (
  `ID` int(10) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `cardUID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `welderSpec` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `postal` varchar(20) NOT NULL,
  `weldingType` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `materialType` varchar(30) NOT NULL,
  `certificationNumber` varchar(30) NOT NULL,
  `expirationDate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `cardUID`, `Name`, `welderSpec`, `email`, `phone`, `address`, `postal`, `weldingType`, `qualification`, `materialType`, `certificationNumber`, `expirationDate`) VALUES
(14, '2479818695', 'RICO ROENALDO', 'Professional MIG Welder', 'rickoreonaldo94@gmail.com', '089630271858', 'Anggrek Permai A 21', '29432', 'Gas Metal Arc Welding', 'MIG Welder', 'Alumunium', '980 876', 'May 2025'),
(16, '110414128', 'Riska Derliana Purba', 'Junior TIG Welder', 'daklsdasfdfaskld@gmail.com', '081234920312', 'Kampung Durian', '29442', 'Gas Metal Arc Welding', 'TIG Welder', 'Alumunium', '281 219', 'December 2024'),
(17, '5823219492', 'Ananta Boyke Kusuma', 'Junior MIG Welder', 'asdfjkaskdjflsdjf@gmail.com', '08120381123', 'Kampung Durian Runtu', '29442', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recaparea1`
--

CREATE TABLE `recaparea1` (
  `ID` int(11) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Login` time NOT NULL,
  `Logout` time NOT NULL,
  `Timing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recaparea1`
--

INSERT INTO `recaparea1` (`ID`, `MachineID`, `Area`, `UID`, `Name`, `Status`, `Mode`, `Date`, `Login`, `Logout`, `Timing`) VALUES
(292, 'MACHINE-2', '1', '110414128', 'Riska Derliana Purba', 'Active', 'Login', '2023-07-24', '00:10:59', '00:00:00', '0:0:0'),
(293, 'MACHINE-2', '1', '110414128', 'Riska Derliana Purba', 'Inactive', '', '2023-07-24', '00:00:00', '00:00:00', '0:0:0');

-- --------------------------------------------------------

--
-- Table structure for table `recaparea2`
--

CREATE TABLE `recaparea2` (
  `ID` int(11) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recaparea3`
--

CREATE TABLE `recaparea3` (
  `ID` int(11) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recaparea4`
--

CREATE TABLE `recaparea4` (
  `ID` int(11) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recaparea5`
--

CREATE TABLE `recaparea5` (
  `ID` int(11) NOT NULL,
  `MachineID` varchar(20) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Login` time DEFAULT NULL,
  `Logout` time DEFAULT NULL,
  `Timing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tmprfid`
--

CREATE TABLE `tmprfid` (
  `cardUID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area1`
--
ALTER TABLE `area1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area2`
--
ALTER TABLE `area2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area3`
--
ALTER TABLE `area3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area4`
--
ALTER TABLE `area4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area5`
--
ALTER TABLE `area5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recaparea1`
--
ALTER TABLE `recaparea1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recaparea2`
--
ALTER TABLE `recaparea2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recaparea3`
--
ALTER TABLE `recaparea3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recaparea4`
--
ALTER TABLE `recaparea4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recaparea5`
--
ALTER TABLE `recaparea5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tmprfid`
--
ALTER TABLE `tmprfid`
  ADD PRIMARY KEY (`cardUID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recaparea1`
--
ALTER TABLE `recaparea1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
