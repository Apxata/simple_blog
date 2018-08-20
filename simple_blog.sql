-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.33-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
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
	(1, 20, '2018-08-16 09:31:43', '0000-00-00 00:00:00', '', 'Новая статья \r\n\r\n\r\n**Новая статья **\r\n\r\n*Новая статья *', 'Новая статья ', 1),
	(2, 20, '2018-08-16 09:35:18', '0000-00-00 00:00:00', '', 'Всем привет ! Тут я хочу рассказать почему я решил вести блог. Основной стимул - это\r\nизучение РНР. Движок этого блога разрабатывается мной полностью с нуля. Но это только\r\nодна из причин. Есть ощущение что люди кто получает какой-то опыт, хотят им поделиться.\r\nОдни читают какие-то лекции и начинают выступать, другие пытаются продать тренинг, что\r\nстало очень популярно последнее время, некоторые ведут блоги. Я решил начать с\r\nпоследнего. Нужна практическая и интересная задача для изучения РНР, плюс есть желание\r\nподелиться опытом в ведении бизнеса. Опыт не очень большой но есть. В целом я думаю,\r\nчто если бы каждый человек делился своим опытом со всеми, была бы нереальная база\r\nи можно было бы многое почерпнуть. В этом и есть сила интернета, но пока далеко не все\r\nделятся своим опытом и его зачастую не так то просто найти в куче разного рода \r\nинформации. \r\nВ этот бизнес я пришел случайно, меня позвал друг. Я немного разбирался в компах, работал\r\nсисадмином и были небольшие накопления. Когда я вошел в дело, то стал отвечать за всю\r\nИТ часть. Это был интернет-магазин по продаже запчастей для китайской мототехники, \r\nпитбайков.  Как это бывает, бизнес начинался с продажи запчастей из гаража, но уже \r\nперерос этот уровень и нужно было решать как развиваться дальше. Сайт был на джумле\r\n1.5 версии. Опыта ведения бизнеса у нас особо не было, все приходилось изучать с нуля.\r\nВ целом ничего особо сложного нет, особенно сейчас, вся информация есть в интернете.\r\nНо каждый этап важен и дает тебе опыт. Поиск помещения, регистрация фирмы и т.д.\r\nНа самом деле по каждому из этих пунктов можно написать отдельную статью -)\r\nЗдесь я не очень хочу вдаваться в  подробности. Остановлюсь на технической части.\r\nСайт был устаревшим, но с крутым дизайном, который "плохо" продает. Круто или красиво\r\nне всегда фунционально и удобно, это описание как раз подходило под наш сайт.\r\n\r\nВыглядел наш сайт примерно вот так:\r\n![Alt text](https://monosnap.com/image/jBbM0VlOFmRSDf0DAMkoaYaFYFGZ0a.png)\r\n\r\nПотом было много разных систем, пытались и 1с с битриксом подружить. Это я думаю\r\nдля отдельной истории рассказ. В итоге с помощью хабра и этого поста я нашел крутых\r\nребят из Питера, которые запили свою систему именно такой как я себе представлял.\r\nС помощью их системы и опыта мы смогли сильно продвинуться в плане автоматизации\r\nпроцессов. Вот об этой системе и способах нашей работы я бы и хотел немного рассказать.\r\n\r\n\r\n', 'Новая статья  2', 1);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Дамп структуры для таблица blog.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.comments: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
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
	(1, 'apxata@gmail.com', '$2y$10$E2arR9d7kS6rH64oCgE5deITM4n3pJ/s1Jus5/OkrGctRyAuD1Nhm', '2018-08-01 09:26:19', '', '', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
