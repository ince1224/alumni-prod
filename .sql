-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 10:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `Stud_id` int(50) NOT NULL,
  `school` varchar(500) CHARACTER SET utf8 NOT NULL,
  `educ` varchar(255) CHARACTER SET utf8 NOT NULL,
  `start_year` date NOT NULL,
  `end_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `Stud_id`, `school`, `educ`, `start_year`, `end_year`) VALUES
(1, 20201215, 'northern bukidnon state college', 'education', '2023-09-01', '2023-09-23'),
(2, 20201405, 'Northern Bukidnon State College', 'Bachelor of Science in Infromation Technology', '2023-09-01', '2024-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `employed_data`
--

CREATE TABLE `employed_data` (
  `employed_data_id` int(11) NOT NULL,
  `Stud_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `education_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `employment_status` varchar(10) CHARACTER SET utf8 NOT NULL,
  `organization` varchar(255) CHARACTER SET utf8 NOT NULL,
  `qualifications` varchar(255) CHARACTER SET utf8 NOT NULL,
  `income` varchar(255) CHARACTER SET utf8 NOT NULL,
  `skills` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo`
--

CREATE TABLE `generalinfo` (
  `Stud_id` int(50) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `batch` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telephone_number` varchar(11) CHARACTER SET utf8 NOT NULL,
  `civil_status` varchar(30) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` date NOT NULL,
  `region` varchar(10) CHARACTER SET utf8 NOT NULL,
  `province` varchar(50) CHARACTER SET utf8 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo`
--

INSERT INTO `generalinfo` (`Stud_id`, `first_name`, `middlename`, `last_name`, `address`, `email_address`, `batch`, `telephone_number`, `civil_status`, `gender`, `date_of_birth`, `region`, `province`, `zipcode`, `image`) VALUES
(20201215, 'Mahaliah Luz', 'Oguimas', 'Lara', 'cagayan de oro city', 'mahaliahlara264@gmail.com', '2014-2015', '09551684411', 'wedow', 'male', '2023-08-23', 'Region10', 'cdo', '3900', ''),
(20201405, 'Vincent', 'Epolan', 'Guibay', 'Centro, Cirilo L. Dumotan Street', 'guibs@gmail.com', '2020-2023', '09363981223', 'single', 'male', '2023-09-28', '', 'Bukidnon', '8703', '0');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(50) NOT NULL,
  `Stud_id` int(50) NOT NULL,
  `education_id` int(50) NOT NULL,
  `image_data` longblob NOT NULL,
  `image_type` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selfemployed`
--

CREATE TABLE `selfemployed` (
  `self_employed_data_id` int(11) NOT NULL,
  `education_id` int(50) NOT NULL,
  `Stud_id` int(50) NOT NULL,
  `business` varchar(255) NOT NULL,
  `related` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `noofemployee` varchar(10) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unemployed`
--

CREATE TABLE `unemployed` (
  `unemployed_data_id` int(11) NOT NULL,
  `selfemployed_id` int(50) NOT NULL,
  `education_id` int(50) NOT NULL,
  `Stud_id` int(50) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `seek` varchar(10) NOT NULL,
  `doing` varchar(255) NOT NULL,
  `finance` varchar(100) NOT NULL,
  `desire` varchar(10) NOT NULL,
  `consider` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `username`, `password`) VALUES
(1, 'guibs', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `Stud_id` (`Stud_id`);

--
-- Indexes for table `employed_data`
--
ALTER TABLE `employed_data`
  ADD PRIMARY KEY (`employed_data_id`);

--
-- Indexes for table `generalinfo`
--
ALTER TABLE `generalinfo`
  ADD PRIMARY KEY (`Stud_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `selfemployed`
--
ALTER TABLE `selfemployed`
  ADD PRIMARY KEY (`self_employed_data_id`);

--
-- Indexes for table `unemployed`
--
ALTER TABLE `unemployed`
  ADD PRIMARY KEY (`unemployed_data_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `employed_data`
--
ALTER TABLE `employed_data`
  MODIFY `employed_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalinfo`
--
ALTER TABLE `generalinfo`
  MODIFY `Stud_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24242425;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `selfemployed`
--
ALTER TABLE `selfemployed`
  MODIFY `self_employed_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unemployed`
--
ALTER TABLE `unemployed`
  MODIFY `unemployed_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`Stud_id`) REFERENCES `generalinfo` (`Stud_id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `generalinfo` (`Stud_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
