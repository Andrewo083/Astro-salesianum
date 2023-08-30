-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2023 a las 02:26:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

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
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `id_reporter` varchar(100) DEFAULT NULL,
  `id_new` int(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `hour` time NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id_comment`, `id_user`, `id_reporter`, `id_new`, `comment`, `date`, `hour`, `State`) VALUES
(3, 'rubencitonieto005@gmail.com', NULL, 115, 'er', '2023-08-16', '00:00:00', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_reporter` varchar(100) NOT NULL,
  `main_image` text DEFAULT NULL,
  `photographer` varchar(100) NOT NULL,
  `headline` text NOT NULL,
  `drophead` text NOT NULL,
  `date` date NOT NULL,
  `BodyOne` text NOT NULL,
  `BodyTwo` text NOT NULL,
  `BodyThree` text NOT NULL,
  `BodyFour` text NOT NULL,
  `school` text NOT NULL,
  `Category` text NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id_news`, `id_reporter`, `main_image`, `photographer`, `headline`, `drophead`, `date`, `BodyOne`, `BodyTwo`, `BodyThree`, `BodyFour`, `school`, `Category`, `State`) VALUES
(115, 'isabella@astro.sv', 'Ex-alumnas Marianas celebran su Flor a Maria -isabella@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Ex-alumnas Marianas celebran su Flor a Maria ', 'El colegio Maria Auxiliadora recibio una gratificante visita con sus ex-alumnas en su celebracion', '2023-08-09', 'El Colegio María Auxiliadora recibió a exalumnas con alegría en su celebración. El reencuentro fue lleno de emoción y gratos recuerdos compartidos. Las antiguas alumnas, ahora destacadas en distintos campos, demostraron el impacto duradero de la educación recibida. El evento fortaleció los lazos y dejó huella en la historia de la institución.', 'El Colegio María Auxiliadora recibió a exalumnas con alegría en su celebración. El reencuentro fue lleno de emoción y gratos recuerdos compartidos. Las antiguas alumnas, ahora destacadas en distintos campos, demostraron el impacto duradero de la educación recibida. El evento fortaleció los lazos y dejó huella en la historia de la institución.', 'El Colegio María Auxiliadora recibió a exalumnas con alegría en su celebración. El reencuentro fue lleno de emoción y gratos recuerdos compartidos. Las antiguas alumnas, ahora destacadas en distintos campos, demostraron el impacto duradero de la educación recibida. El evento fortaleció los lazos y dejó huella en la historia de la institución.', 'El Colegio María Auxiliadora recibió a exalumnas con alegría en su celebración. El reencuentro fue lleno de emoción y gratos recuerdos compartidos. Las antiguas alumnas, ahora destacadas en distintos campos, demostraron el impacto duradero de la educación recibida. El evento fortaleció los lazos y dejó huella en la historia de la institución.', 'Colegio Maria Auxiliadora', 'Cultura', 'Active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporter`
--

CREATE TABLE `reporter` (
  `Email` varchar(100) NOT NULL,
  `ProfileImage` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(110) NOT NULL,
  `LastName` varchar(110) NOT NULL,
  `PhoneNumber` char(14) NOT NULL,
  `ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporter`
--

INSERT INTO `reporter` (`Email`, `ProfileImage`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`) VALUES
('isabella@astro.sv', 'isabella@astro.sv.png', '123', 'Isabella', 'Garcia', '  7514-8248', 2),
('Ketut@astro.sv', 'Ketut@astro.sv.png', '123', 'Katut', 'Subiyanto', '  7514-8248', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Email` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `LastName` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` char(14) NOT NULL,
  `ROL` int(11) NOT NULL,
  `ProfileImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`, `ProfileImage`) VALUES
('ediwn.platero@gmail.com', 'Edwin', 'Platero Platero', '123', '  7849-6354', 3, ''),
('rubencitonieto005@gmail.com', 'Rubén Alexander', 'Nieto', '123', '  7763-565', 3, ''),
('Salesiano@astro.sv', 'Astro ', 'Salesianum Administration', '123', '-', 1, ''),
('w', 'Rubén Alexander', 'Nieto', '123', '7763', 3, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_new` (`id_new`),
  ADD KEY `comment-reporter` (`id_reporter`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_reporter` (`id_reporter`);

--
-- Indices de la tabla `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`Email`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment-reporter` FOREIGN KEY (`id_reporter`) REFERENCES `reporter` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news-comment` FOREIGN KEY (`id_new`) REFERENCES `news` (`id_news`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news-journalist` FOREIGN KEY (`id_reporter`) REFERENCES `reporter` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
