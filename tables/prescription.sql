-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:53 AM
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
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `doctor_id`, `doctor_name`, `doctor_email`, `patient_id`, `patient_email`, `prescription`) VALUES
(13, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'napa 1-0-1 30 days'),
(14, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'napa 1-0-1 30 days'),
(15, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'napa 1-1-1 7 days\r\nlumona 1-0-0 7 days'),
(16, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'napa 1-1-1 7 days\r\nlumona 1-0-0 7 days'),
(17, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'napa 1-1-1 7 days\r\nlumona 1-0-0 7 days'),
(18, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'napa 1-1-1 7 days\r\nlumona 1-0-0 7 days'),
(19, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'nksldaslkvn'),
(20, 1, 'Dr. Rouson Ara', '', 3, '12daisyflora12@gmail.com', 'sgvljzdmv /d'),
(21, 3, 'Dr. Gilbert Strang', '', 4, 'urbana@gmail.com', 'ddbc,sdv .ksdheaderjhsfnjas'),
(22, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 4, 'urbana@gmail.com', 'segv'),
(23, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 3, '12daisyflora12@gmail.com', 'jsdcjsncij s jnxasm,'),
(24, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 3, '12daisyflora12@gmail.com', 'jdl sjnx jhdkja swjhdskja. wuhdjka'),
(25, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 3, '12daisyflora12@gmail.com', 'sjcnsjdhaks ,qkjwhdas ,shdkajs,bdkja'),
(26, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 5, 'onamika@gmail.com', 'napa 1-1-1 7 days'),
(27, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 5, 'onamika@gmail.com', 'fdelf'),
(28, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 5, 'onamika@gmail.com', 'napa 1-1-1 7 days'),
(29, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 5, 'onamika@gmail.com', 'napa 1-0-1 7 days, \r\nlumona 1-1 7days,\r\nseclo 1-0-1 3 days,\r\nantacid+ 1-1-1 5days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
