-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2017 a las 22:13:05
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examin.ar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreyApellido` varchar(500) NOT NULL,
  `Profesor_id` int(11) NOT NULL,
  `Curso_id` int(11) NOT NULL,
  `Escuela_id` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `NombreyApellido`, `Profesor_id`, `Curso_id`, `Escuela_id`, `DNI`) VALUES
(1, 'Juan Perez', 3, 1, 1, 38000001),
(2, 'Fulano Detal', 3, 1, 1, 38000003),
(3, 'Mengano Detal', 3, 1, 1, 38000000),
(5, 'Gonzalo Gonzales', 3, 1, 1, 38000002),
(7, 'Juan Perez', 14, 4, 2, 38000004),
(15, 'Anthony Jackson', 3, 1, 1, 34796543),
(17, 'Juan Perez', 3, 1, 1, 50545455),
(20, 'Frederick Write', 14, 8, 6, 254585369);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(500) NOT NULL,
  `Escuela_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `Descripcion`, `Escuela_id`) VALUES
(1, '1-1', 1),
(2, '1-2', 1),
(3, '1-3', 1),
(4, '1ro1da', 2),
(5, '1ro2da', 2),
(6, '2-3', 3),
(7, '1-1', 4),
(8, '5°1°', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE IF NOT EXISTS `escuelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Escuela` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id`, `Escuela`) VALUES
(1, 'Urquiza'),
(2, 'Sarmiento'),
(3, 'Gregorio Matorras'),
(4, 'Bernardino Rivadavia'),
(6, 'Soldado argentino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones_preguntas`
--

CREATE TABLE IF NOT EXISTS `evaluaciones_preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Preguntas` varchar(500) NOT NULL,
  `id_evaluaciones_titulos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `evaluaciones_preguntas`
--

INSERT INTO `evaluaciones_preguntas` (`id`, `Preguntas`, `id_evaluaciones_titulos`) VALUES
(28, '¿A qué práctica política utilizada durante la “etapa conservadora” se refiere el texto al hablar de “maniobras electorales”? ', 21),
(29, ' ¿Qué presidente impulsó la sanción de la Ley General de Elecciones?', 21),
(30, '¿Qué establecía esta ley con respecto a las características del voto? ', 21),
(31, '¿Qué partido político triunfó en las elecciones nacionales de 1916, y quién resulto electo presidente? ', 21),
(32, 'Describe la relación entre filosofía y otras ciencias', 22),
(33, 'Describe la inducción y la deducción', 22),
(34, 'Describe la utilidad e inutilidad de la filosofía.', 22),
(35, '¿Cuántas filosofías te parece que hay?', 22),
(36, 'Traduzca: "Here is a postcard of my town in England".', 23),
(37, 'Traduzca: "Please send me a postcard from your town".', 23),
(38, 'Traduzca: "Is you towm big?".', 23),
(39, 'Traduzca: "Are there any interesting places to visit?".', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones_titulos`
--

CREATE TABLE IF NOT EXISTS `evaluaciones_titulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(500) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `evaluaciones_titulos`
--

INSERT INTO `evaluaciones_titulos` (`id`, `Titulo`, `Fecha`) VALUES
(21, 'Historia', '2017-02-04'),
(22, 'Filosofía', '2017-02-04'),
(23, 'Inglés', '2017-02-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `Novedad a agregar` varchar(9999) NOT NULL,
  KEY `Novedad a agregar` (`Novedad a agregar`(255))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`Novedad a agregar`) VALUES
('<h2 align= center>Descuentos</h2>\r\nDesde el mes de marzo, hay descuentos del 20% para quienes soliciten una cuenta nueva o paguen el mes de la suya y trabajen en instituciones de educación públicas. El descuento durará todo el mes de marzo y dejará de ser válido en el cobro del mes de abril. Para efectivizar su descuento, vaya a la sección de contacto de nuestro sitio y solicítelo. Una vez utilizada la sección de contacto, se le enviará un mail con los detalles del trámite. \r\n ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Respuesta` longtext NOT NULL,
  `id_evaluaciones_preguntas` int(11) NOT NULL,
  `id_evaluciones_titulos` int(11) NOT NULL,
  `id_evaluciones_titulos1` int(11) NOT NULL,
  `id_alumnos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=215 ;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `Respuesta`, `id_evaluaciones_preguntas`, `id_evaluciones_titulos`, `id_evaluciones_titulos1`, `id_alumnos`) VALUES
(185, '  En la Historia de la Argentina se conoce como República Conservadora, Régimen Conservador, Orden Conservador,1 República Oligárquica,2 3 o Régimen Oligárquico,4 al período comprendido entre los años 1880 y 1916, durante el cual la República Argentina, bajo el gobierno de la Generación del 80, tuvo un rápido crecimiento económico, poblacional y cultural.\r\n', 28, 21, 0, 1),
(186, '', 0, 0, 21, 1),
(187, '  El 10 de febrero de 1912 el Congreso Nacional sancionó la ley 8.871, que empezaría a conocerse como la "Ley Sáenz Peña", que estableció el voto secreto, obligatorio y universal. La misma fue impulsada por el presidente Hipolito Irigoyen\r\n\r\n', 29, 21, 0, 1),
(188, '  Si bien la ley no era tan universal, porque seguía siendo exclusiva para nativos argentinos y naturalizados masculinos y mayores a 18 años, vino a poner fin al fraude y al soborno que perpetuaba en el poder al régimen oligárquico que comenzó en 1880.', 30, 21, 0, 1),
(189, '  La elección presidencial de Argentina de 1916 se celebró el 2 de abril de 1916. Los votantes eligieron electores del Presidente, legisladores y funcionarios locales. Estas fueron las primeras elecciones presidenciales en la historia de Argentina que utilizaron el sistema del sufragio secreto a ser depositado en urnas electorales, al ejecutarse bajo el amparo de la Ley Sáenz Peña, la cual otorgaba derecho a voto a casi todos los ciudadanos varones, fueran nativos o naturalizados, mayores de 18 ', 31, 21, 0, 1),
(195, '  La filosofía es la madre de todas las ciencias, esto lo decimos porque en un principio no existía una clara distinción entre ambas ya que los filósofos también estudiaban fenómenos propios de la astronomía, matemáticas, física… Más tarde la filosofía tuvo que separase del resto de ciencias porque no era posible abarcar tantos conocimientos.\n\nLas ciencias son, particulares, mientras que la filosofía es universal, es decir, es única, además las ciencias se preguntan por las causas próximas a los sucesos y la filosofía por las causas primeras o últimas.', 32, 22, 0, 2),
(196, '', 0, 0, 22, 2),
(197, '  La deducción es el principal método empleado por la filosofía, es un proceso lógicamente válido ya que se basa en el uso de la razón. Consiste en extraer conclusiones concretas a partir de una idea general. ', 33, 22, 0, 2),
(198, '  La filosofía es inútil como instrumento pero útil como fuente de conocimiento, es decir, la filosofía no ha de ser empleada como un medio sino como un fin, el de alcanzar la verdad. Al contrario que la filosofía, las ciencias sí que son útiles como instrumento, pero a pesar de esto, no tienen un significado completo, por lo que el hombre necesita de la filosofía para auto realizarse. El problema aparece cuando, al igual que en la sociedad del momento, se da más importancia a los medios que al propio fin, es decir, las ciencias se encuentran por encima de la filosofía y ésta está menospreciada.', 34, 22, 0, 2),
(199, '  Existe una única filosofía al igual que existe una única verdad, pero para alcanzar esta verdad se emplean distintas corrientes filosóficas.\r\n\r\nPodemos comparar a la verdad con un poliedro, que aún siendo el mismo poliedro, tiene varias caras que pueden ser observadas desde distintos ángulos. Lo mismo sucede con la verdad, es única, pero se puede llegar a ella por caminos distintos. Por lo tanto existe una única filosofía pero distintos métodos.', 35, 22, 0, 2),
(200, '  Aquí está una postal de mi ciudad en Inglaterra', 36, 23, 0, 3),
(201, '', 0, 0, 23, 3),
(202, '  Por favor, enviame un postal de tu ciudad', 37, 23, 0, 3),
(203, ' ¿Es tu ciudad grande?', 38, 23, 0, 3),
(204, '  ¿Tiene lugares interesantes a los que visitar?', 39, 23, 0, 3),
(205, '  Ahí es mi ciudad de Inglaterra', 36, 23, 0, 1),
(206, '', 0, 0, 23, 1),
(207, '  De nada. Te muesto mi ciudad', 37, 23, 0, 1),
(208, '  ¿Es tu ciudad pequeña?', 38, 23, 0, 1),
(209, '  ¿Tiene lugares aburridos?', 39, 23, 0, 1),
(210, '  Él es una postal de mi ciudad en Inglaterra', 36, 23, 0, 20),
(211, '', 0, 0, 23, 20),
(212, '  Porfavor mandame una postal de tu ciudad', 37, 23, 0, 20),
(213, '  ¿Es tu ciudad pequeña?', 38, 23, 0, 20),
(214, '  ', 39, 23, 0, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(30) NOT NULL,
  `Contrasenia` varchar(30) NOT NULL,
  `Tipo_de_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `Nombre de usuario` (`Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Usuario`, `Contrasenia`, `Tipo_de_Usuario`) VALUES
(1, 'User1', 'pepito', 0),
(2, 'User2', 'pirulo', 0),
(3, 'Profesor1', '1234', 1),
(14, 'Profesor2', 'profe', 1),
(21, 'Profesor3', 'contraseña', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
