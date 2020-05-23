-- --------------------------------------------------------
-- Хост:                         apxat.ru
-- Версия сервера:               5.5.59-0ubuntu0.14.04.1 - (Ubuntu)
-- Операционная система:         debian-linux-gnu
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blog`;

-- Дамп структуры для таблица blog.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `preview_text` text CHARACTER SET utf8 NOT NULL,
  `full_text` text CHARACTER SET utf8 NOT NULL,
  `subject` varchar(256) CHARACTER SET utf8 NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.articles: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `author_id`, `create_date`, `last_edit_date`, `preview_text`, `full_text`, `subject`, `visible`) VALUES
	(1, 20, '2018-08-16 05:31:43', '0000-00-00 00:00:00', '', 'Новая статья \r\n\r\n\r\n**Новая статья **\r\n\r\n*Новая статья *', 'Новая статья ', 0),
	(2, 20, '2018-08-16 05:35:18', '0000-00-00 00:00:00', '', 'Всем привет ! Хочу поделиться нашими наработками в плане ведения учета.\r\nНа текущий момент у нас есть один розничный магазин в Москве, интернет-магазин работающий на всю Россию, система учета товаров, простенькая CRM.\r\nЯ буду рассказывать о том как мы пришли к этому  и как работаем сейчас.\r\n		Мы пробовали разные связки, такие как мойсклад и 1с-битрикс, 1с управление торговлей и 1с-битрикс. К сожалению синхронизация данных оставалась проблемным местом. Сейчас есть понимание, что это можно заставить работать, к тому же прошло приличное время, но стоит это гораздо больших денег чем мы тогда были готовы потратить. Хотя свое решение вышло не сильно дешевле.\r\n		На текущий момент мы работаем через сайт, все действия проходят через него, у нас одна база данных, мы используем MySQL. \r\n		\r\n		Наша системы содержит следующие разделы:\r\n		\r\n		Отчеты и логи\r\n		Розница\r\n		Упаковка\r\n		Заказы\r\n		Касса\r\n		Закупка\r\n		Склад\r\n		Администратор\r\n		Справочники\r\n		Контент-менеджер\r\n		\r\n		В каждом новом посте я буду разбирать отдельный раздел сайта и связанные с ним темы. \r\n		\r\n	![Alt text](https://monosnap.com/image/cHmV7KeEUuHwvBpLfTlLdENUA0R9iB.png)\r\n	\r\n\r\n\r\n\r\n', 'Все для продаж через розницу и интернет в одном флаконе. ', 1);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Дамп структуры для таблица blog.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.comments: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `article_id`, `user_id`, `date_create`, `comment`, `deleted`) VALUES
	(1, 2, 1, '2018-09-12 12:04:16', 'Привет', 0);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Дамп структуры для таблица blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы blog.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `hashed_password`, `reg_date`, `first_name`, `last_name`, `deleted`) VALUES
	(1, 'apxata@gmail.com', '$2y$10$E2arR9d7kS6rH64oCgE5deITM4n3pJ/s1Jus5/OkrGctRyAuD1Nhm', '2018-08-01 05:26:19', '', '', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
