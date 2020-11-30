-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2020 lúc 06:05 AM
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
(11, 1, 'Test nè nhe', 'test-ne-nhe', '30112020_e1763f907651435e6b7b03aabdebe52d.jpg', 'Tính tiền aaaa', '<p><img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/1-30.jpg\" style=\"border-style:solid; border-width:8px; float:right; height:128px; margin-left:20px; margin-right:20px; width:200px\" /></p>\r\n\r\n<p>Teesst chơi th&ocirc;i &agrave; kkka</p>', 1, '2020-09-30 00:00:00', '2020-11-29 19:58:01', '2020-09-30 03:25:31'),
(13, 1, 'Test nhè nhẹ', 'test-nhe-nhe', '30112020_8f82fff31be18829e3ea4cc6ac3060b0.jpg', 'ABCDERGKJBK', '<p><em><strong><img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/blog/post_9.png\" style=\"height:90px; width:90px\" />ABCDKHDKHKDHKDKBKDB</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, '2020-11-20 02:56:51', '2020-11-29 19:57:27', '2020-11-19 19:56:51'),
(14, 1, 'test xíu xìu xiu', 'test-xiu-xiu-xiu', '30112020_8c28b3a90d8d0ffac0b1b77e57cb1c8f.jpg', 'aaaaa', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', 1, '2020-11-29 15:13:08', '2020-11-29 19:57:51', '2020-11-29 08:13:08');

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
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Test - Xây nhà 10 tấm', 'Viết test chơi chơi z thôi oke =)))', 1, '2020-11-29 13:51:57', '2020-11-29 07:01:13'),
(2, 'Test nè', 'hihiiihihihihihiiihih', 1, '2020-11-29 07:06:54', '2020-11-29 19:53:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`id`, `email`, `phone`, `address`, `about_description`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'le.trong.an256@gmail.com', '0386956572', '180 Cao lỗ, Phường 4', '<p>Tổng C&ocirc;ng ty X&acirc;y dựng H&agrave; Nội &ndash; CTCP (HANCORP) l&agrave; một trong những doanh nghiệp đầu ng&agrave;nh trong lĩnh vực thi c&ocirc;ng x&acirc;y lắp v&agrave; nh&agrave; đầu tư về hạ tầng v&agrave; khu đ&ocirc; thị mới &ndash; nh&agrave; ở c&oacute; tiềm lực với tầm nh&igrave;n quy hoạch xa, rộng v&agrave; cung c&aacute;ch kinh doanh độc đ&aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hancorp.com.vn/wp-content/uploads/2019/04/baotanghochiminh.jpg\" style=\"height:356px; width:500px\" /></p>\r\n\r\n<p>Bảo t&agrave;ng Hồ Ch&iacute; Minh</p>\r\n\r\n<p>Với cơ sở vật chất v&agrave; con người ng&agrave;y c&agrave;ng được tăng cường, bằng lao động s&aacute;ng tạo của m&igrave;nh, HANCORP đ&atilde; thi c&ocirc;ng h&agrave;ng ngh&igrave;n c&ocirc;ng tr&igrave;nh d&acirc;n dụng, c&ocirc;ng nghiệp, giao th&ocirc;ng thuỷ lợi, hạ tầng kỹ thuật, hạ tầng x&atilde; hội tr&ecirc;n mọi miền đất nước v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh ở nước ngo&agrave;i như Li&ecirc;n x&ocirc; cũ, Cộng ho&agrave; I-Rắc v&agrave; Cộng ho&agrave; d&acirc;n chủ nh&acirc;n d&acirc;n L&agrave;o&hellip; Đặc biệt, TCty cũng vinh dự được nh&agrave; nước giao nhiều c&ocirc;ng tr&igrave;nh quan trọng c&oacute; &yacute; nghĩa về ch&iacute;nh trị, qu&acirc;n sự, kinh tế, quốc ph&ograve;ng. Phần lớn c&aacute;c c&ocirc;ng tr&igrave;nh v&agrave; sản phẩm x&acirc;y dựng được x&atilde; hội v&agrave; thị trường đ&aacute;nh gi&aacute; cao như Lăng Chủ tịch Hồ Ch&iacute; Minh, Viện Bảo t&agrave;ng Hồ Ch&iacute; Minh, Hội trường Ba Đ&igrave;nh, Nh&agrave; h&aacute;t lớn TP H&agrave; Nội, Kh&aacute;ch sạn quốc tế Hồ T&acirc;y, Th&aacute;p H&agrave; Nội, Kh&aacute;ch sạn Daewoo, Trung t&acirc;m hội nghị Quốc gia, Trung t&acirc;m b&aacute;o ch&iacute; quốc tế, Văn ph&ograve;ng Trung ương Đảng, Nh&agrave; l&agrave;m việc c&aacute;c cơ quan v&agrave; văn ph&ograve;ng Quốc hội, Nh&agrave; Quốc hội v&agrave; Hội trường Ba Đ&igrave;nh mới, Trụ sở Bộ T&agrave;i ch&iacute;nh, Viện nhi Trung ương, T&ograve;a nh&agrave; KEANGNAM, ROYAL CITY, Trạm biến &aacute;p 500KV H&agrave; Tĩnh, Đường Hồ Ch&iacute; Minh, Nh&agrave; m&aacute;y Xi măng Nghi Sơn, Ho&agrave;ng Mai, Bỉm Sơn, Tam Điệp, Hạ Long&hellip; Nh&agrave; m&aacute;y điện Ph&uacute; Mỹ 1-2, Nh&agrave; m&aacute;y điện H&agrave;m Thuận&hellip;v.v.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hancorp.com.vn/wp-content/uploads/2019/04/tthn-quocgia.gif\" style=\"height:353px; width:500px\" /></p>\r\n\r\n<p>Trung t&acirc;m Hội Nghị Quốc Gia</p>\r\n\r\n<p>Trong thi c&ocirc;ng, HANCORP với đội ngũ c&aacute;n bộ v&agrave; c&ocirc;ng nh&acirc;n chuy&ecirc;n nghiệp cao, được tổ chức tốt n&ecirc;n đ&atilde; v&agrave; đang sử dụng th&agrave;nh thạo nhiều c&ocirc;ng nghệ v&agrave; biện ph&aacute;p kỹ thuật ti&ecirc;n tiến như: cọc khoan nhồi, tường Barrete, cốp pha trượt, cốp pha leo, table form, s&agrave;n b&oacute;ng, cốp pha định h&igrave;nh aluminum, kết cấu b&ecirc; t&ocirc;ng cường độ cao, b&ecirc; t&ocirc;ng khối lớn, b&ecirc; t&ocirc;ng ứng suất trước, s&agrave;n tường 3D, kết cấu b&ecirc; t&ocirc;ng th&eacute;p h&igrave;nh hỗn hợp, nh&agrave; th&ocirc;ng minh&hellip; Một trong những th&agrave;nh c&ocirc;ng ti&ecirc;u biểu l&agrave; thi c&ocirc;ng tường nghi&ecirc;ng h&igrave;nh ch&oacute;p cụt ngược lần đầu ti&ecirc;n tại Việt Nam cho Ph&ograve;ng họp ch&iacute;nh Nh&agrave; Quốc hội mới.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hancorp.com.vn/wp-content/uploads/2019/04/nhahatlonHN.jpg\" style=\"height:355px; width:500px\" /></p>\r\n\r\n<p>Thế mạnh của HANCORP l&agrave; thi c&ocirc;ng c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dụng v&agrave; c&ocirc;ng nghiệp với mũi nhọn l&agrave; nh&agrave; cao tầng v&agrave; si&ecirc;u cao tầng. Trong những năm vừa qua, HANCORP đ&atilde; v&agrave; đang thi c&ocirc;ng h&agrave;ng trăm nh&agrave; cao tầng tr&ecirc;n khắp cả nước với chất lượng cao, an to&agrave;n. 165 c&ocirc;ng tr&igrave;nh đ&atilde; được nhận huy chương v&agrave;ng v&agrave; bằng chất lượng cao, trong đ&oacute; c&oacute; 7 c&ocirc;ng tr&igrave;nh đ&atilde; được c&ocirc;ng nhận l&agrave; c&ocirc;ng tr&igrave;nh ti&ecirc;u biểu v&agrave; được tặng C&uacute;p v&agrave;ng chất lượng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hancorp.com.vn/wp-content/uploads/2019/04/langquocte-ThangLong-1024x768.jpg\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<p>L&agrave;ng Quốc Tế &ndash; Thăng Long</p>\r\n\r\n<p>Ngo&agrave;i hoạt động sản xuất x&acirc;y lắp, TCty X&acirc;y dựng H&agrave; Nội c&ograve;n hoạt động trong lĩnh vực bất động sản. Đ&acirc;y cũng l&agrave; thế mạnh mang lại lợi nhuận cao cho TCty n&oacute;i ri&ecirc;ng v&agrave; cho c&aacute;c đơn vị th&agrave;nh vi&ecirc;n trong tổ hợp HANCOPR n&oacute;i chung. C&aacute;c đơn vị v&agrave; TCty đ&atilde; hỗ trợ lẫn nhau t&iacute;ch cực về nguy&ecirc;n vật liệu, thi c&ocirc;ng x&acirc;y lắp, đầu tư c&aacute;c dự &aacute;n. Ch&iacute;nh nhờ sự tương hỗ lẫn nhau n&agrave;y m&agrave; to&agrave;n bộ c&aacute;c th&agrave;nh vi&ecirc;n đ&atilde; tạo dựng n&ecirc;n thương hiệu HANCORP uy t&iacute;n trong lĩnh vực x&acirc;y dựng v&agrave; đầu tư dự &aacute;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hancorp.com.vn/wp-content/uploads/2019/04/ngoai-giao-doan.jpg\" style=\"width:500px\" /></p>\r\n\r\n<p>Khu Ngoại Giao Đo&agrave;n</p>\r\n\r\n<p>Ph&aacute;t biểu chỉ đạo tại phi&ecirc;n Đại hội đồng cổ đ&ocirc;ng lần thứ nhất TCty, Thứ trưởng Bộ X&acirc;y dựng B&ugrave;i Phạm Kh&aacute;nh, Trưởng ban chỉ đạo CPH Bộ X&acirc;y dựng đ&atilde; đề nghị TCty x&acirc;y dựng H&agrave; Nội tiếp tục ph&aacute;t triển thương hiệu TCty, ho&agrave;n thiện bộ m&aacute;y hoạt động cũng như ho&agrave;n thiện đề &aacute;n t&aacute;i cơ cấu TCty đ&atilde; được Bộ X&acirc;y dựng ph&ecirc; duyệt để m&ocirc; h&igrave;nh hoạt động ng&agrave;y c&agrave;ng hiệu quả. Đề nghị Ban l&atilde;nh đạo TCty tiếp tục t&igrave;m kiếm nh&agrave; đầu tư chiến lược sau CPH để đa dạng h&oacute;a c&aacute;c loại h&igrave;nh hoạt động, thực hiện đồng bộ c&aacute;c giải ph&aacute;p sản xuất kinh doanh, đặc biệt l&agrave; trong giai đoạn chuyển giao từ TCty nh&agrave; nước sang Cty CP hiện nay.</p>\r\n\r\n<p><strong>Chức năng &ndash; Nhiệm vụ</strong></p>\r\n\r\n<ul>\r\n	<li>Nhận thầu thi c&ocirc;ng x&acirc;y lắp v&agrave; ho&agrave;n thiện c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dụng, c&ocirc;ng nghiệp, giao th&ocirc;ng, thủy lợi, bưu điện, thủy điện, đường d&acirc;y v&agrave; trạm biến thế điện (đến 500 KV).</li>\r\n	<li>X&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh kỹ thuật hạ tầng trong c&aacute;c khu đ&ocirc; thị v&agrave; khu c&ocirc;ng nghiệp.</li>\r\n	<li>Tổng thầu tư vấn v&agrave; quản l&yacute; c&aacute;c dự &aacute;n x&acirc;y dựng.</li>\r\n	<li>Tư vấn x&acirc;y dựng c&aacute;c khu d&acirc;n cư, khu đ&ocirc; thị, khu c&ocirc;ng nghiệp v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dụng, c&ocirc;ng nghiệp, giao th&ocirc;ng, thủy lợi, bưu điện, thủy điện, đường d&acirc;y v&agrave; trạm biến thế điện v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh kỹ thuật hạ tầng bao gồm: Lập dự &aacute;n đầu tư, tư vấn đấu thầu, khảo s&aacute;t x&acirc;y dựng, th&iacute; nghiệm thiết kế.</li>\r\n	<li>Thẩm định dự &aacute;n đầu tư, thẩm tra thiết kế, tổng dự to&aacute;n, kiểm định chất lượng, quản l&yacute; dự &aacute;n, gi&aacute;m s&aacute;t thi c&ocirc;ng, chuyển giao c&ocirc;ng nghệ, x&acirc;y dựng thực nghiệm, trang tr&iacute; nội, ngoại thất v&agrave; c&aacute;c dịch vụ tư vấn kh&aacute;c.</li>\r\n	<li>Đầu tư kinh doanh, ph&aacute;t triển nh&agrave; v&agrave; hạ tầng.</li>\r\n	<li>Sản xuất kinh doanh vật tư thiết bị, vật liệu x&acirc;y dựng, kinh doanh nh&agrave; nghỉ, kh&aacute;ch sạn.</li>\r\n	<li>Xuất nhập khẩu vật tư, thiết bị, c&ocirc;ng nghệ, vật liệu x&acirc;y dựng v&agrave; c&aacute;c ngh&agrave;nh kh&aacute;c.</li>\r\n	<li>Đưa người lao dộng v&agrave; chuy&ecirc;n gia Việt Nam đi l&agrave;m việc c&oacute; thời hạn ở nước ngo&agrave;i.</li>\r\n	<li>Kinh doanh dịch vụ c&aacute;c c&ocirc;ng tr&igrave;nh thể dục thể thao v&agrave; tổ chức vui chơi giải tr&iacute;.</li>\r\n</ul>\r\n\r\n<p><strong>C&aacute;c mốc lịch sử ph&aacute;t triển v&agrave; th&agrave;nh tựu</strong></p>\r\n\r\n<ul>\r\n	<li>Th&agrave;nh lập từ năm 1958 đến nay với hơn 55 năm kinh nghiệm, Tổng C&ocirc;ng ty X&acirc;y dựng H&agrave; Nội đ&atilde; trở th&agrave;nh một trong những Tổng C&ocirc;ng ty X&acirc;y dựng h&agrave;ng đầu tại Việt Nam.</li>\r\n	<li>Hoạt động trong lĩnh vực tư vấn, thiết kế, x&acirc;y lắp c&aacute;c c&ocirc;ng tr&igrave;nh c&ocirc;ng cộng, văn ho&aacute;, d&acirc;n dụng, c&ocirc;ng nghiệp v&agrave; cơ sở hạ tầng g&oacute;p phần th&uacute;c đẩy sự ph&aacute;t triển chung của đất nước. Tổng C&ocirc;ng ty c&oacute; 08 Chi nh&aacute;nh (01 Chi nh&aacute;nh đặt tại Th&agrave;nh phố Hồ Ch&iacute; Minh), 05 C&ocirc;ng ty con, 28 C&ocirc;ng ty li&ecirc;n kết cả trong nước v&agrave; nước ngo&agrave;i.</li>\r\n	<li>Tổng C&ocirc;ng ty X&acirc;y dựng H&agrave; Nội kh&ocirc;ng ngừng đầu tư m&aacute;y m&oacute;c thiết bị, n&acirc;ng cao tr&igrave;nh độ quản l&yacute; v&agrave; x&acirc;y lắp, &aacute;p dụng khoa học c&ocirc;ng nghệ x&acirc;y dựng ti&ecirc;n tiến nhằm đ&aacute;p ứng xu thế ph&aacute;t triển chung trong thời đại c&ocirc;ng nghiệp ho&aacute;, hiện đại ho&aacute; đất nước, đảm bảo tiến độ, chất lượng c&ocirc;ng tr&igrave;nh thỏa m&atilde;n nhu cầu ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng.</li>\r\n	<li>Tổng C&ocirc;ng ty X&acirc;y dựng H&agrave; Nội đ&atilde; được Ch&iacute;nh phủ tặng thưởng nhiều hu&acirc;n chương, huy chương, bằng khen cho c&aacute;c đ&oacute;ng g&oacute;p của m&igrave;nh trong sự nghiệp x&acirc;y dựng, ph&aacute;t triển chung của cả nước.</li>\r\n	<li><strong>Năm 1985:</strong>&nbsp;Hu&acirc;n chương Lao động hạng nhất</li>\r\n	<li><strong>Năm 1996:</strong>&nbsp;Hu&acirc;n chương Lao động hạng nh&igrave;</li>\r\n	<li><strong>Năm 2000:</strong>&nbsp;Hu&acirc;n chương Độc lập hạng ba</li>\r\n	<li><strong>Năm 2002:</strong>&nbsp;Hu&acirc;n chương Độc lập hạng nh&igrave;</li>\r\n	<li><strong>Năm 2009:</strong>&nbsp;Hu&acirc;n chương Độc lập hạng nhất</li>\r\n</ul>', '30112020_c6158701f1b03f2f74e1c90f06eed405.jpg', '2020-11-29 13:17:43', '2020-11-29 19:18:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `subject`, `name`, `email`, `content`, `updated_at`, `created_at`) VALUES
(3, 'aaaaaaaaaaaaaa', 'Lê Trọng Ân', 'le.trong.an256@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaa', '2020-11-29 20:43:49', '2020-11-29 20:43:49'),
(4, 'aaaaaaaaaaaaa', 'aaa', 'le.trong.an256@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-11-29 20:44:51', '2020-11-29 20:44:51');

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
(1, 'test-ne', 'Test nè', '30112020_eeb28b694e178d22952bf92a025a892c.jpg', '<p>test sương sương&nbsp;<img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/Project/project_details.jpg\" style=\"border-style:solid; border-width:20px; height:231px; margin:50px 10px; width:500px\" /></p>', 'aaaa', '2020-11-22', '2020-11-23', '2020-11-24', 100, 3, '2020-11-22 05:09:18', '2020-11-29 21:07:16'),
(3, 'tesst-suong-suong', 'tesst sương sương', '30112020_e7cc1490c72e0ebed429bc34638e8f04.jpg', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'Lêu lêu bị hủy rồi...', '2020-11-24', '2020-11-28', '2020-11-25', 0, 5, '2020-11-22 21:07:21', '2020-11-29 21:07:56'),
(4, 'bla-bla-bla-bla', 'bla bla bla bla', '30112020_c8e15dcc73ea5d9c641ccd3ed9aefc55.jpg', '<p>aaaaaaaaaaaaaaaaabbbbbbbbbbbbbb</p>', NULL, '2020-11-23', '2020-12-06', '2020-12-02', 0, 4, '2020-11-22 21:07:49', '2020-11-29 21:07:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`, `description_role`, `created_at`, `updated_at`) VALUES
(1, 'ROLE_ADMIN', 'Quản lý hệ thống\r\n', '2020-11-27 03:00:57', '2020-11-27 03:00:57'),
(2, 'ROLE_BULIDER', 'Thợ xây', '2020-11-27 03:00:57', '2020-11-27 03:00:57'),
(3, 'ROLE_ENGINEER', 'Kỹ sư ', '2020-11-27 03:00:57', '2020-11-27 03:00:57');

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
(3, 'test thêm miếng nữa nè', 'Olallaalala', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://127.0.0.1:8080/construction/public/uploads/Service/servicess3.png\" style=\"height:268px; width:370px\" /></p>', '23112020_1049f27e2a3dfed2dd6d390fdfc0910c.jpg', 'test-them-mieng-nua-ne', '2020-11-22 20:57:44', '2020-11-29 07:18:55', 1);

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
(1, 'Admin', '0386956572', NULL, '$2y$10$HtwPbFWTJelA33CQQmF2ZuUUQV4lxfZXuHnK1xn279Il1Ui7srTPW', '180 Cao lỗ, Phường 4', '27112020_2d5b2b3d2454b24e20ed42c6b6557465.jpg', 1, '2020-09-28 17:00:00', '2020-11-26 19:25:53'),
(3, 'Thợ xây nè', '0386956572', NULL, '$2y$10$/JeMihK8HVmkg.xqGAvlNuHKdzfZD3MAKHJhBP0Uk5DWk3gMygS/K', '180 Cao lỗ, Phường 4', '27112020_865ec7e2959da256a2a97a8b39a3ba2a.jpg', 2, '2020-11-23 08:47:28', '2020-11-26 19:27:14');

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
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
