-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 08:19 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auser` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `marquee1` text NOT NULL,
  `colgname` varchar(99) NOT NULL,
  `colgintro` text NOT NULL,
  `footerinfo` varchar(50) NOT NULL,
  `abouthead` varchar(50) NOT NULL,
  `aboutinfo` text NOT NULL,
  `historyinfo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `auser`, `apass`, `marquee1`, `colgname`, `colgintro`, `footerinfo`, `abouthead`, `aboutinfo`, `historyinfo`) VALUES
(1, 'admname', '4fea28c4a708335fbd36db8166edc95c', 'Hostel Information', '<center>Student Hostel</center>', 
'The building is called "Iceland" and is the oldest building on campus, first opened as a dormitory in 1934. During the Second World War the house was occupied by the British army. The building was completely renovated in 2013-2014 with the primary emphasis to highlight the history of the house. Today it occupies student housing from late August until end of May each year, but during summer its student hostel.
Iceland hostel has 43 twin rooms, with city or garden views. We offer sleeping bag accommodation and made up beds. All rooms have shared bathroom and kitchen facilities. The building is non smoking.<br></br>', 
'2020 Managed by Student Hostel', 'About Us', 
'Student hostel is run by Student Services at University of Iceland. The Student Services currently runs the Student cafe, the Student co-up, the University bookstore, Student preschools, Student housing, Student interactive rent- and work agency, the Student cellar bar',
'Iceland is the oldest building on campus at the University of Iceland. It was first opened as a dormitory in 1934. During the Second World War the house was occupied by the British army. The building was completely renovated in 2013 - 2014 with the primary emphasis to highlight the history of the house. Today its used as student housing from September until May each year. During the summer months its a student hostel - open to everybody!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `classs` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `classs`, `address`, `dob`, `gender`, `mob`, `email`, `username`, `password`) VALUES
(1, 'Vaibhav Pawar', 'BSc TY', 'Rautwadi, Mahagaon, Yavatmal', '1998-09-07', 'm', 1234567890, 'pawarvaibhav533@gmail.com', 'vaibhav533', '4fea28c4a708335fbd36db8166edc95c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

DROP TABLE IF EXISTS `roomtype`;
CREATE TABLE IF NOT EXISTS `roomtype` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(50) NOT NULL,
  `room_price` varchar(50) NOT NULL,
  `room_seson` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`room_id`, `room_type`, `room_price`, `room_seson`) VALUES
(1, 'Single Seater', '50000', 'low season'),
(2, 'Single Seater', '55000', 'high season'),
(3, 'Double Seater', '40000', 'low season'),
(4, 'Double Seater', '45000', 'high season'),
(5, 'Triple Seater', '30000', 'low season'),
(6, 'Triple Seater', '35000', 'high season');


-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

DROP TABLE IF EXISTS `roomdetail`;
CREATE TABLE IF NOT EXISTS `roomdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `no_of_room` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdetail`
--

INSERT INTO `roomdetail` (`id`, `username`, `checkin_date`, `checkout_date`, `room_type`, `no_of_room`, `amount`) VALUES
(1, 'vaibhav533', '2019-06-16', '2020-06-20', '50000', '1', '50000');


-- --------------------------------------------------------

--
-- Table structure for table `messtype`
--

DROP TABLE IF EXISTS `messtype`;
CREATE TABLE IF NOT EXISTS `messtype` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_type` varchar(50) NOT NULL,
  `mess_price` varchar(50) NOT NULL,
  `mess_seson` varchar(50) NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messtype`
--

INSERT INTO `messtype` (`mess_id`, `mess_type`, `mess_price`, `mess_seson`) VALUES
(1, 'Platinum', '36000', 'low season'),
(2, '2_Platinum', '40000', 'high season'),
(3, 'Gold', '30000', 'low season'),
(4, '2_Gold', '35000', 'high season'),
(5, 'Silver', '24000', 'low season'),
(6, '2_Silver', '30000', 'high season');


-- --------------------------------------------------------

--
-- Table structure for table `messdetail`
--

DROP TABLE IF EXISTS `messdetail`;
CREATE TABLE IF NOT EXISTS `messdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `mess_type` varchar(50) NOT NULL,
  `no_of_seats` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messdetail`
--

INSERT INTO `messdetail` (`id`, `username`, `checkin_date`, `checkout_date`, `mess_type`, `no_of_seats`, `amount`) VALUES
(1, 'vaibhav533', '2019-06-16', '2020-06-20', '36000', '1', '36000');