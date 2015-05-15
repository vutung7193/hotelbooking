-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 08:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myapp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaidau`
--

CREATE TABLE IF NOT EXISTS `giaidau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `giaidau`
--

INSERT INTO `giaidau` (`id`, `ten`) VALUES
(1, 'Champion League'),
(2, 'FIFA Cup');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titles` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `idgiaidau` int(11) DEFAULT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  PRIMARY KEY (`id`),
  KEY `idgiaidau` (`idgiaidau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titles`, `url`, `logo`, `idgiaidau`, `noidung`) VALUES
(1, ' Lộ diện vũ khí của Indonesia', 'http://bongdaso.com/AFF-CUP-2011-L%E1%BB%99-di%E1%BB%87n-v%C5%A9-kh%C3%AD-c%E1%BB%A7a-Indonesia-_Art_143692.aspx', '/upload/2014-11-20/news1.jpg', 1, '<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="style6" align="left" valign="top">\r\n<div class="art_content">\r\n<p align="justify"><span style="font-family: arial; font-size: small;"><strong>Lộ diện vũ kh&iacute; của Indonesia.</strong>&nbsp;H&ocirc;m qua (19/11), trong buổi tập đầu ti&ecirc;n ở H&agrave; Nội, ĐT Indonesia đ&atilde; sử dụng nhiều b&agrave;i tập được cho l&agrave; sẽ sử dụng trong trận khai m&agrave;n AFF Cup với ĐT Việt Nam. Trong đ&oacute;, đ&aacute;ng ch&uacute; &yacute; nhất l&agrave; c&aacute;c miếng đ&aacute;nh bi&ecirc;n tập trung v&agrave;o 3 tiền đạo Gonzales - Boas Solossa - Sergio van Dijk. Ngăn cản tấn c&ocirc;ng bi&ecirc;n cũng l&agrave; điểm yếu m&agrave; ĐT Việt Nam chưa thể khắc phục dưới triều đại HLV Miura.</span></p>\r\n<p align="center"><span style="font-family: arial;"><br /></span></p>\r\n<p align="center"><span style="font-family: arial;"><br /></span></p>\r\n<p align="center"><span style="font-family: arial;"><img src="http://bongdaso.com/images/Article/Upload/141120_092031_39.jpg" alt="" width="500" align="baseline" border="0" hspace="0" />&nbsp;</span></p>\r\n<p align="center"><span style="font-family: arial;"><br /></span></p>\r\n<p align="justify"><span style="font-family: arial; font-size: small;"><strong>Philippines đặt mục ti&ecirc;u v&agrave;o CK</strong>. Ngay sau khi đặt ch&acirc;n tới H&agrave; Nội chuẩn bị cho AFF Cup 2014, tiền đạo trụ cột của Philippines,&nbsp; Phil Younghusband đ&atilde; đặt mục ti&ecirc;u v&agrave;o chung kết. Ở 2 k&igrave; AFF Cup gần nhất (2010 v&agrave; 2012), Philippines đều c&oacute; mặt ở v&ograve;ng b&aacute;n kết.</span></p>\r\n<p align="justify"><span style="font-family: arial; font-size: small;"><strong>Riedl ca ngợi sao trẻ U19.</strong>&nbsp;Trước thềm trận khai mạc AFF Cup 2014, HLV Alfred Riedl cho rằng t&agrave;i năng trẻ U19 m&agrave; &ocirc;ng mới triệu tập, Evan Dimas c&oacute; khả năng tạo bất ngờ ở giải đấu năm nay.</span></p>\r\n<p align="justify"><span style="font-family: arial; font-size: small;">&ldquo;T&ocirc;i đ&atilde; xem cậu ta thi đấu ở Giải U-22 Đ&ocirc;ng Nam &Aacute; Cup Hassanal Bokiah 2014, tổ chức ở Brunei v&agrave; sau đ&oacute; l&agrave; VCK Giải U-19 ch&acirc;u &Aacute; diễn ra tại Myanmar. Evan Dimas l&agrave; một cầu thủ xuất sắc v&agrave; cậu ấy xứng đ&aacute;ng g&oacute;p mặt trong th&agrave;nh phần tuyển Indonesia dự AFF Suzuki Cup 2014. T&ocirc;i tin rằng, cậu ấy sẽ thể hiện khả năng của m&igrave;nh ở giải đấu lớn đầu ti&ecirc;n được tham dự&rdquo;.</span></p>\r\n<p align="justify"><span style="font-family: arial; font-size: small;"><strong>C&ocirc;ng Vinh chấp nhận bị loại.</strong>&nbsp;Chia sẻ trước b&aacute;o giới, tiền đạo C&ocirc;ng Vinh cho rằng nếu anh bị loại khỏi danh s&aacute;ch dự AFF Cup cũng l&agrave; điều rất b&igrave;nh thường. Hiện tại, ch&acirc;n s&uacute;t xứ Nghệ đang chịu sức &eacute;p kh&aacute; lớn v&igrave; phong độ mờ nhạt.</span></p>\r\n<p align="center"><span style="font-family: arial;"><img src="http://bongdaso.com/images/Article/Upload/141120_092259_368.jpg" alt="" width="500" align="baseline" border="0" hspace="0" />&nbsp;</span></p>\r\n<p align="justify"><span style="font-family: arial; font-size: small;">&ldquo;Vinh nghĩ rằng, nếu Vinh bị loại th&igrave; cũng l&agrave; điều hết sức b&igrave;nh thường. Mỗi HLV đều c&oacute; triết l&yacute; b&oacute;ng đ&aacute; ri&ecirc;ng v&agrave; họ sẽ lựa chọn những con người ph&ugrave; hợp nhất với lối chơi đ&oacute;. Thế n&ecirc;n, việc chọn ai, loại ai l&agrave; điều rất b&igrave;nh thường trong b&oacute;ng đ&aacute;&rdquo;</span></p>\r\n<p align="justify"><span style="font-family: arial; font-size: small;"><strong>B&aacute;o Indonesia đ&aacute;nh gi&aacute; cao 3 cầu thủ Việt Nam.</strong>&nbsp;N&oacute;i về sức mạnh của ĐT Việt Nam tại AFF Cup 2014, tờ Goal phi&ecirc;n bản Indonesia đ&atilde; đề cập tới 3 cầu thủ l&agrave; Nguyễn Anh Đức, Nguyễn Văn Quyết v&agrave; Ng&ocirc; Ho&agrave;ng Thịnh. Cả 3 gần như chắc suất c&oacute; mặt trong danh s&aacute;ch tham dự AFF Cup.</span></p>\r\n<div class="art_center_banner"><iframe src="http://bongdaso.com/_BannerSlot.aspx?PCat=*%2cNewsPage%2cArticle.aspx&amp;Pos=ARTCENTER&amp;rnd=496773&amp;TopMenu=-1&amp;Lang=VN" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="640" height="100"></iframe></div>\r\n</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="middle">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(5, ' Đội hình “vàng” của ĐT Việt Nam qua các kì AFF Cup', 'http://bongdaso.com/%C4%90%E1%BB%99i-h%C3%ACnh-v%C3%A0ng-c%E1%BB%A7a-%C4%90T-Vi%E1%BB%87t-Nam-qua-c%C3%A1c-k%C3%AC-AFF-Cup-_Art_143707.aspx', '/upload/2014-11-20/141120_123515_748.jpg', 1, '<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div class="art_brief">\r\n<h5>Qua 9 k&igrave; AFF Cup v&agrave; Tiger Cup, đội tuyển Việt Nam đ&atilde; trải qua nhiều thế hệ với nhiều th&agrave;nh c&ocirc;ng v&agrave; thất bại. Phải chăng đ&acirc;y l&agrave; đội h&igrave;nh mạnh nhất của đo&agrave;n qu&acirc;n &aacute;o đỏ trong lịch sử giải đấu n&agrave;y!?</h5>\r\n</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="style6" align="left" valign="top">\r\n<div class="art_content">\r\n<p><img src="http://bongdaso.com/images/Article/Upload/141120_123515_748.png" alt="" width="500" align="none" /></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong><span style="text-decoration: underline;">Thủ m&ocirc;n</span></strong></span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Dương Hồng Sơn:</strong>&nbsp;Sau th&agrave;nh c&ocirc;ng ở Asia Cup 2007, Hồng Sơn tiếp tục g&acirc;y ấn tượng mạnh ở AFF Cup 2008, gi&uacute;p ĐT Việt Nam l&ecirc;n ng&ocirc;i v&ocirc; địch. Đặc biệt, anh đ&atilde; được b&igrave;nh chọn l&agrave; Cầu thủ xuất sắc nhất giải v&agrave; Quả b&oacute;ng V&agrave;ng Việt Nam năm 2008.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong><span style="text-decoration: underline;">Hậu vệ</span></strong></span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Trần C&ocirc;ng Minh:</strong>&nbsp;B&oacute;ng đ&aacute; Việt Nam đ&atilde; sản sinh ra nhiều hậu vệ t&agrave;i năng nhưng C&ocirc;ng Minh vẫn l&agrave; cầu thủ nổi bật nhất. Hậu vệ người Đồng Th&aacute;p đ&atilde; tham dự 3 k&igrave; Tiger Cup (96, 98 v&agrave; 2000). Ngo&agrave;i tinh thần th&eacute;p của 1 hậu vệ, C&ocirc;ng Minh c&ograve;n l&agrave; mũi c&ocirc;ng hiệu quả. Anh ghi được 2 b&agrave;n thắng ở Tiger Cup 96 v&agrave; c&oacute; 2 đường kiến tạo th&agrave;nh b&agrave;n ở Tiger Cup 1998. Tiếc rằng C&ocirc;ng Minh v&agrave; thế hệ của anh chưa một lần gi&agrave;nh chức v&ocirc; địch.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Vũ Như Th&agrave;nh:&nbsp;</strong>Nhắc tới chức v&ocirc; địch AFF Cup 2008 của ĐT Việt Nam, sẽ l&agrave; thiếu s&oacute;t nếu bỏ qua c&aacute;i t&ecirc;n Vũ Như Th&agrave;nh. Anh đ&atilde; tham dự tất cả c&aacute;c trận đấu của đội tuyển ở giải đấu năm đ&oacute; v&agrave; trở th&agrave;nh chốt chặn vững chắc ở h&agrave;ng ph&ograve;ng ngự. Cũng sau th&agrave;nh c&ocirc;ng ở AFF Cup 2008, Như Th&agrave;nh đ&atilde; trở th&agrave;nh cầu thủ Việt Nam duy nhất c&oacute; t&ecirc;n trong danh s&aacute;ch b&igrave;nh chọn Quả b&oacute;ng V&agrave;ng ch&acirc;u &Aacute; của tạp ch&iacute; Super (UAE).</span></p>\r\n<p><img src="http://bongdaso.com/images/Article/Upload/141120_123618_888.jpg" alt="" width="500" align="none" /></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Đỗ Văn Khải:&nbsp;</strong>Giống như bậc tiền bối Phạm Huỳnh Tam Lang trước kia, Đỗ Khải l&agrave; một libero xuất sắc của b&oacute;ng đ&aacute; S&agrave;i Th&agrave;nh n&oacute;i ri&ecirc;ng v&agrave; Việt Nam n&oacute;i chung. Anh đ&atilde; tham dự 3 k&igrave; AFF Cup c&ugrave;ng ĐT Việt Nam. Điểm mạnh của Đỗ Khải ch&iacute;nh l&agrave; sự điềm tĩnh đến lạ l&ugrave;ng trong thi đấu. Tiếc rằng trung vệ n&agrave;y đ&atilde; phải chia tay sự nghiệp ở tuổi 28 v&igrave; chấn thương.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Nguyễn Đức Thắng:</strong>&nbsp;Hậu vệ tr&aacute;i vốn l&agrave; điểm yếu của ĐT Việt Nam kể từ khi hội nhập khu vực. Bởi vậy, Nguyễn Đức Thắng vẫn l&agrave; c&aacute;i t&ecirc;n để lại nhiều ấn tượng nhất. Anh đ&atilde; từng tham dự 3 k&igrave; AFF Cup (1998, 2000 v&agrave; 2002) v&agrave; lu&ocirc;n l&agrave; sự lựa chọn số 1 của ĐT Việt Nam ở vị tr&iacute; hậu vệ tr&aacute;i trong giai đoạn n&agrave;y. Tiếc l&agrave; ca chấn thương qu&aacute; nặng trước thềm Tiger Cup 2004 đ&atilde; khiến hậu vệ của Thể C&ocirc;ng phải gi&atilde; từ sự nghiệp s&acirc;n cỏ ở tuổi 29.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong><span style="text-decoration: underline;">Tiền vệ</span></strong></span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Nguyễn Vũ Phong:</strong>&nbsp;Với nền tảng thể lực, tốc độ, kỹ thuật cao v&agrave; khả năng s&uacute;t phạt rất tốt, Vũ Phong được đ&aacute;nh gi&aacute; l&agrave; 1 trong những tiền vệ chạy c&aacute;nh hay nhất của ĐT Việt Nam. AFF Cup 2008 ch&iacute;nh l&agrave; giải đấu hay nhất của ch&agrave;ng tiền vệ qu&ecirc; Vĩnh Long. Ở trận gặp Malaysia, Vũ Phong sắm vai người h&ugrave;ng khi ghi 2 b&agrave;n thắng gi&uacute;p ĐT Việt Nam thắng 3-2. C&ograve;n ở trận chung kết, tiền vệ n&agrave;y ch&iacute;nh l&agrave; người mở tỉ số v&agrave;o lưới Th&aacute;i Lan tại Bangkok.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Nguyễn Hồng Sơn:</strong>&nbsp;Cho tới nay, Hồng Sơn vẫn l&agrave; c&aacute;i t&ecirc;n chiếm được cảm t&igrave;nh lớn nhất từ NHM b&oacute;ng đ&aacute; nước nh&agrave;. Với kĩ thuật c&aacute; nh&acirc;n đi&ecirc;u luyện, tiền vệ t&agrave;i hoa của Thể C&ocirc;ng đ&atilde; c&oacute; m&agrave;n tr&igrave;nh diễn ấn tượng ở Tiger Cup 1996 v&agrave; 1998. Đặc biệt, sau khi gi&uacute;p ĐT Việt Nam gi&agrave;nh ng&ocirc;i &Aacute; qu&acirc;n Tiger Cup 1998, Hồng Sơn đ&atilde; nhận giải &ldquo;Cầu thủ xuất sắc nhất th&aacute;ng 8/1998&rdquo; của ch&acirc;u &Aacute;. Năm 2001 Trước khi rời Việt Nam, HLV Dido để lại c&acirc;u n&oacute;i bất hủ về tiền vệ của Thể C&ocirc;ng: "Nếu Hồng Sơn được sinh ra ở Brazil, cậu ấy đủ khả năng trở th&agrave;nh huyền thoại của b&oacute;ng đ&aacute; thế giới".</span></p>\r\n<p><img src="http://bongdaso.com/images/Article/Upload/141120_123807_601.jpg" alt="" width="500" align="none" /></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- Nguyễn Minh Phương:</strong>&nbsp;Sau Hồng Sơn, Minh Phương ch&iacute;nh l&agrave; tiền vệ t&agrave;i hoa bậc nhất của b&oacute;ng đ&aacute; Việt Nam với phong th&aacute;i của một thủ lĩnh, những đường chuyền xuất sắc v&agrave; nh&atilde;n quan chiến thuật tốt. Ngo&agrave;i ra anh cũng c&oacute; kỹ năng đ&aacute; phạt kh&aacute; ho&agrave;n hảo. Ở trận CK AFF Cup 2008, Minh Phương ch&iacute;nh l&agrave; người s&uacute;t phạt gi&uacute;p C&ocirc;ng Vinh đ&aacute;nh đầu ghi b&agrave;n thắng quyết định đưa ĐT Việt Nam l&ecirc;n ng&ocirc;i vương. Sau khi giải nghệ, Minh Phương vẫn nắm giữ kỉ lục kho&aacute;c &aacute;o ĐTQG với 72 lần.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- L&ecirc; Tấn T&agrave;i:&nbsp;</strong>Kể từ năm 2005 trở lại đ&acirc;y, Tấn T&agrave;i l&agrave; 1 trong những mắt x&iacute;ch kh&ocirc;ng thể thiếu của ĐT Việt Nam. Với lối chơi nhiệt huyết, gi&agrave;u thể lực, anh đ&atilde; c&ugrave;ng ĐT Việt Nam gi&agrave;nh chức v&ocirc; địch AFF Cup 2008. Hiện tại, tiền vệ người Kh&aacute;nh H&ograve;a đang giữ băng thủ qu&acirc;n ĐT Việt Nam tại AFF Cup 2014.</span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong><span style="text-decoration: underline;">Tiền đạo</span></strong></span></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- L&ecirc; Huỳnh Đức:</strong>&nbsp;Từ ng&agrave;y hội nhập khu vực, b&oacute;ng đ&aacute; Việt Nam đ&atilde; trải qua nhiều thế hệ tiền đạo nhưng c&oacute; lẽ Huỳnh Đức vẫn l&agrave; mẫu trung phong th&agrave;nh c&ocirc;ng nhất. Anh đang giữ kỉ lục về số lần tham dự AFF Cup (từ 96 đến 2004) v&agrave; cũng l&agrave; cầu thủ ghi nhiều b&agrave;n thắng nhất cho ĐT Việt Nam trong lịch sử AFF Cup v&agrave; Tiger Cup. Tiếc l&agrave; cựu danh thủ người TP.Hồ Ch&iacute; Minh chưa một lần n&acirc;ng cao chức v&ocirc; địch.</span></p>\r\n<p><img src="http://bongdaso.com/images/Article/Upload/141120_124004_755.jpg" alt="" width="500" align="none" /></p>\r\n<p><span style="font-family: arial; font-size: small;"><strong>- L&ecirc; C&ocirc;ng Vinh:&nbsp;</strong>Kể từ năm 2004 tới nay, chưa c&oacute; tiền đạo n&agrave;o vượt qua C&ocirc;ng Vinh về số b&agrave;n thắng cho ĐT Việt Nam. Đặc biệt, ở AFF Cup 2008, ch&acirc;n s&uacute;t xứ Nghệ đ&oacute;ng vai tr&ograve; rất quan trọng gi&uacute;p ĐT Việt Nam lần đầu l&ecirc;n ng&ocirc;i khu vực. Ở b&aacute;n kết, anh kiến tạo cho Quang Hải lập c&ocirc;ng hạ Singapore. C&ograve;n ở chung kết, tiền đạo đang kho&aacute;c &aacute;o B.B&igrave;nh Dương ghi 2 b&agrave;n v&agrave;o lưới Th&aacute;i Lan. Trong đ&oacute;, đ&aacute;ng kể nhất l&agrave; c&uacute; đ&aacute;nh đầu lịch sử ở những gi&acirc;y cuối c&ugrave;ng tr&ecirc;n s&acirc;n Mỹ Đ&igrave;nh.</span></p>\r\n<div class="art_center_banner"><iframe src="http://bongdaso.com/_BannerSlot.aspx?PCat=*%2cNewsPage%2cArticle.aspx&amp;Pos=ARTCENTER&amp;rnd=41259&amp;TopMenu=-1&amp;Lang=VN" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="640" height="100"></iframe></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(30) DEFAULT NULL,
  `sannha` varchar(30) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `idgiaidau` int(11) DEFAULT NULL,
  `diem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `team_ibfk_1` (`idgiaidau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `ten`, `sannha`, `logo`, `diachi`, `website`, `idgiaidau`, `diem`) VALUES
(2, 'Barcenola FC', 'NouCamp', '/upload/2014-11-19/barca.jpg', 'spain', 'www.barcenola.com', 2, 12),
(3, 'RealMadrid FC', 'bernabeu2', '/upload/2014-11-20/real.jpg', 'spain', 'www.realmadridfc.com', 1, 12),
(4, 'Bayern Munich ', 'allianz arena', '/upload/2014-11-20/bayern.jpg', 'germany', 'www.bayernfc.com', 2, 3),
(5, 'Manchester City', 'etihad', '/upload/2014-11-19/mancity.jpg', 'England', 'www.mancity.com', 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idgiaidau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`idgiaidau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`idgiaidau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
