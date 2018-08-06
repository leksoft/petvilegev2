/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50638
 Source Host           : localhost:3306
 Source Schema         : db_open21

 Target Server Type    : MySQL
 Target Server Version : 50638
 File Encoding         : 65001

 Date: 06/08/2018 11:33:34
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
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (1, 'รักษาสัตว์', '2018-08-06 09:26:46', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (2, 'กรูมมิ่ง', '2018-08-06 09:26:53', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (3, 'รับฝากสัตว์', '2018-08-06 09:27:11', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (4, 'กิจกรรมสัตว์', '2018-08-06 09:27:14', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (5, 'สินค้้า', '2018-08-06 09:27:20', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (6, 'บริการอื่นๆ', '2018-08-06 09:27:25', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (7, 'ฟาร์ม', '2018-08-06 09:27:31', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES (8, 'ไลฟ์สไตล์', '2018-08-06 09:27:36', '0000-00-00 00:00:00');
COMMIT;

-- ----------------------------
-- Table structure for coupons
-- ----------------------------
DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT 'ไอดีเจ้าของร้าน',
  `store_id` int(10) NOT NULL COMMENT 'ไอดีร้านค้า',
  `category_id` int(10) DEFAULT NULL COMMENT 'ประเภทคูปอง',
  `name` varchar(255) DEFAULT NULL COMMENT 'ชื่อคูปอง',
  `detail` text COMMENT 'รายละเอียดคูปอง',
  `termsofuse` text COMMENT 'เงื่อนไขการใช้งาน',
  `countload` int(10) DEFAULT NULL COMMENT 'จำนวนครั้งดาวน์โหลด',
  `sale_date_start` date DEFAULT NULL COMMENT 'วันที่เริ่มขาย',
  `sale_date_stop` date DEFAULT NULL COMMENT 'วันสิ้นสุดการขาย',
  `expired_date` date DEFAULT NULL COMMENT 'วันหมดอายุ',
  `count_coupon_sale` int(11) DEFAULT NULL COMMENT 'จำนวนคูปองคงเหลือ',
  `special_price` float DEFAULT NULL COMMENT 'ราคาพิเศษ',
  `image` varchar(255) DEFAULT NULL COMMENT 'ภาพคูปอง',
  `status` int(11) DEFAULT NULL COMMENT 'สถานะคูปอง',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of coupons
-- ----------------------------
BEGIN;
INSERT INTO `coupons` VALUES (1, 15, 1, 1, '444', '5555', '555', NULL, '2561-08-06', '2561-08-06', '2561-08-06', NULL, NULL, NULL, NULL, '2018-08-06 04:10:32', '2018-08-06 04:10:32');
INSERT INTO `coupons` VALUES (2, 15, 1, 1, 'อุเทนหงวนวันเวย์อุปนายิกา โปลิศออร์แกนิกเทปเวิร์ก', 'อุเทนหงวนวันเวย์อุปนายิกา โปลิศออร์แกนิกเทปเวิร์ก เฟรมแคมป์ แคร็กเกอร์โอเคโหลยโท่ยเวิร์กช็อป คอนแทคอ่อนด้อย﻿กรรมาชนมาร์ช โพสต์ สุริยยาตรเก๊ะพรีเซ็นเตอร์ เจ๊ดีไซน์ รูบิคแตงโมอ่อนด้อย ออยล์สไตรค์ โต๊ะจีนซูเปอร์โหลยโท่ยคอร์รัปชันราชานุญาต คอนแทคฮอตพล็อตซิงอีสเตอร์ ครัวซอง ถูกต้องราสเบอร์รีกุนซือลิมิตหลวงพี่ อุปนายิกาแจมลีกคาสิโนเสือโคร่ง สุริยยาตร์พรีเมียร์ซูโม่', 'อุเทนหงวนวันเวย์อุปนายิกา โปลิศออร์แกนิกเทปเวิร์ก เฟรมแคมป์ แคร็กเกอร์โอเคโหลยโท่ยเวิร์กช็อป คอนแทคอ่อนด้อย﻿กรรมาชนมาร์ช โพสต์ สุริยยาตรเก๊ะพรีเซ็นเตอร์ เจ๊ดีไซน์ รูบิคแตงโมอ่อนด้อย ออยล์สไตรค์ โต๊ะจีนซูเปอร์โหลยโท่ยคอร์รัปชันราชานุญาต คอนแทคฮอตพล็อตซิงอีสเตอร์ ครัวซอง ถูกต้องราสเบอร์รีกุนซือลิมิตหลวงพี่ อุปนายิกาแจมลีกคาสิโนเสือโคร่ง สุริยยาตร์พรีเมียร์ซูโม่', NULL, '2561-08-06', '2561-08-06', '2561-08-06', NULL, NULL, NULL, NULL, '2018-08-06 04:11:44', '2018-08-06 04:11:44');
COMMIT;

-- ----------------------------
-- Table structure for deals
-- ----------------------------
DROP TABLE IF EXISTS `deals`;
CREATE TABLE `deals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT 'ไอดีเจ้าของร้าน',
  `store_id` int(10) NOT NULL COMMENT 'ไอดีร้านค้า',
  `category_id` int(10) DEFAULT NULL COMMENT 'ประเภทดีล',
  `name` varchar(255) DEFAULT NULL COMMENT 'ชื่อดีล',
  `detail` text COMMENT 'รายละเอียดดีล',
  `termsofuse` text COMMENT 'เงื่อนไขการใช้งาน',
  `countuse` int(10) DEFAULT NULL COMMENT 'จำนวนครั้งในการใช้งาน',
  `sale_date_start` date DEFAULT NULL COMMENT 'วันที่เริ่มขาย',
  `sale_date_stop` date DEFAULT NULL COMMENT 'วันสิ้นสุดการขาย',
  `expired_date` date DEFAULT NULL COMMENT 'วันหมดอายุ',
  `count_deal_sale` int(11) DEFAULT NULL COMMENT 'จำนวนดีลที่เปิดขาย',
  `deal_balance` int(11) DEFAULT NULL COMMENT 'จำนวนดีลคงเหลือ',
  `normal_price` float DEFAULT NULL COMMENT 'ราคาปกติ',
  `special_price` float DEFAULT NULL COMMENT 'ราคาพิเศษ',
  `freegift` text COMMENT 'ของแถม',
  `image` varchar(255) DEFAULT NULL COMMENT 'ภาพดีล',
  `status` int(11) DEFAULT NULL COMMENT 'สถานะดีล',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deals
-- ----------------------------
BEGIN;
INSERT INTO `deals` VALUES (2, 15, 1, 1, 'ddd', 'dddd', 'dddd', 32, '2561-08-06', '2561-08-06', '2561-08-06', 3, 3, 3, 3, '3', NULL, NULL, '2018-08-06 04:04:46', '2018-08-06 04:04:46');
INSERT INTO `deals` VALUES (3, 15, 1, 2, 'ถถ', 'ถถถ', 'ถถถ', NULL, '2561-08-06', '2561-08-06', '2561-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-06 04:08:10', '2018-08-06 04:08:10');
INSERT INTO `deals` VALUES (4, 15, 1, 2, 'อุเทนหงวนวันเวย์อุปนายิกา', 'อุเทนหงวนวันเวย์อุปนายิกา โปลิศออร์แกนิกเทปเวิร์ก เฟรมแคมป์ แคร็กเกอร์โอเคโหลยโท่ยเวิร์กช็อป คอนแทคอ่อนด้อย﻿กรรมาชนมาร์ช โพสต์ สุริยยาตรเก๊ะพรีเซ็นเตอร์ เจ๊ดีไซน์ รูบิคแตงโมอ่อนด้อย ออยล์สไตรค์ โต๊ะจีนซูเปอร์โหลยโท่ยคอร์รัปชันราชานุญาต คอนแทคฮอตพล็อตซิงอีสเตอร์ ครัวซอง ถูกต้องราสเบอร์รีกุนซือลิมิตหลวงพี่ อุปนายิกาแจมลีกคาสิโนเสือโคร่ง สุริยยาตร์พรีเมียร์ซูโม่', 'อุเทนหงวนวันเวย์อุปนายิกา', 3, '2561-08-06', '2561-08-06', '2561-08-06', 4, 4, 4, 43, 'อุเทนหงวนวันเวย์อุปนายิกา', NULL, NULL, '2018-08-06 04:12:09', '2018-08-06 04:12:09');
COMMIT;

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
  `id_card` char(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `mailaddress` text COLLATE utf8mb4_unicode_ci,
  `phone` char(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_no` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เลขบัญชีธนาคาร',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'nopic.jpg',
  `wallet` double(8,2) DEFAULT NULL,
  `point` double(8,2) DEFAULT NULL,
  `referral` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of profiles
-- ----------------------------
BEGIN;
INSERT INTO `profiles` VALUES (5, 2, NULL, 'จิราวรรณ', 'จันทร์ดร', NULL, NULL, NULL, NULL, NULL, NULL, 'nopic.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `profiles` VALUES (6, 14, NULL, 'อมร', 'สอนรัน', 'ชาย', '0000-00-00', 'ee', 'ererrererewr', '0634219091', NULL, '4hwAf6xezM.jpg', NULL, NULL, NULL, '2018-07-07 09:50:44', '2018-07-07 11:32:41');
INSERT INTO `profiles` VALUES (7, 15, NULL, 'เล็ก', 'g', 'ชาย', NULL, '2555', '5555', '0989887766', NULL, 'VFTzax3cz0.png', NULL, NULL, NULL, '2018-07-29 04:12:22', '2018-08-04 05:47:59');
INSERT INTO `profiles` VALUES (8, 17, NULL, 'นนท์', 'ขยัน', NULL, NULL, NULL, NULL, NULL, NULL, 'nopic.jpg', NULL, NULL, NULL, '2018-08-03 21:11:40', '2018-08-03 21:11:40');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stores
-- ----------------------------
BEGIN;
INSERT INTO `stores` VALUES (1, 15, 1, 'แนวข้อสอบ', 'sheet', NULL, '180 / 14', '06.3254887', '..25', NULL, 2, '2018-07-29 09:32:30', '2018-07-29 09:32:30');
COMMIT;

-- ----------------------------
-- Table structure for sub_categories
-- ----------------------------
DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_type` int(2) DEFAULT NULL COMMENT 'ประเภทบัญชี 1 = บุคคล , 2 = นิติบุคคล',
  `corporation_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อนิติบุคคล',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` text COLLATE utf8mb4_unicode_ci,
  `gtoken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `verify_id_card_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'การยืนยันบัตรประชาชน',
  `verify_bank_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'การยืนยันบัญชีธนาคาร',
  `status` int(10) DEFAULT NULL COMMENT ' สถานะสมาชิก',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 1, NULL, 'open21', 'open21', 'open21@gmail.com', NULL, NULL, '$2y$10$WPodPI90NXlYhCCbNuU8C.bjSbwXRqZvBEoXkfBDjUBoft5bXazG2', 1, NULL, NULL, 0, 'aKpQndDr8GvsFbHJhnlh5IiDfJqm5lavTLCBJt9YOtc76rFBETVmRjVJc872', '2018-06-25 14:10:13', '2018-06-25 14:10:13');
INSERT INTO `users` VALUES (2, 1, NULL, 'นครินทร์ ม่วงอ่อน', NULL, 'leksofty@gmail.com', NULL, NULL, '$2y$10$V4U70cpcausstiuzG5e/bOTfpRoxXC37bBSD1RlUsqICI7Jmkh2RG', 2, NULL, NULL, 0, '7CsBbI1grGt8ph6a3w7eFkdabVXfaDQDmiqXlxlCxjAMmMXwPXMQRmBazikJ', '2018-07-07 05:10:00', '2018-07-07 05:10:00');
INSERT INTO `users` VALUES (14, 1, NULL, 'กมลวรรณ นาดี', NULL, 'ka@gmail.com', NULL, NULL, '$2y$10$3.SSPbRECeLxf7PgQ.t1O.3n7RTb5SPJuR5YWW20d/2QGEKz4bLqu', 2, NULL, NULL, 0, 'yQ0mnDTuOBjF4pnhMLVcN934L6WeTI6BA27nNJJy6U9IiKKAAqm1AFgAt4v7', '2018-07-07 09:50:44', '2018-07-07 11:13:48');
INSERT INTO `users` VALUES (15, 1, NULL, 'Leksoft Feif', NULL, 'mana@rmu.ac.th', NULL, NULL, '$2y$10$El4x2T/N0omwFsu6ocUcBuTnR/rVT67Y3gF0ERb4fT/iT2mcIpiEC', 3, '', '', 2, 'wyYgolDyi0cSTvhZBeCGVIzdiIxBQL90GN7bM3KCTIFEK0t1whcCmPvaWx06', '2018-07-29 04:12:22', '2018-08-04 05:46:43');
INSERT INTO `users` VALUES (17, 1, 'อีสานเดฟ', NULL, NULL, 'none@gmail.com', NULL, NULL, '$2y$10$fH5AGh7Q4zsxIymP1FH/GObd9fGsbf77Oc7dCvy3NAh83jpFL9kI6', 3, NULL, NULL, 0, NULL, '2018-08-03 21:11:40', '2018-08-03 21:11:40');
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
