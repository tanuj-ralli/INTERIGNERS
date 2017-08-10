-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 08:58 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `interigner`
--
CREATE DATABASE IF NOT EXISTS `interigner` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `interigner`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `name` text NOT NULL,
  `ques` varchar(400) NOT NULL,
  `ans` varchar(400) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`, `ques`, `ans`) VALUES
('tanujralli97@gmail.com', '123.0', 'lavya', 'favourite place', 'uk');

-- --------------------------------------------------------

--
-- Table structure for table `anonymousfeedback`
--

CREATE TABLE IF NOT EXISTS `anonymousfeedback` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sub` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anonymousfeedback`
--

INSERT INTO `anonymousfeedback` (`name`, `email`, `sub`, `message`) VALUES
('thanks', '', 'qwerty', 'hyy'),
('thanks', '', 'hlo', '123654'),
('thanks', 'lavya@gmail.com', 'kh', '51465n'),
('thanks', 'lavya@gmail.com', 'kh', '51465n'),
('tahgjg', 'thank@gmail.com', 'asdfgh', 'heloooo'),
('tahgjg', 'thank@gmail.com', 'asdfgh', 'heloooo'),
('lavu Singh', 'lavya@gmail.com', '456', '852456'),
('lavu Singh', 'lavya@gmail.com', 'qaa', '4654653216546546');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE IF NOT EXISTS `expert` (
  `name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `address` text NOT NULL,
  `number` int(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`name`, `email`, `address`, `number`, `message`) VALUES
('tanuj', 'lavya@gmail.com', 'tanuj', 0, 'sxac332423f32r32'),
('ati', 'hunt123@gmail.com', 'bjkhbk', 696, 'nlknl');

-- --------------------------------------------------------

--
-- Table structure for table `orderd`
--

CREATE TABLE IF NOT EXISTS `orderd` (
  `email` varchar(400) NOT NULL,
  `name` text NOT NULL,
  `productcode` int(225) NOT NULL,
  `paymentmethod` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderd`
--

INSERT INTO `orderd` (`email`, `name`, `productcode`, `paymentmethod`) VALUES
('123@ymail.com', 'Prabhjot', 304, 'netbanking'),
('anjali@gmail.com', 'Anjali', 305, 'debitcard'),
('ralli_pices_05@yahoo.com', 'Rajiv Ralli', 204, 'cod'),
('123@ymail.com', 'Prabhjot', 202, 'cod'),
('coolcoolcool@gmail.com', 'ralli', 204, 'cod'),
('hunt123@gmail.com', 'Hunt', 202, 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `productcode` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `feature` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`productcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`productcode`, `category`, `companyname`, `feature`, `price`, `image`) VALUES
('101', 'dwroom', 'alpha', 'roca ccknca nvk ', 10000, 'images\\dwroom\\dw1.jpg'),
('102', 'dwroom', 'beta', 'fnaslcn oihfoiwefiof ', 20000, 'images\\dwroom\\dw2.jpg'),
('103', 'dwroom', 'gama', 'asjiochiowch eoufh uoehf', 30000, 'images\\dwroom\\dw3.jpg'),
('104', 'dwroom', 'omega', 'woiefhewif wifhwoifh', 15000, 'images\\dwroom\\dw4.jpg'),
('105', 'dwroom', 'lamda', 'vwv efe f', 12000, 'images\\dwroom\\dw5.jpg'),
('201', 'bedroom', 'alpha', 'oh hoh hoih', 20000, 'images\\BEDROOM\\br1.jpg'),
('202', 'bedroom', 'beta', 'lhwduh iu gui', 26500, 'images\\BEDROOM\\br2.jpg'),
('203', 'bedroom', 'gama', 'ohiugsiu g giu g', 23000, 'images\\BEDROOM\\br3.jpg'),
('204', 'bedroom', 'omega', 'kb b iu iiug  ', 30000, 'images\\BEDROOM\\br4.jpg'),
('205', 'bedroom', 'lamda', 'asouhduh hduh d', 52000, 'images\\BEDROOM\\br5.jpg'),
('301', 'ktn', 'alpha', 'ishiuucg ygcay', 100000, 'images\\kitchen\\k1.jpg'),
('302', 'ktn', 'beta', 'kjahaguig uygyug ', 150000, 'images\\kitchen\\k2.jpg'),
('303', 'ktn', 'gama', 'ahiuguighuigui  guighi', 80000, 'images\\kitchen\\k3.jpg'),
('304', 'ktn', 'omega', 'kjdhvuisvh vuiwgv', 35000, 'images\\kitchen\\k4.jpg'),
('305', 'ktn', 'lamda', 'kjbhb guiui', 50000, 'images\\kitchen\\k5.jpg'),
('401', 'bathroom', 'alpha', 'ckjaf ahaui', 150000, 'images\\bathroom\\bt1.jpg'),
('402', 'bathroom', 'beta', 'psvhwpuifh wefuihwefp', 125000, 'images\\bathroom\\bt2.jpg'),
('403', 'bathroom', 'gama', 'skjvbkjvb wivg iu', 200000, 'images\\bathroom\\bt3.jpg'),
('404', 'bathroom', 'omega', 'dlkvfhrevui uif fuiwhf ', 145000, 'images\\bathroom\\bt4.jpg'),
('405', 'bathroom', 'lamda', 'iugiu ggui gui gi', 250000, 'images\\bathroom\\bt5.jpg'),
('999', 'ac', 'puma', '7456', 16354654, '456165216asbjhsv');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`email`, `password`, `name`, `mobile`, `ques`, `ans`) VALUES
('123@ymail.com', '123', 'Prabhjot', '1234567890', 'Favourite Place', 'Ludhiana'),
('456@gmail.com', '456', 'qwe', '147258369', 'Favourite Book', 'rd'),
('anjali@gmail.com', '123', 'Anjali', '2147483647', 'Favourite Place', 'kpt'),
('coolcoolcool@gmail.com', 'vinay69', 'ralli', '986969696969', 'Favourite Place', 'GB64'),
('hunt123@gmail.com', '123', 'Hunt', '123456789', 'Favourite Book', 'ilovesex'),
('lavya@gmail.com', '123654', 'lavya', '987654321', 'favourite place', 'ny'),
('ralli_pices_05@yahoo.com', '12345', 'Rajiv Ralli', '2147483647', 'Favourite Place', 'srinagar'),
('tanjay@gmail.com', '123456', 'tanjay', '9882852', 'Favourite Book', 'rd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
