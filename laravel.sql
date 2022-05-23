-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-05-2022 a las 22:39:48
-- Versión del servidor: 8.0.29-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `idAula` int NOT NULL,
  `nombreAula` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`idAula`, `nombreAula`) VALUES
(1, '1ESO_A'),
(2, '1ESO_B'),
(3, '2ESO_A'),
(4, '2ESO_B'),
(5, '3ESO_A'),
(6, '3ESO_B'),
(7, '4ESO_A'),
(8, '4ESO_B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idIncidencia` int NOT NULL,
  `idComentario` int NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fechaComentario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idIncidencia`, `idComentario`, `comentario`, `fechaComentario`) VALUES
(5, 1, 'Pantalla de marca Apple', '2022-04-13'),
(6, 2, 'Coste no superior a 100 €', '2022-04-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorials`
--

CREATE TABLE `editorials` (
  `Id` int NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `editorials`
--

INSERT INTO `editorials` (`Id`, `Nombre`, `Nacionalidad`) VALUES
(1, 'Salamandra', 'Ingles'),
(1, 'Salamandra', 'Ingles'),
(2, 'Prueba', 'España'),
(3, 'Prueba2', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `idIncidencia` int NOT NULL,
  `idUsuario` int NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `aula` int NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaModificacion` date NOT NULL,
  `fechaCierre` date NOT NULL,
  `estado` enum('nuevo','procesado','resuelto','nuevaIncidencia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`idIncidencia`, `idUsuario`, `titulo`, `descripcion`, `aula`, `fechaCreacion`, `fechaModificacion`, `fechaCierre`, `estado`) VALUES
(5, 1, 'error pantalla', 'Pantalla obsoleta', 2, '2022-04-01', '2022-04-19', '2022-04-30', 'procesado'),
(6, 2, 'tarjeta grafica', 'Comprar nueva tarjeta grafica', 7, '2022-04-20', '2022-04-21', '2022-04-24', 'nuevo'),
(7, 5, 'p', 'p', 7, '2022-04-12', '2022-04-12', '2022-04-05', 'nuevo'),
(8, 5, 'p', 'p', 7, '2022-04-12', '2022-04-12', '2022-04-05', 'nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ISBN` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Idioma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Publicacion` date NOT NULL,
  `Editorial` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ISBN`, `Titulo`, `Autor`, `Idioma`, `Publicacion`, `Editorial`) VALUES
('9788478884452', 'Harry Potter y la piedra filosofal', 'J. K. Rowling', 'Ingles', '1997-07-26', 1),
('9788478884957', 'Harry Potter y la camara secreta', 'J. K. Rowling', 'Ingles', '1998-07-02', 1),
('9788478886456', 'Harry Potter y el caliz de fuego', 'J. K. Rowling', 'Ingles', '1998-07-02', 1),
('9788478889921', 'Harry Potter y el misterio del principe', 'J. K. Rowling', 'Ingles', '2005-07-16', 1),
('9788498381405', 'Harry Potter y las reliquias de la muerte', 'J. K. Rowling', 'Ingles', '2007-07-21', 1),
('9788498383430', 'Harry Potter y el prisionero de Azkaban', 'J. K. Rowling', 'Ingles', '1998-07-02', 1),
('9788498383621', 'Harry Potter y la orden del fenix', 'J. K. Rowling', 'Ingles', '2003-07-21', 1),
('9788498388473', 'Harry Potter y el legado maldito', 'J. K. Rowling', 'Ingles', '2016-07-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2022_02_24_212245_editorials', 1),
(56, '2022_02_25_105234_libros', 1),
(57, '2022_02_25_123030_prestamos', 2),
(58, '2022_03_05_080638_solicituds', 3),
(59, '2022_03_05_081838_prueba', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `NombreApellidos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`NombreApellidos`, `Email`, `Titulo`, `created_at`, `updated_at`) VALUES
('Jose', 'javier.jimenez@iespoligonosur.org', 'Harry Potter PRUEBA', '2022-03-09 08:34:06', '2022-03-09 08:34:06'),
('Javier Díaz Román', 'javiquintoproduccion@gmail.com', 'El principote', '2022-03-05 18:21:40', '2022-03-05 18:21:40'),
('Javier Díaz Román', 'Jose@gmail.com', 'Prueba', '2022-03-05 18:25:02', '2022-03-05 18:25:02'),
('Javier Díaz Román', 'joswe@qmail.com', 'Priunesdas', '2022-03-06 15:36:27', '2022-03-06 15:36:27'),
('Javier Díaz Román', 'prueba3@gmail.com', 'Prueba3', '2022-03-05 18:27:30', '2022-03-05 18:27:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'javier', 'javier.diaz.roman.al@iespoligonosur.org', NULL, '$2y$10$UEwkGMzRx3sYQU8tD2rqOur9jT/mdKtuuZOZIRfyA/K0/lMhUkVcq', NULL, '2022-03-06 16:01:37', '2022-03-06 16:01:37'),
(2, 'jesus', 'jesusemail@gmail.com', NULL, '$2y$10$2tuNkV7W70T0sXNXYD4nG.yYvmQuZ8i4.Yo85afwYbfEKYqcergra', NULL, '2022-05-18 07:48:50', '2022-05-18 07:48:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `telefono` int NOT NULL,
  `notificacionEmail` tinyint(1) NOT NULL,
  `contrasenia` varchar(250) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `validacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidos`, `email`, `dni`, `telefono`, `notificacionEmail`, `contrasenia`, `rol`, `validacion`) VALUES
(1, 'javier', 'diaz roman', 'javier.diaz.roman.al@iespoligonosur.org', '49028792z', 637913632, 1, 'ks+8RVbHh25OVvLJmBHm4d+oF6hXyKk0cJ4QkVALQhhjjBPlxWgpfK/3dsGKEu5I', 'administrador', 1),
(2, 'jesus', 'garcia gonzalez', 'jesusemail@gmail.com', '93487629v', 666444555, 1, 'ks+8RVbHh25OVvLJmBHm4d+oF6hXyKk0cJ4QkVALQhhjjBPlxWgpfK/3dsGKEu5I', 'cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `telefono` int NOT NULL,
  `notificacionEmail` tinyint(1) NOT NULL,
  `contrasenia` varchar(250) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `validacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidos`, `email`, `dni`, `telefono`, `notificacionEmail`, `contrasenia`, `rol`, `validacion`) VALUES
(1, 'javier', 'diaz roman', 'javier.diaz.roman.al@iespoligonosur.org', '49028792z', 637913632, 1, 'ks+8RVbHh25OVvLJmBHm4d+oF6hXyKk0cJ4QkVALQhhjjBPlxWgpfK/3dsGKEu5I', 'administrador', 1),
(2, 'jesus', 'garcia gonzalez', 'jesusemail@gmail.com', '93487629v', 666444555, 1, 'ks+8RVbHh25OVvLJmBHm4d+oF6hXyKk0cJ4QkVALQhhjjBPlxWgpfK/3dsGKEu5I', 'cliente', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idAula`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idIncidencia` (`idIncidencia`);

--
-- Indices de la tabla `editorials`
--
ALTER TABLE `editorials`
  ADD KEY `editorials_id_index` (`Id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`idIncidencia`),
  ADD KEY `fkUsuario` (`idUsuario`),
  ADD KEY `fkAula` (`aula`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD UNIQUE KEY `libros_isbn_unique` (`ISBN`),
  ADD KEY `libros_editorial_index` (`Editorial`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD UNIQUE KEY `solicituds_email_unique` (`Email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `idAula` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `idIncidencia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idIncidencia`) REFERENCES `incidencias` (`idIncidencia`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_editorial_foreign` FOREIGN KEY (`Editorial`) REFERENCES `editorials` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
