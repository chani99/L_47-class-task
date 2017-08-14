-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 09:37 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northwind`
--

-- --------------------------------------------------------

--
-- Table structure for table `l47_software`
--

CREATE TABLE `l47_software` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `V_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `l47_software`
--

INSERT INTO `l47_software` (`id`, `name`, `V_id`) VALUES
(5, 'photoshop', 1),
(6, 'illustrator', 1),
(7, 'word', 2),
(8, 'exel', 2),
(10, 'fdsfds', 1),
(11, 'hrrray!!', 1),
(12, 'afdsfdsd', 1),
(13, 'fadsfdwreqhfdhgh', 1),
(14, 'fdssfd', 1),
(15, 'jhgjhg', 2),
(16, 'firefox', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `l47_software`
--
ALTER TABLE `l47_software`
  ADD PRIMARY KEY (`id`),
  ADD KEY `V_id` (`V_id`),
  ADD KEY `V_id_2` (`V_id`),
  ADD KEY `V_id_3` (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `l47_software`
--
ALTER TABLE `l47_software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `l47_software`
--
ALTER TABLE `l47_software`
  ADD CONSTRAINT `software_FK` FOREIGN KEY (`V_id`) REFERENCES `l47_vendor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
