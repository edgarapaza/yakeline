CREATE DATABASE catalogo;
USE catalogo;
-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 16:37:38
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `idcaja` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `caja` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fondo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `seccion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaextremainico` char(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaextremafinal` char(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `expedienteinicio` int(11) NOT NULL,
  `expedientefinal` int(11) NOT NULL,
  `fecCreated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) DEFAULT 1,
  `fecCierre` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`idcaja`, `idpersonal`, `caja`, `fondo`, `seccion`, `fechaextremainico`, `fechaextremafinal`, `expedienteinicio`, `expedientefinal`, `fecCreated`, `estado`, `fecCierre`) VALUES
(1, 1, 'Caja 006', 'intendencia', 'Causa Civil', '0000', '0000', 0, 0, '2020-03-10 10:28:00', 1, '2020-03-10 10:28:00'),
(2, 2, 'Caja  006', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-04 11:59:00', 1, '2020-03-04 11:59:00'),
(3, 3, 'Caja 007', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-04 11:59:09', 1, '2020-03-04 11:59:09'),
(4, 4, 'Caja 008', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-04 11:57:20', 1, '2020-03-04 11:57:20'),
(5, 5, 'Caja 009', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-04 11:57:20', 1, '2020-03-04 11:57:20'),
(6, 6, 'Caja 009', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-04 11:59:26', 1, '2020-03-04 11:59:26'),
(7, 0, '', '', '', '0000', '0000', 0, 0, '2020-03-09 18:00:56', 0, '2020-03-09 18:00:56'),
(8, 0, '', '', '', '0000', '0000', 0, 0, '2020-03-09 18:01:40', 0, '2020-03-09 18:01:40'),
(9, 0, '', '', '', '0000', '0000', 0, 0, '2020-03-09 18:04:19', 0, '2020-03-09 18:04:19'),
(10, 8, 'Caja 0005', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-09 18:05:52', 0, '2020-03-09 18:05:52'),
(11, 8, 'few', 'intendencia', 're', '0000', '0000', 0, 0, '2020-03-09 18:17:53', 0, '2020-03-09 18:17:53'),
(12, 10, 'Caja 0005', 'intendencia', 'causa civil', '0000', '0000', 0, 0, '2020-03-09 19:10:40', 0, '2020-03-09 19:10:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE `catalogos` (
  `idcatalogo` int(11) NOT NULL,
  `idcaja` int(11) NOT NULL,
  `codreferencia` varchar(30) DEFAULT NULL,
  `seccion` varchar(20) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `fecdocumento` date DEFAULT NULL,
  `nivdescrip` varchar(50) DEFAULT NULL,
  `volunimed` varchar(50) DEFAULT NULL,
  `productor` varchar(50) DEFAULT NULL,
  `formaingreso` varchar(80) DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  `dimensiones` varchar(50) DEFAULT NULL,
  `conservacion` char(2) DEFAULT NULL,
  `instdescrip` varchar(20) DEFAULT NULL,
  `estadoconservacion` varchar(20) DEFAULT NULL,
  `copias` varchar(20) DEFAULT NULL,
  `notas` varchar(255) DEFAULT NULL,
  `persdescripcion` int(11) DEFAULT NULL,
  `persdirector` int(11) DEFAULT NULL,
  `persrevisor` int(11) DEFAULT NULL,
  `fecdescripcion` date DEFAULT NULL,
  `fecfinalizacion` date DEFAULT NULL,
  `fecCreate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) DEFAULT 1,
  `obs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogos`
--

INSERT INTO `catalogos` (`idcatalogo`, `idcaja`, `codreferencia`, `seccion`, `titulo`, `fecdocumento`, `nivdescrip`, `volunimed`, `productor`, `formaingreso`, `contenido`, `dimensiones`, `conservacion`, `instdescrip`, `estadoconservacion`, `copias`, `notas`, `persdescripcion`, `persdirector`, `persrevisor`, `fecdescripcion`, `fecfinalizacion`, `fecCreate`, `estado`, `obs`) VALUES
(1, 1, 'PE/ARP/AH/INT/E-001', 'causa civil', 'Embargo y remate de sitio y casas', '1805-05-04', 'Unidad documental compuesta', '11 Folios', 'Maria Micaela Mogrovejo por Esteban Mogrovejo', 'Recuperación de la Prefectura de Puno.\r\nAño – 1995', 'Doña Micaela Mogrovejo, vecina de esta villa, mujer legitima de don Martin Manuel de Rivarola, con cuya venia y licencia comparece Ante el señor Gobernador Intendente siguiendo acción ejecutiva contra la casa del finado don Pedro Quinteros por la cantidad adeudada de ciento once soles.', 'Dimensiones, 21.59 cm x 31.50 cm.', 'si', 'Catálogo', 'regular', 'No existe.', 'Expediente sin foliar\r\nLos bordes de las hojas están deteriorados.', 4, 3, 4, '2019-10-11', '2020-09-18', '2020-03-04 12:15:42', 1, 'sin observaciones\r\n'),
(2, 2, 'PE/ARP/AH/INT/E-011', 'causa civil', 'Libertad para indio preso..', '1805-08-23', 'Unidad documental compuesta', '003 Folios un folio en blanco', 'Santos chura indio originario.', 'Recuperación de la Prefectura de Puno.\r\nAño – 1995', 'Santos Chura indio originario del pueblo de acora, manifiesta que se halla preso en esta cárcel hace tres días solo por el hecho de entregar una carta que me suplico un indio ambrocio truxillo, que le había entregado su cura de Desaguadero solicito que el sujeto declare quien le dio la carta para que conduzca y se me de libertad por no tener culpa alguna.', 'Dimensiones, 21.59 cm x 31.50 cm.', 'si', 'Catálogo', 'regular', 'No existe.', 'Expediente sin foliar\r\nLos bordes de las hojas están deteriorados y la hojas manchadas.', 5, 4, 5, '2019-10-11', '2020-04-02', '2020-03-04 12:23:38', 1, 'sin observaciones\r\n'),
(3, 3, 'PE/ARP/AH/INT/E-025', 'causa civil', 'saldo corriente del deudor don Rafael Zamudio', '1806-01-04', 'Unidad documental compuesta', '06 Folios', 'Gregorio Soloaga.', 'Recuperación de la Prefectura de Puno.\r\nAño – 1995', 'Gregorio Soloaga teniente de granaderos de las milicias provinciales de la capital de Buenos Aires y residente en el pueblo de Huancané por la persona de mi confianza  Parezco y digo:que por la cuenta del saldo corriente que en debida forma presento y juro, me es deudor don Rafael Zamudio de la cantidad de setecientos noventa pesos y seis reales devida y sin pagar hasta la fecha, resultante del contrato que tuvimos sobre sus labores y trapiche de zurupana, como de suplementos que le hice pido se sirva mandar comparecer dicho Zamudio para que reconozca todas las partidas de la cuenta..', 'Dimensiones, 21.59 cm x 31.50 cm.', 'si', 'Catálogo', 'regular', 'No existe.', 'Expediente sin foliar\r\nLos bordes de las hojas están deteriorados.', 1, 2, 1, '2019-10-11', '2020-04-02', '2020-03-04 12:27:50', 1, 'sin observaciones\r\n\r\n'),
(4, 4, 'PE/ARP/AH/INT/E-027', 'causa civil', 'Cuentas de la sociedad de desagüe y labores de la mina cancharani.', '1806-03-13', 'Unidad documental compuesta', '03 Folios', 'Cayetano Martínez del campo', 'Recuperación de la Prefectura de Puno.\r\nAño – 1995', 'Cayetano Martínez del Campo, cura de la doctrina de San Miguel de Ilave, como accionista de la sociedad formada para el desagüe y laboreo de la mina nombrada Cancharani,  interpone demanda contra José María Santos Rubio para que rinda cuentas de la sociedad y mientras tanto el esclavo, como las demás especies que se hallan en poder de don  José María Coronel, se aseguren y depositen en persona de conocido abono bajo el respectivo inventarios y demás formalidades de estilo. Seguida ante el señor Gobernador Intendente.', 'Dimensiones, 21.59 cm x 31.50 cm.', 'si', 'Catálogo', 'regular', 'No existe.', 'Expediente sin foliar\r\nLos bordes de las hojas están deteriorados.', 2, 1, 2, '2019-10-11', '2019-12-31', '2020-03-04 12:36:39', 1, 'sin observaciones \r\n'),
(5, 5, 'PE/ARP/AH/INT/E-028', 'causa civil', 'Devolución de pesos por tierras de sallalli.', '1806-03-24', 'Unidad documental compuesta', '017 Folios', 'Juana Flores.', 'Recuperación de la notaria de julio Garnica Rosado.\r\nAño – 1990.', 'Doña Juana Flores, vecina del pueblo de Capachica, dice que en los años pasados de mil ochocientos cinco, en veinte nueve de enero, se le  remataron las tierras de sallalli citas en capachica, y que el año pasado el comisionado don Manuel ·Susunaga, con el protector don Manuel león, se presentaron para la devolución  de las tierras, me las quitaron  las tierras y se las dieron a los indios de aquella doctrina, ocurro vuestra señoría para que mande a los señores ministros de estas reales arcas me entreguen inmediatamente los pesos que tengo obligados y otros que también me deben pagar..', 'Dimensiones, 21.59 cm x 31.50 cm.', NULL, 'Catálogo', 'regular', 'No existe.', 'Expediente sin foliar\r\nLos bordes de las hojas están deteriorados.\r\n', 4, 5, 4, '2019-10-11', '2019-12-31', '2020-03-04 12:36:39', 1, 'sin observaciones'),
(12, 1, 'e', 're', 're', '2020-03-04', 'selected', 'te', 'erw', 'sfd', ' aq', 'ewr', 'rw', 'sdf', 'e', 'erw', 'erw', 0, 0, 0, '2020-03-26', '2020-03-11', '2020-03-06 17:38:37', 0, 'sqw'),
(15, 1, 'e', 'qqqq', 'qqq', '2020-03-03', '', 'qqqqqq', 'qqqqq', 'qqqq', ' qqqqqq', 'qqqqqqq', 'qq', 'qqqqq', 'qqqqqq', 'qqqqqq', 'qqqqqq', 0, 0, 0, '2020-03-13', '2020-03-26', '2020-03-09 19:06:11', 1, 'qqq'),
(16, 1, 'PE/ARP/ e /INT/ e', 'causa civil', 'qqq', '2020-03-13', '', 'te', 'qqqqq', 'qqqq', ' qqqqqqqqq', 'qqqqqqq', 'qq', 'qqqqq', 'qqqqqq', 'qqqqqq', 'qqqqqq', 0, 0, 0, '2020-03-27', '2020-03-14', '2020-03-10 14:34:06', 1, 'qqqqq'),
(18, 6, 'PE/ARP/ caja 002 /INT/ caja 00', 'causa civil', 'aaaaaaaaa', '2020-02-25', '1', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', ' aaaaaaaaaaaaaaaa', 'aaaaaaa', 'aa', 'aaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaa', 2, 2, 2, '2020-02-25', '2020-02-26', '2020-03-10 14:39:24', 1, 'aaaaaaaaaaa'),
(19, 2, 'PE/ARP/ caja 002 /INT/ caja 00', 'causa civil', '', '0000-00-00', 'Unidad Documental Compuesta', '', '', '', ' ', '', '', '', '', '', '', 0, 0, 0, '0000-00-00', '0000-00-00', '2020-03-10 14:41:31', 0, ''),
(20, 1, 'PE/ARP/ caja 002 /INT/ caja 00', '', '', '0000-00-00', 'Unidad Documental Simple', '', '', '', ' ', '', '', '', '', '', '', 0, 0, 0, '0000-00-00', '0000-00-00', '2020-03-10 14:42:05', 0, ''),
(21, 3, 'PE/ARP/ caja 002 /INT/ caja 00', '', '', '0000-00-00', 'Unidad Documental Compuesta', '', '', '', ' ', '', '', '', '', '', '', 0, 0, 0, '0000-00-00', '0000-00-00', '2020-03-10 14:44:45', 0, ''),
(22, 2, 'PE/ARP/AH/INT/44', '', '', '0000-00-00', 'Unidad Documental Compuesta', '', '', '', ' ', '', '', '', '', '', '', 0, 0, 0, '0000-00-00', '0000-00-00', '2020-03-10 14:48:12', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `idfuncion` int(11) NOT NULL,
  `funcion` varchar(45) NOT NULL,
  `idpersonal` int(11) NOT NULL,
  `fecinicio` date NOT NULL,
  `feccese` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`idfuncion`, `funcion`, `idpersonal`, `fecinicio`, `feccese`) VALUES
(1, 'Revisor', 2, '2020-03-04', '2020-03-25'),
(2, 'Catalogacion', 3, '2020-03-04', '2020-03-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `state_usu` tinyint(1) DEFAULT 1,
  `fecCreate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idlogin`, `idpersonal`, `username`, `passwd`, `state_usu`, `fecCreate`) VALUES
(1, 1, 'personal1', '123\r\n', 1, '2020-03-04 11:44:14'),
(2, 2, 'personal2', '123', 1, '2020-03-04 11:44:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE `revision` (
  `idrevision` int(11) NOT NULL,
  `idcatalogo` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `feccreacion` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecupdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`idcaja`);

--
-- Indices de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`idcatalogo`),
  ADD KEY `fk_catalogo_caja_ids` (`idcaja`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`idfuncion`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`idrevision`),
  ADD KEY `fk_revision_catalogos_idx` (`idcatalogo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `idcaja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  MODIFY `idcatalogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `idfuncion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
  MODIFY `idrevision` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD CONSTRAINT `fk_catalogo_caja` FOREIGN KEY (`idcaja`) REFERENCES `caja` (`idcaja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `revision`
--
ALTER TABLE `revision`
  ADD CONSTRAINT `fk_revision_catalogos` FOREIGN KEY (`idcatalogo`) REFERENCES `catalogos` (`idcatalogo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
