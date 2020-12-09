-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 01:51 PM
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
-- Database: `myproject`
--
CREATE DATABASE IF NOT EXISTS `myproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myproject`;

-- --------------------------------------------------------

--
-- Table structure for table `myindex`
--

CREATE TABLE `myindex` (
  `indexID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `symbol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myindex`
--

INSERT INTO `myindex` (`indexID`, `username`, `symbol`) VALUES
(4, 'Zoiku2002', 'ADB'),
(5, 'Zoiku2002', 'AADS'),
(6, 'Mzoiku', 'UNIL'),
(7, 'Mzoiku', 'AADS'),
(8, 'Mzoiku', 'ADB'),
(9, 'Mawuli', 'AADS'),
(10, 'Mawuli', 'UNIL'),
(11, 'Mzoiku', 'EGH'),
(12, 'Mzoiku', 'EGL'),
(14, 'Mawuli', 'DIGICUT'),
(15, 'Mawuli', 'ALW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `userpassword`) VALUES
('Mawuli Zoiku', 'Mawuli', 'Zoiku123x'),
('Mark Zoiku', 'Mzoiku', 'Zoiku123x'),
('Dinam Zoiku', 'Zoiku2002', 'Zoiku2002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myindex`
--
ALTER TABLE `myindex`
  ADD PRIMARY KEY (`indexID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myindex`
--
ALTER TABLE `myindex`
  MODIFY `indexID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `myindex`
--
ALTER TABLE `myindex`
  ADD CONSTRAINT `myindex_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
