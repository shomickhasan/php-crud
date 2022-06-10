-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 06:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 for Active 2 for Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `userName`, `email`, `phone`, `status`) VALUES
(5, 'Md Majidul ISlam', 'Majid', 'majid.bd905@gmail.com', '01917344267', 1),
(7, 'Md Majidul ISlam', 'Majid', '', '01917344267', 2),
(8, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(9, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(10, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(11, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(12, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(13, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(14, 'Md Majidul ISlam', 'safd', 'majid.bd905@gmail.com', '01917344267', 1),
(16, 'Nahid', 'Nahid', 'majid.bd905@gmail.com', '01917344267', 1),
(17, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(18, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(19, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(20, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(21, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(22, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(23, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(24, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(25, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(26, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(27, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(28, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(29, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(30, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(31, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(32, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(33, 'Nahid', 'majid', 'majid.bd905@gmail.com', '01917344267', 1),
(34, 'Md Majidul ISlam', 'Majid', 'majid.bd905@gmail.com', '01917344267', 1),
(35, 'Md Majidul ISlam', 'Majid', 'majid.bd905@gmail.com', '01917344267', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
