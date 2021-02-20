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
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_phn` varchar(255) NOT NULL,
  `specialist_name` varchar(255) NOT NULL,
  `specialist_name2` varchar(255) NOT NULL,
  `fixed_time` varchar(255) NOT NULL,
  `prefarable_time` varchar(255) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `patient_id`, `patient_name`, `patient_email`, `patient_phn`, `specialist_name`, `specialist_name2`, `fixed_time`, `prefarable_time`, `submit_time`) VALUES
(1, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'asda', 'Dr. Rouson  Ara', '234', 'Monday 10Am,4/01/21', '2021-01-02 10:29:54'),
(2, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'Dr. Gilbert', 'Dr. Rouson  Ara', 'Sunday 10am', 'Monday 10Am,4/01/21', '2021-01-02 10:31:34'),
(3, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'Dr. Rouson Ara', 'Dr. Rouson Ara', '10/2/2021', '11/02/21', '2021-01-02 11:58:55'),
(4, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'Dr. Rouson Ara', 'Dr. Rouson Ara', '10/2/2021', '11/02/21', '2021-01-02 12:14:50'),
(5, 5, 'Onamika Hossain', 'onamika@gmail.com', '01523029023', 'Dr. Rouson Ara', 'Dr. Rouson Ara', '10/2/2021', '11/02/21', '2021-01-02 12:16:44'),
(6, 4, 'Urbana', 'urbana@gmail.com', '01739482183', 'Dr. Gilbert Strang', 'Dr. Girlbert Strang', 'Monday 10AM,4/1/21', 'Tuesday 11AM,5/1/21', '2021-01-02 12:39:28'),
(7, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'Dr. Gilbert Strang', 'Dr. Gilbert Strang', 'Sunday 10am', 'Monday 10Am,4/01/21', '2021-01-02 12:49:20'),
(8, 3, 'Kowmi', '12daisyflora12@gmail.com', '01836998182', 'Dr. Gilbert Strang', 'Dr. Gilbert Strang', '234', 'Monday 10Am,4/01/21', '2021-01-03 08:55:28'),
(9, 4, 'Urbana', 'urbana@gmail.com', '325436', '', 'Dr. Gilbert Strang', 'Sunday 10am', 'Monday 10Am,4/01/21', '2021-01-03 09:31:57'),
(10, 5, 'Onamika Hossain', 'onamika@gmail.com', '01523029023', '', 'Dr. Rouson  Ara', 'Monday 3PM,7/1/21', 'Monday 10Am,10/01/21', '2021-01-03 09:41:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
