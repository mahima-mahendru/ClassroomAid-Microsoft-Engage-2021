-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 07:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroomaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` varchar(35) NOT NULL,
  `Apass` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Apass`) VALUES

('admin', 'admin'),('mahima','mahima');

-- --------------------------------------------------------

--
-- Table structure for table `facutlytable`
--

CREATE TABLE `facutlytable` (
  `FID` int(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `FaName` varchar(30) NOT NULL,
  `Addrs` text NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `JDate` date NOT NULL,
  `City` varchar(10) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `PhNo` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facutlytable`
--

INSERT INTO `facutlytable` (`FID`, `FName`, `FaName`, `Addrs`, `Gender`, `JDate`, `City`, `Pass`, `PhNo`) VALUES
(113, 'faculty1', 'FN1', 'South Bengaluru', 'Female', '2000-10-10', 'Bengaluru', 'faculty1', 9871144053),
(114, 'faculty2', 'FN2', 'North Bengaluru', 'Male', '2010-11-10', '	New Delhi', 'faculty2', 9991144053);


-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `Eno` bigint(20) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `FaName` varchar(30) NOT NULL,
  `Addrs` text NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PhNo` bigint(10) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Eid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`Eno`, `FName`, `LName`, `FaName`, `Addrs`, `Gender`, `Course`, `DOB`, `PhNo`, `Pass`, `Eid`) VALUES
(146891650, 'student1', 'student1', 'FatherName1', '28-CR Park', 'Female', 'CSE', '1999-10-07', 9667230789, 'student1', 'student1@gmail.com'),
(146891655, 'student2', 'student2', 'FatherName2', 'B-11 LajPat Nagar', 'Male', 'CSE', '1999-03-05', 7023658960, 'student2', 'student2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `V_id` int(10) NOT NULL,
  `V_Title` varchar(50) NOT NULL,
  `V_Time` varchar(40) NOT NULL,
  `V_Url` longtext NOT NULL,
  `V_Remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table is used to store videos info.';

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`V_id`, `V_Title`, `V_Time`, `V_Url`, `V_Remarks`) VALUES
(9, 'English', '10:05 AM', 'https://meet.google.com/aqm-itqs-awb', 'Learn about parts of speech.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `facutlytable`
--
ALTER TABLE `facutlytable`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facutlytable`
--
ALTER TABLE `facutlytable`
  MODIFY `FID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `Eno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146891677;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `V_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
