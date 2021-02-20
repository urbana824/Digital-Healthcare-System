-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_phn` varchar(255) NOT NULL,
  `patient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `patient_id`, `patient_name`, `patient_phn`, `patient_address`) VALUES
(5, 4, 'Urbana', '325436', 'Uttara,Dhaka'),
(6, 4, 'Urbana', '325436', 'Uttara,Dhaka'),
(7, 5, 'Onamika Hossain', '01523029023', 'Mirpur, Dhaka'),
(8, 3, 'Kowmi', '01836998182', 'dhaka'),
(9, 5, 'Onamika Hossain', '01523029023', 'Mirpur, Dhaka'),
(10, 3, 'Kowmi', '01836998182', 'dhaka'),
(11, 3, 'Kowmi', '01836998182', 'dhaka'),
(12, 4, 'Urbana', '325436', 'Uttara,Dhaka'),
(13, 4, 'Urbana', '325436', 'Uttara,Dhaka'),
(14, 4, 'Urbana', '325436', 'Uttara,Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
