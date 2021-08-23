-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 05:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `active_print`
--

-- --------------------------------------------------------

--
-- Table structure for table `career_us`
--

CREATE TABLE `career_us` (
  `user_id` int(11) NOT NULL,
  `user_na` varchar(300) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `user_age` varchar(100) NOT NULL,
  `user_city` varchar(200) NOT NULL,
  `user_salary` varchar(200) NOT NULL,
  `user_start` varchar(150) NOT NULL,
  `user_experince` varchar(500) NOT NULL,
  `user_resume` varchar(300) NOT NULL,
  `user_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `customer_no` varchar(200) NOT NULL,
  `customer_email` varchar(300) NOT NULL,
  `customer_msg` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `customer_name`, `customer_no`, `customer_email`, `customer_msg`) VALUES
(1, 'amsmfn', 'jk;nsdf', 'jksdn;', 'lng;s'),
(2, 'sdklgmf', 'klmsdklgm', 'lknmsdglk', 'klmgsdl'),
(3, 'sdklgmf', 'klmsdklgm', 'lknmsdglk', 'klmgsdl'),
(4, 'dg', '7845124578', 'dfg', 'safas'),
(5, 'dg', '7845124578', 'harshalpendse345@gmail.com', 'tt'),
(6, 'a', 'a', 'a', 'a'),
(7, 'Mohit Rai', '84638999489', 'mohitsrai@live.in', 'The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.\r\n\r\nIf you think this is a server error, please contact the webmaster.');

-- --------------------------------------------------------

--
-- Table structure for table `ink_match`
--

CREATE TABLE `ink_match` (
  `ink_id` int(11) NOT NULL,
  `userr_name` varchar(300) NOT NULL,
  `user_number` varchar(200) NOT NULL,
  `user_email` varchar(400) NOT NULL,
  `ink_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ink_match`
--

INSERT INTO `ink_match` (`ink_id`, `userr_name`, `user_number`, `user_email`, `ink_description`) VALUES
(1, 'mnm,M', ',MFN', 'MSDNF', 'MNSDF;'),
(2, 'asd', 'asd', 'asd', 'asd'),
(3, 'asd', 'asd', 'asdasdasd', 'asd'),
(4, 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `interested_in`
--

CREATE TABLE `interested_in` (
  `request_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `product` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested_in`
--

INSERT INTO `interested_in` (`request_id`, `name`, `phone`, `email`, `product`) VALUES
(1, 'mohit', '8745784512', 'mohitsrai@live.in', 'Alcoplusplus,Perfect'),
(2, 'mohit', '87456125998', 'mojit@kivask.omn', 'Alcoplusplus,Perfect'),
(3, 'mohit', '7845125689', 'mohitsrai@live.insaf', 'Ultra,Alcoplusplus'),
(4, 'mohit', 'rai', 'asd', 'Ultra,Alcoplusplus,Perfect,Alcozip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career_us`
--
ALTER TABLE `career_us`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ink_match`
--
ALTER TABLE `ink_match`
  ADD PRIMARY KEY (`ink_id`);

--
-- Indexes for table `interested_in`
--
ALTER TABLE `interested_in`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career_us`
--
ALTER TABLE `career_us`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ink_match`
--
ALTER TABLE `ink_match`
  MODIFY `ink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interested_in`
--
ALTER TABLE `interested_in`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
