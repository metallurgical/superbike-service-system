-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 11:49 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `superbike-service-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
`package_id` int(5) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `package_sub`
--

CREATE TABLE IF NOT EXISTS `package_sub` (
`package_sub_id` int(5) NOT NULL,
  `package_id` int(5) NOT NULL COMMENT 'from table package',
  `package_sub_name` int(11) NOT NULL COMMENT 'list of package available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service_center`
--

CREATE TABLE IF NOT EXISTS `service_center` (
`service_center_id` int(5) NOT NULL,
  `service_center_username` varchar(50) NOT NULL,
  `service_center_password` varchar(50) NOT NULL,
  `service_center_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(5) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_address` text NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_bike_type` varchar(30) NOT NULL,
  `user_bike_year` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_name`, `user_email`, `user_address`, `user_phone`, `user_bike_type`, `user_bike_year`) VALUES
(3, 'asd', '123', 'ahmad', 'mmm@yahoo.com', 'kkkl', '56786868', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
 ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_sub`
--
ALTER TABLE `package_sub`
 ADD PRIMARY KEY (`package_sub_id`);

--
-- Indexes for table `service_center`
--
ALTER TABLE `service_center`
 ADD PRIMARY KEY (`service_center_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
MODIFY `package_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package_sub`
--
ALTER TABLE `package_sub`
MODIFY `package_sub_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_center`
--
ALTER TABLE `service_center`
MODIFY `service_center_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
