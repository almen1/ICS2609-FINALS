-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 06:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `sdg`
--

CREATE TABLE `sdg` (
  `id` int(11) NOT NULL,
  `sdg_name` varchar(255) NOT NULL,
  `sdg_desc` text NOT NULL,
  `sdg_color` varchar(6) NOT NULL,
  `website_1` varchar(255) NOT NULL,
  `website_1_url` varchar(255) NOT NULL,
  `website_1_desc` text NOT NULL,
  `website_2` varchar(255) NOT NULL,
  `website_2_url` varchar(255) NOT NULL,
  `website_2_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sdg`
--

INSERT INTO `sdg` (`id`, `sdg_name`, `sdg_desc`, `sdg_color`, `website_1`, `website_1_url`, `website_1_desc`, `website_2`, `website_2_url`, `website_2_desc`) VALUES
(1, 'sdg test', 'test desc 1', 'e5233d', 'web 1', '', 'web 1 desc', 'web 2', '', 'web 2 desc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sdg`
--
ALTER TABLE `sdg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sdg`
--
ALTER TABLE `sdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
