/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : wcd

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-07-24 11:55:58
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tp_option`
-- ----------------------------
DROP TABLE IF EXISTS `tp_option`;
CREATE TABLE `tp_option` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) DEFAULT NULL,
  `o_name` varchar(50) DEFAULT NULL,
  `o_count` int(11) DEFAULT '1',
  `o_state` char(2) DEFAULT '1',
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_option
-- ----------------------------
INSERT INTO `tp_option` VALUES ('1', '1', '北京', '3', '0');
INSERT INTO `tp_option` VALUES ('2', '1', '上海', '5', '1');
INSERT INTO `tp_option` VALUES ('3', '1', '天津', '7', '1');
INSERT INTO `tp_option` VALUES ('4', '1', '重庆', '8', '1');
INSERT INTO `tp_option` VALUES ('5', '2', '吃米', '3', '1');
INSERT INTO `tp_option` VALUES ('6', '2', '吃面', '6', '1');
INSERT INTO `tp_option` VALUES ('7', '3', '会', '1', '1');
INSERT INTO `tp_option` VALUES ('8', '3', '不会', '1', '1');

-- ----------------------------
-- Table structure for `tp_title`
-- ----------------------------
DROP TABLE IF EXISTS `tp_title`;
CREATE TABLE `tp_title` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) DEFAULT NULL,
  `t_state` char(2) DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_title
-- ----------------------------
INSERT INTO `tp_title` VALUES ('1', '哪里的夏天最凉快？', '0');
INSERT INTO `tp_title` VALUES ('2', '今天晚上吃什么饭?', '0');
INSERT INTO `tp_title` VALUES ('3', '明天会不会下雨?', '1');

-- ----------------------------
-- Table structure for `tp_user`
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) DEFAULT NULL,
  `upwd` char(32) DEFAULT NULL,
  `state` char(2) DEFAULT '1',
  `flag` char(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '0');
