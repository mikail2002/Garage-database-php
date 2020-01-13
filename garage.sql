-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 05:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `autokenteken` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `automerk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autotype` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autokmstand` int(100) NOT NULL,
  `klantid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('04-JKD-9', ' Volkswagen', ' Polo', 4087, 3),
('37-TVR-1', 'Opel', 'Corsa', 80544, 2),
('67-YB-44', 'Tatra', '603', 309872, 1),
('95-RP-LR', 'Fiat', 'Doblo', 143989, 1),
('HV-GB-23', 'Jaguar', 'XJ6', 201343, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wachtwoord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gebruikertype` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`, `gebruikertype`, `created_at`, `updated_at`) VALUES
(1, 'mikail', 'mikailkoker', 'systeembeheerder', '2020-01-11 15:04:58', '2020-01-11 15:04:58'),
(4, 'mikailkoker', 'mikailkoker2002', 'gebruiker', '2020-01-11 16:40:21', '2020-01-11 16:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `klantid` int(100) NOT NULL,
  `klantnaam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klantadres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klantpostcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klantplaats` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(1, 'Eijeriks, Anjo', 'Dijkwarl 145B', '3015CD', 'Rotterdam'),
(2, 'Poenai, V', 'Schiphollaan 45', '3213BV', 'Rotterdam'),
(3, 'Stoop, Sam', 'Stoopplein 45', '2023KL', 'Lekkerkerk'),
(4, ' Efes, Mo', ' Noorderweg 321', ' 2012B', 'Schiedam'),
(5, 'Vliet, Sandra', 'Hoofdweg 7', '3483MN', 'Capelle'),
(6, 'Kelvin, G', 'Celsiuslaan 273', '4532BV', 'Capelle'),
(7, 'El ouafa, Saida', 'Binnenweg 229', '3045HG', 'Rotterdam'),
(8, 'Antonic, H', 'Hoofdstraat 54', '2932BB', 'Schiedam'),
(9, 'Nikola, N', 'Nikostraat 24', '3028NN', 'Rotterdam'),
(12, 'Mikail KÃ¶ker', 'Victor e van vrieslandstraat 89', '3069WC', 'Rotterdam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`autokenteken`),
  ADD KEY `klantid` (`klantid`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `klantid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`klantid`) REFERENCES `klant` (`klantid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
