-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2013 a las 13:08:09
-- Versión del servidor: 5.5.28-1
-- Versión de PHP: 5.4.4-10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `barricada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barricada`
--

CREATE TABLE IF NOT EXISTS `barricada` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` enum('policia','barricada') COLLATE utf8_bin NOT NULL,
  `fecha` int(20) NOT NULL,
  `duracion` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `barricada`
--

INSERT INTO `barricada` (`id`, `tipo`, `fecha`, `duracion`, `lat`, `lng`) VALUES
(1, 'barricada', 1363381200, 6, -34.607214907435875, -58.43524932861328),
(2, 'barricada', 1363381200, 6, -34.60513087669504, -58.3882999420166);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
