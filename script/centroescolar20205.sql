-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para centroescolar
CREATE DATABASE IF NOT EXISTS `centroescolar` /*!40100 DEFAULT CHARACTER SET utf32 COLLATE utf32_spanish2_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `centroescolar`;

-- Volcando estructura para tabla centroescolar.act_cotidianas
CREATE TABLE IF NOT EXISTS `act_cotidianas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asignacion_notas` int DEFAULT NULL,
  `nota_cotidiana` float DEFAULT NULL,
  `nota_porcent` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion_notas` (`id_asignacion_notas`),
  CONSTRAINT `act_cotidianas_ibfk_1` FOREIGN KEY (`id_asignacion_notas`) REFERENCES `asignacion_notas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.act_cotidianas: ~6 rows (aproximadamente)
INSERT INTO `act_cotidianas` (`id`, `id_asignacion_notas`, `nota_cotidiana`, `nota_porcent`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 0, '2018-12-30 12:29:48', '2018-12-30 12:29:48'),
	(2, 2, 0, 0, '2018-12-30 12:29:48', '2018-12-30 12:29:48'),
	(3, 3, 0, 0, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(4, 4, 0, 0, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(5, 5, 0, 0, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(6, 6, 0, 0, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(7, 7, 0, 0, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(8, 8, 0, 0, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(9, 9, 0, 0, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(10, 10, 0, 0, '2019-01-02 13:30:06', '2019-01-02 13:30:06'),
	(11, 11, 10, 3.5, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(12, 12, 8, 2.8, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(13, 13, 9, 3.15, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(14, 14, 9, 3.15, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(15, 15, 9, 3.15, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(16, 16, 9, 3.15, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(17, 17, 9, 3.15, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(18, 18, 9, 3.15, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(19, 19, 9, 3.15, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(20, 20, 4, 1.4, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(21, 21, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(22, 22, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(23, 23, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(24, 24, 8, 2.8, '2019-01-12 00:21:44', '2019-01-12 00:21:44'),
	(25, 25, 8, 2.8, '2019-01-12 00:21:44', '2019-01-12 00:21:44'),
	(26, 26, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(27, 27, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(28, 28, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(29, 29, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(30, 30, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(31, 31, 8, 2.8, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(32, 32, 7, 2.45, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(33, 33, 8, 2.8, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(34, 34, 7, 2.45, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(35, 35, 8, 2.8, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(36, 36, 7, 2.45, '2019-01-13 06:59:48', '2019-01-13 10:55:59'),
	(37, 37, 6, 2.1, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(38, 38, 7, 2.45, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(39, 39, 7, 2.45, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(40, 40, 9, 3.15, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(41, 61, 9, 3.15, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(42, 62, 8, 2.8, '2019-01-13 08:08:55', '2019-01-13 11:41:00'),
	(43, 63, 0, 0, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(44, 64, 0, 0, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(45, 65, 0, 0, '2019-01-13 08:08:56', '2019-01-13 08:08:56'),
	(46, 66, 8, 2.8, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(47, 67, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(48, 68, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(49, 69, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(50, 70, 0, 0, '2019-01-13 08:09:36', '2019-01-13 08:09:36'),
	(51, 71, 8, 2.8, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(52, 72, 8, 2.8, '2019-01-13 08:14:03', '2019-01-13 11:41:38'),
	(53, 73, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(54, 74, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(55, 75, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(56, 76, 7, 2.45, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(57, 77, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(58, 78, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(59, 79, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(60, 80, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(61, 81, 9, 3.15, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(62, 82, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(63, 83, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(64, 84, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(65, 85, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(66, 86, 8, 2.8, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(67, 87, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(68, 88, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(69, 89, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(70, 90, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(71, 96, 9, 3.15, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(72, 97, 8, 2.8, '2019-01-13 09:46:11', '2019-01-13 10:10:16'),
	(73, 98, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(74, 99, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(75, 100, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(76, 101, 6, 2.1, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(77, 102, 8, 2.8, '2019-01-13 09:46:36', '2019-01-16 13:43:26'),
	(78, 103, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(79, 104, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(80, 105, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(81, 106, 7, 2.45, '2019-01-13 09:47:27', '2019-01-13 09:47:27'),
	(82, 107, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(83, 108, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(84, 109, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(85, 110, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(86, 111, 9, 3.15, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(87, 112, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(88, 113, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(89, 114, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(90, 115, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17');

-- Volcando estructura para tabla centroescolar.act_integradoras
CREATE TABLE IF NOT EXISTS `act_integradoras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asignacion_notas` int DEFAULT NULL,
  `activi_1` float DEFAULT NULL,
  `activi_2` float DEFAULT NULL,
  `promedio_i` float DEFAULT NULL,
  `prom_i_porcent` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion_notas` (`id_asignacion_notas`),
  CONSTRAINT `act_integradoras_ibfk_1` FOREIGN KEY (`id_asignacion_notas`) REFERENCES `asignacion_notas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.act_integradoras: ~85 rows (aproximadamente)
INSERT INTO `act_integradoras` (`id`, `id_asignacion_notas`, `activi_1`, `activi_2`, `promedio_i`, `prom_i_porcent`, `created_at`, `updated_at`) VALUES
	(1, 1, 0.01, 1, 0.51, 0.18, '2018-12-30 07:40:48', '2019-01-02 13:30:06'),
	(2, 2, 1, 1, 1, 0.35, '2018-12-30 12:29:48', '2018-12-30 12:29:48'),
	(3, 3, 2, 2, 2, 0.7, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(4, 4, 2, 2, 2, 0.7, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(5, 5, 3, 3, 3, 1.05, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(6, 6, 3, 3, 3, 1.05, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(7, 7, 9, 8, 8.5, 2.97, '2019-01-02 07:01:55', '2019-01-02 07:01:55'),
	(8, 8, 7, 8, 7.5, 2.63, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(9, 9, 0, 0, 0, 0, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(10, 10, 0, 0, 0, 0, '2019-01-02 13:30:06', '2019-01-02 13:30:06'),
	(11, 11, 10, 10, 10, 3.5, '2019-01-08 03:54:03', '2019-01-08 03:54:03'),
	(12, 12, 9, 9, 9, 3.15, '2019-01-08 03:54:03', '2019-01-08 03:54:03'),
	(13, 13, 8, 8, 8, 2.8, '2019-01-08 03:54:03', '2019-01-08 03:54:03'),
	(14, 14, 7, 7, 7, 2.45, '2019-01-08 03:54:03', '2019-01-08 03:54:03'),
	(15, 15, 6, 6, 6, 2.1, '2019-01-08 03:54:03', '2019-01-08 03:54:03'),
	(16, 16, 7, 8, 7.5, 2.63, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(17, 17, 7, 8, 7.5, 2.63, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(18, 18, 7, 8, 7.5, 2.63, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(19, 19, 7, 8, 7.5, 2.63, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(20, 20, 7, 9, 8, 2.8, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(21, 21, 8, 8, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(22, 22, 8, 8, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(23, 23, 8, 8, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(24, 24, 8, 8, 8, 2.8, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(25, 25, 8, 8, 8, 2.8, '2019-01-12 00:21:44', '2019-01-12 00:21:44'),
	(26, 26, 7, 7, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(27, 27, 7, 7, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(28, 28, 7, 7, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(29, 29, 7, 7, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(30, 30, 7, 7, 7, 2.45, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(31, 31, 8, 7, 7.5, 2.63, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(32, 32, 7, 8, 7.5, 2.63, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(33, 33, 8, 7, 7.5, 2.63, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(34, 34, 7, 8, 7.5, 2.63, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(35, 35, 7, 8, 7.5, 2.63, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(36, 36, 10, 6, 8, 2.8, '2019-01-13 06:59:48', '2019-01-13 10:55:59'),
	(37, 37, 4, 5, 4.5, 1.57, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(38, 38, 7, 6, 6.5, 2.27, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(39, 39, 7, 5, 6, 2.1, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(40, 40, 8, 8, 8, 2.8, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(41, 61, 9, 9, 9, 3.15, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(42, 62, 6, 7, 6.5, 2.27, '2019-01-13 08:08:55', '2019-01-13 11:41:00'),
	(43, 63, 0, 0, 0, 0, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(44, 64, 0, 0, 0, 0, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(45, 65, 0, 0, 0, 0, '2019-01-13 08:08:56', '2019-01-13 08:08:56'),
	(46, 66, 8, 7, 7.5, 2.63, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(47, 67, 0, 0, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(48, 68, 0, 0, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(49, 69, 0, 0, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(50, 70, 0, 0, 0, 0, '2019-01-13 08:09:36', '2019-01-13 08:09:36'),
	(51, 71, 6, 7, 6.5, 2.27, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(52, 72, 5, 6, 5.5, 1.92, '2019-01-13 08:14:03', '2019-01-13 11:41:38'),
	(53, 73, 0, 0, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(54, 74, 0, 0, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(55, 75, 0, 0, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(56, 76, 9, 9, 9, 3.15, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(57, 77, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(58, 78, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(59, 79, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(60, 80, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(61, 81, 7, 8, 7.5, 2.63, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(62, 82, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(63, 83, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(64, 84, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(65, 85, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(66, 86, 9, 9, 9, 3.15, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(67, 87, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(68, 88, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(69, 89, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(70, 90, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(71, 96, 9, 9, 9, 3.15, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(72, 97, 9, 9, 9, 3.15, '2019-01-13 09:46:11', '2019-01-13 10:10:16'),
	(73, 98, 0, 0, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(74, 99, 0, 0, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(75, 100, 0, 0, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(76, 101, 8, 6, 7, 2.45, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(77, 102, 6, 7, 6.5, 2.27, '2019-01-13 09:46:36', '2019-01-16 13:43:26'),
	(78, 103, 0, 0, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(79, 104, 0, 0, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(80, 105, 0, 0, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(81, 106, 9, 8, 8.5, 2.97, '2019-01-13 09:47:27', '2019-01-13 09:47:27'),
	(82, 107, 0, 0, 0, 0, '2019-01-13 09:47:27', '2019-01-13 09:47:27'),
	(83, 108, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(84, 109, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(85, 110, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(86, 111, 6, 8, 7, 2.45, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(87, 112, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(88, 113, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(89, 114, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(90, 115, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17');

-- Volcando estructura para tabla centroescolar.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `apellidos` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `no_nie` int NOT NULL,
  `f_nacimiento` date NOT NULL,
  `edad` int DEFAULT NULL,
  `parvularia` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `enfermedad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `nombre_enfermedad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `nombre_madre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `dui_madre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `ocupacion_madre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `tel_madre` int DEFAULT NULL,
  `nombre_padre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `dui_padre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `ocupacion_padre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `tel_padre` int DEFAULT NULL,
  `vive_con` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `carta_compro` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `conducta` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `rendimiento` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `nuevo_in` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `esc_procedencia` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `municipio` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.alumnos: ~14 rows (aproximadamente)
INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `no_nie`, `f_nacimiento`, `edad`, `parvularia`, `enfermedad`, `nombre_enfermedad`, `nombre_madre`, `dui_madre`, `ocupacion_madre`, `tel_madre`, `nombre_padre`, `dui_padre`, `ocupacion_padre`, `tel_padre`, `vive_con`, `carta_compro`, `conducta`, `rendimiento`, `nuevo_in`, `esc_procedencia`, `municipio`, `created_at`, `updated_at`) VALUES
	(1, 'Emely Valeria', 'Martinez', 1111111, '2002-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 12:25:11', '2018-12-30 12:25:11'),
	(2, 'Denis Alejandro', 'Martinez', 3333333, '2003-03-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 12:27:50', '2018-12-30 12:27:50'),
	(3, 'Alexander Bladimir', 'Sanchez', 2222666, '2003-12-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 13:35:21', '2018-12-30 13:35:21'),
	(4, 'Alexander Bladimir', 'Sosa', 3457678, '2004-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-02 16:22:18', '2019-01-02 16:22:18'),
	(5, 'Manuel Antonio', 'Rivas', 8908463, '2019-01-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-02 16:23:12', '2019-01-02 16:23:12'),
	(6, 'Milton Alexander', 'Sosa', 3437999, '2008-07-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-04 12:20:52', '2019-01-04 12:20:52'),
	(7, 'Marcela Beatriz', 'Leiva', 8878684, '2006-09-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-05 10:31:02', '2019-01-05 10:31:02'),
	(8, 'Magaly', 'Castillo', 5454345, '2007-10-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-05 12:34:02', '2019-01-05 12:34:02'),
	(9, 'Karla Maria', 'Alvarez', 6654654, '2015-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-05 12:38:29', '2019-01-05 12:38:29'),
	(10, 'Rosa Maria', 'Velazco', 8658858, '2014-07-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-05 12:39:09', '2019-01-05 12:39:09'),
	(11, 'Zulma Azucena', 'Aguilar', 5675899, '2009-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-05 13:28:08', '2019-01-05 13:28:08'),
	(12, 'Marina Alejandra', 'Sanchez', 5545455, '2003-05-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-06 11:50:00', '2019-01-06 11:50:00'),
	(14, 'Kathya Alejandra', 'Figueroa', 6665656, '2009-05-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-07 13:08:07', '2019-01-07 13:08:07'),
	(17, 'Ana Maria', 'Juarez Perez', 4567864, '2010-01-08', NULL, 'Si', 'Si', 'Enfermedad Cambio', 'Ana Juearez', NULL, NULL, 72781466, 'Juan Pérez', NULL, NULL, NULL, 'Ambos', 'Si', NULL, 'Excelente', 'No', 'Otra escuela', 'Santo Tomas', '2019-01-16 09:47:01', '2019-01-16 10:34:28');

-- Volcando estructura para tabla centroescolar.asignaciones
CREATE TABLE IF NOT EXISTS `asignaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_docente` int DEFAULT NULL,
  `id_grado` int DEFAULT NULL,
  `anio` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_grado` (`id_grado`),
  KEY `id_docente` (`id_docente`),
  CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id`),
  CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.asignaciones: ~9 rows (aproximadamente)
INSERT INTO `asignaciones` (`id`, `id_docente`, `id_grado`, `anio`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 2024, '2018-12-30 12:27:14', '2018-12-30 12:27:14'),
	(2, 2, 8, 2025, '2019-01-02 16:27:29', '2019-01-02 16:27:29'),
	(3, 1, 1, 2025, '2019-01-04 12:19:57', '2019-01-04 12:19:57'),
	(4, 3, 5, 2024, '2019-01-05 12:36:07', '2019-01-05 13:14:14'),
	(5, 4, 13, 2024, '2019-01-05 13:28:55', '2019-01-05 13:28:55'),
	(9, 4, 4, 2025, '2019-01-06 10:32:02', '2019-01-06 10:32:02'),
	(10, 5, 14, 2025, '2019-01-07 07:45:12', '2019-01-07 07:45:12'),
	(11, 1, 2, 2026, '2019-01-07 13:16:08', '2019-01-07 13:16:08'),
	(12, 6, 6, 2019, '2019-01-09 03:46:41', '2019-01-09 03:46:41');

-- Volcando estructura para tabla centroescolar.asignacion_alumnos_notas
CREATE TABLE IF NOT EXISTS `asignacion_alumnos_notas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asignacion` int DEFAULT NULL,
  `id_alumno` int DEFAULT NULL,
  `anio` int DEFAULT NULL,
  `estado_academico` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion` (`id_asignacion`),
  KEY `id_alumno` (`id_alumno`),
  CONSTRAINT `asignacion_alumnos_notas_ibfk_1` FOREIGN KEY (`id_asignacion`) REFERENCES `asignaciones` (`id`),
  CONSTRAINT `asignacion_alumnos_notas_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.asignacion_alumnos_notas: ~13 rows (aproximadamente)
INSERT INTO `asignacion_alumnos_notas` (`id`, `id_asignacion`, `id_alumno`, `anio`, `estado_academico`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 2024, 'Aprobado', '2018-12-30 12:28:03', '2018-12-30 12:28:03'),
	(2, 1, 2, 2024, 'Reprobado', '2018-12-30 12:28:13', '2018-12-30 12:28:13'),
	(3, 1, 3, 2024, 'Aprobado', '2018-12-30 13:35:38', '2018-12-30 13:35:38'),
	(4, 2, 5, 2025, 'En curso', '2019-01-02 16:28:17', '2019-01-02 16:28:17'),
	(5, 2, 4, 2025, 'En curso', '2019-01-02 16:28:25', '2019-01-02 16:28:25'),
	(6, 3, 6, 2025, 'Aprobado', '2019-01-04 13:10:55', '2019-01-13 09:47:41'),
	(7, 3, 7, 2025, 'Reprobado', '2019-01-05 10:31:59', '2019-01-16 13:43:56'),
	(8, 4, 9, 2024, 'Aprobado', '2019-01-05 12:39:45', '2019-01-05 12:39:45'),
	(9, 4, 10, 2024, 'Reprobado', '2019-01-05 12:39:55', '2019-01-05 12:39:55'),
	(10, 5, 11, 2024, 'Aprobado', '2019-01-05 13:33:03', '2019-01-05 13:33:03'),
	(14, 3, 8, 2025, 'Reprobado', '2019-01-06 14:41:08', '2019-01-16 13:43:56'),
	(15, 3, 14, 2025, 'Reprobado', '2019-01-07 13:09:49', '2019-01-16 13:43:56'),
	(16, 3, 12, 2025, 'Reprobado', '2019-01-07 13:23:34', '2019-01-16 13:43:56');

-- Volcando estructura para tabla centroescolar.asignacion_conductas
CREATE TABLE IF NOT EXISTS `asignacion_conductas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asignacion_alumno` int DEFAULT NULL,
  `id_trimestre` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion_alumno` (`id_asignacion_alumno`),
  KEY `id_trimestre` (`id_trimestre`),
  CONSTRAINT `asignacion_conductas_ibfk_1` FOREIGN KEY (`id_asignacion_alumno`) REFERENCES `asignacion_alumnos_notas` (`id`),
  CONSTRAINT `asignacion_conductas_ibfk_2` FOREIGN KEY (`id_trimestre`) REFERENCES `trimestres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.asignacion_conductas: ~11 rows (aproximadamente)
INSERT INTO `asignacion_conductas` (`id`, `id_asignacion_alumno`, `id_trimestre`, `created_at`, `updated_at`) VALUES
	(8, 1, 2, '2019-01-02 09:37:22', '2019-01-02 09:37:22'),
	(9, 2, 2, '2019-01-02 09:37:22', '2019-01-02 09:37:22'),
	(10, 3, 2, '2019-01-02 09:37:22', '2019-01-02 09:37:22'),
	(11, 1, 1, '2019-01-02 09:38:14', '2019-01-02 09:38:14'),
	(12, 2, 1, '2019-01-02 09:38:14', '2019-01-02 09:38:14'),
	(13, 3, 1, '2019-01-02 09:38:14', '2019-01-02 09:38:14'),
	(14, 6, 1, '2019-01-08 10:32:59', '2019-01-08 10:32:59'),
	(15, 7, 1, '2019-01-08 10:32:59', '2019-01-08 10:32:59'),
	(16, 14, 1, '2019-01-08 10:33:00', '2019-01-08 10:33:00'),
	(17, 15, 1, '2019-01-08 10:33:00', '2019-01-08 10:33:00'),
	(18, 16, 1, '2019-01-08 10:33:00', '2019-01-08 10:33:00');

-- Volcando estructura para tabla centroescolar.asignacion_docentes_materias
CREATE TABLE IF NOT EXISTS `asignacion_docentes_materias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_materia` int DEFAULT NULL,
  `id_docente` int DEFAULT NULL,
  `anio` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_materia` (`id_materia`),
  KEY `id_docente` (`id_docente`),
  CONSTRAINT `asignacion_docentes_materias_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`),
  CONSTRAINT `asignacion_docentes_materias_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.asignacion_docentes_materias: ~0 rows (aproximadamente)

-- Volcando estructura para tabla centroescolar.asignacion_notas
CREATE TABLE IF NOT EXISTS `asignacion_notas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_materia` int DEFAULT NULL,
  `id_asignacion_alumno` int DEFAULT NULL,
  `id_trimestre` int DEFAULT NULL,
  `nota_trimestral` float DEFAULT NULL,
  `trimestre` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion_alumno` (`id_asignacion_alumno`),
  KEY `id_materia` (`id_materia`),
  KEY `id_trimestre` (`id_trimestre`),
  CONSTRAINT `asignacion_notas_ibfk_1` FOREIGN KEY (`id_asignacion_alumno`) REFERENCES `asignacion_alumnos_notas` (`id`),
  CONSTRAINT `asignacion_notas_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`),
  CONSTRAINT `asignacion_notas_ibfk_3` FOREIGN KEY (`id_trimestre`) REFERENCES `trimestres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.asignacion_notas: ~110 rows (aproximadamente)
INSERT INTO `asignacion_notas` (`id`, `id_materia`, `id_asignacion_alumno`, `id_trimestre`, `nota_trimestral`, `trimestre`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 0.18, NULL, '2018-12-30 12:29:48', '2019-01-02 13:30:06'),
	(2, 1, 2, 1, 0.35, NULL, '2018-12-30 12:29:48', '2018-12-30 12:29:48'),
	(3, 1, 1, 2, 0.7, NULL, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(4, 1, 2, 2, 0.7, NULL, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(5, 1, 1, 3, 1.05, NULL, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(6, 1, 2, 3, 1.05, NULL, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(7, 2, 1, 1, 2.97, NULL, '2019-01-02 07:01:55', '2019-01-02 07:01:55'),
	(8, 2, 2, 1, 3.38, NULL, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(9, 2, 3, 1, 0, NULL, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(10, 1, 3, 1, 0, NULL, '2019-01-02 13:30:06', '2019-01-02 13:30:06'),
	(11, 1, 6, 1, 8.95, NULL, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(12, 1, 7, 1, 8.05, NULL, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(13, 1, 14, 1, 8.35, NULL, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(14, 1, 15, 1, 8, NULL, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(15, 1, 16, 1, 8.25, NULL, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(16, 1, 6, 2, 7.73, NULL, '2019-01-11 02:11:59', '2019-01-11 02:11:59'),
	(17, 1, 7, 2, 7.73, NULL, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(18, 1, 14, 2, 7.73, NULL, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(19, 1, 15, 2, 7.73, NULL, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(20, 1, 16, 2, 5.85, NULL, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(21, 2, 6, 1, 8, NULL, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(22, 2, 7, 1, 8, NULL, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(23, 2, 14, 1, 8, NULL, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(24, 2, 15, 1, 8, NULL, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(25, 2, 16, 1, 8, NULL, '2019-01-12 00:21:44', '2019-01-12 00:21:44'),
	(26, 3, 6, 1, 7, NULL, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(27, 3, 7, 1, 7, NULL, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(28, 3, 14, 1, 7, NULL, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(29, 3, 15, 1, 7, NULL, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(30, 3, 16, 1, 7, NULL, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(31, 4, 6, 1, 7.68, NULL, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(32, 4, 7, 1, 7.33, NULL, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(33, 4, 14, 1, 7.68, NULL, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(34, 4, 15, 1, 7.33, NULL, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(35, 4, 16, 1, 7.53, NULL, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(36, 1, 6, 3, 5.4, NULL, '2019-01-13 06:59:48', '2019-01-13 10:55:59'),
	(37, 1, 7, 3, 6.07, NULL, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(38, 1, 14, 3, 5.92, NULL, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(39, 1, 15, 3, 6.8, NULL, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(40, 1, 16, 3, 8.35, NULL, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(41, 1, 6, 4, 7.36, NULL, '2019-01-13 08:05:51', '2019-01-13 10:56:12'),
	(42, 1, 7, 4, 7.28, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(43, 1, 14, 4, 7.33, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(44, 1, 15, 4, 7.51, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(45, 1, 16, 4, 7.48, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(46, 2, 6, 4, 8.21, NULL, '2019-01-13 08:05:51', '2019-01-13 08:15:43'),
	(47, 2, 7, 4, 7.18, NULL, '2019-01-13 08:05:51', '2019-01-13 11:41:54'),
	(48, 2, 14, 4, 2.67, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(49, 2, 15, 4, 2.67, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(50, 2, 16, 4, 2.67, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(51, 3, 6, 4, 7.14, NULL, '2019-01-13 08:05:51', '2019-01-13 08:20:47'),
	(52, 3, 7, 4, 2.33, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(53, 3, 14, 4, 2.33, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(54, 3, 15, 4, 2.33, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(55, 3, 16, 4, 2.33, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(56, 4, 6, 4, 7.49, NULL, '2019-01-13 08:05:51', '2019-01-13 08:15:43'),
	(57, 4, 7, 4, 2.44, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(58, 4, 14, 4, 2.56, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(59, 4, 15, 4, 2.44, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(60, 4, 16, 4, 2.51, NULL, '2019-01-13 08:05:51', '2019-01-13 08:05:51'),
	(61, 2, 6, 2, 9, NULL, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(62, 2, 7, 2, 6.12, NULL, '2019-01-13 08:08:55', '2019-01-13 11:41:00'),
	(63, 2, 14, 2, 0, NULL, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(64, 2, 15, 2, 0, NULL, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(65, 2, 16, 2, 0, NULL, '2019-01-13 08:08:56', '2019-01-13 08:08:56'),
	(66, 4, 6, 3, 7.68, NULL, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(67, 4, 7, 3, 0, NULL, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(68, 4, 14, 3, 0, NULL, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(69, 4, 15, 3, 0, NULL, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(70, 4, 16, 3, 0, NULL, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(71, 2, 6, 3, 7.62, NULL, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(72, 2, 7, 3, 7.42, NULL, '2019-01-13 08:14:03', '2019-01-13 11:41:38'),
	(73, 2, 14, 3, 0, NULL, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(74, 2, 15, 3, 0, NULL, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(75, 2, 16, 3, 0, NULL, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(76, 4, 6, 2, 7.1, NULL, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(77, 4, 7, 2, 0, NULL, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(78, 4, 14, 2, 0, NULL, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(79, 4, 15, 2, 0, NULL, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(80, 4, 16, 2, 0, NULL, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(81, 3, 6, 2, 8.48, NULL, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(82, 3, 7, 2, 0, NULL, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(83, 3, 14, 2, 0, NULL, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(84, 3, 15, 2, 0, NULL, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(85, 3, 16, 2, 0, NULL, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(86, 3, 6, 3, 5.95, NULL, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(87, 3, 7, 3, 0, NULL, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(88, 3, 14, 3, 0, NULL, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(89, 3, 15, 3, 0, NULL, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(90, 3, 16, 3, 0, NULL, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(91, 5, 6, 4, 7.17, NULL, '2019-01-13 09:11:51', '2019-01-13 09:47:41'),
	(92, 5, 7, 4, 5.17, NULL, '2019-01-13 09:11:51', '2019-01-16 13:43:56'),
	(93, 5, 14, 4, 0, NULL, '2019-01-13 09:11:51', '2019-01-13 09:11:51'),
	(94, 5, 15, 4, 0, NULL, '2019-01-13 09:11:51', '2019-01-13 09:11:51'),
	(95, 5, 16, 4, 0, NULL, '2019-01-13 09:11:51', '2019-01-13 09:11:51'),
	(96, 5, 6, 1, 8.4, NULL, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(97, 5, 7, 1, 7.9, NULL, '2019-01-13 09:46:11', '2019-01-13 10:10:16'),
	(98, 5, 14, 1, 0, NULL, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(99, 5, 15, 1, 0, NULL, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(100, 5, 16, 1, 0, NULL, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(101, 5, 6, 2, 5.9, NULL, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(102, 5, 7, 2, 7.62, NULL, '2019-01-13 09:46:36', '2019-01-16 13:43:26'),
	(103, 5, 14, 2, 0, NULL, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(104, 5, 15, 2, 0, NULL, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(105, 5, 16, 2, 0, NULL, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(106, 5, 6, 3, 7.22, NULL, '2019-01-13 09:47:27', '2019-01-13 09:47:27'),
	(107, 5, 7, 3, 0, NULL, '2019-01-13 09:47:27', '2019-01-13 09:47:27'),
	(108, 5, 14, 3, 0, NULL, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(109, 5, 15, 3, 0, NULL, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(110, 5, 16, 3, 0, NULL, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(111, 7, 6, 1, 6.95, NULL, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(112, 7, 7, 1, 0, NULL, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(113, 7, 14, 1, 0, NULL, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(114, 7, 15, 1, 0, NULL, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(115, 7, 16, 1, 0, NULL, '2025-03-19 11:48:17', '2025-03-19 11:48:17');

-- Volcando estructura para tabla centroescolar.conductas
CREATE TABLE IF NOT EXISTS `conductas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asignacion_conductas` int DEFAULT NULL,
  `moral_civica` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `nota_conducta` int DEFAULT NULL,
  `observaciones` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion_conductas` (`id_asignacion_conductas`),
  CONSTRAINT `conductas_ibfk_1` FOREIGN KEY (`id_asignacion_conductas`) REFERENCES `asignacion_conductas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.conductas: ~11 rows (aproximadamente)
INSERT INTO `conductas` (`id`, `id_asignacion_conductas`, `moral_civica`, `nota_conducta`, `observaciones`, `created_at`, `updated_at`) VALUES
	(1, 8, 'Muy bueno', 2, 'Segunda observación del trimestre, para Prueba de inserción de datos.', '2019-01-02 09:37:22', '2019-01-02 15:57:22'),
	(2, 9, 'Muy bueno', 2, NULL, '2019-01-02 09:37:22', '2019-01-02 15:16:50'),
	(3, 10, 'Muy bueno', 2, NULL, '2019-01-02 09:37:22', '2019-01-02 15:16:50'),
	(4, 11, 'Regular', 10, 'Primera observación del trimestre, para Prueba de inserción de datos.', '2019-01-02 09:38:14', '2019-01-03 02:43:06'),
	(5, 12, 'Regular', 10, NULL, '2019-01-02 09:38:14', '2019-01-03 02:43:06'),
	(6, 13, 'Regular', 10, NULL, '2019-01-02 09:38:14', '2019-01-03 02:43:06'),
	(7, 14, 'Muy bueno', 10, 'Observación 1', '2019-01-08 10:32:59', '2025-03-19 11:51:13'),
	(8, 15, 'Muy bueno', 9, 'Observación 2', '2019-01-08 10:32:59', '2025-03-19 11:51:13'),
	(9, 16, 'Deficiente', 8, 'Observación deficiente', '2019-01-08 10:33:00', '2025-03-19 11:51:13'),
	(10, 17, 'Excelente', 7, NULL, '2019-01-08 10:33:00', '2019-01-08 10:33:00'),
	(11, 18, 'Excelente', 6, NULL, '2019-01-08 10:33:00', '2019-01-08 10:33:00');

-- Volcando estructura para tabla centroescolar.docentes
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `no_escalafon` decimal(10,0) NOT NULL,
  `no_dui` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `telefono` char(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `direccion` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.docentes: ~6 rows (aproximadamente)
INSERT INTO `docentes` (`id`, `id_usuario`, `no_escalafon`, `no_dui`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES
	(1, 1, 1458799, '1234565498', '72781466', 'Km. 11.5, casa  4,  El Porvenir, Caserío Cuesta de la Cruz.', '2018-12-30 12:24:44', '2018-12-30 12:24:44'),
	(2, 2, 7567567, '2342222222', '73666455', 'San Salvador 8 calle poniente.', '2019-01-02 16:21:43', '2019-01-02 16:21:43'),
	(3, 3, 1458791, '4564566666', '72781466', 'Km. 11.5, casa  4,  El Porvenir, Caserío Cuesta de la Cruz.', '2019-01-05 12:35:51', '2019-01-05 12:35:51'),
	(4, 4, 98, '4564788845', '72781466', 'Km. 11.5, casa  4,  El Porvenir, Caserío Cuesta de la Cruz.', '2019-01-05 13:27:31', '2019-01-05 13:27:31'),
	(5, 5, 2222222, '1111111111', '78787878', 'Km. 11.5, casa  4,  El Porvenir, Caserío Cuesta de la Cruz.', '2019-01-07 07:44:04', '2019-01-07 07:44:04'),
	(6, 6, 4446464, '5556565656', '78799559', 'Km. 11.5, casa  4,  El Porvenir, Caserío Cuesta de la Cruz.', '2019-01-09 02:29:42', '2019-01-09 02:29:42'),
	(8, 8, 4564564, '6565464564', '77854744', 'Su casa', '2025-03-19 11:25:24', '2025-03-19 11:25:24');

-- Volcando estructura para tabla centroescolar.grados
CREATE TABLE IF NOT EXISTS `grados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `seccion` char(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `capacidad` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.grados: ~14 rows (aproximadamente)
INSERT INTO `grados` (`id`, `nombre`, `seccion`, `capacidad`, `created_at`, `updated_at`) VALUES
	(1, 'Primero', 'A', 30, '2018-12-30 12:25:28', '2018-12-30 12:25:28'),
	(2, 'Noveno', 'A', 30, '2018-12-30 12:25:49', '2018-12-30 12:25:49'),
	(3, 'Noveno', 'B', 30, '2019-01-02 16:27:10', '2019-01-02 16:27:10'),
	(4, 'Kinder', 'A', 30, '2019-01-05 10:51:04', '2019-01-05 10:51:04'),
	(5, 'Preparatoria', 'A', 30, '2019-01-05 10:51:14', '2019-01-05 10:51:14'),
	(6, 'Segundo', 'A', 30, '2019-01-05 10:51:32', '2019-01-05 10:51:32'),
	(7, 'Tercero', 'A', 30, '2019-01-05 10:51:44', '2019-01-05 10:51:44'),
	(8, 'Cuarto', 'A', 30, '2019-01-05 10:52:18', '2019-01-05 10:52:18'),
	(9, 'Quinto', 'A', 30, '2019-01-05 10:52:30', '2019-01-05 10:52:30'),
	(10, 'Sexto', 'A', 30, '2019-01-05 10:52:39', '2019-01-05 10:52:39'),
	(11, 'Séptimo', 'A', 30, '2019-01-05 10:52:49', '2019-01-05 10:52:49'),
	(12, 'Octavo', 'A', 30, '2019-01-05 10:53:05', '2019-01-05 10:53:05'),
	(13, 'Preparatoria', 'B', 30, '2019-01-05 13:28:23', '2019-01-05 13:28:23'),
	(14, 'Primero', 'B', 30, '2019-01-07 07:44:27', '2019-01-07 07:44:27');

-- Volcando estructura para tabla centroescolar.materias
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.materias: ~5 rows (aproximadamente)
INSERT INTO `materias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Matemática', '2018-12-30 12:26:07', '2018-12-30 12:26:07'),
	(2, 'Ciencias Naturales', '2018-12-30 12:26:12', '2018-12-30 12:26:12'),
	(3, 'Lenguaje', '2018-12-30 12:26:21', '2018-12-30 12:26:21'),
	(4, 'Ciencias Sociales', '2018-12-30 12:26:34', '2018-12-30 12:26:34'),
	(5, 'Educación Física', '2019-01-13 09:10:45', '2019-01-13 09:10:45'),
	(7, 'Música', '2025-03-19 11:46:57', '2025-03-19 11:46:57');

-- Volcando estructura para tabla centroescolar.permisos
CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.permisos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla centroescolar.permiso_rol
CREATE TABLE IF NOT EXISTS `permiso_rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_permisos` int DEFAULT NULL,
  `id_rol` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_permisos` (`id_permisos`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `permiso_rol_ibfk_1` FOREIGN KEY (`id_permisos`) REFERENCES `permisos` (`id`),
  CONSTRAINT `permiso_rol_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.permiso_rol: ~0 rows (aproximadamente)

-- Volcando estructura para tabla centroescolar.pruebas
CREATE TABLE IF NOT EXISTS `pruebas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asignacion_notas` int DEFAULT NULL,
  `laboratorio` float DEFAULT NULL,
  `examen` float DEFAULT NULL,
  `promedio_p` float DEFAULT NULL,
  `prom_p_porcent` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asignacion_notas` (`id_asignacion_notas`),
  CONSTRAINT `pruebas_ibfk_1` FOREIGN KEY (`id_asignacion_notas`) REFERENCES `asignacion_notas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.pruebas: ~0 rows (aproximadamente)
INSERT INTO `pruebas` (`id`, `id_asignacion_notas`, `laboratorio`, `examen`, `promedio_p`, `prom_p_porcent`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 0, 0, 0, '2018-12-30 12:29:48', '2018-12-30 12:29:48'),
	(2, 2, 0, 0, 0, 0, '2018-12-30 12:29:49', '2018-12-30 12:29:49'),
	(3, 3, 0, 0, 0, 0, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(4, 4, 0, 0, 0, 0, '2018-12-30 12:30:09', '2018-12-30 12:30:09'),
	(5, 5, 0, 0, 0, 0, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(6, 6, 0, 0, 0, 0, '2018-12-30 12:30:44', '2018-12-30 12:30:44'),
	(7, 7, 0, 0, 0, 0, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(8, 8, 0, 5, 2.5, 0.75, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(9, 9, 0, 0, 0, 0, '2019-01-02 07:01:56', '2019-01-02 07:01:56'),
	(10, 10, 0, 0, 0, 0, '2019-01-02 13:30:06', '2019-01-02 13:30:06'),
	(11, 11, 7, 6, 6.5, 1.95, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(12, 12, 7, 7, 7, 2.1, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(13, 13, 8, 8, 8, 2.4, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(14, 14, 8, 8, 8, 2.4, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(15, 15, 10, 10, 10, 3, '2019-01-08 03:54:03', '2019-01-11 01:41:32'),
	(16, 16, 6, 7, 6.5, 1.95, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(17, 17, 6, 7, 6.5, 1.95, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(18, 18, 6, 7, 6.5, 1.95, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(19, 19, 6, 7, 6.5, 1.95, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(20, 20, 2, 9, 5.5, 1.65, '2019-01-11 02:12:00', '2019-01-11 02:12:00'),
	(21, 21, 8, 8, 8, 2.4, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(22, 22, 8, 8, 8, 2.4, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(23, 23, 8, 8, 8, 2.4, '2019-01-12 00:21:43', '2019-01-12 00:21:43'),
	(24, 24, 8, 8, 8, 2.4, '2019-01-12 00:21:44', '2019-01-12 00:21:44'),
	(25, 25, 8, 8, 8, 2.4, '2019-01-12 00:21:44', '2019-01-12 00:21:44'),
	(26, 26, 7, 7, 7, 2.1, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(27, 27, 7, 7, 7, 2.1, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(28, 28, 7, 7, 7, 2.1, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(29, 29, 7, 7, 7, 2.1, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(30, 30, 7, 7, 7, 2.1, '2019-01-12 00:22:52', '2019-01-12 00:22:52'),
	(31, 31, 7, 8, 7.5, 2.25, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(32, 32, 8, 7, 7.5, 2.25, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(33, 33, 7, 8, 7.5, 2.25, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(34, 34, 8, 7, 7.5, 2.25, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(35, 35, 7, 7, 7, 2.1, '2019-01-12 00:24:00', '2019-01-12 00:24:00'),
	(36, 36, 1, 0, 0.5, 0.15, '2019-01-13 06:59:48', '2019-01-13 10:55:59'),
	(37, 37, 7, 9, 8, 2.4, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(38, 38, 6, 2, 4, 1.2, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(39, 39, 7, 8, 7.5, 2.25, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(40, 40, 7, 9, 8, 2.4, '2019-01-13 06:59:49', '2019-01-13 06:59:49'),
	(41, 61, 9, 9, 9, 2.7, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(42, 62, 3, 4, 3.5, 1.05, '2019-01-13 08:08:55', '2019-01-13 11:41:00'),
	(43, 63, 0, 0, 0, 0, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(44, 64, 0, 0, 0, 0, '2019-01-13 08:08:55', '2019-01-13 08:08:55'),
	(45, 65, 0, 0, 0, 0, '2019-01-13 08:08:56', '2019-01-13 08:08:56'),
	(46, 66, 7, 8, 7.5, 2.25, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(47, 67, 0, 0, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(48, 68, 0, 0, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(49, 69, 0, 0, 0, 0, '2019-01-13 08:09:35', '2019-01-13 08:09:35'),
	(50, 70, 0, 0, 0, 0, '2019-01-13 08:09:36', '2019-01-13 08:09:36'),
	(51, 71, 8, 9, 8.5, 2.55, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(52, 72, 9, 9, 9, 2.7, '2019-01-13 08:14:03', '2019-01-13 11:41:38'),
	(53, 73, 0, 0, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(54, 74, 0, 0, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(55, 75, 0, 0, 0, 0, '2019-01-13 08:14:03', '2019-01-13 08:14:03'),
	(56, 76, 5, 5, 5, 1.5, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(57, 77, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(58, 78, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(59, 79, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(60, 80, 0, 0, 0, 0, '2019-01-13 08:14:56', '2019-01-13 08:14:56'),
	(61, 81, 9, 9, 9, 2.7, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(62, 82, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(63, 83, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(64, 84, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(65, 85, 0, 0, 0, 0, '2019-01-13 08:15:37', '2019-01-13 08:15:37'),
	(66, 86, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(67, 87, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(68, 88, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(69, 89, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(70, 90, 0, 0, 0, 0, '2019-01-13 08:20:24', '2019-01-13 08:20:24'),
	(71, 96, 7, 7, 7, 2.1, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(72, 97, 7, 6, 6.5, 1.95, '2019-01-13 09:46:11', '2019-01-13 10:10:16'),
	(73, 98, 0, 0, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(74, 99, 0, 0, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(75, 100, 0, 0, 0, 0, '2019-01-13 09:46:11', '2019-01-13 09:46:11'),
	(76, 101, 5, 4, 4.5, 1.35, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(77, 102, 9, 8, 8.5, 2.55, '2019-01-13 09:46:36', '2019-01-16 13:43:26'),
	(78, 103, 0, 0, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(79, 104, 0, 0, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(80, 105, 0, 0, 0, 0, '2019-01-13 09:46:36', '2019-01-13 09:46:36'),
	(81, 106, 6, 6, 6, 1.8, '2019-01-13 09:47:27', '2019-01-13 09:47:27'),
	(82, 107, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(83, 108, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(84, 109, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(85, 110, 0, 0, 0, 0, '2019-01-13 09:47:28', '2019-01-13 09:47:28'),
	(86, 111, 9, 0, 4.5, 1.35, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(87, 112, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(88, 113, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(89, 114, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17'),
	(90, 115, 0, 0, 0, 0, '2025-03-19 11:48:17', '2025-03-19 11:48:17');

-- Volcando estructura para tabla centroescolar.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.roles: ~0 rows (aproximadamente)

-- Volcando estructura para tabla centroescolar.rol_usuario
CREATE TABLE IF NOT EXISTS `rol_usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_rol` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `rol_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`),
  CONSTRAINT `rol_usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.rol_usuario: ~0 rows (aproximadamente)

-- Volcando estructura para tabla centroescolar.trimestres
CREATE TABLE IF NOT EXISTS `trimestres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.trimestres: ~0 rows (aproximadamente)
INSERT INTO `trimestres` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Primer', '2018-12-11 07:53:59', '2018-12-11 07:53:59'),
	(2, 'Segundo', '2018-12-11 07:54:05', '2018-12-11 07:54:05'),
	(3, 'Tercer', '2018-12-11 07:54:05', '2018-12-11 07:54:05'),
	(4, 'Cuarto', '2018-12-11 07:54:45', '2018-12-11 07:54:45');

-- Volcando estructura para tabla centroescolar.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` char(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla centroescolar.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `usuario`, `name`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'LeoSerpas', 'Leonardo Serpas', '$2y$10$jSBFR7EyhToLmz3OlLZnrOZXN34ZdOZzgLBAwNFAQZahqOAcehcU.', 'leon_s054@hotmail.com', 'xyqdOtnW6KaGKxubGpLhDIqvyRZDzXeMuI6D8uxNHTlltuddllIBCCT2dB4h', '2018-12-30 12:23:36', '2018-12-30 12:23:36'),
	(2, 'Karen Elvira Peñate', 'Karen Elvira Peñate Aviles', '$2y$10$ASHxsXpE8/rG.6C3zQYdrepzpw7KyTp37Om0p0XI/4dfTA3jdl0CW', 'karen.penate@ues.edu.sv', 'Kc4Atzo0izRA2PeopI0zsNuByQxpaTpQ2HHm38dyVzLFIjlYirTkYksBY0np', '2019-01-02 16:20:56', '2019-01-02 16:20:56'),
	(3, 'MarthaCorena', 'Martha Julia Corena', '$2y$10$tsFyg3bksGo0.DtyDh6E.uELBPQPYTEiXMdzbR.Stkv46ThLREwe2', 'martha123@hotmail.com', 'Dy0xyBvdCaf1kNUocLmLdDkkxFXfZt3qYBSE0ZRTFGOF4q2Zpit14wWjy9YX', '2019-01-05 12:33:27', '2019-01-05 12:33:27'),
	(4, 'CVeronica', 'Claudia Veronica Campos', '$2y$10$nuEJyB4NK0B79ejHCWjsTe0Vre0Ii7Ryk0rr1CoOwzxA2GRfOMd8.', 'veronica123@hotmail.com', 'KHJ1BokO0lbW3hE4V0Lim0LL8Qsnvqt3KHqXVv1LSB92ToKDghU1vSwsBdf6', '2019-01-05 13:26:57', '2019-01-05 13:26:57'),
	(5, 'Hernandez', 'Karla Maria', '$2y$10$b.0MV5C.R6wNAwAUjzMO9Orjsy3g.rHKe8yTTMV1xu1ev0O4k5IX.', 'karla123@hotmail.com', 'D2YG0KdQyN29ACkbtqMrHfGgrdpI3yi1GoU4pGGlm6pdCGfoNVCBen2QYW38', '2019-01-07 07:43:36', '2019-01-07 07:43:36'),
	(6, 'Mejía Hernandez', 'Christopher Alexander', '$2y$10$6J..wSjEqrfe.sqUvDNsFeCqvOKRZFFVjKrynFS.beNTSkhMp9.uG', 'alexander123@hotmail.com', 'NLvpn79WrY5MpUZ2KajbtMRwxwezCbIsgzNz1uBHzAk17BTssZDVl1uYMGNS', '2019-01-09 02:06:48', '2019-01-09 02:06:48'),
	(7, 'DocentePrueba', 'Docente de Prueba', '$2y$10$087DinEBw8Zjs2Iep7..aeBRD06GZAwakWb0rR6hXjEo0wTwXCuPC', 'docente_prueba@hotmail.com', NULL, '2019-01-16 13:59:04', '2019-01-16 13:59:04'),
	(8, 'Marcelo', 'Marcelo', '$2y$10$KXDkxKGHlmVmizHzijg4RO6g0HAxRNpXSu90xt.eswTEmDmVooJam', 'marcelo@gmail.com', 'Yc4X0oV34wpEF1aPj478sHa0PFnou0gtQhtWy7XAJaU0e3zTFQaUrMh36UhB', '2025-03-19 11:23:50', '2025-03-19 11:23:50');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
