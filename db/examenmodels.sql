-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2021 at 05:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examenmodels`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, '2021-01-25 14:05:08', '2021-01-25 14:05:08', 'Junior', 'The boss', 'junior@gmail.com', 'password'),
(2, '2021-01-25 14:05:08', '2021-01-25 14:05:08', 'Thomas', 'el pd', 'elpd@gmail.com', 'password'),
(83, '2005-03-23 17:16:12', '1997-09-29 04:24:43', 'Théodore', 'Techer', 'fgilles@ledoux.com', '&-c0|Rh)Jc@Ra_c$'),
(84, '1982-04-17 08:47:22', '1981-06-10 12:16:21', 'Alfred', 'Bernard', 'hlopez@live.com', '^gqz@|@T/f2:'),
(85, '1976-06-21 20:03:01', '1972-04-17 07:25:19', 'Valentine', 'Leblanc', 'drousseau@tele2.fr', 'D-*-Bnk6Rk;(#eO#Ha'),
(86, '1979-07-09 10:37:21', '1974-04-16 09:21:27', 'Guy', 'Carlier', 'lucas28@yahoo.fr', '&AE#_i'),
(87, '2009-09-12 17:17:21', '1976-10-27 23:48:16', 'Susanne', 'Pineau', 'dbertrand@hotmail.fr', 'ny,\';\'.j>g/Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
