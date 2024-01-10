-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 09, 2024 at 11:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_information`
--

CREATE TABLE `client_information` (
  `cli_id` int(7) NOT NULL,
  `cli_series` varchar(255) NOT NULL,
  `cli_name` varchar(255) NOT NULL,
  `cli_num_of_labs` int(3) NOT NULL,
  `area_code` varchar(255) NOT NULL,
  `cli_code` varchar(255) NOT NULL,
  `cli_location` varchar(255) NOT NULL,
  `time_period` varchar(255) NOT NULL,
  `monthly` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `sales_name` varchar(255) NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_information`
--

INSERT INTO `client_information` (`cli_id`, `cli_series`, `cli_name`, `cli_num_of_labs`, `area_code`, `cli_code`, `cli_location`, `time_period`, `monthly`, `total`, `paid`, `remaining`, `sales_name`, `inserted_time`) VALUES
(1, '123', 'omar', 4, '', '333', 'cairo', '10m', 4444, 555, 1111111, 543453, 'omar', '2024-01-09 21:38:19'),
(2, '123', 'omar', 4, 'C', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '10m', '2024-01-09 21:49:36'),
(3, '123', 'omar', 4, 'D', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '11m', '2024-01-09 21:57:52'),
(4, '123', 'omar', 4, 'D', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '11m', '2024-01-09 22:08:26'),
(5, '123', 'omar', 4, 'P', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '9m', '2024-01-09 22:08:52'),
(6, '123', 'omar', 4, 'P', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '9m', '2024-01-09 22:17:39'),
(7, '123', 'omar', 4, 'P', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '9m', '2024-01-09 22:29:08'),
(8, '123', 'omar', 4, 'P', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '9m', '2024-01-09 22:29:11'),
(9, '123', 'omar', 4, 'G', '333', 'cairo', '4444', 555, 1111111, 543453, 0, '12m', '2024-01-09 22:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_information`
--
ALTER TABLE `client_information`
  ADD PRIMARY KEY (`cli_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_information`
--
ALTER TABLE `client_information`
  MODIFY `cli_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
