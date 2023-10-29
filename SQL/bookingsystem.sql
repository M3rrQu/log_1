-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 12, 2023 at 01:55 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingsysystem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bookings_record`
--

CREATE TABLE `bookings_record` (
  `ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `MIDDLENAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `PHONE` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  `AUTONUM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookings_record`
--

INSERT INTO `bookings_record` (`ID`, `FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`, `AUTONUM`) VALUES
(7, 'jip', 'pmk', 'mip', 'mip', 'ngy@f7t', '2023-05-10', 'TRAC613783009815'),
(8, 't', 't', 't', '1', 't@t.com', '2023-05-09', 'TRAC835012090213'),
(9, 'w', 'w', 'w', '1', 'thf@kfh', '2023-05-18', 'TRAC542440513366'),
(10, 't', 't', 't', '1', 'hfuy@ug', '2023-05-17', 'TRAC803098826727');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bookings_record`
--
ALTER TABLE `bookings_record`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings_record`
--
ALTER TABLE `bookings_record`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
