-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbriz`
--

-- --------------------------------------------------------

--
-- Table structure for table `student table`
--

CREATE TABLE `student table` (
  `sname` varchar(255) NOT NULL,
  `spass` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `sage` int(255) NOT NULL,
  `sgen` text NOT NULL,
  `date` date NOT NULL,
  `stext` varchar(255) NOT NULL,
  `spic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student table`
--

INSERT INTO `student table` (`sname`, `spass`, `semail`, `sage`, `sgen`, `date`, `stext`, `spic`) VALUES
('', '', '', 0, 'female', '0000-00-00', '', 'tree-736885__480.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
