-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2023 at 03:07 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20107545_second_hand`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_desc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_condition` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `product_desc`, `product_price`, `product_condition`, `product_quantity`) VALUES
(28, 'Beats Powerbeats Pro', ' image/hh-2.jpg', 'Bluetooth', 100, 'Good', 2),
(29, 'Canon EOS R (RF24-105mm f/4-7.1 IS STM)', ' image/ee-3.jpg', '   Instant Cash Back: RM500\r\n   Free Gifts: 64GB SD Card', 5000, 'Good', 1),
(31, 'HP Boom Mic Headset 150', ' image/aa-1.jpg', '0.059 kg', 50, ' Good', 1),
(33, 'Samsung 50\" 4K U-HD AU7000', ' image/cc-1.jpg', '50\" Inch Flat Screen TV', 900, 'Good ', 1),
(36, 'Smart Watch Louis Vuitton', ' image/ff-1.jpg', 'Water Resistant', 1600, 'Good ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
