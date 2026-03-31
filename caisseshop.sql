-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 mars 2026 à 12:09
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
(1, 'Pain', 'Pain bio 400 g', 2.5, 200, '12252001'),
(2, 'Pain Luxe', 'Pain artisanal truffé 400 g', 25, 50, '12252002'),
(3, 'Fromage Premium', 'Fromage affiné 24 mois', 120, 30, '12252003'),
(4, 'Caviar Royal', 'Caviar importé haute qualité 100 g', 450, 10, '12252004'),
(5, 'Huile d’olive rare', 'Huile d’olive extra vierge édition limitée', 85, 40, '12252005'),
(6, 'Chocolat Gold', 'Chocolat avec feuille d’or 24 carats', 150, 25, '12252006'),
(7, 'Miel Sauvage', 'Miel rare récolté en montagne', 95, 35, '12252007'),
(8, 'Café Prestige', 'Café grains sélection spéciale', 60, 60, '12252008');

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
(1, 'Mamadou', 'abdou', 'mamadou@gmail.com', 'mamadou.com'),
(2, 'Patate', 'Jean', 'jean.patate@gmail.com', 'patate123'),
(3, 'Fromage', 'Camille', 'camille.fromage@gmail.com', 'cheese456'),
(4, 'Baguette', 'Pierre', 'pierre.baguette@gmail.com', 'pain789'),
(5, 'Poulet', 'Roti', 'roti.poulet@gmail.com', 'chicken007'),
(6, 'Banane', 'Split', 'banane.split@gmail.com', 'dessert321'),
(7, 'Tartine', 'Beurre', 'tartine.beurre@gmail.com', 'toast999'),
(8, 'Chaussette', 'Perdue', 'chaussette.perdue@gmail.com', 'sock404'),
(9, 'Licorne', 'Magique', 'licorne.magique@gmail.com', 'unicorn777'),
(10, 'Pixel', 'Cassé', 'pixel.casse@gmail.com', 'bug123'),
(11, 'Clavier', 'Azerty', 'clavier.azerty@gmail.com', 'keyboard456');

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
(1, 2, 4, 6, 9000.2),
(2, 3, 1, 2, 5),
(3, 3, 2, 1, 120),
(4, 4, 3, 5, 2250),
(5, 5, 4, 3, 269.97),
(6, 6, 5, 6, 190),
(7, 7, 6, 7, 600),
(8, 8, 2, 1, 10),
(9, 9, 3, 2, 240),
(10, 10, 4, 5, 150),
(11, 2, 7, 3, 719.92);

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE `ventes` (
  `Id` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ventes`
--

INSERT INTO `ventes` (`Id`, `IdUtilisateur`, `Date`, `Total`) VALUES
(1, 1, '2026-03-10', 2055.62),
(2, 2, '2026-03-11', 150.75),
(3, 3, '2026-03-12', 3200),
(4, 4, '2026-03-13', 89.99),
(5, 5, '2026-03-14', 540.3),
(6, 6, '2026-03-15', 9999.99),
(7, 7, '2026-03-16', 45.2),
(8, 8, '2026-03-17', 780.6),
(9, 9, '2026-03-18', 120),
(10, 10, '2026-03-19', 2500.45),
(11, 1, '2026-03-20', 670.1);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `ventes`
--
ALTER TABLE `ventes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  ADD CONSTRAINT `produi_venteproduit` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`Id`),
  ADD CONSTRAINT `vente_venteproduit` FOREIGN KEY (`IdVente`) REFERENCES `ventes` (`Id`);

--
-- Contraintes pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD CONSTRAINT `utilisateur_vente` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateurs` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
