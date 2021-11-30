-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 11:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_inc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloemen`
--

CREATE TABLE `bloemen` (
  `id` int(11) NOT NULL,
  `magazijn_id` varchar(255) NOT NULL,
  `naam` text NOT NULL,
  `aantal` text NOT NULL,
  `foto` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloemen`
--

INSERT INTO `bloemen` (`id`, `magazijn_id`, `naam`, `aantal`, `foto`, `text`) VALUES
(1, '1', 'hibiscus', '9', 'https://i.imgur.com/7XC3mgJ.jpg', 'hij is blauw en roze'),
(2, '2', 'roos', '130', '', ''),
(3, '2', 'lelie', '29', '', ''),
(4, '1', 'Tulp', '300', '', ''),
(5, '4', 'roos', '29', 'kaas', 'roze'),
(7, '2', 'tulp', '40', 'nee', 'de trots van nederland');

-- --------------------------------------------------------

--
-- Table structure for table `magazijn`
--

CREATE TABLE `magazijn` (
  `id` int(11) NOT NULL,
  `magazijn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magazijn`
--

INSERT INTO `magazijn` (`id`, `magazijn`) VALUES
(1, 'Amsterdam'),
(2, 'Rotterdam'),
(3, 'Utrecht'),
(4, 'Heerlen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloemen`
--
ALTER TABLE `bloemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazijn`
--
ALTER TABLE `magazijn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloemen`
--
ALTER TABLE `bloemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `magazijn`
--
ALTER TABLE `magazijn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
