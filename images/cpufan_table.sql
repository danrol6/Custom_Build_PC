-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2018 at 11:14 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs319_1_fall2018_group6_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpufan_table`
--

CREATE TABLE `cpufan_table` (
  `cpufan_id` int(11) NOT NULL,
  `cpufan_name` varchar(50) NOT NULL,
  `cpufan_make` varchar(50) NOT NULL,
  `cpufan_model` varchar(50) NOT NULL,
  `cpufan_size` varchar(50) NOT NULL,
  `cpufan_price` int(11) NOT NULL,
  `cpufan_powerrating` int(11) NOT NULL,
  `component_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpufan_table`
--

INSERT INTO `cpufan_table` (`cpufan_id`, `cpufan_name`, `cpufan_make`, `cpufan_model`, `cpufan_size`, `cpufan_price`, `cpufan_powerrating`, `component_image`) VALUES
(1, 'APEVIA', 'APEVIA', '120mm Addressable', '120mm', 15, 1, 'APEVIA 120mm Addressable.png'),
(2, 'CyberpowerPC', 'CyberpowerPC', '120mm Addressable', '120mm', 30, 3, 'CyberpowerPC 120mm Addressable.png'),
(3, 'Enermax', 'Enermax', 'Enermax T.B RGB Twister Bearing', '120mm', 45, 5, 'Enermax T.B RGB Twister Bearing.png'),
(4, 'Corsair', 'Corsair', 'High Performance Individually Addressable', '120mm', 75, 7, 'Corsair HD Series.png'),
(5, 'In Win', 'In Win', 'In Win Aurora', '120mm', 105, 8, 'In Win Aurora.png'),
(6, 'Thermaltake', 'Thermaltake', 'Thermaltake Riing 14 Series ', '140mm', 155, 9, 'Thermaltake Riing 14 Series.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpufan_table`
--
ALTER TABLE `cpufan_table`
  ADD PRIMARY KEY (`cpufan_id`),
  ADD UNIQUE KEY `cpufan_id` (`cpufan_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
