--
-- Base de datos para proyecto Sistema de Votacion, Leandro Lobovsky
--

--
-- Primera tabla: usuarios
--

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `comuna` varchar(30) NOT NULL,
  `candidato` varchar(30) NOT NULL,
  `checkbox` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rut` (`rut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

--
-- Segunda tabla: region
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `idregion` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombreregion` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  PRIMARY KEY (`idregion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`idregion`, `nombreregion`) VALUES
(1, 'Arica y Parinacota y Tarapaca'),
(2, 'Antofagasta'),
(3, 'Atacama y Coquimbo'),
(4, 'Valparaiso'),
(5, 'OHiggins'),
(6, 'Maule'),
(7, 'Biobio'),
(8, 'La Araucania'),
(9, 'Los Rios'),
(10, 'Los Lagos'),
(11, 'Magallanes'),
(12, 'Metropolitana de Santiago');

DROP TABLE IF EXISTS `comuna`;
CREATE TABLE IF NOT EXISTS `comuna` (
  `idcomuna` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrecomuna` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  PRIMARY KEY (`idcomuna`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `comuna` (`idcomuna`, `nombrecomuna`) VALUES
(1, 'General Lagos'),
(2, 'Putre'),
(3, 'Tocopilla'),
(4, 'Mejillones'),
(5, 'Los Vilos'),
(6, 'Salamanca'),
(7, 'Los Andes'),
(8, 'Algarrobo'),
(9, 'Machali'),
(10, 'Graneros'),
(11, 'Cauquenes'),
(12, 'Chanco'),
(13, 'Penco'),
(14, 'Talcahuano'),
(15, 'Lautaro'),
(16, 'Perquenco'),
(17, 'Paillaco'),
(18, 'Valdivia'),
(19, 'Ancud'),
(20, 'Castro'),
(21, 'Punta Arenas'),
(22, 'Torres del Paine'),
(23, 'Estacion Central'),
(24, 'Providencia');

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `idcandidato` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrecandidato` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  PRIMARY KEY (`idcandidato`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `candidato` (`idcandidato`, `nombrecandidato`) VALUES
(1, 'Primer Candidato'),
(2, 'Segundo Candidato');
