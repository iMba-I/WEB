-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 27 2023 г., 00:24
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hoa_services`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exported_data_imported`
--

CREATE TABLE `exported_data_imported` (
  `col_id` varchar(255) DEFAULT NULL,
  `col_img_path` varchar(255) DEFAULT NULL,
  `col_name` varchar(255) DEFAULT NULL,
  `col_id_worker` varchar(255) DEFAULT NULL,
  `col_description` varchar(255) DEFAULT NULL,
  `col_cost` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `exported_data_imported`
--

INSERT INTO `exported_data_imported` (`col_id`, `col_img_path`, `col_name`, `col_id_worker`, `col_description`, `col_cost`) VALUES
('1', 'inc\\catalogue_images\\img1.jpg', 'Уборка двора', '1', 'Очистим придворную территорию', '15000.00'),
('2', 'inc\\catalogue_images\\img2.jpg', 'Проверка проводки', '4', 'Проверим проводку и выпишем чек за услуги', '1000.00'),
('3', 'inc\\catalogue_images\\img3.jpg', 'Охрана территории дома', '5', 'Контроль входящих, обход территории и т.д.', '60000.00'),
('4', 'inc\\catalogue_images\\img4.jpg', 'Покраска стен в подъезде', '6', 'Стены, стены красим, красим', '10000.00'),
('5', 'inc\\catalogue_images\\img5.jpg', 'Очистка засора', '3', 'Проверим причины засора и очистим его. Быстро и дорого', '5000.00'),
('6', 'inc\\catalogue_images\\img6.jpg', 'Проверка щитка', '4', 'Проверим и исправим неполадки с электрическим щитком', '1000.00'),
('7', 'inc\\catalogue_images\\img7.jpg', 'Замена лампочек', '6', 'Заменим все лампочки на этажах заааааааааааааааааааааааааааааааааааааа', '5000.00'),
('8', 'inc\\catalogue_images\\img8.jpg', 'Подключение отопления', '3', 'Подключим быстро и (почти) без проблем', '7000.00'),
('9', 'inc\\catalogue_images\\img9.jpg', 'Внешняя отделка здания', '6', 'Приведем здания снаружи в нормальный вид', '80000.00'),
('10', 'inc\\catalogue_images\\img10.jpg', 'Внутренняя отделка здания', '6', 'Внутри больше не будет страшно', '45000.00'),
('11', 'inc\\catalogue_images\\img11.jpg', 'Уборка подъезда', '1', 'Внутри теперь и чисто будет', '15000.00'),
('12', 'inc\\catalogue_images\\img12.jpg', 'Услуги вывоза мусора', '2', 'Ежемесячная плата за вывоз мусора', '200.00'),
('13', 'inc\\catalogue_images\\img13.jpg', 'Место на платной парковке', '5', 'Место на платной парковке, цена за месяц', '500.00'),
('14', 'inc\\catalogue_images\\img14.jpg', 'Я не придумал', '3', 'Что-то по теме', '2500.00'),
('15', 'inc\\catalogue_images\\img15.jpg', 'Проверка труб в квартире', '3', 'Проверим и починим неисправности с трубами', '2000.00'),
('16', 'inc\\catalogue_images\\img16.jpg', 'Обслуживание лифта', '6', 'Ежемесячная плата за обслуживание лифта', '200.00'),
('17', 'inc\\catalogue_images\\img17.jpg', 'Плата за водоснабжение', '3', 'Цена за кубометр', '30.00'),
('18', 'inc\\catalogue_images\\img18.jpg', 'Плата за электроэнергию', '4', 'Цена за кВт/Ч', '6.00'),
('19', 'inc\\catalogue_images\\img19.jpg', 'Soon', '6', 'Скоро появится', '9999.00'),
('20', 'inc\\catalogue_images\\img20.jpg', 'Плата за газ', '2', 'Цена за кубометр потребляемого газад', '10.99');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `img_path` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `id_worker` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `img_path`, `name`, `id_worker`, `description`, `cost`) VALUES
(1, 'inc\\catalogue_images\\img1.jpg', 'Уборка двора', 1, 'Очистим придворную территорию', 15000.00),
(2, 'inc\\catalogue_images\\img2.jpg', 'Проверка проводки', 4, 'Проверим проводку и выпишем чек за услуги', 1000.00),
(3, 'inc\\catalogue_images\\img3.jpg', 'Охрана территории дома', 5, 'Контроль входящих, обход территории и т.д.', 60000.00),
(4, 'inc\\catalogue_images\\img4.jpg', 'Покраска стен в подъезде', 6, 'Стены, стены красим, красим', 10000.00),
(5, 'inc\\catalogue_images\\img5.jpg', 'Очистка засора', 3, 'Проверим причины засора и очистим его. Быстро и дорого', 5000.00),
(6, 'inc\\catalogue_images\\img6.jpg', 'Проверка щитка', 4, 'Проверим и исправим неполадки с электрическим щитком', 1000.00),
(7, 'inc\\catalogue_images\\img7.jpg', 'Замена лампочек', 6, 'Заменим все лампочки на этажах заааааааааааааааааааааааааааааааааааааа', 5000.00),
(8, 'inc\\catalogue_images\\img8.jpg', 'Подключение отопления', 3, 'Подключим быстро и (почти) без проблем', 7000.00),
(9, 'inc\\catalogue_images\\img9.jpg', 'Внешняя отделка здания', 6, 'Приведем здания снаружи в нормальный вид', 80000.00),
(10, 'inc\\catalogue_images\\img10.jpg', 'Внутренняя отделка здания', 6, 'Внутри больше не будет страшно', 45000.00),
(11, 'inc\\catalogue_images\\img11.jpg', 'Уборка подъезда', 1, 'Внутри теперь и чисто будет', 15000.00),
(12, 'inc\\catalogue_images\\img12.jpg', 'Услуги вывоза мусора', 2, 'Ежемесячная плата за вывоз мусора', 200.00),
(13, 'inc\\catalogue_images\\img13.jpg', 'Место на платной парковке', 5, 'Место на платной парковке, цена за месяц', 500.00),
(14, 'inc\\catalogue_images\\img14.jpg', 'Я не придумал', 3, 'Что-то по теме', 2500.00),
(15, 'inc\\catalogue_images\\img15.jpg', 'Проверка труб в квартире', 3, 'Проверим и починим неисправности с трубами', 2000.00),
(16, 'inc\\catalogue_images\\img16.jpg', 'Обслуживание лифта', 6, 'Ежемесячная плата за обслуживание лифта', 200.00),
(17, 'inc\\catalogue_images\\img17.jpg', 'Плата за водоснабжение', 3, 'Цена за кубометр', 30.00),
(18, 'inc\\catalogue_images\\img18.jpg', 'Плата за электроэнергию', 4, 'Цена за кВт/Ч', 6.00),
(19, 'inc\\catalogue_images\\img19.jpg', 'Soon', 6, 'Скоро появится', 9999.00),
(20, 'inc\\catalogue_images\\img20.jpg', 'Плата за газ', 2, 'Цена за кубометр потребляемого газад', 10.99);

