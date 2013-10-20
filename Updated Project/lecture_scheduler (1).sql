-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2013 at 11:16 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lecture_scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `name` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `about` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `contact_no`, `about`, `Designation`, `department`, `college`, `image`, `email`) VALUES
('Dr. A.V. Reddy', '09443781597', 'M.E., Ph.D', 'Professor', 'Department of Computer Applications', 'NIT Trichy', '174_avr.jpg', 'reddy@nitt.edu'),
('Dr. B. Ramadoss', '', 'M.Tech, Ph.D', 'Professor', 'Department of Computer Applications', 'NIT Trichy', 'brama.bmp', 'brama@nitt.edu'),
('Dr. N.P. Gopalan', '9443416970', 'M.E., Ph.D', 'Professor', 'Department of Computer Applications', 'NIT Trichy', '185_npg.jpg', 'npgopalan@yahoo.com'),
('Dr. P.J.A. Alphonse', '', 'Ph. D, M.Tech, M.C.A., M. Sc., M. Phil', 'Associate Professor', 'Department of Computer Applications', 'NIT Trichy', 'alphonse sir.png', ''),
('Dr. S. Nickolas', '', 'Ph. D., M.E., M.C.A.', 'Head of Department', 'Department of Computer Applications', 'NIT Trichy', 'nickolas.jpg', 'nickolas@nitt.edu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('205112009', 'devansh'),
('205112016', 'ashish');
