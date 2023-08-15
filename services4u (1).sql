-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2023 a las 04:39:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `services4u`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `idServicio` int(11) NOT NULL,
  `nombreServicio` varchar(100) NOT NULL,
  `fotos` varchar(100) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `numeroCelular` varchar(20) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`idServicio`, `nombreServicio`, `fotos`, `ubicacion`, `numeroCelular`, `precio`, `descripcion`) VALUES
(28, 'Cerrajeria Pepito Llaves', './uploads/0e5474fbd3d54d5f5e67de5ba4ff0359.jpeg', 'Av George Washington 308, Fidel Velázquez, 31210 C', '6141318318', 'A tratar', 'Cerrajero\r\nAutomóviles\r\nCerrajero a domicilio\r\nCopia de llaves de automóviles\r\nInstalación\r\nLlaves remotas\r\nReprogramación de llave digital y remota para automóviles\r\nCerrajero a domicilio'),
(29, 'Venta de chorizo Camargo', '', 'UTCH', '648121679', '80', 'Venta de chorizo de Camargo, estudiante foráneo de cd Camargo '),
(31, 'Vulcanizadora Desponchado movil MARMONT 22hrs', './uploads/b9903d29a3a3105264bed2763d206543.jpeg', ' C. Miguel Barragán 6918, Parral, 31150 Chihuahua,', '6145292881', 'A tratar', 'Desponchado movil. Vamos a donde estas tu.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newac`
--

CREATE TABLE `newac` (
  `IdUsuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `newac`
--

INSERT INTO `newac` (`IdUsuario`, `nombre`, `email`, `password`) VALUES
(2, 'Tamara', 'tam@gmail.com', '0000'),
(3, 'pepepepepeep', 'maxnavar@gmail.com', '123'),
(4, 'pepepepepeep', 'maxnavar@gmail.com', '123'),
(5, 'ipjkpo', 'tamarabocanegra31@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `newac`
--
ALTER TABLE `newac`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `newac`
--
ALTER TABLE `newac`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
