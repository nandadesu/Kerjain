/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ikia

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-08 18:37:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `merk` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `price` float(100,0) NOT NULL,
  `image` varchar(250) NOT NULL,
  `stock` int(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'A', 'barang a', 'a-1', '5000', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('2', 'B', 'barang b', 'a-2', '6000', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('3', 'C', 'barang c', 'a-3', '7000', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('4', 'D', 'barang d', 'a-4', '8000', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('5', 'E', 'barang e', 'a-5', '9000', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('6', 'F', 'barang f', 'a-6', '10000', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('7', 'G', 'barang g', 'a-7', '11111', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('8', 'H', 'barang h', 'a-8', '124124', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('9', 'I', 'barang i', 'a-9', '214122', 'assets/img/barang.jfif', '100', 'interior');
INSERT INTO `products` VALUES ('10', 'J', 'barang j', 'a-10', '99999', 'assets/img/barang.jfif', '100', 'interior');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `money` int(255) NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'test', 'test@gmail.com', 'test', 'jalan test', '100000');
