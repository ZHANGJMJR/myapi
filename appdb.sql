/*
 Navicat Premium Data Transfer

 Source Server         : docker-localhost
 Source Server Type    : MySQL
 Source Server Version : 80026
 Source Host           : localhost:3306
 Source Schema         : appdb

 Target Server Type    : MySQL
 Target Server Version : 80026
 File Encoding         : 65001

 Date: 07/04/2022 17:43:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for w_user
-- ----------------------------
DROP TABLE IF EXISTS `w_user`;
CREATE TABLE `w_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '用户账号',
  `password` varchar(320) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '密码MD5(密码+盐)',
  `salt` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '盐',
  `realname` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '姓名',
  `avatar` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '头像',
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '电话',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL COMMENT '邮箱',
  `sex` tinyint NULL DEFAULT 0 COMMENT '性别 0 男 1 女',
  `locked` tinyint NULL DEFAULT 0 COMMENT '状态(0:正常,1:锁定)',
  `delete_time` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  `create_time` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of w_user
-- ----------------------------
INSERT INTO `w_user` VALUES (1, 'zxf', '202cb962ac59075b964b07152d234b70', NULL, '张雪峰', NULL, '13821572929', 'zxf@126.com', 0, 0, NULL, NULL, NULL);
INSERT INTO `w_user` VALUES (2, 'test', '202cb962ac59075b964b07152d234b70', NULL, '测试', NULL, '111111', 'test@test.com', 0, 0, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
