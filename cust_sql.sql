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
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `Name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Mail` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Addr` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`Name`, `Mail`, `Password`, `Addr`) VALUES
('test2', 'bvkldbvlkjbs@nvfd.com', '37cd29a062794274b508dc232a3cede3', 'bvkbvlkbd'),
('test', 'csaccscsa@fa.com', 'f90721c90de9bd9ef516bea0b184fd30', 'dfsafds'),
('Aroop', 'er@gmail.com', '28bf5fcdb14ff5cf1b86a0df586be5e8', 'yt Tucson'),
('Farhaan', 'farhaan123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ew12e1'),
('Omer Farooq', 'OMER@HOYMAICOM', 'f8a0924d6123f28131712dab91e070c1', '65328! AUSTIN'),
('Test1', 'test1@gmail.com', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'Texas'),
('Test4', 'test4@email.com', 'd9ad07e4d1cf21858107f4209990d23e', 'Texas'),
('Test3', 'test@gmail.com', '3e8e7df36a0a59e2f595a89ea62a43f8', 'Texas'),
('Test12', 'testing12@gmail.com', 'ac1c8d64fd23ae5a7eac5b7f7ffee1fa', 'Texas'),
('Rajat', 'tr@gmail.com', 'defe40259eda20f939f7c623444ab6d4', 'Farooq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`Mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
