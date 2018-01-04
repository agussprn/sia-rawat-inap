/*
SQLyog Ultimate v9.20 
MySQL - 5.1.37 : Database - rawatinap
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rawatinap` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rawatinap`;

/*Table structure for table `bayar` */

DROP TABLE IF EXISTS `bayar`;

CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `id_rawatinap` int(11) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  UNIQUE KEY `id_bayar` (`id_bayar`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `bayar` */

insert  into `bayar`(`id_bayar`,`id_rawatinap`,`tgl_bayar`,`total_bayar`) values (4,2,'2015-09-04',500000);

/*Table structure for table `dokter` */

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dok` varchar(30) DEFAULT NULL,
  `alamat_dok` varchar(100) DEFAULT NULL,
  `spesialisasi` varchar(30) DEFAULT NULL,
  UNIQUE KEY `id_dokter` (`id_dokter`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `dokter` */

insert  into `dokter`(`id_dokter`,`nama_dok`,`alamat_dok`,`spesialisasi`) values (1,'Kaila','Yogyakarta','Otak'),(2,'Adzkiya','Kulon Progo','Penyakit Dalam'),(3,'Khoirunnisa','Sentolo','Syaraf');

/*Table structure for table `pasien` */

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `id_dokter` varchar(11) DEFAULT NULL,
  UNIQUE KEY `id_pasien` (`id_pasien`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `pasien` */

insert  into `pasien`(`id_pasien`,`nama`,`alamat`,`keluhan`,`id_dokter`) values (8,'Wati','Yogyakarta','Demam Tinggi','2'),(12,'Doni','Yogyakarta','Sesak Nafas','2'),(6,'Susi','Yogyakarta','Kaki Sulit Digerakkan','2'),(22,'Yunanto','Yogyakarta','Pusing','1'),(14,'Ahmad','Yogyakarta','Mual','2'),(21,'Safitri','Yogyakarta','Sakit Punggung','3'),(23,'Saiful Bahri','Yogyakarta','Mual','2');

/*Table structure for table `petugas` */

DROP TABLE IF EXISTS `petugas`;

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `jabatan` varchar(10) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  UNIQUE KEY `id_petugas` (`id_petugas`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `petugas` */

insert  into `petugas`(`id_petugas`,`nama`,`jabatan`,`username`,`password`) values (3,'Sukijo','ADMIN','admin','1234567'),(5,'Klimin','CS','klimin','12345'),(6,'Sukinem','CS','sukinem','12345');

/*Table structure for table `rawat_inap` */

DROP TABLE IF EXISTS `rawat_inap`;

CREATE TABLE `rawat_inap` (
  `id_rawatinap` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruang` int(11) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  UNIQUE KEY `id_rawatinap` (`id_rawatinap`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rawat_inap` */

insert  into `rawat_inap`(`id_rawatinap`,`id_ruang`,`id_pasien`,`tgl_masuk`,`tgl_keluar`) values (2,2,23,'2015-10-09','2015-09-04');

/*Table structure for table `ruang` */

DROP TABLE IF EXISTS `ruang`;

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(20) DEFAULT NULL,
  `nama_gedung` varchar(20) DEFAULT NULL,
  `biaya_per_hari` int(11) DEFAULT NULL,
  UNIQUE KEY `id_ruang` (`id_ruang`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ruang` */

insert  into `ruang`(`id_ruang`,`nama_ruang`,`nama_gedung`,`biaya_per_hari`) values (2,'Cempaka 03','Poli Bedah',100000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
