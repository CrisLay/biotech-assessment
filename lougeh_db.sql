-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 06:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lougeh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `admin_id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`admin_id`, `username`, `pass`) VALUES
(1, 'ana', 'conda123');

-- --------------------------------------------------------

--
-- Table structure for table `cashier_logs`
--

CREATE TABLE `cashier_logs` (
  `cashier_id` int(6) UNSIGNED NOT NULL,
  `cash_fname` varchar(30) NOT NULL,
  `cash_lname` varchar(30) NOT NULL,
  `cash_user` varchar(50) NOT NULL,
  `cash_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier_logs`
--

INSERT INTO `cashier_logs` (`cashier_id`, `cash_fname`, `cash_lname`, `cash_user`, `cash_pass`) VALUES
(1, 'Cherry', 'Lie', 'cherry12', 'cherey22');

-- --------------------------------------------------------

--
-- Table structure for table `customer_infos`
--

CREATE TABLE `customer_infos` (
  `cust_id` int(6) UNSIGNED NOT NULL,
  `cus_fname` varchar(30) NOT NULL,
  `cus_iname` varchar(30) DEFAULT NULL,
  `cus_lname` varchar(30) NOT NULL,
  `cus_no` varchar(11) NOT NULL,
  `cus_street` varchar(20) DEFAULT NULL,
  `cus_brgy` varchar(20) NOT NULL,
  `cus_city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_infos`
--

INSERT INTO `customer_infos` (`cust_id`, `cus_fname`, `cus_iname`, `cus_lname`, `cus_no`, `cus_street`, `cus_brgy`, `cus_city`) VALUES
(1, 'Ana', 'C.', 'Condamoy', '09643423635', 'Dagohoy Paradise', 'North', 'General Santos City');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_transacs`
--

CREATE TABLE `delivery_transacs` (
  `delivery_id` int(6) UNSIGNED NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `stock_decs` varchar(30) NOT NULL,
  `stock_quan` int(30) NOT NULL,
  `cost_per_unit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_transacs`
--

INSERT INTO `delivery_transacs` (`delivery_id`, `supplier_name`, `stock_decs`, `stock_quan`, `cost_per_unit`) VALUES
(1, 'Big Company', 'Ballpen', 30, 5.5);

-- --------------------------------------------------------

--
-- Table structure for table `item_infos`
--

CREATE TABLE `item_infos` (
  `item_id` int(6) UNSIGNED NOT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `prod_des` varchar(30) NOT NULL,
  `prod_quan` int(10) NOT NULL,
  `prod_costperunit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_infos`
--

INSERT INTO `item_infos` (`item_id`, `barcode`, `prod_des`, `prod_quan`, `prod_costperunit`) VALUES
(1, '3242', 'Surf', 50, 8.5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_infos`
--

CREATE TABLE `supplier_infos` (
  `sup_id` int(6) UNSIGNED NOT NULL,
  `unique_code` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_no` varchar(30) NOT NULL,
  `company_street` varchar(50) NOT NULL,
  `company_brgy` varchar(50) NOT NULL,
  `company_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_infos`
--

INSERT INTO `supplier_infos` (`sup_id`, `unique_code`, `company_name`, `company_no`, `company_street`, `company_brgy`, `company_city`) VALUES
(1, '435252', 'Big Company', '0965324252624', 'Laurel', 'North', 'General Santos City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cashier_logs`
--
ALTER TABLE `cashier_logs`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `customer_infos`
--
ALTER TABLE `customer_infos`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `delivery_transacs`
--
ALTER TABLE `delivery_transacs`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `item_infos`
--
ALTER TABLE `item_infos`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `supplier_infos`
--
ALTER TABLE `supplier_infos`
  ADD PRIMARY KEY (`sup_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `admin_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashier_logs`
--
ALTER TABLE `cashier_logs`
  MODIFY `cashier_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_infos`
--
ALTER TABLE `customer_infos`
  MODIFY `cust_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_transacs`
--
ALTER TABLE `delivery_transacs`
  MODIFY `delivery_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_infos`
--
ALTER TABLE `item_infos`
  MODIFY `item_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_infos`
--
ALTER TABLE `supplier_infos`
  MODIFY `sup_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
