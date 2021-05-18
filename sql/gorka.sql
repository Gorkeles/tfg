-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2021 a las 20:09:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gorka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `pass`) VALUES
(1, 'gorkeles@gmail.com', 'qwerty');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motos`
--

CREATE TABLE `motos` (
  `id_moto` int(5) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `cilindrada` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica5`
--

CREATE TABLE `practica5` (
  `id` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `telefono` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asistencia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `practica5`
--

INSERT INTO `practica5` (`id`, `nombre`, `telefono`, `email`, `pass`, `fecha`, `asistencia`) VALUES
(1, 'Gorka', 600080988, 'gorkeles@gmail.com', 'qwerty', '2021-05-18', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `distancia` int(5) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id_moto`);

--
-- Indices de la tabla `practica5`
--
ALTER TABLE `practica5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `id_moto` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `practica5`
--
ALTER TABLE `practica5`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