-- --------------------------------------------------------

--
-- Структура таблицы `services_exported_imported`
--

CREATE TABLE `services_exported_imported` (
  `col_id` varchar(255) DEFAULT NULL,
  `col_img_path` varchar(255) DEFAULT NULL,
  `col_name` varchar(255) DEFAULT NULL,
  `col_id_worker` varchar(255) DEFAULT NULL,
  `col_description` varchar(255) DEFAULT NULL,
  `col_cost` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `services_exported_imported`
--

INSERT INTO `services_exported_imported` (`col_id`, `col_img_path`, `col_name`, `col_id_worker`, `col_description`, `col_cost`) VALUES
('1', 'inc\\catalogue_images\\img1.jpg', 'Уборка двора', '1', 'Очистим придворную территорию', '15000.00'),
('2', 'inc\\catalogue_images\\img2.jpg', 'Проверка проводки', '4', 'Проверим проводку и выпишем чек за услуги', '1000.00'),
('3', 'inc\\catalogue_images\\img3.jpg', 'Охрана территории дома', '5', 'Контроль входящих, обход территории и т.д.', '60000.00'),
('4', 'inc\\catalogue_images\\img4.jpg', 'Покраска стен в подъезде', '6', 'Стены, стены красим, красим', '10000.00'),
('5', 'inc\\catalogue_images\\img5.jpg', 'Очистка засора', '3', 'Проверим причины засора и очистим его. Быстро и дорого', '5000.00'),
('6', 'inc\\catalogue_images\\img6.jpg', 'Проверка щитка', '4', 'Проверим и исправим неполадки с электрическим щитком', '1000.00'),
('7', 'inc\\catalogue_images\\img7.jpg', 'Замена лампочек', '6', 'Заменим все лампочки на этажах заааааааааааааааааааааааааааааааааааааа', '5000.00'),
('8', 'inc\\catalogue_images\\img8.jpg', 'Подключение отопления', '3', 'Подключим быстро и (почти) без проблем', '7000.00'),
('9', 'inc\\catalogue_images\\img9.jpg', 'Внешняя отделка здания', '6', 'Приведем здания снаружи в нормальный вид', '80000.00'),
('10', 'inc\\catalogue_images\\img10.jpg', 'Внутренняя отделка здания', '6', 'Внутри больше не будет страшно', '45000.00'),
('11', 'inc\\catalogue_images\\img11.jpg', 'Уборка подъезда', '1', 'Внутри теперь и чисто будет', '15000.00'),
('12', 'inc\\catalogue_images\\img12.jpg', 'Услуги вывоза мусора', '2', 'Ежемесячная плата за вывоз мусора', '200.00'),
('13', 'inc\\catalogue_images\\img13.jpg', 'Место на платной парковке', '5', 'Место на платной парковке, цена за месяц', '500.00'),
('14', 'inc\\catalogue_images\\img14.jpg', 'Я не придумал', '3', 'Что-то по теме', '2500.00'),
('15', 'inc\\catalogue_images\\img15.jpg', 'Проверка труб в квартире', '3', 'Проверим и починим неисправности с трубами', '2000.00'),
('16', 'inc\\catalogue_images\\img16.jpg', 'Обслуживание лифта', '6', 'Ежемесячная плата за обслуживание лифта', '200.00'),
('17', 'inc\\catalogue_images\\img17.jpg', 'Плата за водоснабжение', '3', 'Цена за кубометр', '30.00'),
('18', 'inc\\catalogue_images\\img18.jpg', 'Плата за электроэнергию', '4', 'Цена за кВт/Ч', '6.00'),
('19', 'inc\\catalogue_images\\img19.jpg', 'Soon', '6', 'Скоро появится', '9999.00'),
('20', 'inc\\catalogue_images\\img20.jpg', 'Плата за газ', '2', 'Цена за кубометр потребляемого газад', '10.99');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` varchar(64) DEFAULT NULL,
  `password_hash` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `birth_date` date NOT NULL,
  `adress` varchar(128) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `interests` varchar(128) NOT NULL,
  `vk_link` varchar(128) NOT NULL,
  `blood_type` int(11) NOT NULL,
  `RH_factor` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `mail`, `password_hash`, `name`, `birth_date`, `adress`, `sex`, `interests`, `vk_link`, `blood_type`, `RH_factor`) VALUES
(1, 'aboba@mail.ru', '1bda8eaf52177f4684cb741e0cec3699', 'A A A', '0000-00-00', '', '', '', '', 3, '1'),
(2, 'afaf@mail.ru', 'b221c1703c4a69482d53fc1d1bb03da9', 'Aboba abobov abobovick', '0000-00-00', '', '', '', 'asflaslf', 0, '0'),
(3, 'UZU@mail.ru', 'eaa06b8d046a2633be0c57a4b9b6b155', 'OLE OLE OLE', '2023-11-09', 'assfafa', 'M', 'asfsa', '', 0, '0'),
(4, 'abob11a@mail.ru', 'eaa06b8d046a2633be0c57a4b9b6b155', 'asf asfa asfa', '2023-11-09', 'asfasfas', 'M', 'asfsafsa', '', 0, '0'),
(5, 'aboba11@mail.ru', '74b488e4cde37b50b3b06f4d980c4f36', 'awfasfas asfas asf', '2023-11-03', 'asfasfas', 'M', 'asfas', '', 0, '0'),
(6, '1aboba@mail.ru', '569323cfe9b72637af71249239c48b99', 'asdsa', '2023-11-03', 'asfsaf', 'M', 'fsafsa', '', 0, '1'),
(7, 'uwu@mail.ru', '33010197896e68ce59c2981ffd25b07a', 'Abra drobra trobra', '2023-11-02', 'GDETO TAM', 'M', 'WAAAARGH', '', 1, '0'),
(8, 'uwuu@mail.ru', '33010197896e68ce59c2981ffd25b07a', 'Ivan Ivanov Ivanovich', '2023-11-02', 'fasfasas', 'M', 'asdfasfas', 'https://vk.com/id200272', 0, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `title`) VALUES
(1, 'Дворник'),
(2, 'Бухгалтер'),
(3, 'Слесарь-сантехник'),
(4, 'Электрик'),
(5, 'Вахтер'),
(6, 'Мастер отделочных работ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_worker` (`id_worker`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_worker`) REFERENCES `workers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
