-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2023 a las 21:29:07
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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `State` text NOT NULL
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
  `BodyOne` text NOT NULL,
  `BodyTwo` text NOT NULL,
  `BodyThree` text NOT NULL,
  `BodyFour` text NOT NULL,
  `school` text NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id_news`, `id_reporter`, `main_image`, `photographer`, `headline`, `drophead`, `date`, `BodyOne`, `BodyTwo`, `BodyThree`, `BodyFour`, `school`, `Category`) VALUES
(113, 'Ketut@astro.sv', 'Chaleco celebra sus Intramuros 2023!-Ketut@astro.sv-fotografo-@epicyears!.png', '@epicyears!', 'Chaleco celebra sus Intramuros 2023!', 'Santa Cecilia celebra a lo grande sus intramuros 2023', '2023-07-26', 'Chaleco, la vibrante comunidad cultural, celebró con entusiasmo su evento anual, los Intramuros 2023. Durante cuatro emocionantes días, las calles se llenaron de música, arte y diversión para toda la familia. Los residentes disfrutaron de conciertos, exposiciones de artistas locales y una gran variedad de actividades', 'Los talentosos artistas de Chaleco exhibieron sus obras en una galería al aire libre, convirtiendo la ciudad en un lienzo gigante. Los asistentes apreciaron la diversidad de estilos y técnicas, desde pinturas vibrantes hasta instalaciones impactantes. La cultura floreció en cada esquina, inspirando a jóvenes y mayores por igual.', ' La música llenó el aire con una mezcla de géneros, desde bandas indie emergentes hasta artistas consolidados. Los escenarios improvisados en plazas y parques reunieron a multitudes entusiastas que bailaron al ritmo de las melodías. Los Intramuros 2023 se convirtieron en un festival de sonidos, uniéndolos en un abrazo colectivo de alegría.', ' Los Intramuros no solo brindaron entretenimiento, sino que también fortalecieron los lazos comunitarios. Los negocios locales prosperaron con el aumento de visitantes, y la energía positiva continuará inspirando a Chaleco durante todo el año. Los residentes ya esperan ansiosos los Intramuros 2024, una tradición que celebra la vitalidad de su amada ciudad.', 'Colegio Santa Cecilia', 'Eventos Especiales'),
(114, 'Ketut@astro.sv', 'Maria Auxiliadora celebra sus Intramuros 2023-Ketut@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Maria Auxiliadora celebra sus Intramuros 2023', 'Las jovenes Marianas celebran su fiesta despues de la pandemia', '2023-08-02', 'Las Marianas, llenas de alegría, finalmente se reunieron para celebrar tras tiempos difíciles. Con sonrisas radiantes, compartieron abrazos y risas, reafirmando su vínculo. La fiesta, llena de esperan', ' La fiesta marcó un hito en la recuperación de la normalidad. Las Marianas miran hacia el futuro con esperanza, decididas a reconstruir y fortalecer su comunidad. Esta celebración es un testimonio de ', 'Colegio Maria Auxiliadora', 'Eventos Especiales', ' Después de largos meses de distanciamiento, la emoción era palpable. Amigos y familiares se abrazaron con ternura, valorando cada momento. Las jóvenes Marianas compartieron historias de superación y ', 'La fiesta fue un festín culinario y musical. Sabores locales deleitaron los paladares, mientras que la música en vivo animaba la noche. Bailes y risas resonaron en todos los rincones, recordando la vi');

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
  `ROL` int(11) NOT NULL,
  `ProfileImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`, `ProfileImage`) VALUES
('ediwn.platero@gmail.com', 'Edwin', 'Platero Platero', '123', '+503 7849-6354', 3, ''),
('rubencitonieto005@gmail.com', 'Rubén Alexander', 'Nieto', '123', '+503 7763-565', 3, ''),
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
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

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
