DROP DATABASE IF EXISTS cart;
CREATE DATABASE IF NOT EXISTS cart;
USE cart;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Derbies', '7derbies.jpg', 2999.00),
(2, 'Ankle Boots', '4ankleboots.jpg', 1599.00),
(3, 'Canvas', '8canvas.jpg', 499.00),
(4, 'Welington Boots', '1welingtonboots.jpg', 1499.00),
(5, 'Mules', '2mules.jpg', 899.00),
(6, 'Heels', '3heels.jpg', 2999.00);
(7, 'Loafers', '5loafers.jpg', 699.00),
(8, 'Moccasins', '6moccasins.jpg', 1999.00),
(9, 'Sneakers', '9kidssneakers.jpg', 999.00),
(10, 'Brogues', '10brogues.JPG', 1999.00),
(11, 'Denim Shoes', '11denimgirl.jpg', 899.00),
(12, 'Ulkane Shoes', '12ulkanegirl.jpg', 1299.00),