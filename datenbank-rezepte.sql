-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Jun 2020 um 10:23
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `rezepte`
--
CREATE DATABASE IF NOT EXISTS `rezepte` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rezepte`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gaengemenue`
--

CREATE TABLE `gaengemenue` (
  `gaengemenue_num` int(11) NOT NULL,
  `gaengemenue` varchar(30) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gaengemenue`
--

INSERT INTO `gaengemenue` (`gaengemenue_num`, `gaengemenue`) VALUES
(1, 'Vorspeisen'),
(2, 'Hauptgerichte'),
(3, 'Nachspeisen'),
(4, 'Snacks'),
(5, 'Getränke');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorien`
--

CREATE TABLE `kategorien` (
  `kategorie_num` int(11) NOT NULL,
  `kategorie_name` varchar(30) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `kategorien`
--

INSERT INTO `kategorien` (`kategorie_num`, `kategorie_name`) VALUES
(1, 'Fleisch'),
(2, 'Fisch'),
(3, 'Gemüse'),
(4, 'Dessert'),
(5, 'Soße'),
(6, 'Nudeln und Getreide'),
(7, 'Getränke'),
(8, 'Sonstiges');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `masseneinheit`
--

CREATE TABLE `masseneinheit` (
  `masseneinheit_num` int(11) NOT NULL,
  `masseneinheit` varchar(30) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `masseneinheit`
--

INSERT INTO `masseneinheit` (`masseneinheit_num`, `masseneinheit`) VALUES
(1, 'g'),
(2, 'kg'),
(3, 'TL'),
(4, 'EL'),
(5, 'Stück'),
(7, 'Packung'),
(8, 'ml'),
(9, 'l'),
(10, 'Bund'),
(11, 'Scheiben'),
(12, 'Tropfen'),
(13, 'Nach Geschmack');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezepte`
--

CREATE TABLE `rezepte` (
  `rezept_num` bigint(20) NOT NULL,
  `rezept_titel` varchar(60) NOT NULL,
  `beschreibung_kurz` varchar(250) NOT NULL,
  `kategorie_num_fk` int(11) NOT NULL,
  `schwierigkeit_num_fk` int(11) NOT NULL,
  `vorbereitungszeit` smallint(6) NOT NULL,
  `kochzeit` smallint(6) NOT NULL,
  `haupt_bild` varchar(250) DEFAULT NULL,
  `portionen` tinyint(2) NOT NULL,
  `zubereitungsart_num_fk` int(11) NOT NULL,
  `gaengemenue_num_fk` int(11) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `rezepte`
--

INSERT INTO `rezepte` (`rezept_num`, `rezept_titel`, `beschreibung_kurz`, `kategorie_num_fk`, `schwierigkeit_num_fk`, `vorbereitungszeit`, `kochzeit`, `haupt_bild`, `portionen`, `zubereitungsart_num_fk`, `gaengemenue_num_fk`) VALUES
(50, 'Lasagne', 'Herzhafter Schichtauflauf mit Nudeln, Fleisch und Gemüse. Die Creme Fraiche gibt dem ganzen eine frische Note.', 6, 2, 20, 40, 'haupt_5ef476855f326.jpg', 4, 1, 2),
(51, 'Brokkoli-Käse Suppe:', 'Der Klassiker unter den Cremesuppen und eine ideale Vorspeise. Die Mandelblätter runden das Rezept ab.\r\n', 3, 2, 15, 30, 'haupt_5ef3c1bebc23c.jpg', 6, 2, 2),
(52, 'Cannoli mit Ricotta', 'Die typische sizilanische Nachspeise aus frittiertem Teig und Ricotta Creme', 4, 3, 20, 40, 'haupt_5ef3c2ed3def1.jpg', 6, 4, 3),
(53, 'Fisch in Panade', 'Ein leckeres und einfaches Rezept mit frittiertem Fischfilet. ', 2, 2, 15, 30, 'haupt_5ef3c4b35a5eb.jpg', 4, 7, 2),
(54, 'Tomaten Mozzarella Salat mit Rucola', 'Ein schneller und frischer Salat für den Sommer. Ideal zum Grillen!', 3, 1, 5, 10, 'haupt_5ef3c6074528b.jpg', 6, 6, 1),
(73, 'Salad Caprese', 'Leicht und frisch für warme Sommertage.', 3, 1, 10, 4, 'haupt_5ef4f73030999.jpg', 6, 6, 1),
(72, 'Toast Hawaii', 'In den 1960ern von einem Fernsehkoch erdacht, erfreut sich dieser schnell zubereitete Snack auch heute noch großer Beliebtheit.', 8, 1, 10, 8, 'haupt_5ef4f2f807264.jpg', 6, 1, 4),
(74, 'Bloody Mary', 'Auch ohne Alkohol macht dieser Drink eine gute Figur!', 7, 1, 5, 5, 'haupt_5ef4f9305f86e.jpg', 1, 6, 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezepte_zutaten`
--

CREATE TABLE `rezepte_zutaten` (
  `rz_num` bigint(20) NOT NULL,
  `zutaten_num_fk` int(11) NOT NULL,
  `zutaten_menge` int(11) DEFAULT NULL,
  `masseneinheit_num_fk` int(11) NOT NULL,
  `rezept_num_fk` int(11) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `rezepte_zutaten`
--

INSERT INTO `rezepte_zutaten` (`rz_num`, `zutaten_num_fk`, `zutaten_menge`, `masseneinheit_num_fk`, `rezept_num_fk`) VALUES
(1, 1, 500, 1, 50),
(2, 2, 1, 5, 50),
(3, 3, 300, 1, 50),
(4, 4, 1, 7, 50),
(5, 5, 1, 7, 50),
(6, 6, 1, 7, 50),
(7, 7, 1, 5, 50),
(8, 8, 1, 5, 50),
(9, 9, 1, 5, 50),
(10, 10, 150, 1, 50),
(11, 11, 2, 4, 51),
(12, 12, 300, 1, 51),
(13, 13, 400, 8, 51),
(14, 14, 1, 5, 51),
(15, 4, 50, 1, 51),
(16, 15, 1, 5, 51),
(17, 16, 1, 3, 51),
(18, 17, 1, 3, 51),
(19, 18, 1, 3, 51),
(20, 19, 600, 1, 52),
(21, 20, 1, 5, 52),
(22, 21, 1, 9, 52),
(23, 22, 1, 4, 52),
(24, 23, 200, 8, 52),
(25, 24, 3, 4, 52),
(26, 20, 1, 5, 52),
(27, 25, 500, 1, 52),
(28, 26, 3, 4, 52),
(29, 27, 1, 3, 52),
(30, 11, 100, 1, 52),
(31, 19, 50, 1, 53),
(32, 16, 1, 3, 53),
(33, 29, 1, 3, 53),
(34, 20, 2, 5, 53),
(35, 30, 100, 8, 53),
(36, 31, 150, 1, 53),
(37, 32, 750, 1, 53),
(38, 21, 80, 8, 53),
(39, 33, 500, 1, 54),
(40, 34, 5, 5, 54),
(41, 35, 1, 10, 54),
(42, 36, 1, 10, 54),
(43, 37, 2, 4, 54),
(44, 38, 2, 4, 54),
(45, 16, 1, 3, 54),
(64, 39, 6, 11, 72),
(65, 40, 100, 1, 72),
(66, 41, 100, 1, 72),
(67, 42, 6, 11, 72),
(68, 43, 3, 4, 72),
(69, 34, 2, 5, 72),
(70, 34, 500, 1, 73),
(71, 33, 2, 7, 73),
(72, 38, 3, 4, 73),
(73, 35, 1, 10, 73),
(74, 16, 1, 3, 73),
(75, 17, 1, 3, 73),
(76, 44, 1, 5, 74),
(77, 45, 120, 8, 74),
(78, 17, 20, 1, 74),
(79, 47, 20, 8, 74),
(80, 50, 1, 4, 74),
(81, 16, 20, 1, 74),
(82, 48, 3, 12, 74),
(83, 49, 3, 5, 74);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `schwierigkeitstufen`
--

CREATE TABLE `schwierigkeitstufen` (
  `schwierigkeit_num` int(11) NOT NULL,
  `schwierigkeitstufe` varchar(30) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `schwierigkeitstufen`
--

INSERT INTO `schwierigkeitstufen` (`schwierigkeit_num`, `schwierigkeitstufe`) VALUES
(1, 'leicht'),
(2, 'mittel'),
(3, 'schwer');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_num` bigint(20) NOT NULL,
  `vorname` varchar(250) NOT NULL,
  `nachname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `login` varchar(30) NOT NULL,
  `passwort` varchar(100) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_num`, `vorname`, `nachname`, `email`, `login`, `passwort`) VALUES
(1, 'Homer', 'Simpson', 'homer@moes.bar', 'donut_lover', '$2y$10$q.bZPkl5hvdGHK9dHggvMusiJ3O5xGCKRW2gFcqhtmQoK4xlQe7SG');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zubereitung`
--

CREATE TABLE `zubereitung` (
  `z_num` bigint(20) NOT NULL,
  `schritt_num` smallint(2) NOT NULL,
  `zubereitung` text NOT NULL,
  `rezept_num_fk` bigint(20) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `zubereitung`
--

INSERT INTO `zubereitung` (`z_num`, `schritt_num`, `zubereitung`, `rezept_num_fk`) VALUES
(1, 1, 'Das Gemüse zunächst putzen und anschließend in kleine Stücke schneiden und anschließend mit der Creme Fraiche und Sahne zu einer Masse vermengen.', 50),
(2, 2, 'Die Gemüsemasse kurz in einem Topf köcheln lassen bis es Zart ist. ', 50),
(3, 3, ' Die Zwiebel schneiden und zusammen mit dem Hackfleisch kurz mit ein wenig Öl in der Pfanne anbraten. Dannach das Tomatenmark hinzufügen und das ganze noch mit Salz und Pfeffer abschmecken.', 50),
(4, 4, 'Anschließend muss die Backform mit Öl oder Butter bestrichen werden um ein Anbrennen zu verhindern.', 50),
(5, 5, 'Gemüsemischung und das Fleisch nun abwechselnd in der Backform aufgeschichtet und mit den Lasagneplatten getrennt. Hier wird mit der Fleischmasse begonnen.', 50),
(6, 6, 'Zum Schluss wird das ganze noch mit Käse bestreut.', 50),
(7, 7, ' Die Backform kommt dann für ca. 40 min bei 200C° in den Ofen. Bon Appetit!', 50),
(8, 1, 'Mandelblättchen kurz in einer Pfanne goldgelb anbraten und schließend auf einem Teller abkühlen lassen.', 51),
(9, 2, 'Brokkoli waschen und in kleine Stücke zerlegen und in der heißen Gemüsebrühe 5-8 Minuten garen.', 51),
(10, 3, 'Einige Brokkolistücke für die Einlage entnehmen und abtropfen lassen. Restlichen Brokkoli pürieren.', 51),
(11, 4, 'Schmelzkäse hinzugeben und bei schwacher Hitze schmelzen. Anschließend Topf von der Kochstelle nehmen.', 51),
(12, 5, 'Sahne und Ei verrühren und der Suppe hinzugeben und Suppe mit Gewürzen abschmecken.', 51),
(13, 6, 'Zuvor entnommene Brokkolistücke wieder hinzufügen.', 51),
(14, 1, 'Das Mehl sieben und in der Mitte eine Mulde machen.', 52),
(15, 2, 'Ei, Butter, Zucker, Wein und Milch hinzugeben.', 52),
(16, 3, 'Masse zu einem Teig verkneten.', 52),
(17, 4, 'Teig in mehrere Teile schneiden und in 3-4 mm breite Streifen schneiden.  ', 52),
(18, 5, ' Cannoli auf einem Nudelholz oder Ähnlichem aufwickeln und die Enden verbnoten. Anschließend mit dem Ei bestreichen.', 52),
(19, 6, 'Cannoli anschließend ca. 2 Minuten Goldbraun frittieren.', 52),
(20, 7, 'Ricotta, Puderzucker und Zimt verrühren bis eine glatte Masse entsteht.', 52),
(21, 8, ' Cannoli mit der so entstandenen Creme füllen.', 52),
(22, 9, ' Fertige Cannoli mit Puderzucker und Nüssen garnieren.', 52),
(23, 1, 'Mehl mit Salz und Fischgewürz vermengen.', 53),
(24, 2, 'Eier mit Bier(oder Wasser) seperat aufschlagen.', 53),
(25, 3, ' Fisch in mundgerechte Stücke schneiden.', 53),
(26, 4, 'Stücke anschließend in Mehl und Eiern und Semmelbröseln wälzen.', 53),
(27, 5, 'Die Fischstücke werden anschließend bei mittlerer Hitze für 5-7 Minuten in der Pfanne gebraten.', 53),
(28, 6, 'Den fertigen Fisch mit Kräutern und Zitrone garnieren.', 53),
(29, 1, 'Mozzarella und Tomaten in mundgerechte Scheiben schneiden.', 54),
(30, 2, 'Olivenöl, Balsamico, Basilikum und Salz zu einer gleichmäßigen Masse vermengen.', 54),
(31, 3, 'Dressing mit Tomate und Mozzarella vermischen.', 54),
(32, 4, 'Vor dem Servieren den frischen Ruccola auf den Salat legen.', 54),
(49, 1, 'Toastbrotscheiben auf eine Unterlage legen', 72),
(50, 2, 'Mit Ananas, Schinken und Käse belegen', 72),
(51, 3, 'Belegtes Toast bei 180C° für ca. 8 Minuten in den Backofen bis der Käse leicht gebräunt ist.', 72),
(52, 4, 'Nach Bedarf mit Preiselbeersauce oder Tomaten garnieren.', 72),
(53, 1, 'Tomaten waschen und in Scheiben schneiden', 73),
(54, 2, ' Tomatenscheiben auf einer Platte oder einem Teller verteilen. Anschließend salzen und pfeffern.', 73),
(55, 3, 'Das Olivenöl gleichmäßig über die Tomaten verteilen.', 73),
(56, 4, ' Mozzarella in Schieben schneiden und auf die Tomaten legen.', 73),
(57, 5, 'Basilikum waschen, trocken tupfen und auf dem Mozzarella verteilen.', 73),
(58, 1, 'Sellere waschen, trocken tupfen und ggf. etwas kürzen.', 74),
(59, 2, ' Ein Glas mit Eiswürfeln füllen, die Hälfe des Tomatensaftes hineingießen und anschließend mit Worcestersauce, Tabasco, Zitronensaft, Meersalz und Pfeffer nach Belieben würzen.', 74),
(60, 3, 'Den übrigen Tomatensaft dazugießen, mit der Selleriestange und gemahlenem Pfeffer garnieren und kalt servieren.', 74);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zubereitungsart`
--

CREATE TABLE `zubereitungsart` (
  `zubereitungsart_num` int(11) NOT NULL,
  `zubereitungsart` varchar(30) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `zubereitungsart`
--

INSERT INTO `zubereitungsart` (`zubereitungsart_num`, `zubereitungsart`) VALUES
(1, 'Backen'),
(2, 'Kochen'),
(3, 'Grillen'),
(4, 'Frittieren'),
(5, 'Mikrowelle'),
(6, 'Kalte Zubereitung'),
(7, 'Braten'),
(8, 'Blanchieren');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zutaten`
--

CREATE TABLE `zutaten` (
  `zutaten_num` int(11) NOT NULL,
  `zutaten` varchar(30) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `zutaten`
--

INSERT INTO `zutaten` (`zutaten_num`, `zutaten`) VALUES
(1, 'Hackfleisch'),
(2, 'Zwiebel'),
(3, 'Creme Fraiche'),
(4, 'Sahne'),
(5, 'Tomatenmark'),
(6, 'Lasagne Platten'),
(7, 'Aubergine'),
(8, 'Zuchini'),
(9, 'Parpika'),
(10, 'Emmentaler'),
(11, 'Mandelblättchen'),
(12, 'Brokkoli'),
(13, 'Gemüsebrühe'),
(14, 'Schmelzkäse'),
(15, 'Eigelb'),
(16, 'Salz'),
(17, 'Pfeffer'),
(18, 'Muskatnuss'),
(19, 'Mehl'),
(20, 'Eier'),
(21, 'Öl'),
(22, 'Zucker'),
(23, 'Rotwein'),
(24, 'Milch'),
(25, 'Ricotta'),
(26, 'Puderzucker'),
(27, 'Zimt'),
(28, 'Haselnüsse'),
(29, 'Fischgewürz'),
(30, 'Bier'),
(31, 'Semmelbrösel'),
(32, 'Fischfilet'),
(33, 'Mozzarella'),
(34, 'Tomaten'),
(35, 'Basilikum'),
(36, 'Rucola'),
(37, 'Balsamico'),
(38, 'Olivenöl'),
(39, 'Toastbrot'),
(40, 'Käse'),
(41, 'Kochschinken'),
(42, 'Ananas'),
(43, 'Preiselbeersauce'),
(44, 'Staudensellerie'),
(45, 'Tomatensaft'),
(47, 'Zitronensaft'),
(48, 'Tabasco'),
(49, 'Eiswürfel'),
(50, 'Worcestersauce'),
(51, 'Oliven');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gaengemenue`
--
ALTER TABLE `gaengemenue`
  ADD PRIMARY KEY (`gaengemenue_num`),
  ADD UNIQUE KEY `gaengemenuename` (`gaengemenue`);

--
-- Indizes für die Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  ADD PRIMARY KEY (`kategorie_num`),
  ADD UNIQUE KEY `kategoriename` (`kategorie_name`);

--
-- Indizes für die Tabelle `masseneinheit`
--
ALTER TABLE `masseneinheit`
  ADD PRIMARY KEY (`masseneinheit_num`),
  ADD UNIQUE KEY `masseneinheitname` (`masseneinheit`);

--
-- Indizes für die Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`rezept_num`);

--
-- Indizes für die Tabelle `rezepte_zutaten`
--
ALTER TABLE `rezepte_zutaten`
  ADD UNIQUE KEY `rz_id` (`rz_num`);

--
-- Indizes für die Tabelle `schwierigkeitstufen`
--
ALTER TABLE `schwierigkeitstufen`
  ADD PRIMARY KEY (`schwierigkeit_num`),
  ADD UNIQUE KEY `schwierigkeitstufename` (`schwierigkeitstufe`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_num`),
  ADD UNIQUE KEY `loginname` (`login`),
  ADD UNIQUE KEY `emailname` (`email`);

--
-- Indizes für die Tabelle `zubereitung`
--
ALTER TABLE `zubereitung`
  ADD UNIQUE KEY `z_id` (`z_num`) USING BTREE;

--
-- Indizes für die Tabelle `zubereitungsart`
--
ALTER TABLE `zubereitungsart`
  ADD PRIMARY KEY (`zubereitungsart_num`),
  ADD UNIQUE KEY `zubereitungsart` (`zubereitungsart`);

--
-- Indizes für die Tabelle `zutaten`
--
ALTER TABLE `zutaten`
  ADD PRIMARY KEY (`zutaten_num`),
  ADD UNIQUE KEY `zutatenname` (`zutaten`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gaengemenue`
--
ALTER TABLE `gaengemenue`
  MODIFY `gaengemenue_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  MODIFY `kategorie_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `masseneinheit`
--
ALTER TABLE `masseneinheit`
  MODIFY `masseneinheit_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `rezept_num` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT für Tabelle `rezepte_zutaten`
--
ALTER TABLE `rezepte_zutaten`
  MODIFY `rz_num` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT für Tabelle `schwierigkeitstufen`
--
ALTER TABLE `schwierigkeitstufen`
  MODIFY `schwierigkeit_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_num` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `zubereitung`
--
ALTER TABLE `zubereitung`
  MODIFY `z_num` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT für Tabelle `zubereitungsart`
--
ALTER TABLE `zubereitungsart`
  MODIFY `zubereitungsart_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `zutaten`
--
ALTER TABLE `zutaten`
  MODIFY `zutaten_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
