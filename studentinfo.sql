-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 06:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` int(11) NOT NULL,
  `coursename` text NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `deptid` int(11) NOT NULL,
  `deptname` text NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

CREATE TABLE IF NOT EXISTS `result1` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text,
  `cgpa` float DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result2`
--

CREATE TABLE IF NOT EXISTS `result2` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text,
  `cgpa` float DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result3`
--

CREATE TABLE IF NOT EXISTS `result3` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text,
  `cgpa` float DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result4`
--

CREATE TABLE IF NOT EXISTS `result4` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text,
  `cgpa` float DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result5`
--

CREATE TABLE IF NOT EXISTS `result5` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text,
  `cgpa` float DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result6`
--

CREATE TABLE IF NOT EXISTS `result6` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text,
  `cgpa` float DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE IF NOT EXISTS `sem2` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE IF NOT EXISTS `sem3` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE IF NOT EXISTS `sem4` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE IF NOT EXISTS `sem5` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE IF NOT EXISTS `sem6` (
  `regno` text,
  `course` int(11) DEFAULT NULL,
  `sub1` text,
  `sub2` text,
  `sub3` text,
  `sub4` text,
  `sub5` text,
  `sub6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int(11) NOT NULL,
  `satffname` text NOT NULL,
  `department` int(11) NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `admissionnum` int(11) NOT NULL,
  `regno` text NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `native` text NOT NULL,
  `religion` text NOT NULL,
  `course` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `bloodgroup` text NOT NULL,
  PRIMARY KEY (`admissionnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `coursecode` text NOT NULL,
  `coursetype` text NOT NULL,
  `title` text NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL,
  `username` text,
  `password` text,
  `type` text,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `type`) VALUES
(1, 'admin', '63a9f0ea7bb98050796b649e85481845', 'admin'),
(2, 'staff', '5f4dcc3b5aa765d61d8327deb882cf99', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
