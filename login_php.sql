-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 11:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `full_name`, `age`, `email`, `gender`, `course`) VALUES
(2, 'S2025-0154', 'Carrie Garrison', 25, 'carrie.garrison@university.edu', 'Female', 'BS Electronics Engineering'),
(3, 'S2025-0155', 'Jesse Kane', 18, 'jesse.kane@university.edu', 'Male', 'BS Electronics Engineering'),
(4, 'S2025-0156', 'Mrs. Cheryl Soto', 25, 'mrs..cheryl.soto@university.edu', 'Female', 'BS Electronics Engineering'),
(5, 'S2025-0157', 'Michelle Barnes', 23, 'michelle.barnes@university.edu', 'Female', 'BS Electronics Engineering'),
(6, 'S2025-0158', 'Janet Ward', 21, 'janet.ward@university.edu', 'Female', 'BS Electronics Engineering'),
(7, 'S2025-0159', 'Sherry Robinson', 22, 'sherry.robinson@university.edu', 'Female', 'BS Electronics Engineering'),
(8, 'S2025-0160', 'Amy Gallagher', 18, 'amy.gallagher@university.edu', 'Female', 'BS Electronics Engineering'),
(9, 'S2025-0161', 'Jodi Zhang', 19, 'jodi.zhang@university.edu', 'Female', 'BS Electronics Engineering'),
(10, 'S2025-0162', 'Angela Chapman', 18, 'angela.chapman@university.edu', 'Female', 'BS Electronics Engineering'),
(12, 'S2025-0164', 'Stephanie Lambert', 23, 'stephanie.lambert@university.edu', 'Female', 'BS Electronics Engineering'),
(13, 'S2025-0165', 'Brandi Hernandez', 25, 'brandi.hernandez@university.edu', 'Female', 'BS Electronics Engineering'),
(14, 'S2025-0166', 'Andrew Diaz MD', 24, 'andrew.diaz.md@university.edu', 'Male', 'BS Electronics Engineering'),
(15, 'S2025-0167', 'Colleen Smith', 24, 'colleen.smith@university.edu', 'Female', 'BS Electronics Engineering'),
(16, 'S2025-0168', 'Molly Burns', 23, 'molly.burns@university.edu', 'Female', 'BS Electronics Engineering'),
(17, 'S2025-0169', 'Michael Woodard', 20, 'michael.woodard@university.edu', 'Male', 'BS Electronics Engineering'),
(18, 'S2025-0170', 'Sara Morgan', 17, 'sara.morgan@university.edu', 'Female', 'BS Electronics Engineering'),
(19, 'S2025-0171', 'Melanie Perry', 19, 'melanie.perry@university.edu', 'Female', 'BS Electronics Engineering'),
(20, 'S2025-0172', 'Denise Robinson', 19, 'denise.robinson@university.edu', 'Female', 'BS Electronics Engineering'),
(21, 'S2025-0173', 'Catherine Brady', 21, 'catherine.brady@university.edu', 'Female', 'BS Electronics Engineering'),
(22, 'S2025-0174', 'Anthony Lee', 17, 'anthony.lee@university.edu', 'Male', 'BS Electronics Engineering'),
(23, 'S2025-0175', 'Kristen Hurst', 18, 'kristen.hurst@university.edu', 'Female', 'BS Electronics Engineering'),
(24, 'S2025-0176', 'Tom Osborn', 22, 'tom.osborn@university.edu', 'Male', 'BS Electronics Engineering'),
(25, 'S2025-0177', 'Garrett Mendoza', 18, 'garrett.mendoza@university.edu', 'Male', 'BS Electronics Engineering'),
(26, 'S2025-0178', 'Jeremy Peters', 25, 'jeremy.peters@university.edu', 'Male', 'BS Electronics Engineering'),
(27, 'S2025-0179', 'David Williamson', 24, 'david.williamson@university.edu', 'Male', 'BS Electronics Engineering'),
(28, 'S2025-0180', 'Kristie Hunter', 20, 'kristie.hunter@university.edu', 'Female', 'BS Electronics Engineering'),
(29, 'S2025-0181', 'Wesley Murray', 19, 'wesley.murray@university.edu', 'Male', 'BS Electronics Engineering'),
(30, 'S2025-0182', 'Edward Olsen', 19, 'edward.olsen@university.edu', 'Male', 'BS Electronics Engineering'),
(31, 'S2025-0183', 'Kayla Smith', 22, 'kayla.smith@university.edu', 'Female', 'BS Electronics Engineering'),
(32, 'S2025-0184', 'Mrs. Dana Bryan DVM', 23, 'mrs..dana.bryan.dvm@university.edu', 'Female', 'BS Electronics Engineering'),
(33, 'S2025-0185', 'Caitlyn Kelly', 20, 'caitlyn.kelly@university.edu', 'Female', 'BS Electronics Engineering'),
(34, 'S2025-0186', 'Heather Chavez', 24, 'heather.chavez@university.edu', 'Female', 'BS Electronics Engineering'),
(35, 'S2025-0187', 'Angela Parsons', 18, 'angela.parsons@university.edu', 'Female', 'BS Electronics Engineering'),
(36, 'S2025-0188', 'Timothy Harris', 24, 'timothy.harris@university.edu', 'Male', 'BS Electronics Engineering'),
(37, 'S2025-0189', 'Michael Dawson', 17, 'michael.dawson@university.edu', 'Male', 'BS Electronics Engineering'),
(38, 'S2025-0190', 'Dennis Whitaker', 18, 'dennis.whitaker@university.edu', 'Male', 'BS Electronics Engineering'),
(39, 'S2025-0191', 'Ruben Kim', 22, 'ruben.kim@university.edu', 'Male', 'BS Electronics Engineering'),
(40, 'S2025-0192', 'Mrs. Kristy Kelly', 19, 'mrs..kristy.kelly@university.edu', 'Female', 'BS Electronics Engineering'),
(41, 'S2025-0193', 'Laura Barrett', 18, 'laura.barrett@university.edu', 'Female', 'BS Electronics Engineering'),
(42, 'S2025-0194', 'Michele Stevens', 23, 'michele.stevens@university.edu', 'Female', 'BS Electronics Engineering'),
(43, 'S2025-0195', 'Monica Moore', 23, 'monica.moore@university.edu', 'Female', 'BS Electronics Engineering'),
(44, 'S2025-0196', 'Zachary Jackson', 22, 'zachary.jackson@university.edu', 'Male', 'BS Electronics Engineering'),
(45, 'S2025-0197', 'Monica Young', 17, 'monica.young@university.edu', 'Female', 'BS Electronics Engineering'),
(46, 'S2025-0198', 'Jill Perry', 24, 'jill.perry@university.edu', 'Female', 'BS Electronics Engineering'),
(47, 'S2025-0199', 'Ashley Mays', 20, 'ashley.mays@university.edu', 'Female', 'BS Electronics Engineering'),
(48, 'S2025-0200', 'David Hopkins', 19, 'david.hopkins@university.edu', 'Male', 'BS Electronics Engineering'),
(49, 'S2025-0201', 'Ashley Christensen', 23, 'ashley.christensen@university.edu', 'Female', 'BS Electronics Engineering'),
(50, 'S2025-0202', 'Steven Jimenez', 19, 'steven.jimenez@university.edu', 'Male', 'BS Electronics Engineering'),
(51, 'S2025-0203', 'Melissa Finley', 18, 'melissa.finley@university.edu', 'Female', 'BS Electronics Engineering'),
(52, 'S2025-0204', 'Tracy Crawford', 19, 'tracy.crawford@university.edu', 'Female', 'BS Electronics Engineering'),
(53, 'S2025-0205', 'Regina Gutierrez', 23, 'regina.gutierrez@university.edu', 'Female', 'BS Electronics Engineering'),
(54, 'S2025-0206', 'Andrew Williams', 25, 'andrew.williams@university.edu', 'Male', 'BS Electronics Engineering'),
(55, 'S2025-0207', 'Alyssa Rowe', 23, 'alyssa.rowe@university.edu', 'Female', 'BS Electronics Engineering'),
(56, 'S2025-0208', 'Harry Olsen', 25, 'harry.olsen@university.edu', 'Male', 'BS Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email_address`) VALUES
(11, 'mjpogi20', 'f6ee94ecb014f74f887b9dcc52daecf73ab3e3333320cadd98bcb59d895c52f5', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
