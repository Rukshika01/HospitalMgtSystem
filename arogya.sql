-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arogya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
(1, 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `available_days`
--

CREATE TABLE `available_days` (
  `available_days_id` varchar(50) NOT NULL,
  `avai_days` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_days`
--

INSERT INTO `available_days` (`available_days_id`, `avai_days`) VALUES
('w1', 'weekday'),
('w2', 'weekend');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(50) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `d_phone_no` int(50) NOT NULL,
  `available_days_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `specialist`, `d_phone_no`, `available_days_id`) VALUES
(1, 'Dr.Patrick Niranjan', 'Dermatologist', 8522, 'w1'),
(2, 'Dr.Kapil Sharma', 'Gynecologists', 9632, 'w1'),
(3, 'Dr.Devi Virat', 'Cardiologists', 7412, 'w1'),
(4, 'Dr.Sanath vijesuriya', 'Dermatologist', 7897, 'w1'),
(5, 'Dr.Tania karan', 'Radiologist', 3654, 'w2'),
(6, 'Dr.Eric Mackintoshh', 'General surgeon', 7532, 'w1'),
(7, 'Dr.Wally perera', 'Orthopedic surgeon', 1598, 'w2');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(50) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `doctor_fee` int(50) NOT NULL,
  `room_fee` int(50) NOT NULL,
  `discharge_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `patient_id`, `doctor_fee`, `room_fee`, `discharge_date`) VALUES
(2, 2, 2400, 2600, '2020-08-18'),
(3, 1, 3200, 1200, '2020-10-06'),
(4, 4, 1500, 3500, '2020-05-10'),
(5, 3, 2500, 4000, '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `staff_id` int(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`staff_id`, `password`) VALUES
(16, 'tenzo900'),
(17, 'dwayn100'),
(15, 'shiki33');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(50) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `doctor_id` int(50) NOT NULL,
  `admitted_date` date NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `alergies` varchar(50) NOT NULL,
  `family_history` varchar(50) NOT NULL,
  `surgeries` varchar(50) NOT NULL,
  `medication` varchar(50) NOT NULL,
  `wardroom_id` varchar(50) NOT NULL,
  `p_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `gender`, `age`, `address`, `phone_no`, `doctor_id`, `admitted_date`, `blood_group`, `weight`, `alergies`, `family_history`, `surgeries`, `medication`, `wardroom_id`, `p_status`) VALUES
(1, 'Ben fernando ', 'male', 20, 'marys lane', 123, 1, '2020-10-05', 'A+', '45kg', 'no', 'diabetes', 'no', 'no', 'wr1', 'discharged'),
(2, 'harry styles', 'male', 43, 'No, 22 diana street ', 345, 2, '2020-08-15', 'B-', '88kg', 'Nut allergy', 'no', 'leg surgery', 'yes', 'wr2', 'discharged'),
(3, 'jane perera', 'female', 18, 'oak island ', 564, 3, '2020-09-30', 'AB+', '50kg', 'Gluten allery', 'heart disease', 'heart surgery', 'no', 'wr4', 'discharged'),
(4, 'choco dave', 'male', 25, 'No, 134 5th lane', 896, 4, '2020-05-05', 'O-', '75kg', 'no', 'high blood preassure', 'no', 'no', 'wr8', 'discharged'),
(5, 'liana dane', 'female', 33, 'paris Lane ', 743, 5, '2020-03-22', 'B+', '90kg', 'Dust mite allergy', 'no', 'no', 'yes', 'wr10', 'admitted'),
(34, ' jojo ', ' male ', 65, ' unice street', 655, 6, '2020-02-22', 'AB-', ' 52kg', ' hdf hgt', 'diabetes', ' arm surgery', ' no', 'wr9', 'admitted'),
(43, ' hidan ', ' male ', 55, ' west pass street', 666, 7, '2020-02-22', ' A- ', ' 60kg ', ' rggr ', ' no', ' apendix surgery', ' yes', 'wr3', 'admitted'),
(47, ' kakazu ', ' male ', 20, 'gunther road', 433, 1, '2020-03-31', ' A+', ' 60kg ', ' thf ', ' heart disease', ' heart surgery ', ' yes', 'wr7', 'admitted');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`) VALUES
('R103', 'surgery roomm'),
('R23', 'ward'),
('R33', 'operation room'),
('R43', 'ER'),
('R500', 'reception'),
('R53', 'clinic'),
('R63', 'delivery'),
('R73', 'consulting'),
('R83', 'ICU'),
('R93', 'operating theatre');

-- --------------------------------------------------------

--
-- Table structure for table `room_availability`
--

CREATE TABLE `room_availability` (
  `patient_id` int(50) NOT NULL,
  `room_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_availability`
--

INSERT INTO `room_availability` (`patient_id`, `room_id`) VALUES
(2, 'R33'),
(2, 'R103'),
(47, 'R103'),
(4, 'R43'),
(34, 'R63'),
(43, 'R53'),
(1, 'R23'),
(5, 'R93'),
(3, 'R83');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `s_phone_no` int(50) NOT NULL,
  `s_gender` varchar(50) NOT NULL,
  `room_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `s_address`, `s_phone_no`, `s_gender`, `room_id`) VALUES
(1, 'zayn darwin', 'stanford street', 100, 'male', 'R23'),
(2, 'alexa den', 'lewis lane', 200, 'female', 'R33'),
(3, 'lola edward', 'eunice road', 300, 'female', 'R43'),
(4, 'rain west', 'london street', 400, 'female', 'R53'),
(5, 'pamy krate', 'classy lane', 500, 'female', 'R63'),
(6, 'Windy Kodogo ', 'sundays road', 600, 'female', 'R73'),
(7, 'Alison Smith ', 'church lane', 700, 'female', 'R83'),
(8, 'sam freddy', 'penolope street', 800, 'male', 'R93'),
(9, 'brassilia doun', 'west south street', 900, 'female', 'R103'),
(15, 'shikimaru', 'yuiggggggg', 456, 'male', 'R500'),
(16, 'tenzo yamato', 'pass road', 2000, 'male', 'R500'),
(17, 'dwayn jonson', 'meesaw street', 1000, 'male', 'R500');

-- --------------------------------------------------------

--
-- Table structure for table `ward_room`
--

CREATE TABLE `ward_room` (
  `wardroom_id` varchar(50) NOT NULL,
  `wr_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward_room`
--

INSERT INTO `ward_room` (`wardroom_id`, `wr_status`) VALUES
('wr1', 'vacant'),
('wr10', 'Occupied'),
('wr2', 'vacant'),
('wr3', 'Occupied'),
('wr4', 'vacant'),
('wr5', 'Occupied'),
('wr6', 'Occupied'),
('wr7', 'Occupied'),
('wr8', 'vacant'),
('wr9', 'Occupied');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `available_days`
--
ALTER TABLE `available_days`
  ADD PRIMARY KEY (`available_days_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `available_days_id` (`available_days_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `wardroom_id` (`wardroom_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `ward_room`
--
ALTER TABLE `ward_room`
  ADD PRIMARY KEY (`wardroom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`available_days_id`) REFERENCES `available_days` (`available_days_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`wardroom_id`) REFERENCES `ward_room` (`wardroom_id`);

--
-- Constraints for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD CONSTRAINT `room_availability_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `room_availability_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
