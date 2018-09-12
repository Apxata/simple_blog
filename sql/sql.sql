-- MySQL dump 10.16  Distrib 10.3.9-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: blog
-- ------------------------------------------------------
-- Server version	10.3.9-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edit_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `preview_text` text CHARACTER SET utf8 NOT NULL,
  `full_text` text CHARACTER SET utf8 NOT NULL,
  `subject` varchar(256) CHARACTER SET utf8 NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,20,'2018-08-16 09:31:43','0000-00-00 00:00:00','','Новая статья \r\n\r\n\r\n**Новая статья **\r\n\r\n*Новая статья *','Новая статья ',1),(2,20,'2018-08-16 09:35:18','0000-00-00 00:00:00','','Всем привет ! Тут я хочу рассказать почему я решил вести блог. Основной стимул - это\r\nизучение РНР. Движок этого блога разрабатывается мной полностью с нуля. Но это только\r\nодна из причин. Есть ощущение что люди кто получает какой-то опыт, хотят им поделиться.\r\nОдни читают какие-то лекции и начинают выступать, другие пытаются продать тренинг, что\r\nстало очень популярно последнее время, некоторые ведут блоги. Я решил начать с\r\nпоследнего. Нужна практическая и интересная задача для изучения РНР, плюс есть желание\r\nподелиться опытом в ведении бизнеса. Опыт не очень большой но есть. В целом я думаю,\r\nчто если бы каждый человек делился своим опытом со всеми, была бы нереальная база\r\nи можно было бы многое почерпнуть. В этом и есть сила интернета, но пока далеко не все\r\nделятся своим опытом и его зачастую не так то просто найти в куче разного рода \r\nинформации. \r\nВ этот бизнес я пришел случайно, меня позвал друг. Я немного разбирался в компах, работал\r\nсисадмином и были небольшие накопления. Когда я вошел в дело, то стал отвечать за всю\r\nИТ часть. Это был интернет-магазин по продаже запчастей для китайской мототехники, \r\nпитбайков.  Как это бывает, бизнес начинался с продажи запчастей из гаража, но уже \r\nперерос этот уровень и нужно было решать как развиваться дальше. Сайт был на джумле\r\n1.5 версии. Опыта ведения бизнеса у нас особо не было, все приходилось изучать с нуля.\r\nВ целом ничего особо сложного нет, особенно сейчас, вся информация есть в интернете.\r\nНо каждый этап важен и дает тебе опыт. Поиск помещения, регистрация фирмы и т.д.\r\nНа самом деле по каждому из этих пунктов можно написать отдельную статью -)\r\nЗдесь я не очень хочу вдаваться в  подробности. Остановлюсь на технической части.\r\nСайт был устаревшим, но с крутым дизайном, который \"плохо\" продает. Круто или красиво\r\nне всегда фунционально и удобно, это описание как раз подходило под наш сайт.\r\n\r\nВыглядел наш сайт примерно вот так:\r\n![Alt text](https://monosnap.com/image/jBbM0VlOFmRSDf0DAMkoaYaFYFGZ0a.png)\r\n\r\nПотом было много разных систем, пытались и 1с с битриксом подружить. Это я думаю\r\nдля отдельной истории рассказ. В итоге с помощью хабра и этого поста я нашел крутых\r\nребят из Питера, которые запили свою систему именно такой как я себе представлял.\r\nС помощью их системы и опыта мы смогли сильно продвинуться в плане автоматизации\r\nпроцессов. Вот об этой системе и способах нашей работы я бы и хотел немного рассказать.\r\n\r\n\r\n','Новая статья  2',1);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,2,1,'2018-09-12 16:04:16','Привет',0);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'apxata@gmail.com','$2y$10$E2arR9d7kS6rH64oCgE5deITM4n3pJ/s1Jus5/OkrGctRyAuD1Nhm','2018-08-01 09:26:19','','',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-12 19:07:57
