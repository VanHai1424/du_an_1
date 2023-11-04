-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 12:36 PM
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
-- Cấu trúc bảng cho bảng `cho_ngoi`
--

CREATE TABLE `cho_ngoi` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ma_chuyen_bay` int(11) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0. het, 1. con'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cho_ngoi`
--

INSERT INTO `cho_ngoi` (`id`, `ma_khach_hang`, `ma_chuyen_bay`, `trang_thai`) VALUES
(1, 101, 201, 1),
(2, 102, 202, 0),
(3, 103, 203, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen_bay`
--

CREATE TABLE `chuyen_bay` (
  `id` int(11) NOT NULL,
  `id_diem_di` int(11) NOT NULL,
  `id_diem_den` int(11) NOT NULL,
  `ngay_khoi_hanh` date NOT NULL,
  `thoi_gian_di` datetime NOT NULL,
  `thoi_gian_den` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyen_bay`
--

INSERT INTO `chuyen_bay` (`id`, `id_diem_di`, `id_diem_den`, `ngay_khoi_hanh`, `thoi_gian_di`, `thoi_gian_den`) VALUES
(201, 301, 302, '2023-11-10', '2023-11-10 08:00:00', '2023-11-10 10:00:00'),
(202, 302, 303, '2023-11-11', '2023-11-11 09:00:00', '2023-11-11 11:00:00'),
(203, 303, 301, '2023-11-12', '2023-11-12 10:00:00', '2023-11-12 12:00:00');

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
(301, 'Điểm đi 1', 'dia_diem1.jpg'),
(302, 'Điểm đi 2', 'dia_diem2.jpg'),
(303, 'Điểm đi 3', 'dia_diem3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `role` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1. user, 0. admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(101, 'user1', 'pass1', 'user1@email.com', 'Địa chỉ 1', '1234567890', 1),
(102, 'user2', 'pass2', 'user2@email.com', 'Địa chỉ 2', '1234567891', 1),
(103, 'user3', 'pass3', 'user3@email.com', 'Địa chỉ 3', '1234567892', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve_may_bay`
--

CREATE TABLE `ve_may_bay` (
  `id` int(11) NOT NULL,
  `ten_may_bay` varchar(255) NOT NULL,
  `ma_chuyen_bay` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `gia_ve` int(10) NOT NULL,
  `loai_ve` tinyint(2) NOT NULL COMMENT '1. ve thuong, 2. ve hang thuong gia\r\n',
  `cho_ngoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ve_may_bay`
--

INSERT INTO `ve_may_bay` (`id`, `ten_may_bay`, `ma_chuyen_bay`, `ma_khach_hang`, `gia_ve`, `loai_ve`, `cho_ngoi`) VALUES
(1, '', 201, 101, 500000, 1, 1),
(2, '', 202, 102, 600000, 2, 2),
(3, '', 203, 103, 550000, 1, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cho_ngoi`
--
ALTER TABLE `cho_ngoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_chuyen_bay` (`ma_chuyen_bay`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_diem_di` (`id_diem_di`),
  ADD KEY `id_diem_den` (`id_diem_den`);

--
-- Chỉ mục cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_chuyen_bay` (`ma_chuyen_bay`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cho_ngoi`
--
ALTER TABLE `cho_ngoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cho_ngoi`
--
ALTER TABLE `cho_ngoi`
  ADD CONSTRAINT `cho_ngoi_ibfk_1` FOREIGN KEY (`ma_chuyen_bay`) REFERENCES `chuyen_bay` (`id`),
  ADD CONSTRAINT `cho_ngoi_ibfk_2` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `cho_ngoi_ibfk_3` FOREIGN KEY (`ma_chuyen_bay`) REFERENCES `chuyen_bay` (`id`),
  ADD CONSTRAINT `cho_ngoi_ibfk_4` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  ADD CONSTRAINT `chuyen_bay_ibfk_1` FOREIGN KEY (`id_diem_di`) REFERENCES `dia_diem` (`id`),
  ADD CONSTRAINT `chuyen_bay_ibfk_2` FOREIGN KEY (`id_diem_den`) REFERENCES `dia_diem` (`id`);

--
-- Các ràng buộc cho bảng `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
  ADD CONSTRAINT `ve_may_bay_ibfk_1` FOREIGN KEY (`ma_chuyen_bay`) REFERENCES `chuyen_bay` (`id`),
  ADD CONSTRAINT `ve_may_bay_ibfk_2` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
