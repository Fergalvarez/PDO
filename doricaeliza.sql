-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 03:45:50
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doricaeliza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_compra`
--

CREATE TABLE `carrito_compra` (
  `id_carrito_compra` int(11) NOT NULL,
  `id_producto_carrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `carrito_compra`
--

INSERT INTO `carrito_compra` (`id_carrito_compra`, `id_producto_carrito`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id_categoria`, `categoria`) VALUES
(1, 'BLUSAS'),
(2, 'VESTIDOS'),
(3, 'ACCESORIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_carrito_compra` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `domicilio` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `pais` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `municipio` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `referencias` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `total_compra` float(10,2) NOT NULL,
  `fecha_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `id_usuario`, `id_carrito_compra`, `id_pago`, `domicilio`, `pais`, `estado`, `municipio`, `codigo_postal`, `referencias`, `total_compra`, `fecha_compra`) VALUES
(13, 6, 1, 2, 'Isidro Fabela', 'Mexico', 'Estado de México', 'Tultitlan', 54913, 'Frente a un oxxo', 370.00, '2021-04-27'),
(14, 6, 1, 1, 'xxxx', 'Mexico', 'Estado de México', 'xxxxxxxxxxxx', 11560, 'CCCCC', 730.00, '2021-04-28'),
(15, 6, 1, 2, 'xxxxxx', 'Mexico', 'mexico', 'xxxxxxxxxxxx', 11560, 'sssssssssss', 200.00, '2021-05-28'),
(16, 6, 1, 2, 'xxxxxx', 'Mexico', 'mexico', 'xxxxxxxxxxxx', 11560, 'sssssssssss', 200.00, '2021-05-28'),
(17, 6, 1, 2, 'xxxxxx', 'Mexico', 'mexico', 'xxxxxxxxxxxx', 11560, 'sssssssssss', 200.00, '2021-05-28'),
(18, 6, 1, 2, 'xxxxxx', 'Mexico', 'mexico', 'zxzxzx', 11560, 'sssssssssss', 200.00, '2021-05-28'),
(19, 6, 1, 2, 'xxxxxx', 'Mexico', 'mexico', 'zxzxzx', 11560, 'sssssssssss', 200.00, '2021-05-28'),
(20, 6, 1, 1, 'xxxxxx', 'Mexico', 'mexico', 'xxxxxxxxxxxx', 11560, 'Holiiiii', 200.00, '2021-05-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `fecha_envio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`id_envio`, `id_compra`, `fecha_envio`) VALUES
(1, 1, '2021-04-24 10:18:52'),
(2, 2, '2021-03-14 10:18:52'),
(3, 3, '2021-02-10 10:18:52'),
(4, 4, '2020-12-04 10:18:52'),
(5, 5, '2020-11-29 10:18:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_usuario`
--

CREATE TABLE `genero_usuario` (
  `id_genero_usuario` int(11) NOT NULL,
  `genero` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `genero_usuario`
--

INSERT INTO `genero_usuario` (`id_genero_usuario`, `genero`) VALUES
(1, 'FEMENINO'),
(2, 'MASCULINO'),
(110, 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `tipo_pago` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `tipo_pago`) VALUES
(1, 'PAYPAL'),
(2, 'TRANSFERENCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_genero_usuario` int(11) NOT NULL,
  `producto` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `color` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `talla` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` float(10,2) NOT NULL,
  `imagen` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_categoria`, `id_genero_usuario`, `producto`, `color`, `talla`, `cantidad`, `precio_unitario`, `imagen`) VALUES
(33, 1, 1, 'BLUSA ROSA', 'ROSA', 'G', 1, 50.00, 'public/products/Blusa (5).jpeg'),
(34, 1, 1, 'BLUSA FLORAL', 'ROSA', 'G', 1, 150.00, 'public/products/Blusa (3).jpeg'),
(35, 1, 1, 'BLUSA MORADA', 'MORADO', 'M', 1, 200.00, 'public/products/Blusa (6).jpeg'),
(36, 2, 1, 'VESTIDO VERDE', 'VERDE', 'S', 1, 250.00, 'public/products/Vestido.jpeg'),
(37, 2, 1, 'VESTIDO ROCK', 'NEGRO', 'M', 1, 220.00, 'public/products/Vestido (6).jpeg'),
(38, 2, 1, 'VESTIDO PRIMAVERA', 'NEGRO / ROSA', 'S', 1, 260.00, 'public/products/Vestido (3).jpeg'),
(39, 3, 1, 'PULSERA', 'ROSA', 'U', 1, 60.00, 'public/products/Accesorio (1).jpeg'),
(40, 3, 1, 'ARETES', 'NEGRO', 'U', 1, 80.00, 'public/products/Accesorio (6).jpeg'),
(41, 3, 1, 'BOLSA', 'NEGRO', 'U', 1, 120.00, 'public/products/Accesorio (5).jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_carrito`
--

CREATE TABLE `producto_carrito` (
  `id_producto_carrito` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `producto_carrito`
--

INSERT INTO `producto_carrito` (`id_producto_carrito`, `id_producto`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id_rol_usuario` int(11) NOT NULL,
  `rol` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `rol_usuario`
--

INSERT INTO `rol_usuario` (`id_rol_usuario`, `rol`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE'),
(6, 'Hello world!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_rol_usuario` int(11) DEFAULT NULL,
  `id_genero_usuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_materno` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `usuario_sesion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `confirmacion` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_rol_usuario`, `id_genero_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `telefono`, `email`, `usuario_sesion`, `contrasena`, `confirmacion`) VALUES
(3, 1, 1, 'CESAR', 'MENDEZ', 'GONZALEZ', '1994-05-27', '5512369642', 'cmartinez@gmail.com', 'cmartinez', '55555', '55555'),
(6, 2, 0, 'DAFNE', 'DIAZ', 'HERNANDEZ', '1991-12-14', '5523236941', 'dafne@gmail.com', 'dafne', '9999', '9999'),
(7, 1, 1, 'RICARDO', 'MONROY', 'REYES', '1990-07-25', '5555555555', 'ricardo@gmail.com', 'rmonroy', '5555', '5555'),
(9, 1, 1, 'FERNANDA', 'GONZALEZ', 'ALVAREZ', '1994-07-31', '5523697411', 'fgonzalez@gmail.com', 'fgonzalez', '12345', '12345'),
(10, 2, 2, 'MIGUEL', 'ESCAMILLA', 'ALVAREZ', '2001-02-24', '6555552114', 'miguel@gmail.com', 'miguel', '2222', '2222');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_compra`
--
ALTER TABLE `carrito_compra`
  ADD PRIMARY KEY (`id_carrito_compra`),
  ADD KEY `id_producto` (`id_producto_carrito`),
  ADD KEY `id_carrito_compra` (`id_carrito_compra`);

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_carrito_compra` (`id_carrito_compra`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_compra` (`id_compra`),
  ADD KEY `id_pago_2` (`id_pago`),
  ADD KEY `id_compra_2` (`id_compra`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `genero_usuario`
--
ALTER TABLE `genero_usuario`
  ADD PRIMARY KEY (`id_genero_usuario`),
  ADD KEY `id_genero_usuario` (`id_genero_usuario`),
  ADD KEY `id_genero_usuario_2` (`id_genero_usuario`),
  ADD KEY `id_genero_usuario_3` (`id_genero_usuario`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_tipo_pago` (`tipo_pago`),
  ADD KEY `id_pago_2` (`id_pago`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_genero_usuario` (`id_genero_usuario`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_genero_usuario_2` (`id_genero_usuario`);

--
-- Indices de la tabla `producto_carrito`
--
ALTER TABLE `producto_carrito`
  ADD PRIMARY KEY (`id_producto_carrito`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_producto_carrito` (`id_producto_carrito`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id_rol_usuario`),
  ADD KEY `id_rol_usuario` (`id_rol_usuario`),
  ADD KEY `id_rol_usuario_2` (`id_rol_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol_usuario` (`id_rol_usuario`),
  ADD KEY `id_genero_usuario` (`id_genero_usuario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_rol_usuario_2` (`id_rol_usuario`),
  ADD KEY `id_genero_usuario_2` (`id_genero_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito_compra`
--
ALTER TABLE `carrito_compra`
  MODIFY `id_carrito_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `genero_usuario`
--
ALTER TABLE `genero_usuario`
  MODIFY `id_genero_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `producto_carrito`
--
ALTER TABLE `producto_carrito`
  MODIFY `id_producto_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id_rol_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_compra`
--
ALTER TABLE `carrito_compra`
  ADD CONSTRAINT `carrito_compra_ibfk_1` FOREIGN KEY (`id_producto_carrito`) REFERENCES `producto_carrito` (`id_producto_carrito`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
