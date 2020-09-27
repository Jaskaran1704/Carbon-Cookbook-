-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 06:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingridents`
--

CREATE TABLE `ingridents` (
  `id` int(6) NOT NULL,
  `name` varchar(225) NOT NULL,
  `des` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingridents`
--

INSERT INTO `ingridents` (`id`, `name`, `des`) VALUES
(14, 'ONION', 'chopped onion'),
(22, 'salt', 'fgdgfdngd'),
(24, 'cheese', 'sadasdsad'),
(25, 'oil', 'qwert'),
(26, 'butter', 'qwert'),
(27, 'butter', 'qwert'),
(28, 'sauce', 'hot'),
(29, 'cinamon', 'its sweet in taste');

-- --------------------------------------------------------

--
-- Table structure for table `my_table`
--

CREATE TABLE `my_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_table`
--

INSERT INTO `my_table` (`id`, `title`, `address`, `email`, `created_at`) VALUES
(8, 'amarjit singh', '8761 rue beyries', 'amar.ramgarhia@gmail.com', '2020-05-05 07:48:23'),
(9, 'Harinder singh', '528/b subash nagar', 'harinder1991@gmail.com', '2020-05-05 08:03:48'),
(16, 'ddassama', '8760 rue beyries', 'iamamarjit95@gmail.com', '2020-05-13 03:45:39'),
(17, 'Iambunny', '4140 chemin de la cote Sainte Catherine', 'baljinder@gmail.com', '2020-05-13 05:07:52'),
(20, 'amarjit', 'canihuivnk', 'amar.ramgarhia@gmail.com', '2020-05-18 03:15:19'),
(21, 'iamdell', 'hsp', 'dell@gmail.com', '2020-05-18 05:26:16'),
(22, '123456', 'werty', 'kiran@gmail.com', '2020-05-20 05:21:11'),
(23, '1234', '8760 rue beyries', 'kiran7@gmail.com', '2020-05-20 09:03:27'),
(24, 'abc', '123', 'abc@abc.com', '2020-05-20 17:54:22'),
(25, 'rv', '123', 'kaur@gmail.com', '2020-05-20 18:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `recepie`
--

CREATE TABLE `recepie` (
  `id` int(6) NOT NULL,
  `rname` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `des` varchar(225) NOT NULL,
  `user` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recepie`
--

INSERT INTO `recepie` (`id`, `rname`, `choice`, `des`, `user`) VALUES
(1, 'pizza', 'ONION,salt', 'asdadasd', 'iamamarjit95'),
(2, 'pizza', 'ONION,salt,cheese', 'my own pizza with extra chesse crust.', 'iamamarjit95'),
(3, 'pasta', 'ONION,salt,cheese,oil,butter,sauce', 'vghsdgchliosdkchv hleiqoj;k/;', 'kiran7'),
(4, 'burgur', 'ONION,salt,cheese', 'asdewqewq', 'kiran7'),
(5, 'pizza chesse', 'ONION,salt,cheese,oil,butter,butter,sauce', 'idk', 'kiran7'),
(6, 'demo', 'butter,butter,sauce', 'fmalfmlamflam', 'abc'),
(7, 'demooooo', 'salt,cheese,oil', 'hchkafjalfk', 'kaur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingridents`
--
ALTER TABLE `ingridents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_table`
--
ALTER TABLE `my_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recepie`
--
ALTER TABLE `recepie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingridents`
--
ALTER TABLE `ingridents`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `my_table`
--
ALTER TABLE `my_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `recepie`
--
ALTER TABLE `recepie`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
