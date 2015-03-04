-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2015 at 09:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`msgid`, `message`) VALUES
(2, 'Hello world!'),
(3, 'Message two'),
(4, 'Results have been entered.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `regno` text NOT NULL,
  `semester` int(11) NOT NULL,
  `subcode` text NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`regno`, `semester`, `subcode`, `grade`) VALUES
('12csa1', 1, 'ULT01', 'A'),
('12csa1', 1, 'UES01', 'A+'),
('12csa1', 1, 'CAC11', 'B'),
('12csa1', 1, 'BTNAA', 'D'),
('12csa1', 1, 'ETS01', 'O'),
('12csa1', 1, 'CAC1P', 'A'),
('12csa1', 2, 'ULT02', 'B'),
('12csa1', 2, 'UES02', 'C'),
('12csa1', 2, 'CAC22', 'B+'),
('12csa1', 2, 'BTNAB', 'A'),
('12csa1', 2, 'PSP02', 'D+'),
('12csa1', 2, 'CAC2P', 'O'),
('12csa1', 3, 'CAC31', 'D'),
('12csa1', 3, 'CAC32', 'C+'),
('12csa1', 3, 'CANAC', 'B+'),
('12csa1', 3, 'CAC3P', 'B+'),
('12csa1', 3, 'CAC3Q', 'D'),
('12csa1', 3, 'CAA30', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int(11) NOT NULL,
  `staffname` text NOT NULL,
  `qualification` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `currentpos` text NOT NULL,
  `classhandled` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `qualification`, `address`, `phone`, `currentpos`, `classhandled`, `email`) VALUES
(1, 'BSCHOD', 'BA English, MA English,PHD', '27,myadress,city,state', '994897874', 'HOD', 'BSC Maths', 'bscmaths@kcc.edu'),
(123, 'robinhood', 'BSC Computer Science', '12/45,abcd,defg', '1234567891', 'class incharge', 'BCA 3rd year', 'staff@abc.com'),
(321, 'Vic', 'BCA Computer Science,M.Phil Computer Science', 'hod,college,address', '9876543210', 'HOD', 'BCA', 'hod@college.edu');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `admissionnum` int(11) NOT NULL,
  `regno` text NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `native` text NOT NULL,
  `religion` text NOT NULL,
  `course` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`admissionnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`admissionnum`, `regno`, `name`, `dob`, `father`, `mother`, `native`, `religion`, `course`, `address`, `mobile`, `email`) VALUES
(1001, '12bca1', 'Vignesh Vijay', '12/12/1992', 'Vijay', 'Padma kumari', 'India', 'Hindu', 'BCA', 'sachu mon,thiruvalla,kerala', '111111111111', 'vick@adh.com'),
(1223, '12csa1', 'Abijith Krishna', '27/12/1994', 'Unnikrishnan', 'Jaya Unnikrishnan', 'India', 'Hindu', 'BCA', 'aaaaaaaaaaaaa,bbbbbbbbbbbbbbbbbb,ccccccccccccccccccccccc', '7200650096', 'abc@kcc.edu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `type` text,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `type`) VALUES
(1, 'admin', 'root', 'admin'),
(2, 'staff', 'password', 'staff'),
(3, '12csa1', '1223', 'student'),
(4, 'staff123', 'robinhood', 'staff'),
(5, '12bca1', '1001', 'student'),
(7, 'staff001', 'BSCHOD', 'staff'),
(9, 'staff321', 'Vic', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
