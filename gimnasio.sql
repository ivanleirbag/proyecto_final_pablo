-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-11-2024 a las 04:19:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasesgrupales`
--

CREATE TABLE `clasesgrupales` (
  `id_clase` int(11) NOT NULL,
  `cod_clase` int(11) NOT NULL,
  `capMax_clase` tinyint(4) NOT NULL,
  `id_nombreClase` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `id_entrenador` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `dni_cliente` int(9) NOT NULL,
  `fechaNac_cliente` date NOT NULL,
  `telefono_cliente` int(11) NOT NULL,
  `email_cliente` int(11) NOT NULL,
  `fechaIns_cliente` date NOT NULL,
  `id_clase` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_inicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `calle_direccion` varchar(50) NOT NULL,
  `cp_direccion` varchar(10) NOT NULL,
  `ciudad_direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `duracion`
--

CREATE TABLE `duracion` (
  `id_duracion` int(11) NOT NULL,
  `valor_duracion` time NOT NULL,
  `descrip_duracion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `id_entrenador` int(11) NOT NULL,
  `nombre_entrenador` varchar(50) NOT NULL,
  `apellido_entrenador` varchar(50) NOT NULL,
  `dni_entrenador` int(9) NOT NULL,
  `fechaContr_entrenador` date NOT NULL,
  `email_entrenador` varchar(50) NOT NULL,
  `telefono_entrenador` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidad` int(11) NOT NULL,
  `nombre_especialidad` varchar(50) NOT NULL,
  `descrip_especialidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `status_estado` tinyint(1) NOT NULL,
  `descrip_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechainicio`
--

CREATE TABLE `fechainicio` (
  `id_fechainicio` int(11) NOT NULL,
  `fechainicio_fecha` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `fecha_horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalacionesuso`
--

CREATE TABLE `instalacionesuso` (
  `id_instUso` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `id_duracion` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `id_metodoPago` int(11) NOT NULL,
  `nombre_metodoPago` varchar(50) NOT NULL,
  `descrip_metodoPago` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombreclase`
--

CREATE TABLE `nombreclase` (
  `id_nombreClase` int(11) NOT NULL,
  `titulo_nombreClase` varchar(50) NOT NULL,
  `descrip_nombreClase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombreplan`
--

CREATE TABLE `nombreplan` (
  `id_nombrePlan` int(11) NOT NULL,
  `titulo_nombrePlan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `fecha_pago` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `monto_pago` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_metodopago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `descrip_plan` text NOT NULL,
  `cod_plan` int(11) NOT NULL,
  `duracion_plan` tinyint(4) NOT NULL,
  `cantSesion_plan` int(11) NOT NULL,
  `id_nombrePlan` int(11) NOT NULL,
  `id_entrenador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `lugar_ubicacion` varchar(50) NOT NULL,
  `descrip_ubicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `password_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `email_usuario`, `password_usuario`) VALUES
(1, 'admin', 'admin@example.com', '$5$rounds=5000$tsegfysefuisehfu$ff4dw8QrffAN6GGIPEOhUHuCGWG8FQIOGZkPN8WSgr6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasesgrupales`
--
ALTER TABLE `clasesgrupales`
  ADD PRIMARY KEY (`id_clase`),
  ADD KEY `nombreClaseid` (`id_nombreClase`),
  ADD KEY `identrenador` (`id_entrenador`),
  ADD KEY `idhorario` (`id_horario`),
  ADD KEY `idubicacion` (`id_ubicacion`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `direccionid` (`id_direccion`),
  ADD KEY `planid` (`id_plan`),
  ADD KEY `estadoid` (`id_estado`),
  ADD KEY `idclas` (`id_clase`),
  ADD KEY `fechain` (`fecha_inicio`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `duracion`
--
ALTER TABLE `duracion`
  ADD PRIMARY KEY (`id_duracion`);

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id_entrenador`),
  ADD KEY `estid` (`id_estado`),
  ADD KEY `especialidadid` (`id_especialidad`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `fechainicio`
--
ALTER TABLE `fechainicio`
  ADD PRIMARY KEY (`id_fechainicio`),
  ADD KEY `idcli` (`id_cliente`),
  ADD KEY `idclass` (`id_clase`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `instalacionesuso`
--
ALTER TABLE `instalacionesuso`
  ADD PRIMARY KEY (`id_instUso`),
  ADD KEY `idhorarioentrada` (`id_horario`),
  ADD KEY `ubicid` (`id_ubicacion`),
  ADD KEY `duracionid` (`id_duracion`),
  ADD KEY `clienteid` (`id_cliente`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`id_metodoPago`);

--
-- Indices de la tabla `nombreclase`
--
ALTER TABLE `nombreclase`
  ADD PRIMARY KEY (`id_nombreClase`);

--
-- Indices de la tabla `nombreplan`
--
ALTER TABLE `nombreplan`
  ADD PRIMARY KEY (`id_nombrePlan`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `idcliente` (`id_cliente`),
  ADD KEY `idclase` (`id_clase`),
  ADD KEY `statusid` (`id_estado`),
  ADD KEY `idmetodopago` (`id_metodopago`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `nombreplanid` (`id_nombrePlan`),
  ADD KEY `entrenadorid` (`id_entrenador`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_usuario` (`email_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clasesgrupales`
--
ALTER TABLE `clasesgrupales`
  ADD CONSTRAINT `identrenador` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenadores` (`id_entrenador`),
  ADD CONSTRAINT `idhorario` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id_horario`),
  ADD CONSTRAINT `idubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`),
  ADD CONSTRAINT `nombreClaseid` FOREIGN KEY (`id_nombreClase`) REFERENCES `nombreclase` (`id_nombreClase`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `direccionid` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`),
  ADD CONSTRAINT `estadoid` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fechain` FOREIGN KEY (`fecha_inicio`) REFERENCES `fechainicio` (`id_fechainicio`),
  ADD CONSTRAINT `planid` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id_plan`);

--
-- Filtros para la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD CONSTRAINT `especialidadid` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`),
  ADD CONSTRAINT `estid` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `fechainicio`
--
ALTER TABLE `fechainicio`
  ADD CONSTRAINT `idclass` FOREIGN KEY (`id_clase`) REFERENCES `clasesgrupales` (`id_clase`),
  ADD CONSTRAINT `idcli` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `instalacionesuso`
--
ALTER TABLE `instalacionesuso`
  ADD CONSTRAINT `clienteid` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `duracionid` FOREIGN KEY (`id_duracion`) REFERENCES `duracion` (`id_duracion`),
  ADD CONSTRAINT `idhorarioentrada` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id_horario`),
  ADD CONSTRAINT `ubicid` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `idclase` FOREIGN KEY (`id_clase`) REFERENCES `clasesgrupales` (`id_clase`),
  ADD CONSTRAINT `idcliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `idmetodopago` FOREIGN KEY (`id_metodopago`) REFERENCES `metodopago` (`id_metodoPago`),
  ADD CONSTRAINT `statusid` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `entrenadorid` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenadores` (`id_entrenador`),
  ADD CONSTRAINT `nombreplanid` FOREIGN KEY (`id_nombrePlan`) REFERENCES `nombreplan` (`id_nombrePlan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
