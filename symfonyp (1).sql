-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 11:39:54
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfonyp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Electrico', 'Coches Electricos'),
(2, 'Hibrido', 'Coches Hibridos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201110085613', '2020-11-10 10:11:47', 190),
('DoctrineMigrations\\Version20201110093808', '2020-11-10 10:38:49', 109),
('DoctrineMigrations\\Version20201113100047', '2020-11-13 11:01:33', 1766),
('DoctrineMigrations\\Version20201113105359', '2020-11-13 11:54:19', 220),
('DoctrineMigrations\\Version20201114152642', '2020-11-14 16:26:55', 247),
('DoctrineMigrations\\Version20201114152958', '2020-11-14 16:30:07', 122),
('DoctrineMigrations\\Version20201115142957', '2020-11-15 15:30:16', 1824),
('DoctrineMigrations\\Version20201115150032', '2020-11-15 16:01:08', 234),
('DoctrineMigrations\\Version20201115155506', '2020-11-15 16:55:15', 417),
('DoctrineMigrations\\Version20201115160623', '2020-11-15 17:06:36', 323),
('DoctrineMigrations\\Version20201116103117', '2020-11-16 11:31:28', 1694);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(1, 1, 'Tesla Model 3', 'El nuevo Tesla Low-Cost ha llegado', '50000€', 'm1.jpg'),
(2, 1, 'Tesla Model S', 'El Tesla mas completo', '70000€', 'm2.jpg'),
(3, 2, 'Renault Clio', 'El nuevo Renault Clio Hibrido', '20000€', 'h1.jpg'),
(4, 2, 'Toyota C-HR', 'El nuevo Tesla Low-Cost ha llegado', '30000€', 'h2.jpg'),
(5, 2, 'BMW i8', 'El nuevo BMW i8 es una autentica bestia', '70000€', 'n1.jpg'),
(6, 1, 'Peugeot 208', 'Una pasada Simplemente', '20000€', 'a2.jpg'),
(7, 1, 'Volskwagen ID.3', 'El nuevo Volskwagen tiene diseño, confort y potencia', '35000€', 'a9.jpg'),
(8, 1, 'Audi Q5-e', 'El nuevo Q5-e lo tiene todo', '35000€', 'a8.jpg'),
(9, 2, 'Opel Corsa H', 'El nuevo Corsa es una pasada', '19000€', 'a1.jpg'),
(10, 1, 'Tesla Model 3', 'El nuevo Tesla Low-Cost ha llegado', '50000€', 'm1.jpg'),
(11, 2, 'Tesla Model S', 'El Tesla mas completo', '70000€', 'm2.jpg'),
(12, 1, 'Renault Clio', 'El nuevo Renault Clio Hibrido', '20000€', 'h1.jpg'),
(13, 2, 'Toyota C-HR', 'El nuevo Tesla Low-Cost ha llegado', '30000€', 'h2.jpg'),
(14, 2, 'BMW i8', 'El nuevo BMW i8 es una autentica bestia', '70000€', 'n1.jpg'),
(15, 1, 'Peugeot 208', 'Una pasada Simplemente', '20000€', 'a2.jpg'),
(16, 1, 'Volskwagen ID.3', 'El nuevo Volskwagen tiene diseño, confort y potencia', '35000€', 'a9.jpg'),
(17, 1, 'Audi Q5-e', 'El nuevo Q5-e lo tiene todo', '35000€', 'a8.jpg'),
(18, 2, 'Opel Corsa H', 'El nuevo Corsa es una pasada', '19000€', 'a1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_767490E63397707A` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_767490E63397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
