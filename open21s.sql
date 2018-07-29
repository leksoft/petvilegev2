/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50638
 Source Host           : localhost:3306
 Source Schema         : open21

 Target Server Type    : MySQL
 Target Server Version : 50638
 File Encoding         : 65001

 Date: 29/07/2018 16:57:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for animaltypes
-- ----------------------------
DROP TABLE IF EXISTS `animaltypes`;
CREATE TABLE `animaltypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (2, '2018_06_19_145726_create__roles_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_06_19_151533_create__users_table', 1);
INSERT INTO `migrations` VALUES (4, '2018_06_19_151647_create__animaltypes_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_06_19_151714_create__pets_table', 1);
INSERT INTO `migrations` VALUES (6, '2018_06_19_152407_create__profiles_table', 1);
INSERT INTO `migrations` VALUES (7, '2018_06_19_152645_create__wallets_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for pets
-- ----------------------------
DROP TABLE IF EXISTS `pets`;
CREATE TABLE `pets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IDower` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `animaltype_id` int(10) unsigned NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nopic.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `mailaddress` text COLLATE utf8mb4_unicode_ci,
  `phone` char(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'nopic.jpg',
  `wallet` double(8,2) DEFAULT NULL,
  `point` double(8,2) DEFAULT NULL,
  `referral` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of profiles
-- ----------------------------
BEGIN;
INSERT INTO `profiles` VALUES (5, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nopic.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `profiles` VALUES (6, 14, NULL, NULL, 'ชาย', '0000-00-00', 'ee', 'ererrererewr', '0634219091', '4hwAf6xezM.jpg', NULL, NULL, NULL, '2018-07-07 09:50:44', '2018-07-07 11:32:41');
INSERT INTO `profiles` VALUES (7, 15, NULL, NULL, 'ชาย', NULL, '2555', NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-29 04:12:22', '2018-07-29 04:16:32');
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for stores
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID ร้านค้า',
  `user_id` int(10) DEFAULT NULL COMMENT 'รหัสเจ้าของร้าน',
  `category_id` int(10) DEFAULT NULL COMMENT 'หมวดหมู่ร้านค้า',
  `store_name_th` varchar(255) DEFAULT NULL COMMENT 'ชื่อร้านไทย',
  `store_name_en` varchar(255) DEFAULT NULL COMMENT 'ชื่อร้านอังกฤษ',
  `doc_file` varchar(255) DEFAULT NULL COMMENT 'เอกสารเกี่ยวกับร้านค้า',
  `address` text COMMENT 'ที่อยู่ร้าน',
  `tel` char(13) DEFAULT NULL COMMENT 'เบอร์โทรร้าน',
  `coordinates` varchar(255) DEFAULT NULL COMMENT 'พิกัดร้าน',
  `image_store` varchar(255) DEFAULT NULL COMMENT 'รูปร้านค้า',
  `status` int(5) DEFAULT NULL COMMENT 'สถานะ 0 = ล้มเหลว , 1 = อนุมัติ , 2 = อยู่ในระหว่างดำเนินการ',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stores
-- ----------------------------
BEGIN;
INSERT INTO `stores` VALUES (1, 15, 1, 'แนวข้อสอบ', 'sheet', NULL, '180 / 14', '06.3254887', '..25', NULL, 2, '2018-07-29 09:32:30', '2018-07-29 09:32:30');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` text COLLATE utf8mb4_unicode_ci,
  `gtoken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'open21', 'open21', 'open21@gmail.com', NULL, NULL, '$2y$10$WPodPI90NXlYhCCbNuU8C.bjSbwXRqZvBEoXkfBDjUBoft5bXazG2', 1, 'aKpQndDr8GvsFbHJhnlh5IiDfJqm5lavTLCBJt9YOtc76rFBETVmRjVJc872', '2018-06-25 14:10:13', '2018-06-25 14:10:13');
INSERT INTO `users` VALUES (2, 'นครินทร์ ม่วงอ่อน', NULL, 'leksofty@gmail.com', NULL, NULL, '$2y$10$V4U70cpcausstiuzG5e/bOTfpRoxXC37bBSD1RlUsqICI7Jmkh2RG', 2, '7CsBbI1grGt8ph6a3w7eFkdabVXfaDQDmiqXlxlCxjAMmMXwPXMQRmBazikJ', '2018-07-07 05:10:00', '2018-07-07 05:10:00');
INSERT INTO `users` VALUES (14, 'กมลวรรณ นาดี', NULL, 'ka@gmail.com', NULL, NULL, '$2y$10$3.SSPbRECeLxf7PgQ.t1O.3n7RTb5SPJuR5YWW20d/2QGEKz4bLqu', 2, 'yQ0mnDTuOBjF4pnhMLVcN934L6WeTI6BA27nNJJy6U9IiKKAAqm1AFgAt4v7', '2018-07-07 09:50:44', '2018-07-07 11:13:48');
INSERT INTO `users` VALUES (15, 'mana', NULL, 'mana@rmu.ac.th', NULL, NULL, '$2y$10$El4x2T/N0omwFsu6ocUcBuTnR/rVT67Y3gF0ERb4fT/iT2mcIpiEC', 3, '9xZu4w2C7h5rwMTcwHd33vL9XUW8IAFDjMvinGZNoakKHz4Nx1YPn4NSH2Gu', '2018-07-29 04:12:22', '2018-07-29 04:17:15');
COMMIT;

-- ----------------------------
-- Table structure for wallets
-- ----------------------------
DROP TABLE IF EXISTS `wallets`;
CREATE TABLE `wallets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `buydate` datetime NOT NULL,
  `buyamount` double(8,2) NOT NULL,
  `getamount` double(8,2) NOT NULL,
  `channelPayment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;
