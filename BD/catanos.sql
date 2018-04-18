-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2018 a las 20:07:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catanos`
--
CREATE DATABASE IF NOT EXISTS `catanos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `catanos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `idasistentes` int(11) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `cata` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `valorar_cata` enum('''1'', ''2'', ''3'', ''4'', ''5''') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `asistentes`:
--   `DNI`
--       `usuarios` -> `mail`
--   `cata`
--       `catas` -> `idcata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catas`
--

CREATE TABLE `catas` (
  `idcata` int(10) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `cartel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `catas`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catavino`
--

CREATE TABLE `catavino` (
  `idcatavino` int(10) NOT NULL,
  `idvino` int(10) NOT NULL,
  `idcata` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `catavino`:
--   `idvino`
--       `vinos` -> `referencia`
--   `idcata`
--       `catas` -> `idcata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `CIF` varchar(9) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `info` text NOT NULL,
  `logo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `empresas`:
--

--
-- Volcado de datos para la tabla `empresas`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `numero` int(5) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `autor` varchar(20) NOT NULL,
  `resumen` text NOT NULL,
  `cuerpo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `noticias`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `mail` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nick` varchar(10) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `foto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--

--
-- Volcado de datos para la tabla `usuarios`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `idvaloracion` int(10) NOT NULL,
  `idasistente` int(10) NOT NULL,
  `catavino` int(10) NOT NULL,
  `valoracion` enum('''1'', ''2'', ''3'', ''4'', ''5''') NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `valoracion`:
--   `idasistente`
--       `asistentes` -> `idasistentes`
--   `catavino`
--       `catavino` -> `idcatavino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinos`
--

CREATE TABLE `vinos` (
  `referencia` int(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `empresa` varchar(9) NOT NULL,
  `year` year(4) NOT NULL,
  `info` text NOT NULL,
  `foto` varchar(10) NOT NULL,
  `uva` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `vinos`:
--   `empresa`
--       `empresas` -> `CIF`
--

--
-- Volcado de datos para la tabla `vinos`
--




--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`idasistentes`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `cata` (`cata`);

--
-- Indices de la tabla `catas`
--
ALTER TABLE `catas`
  ADD PRIMARY KEY (`idcata`);

--
-- Indices de la tabla `catavino`
--
ALTER TABLE `catavino`
  ADD PRIMARY KEY (`idcatavino`),
  ADD KEY `idvino` (`idvino`),
  ADD KEY `idcata` (`idcata`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`CIF`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`idvaloracion`),
  ADD KEY `idasistente` (`idasistente`),
  ADD KEY `catavino` (`catavino`);

--
-- Indices de la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`referencia`),
  ADD KEY `empresa` (`empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catas`
--
ALTER TABLE `catas`
  MODIFY `idcata` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `numero` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vinos`
--
ALTER TABLE `vinos`
  MODIFY `referencia` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52017;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD CONSTRAINT `asistentes_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `usuarios` (`mail`),
  ADD CONSTRAINT `asistentes_ibfk_2` FOREIGN KEY (`cata`) REFERENCES `catas` (`idcata`);

--
-- Filtros para la tabla `catavino`
--
ALTER TABLE `catavino`
  ADD CONSTRAINT `catavino_ibfk_1` FOREIGN KEY (`idvino`) REFERENCES `vinos` (`referencia`),
  ADD CONSTRAINT `catavino_ibfk_2` FOREIGN KEY (`idcata`) REFERENCES `catas` (`idcata`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`idasistente`) REFERENCES `asistentes` (`idasistentes`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`catavino`) REFERENCES `catavino` (`idcatavino`);

--
-- Filtros para la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD CONSTRAINT `vinos_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`CIF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
