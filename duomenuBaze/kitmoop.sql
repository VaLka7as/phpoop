-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Kov 08 d. 21:04
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
-- Database: `kitmoop`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `amzius` int(11) NOT NULL,
  `pareigos` varchar(255) NOT NULL,
  `atlyginimas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `darbuotojai`
--

INSERT INTO `darbuotojai` (`id`, `vardas`, `pavarde`, `amzius`, `pareigos`, `atlyginimas`) VALUES
(1, 'Julijonas', 'Petruskevicius', 39, 'Ukvedys', 1900);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `mokytojai`
--

CREATE TABLE `mokytojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `amzius` int(11) NOT NULL,
  `destomasKursas` varchar(255) NOT NULL,
  `atlyginimas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `mokytojai`
--

INSERT INTO `mokytojai` (`id`, `vardas`, `pavarde`, `amzius`, `destomasKursas`, `atlyginimas`) VALUES
(1, 'Teodoras', 'Kepalavicius', 36, 'Matematika', 1400);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `studentai`
--

CREATE TABLE `studentai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `amzius` int(11) NOT NULL,
  `kursoPav` varchar(255) NOT NULL,
  `stipendija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `studentai`
--

INSERT INTO `studentai` (`id`, `vardas`, `pavarde`, `amzius`, `kursoPav`, `stipendija`) VALUES
(1, 'Frida', 'Giraityte', 18, 'Multimedija', 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mokytojai`
--
ALTER TABLE `mokytojai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentai`
--
ALTER TABLE `studentai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mokytojai`
--
ALTER TABLE `mokytojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentai`
--
ALTER TABLE `studentai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
