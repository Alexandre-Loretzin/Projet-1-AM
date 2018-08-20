-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2018 at 01:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet-1-AM`
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `categorie_produit` varchar(255) NOT NULL,
  `description_produit` text NOT NULL,
  `image_produit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `categorie_produit`, `description_produit`, `image_produit`) VALUES
(1, 'Objet bidon 1', 'Bidon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(2, 'Objet bidon 2', 'Bidon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(3, 'Objet bidon 3', 'Bidon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(4, 'Objet bidon 4', 'Bidon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(5, 'Objet machin 1', 'Machin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(6, 'Objet machin 2', 'Machin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(7, 'Objet machin 3', 'Machin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image'),
(8, 'Objet machin 4', 'Machin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim elit magna, in commodo nibh bibendum et. Pellentesque scelerisque nisl metus, id ullamcorper sapien suscipit at. Nulla facilisi. In hac habitasse platea dictumst. Quisque consequat ligula id ipsum dignissim, et.', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `nom_produit` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`nom_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
