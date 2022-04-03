-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 01:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_messages`
--

CREATE TABLE `admin_messages` (
  `rowid` int(11) NOT NULL,
  `message_title` varchar(200) NOT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_mobile` varchar(20) DEFAULT NULL,
  `message_text` text DEFAULT NULL,
  `message_time` datetime DEFAULT current_timestamp(),
  `message_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `rowid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `descriptions` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `nft_id` int(11) DEFAULT NULL,
  `n_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1-Create Sale, 2-Sale Sucess, 3-Send Money, 4-Money recieve, 6, mesage, 7, Reports'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`rowid`, `title`, `descriptions`, `created_at`, `status`, `user_id`, `sale_id`, `nft_id`, `n_type`) VALUES
(1, 'User2 Created New Nft (New NFT Test 2)', 'User2 Created New Nft (New NFT Test 2) with <b>2</b> ETH and Having <b>6</b> Units, Please Approve it', '2022-02-24 15:49:41', 1, 3, NULL, 9, 1),
(2, 'Admin Created New Nft (Its new Test)', 'Admin Created New Nft (Its new Test) with <b>0.4</b> ETH and Having <b>4</b> Units, Please Approve it', '2022-03-22 16:30:47', 1, 1, NULL, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `rowid` int(11) NOT NULL,
  `metamask_key` varchar(500) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`rowid`, `metamask_key`, `update_at`) VALUES
(1, '0xef2a8ce9079c23b8fe7d839c8b814898383ce07e', '2022-02-14 15:41:21');

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
(6, 'Body Arts', 'Body Arts', 'nischal-masand-rdGF8LPkvoY-unsplash.jpg'),
(7, 'Hand Arts Super', 'Hand Arts Super', 'simon-lee-2FWcYzN7X_c-unsplash_(1).jpg'),
(8, 'Hands Art Lines', 'Hands Art Lines', 'simon-lee-ldg40aCeOXo-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_foloowers`
--

