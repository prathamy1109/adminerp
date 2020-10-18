-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 11:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiry`
--

CREATE TABLE `admission_enquiry` (
  `admenq_id` int(255) NOT NULL,
  `admenq_fname` varchar(255) DEFAULT NULL,
  `admenq_lname` varchar(255) DEFAULT NULL,
  `admenq_contact` bigint(255) DEFAULT NULL,
  `admenq_email` varchar(255) DEFAULT NULL,
  `admenq_address` varchar(255) DEFAULT NULL,
  `admenq_cdate` date DEFAULT NULL,
  `admenq_reference` varchar(255) DEFAULT NULL,
  `admenq_ndate` date DEFAULT NULL,
  `admenq_abtclass` varchar(255) DEFAULT NULL,
  `admenq_status` varchar(255) DEFAULT NULL,
  `admenq_note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_enquiry`
--

INSERT INTO `admission_enquiry` (`admenq_id`, `admenq_fname`, `admenq_lname`, `admenq_contact`, `admenq_email`, `admenq_address`, `admenq_cdate`, `admenq_reference`, `admenq_ndate`, `admenq_abtclass`, `admenq_status`, `admenq_note`) VALUES
(1, 'sfsfd', 'sfsf', 454, 'sfsf', 'sfsf', '2020-10-30', 'sfsf', '2020-10-22', '9th', 'Active', 'sf'),
(2, 'sf\';sf', 'dssd', 5416, 'sdfsdf', 'sfsf', '2020-10-15', 'sffs', '2020-11-07', '9th', 'Active', 'sfgsf'),
(3, 'dg', 'ddg', 1146, 'dgdg', 'dgdg', '2020-10-22', 'dgd', '2020-10-15', 'None', 'None', 'dgdg'),
(4, 'dg', 'ddg', 1146, 'dgdg', 'dgdg', '2020-10-22', 'dgd', '2020-10-15', 'None', 'None', 'dgdg');

-- --------------------------------------------------------

--
-- Table structure for table `courier_dispatch`
--

CREATE TABLE `courier_dispatch` (
  `cd_id` int(255) NOT NULL,
  `cd_totitle` varchar(255) DEFAULT NULL,
  `cd_reference` varchar(255) DEFAULT NULL,
  `cd_address` varchar(255) DEFAULT NULL,
  `cd_note` text,
  `cd_fromtitle` varchar(255) DEFAULT NULL,
  `cd_date` date DEFAULT NULL,
  `cd_attach` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier_dispatch`
--

