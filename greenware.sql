-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 02:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenware`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `Category_id` int(11) NOT NULL,
  `Category name` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_text` varchar(225) NOT NULL,
  `Date and Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_name`, `brand_name`, `price`) VALUES
(1, 'Vivo Y21', 'Gadgets', 'Vivo', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale_transaction`
--

CREATE TABLE `tbl_sale_transaction` (
  `sale_transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `Customer Name` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Reference` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Biller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `available_stock` int(11) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `supplier_id` int(11) NOT NULL,
  `company_name` varchar(225) NOT NULL,
  `contact_person` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_transaction`
--

CREATE TABLE `tbl_supplier_transaction` (
  `sup_transaction_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `quantity_ordered` int(11) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `position` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `middle_name` varchar(225) NOT NULL,
  `suffix` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `region` varchar(225) NOT NULL,
  `province` varchar(225) NOT NULL,
  `municipality` varchar(225) NOT NULL,
  `barangay` varchar(225) NOT NULL,
  `street` varchar(225) NOT NULL,
  `zipcode` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `position`, `last_name`, `first_name`, `middle_name`, `suffix`, `date`, `email`, `phone`, `region`, `province`, `municipality`, `barangay`, `street`, `zipcode`) VALUES
(1, 'Admin', 'Jorquia', 'Leo', 'Bulante', 'None', '2024-04-26', 'leojorquia@gmail.com', '09510446674', 'Region 8', 'Leyte', 'Leyte', 'Tigbawan', 'So. San Roque 2', '6533');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_sale_transaction`
--
ALTER TABLE `tbl_sale_transaction`
  ADD PRIMARY KEY (`sale_transaction_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `tbl_sale_transaction_ibfk_1` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `tbl_stock_ibfk_2` (`category_id`),
  ADD KEY `tbl_stock_ibfk_3` (`brand_id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbl_supplier_transaction`
--
ALTER TABLE `tbl_supplier_transaction`
  ADD PRIMARY KEY (`sup_transaction_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `tbl_supplier_transaction_ibfk_1` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sale_transaction`
--
ALTER TABLE `tbl_sale_transaction`
  MODIFY `sale_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_supplier_transaction`
--
ALTER TABLE `tbl_supplier_transaction`
  MODIFY `sup_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_feedback_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`),
  ADD CONSTRAINT `tbl_feedback_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`),
  ADD CONSTRAINT `tbl_feedback_ibfk_4` FOREIGN KEY (`Category_id`) REFERENCES `tbl_category` (`Category_id`);

--
-- Constraints for table `tbl_sale_transaction`
--
ALTER TABLE `tbl_sale_transaction`
  ADD CONSTRAINT `tbl_sale_transaction_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`Category_id`),
  ADD CONSTRAINT `tbl_sale_transaction_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_sale_transaction_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`);

--
-- Constraints for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD CONSTRAINT `tbl_stock_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_stock_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`Category_id`),
  ADD CONSTRAINT `tbl_stock_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`);

--
-- Constraints for table `tbl_supplier_transaction`
--
ALTER TABLE `tbl_supplier_transaction`
  ADD CONSTRAINT `tbl_supplier_transaction_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`Category_id`),
  ADD CONSTRAINT `tbl_supplier_transaction_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_supplier_transaction_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `tbl_supplier` (`supplier_id`),
  ADD CONSTRAINT `tbl_supplier_transaction_ibfk_4` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
