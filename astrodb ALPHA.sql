-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2023 a las 22:23:21
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
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_reporter` text NOT NULL,
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
(1, 'rubencitonie', './IMG/primeraimagen.jpg', '', 'San Jose Gana En Futball.', 'San Jose gana la Liga Salesiana en Futball', '2023-07-11', 'En una emocionante final de la Liga Salesiana de Fútbol, el equipo de San Jose se coronó como el campeón indiscutible, dejando en alto el nombre de su institución. El encuentro, disputado en el estadio principal de la ciudad, fue presenciado por una multitud entusiasta que se congregó para apoyar a sus respectivos equipos.\r\n\r\nDesde el pitido inicial, se pudo percibir la intensidad y el nivel de juego mostrado por ambas escuadras. San Jose, con su estilo de juego ofensivo y posesión de balón, demostró una vez más su dominio táctico y destreza individual. Por otro lado, el equipo rival, cuyo nombre ya es parte de la historia del torneo, no se quedó atrás y presentó una defensa férrea y una gran capacidad para contraatacar.\r\n\r\nEl primer tiempo fue sumamente reñido, con ocasiones de gol para ambos equipos. Sin embargo, fue San Jose quien logró abrir el marcador gracias a un espectacular remate de larga distancia que dejó sin opciones al arquero rival. La afición estalló en júbilo al ver a su equipo tomando la ventaja, mientras el equipo contrario redoblaba sus esfuerzos para igualar el marcador.\r\n\r\nEn la segunda mitad, la intensidad no decayó y los jugadores de ambos equipos se entregaron al máximo en busca de la gloria. San Jose, consciente de la importancia de mantener la ventaja, desplegó una defensa sólida y una presión constante en el centro del campo. Esto dificultó el juego del equipo rival, que luchaba por encontrar espacios y generar peligro en el área contraria.\r\n\r\nA medida que el tiempo avanzaba, el equipo perdedor se lanzó con todo en busca del empate. Sin embargo, la defensa de San Jose se mantuvo firme, repeliendo los intentos de ataque y mostrando una gran coordinación y comunicación en la zaga. Además, el arquero de San Jose se convirtió en una figura clave del encuentro, realizando espectaculares atajadas que mantuvieron el marcador a favor de su equipo.\r\n\r\nFinalmente, el pitido final resonó en el estadio, desatando la euforia y la celebración de los jugadores y la afición de San Jose. Con esta victoria, el equipo se consagra como el nuevo campeón de la Liga Salesiana de Fútbol, un logro que quedará grabado en la historia de la institución y en el corazón de sus seguidores.\r\n\r\nTras la final, el entrenador de San Jose expresó su satisfacción por el desempeño de sus jugadores y el trabajo realizado durante toda la temporada. Asimismo, resaltó la importancia de la disciplina, la dedicación y el espíritu de equipo como los pilares fundamentales del éxito alcanzado.\r\n\r\nCon esta victoria, San Jose demuestra una vez más su hegemonía en el fútbol local y se posiciona como un rival temido y respetado en futuros torneos. Sin duda, esta conquista será recordada por mucho tiempo, dejando una huella imborrable en la historia del deporte y en el corazón de la comunidad salesiana.', 'San Jose', 'Deporte'),
(104, 'q', 'C:/xampp/htdocs/ASTRO SALES/Astro-salesianum/src/IMG/w-q-fotografo-r.png', 'r', 'w', 'r', '2023-07-28', 'etgr', 'Colegio Santa Cecilia', 'Cultura'),
(105, 'q', 'C:/xampp/htdocs/ASTRO SALES/Astro-salesianum/src/IMG/t-q-fotografo-r.png', 'r', 't', 'ye', '2023-08-04', 'ery', 'Colegio Maria Auxiliadora', 'Cultura'),
(106, 'q', 'C:/xampp/htdocs/ASTRO SALES/img/t-q-fotografo-r.png', 'r', 't', 'ye', '2023-08-04', 'ery', 'Colegio Maria Auxiliadora', 'Cultura'),
(107, 'andrew', 'C:/xampp/htdocs/ASTRO SALES/img/crimimañ es emncrceañadp-andrew-fotografo-roodrifo.png', 'roodrifo', 'crimimañ es emncrceañadp', 'ye', '2023-08-04', 'ery', 'Colegio Maria Auxiliadora', 'Cultura'),
(108, 'r', 'yhy-r-fotografo-5h.png', '5h', 'yhy', 'htyh', '2023-07-28', 'y5h5yhg', 'Colegio Maria Auxiliadora', 'Cultura'),
(109, 'rodrigo.pine', 'Renace Colegio Don Bosco en voleibol-rodrigo.pineda@astrosalesianu.sv-fotografo-Giovanni .png', 'Giovanni ', 'Renace Colegio Don Bosco en voleibol', 'El Colegio Don Bosco remonta partido en el Instituto Ricaldone ', '2023-06-10', 'En un emocionante encuentro deportivo, el Colegio Don Bosco demostró su espíritu luchador y habilidades excepcionales al remontar un partido de infarto en las instalaciones del Instituto Ricaldone, dejando a los espectadores atónitos y celebrando una victoria inolvidable.\r\n\r\nEn una impresionante muestra de resiliencia y pasión por el deporte, el Colegio Don Bosco ha resurgido en la escena del voleibol con un triunfo inigualable. Después de años de arduo trabajo y perseverancia, el equipo ha vuelto a la cima de la competencia, dejando una huella indeleble en el mundo del voleibol juvenil.\r\n\r\nEl renacimiento del Colegio Don Bosco en el voleibol ha sido una historia de superación y determinación. Hace unos años, el equipo había experimentado momentos difíciles, enfrentando derrotas desalentadoras y desafíos internos que amenazaron con desmantelar la unidad y el espíritu del equipo. Sin embargo, bajo la tutela de un grupo de entrenadores comprometidos y con el apoyo incondicional de la comunidad escolar, los jugadores no solo recuperaron su antiguo esplendor, sino que también fortalecieron los lazos que los unen como una verdadera familia deportiva.\r\n\r\nEl ascenso del equipo ha sido notorio en el panorama local y nacional. Recientemente, en el torneo intercolegial más prestigioso del país, el equipo del Colegio Don Bosco ha demostrado un juego impecable, que ha cautivado a aficionados y expertos por igual. Los jóvenes deportistas han desplegado una combinación de habilidades técnicas, estrategia y compañerismo, que les ha permitido vencer a equipos fuertes y consagrados.\r\n\r\n\"Es realmente emocionante ver cómo estos chicos han recuperado su pasión por el voleibol y cómo han trabajado incansablemente para llegar hasta aquí\", expresó el entrenador principal, Miguel Sánchez. \"Hemos enfocado nuestro entrenamiento en el desarrollo integral de los jugadores, no solo en sus habilidades técnicas, sino también en su mentalidad y espíritu de equipo. Estoy extremadamente orgulloso de lo que han logrado.\"\r\n\r\nEl éxito del Colegio Don Bosco ha inspirado a toda la comunidad educativa, padres y alumnos por igual. Los valores fundamentales de trabajo duro, disciplina y perseverancia inculcados en el deporte han permeado en todos los aspectos de la vida de los jóvenes atletas, convirtiéndolos en excelentes modelos a seguir para las generaciones futuras.\r\n\r\nAdemás de los logros deportivos, el renacimiento del equipo ha tenido un impacto significativo en el ámbito social. Los jóvenes jugadores han aprovechado su éxito para promover programas de responsabilidad social que benefician a comunidades vulnerables en su ciudad. Donaciones, talleres educativos y proyectos medioambientales son solo algunas de las iniciativas que el equipo ha llevado a cabo, dejando una huella positiva en la sociedad que va más allá del deporte.\r\n\r\nEl Colegio Don Bosco se ha convertido en un símbolo de esperanza y transformación, demostrando que a través de la pasión, el esfuerzo y la unidad, cualquier adversidad puede superarse. Su resurgimiento en el voleibol no solo ha reavivado el orgullo de su comunidad, sino que ha dejado una lección invaluable para todos: cuando se trabaja en equipo y se lucha por un objetivo común, no hay límites para lo que se puede lograr.', 'Colegio Don Bosco', 'Deportes'),
(110, 'soniamm.nieto@outlook.com', 'Don Bosco Jueg254a contra UDP-soniamm.nieto@outlook.com-fotografo-.png', '', 'Don Bosco Jueg254a contra UDP', 'La selección juvenil del Colegio Don Bosco juega contra la Universidad Pedagogica', '2023-07-27', 'En un enfrentamiento deportivo lleno de pasión y habilidades, la selección juvenil del Colegio Don Bosco ha protagonizado un emocionante encuentro contra el equipo de voleibol de la Universidad Pedagógica. Con una atmósfera de entusiasmo y apoyo por parte de la comunidad educativa, el gimnasio se convirtió en el epicentro de la competencia mientras ambos equipos mostraban su mejor juego en la cancha.\r\n\r\nDesde el comienzo del partido, ambas escuadras dejaron en claro su determinación por llevarse la victoria. Los jugadores del Colegio Don Bosco, inspirados por su reciente resurgimiento en el voleibol y la dedicación de sus entrenadores, demostraron una impecable coordinación en sus movimientos y una sólida estrategia de juego. Por su parte, el equipo de la Universidad Pedagógica, reconocido por su trayectoria y experiencia en competiciones locales, mantuvo una defensa férrea y un ataque eficiente.\r\n\r\nLos espectadores, entre los que se encontraban compañeros de clase, familiares y profesores, animaban con entusiasmo en cada punto disputado. El apoyo incondicional y los cánticos resonaban en el recinto, infundiendo aún más pasión y energía a los jugadores en la cancha.\r\n\r\nEl encuentro se caracterizó por largos rallies, espectaculares bloqueos y remates que mantuvieron a los asistentes al filo de sus asientos. Ambos equipos se esforzaron al máximo, dando todo de sí para obtener la victoria. Los jugadores del Colegio Don Bosco, con una mentalidad resiliente, recordaron las enseñanzas de su entrenador sobre el trabajo en equipo y la importancia de nunca rendirse, mientras que la Universidad Pedagógica demostró su destreza técnica y experiencia en cada movimiento.\r\n\r\nAl final del partido, la emoción llenó el ambiente cuando el Colegio Don Bosco logró imponerse, llevándose la victoria en un emocionante juego de cinco sets. La ovación del público premió el esfuerzo y el espíritu deportivo de ambos equipos, reconociendo el talento y la dedicación mostrada en cada jugada.\r\n\r\nEl entrenador del Colegio Don Bosco, Miguel Sánchez, expresó su orgullo y satisfacción por el desempeño de sus jugadores: \"Este ha sido un encuentro excepcional, nuestros chicos han demostrado su compromiso y habilidades en el campo. Estoy realmente emocionado por su victoria y por el crecimiento que han alcanzado como equipo\".\r\n\r\nLa competencia entre la selección juvenil del Colegio Don Bosco y la Universidad Pedagógica no solo ha fortalecido los lazos deportivos entre ambas instituciones, sino que también ha dejado una valiosa lección sobre la importancia del trabajo en equipo, la perseverancia y la pasión por el deporte. Este enfrentamiento será recordado como un emocionante capítulo en la historia del voleibol local y ha dejado un mensaje de inspiración para los jóvenes atletas que sueñan con alcanzar sus metas en el deporte.', 'Colegio Don Bosco', 'Deportes');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`) VALUES
('administrador123@gmail.com', 'Ricardo Morales ', 'Alvarado Guerrero', '123456789', 79587646, 1),
('merinoventura123@gmail.com', 'Carlos Eduardo ', 'Merino Ventura', '20110289c', 79583464, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_reporter` (`id_reporter`(768));

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
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
