-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2021 г., 20:39
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mlm-binar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `levels`
--

CREATE TABLE `levels` (
  `ID` int(11) NOT NULL,
  `level_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_sign` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `levels`
--

INSERT INTO `levels` (`ID`, `level_name`, `level_sign`, `level_count`) VALUES
(1, 'Black Diamond Master', '', 2),
(2, 'Diamond Master', '', 0),
(3, 'Emerald Master', '', 0),
(4, 'Ruby Master', '', 0),
(5, 'Sapphire Master', '', 0),
(6, 'Platinum Master', '', 0),
(7, 'Gold Master', '', 0),
(8, 'Silver Master', '', 0),
(9, 'Bronze Master', '', 0),
(10, 'Master\r\n', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_up_partner` int(11) NOT NULL,
  `partner_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`ID`, `name`, `surname`, `status`, `id_up_partner`, `partner_level`) VALUES
(1, 'DEHolding', 'Company', 'Active', 1, 1),
(2, 'Roman', 'Novikov', 'Active', 1, 1),
(3, 'Sugeiko', 'Yuliy', 'Active', 1, 1),
(4, 'Mark', 'Novikov', 'Active', 2, 10),
(5, 'Sergey', 'Gutskal', 'Active', 2, 10),
(6, 'Aleksandr', 'Borodkin', 'Active', 3, 2),
(7, 'Aleksandra', 'Doroshina', 'Active', 2, 2),
(8, 'Vailias', 'Paleologus', 'Active', 2, 1),
(9, 'Agneshka', 'Zaleska', 'Active', 8, 1),
(10, 'Sara', 'Nugosky', 'Active', 9, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_up_partner` (`id_up_partner`),
  ADD KEY `partner_level` (`partner_level`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `levels`
--
ALTER TABLE `levels`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `FK_partners_levels` FOREIGN KEY (`partner_level`) REFERENCES `levels` (`ID`),
  ADD CONSTRAINT `FK_partners_partners` FOREIGN KEY (`id_up_partner`) REFERENCES `partners` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
