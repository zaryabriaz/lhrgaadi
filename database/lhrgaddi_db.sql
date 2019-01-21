-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 02:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhrgaddi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `Aid` int(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Make` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` binary(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Images` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `UserName`, `Password`) VALUES
(1, 'Hammad', 'admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_by_email`
--

CREATE TABLE `contactus_by_email` (
  `Cid` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Rid` int(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `ConfirmPassword` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `MobileNumber` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(255) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Username` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `ConfirmPassword` varchar(1000) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Mobile_Number` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `Name`, `Username`, `Email`, `Password`, `ConfirmPassword`, `Address`, `Mobile_Number`) VALUES
(15, 'ADMIN', 'admin', 'admin123@gmail.com', 'Admin123', 'Admin123', '97-c Margazar Colony', '03205622885'),
(16, 'Hammad Mubeen', 'Hammad123', 'Hammad123@gmail.com', 'Game123', 'Game123', '97-c Marghazar Colony', '03205622887'),
(17, 'Fakhar Shakeel', 'Fakhar123', 'Fakhar@gmail.com', 'Fakhar123', 'Fakhar123', '12-e AwanTown Lahore', '03205622889'),
(18, 'Arsal Sheikh', 'Arsal123', 'Arsal123@gmail.com', 'Arsal123', 'Arsal123', '12-N Sabzadar Lahore', '03248498622'),
(19, 'Zain Yazdan', 'ZainYazdan123', 'ZainYazdan123@gmail.com', 'Yazdan123', 'Yazdan123', '23-e AbidMarket Lahore', '03295555555'),
(20, 'Zain Ali', 'ZainALi123', 'ZainAli123@gmail.com', 'Zain123', 'Zain123', '43-e Muslim Town', '03444444444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus_by_email`
--
ALTER TABLE `contactus_by_email`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `Aid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus_by_email`
--
ALTER TABLE `contactus_by_email`
  MODIFY `Cid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Rid` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
