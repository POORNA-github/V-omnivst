-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220721.dbe3db564e
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2022 at 05:46 PM
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
-- Database: `insuarance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `insuarance`
--

CREATE TABLE `insuarance` (
  `id` int(11) NOT NULL,
  `vehicleno` varchar(30) NOT NULL,
  `validtill` date NOT NULL,
  `testfee` float NOT NULL,
  `syn` varchar(30) NOT NULL,
  `center` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insuarance`
--

INSERT INTO `insuarance` (`id`, `vehicleno`, `validtill`, `testfee`, `syn`, `center`, `comments`, `type`, `issue`) VALUES
(1, 'KY-6336', '2014-04-30', 59862.4, 'KAN626239', 'KAN2', 'NO DAMAGES', 'FULL-INSUARANCE', '2013-04-30'),
(2, 'KY-6336', '2015-04-30', 89862.5, 'KAN626239', 'KAN2', 'NO DAMAGES', 'FAIL', '2014-04-30'),
(3, 'ABC-7856', '2021-07-29', 545.78, 'BA6546', 'BAD451', 'No Errors Found', 'THIRD-PARTY', '2020-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insuarance`
--
ALTER TABLE `insuarance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insuarance`
--
ALTER TABLE `insuarance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
