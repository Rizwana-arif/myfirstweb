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
-- Table structure for table `student record`
--

CREATE TABLE `student record` (
  `sname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sadd` varchar(255) NOT NULL,
  `sgen` varchar(255) NOT NULL,
  `smail` varchar(255) NOT NULL,
  `smob` int(255) NOT NULL,
  `sage` varchar(255) NOT NULL,
  `snic` varchar(255) NOT NULL,
  `spic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student record`
--

INSERT INTO `student record` (`sname`, `fname`, `sadd`, `sgen`, `smail`, `smob`, `sage`, `snic`, `spic`) VALUES
('rizwana', 'arif ali', 'muhallah hassan pura FSD', 'female', 'rizwanaarif22@gmail.com', 12132435, '20', '1222324234234', 'tree-736885__480.jpg'),
('Sana', 'M.Shafeeq', 'kamal town Fsd', 'female', 'sanabatool23@gmail.com', 8765432, '20', '8877665544', 'heart.jpg'),
('Melodie Valdez', 'Brennan Armstrong', 'Ut reprehenderit qu', 'Facilis adipisicing ', 'Consequatur necessit', 0, 'Enim veniam id aut ', 'Voluptate consequatu', 'a:3:{i:0;s:13:\"a_cottage.jpg\";i:1;s:14:\"images (1).jpg\";i:2;s:20:\"scoutBobber_bike.jpg\";}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
