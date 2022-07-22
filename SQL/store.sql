-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Июл 22 2022 г., 15:04
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Куртка'),
(2, 'Штаны'),
(3, 'Кроссовки'),
(4, 'Верхняя одежда');

-- --------------------------------------------------------

--
-- Структура таблицы `categoryproducts`
--

CREATE TABLE `categoryproducts` (
  `category_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categoryproducts`
--

INSERT INTO `categoryproducts` (`category_id`, `product_id`) VALUES
(1, 2),
(2, 1),
(3, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(4, 40),
(4, 41),
(4, 42),
(4, 43),
(4, 44),
(4, 45),
(4, 46),
(4, 47),
(4, 48),
(4, 49),
(4, 50),
(4, 51),
(4, 52);

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `link` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `link`, `alt`) VALUES
(1, '#', 'Куртка Nike'),
(2, '#', 'Штаны Zara'),
(3, '#', 'Кроссовки Adidas'),
(4, '#', 'Куртка'),
(5, '#', 'Штаны'),
(6, '#', 'Кроссовки'),
(7, '#', 'Верхняя одежда');

-- --------------------------------------------------------

--
-- Структура таблицы `productphotos`
--

CREATE TABLE `productphotos` (
  `product_id` int NOT NULL,
  `photo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `productphotos`
--

INSERT INTO `productphotos` (`product_id`, `photo_id`) VALUES
(1, 2),
(2, 1),
(3, 3),
(2, 1),
(1, 2),
(3, 3),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7),
(15, 7),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 6),
(33, 6),
(34, 6),
(35, 6),
(36, 6),
(37, 6),
(38, 6),
(39, 6),
(40, 7),
(41, 7),
(42, 7),
(43, 7),
(44, 7),
(45, 7),
(46, 7),
(47, 7),
(48, 7),
(49, 7),
(50, 7),
(51, 7),
(52, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `main_category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `new_price` int NOT NULL,
  `sale_price` int NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  `description` varchar(2047) NOT NULL,
  `main_photo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `main_category_id`, `name`, `price`, `new_price`, `sale_price`, `active_status`, `description`, `main_photo_id`) VALUES
(1, 2, 'Штаны Zara', 2990, 2590, 2400, 1, 'qwerty', 2),
(2, 1, 'Куртка Nike', 6990, 5590, 5400, 1, 'qwerty', 1),
(3, 3, 'Кроссоки Adidas', 4990, 3590, 3400, 1, 'qwerty', 2),
(4, 1, 'Куртка 1', 3990, 3490, 3190, 1, 'qwerty', 4),
(5, 1, 'Куртка 2', 3890, 3490, 3190, 1, 'qwerty', 4),
(6, 1, 'Куртка 3', 3790, 3490, 3190, 1, 'qwerty', 4),
(7, 1, 'Куртка 4', 3290, 3490, 3190, 1, 'qwerty', 4),
(8, 1, 'Куртка 5', 3190, 3490, 3190, 1, 'qwerty', 4),
(9, 1, 'Куртка 6', 2990, 1490, 1190, 1, 'qwerty', 4),
(10, 1, 'Куртка 7', 4990, 3490, 3190, 1, 'qwerty', 4),
(11, 1, 'Куртка 8', 4990, 4490, 4190, 1, 'qwerty', 4),
(12, 1, 'Куртка 9', 6990, 6490, 5190, 1, 'qwerty', 4),
(13, 1, 'Куртка 10', 33990, 32490, 30190, 1, 'qwerty', 4),
(14, 1, 'Куртка 11', 3990, 3490, 3190, 1, 'qwerty', 4),
(15, 1, 'Куртка 12', 3490, 3290, 3090, 1, 'qwerty', 4),
(16, 2, 'Штаны 1', 3990, 3490, 3190, 1, 'qwerty', 5),
(17, 2, 'Штаны 2', 3890, 3490, 3190, 1, 'qwerty', 5),
(18, 2, 'Штаны 3', 3790, 3490, 3190, 1, 'qwerty', 5),
(19, 2, 'Штаны 4', 3290, 3490, 3190, 1, 'qwerty', 5),
(20, 2, 'Штаны 5', 3190, 3490, 3190, 1, 'qwerty', 5),
(21, 2, 'Штаны 6', 2990, 1490, 1190, 1, 'qwerty', 5),
(22, 2, 'Штаны 7', 4990, 3490, 3190, 1, 'qwerty', 5),
(23, 2, 'Штаны 8', 4990, 4490, 4190, 1, 'qwerty', 5),
(24, 2, 'Штаны 9', 6990, 6490, 5190, 1, 'qwerty', 5),
(25, 2, 'Штаны 10', 33990, 32490, 30190, 1, 'qwerty', 5),
(26, 2, 'Штаны 11', 3990, 3490, 3190, 1, 'qwerty', 5),
(27, 2, 'Штаны 12', 3490, 3290, 3090, 1, 'qwerty', 5),
(28, 3, 'Кроссовки 1', 3990, 3490, 3190, 1, 'qwerty', 6),
(29, 3, 'Кроссовки 2', 3890, 3490, 3190, 1, 'qwerty', 6),
(30, 3, 'Кроссовки 3', 3790, 3490, 3190, 1, 'qwerty', 6),
(31, 3, 'Кроссовки 4', 3290, 3490, 3190, 1, 'qwerty', 6),
(32, 3, 'Кроссовки 5', 3190, 3490, 3190, 1, 'qwerty', 6),
(33, 3, 'Кроссовки 6', 2990, 1490, 1190, 1, 'qwerty', 6),
(34, 3, 'Кроссовки 7', 4990, 3490, 3190, 1, 'qwerty', 6),
(35, 3, 'Кроссовки 8', 4990, 4490, 4190, 1, 'qwerty', 6),
(36, 3, 'Кроссовки 9', 6990, 6490, 5190, 1, 'qwerty', 6),
(37, 3, 'Кроссовки 10', 33990, 32490, 30190, 1, 'qwerty', 6),
(38, 3, 'Кроссовки 11', 3990, 3490, 3190, 1, 'qwerty', 6),
(39, 3, 'Кроссовки 12', 3490, 3290, 3090, 1, 'qwerty', 6),
(40, 4, 'Верхняя одежда 1', 3990, 3490, 3190, 1, 'qwerty', 7),
(41, 4, 'Верхняя одежда 2', 3890, 3490, 3190, 1, 'qwerty', 7),
(42, 4, 'Верхняя одежда 3', 3790, 3490, 3190, 1, 'qwerty', 7),
(43, 4, 'Верхняя одежда 4', 3290, 3490, 3190, 1, 'qwerty', 7),
(44, 4, 'Верхняя одежда 5', 3190, 3490, 3190, 1, 'qwerty', 7),
(45, 4, 'Верхняя одежда 6', 2990, 1490, 1190, 1, 'qwerty', 7),
(46, 4, 'Верхняя одежда 7', 4990, 3490, 3190, 1, 'qwerty', 7),
(47, 4, 'Верхняя одежда 8', 4990, 4490, 4190, 1, 'qwerty', 7),
(48, 4, 'Верхняя одежда 9', 6990, 6490, 5190, 1, 'qwerty', 7),
(49, 4, 'Верхняя одежда 10', 33990, 32490, 30190, 1, 'qwerty', 7),
(50, 4, 'Верхняя одежда 11', 3990, 3490, 3190, 1, 'qwerty', 7),
(51, 4, 'Верхняя одежда 12', 3490, 3290, 3090, 1, 'qwerty', 7),
(52, 4, 'Верхняя одежда 13', 3490, 3290, 3090, 1, 'qwerty', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categoryproducts`
--
ALTER TABLE `categoryproducts`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `productphotos`
--
ALTER TABLE `productphotos`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_category_id` (`main_category_id`),
  ADD KEY `main_photo_id` (`main_photo_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categoryproducts`
--
ALTER TABLE `categoryproducts`
  ADD CONSTRAINT `categoryproducts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `categoryproducts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `productphotos`
--
ALTER TABLE `productphotos`
  ADD CONSTRAINT `productphotos_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `productphotos_ibfk_2` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`main_category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`main_photo_id`) REFERENCES `photos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
