-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 25, 2022 at 04:26 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_type` tinyint(1) DEFAULT '2',
  `account_code` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `invoice` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `main_account` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `account_type`, `account_code`, `email`, `phone`, `tel`, `fax`, `address`, `website`, `invoice`, `balance`, `father_name`, `main_account`) VALUES
(13, 'Asset', 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Liabilities', 0, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Expenses', 0, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Revanues', 0, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Fixed Assets', 1, '101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Asset', NULL),
(18, 'Current assets', 1, '102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Asset', NULL),
(19, 'Stocks of goods', 1, '103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Asset', NULL),
(20, 'Other Assets', 1, '104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Asset', NULL),
(21, 'Intangible assets', 1, '105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Asset', NULL),
(22, 'Furniture and decorations', 2, '101001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fixed Assets'),
(23, 'Medical Devices', 2, '101002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fixed Assets'),
(24, 'Printers and printers', 2, '101003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fixed Assets'),
(25, 'Electrical appliances', 2, '101004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fixed Assets'),
(26, 'Furniture Medical', 2, '101005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fixed Assets'),
(27, 'Fund money', 2, '102001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Current assets'),
(28, 'CASH CLINIC', 2, '102002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Current assets'),
(29, 'Stocks Of goods', 2, '103001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stocks of goods'),
(30, 'Preliminary expenses', 2, '104001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other Assets'),
(31, 'Accounting Software', 2, '105001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Intangible assets'),
(32, 'websites software', 2, '105002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Intangible assets'),
(33, 'Current Liabilities', 1, '201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(34, 'Supplier Accounts', 1, '20101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(35, 'Provisions', 1, '20102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(36, 'Accrued Expenses', 1, '20103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(37, 'Due to related parties', 1, '20104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(38, 'Capital and shareholders\' equity', 1, '202', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(39, 'Capital Share', 1, '20201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(40, 'Insurance companies', 1, '203', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(41, 'Other Creditors', 1, '204', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(42, 'Buy fixed assets Creditors', 1, '20401', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Liabilities', NULL),
(43, 'General and administrative expenses', 1, '301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expenses', NULL),
(44, 'Depreciation Expense', 1, '30101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expenses', NULL),
(45, 'Bank expenses', 1, '30102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expenses', NULL),
(46, 'advertising expenses', 1, '30103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expenses', NULL),
(47, 'Purchases of raw materials and spare parts', 1, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expenses', NULL),
(48, 'Capital Lease Expenses', 1, '304', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expenses', NULL),
(49, 'Clinic Revenues', 1, '401', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Revanues', NULL),
(50, 'Discounts acquired', 1, '402', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Revanues', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deed_of_arrest`
--

CREATE TABLE `deed_of_arrest` (
  `id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_code` varchar(20) NOT NULL,
  `description` text,
  `credit` int(11) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_account_name` varchar(50) NOT NULL,
  `to_account_code` varchar(20) NOT NULL,
  `to_description` text,
  `to_credit` int(11) DEFAULT NULL,
  `to_debit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deed_of_arrest`
--

INSERT INTO `deed_of_arrest` (`id`, `account_name`, `account_code`, `description`, `credit`, `debit`, `created_at`, `updated_at`, `to_account_name`, `to_account_code`, `to_description`, `to_credit`, `to_debit`) VALUES
(3, 'Fixed Assets', '101', '', 80, NULL, '2022-09-25 08:12:22', '2022-09-25 08:12:22', 'Current assets', '102', NULL, 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exchange_voucher_registration`
--

CREATE TABLE `exchange_voucher_registration` (
  `id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_code` varchar(20) NOT NULL,
  `description` text,
  `credit` int(11) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_account_name` varchar(50) NOT NULL,
  `to_account_code` varchar(20) NOT NULL,
  `to_description` text,
  `to_credit` int(11) DEFAULT NULL,
  `to_debit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exchange_voucher_registration`
--

INSERT INTO `exchange_voucher_registration` (`id`, `account_name`, `account_code`, `description`, `credit`, `debit`, `created_at`, `updated_at`, `to_account_name`, `to_account_code`, `to_description`, `to_credit`, `to_debit`) VALUES
(1, 'Stocks of goods', '103', '', NULL, NULL, '2022-09-25 08:47:12', '2022-09-25 08:47:12', 'Intangible assets', '105', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'STM Accountant', 'smarttarget', '$2y$10$NsT.a/uwlxF8vP6mYhq7outgL6T4bQ5/SzGZ8TyzA4OrPtgMIWama', '2022-09-19 09:33:36', '2022-09-19 07:33:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_code` (`account_code`);

--
-- Indexes for table `deed_of_arrest`
--
ALTER TABLE `deed_of_arrest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_voucher_registration`
--
ALTER TABLE `exchange_voucher_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `deed_of_arrest`
--
ALTER TABLE `deed_of_arrest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exchange_voucher_registration`
--
ALTER TABLE `exchange_voucher_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
