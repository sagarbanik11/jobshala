-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 12:02 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `caname` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `adate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `japplication`
--

INSERT INTO `japplication` (`ja_id`, `j_id`, `u_id`, `name`, `email`, `mobile`, `profession`, `bio`, `address`, `skills`, `hqualification`, `institute`, `stream`, `passout`, `marks`, `dob`, `experience`, `gender`, `website`, `resume`, `adate`) VALUES
(1, 2, 23, 'Sagar Banik', 'sagarbanik@gmail.com', '+918509697557', 'Software Developer', 'Debra Carroll knows that successful students become successful adults. This is her 15th year at Edison Elementary School and her 10th year teaching fourth grade. So far, fourth grade is her favorite grade to teach! Mrs. Carroll was the 2011 Newell Unified School District Teacher of the Year, and received her National Board Certification in 2013. She loves science and majored in biology at Arizona State University, where she also earned her teaching credential and Master of Education degree. Mrs. Carroll is excited to begin the best year ever!', 'APC SARANI, SHIVRAM PALLY', 'Java, Web Development', 'Bachelor of Technology', 'Siliguri Institute of Technology', 'Computer Science and Engineering', '2020-07-22', '8.6', '1998-02-18', '7', 'male', 'https://www.linkedin.com/in/sagarbanik/', NULL, '2020-07-29');

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
  `status` int(2) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`j_id`, `u_id`, `job_id`, `role`, `location`, `industry`, `jdescription`, `jrequirement`, `status`, `date`, `time`) VALUES
(1, 20, 42423, 'Software Developer', 'Bangalore', 'IT', 'Design, develop, troubleshoot and debug software programs for enhancements and new products.\r\n\r\nDevelop software and tools in support of design, infrastructure and technology platforms, including operating systems, compilers, routers, networks, utilities, databases and Internet-related tools.\r\n\r\nDetermine hardware compatibility and/or influences hardware design.', 'Recent graduate or on your final year of studies towards a Bachelor’s or Master’s Degree in Computer Science, Computer Engineering, Electrical Engineering, related majors such as Math, Physics\r\n\r\nYear of Graduation -2020 (only)\r\n\r\nMinimum of a 8.5 GPA or higher\r\n\r\nSolid understanding of computer science fundamentals and software engineering with an aptitude for learning new technologies\r\n\r\nStrong knowledge of programming and scripting languages\r\n\r\nPossess creative problem solving skills and excellent troubleshooting/debugging skills\r\n\r\nExperience in establishing and sustaining excellent relationships with the extended team\r\n\r\nExcellent verbal and written skills.', 1, '2020-07-28', '2020-07-28'),
(2, 20, 53423, 'Application Developer', 'Kolkata', 'IT', 'Utilize knowledge of applications development procedures and concepts, and basic knowledge of other technical areas to identify and define necessary system enhancements\r\nIdentify and analyze issues, make recommendations, and implement solutions\r\nUtilize knowledge of business processes, system processes, and industry standards to solve complex issues\r\nAnalyze information and make evaluative judgements to recommend solutions and improvements\r\nConduct testing and debugging, utilize script tools, and write basic code for design specifications\r\nAssess applicability of similar experiences and evaluate options under circumstances not covered by procedures\r\nDevelop working knowledge of Citi’s information systems, procedures, standards, client server application development, network operations, database administration, systems administration, data center operations, and PC-based applications\r\nAppropriately assess risk when business decisions are made, demonstrating particular consideration for the firm\'s reputation and safeguarding Citigroup, its clients and assets, by driving compliance with applicable laws, rules and regulations, adhering to Policy, applying sound ethical judgment regarding personal behavior, conduct and business practices, and escalating, managing and reporting control issues with transparency.', '0-2 years of relevant experience\r\nExperience in programming/debugging used in business applications\r\nWorking knowledge of industry practice and standards\r\nComprehensive knowledge of specific business area for application development\r\nWorking knowledge of program languages\r\nConsistently demonstrates clear and concise written and verbal communication\r\n', 1, '2020-07-28', '2020-07-28'),
(3, 20, 63223, 'Python Developer', 'Siliguri', 'IT', 'What you will be doing:\r\n\r\n·      Design, develop, test, troubleshoot, document, and maintain software applications.\r\n\r\n·      Implement unit and functional testing and perform integration level testing.\r\n\r\n·      Work collaboratively with team and other business functions.\r\n\r\n·      Provide production support as needed to ensure proper functioning on a 24/7 basis.\r\n\r\n·      Other duties as assigned.\r\n\r\n\r\nWhat we think it takes to get the job:\r\n\r\n·      Ability to code in Python (or similar language)\r\n\r\n·      Demonstrable problem solving and analytical ability\r\n\r\n·      Strong communication skills\r\n\r\n·      BS degree in Computer Science or equivalent', 'Preferred Skills & Experience\r\n\r\n·      Working experience of Scrum/Agile.\r\n\r\n·      Django/Flask, Postgres\r\n\r\n·      AWS, Heroku\r\n\r\n·      Linux Operations\r\n\r\n·      Experience with React Redux desired', 1, '28-07-2020', '2020-07-28');

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
(1, 23, 'sagarbanik@gmail.com', '+918509697557', 'Software Developer', 'Debra Carroll knows that successful students become successful adults. This is her 15th year at Edison Elementary School and her 10th year teaching fourth grade. So far, fourth grade is her favorite grade to teach! Mrs. Carroll was the 2011 Newell Unified School District Teacher of the Year, and received her National Board Certification in 2013. She loves science and majored in biology at Arizona State University, where she also earned her teaching credential and Master of Education degree. Mrs. Carroll is excited to begin the best year ever!', 'APC SARANI, SHIVRAM PALLY', 'Java, Web Development', 'Bachelor of Technology', 'Siliguri Institute of Technology', 'Computer Science and Engineering', '2020-07-22', '8.6', '1998-02-18', '7', 'male', 'https://www.linkedin.com/in/sagarbanik/', NULL, '2020-07-28'),
(2, 24, 'sumit@gmail.com', '53423423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `Industry` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `authorization` int(5) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `mobile`, `sector`, `Industry`, `password`, `authorization`, `time`) VALUES
(20, 'Intel Corporation', 'admin@intel.com', 53423345, 'private', 'IT', '4e5bbaeafc82ab7aa1385bea8ef5d30a', 1, '2020-07-28'),
(23, 'Sagar Banik', 'sagarbanik11@gmail.com', 56453323, NULL, NULL, '41ed44e3038dbeee7d2ffaa7f51d8a4b', 2, '2020-07-28'),
(24, 'Sumit Banik', 'sumit@gmail.com', 53423423, NULL, NULL, '7225ff71e8821b24fd72b4c8fda95b9a', 2, '2020-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `japplication`
--
ALTER TABLE `japplication`
  MODIFY `ja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `j_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uprofile`
--
ALTER TABLE `uprofile`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
