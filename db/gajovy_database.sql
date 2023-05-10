-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 10:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gajovy_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator_tbl`
--

CREATE TABLE `administrator_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_firstname` varchar(255) DEFAULT NULL,
  `admin_middlename` varchar(255) DEFAULT NULL,
  `admin_lastname` varchar(255) DEFAULT NULL,
  `admin_birthdate` date DEFAULT NULL,
  `admin_gender` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT '',
  `admin_mobileno` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_dateregistered` date DEFAULT NULL,
  `admin_img` varchar(255) DEFAULT NULL,
  `admin_account_type` varchar(255) DEFAULT NULL,
  `admin_profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `administrator_tbl`
--

INSERT INTO `administrator_tbl` (`admin_id`, `admin_firstname`, `admin_middlename`, `admin_lastname`, `admin_birthdate`, `admin_gender`, `admin_email`, `admin_mobileno`, `admin_password`, `admin_dateregistered`, `admin_img`, `admin_account_type`, `admin_profile`) VALUES
(2, 'Benjie', 'Estrada', 'Matuan', '1992-07-11', 'Male', 'benjiematuan2018@gmail.com', '1234567', 'admin', '2021-06-13', NULL, 'Admin', 'viber_image_2023-04-01_11-44-34-111.jpg'),
(8, 'sample', 'sample', 'sample', '2022-11-01', 'male', 'scammas2018@gmail.com', '09635438188', '12345678', '2022-11-01', NULL, 'Doctor', ''),
(10, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `agents_info`
--

CREATE TABLE `agents_info` (
  `Client_Id` int(11) NOT NULL,
  `CUST_Fname` varchar(255) DEFAULT NULL,
  `CUST_Lname` varchar(255) DEFAULT NULL,
  `CUST_Age` varchar(255) DEFAULT NULL,
  `CUST_Age_bracket` varchar(255) DEFAULT NULL,
  `CUST_Gender` varchar(255) DEFAULT NULL,
  `CUST_Mobileno` varchar(255) DEFAULT NULL,
  `CUST_Email_ad` varchar(255) DEFAULT NULL,
  `CUST_Marital_status` varchar(255) DEFAULT NULL,
  `CUST_Province` varchar(255) DEFAULT NULL,
  `CUST_Country` varchar(255) DEFAULT NULL,
  `CUST_Region` varchar(255) DEFAULT NULL,
  `CUST_Nationality` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `agents_info`
--

INSERT INTO `agents_info` (`Client_Id`, `CUST_Fname`, `CUST_Lname`, `CUST_Age`, `CUST_Age_bracket`, `CUST_Gender`, `CUST_Mobileno`, `CUST_Email_ad`, `CUST_Marital_status`, `CUST_Province`, `CUST_Country`, `CUST_Region`, `CUST_Nationality`, `position`) VALUES
(1, 'reymark', 'escalantw', '24', '21 - 25', 'Male', '12', 'aw@gmail.com', 'Single', 'phillippines', '12', '', '', ''),
(2, 'reymark', 'escalantw', '24', '21 - 25', 'Male', '12', 'aw@gmail.com', 'Single', '12', '12', '', '', ''),
(3, 're', 're', 're', '26 - 30', 'Male', 're', 're', 'Single', 're', 're', 're', 'Filipino', 'Agent'),
(4, 'reymark', 'reymark', '24', 'Sales_Manager', 'Male', '0963', 're@gmail.com', 'Single', 'province', 'pinas', 'region', 'Filipino', 'Agent'),
(5, 'reymark', 'reymark', 're', '21 - 25', 'Male', '0963', 're@gmail.com', 'Single', 'province', 'pinas', 'region', 'Filipino', 'Agent'),
(6, 'reymark', 'reymark', '24', '21 - 25', 'Male', '0963', 're@gmail.com', 'Single', 'province', 'pinas', 'region', 'Filipino', 'Agent'),
(7, 'reymark', 'reymark', 're', '26 - 30', 'Male', '0963', 're@gmail.com', 'Single', 'province', 'pinas', 'region', 'Filipino', 'Agent'),
(8, 'reymark', 'reymark', 're', '21 - 25', 'Male', '0963', 're@gmail.com', 'Single', 'province', 'pinas', 'region', 'Filipino', 'Agent'),
(9, '', '', '', '', 'Select', '', '', 'Select', '', '', '', 'Select', ''),
(10, '', '', '', '', '', '', '', 'Select', '', '', '', 'Select', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients_info`
--

