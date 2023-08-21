-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2023 a las 06:35:17
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
(5, 'rubencitonieto005@gmail.com', NULL, 116, 'La Batucada Don Bosco 2018 evoca en mí un cúmulo de emociones y recuerdos vibrantes. Fue un día en el que la música se convirtió en el lenguaje que trascendió barreras y unió a la comunidad en una experiencia única. Los tambores resonaron con un ritmo contagioso, y cada golpe de tambor parecía sincronizar corazones y almas en una danza colectiva de alegría y armonía.', '2023-08-19', '20:29:00', 'active'),
(6, 'rubencitonieto005@gmail.com', NULL, 117, 'Los chalecos en las fiestas patronales de Santa Tecla son mucho más que simples prendas; son testimonios vivos de una rica historia cultural y espiritual. Estas coloridas vestimentas no solo añaden belleza visual a las celebraciones, sino que también encierran en sí mismas la esencia de la comunidad, la devoción y la tradición. Cada hilo y diseño de los chalecos cuenta una historia, conectando el pasado con el presente y forjando la identidad colectiva. Es fascinante cómo estas prendas pueden evocar una sensación de arraigo y pertenencia, convirtiéndose en poderosos símbolos que trascienden el tiempo y resuenan en los corazones de todos los que participan en las festividades.', '2023-08-19', '20:37:00', 'active'),
(8, 'rubencitonieto005@gmail.com', NULL, 116, 'fdgdhjgkhljñk', '2023-08-21', '21:49:00', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_reporter` varchar(100) DEFAULT NULL,
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
(116, NULL, 'Recordamos la Batucada Don Bosco 2018!-isabella@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Recordamos la Batucada Don Bosco 2018!', 'Recordamos la Batucada Don Bosco 2018: Un Ritmo Inolvidable que Resuena en el Tiempo', '2023-08-08', 'El recuerdo de la Batucada Don Bosco 2018 sigue latiendo en nuestra memoria. Aquel año, la música y el ritmo se fusionaron en un evento que unió a personas de todas las edades. Los tambores resonaron con pasión mientras los artistas compartían su talento en un escenario lleno de energía. Esta celebración musical dejó una huella imborrable en nuestras almas, recordándonos la importancia de la músic', 'La Batucada Don Bosco 2018 trascendió las notas musicales para convertirse en un encuentro de comunidad y armonía. Familias, amigos y amantes de la música se unieron para disfrutar de un día lleno de ritmo y emoción. Los tambores no solo crearon melodías pegajosas, sino también un ambiente de camaradería. Años después, recordamos con cariño cómo los latidos de los tambores crearon conexiones durad', 'Aunque han transcurrido años desde la Batucada Don Bosco 2018, su legado perdura en cada golpe de tambor. Aquel evento no solo fue un espectáculo, sino una experiencia que nos enseñó sobre la importancia de compartir la música y la alegría. Los recuerdos de los ritmos contagiosos y las sonrisas compartidas nos inspiran a mantener viva la pasión por la música y a crear momentos inolvidables.', 'La Batucada Don Bosco 2018 nos recordó que la música es una fuerza que une a las personas en un solo corazón latente. Aquel día, la música nos hizo sentir vivos y conectados. A medida que avanzamos en el tiempo, llevamos con nosotros los ecos de aquel evento, inspirados a seguir bailando al ritmo de la vida. La Batucada Don Bosco 2018 no solo fue un evento, sino un capítulo que sigue influenciando', 'Colegio Don Bosco', 'Cultura', 'Active'),
(117, 'Ketut@astro.sv', 'Chalecos celebran las fiestas patronales de Santa Tecla!-Ketut@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Chalecos celebran las fiestas patronales de Santa Tecla!', 'Chalecos: Alegría y Tradición en las Fiestas Patronales de Santa Tecl', '2023-03-05', 'Los chalecos resplandecen en las fiestas de Santa Tecla, cargando con siglos de historia. Estas prendas, con sus colores y diseños distintivos, son mucho más que meros accesorios; representan una herencia cultural que une a la comunidad en torno a la devoción y la celebración.', 'Cada hilo tejido en los chalecos cuenta una historia. Estos atuendos tradicionales conectan el pasado con el presente, honrando las raíces y el legado de quienes vinieron antes. En cada fiesta, los chalecos se convierten en una manifestación tangible de la continuidad cultural y espiritual que se ha transmitido de generación en generación.', 'Los chalecos no solo embellecen las calles, también infunden un sentido de identidad y pertenencia en los corazones de quienes los visten. En medio de la festividad, se convierten en un símbolo de unidad, recordándonos que somos parte de algo más grande que nosotros mismos: una comunidad arraigada en la devoción y la celebración.', 'La visión de multitudes enfundadas en chalecos durante las fiestas patronales de Santa Tecla es un festín para los sentidos. Los colores, patrones y texturas evocan emociones de alegría y celebración. Los chalecos no solo visten a la comunidad, sino que también visten la festividad misma, convirtiéndola en un caleidoscopio de cultura, fe y tradición.', 'Colegio Santa Cecilia', 'Cultura', 'Active'),
(118, 'Ketut@astro.sv', 'Las Jovenes de la Promocion Ricaldone celebra su Flor a Maria!-Ketut@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Las Jovenes de la Promocion Ricaldone celebra su Flor a Maria!', 'Jóvenes de la Promoción Ricaldone Celebran su \"Flor a María\": Un Homenaje Inspirador', '2023-05-28', 'Las Jóvenes de la Promoción Ricaldone han traído a la vida una tradición enriquecedora: \"Flor a María\". Este evento no solo honra a la Virgen María, sino que también refleja la vitalidad y el compromiso espiritual de la juventud. Cada año, las jóvenes se unen en un gesto de fe y gratitud, compartiendo flores como símbolo de admiración y respeto.', '\"Flor a María\" va más allá de la simple presentación de flores; es un acto que teje lazos espirituales entre las jóvenes y su fe. La belleza efímera de las flores encuentra un eco en la devoción sincera de estas jóvenes, quienes encuentran en este gesto una manera poderosa de expresar su conexión con lo divino y con su comunidad.', 'La celebración \"Flor a María\" trasciende generaciones, transmitiendo una herencia espiritual que perdura. Al unir tradición y juventud, este evento inspira a las futuras generaciones a encontrar significado en la conexión con la Virgen María y en la expresión de la devoción. La fragancia de las flores y la camaradería espiritual se convierten en semillas de inspiración para el futuro.', 'En cada pétalo ofrecido, se encuentra un homenaje cargado de significado y cariño. \"Flor a María\" no solo embellece los espacios, sino que también adorna los corazones de quienes participan. A través de este evento, las jóvenes de la Promoción Ricaldone mantienen viva una tradición que une lo sagrado y lo cotidiano, recordándonos que la fe puede florecer en formas simples y hermosas.', 'Instituto Ricaldone', 'Cultura', 'Active'),
(119, 'Ketut@astro.sv', 'Ex-Alumnas Marianan visitan su casa para el dia de la familia-Ketut@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Ex-Alumnas Marianan visitan su casa para el dia de la familia', 'Día de la Familia: Ex-Alumnas Marianas Regresan a Casa con Cariño', '2023-04-25', 'El Día de la Familia se convierte en un reencuentro entrañable cuando ex-alumnas marianas retornan a su querida escuela. Esta jornada trae consigo la calidez de antiguas amistades y la familiaridad de rincones conocidos. Un abrazo a la tradición y al cariño compartido, donde las voces del pasado se mezclan con las del presente.', 'Cada pasillo, cada aula, está imbuido de recuerdos. Las ex-alumnas reviven momentos en cada rincón que una vez fue testigo de su aprendizaje y crecimiento. Los pasados escolares se cruzan con los presentes, creando un vínculo etéreo que trasciende las generaciones y refuerza la sensación de comunidad mariana.', 'La institución educativa se convierte en una casa que siempre tiene las puertas abiertas para sus antiguas alumnas. La bienvenida es cálida y el reencuentro, lleno de abrazos y sonrisas. La tradición del Día de la Familia reafirma que la conexión entre ex-alumnas y la escuela es un lazo inquebrantable que perdura a través del tiempo.', 'El Día de la Familia no solo es un vistazo al pasado, sino también un paso hacia el futuro. Ex-alumnas marianas se reúnen no solo para recordar, sino para forjar nuevas historias juntas. La comunidad que comenzó en las aulas continúa creciendo, y cada encuentro es una oportunidad para celebrar la hermandad mariana y crear recuerdos que se sumarán al legado.', 'Colegio Maria Auxiliadora', 'Eventos Especiales', 'Active'),
(120, 'Ketut@astro.sv', 'Recordando la presidencia 2019 del Colegio Don Bosco-Ketut@astro.sv-fotografo-@Epicyears!.png', '@Epicyears!', 'Recordando la presidencia 2019 del Colegio Don Bosco', 'Rememorando la Presidencia del Colegio Don Bosco en 2019: Un Viaje en el Tiempo', '2023-08-17', 'El año 2019 presenció la llegada de una nueva presidencia al Colegio Don Bosco, marcando el inicio de un capítulo emocionante. Bajo la dirección de nuevos líderes, la institución se embarcó en un viaje de transformación y crecimiento. Este período no solo trajo cambios administrativos, sino también un renovado sentido de propósito y visión.', 'El recuerdo de la presidencia de 2019 nos lleva a una era de logros y desafíos superados. Desde avances académicos hasta iniciativas comunitarias, este período fue testigo de la dedicación y el esfuerzo de todos los involucrados en la comunidad educativa. Las metas alcanzadas y los obstáculos enfrentados se entrelazan para crear un tapiz memorable.', 'La presidencia de 2019 dejó una huella profunda en la historia del colegio. Las decisiones tomadas y los valores promovidos durante este tiempo continúan resonando en la identidad y la cultura de Don Bosco. Cada paso dado en esa dirección influyó en el camino que la institución sigue trazando, sirviendo como faro de inspiración para las generaciones venideras.', 'Rememorar la presidencia de 2019 es un recordatorio de cómo el pasado moldea el presente y el futuro. Las lecciones aprendidas y las experiencias compartidas durante ese período siguen influyendo en la toma de decisiones y en la aspiración de crecimiento continuo. Esta retrospectiva nos invita a reflexionar sobre la evolución del colegio y a mirar hacia adelante con esperanza y determinación.', 'Colegio Don Bosco', 'Cultura', 'Active');

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
('rubencitonieto005@gmail.com', 'Ruben Alexander', 'Nieto', '123', '+503 75148248', 3, 'lawyer2.png'),
('Salesiano@astro.sv', 'Astro ', 'Salesianum Administration', '123', '-', 1, 'AstroFavicon.png'),
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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

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
  ADD CONSTRAINT `news-reporter` FOREIGN KEY (`id_reporter`) REFERENCES `reporter` (`Email`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
