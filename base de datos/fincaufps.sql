-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2018 a las 22:37:42
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fincaufps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `codigo` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`codigo`, `usuario`, `password`) VALUES
(1, 'fincaufps', 'finca2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `codUnidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `tamano` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `especie` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidadelimento` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`codigo`, `nombre`, `descripcion`, `fechaIngreso`, `codUnidad`, `genero`, `tamano`, `especie`, `cantidadelimento`) VALUES
(1, 'Bety', 'Vacuno Mediano', '2018-05-01', '201', 'F', 'M', 'Vacuno', '10'),
(2, 'Didier', '', '2018-03-05', '201', 'M', 'G', 'Vacuno', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `codigo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`codigo`, `nombre`, `descripcion`) VALUES
('100', 'Animal', 'Area de Produccion Animal'),
('101', 'Vegetal', 'Area de Produccion Vegetal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `dni` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`dni`, `nombres`, `apellidos`) VALUES
('1090297638', 'Luis', 'Monsalve'),
('1090468804', 'Manuel', 'Gallardo'),
('1090481701', 'Juan', 'Perez'),
('1090483707', 'William Henry', 'Velandia Velandia'),
('1090487657', 'Franklin', 'Villar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practicante`
--

CREATE TABLE `practicante` (
  `numero` int(11) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `dni` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numeroProyecto` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `semestre` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `institucion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `practicante`
--

INSERT INTO `practicante` (`numero`, `fechaInicio`, `fechaFinal`, `dni`, `numeroProyecto`, `semestre`, `institucion`) VALUES
(1, '2018-03-01', '2018-06-22', '1090297638', '1001', '1', 'SENA'),
(2, '2018-02-05', '2018-06-29', '1090468804', '1002', '1', 'UFPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `codigo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `peso` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `codUnidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `numero` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `numeroUnidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`numero`, `descripcion`, `nombre`, `numeroUnidad`) VALUES
('1001', 'Proyecto Engorde Gallinas Ponedoras', 'Engorde Gallinas Ponedoras', '204'),
('1002', 'Visualizar el crecimiento de conejos', 'Reproduccion Conejos', '202'),
('1003', 'Aplicar un dieta especial para los peces', 'Dieta de Peces', '206');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `codigo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numAnimales` int(11) DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codArea` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`codigo`, `nombre`, `numAnimales`, `descripcion`, `codArea`) VALUES
('201', 'Vacunos', NULL, 'Unidad de Vacunos', '100'),
('202', 'Cunicola', NULL, 'Unidad Cunicola', '100'),
('203', 'Porcina', NULL, 'Unidad de Porcinos', '100'),
('204', 'Gallinas', 117, 'Unidad de Gallinas Ponedoras', '100'),
('205', 'Equinos', NULL, 'Unidad de Equinos', '100'),
('206', 'Peces', 49, 'Unidad de Peces', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE `visitante` (
  `numero` int(11) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `motivo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `placa` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `dni` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `institucion` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `visitante`
--

INSERT INTO `visitante` (`numero`, `fechaIngreso`, `motivo`, `placa`, `dni`, `institucion`) VALUES
(1, '2018-04-05', 'Informacion sobre la Finca', 'ABG874', '1090487657', 'UFPS'),
(2, '2018-06-05', 'Revisar unidad de peces', 'CUT749', '1090481701', 'UFPS'),
(3, '2018-04-05', 'Recoleccion de Informacion', 'CRL380', '1090483707', 'UFPS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `IXFK_especie_unidad` (`codUnidad`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `practicante`
--
ALTER TABLE `practicante`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `IXFK_practicante_Persona` (`dni`),
  ADD KEY `IXFK_practicante_proyecto` (`numeroProyecto`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `IXFK_produccion_unidad` (`codUnidad`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `IXFK_proyecto_unidad` (`numeroUnidad`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `IXFK_unidad_area` (`codArea`),
  ADD KEY `IXFK_unidad_produccion` (`codigo`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `IXFK_visitante_Persona` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `practicante`
--
ALTER TABLE `practicante`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_especie_unidad` FOREIGN KEY (`codUnidad`) REFERENCES `unidad` (`codigo`);

--
-- Filtros para la tabla `practicante`
--
ALTER TABLE `practicante`
  ADD CONSTRAINT `FK_practicante_Persona` FOREIGN KEY (`dni`) REFERENCES `persona` (`dni`),
  ADD CONSTRAINT `FK_practicante_proyecto` FOREIGN KEY (`numeroProyecto`) REFERENCES `proyecto` (`numero`);

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `FK_produccion_unidad` FOREIGN KEY (`codUnidad`) REFERENCES `unidad` (`codigo`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `FK_proyecto_unidad` FOREIGN KEY (`numeroUnidad`) REFERENCES `unidad` (`codigo`);

--
-- Filtros para la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD CONSTRAINT `FK_unidad_area` FOREIGN KEY (`codArea`) REFERENCES `area` (`codigo`);

--
-- Filtros para la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD CONSTRAINT `FK_visitante_Persona` FOREIGN KEY (`dni`) REFERENCES `persona` (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
