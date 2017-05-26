-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 02:42 PM
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
(12, 'Sebu', 'Barthos hotel', 'barthos@gmail.com', '0784456890', 'assets/img/products/serena.jpg', 'assets/img/products/', 'assets/img/products/', 'hotel', '12345', 1, '2017-05-11 14:03:13'),
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

INSERT INTO `messages` (`ID`, `Name`, `Email`, `Phone`, `Content`, `Date`) VALUES
(4, 'Tacien', 'text@gmail.com', '250789660039', 'dhjdfhdjhfjd djbv vnbvnvbvcnbvncvb', '2017-04-21 01:01:08'),
(5, 'wwwwwwwwwwwww', 'sssssssssss@ggggggg', '11111111111', 'gggggggggggwwwwwwwwwwwwwwwwww', '2017-04-21 01:01:59'),
(6, 'jhfjdhv', 'hchgh@gvdv', '21575', 'jgfgfjvb  gjgbkjc3bjv', '2017-04-21 01:44:29');

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
--

INSERT INTO `messagetoadmin` (`ID`, `User`, `Content`, `Date`) VALUES
(1, 'JayJay', 'snnbdnbdndsbdn', '2017-04-25 11:58:59'),
(2, 'JayJay', 'mfnmnfmfd', '2017-04-25 12:59:11');

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

