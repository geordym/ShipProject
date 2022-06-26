-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2022 a las 01:59:29
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacion_espacial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lanzaderas`
--

CREATE TABLE `lanzaderas` (
  `id_lanzadera` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `combustible_tipo` varchar(255) NOT NULL,
  `combustible_material` varchar(255) NOT NULL,
  `unidad_medida_masa` varchar(255) NOT NULL,
  `id_nave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lanzaderas`
--

INSERT INTO `lanzaderas` (`id_lanzadera`, `descripcion`, `combustible_tipo`, `combustible_material`, `unidad_medida_masa`, `id_nave`) VALUES
(1, 'La nave Saturno V fue creada en EE.UU su primera actividad fue en el año 1967-06-01tenia un empuje de 3500Tm . Esta servia para Transportar carga util al espacio, esta transporto la nave tripulada Apolo hasta la luna.', 'Quimico', 'Petro Refinado', 'Tm', 1),
(2, 'La nave FALCON IX fue creada en EE.UU su primera actividad fue en el año 2010tenia un empuje de 934Kg . Esta servia para Enviar naves tripuladas a la ISS, esta lanzo la nave tripulada Dragon V2', 'Quimico', 'Usa como propelentes queroseno para cohetes (RP-1) densificado y oxígeno líquido (LOX)', 'Kg', 6),
(3, 'La nave ATLAS V fue creada en EE.UU su primera actividad fue en el año 2002tenia un empuje de 725Kg . Esta servia para Llevar satelites al espacio que hacen parte de un programa de la defensa de E.U.', 'Quimico', 'mezcla de keroseno y oxígeno líquido', 'Kg', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naves`
--

