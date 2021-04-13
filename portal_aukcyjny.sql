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
(10, 2, 'Iphone 11', '599894c1ccb8356bba5aa4dec42ac09a', 'IPHONE 11 128GB\r\nNa ten moment posiadamy urządzenia w kolorze:\r\n\r\nGreen\r\nZielony\r\nKONIECZNIE POINFORMUJ NAS JAKI KOLOR WYBIERASZ!\r\n• Serdecznie prosimy, zaoszczędź nam i sobie czasu - poinformuj nas o swoim wyborze podczas składania zamówienia (w wiadomości dla sprzedającego).\r\n\r\n• W przypadku braku informacji, kolor zostanie wybrany losowo.\r\n\r\nSmartfon Apple iPhone 11\r\nNowy system dwóch aparatów pozwala uchwycić więcej. Najszybszy czip w historii smartfonów i bateria na cały dzień – jeszcze więcej zdziałać. A dzięki wideo o jakości nieosiągalnej dla żadnego innego smartfona zapisane wspomnienia będą wyglądać piękniej niż kiedykolwiek.\r\n\r\nNowy system dwóch aparatów\r\nMożesz rejestrować ujęcia szerokokątne, a nawet jeszcze szersze. Przeprojektowany interfejs wykorzystuje nowy, ultraszerokokątny obiektyw, który pozwala zobaczyć – i uchwycić – także to, co dzieje się poza kadrem. A kręcenie i montowanie wideo jest równie proste, jak pstrykanie i edycja zdjęć. Przed najpopularniejszym aparatem świata otwierają się właśnie nowe perspektywy.', 2500, 2500, 2, 'rtvagd', '2021-04-20', 'Nowy', 'List polecony priorytetowy, Paczkomat'),
(11, 2, 'Iphone 7', '92e43371b3a90640a4c8dd08ec15aef3', 'WITAJ !\r\nSzukasz dobrego smartfona w znakomitej cenie? Sprawdź poniższą aukcję i zamień swój stary telefon na urządzenie, które spełni Twoje oczekiwania. Wiadomości, maile, social media – przed ekranem smartfonów spędzamy każdego dnia nawet kilka godzin. Postaw na najlepsze i sprawdzone marki.\r\n\r\nSpecyfikacja modelu :\r\nModel: Iphone 7 Plus\r\nProcesor: Apple A10 Quadcore\r\nJęzyk: do wyboru w tym Polski\r\nRAM: 3GB\r\nROM: 32GB\r\nSMARTFON IPHONE 7 Plus\r\n\r\nSmartfon Iphone 7 Plus o pojemności 32 GB, pochodzący z dystrybucji europejskiej. Telefon jest w 100% sprawny, posiada oryginalny branding oraz oznaczenia, gwarantujące miejsce jego pochodzenia. Europejska dystrybucja oznacza przystosowanie telefonu do europejskich standardów, co gwarantuje jakość, solidność i bezproblemowe użytkowanie.\r\n\r\nDOSTĘPNE KOLORY\r\n\r\nW ofercie naszej Firmy posiadamy aktualnie wersje w kolorach:\r\n\r\nBlack - czarny mat\r\nGRATISY W ZESTAWIE\r\n\r\nDo każdego telefonu otrzymujesz bezpłatnie w ramach prezentu poniższe produkty\r\n\r\nSilikonowe etui\r\nSzkło hartowane naklejone na Twojego smartfona', 900, 900, 2, 'rtvagd', '2021-04-19', 'Nowy', 'List polecony priorytetowy, Paczka pocztowa priorytetowa'),
(12, 2, 'Koszulka dziecię', 'd7acde170ef6f15d8595eb6ed41cecfd', 'Koszulka dla dziecka z popularnej gry', 27, 27, 2, 'ubrania', '2021-04-16', 'Nowy', 'Paczkomat'),
(13, 2, 'Krzesło biurowe', '2c3982a22df6d5c27acc1fb453081f9c', 'OTEL BIUROWY OBROTOWY CHROM KRZESŁO BIUROWE\r\nobrotowy fotel biurowy\r\nzagłówek tapicerowany ekoskórą\r\noparcie siatkowe\r\nsiedzisko tapicerowane ekoskórą i tkaniną membranową\r\npłynnie regulowana wysokość siedziska za pomocą podnośnika pneumatycznego\r\nchromowana, stalowa podstawa jezdna\r\nw wyposażeniu standardowym fotel posiada kółka do powierzchni dywanowych', 150, 150, 2, 'meble', '2021-04-21', 'Nowy', 'List polecony priorytetowy, Dostawa przez sprzedającego');

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
-- Indeksy dla zrzutów tabel
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
-- Ograniczenia dla zrzutów tabel
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
