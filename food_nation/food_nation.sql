-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 04:34 PM
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
-- Database: `food_nation`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `resturant` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `review` int(11) NOT NULL,
  `bookable` tinyint(1) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `location`, `cuisine`, `price`, `resturant`, `img`, `review`, `bookable`, `is_published`) VALUES
(1, 'Crystal Jade', 'Orchard', 'Chinese', 50, 'Chinese Resturant', 'cj2.jpg', 4, 1, 1),
(2, 'Korean BBQ', 'Tampines', 'Korean', 80, 'Korean Restaurant', 'koreanbbq.jpg', 5, 1, 1),
(3, 'Plain Vanilla', 'Tiong Bahru\r\n', 'Dessert', 20, 'Bakery', 'pv.png', 3, 1, 1),
(4, 'En Sushi', 'Bugis', 'Japanese', 60, 'Sushi Restaurant', 'ensushi.webp', 3, 1, 1),
(5, 'Black Pearl Steakhouse', 'Orchard', 'American', 100, 'American', 'steak.jpeg', 4, 1, 1),
(6, 'Tapas Club', 'Clementi', 'Spanish', 40, 'Spanish', 'tapas.webp', 4, 1, 1),
(7, 'La Pizzeria', 'City Hall', 'Italian', 60, 'Italian', 'pizza.jpeg', 3, 1, 1),
(8, 'Cavemen Restaurant & Bar', 'East Coast', 'Western', 100, 'American', 'pasta.jpeg', 5, 1, 1),
(9, 'Sweet Reservations', 'Sengkang', 'Dessert', 10, 'Dessert', 'des.jpg', 2, 1, 1),
(10, 'Ah Chew Desserts', 'Bugis', 'Dessert', 20, 'Chinese Dessert', 'ahchew.png', 4, 0, 1),
(11, 'Ciel Patisserie', 'Kovan', 'Dessert', 30, 'Pastry', 'le.png', 5, 1, 1),
(12, 'Red Sparrow', 'Tanjong Pagar', 'Indian', 100, 'Indian Restaurant', 'redsparrow.jpg', 5, 1, 1),
(13, 'Zorba The Greek Taverna', 'Clarke Quay', 'Greek', 80, 'Greek Restaurant', 'greek.jpeg', 4, 1, 1),
(14, 'Nouri', 'Bishan', 'Mediterranean', 150, 'Mediterranean Restaurant', 'med.jpeg', 5, 1, 1),
(15, 'Shabestan', 'Jurong East', 'Iranian', 50, 'Iranian Restaurant', 'iranian.jpeg', 4, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
