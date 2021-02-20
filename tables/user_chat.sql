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
-- Table structure for table `user_chat`
--

CREATE TABLE `user_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(255) NOT NULL,
  `receiver_username` varchar(255) NOT NULL,
  `msg_contest` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `mag_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_chat`
--

INSERT INTO `user_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_contest`, `msg_status`, `mag_date`) VALUES
(1, 'Kowmi', 'Dr. Rouson Ara', 'hello maam, I need to talk with you', 'read', '2021-01-01 19:47:49'),
(2, 'Dr. Rouson Ara', 'Kowmi', 'yes tell me, How can I help you', 'read', '2021-01-01 19:49:55'),
(3, 'Kowmi', 'Dr. Rouson Ara', 'sorry to disturb you but can you tell me when you are free?', 'read', '2021-01-01 19:50:43'),
(4, 'Kowmi', 'Dr. Rouson Ara', 'sorry to disturb you but can you tell me when you are free?', 'read', '2021-01-01 19:50:48'),
(5, 'Dr. Rouson Ara', 'Kowmi', 'ummm, tomorrow maybe?', 'read', '2021-01-01 19:51:31'),
(6, 'Dr. Rouson Ara', 'Kowmi', 'ummm, tomorrow maybe?', 'read', '2021-01-01 19:55:19'),
(7, 'Kowmi', 'Dr. Rouson Ara', 'sorry to disturb you but can you tell me when you are free?', 'read', '2021-01-01 19:55:54'),
(8, 'Kowmi', 'Dr. Rouson Ara', 'when?', 'read', '2021-01-01 19:56:10'),
(9, 'Dr. Rouson Ara', 'Kowmi', '9am?', 'read', '2021-01-01 19:58:05'),
(10, 'Kowmi', 'Dr. Rouson Ara', 'As you wish...', 'read', '2021-01-01 19:58:42'),
(11, 'Dr. Rouson Ara', 'Kowmi', 'thank you', 'read', '2021-01-01 20:00:06'),
(12, 'Kowmi', 'Dr. Rouson Ara', 'hello mam', 'read', '2021-01-02 12:01:17'),
(13, 'Dr. Rouson Ara', 'Kowmi', 'yes', 'read', '2021-01-02 12:01:38'),
(14, 'Kowmi', 'Dr. Rouson Ara', 'are you busy?', 'read', '2021-01-02 12:01:54'),
(15, 'Dr. Rouson Ara', 'Kowmi', 'no no, tell me ', 'read', '2021-01-02 12:03:16'),
(16, 'Kowmi', 'Dr. Gilbert Strang', 'hello sir, I would like to ask you something', 'read', '2021-01-02 12:12:53'),
(17, 'Dr. Gilbert Strang', 'Kowmi', 'yes, How can I help you?', 'read', '2021-01-02 12:13:56'),
(18, 'Dr. Gilbert Strang', 'Onamika Hossain', 'hey little baby girl', 'read', '2021-01-02 12:14:12'),
(19, 'Kowmi', 'Dr. Gilbert Strang', 'sir, I am having some issues , when you will be free?', 'read', '2021-01-02 12:48:20'),
(20, 'Kowmi', 'Dr. Saznin Tasnim', 'hi', 'read', '2021-01-02 12:48:34'),
(21, 'Dr. Gilbert Strang', 'Kowmi', 'ok, tomorrow?', 'read', '2021-01-02 12:51:23'),
(22, 'Dr. Gilbert Strang', 'Urbana', 'ok so I will be free at 10AM', 'read', '2021-01-02 12:52:16'),
(23, 'Urbana', 'Dr. Gilbert Strang', 'ok sir', 'read', '2021-01-02 12:53:15'),
(24, 'Urbana', 'Dr. Gilbert Strang', 'huj', 'read', '2021-01-02 14:20:51'),
(25, 'Dr. Gilbert Strang', 'Urbana', 'gvhjk', 'read', '2021-01-02 14:21:19'),
(26, 'Urbana', 'Dr. Gilbert Strang', 'hi', 'read', '2021-01-02 15:14:45'),
(27, 'Urbana', 'Dr. Saznin Tasnim', 'hi', 'read', '2021-01-02 15:15:02'),
(28, 'Dr. Gilbert Strang', 'Urbana', 'fgdf', 'read', '2021-01-02 15:18:04'),
(29, 'Onamika Hossain', 'Dr. Gilbert Strang', 'hi , how are you ?', 'read', '2021-01-02 15:42:29'),
(30, 'Dr. Gilbert Strang', 'Kowmi', 'hi', 'read', '2021-01-03 17:03:26'),
(31, 'Kowmi', 'Dr. Gilbert Strang', 'hlw', 'read', '2021-01-03 17:03:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
