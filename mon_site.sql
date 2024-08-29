-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 29 août 2024 à 19:29
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
(6, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(7, 'tchuisse', 'blanche', '987654', 'blanchetchuisseu68@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(8, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(9, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(10, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(11, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(12, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(13, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf'),
(14, 'tchuisseu', 'blanche', '77666666', 'b@gmail.com', 'uploads/Exercices BD1._022109.pdf');

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
(0, 'wandjie', 'vanessa', 657839263, 'blanchetchuisseu68@gmail.com', '$2y$10$wk8CDB/vkqNslHYJp0J/5e3'),
(0, 'mafre', 'blanche', 2147483647, 'b@gmail.com', '$2y$10$.YsyS6irOzfHUeabDa/R3u8'),
(0, 'mafre', 'blanche', 2147483647, 'b@gmail.com', '$2y$10$O7mVwhKcntOFGeAQ0L5Sde1'),
(0, 'mafre', 'vanessa', 2147483647, 'manuella@gmail.com', '$2y$10$45c.olbL8XjSZmHnTcfR6eW'),
(0, 'mafre', 'vanessa', 2147483647, 'manou@gmail.com', '$2y$10$isRwKoH7GFSrRTE6IZkSBOI'),
(0, 'mafre', 'blanche', 2147483647, 'vaness@gmail.com', '$2y$10$kIS8NsaQ29sH5mlfTEoVMuH'),
(0, 'root', 'bbb', 8888, 'bn@gmail.com', '$2y$10$gxUX/8ixDQPieG8m6WaaJui'),
(0, 'ebami', 'lili', 123456767, 'ebam@gmail.com', '$2y$10$lJH72pNwM/BiMgjmwPKZyeO');

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
(2, 'tchuisseu blanche', 657839263, 'coiffeuse', 'blanchetchuisse@gmail.com', '$2y$10$hQDn0ychPKy4SWq.4Hz1leJlTteF.wz5vODbzDHJo.k89wCfpbldS'),
(3, 'yvanna', 124567890, 'couturiere', 'yvanna@gmail.com', '$2y$10$3z/015MgVH/TkGcB76wG1.nsYIU9gTViFW69TomJJp0Fx7AfUuy.6');

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
(8, 'syntiche', 'syntiche@gmail.com', '677899099', 'uploads/fe96c65cd10dd4627acdacf7105e966d.jpg', 'Comptable', 26, '2024-08-28'),
(14, 'peyebouo', 'manuella@gmail.com', '6778899000', 'uploads/5c0187a54205a22881e05e29c38b3fbe.jpg', 'Repetiteur', 50, '2024-08-13'),
(15, 'ebami', 'ebami@gmail.com657839253', '657833222', 'uploads/9b574b84a47cd814d487c7941a912bec.jpg', 'Plombier', 70, '2024-08-02'),
(16, 'tchuisseu', 'blanchetchuisse@gmail.com', '6778899000', 'uploads/img.jpg', 'Comptable', 200, '2024-01-30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `inscriptionprestataire`
--
ALTER TABLE `inscriptionprestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
