-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 01:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nid` int(17) DEFAULT NULL,
  `brg` int(25) DEFAULT NULL,
  `maried` varchar(100) DEFAULT NULL,
  `quota` varchar(100) DEFAULT NULL,
  `pse_name` varchar(100) NOT NULL,
  `pse_vname` varchar(100) NOT NULL,
  `pse_upname` varchar(100) NOT NULL,
  `pse_disname` varchar(100) NOT NULL,
  `pse_poname` varchar(100) NOT NULL,
  `pse_psc` int(6) NOT NULL,
  `prm_name` varchar(100) DEFAULT NULL,
  `prm_vname` varchar(100) DEFAULT NULL,
  `prm_upname` varchar(100) DEFAULT NULL,
  `prm_disname` varchar(100) DEFAULT NULL,
  `prm_poname` varchar(100) DEFAULT NULL,
  `prm_pcname` int(6) DEFAULT NULL,
  `p_number` int(11) NOT NULL,
  `p_number_comform` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ssc_exam_type` varchar(100) DEFAULT NULL,
  `ssc_board` varchar(100) DEFAULT NULL,
  `ssc_result` float DEFAULT NULL,
  `ssc_roll_number` int(8) DEFAULT NULL,
  `ssc_gro_sup` varchar(10) DEFAULT NULL,
  `ssc_pass_year` int(4) DEFAULT NULL,
  `hsc_exam_type` varchar(100) DEFAULT NULL,
  `hsc_board` varchar(100) DEFAULT NULL,
  `hsc_result` float DEFAULT NULL,
  `hsc_roll_number` int(8) DEFAULT NULL,
  `hsc_gro_sub` varchar(100) DEFAULT NULL,
  `hsc_pass_year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `name`, `father_name`, `mother_name`, `date`, `month`, `year`, `gender`, `nationality`, `religion`, `nid`, `brg`, `maried`, `quota`, `pse_name`, `pse_vname`, `pse_upname`, `pse_disname`, `pse_poname`, `pse_psc`, `prm_name`, `prm_vname`, `prm_upname`, `prm_disname`, `prm_poname`, `prm_pcname`, `p_number`, `p_number_comform`, `email`, `ssc_exam_type`, `ssc_board`, `ssc_result`, `ssc_roll_number`, `ssc_gro_sup`, `ssc_pass_year`, `hsc_exam_type`, `hsc_board`, `hsc_result`, `hsc_roll_number`, `hsc_gro_sub`, `hsc_pass_year`) VALUES
(1, 'sojib', '', '', 0, 0, 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'sojib', '', '', 0, 0, 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'sojib', 'asdf', 'asdf', 0, 0, 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 456, 456, 'diu.medul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 456, 456, 'diu.medul@gmail.com', '456', '456', 456, 456, '456', 456, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'sojib', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 456, 456, 'diu.medul@gmail.com', '456', '456', 456, 456, '456', 456, '465', '456', 456, 456, '456', 456),
(11, 'Himu', 'asdf', 'asdf', 1, 2, 1992, '1', 'bangladeshi', 'Islam', 0, 0, '0', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 456, 456, 'diu.medul@gmail.com', '456', '456', 456, 456, '456', 456, '465', '456', 456, 456, '456', 456),
(12, 'Himu', 'asdf', 'asdf', 1, 2, 1992, 'bangladesh', 'Islam', '0', 0, 0, '1', '1', 'ghjghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 0, 456, 456, 'diu.medul@gmail.com', '456', '456', 456, 456, '456', 456, '465', '456', 456, 456, '456', 456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
