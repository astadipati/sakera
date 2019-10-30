-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 02:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modal`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_mod`
--

CREATE TABLE `t_mod` (
  `mod_id` int(11) NOT NULL,
  `mod_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mod`
--

INSERT INTO `t_mod` (`mod_id`, `mod_name`) VALUES
(14, 'duasaja'),
(15, 'tiga'),
(16, 'gg'),
(17, 'kk'),
(18, 'ee'),
(19, 'bb'),
(20, 'nn'),
(21, 'xx'),
(22, 'ww'),
(23, 'ss'),
(24, 'aa'),
(25, '33'),
(27, 'Grtgrtsaja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_mod`
--
ALTER TABLE `t_mod`
  ADD PRIMARY KEY (`mod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_mod`
--
ALTER TABLE `t_mod`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
