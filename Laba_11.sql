-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 28 2019 г., 15:22
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Laba 11`
--

-- --------------------------------------------------------

--
-- Структура таблицы `athors`
--

CREATE TABLE `athors` (
  `id` int(11) NOT NULL,
  `ФИО` varchar(100) DEFAULT NULL,
  `Год рождения` smallint(6) DEFAULT NULL,
  `Год смерти` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `athors`
--

INSERT INTO `athors` (`id`, `ФИО`, `Год рождения`, `Год смерти`) VALUES
(1, 'Агата Кристи', 1890, 1976),
(2, 'Аркадий Стругацкий', 1925, 1991),
(3, 'Лев Николаевич Толстой', 1828, 1910),
(4, '2', 1234, 4321),
(13, 'qwer', 123, 125);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Название` varchar(100) DEFAULT NULL,
  `Описание` varchar(100) DEFAULT NULL,
  `Год написания` smallint(6) DEFAULT NULL,
  `Код автора` int(11) NOT NULL,
  `Код жанра` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `Название`, `Описание`, `Год написания`, `Код автора`, `Код жанра`) VALUES
(1, 'Убить легко', 'Убить легко» (англ. Murder Is Easy) — детективный ...', 1939, 1, 2),
(2, 'Пять поросят', 'Пять порося́т» (англ. Five Little Pigs) — детектив...', 1942, 1, 2),
(3, 'Трудно быть богом', 'Трудно быть богом» — научно-фантастическая повесть..', 1943, 2, 1),
(4, 'Война и мир', '\"Война и мир\" Льва Толстого — не просто классически ...', 1975, 3, 2),
(5, 'После бала', 'Основная мысль рассказа - в нравственном преображ..', 1903, 3, 2),
(6, 'Book', NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `Img`) VALUES
(27, 'C:/ospanel/domains/Myphp/ImagesSmall/iELDX6YID.jpg'),
(30, 'C:/ospanel/domains/Myphp/ImagesSmall/iELDX6YID.jpg'),
(31, 'C:/ospanel/domains/Myphp/ImagesSmall/i8JCAVZI7.jpg'),
(32, 'C:/ospanel/domains/Myphp/ImagesSmall/i8JCAVZI7.jpg'),
(33, 'C:/ospanel/domains/Myphp/ImagesSmall/i8JCAVZI7.jpg'),
(34, 'C:/ospanel/domains/Myphp/ImagesSmall/i8JCAVZI7.jpg'),
(35, 'C:/ospanel/domains/Myphp/ImagesSmall/iHGK5SFN6.jpg'),
(36, 'C:/ospanel/domains/Myphp/ImagesSmall/iHGK5SFN6.jpg'),
(37, 'C:/ospanel/domains/Myphp/ImagesSmall/2NTepSnQ52Q.jpg'),
(38, 'C:/ospanel/domains/Myphp/ImagesSmall/2NTepSnQ52Q.jpg'),
(39, 'C:/ospanel/domains/Myphp/ImagesSmall/2NTepSnQ52Q.jpg'),
(40, 'C:/ospanel/domains/Myphp/ImagesSmall/2NTepSnQ52Q.jpg'),
(41, 'C:/ospanel/domains/Myphp/ImagesSmall/IMG_0073.JPG'),
(42, 'C:/ospanel/domains/Myphp/ImagesSmall/IMG_0073.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `geners`
--

CREATE TABLE `geners` (
  `id` int(11) NOT NULL,
  `Название жанра` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `geners`
--

INSERT INTO `geners` (`id`, `Название жанра`) VALUES
(1, 'Фантастика'),
(2, 'Роман'),
(3, 'Комедия'),
(4, 'Водевиль');

-- --------------------------------------------------------

--
-- Структура таблицы `Registr`
--

CREATE TABLE `Registr` (
  `id` int(11) NOT NULL,
  `Login` varchar(20) DEFAULT NULL,
  `Pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Registr`
--

INSERT INTO `Registr` (`id`, `Login`, `Pass`) VALUES
(178, '', ''),
(179, 'Slava', ''),
(180, 'Vlad', ''),
(181, 'Vitia228', ''),
(182, '123', ''),
(183, '1', '1'),
(184, 'Nas', ''),
(185, 'User', 'Password'),
(186, 'Му', '553123125'),
(187, 'Ignat1928@list.ru', ''),
(188, 'Ignt1928@list.ru', 'ADsdasdw1233W'),
(189, 'Iat1928@list.ru', 'asdsadASDASD123'),
(190, 'ГШфвф@awwd.ru', ''),
(191, 'йцуцй', ''),
(192, 'Цфцуйцу@фываа.ru', 'qweqwqweqwe'),
(193, 'wqwd@awdw.ri', 'WEDWEwdwdw2313'),
(194, 'ргрглрл', '123123ADQWDasdasd'),
(195, 'oksana@wedef', '123123qwdasdASDASD');

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int(11) NOT NULL,
  `Text` varchar(100) DEFAULT NULL,
  `id books` int(11) NOT NULL,
  `id reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`id`, `Text`, `id books`, `id reg`) VALUES
(1, 'Не понравилось.', 5, 179),
(2, 'Не плохо!', 2, 179),
(12, 'Стоит прочитать.', 6, 179),
(13, 'Отличная книга!', 1, 180),
(14, 'Тяжелый роман.', 4, 180),
(18, 'Ну такое)', 5, 181),
(19, 'Советую.', 5, 180),
(20, '123', 2, 180),
(21, 'Норм', 2, 184),
(81, '123', 3, 183),
(82, '123', 3, 183),
(83, 'qwe', 3, 183),
(84, 'qwerqweqwe', 3, 183),
(85, 'qwerqweqwe', 3, 183),
(86, 'dfgfg', 5, 180),
(87, 'цй', 3, 180),
(88, '12', 3, 180),
(89, 'qweqw', 3, 180),
(90, '3212123123213212313211312', 4, 180),
(91, '', 3, 180),
(92, '789', 3, 180),
(93, '99999', 3, 183);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `athors`
--
ALTER TABLE `athors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Код автора` (`Код автора`),
  ADD KEY `Код жанра` (`Код жанра`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `geners`
--
ALTER TABLE `geners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Registr`
--
ALTER TABLE `Registr`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id books` (`id books`),
  ADD KEY `id reg` (`id reg`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `athors`
--
ALTER TABLE `athors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT для таблицы `geners`
--
ALTER TABLE `geners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Registr`
--
ALTER TABLE `Registr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`Код автора`) REFERENCES `athors` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`Код жанра`) REFERENCES `geners` (`id`);

--
-- Ограничения внешнего ключа таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id books`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`id reg`) REFERENCES `Registr` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
