-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 07:30 PM
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
-- Database: `flatmates`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_card`
--

CREATE TABLE `aadhar_card` (
  `u_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card_no` bigint(100) NOT NULL,
  `phone_number` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aadhar_card`
--

INSERT INTO `aadhar_card` (`u_id`, `name`, `card_no`, `phone_number`) VALUES
('FM_1001', 'mathan', 111111111111, 8870469532),
('FM_1002', 'nithi', 222222222222, 9976203099),
('FM_1003', 'abi', 333333333333, 7902871839),
('FM_1004', 'kavi', 444444444444, 9626457971),
('FM_1005', 'arun', 555555555555, 6383504650),
('FM_1006', 'sri', 666666666666, 6382436280),
('FM_1007', 'ritch', 777777777777, 9360800689),
('FM_1008', 'sanjay', 888888888888, 9994922037),
('FM_1009', 'ram', 999999999999, 9698897920),
('FM_1010', 'gowtham', 1, 7871218265);

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 441726217, 714641441, 'hai abi'),
(2, 714641441, 441726217, 'soldra'),
(3, 714641441, 441726217, 'haiiii ... ithu ipo msg pannathu'),
(4, 441726217, 714641441, 'inga irukuuu '),
(5, 714641441, 441726217, 'vanthucha'),
(6, 441726217, 714641441, 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `new_house`
--

CREATE TABLE `new_house` (
  `u_id` varchar(200) NOT NULL,
  `house_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `members` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` bigint(100) NOT NULL,
  `BHK` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ownerreg`
--

CREATE TABLE `ownerreg` (
  `u_id` varchar(100) NOT NULL,
  `r_no` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `house_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `photo_img` varchar(100) NOT NULL,
  `house_doc` varchar(100) NOT NULL,
  `aadhar_doc` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ownerreg`
--

INSERT INTO `ownerreg` (`u_id`, `r_no`, `name`, `email`, `phone_no`, `password`, `occupation`, `house_no`, `address`, `city`, `state`, `photo_img`, `house_doc`, `aadhar_doc`, `aadhar_no`) VALUES
('FMOW_1002', 0, 'nithesh', 'nitheshwaran003@gmail.com', 0, '123', 'developer', '', 'Jakkasamudram', 'Dharmapuri', 'Tamil Nadu', 'ai_chip.jpg', 'ai_chip_1.jpg', 'ai_chip_2.jpg', 1111111);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `district` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `street` varchar(100) NOT NULL,
  `room_avail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `district`, `price`, `street`, `room_avail`) VALUES
(1, 'madurai', 5000, '', ''),
(2, 'dharmapuri', 6000, '', ''),
(3, 'madurai', 4000, 'dhanihnko nagar', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_reg`
--

CREATE TABLE `tenant_reg` (
  `u_id` varchar(100) NOT NULL,
  `r_no` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `photo_img` varchar(100) NOT NULL,
  `smartcard_doc` varchar(100) NOT NULL,
  `aadhar_doc` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenant_reg`
--

INSERT INTO `tenant_reg` (`u_id`, `r_no`, `name`, `email`, `password`, `occupation`, `address`, `city`, `state`, `photo_img`, `smartcard_doc`, `aadhar_doc`, `aadhar_no`, `phone_no`, `status`) VALUES
('121', 11, '', 'nithi@gmail.com', '1', '', '', '', '', '', '', '', 123456789, 1234567890, ''),
('', 0, 'mmm', 'mailing', '', '', '', '', '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 714641441, 'nithi', 'Nitheshwaran', 'nithi@gmail.com', '202cb962ac59075b964b07152d234b70', '1683393420ai_chip.jpg', 'Active now'),
(2, 441726217, 'abi', 'abi', 'abi@gmail.com', '202cb962ac59075b964b07152d234b70', '1683393614AI.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `voter_id`
--

CREATE TABLE `voter_id` (
  `u_id` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `card_no` varchar(20) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter_id`
--

INSERT INTO `voter_id` (`u_id`, `name`, `card_no`, `phone_number`, `area`) VALUES
('FM_1001', 'mathan', '111111111111', 8870469532, 'kanyakumari'),
('FM_1002', 'nithi', '222222222222', 9976203099, 'dharmaburi'),
('FM_1003', 'abi', '333333333333', 7902871839, 'kanyakumari'),
('FM_1004', 'kavi', '444444444444', 9626457971, 'trichy'),
('FM_1005', 'arun', '555555555555', 6383504650, 'ramnadu'),
('FM_1006\r\n', 'sri', '666666666666', 6382436280, 'Perambalur'),
('FM_1007', 'ritch', '777777777777', 9360800689, 'trichy'),
('FM_1008', 'sanjay', '888888888888', 9994922037, 'Bangalore'),
('FM_1009', 'ram', '999999999999', 9698897920, 'madurai'),
('FM_1010', 'gowtham', '111122223333', 7871218265, 'madurai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voter_id`
--
ALTER TABLE `voter_id`
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
