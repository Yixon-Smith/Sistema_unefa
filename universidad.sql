-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2022 a las 23:25:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE `ciudadano` (
  `ciudadano_cod` int(11) NOT NULL,
  `ciud_nombres` varchar(100) NOT NULL,
  `ciud_apellidoPate` varchar(50) NOT NULL,
  `ciud_apellidoMate` varchar(50) NOT NULL,
  `ciud_dni` char(8) NOT NULL,
  `ciud_sexo` varchar(9) NOT NULL,
  `ciud_fechaNacimiento` date NOT NULL,
  `ciud_direccion` varchar(250) NOT NULL,
  `ciud_telefono` char(9) NOT NULL,
  `ciud_movil` char(9) NOT NULL,
  `ciud_email` varchar(80) NOT NULL,
  `ciud_fecharegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `ciud_estado` enum('ACTIVO','INACTIVO') NOT NULL,
  `ciud_matricula` int(4) NOT NULL,
  `ciud_sangre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`ciudadano_cod`, `ciud_nombres`, `ciud_apellidoPate`, `ciud_apellidoMate`, `ciud_dni`, `ciud_sexo`, `ciud_fechaNacimiento`, `ciud_direccion`, `ciud_telefono`, `ciud_movil`, `ciud_email`, `ciud_fecharegistro`, `ciud_estado`, `ciud_matricula`, `ciud_sangre`) VALUES
