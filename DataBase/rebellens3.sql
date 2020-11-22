-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 05:22 PM
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
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `lid` int(11) NOT NULL,
  `lip` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `ltime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`lid`, `lip`, `id`, `ltime`) VALUES
(1, '::1', 5, '2020-07-02 14:23:26'),
(2, '::1', 4, '2020-07-02 14:23:44'),
(3, '::1', 3, '2020-07-02 14:43:05'),
(4, '::1', 2, '2020-07-02 15:14:55');

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
(1, '::1', '2020-07-02 14:48:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `visitorcounter`
--
ALTER TABLE `visitorcounter`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitorcounter`
--
ALTER TABLE `visitorcounter`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
