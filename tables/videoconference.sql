-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:54 AM
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
-- Table structure for table `videoconference`
--

CREATE TABLE `videoconference` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `link` varchar(1099) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videoconference`
--

INSERT INTO `videoconference` (`id`, `doctor_id`, `doctor_name`, `doctor_email`, `patient_id`, `patient_email`, `link`) VALUES
(1, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 3, '12daisyflora12@gmail.com', 'zoom://123meetingid:/23'),
(2, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 4, 'urbana@gmail.com', 'zoomlink'),
(3, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 5, 'onamika@gmail.com', 'https://www.facebook.com/morsalina.kowmi/'),
(4, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 3, '12daisyflora12@gmail.com', 'snd,.c'),
(7, 3, 'Dr. Gilbert Strang', 'gilbert@gmail.com', 4, 'urbana@gmail.com', 'https://bdren.zoom.us/j/65309806177');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videoconference`
--
ALTER TABLE `videoconference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videoconference`
--
ALTER TABLE `videoconference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
