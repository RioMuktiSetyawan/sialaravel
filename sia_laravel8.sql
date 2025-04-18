-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2025 at 06:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_laravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'imageuser',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `jabatan`, `pendidikan`, `tempat_lahir`, `tanggal_lahir`, `agama`, `telp`, `alamat`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Rachael Huel', '1234567', 'guru mata pelajaran', 'S1', 'Lake Carlotta', '1995-05-29', 'islam', '631-880-9474', '10942 Harber Lights Apt. 954\nLake Mervin, ID 62706', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(2, 'Prof. Micaela Dach', '1234567', 'guru mata pelajaran', 'S1', 'Hegmanntown', '1985-03-03', 'islam', '324.533.4708 x6928', '16495 Weissnat Forges Suite 474\nAbrahamside, OR 83636', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(3, 'Monserrat Walter', '1234567', 'guru mata pelajaran', 'S1', 'New Hal', '1982-12-04', 'islam', '1-290-419-5354 x005', '71105 Sarai Viaduct Suite 760\nPort Petraborough, TX 57047', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(4, 'Prof. Daniella McDermott', '1234567', 'guru mata pelajaran', 'S1', 'Lake Amya', '1996-06-30', 'islam', '+1-269-479-8529', '4679 Bradtke Heights\nSouth Lonzobury, CT 82512-2874', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(5, 'Prof. Alvah Bechtelar II', '1234567', 'guru mata pelajaran', 'S1', 'Lake Bertachester', '1972-03-26', 'islam', '271-556-1049', '880 Larkin Cape\nMattiehaven, LA 12049-9801', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(6, 'Adrian Hackett', '1234567', 'guru mata pelajaran', 'S1', 'Terryport', '1985-02-07', 'islam', '780.465.8680 x876', '99081 Quitzon Divide\nPort Collin, OR 21932-8142', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(7, 'Lennie Abernathy', '1234567', 'guru mata pelajaran', 'S1', 'Nonatown', '2008-07-05', 'islam', '(686) 645-9333 x7245', '6624 Rempel Camp\nLake Clevelandborough, NJ 17658', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(8, 'Miss Jayda Champlin', '1234567', 'guru mata pelajaran', 'S1', 'West Daija', '1981-10-10', 'islam', '803-557-8773', '49784 Marquise Cove Suite 532\nSouth Emilia, OK 99840', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(9, 'Rahsaan Jacobs', '1234567', 'guru mata pelajaran', 'S1', 'South Amara', '1974-06-02', 'islam', '253.500.7244 x32206', '6651 Cassandre Heights Suite 253\nWest Robertaland, CT 78493', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09'),
(10, 'Glen Cole', '1234567', 'guru mata pelajaran', 'S1', 'Katharinaport', '2009-09-14', 'islam', '1-669-997-2089 x36008', '9514 Earline Plain Apt. 886\nWeissnatton, CO 33801-9781', 'imageuser.jpg', '2025-04-12 22:28:09', '2025-04-12 22:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2025_04_13_035824_create_guru_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `password_resets_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
