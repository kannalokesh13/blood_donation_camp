-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 06:51 AM
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
-- Database: `blood_bank_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_logins`
--

CREATE TABLE `doctor_logins` (
  `name` text NOT NULL,
  `hospital_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_logins`
--

INSERT INTO `doctor_logins` (`name`, `hospital_name`, `designation`, `email`, `mobile_no`, `user_name`, `password`) VALUES
('lokesh', 'jntuacek', 'student', 'kannalokesh19@gmail.com', 1234567889, 'lokesh', 'lokesh123'),
('yagnesh', 'jntuacek', 'student', 'yagneshguduru2000@gmail.com', 2147483647, 'yagnesh', 'yagnesh12');

-- --------------------------------------------------------

--
-- Table structure for table `donars_list`
--

CREATE TABLE `donars_list` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` text NOT NULL,
  `age` int(4) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donars_list`
--

INSERT INTO `donars_list` (`name`, `email`, `mobile`, `gender`, `age`, `blood_group`) VALUES
('yagnesh', 'gudurusrinadh@gmail.com', 2147483647, 'male', 21, 'A+'),
('lokesh', 'gudurusrinadh@gmail.com', 2147483647, 'male', 21, 'O+'),
('sushu1234', 'eswar8109@gmail.com', 2147483647, 'male', 21, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `requested_list`
--

CREATE TABLE `requested_list` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(4) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `cause` varchar(50) NOT NULL,
  `approve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requested_list`
--

INSERT INTO `requested_list` (`name`, `email`, `mobile_no`, `gender`, `age`, `blood_group`, `cause`, `approve`) VALUES
('yagnesh', 'gudurusrinadh@gmail.com', 2147483647, 'male', 21, 'A+', 'need blood due to accident', 'pending'),
('sushu1234', 'admin@email.com', 2147483647, 'male', 21, 'A+', 'need blood due to accident', 'pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
