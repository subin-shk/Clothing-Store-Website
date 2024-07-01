-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 02:33 PM
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
(60, 4, 7, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `date`) VALUES
(1, 'Women', '2024-02-07'),
(2, 'Men', '2024-02-07'),
(3, 'Kids', '2024-02-07');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_id`, `item_name`, `item_price`, `quantity`) VALUES
(1, 3, 4, 'Black Long Sleeve Crop Top', '500.00', 0),
(2, 4, 4, 'Black Long Sleeve Crop Top', '500.00', 1),
(3, 4, 2, 'Black Party Dress', '2250.00', 0),
(4, 4, 10, 'Midi Black Brown Long Skirt', '1050.00', 0),
(5, 4, 9, 'Denim Shorts High Waist Pants', '650.00', 0),
(6, 4, 7, 'Warm Knitted Turtle Neck Sweat', '1199.00', 0),
(7, 4, 33, 'Michael Slim-Fit Suit in Blue', '3250.00', 0),
(8, 5, 4, 'Black Long Sleeve Crop Top', '500.00', 1),
(9, 5, 2, 'Black Party Dress', '2250.00', 0),
(10, 5, 10, 'Midi Black Brown Long Skirt', '1050.00', 0),
(11, 5, 9, 'Denim Shorts High Waist Pants', '650.00', 0),
(12, 5, 7, 'Warm Knitted Turtle Neck Sweat', '1199.00', 0),
(13, 5, 33, 'Michael Slim-Fit Suit in Blue', '3250.00', 0),
(14, 6, 4, 'Black Long Sleeve Crop Top', '500.00', 1),
(15, 6, 2, 'Black Party Dress', '2250.00', 0),
(16, 6, 10, 'Midi Black Brown Long Skirt', '1050.00', 0),
(17, 6, 9, 'Denim Shorts High Waist Pants', '650.00', 0),
(18, 6, 7, 'Warm Knitted Turtle Neck Sweat', '1199.00', 0),
(19, 6, 33, 'Michael Slim-Fit Suit in Blue', '3250.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `order_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `status` varchar(20) DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`order_id`, `id`, `name`, `email`, `address`, `state`, `country`, `phone_no`, `payment_method`, `status`, `order_date`) VALUES
(3, 7, 'ran', 'ar@gmail.com', '1daads', 'asad', 'dsfaf', '234234234', 'cash on delivery', 'pending', '2024-05-17 09:05:22'),
(4, 13, 'Ramesh', 'rame@gmail.com', 'sada', 'zd', 'dcs', '1312', 'e-sewa', 'pending', '2024-06-09 12:55:54'),
(5, 13, 'ad', 'asd@gmail.cpm', 'sad', 'asdasd', 'sda', 'sad', 'e-sewa', 'pending', '2024-06-09 14:40:39'),
(6, 13, 'asd', 'asd@gmail.com', 'asd', 'asd', 'asd', '24124', '', 'pending', '2024-06-09 19:17:46');

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
(19, 'Luffy', 'luffy@gmail.com', '1234', 'user');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `item_connection` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `userorder` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- Constraints for table `userorder`
--
ALTER TABLE `userorder`
  ADD CONSTRAINT `userorder_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
