-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 06:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `course_name` varchar(400) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `video_name`, `course_name`, `teacher_name`, `comments`) VALUES
(1, '1- Video1.mp4', 'Web Development', 'Sushrut', 'What is HTML?'),
(2, '3- Video2.mp4', 'Python Programming', 'Sushrut', 'Python Language'),
(3, '3- Video2.mp4', 'Python Programming', 'Sushrut', 'List, Tuples'),
(4, '5- Video.mp4', 'Python Programming', 'Sushrut', 'Datatypes'),
(5, '1- Video.mp4', 'Web Development', 'Sushrut', 'First Program'),
(6, '1- Video.mp4', 'Python Programming', 'Sushrut', 'First Program'),
(7, 'M01-T01-E01.m4v', 'Android App Development', 'Varsha Verma', 'Build App'),
(8, 'M01-T06-E04.m4v', 'Data Science', 'Manthan Gharat', 'Sugenaa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `user_name`, `t_name`, `feedback`) VALUES
(2, 'ABC', '', 'great prof'),
(2, 'ABC', 'Sushrut Kuchik', 'great prof'),
(2, 'ABC', 'Sushrut Kuchik', 'Understood lectures'),
(4, 'STU', 'PQR', 'Nahi Samjha'),
(8, 'Vignesh', 'Manthan', 'Nahi Samjha');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `contact`, `email`, `password`, `user_type`) VALUES
(2, 'ABC', '9876543210', 'sushrut@gmail.com', '88e9d57b2e316c98174a8de70c6a4fd2', 'student'),
(4, 'STU', '9087654321', 'sushrutkuc17ce@student.mes.ac.in', '88e9d57b2e316c98174a8de70c6a4fd2', 'student'),
(5, 'XYZ', '9876543210', 'xyz@gmail.com', '88e9d57b2e316c98174a8de70c6a4fd2', 'student'),
(6, 'Varsha ', '8149563645', 'vermavarsha432@gmail.com', '8fa8aeaaa0f935d9b5a7780ede265fa7', 'teacher'),
(7, 'Manthan', '9876543210', 'manthan@gmail.com', '5c517357f46962a866ea63238edb7cba', 'teacher'),
(8, 'Vignesh', '9999999999', 'viggy@gmail.com', '604c73c5a1f4e7847813b503656b64e1', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
