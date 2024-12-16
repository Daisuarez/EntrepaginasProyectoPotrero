-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2024 a las 14:30:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES
(19, 'Los electores', '1734352478_2we8ukj8.png'),
(20, 'Grimorio 13', '1734352526_4zcdwanc.png'),
(21, 'Leyes de fuego', '1734352558_9lhg9dq5.png'),
(22, 'He nacido tres veces', '1734352581_38rl6lss.png'),
(23, 'Es una continua lucha', '1734352619_1734337571_0wzrdj6g.png'),
(24, 'Codigo de ladrones', '1734352665_cimvuytd.png'),
(25, 'El caballero astado', '1734352698_eosl0818.png'),
(26, 'El ocaso del hielo', '1734352725_f4pldyl5.png'),
(27, '289 dias', '1734352763_i4p8029r.png'),
(28, 'Cada historia cuenta', '1734352792_ijkcd4p8.png'),
(29, 'Pasapagina', '1734352821_sik2b009.png'),
(30, 'Mamá nos dijo adiós', '1734352854_zqzquw3o.png'),
(31, 'Be project', '1734352887_ezir5v5d.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
