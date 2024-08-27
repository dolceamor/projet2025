-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 26 août 2024 à 19:11
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
-- Base de données : `mon_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `applications`
--

INSERT INTO `applications` (`id`, `name`, `firstname`, `contact`, `email`, `cv`) VALUES
(1, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(2, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(3, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(4, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(5, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(6, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `email`, `mot_de_passe`) VALUES
(0, 'vanessa@gmail.com', '$2y$10$04Dzra1liOuBOCflTlTtKuH'),
(0, 'angedanou@gmail.com', '$2y$10$aHi2B2PzqzuBd6Shj7Ee.eN'),
(0, 'vanessa@gmail.com', '$2y$10$RRoMvdcD2QRRH7dU0XDT1.c'),
(0, 'angedanou@gmail.com', '$2y$10$VdTMYUHL9dZc7kRutdEmFuP'),
(0, 'blanchetchuisseu68@gmail.com', '$2y$10$xAlWS3Edy58E4dZXBXO9Uuk');

-- --------------------------------------------------------

--
-- Structure de la table `connexionprestataire`
--

CREATE TABLE `connexionprestataire` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `connexionprestataire`
--

INSERT INTO `connexionprestataire` (`id`, `email`, `mot_de_passe`) VALUES
(1, 'angedonfack@gmail.com', '$2y$10$C3KdkSkBSxxtQ4sGk6o/ouqxtkmaYncfAQFjKlOmthgHugJE.8KCG'),
(2, 'tchuisse@gmail.com', '$2y$10$NJbJFAFBFoefmkuy2CYDqe3zo2v99NzQkNf4U/xQdyc9Snw1lwn3S'),
(3, 'tchuisseu@gmail.com', '$2y$10$pJ9N8n6ENMMjIsHc7p9Sf.V1eAWGp4v20QGvWPbWnSc/jtblcc8S2');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `contact`, `email`, `mot_de_passe`) VALUES
(0, 'mafre', 'blanche', 2147483647, 'blanchetchuisseu68@gmail.com', '$2y$10$S71wN.ennZjG08FRYW5es.s'),
(0, 'mafre', 'blanche', 2147483647, 'vanessa@gmail.com', '$2y$10$v0J41FD07iEwEvLbQTCmBec'),
(0, 'wandjie', 'vanessa', 657839263, 'blanchetchuisseu68@gmail.com', '$2y$10$wk8CDB/vkqNslHYJp0J/5e3');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptionprestataire`
--

CREATE TABLE `inscriptionprestataire` (
  `id` int(11) NOT NULL,
  `nom_et_prenom` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `categorie_de_service` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptionprestataire`
--

INSERT INTO `inscriptionprestataire` (`id`, `nom_et_prenom`, `contact`, `categorie_de_service`, `email`, `mot_de_passe`) VALUES
(1, 'BLANCHE TCHUISSEu', 687798888, 'coiffeuse', 'blanchetchuisseu68@gmail.com', '$2y$10$rwcLfFUcKaCVaM5SZ0ZJu.zK6JA01RDVFjkB9YIrEbs.o3bgeuN1G'),
(2, 'tchuisseu blanche', 657839263, 'coiffeuse', 'blanchetchuisse@gmail.com', '$2y$10$hQDn0ychPKy4SWq.4Hz1leJlTteF.wz5vODbzDHJo.k89wCfpbldS');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `services` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `name`, `email`, `phone`, `photo`, `services`, `salary`, `date`) VALUES
(2, 'tchuisseu', 'blanchetchuisseu68@gmail.com', '657839263', 'uploads/Snapchat-1519104219_103536.jpg', 'Infirmier', 32, '2024-07-30'),
(4, 'ange', 'angedonfack@gmail.com', '677889900', 'uploads/Snapchat-30005744_103522.jpg', 'Infirmier', 2, '2024-08-14'),
(8, 'syntiche', 'syntiche@gmail.com', '677899099', 'uploads/fe96c65cd10dd4627acdacf7105e966d.jpg', 'Comptable', 26, '2024-08-28'),
(9, 'ange', 'blanchetchuisse@gmail.com', '6778899000', 'uploads/04aab8bd2b295486d1675e802a4b9495.jpg', 'Coiffure', 14, '2024-08-14'),
(10, 'tchuisseu', 'blanchetchuisse@gmail.com', '6778899000', 'uploads/421f63d0749ea0f1e91db21b02bd0a6c.jpg', 'Coiffure', 12, '2024-02-20'),
(11, 'BLANCHE TCHUISSEU', 'blanchetchuisseu68@gmail.com', '0123456789', 'uploads/Snapchat-1948734591_103508.jpg', 'Electriciens', 100, '2024-08-28'),
(12, 'BLANCHE TCHUISSEU', 'blanchetchuisseu68@gmail.com', '0123456789', 'uploads/Snapchat-1948734591_103508.jpg', 'Electriciens', 100, '2024-08-28'),
(13, 'tchuisseu', 'blanchetchuisse@gmail.com', '6778899000', 'uploads/Snapchat-398887682_103529.jpg', 'Comptable', 222, '2024-07-29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `connexionprestataire`
--
ALTER TABLE `connexionprestataire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `inscriptionprestataire`
--
ALTER TABLE `inscriptionprestataire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `connexionprestataire`
--
ALTER TABLE `connexionprestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `inscriptionprestataire`
--
ALTER TABLE `inscriptionprestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
