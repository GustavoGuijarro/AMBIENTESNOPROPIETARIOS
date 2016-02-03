-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2016 a las 20:17:28
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
`id_carrera` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre`) VALUES
(1, 'An?lisis de Sistemas Inform?ticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
`id_estudiante` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombres`, `apellidos`, `email`, `contrasena`) VALUES
(1, 'Andr?s David', 'P?rez Andrade', 'andr?s.perez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Juan Jos', 'Flores Espejo', 'juan.flores@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Manuel', 'Perez', 'mperez@inmedical.com.ec', 'f416168b5eb1a5be010bbbc327eabee876de8b05'),
(8, 'Carlos', 'Pasquel', 'cpasquel@hotmail.com', '04024ac03c114027f1116abedeb4bb78b01a31db'),
(9, 'Gustavo', 'Guijarro', 'gguijarro@inmedical.com.ec', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_x_materia`
--

CREATE TABLE IF NOT EXISTS `estudiante_x_materia` (
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante_x_materia`
--

INSERT INTO `estudiante_x_materia` (`id_estudiante`, `id_materia`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
`id_materia` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `profesor` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`, `id_nivel`, `profesor`) VALUES
(1, 'INFORM?TICA B?SICA', 1, 'Andr?s Dur'),
(2, 'PROGRAMACI?N ESTRUCTURADA', 1, 'Iv?n Grijalva'),
(3, 'MATEM?TICAS DISCRETAS', 1, 'Iv?n Grijalva'),
(4, 'C?LCULO DIFERENCIAL E INTEGRAL', 1, 'Santiago Guerra'),
(5, 'PROGRAMACION ORIENTADA A OBJETOS', 2, 'Ivonne Maldonado'),
(6, 'SISTEMAS OPERATIVOS I', 2, 'Edwin Salvador'),
(7, 'ARQUITECTURA COMPUTADORES II', 2, 'Edwin Salvador'),
(8, 'ESTAD?STICA', 2, 'Stefanie V?squez'),
(9, 'CONTABILIDAD GENERAL', 2, 'Esthela Moscoso'),
(10, 'PROGRAMACI?N AVANZADA', 3, 'Iv?n Grijalva'),
(11, 'SISTEMAS OPERATIVOS II', 3, 'Ivonne Maldonado'),
(12, 'ALGORITMOS FUNDAMENTALES', 3, 'Eddie Y?nez'),
(13, 'CONTABILIDAD DE COSTOS', 3, 'Esthela Moscoso'),
(14, 'ECOLOG?A Y MEDIO AMBIENTE', 3, 'Gloria Erazo'),
(15, 'T?CNICAS DE AN?LISIS Y DISE?O DE SISTEMAS INFORM?TICOS', 4, 'Ivonne Maldonado'),
(25, 'REDES DE COMPUTADORES I', 4, 'Cesar Gallardo'),
(26, 'INVESTIGACI?N DE OPERACIONES', 4, 'Luis Ponce'),
(27, 'ARQUITECTURA WEB', 4, 'Andr?s Dur'),
(28, 'BASE DE DATOS MULTIDIMENSIONALES', 5, 'Iv?n Grijalva'),
(29, 'DESARROLLO DE SISTEMAS DE INFORMACION', 5, 'Luis Almeida'),
(30, 'REDES DE COMPUTADORES II', 5, 'Cesar Gallardo'),
(31, 'ADMINISTRACION DE REDES TCP/IP', 5, 'Cesar Gallardo'),
(32, 'AMBIENTES NO PROPIETARIOS', 5, 'Edwin Salvador'),
(33, 'ARQUITECTURA ORIENTADA A SERVICIOS', 6, 'Ivonne Maldonado'),
(34, 'SEGURIDAD EN REDES', 6, 'Cesar Gallardo'),
(35, 'REDES DE AREA LOCAL INALAMBRICA', 6, 'Cesar Gallardo'),
(36, 'SERVICIOS SOBRE REDES', 6, 'Cesar Gallardo'),
(37, 'APLICACIONES DISTRIBUIDAS', 6, 'Edwin Salvador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
`id_nivel` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `numero`, `nombre`, `id_carrera`) VALUES
(1, 1, 'Primero', 1),
(2, 2, 'Segundo', 1),
(3, 3, 'Tercero', 1),
(4, 4, 'Cuarto', 1),
(5, 5, 'Quinto', 1),
(6, 6, 'Sexto', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
 ADD PRIMARY KEY (`id_carrera`), ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
 ADD PRIMARY KEY (`id_estudiante`), ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `estudiante_x_materia`
--
ALTER TABLE `estudiante_x_materia`
 ADD UNIQUE KEY `id` (`id_estudiante`,`id_materia`), ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`id_materia`), ADD UNIQUE KEY `nombre` (`nombre`), ADD KEY `id_nivel` (`id_nivel`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
 ADD PRIMARY KEY (`id_nivel`), ADD UNIQUE KEY `numero` (`numero`), ADD UNIQUE KEY `nombre` (`nombre`), ADD KEY `id_carrera` (`id_carrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante_x_materia`
--
ALTER TABLE `estudiante_x_materia`
ADD CONSTRAINT `id_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`),
ADD CONSTRAINT `id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
ADD CONSTRAINT `id_nivel` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Filtros para la tabla `nivel`
--
ALTER TABLE `nivel`
ADD CONSTRAINT `id_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
