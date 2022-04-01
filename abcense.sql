-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2022 at 11:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcense`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `UserID` smallint(6) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`UserID`, `Firstname`, `Lastname`, `Username`, `Password`) VALUES
(10, 'Mohamed', 'ElMohands', 'elmohands', '1bd0913283f4bcb405f7c4b3f89b047acf3b170e');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_account`
--

CREATE TABLE `doctor_account` (
  `UserID` smallint(6) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `GroupID` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE `student_account` (
  `UserID` smallint(6) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `YearID` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`, `YearID`) VALUES
(1, 'name', 'test', 'tesla', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 1),
(2, 'mohamed', 'test', 'elmohands', 'f0dd2c443d072f153bcb40524007846a36ed7ba4', 1),
(8, 'first', 'test', 'first', '3d31b17df4501111c457129578154f84cfda1332', 1),
(9, 'user', 'two', 'user2', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_one`
--

CREATE TABLE `student_one` (
  `Student_ID` smallint(6) NOT NULL,
  `Week1` varchar(255) DEFAULT NULL,
  `Week2` varchar(255) DEFAULT NULL,
  `Week3` varchar(255) DEFAULT NULL,
  `Week4` varchar(255) DEFAULT NULL,
  `Week5` varchar(255) DEFAULT NULL,
  `Week6` varchar(255) DEFAULT NULL,
  `Week7` varchar(255) DEFAULT NULL,
  `Week8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_one`
--

INSERT INTO `student_one` (`Student_ID`, `Week1`, `Week2`, `Week3`, `Week4`, `Week5`, `Week6`, `Week7`, `Week8`) VALUES
(2, 'attend', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'attend', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_three`
--

CREATE TABLE `student_three` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `YearID` tinyint(1) NOT NULL DEFAULT 3,
  `Week1` varchar(255) DEFAULT NULL,
  `Week2` varchar(255) DEFAULT NULL,
  `Week3` varchar(255) DEFAULT NULL,
  `Week4` varchar(255) DEFAULT NULL,
  `Week5` varchar(255) DEFAULT NULL,
  `Week6` varchar(255) DEFAULT NULL,
  `Week7` varchar(255) DEFAULT NULL,
  `Week8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_three`
--

INSERT INTO `student_three` (`FirstName`, `LastName`, `Username`, `Password`, `YearID`, `Week1`, `Week2`, `Week3`, `Week4`, `Week5`, `Week6`, `Week7`, `Week8`) VALUES
('third', 'third', 'third', '34fb3300b9a77bebdc988ec3edd0d4a6a42a26f9', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_two`
--

CREATE TABLE `student_two` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `YearID` tinyint(1) NOT NULL DEFAULT 2,
  `Week1` varchar(255) DEFAULT NULL,
  `Week2` varchar(255) DEFAULT NULL,
  `Week3` varchar(255) DEFAULT NULL,
  `Week4` varchar(255) DEFAULT NULL,
  `Week5` varchar(255) DEFAULT NULL,
  `Week6` varchar(255) DEFAULT NULL,
  `Week7` varchar(255) DEFAULT NULL,
  `Week8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_two`
--

INSERT INTO `student_two` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`, `YearID`, `Week1`, `Week2`, `Week3`, `Week4`, `Week5`, `Week6`, `Week7`, `Week8`) VALUES
(1, 'test', 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'mohamed', 'mohamed', 'mohamed', '292959f6c7ab4f8b0761469ac1f11fc73f43b306', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_ID` int(11) NOT NULL,
  `SubjectName` varchar(255) NOT NULL,
  `Doctor_Name` varchar(255) NOT NULL,
  `Subject_Photo` text DEFAULT NULL,
  `SubjectYear` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_ID`, `SubjectName`, `Doctor_Name`, `Subject_Photo`, `SubjectYear`) VALUES
(1, 'Phisics II', 'Abdelhamid Sakr', 'uploads/5744606351png', 1),
(2, 'Electronics', 'Sahar', 'uploads/2089243599jpg', 1),
(3, 'Data Base', 'Mohamed Mostafa', 'uploads/4177119923png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `YearID` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `doctor_account`
--
ALTER TABLE `doctor_account`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `student_one`
--
ALTER TABLE `student_one`
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `student_two`
--
ALTER TABLE `student_two`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `UserID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor_account`
--
ALTER TABLE `doctor_account`
  MODIFY `UserID` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_account`
--
ALTER TABLE `student_account`
  MODIFY `UserID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_two`
--
ALTER TABLE `student_two`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_one`
--
ALTER TABLE `student_one`
  ADD CONSTRAINT `student_one_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student_account` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
