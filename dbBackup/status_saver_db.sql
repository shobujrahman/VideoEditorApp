-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 01:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `status_saver_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `device_tokens`
--

CREATE TABLE `device_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2021_08_19_100541_create_settings_table', 18),
(32, '2021_10_10_140854_create_notifications_table', 21),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 22),
(34, '2021_10_10_142151_create_device_tokens_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `url`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'sgdfhfghdf', 'hsshffhgf', 'https://www.youtube.com/watch?v=4iRnfJ13Ofs', 'https://i.pinimg.com/736x/5c/a9/6f/5ca96fe550aab0f2cc2768d3dee9417d.jpg', '2021-10-10 11:00:17', '2021-10-10 11:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `firebasekey` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admobPublisherId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admobAppId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admob_inter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admob_native` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admob_banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admob_reward` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbPublisherId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_app_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_inter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_native` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_reward` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unity_appId_gameId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iron_source_appKey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appnext_placementId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startapp_appId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interstitial_interval` int(11) DEFAULT NULL,
  `native_ads_interval` int(11) DEFAULT NULL,
  `ad_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privacypolicy` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `firebasekey`, `email`, `version`, `admobPublisherId`, `admobAppId`, `admob_inter`, `admob_native`, `admob_banner`, `admob_reward`, `fbPublisherId`, `fb_app_id`, `fb_inter`, `fb_native`, `fb_banner`, `fb_reward`, `unity_appId_gameId`, `iron_source_appKey`, `appnext_placementId`, `startapp_appId`, `interstitial_interval`, `native_ads_interval`, `ad_type`, `privacypolicy`, `updated_at`) VALUES
