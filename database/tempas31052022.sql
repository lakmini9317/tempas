-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 03:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempas`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ongoing'),
(2, 'Old'),
(27, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `ctenants`
--

CREATE TABLE `ctenants` (
  `id` int(11) NOT NULL,
  `agref` varchar(20) NOT NULL,
  `fileno` varchar(50) NOT NULL,
  `procode` varchar(50) NOT NULL,
  `cuscode` varchar(50) NOT NULL,
  `privadd` varchar(500) NOT NULL,
  `premisadd` varchar(500) NOT NULL,
  `extent` varchar(20) NOT NULL,
  `planno` varchar(25) NOT NULL,
  `lotno` varchar(50) NOT NULL,
  `allodate` date NOT NULL,
  `phyhodate` date NOT NULL,
  `peridalloc` varchar(500) NOT NULL,
  `expdate` date NOT NULL,
  `monrent` float NOT NULL,
  `tax` int(11) NOT NULL,
  `secudep` int(11) NOT NULL,
  `secureceipt` varchar(50) NOT NULL,
  `intrst` int(11) NOT NULL,
  `apprv` varchar(50) NOT NULL,
  `dperiod` varchar(50) NOT NULL,
  `duamnt` int(11) NOT NULL,
  `oic` varchar(100) NOT NULL,
  `allocval` int(20) NOT NULL,
  `1rnp` varchar(100) NOT NULL,
  `1rnv` int(20) NOT NULL,
  `2rnp` varchar(100) NOT NULL,
  `2rnv` int(20) NOT NULL,
  `3rnp` varchar(100) NOT NULL,
  `3rnv` int(20) NOT NULL,
  `4rnp` varchar(100) NOT NULL,
  `4rnv` int(20) NOT NULL,
  `5rnp` varchar(100) NOT NULL,
  `5rnv` int(20) NOT NULL,
  `6rnp` varchar(100) NOT NULL,
  `6rnv` int(20) NOT NULL,
  `7rnp` varchar(100) NOT NULL,
  `7rnv` int(20) NOT NULL,
  `8rnp` varchar(100) NOT NULL,
  `8rnv` int(20) NOT NULL,
  `9rnp` varchar(100) NOT NULL,
  `9rnv` int(20) NOT NULL,
  `10rnp` varchar(100) NOT NULL,
  `10rnv` int(20) NOT NULL,
  `11rnp` varchar(100) NOT NULL,
  `11rnv` int(20) NOT NULL,
  `12rnp` varchar(100) NOT NULL,
  `12rnv` int(20) NOT NULL,
  `13rnp` varchar(100) NOT NULL,
  `13rnv` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `house_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0= inactive',
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_no`, `category_id`, `description`, `price`) VALUES
(2, '3', 1, 'this is wetland ', 75300),
(4, '1232', 1, 'abnx', 25000),
(5, '12', 1, 'Can use for parking', 25000),
(6, '6767', 1, 'nice land', 125000),
(7, '66', 1, 'hdsfhj', 2424254);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `invoicedate` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `tenant_id`, `amount`, `invoice`, `invoicedate`, `date_created`) VALUES
(5, 35, 27300, '22hshd', '0000-00-00', '2022-05-05 11:14:58'),
(6, 35, 78032, '22hshda', '0000-00-00', '2022-05-05 11:15:29'),
(7, 40, 15000, 'ivc12223', '2022-05-05', '2022-05-09 10:41:57'),
(9, 40, 10000, 'invc2', '2022-05-06', '2022-05-13 09:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `payment_cat`
--

CREATE TABLE `payment_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_cat`
--

INSERT INTO `payment_cat` (`id`, `name`) VALUES
(1, '6 months'),
(2, '12 months'),
(3, 'daily'),
(4, 'weekly'),
(5, '5 year'),
(6, 'unlimited');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Temporary Allocation Management System', 'info@uda.gov.lk', '+6948 8542 623', '1603344720_1602738120_pngtree-purple-hd-business-banner-image_5493.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `agref` varchar(20) NOT NULL,
  `fileno` varchar(50) NOT NULL,
  `procode` varchar(50) NOT NULL,
  `cuscode` varchar(50) NOT NULL,
  `privadd` varchar(500) NOT NULL,
  `extent` varchar(20) NOT NULL,
  `planno` varchar(25) NOT NULL,
  `lotno` varchar(50) NOT NULL,
  `allodate` date NOT NULL,
  `phyhodate` date NOT NULL,
  `expdate` date NOT NULL,
  `monrent` float NOT NULL,
  `tax` int(11) NOT NULL,
  `secudep` int(11) NOT NULL,
  `secureceipt` varchar(50) NOT NULL,
  `intrst` int(11) NOT NULL,
  `apprv` varchar(50) NOT NULL,
  `dperiod` varchar(50) NOT NULL,
  `damnt` int(11) NOT NULL,
  `oic` varchar(100) NOT NULL,
  `rrdav` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `house_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0= inactive',
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `agref`, `fileno`, `procode`, `cuscode`, `privadd`, `extent`, `planno`, `lotno`, `allodate`, `phyhodate`, `expdate`, `monrent`, `tax`, `secudep`, `secureceipt`, `intrst`, `apprv`, `dperiod`, `damnt`, `oic`, `rrdav`, `firstname`, `email`, `contact`, `house_id`, `status`, `date_in`) VALUES
(38, 'hghjk', 'tyyteyrt', 'gh', 'jfgjh', 'hhhh', 'hghgf', 'ghghh', 'hhhh', '2022-05-09', '2022-05-12', '2022-08-19', 36000, 52, 12500, 'xbcd', 12, 'lakmini', '5 month', 2300, 'fkjkf', 'plz', 'ghhghh', 'aaaa@aa.com', '1418787844', 5, 1, '2022-12-12'),
(39, '1111', '10/6/5077', '81042', '98931', 'hdfj', '16p', '123', 'part of lot no 1', '2022-05-11', '2022-05-12', '2022-08-09', 12500, 4000, 150000, 'fghfh', 12, 'lakmini', '5 month', 21, 'lakmini', '44', 'test123', 'john@gmail.com', '22545244', 2, 0, '2022-08-09'),
(40, '124', 'yfufd', 'dfhhdf', 'hfdjhdf', '57/4,3/4, Mahawela road,Colombo 09', 'gf', 'dff', 'part of lot no 1', '2022-05-09', '2022-05-10', '2023-02-09', 12, 12, 500, 'vsgs55', 12, 'lakmini', 'vnbbv', 22, 'lakmini', '2222222', 'hansi', '', '', 4, 1, '2022-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2=Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(2, 'userx', 'user', 'c93ccd78b2076528346216b3b2f701e6', 2),
(3, 'land', 'land', 'deb2c9b4e62ecf6f04f96811b7a01d3b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctenants`
--
ALTER TABLE `ctenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_cat`
--
ALTER TABLE `payment_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ctenants`
--
ALTER TABLE `ctenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_cat`
--
ALTER TABLE `payment_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
