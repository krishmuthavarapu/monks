-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 05:23 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillmonks`
--

-- --------------------------------------------------------

--
-- Table structure for table `institute_data`
--

CREATE TABLE `institute_data` (
  `id` int(11) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `batch_date` varchar(50) NOT NULL,
  `demo_date` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute_data`
--

INSERT INTO `institute_data` (`id`, `institute`, `course`, `location`, `batch_date`, `demo_date`, `email`, `number`, `date`) VALUES
(1, 'Prime Classes', 'Python', 'Madhapur', '01-07-2019', '', 'info@prime.com', '987654321', '2019-06-24 09:36:17'),
(3, 'Skill Monks ', 'AI', 'Hyd', '01-07-2018', '', 'admin@skillmonks.co', '12345678', '2019-06-24 11:16:35'),
(9, 'Lynda', 'MEAN', 'Anywhere', '08-08-2019', '', 'info@lynda.com', '123456', '2019-06-24 12:52:53'),
(11, 'Prime Classes', 'Python', 'wec', '01-07-2019', '', 'admin@scuti.co.in', '1234567', '2019-06-24 16:33:24'),
(12, 'Prime Classes', 'Python', 'hyd', '01-07-2019', '29-06-2019', 'admin@skillmonks.com', '2134124', '2019-06-24 16:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', 'admin@skillmonks.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institute_data`
--
ALTER TABLE `institute_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institute_data`
--
ALTER TABLE `institute_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
