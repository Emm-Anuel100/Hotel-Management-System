-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 04:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `checked`
--

CREATE TABLE `checked` (
  `id` int(30) NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `booked_cid` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checked`
--

INSERT INTO `checked` (`id`, `ref_no`, `room_id`, `name`, `contact_no`, `date_in`, `date_out`, `booked_cid`, `status`, `date_updated`) VALUES
(32, '1290269475\n', 30, 'Kelechi  Ikechukwu', '123', '2024-08-13 15:02:00', '2024-08-16 15:02:00', 0, 2, '2024-08-13 14:12:58'),
(33, '6574553447\n', 36, 'Brendan Emmanuel Chi', '456789', '2024-08-14 20:10:00', '2024-08-16 20:10:00', 0, 2, '2024-08-13 14:19:24'),
(34, '6149886023\n', 30, 'ella mattew', '987654', '2024-08-13 15:23:00', '2024-08-14 15:23:00', 0, 2, '2024-08-13 14:46:05'),
(36, '2651602766\n', 39, 'happy O...', '45678', '2024-08-13 15:38:00', '2024-08-14 15:38:00', 0, 2, '2024-08-13 14:56:39'),
(37, '5627765193\n', 31, 'Glory Akpan', '456788654', '2024-08-13 15:44:00', '2024-08-14 15:44:00', 0, 2, '2024-08-13 14:51:36'),
(38, '321456042\n', 30, 'Chinweokwu Emmanuel', '02283883', '2024-08-13 16:27:00', '2024-08-16 16:27:00', 0, 2, '2024-08-13 15:48:07'),
(56, '9365949968\n', 0, 'ggrgrgr', '545464', '2024-08-15 05:00:00', '2024-08-18 05:00:00', 14, 2, '2024-08-15 06:08:18'),
(58, '9227084219\n', 0, 'emma', 'emma', '2024-08-15 05:04:00', '2024-08-18 05:04:00', 15, 2, '2024-08-15 04:15:14'),
(63, '9904772062\n', 36, '45678', '456789', '2024-08-15 05:31:00', '2024-08-18 05:31:00', 15, 2, '2024-08-19 15:11:30'),
(69, '7437712007\n', 0, '4567', '4567', '2024-08-15 05:43:00', '2024-08-20 05:43:00', 15, 2, '2024-08-15 06:10:59'),
(78, '9599126038\n', 0, 'ella', '345678', '2024-08-15 07:16:00', '2024-08-18 07:16:00', 13, 2, '2024-08-19 13:30:22'),
(79, '9618203891\n', 32, 'kosi', '345', '2024-08-15 07:18:00', '2024-08-18 07:18:00', 13, 1, '2024-09-21 14:37:02'),
(80, '2246689479\n', 0, 'licy', '56', '2024-08-15 07:22:00', '2024-08-18 07:22:00', 14, 0, '2024-08-15 06:22:14'),
(81, '5107066749\n', 0, 'rr', '44', '2024-08-15 07:23:00', '2024-08-18 07:23:00', 15, 2, '2024-08-15 07:01:28'),
(82, '5706806195\n', 0, 'Brendan Emmanuel', '08121669013', '2024-08-16 16:46:00', '2024-08-23 16:46:00', 13, 2, '2024-08-19 13:11:25'),
(83, '2826230958\n', 0, 'kenny david', '08121669013', '2024-08-17 18:11:00', '2024-08-20 18:11:00', 13, 2, '2024-08-17 17:19:25'),
(84, '6267122418\n', 31, 'trt', 'trt', '2024-08-17 18:17:00', '2024-08-18 18:17:00', 0, 2, '2024-08-17 17:19:01'),
(85, '7657881891\n', 0, 'Emmanuel Lawrence', '+234781234656', '2024-08-19 15:32:00', '2024-08-21 15:32:00', 13, 0, '2024-08-19 14:32:31'),
(86, '8546613198\n', 0, 'Brendan Emmanuel Ejike', '08121669011', '2024-08-19 15:33:00', '2024-08-21 15:33:00', 14, 0, '2024-08-19 14:33:51'),
(87, '5323835403\n', 0, 'dera', '345678', '2024-08-19 15:34:00', '2024-08-21 15:34:00', 14, 2, '2024-09-21 14:45:55'),
(88, '8140403719\n', 31, 'Brendan Emmanuel C.', '08121669013', '2024-09-09 23:39:00', '2024-09-14 23:39:00', 15, 1, '2024-09-21 15:29:05'),
(89, '8279358352\n', 43, 'Brendan Emmanuel', '08121669013', '2024-12-19 01:48:00', '2024-12-20 01:48:00', 0, 2, '2024-09-19 00:50:01'),
(90, '1873990988\n', 31, '', '', '2024-09-10 12:30:00', '2024-09-21 12:30:00', 15, 2, '2024-09-21 15:18:45'),
(91, '7234265997\n', 0, '', '', '2024-09-10 09:55:00', '2024-09-21 09:55:00', 15, 2, '2024-09-21 14:35:24'),
(92, '8853087787\n', 36, 'hillary', '12345', '2024-09-21 15:38:00', '2024-09-23 15:38:00', 0, 2, '2024-09-21 15:27:25'),
(94, '4179114063\n', 36, 'lola', '345678', '2024-09-21 16:33:00', '2024-09-23 16:33:00', 0, 1, '2024-09-21 15:34:21'),
(95, '2322445188\n', 43, 'Ikenna', '0806', '2024-09-21 16:37:00', '2024-09-26 16:37:00', 0, 1, '2024-09-21 15:38:07'),
(96, '6940740978\n', 41, 'kelechi john', '123456789', '2024-09-21 04:30:00', '2024-09-23 04:30:00', 15, 1, '2024-09-21 15:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Available , 1= Unvailables'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `category_id`, `status`) VALUES
(30, 'room 120A', 14, 1),
(31, 'room 125B', 15, 1),
(32, 'room 124C', 13, 1),
(33, 'room 120D', 14, 1),
(34, 'room 125n', 13, 1),
(35, 'room 120P', 15, 1),
(36, 'room 120E', 14, 1),
(39, 'room 120S', 14, 1),
(41, 'room 125P', 18, 1),
(42, 'room 23R', 18, 0),
(43, 'room 120L', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `capacity` int(50) NOT NULL COMMENT 'max. room capacity',
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `price`, `capacity`, `cover_img`) VALUES
(13, 'vip', 25000, 3, '1723553100_notificationImg2.jpg'),
(14, 'regular', 20000, 2, '1723553100_notificationImg1.jpg'),
(15, 'platinum', 55000, 1, '1723553160_room-3.jpg'),
(18, 'Gold', 12000, 3, '1723684740_room-details.jpg'),
(19, 'Kings', 32000, 2, '1723684800_room-b3.jpg'),
(20, 'luxury', 23000, 3, '1724077200_blog-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `hotel_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `hotel_name`, `email`, `contact`, `cover_img`) VALUES
(1, 'Likson Hotel Abuja', 'mail@liksonhotel.com.ng', '+2348121669013', '1726763100_Tech-wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Kelechi Joe', 'admin', 'admin', 1),
(6, 'David Savage', 'savvy', 'savvy', 2),
(7, 'Adebayo Kike', 'ade', 'ade', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checked`
--
ALTER TABLE `checked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checked`
--
ALTER TABLE `checked`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
