-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 07:05 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superglobals`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments booking`
--

CREATE TABLE `appointments booking` (
  `AppointmentID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `TreatmentID` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  `StartTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments booking`
--

INSERT INTO `appointments booking` (`AppointmentID`, `CustomerID`, `TreatmentID`, `Date`, `StartTime`) VALUES
(2, 1, 1, '2020-03-12', '14:00:00'),
(3, 2, 2, '2020-03-13', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DateofBirth` date DEFAULT NULL,
  `PhoneNo` int(11) DEFAULT NULL,
  `Email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Username`, `Password`, `FirstName`, `LastName`, `DateofBirth`, `PhoneNo`, `Email`) VALUES
(1, 'danquaha', 'abc123efg', 'Fia', 'Danni', '2020-03-17', 92832013, 'fiadanni@gmail.com'),
(2, 'jackson123', 'password', 'Jack', 'Doe', '1990-07-22', 9298311, '');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `TreatmentID` int(11) NOT NULL,
  `TreatmentName` varchar(100) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`TreatmentID`, `TreatmentName`, `Duration`, `Price`, `Description`) VALUES
(1, 'Facial', 45, '20', 'Massaging to the face'),
(2, 'Laser', 60, '50', 'Hair Removal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments booking`
--
ALTER TABLE `appointments booking`
  ADD PRIMARY KEY (`AppointmentID`),
  ADD KEY `FK` (`CustomerID`,`TreatmentID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`TreatmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments booking`
--
ALTER TABLE `appointments booking`
  MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `TreatmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
