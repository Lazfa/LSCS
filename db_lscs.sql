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

 Date: 23/05/2021 10:41:25
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
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_akun
-- ----------------------------
INSERT INTO `tb_akun` VALUES (3, '$2y$10$rVsthFthK.qiAS.YPd/YLOoj96Vb32.wkTYpZoSP9qY2FyMeEIHjO', '180123', 'Krisnaa', '1', 'SMK N 1 Ciamis', 'default.png');
INSERT INTO `tb_akun` VALUES (6, '$2y$10$ZEUuudqWu3bwKe78zHDPpelLpNakStMzLrPFe/Ec6s/vyWa0Ou.C.', '1806506', 'Krisna Milenia', '1', 'SMKN 1 Bandung', 'IMG-20190824-WA00291.jpg');
INSERT INTO `tb_akun` VALUES (7, '$2y$10$LH7gyrEbu8myur24ea0DreLHE6SIsmHVW1vL96lA7OCpA4oZDxlSi', '1801578', 'siswa krisna', '2', 'SMK N 1 Ciamis', 'default.png');
INSERT INTO `tb_akun` VALUES (8, '$2y$10$0zI4lTvwQuQ5sr/ZIBt7F.YUed8AKXuDr85JH.WzrqKUxXumh4xUO', '123456', 'rifqi', '2', 'SMKN 1 Bandung', 'default.png');

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
  `id_rekomendasi` int(11) NULL DEFAULT NULL,
  `jenis_gaya_belajar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_hasil_tes`) USING BTREE,
  INDEX `id_akun`(`id_akun`) USING BTREE,
  INDEX `id_rekomendasi`(`id_rekomendasi`) USING BTREE,
  CONSTRAINT `fk1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_hasil_tes_ibfk_2` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_hasil_tes
-- ----------------------------
INSERT INTO `tb_hasil_tes` VALUES (1, 7, NULL, NULL, 'Diverger');
INSERT INTO `tb_hasil_tes` VALUES (2, 8, NULL, NULL, 'Assimilator');

-- ----------------------------
-- Table structure for tb_join_kelas
-- ----------------------------
DROP TABLE IF EXISTS `tb_join_kelas`;
CREATE TABLE `tb_join_kelas`  (
  `id_join_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_akun` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_join_kelas`) USING BTREE,
  INDEX `tb_join_ibfk_1`(`id_akun`) USING BTREE,
  INDEX `tb_join_ibfk_2`(`id_kelas`) USING BTREE,
  CONSTRAINT `tb_join_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_join_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_join_kelas
-- ----------------------------
INSERT INTO `tb_join_kelas` VALUES (5, 6, 4);
INSERT INTO `tb_join_kelas` VALUES (6, 7, 4);
INSERT INTO `tb_join_kelas` VALUES (7, 8, 5);

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kelas
-- ----------------------------
INSERT INTO `tb_kelas` VALUES (4, NULL, '90kelaz', 'kelas9', 6);
INSERT INTO `tb_kelas` VALUES (5, NULL, 'klz10', 'kelas10', 6);

-- ----------------------------
-- Table structure for tb_rekomendasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_rekomendasi`;
CREATE TABLE `tb_rekomendasi`  (
  `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_gaya_belajar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rek_cara_mengajar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rek_pekerjaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rek_bidang_kuliah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_rekomendasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_rekomendasi
-- ----------------------------
INSERT INTO `tb_rekomendasi` VALUES (1, 'Assimilator', 'mengajar harus asik', NULL, NULL);
INSERT INTO `tb_rekomendasi` VALUES (2, 'Converger', 'mengajar harus menyenangkan', NULL, NULL);
INSERT INTO `tb_rekomendasi` VALUES (3, 'Akomodator', 'harus banyak praktik', NULL, NULL);
INSERT INTO `tb_rekomendasi` VALUES (4, 'Diverger', 'harus banyak ceramah', NULL, NULL);

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
