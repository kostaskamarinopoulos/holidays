-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2023 at 11:24 PM
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
-- Database: `epignosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_start` varchar(10) DEFAULT NULL,
  `request_end` varchar(10) DEFAULT NULL,
  `reason` text NOT NULL DEFAULT '',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `user_id`, `request_start`, `request_end`, `reason`, `status`, `updated_at`, `created_at`) VALUES
(17, 1, '22-07-2018', '25-07-2018', '', 1, '2023-01-21 07:11:55', '2023-01-21 07:11:55'),
(18, 1, '22-07-2018', '22-07-2018', '', 0, '2023-01-21 07:33:22', '2022-01-21 07:33:22'),
(19, 1, '06-02-2023', '10-02-2023', '', 0, '2023-01-21 10:21:59', '2023-01-21 10:21:59'),
(20, 1, '06-02-2023', '10-02-2023', '', 0, '2023-01-21 10:22:37', '2023-01-21 10:22:37'),
(21, 1, '22-07-2018', '22-07-2018', '', 0, '2023-01-21 10:23:19', '2023-01-21 10:23:19'),
(25, 2, '22-07-2018', '22-07-2018', 'sww', 0, '2023-01-21 10:31:57', '2023-01-21 10:31:57'),
(26, 2, '22-07-2018', '22-07-2018', 'sffefe', 0, '2023-01-21 10:40:52', '2023-01-21 10:40:52'),
(28, 2, '22-07-2018', '27-07-2018', '999', 0, '2023-01-21 14:17:13', '2023-01-21 14:17:13'),
(29, 2, '22-07-2024', '29-07-2018', '', 0, '2023-01-21 14:22:53', '2024-01-21 14:22:53'),
(32, 3, '01-01-2021', '30-01-2021', 'ee', 0, '2023-01-22 07:18:49', '2023-01-22 07:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(3) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'ceo'),
(2, 'manager'),
(3, 'employee'),
(6, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'kostas', 'kam', 'manager@gmail.com', '1234', '2023-01-19 11:56:29', '2023-01-19 13:56:29'),
(2, 'Hellen', 'Davies', 'employee@gmail.com', '1234', '2023-01-19 12:08:49', '2023-01-19 14:08:49'),
(3, 'admin', 'admin', 'admin@gmail.com', '12345', '2023-01-19 17:55:02', '2023-01-19 19:55:02'),
(7, 'test  ', 'admintest  ', 'test@gmail.test', NULL, '2023-01-22 06:56:16', '2023-01-21 18:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 2),
(3, 2, 3),
(4, 3, 6),
(7, 7, 6),
(8, 8, 6),
(9, 9, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