CREATE TABLE `clients_info` (
  `Client_Id` int(11) NOT NULL,
  `CUST_Fname` varchar(255) DEFAULT NULL,
  `CUST_Lname` varchar(255) DEFAULT NULL,
  `CUST_Age` varchar(255) DEFAULT NULL,
  `CUST_Age_bracket` varchar(255) DEFAULT NULL,
  `CUST_Gender` varchar(255) DEFAULT NULL,
  `CUST_Mobileno` varchar(255) DEFAULT NULL,
  `CUST_Email_ad` varchar(255) DEFAULT NULL,
  `CUST_Marital_status` varchar(255) DEFAULT NULL,
  `CUST_Province` varchar(255) DEFAULT NULL,
  `CUST_Country` varchar(255) DEFAULT NULL,
  `CUST_Region` varchar(255) DEFAULT NULL,
  `CUST_Nationality` varchar(255) DEFAULT NULL,
  `CUST_Profession` varchar(255) DEFAULT NULL,
  `CUST_Emp_country` varchar(255) DEFAULT NULL,
  `CUST_Per_Employment_Group` varchar(255) DEFAULT NULL,
  `CUST_Employment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `clients_info`
--

INSERT INTO `clients_info` (`Client_Id`, `CUST_Fname`, `CUST_Lname`, `CUST_Age`, `CUST_Age_bracket`, `CUST_Gender`, `CUST_Mobileno`, `CUST_Email_ad`, `CUST_Marital_status`, `CUST_Province`, `CUST_Country`, `CUST_Region`, `CUST_Nationality`, `CUST_Profession`, `CUST_Emp_country`, `CUST_Per_Employment_Group`, `CUST_Employment`) VALUES
(1, 'samples', 'sample', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'sample', 'sample', '24', '21 - 25', 'Male', '123456789', 'sample@gmail.com', 'Single', 'gensan', 'philippines', 'Filipino', 'Filipino', 'IT', 'sample', 'sample', 'sample'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_tbl`
--

CREATE TABLE `realestate_tbl` (
  `realestate_id` int(255) NOT NULL,
  `so_number` varchar(255) NOT NULL,
  `blk_lot` varchar(255) NOT NULL,
  `lot_area` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `real_estate_pic` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `projec_descrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `realestate_tbl`
--

INSERT INTO `realestate_tbl` (`realestate_id`, `so_number`, `blk_lot`, `lot_area`, `floor_area`, `area`, `real_estate_pic`, `category`, `projec_descrip`) VALUES
(1, '2022', 'c', 'c', 'c', 'c', 'Camella', '', 'c'),
(2, '2022', 'c', 'c', 'c', 'c', '', 'Camella', 'c'),
(3, '2022', 'c', 'c', 'c', 'c', '', 'Camella', 'c'),
(4, '2022', 'c', 'c', 'c', 'c', '', 'Camella', 'c'),
(5, '2022', 'c', 'c', 'c', 'c', '', 'Camella', 'c'),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', 'zorro.png', '', ''),
(10, '2022', 'c', 'c', 'c', 'c', '', 'Camella', 'c'),
(11, '2022', 'c', 'c', 'c', 'c', 'zorro.png', 'Camella', 'c'),
(12, '2022', 'b', 'b', 'b', 'b', '337542945_1203022033914085_3665430073511021847_n.png', 'Camella', 'b'),
(13, '2023', '9', '6', '6/12', 'gensan', 'viber_image_2023-04-01_11-44-34-111.jpg', 'Camella', 'green plants over the water');

-- --------------------------------------------------------

--
-- Table structure for table `sched_tbl`
--

CREATE TABLE `sched_tbl` (
  `appoint_id` int(11) NOT NULL COMMENT ' ',
  `appoint_code` varchar(255) DEFAULT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `assign_id` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `appoint_date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sched_tbl`
--

INSERT INTO `sched_tbl` (`appoint_id`, `appoint_code`, `patient_id`, `assign_id`, `reason`, `status`, `appoint_date`, `type`) VALUES
(1, '3', '3', '8', '', 'Schedule', '0000-00-00', NULL),
(2, '3', '3', '2', '', 'Schedule', '0000-00-00', NULL),
(3, '3', '3', '2', '', 'Schedule', '0000-00-00', NULL),
(4, '3', '3', '2', 'Medical', 'Schedule', '2023-02-19', NULL),
(5, '9T6C7tVE', '3', '2', 'Medical', 'Schedule', '2023-02-19', NULL),
(6, 'XRsv3IaZ', '3', '2', 'Medical', 'Schedule', '2023-02-19', NULL),
(7, 'RcoHNdF3', '1', '8', '', 'Schedule', '2023-02-24', NULL),
(8, '4PtTkfS7', '2', '2', '', 'Schedule', '2023-02-01', NULL),
(9, 'ph25QYm7', '4', '8', 'Consult', 'Schedule', '2023-02-19', NULL),
(10, 'oYbniJsC', '5', '2', 'Medical', 'Schedule', '2023-02-19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator_tbl`
--
ALTER TABLE `administrator_tbl`
  ADD PRIMARY KEY (`admin_id`) USING BTREE;

--
-- Indexes for table `agents_info`
--
ALTER TABLE `agents_info`
  ADD PRIMARY KEY (`Client_Id`);

--
-- Indexes for table `clients_info`
--
ALTER TABLE `clients_info`
  ADD PRIMARY KEY (`Client_Id`) USING BTREE;

--
-- Indexes for table `realestate_tbl`
--
ALTER TABLE `realestate_tbl`
  ADD PRIMARY KEY (`realestate_id`);

--
-- Indexes for table `sched_tbl`
--
ALTER TABLE `sched_tbl`
  ADD PRIMARY KEY (`appoint_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator_tbl`
--
ALTER TABLE `administrator_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `agents_info`
--
ALTER TABLE `agents_info`
  MODIFY `Client_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients_info`
--
ALTER TABLE `clients_info`
  MODIFY `Client_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `realestate_tbl`
--
ALTER TABLE `realestate_tbl`
  MODIFY `realestate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sched_tbl`
--
ALTER TABLE `sched_tbl`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
