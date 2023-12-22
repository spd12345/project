-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 08:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `id` int(8) NOT NULL,
  `salutation` varchar(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `dt_from` date NOT NULL,
  `dt_to` date NOT NULL,
  `sys_date` date NOT NULL,
  `u_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`id`, `salutation`, `name`, `email`, `designation`, `dt_from`, `dt_to`, `sys_date`, `u_id`) VALUES
(6, 'Mr.', 'Shakti Prasad Pattanayak', 'pattanayak779@gmail.com', 'Developer', '2023-12-03', '2023-12-30', '2023-11-28', 'SMM202300009'),
(7, 'Mr.', 'Ajit Dash', 'pattanayak779@gmail.com', 'Developper', '2023-11-26', '2023-12-30', '2023-11-27', 'SMM202300011'),
(11, 'Mr.', 'Babushan Mohanty', 'babushaan@gmail.com', 'Developper', '2023-11-26', '2024-01-06', '2023-11-27', 'SMM202300012'),
(14, 'Mr.', 'Geetanjali Pattanayak', 'geeta@gmail.com', 'Developper', '2023-11-26', '2023-12-30', '2023-11-27', 'SMM202300014'),
(15, 'Mr.', 'demo', 'kgk@gmail.com', 'tester', '2023-11-26', '2023-12-23', '2023-11-27', 'SMM202300018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `sl_no` (`id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
