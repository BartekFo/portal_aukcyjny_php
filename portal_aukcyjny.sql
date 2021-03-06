-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Kwi 2021, 17:43
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `portal_aukcyjny`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auctioned`
--

CREATE TABLE `auctioned` (
  `auctioned_id` int(11) NOT NULL,
  `auctioned_auction_id` int(11) NOT NULL,
  `auctioned_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auctions`
--

CREATE TABLE `auctions` (
  `auction_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `auction_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `auction_image_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `auction_description` varchar(2000) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `auction_starting_price` int(11) NOT NULL,
  `auction_actual_price` int(11) NOT NULL,
  `auction_winning_user` int(11) NOT NULL,
  `auction_category` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `auction_deadline` date NOT NULL,
  `auction_state_of_use` varchar(250) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `auction_delivery_methods` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `auctions`
--

INSERT INTO `auctions` (`auction_ID`, `userID`, `auction_name`, `auction_image_name`, `auction_description`, `auction_starting_price`, `auction_actual_price`, `auction_winning_user`, `auction_category`, `auction_deadline`, `auction_state_of_use`, `auction_delivery_methods`) VALUES
(10, 2, 'Iphone 11', '599894c1ccb8356bba5aa4dec42ac09a', 'IPHONE 11 128GB\r\nNa ten moment posiadamy urz??dzenia w kolorze:\r\n\r\nGreen\r\nZielony\r\nKONIECZNIE POINFORMUJ NAS JAKI KOLOR WYBIERASZ!\r\n??? Serdecznie prosimy, zaoszcz??d?? nam i sobie czasu - poinformuj nas o swoim wyborze podczas sk??adania zam??wienia (w wiadomo??ci dla sprzedaj??cego).\r\n\r\n??? W przypadku braku informacji, kolor zostanie wybrany losowo.\r\n\r\nSmartfon Apple iPhone 11\r\nNowy system dw??ch aparat??w pozwala uchwyci?? wi??cej. Najszybszy czip w historii smartfon??w i bateria na ca??y dzie?? ??? jeszcze wi??cej zdzia??a??. A dzi??ki wideo o jako??ci nieosi??galnej dla ??adnego innego smartfona zapisane wspomnienia b??d?? wygl??da?? pi??kniej ni?? kiedykolwiek.\r\n\r\nNowy system dw??ch aparat??w\r\nMo??esz rejestrowa?? uj??cia szerokok??tne, a nawet jeszcze szersze. Przeprojektowany interfejs wykorzystuje nowy, ultraszerokok??tny obiektyw, kt??ry pozwala zobaczy?? ??? i uchwyci?? ??? tak??e to, co dzieje si?? poza kadrem. A kr??cenie i montowanie wideo jest r??wnie proste, jak pstrykanie i edycja zdj????. Przed najpopularniejszym aparatem ??wiata otwieraj?? si?? w??a??nie nowe perspektywy.', 2500, 2500, 2, 'rtvagd', '2021-04-20', 'Nowy', 'List polecony priorytetowy, Paczkomat'),
(11, 2, 'Iphone 7', '92e43371b3a90640a4c8dd08ec15aef3', 'WITAJ !\r\nSzukasz dobrego smartfona w znakomitej cenie? Sprawd?? poni??sz?? aukcj?? i zamie?? sw??j stary telefon na urz??dzenie, kt??re spe??ni Twoje oczekiwania. Wiadomo??ci, maile, social media ??? przed ekranem smartfon??w sp??dzamy ka??dego dnia nawet kilka godzin. Postaw na najlepsze i sprawdzone marki.\r\n\r\nSpecyfikacja modelu :\r\nModel: Iphone 7 Plus\r\nProcesor: Apple A10 Quadcore\r\nJ??zyk: do wyboru w tym Polski\r\nRAM: 3GB\r\nROM: 32GB\r\nSMARTFON IPHONE 7 Plus\r\n\r\nSmartfon Iphone 7 Plus o pojemno??ci 32 GB, pochodz??cy z dystrybucji europejskiej. Telefon jest w 100% sprawny, posiada oryginalny branding oraz oznaczenia, gwarantuj??ce miejsce jego pochodzenia. Europejska dystrybucja oznacza przystosowanie telefonu do europejskich standard??w, co gwarantuje jako????, solidno???? i bezproblemowe u??ytkowanie.\r\n\r\nDOST??PNE KOLORY\r\n\r\nW ofercie naszej Firmy posiadamy aktualnie wersje w kolorach:\r\n\r\nBlack - czarny mat\r\nGRATISY W ZESTAWIE\r\n\r\nDo ka??dego telefonu otrzymujesz bezp??atnie w ramach prezentu poni??sze produkty\r\n\r\nSilikonowe etui\r\nSzk??o hartowane naklejone na Twojego smartfona', 900, 900, 2, 'rtvagd', '2021-04-19', 'Nowy', 'List polecony priorytetowy, Paczka pocztowa priorytetowa'),
(12, 2, 'Koszulka dzieci??', 'd7acde170ef6f15d8595eb6ed41cecfd', 'Koszulka dla dziecka z popularnej gry', 27, 27, 2, 'ubrania', '2021-04-16', 'Nowy', 'Paczkomat'),
(13, 2, 'Krzes??o biurowe', '2c3982a22df6d5c27acc1fb453081f9c', 'OTEL BIUROWY OBROTOWY CHROM KRZES??O BIUROWE\r\nobrotowy fotel biurowy\r\nzag????wek tapicerowany ekosk??r??\r\noparcie siatkowe\r\nsiedzisko tapicerowane ekosk??r?? i tkanin?? membranow??\r\np??ynnie regulowana wysoko???? siedziska za pomoc?? podno??nika pneumatycznego\r\nchromowana, stalowa podstawa jezdna\r\nw wyposa??eniu standardowym fotel posiada k????ka do powierzchni dywanowych', 150, 150, 2, 'meble', '2021-04-21', 'Nowy', 'List polecony priorytetowy, Dostawa przez sprzedaj??cego');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tokens`
--

CREATE TABLE `tokens` (
  `idtokens` int(11) NOT NULL,
  `idusera` int(11) DEFAULT NULL,
  `token_value` varchar(45) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `token_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `role` varchar(45) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT 'user',
  `name_surname` text DEFAULT 'Puste',
  `number` int(9) DEFAULT 0,
  `street` varchar(255) DEFAULT 'Puste',
  `zip_code` varchar(50) DEFAULT 'Puste',
  `city` varchar(255) DEFAULT 'Puste'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`idusers`, `email`, `password`, `role`, `name_surname`, `number`, `street`, `zip_code`, `city`) VALUES
