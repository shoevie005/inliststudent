-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 01:05 PM
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
-- Database: `inliststudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `message`) VALUES
(1, 20205, 'Marie', 'Luchie', 'Zukie', 'Female', 'Chasing dreams, catching goals, and tossing caps.'),
(2, 23424, 'Xander', 'Smith', 'Park', 'Male', 'Our adventure begins – keep on reaching for the stars!'),
(3, 23424, 'Ava', 'Dy', 'Wilson', 'Female', 'As we close this chapter, lets open the next one with passion and purpose.'),
(8, 20230, 'Alex', 'Nelson', 'Percy', 'Male', 'The tassel was worth the hassle!');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `confirm_password`) VALUES
(32, 'percy', 'vie', 'bee', 'shoe@gmail.com', '$2y$10$l16ceoTm5W8RMxVt8EPl2.aZPzdY87/cLcA4CYtS0Ka6jrA2X/vLi', ''),
(33, 'marie', 'viebb', 'beebb', 'shoebb@gmail.com', '$2y$10$3pCbxW0q9u54cTbDTZFcje6cmeR3PzdBIk.kljyHc7DT.TVEgG5VG', ''),
(34, 'Mike', 'Mikee', 'Lim', 'mike@gmail.com', '$2y$10$MeNGgog/kClUMLuvSNVeqeDbMlf7LY/YUUQntg64GFc78dEVkWpn2', ''),
(36, 'Maryann', 'Marie', 'Lyn', 'lyn@gmail.com', '$2y$10$NfAUGdKvCNpdb1z15UnfpuveEbwAZ80vQwz8EcDO2UnMhgp445egu', ''),
(37, 'alex', 'Alex', 'Percy', 'percy@gmail.com', '$2y$10$divhmZItY3Sc1Wwx0H5cA.BYzwSo0lsFSYsE7h157MaUqzPVH5Yza', ''),
(38, 'maraE', 'Mara', 'Ellen', 'mara@gmail.com', '$2y$10$xbGAlmhtmq2.LzYR5tiXJOdadNCSczvzpa3vQkKe95xsFFFAO5kBK', ''),
(39, 'ava', 'Ava', 'Wilson', 'ava@gmail.com', '$2y$10$SPG7aBqDqL3Lu5GaP6dHDOCvS2alixRWgXwNLqnCKl/6WLL.3QCV6', ''),
(40, 'xander', 'Xander', 'Park', 'xander@gmail.com', '$2y$10$6bSN7ETgQbIUJb2LMKdWi.zbFkC/86pUnd6g8UAqVKXDWzEO5QXDy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
