-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 avr. 2026 à 02:15
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `caisseshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id` int(11) NOT NULL,
  `NomProduit` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Prix` double NOT NULL,
  `Stock` int(11) NOT NULL,
  `CodeBarres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id`, `NomProduit`, `Description`, `Prix`, `Stock`, `CodeBarres`) VALUES
(1, 'Pain', 'Pain bio 400 g', 2.5, 186, '12252002'),
(2, 'Pain Luxe', 'Pain artisanal truffé 400 g', 24.99, 48, '12252006'),
(3, 'Fromage Premium', 'Fromage affiné 24 mois', 119.99, 27, '12252003'),
(4, 'Caviar Royal', 'Caviar importé haute qualité 100 g', 449.99, 10, '12252004'),
(5, 'Huile d’olive rare', 'Huile d’olive extra vierge édition limitée', 84.99, 40, '12252005'),
(6, 'Chocolat Gold', 'Chocolat avec feuille d’or 24 carats', 149.99, 24, '12252009'),
(7, 'Miel Sauvage', 'Miel rare récolté en montagne', 94.99, 35, '12252007'),
(8, 'Café Prestige', 'Café grains sélection spéciale', 59.99, 60, '12252008');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id`, `Nom`, `Prenom`, `Email`, `MotDePasse`) VALUES
(1, 'Mamadou', 'abdou', 'mamadou@gmail.com', '$2y$10$Hp3dyoJ16KULuhqULZhwnuiTyx1Vmc53hcS7fXBKjZI8WpA6Zq/JS'),
(2, 'Patate', 'Jean', 'jean.patate@gmail.com', '$2y$10$8rsYiXGcvF4qqZHjgReokOTH4HC6oS9v9i88Q1r8Bjr2E27A.iOA2'),
(3, 'Fromage', 'Camille', 'camille.fromage@gmail.com', '$2y$10$MyrxfB4XU9.yrYzUcCHfVuFWvH4rq.LcmxOZAMMNjHWRdCtGIjqKC'),
(4, 'Baguette', 'Pierre', 'pierre.baguette@gmail.com', '$2y$10$s2CIN.7vpPanjnis3UGX6ub657/XMe2Ut8Uf3UEuYNn2yQoWeJa6q');

-- --------------------------------------------------------

--
-- Structure de la table `venteproduits`
--

CREATE TABLE `venteproduits` (
  `Id` int(11) NOT NULL,
  `IdVente` int(11) NOT NULL,
  `IdProduit` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `PrixTotalProduit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `venteproduits`
--

INSERT INTO `venteproduits` (`Id`, `IdVente`, `IdProduit`, `Quantite`, `PrixTotalProduit`) VALUES
(1, 2, 4, 6, 2700),
(2, 3, 1, 2, 5),
(4, 4, 3, 5, 600),
(11, 1, 7, 3, 285),
(13, 1, 1, 3, 7.5),
(14, 1, 3, 3, 360),
(18, 14, 3, 2, 240),
(19, 15, 1, 1, 2.5),
(20, 15, 2, 1, 25),
(21, 15, 3, 1, 120),
(22, 15, 6, 1, 150);

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE `ventes` (
  `Id` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ventes`
--

INSERT INTO `ventes` (`Id`, `IdUtilisateur`, `Date`, `Total`) VALUES
(1, 1, '2026-03-10 06:21:00', 652.5),
(2, 2, '2026-03-11 13:20:00', 2700),
(3, 3, '2026-03-12 11:18:00', 5),
(4, 4, '2026-03-13 15:27:00', 600),
(14, 1, '2026-04-10 18:38:00', 240),
(15, 1, '2026-04-11 21:54:15', 297.5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `produi_venteproduit` (`IdProduit`),
  ADD KEY `vente_venteproduit` (`IdVente`);

--
-- Index pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `utilisateur_vente` (`IdUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `ventes`
--
ALTER TABLE `ventes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  ADD CONSTRAINT `produi_venteproduit` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`Id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
