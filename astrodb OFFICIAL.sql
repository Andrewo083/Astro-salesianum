-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2023 a las 05:40:06
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
  `id_user` varchar(100) NOT NULL,
  `id_new` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `body` text NOT NULL,
  `school` text NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id_news`, `id_reporter`, `main_image`, `photographer`, `headline`, `drophead`, `date`, `body`, `school`, `Category`) VALUES
(113, 'Ketut@astro.sv', 'Chaleco celebra sus Intramuros 23-Ketut@astro.sv-fotografo-@epicyears!.png', '@epicyears!', 'Chaleco celebra sus Intramuros 23', 'Santa Cecilia celebra a lo grande sus intramuros 2023', '2023-07-26', 'La ciudad de Santa Cecilia se viste de fiesta para conmemorar su tradicional festival de intramuros en este año 2023. Con un ambiente lleno de alegría y entusiasmo, miles de residentes y visitantes se han congregado para ser parte de esta emocionante celebración.\r\n\r\nEl evento reúne una amplia variedad de actividades culturales, como presentaciones de danzas folclóricas y conciertos de música local, que deleitan a los asistentes y resaltan la herencia cultural de la región.\r\n\r\n', 'Colegio Santa Cecilia', 'Eventos Especiales');

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
('Ketut@astro.sv', 'Ketut@astro.sv.png', '123', 'Katut', 'Subiyanto', '+503 7514-8248', 2);

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
  `ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`) VALUES
('rubencitonieto005@gmail.com', 'Rubén Alexander', 'Nieto', '123', '+503 7763-565', 3),
('Salesiano@astro.sv', 'Astro ', 'Salesianum Administration', '123', '-', 1),
('w', 'Rubén Alexander', 'Nieto', '123', '7763', 3);

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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `comment-new` FOREIGN KEY (`id_comment`) REFERENCES `news` (`id_news`),
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
