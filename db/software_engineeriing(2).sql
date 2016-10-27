-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2015 at 10:20 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `software_engineeriing`
--
CREATE DATABASE IF NOT EXISTS `software_engineeriing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `software_engineeriing`;

-- --------------------------------------------------------

--
-- Table structure for table `cardiology`
--

CREATE TABLE IF NOT EXISTS `cardiology` (
  `name` varchar(70) NOT NULL,
  `id` varchar(40) NOT NULL,
  `Qualification` text NOT NULL,
  `GeneralDescription` text NOT NULL,
  `AvailableSlot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardiology`
--

INSERT INTO `cardiology` (`name`, `id`, `Qualification`, `GeneralDescription`, `AvailableSlot`) VALUES
('Dr. Raja beta', '789', 'nai', 'valo na', '2am-3am,4am-5am'),
('Dr. Adnan mia', '632', 'jani na', 'actually temon vlo na', '5am-6am'),
('Dr. Raja beta', '789', 'nai', 'valo na', '2am-3am,4am-5am'),
('Dr. Adnan mia', '632', 'jani na', 'actually temon vlo na', '5am-6am'),
('Dr. Raja beta', '789', 'nai', 'valo na', '2am-3am,4am-5am'),
('Dr. Adnan mia', '632', 'jani na', 'actually temon vlo na', '5am-6am');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `hospital_id`, `department_name`) VALUES
(1, 1, 'Orthopaedic'),
(2, 1, 'Sleep & Respiratory Medicine'),
(3, 1, 'Physical Medicine'),
(3, 1, 'Physical Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `doctor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `hospital_id`, `department_id`, `doctor_name`) VALUES
(1, 1, 1, 'Dr. Abu Jafar Chowdhury'),
(2, 1, 2, 'Professor Dr. AKM Mosharraf Hossain'),
(3, 1, 3, 'Dr. AKM Salekr');

-- --------------------------------------------------------

--
-- Table structure for table `gulshan_hospitals`
--

CREATE TABLE IF NOT EXISTS `gulshan_hospitals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gulshan_hospitals`
--