CREATE TABLE `all_foloowers` (
  `rowid` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `folower_id` int(11) NOT NULL,
  `folowwing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_foloowers`
--

INSERT INTO `all_foloowers` (`rowid`, `created_at`, `folower_id`, `folowwing_id`) VALUES
(13, '2022-03-01 15:17:47', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `all_nfts_list`
--

CREATE TABLE `all_nfts_list` (
  `rowid` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `nft_user` int(11) DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL,
  `approve_at` datetime DEFAULT NULL,
  `nft_token` varchar(260) DEFAULT NULL,
  `mining_token` varchar(260) DEFAULT NULL,
  `nft_status` tinyint(4) NOT NULL DEFAULT 0,
  `nft_price` double NOT NULL DEFAULT 0,
  `price_currency` int(11) DEFAULT NULL,
  `sale_status` tinyint(4) NOT NULL DEFAULT 0,
  `sale_type` tinyint(4) NOT NULL DEFAULT 0,
  `total_rattings` int(11) NOT NULL DEFAULT 0,
  `nft_name` varchar(150) NOT NULL,
  `nft_descriptions` text NOT NULL,
  `nft_category` int(11) DEFAULT NULL,
  `nft_file` varchar(100) DEFAULT NULL,
  `nft_unit` int(11) NOT NULL DEFAULT 1,
  `purchase_id` int(11) DEFAULT NULL,
  `on_sale` int(11) NOT NULL DEFAULT 0,
  `already_sold` int(11) NOT NULL DEFAULT 0,
  `total_royality` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_nfts_list`
--

INSERT INTO `all_nfts_list` (`rowid`, `type_id`, `created_at`, `created_by`, `nft_user`, `approve_by`, `approve_at`, `nft_token`, `mining_token`, `nft_status`, `nft_price`, `price_currency`, `sale_status`, `sale_type`, `total_rattings`, `nft_name`, `nft_descriptions`, `nft_category`, `nft_file`, `nft_unit`, `purchase_id`, `on_sale`, `already_sold`, `total_royality`) VALUES
(8, 1, '2022-02-24 12:52:13', 2, 2, NULL, NULL, '670b14728ad9902aecba32e22fa4f6bd16217716d4d9bc8.04624146', NULL, 1, 2, 1, 0, 0, 0, 'Test 1 NFT Sale', 'Its test 1 for user1 ,  with 5 items', 7, 'Employee_QR_2_(1).png', 5, NULL, 5, 0, 0),
(9, 1, '2022-02-24 15:49:41', 3, 3, NULL, NULL, '670b14728ad9902aecba32e22fa4f6bd162179b053fdf21.72116682', NULL, 1, 2, 1, 0, 0, 0, 'New NFT Test 2', 'New NFT Test 2 User 2 Testibf CCOUNT', 7, 'simon-lee-hbFKxsIqclc-unsplash.jpg', 6, NULL, 6, 0, 0),
(10, 1, '2022-03-22 16:30:47', 1, 1, NULL, NULL, '670b14728ad9902aecba32e22fa4f6bd16239eba7eed9b8.70081814', NULL, 1, 0.4, 1, 0, 0, 0, 'Its new Test', 'LOnd', 7, 'Employee_QR.png', 4, NULL, 4, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `nft_reports`
--

CREATE TABLE `nft_reports` (
  `rowid` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sale_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nft_id` int(11) DEFAULT NULL,
  `reprt_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1; defult Piblic,',
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nft_sales`
--

CREATE TABLE `nft_sales` (
  `rowid` int(11) NOT NULL,
  `nft_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `sale_ststus` tinyint(4) NOT NULL DEFAULT 0,
  `sale_price` double NOT NULL DEFAULT 0,
  `sale_tax` double NOT NULL DEFAULT 0,
  `paid_price` double NOT NULL DEFAULT 0,
  `price_transfer_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `sale_type` tinyint(4) NOT NULL DEFAULT 0,
  `expire_at` datetime DEFAULT NULL,
  `sale_at` datetime DEFAULT NULL,
  `complete_at` datetime DEFAULT NULL,
  `bidding_sale` tinyint(4) NOT NULL DEFAULT 0,
  `total_star` int(11) NOT NULL DEFAULT 0,
  `total_units` int(11) NOT NULL DEFAULT 1,
  `paid_tax` double NOT NULL DEFAULT 0,
  `paid_net` double NOT NULL DEFAULT 0,
  `transaction_id1` varchar(500) DEFAULT NULL,
  `transaction_id2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft_sales`
--

INSERT INTO `nft_sales` (`rowid`, `nft_id`, `owner_id`, `buyer_id`, `sale_ststus`, `sale_price`, `sale_tax`, `paid_price`, `price_transfer_status`, `created_at`, `sale_type`, `expire_at`, `sale_at`, `complete_at`, `bidding_sale`, `total_star`, `total_units`, `paid_tax`, `paid_net`, `transaction_id1`, `transaction_id2`) VALUES
(6, 8, 2, NULL, 0, 2.000000001, 0, 0, 0, '2022-02-24 15:33:24', 0, '2022-02-28 07:14:00', NULL, NULL, 1, 0, 2, 0, 0, NULL, NULL),
(7, 9, 3, 1, 1, 2.000000001, 0, 2.000000001, 1, '2022-02-24 15:50:42', 0, '2022-03-12 19:50:00', '2022-03-03 09:03:00', NULL, 2, 0, 3, 0.090000000045, 6.090000003045, 'ffggg', NULL),
(9, 9, 3, NULL, 0, 0.500000001, 0, 0, 0, '2022-02-24 17:31:47', 0, '2022-02-26 21:31:00', NULL, NULL, 2, 0, 1, 0, 0, NULL, NULL),
(10, 8, 2, NULL, 0, 2.000000001, 0, 0, 0, '2022-03-01 11:20:30', 0, '2022-03-26 15:20:00', NULL, NULL, 1, 0, 2, 0, 0, NULL, NULL),
(11, 10, 1, NULL, 0, 0.400000001, 0, 0, 0, '2022-03-23 16:37:28', 0, '2022-03-19 20:37:00', NULL, NULL, 2, 0, 4, 0, 0, NULL, NULL),
(12, 9, 3, NULL, 0, 2.000000001, 0, 0, 0, '2022-03-23 16:47:30', 0, '2022-03-27 20:47:00', NULL, NULL, 2, 0, 2, 0, 0, NULL, NULL),
(13, 8, 2, NULL, 0, 2.000000001, 0, 0, 0, '2022-03-23 16:49:57', 0, '2022-04-02 20:49:00', NULL, NULL, 2, 0, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nft_sales_bids`
--

CREATE TABLE `nft_sales_bids` (
  `rowid` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `bid_amount` double NOT NULL DEFAULT 0,
  `bid_tax` double NOT NULL DEFAULT 0,
  `total_amount` double NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `bid_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft_sales_bids`
--

INSERT INTO `nft_sales_bids` (`rowid`, `sale_id`, `bid_amount`, `bid_tax`, `total_amount`, `user_id`, `created_at`, `bid_status`) VALUES
(7, 0, 1, 0.2, 1.2, 1, '2022-03-01 15:21:05', 1),
(8, 0, 0.000003, 0.0000006, 0.0000036, 1, '2022-03-23 20:32:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nft_types`
--

CREATE TABLE `nft_types` (
  `rowid` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sale_comments`
--

CREATE TABLE `sale_comments` (
  `rowid` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_time` datetime DEFAULT NULL,
  `comment_text` text NOT NULL,
  `comment_rattings` int(11) NOT NULL DEFAULT 0,
  `toal_ratting_number` int(11) NOT NULL DEFAULT 0,
  `comment_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sale_rattings`
--

CREATE TABLE `sale_rattings` (
  `rowid` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `ratting_type` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_rattings`
--

INSERT INTO `sale_rattings` (`rowid`, `sale_id`, `user_id`, `created_at`, `update_at`, `ratting_type`) VALUES
(5, 6, 2, '2022-02-24 19:58:42', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sal_purchase_record`
--

CREATE TABLE `sal_purchase_record` (
  `rowid` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `buyer_user` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sub_total` double NOT NULL DEFAULT 0,
  `tax_amount` double NOT NULL DEFAULT 0,
  `total_amount` double NOT NULL DEFAULT 0,
  `buyer_pay_status` tinyint(4) NOT NULL DEFAULT 0,
  `admoin_pay_status` tinyint(4) NOT NULL DEFAULT 0,
  `seller_pay_status` tinyint(4) NOT NULL DEFAULT 0,
  `nft_file` varchar(500) DEFAULT NULL,
  `sale_status` tinyint(4) NOT NULL DEFAULT 0,
  `buyer_inint_payment` datetime DEFAULT NULL,
  `buyer_admin_confirm` datetime DEFAULT NULL,
  `seller_init_payment` datetime DEFAULT NULL,
  `seller_confirm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `user_image` varchar(100) DEFAULT NULL,
  `user_bio` text DEFAULT NULL,
  `total_foloowings` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rowid`, `user_email`, `user_name`, `user_password`, `meta_mask_key`, `user_status`, `created_at`, `forget_password`, `failed_login`, `last_failed`, `user_type`, `user_balance`, `user_image`, `user_bio`, `total_foloowings`) VALUES
(1, 'admin@admin.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '0xef2a8ce9079c23b8fe7d839c8b814898383ce07e', 1, '2022-01-16 22:20:27', '', 0, NULL, 2, 0, 'WhatsApp_Image_2021-06-10_at_3_52_50_AM.jpeg', 'sssssssssssssss', 1),
(2, 'user1@mail.com', 'User1', 'e10adc3949ba59abbe56e057f20f883e', '0xef2a8ce9079c23b8fe7d839c8b814898383ce07e', 1, '2022-01-16 22:30:04', NULL, 0, NULL, 1, 0, 'IMG_4914_-_Copy.JPG', 'No Nia', 0),
(3, 'user2@mail.com', 'User2', 'e10adc3949ba59abbe56e057f20f883e', '0xef2a8ce9079c23b8fe7d839c8b814898383ce07e', 1, '2022-01-31 12:40:52', NULL, 0, '2022-01-31 08:23:55', 1, 0, NULL, NULL, 1),
(4, 'user3@mail.com', 'User3', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, '2022-02-13 00:43:22', NULL, 0, NULL, 1, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_chat`
--

CREATE TABLE `user_chat` (
  `rowid` int(11) NOT NULL,
  `sender_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:user, 2;admin',
  `user_id` int(11) NOT NULL,
  `message_text` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_messages`
--
ALTER TABLE `admin_messages`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `all_categories`
--
ALTER TABLE `all_categories`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `all_foloowers`
--
ALTER TABLE `all_foloowers`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `all_nfts_list`
--
ALTER TABLE `all_nfts_list`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `nft_reports`
--
ALTER TABLE `nft_reports`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `nft_sales`
--
ALTER TABLE `nft_sales`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `nft_sales_bids`
--
ALTER TABLE `nft_sales_bids`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `nft_types`
--
ALTER TABLE `nft_types`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `sale_comments`
--
ALTER TABLE `sale_comments`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `sale_rattings`
--
ALTER TABLE `sale_rattings`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `sal_purchase_record`
--
ALTER TABLE `sal_purchase_record`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`rowid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_messages`
--
ALTER TABLE `admin_messages`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_categories`
--
ALTER TABLE `all_categories`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `all_foloowers`
--
ALTER TABLE `all_foloowers`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `all_nfts_list`
--
ALTER TABLE `all_nfts_list`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nft_reports`
--
ALTER TABLE `nft_reports`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nft_sales`
--
ALTER TABLE `nft_sales`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nft_sales_bids`
--
ALTER TABLE `nft_sales_bids`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nft_types`
--
ALTER TABLE `nft_types`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_comments`
--
ALTER TABLE `sale_comments`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_rattings`
--
ALTER TABLE `sale_rattings`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sal_purchase_record`
--
ALTER TABLE `sal_purchase_record`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
