/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.7.40 : Database - loginpanel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`loginpanel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `loginpanel`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sha1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sha256` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`username`,`uuid`,`salt`,`sha1`,`sha256`,`md5`,`email_verified_at`,`password`,`mobile_number`,`remember_token`,`created_at`,`updated_at`) values (1,'Saurabh','saurabh@gmail.com','Saurabh@124','QLK8J57Q04798GA6DPD4C6WV8TMUOW25FUXTB9OOKZ','$2y$10$6NEXIbO.5W2b/FDuQso1LO9T4uYTDDyrnL8g1XVCd2jSGtjqwZVMG','23d42f5f3f66498b2c8ff4c20b8c5ac826e47146','$2y$10$zZ2mQL868VZHW2ajjmMTnO88Om4B5JscyM1AUttXuusK4lT3ND6b6','e6e061838856bf47e1de730719fb2609',NULL,'admin@123','3866862936',NULL,NULL,NULL),(2,'Saurabh1','saurabh1@gmail.com','Saurabh@134','QLK8J57Q0ZPGA6DPD4C6WV8TMUOW25FUXTB9OOKZ','$2y$10$ZbWHrKB52ydJCQ0CR4FNkeKtE2GP2WNs7Yg/GkciBKjllY7o9LQg6','cfc975fa7bca33369e76f25fee13e59715407d42','$2y$10$KkvKgAt6Jvu2w7QIgMwyiOTsht.xB1cxwp7ix8vSY2Ciz4/nsnn22','2299e41d3c312d9a4a6c245ba126ac92',NULL,'admin@122','3866862946',NULL,NULL,NULL),(3,'Saurabh1','saurabh2@gmail.com','Saurabh@134','2A3ZUQFD9NFX3UQRHD90YOJBYQZZ7D0KRPL1VHKM','$2y$10$uYpKyegEW2cHwIFKiexvO.jfr0FVFGmADIleH3Lsh7HkQqR4nATc2','cfc975fa7bca33369e76f25fee13e59715407d42','$2y$10$fasyzmCFApmKADJ7Mg3gM.D/DD.aONhBLMg9jG7Nyxu4ufvcCqtv6','2299e41d3c312d9a4a6c245ba126ac92',NULL,'admin@122','3866862946',NULL,NULL,NULL),(5,'saurabh shukla','saurabh3@gmail.com','saurabh3','S082HRI8L2UF5VKP6COX4T63MUCOBRMGKRZSQ04H','$2y$10$lWyUU5DYrTG0dfTZngh7LOWdhiprwUPaBknTV5roxOgh.kU0OIBC.','23d42f5f3f66498b2c8ff4c20b8c5ac826e47146','$2y$10$OY4U.Pub1ACpkHScnpEZtuIsgxIGvzGXsdHDb/RMGToRr2FcQff8O','e6e061838856bf47e1de730719fb2609',NULL,'admin@123','7347027373',NULL,NULL,NULL),(6,'saurabh4','saurabh4@gmail.com','saurabh4','9OS65HJGA08UDPJ5TNKWHKQFQAG9ZOZLY3GNYZC0','$2y$10$UgKPXvcpB25ILcp.NJb8GOWlKSGmjw0xhYIaPsAqW3AP4q/LDIhoC','23d42f5f3f66498b2c8ff4c20b8c5ac826e47146','$2y$10$zcr95jcAkuVlYtZVP2cmTOraONhAq5aG6IKMBGYNAS7K1qzkBpAwa','e6e061838856bf47e1de730719fb2609',NULL,'admin@123','3946023432',NULL,NULL,NULL),(7,'Saurabh Shukla','saurabh6@gmail.com','saurabh5','QUZNZJ8PW89W7B5ZV7P7X5C12QJ6E4EFV71EHHD6','$2y$10$Ap65VJfKqdIK9kbzy1R7HOd4O7yUvEQB5qnOEto6hEH8OT84pQghC','23d42f5f3f66498b2c8ff4c20b8c5ac826e47146','$2y$10$ree0cg4j/YgXvwQ4wzJaLuO9KsXDLXHxb39UbbLSRccdT/3pEmFSC','e6e061838856bf47e1de730719fb2609',NULL,'admin@123','340971207',NULL,NULL,NULL),(8,'saurabh shukla 09','saurabh7@gmail.com','saurabh7','ZJMNYVBRB2WOZD8CSHU8W7L3VK0ACLXT4WR91NZ6','$2y$10$sBj4oLQhfA6oGH9APvVjfOVEiH3K1B2gyybHAnGGIoFoE3p1gvKZe','23d42f5f3f66498b2c8ff4c20b8c5ac826e47146','$2y$10$FChv.scgozIkkJ4y0h6IluB30Gu6zX.EtwaqIC3znRrKintZUcBcW','e6e061838856bf47e1de730719fb2609',NULL,'admin@123','236962963',NULL,NULL,NULL),(9,'saurabh 89','saurabh8@gmail.com','saurabh8','N5XSYT82P4352ETVW7Q4ND8BD0O65JQDHAMKR10T','$2y$10$.c2ao2sYYlT0B1.EwRFU4OFg2mq204maVNqcke/k8lxJnzq9rY4tu','23d42f5f3f66498b2c8ff4c20b8c5ac826e47146','$2y$10$Rq1PQbqKBPjhK7jDPc6uDu9xiqmX8FtiTjF/KjHZS8aWvhpNtWeny','e6e061838856bf47e1de730719fb2609',NULL,'admin@123','6324628936',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
