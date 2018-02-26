-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2018 a las 16:52:27
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticia`
--
CREATE DATABASE IF NOT EXISTS `noticia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `noticia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `pubDate` datetime NOT NULL,
  `enclosure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `title`, `description`, `link`, `pubDate`, `enclosure`) VALUES
(1, 'Entrada dentro del RSS', 'primera noticia', 'http://www.sitiodelquesedeseapublicar.com/enero-2013.html', '2018-01-20 16:44:45', 'avi'),
(2, 'Entrada dentro del RSS', 'segunda noticia', 'http://www.sitiodelquesedeseapublicar.com/enero-2013.html', '2018-01-20 16:47:51', 'mp4'),
(3, 'Entrada dentro del RSS', 'tercera noticia', 'http://www.sitiodelquesedeseapublicar.com/enero-2013.html', '2018-01-20 16:50:05', 'PDF');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
