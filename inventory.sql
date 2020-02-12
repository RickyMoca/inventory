/*
SQLyog Professional v12.5.1 (32 bit)
MySQL - 10.4.11-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` varchar(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stok_awal` int(11) DEFAULT NULL,
  `cogs` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_sku` (`no_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id`,`no_sku`,`nama_barang`,`stok_awal`,`cogs`,`status`) values 
(1,'SH0001','SANDAL SEHAT',50,20000,'Active'),
(2,'SH0002','THERAFLEX',10,15000,'Archive'),
(3,'RT0003','PEMBERSIH SEKAT KERAMIK',10,15000,'Archive'),
(4,'SH0223777','Tile Reform',20,25000,'Active'),
(5,'SH0223333','Sekukuku',20,25000,'Active'),
(6,'SH0223777','Sekukuku',20,25000,'Active'),
(8,'SH0223777','SANDAL SEHAT',20,25000,'Active'),
(9,'SH0223777','Tile Reform',20,25000,'Active'),
(10,'SH0223777','Tile Reform',20,25000,'Active'),
(11,'SH0223777','Sekulumu',1000,2250,'Active'),
(12,'SH0223777','Tile Reform',1000,25000,'Active'),
(13,'SH0223777','Sukuus',20,25000,'Active'),
(14,'SH0223','sugus',1000,25000,'Active'),
(15,'SH0223','Tile Reform',20,2250,'Active'),
(16,'SH0223777','oooooooo',20,25000,'Active'),
(17,'SH0223777','Tile Reform',1000,25000,'active'),
(19,'SH0223777','Kaka',20,25000,'active');

/*Table structure for table `purchase` */

DROP TABLE IF EXISTS `purchase`;

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` varchar(11) DEFAULT NULL,
  `tanggal_beli` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_sku` (`no_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `purchase` */

insert  into `purchase`(`id`,`no_sku`,`tanggal_beli`,`qty`,`keterangan`) values 
(1,'0','2020-02-12 20:01:03',20,NULL);

/*Table structure for table `return` */

DROP TABLE IF EXISTS `return`;

CREATE TABLE `return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` int(11) DEFAULT NULL,
  `tanggal_return` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `return` */

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sales` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `no_sku` varchar(11) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `status` enum('Completed','Cancel') DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sales` */

insert  into `sales`(`id`,`id_sales`,`nama`,`tlp`,`no_sku`,`harga_satuan`,`qty`,`ongkir`,`discount`,`payment`,`status`,`tanggal_beli`,`keterangan`) values 
(1,7987778,'Mohamad Ricky','089877665677','SH001',179000,2,59000,10000,'cod','Completed','2020-02-12',NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
