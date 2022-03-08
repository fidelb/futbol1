/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ futbol1 /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE futbol1;

DROP TABLE IF EXISTS equips;
CREATE TABLE `equips` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `equip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS failed_jobs;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS jugadors;
CREATE TABLE `jugadors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equip_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jugadors_equip_id_foreign` (`equip_id`),
  CONSTRAINT `jugadors_equip_id_foreign` FOREIGN KEY (`equip_id`) REFERENCES `equips` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS partits;
CREATE TABLE `partits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` timestamp NULL DEFAULT NULL,
  `equipLocal_id` bigint(20) unsigned DEFAULT NULL,
  `equipVisitant_id` bigint(20) unsigned DEFAULT NULL,
  `golsLocal` int(11) NOT NULL,
  `golsVisitant` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partits_equiplocal_id_foreign` (`equipLocal_id`),
  KEY `partits_equipvisitant_id_foreign` (`equipVisitant_id`),
  CONSTRAINT `partits_equiplocal_id_foreign` FOREIGN KEY (`equipLocal_id`) REFERENCES `equips` (`id`) ON DELETE SET NULL,
  CONSTRAINT `partits_equipvisitant_id_foreign` FOREIGN KEY (`equipVisitant_id`) REFERENCES `equips` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS password_resets;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS personal_access_tokens;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO equips(id,equip,created_at,updated_at) VALUES(1,'barça',NULL,NULL),(2,'r.madrid',NULL,NULL),(3,'Betis','2022-03-08 15:42:33','2022-03-08 15:42:33');


INSERT INTO jugadors(id,nom,equip_id,created_at,updated_at) VALUES(1,'Pique',1,'2022-03-08 15:27:49','2022-03-08 15:27:49'),(3,'Busquets',1,'2022-03-08 15:28:20','2022-03-08 15:28:20'),(4,'Cristiano',2,'2022-03-08 15:31:10','2022-03-08 15:31:10'),(5,'Dembelé',1,'2022-03-08 15:31:34','2022-03-08 15:32:35'),(6,'Benzemá',2,'2022-03-08 15:32:26','2022-03-08 15:32:26'),(8,'Joaquín',3,'2022-03-08 15:43:06','2022-03-08 15:43:06');

INSERT INTO migrations(id,migration,batch) VALUES(1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_03_07_150949_create_equips_table',1),(6,'2022_03_07_165231_create_partits_table',1),(7,'2022_03_08_151315_create_jugadors_table',2);

INSERT INTO partits(id,data,equipLocal_id,equipVisitant_id,golsLocal,golsVisitant,created_at,updated_at) VALUES(1,'2022-03-08 10:47:04',1,2,6,0,NULL,'2022-03-08 10:08:37'),(4,'2003-12-31 17:00:00',2,1,2,1,NULL,NULL),(5,'2022-07-08 12:00:00',1,2,3,3,NULL,NULL),(6,'2022-04-08 12:00:00',3,1,0,1,'2022-03-08 15:44:42','2022-03-08 15:45:08');


INSERT INTO users(id,name,email,email_verified_at,password,remember_token,created_at,updated_at) VALUES(1,'usuari_1','usuari_1@gmail.com',NULL,'$2y$10$Flo/JgIlf.J57./OlT1Ql.2xDnbWQUeKmetGZ1av2c5UcpFCqMJJa',NULL,'2022-03-08 09:55:14','2022-03-08 09:55:14'),(2,'usuari_2','usuari_2@gmail.com',NULL,'$2y$10$m9VbZYUS0N3U/Ye8fjIPeeLNj449gT3YXqyM7AIS4eeOD3CfKu0dm',NULL,'2022-03-08 15:59:19','2022-03-08 15:59:19'),(3,'usuari_3','usuari_3@gmail.com',NULL,'$2y$10$uq37j8EI.5QOdGu5RiusnOqtHPwbY5P4vGsao/0JjzMMnXyOnzWvC',NULL,'2022-03-08 16:00:05','2022-03-08 16:00:05');