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
-- Table structure for table `covidcheck`
--

CREATE TABLE `covidcheck` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_phn` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidcheck`
--

INSERT INTO `covidcheck` (`id`, `patient_id`, `patient_name`, `patient_age`, `patient_phn`, `patient_email`) VALUES
(1, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(2, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(3, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(4, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(5, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(6, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(7, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(8, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(9, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(10, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(11, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(12, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(13, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(14, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(15, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(16, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(17, 4, 'Urbana', 20, '325436', 'urbana@gmail.com'),
(18, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(19, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(20, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(21, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(22, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com'),
(23, 3, 'Kowmi', 20, '01836998182', '12daisyflora12@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covidcheck`
--
ALTER TABLE `covidcheck`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covidcheck`
--
ALTER TABLE `covidcheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
