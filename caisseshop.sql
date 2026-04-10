-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 avr. 2026 à 20:07
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
(1, 'Pain', 'Pain bio 400 g', 2.5, 187, '12252002'),
(2, 'Pain Luxe', 'Pain artisanal truffé 400 g', 25, 49, '12252006'),
(3, 'Fromage Premium', 'Fromage affiné 24 mois', 120, 28, '12252003'),
(4, 'Caviar Royal', 'Caviar importé haute qualité 100 g', 450, 10, '12252004'),
(5, 'Huile d’olive rare', 'Huile d’olive extra vierge édition limitée', 85, 40, '12252005'),
(6, 'Chocolat Gold', 'Chocolat avec feuille d’or 24 carats', 150, 25, '12252009'),
(7, 'Miel Sauvage', 'Miel rare récolté en montagne', 95, 35, '12252007'),
(8, 'Café Prestige', 'Café grains sélection spéciale', 60, 60, '12252008'),
(17, '100 KG de RIZ', 'yuyujyuj', 33, 2000, '122520018');

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
(2, 'Patate', 'Jean', 'jean.patate@gmail.com', '$2y$10$NkMsusgVF.vTYbsF5XSenOEK4iOi7o/57E5dfM76uYL.RjtTBLV92'),
(3, 'Fromage', 'Camille', 'camille.fromage@gmail.com', '$2y$10$KG0hf6K9b4gv87OB0mPrY.cg7BwqNB0307C1CdXfP0Lou5mJBZ7D6'),
(4, 'Baguette', 'Pierre', 'pierre.baguette@gmail.com', '$2y$10$8PUeHgALJCeYurQiCi1JXetcelfSP6M7XBeFz.kajRYkIW/TVY72u');

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
(18, 14, 3, 2, 240);

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
(14, 1, '2026-04-10 18:38:00', 240);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `ventes`
--
ALTER TABLE `ventes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
