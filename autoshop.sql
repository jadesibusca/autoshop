-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 02:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `painted`
--

CREATE TABLE `painted` (
  `id` int(11) NOT NULL DEFAULT 0,
  `plateno` varchar(255) NOT NULL,
  `currentcolor` varchar(255) NOT NULL,
  `targetcolor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paintinprogress`
--

CREATE TABLE `paintinprogress` (
  `id` int(11) NOT NULL DEFAULT 0,
  `plateno` varchar(255) NOT NULL,
  `currentcolor` varchar(255) NOT NULL,
  `targetcolor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paintq`
--

CREATE TABLE `paintq` (
  `id` int(11) NOT NULL,
  `plateno` varchar(255) NOT NULL,
  `currentcolor` varchar(255) NOT NULL,
  `targetcolor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paintq`
--

INSERT INTO `paintq` (`id`, `plateno`, `currentcolor`, `targetcolor`) VALUES
(9, ' QWE 123', 'blue', 'red'),
(10, ' X0P 234', 'blue', 'red'),
(11, 'WER 345', 'green', 'blue'),
(13, '1111', 'blue', 'green');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paintq`
--
ALTER TABLE `paintq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paintq`
--
ALTER TABLE `paintq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
