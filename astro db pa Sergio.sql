-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2023 a las 07:16:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `astrodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Email` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `ProfileImage` text NOT NULL,
  `LastName` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` char(14) NOT NULL,
  `ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Email`, `Name`, `ProfileImage`, `LastName`, `Password`, `PhoneNumber`, `ROL`) VALUES
('ediwn.platero@gmail.com', 'Edwin', '', 'Platero Platero', '123', '+503 7849-6354', 3),
('elias@gmail.com', 'Elias', 'lawyer2.png', 'Giron', '123', '+503 7898-6542', 3),
('rubencitonieto005@gmail.com', 'Rubén Alexander', '', 'Nieto', '123', '+503 7763-565', 3),
('Salesiano@astro.sv', 'Astro ', '', 'Salesianum Administration', '123', '-', 1),
('w', 'Rubén Alexander', '', 'Nieto', '123', '7763', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
