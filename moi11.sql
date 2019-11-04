-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2019 lúc 05:31 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `moi1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `moi1`
--

CREATE TABLE `moi1` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `moi1`
--

INSERT INTO `moi1` (`id`, `username`, `password`, `name`, `phone`, `email`) VALUES
('', '', '', 'n5', '01244', 'sdf@gmail.com'),
('1', 'sy', 'sin', 'sy1', '01235', 'dinh@gmail.com'),
('10', 'sy', 'sin', 'asdf', 'asdf', 'asdf'),
('13', 'sy', 'sin', '124', '355', '54'),
('14', 'sy', 'sin', 'aaa', 'ddd', 'fff'),
('15', 'sy', 'sin', 'adf', 'fgfg', 'hh'),
('18', 'sy', 'sin', '1234', '3467', '32434'),
('19', 'sy', 'sin', 'ad', 'fd', 'ds'),
('2', 'sy', 'sin', 'sy2', '0123', 'sy@gmail.com'),
('3', 'syne', 'sin', 'sy3', '01234', 'nguyen@gmail.com'),
('4', 'syne', 'sin', 'ten', '0123', 'son@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `moi1`
--
ALTER TABLE `moi1`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
