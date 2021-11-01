-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 11:45 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `PhoneNumber` bigint(255) NOT NULL,
  `dates` date NOT NULL,
  `Age` int(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `Eat` char(5) NOT NULL,
  `Movies` char(5) NOT NULL,
  `TV` char(5) NOT NULL,
  `Radio` char(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `Surname`, `PhoneNumber`, `dates`, `Age`, `food`, `Eat`, `Movies`, `TV`, `Radio`) VALUES
(17, 'nomsa', 'sipho', 2345678456, '2021-11-01', 56, 'Pasta,Other,', '1', ' 3', '4', '5'),
(18, 'Sipho', 'Mahlangu', 728075258, '2021-11-01', 5, 'Pizza,Pasta,PapnWors,', ' 3', '2', '4', '1'),
(19, 'nomsa', 'fakude', 728075258, '2021-11-01', 57, 'ChickenStirFry,', ' 3', '1', '1', '1'),
(20, 'fankue', 'sipho', 767543287, '2021-11-01', 23, 'PapnWors,BeefStirFry,', ' 3', '1', '2', '4'),
(21, 'Tyson', 'Mahlangu', 728075258, '2021-11-01', 35, 'PapnWors,', '1', '1', '1', '1'),
(22, 'nomsa', 'sipho', 728075258, '2021-11-01', 12, 'PapnWors,', '2', ' 3', '4', '5'),
(23, 'SIPJI', 'DGFGHHGHG', 4565768688, '2021-11-01', 76, 'Pasta,', '1', '1', '1', '4'),
(24, 'gugu', 'Mahlangu', 742074865, '2021-11-01', 16, 'Pizza,', '1', '1', '3', '5'),
(25, 'Themba', 'sithole', 785634213, '2021-11-01', 32, 'Pizza,', ' 3', '4', '4', '4'),
(26, 'Ntomi', 'sdu', 767543287, '2021-11-01', 34, 'Pasta,', '1', '2', '5', ' 3'),
(27, 'trippie', 'red', 7675432543, '2021-11-01', 43, 'Pizza,', '1', '5', '5', '4'),
(28, 'thabang', 'makwa', 754321678, '2021-11-01', 17, 'PapnWors,BeefStirFry,Other,', '1', '1', '1', '1'),
(29, 'dex', 'DGFGHHGHG', 4565768688, '2021-10-31', 33, 'Pasta,', ' 3', '5', '2', ' 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
