-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2021 a las 19:14:54
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
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `pass`) VALUES
(1, 'olga.cobo@ezzing.com', 'qwerty78');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `img_url` varchar(500) NOT NULL,
  `alt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `title`, `price`, `img_url`, `alt`) VALUES
(1, 'Mascarilla Basica Azul', 9.99, 'img/1azul.jpg', 'Mascarilla de tela color azul con tira para colgar del cuello'),
(2, 'Mascarilla Basica Rosa', 9.99, 'img/2rosa.jpg', 'Mascarilla de tela color rosa con tira para colgar del cuello'),
(3, 'Mascarilla Basica Beige', 9.99, 'img/3beige.jpg', 'Mascarilla de tela color beige con tira para colgar del cuello'),
(4, 'Mascarilla Basica Negra', 9.99, 'img/4negra.jpg', 'Mascarilla de tela color negro con tira para colgar del cuello'),
(5, 'Mascarilla Estampada Flores ', 11.99, 'img/5flores.jpg', 'Mascarilla de tela estampada de fondo negro y flores azules con tira para colgar del cuello'),
(6, 'Mascarilla Estampada Tigre', 11.99, 'img/6tigre.jpg', 'Mascarilla de tela con estampado de tigue en tonos marrones con tira para colgar del cuello');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
