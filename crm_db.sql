-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 07:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `cp_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `product` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `cp_date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`cp_id`, `c_id`, `id`, `product`, `description`, `cp_date`, `status`) VALUES
(1, 3, 0, 'fiat', 'its urgent do it right now fix the geyser', '2021-05-15', 0),
(2, 4, 2, 'Product Type', 'gbggbb', '2021-05-15', 1),
(3, 5, 1, 'Product Type', 'rgg', '2021-05-15', 1),
(4, 6, 1, 'Product Type', 'vvvvv', '2021-05-15', 1),
(5, 7, 1, 'ec2', 'bb', '2021-05-15', 1),
(6, 8, 1, 'RO ', 'Urgent', '2021-05-15', 1),
(7, 9, 1, '$cust_product', 'Its urgent', '2021-05-15', 1),
(8, 10, 1, 'AC', 'do it', '2021-05-15', 1),
(9, 9, NULL, 'laptop', 'ITS My 2nd Complain', '2021-05-15', 0),
(10, 11, 4, 'Car Engine', 'Hello Do it Right now ', '2021-05-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `c_alt_mobile` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_pincode` varchar(100) NOT NULL,
  `is_delete` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_mobile`, `c_alt_mobile`, `c_address`, `c_pincode`, `is_delete`) VALUES
(1, 'saif', '11221122', '12345', 'punjab pakistan', '542121', 0),
(2, 'Saif Azeem', '03361588531', '111532532', 'Lahore Pakistan', '71000', 0),
(3, 'sourbh', '00966451', '4545646', 'new dehli india', '7000', 0),
(4, 'Gulfam', '0300112233', '111888111', 'Sadder Jhang Punjab', '42000', 0),
(5, 'ggfg', '00966451', '111111', 'gdgv ', '555', 1),
(6, 'dfgbhdh', 'hhht', 'hghghd', 'hfghf', 'hgghhg', 0),
(7, 'ali', '121', '123', 'new dehli india', '122', 1),
(8, 'Ali', '78954', '545645', 'pakistan', '0092', 0),
(9, 'Muhammad Saif', '03175403727', '03361588531', 'House#123 Street# 11 Sector#11', '44000', 0),
(10, 'safeer', '123456789', '1122111', 'Islamabad', '41000', 0),
(11, 'Abdullah', '4441515', '4545646', 'Walton Lahore Islamabd Karachi Preshawrs', '71725', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `cproducts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cproducts`) VALUES
(1, 'laptop'),
(2, 'Router'),
(3, 'AC'),
(4, 'TV'),
(5, 'fgg'),
(6, 'fgg'),
(7, 'fgg'),
(8, ''),
(9, ''),
(10, 'aws'),
(11, 'ec2'),
(12, 'RO '),
(13, ''),
(14, ''),
(15, ''),
(16, 'Car Engine');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `engr_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `complains_completed` int(10) NOT NULL DEFAULT 0,
  `is_delete` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `engr_name`, `email`, `pass`, `mobile`, `complains_completed`, `is_delete`) VALUES
(1, 'sourbh', 'sourbh@crm.com', 'sourbh123', '0123456789', 0, 0),
(2, 'saif Abbasi', 'saif@crmm.com', '12345', '0317000000', 0, 1),
(3, 'Saif Ul Azeem A', 's@crmm.com', '123456', '031245678', 0, 0),
(4, 'Gulfam Haider', 'gulfam@crms.com', 'gul123', '03335242424', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`cp_id`),
  ADD KEY `Foreign_key` (`c_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `cp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
