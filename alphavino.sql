-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2019 a las 22:07:35
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alphavino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE `bodega` (
  `id_bodega` int(11) NOT NULL,
  `marca_bodega` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_bodega` int(11) NOT NULL,
  `correo_bodega` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pais_bodega` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_bodega` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `encargado_bodega` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bodega`
--

INSERT INTO `bodega` (`id_bodega`, `marca_bodega`, `telefono_bodega`, `correo_bodega`, `pais_bodega`, `direccion_bodega`, `encargado_bodega`) VALUES
(1, 'merlot', 22577777, 'merlot@gmail.com', 'Italia', 'Italia siis', 'Un italiano'),
(2, 'Concha y Torro', 22577777, 'concha@gmail.com', 'Italia', 'Italia siis', 'Un italiano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cliente` int(11) NOT NULL,
  `correo_cliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contra_cliente` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac_cliente` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `correo_cliente`, `contra_cliente`, `fecha_nac_cliente`) VALUES
(1, 'Prueba', 'Prueba', 44455788, 'dargorcm@gmail.com', '$2y$10$ZNzJZshuYl69XPpoNlFFV.sO2go1n34Gp0NBoky8JjsflXu4NBmd6', '2019-05-08'),
(2, 'Prueba', 'Prueba', 44455667, 'dargorcm2@gmail.com', '$2y$10$BTXAIjgTCQIGml6SLRbmyeXf9VWwcTnwbzRCY8ANwsA.ZSITTyJ/y', '2019-05-08'),
(3, 'gabriel', 'monterrosa', 1323455, 'gabriel@gmail.com', '$2y$10$4Ov9Xs1K/0qGlLrPbcqcpO.J0nvAONyrnVO5iQG0OvtQrLHOit9tG', '2001-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_ven` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_vino` int(11) NOT NULL,
  `cantidad_venta` int(11) NOT NULL,
  `total_venta` double(5,2) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_detalle_ven`, `id_venta`, `id_vino`, `cantidad_venta`, `total_venta`, `fecha_venta`) VALUES
(2, 10, 1, 1, 20.00, '2019-05-24'),
(3, 11, 1, 1, 20.00, '2019-05-24'),
(4, 12, 1, 2, 20.00, '2019-05-24'),
(5, 13, 1, 3, 80.00, '2019-05-24'),
(6, 13, 2, 1, 20.00, '2019-05-24'),
(7, 14, 1, 2, 40.00, '2019-06-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre_empleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_empleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_empleado` int(11) NOT NULL,
  `correo_empleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `alias_empleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave_empleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `foto_empleado` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vino`
--

CREATE TABLE `tipo_vino` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_vino`
--

INSERT INTO `tipo_vino` (`id_tipo`, `nombre`, `descripcion`) VALUES
(1, 'Rosado', ''),
(2, 'Tinto', ''),
(3, 'Blanco', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_cliente`, `fecha_venta`) VALUES
(10, 1, '2019-05-24'),
(11, 1, '2019-05-24'),
(12, 1, '2019-05-24'),
(13, 1, '2019-05-24'),
(14, 1, '2019-06-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinos`
--

CREATE TABLE `vinos` (
  `id_vino` int(11) NOT NULL,
  `nombre_vino` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `cosecha_vino` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio_vino` decimal(5,2) NOT NULL,
  `id_bodega` int(11) NOT NULL,
  `descripcion_vino` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_vino` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado_vino` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vinos`
--

INSERT INTO `vinos` (`id_vino`, `nombre_vino`, `id_tipo`, `cosecha_vino`, `precio_vino`, `id_bodega`, `descripcion_vino`, `imagen_vino`, `estado_vino`) VALUES
(1, 'Vino Merlot x400', 2, '1988', '20.00', 1, 'Fue cosechado por Deadpool cuando viajo al pasado', 'img/vino.png', 0),
(2, 'Vino Merlot x500', 2, '1988', '20.00', 1, 'Fue cosechado por Deadpool cuando viajo al pasado', '', 0),
(3, 'Vino Merlot x500', 1, '1988', '20.00', 1, 'Fue cosechado por Deadpool cuando viajo al pasado', '', 0),
(4, 'Vino Mirlotet White Version', 3, '1988', '24.00', 2, 'Fue cosechado por Deadpool cuando viajo al pasado', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`id_bodega`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `correo_cliente` (`correo_cliente`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_ven`),
  ADD KEY `id_vino` (`id_vino`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `tipo_vino`
--
ALTER TABLE `tipo_vino`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_empleado` (`id_cliente`);

--
-- Indices de la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`id_vino`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_bodega` (`id_bodega`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodega`
--
ALTER TABLE `bodega`
  MODIFY `id_bodega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_ven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_vino`
--
ALTER TABLE `tipo_vino`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `vinos`
--
ALTER TABLE `vinos`
  MODIFY `id_vino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_vino`) REFERENCES `vinos` (`id_vino`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
