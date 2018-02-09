-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 11:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `image_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `userid`, `comments`, `image_id`, `created_at`, `updated_at`) VALUES
(4, 74, 'Good', 1, '2017-10-23 05:59:36', '2017-10-23 05:59:36'),
(5, 74, 'Nice', 2, '2017-10-23 06:00:03', '2017-10-23 06:00:03'),
(6, 74, 'saasdas', 2, '2017-10-23 06:03:51', '2017-10-23 06:03:51'),
(7, 74, 'Nice', 2, '2017-10-23 06:19:57', '2017-10-23 06:19:57'),
(8, 74, 'good', 2, '2017-10-23 06:21:12', '2017-10-23 06:21:12'),
(9, 74, 'goofd', 2, '2017-10-23 06:22:59', '2017-10-23 06:22:59'),
(10, 74, 'nice', 2, '2017-10-23 06:24:06', '2017-10-23 06:24:06'),
(11, 74, 'Wow', 9, '2017-10-23 06:41:55', '2017-10-23 06:41:55'),
(12, 74, 'Good', 9, '2017-10-23 06:42:07', '2017-10-23 06:42:07'),
(13, 74, 'nice', 9, '2017-10-23 06:55:47', '2017-10-23 06:55:47'),
(14, 74, 'Hello', 3, '2017-10-23 07:22:45', '2017-10-23 07:22:45'),
(15, 74, 'fgh', 2, '2017-10-24 03:46:59', '2017-10-24 03:46:59'),
(16, 74, 'Yeah makes sense and it\'s working. But isn\'t function() a function? So why would we need to bind it? I already tried and it\'s really needed, I just wanted to know why.', 2, '2017-10-24 04:42:42', '2017-10-24 04:42:42'),
(17, 74, 'setState is being invoked immediately due to the parenthesis! Wrap it in an anonymous function, then call it:', 1, '2017-10-24 05:00:39', '2017-10-24 05:00:39'),
(18, 74, 'The Image you will see definitely has three elements in the array, but when I attempt to access the array length through console.log(this.props.jobs.length);', 5, '2017-10-25 03:40:07', '2017-10-25 03:40:07'),
(19, 75, 'Nice One', 8, '2017-10-30 05:22:50', '2017-10-30 05:22:50'),
(20, 75, 'vbvnv', 8, '2017-10-30 05:24:22', '2017-10-30 05:24:22'),
(21, 74, 'sdfsddf', 4, '2017-11-17 02:08:00', '2017-11-17 02:08:00'),
(22, 74, 'sdfsddf', 4, '2017-11-17 02:08:03', '2017-11-17 02:08:03'),
(23, 1, 'asdasd', 1, '2018-02-09 03:50:51', '2018-02-09 03:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `images2` varchar(191) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `images`, `images2`, `updated_at`, `created_at`) VALUES
(1, 'http://www.gstatic.com/webp/gallery/1.jpg', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:20:09', '0000-00-00 00:00:00'),
(2, 'http://www.gstatic.com/webp/gallery/2.jpg', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:20:13', '0000-00-00 00:00:00'),
(3, 'http://www.gstatic.com/webp/gallery/4.jpg', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:20:17', '0000-00-00 00:00:00'),
(4, 'http://www.gstatic.com/webp/gallery/5.jpg', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:20:20', '0000-00-00 00:00:00'),
(5, 'https://www.gstatic.com/webp/gallery3/1_webp_a.png', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:20:56', '0000-00-00 00:00:00'),
(6, 'https://images.unsplash.com/photo-1427847907429-d1ba99bf013d?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=45d64b6e68867f18fa20bae2e9c99aa4', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:20:59', '0000-00-00 00:00:00'),
(7, 'https://gratisography.com/pictures/447_1.jpg', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:21:03', '0000-00-00 00:00:00'),
(8, 'https://gratisography.com/pictures/444_1.jpg', 'https://dummyimage.com/300/09f/fff.png', '2017-11-18 05:21:06', '0000-00-00 00:00:00'),
(9, 'https://gratisography.com/pictures/440_1.jpg', '', '2017-10-23 12:08:37', '0000-00-00 00:00:00'),
(10, 'https://gratisography.com/pictures/421_1.jpg', '', '2017-10-23 12:09:27', '0000-00-00 00:00:00'),
(11, 'https://gratisography.com/pictures/417_1.jpg', '', '2017-10-23 12:11:14', '0000-00-00 00:00:00'),
(12, 'https://gratisography.com/pictures/415_1.jpg', '', '2017-10-23 12:11:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galleryusers`
--

