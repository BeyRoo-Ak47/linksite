-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 03:23 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webtoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_category`
--

CREATE TABLE `site_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icons` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_category`
--

INSERT INTO `site_category` (`id`, `name`, `icons`, `created_at`) VALUES
(1, '카지노', 'uploads/1/2024-08/0243c2c48bab4767dedb2108758c5312.png', '2024-08-19 10:04:00'),
(2, '검증사이트', 'uploads/1/2024-08/f6ea9b6d080a1c18a6fd5ed9fd27d6e2.png', '2024-08-19 10:06:00'),
(3, '영화/TV', 'uploads/1/2024-08/24032db7ddea574fdbfcf1b51e5a9672.png', '2024-08-19 10:06:12'),
(4, '성인', 'uploads/1/2024-08/d588b6c379edba73d5bb9fbb92bf88db.png', '2024-08-19 10:06:24'),
(5, '토토', 'uploads/1/2024-08/f4d10eb03d3b3839dae8916ef13cffe8.png', '2024-08-19 10:06:39'),
(6, '스포츠중계', 'uploads/1/2024-08/f1cf73f4f15c78fa78a1979ea6cf3ff0.png', '2024-08-19 10:06:50'),
(7, '성인용품', 'uploads/1/2024-08/d588b6c379edba73d5bb9fbb92bf88db.png', '2024-08-19 10:07:00'),
(8, '오피/유흥', 'uploads/1/2024-08/d588b6c379edba73d5bb9fbb92bf88db.png', '2024-08-19 10:07:09'),
(9, '웹툰', 'uploads/1/2024-08/4bc58c7dd54782bab73eb5eac4afd137.png', '2024-08-19 10:07:21'),
(10, '토렌트', 'uploads/1/2024-08/992c832a15e430eb9774509385231302.png', '2024-08-19 10:07:30'),
(11, '커뮤니티', 'uploads/1/2024-08/33cb4b0e80fe7d4ae4588a0ae2b9a847.png', '2024-08-19 10:07:42'),
(12, '교민커뮤니티', 'uploads/1/2024-08/4d01616eb249ad53707c46c79c9aa0e9.png', '2024-08-19 10:07:54'),
(13, '미팅/연애', NULL, '2024-08-20 08:33:11'),
(14, '음악/예술', NULL, '2024-08-20 08:35:02'),
(15, '쇼핑/패션', NULL, '2024-08-20 08:35:55'),
(16, '게임/오락', NULL, '2024-08-20 08:39:47'),
(17, '생활/금융', NULL, '2024-08-20 08:40:11'),
(18, '방송/뉴스', NULL, '2024-08-20 08:40:57'),
(19, '신문/서적', NULL, '2024-08-20 08:41:25'),
(20, '영화/TV', NULL, '2024-08-22 07:27:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_category`
--
ALTER TABLE `site_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_category`
--
ALTER TABLE `site_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
