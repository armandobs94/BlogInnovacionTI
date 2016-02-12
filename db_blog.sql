-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2016 a las 02:42:48
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci DEFAULT 'img/gral/user.png',
  `resumen` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `id_usuario`, `foto`, `resumen`) VALUES
(1, 1, 'img/user.png', 'hello'),
(2, 2, 'img/user.png', 'kj jf jf fkj lksad fjsldf dlf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_calificacion` int(11) NOT NULL,
  `valor` text COLLATE utf8_spanish_ci NOT NULL,
  `origen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_etiqueta` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `horario` datetime NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_post`, `id_usuario`, `comentario`, `horario`, `estado`) VALUES
(1, 1, 1, 'kjlj lk ekf wjlfj weñlf jwelfj wklf wlef ñwjf ', '2016-02-09 08:44:13', 1),
(2, 2, 1, 'kjlj lk ekf wjlfj weñlf jwelfj wklf wlef ñwjf ', '2016-02-09 08:44:13', 1),
(3, 1, 2, 'fewfewf', '2016-02-09 08:44:13', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE `etiquetas` (
  `id_etiqueta` int(11) NOT NULL,
  `etiqueta` text COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `titulo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `resumen` text COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci,
  `url_video` text COLLATE utf8_spanish_ci,
  `etiquetas` text COLLATE utf8_spanish_ci,
  `fecha` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `id_autor`, `titulo`, `resumen`, `contenido`, `imagen`, `url_video`, `etiquetas`, `fecha`, `estado`) VALUES
(1, 1, 'Hello Test', 'This is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test\r\nThis is a test', 'ejfklew jfl lwejfk jfwkf wel  wef ewf \r\nwef awe\r\nf we\r\nf w\r\nf ef\r\n awefwaf ewfawe\r\nf awef waef wef wef \r\nwef ewf waefewf \r\nwef ew\r\nf wae\r\nf awef we\r\nf wf awef \r\nwef wef awef\r\n wef \r\nwef\r\n weaf\r\n wef \r\nwe', NULL, NULL, NULL, NULL, 4),
(2, 2, 'TEST', 'Another test', 'j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl j l klj lkjlk lkfj ff wlekfj af jlj lkwj fwl we kjfe jwk wle lwj lwf w fwl ', NULL, NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_cometarios`
--

CREATE TABLE `reportes_cometarios` (
  `id_reporte` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `motivo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_completo`, `correo`, `tipo_user`) VALUES
(1, 'Alejandro Padilla', 'ale@dg.com', 2),
(2, 'Marco Antonio', 'marco@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_tipo`
--

CREATE TABLE `usuarios_tipo` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `permisos` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_calificacion`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`id_etiqueta`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `reportes_cometarios`
--
ALTER TABLE `reportes_cometarios`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_tipo`
--
ALTER TABLE `usuarios_tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id_etiqueta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `reportes_cometarios`
--
ALTER TABLE `reportes_cometarios`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
