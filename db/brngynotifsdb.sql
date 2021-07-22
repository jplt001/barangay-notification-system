/*
SQLyog Community v12.4.1 (32 bit)
MySQL - 10.1.16-MariaDB : Database - brngynotifsdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `announcements` */

DROP TABLE IF EXISTS `announcements`;

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `status` int(11) DEFAULT '0',
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `updated_when` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_when` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `announcements` */

insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`) values (1,'asdf','sdfasasdfasdf',1,'2017-11-25 19:47:37',1,NULL,NULL,NULL,NULL,0);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`) values (2,'asdf','sdfasdfdasfasdf',0,'2017-11-25 19:47:48',1,NULL,NULL,NULL,NULL,0);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`) values (3,'asdfasdf','asdfasdf',0,'2017-11-26 11:36:23',NULL,NULL,NULL,NULL,NULL,0);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`) values (4,'test','test',0,'2017-11-26 11:36:56',NULL,NULL,NULL,NULL,NULL,0);

/*Table structure for table `incident_report` */

DROP TABLE IF EXISTS `incident_report`;

CREATE TABLE `incident_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) DEFAULT NULL,
  `incident_reported` text,
  `casualties` varchar(250) DEFAULT NULL,
  `date_of_incident` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `incident_report` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `resident_alert` */

DROP TABLE IF EXISTS `resident_alert`;

CREATE TABLE `resident_alert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(250) DEFAULT NULL,
  `resident_id` int(11) DEFAULT NULL,
  `alert_type` int(11) DEFAULT '0',
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_action_taken` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `resident_alert` */

/*Table structure for table `residents` */

DROP TABLE IF EXISTS `residents`;

CREATE TABLE `residents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `address` text,
  `barangay` varchar(250) DEFAULT NULL,
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_when` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `residents` */

insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (1,'asdf','asdfasdf','asdfasdf','asdasdas','asdf','asdasd','2017-11-26 15:51:56',1,1,1,'2017-11-26 07:51:56');
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (2,'Joseph Patrick','Lagonoy','Timcang','9123456789','Bayan Luma IV\r\nImus City Cavite','asdfasdfasdf','2017-11-26 16:25:15',1,0,1,'2017-11-26 07:50:39');
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (3,'Maria Mea','asd','Basanal','9123456789','asdfasdf','Las Piñas','2017-11-26 16:09:46',1,1,1,'2017-11-26 08:09:46');
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (4,'Joseph Patrick','YEHEY','Timcang','9123456789','Bayan Luma IV\r\nImus City Cavite','asdf','2017-11-26 16:25:23',1,0,1,'2017-11-26 07:50:39');
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (5,'test','test','test','test','asdfasdfasdf','asdfasdf','2017-11-26 15:52:24',1,1,1,'2017-11-26 07:52:24');
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (6,'Joseph','Patricks','Timcang','9123456789','Holiday Village\r\nBayan Luma IV','dasd','2017-11-26 16:25:03',1,0,1,'2017-11-26 07:50:39');
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`) values (7,'Test','Dddddd','Testing','9123456789','Holiday\r\nBayan Luma IV','asd','2017-11-26 15:52:45',1,1,1,'2017-11-26 07:52:45');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`) values (1,'Joseph Patrick Timcang','jplt001','jpltimcang@1go.ph','$2y$10$rhlnQkfyiHQnKZqWXD4b6uBAVEEDttouxnP7csyGLB2sBPqXkv7zi','PjkHgN4WeYlHdd6255o9qiLk3FkgXmX7ua8wJ1XFvjuoN64RAx03kAKuin4c','2017-11-25 08:40:44','2017-11-25 08:40:44',NULL,NULL,NULL,NULL,NULL,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`) values (2,'asdfasdf asdfasdf',NULL,'jpltimcang@1gotech.com','jplt',NULL,NULL,NULL,'asdfasdf','asdfasdf','asdfasdf',NULL,'asdfasdfasdf',1);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`) values (4,'Joseph Patrick Timcang',NULL,'jplt.developer001@gmail.com','$2y$10$spFyhEuu2ZIuBdJo/uCGd.2LzVdWnsWI.rcXQs87JUBOJw1vGviJm',NULL,NULL,NULL,'Joseph Patrick','Patrick','Timcang',NULL,'Bayan Luma IV\r\nImus City Cavite',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
