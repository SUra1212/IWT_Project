-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 07:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `regcustomer`
--

CREATE TABLE `regcustomer` (
  `cus_id` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Nic` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Conpw` varchar(10) NOT NULL,
  `Acode` varchar(3) NOT NULL,
  `Pnum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regcustomer`
--

INSERT INTO `regcustomer` (`cus_id`, `First_name`, `Last_name`, `Nic`, `Email`, `Password`, `Conpw`, `Acode`, `Pnum`) VALUES
(1, 'Tharindu', 'Rathnayake', '981783654', 'tharindu1dr@gmail.com', '123pw', '123pw', '+94', 456),
(2, 'Tharindu', 'Rathnayake', '981783654', 'tharindu1dr@gmail.com', '123pw', '123pw', '+94', 77344667),
(3, 'Kasun', 'Kalhara', '851783654v', 'kasunkal12@gmail.com', 'pwd2123', 'pwd2123', '+94', 771234567),
(4, 'Kasun', '', '', '', '', '', '', 0),
(5, 'Nuwan', 'Rathnayake', '981783654', 'kasunkal12@gmail.com', '123pw', 'df', '94', 77344667),
(6, 'Kasun', 'Rathnayake', '+947712345', 'nothing', 'ththth', 'pw', '94', 3),
(7, 'sura', 'bla', '22', 'ss', 'ww', 's', '', 0),
(8, 'hhhhhhhhh', 'nnnnnnnnn', '88888', '66666', '6666', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regcustomer`
--
ALTER TABLE `regcustomer`
  ADD PRIMARY KEY (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regcustomer`
--
ALTER TABLE `regcustomer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
