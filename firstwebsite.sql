-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 04:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_name` varchar(200) NOT NULL,
  `client_id` int(150) UNSIGNED NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `profile_photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_name`, `client_id`, `email`, `password`, `profile_photo`) VALUES
('Khaled', 1, 'khaled@test', '782', NULL),
('Maiada', 2, 'maiada@test', '456', NULL),
('marwa', 3, 'marwa@test', '896', NULL),
('amira', 4, 'amira@test', '256', NULL),
('mazen', 5, 'mazen@test', '496', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `names`
-- (See below for the actual view)
--
CREATE TABLE `names` (
`client_name` varchar(200)
,`client_id` int(150) unsigned
,`email` varchar(200)
,`password` varchar(150)
,`profile_photo` blob
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(200) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `order_description` varchar(200) NOT NULL,
  `user_id` int(200) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_description`, `user_id`) VALUES
(1, '2024-02-05', 'first order', 5),
(2, '2024-02-26', 'second order', 2),
(3, '2024-02-20', 'third order', 5),
(4, '2024-02-19', 'forth order', 4);

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `user_id` int(200) UNSIGNED NOT NULL,
  `phone_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`user_id`, `phone_number`) VALUES
(4, '012546'),
(5, '01023556');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(150) NOT NULL,
  `user_id` int(200) UNSIGNED NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('male','female','','') DEFAULT NULL,
  `Birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_id`, `email`, `password`, `gender`, `Birth_date`) VALUES
('marwa', 2, 'marwa@test', '123', 'female', '2024-02-19'),
('menna', 4, 'menna@test', '456', 'female', NULL),
('ahmed', 5, 'ahmed@test', '785', 'male', NULL),
('mazen', 15, 'mazen@test.com', '1545', 'male', NULL);

-- --------------------------------------------------------

--
-- Structure for view `names`
--
DROP TABLE IF EXISTS `names`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `names`  AS SELECT `clients`.`client_name` AS `client_name`, `clients`.`client_id` AS `client_id`, `clients`.`email` AS `email`, `clients`.`password` AS `password`, `clients`.`profile_photo` AS `profile_photo` FROM `clients` ORDER BY `clients`.`client_name` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `index` (`user_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(150) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
