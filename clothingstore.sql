-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 09:38 AM
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
-- Database: `clothingstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `quan_id` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `item_id`, `id`, `product_quantity`, `quan_id`, `total_price`) VALUES
(21, 5, 5, 3, NULL, NULL),
(26, 1, 4, 1, NULL, NULL),
(29, 1, 5, 2, NULL, NULL),
(31, 14, 4, 2, NULL, NULL),
(32, 34, 8, 1, NULL, NULL),
(33, 12, 8, 2, NULL, NULL),
(35, 11, 9, 3, NULL, NULL),
(36, 12, 10, 2, NULL, NULL),
(37, 12, 11, 2, NULL, NULL),
(38, 28, 11, 3, NULL, NULL),
(39, 12, 12, 2, NULL, NULL),
(41, 12, 15, 2, NULL, NULL),
(42, 28, 15, 3, NULL, NULL),
(43, 12, 17, 2, NULL, NULL),
(44, 28, 17, 3, NULL, NULL),
(45, 12, 19, 2, NULL, NULL),
(55, 4, 13, 1, NULL, NULL),
(57, 10, 13, 2, NULL, NULL),
(60, 4, 7, 0, NULL, NULL),
(70, 6, 20, 0, NULL, NULL),
(71, 7, 20, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_image` varchar(30) NOT NULL,
  `item_price` int(11) NOT NULL,
  `product_cat` varchar(30) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `item_type` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_image`, `item_price`, `product_cat`, `date`, `item_type`, `quantity`) VALUES
(1, 'Edited - Elegant Blue Dress', 'dress2.jpg', 1300, 'women', '2024-02-07', 'dress', NULL),
(2, 'Black Party Dress', 'dress4.jpg', 2250, 'women', '2024-02-07', 'dress', NULL),
(3, 'Black and Purple Dress', 'dress3.jpg', 2500, 'women', '2024-02-07', 'dress', NULL),
(4, 'Black Long Sleeve Crop Top', 'tops1.jpg', 500, 'women', '2024-02-07', 'tops', NULL),
(5, 'Woolen Coats Men Casual Wear ', 'men1.jpg', 1100, 'men', '2024-02-10', 'jacket', NULL),
(6, 'Elegant Short Sleeved Buttoned', 'tops2.jpg', 1000, 'women', '2024-02-10', 'tops', NULL),
(7, 'Warm Knitted Turtle Neck Sweat', 'tops3.jpg', 1199, 'women', '2024-02-10', 'tops', NULL),
(8, 'Ankle Length Tailored Pants', 'bottoms1.jpg', 1300, 'women', '2024-02-10', 'bottoms', NULL),
(9, 'Denim Shorts High Waist Pants', 'bottoms2.jpg', 650, 'women', '2024-02-10', 'bottoms', NULL),
(10, 'Midi Black Brown Long Skirt', 'bottoms3.jpg', 1050, 'women', '2024-02-10', 'bottoms', NULL),
(11, 'Men Antlers Embroidery Colourb', 'mtops1.jpg', 900, 'men', '2024-02-10', 'tops', NULL),
(12, 'Dragon Graphic Zip Up Drawstring Hoodie ', 'mtops2.jpg', 950, 'men', '2024-02-10', 'tops', NULL),
(13, 'Nike Black and White Shirt', 'mtops3.jpg', 950, 'men', '2024-02-10', 'tops', NULL),
(14, 'Men Flap Pocket Side Cargo Trousers', 'mbottom1.jpg', 1050, 'men', '2024-02-10', 'bottoms', NULL),
(15, 'Business Black Pants ', 'mbottom2.jpg', 950, 'men', '2024-02-10', 'bottoms', NULL),
(16, 'Drawstring Waist Slant Pocket Joggers', 'mbottom3.jpg', 600, 'men', '2024-02-10', 'bottoms', NULL),
(27, 'Boys Colourblock Button Front Shirt & Shorts', 'boys1.jpg', 850, 'kids', '2024-02-18', 'boys', NULL),
(28, 'Boys Two Tone Shirt & Shorts Without Tee', 'boys2.jpg', 1000, 'kids', '2024-02-18', 'boys', NULL),
(29, 'Baby Bear Patched Hoodie & Joggers', 'boys3.jpg', 990, 'kids', '2024-02-18', 'boys', NULL),
(30, 'Girls Butterfly Sleeve Ruffle Hem Top With Leggings', 'girls1.jpg', 950, 'kids', '2024-02-18', 'girls', NULL),
(31, 'Girls Simple Knitted Puff Long-Sleeved Dress', 'girls2.jpg', 1050, 'kids', '2024-02-18', 'girls', NULL),
(32, 'Girls Plaid Print Ruffle Trim Dress', 'girls3.jpg', 885, 'kids', '2024-02-18', 'girls', NULL),
(33, 'Michael Slim-Fit Suit in Blue', 'msuits1.jpg', 3250, 'men', '2024-02-18', 'suits', NULL),
(34, '\r\nBlack Slim-Fit Suit 3-Piece', 'msuits2.jpg', 3500, 'men', '2024-02-18', 'suits', NULL),
(35, 'Black White Ivory Men\'s Suits', 'msuits3.jpg', 3000, 'men', '2024-02-18', 'suits', NULL),
(38, 'Added new shirt', 'men_addition.jpg', 750, 'men', '2024-02-18', 'tops', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`order_id`, `user_id`, `name`, `email`, `address`, `state`, `country`, `phone`, `payment_method`, `total_amount`, `order_date`) VALUES
(14, 13, 'Cleo', 'cleo@gmail.com', 'Paknajol', 'Bagmati', 'Nepal', '9841235643', 'e-sewa', '2600.00', '2024-07-08 17:16:20'),
(15, 19, 'Luffy', 'luff@gmail.com', 'Kalanki', 'Bagmati', 'Nepal', '984126453', 'cash-on-delivery', '1900.00', '2024-07-08 17:17:36'),
(16, 20, 'Alice', 'alice@gmail.com', 'Newroad', 'Bagmati', 'Nepal', '984325138', 'cash-on-delivery', '1000.00', '2024-07-08 17:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(30) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(7, 'Ryeo', 'ryeo@gmail.com', '1234', 'admin'),
(13, 'cleo', 'cleo@gmail.com', '1234', 'user'),
(19, 'Luffy', 'luffy@gmail.com', '1234', 'user'),
(20, 'Alice', 'alice@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `quan_id` (`quan_id`),
  ADD KEY `item_connection` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `userorders`
--
ALTER TABLE `userorders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `userorders`
--
ALTER TABLE `userorders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `item_connection` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userorders`
--
ALTER TABLE `userorders`
  ADD CONSTRAINT `userorders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