CREATE TABLE `naves` (
  `id_nave` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pais_origen` varchar(255) NOT NULL,
  `fecha_actividad` int(55) NOT NULL,
  `cantidad_empuje` bigint(20) NOT NULL,
  `cantidad_peso` bigint(20) NOT NULL,
  `funcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `naves`
--

INSERT INTO `naves` (`id_nave`, `tipo`, `nombre`, `pais_origen`, `fecha_actividad`, `cantidad_empuje`, `cantidad_peso`, `funcion`) VALUES
(1, 'Lanzadera', 'Saturno V', 'EE.UU', 1967, 3500, 2900, 'Transportar carga util al espacio, esta transporto la nave tripulada Apolo hasta la luna.'),
(2, 'Robotica', 'Cassini-Huygens', 'EU/EUROPA/ITALIA', 1997, 43, 6, 'Empleada para estudiar saturno y sus lunas'),
(3, 'Robotica', 'Pionero X', 'EE.UU', 1972, 26, 258, 'Estudiar Saturno'),
(4, 'Robotica', 'Pionero XI', 'EE.UU', 1973, 26, 258, 'Estudiar Saturno'),
(5, 'Tripulada', 'SKYLAB', 'EE.UU', 1973, 19, 77, 'Centro de investigacion espacial Estado Unidense'),
(6, 'Lanzadera', 'FALCON IX', 'EE.UU', 2010, 934, 549, 'Enviar naves tripuladas a la ISS, esta lanzo la nave tripulada Dragon V2'),
(7, 'Lanzadera', 'ATLAS V', 'EE.UU', 2002, 725, 546000, 'Llevar satelites al espacio que hacen parte de un programa de la defensa de E.U.'),
(8, 'Tripulada', 'Salyut', 'UNION SOVIETICA', 1982, 295, 19, 'Experimentar y estudiar el comportamiento humano en condiciones ingravidas'),
(9, 'Tripulada', 'APOLO', 'EE.UU', 1966, 101, 1837, 'Enviar un hombre a la luna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roboticas`
--

CREATE TABLE `roboticas` (
  `id_robotica` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `combustible_tipo` varchar(255) NOT NULL,
  `combustible_material` varchar(255) NOT NULL,
  `unidad_medida_masa` varchar(255) NOT NULL,
  `id_nave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roboticas`
--

INSERT INTO `roboticas` (`id_robotica`, `descripcion`, `combustible_tipo`, `combustible_material`, `unidad_medida_masa`, `id_nave`) VALUES
(1, 'La nave Cassini-Huygens fue creada en EU/EUROPA/ITALIA su primera actividad fue en el año 1997tenia un empuje de 43Kg . Esta servia para Empleada para estudiar saturno y sus lunas', 'Quimico', 'Tetroxido de nitrogeno', 'Kg', 2),
(2, 'La nave Pionero X fue creada en EE.UU su primera actividad fue en el año 1972tenia un empuje de 26Kg . Esta servia para Estudiar Saturno', 'Fisico', 'Inercia', 'Kg', 3),
(3, 'La nave Pionero XI fue creada en EE.UU su primera actividad fue en el año 1973tenia un empuje de 26Kg . Esta servia para Estudiar Saturno', 'Fisico', 'Inercia', 'Kg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tripuladas`
--

CREATE TABLE `tripuladas` (
  `id_tripulada` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `velocidad_orbitaje` varchar(255) NOT NULL,
  `capacidad_tripulantes` int(11) NOT NULL,
  `unidad_medida_masa` varchar(255) NOT NULL,
  `id_nave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tripuladas`
--

INSERT INTO `tripuladas` (`id_tripulada`, `descripcion`, `velocidad_orbitaje`, `capacidad_tripulantes`, `unidad_medida_masa`, `id_nave`) VALUES
(1, 'La nave SKYLAB fue creada en EE.UU su primera actividad fue en el año 1973tenia una velocidad de orbitaje de 435km/h y podia llevar una tripulacion de hasta 3Tm . Esta servia para Centro de investigacion espacial Estado Unidense', '435', 3, 'Tm', 5),
(2, 'La nave Salyut fue creada en UNION SOVIETICA su primera actividad fue en el año 1982tenia una velocidad de orbitaje de 243km/h y podia llevar una tripulacion de hasta 3Tm . Esta servia para Experimentar y estudiar el comportamiento humano en condiciones i', '243', 3, 'Tm', 8),
(3, 'La nave APOLO fue creada en EE.UU su primera actividad fue en el año 1966tenia una velocidad de orbitaje de 45000km/h y podia llevar una tripulacion de hasta 3Kg . Esta servia para Enviar un hombre a la luna', '45000', 3, 'Kg', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lanzaderas`
--
ALTER TABLE `lanzaderas`
  ADD PRIMARY KEY (`id_lanzadera`),
  ADD KEY `id_nave` (`id_nave`);

--
-- Indices de la tabla `naves`
--
ALTER TABLE `naves`
  ADD PRIMARY KEY (`id_nave`);

--
-- Indices de la tabla `roboticas`
--
ALTER TABLE `roboticas`
  ADD PRIMARY KEY (`id_robotica`),
  ADD KEY `id_nave` (`id_nave`);

--
-- Indices de la tabla `tripuladas`
--
ALTER TABLE `tripuladas`
  ADD PRIMARY KEY (`id_tripulada`),
  ADD KEY `id_nave` (`id_nave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lanzaderas`
--
ALTER TABLE `lanzaderas`
  MODIFY `id_lanzadera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `naves`
--
ALTER TABLE `naves`
  MODIFY `id_nave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roboticas`
--
ALTER TABLE `roboticas`
  MODIFY `id_robotica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tripuladas`
--
ALTER TABLE `tripuladas`
  MODIFY `id_tripulada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lanzaderas`
--
ALTER TABLE `lanzaderas`
  ADD CONSTRAINT `lanzaderas_ibfk_1` FOREIGN KEY (`id_nave`) REFERENCES `naves` (`id_nave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `roboticas`
--
ALTER TABLE `roboticas`
  ADD CONSTRAINT `roboticas_ibfk_1` FOREIGN KEY (`id_nave`) REFERENCES `naves` (`id_nave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tripuladas`
--
ALTER TABLE `tripuladas`
  ADD CONSTRAINT `tripuladas_ibfk_1` FOREIGN KEY (`id_nave`) REFERENCES `naves` (`id_nave`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