(2, 'admin@aucs.com', '$2y$11$Wu7Qtmc1RcU.i7JVwOJztO5muWIPmzkvqPE87VtF0IYEYZ6kZuaV2', 'user', 'Puste', 0, 'Puste', 'Puste', 'Puste'),
(3, 'user@aucs.com', '$2y$11$mfm156f7f0Dn5RETBAdnrOPEWrcic54BTGEonQxaF8SjSVTILyisW', 'user', 'Puste', 0, 'Puste', 'Puste', 'Puste');

--
-- Indeksy dla zrzut??w tabel
--

--
-- Indeksy dla tabeli `auctioned`
--
ALTER TABLE `auctioned`
  ADD PRIMARY KEY (`auctioned_id`),
  ADD KEY `auctioned_auction_id` (`auctioned_auction_id`) USING BTREE;

--
-- Indeksy dla tabeli `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`auction_ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `auction_winning_user` (`auction_winning_user`);

--
-- Indeksy dla tabeli `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`idtokens`),
  ADD KEY `idusera` (`idusera`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `auctioned`
--
ALTER TABLE `auctioned`
  MODIFY `auctioned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `auctions`
--
ALTER TABLE `auctions`
  MODIFY `auction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `tokens`
--
ALTER TABLE `tokens`
  MODIFY `idtokens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzut??w tabel
--

--
-- Ograniczenia dla tabeli `auctioned`
--
ALTER TABLE `auctioned`
  ADD CONSTRAINT `auctioned_ibfk_1` FOREIGN KEY (`auctioned_user_id`) REFERENCES `users` (`idusers`),
  ADD CONSTRAINT `auctioned_ibfk_2` FOREIGN KEY (`auctioned_auction_id`) REFERENCES `auctions` (`auction_ID`);

--
-- Ograniczenia dla tabeli `auctions`
--
ALTER TABLE `auctions`
  ADD CONSTRAINT `auctions_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`idusers`);

--
-- Ograniczenia dla tabeli `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`idusera`) REFERENCES `users` (`idusers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
