-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 04:26 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'sabbir', 'sabbir'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `archis`
--

CREATE TABLE IF NOT EXISTS `archis` (
  `Id` int(20) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` int(30) NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `archis`
--

INSERT INTO `archis` (`Id`, `Name`, `Username`, `Email`, `Password`, `Mobile`, `Address`, `status`) VALUES
(2, 'sa', 'saasdsad', 'sa', '121', 12, '12', 0),
(3, 'jvy', 'anjum afra', 'test@gmail.com', 'jvy', 1765295463, 'dhaka', 1),
(4, '', 'sa', '', '121', 0, '', 0),
(7, 'sabbir al razi', 'sabbir', 'test@gmail.com', 'sabbir', 1765295463, 'dhaka', 1),
(8, 'sabbir', 'anjum afra', 'test@gmail.com', 'dfgg', 1765295463, 'gdg', 1),
(9, 'sabbir', 'anjum afra', 'test@gmail.com', 'sa', 1765295463, 'dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertables`
--

CREATE TABLE IF NOT EXISTS `usertables` (
  `id` int(200) NOT NULL,
  `userName` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(7) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `userPhone` int(19) NOT NULL,
  `userAddress` varchar(200) NOT NULL,
  `userDob` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertables`
--

INSERT INTO `usertables` (`id`, `userName`, `password`, `userEmail`, `userPhone`, `userAddress`, `userDob`, `status`) VALUES
(4, 'Turaifah', '12', 'turaifah@gmail.com', 17777, 'kalsi', '10', 1),
(5, 'sabbir', 'sabbir', 'test@gmail.com', 1765295463, 'Dhaka', 'jskgjd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archis`
--
ALTER TABLE `archis`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usertables`
--
ALTER TABLE `usertables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `archis`
--
ALTER TABLE `archis`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usertables`
--
ALTER TABLE `usertables`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
