-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 mrt 2024 om 11:00
-- Serverversie: 8.0.31
-- PHP-versie: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burnout`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `message`, `date`) VALUES
(5, 'Hyper Nano', 'This is my message', '2024-03-12 10:33:24'),
(6, 'Hyper Nano', 'Een burn-out ontstaat door langdurige stress en overbelasting, waarbij zowel fysieke als mentale energiereserves uitgeput raken.', '2024-03-12 10:57:07'),
(7, 'Patetes KIzartmasi', 'OMG man this is perfect yuuuuu', '2024-03-12 10:57:17'),
(8, 'Hyper Nano', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, cum suscipit modi quasi fugit ipsam quidem eligendi odio magnam culpa itaque quisquam illo perspiciatis obcaecati voluptatem odit rem architecto? Dignissimos!', '2024-03-12 10:57:58');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `survey`
--

DROP TABLE IF EXISTS `survey`;
CREATE TABLE IF NOT EXISTS `survey` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `survey`
--

INSERT INTO `survey` (`id`, `name`, `mail`, `score`) VALUES
(1, 'Alperen Gedik', 'hhypernanoo@gmail.com', 100),
(2, 'Hyper Nano', 'hhypernanoo@gmail.com', 67),
(3, 'Hyper Nano', 'hhypernanoo@gmail.com', 67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
