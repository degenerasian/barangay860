-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 06:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it135_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Non-binary') DEFAULT NULL,
  `civilstatus` enum('Single','Married','Widowed','Separated','Divorced') DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `telephonenumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`userid`, `firstname`, `middlename`, `lastname`, `gender`, `civilstatus`, `address`, `dateofbirth`, `phonenumber`, `telephonenumber`, `email`, `username`, `password`, `privilege`) VALUES
(1, 'Firstname', 'Middlename', 'Lastname', 'Male', 'Single', 'Pandacan, Manila', '1997-02-22', '0915 096 3768', '08 921 9234', 'secretary@gmail.com', 'admin', 'admin123', 'Admin'),
(2, 'Juan', 'Dela', 'Cruz', 'Male', 'Single', 'Taguig City', '2000-10-18', '09150963678', '09152342873', 'juan@gmail.com', 'sampleuseronly', '1234', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_off`
--

CREATE TABLE `brgy_off` (
  `official_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `suffix` enum('Mr','Mrs','Ms') NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_id` int(11) NOT NULL,
  `doc_type` enum('Barangay Clearance','Barangay ID','Residency') NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `status` enum('Single','Married') DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `ec_name` varchar(255) DEFAULT NULL,
  `ec_relationship` varchar(255) DEFAULT NULL,
  `ec_address` varchar(255) DEFAULT NULL,
  `ec_contact` varchar(255) DEFAULT NULL,
  `classification` enum('Homeowner','Household Helper','Married') DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `tct` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `requirement_for` varchar(255) DEFAULT NULL,
  `application_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_request`
--

CREATE TABLE `doc_request` (
  `request_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `approval` enum('Pending','Approved','Denied') NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `brgy_off`
--
ALTER TABLE `brgy_off`
  ADD PRIMARY KEY (`official_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doc_request`
--
ALTER TABLE `doc_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `request_fk_document` (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brgy_off`
--
ALTER TABLE `brgy_off`
  MODIFY `official_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_request`
--
ALTER TABLE `doc_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_request`
--
ALTER TABLE `doc_request`
  ADD CONSTRAINT `request_fk_document` FOREIGN KEY (`doc_id`) REFERENCES `document` (`doc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
