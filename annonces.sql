-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 06:30 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welcome`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `valid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `name`, `description`, `email`, `image`, `valid`) VALUES
(1, 'Annonce de logement 91 les pyramides', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id nunc sed metus malesuada condimentum.\n                Pellentesque quis elit at mi elementum tincidunt vel tempor nisi. Cum sociis natoque penatibus et magnis\n                dis parturient montes, nascetur ridiculus mus. Nam aliquam varius magna, vitae porta augue fringilla\n                eget. Aliquam lacus nunc, ultrices eu nulla id, pharetra faucibus augue. Fusce consequat rhoncus urna\n                sit amet feugiat. Proin viverra ex erat. Vivamus lobortis ac ipsum id facilisis. Quisque sollicitudin\n                risus libero, elementum fringilla metus finibus sit amet. Phasellus volutpat egestas justo, in pretium\n                arcu suscipit quis. Aenean velit quam, lobortis in ornare vitae, lobortis aliquet massa.', 'blabla@gmail.com', '28546.jpg', 1),
(7, 'Repas gratuit', 'Rendez vous chez moi', 'blabla@live.fr', '62615.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
