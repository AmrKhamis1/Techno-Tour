-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:06 AM
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
(12, 'sdfsdf', 5, 7, '2023-04-23', 34, 10, 'A102', 42, 4),
(16, 'event test 2', 5, 7, '2023-05-10', 100, 15, 'A106', 46, 23);

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`id`, `user_id`, `caption`, `image`, `date`, `time`) VALUES
(15, 23, 'the learning i getting bigger and bigger and the world need this technology for the future ... techno tour team has made this website for the NCTU to make everything easy', '2023-04-29the learning i getting bigger and bigger and the world need this technology for the future ... techno tour team has made this website for the NCTU to make everything easy23 photo.png', '2023-04-29', '18:45:30'),
(17, 23, 'نحن بصدد التطور التيكنولوجي الحديث لذالك فريق تيكنو تور طور هذا الموقع لخدمه جامعه القاهره الجديده التيكنولوجيه لجعل كل شئ اسهل', '2023-05-01نحن بصدد التطور التيكنولوجي الحديث لذالك فريق تيكنو تور طور هذا الموقع لخدمه جامعه القاهره الجديده التيكنولوجيه لجعل كل شئ اسهل23 photo.png', '2023-05-01', '10:22:44'),
(22, 24, 'finishing status', '2023-05-10finishing status24 photo.png', '2023-05-10', '04:33:22'),
(25, 23, 'vghvgy', '2023-05-10vghvgy23 photo.png', '2023-05-10', '12:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user1_id` int(11) DEFAULT NULL,
  `user2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user1_id`, `user2_id`) VALUES
(13, 4, 24),
(4, 23, 4),
(3, 23, 23),
(11, 23, 24),
(12, 24, 24);

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
(3, 'mohmed', 20, 'Student'),
(6, 'amr', 23, 'Dr'),
(7, 'shahd', 24, 'Dr');

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
(4, 'Tecnho', 'Tour', 'TechnoTour2023@gmail.com', '$2y$10$IDy9NsF19LwodbdzuHWo0ORxEAOYs6eyurjhjph/00QxvMZe2iICy', 'Dr', NULL, ''),
(20, 'mohmed', 'khamis', 'mhamedkhamiis@gmail.com', '$2y$10$TSxEYNHiVe4vnaulonT6ReG88kdh.EGa8Zp.bWtETfXcldVsT617C', 'Student', NULL, ''),
(23, 'amr', 'khamis', 'khamisamr90@gmail.com', '$2y$10$NIojxYL9LD9/En1oIUqT/.xA7i.vSjXhwRmPfBqbFZ3o9Neh/uVoe', 'Dr', 'khamisamr90@gmail.com photo.png', ''),
(24, 'shahd', 'aboelkaramat', 'amrk99504@gmail.com', '$2y$10$9kehOHLZwmh8etMTMnqIH.24Rx6njkKJvueX9qjc0XoWWO9bbAUcG', 'Dr', 'amrk99504@gmail.com photo.png', '');

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

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `chat_id`, `from_id`, `to_id`, `message`, `date_time`) VALUES
(12, 11, 23, 24, 'hello', '2023-05-09 14:29:17'),
(13, 11, 24, 23, 'hello', '2023-05-09 14:30:04'),
(104, 11, 23, 24, 'hi', '0000-00-00 00:00:00'),
(105, 11, 23, 24, 'whats up', '0000-00-00 00:00:00'),
(107, 11, 24, 23, 'never better \'!', '0000-00-00 00:00:00'),
(108, 11, 23, 24, 'asa', '0000-00-00 00:00:00'),
(109, 11, 24, 23, 'how are you ?', '0000-00-00 00:00:00'),
(110, 11, 24, 23, 'bjbjb', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pcs`
--

CREATE TABLE `pcs` (
  `id` int(11) NOT NULL,
  `pc_num` int(11) NOT NULL,
  `room_num` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pcs`
--

INSERT INTO `pcs` (`id`, `pc_num`, `room_num`, `state`, `note`) VALUES
(1, 1, 54, 1, ''),
(2, 2, 54, 1, ''),
(3, 3, 54, 1, ''),
(4, 4, 54, 1, ''),
(5, 5, 54, 1, ''),
(6, 6, 54, 1, ''),
(7, 7, 54, 1, ''),
(8, 8, 54, 1, ''),
(9, 9, 54, 1, ''),
(10, 10, 54, 1, ''),
(11, 11, 54, 1, ''),
(12, 12, 54, 1, ''),
(13, 13, 54, 1, ''),
(14, 14, 54, 1, ''),
(15, 15, 54, 1, ''),
(16, 16, 54, 1, ''),
(17, 17, 54, 1, ''),
(18, 18, 54, 1, ''),
(19, 19, 54, 1, ''),
(20, 20, 54, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `report` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` varchar(500) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
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
(41, 'A105', 25, 'borken', 'broken', 21, 4),
(42, 'A102', 0, 'fix', 'good', 0, 0),
(43, 'A101', 0, 'good', 'good', 0, 0),
(44, 'A103', 0, 'good', 'good', 0, 0),
(45, 'A104', 0, 'good', 'good', -1, 1),
(46, 'A106', 0, 'good', 'good', 0, 0),
(47, 'A107', 0, 'good', 'good', 0, 0),
(48, 'A108', 0, 'good', 'good', 0, 0),
(49, 'A201', 10, 'good', 'good', 6, 4),
(50, 'A202', 10, 'good', 'good', 0, 0),
(51, 'A203', 10, 'good', 'good', 0, 0),
(52, 'A204', 0, 'good', 'good', 0, 0),
(53, 'A205', 0, 'good', 'good', 0, 0),
(54, 'A206', 0, 'good', 'good', 0, 0),
(55, 'A207', 0, 'good', 'good', 0, 0),
(56, 'A208', 0, 'good', 'good', 0, 0),
(57, 'A209', 0, 'good', 'good', 0, 0),
(58, 'A210', 0, 'good', 'good', 0, 0),
(59, 'A301', 10, 'good', 'good', 0, 0),
(60, 'A302', 10, 'good', 'good', 0, 0),
(61, 'A303', 10, 'good', 'good', 0, 0),
(62, 'A304', 0, 'good', 'good', 0, 0),
(63, 'A305', 0, 'good', 'good', 0, 0),
(64, 'A306', 0, 'good', 'good', 0, 0),
(65, 'A307', 0, 'good', 'good', 0, 0),
(66, 'A308', 0, 'good', 'good', 0, 0),
(67, 'A309', 0, 'good', 'good', 0, 0),
(68, 'A310', 0, 'good', 'good', 0, 0),
(69, 'A401', 10, 'good', 'good', 0, 0),
(70, 'A402', 10, 'good', 'good', 0, 0),
(71, 'A403', 10, 'good', 'good', 0, 0),
(72, 'A404', 0, 'good', 'good', -3, 3),
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
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_broadcast` (`user_id`);

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
-- Indexes for table `pcs`
--
ALTER TABLE `pcs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_num` (`room_num`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report1` (`room_id`),
  ADD KEY `report2` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dr_ass`
--
ALTER TABLE `dr_ass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `pcs`
--
ALTER TABLE `pcs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
-- Constraints for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD CONSTRAINT `user_broadcast` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`);

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
-- Constraints for table `pcs`
--
ALTER TABLE `pcs`
  ADD CONSTRAINT `pcs_ibfk_1` FOREIGN KEY (`room_num`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `report2` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`);

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
