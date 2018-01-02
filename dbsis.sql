-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 03:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccessinfo`
--

CREATE TABLE `tblaccessinfo` (
  `record_num` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblaccessinfo`
--

INSERT INTO `tblaccessinfo` (`record_num`, `username`, `password`) VALUES
(1, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(2, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(3, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(4, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(5, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(6, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(7, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(8, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(9, 'pepito123', 'e99a18c428cb38d5f260853678922e03'),
(10, 'test', '098f6bcd4621d373cade4e832627b4f6'),
(11, 'pepe', '926e27eecdbc7a18858b3798ba99bddd'),
(24, 'a', 'a'),
(26, 'jomal123456789', 'a08fc7e231cd241e885b24ea068ef509'),
(27, 'jomal12345678', 'a08fc7e231cd241e885b24ea068ef509'),
(28, 'jomal1234567', '7815696ecbf1c96e6894b779456d330e'),
(29, 'jomal123456', '7815696ecbf1c96e6894b779456d330e'),
(30, 'jomal12345', '7815696ecbf1c96e6894b779456d330e'),
(31, 'juanmarquez123', 'e99a18c428cb38d5f260853678922e03'),
(32, 'juanmarquez123', 'e99a18c428cb38d5f260853678922e03'),
(33, 'staff123', 'e99a18c428cb38d5f260853678922e03'),
(34, 'staff123', 'e99a18c428cb38d5f260853678922e03'),
(35, 'staff123', 'e99a18c428cb38d5f260853678922e03'),
(36, 'staff123', 'e99a18c428cb38d5f260853678922e03'),
(37, 'jomalgz', 'e3c2e69177c14cd6dc28120c232eda50'),
(38, 'jomalgzz', 'e3c2e69177c14cd6dc28120c232eda50'),
(39, 'jomalgzzz', 'e3c2e69177c14cd6dc28120c232eda50'),
(40, 'jomalgzzzz', 'e99a18c428cb38d5f260853678922e03'),
(41, 'tesgin123', 'e99a18c428cb38d5f260853678922e03'),
(42, 'majojoma', '3fc0a7acf087f549ac2b266baf94b8b1'),
(43, 'jamesreid', 'e99a18c428cb38d5f260853678922e03');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `record_num` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`record_num`, `username`, `password`) VALUES
(2, 'admin', 'e99a18c428cb38d5f260853678922e03'),
(4, 'mojoejoe', 'e99a18c428cb38d5f260853678922e03');

-- --------------------------------------------------------

--
-- Table structure for table `tblchecklist`
--

CREATE TABLE `tblchecklist` (
  `record_num` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `year_level` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `record_num` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `record_num` int(11) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `record_num_fac` int(11) NOT NULL,
  `fac_firstname` varchar(30) NOT NULL,
  `fac_middlename` varchar(30) NOT NULL,
  `fac_lastname` varchar(30) NOT NULL,
  `fac_extname` varchar(5) NOT NULL,
  `access_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`record_num_fac`, `fac_firstname`, `fac_middlename`, `fac_lastname`, `fac_extname`, `access_id`) VALUES
(1, 'tets', 'tet', 'tet', 'tet', 29),
(2, 'tet', 'tet', 'tet', 'tet', 30),
(3, 'Juan', 'Marquez', 'Ledesma', 'Jr', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `record_num_staff` int(11) NOT NULL,
  `staff_firstname` varchar(30) NOT NULL,
  `staff_middlename` varchar(30) NOT NULL,
  `staff_lastname` varchar(30) NOT NULL,
  `staff_extname` varchar(5) NOT NULL,
  `access_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`record_num_staff`, `staff_firstname`, `staff_middlename`, `staff_lastname`, `staff_extname`, `access_id`) VALUES
(2, 'Juan ', 'Dela', 'asd', '', 41),
(3, 'Juan', 'Majo', 'Joma', 'Jr', 42);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentinfo`
--

CREATE TABLE `tblstudentinfo` (
  `record_num_stud` int(11) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `stud_firstname` varchar(30) NOT NULL,
  `stud_middlename` varchar(30) NOT NULL,
  `stud_lastname` varchar(30) NOT NULL,
  `stud_extname` varchar(5) NOT NULL,
  `access_id` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `course` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `stud_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblstudentinfo`
--

INSERT INTO `tblstudentinfo` (`record_num_stud`, `student_id`, `stud_firstname`, `stud_middlename`, `stud_lastname`, `stud_extname`, `access_id`, `mobile_no`, `course`, `father_name`, `mother_name`, `country`, `province`, `city`, `address`, `sex`, `date_of_birth`, `email`, `stud_image`) VALUES
(1, '01-098239', 'John', 'Mat', 'Daemon', '', 40, '09752276378', '', 'Abraham Daemon', 'Shell Daemon', 'Philippines', 'Cagayan', 'Tuguegarao City', 'Provincial Road', 'Male', '1992-08-19', 'daemon@gmail.com', 'e-naku-pasusuan-kulitan-660x360.jpg'),
(2, '01-123546', 'James', 'Reid', 'Deer', '', 43, '098237845900', 'BSNS', 'James Reid', 'Celine Reid', 'Philippines', 'Davao', 'Davao', 'Davao', 'Male', '1992-12-04', 'james@gmail.com', '34f7ef4f037cc1818f64617d0eb8c340.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `record_num` int(11) NOT NULL,
  `subj_name` varchar(50) NOT NULL,
  `subj_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccessinfo`
--
ALTER TABLE `tblaccessinfo`
  ADD PRIMARY KEY (`record_num`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`record_num`);

--
-- Indexes for table `tblchecklist`
--
ALTER TABLE `tblchecklist`
  ADD PRIMARY KEY (`record_num`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`record_num`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`record_num`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`record_num_fac`),
  ADD KEY `access_id` (`access_id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`record_num_staff`),
  ADD KEY `access_id` (`access_id`);

--
-- Indexes for table `tblstudentinfo`
--
ALTER TABLE `tblstudentinfo`
  ADD PRIMARY KEY (`record_num_stud`),
  ADD KEY `access_id` (`access_id`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`record_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccessinfo`
--
ALTER TABLE `tblaccessinfo`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblchecklist`
--
ALTER TABLE `tblchecklist`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  MODIFY `record_num_fac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `record_num_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblstudentinfo`
--
ALTER TABLE `tblstudentinfo`
  MODIFY `record_num_stud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD CONSTRAINT `tblfaculty_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `tblaccessinfo` (`record_num`);

--
-- Constraints for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD CONSTRAINT `tblstaff_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `tblaccessinfo` (`record_num`);

--
-- Constraints for table `tblstudentinfo`
--
ALTER TABLE `tblstudentinfo`
  ADD CONSTRAINT `tblstudentinfo_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `tblaccessinfo` (`record_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
