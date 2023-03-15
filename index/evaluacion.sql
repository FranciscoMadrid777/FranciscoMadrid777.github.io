-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 07:04:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutas y verduras`
--

CREATE TABLE `frutas y verduras` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` int(11) NOT NULL,
  `descuento` varchar(200) NOT NULL,
  `caducidad` date NOT NULL,
  `fruta o verdura` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `frutas y verduras`
--

INSERT INTO `frutas y verduras` (`id`, `nombre`, `precio`, `descuento`, `caducidad`, `fruta o verdura`) VALUES
(1, 'maiz', 13, '10%', '2023-03-31', 0),
(2, 'manzana', 16, '0%', '2023-04-14', 1),
(3, 'pera', 20, '10%', '2023-05-16', 1),
(4, 'sandia', 45, '4%', '2023-04-23', 1),
(5, 'aguacate', 7777777, '0%', '2023-03-16', 0),
(6, 'cebolla', 76, '10%', '2023-04-24', 0),
(7, 'tomate', 59, '11%', '2023-04-17', 1),
(8, 'calabaza', 45, '30%', '2023-04-09', 0),
(9, 'lechuga', 46, '30%', '2023-03-28', 0),
(10, 'cebolla morada', 999999, '0%', '2023-03-15', 0),
(11, 'elote', 87, '20%', '2023-06-29', 0),
(12, 'fresa', 200, '10%', '2023-06-04', 1),
(13, 'uva lila', 23, '10%', '2023-03-25', 1),
(14, 'melon', 60, '30%', '2023-04-26', 1),
(15, 'zanahoria', 300, '50%', '2023-06-11', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pan`
--

CREATE TABLE `pan` (
  `id` int(11) NOT NULL,
  `Nombre de pan` text NOT NULL,
  `precio` int(11) NOT NULL,
  `descuento` varchar(200) NOT NULL,
  `material` text NOT NULL,
  `dulce` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pan`
--

INSERT INTO `pan` (`id`, `Nombre de pan`, `precio`, `descuento`, `material`, `dulce`) VALUES
(1, 'torta', 120, '10%', 'harina y jamon', 0),
(2, 'torta', 20, '10%', 'harina y jamon', 1),
(3, 'cupcake', 111, '11%', 'chocolate y harina', 1),
(4, 'cuerno', 40, '16%', 'harina y carne de burro', 0),
(5, 'pan crema', 40, '5%', 'crema', 0),
(6, 'pan galleta', 59, '0%', 'galletas', 1),
(7, 'pan de manzana', 50, '100%', 'manzana y harina', 0),
(8, 'pan de queso', 70, '30%', 'queso y harina', 9),
(9, 'pan de dulce', 200, '0%', 'caramelo y harina', 1),
(10, 'pastel', 1200, '30%', 'huevo, harina, azucar,  etc.', 1),
(11, 'pan de pay', 160, '20%', 'manzana pera y harina', 1),
(12, 'pan de tamarindo', 100, '12%', 'tamarindo', 0),
(13, 'pan de uva', 200, '20%', 'uvas', 1),
(14, 'pan de maiz', 300, '30%', 'maiz', 0),
(15, 'pan de elote', 104, '10%', 'maiz', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frutas y verduras`
--
ALTER TABLE `frutas y verduras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pan`
--
ALTER TABLE `pan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `frutas y verduras`
--
ALTER TABLE `frutas y verduras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pan`
--
ALTER TABLE `pan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
