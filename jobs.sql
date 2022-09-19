-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 01:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jobpost` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `email`, `jobpost`, `resume`, `qual`, `year`) VALUES
(0, 'Vishal R', 'mrvishal2k2@pm.me', 'Web Dev', 'https://docs.google.com/spreadsheets/d/1hXxxS2xKU83PSRFsckQuH_A_HPMjVif9iDdJtSgFqRs', 'BTech, MTech in CS AI&ML', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `id` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `ctc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`id`, `companyname`, `position`, `description`, `skills`, `ctc`) VALUES
(0, 'IBM', 'Senior Web DEv', 'We are looking forward to get started with programming for cloud AI, we expect an friendly and helpful documentation can get us up and running quickly and easily.', 'HTML, CSS, Python, AI&ML', '14LPA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(110) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_no`) VALUES
(0, 'Vishal R', 'mrvishal2k2@gmail.com', '$2y$12$fz5EHJlkR30OqftmfERaaeHF2EZVa4U4VXv.YykhlqxqOCK1x6MSK', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
