/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.1.31-MariaDB : Database - db_lscs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_lscs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_lscs`;

/*Table structure for table `tb_rekomendasi` */

DROP TABLE IF EXISTS `tb_rekomendasi`;

CREATE TABLE `tb_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT,
  `rek_cara_mengajar` text,
  `rek_pekerjaan` varchar(255) DEFAULT NULL,
  `rek_bidang_kuliah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_rekomendasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_rekomendasi` */

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(32) NOT NULL,
  `id_rekomendasi` int(11) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_rekomendasi` (`id_rekomendasi`),
  CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

/*Table structure for table `tb_akun` */

DROP TABLE IF EXISTS `tb_akun`;

CREATE TABLE `tb_akun` (
  `id_akun` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` varchar(8) DEFAULT NULL,
  `role` varchar(1) NOT NULL,
  `sekolah` varchar(50) DEFAULT NULL,
  `foto` blob,
  PRIMARY KEY (`id_akun`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `tb_akun_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_akun` */

/*Table structure for table `tb_hasil_tes` */

DROP TABLE IF EXISTS `tb_hasil_tes`;

CREATE TABLE `tb_hasil_tes` (
  `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT,
  `id_akun` varchar(32) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `id_rekomendasi` int(11) NOT NULL,
  PRIMARY KEY (`id_hasil_tes`),
  KEY `id_akun` (`id_akun`),
  KEY `id_rekomendasi` (`id_rekomendasi`),
  CONSTRAINT `tb_hasil_tes_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`),
  CONSTRAINT `tb_hasil_tes_ibfk_2` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tb_rekomendasi` (`id_rekomendasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_hasil_tes` */

/*Table structure for table `tb_tes` */

DROP TABLE IF EXISTS `tb_tes`;

CREATE TABLE `tb_tes` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_soal` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_tes` */

/*Table structure for table `tb_detail_hasil` */

DROP TABLE IF EXISTS `tb_detail_hasil`;

CREATE TABLE `tb_detail_hasil` (
  `id_detail_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_akun` varchar(32) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` int(1) NOT NULL,
  PRIMARY KEY (`id_detail_hasil`),
  KEY `id_akun` (`id_akun`),
  KEY `id_soal` (`id_soal`),
  CONSTRAINT `tb_detail_hasil_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`),
  CONSTRAINT `tb_detail_hasil_ibfk_2` FOREIGN KEY (`id_soal`) REFERENCES `tb_tes` (`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_detail_hasil` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