INSERT INTO `gulshan_hospitals` (`id`, `name`, `location`) VALUES
(1, 'United Hospitals Limited', 'Gulshan-2-Dhaka -Bangladesh '),
(2, 'Labaid Specialized Hospital', 'Gulshan-2; Dhaka-Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `highestvisited_doc`
--

CREATE TABLE IF NOT EXISTS `highestvisited_doc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(300) NOT NULL,
  `visitedtimes` int(10) NOT NULL,
  `visit` int(10) NOT NULL,
  `slots` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roomnumber` int(11) NOT NULL,
  `serial` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `highestvisited_doc`
--

INSERT INTO `highestvisited_doc` (`id`, `doc_name`, `visitedtimes`, `visit`, `slots`, `name`, `roomnumber`, `serial`) VALUES
(1, 'Dr. Adnan Khan-MBBS, FCPS, FRCS-MD Chest \r\nAssociate Professor -Dhaka Medical College Hospitals-Dhaka -Bangladesh', 100, 1000, 'Slots:6.00-9.00 pm', '3', 502, 2),
(2, 'Dr.Sharif Ahmmad Raja-MBBS,FRCS, Fellow [WHO]-Professor Medicine Department- Armed Forces Medical College- Dhaka', 110, 500, 'Slots: 6.00-9.00 pm', '2', 503, 3),
(3, 'Dr. Naushad Karim, MBBS,FCPS,MD Specialized in Medicine. Associate Professor -Dahaka Medical College', 80, 500, ' Slots: 5.00-9.00 pm', '1', 501, 1),
(4, 'Dr. Sajib Rahman-MBBS ,FCPS,MD Sir Salimullah Medical College and Hospitals', 1000, 1010, 'Slots: 8.0-10.0 pm', '5', 505, 5),
(5, 'Dr.Rafiuddin Ahmed Rofi-MBBS, FCPS, FRCS,Fellow Who-Professor and Head of the Department -Armed Forces Medical COllege', 500, 1200, '5.00-10.00 pm', '4', 504, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `hospital_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `location_id`, `hospital_name`) VALUES
(1, 1, 'Labaid Hospital'),
(2, 2, 'Ayesha Abed Memorial Hospital'),
(3, 3, 'United Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
(1, 'Dhanmondi'),
(2, 'Mohakhali'),
(3, 'Gulshan');

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE IF NOT EXISTS `login_form` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `middlename`, `address`, `email`, `contact_no`, `age`, `gender`, `username`, `password`) VALUES
(1, 'stephanie', 'villanueva', 'batoonq', 'Saraviaq', 'tephvillanueva.jk@gmail.comq', '0946651154', 18, 'Male', 'teph', 'teph'),
(7, 'john kevin', 'lorayna', '', 'bago city', 'jkevlorayna@gmail.com', '09466651154', 19, 'Male', 'q', 'q'),
(8, 'testg', 'fasfsg', '', 'bagdahsd', 'kevin_lorayna@yahoo.com', '31289417', 12, 'Female', 'test', 'qwerty'),
(9, 'jessica', 'bela-ong', '', 'bbasf', 'kasfasfas@yahoo.com', '311fasf', 19, 'Female', 'jessica', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `mohakali_hospitals`
--

CREATE TABLE IF NOT EXISTS `mohakali_hospitals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `location` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mohakhali_hospitals`
--

CREATE TABLE IF NOT EXISTS `mohakhali_hospitals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `hosid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mohakhali_hospitals`
--

INSERT INTO `mohakhali_hospitals` (`id`, `name`, `location`, `hosid`) VALUES
(1, 'Institute of Cancer Research Hospitals', 'TB Gate Rd, Mohakhali Dhaka-1212', 0),
(2, 'Aysha Memorial Hospital', 'Pea-cock Square, Dhaka, Bangladesh\r\n+880 2-8142370', 3),
(3, 'Dhaka Metropolitan Hospital', 'Mohakhali\r\nDhaka, Bangladesh', 1),
(4, 'ICDDR,B', 'Mohakhali-Dhaka 1212', 0),
(5, 'National Institute of Diseases of the Chest and Hospital', 'TB gate Road -Mohakhali-Dhaka 1212', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mohkhali`
--

CREATE TABLE IF NOT EXISTS `mohkhali` (
  `dxwed` int(11) NOT NULL,
  `dwd` int(11) NOT NULL,
  `wdwed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `neurology`
--

CREATE TABLE IF NOT EXISTS `neurology` (
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `Qualification` text NOT NULL,
  `GeneralDescription` text NOT NULL,
  `AvailableSlot` text NOT NULL,
  `Appointment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neurology`
--

INSERT INTO `neurology` (`name`, `id`, `Qualification`, `GeneralDescription`, `AvailableSlot`, `Appointment`) VALUES
('Dr. Abdul Kader sheikh', '123', 'MBBS, MD, FCPS', 'Dr. Abdul Kader sheikh MBBS, MD, FCPS Consultant of Neurology recently joined Square hospitals ltd, Dhaka as a highly skilled neurologist. He is a medical graduate from Sher-e-Bangla Medical College under Dhaka university and obtained his professional degree MD (neurology) from University of Dhaka and FCPS(Medicine) form Bangladesh College of Physicians and Surgeon. Dr. sheikh started his career as a medical officer. Then he worked as a junior consultant and after as a senior consultant (Medicine). Presently he is working as Assistant professor in Bangabandhu Sheikh Mujib Medical University, Dhaka', '04:30 PM - 04:42 PM 04:42 PM - 04:54 PM 04:54 PM - 05:6 PM 05:6 ', 'Appointment'),
('Dr. Md. Ismail Chowdhury', '564', 'MBBS, FCPS (Medicine), MD (Neurology)', 'Dr. Md. Ismail Chowdhury MBBS, FCPS (Medicine), MD Neurology advanced training-in-Neurology from Ankara, Turkey, joins Square Hospital as Consultant- Neurologist (Part time) Dr. Chowdhury graduated from Dhaka Medical College in 1992. He then trained in the field of medicine and obtained FCPS (Medicine) in 2004. Subsequently he enrolled in MD (Neurology) course in BSMMU and successfully achieved his MD (Neurology) degree in 2007. In his long carrier he served in different Medical Colleges & Hospitals across the country and held some vital positions for last several years', '04:45 PM - 05:00 PM 05:00 PM - 05:15 PM 05:15 ', 'Appointment'),
('Dr. Abdul Kader sheikh', '123', 'MBBS, MD, FCPS', 'Dr. Abdul Kader sheikh MBBS, MD, FCPS Consultant of Neurology recently joined Square hospitals ltd, Dhaka as a highly skilled neurologist. He is a medical graduate from Sher-e-Bangla Medical College under Dhaka university and obtained his professional degree MD (neurology) from University of Dhaka and FCPS(Medicine) form Bangladesh College of Physicians and Surgeon. Dr. sheikh started his career as a medical officer. Then he worked as a junior consultant and after as a senior consultant (Medicine). Presently he is working as Assistant professor in Bangabandhu Sheikh Mujib Medical University, Dhaka', '04:30 PM - 04:42 PM 04:42 PM - 04:54 PM 04:54 PM - 05:6 PM 05:6 ', 'Appointment'),
('Dr. Md. Ismail Chowdhury', '564', 'MBBS, FCPS (Medicine), MD (Neurology)', 'Dr. Md. Ismail Chowdhury MBBS, FCPS (Medicine), MD Neurology advanced training-in-Neurology from Ankara, Turkey, joins Square Hospital as Consultant- Neurologist (Part time) Dr. Chowdhury graduated from Dhaka Medical College in 1992. He then trained in the field of medicine and obtained FCPS (Medicine) in 2004. Subsequently he enrolled in MD (Neurology) course in BSMMU and successfully achieved his MD (Neurology) degree in 2007. In his long carrier he served in different Medical Colleges & Hospitals across the country and held some vital positions for last several years', '04:45 PM - 05:00 PM 05:00 PM - 05:15 PM 05:15 ', 'Appointment');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `date`, `message`) VALUES
(6, '', 'Doc terry will be  out on august 3 2013');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `gender`, `occupation`, `mobile`, `address`) VALUES
(0, '', 0, '', '', 0, ''),
(1, 'adman', 12, 'male', 'developer', 123, '2qwdwedwe'),
(2, 'sahrif', 123, 'shemale', 'mas bikreta', 123445, 'decer'),
(16, 'wsqw', 0, 'sXWd', 'wWED', 0, 'wswed'),
(34, 'DDW', 0, 'DDFW', 'sdsd', 0, 'Ad'),
(45, 'adnan', 12, 'male', 'engineer', 123456789, 'adnan morshed \r\ntaile\r\ngoru'),
(56, 'qqw', 123, '1w2w2q', 'e', 2, 'wedwe'),
(58, 'sdbawejdasndxws', 12, 'sdd', 'scsd', 0, 'asddcs'),
(90, 'adnan', 12345, 'male', 'engineer', 1711387334, 'mohakhali');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE IF NOT EXISTS `patient_record` (
  `patientId` bigint(10) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `doctorSuppervision` varchar(100) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `diagonosticReport` varchar(500) NOT NULL,
  `numerofvisiting` int(5) NOT NULL,
  `totalmoneyspent` bigint(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `datesofvisiting` date NOT NULL,
  UNIQUE KEY `patientId` (`patientId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(10) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `instructions` varchar(50) NOT NULL,
  `doc_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `medicine`, `diagnosis`, `instructions`, `doc_name`) VALUES
(0, 'viagra', '', '', 'adnan'),
(12, 'dsaqdad', 'dasds', 'dedwdqe', 'adnan'),
(1245, 'SQSWD', 'SW2WD', 'QDW2ED', 'adnan');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE IF NOT EXISTS `registration_form` (
  `user_id` bigint(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `member_id`, `date`, `service_id`, `Number`, `status`) VALUES
(76, 1, '11/09/2013', 1, 1, 'Done'),
(77, 1, '11/09/2013', 1, 1, 'Pending'),
(78, 1, '10/09/2013', 1, 1, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_offer` varchar(100) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_offer`, `price`) VALUES
(1, 'Cleaning', '700.00'),
(2, 'q', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_longbio` text,
  `user_facebook` varchar(255) DEFAULT NULL,
  `user_twitter` varchar(255) DEFAULT NULL,
  `user_linkedin` varchar(255) DEFAULT NULL,
  `user_stumbleupon` varchar(255) DEFAULT NULL,
  `user_pinterest` varchar(255) DEFAULT NULL,
  `user_googleplus` varchar(255) DEFAULT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profession` text,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_maritialstatus` varchar(255) DEFAULT NULL,
  `user_address` text,
  `user_backgroundpicture` varchar(255) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_skype` varchar(255) DEFAULT NULL,
  `user_github` varchar(255) DEFAULT NULL,
  `user_youtube` varchar(255) DEFAULT NULL,
  `user_vimeo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `martial_status` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `disease` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `first_name`, `last_name`, `age`, `sex`, `martial_status`, `location`, `disease`) VALUES
(1, 'adnan', 'adnan.cse13@gmail.com', '202cb962ac59075b964b07152d234b70', 'asd', 'dsa', '12', 'male', '', 'mohakhali', 'headache'),
(5, 'admin', '', 'admin', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_entry`
--

CREATE TABLE IF NOT EXISTS `users_entry` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_entry`
--

INSERT INTO `users_entry` (`username`, `password`) VALUES
('', ''),
('adnan', '123'),
('hello', '123'),
('tutul', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
