-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `eprofile`
--

CREATE TABLE `eprofile` (
  `ep_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `address` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eprofile`
--


-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `in_id` int(11) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--


-- --------------------------------------------------------

--
-- Table structure for table `japplication`
--

CREATE TABLE `japplication` (
  `ja_id` int(11) NOT NULL,
  `j_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `skills` varchar(250) DEFAULT NULL,
  `hqualification` varchar(100) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `stream` varchar(100) DEFAULT NULL,
  `passout` date DEFAULT NULL,
  `marks` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `resume` varchar(250) DEFAULT NULL,
  `jstatus` int(10) NOT NULL,
  `adate` date NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `japplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `j_id` int(111) NOT NULL,
  `u_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `jdescription` text NOT NULL,
  `jrequirement` text NOT NULL,
  `jlstatus` int(2) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joblist`
--



-- --------------------------------------------------------

--
-- Table structure for table `mapplication`
--

CREATE TABLE `mapplication` (
  `ma_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapplication`
--


-- --------------------------------------------------------

--
-- Table structure for table `mprofile`
--

CREATE TABLE `mprofile` (
  `m_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `about` text DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mprofile`
--



-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `sk_id` int(11) NOT NULL,
  `skname` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--



-- --------------------------------------------------------

--
-- Table structure for table `uprofile`
--

CREATE TABLE `uprofile` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `skills` varchar(250) DEFAULT NULL,
  `hqualification` varchar(100) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `stream` varchar(100) DEFAULT NULL,
  `passout` date DEFAULT NULL,
  `marks` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `p_image` varchar(250) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uprofile`
--



-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `authorization` int(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `eprofile`
--
ALTER TABLE `eprofile`
  ADD PRIMARY KEY (`ep_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `japplication`
--
ALTER TABLE `japplication`
  ADD PRIMARY KEY (`ja_id`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `mapplication`
--
ALTER TABLE `mapplication`
  ADD PRIMARY KEY (`ma_id`);

--
-- Indexes for table `mprofile`
--
ALTER TABLE `mprofile`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`sk_id`);

--
-- Indexes for table `uprofile`
--
ALTER TABLE `uprofile`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eprofile`
--
ALTER TABLE `eprofile`
  MODIFY `ep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `japplication`
--
ALTER TABLE `japplication`
  MODIFY `ja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `j_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapplication`
--
ALTER TABLE `mapplication`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mprofile`
--
ALTER TABLE `mprofile`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uprofile`
--
ALTER TABLE `uprofile`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
