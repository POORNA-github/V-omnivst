-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220721.dbe3db564e
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2022 at 05:45 PM
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
-- Database: `vehicle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `chassino` varchar(20) NOT NULL,
  `engineno` varchar(20) NOT NULL,
  `serialno` varchar(20) NOT NULL,
  `vehiclemake` varchar(20) NOT NULL,
  `vehicletype` varchar(20) NOT NULL,
  `submodel` varchar(10) NOT NULL,
  `rpurpose` varchar(20) NOT NULL,
  `wsize` varchar(20) NOT NULL,
  `seats` varchar(10) NOT NULL,
  `capacity` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `colour` varchar(10) NOT NULL,
  `bodytype` varchar(20) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `owners` int(10) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `idc` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `manufacdate` date NOT NULL,
  `registerdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicleno`, `chassino`, `engineno`, `serialno`, `vehiclemake`, `vehicletype`, `submodel`, `rpurpose`, `wsize`, `seats`, `capacity`, `status`, `colour`, `bodytype`, `fuel`, `country`, `owners`, `owner`, `idc`, `tel`, `manufacdate`, `registerdate`) VALUES
(1, 'KY-6336', 'CH957612', 'NQ745263', 'SIU16433', 'TOYOTA', 'CAR', 'PREMIO', 'DUAL PURPO', '155/70R17', '4', 1499, 'BRAND-NEW', 'GREEN', 'SALOON', 'PETROL', 'JAPAN', 0, 'HITIHAMU MUDIYANSELAGE POORNA VIJITHA LAKMAL', '200009701583', '0756510079', '2013-04-16', '2013-04-29'),
(2, 'KU-8656', 'NTF5426', 'H04545', 'SQ54155', 'TOYOTA', 'CAR', 'ALLION', 'DUAL PURPO', '225/35R19', '4', 1499, 'RECONDITIO', 'YELLOW', 'SALOON', 'PETROL', 'JAPAN', 1, 'H ISANKA HAPUARACHCHI', '200005801750', '0759723716', '2014-05-08', '2016-02-03'),
(3, 'ABC-7856', 'NZ2146554', '2112E', '54512SS', 'BAJAJ', 'MOTORBIKE', 'PLATINA', 'DUAL PURPOSE', '125/80R13', '2', 150, 'BRAND-NEW', 'Orange', '-', 'PETROL', 'INDIA', 0, 'ISANKA ERANGA', '200148562487', '0756512445', '2022-07-20', '2022-07-29'),
(4, 'NB-7876', 'NX54132', 'MASD661', 'S4561', 'TATA', 'BUS', 'LEYLAND', 'PASSENGER-TRANSPORT', '315/35R30', '40', 4800, 'BRAND-NEW', 'WHITE', '-', 'DIESEL', 'INDIA', 0, 'VINOD NAWARATHNE', '202024451', '0756510079', '2022-07-18', '2022-07-21'),
(5, 'NB-7889', '84SD554', '5544DDS', '544DS', 'TATA', 'BUS', 'LEYLAND', 'PASSENGER-TRANSPORT', '225/35R19', '15', 4520, 'BRAND-NEW', 'Gray', '-', 'DIESEL', 'INDIA', 0, 'ADITHYA RAJAPAKSHA', '200098512563', '0756510079', '2022-07-15', '2022-07-22'),
(6, 'MZ-5325', '65651S', '651S4498', '645P744', 'BMW', 'LORRY', 'CANTER', 'DUAL PURPOSE', '285/40R24', '4', 3200, 'BRAND-NEW', 'Orange', '-', 'DIESEL', 'JAPAN', 0, 'ADITHYA KARUNARATHNA', '19985452151132', '0756514897', '2022-07-08', '2022-07-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
