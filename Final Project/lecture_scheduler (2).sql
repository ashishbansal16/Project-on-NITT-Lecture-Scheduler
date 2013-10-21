-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2013 at 06:22 PM
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
('Dr. A. Vadivel', '9443895177', 'M.Sc., M.Tech, Ph. D.', 'Associate Professor', 'Department of Computer Applications', 'NIT Trichy', 'sir.jpg', 'vadi@nitt.edu'),
('Dr. A.V. Reddy', '09443781597', 'M.E., Ph.D', 'Professor', 'Department of Computer Applications', 'NIT Trichy', '174_avr.jpg', 'reddy@nitt.edu'),
('Dr. B. Ramadoss', '9894602642', 'M.Tech, Ph.D', 'Professor', 'Department of Computer Applications', 'NIT Trichy', 'brama.bmp', 'brama@nitt.edu'),
('Dr. Michael Arock', '9842378952', 'M.C.A., Ph. D.', 'Associate Professor', 'Department of Computer Applications', 'NIT Trichy', '544_a1.jpg', 'michael@nitt.edu'),
('Dr. N.P. Gopalan', '9443416970', 'M.E., Ph.D', 'Professor', 'Department of Computer Applications', 'NIT Trichy', '185_npg.jpg', 'npgopalan@yahoo.com'),
('Dr. P.J.A. Alphonse', '9489066247', 'Ph. D, M.Tech, M.C.A., M. Sc., M. Phil', 'Associate Professor', 'Department of Computer Applications', 'NIT Trichy', 'alphonse sir.png', ''),
('Dr. S. Domnic', '9994904763', 'M.C.A., Ph. D.', 'Assistant Professor', 'Department of Computer Applications', 'NIT Trichy', 'domnic.jpg', 'domnic@nitt.edu'),
('Dr. S. Nickolas', '9486319693', 'Ph. D., M.E., M.C.A.', 'Head of Department', 'Department of Computer Applications', 'NIT Trichy', 'nickolas.jpg', 'nickolas@nitt.edu'),
('Dr. S.R. Balasundaram', '9486001117', 'M.C.A., M.E., Ph. D.', 'Associate Professor', 'Department of Computer Applications', 'NIT Trichy', 'srb.bmp', 'blsundar@nitt.edu'),
('Dr.(Mrs.) B. Janet', '9442648096', 'Ph. D', 'Assistant Professor', 'Department of Computer Applications', 'NIT Trichy', 'janet.gif', 'janet@nitt.edu');

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

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `first_year` varchar(20) NOT NULL,
  `second_year` varchar(20) NOT NULL,
  `third_year` varchar(20) NOT NULL,
  `days` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`first_year`, `second_year`, `third_year`, `days`, `name`) VALUES
('-', '9:20 AM - 10:10 AM', '-', 'Monday', 'Dr.(Mrs.) B. Janet'),
('-', '9:20 AM - 10:10 AM', '-', 'Tuesday', 'Dr.(Mrs.) B. Janet'),
('-', '9:20 AM - 10:10 AM', '-', 'Thursday', 'Dr.(Mrs.) B. Janet'),
('-', '2:20 PM - 3:10PM', '-', 'Thursday', 'Dr. A. Vadivel'),
('-', '10:30 AM - 12:10 PM', '-', 'Friday', 'Dr. A. Vadivel'),
('-', '11:20 AM - 12:10 PM', '-', 'Tuesday', 'Dr. S. Nickolas'),
('-', '10:30 AM - 12:10 PM', '-', 'Thursday', 'Dr. S. Nickolas'),
('-', '2:20 PM - 3:10PM', '-', 'Friday', 'Dr. S. Nickolas'),
('-', '10:30 AM - 11:20 PM', '-', 'Tuesday', 'Dr. S.R. Balasundaram'),
('-', '01:30 PM - 3:10 PM', '-', 'Wednesday', 'Dr. S.R. Balasundaram'),
('-', '10:30 AM - 11:20 PM', '-', 'monday', 'Dr. N.P. Gopalan'),
('-', '10:30 AM - 12:10 PM', '-', 'Wednesday', 'Dr. N.P. Gopalan'),
('-', '01:30 PM - 04:00 PM', '-', 'monday', 'Dr. S. Domnic'),
('-', '01:30 PM - 04:00 PM', '-', 'Tuesday', 'Dr.(Mrs.) B. Janet'),
('10:30 AM - 11:20 PM', '-', '-', 'Monday', 'Dr. Michael Arock'),
('11:20 AM - 12:10 PM', '-', '-', 'Tuesday', 'Dr. Michael Arock'),
('11:20 AM - 12:10 PM', '-', '-', 'Thursday', 'Dr. Michael Arock'),
('11:20 AM - 12:10 PM', '-', '-', 'Friday', 'Dr. Michael Arock'),
('09:20 AM - 10:10 AM', '-', '-', 'Monday', 'Dr. A.V. Reddy'),
('11:20 AM - 12:10 PM', '-', '-', 'Wednesday', 'Dr. A.V. Reddy'),
('09:20 AM - 10:10 AM', '-', '-', 'Wednesday', 'Dr. S. Domnic'),
('10:30 AM - 11:20 PM', '-', '-', 'Tuesday', 'Dr. S. Domnic'),
('11:20 AM - 12:10 PM', '-', '-', 'Monday', 'Dr. S. Domnic'),
('09:20 AM - 10:10 AM', '-', '-', 'Thursday', 'Dr. P.J.A. Alphonse'),
('09:20 AM - 10:10 AM', '-', '-', 'Friday', 'Dr. P.J.A. Alphonse'),
('10:30 AM - 11:20 PM', '-', '-', 'Friday', 'Dr. P.J.A. Alphonse'),
('01:30 PM - 04:50 PM', '-', '-', 'Wednesday', 'Dr. Michael Arock');
