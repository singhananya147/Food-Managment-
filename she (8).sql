-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 08:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `she`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `username`, `gender`, `email`, `password`, `number`) VALUES
(6, 'Khushisingh', 'f', 'khushi07072001@gmail.com', '12345', 9835067250),
(7, 'buchan', 'f', 'shivam22042006@gmail.com', '123456', 9835067356);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`name`, `email`, `contact`) VALUES
('name= tea and id= 50  ', 'khushi07072001@gmail.com', 7870776682),
('name= tea and id= 50  ', 'ysing260@gmail.com', 7870776682),
('name= chaumin and id= 51  ', 'shivam22042006@gmail.com', 9835067250),
('name= chaumin and id= 51  ', 'khushi07072001@gmail.com', 7870776682),
('name= chaumin and id= 51  ', 'khushi07072001@gmail.com', 9835067250),
('name= burger and id= 53  ', 'khushi07072001@gmail.com', 9835067250);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `servings` bigint(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `name`, `servings`, `address`, `contact`, `date`) VALUES
(50, 'IMG-61fba00f2bcaa9.34594269.jfif', 'tea', 4, 'patna', 7870776682, '2022-02-03 14:57:00'),
(51, 'IMG-61fba174f26c30.19003476.jfif', 'chaumin', 1, 'patna', 7870776682, '2022-02-03 15:03:00'),
(52, 'IMG-61fba5aa7c82a0.02611803.jfif', 'soup', 4, 'delhi', 2345678, '2022-02-03 15:21:00'),
(53, 'IMG-61ff802a87c3c5.83492897.jfif', 'burger', 1, 'patna', 7870776682, '2022-02-06 13:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `gender`, `email`, `password`, `number`) VALUES
(2, 'Khushi', 'F', 'khushi07072001@gmail.com', '12345', 7870779972);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
