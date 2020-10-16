-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 10:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `easy`
--

CREATE TABLE `easy` (
  `ID` int(11) NOT NULL,
  `Question` varchar(70) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `Answer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy`
--

INSERT INTO `easy` (`ID`, `Question`, `option1`, `option2`, `option3`, `option4`, `Answer`) VALUES
(1, 'Who is PM of India?', 'Manmohan Singh', 'Soniya Gandhi', 'Narendra Modi', 'Amit Shah', 3),
(2, 'Who was the Father of India?', 'Manmohan Singh', 'Mahatama Gandhi', 'Narendra Modi', 'APJ Abdul Kalam', 2),
(3, 'Who was the First President of India?', 'Dr.Rajendra Prasad', 'Mahatama Gadhi', 'APJ Abdul kalam', 'Atal Bihari ', 1),
(4, 'Who is the Father of Indian Constitution?', 'Manmohan Singh', 'Mahatama Gandhi', 'Dr.B R Ambedkar', 'APJ Abdul Kalam', 3),
(5, 'Who was the First PM of India?', 'Jawaharlal Nehru', 'Mahatama Gadhi', 'APJ Abdul kalam', 'Atal Bihari ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hard`
--

CREATE TABLE `hard` (
  `ID` int(11) NOT NULL,
  `Question` varchar(60) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `Answer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hard`
--

INSERT INTO `hard` (`ID`, `Question`, `option1`, `option2`, `option3`, `option4`, `Answer`) VALUES
(1, 'Who was the first Man to climb Mount Everest without Oxygen?', 'Junko Tabei', 'Reinhold Messner', 'Peter habeler', 'Phu Dorji', 4),
(2, 'Who Built Jama Masjid?', 'Jahangir', 'Akbar', 'Imam bukhari', 'Shah Jahan', 4),
(3, 'Who was the First Indian scientist to won nobel prize?', 'CV Raman', 'Amartya sen', 'Hargobind khorana', 'S chandrashekar', 1),
(4, 'Who is the first Indian to win a Nobel Prize?', 'CV Raman', 'Mother Theresa', 'Rabindranath Tagore', 'Hargobind Khorana', 2),
(5, 'Who was the first Indian woman to win Miss World Title?', 'Aishwarya Rai', 'Sushmita Sen', 'Reita Faria', 'Diya Mirza', 3);

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `ID` int(11) NOT NULL,
  `Question` varchar(60) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `Answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`ID`, `Question`, `option1`, `option2`, `option3`, `option4`, `Answer`) VALUES
(1, 'Which is the most sensitive organ of our body?', 'skin', 'eyes', 'ear', 'nose', '1'),
(2, 'Giddha is the folk dance of?', 'UP', 'Assam', 'Bihar', 'Punjab', '4'),
(3, 'Which is the heavier metal among Gold and Solver?', 'Gold', 'Silver', 'Both are same', 'None', '1'),
(4, 'Who invented Computer?', 'Dennis Ritchie', 'James Gosling', 'Charles Babbage', 'James Husley', '3'),
(5, 'How many Continent are in World?', '8', '6', '9', '7', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy`
--
ALTER TABLE `easy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hard`
--
ALTER TABLE `hard`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
