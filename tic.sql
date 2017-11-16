-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 13:41:19
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `copete` varchar(45) NOT NULL,
  `texto` varchar(5000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `destacada` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `fecha`, `titulo`, `copete`, `texto`, `image`, `destacada`) VALUES
(1, '2017-11-02 00:00:00', 'Peru al Mundial', 'Peru clasifico al Mundial', 'sdhgakfjgsdlbsdjkxfjkdlkgnslk fngkjlsdfngklsdfnglkdsn glkdfngkldfnghklfdngdklsnlk', 'http://en-cdnmed.agilecontent.com//resources/jpg/8/2/1510829294428.jpg', 1),
(2, '2017-11-01 00:00:00', 'eyrhfmdryjfd', 'jmgfhdnjmryfjktrjk', 'tyjtryjtjhjyjyj\r\nryj5yjrjryjyr\r\njrjyrjyrjrjryjjrjrjrjy jryjyr\r\nwjhyj\r\nukliyjryjj mht kiulfyjr', 'https://lh4.googleusercontent.com/-YUQ2FhvsBus/AAAAAAAAAAI/AAAAAAAADnw/UC7XKamLm7U/w506-h910/photo.jpg', 0),
(3, '2017-11-03 00:00:00', ' bhjjhjhjhgjghj', 'hgjhgy  vhhjj hgghfddg fdhgyfghfhgyu', 'tfnfgkbkfjgnjkfsg  \r\nfgfdlmgklfngkljnfgj sdfknglfksngknsdf dflkdslkfs sdfkjfsdlkfdsñlk zdflkfdlñkfd dflkdflkñ fzdñkjlnfdmfdkñjfd, nfdz', 'https://pbs.twimg.com/profile_images/2366815129/m0fnfn4rgg2pysc5y8vm_400x400.jpeg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
