-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 07:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bg_id` int(100) NOT NULL,
  `bg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(1, 'O-'),
(2, 'O+'),
(3, 'A-'),
(4, 'A+'),
(5, 'B-'),
(6, 'B+'),
(7, 'AB-'),
(8, 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `mobile`, `email`, `subject`) VALUES
(8, 'thabrez', '1112223333', 'mdthabrez108@gmail.com', 'hi help me'),
(9, 'neeru', '9463958058', 'neeru.bawa@yahoo.com', 'nice website'),
(10, 'Paras Bhatia', '9888961990', 'parasbhatia08@gmail.com', 'WELL DONE');

-- --------------------------------------------------------

--
-- Table structure for table `donorregistration`
--

CREATE TABLE `donorregistration` (
  `donor_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `b_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorregistration`
--

INSERT INTO `donorregistration` (`donor_id`, `name`, `gender`, `age`, `b_id`, `email`, `pwd`, `mobile`, `address`, `pic`) VALUES
(17, 'thabrez', 'male', '18', 'A+', 'mdthabrez108@gmail.com', '4444444', '1112223333', '22/1 parthasarthy ,Agaram ,Chennai -82', '11168037_1610636085842033_904443745256932191_n.jpg'),
(18, 'neeru', 'female', '20', 'O-', 'neeru.bawa@yahoo.com', '565656', '9463958058', '031, Shop No 1/2, Coover Bldg, 1 St Parsiwada Lane, Nr Nanubhai Desai Rd, Khetwadi ,	Mumbai', '12144826_691191231017304_7118038794667291151_n.jpg'),
(19, 'Paras Bhatia', 'male', '21', 'O+', 'parasbhatia08@gmail.com', 'parasbhatia', '9888961990', '16, Opp. Ashwini Hospita, Taj Mahal Apt., Goddeo Phatak Rd., Bhayander (east),Mumbai ', '10593057_728311113906338_1063644592728298376_n.jpg'),
(20, 'sameer', 'male', '22', 'B+', 'sameer@gmail.com', 'sameer', '8954651235', '61/4, Jaiz Complex, Triplicane High Road, Triplicane,Chennai', '11899866_690854484348510_8725848025714675727_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `req_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `reqdate` date NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `name`, `gender`, `age`, `bgroup`, `reqdate`, `mobile`, `email`, `address`, `detail`) VALUES
(7, 'thabrez', 'male', '18', 'A+', '2021-07-14', '1112223333', 'mdthabrez108@gmail.com', '22/1 parthasarthy ,Agaram ,Chennai -82', 'need blood'),
(8, 'sameer', 'male', '22', 'B+', '2021-07-15', '8954651235', 'sameer@gmail.com', '61/4, Jaiz Complex, Triplicane High Road, Triplicane,Chennai', 'need blood due to blood loss in accident'),
(9, 'neeru', 'female', '20', 'O-', '2021-07-30', '9463958058', 'neeru.bawa@yahoo.com', '031, Shop No 1/2, Coover Bldg, 1 St Parsiwada Lane, Nr Nanubhai Desai Rd, Khetwadi ,	Mumbai', 'need blood for operation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `donorregistration`
--
ALTER TABLE `donorregistration`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donorregistration`
--
ALTER TABLE `donorregistration`
  MODIFY `donor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
