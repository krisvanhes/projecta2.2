-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 jul 2019 om 20:15
-- Serverversie: 10.1.32-MariaDB
-- PHP-versie: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `show_no_mercy`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `tussenvoegsel` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(8) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `email`) VALUES
(205, 'Dolore aliquid ab la', '', 'Neque cumque harum v', 'Exercitationem in et', 'Ut et vo', 'rebucabyx@mailinator.net'),
(206, 'Aspernatur et ipsum', '', 'Vel quia assumenda l', 'Voluptatem cupidita', 'Est magn', 'nopuqehodu@mailinator.net'),
(207, 'Kris', '', 'van Hes', 'Laan van het Kwekebos 344', '7823LP', 'vanhesk@gmail.com'),
(208, 'Officiis quam saepe ', '', 'Sed incididunt commo', 'Modi voluptate volup', 'Consequa', 'qudywomecy@mailinator.com'),
(209, 'Officiis quam saepe ', '', 'Sed incididunt commo', 'Modi voluptate volup', 'Consequa', 'qudywomecy@mailnator.com'),
(210, 'Officiis quam saepe ', '', 'Sed incididunt commo', 'Modi voluptate volup', 'Consequa', 'qudywomey@mailnator.com'),
(211, 'Officiis quam saepe ', '', 'Sed incididunt commo', 'Modi voluptate volup', 'Consequa', 'qudywomey@mailnator.com'),
(212, 'Officiis quam saepe ', '', 'Sed incididunt commo', 'Modi voluptate volup', 'Consequa', 'qudywomey@mailnator.com'),
(213, 'Et distinctio Autem', '', 'Cupiditate est vita', 'Incidunt irure reru', 'Ullamco ', 'nywo@mailinator.net'),
(214, 'Ipsum sint ullamco ', '', 'Aperiam quo providen', 'Pariatur Accusamus ', 'Non corr', 'tiguhiqoto@mailinator.com'),
(215, 'Cum sunt incididunt ', '', 'Pariatur Velit dolo', 'Quis aut rem dolorem', 'Deserunt', 'kaqakuh@mailinator.net'),
(216, 'Fuga Placeat labor', '', 'Sit unde non quibus', 'Sapiente et qui cons', 'At volup', 'gaji@mailinator.net'),
(217, 'Et est aliquam labor', '', 'Quam mollitia maxime', 'Unde totam est dist', 'Modi neq', 'kyhub@mailinator.com'),
(218, 'Placeat Nam unde vo', '', 'Dolorem fugit non v', 'Et numquam debitis a', 'Proident', 'sizoryx@mailinator.net'),
(219, 'Commodo enim dolor r', '', 'Tenetur et eum reici', 'Vel voluptatem cons', 'Cum cupi', 'wekohogew@mailinator.com'),
(220, 'Consequuntur velit ', '', 'Nihil aut ut eligend', 'Ullamco quibusdam eo', 'Aspernat', 'tosex@mailinator.net'),
(221, 'Perferendis quisquam', '', 'Aperiam hic id dolor', 'Id deserunt tempora', 'Aliqua A', 'xyfux@mailinator.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `spel`
--

CREATE TABLE `spel` (
  `id` int(11) NOT NULL,
  `gebruikerID` int(10) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `soort` varchar(255) NOT NULL,
  `game` varchar(255) NOT NULL,
  `actief` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `spel`
--

INSERT INTO `spel` (`id`, `gebruikerID`, `categorie`, `soort`, `game`, `actief`) VALUES
(60, 206, 'Computer games', 'Fysiek samen', 'Sportgames', 0),
(61, 205, 'Computer games', 'Fysiek samen', 'Sportgames', 0),
(62, 208, 'Computer games', 'Online samen', 'Sportgames', 0),
(63, 210, 'Computer games', 'Fysiek samen', 'Strategische games', 0),
(64, 210, 'Computer games', 'Online samen', 'Sportgames', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'vanhesk@gmail.com', '$2y$10$Hr0O7eWhq7mIHujF.uO97OjsSpuD/N1eDCX4W3erhAPkZtIFVjUUi');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `spel`
--
ALTER TABLE `spel`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT voor een tabel `spel`
--
ALTER TABLE `spel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
