-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 15, 2023 lúc 04:49 AM
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
-- Cơ sở dữ liệu: `moviecinemadatabase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `scheduleID` int(20) NOT NULL,
  `userID` int(20) NOT NULL,
  `soluong` int(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`bookingid`, `scheduleID`, `userID`, `soluong`, `status`) VALUES
(1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookingdetail`
--

CREATE TABLE `bookingdetail` (
  `bookingdetailD` int(20) NOT NULL,
  `bookingID` int(20) NOT NULL,
  `ticketID` int(20) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `img`) VALUES
(1, 'Tình cảm', 'abc'),
(2, 'Kinh Dị', 'abc'),
(3, 'Hài hước', 'abc'),
(4, 'Hành Động', 'abc'),
(5, 'Tâm Linh', 'abc'),
(6, 'Hoạt Hình', 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movierooms`
--

CREATE TABLE `movierooms` (
  `roomID` int(20) NOT NULL,
  `theaterID` int(20) NOT NULL,
  `roomname` varchar(45) NOT NULL,
  `seats` int(10) NOT NULL,
  `VIPseats` int(10) NOT NULL,
  `normalseats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movierooms`
--

INSERT INTO `movierooms` (`roomID`, `theaterID`, `roomname`, `seats`, `VIPseats`, `normalseats`) VALUES
(1, 1, 'Phòng 1', 64, 16, 48),
(2, 1, 'Phòng 2', 64, 16, 48),
(3, 1, 'Phòng 3', 64, 16, 48),
(4, 1, 'Phòng 4', 64, 0, 48),
(5, 1, 'Phòng 5', 64, 0, 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `id` int(12) NOT NULL,
  `moviename` varchar(50) DEFAULT NULL,
  `moviesstars` varchar(50) DEFAULT NULL,
  `director` varchar(50) DEFAULT NULL,
  `moviedates` varchar(50) DEFAULT NULL,
  `storylines` varchar(500) DEFAULT NULL,
  `poster` varchar(500) DEFAULT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`id`, `moviename`, `moviesstars`, `director`, `moviedates`, `storylines`, `poster`, `categoryID`) VALUES
(1, 'Hai Phượng', 'Ngô Thanh Vân', 'Lê Văn Kiệt', '2020', 'Bộ phim là hành trình nghẹt thở và căng thẳng của bà mẹ đơn thân Hai Phượng (Ngô Thanh Vân) khi phải đối đầu với cả 1 đường dây tội phạm bắt cóc và buôn bán nội tạng xuyên quốc gia để cứu đứa con gái bé bỏng Mai (Mai Cát Vi)', 'movie1.jpg', 4),
(2, 'Pháp sư mù', 'Huỳnh Lập', 'Huỳnh Lập', '2020', 'Sẽ tái hiện hành trình đi tìm lại ánh sáng cho đôi mắt của Tinh Lâm (Huỳnh Lập) và những câu chuyện nhân quả đan xen mà Tinh Lâm phải trải qua để thấu hiểu rõ hơn về cuộc đời.', 'movie2.jpg', 5),
(3, 'Bố Gìa', 'Trấn Thành', 'Trấn Thành', '2022', ' Bố già kể xoay quanh một xóm nghèo có bộ tứ nhiều chuyện Giàu - Sang - Phú - Quý, nhưng nhân vật chính là ông Ba Sang (do Trấn Thành thủ vai) và cậu con trai cứng đầu của mình tên là Quắn (do Tuấn Trần thủ vai).', 'mov3.jpg', 3),
(4, 'Lật mặt 6', 'Lý Hải', 'Lý Hải', '2023', 'Tấm Vé Định Mệnh có nội dung tách biệt với 5 phần phim Lật Mặt trước, kể về nhóm bạn gồm 6 người đàn ông vốn chơi thân với nhau từ nhỏ.', 'mov4.jpg', 4),
(5, 'Nắng', 'Thu Trang', 'Đồng Đăng Giao', '2020', 'Bộ phim là câu chuyện vô cùng cảm động kể về hành trình gìn giữ và lan tỏa tình yêu con người cũng như nhân cách sáng ngời của hai mẹ con Nắng (do Kim Thư thủ vai) và Mưa (do Thu Trang thủ vai).', 'mov5.jpg', 3),
(6, 'Mắt biếc', 'Trần Nghĩa, Trúc Anh', 'Victor Vũ', '2019', 'Mắt biếc xoay quanh mối tình đơn phương của Ngạn với Hà Lan, cô bạn gái có cặp mắt hút hồn nhưng cá tính bướng bỉnh.', 'mov6.jpg', 1),
(7, 'Đôi mắt âm dương', 'Thu Trang', 'Nhất Trung', '2018', ' Đôi mắt âm dương là câu chuyện về Trang – một họa sĩ tài năng vừa trải qua vụ tai nạn khiến cô mất trí nhớ và đồng thời phải thay luôn đôi mắt của mình. Tỉnh dậy sau vụ tai nạn bị cướp mất trí nhớ, nhưng bù lại Trang họa sĩ có được đôi mắt có khả năng nhìn thấy người cõi âm.', 'mov7.jpg', 5),
(8, 'Cô Ba Sài Gòn ', 'Ninh Dương Lan Ngọc', 'Kay Nguyễn', '2017', 'Cô Ba Sài Gòn lấy bối cảnh cuối thập niên 60, kể về Như Ý – con gái cưng của nhà may Thanh Nữ nổi tiếng Sài thành, chín đời may áo dài. Là một cô gái tân thời, lại có sẵn mối ác cảm với áo dài nên Như Ý chỉ thích may đồ Tây. Điều này làm mối quan hệ giữa cô và mẹ nảy sinh nhiều bất đồng.', 'mov8.jpg', 3),
(9, 'Tấm cám', 'Huỳnh Lập', 'Ngô Thanh Vân', '2018', 'Phim lấy cảm hứng từ truyện cổ tích Tấm Cám với nội dung xoay quanh những mâu thuẫn trong gia đình, cuộc đấu tranh giữa thiện và ác, cùng ước mơ cái thiện thắng cái ác của người Việt Nam.', 'mov9.jpg', 3),
(10, 'Train to Busan', 'Gong Yoo', 'Yeon Sang-ho', '2018', 'Train To Busan cũng là một trong những tác phẩm của châu Á hiếm hoi lọt top những bộ phim và chương trình truyền hình về đại dịch nổi tiếng nhất theo đánh giá của IMDb.', 'mov10.jpg', 4),
(31, 'Nàng tiên cá', 'Halle Bailey', 'Rob Marshall', '2023', 'Ariel là một nàng tiên cá trẻ xinh đẹp và mạnh mẽ với khát khao phiêu lưu. Là con gái út của vua Triton và cũng là người ngang ngạnh nhất, nàng khao khát khám phá về thế giới bên kia đại dương.', 'mov11.jpg', 1),
(32, 'Yêu nhầm bạn thân', 'Naphat Siangsomboon', 'Chayanop Boonprakob', '2019', 'Ngay từ lúc quen biết nhau khi còn đi học, Palm đã thầm thích cô bạn thân Gink đã từng nhiều lần có ý định thổ lộ nhưng không thể tỏ tình vì muốn giữ tình bạn đẹp đẽ đang có.', 'mov12.jpg', 1),
(33, 'AI Love You', 'Naphat Siangsomboon', 'Leuwisedpaiboon', '2022', 'AI Love You lấy bối cảnh một thế giới tương lai, nơi tất cả các tòa nhà được kết nối với nhau bằng trí tuệ nhân tạo. Bộ phim kể về câu chuyện của Lana (Baifern Pimchanok), một người phụ nữ mơ ước được hẹn hò với một chàng trai tốt bụng và bình thường.', 'mov13.jpg', 1),
(34, 'Love Destiny: The Movie', ' Adisorn Tresirikasem', 'Ranee Campen', '2022', 'Phim có sự tham gia của Ranee Campen và Thanavat Vatthanaputi , người đóng vai Rattanakosin thế kỷ 19-thời đại tái sinh của các nhân vật của họ từ bộ phim truyền hình gốc, lấy bối cảnh ở Vương quốc Ayutthaya vào thế kỷ 17.', 'mov14.jpg', 1),
(35, 'The Nun - Ác Quỷ Ma Sơ', ' Corin Hardy', 'Taissa Farmiga', '2018', ' Trước tình hình này, toà thánh Vatican ở Roma (Ý) đã cử Linh mục Burke và một ma sơ trẻ tên Irene đến đây để điều tra vụ việc.', 'mov15.jpg', 5),
(36, 'Vùng Đất Câm Lặng', ' John Krasinski', 'Emily Blunt', '2019', ' Phim xoay quanh câu chuyện một gia đình nhỏ phải nỗ lực sinh tồn trong bối cảnh trái đất bị xâm chiếm và giết chóc bởi quái vật ngoài hành tinh. Và do những quái vật này đều có thính giác rất nhạy bén nên để sống sót được thì họ buộc lòng phải giữ im lặng mọi lúc mọi nơi…', 'mov16.jpg', 5),
(37, 'The Invisible Man ', 'Leigh Whannell', 'Elisabeth Moss', '2020', ' Nội dung phim xoay quanh câu chuyện Cecilia (Elisabeth Moss) đã tìm cách bỏ trốn khỏi người bạn trai vũ phu của mình. Sau đó, người bạn trai của cô đã tự tử và để lại toàn bộ tài sản cho cô.', 'mov17.jpg', 5),
(38, '  John Wick: Chapter 4', '  Chad Stahelski', '   Keanu Reeves', '  2022', '  Với cái giá phải trả ngày càng tăng, John Wick tham gia cuộc chiến chống lại High Table trên toàn cầu khi tìm kiếm những người chơi quyền lực nhất trong thế giới ngầm, từ New York qua Paris, Osaka đến cả Berlin.', 'mov18.jpg', 4),
(39, 'The Witch 2 ', 'Park Hoon-jung', 'Shin Shi A', '2022', 'Sát thủ nhân tạo 2 là câu chuyện kể về những sát thủ được ra đời từ một thí nghiệm biến đổi gen do hai giáo sư Baek tạo ra. Những thí nghiệm vô nhân đạo này tiếp tục cho đến ngày một nhóm đàn ông đeo mặt nạ tấn công cơ sở thử nghiệm. Họ đã tháo dỡ phòng thí nghiệm, nhưng vẫn lấy mẫu ARK-ADP1.', 'mov19.jpg', 4),
(40, 'Bullet Train ', ' David Leitch', ' Brad Pitt', '2022', 'Bullet Train là bộ phim hài hành động Mỹ tiếp theo của đạo diễn David Leitch từ kịch bản của Zack Orkewitz. Dựa trên tiểu thuyết Nhật Bản Maria Beetle của Kotaro Isaka.', 'mov20.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movietheaters`
--

CREATE TABLE `movietheaters` (
  `theaterID` int(12) NOT NULL,
  `theatername` varchar(245) NOT NULL,
  `places` varchar(245) NOT NULL,
  `rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movietheaters`
--

INSERT INTO `movietheaters` (`theaterID`, `theatername`, `places`, `rooms`) VALUES
(1, 'Ducpublic', 'Tân Bình, HoChiMinh', 2),
(2, 'Galaxy', 'Bình Tâm, Hồ Chí Minh', 2),
(3, 'Cinstar', 'Thủ Đức, HoChiMinh', 2),
(4, 'CGV', 'Q1, HoChiMinh', 2),
(5, 'BHB', 'Q2, HoChiMinh', 2),
(6, 'Nemo', 'Q3, HoChiMinh', 2),
(7, 'Lotte', 'Q4, HoChiMinh', 2),
(8, 'Beta', 'Q5, HoChiMinh', 2),
(9, 'Dcine', 'Q12, HoChiMinh', 2),
(10, 'Atala', 'Q7, HoChiMinh', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

CREATE TABLE `schedule` (
  `scheduleID` int(12) NOT NULL,
  `roomID` int(12) NOT NULL,
  `movieID` int(12) NOT NULL,
  `ngaychieu` date NOT NULL,
  `giochieu` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `schedule`
--

INSERT INTO `schedule` (`scheduleID`, `roomID`, `movieID`, `ngaychieu`, `giochieu`) VALUES
(1, 1, 1, '2023-07-04', '2023-07-04 08:00:00.000000'),
(2, 1, 1, '2023-07-05', '2023-07-05 08:00:00.000000'),
(3, 2, 3, '2023-07-07', '2023-07-07 08:50:00.000000'),
(4, 2, 4, '2023-07-08', '2023-07-08 09:50:00.000000'),
(6, 3, 5, '2023-07-09', '2023-07-09 09:50:00.000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seat`
--

CREATE TABLE `seat` (
  `id` int(12) NOT NULL,
  `name` varchar(12) NOT NULL,
  `type` int(2) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `seat`
--

INSERT INTO `seat` (`id`, `name`, `type`, `status`) VALUES
(1, 'A0', 1, 1),
(2, 'A1', 1, 1),
(3, 'A2', 1, 0),
(4, 'A3', 1, 0),
(5, 'A4', 1, 0),
(6, 'A5', 1, 0),
(7, 'A6', 1, 0),
(8, 'A7', 1, 0),
(9, 'A8', 1, 0),
(10, 'A9', 1, 0),
(11, 'A10', 1, 0),
(12, 'A11', 1, 0),
(13, 'A12', 1, 0),
(14, 'A13', 1, 0),
(15, 'A14', 1, 0),
(16, 'A15', 1, 0),
(17, 'A16', 1, 0),
(18, 'A17', 1, 0),
(19, 'A18', 1, 0),
(20, 'A19', 1, 0),
(21, 'A20', 0, 0),
(22, 'A21', 0, 0),
(23, 'A22', 0, 0),
(24, 'A23', 0, 0),
(25, 'A24', 0, 0),
(26, 'A25', 0, 0),
(27, 'A26', 0, 0),
(28, 'A27', 0, 0),
(29, 'A28', 0, 0),
(30, 'A29', 0, 0),
(31, 'A30', 0, 0),
(32, 'A31', 0, 0),
(33, 'A32', 0, 0),
(34, 'A33', 0, 0),
(35, 'A34', 0, 0),
(36, 'A35', 0, 0),
(37, 'A36', 0, 0),
(38, 'A37', 0, 0),
(39, 'A38', 0, 0),
(40, 'A39', 0, 0),
(41, 'A40', 0, 0),
(42, 'A41', 0, 0),
(43, 'A42', 0, 0),
(44, 'A43', 0, 0),
(45, 'A44', 0, 0),
(46, 'A45', 0, 0),
(47, 'A46', 0, 0),
(48, 'A47', 0, 0),
(49, 'A48', 0, 0),
(50, 'A49', 0, 0),
(51, 'A50', 0, 0),
(52, 'A51', 0, 0),
(53, 'A52', 0, 0),
(54, 'A53', 0, 0),
(55, 'A54', 0, 0),
(56, 'A55', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stars`
--

CREATE TABLE `stars` (
  `movieID` int(45) NOT NULL,
  `moviestars` varchar(245) NOT NULL,
  `roles` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_stars`
--

CREATE TABLE `tbl_stars` (
  `movieID` int(11) NOT NULL,
  `moviestars` varchar(245) NOT NULL,
  `roles` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_stars`
--

INSERT INTO `tbl_stars` (`movieID`, `moviestars`, `roles`) VALUES
(9, 'Ninh Dương Lan Ngọc', 'Diễn viên chính'),
(10, 'Trấn Thành', 'Diễn viên chính'),
(11, 'Ngô Thanh Vân', 'Diễn viên chính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tickets`
--

CREATE TABLE `tickets` (
  `ticketID` int(20) NOT NULL,
  `scheduleID` int(20) NOT NULL,
  `seatID` int(20) NOT NULL,
  `time` datetime(6) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `full_name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`) VALUES
(1, 'Tran Xuan Duc', 'ducboy99@gmail.com', '$2y$10$QyP7sMUMRkK3PdiKLe8wiuXC/jGhIhgSFYJTlwzhn/uWvUD2bG0pm', 'admin'),
(2, ' Le Van Ngoc', ' ngoc@gmail.com', ' $2y$10$n45FMrErE0.AFovrJe0AAuKJGKMHN0Ur92RFlVTgouGWFtw4QVGL2', ' '),
(6, '   Le Van Ngoc', 'lz1@gmail.com', '$2y$10$M7hfFIREYbNdvku8tnFiLe5obU3MeeM3p3m98wHKO0vx9gA3zD35K', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Chỉ mục cho bảng `bookingdetail`
--
ALTER TABLE `bookingdetail`
  ADD PRIMARY KEY (`bookingdetailD`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movierooms`
--
ALTER TABLE `movierooms`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `FK_roomID` (`theaterID`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoryID` (`categoryID`);

--
-- Chỉ mục cho bảng `movietheaters`
--
ALTER TABLE `movietheaters`
  ADD PRIMARY KEY (`theaterID`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleID`),
  ADD KEY `FKroomID` (`roomID`),
  ADD KEY `FK_movieID` (`movieID`);

--
-- Chỉ mục cho bảng `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_stars`
--
ALTER TABLE `tbl_stars`
  ADD PRIMARY KEY (`movieID`);

--
-- Chỉ mục cho bảng `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bookingdetail`
--
ALTER TABLE `bookingdetail`
  MODIFY `bookingdetailD` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `movierooms`
--
ALTER TABLE `movierooms`
  MODIFY `roomID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `movietheaters`
--
ALTER TABLE `movietheaters`
  MODIFY `theaterID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tbl_stars`
--
ALTER TABLE `tbl_stars`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `movierooms`
--
ALTER TABLE `movierooms`
  ADD CONSTRAINT `FK_roomID` FOREIGN KEY (`theaterID`) REFERENCES `movietheaters` (`theaterID`);

--
-- Các ràng buộc cho bảng `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_categoryID` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `FK_movieID` FOREIGN KEY (`movieID`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `FKroomID` FOREIGN KEY (`roomID`) REFERENCES `movierooms` (`roomID`),
  ADD CONSTRAINT `fk_htk_id_phim` FOREIGN KEY (`movieID`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
