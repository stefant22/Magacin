/*
 Navicat Premium Data Transfer

 Source Server         : Magacin
 Source Server Type    : MySQL
 Source Server Version : 80016
 Source Host           : 10.1.12.232:3306
 Source Schema         : magacin

 Target Server Type    : MySQL
 Target Server Version : 80016
 File Encoding         : 65001

 Date: 26/06/2021 08:36:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for device
-- ----------------------------
DROP TABLE IF EXISTS `device`;
CREATE TABLE `device`  (
  `device_id` int(10) NOT NULL AUTO_INCREMENT,
  `bar_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `serial_number` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(11) NULL DEFAULT NULL,
  `garancija` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `korisnik` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`device_id`) USING BTREE,
  UNIQUE INDEX `bar_code`(`bar_code`) USING BTREE,
  INDEX `fk_device_model_id`(`model_id`) USING BTREE,
  INDEX `fk_device_location_id`(`location_id`) USING BTREE,
  CONSTRAINT `fk_device_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_device_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1168 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Table structure for device_revers
-- ----------------------------
DROP TABLE IF EXISTS `device_revers`;
CREATE TABLE `device_revers`  (
  `device_revers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `revers_id` int(10) UNSIGNED NOT NULL,
  `device_id` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`device_revers_id`) USING BTREE,
  INDEX `fk_device_revers_device_id`(`device_id`) USING BTREE,
  INDEX `fk_device_revers_revers_id`(`revers_id`) USING BTREE,
  CONSTRAINT `fk_device_revers_device_id` FOREIGN KEY (`device_id`) REFERENCES `device` (`device_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `fk_device_revers_revers_id` FOREIGN KEY (`revers_id`) REFERENCES `revers` (`revers_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 976 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Table structure for location
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location`  (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `adress` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`location_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 71 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Table structure for model
-- ----------------------------
DROP TABLE IF EXISTS `model`;
CREATE TABLE `model`  (
  `model_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `model_type_id` int(10) UNSIGNED NOT NULL,
  `model_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '-',
  `ram` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '-',
  `processor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '-',
  `inch` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '-',
  `ports` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '-',
  PRIMARY KEY (`model_id`) USING BTREE,
  INDEX `fk_model_model_type_ide`(`model_type_id`) USING BTREE,
  CONSTRAINT `fk_model_model_type_ide` FOREIGN KEY (`model_type_id`) REFERENCES `model_type` (`model_type_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 107 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Table structure for model_type
-- ----------------------------
DROP TABLE IF EXISTS `model_type`;
CREATE TABLE `model_type`  (
  `model_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`model_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Table structure for revers
-- ----------------------------
DROP TABLE IF EXISTS `revers`;
CREATE TABLE `revers`  (
  `revers_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `revers_holder` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `location_id` int(11) NULL DEFAULT NULL,
  `type` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` timestamp(1) NULL DEFAULT CURRENT_TIMESTAMP(1),
  `administrator` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`revers_id`) USING BTREE,
  INDEX `fk_revers_location_id_idx`(`location_id`) USING BTREE,
  CONSTRAINT `fk_revers_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 758 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

SET FOREIGN_KEY_CHECKS = 1;
