-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 06:44 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `175a071520_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_docgia`
--

CREATE TABLE `db_docgia` (
  `madg` int(20) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` date DEFAULT NULL,
  `nghenghiep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_docgia`
--

INSERT INTO `db_docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Cahra Maginn', 'Female', '0000-00-00', 'General Manager', '0000-00-00', '0000-00-00', '88 Lighthouse Bay Plaza'),
(2, 'Marybelle MacAlees', 'Male', '0000-00-00', 'Data Coordiator', '0000-00-00', '0000-00-00', '9 1st Pass'),
(3, 'Sula Drinkwater', 'Female', '0000-00-00', 'Operator', '0000-00-00', '0000-00-00', '32334 Park Meadow Trail'),
(4, 'Matthew Prinne', 'Male', '0000-00-00', 'Programmer II', '0000-00-00', '0000-00-00', '037 High Crossing Trail'),
(5, 'Horten Cronshaw', 'Female', '0000-00-00', 'Nurse Practicioner', '0000-00-00', '0000-00-00', '3982 Dakota Way'),
(6, 'Taryn Wheble', 'Male', '0000-00-00', 'Analyst Programmer', '0000-00-00', '0000-00-00', '613 Village Plaza'),
(7, 'Allan Beevor', 'Female', '0000-00-00', 'Assistant Manager', '0000-00-00', '0000-00-00', '73 Esker Pass'),
(8, 'Kendell Tiley', 'Male', '0000-00-00', 'Health Coach II', '0000-00-00', '0000-00-00', '87 Mosinee Way'),
(9, 'Gretchen Skellon', 'Male', '0000-00-00', 'Media Manager III', '0000-00-00', '0000-00-00', '3 Acker Junction'),
(10, 'Avie Symon', 'Female', '0000-00-00', 'Geologist III', '0000-00-00', '0000-00-00', '968 Corben Place');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_docgia`
--
ALTER TABLE `db_docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_docgia`
--
ALTER TABLE `db_docgia`
  MODIFY `madg` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