CREATE TABLE `galleryusers` (
  `user_id` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleryusers`
--

INSERT INTO `galleryusers` (`user_id`, `useremail`, `userpassword`, `created_at`, `updated_at`) VALUES
(1, 'anuja@spineor.com', 'anuj@123', '2017-10-30 09:31:04', '0000-00-00 00:00:00'),
(2, 'javed@spineor.com', 'javed@123', '2017-10-26 10:59:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `likes`, `image_id`, `userid`, `updated_at`, `created_at`) VALUES
(143, 1, 4, 74, '2017-10-25 02:06:54', '2017-10-25 02:06:54'),
(147, 1, 7, 74, '2017-10-25 02:26:06', '2017-10-25 02:26:06'),
(148, 1, 8, 74, '2017-10-25 02:26:09', '2017-10-25 02:26:09'),
(163, 1, 4, 78, '2017-10-30 04:08:40', '2017-10-30 04:08:40'),
(164, 1, 8, 78, '2017-10-30 04:08:42', '2017-10-30 04:08:42'),
(165, 1, 7, 78, '2017-10-30 04:08:44', '2017-10-30 04:08:44'),
(168, 1, 9, 78, '2017-10-30 04:08:51', '2017-10-30 04:08:51'),
(169, 1, 10, 78, '2017-10-30 04:08:52', '2017-10-30 04:08:52'),
(170, 1, 11, 78, '2017-10-30 04:08:54', '2017-10-30 04:08:54'),
(171, 1, 12, 78, '2017-10-30 04:08:55', '2017-10-30 04:08:55'),
(172, 1, 12, 74, '2017-10-30 04:09:08', '2017-10-30 04:09:08'),
(173, 1, 11, 74, '2017-10-30 04:09:12', '2017-10-30 04:09:12'),
(174, 1, 10, 74, '2017-10-30 04:09:16', '2017-10-30 04:09:16'),
(175, 1, 9, 74, '2017-10-30 04:09:18', '2017-10-30 04:09:18'),
(176, 1, 5, 74, '2017-10-30 04:09:22', '2017-10-30 04:09:22'),
(177, 1, 6, 74, '2017-10-30 04:09:25', '2017-10-30 04:09:25'),
(196, 1, 1, 85, '2017-10-30 04:58:09', '2017-10-30 04:58:09'),
(198, 1, 4, 85, '2017-10-30 05:04:52', '2017-10-30 05:04:52'),
(199, 1, 3, 85, '2017-10-30 05:04:56', '2017-10-30 05:04:56'),
(201, 1, 2, 85, '2017-10-30 05:05:01', '2017-10-30 05:05:01'),
(203, 1, 10, 85, '2017-10-30 05:05:16', '2017-10-30 05:05:16'),
(206, 1, 3, 76, '2017-10-30 05:05:52', '2017-10-30 05:05:52'),
(208, 1, 8, 76, '2017-10-30 05:05:57', '2017-10-30 05:05:57'),
(209, 1, 7, 76, '2017-10-30 05:05:58', '2017-10-30 05:05:58'),
(210, 1, 12, 76, '2017-10-30 05:06:01', '2017-10-30 05:06:01'),
(212, 1, 9, 76, '2017-10-30 05:06:05', '2017-10-30 05:06:05'),
(213, 1, 6, 76, '2017-10-30 05:06:08', '2017-10-30 05:06:08'),
(214, 1, 5, 76, '2017-10-30 05:06:10', '2017-10-30 05:06:10'),
(215, 1, 1, 76, '2017-10-30 05:17:57', '2017-10-30 05:17:57'),
(216, 1, 2, 76, '2017-10-30 05:17:59', '2017-10-30 05:17:59'),
(217, 1, 4, 76, '2017-10-30 05:18:02', '2017-10-30 05:18:02'),
(218, 1, 11, 76, '2017-10-30 05:18:12', '2017-10-30 05:18:12'),
(221, 1, 10, 75, '2017-10-30 05:18:48', '2017-10-30 05:18:48'),
(222, 1, 11, 75, '2017-10-30 05:18:51', '2017-10-30 05:18:51'),
(224, 1, 8, 75, '2017-10-30 05:18:58', '2017-10-30 05:18:58'),
(225, 1, 7, 75, '2017-10-30 05:18:59', '2017-10-30 05:18:59'),
(226, 1, 6, 75, '2017-10-30 05:19:00', '2017-10-30 05:19:00'),
(227, 1, 9, 75, '2017-10-30 05:19:02', '2017-10-30 05:19:02'),
(228, 1, 5, 75, '2017-10-30 05:19:03', '2017-10-30 05:19:03'),
(229, 1, 4, 75, '2017-10-30 05:19:05', '2017-10-30 05:19:05'),
(233, 1, 1, 75, '2017-10-30 05:19:17', '2017-10-30 05:19:17'),
(234, 1, 12, 75, '2017-10-30 05:23:38', '2017-10-30 05:23:38'),
(240, 1, 2, 75, '2017-10-30 05:23:58', '2017-10-30 05:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anuj', 'anuj@spineor.com', '$2y$10$xJ57RS50WkbNbzUz2M474O7fYsznnk53uRMSjH19asdEWxlWL9Kg6', '$2y$10$fnzuDjk3J/RKAz/6pvEB2.fE1VH7WTjXjCv0CKkdctCXxRhaQVPKe', NULL, NULL, NULL),
(2, 'Anuj', 'javed@spineor.com', 'anuj@123', '$2y$10$fnzuDjk3J/RKAz/6pvEB2.fE1VH7WTjXjCv0CKkdctCXxRhaQVPKe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryusers`
--
ALTER TABLE `galleryusers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `galleryusers`
--
ALTER TABLE `galleryusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
