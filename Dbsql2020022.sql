/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.38-MariaDB : Database - prj2020022tugasakhir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prj2020022tugasakhir` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prj2020022tugasakhir`;

/*Table structure for table `aadmin` */

DROP TABLE IF EXISTS `aadmin`;

CREATE TABLE `aadmin` (
  `adminid` varchar(50) NOT NULL,
  `adminnamalengkap` varchar(50) DEFAULT NULL,
  `adminpass` varchar(50) DEFAULT NULL,
  `adminlevel` int(11) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `aadmin` */

insert  into `aadmin`(`adminid`,`adminnamalengkap`,`adminpass`,`adminlevel`) values ('joyokilatmoko@gmail.com','Joyo Kilat Moko','a02c257fcb0818b7f88bca4a3ae58472',1);

/*Table structure for table `bantu` */

DROP TABLE IF EXISTS `bantu`;

CREATE TABLE `bantu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idbuku` char(10) DEFAULT NULL,
  `idjudul` varchar(50) DEFAULT NULL,
  `idkategori` varchar(50) DEFAULT NULL,
  `idstatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `bantu` */

/*Table structure for table `bantubalik` */

DROP TABLE IF EXISTS `bantubalik`;

CREATE TABLE `bantubalik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idbuku` char(10) DEFAULT NULL,
  `iddetailjudul` varchar(50) DEFAULT NULL,
  `iddetailkategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `bantubalik` */

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `kdbuku` char(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `nomorak` int(11) DEFAULT NULL,
  `lantai` int(11) DEFAULT NULL,
  `deskripsi` text,
  `jumlah` varchar(50) DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  PRIMARY KEY (`kdbuku`,`kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`kdbuku`,`judul`,`kategori`,`nomorak`,`lantai`,`deskripsi`,`jumlah`,`tglinput`) values ('BK-1','Matahari 23','Direktori',3,3,'ini adalah buku tumbuhan','Tersedia','2022-08-24'),('BK-10','Manusia Serigala','Almanak',2,3,'Manusia Serigala adalah buku bohongan','Dipinjam','2021-11-29'),('BK-2','Binatang Dan Tumbuhan','Ensklopedia',2,12,'gsfss','Tersedia','2022-08-18'),('BK-3','Ruang Dan Waktu','Ensklopedia',3,3,'dadadadad','Tersedia','2022-08-10'),('BK-4','Agama','Pegangan',3,3,'cafafafa','Tersedia','2022-08-16'),('BK-5','Bahasa Jepang','Kamus',3,2,'dadadad','Dipinjam','2022-08-02'),('BK-6','Bahasa Prancis','Kamus',3,3,'dadadadadad','Dipinjam','2022-08-02'),('BK-7','Bahasa Mandarin','Kamus',3,3,'Ini buku berbahasa china','Tersedia','2022-08-03'),('BK-8','Manusia','Pegangan',2,1,'Ini adalah buku pegangan','Tersedia','2022-08-04'),('BK-9','Citra Dan Kasih','Kamus',2,3,'Makanan Biasa','','2022-12-30');

/*Table structure for table `bukukeluar` */

DROP TABLE IF EXISTS `bukukeluar`;

CREATE TABLE `bukukeluar` (
  `nokeluar` char(20) NOT NULL,
  `tglkeluar` date DEFAULT NULL,
  `peminjam` varchar(40) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `nomor` char(14) DEFAULT NULL,
  PRIMARY KEY (`nokeluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bukukeluar` */

insert  into `bukukeluar`(`nokeluar`,`tglkeluar`,`peminjam`,`alamat`,`nomor`) values ('202208280002','0000-00-00','Vra Widia Putri','Sijunjung','082293881233');

/*Table structure for table `bukukembali` */

DROP TABLE IF EXISTS `bukukembali`;

CREATE TABLE `bukukembali` (
  `nokeluar` char(20) NOT NULL,
  `tglkeluar` date DEFAULT NULL,
  `peminjam` varchar(40) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `nomor` char(14) DEFAULT NULL,
  PRIMARY KEY (`nokeluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bukukembali` */

insert  into `bukukembali`(`nokeluar`,`tglkeluar`,`peminjam`,`alamat`,`nomor`) values ('202208280001','2022-08-28','Jaya Putra Bumi Perkata','Lubuk Sikaping','082293881233'),('202208290001','2022-08-29','Mikazuki Tomoya','Jepang','1111');

/*Table structure for table `detailkeluar` */

DROP TABLE IF EXISTS `detailkeluar`;

CREATE TABLE `detailkeluar` (
  `detailidkeluar` bigint(20) NOT NULL AUTO_INCREMENT,
  `detailnokeluar` char(20) DEFAULT NULL,
  `detailkdbuku` char(20) DEFAULT NULL,
  `detailjudul` varchar(50) DEFAULT NULL,
  `detailkategori` varchar(50) DEFAULT NULL,
  `detailstatus` int(11) DEFAULT NULL,
  `detailqty` int(11) DEFAULT NULL,
  PRIMARY KEY (`detailidkeluar`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

/*Data for the table `detailkeluar` */

insert  into `detailkeluar`(`detailidkeluar`,`detailnokeluar`,`detailkdbuku`,`detailjudul`,`detailkategori`,`detailstatus`,`detailqty`) values (103,'202208280002','BK-4','Agama','Pegangan',NULL,NULL),(104,'202208280002','BK-5','Bahasa Jepang','Kamus',NULL,NULL),(105,'202208280002','BK-6','Bahasa Prancis','Kamus',NULL,NULL);

/*Table structure for table `detailkembali` */

DROP TABLE IF EXISTS `detailkembali`;

CREATE TABLE `detailkembali` (
  `detailidkeluar` bigint(20) NOT NULL AUTO_INCREMENT,
  `detailnokeluar` char(20) DEFAULT NULL,
  `detailkdbuku` char(20) DEFAULT NULL,
  `detailjudul` varchar(50) DEFAULT NULL,
  `detailkategori` varchar(50) DEFAULT NULL,
  `detailstatus` int(11) DEFAULT NULL,
  `detailqty` int(11) DEFAULT NULL,
  PRIMARY KEY (`detailidkeluar`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

/*Data for the table `detailkembali` */

insert  into `detailkembali`(`detailidkeluar`,`detailnokeluar`,`detailkdbuku`,`detailjudul`,`detailkategori`,`detailstatus`,`detailqty`) values (90,'202208280001','BK-1','Matahari 23','Direktori',NULL,NULL),(91,'202208280001','BK-2','Binatang Dan Tumbuhan','Ensklopedia',NULL,NULL),(92,'202208280001','BK-3','Ruang Dan Waktu','Ensklopedia',NULL,NULL),(93,'202208280001','BK-1','Matahari 23','Direktori',NULL,NULL),(94,'202208280001','BK-2','Binatang Dan Tumbuhan','Ensklopedia',NULL,NULL),(95,'202208280001','BK-3','Ruang Dan Waktu','Ensklopedia',NULL,NULL),(96,'202208290001','BK-4','Agama','Pegangan',NULL,NULL),(97,'202208290001','BK-7','Bahasa Mandarin','Kamus',NULL,NULL),(98,'202208290001','BK-1','Matahari 23','Direktori',NULL,NULL);

/*Table structure for table `pinjam` */

DROP TABLE IF EXISTS `pinjam`;

CREATE TABLE `pinjam` (
  `kdpinjam` char(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomor` char(13) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tglpnj` date DEFAULT NULL,
  `tglkmb` date DEFAULT NULL,
  PRIMARY KEY (`kdpinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pinjam` */

insert  into `pinjam`(`kdpinjam`,`nama`,`nomor`,`alamat`,`tglpnj`,`tglkmb`) values ('PM02082022-1','Jaya Putra Bumi Perkalimat','082293881233','Lubuk Sikaping','2022-08-02','2022-09-08'),('PM02082022-2','Joyo Kilat Moko','082293881233','Lubuk Pinang','2022-08-02','2022-08-11'),('PM02082022-3','Noviatul Mukhlis','08118237712','Pariaman','2022-08-02','2022-08-16'),('PM02082022-4','Rahmad agung','082287336122','Pariaman','2022-08-03','2022-08-26'),('PM02082022-5','Jaya Putra Bumi Perkata','082293881233','Lubuk Sikaping','2022-08-03','2022-08-24'),('PM05082022-6','Jaya Putra Bumi Perkata','082293881233','Lubuk Sikaping','2022-08-11','2022-08-15'),('PM05082022-7','Jaya Putra Bumi Perkataadad','082293881233','Lubuk Pinang','2022-08-24','2022-08-11');

/* Trigger structure for table `detailkeluar` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `pin` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `pin` AFTER INSERT ON `detailkeluar` FOR EACH ROW BEGIN
UPDATE buku SET jumlah="Dipinjam" WHERE kdbuku=new.detailkdbuku;
    END */$$


DELIMITER ;

/* Trigger structure for table `detailkembali` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kem` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kem` AFTER INSERT ON `detailkembali` FOR EACH ROW BEGIN
UPDATE buku SET jumlah="Tersedia" WHERE kdbuku=new.detailkdbuku;
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
