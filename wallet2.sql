-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 12:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet2`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_categories`
--

CREATE TABLE `all_categories` (
  `rowid` int(11) NOT NULL,
  `cate_name` varchar(30) NOT NULL,
  `category_descriptions` text DEFAULT NULL,
  `cate_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_categories`
--

INSERT INTO `all_categories` (`rowid`, `cate_name`, `category_descriptions`, `cate_image`) VALUES
(1, 'ass', 'ssss', 'card1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `rowid` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `meta_mask_key` varchar(300) DEFAULT NULL,
  `user_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `forget_password` varchar(200) DEFAULT NULL,
  `failed_login` int(11) DEFAULT 0,
  `last_failed` datetime DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 1,
  `user_balance` float NOT NULL DEFAULT 0,
  `user_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rowid`, `user_email`, `user_name`, `user_password`, `meta_mask_key`, `user_status`, `created_at`, `forget_password`, `failed_login`, `last_failed`, `user_type`, `user_balance`, `user_image`) VALUES
(1, 'com@email.com', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, '2022-01-16 22:20:27', NULL, 0, NULL, 1, 0, NULL),
(2, '0xef2a8ce9079c23b8fe7d839c8b814898383ce07e', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, '2022-01-16 22:30:04', NULL, 0, NULL, 1, 0, NULL),
(3, 'admin@admin.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, 2, '2022-01-31 12:40:52', NULL, 0, '2022-01-31 08:23:55', 1, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_categories`
--
ALTER TABLE `all_categories`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`rowid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_categories`
--
ALTER TABLE `all_categories`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
