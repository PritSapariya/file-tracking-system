-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 09:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `department_id` int(8) NOT NULL,
  `department` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`department_id`, `department`) VALUES
(0, 'Admin'),
(1, 'Data Handler'),
(2, 'Aadhar card'),
(3, 'Income Certificate'),
(4, 'Passport'),
(5, 'Voter ID');

-- --------------------------------------------------------

--
-- Table structure for table `document_status`
--

CREATE TABLE `document_status` (
  `document_id` int(11) NOT NULL,
  `token_id` varchar(20) COLLATE utf8_bin NOT NULL,
  `department_id` int(20) NOT NULL,
  `status` char(15) COLLATE utf8_bin NOT NULL,
  `apply_date` date NOT NULL,
  `complete_date` date NOT NULL,
  `document_comment` varchar(250) COLLATE utf8_bin NOT NULL,
  `from_employee_id` int(10) DEFAULT NULL,
  `c_employee_id` int(20) NOT NULL,
  `to_employee_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `document_status`
--

INSERT INTO `document_status` (`document_id`, `token_id`, `department_id`, `status`, `apply_date`, `complete_date`, `document_comment`, `from_employee_id`, `c_employee_id`, `to_employee_id`) VALUES
(168, '362001-20-04-01-1', 2, 'Transfered', '2020-04-01', '2020-04-02', 'Transferred from Swetal', NULL, 11, 12),
(170, '362001-20-04-01-1', 2, 'Completed', '2020-04-02', '2020-04-02', '', 11, 12, NULL),
(171, '362001-20-04-02-1', 2, 'Pending', '2020-04-02', '0000-00-00', '', NULL, 11, NULL),
(172, '362001-20-09-08-1', 2, 'Pending', '2020-09-08', '0000-00-00', '', NULL, 11, NULL),
(173, '362001-20-09-08-2', 2, 'Pending', '2020-09-08', '0000-00-00', '', NULL, 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(6) NOT NULL,
  `employee_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `department_id` int(3) NOT NULL,
  `gender` char(1) COLLATE utf8_bin NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `designation` varchar(30) COLLATE utf8_bin NOT NULL,
  `address` varchar(250) COLLATE utf8_bin NOT NULL,
  `pincode` int(6) NOT NULL,
  `email_id` varchar(40) COLLATE utf8_bin NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_name`, `department_id`, `gender`, `contact_no`, `designation`, `address`, `pincode`, `email_id`, `role`) VALUES
(0, 'Admin', 0, 'M', 9512347382, '', '', 0, 'admin.fts@gmail.com', 0),
(10, 'Prit Sapariya', 1, 'M', 9512347382, 'clerk', 'H-14, Janakpuri App., Zanzarada Road, Junagadh.', 362001, 'pritsapariya17@gmail.com', 0),
(11, 'Swetal Patel', 2, 'M', 9567895226, 'clerk', 'Karamsad, Anand', 362121, 'swetalpatel@gmail.com', 0),
(12, 'Jashandeep Singh', 2, 'M', 6633265235, 'officer', 'A.V.Road, Anand.', 362521, 'jashandeepsingh@gmail.com', 0),
(13, 'Shubh Patel', 2, 'M', 9586525632, 'officer', 'Bus Station Road, Anand.', 362321, 'shubhpatel@gmail.com', 0),
(14, 'Divyesh  Patel', 2, 'M', 6585645854, 'HOD', 'Saheed Chock, Anand.', 632121, 'divyeshpatel@gmail.com', 0),
(17, 'Vraj Patel', 3, 'M', 6956845784, 'clerk', 'Railway Station Road, Anand.', 365626, 'vrajpatel@gmail.com', 0),
(18, 'Gaurav Trapasiya', 3, 'M', 6362615215, 'officer', 'Junagadh', 362001, 'gauravtrapasiya@gmail.com', 0),
(19, 'Afzal Umatiya', 3, 'M', 6352411526, 'officer', 'Palanpur', 363001, 'afzalumatiya@gamil.com', 0),
(20, 'Vrushti Pancholi', 3, 'F', 6341787545, 'HOD', 'Anand', 362642, 'vrushtipancholi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loginprocess_tbl`
--

CREATE TABLE `loginprocess_tbl` (
  `employee_id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginprocess_tbl`
--

INSERT INTO `loginprocess_tbl` (`employee_id`, `username`, `password`) VALUES
(0, 'admin', 'admin'),
(19, 'afzal', 'afzal'),
(14, 'divyesh', 'divyesh'),
(18, 'gaurav', 'gaurav'),
(12, 'Jashan', 'jashan'),
(10, 'prit', 'prit'),
(13, 'shubh', 'shubh'),
(11, 'swetal', 'swetal'),
(17, 'varj', 'vraj'),
(20, 'vrushti', 'vrushti');

-- --------------------------------------------------------

--
-- Table structure for table `sub_work_tbl`
--

CREATE TABLE `sub_work_tbl` (
  `id` int(11) NOT NULL,
  `token_id` varchar(20) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_work_tbl`
--

INSERT INTO `sub_work_tbl` (`id`, `token_id`, `employee_id`, `date`, `status`) VALUES
(1, '1', 1, '2020-02-28', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `token_id` varchar(30) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_contact_no` bigint(11) NOT NULL,
  `user_address` varchar(250) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`token_id`, `user_name`, `user_contact_no`, `user_address`, `user_email`) VALUES
('362001-20-03-25-1', 'Yash Dadhaniya', 6958856245, 'Rajkot', 'yashdadhaniya@gmail.com'),
('362001-20-03-25-2', 'Kevin Viradiya', 6955989789, 'Gondal, Rajkot', 'kevinviradiya@gmail.com'),
('362001-20-03-25-3', 'Vivek Changela', 6953835656, 'Junagadh', 'vivekchangela@gmail.com'),
('362001-20-03-26-1', 'Yash Changela', 6353830220, 'Rajkot', 'yashchangela@gmail.com'),
('362001-20-03-26-2', 'Raj Popat', 6956825623, 'Junagadh', 'rajpopat@gmail.com'),
('362001-20-04-01-1', 'Vivek Changela', 6353830220, 'Junagadh', 'vivekchangela@gmail.com'),
('362001-20-04-02-1', 'Yash Dadhaniya', 7256589456, 'Rajkot', 'yashdadhaniya@gmail.com'),
('362001-20-04-02-2', 'Yash Dadhaniya', 7256589456, 'Rajkot', 'yashdadhaniya@gmail.com'),
('362001-20-09-08-1', 'Prit Sapariya', 9512347382, 'sjfg', 'pritsapariya17@gmail.com'),
('362001-20-09-08-2', 'Prit ', 9512347382, 'skjefh', 'pritsapariya17@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `document_status`
--
ALTER TABLE `document_status`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `NOT NULL` (`department_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `loginprocess_tbl`
--
ALTER TABLE `loginprocess_tbl`
  ADD PRIMARY KEY (`username`),
  ADD KEY `loginprocess_tbl_ibfk_1` (`employee_id`);

--
-- Indexes for table `sub_work_tbl`
--
ALTER TABLE `sub_work_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`token_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document_status`
--
ALTER TABLE `document_status`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sub_work_tbl`
--
ALTER TABLE `sub_work_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_status`
--
ALTER TABLE `document_status`
  ADD CONSTRAINT `NOT NULL` FOREIGN KEY (`department_id`) REFERENCES `department_tbl` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD CONSTRAINT `employee_details_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department_tbl` (`department_id`);

--
-- Constraints for table `loginprocess_tbl`
--
ALTER TABLE `loginprocess_tbl`
  ADD CONSTRAINT `loginprocess_tbl_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
