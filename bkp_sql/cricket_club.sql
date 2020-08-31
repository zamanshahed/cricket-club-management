-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 08:31 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_data`
--

CREATE TABLE `club_data` (
  `club_id` int(20) NOT NULL,
  `club_name` varchar(500) NOT NULL,
  `date_of_est` date NOT NULL,
  `house_no` int(10) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `village_str` varchar(250) DEFAULT NULL,
  `thana` varchar(250) DEFAULT NULL,
  `district` varchar(250) NOT NULL,
  `post_code` int(10) DEFAULT NULL,
  `president_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_data`
--

INSERT INTO `club_data` (`club_id`, `club_name`, `date_of_est`, `house_no`, `location`, `village_str`, `thana`, `district`, `post_code`, `president_name`) VALUES
(11321, 'INDEPENDENT', '2015-01-01', 0, '', '', '', 'Dhaka', 0, 'Sumon'),
(1250, 'ars', '2018-08-15', 0, '', '', '', 'bogra', 0, 'shohag'),
(99554, 'ONE', '2018-08-08', 0, '', '', '', 'Dhaka', 0, 'M_One');

-- --------------------------------------------------------

--
-- Table structure for table `contract_data`
--

CREATE TABLE `contract_data` (
  `club_id` int(20) NOT NULL,
  `club_name3` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `player_id` int(20) NOT NULL,
  `f_name2` varchar(250) NOT NULL,
  `m_name2` varchar(250) DEFAULT NULL,
  `l_name2` varchar(250) DEFAULT NULL,
  `designation` varchar(250) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `c_amount` int(20) NOT NULL,
  `c_witness1` varchar(500) NOT NULL,
  `c_witness2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract_data`
--

INSERT INTO `contract_data` (`club_id`, `club_name3`, `f_name`, `m_name`, `l_name`, `player_id`, `f_name2`, `m_name2`, `l_name2`, `designation`, `start_day`, `end_day`, `c_amount`, `c_witness1`, `c_witness2`) VALUES
(11321, 'national', 'sumon', '', '', 5522, 'Ahshanul', '', '', 'Register executive', '2018-08-01', '2020-08-20', 20000, 'Rouf', '');

-- --------------------------------------------------------

--
-- Table structure for table `match_data`
--

CREATE TABLE `match_data` (
  `event_id` int(20) NOT NULL,
  `vanue_id` varchar(200) NOT NULL,
  `match_date` date NOT NULL,
  `match_id` int(20) NOT NULL,
  `man_of_the_match` varchar(250) DEFAULT NULL,
  `umpire` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match_data`
--

