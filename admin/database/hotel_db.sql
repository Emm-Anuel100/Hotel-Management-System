-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 11:43 PM
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
  `email` varchar(100) NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `booked_cid` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checked`
--

INSERT INTO `checked` (`id`, `ref_no`, `room_id`, `name`, `contact_no`, `email`, `date_in`, `date_out`, `booked_cid`, `status`, `date_updated`) VALUES
(230, '4489637689\n', 35, 'Emmanuel Brenda', '08121669013', 'chinweokwuemmanuel2004@gmail.com', '2024-09-22 20:47:00', '2024-09-25 20:47:00', 15, 1, '2024-09-23 11:44:38'),
(231, '8014572028\n', 31, 'Emmanuel john dan', '07066405052', 'chinweokwuemmanuel2004@gmail.com', '2024-09-22 20:48:00', '2024-09-24 20:48:00', 20, 2, '2024-09-23 11:09:36'),
(232, '1608992434\n', 30, 'Emmanuel Brendan', '08121669012', 'chinweokwuemmanuel2004@gmail.com', '2024-09-22 20:48:00', '2024-09-26 20:48:00', 14, 2, '2024-09-23 10:08:08'),
(233, '6670462395\n', 31, 'Ola David', '08121669013', 'chinweokwuemmanuel2004@gmail.c', '2024-09-22 21:00:00', '2024-09-25 21:00:00', 14, 2, '2024-09-23 10:08:02'),
(234, '3586404308\n', 33, 'emmy', '12', 'emmy2004@gmail.com', '2024-09-22 22:18:00', '2024-09-23 22:18:00', 0, 2, '2024-09-23 10:07:45'),
(236, '551770140\n', 31, 'Emmanuel Dave', '545454', 'emmanuelodel75@gmail.come', '2024-09-23 12:20:00', '2024-09-25 12:20:00', 0, 1, '2024-09-23 11:21:31'),
(237, '5544312435\n', 48, 'Emmanuel Brendan', '08121669013', 'chinweokwuemmanuel2004@gmail.com', '2024-09-23 13:08:00', '2024-09-24 13:08:00', 0, 1, '2024-09-23 12:09:06');
(230, '8803342262\n', 0, 'Emmanuel Brendan', '08121669013', 'chinweokwuemmanuel2004@gmail.com', '2024-09-22 20:47:00', '2024-09-25 20:47:00', 15, 0, '2024-09-22 19:47:09'),
(231, '5022271750\n', 0, 'Emmanuel Brendan', '08121669013', 'chinweokwuemmanuel2004@gmail.com', '2024-09-22 20:48:00', '2024-09-25 20:48:00', 20, 0, '2024-09-22 19:48:13'),
(232, '1608992434\n', 30, 'Emmanuel Brendan', '08121669012', 'chinweokwuemmanuel2004@gmail.com', '2024-09-22 20:48:00', '2024-09-26 20:48:00', 14, 1, '2024-09-22 19:53:32'),
(233, '6670462395\n', 31, 'Ola David', '08121669013', 'chinweokwuemmanuel2004@gmail.c', '2024-09-22 21:00:00', '2024-09-25 21:00:00', 14, 1, '2024-09-22 20:01:35'),
(234, '7543445108\n', 32, 'emmy', '12', 'emmy2004@gmail.com', '2024-09-22 22:18:00', '2024-09-23 22:18:00', 0, 1, '2024-09-22 21:19:08');


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `timestamp`) VALUES
(1, 'Emmanuel Brendan', 'chinweokwuemmanuel2004@gmail.com', 'gg', '2024-09-23 08:55:22'),
(2, 'Emmanuel Brendan', 'chinweokwuemmanuel2004@gmail.com', 'hello world', '2024-09-23 08:55:22'),
(3, 'Emmanuel Brendan', 'chinweokwuemmanuel2004@gmail.com', 'wzxecrtvbyunm,iyuttrdy', '2024-09-23 08:55:22'),
(4, 'Emmanuel Brendan', 'chinweokwuemmanuel2004@gmail.com', 'ERTYUNM,', '2024-09-23 08:55:22'),
(5, 'lanre', 'Obah', 'hi', '2024-09-23 09:23:06'),
(6, 'Emmanuel Brendan', 'chinweokwuemmanuel2004@gmail.com', 'gg', '2024-09-23 11:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email`, `timestamp`) VALUES
(1, 'chinweokwuemmanuel2004@gmail.com', '2024-09-23 08:53:11'),
(3, 'kenny@gmail.com', '2024-09-23 08:53:11'),
(6, 'chinweokwuemmanuel2004@gmail.com', '2024-09-23 08:53:11'),
(7, 'john@gmail.com', '2024-09-23 08:53:11'),
(13, 'Obah', '2024-09-23 09:23:06'),
(14, 'chinweokwuemmanuel2004@gmail.com', '2024-09-23 11:11:08');

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
(30, 'room 120A', 14, 0),
(31, 'room 125B', 15, 1),
(32, 'room 124C', 13, 0),
(33, 'room 120D', 14, 0),
(34, 'room 125n', 13, 0),
(35, 'room 120P', 15, 1),
(30, 'room 120A', 14, 1),
(31, 'room 125B', 15, 1),
(32, 'room 124C', 13, 1),
(33, 'room 120D', 14, 0),
(34, 'room 125n', 13, 0),
(35, 'room 120P', 15, 0),
(36, 'room 120E', 14, 0),
(39, 'room 120S', 14, 0),
(41, 'room 125P', 18, 0),
(42, 'room 23R', 18, 0),
(43, 'room 120L', 20, 0),
(44, 'room 120rft', 20, 0),
(45, 'room 120der', 18, 0),
(47, 'room 120ert', 18, 0),
(48, 'room 102', 19, 1);
(45, 'room 120der', 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `capacity` int(50) NOT NULL COMMENT 'max. room capacity',
  `services` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `price`, `capacity`, `services`, `cover_img`) VALUES
(13, 'vip', 2000, 3, '	Wifi, Television, Bathroom, Kitchen', '1723553100_notificationImg2.jpg'),
(14, 'regular', 3000, 2, 'wifi', '1723553100_notificationImg1.jpg'),
(15, 'platinum', 55000, 2, '	Wifi, Television, Bathroom, Kitchen', '1723553160_room-3.jpg'),
(18, 'Gold', 20000, 2, '	Television, Bathroom, Kitchen', '1723684740_room-details.jpg'),
(15, 'platinum', 55000, 1, '	Wifi, Television, Bathroom, Kitchen', '1723553160_room-3.jpg'),
(18, 'Gold', 20000, 3, '	Television, Bathroom, Kitchen', '1723684740_room-details.jpg'),
(19, 'Kings', 9997, 2, '	Wifi, Television, Bathroom, Kitchen', '1723684800_room-b3.jpg'),
(20, 'luxury', 85000, 3, 'hh', '1724077200_blog-1.jpg');

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
(1, 'Sona Hotel Abuja', 'info@sonahotel.com.ng', '+2348121669012', '1726763100_Tech-wallpaper.jpg');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;


--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`

  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
