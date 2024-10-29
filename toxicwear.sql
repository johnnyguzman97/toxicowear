-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2024 at 08:42 PM
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
-- Database: `toxicwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart table`
--

CREATE TABLE `cart table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'This links to the id in your users table',
  `product_name` varchar(255) NOT NULL COMMENT 'Name of the product ordered',
  `quantity` int(11) DEFAULT NULL COMMENT 'Number of units ordered',
  `total_price` decimal(10,2) NOT NULL COMMENT 'Total cost of the order',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Date and time the order was placed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category`) VALUES
(1, 'Thank God for Toxicas', 'A bold statement T-shirt for those who know the value of toxic relationships!', 25.00, 'f1.jpg', 'new arrivals'),
(2, 'Got Honey?', 'Winnie the Pooh inspired streetwear for the honey lovers.', 22.00, 'f2.jpg', 'new arrival'),
(3, 'SadBoyz Club', 'Exclusive club T-shirt for the SadBoyz members only.', 30.00, 'f8.jpg', 'Popular T-Shirts, Men Clothing\r\n'),
(4, 'In toxicas We Trust', 'You can always trust a toxica', 24.99, 'f3.jpg', 'Popular T-Shirts'),
(5, 'Honey Tongue', 'To feel filoso pop a Honey Pack out with this T-Shirt.', 24.99, 'f4.jpg', 'new arrivals'),
(6, 'Ya No Creo En El Amor', 'For the heart broken Toxicos this shirt is for you! Say no to love.', 24.99, 'f5.jpg', 'Popular T-Shirts'),
(7, 'Chicos Toxicos', 'D-Generation Toxicos', 24.99, 'f9.jpg', 'new arrivals'),
(8, 'No Me Quiero Casar', 'For those who can\'t say yes to only one toxica.', 24.99, 'f10.jpg', 'Men Clothing'),
(9, 'Toxicas Have My Heart', 'If you want to attract more toxicas into your life, this hoodie will do that for you.', 50.00, 'f11.jpg', 'Men Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '1', '$2y$10$mQuYzSdEgpoz1Hg0YeNmtuAA6mUDD0n67Wpo8MpkIMEJ1CqQbFKdG'),
(2, 'm', '$2y$10$Ks1yWG.h82tSKJwmkvd2LuOx4pUsC6kaH5SV.wxcngoqUVSvDTTZu'),
(3, '2', '222'),
(4, '4', '4'),
(5, '5', '5'),
(6, '6', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart table`
--
ALTER TABLE `cart table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart table`
--
ALTER TABLE `cart table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
