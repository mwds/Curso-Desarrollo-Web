-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-10-2012 a las 00:00:16
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemacompras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_oc`
--

CREATE TABLE IF NOT EXISTS `detalle_oc` (
  `nro_oc` int(4) NOT NULL,
  `prec_unt` float(5,2) NOT NULL,
  `cant` int(5) NOT NULL,
  PRIMARY KEY (`nro_oc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id_prod` int(4) NOT NULL,
  `nro_expte` int(4) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expte`
--

CREATE TABLE IF NOT EXISTS `expte` (
  `nro_expte` int(4) NOT NULL,
  `causante` varchar(30) NOT NULL,
  PRIMARY KEY (`nro_expte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `o_compras`
--

CREATE TABLE IF NOT EXISTS `o_compras` (
  `nro_oc` int(4) NOT NULL,
  `id_pro` int(4) NOT NULL,
  `total` float(5,2) NOT NULL,
  `feca` date NOT NULL,
  `nro_expte` int(4) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `id_prov` int(4) NOT NULL,
  PRIMARY KEY (`nro_oc`),
  KEY `id_pro` (`id_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `nro_pedido` int(4) NOT NULL AUTO_INCREMENT,
  `nro_expte` varchar(10) NOT NULL,
  `id_prod` int(4) NOT NULL,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`nro_pedido`),
  KEY `nro_expte` (`nro_expte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE IF NOT EXISTS `presupuesto` (
  `nro_presu` int(4) NOT NULL AUTO_INCREMENT,
  `id_prod` int(4) NOT NULL,
  `cant` int(5) NOT NULL,
  `fecha_presu` date NOT NULL,
  PRIMARY KEY (`nro_presu`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_prod` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `presentacion` varchar(10) NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_prov` int(4) NOT NULL AUTO_INCREMENT,
  `cuil_cuit` varchar(11) NOT NULL,
  `razon_social` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  PRIMARY KEY (`id_prov`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(10) NOT NULL,
  `contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
