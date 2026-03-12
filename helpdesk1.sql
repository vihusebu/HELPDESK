-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2025 a las 17:30:52
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `helpdesk1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admejecutivo`
--

CREATE TABLE IF NOT EXISTS `admejecutivo` (
  `idadmejecutivo` int(10) unsigned NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idorganizacion` int(11) NOT NULL,
  `idcargo` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `fechaingreso` date NOT NULL,
  `idhorario` int(11) NOT NULL,
  `idsede` int(11) NOT NULL,
  `ipusuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `referenciaper` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `obs` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admejecutivo`
--

INSERT INTO `admejecutivo` (`idadmejecutivo`, `idpersona`, `idorganizacion`, `idcargo`, `idarea`, `idtipo`, `fechaingreso`, `idhorario`, `idsede`, `ipusuario`, `referenciaper`, `obs`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(182, 0, 0, 0, 0, 166, '2024-05-03', 0, 1, '', '', '', 1, 103, '2023-05-03', '22:23:23', '177.222.115.60-177.222.115.60', 1),
(134, 1, 0, 0, 0, 161, '2024-10-01', 0, 1, '192.168.0.125', '', '', 1, 1, '2020-07-15', '12:22:46', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(186, 221, 0, 0, 0, 165, '2024-02-13', 0, 1, '0.0.0.0', '', '', 1, 103, '2023-06-13', '11:25:17', '131.0.198.3-SCZ-131-0-198-00003.tigo.bo', 1),
(189, 224, 0, 0, 0, 162, '2024-01-02', 0, 1, '0.0.0.0', '', '', 0, 103, '2023-06-26', '08:45:44', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(217, 245, 0, 0, 0, 173, '2023-06-27', 0, 1, '', '', '', 1, 103, '2023-06-27', '22:11:52', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(230, 257, 0, 0, 0, 162, '2025-04-14', 0, 1, '0.0.0.0', '', '', 0, 103, '2025-04-14', '20:22:30', '177.222.113.92-177.222.113.92', 1),
(229, 256, 0, 0, 0, 182, '2023-02-12', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-04-12', '17:56:02', '177.222.113.92-177.222.113.92', 1),
(228, 255, 0, 0, 0, 184, '2024-10-10', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-04-10', '16:30:12', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(227, 254, 0, 0, 0, 162, '2025-04-08', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-04-08', '18:10:29', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(224, 251, 0, 0, 0, 160, '2025-02-01', 0, 1, '0.0.0.0', '', '', 0, 103, '2025-02-01', '23:59:44', '189.28.95.5-LPZ-189-28-95-00005.tigo.bo', 1),
(225, 252, 0, 0, 0, 160, '2025-02-02', 0, 1, '0.0.0.0', '', '', 0, 103, '2025-02-02', '00:12:55', '189.28.95.5-LPZ-189-28-95-00005.tigo.bo', 1),
(226, 253, 0, 0, 0, 160, '2025-02-04', 0, 1, '0.0.0.0', '', '', 0, 103, '2025-02-04', '22:31:12', '189.28.95.32-LPZ-189-28-95-00032.tigo.bo', 1),
(231, 258, 0, 0, 0, 162, '2025-04-30', 0, 1, '0.0.0.0', '', '', 0, 103, '2025-04-30', '23:03:37', '177.222.113.250-177.222.113.250', 1),
(232, 259, 0, 0, 0, 184, '2025-08-18', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-08-18', '15:06:49', '181.115.207.102-181.115.207.102', 1),
(233, 261, 0, 0, 0, 162, '2025-09-04', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-04', '23:39:22', '177.222.112.197-177.222.112.197', 1),
(234, 262, 0, 0, 0, 162, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '07:52:49', '177.222.112.197-177.222.112.197', 1),
(235, 264, 0, 0, 0, 162, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '07:57:46', '177.222.112.197-177.222.112.197', 1),
(236, 265, 0, 0, 0, 187, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '08:01:54', '177.222.112.197-177.222.112.197', 1),
(237, 266, 0, 0, 0, 187, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '08:04:45', '177.222.112.197-177.222.112.197', 1),
(238, 267, 0, 0, 0, 187, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '08:08:02', '177.222.112.197-177.222.112.197', 1),
(239, 268, 0, 0, 0, 187, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '08:11:08', '177.222.112.197-177.222.112.197', 1),
(240, 269, 0, 0, 0, 187, '2025-09-05', 0, 1, '0.0.0.0', '', '', 1, 103, '2025-09-05', '08:14:29', '177.222.112.197-177.222.112.197', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admsucursal`
--

CREATE TABLE IF NOT EXISTS `admsucursal` (
  `idadmsucursal` int(10) unsigned NOT NULL,
  `idmiempresa` int(11) NOT NULL,
  `idsede` int(11) NOT NULL,
  `nrogasto` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `zona` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `idciudad` int(11) NOT NULL,
  `telefonos` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `actividad` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `esprueba` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admsucursal`
--

INSERT INTO `admsucursal` (`idadmsucursal`, `idmiempresa`, `idsede`, `nrogasto`, `nombre`, `direccion`, `zona`, `idciudad`, `telefonos`, `actividad`, `tipo`, `esprueba`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 1, 1, 1010, 'Casa Matriz', ' Pedregal, entre calles 11 y 14 ', 'LOS PINOS', 90, '62445645', 'Venta de cantaritos mexicanos y mas', 1, 0, 1, '2017-09-12', '09:03:11', '181.115.140.15-181.115.140.15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `idalmacen` int(11) unsigned NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(250) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`idalmacen`, `nombre`, `ubicacion`, `descripcion`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'CENTRAL', 'CIUDAD DE LA PAZ', 'ALMACEN PRINCIPAL', 1, 40, '2025-04-02', '14:09:16', '::1-ESCRITORIO', 1),
(2, 'SUCURSAL-CBBA', 'CIUDAD DE COCHABAMBA', 'ALMACEN SECUNDARIO', 1, 103, '2024-11-19', '21:00:20', '177.222.61.232-SCZ-177-222-61-00232.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `idarea` int(11) unsigned NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombre`, `descripcion`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'GERENCIA', 'Supervisar diariamente el trabajo de los empleados para asegurar el cumplimiento de las normas y directrices de la empresa.', 1, 103, '2025-02-17', '15:13:28', '189.28.73.72-LPZ-189-28-73-00072.tigo.bo', 1),
(2, 'ADMINISTRACION Y FINANZAS', 'Area que administra los activos de la compañia y la fiananzas de la compañia.', 1, 103, '2025-02-25', '10:00:25', '177.222.113.118-177.222.113.118', 1),
(3, 'TALENTO HUMANO', 'Encargado de recursos humanos.', 1, 103, '2025-02-25', '10:01:04', '177.222.113.118-177.222.113.118', 1),
(4, 'COMERCIAL', 'Area encargada de la venta de seguros', 1, 103, '2025-03-18', '10:46:16', '131.0.196.119-SCZ-131-0-196-00119.tigo.bo', 1),
(5, 'CAUCIONES', 'Se encarga de gestionar los seguros de caución, que son garantías que respaldan el cumplimiento de las obligaciones contractuales. ', 1, 103, '2025-04-09', '18:54:26', '177.222.113.92-177.222.113.92', 1),
(6, 'UIF', 'Normar el régimen de lucha contra el lavado de dinero y el financiamiento del terrorismo.', 1, 103, '2025-04-09', '18:55:38', '177.222.113.92-177.222.113.92', 1),
(7, 'AUDITORIA', 'Revisar los protocolos que se utilizan en la empresa para encontrar posibles errores e implantar las mejoras que correspondan', 1, 103, '2025-04-09', '18:56:22', '177.222.113.92-177.222.113.92', 1),
(8, 'CONTABILIDAD', 'Registrar y gestionar las transacciones financieras, elaborar informes, y analizar la situación económica de la empresa', 1, 103, '2025-04-09', '18:57:09', '177.222.113.92-177.222.113.92', 1),
(9, 'TESORERIA', 'Administrar el efectivo y los recursos financieros de la organización', 1, 103, '2025-04-09', '18:57:46', '177.222.113.92-177.222.113.92', 1),
(10, 'DIRECTORIO', 'Tiene funciones de supervisión, gobierno y apoyo a la gerencia.', 1, 103, '2025-04-09', '19:02:37', '177.222.113.92-177.222.113.92', 1),
(11, 'ESTADISTICA', 'Recopilar, organizar, analizar e interpretar datos para apoyar la toma de decisiones.', 1, 103, '2025-04-09', '19:03:26', '177.222.113.92-177.222.113.92', 1),
(12, 'RECLAMOS', 'Gestionar las quejas y sugerencias de los clientes.', 1, 103, '2025-04-09', '19:04:09', '177.222.113.92-177.222.113.92', 1),
(13, 'LEGAL', 'Se encarga de que la empresa cumpla con la normativa vigente y de defenderla en caso de problemas legales.', 1, 103, '2025-04-09', '19:05:03', '177.222.113.92-177.222.113.92', 1),
(14, 'DISTRIBUCION', 'ewvnewo ecnewoicnoi', 1, 103, '2025-04-12', '21:37:34', '177.222.113.92-177.222.113.92', 0),
(15, 'FINANZAS', 'Finanzas', 1, 103, '2025-08-25', '09:21:35', '181.115.207.102-181.115.207.102', 1),
(16, 'FINANZAS', 'Finanzas 2', 1, 103, '2025-08-25', '09:25:57', '181.115.207.102-181.115.207.102', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobacion`
--

CREATE TABLE IF NOT EXISTS `comprobacion` (
  `idcomprobacion` int(11) unsigned NOT NULL,
  `idticket` int(11) NOT NULL,
  `idadmejecutivo` int(11) NOT NULL COMMENT 'jefe de area (aprobador)',
  `fecha` date NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `estado` int(11) NOT NULL COMMENT '1=APROBADO 2=NO APORBADO',
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comprobacion`
--

INSERT INTO `comprobacion` (`idcomprobacion`, `idticket`, `idadmejecutivo`, `fecha`, `descripcion`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(10, 45, 134, '2025-04-14', 'SE PROCEDE CON LA SOLICITUD', 1, 103, '2025-04-14', '18:01:07', '177.222.113.92-177.222.113.92', 1),
(9, 43, 134, '2025-04-14', 'NO SE LLEGO A NINGUN A CUERDO CON LA REUNION QUE SE TUVO.', 2, 103, '2025-04-14', '17:42:56', '177.222.113.92-177.222.113.92', 1),
(8, 40, 134, '2025-04-14', 'APROBACION DEL TICKET.', 1, 103, '2025-04-14', '17:32:41', '177.222.113.92-177.222.113.92', 1),
(7, 39, 134, '2025-04-13', 'NO CUMPLE CON LOS PROCEDIMIENTOS DE SOLICITUD DE TICKET', 2, 103, '2025-04-13', '22:16:29', '181.188.178.175-LPZ-181-188-178-00175.tigo.bo', 1),
(6, 36, 134, '2025-04-13', 'SE VERIFICO LA SOLICITUD PARA REALIZAR LA APROBACIóN', 1, 103, '2025-04-13', '21:46:46', '181.188.178.175-LPZ-181-188-178-00175.tigo.bo', 1),
(11, 49, 134, '2025-04-24', 'QWDQW', 1, 103, '2025-04-24', '15:39:45', '181.115.207.102-181.115.207.102', 1),
(12, 44, 134, '2025-04-25', 'NO VALIDO', 2, 103, '2025-04-25', '08:38:46', '181.115.207.102-181.115.207.102', 1),
(13, 51, 134, '2025-04-25', 'SE ATENDERA LA SOLICITUD', 1, 103, '2025-04-25', '20:33:14', '177.222.113.162-177.222.113.162', 1),
(14, 55, 134, '2025-08-18', 'SIGA CON EL PROCESO', 1, 103, '2025-08-18', '14:17:09', '181.115.207.102-181.115.207.102', 1),
(15, 1060, 134, '2025-09-05', 'SE PROCEDE CON LA SOLICITUD.', 1, 103, '2025-09-05', '12:31:03', '177.222.112.197-177.222.112.197', 1),
(16, 1071, 134, '2025-09-05', 'CONTINUAR CON LA SOLICTUD', 1, 103, '2025-09-05', '17:27:02', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `idconfig` int(10) unsigned NOT NULL,
  `cuentaBs` int(20) NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`idconfig`, `cuentaBs`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `activo`) VALUES
(1, 1110000254, 1, 0, '0000-00-00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE IF NOT EXISTS `configuracion` (
  `idconfiguracion` int(10) unsigned NOT NULL,
  `short` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `valor` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `nro` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion2`
--

CREATE TABLE IF NOT EXISTS `configuracion2` (
  `idconfiguracion2` int(10) unsigned NOT NULL,
  `short` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `nombreempresa` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `copyright` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion2`
--

INSERT INTO `configuracion2` (`idconfiguracion2`, `short`, `nombreempresa`, `descripcion`, `copyright`, `titulo`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `activo`) VALUES
(1, 'SISTEMA HELP DESk PARA ASIGNACIÓN DE TICKETS DE ATENCIÓN', 'SISTEMAS', '', 'sistemas 2025', 'Página Control y Seguimiento de Plan de ContingenciacopyrightSISTEMA HELP DESk PARA ASIGNACIÓN DE TICKETS DE ATENCIÓN', 0, '0000-00-00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` int(10) unsigned NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `codigo`, `nombre`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `activo`) VALUES
(1, 'LP', 'La Paz', 0, '0000-00-00', '00:00:00', 1),
(2, 'SC', 'Santa Cruz', 0, '0000-00-00', '00:00:00', 1),
(3, 'OR', 'Oruro', 0, '0000-00-00', '00:00:00', 1),
(4, 'CB', 'Cochabamba', 0, '0000-00-00', '00:00:00', 1),
(5, 'CH', 'SUCRE', 0, '0000-00-00', '00:00:00', 1),
(6, 'TJ', 'TARIJA', 0, '0000-00-00', '00:00:00', 1),
(7, 'PT', 'POTOSI', 0, '0000-00-00', '00:00:00', 1),
(8, 'PD', 'PANDO', 0, '0000-00-00', '00:00:00', 1),
(9, 'BN', 'BENI', 0, '0000-00-00', '00:00:00', 1),
(10, 'EXT', 'EXTERIOR', 0, '0000-00-00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE IF NOT EXISTS `domicilio` (
  `iddomicilio` int(10) unsigned NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idzona` int(11) NOT NULL,
  `idbarrio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `idtipoPaso` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `edificio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `piso` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `tipoDomicilio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `dirverdadero` int(11) NOT NULL COMMENT '1=SI 2=NO',
  `observacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `colorcasa` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `colorpuerta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `afiches` int(11) NOT NULL COMMENT '1=MUCHO 2=POCO 3=NINGUNO',
  `observacion2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `referencia` int(11) NOT NULL COMMENT '1=EXCELENTE 2=BUENA 3=REGULAR 4=MALA',
  `contacto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `observacion3` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `coordenadas` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `coordX` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `coordY` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `indicador` int(11) NOT NULL COMMENT '0=valido 1=no valido',
  `fechaverificado` date NOT NULL,
  `fechaactualizado` date NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=273 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`iddomicilio`, `idpersona`, `idzona`, `idbarrio`, `idtipoPaso`, `nombre`, `edificio`, `piso`, `numero`, `telefono`, `descripcion`, `tipoDomicilio`, `dirverdadero`, `observacion`, `colorcasa`, `colorpuerta`, `afiches`, `observacion2`, `referencia`, `contacto`, `observacion3`, `coordenadas`, `coordX`, `coordY`, `indicador`, `fechaverificado`, `fechaactualizado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 1, 0, 'BALLIVIAN 2DA SECCION ', 0, 'JUAN MENDES#1155', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 1, '2020-07-15', '12:12:29', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(2, 2, 0, 'BAJO BALLIVIAN', 0, 'FERROPETROL', '', '', '', '2874145', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 1, '2020-07-15', '12:33:30', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(3, 3, 0, 'VILLA VISTA', 0, '4-G NRO.310', '', '', '', '70510110 - Cuñado', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 1, '2020-07-15', '12:41:29', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(4, 4, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 1, '2020-07-15', '12:47:17', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(5, 5, 0, 'ROSARIO', 0, 'NICASIO CARDOSO Nro.257', '', '', '', '74911647', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-17', '11:42:11', '181.188.170.171-181.188.170.171', 1),
(6, 6, 0, 'VILLA PAVON', 0, 'LA BANDERA Nro.901', '', '', '', '72524896 - Hermana', '', '', 1, '', 'CELESTE', 'CAFE PUERTA', 2, '', 2, '', '', '-16.49399,-68.131008', '', '', 0, '0000-00-00', '2021-03-19', 103, '2020-08-17', '11:48:45', '181.188.170.171-181.188.170.171', 1),
(7, 7, 0, 'VILLA PABON', 0, 'LA BANDERA', '', '', '', '70579489', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-17', '11:58:32', '181.188.170.171-181.188.170.171', 1),
(8, 8, 0, 'ROSARIO', 0, 'NICASIO CARDOSO', '', '', '', '74911647', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-17', '12:00:50', '181.188.170.171-181.188.170.171', 1),
(9, 9, 0, 'HORIZONTES', 0, 'HUAYNA POTOSI Nro.32', '', '', '', '78914740', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-26', '09:32:25', '181.188.178.16-LPZ-181-188-178-00016.tigo.bo', 1),
(10, 10, 0, 'FRANZ TAMAYO', 0, 'PASAJE "A" Nro.33', '', '', '', '69775220', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-26', '09:35:41', '181.188.178.16-LPZ-181-188-178-00016.tigo.bo', 1),
(11, 11, 0, 'HOTIZONTES', 0, 'HUAYNA POTOSI Nro.32', '', '', '', '76729344', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-26', '09:39:31', '181.188.178.16-LPZ-181-188-178-00016.tigo.bo', 1),
(12, 12, 0, 'VILLA MERCEDES', 0, 'NICOLAS ACOSTA Nro.2914', '', '', '', '70186134', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-26', '09:44:10', '181.188.178.16-LPZ-181-188-178-00016.tigo.bo', 1),
(13, 13, 0, 'VILLA MERCEDES', 0, 'NICOLAS ACOSTA Nro.2914', '', '', '', '76576084', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-08-26', '09:51:11', '181.188.178.16-LPZ-181-188-178-00016.tigo.bo', 1),
(14, 14, 0, 'D-4 MERCEDARIO', 0, '6 ESQ. CLIVIA Nro.1152', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-04', '16:53:13', '181.188.170.209-181.188.170.209', 1),
(15, 15, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-15', '10:19:23', '181.188.170.211-181.188.170.211', 1),
(16, 16, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-15', '13:33:10', '181.188.170.211-181.188.170.211', 1),
(17, 17, 0, 'HUAYNA POTOSI', 0, 'TUPIZA Nro.5085', '', '', '', '74048262 - hija', '', '', 1, '', 'RADRILLO', 'VERDE LECHUGA GARRAJE', 2, '', 2, 'GARANTE  AYDA COLQUEHUANCA -16.4803898,-68.1945236', '', '-16.466004,-68.2602485', '', '', 0, '0000-00-00', '2021-03-19', 103, '2020-09-17', '11:06:59', '181.188.170.188-181.188.170.188', 1),
(18, 18, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-17', '11:08:02', '181.188.170.188-181.188.170.188', 1),
(19, 19, 0, '16 DE JULIO', 0, 'NISTAWS Nro.26', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-17', '11:10:32', '181.188.170.188-181.188.170.188', 1),
(20, 20, 0, 'HUYNA POTOSI', 0, 'CLICA Nro.3075', '', '', '', '72538085', '', '', 1, '', 'ADOVE', 'VERDE OSCURO PUERTA', 3, '', 3, '', '', '-16.501632, -68.129431', '', '', 0, '0000-00-00', '2021-03-23', 103, '2020-09-17', '11:14:16', '181.188.170.188-181.188.170.188', 1),
(21, 21, 0, '16 DE JULIO', 0, '16 DE JULIO Nro.200', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-17', '11:16:10', '181.188.170.188-181.188.170.188', 1),
(22, 22, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-17', '11:17:07', '181.188.170.188-181.188.170.188', 1),
(23, 23, 0, 'ALTO LIMA 3RA SECCION', 0, 'C-6 Nro.8', '', '', '', '68077268', '', '', 0, '', '', '', 0, '', 0, '', '', '-16.4693712,-68.171169', '', '', 0, '0000-00-00', '2020-10-30', 103, '2020-09-18', '13:02:21', '181.188.170.216-181.188.170.216', 1),
(24, 24, 0, 'TEMBLADERANI', 0, 'CALLEJON ZUDAÑES Nro.35', '', '', '', '60546903', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-22', '09:33:28', '181.188.170.206-181.188.170.206', 1),
(25, 25, 0, 'SAN ROQUE', 0, '21 DE SEPTIEMBRE Nro.2122', '', '', '', '77742240', '', '', 0, '', 'RADRILLO', 'Azul', 3, '', 3, '', '', '-16.4648882, -68.2858990', '', '', 0, '0000-00-00', '2020-10-16', 103, '2020-09-22', '10:28:22', '181.188.170.206-181.188.170.206', 1),
(26, 26, 0, 'COTAHUMA', 0, 'INTERAYMI Nro.215', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-22', '11:30:44', '181.188.170.206-181.188.170.206', 1),
(27, 27, 0, 'SAN FELIPE DE SEKE', 0, 'NESTOR GUILLEN Nro.2690', '', '', '', '77502079', '', '', 1, '', 'RADRILLO', 'AMARILLO MOSTAZA GARRAJE', 3, '', 3, '', '', '-16.5155709,-68.2491968', '', '', 0, '0000-00-00', '2021-04-21', 103, '2020-09-23', '14:42:56', '181.188.170.187-181.188.170.187', 1),
(28, 28, 0, 'BELLA VISTA', 0, '4/G Nro.310', '', '', '', '60513292', '', '', 1, '', 'radrillo', 'Negro', 3, '', 2, '', '', '-16.5247754,-68.0962467', '', '', 0, '0000-00-00', '2020-09-24', 103, '2020-09-24', '10:50:06', '181.188.170.172-181.188.170.172', 1),
(29, 29, 0, 'ALTO VILLA COPACABANA', 0, 'LOS TRIGALES Nro.2041', '', '', '', '60663119', '', '', 0, '', 'radrillo', 'verde', 3, '', 2, '', '', '-16.48017,-68.1112796', '', '', 0, '0000-00-00', '2020-09-24', 103, '2020-09-24', '10:52:46', '181.188.170.172-181.188.170.172', 1),
(30, 30, 0, 'BAJO SEGUENCOMA', 0, 'LITORAL', '', '', '', '73086591', '', '', 1, '', 'sin dato', 'sin dato', 3, '', 2, '', '', '-16.5446265,-68.0950247', '', '', 0, '0000-00-00', '2020-09-24', 103, '2020-09-24', '11:21:41', '181.188.170.172-181.188.170.172', 1),
(31, 31, 0, 'ALTO OBRAJES A', 0, 'GRAN BRETAÑA Nro.229', '', '', '', '69713300', '', '', 0, '', 'radrillo', 'cafe', 3, '', 0, '', '', '-16.5179868,-68.1079515', '', '', 0, '0000-00-00', '2020-09-24', 103, '2020-09-24', '11:24:58', '181.188.170.172-181.188.170.172', 1),
(32, 32, 0, 'MARISCAL SANTA CRUZ ', 0, 'HUYNA POTOSI Nro.5571', '', '', '', '65611924 -Hijo', '', '', 1, '', 'RADRILLO', 'AMARILLO MOSTAZA', 3, '', 2, '', '', '-16.5695877,-68.2428472', '', '', 0, '0000-00-00', '2020-10-09', 103, '2020-09-28', '10:36:18', '181.188.170.247-181.188.170.247', 1),
(33, 33, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-09-28', '11:34:39', '181.188.170.247-181.188.170.247', 1),
(34, 34, 0, 'TEMBLADERANI', 0, 'ADRIAN PATIÑO Nro. 1996', '', '', '', '', '', '', 1, '', '', '', 3, '', 3, '', '', '-16.5143142,-68.1433929', '', '', 0, '0000-00-00', '2021-04-16', 103, '2020-09-29', '16:13:51', '181.188.178.7-LPZ-181-188-178-00007.tigo.bo', 1),
(35, 35, 0, 'VILLA COPACABANA', 0, 'EDELMIRA DE CORDOVA Nro.1926', '', '', '', '77502097', '', '', 1, '', '', 'AMARRILLO GARAJE', 3, '', 2, '', '', '-16.4938115,-68.1154256', '', '', 0, '0000-00-00', '2021-04-21', 103, '2020-10-01', '15:53:42', '181.188.170.213-181.188.170.213', 1),
(36, 36, 0, 'VILLA FATIMA villa lobos', 0, 'calle 2 Nro.603', '', '', '', '72054385', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-02', '09:53:52', '181.188.170.235-181.188.170.235', 1),
(37, 37, 0, 'MARISCAL SANTA CRUZ', 0, 'BARTOS Nro.618', '', '', '', '75803976 - Esposo', '', '', 1, '', 'RADRILLO', 'CAFE DEGRADADO A BLANCO', 3, '', 2, '', '', '-16.5685176,-68.2408486', '', '', 0, '2020-10-09', '0000-00-00', 103, '2020-10-09', '15:50:35', '181.188.170.226-181.188.170.226', 1),
(38, 38, 0, 'MARISCAL SANTA CRUZ', 0, '6 DE AGOSTO Nro.748', '', '', '', '67034318 - Esposo', '', '', 1, '', 'RADRILLO', 'CAFE CLARO', 3, '', 2, '', '', '-16.5743796,-68.2429113', '', '', 0, '2020-10-09', '0000-00-00', 103, '2020-10-09', '15:55:52', '181.188.170.226-181.188.170.226', 1),
(39, 39, 0, 'MARISCAL SANTA CRUZ', 0, 'HUYNA POTOSI Nro.6679', '', '', '', '78764709 - Esposo', '', '', 1, '', 'RADRILLO', 'AZUL CELESTE DEGRADADO A BLANCO', 3, '', 2, '', '', '-16.569072,-68.2422155', '', '', 0, '2020-10-09', '0000-00-00', 103, '2020-10-09', '16:01:20', '181.188.170.226-181.188.170.226', 1),
(40, 40, 0, 'VILLA NUEVA POTOSI', 0, '4 DE MAYO Nro.1060', '', '', '', '69956601', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-13', '09:20:03', '181.188.170.223-181.188.170.223', 1),
(41, 41, 0, 'ALTO TEJAR', 0, 'CALLE 10 Nro.40', '', '', '', '77773688', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-13', '11:14:48', '181.188.170.223-181.188.170.223', 1),
(42, 42, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '11:52:49', '181.188.170.232-181.188.170.232', 1),
(43, 43, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '11:53:37', '181.188.170.232-181.188.170.232', 1),
(44, 44, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '11:54:18', '181.188.170.232-181.188.170.232', 1),
(45, 45, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '11:54:59', '181.188.170.232-181.188.170.232', 1),
(46, 46, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '11:55:40', '181.188.170.232-181.188.170.232', 1),
(47, 47, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '12:07:36', '181.188.170.232-181.188.170.232', 1),
(48, 48, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '12:08:18', '181.188.170.232-181.188.170.232', 1),
(49, 49, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-10-16', '12:08:54', '181.188.170.232-181.188.170.232', 1),
(50, 50, 0, 'HUYNA POTOSI', 0, 'CALLE 25 ESCOBAR URIA Nro.672', '', '', '', '71222366', '', '', 1, '', '', '', 3, '', 2, '', '', '-16.4759956,-68.1852954', '', '', 0, '0000-00-00', '2021-04-19', 103, '2020-10-22', '14:58:03', '181.188.170.219-181.188.170.219', 1),
(51, 51, 0, 'AMIG CHACO', 0, 'CALLE F Nro.210', '', '', '', '72513848', '', '', 1, '', 'FACHADA CEMENTO PLOMO', 'GUINDO', 3, '', 2, '', '', '-16.5259601,-68.2046611', '', '', 0, '0000-00-00', '2021-02-03', 103, '2020-10-22', '15:03:14', '181.188.170.219-181.188.170.219', 1),
(52, 52, 0, 'VILLA MERCURIO', 0, 'JAMAICA Nro.2135', '', '', '', '78891617', '', '', 1, '', 'BLANCO ', 'NEGRO GARRAJE', 3, '', 3, '', '', '-16.4624385,-68.1841561', '', '', 0, '0000-00-00', '2021-02-03', 103, '2020-10-22', '15:07:05', '181.188.170.219-181.188.170.219', 1),
(53, 53, 0, 'GERMAN BUSCH', 0, 'RADIO INFINITA Nro.1145', '', '', '', '79103321', '', '', 0, '', 'RADRILLO', 'ROSADO', 0, '', 3, '', '', '-16.4673611,-68.1746479', '', '', 0, '0000-00-00', '2020-10-22', 103, '2020-10-22', '15:10:19', '181.188.170.219-181.188.170.219', 1),
(54, 54, 0, 'VILLA INGAVI', 0, 'CALACOTO Nro.2035', '', '', '', '71575456', '', '', 1, '', 'ADOVE', 'plomo', 3, '', 3, '', '', '-16.4672852,-68.1765881', '', '', 0, '0000-00-00', '2020-10-22', 103, '2020-10-22', '15:13:44', '181.188.170.219-181.188.170.219', 1),
(55, 55, 0, 'ALTO TEJAR', 0, 'CALLE 10 Nro.40', '', '', '', '73067381', '', '', 1, '', 'RADRILLO', 'azul ', 3, '', 2, 'garante DAYANA CALLEJAS -16.51507,-68.14819', '', '-16.5010331,-68.1577259', '', '', 0, '0000-00-00', '2020-10-23', 103, '2020-10-23', '10:36:17', '181.188.178.9-LPZ-181-188-178-00009.tigo.bo', 1),
(56, 56, 0, 'ALTO LIMA 2da SECCION', 0, 'BOLIVAR Nro.76', '', '', '', '', '', '', 1, '', 'RADRILLO', 'AZUL', 3, '', 2, '', '', '-16.4802149,-68.1780144', '', '', 0, '0000-00-00', '2021-04-14', 103, '2020-10-26', '12:05:22', '181.188.178.22-LPZ-181-188-178-00022.tigo.bo', 1),
(57, 57, 0, 'TEMBLADERANI', 0, 'HUALLPARRIPACHI Nro.29', '', '', '', '61226540', '', '', 1, '', 'ADOVE', 'AZUL PLOMO', 3, '', 3, '', '', '-16.5186718,-68.139799', '', '', 0, '0000-00-00', '2020-10-28', 103, '2020-10-28', '11:11:04', '181.188.170.234-181.188.170.234', 1),
(58, 58, 0, 'JANKO CALANI', 0, 'AV. ARGELIA Nro.33', '', '', '', '', '', '', 1, '', 'RADRILLO', 'AMARILLO MOSTAZA', 3, '', 2, '', '', '-16.5485803,-68.2000918', '', '', 0, '0000-00-00', '2020-10-29', 103, '2020-10-29', '11:08:38', '181.188.170.223-181.188.170.223', 1),
(59, 59, 0, 'PALESTINA', 0, 'LAS DALIAS Nro.1052', '', '', '', '73207718', '', '', 1, '', 'RADRILLO', 'Negro degradado a celeste', 3, '', 3, '', '', '-16.4742121,-68.2856716', '', '', 0, '0000-00-00', '2020-11-09', 103, '2020-11-04', '15:08:58', '181.188.178.98-LPZ-181-188-178-00098.tigo.bo', 1),
(60, 60, 0, 'VILLA MERCEDEZ', 0, 'CALLE 7 Nro.6403', '', '', '', '78876415', '', '', 1, '', 'RADRILLO', 'GARRAJE GINDO', 3, '', 2, '', '', '-16.569049,-68.2107795', '', '', 0, '0000-00-00', '2020-11-18', 103, '2020-11-06', '14:35:04', '181.188.178.108-LPZ-181-188-178-00108.tigo.bo', 1),
(61, 61, 0, 'GERMAN BUSCH OESTE', 0, 'AV. COHONI Nro.5075', '', '', '', '60658733', '', '', 1, '', 'ADOVE', 'CAFE CLARO', 3, '', 2, '', '', '-16.4763864,-68.1832775', '', '', 0, '0000-00-00', '2020-11-12', 103, '2020-11-12', '10:02:44', '181.188.178.106-LPZ-181-188-178-00106.tigo.bo', 1),
(62, 62, 0, 'ALTO SAN PEDRO', 0, 'CANONIGO AYLLON Nro.100-B', '', '', '', '72095640', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '2020-11-12', 103, '2020-11-12', '12:55:33', '181.188.178.106-LPZ-181-188-178-00106.tigo.bo', 1),
(63, 63, 0, 'FRANZ TAMAYO', 0, 'ENRIQUE KEMPFF MERCADO Nro.1304', '', '', '', '76521047', '', '', 1, '', 'RADRILLO', 'GINDO DEGRADADO A AMARRILLO MOSTAZA', 3, '', 2, '', '', '-16.5081965,-68.252864', '', '', 0, '0000-00-00', '2020-11-13', 103, '2020-11-13', '13:18:32', '181.188.178.13-LPZ-181-188-178-00013.tigo.bo', 1),
(64, 64, 0, 'MARISCAL SANTA CRUZ', 0, 'HUYNA POTOSI Nro.667', '', '', '', '74020737 - Hijo', '', '', 1, '', 'RADRILLO', 'GARAJE VERDE LECHUGA', 3, '', 2, '', '', '-16.5695134,-68.2409031', '', '', 0, '0000-00-00', '2020-11-13', 103, '2020-11-13', '14:47:46', '181.188.178.13-LPZ-181-188-178-00013.tigo.bo', 1),
(65, 65, 0, 'MARISCAL SANTA CRUZ', 0, '3J AV.CIRCUMVALACION Nro.7789', '', '', '', '75813494 - Hermana', '', '', 1, '', 'RADRILLO', 'AZUL', 3, '', 3, '', '', '-16.5692047,-68.2428074', '', '', 0, '0000-00-00', '2020-11-13', 103, '2020-11-13', '14:52:58', '181.188.178.13-LPZ-181-188-178-00013.tigo.bo', 1),
(66, 66, 0, 'MARISCAL SANTA CRUZ', 0, 'HUYNA POTOSI Nro.5571', '', '', '', '71784550', '', '', 1, '', 'RADRILLO', 'GARAJE AMARRILLO MOSTASA', 3, '', 3, '', '', '-16.569579,-68.2428293', '', '', 0, '0000-00-00', '2020-11-13', 103, '2020-11-13', '14:56:19', '181.188.178.13-LPZ-181-188-178-00013.tigo.bo', 1),
(67, 67, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-11-18', '10:45:22', '181.188.178.108-LPZ-181-188-178-00108.tigo.bo', 1),
(68, 68, 0, 'ZONA SUR', 0, 'LOS PINOS #21', '', '', '', '74584741', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-11-18', '10:54:08', '181.188.178.108-LPZ-181-188-178-00108.tigo.bo', 1),
(69, 69, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-11-18', '11:03:52', '181.188.178.108-LPZ-181-188-178-00108.tigo.bo', 1),
(70, 70, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2020-11-18', '11:06:29', '181.188.178.108-LPZ-181-188-178-00108.tigo.bo', 1),
(71, 71, 0, 'KENKO', 0, 'MANZANO 12 AV.B Nro.136', '', '', '', '76505826', '', '', 1, '', 'EMPEDRADO AMARRILLO PLOMO', 'GINDO PUERTA', 3, '', 2, '', '', '-16.5595436,-68.1951338', '', '', 0, '0000-00-00', '2021-04-21', 103, '2020-11-18', '14:10:29', '181.188.178.108-LPZ-181-188-178-00108.tigo.bo', 1),
(72, 72, 0, 'TEMBLADERANI', 0, 'JAIME ZUDAÑES Nro.35', '', '', '', '69956601', '', '', 1, '', 'AMARRILLO CALLEJON', 'GINDO', 3, '', 3, '', '', '', '', '', 0, '0000-00-00', '2020-11-25', 103, '2020-11-25', '16:48:24', '181.188.179.253-LPZ-181-188-179-00253.tigo.bo', 1),
(73, 73, 0, 'VILLA NUEVA POTOSI', 0, 'GUILLERMO KILLMAN Nro.1082', '', '', '', '70661529', '', '', 1, '', 'ADOVE', 'PLOMO MATERIAL CALAMINA', 3, '', 3, '', '', '-16.5030151,-68.1478892', '', '', 0, '0000-00-00', '2021-01-27', 103, '2020-11-26', '12:26:42', '181.188.170.2-181.188.170.2', 1),
(74, 74, 0, 'URBANIZACION MARISCAL SANTA CRUZ', 0, 'LA FLORES Nro.1849', '', '', '', '73511950', '', '', 1, '', 'RADRILLO', 'AZUL CELESTE', 3, '', 4, '', '', '-16.5701705,-68.2338117', '', '', 0, '2020-11-27', '0000-00-00', 103, '2020-11-27', '12:40:57', '131.0.199.105-SCZ-131-0-199-00105.tigo.bo', 1),
(75, 75, 0, 'CRISTAL I ', 0, 'CALLE ORQUIDEAZ', '', '', '', '61148011', '', '', 0, '', 'RADRILLO', 'GUINDO GARRAJE', 3, '', 3, '', '', '-16.5939158,-68.200558', '', '', 0, '0000-00-00', '2021-04-15', 103, '2020-11-30', '11:20:40', '131.0.199.143-SCZ-131-0-199-00143.tigo.bo', 1),
(76, 76, 0, 'FRANZ TAMAYO', 0, 'MANUEL CABALLERO Nro.920', '', '', '', '71938618', '', '', 1, '', 'AMARRILLA', 'AMARRILA GARRAJE', 3, '', 3, '', '', '-16.4986672,-68.2590071', '', '', 0, '0000-00-00', '2020-12-02', 103, '2020-12-02', '14:10:05', '131.0.199.131-SCZ-131-0-199-00131.tigo.bo', 1),
(77, 77, 0, 'VILLA ADELA', 0, 'MONTERO Nro.5', '', '', '', '75808668', '', '', 1, '', 'RADRILLO', 'VERDE GARRAJE', 3, '', 2, '', '', '-16.5196849,-68.2094447', '', '', 0, '0000-00-00', '2020-12-02', 103, '2020-12-02', '14:48:10', '131.0.199.131-SCZ-131-0-199-00131.tigo.bo', 1),
(78, 78, 0, 'BAJO SAN ANTONIO', 0, 'CASTRILLO, PASAJE ARENAS Nro.51', '', '', '', '70151842', '', '', 0, '', '', 'GUINDO', 3, '', 3, '', '', '-16.50244955295305,-68.1143381819129', '', '', 0, '0000-00-00', '2020-12-14', 103, '2020-12-14', '10:01:57', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(79, 79, 0, 'ALTO LLOJETA', 0, 'RAUL SALMON C/3  Nro.201', '', '', '', '77712280 - Hermana', '', '', 1, '', 'RADRILLO', 'CAFE CLARO', 3, '', 3, '', '', '-16.5354162,-68.1447996', '', '', 0, '2020-12-14', '2021-04-21', 103, '2020-12-14', '11:47:14', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(80, 80, 0, 'LLOJETA', 0, 'ACHOCALLA Nro.301', '', '', '', '78776632', '', '', 1, '', 'RADRILLO', 'CAFE CLARO', 3, '', 4, '', '', '-16.5354162,-68.1447996', '', '', 0, '2020-12-14', '2020-12-14', 103, '2020-12-14', '12:05:47', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(81, 81, 0, 'GRAN PODER', 0, 'ADUARDO AVAROA Nro.908', '', '', '', '77528023', '', '', 1, '', 'CERAMICA AMARRILLO PATITO', 'AMARILLO', 0, '', 2, '', '', '-16.5002457,-68.1445748', '', '', 0, '2020-12-14', '2021-04-21', 103, '2020-12-14', '12:18:44', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(82, 82, 0, 'PARAISO I', 0, 'JOSE MANUEL PANDO Nro.2875', '', '', '', '78153060 - Hija', '', '', 1, '', 'RADRILLO', 'NARANJA', 3, '', 3, '', '', '-16.5231931,-68.216198', '', '', 0, '0000-00-00', '2020-12-17', 103, '2020-12-16', '14:54:25', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(83, 83, 0, 'PARAISO I', 0, 'ANDREA CUISA Nro.1594', '', '', '', '', '', '', 1, '', 'RADRILLO', 'VERDE OSCURO GARRAJE', 3, '', 3, '', '', '-16.5247475,-68.21449', '', '', 0, '0000-00-00', '2020-12-17', 103, '2020-12-16', '14:57:53', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(84, 84, 0, 'PARAISO I', 0, 'JOSE MANUEL PANDO Nro.2875', '', '', '', '73534876', '', '', 1, '', 'RADRILLO', 'NARANJA', 3, '', 3, '', '', '-16.5231931,-68.216198', '', '', 0, '0000-00-00', '2020-12-17', 103, '2020-12-16', '15:01:02', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(85, 85, 0, 'VILLA ALEMANIA', 0, 'CECILIO ACOSTANro.777', '', '', '', '67096686 - Conyugue', '', '', 1, '', 'ADOVE', 'VERDE OSCURO GARRAJE', 3, '', 3, '', '', '-16.5174147,-68.2118403', '', '', 0, '0000-00-00', '2021-03-24', 103, '2020-12-16', '15:04:08', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(86, 86, 0, 'PARAISO I', 0, 'JOSE MANUEL PANDO Nro.2875', '', '', '', '77759128 - Hijo', '', '', 1, '', 'RADRILLO', 'NARANJA', 3, '', 3, '', '', '-16.5231931,-68.216198', '', '', 0, '0000-00-00', '2020-12-17', 103, '2020-12-16', '15:07:04', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(87, 87, 0, 'VILLA ALEMANIA', 0, 'CECILIO ACOSTA Nro.777-1514', '', '', '', '79647425 - Conyugue', '', '', 1, '', 'RADRILLO', 'VERDE OSCURO GARRAJE', 3, '', 3, '', '', '-16.5174147,-68.2118403', '', '', 0, '0000-00-00', '2021-03-24', 103, '2020-12-16', '15:09:49', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(88, 88, 0, 'SAN PEDRO ALTO II', 0, 'CUARTO CENTENARIO Nro.1137', '', '', '', '72514445 - Amiga', '', '', 1, '', 'BLANCO', 'ROJO OSCURO GARRAJE', 3, '', 2, '', '', '-16.5052314,-68.1459285', '', '', 0, '0000-00-00', '2021-03-23', 103, '2020-12-17', '10:43:56', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(89, 89, 0, 'PORTADA', 0, 'CALLE 4 REYES Nro.70', '', '', '', '72514445 - Sobrina', '', '', 1, '', 'ROSADO', 'PLOMO PUERTA', 3, '', 2, '', '', '-16.4906608,-68.163984', '', '', 0, '0000-00-00', '2021-03-23', 103, '2020-12-17', '10:47:10', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(90, 90, 0, 'PORTADA', 0, 'CALLE 4 REYES Nro.70', '', '', '', '72580308 - Amigo', '', '', 1, '', 'ROSADO', 'PLOMO PUERTA', 3, '', 2, '', '', '-16.4906608,-68.163984', '', '', 0, '0000-00-00', '2021-03-23', 103, '2020-12-17', '10:50:39', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(91, 91, 0, 'LIMANIPATA', 0, 'LUIS ESPINAL C/4 Nro.625', '', '', '', '67329790 - Amiga', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '2021-03-23', 103, '2020-12-17', '10:56:05', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(92, 92, 0, 'ALTO PURA PURA', 0, 'ROBERTO CHOQUE Nro.1446', '', '', '', '77708668 - Hija', '', '', 1, '', '', '', 2, '', 3, '', '', '-16.4596621,-68.1617656', '', '', 0, '0000-00-00', '2021-03-23', 103, '2020-12-17', '11:03:04', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(93, 93, 0, 'CHIJINI', 0, 'MARTINES MONJE Nro.937', '', '', '', '78769939 - Mamá', '', '', 1, '', 'CAFE', 'CAFE GARRAJE', 3, '', 2, '', '', '-16.5028576,-68.1515008', '', '', 0, '0000-00-00', '2020-12-28', 103, '2020-12-17', '11:07:16', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(94, 94, 0, 'ALTO SAN ANTONIO', 0, '18 DE MAYO Nro.100', '', '', '', '67135635', '', '', 1, '', 'RADRILLO', 'NEGRA GARRAJE', 3, '', 2, '', '', '-16.4960945,-68.1082627', '', '', 0, '0000-00-00', '2020-12-18', 103, '2020-12-18', '11:12:31', '131.0.199.20-SCZ-131-0-199-00020.tigo.bo', 1),
(95, 95, 0, 'BAJO SAN ISIDRO', 0, 'CALLE 5 Nro.3', '', '', '', '77287759', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-04', '15:24:46', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(100, 97, 0, 'LOS ANDES', 0, 'AV. ENTRE RIOS Nro.1147', '', '', '', '73285026 - Tia', '', '', 1, '', 'GUINDO CLARO', 'PLOMO PUERTA', 3, '', 2, '', '', '-16.4978977,-68.1503908', '', '', 0, '0000-00-00', '2021-01-18', 103, '2021-01-18', '11:22:41', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(99, 96, 0, '3J', 0, 'URB. MARISCAL SANTA CRUZ', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-15', '16:04:03', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(101, 98, 0, 'LOS ANDES', 0, 'AV. ENTRE RIOS Nro.1147', '', '', '', '', '', '', 1, '', 'GUINDO CLARO', 'PLOMO PUERTA', 3, '', 2, '', '', '-16.4978977,-68.1503908', '', '', 0, '0000-00-00', '2021-01-18', 103, '2021-01-18', '11:27:31', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(102, 99, 0, 'KUPINI', 0, 'PROLONGACION C/9 Nro.106', '', '', '', '71926379', '', '', 1, '', 'RADRILLO', 'GUINDO OSCURO PUERTA', 3, '', 2, '', '', '-16.5062823,-68.0982678', '', '', 0, '0000-00-00', '2021-01-18', 103, '2021-01-18', '12:09:26', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(103, 100, 0, 'VILLA NUEVA POTOSI', 0, 'GUILLERMO KILLMAN Nro.1082', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-27', '09:48:22', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(104, 101, 0, 'FINAL B COTAHUMA', 0, 'FINAL BUENOS AIRES Nro.29', '', '', '', '69956601', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-28', '11:12:05', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(105, 102, 0, 'VILLA LA MERCED', 0, 'ARAPATA Nro.1196', '', '', '', '65626328', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-29', '14:57:36', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(106, 103, 0, 'ALTO SAN ANTONIO', 0, 'CALLE 13 DE JUNIO Nro.37', '', '', '', '69806583', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-29', '15:01:08', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(107, 104, 0, 'VILLA FATIMA', 0, 'CHICALOMA Nro.1151', '', '', '', '73593892', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-29', '15:04:30', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(108, 105, 0, 'ALTO MIRAFLORES', 0, 'JOAQUIN LEIVA', '', '', '', '67150148', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-01-29', '15:09:43', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(109, 106, 0, 'OBISPO INDABURO', 0, 'OBISPO BALDERRAMA Nro.1159', '', '', '', '70595526', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-01', '11:00:09', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(110, 107, 0, 'OBISPO INDABURO', 0, 'OBISPO BALDERRAMA Nro.1159', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-01', '11:02:18', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(111, 108, 0, 'MERCURIO', 0, 'CALLE JAMAICA', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-01', '15:37:50', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(112, 109, 0, 'NUEVO AMANECER', 0, 'NEVADOS AV.NATURALEZA Nro.2214', '', '', '', '79154168', '', '', 1, '', '', '', 3, '', 3, '', '', '-16.5684234,-68.2205638', '', '', 0, '0000-00-00', '2021-02-02', 103, '2021-02-02', '12:37:56', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(113, 110, 0, 'MERCURIO', 0, 'JOSE LIBORIO VARGAS Nro.3744', '', '', '', '71513148', '', '', 1, '', 'RADRILLO AMARRILLO', 'CAFE GARRAJE', 3, '', 3, '', '', 'SIN DATO, NO VERIFICADO', '', '', 0, '0000-00-00', '2021-02-02', 103, '2021-02-02', '12:42:44', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(114, 111, 0, 'MARISCAL SANTA CRUZ', 0, 'LOS ROSALES Nro.2462', '', '', '', '75800709', '', '', 1, '', 'RADRILLO', 'CELEST BLANCO GARRAJE', 3, '', 3, '', '', '-16.5721699,-68.2344297', '', '', 0, '0000-00-00', '2021-02-02', 103, '2021-02-02', '12:48:05', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(115, 112, 0, 'SAN LUIS', 0, 'CALLE 4 Nro.136', '', '', '', '73509316', '', '', 0, '', '', '', 0, '', 0, '', '', 'NO VERIFICADO', '', '', 0, '0000-00-00', '2021-02-02', 103, '2021-02-02', '12:50:41', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(116, 113, 0, 'NUEVO AMANECER', 0, 'AMANECER Nro.2662', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-05', '15:06:47', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(117, 114, 0, 'SANTIAGO PRIMERO', 0, 'TARAPACA Nro.308', '', '', '', '79500162', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-08', '10:51:48', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(118, 115, 0, 'TRIANGULAR', 0, 'CALLE 14 Nro.55', '', '', '', '79500162', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-08', '10:52:50', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(119, 116, 0, 'SANTIAGO I', 0, 'CALLEJON 3 Nro.60', '', '', '', '79500162', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-08', '10:54:10', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(120, 117, 0, 'VILLA DOLORES', 0, 'CALLE 14 Nro.50', '', '', '', '76514046', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-08', '10:55:25', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(121, 118, 0, '6 DE AGOSTO', 0, 'MURURATA Nro.1054', '', '', '', '77550619', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-10', '11:07:06', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(122, 119, 0, 'SAN LUIS DAZA', 0, 'CALLE  4 Nro.2375', '', '', '', '76213880', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-10', '11:09:57', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(123, 120, 0, 'AGUA DE LA VIDA', 0, 'DIEGO DE PERALTA Nro.20', '', '', '', '70190941', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-10', '15:06:20', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(124, 121, 0, 'AGUA DE VIDA', 0, 'DIEGO DE PERALTA Nro.20', '', '', '', '72581837', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-10', '15:09:40', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(125, 122, 0, 'VILLA DOLORES', 0, '25 DE MAYO Nro.90', '', '', '', '65690468', '', '', 0, '', 'RADRILLO', 'ROJO OSCURO GARRAJE', 3, '', 2, '', 'UBICACION DE CASA DE DOMICILIO DEL GARANTE', '-16.5693369,-68.211029', '', '', 0, '0000-00-00', '2021-02-19', 103, '2021-02-19', '10:34:44', '177.222.63.182-SCZ-177-222-63-00182.tigo.bo', 1),
(126, 123, 0, 'VILLA MERCEDES', 0, 'CALLE INGAVI Nro.3403', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-19', '11:39:46', '177.222.63.182-SCZ-177-222-63-00182.tigo.bo', 1),
(127, 124, 0, 'SAN MIGUEL', 0, 'CALLE 21 DE SEPTIEMBRE Nro.688', '', '', '', '71201118', '', '', 1, '', 'RADRILLO', 'GARRAJE, EL COLOR NO ESPECIFICADO', 3, '', 1, '', '', '-16.4642176,-68.2844257', '', '', 0, '0000-00-00', '2021-02-24', 103, '2021-02-24', '11:03:25', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(128, 125, 0, 'LAGUNA SANTA FÉ', 0, 'VICTOR PAZ CALLE Nro. 4150', '', '', '', '-16.4642176,-68.2844257', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '11:11:26', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(129, 126, 0, 'ALTO MIRAFLORES', 0, 'NESTOR MORALES Nro.1396', '', '', '', '68141188', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '11:49:23', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(130, 127, 0, 'TEMBLADERANI', 0, 'ADRIAN PATIÑO Nro. 2002', '', '', '', '76739288', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '11:52:34', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(131, 128, 0, 'BUENOS AIRES', 0, 'TEMBLADERANI Nro.1689', '', '', '', '76739288', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '11:56:34', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(132, 129, 0, 'SENKATA', 0, 'VILLCANI Z 25 DE JULIO Nro.1245', '', '', '', '77790467', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '11:59:32', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(133, 130, 0, 'OBISPO INDABURO', 0, 'KILLMAN Nro.60', '', '', '', '78787488', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '12:02:52', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(134, 131, 0, 'SOPOCACHI', 0, 'FINAL VINCCENTI Nro.1209', '', '', '', '76739288', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '12:05:42', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(135, 132, 0, 'SATELITE', 0, 'FERNAN CABALLERO Nro.2163', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-02-24', '12:10:42', '177.222.61.12-SCZ-177-222-61-00012.tigo.bo', 1),
(136, 133, 0, 'VILLA FATIMA', 0, 'ARAPATA Nro.1196', '', '', '', '79523868', '', '', 1, '', 'RADRILLO', 'NEGRO GARRAJE', 3, '', 2, '', '', '-16.4716436,-68.1188969', '', '', 0, '0000-00-00', '2021-03-03', 103, '2021-03-03', '13:12:52', '177.222.63.231-SCZ-177-222-63-00231.tigo.bo', 1),
(137, 134, 0, 'VILLA PABÓN', 0, 'LA CRUZ Nro.1171', '', '', '', '72054533', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:08:01', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(138, 135, 0, 'PORTDA', 0, 'SEGUNDO BASCONES Nro.2488', '', '', '', '623000613', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:34:18', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(139, 136, 0, 'ALTO MUNAYPATA', 0, 'COPACABANA Nro.294', '', '', '', '77739277', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:38:04', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(140, 137, 0, 'MUNAYPATA', 0, 'ZAPAQUI Nro.2315', '', '', '', '77575783', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:40:53', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(141, 138, 0, 'MINERO', 0, 'RADIO CONDOR Nro.1575', '', '', '', '72583825', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:43:20', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(142, 139, 0, 'ALTO MUNAYPATA', 0, 'COPACABANA Nro.294', '', '', '', '78924000', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:47:03', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(143, 140, 0, 'MUNAYPATA', 0, 'SAPAQUI Nro.2315', '', '', '', '62541272', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-04', '14:52:52', '177.222.63.206-SCZ-177-222-63-00206.tigo.bo', 1),
(144, 141, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-05', '15:35:23', '177.222.63.241-SCZ-177-222-63-00241.tigo.bo', 1),
(145, 142, 0, 'SANTA FE', 0, 'VICTOR PAZ Nro.4150', '', '', '', '', '', '', 1, '', 'RADRILLO', 'VERDE ESMERALDA GARAJE', 3, '', 2, '', '', '-16.4893884,-68.259844', '', '', 0, '0000-00-00', '2021-03-12', 103, '2021-03-12', '14:26:54', '177.222.63.142-SCZ-177-222-63-00142.tigo.bo', 1),
(146, 143, 0, 'SAN MIGUEL', 0, '21 DE SEPTIEMBRE Nro.688', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-12', '16:36:50', '177.222.63.142-SCZ-177-222-63-00142.tigo.bo', 1),
(147, 144, 0, 'HUAYNA POTOSI', 0, 'CALLE CORONILLA Nro.3584', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-19', '10:31:43', '177.222.63.152-SCZ-177-222-63-00152.tigo.bo', 1),
(148, 145, 0, 'PARAISO I', 0, 'ANDRE ARIAS Nro.1594', '', '', '', '74919277', '', '', 1, '', 'RADRILLO', 'VERDE OSCURO GARRAJE', 3, '', 3, '', '', '-16.5246088,-68.2144999', '', '', 0, '0000-00-00', '2021-03-24', 103, '2021-03-24', '12:12:52', '177.222.63.130-SCZ-177-222-63-00130.tigo.bo', 1),
(149, 146, 0, '21 DE SEPTIEMBRE', 0, 'LAGUNAS Nro.3065', '', '', '', '73534876 - Hijo', '', '', 1, '', 'RADRILLO', 'PLOMO GARRAJE', 3, '', 2, '', '', '-16.4875208,-68.2578756', '', '', 0, '0000-00-00', '2021-03-24', 103, '2021-03-24', '12:18:48', '177.222.63.130-SCZ-177-222-63-00130.tigo.bo', 1),
(150, 147, 0, '21 DE SEPTIEMBRE', 0, 'LAGUNAS Nro.3065', '', '', '', '73094090 - Esposa', '', '', 1, '', 'RADRILLO', 'PLOMO GARRAJE', 3, '', 3, '', '', '-16.4875208,-68.2578756', '', '', 0, '0000-00-00', '2021-03-24', 103, '2021-03-24', '12:22:08', '177.222.63.130-SCZ-177-222-63-00130.tigo.bo', 1),
(151, 148, 0, 'ALTO TACAGUA', 0, '5 DE AGOSTO Nro.235', '', '', '', '60609387 - Hermano', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-24', '16:32:17', '177.222.63.130-SCZ-177-222-63-00130.tigo.bo', 1),
(152, 149, 0, 'TEMBLADERANI', 0, '12 DE OCTUBRE Nro.2239', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-03-25', '13:52:52', '177.222.63.190-SCZ-177-222-63-00190.tigo.bo', 1),
(153, 150, 0, 'SEÑOR DE LAGUNAS', 0, 'SANTA CRUZ Nro. 7', '', '', '', '69823745 - Esposa', '', '', 0, '', 'ADOVE', 'ROJO GARRAJE', 3, '', 2, '', '', '-16.4764354,-68.2522108', '', '', 0, '0000-00-00', '2021-04-19', 103, '2021-04-07', '13:17:30', '177.222.61.16-SCZ-177-222-61-00016.tigo.bo', 1),
(154, 151, 0, 'SAN AGUSTIN', 0, '5 DE OCTUBRE Nro.2145', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-07', '13:24:40', '177.222.61.16-SCZ-177-222-61-00016.tigo.bo', 1),
(155, 152, 0, 'LOS ANGELES', 0, 'ALAMOS Nro.1289', '', '', '', '', '', '', 1, '', 'RADRILLO', 'VERDE LECHUGA GARRAJE', 3, '', 2, '', '', '-16.62887,-68.1872641', '', '', 0, '0000-00-00', '2021-04-19', 103, '2021-04-07', '13:26:43', '177.222.61.16-SCZ-177-222-61-00016.tigo.bo', 1),
(156, 153, 0, 'LOS ANDES', 0, 'CHOROLQUE Nro.1091', '', '', '', '77783354 - Prima', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-07', '14:40:47', '177.222.61.16-SCZ-177-222-61-00016.tigo.bo', 1),
(157, 154, 0, 'LOS ANDES', 0, 'AV. ANTRE RIOS Nro.1147', '', '', '', '6539194 - Hermana', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-07', '14:44:00', '177.222.61.16-SCZ-177-222-61-00016.tigo.bo', 1),
(158, 155, 0, '12 DE OCTUBRE ', 0, 'CALLE 7 Nro.660', '', '', '', '78912160 - Mamá', '', '', 1, '', 'FACHADA CEMENTO PLOMO', 'GUINDO PUERTA', 3, '', 1, '', '', '-16.513026,-68.1615273', '', '', 0, '0000-00-00', '2021-04-08', 103, '2021-04-08', '11:00:00', '177.222.63.208-SCZ-177-222-63-00208.tigo.bo', 1),
(159, 156, 0, 'SAN JUANITO ', 0, 'CALLE 4 Nro.1785', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-08', '11:09:46', '177.222.63.208-SCZ-177-222-63-00208.tigo.bo', 1),
(160, 157, 0, 'CIUDAD SATELITE', 0, 'PLAN 112 CALLE 30 A', '', '', '', '77725621', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-08', '11:29:19', '177.222.63.208-SCZ-177-222-63-00208.tigo.bo', 1),
(161, 158, 0, 'CHIJINI', 0, 'AV. 9 DE ABRIL Nro.971', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-08', '11:35:29', '177.222.63.208-SCZ-177-222-63-00208.tigo.bo', 1),
(162, 159, 0, 'ALTO TEJAR', 0, 'CALLE 10 Nro.38', '', '', '', '62346518 - Hija', '', '', 2, '', 'ADOVE', 'AMARILLO MOSTAZA PUERTA', 3, '', 3, '', '', '-16.5002359,-68.1591497', '', '', 0, '0000-00-00', '2021-04-09', 103, '2021-04-09', '12:49:19', '177.222.63.169-SCZ-177-222-63-00169.tigo.bo', 1),
(163, 160, 0, 'ALTO TEJAR', 0, 'CALLE 10 Nro.40', '', '', '', '77524880 - Hija', '', '', 1, '', 'RADRILLO', 'AZUL GARRAJE', 3, '', 3, '', '', '-16.5009639,-68.1578408', '', '', 0, '0000-00-00', '2021-04-09', 103, '2021-04-09', '12:52:34', '177.222.63.169-SCZ-177-222-63-00169.tigo.bo', 1),
(164, 161, 0, 'SAN LUIS II', 0, 'LOS PINOS Nro.8200', '', '', '', '67375073 - Mamá', '', '', 2, '', 'RADRILLO', 'CAFE GARRAJE', 3, '', 3, '', '', '-16.5564149,-68.2451675', '', '', 0, '0000-00-00', '2021-04-09', 103, '2021-04-09', '12:58:20', '177.222.63.169-SCZ-177-222-63-00169.tigo.bo', 1),
(165, 162, 0, 'LOS ANDES', 0, 'ENTRE RIOS Nro.1249', '', '', '', '73734876 - Esposa', '', '', 2, '', 'FACHADA CEMENTO PLOMO', 'GINDO MADERA PUERTA', 3, '', 3, '', '', '-16.4986287,-68.1515226', '', '', 0, '0000-00-00', '2021-04-09', 103, '2021-04-09', '13:01:08', '177.222.63.169-SCZ-177-222-63-00169.tigo.bo', 1),
(166, 163, 0, 'MARISCAL SANTA CRUZ', 0, 'HUYNA POTOSI Nro.5570', '', '', '', '73256415 - Mamá', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-14', '12:12:32', '177.222.63.253-SCZ-177-222-63-00253.tigo.bo', 1),
(167, 164, 0, 'MARISCAL SANTA CRUZ', 0, 'SAJAMA Nro.4459', '', '', '', '79162373 - Sobrina', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-14', '12:15:55', '177.222.63.253-SCZ-177-222-63-00253.tigo.bo', 1),
(168, 165, 0, 'MARISCAL SANTA CRUZ', 0, 'HUYNA POTOSI Nro.5570', '', '', '', '73724660 - Hermano', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-14', '12:18:49', '177.222.63.253-SCZ-177-222-63-00253.tigo.bo', 1),
(169, 166, 0, 'MARISCAL SANTA CRUZ', 0, 'CIRCUMBALACION Nro.796', '', '', '', '78789913 - Mamá', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-14', '12:21:56', '177.222.63.253-SCZ-177-222-63-00253.tigo.bo', 1),
(170, 167, 0, 'ALTO LIMA 1ra SECCIÓN', 0, 'CALLE COCHABAMBA Nro.9063', '', '', '', '', '', '', 1, '', 'RADRILLO', 'BLANCO GARRAJE', 3, '', 2, '', '', '-16.4802941,-68.1707859', '', '', 0, '0000-00-00', '2021-04-14', 103, '2021-04-14', '14:51:45', '177.222.63.253-SCZ-177-222-63-00253.tigo.bo', 1),
(171, 168, 0, 'VILLA COPACABANA', 0, 'FRAY BARTOLINA DE LAS CASAS Nro.1981', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-16', '11:42:03', '177.222.63.164-SCZ-177-222-63-00164.tigo.bo', 1),
(172, 169, 0, 'ALTO CHIJINI', 0, 'AV. 9 DE ABRIL Nro.971', '', '', '', '76729297', '', '', 1, '', 'SIN ONFORMACION', 'SIN INFORMACION', 3, '', 2, '', '', '-16.5039624,-68.1513502', '', '', 0, '0000-00-00', '2021-04-16', 103, '2021-04-16', '15:02:14', '177.222.63.164-SCZ-177-222-63-00164.tigo.bo', 1),
(173, 170, 0, 'ROSASANI', 0, 'PERIFERICA Nro.20', '', '', '', '75271506 - Hija', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-19', '14:19:01', '177.222.61.20-SCZ-177-222-61-00020.tigo.bo', 1),
(174, 171, 0, '16 DE JULIO', 0, 'CALLE RENE VARGAS Nro.2950', '', '', '', '72092136', '', '', 1, '', 'NEGRO ASULEJO', 'MOSTAZA GARRAJE', 3, '', 2, '', '', '-16.4921902,-68.1715009', '', '', 0, '0000-00-00', '2021-04-22', 103, '2021-04-22', '10:40:41', '177.222.63.207-SCZ-177-222-63-00207.tigo.bo', 1),
(175, 172, 0, 'MERCURIO', 0, 'AV. RADIO ANIMAS Nro.1974', '', '', '', '79563803', '', '', 1, '', 'RADRILLO', 'VERDE CLARO GARRAJE', 3, '', 2, '', '', '-16.4597815,-68.1807431', '', '', 0, '0000-00-00', '2021-04-23', 103, '2021-04-23', '13:59:12', '177.222.63.135-SCZ-177-222-63-00135.tigo.bo', 1),
(176, 173, 0, 'MARCELINA', 0, 'AV. CESAR ACHABAL Nro.3061', '', '', '', '79137920 - Amiga', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-26', '11:42:39', '177.222.63.249-SCZ-177-222-63-00249.tigo.bo', 1),
(177, 174, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-04-29', '17:21:15', '177.222.63.246-SCZ-177-222-63-00246.tigo.bo', 1),
(178, 175, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-16', '10:14:04', '181.188.160.81-LPZ-181-188-160-00081.tigo.bo', 1),
(179, 176, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-16', '10:14:22', '181.188.160.81-LPZ-181-188-160-00081.tigo.bo', 1),
(180, 177, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-17', '14:47:58', '177.222.63.252-SCZ-177-222-63-00252.tigo.bo', 1),
(181, 178, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-17', '17:35:46', '177.222.63.252-SCZ-177-222-63-00252.tigo.bo', 1),
(182, 179, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-17', '17:38:55', '177.222.63.252-SCZ-177-222-63-00252.tigo.bo', 1),
(183, 180, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-17', '18:07:06', '177.222.63.252-SCZ-177-222-63-00252.tigo.bo', 1),
(184, 181, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-18', '13:49:58', '177.222.63.149-SCZ-177-222-63-00149.tigo.bo', 1),
(185, 182, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-18', '13:57:14', '177.222.63.149-SCZ-177-222-63-00149.tigo.bo', 1),
(186, 183, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-18', '13:59:08', '177.222.63.149-SCZ-177-222-63-00149.tigo.bo', 1),
(187, 184, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-18', '14:00:15', '177.222.63.149-SCZ-177-222-63-00149.tigo.bo', 1),
(188, 185, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-18', '14:01:28', '177.222.63.149-SCZ-177-222-63-00149.tigo.bo', 1),
(189, 186, 0, 'VILLA FATIMA', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-20', '23:49:03', '181.188.160.132-181.188.160.132', 1),
(190, 187, 0, 'VILLA FATIMA', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '00:02:17', '181.188.160.132-181.188.160.132', 1),
(191, 188, 0, 'VILLA FATIMA', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '00:07:28', '181.188.160.132-181.188.160.132', 1),
(192, 189, 0, 'VILLA FATIMA', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '00:27:32', '181.188.160.132-181.188.160.132', 1),
(193, 190, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '10:01:00', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1),
(194, 191, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '10:01:48', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1),
(195, 192, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '10:02:38', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1),
(196, 193, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '10:03:36', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1),
(197, 194, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '10:04:21', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1),
(198, 195, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '11:58:55', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1),
(199, 196, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2021-05-21', '12:17:31', '177.222.63.131-SCZ-177-222-63-00131.tigo.bo', 1);
INSERT INTO `domicilio` (`iddomicilio`, `idpersona`, `idzona`, `idbarrio`, `idtipoPaso`, `nombre`, `edificio`, `piso`, `numero`, `telefono`, `descripcion`, `tipoDomicilio`, `dirverdadero`, `observacion`, `colorcasa`, `colorpuerta`, `afiches`, `observacion2`, `referencia`, `contacto`, `observacion3`, `coordenadas`, `coordX`, `coordY`, `indicador`, `fechaverificado`, `fechaactualizado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(200, 197, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-08', '16:46:05', '131.0.198.235-SCZ-131-0-198-00235.tigo.bo', 1),
(201, 198, 0, 'Bueno amanecer', 0, 'Zona Nuevo Amanecer Calle Galaxia', '', '', '', '76558591', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-27', '19:12:30', '177.222.61.168-SCZ-177-222-61-00168.tigo.bo', 1),
(202, 199, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-27', '19:35:19', '131.0.198.71-SCZ-131-0-198-00071.tigo.bo', 1),
(203, 200, 0, '16 de julio', 0, 'j arzabe', '', '', '', '2844574', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:04:02', '177.222.115.174-177.222.115.174', 1),
(204, 201, 0, 'Bajo Ballivian', 0, 'Juan de las Rivas', '', '', '', '2845554', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:48:43', '177.222.115.174-177.222.115.174', 1),
(205, 202, 0, 'Bajo Ballivian', 0, 'Chacon', '', '', '', '2845147', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:50:34', '177.222.115.174-177.222.115.174', 1),
(206, 203, 0, '16 de julio', 0, 'j arzabe', '', '', '', '28845745', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:52:12', '177.222.115.174-177.222.115.174', 1),
(207, 204, 0, 'Alto de la alianza', 0, 'av.pucarani', '', '', '', '2844574', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:53:47', '177.222.115.174-177.222.115.174', 1),
(208, 205, 0, 'Bajo Ballivian', 0, 'Los alamos ', '', '', '', '2845547', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:55:36', '177.222.115.174-177.222.115.174', 1),
(209, 206, 0, 'Bajo Ballivian', 0, 'Chacon', '', '', '', '2844411', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-28', '15:58:53', '177.222.115.174-177.222.115.174', 1),
(210, 207, 0, '16 DE JULIO', 0, 'J ARZABE', '', '', '', '2844554', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-29', '19:54:44', '200.105.189.196-static-200-105-189-196.acelerate.net', 1),
(211, 208, 0, '16 DE JULIO', 0, 'J ARZABE', '', '', '', '2884454', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-07-29', '20:00:09', '200.105.189.196-static-200-105-189-196.acelerate.net', 1),
(212, 209, 0, '16 de julio', 0, 'Los alamos ', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-08-02', '20:42:26', '181.115.131.23-181.115.131.23', 1),
(213, 210, 0, '16 de julio', 0, 'calle hernani', '', '', '', '2845744', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-10-28', '10:43:46', '177.222.114.189-177.222.114.189', 1),
(214, 211, 0, 'achachicala', 0, 'vino tinto', '', '', '', '2844444', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-11-09', '17:58:27', '177.222.114.124-177.222.114.124', 1),
(215, 212, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-11-18', '14:22:25', '177.222.61.143-SCZ-177-222-61-00143.tigo.bo', 1),
(216, 213, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-12-02', '23:18:40', '177.222.61.41-SCZ-177-222-61-00041.tigo.bo', 1),
(217, 214, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-12-02', '23:33:58', '177.222.61.41-SCZ-177-222-61-00041.tigo.bo', 1),
(218, 215, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-12-03', '08:28:36', '177.222.61.41-SCZ-177-222-61-00041.tigo.bo', 1),
(219, 216, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2022-12-03', '09:12:54', '177.222.61.41-SCZ-177-222-61-00041.tigo.bo', 1),
(220, 0, 0, 'achachicala', 0, 'calle nieves', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-05-03', '22:23:23', '177.222.115.60-177.222.115.60', 1),
(221, 218, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-05-05', '12:32:46', '131.0.198.19-SCZ-131-0-198-00019.tigo.bo', 1),
(222, 219, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-05-05', '18:42:17', '131.0.198.19-SCZ-131-0-198-00019.tigo.bo', 1),
(223, 220, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-12', '17:52:07', '131.0.197.102-SCZ-131-0-197-00102.tigo.bo', 1),
(224, 221, 0, 'ACHACHICALA', 0, 'AV. LITORAL', '', '', '', '72132132', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-13', '11:20:52', '131.0.198.3-SCZ-131-0-198-00003.tigo.bo', 1),
(225, 222, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-15', '18:02:16', '177.222.61.163-SCZ-177-222-61-00163.tigo.bo', 1),
(226, 223, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-25', '12:41:35', '177.222.61.55-SCZ-177-222-61-00055.tigo.bo', 1),
(227, 224, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '08:45:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(228, 225, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '08:48:10', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(229, 226, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:41:33', '177.222.115.73-177.222.115.73', 1),
(230, 227, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:49:34', '177.222.115.73-177.222.115.73', 1),
(231, 228, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:50:31', '177.222.115.73-177.222.115.73', 1),
(232, 229, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:51:03', '177.222.115.73-177.222.115.73', 1),
(233, 230, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:52:09', '177.222.115.73-177.222.115.73', 1),
(234, 231, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:52:41', '177.222.115.73-177.222.115.73', 1),
(235, 232, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:53:35', '177.222.115.73-177.222.115.73', 1),
(236, 233, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:54:04', '177.222.115.73-177.222.115.73', 1),
(237, 234, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:54:49', '177.222.115.73-177.222.115.73', 1),
(238, 235, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:55:48', '177.222.115.73-177.222.115.73', 1),
(239, 236, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:56:25', '177.222.115.73-177.222.115.73', 1),
(240, 237, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:56:54', '177.222.115.73-177.222.115.73', 1),
(241, 238, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:57:22', '177.222.115.73-177.222.115.73', 1),
(242, 239, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:58:02', '177.222.115.73-177.222.115.73', 1),
(243, 240, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:58:42', '177.222.115.73-177.222.115.73', 1),
(244, 241, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '13:59:15', '177.222.115.73-177.222.115.73', 1),
(245, 242, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '14:00:10', '177.222.115.73-177.222.115.73', 1),
(246, 243, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-26', '14:01:01', '177.222.115.73-177.222.115.73', 1),
(247, 244, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-27', '16:54:33', '177.222.115.73-177.222.115.73', 1),
(248, 245, 0, 'La portada', 0, 'Av Alcides arguedas', '', '', '', '77576639', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-27', '22:11:00', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(249, 246, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-27', '22:13:06', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(250, 247, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-06-27', '22:14:46', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(251, 248, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2023-10-19', '15:49:38', '131.0.199.102-SCZ-131-0-199-00102.tigo.bo', 1),
(252, 249, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2024-05-28', '18:12:05', '161.138.97.100-161.138.97.100', 1),
(253, 250, 0, 'av landaeta zona sopocachi', 0, '', '', '', '', '77702539', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2024-06-05', '16:23:28', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(254, 251, 0, 'EL RANCHO', 0, 'CALLE TUNUPA NUMERO 10', '', '', '', 'NINGUNA', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-02-01', '23:53:48', '189.28.95.5-LPZ-189-28-95-00005.tigo.bo', 1),
(255, 252, 0, 'VIACHA ', 0, 'CALLE 2 NUMERO 50', '', '', '', 'NINGUNA', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-02-02', '00:08:45', '189.28.95.5-LPZ-189-28-95-00005.tigo.bo', 1),
(256, 253, 0, 'MARISCAL', 0, 'CALLE 5 NUMERO 225', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-02-04', '22:26:27', '189.28.95.32-LPZ-189-28-95-00032.tigo.bo', 1),
(257, 254, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-04-08', '18:03:45', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(258, 255, 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-04-10', '16:29:25', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(259, 256, 0, 'El Tejar', 0, 'Calle Nro 7', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-04-12', '17:53:32', '177.222.113.92-177.222.113.92', 1),
(260, 257, 0, 'Sopocachi', 0, 'Calle 6', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-04-14', '20:21:44', '177.222.113.92-177.222.113.92', 1),
(261, 258, 0, 'Zona San Pedro', 0, 'Calle Cañada Strongest', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-04-30', '22:57:17', '177.222.113.250-177.222.113.250', 1),
(262, 259, 0, 'OBRAJES', 0, 'CALLE 12 DE JUNIO NRO. 55', '', '', '', '2789123', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-08-18', '15:03:18', '181.115.207.102-181.115.207.102', 1),
(263, 260, 0, 'Villa Fatima', 0, 'Av. Saavedra', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-08-31', '00:49:44', '177.222.112.231-177.222.112.231', 1),
(264, 261, 0, 'PAMPAHASI', 0, 'CALLE 50', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-04', '23:37:09', '177.222.112.197-177.222.112.197', 1),
(265, 262, 0, 'Sur', 0, 'Calle 18 Calacoto', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '07:52:21', '177.222.112.197-177.222.112.197', 1),
(266, 263, 0, 'MIRAFLORES', 0, 'AV. SAAVEDRA', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '07:55:45', '177.222.112.197-177.222.112.197', 1),
(267, 264, 0, 'Miraflores', 0, 'Av. Saavedra', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '07:57:35', '177.222.112.197-177.222.112.197', 1),
(268, 265, 0, 'El ALto', 0, 'Av. 6 de Marzo', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '08:01:36', '177.222.112.197-177.222.112.197', 1),
(269, 266, 0, 'Sopocachi', 0, 'Pasaje Junin', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '08:04:28', '177.222.112.197-177.222.112.197', 1),
(270, 267, 0, 'Miraflores', 0, 'Av. Busch ', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '08:07:52', '177.222.112.197-177.222.112.197', 1),
(271, 268, 0, 'Los Rosales', 0, 'Calle 15', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '08:10:57', '177.222.112.197-177.222.112.197', 1),
(272, 269, 0, 'Villa Adela', 0, 'Calle 5', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 103, '2025-09-05', '08:14:17', '177.222.112.197-177.222.112.197', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dominio`
--

CREATE TABLE IF NOT EXISTS `dominio` (
  `iddominio` int(10) unsigned NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `short` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `tipo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `tipo2` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=207 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dominio`
--

INSERT INTO `dominio` (`iddominio`, `codigo`, `short`, `nombre`, `valor1`, `valor2`, `tipo`, `tipo2`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'M', 'MA', 'MASCULINO', 0, 0, 'SX', 0, 0, '0000-00-00', '00:00:00', '', 1),
(2, 'F', 'FE', 'FEMENINO', 0, 0, 'SX', 0, 0, '0000-00-00', '00:00:00', '', 1),
(3, 'SL', 'S', 'SOLTERO', 0, 0, 'EC', 0, 0, '0000-00-00', '00:00:00', '', 1),
(4, 'CS', 'C', 'CASADO', 0, 0, 'EC', 0, 0, '0000-00-00', '00:00:00', '', 1),
(5, 'DIV', 'D', 'DIVORCIADO', 0, 0, 'EC', 0, 0, '0000-00-00', '00:00:00', '', 1),
(6, 'VI', 'V', 'VIUDO', 0, 0, 'EC', 0, 0, '0000-00-00', '00:00:00', '', 1),
(7, 'CV', 'C', 'CONCUBINATO', 0, 0, 'EC', 0, 0, '0000-00-00', '00:00:00', '', 1),
(8, 'C', 'C', 'CALLE', 0, 0, 'DIR', 0, 0, '0000-00-00', '00:00:00', '', 1),
(9, 'A', 'A', 'AVENIDA', 0, 0, 'DIR', 0, 0, '0000-00-00', '00:00:00', '', 1),
(10, 'P', 'P', 'PASAJE', 0, 0, 'DIR', 0, 0, '0000-00-00', '00:00:00', '', 1),
(11, 'BE', 'BE', 'BENEFICIARIO', 0, 0, 'VI', 0, 0, '0000-00-00', '00:00:00', '', 1),
(34, 'RE', '0', 'RESERVADO', 0, 0, 'RES', 0, 1, '0000-00-00', '00:00:00', '', 1),
(14, 'p', 'P', 'PADRE', 0, 0, 'PA', 0, 0, '0000-00-00', '00:00:00', '', 1),
(15, 'H', 'H', 'HIJO(A)', 0, 0, 'PA', 0, 0, '0000-00-00', '00:00:00', '', 1),
(16, 'O', 'O', 'OTRO', 0, 0, 'PA', 0, 0, '0000-00-00', '00:00:00', '', 1),
(17, 'O', 'O', 'SIN DATO', 0, 0, 'SD', 0, 0, '0000-00-00', '00:00:00', '', 1),
(18, 'VI', 'VI', 'VIGENTE', 0, 0, 'ECU', 0, 0, '0000-00-00', '00:00:00', '', 1),
(19, 'VE', 'VE', 'VENCIDO', 0, 0, 'ECU', 0, 0, '0000-00-00', '00:00:00', '', 1),
(20, 'RE', 'RE', 'REGULAR', 0, 0, 'ACA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(21, 'IR', 'IR', 'IRREGULAR', 0, 0, 'ACA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(22, 'DE', 'DE', 'DEPURADO', 0, 0, 'ACA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(23, 'PE', 'PE', 'PERMISO', 0, 0, 'ACA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(24, 'TE', 'TE', 'TERMINO', 0, 0, 'ACA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(25, 'PD', 'P', 'RESERVADO', 0, 0, 'ECA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(26, 'CS', 'P', 'CURSADO', 0, 0, 'ECA', 0, 1, '0000-00-00', '00:00:00', '', 1),
(160, '1', '0', 'GERENTE', 0, 0, 'CAAS', 0, 1, '0000-00-00', '00:00:00', '', 1),
(90, '0', 'LP', 'LA PAZ', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(91, '0', 'OR', 'ORURO', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(92, '0', 'CH', 'CHUQUISACA', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(93, '0', 'CB', 'COCHABAMBA', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(94, '0', 'SC', 'SANTA CRUZ', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(95, '0', 'PT', 'POTOSI', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(96, '0', 'PA', 'PANDO', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(97, '0', 'BE', 'BENI', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(98, '0', 'TJ', 'TARIJA', 0, 0, 'DEP', 0, 1, '0000-00-00', '00:00:00', '', 1),
(161, '2', '0', 'SISTEMAS', 0, 0, 'CAAS', 0, 1, '0000-00-00', '00:00:00', '', 1),
(162, '3', '0', 'OPERARIO', 0, 0, 'CAAS', 0, 1, '0000-00-00', '00:00:00', '', 1),
(165, '4', '0', 'SUPERVISOR', 0, 0, 'CAAS', 0, 1, '0000-00-00', '00:00:00', '', 1),
(179, '5', '0', 'ANALISTA DE DESARROLLO', 0, 0, 'CAAS', 0, 103, '2025-03-02', '17:27:56', '181.115.171.207-181.115.171.207', 1),
(180, '6', '0', 'AUXILIAR DE DESARROLLO', 0, 0, 'CAAS', 0, 103, '2025-03-02', '17:30:19', '181.115.171.207-181.115.171.207', 1),
(181, '7', '0', 'AUXILIAR DE SOPORTE TéCNICO', 0, 0, 'CAAS', 0, 103, '2025-03-30', '15:32:11', '181.115.171.9-181.115.171.9', 1),
(182, '8', '0', 'ANALISTA DE SOPORTE TèCNICO', 0, 0, 'CAAS', 0, 103, '2025-03-30', '15:34:03', '181.115.171.9-181.115.171.9', 1),
(183, '9', '0', 'SUPERVISOR DE INFRAESTRUCTURA', 0, 0, 'CAAS', 0, 103, '2025-03-30', '15:36:28', '181.115.171.9-181.115.171.9', 0),
(184, '10', '0', 'ANALISTA DE PRODUCCION', 0, 0, 'CAAS', 0, 103, '2025-03-30', '15:37:13', '181.115.171.9-181.115.171.9', 1),
(185, '11', '0', 'AUXILIAR DE BASE DE DATOS', 0, 0, 'CAAS', 0, 103, '2025-03-30', '15:38:42', '181.115.171.9-181.115.171.9', 1),
(186, '12', '0', 'ANALISTA DE BASE DE DATOS', 0, 0, 'CAAS', 0, 103, '2025-03-30', '15:40:27', '181.115.171.9-181.115.171.9', 1),
(187, '13', '0', 'USUARIO', 0, 0, 'CAAS', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(188, '1', '0', 'ACTIVO', 0, 0, 'ESTAREDES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(189, '2', '0', 'MANTENIMIENTO', 0, 0, 'ESTAREDES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(190, '1', '0', 'ACTIVO', 0, 0, 'ESTAINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(191, '2', '0', 'DESACTIVO', 0, 0, 'ESTAINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(192, '1', '0', 'MENSUAL', 0, 0, 'MANTEINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(193, '2', '0', 'BIMESTRAL', 0, 0, 'MANTEINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(194, '3', '0', 'TRIMESTRAL', 0, 0, 'MANTEINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(195, '4', '0', 'SEMESTRAL', 0, 0, 'MANTEINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(196, '5', '0', 'ANUAL', 0, 0, 'MANTEINFRAES', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(197, '1', '0', 'ACTIVO', 0, 0, 'ESTAVIRTUAL', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(198, '2', '0', 'DETENIDO', 0, 0, 'ESTAVIRTUAL', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(199, '1', '0', 'ACTIVO', 0, 0, 'ESTALICEN', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(200, '2', '0', 'NO ACTIVO', 0, 0, 'ESTALICEN', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(201, '1', '0', 'SI', 0, 0, 'RENOAUTO', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(202, '2', '0', 'NO', 0, 0, 'RENOAUTO', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(204, '1', '0', 'ACTIVO', 0, 0, 'ESTAPERIFE', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(205, '2', '0', 'EN STOCK', 0, 0, 'ESTAPERIFE', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1),
(206, '3', '0', 'EN REPARACIÓN', 0, 0, 'ESTAPERIFE', 0, 103, '2025-08-18', '15:08:58', '181.115.207.102-181.115.207.102', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `idestado` int(11) unsigned NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `nombre`, `descripcion`, `tipo`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'PENDIENTE', 'En espera inicio de trabajo', 1, 1, 1, '0000-00-00', '00:00:00', '', 1),
(2, 'EN PRODUDCCION', 'En ejecución en pedido', 1, 1, 1, '0000-00-00', '00:00:00', '', 1),
(3, 'LISTO PARA ENTREGA', 'Etapa de Impresion', 1, 1, 1, '0000-00-00', '00:00:00', '', 1),
(4, 'ENTREGADO /FINALIZADO', 'Etapa de Acabdo final', 1, 1, 1, '0000-00-00', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `idfiles` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url_procedencia` varchar(255) DEFAULT NULL,
  `url_ubicacion` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `usuariocreacion` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL,
  `tipo_foto` varchar(255) DEFAULT NULL,
  `tipo_usuario` varchar(255) DEFAULT NULL,
  `id_publicacion` varchar(255) DEFAULT NULL,
  `principal` int(11) DEFAULT NULL,
  `activo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`idfiles`, `name`, `size`, `type`, `url_procedencia`, `url_ubicacion`, `title`, `description`, `usuariocreacion`, `fecha_creacion`, `hora_creacion`, `tipo_foto`, `tipo_usuario`, `id_publicacion`, `principal`, `activo`) VALUES
(14, 'gregorio 2.png', 640663, 'image/png', '', '/sistema/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2020-11-18', '08:45:57', 'foto', '1', '67', 1, 1),
(16, 'ELMER.png', 740123, 'image/png', '', '/sistema/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2020-11-18', '09:04:26', 'foto', '1', '69', 1, 1),
(17, 'candy.png', 720301, 'image/png', '', '/sistema/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2020-11-18', '09:06:50', 'foto', '1', '70', 1, 1),
(18, 'user.png', 12915, 'image/png', '', '/sistema_control/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2021-04-29', '15:47:09', 'foto', '1', '1', 1, 1),
(19, 'gratis-png-estudiante.png', 118902, 'image/png', '', '/sistema_control/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2021-05-18', '09:51:04', 'foto', '1', '180', 1, 1),
(21, 'PROOOO.jpg', 7687, 'image/jpeg', '', '/sistema_control/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2022-01-13', '13:21:29', 'foto', '1', '68', 1, 1),
(22, 'user_person_people_6100.png', 12745, 'image/png', '', '/elpoblao/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2022-12-03', '12:44:33', 'foto', '1', '215', 1, 1),
(23, 'fernet 750ml.jpg', 64077, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=92', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-04-26', '19:33:31', 'fotoItemInventarios', '1', '92', 1, 1),
(26, 'ronabuelo1litro.jpeg', 6625, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=94', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-16', '22:01:53', 'fotoItemInventarios', '1', '94', 1, 1),
(27, 'Tequila jose cuervo dorado.jpg', 34362, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=96', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-18', '13:53:53', 'fotoItemInventarios', '1', '96', 1, 1),
(28, 'jose cuervo blanco.jpg', 23380, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=97', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-18', '13:55:17', 'fotoItemInventarios', '1', '97', 1, 1),
(29, 'olmeca.jpeg', 4856, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=98', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-18', '13:59:52', 'fotoItemInventarios', '1', '98', 1, 1),
(30, 'mezcal.jpg', 43429, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=99', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-18', '14:03:23', 'fotoItemInventarios', '1', '99', 1, 1),
(31, 'CLG-2711098-1.jpg', 78632, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=100', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-18', '14:12:01', 'fotoItemInventarios', '1', '100', 1, 1),
(32, '1800 dorado.jpg', 66901, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=101', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-18', '14:14:18', 'fotoItemInventarios', '1', '101', 1, 1),
(33, 'corralejo reposado.png', 280553, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=102', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '00:44:57', 'fotoItemInventarios', '1', '102', 1, 1),
(34, 'corralejo quita penas.jpg', 25445, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=103', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '00:50:50', 'fotoItemInventarios', '1', '103', 1, 1),
(35, 'gran corralejo.jpg', 45191, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=104', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '00:52:07', 'fotoItemInventarios', '1', '104', 1, 1),
(38, 'vodka absolute.jpg', 25368, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=106', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '00:55:41', 'fotoItemInventarios', '1', '106', 1, 1),
(39, 'habana club.jpg', 19738, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=107', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '00:57:13', 'fotoItemInventarios', '1', '107', 1, 1),
(40, 'flor de cana.jpg', 39245, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=108', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '00:58:37', 'fotoItemInventarios', '1', '108', 1, 1),
(41, 'cerveza corona.jpg', 117763, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=109', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:03:37', 'fotoItemInventarios', '1', '109', 1, 1),
(42, 'flor de cana.png', 377330, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=110', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:07:08', 'fotoItemInventarios', '1', '110', 1, 1),
(43, 'habana.jpeg', 17235, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=111', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:09:32', 'fotoItemInventarios', '1', '111', 1, 1),
(44, 'fernet.jpeg', 8034, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=112', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:10:39', 'fotoItemInventarios', '1', '112', 1, 1),
(45, 'chuflay.jpg', 101891, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=113', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:11:12', 'fotoItemInventarios', '1', '113', 1, 1),
(46, 'vodka.jpg', 33197, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=114', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:12:29', 'fotoItemInventarios', '1', '114', 1, 1),
(47, 'shots.jpg', 107462, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=115', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:14:24', 'fotoItemInventarios', '1', '115', 1, 1),
(48, 'zumo de naranja.jpg', 72299, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=117', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:16:30', 'fotoItemInventarios', '1', '117', 1, 1),
(49, 'zumo de toronja.jpeg', 6972, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=118', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:17:33', 'fotoItemInventarios', '1', '118', 1, 1),
(50, 'agua.jpeg', 3994, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=119', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:20:18', 'fotoItemInventarios', '1', '119', 1, 1),
(51, 'cocacola500ml.png', 65572, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=120', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:36:49', 'fotoItemInventarios', '1', '120', 1, 1),
(52, 'fantanaranja500ml.png', 73769, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=121', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:37:43', 'fotoItemInventarios', '1', '121', 1, 1),
(53, 'sprite500ml.png', 61792, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=122', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '01:38:56', 'fotoItemInventarios', '1', '122', 1, 1),
(54, 'ronabuelo750ml.png', 135007, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=93', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '15:33:59', 'fotoItemInventarios', '1', '93', 1, 1),
(55, 'singanicasareal750ml.jpg', 88245, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=105', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '18:41:14', 'fotoItemInventarios', '1', '105', 1, 1),
(56, 'shots.jpg', 107462, 'image/jpeg', '/elpoblao/inventarios/item/editar/?lblcode=116', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '18:47:17', 'fotoItemInventarios', '1', '116', 1, 1),
(59, 'coca-cola2Litros.png', 48227, 'image/png', '/elpoblao/inventarios/item/editar/?lblcode=95', '/elpoblao/inventarios/item/editar/server/php/index.php', NULL, NULL, 103, '2023-06-19', '18:56:51', 'fotoItemInventarios', '1', '95', 1, 1),
(60, 'foto.png', 132107, 'image/png', '', '/ticviacha/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-02-02', '03:59:20', 'foto', '1', '251', 1, 1),
(61, 'foto rostro.png', 94907, 'image/png', '', '/ticviacha/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-02-02', '04:02:14', 'foto', '1', '224', 1, 1),
(62, 'esteban.png', 85838, 'image/png', '', '/ticviacha/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-02-02', '04:05:36', 'foto', '1', '221', 1, 1),
(63, 'JOVEN.png', 86085, 'image/png', '', '/ticviacha/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-02-02', '04:12:28', 'foto', '1', '252', 1, 1),
(65, 'foto.png', 388786, 'image/png', '', '/ticviacha/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-02-05', '02:30:43', 'foto', '1', '253', 1, 1),
(66, 'Teclado Mecanico.jpg', 62583, 'image/jpeg', '/helpdesk/inventarios/item/editar/?lblcode=bzZ2SXJMT3NlcWQvdDVTb2dxUFhvWUZsWU11TGY0UzVkWTdYckkyb3NKck9pSjI4MllOK3NxUEVzbkU9', '/helpdesk/inventarios/item/editar/server/php/index.php', '', '', 103, '2025-03-24', '13:40:24', 'fotoItemInventarios', '1', '32', 1, 1),
(67, 'mouse-inalambrico-logitech.jpg', 30407, 'image/jpeg', '/helpdesk/inventarios/item/editar/?lblcode=cTN1WGxhK2paNXlDcE4rbWhLbkpwNXlIWnRXRG00dlBvYVd0YVpESGk1L1dwTW1RcW94aWhhdXMwSEU9', '/helpdesk/inventarios/item/editar/server/php/index.php', 'Mouse Logitec', 'Mouse con adaptador', 103, '2025-04-11', '14:00:13', 'fotoItemInventarios', '1', '34', 1, 1),
(68, 'Monitor 20plg.jpg', 3130, 'image/jpeg', '/helpdesk/inventarios/item/editar/?lblcode=c0pmU202eWhuWUt5dWJ0N2Q1cmFyWHBwZjVHZHBXM2VnZGJmcEd1WnJZNjdkN3V0cWFPQXJJK01xbkU9', '/helpdesk/inventarios/item/editar/server/php/index.php', 'Monitor 20 plg', '', 103, '2025-04-11', '19:49:19', 'fotoItemInventarios', '1', '35', 1, 1),
(69, 'Teclado-Inalambrico.png', 66810, 'image/png', '/helpdesk/inventarios/item/editar/?lblcode=c1lHYzF0eWNZcDl2cDdpaWFLUE1iR21nZmNTamtKZStjOFhYczYzWmZacXZyOHE3enFXV3I0V215SEU9', '/helpdesk/inventarios/item/editar/server/php/index.php', 'Teclado Inalambrico', '', 103, '2025-04-11', '19:52:40', 'fotoItemInventarios', '1', '36', 1, 1),
(70, 'grover.png', 354362, 'image/png', '', '/helpdesk/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-04-12', '21:55:16', 'foto', '1', '256', 1, 1),
(71, 'cable de red 3mts.jpg', 3511, 'image/jpeg', '/helpdesk/inventarios/item/editar/?lblcode=dHBpbm1xeUhxSXF6MWRXcHFZM0paWVo0ZXRObG4yVzdnTkRSZTdESWlLN0daN2FjeW8raFo1KzR6SEU9', '/helpdesk/inventarios/item/editar/server/php/index.php', 'Cable de 3 mts', 'Cable de red', 103, '2025-04-13', '04:11:32', 'fotoItemInventarios', '1', '37', 1, 1),
(72, 'CORTAPICO-FORZA-DE-3mts.jpg', 67145, 'image/jpeg', '/helpdesk/inventarios/item/editar/?lblcode=MHFtczE4eU9lcEYvdU5wOFk1ak1yWk50YXBGb2Y0SzNZYWUzaDV2VWFYNjdmOW1tczZSbG9MUER2bkU9', '/helpdesk/inventarios/item/editar/server/php/index.php', 'CORTA PICO DE 3 MTS', '', 103, '2025-04-14', '22:27:13', 'fotoItemInventarios', '1', '38', 1, 1),
(73, 'Perfil.jpg', 50715, 'image/jpeg', '', '/helpdesk/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-04-15', '00:22:02', 'foto', '1', '257', 1, 1),
(74, 'Gvelez.jpg', 42702, 'image/jpeg', '', '/helpdesk/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-05-01', '03:01:43', 'foto', '1', '258', 1, 1),
(75, 'HP_LAPTOP_NEGRA.jpg', 12993, 'image/jpeg', '/helpdesk/inventarios/item/editar/?lblcode=eFhhZDNicVpnbm1za2JaM2ZJUEpmSEd1ZXRTcmI0dldvdDJxaW8rcnJLUzNvN3ZLMldhcmdZcmFzbkU9', '/helpdesk/inventarios/item/editar/server/php/index.php', 'LAPTOP HP-NEGRA', 'Almacenamiento 256GB Unidad de estado sólido (SSD PCIe® NVMe™ M.2)', 103, '2025-07-31', '13:33:34', 'fotoItemInventarios', '1', '33', 1, 1),
(76, 'svargas.jpg', 77913, 'image/jpeg', '', '/helpdesk/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-08-18', '19:05:13', 'foto', '1', '259', 1, 1),
(77, 'Logo_Grupo_Imagen_Multimedia.2016.png', 46128, 'image/png', '/helpdesk/ticket/editar/index2.php?lblcode=bW8zWDBNK0FuM0NFbDkxcG81VEFYcFNzZjgrZmJJSExmOUducnFuSWlKdXRwcXk2czVDaG9IS1gwSEU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-08-30', '19:39:02', 'fotoSolicitudTicket', '1', '53', 1, 1),
(78, 'computadora.jpg', 155723, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=bHF2ZXFLOThoNCtMMjVxaWFhVGRqS09YbkpWdG5tYXpsdE94b0dQUXJuQzdiTEdZcTRoOW82WExzbkU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-08-30', '20:13:29', 'fotoSolicitudTicket', '1', '57', 1, 1),
(79, 'powermac_desarmada3.jpg', 101130, 'image/jpeg', '/helpdesk/ticket/solicitudes/misolicitud/fotografia_2.php?lblcode=bHF2ZXFLOThoNCtMMjVxaWFhVGRqS09YbkpWdG5tYXpsdE94b0dQUXJuQzdiTEdZcTRoOW82WExzbkU9&lblcode2=cTN1WGxhK2paNXlDcE4rbWhLbkpwNXlIWnRXRG00dlBvYVd0YVpESGk1L1dwTW1RcW94aWhhdXMwSEU9&lblcode3=dG9uTXFzV', '/helpdesk/ticket/solicitudes/misolicitud/server/php/index.php', '', '', 103, '2025-08-30', '21:29:58', 'fotoSolucionDetalle', '1', '44', 1, 1),
(80, 'descarga.jfif', 9211, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=MEc2cXZzaXBYbnFLek0rRHFxVFdocFdoZDZWcWpLZk9nYkxQb2FQTmZLYlBxYnlkeW91Y2FtcldwbkU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-09-05', '03:26:54', 'fotoSolicitudTicket', '1', '1061', 1, 1),
(81, 'teclado.jpg', 10915, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=azJ6YmxicHNhcDJUMTdDY2ZZcXRlb2Vxa3ROcm82bXVvcVd6cllUSGVuMjhhcHJhMXFpTXFvSEZwbkU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-09-05', '03:29:12', 'fotoSolicitudTicket', '1', '1062', 1, 1),
(82, 'puntodered.jfif', 6077, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=c0hxejJaeDhZcVdteHJTa25WN1FlWmFmZ0t0bmFXU3JnN2V4aElTbGVxYXNpNVNybElobm1yRzYwSEU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-09-05', '03:30:48', 'fotoSolicitudTicket', '1', '1063', 1, 1),
(83, 'cortapico.jpg', 67145, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=Mlp6VHZLV2NkSUtmcVo2RGdwYmJmSlJoZk51Rm9KMjVmTGE0bnFXN2pZWEphYWFhczJwaWdLRzZzbkU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-09-05', '03:32:38', 'fotoSolicitudTicket', '1', '1064', 1, 1),
(84, 'progconta.jpeg', 48140, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=dEtxdnpzNXVqR3RzMU11cW1LVE1xbnFyb3NhdGhhaXRmNXJnaUpMUXNLKzBtTHlxcFdocWpuNmxuWEU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-09-05', '03:34:55', 'fotoSolicitudTicket', '1', '1065', 1, 1),
(85, 'perez.jfif', 4774, 'image/jpeg', '', '/helpdesk/persona/editar/server/php/index.php', NULL, 'foto ejecutivo', 0, '2025-09-05', '03:38:25', 'foto', '1', '261', 1, 1),
(87, 'punto.jpg', 4082, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=a1phMTJxWnBxbkdUMDVCanBYektpNGFNZ05td282QzRkSmFxbzU3VGlxT1VqSjJWM0dscW81R3VuWEU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 185, '2025-09-05', '19:08:52', 'fotoSolicitudTicket', '1', '1069', 1, 1),
(88, 'puntodered.jfif', 6077, 'image/jpeg', '/helpdesk/ticket/editar/?lblcode=eHBpY3ZLV09hWHVFeDdLcG9ZdktsNENJYXBWb3FXelVxS2JlanJEVmZtdVhpN0RmekgrS2hhM1N0bkU9', '/helpdesk/ticket/editar/server/php/index.php', '', '', 103, '2025-09-05', '21:26:18', 'fotoSolicitudTicket', '1', '1071', 1, 1),
(89, 'cortapico.jpg', 67145, 'image/jpeg', '/helpdesk/ticket/solicitudes/misolicitud/fotografia.php?lblcode=eHBpY3ZLV09hWHVFeDdLcG9ZdktsNENJYXBWb3FXelVxS2JlanJEVmZtdVhpN0RmekgrS2hhM1N0bkU9&lblcode2=MHFtczE4eU9lcEYvdU5wOFk1ak1yWk50YXBGb2Y0SzNZYWUzaDV2VWFYNjdmOW1tczZSbG9MUER2bkU9&lblcode3=dkd1NW1zWnZ', '/helpdesk/ticket/solicitudes/misolicitud/server/php/index.php', '', '', 103, '2025-09-05', '21:29:14', 'fotoSolucionDetalle', '1', '50', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gravedad`
--

CREATE TABLE IF NOT EXISTS `gravedad` (
  `idgravedad` int(11) unsigned NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gravedad`
--

INSERT INTO `gravedad` (`idgravedad`, `nombre`, `descripcion`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'MENOR', 'Contingencia de menor gravedad', 1, 103, '0000-00-00', '00:00:00', '', 1),
(2, 'GRAVE', 'Contingencia de gravedad', 1, 103, '0000-00-00', '00:00:00', '', 1),
(3, 'CRÍTICA', 'Contingencia crítica', 1, 103, '0000-00-00', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraestructura`
--

CREATE TABLE IF NOT EXISTS `infraestructura` (
  `idinfraestructura` int(11) unsigned NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `compomente` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `ubicacionfisica` varchar(200) NOT NULL,
  `ubicionlogica` varchar(100) NOT NULL,
  `ipdirewall` varchar(100) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `fechainstalacion` date NOT NULL,
  `mantenimiento` int(11) NOT NULL,
  `documentacion` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infraestructura`
--

INSERT INTO `infraestructura` (`idinfraestructura`, `codigo`, `compomente`, `tipo`, `modelo`, `ubicacionfisica`, `ubicionlogica`, `ipdirewall`, `responsable`, `estado`, `fechainstalacion`, `mantenimiento`, `documentacion`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'INF-001', 'Rack Principal', 'Rack 42U', 'APC Netshelter SX 42U', 'Data Center, Sala A', 'N/A', 'N/A', 'IT Operations', 190, '2022-03-15', 193, 'Diagrama Rack-01', 103, '2025-08-31', '06:50:35', '181.188.170.184-181.188.170.184', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `idinventario` int(10) unsigned NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `idumedida` int(11) NOT NULL,
  `fabricante` varchar(200) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `minimo` int(11) NOT NULL COMMENT 'cantidad',
  `maximo` int(11) NOT NULL COMMENT 'cantidad',
  `descripcion` varchar(100) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(300) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idinventario`, `nombre`, `idmarca`, `idumedida`, `fabricante`, `modelo`, `minimo`, `maximo`, `descripcion`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(34, 'MOUSE INALAMBRICO', 9, 1, '', '', 10, 0, 'Mouse exclusivo para Gerencia y Directorio', 103, '2025-04-11', '09:56:30', '177.222.113.92-177.222.113.92', 1),
(35, 'MONITOR 20 PULG', 10, 1, '', '', 20, 0, 'Monitores para PC´s de escritorio.', 103, '2025-04-11', '15:48:11', '177.222.113.92-177.222.113.92', 1),
(36, 'TECLADO INALAMBRICO', 11, 1, '', '', 35, 0, 'Teclados inalambricos', 103, '2025-04-11', '15:50:38', '177.222.113.92-177.222.113.92', 1),
(37, 'CABLE DE RED DE 3 MTS', 2, 1, '', '', 5, 0, 'Cable de red de 3 mts', 103, '2025-04-13', '00:08:42', '177.222.113.92-177.222.113.92', 1),
(38, 'CORTA PICO DE 3 MTS', 2, 1, '', '', 30, 0, '', 103, '2025-04-14', '18:26:02', '177.222.113.92-177.222.113.92', 1),
(39, 'CABLE HDMI', 2, 1, '', '', 5, 0, 'Cables hdmi', 103, '2025-04-26', '00:18:54', '177.222.113.162-177.222.113.162', 1),
(32, 'TECLADO MECANICO', 5, 1, '', '', 80, 0, 'Teclado para pcs', 103, '2025-03-24', '09:39:06', '131.0.196.119-SCZ-131-0-196-00119.tigo.bo', 1),
(33, 'LAPTOP HP', 8, 1, '', '', 5, 0, 'Pantalla: 15,6 Pantalla HD (1366 x 768), en diagonal, BrightView, con microbordes, 250 nits y 45 %', 103, '2025-03-24', '09:44:13', '131.0.196.119-SCZ-131-0-196-00119.tigo.bo', 1),
(40, 'HDMI', 12, 1, '', '', 1, 0, 'HDMI CABLE NEGRO', 103, '2025-08-18', '12:31:10', '181.115.207.102-181.115.207.102', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_almacen`
--

CREATE TABLE IF NOT EXISTS `inventario_almacen` (
  `idinventario_almacen` int(11) unsigned NOT NULL,
  `idalmacen` int(11) NOT NULL,
  `idinventario` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `lote` int(11) NOT NULL,
  `cantidad_maxima` int(11) NOT NULL DEFAULT '200000',
  `cantidad_minima` int(11) NOT NULL DEFAULT '99',
  `existencias` int(11) NOT NULL,
  `precio_compraU` float(12,2) DEFAULT NULL,
  `precio_ventaU` float DEFAULT NULL,
  `fechaingreso` date NOT NULL,
  `fechavalidad` date NOT NULL,
  `tiempovida` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(500) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario_almacen`
--

INSERT INTO `inventario_almacen` (`idinventario_almacen`, `idalmacen`, `idinventario`, `idproveedor`, `lote`, `cantidad_maxima`, `cantidad_minima`, `existencias`, `precio_compraU`, `precio_ventaU`, `fechaingreso`, `fechavalidad`, `tiempovida`, `descripcion`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(24, 2, 33, 1, 1, 100000000, 5, 16, NULL, NULL, '2025-03-25', '2025-04-30', '', ' de dqw dqwd qwd ', 103, '2025-03-31', '22:04:45', '131.0.196.153-SCZ-131-0-196-00153.tigo.bo', 1),
(25, 1, 33, 1, 1, 100000000, 5, 0, NULL, NULL, '2025-04-25', '2026-08-08', '', 'Se realizo la compra de un  laptop', 103, '2025-04-08', '11:41:22', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(26, 1, 33, 1, 2, 100000000, 5, 0, NULL, NULL, '2025-04-25', '2026-04-08', '', 'COMPRA DE LAPTOPS CON LA SEGUINETES CARACTERISTICAS', 103, '2025-04-08', '11:42:15', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(27, 1, 34, 1, 1, 100000000, 5, 34, NULL, NULL, '2025-04-25', '2025-04-12', '', '', 103, '2025-04-12', '17:42:36', '177.222.113.92-177.222.113.92', 1),
(28, 1, 33, 1, 3, 100000000, 5, 0, NULL, NULL, '2025-04-25', '2026-07-12', '', '', 103, '2025-04-12', '17:43:05', '177.222.113.92-177.222.113.92', 1),
(29, 1, 35, 2, 1, 100000000, 5, 60, NULL, NULL, '2025-04-25', '2027-06-12', '', '', 103, '2025-04-12', '17:43:35', '177.222.113.92-177.222.113.92', 1),
(30, 1, 36, 1, 1, 100000000, 5, 49, NULL, NULL, '2025-04-25', '2029-06-12', '', '', 103, '2025-04-12', '17:44:09', '177.222.113.92-177.222.113.92', 1),
(31, 1, 37, 1, 1, 100000000, 5, 53, NULL, NULL, '2025-04-25', '2026-05-13', '', '', 103, '2025-04-13', '00:12:46', '177.222.113.92-177.222.113.92', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE IF NOT EXISTS `licencia` (
  `idlicencia` int(11) unsigned NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `software` varchar(100) NOT NULL,
  `tipolicencia` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `proveedor` varchar(200) NOT NULL,
  `fechaadquicicion` date NOT NULL,
  `fechaexpiracion` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `asignado` varchar(200) NOT NULL,
  `costo` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `renovacion` int(11) NOT NULL,
  `notas` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `licencia`
--

INSERT INTO `licencia` (`idlicencia`, `codigo`, `software`, `tipolicencia`, `clave`, `proveedor`, `fechaadquicicion`, `fechaexpiracion`, `cantidad`, `asignado`, `costo`, `estado`, `renovacion`, `notas`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'LIC-001', 'Windows Server 2022', 'Volume License (CAL)', '12345-67890-ABCDE', 'Microsoft', '2025-03-15', '2026-03-15', 50, 'IT Infrastructure', '$12,000', 199, 201, 'Incluye Software Assurance', 103, '2025-09-01', '15:39:44', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(2, 'LIC-002', 'MS-OFFICE', 'Perpetua', 'ABC-123-XYZ-456', 'Microsoft', '2022-05-10', '0000-00-00', 5, 'Sistemas', '450 $', 199, 0, 'Licencia para 5 usuarios de Office 2021.', 103, '2025-09-05', '12:42:50', '177.222.112.197-177.222.112.197', 1),
(3, 'LIC-003', 'AUTOCAD', 'Suscripción', 'JKL-345-MNO-678', 'Autodesk', '2023-08-20', '2024-08-20', 1, 'Sistemas', '$1,800.00/año', 199, 202, 'Licencia para un solo puesto de trabajo.', 103, '2025-09-05', '12:45:03', '177.222.112.197-177.222.112.197', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE IF NOT EXISTS `mantenimiento` (
  `idmantenimiento` int(11) unsigned NOT NULL,
  `idmovimiento` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `horainicio` time NOT NULL,
  `estado` int(11) NOT NULL COMMENT '1=en matenimiento 2=completado 4=baja',
  `descripcioinicio` varchar(600) NOT NULL,
  `fechafin` date NOT NULL,
  `horafin` time NOT NULL,
  `descripcionfin` varchar(600) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `idmarca` int(11) unsigned NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `tipo` int(11) NOT NULL COMMENT '0=repuestos 1=maquinaria',
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(500) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `nombre`, `descripcion`, `tipo`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'ASUS', '', 0, 0, 103, '2023-12-06', '15:17:51', '131.0.199.36-SCZ-131-0-199-00036.tigo.bo', 1),
(2, 'OTROS', '', 0, 0, 103, '2023-12-06', '15:37:02', '131.0.199.36-SCZ-131-0-199-00036.tigo.bo', 1),
(3, 'S/N', '', 0, 0, 103, '2024-01-30', '23:26:00', '45.183.187.217-45.183.187.217', 1),
(8, 'HP', 'LAPTOP PARA VIAJES DE LOS USUARIOS', 0, 0, 103, '2025-03-24', '09:43:57', '131.0.196.119-SCZ-131-0-196-00119.tigo.bo', 1),
(9, 'LOGITEC', 'ULTIMA GENARACION', 0, 0, 103, '2025-04-11', '09:56:00', '177.222.113.92-177.222.113.92', 1),
(10, 'LG', '', 0, 0, 103, '2025-04-11', '15:47:44', '177.222.113.92-177.222.113.92', 1),
(11, 'TECLADO HP - INALAMBRICO', 'TECLADO HP - INALAMBRICO', 0, 0, 103, '2025-04-11', '15:52:17', '177.222.113.92-177.222.113.92', 1),
(12, 'TOMATE', '', 0, 0, 103, '2025-08-18', '12:30:56', '181.115.207.102-181.115.207.102', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(10) unsigned NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `padre` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `idmodulo` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1140 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idmenu`, `nombre`, `url`, `icon`, `padre`, `orden`, `idmodulo`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'CONFIGURACION', 'layout-fullscreen.html', 'cog', 0, 1, 1, 1, '0000-00-00', '00:00:00', '', 1),
(2, 'Roles', 'superadmin/configuracion/rol', '', 1, 0, 1, 1, '0000-00-00', '00:00:00', '', 1),
(1000, 'Inicio', 'inicio', '', 0, 0, 0, 1, '0000-00-00', '00:00:00', '', 1),
(11, 'Usuario nuevo', 'administrativo/ejecutivo/', '', 1, 0, 3, 1, '0000-00-00', '00:00:00', '', 0),
(12, 'Usuarios', 'administrativo/ejecutivo/', '', 1, 0, 3, 1, '0000-00-00', '00:00:00', '', 0),
(1040, 'TIPO', 'tipo', 'gears (alias)', 0, 4, 3, 1, '2018-08-14', '00:00:00', '', 1),
(1041, 'Nuevo', 'tipo/nuevo', '', 1040, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(80, 'Mi Cuenta', 'administracion/micuenta/', '', 1, 0, 1, 1, '0000-00-00', '00:00:00', '', 1),
(1042, 'listar', 'tipo/', '', 1040, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1035, 'PERSONAL', 'administrativo/', 'user', 0, 2, 3, 1, '2018-08-14', '00:00:00', '', 1),
(1036, 'Nuevo Personal', '', '', 1035, 0, 33, 1, '0000-00-00', '00:00:00', '', 0),
(1037, 'Administrar', 'administrativo/ejecutivo/', '', 1035, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1060, 'REPORTES', '', 'clipboard', 0, 18, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1113, 'Control de actividades', 'reportes/actividad/index.php', '', 1060, 0, 5, 1, '0000-00-00', '00:00:00', '', 0),
(1109, 'AREA', 'area/', 'building-o', 0, 3, 3, 103, '2024-08-14', '00:00:00', '', 1),
(1110, 'Listar', 'area/', '', 1109, 0, 3, 103, '0000-00-00', '00:00:00', '', 1),
(1105, 'TICKETS', 'ticket/', 'cubes', 0, 8, 3, 1, '2024-08-14', '00:00:00', '', 1),
(1114, 'Solicitudes', 'reportes/solicitudes/', '', 1060, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1112, 'Lista de usuarios', 'reportes/usuarios/', '', 1060, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1115, 'Nueva solicitud', 'ticket/nuevo/', '', 1105, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1108, 'Nuevo', 'area/nuevo/', '', 1109, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1121, 'Stock', 'almacen/admin', '', 1118, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1116, 'Lista de solicitud', 'ticket/', '', 1105, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1117, 'Designar solicitudes', 'ticket/solicitudes/', '', 1105, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1118, 'INVENTARIOS', 'inventario/', 'list-ul', 0, 12, 3, 1, '2024-08-14', '00:00:00', '', 1),
(1119, 'Almacen', 'almacen/', '', 1118, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1120, 'Item', 'inventarios/item', '', 1118, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1122, 'Asignar item', 'inventarios/asignacion/almacen.php', '', 1118, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1123, 'Items Asigandos', 'inventarios/asignados/', '', 1118, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1124, 'Estadísticos', 'reportes/estadisticos/', '', 1060, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1125, 'Mi Solicitud', 'ticket/solicitudes/misolicitud/', '', 1105, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1126, 'Aprobación', 'ticket/comprobacion/', '', 1105, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1127, 'PROVEEDOR', 'proveedor/', 'th', 0, 6, 3, 103, '2024-08-14', '00:00:00', '', 1),
(1128, 'Listar', 'proveedor/listar/', '', 1127, 0, 3, 1, '0000-00-00', '00:00:00', '', 1),
(1129, 'INFORMACIÓN', 'datos/', 'list-alt', 0, 14, 6, 1, '2024-08-14', '00:00:00', '', 1),
(1130, 'Software', 'datos/software/', '', 1129, 0, 6, 1, '0000-00-00', '00:00:00', '', 1),
(1131, 'Redes', 'datos/redes/', '', 1129, 0, 6, 1, '0000-00-00', '00:00:00', '', 1),
(1132, 'Infraestuctura', 'datos/infraestructura/', '', 1129, 0, 6, 1, '0000-00-00', '00:00:00', '', 1),
(1133, 'Cloud Y Virtualización', 'datos/virtualizacion/', '', 1129, 0, 6, 1, '0000-00-00', '00:00:00', '', 1),
(1134, 'Licencias', 'datos/licencias/', '', 1129, 0, 6, 1, '0000-00-00', '00:00:00', '', 1),
(1135, 'Perifericos', 'datos/perifericos/', '', 1129, 0, 6, 1, '0000-00-00', '00:00:00', '', 1),
(1136, 'Items asignados', 'reportes/asignados/', '', 1060, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1137, 'MIS ITEMS', 'inventarios/misitems/', 'list-ol', 0, 15, 6, 1, '2025-08-14', '00:00:00', '', 1),
(1138, 'listar', 'inventarios/misitems/', '', 1137, 0, 5, 1, '0000-00-00', '00:00:00', '', 1),
(1139, 'Stock del almacen', 'reportes/stock/', '', 1060, 0, 5, 1, '0000-00-00', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miempresa`
--

CREATE TABLE IF NOT EXISTS `miempresa` (
  `idmiempresa` int(10) unsigned NOT NULL,
  `nombre` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `miempresa`
--

INSERT INTO `miempresa` (`idmiempresa`, `nombre`, `direccion`, `telefono`, `nit`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'EL POBLAO', '', '', '100001', 1, 0, '0000-00-00', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE IF NOT EXISTS `movimiento` (
  `idmovimiento` int(10) unsigned NOT NULL,
  `tipomov` varchar(300) NOT NULL COMMENT '1=ingreso 2=egreso 3=asignacion',
  `idinventario` int(11) NOT NULL,
  `idalmacen` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `cantidadinventario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciocompraU` float NOT NULL,
  `preciototal` float NOT NULL,
  `lote` int(11) NOT NULL,
  `idtransaccion` int(11) NOT NULL COMMENT 'idinventario_almacen',
  `fechaingreso` date NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `motivo` int(11) NOT NULL COMMENT '1=correccion 2=perdido 3=asignacion',
  `idadmejecutivo` int(11) NOT NULL COMMENT 'responsable',
  `descripcionasig` varchar(400) NOT NULL,
  `estadoasignacion` int(11) NOT NULL COMMENT '1=asignado 2=desasignado 3=mantenimiento 4=baja',
  `estado` varchar(100) NOT NULL,
  `fechamantenimiento` date NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(500) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`idmovimiento`, `tipomov`, `idinventario`, `idalmacen`, `idproveedor`, `cantidadinventario`, `cantidad`, `preciocompraU`, `preciototal`, `lote`, `idtransaccion`, `fechaingreso`, `descripcion`, `motivo`, `idadmejecutivo`, `descripcionasig`, `estadoasignacion`, `estado`, `fechamantenimiento`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(117, '1', 33, 2, 1, 0, 20, 0, 0, 1, 24, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-03-31', '22:04:45', '131.0.196.153-SCZ-131-0-196-00153.tigo.bo', 1),
(118, '3', 33, 2, 1, 0, 2, 0, 0, 1, 24, '2025-03-31', 'ASIGNACION', 3, 189, '', 1, '', '2025-03-31', 103, '2025-03-31', '22:06:12', '131.0.196.153-SCZ-131-0-196-00153.tigo.bo', 1),
(119, '1', 33, 1, 1, 0, 1, 0, 0, 1, 25, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-04-08', '11:41:22', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(120, '1', 33, 1, 1, 0, 5, 0, 0, 2, 26, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-04-08', '11:42:15', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(121, '3', 33, 1, 1, 0, 1, 0, 0, 1, 25, '2025-04-08', 'ASIGNACION', 3, 225, '', 1, '', '2025-04-08', 103, '2025-04-08', '11:44:40', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(122, '3', 33, 1, 1, 0, 1, 0, 0, 2, 26, '2025-04-08', 'ASIGNACION', 3, 227, '', 1, '', '2025-04-08', 103, '2025-04-08', '18:11:18', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(123, '3', 33, 1, 1, 0, 1, 0, 0, 2, 26, '2025-04-10', 'ASIGNACION', 3, 228, '', 1, '', '2025-04-10', 103, '2025-04-10', '16:30:43', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(124, '3', 33, 2, 1, 0, 1, 0, 0, 1, 24, '2025-04-11', 'ASIGNACION', 3, 134, '', 1, '', '2025-04-11', 103, '2025-04-11', '15:53:24', '177.222.113.92-177.222.113.92', 1),
(125, '1', 34, 1, 1, 0, 50, 0, 0, 1, 27, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-04-12', '17:42:36', '177.222.113.92-177.222.113.92', 1),
(126, '1', 33, 1, 1, 0, 10, 0, 0, 3, 28, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-04-12', '17:43:06', '177.222.113.92-177.222.113.92', 1),
(127, '1', 35, 1, 2, 0, 60, 0, 0, 1, 29, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-04-12', '17:43:35', '177.222.113.92-177.222.113.92', 1),
(128, '1', 36, 1, 1, 0, 50, 0, 0, 1, 30, '2025-03-25', 'INGRESO', 0, 0, '', 0, '', '2025-03-25', 103, '2025-04-12', '17:44:09', '177.222.113.92-177.222.113.92', 1),
(129, '2', 33, 1, 1, 0, 1, 0, 0, 2, 26, '2025-04-12', 'EGRESO', 1, 0, '', 0, '', '2025-04-12', 103, '2025-04-12', '17:44:50', '177.222.113.92-177.222.113.92', 1),
(130, '3', 33, 1, 1, 0, 1, 0, 0, 3, 28, '2025-04-12', 'ASIGNACION', 3, 134, 'Laptops designados para directorio', 1, '', '2025-04-12', 103, '2025-04-12', '17:46:35', '177.222.113.92-177.222.113.92', 1),
(131, '3', 34, 1, 1, 0, 1, 0, 0, 1, 27, '2025-04-12', 'ASIGNACION', 3, 134, 'para cambio de los mouse antiguos', 1, '', '2025-04-12', 103, '2025-04-12', '21:44:12', '177.222.113.92-177.222.113.92', 1),
(132, '1', 37, 1, 1, 0, 60, 0, 0, 1, 31, '2025-04-25', 'INGRESO', 0, 0, '', 0, '', '2025-04-25', 103, '2025-04-13', '00:12:46', '177.222.113.92-177.222.113.92', 1),
(133, '2', 37, 1, 1, 0, 5, 0, 0, 1, 31, '2025-04-13', 'EGRESO', 3, 0, '', 0, '', '2025-04-13', 103, '2025-04-13', '00:13:25', '177.222.113.92-177.222.113.92', 1),
(134, '3', 33, 2, 1, 0, 1, 0, 0, 1, 24, '2025-04-13', 'ASIGNACION', 3, 186, 'Uso diario', 1, '', '2025-04-13', 103, '2025-04-13', '00:15:54', '177.222.113.92-177.222.113.92', 1),
(135, '3', 37, 1, 1, 0, 1, 0, 0, 1, 31, '2025-04-16', 'ASIGNACION', 3, 230, '', 1, '', '2025-04-16', 103, '2025-04-16', '09:55:39', '177.222.113.92-177.222.113.92', 1),
(136, '3', 37, 1, 1, 0, 1, 0, 0, 1, 31, '2025-04-25', 'ASIGNACION', 3, 134, '', 1, '', '2025-04-25', 103, '2025-04-25', '20:40:54', '177.222.113.162-177.222.113.162', 1),
(137, '3', 33, 1, 1, 0, 1, 0, 0, 2, 26, '2025-04-26', 'ASIGNACION', 3, 134, '', 1, '', '2025-04-26', 103, '2025-04-26', '00:20:17', '177.222.113.162-177.222.113.162', 1),
(138, '3', 34, 1, 1, 0, 1, 0, 0, 1, 27, '2025-04-30', 'ASIGNACION', 3, 134, '', 1, '', '2025-04-30', 103, '2025-04-30', '22:23:22', '177.222.113.250-177.222.113.250', 1),
(139, '2', 33, 1, 1, 0, 1, 0, 0, 2, 26, '2025-08-18', 'EGRESO', 3, 0, '', 0, '', '0000-00-00', 103, '2025-08-18', '14:11:45', '181.115.207.102-181.115.207.102', 1),
(140, '3', 34, 1, 1, 0, 1, 0, 0, 1, 27, '2025-08-18', 'ASIGNACION', 3, 134, 'PARA REUNIONES', 1, '', '2025-08-18', 103, '2025-08-18', '14:13:15', '181.115.207.102-181.115.207.102', 1),
(141, '3', 36, 1, 1, 0, 1, 0, 0, 1, 30, '2025-08-18', 'ASIGNACION', 3, 230, 'PARA EXPOSICIÓN ', 1, '', '2025-08-18', 103, '2025-08-18', '14:13:42', '181.115.207.102-181.115.207.102', 1),
(142, '2', 34, 1, 1, 0, 10, 0, 0, 1, 27, '2025-08-20', 'EGRESO', 1, 0, '', 0, '', '0000-00-00', 103, '2025-08-20', '22:17:59', '177.222.112.247-177.222.112.247', 1),
(143, '3', 34, 1, 1, 0, 1, 0, 0, 1, 27, '2025-09-05', 'ASIGNACION', 3, 134, '', 1, '', '2025-09-05', 103, '2025-09-05', '17:30:47', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1),
(144, '3', 34, 1, 1, 0, 1, 0, 0, 1, 27, '2025-09-09', 'ASIGNACION', 3, 227, '', 1, '', '2025-09-09', 103, '2025-09-09', '15:31:30', '::1-DESKTOP-NO2PLAC', 1),
(145, '3', 34, 1, 1, 0, 1, 0, 0, 1, 27, '2025-09-10', 'ASIGNACION', 3, 134, '', 1, '', '2025-09-10', 103, '2025-09-10', '20:47:15', '::1-DESKTOP-NO2PLAC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nrolote`
--

CREATE TABLE IF NOT EXISTS `nrolote` (
  `idnrolote` int(11) unsigned NOT NULL,
  `idalmacen` int(11) NOT NULL,
  `idinventario` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nrolote`
--

INSERT INTO `nrolote` (`idnrolote`, `idalmacen`, `idinventario`, `nro`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(9, 2, 33, 1, 0, 103, '2025-03-31', '22:04:45', '131.0.196.153-SCZ-131-0-196-00153.tigo.bo', 1),
(10, 1, 33, 3, 0, 103, '2025-04-08', '11:41:22', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(11, 1, 34, 1, 0, 103, '2025-04-12', '17:42:36', '177.222.113.92-177.222.113.92', 1),
(12, 1, 35, 1, 0, 103, '2025-04-12', '17:43:35', '177.222.113.92-177.222.113.92', 1),
(13, 1, 36, 1, 0, 103, '2025-04-12', '17:44:08', '177.222.113.92-177.222.113.92', 1),
(14, 1, 37, 1, 0, 103, '2025-04-13', '00:12:45', '177.222.113.92-177.222.113.92', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periferico`
--

CREATE TABLE IF NOT EXISTS `periferico` (
  `idperiferico` int(11) unsigned NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `nroserie` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `fechaadquisicion` date NOT NULL,
  `asignado` varchar(100) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `conectado` varchar(200) NOT NULL,
  `fechagarantia` date NOT NULL,
  `notas` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periferico`
--

INSERT INTO `periferico` (`idperiferico`, `codigo`, `tipo`, `modelo`, `nroserie`, `marca`, `fechaadquisicion`, `asignado`, `ubicacion`, `estado`, `conectado`, `fechagarantia`, `notas`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'PER-001', 'Monitor', 'Dell UltraSharp U2723QE', 'CN-12345678-XY', 'Dell', '2025-03-15', 'María Gómez (Finanzas)', 'Piso 3, Oficina 302', 204, 'WS-045 (HP EliteDesk)', '2025-03-15', 'Resolución 4K, USB-C', 103, '2025-09-01', '17:57:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `idpersona` int(10) unsigned NOT NULL,
  `carnet` varchar(500) NOT NULL,
  `expedido` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `email` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idsexo` int(11) NOT NULL,
  `idcivil` int(11) NOT NULL,
  `tipopersona` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(500) NOT NULL,
  `verificado` int(11) NOT NULL COMMENT '0=no 1=si',
  `fechaverificado` date NOT NULL,
  `horaverificado` time NOT NULL,
  `fechaactualizado` date NOT NULL,
  `userverificado` int(11) NOT NULL,
  `idadmejecutivo` int(11) NOT NULL,
  `estado` int(11) NOT NULL COMMENT '0=aprobado 1=pendiente 2=rechasado',
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(500) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=270 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `carnet`, `expedido`, `nombre`, `paterno`, `materno`, `nacimiento`, `email`, `celular`, `idsexo`, `idcivil`, `tipopersona`, `ocupacion`, `verificado`, `fechaverificado`, `horaverificado`, `fechaactualizado`, `userverificado`, `idadmejecutivo`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(0, '1001', 'LP', 'SUPER ADMIN', '', '', '1988-01-20', '', '0', 1, 0, '', 'DESARROLLADOR DE SISTEMAS', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 5, '2018-05-30', '12:24:22', '200.105.162.186-static-200-105-162-186.acelerate.net', 1),
(1, '4862335', 'LP', 'VICTOR HUGO', 'SEJAS', 'BURGOA', '1988-05-15', 'victorhugo@gmail.com', '', 1, 0, 'ADMIN', 'SISTEMAS', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 1, '2020-07-15', '12:12:28', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(221, '9564422', 'OR', 'ESTEBAN', 'QUISPE', 'COLQUE', '0000-00-00', 'carlos12@gmail.com', '72132132', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2023-06-13', '11:20:52', '131.0.198.3-SCZ-131-0-198-00003.tigo.bo', 1),
(224, '486236', 'LP', 'MARCOS', 'MIRANDA', 'QUISPE', '0000-00-00', '', '7654541123', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2023-06-26', '08:45:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(245, '7936544', 'LP', 'TEODORA', 'DIAS', 'CONDE', '0000-00-00', '', '', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2023-06-27', '22:11:00', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(251, '44674288 LP', 'LP', 'ANGELA ', 'CRUZ', 'MAMANI', '1999-02-12', '', '71972463', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-02-01', '23:53:48', '189.28.95.5-LPZ-189-28-95-00005.tigo.bo', 1),
(252, '253421 LP', 'LP', 'SAMUEL ', 'CANAVIRI', 'SANTANA', '2001-05-19', '', '67543421', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-02-02', '00:08:45', '189.28.95.5-LPZ-189-28-95-00005.tigo.bo', 1),
(253, '44576622', 'LP', 'KATERINE', 'QUISPE', 'CANAVIRI', '1999-05-01', 'katerine_7@gmail.com', '71825564', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-02-04', '22:26:26', '189.28.95.32-LPZ-189-28-95-00032.tigo.bo', 1),
(254, '3636265', 'LP', 'JORGE', 'MORALES', 'DIAS', '0000-00-00', '', '', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-04-08', '18:03:45', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(255, '48654254', 'LP', 'ANTONIO', 'QUISBERTH', 'MENDES', '1985-05-14', '', '', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-04-10', '16:29:25', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(256, '87962200', 'LP', 'GROVER', 'GUTIERREZ', 'SARMIENTO', '0000-00-00', 'ggutierrez@unibienes.com.bo', '72029542', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-04-12', '17:53:32', '177.222.113.92-177.222.113.92', 1),
(257, '10206054', 'LP', 'ALVARO', 'MAMANI', '', '1995-06-07', 'amamani@unibienes.edu.bo', '65214785', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-04-14', '20:21:43', '177.222.113.92-177.222.113.92', 1),
(258, '5026369', 'LP', 'GIANELLA', 'VELEZ', 'VELASCO', '1990-03-20', 'gvelez@unibienes.com.bo', '74185265', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-04-30', '22:57:16', '177.222.113.250-177.222.113.250', 1),
(259, '8654321', 'LP', 'SOFIA ANDREA', 'VARGAS', 'QUIROGA', '1991-03-05', 'svargas@unibienes.com.bo', '77234567', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-08-18', '15:03:18', '181.115.207.102-181.115.207.102', 1),
(260, '9900655', 'LP', 'ROSALYA LILIAM', 'DORADO', 'ESTRADA', '1993-07-15', 'rdorado@unibienes.com.bo', '69845877', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-08-31', '00:49:44', '177.222.112.231-177.222.112.231', 1),
(261, '85447788', 'LP', 'ROBERTO', 'PEREZ', 'CUSI', '1995-09-04', 'rperez@unibienes.com.bo', '78896658', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-04', '23:37:09', '177.222.112.197-177.222.112.197', 1),
(262, '7823222', 'LP', 'OSCAR', 'CARRANZA', 'LIT', '1990-01-02', 'ocarranza@unibienes.com.bo', '74852410', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '07:52:21', '177.222.112.197-177.222.112.197', 1),
(263, '5361722', 'LP', 'DANIELA', 'TRIGO', 'MENESES', '1990-04-01', 'dtrigo@unibienes.com.bo', '7894564', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '07:55:45', '177.222.112.197-177.222.112.197', 1),
(264, '31232344', 'LP', 'DANIELA', 'TRIGO', 'MENESES', '1990-05-13', 'dtrigo@unibienes.com.bo', '7894564', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '07:57:34', '177.222.112.197-177.222.112.197', 1),
(265, '9567890', 'LP', 'GABRIEL', 'MAMANI', 'QUISPE', '1988-11-19', 'gmamani@unbienes.com.bo', '65543210', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '08:01:36', '177.222.112.197-177.222.112.197', 1),
(266, '8234567', 'LP', 'LUCIA', 'CHOQUE', 'RAMOS', '1995-07-22', 'lchoque@unibienes.com.bo', '70123456', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '08:04:27', '177.222.112.197-177.222.112.197', 1),
(267, '9456789', 'LP', 'DAVID', 'PEREZ', 'SOLIZ', '1985-04-17', 'dperez@unibienes.com.bo', '75678901', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '08:07:52', '177.222.112.197-177.222.112.197', 1),
(268, '8432109', 'LP', 'ANDREA', 'MORALES', 'FUENTES', '1993-02-03', 'amorales@unibienes.com.bo', '69098765', 2, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '08:10:56', '177.222.112.197-177.222.112.197', 1),
(269, '9678901', 'LP', 'JAVIER', 'GUTIERREZ', 'CASTRO', '1990-06-28', 'jgutierrez@unibienes.com.bo', '71122334', 1, 0, 'TITULAR', '', 0, '0000-00-00', '00:00:00', '0000-00-00', 0, 0, 0, 103, '2025-09-05', '08:14:17', '177.222.112.197-177.222.112.197', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE IF NOT EXISTS `prioridad` (
  `idprioridad` int(11) unsigned NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`idprioridad`, `nombre`, `estado`, `descripcion`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'URGENTE', 1, '', 1, '0000-00-00', '00:00:00', '', 1),
(2, 'ALTA', 1, '', 1, '0000-00-00', '00:00:00', '', 1),
(3, 'MEDIA', 1, '', 1, '0000-00-00', '00:00:00', '', 1),
(4, 'BAJA', 1, '', 1, '0000-00-00', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idproveedor` int(10) unsigned NOT NULL,
  `empresa` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nit` int(20) NOT NULL,
  `direccion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `encargado` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `empresa`, `nit`, `direccion`, `telefono`, `encargado`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'OTROS', 0, 'AV RAMOS GAVILAN ', '124324', 'Jeminez Blanco', 1, 1, '2024-09-07', '13:53:30', '200.105.222.216-static-200-105-222-216.acelerate.net', 1),
(2, 'Gedesa LTDA', 2324354, 'JASDKA #1423', '264654', 'CARLOS DIAS', 1, 40, '2025-04-04', '07:10:33', '::1-ESCRITORIO', 1),
(4, 'DELL', 2147483647, 'AV. SáNCHEZ LIMA 2626', '', 'DELL', 1, 103, '2025-08-28', '15:32:09', '181.115.207.102-181.115.207.102', 1),
(5, 'EPSON', 2147483647, 'CALLE 20 DE COTA COTA', '22457888', 'DANIEL VALENZUELA', 1, 103, '2025-09-05', '16:27:06', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE IF NOT EXISTS `redes` (
  `idredes` int(11) unsigned NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `dispositivo` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `ipmac` varchar(50) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `vlan` varchar(100) NOT NULL,
  `funcion` varchar(100) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `firmware` varchar(100) NOT NULL,
  `puertos` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `responsable` varchar(200) NOT NULL,
  `notas` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`idredes`, `codigo`, `dispositivo`, `modelo`, `ipmac`, `ubicacion`, `vlan`, `funcion`, `fabricante`, `firmware`, `puertos`, `estado`, `responsable`, `notas`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'NET-001 ', 'Router Principal', 'Cisco ISR 4431', '192.168.1.1 (MAC: 00:1A:2B:3C:4D:5E)', 'Data Center', 'N/A', 'Enrutamiento Core', 'Cisco', 'IOS 17.6.1', 'Gigabit 0/0-3', 189, 'Redes Team', 'BGP con ISP, ACL aplicada', 103, '2025-08-30', '22:47:24', '181.188.170.184-181.188.170.184', 1),
(2, 'NET-002', 'Interruptor de acceso', 'Catalizador 2960', '192.168.1.20', 'Oficina A', 'VLAN 10', 'Conmutación LAN', 'Cisco', '15.2(4)E6', '24/Activo', 188, 'SISTEMAS', 'Gestiona la red de la oficina A.', 103, '2025-09-05', '12:47:51', '177.222.112.197-177.222.112.197', 1),
(3, 'NET-003', 'Enrutador principal', 'ISR 4331', '10.0.0.1', 'Sala de Servidores', 'VLAN 1', 'Enrutamiento WAN', 'Cisco', '16.9.5', '3/Activo', 188, 'SISTEMAS', 'Conexión principal a internet.', 103, '2025-09-05', '12:48:58', '177.222.112.197-177.222.112.197', 1),
(4, 'NET-004', 'Punto de acceso', 'Punto de acceso UniFi', 'N/D / 00:1B:63:84:45:E6', 'Sala de Reuniones', 'VLAN 20', 'Red Inalámbrica', 'Ubiquiti', '6.5.62', '1/Activo', 188, 'SISTEMAS', 'Proporciona Wi-Fi para reuniones.', 103, '2025-09-05', '12:50:05', '177.222.112.197-177.222.112.197', 1),
(5, 'NET-005', 'Cortafuegos', 'FortiGate 60F', '192.168.1.1', 'Sala de Servidores', 'N / A', 'Seguridad de Red', 'Fortinet', '7.2.5', '5/Activo', 189, 'SISTEMAS', 'Protección contra amenazas externas.', 103, '2025-09-05', '12:51:49', '177.222.112.197-177.222.112.197', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(10) unsigned NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `iddominio` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(245) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `Nombre`, `Descripcion`, `dir`, `iddominio`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'GERENTE', 'Gerente general, revisión de reportes en general', 'administracion', 160, 1, '2015-04-18', '12:44:42', '', 1),
(28, 'OPERARIO', 'DEFINIR Y EJECUTAR POLÍTICAS Y ESTRATEGIAS QUE VIABILICEN LA IMPLEMENTACIÓN EL MODELO DE GESTIÓN TECNOLÓGICA DEL GOBIERNO AUTÓNOMO MUNICIPAL.', '', 162, 1, '2018-08-03', '11:07:43', '181.115.248.208-181.115.248.208', 1),
(30, 'ENCARGADO', 'Personal encargado de registros', '', 0, 1, '2019-01-14', '16:47:40', '190.181.22.83-static-190-181-22-83.acelerate.net', 0),
(31, 'SISTEMAS', 'Administra los datos generados del sistema.', '', 161, 1, '2020-01-02', '10:42:09', '190.181.3.57-static-190-181-3-57.acelerate.net', 1),
(43, 'SUPERVISOR', 'DESARROLLAR Y GESTIONAR PROYECTOS DE TECNOLOGÍAS DE INFORMACIÓN ORIENTADOS A PROMOVER EL DESARROLLO DE LA SOCIEDAD DE LA INFORMACIÓN Y REDUCIR LA BRECHA DIGITAL EN EL MUNICIPIO A TRAVÉS DEL USO Y APLICACIÓN DE LAS TECNOLOGÍAS DE INFORMACIÓN Y COMUNICACIÓN EN TODOS LOS SECTORES Y ÁMBITOS. ', '', 165, 103, '2025-01-30', '20:35:44', '189.28.95.21-LPZ-189-28-95-00021.tigo.bo', 1),
(46, 'ANALISTA DE DESARROLLO', 'Responsable de analizar, diseñar e implementar programas de formación y desarrollo destinados a mejorar las habilidades, el conocimiento y el rendimiento de los empleados.', '', 179, 103, '2025-03-02', '17:27:56', '181.115.171.207-181.115.171.207', 1),
(47, 'AUXILIAR DE DESARROLLO', 'Brinda asistencia técnica y operativa en el desarrollo e implementación de soluciones informáticas tanto en entornos web como en dispositivos móviles.', '', 180, 103, '2025-03-02', '17:30:20', '181.115.171.207-181.115.171.207', 1),
(48, 'AUXILIAR DE SOPORTE TéCNICO', 'Brinda soporte técnico a los usuarios en temas de hardware y software. Instalar, configurar y mantener sistemas operativos y aplicaciones. Realizar diagnósticos y reparaciones de equipos informáticos. Administrar y mantener la infraestructura de red, incluyendo routers, switches y puntos de acceso.', '', 181, 103, '2025-03-30', '15:32:11', '181.115.171.9-181.115.171.9', 1),
(49, 'ANALISTA DE SOPORTE TèCNICO', 'Un Especialista en Soporte Técnico es un profesional clave en el ámbito de las tecnologías de la información (TI). Este experto se encarga de brindar asistencia y solución de problemas relacionados con hardware, software y sistemas de red.', '', 182, 103, '2025-03-30', '15:34:03', '181.115.171.9-181.115.171.9', 1),
(50, 'SUPERVISOR DE INFRAESTRUCTURA', 'Coordinar, interpretar, relacionar y satisfacer las necesidades de ampliación, construcción, remodelación, que sea requerida por cada área necesitada y competente. Lograr mantener en buen estado y funcionamiento la infraestructura física y equipamiento.', '', 183, 103, '2025-03-30', '15:36:29', '181.115.171.9-181.115.171.9', 0),
(51, 'ANALISTA DE PRODUCCION', 'Recopilar y analizar datos relacionados con la producción, como tiempos de ciclo, tasas de producción y desperdicios, para identificar oportunidades de mejora.', '', 184, 103, '2025-03-30', '15:37:13', '181.115.171.9-181.115.171.9', 1),
(52, 'AUXILIAR DE BASE DE DATOS', 'Puede utilizar los asistentes de tarea para iniciar y detener bases de datos e instancias, configurar los parámetros de base de datos, reorganizar tablas e índices, hacer copia de seguridad de bases de datos o espacios de tabla y restaurarlos, e importar y exportar datos de tablas', '', 185, 103, '2025-03-30', '15:38:43', '181.115.171.9-181.115.171.9', 1),
(53, 'ANALISTA DE BASE DE DATOS', 'El analista de datos crea informes detallados que muestran los hallazgos de manera clara y comprensible. Estos informes pueden incluir gráficos, tablas y visualizaciones de datos que ayudan a comunicar los resultados a los directivos y otros miembros del equipo de una forma clara y efectiva.', '', 186, 103, '2025-03-30', '15:40:27', '181.115.171.9-181.115.171.9', 1),
(54, 'USUARIO', '\r\nPERSONA QUE INTERACTÚA CON UN SISTEMA, APLICACIÓN O SERVICIO. SUS FUNCIONES PRINCIPALES INCLUYEN ACCEDER, UTILIZAR Y GESTIONAR LOS RECURSOS DISPONIBLES, ASÍ COMO PROPORCIONAR INFORMACIÓN O DATOS CUANDO SEA NECESARIO.\r\n', '', 187, 103, '2025-08-18', '15:08:59', '181.115.207.102-181.115.207.102', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolmenu`
--

CREATE TABLE IF NOT EXISTS `rolmenu` (
  `idrolmenu` int(10) unsigned NOT NULL,
  `idrol` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7984 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rolmenu`
--

INSERT INTO `rolmenu` (`idrolmenu`, `idrol`, `idmenu`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(6907, 40, 1000, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6906, 40, 1095, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6905, 40, 1094, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6904, 40, 1093, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6903, 40, 1060, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6902, 40, 80, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6901, 40, 1, 103, '2023-08-23', '23:00:40', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(7942, 43, 1000, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6802, 35, 1102, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6900, 39, 1000, 103, '2023-08-23', '22:47:04', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6899, 39, 1042, 103, '2023-08-23', '22:47:04', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6898, 39, 1041, 103, '2023-08-23', '22:47:04', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6897, 39, 1040, 103, '2023-08-23', '22:47:04', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6801, 35, 1101, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6800, 35, 1100, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6799, 35, 1099, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6853, 30, 1000, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6852, 30, 1102, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6896, 39, 80, 103, '2023-08-23', '22:47:04', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(6895, 39, 1, 103, '2023-08-23', '22:47:04', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(7941, 43, 1138, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7940, 43, 1137, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7939, 43, 1114, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7938, 43, 1112, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7937, 43, 1110, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6794, 35, 1093, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6793, 35, 1092, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6792, 35, 1090, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6791, 35, 1078, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(7936, 43, 1109, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7935, 43, 1060, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7934, 43, 80, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6790, 35, 1076, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6789, 35, 1060, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6788, 35, 1042, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6787, 35, 1041, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6786, 35, 1040, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6851, 30, 1101, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6850, 30, 1100, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6785, 35, 1037, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6784, 35, 1035, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6849, 30, 1099, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(7933, 43, 2, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7932, 43, 1, 103, '2025-09-05', '13:24:36', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7982, 31, 1139, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7981, 31, 1138, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7980, 31, 1137, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7979, 31, 1136, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7978, 31, 1135, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7977, 31, 1134, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7930, 1, 1138, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7929, 1, 1137, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7928, 1, 1105, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7927, 1, 1060, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7926, 1, 1042, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7925, 1, 1040, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7924, 1, 1037, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7923, 1, 1035, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7922, 1, 80, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7921, 1, 2, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7920, 1, 1, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6783, 35, 80, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6782, 35, 12, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6781, 35, 11, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6780, 35, 2, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6779, 35, 1, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6807, 36, 80, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6806, 36, 1, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6834, 33, 1060, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6833, 33, 1042, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6832, 33, 1041, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6831, 33, 1040, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6830, 33, 80, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6829, 33, 1, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6848, 30, 1095, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6847, 30, 1060, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6846, 30, 80, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6845, 30, 1, 103, '2023-06-26', '08:41:02', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6798, 35, 1098, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6797, 35, 1097, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6796, 35, 1095, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6795, 35, 1094, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(7976, 31, 1133, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7915, 28, 1117, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7914, 28, 1116, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7913, 28, 1115, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7912, 28, 1105, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7911, 28, 1060, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6627, 32, 1000, 103, '2023-06-23', '18:03:03', '177.222.61.127-SCZ-177-222-61-00127.tigo.bo', 1),
(6626, 32, 1095, 103, '2023-06-23', '18:03:03', '177.222.61.127-SCZ-177-222-61-00127.tigo.bo', 1),
(6625, 32, 1060, 103, '2023-06-23', '18:03:03', '177.222.61.127-SCZ-177-222-61-00127.tigo.bo', 1),
(6624, 32, 80, 103, '2023-06-23', '18:03:03', '177.222.61.127-SCZ-177-222-61-00127.tigo.bo', 1),
(6623, 32, 1, 103, '2023-06-23', '18:03:03', '177.222.61.127-SCZ-177-222-61-00127.tigo.bo', 1),
(6000, 34, 1083, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5999, 34, 1074, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5998, 34, 1073, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5997, 34, 1068, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5996, 34, 1067, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5995, 34, 1061, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5994, 34, 1060, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5993, 34, 80, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(5992, 34, 1, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(7975, 31, 1132, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6001, 34, 1084, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(6002, 34, 1085, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(6003, 34, 1000, 103, '2021-01-05', '11:07:07', '177.222.61.175-SCZ-177-222-61-00175.tigo.bo', 1),
(6271, 29, 1, 103, '2022-07-08', '17:13:51', '131.0.198.235-SCZ-131-0-198-00235.tigo.bo', 1),
(6272, 29, 80, 103, '2022-07-08', '17:13:51', '131.0.198.235-SCZ-131-0-198-00235.tigo.bo', 1),
(6273, 29, 1093, 103, '2022-07-08', '17:13:51', '131.0.198.235-SCZ-131-0-198-00235.tigo.bo', 1),
(6274, 29, 1094, 103, '2022-07-08', '17:13:51', '131.0.198.235-SCZ-131-0-198-00235.tigo.bo', 1),
(6275, 29, 1000, 103, '2022-07-08', '17:13:51', '131.0.198.235-SCZ-131-0-198-00235.tigo.bo', 1),
(7974, 31, 1131, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7973, 31, 1130, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7972, 31, 1129, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7971, 31, 1128, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7970, 31, 1127, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(6803, 35, 1103, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6804, 35, 1104, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6805, 35, 1000, 103, '2023-06-26', '08:38:23', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6808, 36, 1090, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6809, 36, 1092, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6810, 36, 1093, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6811, 36, 1094, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6812, 36, 1000, 103, '2023-06-26', '08:39:03', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6946, 37, 1000, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6945, 37, 1104, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6944, 37, 1103, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6943, 37, 1102, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6942, 37, 1101, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6941, 37, 1100, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6835, 33, 1076, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6836, 33, 1078, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6837, 33, 1090, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6838, 33, 1092, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6839, 33, 1093, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6840, 33, 1094, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6841, 33, 1095, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6842, 33, 1103, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6843, 33, 1104, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6844, 33, 1000, 103, '2023-06-26', '08:40:26', '131.0.197.169-SCZ-131-0-197-00169.tigo.bo', 1),
(6940, 37, 1099, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6939, 37, 1098, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6938, 37, 1095, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6937, 37, 1093, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6936, 37, 1090, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6935, 37, 1078, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6934, 37, 1076, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(6933, 37, 1, 103, '2024-06-05', '16:28:15', '177.222.63.79-SCZ-177-222-63-00079.tigo.bo', 1),
(7969, 31, 1126, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7968, 31, 1125, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7967, 31, 1124, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7966, 31, 1123, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7965, 31, 1122, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7964, 31, 1121, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7963, 31, 1120, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7962, 31, 1119, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7961, 31, 1118, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7960, 31, 1117, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7476, 51, 1, 103, '2025-04-10', '16:32:14', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(7477, 51, 80, 103, '2025-04-10', '16:32:14', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(7478, 51, 1105, 103, '2025-04-10', '16:32:14', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(7479, 51, 1115, 103, '2025-04-10', '16:32:14', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(7480, 51, 1000, 103, '2025-04-10', '16:32:14', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(7959, 31, 1116, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7958, 31, 1115, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7957, 31, 1114, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7956, 31, 1112, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7955, 31, 1110, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7899, 53, 1105, 103, '2025-09-05', '13:23:39', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7898, 53, 1060, 103, '2025-09-05', '13:23:39', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7808, 54, 1116, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7807, 54, 1115, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7806, 54, 1105, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7805, 54, 80, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7804, 54, 1, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7954, 31, 1109, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7953, 31, 1108, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7952, 31, 1105, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7951, 31, 1060, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7950, 31, 1042, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7949, 31, 1041, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7948, 31, 1040, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7947, 31, 1037, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7946, 31, 1035, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7809, 54, 1125, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7810, 54, 1000, 103, '2025-09-04', '23:15:09', '177.222.112.197-177.222.112.197', 1),
(7910, 28, 80, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7909, 28, 1, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7945, 31, 80, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7944, 31, 2, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7943, 31, 1, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7900, 53, 1118, 103, '2025-09-05', '13:23:39', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7901, 53, 1137, 103, '2025-09-05', '13:23:39', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7902, 53, 1138, 103, '2025-09-05', '13:23:39', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7903, 53, 1000, 103, '2025-09-05', '13:23:39', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7904, 46, 1, 103, '2025-09-05', '13:24:03', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7905, 46, 80, 103, '2025-09-05', '13:24:03', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7906, 46, 1137, 103, '2025-09-05', '13:24:03', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7907, 46, 1138, 103, '2025-09-05', '13:24:03', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7908, 46, 1000, 103, '2025-09-05', '13:24:03', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7916, 28, 1125, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7917, 28, 1137, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7918, 28, 1138, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7919, 28, 1000, 103, '2025-09-05', '13:24:14', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7931, 1, 1000, 103, '2025-09-05', '13:24:23', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1),
(7983, 31, 1000, 103, '2025-09-05', '16:37:01', '189.28.73.21-LPZ-189-28-73-00021.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
  `idseguimiento` int(11) unsigned NOT NULL,
  `idcontrol` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `verificacion` int(1) NOT NULL COMMENT '0=pendiente 1=Aprobado 2=NO Aprobado',
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `idsoftware` int(11) unsigned NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `version` varchar(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `licencia` varchar(200) NOT NULL,
  `clavefolio` varchar(200) NOT NULL,
  `fechainstalacion` date NOT NULL,
  `vencimiento` date NOT NULL,
  `instaladoenhardware` varchar(200) NOT NULL,
  `responsable` varchar(200) NOT NULL,
  `criticidad` varchar(200) NOT NULL,
  `notas` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`idsoftware`, `codigo`, `nombre`, `version`, `tipo`, `licencia`, `clavefolio`, `fechainstalacion`, `vencimiento`, `instaladoenhardware`, `responsable`, `criticidad`, `notas`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'SW-001', 'WINDOWS SERVER', '2022', 'Sistema Operativo', 'Volume License', 'XXXXX-XXXXX-XXXXX', '2023-03-15', '2026-03-15', 'SRV-001 (Dell R740)', 'IT Operations', 'Alta', 'Parcheado hasta 04/2024', 1, 103, '2025-08-30', '21:56:54', '181.188.170.184-181.188.170.184', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solucion`
--

CREATE TABLE IF NOT EXISTS `solucion` (
  `idsolucion` int(11) unsigned NOT NULL,
  `idticket` int(11) NOT NULL,
  `idadmejecutivo` int(11) NOT NULL COMMENT 'asignado a operario',
  `idadmejecutivoSIS` int(11) NOT NULL COMMENT 'asignador',
  `fechadesignacion` date NOT NULL,
  `horadesignacion` time NOT NULL,
  `idprioridad` int(11) NOT NULL,
  `idmovimiento` int(11) NOT NULL COMMENT 'para nombre inventario',
  `idinventario` int(11) NOT NULL,
  `observaciondesign` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `fechafin` date NOT NULL,
  `horafin` time NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `descripcionfin` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solucion`
--

INSERT INTO `solucion` (`idsolucion`, `idticket`, `idadmejecutivo`, `idadmejecutivoSIS`, `fechadesignacion`, `horadesignacion`, `idprioridad`, `idmovimiento`, `idinventario`, `observaciondesign`, `fecha`, `fechafin`, `horafin`, `observacion`, `estado`, `descripcionfin`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 2, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-02-19', '2025-02-20', '00:00:00', 'Iniciado con normalidad.', 1, '', 103, '2025-02-19', '17:34:05', '189.28.73.103-LPZ-189-28-73-00103.tigo.bo', 1),
(3, 3, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-02-21', '2025-02-22', '00:00:00', 'Iniciado con normalidad', 1, '', 103, '2025-02-21', '14:28:56', '189.28.73.178-LPZ-189-28-73-00178.tigo.bo', 1),
(5, 4, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-02-23', '2025-02-23', '01:04:19', 'Iniciado con normalidad', 1, 'se concluyo con normalidad todo', 103, '2025-02-23', '01:03:42', '131.0.198.81-SCZ-131-0-198-00081.tigo.bo', 1),
(6, 5, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-02-25', '2025-02-25', '09:56:47', 'Iniciado con normalidad', 1, 'Se realizo la solicitud con éxito.', 103, '2025-02-25', '09:55:07', '177.222.113.118-177.222.113.118', 1),
(7, 6, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-03-04', '2025-03-04', '18:32:08', 'Iniciado con normalidad', 1, 'Fallas de equipo se realizo cambio de pantalla', 103, '2025-03-04', '18:30:17', '181.115.171.207-181.115.171.207', 1),
(8, 7, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-03-28', '2025-03-30', '22:09:10', 'Iniciado con normalidad', 1, 'Se realizo la correccion del cable de red. Se instalo un nuevo software de Pdf (Adobe Reader)', 103, '2025-03-28', '09:19:51', '131.0.196.167-SCZ-131-0-196-00167.tigo.bo', 1),
(10, 8, 134, 0, '0000-00-00', '00:00:00', 0, 0, 0, '', '2025-04-09', '2025-04-09', '19:14:37', 'Iniciado con normalidad', 1, 'Finalizado.', 103, '2025-04-09', '19:12:58', '177.222.113.92-177.222.113.92', 1),
(13, 13, 227, 134, '2025-04-10', '23:30:43', 2, 123, 33, 'Atención con urgencia lo mas antes posible.', '2025-04-11', '2025-04-12', '19:53:58', 'Iniciado con normalidad', 2, 'Se formateo el equipo.', 103, '2025-04-10', '12:51:26', '181.188.178.175-LPZ-181-188-178-00175.tigo.bo', 1),
(14, 26, 227, 134, '2025-04-11', '19:15:18', 2, 0, 0, 'Cambio de base de datos.', '0000-00-00', '2025-04-12', '19:52:28', '', 5, 'Se atendio con exito.', 103, '2025-04-11', '19:15:18', '177.222.113.92-177.222.113.92', 1),
(15, 26, 227, 134, '2025-04-11', '19:15:19', 2, 0, 0, 'Cambio de base de datos.', '2025-04-11', '0000-00-00', '00:00:00', 'Iniciado con normalidad', 2, '', 103, '2025-04-11', '19:23:45', '177.222.113.92-177.222.113.92', 1),
(16, 28, 227, 134, '2025-04-12', '17:59:04', 3, 124, 33, 'Laptop entregada en perfectas condiciones con todos los pogramas requeridos del area.', '0000-00-00', '0000-00-00', '00:00:00', '', 5, '', 103, '2025-04-12', '17:59:04', '177.222.113.92-177.222.113.92', 1),
(17, 28, 227, 134, '2025-04-12', '17:59:04', 3, 124, 33, 'Laptop entregada en perfectas condiciones con todos los pogramas requeridos del area.', '2025-04-12', '2025-04-12', '18:00:44', 'Iniciado con normalidad', 2, 'Ticket atendido', 103, '2025-04-12', '17:59:53', '177.222.113.92-177.222.113.92', 1),
(18, 34, 189, 134, '2025-04-12', '19:49:48', 1, 0, 0, 'Solicitud atendida con éxito.', '2025-04-12', '2025-04-12', '19:50:47', 'Iniciado con normalidad', 2, 'Se realizo la peticion.', 103, '2025-04-12', '19:50:02', '177.222.113.92-177.222.113.92', 1),
(19, 35, 189, 134, '2025-04-12', '21:40:28', 2, 124, 33, 'Requiere atencion inmediata', '2025-04-12', '2025-04-12', '21:42:16', 'Iniciado con normalidad', 2, 'se antedio con exito', 103, '2025-04-12', '21:40:49', '177.222.113.92-177.222.113.92', 1),
(20, 9, 227, 134, '2025-04-12', '23:35:43', 2, 0, 0, 'Se modifico la base de datos con el registro.', '2025-04-12', '2025-04-12', '23:36:43', 'Iniciado con normalidad', 2, 'Base de datos Unisersoft actualizada.', 103, '2025-04-12', '23:36:10', '177.222.113.92-177.222.113.92', 1),
(21, 40, 189, 134, '2025-04-14', '17:33:53', 2, 131, 34, 'Se realizo el cambio de mouse.', '2025-04-14', '2025-04-14', '17:36:36', 'Iniciado con normalidad', 2, 'Atendido con éxito.', 103, '2025-04-14', '17:34:13', '177.222.113.92-177.222.113.92', 1),
(22, 41, 227, 134, '2025-04-14', '17:38:44', 3, 0, 0, 'Falta enviar los accesos del wi fi solo para los jefes de área.', '2025-04-14', '2025-04-14', '20:19:23', 'Iniciado con normalidad', 2, 'atendido con exito', 103, '2025-04-14', '20:18:37', '177.222.113.92-177.222.113.92', 1),
(23, 47, 227, 134, '2025-04-14', '17:58:08', 2, 0, 0, 'Revisar el teléfono interno.', '2025-04-14', '2025-04-14', '17:59:38', 'Iniciado con normalidad', 2, 'Realziado con exito', 103, '2025-04-14', '17:58:30', '177.222.113.92-177.222.113.92', 1),
(24, 45, 189, 134, '2025-04-14', '18:02:32', 1, 0, 0, 'Proceder con la solictud', '2025-04-14', '2025-04-14', '18:04:51', 'Iniciado con normalidad', 2, 'Se atendio con éxito.', 103, '2025-04-14', '18:02:49', '177.222.113.92-177.222.113.92', 1),
(25, 46, 189, 134, '2025-04-14', '18:13:43', 3, 0, 0, 'Atender Solicitud.', '2025-04-14', '2025-04-14', '18:15:08', 'Iniciado con normalidad', 2, 'Se atendio la solicitud', 103, '2025-04-14', '18:14:10', '177.222.113.92-177.222.113.92', 1),
(26, 49, 230, 134, '2025-04-25', '08:39:36', 2, 124, 33, 'Realizar cambio', '0000-00-00', '0000-00-00', '00:00:00', '', 5, '', 103, '2025-04-25', '08:39:36', '181.115.207.102-181.115.207.102', 1),
(27, 49, 230, 134, '2025-04-25', '08:39:36', 2, 124, 33, 'Realizar cambio', '0000-00-00', '0000-00-00', '00:00:00', '', 5, '', 103, '2025-04-25', '08:39:36', '181.115.207.102-181.115.207.102', 1),
(28, 49, 230, 134, '2025-04-25', '08:39:36', 2, 124, 33, 'Realizar cambio', '2025-04-25', '2025-04-25', '20:39:36', 'Iniciado con normalidad', 2, 'Realizado con exito', 103, '2025-04-25', '20:38:19', '181.115.207.102-181.115.207.102', 1),
(29, 50, 227, 134, '2025-04-25', '20:30:35', 1, 0, 0, 'Se atendera en 30 minutos.', '2025-04-25', '2025-04-25', '20:36:53', 'Iniciado con normalidad', 2, 'Se atendio con éxito la incidencia', 103, '2025-04-25', '20:33:55', '177.222.113.162-177.222.113.162', 1),
(30, 52, 230, 134, '2025-04-26', '00:15:04', 1, 124, 33, 'Atender la solictud de manera inmediata', '2025-04-26', '2025-04-26', '00:17:02', 'Iniciado con normalidad', 2, 'Se atendio con exito', 103, '2025-04-26', '00:15:27', '177.222.113.162-177.222.113.162', 1),
(31, 54, 230, 134, '2025-08-18', '12:08:39', 3, 0, 0, 'Solicitud se llevara un USB - HP para la actualización', '2025-08-18', '2025-08-18', '12:12:02', 'Iniciado con normalidad', 2, 'Se atendió la solcitud más la actualización de  los drivers', 103, '2025-08-18', '12:09:08', '181.115.207.102-181.115.207.102', 1),
(32, 55, 230, 134, '2025-08-18', '14:17:43', 1, 0, 0, 'CAMBIO EN LA BASE DE DATOS', '2025-08-18', '2025-09-05', '08:22:05', 'Iniciado con normalidad', 2, 'Se atendio lo solicitado.', 103, '2025-08-18', '14:18:00', '181.115.207.102-181.115.207.102', 1),
(33, 56, 189, 134, '2025-08-20', '22:20:52', 1, 0, 0, 'e12312', '2025-08-20', '2025-08-20', '22:36:47', 'Iniciado con normalidad', 2, '4reralizo', 103, '2025-08-20', '22:21:02', '177.222.112.247-177.222.112.247', 1),
(34, 1057, 189, 134, '2025-08-30', '16:42:11', 1, 124, 33, 'Designación', '2025-08-30', '2025-09-05', '08:20:27', 'Iniciado con normalidad', 2, 'Se atendió la solictud.', 103, '2025-08-30', '16:43:05', '181.188.170.184-181.188.170.184', 1),
(35, 1059, 233, 134, '2025-09-05', '07:42:26', 1, 0, 0, 'Revisar la solicitud', '2025-09-05', '2025-09-05', '07:46:37', 'Iniciado con normalidad', 2, 'Solicitud, atendida.', 103, '2025-09-05', '07:44:48', '177.222.112.197-177.222.112.197', 1),
(36, 1065, 234, 230, '2025-09-05', '08:28:20', 3, 0, 0, 'Atender la solicitud.', '2025-09-05', '2025-09-05', '12:38:49', 'Iniciado con normalidad', 2, 'Se atendió la solicitud', 176, '2025-09-05', '12:37:54', '177.222.112.197-177.222.112.197', 1),
(37, 1060, 233, 134, '2025-09-05', '12:33:02', 3, 0, 0, 'Atender la solicitud.', '2025-09-05', '2025-09-05', '12:37:26', 'Iniciado con normalidad', 2, 'Se atendió la solicitud.', 103, '2025-09-05', '12:35:19', '177.222.112.197-177.222.112.197', 1),
(38, 1071, 227, 134, '2025-09-05', '17:28:28', 1, 136, 37, 'contiuee', '2025-09-09', '2025-09-05', '17:29:38', 'Iniciado con normalidad', 2, 'se atandio el ticket', 103, '2025-09-05', '15:29:00', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1),
(39, 1074, 233, 134, '2025-09-10', '20:31:52', 2, 131, 34, 'Realizar el cambio de mouse.', '2025-09-10', '2025-09-10', '20:33:55', 'Iniciado con normalidad', 2, 'se atendio con exito', 103, '2025-09-10', '20:32:18', '::1-DESKTOP-NO2PLAC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soluciondetalle`
--

CREATE TABLE IF NOT EXISTS `soluciondetalle` (
  `idsoluciondetalle` int(11) unsigned NOT NULL,
  `idsolucion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `avance` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `soluciondetalle`
--

INSERT INTO `soluciondetalle` (`idsoluciondetalle`, `idsolucion`, `fecha`, `avance`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 1, '2025-02-20', 'Se inicio la verificación de problema ', 1, 103, '2025-02-20', '12:35:48', '189.28.73.113-LPZ-189-28-73-00113.tigo.bo', 1),
(2, 3, '2025-02-22', 'Se realizo la actualización de sistema operativo sin problemas.', 1, 103, '2025-02-22', '13:17:14', '181.188.178.250-LPZ-181-188-178-00250.tigo.bo', 1),
(3, 5, '2025-02-23', 'se procede a instalar la imprespora', 1, 103, '2025-02-23', '01:04:03', '131.0.198.81-SCZ-131-0-198-00081.tigo.bo', 1),
(4, 6, '2025-02-25', 'Solicitud enviada con éxito.', 1, 103, '2025-02-25', '09:56:17', '177.222.113.118-177.222.113.118', 1),
(5, 7, '2025-03-04', 'La solicitud fue atendida exitosamente.', 1, 103, '2025-03-04', '18:31:02', '181.115.171.207-181.115.171.207', 1),
(6, 7, '2025-03-04', 'Mantenimiento del equipo.', 1, 103, '2025-03-04', '18:31:27', '181.115.171.207-181.115.171.207', 1),
(7, 10, '2025-04-09', 'La solicitud fue atendida con éxito', 1, 103, '2025-04-09', '19:14:16', '177.222.113.92-177.222.113.92', 1),
(8, 17, '2025-04-12', 'Se entrego a tiempo el equipo al nuevo usuario.', 1, 103, '2025-04-12', '18:00:21', '177.222.113.92-177.222.113.92', 1),
(9, 18, '2025-04-12', 'Ya se atendió la solicitud.', 1, 103, '2025-04-12', '19:50:27', '177.222.113.92-177.222.113.92', 1),
(10, 18, '2025-04-12', 'Ya se atendió la solicitud.', 1, 103, '2025-04-12', '19:50:27', '177.222.113.92-177.222.113.92', 1),
(11, 18, '2025-04-12', 'Ya se atendió la solicitud.', 1, 103, '2025-04-12', '19:50:27', '177.222.113.92-177.222.113.92', 1),
(12, 14, '2025-04-12', 'El proyector esta ocupado, espera de 15 min.', 1, 103, '2025-04-12', '19:51:34', '177.222.113.92-177.222.113.92', 1),
(13, 14, '2025-04-12', 'Se esta atendiendo.', 1, 103, '2025-04-12', '19:52:07', '177.222.113.92-177.222.113.92', 1),
(14, 19, '2025-04-12', 'Cambio de monitor', 1, 103, '2025-04-12', '21:41:30', '177.222.113.92-177.222.113.92', 1),
(15, 19, '2025-04-12', 'Se atendio con exito', 1, 103, '2025-04-12', '21:41:52', '177.222.113.92-177.222.113.92', 1),
(16, 21, '2025-04-14', 'Se realizo con exito el proceso de cambio de mouse', 1, 103, '2025-04-14', '17:36:14', '177.222.113.92-177.222.113.92', 1),
(17, 23, '2025-04-14', 'Se reinicio los valores del teléfono', 1, 103, '2025-04-14', '17:59:16', '177.222.113.92-177.222.113.92', 1),
(18, 24, '2025-04-14', 'Hubo cambios en la base de datos de la Poliza AUCB00024.', 1, 103, '2025-04-14', '18:03:59', '177.222.113.92-177.222.113.92', 1),
(19, 24, '2025-04-14', 'Se actualizo los datos del titular.', 1, 103, '2025-04-14', '18:04:18', '177.222.113.92-177.222.113.92', 1),
(20, 25, '2025-04-14', 'Se atendio la solicitud.', 1, 103, '2025-04-14', '18:14:46', '177.222.113.92-177.222.113.92', 1),
(21, 22, '2025-04-14', 'se esta atendiendo', 1, 103, '2025-04-14', '20:18:59', '177.222.113.92-177.222.113.92', 1),
(22, 29, '2025-04-25', 'Se atende la solicitud', 1, 103, '2025-04-25', '20:34:17', '177.222.113.162-177.222.113.162', 1),
(23, 29, '2025-04-25', 'el equipo presenta problemas', 1, 103, '2025-04-25', '20:34:39', '177.222.113.162-177.222.113.162', 1),
(24, 29, '2025-04-25', 'Se esta dando mantenimiento al equipo', 1, 103, '2025-04-25', '20:34:57', '177.222.113.162-177.222.113.162', 1),
(25, 29, '2025-04-25', 'Se realiza la actualizacion de hardware del equipo', 1, 103, '2025-04-25', '20:35:20', '177.222.113.162-177.222.113.162', 1),
(26, 29, '2025-04-25', 'Se la habilito 2 puertos Usb', 1, 103, '2025-04-25', '20:35:41', '177.222.113.162-177.222.113.162', 1),
(27, 29, '2025-04-25', 'Despues de 5 dias se realizara nuevamente el bloqueo de los puertos', 1, 103, '2025-04-25', '20:36:13', '177.222.113.162-177.222.113.162', 1),
(28, 28, '2025-04-25', 'se atendio la solictud', 1, 103, '2025-04-25', '20:38:31', '177.222.113.162-177.222.113.162', 1),
(29, 28, '2025-04-25', 'se paso un excel via correo del consolidado', 1, 103, '2025-04-25', '20:38:49', '177.222.113.162-177.222.113.162', 1),
(30, 28, '2025-04-25', 'Fueron en total 6 hojas en formato excel ', 1, 103, '2025-04-25', '20:39:25', '177.222.113.162-177.222.113.162', 1),
(31, 30, '2025-04-26', 'se verifico el correo', 1, 103, '2025-04-26', '00:15:55', '177.222.113.162-177.222.113.162', 1),
(32, 30, '2025-04-26', 'se tardo con el correo', 1, 103, '2025-04-26', '00:16:08', '177.222.113.162-177.222.113.162', 1),
(33, 30, '2025-04-26', 'El equipo se puso lento', 1, 103, '2025-04-26', '00:16:24', '177.222.113.162-177.222.113.162', 1),
(34, 30, '2025-04-26', 'se tardo aproximadamente 2 horas', 1, 103, '2025-04-26', '00:16:38', '177.222.113.162-177.222.113.162', 1),
(35, 31, '2025-08-18', 'Se realizó la Actualiacion de Office.', 1, 103, '2025-08-18', '12:09:53', '181.115.207.102-181.115.207.102', 1),
(36, 31, '2025-08-18', 'Se Realizo la actualización de drivers.', 1, 103, '2025-08-18', '12:10:14', '181.115.207.102-181.115.207.102', 1),
(37, 33, '2025-08-20', 'qweqweqwewq', 1, 103, '2025-08-20', '22:35:49', '177.222.112.247-177.222.112.247', 1),
(38, 33, '2025-08-20', 'tj56j56j56j65', 1, 103, '2025-08-20', '22:35:55', '177.222.112.247-177.222.112.247', 1),
(39, 34, '2025-08-30', 'Revisión de computadora en la primera instancia', 1, 103, '2025-08-30', '16:55:50', '181.188.170.184-181.188.170.184', 1),
(40, 0, '2025-08-30', 'Revisión de computadora en la primera instancia', 1, 103, '2025-08-30', '16:57:39', '181.188.170.184-181.188.170.184', 1),
(41, 0, '2025-08-30', 'Revisión de computadora en la primera intancia', 1, 103, '2025-08-30', '16:58:01', '181.188.170.184-181.188.170.184', 1),
(42, 0, '2025-08-30', 'd', 1, 103, '2025-08-30', '16:58:06', '181.188.170.184-181.188.170.184', 1),
(43, 34, '2025-08-30', 'sadsada', 1, 103, '2025-08-30', '17:00:51', '181.188.170.184-181.188.170.184', 1),
(44, 34, '2025-08-30', 'sdasdasdasd222', 1, 103, '2025-08-30', '17:17:20', '181.188.170.184-181.188.170.184', 1),
(45, 35, '2025-09-05', 'Se reviso el mouse, y funciona correctamente. El estado es regular del activo actual.', 1, 179, '2025-09-05', '07:45:45', '177.222.112.197-177.222.112.197', 1),
(46, 34, '2025-09-05', 'Se realizo la revisión', 1, 176, '2025-09-05', '08:19:43', '177.222.112.197-177.222.112.197', 1),
(47, 32, '2025-09-05', 'Se actualizo de manera correcta la solicitud.', 1, 176, '2025-09-05', '08:21:14', '177.222.112.197-177.222.112.197', 1),
(48, 37, '2025-09-05', 'Se realizo el cambio correspondiente.', 1, 180, '2025-09-05', '12:35:45', '177.222.112.197-177.222.112.197', 1),
(49, 36, '2025-09-05', 'Se instalo el software.', 1, 180, '2025-09-05', '12:38:16', '177.222.112.197-177.222.112.197', 1),
(50, 38, '2025-09-05', 'npo se puedo relizar', 1, 103, '2025-09-05', '17:29:01', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1),
(51, 39, '2025-09-10', 'Se realizo el cambio del periferico.', 1, 103, '2025-09-10', '20:32:48', '::1-DESKTOP-NO2PLAC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtipo`
--

CREATE TABLE IF NOT EXISTS `subtipo` (
  `idsubtipo` int(11) unsigned NOT NULL,
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subtipo`
--

INSERT INTO `subtipo` (`idsubtipo`, `idtipo`, `nombre`, `descripcion`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 1, 'MAL ESTADO DE HARDWARE', 'Corresponde a todo deterioro del equipo de hardware', 1, 103, '0000-00-00', '00:00:00', '', 1),
(2, 1, 'PERDIDA', 'Falta del equipo', 1, 103, '0000-00-00', '00:00:00', '', 1),
(3, 1, 'DEFECTOS', 'Defectos o fallas de los equipos', 1, 103, '0000-00-00', '00:00:00', '', 1),
(4, 1, 'INFORMACIÓN', 'Fallas en la informacion de los equipos de GAM Viacha', 1, 103, '0000-00-00', '00:00:00', '', 1),
(5, 1, 'DAÑOS', 'Daños provocados al equipo de hardware de GAM Viacha', 1, 103, '0000-00-00', '00:00:00', '', 1),
(8, 2, 'SERVICIOS INFORMATICOS', 'Toda informacion sobre los servicios informáticos del GAM Viacha', 1, 103, '2025-02-01', '15:36:44', '131.0.198.193-SCZ-131-0-198-00193.tigo.bo', 1),
(9, 2, 'SISTEMA', 'Todos los sistemas dentro de la Alcaldía ', 1, 103, '2025-02-01', '15:39:07', '131.0.198.193-SCZ-131-0-198-00193.tigo.bo', 1),
(10, 2, 'INFORMACIÓN', 'Manejo de la informacion de la Alcaldía de Viacha', 1, 103, '2025-02-01', '15:39:41', '131.0.198.193-SCZ-131-0-198-00193.tigo.bo', 1),
(11, 2, 'PROGRAMAS Y APLICACIONES', 'Todo software que se maneja dentro del GAM de Viacha', 1, 103, '2025-02-01', '15:40:18', '131.0.198.193-SCZ-131-0-198-00193.tigo.bo', 1),
(12, 2, 'ACTUALIZACIONES EN APLICACIONES', 'Proceso de actualizar las versiones del software usado', 1, 103, '2025-02-01', '15:40:55', '131.0.198.193-SCZ-131-0-198-00193.tigo.bo', 1),
(13, 6, 'ENERGIA ELECTRICA', 'Todos problemas correspondiente a la energia electrica', 1, 103, '2025-02-04', '16:55:36', '131.0.198.193-SCZ-131-0-198-00193.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `idticket` int(11) unsigned NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `problema` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL COMMENT '1=pendiente 2=en proceso 3=Ejecutado 4=cancelado 5=designado 6=APROBADO 7=NO APROBADO',
  `idtipoticket` int(11) NOT NULL COMMENT '1=nomal 2=especial',
  `idcomprobacion` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1075 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`idticket`, `idtipo`, `idarea`, `fecha`, `problema`, `descripcion`, `estado`, `idtipoticket`, `idcomprobacion`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 1, 1, '2025-02-18', 'COMPUTADORA', 'No enciende la computadora, se dejo encendido pero al retornar se encuentra apagado', 5, 1, 0, 103, '2025-02-18', '15:04:25', '189.28.73.98-LPZ-189-28-73-00098.tigo.bo', 1),
(2, 2, 1, '2025-02-18', 'INSTALACIÓN DE OFFICE', 'Se solicita la actualización de office paquete completo', 3, 1, 0, 103, '2025-02-18', '17:18:04', '189.28.73.98-LPZ-189-28-73-00098.tigo.bo', 1),
(3, 2, 1, '2025-02-21', 'ACTUALIZACIÓN DE SISTEMA OPERATIVO', 'Sistema operativo muestra mensaje de actualización.', 3, 1, 0, 103, '2025-02-21', '10:48:59', '189.28.73.178-LPZ-189-28-73-00178.tigo.bo', 1),
(4, 1, 1, '2025-02-21', 'INSTALACIÓN DE IMPRESORA', 'Se necesita instalación de la impresora nueva.', 3, 1, 0, 103, '2025-02-21', '10:50:20', '189.28.73.178-LPZ-189-28-73-00178.tigo.bo', 1),
(5, 1, 1, '2025-02-23', 'EJEMPLO 1', 'datos de prueba\r\n', 3, 1, 0, 103, '2025-02-23', '01:03:09', '131.0.198.81-SCZ-131-0-198-00081.tigo.bo', 1),
(6, 1, 1, '2025-02-25', 'LA PANTALLA SE APAGA CADA 20 MIN', 'La pantalla se apaga cada 20 min, desde hace 5 dias.', 3, 1, 0, 103, '2025-02-25', '09:54:03', '177.222.113.118-177.222.113.118', 1),
(7, 4, 2, '2025-03-02', 'ADV', 'BHE W WE WW E WFEWFWE 3QW13213', 3, 1, 0, 103, '2025-03-02', '14:05:50', '181.115.171.207-181.115.171.207', 1),
(8, 7, 4, '2025-03-18', 'CAMBIO DE DATOS DE UN INFORME.', 'Solicito el cambio de datos del siguiente Nro de Seguro A-12115 por esta informacion A-8989898', 3, 1, 0, 172, '2025-03-18', '10:48:26', '131.0.196.119-SCZ-131-0-196-00119.tigo.bo', 1),
(9, 7, 4, '2025-03-18', 'CAMBIO DE DATOS DE UN INFORME.', 'Solicito el cambio de datos del siguiente Nro de Seguro A-12115 por esta informacion A-8989898', 3, 1, 0, 103, '2025-03-18', '10:48:26', '131.0.196.119-SCZ-131-0-196-00119.tigo.bo', 1),
(10, 1, 1, '2025-03-29', 'EDJDJDBEEJ', 'Djdjdjd', 1, 1, 0, 103, '2025-03-29', '11:26:35', '181.115.171.1-181.115.171.1', 1),
(11, 8, 3, '2025-03-31', 'ERROR CON EL TELEFONO INTERNO', 'No tengo salida de llamadas de mi telefono interno.', 1, 1, 0, 103, '2025-03-31', '19:47:07', '131.0.196.153-SCZ-131-0-196-00153.tigo.bo', 1),
(12, 2, 4, '2025-04-09', 'ACTUALIZAR OFFICE', 'Mi equipo requiere actualziar el office.', 1, 1, 0, 103, '2025-04-09', '18:50:54', '177.222.113.92-177.222.113.92', 1),
(13, 1, 2, '2025-04-10', 'NO ENCIENDE EL EQUIPO', 'AL INTENTO DE ENCENDER EL EQUIPO NO ENCIENDE', 3, 1, 0, 175, '2025-04-10', '16:33:49', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(14, 8, 7, '2025-04-11', 'REQUIERO CAMBIO DE CABLE DE RED', 'El cable esta muy desgastado.', 1, 1, 0, 103, '2025-04-11', '09:39:40', '177.222.113.92-177.222.113.92', 1),
(15, 2, 9, '2025-04-11', 'REQUIERO EL PROGRAMA POWER BI', 'Solicitud para la instalacion del porgrama Power BI.', 1, 1, 0, 103, '2025-04-11', '09:40:47', '177.222.113.92-177.222.113.92', 1),
(16, 1, 5, '2025-04-11', 'PANTALLA NO PRENDE.', 'Solicitud de soporte tecnico para mi pantalla de escritorio.', 1, 1, 0, 103, '2025-04-11', '09:41:50', '177.222.113.92-177.222.113.92', 1),
(17, 4, 6, '2025-04-11', 'CAMBIO DE PISO', 'Solicito internet en el Piso 7', 1, 1, 0, 103, '2025-04-11', '09:42:29', '177.222.113.92-177.222.113.92', 1),
(18, 7, 11, '2025-04-11', 'REQUIERO LA BASE DE DATOS DEL MES DE MARZO.', 'Solicitud de la Base de datos de lis clientes de UNISERSOFT', 1, 1, 0, 103, '2025-04-11', '09:43:34', '177.222.113.92-177.222.113.92', 1),
(19, 7, 11, '2025-04-11', 'REQUIERO LA BASE DE DATOS DEL MES DE MARZO.', 'Solicitud de la Base de datos de lis clientes de UNISERSOFT', 1, 1, 0, 103, '2025-04-11', '09:43:35', '177.222.113.92-177.222.113.92', 1),
(20, 1, 13, '2025-04-11', 'CAMBIO DE MOUSE.', 'El moause de mi equipo no funciona.', 1, 1, 0, 103, '2025-04-11', '09:44:30', '177.222.113.92-177.222.113.92', 1),
(21, 1, 13, '2025-04-11', 'CAMBIO DE MOUSE.', 'El moause de mi equipo no funciona.', 4, 1, 0, 103, '2025-04-11', '09:44:30', '177.222.113.92-177.222.113.92', 1),
(22, 4, 12, '2025-04-11', 'SOLICTAMOS ACCESO DEL WI FI.', 'Se requiere Wi FI en el piso 2.', 1, 1, 0, 103, '2025-04-11', '09:45:19', '177.222.113.92-177.222.113.92', 1),
(23, 4, 12, '2025-04-11', 'SOLICTAMOS ACCESO DEL WI FI.', 'Se requiere Wi FI en el piso 2.', 4, 1, 0, 103, '2025-04-11', '09:45:19', '177.222.113.92-177.222.113.92', 1),
(24, 7, 10, '2025-04-11', 'SOLICITO LA BASE DE DATOS.', 'Solicito de atender esta solictud de manera Urgente, requerimos la base de datos del año pasado.', 4, 1, 0, 103, '2025-04-11', '09:46:20', '177.222.113.92-177.222.113.92', 1),
(25, 7, 10, '2025-04-11', 'SOLICITO LA BASE DE DATOS.', 'Solicito de atender esta solictud de manera Urgente, requerimos la base de datos del año pasado.', 1, 1, 0, 103, '2025-04-11', '09:46:20', '177.222.113.92-177.222.113.92', 1),
(26, 8, 2, '2025-04-11', 'SOLICITAMOS PROYECTOR.', 'Necesitamos el proyector en el piso 4.', 3, 1, 0, 103, '2025-04-11', '09:47:40', '177.222.113.92-177.222.113.92', 1),
(27, 2, 6, '2025-04-11', 'REQUIERO LA INSTALACION DE OFFICE.', 'Solicitamos la instalacion del Office para el pasante del area.', 4, 1, 0, 103, '2025-04-11', '09:48:44', '177.222.113.92-177.222.113.92', 1),
(28, 2, 6, '2025-04-11', 'REQUIERO LA INSTALACION DE OFFICE.', 'Solicitamos la instalacion del Office para el pasante del area.', 3, 1, 0, 103, '2025-04-11', '09:48:45', '177.222.113.92-177.222.113.92', 1),
(29, 8, 9, '2025-04-11', 'SOLICITO UN QR', 'Solicito generar un QR de ventas ', 1, 1, 0, 103, '2025-04-11', '19:20:39', '177.222.113.92-177.222.113.92', 1),
(30, 2, 8, '2025-04-12', 'REQUIERO EL PROGRAMA POWER BI', 'Toda el área de contabilidad requiere de la instalcion del software Power BI para el dia de hoy 12/04/2025.', 1, 1, 0, 103, '2025-04-12', '19:38:58', '177.222.113.92-177.222.113.92', 1),
(31, 2, 5, '2025-04-12', 'REQUIERO EL PROGRAMA DE EDICION DE PDF', 'Requiero el programa autorizado para la edicion de PDFS', 1, 1, 0, 103, '2025-04-12', '19:40:49', '177.222.113.92-177.222.113.92', 1),
(32, 2, 5, '2025-04-12', 'REQUIERO EL PROGRAMA DE EDICION DE PDF', 'Requiero el programa autorizado para la edicion de PDFS', 1, 1, 0, 103, '2025-04-12', '19:40:49', '177.222.113.92-177.222.113.92', 1),
(33, 2, 13, '2025-04-12', 'EL EQUIPO SE CUELGA CADA 3 MINUTOS', 'Solicito de manera urgente puedan atender mi solictud ya que necesito mi equipo para el trabajo.', 1, 1, 0, 103, '2025-04-12', '19:42:33', '177.222.113.92-177.222.113.92', 1),
(34, 7, 12, '2025-04-12', 'SOLICITO CAMBIO CON UN REGISTRO DE UNA PóLIZA', 'Requiero el cambio de la Poliza ASS-157 el nombre del titular es Rubén Alcántara, hubo un error de typeo.', 3, 1, 0, 103, '2025-04-12', '19:48:39', '177.222.113.92-177.222.113.92', 1),
(35, 1, 4, '2025-04-12', 'NO FUNCIONA MI PANTALLA', 'Se prende  y se apaga cada 15 min', 3, 1, 0, 103, '2025-04-12', '21:39:07', '177.222.113.92-177.222.113.92', 1),
(36, 7, 11, '2025-04-13', 'INFORMACIóN EN LA BASE DE DATOS', 'Problemas al mostrar la información en la base de datos', 6, 2, 6, 103, '2025-04-13', '12:03:56', '181.188.178.175-LPZ-181-188-178-00175.tigo.bo', 1),
(39, 8, 1, '2025-04-13', 'NO FUNCIONA TECLADO', 'No funciona ninguno de los teclados', 7, 2, 7, 103, '2025-04-13', '22:14:51', '181.188.178.175-LPZ-181-188-178-00175.tigo.bo', 1),
(40, 1, 3, '2025-04-14', 'EL MOUSE NO FUNCIONA.', 'El mouse dejo de funcionar.', 3, 2, 8, 103, '2025-04-14', '06:52:04', '177.222.113.92-177.222.113.92', 1),
(41, 4, 13, '2025-04-14', 'SOLICITUD DE WI FI ', 'Solicitamos Wi Fi piso  5', 3, 1, 0, 103, '2025-04-14', '16:59:23', '177.222.113.92-177.222.113.92', 1),
(42, 7, 11, '2025-04-14', 'REQUERIMOS BASE DE DATOS', 'Solictamos la base de datos del área de Comercial del sistema UNISERSOFT.', 1, 2, 0, 103, '2025-04-14', '17:00:32', '177.222.113.92-177.222.113.92', 1),
(43, 2, 8, '2025-04-14', 'REQUERIMOS NUEVO PROGRAMA.', 'El area de Contabilidad requiere un  nuevo programa para el analisis interno de la contabilidad de la empresa.', 7, 2, 9, 103, '2025-04-14', '17:01:53', '177.222.113.92-177.222.113.92', 1),
(44, 7, 12, '2025-04-14', 'CAMBIO DE DATOS DE UNA POLIZA', 'Solicitud de cambio de datos de la poliza AULP00028, requiero que el CI de la persona sea 456897, hubo error de taypeo.', 7, 2, 12, 103, '2025-04-14', '17:18:02', '177.222.113.92-177.222.113.92', 1),
(45, 7, 4, '2025-04-14', 'ERROR AL GENERAR POLIZA.', 'Solicito verificar los datos de la Poliza AUCB00024, solicito verificar los datos del titular.', 3, 2, 10, 103, '2025-04-14', '17:21:50', '177.222.113.92-177.222.113.92', 1),
(46, 1, 3, '2025-04-14', 'SOLICITAMOS AYUDA CON EL CAMBIO DE PISO.', 'Gerencia General aprobo el cambio de piso para el area de Talento Humano, requerimos ayuda con el traslado de equipos e instalacion en la nueva oficna.', 3, 1, 0, 103, '2025-04-14', '17:24:23', '177.222.113.92-177.222.113.92', 1),
(47, 1, 2, '2025-04-14', 'ERROR CON EL TELEFONO INTERNO', 'No sale, ni entran llamadas de mi telefono interno.', 3, 1, 0, 103, '2025-04-14', '17:57:12', '177.222.113.92-177.222.113.92', 1),
(48, 2, 1, '2025-04-14', 'ACTUALIZAR OFFICE', 'Actualizar Office', 1, 1, 0, 103, '2025-04-14', '23:24:42', '177.222.113.92-177.222.113.92', 1),
(49, 7, 6, '2025-04-14', 'SOLICITO LA BASE DE DATOS.', 'mandar la base de datos en excel de las polizas de Cochabamba.', 3, 2, 11, 103, '2025-04-14', '23:25:59', '177.222.113.92-177.222.113.92', 1),
(50, 1, 3, '2025-04-25', 'PROBLEMA CON LOS USB', 'Habilitar USB', 3, 1, 0, 103, '2025-04-25', '20:28:54', '177.222.113.162-177.222.113.162', 1),
(51, 7, 7, '2025-04-25', 'SOLICTUD DE BASE DE DATOS', 'Requiero el consolidado del mes de Marzo', 6, 2, 13, 103, '2025-04-25', '20:29:47', '177.222.113.162-177.222.113.162', 1),
(52, 9, 3, '2025-04-26', 'TENGO CORREO MALICIOSO', 'Necesito verificar mi correo SPAM', 3, 1, 0, 103, '2025-04-26', '00:13:08', '177.222.113.162-177.222.113.162', 1),
(53, 1, 1, '2025-04-26', 'ERROR CON EL TELEFONO INTERNO', 'telefono', 1, 1, 0, 103, '2025-04-26', '20:41:16', '177.222.113.216-177.222.113.216', 1),
(54, 2, 2, '2025-08-18', 'ACTUALIZAR OFFICE', 'Requiero actualizar Office.', 3, 1, 0, 103, '2025-08-18', '12:05:11', '181.115.207.102-181.115.207.102', 1),
(55, 7, 5, '2025-08-18', 'ACTUALIZAR LOS DATOS DE LA POLIZA AU-1225', 'Cambiar el monto de Poliza de 3000 a 500', 3, 2, 14, 103, '2025-08-18', '14:16:40', '181.115.207.102-181.115.207.102', 1),
(56, 2, 1, '2025-08-20', 'ACTUALIZAR OFFICE', '3123131321', 3, 1, 0, 103, '2025-08-20', '22:20:25', '177.222.112.247-177.222.112.247', 1),
(1057, 1, 1, '2025-08-30', 'PRUABA', 'ssssss', 3, 1, 0, 103, '2025-08-30', '16:12:01', '181.188.170.184-181.188.170.184', 1),
(1059, 1, 2, '2025-09-04', 'NO FUNCIONA MI MOUSE.', 'No funciona mi mouse', 3, 1, 0, 178, '2025-09-04', '23:12:13', '177.222.112.197-177.222.112.197', 1),
(1060, 7, 5, '2025-09-04', 'CAMBIO EN LA POLIZA AU000-789', 'Cambiar el Nombre del titular: Rogelio Chávez, tuve un error de typeo y puse Chaves', 3, 2, 15, 103, '2025-09-04', '23:23:50', '177.222.112.197-177.222.112.197', 1),
(1061, 7, 5, '2025-09-04', 'SOLICITO CAMBIO DE LA PóLIZA AU-05788', 'Cambio de titular: De Maria del Carmen Zeverich a Rolando Gutierrez Loza', 1, 2, 0, 103, '2025-09-04', '23:26:05', '177.222.112.197-177.222.112.197', 1),
(1062, 1, 6, '2025-09-04', 'CAMBIO DE TECLADO', 'Desconfiguración del teclado', 1, 1, 0, 103, '2025-09-04', '23:28:08', '177.222.112.197-177.222.112.197', 1),
(1063, 4, 3, '2025-09-04', 'NO TENGO INTERNET', 'Solicto habilitacion de punto de red', 1, 1, 0, 103, '2025-09-04', '23:30:05', '177.222.112.197-177.222.112.197', 1),
(1064, 8, 7, '2025-09-04', 'SOLICITO UN CORTA PICO', 'Sin punto de energia para conecxión de laptop', 1, 1, 0, 103, '2025-09-04', '23:32:05', '177.222.112.197-177.222.112.197', 1),
(1065, 2, 8, '2025-09-04', 'SOLICITO INSTALACION DE PROGRAMAS.', 'Solicito el programa de Contabilidad.', 3, 1, 0, 103, '2025-09-04', '23:34:05', '177.222.112.197-177.222.112.197', 1),
(1066, 2, 3, '2025-09-05', 'ACTUALIZAR OFFICE', 'Actualizar Office', 1, 1, 0, 182, '2025-09-05', '15:03:05', '177.222.112.197-177.222.112.197', 1),
(1067, 7, 4, '2025-09-05', 'SOLICITO LA BASE DE DATOS DEL MES DE AGOSTO', 'Solicito el consolidado de la Base de Datos del Mes de Agosto del sistema UNISERSOFT', 1, 1, 0, 183, '2025-09-05', '15:05:14', '177.222.112.197-177.222.112.197', 1),
(1068, 7, 5, '2025-09-05', 'CAMBIO DE DATOS DE UNA POLIZA', 'CAMBIO PRIMA TOTAL DE POLIZA AGSC00000015', 1, 2, 0, 184, '2025-09-05', '15:06:16', '177.222.112.197-177.222.112.197', 1),
(1069, 1, 8, '2025-09-05', 'REQUIERO CAMBIO DE CABLE DE RED', 'Cambio de cable de red.', 1, 1, 0, 185, '2025-09-05', '15:08:01', '177.222.112.197-177.222.112.197', 1),
(1070, 7, 5, '2025-09-05', 'MODIFICACION ', 'MODIFICACION EN VALOR ASEGURADO CODIGO 15066 NRO POLIZA MSLP00000548', 4, 2, 0, 186, '2025-09-05', '15:09:55', '177.222.112.197-177.222.112.197', 1),
(1071, 7, 1, '2025-09-05', 'CAMBIO DE DATOS DE UNA POLIZA', 'Realizar el de nombre de lapoliza 3000222AU', 2, 2, 16, 103, '2025-09-05', '17:25:57', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1),
(1072, 1, 1, '2025-09-09', 'REQUIERO CAMBIO DE CABLE DE RED', 'Cambio de cable', 1, 1, 0, 103, '2025-09-09', '15:24:40', '::1-DESKTOP-NO2PLAC', 1),
(1073, 1, 4, '2025-09-10', 'SOLICITO LECTOR DE DVD', 'SOLICITO LECTOR DE DVD', 1, 1, 0, 103, '2025-09-10', '10:12:43', '::1-DESKTOP-NO2PLAC', 1),
(1074, 1, 2, '2025-09-10', 'CAMBIO DE MOUSE', 'Solicto Cambio de mouse', 3, 1, 0, 103, '2025-09-10', '20:29:57', '::1-DESKTOP-NO2PLAC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) unsigned NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idtipo`, `nombre`, `descripcion`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'HARDWARE', 'Componentes físicos de los que está hecho el equipo', 1, 103, '0000-00-00', '00:00:00', '', 1),
(2, 'SOFTWARE', 'El software está compuesto por un conjunto de aplicaciones y programas diseñados para cumplir diversas funciones dentro de un sistema', 1, 103, '2025-01-07', '14:13:51', '189.28.73.45-LPZ-189-28-73-00045.tigo.bo', 1),
(4, ' INTERNET', 'Red informática mundial, descentralizada, formada por la conexión directa entre computadoras mediante un protocolo especial de comunicación.', 1, 103, '2025-01-27', '20:34:10', '189.28.95.135-189.28.95.135', 1),
(7, 'BASE DE DATOS', 'Una base de datos es una herramienta para recopilar y organizar información.', 1, 103, '2025-03-02', '16:50:34', '181.115.171.207-181.115.171.207', 1),
(8, 'INCIDENCIA TECNOLóGICA.', 'Puede ser un fallo o una consulta reportada por un usuario, el equipo de servicio o una herramienta de monitoreo. ', 1, 103, '2025-03-02', '16:53:58', '181.115.171.207-181.115.171.207', 1),
(9, 'SPAM ', 'Correos sospechosos', 1, 103, '2025-04-26', '00:11:58', '177.222.113.162-177.222.113.162', 1),
(10, 'TELEFONIA IP', '', 1, 103, '2025-09-05', '17:23:31', '189.28.88.162-SCZ-189-28-88-00162.tigo.bo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoticket`
--

CREATE TABLE IF NOT EXISTS `tipoticket` (
  `idtipoticket` int(11) unsigned NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoticket`
--

INSERT INTO `tipoticket` (`idtipoticket`, `nombre`, `color`, `estado`, `descripcion`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'NORMAL', '#024873', 1, 'Uso de solicitudes nomrales', 0, '0000-00-00', '00:00:00', '', 1),
(2, 'ESPECIAL', '#efb810', 1, 'Uso de solicitudes especiales', 0, '0000-00-00', '00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `umedida`
--

CREATE TABLE IF NOT EXISTS `umedida` (
  `idumedida` int(10) unsigned NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `short` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `umedida`
--

INSERT INTO `umedida` (`idumedida`, `nombre`, `short`, `estado`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'UNIDAD', 'UNIDAD', 1, 0, '0000-00-00', '00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(10) unsigned NOT NULL,
  `idpersona` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `idadmejecutivo` int(11) NOT NULL,
  `usuario` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `idrol` int(11) NOT NULL,
  `idsede` int(11) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(245) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idpersona`, `idadmejecutivo`, `usuario`, `pass`, `idrol`, `idsede`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, '0', 1, 'admin', '79bcdb3654f3b46e244bf7f6fa1239ca', 1, 1, 40, '2018-01-12', '09:57:02', '181.115.140.15-181.115.140.15', 1),
(103, '1', 0, 'admin', '56376e8e7cfbf3050a3cc57f7e87fdde', 31, 0, 1, '2020-07-15', '12:28:27', '181.188.170.211-LPZ-181-188-170-00211.tigo.bo', 1),
(176, '257', 0, 'amamani', '56376e8e7cfbf3050a3cc57f7e87fdde', 28, 0, 103, '2025-04-26', '20:56:35', '177.222.113.216-177.222.113.216', 1),
(167, '245', 0, 'jjusto', '56376e8e7cfbf3050a3cc57f7e87fdde', 39, 0, 103, '2023-08-23', '22:41:05', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(168, '221', 0, 'carlos', 'b881c43e9afabd7e2adc03e2dde6f30d', 37, 0, 103, '2023-08-23', '22:59:30', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(169, '224', 0, 'nahazar', '076cad15615a84b19e5c253493722c23', 35, 0, 103, '2023-08-23', '23:02:13', '177.222.61.228-SCZ-177-222-61-00228.tigo.bo', 1),
(175, '255', 0, 'antonio', '56376e8e7cfbf3050a3cc57f7e87fdde', 51, 0, 103, '2025-04-10', '16:31:40', '189.28.73.94-LPZ-189-28-73-00094.tigo.bo', 1),
(174, '254', 0, 'jorge', '56376e8e7cfbf3050a3cc57f7e87fdde', 28, 0, 103, '2025-04-08', '18:26:05', '189.28.73.170-LPZ-189-28-73-00170.tigo.bo', 1),
(172, '253', 0, 'operario', 'b2465f42767a8ce00b84ec11343ced3f', 28, 0, 103, '2025-02-04', '22:34:48', '189.28.95.32-LPZ-189-28-95-00032.tigo.bo', 1),
(173, '253', 0, 'katerine', '2def7461f5e98bfc45a7be9fe89211fb', 28, 0, 103, '2025-02-04', '22:37:30', '189.28.95.32-LPZ-189-28-95-00032.tigo.bo', 1),
(177, '258', 0, 'gvelez', '56376e8e7cfbf3050a3cc57f7e87fdde', 46, 0, 103, '2025-04-30', '23:04:59', '177.222.113.250-177.222.113.250', 1),
(178, '259', 0, 'svargas', '23a8943804cf0809e694839d52d1bbc6', 54, 0, 103, '2025-08-18', '15:12:20', '181.115.207.102-181.115.207.102', 1),
(179, '261', 0, 'rperez', '56376e8e7cfbf3050a3cc57f7e87fdde', 28, 0, 103, '2025-09-04', '23:40:02', '177.222.112.197-177.222.112.197', 1),
(180, '262', 0, 'ocarranza', '56376e8e7cfbf3050a3cc57f7e87fdde', 28, 0, 103, '2025-09-05', '07:53:30', '177.222.112.197-177.222.112.197', 1),
(181, '264', 0, 'dtrigo', '56376e8e7cfbf3050a3cc57f7e87fdde', 28, 0, 103, '2025-09-05', '07:58:23', '177.222.112.197-177.222.112.197', 1),
(182, '265', 0, 'gmamani', '56376e8e7cfbf3050a3cc57f7e87fdde', 54, 0, 103, '2025-09-05', '08:02:42', '177.222.112.197-177.222.112.197', 1),
(183, '266', 0, 'lchoque', '56376e8e7cfbf3050a3cc57f7e87fdde', 54, 0, 103, '2025-09-05', '08:05:07', '177.222.112.197-177.222.112.197', 1),
(184, '267', 0, 'dperez', '56376e8e7cfbf3050a3cc57f7e87fdde', 54, 0, 103, '2025-09-05', '08:08:29', '177.222.112.197-177.222.112.197', 1),
(185, '268', 0, 'amorales', '56376e8e7cfbf3050a3cc57f7e87fdde', 54, 0, 103, '2025-09-05', '08:11:30', '177.222.112.197-177.222.112.197', 1),
(186, '269', 0, 'jgutierrez', '56376e8e7cfbf3050a3cc57f7e87fdde', 54, 0, 103, '2025-09-05', '08:31:21', '177.222.112.197-177.222.112.197', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vadmejecutivo`
--
CREATE TABLE IF NOT EXISTS `vadmejecutivo` (
`idvadmejecutivo` int(10) unsigned
,`idpersona` int(10) unsigned
,`carnet` varchar(500)
,`expedido` varchar(500)
,`nombre` varchar(500)
,`paterno` varchar(500)
,`materno` varchar(500)
,`idtipo` int(11)
,`fechaingreso` date
,`codigo` varchar(50)
,`tiponombre` varchar(500)
,`tipo` varchar(500)
,`referenciaper` varchar(500)
,`estado` int(11)
,`usuariocreacion` int(11)
,`fechacreacion` date
,`horacreacion` time
,`nombrehost` varchar(50)
,`activo` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vejecutivo`
--
CREATE TABLE IF NOT EXISTS `vejecutivo` (
`idvejecutivo` int(10) unsigned
,`idpersona` int(11)
,`idorganizacion` int(11)
,`idcargo` int(11)
,`idarea` int(11)
,`idtipo` int(11)
,`fechaingreso` date
,`idhorario` int(11)
,`idsede` int(11)
,`obser` varchar(2000)
,`carnet` varchar(500)
,`expedido` varchar(500)
,`nombre` varchar(500)
,`paterno` varchar(500)
,`materno` varchar(500)
,`nacimiento` date
,`celular` varchar(500)
,`email` varchar(500)
,`ocupacion` varchar(500)
,`nsexo` varchar(500)
,`narea` varchar(500)
,`ntipo` varchar(500)
,`nhora` varchar(500)
,`estado` int(11)
,`observacion` varchar(2000)
,`usuariocreacion` int(11)
,`fechacreacion` date
,`horacreacion` time
,`nombrehost` varchar(50)
,`activo` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vfiles`
--
CREATE TABLE IF NOT EXISTS `vfiles` (
`idvfiles` int(11) unsigned
,`name` varchar(255)
,`size` int(11)
,`type` varchar(255)
,`url_procedencia` varchar(255)
,`url_ubicacion` varchar(255)
,`title` varchar(255)
,`description` varchar(255)
,`usuariocreacion` int(11)
,`fecha_creacion` date
,`hora_creacion` time
,`tipo_foto` varchar(255)
,`tipo_usuario` varchar(255)
,`id_publicacion` varchar(255)
,`principal` int(11)
,`activo` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vinventario`
--
CREATE TABLE IF NOT EXISTS `vinventario` (
`idvinventario` int(10) unsigned
,`item` varchar(300)
,`idmarca` int(11)
,`idumedida` int(11)
,`marca` varchar(500)
,`fabricante` varchar(200)
,`minimo` int(11)
,`descripcion` varchar(100)
,`usuariocreacion` int(11)
,`fechacreacion` date
,`horacreacion` time
,`nombrehost` varchar(300)
,`activo` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vinventario_almacen`
--
CREATE TABLE IF NOT EXISTS `vinventario_almacen` (
`idvinventario_almacen` int(11) unsigned
,`idalmacen` int(11)
,`almacen` varchar(250)
,`ubicacion` varchar(200)
,`descripcionalmacen` varchar(500)
,`idinventario` int(11)
,`item` varchar(300)
,`idmarca` int(11)
,`modelo` varchar(100)
,`descripcionitem` varchar(100)
,`idproveedor` int(11)
,`lote` int(11)
,`cantidad_maxima` int(11)
,`cantidad_minima` int(11)
,`existencias` int(11)
,`precio_compraU` float(12,2)
,`precio_ventaU` float
,`fechaingreso` date
,`tiempovida` varchar(200)
,`usuariocreacion` int(11)
,`fechacreacion` date
,`horacreacion` time
,`nombrehost` varchar(500)
,`activo` tinyint(4)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `virtualizacion`
--

CREATE TABLE IF NOT EXISTS `virtualizacion` (
  `idvirtualizacion` int(11) unsigned NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `recurso` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `proveedorplataforma` varchar(100) NOT NULL,
  `ipendpoint` int(100) NOT NULL,
  `cpuramdisco` varchar(100) NOT NULL,
  `sistemaoperativo` varchar(100) NOT NULL,
  `ambiente` varchar(100) NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `fechacreado` date NOT NULL,
  `estado` int(11) NOT NULL,
  `notas` varchar(200) NOT NULL,
  `usuariocreacion` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `horacreacion` time NOT NULL,
  `nombrehost` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `virtualizacion`
--

INSERT INTO `virtualizacion` (`idvirtualizacion`, `codigo`, `recurso`, `tipo`, `proveedorplataforma`, `ipendpoint`, `cpuramdisco`, `sistemaoperativo`, `ambiente`, `propietario`, `fechacreado`, `estado`, `notas`, `usuariocreacion`, `fechacreacion`, `horacreacion`, `nombrehost`, `activo`) VALUES
(1, 'CLD-001', 'VM-WebServer', 'Máquina Virtual', 'VMware ESXi 7.0', 192168, '4vCPU/8GB/100GB', 'Ubuntu 22.04 LTS', 'Producción', 'DevOps Team', '2023-03-15', 197, 'Host: esxi01.corp.local', 103, '2025-08-31', '07:33:48', '181.188.170.184-181.188.170.184', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vrolmenu`
--
CREATE TABLE IF NOT EXISTS `vrolmenu` (
`idvrolmenu` int(10) unsigned
,`idrol` int(11)
,`idmenu` int(11)
,`nombre` varchar(500)
,`url` varchar(500)
,`icon` varchar(100)
,`padre` int(11)
,`orden` int(11)
,`activo` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vusuario`
--
CREATE TABLE IF NOT EXISTS `vusuario` (
`idvusuario` int(10) unsigned
,`idpersona` varchar(500)
,`carnet` varchar(500)
,`expedido` varchar(500)
,`nombre` varchar(500)
,`paterno` varchar(500)
,`materno` varchar(500)
,`nacimiento` date
,`celular` varchar(500)
,`usuario` varchar(500)
,`pass` varchar(500)
,`idrol` int(11)
,`rol` varchar(50)
,`Descripcion` varchar(500)
,`idsede` int(11)
,`usuariocreacion` int(11)
,`fechacreacion` date
,`horacreacion` time
,`nombrehost` varchar(245)
,`activo` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vusuario2`
--
CREATE TABLE IF NOT EXISTS `vusuario2` (
`idvusuario2` int(10) unsigned
,`rol` varchar(50)
,`idpersona` int(10) unsigned
,`usuario` varchar(500)
,`pass` varchar(500)
,`idrol` int(11)
,`carnet` varchar(500)
,`expedido` varchar(500)
,`nombre` varchar(500)
,`paterno` varchar(500)
,`materno` varchar(500)
,`nacimiento` date
,`email` varchar(500)
,`celular` varchar(500)
,`idsexo` int(11)
,`idcivil` int(11)
,`tipopersona` varchar(500)
,`ocupacion` varchar(500)
,`usuariocreacion` int(11)
,`fechacreacion` date
,`horacreacion` time
,`activo` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vadmejecutivo`
--
DROP TABLE IF EXISTS `vadmejecutivo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vadmejecutivo` AS select `e`.`idadmejecutivo` AS `idvadmejecutivo`,`p`.`idpersona` AS `idpersona`,`p`.`carnet` AS `carnet`,`p`.`expedido` AS `expedido`,`p`.`nombre` AS `nombre`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`e`.`idtipo` AS `idtipo`,`e`.`fechaingreso` AS `fechaingreso`,`d`.`codigo` AS `codigo`,`d`.`nombre` AS `tiponombre`,`d`.`tipo` AS `tipo`,`e`.`referenciaper` AS `referenciaper`,`e`.`estado` AS `estado`,`e`.`usuariocreacion` AS `usuariocreacion`,`e`.`fechacreacion` AS `fechacreacion`,`e`.`horacreacion` AS `horacreacion`,`e`.`nombrehost` AS `nombrehost`,`e`.`activo` AS `activo` from ((`admejecutivo` `e` join `persona` `p` on((`p`.`idpersona` = `e`.`idpersona`))) join `dominio` `d` on((`d`.`iddominio` = `e`.`idtipo`))) where (`e`.`activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vejecutivo`
--
DROP TABLE IF EXISTS `vejecutivo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vejecutivo` AS select `eje`.`idadmejecutivo` AS `idvejecutivo`,`eje`.`idpersona` AS `idpersona`,`eje`.`idorganizacion` AS `idorganizacion`,`eje`.`idcargo` AS `idcargo`,`eje`.`idarea` AS `idarea`,`eje`.`idtipo` AS `idtipo`,`eje`.`fechaingreso` AS `fechaingreso`,`eje`.`idhorario` AS `idhorario`,`eje`.`idsede` AS `idsede`,`eje`.`obs` AS `obser`,`per`.`carnet` AS `carnet`,`per`.`expedido` AS `expedido`,`per`.`nombre` AS `nombre`,`per`.`paterno` AS `paterno`,`per`.`materno` AS `materno`,`per`.`nacimiento` AS `nacimiento`,`per`.`celular` AS `celular`,`per`.`email` AS `email`,`per`.`ocupacion` AS `ocupacion`,`sx`.`nombre` AS `nsexo`,`ar`.`nombre` AS `narea`,`tp`.`nombre` AS `ntipo`,`hr`.`nombre` AS `nhora`,`eje`.`estado` AS `estado`,`eje`.`obs` AS `observacion`,`eje`.`usuariocreacion` AS `usuariocreacion`,`eje`.`fechacreacion` AS `fechacreacion`,`eje`.`horacreacion` AS `horacreacion`,`eje`.`nombrehost` AS `nombrehost`,`eje`.`activo` AS `activo` from (((((`admejecutivo` `eje` join `persona` `per` on((`eje`.`idpersona` = `per`.`idpersona`))) join `dominio` `ar` on((`eje`.`idarea` = `ar`.`iddominio`))) join `dominio` `tp` on((`eje`.`idtipo` = `tp`.`iddominio`))) join `dominio` `hr` on((`eje`.`idhorario` = `hr`.`iddominio`))) join `dominio` `sx` on((`per`.`idsexo` = `sx`.`iddominio`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vfiles`
--
DROP TABLE IF EXISTS `vfiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vfiles` AS select `f`.`idfiles` AS `idvfiles`,`f`.`name` AS `name`,`f`.`size` AS `size`,`f`.`type` AS `type`,`f`.`url_procedencia` AS `url_procedencia`,`f`.`url_ubicacion` AS `url_ubicacion`,`f`.`title` AS `title`,`f`.`description` AS `description`,`f`.`usuariocreacion` AS `usuariocreacion`,`f`.`fecha_creacion` AS `fecha_creacion`,`f`.`hora_creacion` AS `hora_creacion`,`f`.`tipo_foto` AS `tipo_foto`,`f`.`tipo_usuario` AS `tipo_usuario`,`f`.`id_publicacion` AS `id_publicacion`,`f`.`principal` AS `principal`,`f`.`activo` AS `activo` from `files` `f`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vinventario`
--
DROP TABLE IF EXISTS `vinventario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vinventario` AS select `i`.`idinventario` AS `idvinventario`,`i`.`nombre` AS `item`,`i`.`idmarca` AS `idmarca`,`i`.`idumedida` AS `idumedida`,`m`.`nombre` AS `marca`,`i`.`fabricante` AS `fabricante`,`i`.`minimo` AS `minimo`,`i`.`descripcion` AS `descripcion`,`i`.`usuariocreacion` AS `usuariocreacion`,`i`.`fechacreacion` AS `fechacreacion`,`i`.`horacreacion` AS `horacreacion`,`i`.`nombrehost` AS `nombrehost`,`i`.`activo` AS `activo` from (`inventario` `i` join `marca` `m` on((`m`.`idmarca` = `i`.`idmarca`))) where (`i`.`activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vinventario_almacen`
--
DROP TABLE IF EXISTS `vinventario_almacen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vinventario_almacen` AS select `ai`.`idinventario_almacen` AS `idvinventario_almacen`,`ai`.`idalmacen` AS `idalmacen`,`a`.`nombre` AS `almacen`,`a`.`ubicacion` AS `ubicacion`,`a`.`descripcion` AS `descripcionalmacen`,`ai`.`idinventario` AS `idinventario`,`i`.`nombre` AS `item`,`i`.`idmarca` AS `idmarca`,`i`.`modelo` AS `modelo`,`i`.`descripcion` AS `descripcionitem`,`ai`.`idproveedor` AS `idproveedor`,`ai`.`lote` AS `lote`,`ai`.`cantidad_maxima` AS `cantidad_maxima`,`ai`.`cantidad_minima` AS `cantidad_minima`,`ai`.`existencias` AS `existencias`,`ai`.`precio_compraU` AS `precio_compraU`,`ai`.`precio_ventaU` AS `precio_ventaU`,`ai`.`fechaingreso` AS `fechaingreso`,`ai`.`tiempovida` AS `tiempovida`,`ai`.`usuariocreacion` AS `usuariocreacion`,`ai`.`fechacreacion` AS `fechacreacion`,`ai`.`horacreacion` AS `horacreacion`,`ai`.`nombrehost` AS `nombrehost`,`ai`.`activo` AS `activo` from ((`inventario_almacen` `ai` join `almacen` `a` on((`a`.`idalmacen` = `ai`.`idalmacen`))) join `inventario` `i` on((`i`.`idinventario` = `ai`.`idinventario`))) where (`ai`.`activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vrolmenu`
--
DROP TABLE IF EXISTS `vrolmenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrolmenu` AS select `rm`.`idrolmenu` AS `idvrolmenu`,`rm`.`idrol` AS `idrol`,`rm`.`idmenu` AS `idmenu`,`me`.`nombre` AS `nombre`,`me`.`url` AS `url`,`me`.`icon` AS `icon`,`me`.`padre` AS `padre`,`me`.`orden` AS `orden`,`me`.`activo` AS `activo` from (`rolmenu` `rm` join `menu` `me` on((`rm`.`idmenu` = `me`.`idmenu`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vusuario`
--
DROP TABLE IF EXISTS `vusuario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vusuario` AS select `u`.`idusuario` AS `idvusuario`,`u`.`idpersona` AS `idpersona`,`p`.`carnet` AS `carnet`,`p`.`expedido` AS `expedido`,`p`.`nombre` AS `nombre`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`p`.`nacimiento` AS `nacimiento`,`p`.`celular` AS `celular`,`u`.`usuario` AS `usuario`,`u`.`pass` AS `pass`,`u`.`idrol` AS `idrol`,`r`.`Nombre` AS `rol`,`r`.`Descripcion` AS `Descripcion`,`u`.`idsede` AS `idsede`,`u`.`usuariocreacion` AS `usuariocreacion`,`u`.`fechacreacion` AS `fechacreacion`,`u`.`horacreacion` AS `horacreacion`,`u`.`nombrehost` AS `nombrehost`,`u`.`activo` AS `activo` from ((`usuario` `u` join `persona` `p` on((`p`.`idpersona` = `u`.`idpersona`))) join `rol` `r` on((`r`.`idrol` = `u`.`idrol`))) where (`u`.`activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vusuario2`
--
DROP TABLE IF EXISTS `vusuario2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vusuario2` AS select `u`.`idusuario` AS `idvusuario2`,`r`.`Nombre` AS `rol`,`p`.`idpersona` AS `idpersona`,`u`.`usuario` AS `usuario`,`u`.`pass` AS `pass`,`u`.`idrol` AS `idrol`,`p`.`carnet` AS `carnet`,`p`.`expedido` AS `expedido`,`p`.`nombre` AS `nombre`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`p`.`nacimiento` AS `nacimiento`,`p`.`email` AS `email`,`p`.`celular` AS `celular`,`p`.`idsexo` AS `idsexo`,`p`.`idcivil` AS `idcivil`,`p`.`tipopersona` AS `tipopersona`,`p`.`ocupacion` AS `ocupacion`,`p`.`usuariocreacion` AS `usuariocreacion`,`p`.`fechacreacion` AS `fechacreacion`,`p`.`horacreacion` AS `horacreacion`,`u`.`activo` AS `activo` from ((`persona` `p` join `usuario` `u` on((`u`.`idpersona` = `p`.`idpersona`))) join `rol` `r` on((`r`.`idrol` = `u`.`idrol`)));

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admejecutivo`
--
ALTER TABLE `admejecutivo`
  ADD PRIMARY KEY (`idadmejecutivo`);

--
-- Indices de la tabla `admsucursal`
--
ALTER TABLE `admsucursal`
  ADD PRIMARY KEY (`idadmsucursal`);

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`idalmacen`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
  ADD PRIMARY KEY (`idcomprobacion`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`idconfig`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idconfiguracion`);

--
-- Indices de la tabla `configuracion2`
--
ALTER TABLE `configuracion2`
  ADD PRIMARY KEY (`idconfiguracion2`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`iddomicilio`);

--
-- Indices de la tabla `dominio`
--
ALTER TABLE `dominio`
  ADD PRIMARY KEY (`iddominio`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`idfiles`);

--
-- Indices de la tabla `gravedad`
--
ALTER TABLE `gravedad`
  ADD PRIMARY KEY (`idgravedad`);

--
-- Indices de la tabla `infraestructura`
--
ALTER TABLE `infraestructura`
  ADD PRIMARY KEY (`idinfraestructura`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idinventario`);

--
-- Indices de la tabla `inventario_almacen`
--
ALTER TABLE `inventario_almacen`
  ADD PRIMARY KEY (`idinventario_almacen`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`idlicencia`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`idmantenimiento`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indices de la tabla `miempresa`
--
ALTER TABLE `miempresa`
  ADD PRIMARY KEY (`idmiempresa`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`idmovimiento`);

--
-- Indices de la tabla `nrolote`
--
ALTER TABLE `nrolote`
  ADD PRIMARY KEY (`idnrolote`);

--
-- Indices de la tabla `periferico`
--
ALTER TABLE `periferico`
  ADD PRIMARY KEY (`idperiferico`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`idprioridad`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`idredes`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `rolmenu`
--
ALTER TABLE `rolmenu`
  ADD PRIMARY KEY (`idrolmenu`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`idseguimiento`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`idsoftware`);

--
-- Indices de la tabla `solucion`
--
ALTER TABLE `solucion`
  ADD PRIMARY KEY (`idsolucion`);

--
-- Indices de la tabla `soluciondetalle`
--
ALTER TABLE `soluciondetalle`
  ADD PRIMARY KEY (`idsoluciondetalle`);

--
-- Indices de la tabla `subtipo`
--
ALTER TABLE `subtipo`
  ADD PRIMARY KEY (`idsubtipo`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idticket`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `tipoticket`
--
ALTER TABLE `tipoticket`
  ADD PRIMARY KEY (`idtipoticket`);

--
-- Indices de la tabla `umedida`
--
ALTER TABLE `umedida`
  ADD PRIMARY KEY (`idumedida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `virtualizacion`
--
ALTER TABLE `virtualizacion`
  ADD PRIMARY KEY (`idvirtualizacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admejecutivo`
--
ALTER TABLE `admejecutivo`
  MODIFY `idadmejecutivo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT de la tabla `admsucursal`
--
ALTER TABLE `admsucursal`
  MODIFY `idadmsucursal` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `idalmacen` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
  MODIFY `idcomprobacion` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `idconfig` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idconfiguracion` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `configuracion2`
--
ALTER TABLE `configuracion2`
  MODIFY `idconfiguracion2` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `iddomicilio` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=273;
--
-- AUTO_INCREMENT de la tabla `dominio`
--
ALTER TABLE `dominio`
  MODIFY `iddominio` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=207;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `idfiles` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `gravedad`
--
ALTER TABLE `gravedad`
  MODIFY `idgravedad` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `infraestructura`
--
ALTER TABLE `infraestructura`
  MODIFY `idinfraestructura` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idinventario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `inventario_almacen`
--
ALTER TABLE `inventario_almacen`
  MODIFY `idinventario_almacen` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `idlicencia` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `idmantenimiento` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1140;
--
-- AUTO_INCREMENT de la tabla `miempresa`
--
ALTER TABLE `miempresa`
  MODIFY `idmiempresa` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `idmovimiento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT de la tabla `nrolote`
--
ALTER TABLE `nrolote`
  MODIFY `idnrolote` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `periferico`
--
ALTER TABLE `periferico`
  MODIFY `idperiferico` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=270;
--
-- AUTO_INCREMENT de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  MODIFY `idprioridad` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `idredes` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `rolmenu`
--
ALTER TABLE `rolmenu`
  MODIFY `idrolmenu` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7984;
--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `idseguimiento` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `idsoftware` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `solucion`
--
ALTER TABLE `solucion`
  MODIFY `idsolucion` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `soluciondetalle`
--
ALTER TABLE `soluciondetalle`
  MODIFY `idsoluciondetalle` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `subtipo`
--
ALTER TABLE `subtipo`
  MODIFY `idsubtipo` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `idticket` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1075;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipoticket`
--
ALTER TABLE `tipoticket`
  MODIFY `idtipoticket` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `umedida`
--
ALTER TABLE `umedida`
  MODIFY `idumedida` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT de la tabla `virtualizacion`
--
ALTER TABLE `virtualizacion`
  MODIFY `idvirtualizacion` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
