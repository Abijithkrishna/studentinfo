-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2015 at 11:53 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_bus_route`
--

CREATE TABLE IF NOT EXISTS `tm_bus_route` (
  `route_number` int(11) DEFAULT NULL,
  `start_location` int(11) DEFAULT NULL,
  `end_location` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_bus_route`
--

INSERT INTO `tm_bus_route` (`route_number`, `start_location`, `end_location`, `start_time`) VALUES
(1, 2, 21, '11:00:00'),
(33, 1, 88, '05:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tm_bus_stop`
--

CREATE TABLE IF NOT EXISTS `tm_bus_stop` (
  `name` text,
  `id` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `distance` bigint(20) DEFAULT NULL,
  `estimated_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_bus_stop`
--

INSERT INTO `tm_bus_stop` (`name`, `id`, `route`, `distance`, `estimated_time`) VALUES
('anna nagar', 8, 1, 1000, '00:00:45'),
('anna nagar', 9, 1, 1000, '00:36:00'),
('anna nagar', 10, 1, 1000, '36:06:00'),
('anna nagar', 11, 1, 1000, '03:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `tm_employee`
--

CREATE TABLE IF NOT EXISTS `tm_employee` (
  `id` int(11) NOT NULL,
  `role` text,
  `name` text,
  `license_number` text,
  `expiry` date DEFAULT NULL,
  `employee_status` text,
  `verification` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_employee`
--

INSERT INTO `tm_employee` (`id`, `role`, `name`, `license_number`, `expiry`, `employee_status`, `verification`) VALUES
(23, '', 'jg', '546', '2015-01-01', '', ''),
(25, 'hfs', 'jg', '546', '2015-01-01', '', ''),
(44, '', 'this', '1234', '0000-00-00', 'working', 'yes'),
(255, 'hfs', 'jg', '546', '2015-01-01', 'dsf', 'fds'),
(431, 'conductor', 'firest name s', '984', '0000-00-00', 'good', 'yes'),
(443, '', 'this', '1234', '0000-00-00', 'working', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tm_passengers`
--

CREATE TABLE IF NOT EXISTS `tm_passengers` (
  `id` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `stop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_passengers`
--

INSERT INTO `tm_passengers` (`id`, `route`, `stop`) VALUES
(89, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tm_vehicle_details`
--

CREATE TABLE IF NOT EXISTS `tm_vehicle_details` (
  `number` varchar(20) DEFAULT NULL,
  `type` text,
  `capacity` int(11) DEFAULT NULL,
  `vehicle_condition` text,
  `vehicle_status` text,
  `route` int(11) DEFAULT NULL,
  `driver` int(11) DEFAULT NULL,
  `conductor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_vehicle_details`
--

INSERT INTO `tm_vehicle_details` (`number`, `type`, `capacity`, `vehicle_condition`, `vehicle_status`, `route`, `driver`, `conductor`) VALUES
('sfa', '3', 3, 'sf', 'fas', 6, 3, 9),
('kd34dk3948', '1', 60, 'good', 'running', 2, NULL, NULL),
('www', '1', 7, '', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tm_bus_stop`
--
ALTER TABLE `tm_bus_stop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_employee`
--
ALTER TABLE `tm_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_passengers`
--
ALTER TABLE `tm_passengers`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
