-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2025 a las 12:05:18
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
-- Base de datos: `departamentos`
--

CREATE DATABASE IF NOT EXISTS `departamentos`
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE `departamentos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `dept_no` int NOT NULL,
  `dnombre` varchar(40) NOT NULL,
  `loc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`dept_no`, `dnombre`, `loc`) VALUES
(12, 'www', 'wwww'),
(17, 'nuevo', 'tala'),
(20, 'Departamento de Desarrollo', 'Barcelona'),
(30, 'Departamento de Recursos Humanos', 'Almería'),
(34, '3eee', 'eee'),
(40, 'Departamento de Finanzas', 'Santander'),
(50, 'Departamento de Marketing', 'Talavera de la Reina'),
(56, 'EEE', 'TAA'),
(60, 'Departamento de Sistemas', 'Málaga'),
(70, 'Departamento de Comunicación', 'Sevilla'),
(80, 'Departamento de Diseño', 'Valencia'),
(90, 'Departamento de Recursos', 'Murcia'),
(100, 'Departamento de Relaciones Públicas', 'Alicante'),
(110, 'Departamento 1º DAW2', 'TALAVERA'),
(120, 'ESTADISTICA', 'RIBERA DEL TAJO'),
(210, 'ESTADISTICA3', 'RIBERA DEL TAJO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`dept_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
