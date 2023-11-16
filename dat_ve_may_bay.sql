-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 03:54 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dat_ve_may_bay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen_bay`
--

CREATE TABLE `chuyen_bay` (
  `id` int(11) NOT NULL,
  `ten_may_bay` varchar(255) NOT NULL,
  `id_diemDi` int(11) NOT NULL,
  `id_diemDen` int(11) NOT NULL,
  `ngay_khoi_hanh` date NOT NULL,
  `thoi_gian_di` datetime NOT NULL,
  `thoi_gian_den` datetime NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyen_bay`
--

INSERT INTO `chuyen_bay` (`id`, `ten_may_bay`, `id_diemDi`, `id_diemDen`, `ngay_khoi_hanh`, `thoi_gian_di`, `thoi_gian_den`, `trang_thai`) VALUES
(7, 'A1', 7, 8, '2023-11-19', '2023-11-19 07:08:52', '2023-11-19 11:08:52', 'chua bay'),
(15, 'A2', 7, 10, '2023-11-30', '2023-11-30 10:34:00', '2023-11-30 00:34:00', 'chua bay '),
(16, 'A3', 10, 11, '2023-11-28', '2023-11-28 10:35:00', '2023-11-28 12:35:00', 'chua bay '),
(17, 'A4', 14, 12, '2023-11-27', '2023-11-27 03:35:00', '2023-11-27 05:35:00', 'chua bay '),
(18, 'A5', 8, 14, '2023-11-25', '2023-11-25 19:00:00', '2023-11-25 21:00:00', 'chua bay '),
(19, 'A6', 12, 13, '2023-12-02', '2023-12-02 03:00:00', '2023-12-02 04:50:00', 'chua bay '),
(20, 'B1', 13, 7, '2023-12-10', '2023-12-10 10:00:00', '2023-12-10 12:00:00', 'chua bay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ve`
--

CREATE TABLE `dat_ve` (
  `id` int(11) NOT NULL,
  `id_ve` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `gio_dat` datetime NOT NULL,
  `gia_ve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_diem`
--

CREATE TABLE `dia_diem` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dia_diem`
--

INSERT INTO `dia_diem` (`id`, `ten`, `img`) VALUES
(7, 'Hà Nội (HAN)', 'hanoi.jpg'),
(8, 'TP.Hồ Chí Minh (SGN)', 'tphochiminh.jpg'),
(10, 'Hải Phòng (HPH)', 'haiphong.jpg'),
(11, 'Vinh (VII)', 'vinh.jpg'),
(12, 'Thanh Hóa (THD)', 'thanhhoa.jpg'),
(13, 'Nha Trang (CXR)', 'nhatrang.jpg'),
(14, 'Huế (HUI)', 'hue.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe_ngoi`
--

CREATE TABLE `ghe_ngoi` (
  `id` int(11) NOT NULL,
  `ma_ghe` int(11) NOT NULL,
  `id_ve` int(11) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL COMMENT '0. het slot, 1. con slot'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(2) NOT NULL COMMENT '0. admin, 1.nguoi dung'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `user`, `pass`, `email`, `role`) VALUES
(4, 'admin', '123', 'daovanhai1424@gmail.com', 0),
(5, 'vanhai', '123', 'daovanhai1424@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve_may_bay`
--

CREATE TABLE `ve_may_bay` (
  `id` int(11) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `loai_ve` tinyint(2) NOT NULL COMMENT '1.pho thong, 2.thuong gia',
  `id_chuyen_bay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ve_may_bay`
--

INSERT INTO `ve_may_bay` (`id`, `gia_ve`, `loai_ve`, `id_chuyen_bay`) VALUES
(10, 130000, 1, 7),
(11, 140000, 2, 7),
(13, 10000, 1, 15),
(14, 20000, 2, 15),
(15, 30000, 1, 16),
(16, 40000, 2, 16),
(17, 50000, 1, 17),
(18, 60000, 2, 17),
(19, 70000, 1, 18),
(20, 80000, 2, 18),
(21, 90000, 1, 19),
(22, 100000, 2, 19),
(23, 110000, 1, 20),
(24, 120000, 2, 20);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chuyen_bay_san_bay_di` (`id_diemDi`),
  ADD KEY `fk_chuyen_bay_san_bay_den` (`id_diemDen`);

--
-- Chỉ mục cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dat_ve_ve_may_bay` (`id_ve`),
  ADD KEY `fk_dat_ve_khach_hang` (`id_user`);

--
-- Chỉ mục cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ghe_ngoi`
--
ALTER TABLE `ghe_ngoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ghe_ngoi_ve_may_bay` (`id_ve`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ve_may_bay_chuyen_bay` (`id_chuyen_bay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ghe_ngoi`
--
ALTER TABLE `ghe_ngoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  ADD CONSTRAINT `fk_chuyen_bay_san_bay_den` FOREIGN KEY (`id_diemDen`) REFERENCES `dia_diem` (`id`),
  ADD CONSTRAINT `fk_chuyen_bay_san_bay_di` FOREIGN KEY (`id_diemDi`) REFERENCES `dia_diem` (`id`);

--
-- Các ràng buộc cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  ADD CONSTRAINT `fk_dat_ve_khach_hang` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `fk_dat_ve_ve_may_bay` FOREIGN KEY (`id_ve`) REFERENCES `ve_may_bay` (`id`);

--
-- Các ràng buộc cho bảng `ghe_ngoi`
--
ALTER TABLE `ghe_ngoi`
  ADD CONSTRAINT `fk_ghe_ngoi_ve_may_bay` FOREIGN KEY (`id_ve`) REFERENCES `ve_may_bay` (`id`);

--
-- Các ràng buộc cho bảng `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
  ADD CONSTRAINT `fk_ve_may_bay_chuyen_bay` FOREIGN KEY (`id_chuyen_bay`) REFERENCES `chuyen_bay` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
