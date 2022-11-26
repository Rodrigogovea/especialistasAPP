-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3315
-- Generation Time: Nov 24, 2022 at 05:50 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appchat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `Id_Especialidad` int(11) NOT NULL,
  `Nom_Especialidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`Id_Especialidad`, `Nom_Especialidad`, `Descripcion`, `fechaInsert`) VALUES
(1, 'Dentista', NULL, '2022-11-22 22:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `especialista`
--

CREATE TABLE `especialista` (
  `Id_Especialista` int(11) NOT NULL,
  `Nom_Esp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ApPaEsp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ApMaEsp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Especialidad` int(11) NOT NULL,
  `Horario` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Meet` tinyint(1) DEFAULT NULL,
  `Zoom` tinyint(1) DEFAULT NULL,
  `Correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`Id_Especialidad`);

--
-- Indexes for table `especialista`
--
ALTER TABLE `especialista`
  ADD PRIMARY KEY (`Id_Especialista`),
  ADD KEY `Id_Especialidad` (`Id_Especialidad`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `Id_Especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `especialista`
--
ALTER TABLE `especialista`
  MODIFY `Id_Especialista` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `especialista`
--
ALTER TABLE `especialista`
  ADD CONSTRAINT `Especialista_ibfk_1` FOREIGN KEY (`Id_Especialidad`) REFERENCES `especialidades` (`Id_Especialidad`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
