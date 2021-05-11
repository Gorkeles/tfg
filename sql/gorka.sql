-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2021 a las 17:49:20
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

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
-- Estructura de tabla para la tabla `motorutas`
--

CREATE TABLE `motorutas` (
  `id_moto` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Volcado de datos para la tabla `motos`
--

INSERT INTO `motos` (`id_moto`, `marca`, `modelo`, `cilindrada`) VALUES
(1, 'Suzuki', 'GSX-R', 1000),
(2, 'Yamaha', 'Tmax', 530),
(3, 'Yamaha', 'FZ1-S', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica5`
--

CREATE TABLE `practica5` (
  `id` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
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
(1, 'Gorka', 600080988, 'gorkeles@gmail.com', 'qwerty', '2021-01-21', 'Si'),
(2, 'Sara', 655895387, 'saragarcia2310@gmail.com', 'qwerty', '2021-01-07', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(5) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `distancia` int(5) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `provincia`, `nivel`, `distancia`, `descripcion`) VALUES
(1, 'MADRID', 'Fácil', 200, 'Cruz Verde'),
(2, 'MADRID', 'Media', 150, 'Atazar'),
(3, 'Guadalajara', 'Dificil', 300, 'Galve de Sorve');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `motorutas`
--
ALTER TABLE `motorutas`
  ADD KEY `id_moto` (`id_moto`),
  ADD KEY `id_ruta` (`id_ruta`);

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
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `id_moto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `practica5`
--
ALTER TABLE `practica5`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `motorutas`
--
ALTER TABLE `motorutas`
  ADD CONSTRAINT `motorutas_ibfk_1` FOREIGN KEY (`id_ruta`) REFERENCES `rutas` (`id_ruta`),
  ADD CONSTRAINT `motorutas_ibfk_2` FOREIGN KEY (`id_moto`) REFERENCES `motos` (`id_moto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