(1, 'AAAAds6EJZk:APA91bFoD-mzXTpllwu7yMyYPkruDLkWB1Ls-PUNzX3Q8WkJQTu2LOr-hWzafpdNDVq_NpzVOFkMwaY5GNs_BxCfeVMH_oDr12dCuNf_3pKMAT5yoWuMuN1eWqg8pMPJddSXcZeFIUBF', 'amzad@gmail.com', '2.0', 'sddtyjyyt', 'wbymyetrytry', 'asrew tery', 'eysrny n', 'rndty', 'ynrtdynd', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 'ca-app-pub-xxxxxxxxxxxas', 1, 2, 'multipleAds', '<p>Subscription Terms and conditions</p><p>Before subscribe you should know this is only a demo application .</p><p>If you have purchased a subscription to Flix, you will be charged on a monthly. If you have purchased a subscription to Flix, you have the right to cancel your purchase and receive a full refund within 14 days of purchase. However, if you access the Flix app within the 14-day period, you will no longer be eligible for a refund if you decide to cancel your purchase.</p><p>You may cancel your subscription to Flix at any time via the mobile app or on Flix\'s website. The termination shall have effect at the expiry of the then-current subscription period that you have already paid for (e.g. one month, 3 months, 6 months, or a year) and you will not be refunded for any remaining portion of subscription fees you have already paid for (unless with the 14-day period and under the conditions described above).</p><p>Flix reserves the right to terminate and/or suspend your account at any time in case of unauthorised use of the service. If Flix terminates or suspends your account for any suspicious activity, Flix shall have no liability or responsibility to you, and will not refund any amounts that you have previously paid.</p><p>Privacy Policy</p><p dir=\"ltr\">Your privacy is important to us. Sometimes we need information to provide services that you request, this privacy statement applies to Justapps Apps and its product King of status.</p><p dir=\"ltr\">Personal Information</p><p dir=\"ltr\">We DO NOT collect, store or use any personal information while you visit, download or upgrade our products.</p><p dir=\"ltr\">We may use personal information submitted by you only for the following purposes: help us develop, deliver, and improve our products and services and supply higher quality service; manage online surveys and other activities you’ve participated in.</p><p dir=\"ltr\">In the following circumstances, we may disclose your personal information according to your wish or regulations by law:</p><p dir=\"ltr\">· &nbsp;(1) Your prior permission;</p><p dir=\"ltr\">· &nbsp;(2) By the applicable law within or outside your country of residence, legal process, litigation requests;</p><p dir=\"ltr\">· &nbsp;(3) By requests from public and governmental authorities;</p><p dir=\"ltr\">· &nbsp;(4) To protect our legal rights and interests.</p><p>Non- Personal Information</p><p dir=\"ltr\">We may collect and use non-personal information in the following circumstances. To have a better understanding in user’s behavior, solve problems in products and services, improve our products, services and advertising, we may collect non-personal information such as installed application name and package name, the data of install, frequency of use, country, equipment and channel.</p><p dir=\"ltr\">If non-personal information is combined with personal information, we treat the combined information as personal information for the purposes of this Privacy Policy.</p><p dir=\"ltr\">Information we get from your use of our services</p><p dir=\"ltr\">We may collect information about the services that you use and how you use them, such as when you view and interact with our content. We may collect device-specific information (such as your hardware model, operating system version, unique device identifiers, device settings, device language and mobile network information). We will not share that information with third parties.</p><p>Permissions in the King of status App are the following:</p><p dir=\"ltr\">Get Accounts</p><p dir=\"ltr\">This permission is needed for making a selection list with your google accounts in the app, when you are exporting/importing King of status data to/from google drive.</p><p>Access Network State</p><p dir=\"ltr\">This permission is needed for checking if you are connected to the internet when you are exporting/importing King of status data to/from google drive.</p><p>Internet</p><p>This permission is needed for exporting/importing King of status data to/from google drive.</p><p dir=\"ltr\">Read Phone State</p><p dir=\"ltr\">This permission is needed for checking if a call was started from the King of status app and when the call ends and you enabled the \"Keep app on call\" option in the \"System settings\" of the app the King of status app will be resumed.</p><p dir=\"ltr\">Also needed for checking if your device has single or multiple sim cards.</p><p>Write External Storage</p><p dir=\"ltr\">This permission is needed for writing to the external storage of your device when exporting King of status data to the device\'s internal storage.</p><p>Vibrate</p><p dir=\"ltr\">This permission is needed for vibrating on some touch events.</p><p dir=\"ltr\">WE WILL NOT SHARE ANY INFORMATION FROM YOUR DEVICE WITH THIRD PARTIES.</p><p dir=\"ltr\">IF YOU DO NOT UNDERSTAND AND/OR AGREE TO THE PRIVACY, YOU SHOULD IMMEDIATELY EXIT AND AVOID MAKING ANY USE OF King of status\'S SERVICES</p><p dir=\"ltr\">Privacy Policy Update</p><p dir=\"ltr\">Justapps Apps will occasionally update this privacy statement. When we do so, we will also revise the \"last modified\" date of the privacy statement.</p><p dir=\"ltr\">User Content.</p><p dir=\"ltr\">All Content added, uploaded, submitted, distributed, posted to, or created using the Services by users (collectively \"User Content\"), whether publicly posted or privately transmitted, is the sole responsibility of the person who originated such User Content. You represent that all User Content provided by you is accurate, complete, up-to-date, and in compliance with all applicable laws, rules and regulations. Without limiting the generality of the foregoing, you represent that any User Content you create using tools accessible on the Services does not infringe upon the intellectual property rights of any third party and is otherwise in compliance with all applicable laws, rules and regulations. You acknowledge that all Content, including User Content, accessed by you using the Services is at your own risk and you will be solely responsible for any damage or loss to you or any other party resulting therefrom. We do not guarantee that any Content you access on or through the Services is or will continue to be accurate.</p><p dir=\"ltr\">Availability of Content.</p><p dir=\"ltr\">We do not guarantee that any Content will be made available on the Site or through the Services. We reserve the right to, but do not have any obligation to, (i) remove, edit, modify, or block from the Services any Content in our sole discretion, at any time, without notice to you and for any reason (including, but not limited to, upon receipt of claims or allegations from third parties or authorities relating to such Content or if we are concerned that you may have breached the final sentence of the immediately foregoing paragraph), or for no reason at all.</p>', '2021-10-10 10:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admins', NULL, '$2y$10$N8KQVZjbgulWehmdecCXGO684FUMHC2XqBdntwqH8mZT73rnxgf..', NULL, '2021-08-09 22:53:11', '2021-10-10 11:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device_tokens`
--
ALTER TABLE `device_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `device_tokens`
--
ALTER TABLE `device_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
