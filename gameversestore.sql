-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 07:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameversestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `created_date`, `modified_date`) VALUES
(1, 'Playstation', '2020-12-22 09:58:50', '2020-12-22 09:58:50'),
(2, 'X box', '2020-12-22 21:45:40', '2020-12-22 21:45:40'),
(3, 'Nintendo switch', '2020-12-22 21:45:50', '2020-12-22 21:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phoneno`, `address`, `status`, `created_date`, `modified_date`) VALUES
(4, 'Hein Htet Naing', 'heinhtetnaing@gmail.com', '0969543253', 'Yangon', 0, '2020-12-23 12:52:52', '2020-12-23 12:52:52'),
(5, 'Aung Linn Latt', 'aunglinnlatt@gmail.com', '0943435754', 'Naypyitaw', 0, '2020-12-23 12:55:18', '2020-12-23 12:55:18'),
(6, 'Yin Thiri Mon', 'yinthirimon@gmail.com', '096984243', 'Yangon', 0, '2020-12-23 22:08:42', '2020-12-23 22:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `qty`) VALUES
(1, 1, 2, 1),
(3, 1, 3, 1),
(4, 14, 4, 1),
(5, 20, 4, 1),
(6, 17, 4, 1),
(7, 22, 5, 1),
(8, 31, 5, 1),
(9, 24, 5, 1),
(10, 39, 5, 1),
(11, 1, 6, 1),
(12, 11, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `brandid` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `model`, `price`, `company`, `brandid`, `cover`, `created_date`, `modified_date`) VALUES
(1, 'Watch dogs legion', 50, 'Ubisoft', 1, 'watchdogs.jpg', '2020-12-22 10:40:03', '2020-12-22 11:35:08'),
(11, 'PS4 pro', 499, 'sony', 1, 'ps4.jpg', '2020-12-23 02:08:39', NULL),
(12, 'Spider-Man Miles Morales', 50, 'Insomniac', 1, 'spiderman.jpg', '2020-12-23 10:29:07', NULL),
(13, 'The last of us', 29, 'Naughty dog', 1, 'the last of us.jpg', '2020-12-23 10:30:20', NULL),
(14, 'Playstation 5', 499, 'sony', 1, 'ps51.PNG', '2020-12-23 10:32:36', '2020-12-23 10:34:01'),
(15, 'Death stranding', 30, 'Kojima production', 1, 'death stranding.jpg', '2020-12-23 10:36:44', NULL),
(16, 'Cyberpunk 2077', 50, 'CD projekt red', 1, 'cyberpunk1.png', '2020-12-23 10:38:35', NULL),
(17, 'Final fantasy VII remake', 30, 'Square Enix', 1, 'Final fantasy.jpg', '2020-12-23 10:42:31', NULL),
(18, 'Resident evil 2', 20, 'Capcom', 1, 'resident evil 2.jpg', '2020-12-23 10:45:53', NULL),
(19, 'Ghost of Tsushima', 40, 'Sucker punch', 1, 'ghost.png', '2020-12-23 10:52:45', NULL),
(20, 'Demon souls', 30, 'Blue print', 1, 'demon souls.png', '2020-12-23 10:55:46', NULL),
(21, 'Destruction Allstar', 60, 'Lucid', 1, 'destruction allstars.png', '2020-12-23 10:57:38', NULL),
(22, 'X box series x', 500, 'Microsoft', 2, 'xbox series x.jpg', '2020-12-23 11:05:38', NULL),
(23, 'Cyberpunk 2077', 60, 'CD projekt red', 2, 'cyberpunk xbox.png', '2020-12-23 11:09:43', NULL),
(24, 'Farcry 6', 60, 'Ubisoft', 2, 'Farcry6.jpg', '2020-12-23 11:11:30', NULL),
(25, 'Assasin Creed Valhalla', 60, 'Ubisoft', 2, 'assasin creed.jpg', '2020-12-23 11:18:36', NULL),
(26, 'Gear 5', 50, 'Microsoft', 2, 'gear.jpg', '2020-12-23 11:23:03', NULL),
(27, 'Halo', 30, 'Bungie', 2, 'halo.jpg', '2020-12-23 11:25:21', NULL),
(28, 'Forza horizon 4', 30, 'Microsoft', 2, 'forza.jpg', '2020-12-23 11:29:43', NULL),
(29, 'Immortal Fenyx Rising', 40, 'Ubisoft', 2, 'immortal.jpg', '2020-12-23 11:31:10', NULL),
(30, 'Mortal Kombat 11', 30, 'Warner bros', 2, 'Mortal kombat.jpg', '2020-12-23 11:36:49', NULL),
(31, 'Borderlands 3', 20, 'Gearbox', 2, 'borderland.png', '2020-12-23 11:40:31', NULL),
(32, 'Need for speed Heat', 50, 'Electronic Arts', 2, 'Need for speed.jpg', '2020-12-23 11:42:11', NULL),
(33, 'Call of duty Mordern Warfare', 50, 'Blizzard', 2, 'call of duty.jpg', '2020-12-23 11:44:23', NULL),
(34, 'Super Smash Bros', 60, 'Nintendo', 3, 'super smash bros.jpg', '2020-12-23 11:56:34', NULL),
(35, 'Animal Crossing', 60, 'Nintendo', 3, 'Animal crossing.png', '2020-12-23 11:59:44', NULL),
(36, 'The legend of Zelda', 60, 'Nintendo', 3, 'zelda1.jpg', '2020-12-23 12:35:06', NULL),
(37, 'Pokemon lets go pikachu', 40, 'Nintendo', 3, 'Pokemon.jpg', '2020-12-23 12:37:00', NULL),
(38, 'Nintendo switch lite console', 200, 'Nintendo', 3, 'nintendo switch.jpg', '2020-12-23 12:40:34', NULL),
(39, 'Nintendo switch console', 350, 'Nintendo', 3, 'nintendo s.jpg', '2020-12-23 12:42:51', NULL),
(40, 'Crash Team racing', 40, 'Activision', 3, 'ctr.jpg', '2020-12-23 12:49:32', NULL),
(41, 'Super mario maker 2', 50, 'Nintendo', 3, 'super mario.jpg', '2020-12-23 12:51:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `gender`, `city`) VALUES
(1, 'Aung Linn Latt', '$2y$10$ecYh7/K/PSnHX2caqGG34On2OktNg4rDrDiFSDw75gu.vBKOVmD0W', 'aunglinnlatt96@gmail.com', '09972300093', 'M', 'Yangon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`),
  ADD KEY `product_id_3` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brandid` (`brandid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `order_items` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
