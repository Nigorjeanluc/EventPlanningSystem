-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 06:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  `picone` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`, `Date`, `picone`) VALUES
(1, 'tuyambazethaci@gmail.com', 'thacienne', '2017-02-26 01:39:18', 'assets/img/adminpic/tacy.jpg'),
(2, 'salva@gmail.com', 'mystica', '2017-04-21 16:02:07', 'assets/img/adminpic/mypic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Picture01` text NOT NULL,
  `Picture02` text NOT NULL,
  `Picture03` text NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `Owner`, `Company`, `Email`, `Phone`, `Picture01`, `Picture02`, `Picture03`, `Categorie`, `Password`, `Admin_ID`, `Date`) VALUES
(12, 'Sebu', 'Barthos hotel', 'barthos@gmail.com', '0784456890', 'assets/img/products/garden-wed.jpg', 'assets/img/products/', 'assets/img/products/', 'hotel', '12345', 1, '2017-05-11 14:03:13'),
(11, 'Ineza', 'Ineza Fashion Group', 'ineza@gmail.com', '0728445556', 'assets/img/products/18252063_1813741362277472_6602322752177176576_n.jpg', 'assets/img/products/', 'assets/img/products/', 'Fashion', '123', 2, '2017-05-11 10:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--



-- --------------------------------------------------------

--
-- Table structure for table `messagetoadmin`
--

CREATE TABLE `messagetoadmin` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagetoadmin`


-- --------------------------------------------------------

--
-- Table structure for table `messagetouser`
--

CREATE TABLE `messagetouser` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Toooo` varchar(50) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagetouser`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `fromuser` text NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `serviceID` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Sex` varchar(11) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Currency` varchar(50) NOT NULL,
  `PeriodOfRent` varchar(50) NOT NULL,
  `Event` varchar(100) NOT NULL,
  `Categorie` varchar(100) NOT NULL,
  `picone` text NOT NULL,
  `pictwo` text NOT NULL,
  `picthree` text NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Types` varchar(100) NOT NULL,
  `Quality` varchar(1000) NOT NULL,
  `MoreAbout` varchar(10000) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `AdminId` int(11) NOT NULL,
  `Available` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Phone`, `Password`, `Date`) VALUES
(4, 'Holy', 'holy@gmail.com', '0784456896', '123', '2017-05-23 18:03:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `messagetoadmin`
--
ALTER TABLE `messagetoadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messagetouser`
--
ALTER TABLE `messagetouser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `serviceID` (`serviceID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `messagetoadmin`
--
ALTER TABLE `messagetoadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messagetouser`
--
ALTER TABLE `messagetouser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
