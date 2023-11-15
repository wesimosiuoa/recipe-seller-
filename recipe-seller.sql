-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2023 at 10:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe-seller`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredientID` int(11) NOT NULL,
  `ingredeintName` varchar(100) DEFAULT NULL,
  `measurement` varchar(100) DEFAULT NULL,
  `recipeName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredientID`, `ingredeintName`, `measurement`, `recipeName`) VALUES
(23, 'Fat', '23 mg', 'ROMAIN PIZZA SPICED');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipeName` varchar(100) NOT NULL,
  `price` double DEFAULT NULL,
  `emailAddress` varchar(40) DEFAULT NULL,
  `image` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipeName`, `price`, `emailAddress`, `image`, `description`) VALUES
('leshoabe ka lebese ', 34, 'wezimosiuoa@gmail.com', 'IMG-654a9f273b3317.63309632.jpg', 'fgfgfgfgf'),
('ROMAIN PIZZA SPICED', 200, 'wezimosiuoa@gmail.com', 'WIN_20230927_16_27_51_Pro (2).jpg', 'THIS IS ROMAN PIZZA THAT IS BEING SPICED WITH PERICAH, PERI PERI AND ADDED PIECES OF RUSSIAN ');

-- --------------------------------------------------------

--
-- Table structure for table `recipe-chef`
--

CREATE TABLE `recipe-chef` (
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `pno` varchar(30) DEFAULT NULL,
  `emailAddress` varchar(40) NOT NULL,
  `companyifApplicable` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe-chef`
--

INSERT INTO `recipe-chef` (`name`, `surname`, `pno`, `emailAddress`, `companyifApplicable`, `address`, `profile_picture`, `password`) VALUES
('', '', '', '', '', '', '', ''),
('Mosiuoa', 'Wesi', '+26659959655', 'wezimosiuoa@gmail.com', 'N/A', 'Tsereoane ', '338685580_906558037311433_7930897012183513250_n.jpg', '1234'),
('Mosiuoa', 'Wesi', '+26659959655', 'wezimosiuoa@gmailss.com', 'N/A', 'Tsereoane ', '', 'w34r5tyj');

-- --------------------------------------------------------

--
-- Table structure for table `recipeorder`
--

CREATE TABLE `recipeorder` (
  `orderid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pno` varchar(30) DEFAULT NULL,
  `recipeName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipeorder`
--

INSERT INTO `recipeorder` (`orderid`, `name`, `surname`, `email`, `pno`, `recipeName`) VALUES
(15, 'Mosiuoa', 'Wesi', 'wezimosiuoa@gmail.com', '+26659959655', 'ROMAIN PIZZA SPICED'),
(16, 'Mosiuoa', 'Wesi', 'wezimosiuoa@gmail.com', '+26659959655', 'leshoabe ka lebese'),
(17, 'Mosiuoa', 'Wesi', 'wezimosiuoa@gmail.com', '+26659959655', 'leshoabe ka lebese'),
(18, 'Mosiuoa', 'Wesi', 'wezimosiuoa@gmail.com', '+26659959655', 'leshoabe ka lebese');

-- --------------------------------------------------------

--
-- Table structure for table `typicalnutrition`
--

CREATE TABLE `typicalnutrition` (
  `nutrient` varchar(30) NOT NULL,
  `serving per 100ml` int(11) DEFAULT NULL,
  `serving per 20ml` int(11) DEFAULT NULL,
  `recipeName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typicalnutrition`
--

INSERT INTO `typicalnutrition` (`nutrient`, `serving per 100ml`, `serving per 20ml`, `recipeName`) VALUES
('VITAMIN 300', 30, 2000, 'ROMAIN PIZZA SPICED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredientID`),
  ADD KEY `fk_recipeName` (`recipeName`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipeName`),
  ADD KEY `fk_recipe` (`emailAddress`);

--
-- Indexes for table `recipe-chef`
--
ALTER TABLE `recipe-chef`
  ADD PRIMARY KEY (`emailAddress`);

--
-- Indexes for table `recipeorder`
--
ALTER TABLE `recipeorder`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `fk_recipeInOrders` (`recipeName`);

--
-- Indexes for table `typicalnutrition`
--
ALTER TABLE `typicalnutrition`
  ADD PRIMARY KEY (`nutrient`),
  ADD KEY `fk_recipeN` (`recipeName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `recipeorder`
--
ALTER TABLE `recipeorder`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `fk_recipeName` FOREIGN KEY (`recipeName`) REFERENCES `recipe` (`recipeName`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `fk_recipe` FOREIGN KEY (`emailAddress`) REFERENCES `recipe-chef` (`emailAddress`);

--
-- Constraints for table `recipeorder`
--
ALTER TABLE `recipeorder`
  ADD CONSTRAINT `fk_recipeInOrders` FOREIGN KEY (`recipeName`) REFERENCES `recipe` (`recipeName`);

--
-- Constraints for table `typicalnutrition`
--
ALTER TABLE `typicalnutrition`
  ADD CONSTRAINT `fk_recipeN` FOREIGN KEY (`recipeName`) REFERENCES `recipe` (`recipeName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