INSERT INTO `match_data` (`event_id`, `vanue_id`, `match_date`, `match_id`, `man_of_the_match`, `umpire`) VALUES
(11321, 'dk_02', '2013-01-01', 31, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_sch`
--

CREATE TABLE `payment_sch` (
  `serial_num1` int(20) DEFAULT NULL,
  `serial_num2` int(20) DEFAULT NULL,
  `serial_num3` int(20) DEFAULT NULL,
  `due_date1` date DEFAULT NULL,
  `due_date2` date DEFAULT NULL,
  `due_date3` date DEFAULT NULL,
  `payment_date1` date DEFAULT NULL,
  `payment_date2` date DEFAULT NULL,
  `payment_date3` date DEFAULT NULL,
  `amount1` int(40) DEFAULT NULL,
  `amount2` int(40) DEFAULT NULL,
  `amount3` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_sch`
--

INSERT INTO `payment_sch` (`serial_num1`, `serial_num2`, `serial_num3`, `due_date1`, `due_date2`, `due_date3`, `payment_date1`, `payment_date2`, `payment_date3`, `amount1`, `amount2`, `amount3`) VALUES
(1, 2, 3, '2018-08-01', '2018-08-03', '2018-08-05', '2018-08-02', '2018-08-04', '2018-08-06', 10000, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `player_data1`
--

CREATE TABLE `player_data1` (
  `player_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `present_address` varchar(300) DEFAULT NULL,
  `parmanent_address` varchar(300) DEFAULT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_data1`
--

INSERT INTO `player_data1` (`player_id`, `first_name`, `mid_name`, `last_name`, `father_name`, `mother_name`, `present_address`, `parmanent_address`, `date_of_birth`) VALUES
(11321, 'sumon', '', 'shahed', 'father', 'mother', 'House no: 11Location: baddaVillage/Street: thana roadThana: vataraDistrict: dhakaPost Code: 1212', 'House no:111Location:baddaVillage/Street:thana roadThana:vataraDistrict:dhakaPost Code:1212', '1997-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `player_edu`
--

CREATE TABLE `player_edu` (
  `player_id` int(20) NOT NULL,
  `deg_name` varchar(20) NOT NULL,
  `institute_dept` varchar(200) NOT NULL,
  `board_university` varchar(200) NOT NULL,
  `year` int(4) NOT NULL,
  `result` varchar(15) NOT NULL,
  `membership` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_edu`
--

INSERT INTO `player_edu` (`player_id`, `deg_name`, `institute_dept`, `board_university`, `year`, `result`, `membership`) VALUES
(11321, 'UG', 'ECE', 'NSU', 2020, 'studying', 'ICCB');

-- --------------------------------------------------------

--
-- Table structure for table `player_history`
--

CREATE TABLE `player_history` (
  `player_id` int(20) NOT NULL,
  `club_name` varchar(250) NOT NULL,
  `start_day` date DEFAULT NULL,
  `end_day` date DEFAULT NULL,
  `total_run` int(10) DEFAULT NULL,
  `total_wickets` int(10) DEFAULT NULL,
  `team_leader` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_history`
--

INSERT INTO `player_history` (`player_id`, `club_name`, `start_day`, `end_day`, `total_run`, `total_wickets`, `team_leader`) VALUES
(11321, 'independent', '2015-01-01', '2015-10-10', 100, 5, 'team_');

-- --------------------------------------------------------

--
-- Table structure for table `player_perform`
--

CREATE TABLE `player_perform` (
  `player_id` int(10) NOT NULL,
  `club_name2` varchar(150) NOT NULL,
  `oppo_club` varchar(150) NOT NULL,
  `event_id` int(20) NOT NULL,
  `match_id` int(20) NOT NULL,
  `run` int(10) DEFAULT NULL,
  `wicket` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_perform`
--

INSERT INTO `player_perform` (`player_id`, `club_name2`, `oppo_club`, `event_id`, `match_id`, `run`, `wicket`) VALUES
(11321, 'independent ', 'maxwar', 55, 3, 59, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pl_perform`
--

CREATE TABLE `pl_perform` (
  `match_id` int(20) NOT NULL,
  `vanue_id` varchar(20) NOT NULL,
  `match_date` date NOT NULL,
  `player_id_a1` int(20) DEFAULT NULL,
  `player_id_a2` int(20) DEFAULT NULL,
  `player_id_b1` int(20) DEFAULT NULL,
  `player_id_b2` int(20) DEFAULT NULL,
  `tot_wic_a1` int(20) DEFAULT NULL,
  `tot_wic_a2` int(20) DEFAULT NULL,
  `tot_wic_b1` int(20) DEFAULT NULL,
  `tot_wic_b2` int(20) DEFAULT NULL,
  `tot_run_a1` int(20) DEFAULT NULL,
  `tot_run_a2` int(20) DEFAULT NULL,
  `tot_run_b1` int(20) DEFAULT NULL,
  `tot_run_b2` int(20) DEFAULT NULL,
  `perform_pt_a1` int(2) DEFAULT NULL,
  `perform_pt_a2` int(2) DEFAULT NULL,
  `perform_pt_b1` int(2) DEFAULT NULL,
  `perform_pt_b2` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl_perform`
--

INSERT INTO `pl_perform` (`match_id`, `vanue_id`, `match_date`, `player_id_a1`, `player_id_a2`, `player_id_b1`, `player_id_b2`, `tot_wic_a1`, `tot_wic_a2`, `tot_wic_b1`, `tot_wic_b2`, `tot_run_a1`, `tot_run_a2`, `tot_run_b1`, `tot_run_b2`, `perform_pt_a1`, `perform_pt_a2`, `perform_pt_b1`, `perform_pt_b2`) VALUES
(11321, 'dh_mrpr1', '2016-01-01', 1, 9, 5, 9, 6, 8, 65, 8, 3, 5, 4, 65, 1, 3, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `team_data`
--

CREATE TABLE `team_data` (
  `club_id` int(20) NOT NULL,
  `team_id` int(20) NOT NULL,
  `formation_date` date NOT NULL,
  `event_id` int(20) NOT NULL,
  `leader_id` int(20) NOT NULL,
  `leader_name` varchar(250) DEFAULT NULL,
  `coach_id` int(20) DEFAULT NULL,
  `coach_name` varchar(250) DEFAULT NULL,
  `player_id` int(20) DEFAULT NULL,
  `player_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_data`
--

INSERT INTO `team_data` (`club_id`, `team_id`, `formation_date`, `event_id`, `leader_id`, `leader_name`, `coach_id`, `coach_name`, `player_id`, `player_name`) VALUES
(11321, 11321, '2014-01-01', 11321, 11321, '', 0, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match_data`
--
ALTER TABLE `match_data`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `player_data1`
--
ALTER TABLE `player_data1`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_edu`
--
ALTER TABLE `player_edu`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_history`
--
ALTER TABLE `player_history`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_perform`
--
ALTER TABLE `player_perform`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `pl_perform`
--
ALTER TABLE `pl_perform`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `team_data`
--
ALTER TABLE `team_data`
  ADD PRIMARY KEY (`team_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
