-- phpMyAdmin
-- version 4.5.2

-- Base de données :  `db_search_exo`
--
DROP DATABASE IF EXIXSTS `db_search_victor`
CREATE DATABASE `db_search_victor`;
use `db_search_victor`;

-- Structure de la table `chall_list`
--
DROP TABLE IF EXISTS `chall_list`;
CREATE TABLE IF NOT EXISTS `chall_list` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- Contenu de la table `chall_list`
--
INSERT INTO `chall_list` (`name`) VALUES
('Generation d''un damier'),
('Pavage de cercle'),
('Dessiner une pyramide'),
('Suite de syracuse'),
('Cryptage affine');