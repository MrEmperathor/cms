-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 08:02:45
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
-- Base de datos: `bikes_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `observacion` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `observacion`) VALUES
(1, 'bicicleta de pruebas'),
(2, 'Salidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueos`
--

CREATE TABLE `parqueos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `horaingreso` varchar(25) NOT NULL,
  `horasalida` varchar(25) NOT NULL,
  `duracion` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parqueos`
--

INSERT INTO `parqueos` (`id`, `usuario_id`, `horaingreso`, `horasalida`, `duracion`) VALUES
(1, 1, '2019-11-11 02:00:00', '2019-11-12 06:23:37', '1463'),
(6, 31, '2019-11-12 05:07:17', '2019-11-12 07:47:34', '40'),
(7, 1, '2019-11-12 06:32:44', '', ''),
(8, 32, '2019-11-12 07:14:08', '2019-11-12 07:41:30', '27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `rol` enum('administrador','vigilante','usuario') NOT NULL,
  `documento` int(25) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `nombre2` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `genero` enum('MASCULINO','FEMENINO','OTRO') NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rol`, `documento`, `nombre`, `nombre2`, `apellido`, `apellido2`, `contrasena`, `genero`, `correo`) VALUES
(1, 'administrador', 123, 'Andres', 'Fabian', 'Aya', 'Cifuentes', 'doc123', 'MASCULINO', ''),
(3, 'vigilante', 123456789, 'Jhon', 'Jairo', 'Castellanos', 'Parra', '123456789', 'MASCULINO', ''),
(4, 'usuario', 786543, 'karen', 'Julieth', 'Echeverry', 'Medina', '', 'FEMENINO', 'pruebas2@localhost'),
(31, 'usuario', 12343, 'pruebas', 'pruebas', 'pruebas', 'askdj', '', 'MASCULINO', 'pelislatino24online@gmail.com'),
(32, 'usuario', 20484652, 'maria', 'margarita', 'cifuentes', 'lopez', '', 'FEMENINO', 'preubas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_datos`
--

CREATE TABLE `usuario_datos` (
  `id` int(11) NOT NULL,
  `tipo` enum('EMAIL','TELEFONO','DIRECCION','BICICLETAS') NOT NULL,
  `usuario_id` int(15) NOT NULL,
  `dato` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_datos`
--

INSERT INTO `usuario_datos` (`id`, `tipo`, `usuario_id`, `dato`, `color`) VALUES
(8, '', 0, '', ''),
(9, '', 0, '', ''),
(10, '', 0, '', ''),
(11, 'TELEFONO', 0, 'asda', ''),
(13, 'DIRECCION', 1, 'cale 123', ''),
(16, 'BICICLETAS', 1, '12312', 'VERDE'),
(18, 'TELEFONO', 1, '3002782284', ''),
(19, 'EMAIL', 1, 'andresayac@gmail.com', ''),
(20, 'BICICLETAS', 32, '7123', 'VERDE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parqueos`
--
ALTER TABLE `parqueos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_datos`
--
ALTER TABLE `usuario_datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `parqueos`
--
ALTER TABLE `parqueos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuario_datos`
--
ALTER TABLE `usuario_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
