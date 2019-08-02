-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 09:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geo_phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `size` int(10) DEFAULT '0',
  `height` int(10) DEFAULT '0',
  `width` int(10) DEFAULT '0',
  `length` int(10) DEFAULT '0',
  `weight` int(10) DEFAULT '0',
  `image` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `name`, `price`, `size`, `height`, `width`, `length`, `weight`, `image`) VALUES
(83, '7777', 'iojhbiu', 4, 7, 0, 0, 0, 4, ''),
(84, '7777', 'iojhbiu', 7, 4, 0, 0, 0, 8, ''),
(86, 'kikimimi', 'kimimi', 9, 5, 0, 0, 0, 9, ''),
(88, '7777', 'o9999', 8, 0, 0, 0, 0, 9, ''),
(89, 'lknkklj jk', '4frf', 33, NULL, 0, 0, 0, 3, ''),
(90, 'lknkklj jk', 'jnnuin', 4, NULL, 0, 0, 0, 3, ''),
(91, 'lknkklj jk', 'o9999', 4, NULL, 0, 0, 0, 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
