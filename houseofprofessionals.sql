-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 07:29 AM
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
-- Database: `houseofprofessionals`
--

-- --------------------------------------------------------

--
-- Table structure for table `muhib`
--

CREATE TABLE `muhib` (
  `course` text NOT NULL,
  `skeme` text NOT NULL,
  `candidateName` text NOT NULL,
  `fatherName` text NOT NULL,
  `permanentAddress` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `candidateCNICNumber` int(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `candidateCellNumber` int(100) NOT NULL,
  `fatherCellNumber` int(100) NOT NULL,
  `qualification` text NOT NULL,
  `gender` text NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `registrationDate` date NOT NULL,
  `startingDate` date NOT NULL,
  `endingDate` date NOT NULL,
  `classDaysAWeek` int(100) NOT NULL,
  `totalFees` int(100) NOT NULL,
  `paymentTerms` text NOT NULL,
  `feesReceived` int(100) NOT NULL,
  `numberOfInstallments` int(100) NOT NULL,
  `feesRemaining` int(100) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muhib`
--

INSERT INTO `muhib` (`course`, `skeme`, `candidateName`, `fatherName`, `permanentAddress`, `email`, `candidateCNICNumber`, `dateOfBirth`, `candidateCellNumber`, `fatherCellNumber`, `qualification`, `gender`, `ApplicationID`, `registrationDate`, `startingDate`, `endingDate`, `classDaysAWeek`, `totalFees`, `paymentTerms`, `feesReceived`, `numberOfInstallments`, `feesRemaining`, `remarks`) VALUES
('muhib', 'muhib', 'muhib', 'raza', 'sukhchyn', 'muhibulmustafaawan@gmail.com', 2147483647, '0000-00-00', 2147483647, 2147483647, 'Matric', 'Male', 1, '2024-01-04', '2024-01-13', '2024-01-02', 2, 10000, 'cash', 1000, 10, 9000, 'good'),
('adv', 'muhib', 'muhib', 'raza', 'sukhchyn', 'muhibulmustafaawan@gmail.com', 907554321, '0000-00-00', 2147483647, 0, 'Bachelors', '', 2, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
('adv', 'muhib', 'muhib', 'raza', 'sukhchyn', 'muhibulmustafaawan@gmail.com', 907554321, '0000-00-00', 2147483647, 0, 'Bachelors', '', 3, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
('adv', 'muhib', 'muhib', 'raza', 'sukhchyn', 'muhibulmustafaawan@gmail.com', 907554321, '0000-00-00', 2147483647, 0, 'Bachelors', '', 4, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
('adv', 'muhib', 'muhib', 'raza', 'sukhchyn', 'muhibulmustafaawan@gmail.com', 907554321, '0000-00-00', 2147483647, 0, 'Bachelors', '', 5, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `muhib`
--
ALTER TABLE `muhib`
  ADD PRIMARY KEY (`ApplicationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `muhib`
--
ALTER TABLE `muhib`
  MODIFY `ApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
