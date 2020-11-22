-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 11:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rebellens`
--

-- --------------------------------------------------------

--
-- Table structure for table `savedimage`
--

CREATE TABLE `savedimage` (
  `id` int(11) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `idescription` varchar(500) NOT NULL,
  `iwidth` bigint(20) NOT NULL,
  `iheight` bigint(20) NOT NULL,
  `isize` varchar(50) NOT NULL,
  `imgtype` varchar(50) NOT NULL,
  `ipath` varchar(500) NOT NULL,
  `itime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savedimage`
--

INSERT INTO `savedimage` (`id`, `iname`, `idescription`, `iwidth`, `iheight`, `isize`, `imgtype`, `ipath`, `itime`) VALUES
(1, 'Cycle', 'Ride as much or as little, as long or as short as you feel. But ride”', 1844, 3278, '4.08 MB', 'jpeg', 'imgupload/1593667099.jpg', '2020-07-02 05:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `visitorcounter`
--

CREATE TABLE `visitorcounter` (
  `vid` int(11) NOT NULL,
  `vip` varchar(200) NOT NULL,
  `vtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitorcounter`
--

INSERT INTO `visitorcounter` (`vid`, `vip`, `vtime`) VALUES
(1, '::1', '2020-07-02 07:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `savedimage`
--
ALTER TABLE `savedimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorcounter`
--
ALTER TABLE `visitorcounter`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `savedimage`
--
ALTER TABLE `savedimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitorcounter`
--
ALTER TABLE `visitorcounter`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