INSERT INTO `courier_dispatch` (`cd_id`, `cd_totitle`, `cd_reference`, `cd_address`, `cd_note`, `cd_fromtitle`, `cd_date`, `cd_attach`) VALUES
(1, 'dsfdfs', 'sggs', 'sgsdg', 'ssg', 'sgsg', '2020-10-13', 'adminerp.sql'),
(2, 'klaurfihfa', '/kfsdhanflkihaf', 'nzfsmbjSF ', 'fmbdff', ',nfbjf', '2020-10-27', 'adminerp.sql'),
(3, 'dfgdfg', 'dG\":k,', 'sgfdsg', 'dsgdfg', 'dfgdfg', '2020-10-14', 'Untitled.png'),
(4, 'asd', '123', 'xyz', 'asd', 'rte', '2020-10-15', ''),
(5, 'gfdf', 'dfgd', 'dfgdfg', 'dfgdg', 'dgdg', '2020-10-05', 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `courier_receive`
--

CREATE TABLE `courier_receive` (
  `cr_id` int(255) NOT NULL,
  `cr_totitle` varchar(255) DEFAULT NULL,
  `cr_reference` varchar(255) DEFAULT NULL,
  `cr_address` varchar(255) DEFAULT NULL,
  `cr_note` text,
  `cr_fromtitle` varchar(255) DEFAULT NULL,
  `cr_date` date DEFAULT NULL,
  `cr_attach` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier_receive`
--

INSERT INTO `courier_receive` (`cr_id`, `cr_totitle`, `cr_reference`, `cr_address`, `cr_note`, `cr_fromtitle`, `cr_date`, `cr_attach`) VALUES
(1, 'dxgdg', 'ddfg', 'dffg', 'dfgfdg', 'dfgfg', '2020-10-19', 'Untitled.png'),
(2, 'dg', 'dfg', 'dfg', 'dfgdf', 'dfgdfg', '2020-09-29', ''),
(3, 'fghfgh', 'fhf', 'fhfh', 'fhgfh', 'fhfh', '2020-10-13', 'Untitled.png'),
(4, 'fghfh', 'fhfh', 'fghfh', 'fghfh', 'fhfhfh', '2020-10-20', 'Untitled.png'),
(5, 'ghfh', 'fghh', 'fhfh', 'fghfh', 'fhfgh', '2020-10-13', ''),
(6, 'ghfh', 'fghh', 'fhfh', 'fghfh', 'fhfgh', '2020-10-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `exp_id` int(255) NOT NULL,
  `exp_qty` varchar(255) DEFAULT NULL,
  `exp_iname` varchar(255) DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `exp_amount` varchar(255) DEFAULT NULL,
  `exp_vfname` varchar(255) DEFAULT NULL,
  `exp_vlname` varchar(255) DEFAULT NULL,
  `exp_payment` varchar(255) DEFAULT NULL,
  `exp_note` text,
  `exp_attach` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`exp_id`, `exp_qty`, `exp_iname`, `exp_date`, `exp_amount`, `exp_vfname`, `exp_vlname`, `exp_payment`, `exp_note`, `exp_attach`) VALUES
(1, '1', 'sjshdfsnf', '2020-10-28', '221', 'dfgdg', 'dfgfdg', 'dfgdgd', 'fgdfgdgd', 'Untitled.png'),
(2, '1', 'jhkh', '2022-12-04', '221', 'DFHFH', 'FGHFHF', 'HFHFH', 'FHFH', 'Untitled.png'),
(3, '4', 'dg', '2020-10-14', '121', 'dgfgd', 'gdgdgfd', 'gd', 'dgdg', 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `h_id` int(255) NOT NULL,
  `h_std_id` bigint(255) DEFAULT NULL,
  `h_fname` varchar(255) DEFAULT NULL,
  `h_lname` varchar(255) DEFAULT NULL,
  `h_contact` bigint(255) DEFAULT NULL,
  `h_address` varchar(255) DEFAULT NULL,
  `h_jdate` date DEFAULT NULL,
  `h_ldate` date DEFAULT NULL,
  `h_note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`h_id`, `h_std_id`, `h_fname`, `h_lname`, `h_contact`, `h_address`, `h_jdate`, `h_ldate`, `h_note`) VALUES
(1, 5, 'dgdg', 'dgdg', 455, 'dgdg', '2020-10-17', '2020-10-17', 'dggg'),
(2, 3, 'prathm', 'y', 12, 's', '2020-10-17', '2020-11-04', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `lev_id` int(255) NOT NULL,
  `lev_fname` varchar(255) DEFAULT NULL,
  `lev_mname` varchar(255) DEFAULT NULL,
  `lev_lname` varchar(255) DEFAULT NULL,
  `lev_contact` bigint(255) DEFAULT NULL,
  `lev_date` date DEFAULT NULL,
  `lev_attach` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`lev_id`, `lev_fname`, `lev_mname`, `lev_lname`, `lev_contact`, `lev_date`, `lev_attach`) VALUES
(1, 'sfg', 'dgdg', 'dfgdg', 22, '2020-10-15', 'Untitled.png'),
(2, 'sfs', 'sffs', 'sfsf', 115, '2020-10-17', 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

CREATE TABLE `mst_category` (
  `mc_id` int(255) NOT NULL,
  `mc_cate_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`mc_id`, `mc_cate_name`) VALUES
(7, 'dsacf'),
(8, 'sacf'),
(9, 'fgb'),
(10, 'dfvg'),
(11, 'dsv'),
(12, '789789io');

-- --------------------------------------------------------

--
-- Table structure for table `mst_religion`
--

CREATE TABLE `mst_religion` (
  `mr_id` int(255) NOT NULL,
  `mr_religion_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_religion`
--

INSERT INTO `mst_religion` (`mr_id`, `mr_religion_name`) VALUES
(1, 'dgg'),
(2, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `phonecall_book`
--

CREATE TABLE `phonecall_book` (
  `pcb_id` int(255) NOT NULL,
  `pcb_fname` varchar(255) DEFAULT NULL,
  `pcb_lname` varchar(255) DEFAULT NULL,
  `pcb_contact` bigint(255) DEFAULT NULL,
  `pcb_cdate` date DEFAULT NULL,
  `pcb_ndate` date DEFAULT NULL,
  `pcb_calltype` varchar(255) DEFAULT NULL,
  `pcb_note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phonecall_book`
--

INSERT INTO `phonecall_book` (`pcb_id`, `pcb_fname`, `pcb_lname`, `pcb_contact`, `pcb_cdate`, `pcb_ndate`, `pcb_calltype`, `pcb_note`) VALUES
(1, 'saf', 'sffssf', 0, '2020-10-15', '2020-10-15', 'Outgoing', 'sffd'),
(2, 'sdfsdf', 'sfgfds', 0, '2020-10-15', '2020-10-15', 'Outgoing', 'sfsff'),
(3, 'fdgfdg', 'dfdfgdfgd', 0, '2020-10-15', '2020-10-15', 'Incoming', 'dfgdfg'),
(4, 'dfgdfg', 'dfgdg', 0, '2020-10-15', '2020-10-15', 'Outgoing', 'dfgdg'),
(5, 'dgdfgdf', 'gdgdfgdfg', 1213154454, '2020-10-15', '2020-10-15', 'Incoming', 'dfdfgdg'),
(6, 'dgdfgdf', 'gdgdfgdfg', 1213154454, '2020-10-15', '2020-10-15', 'Incoming', 'dfdfgdg'),
(7, 'vaibhav', 'patil', 124567890, '2020-10-15', '2020-10-15', 'Incoming', 'admin'),
(8, 'prathm', 'Y', 0, '2020-10-29', '2020-11-06', 'Outgoing', 'dfgeg'),
(9, 'prathm', 'yemul', 1234567890, '2020-10-15', '2020-10-19', 'Incoming', 'Admission Related');

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `s_id` int(255) NOT NULL,
  `s_iqty` bigint(255) DEFAULT NULL,
  `s_addsup` varchar(255) DEFAULT NULL,
  `s_addistore` varchar(255) DEFAULT NULL,
  `s_addicat` varchar(255) DEFAULT NULL,
  `s_addiname` varchar(255) DEFAULT NULL,
  `s_recdate` date DEFAULT NULL,
  `s_retdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`s_id`, `s_iqty`, `s_addsup`, `s_addistore`, `s_addicat`, `s_addiname`, `s_recdate`, `s_retdate`) VALUES
(1, 3, 'gdggdg', 'dgdfgdg', 'dfgdfg', 'dfgdfgdg', '2020-10-21', '2020-10-17'),
(2, 2, 'dsf', 'sgsf', 'sdfdf', 'sgsdf', '2020-10-17', '2020-11-06'),
(3, 2, 'sffd', 'sdfsdf', 'sdfsdf', 'sdff', '2020-10-10', '2020-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_book`
--

CREATE TABLE `visitor_book` (
  `vb_id` int(255) NOT NULL,
  `vb_purpose` varchar(255) DEFAULT NULL,
  `vb_fname` varchar(255) DEFAULT NULL,
  `vb_lname` varchar(255) DEFAULT NULL,
  `vb_contact` bigint(255) DEFAULT NULL,
  `vb_no_person` varchar(255) DEFAULT NULL,
  `vb_date` date DEFAULT NULL,
  `vb_in_time` varchar(255) DEFAULT NULL,
  `vb_out_time` varchar(255) DEFAULT NULL,
  `vb_note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_book`
--

INSERT INTO `visitor_book` (`vb_id`, `vb_purpose`, `vb_fname`, `vb_lname`, `vb_contact`, `vb_no_person`, `vb_date`, `vb_in_time`, `vb_out_time`, `vb_note`) VALUES
(25, 'Admission', 'Pratham', 'Yemul', 9370450405, '2', '2020-10-14', '11:45', '12:15', 'Enquiry'),
(26, 'Admission', 'Vaibhav', 'Patil', 1234567890, '2', '2020-10-21', '01:36', '01:36', 'enquiry'),
(27, 'Enquiry', 'Sonal', 'Mohalkar', 1234567980, '2', '2020-10-21', '02:35', '05:37', 'jhajdb'),
(28, 'admission', 'yogita', 'jagtap', 123456789, '2', '2020-10-15', '12:57', '15:52', 'abc'),
(29, 'add', 'fn', 'ln', 1234567890, '1', '2020-05-12', '03:02', '02:12', 'abc'),
(30, 'add', 'fn', 'ln', 1234567890, '1', '2020-05-12', '03:02', '02:12', 'abc'),
(31, 'dad', 'ad', 'adad', 0, '3', '2020-10-20', '12:56', '17:51', 'ad'),
(32, 'princ', 'abc', 'xyz', 123456478056456456, '3', '2020-10-15', '15:27', '15:29', 'd,l,y,d;yhdd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  ADD PRIMARY KEY (`admenq_id`);

--
-- Indexes for table `courier_dispatch`
--
ALTER TABLE `courier_dispatch`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `courier_receive`
--
ALTER TABLE `courier_receive`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`lev_id`);

--
-- Indexes for table `mst_category`
--
ALTER TABLE `mst_category`
  ADD PRIMARY KEY (`mc_id`);

--
-- Indexes for table `mst_religion`
--
ALTER TABLE `mst_religion`
  ADD PRIMARY KEY (`mr_id`);

--
-- Indexes for table `phonecall_book`
--
ALTER TABLE `phonecall_book`
  ADD PRIMARY KEY (`pcb_id`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `visitor_book`
--
ALTER TABLE `visitor_book`
  ADD PRIMARY KEY (`vb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  MODIFY `admenq_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courier_dispatch`
--
ALTER TABLE `courier_dispatch`
  MODIFY `cd_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courier_receive`
--
ALTER TABLE `courier_receive`
  MODIFY `cr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `exp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `h_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `lev_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_category`
--
ALTER TABLE `mst_category`
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mst_religion`
--
ALTER TABLE `mst_religion`
  MODIFY `mr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phonecall_book`
--
ALTER TABLE `phonecall_book`
  MODIFY `pcb_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor_book`
--
ALTER TABLE `visitor_book`
  MODIFY `vb_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
