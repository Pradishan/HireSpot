-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 08:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hirespot`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicationID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `companyID` int(11) DEFAULT NULL,
  `cv` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicationID`, `userID`, `jobID`, `companyID`, `cv`, `status`, `date`) VALUES
(7, 17, 46, 15, '../../upload/cvs/15_46_17_K.pradishanwebdeveloperresume.pdf.pdf', 'Accept', '2023-08-12 19:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `coverPic` varchar(255) DEFAULT NULL,
  `employee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `companyname`, `email`, `address`, `description`, `password`, `profilePic`, `coverPic`, `employee`) VALUES
(15, 'zetronex', 'zetronex@info.io', 'colombo | Sri Lanka', 'Software Solutions providers', '$2y$10$QBp6.fGeWsTuothpBj1VLOCYz1oTu5fEN.VzjM9g4Od2pDvkn66l2', '../../upload/profile/15.png', '../../upload/cover/15.jpg', 75),
(16, 'pixsmarts', 'pixsmarts@aplications.com', 'colombo | Sri Lanka', 'we are visual media solution providers anything related to pixels', '$2y$10$r4MgTTRYLYyQ8uv5KXaOdeQO67Tnusv7cxs4t9AIBe69kbAZpDBcC', '../../upload/profile/16.jpg', '../../upload/cover/16.jpg', 5),
(17, 'Flex', 'Flex@food.com', 'Badulla| Sri Lanka', 'we are providing food services through online.\r\nSpecialy for uiversity students', '$2y$10$GwQ4nJzon9ewI31PX2zwku.qyc7WvYH9ZojL8WHU8QSC0l0TJDWky', '../../upload/profile/17.png', '../../upload/cover/17.jpg', 5),
(19, 'texyto', 'texyto@info.com', 'colombo | Sri Lanka', 'web hosting SEO service providers', '$2y$10$kqkhi2rjY09UleHOQZgUReOLP16piaUHkv0gfFryi7eILE5WGphF6', '../../upload/profile/19.png', '../../upload/cover/19.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `jobcateogory` varchar(50) NOT NULL,
  `companyID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `filePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `jobTitle`, `jobcateogory`, `companyID`, `date`, `content`, `filePath`) VALUES
(46, 'Developer', 'Information Technology (IT)', 15, '2023-08-12 17:47:19', 'we need a back-end developer.\r\nwe are using react, php,bootstrap,', '../../upload/post/15_wallpaperflare.com_wallpaper.jpg.jpg'),
(47, 'Video Editor', 'Creative Arts', 16, '2023-08-12 17:52:48', 'we need AE ,PS,PR experts', '../../upload/post/16_IMG_1269.JPG.jpg'),
(48, 'Rider', 'Human Resources', 17, '2023-08-12 17:59:53', 'we need responsible part-time rider', '../../upload/post/17_flex.jpg.jpg'),
(49, 'manager', 'Finance', 19, '2023-08-12 18:08:48', 'we need experienceed manager.', '../../upload/post/19_Screenshot2023-08-12213829.png.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(75) NOT NULL,
  `education` varchar(75) NOT NULL,
  `description` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`userID`, `username`, `firstname`, `lastname`, `email`, `phoneNo`, `dateofbirth`, `address`, `education`, `description`, `about`, `password`, `profilePic`, `gender`) VALUES
(17, 'pradisharoon', 'pradishan', 'karunakaran', 'k.pradeeshan4@gmail.com', '0774057922', '2000-08-31', 'Nuwara Eliya| Sri Lanka', 'phd in computer Engeneering', 'web developer | Graphic designer | Hacker | IEEE volunteer \r\n| tech enthusiast | developer | hacker', 'As a passionate individual who thrives on staying up-to-date with the latest technologies, I am excited to pursue a career in the realm of visual design, UI/UX development, coding, and cyber security.', '$2y$10$C1NMOQLfunBrd/wFMjjvQuWdJf8TlOZoUrlGOI6kaOVy99Xn8qwqe', '../../upload/userprofile/17.jpg', 'Male'),
(18, 'pradisharoon3', 'pradishan', 'karunakaran', 'k.pradeeshan@gmail.com', '0774057922', '2023-08-25', 'Nuwara Eliya| Sri Lanka', 'sfsg', 'sdgs', 'sdgs', '$2y$10$qgCbwQYdiDMg3SCLcARhC.zaOqrNa85EWW26ipLp87yesj7JxzHlK', NULL, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payID` int(11) NOT NULL,
  `companyID` int(11) NOT NULL,
  `paymentcategory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skillId` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `skillName` varchar(50) NOT NULL,
  `skillLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skillId`, `userID`, `skillName`, `skillLevel`) VALUES
(8, 17, 'java', '75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`),
  ADD KEY `userID` (`userID`,`jobID`),
  ADD KEY `jobID` (`jobID`),
  ADD KEY `companyID` (`companyID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`),
  ADD UNIQUE KEY `companyname` (`companyname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `companyname_2` (`companyname`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `companyID` (`companyID`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payID`),
  ADD KEY `companyID` (`companyID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skillId`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `jobseeker` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`jobID`) REFERENCES `job` (`jobID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_3` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `jobseeker` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