(9, 'YASMIN', 'YASMIN', 'YASMIN', '222', 'F', '2017-10-21', 'YASMIN', '23', '23', 'sdds', '2018-11-21 07:41:23', 'ACTIVO', 0, ''),
(65, 'yixo', 'mendoza', 'smith', '3434343', 'M', '2022-05-18', 'called 54', '34343', '343434', 'yixonfdf', '2022-05-20 17:54:15', 'INACTIVO', 0, ''),
(345, 'yixon', 'smith', 'mendoza', '343434', 'm', '2022-05-25', 'ererefefe', '3435', '343434', 'yytytytt', '2022-05-26 17:57:04', 'INACTIVO', 0, 'O+'),
(346, 'jhghgjh', 'MENDOZA', 'GONZALEZ', '99887', 'M', '2022-04-29', 'calle 2 entre 5', '416553796', '416553796', 'jhjgjkgkjh@', '2022-05-22 18:16:10', 'ACTIVO', 0, '0'),
(347, 'yiyiu', 'tyty', 'rtryt', '456456', 'm', '0000-00-00', 'hfghgfhgf', '465464', '4564345', 'yo@gmail.com', '2022-05-22 18:33:22', 'ACTIVO', 0, 'o+'),
(348, 'fggfhgh', 'MENDOZA', 'GONZALEZ', '5555', 'M', '2022-05-27', 'calle 2 entre 5', '416553796', '416553796', 'tyn@gmail.com', '2022-05-23 03:16:30', 'ACTIVO', 0, ''),
(349, 'fggfhgh', 'MENDOZA', 'GONZALEZ', '55555', 'M', '2022-05-27', 'calle 2 entre 5', '416553796', '416553796', 'tyn@gmail.com', '2022-05-23 03:16:41', 'ACTIVO', 0, ''),
(350, 'gilber', 'lopez', 'gomez', '234321', 'F', '2022-05-26', 'nose onde vivo', '34343', '423424234', 'gil\"gmail.com', '2022-05-23 19:21:23', 'ACTIVO', 0, ''),
(351, 'gilber', 'lopez', 'gomez', '2343216', 'F', '2022-05-26', 'nose onde vivo', '34343', '423424234', 'gil@gmail.com', '2022-05-23 19:22:13', 'ACTIVO', 0, ''),
(352, 'gilber', 'lopez', 'gomez', '23432167', 'F', '2022-05-26', 'nose onde vivo', '34343', '423424234', 'gil@gmail.com', '2022-05-23 19:23:55', 'ACTIVO', 0, ''),
(353, 'gilber', 'lopez', 'gomez', '23432435', 'F', '2022-05-26', 'nose onde vivo', '34343', '423424234', 'gil@gmail.com', '2022-05-23 19:29:07', 'ACTIVO', 0, ''),
(354, 'ertert', 'ertert', 'ertert', '34324', 'F', '2022-05-08', 'edgdfgfd', '416553796', '416553796', 'gi@gmailc.om', '2022-05-23 19:29:49', 'ACTIVO', 0, ''),
(355, 'gilbe', 'dsfsdf', 'sfdsdfsd', '2342', 'F', '2022-05-12', 'dgsdgfgfd', '416553796', '416553796', 'gfgfg@gmail.com', '2022-05-23 19:55:21', 'ACTIVO', 2213, ''),
(356, 'gilbe', 'dsfsdf', 'sfdsdfsd', '23422', 'F', '2022-05-12', 'dgsdgfgfd', '416553796', '416553796', 'gfgfg@gmail.com', '2022-05-23 19:55:35', 'ACTIVO', 2213, ''),
(357, 'gilbe', 'dsfsdf', 'sfdsdfsd', '234226', 'Femenino', '2022-05-12', 'dgsdgfgfd', '416553796', '416553796', 'gfgfg@gmail.com', '2022-05-23 19:57:25', 'ACTIVO', 2213, ''),
(358, 'carepan', 'mendoza', 'GONZALEZ', '5435', 'Femenino', '2022-05-14', 'calle 2 entre 5', '416553796', '416553796', 'yid@gmail.com', '2022-05-23 20:33:06', 'ACTIVO', 2013, ''),
(359, 'carepan', 'mendoza', 'GONZALEZ', '54358', 'Femenino', '2022-05-14', 'calle 2 entre 5', '416553796', '416553796', 'yid@gmail.com', '2022-05-23 20:44:34', 'ACTIVO', 2013, ''),
(360, 'carepan', 'mendoza', 'GONZALEZ', '543589', 'Femenino', '2022-05-14', 'calle 2 entre 5', '416553796', '416553796', 'yid@gmail.com', '2022-05-23 20:44:43', 'ACTIVO', 913, ''),
(361, 'carepan', 'mendoza', 'GONZALEZ', '5435897', 'Femenino', '2022-05-14', 'calle 2 entre 5', '416553796', '416553796', 'yid@gmail.com', '2022-05-23 20:44:55', 'ACTIVO', 913, ''),
(362, 'carepan', 'mendoza', 'GONZALEZ', '54358973', 'Femenino', '2022-05-14', 'calle 2 entre 5', '416553796', '416553796', 'yid@gmail.com', '2022-05-23 20:48:31', 'ACTIVO', 913, ''),
(363, 'tert', 'reter', 'GONZALEZ', '343', 'Masculino', '2022-05-19', 'calle 2 entre 5', '416553796', '416553796', 'dfgdfgf@gmail.com', '2022-05-23 20:49:24', 'ACTIVO', 913, ''),
(364, 'tert', 'reter', 'GONZALEZ', '3438', 'Masculino', '2022-05-19', 'calle 2 entre 5', '416553796', '416553796', 'dfgdfgf@gmail.com', '2022-05-23 20:51:57', 'ACTIVO', 2013, ''),
(365, 'tert', 'reter', 'GONZALEZ', '34384', 'Masculino', '2022-05-19', 'calle 2 entre 5', '416553796', '416553796', 'dfgdfgf@gmail.com', '2022-05-23 20:52:04', 'ACTIVO', 2013, ''),
(366, 'tert', 'reter', 'GONZALEZ', '343842', 'Femenino', '2022-05-19', 'calle 2 entre 5', '416553796', '416553796', 'dfgdfgf@gmail.com', '2022-05-23 20:52:16', 'ACTIVO', 2013, ''),
(367, 'tert', 'reter', 'GONZALEZ', '3438423', 'Femenino', '2022-05-19', 'calle 2 entre 5', '416553796', '416553796', 'dfgdfgf@gmail.com', '2022-05-23 20:56:50', 'ACTIVO', 2013, 'O+'),
(368, 'yixon', 'smith', 'montes', '26399566', 'Masculino', '2022-05-12', 'calle 2 entre 5', '416553796', '416553796', 'yixon2011@gmail.com', '2022-05-23 21:14:43', 'ACTIVO', 1303, 'AB+');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
  ADD PRIMARY KEY (`ciudadano_cod`),
  ADD KEY `cod_ciudona` (`ciud_nombres`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
  MODIFY `ciudadano_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
