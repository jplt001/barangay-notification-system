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
  `thumbnail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `announcements` */

insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (1,'asdf','sdfasasdfasdf',1,'2017-11-25 19:47:37',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (2,'asdf','sdfasdfdasfasdf',0,'2017-11-25 19:47:48',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (3,'asdfasdf','asdfasdf',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (4,'test','test',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (5,'asdfasdfasdfasdfasdf','<p>Here goes the initial content of the editor.</p>\r\n\r\n<p><strong>asdfasdfasdf</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>asdfasdfasdfasdf</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"test\" src=\"https://i.ytimg.com/vi/F9DardwmAZ8/maxresdefault.jpg\" style=\"height:720px; width:1280px\" /></strong></p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (6,'JPLTIMCANG','<p>Here goes the initial content of the editor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.ytimg.com/vi/F9DardwmAZ8/maxresdefault.jpg\" style=\"height:68px; width:120px\" /></p>\r\n\r\n<p>test 123123123123123</p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (7,'asdfasdf','<p>Here goes the initial conteasdfasdfnt of the editor.</p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,'http://localhost/brngy_notifs/trunk/brgy_notif/public/uploads/2017120308162426dea656af753a8fe364f3191ae1e44d_Bloodbank.PNG');
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (8,NULL,'<p>Here goes the initial content of the editor.dasfasdfasdf</p>\r\n\r\n<p>asdfasd<strong>assdfasdfasdf</strong></p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,'http://localhost/brngy_notifs/trunk/brgy_notif/public/uploads/20171203083134494a166df269e6d44a79dd130d50e2ab_21439365_1745657718809603_347047634_o.jpg');
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (9,'Joseph Patrick TImcang','<p>asdfasdfasdfasdf</p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,'http://localhost/brngy_notifs/trunk/brgy_notif/public/uploads/201712030833096213721bc98b10f335e449a37dbe3209_a3822018036_16.jpg');

/*Table structure for table `baranagay_alert_attachments` */

DROP TABLE IF EXISTS `baranagay_alert_attachments`;

CREATE TABLE `baranagay_alert_attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay_alert_id` int(11) DEFAULT NULL,
  `link` text,
  `is_valid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `baranagay_alert_attachments` */

/*Table structure for table `barangay_alert` */

DROP TABLE IF EXISTS `barangay_alert`;

CREATE TABLE `barangay_alert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reported_by_id` int(11) DEFAULT NULL,
  `details` text,
  `alert_type` varchar(250) DEFAULT NULL,
  `action_taken_by` int(11) DEFAULT NULL,
  `is_action_taken` int(11) DEFAULT '0',
  `date_added` date DEFAULT NULL,
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `barangay_alert` */

