SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyecto`;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `social_media`
--
CREATE TABLE `social_media` (
  `socmed_id` int(11) NOT NULL,
  `socmed_icono` varchar(80) DEFAULT NULL,
  `socmed_url` text DEFAULT NULL,
  `est` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Estructura de tabla para la tabla `estudios`
--
CREATE TABLE estudios (
    estudio_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    institucion VARCHAR(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE,
    estado ENUM('Activo', 'Inactivo') DEFAULT 'Activo',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usu_id) ON DELETE CASCADE
);
--
-- Estructura de tabla para la tabla `experiencia`
--
CREATE TABLE experiencia (
    experiencia_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    empresa VARCHAR(255) NOT NULL,
    puesto VARCHAR(255) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE,
    estado ENUM('Activo', 'Inactivo') DEFAULT 'Activo',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usu_id) ON DELETE CASCADE
);
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `categoria`
--
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `fecha_crea`, `estado`) VALUES
(1, 'minuto de Dios', '2023-06-01 18:25:17', 1),
(2, 'basicas', '2023-06-01 17:06:21', 1),
(3, 'profesional', '2023-06-01 18:25:17', 1),
(4, 'electiva ', '2023-06-01 17:06:21', 1);

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `ape_paterno` text DEFAULT NULL,
  `ape_materno` text DEFAULT NULL,
  `usu_correo` text DEFAULT NULL,
  `usu_pass` text DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

