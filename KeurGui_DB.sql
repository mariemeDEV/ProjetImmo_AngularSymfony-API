-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2018 at 03:28 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KeurGui_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `bien`
--

CREATE TABLE `bien` (
  `id` int(11) NOT NULL,
  `nomBien` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `etatBien` tinyint(1) NOT NULL,
  `descriptionBien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prixLocation` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `idLocalite` int(11) DEFAULT NULL,
  `idTypeBien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bien`
--

INSERT INTO `bien` (`id`, `nomBien`, `etatBien`, `descriptionBien`, `prixLocation`, `idLocalite`, `idTypeBien`) VALUES
(1, 'Maison Fatou', 0, 'Maison en tres bon etat.', '250000', 1, 1),
(2, 'AppartementA', 0, 'Appartement spacieux.', '450000', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bien_photos`
--

CREATE TABLE `bien_photos` (
  `id` int(11) NOT NULL,
  `idBien` int(11) DEFAULT NULL,
  `idImage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `numPiece` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nomComplet` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE `contrat` (
  `id` int(11) NOT NULL,
  `dateContrat` datetime NOT NULL,
  `etat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idTypeBien` int(11) DEFAULT NULL,
  `idBien` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `localite`
--

CREATE TABLE `localite` (
  `id` int(11) NOT NULL,
  `libelleLocalite` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `localite`
--

INSERT INTO `localite` (`id`, `libelleLocalite`) VALUES
(1, 'Parcelles'),
(2, 'Sipres');

-- --------------------------------------------------------

--
-- Table structure for table `Paiement`
--

CREATE TABLE `Paiement` (
  `idPaiement` int(10) NOT NULL,
  `datePaiement` varchar(10) NOT NULL,
  `montant` int(30) NOT NULL,
  `periode` int(10) NOT NULL,
  `idContrat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `id` int(11) NOT NULL,
  `idProprietaire` int(11) NOT NULL,
  `numPiece` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomComplet` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `codeBanque` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(10) NOT NULL,
  `idBien` int(10) NOT NULL,
  `idClient` int(10) NOT NULL,
  `dateReservation` varchar(10) NOT NULL,
  `etatReservation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_bien`
--

CREATE TABLE `type_bien` (
  `id` int(11) NOT NULL,
  `libelleTypeBien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_bien`
--

INSERT INTO `type_bien` (`id`, `libelleTypeBien`) VALUES
(1, 'Maison'),
(2, 'Appartement');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_45EDC386A674CEF2` (`idLocalite`),
  ADD KEY `IDX_45EDC386F900B9F8` (`idTypeBien`);

--
-- Indexes for table `bien_photos`
--
ALTER TABLE `bien_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F1711FE936109D18` (`idBien`),
  ADD KEY `IDX_F1711FE9D2F94742` (`idImage`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C7440455E9505DD2` (`numPiece`),
  ADD UNIQUE KEY `UNIQ_C7440455450FF010` (`telephone`),
  ADD UNIQUE KEY `UNIQ_C7440455E7927C74` (`email`);

--
-- Indexes for table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_60349993F900B9F8` (`idTypeBien`),
  ADD KEY `IDX_6034999336109D18` (`idBien`),
  ADD KEY `IDX_60349993A455ACCF` (`idClient`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Paiement`
--
ALTER TABLE `Paiement`
  ADD PRIMARY KEY (`idPaiement`),
  ADD KEY `fk_idCont` (`idContrat`);

--
-- Indexes for table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_69E399D6E9505DD2` (`numPiece`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `fk_idcl` (`idClient`),
  ADD KEY `fk_bien` (`idBien`);

--
-- Indexes for table `type_bien`
--
ALTER TABLE `type_bien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bien`
--
ALTER TABLE `bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bien_photos`
--
ALTER TABLE `bien_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `localite`
--
ALTER TABLE `localite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Paiement`
--
ALTER TABLE `Paiement`
  MODIFY `idPaiement` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_bien`
--
ALTER TABLE `type_bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `FK_45EDC386A674CEF2` FOREIGN KEY (`idLocalite`) REFERENCES `localite` (`id`),
  ADD CONSTRAINT `FK_45EDC386F900B9F8` FOREIGN KEY (`idTypeBien`) REFERENCES `type_bien` (`id`);

--
-- Constraints for table `bien_photos`
--
ALTER TABLE `bien_photos`
  ADD CONSTRAINT `FK_F1711FE936109D18` FOREIGN KEY (`idBien`) REFERENCES `bien` (`id`),
  ADD CONSTRAINT `FK_F1711FE9D2F94742` FOREIGN KEY (`idImage`) REFERENCES `image` (`id`);

--
-- Constraints for table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `FK_6034999336109D18` FOREIGN KEY (`idBien`) REFERENCES `bien` (`id`),
  ADD CONSTRAINT `FK_60349993A455ACCF` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_60349993F900B9F8` FOREIGN KEY (`idTypeBien`) REFERENCES `type_bien` (`id`);

--
-- Constraints for table `Paiement`
--
ALTER TABLE `Paiement`
  ADD CONSTRAINT `fk_idCont` FOREIGN KEY (`idContrat`) REFERENCES `contrat` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_bien` FOREIGN KEY (`idBien`) REFERENCES `bien` (`id`),
  ADD CONSTRAINT `fk_idcl` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
