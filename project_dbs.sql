-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 03:15 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyId`, `Name`, `Email`, `Phone`, `Address`) VALUES
(201, 'Twitter', 'twitte@gmail.com', '9860764612', 'California'),
(202, 'Accenture', 'accen@cts.com', '8697098764', 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `InternshipId` int(11) NOT NULL,
  `CompanyId` int(11) NOT NULL,
  `Stipend` int(11) NOT NULL,
  `Paid` int(11) NOT NULL,
  `HourlyRate` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`InternshipId`, `CompanyId`, `Stipend`, `Paid`, `HourlyRate`, `Description`) VALUES
(301, 202, 10000, 8000, 20, 'Data Analyst'),
(302, 202, 12000, 9000, 24, 'Web Developer'),
(303, 201, 14000, 12000, 30, 'Data Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `requires`
--

CREATE TABLE `requires` (
  `InternshipId` int(11) NOT NULL,
  `SkillId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requires`
--

INSERT INTO `requires` (`InternshipId`, `SkillId`) VALUES
(301, 103),
(301, 106),
(302, 101),
(302, 107),
(302, 209),
(303, 106);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `SkillId` int(11) NOT NULL,
  `SkillDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`SkillId`, `SkillDescription`) VALUES
(101, 'HTML'),
(102, 'Cascading'),
(103, 'ML'),
(106, 'python'),
(107, 'MySQL'),
(108, 'JSP'),
(209, 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyId`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`InternshipId`),
  ADD KEY `fk_intern_company` (`CompanyId`);

--
-- Indexes for table `requires`
--
ALTER TABLE `requires`
  ADD PRIMARY KEY (`InternshipId`,`SkillId`),
  ADD KEY `fk_requires_skills` (`SkillId`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`SkillId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `fk_intern_company` FOREIGN KEY (`CompanyId`) REFERENCES `company` (`CompanyId`);

--
-- Constraints for table `requires`
--
ALTER TABLE `requires`
  ADD CONSTRAINT `fk_requires_internship` FOREIGN KEY (`InternshipId`) REFERENCES `internship` (`InternshipId`),
  ADD CONSTRAINT `fk_requires_skills` FOREIGN KEY (`SkillId`) REFERENCES `skills` (`SkillId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
