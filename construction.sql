-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2020 lúc 04:57 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `construction`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `img_banner` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_banner` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `titles` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_blog` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_post` int(11) NOT NULL,
  `date_blog` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id_blog`, `status`, `titles`, `slug`, `img_blog`, `description`, `content`, `user_post`, `date_blog`, `updated_at`, `created_at`) VALUES
(11, 0, 'Test nè nhe', 'test-ne-nhe', '20112020_864e4925e96a1e96ae2d6f7ccdc725b5.jpg', 'Tính tiền aaaa', '<p><img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/1-30.jpg\" style=\"border-style:solid; border-width:8px; float:right; height:128px; margin-left:20px; margin-right:20px; width:200px\" /></p>\r\n\r\n<p>Teesst chơi th&ocirc;i &agrave; kkka</p>', 1, '2020-09-30 00:00:00', '2020-11-22 20:55:48', '2020-09-30 03:25:31'),
(13, 1, 'Test nhè nhẹ', 'test-nhe-nhe', '20112020_8ff31dee7494dcd90b944477d26cee64.jpg', 'ABCDERGKJBK', '<p><img alt=\"\" src=\"http://127.0.0.1:8080/construction/admin/blog/public/uploads/blake-byun-championship-jhin12.jpg\" style=\"border-style:solid; border-width:12px; float:left; height:118px; margin:10px 50px; width:200px\" /><em><strong>ABCDKHDKHKDHKDKBKDB</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, '2020-11-20 02:56:51', '2020-11-21 18:23:15', '2020-11-19 19:56:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `processing`
--

CREATE TABLE `processing` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `processing`
--

INSERT INTO `processing` (`id`, `name`) VALUES
(1, 'Đang thi công'),
(2, 'Chờ nhiệm thu'),
(3, 'Hoàn thành bàn giao'),
(4, 'Nhận dự án'),
(5, 'Bị hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_project` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `date_completion_expected` date NOT NULL,
  `date_completion_actual` date DEFAULT NULL,
  `total_employees` int(11) DEFAULT '0',
  `id_processing` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project`
--

INSERT INTO `project` (`id_project`, `slug`, `name_project`, `banner`, `description`, `note`, `start_date`, `date_completion_expected`, `date_completion_actual`, `total_employees`, `id_processing`, `created_at`, `updated_at`) VALUES
(1, 'test-ne', 'Test nè', '23112020_00aa7e81e279ed1e6261babcaa357dc9.jpg', '<p>test sương sương&nbsp;<img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/Project/project_details.jpg\" style=\"border-style:solid; border-width:20px; height:231px; margin:50px 10px; width:500px\" /></p>', 'aaaa', '2020-11-22', '2020-11-23', '2020-11-24', 100, 1, '2020-11-22 05:09:18', '2020-11-22 20:50:08'),
(3, 'tesst-suong-suong', 'tesst sương sương', '23112020_287d0a804c09c938a19605793d2ad057.jpg', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'Lêu lêu bị hủy rồi...', '2020-11-24', '2020-11-28', '2020-11-25', 0, 5, '2020-11-22 21:07:21', '2020-11-22 22:44:59'),
(4, 'bla-bla-bla-bla', 'bla bla bla bla', '23112020_d6396ad450e9c01f9d9bb282569aa03c.jpg', '<p>aaaaaaaaaaaaaaaaabbbbbbbbbbbbbb</p>', NULL, '2020-11-23', '2020-12-06', NULL, NULL, 4, '2020-11-22 21:07:49', '2020-11-22 21:07:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`, `description_role`) VALUES
(1, 'ROLE_ADMIN', 'Quản lý hệ thống\r\n'),
(2, 'ROLE_BULIDER', 'Thợ xây'),
(3, 'ROLE_ENGINEER', 'Kỹ sư ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id_service`, `title`, `description`, `content`, `banner`, `slug`, `created_at`, `updated_at`, `status`) VALUES
(3, 'test thêm miếng nữa nè', 'Olallaalala', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/Service/servicess3.png\" style=\"height:268px; width:370px\" /></p>', '23112020_1049f27e2a3dfed2dd6d390fdfc0910c.jpg', 'test-them-mieng-nua-ne', '2020-11-22 20:57:44', '2020-11-22 21:47:23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `phone_user`, `email_user`, `password_user`, `address_user`, `avatar_user`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0386956572', NULL, '$2y$10$HtwPbFWTJelA33CQQmF2ZuUUQV4lxfZXuHnK1xn279Il1Ui7srTPW', '180 Cao lỗ, Phường 4', '23112020_60962ab1d5d11d479644b34c182ea283.jpg', 1, '2020-09-28 17:00:00', '2020-11-23 08:55:07'),
(3, 'Thợ xây nè', '0386956572', 'thoxay@gmail.com', '$2y$10$/JeMihK8HVmkg.xqGAvlNuHKdzfZD3MAKHJhBP0Uk5DWk3gMygS/K', '180 Cao lỗ, Phường 4', 'avatar.png', 2, '2020-11-23 08:47:28', '2020-11-23 08:47:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `user_post` (`user_post`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `processing`
--
ALTER TABLE `processing`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_processing` (`id_processing`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `processing`
--
ALTER TABLE `processing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_post`) REFERENCES `users` (`id_user`);

--
-- Các ràng buộc cho bảng `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_processing`) REFERENCES `processing` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