insert  into `barangay_alert`(`id`,`reported_by_id`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (1,4,NULL,'asdf',NULL,0,'2018-01-14','2018-01-14 15:30:45');
insert  into `barangay_alert`(`id`,`reported_by_id`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (2,4,NULL,'adsfasdf',NULL,1,'2018-01-14','2018-01-14 15:30:45');
insert  into `barangay_alert`(`id`,`reported_by_id`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (3,4,NULL,'fasd',NULL,1,'2018-01-14','2018-01-14 12:16:50');
insert  into `barangay_alert`(`id`,`reported_by_id`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (4,4,NULL,'adsfasdf',NULL,1,'2018-01-14','2018-01-14 15:30:45');
insert  into `barangay_alert`(`id`,`reported_by_id`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (5,4,NULL,NULL,NULL,2,'2018-01-14','2018-01-14 12:16:50');

/*Table structure for table `chat_rooms` */

DROP TABLE IF EXISTS `chat_rooms`;

CREATE TABLE `chat_rooms` (
  `chat_room_id` int(11) NOT NULL,
  `resident_id` mediumblob,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `chat_rooms` */

/*Table structure for table `incident_report` */

DROP TABLE IF EXISTS `incident_report`;

CREATE TABLE `incident_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) DEFAULT NULL,
  `incident_reported` text,
  `casualties` varchar(250) DEFAULT NULL,
  `date_of_incident` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `incident_report` */

insert  into `incident_report`(`id`,`resident_id`,`incident_reported`,`casualties`,`date_of_incident`) values (1,1,'sdfasdfasdfasdf','1','2017-12-03 16:54:22');
insert  into `incident_report`(`id`,`resident_id`,`incident_reported`,`casualties`,`date_of_incident`) values (2,2,'sdfasasdfasdfasdfasdfas','100','2017-12-03 17:18:29');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `chat_room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`),
  KEY `chat_room_id` (`chat_room_id`),
  KEY `user_id` (`user_id`),
  KEY `chat_room_id_2` (`chat_room_id`),
  CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`chat_room_id`) REFERENCES `chat_rooms` (`chat_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `residents` */

DROP TABLE IF EXISTS `residents`;

CREATE TABLE `residents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `password` text,
  `contact_no` varchar(11) DEFAULT NULL,
  `address` text,
  `barangay` varchar(250) DEFAULT NULL,
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_when` datetime DEFAULT NULL,
  `validate_code` varchar(6) DEFAULT NULL,
  `is_validated` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `residents` */

insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`validate_code`,`is_validated`) values (1,'asdfasdf','asdfasdf','asdfasdf','asdf','asdf','$2y$10$bf6wBPR7WgVLYPFwA/pyYe/eb0pqow0XFINNIZxT9EVRxdo68wBxG',NULL,NULL,NULL,'2018-01-11 22:05:33',NULL,0,NULL,NULL,NULL,0);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`validate_code`,`is_validated`) values (2,'Joseph Patrick','Lagonoy','Timcang','josephpatricktimcang@gmail.com','jplt001','$2y$10$0GaRLM3QHQsIK0TLvyYyW.tEF28u/xKrOccKLRH44oh7udErnBNDS',NULL,NULL,NULL,'2018-01-13 16:28:16',NULL,0,NULL,NULL,NULL,0);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`validate_code`,`is_validated`) values (3,'asdfasdf','asdfasdf','asdfasdf','asdfasdf@gmail.com','jplt002','$2y$10$.uXP1.8YXujGOc3Vs3UFjexqI/l7Gq9LHRp0ac/l1z7X4fU7cm19S',NULL,NULL,NULL,'2018-01-14 12:39:45',NULL,0,NULL,NULL,NULL,0);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`validate_code`,`is_validated`) values (4,'Ma. Mea','we','Basanal','mmbasanal@1go.ph','mmbasanal','$2y$10$sqntCvXMeBwpUZX4HCZUOu3TzwJy0N5bI6WmdStLnaT7M/yTnqZDC',NULL,NULL,NULL,'2018-01-14 14:56:31',NULL,0,NULL,NULL,NULL,0);

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
  `deleted` int(11) DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`,`deleted`,`deleted_by`) values (1,'Joseph Patrick Timcang','jplt001','jpltimcang@1go.ph','$2y$10$rhlnQkfyiHQnKZqWXD4b6uBAVEEDttouxnP7csyGLB2sBPqXkv7zi','fqvBlYv8ssEZm7l3miVhOFwDjqohfJi49YayH12Czck0NL8cGqAn5MQOCB2j','2017-11-25 08:40:44','2017-11-25 08:40:44',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`,`deleted`,`deleted_by`) values (2,'asdfasdf asdfasdf',NULL,'jpltimcang@1gotech.com','jplt',NULL,NULL,NULL,'asdfasdf','asdfasdf','asdfasdf',NULL,'asdfasdfasdf',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`,`deleted`,`deleted_by`) values (4,'Joseph Patrick Timcang',NULL,'jplt.developer001@gmail.com','$2y$10$spFyhEuu2ZIuBdJo/uCGd.2LzVdWnsWI.rcXQs87JUBOJw1vGviJm',NULL,NULL,NULL,'Joseph Patrick','Patrick','Timcang',NULL,'Bayan Luma IV\r\nImus City Cavite',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`,`deleted`,`deleted_by`) values (5,'asdfasdf asdfasdfasdf','test123','jpltimcang@1gotech.com','$2y$10$UWk4Qx0IsyvzBc.LRoON6eanwGkkSLGFcWBmbT8afhVpjKzniqOii',NULL,NULL,NULL,'asdfasdf','asdfasdf','asdfasdfasdf',NULL,'asdfasdf',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position`,`address`,`created_by`,`deleted`,`deleted_by`) values (6,'test123 test','rwe123','jplt.developer001@gmail.com','$2y$10$MwKcP4zjnru9YqacSV3Y5.3JkAzlz5f3MR3EifC7zkzoBpJhk3zMO',NULL,NULL,NULL,'test123','testtt','test',NULL,'asdf',1,0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
