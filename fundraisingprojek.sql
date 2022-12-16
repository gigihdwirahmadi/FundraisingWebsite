-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundraisingprojek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `born_place` varchar(70) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `born_place`, `address`, `password`, `username`, `email`, `created_at`, `updated_at`) VALUES
(1, 'gigih', 'Male', 'yoga', 'Yogyakarta', '1223', 'gigih', 'gigih@gmail.com', '0000-00-00 00:00:00', NULL),
(2, 'Yoga', 'Male', 'Yogyakarta', 'Yogyakarta', 'Yoga123', 'Yoga', 'Yoga@gmail.com\r\n', '2022-12-12 07:36:45', NULL),
(7, 'gigih', 'Male', 'yoga', 'Yogyakarta', '1223', 'gigih', 'gigih@gmail.com', '0000-00-00 00:00:00', NULL),
(8, 'khjk', 'Male', '2022-02-21', 'jjhHJHJhjhj', 'jhjhj', 'jhjh', 'gdy@gfjda', '2022-12-14 20:46:24', NULL),
(9, 'khjk', 'Male', '2022-02-21', 'jjhHJHJhjhj', '$2y$10$248NNM6FnUT7KFfZexo9teIZloYs2VvyD/9YSHk0ruP.LDJXmTdSy', 'jhjh', 'gdy@gfjda', '2022-12-14 20:47:19', NULL),
(10, 'khjk', 'Male', '2022-02-21', 'jjhHJHJhjhj', '$2y$10$cEatbGTijxTCSv7moSrQae9jlNYArC33Jdq5qm0zkPUxxEfS6I0lW', 'jhjh', 'gdy@gfjda', '2022-12-14 20:48:06', NULL),
(11, 'admin@example', 'Male', '2450-03-12', 'jhj', '$2y$10$qaNzpKTfHQGMy18AqCbaKeYvn1s7aPbWXq2TS/c3fD44aR9uqBRkK', 'admin', 'hjhjk', '2022-12-15 06:29:25', NULL),
(12, '123', 'Male', '3443-02-04', 'ghhj', '$2y$10$7e0vd0aVkS9GACk2mpPGHOLlzWr9D6cCaw6zieqNW1qv0soSKFQZy', 'fhgj', '123@gmail', '2022-12-15 06:34:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donate_program`
--

CREATE TABLE `donate_program` (
  `id` int(11) NOT NULL,
  `id_program` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `donation_total` double NOT NULL,
  `payment_id` int(10) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `coba` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_program`
--

INSERT INTO `donate_program` (`id`, `id_program`, `id_user`, `donation_total`, `payment_id`, `is_paid`, `image`, `created_at`, `updated_at`, `coba`) VALUES
(84, 30, 7, 989, 1, 1, 'larm-rmah-AEaTUnvneik-unsplash.jpg', '2022-12-16 08:09:29', NULL, NULL),
(85, 29, 7, 700000, 2, 1, 'su-nyoto-kY8m5uDIW7Y-unsplash.jpg', '2022-12-16 08:02:20', NULL, NULL),
(86, 30, 7, 9000000000, 1, 1, '', '2022-12-16 08:09:44', NULL, NULL),
(87, 32, 7, 989000000000, 1, 1, 'joel-muniz-y3ZY6qFln_g-unsplash.jpg', '2022-12-16 08:10:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donate_target`
--

CREATE TABLE `donate_target` (
  `id` int(11) NOT NULL,
  `id_target` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `donation_total` int(20) NOT NULL,
  `payment_id` int(10) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_target`
--

INSERT INTO `donate_target` (`id`, `id_target`, `id_user`, `donation_total`, `payment_id`, `is_paid`, `image`, `created_at`, `updated_at`) VALUES
(36, 14, 7, 40000, 1, 1, 'larm-rmah-AEaTUnvneik-unsplash.jpg', '2022-12-16 04:16:49', NULL),
(37, 13, 7, 60000, 1, 1, 'eberhard-grossgasteiger-iIFLDQmXPiw-unsplash.jpg', '2022-12-16 08:02:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_name` varchar(100) NOT NULL,
  `rekening` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_name`, `rekening`, `created_at`, `updated_at`) VALUES
(1, 'Bank BCA', 95848948, '2022-12-12 15:41:31', NULL),
(2, 'Bank BNI', 869568985, '2022-12-12 15:43:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_program` date NOT NULL,
  `end_program` date NOT NULL,
  `description_program` text NOT NULL,
  `donate_required` int(50) NOT NULL,
  `collected_donate` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `saldo_donate` double NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `start_program`, `end_program`, `description_program`, `donate_required`, `collected_donate`, `created_at`, `updated_at`, `saldo_donate`, `image`) VALUES
(29, 'food donation activities', '2022-12-21', '2023-01-02', 'to help the poor on the streets, we held this event', 3000000, 700000, '2022-12-16 08:02:20', NULL, 700000, 'joel-muniz-y3ZY6qFln_g-unsplash.jpg'),
(30, 'visit a remote village', '2022-02-21', '2022-12-25', 'to help the community and provide education about health', 12000000, 2147483647, '2022-12-16 08:09:44', NULL, 8999910939, 'larm-rmah-AEaTUnvneik-unsplash.jpg'),
(31, ' beach cleaning', '2022-11-12', '2022-12-13', 'to maintain the coastal area and protect the regional ecosystem', 5000000, 0, '2022-12-15 21:38:27', NULL, 0, 'ocg-saving-the-ocean-xch7jXAaqqo-unsplash.jpg'),
(32, 'conducting health outreach', '2023-02-21', '2022-04-23', 'conduct outreach about environmental health and a healthy lifestyle', 4000000, 2147483647, '2022-12-16 08:10:57', NULL, 989000000000, 'su-nyoto-kY8m5uDIW7Y-unsplash.jpg'),
(33, 'hjfdkgl', '2022-06-23', '2022-12-05', 'tfygjhkl', 56789, 0, '2022-12-16 02:08:43', NULL, 0, 'ocg-saving-the-ocean-xch7jXAaqqo-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` enum('Foundation','Individu') NOT NULL,
  `description` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `required_donate` int(30) NOT NULL,
  `collected_donate` double NOT NULL,
  `saldo_donate` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id`, `name`, `category`, `description`, `address`, `phone`, `required_donate`, `collected_donate`, `saldo_donate`, `image`, `created_at`, `updated_at`) VALUES
(13, 'nursing home donations', 'Foundation', 'donations for the equipment and care of the beautiful gems nursing home', 'jakarta', '0978867464', 50000000, 60000, 60000, 'eberhard-grossgasteiger-iIFLDQmXPiw-unsplash.jpg', '2022-12-16 08:02:07', NULL),
(14, 'orphanage renovation', '', 'repair damaged ceilings and floors and add mattress facilities', 'jakarta', '09857647849', 1000000, 40000, 40000, 'hoshino-ai-sybO0dQ8hTw-unsplash.jpg', '2022-12-16 04:16:50', NULL),
(16, 'tyguhjk', '', 'gfhgjkj', 'gjhhkhiuh', '965709509', 909909, 0, 0, 'larm-rmah-AEaTUnvneik-unsplash.jpg', '2022-12-16 02:08:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone`, `email`, `password`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'jackson', 'Yogyakarta', '76348568236', '', '', 'Male', '2022-12-12 06:39:51', NULL),
(2, 'Elsa', 'Yogyakarta', '089613451324', '', '', 'Female', '2022-12-12 06:39:51', NULL),
(4, 'gigih', 'Yogyakarta', '089748748758', 'gigih@gmail.com', '$2y$10$C4kxOMCKSEcp4zah6do8X.E86xdAlGOMpXXWNuitdjWrbZquqqYlG', 'Male', '0000-00-00 00:00:00', NULL),
(5, 'gigih', 'Yogyakarta', '089748748758', 'gigih@gmail.com', '$2y$10$n4uyJJxlZNdsNojQExpU3u0yZDN8ly3NvRTVhq4oCVnmvyONp9Yh2', 'Male', '0000-00-00 00:00:00', NULL),
(6, 'rjhfh@hgjg', 'jgjg', 'hghg', 'ghgh', '$2y$10$oNsTdXoQnCgk.75tO.wFwejVQzBw1CX2aHnU93tcQfE.JCnYKHFiS', 'Male', '2022-12-14 20:27:14', NULL),
(7, 'user', '124', '234', 'user@gmail', '$2y$10$hYIQ.3eUyAFrlwS42L5NyeHNMvQSIvnQzerqO7RNXTl8O/cs/.3Gy', 'Male', '2022-12-15 10:26:28', NULL),
(8, 'gigih', 'hjkl', '56789', 'gigih@gmail', '$2y$10$2OaIeZfGIoTyjSA2HaJq/ODumOAUN78bKMgqfHAOiMpaf4YH7/Ek.', 'Male', '2022-12-16 01:55:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `target_id` int(11) DEFAULT NULL,
  `program_id` int(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` double NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `admin_id`, `target_id`, `program_id`, `date`, `total`, `updated_at`) VALUES
(1, 1, 1, NULL, '2022-12-12 07:08:17', 100000, NULL),
(2, 2, NULL, 1, '2022-12-12 07:08:17', 100000, NULL),
(6, 12, 1, NULL, '2022-12-15 20:25:57', 989789, NULL),
(9, 12, NULL, 1, '2022-12-15 20:35:50', 90000000000000, NULL),
(10, 12, NULL, 30, '2022-12-15 23:57:22', 50, NULL),
(11, 12, NULL, 30, '2022-12-16 02:04:18', 90000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_program`
--
ALTER TABLE `donate_program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `donate_program_ibfk_2` (`id_program`);

--
-- Indexes for table `donate_target`
--
ALTER TABLE `donate_target`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donatur` (`id_user`),
  ADD KEY `donate_target_ibfk_2` (`id_target`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawal_ibfk_1` (`admin_id`),
  ADD KEY `withdrawal_ibfk_2` (`target_id`),
  ADD KEY `withdrawal_ibfk_3` (`program_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donate_program`
--
ALTER TABLE `donate_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `donate_target`
--
ALTER TABLE `donate_target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donate_program`
--
ALTER TABLE `donate_program`
  ADD CONSTRAINT `donate_program_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donate_program_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `donate_target`
--
ALTER TABLE `donate_target`
  ADD CONSTRAINT `donate_target_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donate_target_ibfk_2` FOREIGN KEY (`id_target`) REFERENCES `target` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
