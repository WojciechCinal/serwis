-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2022, 11:01
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `naprawa`
--

CREATE TABLE `naprawa` (
  `ID_Naprawy` int(11) NOT NULL,
  `Nazwa_naprawy` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `Cena` double NOT NULL,
  `Kategoria` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pom_zamowienia`
--

CREATE TABLE `pom_zamowienia` (
  `ID_Naprawy` int(11) NOT NULL,
  `ID_Zamowienia` int(11) NOT NULL,
  `Cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `login` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `ID_Zamowienia` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Marka` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Model` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Nr_rejestracyjny` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `naprawa`
--
ALTER TABLE `naprawa`
  ADD PRIMARY KEY (`ID_Naprawy`);

--
-- Indeksy dla tabeli `pom_zamowienia`
--
ALTER TABLE `pom_zamowienia`
  ADD KEY `ID_Naprawy` (`ID_Naprawy`),
  ADD KEY `ID_Zamowienia` (`ID_Zamowienia`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`ID_Zamowienia`),
  ADD KEY `ID_User` (`ID_User`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `naprawa`
--
ALTER TABLE `naprawa`
  MODIFY `ID_Naprawy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `ID_Zamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pom_zamowienia`
--
ALTER TABLE `pom_zamowienia`
  ADD CONSTRAINT `pom_zamowienia_ibfk_1` FOREIGN KEY (`ID_Zamowienia`) REFERENCES `zamowienie` (`ID_Zamowienia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pom_zamowienia_ibfk_2` FOREIGN KEY (`ID_Naprawy`) REFERENCES `naprawa` (`ID_Naprawy`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zamowienie_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
