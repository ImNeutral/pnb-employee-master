-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 07:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnb_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_types`
--

CREATE TABLE `access_types` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `access_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_types`
--

INSERT INTO `access_types` (`id`, `account_id`, `access_type`) VALUES
(25, 2, 'inventory'),
(26, 3, 'inventory'),
(27, 4, 'employee'),
(28, 4, 'inventory'),
(30, 4, 'waiter'),
(31, 6, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `change_password_code` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `employee_id`, `username`, `password`, `change_password_code`, `active`) VALUES
(2, 3, 'jofiltesting', '$2y$10$xCWYhQkAHKliH5N1x7mH7OEt728k8OWGjrweZymT8r2QPWDE2WXRq', NULL, 1),
(3, 4, 'Geron123', '$2y$10$R1OxDpnJc4uaCo3AO1sV0uYk318HuyMSUm3b3ZHPYvX0Fa3A9Zzae', '$2y$10$9FkmpCsqGtahn7bWiPLqYOSz5lNs5LNQGlIUMn0PtXOE5MhjaOSqC', 0),
(4, 17, 'testing', '$2y$10$rQ9UGFRiHgJ96GZizabrUuxn7rvvEP23nDLL9dcQwCibKLP4NgUby', '$2y$10$roTkZDFCuJ.fupnT0fhtvOnNtizgT7b2QgqGXp7PHpDEVM3GAjq0q', 1),
(6, 18, 'testing123', '$2y$10$D21LtT.2cTVRJea9B85VN.2W6aqpUrXzBlGySVKCTNqQZmUgkQMpq', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `address` text,
  `position` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `middle_name`, `last_name`, `sex`, `civil_status`, `birthdate`, `contact_number`, `address`, `position`, `active`) VALUES
(1, 'Christian', 'Luceno', 'Garillo', 'M', 'SINGLE', '1996-04-12', '09467983198', 'TOOG ST. TAGLATAWAN BAYUGAN CITY ADS', 'Waiter', 1),
(2, 'Siegfred', 'Balasa', 'Pagador', 'F', 'SINGLE', '1991-04-12', '09464646466', 'CABADBARAN NOT CITY ADN', 'Waiter', 0),
(3, 'Jofil', 'Almendra', 'Israel', 'M', 'SINGLE', '1996-04-12', '09090909099', 'Bayugan City, Agusan sur', 'Manager', 0),
(4, 'Geron', 'Galela', 'Ronquillo', 'M', 'SINGLE', '1995-02-11', '09090999999', 'Tandag City', 'Waiter', 0),
(17, 'Awaaaa', 'Wa', 'Ra', 'M', 'SINGLE', '2017-12-31', '09090909099', 'Toog St.', 'Waiter', 0),
(18, 'Aw2', 'Wa', 'Ra', 'F', 'SINGLE', '2015-11-30', '123-444', 'Bayugan City, Agusan sur', 'Waiter', 0),
(19, 'Chris', 'Test', 'Ting', 'M', 'SINGLE', '2017-12-31', '09090909099', 'Toog St.', 'Waiter', 1),
(20, 'Test1', 'Test1', 'Test1', 'M', 'SINGLE', '2017-12-31', '09090909099', 'Toog St.', 'Manager', 1),
(21, 'Test2', 'Test2', 'Test2', 'M', 'SINGLE', '2017-12-31', '09090909099', 'Toog St.', 'Waiter', 1),
(22, 'Test3', 'Test3', 'Test3', 'M', 'SINGLE', '2017-12-31', '09467983198', 'Toog St.', 'Waiter', 1),
(23, 'Test4', 'Test4', 'Test4', 'M', 'SINGLE', '2017-12-31', '09090909099', 'Toog St.', 'Waiter', 1),
(24, 'Test5', 'Test5', 'Test5', 'M', 'SINGLE', '2016-11-30', '09090909099', 'Toog St.', 'Manager', 1),
(25, 'Test', 'Test', 'Test', 'M', 'SINGLE', '2007-03-01', '09090909099', 'Toog St.', 'Waiter', 0),
(26, 'Qeaweaawd', 'Gesfadawd', 'Wgwagwad', 'M', 'SINGLE', '2007-09-05', '123123123', 'Bayugan', 'Owner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `waiter` varchar(255) NOT NULL,
  `cashier` varchar(255) DEFAULT NULL,
  `table` varchar(5) NOT NULL,
  `type` varchar(5) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `cash` decimal(10,2) NOT NULL,
  `change_amount` decimal(10,2) NOT NULL,
  `priority` int(1) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `waiter`, `cashier`, `table`, `type`, `total`, `cash`, `change_amount`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Siegfred B. Pagador', '2', 'out', '204.00', '204.00', '0.00', 0, 'Paid', '2016-09-08 00:52:51', '2016-09-08 15:00:30'),
(2, '', 'Siegfred B. Pagador', '2', 'out', '282.00', '300.00', '18.00', 0, 'Paid', '2017-09-08 00:56:19', '2017-09-08 14:58:27'),
(3, '', 'Siegfred B. Pagador', '2', 'out', '194.00', '200.00', '6.00', 0, 'Paid', '2017-09-08 00:57:10', '2017-09-08 15:00:10'),
(4, '', 'Siegfred B. Pagador', '3', 'out', '68.00', '70.00', '2.00', 0, 'Paid', '2017-09-08 00:58:57', '2017-09-08 15:00:49'),
(5, '', 'Siegfred B. Pagador', '2', 'out', '73.00', '100.00', '27.00', 0, 'Paid', '2017-09-08 00:59:16', '2017-09-08 15:02:00'),
(6, '', 'Siegfred B. Pagador', '1', 'in', '73.00', '100.00', '27.00', 0, 'Paid', '2017-09-08 00:59:39', '2017-09-08 15:02:19'),
(7, '', 'Siegfred B. Pagador', '2', 'in', '15.00', '20.00', '5.00', 0, 'Paid', '2017-09-08 00:59:56', '2017-09-08 15:04:20'),
(8, '', 'Siegfred B. Pagador', '3', 'in', '73.00', '100.00', '27.00', 0, 'Paid', '2017-09-08 01:02:33', '2017-09-08 15:20:39'),
(9, '', 'Siegfred B. Pagador', '4', 'in', '126.00', '130.00', '4.00', 0, 'Paid', '2017-09-08 01:04:02', '2017-09-08 15:24:40'),
(10, '', 'Siegfred B. Pagador', '2', 'out', '611.00', '700.00', '89.00', 0, 'Paid', '2017-09-08 02:30:39', '2017-09-08 15:21:40'),
(11, '', 'Siegfred B. Pagador', '3', 'in', '146.00', '150.00', '4.00', 0, 'Paid', '2017-09-08 02:35:36', '2017-09-08 15:24:47'),
(12, '', NULL, '2', 'in', '68.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:36:29', NULL),
(13, '', NULL, '3', 'in', '126.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:41:48', NULL),
(14, '', NULL, '3', 'out', '204.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:42:41', NULL),
(15, '', NULL, '3', 'out', '15.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:43:09', NULL),
(16, '', 'Siegfred B. Pagador', '3', 'out', '126.00', '300.00', '174.00', 0, 'Paid', '2017-09-08 02:43:34', '2017-09-08 15:43:15'),
(17, '', NULL, '2', 'out', '68.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:44:16', NULL),
(18, '', NULL, '3', 'out', '136.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:44:42', NULL),
(19, '', NULL, '3', 'in', '136.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-08 02:46:05', NULL),
(20, '', 'Siegfred B. Pagador', '3', 'out', '204.00', '300.00', '96.00', 0, 'Paid', '2017-09-08 02:46:25', '2017-09-08 15:42:40'),
(21, '', 'Siegfred B. Pagador', '3', 'out', '146.00', '150.00', '4.00', 0, 'Paid', '2017-09-08 02:50:45', '2017-09-08 15:41:34'),
(22, '', 'Siegfred B. Pagador', '2', 'out', '136.00', '200.00', '64.00', 0, 'Paid', '2017-01-02 03:51:32', '2017-01-01 16:41:28'),
(23, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '5', 'in', '458.00', '500.00', '42.00', 0, 'Paid', '2017-02-08 16:27:32', '2017-02-08 16:41:21'),
(24, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '11', 'in', '734.00', '250.00', '16.00', 0, 'Paid', '2017-08-01 15:39:37', '2017-08-01 15:41:12'),
(25, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '4', 'out', '214.00', '250.00', '36.00', 0, 'Paid', '2017-08-01 15:40:05', '2017-08-01 15:41:04'),
(26, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '3', 'in', '319.00', '400.00', '81.00', 0, 'Paid', '2017-09-09 06:43:05', '2017-09-09 06:44:07'),
(27, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '4', 'in', '282.00', '300.00', '18.00', 0, 'Paid', '2017-09-09 06:43:16', '2017-09-09 07:15:04'),
(28, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '3', 'in', '370.00', '400.00', '30.00', 0, 'Paid', '2017-09-09 06:55:11', '2017-09-09 07:33:50'),
(29, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '3', 'in', '93.00', '100.00', '7.00', 0, 'Paid', '2017-09-09 07:36:30', '2017-09-09 08:06:25'),
(30, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '10', 'out', '269.00', '300.00', '31.00', 0, 'Paid', '2017-09-09 07:44:23', '2017-09-09 08:06:17'),
(31, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '8', 'in', '558.00', '600.00', '42.00', 0, 'Paid', '2017-05-09 07:51:50', '2017-05-09 14:31:31'),
(32, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '4', 'in', '432.00', '500.00', '68.00', 0, 'Paid', '2017-01-09 09:00:55', '2017-01-09 15:33:14'),
(33, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '4', 'out', '113.00', '200.00', '87.00', 0, 'Paid', '2016-09-11 08:10:21', '2016-09-11 14:31:48'),
(34, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '2', 'in', '126.00', '200.00', '74.00', 0, 'Paid', '2016-09-11 08:10:33', '2016-09-11 08:51:47'),
(35, 'Siegfred B. Pagador', 'Siegfred B. Pagador', '2', 'out', '302.00', '400.00', '98.00', 0, 'Paid', '2016-09-11 12:04:25', '2016-09-11 12:04:35'),
(36, 'Siegfred B. Pagador', NULL, '30', 'out', '40.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-11 13:09:31', NULL),
(37, 'Siegfred B. Pagador', NULL, '3', 'in', '921.00', '0.00', '0.00', 0, 'Unpaid', '2017-09-11 13:17:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `additional` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `name`, `description`, `price`, `qty`, `total`, `additional`) VALUES
(1, 'The Original Manila Porkchop', 'The Original Manila Porkchop', '25.00', 1, '25.00', 0),
(1, 'Tapsilog', 'Tapsilog', '25.00', 1, '25.00', 0),
(1, '7UP', '7UP', '25.00', 1, '25.00', 0),
(1, 'Pepsi', 'Pepsi', '25.00', 1, '25.00', 0),
(2, 'The Original Manila Porkchop', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(2, 'Beef Mami', 'Beef Mami', '68.00', 1, '68.00', 0),
(2, 'Spamsilog', 'Spamsilog', '88.00', 1, '88.00', 0),
(2, '7UP', '7UP', '15.00', 1, '15.00', 0),
(2, 'Mirinda', 'Mirinda', '15.00', 1, '15.00', 0),
(2, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(3, 'Tapsilog', 'Tapsilog', '68.00', 1, '68.00', 0),
(3, 'Tocilog', 'Tocilog', '68.00', 1, '68.00', 0),
(3, '7UP', '7UP', '15.00', 1, '15.00', 0),
(3, 'Mineral Water', 'Mineral Water', '20.00', 1, '20.00', 0),
(4, 'Tocilog', 'Tocilog', '68.00', 1, '68.00', 0),
(4, 'Tapsilog', 'Tapsilog', '68.00', 1, '68.00', 0),
(4, 'Chicken Mami', 'Chicken Mami', '68.00', 1, '68.00', 0),
(4, 'Manila Special Lugaw', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(4, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(5, 'Beef Mami', 'Beef Mami', '68.00', 2, '136.00', 0),
(5, 'Chicken Mami', 'Chicken Mami', '68.00', 2, '136.00', 0),
(5, 'Longsilog', 'Longsilog', '68.00', 1, '68.00', 0),
(5, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(5, 'Manila Special Lugaw', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(6, 'Manila Special Lugaw', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(7, 'Chicken Mami', 'Chicken Mami', '68.00', 1, '68.00', 0),
(8, 'Longsilog', 'Longsilog', '68.00', 1, '68.00', 0),
(8, 'Tocilog', 'Tocilog', '68.00', 1, '68.00', 0),
(9, 'Chicken Mami', 'Chicken Mami', '68.00', 1, '68.00', 0),
(9, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(10, 'Chicken Mami', 'Chicken Mami', '68.00', 1, '68.00', 0),
(11, 'B2', 'B2', '68.00', 1, '68.00', 0),
(11, 'B1', 'B1', '68.00', 1, '68.00', 0),
(11, 'C2', 'C2', '68.00', 1, '68.00', 0),
(11, 'C1', 'C1', '68.00', 1, '68.00', 0),
(12, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(1, 'A2', 'The Original Manila Porkchop', '25.00', 1, '25.00', 0),
(1, 'B1', 'Tapsilog', '25.00', 1, '25.00', 0),
(1, 'C3', 'Manila Special Lugaw', '25.00', 1, '25.00', 0),
(2, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(2, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(2, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(2, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(3, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(3, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(3, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(4, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(5, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(5, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(6, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(6, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(7, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(8, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(8, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(9, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(9, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(10, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(10, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(10, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 1, '20.00', 0),
(10, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(10, 'A2', 'The Original Manila Porkchop', '78.00', 2, '156.00', 0),
(10, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(10, 'C1', 'Beef Mami', '68.00', 2, '136.00', 0),
(10, 'Mineral Water', 'Mineral Water', '20.00', 1, '20.00', 0),
(10, '7UP', '7UP', '15.00', 1, '15.00', 0),
(10, 'B3', 'Spamsilog', '88.00', 1, '88.00', 0),
(10, 'Mirinda', 'Mirinda', '15.00', 1, '15.00', 0),
(11, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(11, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(12, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(13, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(13, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(14, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(14, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(14, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(15, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(16, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(16, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(17, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(18, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(18, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(19, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(19, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(20, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(20, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(20, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(21, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(21, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(22, 'B1', 'Tapsilog', '68.00', 2, '136.00', 0),
(23, 'B2', 'Tocilog', '68.00', 2, '136.00', 0),
(23, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(23, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(23, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(23, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(23, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 2, '40.00', 0),
(23, 'B3', 'Longsilog', '68.00', 1, '68.00', 0),
(24, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(24, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(24, 'B3', 'Spamsilog', '88.00', 1, '88.00', 0),
(25, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(25, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(25, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(26, 'C3', 'Manila Special Lugaw', '58.00', 2, '116.00', 0),
(26, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(26, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(26, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(26, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 4, '80.00', 0),
(26, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(27, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(27, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(27, 'C1', 'Beef Mami', '68.00', 2, '136.00', 0),
(27, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(28, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(28, 'B2', 'Tocilog', '68.00', 1, '68.00', 0),
(28, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(28, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(28, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(28, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(28, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(29, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(29, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(29, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(30, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(30, 'Mirinda', 'Mirinda', '15.00', 1, '15.00', 0),
(30, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(30, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(30, 'B3', 'Spamsilog', '88.00', 1, '88.00', 0),
(31, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(31, 'Mirinda', 'Mirinda', '15.00', 1, '15.00', 0),
(31, 'Gatorade Blue', 'Gatorade Blue', '20.00', 3, '60.00', 0),
(31, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 1, '20.00', 0),
(31, 'C3', 'Manila Special Lugaw', '58.00', 2, '116.00', 0),
(31, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(31, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(31, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(31, 'Mineral Water', 'Mineral Water', '20.00', 1, '20.00', 0),
(31, '7UP', '7UP', '15.00', 1, '15.00', 0),
(31, 'A1', 'The Original Manila Pares', '78.00', 1, '78.00', 0),
(32, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(32, 'A2', 'The Original Manila Porkchop', '78.00', 1, '78.00', 0),
(32, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(32, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(32, 'Pepsi', 'Pepsi', '15.00', 10, '150.00', 0),
(33, 'Pepsi', 'Pepsi', '15.00', 1, '15.00', 0),
(33, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(33, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(33, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 1, '20.00', 0),
(34, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(34, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(35, 'B1', 'Tapsilog', '68.00', 1, '68.00', 0),
(35, 'A1', 'The Original Manila Porkchop', '78.00', 2, '156.00', 0),
(35, 'A2', 'The Original Manila Pares', '78.00', 1, '78.00', 0),
(36, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 1, '20.00', 0),
(36, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(37, 'Coffee (Kopiko)', 'Coffee (Kopiko)', '20.00', 1, '20.00', 0),
(37, 'Gatorade Blue', 'Gatorade Blue', '20.00', 1, '20.00', 0),
(37, 'Tropicana', 'Tropicana', '20.00', 1, '20.00', 0),
(37, 'Mirinda', 'Mirinda', '15.00', 1, '15.00', 0),
(37, 'C1', 'Beef Mami', '68.00', 1, '68.00', 0),
(37, 'C2', 'Chicken Mami', '68.00', 1, '68.00', 0),
(37, 'C3', 'Manila Special Lugaw', '58.00', 1, '58.00', 0),
(37, 'B2', 'Tocilog', '68.00', 2, '136.00', 0),
(37, 'B1', 'Tapsilog', '68.00', 2, '136.00', 0),
(37, 'A1', 'The Original Manila Porkchop', '78.00', 2, '156.00', 0),
(37, 'A2', 'The Original Manila Pares', '78.00', 2, '156.00', 0),
(37, 'B3', 'Longsilog', '68.00', 1, '68.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `employee_id` int(11) NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `day_morning_from` time DEFAULT NULL,
  `day_morning_to` time DEFAULT NULL,
  `day_afternoon_from` time DEFAULT NULL,
  `day_afternoon_to` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`employee_id`, `day`, `day_morning_from`, `day_morning_to`, `day_afternoon_from`, `day_afternoon_to`) VALUES
(17, 'monday', '06:30:00', '11:12:00', '13:30:00', NULL),
(18, 'monday', '01:00:00', NULL, NULL, NULL),
(18, 'tuesday', '02:02:00', NULL, NULL, NULL),
(18, 'wednesday', NULL, NULL, NULL, NULL),
(18, 'thursday', NULL, NULL, NULL, NULL),
(18, 'friday', NULL, NULL, NULL, NULL),
(18, 'saturday', NULL, NULL, NULL, NULL),
(18, 'sunday', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_types`
--
ALTER TABLE `access_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `access_type_account_id_fk` (`account_id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
  ADD KEY `order_id_foreign` (`order_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD KEY `fk_schedule_employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_types`
--
ALTER TABLE `access_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_types`
--
ALTER TABLE `access_types`
  ADD CONSTRAINT `access_type_account_id_fk` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_employee_id_fk` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
