-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220721.dbe3db564e
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2022 at 05:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecotest`
--

-- --------------------------------------------------------

--
-- Table structure for table `eco_reports`
--

CREATE TABLE `eco_reports` (
  `id` int(11) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `validdate` date NOT NULL,
  `center` varchar(20) NOT NULL,
  `testfee` varchar(20) NOT NULL,
  `sysno` varchar(255) NOT NULL,
  `odo` float NOT NULL,
  `ovstatus` varchar(10) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eco_reports`
--

INSERT INTO `eco_reports` (`id`, `vehicleno`, `validdate`, `center`, `testfee`, `sysno`, `odo`, `ovstatus`, `doi`) VALUES
(1, 'KY-6336', '2014-04-30', 'KANDY', '350.75', 'K43292', 12.36, 'PASS', '2013-04-30'),
(2, 'KY-6336', '2015-04-30', 'KANDY', '420', 'K95231', 20756.7, 'PASS', '2014-04-30'),
(3, 'KU-8656', '2017-03-04', 'COLOMBO2', '987.65', 'COL211521', 14005.7, 'PASS', '2016-03-04'),
(4, 'KU-8656', '2020-05-05', 'JKHIUJKHN', '51651', 'JHKJB35', 654651, 'FAIL', '2019-05-05'),
(5, 'asaS', '0000-00-00', 'SDASD', 'DSAD', '', 0, 'PASS', '2544-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eco_reports`
--
ALTER TABLE `eco_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eco_reports`
--
ALTER TABLE `eco_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
