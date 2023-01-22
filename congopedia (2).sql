-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 22 jan. 2023 à 07:03
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
-- Structure de la table `t_annee_academique`
--

CREATE TABLE `t_annee_academique` (
  `CodeAnnee` int(11) NOT NULL,
  `Annee` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_annee_academique`
--

INSERT INTO `t_annee_academique` (`CodeAnnee`, `Annee`) VALUES
(1, '1990-1991'),
(2, '1991-1992'),
(4, '1992-1993'),
(5, '2021-2022');

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
-- Structure de la table `t_categorie_memoire`
--

CREATE TABLE `t_categorie_memoire` (
  `CodeCategorie` int(11) NOT NULL,
  `Categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_categorie_memoire`
--

INSERT INTO `t_categorie_memoire` (`CodeCategorie`, `Categorie`) VALUES
(1, 'TFC'),
(2, 'Memoire'),
(3, 'These');

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
  `Email` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Photo` text NOT NULL,
  `Last_connection` datetime NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_compte`
--

INSERT INTO `t_compte` (`CodeCompte`, `NomPersonne`, `PostnomPersonne`, `PrenomPersonne`, `TelephonePersonne`, `Email`, `Password`, `Photo`, `Last_connection`, `Created_on`, `Statut`) VALUES
(11, 'Baraka', 'Bigega', 'Espoir', '+243977553723', 'esbarakabigega@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '2023-01-21 21:12:34', '2023-01-21 20:12:34', 1),
(12, 'Akilimali', 'Baraka', 'Michael', '+243971292017', 'mick@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '2023-01-21 20:50:05', '2023-01-21 19:50:05', 1),
(13, 'Ismael', 'Baraka', 'Bigega', '+2439977553723', 'isma@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '0000-00-00 00:00:00', '2022-01-09 15:04:18', 1),
(14, 'Siwa', 'Mumbere', 'Carin', '+2439977553723', 'siwamumberecarin1998@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '0000-00-00 00:00:00', '2022-01-09 17:13:55', 0),
(16, 'Akilimali ', 'Badesi', 'Gulain', '0977553643', 'gullain@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '0000-00-00 00:00:00', '2022-01-09 13:45:31', 1),
(17, 'Abio', 'Bamongoyo', 'Gaetan', '+2439776655442', 'gaetan@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '0000-00-00 00:00:00', '2022-01-09 13:52:53', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_cours`
--

CREATE TABLE `t_cours` (
  `CodeCours` int(11) NOT NULL,
  `Cours` text NOT NULL,
  `cours_slug` text NOT NULL,
  `Auteur` varchar(254) NOT NULL,
  `Readed` int(11) NOT NULL,
  `Liked` int(11) NOT NULL,
  `Fichier` text NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `Created_On` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CodeCompte` int(11) NOT NULL,
  `CodeAdmin` int(11) NOT NULL,
  `CodePropriete` int(11) NOT NULL,
  `Statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_cours`
--

INSERT INTO `t_cours` (`CodeCours`, `Cours`, `cours_slug`, `Auteur`, `Readed`, `Liked`, `Fichier`, `Institution`, `Created_On`, `CodeCompte`, `CodeAdmin`, `CodePropriete`, `Statut`) VALUES
(1, 'Labo info', 'labo-info-20230108-134430', '', 3, 0, '1671453462.pdf', 'ISIG-GOMA', '2023-01-21 19:26:46', 0, 1, 1, 1),
(2, 'Labo info', 'labo-info-20230108-134430', 'Prof KALA', 0, 0, '1671452062.pdf', 'ISIG-GOMA', '2023-01-08 12:44:30', 0, 1, 1, 1),
(3, 'E-commerce', 'e-commerce-20230108-134430', 'CT Serge kikobya', 6, 0, '1673181856.pdf', 'ISIG-GOMA', '2023-01-21 14:50:58', 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_domaine`
--

CREATE TABLE `t_domaine` (
  `CodeDomaine` int(11) NOT NULL,
  `Domaine` varchar(200) NOT NULL,
  `domain_slug` text NOT NULL,
  `Visited` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_domaine`
--

INSERT INTO `t_domaine` (`CodeDomaine`, `Domaine`, `domain_slug`, `Visited`, `Created_on`, `Created_by`) VALUES
(1, 'Histoire', 'histoire-20230107-162839', 0, '2023-01-07 15:28:39', 0),
(2, 'Informatique generale', 'informatique-generale-20230107-162839', 0, '2023-01-07 15:28:39', 0),
(3, 'Informatique', 'informatique-20230107-162839', 0, '2023-01-07 15:28:39', 0),
(4, 'Agronomie', 'agronomie-20230107-162839', 0, '2023-01-07 15:28:39', 0),
(5, 'Geographie', 'geographie-20230107-164054', 0, '2023-01-07 15:40:54', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_faculte`
--

CREATE TABLE `t_faculte` (
  `CodeFaculte` int(11) NOT NULL,
  `Faculte` varchar(250) NOT NULL,
  `faculte_slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_faculte`
--

INSERT INTO `t_faculte` (`CodeFaculte`, `Faculte`, `faculte_slug`) VALUES
(2, 'Informatique de Gestion', 'informatique-de-gestion-20230108-125706'),
(3, 'Réseau et télécommunication', 'reseau-et-telecommunication-20230108-125706');

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
-- Structure de la table `t_item`
--

CREATE TABLE `t_item` (
  `CodeItem` int(11) NOT NULL,
  `Fichier` text NOT NULL,
  `TypeFichier` varchar(50) NOT NULL,
  `CodeSession` int(11) NOT NULL,
  `Created_On` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CodeOption` int(11) NOT NULL,
  `CodeAnnee` int(11) NOT NULL,
  `CodeAdmin` int(11) DEFAULT NULL,
  `CodeCompte` int(11) DEFAULT NULL,
  `CodePropriete` int(11) NOT NULL,
  `Statut` int(11) NOT NULL,
  `Readed` int(11) NOT NULL,
  `Liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_item`
--

INSERT INTO `t_item` (`CodeItem`, `Fichier`, `TypeFichier`, `CodeSession`, `Created_On`, `CodeOption`, `CodeAnnee`, `CodeAdmin`, `CodeCompte`, `CodePropriete`, `Statut`, `Readed`, `Liked`) VALUES
(1, '1671276875.pdf', 'pdf', 1, '2023-01-08 13:06:12', 3, 5, 1, NULL, 1, 1, 0, 0),
(2, '1671453444.pdf', 'pdf', 5, '2023-01-09 10:31:06', 3, 5, 1, NULL, 1, 1, 3, 0),
(3, '1673260259.PNG', 'png', 2, '2023-01-09 10:31:21', 3, 5, 1, NULL, 1, 1, 1, 0);

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
  `book_slug` text NOT NULL,
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

INSERT INTO `t_livre` (`CodeLivre`, `Titre`, `book_slug`, `SousTitre`, `Description`, `AuteurPrincipal`, `NombrePage`, `NomEditeur`, `LieuEdition`, `ISBN`, `Fichier_livre`, `Image`, `CodeLangue`, `CodeDomaine`, `CodeSousDomaine`, `CodeCompte`, `CodeAdmin`, `CodePropriete`, `Created_on`, `Readed`, `Likes`, `Liked`, `Validate`, `Validate_date`, `Invalidate_date`, `Invalidate_by`, `Statut`) VALUES
(16, 'Cours Typescript', 'cours-typescript-20230106-150030', 'Typescript', 'Loream', 'Loream', 97, 'Loream', 'Loream', 'Loream', '1671450027.pdf', '1672224098.PNG', 0, 3, 0, NULL, 1, 1, '2023-01-06 14:00:30', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(17, 'Cours Typescript', 'cours-typescript-20230106-150030', 'Cours de typescript avancé', '<p>okey</p>', '', 66, 'Loream', 'Loream', '', '1671451467.pdf', '1671356234.PNG', 0, 3, 0, NULL, 1, 1, '2023-01-06 14:00:30', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 0),
(18, 'Cours Typescript', 'cours-typescript-20230106-150030', '', '', '', 66, '', '', '', '1671360853.pdf', '1672230815.jpg', 1, 3, 0, NULL, 1, 1, '2023-01-06 14:00:30', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(19, 'Cours Typescript', 'cours-typescript-20230106-150030', '', '', '', 66, '', '', '', '1671361002.pdf', '1671361002.PNG', 2, 3, 6, NULL, 1, 1, '2023-01-06 14:00:30', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(20, 'La république démocratique du Congo ', 'la-republique-democratique-du-congo-20230106-150030', 'Les droits humains, les conflits et la construction / destruction de l\'etat', 'Ce livre décrit l\'historique des guerres qu\'a subit la RDC', 'Mbuyi Kabunda', 115, 'Fondacio solidarita UB et inreve', 'Planobal', '', 'Republique_Democratique_Congo_droits_humains_fra.pdf', 'Screenshot_20220202-185521_Phoenix~2.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-07 18:43:38', 65, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(21, 'Cahier de droit', 'cahier-de-droit-20230106-150030', 'Regards sur le droit Administratif suisse', 'Looking at suiss administration law from a Quebec perspective, this paper outlines ...', 'Pierre Issalys', 78, 'Faculté de droit de l\'Université Laval', 'Suisse', '', 'Cahier de droit.pdf', 'IMG_20220202_223600_645.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(22, 'Code de justice administrative', 'code-de-justice-administrative-20230106-150030', 'Code de justice administrative', 'Code de justice administrative', 'droit.org', 300, 'droit org', 'France', '', 'Code de justice administrative.pdf', 'IMG_20220202_225042_410.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(23, 'Bibliographie pour le concours national d\'agregation de droit public', 'bibliographie-pour-le-concours-national-dagregation-de-droit-public-20230106-150030', 'Bibliographie', 'Ministère ESU', 'Ministère E.S france', 64, 'Ministère ESU France', 'France', '', 'bibliographie pour le concours d\'agregation de droit public_2019-2020.pdf', 'Screenshot_20220202-230222.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 45, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(24, 'Droit administratif et l\'invention du Juge', 'droit-administratif-et-linvention-du-juge-20230106-150030', 'Cours de droit administratif', 'Cours de droit administratif', 'Pr Gilles  J. Guglieslmi 2004', 189, 'Pr Gilles', 'Prof Gilles', '', 'droit administratif et l\'invention du juge.pdf', 'IMG_20220202_231757_288.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(25, 'Droit administratif de biens', 'droit-administratif-de-biens-20230106-150030', 'Domaine public', 'Le domaine de personnes publiques et le domaine des personnes de privées', 'Association Bi-DEUG et DEJA', 54, 'http://www.bideug-deja.net', 'http://www.bideug-deja.net', '', 'Droit administratifde biens.pdf', 'IMG_20220202_233131_558.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(26, 'Formation au diplôme de Docteur en Médecine', 'formation-au-diplome-de-docteur-en-medecine-20230106-150030', 'Formation au diplôme de Docteur en Médecine', 'Objectifs: former des médecins répondant au profile de soins de première ligne et capables de : \r\n1. Faire preuve de qualité humaines psychologiques et morales ', 'Pr Aderrahim AZZOUZI', 13, 'Université Mohamed Premier', 'Maroc', '', 'Diplome de docteur en medecine.pdf', 'IMG_20220202_235214_462.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(27, 'Guide clinique et thérapeutique', 'guide-clinique-et-therapeutique-20230106-150030', 'Guide clinique', 'Guides par médecins sans frontières:\r\nGuides pour Les programmes curatifs des hôpitaux  et des dispensaries à l\'usage des prescripteurs', 'Médecins sans frontières', 369, 'Médecins sans frontières', 'France', '', 'GUIDE CLINIQUE THERAPEUTIQUE.pdf', 'IMG_20220203_000957_193.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(28, 'Guide pratique de l\'interne en médecine', 'guide-pratique-de-linterne-en-medecine-20230106-150030', 'Guide pratique', 'Guide réalisé à partir de travail de thèse', 'Anne Sophie', 56, 'Université Claude Bernard LYON1', 'Lyon France', '', 'guide-pratique-interne-de-medecine-generale-2015-2016.pdf', 'IMG_20220203_004944_950.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 41, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(29, 'Guide du diplôme d\'études spécialisées de MEDECINE GENERALE Promotion 2015', 'guide-du-diplome-detudes-specialisees-de-medecine-generale-promotion-2015-20230106-150030', 'Guide du diplôme spécialisé', 'Six stages cliniques à l\'hopital et en ambulatoire', 'Mme Fréderique VIDAL', 106, 'Université Nice SOPHIA', 'Lyon France', '', 'Guide_du_DES_de_Medecine_Generale_Rentree_2015-2.pdf', 'IMG_20220203_010721_957.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(30, 'Cours de biochimie structurale', 'cours-de-biochimie-structurale-20230106-150030', 'Biochimie structurale', 'La biochimie ou chimie du vivant est une science des bases chimiques de la vie', 'Université Ferhat', 97, 'Université FERHAT ABBAS', 'Algers', '', 'Biochimie_structurale.pdf', 'IMG_20220203_011817_243.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-08 16:58:35', 50, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(31, 'Biologie Céllulaire', 'biologie-cellulaire-20230106-150030', 'Exercices et méthodes', 'Un outil pédagogique pour aider Les étudiants des prémières années d\'études supérieures à appréhender les concepts fondamentaux de la biologie', 'Marc Thiry', 28, 'Editeur de savours Dunod', 'Dunod,2014', '', 'BIOLOGIE CELLULAIRE.pdf', 'IMG_20220203_012749_006.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(32, 'La biologie de A à Z', 'la-biologie-de-a-a-z-20230106-150030', 'Exposition scientifique', '', 'Pascal Boulanger', 27, 'Université Paris Sud 1', 'France', '', 'Biologie-A-Z.pdf', 'IMG_20220203_014140_433.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 46, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(33, 'Microbiologie du sol', 'microbiologie-du-sol-20230106-150030', 'Cours de microbiologie du sol', 'Microbiologie du sol', 'CI MOUREAUX', 164, 'Ortsom', 'ORSTOM', '', 'MICROBIOLOGIE DU SOL.pdf', 'IMG_20220203_015247_309.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(34, 'Agronomie générale', 'agronomie-generale-20230106-150030', 'Baccalauréat en agronomie', 'La societé reconnait de plus en plus l\'importance des professionnels qui pratiquent l\'agronomie avec compétence et professionalisme', 'Ulaval.ca', 16, 'www.fsaa.ulaval.ca', 'Canada', '', 'AGRONOMIEGENERALE BAC1.pdf', 'IMG_20220203_020111_604.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(35, 'L\'agronomie au sens large', 'lagronomie-au-sens-large-20230106-150030', 'L\'agronomie au sens large', 'Une histoire de son champ, de ses définitions et Des mots pour l\'identifier', 'Gilles Denis', 30, 'Gilles Denis', 'Gilles Denis', '', 'AGRONOMIE AU SENS LARGE.pdf', 'IMG_20220203_021122_662.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 42, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(36, 'Dictionnaire portatif du cultivateur', 'dictionnaire-portatif-du-cultivateur-20230106-150030', 'Dictionnaire portatif du cultivateur', 'Dictionnaire de l\'agronome', 'Tome premier', 687, 'Tome Premier', 'Paris', '', 'DICTIONNAIRE PORTATIF D\'AGRONOMIE.pdf', 'IMG_20220203_022453_882.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(37, 'Mini Manuel de Chimie organique', 'mini-manuel-de-chimie-organique-20230106-150030', 'Mini Manuel de Chimie organique', 'Chimie Organique cours + exercises', 'Pierre Krausz , Rachida Benhaddou , Robert Granet', 258, 'Dunod', 'Paris', '', 'mini-manuel-de-chimie-organique.pdf', 'IMG_20220204_010623_360.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(38, 'Chimie générale', 'chimie-generale-20230106-150030', 'Chimie générale', 'Chimie générale de Eddy et Jean luc', 'Eddy Flamand , Jean luc Allard', 54, 'Modulo', 'Modulo', '', 'CHIMIE GENERALE_EDDY FLAMAND.pdf', 'IMG_20220204_011933_993.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(39, 'Exercices résolus de chimie générale', 'exercices-resolus-de-chimie-generale-20230106-150030', 'Exercices résolus de chimie générale', 'Exercices résolus de chimie', 'Paul Arnauld', 19, 'Dunod', 'Paris', '', 'EXERCICES RESOLUS DE CHIME.pdf', 'IMG_20220204_012517_826.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(40, 'De la science Politique', 'de-la-science-politique-20230106-150030', 'De la science Politique', 'Dans cet article l\'auteur tente de répondre de manière systèmatique aux ', 'Jean Louis Louber del Bayle', 34, 'Politique', 'France', '', 'POLITIQUE DE LA SCIENCE.pdf', 'IMG_20220204_013542_030.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 45, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(41, 'La science administrative', 'la-science-administrative-20230106-150030', 'La science administrative', 'Sciences Administratives', 'Jacques Chevallier', 24, 'Presses universitaire', 'France', '', 'LASCIENCEADMINISTRATIVE JACQUES CHEVALLIER.pdf', 'Screenshot_20220204-014818.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(42, 'Sciences Politiques', 'sciences-politiques-20230106-150030', 'Sciences Politiques', 'Comment se prend une décision à quel niveau de pouvoir\r\nQui pèse réellement sur la décision au profit de quel interet ?', 'Université Saint-Louis', 24, 'Future étudiant 2015-2016', 'Université Saint Louis Bruxelles', '', 'SCIENCES POLITIQUES.pdf', 'IMG_20220204_015838_626.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(43, 'Evaluation et modernisation administrative', 'evaluation-et-modernisation-administrative-20230106-150030', 'Evaluation et modernisation administrative', 'Evaluation et modernisation administrative', 'Luc ROUBAN', 21, 'CNRS', 'CNRS', '', 'EVALUATION ET MODERNISATION ADMINISTRATIVE.pdf', 'IMG_20220204_111314_604.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(44, 'Analyse d\'un problème technique', 'analyse-dun-probleme-technique-20230106-150030', 'Analyse d\'un problème technique', 'Analyse d\'un problème technique', 'Ministère E.S france', 13, 'ESU', 'France', '', 'ANALYSE D\'UN PROBLEME TECHNIQUE.pdf', 'IMG_20220204_114439_329.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(45, 'Introduction à la Statistique descriptive ,cours et exercices avec tableur', 'introduction-a-la-statistique-descriptive-cours-et-exercices-avec-tableur-20230106-150030', 'Introduction à la Statistique descriptive , cours et exercices avec tableur', 'Cours et exercices avec tableur', 'Lucien LEBOUCHER , Marie-José VOISIN', 200, 'Cépaduès-editions', 'France', '', 'INTRODUCTION A LA STATISTIQUE DESCRIPTIVE.pdf', 'IMG_20220204_111314_604.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(46, 'Introduction à la Statistique ', 'introduction-a-la-statistique-20230106-150030', 'Introduction à la Statistique  Exercices corrigés', 'Exercices corrigés .\r\nA l\'usage des étudiants en sciences économiques,médecine , pharmacies, informatique, etc ainsi que des élèves de sécodaires', 'Emile Amzallad , Norbert Piccioli', 350, 'Herman Paris', 'Paris', '', 'INTRODUCTION A LA STATISTIQUE.pdf', 'IMG_20220204_153958_442.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(47, 'Cours de Statistique niveau L1 - L2', 'cours-de-statistique-niveau-l1-l2-20230106-150030', 'Cours de Statistique niveau L1 L2', 'Cours de Statistique niveau L1 L2', 'Kévin Polisano', 230, 'HAL', 'France 2018', '', 'Cours_Statistiques_Polisano.pdf', 'IMG_20220204_161729_265.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(48, 'Mini Manuel de Probabilités et de Statistique', 'mini-manuel-de-probabilites-et-de-statistique-20230106-150030', 'Mini Manuel de Probabilités et Statistique', 'Notions importantes de probabilité', 'Françoise Couty_Fredon', 22, 'Dunod', 'Dunod,2018', '', 'PROBABILITE.pdf', 'IMG_20220204_163351_628.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(49, 'Pilycopié de Bâtiment ,cours avec exercices corrigés', 'pilycopie-de-batiment-cours-avec-exercices-corriges-20230106-150030', 'Pilycopié de Bâtiment ,cours avec exercices corrigés', 'Pilycopié de Bâtiment ,cours avec exercices corrigés', 'Dr Bouderba Bachir', 108, 'Centre Universitaire Algérienne El-Wancgarist', 'Algérie', '', 'Bâtiment COURS AVEC EXERCICES CORRIGES.pdf', 'IMG_20220204_194123_706.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(50, 'Génie Civil : livret des enseignements', 'genie-civil-livret-des-enseignements-20230106-150030', 'Génie Civil : livret des enseignements', 'Livret des enseignements', 'Clermont-Ferrand', 115, 'Campus Universitaire des Cézeaux', 'France', '', 'GENIE CIVIL LIVRET DES ENSEIGNEMENTS.pdf', 'IMG_20220204_195629_147.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(51, 'Introduction au génie civil', 'introduction-au-genie-civil-20230106-150030', 'Introduction au génie civil', 'Découverte professionnelle', 'IIIkirch ,académie de Strabourg', 7, 'EduSCOL', 'France', '', 'INTRODUCTION AU GENIE CIVIL.pdf', 'IMG_20220204_200327_874.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(52, 'Matériaux de construction', 'materiaux-de-construction-20230106-150030', 'Matériaux de construction', 'Matériaux de construction', 'Professeure Karen Scrivener', 158, 'Epfl', 'Londres', '', 'MATERIAUX DE CONSTRUCTION.pdf', 'IMG_20220204_201317_282.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(53, 'Receuil des exercices ,Calcul des structures II', 'receuil-des-exercices-calcul-des-structures-ii-20230106-150030', 'Calcul des structures II', 'Receuil des exercices', 'Abdellatif Khamlichi', 38, 'Abdellatif Khamlichi', 'Algers', '', 'receuil-exercices-beton-arme.pdf', 'IMG_20220204_202012_609.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(54, 'La technologies du génie Civil', 'la-technologies-du-genie-civil-20230106-150030', 'La technologies du génie Civil', 'La technologies du génie Civil', 'Collège Ahuntsic', 39, 'Le grand cégep Moréal', 'Collège Ahuntsic', '', 'TECHNOLOGIE DE GENIE CIVIL.pdf', 'IMG_20220204_202743_018.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(55, 'Les démarches médicales en médecine générale ,une réflection théorique pour des applications pratiques', 'les-demarches-medicales-en-medecine-generale-une-reflection-theorique-pour-des-applications-pratiques-20230106-150030', 'Les démarches médicales en médecine générale ,une réflection théorique pour des applications pratiques', 'Les démarches médicales en médecine générale ,une réflection théorique pour des applications pratiques', 'SMFG', 9, 'SFMG', 'France', '', 'fichier_demarche-medicale-en-mgd28c9.pdf', 'IMG_20220204_204028_644.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(56, 'Déscriptif des modules de la 1ère année des études médicales', 'descriptif-des-modules-de-la-1ere-annee-des-etudes-medicales-20230106-150030', 'Déscriptif des modules de la 1ère année des études médicales', 'Déscriptif des modules de la 1ère année des études médicales', 'El Amrani My Driss', 76, 'Université CADI AYYAD', 'Maroc', '', 'Descriptif des modules de la 1ère année des études.pdf', 'IMG_20220204_204756_949.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 40, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(57, 'Bases de génie civil', 'bases-de-genie-civil-20230106-150030', 'Bases de génie Civil', 'Bases de génie civil', 'Lycée Charles Poncet', 8, 'Lycée Charles Poncet', 'Lycée Charles Poncet', '', 'Bases_Genie_civil_professeur.pdf', 'IMG_20220204_210535_468.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(58, 'Introduction à l\'économie générale contemporaine', 'introduction-a-leconomie-generale-contemporaine-20230106-150030', 'Introduction à l\'économie générale contemporaine', 'Cours d\'économie', 'Anonymous', 183, 'Anonymous', 'France', '', 'cours economie general.pdf', 'IMG_20220204_211716_681.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(59, 'Economie de l\'environnement et développement durable', 'economie-de-lenvironnement-et-developpement-durable-20230106-150030', 'Economie de l\'environnement et développement durable', 'Economie de l\'environnement et développement durable', 'Tom Tienteberg , Lynne Lewis', 31, 'Nouveaux horizons', 'France', '', 'ECONOMIE DE L\'ENVIRONNEMENT ET DE DEVELOPPEMENT DURABLE.pdf', 'IMG_20220204_212309_131.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(60, 'Economie générale contemporaine', 'economie-generale-contemporaine-20230106-150030', 'Economie générale contemporaine', 'Economie générale contemporaine', 'Anonymous', 183, 'Anonymous', 'Paris', '', 'cours economie general.pdf', 'IMG_20220204_211716_681.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 18, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(61, 'Economie et environnement_problèmes et orientation possibles', 'economie-et-environnement-problemes-et-orientation-possibles-20230106-150030', 'Economie et environnement_problèmes et orientation possibles', 'Economie et environnement_problèmes et orientation possibles', 'John Nicolaisen ,Andrew Dean et Peter Hoeller', 41, 'Revue OCEDE', 'Revue OCEDE', '', 'ECONOMIE ET ENVIRONNEMENT _PROBLEMES ET ORIENTATIONS.pdf', 'IMG_20220204_213955_899.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(62, 'Economie et gestion de l\'environnement et des resources naturelles', 'economie-et-gestion-de-lenvironnement-et-des-resources-naturelles-20230106-150030', 'Economie et gestion de l\'environnement et des resources naturelles', 'Economie et gestion de l\'environnement et des resources naturelles', 'Ifdd', 270, 'IFDD', 'France', '', 'ECONOMIE ET GESTION DE L\'ENVIRONNEMENT DES RESSOURCES NATURELLES.pdf', 'IMG_20220204_214614_354.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(63, 'Economie générale en 36 fichiers', 'economie-generale-en-36-fichiers-20230106-150030', 'Economie générale en 36 fichiers', 'Economie générale en 36 fichiers', 'Jean LONGATE , Pascal VANHOVE', 13, 'Dunod', 'Paris', '', 'ECONOMIE GENERALE JEAN LONGATTE.pdf', 'IMG_20220204_215402_516.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(64, 'Economie générale notes de cours', 'economie-generale-notes-de-cours-20230106-150030', 'Economie générale notes de cours', 'Economie générale notes de cours', 'Anonymous', 61, 'Anonymous', 'Anonymous', '', 'Economie Generale UFR Histoire.pdf', 'IMG_20220204_220239_974.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(65, 'Economie générale 2è Edition', 'economie-generale-2e-edition-20230106-150030', 'Economie générale 2è', 'Economie générale', 'Frédéric Poulon', 20, 'Dunod', 'Dunod', '', 'ECONOMIE GENERALE.pdf', 'IMG_20220204_220808_526.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(66, 'Economie Internationale 9è Edition', 'economie-internationale-9e-edition-20230106-150030', 'Economie internationale', 'Economie internationale', 'Bernard Guillochon , Frédéric Peltrault , Baptiste Venet', 29, 'Dunod', 'France', '', 'ECONOMIE INTERNATIONALE.pdf', 'IMG_20220204_221718_206.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(67, 'Economie Politique pour l\'Afrique', 'economie-politique-pour-lafrique-20230106-150030', 'Economie Politique pour l\'Afrique', 'Economie Politique pour l\'Afrique', 'Makhtar Diouf', 316, 'NEAS/ AUPELF', 'Paris', '', 'ECONOMIE POLITIQUE UREF.pdf', 'IMG_20220204_222352_346.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(68, 'Economie Politique', 'economie-politique-20230106-150030', 'Economie Politique', 'Economie Politique 4è Edition', 'Bernard Jurion', 66, 'De boeck', 'Anonymous', '', 'economie politique.pdf', 'IMG_20220204_223007_152.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(69, 'Cours d\'Economie politique Tome I', 'cours-deconomie-politique-tome-i-20230106-150030', 'Cours d\'Economie politique Tome I', 'Cours d\'Economie politique', 'Charles Gide', 225, 'Marcelle Bergeron', 'Quebec', '', 'Guide, Cours d\'économie politique, volume I.pdf', 'IMG_20220204_223940_074.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(70, 'Economie internationale 10è Edition', 'economie-internationale-10e-edition-20230106-150030', 'Economie internationale 10è Edition', 'Economie internationale 10è Edition', 'Paul Krugman , Maurice Obstfeld, Marc Melitz', 29, 'Nouveaux horizons', 'Paris', '', 'krugman_economie INTERNATIONALE.pdf', 'IMG_20220204_224738_877.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(71, 'Finance 2è Edition', 'finance-2e-edition-20230106-150030', 'Finance 2è Edition', 'Finance', 'André Farber , Marie-Paule Laurent , Kim OOSTERLINK,Hugues Pirotte', 321, 'Pearson Education', 'Anonymous', '', 'LIVRE-Finance.pdf', 'IMG_20220204_225834_239.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(72, 'Rapport sur l\'économie numérique 2019', 'rapport-sur-leconomie-numerique-2019-20230106-150030', 'Rapport sur l\'économie numérique 2019', 'Rapport sur l\'économie numérique 2019', 'Nations unies', 27, 'Nations unies', 'Un', '', 'RAPPORT SUR L\'ECONOMIE NUMERIQUE.pdf', 'IMG_20220204_230535_053.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(73, 'Agronomie générale bac1', 'agronomie-generale-bac1-20230106-150030', 'Agronomie générale', 'Agronomie générale', 'Anonymous', 16, 'Programme unique en français au Canada', 'Canada', '', 'AGRONOMIEGENERALE BAC1.pdf', 'IMG_20220205_144909_228.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(74, 'Livre blanc de l\'agriculture de précision', 'livre-blanc-de-lagriculture-de-precision-20230106-150030', 'Livre blanc de l\'agriculture de précision', 'Livre blanc de l\'agriculture de précision', 'Be Api', 24, 'Be Api', 'Anonymous', '', 'Be-Api-Livre-blanc_Interactif de l\'agriculture.pdf', 'IMG_20220205_145712_591.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(75, 'La chimie en agriculture : les tensions et les défits pour l\'agronomie ', 'la-chimie-en-agriculture-les-tensions-et-les-defits-pour-lagronomie-20230106-150030', 'La chimie en agriculture : les tensions et les défits pour l\'agronomie ', 'La chimie en agriculture : les tensions et les défits pour l\'agronomie ', 'Pierre Stenget', 22, 'Rapport INNA', 'Anonymous', '', 'chimie_alimentation_217.pdf', 'IMG_20220205_150744_444.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(76, 'Cours d\'écologie générale', 'cours-decologie-generale-20230106-150030', 'Cours d\'écologie générale', 'Cours d\'écologie générale', 'Anonymous', 66, 'Anonymous', 'Anonymous', '', 'cours-d-ecologie-generale-g1-agro-2016-2017.pdf', 'IMG_20220205_151556_761.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(77, 'Fertilité des sols', 'fertilite-des-sols-20230106-150030', 'Fertilité des sols', 'Fertilité des sols pour les nuls', 'Anonymous', 3, 'Nature', 'Anonymous', '', 'FERTILITE DES SOLS.pdf', 'IMG_20220205_152241_595.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(78, 'Les bases de l\'agriculture  Comprendre la pratique s\'initier à l\'agronomie 4è Edition', 'les-bases-de-lagriculture-comprendre-la-pratique-sinitier-a-lagronomie-4e-edition-20230106-150030', 'Les bases de l\'agriculture  Comprendre la pratique s\'initier à l\'agronomie 4è Edition', 'Les bases de l\'agriculture \r\nComprendre la pratique s\'initier à l\'agronomie', 'Philippe Prévost', 17, 'Agriculture d\'aujourdhui', 'Anonymous', '', 'Les_bases_de_l_agriculture-TdM.pdf', 'IMG_20220205_153601_608.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(79, 'Mémento de l\'agronome', 'memento-de-lagronome-20230106-150030', 'Mémento de l\'agronome', 'Mémento de l\'agronome', 'Ministère E.S france', 1641, 'Ministère de la coopération', 'France', '', 'MOMENTO DE L\'AGRONOME.pdf', 'IMG_20220205_155153_342.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(80, 'Syllabus de Formation d\'ingénieur agronome', 'syllabus-de-formation-dingenieur-agronome-20230106-150030', 'Formation d\'ingénieur agronome', 'Formation d\'ingenieur', 'Anonymous', 31, 'Anonymous', 'Anonymous', '', 'SyllabusFORMATION D\'INGENIEUR AGRONOME.pdf', 'IMG_20220205_192555_560.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 40, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(81, 'Initiation à l\' agriculture tropicale à petite échelle', 'initiation-a-l-agriculture-tropicale-a-petite-echelle-20230106-150030', 'Initiation à l\' agriculture tropicale à petite échelle', 'Initiation à l\' agriculture tropicale à petite échelle', 'Franklin W.Martin', 16, 'Echo', 'Anonymous', '', 'tn-16-initiation-a-l-agriculture-tropicale-a-petite-echelle.pdf', 'IMG_20220205_193142_907.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(82, 'Cours de biotechnologie', 'cours-de-biotechnologie-20230106-150030', 'Cours de biotechnologie', 'Trois Chapitres', 'Dr Dalichaouche Imane', 20, 'Département de biochimie', 'Université Constantine', '', 'cours biotechnologies (3 chapitres).pdf', 'IMG_20220205_195509_295.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(83, 'L\'essentiel de la biologie Céllulaire 3è Edition', 'lessentiel-de-la-biologie-cellulaire-3e-edition-20230106-150030', 'L\'essentiel de la biologie Céllulaire 3è Edition', 'L\'essentiel de la biologie Céllulaire 3è Edition', 'Albert\'s ,Bray, Hopkin, Johnson,Lewis,Raff,Robert,,Walte', 22, 'Médecine sciences', 'France', '', 'Essentiel de la biologie cellulaire 3eme Edition.pdf', 'IMG_20220205_200301_432.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(84, 'Exercices corrigés biologie appliquée , microbiologie, nutrition, alimentation', 'exercices-corriges-biologie-appliquee-microbiologie-nutrition-alimentation-20230106-150030', 'Exercices corrigés biologie appliquée , microbiologie, nutrition, alimentation', 'Exercices corrigés', 'Genevieve Moussy-Binet', 100, 'Elsevier Masson', 'France', '', 'EXERCICES CORRIGES DE BIOLOGIE.pdf', 'IMG_20220205_201135_968.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(85, 'Fascicule d\' Exercices en biologie structurale', 'fascicule-d-exercices-en-biologie-structurale-20230106-150030', 'Exercices en biologie pour la revision', 'Exercices en biologie pour la revision', 'Anonymous', 8, 'Université d\'Algers', 'Algers', '', 'exercices_en__biochimie_pour_revision_.pdf', 'IMG_20220205_201920_584.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(86, 'Introduction à la génétique et à la génomique', 'introduction-a-la-genetique-et-a-la-genomique-20230106-150030', 'Introduction à la génétique et à la génomique', 'La biologie est vaste', 'Anonymous', 16, 'Anonymous', 'Anonymous', '', 'Introduction à la génétique et à la génomique.pdf', 'IMG_20220206_000436_107.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(87, 'Le Beau livre de la Biologie , De l\'origine de la vie à la génomique', 'le-beau-livre-de-la-biologie-de-lorigine-de-la-vie-a-la-genomique-20230106-150030', 'Le Beau livre de la Biologie , De l\'origine de la vie à la génomique', 'Le Beau livre de la vies ', 'Michael C.Gerald', 30, 'Dunod ,2015', 'Paris', '', 'LE BEAU LIVRE DE BIOLOGIE.pdf', 'IMG_20220206_000929_708.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 40, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(88, 'Les moléculee du vivant', 'les-moleculee-du-vivant-20230106-150030', 'Les moléculee du vivant', 'Les moléculee du vivant', 'Professeur Bertrand Toussaint', 53, 'Anonymous', 'Anonymous', '', 'Les molecules du vivant.pdf', 'IMG_20220206_001832_115.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(89, 'Cours de microbiologie générale', 'cours-de-microbiologie-generale-20230106-150030', 'Cours de microbiologie générale', 'Cours de microbiologie générale', 'Dr Soraya Rahmani', 119, 'Anonymous', 'Anonymous', '', 'Microbiologie-coursTp.Td_-1.pdf', 'IMG_20220206_003212_402.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(90, 'Classification botanique et nomenclature', 'classification-botanique-et-nomenclature-20230106-150030', 'Classification botanique et nomenclature', 'Classification botanique et nomenclature', 'Marc S.M Sosef , Jerôme Degreef, Henry Engledow ,Pierre Meerts', 74, 'Jardin botanique de Melse', 'Belgique', '', 'Bot_class-nomencl_FR_MR.pdf', 'IMG_20220206_004345_519.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(91, 'Généralités botaniques', 'generalites-botaniques-20230106-150030', 'Généralités botaniques', 'Généralités botaniques', 'Anonymous', 56, 'Anonymous', 'Anonymous', '', 'bota-generalites.pdf', 'IMG_20220206_005055_050.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(92, 'Généralités botaniques leçon', 'generalites-botaniques-lecon-20230106-150030', 'Généralités botaniques leçon', 'Cours de Botanique 3ème', 'Anonymous', 35, 'Anonymous', 'Anonymous', '', 'BOTANIQUE.pdf', 'IMG_20220206_005842_382.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(93, 'Botanique systémique et appliquée des plantes à fleurs', 'botanique-systemique-et-appliquee-des-plantes-a-fleurs-20230106-150030', 'Botanique systémique et appliquée des plantes à fleurs', 'Botanique systémique et appliquée des plantes à fleurs', 'Michel Botineau', 10, 'Anonymous', 'France', '', 'botanique-systematique-et-appliquee-des-plantes-a-fleurs_Planches.pdf', 'IMG_20220206_010426_702.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(94, 'Cours de Botanique 2 è LMD', 'cours-de-botanique-2-e-lmd-20230106-150030', 'Cours de Botanique 2 è LMD', 'Cours de Botanique 2 è LMD', 'Mme Bouchoukh Imane', 130, 'Ministère Algérie', 'Algérie', '', 'Cours botanique bouchoukh.pdf', 'IMG_20220206_011131_674.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(95, 'Cours de la biologie botanique', 'cours-de-la-biologie-botanique-20230106-150030', 'Cours de la biologie botanique', 'Cours de la biologie botanique', 'Dr BOUZID SALHA', 82, 'Université Les frères Mentouri', 'Algérie', '', 'Cours de biologie végétale pour L1 BOUZID salha.pdf', 'IMG_20220206_011645_617.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 41, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(96, 'Cours de Botanique systématique 2 è Tronc commun', 'cours-de-botanique-systematique-2-e-tronc-commun-20230106-150030', 'Cours de Botanique systématique', 'Cours de Botanique systématique', 'Mr Zitouni Ali', 47, 'Anonymous', 'Algérie', '', 'Cours de botanique systématique 1ère partie ZITOUNI ALI 2017.pdf', 'Screenshot_20220206-012250.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(97, 'Cours Botanique 2 è année licence Biologie & Nutrition', 'cours-botanique-2-e-annee-licence-biologie-nutrition-20230106-150030', 'Cours Botanique 2 è année licence Biologie & Nutrition', 'Cours Botanique 2 è année licence Biologie & Nutrition', 'Dr Belhacini FATIMA', 97, 'Ministère ESU', 'Algérie', '', 'Cours-de-_-Botanique-L2-Ecologie-et-environnement.pdf', 'IMG_20220206_012944_507.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(98, 'Cours de Botanique , Joél Reynard', 'cours-de-botanique-joel-reynard-20230106-150030', 'Cours de Botanique , Joél Reynard', 'Cours de Botanique , Joél Reynard', 'Joél Reynard', 234, 'Anonymous', 'Anonymous', '', 'cours-de-botanique.pdf', 'IMG_20220206_013738_848.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(99, 'Élements de Botanique', 'elements-de-botanique-20230106-150030', 'Élements de Botanique', 'Élements de Botanique', 'Denis Michez', 183, 'Université de Mons', 'Anonymous', '', 'Element_Botanique_2021.pdf', 'IMG_20220206_014432_884.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(100, 'Introduction à la systèmatique C1.', 'introduction-a-la-systematique-c1-20230106-150030', 'Introduction à la systèmatique C1.', 'Introduction à la systèmatique C1.', 'Dr Sabah CHERMAT', 38, 'Anonymous', 'Anonymous', '', 'introduction_systematique.pdf', 'IMG_20220206_014941_588.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(101, 'Petit lexique de Botanique à l\'usage du débutant', 'petit-lexique-de-botanique-a-lusage-du-debutant-20230106-150030', 'Petit lexique de Botanique à l\'usage du débutant', 'Petit lexique de Botanique à l\'usage du débutant', 'Rolland DOUZET', 42, 'Anonymous', 'Anonymous', '', 'lexiqueBOTANIQUE.pdf', 'IMG_20220206_015410_230.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(102, 'Introduction générale au Droit administratif', 'introduction-generale-au-droit-administratif-20230106-150030', 'Introduction générale au Droit administratif', 'Droit administratif', 'Mme Céline FERCOT', 50, 'Anonymous', 'Anonymous', '', 'Droit_administratif consours de Mme Celine.pdf', 'IMG_20220206_021208_578.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(103, 'Introduction de Droit administratif 2019-2020', 'introduction-de-droit-administratif-2019-2020-20230106-150030', 'Introduction de Droit administratif', 'Cours de droit administratif 2019-2020', 'Asket Simeon , N\'Cho', 121, 'Université Houohouet Boigny', 'Côte D\'Ivoire', '', 'Droit-administratif_L2-économie.pdf', 'IMG_20220206_021653_265.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(104, 'Droit administratif tom 1', 'droit-administratif-tom-1-20230106-150030', 'Droit administratif tom 1', 'Droit administratif tom 1', 'Ann Lawrence Durviaux', 422, 'Université de Liège', 'France', '', 'Droit-administratif-Tom1.pdf', 'IMG_20220206_022337_770.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(105, 'Grands arrêts petites fiches', 'grands-arrets-petites-fiches-20230106-150030', 'Grands arrêts petites fiches', 'Grand arret petites fiches', 'Anonymous', 372, 'Anonymous', 'Anonymous', '', 'Grands_arrets petite fiches.pdf', 'IMG_20220206_022901_923.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(106, 'La responsabilité de l\'Etat du fait de l\'action normative en droit administratif français', 'la-responsabilite-de-letat-du-fait-de-laction-normative-en-droit-administratif-francais-20230106-150030', 'La responsabilité de l\'Etat du fait de l\'action normative en droit administratif français', 'La responsabilité de l\'Etat du fait de l\'action normative en droit administratif français', 'Stéphane JUAN', 600, 'Anonymous', 'Anonymous', '', 'Juan.Stephanie.DMZ0405.pdf', 'IMG_20220206_023438_419.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(107, 'Thèse :La responsabilité de l\'Etat du fait de l\'action normative en droit administratif français', 'these-la-responsabilite-de-letat-du-fait-de-laction-normative-en-droit-administratif-francais-20230106-150030', '', 'La responsabilité de l\'Etat du fait de l\'action normative en droit administratif français', 'Thèse: La responsabilité de l\'Etat du fait de l\'action normative en droit administratif français', 600, NULL, '', '', 'Juan.Stephanie.DMZ0405.pdf', 'IMG_20220206_023438_419.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(108, 'Lexique administratif dernière édition', 'lexique-administratif-derniere-edition-20230106-150030', 'Lexique administratif dernière édition', 'Lexique administratif dernière édition\r\n', 'COSLA', 204, 'Ministère ESU France', 'France', '', 'Lexique+des+termes+administratifs+.pdf', 'IMG_20220206_024733_993.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(109, 'Module du droit administratif', 'module-du-droit-administratif-20230106-150030', 'Module du droit administratif', 'Module du droit administratif', 'M. Mouhamadou Ka', 94, 'Anonymous', 'Sénegal', '', 'MODULE DU DROIT-ADMINISTRATIF.pdf', 'IMG_20220206_025328_859.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(110, 'Traité de droit administratif Volume 1', 'traite-de-droit-administratif-volume-1-20230106-150030', 'Traité de droit administratif Volume 1', 'Traité de droit administratif Volume 1', 'André Grisel', 50, 'Anonymous', 'Neutachatel', '', 'Traite de droit administratif.pdf', 'IMG_20220206_030230_152.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(111, 'Droit Civil', 'droit-civil-20230106-150030', 'Droit Civil', 'Code civil', 'Anonymous', 376, 'Anonymous', 'Anonymous', '', 'Code civil - Livre III.pdf', 'Screenshot_20220206-031047.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(112, 'Code Civil', 'code-civil-20230106-150030', 'Code Civil', 'Code Civil', 'droit.org', 518, 'droit org', 'Anonymous', '', 'Code civil (1).pdf', 'IMG_20220206_031456_286.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(113, 'Contrats ou des obligations conventionnelles en général', 'contrats-ou-des-obligations-conventionnelles-en-general-20230106-150030', 'Contrats ou des obligations conventionnelles en général', 'Contrats ou des obligations conventionnelles en général', 'Anonymous', 60, 'Anonymous', 'Anonymous', '', 'CODE CIVIL.pdf', 'IMG_20220206_031456_286.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(114, 'Code la famille RDC 1987', 'code-la-famille-rdc-1987-20230106-150030', 'Code la famille RDC 1987', 'Code la famille RDC 1987', 'Anonymous', 145, 'Anonymous', 'Anonymous', '', 'drc_family_1987_fr.pdf', 'IMG_20220206_032417_775.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(115, 'Droit Civil 1ère Année ', 'droit-civil-1ere-annee-20230106-150030', 'Droit Civil 1ère Année ', 'Droit Civil 1ère Année ', 'Romain Boffa', 25, 'Anonymous', 'Anonymous', '', 'DROIT CIVIL PREMIERE ANNEE.pdf', 'IMG_20220206_032905_937.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(116, 'Droit des obligations - Tom1 ', 'droit-des-obligations-tom1-20230106-150030', 'Droit des obligations - Tom1 ', 'Droit des obligations - Tom1 ', 'PREPA DALLOZ', 64, 'Anonymous', 'Anonymous', '', 'DROIT_DES_OBLIGATIONS_TOME_1_2014.pdf', 'IMG_20220206_033410_263.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(117, 'Droit Civil et judiciaire Tome1', 'droit-civil-et-judiciaire-tome1-20230106-150030', 'Droit Civil et judiciaire Tome1', 'Droit Civil congolais 2003', 'Anonymous', 501, 'Anonymous', 'Anonymous', '', 'Droit-Civil-et-Judiciaire-2003 RDC.pdf', 'IMG_20220206_034230_138.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(118, 'Droits de propriété et d\'usage des communautés locales et populations autochtones', 'droits-de-propriete-et-dusage-des-communautes-locales-et-populations-autochtones-20230106-150030', 'Droits de propriété et d\'usage des communautés locales et populations autochtones', 'Droits de propriété et d\'usage des communautés locales et populations autochtones', 'UK government', 45, 'UK government', 'UK ', '', 'droits-de-propriete-et-d’usage-des-communautes-locales-et-populations-autochtones-ressources-congo-ce-fr.pdf', 'IMG_20220206_034717_919.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(119, 'La protection des créanciers des pouvoirs et organismes publics face au privilège de l\'\' immunité d\'exécution : Étude du droit congolais et Des jurisdiction Belges et Français. ', 'la-protection-des-creanciers-des-pouvoirs-et-organismes-publics-face-au-privilege-de-l-immunite-dexecution-etude-du-droit-congolais-et-des-jurisdiction-belges-et-francais-20230106-150030', '', 'Obtention du grade de Docteur en droit', 'Jean-Marcel Mulenda', 513, NULL, '', '', 'LA PROTECTION DES CRÉANCIERS DES POUVOIRS ET ORGANISMES PUBLICS FACE AU PRIVILEGE DE L\'IMMUNITE D\'EXECUTION.pdf', 'IMG_20220206_035543_068.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(120, 'Les droits civils et Politiques d\' un citoyen congolais', 'les-droits-civils-et-politiques-d-un-citoyen-congolais-20230106-150030', 'Les droits civils et Politiques d\' un citoyen congolais', 'Les droits civils et Politiques d\' un citoyen congolais', 'Ue', 80, 'Anonymous', 'Anonymous', '', 'Les Droits Civils et Politiques D\'UN CITOYEN CONGOLAIS.pdf', 'IMG_20220206_040611_381.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(121, 'Receuil de jurisprudence congolaise en matière de crimes internationaux', 'receuil-de-jurisprudence-congolaise-en-matiere-de-crimes-internationaux-20230106-150030', 'Receuil de jurisprudence congolaise en matière de crimes internationaux', 'Receuil de jurisprudence congolaise en matière de crimes internationaux', 'UE', 248, 'Edition Critique', 'UE', '', 'RDC_JurisprudenceCrimesInternat_201312.pdf', 'IMG_20220206_130717_929.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(122, 'Syllabus du cours de droit Civil', 'syllabus-du-cours-de-droit-civil-20230106-150030', 'Syllabus du cours de droit', 'Syllabus du cours de droit Civil', 'ISEG', 31, 'ISEG', 'Anonymous', '', 'SYLLABUS DU COURS DE DROIT CIVIL.pdf', 'IMG_20220206_131520_557.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(123, 'OHADA : Acte Uniforme portant sur le DROIT COMMERCIAL GENERAL', 'ohada-acte-uniforme-portant-sur-le-droit-commercial-general-20230106-150030', 'OHADA : Acte Uniforme portant sur le DROIT COMMERCIAL GENERAL', 'OHADA : Acte Uniforme portant sur le DROIT COMMERCIAL GENERAL', 'Anonymous', 96, 'Anonymous', 'Anonymous', '', '0.9.10.2.-OHADA_Acte-uniformes_Droit-commercial-general.pdf', 'IMG_20220206_133521_045.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(124, 'Droit commercial et de societé', 'droit-commercial-et-de-societe-20230106-150030', 'Droit commercial et de societé', 'Droit commercial et de societé', 'Pr Meryem SERGHINI', 0, 'AU', 'AU', '', '1357711_DROIT COMMERCIAL ET DE SOCIETE.pdf', 'IMG_20220206_133933_839.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(125, 'Acte Uniforme OHADA sur le droit des contrats', 'acte-uniforme-ohada-sur-le-droit-des-contrats-20230106-150030', 'Acte Uniforme OHADA sur le droit des contrats', 'Acte Uniforme OHADA sur le droit des contrats', 'Unidroit', 34, 'Unidroit', 'Anonymous', '', 'ACTE UNIFORME OHADA SUR LE DROIT DES CONTRATS.pdf', 'IMG_20220206_134505_993.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(126, 'L\'acte uniforme relatif au droit commercial général et le conflit des lois', 'lacte-uniforme-relatif-au-droit-commercial-general-et-le-conflit-des-lois-20230106-150030', 'L\'acte uniforme relatif au droit commercial général et le conflit des lois', 'L\'acte uniforme relatif au droit commercial général et le conflit des lois', 'Paly Tamega', 502, 'Hal', 'France', '', 'Acte uniforme sur le droit commercial general ET LE CONFLIT DES LOIS.pdf', 'IMG_20220206_140436_769.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(127, 'Code de Commerce', 'code-de-commerce-20230106-150030', 'Code de Commerce', 'Code de Commerce', 'Anonymous', 1910, 'Anonymous', 'France', '', 'DROIT de commerce.pdf', 'IMG_20220206_144025_057.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(128, 'Droit commercial et des sociétés en Afrique', 'droit-commercial-et-des-societes-en-afrique-20230106-150030', 'Droit commercial et des sociétés en Afrique', 'Droit commercial et des sociétés en Afrique', 'HSD', 180, 'Uref', 'France', '', 'droit_commercial_afrique_2850695343.pdf', 'Screenshot_20220206-144806.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(129, 'OHADA : ENCYCLOPEDIE DU DROIT DU COMMERCE', 'ohada-encyclopedie-du-droit-du-commerce-20230106-150030', 'OHADA : ENCYCLOPEDIE DU DROIT DU COMMERCE', 'OHADA : ENCYCLOPEDIE DU DROIT DU COMMERCE', 'Paul-Gérard POUGOUE', 2191, 'Lamy', 'Caméroun', '', 'EncyclopEdie DU DROIT-OHADA.pdf', 'IMG_20220206_145317_467.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(130, 'Guide juridique de l\'entrepreneur au Congo ', 'guide-juridique-de-lentrepreneur-au-congo-20230106-150030', 'Guide juridique de l\'entrepreneur au Congo ', 'Guide juridique de l\'entrepreneur au Congo', 'Ohada', 256, 'Ohada', 'Anonymous', '', 'Guide OHADA - CONGO - GUIDE JURIDIQUE DE L\'ENTREPRENEUR.pdf', 'IMG_20220206_150552_085.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(131, 'Droit Constitutionnel', 'droit-constitutionnel-20230106-150030', 'Droit Constitutionnel', 'Droit Constitutionnel', 'Raymond FERRETTI', 111, 'Anonymous', 'Anonymous', '', 'CONSTITUTIONNEL.pdf', 'IMG_20220206_151548_862.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(132, 'Cours de droit Constitutionnel première de Licence en droit', 'cours-de-droit-constitutionnel-premiere-de-licence-en-droit-20230106-150030', 'Cours de droit Constitutionnel première de Licence en droit', 'Cours de droit Constitutionnel première de Licence en droit', 'Anonymous', 48, 'www.cours-unib.fr', 'Anonymous', '', 'Cours droit constitutionnel-premiere licence droit.pdf', 'IMG_20220206_151953_059.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(133, 'Droit Constitutionnel et institutions politiques', 'droit-constitutionnel-et-institutions-politiques-20230106-150030', 'Droit Constitutionnel et institutions politiques', 'Droit Constitutionnel et institutions politiques', 'Ann Lawrence Durviaux', 284, 'Liège Université', 'France', '', 'DROIT CONSTITUTIONNEL ET INSTITUTIONS POLITIQUES(partim1).pdf', 'IMG_20220206_152556_820.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1);
INSERT INTO `t_livre` (`CodeLivre`, `Titre`, `book_slug`, `SousTitre`, `Description`, `AuteurPrincipal`, `NombrePage`, `NomEditeur`, `LieuEdition`, `ISBN`, `Fichier_livre`, `Image`, `CodeLangue`, `CodeDomaine`, `CodeSousDomaine`, `CodeCompte`, `CodeAdmin`, `CodePropriete`, `Created_on`, `Readed`, `Likes`, `Liked`, `Validate`, `Validate_date`, `Invalidate_date`, `Invalidate_by`, `Statut`) VALUES
(134, 'Introduction au droit constitutionnel', 'introduction-au-droit-constitutionnel-20230106-150030', 'Introduction au droit constitutionnel', 'Introduction au droit constitutionnel', 'Pr. Maxime Tourbe', 141, 'Université Paris 8', 'France', '', 'introduction_au_droit_constitutionnel_-_documents_semestre_1_2020-2021.pdf', 'IMG_20220206_153135_790.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(135, 'L\'internationalisation des constitutions des Etats en crise', 'linternationalisation-des-constitutions-des-etats-en-crise-20230106-150030', 'L\'internationalisation des constitutions des Etats en crise', 'L\'internationalisation des constitutions des Etats en crise', 'Kévin Ferdinand NDJIMBA', 674, 'ParisII', 'France', '', 'L’INTERNATIONALISATION DES constitutions des Etats en crise.pdf', 'Screenshot_20220206-153739.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(136, 'L\'internationalisation des constitutions des Etats en crise  - THESE', 'linternationalisation-des-constitutions-des-etats-en-crise-these-20230106-150030', '', 'Obtention de grade de doctorat en droit', 'Kévin Ferdinand NDJIMBA', 674, NULL, '', '', 'L’INTERNATIONALISATION DES constitutions des Etats en crise.pdf', 'Screenshot_20220206-153739.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 16, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(137, 'Qu\'est-ce qu\' une constitution ? Principes et concepts', 'quest-ce-qu-une-constitution-principes-et-concepts-20230106-150030', 'Qu\'est-ce qu\' une constitution ? Principes et concepts', 'Qu\'est-ce qu\' une constitution ? Principes et concepts', 'Elliot Bulmer', 36, 'IDEA', 'France', '', 'qu-est-ce-qu-une-constitution-principes-et-concepts.pdf', 'IMG_20220206_154624_757.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(138, 'Traité de droit Pénal général', 'traite-de-droit-penal-general-20230106-150030', 'Traité de droit Pénal général', 'Traité de droit Pénal général', 'Jacques Fortin , Louise Viau', 168, 'Thémis', 'Canada', '', 'Traite DE DROIT PENALGENERAL.pdf', 'IMG_20220206_160739_562.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(139, 'Manuel de justice pénale : vers une éfficacité renforcée des lois et des Politiques ', 'manuel-de-justice-penale-vers-une-efficacite-renforcee-des-lois-et-des-politiques-20230106-150030', 'Manuel de justice pénale : vers une éfficacité renforcée des lois et des Politiques ', 'Manuel de justice pénale : vers une éfficacité renforcée des lois et des Politiques ', 'Pénal reform international', 104, 'Pénal reform international', 'Anonymous', '', 'Manuel de justice pénale.pdf', 'IMG_20220206_161331_369.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(140, 'Droit pénal spécial', 'droit-penal-special-20230106-150030', 'Droit pénal spécial', 'Droit pénal spécial', 'Francois Fourment', 5, 'Université de tours', 'France', '', 'M1-DPS-Présentation.pdf', 'IMG_20220206_163026_293.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(141, 'Droit public et privé', 'droit-public-et-prive-20230106-150030', 'Droit public et privé', 'Droit public et privé', 'Boris Barraud', 35, 'Aix Marseille', 'France', '', 'Boris Barraud, Droit public droit privé, de la summa divisio à la ratio divisio.pdf', 'IMG_20220206_163941_102.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(142, 'Syllabus droit public et privé', 'syllabus-droit-public-et-prive-20230106-150030', 'Syllabus droit public et privé', 'Syllabus présenté par Unités d\'Enseignment', 'Anonymous', 68, 'Anonymous', 'Anonymous', '', 'deg-syllabus-l-droit-2016-2020_3.pdf', 'IMG_20220206_164853_148.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(143, 'Droit pénal économique', 'droit-penal-economique-20230106-150030', 'Droit pénal économique', 'Droit pénal économique', 'Jean François RENUCCI', 18, 'Anonymous', 'Anonymous', '', 'DROIT PENAL ECONOMIQUE.pdf', 'IMG_20220206_165559_537.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(144, 'Introduction au droit public:dossier de documentation', 'introduction-au-droit-publicdossier-de-documentation-20230106-150030', 'Introduction au droit public:dossier de documentation', 'Introduction au droit public , dossier de documentation', 'Frédéric BOUHON', 241, 'Anonymous', 'Anonymous', '', 'Introduction au droit public (F. Bouhon) - Dossier de documentation 2018-19.pdf', 'IMG_20220206_170231_967.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(145, 'Méthodologie du droit public ', 'methodologie-du-droit-public-20230106-150030', 'Méthodologie du droit public ', 'Méthodologie du droit public ', 'Anonymous', 31, 'Institut Louis FAVOREU', 'Anonymous', '', 'methodologie_juridique_0.pdf', 'IMG_20220206_171028_400.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(146, 'Droit public des affaires 8è Edition', 'droit-public-des-affaires-8e-edition-20230106-150030', 'Droit public des affaires 8è Edition', 'Droit public des affaires', 'Sophie NICINKSI', 20, 'DOMAT ', 'Anonymous', '', 'droit-public-affaires-extrait.pdf', 'IMG_20220206_171931_719.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(147, 'Chimie générale 1', 'chimie-generale-1-20230106-150030', 'Chimie générale', 'Chimie générale ', 'Alain Sevin', 26, 'Dunod', 'France', '', 'CHIMIE GENERALE.pdf', 'IMG_20220206_195241_399.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(148, 'Cours de Chimie - Structure de la matière', 'cours-de-chimie-structure-de-la-matiere-20230106-150030', 'Cours de Chimie - Structure de la matière', 'Cours de Chimie - Structure de la matière', 'Dr Droua ZOHRA', 86, 'Université des sciences et technology d\'Oran Mohamed Boudiaf', 'France', '', 'COURS DE CHIMIE _STRUCTURE DE LA MATIERE.pdf', 'IMG_20220206_200400_378.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(149, 'Physique Chimie Notions indispensables ', 'physique-chimie-notions-indispensables-20230106-150030', 'Physique Chimie Notions indispensables ', 'Physique Chimie Notions indispensables ', 'Alexandre Mélisso', 25, 'Maths Mélisso', 'Anonymous', '', 'PHYSIQUE CHIMIE.pdf', 'IMG_20220206_202144_871.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(150, ' L\'essentiel de statistique descriptive ', 'lessentiel-de-statistique-descriptive-20230106-150030', 'Statistique descriptive', 'Statistique descriptive', 'Elizabeth Olivier', 186, 'Anonymous', 'Anonymous', '', 'Lessentiel de statistique descriptive by Elisabeth OLIVIER (z-lib.org).pdf', 'IMG_20220207_181123_950.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 39, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(151, 'Statistique et probabilité', 'statistique-et-probabilite-20230106-150030', 'Statistique et probabilité', 'Statistique et probalité', 'Anonymous', 228, 'Dunod', 'Dunod', '', 'Statistique_et_analyse_des_donnees(1).pdf', 'Screenshot_20220208-202115.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 18, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(152, 'Statistique et analyse des données', 'statistique-et-analyse-des-donnees-20230106-150030', 'Statistique et analyse des données', 'Résumé des journées de toulouse (Mai 1980)\r\nStatistique et analyse des données tome 2', 'Anonymous', 200, 'Anonymous', 'Anonymous', '', 'Statistique_et_analyse_des_donnees(1).pdf', 'IMG_20220208_204234_876.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(153, 'Initiation à l\'algorithmique et à la programmation en C', 'initiation-a-lalgorithmique-et-a-la-programmation-en-c-20230106-150030', 'Initiation à l\'algorithmique et à la programmation en C', 'Initiation à l\'algorithmique et à la programmation en C', 'Rémy', 317, 'Dunod', 'Dunod', '', 'Initiation à lalgorithmique et à la programmation en C - 2e éd. - Avec 129 exercices corrigés Cours avec 129 exercices corrigés by Feschet, Fabien Malgouyres, Rémy Zrour, Rita (z-lib.org).pdf', 'IMG_20220209_235220_771.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(154, 'Tout sur la sécurité informatique 4è Edition', 'tout-sur-la-securite-informatique-4e-edition-20230106-150030', 'Tout sur la sécurité informatique', 'Sécurité informatique', 'Jean-Francois Pillou', 253, 'Dunod', 'France', '', 'Tout sur la sécurité informatique by Jean-François Pillou, Jean-Philippe Bay (z-lib.org).pdf', 'IMG_20220210_000450_404.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 40, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(155, 'An introduction to Statistics with Python', 'an-introduction-to-statistics-with-python-20230106-150030', 'An introduction to Statistics with Python', 'Une introduction à la Statistique avec Python', 'Thomas Haslwanter', 285, 'Spinger', 'USA', '', 'An Introduction to Statistics with Python.pdf', 'IMG_20220210_092827_269.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(156, 'Introduction à l\'algorithmique', 'introduction-a-lalgorithmique-20230106-150030', 'Introduction à l\'algorithmique', 'Introduction à l\'algorithmique', 'Brice Mayag', 59, 'Dauphine', 'Dauphine', '', 'Chapitre_1_Introduction_Algorithmique.pdf', 'IMG_20220210_093655_223.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(157, 'Introduction à l\'algorithmique cours et exercices', 'introduction-a-lalgorithmique-cours-et-exercices-20230106-150030', 'Introduction à l\'algorithmique cours et exercices', 'Introduction à l\'algorithmique cours et exercices', 'Thomas Cormen , Charles Leiserson, Ronald Rivest', 1176, 'Dunod', 'France', '', 'Introduction-l_Algorithmique-.pdf', 'IMG_20220210_094348_049.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(158, 'Eléments d\'informatique - Boucles while, expressions booléennes. Algorithmes élémentaires ', 'elements-dinformatique-boucles-while-expressions-booleennes-algorithmes-elementaires-20230106-150030', 'Eléments d\'informatique - Boucles while, expressions booléennes. ', 'Eléments d\'informatique - Boucles while, expressions booléennes. Algorithmes élémentaires ', 'Pierre Boudes', 52, 'Anonymous', 'France', '', 'www.cours-gratuit.com--CoursAlgo-id2957.pdf', 'IMG_20220210_095202_421.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(159, 'Sam\'s teach yourself Android development in 24hrs', 'sams-teach-yourself-android-development-in-24hrs-20230106-150030', 'Sam\'s teach yourself Android development in 24hrs', 'Sam\'s teach yourself Android development in 24hrs', 'Sams', 475, 'Sams', 'USA', '', 'Sams Teach Yourself Android Application Development in 24 Hours (7Summits).pdf', 'IMG_20220210_101049_125.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(160, 'Prise en main du logiciel R ', 'prise-en-main-du-logiciel-r-20230106-150030', 'Prise en main du logiciel R ', 'Prise en main du logiciel R ', 'Genevieve Kurth , Joel Kieffer', 89, 'Anonymous', 'Anonymous', '', 'cours-gratuit.com--CoursAir-id5372.pdf', 'IMG_20220212_223139_975.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(161, 'Logiciel R et programmation', 'logiciel-r-et-programmation-20230106-150030', 'Logiciel R et programmation', 'Logiciel R et programmation', 'Ewen Gallic', 232, 'Ewen Gallic', 'egalic.fr', '', 'RProgrammation.pdf', 'IMG_20220212_235028_681.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(162, 'Programmation Android L3 informatique', 'programmation-android-l3-informatique-20230106-150030', 'Programmation Android L3 informatique', 'Programmation Android L3 informatique', 'Etienne Payet', 129, 'Anonymous', 'Anonymous', '', 'Programmation mobile.pdf', 'IMG_20220212_235859_123.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(163, 'Introduction à la programmation WEB en JAVA -SERVLETS et pages JSP', 'introduction-a-la-programmation-web-en-java-servlets-et-pages-jsp-20230106-150030', 'Introduction à la programmation WEB en JAVA -SERVLETS et pages JSP', 'Introduction à la programmation WEB en JAVA -SERVLETS et pages JSP', 'Serge Tahe', 220, 'Anonymous', 'Anonymous', '', 'Servlet.pdf', 'IMG_20220213_000309_462.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(164, 'Introduction à l\'algorithmique - ', 'introduction-a-lalgorithmique-20230106-150030', 'Introduction à l\'algorithmique - ', 'Cours d\'algorithmique', 'Christophe Darmangeat', 142, 'Anonymous', 'Anonymous', '', 'AlgoCours.pdf', 'IMG_20220213_000945_131.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(165, 'Analyse du développement mobile multiplateforme avec Xamarin', 'analyse-du-developpement-mobile-multiplateforme-avec-xamarin-20230106-150030', 'Analyse du développement mobile multiplateforme avec Xamarin', 'Analyse du développement mobile multiplateforme avec Xamarin', 'Audrey Dupont', 91, 'Valais wallis', 'Anonymous', '', 'Analyse du développement.pdf', 'IMG_20220213_001651_546.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(166, 'Apprenez Kotlin', 'apprenez-kotlin-20230106-150030', 'Apprenez Kotlin', 'Apprenez Kotlin', 'Anonymous', 118, 'Anonymous', 'Anonymous', '', 'Apprenez Kotlin.pdf', 'IMG_20220213_003437_911.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(167, 'Apprentissage d\'un langage de Programmation Orientée Objet. :  C#', 'apprentissage-dun-langage-de-programmation-orientee-objet-c-20230106-150030', 'Apprentissage d\'un langage de Programmation Orientée Objet. :  C#', 'Apprentissage d\'un langage de Programmation Orientée Objet. :  C#', 'Harchi Abdellah', 21, 'Anonymous', 'Anonymous', '', 'aprentissageoriente objet.pdf', 'IMG_20220213_003834_514.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(168, 'Programmation OO Avancée Architecture JEE', 'programmation-oo-avancee-architecture-jee-20230106-150030', 'Programmation OO Avancée Architecture JEE', 'Programmation OO Avancée Architecture JEE', 'Mme Sameh HBAIEB TURKI', 68, 'Anonymous', 'Anonymous', '', 'AvanceeOOJRE.pdf', 'IMG_20220213_004605_179.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(169, 'Tutoriel Android sous Android Studio', 'tutoriel-android-sous-android-studio-20230106-150030', 'Tutoriel Android sous Android Studio', 'Tutoriel Android sous Android Studio', 'DiMA Rodriguez', 55, 'Anonymous', 'Anonymous', '', 'AvecAndroidStudio.pdf', 'IMG_20220213_005801_896.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(170, 'Introduction to C++ Programming ', 'introduction-to-c-programming-20230106-150030', 'Introduction to C++ Programming ', 'Introduction to C++ Programming ', 'Hans Petter', 350, 'Anonymous', 'Anonymous', '', 'CandCplusplus.pdf', 'IMG_20220213_010323_033.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(171, 'Pour Commencer avec Java', 'pour-commencer-avec-java-20230106-150030', 'Pour Commencer avec Java', 'Pour Commencer avec Java', 'Anonymous', 208, 'Anonymous', 'Anonymous', '', 'CommencerJava.pdf', 'IMG_20220213_010813_511.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(172, 'Algorithme I - Cours et Travaux Dirigés ', 'algorithme-i-cours-et-travaux-diriges-20230106-150030', 'Algorithme I - Cours et Travaux Dirigés ', 'Algorithme I - Cours et Travaux Dirigés ', 'Anne Benoit', 129, 'Anonymous', 'Anonymous', '', 'CoursAlgo-id2959.pdf', 'IMG_20220213_011404_081.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(173, 'Algorithmique et programmation pour non-mateux', 'algorithmique-et-programmation-pour-non-mateux-20230106-150030', 'Algorithmique et programmation pour non-mateux', 'Algorithmique et programmation pour non-mateux', 'Christophe Darmangeat', 248, 'Anonymous', 'France', '', 'CoursAlgorithme-id2319.pdf', 'Screenshot_20220213-012027.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 48, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(174, 'Algorithmique et programmation pour non-mateux Cours Complet', 'algorithmique-et-programmation-pour-non-mateux-cours-complet-20230106-150030', 'Algorithmique et programmation pour non-mateux', 'Algorithmique et programmation pour non-mateux', 'Christophe Darmangeat', 248, 'Anonymous', 'France', '', 'CoursAlgorithme-id2319.pdf', 'Screenshot_20220213-012027.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 20, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(175, 'Algorithmique et structures de données', 'algorithmique-et-structures-de-donnees-20230106-150030', 'Algorithmique et structures de données', 'Algorithmique et structures de données', 'Pierre Tellier', 57, 'Anonymous', 'Anonymous', '', 'CoursAlgorithme-id2333.pdf', 'IMG_20220213_012702_668.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(176, 'Widgets et Layout ANDOID', 'widgets-et-layout-andoid-20230106-150030', 'Widgets et Layout ANDOID', 'Widgets et Layout ANDOID', 'Assane SECK', 38, 'Anonymous', 'Anonymous', '', 'coursAndoidWidget.pdf', 'IMG_20220213_013300_380.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(177, 'Programmation mobile avec Android', 'programmation-mobile-avec-android-20230106-150030', 'Programmation mobile avec Android', 'Programmation mobile avec Android', 'Pierre Nerzic', 184, 'Anonymous', 'Anonymous', '', 'cours-android.pdf', 'IMG_20220213_013926_239.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(178, 'Le langage C++ version 2 ', 'le-langage-c-version-2-20230106-150030', 'Le langage C++ version 2 ', 'Le langage C++ version 2 ', 'Alain Dancel , Philippe Colantoni', 87, 'Anonymous', 'Anonymous', '', 'CoursCPlus-id5639.pdf', 'IMG_20220213_014531_085.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(179, 'Cours de C++', 'cours-de-c-20230106-150030', 'Cours de C++', 'Cours de C++', 'François Larouddinie', 193, 'Anonymous', 'Anonymous', '', 'CoursCplusplus.pdf', 'IMG_20220213_015140_318.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(180, 'C # : L\'essentiel en concentré', 'c-lessentiel-en-concentre-20230106-150030', 'C # : L\'essentiel en concentré', 'C# : L\'essentiel en concentré ', 'Anonymous', 42, 'Dotnet France', 'France', '', 'coursCsharp.pdf', 'IMG_20220213_015953_242.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(181, 'Développement sous Android', 'developpement-sous-android-20230106-150030', 'Développement sous Android', 'Développement sous Android', 'Anonymous', 47, 'Anonymous', 'Anonymous', '', 'coursDevAndroid.pdf', 'IMG_20220213_020914_096.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(182, 'Apprentissage du langage C# 2008 et du Framework .NET 3 .5', 'apprentissage-du-langage-c-2008-et-du-framework-net-3-5-20230106-150030', 'Apprentissage du langage C# 2008 et du Framework .NET 3 .5', 'Apprentissage du langage C# 2008 et du Framework .NET 3 .5', 'Serge Tahe', 457, 'Anonymous', 'France', '', 'coursDTNET.pdf', 'IMG_20220213_021311_429.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(183, 'La plate-forme Java EE (J2EE)', 'la-plate-forme-java-ee-j2ee-20230106-150030', 'La plate-forme Java EE (J2EE)', 'La plate-forme Java EE (J2EE)', 'Anonymous', 61, '', 'Anonymous', '', 'coursJ2EE.pdf', 'IMG_20220213_021912_260.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(184, 'Le cours de Java : Le Polymorphisme en Java', 'le-cours-de-java-le-polymorphisme-en-java-20230106-150030', 'Le cours de Java : Le Polymorphisme en Java', 'Le cours de Java : Le Polymorphisme en Java', 'Julien Sopera', 118, 'Anonymous', 'Anonymous', '', 'CoursJava-id2421.pdf', 'IMG_20220213_022655_292.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(185, 'Développons en Java avec Eclipse', 'developpons-en-java-avec-eclipse-20230106-150030', 'Développons en Java avec Eclipse', 'Développons en Java avec Eclipse', 'Jean Michel DOUDOUX', 182, 'Anonymous', 'Anonymous', '', 'CoursJava-id2411.pdf', 'IMG_20220213_023356_395.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(186, 'Cours Python  Patrick', 'cours-python-patrick-20230106-150030', 'Cours Python', 'Cours de Python _Patrick', 'Patrick Fuchs et Pierre Poulain', 90, 'Paris diderot', 'Anonymous', '', 'CoursPython-id5084.pdf', 'IMG_20220213_024108_411.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(187, 'UML 2', 'uml-2-20230106-150030', 'Uml 2 ', 'Uml 2', 'Anonymous', 145, 'Anonymous', 'Anonymous', '', 'coursUML.pdf', 'IMG_20220213_025326_345.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(188, 'Conception orientée Objets avec avec UML', 'conception-orientee-objets-avec-avec-uml-20230106-150030', 'Conception orientée Objets avec avec UML', 'Conception orientée Objets avec avec UML', 'Rémy Bastide', 85, 'Anonymous', 'Anonymous', '', 'CoursUML-id2528.pdf', 'IMG_20220213_030119_205.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(189, 'Introduction au C++ pour Les ingénieurs', 'introduction-au-c-pour-les-ingenieurs-20230106-150030', 'Introduction au C++ pour Les ingénieurs', 'Introduction au C++ pour Les ingénieurs', 'Matthieu DURUT', 232, 'Anonymous', 'Anonymous', '', 'CplusPourIngenieur.pdf', 'IMG_20220213_030600_695.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(190, 'Créer des applications pour Android ', 'creer-des-applications-pour-android-20230106-150030', 'Créer des applications pour Android ', 'Créer des applications pour Android ', 'AndroWiid et Frédéric Espiau', 217, 'Anonymous', 'Anonymous', '', 'creerMobile.pdf', 'IMG_20220213_031201_478.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 39, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(191, 'Démarrer en R', 'demarrer-en-r-20230106-150030', 'Démarrer en R', 'Démarrer en R ', 'Anetis Antoniadis , Bernard Ycart', 91, 'Anonymous', 'France', '', 'DemarrerR.pdf', 'IMG_20220213_031647_177.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(192, 'Développons en Java', 'developpons-en-java-20230106-150030', 'Développons en Java', 'Développons en Java', 'Jean Michel DOUDOUX', 922, 'Anonymous', 'Anonymous', '', 'DevelopponsJava.pdf', 'IMG_20220213_032300_548.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(193, 'Introduction ANDROID', 'introduction-android-20230106-150030', 'Introduction ANDROID', 'Développons en Java', 'Anonymous', 86, 'Anonymous', 'Anonymous', '', 'IntroAdroid.pdf', 'IMG_20220213_032804_386.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(194, 'Developing for the J2EE', 'developing-for-the-j2ee-20230106-150030', 'Developing for the J2EE', 'Developing for the J2EE', 'Anonymous', 273, 'Anonymous', 'Anonymous', '', 'J2EE.pdf', 'IMG_20220213_033406_671.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(195, 'Introduction à Java  JBuilder X', 'introduction-a-java-jbuilder-x-20230106-150030', 'Introduction à Java  JBuilder X', 'Introduction à Java  JBuilder X', 'Anonymous', 172, 'Anonymous', 'Anonymous', '', 'java.pdf', 'IMG_20220213_033828_882.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(196, 'Les fondements du langage Java', 'les-fondements-du-langage-java-20230106-150030', 'Les fondements du langage Java', 'Les fondements du langage Java', 'Anonymous', 392, 'Anonymous', 'Anonymous', '', 'Java2.pdf', 'IMG_20220213_034208_138.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(197, 'Introduction à Java Edition Enterprise', 'introduction-a-java-edition-enterprise-20230106-150030', 'Introduction à Java Edition Enterprise', 'Introduction à Java Edition Enterprise', 'Anonymous', 52, 'Anonymous', 'Anonymous', '', 'JavaEEIng.pdf', 'IMG_20220213_034644_191.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(198, 'Le langage Java', 'le-langage-java-20230106-150030', 'Le langage Java', 'Le langage Java', 'Anonymous', 173, 'Anonymous', 'Anonymous', '', 'JavaLangage.pdf', 'IMG_20220213_035418_887.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(199, 'Cours de Programmation orientée Objets java', 'cours-de-programmation-orientee-objets-java-20230106-150030', 'Cours de Programmation orientée Objets java', 'Cours de Programmation orientée Objets java', 'Hugues Fauconnier', 420, 'Anonymous', 'Anonymous', '', 'JavaObjet.pdf', 'IMG_20220213_035859_255.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(200, 'Application Web et J2EE', 'application-web-et-j2ee-20230106-150030', 'Application Web et J2EE', 'Application Web et J2EE', 'Pierre Gambarotto', 44, 'Anonymous', 'Anonymous', '', 'WEBetJ2EE.pdf', 'IMG_20220213_040525_719.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(201, 'Programmation C#', 'programmation-c-20230106-150030', 'Programmation C#', 'Programmation C#', 'Anonymous', 148, 'Anonymous', 'Anonymous', '', 'PrCSharp.pdf', 'IMG_20220213_041039_041.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(202, 'Analyse de données en sciences expérimentales', 'analyse-de-donnees-en-sciences-experimentales-20230106-150030', 'Analyse de données en sciences expérimentales', 'Analyse de données en sciences expérimentales', 'Bénoit Clément', 188, 'Dunod', 'France', '', 'Benoit Clément - Analyse de données en sciences expérimentales (0  Dunod).pdf', 'IMG_20220213_210804_061.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(203, 'Support de cours Module  XHTML/CSS ', 'support-de-cours-module-xhtml-css-20230106-150030', 'Support de cours Module  XHTML/CSS ', 'Support de cours Module \r\nXHTML/CSS\r\n1ère Année BTS Informatique Développe', 'Anonymous', 222, 'Anonymous', 'Anonymous', '', 'cours-gratuit.com--id-1341.pdf', 'IMG_20220217_211621_657.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(204, 'L\'aléatoire en C et en C++', 'laleatoire-en-c-et-en-c-20230106-150030', 'L\'aléatoire en C et en C++', 'L\'aléatoire en C et en C++', 'Natim et Sebsheep', 9, 'Anonymous', 'Anonymous', '', 'aleatoire cetc++.pdf', 'IMG_20220217_224508_667.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(205, 'Bases de la programmation : cours de C', 'bases-de-la-programmation-cours-de-c-20230106-150030', 'Bases de la programmation : cours de C', 'Bases de la programmation : cours de C', 'Hanène Azzag', 77, 'Anonymous', 'Anonymous', '', 'base de la programmation.pdf', 'IMG_20220217_225002_664.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(206, 'Commandes Linux de base &introduction au C', 'commandes-linux-de-base-introduction-au-c-20230106-150030', 'Commandes Linux de base &introduction au C', 'Commandes Linux de base &introduction au C', 'Sebastien Paumier', 51, 'Anonymous', 'Anonymous', '', 'Cours+C+1+Commandes+Linux+de+base+et+introduction+au+langage+c.pdf', 'IMG_20220217_225736_173.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(207, 'Tableaux ,fonctions et passages d\'adresses', 'tableaux-fonctions-et-passages-dadresses-20230106-150030', 'Tableaux ,fonctions et passages d\'adresses', 'Tableaux ,fonctions et passages d\'adresses', 'Sebastien Paumier', 50, 'Anonymous', 'Anonymous', '', 'Cours+C+3+Tableaux+fonctions+et+passages+d+adresses.pdf', 'IMG_20220217_230344_755.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(208, 'Cours HTML / PHP', 'cours-html-php-20230106-150030', 'Cours HTML / PHP', 'Cours HTML / PHP', 'Emmanuel Coquery', 46, 'Anonymous', 'Anonymous', '', 'CoursPhp-id1003.pdf', 'IMG_20220217_230826_034.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(209, 'Le PHP', 'le-php-20230106-150030', 'Le PHP', 'Le PHP', 'Anonymous', 120, 'Anonymous', 'Anonymous', '', 'CoursPhp-id5983.pdf', 'IMG_20220217_231252_945.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(210, 'De l\'algorithmique au C ', 'de-lalgorithmique-au-c-20230106-150030', 'De l\'algorithmique au C ', 'De l\'algorithmique au C ', 'Nicolas Deleste', 37, 'Anonymous', 'Anonymous', '', 'De+l+algorithme+au+programmation+c.pdf', 'IMG_20220217_231712_433.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(211, 'Développement Web PHP Avancé', 'developpement-web-php-avance-20230106-150030', 'Développement Web PHP Avancé', 'Développement Web PHP Avancé', 'Jean-Michel Richer', 73, 'Anonymous', 'Anonymous', '', 'dev web.pdf', 'IMG_20220217_232100_703.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(212, 'Le langage PHP', 'le-langage-php-20230106-150030', 'Le langage PHP', 'Le langage PHP', 'Anonymous', 30, 'Anonymous', 'Anonymous', '', 'php.pdf', 'IMG_20220217_232751_765.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(213, 'Création de pages Web Dynamiques côté serveur (PHP)', 'creation-de-pages-web-dynamiques-cote-serveur-php-20230106-150030', 'Création de pages Web Dynamiques côté serveur (PHP)', 'Création de pages Web Dynamiques côté serveur (PHP)', 'Anonymous', 200, 'Anonymous', 'Anonymous', '', 'webdynamique.pdf', 'IMG_20220217_233220_828.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(214, 'Support de cours Module XHTML / CSS', 'support-de-cours-module-xhtml-css-20230106-150030', 'Support de cours Module XHTML / CSS', 'Support de cours Module XHTML / CSS', 'Anonymous', 53, 'Anonymous', 'Anonymous', '', 'xhtmlcss.pdf', 'IMG_20220217_233656_429.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 41, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(215, 'Internet', 'internet-20230106-150030', 'Internet', 'Internet', 'Anonymous', 104, 'Anonymous', 'Anonymous', '', 'internet.pdf', 'IMG_20220217_235210_520.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(216, 'Introduction à la géomatique pour traitement et diffusion de  et outils innovants de gestion,  le statisticien: quelques concepts  l’information spatiale', 'introduction-a-la-geomatique-pour-traitement-et-diffusion-de-et-outils-innovants-de-gestion-le-statisticien-quelques-concepts-linformation-spatiale-20230106-150030', 'Introduction à la géomatique pour traitement et diffusion de  et outils innovants de gestion,  le statisticien: quelques concepts  l’information spatiale', 'Introduction à la géomatique pour\r\ntraitement et diffusion de \r\net outils innovants de gestion, \r\nle statisticien: quelques concepts \r\nl’information spatiale', 'François CEMECURBE', 66, 'Anonymous', 'Anonymous', '', 'M2022-01_Document_travail_Introduction_geomatique_statisticiens.pdf', 'IMG_20220218_000722_907.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(217, 'Ado.net Premier pas', 'adonet-premier-pas-20230106-150030', 'Premier pas avec ADO.net data services', 'Ado.net', 'James RAVAILLE', 38, 'Mvp', 'France', '', 'ADO.net.pdf', 'IMG_20220219_141149_301.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(218, 'ADO.NET  Base de Données', 'adonet-base-de-donnees-20230106-150030', 'ADO.NET  Base de Données', 'ADO.NET \r\nBase de Données', 'Anonymous', 47, 'Dotnet France', 'France', '', 'ADOBase.pdf', 'IMG_20220219_141810_565.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(219, 'Apprendre à utiliser un capteur de pluie sur Arduino en langage C', 'apprendre-a-utiliser-un-capteur-de-pluie-sur-arduino-en-langage-c-20230106-150030', 'Apprendre à utiliser un capteur de pluie sur Arduino en langage C', 'Apprendre à utiliser un capteur de\r\npluie sur Arduino en langage C', 'Francesco Balducci', 9, 'Developpez', 'France', '', 'AndoidetC.pdf', 'IMG_20220219_142336_966.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(220, 'Apprendre HTML', 'apprendre-html-20230106-150030', 'Apprendre HTML', 'Apprendre HTML', 'Anonymous', 48, 'Anonymous', 'Anonymous', '', 'ApprendreHTML.pdf', 'IMG_20220219_142742_496.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 39, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(221, 'Apprenez arduino', 'apprenez-arduino-20230106-150030', 'Apprenez arduino', 'Arduino', 'Anonymous', 93, 'Ebook gratuit', 'Anonymous', '', 'ApprenezArduino.pdf', 'IMG_20220219_143342_493.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(222, 'Lire et écrire des données sur une carte SD avec  une carte Arduino / Genuino', 'lire-et-ecrire-des-donnees-sur-une-carte-sd-avec-une-carte-arduino-genuino-20230106-150030', 'Lire et écrire des données sur une carte SD avec  une carte Arduino / Genuino', 'Lire et écrire des données sur une carte SD avec \r\nune carte Arduino / Genuino', 'Anonymous', 22, 'Anonymous', 'Anonymous', '', 'ardionoIO.pdf', 'IMG_20220219_143825_495.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(223, 'Arduino et données GPS (deel 2)', 'arduino-et-donnees-gps-deel-2-20230106-150030', 'Arduino et données GPS (deel 2)', 'Arduino et données GPS\r\n(deel 2)', 'ON4CDU Hans', 6, 'Anonymous', 'Anonymous', '', 'arduino.pdf', 'Screenshot_20220219-144123.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(224, 'Utilisation et programmation de la carte ESPLORA d\'ARDUINO', 'utilisation-et-programmation-de-la-carte-esplora-darduino-20230106-150030', 'Utilisation et programmation de la carte ESPLORA d\'ARDUINO', 'Utilisation et programmation\r\nde la carte ESPLORA d\'ARDUINO', 'www.arduino.cc', 24, 'Anonymous', 'Anonymous', '', 'Arduino1.pdf', 'IMG_20220219_144802_469.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(225, 'Atelier programmer comment  un Grafcet sous Arduino.', 'atelier-programmer-comment-un-grafcet-sous-arduino-20230106-150030', 'Atelier programmer comment  un Grafcet sous Arduino.', 'Atelier\r\nprogrammer\r\ncomment \r\nun Grafcet\r\nsous Arduino.', 'Fabien Levac', 21, 'Anonymous', 'Anonymous', '', 'Arduino3.pdf', 'IMG_20220219_145122_540.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(226, 'Mesurer une distance avec un capteur à  ultrason HC-SR04 et une carte Arduino /  Genuino', 'mesurer-une-distance-avec-un-capteur-a-ultrason-hc-sr04-et-une-carte-arduino-genuino-20230106-150030', 'Mesurer une distance avec un capteur à  ultrason HC-SR04 et une carte Arduino /  Genuino', 'Mesurer une distance avec un capteur à \r\nultrason HC-SR04 et une carte Arduino / \r\nGenuino', 'Anonymous', 10, 'Anonymous', 'Anonymous', '', 'Arduino4.pdf', 'IMG_20220219_145639_923.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(227, 'Affichage sur LCD', 'affichage-sur-lcd-20230106-150030', 'Affichage sur LCD', 'Affichage sur LCD', 'Anonymous', 18, 'Anonymous', 'Anonymous', '', 'Arduino5.pdf', 'IMG_20220219_150115_569.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(228, 'MODULE	GSM/GPRS	SEEDSTUDIO', 'modulegsm-gprsseedstudio-20230106-150030', 'MODULE	GSM/GPRS	SEEDSTUDIO', 'MODULE	GSM/GPRS	SEEDSTUDIO', 'Anonymous', 8, 'Anonymous', 'Anonymous', '', 'arduino6.pdf', 'IMG_20220219_150534_966.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(229, 'ENSEMBLE « COMMANDE DE MOTEUR À COURANT CONTINU » POUR ARDUINO UNO', 'ensemble-commande-de-moteur-a-courant-continu-pour-arduino-uno-20230106-150030', 'ENSEMBLE « COMMANDE DE MOTEUR À COURANT CONTINU » POUR ARDUINO UNO', 'ENSEMBLE « COMMANDE DE MOTEUR À\r\nCOURANT CONTINU » POUR ARDUINO\r\nUNO', 'Anonymous', 33, 'Anonymous', 'Anonymous', '', 'arduinoC.pdf', 'IMG_20220219_150927_318.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(230, 'How to Use OV7670 Camera Module  with Arduino', 'how-to-use-ov7670-camera-module-with-arduino-20230106-150030', 'How to Use OV7670 Camera Module  with Arduino', 'How to Use OV7670 Camera Module \r\nwith Arduino', 'Anonymous', 26, 'Anonymous', 'Anonymous', '', 'arduinoCam.pdf', 'IMG_20220219_151331_160.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(231, 'Informatique embarquée Arduino et AVR', 'informatique-embarquee-arduino-et-avr-20230106-150030', 'Informatique embarquée Arduino et AVR', 'Informatique embarquée\r\nArduino et AVR', 'Anonymous', 57, 'Anonymous', 'Anonymous', '', 'arduinoETavr.pdf', 'IMG_20220219_151958_761.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(232, '3G/GPRS Shield for Arduino / Raspberry Pi (3G+ GPS)', '3g-gprs-shield-for-arduino-raspberry-pi-3g-gps-20230106-150030', '3G/GPRS Shield for Arduino / Raspberry Pi (3G+ GPS)', '3G/GPRS Shield for Arduino / Raspberry Pi (3G+ GPS)', 'Laas-CNRS', 23, 'Laas-CNRS', 'France', '', 'arduinoGPRS.pdf', 'IMG_20220219_152451_344.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(233, 'Modèle de comportement d\'un système', 'modele-de-comportement-dun-systeme-20230106-150030', 'Modèle de comportement d\'un système', 'Modèle de comportement d\'un système', 'Anonymous', 13, 'Anonymous', 'Anonymous', '', 'arduinoLabview.pdf', 'IMG_20220219_154140_130.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(234, 'Commande Vitesse Moteur', 'commande-vitesse-moteur-20230106-150030', 'Commande Vitesse Moteur', 'Commande Vitesse Moteur', 'Sami Bachir , Séverin-Marie Depasquale , Baptiste Durand', 63, 'ESIEE', 'Paris', '', 'arduinoLivre.pdf', 'IMG_20220219_154524_949.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(235, 'Lm35 et Arduino- mesure de température', 'lm35-et-arduino-mesure-de-temperature-20230106-150030', 'Lm35 et Arduino- mesure de température', 'Lm35 et Arduino- mesure de température', 'Anonymous', 8, 'Anonymous', 'Anonymous', '', 'arduinolm35.pdf', 'IMG_20220219_163603_760.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(236, 'Présentation du matériel Arduino', 'presentation-du-materiel-arduino-20230106-150030', 'Présentation du matériel Arduino', 'Présentation du matériel Arduino', 'Anonymous', 33, 'Anonymous', 'Anonymous', '', 'arduinoPresentation.pdf', 'IMG_20220219_164605_417.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(237, 'Un Robot Arduino', 'un-robot-arduino-20230106-150030', 'Un Robot Arduino', 'Programmer Les principales fonctions du ROBOT arduino', 'Anonymous', 10, 'Anonymous', 'Anonymous', '', 'arduinoRobot.pdf', 'IMG_20220219_165118_390.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(238, 'Commande  d’un panneau solaire autopiloté via  une carte Arduino ', 'commande-dun-panneau-solaire-autopilote-via-une-carte-arduino-20230106-150030', 'commande  d’un panneau solaire autopiloté via  une carte Arduino ', 'Rapport de Projet : commande \r\nd’un panneau solaire autopiloté via \r\nune carte Arduino ', 'Elhamdani Ayoub , Hdid Mohamed', 52, 'Anonymous', 'Anonymous', '', 'ArduinoSolaire.pdf', 'IMG_20220219_165614_954.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(239, 'Dodacticiel des serveurs de bases de données', 'dodacticiel-des-serveurs-de-bases-de-donnees-20230106-150030', 'Dodacticiel des serveurs de bases de données', 'Dodacticiel des serveurs de bases de données', 'Anonymous', 45, 'ESRI', 'Anonymous', '', 'bases de donnees.pdf', 'IMG_20220219_170132_026.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(240, 'Fondamentaux: Data science', 'fondamentaux-data-science-20230106-150030', 'Fondamentaux: Data science', 'Fondamentaux: Data science', 'Eric Biernat , Michel Lutz', 298, 'Eyrolles', 'France', '', 'Data science  fondamentaux et études de cas  Machine learning avec Python et R by Eric Biernat, Michel Lutz, Yann LeCun (z-lib.org).pdf', 'IMG_20220220_000903_053.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(241, 'Electronique avec Arduino', 'electronique-avec-arduino-20230106-150030', 'Electronique avec Arduino', 'Electronique avec Arduino', 'Pascal MASSON', 107, 'Polytech', 'France', '', 'electroniqueAdruino.pdf', 'IMG_20220220_001541_684.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(242, 'Python3 : Exercises corrigés', 'python3-exercises-corriges-20230106-150030', 'Python3 : Exercises corrigés', 'Python3 : Exercises corrigés', 'Anonymous', 49, 'Anonymous', 'Anonymous', '', 'exercices-python3.pdf', 'IMG_20220220_002332_454.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(243, 'Langage Assembleur', 'langage-assembleur-20230106-150030', 'Langage Assembleur', 'Langage Assembleur', 'Paul  A Carter', 204, 'Anonymous', 'Anonymous', '', 'Langage Assembleur.pdf', 'IMG_20220220_002904_086.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(244, 'Networking Python', 'networking-python-20230106-150030', 'Networking Python', 'Networking Python', 'Anonymous', 137, 'Anonymous', 'France', '', 'Networking Python.pdf', 'IMG_20220220_003624_205.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(245, 'PAS à PAS VERS L\'ASSEMBLEUR', 'pas-a-pas-vers-lassembleur-20230106-150030', 'PAS à PAS VERS L\'ASSEMBLEUR', 'PAS à PAS VERS L\'ASSEMBLEUR', 'Lord Noeworthy', 141, 'Anonymous', 'Anonymous', '', 'pas-a-pas-vers-l-assembleur-par-lord-noteworthyid045.pdf', 'IMG_20220220_004306_234.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(246, 'Premier pas en statistique', 'premier-pas-en-statistique-20230106-150030', 'Premier pas en statistique', 'Premier pas en statistique', 'Yadolah Dodge', 441, 'Spinger', 'Usa', '', 'Premiers pas en statistique ( PDFDrive.com ).pdf', 'IMG_20220220_004909_143.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(247, 'Python for data Analysis', 'python-for-data-analysis-20230106-150030', 'Python for data Analysis', 'Python for data Analysis', 'Wes McKinney', 541, 'O\'Reilly', 'USA', '', 'Python for Data Analysis Data Wrangling with Pandas  NumPy  and IPython by .pdf', 'IMG_20220220_005822_643.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(248, 'Python3', 'python3-20230106-150030', 'Python3', 'Python 3', 'Tutorialspoint', 512, 'Tutorialspoint', 'USA', '', 'python_tutorial.pdf', 'IMG_20220220_010732_574.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 20, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(249, 'A practical introduction to Python3', 'a-practical-introduction-to-python3-20230106-150030', 'Python basics', 'A practical introduction to Python3', 'David Amos', 98, 'RealPython', 'Anonymous', '', 'python-basics-sample-chapters (1).pdf', 'IMG_20220220_011450_039.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(250, 'Initiation au Python', 'initiation-au-python-20230106-150030', 'Initiation au Python', 'Initiation au Python', 'Anonymous', 40, 'Anonymous', 'Anonymous', '', 'PythonInitiation.pdf', 'IMG_20220220_012458_365.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(251, 'Robot mobile', 'robot-mobile-20230106-150030', 'Robot mobile', 'Robot mobile', 'Affoyon Audrey , Stephanies Lima Leticia', 18, 'Anonymous', 'Anonymous', '', 'robotMobile.pdf', 'IMG_20220220_013049_574.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(252, 'Cours de SGBD', 'cours-de-sgbd-20230106-150030', 'Cours de SGBD', 'Cours de SGBD ', 'Riadh HADJ', 243, 'Anonymous', 'Anonymous', '', 'sgbd.pdf', 'IMG_20220220_013539_648.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(253, 'Analyse spaciale en géographie humaine', 'analyse-spaciale-en-geographie-humaine-20230106-150030', 'Analyse spaciale en géographie humaine', 'Analyse spaciale en géographie humaine', 'Peter Haggett', 395, 'Armand Colin', 'Anonymous', '', 'analyse spaciale.pdf', 'IMG_20220220_110858_804.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(254, 'Les fondamentaux de la géographie', 'les-fondamentaux-de-la-geographie-20230106-150030', 'Les fondamentaux de la géographie', 'Les fondamentaux de la géographie', 'Grégoire Berche ,Pierre Denmat,Juliane Giguet ,Isaline Sicard', 84, 'Anonymous', 'Anonymous', '', 'Les fondamentaux de la geographie.pdf', 'IMG_20220220_113027_914.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(255, 'Méthode de l\'enquête géographique: Guide de l\'enseignant', 'methode-de-lenquete-geographique-guide-de-lenseignant-20230106-150030', 'Méthode de l\'enquête géographique: Guide de l\'enseignant', 'Méthode de l\'enquête géographique: Guide de l\'enseignant', 'Anonymous', 45, 'Natgeoed.com', 'Anonymous', '', 'METHODE D\'ENQUETE GEOGRAPHIQUE.pdf', 'IMG_20220220_113757_773.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(256, 'Cours d\'Hydrogéologie générale', 'cours-dhydrogeologie-generale-20230106-150030', 'Cours d\'Hydrogéologie générale', 'Cours d\'Hydrogéologie générale', 'Bruno Arfib', 56, 'www.karsteau.fr', 'Anonymous', '', 'CoursArfib_Hydrogeologie_M1_GEMA_Sc_Eau_Partie1_Impression.pdf', 'IMG_20220220_115256_796.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(257, 'Géologie générale', 'geologie-generale-20230106-150030', 'Géologie générale', 'Géologie générale', 'Mme Djerrab', 44, 'Anonymous', 'Anonymous', '', 'COURS-de-GEOLOGIE-2.pdf', 'IMG_20220220_115920_326.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(258, 'Cours de géologie: Partie 1: La Terre, planète active', 'cours-de-geologie-partie-1-la-terre-planete-active-20230106-150030', 'Cours de géologie: Partie 1: La Terre, planète active', 'Cours de géologie: Partie 1: La Terre, planète active', 'Dr. Youssef Belguit', 62, 'Anonymous', 'Anonymous', '', 'Géodynamique.pdf', 'IMG_20220220_120754_920.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(259, 'Elements de cours de Géologie , 1 ère année', 'elements-de-cours-de-geologie-1-ere-annee-20230106-150030', 'Elements de cours de Géologie , 1 ère année', 'Eléments de cours de géologie', 'Dr LAKKAICHI Abdelmalek', 51, 'Anonymous', 'Anonymous', '', 'Géologie, 1ere année.pdf', 'IMG_20220220_121608_001.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(260, 'Géologie', 'geologie-20230106-150030', 'Géologie', 'Géologie', 'Anonymous', 25, 'Anonymous', 'Anonymous', '', 'GEOLOGIE.pdf', 'IMG_20220220_122310_662.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1);
INSERT INTO `t_livre` (`CodeLivre`, `Titre`, `book_slug`, `SousTitre`, `Description`, `AuteurPrincipal`, `NombrePage`, `NomEditeur`, `LieuEdition`, `ISBN`, `Fichier_livre`, `Image`, `CodeLangue`, `CodeDomaine`, `CodeSousDomaine`, `CodeCompte`, `CodeAdmin`, `CodePropriete`, `Created_on`, `Readed`, `Likes`, `Liked`, `Validate`, `Validate_date`, `Invalidate_date`, `Invalidate_by`, `Statut`) VALUES
(261, 'Programme d\'histoire-géographie de prémière année', 'programme-dhistoire-geographie-de-premiere-annee-20230106-150030', 'Programme d\'histoire-géographie de prémière année', 'Programme d\'histoire-géographie de prémière année', 'Anonymous', 16, 'Anonymous', 'Anonymous', '', 'Nouveau_programme_HG_premiere_EG.pdf', 'IMG_20220220_123101_301.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(262, 'Algèbre et Analyse : receuil d\'Exercices Corrigés', 'algebre-et-analyse-receuil-dexercices-corriges-20230106-150030', 'Algèbre et Analyse : receuil d\'Exercices Corrigés', 'Algèbre et Analyse : receuil d\'Exercices Corrigés', 'Attar Ahmed, MIRI Sofiane Elhadi', 244, 'Anonymous', 'Anonymous', '', 'ALGEBRE ETANALYSE MATHEMATIQUES POUR ETUDIANTS.pdf', 'IMG_20220220_123556_625.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(263, 'Exercices d\'Analyse Mathénatique', 'exercices-danalyse-mathenatique-20230106-150030', 'Exercices d\'Analyse Mathénatique', 'Exercices d\'Analyse Mathénatique', 'F Bastin , JP Schneiders', 203, 'Anonymous', 'Anonymous', '', 'ANALYSE MATHEMATIQUE.pdf', 'IMG_20220220_124104_436.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(264, 'Cours , exercices et problèmes mathématiques', 'cours-exercices-et-problemes-mathematiques-20230106-150030', 'Cours , exercices et problèmes mathématiques', 'Cours , exercices et problèmes mathématiques', 'Francois Thirioux', 203, 'Anonymous', 'France', '', 'COURS EXERCICES PROBLEMES.pdf', 'IMG_20220220_124532_064.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(265, 'Exercices et Examens resolus', 'exercices-et-examens-resolus-20230106-150030', 'Exercices et Examens resolus', 'Exercices et Examens resolus', 'M.Bourich', 118, 'Ensa', 'Anonymous', '', 'EXERCICES ET EXAMENS RESOLUS.pdf', 'IMG_20220220_125330_937.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(266, 'Exercices de Mathénatiques ', 'exercices-de-mathenatiques-20230106-150030', 'Exercices de Mathénatiques ', 'Exercices de Mathénatiques', 'Anonymous', 71, 'EduSCOL', 'France', '', 'IMG_20220220_130051_984.jpg', 'exercices_de_mathematiques_pour_la_classe_terminale_-_2e_partie_536648.pdf', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(267, 'Fondamentaux des Mathématiques', 'fondamentaux-des-mathematiques-20230106-150030', 'Fondamentaux des Mathématiques', 'Fondamentaux des Mathématiques', 'Anonymous', 232, 'Anonymous', 'France', '', 'FONDAMENTAUX DES MATHEMATIQUES 1.pdf', 'IMG_20220220_130601_971.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 31, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(268, 'Mathématiques par Stéphane', 'mathematiques-par-stephane-20230106-150030', 'MathéMathématiques par Stéphane', 'Mathématiques par Stéphanet', 's.perret', 301, 'Anonymous', 'France', '', 'MATHEMATIQUES PAR STEPHANE.pdf', 'IMG_20220220_131439_491.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(269, 'Classes de Mathématiques Supérieures : Cours de Mathématiques', 'classes-de-mathematiques-superieures-cours-de-mathematiques-20230106-150030', 'Classes de Mathématiques Supérieures : Cours de Mathématiques', 'Mathématiques supérieures ', 'Anonymous', 361, 'Anonymous', 'Anonymous', '', 'MATHEMATIQUES SUPERIEURES.pdf', 'IMG_20220220_132204_715.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(270, 'A l\'écoute de chaque élève', 'a-lecoute-de-chaque-eleve-20230106-150030', 'A l\'écoute de chaque élève', 'A l\'écoute de chaque élève', 'Anonymous', 45, 'Ontario', 'Anonymous', '', 'A L ECOUTE DE CHAQUE ELEVE.pdf', 'IMG_20220220_133547_067.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(271, 'Guide pédagogique pour l\'enseignement/apprentissage de la lecture-écriture dans les trois prémières années de l\'école primaire', 'guide-pedagogique-pour-lenseignement-apprentissage-de-la-lecture-ecriture-dans-les-trois-premieres-annees-de-lecole-primaire-20230106-150030', 'Guide pédagogique pour l\'enseignement/apprentissage de la lecture-écriture dans les trois prémières années de l\'école primaire', 'Guide pédagogique pour l\'enseignement/apprentissage de la lecture-écriture dans les trois prémières années de l\'école primaire', 'Anonymous', 116, 'Anonymous', 'Anonymous', '', 'GUIDE PEDAGOGIQUE POUR L\'ENSEIGNEMENT.pdf', 'IMG_20220220_134329_233.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(272, 'Intégration pédagogique des TIC : Succès et Défis', 'integration-pedagogique-des-tic-succes-et-defis-20230106-150030', 'Intégration pédagogique des TIC : Succès et Défis', 'Intégration pédagogique des TIC : Succès et Défis', 'Pr.Thierry Karsenti, Pr.  Simon Collin et Toby Haper-Merret', 358, 'Anonymous', 'Anonymous', '', 'INTEGRATION PEDAGOGIQUE DES TIC.pdf', 'IMG_20220220_134953_916.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(273, 'Notre Beau métier', 'notre-beau-metier-20230106-150030', 'Notre Beau métier', 'Notre Beau métier', 'F. Macaire', 46, 'Anonymous', 'Anonymous', '', 'MANUEL DE PEDAGOGIE APPLIQUEE.pdf', 'IMG_20220220_135815_722.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(274, 'Pédagogie et Didactique pour Enseigner dans la voir professionnelle', 'pedagogie-et-didactique-pour-enseigner-dans-la-voir-professionnelle-20230106-150030', 'Pédagogie et Didactique pour Enseigner dans la voir professionnelle', 'Pédagogie et Didactique pour Enseigner dans la voir professionnelle', 'Daniel Cortes-TORREA', 191, 'Anonymous', 'Anonymous', '', 'PEDAGOGIE ET DIDACTIQUE.pdf', 'IMG_20220220_140827_427.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(275, 'Pédagogie générale', 'pedagogie-generale-20230106-150030', 'Pédagogie générale', 'Pédagogie générale', 'Gaston Mialaret', 63, 'Anonymous', 'Anonymous', '', 'PEDAGOGIE GENERALE.pdf', 'IMG_20220220_141313_747.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(276, 'Module de Pédagogie Générale et Théories de l\'\'Apprentissage', 'module-de-pedagogie-generale-et-theories-de-lapprentissage-20230106-150030', 'Module de Pédagogie Générale et Théories de l\'\'Apprentissage', 'Module de Pédagogie Générale et Théories de l\'\'Apprentissage', 'Nadine Henry', 205, 'Anonymous', 'Anonymous', '', 'Pedagogie Gnle et Theoories de l\'Apprentissage VF.pdf', 'IMG_20220220_142013_819.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(277, 'Bloc de formation en Psychologie et en Didactique', 'bloc-de-formation-en-psychologie-et-en-didactique-20230106-150030', 'Bloc de formation en Psychologie et en Didactique', 'Bloc de formation en Psychologie et en Didactique', 'Anonymous', 46, 'Anonymous', 'Anonymous', '', 'Pedagogie-generale.pdf', 'IMG_20220220_142526_868.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(278, 'Préparer une sequence de formation en enseignement professionnel', 'preparer-une-sequence-de-formation-en-enseignement-professionnel-20230106-150030', 'Préparer une sequence de formation en enseignement professionnel', 'Préparer une sequence de formation en enseignement professionnel', 'Claude Philippe', 44, 'Anonymous', 'Strasbourg', '', 'prepARER UNE SEQUENCE D\'ENSEIGNEMENT.pdf', 'IMG_20220220_143013_704.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(279, 'Une brève histoire de la philosophie', 'une-breve-histoire-de-la-philosophie-20230106-150030', 'Une brève histoire de la philosophie', 'Une brève histoire de la philosophie', 'Roger-Pol', 22, 'Anonymous', 'Anonymous', '', 'BREVE HISTOIRE DE LA PHILOSOPHIE.pdf', 'IMG_20220220_143841_491.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(280, 'Introduction à la Philosophie de l\'histoire', 'introduction-a-la-philosophie-de-lhistoire-20230106-150030', 'Introduction à la Philosophie de l\'histoire', 'Introduction à la Philosophie de l\'histoire', 'Raymond Aron', 22, 'Anonymous', 'Anonymous', '', 'INTRODUCTION A LA PHILOSOPHIE DE L\'HISTOIRE.pdf', 'IMG_20220220_144242_711.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 35, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(281, 'Introduction à l\'histoire et la philosophie des sciences', 'introduction-a-lhistoire-et-la-philosophie-des-sciences-20230106-150030', 'Introduction à l\'histoire et la philosophie des sciences', 'Introduction à l\'histoire et la philosophie des sciences', 'Jan Lacki', 124, 'Anonymous', 'Anonymous', '', 'INTRODUCTION A L\'HISTOIRE DE LA PHILOSOPHIE DES SCIENCES.pdf', 'IMG_20220220_144721_188.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(282, 'Les ouvrages philosophiques ', 'les-ouvrages-philosophiques-20230106-150030', 'Les ouvrages philosophiques ', 'Les ouvrages philosophiques ', 'Léa Maubon', 76, 'Anonymous', 'Anonymous', '', 'les-ouvrages-philosophiques-a-destination-du-grand-public.pdf', 'IMG_20220220_145137_047.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(283, 'Philosophie de l\'éducation pour l\'avenir', 'philosophie-de-leducation-pour-lavenir-20230106-150030', 'Philosophie de l\'éducation pour l\'avenir', 'Philosophie de l\'éducation pour l\'avenir', 'Thomas De Konick', 246, 'Série Essais', 'Anonymous', '', 'PHILOSOPHIE DE L\'EDUCATION.pdf', 'IMG_20220220_145607_427.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(284, 'Evolution psychologique de la personnalité', 'evolution-psychologique-de-la-personnalite-20230106-150030', 'Evolution psychologique de la personnalité', 'Evolution psychologique de la personnalité', 'Pierre Jannet', 320, 'Anonymous', 'Anonymous', '', 'EVOLUTION PSYCHOLOGIQUE DE LA PERSONNALITE 1929 BIBLIO PIERRE JANET (320 Pages - 1,3 Mo).pdf', 'IMG_20220220_150725_879.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(285, 'Introduction à la psychologie sociale', 'introduction-a-la-psychologie-sociale-20230106-150030', 'Introduction à la psychologie sociale', 'Introduction à la psychologie sociale', 'Anonymous', 459, 'Anonymous', 'Anonymous', '', 'intro_psycho_soc_t1.pdf', 'IMG_20220220_151342_207.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(286, 'Introduction à la psychologie du travail et des organisations', 'introduction-a-la-psychologie-du-travail-et-des-organisations-20230106-150030', 'Introduction à la psychologie du travail et des organisations', 'Introduction à la psychologie du travail et des organisations', 'Claude Louche', 18, 'Dunod', 'France', '', 'INTRODUCTION.pdf', 'IMG_20220220_152502_903.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:30', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(287, 'Cours de Psychologie', 'cours-de-psychologie-20230106-150031', 'Cours de Psychologie', 'Cours de Psychologie', 'Rodolphe Ghiglione et Jean François Richard', 30, 'Dunod', 'France', '', 'COURS DE PSYCHOLOGIE.pdf', 'IMG_20220220_153646_758.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(288, 'Introduction à la psychologie du travail', 'introduction-a-la-psychologie-du-travail-20230106-150031', 'Introduction à la psychologie du travail', 'Introduction à la psychologie du travail', 'Jacques Leplat et Xavier Cuny', 26, 'Anonymous', 'Anonymous', '', 'INTRODUCTION A LA PSYCHOLOGIE.pdf', 'IMG_20220220_154205_183.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 36, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(289, 'Cours de Psychologie Cognitive', 'cours-de-psychologie-cognitive-20230106-150031', 'Cours de Psychologie Cognitive', 'Cours de Psychologie Cognitive', 'Atfa Memaï', 39, 'Anonymous', 'Anonymous', '', 'Psycho COGNITIVE.pdf', 'IMG_20220220_155507_939.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 40, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(290, 'Introduction à la Psychologie', 'introduction-a-la-psychologie-20230106-150031', 'Introduction à la Psychologie', 'Introduction à la Psychologie', 'Anonymous', 105, 'Anonymous', 'Anonymous', '', 'psychoLOGIE  COURS.pdf', 'IMG_20220220_160132_283.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(291, 'La contribution de la science Politique à l\'Etude des Politiques de Santé', 'la-contribution-de-la-science-politique-a-letude-des-politiques-de-sante-20230106-150031', 'La contribution de la science Politique à l\'Etude des Politiques de Santé', 'La contribution de la science Politique à l\'Etude des Politiques de Santé', 'Anonymous', 41, 'Anonymous', 'Canada', '', 'ProjetSciencesPoFR_MEP.pdf', 'IMG_20220220_161435_699.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 37, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(292, 'Plan national de santé Publique', 'plan-national-de-sante-publique-20230106-150031', 'Plan national de santé Publique', 'Plan national de santé Publique', 'Anonymous', 22, 'Canada', 'Canada', '', 'plan_national_de_sante_publique__psnp (1).pdf', 'IMG_20220220_162044_446.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(293, 'Pourquoi utiliser kghouse?', 'pourquoi-utiliser-kghouse-20230106-150031', '', '', 'Kabila', 0, NULL, '', '', 'Synamed.pdf', '', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 20, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 0),
(294, 'Propriété intellectuelle en informatique', 'propriete-intellectuelle-en-informatique-20230106-150031', '', '', '', 0, NULL, '', '', 'extrait-du-livre.pdf', 'droit info1.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(295, 'COURS de DROIT de l’INFORMATIQUE', 'cours-de-droit-de-linformatique-20230106-150031', '', '', 'Rios Campo Jean Pierre ', 0, NULL, '', '', 'droit-informatique.pdf', 'droit info2.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(296, 'Guide juridique des contrats en informatique', 'guide-juridique-des-contrats-en-informatique-20230106-150031', '', '', 'Jérôme DEBRAS', 0, NULL, '', '', 'guide jur.pdf', 'guide jurid.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(297, 'Protection du logiciel par un droit d’auteur spécial', 'protection-du-logiciel-par-un-droit-dauteur-special-20230106-150031', '', '', '', 0, NULL, '', '', 'protection logiciel1.pdf', 'protection logic1.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(298, 'Contrat de licence d’utilisation des logiciels de planification DOKA (valable pour les entrepreneurs) ', 'contrat-de-licence-dutilisation-des-logiciels-de-planification-doka-valable-pour-les-entrepreneurs-20230106-150031', '', '', '', 0, NULL, '', '', 'CGU_Doka_revue_SOFFAL.pdf', 'contrant de lic.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(299, 'Les régimes juridiques du logiciel', 'les-regimes-juridiques-du-logiciel-20230106-150031', '', '', 'Kone mamadou', 0, NULL, '', '', '61532-le-regime-juridique-du-logiciel.pdf', 'regime juridique du logiciel.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(300, 'Les infractions portant atteinte à la sécurité du système informatique d’une entreprise', 'les-infractions-portant-atteinte-a-la-securite-du-systeme-informatique-dune-entreprise-20230106-150031', 's', '', 'Ibtissem Maalaoui', 0, NULL, '', '', 'Maalaoui_Ibtissem_2011_memoire.pdf', 'information portant att.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(301, 'Aide-mémoire sur les principales questions liées aux contrats d’informatique en nuage', 'aide-memoire-sur-les-principales-questions-liees-aux-contrats-dinformatique-en-nuage-20230106-150031', '', '', 'Nations Unis', 0, NULL, '', '', '19-09104_fr.pdf', 'aide mem.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 32, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(302, 'Contrats informatiques : limitez les risques de litiges !', 'contrats-informatiques-limitez-les-risques-de-litiges-20230106-150031', '', '', 'Me  Jean-Philippe Leclère et  Me  Josquin Louvier', 0, NULL, '', '', 'risques lit.pdf', 'risques de litiges.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(303, 'La protection de l’information', 'la-protection-de-linformation-20230106-150031', '', '', 'Hélène Dorion', 0, NULL, '', '', 'prot in.pdf', 'protection de l info.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(304, 'ESSAI SUR LA NOTION DE CYBERCRIMINALITÉ', 'essai-sur-la-notion-de-cybercriminalite-20230106-150031', '', '', 'Mohamed CHAWKI', 0, NULL, '', '', 'cybercrime.pdf', 'cbcrim.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(305, 'Étude détaillée sur la cybercriminalité', 'etude-detaillee-sur-la-cybercriminalite-20230106-150031', '', '', 'UNODC', 0, NULL, '', '', 'Cybercrime_Study_French.pdf', 'unodc.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(306, 'ÉTUDE EXPLORATOIRE SUR LE DROIT D’AUTEUR ET LES DROITS CONNEXES ET LE DOMAINE PUBLIC', 'etude-exploratoire-sur-le-droit-dauteur-et-les-droits-connexes-et-le-domaine-public-20230106-150031', '', '', 'Séverine Dusollier', 0, NULL, '', '', 'scoping_study_cr.pdf', 'ompi.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(307, 'DROITS D’AUTEUR ET INTERNET', 'droits-dauteur-et-internet-20230106-150031', '', '', 'Prof. Dr. Mireille BUYDENS', 0, NULL, '', '', 'rapp_fr.pdf', 'dai.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(308, 'Comprendre le droit d’auteur et les droits connexes ', 'comprendre-le-droit-dauteur-et-les-droits-connexes-20230106-150031', '', '', 'Organisation mondiale de la propriété intellectuelle', 0, NULL, '', '', 'wipo_pub_909_2016.pdf', 'cdadc.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 22, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(309, 'Convention des Nations Unies sur l’utilisation de communications électroniques dans les contrats internationaux', 'convention-des-nations-unies-sur-lutilisation-de-communications-electroniques-dans-les-contrats-internationaux-20230106-150031', '', '', 'NATIONS UNIES', 0, NULL, '', '', '06-57453_ebook.pdf', 'con&&&.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(310, 'RAPPORT SUR LE COMMERCE ÉLECTRONIQUE ET LE DÉVELOPPEMENT 2003', 'rapport-sur-le-commerce-electronique-et-le-developpement-2003-20230106-150031', '', '', 'Secrétariat de la CNUCED ', 0, NULL, '', '', 'ecdr2003_fr.pdf', 'co, elll.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(311, 'Le commerce électronique peut-il favoriser la croissance des petites et moyennes entreprises en Afrique ?', 'le-commerce-electronique-peut-il-favoriser-la-croissance-des-petites-et-moyennes-entreprises-en-afrique-20230106-150031', '', '', 'NATIONS UNIES', 0, NULL, '', '', 'ntis_policy_brief_5_fr.pdf', 'note d orien.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(312, 'La lutte contre la cybercriminalité au regard de l’action des États', 'la-lutte-contre-la-cybercriminalite-au-regard-de-laction-des-etats-20230106-150031', '', '', 'Romain Boos', 0, NULL, '', '', 'DDOC_T_2016_0158_BOOS.pdf', 'hal open.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 22, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(313, 'DROIT D’AUTEUR ET DROIT VOISIN', 'droit-dauteur-et-droit-voisin-20230106-150031', '', '', 'Bureau burkinabè de droit d\'auteur', 0, NULL, '', '', 'bf023fr.pdf', 'droit aut et droit v.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(314, 'Les systèmes de gestion des bases de données', 'les-systemes-de-gestion-des-bases-de-donnees-20230106-150031', '', '', 'Pierre Stockreiser ', 0, NULL, '', '', 'cours-gratuit.com--CoursBD-id5245.pdf', 'IMG_20220313_182254_328.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(315, 'Les droits voisins', 'les-droits-voisins-20230106-150031', '', '', '', 0, NULL, '', '', 'Fiche-3.8-Les-droits-voisins.pdf', 'droit voisin.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 27, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(316, 'Base de données: Méthodes d\'Analyse', 'base-de-donnees-methodes-danalyse-20230106-150031', '', '', 'Thierry Lecroq', 0, NULL, '', '', 'bado.pdf', 'IMG_20220313_184812_614.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 22, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(317, 'Algorithme de résumé de message MD5', 'algorithme-de-resume-de-message-md5-20230106-150031', '', '', 'R. Rivest', 0, NULL, '', '', 'rfc1321.pdf', 'MD5.JPG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(318, 'Livre blanc', 'livre-blanc-20230106-150031', '', '', 'Anonymous', 0, NULL, '', '', 'livre_blanc.pdf', 'IMG_20220318_110634_070.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(319, 'Douleurs , soins palliatifs et accompagnement', 'douleurs-soins-palliatifs-et-accompagnement-20230106-150031', '', '', 'Pr Serge Perrot', 0, NULL, '', '', 'Douleur, soins palliatifs et accompagnement MED-LINE.pdf', 'IMG_20220318_113059_803.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 20, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(320, 'Cardiologie Vaculaire 8 è Edition', 'cardiologie-vaculaire-8-e-edition-20230106-150031', '', '', 'Dr. David ATTIAS , Pr. Nicolas LELLOUCHE', 0, NULL, '', '', 'Télécharger iKB Cardiologie, 8e éd - 2018.pdf', 'IMG_20220318_113753_751.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(321, 'Médécine Cardiovasculaire', 'medecine-cardiovasculaire-20230106-150031', '', '', 'Elsier Masson', 0, NULL, '', '', 'College National Des Enseignants de Cardiologie - Médecine Cardio-Vasculaire Réussir Les Ecni (2019).pdf', 'IMG_20220318_115027_958.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(322, 'Insuffisance cardiaque', 'insuffisance-cardiaque-20230106-150031', '', '', 'Haute Autorité de Santé', 0, NULL, '', '', 'guide_parcours_de_soins_ic_web.pdf', 'IMG_20220318_121409_503.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(323, 'Etudiant-Infirmier', 'etudiant-infirmier-20230106-150031', '', '', 'Anonymous', 0, NULL, '', '', 'LIVRET-GHT-Copie.pdf', 'IMG_20220318_122333_945.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(324, 'Anatomie et Physiologie humaine', 'anatomie-et-physiologie-humaine-20230106-150031', '', '', 'Anonymous', 0, NULL, '', '', 'anatomie_et_physiologie_humaines.pdf', 'IMG_20220318_123207_355.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 19, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(325, 'Guide de preparation à l\'Examen', 'guide-de-preparation-a-lexamen-20230106-150031', '', '', 'Ordre des infirmiers Canada', 0, NULL, '', '', 'IPS-guide-deroulement-cardiologie.pdf', 'IMG_20220318_124315_863.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 24, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(326, 'Cours de science en Cardiologie', 'cours-de-science-en-cardiologie-20230106-150031', '', '', 'Anonymous', 0, NULL, '', '', 'denault_08sept2004.pdf', 'IMG_20220318_131438_483.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(327, 'La neurologie fonctionnelle', 'la-neurologie-fonctionnelle-20230106-150031', 'Fonctionelle', 'Fff', 'HAL', 0, NULL, '', '', '75302_MEYER_2019_diffusion.pdf', 'IMG_20220318_140704_359.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(328, 'Sémiologie Neurologique', 'semiologie-neurologique-20230106-150031', '', '', 'Anonymous', 0, NULL, '', '', 'semio_neuro.pdf', 'IMG_20220318_141933_013.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(329, 'Dispositifs médicaux & progrès en neurologie', 'dispositifs-medicaux-progres-en-neurologie-20230106-150031', '', '', 'Anonymous', 0, NULL, '', '', 'snitem_neurologie_web-2.pdf', 'IMG_20220318_142809_944.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(330, 'Pathologies Péadriques aigues', 'pathologies-peadriques-aigues-20230106-150031', '', '', 'Camille TISON-CHAMBELLAN', 0, NULL, '', '', 'Pathologies pédiatriques aigues Dr Tison Chambellan 122016_1.pdf', 'IMG_20220318_143602_372.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 19, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(331, 'Soins Hospitaliers Pédiatrique', 'soins-hospitaliers-pediatrique-20230106-150031', '', '', 'OMS', 0, NULL, '', '', '9789242548372_fre.pdf', 'IMG_20220318_144556_577.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(332, 'Cours avancé en reanimation pédriatique', 'cours-avance-en-reanimation-pedriatique-20230106-150031', '', '', 'Dre Véronic Thibault, MDHôpital Pierre LeGardeur', 0, NULL, '', '', '12_reanimation_pediatrique_avance_VThibault.pptx', 'IMG_20220318_145206_829.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(333, 'GYNÉCOLOGIE NÉPHROLOGIE ', 'gynecologie-nephrologie-20230106-150031', '', '', ' Alexis Maillard , Lina Jeantin', 0, NULL, '', '', 'Extrait-05-MAJBOOK-GYNÉCO-URO.pdf', 'IMG_20220318_150052_520.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 18, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(334, 'Prise en charge du  patient en réanimation   ', 'prise-en-charge-du-patient-en-reanimation-20230106-150031', '', '', 'Dr Yann Hamonic', 0, NULL, '', '', 'fascicule_5_maj_2011gynobs.pdf', 'IMG_20220318_150920_881.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 21, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(335, 'Mises à jour en Gynécologie', 'mises-a-jour-en-gynecologie-20230106-150031', '', '', 'B.HÉDON,P.DERUELLE,O.GRAESSLIN', 0, NULL, '', '', 'Gynecologie-CNGOF_2016.pdf', 'Screenshot_20220318-151418.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 26, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(336, 'BASES DE DONNÉES Cours et exercices corrigés ', 'bases-de-donnees-cours-et-exercices-corriges-20230106-150031', '', '', 'Jean-Luc Hainaut', 0, NULL, '', '', 'BASES_DE_DONNEES_ET_MODELES_DE_CALCUL.pdf', 'IMG_20220326_153537_262.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 16, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(337, 'Structure de données en C', 'structure-de-donnees-en-c-20230106-150031', 'Structure de données en C', 'Structure', 'Hassan Zekkouri', 0, NULL, '', '', 'Structures_de_donnees_en_C.pdf', 'IMG_20220326_154237_344.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 22, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(338, 'XML Cours et Exercices corrigés', 'xml-cours-et-exercices-corriges-20230106-150031', '', '', 'Alexandre Brilliant', 0, NULL, '', '', 'Eyrolles_xml_cours_et_exercices.pdf', 'IMG_20220326_154949_424.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(339, 'Prémières applications wen 2.0 avec Ajax et PhP', 'premieres-applications-wen-20-avec-ajax-et-php-20230106-150031', '', '', 'Jean-Marie de France', 0, NULL, '', '', 'Premieres_applications_Web_2_0_avec.pdf', 'IMG_20220401_143518_737.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 25, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(340, 'PRATIQUE DE ET PHP MySQL Conception et réalisation de sites web dynamiques', 'pratique-de-et-php-mysql-conception-et-realisation-de-sites-web-dynamiques-20230106-150031', '', '', 'Philippe Rigaux', 0, NULL, '', '', 'PratiQue_de_MySQL_et_PHP_Conception_et_r.pdf', 'IMG_20220403_091902_715.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(341, 'Les grandes théories économiques pour Les nuls', 'les-grandes-theories-economiques-pour-les-nuls-20230106-150031', '', '', 'Michel Musolino', 0, NULL, '', '', '4_5868248597169965536 (1).pdf', 'IMG_20220414_143102_660.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 16, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(342, 'Outilsdel’Internet (côté Serveur)', 'outilsdelinternet-cote-serveur-20230106-150031', '', '', 'Tristan  Colombo ', 0, NULL, '', '', 'cours_ip6.pdf', 'IMG_20220420_181829_931.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 19, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(343, 'Apprendre Java et C++ en parallèle', 'apprendre-java-et-c-en-parallele-20230106-150031', '', '', 'Jean-Bernard Boichat', 0, NULL, '', '', 'JAVA_et_C_en_parallele.pdf', 'IMG_20220420_195405_534.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 20, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(344, 'Apprendre à programmer avec Python ', 'apprendre-a-programmer-avec-python-20230106-150031', '', '', 'Gérard Swinnen', 0, NULL, '', '', 'Apprendre_a_programmer_avec_Python_par.pdf', 'IMG_20220423_094815_818.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 15, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(345, 'ANDROID Développer des applications mobiles ', 'android-developper-des-applications-mobiles-20230106-150031', '', '', ' Florent Garin', 0, NULL, '', '', 'ANDROID_Developper_des_applications_mobi.pdf', 'IMG_20220423_095607_185.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(346, 'Cours de Biologies Cellulaire Ière Partie', 'cours-de-biologies-cellulaire-iere-partie-20230106-150031', '', '', 'Professeur  Zine El Abidine  TRIQUI', 0, NULL, '', '', 'biocell.pdf', 'IMG_20220423_101856_035.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 29, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(347, 'comptabilité générale  8e édition', 'comptabilite-generale-8e-edition-20230106-150031', '', '', 'Jacques Richard, Christine Collette', 0, NULL, '', '', 'COMPTABILITE_GENERALE.pdf', 'IMG_20220423_102552_528.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 15, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(348, 'Comptabilité générale de l\'entreprise avec Exercices Corrigés', 'comptabilite-generale-de-lentreprise-avec-exercices-corriges-20230106-150031', '', '', 'Cyrille Mandou', 0, NULL, '', '', 'ComptabilitÃ© gÃ©nÃ©rale de l\'entreprise.pdf', 'IMG_20220423_103722_216.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 13, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(349, 'Gestion Financière', 'gestion-financiere-20230106-150031', '', '', 'Malcolm Halper', 0, NULL, '', '', 'wcms_629029.pdf', 'IMG_20220423_104739_870.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 18, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(350, 'Principes d’économie moderne J. E. Stiglitz Prix Nobel d’économie J.-D. Lafay • C. E. Walsh ', 'principes-deconomie-moderne-j-e-stiglitz-prix-nobel-deconomie-j-d-lafay-o-c-e-walsh-20230106-150031', '', '', ' J. E. Stiglitz Prix Nobel d’économie J.-D. Lafay • C. E. Walsh Traduction de la 4e édition américaine par Françoise Nouguès', 0, NULL, '', '', '9782804174729.pdf', '9782804174729.pdf', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(351, 'MATHEMATIQUES GENERALES, EXERCICES DE BASE', 'mathematiques-generales-exercices-de-base-20230106-150031', '', '', 'F.Bastin', 0, NULL, '', '', 'Exbase1314.pdf', 'IMG_20220423_122422_887.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 14, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(352, 'Intelligence Artificielle. LIVRE BLANC', 'intelligence-artificielle-livre-blanc-20230106-150031', '', '', 'Irid', 0, NULL, '', '', 'AI_livre-blanc_n01 (1).pdf', 'IMG_20220423_123656_873.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(353, 'Introduction à l\'intelligence Artificielle', 'introduction-a-lintelligence-artificielle-20230106-150031', '', '', 'Esma Aïmeur', 0, NULL, '', '', 'Ch1-Intro-IA-IFT6261-H-11.pdf', 'Screenshot_20220423-124318.png', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 19, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(354, 'Algèbre Linéaire :Cours et Exercices', 'algebre-lineaire-cours-et-exercices-20230106-150031', '', '', 'L. Brandolese ,  M-A. Dronne', 0, NULL, '', '', 'poly_algebre_3A.pdf', 'IMG_20220423_192003_742.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 23, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(355, 'VB.net', 'vbnet-20230106-150031', '', '', 'Philippe Lasserre', 0, NULL, '', '', 'Cours_VB_NET.pdf', 'IMG_20220425_161316_770.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 15, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(356, 'Cours de Python', 'cours-de-python-20230106-150031', '', '', 'Patrick Fuchs et Pierre Poulain', 0, NULL, '', '', 'cours-python.pdf', 'python.PNG', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 18, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(357, 'Creation de bases de données ', 'creation-de-bases-de-donnees-20230106-150031', '', '', 'Nicolas Larousse', 0, NULL, '', '', 'creation_de_bases_de_donnees_www.livrebooks.eu.pdf', 'IMG_20220702_151117_968.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 6, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(358, 'Introduction aux probabilités avec Python', 'introduction-aux-probabilites-avec-python-20230106-150031', '', '', 'Thierry Alhalel ', 0, NULL, '', '', 'Introduction aux probabilités avec Python (Thierry Alhalel) (z-lib.org).pdf', 'IMG_20220708_075102_048.jpg', 0, 0, 0, NULL, NULL, 0, '2023-01-06 14:00:31', 13, 0, 0, 0, '0000-00-00', '0000-00-00', 0, 1),
(359, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012062.pdf', '1673012062.PNG', 0, 3, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(360, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012139.pdf', '1673012139.PNG', 0, 2, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(361, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012311.pdf', '1673012311.PNG', 0, 1, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(362, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012339.pdf', '1673012339.PNG', 0, 1, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(363, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012409.pdf', '1673012409.PNG', 0, 1, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(364, 'lé cours de typesc&ripts for, scrq²cj', 'le-cours-de-typescripts-for-scrq2cj-20230106-150031', '', '', '', 15, '', '', '', '1673012457.pdf', '1673012457.PNG', 0, 2, 0, NULL, 1, 1, '2023-01-08 20:38:36', 1, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(365, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012703.pdf', '1673012703.PNG', 0, 1, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(366, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012842.pdf', '1673012842.PNG', 0, 1, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1),
(367, 'Cours Typescript', 'cours-typescript-20230106-150031', '', '', '', 15, '', '', '', '1673012977.pdf', '1673012977.PNG', 0, 1, 0, NULL, 1, 1, '2023-01-06 14:00:31', 0, 0, 0, 1, '0000-00-00', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_memoire`
--

CREATE TABLE `t_memoire` (
  `CodeMemoire` int(11) NOT NULL,
  `Sujet` text NOT NULL,
  `article_slug` text NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `Fichier` text NOT NULL,
  `CodeAnnee` int(11) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `CodeCategorie` int(11) NOT NULL,
  `CodeFaculte` int(11) NOT NULL,
  `CodeCompte` int(11) DEFAULT NULL,
  `CodeAdmin` int(11) DEFAULT NULL,
  `CodePropriete` int(11) NOT NULL,
  `Statut` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Readed` int(11) NOT NULL,
  `Liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_memoire`
--

INSERT INTO `t_memoire` (`CodeMemoire`, `Sujet`, `article_slug`, `Auteur`, `Fichier`, `CodeAnnee`, `Institution`, `CodeCategorie`, `CodeFaculte`, `CodeCompte`, `CodeAdmin`, `CodePropriete`, `Statut`, `Created_on`, `Readed`, `Liked`) VALUES
(2, 'Conception d’un système de monitoring de l’énergie solaire au sein d’une institution privée Cas de l’ISIG-GOMA', 'conception-dun-systeme-de-monitoring-de-lenergie-solaire-au-sein-dune-institution-privee-cas-de-lisig-goma-20230108-130646', 'Baraka Bigega Espoir, Abio Bamongoyo', '1671451213.pdf', 5, 'ISIG-GOMA', 2, 2, NULL, 1, 1, 1, '2023-01-08 12:29:59', 4, 0),
(3, 'DEVELOPPEMENT D’UNE API D’ECHANGE DE S DONNEES ENTRE LES SITES WEB MARCHANDS P ARTENAIRES D’UNE ENTREPRISE COMME RCIA L E, CAS DE MALEKANI SARLU', 'developpement-dune-api-dechange-de-s-donnees-entre-les-sites-web-marchands-p-artenaires-dune-entreprise-comme-rcia-l-e-cas-de-malekani-sarlu-20230108-130646', 'Kavira Malekani Shekinah', '1673179537.pdf', 5, 'ISIG-GOMA', 2, 2, NULL, 1, 1, 1, '2023-01-08 12:30:09', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_offre`
--

CREATE TABLE `t_offre` (
  `CodeOffre` int(11) NOT NULL,
  `Entreprise` varchar(250) NOT NULL,
  `offre_slug` text NOT NULL,
  `NombrePoste` int(11) NOT NULL,
  `Poste` text NOT NULL,
  `DateDebut` datetime NOT NULL,
  `DateExpiration` datetime NOT NULL,
  `Fichier` text NOT NULL,
  `Statut` int(11) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_offre`
--

INSERT INTO `t_offre` (`CodeOffre`, `Entreprise`, `offre_slug`, `NombrePoste`, `Poste`, `DateDebut`, `DateExpiration`, `Fichier`, `Statut`, `Created_on`, `Created_by`) VALUES
(1, 'Institut supérieur d\'informatique et de gestion', 'enseignants-20230121-115642', 10, 'Enseignants', '2023-01-21 00:00:00', '2023-01-29 00:00:00', '1674298603.pdf', 1, '2023-01-21 14:25:25', 0),
(2, 'Societe national d\'éléctricité', 'agents-de-terrain-20230121-150404', 2, 'Agents de terrain', '2023-01-11 00:00:00', '2023-01-20 00:00:00', '1674309844.pdf', 1, '2023-01-21 14:24:25', 0),
(3, 'REGIDESO', 'informaticiens-20230121-150532', 4, 'Informaticiens', '2023-01-22 00:00:00', '2023-01-29 00:00:00', '1674309932.pdf', 1, '2023-01-21 14:05:32', 1),
(4, 'SNEL', 'agents-de-terrain-20230121-155852', 4, 'Agents de terrain', '2023-01-29 00:00:00', '2023-01-31 00:00:00', '1674313132.pdf', 1, '2023-01-21 15:19:44', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_option`
--

CREATE TABLE `t_option` (
  `CodeOption` int(11) NOT NULL,
  `Designation` varchar(250) NOT NULL,
  `option_slug` text NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_option`
--

INSERT INTO `t_option` (`CodeOption`, `Designation`, `option_slug`, `Created_on`) VALUES
(3, 'Pedagorie générale', 'pedagorie-generale-20230108-135456', '2023-01-08 12:54:56'),
(4, 'Commerciale Informatique', 'commerciale-informatique-20230108-135511', '2023-01-08 12:55:11');

-- --------------------------------------------------------

--
-- Structure de la table `t_question`
--

CREATE TABLE `t_question` (
  `CodeQuestion` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DateQuestion` datetime NOT NULL,
  `Statut` int(11) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `question_slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_reponse`
--

CREATE TABLE `t_reponse` (
  `CodeReponse` int(11) NOT NULL,
  `Response` text NOT NULL,
  `Statut` int(11) NOT NULL,
  `CodeQuestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_session_exetat`
--

CREATE TABLE `t_session_exetat` (
  `CodeSession` int(11) NOT NULL,
  `Session` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_session_exetat`
--

INSERT INTO `t_session_exetat` (`CodeSession`, `Session`) VALUES
(1, 'Culture générale'),
(2, 'Science'),
(3, 'Option'),
(4, 'Langue'),
(5, 'Hors-session');

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
(1, 'esbarakabigega@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2023-01-22 05:31:23', '2023-01-22 07:00:36', 'Baraka Bigega Espoir', '', 1),
(3, 'hortencekitobi@gmail.com', '7b2e9f54cdff413fcde01f330af6896c3cd7e6cd', '2022-12-07 17:50:28', '0000-00-00 00:00:00', 'Hortence Kitobi', '', 1),
(10, 'passybayongwa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-12-07 17:50:19', '0000-00-00 00:00:00', 'Passy Bayongwa', '', 1),
(13, 'siwamumberecarin1998@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2023-01-08 19:38:44', '2023-01-08 20:38:44', 'Siwa', '', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_abonnement`
--
ALTER TABLE `t_abonnement`
  ADD PRIMARY KEY (`CodeAbonnement`);

--
-- Index pour la table `t_annee_academique`
--
ALTER TABLE `t_annee_academique`
  ADD PRIMARY KEY (`CodeAnnee`);

--
-- Index pour la table `t_categorie_compte`
--
ALTER TABLE `t_categorie_compte`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Index pour la table `t_categorie_memoire`
--
ALTER TABLE `t_categorie_memoire`
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
  ADD UNIQUE KEY `un_mail` (`Email`);

--
-- Index pour la table `t_cours`
--
ALTER TABLE `t_cours`
  ADD PRIMARY KEY (`CodeCours`);

--
-- Index pour la table `t_domaine`
--
ALTER TABLE `t_domaine`
  ADD PRIMARY KEY (`CodeDomaine`);

--
-- Index pour la table `t_faculte`
--
ALTER TABLE `t_faculte`
  ADD PRIMARY KEY (`CodeFaculte`);

--
-- Index pour la table `t_image`
--
ALTER TABLE `t_image`
  ADD PRIMARY KEY (`CodeImage`);

--
-- Index pour la table `t_item`
--
ALTER TABLE `t_item`
  ADD PRIMARY KEY (`CodeItem`);

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
-- Index pour la table `t_memoire`
--
ALTER TABLE `t_memoire`
  ADD PRIMARY KEY (`CodeMemoire`);

--
-- Index pour la table `t_offre`
--
ALTER TABLE `t_offre`
  ADD PRIMARY KEY (`CodeOffre`);

--
-- Index pour la table `t_option`
--
ALTER TABLE `t_option`
  ADD PRIMARY KEY (`CodeOption`);

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
-- Index pour la table `t_session_exetat`
--
ALTER TABLE `t_session_exetat`
  ADD PRIMARY KEY (`CodeSession`);

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
-- AUTO_INCREMENT pour la table `t_annee_academique`
--
ALTER TABLE `t_annee_academique`
  MODIFY `CodeAnnee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_categorie_compte`
--
ALTER TABLE `t_categorie_compte`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_categorie_memoire`
--
ALTER TABLE `t_categorie_memoire`
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
-- AUTO_INCREMENT pour la table `t_cours`
--
ALTER TABLE `t_cours`
  MODIFY `CodeCours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_domaine`
--
ALTER TABLE `t_domaine`
  MODIFY `CodeDomaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_faculte`
--
ALTER TABLE `t_faculte`
  MODIFY `CodeFaculte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_item`
--
ALTER TABLE `t_item`
  MODIFY `CodeItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_lecture`
--
ALTER TABLE `t_lecture`
  MODIFY `CodeLecture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `t_livre`
--
ALTER TABLE `t_livre`
  MODIFY `CodeLivre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT pour la table `t_memoire`
--
ALTER TABLE `t_memoire`
  MODIFY `CodeMemoire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_offre`
--
ALTER TABLE `t_offre`
  MODIFY `CodeOffre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `t_option`
--
ALTER TABLE `t_option`
  MODIFY `CodeOption` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `t_question`
--
ALTER TABLE `t_question`
  MODIFY `CodeQuestion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_session_exetat`
--
ALTER TABLE `t_session_exetat`
  MODIFY `CodeSession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_sous_domaine`
--
ALTER TABLE `t_sous_domaine`
  MODIFY `CodeSousDomaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `t_superadmin`
--
ALTER TABLE `t_superadmin`
  MODIFY `CodeSuper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
