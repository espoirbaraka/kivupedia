-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 déc. 2022 à 09:08
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `congopedia`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_abonnement`
--

CREATE TABLE `t_abonnement` (
  `CodeAbonnement` int(11) NOT NULL,
  `CodeCompte` int(11) NOT NULL,
  `CodeDomaine` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_compte`
--

CREATE TABLE `t_categorie_compte` (
  `CodeCategorie` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_categorie_compte`
--

INSERT INTO `t_categorie_compte` (`CodeCategorie`, `Categorie`) VALUES
(1, 'Admin'),
(2, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_ouvrage`
--

CREATE TABLE `t_categorie_ouvrage` (
  `CodeCategorie` int(11) NOT NULL,
  `Categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_categorie_ouvrage`
--

INSERT INTO `t_categorie_ouvrage` (`CodeCategorie`, `Categorie`) VALUES
(1, 'Livre'),
(3, 'Memoire'),
(4, 'Roman'),
(5, 'TFC'),
(6, 'Articles scientifiques');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_personne`
--

CREATE TABLE `t_categorie_personne` (
  `CodeCategorie` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_categorie_personne`
--

INSERT INTO `t_categorie_personne` (`CodeCategorie`, `Categorie`) VALUES
(1, 'Docteur'),
(2, 'Prof Docteur');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_question`
--

CREATE TABLE `t_categorie_question` (
  `CodeCategorie` int(11) NOT NULL,
  `Categorie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_categorie_question`
--

INSERT INTO `t_categorie_question` (`CodeCategorie`, `Categorie`) VALUES
(2, 'ITEM'),
(3, 'Examen'),
(4, 'Devoir'),
(5, 'Interrogation');

-- --------------------------------------------------------

--
-- Structure de la table `t_compte`
--

CREATE TABLE `t_compte` (
  `CodeCompte` int(11) NOT NULL,
  `NomPersonne` varchar(50) NOT NULL,
  `PostnomPersonne` varchar(50) NOT NULL,
  `PrenomPersonne` varchar(50) DEFAULT NULL,
  `TelephonePersonne` varchar(15) NOT NULL,
  `EmailPersonne` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Image` text NOT NULL,
  `CodeCategoriePersonne` int(11) DEFAULT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_compte`
--

INSERT INTO `t_compte` (`CodeCompte`, `NomPersonne`, `PostnomPersonne`, `PrenomPersonne`, `TelephonePersonne`, `EmailPersonne`, `Password`, `Image`, `CodeCategoriePersonne`, `Created_on`, `Statut`) VALUES
(11, 'Baraka', 'Bigega', 'Espoir', '+243977553723', 'esbarakabigega@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', NULL, '2022-01-09 13:45:31', 1),
(12, 'Akilimali', 'Baraka', 'Michael', '+243971292017', 'mick@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 2, '2022-01-12 14:42:11', 1),
(13, 'Ismael', 'Baraka', 'Bigega', '+2439977553723', 'isma@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 2, '2022-01-09 15:04:18', 1),
(14, 'Siwa', 'Mumbere', 'Carin', '+2439977553723', 'siwamumberecarin1998@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 2, '2022-01-09 17:13:55', 0),
(16, 'Akilimali ', 'Badesi', 'Gulain', '0977553643', 'gullain@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', NULL, '2022-01-09 13:45:31', 1),
(17, 'Abio', 'Bamongoyo', 'Gaetan', '+2439776655442', 'gaetan@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', NULL, '2022-01-09 13:52:53', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_domaine`
--

CREATE TABLE `t_domaine` (
  `CodeDomaine` int(11) NOT NULL,
  `Domaine` varchar(200) NOT NULL,
  `Visited` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_domaine`
--

INSERT INTO `t_domaine` (`CodeDomaine`, `Domaine`, `Visited`, `Created_on`, `Created_by`) VALUES
(1, 'Histoire', 0, '2022-01-07 11:30:20', 0),
(2, 'Geographie', 0, '2022-01-07 11:30:20', 0),
(3, 'Informatique', 0, '2022-12-07 17:57:56', 0),
(4, 'Agronomie', 0, '2022-01-12 14:12:03', 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_image`
--

CREATE TABLE `t_image` (
  `CodeImage` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Descriprition` text DEFAULT NULL,
  `CodeOuvrage` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_image`
--

INSERT INTO `t_image` (`CodeImage`, `Image`, `Descriprition`, `CodeOuvrage`, `Created_on`) VALUES
(1, 'IMG-20220106-WA0032.jpg', NULL, 15, '2022-01-10 14:37:45'),
(2, 'HEALTH-MALAMU.png', NULL, 15, '2022-01-10 14:42:27'),
(3, '16418257987216217761794405275028.jpg', NULL, 15, '2022-01-10 14:43:21'),
(4, '16418258530948566092191486078672.jpg', NULL, 15, '2022-01-10 14:44:13'),
(5, 'Congo flag.jpg', NULL, 16, '2022-01-10 18:09:30'),
(6, 'Copie de logos ISTA.jpg', NULL, 16, '2022-01-10 18:10:00'),
(7, 'docteur.png', NULL, 17, '2022-01-10 18:12:56'),
(8, '_MG_0039.jpg', NULL, 13, '2022-01-10 18:19:47'),
(9, '16418399549178493304488260571776.jpg', NULL, 16, '2022-01-10 18:39:11'),
(10, 'agroal.JPG', NULL, 21, '2022-01-12 17:36:34');

-- --------------------------------------------------------

--
-- Structure de la table `t_langue`
--

CREATE TABLE `t_langue` (
  `CodeLangue` int(11) NOT NULL,
  `Langue` varchar(100) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_langue`
--

INSERT INTO `t_langue` (`CodeLangue`, `Langue`, `Created_on`) VALUES
(1, 'Francais', '2022-01-07 11:29:35'),
(2, 'Anglais', '2022-01-07 11:29:35'),
(3, 'Swahili', '2022-01-07 11:29:51');

-- --------------------------------------------------------

--
-- Structure de la table `t_lecture`
--

CREATE TABLE `t_lecture` (
  `CodeLecture` int(11) NOT NULL,
  `Created_On` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CodeLivre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_lecture`
--

INSERT INTO `t_lecture` (`CodeLecture`, `Created_On`, `CodeLivre`) VALUES
(1, '2022-12-07 10:43:42', 20),
(2, '2022-12-07 10:43:42', 20),
(3, '2022-12-07 10:43:42', 20),
(4, '2022-12-07 10:43:42', 21),
(5, '2022-12-07 10:43:42', 22),
(6, '2022-12-07 10:43:42', 21),
(7, '2022-12-07 10:43:42', 21),
(8, '2022-12-07 10:43:42', 25),
(9, '2022-12-07 10:43:42', 24),
(10, '2022-12-07 10:43:42', 20);

-- --------------------------------------------------------

--
-- Structure de la table `t_like`
--

CREATE TABLE `t_like` (
  `CodeLike` int(11) NOT NULL,
  `CodeCompte` int(11) NOT NULL,
  `CodeOuvrage` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_livre`
--

CREATE TABLE `t_livre` (
  `CodeLivre` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `SousTitre` text NOT NULL,
  `Description` text NOT NULL,
  `AuteurPrincipal` varchar(200) NOT NULL,
  `NombrePage` int(11) NOT NULL,
  `NomEditeur` varchar(200) DEFAULT NULL,
  `LieuEdition` varchar(200) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Fichier_livre` text NOT NULL,
  `Image` text NOT NULL,
  `CodeLangue` int(11) NOT NULL,
  `CodeDomaine` int(11) NOT NULL,
  `CodeSousDomaine` int(11) NOT NULL,
  `CodeCompte` int(11) DEFAULT NULL,
  `CodeAdmin` int(11) DEFAULT NULL,
  `CodePropriete` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Readed` int(11) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Liked` int(11) NOT NULL,
  `Validate` int(11) NOT NULL,
  `Validate_date` date NOT NULL,
  `Invalidate_date` date NOT NULL,
  `Invalidate_by` int(11) NOT NULL,
  `Statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_livre`
--

INSERT INTO `t_livre` (`CodeLivre`, `Titre`, `SousTitre`, `Description`, `AuteurPrincipal`, `NombrePage`, `NomEditeur`, `LieuEdition`, `ISBN`, `Fichier_livre`, `Image`, `CodeLangue`, `CodeDomaine`, `CodeSousDomaine`, `CodeCompte`, `CodeAdmin`, `CodePropriete`, `Created_on`, `Readed`, `Likes`, `Liked`, `Validate`, `Validate_date`, `Invalidate_date`, `Invalidate_by`, `Statut`) VALUES
(16, 'Cours Typescript', 'Typescript', 'Loream', 'Loream', 97, 'Loream', 'Loream', 'Loream', '1670508393.pdf', '1670508393.PNG', 0, 3, 0, NULL, 1, 1, '2022-12-14 13:39:10', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_question`
--

CREATE TABLE `t_question` (
  `CodeQuestion` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Question_created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CodeCategorie` int(11) NOT NULL,
  `CodeDomaine` int(11) NOT NULL,
  `CodeCompte` int(11) NOT NULL,
  `Statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_reponse`
--

CREATE TABLE `t_reponse` (
  `CodeReponse` int(11) NOT NULL,
  `CodeQuestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_sous_domaine`
--

CREATE TABLE `t_sous_domaine` (
  `CodeSousDomaine` int(11) NOT NULL,
  `Sous_domaine` varchar(250) NOT NULL,
  `CodeDomaine` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_sous_domaine`
--

INSERT INTO `t_sous_domaine` (`CodeSousDomaine`, `Sous_domaine`, `CodeDomaine`, `Created_on`) VALUES
(3, 'Geo-industrielle', 2, '2022-12-07 19:00:33'),
(4, 'Geo-agricole', 2, '2022-12-07 20:21:45'),
(5, 'Programmation', 3, '2022-12-08 12:40:03'),
(6, 'Réseau', 3, '2022-12-08 12:40:12'),
(7, 'Bureautique', 3, '2022-12-08 12:40:22');

-- --------------------------------------------------------

--
-- Structure de la table `t_superadmin`
--

CREATE TABLE `t_superadmin` (
  `CodeSuper` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Last_connection` datetime NOT NULL,
  `NomComplet` varchar(200) NOT NULL,
  `Photo` text NOT NULL,
  `CodeCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_superadmin`
--

INSERT INTO `t_superadmin` (`CodeSuper`, `Email`, `Password`, `Created_on`, `Last_connection`, `NomComplet`, `Photo`, `CodeCategorie`) VALUES
(1, 'esbarakabigega@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2022-12-14 10:53:41', '2022-12-14 00:00:00', 'Baraka Bigega Espoir', '', 1),
(3, 'hortencekitobi@gmail.com', '7b2e9f54cdff413fcde01f330af6896c3cd7e6cd', '2022-12-07 17:50:28', '0000-00-00 00:00:00', 'Hortence Kitobi', '', 1),
(10, 'passybayongwa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-12-07 17:50:19', '0000-00-00 00:00:00', 'Passy Bayongwa', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_abonnement`
--
ALTER TABLE `t_abonnement`
  ADD PRIMARY KEY (`CodeAbonnement`);

--
-- Index pour la table `t_categorie_compte`
--
ALTER TABLE `t_categorie_compte`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Index pour la table `t_categorie_ouvrage`
--
ALTER TABLE `t_categorie_ouvrage`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Index pour la table `t_categorie_personne`
--
ALTER TABLE `t_categorie_personne`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Index pour la table `t_categorie_question`
--
ALTER TABLE `t_categorie_question`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Index pour la table `t_compte`
--
ALTER TABLE `t_compte`
  ADD PRIMARY KEY (`CodeCompte`),
  ADD UNIQUE KEY `un_mail` (`EmailPersonne`);

--
-- Index pour la table `t_domaine`
--
ALTER TABLE `t_domaine`
  ADD PRIMARY KEY (`CodeDomaine`);

--
-- Index pour la table `t_image`
--
ALTER TABLE `t_image`
  ADD PRIMARY KEY (`CodeImage`);

--
-- Index pour la table `t_langue`
--
ALTER TABLE `t_langue`
  ADD PRIMARY KEY (`CodeLangue`);

--
-- Index pour la table `t_lecture`
--
ALTER TABLE `t_lecture`
  ADD PRIMARY KEY (`CodeLecture`);

--
-- Index pour la table `t_like`
--
ALTER TABLE `t_like`
  ADD PRIMARY KEY (`CodeLike`);

--
-- Index pour la table `t_livre`
--
ALTER TABLE `t_livre`
  ADD PRIMARY KEY (`CodeLivre`);

--
-- Index pour la table `t_question`
--
ALTER TABLE `t_question`
  ADD PRIMARY KEY (`CodeQuestion`);

--
-- Index pour la table `t_reponse`
--
ALTER TABLE `t_reponse`
  ADD PRIMARY KEY (`CodeReponse`);

--
-- Index pour la table `t_sous_domaine`
--
ALTER TABLE `t_sous_domaine`
  ADD PRIMARY KEY (`CodeSousDomaine`);

--
-- Index pour la table `t_superadmin`
--
ALTER TABLE `t_superadmin`
  ADD PRIMARY KEY (`CodeSuper`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_abonnement`
--
ALTER TABLE `t_abonnement`
  MODIFY `CodeAbonnement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_categorie_compte`
--
ALTER TABLE `t_categorie_compte`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_categorie_ouvrage`
--
ALTER TABLE `t_categorie_ouvrage`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_categorie_personne`
--
ALTER TABLE `t_categorie_personne`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `t_categorie_question`
--
ALTER TABLE `t_categorie_question`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_compte`
--
ALTER TABLE `t_compte`
  MODIFY `CodeCompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `t_lecture`
--
ALTER TABLE `t_lecture`
  MODIFY `CodeLecture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `t_livre`
--
ALTER TABLE `t_livre`
  MODIFY `CodeLivre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `t_sous_domaine`
--
ALTER TABLE `t_sous_domaine`
  MODIFY `CodeSousDomaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `t_superadmin`
--
ALTER TABLE `t_superadmin`
  MODIFY `CodeSuper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
