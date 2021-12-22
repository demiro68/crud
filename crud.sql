-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2021 a las 20:34:45
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tema` text NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `tema`, `usu_id`) VALUES
(3, 'Juan', 'Perez GOMEZ', 'Mi charla se llamarÃ¡ EL NUEVO PARADIGMA DE LA PROGRAMACION y en ella hablare sobre los metodos de programacion orientados a objetos y eventos ', 2),
(5, 'Juan Carlos', 'Cambia', 'Voy a hablar sobre LA EVOLUCION DEL FUTBOL EN EL SIGLO XXI y se tratarÃ¡ sobre la explicacion de los cambios en el deporte rey en el nuevo milenio', 11),
(6, 'Daniel ', 'Elito', 'EL PARADIGMA DE LA PROGRAMACION ORIENTADA A OBJETOS EN EL NUEVO MILENIO, como evolucionaron los lenguajes netamente orientados a objetos y los que utilizan algunos elementos de la POO', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `documento` int(11) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `rol` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `documento`, `telefono`, `correo`, `clave`, `rol`) VALUES
(1, 'admin', 'admin', 1, '1', 'admin@daniel.com', 'admin', 'A'),
(3, 'Juan', 'Perez', 1111111, '4444444', 'juanpe@gmail.com', '1234', 'U'),
(4, 'Juan', 'Gomez', 111111, '12342545656', 'jgomez@gmail.com', '78911', 'U'),
(5, 'Jorge', 'Fernandez', 22233665, '33333334', 'jfer10@gmail.com', '78945', 'U'),
(6, 'Roberto', 'Fernandez', 22233444, '3333222', 'Roberfer10@gmail.com', '4896', 'U'),
(7, 'Roberto', 'Perez', 12121384, '15467890', 'Robperez@gmail.com', '9999', 'U'),
(9, 'Julian', 'Fernandez', 22233111, '3333333', 'jfer2@gmail.com', '7894', 'U'),
(10, 'Daniel ', 'Elito', 11121385, '12345678', 'delito@gmail.com', '1234', 'U'),
(11, 'Juan Carlos', 'Cambia', 33333222, '12334455', 'jkk@gmail.com', '7890', 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
