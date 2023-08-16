-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 04:24 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `as_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `reason` varchar(40) NOT NULL,
  `date` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `username`, `pname`, `reason`, `date`, `time`, `email`) VALUES
(63, 'shreyalP', 'shreyal', 'cold', '2022-12-10', '10:00-12:30 A.M', 'shreyaldkumar84347@gmail.com'),
(64, 'sdk123', 'shreyal', 'cold', '2022-12-11', '10:00-12:30 A.M', 'shreyaldkumar84347@gmail.com'),
(66, 'sdk123', 'yash', 'cold', '2022-12-10', '6:00-8:30 P.M', 'shreyaldkumar84347@gmail.com'),
(69, 'abhi123', 'abhi', 'cold', '2022-12-10', '10:00-12:30 A.M', 'abhishek.vmt9731@gmail.com'),
(71, 'dineshNaik', 'dinesh', 'cold', '2022-12-10', '10:00-12:30 A.M', 'shreydeepdinesh@rediffmail.com'),
(72, 'dineshNaik', 'dinesh', 'cold', '2022-12-10', '8:00-10:00 A.M', 'dnaiksheetal72@gmail.com'),
(73, 'sdk123', 'shreyal', 'cold', '2022-12-16', '8:00-10:00 A.M', 'shreyaldkumar84347@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('a', '12345'),
('aaa123', '123'),
('abhi123', '12345'),
('dineshNaik', '12345'),
('liamD', '12345'),
('s12', '12345'),
('sdk123', '12345'),
('shreyal12', '12345'),
('shreyalP', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `usernameCons` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `usernameCons` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
