-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 11:36 AM
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
-- Database: `revision_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `revision_curd`
--

CREATE TABLE `revision_curd` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revision_curd`
--

INSERT INTO `revision_curd` (`id`, `name`, `address`) VALUES
(47, 'Virendra Prajapati ', 'At- Prajapti Vas, Motakothasana near Satlasana'),
(48, 'Roshani Prajapati', 'At- Prajapti Vas, Motakothasana Ta-Satalasana, Dist-Mahesana  384330'),
(49, 'Joitabhai', 'Motakothasana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `revision_curd`
--
ALTER TABLE `revision_curd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `revision_curd`
--
ALTER TABLE `revision_curd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
