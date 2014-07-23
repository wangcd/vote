/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : wcd

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-07-23 17:45:35
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
INSERT INTO `tp_option` VALUES ('1', '1', '北京', '2', '1');
INSERT INTO `tp_option` VALUES ('2', '1', '上海', '3', '1');
INSERT INTO `tp_option` VALUES ('3', '1', '天津', '3', '1');
INSERT INTO `tp_option` VALUES ('4', '1', '重庆', '6', '1');
INSERT INTO `tp_option` VALUES ('5', '2', '吃米', '1', '1');
INSERT INTO `tp_option` VALUES ('6', '2', '吃面', '4', '1');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_title
-- ----------------------------
INSERT INTO `tp_title` VALUES ('1', '哪里的夏天最凉快？', '0');
INSERT INTO `tp_title` VALUES ('2', '今天晚上吃什么饭?', '1');
INSERT INTO `tp_title` VALUES ('3', '明天会不会下雨?', '0');
