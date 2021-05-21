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

 Date: 21/05/2021 09:10:59
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
  `role` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_akun`) USING BTREE,
  INDEX `nomor_identitas`(`nomor_identitas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_akun
-- ----------------------------
INSERT INTO `tb_akun` VALUES (2, '$2y$10$hpphvk2gI1P6SyaBA/Vq7eRqmikXK6tBn8rtNtBqcPmD9WigCzGR2', '1801578', 'krisna', '1', 'SMKN 1 Bandung', 'IMG-20190824-WA0029.jpg');
INSERT INTO `tb_akun` VALUES (3, '$2y$10$rVsthFthK.qiAS.YPd/YLOoj96Vb32.wkTYpZoSP9qY2FyMeEIHjO', '180123', 'Krisnaa', '1', 'SMK N 1 Ciamis', 'default.png');
INSERT INTO `tb_akun` VALUES (6, '$2y$10$ZEUuudqWu3bwKe78zHDPpelLpNakStMzLrPFe/Ec6s/vyWa0Ou.C.', '1806506', 'Krisna Milenia', '1', 'SMKN 1 Bandung', 'IMG-20190824-WA00291.jpg');

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
  CONSTRAINT `tb_detail_hasil_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_detail_hasil_ibfk_2` FOREIGN KEY (`id_soal`) REFERENCES `tb_tes` (`id_soal`) ON DELETE RESTRICT ON UPDATE RESTRICT
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
  CONSTRAINT `fk1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_hasil_tes_ibfk_2` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_kelas
-- ----------------------------
DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas`  (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_rekomendasi` int(11) NULL DEFAULT NULL,
  `kode_kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_akun` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kelas`) USING BTREE,
  INDEX `id_rekomendasi`(`id_rekomendasi`) USING BTREE,
  INDEX `tb_kelas_ibfk_2`(`id_akun`) USING BTREE,
  CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_kelas_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kelas
-- ----------------------------
INSERT INTO `tb_kelas` VALUES (1, NULL, 'kelas6', 'kelas6', 6);
INSERT INTO `tb_kelas` VALUES (2, NULL, 'kelas2', 'kelas2', 2);
INSERT INTO `tb_kelas` VALUES (3, NULL, 'kelas3', 'kelas3', 2);

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
