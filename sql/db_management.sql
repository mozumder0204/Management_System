-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 05:34 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `credit_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_email`, `c_address`, `c_mobile`, `credit_no`) VALUES
(2, 'Customer One', 'customer01@gmail.com', 'Comilla', '01755555555', 95653325);

-- --------------------------------------------------------

--
-- Table structure for table `daily_sells`
--

CREATE TABLE `daily_sells` (
  `ds_id` int(20) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `total_amount` int(50) NOT NULL,
  `amount_paid` int(50) NOT NULL,
  `amount_left` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_sells`
--

INSERT INTO `daily_sells` (`ds_id`, `customer_name`, `product_name`, `quantity`, `rate`, `total_amount`, `amount_paid`, `amount_left`) VALUES
(3, 'cc', 'pp', 10, 100, 1000, 5000, 5000),
(4, 'cc2', 'pp2', 100, 1001, 10001, 50001, 50001);

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `f_id` int(50) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_address` varchar(100) NOT NULL,
  `f_mobile` varchar(50) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`f_id`, `f_name`, `f_address`, `f_mobile`, `STATUS`) VALUES
(1, 'Factory One', 'Sylhet', '01755555555', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `username` varchar(50) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_address` varchar(100) NOT NULL,
  `m_mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`username`, `m_name`, `m_email`, `m_address`, `m_mobile`) VALUES
('mm', 'Manager One', 'Manager01@gmail.com', 'Dhaka', '01755555555');

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `pos_id` int(50) NOT NULL,
  `sells_point_name` varchar(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`pos_id`, `sells_point_name`, `p_id`, `quantity`, `rate`, `c_id`, `total_amount`) VALUES
(1, 'Kuratoli', 1, 10, 100, 2, 45);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `remaining` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `remaining`) VALUES
(1, 'pp', 100, 100),
(2, 'pp2', 200, 59);

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `material_id` int(50) NOT NULL,
  `f_id` int(50) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `production_type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`material_id`, `f_id`, `material_name`, `quantity`, `price`, `production_type`, `date`) VALUES
(1, 1, 'PQR', 10, 500, 'MNO', '2019-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `username` varchar(50) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`username`, `s_name`, `s_email`, `s_address`, `s_mobile`) VALUES
('ss', 'Seller one', 'seller01@gmail.com', 'Dhaka', '01755555555');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `s_id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `send_date` date NOT NULL,
  `received_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`s_id`, `product_name`, `quantity`, `send_date`, `received_date`) VALUES
(1, 'pp', 40, '2019-04-17', '2019-04-30'),
(2, 'pp2', 25, '2019-04-17', '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `transferredintobd`
--

CREATE TABLE `transferredintobd` (
  `t_id` int(20) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferredintobd`
--

INSERT INTO `transferredintobd` (`t_id`, `receiver_name`, `amount`, `date`) VALUES
(1, 'Nobel', '4500', '2019-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`username`, `password`, `user_type`) VALUES
('mm', 'mm', 'MANAGER'),
('ss', 'ss', 'SELLER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `daily_sells`
--
ALTER TABLE `daily_sells`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transferredintobd`
--
ALTER TABLE `transferredintobd`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daily_sells`
--
ALTER TABLE `daily_sells`
  MODIFY `ds_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `factory`
--
ALTER TABLE `factory`
  MODIFY `f_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `pos_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `raw_materials`
--
ALTER TABLE `raw_materials`
  MODIFY `material_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transferredintobd`
--
ALTER TABLE `transferredintobd`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
