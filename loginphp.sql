-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2017 a las 04:04:41
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginphp`
--

CREATE TABLE `loginphp` (
  `matricula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(30) NOT NULL,
  `fechareg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `loginphp`
--

INSERT INTO `loginphp` (`matricula`, `nombre`, `paterno`, `materno`, `username`, `password`, `email`, `privilegio`, `fechareg`) VALUES
('150204012', 'Fredy Luciano', 'Barrientos', 'Patricio', 'Fredy97', '1234', 'fbarrientosp97@gmail.com', 1, '2017-09-26 02:02:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `loginphp`
--
ALTER TABLE `loginphp`
  ADD PRIMARY KEY (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
