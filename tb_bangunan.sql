/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : simbg_new

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 20/11/2023 17:54:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_bangunan
-- ----------------------------
DROP TABLE IF EXISTS `tb_bangunan`;
CREATE TABLE `tb_bangunan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Nama_Pemilik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Lng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Fungsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kesesuaian_Bangunan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Memiliki_IMB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Nomor_IMB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Status_Kepemilikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_bangunan
-- ----------------------------
INSERT INTO `tb_bangunan` VALUES (1, 'Banyumanik', 'Banyumanik', 'Deby Pero Nita Pujilestari', 'RT5RW2', '-7.0759', '110.4135', 'Kamis/ 4 Mei 2023', 'Hunian', 'Sesuai', '1', 'SK-PBG-337411-29052023-002', 'SHM', 'DSC03198.jfif', 'DSC03197.jfif', NULL);
INSERT INTO `tb_bangunan` VALUES (2, 'Banyumanik', 'Banyumanik', 'M. Rizky', 'Perum Mutiara banyumanik Rt 1 RW 5', '-7.0756', '110.4137', 'Kamis/ 4 Mei 2023', 'Hunian', 'Sesuai', '1', 'SK-PBG-337411-07032023-002', 'SHM', 'bgn1.jfif', 'bgn2.jfif', NULL);
INSERT INTO `tb_bangunan` VALUES (3, 'Banyumanik', 'Banyumanik', 'Mayasari', 'Jl. Karangrejo III A RT 2 RW 3', '-7.076', '110.4155', 'Kamis/ 4 Mei 2023', 'Usaha', 'Sesuai', '1', 'SK-PBG-33741-0312023-001', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (4, 'Banyumanik', 'Banyumanik', 'Achmad Chairul Gani', 'Jl. Parikesit Raya RT 6 RW 2', '-7.0791', '110.414', 'Kamis/ 4 Mei 2023', 'Hunian', 'Sesuai', '1', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (5, 'Banyumanik', 'Banyumanik', 'Darminto', 'Jl. Parikesit 3 RT 8 RW2', '-7.0796', '110.4162', 'Kamis/ 4 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (6, 'Banyumanik', 'Banyumanik', 'Kurnia', 'Jl. Parikesit 4 Rt 8 RW 2', '-7.0801', '110.4165', 'Jumat/ 5 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (7, 'Banyumanik', 'Banyumanik', 'Dwi', 'RT6RW2', '-7.07968', '110.4149', 'Jumat/ 5 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (8, 'Banyumanik', 'Banyumanik', 'Robi Nugroho', 'RT2RW1', '-7.0821', '110.4141', 'Jumat/ 5 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (9, 'Banyumanik', 'Banyumanik', 'Ichsan Dwi Prasetyo', 'Jl. Karanganyar RT 2 RW 1', '-7.0822', '110.4144', 'Jumat/ 5 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (10, 'Banyumanik', 'Banyumanik', 'Sie Ping Dhiam', 'Jl. Jati Raya', '-7.08', '110.4207', 'Jumat/ 5 Mei 2023', 'Usaha', 'Sesuai', '1', 'SK-PBG-337411-31032023-003', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (11, 'Banyumanik', 'Pedalangan', 'Aziz', 'Jl. Tusam Timur Raya 9 RT2 RW1', '-7.0669', '110.4271', 'Rabu /31 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (12, 'Banyumanik', 'Pedalangan', 'Yani Dian Erhowati', 'Mulawarman 2', '-7.0674', '110.4354', 'Rabu/ 31 Mei 2023', 'Usaha', 'Sesuai', '1', 'SK-PBG-337411-05012022-002', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (13, 'Banyumanik', 'Pedalangan', 'Yani Dian Erhowati', 'Jl. Mulawarman 2', '-7.067', '110.4359', 'Rabu/31 Mei 2023', 'Usaha', 'Sesuai', '1', 'SK-PBG-33741-05012022-002', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (14, 'Banyumanik', 'Pedalangan', 'Diyo', 'Jl. Waru Timur 2 RT9 RW1', '-7.068', '110.4303', 'Rabu/31 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (15, 'Banyumanik', 'Pedalangan', 'Masjid An Nur', 'Jl. Waru Timur 2  RT7 RW1', '-7.0686', '110.4303', 'Rabu/31 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'Wakaf', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (16, 'Banyumanik', 'Pedalangan', 'Ratna', 'Jl. Kruing Timur Dalam Kapling Baru N0 36   RT9 RW4', '-7.069', '110.4217', 'Rabu/31 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (17, 'Banyumanik', 'Pedalangan', 'Sulistia Dwi Puspita', 'Jl. Waru 4', '-7.0701', '110.427', 'Rabu/31 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (18, 'Banyumanik', 'Srondol Wetan', 'H. Umar Toha , CS ( yayasan', 'JL. Bina Remaja', '-7.0634', '110.4174', 'Senin/29 Mei 2023', 'Hunian', 'Sesuai', '1', '6442/405/DPMPTSP/III/2022', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (19, 'Banyumanik', 'Srondol Wetan', 'Wulan I.L SH, MH', 'Jl. Meranti No 289', '-7.072', '110.4212', 'Senin/29 Mei 2023', 'Hunian', 'Sesuai', '1', 'SK-PBG-337411-16032023-002', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (20, 'Banyumanik', 'Srondol Wetan', 'Masjid Janantul kalam', 'Jl. Mangga Dalam RT 6 RW2', '-7.0671', '110.4147', 'Senin/29 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'Wakaf', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (21, 'Banyumanik', 'Srondol wetan', 'CARFIX ( Anonim)', 'Jl. Sukun Raya', '-7.0658', '110.4169', 'Senin/ 29 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', '', '', NULL);
INSERT INTO `tb_bangunan` VALUES (22, 'Banyumanik', 'Jabungan', 'TK Negeri Jabungan', 'RT 1 Rw 3', '-7.0835', '110.4486', 'Senin/ 8 Mei 2023', 'Khusus', 'Sesuai', '0', NULL, 'SHM', '', '', NULL);
INSERT INTO `tb_bangunan` VALUES (23, 'Banyumanik', 'Jabungan', 'Nanik', 'Jl. Mulawarman RT ..RW 2', '-7.0732', '110.4424', 'Senin/ 8 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (24, 'Banyumanik', 'Jabungan', 'Rio', 'Jl. Wanabakti RT5 Rw 2', '-7.0736', '110.4424', 'Senin/ 8 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (25, 'Banyumanik', 'Jabungan', 'Rusman', 'RT4RW2', '-7.0829', '110.4451', 'Senin/ 8 Mei 2023', 'Campuran', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (26, 'Banyumanik', 'Jabungan', 'Masjid Darussalam', 'RT4RW2', '-7.0825', '110.4459', 'Senin/ 8 Mei 2023', 'Keagamaan', 'Sesuai', '0', NULL, 'Wakaf', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (27, 'Banyumanik', 'Jabungan', 'Taerun', 'RT4RW2', '-7.0825', '110.4457', 'Selasa/ 9 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (28, 'Banyumanik', 'Jabungan', 'Muh Roni Juni', 'RT3RW4', '-7.0873', '110.4527', 'Selasa / 9 Mei 2021', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (29, 'Banyumanik', 'Jabungan', 'Aminudin', 'RT2 RW 4', '-7.0878', '110.4528', 'Selasa/ 9 mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (30, 'Banyumanik', 'Jabungan', 'Suyati', 'Rt3 RW4', '-7.0885', '110.4532', 'Selasa/ 9 Mei2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (31, 'Banyumanik', 'Jabungan', 'Joko Siswanto', 'RT 6 RW2', '-7.0835', '110.4466', 'Selasa/ 9 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (32, 'Banyumanik', 'Pudak Payung', 'Bayu', 'Kp Siroto, RT 3 RW 7', '-7.0977', '110.4157', 'Selasa/ 2 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (33, 'Banyumanik', 'Pudak Payung', 'Mushola Paguyuban PKL Ta', 'Jl. Bumirejo Raya Rt 2 RW 6', '-7.0868', '110.4163', 'Selasa/2 Mei 2023', 'Keagamaan', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (34, 'Banyumanik', 'Pudak Payung', 'Nuryadin', 'Jl. Saudati 3 Rt 5 RW 11 Perumahan P4A', '-7.1033', '110.4022', 'Selasa/ 2 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (35, 'Banyumanik', 'Pudak Payung', 'Bion', 'Jl. Gambyong Rt 12 Rw 1', '-7.1062', '110.4023', 'Selasa/ 2 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (36, 'Banyumanik', 'Pudak Payung', 'Rifa\'i', 'Jl. Satria Barat 1 Rt 8 RW 10', '-7.092', '110.4176', 'Selasa/ 2 mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (37, 'Banyumanik', 'Pudak Payung', 'Beni', 'Jl. Bumirejo Raya RT 5 RW 6', '-7.0904', '110.4137', 'Rabu/3 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (38, 'Banyumanik', 'PUDAK PAYUNG', 'Suwarto', 'Jl. Setuk Raya Rt 1 Rw 4', '-7.1019', '110.41', 'Rabu/ 3 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (39, 'Banyumanik', 'PUDAK PAYUNG', 'Maskuri', 'Kp. Kalipepe RT 19 RW 1', '-7.1012', '110.4051', 'Rabu/ 3 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (40, 'Banyumanik', 'PUDAK PAYUNG', 'Imam', 'Kp. Siroto RT 3 RW 7', '-7.1031', '110.4069', 'Rabu/3 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (41, 'Banyumanik', 'PUDAK PAYUNG', 'Agus', 'RT 8 RW 10 ,Vila Payung Asri', '-7.0962', '110.4157', 'Rabu/3 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (42, 'Banyumanik', 'Gedawang', 'Sunarno Eko Supranoto', 'Griya Sakinah 2 Jl. H. Suradi Raya', '-7.0838', '110.4276', 'Jumat/ 19 mei 2023', 'Hunian', 'Sesuai', '1', 'SK-PBG-337411-16082023-002', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (43, 'Banyumanik', 'Gedawang', 'Mutiara Grafika 2 ( 11 unit )', 'Jl. Mutiara Grrafika RT 10 RW 5', '-7.082', '110.4222', 'jumat/ 19 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (44, 'Banyumanik', 'Gedawang', 'Masjid Al Karim', 'Jl. Kalijaten raya', '-7.0808', '110.4259', 'Jumat/19 Mei 2023', 'Keagamaan', 'Sesuai', '0', NULL, 'Wakaf', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (45, 'Banyumanik', 'Gedawang', 'Budi Setiawan', 'Jl. Kalijaten Raya RT4 RW1', '-7.0805', '110.4251', 'Jumat/ 19 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (46, 'Banyumanik', 'Gedawang', 'Juariadin', 'Jl. H. Suradi RT1 Rw3', '-7.0816', '110.4283', 'Jumat/19 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (47, 'Banyumanik', 'Gedawang', 'Yayasan Sosial, Panti Asuha', 'Jl. H. Suradi Rt 1 RW3', '-7.0818', '110.4278', 'Sabtu/20 Mei 2023', 'Keagamaan', 'Sesuai', '0', NULL, 'Wakaf', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (48, 'Banyumanik', 'Gedawang', 'Totok', 'Jl. H. Suradi RT1 RW3', '-7.0821', '110.4283', 'Sabtu/20 mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (49, 'Banyumanik', 'Gedawang', 'Murtoha', 'Jl. Watu Kaji Raya RT4 RW8', '-7.0863', '110.4242', 'Sabtu/20 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (50, 'Banyumanik', 'Gedawang', 'Nuryanto', 'Jl. Watu Kaji raya Rt 3 RW 8', '-7.0879', '110.4237', 'Sabtu/20 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (51, 'Banyumanik', 'Gedawang', 'Anonim', 'Jl Watu Kaji Raya RT 3 RW 8', '-7.089', '110.4233', 'Sabtu/20 Mei 2023', 'Campuran', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (52, 'Banyumanik', 'Ngesrep', 'Karim', 'RT5RW1', '-7.0344', '110.4203', 'Rabu / 17 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (53, 'Banyumanik', 'Ngesrep', 'Ali Kumaidi', 'RT1RW6', '-7.0338', '110.4243', 'Rabu / 17 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (54, 'Banyumanik', 'Ngesrep', 'Adi Wibowo', 'RT 3 RW7', '-7', '110', 'Rabu / 17 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (55, 'Banyumanik', 'Ngesrep', 'Dedy', 'RT2RW7', '-7.038', '110.425', 'Kamis / 18 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (56, 'Banyumanik', 'Ngesrep', 'Petrus Gunawan', 'Jl. Gombel Indah No 18A Rt 4 RW 4', '-7.0388', '110.4237', 'Kamis / 18 Mei 2023', 'Hunian', 'Sesuai', '1', 'PBG-337411-15092022-002', 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (57, 'Banyumanik', 'Ngesrep', 'Tri Turyanto', 'Rt 4 RW 8', '-7.0365', '110.4284', 'Kamis / 18 Mei 2023', 'Usaha', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (58, 'Banyumanik', 'Ngesrep', 'Junaedi', 'Rt 9 RW 9', '-7.0365', '110.4298', 'Kamis / 18 Mei 2023', 'Hunian', 'Sesuai', '0', NULL, 'SHM', NULL, NULL, NULL);
INSERT INTO `tb_bangunan` VALUES (59, 'Banyumanik', 'Srondol Kulon', 'GPDI Gereja Pantekosta di I', 'RT 5 Rw7', '-7.0607', '110.408', 'Senin / 15 Mei 2023', 'Keagamaan', 'Sesuai', '1', '645.8/269 F18/0/BPN/1989', 'SHM', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
