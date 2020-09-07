-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 08:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(65) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`c_id`, `c_name`) VALUES
(1, 'อาหาร'),
(2, 'เสื้อผ้า');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(65) COLLATE utf8_bin NOT NULL,
  `p_detail` text COLLATE utf8_bin NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_price` float NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`p_id`, `p_name`, `p_detail`, `p_amount`, `p_price`, `c_id`) VALUES
(6, 'asdasdasdasd', '1', 1, 1, 1),
(8, '21321321213', '55555555555555555555555555555555', 5, 5, 2),
(9, '5', '5', 5, 5, 1),
(10, 'กางเกงเทพๆ', 'ขาดนิดนึงจ้า', 12, 55.45, 2),
(12, 'asdasd', '1', 1, 1, 1),
(13, 'asdasd', '2', 2, 2, 1),
(14, 'adasd', '2', 2, 2, 1),
(15, 'asd', '3', 2, 1, 1),
(16, 'ฟหกฟหก', '10', 555, 555, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
