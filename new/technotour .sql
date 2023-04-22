-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 07:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technotour`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `b_tittle` varchar(50) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total_atten` int(11) DEFAULT NULL,
  `total_external` int(11) DEFAULT NULL,
  `no_room` varchar(30) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `b_tittle`, `start_time`, `end_time`, `date`, `total_atten`, `total_external`, `no_room`, `room_id`, `user_id`) VALUES
(3, 'event test', 4, 5, '2023-04-17', 70, 15, 'A104', 45, 4),
(4, 'amr booking', 4, 5, '2023-04-19', 100, 15, 'A105', 41, 4),
(7, 'event test 2', 2, 4, '2023-04-10', 40, 20, 'A105', 41, 4),
(11, 'event test 2', 1, 3, '2023-04-16', 60, 10, 'A106', 46, 4),
(12, 'sdfsdf', 5, 7, '2023-04-23', 34, 10, 'A102', 42, 4);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user1_id` int(11) DEFAULT NULL,
  `user2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dr_ass`
--

CREATE TABLE `dr_ass` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_ass`
--

INSERT INTO `dr_ass` (`id`, `name`, `user_id`, `position`) VALUES
(2, 'shahd', 19, 'Dr'),
(3, 'mohmed', 20, 'Student'),
(6, 'amr', 23, 'Dr');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(700) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`, `position`, `image`, `code`) VALUES
(4, 'Tecnho', 'Tour', 'TechnoTour2023@gmail.com', '$2y$10$IDy9NsF19LwodbdzuHWo0ORxEAOYs6eyurjhjph/00QxvMZe2iICy', 'Dr', '', ''),
(19, 'shahd', 'aboelkaramat', 'amrk99504@gmail.com', '$2y$10$.xo1P3.zedLTH2qUW7OYlOTv0vrObCbd26Zzh7DBozgYV5A9R2Nxu', 'Dr', '', ''),
(20, 'mohmed', 'khamis', 'mhamedkhamiis@gmail.com', '$2y$10$TSxEYNHiVe4vnaulonT6ReG88kdh.EGa8Zp.bWtETfXcldVsT617C', 'Student', '', ''),
(23, 'amr', 'khamis', 'khamisamr90@gmail.com', '$2y$10$NIojxYL9LD9/En1oIUqT/.xA7i.vSjXhwRmPfBqbFZ3o9Neh/uVoe', 'Dr', 'khamisamr90@gmail.com photo.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `r_no` varchar(100) DEFAULT NULL,
  `pc_no` int(11) DEFAULT NULL,
  `projector` varchar(50) DEFAULT NULL,
  `condetioner` varchar(50) DEFAULT NULL,
  `fixed_pc` int(11) DEFAULT NULL,
  `broken_pc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `r_no`, `pc_no`, `projector`, `condetioner`, `fixed_pc`, `broken_pc`) VALUES
(41, 'A105', 25, 'good', 'broken', 0, 0),
(42, 'A102', 0, 'good', 'good', 0, 0),
(43, 'A101', 0, 'good', 'good', 0, 0),
(44, 'A103', 0, 'good', 'good', 0, 0),
(45, 'A104', 0, 'good', 'good', 0, 0),
(46, 'A106', 0, 'good', 'good', 0, 0),
(47, 'A107', 0, 'good', 'good', 0, 0),
(48, 'A108', 0, 'good', 'good', 0, 0),
(49, 'A201', 10, 'good', 'good', 10, 0),
(50, 'A202', 10, 'good', 'good', 10, 0),
(51, 'A203', 10, 'good', 'good', 10, 0),
(52, 'A204', 0, 'good', 'good', 0, 0),
(53, 'A205', 0, 'good', 'good', 0, 0),
(54, 'A206', 0, 'good', 'good', 0, 0),
(55, 'A207', 0, 'good', 'good', 0, 0),
(56, 'A208', 0, 'good', 'good', 0, 0),
(57, 'A209', 0, 'good', 'good', 0, 0),
(58, 'A210', 0, 'good', 'good', 0, 0),
(59, 'A301', 10, 'good', 'good', 10, 0),
(60, 'A302', 10, 'good', 'good', 10, 0),
(61, 'A303', 10, 'good', 'good', 10, 0),
(62, 'A304', 0, 'good', 'good', 0, 0),
(63, 'A305', 0, 'good', 'good', 0, 0),
(64, 'A306', 0, 'good', 'good', 0, 0),
(65, 'A307', 0, 'good', 'good', 0, 0),
(66, 'A308', 0, 'good', 'good', 0, 0),
(67, 'A309', 0, 'good', 'good', 0, 0),
(68, 'A310', 0, 'good', 'good', 0, 0),
(69, 'A401', 10, 'good', 'good', 10, 0),
(70, 'A402', 10, 'good', 'good', 10, 0),
(71, 'A403', 10, 'good', 'good', 10, 0),
(72, 'A404', 0, 'good', 'good', 0, 0),
(73, 'A405', 0, 'good', 'good', 0, 0),
(74, 'A406', 0, 'good', 'good', 0, 0),
(75, 'A407', 0, 'good', 'good', 0, 0),
(76, 'A408', 0, 'good', 'good', 0, 0),
(77, 'A409', 0, 'good', 'good', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `start_time` int(9) NOT NULL,
  `end_time` int(9) NOT NULL,
  `weekday` varchar(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sub_name` varchar(50) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `book` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user1_id` (`user1_id`,`user2_id`),
  ADD KEY `user2_id` (`user2_id`);

--
-- Indexes for table `dr_ass`
--
ALTER TABLE `dr_ass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `dr_eng_dr_ass` (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_id` (`chat_id`,`from_id`,`to_id`),
  ADD KEY `from_id` (`from_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`,`user_id`,`sub_name`),
  ADD KEY `dr_eng_dr_ass7` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dr_ass`
--
ALTER TABLE `dr_ass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`user1_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`user2_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `dr_ass`
--
ALTER TABLE `dr_ass`
  ADD CONSTRAINT `dr_eng_dr_ass` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`from_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `message_ibfk_3` FOREIGN KEY (`to_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `time_table`
--
ALTER TABLE `time_table`
  ADD CONSTRAINT `dr_eng_dr_ass7` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `time_table_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
