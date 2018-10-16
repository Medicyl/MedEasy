-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 07:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medeasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_alt_name` varchar(50) NOT NULL,
  `p_mfg_date` date NOT NULL,
  `p_exp_date` date NOT NULL,
  `p_hsn_code` varchar(20) NOT NULL,
  `p_description` varchar(1000) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  `p_presc` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_alt_name`, `p_mfg_date`, `p_exp_date`, `p_hsn_code`, `p_description`, `p_quantity`, `p_type`, `p_presc`, `p_price`, `p_image`) VALUES
(1, 'Crocin', 'cr', '2018-08-01', '2020-08-02', '123', 'Paracetamol', 5, 'tablet', 0, 20, 'http://4.imimg.com/data4/TY/FX/GLADMIN-185846/crocin-advance-tablet-250x250.jpg'),
(2, 'Saridon', 'sar', '2018-08-01', '2020-07-05', '1234', 'Headache', 10, 'tablet', 0, 10, 'https://5.imimg.com/data5/KX/QL/GLADMIN-2123920/saridon-250x250.jpg'),
(3, 'CoughQ', 'cog', '2017-08-02', '2020-08-02', '12345', 'Cold', 14, 'Liquid', 1, 100, 'https://5.imimg.com/data5/LQ/DO/MY-8336070/zyrocold-cough-syrup-250x250.jpg'),
(4, 'CoughQ', 'cq', '2018-10-11', '2018-10-27', '486486', 'Coughq is good for cold.', 100, 'tablet', 0, 30, 'https://3.imimg.com/data3/GU/LG/MY-7821106/azitro-500mg-tablet-250x250.jpg'),
(5, 'dettol', 'dettolantiseptic', '2018-10-12', '2018-10-31', '4165', 'Antiseptic', 789, 'liquid', 0, 50, 'https://5.imimg.com/data5/CL/KF/MY-10537017/liquid-handwash-250x250.jpg'),
(6, 'dettol', 'dettolantiseptic', '2018-10-12', '2018-10-31', '4165', 'Antiseptic', 789, 'liquid', 1, 45, 'https://5.imimg.com/data5/BS/HH/MY-27129570/dettol-aloe-liquid-handwash-250x250.png'),
(7, 'moov', 'moovointment', '2018-10-02', '2018-10-19', '5145', 'Ointment', 54, 'cream', 0, 20, 'https://5.imimg.com/data5/QP/BQ/GLADMIN-9989194/moov-cream-backpain-specialist-10g-250x250.jpg'),
(8, 'zandu balm', 'zbalm', '2018-10-23', '2018-10-31', '153', 'Balm', 54, 'cream', 0, 30, 'https://3.imimg.com/data3/VL/RQ/MY-3394706/zandu-balm-25-ml-250x250.jpg'),
(9, 'eno', 'eno', '2018-09-12', '2018-10-19', '4164', 'Eno is used for gastric diseases.', 16, 'powder', 0, 5, 'https://5.imimg.com/data5/AG/TT/MY-25574894/eno-orange-sachet-5gm-250x250.png'),
(10, 'relispray', 'Relispray', '2018-10-03', '2018-10-26', '54165', 'Used for pain relief.', 55, 'Spray', 0, 60, 'https://3.imimg.com/data3/CF/NU/MY-2529238/relispray-pain-relief-spray-250x250.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_lname` varchar(20) NOT NULL,
  `u_type` int(11) NOT NULL,
  `u_mail` varchar(100) NOT NULL,
  `u_phone` int(11) NOT NULL,
  `u_password` varchar(256) NOT NULL,
  `u_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `u_birth` date NOT NULL,
  `u_propic` varchar(20) DEFAULT NULL,
  `u_gender` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_lname`, `u_type`, `u_mail`, `u_phone`, `u_password`, `u_timestamp`, `u_birth`, `u_propic`, `u_gender`) VALUES
(1, 'Mihir', '', 1, 'mihir.ss@somaiya.edu', 100, 'mihir', '2018-08-14 10:03:35', '1998-05-05', 'none', 0),
(2, 'Priyam', '', 1, 'priyam.ds@somaiya.edu', 101, 'priyam', '2018-08-14 10:05:35', '1998-05-26', 'none', 0),
(3, 'Devansh', '', 1, 'devansh.solanki@somaiya.edu', 102, 'devansh', '2018-08-14 10:08:14', '1998-07-15', 'none', 0),
(4, 'Sharvai', '', 0, 'sharvai.sp@somaiya.edu', 103, 'sharvai', '2018-08-14 10:08:14', '1998-04-22', 'none', 0),
(5, 'Amit', '', 0, 'amit.bhujbal@somaiya.edu', 104, 'amit', '2018-08-14 10:09:11', '1998-02-10', 'none', 0),
(16, 'A', 'b', 0, 'a@gmail.com', 464151, '$2y$15$kilfqkh9cTUS2VykS5mwY.wyaM8qDFc5MMWoSA8xp7e0G7uFcMnH6', '2018-09-17 18:11:56', '2014-02-02', NULL, 0),
(18, 'bechohsdj', 'bejkbfkrbfgkjrb', 0, 'becho@gmail.com', 123456789, '$2y$15$oIbpI4EyBbjYYgRe65YKPuZLOoBfOQgPaqrH2wQecSZOVfuuhjrGW', '2018-10-14 17:00:58', '2015-10-09', NULL, 1),
(19, 'ADMIN', 'Medeasy', 0, 'admin@medeasy.com', 1111222233, '$2y$15$JQIRua.WCQ1Q2JiAFsSALOvLTlIe6pXtG71yRnFbQn8rf8lrJ3w0y', '2018-10-13 09:23:17', '2016-11-01', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `total_amt` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `dis_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `p_id`, `u_id`, `total_amt`, `payment`, `payment_type`, `dis_amt`) VALUES
(1, 1, 1, 20, 1, 'Credit Card', 5),
(2, 2, 2, 10, 1, 'Cash', 3),
(3, 3, 3, 20, 1, 'Credit Card', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_med_rep`
--

CREATE TABLE `user_med_rep` (
  `umr_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `report_files` varchar(100) NOT NULL,
  `disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `ind2` (`u_fname`),
  ADD KEY `ind1` (`u_phone`),
  ADD KEY `ind3` (`u_fname`,`u_phone`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `user_med_rep`
--
ALTER TABLE `user_med_rep`
  ADD PRIMARY KEY (`umr_id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_med_rep`
--
ALTER TABLE `user_med_rep`
  MODIFY `umr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `user_cart_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_cart_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_med_rep`
--
ALTER TABLE `user_med_rep`
  ADD CONSTRAINT `user_med_rep_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
