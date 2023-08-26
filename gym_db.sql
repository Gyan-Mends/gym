-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 10:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(30) NOT NULL,
  `member_id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_id`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `address`, `email`, `date_created`) VALUES
(7, 103197, 'Angel Jude', 'R', 'Suarez', 'Male', '09569666494', 'Bacolod', 'suarez@yahoo.com', '2021-03-10 11:41:06'),
(10, 199087, 'Nikko', 'A', 'Curaza', 'Male', '09051223198', 'Secret', 'nikko@yahoo.com', '2021-03-10 11:41:06'),
(11, 199233, 'Arnulfo', 'A', 'Rebollosa', 'Male', '09058728883', 'Secret', 'reb@yahoo.com', '2021-03-10 11:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(30) NOT NULL,
  `package` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package`, `description`, `amount`) VALUES
(4, 'Premium Package', 'Sample Package', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(30) NOT NULL,
  `registration_id` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `remarks` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=registration, 2= monthly payment',
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `registration_id`, `amount`, `remarks`, `type`, `date_created`) VALUES
(1, 2, 4500, 'First payment', 2, '2020-10-21 14:39:26'),
(2, 2, 3500, 'payment for november', 2, '2020-10-21 14:39:52'),
(3, 6, 5000, 'good', 2, '2021-03-10 12:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(30) NOT NULL,
  `plan` int(30) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan`, `amount`) VALUES
(1, 12, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `first_name`, `last_name`, `role`, `phone_number`, `gender`, `username`, `email`, `password`, `registration_date`, `profile`) VALUES
(1, 'Ivan', 'Hobbs', 'admin', '+1 (451) 483-77', 'Female', 'zanal', 'liqypegy@mailinator.com', '$2y$10$96EmnEvz/.BhB9oVtJHZtuGKoj01TaYdGTDVhayD1Sxj0d53O0CBG', '2023-08-15 00:00:00', 'C:fakepath5be45166965331.Y3JvcCw2MDM0LDQ3MjAsMCww.jpg'),
(2, 'Gillian', 'Solomon', 'admin', '+1 (389) 803-93', 'Male', 'lises', 'nymabezo@mailinator.com', '$2y$10$PfMJWm2P8aNsinTR3PP5dOZpN21qrQaoGdirwiLQC/cNOVz.yKVjO', '2023-08-15 00:00:00', 'C:fakepath5be45166965331.Y3JvcCw2MDM0LDQ3MjAsMCww.jpg'),
(3, 'Gillian', 'Solomon', 'admin', '+1 (389) 803-93', 'Male', 'lises', 'nymabezo@mailinator.com', '$2y$10$EylZ3mBpAhSlzJTXgyoWrui3Gm0XrPnzSLLhWE9OwpCOJDvMDX4le', '2023-08-15 00:00:00', 'C:fakepath5be45166965331.Y3JvcCw2MDM0LDQ3MjAsMCww.jpg'),
(4, 'Alfonso Anderson', 'Victoria Ramirez', 'trainer', '+1 (425) 612-31', 'Female', 'faruk', 'bykinocynu@mailinator.com', '$2y$10$TEfqhiuncA6yQs3jpDcw0.8jMJOjUrNPGe0/x1SmQou1MDV85Rcq6', '2023-08-16 00:00:00', 'C:fakepath5be45166965331.Y3JvcCw2MDM0LDQ3MjAsMCww.jpg'),
(5, 'Phillip Stewart', 'Dennis Blevins', 'member', '+1 (741) 237-15', 'Male', 'turimataxe', 'qezyfotoje@mailinator.com', '$2y$10$RV2rf0pIgWZ1I.BTLVi3GOLqFK0x41lLGxH3ktTElsW0F2bDi3pPW', '2023-08-16 00:00:00', 'C:fakepathggg.jpg'),
(6, 'Mason Montoya', 'Raphael James', 'admin', '+1 (335) 814-47', 'Male', 'lysyqa', 'hoqerob@mailinator.com', '$2y$10$oJFNfVzqoo4ki83QYegBo.epUX/ZyagV.MGAbHimRb0zfVC9pDaHK', '2023-08-16 00:00:00', 'C:fakepathgyan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
  `id` int(30) NOT NULL,
  `member_id` int(30) NOT NULL,
  `plan_id` int(30) NOT NULL,
  `package_id` int(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `trainer_id` tinyint(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1= Active',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_info`
--

INSERT INTO `registration_info` (`id`, `member_id`, `plan_id`, `package_id`, `start_date`, `end_date`, `trainer_id`, `status`, `date_created`) VALUES
(2, 5, 1, 2, '2020-10-21', '2021-10-21', 0, 0, '2020-10-21 00:00:00'),
(3, 5, 1, 2, '2020-10-21', '2021-10-21', 0, 0, '2020-10-21 00:00:00'),
(4, 6, 1, 2, '2019-10-19', '2020-10-19', 0, 0, '2020-10-21 00:00:00'),
(5, 6, 1, 2, '2020-10-21', '2021-10-21', 0, 1, '2020-10-21 00:00:00'),
(6, 7, 1, 2, '2021-03-10', '2022-03-10', 2, 0, '2021-03-10 12:27:18'),
(7, 5, 1, 2, '2021-03-10', '2022-03-10', 2, 0, '2021-03-10 12:27:49'),
(8, 11, 1, 4, '2021-03-10', '2022-03-10', 2, 0, '2021-03-10 14:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(30) NOT NULL,
  `member_id` int(30) NOT NULL,
  `dow` text NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `tool_name` varchar(255) NOT NULL,
  `tool_type` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `e_condition` varchar(50) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `usage_instructions` text NOT NULL,
  `tool_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `contact`, `email`, `rate`) VALUES
(2, 'Adones Evangelista', '09098723987', 'adones@gmail.com', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `date`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '0000-00-00'),
(2, 'member@gmail.com', 'member', 'member', '0000-00-00'),
(3, 'trainer@gmail.com', 'trainer', 'trainer', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_info`
--
ALTER TABLE `registration_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration_info`
--
ALTER TABLE `registration_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
