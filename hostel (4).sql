-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 08:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel_student_list`
--

CREATE TABLE `hostel_student_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `yearOfStudy` int(11) DEFAULT NULL,
  `admissionNo` varchar(20) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `pAddress` text DEFAULT NULL,
  `gAddress` text DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_student_list`
--

INSERT INTO `hostel_student_list` (`id`, `name`, `gender`, `degree`, `yearOfStudy`, `admissionNo`, `semester`, `branch`, `pAddress`, `gAddress`, `pincode`, `mobile`) VALUES
(2, 'SHEBIN P BIJU', 'male', 'math', 2021, '111', 1, 'mca', 'Pullozhathil house', 'ALAMPALLY', '686502', '0999 581 5251'),
(21, 'Saheba Biju', '', '', 0, '111111', 0, '', 'Pullozhathil House Pampady PO Pampady', 'Kottayam,Kerala', '686502', '09995815251'),
(11, 'Saheba Biju', '', '', 0, '112', 0, '', 'Pullozhathil House Pampady PO Pampady', 'Kottayam,Kerala', '686502', '09995815251'),
(1, 'Saheba Biju', '', '', 0, '121', 0, '', 'Pullozhathil House Pampady PO Pampady', 'Kottayam,Kerala', '686502', '09995815251');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_student_registration`
--

CREATE TABLE `hostel_student_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `yearOfStudy` int(11) DEFAULT NULL,
  `admissionNo` varchar(20) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `pAddress` text DEFAULT NULL,
  `gAddress` text DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `gMobile` varchar(15) DEFAULT NULL,
  `prAddress` text DEFAULT NULL,
  `p1` tinyint(1) DEFAULT NULL,
  `p2` tinyint(1) DEFAULT NULL,
  `other` tinyint(1) DEFAULT NULL,
  `aIncome` decimal(10,2) DEFAULT NULL,
  `obcOrOec` enum('obcOrOecYes','obcOrOecNo') DEFAULT NULL,
  `distance` decimal(10,2) DEFAULT NULL,
  `sgpa1` decimal(3,2) DEFAULT NULL,
  `sgpa2` decimal(3,2) DEFAULT NULL,
  `sgpa3` decimal(3,2) DEFAULT NULL,
  `sgpa4` decimal(3,2) DEFAULT NULL,
  `sgpa5` decimal(3,2) DEFAULT NULL,
  `sgpa6` decimal(3,2) DEFAULT NULL,
  `sgpa7` decimal(3,2) DEFAULT NULL,
  `sgpa8` decimal(3,2) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `dAction` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_student_registration`
--

INSERT INTO `hostel_student_registration` (`id`, `name`, `gender`, `degree`, `yearOfStudy`, `admissionNo`, `semester`, `branch`, `pAddress`, `gAddress`, `pincode`, `mobile`, `gMobile`, `prAddress`, `p1`, `p2`, `other`, `aIncome`, `obcOrOec`, `distance`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `rank`, `dAction`, `created_at`, `updated_at`) VALUES
(2, 'SHEBIN P BIJU', 'male', 'math', 2021, '111', 1, 'mca', 'Pullozhathil house', 'ALAMPALLY', '686502', '0999 581 5251', '+917902609679', 'Pullozhathil house\r\nALAMPALLY', 0, 1, 0, '10000.00', 'obcOrOecNo', '123123.00', '2.00', '1.00', '2.00', '1.00', '2.00', '1.00', '9.99', '1.00', 22, 'no', '2023-10-15 04:59:22', '2023-10-15 04:59:22'),
(7, 'SHEBIN P BIJU', '', '', 0, '1111', 0, '', 'Pullozhathil house', 'ALAMPALLY', '686546', '0999 581 5251', '', 'Pullozhathil house\r\nALAMPALLY', 0, 0, 0, '0.00', '', '13.08', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '', '2023-10-15 07:31:55', '2023-10-15 14:16:05'),
(8, 'Saheba Biju', '', '', 0, '111111', 0, '', 'Pullozhathil House Pampady PO Pampady', 'Kottayam,Kerala', '686502', '09995815251', '', 'Pullozhathil House Pampady PO Pampady\r\nKottayam,Kerala', 1, 0, 0, '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '', '2023-10-15 07:39:49', '2023-10-15 14:16:10'),
(9, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '', '2023-10-15 17:53:12', '2023-10-15 17:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`) VALUES
('111', '111', 'student'),
('111111', '111111', 'student'),
('hs', 'hs', 'hs'),
('matron', 'matron', 'matron'),
('ms', 'ms', 'ms'),
('warden', 'warden', 'warden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel_student_list`
--
ALTER TABLE `hostel_student_list`
  ADD PRIMARY KEY (`admissionNo`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `hostel_student_registration`
--
ALTER TABLE `hostel_student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel_student_list`
--
ALTER TABLE `hostel_student_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hostel_student_registration`
--
ALTER TABLE `hostel_student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