INSERT INTO `messagetouser` (`ID`, `User`, `Toooo`, `Content`, `Date`) VALUES
(1, 'tuyambazethaci@gmail.com', 'JayJay', 'hjhjhsjhajs', '2017-04-25 11:26:39'),
(2, 'tuyambazethaci@gmail.com', 'JayJay', 'ldkd', '2017-04-25 11:27:36'),
(3, 'tuyambazethaci@gmail.com', 'JayJay', 'jhhdjdfhf', '2017-04-25 11:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `fromuser` text NOT NULL,
  `userID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `fromuser`, `userID`, `serviceID`, `Date`) VALUES
(1, 'bxvxvczvcvbcxv', 3, 77, '2017-04-23 06:20:07'),
(2, 'bxvxvczvcvbcxv', 3, 66, '2017-04-23 06:23:31'),
(3, 'bcbcxncbnbcnbcxcbxzbz', 3, 77, '2017-04-23 06:25:46'),
(4, 'gvfdtdghdgdg', 3, 77, '2017-04-23 06:38:06');

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

INSERT INTO `service` (`ID`, `Name`, `Sex`, `CompanyName`, `Phone`, `Price`, `Currency`, `PeriodOfRent`, `Event`, `Categorie`, `picone`, `pictwo`, `picthree`, `Quantity`, `Types`, `Quality`, `MoreAbout`, `Province`, `District`, `Sector`, `Date`, `AdminId`, `Available`) VALUES
(67, 'Dress', 'Female', 'Indege Fashion', '+250789558834', '10000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Dress', 'assets/img/products/Oksana-Mukha-Cocktail-Dresses-2013-Perfect-for-a-Wedding-Reception-or-Civil-.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Civil', 'High quality', 'Beautiful wedding Dress', 'Southern Province', 'Muhanga', 'Kigoma', '2017-04-03 18:24:09', 1, 1),
(66, 'Dress', 'Female', 'Indege Fashion', '+250789558834', '30000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Dress', 'assets/img/products/mermaid-court-train-lace-high-roundslash-neck-wedding-dress-2.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Civil', 'High quality', 'Beautiful wedding Dress', 'Southern Province', 'Muhanga', 'Kigoma', '2017-04-03 18:23:07', 2, 1),
(65, 'Wedding Dress', 'Female', 'Igitenge Fashion', '+250789558834', '20000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Dress', 'assets/img/products/short-wedding-dresses-for-civil-wedding-1.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Civil', 'High quality', 'Beautiful wedding Dress', 'Southern Province', 'Kamonyi', 'Kigoma', '2017-04-03 18:21:03', 1, 1),
(64, 'Wedding Dress', 'Female', 'Igitenge Fashion', '+250789558834', '50000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Dress', 'assets/img/products/f84c1ae08273c952e84bfda544093af7.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Wedding', 'High quality', 'Beautiful wedding Dress', 'Western Province', 'Rubavu', 'Kigoma', '2017-04-03 18:18:52', 2, 1),
(63, 'Wedding Dress', 'Female', 'Igitenge Fashion', '+250789558834', '50000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Dress', 'assets/img/products/75d56ed99bc7412937c248193847158c.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Wedding', 'High quality', 'Beautiful wedding Dress', 'Northern Province', 'Gicumbi', 'Kigoma', '2017-04-03 18:16:47', 1, 1),
(62, 'Wedding Tie', 'Male', 'Igitenge Fashion', '+250789558834', '5000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Tie', 'assets/img/products/1170_1-1.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'High quality', 'Elegant wedding Tie', 'Southern Province', 'Huye', 'Ngoma', '2017-04-03 18:14:00', 2, 1),
(60, 'Italian Suit', 'Male', 'Ineza Dry Cleaner', '+250789558834', '15000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Suit', 'assets/img/products/Mens-wedding-suits-2017-wedding-attire-groom-suits-wedding-tuxedos-6.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'High quality', 'Elegant weddine suit', 'Eastern Province', 'Nyagatare', 'Rwemasha', '2017-04-03 18:09:22', 1, 1),
(61, 'French Suit', 'Male', 'Kabisa Fashion', '+250789558834', '15000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Suit', 'assets/img/products/2017-Ivory-Classic-Mens-Suit-Peaked-Lapel-Wedding-Suits-For-Men-Wedding-Tuxedos-For-Men-One.jpg_640x640.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'High quality', 'Elegant weddine suit', 'Southern Province', 'Nyanza', 'Nyabisindu', '2017-04-03 18:11:38', 2, 1),
(56, 'Toyota M23', 'none', 'Kibaruma', '+250789558834', '10000', 'Rfw', 'Per Day', 'Car', '4x4', 'assets/img/products/wedding-Cars.png', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Imodoka nziza', 'Kigali', 'Kicukiro', 'Gikondo', '2017-04-03 17:50:40', 1, 1),
(57, 'Range Rover', 'none', 'Mr. Innoncent', '+250789558834', '30000', 'Rfw', 'Per Day', 'Car', 'Small car', 'assets/img/products/we5.JPG', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Imodoka nziza', 'Western Province', 'Nyamasheke', 'Ruharambuga', '2017-04-03 17:53:48', 2, 1),
(70, 'Serena Hotel', 'none', 'Serena Hotel', '250789656589', '300000', 'Rfw', 'Per Day', 'Venue', 'Hotel', 'assets/img/products/serena.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Special place in Kigali City', 'Kigali', 'Nyarugenge', 'Nyarugenge', '2017-04-03 18:36:19', 1, 1),
(69, 'Hotel des Mille Collines', 'none', 'Hotel des Milles Collines', '250789656589', '100000', 'Rfw', 'Per Day', 'Venue', 'Hotel', 'assets/img/products/hotel-des-mille-collines.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Special place in Kigali City', 'Kigali', 'Nyarugenge', 'Nyarugenge', '2017-04-03 18:34:05', 2, 1),
(71, 'Mariott Hotel', 'none', 'Mariott Hotel', '250789656589', '200000', 'Rfw', 'Per Day', 'Venue', 'Hotel', 'assets/img/products/5 star hotel.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Special place in Kigali City', 'Kigali', 'Nyarugenge', 'Nyarugenge', '2017-04-03 18:37:08', 1, 1),
(75, 'Chris garden', 'none', 'Chez Christopher', '250789656589', '60000', 'Rfw', 'Per Day', 'Venue', 'Garden', 'assets/img/products/garden-wed.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Low quality', 'Special place in Kigali City', 'Kigali', 'Gasabo', 'Kimironko', '2017-04-03 18:50:04', 2, 1),
(74, 'Meplos''s place', 'none', 'Chez Mugabo', '250789656589', '50000', 'Rfw', 'Per Day', 'Venue', 'Garden', 'assets/img/products/f55d465a073b49d14a8af00b27fe4057.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Low quality', 'Special place in Kigali City', 'Kigali', 'Gasabo', 'Kimironko', '2017-04-03 18:48:02', 1, 1),
(84, 'Conference room Chez Semuhungu', 'none', 'Chez Semuhungu', '+250789544874', '10000', 'Rfw', 'Per Hour', 'Venue', '---', 'assets/img/products/kings guest house.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Low quality', 'Fully equipped conference room', 'Southern Province', 'Huye', 'Ngoma', '2017-04-04 10:40:17', 2, 1),
(77, 'Civil wedding dress', 'Female', 'Indende Fashion', '+250789558834', '50000', 'Rfw', 'Per Month', 'Wedding&clothes', 'Dress', 'assets/img/products/Vestido-De-Noiva-China-Bridal-Gowns-Vintage-Lace-Detachable-Skirt-font-b-Wedding-b-font-font.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Civil', 'High quality', 'Nice dress', 'Kigali', 'Gasabo', 'Kinyinya', '2017-04-04 09:13:15', 1, 1),
(78, 'Different ties of all color', 'Male', 'Indende Fashion', '+250789558834', '14000', 'Rfw', 'Per Month', 'Wedding&clothes', 'Tie', 'assets/img/products/productimg1284821975810.jpg', 'assets/img/products/', 'assets/img/products/', 15, '', 'High quality', 'Nice Ties of different colors', 'Kigali', 'Gasabo', 'Kinyinya', '2017-04-04 09:17:20', 2, 1),
(79, 'Complete suit and tie', 'Male', 'Indende Fashion', '+250789558834', '20000', 'Rfw', 'Per Month', 'Wedding&clothes', 'Tie', 'assets/img/products/C8-201-Pink-Wedding-Ties_99f0f6dd-3804-4b60-928c-6df8ec7143c4_grande.jpg', 'assets/img/products/', 'assets/img/products/', 15, '', 'High quality', 'Nice suit with a pink tie', 'Kigali', 'Gasabo', 'Kinyinya', '2017-04-04 09:20:30', 1, 1),
(80, 'Blue ties', 'Male', 'Tacienne Fashion Shop', '+250789544878', '20000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Tie', 'assets/img/products/gI_124150_wedding-ties.png', 'assets/img/products/', 'assets/img/products/', 4, '', 'Middle quality', 'Blue Ties', 'Southern Province', 'Muhanga', 'Gikomero', '2017-04-04 09:35:07', 2, 1),
(81, 'Cream  Sugar  Chocolate  Litmus  ', 'none', 'Chez Maman G', '+250789544878', '20000', 'Rfw', '', 'Cake', '----', 'assets/img/products/wedding-cake-Camilla-photography.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Nice wedding cake', 'Kigali', 'Gasabo', 'Kabeza', '2017-04-04 09:53:40', 1, 1),
(82, 'Cream  Chocolate  Sugar  Blueband  Flour  ', 'none', 'Chez Maman G', '+250789544878', '30000', 'Rfw', '', 'Cake', '----', 'assets/img/products/Make-Your-Own-Wedding-Cake-Reception.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Nice birthday cake', 'Kigali', 'Gasabo', 'Kabeza', '2017-04-04 09:57:40', 2, 1),
(83, 'Sugar  Cream  Flour  Chocolate  ', 'none', 'Chez Maman G', '+250789544878', '30000', 'Rfw', ' ', 'Cake', '----', 'assets/img/products/9aea601a0222f8c7bf3ca92c0d5bf2d4.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Delicious wedding cake', 'Kigali', 'Gasabo', 'Kabeza', '2017-04-04 10:02:34', 1, 1),
(85, 'Swimming pool', 'none', 'G.S.O.B Indatwa', '+250789544874', '15000', 'Rfw', 'Per Hour', 'Venue', 'Swimming Pool', 'assets/img/products/stipp.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Fully equipped swimming pool', 'Southern Province', 'Huye', 'Ngoma', '2017-04-04 10:43:43', 2, 1),
(86, 'Good Garden', 'none', 'Chez Tacienne', '+250789544874', '15000', 'Rfw', 'Per Hour', 'Venue', 'Garden', 'assets/img/products/italian_gardens_wedding.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Fully equipped Garden', 'Northern Province', 'Musanze', 'Kinigi', '2017-04-04 10:52:56', 1, 1),
(87, 'Cadillac 100', 'none', 'Ndiramiye Igor', '+250789660036', '200000', 'Rfw', 'Per Day', 'Car', 'Other', 'assets/img/products/Jaguar-Xf-Decorated.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Luxury wedding car', 'Eastern Province', 'Kayonza', 'Rutare', '2017-04-04 11:04:02', 2, 1),
(88, 'Cadillac 200', 'none', 'Ndiramiye Igor', '+250789660036', '150000', 'Rfw', 'Per Day', 'Car', 'Other', 'assets/img/products/IMG-20140306-WA0015.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Luxury wedding car', 'Western Province', 'Rusizi', 'Kamembe', '2017-04-04 11:05:46', 1, 1),
(89, 'Flowers  Glue  Others  ', 'none', 'Kesha Company', '+250789660036', '120000', 'Rfw', '', 'Deco', '----', 'assets/img/products/IMG-20140306-WA0015.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Disc d''or', 'Southern Province', 'Nyanza', 'Rusatira', '2017-04-04 11:09:27', 2, 1),
(90, 'Flowers  Glue  Others  ', 'none', 'Cesaire Company', '+250789660036', '150000', 'Rfw', '', 'Deco', '----', 'assets/img/products/flowers-decoration-for-wedding-hall-decoration-for-wedding-hall.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'Number uno', 'Southern Province', 'Nyamagabe', 'Kinyamakara', '2017-04-04 11:11:39', 1, 1),
(91, 'Civil wedding dress', 'Female', 'Tacienne Fashion Shop', '+250789558834', '12000', 'Rfw', 'Per Day', 'Wedding&clothes', 'Dress', 'assets/img/products/Oksana-Mukha-Cocktail-Dresses-2013-Perfect-for-a-Wedding-Reception-or-Civil-.jpg', 'assets/img/products/', 'assets/img/products/', 1, 'Civil', 'High quality', 'Good dress', 'Southern Province', 'Huye', 'Campus', '2017-04-04 12:14:03', 2, 1),
(92, 'decoration  ', 'none', 'Credo hotel', '0782244559', '250000', 'Rfw', 'Per Day', 'Deco', '----', 'assets/img/products/c054e400e292a4d466645537d5b283b1.jpg', 'assets/img/products/', 'assets/img/products/', 1, '', 'Good quality', 'come all', 'Southern Province', 'Huye', 'Ngoma', '2017-04-04 13:03:49', 0, 1),
(95, 'Decoration', 'none', 'none', 'none', '15000', 'Rfw', 'none', 'Owner', '----', 'assets/img/products/18252063_1813741362277472_6602322752177176576_n.jpg', 'assets/img/products/', 'assets/img/products/', 12, 'none', 'none', 'Blah blah blah', 'Southern Province', 'Huye', 'Tumba', '2017-05-11 11:29:56', 11, 1),
(97, 'Food', 'none', 'none', 'none', '10000', 'Rfw', 'none', 'Owner', '----', 'assets/img/products/146764628.jpg', 'assets/img/products/', 'assets/img/products/', 649, 'none', 'none', 'Ibiryo', 'Southern Province', 'Huye', 'Tumba', '2017-05-11 14:24:06', 12, 1);

-- --------------------------------------------------------

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
(3, 'JayJay', 'jay@gmail.com', '250788881598', '987', '2017-04-22 23:11:57');

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
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messagetouser`
--
ALTER TABLE `messagetouser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
