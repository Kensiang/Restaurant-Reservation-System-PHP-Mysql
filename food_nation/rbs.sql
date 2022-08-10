-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 10, 2022 at 01:56 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` int(8) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `remarks`) VALUES
(1, 'Devon York', 'devonyork@gmail.com', 85557122, 'Hi, can i do a birthday party theme at your restaurant? Please call me soon', 'yes'),
(3, 'Keiran Bryant', 'keiran009@gmail.com', 95557865, 'Is there any job vacancy?', 'NO'),
(21, 'jaychou', 'JJchou@gmail.com', 12345678, 'Can you provide me directions to the korean restaurant?', NULL),
(24, 'messi', 'fe_sha@hotmail.com', 1213451, 'Testing Tesing', NULL),
(25, 'sherry', 'shrr@hotmail.com', 1241241, 'TEST TEST', NULL),
(26, 'Sherry', 'fe_sha@Homtail.com', 2342141, 'I want to order foods\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newreservations`
--

CREATE TABLE `newreservations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `date_reserved` varchar(100) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `time_reserved` varchar(200) DEFAULT NULL,
  `specialrequest` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newreservations`
--

INSERT INTO `newreservations` (`id`, `name`, `room`, `date_reserved`, `mobile`, `time_reserved`, `specialrequest`) VALUES
(4, 'Tim', '', '07/30/2022', NULL, NULL, 'No seafood'),
(5, 'Muthu', '', '07/30/2022', NULL, NULL, 'Wheelchair bound'),
(6, 'Tim', '', '07/30/2022', NULL, NULL, 'No seafood'),
(7, 'Tim', '', '08/31/2022', NULL, NULL, 'No seafood'),
(8, 'Tim', '', '08/31/2022', NULL, NULL, 'No seafood'),
(9, 'Tim', '', '08/31/2022', NULL, NULL, 'No seafood'),
(10, 'Tim', '', '08/25/2022', NULL, NULL, 'No seafood'),
(11, 'Tim', '', '07/30/2022', NULL, NULL, 'No seafood'),
(12, 'Sally', '', '07/30/2022', NULL, NULL, 'Birthday cake please'),
(13, 'Timothy', '', '08/31/2022', NULL, NULL, 'NA'),
(14, 'Timothy', '', '08/31/2022', NULL, NULL, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantreservation`
--

CREATE TABLE `restaurantreservation` (
  `bookingid` int(99) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `time` datetime NOT NULL,
  `restauranttype` varchar(50) NOT NULL,
  `pax` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurantreservation`
--

INSERT INTO `restaurantreservation` (`bookingid`, `name`, `email`, `phone`, `time`, `restauranttype`, `pax`) VALUES
(23, 'lily', 'name@mail.com', 34234523, '2022-08-08 19:30:00', 'Tapas Club', 2),
(29, 'ken siang', 'fe_sha@hotmail.com', 12515, '2022-08-08 19:30:00', 'Plain Vanilla', 2),
(38, 'JayChou', 'jc@gmail.com', 12345654, '2022-08-10 00:12:00', 'Black Pearl Steakhouse', 2),
(43, 'JDJD', 'JDJD@outlook.com', 12345678, '2022-08-08 19:30:00', 'Crystal Jade', 2),
(45, 'messi', 'fe_sha@hotmail.com', 21421231, '2022-08-08 19:30:00', 'Tapas Club', 2),
(48, 'Malar', 'malar@outlook.com', 124121, '2022-08-26 23:30:00', 'Black Pearl Steakhouse', 2),
(50, 'Sherry', 'fe_sha@Hotmail.com', 12414111, '2022-08-18 21:18:00', 'Black Pearl Steakhouse', 2),
(53, 'lily', 'fe_sha@hotmail.com', 124124, '2022-08-08 19:30:00', 'Black Pearl Steakhouse', 2),
(54, 'SherRy', 'fesa@hotmail.com', 2141241, '2022-08-11 09:00:00', 'Crystal Jade', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 43124214, 'admin@gmail.com', 'admin', 'admin'),
(3, 'kensiang', 564434565, 'fe_sha@hotmail.com', 'user', 'ken'),
(4, 'user', 12312412, 'fe_sha@hotmail.com', 'user', 'user'),
(11, 'lily', 12412, 'lily@gmail.com', 'user', 'aaa'),
(13, 'ken', 12421, 'fe_shs@hotmail.com', 'user', '1111'),
(14, 'messi', 87112453, 'leo@gmail.com', 'user', '123'),
(15, 'sherry', 12341251, 'shhh@hotmail.com', 'user', '1234'),
(16, 'man', 12415124, 'man@gmail.com', 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newreservations`
--
ALTER TABLE `newreservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantreservation`
--
ALTER TABLE `restaurantreservation`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newreservations`
--
ALTER TABLE `newreservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `restaurantreservation`
--
ALTER TABLE `restaurantreservation`
  MODIFY `bookingid` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
