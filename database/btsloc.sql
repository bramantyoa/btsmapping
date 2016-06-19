-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 11:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `btsloc`
--

CREATE TABLE `btsloc` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `type` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btsloc`
--

INSERT INTO `btsloc` (`id`, `name`, `address`, `lng`, `lat`, `type`) VALUES
(1, 'BD_C_RIWUT_ID', 'Jl. RTA Milono KM 6,5 Kel. Kereng Bengkirai, Kec. Sebangau', 113.919907, -2.271814, 'XL'),
(2, 'BARENGBENG', 'Jl. Maher Mahar/Panglima-Batur, KM 18, RT 05/RW 01 Kel. Klampangan, Kec. Sebangau', 114.011772, -2.280795, 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `btsloc`
--
ALTER TABLE `btsloc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `btsloc`
--
ALTER TABLE `btsloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
