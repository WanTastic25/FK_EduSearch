-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 08:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fk_edusearch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alluser`
--

CREATE TABLE `alluser` (
  `userID` varchar(50) NOT NULL,
  `userPass` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userAge` int(11) NOT NULL,
  `userSocialMedia` varchar(200) NOT NULL,
  `userAcademic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alluser`
--

INSERT INTO `alluser` (`userID`, `userPass`, `userType`, `userName`, `userAge`, `userSocialMedia`, `userAcademic`) VALUES
('AD001', 'admin1', 'admin', 'ENCIK MOHAMAD AZFAR BIN MAHMUD', 45, 'facebook : Azfar', 'Postgraduate Bachelor of Computing (Computer Science)'),
('EXP001', 'expert1', 'expert', 'Professor Dr Md. Maksudur Rahman Khan', 54, 'facebook : Maksudur Rahman', 'Doctor of Philasophy (Computer Science)'),
('EXP002', 'expert2', 'expert', 'Professor Ts Dr Kamal Zuhairi Zaml', 57, 'facebook : Kamal Zuhairi', 'PhD in Computing'),
('EXP003', 'expert3', 'expert', 'Associate Professor Ts Dr Mohd Ashraf Ahmad', 58, 'facebook : Ahraff Ahmad', 'Doctor of Philosophy (Computing)'),
('STD001', 'student1', 'general', 'MOHAMAD AKIF HAIKAL BIN ZAINUDDIN', 29, 'instagram : akif.zainuddin', 'Undergraduate Bachelor of Computer Science (Graphics and Multimedia)'),
('STD002', 'student2', 'general', 'AHMAD BADRUL HISHAM BIN MOHAMAD', 22, 'instagram : badrul_hisham', 'Undergraduate Bachelor of Computer Science (Software Engineering)');

-- --------------------------------------------------------

--
-- Table structure for table `generaluserreport`
--

CREATE TABLE `generaluserreport` (
  `UserActivityID` varchar(355) NOT NULL,
  `listDate` date NOT NULL,
  `engagementRate` float NOT NULL,
  `Total_Post` int(11) NOT NULL,
  `Total_Like` int(50) NOT NULL,
  `Total_Comment` int(50) NOT NULL,
  `retentionRate` float NOT NULL,
  `UserSatisfaction` text NOT NULL,
  `KeyPerformance` float NOT NULL,
  `vulnerabilityContent` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generaluserreport`
--

INSERT INTO `generaluserreport` (`UserActivityID`, `listDate`, `engagementRate`, `Total_Post`, `Total_Like`, `Total_Comment`, `retentionRate`, `UserSatisfaction`, `KeyPerformance`, `vulnerabilityContent`, `status`) VALUES
('RPT001', '2023-04-19', 0.24, 150, 400, 250, 0.46, 'Good', 73.6, 'Sensitive contents', 'Resolved'),
('RPT002', '2023-02-10', 0.71, 140, 300, 150, 0.9, 'Excellent', 89.3, 'None', 'In Investigation');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionID` int(11) NOT NULL,
  `question_tittle` varchar(100) NOT NULL,
  `question_category` varchar(100) NOT NULL,
  `question_desc` varchar(250) NOT NULL,
  `question_expert` varchar(50) NOT NULL,
  `question_answer` varchar(250) NOT NULL,
  `question_status` varchar(200) NOT NULL,
  `question_userID` varchar(50) NOT NULL,
  `question_postdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionID`, `question_tittle`, `question_category`, `question_desc`, `question_expert`, `question_answer`, `question_status`, `question_userID`, `question_postdate`) VALUES
(1, 'CSS ASSIGNATION', 'Software Engineering', 'HOW TO ASSIGN CSS INTERNALLY TO HTML CODING', 'EXP002', '', 'ACCEPTED', 'STD001', '2023-06-21'),
(2, 'PHP EXTENSION', 'Software Engineering', 'WHAT IS THE BEST EXTENSION IN VSCODE FOR PHP CODING', 'EXP003', '', 'ACCEPTED', 'STD001', '2023-06-18'),
(3, 'MAYA INSTALLATION', 'Computer Graphic', 'BEST WAYS OF INSTALLING MAYA WITHOUT THIRD PARTY WEBSITE', 'EXP003', '', 'ACCEPTED', 'STD002', '2023-06-20'),
(4, 'CYBER SAFETY', 'Cybersecurity', 'HOW TO CREATE ENCRYPTED PASSWORD', 'EXP003', '', 'ACCEPTED', 'STD002', '2023-06-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alluser`
--
ALTER TABLE `alluser`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `generaluserreport`
--
ALTER TABLE `generaluserreport`
  ADD PRIMARY KEY (`UserActivityID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
