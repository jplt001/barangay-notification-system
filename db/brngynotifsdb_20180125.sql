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

insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (3,'asdfasdf','asdfasdf',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (4,'test','test',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (5,'asdfasdfasdfasdfasdf','<p>Here goes the initial content of the editor.</p>\r\n\r\n<p><strong>asdfasdfasdf</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>asdfasdfasdfasdf</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"test\" src=\"https://i.ytimg.com/vi/F9DardwmAZ8/maxresdefault.jpg\" style=\"height:720px; width:1280px\" /></strong></p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (6,'JPLTIMCANG','<p>Here goes the initial content of the editor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.ytimg.com/vi/F9DardwmAZ8/maxresdefault.jpg\" style=\"height:68px; width:120px\" /></p>\r\n\r\n<p>test 123123123123123</p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,NULL);
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (7,'test 123123','<p>Here goes the initial conteasdfasdfnt of the editor.</p>',0,'2018-01-25 02:12:57',1,NULL,NULL,NULL,NULL,0,'http://localhost/brngy_notifs/trunk/brgy_notif/public/uploads/2017120308162426dea656af753a8fe364f3191ae1e44d_Bloodbank.PNG');
insert  into `announcements`(`id`,`title`,`content`,`status`,`added_when`,`added_by`,`updated_when`,`updated_by`,`deleted_by`,`deleted_when`,`deleted`,`thumbnail`) values (9,'Joseph Patrick TImcang','<p>asdfasdfasdfasdf</p>',0,'2017-12-27 22:53:26',1,NULL,NULL,NULL,NULL,0,'http://localhost/brngy_notifs/trunk/brgy_notif/public/uploads/201712030833096213721bc98b10f335e449a37dbe3209_a3822018036_16.jpg');

/*Table structure for table `baranagay_alert_attachments` */

DROP TABLE IF EXISTS `baranagay_alert_attachments`;

CREATE TABLE `baranagay_alert_attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay_alert_id` int(11) DEFAULT NULL,
  `image_base64` text,
  `is_valid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `baranagay_alert_attachments` */

insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (1,6,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (2,6,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (3,6,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (4,6,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (5,7,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (6,7,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (7,7,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (8,7,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (9,8,'test',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (10,8,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (11,8,'asdfasdfasdfasdf',0);
insert  into `baranagay_alert_attachments`(`id`,`barangay_alert_id`,`image_base64`,`is_valid`) values (12,8,'asdfasdfasdfasdf',0);

/*Table structure for table `barangay_alert` */

DROP TABLE IF EXISTS `barangay_alert`;

CREATE TABLE `barangay_alert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reported_by_id` int(11) DEFAULT NULL,
  `emergency` text,
  `details` text,
  `alert_type` varchar(250) DEFAULT NULL,
  `action_taken_by` int(11) DEFAULT NULL,
  `is_action_taken` int(11) DEFAULT '0',
  `date_added` date DEFAULT NULL,
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `barangay_alert` */

insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (1,4,'dasdasd','asdasdasd',NULL,NULL,3,NULL,'2018-01-25 01:31:23');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (2,4,'asdfasdf','asdfasdfasdf','SOS 1(RAPE/STALKING CASES)',7,2,'2018-01-18','2018-01-25 01:58:38');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (3,4,'asdasd','asdasdasd','SOS 1(RAPE/STALKING CASES)',7,3,'2018-01-18','2018-01-25 01:46:24');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (4,4,'asdasda','asdasdasd','SOS 1(RAPE/STALKING CASES)',6,2,'2018-01-18','2018-01-25 02:13:27');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (5,4,'asdasda','asdasdasd','SOS 1(RAPE/STALKING CASES)',7,2,'2018-01-18','2018-01-25 02:13:25');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (6,4,'asd','sdasdd','SOS 1(RAPE/STALKING CASES)',7,3,'2018-01-18','2018-01-25 01:46:26');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (7,4,'asd','sdasdd','SOS 1(RAPE/STALKING CASES)',7,2,'2018-01-18','2018-01-25 01:46:26');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (8,4,'asdasdasd','asdasdasd','SOS 1(RAPE/STALKING CASES)',7,2,'2018-01-18','2018-01-25 01:58:47');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (9,4,'asdasdasd','asdasdasd','SOS 1(RAPE/STALKING CASES)',7,2,'2018-01-18','2018-01-25 01:59:01');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (10,4,'asdasdasd','asdasdasd','SOS 1(RAPE/STALKING CASES)',6,2,'2018-01-18','2018-01-25 02:13:39');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (11,4,'asdasda','asdasdasd','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:30');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (12,4,'dasdfasdf','asdfasdfasdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:30');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (13,4,'asdfasdf','asdfasdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:31');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (14,4,'asdfasdf','asdfasdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:31');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (15,4,'asdfasdf','asdfasdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:32');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (16,4,'asdf','asdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:33');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (17,4,'asdf','asdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:34');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (18,4,'asdf','asdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:37');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (19,4,'f','asdf','SOS 1(RAPE/STALKING CASES)',7,0,'2018-01-18','2018-01-25 01:46:38');
insert  into `barangay_alert`(`id`,`reported_by_id`,`emergency`,`details`,`alert_type`,`action_taken_by`,`is_action_taken`,`date_added`,`added_when`) values (20,2,'456464646','yuituityiut','FIRE',7,0,'2018-01-21','2018-01-25 01:46:36');

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

/*Table structure for table `health_tips` */

DROP TABLE IF EXISTS `health_tips`;

CREATE TABLE `health_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `health_tip_title` varchar(250) DEFAULT NULL,
  `health_tip_content` text,
  `thumbnail` text,
  `is_viewable` int(1) DEFAULT '1',
  `added_when` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `health_tips` */

insert  into `health_tips`(`id`,`health_tip_title`,`health_tip_content`,`thumbnail`,`is_viewable`,`added_when`,`added_by`) values (1,'asdf','sdfasdfasdf','asdfasdfasdf',1,'2018-01-22 22:46:57',1);

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

/*Table structure for table `positions` */

DROP TABLE IF EXISTS `positions`;

CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(250) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `positions` */

insert  into `positions`(`id`,`position_name`,`description`) values (1,'Brgy Captain','All modules can be accessed');
insert  into `positions`(`id`,`position_name`,`description`) values (2,'Secretary ','All modules can be accessed');
insert  into `positions`(`id`,`position_name`,`description`) values (3,'Councilors','Announcement, health tips and barangay alert modules');
insert  into `positions`(`id`,`position_name`,`description`) values (4,'BPSO (Tanod)','Barangay Alert Module only');

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
  `is_approved` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `residents` */

insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`is_approved`) values (1,'asdfasdf','asdfasdf','asdfasdf','asdf','asdf','$2y$10$bf6wBPR7WgVLYPFwA/pyYe/eb0pqow0XFINNIZxT9EVRxdo68wBxG',NULL,NULL,NULL,'2018-01-24 23:37:04',NULL,1,1,'2018-01-24 15:25:27',0);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`is_approved`) values (2,'Joseph Patrick','Lagonoy','Timcang','josephpatricktimcang@gmail.com','jplt001','$2y$10$0GaRLM3QHQsIK0TLvyYyW.tEF28u/xKrOccKLRH44oh7udErnBNDS',NULL,NULL,NULL,'2018-01-25 00:51:13',NULL,0,NULL,NULL,1);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`is_approved`) values (3,'asdfasdf','asdfasdf','asdfasdf','asdfasdf@gmail.com','jplt002','$2y$10$.uXP1.8YXujGOc3Vs3UFjexqI/l7Gq9LHRp0ac/l1z7X4fU7cm19S',NULL,NULL,NULL,'2018-01-24 23:37:04',NULL,1,1,'2018-01-24 15:25:34',0);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`is_approved`) values (4,'Ma. Mea','we','Basanal','mmbasanal@1go.ph','mmbasanal','$2y$10$sqntCvXMeBwpUZX4HCZUOu3TzwJy0N5bI6WmdStLnaT7M/yTnqZDC',NULL,NULL,NULL,'2018-01-24 23:44:07',NULL,0,NULL,NULL,1);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`is_approved`) values (5,NULL,NULL,NULL,NULL,NULL,'$2y$10$xGpz33Slxyi0cr/iw2FE9e2HzNGqPUKF/CreRyMM2l3tua4wrsiga',NULL,NULL,NULL,'2018-01-24 23:21:07',NULL,1,1,'2018-01-22 14:43:27',0);
insert  into `residents`(`id`,`first_name`,`middle_name`,`last_name`,`email`,`user_name`,`password`,`contact_no`,`address`,`barangay`,`added_when`,`added_by`,`deleted`,`deleted_by`,`deleted_when`,`is_approved`) values (6,'123','123','123123','123@gmail.com','123','$2y$10$Mu3GPTirAKGx0jSqK6RF0OVCfU9DW2ZlpHaYb5YbLNApj.jf8WQla',NULL,NULL,NULL,'2018-01-25 00:52:28',NULL,0,NULL,NULL,2);

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
  `position_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position_id`,`address`,`created_by`,`deleted`,`deleted_by`) values (1,'Joseph Patrick Timcang','jplt001','jpltimcang@1go.ph','$2y$10$rhlnQkfyiHQnKZqWXD4b6uBAVEEDttouxnP7csyGLB2sBPqXkv7zi','fqvBlYv8ssEZm7l3miVhOFwDjqohfJi49YayH12Czck0NL8cGqAn5MQOCB2j','2017-11-25 08:40:44','2017-11-25 08:40:44',NULL,NULL,NULL,1,NULL,NULL,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position_id`,`address`,`created_by`,`deleted`,`deleted_by`) values (2,'asdfasdf asdfasdf',NULL,'jpltimcang@1gotech.com','jplt',NULL,NULL,NULL,'asdfasdf','asdfasdf','asdfasdf',1,'asdfasdfasdf',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position_id`,`address`,`created_by`,`deleted`,`deleted_by`) values (4,'Joseph Patrick Timcang',NULL,'jplt.developer001@gmail.com','$2y$10$spFyhEuu2ZIuBdJo/uCGd.2LzVdWnsWI.rcXQs87JUBOJw1vGviJm',NULL,NULL,NULL,'Joseph Patrick','Patrick','Timcang',1,'Bayan Luma IV\r\nImus City Cavite',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position_id`,`address`,`created_by`,`deleted`,`deleted_by`) values (5,'asdfasdf asdfasdfasdf','test123','jpltimcang@1gotech.com','$2y$10$UWk4Qx0IsyvzBc.LRoON6eanwGkkSLGFcWBmbT8afhVpjKzniqOii',NULL,NULL,NULL,'asdfasdf','asdfasdf','asdfasdfasdf',1,'asdfasdf',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position_id`,`address`,`created_by`,`deleted`,`deleted_by`) values (6,'test123 test','rwe123','jplt.developer001@gmail.com','$2y$10$MwKcP4zjnru9YqacSV3Y5.3JkAzlz5f3MR3EifC7zkzoBpJhk3zMO',NULL,NULL,NULL,'test123','testtt','test',4,'asdf',1,0,NULL);
insert  into `users`(`id`,`name`,`user_name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`first_name`,`middle_name`,`last_name`,`position_id`,`address`,`created_by`,`deleted`,`deleted_by`) values (7,'123123 123123','123123','jpltimcang@1gotech.com','$2y$10$7mPzWx1Am0M208y6/3rm2e5Wuh6xlWlB7BcAgkjd8rpBMKDxyiB8G',NULL,NULL,NULL,'123123','123123','123123',4,'123123',1,0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
