-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2023 at 09:30 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benjamin_phiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) NOT NULL,
  `UserID` int NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `Description`, `UserID`, `Date`) VALUES
(4, 'efqfqWF', 58, '2023-09-18'),
(2, 'The sites were not very hygienic and every time I felt as if I was getting watched', 58, '2023-09-17'),
(3, 'there\'s an old man in the woods of mangochi that keeps staring at people', 58, '2023-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `pitches`
--

DROP TABLE IF EXISTS `pitches`;
CREATE TABLE IF NOT EXISTS `pitches` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Pitch_Type` varchar(70) NOT NULL,
  `Site` varchar(70) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Capacity` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pitches`
--

INSERT INTO `pitches` (`ID`, `Pitch_Type`, `Site`, `Details`, `Capacity`) VALUES
(1, 'Glamping Pitch', 'Moab', 'Spacious pitch suitable for motorhomes and RVs. Offers beautiful views of the Moab landscape.', 4),
(2, 'Family Pitch', 'Mangochi', 'Ideal for camping enthusiasts with tents. Located in the serene surroundings of Mangochi.', 10),
(3, 'Motorhome PItch', 'Mangochi', 'Another motorhome pitch in Mangochi, perfect for travelers seeking a different camping experience.', 3),
(6, 'Family Pitch', 'Moab', 'A family-friendly pitch in Moab, designed for a comfortable stay for families.', 8),
(7, 'Forest Pitch', 'Moab', 'Located within the Moab forest, this pitch offers a unique camping experience surrounded by nature.', 4),
(8, 'Group Pitch', 'Moab', 'Spacious pitch suitable for larger camping groups or gatherings in Moab.', 15),
(9, 'Glamping Pitch', 'Moab', 'For those who want a touch of luxury while camping in Moab, this pitch provides a glamping experience.', 2),
(10, 'Forest Pitch', 'Moab', 'Perfect for adventure seekers, this pitch offers easy access to outdoor activities in Moab.', 7),
(11, 'Eco-Friendly Pitch', 'Mangochi', 'A standard camping pitch in Mangochi, suitable for various camping needs.', 4),
(12, 'Waterside Pitch', 'Mangochi', 'Located by the river in Mangochi, offering a peaceful and scenic camping experience.', 1),
(13, 'Waterside Pitch', 'Mangochi', 'Camp right by the beach in Mangochi, perfect for beach lovers and water enthusiasts.', 4),
(4, 'Pet-Friendly Pitch', 'Mangochi', 'A pitch in Mangochi that welcomes pets, ensuring your furry friends can enjoy the camping trip.', 3),
(5, 'Eco-Friendly Pitch', 'Mangochi', 'An environmentally conscious pitch in Mangochi, designed with sustainability in mind.', 2),
(14, 'Forest Pitch', 'Moab', 'Another forest pitch in Moab, providing a tranquil camping experience in the midst of nature.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email_Address` (`Email_Address`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `First_Name`, `Last_Name`, `Email_Address`, `Password`) VALUES
(67, 'omega', 'ome', 'ben@mailq', '$2y$10$v5IcQXP82yhLoayJUw22I.hQjXadSMhXCM2hlzzoB1197qJDQYAoS'),
(58, 'omega', 'ome', 'bena@mail', '$2y$10$3RvlNDEJr0AWpAwW1jbdH.L.FwLxIYkpGfUmSp3Keaacqy2D1.B5y'),
(56, 'nomsa', 'grace', 'nograce@gmail', '$2y$10$r/QJqjdOdgwESJZQdm603uH7MNhb1yxX7Smmwew2jx2mOYbkZcqE2'),
(55, 'benjamin', 'chanza', 'bennn@gmail.com', '$2y$10$fmypCrrIs0qmBC5I2Hn5cOlJKg/j/635oE3701h563zIetkvprw4u'),
(54, 'omega', 'ome', 'omega@email.com', '$2y$10$htGDzIwYtSO1BCu6iMzCSeYh5Sle4dS8RueSWZSzJJD8uJlz/sbbC'),
(53, 'Benjamin', 'Phiri', 'benja@mail', '$2y$10$k3XnbRKKmgDdIdvQtcgI9OCw1v/OdYS0SeeCK3OTRv1WNC1XZ3XFu'),
(72, 'omega', 'ome', 'ben@mail2', '$2y$10$BAYLm91ttqIdb19V8MOZK.aLTY5vBBn/bhiwiFMYkXhKZt1PX0tVy'),
(71, 'ollen', 'lusinje', 'lus@gmail', '$2y$10$R7viuRG59PNNFjfeWFzvdu0iP0KPy4BajwsFRMmJleRx/Xq4lAR2e'),
(70, 'ekari', 'liphevo', 'ekar@gmail', '$2y$10$DRnPI5Jpc/ZKIQB5vs6se.0lVYQy0emM9W1Ezco1yKOwm1CWWgeRq'),
(69, 'omega', 'ome', 'ben@mailggg', '$2y$10$VstRBcshZPufKhaD6OFTKe7nGYNQ.sseTew3.mH7l1mkN9pN9Kdg2'),
(68, 'benjamin', 'chanza', 'ben@mailw', '$2y$10$NEg8jDVQ0HBgQZFJyq9KmOUvZIE8U69sUxwBM6W8zaEHT.jFtINrO');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

DROP TABLE IF EXISTS `user_reviews`;
CREATE TABLE IF NOT EXISTS `user_reviews` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `UserID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`ID`, `Title`, `Description`, `UserID`, `Date`) VALUES
(12, 'ngini yabho', 'very good user interface', '55', '2023-09-15 00:00:00'),
(11, 'Perfect  Camp', 'Nice camping sites. had a lot of fun!! see you next summer.', '54', '2023-09-15 00:00:00'),
(13, 'Peaceful', 'Kayaking was peaceful. Had to take my mind some place else. ', '56', '2023-09-15 00:00:00'),
(18, 'The best website i have s', 'palibeso website yokongola ngati iyi , ikufunikaso distinction, dink wakeso wa 90 osati 70 iyayi', '58', '2023-09-22 12:59:29'),
(19, 'it is ubiquitous', 'best peaceful experience although loggimg in was a bit annoying everything else is great', '71', '2023-09-29 13:30:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
