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

INSERT INTO `eprofile` (`ep_id`, `u_id`, `email`, `mobile`, `sector`, `industry`, `address`, `about`, `website`, `date`) VALUES
(1, 28, 'admin@intel.com', '09679918389', 'private', 'IT', ' Mountain View, California, United States', 'Intel Corporation is an American multinational corporation and technology company headquartered in Santa Clara, California, in Silicon Valley', 'www.intel.in', '2020-07-30'),
(2, 31, 'admin@infosys.com', '32323232', 'private', 'IT', NULL, NULL, NULL, '2020-07-30'),
(3, 32, 'admin@wipro.com', '344223', 'private', 'IT', 'Bangalore', 'Test', 'www.wipro.in', '2020-07-31');

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

INSERT INTO `industry` (`in_id`, `iname`, `date`) VALUES
(1, 'IT/Software', '2020-07-30'),
(2, 'Marketing', '2020-07-30'),
(3, 'Agriculture', '2020-07-30'),
(4, 'Digital Marketing', '2020-07-31');

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

INSERT INTO `japplication` (`ja_id`, `j_id`, `u_id`, `name`, `email`, `mobile`, `profession`, `bio`, `address`, `skills`, `hqualification`, `institute`, `stream`, `passout`, `marks`, `dob`, `experience`, `gender`, `website`, `resume`, `jstatus`, `adate`, `timestamp`) VALUES
(4, 5, 25, 'Sagar Banik', 'sagarbanik11@gmail.com', '+918509697557', 'Software Developer', 'Computer Science Student', 'Raja Rammohan Roy Road, Near Friends Union Club, East Vivekananda Pally', 'Java, Web Development, Testing', 'Bachelor of Technology', 'Siliguri Institute of Technology', 'Computer Science and Engineering', '2020-07-15', '8.6', '2020-07-22', '1', 'male', 'https://www.linkedin.com/in/sagarbanik/', NULL, 2, '2020-07-30', '2020-07-30'),
(5, 5, 25, 'Sagar Banik', 'sagarbanik11@gmail.com', '+918509697557', 'Software Developer', 'Computer Science Student', 'Raja Rammohan Roy Road, Near Friends Union Club, East Vivekananda Pally', 'Java, Web Development, Testing', 'Bachelor of Technology', 'Siliguri Institute of Technology', 'Computer Science and Engineering', '2020-07-15', '8.6', '2020-07-22', '1', 'male', 'https://www.linkedin.com/in/sagarbanik/', NULL, 2, '2020-07-30', '2020-07-31');

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

INSERT INTO `joblist` (`j_id`, `u_id`, `job_id`, `role`, `location`, `industry`, `jdescription`, `jrequirement`, `jlstatus`, `date`, `time`) VALUES
(5, 31, 42423, 'Software Developer', 'Kolkata', 'IT', 'Revise, edit, proofread & optimize web content\r\nWork with cross-functionally to enhance overall user experience of our platforms\r\nOwn various design tasks involved in the web development life cycle from start to finish', 'Bachelor\'s degree or equivalent experience in Computer Science\r\nAt least 1 - 2 years\' of experience using HTML, CSS, and JavaScript\r\nProficiency in at least one server-side technology (Java, PHP, NodeJS, Python, Ruby)\r\nAbility to multi-task, organize, and prioritize work', 1, '30-07-2020', '2020-07-30'),
(6, 28, 4546, 'Python Developer', 'Bangalore', 'IT', 'test', 'test', 0, '30-07-2020', '2020-07-31'),
(7, 28, 3232, 'Web Developer', 'Bangalore', 'IT', 'Test', 'Test', 1, '31-07-2020', '2020-08-01');

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

INSERT INTO `mapplication` (`ma_id`, `a_id`, `m_id`, `date`) VALUES
(3, 25, 34, '2020-07-31');

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

INSERT INTO `mprofile` (`m_id`, `u_id`, `email`, `mobile`, `skill`, `about`, `website`, `date`) VALUES
(1, 34, 'aniket@gmail.com', '34232323', '4', 'I have 4 years Digital Marketing', 'https://www.linkedin.com/in/aniket/', '2020-07-31'),
(2, 35, 'subham@gmail.com', '8509632323', '1', 'Experience in Agriculture', 'www.subham.in', '2020-07-31');

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

INSERT INTO `skills` (`sk_id`, `skname`, `date`) VALUES
(1, 'Agriculture', '2020-07-30'),
(2, 'Automotive', '2020-07-30'),
(3, 'Construction', '2020-07-30'),
(4, 'Digital Marketing', '2020-07-31');

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

INSERT INTO `uprofile` (`p_id`, `u_id`, `email`, `mobile`, `profession`, `bio`, `address`, `skills`, `hqualification`, `institute`, `stream`, `passout`, `marks`, `dob`, `experience`, `gender`, `website`, `p_image`, `date`) VALUES
(3, 25, 'sagarbanik11@gmail.com', '+918509697557', 'Software Developer', 'Computer Science Student', 'Raja Rammohan Roy Road, Near Friends Union Club, East Vivekananda Pally', 'Java, Web Development, Testing', 'Bachelor of Technology', 'Siliguri Institute of Technology', 'Computer Science and Engineering', '2020-07-15', '8.6', '2020-07-22', '2', 'male', 'https://www.linkedin.com/in/sagarbanik/', NULL, '2020-07-30'),
(4, 29, 'admin@amples.com', '31212123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30'),
(5, 30, 'sumit@gmail.com', '3223232', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30'),
(6, 36, 'bhadrakakoli1@gmail.com', '23454678', 'Software Developer', 'sa', 'sa', '', '', '', 'sa', '2020-08-15', 'sa', '2020-08-27', '3', 'male', 'www.subham.in', NULL, '2020-08-01');

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

INSERT INTO `user` (`u_id`, `name`, `email`, `mobile`, `sector`, `industry`, `password`, `authorization`, `status`, `time`) VALUES
(25, 'Sagar Banik', 'sagarbanik11@gmail.com', '+918509697557', NULL, NULL, '41ed44e3038dbeee7d2ffaa7f51d8a4b', 2, 1, '2020-07-30'),
(28, 'Intel Corporation', 'admin@intel.com', '09679918389', 'private', 'IT', '4e5bbaeafc82ab7aa1385bea8ef5d30a', 1, 1, '2020-07-30'),
(29, 'Admin', 'admin@amples.com', '31212123', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 0, 1, '2020-07-30'),
(30, 'Sumit Banik', 'sumit@gmail.com', '3223232', NULL, NULL, '7225ff71e8821b24fd72b4c8fda95b9a', 2, 1, '2020-07-30'),
(31, 'Infosys', 'admin@infosys.com', '32323232', 'private', 'IT', 'c616827db04debdb52286b1b5c31439d', 1, 2, '2020-07-30'),
(32, 'Wipro', 'admin@wipro.com', '344223', 'private', 'IT', 'c1cf502a9441c48e7ee98f32d1d64413', 1, 1, '2020-07-31'),
(34, 'Aniket Ghosh', 'aniket@gmail.com', '34232323', NULL, NULL, '9dbbae8b0159030ac238af0985c3ad65', 3, 1, '2020-07-31'),
(35, 'Subham Ghosh', 'subham@gmail.com', '8509632323', NULL, NULL, '1a6c42113064a6c2888f5064385bbbef', 3, 1, '2020-07-31'),
(36, 'Kakoli Bhadra', 'bhadrakakoli1@gmail.com', '23454678', NULL, NULL, '6ad7ab33a42be84fa5cfc60a39f3e9a4', 2, 1, '2020-08-01');

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
