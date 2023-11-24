-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: blsn1oqors8cveyewvzf-mysql.services.clever-cloud.com:3306
-- Tiempo de generación: 24-11-2023 a las 23:32:12
-- Versión del servidor: 8.0.22-13
-- Versión de PHP: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blsn1oqors8cveyewvzf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int NOT NULL,
  `nombre_admin` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contraseña` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `codigo_libro` int NOT NULL,
  `titulo_lib` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `autor_libro` varchar(50) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `categoria_libro` varchar(40) NOT NULL,
  `subcategoria_libro` varchar(40) NOT NULL,
  `cantidad` int NOT NULL,
  `estatus` enum('PRESTAMO','DISPONIBLE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multa`
--

CREATE TABLE `multa` (
  `id` int NOT NULL,
  `matriculam` varchar(45) DEFAULT NULL,
  `nombrem` varchar(100) DEFAULT NULL,
  `correom` varchar(100) DEFAULT NULL,
  `deuda` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `Folio` int NOT NULL,
  `codigo_lib` int NOT NULL,
  `titulo_lib` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matricula` varchar(45) NOT NULL,
  `nom_usu` varchar(100) NOT NULL,
  `fecha_prestamo` varchar(45) NOT NULL,
  `fecha_recoge` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fecha_limite` varchar(45) DEFAULT NULL,
  `fecha_devolucion` varchar(45) DEFAULT NULL,
  `fecha_debeentregar` varchar(45) DEFAULT NULL,
  `estatus_prestamo` enum('PRESTADO','RECOGIDO','NO RECOGIDO','DEVUELTO','DEVUELTO EN MAL ESTADO') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `receptor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `folio_rese` int NOT NULL,
  `codigo_lr` int NOT NULL,
  `titulo_lr` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matricular` int NOT NULL,
  `nombrer` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha_rese` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `matricula` int NOT NULL,
  `nombre_usu` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contraseña` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`codigo_libro`);

--
-- Indices de la tabla `multa`
--
ALTER TABLE `multa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`Folio`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`folio_rese`),
  ADD KEY `codigo_libro` (`codigo_lr`),
  ADD KEY `matricula` (`matricular`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `multa`
--
ALTER TABLE `multa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `Folio` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `folio_rese` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`codigo_lr`) REFERENCES `libro` (`codigo_libro`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`matricular`) REFERENCES `usuario` (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
