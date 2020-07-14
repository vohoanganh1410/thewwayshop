-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 09:40 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thewayshop_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Tên danh mục',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo danh mục',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Đồ Nam', 1, '2020-01-06 14:40:05', NULL),
(5, 'Đồ Nữ', 1, '2020-01-11 15:55:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Tên khách hàng',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `note` text DEFAULT NULL COMMENT 'Ghi chú từ khách hàng',
  `cmt` text DEFAULT NULL COMMENT 'nội dung cmt',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo đơn',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `note`, `cmt`, `created_at`, `updated_at`) VALUES
(1, 'anh', 'vohoanganh1410@gmail.com', 'âf', 'fasfsf', '2020-01-11 07:16:50', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Tên khách hàng',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ khách hàng',
  `mobile` int(11) DEFAULT NULL COMMENT 'SĐT khách hàng',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `size` varchar(255) DEFAULT NULL COMMENT 'size sản phẩm',
  `note` text DEFAULT NULL COMMENT 'Ghi chú từ khách hàng',
  `price_total` int(11) DEFAULT NULL COMMENT 'Tổng giá trị đơn hàng',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo đơn',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà sản phẩm thuộc về, là khóa ngoại liên kết với bảng categories',
  `news_id` int(11) DEFAULT NULL COMMENT 'Id của tin tức mà gắn với sản phẩm, là khóa ngoại liên kết với bảng news',
  `title` varchar(255) NOT NULL COMMENT 'Tên sản phẩm',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh sản phẩm',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho sản phẩm',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `news_id`, `title`, `avatar`, `price`, `summary`, `content`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, NULL, 'Áo khoác nam HKT001', '1578539044b5cc8f65ed518c3d6cea20cdfddeba23.jpg', 800000, '                                                                                                                                            Áo khoác nam xịn, ngoài vải dù ấm áp, cản gió hiệu quả, bên trong có lớp cách nhiệt chống lạnh chống nóng tốt      ', '<p>Form &aacute;o kho&aacute;c su&ocirc;ng unisex đơn giản, logo Goking, th&iacute;ch hợp cho cả nam v&agrave; nữ. &Aacute;o c&oacute; 2 lớp, ph&iacute;a ngo&agrave;i vải d&ugrave; cao cấp ấm &aacute;p, cản gi&oacute; hiệu quả. B&ecirc;n trong l&oacute;t vải c&agrave;o c&aacute;ch nhiệt, chống lạnh chống n&oacute;ng tốt. Hai t&uacute;i b&ecirc;n c&oacute; kh&oacute;a k&eacute;o gi&uacute;p bỏ ch&igrave;a kh&oacute;a, tiền, vật dụng c&aacute; nh&acirc;n an to&agrave;n. B&ecirc;n trong cũng c&oacute; 1 t&uacute;i tiện lợi.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, '2020-01-08 15:07:42', '2020-01-12 14:27:24'),
(6, 2, NULL, 'Váy hoạ tiết nữ', '1578496163img-pro-02.jpg', 600000, 'Váy đầm dạo phố nữ tính đệu đà chất đũi xịn siêu mát', '<p>- Chất liệu cao cấp, đường may tỉ mỉ</p>\r\n\r\n<p>- Thiết kế trẻ trung ph&ugrave; hợp với nhiều lứa tuổi</p>\r\n\r\n<p>- Form rộng tạo cảm gi&aacute;c thoải m&aacute;i khi mặc</p>\r\n\r\n<p>- Chất vải mềm mại v&agrave; thấm h&uacute;t mồ h&ocirc;i tốt</p>\r\n', 1, '2020-01-08 15:09:23', NULL),
(7, 3, NULL, 'Túi xách ', '1578496415img-pro-03.jpg', 450000, 'Túi Thể Thao Du Lịch Xách Tay', '<p>- Chất liệu: Canvas</p>\r\n\r\n<p>- Kết cấu l&oacute;t: cotton polyester</p>\r\n\r\n<p>- K&iacute;ch thước t&uacute;i: lớn</p>\r\n\r\n<p>- H&igrave;nh dạng t&uacute;i: tiết diện vu&ocirc;ng</p>\r\n\r\n<p>- Dung t&iacute;ch: 20-35L</p>\r\n\r\n<p>- Cấu tr&uacute;c b&ecirc;n trong: t&uacute;i ID, t&uacute;i điện thoại di động, t&uacute;i kh&oacute;a k&eacute;o, t&uacute;i m&aacute;y ảnh, t&uacute;i đựng laptop, t&uacute;i lưu trữ du lịch</p>\r\n\r\n<p>- Phương ph&aacute;p mở: kh&oacute;a k&eacute;o</p>\r\n\r\n<p>- Số d&acirc;y đeo vai: 1</p>\r\n\r\n<p>- Bộ phận n&acirc;ng: tay cầm mềm</p>\r\n\r\n<p>- Loại phụ kiện: Tay cầm</p>\r\n\r\n<p>- Chức năng: chống m&agrave;i m&ograve;n, chống thấm nước, lưu trữ</p>\r\n\r\n<p>- Th&iacute;ch hợp sử dụng: ngo&agrave;i trời, du lịch,</p>\r\n\r\n<p>- Giới t&iacute;nh &aacute;p dụng: unisex</p>\r\n\r\n<p>- Loại t&uacute;i b&ecirc;n ngo&agrave;i: t&uacute;i v&aacute; b&ecirc;n ngo&agrave;i</p>\r\n\r\n<p>- M&agrave;u sắc: xanh đậm, đen, n&acirc;u, xanh qu&acirc;n đội, x&aacute;m</p>\r\n\r\n<p>-&nbsp; K&iacute;ch thước: d&agrave;i 47cm chiều rộng 18cm cao 33cm</p>\r\n', 1, '2020-01-08 15:13:35', NULL),
(8, 4, NULL, 'Đồ hồ Thuỵ Sỹ', '1578496496img-pro-04.jpg', 1200000, 'Đồng hồ cơ nam KINYUED phong cách thuỵ sỹ cho doanh nhân', '<p>H&agrave;ng ch&iacute;nh h&atilde;ng, FULL BOX</p>\r\n\r\n<p>- Chống nước 3ATM, chống va đập</p>\r\n\r\n<p>- Đường k&iacute;nh 42 MM</p>\r\n\r\n<p>- D&acirc;y th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>- Thiết kế đơn giản, sang trọng</p>\r\n\r\n<p>- Phong c&aacute;ch chuẩn doanh nh&acirc;n</p>\r\n\r\n<p>- Hộp đựng sang trọng, cao cấp, c&oacute; khăn lau k&iacute;nh v&agrave; s&aacute;ch HDSD</p>\r\n', 1, '2020-01-08 15:14:56', NULL),
(10, 2, NULL, 'Váy nữ xinh xắn', '15785379501562137182.jpg', 630000, '                    Váy nữ thời trang 2020                ', '<p>- Thiết kế đơn giản, trẻ trung, xinh xắn</p>\r\n\r\n<p>- Form d&aacute;ng chuẩn, đường may chắc chắn</p>\r\n\r\n<p>- Kiểu d&aacute;ng mới lạ, hợp thời trang</p>\r\n', 1, '2020-01-09 02:45:50', '2020-01-09 09:46:11'),
(11, 1, NULL, 'Áo khoác cách nhiệt GOKING', '1578538945385350634cc2ddf6db80d8a6be107918.jpg', 600000, '                                                            Áo khoác nam cách nhiệt GOKING, ngoài vải dù ấm áp, cản gió hiệu quả, bên trong có lớp cách nhiệt chống lạnh chống nóng tốt                                                ', '<p>Thương hiệu thời trang uy t&iacute;n: GOKING. Thiết kế bởi Ms Haruko Nhật Bản.Form &aacute;o kho&aacute;c su&ocirc;ng unisex đơn giản, logo Goking, th&iacute;ch hợp cho cả nam v&agrave; nữ. &Aacute;o c&oacute; 2 lớp, ph&iacute;a ngo&agrave;i vải d&ugrave; cao cấp ấm &aacute;p, cản gi&oacute; hiệu quả. B&ecirc;n trong l&oacute;t vải c&agrave;o c&aacute;ch nhiệt, chống lạnh chống n&oacute;ng tốt. Hai t&uacute;i b&ecirc;n c&oacute; kh&oacute;a k&eacute;o gi&uacute;p bỏ ch&igrave;a kh&oacute;a, tiền, vật dụng c&aacute; nh&acirc;n an to&agrave;n. B&ecirc;n trong cũng c&oacute; 1 t&uacute;i tiện lợi. C&ocirc;ng nghệ c&aacute;ch nhiệt hiện đại từ Nhật Bản.</p>\r\n', 1, '2020-01-09 03:02:25', '2020-04-08 20:13:07'),
(12, 1, NULL, 'Áo khoác jean Nam', '157853915350c5a07400e4fd3938f11436f69af393.jpg', 420000, '                    Áo khoác jean Nam phối nỉ sang trọng và mạnh mẽ cuốn hút TRA209A                ', '<p>Chất liệu vải jean tốt kh&ocirc;ng nh&agrave;u v&agrave; phai m&agrave;u.&nbsp; M&agrave;u sắc v&agrave; phối m&agrave;u tinh tế cho bạn sự đẳng cấp. &Aacute;o được thợ l&agrave;nh nghề bậc cao tận t&acirc;m l&agrave;m n&ecirc;n.Đường chỉ may tinh tế v&agrave; kỹ lưỡng. C&oacute; thể phối với nhiều trang phục kh&aacute;c nhau: sơ mi, jean, thun....Mặc diện đi: chơi, cafe với bạn, họp h&agrave;nh, du lịch, chụp ảnh, cưới hỏi.Chiếc &aacute;o kho&aacute;c Jean n&agrave;y sẽ l&agrave;m cho anh chị thật sự nổi bật giữa đ&aacute;m đ&ocirc;ngH&atilde;y chọn ngay mẫu &aacute;o n&agrave;y v&agrave;o bộ sưu tập của m&igrave;nh nh&eacute;.</p>\r\n', 1, '2020-01-09 03:05:53', '2020-01-11 21:13:46'),
(13, 1, NULL, 'Áo sơ mi nam KOJIBA đen', '15785392783746bb8b379e2a0da07a0fbe3aea0450.jpg', 450000, '                                        Áo Sơ Mi Nam KOJIBA Dài Tay Công Sở, Kiểu Dáng Trẻ Trung, Hiện Đại (Nhiều Màu)                                ', '<p>Chất liệu 80% Cotton, 20% Polyester. Form &aacute;o sơ mi Regular Fit, d&aacute;ng &ocirc;m. Thiết kế cổ bẻ, &aacute;o sơ mi d&agrave;i tay. Made in Vietnam.</p>\r\n', 1, '2020-01-09 03:07:58', '2020-01-11 20:55:32'),
(14, 1, NULL, 'Áo sơ mi nam KOJIBA trắng', '1578539405006975326309abcbfa784075a6ce9268.jpg', 450000, '                    Áo sơ mi nam tay dài vải lụa cao cấp KHÔNG NHĂN SM1                ', '<p>Chất liệu cao cấp, kh&ocirc;ng nhăn, kh&ocirc;ng x&ugrave;, kh&ocirc;ng phai m&agrave;u. Form body H&agrave;n Quốc, dễ kết hợp với c&aacute;c loại quần. Th&iacute;ch hợp mặc trong nhiều m&ocirc;i trường kh&aacute;c nhau như c&ocirc;ng sở, tiệc, event, du lịch... Đường may tinh tế, chất vải cao cấp, sản phẩm t&ocirc;n d&aacute;ng, dễ mặc.</p>\r\n', 1, '2020-01-09 03:10:05', '2020-01-11 20:55:46'),
(15, 1, NULL, 'Áo sơ mi nam họa tiết', '15785395095d08bc1d78efbe6708cdf7bdcd6042b6.jpg', 360000, 'Áo sơ mi đẹp', '<p>Thiết kế cổ bẻ, tay d&agrave;i, c&oacute; n&uacute;t g&agrave;i ph&iacute;a trước chắc chắn, đường may tỉ mỉ. &Aacute;o thiết kế form vừa vặn gi&uacute;p t&ocirc;n được đường n&eacute;t mạnh mẽ, nam t&iacute;nh của c&aacute;c ch&agrave;ng trai. M&agrave;u sắc tinh tế phối với họa tiết nổi bật, mang đến sự thanh lịch, cuốn h&uacute;t. Xuất xứ: Việt Nam.&nbsp; Chất liệu: Kate lụa</p>\r\n', 1, '2020-01-09 03:11:49', NULL),
(16, 1, NULL, 'Quần Jean Nam Cao Cấp ', '157853969826befb736146ca01e6e318618f2e3e39.jpg', 630000, 'Quần Jean Nam Cao Cấp Co Giản Mạnh 5679', '<p>quần c&oacute; m&agrave;u xanh bạc form chuẩn đẹp kiểu d&aacute;ng y h&igrave;nh. Chi Tiết wash r&aacute;ch c&aacute; t&iacute;nh trẻ trung. Đặc biệt độ co giản mạnh n&ecirc;n kh&aacute;ch sẽ rất thoải m&aacute;i khi mặc ạh.</p>\r\n', 1, '2020-01-09 03:14:58', NULL),
(17, 1, NULL, 'Quần Jean Nam Xanh Đậm S20', '15785399253c31c9beedf3ff0535995f36132236e1.jpg', 690000, 'Quần Jean Nam Xanh Đậm S20', '<p>Quần Jean được l&agrave;m từ chất vải jean mềm mịn, kh&ocirc;ng bai gi&atilde;o, co gi&atilde;n nhẹ v&agrave; rất &iacute;t bị nhăn khi gập. Quần Jean c&oacute; phom d&aacute;ng &ocirc;m cơ thể, ống c&ocirc;n b&oacute; vừa phải, nhẹ nh&agrave;ng t&ocirc;n d&aacute;ng người mặc. Đường may của Quần Jean rất chắc chắn c&ugrave;ng với chất liệu vải jean co gi&atilde;n thoải m&aacute;i cho người sử dụng c&oacute; thể vận động. T&uacute;i quần s&acirc;u thoải m&aacute;i cho người sử dụng c&oacute; thể để đồ đạc như điện thoại, ch&igrave;a kh&oacute;a, v&iacute;, ...</p>\r\n', 1, '2020-01-09 03:18:45', NULL),
(18, 1, NULL, 'Quần Jean Nam TS351', '157853998519efd179d5145dc036d103fe2c10cffe.jpg', 470000, '                                                            Quần Jean Nam TS351 cực ngầu                                                ', '<p>Quần Jeans Nam TS. Vải jean cao cấp, co gi&atilde;n nhẹ. H&agrave;ng Được sản xuất tại xưởng l&agrave;nh nghề đường may chắt chắn, m&agrave;u jean bền m&agrave;u.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>.</p>\r\n', 1, '2020-01-09 03:19:45', '2020-01-09 10:22:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
