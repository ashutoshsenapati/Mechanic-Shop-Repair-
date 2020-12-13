-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2020 at 04:58 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Type` varchar(50) NOT NULL,
  `Provider` varchar(50) NOT NULL,
  `Descripition` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `Unique_id` varchar(50) NOT NULL,
  `Flag` tinyint(1) DEFAULT NULL,
  `Image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Type`, `Provider`, `Descripition`, `price`, `Unique_id`, `Flag`, `Image`) VALUES
('Mobile', 'James', 'Games', 200, 'G2323', 1, 'mobile.jpg'),
('Laptop', 'Jonathan', 'Fixes', 25000, 'L1234', NULL, 'laptop.jpg'),
('Laptop', 'Selena', 'mobile making', 4000, 'M2290', NULL, 'laptop.jpg'),
('Mobile', 'Jennifer', 'Mobile', 231, 'M23211', NULL, 'mobile.jpg'),
('Mobile', 'Lionel', 'Fixes screens and OS problems', 399, 'M3213', NULL, 'mobile.jpg'),
('Mobile', 'Jacob', 'Speakers', 2132, 'M3232', NULL, 'laptop.jpg'),
('Mobile', 'Farah', 'Screen consultant', 100, 'M3291', NULL, 'mobile.jpg'),
('Mobile', 'Erik', 'Games', 200, 'M3434', NULL, 'mobile.jpg'),
('Tablet', 'Khan', 'Charging Issues', 850, 'T21421', NULL, 'laptop.jpg'),
('Tablet', 'Hugo', 'Charging Port Issues', 3499, 'T32131', NULL, 'laptop.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Unique_id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
