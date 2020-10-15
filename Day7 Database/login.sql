-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmarks`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Division` varchar(1) NOT NULL,
  `Rollno` int(11) NOT NULL,
  `PHP` int(11) NOT NULL,
  `MySQL` int(11) NOT NULL,
  `HTML` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `out of` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Name`, `password`, `Division`, `Rollno`, `PHP`, `MySQL`, `HTML`, `total`, `out of`, `percent`, `status`) VALUES
(1, 'Vishnu Krishna', '', 'A', 301, 90, 89, 90, 269, 300, 90, 'DISTINCTION'),
(2, 'Chandini Chentamara', '', 'B', 312, 98, 89, 97, 284, 300, 95, 'DISTINCTION'),
(3, 'Sita Lakshmi', '', 'A', 310, 56, 78, 45, 179, 300, 60, 'PASS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
