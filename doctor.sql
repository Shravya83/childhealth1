-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:28 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(100, 'admin', 'password'),
(101, 'main', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `did`, `pid`, `date`, `time`) VALUES
(3, 10002, 10004, '2017-04-13', '1PM'),
(4, 10000, 10004, '2017-04-13', '2PM'),
(6, 10000, 10000, '2017-04-22', '10AM'),
(8, 10004, 10000, '2017-05-03', '10AM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Heart'),
(2, 'BONE'),
(3, 'ENT'),
(4, 'ash'),
(5, 'ash'),
(6, 'eye');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bloodgrop` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `name`, `password`, `address`, `mobile`, `email`, `bloodgrop`) VALUES
(10000, 'ABCD', 'password', 'Shimoga', '9876543210', 'abcd@gmail.com', 'A+'),
(10001, 'ASD', 'password', 'Shimoga', '9876543210', 'asd@gmail.com', 'A+'),
(10002, 'qwert', 'password', 'Shimoga', '9876543210', 'qwert@gmail.com', 'O-'),
(10003, 'Azxcv', 'password', 'Shimoga', '9876543210', 'azxcv@gmail.com', 'B+'),
(10004, 'sdfg', 'password', 'Shimoga', '9902327766', 'sdfg@gmail.com', 'AB+'),
(10005, 'kavu', 'aaaa', 'mnbvcxz', '9591710725', 'kavu@gmail.com', 'A+'),
(10006, 'Alok', 'password', 'Shimog', '9876543210', 'alok@gmail.com', 'A+'),
(10007, 'Amulya', 'ammu', 'ghjk', '9036788377', 'ammukr95@gmail.com', 'B+'),
(10008, 'Amulya', '123', 'iuytre', '9916320011', 'sdfrt@gmail.com', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `doctordb`
--

CREATE TABLE `doctordb` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordb`
--

INSERT INTO `doctordb` (`id`, `name`, `password`, `address`, `mobile`, `email`, `cid`) VALUES
(10001, 'XYZ', 'password', 'Shimoga', '9876543210', 'dr.xyz@gmail.com', 'BONE'),
(10002, 'asd', 'password', 'Shimoga', '9876543210', 'dr.asd@gmail.com', 'Heart'),
(10003, 'Alex', 'password', 'Shimoga', '9876543210', 'dr.alex@gmail.com', 'ENT'),
(10005, 'Arvind', 'password', 'Shimoga', '9876543210', 'dr.arvind@gmail.com', 'BONE'),
(10006, 'kavi', 'kavi', 'asdfh', '9916320011', 'kavyagk321@gmail.com', 'Heart');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `cid`, `message`) VALUES
(1, 10000, 'Good'),
(2, 10000, 'Service is good');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `note` varchar(160) NOT NULL,
  `date` varchar(30) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `uid`, `cid`, `treatment`, `note`, `date`, `did`) VALUES
(1, 10000, 'Heart', 'Heart Test', 'NO issue', '12-4-2017', 10000),
(3, 10000, '1', 'Heart Tablet', 'Mild Block', '20/04/2017', 10000),
(4, 10000, '1', 'TMT', 'Treadmill test', '21/04/2017', 10000),
(5, 10000, '2', 'Test', 'Test Isue', '24/04/2017', 10000),
(6, 10000, 'Heart', 'Heart Tablet', 'Some Tests', '24/04/2017', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctordb`
--
ALTER TABLE `doctordb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;
--
-- AUTO_INCREMENT for table `doctordb`
--
ALTER TABLE `doctordb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
