-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 02:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbr_examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_examen`
--

CREATE TABLE `auto_examen` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auto_examen`
--

INSERT INTO `auto_examen` (`id`, `category`, `type`, `image`, `question`, `feedback`, `answer`) VALUES
(1, 'J', 4, 'public/assets/img/gvr_016a.jpg', 'Je rijdt 50 km/u. Wat doe je?', 'Je nadert een fietser, pas op, omdat fietsers kwetsbaar zijn. Passeer deze met een lage snelheid. Verder heb je goed zicht op de weg, dus remmen is niet nodig.', 'remmen'),
(2, 'J', 4, 'public/assets/img/gvr_016a.jpg', 'Je rijdt 20 km/u. Wat doe je?', 'Er zijn voetgangers aan het oversteken op het zebrapad. Door de bus naast je kun je niet zien of er plots nog meer voetgangers willen oversteken.', 'remmen'),
(3, 'J', 4, 'public/assets/img/gvr_022a.jpg', 'Je rijdt 80 km/u. Wat doe je?', 'Je rijdt op een voorrangsweg buiten de bebouwde kom. Je kan daarom 80 km/u blijven rijden; je kunt ver vooruit kijken.', 'niets'),
(4, 'J', 4, 'public/assets/img/gvr_027a.jpg', 'Je rijdt 30 km/u. Wat doe je?', 'Het verkeerslicht is geel. Je kunt nog veilig tot stilstand komen voor het verkeerslicht. Remmen.', 'remmen'),
(5, 'J', 4, 'public/assets/img/gvr_086a.jpg', 'Je rijdt 30 km/u. Wat doe je?', 'Je houdt meer dan voldoende volgafstand en er dreigt geen gevaar. Daarom kun je blijven doorrijden op deze snelheid.', 'niets'),
(6, 'J', 4, 'public/assets/img/gvr_090a.jpg', 'Je rijdt 80 km/u. Wat doe je?', 'Op deze weg mag je 80 km/u en er is geen nabij verkeer. Je kan daarom 80 km/u blijven rijden. Na het bord ‘einde 80’ mag je 100 km/u gaan rijden.', 'gas geven'),
(7, 'J', 4, 'public/assets/img/gvr_132a.jpg', 'Je rijdt 30 km/u. Wat doe je?', 'Je nadert een spoorwegovergang en de ambulance blokkeert jouw overzicht op de weg. Voorkom dat je stil komt te staan op de spoorwegovergang.', 'niets'),
(8, 'J', 4, 'public/assets/img/gvr_139a.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'De bestuurder rechts van je wilt dicht achter de auto voor je invoegen. Gas loslaten creëert genoeg afstand in de eerste instantie.', 'gas loslaten'),
(9, 'J', 4, 'public/assets/img/gvr_186a.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'Je houdt een veilige volgafstand tot de andere bestuurders. Let wel op: de vluchtstrook is geopend.', 'niets'),
(10, 'J', 4, 'public/assets/img/gvr_204a.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'Je houdt voldoende volgafstand en kunt bij eventueel gevaar uitwijken naar de linkerrijstrook.', 'niets'),
(11, 'J', 4, 'public/assets/img/gvr_251a.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'Je nadert borden die een maximumsnelheidslimiet aangeven van 100 km/u. Gas loslaten om op deze snelheid te komen.', 'remmen'),
(12, 'J', 4, 'public/assets/img/gvr_258a.jpg', 'Je rijdt 60 km/u. Wat doe je?', 'De weg voor je is vrij en er is nog genoeg afstand tot de verkeerslichten.', 'niets'),
(13, 'J', 4, 'public/assets/img/gvr_282b.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'Let op de bestuurder naast je die zich naar jouw rijstrook wil gaan verplaatsen.', 'remmen'),
(14, 'J', 4, 'public/assets/img/gvr_286a.jpg', 'Je rijdt 30 km/u. Wat doe je?', 'De bestuurder voor je rijdt jouw weghelft op. Je hebt geen ruimte om uit te wijken. Aan de andere kant staat een busje geparkeerd.', 'remmen'),
(15, 'J', 4, 'public/assets/img/gvr_296a.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'Je hebt een goed zicht op de weg en er is voldoende afstand tot het overige verkeer.', 'niets'),
(16, 'J', 4, 'public/assets/img/gvr_049c.jpg', 'Je rijdt 35 km/u. Wat doe je?', 'Het verkeerslicht is rood, dus je moet flink remmen.', 'remmen'),
(17, 'J', 4, 'public/assets/img/gvr_111a.jpg', 'Je rijdt 30 km/u. Wat doe je?', 'Er is een drukke verkeerssituatie ontstaan: nader deze met lage snelheid. Er rijden fietsers voor je, er bevindt zich weinig ruimte tussen jou en de tegenliggers, en er is geen ruimte om veilig uit te wijken.', 'remmen'),
(18, 'J', 4, 'public/assets/img/gvr_212a.jpg', 'Je rijdt 120 km/u. Wat doe je?', 'Je nadert een bord met een aangegeven snelheidslimiet van 90 km/u. Onnodig remmen op de snelweg moet je vermijden. Gas loslaten dus!', 'remmen'),
(19, 'J', 4, 'public/assets/img/gvr_012a.jpg', 'Je rijdt 80 km/u. Wat doe je?', 'De matrixborden geven een snelheidslimiet van ‘50 km/u’ aan: pas jouw snelheid aan, je rijdt te hard! Ook mag er niet meer op de linkerrijstrook gereden worden, pas dus op voor bestuurders die op jouw rijstrook willen gaan invoegen.', 'remmen'),
(20, 'J', 4, 'public/assets/img/gvr_268b.jpg', 'Je rijdt 70 km/u. Wat doe je?', 'De matrixborden geven een snelheidslimiet van 50 km/u aan. Pas daarom jouw snelheid aan en wees voorbereid op een file of andere gebeurtenis.', 'remmen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_examen`
--
ALTER TABLE `auto_examen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_examen`
--
ALTER TABLE `auto_examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
