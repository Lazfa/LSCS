/*
 Navicat Premium Data Transfer

 Source Server         : LSCS
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : db_lscs

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 17/05/2021 14:11:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_akun
-- ----------------------------
DROP TABLE IF EXISTS `tb_akun`;
CREATE TABLE `tb_akun`  (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_identitas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kelas` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_akun`) USING BTREE,
  INDEX `id_kelas`(`id_kelas`) USING BTREE,
  CONSTRAINT `tb_akun_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_akun
-- ----------------------------
INSERT INTO `tb_akun` VALUES (16, '$2y$10$rMwroQKrpnpSWcJrW/DPlubjyi4mcNs2AqXSg0IExvqeZ17kjki3q', '1801578', 'Krisna Milenia', NULL, '1', 'SMK N 1 Ciamis', 'IMG-20190824-WA00294.jpg');
INSERT INTO `tb_akun` VALUES (17, '$2y$10$KvTmy13/VuVvQ4Jhs3C98OIt/8SCeR6Sntr2ben1EoJVDevVrtrbW', '1806506', 'ace', NULL, '1', 'SMKN 1 Bandung', 'default.png');

-- ----------------------------
-- Table structure for tb_detail_hasil
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail_hasil`;
CREATE TABLE `tb_detail_hasil`  (
  `id_detail_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_soal` int(11) NOT NULL,
  `jawaban` int(1) NOT NULL,
  `id_akun` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_hasil`) USING BTREE,
  INDEX `id_soal`(`id_soal`) USING BTREE,
  INDEX `tb_detail_hasil_ibfk_1`(`id_akun`) USING BTREE,
  CONSTRAINT `tb_detail_hasil_ibfk_2` FOREIGN KEY (`id_soal`) REFERENCES `tb_tes` (`id_soal`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_detail_hasil_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_hasil_tes
-- ----------------------------
DROP TABLE IF EXISTS `tb_hasil_tes`;
CREATE TABLE `tb_hasil_tes`  (
  `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT,
  `id_akun` int(11) NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_rekomendasi` int(11) NOT NULL,
  PRIMARY KEY (`id_hasil_tes`) USING BTREE,
  INDEX `id_akun`(`id_akun`) USING BTREE,
  INDEX `id_rekomendasi`(`id_rekomendasi`) USING BTREE,
  CONSTRAINT `tb_hasil_tes_ibfk_2` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_kelas
-- ----------------------------
DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas`  (
  `id_kelas` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_rekomendasi` int(11) NOT NULL,
  `kode_kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kelas`) USING BTREE,
  INDEX `id_rekomendasi`(`id_rekomendasi`) USING BTREE,
  CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_rekomendasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_rekomendasi`;
CREATE TABLE `tb_rekomendasi`  (
  `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT,
  `rek_cara_mengajar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rek_pekerjaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rek_bidang_kuliah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_rekomendasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_tes
-- ----------------------------
DROP TABLE IF EXISTS `tb_tes`;
CREATE TABLE `tb_tes`  (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_soal` int(11) NOT NULL,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_soal`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
