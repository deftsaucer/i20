-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Авг 03 2022 г., 19:10
-- Версия сервера: 8.0.24
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
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(2047) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`) VALUES
(1, 'Куртка', 'В этом разделе куртки'),
(2, 'Штаны', 'В этом разделе штаны'),
(3, 'Кроссовки', 'В этом разделе кроссовки'),
(4, 'Верхняя одежда', 'В этом разделе верхняя одежда'),
(5, 'Аксессуары', 'В этом разделе аксессуары');

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
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(63) NOT NULL,
  `email` varchar(63) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `question` varchar(2047) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `date`, `gender`, `theme`, `question`) VALUES
(1, 'Al', 'al@mail.ru', '2022-08-01', 'male', 'al', 'al'),
(2, 'Gr', 'gr@mail.ru', '1990-01-13', 'female', '1234asdf', '<?//\'\'asfd\"||\\\\asdf`;lasfd`<a></a>;'),
(10, 'Alex', 'alex@gmail.com', '1983-02-24', 'male', 'safdlas;lf', 'dhfkhaslkfhasdfsaddfasf'),
(14, 'Sdf', 'asfd@mail.ru', '2022-08-23', 'male', 'asdf', 'asdf'),
(15, 'Sdf', 'asfd@mail.ru', '2022-08-23', 'male', 'asdf', 'asdf'),
(16, 'Sdf', 'asfd@mail.ru', '2022-08-23', 'male', 'asdf', 'asdf');

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
(1, 'p_photo/jacket_z_1.webp', 'Куртка Zara'),
(2, 'p_photo/jacket_z_2.webp', 'Куртка Zara'),
(3, 'p_photo/jacket_z_3.webp', 'Куртка Zara'),
(4, 'p_photo/pants_n_1.webp', 'Штаны Nike'),
(5, 'p_photo/pants_n_2.webp', 'Штаны Nike'),
(6, 'p_photo/pants_n_3.webp', 'Штаны Nike'),
(7, 'p_photo/sneakers_a_1.webp', 'Кроссовки Adidas'),
(8, 'p_photo/sneakers_a_2.webp', 'Кроссовки Adidas'),
(9, 'p_photo/sneakers_a_3.webp', 'Кроссовки Adidas'),
(10, 'p_photo/jacket_1.webp', 'Куртка'),
(11, 'p_photo/jacket_2.webp', 'Куртка'),
(12, 'p_photo/jacket_3.webp', 'Куртка'),
(13, 'p_photo/pants_1.webp', 'Штаны'),
(14, 'p_photo/pants_2.webp', 'Штаны'),
(15, 'p_photo/pants_3.webp', 'Штаны'),
(16, 'p_photo/sneakers_1.webp', 'Кроссовки'),
(17, 'p_photo/sneakers_2.webp', 'Кроссовки'),
(18, 'p_photo/sneakers_3.webp', 'Кроссовки'),
(19, 'p_photo/coat_1.webp', 'Пальто'),
(20, 'p_photo/coat_2.webp', 'Пальто'),
(21, 'p_photo/coat_3.webp', 'Пальто');

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
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(2, 3),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 10),
(5, 11),
(5, 12),
(6, 10),
(6, 11),
(6, 12),
(7, 10),
(7, 11),
(7, 12),
(8, 10),
(8, 11),
(8, 12),
(9, 10),
(9, 11),
(9, 12),
(10, 10),
(10, 11),
(10, 12),
(11, 10),
(11, 11),
(11, 12),
(12, 10),
(12, 11),
(12, 12),
(13, 10),
(13, 11),
(13, 12),
(14, 10),
(14, 11),
(14, 12),
(15, 10),
(15, 11),
(15, 12),
(16, 13),
(16, 14),
(16, 15),
(17, 13),
(17, 14),
(17, 15),
(18, 13),
(18, 14),
(18, 15),
(19, 13),
(19, 14),
(19, 15),
(20, 13),
(20, 14),
(20, 15),
(21, 13),
(21, 14),
(21, 15),
(22, 13),
(22, 14),
(22, 15),
(23, 13),
(23, 14),
(23, 15),
(24, 13),
(24, 14),
(24, 15),
(25, 13),
(25, 14),
(25, 15),
(26, 13),
(26, 14),
(26, 15),
(27, 13),
(27, 14),
(27, 15),
(28, 16),
(28, 17),
(28, 18),
(29, 16),
(29, 17),
(29, 18),
(30, 16),
(30, 17),
(30, 18),
(31, 16),
(31, 17),
(31, 18),
(32, 16),
(32, 17),
(32, 18),
(33, 16),
(33, 17),
(33, 18),
(34, 16),
(34, 17),
(34, 18),
(35, 16),
(35, 17),
(35, 18),
(36, 16),
(36, 17),
(36, 18),
(37, 16),
(37, 17),
(37, 18),
(38, 16),
(38, 17),
(38, 18),
(39, 16),
(39, 17),
(39, 18),
(40, 19),
(40, 20),
(40, 21),
(41, 19),
(41, 20),
(41, 21),
(42, 19),
(42, 20),
(42, 21),
(43, 19),
(43, 20),
(43, 21),
(44, 19),
(44, 20),
(44, 21),
(45, 19),
(45, 20),
(45, 21),
(46, 19),
(46, 20),
(46, 21),
(47, 19),
(47, 20),
(47, 21),
(48, 19),
(48, 20),
(48, 21),
(49, 19),
(49, 20),
(49, 21),
(50, 19),
(50, 20),
(50, 21),
(51, 19),
(51, 20),
(51, 21),
(52, 19),
(52, 20),
(52, 21);

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
(1, 2, 'Штаны Nike', 2990, 2590, 2400, 1, 'qwerty', 4),
(2, 1, 'Куртка Zara', 6990, 5590, 5400, 1, 'qwerty', 1),
(3, 3, 'Кроссоки Adidas', 4990, 3590, 3400, 1, 'qwerty', 7),
(4, 1, 'Куртка 1', 3990, 3490, 3190, 1, 'qwerty', 10),
(5, 1, 'Куртка 2', 3890, 3490, 3190, 1, 'qwerty', 10),
(6, 1, 'Куртка 3', 3790, 3490, 3190, 1, 'qwerty', 10),
(7, 1, 'Куртка 4', 3290, 3490, 3190, 1, 'qwerty', 10),
(8, 1, 'Куртка 5', 3190, 3490, 3190, 1, 'qwerty', 10),
(9, 1, 'Куртка 6', 2990, 1490, 1190, 1, 'qwerty', 10),
(10, 1, 'Куртка 7', 4990, 3490, 3190, 1, 'qwerty', 10),
(11, 1, 'Куртка 8', 4990, 4490, 4190, 1, 'qwerty', 10),
(12, 1, 'Куртка 9', 6990, 6490, 5190, 1, 'qwerty', 10),
(13, 1, 'Куртка 10', 33990, 32490, 30190, 1, 'qwerty', 10),
(14, 1, 'Куртка 11', 3990, 3490, 3190, 1, 'qwerty', 10),
(15, 1, 'Куртка 12', 3490, 3290, 3090, 0, 'qwerty', 10),
(16, 2, 'Штаны 1', 3990, 3490, 3190, 1, 'qwerty', 13),
(17, 2, 'Штаны 2', 3890, 3490, 3190, 1, 'qwerty', 13),
(18, 2, 'Штаны 3', 3790, 3490, 3190, 1, 'qwerty', 13),
(19, 2, 'Штаны 4', 3290, 3490, 3190, 1, 'qwerty', 13),
(20, 2, 'Штаны 5', 3190, 3490, 3190, 1, 'qwerty', 13),
(21, 2, 'Штаны 6', 2990, 1490, 1190, 1, 'qwerty', 13),
(22, 2, 'Штаны 7', 4990, 3490, 3190, 1, 'qwerty', 13),
(23, 2, 'Штаны 8', 4990, 4490, 4190, 1, 'qwerty', 13),
(24, 2, 'Штаны 9', 6990, 6490, 5190, 1, 'qwerty', 13),
(25, 2, 'Штаны 10', 33990, 32490, 30190, 1, 'qwerty', 13),
(26, 2, 'Штаны 11', 3990, 3490, 3190, 1, 'qwerty', 13),
(27, 2, 'Штаны 12', 3490, 3290, 3090, 0, 'qwerty', 13),
(28, 3, 'Кроссовки 1', 3990, 3490, 3190, 1, 'qwerty', 16),
(29, 3, 'Кроссовки 2', 3890, 3490, 3190, 1, 'qwerty', 16),
(30, 3, 'Кроссовки 3', 3790, 3490, 3190, 1, 'qwerty', 16),
(31, 3, 'Кроссовки 4', 3290, 3490, 3190, 1, 'qwerty', 16),
(32, 3, 'Кроссовки 5', 3190, 3490, 3190, 1, 'qwerty', 16),
(33, 3, 'Кроссовки 6', 2990, 1490, 1190, 1, 'qwerty', 16),
(34, 3, 'Кроссовки 7', 4990, 3490, 3190, 1, 'qwerty', 16),
(35, 3, 'Кроссовки 8', 4990, 4490, 4190, 1, 'qwerty', 16),
(36, 3, 'Кроссовки 9', 6990, 6490, 5190, 1, 'qwerty', 16),
(37, 3, 'Кроссовки 10', 33990, 32490, 30190, 1, 'qwerty', 16),
(38, 3, 'Кроссовки 11', 3990, 3490, 3190, 1, 'qwerty', 16),
(39, 3, 'Кроссовки 12', 3490, 3290, 3090, 0, 'qwerty', 16),
(40, 4, 'Верхняя одежда 1', 3990, 3490, 3190, 1, 'qwerty', 19),
(41, 4, 'Верхняя одежда 2', 3890, 3490, 3190, 1, 'qwerty', 19),
(42, 4, 'Верхняя одежда 3', 3790, 3490, 3190, 1, 'qwerty', 19),
(43, 4, 'Верхняя одежда 4', 3290, 3490, 3190, 1, 'qwerty', 19),
(44, 4, 'Верхняя одежда 5', 3190, 3490, 3190, 1, 'qwerty', 19),
(45, 4, 'Верхняя одежда 6', 2990, 1490, 1190, 1, 'qwerty', 19),
(46, 4, 'Верхняя одежда 7', 4990, 3490, 3190, 1, 'qwerty', 19),
(47, 4, 'Верхняя одежда 8', 4990, 4490, 4190, 1, 'qwerty', 19),
(48, 4, 'Верхняя одежда 9', 6990, 6490, 5190, 1, 'qwerty', 19),
(49, 4, 'Верхняя одежда 10', 33990, 32490, 30190, 1, 'qwerty', 19),
(50, 4, 'Верхняя одежда 11', 3990, 3490, 3190, 1, 'qwerty', 19),
(51, 4, 'Верхняя одежда 12', 3490, 3290, 3090, 1, 'qwerty', 19),
(52, 4, 'Верхняя одежда 13', 3490, 3290, 3090, 0, 'qwerty', 19);

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
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
