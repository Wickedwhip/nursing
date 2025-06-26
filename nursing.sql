-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2025 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nursing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `childName` varchar(100) DEFAULT NULL,
  `childDOB` date DEFAULT NULL,
  `placeOfBirth` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `tribe` varchar(50) DEFAULT NULL,
  `admissionDate` date DEFAULT NULL,
  `admittedby` varchar(100) DEFAULT NULL,
  `admissionReason` text DEFAULT NULL,
  `childcurrentstatus` text DEFAULT NULL,
  `childBackground` text DEFAULT NULL,
  `familyMemberName` varchar(100) DEFAULT NULL,
  `relationWithChild` varchar(50) DEFAULT NULL,
  `familyContact` varchar(50) DEFAULT NULL,
  `hasthechildbeenschooledbefore` varchar(10) DEFAULT NULL,
  `lastschoolattended` varchar(100) DEFAULT NULL,
  `class_grade` varchar(50) DEFAULT NULL,
  `schoolperformance` text DEFAULT NULL,
  `learningdisabilities` enum('yes','no') DEFAULT NULL,
  `admissionPersonName` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `admissionPersonContact` varchar(50) DEFAULT NULL,
  `relationshipToChild` varchar(50) DEFAULT NULL,
  `idnumber` varchar(50) DEFAULT NULL,
  `officialsName` varchar(100) DEFAULT NULL,
  `officialsRole` varchar(50) DEFAULT NULL,
  `dateFilled` date DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `childName`, `childDOB`, `placeOfBirth`, `gender`, `nationality`, `religion`, `tribe`, `admissionDate`, `admittedby`, `admissionReason`, `childcurrentstatus`, `childBackground`, `familyMemberName`, `relationWithChild`, `familyContact`, `hasthechildbeenschooledbefore`, `lastschoolattended`, `class_grade`, `schoolperformance`, `learningdisabilities`, `admissionPersonName`, `role`, `admissionPersonContact`, `relationshipToChild`, `idnumber`, `officialsName`, `officialsRole`, `dateFilled`, `signature`) VALUES
(2, 'joe mwago', '2025-06-06', 'kenyatta', 'male', 'kenyan', 'christian', 'kikuyu', '2025-06-25', 'mike', 'abandoned', 'healthy', 'street', '', '', '', 'no', '', '', '', 'no', 'mike mbuvi sonko', 'colleague', '0732678192', 'colleague', '41970477', 'david irungu', 'social worker', '2025-06-25', 'davi'),
(3, 'joe mwago', '2025-06-25', 'kenyatta', 'male', 'kenyan', 'christian', 'kikuyu', '2025-06-19', 'mike', 'orphaned', 'injured', 'family', 'kelvin kiplagat', 'cousin', '0798654323', 'yes', 'kahuho', '9', 'good', 'no', 'mike mbuvi sonko', 'colleague', '0732678192', 'colleague', '41970477', 'david irungu', 'social worker', '2025-06-25', 'davi');

-- --------------------------------------------------------

--
-- Table structure for table `medical_forms`
--

CREATE TABLE `medical_forms` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `admissiondate` date DEFAULT NULL,
  `guardianname` varchar(100) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `guardianphone` varchar(20) DEFAULT NULL,
  `emergencycontactperson` varchar(100) DEFAULT NULL,
  `emergencycontactphone` varchar(20) DEFAULT NULL,
  `medicalhistory` text DEFAULT NULL,
  `allergies` text DEFAULT NULL,
  `currentmedications` text DEFAULT NULL,
  `vaccinationstatus` varchar(100) DEFAULT NULL,
  `specialneeds` text DEFAULT NULL,
  `additionalinfo` text DEFAULT NULL,
  `immunization` text DEFAULT NULL,
  `bcg_date` date DEFAULT NULL,
  `polio_date` date DEFAULT NULL,
  `dpt_date` date DEFAULT NULL,
  `hepatitisb_date` date DEFAULT NULL,
  `measles_date` date DEFAULT NULL,
  `others_specify` varchar(100) DEFAULT NULL,
  `others_date` date DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `bloodpressure` varchar(20) DEFAULT NULL,
  `temperature` varchar(10) DEFAULT NULL,
  `observations` text DEFAULT NULL,
  `nurse_name` varchar(100) DEFAULT NULL,
  `nurse_signature` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_forms`
--

INSERT INTO `medical_forms` (`id`, `fullname`, `dob`, `gender`, `admissiondate`, `guardianname`, `relationship`, `guardianphone`, `emergencycontactperson`, `emergencycontactphone`, `medicalhistory`, `allergies`, `currentmedications`, `vaccinationstatus`, `specialneeds`, `additionalinfo`, `immunization`, `bcg_date`, `polio_date`, `dpt_date`, `hepatitisb_date`, `measles_date`, `others_specify`, `others_date`, `weight`, `height`, `bloodpressure`, `temperature`, `observations`, `nurse_name`, `nurse_signature`, `date`, `created_at`) VALUES
(1, 'joe mwago', '2025-06-26', 'male', '2025-06-26', 'joe mwago', 'brother', '0789898989', 'mbuvi sonko', '0798989898', 'none', 'none', 'none', 'none', 'none', 'none', 'BCG, POLIO, DPT, HEPATITIS B, MEASLES, OTHERS', '2025-06-26', '2025-06-26', '2025-06-26', '2025-06-26', '2025-06-26', 'none', '2025-06-26', '75', '180', '130mm/hg', '37', 'none', 'gasheri', 'gasheri 123', '2025-06-26', '2025-06-26 08:48:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_forms`
--
ALTER TABLE `medical_forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medical_forms`
--
ALTER TABLE `medical_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
