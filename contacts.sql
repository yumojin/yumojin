-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 04:49 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subscribe_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `counter` int(11) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`counter`, `email`) VALUES
(1, 'yumojin@gmail.com'),
(3, '3@cat.com'),
(4, 'test@test.com'),
(7, 'fakl@mlk'),
(8, '1@u'),
(9, 'me@mw'),
(10, '1@1.com'),
(11, '1@1.com'),
(12, '1@1.com'),
(13, '1@1.com'),
(14, '1@1.com'),
(15, '1@1.com'),
(16, '1@1.com'),
(17, '1@1.com'),
(18, '1@1.com'),
(19, '1@1.com'),
(20, '1@1.com'),
(21, '1@1.com'),
(22, '1@1.com'),
(23, '1@1.com'),
(24, '1@1.com'),
(25, '1@1.com'),
(26, '1@1.com'),
(27, '1@1.com'),
(28, 'yumojin@gmail.com'),
(50, 'yumojin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`counter`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
