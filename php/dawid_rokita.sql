-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Maj 2020, 15:04
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dawid_rokita`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kostki`
--

CREATE TABLE `kostki` (
  `id` int(6) UNSIGNED NOT NULL,
  `wielkosc` varchar(30) DEFAULT NULL,
  `nazwa` varchar(30) DEFAULT NULL,
  `wersja` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kostki`
--

INSERT INTO `kostki` (`id`, `wielkosc`, `nazwa`, `wersja`) VALUES
(1, '2x2', 'Moyu SenHuan Zhanlang', 'bez naklejek'),
(3, '3x3', 'MoFangge valk3', 'czarna'),
(4, '4x4', 'KungFu CangFeng', 'bez naklejek'),
(5, '5x5', 'Shengshou Mr.M', 'czarna'),
(6, '3x3', 'MoYu WeiLong WR', 'czarna'),
(7, '3x3', 'DaYan GuHong 3M', 'magnetyczna'),
(8, '2x2', 'ShengShou Legend', 'bez naklejek'),
(9, '5x5', 'YuXin Black Kylin', 'bez naklejek'),
(10, '4x4', 'MoYu AoSu WR M', 'magnetyczna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rekordy`
--

CREATE TABLE `rekordy` (
  `id` int(6) UNSIGNED NOT NULL,
  `konkurencja` varchar(30) DEFAULT NULL,
  `imie` varchar(30) DEFAULT NULL,
  `czas` varchar(30) DEFAULT NULL,
  `kraj` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rekordy`
--

INSERT INTO `rekordy` (`id`, `konkurencja`, `imie`, `czas`, `kraj`) VALUES
(1, '2x2', 'Maciej Czapiewski', '0.49', 'Polska'),
(2, '3x3', 'Yusheng Du (杜宇生)	', '3.47', 'Chiny'),
(3, '4x4', 'Sebastian Weyer', '17.42', 'Niemcy'),
(4, '5x5', 'Max Park', '34.92', 'USA');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kostki`
--
ALTER TABLE `kostki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rekordy`
--
ALTER TABLE `rekordy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kostki`
--
ALTER TABLE `kostki`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `rekordy`
--
ALTER TABLE `rekordy`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
