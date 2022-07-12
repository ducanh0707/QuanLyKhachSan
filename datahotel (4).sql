-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 12, 2022 lúc 02:11 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datahotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_08_24_142457_tbl_admin', 1),
(4, '2021_08_29_040450_create_tbl_category_room', 2),
(5, '2021_11_07_180532_create_tbl_dondat', 3),
(7, '2021_11_08_034754_create_tbl_customer', 4),
(8, '2021_11_19_022122_create_tbl_dichvu', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(2, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Bui Duc Anh', '0825532619', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_room`
--

DROP TABLE IF EXISTS `tbl_category_room`;
CREATE TABLE IF NOT EXISTS `tbl_category_room` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_giuong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_nguoi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_tich` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_phong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thong_tin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_room`
--

INSERT INTO `tbl_category_room` (`category_id`, `ten_loai`, `so_giuong`, `so_nguoi`, `dien_tich`, `gia_phong`, `image`, `thong_tin`, `room_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(23, 'Phòng Luxury', '2', '4', '32', '299', '0919-AJS-NOI-Hotel-des-Arts-SGN-1091-Web-1500x69031.jpg', 'k-mean nhạy cảm với các ngoại lệ vì các đối tượng như vậy ở xa phần lớn dữ liệu và do đó, khi được gán cho một cụm, chúng có thể làm sai lệch đáng kể giá trị trung bình của cụm. Điều này vô tình ảnh hưởng đến việc phân công các đối tượng khác', 'view sân bóng', 1, NULL, NULL),
(21, 'Phòng thường', '2', '4', '32', '299', 'images59.jfif', 'ạn sẽ ngạc nhiên bởi nét quyến rũ và hấp dẫn của mọi cảnh vật xung quanh Resort. Năng lượng được tái sinh khi bạn cảm nhận được từng làn gió lướt qua những rặng thông. Hãy để tâm trí khám phá những vẻ đẹp kiến trúc – một cung điện nguy nga nằm giữa thiên nhiên dường như không có giới hạn về không gian lẫn thời gian', 'view sân bóng', 0, NULL, NULL),
(22, 'Phòng Ngủ', '2', '4', '32', '2.000', 'thiet-ke-phong-ngu-16m2-313.jpg', 'ạn sẽ ngạc nhiên bởi nét quyến rũ và hấp dẫn của mọi cảnh vật xung quanh Resort. Năng lượng được tái sinh khi bạn cảm nhận được từng làn gió lướt qua những rặng thông. Hãy để tâm trí khám phá những vẻ đẹp kiến trúc – một cung điện nguy nga nằm giữa thiên nhiên dường như không có giới hạn về không gian lẫn thời gian', 'view sân bóng', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietdondat`
--

DROP TABLE IF EXISTS `tbl_chitietdondat`;
CREATE TABLE IF NOT EXISTS `tbl_chitietdondat` (
  `id_ctdondat` int(11) NOT NULL AUTO_INCREMENT,
  `id_dondat` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tu_ngay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `den_ngay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `tong_tien` double NOT NULL,
  `tthai_ttoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ctdondat`),
  KEY `lien_ket_01` (`id_dondat`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitietdondat`
--

INSERT INTO `tbl_chitietdondat` (`id_ctdondat`, `id_dondat`, `category_id`, `tu_ngay`, `den_ngay`, `trang_thai`, `tong_tien`, `tthai_ttoan`) VALUES
(37, 49, 22, '03/11/2022', '03/18/2022', 0, 299, 'chưa thanh toán'),
(36, 48, 22, '12/24/2021', '12/25/2021', 0, 299, 'chưa thanh toán'),
(34, 46, 23, '12/24/2021', '12/30/2021', 1, 299, 'chưa thanh toán'),
(33, 45, 22, '12/25/2021', '12/31/2021', 0, 299, 'chưa thanh toán'),
(32, 44, 23, '12/16/2021', '12/18/2021', 0, 299, 'chưa thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiethoadon`
--

DROP TABLE IF EXISTS `tbl_chitiethoadon`;
CREATE TABLE IF NOT EXISTS `tbl_chitiethoadon` (
  `id_cthoadon` int(11) NOT NULL AUTO_INCREMENT,
  `id_hoadon` int(11) NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tthai_ttoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cthoadon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id_customer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_dondat` int(11) NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_kh` int(11) NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `id_dondat`, `ten_kh`, `sdt_kh`, `diachi`, `email`, `created_at`, `updated_at`) VALUES
(69, 49, 'nguyen ngoc anh', 981130956, 'Nghi Thái Nghi Lộc', 'anhbd0707@gmail.com', NULL, NULL),
(68, 49, 'trân duy manh', 981130956, 'Nghi Thái Nghi Lộc', 'anhbd0707@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dichvu`
--

DROP TABLE IF EXISTS `tbl_dichvu`;
CREATE TABLE IF NOT EXISTS `tbl_dichvu` (
  `id_dichvu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tendichvu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_dichvu`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dichvu`
--

INSERT INTO `tbl_dichvu` (`id_dichvu`, `tendichvu`, `img_service`, `mota`, `created_at`, `updated_at`) VALUES
(4, 'Gửi xe miễn phí', 'nha-de-xe-o-to72.jpg', 'để xe miền phí', '2021-11-23 20:10:03', '2021-11-23 20:10:03'),
(9, 'Free bữa sáng', '500px-phohaitrieu-6059-1540791-6860-5415-160154292215.jpg', 'Free bữa sáng', '2021-11-27 21:44:41', '2021-11-27 21:44:41'),
(5, 'Free nước uống', 'Diem-danh-15-loai-do-uong-hot-nhat-nam-co-vy85.jpg', 'nuoc uong free', '2021-11-23 20:10:20', '2021-11-23 20:10:20'),
(6, 'bể bơi miên phí', 'thiet-bi-be-boi-hoan-thien-cho-be-xanh-sach-dep80.jpg', 'bể bơi to măt', '2021-11-23 20:11:18', '2021-11-23 20:11:18'),
(7, 'Công viên rộng rãi', 'cong-vien-150ha-tai-quan-12-nam-202055.jpg', 'có công viên', '2021-11-23 20:12:01', '2021-11-23 20:12:01'),
(8, 'free wifi', '136911-127.png', 'câs', '2021-11-23 20:25:34', '2021-11-23 20:25:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dondat`
--

DROP TABLE IF EXISTS `tbl_dondat`;
CREATE TABLE IF NOT EXISTS `tbl_dondat` (
  `id_dondat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `ngaydat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(10) NOT NULL,
  `tthai_ttoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_dondat`),
  KEY `dondat_nguoidung` (`id_customer`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dondat`
--

INSERT INTO `tbl_dondat` (`id_dondat`, `category_id`, `id_customer`, `ngaydat`, `trangthai`, `tthai_ttoan`, `created_at`, `updated_at`) VALUES
(48, 22, 68, '12/24/2021', 0, 'chưa thanh toán', NULL, NULL),
(49, 22, 69, '03/11/2022', 0, 'chưa thanh toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

DROP TABLE IF EXISTS `tbl_hoadon`;
CREATE TABLE IF NOT EXISTS `tbl_hoadon` (
  `id_hoadon` int(11) NOT NULL AUTO_INCREMENT,
  `id_dondat` int(11) NOT NULL,
  `thoigian` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `tthai_ttoan` int(11) NOT NULL,
  PRIMARY KEY (`id_hoadon`),
  KEY `hoadon_cthoadon` (`id_dondat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_room`
--

DROP TABLE IF EXISTS `tbl_room`;
CREATE TABLE IF NOT EXISTS `tbl_room` (
  `id_room` int(11) NOT NULL AUTO_INCREMENT,
  `Sophong` int(11) NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_desc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_status`, `slider_image`, `slider_desc`) VALUES
(6, 'slide 1', 0, '0919-AJS-NOI-Hotel-des-Arts-SGN-1091-Web-1500x69078.jpg', '1'),
(7, 'slide 2', 0, 'unnamed55.jpg', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
