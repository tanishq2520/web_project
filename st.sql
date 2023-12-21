-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 06:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmst`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `gallery` longtext DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `language` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_name`, `detail`, `category_id`, `image`, `pdf`, `gallery`, `video_link`, `author`, `language`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'ghf', '', 0, '', NULL, NULL, NULL, '', 0, '2023-12-08 12:09:56', 0, '0000-00-00 00:00:00', 0),
(2, 'xbfb', '', 0, '', NULL, NULL, NULL, '', 0, '2023-12-08 12:10:10', 0, '0000-00-00 00:00:00', 0),
(3, 'tt', '', 0, '', NULL, NULL, NULL, '', 0, '2023-12-14 10:51:33', 0, '0000-00-00 00:00:00', 0),
(4, 'fg', '', 0, '', NULL, NULL, NULL, '', 0, '2023-12-14 11:02:47', 0, '0000-00-00 00:00:00', 0),
(5, 'tr', '', 0, '', NULL, NULL, NULL, '', 0, '2023-12-14 12:05:11', 0, '0000-00-00 00:00:00', 0),
(6, 'ggf', '', 0, '', NULL, NULL, NULL, '', 0, '2023-12-19 12:40:29', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catergory`
--

CREATE TABLE `catergory` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `detail` longtext DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` bigint(20) DEFAULT NULL,
  `image` bigint(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=true,0=false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=true , 0=false',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email_id`, `password`, `description`, `status`, `created_date`, `created_by`, `update_date`, `updated_by`) VALUES
(1, 'regd', '', '', '', 1, '2023-12-08 11:37:42', NULL, NULL, NULL),
(2, 'gfgf', '', '', '', 1, '2023-12-08 11:38:01', NULL, NULL, NULL),
(3, 're', '', '', '', 1, '2023-12-13 20:13:41', NULL, NULL, NULL),
(4, '111', '', '', '', 1, '2023-12-13 20:14:08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(20) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'Priya', 'Jain'),
(2, 'rr', 'fdgd'),
(3, 'pj', 'fdgd'),
(4, 'tyt', 'ds'),
(5, '44', 'hjh'),
(6, 'priya', 'update ke liya'),
(7, 'priya', 'update ke liya'),
(8, 'priya', 'update ke liya'),
(9, 'priya', 'update k liye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catergory`
--
ALTER TABLE `catergory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catergory`
--
ALTER TABLE `catergory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
