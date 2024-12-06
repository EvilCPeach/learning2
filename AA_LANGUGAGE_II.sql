-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2024 г., 10:04
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `AA LANGUGAGE II`
--

-- --------------------------------------------------------

--
-- Структура таблицы `material_type_import`
--

CREATE TABLE `material_type_import` (
  `id-material` int(1) NOT NULL,
  `type-material` varchar(15) DEFAULT NULL,
  `procent-material` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `material_type_import`
--

INSERT INTO `material_type_import` (`id-material`, `type-material`, `procent-material`) VALUES
(404, 'Металл', '3%'),
(405, 'fgdg', '4%'),
(406, 'Дерево', '6%');

-- --------------------------------------------------------

--
-- Структура таблицы `partners_import`
--

CREATE TABLE `partners_import` (
  `id-partner` int(1) NOT NULL,
  `type-partner` varchar(3) DEFAULT NULL,
  `name-partner` varchar(16) DEFAULT NULL,
  `manager-partner` varchar(30) DEFAULT NULL,
  `mail-partner` varchar(24) DEFAULT NULL,
  `phone-partner` varchar(13) DEFAULT NULL,
  `adres-partner` varchar(69) DEFAULT NULL,
  `INN-partner` bigint(10) DEFAULT NULL,
  `rating-partner` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners_import`
--

INSERT INTO `partners_import` (`id-partner`, `type-partner`, `name-partner`, `manager-partner`, `mail-partner`, `phone-partner`, `adres-partner`, `INN-partner`, `rating-partner`) VALUES
(1, 'ЗАО', 'База Строитель', 'Иванова Александра Ивановна', 'aleksandraivanova@ml.ru', '493 123 45 67', '652050, Кемеровская область, город Юрга, ул. Лесная, 15', 2222455179, 7),
(2, 'ООО', 'Паркет 29', 'Петров Василий Петрович', 'vppetrov@vl.ru', '987 123 56 78', '164500, Архангельская область, город Северодвинск, ул. Строителей, 18', 3333888520, 7),
(3, 'ПАО', 'Стройсервис', 'Соловьев Андрей Николаевич', 'ansolovev@st.ru', '812 223 32 00', '188910, Ленинградская область, город Приморск, ул. Парковая, 21', 4440391035, 7),
(4, 'ОАО', 'Ремонт и отделка', 'Воробьева Екатерина Валерьевна', 'ekaterina.vorobeva@ml.ru', '444 222 33 11', '143960, Московская область, город Реутов, ул. Свободы, 51', 1111520857, 5),
(5, 'ЗАО', 'МонтажПро', 'Степанов Степан Сергеевич', 'stepanov@stepan.ru', '912 888 33 33', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 122', 5552431140, 10),
(6, 'sf', 'sdfdsfsdf', 'sdfsdfdsf', 'sdfdsfdsf', 'sdfdsfdsf', 'sdfdsfdsf', 12312323, 5),
(7, '', 'admin', NULL, 'admin', NULL, NULL, 111, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `partner_products_import`
--

CREATE TABLE `partner_products_import` (
  `id-partner` int(2) NOT NULL,
  `product-partner` int(1) DEFAULT NULL,
  `name-partner` int(1) DEFAULT NULL,
  `count-partner` int(6) DEFAULT NULL,
  `date-partner` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partner_products_import`
--

INSERT INTO `partner_products_import` (`id-partner`, `product-partner`, `name-partner`, `count-partner`, `date-partner`) VALUES
(1, 1, 1, 15500, '23.03.2023'),
(2, 3, 1, 12350, '18.12.2023'),
(3, 4, 1, 37400, '07.06.2024'),
(4, 2, 2, 35000, '02.12.2022'),
(5, 5, 2, 1250, '17.05.2023'),
(6, 3, 2, 1000, '07.06.2024'),
(7, 1, 2, 7550, '01.07.2024'),
(8, 1, 3, 7250, '22.01.2023'),
(9, 2, 3, 2500, '05.07.2024'),
(10, 4, 4, 59050, '20.03.2023'),
(11, 3, 4, 37200, '12.03.2024'),
(12, 5, 4, 4500, '14.05.2024'),
(13, 3, 5, 50000, '19.09.2023'),
(14, 4, 5, 670000, '10.11.2023'),
(15, 1, 5, 35000, '15.04.2024'),
(16, 2, 5, 25000, '12.06.2024'),
(17, 3, 2, 2000, '05.12.2024'),
(18, 3, 2, 2000, '05.12.2024'),
(19, 3, 2, 2000, '05.12.2024'),
(20, 3, 2, 2000, '05.12.2024'),
(21, 3, 2, 2000, '05.12.2024'),
(22, 3, 2, 2000, '05.12.2024'),
(27, 5, 6, 15000, '05.12.2024');

-- --------------------------------------------------------

--
-- Структура таблицы `products_import`
--

CREATE TABLE `products_import` (
  `id-product` int(1) NOT NULL,
  `type-product` int(1) DEFAULT NULL,
  `name-product` varchar(56) DEFAULT NULL,
  `article-product` int(7) DEFAULT NULL,
  `min-cost-product` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_import`
--

INSERT INTO `products_import` (`id-product`, `type-product`, `name-product`, `article-product`, `min-cost-product`) VALUES
(1, 3, 'Паркетная доска Ясень темный однополосная 14 мм', 8758385, '4456,90'),
(2, 3, 'Инженерная доска Дуб Французская елка однополосная 12 мм', 8858958, '7330,99'),
(3, 1, 'Ламинат Дуб дымчато-белый 33 класс 12 мм', 7750282, '1799,33'),
(4, 1, 'Ламинат Дуб серый 32 класс 8 мм с фаской', 7028748, '3890,41'),
(5, 4, 'Пробковое напольное клеевое покрытие 32 класс 4 мм', 5012543, '5450,59');

-- --------------------------------------------------------

--
-- Структура таблицы `product_type_import`
--

CREATE TABLE `product_type_import` (
  `id-product` int(1) NOT NULL,
  `type-product` varchar(18) DEFAULT NULL,
  `koef-product` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_type_import`
--

INSERT INTO `product_type_import` (`id-product`, `type-product`, `koef-product`) VALUES
(1, 'Ламинат', '2,35'),
(2, 'Массивная доска', '5,15'),
(3, 'Паркетная доска', '4,34'),
(4, 'Пробковое покрытие', '1,5');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name-partner` int(11) NOT NULL,
  `name-product` int(11) NOT NULL,
  `count-product` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `name-partner`, `name-product`, `count-product`, `approved`, `paid`) VALUES
(1, 1, 2, 10000, 1, 0),
(6, 6, 5, 15000, 1, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `material_type_import`
--
ALTER TABLE `material_type_import`
  ADD PRIMARY KEY (`id-material`);

--
-- Индексы таблицы `partners_import`
--
ALTER TABLE `partners_import`
  ADD PRIMARY KEY (`id-partner`);

--
-- Индексы таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  ADD PRIMARY KEY (`id-partner`),
  ADD KEY `product-partner` (`product-partner`),
  ADD KEY `name-partner` (`name-partner`);

--
-- Индексы таблицы `products_import`
--
ALTER TABLE `products_import`
  ADD PRIMARY KEY (`id-product`),
  ADD KEY `type-product` (`type-product`);

--
-- Индексы таблицы `product_type_import`
--
ALTER TABLE `product_type_import`
  ADD PRIMARY KEY (`id-product`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name-partner` (`name-partner`),
  ADD KEY `name-product` (`name-product`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `material_type_import`
--
ALTER TABLE `material_type_import`
  MODIFY `id-material` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;

--
-- AUTO_INCREMENT для таблицы `partners_import`
--
ALTER TABLE `partners_import`
  MODIFY `id-partner` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  MODIFY `id-partner` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `products_import`
--
ALTER TABLE `products_import`
  MODIFY `id-product` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product_type_import`
--
ALTER TABLE `product_type_import`
  MODIFY `id-product` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  ADD CONSTRAINT `partner_products_import_ibfk_1` FOREIGN KEY (`product-partner`) REFERENCES `products_import` (`id-product`),
  ADD CONSTRAINT `partner_products_import_ibfk_2` FOREIGN KEY (`name-partner`) REFERENCES `partners_import` (`id-partner`);

--
-- Ограничения внешнего ключа таблицы `products_import`
--
ALTER TABLE `products_import`
  ADD CONSTRAINT `products_import_ibfk_1` FOREIGN KEY (`type-product`) REFERENCES `product_type_import` (`id-product`);

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`name-partner`) REFERENCES `partners_import` (`id-partner`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`name-product`) REFERENCES `products_import` (`id-product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
