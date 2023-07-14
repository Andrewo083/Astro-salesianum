-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2023 a las 13:54:11
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
-- Estructura de tabla para la tabla `comment`
--
-- Error leyendo la estructura de la tabla astrodb.comment: #1932 - Table &#039;astrodb.comment&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla astrodb.comment: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `astrodb`.`comment`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_reporter` varchar(12) NOT NULL,
  `main_image` text DEFAULT NULL,
  `headline` text NOT NULL,
  `drophead` text NOT NULL,
  `date` date NOT NULL,
  `body` text NOT NULL,
  `school` text NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id_news`, `id_reporter`, `main_image`, `headline`, `drophead`, `date`, `body`, `school`, `Category`) VALUES
(1, 'rubencitonie', './IMG/primeraimagen.jpg', 'San Jose Gana En Futball.', 'San Jose gana la Liga Salesiana en Futball', '2023-07-11', 'En una emocionante final de la Liga Salesiana de Fútbol, el equipo de San Jose se coronó como el campeón indiscutible, dejando en alto el nombre de su institución. El encuentro, disputado en el estadio principal de la ciudad, fue presenciado por una multitud entusiasta que se congregó para apoyar a sus respectivos equipos.\r\n\r\nDesde el pitido inicial, se pudo percibir la intensidad y el nivel de juego mostrado por ambas escuadras. San Jose, con su estilo de juego ofensivo y posesión de balón, demostró una vez más su dominio táctico y destreza individual. Por otro lado, el equipo rival, cuyo nombre ya es parte de la historia del torneo, no se quedó atrás y presentó una defensa férrea y una gran capacidad para contraatacar.\r\n\r\nEl primer tiempo fue sumamente reñido, con ocasiones de gol para ambos equipos. Sin embargo, fue San Jose quien logró abrir el marcador gracias a un espectacular remate de larga distancia que dejó sin opciones al arquero rival. La afición estalló en júbilo al ver a su equipo tomando la ventaja, mientras el equipo contrario redoblaba sus esfuerzos para igualar el marcador.\r\n\r\nEn la segunda mitad, la intensidad no decayó y los jugadores de ambos equipos se entregaron al máximo en busca de la gloria. San Jose, consciente de la importancia de mantener la ventaja, desplegó una defensa sólida y una presión constante en el centro del campo. Esto dificultó el juego del equipo rival, que luchaba por encontrar espacios y generar peligro en el área contraria.\r\n\r\nA medida que el tiempo avanzaba, el equipo perdedor se lanzó con todo en busca del empate. Sin embargo, la defensa de San Jose se mantuvo firme, repeliendo los intentos de ataque y mostrando una gran coordinación y comunicación en la zaga. Además, el arquero de San Jose se convirtió en una figura clave del encuentro, realizando espectaculares atajadas que mantuvieron el marcador a favor de su equipo.\r\n\r\nFinalmente, el pitido final resonó en el estadio, desatando la euforia y la celebración de los jugadores y la afición de San Jose. Con esta victoria, el equipo se consagra como el nuevo campeón de la Liga Salesiana de Fútbol, un logro que quedará grabado en la historia de la institución y en el corazón de sus seguidores.\r\n\r\nTras la final, el entrenador de San Jose expresó su satisfacción por el desempeño de sus jugadores y el trabajo realizado durante toda la temporada. Asimismo, resaltó la importancia de la disciplina, la dedicación y el espíritu de equipo como los pilares fundamentales del éxito alcanzado.\r\n\r\nCon esta victoria, San Jose demuestra una vez más su hegemonía en el fútbol local y se posiciona como un rival temido y respetado en futuros torneos. Sin duda, esta conquista será recordada por mucho tiempo, dejando una huella imborrable en la historia del deporte y en el corazón de la comunidad salesiana.', 'San Jose', 'Deporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporter`
--

CREATE TABLE `reporter` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(110) NOT NULL,
  `LastName` varchar(110) NOT NULL,
  `PhoneNumber` int(110) NOT NULL,
  `ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reporter`
--

INSERT INTO `reporter` (`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`) VALUES
('estudiante20180326@cdb.edu.sv', 'bAPxriDG', '', '', 0, 0),
('rn1354491@pae.ues.edu.sv', 'ruben018', '', '', 0, 0),
('rubencitonieto005@gmail.com', '23AoUt1968', '', '', 0, 0),
('soniamm.nieto@outlook.com', '123', '123', '123', 123, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Email` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `LastName` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`) VALUES
('rubencitonieto005@gmail.com', 'RUb[en', 'Nirot', '123', 123, 2);

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
