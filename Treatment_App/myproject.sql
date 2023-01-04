-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 07:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `id` int(5) NOT NULL,
  `doctor_id` varchar(5) NOT NULL,
  `paicent_id` varchar(5) NOT NULL,
  `disease_name` varchar(20) NOT NULL,
  `appointment_datetime` datetime NOT NULL,
  `last_appointment_datetime` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`id`, `doctor_id`, `paicent_id`, `disease_name`, `appointment_datetime`, `last_appointment_datetime`, `status`) VALUES
(11101, 'D1101', 'P1101', 'Maleria', '2022-12-23 15:52:06', '2022-12-07 06:52:07', 'pending'),
(11102, 'D1102', 'P1102', 'flue', '2022-12-11 06:52:07', '2022-12-23 15:52:06', 'pending'),
(11103, 'D1103', 'P1103', 'Fyleria', '2022-12-15 06:53:40', '2022-12-24 06:53:40', 'processing'),
(11104, 'D1104', 'P1104', 'corona', '2022-12-05 12:53:40', '2022-12-24 06:53:40', 'traeatment_complete'),
(11105, 'D1105', 'P1105', 'swine_fle', '2022-12-16 08:55:23', '2022-12-25 06:55:23', 'hold'),
(11106, 'D1106', 'P1106', 'fever', '2022-12-13 10:55:23', '2022-12-24 06:55:23', 'hold'),
(11107, 'D1107', 'P1107', 'AIDS', '2022-12-05 09:12:45', '2022-12-01 12:12:45', 'active'),
(11108, 'D1105', 'P1105', 'Asthma', '2022-12-16 08:55:23', '2022-12-25 06:55:23', 'active'),
(11109, 'D1102', 'P1104', 'Cholera', '2022-12-16 08:55:23', '2022-12-25 06:55:23', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(5) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contect_no` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `adhar_no` bigint(12) NOT NULL,
  `pan_no` varchar(8) NOT NULL,
  `joining_data` date NOT NULL,
  `specility_id` varchar(5) NOT NULL,
  `visit_time_from` time NOT NULL,
  `visit_time_to` time NOT NULL,
  `craeted_data` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fullname`, `email`, `contect_no`, `address`, `adhar_no`, `pan_no`, `joining_data`, `specility_id`, `visit_time_from`, `visit_time_to`, `craeted_data`, `username`, `password`, `status`) VALUES
('D1101', 'salmaan khan', 'salmaan@gmail.com', 6698745213, 'bhayhagoan', 936285147025, 'BHG255A8', '2022-10-12', 'S1101', '10:34:36', '11:00:32', '2022-12-20', 'salmaan', 'salmaan@23', 'active'),
('D1102', 'akashay kumar', 'akashay@gamil.com', 7799665588, 'gondiya', 987354621056, 'NDH9885F', '2022-09-05', 'S1102', '12:34:36', '01:00:25', '2022-09-14', 'akashay', 'akashay@12', 'inactive'),
('D1103', 'sahrukh khan', 'sahrukh@gmail.com', 8866552244, 'mumbai', 987365214087, 'JY5L5KK8', '2022-07-05', 'S1103', '01:44:56', '02:00:10', '2022-07-08', 'sahrukh', 'sahrkh@123', 'active'),
('D1104', 'amitesh jha', 'amitesh@gmail.com', 9876541230, 'bilaspur', 876925871402, 'NJ2F55G', '2022-06-10', 'S1104', '03:44:56', '04:10:00', '2022-06-10', 'amitesh', 'amitesh@12', 'active'),
('D1105', 'sonu kumar', 'sonu@gmail.com', 9874563210, 'ambikapur', 693258714021, 'K254FG2', '2022-04-05', 'S1101', '06:50:38', '07:05:00', '2022-04-14', 'sonu', 'sonu@123', 'active'),
('D1106', 'vikram singh', 'vikram@gmail.com', 9658743210, 'south afrika', 659874321025, 'MK6KJ88L', '2022-09-20', 'S1102', '05:50:38', '06:00:00', '2022-09-20', 'vikram', 'vikram@123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `create_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fullname`, `username`, `password`, `create_time`) VALUES
(12345, 'khileshar kumar', 'khilesh', 'Khilesh#123', '2022-12-23 07:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `paicent`
--

CREATE TABLE `paicent` (
  `id` varchar(5) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `contect_no` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `adhar_no` bigint(12) NOT NULL,
  `pan_no` varchar(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paicent`
--

INSERT INTO `paicent` (`id`, `fullname`, `contect_no`, `address`, `adhar_no`, `pan_no`, `username`, `password`, `status`) VALUES
('P1101', 'vasant sahu', 9898501535, 'abhanpur raipur', 789456123012, 'NSZP25F8', 'vasant', 'vasant@123', 'active'),
('P1102', 'durgesh kumar', 9977254212, 'kurud dhamtari', 326514987125, 'BSH125S8', 'durgesh', 'durgesh@12', 'inactive'),
('P1103', 'gamesh', 7770254578, 'telibandha raipur', 377469857298, 'GYT2587F', 'gamesh', 'gamesh@123', 'active'),
('P1104', 'mohan rathore', 889772588, 'patan durg', 789635254101, 'HJU597K9', 'mohan', 'mohan@123', 'inactive'),
('P1105', 'kiran singh', 9988776655, 'siltara raipur', 987654123654, 'ASD257L2', 'kiran', 'kiran@123', 'active'),
('P1106', 'bhola ram sen', 9098120108, 'aarang raipur', 258963147012, 'BHT486K5', 'bhola', 'bhola@123', 'inactive'),
('P1107', 'gourav roy', 9876543210, 'mohba bazar', 987654321025, 'NHG23M2R', 'gourav', 'gourav#123', 'active'),
('P1108', 'gourav', 9876543211, 'raipur', 987654321026, 'NHG23M2J', 'gouraw', 'gouraw@123', 'inactive'),
('P1109', 'monu', 9873652140, 'mumbai', 963258741089, 'JFK258F2', 'monu', 'monu@123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `schema`
--

CREATE TABLE `schema` (
  `id` varchar(5) NOT NULL,
  `title` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schema`
--

INSERT INTO `schema` (`id`, `title`, `status`) VALUES
('S1101', 'viral_infection', 'active'),
('S1102', 'allergy', 'active'),
('S1103', 'genetics', 'inacive'),
('S1104', 'medicine', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `adhar_no` (`adhar_no`),
  ADD UNIQUE KEY `pan_no` (`pan_no`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contect_no` (`contect_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `paicent`
--
ALTER TABLE `paicent`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `adhar_no` (`adhar_no`),
  ADD UNIQUE KEY `pan_no` (`pan_no`),
  ADD UNIQUE KEY `contect_no` (`contect_no`);

--
-- Indexes for table `schema`
--
ALTER TABLE `schema`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
