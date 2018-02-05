-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 25, 2017 at 06:57 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `obtstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `jtable`
--

CREATE TABLE `jtable` (
  `uid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `pw` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `birthd` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `user` varchar(500) DEFAULT NULL,
  `dat` varchar(500) DEFAULT NULL,
  `month` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jtable`
--

INSERT INTO `jtable` (`uid`, `date`, `name`, `email`, `pw`, `image`, `lname`, `birthd`, `phone`, `user`, `dat`, `month`) VALUES
(1, '2017-12-12 02:17:47', 'Magfur', 'mama@gmail.com', '12345', 'users/masrur1/image.png', 'Jafory', '1996', '333-333-7333', 'masrur1', '12', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jtable`
--
ALTER TABLE `jtable`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jtable`
--
ALTER TABLE `jtable`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;