-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2023 a las 07:20:14
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
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `id_new` int(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id_comment`, `id_user`, `id_new`, `comment`, `date`, `State`) VALUES
(6, 'rubencitonieto005@gmail.com', 113, 'bnm,.nbnkl', '2023-08-10', ''),
(7, 'rubencitonieto005@gmail.com', 113, 'jkhjkgdktug', '2023-08-10', ''),
(8, 'rubencitonieto005@gmail.com', 113, 'cvbn,./', '2023-08-10', ''),
(9, 'rubencitonieto005@gmail.com', 113, 'cvbn,./k', '2023-08-10', ''),
(10, 'rubencitonieto005@gmail.com', 113, 'b n,', '2023-08-10', ''),
(11, 'elias@gmail.com', 113, 'fghgfds', '2023-08-10', ''),
(12, 'elias@gmail.com', 113, 'mnnm\r\n', '2023-08-10', 'active');

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
  `school` text NOT NULL,
  `Category` text NOT NULL,
  `BodyTwo` text NOT NULL,
  `BodyThree` text NOT NULL,
  `BodyFour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id_news`, `id_reporter`, `main_image`, `photographer`, `headline`, `drophead`, `date`, `BodyOne`, `school`, `Category`, `BodyTwo`, `BodyThree`, `BodyFour`) VALUES
(113, 'Ketut@astro.sv', 'Chaleco celebra sus Intramuros 2023!-Ketut@astro.sv-fotografo-@epicyears!.png', '@epicyears!', 'Chaleco celebra sus Intramuros 2023!', 'Santa Cecilia celebra a lo grande sus intramuros 2023', '2023-07-26', 'En un avance sorprendente, científicos hallan pruebas de cambio climático en deshielos árticos. Datos satelitales revelan reducción drástica de hielo, confirmando tendencias alarmantes. Experto climático advierte riesgos para ecosistemas y nivel del mar.1', 'Colegio Santa Cecilia', 'Eventos Especiales', 'Comunidades costeras en alerta ante inminente aumento del nivel del mar. Investigadores instan a medidas globales inmediatas para frenar impacto. Gobiernos debaten políticas ambientales mientras activistas exigen acciones concretas.2', 'Debido a drásticos cambios, animales árticos enfrentan pérdida de hábitat y recursos. Esfuerzos por preservar ecosistemas se intensifican; biólogos preocupados por futuro de especies en peligro. Turismo sustentable se plantea como vía para concienciar y financiar conservación.3', 'Debido a drásticos cambios, animales árticos enfrentan pérdida de hábitat y recursos. Esfuerzos por preservar ecosistemas se intensifican; biólogos preocupados por futuro de especies en peligro. Turismo sustentable se plantea como vía para concienciar y financiar conservación.4');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reporter`
--

INSERT INTO `reporter` (`Email`, `ProfileImage`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`) VALUES
('Ketut@astro.sv', 'Ketut@astro.sv.png', '123', 'Katut', 'Subiyanto', '+503 7514-8248', 2);

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
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_new` (`id_new`);

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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment-new` FOREIGN KEY (`id_new`) REFERENCES `news` (`id_news`),
  ADD CONSTRAINT `comment-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`Email`);

--
-- Filtros para la tabla `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news-journalist` FOREIGN KEY (`id_reporter`) REFERENCES `reporter` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
