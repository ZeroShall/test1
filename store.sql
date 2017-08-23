-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 09, 2017 lúc 01:51 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'DELL', 2, '2017-07-28 17:19:27', '2017-07-28 17:19:27'),
(2, 'ASUS', 2, '2017-07-28 17:19:37', '2017-07-28 17:19:37'),
(3, 'ACER', 2, '2017-07-28 17:19:45', '2017-07-28 17:19:45'),
(4, 'HP', 2, '2017-07-28 17:19:53', '2017-07-28 17:20:00'),
(5, 'CPU - BỘ VI XỬ LÝ', 1, '2017-07-28 17:20:08', '2017-07-28 17:20:08'),
(6, 'MAIN - BO MẠCH CHỦ', 1, NULL, NULL),
(7, 'VGA _ CARD MÀN HÌNH', 1, NULL, NULL),
(8, 'RAM - BỘ NHỚ TRONG', 1, '2017-08-01 04:31:59', '2017-08-01 04:31:59'),
(9, 'PSU - NGUỒN MÁY TÍNH', 1, '2017-08-01 04:32:30', '2017-08-01 04:32:30'),
(10, 'MÁY CHIẾU', 6, '2017-08-01 04:33:20', '2017-08-01 04:33:20'),
(11, 'MÁY IN', 6, '2017-08-01 04:33:27', '2017-08-01 04:33:27'),
(12, 'MÁY PHOTOCOPY', 6, '2017-08-01 04:33:52', '2017-08-01 04:33:52'),
(13, 'MÁY FAX', 6, '2017-08-01 04:34:00', '2017-08-01 04:34:00'),
(14, 'CHUỘT GAMING', 3, '2017-08-01 06:37:37', '2017-08-01 06:37:37'),
(15, 'BÀN PHÍM GAMING', 3, '2017-08-01 06:38:05', '2017-08-01 06:38:05'),
(16, 'TAI NGHE', 3, '2017-08-01 06:38:29', '2017-08-01 06:38:29'),
(17, 'LOA MÁY TÍNH', 4, '2017-08-01 06:38:56', '2017-08-01 06:38:56'),
(18, 'WEBCAM', 4, '2017-08-01 06:39:04', '2017-08-01 06:39:16'),
(19, 'HEADPHONE & MIC', 4, '2017-08-01 06:39:45', '2017-08-01 06:39:45'),
(20, 'USB', 5, '2017-08-01 06:40:35', '2017-08-01 06:40:35'),
(21, 'Ổ CỨNG GẮN NGOÀI', 5, '2017-08-01 06:41:12', '2017-08-01 06:41:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_07_19_132749_create_users_tables', 1),
(2, '2017_07_19_133546_create_categories_tables', 1),
(3, '2017_07_19_133626_create_products_tables', 1),
(4, '2017_07_19_133658_create_groups_tables', 1),
(5, '2017_07_19_133719_create_images_tables', 1),
(6, '2017_07_19_133803_create_suppliers_tables', 1),
(7, '2017_07_19_134034_create_purchases_tables', 1),
(8, '2017_07_26_103305_create_exports_tables', 2),
(9, '2017_07_26_103823_create_export_tables', 3),
(10, '2017_07_26_104011_create_purchase_tables', 3),
(11, '2017_07_26_104149_create_news_tables', 4),
(12, '2017_07_26_104946_create_users_table', 5),
(13, '2017_08_01_094803_create_slider_tables', 6),
(14, '2017_08_01_100050_create_slide_tables', 7),
(15, '2017_08_02_030308_create_danhmuc_tables', 8),
(16, '2017_08_09_093956_create_shoppingcart_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'khaitruong.jpg', 'KHAI TRƯƠNG TƯNG BỪNG', 'Cửa hàng khai trương - khuyến mãi tưng bừng\r\n\r\n100 quà tặng dành cho khách hàng đến mua sản phẩm của cửa hàng đầu tiên !', NULL, NULL),
(2, 'sale.jpg', 'KHUYẾN MÃI CỰC KHỦNG', 'Khuyến mãi 15% cho tất cả các mặt hàng !', NULL, NULL),
(3, 'baotri.jpg', 'Bảo trì Website', 'Bảo trì Website từ ngày 9/8 đến 10/8', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` double(12,2) NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL,
  `inventorynumber` int(11) NOT NULL,
  `favorite` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `category_id`, `price`, `des`, `sale`, `inventorynumber`, `favorite`, `created_at`, `updated_at`) VALUES
(1, 'ACER K502', 'Asus_S510UA-BQ300.png', 3, 15999000.00, 'new', 10, 15, 1, '2017-07-28 17:24:13', '2017-08-01 08:11:45'),
(2, 'Xeon® Processor E5-2670', '2670.jpg', 5, 3245000.00, 'new', 0, 24, 0, '2017-08-01 04:28:54', '2017-08-01 06:07:43'),
(3, 'Dell XPS 13', 'XPS_13.jpeg', 1, 38000000.00, 'new', 0, 8, 0, '2017-08-01 05:01:41', '2017-08-01 06:14:46'),
(5, 'Intel® Core™ i7-6700K Processor', 'a11.png', 5, 7990000.00, 'new', 0, 13, 0, '2017-08-01 07:14:09', '2017-08-01 07:23:20'),
(6, 'Intel® Core™ i9-7900X X-series Processor', '7900x.jpg', 5, 6500000.00, 'old', 20, 24, 0, '2017-08-01 07:15:05', '2017-08-01 08:11:58'),
(7, 'MSI X299 TOMAHAWK ARCTIC', '102425.png', 6, 8880000.00, 'old', 0, 13, 0, '2017-08-01 07:17:16', '2017-08-01 07:22:42'),
(8, 'MSI X370 GAMING PLUS → Số 1 cho Game thủ!', 'main1.png', 6, 4260000.00, 'old', 15, 27, 0, '2017-08-01 07:19:00', '2017-08-01 08:12:06'),
(9, 'G.SKILL RIPJAW 4 - 32GB', 'ram1.jpg', 8, 4500000.00, 'new', 0, 23, 0, '2017-08-01 07:20:37', '2017-08-01 07:20:37'),
(10, 'Dell XPS 13 9360', 'dell2.jpg', 1, 31900000.00, 'old', 0, 15, 0, '2017-08-01 07:21:44', '2017-08-01 07:21:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@shop0317e.com', '$2y$10$apNPPIp2uYSmkl1FmyWbd.dAOmeVLhvWrjxHu5MRA4qdv5fcz1lmK', '1', 'admin', '', '2017-07-26 03:52:31', '2017-07-26 03:52:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
