-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2018 lúc 01:24 PM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_02_131052_create_smart_book_table', 2),
(4, '2018_09_02_132819_add_img_to_smart_book', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `smart_book`
--

CREATE TABLE `smart_book` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `smart_book`
--

INSERT INTO `smart_book` (`id`, `title`, `description`, `author`, `created_at`, `updated_at`, `img`) VALUES
(3, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:49', '2018-09-02 09:46:49', 'a.jpg'),
(4, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:50', '2018-09-02 09:46:50', 'a.jpg'),
(5, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:51', '2018-09-02 09:46:51', 'a.jpg'),
(6, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:51', '2018-09-02 09:46:51', 'a.jpg'),
(7, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:52', '2018-09-02 09:46:52', 'a.jpg'),
(8, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:52', '2018-09-02 09:46:52', 'a.jpg'),
(9, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 09:46:53', '2018-09-02 09:46:53', 'a.jpg'),
(10, 'Lập trình C/C++', 'Sách về lập trình c căn bản cho người mới bắt đầu', 'Lê Đình Quang', '2018-09-02 11:17:08', '2018-09-02 11:17:08', 'a.jpg'),
(13, 'tuanasdbasdb', 'asndubas asduhasd asdasd asbd', 'tuanda sda', '2018-09-04 22:17:32', '2018-09-04 22:17:32', 'nvBZV_2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'vantuankrn197@gmail.com', '$2y$12$oHd04WHw1Iria/ZGlhMdk.JbgDKjjqrNbb0TkJpLnIvIagUe.zTb6', 'SrxjKGRuKt6PjhkhojJ6FWGIhzPt2bjd0H2WJSWE7UjYKSiCp7iUzxhUIKhc', NULL, '2018-09-05 09:04:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `smart_book`
--
ALTER TABLE `smart_book`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `smart_book`
--
ALTER TABLE `smart_book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
