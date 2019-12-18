-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 dec 2019 om 13:02
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vuurwerk`
--

CREATE TABLE `vuurwerk` (
  `naam` varchar(50) NOT NULL,
  `prijs` double(5,2) NOT NULL,
  `voorraad` int(11) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `url_afbeelding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vuurwerk`
--

INSERT INTO `vuurwerk` (`naam`, `prijs`, `voorraad`, `categorie`, `url_afbeelding`) VALUES
('dum dum', 9.99, 17, 'knalvuurwerk', 'https://upload.vuurwerkcloud.nl/images/d6f6cc987357/040920191535481944dumbumvuurwerk_390_390.png'),
('knetterton', 25.99, 45, 'siervuurwerk', 'https://s3-eu-west-1.amazonaws.com/static.vuurwerkkopencoppens.nl/_productTile/Knetter-ton-XL.png'),
('reaper', 7.99, 12, 'knalvuurwerk', 'https://anypos-sbo.o.auroraobjects.eu/2/article/4.1474642270.png'),
('red dragon', 22.99, 22, 'knalvuurwerk', 'https://www.groenrijkoosterhout.nl/files/images/product-range/knalvuurwerk-oosterhout_n.jpg'),
('shoxx', 33.99, 21, 'siervuurwerk', 'https://anypos.o.auroraobjects.eu/18/article/1999.1535976718.png'),
('the night', 22.99, 31, 'siervuurwerk', 'http://www.groenrijkzevenaar.nl/files/images/We%20own%20the%20night_vuurwerk.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `vuurwerk`
--
ALTER TABLE `vuurwerk`
  ADD PRIMARY KEY (`naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
