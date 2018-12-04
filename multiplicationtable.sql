-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 07:27 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiplicationtable`
--

CREATE TABLE `multiplicationtable` (
  `id` int(11) NOT NULL,
  `factor1` int(11) NOT NULL,
  `factor2` int(11) NOT NULL,
  `operation` varchar(2) NOT NULL,
  `result` int(11) NOT NULL,
  `operation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiplicationtable`
--

INSERT INTO `multiplicationtable` (`id`, `factor1`, `factor2`, `operation`, `result`, `operation_date`) VALUES
(1, 2, 3, '*', 6, '0000-00-00'),
(2, 3, 5, '*', 15, '2018-12-03'),
(36, 1, 2, '*', 2, '2018-12-04'),
(37, 3, 5, '*', 15, '2018-12-04'),
(38, 1, 1, '*', 1, '2018-12-04'),
(39, 1, 4, '*', 4, '2018-12-04'),
(40, 8, 9, '*', 72, '2018-12-04'),
(41, 1, 1, '*', 1, '2018-12-04'),
(42, 1, 3, '*', 3, '2018-12-04'),
(43, 3, 4, '*', 12, '2018-12-04'),
(44, 3, 4, '*', 12, '2018-12-04'),
(45, 3, 4, '*', 12, '2018-12-04'),
(46, 1, 3, '*', 3, '2018-12-04'),
(47, 3, 4, '*', 12, '2018-12-04'),
(48, 6, 7, '*', 42, '2018-12-04'),
(49, 2, 8, '*', 16, '2018-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiplicationtable`
--
ALTER TABLE `multiplicationtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiplicationtable`
--
ALTER TABLE `multiplicationtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
