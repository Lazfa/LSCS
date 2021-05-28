/*
 Navicat Premium Data Transfer

 Source Server         : koneksi
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : db_lscs

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 28/05/2021 13:12:58
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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_akun
-- ----------------------------
INSERT INTO `tb_akun` VALUES (3, '$2y$10$rVsthFthK.qiAS.YPd/YLOoj96Vb32.wkTYpZoSP9qY2FyMeEIHjO', '180123', 'Krisnaa', '1', 'SMK N 1 Ciamis', 'default.png');
INSERT INTO `tb_akun` VALUES (6, '$2y$10$ZEUuudqWu3bwKe78zHDPpelLpNakStMzLrPFe/Ec6s/vyWa0Ou.C.', '1806506', 'Krisna Milenia', '1', 'SMKN 1 Bandung', 'IMG-20190824-WA00291.jpg');
INSERT INTO `tb_akun` VALUES (7, '$2y$10$LH7gyrEbu8myur24ea0DreLHE6SIsmHVW1vL96lA7OCpA4oZDxlSi', '1801578', 'siswa krisna', '2', 'SMK N 1 Ciamis', 'default.png');
INSERT INTO `tb_akun` VALUES (8, '$2y$10$0zI4lTvwQuQ5sr/ZIBt7F.YUed8AKXuDr85JH.WzrqKUxXumh4xUO', '123456', 'rifqi', '2', 'SMKN 1 Bandung', 'default.png');
INSERT INTO `tb_akun` VALUES (9, '$2y$10$.6d7FPZJs/4jmVYqSwEnE.0OjWTRkSyuScoTXme3Izkcd.s4UHsXS', '1234', 'afzal', '2', 'pilkom', 'default.png');
INSERT INTO `tb_akun` VALUES (10, '$2y$10$u2ab2G2qVaBfHMm84JNFFO7K7QZO4PfaNP91JXitF8owWgkIFdvRW', '4321', 'ahmad', '1', 'pilkom', 'default.png');

-- ----------------------------
-- Table structure for tb_detail_hasil
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail_hasil`;
CREATE TABLE `tb_detail_hasil`  (
  `id_detail_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_akun` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_hasil`) USING BTREE,
  INDEX `id_soal`(`id_soal`) USING BTREE,
  INDEX `tb_detail_hasil_ibfk_1`(`id_akun`) USING BTREE,
  CONSTRAINT `tb_detail_hasil_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_detail_hasil_ibfk_2` FOREIGN KEY (`id_soal`) REFERENCES `tb_tes` (`id_soal`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 403 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_detail_hasil
-- ----------------------------
INSERT INTO `tb_detail_hasil` VALUES (323, 1, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (324, 2, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (325, 3, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (326, 4, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (327, 5, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (328, 6, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (329, 7, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (330, 8, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (331, 9, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (332, 10, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (333, 11, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (334, 12, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (335, 13, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (336, 14, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (337, 15, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (338, 16, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (339, 17, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (340, 18, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (341, 19, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (342, 20, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (343, 21, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (344, 22, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (345, 23, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (346, 24, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (347, 25, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (348, 26, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (349, 27, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (350, 28, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (351, 29, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (352, 30, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (353, 31, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (354, 32, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (355, 33, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (356, 34, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (357, 35, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (358, 36, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (359, 37, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (360, 38, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (361, 39, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (362, 40, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (363, 41, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (364, 42, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (365, 43, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (366, 44, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (367, 45, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (368, 46, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (369, 47, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (370, 48, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (371, 49, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (372, 50, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (373, 51, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (374, 52, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (375, 53, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (376, 54, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (377, 55, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (378, 56, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (379, 57, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (380, 58, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (381, 59, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (382, 60, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (383, 61, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (384, 62, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (385, 63, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (386, 64, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (387, 65, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (388, 66, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (389, 67, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (390, 68, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (391, 69, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (392, 70, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (393, 71, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (394, 72, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (395, 73, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (396, 74, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (397, 75, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (398, 76, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (399, 77, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (400, 78, 'tidak', 9);
INSERT INTO `tb_detail_hasil` VALUES (401, 79, 'ya', 9);
INSERT INTO `tb_detail_hasil` VALUES (402, 80, 'ya', 9);

-- ----------------------------
-- Table structure for tb_hasil_tes
-- ----------------------------
DROP TABLE IF EXISTS `tb_hasil_tes`;
CREATE TABLE `tb_hasil_tes`  (
  `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT,
  `id_akun` int(11) NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `id_rekomendasi` int(11) NULL DEFAULT NULL,
  `jenis_gaya_belajar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_hasil_tes`) USING BTREE,
  INDEX `id_akun`(`id_akun`) USING BTREE,
  INDEX `id_rekomendasi`(`id_rekomendasi`) USING BTREE,
  CONSTRAINT `fk1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_hasil_tes_ibfk_2` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_hasil_tes
-- ----------------------------
INSERT INTO `tb_hasil_tes` VALUES (1, 7, NULL, NULL, 'Diverger');
INSERT INTO `tb_hasil_tes` VALUES (2, 8, NULL, NULL, 'Assimilator');
INSERT INTO `tb_hasil_tes` VALUES (5, 9, 'AKOMODATOR (Pengalaman Konkret/Penguji Coba Aktif) memiliki pendekatan yang paling praktis, dengan keinginan kuat untuk melakukan daripada memikirkan. Ketika mereka belajar, mereka akan bertanya “bagaimana jika” dan “mengapa tidak?” untuk mendukung pendekatan dengan aksinya. Mereka tidak menyukai hal rutin dan akan mengambil risiko kreatif untuk melihat apa yang akan terjadi. Mereka belajar lebih baik ketika belajar sendiri dari pada dengan orang lain.', 3, 'Akomodator');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_join_kelas
-- ----------------------------
INSERT INTO `tb_join_kelas` VALUES (5, 6, 4);
INSERT INTO `tb_join_kelas` VALUES (6, 7, 4);
INSERT INTO `tb_join_kelas` VALUES (7, 8, 5);
INSERT INTO `tb_join_kelas` VALUES (8, 9, 5);
INSERT INTO `tb_join_kelas` VALUES (9, 9, 6);

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_kelas
-- ----------------------------
INSERT INTO `tb_kelas` VALUES (4, NULL, '90kelaz', 'kelas9', 6);
INSERT INTO `tb_kelas` VALUES (5, NULL, 'klz10', 'kelas10', 6);
INSERT INTO `tb_kelas` VALUES (6, NULL, 'krk08', 'kelasa, rabu, kamis', 10);

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_rekomendasi
-- ----------------------------
INSERT INTO `tb_rekomendasi` VALUES (1, 'Assimilator', 'Dalam mengajar, guru hendaknya memberikan materi yang bersifat abstrak sehingga siswa dituntut untuk mampu memahami dan mengolah konsep abstrak tersebut. selain itu, guru juga dapat menggunakan metode pembelajaran ceramah dan memberikan materi untuk dibaca dan dianalisis oleh siswa', 'Ilmuan, Peneliti, Sistem Informasi', 'Matematika, Ilmu Fisika');
INSERT INTO `tb_rekomendasi` VALUES (2, 'Converger', 'Dalam mengajar, guru dapat menggunakan metode problem based learning sehingga siswa dituntut untuk memecahkan masalah, mengambil keputusan, dan menemiukan solusi dari suatu permasalahan. Selain itu guru juga dapat mengadakan pembelajaran praktik atau eksperimen.', 'Pekerja Teknik, Kesehatan, Teknologi', 'Teknik, Kesehatan');
INSERT INTO `tb_rekomendasi` VALUES (3, 'Akomodator', 'Dalam mengajar, guru hendaknya memperbanyak pembelajaran praktik dan memberikan pembelajaran berbasis proyek sehingga siswa dapat lebih aktif dalam terlibat secara langsung dalam proses pembelajaran.', 'Sales, Pelayanan Sosial, Pendidikan', 'Pendidikan, Ilmu Komunikasi, Perawat');
INSERT INTO `tb_rekomendasi` VALUES (4, 'Diverger', 'Dalam mengajar, guru hendaknya memperbanyak kegiatan diskusi yang dapat membuat peserta didik aktif dalam menyampaikan ide-ide serta pendapat. Selain itu, guru juga dapat menuntun siswa untuk belajar secara berkelompok.', 'Pelayanan Sosial, Seniman', 'Seni, Inggris, Sejarah, Psikologi');

-- ----------------------------
-- Table structure for tb_tes
-- ----------------------------
DROP TABLE IF EXISTS `tb_tes`;
CREATE TABLE `tb_tes`  (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_soal` int(11) NOT NULL,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tipe` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_soal`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_tes
-- ----------------------------
INSERT INTO `tb_tes` VALUES (1, 1, 'Saya memiliki keyakinan kuat tentang apa yang benar dan salah, baik dan buruk', 'T');
INSERT INTO `tb_tes` VALUES (2, 2, 'Saya sering bertindak tanpa mempertimbangkan konsekuensi yang mungkin timbul', 'A');
INSERT INTO `tb_tes` VALUES (3, 3, 'Saya cenderung memecahkan masalah menggunakan pendekatan langkah demi langkah', 'T');
INSERT INTO `tb_tes` VALUES (4, 4, 'Saya percaya bahwa prosedur dan kebijakan itu membatasi seseorang', 'A');
INSERT INTO `tb_tes` VALUES (5, 5, 'Saya memiliki reputasi untuk mengatakan apa yang saya pikirkan, secara sederhana dan langsung', 'P');
INSERT INTO `tb_tes` VALUES (6, 6, 'Saya sering menemukan bahwa tindakan yang didasarkan pada perasaan sama sehatnya dengan tindakan yang didasarkan pada kehati-hatian', 'A');
INSERT INTO `tb_tes` VALUES (7, 7, 'Saya suka jenis pekerjaan di mana saya punya waktu untuk persipan dan implementasi yang menyeluruh', 'R');
INSERT INTO `tb_tes` VALUES (8, 8, 'Saya sering bertanya kepada orang-orang tentang asumsi dasar mereka', 'T');
INSERT INTO `tb_tes` VALUES (9, 9, 'Yang paling penting adalah apakah sesuatu berhasil dalam praktiknya', 'P');
INSERT INTO `tb_tes` VALUES (10, 10, 'Saya aktif mencari pengalaman baru', 'A');
INSERT INTO `tb_tes` VALUES (11, 11, 'Ketika saya mendengar tentang ide atau pendekatan baru, saya segera mulai memikirkan bagaimana menerapkannya dalam praktik', 'P');
INSERT INTO `tb_tes` VALUES (12, 12, 'Saya tertarik pada disiplin diri seperti memerhatikan diet saya, melakukan olahraga teratur, berpegang pada rutinitas tetap, dll', 'T');
INSERT INTO `tb_tes` VALUES (13, 13, 'Saya bangga melakukan pekerjaan menyeluruh', 'R');
INSERT INTO `tb_tes` VALUES (14, 14, 'Saya bergaul dengan sangat baik kepada orang-orang yang logis dan analitis, namun kurang cocok dengan orang-orang yang spontan dan \'tidak rasional\'', 'T');
INSERT INTO `tb_tes` VALUES (15, 15, 'Saya berhati-hati dalam menafsirkan data dan menghindari mengambil kesimpulan', 'R');
INSERT INTO `tb_tes` VALUES (16, 16, 'Saya suka mengambil keputusan dengan hati-hati setelah mempertimbangkan banyak alternatif', 'R');
INSERT INTO `tb_tes` VALUES (17, 17, 'Saya lebih tertarik pada ide-ide baru dan tidak biasa daripada yang praktis', 'A');
INSERT INTO `tb_tes` VALUES (18, 18, 'Saya tidak suka hal hal yang tidak teratur dan lebih suka menyesuaikan berbagai hal ke dalam pola yang koheren', 'T');
INSERT INTO `tb_tes` VALUES (19, 19, 'Saya menerima dan tetap berpegang pada prosedur dan kebijakan yang ditetapkan selama saya menganggapnya sebagai cara yang efisien untuk menyelesaikan pekerjaan', 'P');
INSERT INTO `tb_tes` VALUES (20, 20, 'Saya suka menghubungkan tindakan saya dengan asas, standar, atau kepercayaan umum', 'T');
INSERT INTO `tb_tes` VALUES (21, 21, 'Dalam diskusi, saya suka langsung ke intinya', 'P');
INSERT INTO `tb_tes` VALUES (22, 22, 'Saya cenderung memiliki hubungan yang jauh dan agak formal dengan orang-orang di tempat kerja', 'T');
INSERT INTO `tb_tes` VALUES (23, 23, 'Saya berhasil mengatasi tantangan menangani sesuatu yang baru dan berbeda', 'A');
INSERT INTO `tb_tes` VALUES (24, 24, 'Saya menikmati orang-orang spontan yang suka bersenang-senang', 'A');
INSERT INTO `tb_tes` VALUES (25, 25, 'Saya memperhatikan detail dengan cermat sebelum sampai pada kesimpulan', 'R');
INSERT INTO `tb_tes` VALUES (26, 26, 'Saya merasa sulit untuk menghasilkan ide hanya dengan impulsif', 'T');
INSERT INTO `tb_tes` VALUES (27, 27, 'Saya yakin akan langsung ke pokok permasalahan', 'P');
INSERT INTO `tb_tes` VALUES (28, 28, 'Saya berhati-hati untuk tidak mengambil kesimpulan terlalu cepat', 'R');
INSERT INTO `tb_tes` VALUES (29, 29, 'Saya lebih suka memiliki sumber informasi sebanyak mungin - semakin  banyak informasi untuk dipikirkan semakin baik', 'R');
INSERT INTO `tb_tes` VALUES (30, 30, 'Orang yang sembrono dan dangkal yang tidak menganggap serius sesuatu biasanya membuat saya kesal', 'T');
INSERT INTO `tb_tes` VALUES (31, 31, 'Saya mendengarkan sudut pandang orang lain sebelum mengedepankan pandangan saya sendiri', 'R');
INSERT INTO `tb_tes` VALUES (32, 32, 'Saya cenderung terbuka tentang perasaan saya', 'A');
INSERT INTO `tb_tes` VALUES (33, 33, 'Dalam diskusi, saya menikmati menonton plotting dan skema dari peserta lain', 'R');
INSERT INTO `tb_tes` VALUES (34, 34, 'Saya lebih suka menanggapi peristiwa dengan cara yang spontan dan fleksibel daripada merencanakan segala sesuatunya sebelumnya', 'A');
INSERT INTO `tb_tes` VALUES (35, 35, 'Saya cenderung tertarik pada teknik seperti diagram alir, rencana darurat, dll', 'P');
INSERT INTO `tb_tes` VALUES (36, 36, 'Saya khawatir jika saya harus terburu-buru bekerja untuk memenuhi tenggat waktu yang ketat', 'R');
INSERT INTO `tb_tes` VALUES (37, 37, 'Saya cenderung menilai ide orang berdasarkan manfaat praktis mereka', 'P');
INSERT INTO `tb_tes` VALUES (38, 38, 'Orang yang pendiam dan bijaksana cenderung membuat saya merasa tidak nyaman', 'A');
INSERT INTO `tb_tes` VALUES (39, 39, 'Saya sering merasa kesal dengan orang yang suka terburu-buru', 'R');
INSERT INTO `tb_tes` VALUES (40, 40, 'Lebih penting menikmati saat ini daripada memikirkan masa lalu atau masa depan', 'A');
INSERT INTO `tb_tes` VALUES (41, 41, 'Saya pikir keputusan yang didasarkan pada analisis yang cermat terhadap semua informasi lebih baik daripada yang didasarkan pada intuisi', 'R');
INSERT INTO `tb_tes` VALUES (42, 42, 'Saya cenderung perfeksionis', 'T');
INSERT INTO `tb_tes` VALUES (43, 43, 'Dalam diskusi, saya biasanya menghasilkan banyak ide spontan', 'A');
INSERT INTO `tb_tes` VALUES (44, 44, 'Dalam pertemuan, saya mengemukakan ide-ide praktis dan realistis', 'P');
INSERT INTO `tb_tes` VALUES (45, 45, 'Lebih sering daripada tidak, aturan ada untuk dilanggar', 'A');
INSERT INTO `tb_tes` VALUES (46, 46, 'Saya lebih suka mundur dari suatu situasi dan mempertimbankan semua perspektif', 'R');
INSERT INTO `tb_tes` VALUES (47, 47, 'Saya sering dapat melihat ketidak konsistenan dan kelemahan dalam argumen orang lain', 'T');
INSERT INTO `tb_tes` VALUES (48, 48, 'Pada keseimbangan saya berbicara lebih banyak daripada saya mendengarkan', 'A');
INSERT INTO `tb_tes` VALUES (49, 49, 'Saya sering menemukan cara yang lebih baik dan lebih praktis untuk menyelesaikan sesuatu', 'P');
INSERT INTO `tb_tes` VALUES (50, 50, 'Saya pikir laporan tertulis harus singkat dan langsung ke sasaran', 'P');
INSERT INTO `tb_tes` VALUES (51, 51, 'Saya percara bahwa pemikiran rasional dan logis harus menang', 'T');
INSERT INTO `tb_tes` VALUES (52, 52, 'Saya cenderung mendiskusikan hal-hal tertentu dengan orang-orang daripada terlibat dalam diskusi sosial', 'R');
INSERT INTO `tb_tes` VALUES (53, 53, 'Saya suka orang yang mendekati sesuatu secara realistis daripada secara teoritis', 'P');
INSERT INTO `tb_tes` VALUES (54, 54, 'Dalam diskusi, saya menjadi tidak sabar dengan masalah dan penyimpangan yang tidak relevan', 'P');
INSERT INTO `tb_tes` VALUES (55, 55, 'Jika saya memiliki laporan untuk ditulis, saya cenderung menghasilkan banyak draf sebelum menetapkan versi final', 'R');
INSERT INTO `tb_tes` VALUES (56, 56, 'Saya ingin mencoba berbagai hal untuk melihat apakah mereka berhasil dalam praktik', 'P');
INSERT INTO `tb_tes` VALUES (57, 57, 'Saya ingin mencapai jawaban melalui pendekatan logis', 'T');
INSERT INTO `tb_tes` VALUES (58, 58, 'Saya senang menjadi orang yang banyak bicara', 'A');
INSERT INTO `tb_tes` VALUES (59, 59, 'Dalam diskusi, saya sering menemukan/melihat diri saya sebagai orang yang realis, menjaga orang-orang tetap pada inti pembahasan, dan menghindari spekulasi liar', 'P');
INSERT INTO `tb_tes` VALUES (60, 60, 'Saya suka merenungkan banyak alternatif sebelum mengambil keputusan', 'R');
INSERT INTO `tb_tes` VALUES (61, 61, 'Dalam diskusi dengan orang-orang, saya sering menemukan bahwa saya adalah orang yang paling tidak memihak dan objektif', 'T');
INSERT INTO `tb_tes` VALUES (62, 62, 'Dalam diskusi, saya lebih cenderung mengadopsi \'profil rendah\' daripada memimpin dan melakukan sebagian besar pembicaraan', 'R');
INSERT INTO `tb_tes` VALUES (63, 63, 'Saya ingin bisa menghubungkan tidnakan saat ini dengan gambaran jangka panjang yang lebih besar', 'T');
INSERT INTO `tb_tes` VALUES (64, 64, 'Ketika ada yang salah, saya dengan senang hati mengabaikannya dan \'menyimpannya sebagai pengalaman\'', 'A');
INSERT INTO `tb_tes` VALUES (65, 65, 'Saya cenderung menolak ide liar dan spontan sebagai hal yang tidak praktis', 'P');
INSERT INTO `tb_tes` VALUES (66, 66, 'Sebaiknya pikirkan baik-baik sebelum mengambil tindakan', 'R');
INSERT INTO `tb_tes` VALUES (67, 67, 'Saya lebih sering mendengarkan daripada berbicara', 'R');
INSERT INTO `tb_tes` VALUES (68, 68, 'Saya cenderung keras pada orang yang sulit mengadopsi pendekatan yang logis', 'T');
INSERT INTO `tb_tes` VALUES (69, 69, 'Seringkali saya percaya bahwa bagian akhir akan membenarkan caranya', 'P');
INSERT INTO `tb_tes` VALUES (70, 70, 'Saya tidak keberatan menyakiti perasaan orng selama pekerjaan itu selesai', 'P');
INSERT INTO `tb_tes` VALUES (71, 71, 'Saya merasa formalitas memiliki tujuan dan rencana tertentu yang menyesakkan', 'A');
INSERT INTO `tb_tes` VALUES (72, 72, 'Saya biasanya salah satu orang yang membuat pesta menjadi hidup', 'A');
INSERT INTO `tb_tes` VALUES (73, 73, 'Saya melakukan apapun yang praktis untuk menyelesaikan pekerjaan', 'P');
INSERT INTO `tb_tes` VALUES (74, 74, 'Saya cepat bosan dengan pekerjaan metodis dan detail', 'A');
INSERT INTO `tb_tes` VALUES (75, 75, 'Saya tertarik untuk mengeksplorasi asumsi dasar, prinsip dan teori yang mendasari berbagai hal dan peristiwa', 'T');
INSERT INTO `tb_tes` VALUES (76, 76, 'Saya selalu tertarik untuk mencari tahu apa yang orang pikirkan', 'R');
INSERT INTO `tb_tes` VALUES (77, 77, 'Saya suka rapat dijalaknan pada garis metodi, berpegang teguh pada agenda yang telah ditetapkan', 'T');
INSERT INTO `tb_tes` VALUES (78, 78, 'Saya menghindari topik subjektif (Bias) atau ambigu (Tidak jelas)', 'T');
INSERT INTO `tb_tes` VALUES (79, 79, 'Saya menikmati drama dan kegembiraan dari situasi ktisis', 'A');
INSERT INTO `tb_tes` VALUES (80, 80, 'Orang sering menganggap saya tidak peka terhadap perasaan mereka', 'P');

SET FOREIGN_KEY_CHECKS = 1;
