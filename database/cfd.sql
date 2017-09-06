-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 09:44 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfd`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `bannerurl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menuposts`
--

CREATE TABLE `menuposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `dsc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuposts`
--

INSERT INTO `menuposts` (`id`, `dsc`, `status`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, '<p>Comfort, &nbsp;established in the early 2012, &nbsp;offers ranges of engineering products and solutions to ensure the comforts&nbsp;of indoor living in modern infrastructure such as apartment, hospital, commercial and industrial buildings. So far,&nbsp;we have been cooperating with many suppliers worldwide to deliver superior quality &nbsp;engineering &nbsp;equipment to&nbsp;guarantee our customers&rsquo; satisfaction at a competitive price as well as to assure prompt product delivery.</p>', '0', 2, '2017-09-05 01:51:53', '2017-09-05 01:51:53'),
(2, '<h3><strong><em>Company&rsquo;s Profile</em></strong></h3>\n<p>Nest, a trading company established in the early of 2012, primarily specializes in offering ranges of engineering products and solutions related with HVAC&nbsp;<em>(heating, ventilation, and air conditioning).</em>&nbsp;Nowadays, we want to extend our capacity to satisfy market demand, so that we are looking for committed candidates to join our team.</p>\n<p>&nbsp;</p>\n<p><strong>+ Sales/Marketing: 6 Positions</strong></p>\n<p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Job Responsibilities</em></strong></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sell the products to customers</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visit customers&rsquo; shops or companies to present the products</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Make quotation (price of products) for customers and send by email</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Write daily actions plan and report</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search for new target customers</p>\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Job Requirements</em></strong></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Male or female</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Must be available taking 3 month internship</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No experience needed</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Students who are in the major of Sales or Marketing are motivated</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Students who are in year 4 or fresh graduated are encouraged</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Be able to speak, write and read English or Chinese</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Be able to use Microsoft Word, Excel, Power Point, Internet and Email</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Can work full-time for 8 hours a day (or part-time 4 hours a day)</p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Friendly, honest, hard-working and patient.</p>\n<p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The benefits you will get from this internship:</em></strong></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>get work experience</em></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>gain ability to put new thing into practice</em></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>learn to communicate at workplace</em></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>know more about M &amp; E products</em></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>be offered a lunch</em>&nbsp;&nbsp;<em>(for full-time internship only)</em></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>get a salary.</em></p>\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will&nbsp;<em>have a chance to be employed at&nbsp;<strong>Nest</strong>.</em></p>\n<p>&nbsp;</p>\n<p><strong>+ How to Apply<br /></strong></p>\n<p>&nbsp;</p>\n<p>If you are interested in this job, please drop your CV and other supporting document to&nbsp;<strong><em>Nest</em></strong>&rsquo;s office or email your CV and cover letter only to email address below:</p>\n<p>Contact Person:&nbsp; Mr. Heang Dolla</p>\n<p>Mobile: (855) 15 88 22 77</p>\n<p>Email:&nbsp;<a href="mailto:a.group@nest-trade.com">a.group@nest-trade.com</a></p>\n<p>Address: #32A, St.374, Toul Svay Prey I,Chamkar Morn, Phnom Penh, Cambodia</p>\n<p><strong><em>Deadline:&nbsp;</em></strong><strong><em>31 &ndash; Oct &ndash; 16</em></strong></p>', '0', 3, '2017-09-05 01:52:58', '2017-09-05 01:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menuname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menustatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menuname`, `menustatus`, `created_at`, `updated_at`) VALUES
(1, 'HOME', '1', '2017-09-05 01:45:43', '2017-09-05 01:45:43'),
(2, 'ABOUT US', '1', '2017-09-05 01:46:16', '2017-09-05 01:46:16'),
(3, 'OUR PROFESSIONAL', '1', '2017-09-05 01:47:24', '2017-09-05 01:47:24'),
(4, 'OUR PRODUCTS', '1', '2017-09-05 01:49:07', '2017-09-05 01:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(63, '2014_10_12_000000_create_users_table', 2),
(64, '2014_10_12_100000_create_password_resets_table', 2),
(65, '2017_07_31_055356_create_menus_table', 2),
(66, '2017_07_31_070257_create_banners_table', 2),
(44, '2017_08_15_071839_menupost', 1),
(67, '2017_08_15_095804_menuposts', 2),
(68, '2017_08_28_064519_products', 2),
(69, '2017_09_02_034231_subcates', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_dsc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_img`, `pro_dsc`, `pro_status`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'Hailiang Pancake Coil', '1.jpg|', '<p>Write your description</p>', '1', 2, '2017-09-05 02:02:30', '2017-09-05 02:02:30'),
(2, 'Come with Insulation', '1.jpg|', '<p>Write your description</p>', '0', 3, '2017-09-05 02:02:53', '2017-09-05 02:02:53'),
(3, 'Fibreglass', '1.jpg|bottom_sponsor.png|', '<p>Write your description</p>', '1', 3, '2017-09-05 02:03:29', '2017-09-05 02:03:29'),
(5, 'Test Empty Image', 'empty.png', '<p>Write your description</p>', '1', 2, '2017-09-05 02:07:02', '2017-09-05 02:07:02'),
(7, 'Test Have Img', 'bottom_sponsor.png|', '<p>Write your description</p>', '1', 2, '2017-09-05 02:08:50', '2017-09-05 02:08:50'),
(8, 'ddddddddd', 'empty.png', '<p>Write your description</p>', '1', 2, '2017-09-05 02:09:07', '2017-09-05 02:09:07'),
(9, 'Coloor', 'empty.png', '<p>Write your description</p>\n<p><span style="color: #ff0000;">Size</span></p>', '0', 2, '2017-09-05 02:20:43', '2017-09-05 02:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `subcates`
--

CREATE TABLE `subcates` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcates`
--

INSERT INTO `subcates` (`id`, `subcate_name`, `status`, `menu_id`, `created_at`, `updated_at`) VALUES
(2, 'Copper Tube', '1', 4, '2017-09-05 01:57:24', '2017-09-05 01:57:24'),
(3, 'Flexible Air Duct', '1', 4, '2017-09-05 01:58:15', '2017-09-05 01:58:15'),
(4, 'Rockwool', '1', 4, '2017-09-05 01:58:45', '2017-09-05 01:58:45'),
(5, 'Air Grille & Diffuser', '1', 4, '2017-09-05 01:59:07', '2017-09-05 01:59:07'),
(6, 'Ventilation', '1', 4, '2017-09-05 01:59:25', '2017-09-05 01:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sothea', 'boocboocbooc@gmail.com', '$2y$10$k1SKQkn.cgQ0/5fqGb9saOLs1PlJKQ.9nji4ouK6iRVEuView3z0O', 'NjJsmhgMsUWhmM5GSmXXTZxjFbdL1RrZUSzDxv4zbG27B0A4Sa6nKjryWBOt', '2017-09-05 01:43:21', '2017-09-05 01:43:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuposts`
--
ALTER TABLE `menuposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcates`
--
ALTER TABLE `subcates`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menuposts`
--
ALTER TABLE `menuposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subcates`
--
ALTER TABLE `subcates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
