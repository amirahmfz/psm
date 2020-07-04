/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2020_05_16_151538_create_stress_tests_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `stress_tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `stress_tests` DISABLE KEYS */;
INSERT INTO `stress_tests` (`id`, `user_id`, `level`, `created_at`, `updated_at`) VALUES
	(1, 1, '5', '2020-05-15 17:36:01', '2020-05-16 17:36:01'),
	(2, 2, '3', '2020-05-16 17:45:09', '2020-05-16 17:45:09'),
	(3, 3, '1', '2020-05-13 17:45:09', '2020-05-16 17:45:09'),
	(4, 1, '4', '2020-05-16 17:45:09', '2020-05-16 17:45:09'),
	(5, 1, '2', '2020-05-16 17:45:09', '2020-05-16 17:45:09');
/*!40000 ALTER TABLE `stress_tests` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `weight`, `height`, `blood_type`, `gender`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Mohd Amirul Adli Mohd Norrahim', 'sayaamiruladli@gmail.com', '', '', '', '', '$2y$10$n5xYRRNA4pO4mXokV1DX2.rEZ29ldkvu2xVD/40Hg2ppdBA08Bp5m', 0, 'VwhehrSi4xWMoSieIRP3x67JQMAeqNwbt5OyEZ6GNPBMY9fhzRS1hA1Y60Z7', '2020-05-16 15:43:35', '2020-05-16 15:43:35'),
	(2, 'Mohd Amirul Adli bin Mohd Norrahim', 'aimshelldrake@gmail.com', '', '', '', '', '$2y$10$zGuHZJQOlzIbEYTODm/5o.ipOLBdjhx7EAbos.XwqMHD29335DozC', 0, 'UsN6ne4Fe1fse1RnEzHxTQERX3PMQArr9QctkF0W8fYB4TGvOkuhqrGirziF', '2020-05-16 17:51:46', '2020-05-16 17:51:46'),
	(3, 'Ahmad Amni', 'darazzor@gmail.com', '3123', 'asd', 'A+', 'Male', '$2y$10$AUlSxggpcfkWdgiyF9jHa.TEWGRmO095Z/w9KHvKHvnDDWJqvR8wm', 1, NULL, '2020-05-16 17:53:18', '2020-05-16 17:53:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
