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
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_phn` varchar(255) NOT NULL,
  `Problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id`, `patient_id`, `patient_name`, `patient_email`, `patient_phn`, `Problem`) VALUES
(1, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'I have a high fever and a cough...'),
(2, 5, 'Onamika', 'onamika@gmail.com', '01523029023', 'I feel dizzy'),
(4, 4, 'Urbana', 'urbana@gmail.com', '325436', 'dfsdfn'),
(5, 3, 'kowmi', '12daisyflora12@gmail.com', '01836998182', 'hlw'),
(6, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'hello'),
(7, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'difficulty breathing or shortness of breath'),
(8, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'a rash on skin, or discolouration of fingers or toes'),
(9, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'fever, dry cough, tiredness'),
(10, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'loss of taste or smell'),
(11, 4, 'Urbana', 'urbana@gmail.com', '325436', 'shortness of breath , tiredness.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
