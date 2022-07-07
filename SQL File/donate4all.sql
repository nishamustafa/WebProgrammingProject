-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 10:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate4all`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationID` int(11) NOT NULL,
  `donor_fk` int(11) NOT NULL,
  `request_fk` int(11) NOT NULL,
  `Amount` double DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `DonationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationID`, `donor_fk`, `request_fk`, `Amount`, `Status`, `DonationDate`) VALUES
(1, 1, 10, 50, 1, '2022-07-07 20:48:09'),
(3, 1, 10, 500, 1, '2022-07-07 20:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donorID` int(11) NOT NULL,
  `Username` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `PhoneNumber` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorID`, `Username`, `Password`, `Name`, `Gender`, `Age`, `Email`, `PhoneNumber`) VALUES
(1, 'shahril01', '202cb962ac59075b964b07152d234b70', 'Shahril Saiful', 'male', 22, 'shahril5822@gmail.com', '0192332195'),
(2, 'imanehsan', '900150983cd24fb0d6963f7d28e17f72', 'Iman Ehsan', 'male', 22, 'imanehsan@gmail.com', '0129324442');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `recipientID` int(11) NOT NULL,
  `Username` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `PhoneNumber` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`recipientID`, `Username`, `Password`, `Name`, `Gender`, `Age`, `Email`, `PhoneNumber`) VALUES
(1, 'marnisha', '900150983cd24fb0d6963f7d28e17f72', 'Marnisha Binti Mustafa', 'male', 21, 'marnisha@gmail.com', '0128324242'),
(2, 'Mat', '202cb962ac59075b964b07152d234b70', 'Mat Kilau', 'male', 22, 'matkilau@power.com', '0192382242'),
(3, 'JabbaThink', '202cb962ac59075b964b07152d234b70', 'Jabba Nice To Think', 'female', 20, 'jabba@gmail.com', '0134732442');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestID` int(11) NOT NULL,
  `recipient_fk` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `goal` double NOT NULL,
  `requestIMG` varchar(120) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `RequestDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestID`, `recipient_fk`, `title`, `Description`, `goal`, `requestIMG`, `Status`, `RequestDate`) VALUES
(8, 1, 'My house has been hit by the flood', 'Recently there has been a flood that hit my hometown, currently my family and I are staying in 5 star resort, so to ease our pain I would like to request donation to help my family build our house again. Thank you.', 2000, 'house.jpg', 1, '2022-07-07 18:33:58'),
(9, 1, 'My son has been diagnosed with covid-19', 'I would like to get some help in covering his medical payment', 5000, 'shutterstock_624801452.png', 1, '2022-07-07 18:40:38'),
(10, 2, 'I have no money to buy foods for my family', 'During the pandemic, I lost my job and currently I cannot support my family.', 1000, '43c6e71f-070f-470b-8850-df1ba44b41e1.jpg', 1, '2022-07-07 18:44:37'),
(11, 3, 'Tolong banyak yang hilang', 'Saya gak bisa berbicara bahasa inggeris, tetapi saya perlukan bantuan dengan alatan rumah tidak mencukupi di rumah saya. Mohon sumbangkan', 1000, '1zpld7rxcb831.jpg', 1, '2022-07-07 18:46:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationID`),
  ADD KEY `donation_fk` (`request_fk`),
  ADD KEY `donor_fk` (`donor_fk`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorID`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`recipientID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `recipient_fk` (`recipient_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `recipientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`request_fk`) REFERENCES `request` (`requestID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`donor_fk`) REFERENCES `donor` (`donorID`) ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`recipient_fk`) REFERENCES `recipient` (`recipientID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
