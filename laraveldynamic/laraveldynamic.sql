-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 01:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` blob DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `title`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(9, '683ffd052fe33.png', 'Azmal Ansari', NULL, 'azmal-ansari', 0x3c703e546f203c7374726f6e6720646174612d73746172743d22332220646174612d656e643d223431223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7374726f6e673e20696e20796f7572204c61726176656c206170702028652e672e2c203c636f646520646174612d73746172743d2236392220646174612d656e643d223833223e736974655f73657474696e673c2f636f64653e2c203c636f646520646174612d73746172743d2238352220646174612d656e643d223936223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72203c7374726f6e6720646174612d73746172743d223136312220646174612d656e643d22313739223e62657374207072616374696365733c2f7374726f6e673e20646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e3c703e546f203c7374726f6e6720646174612d73746172743d22332220646174612d656e643d223431223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7374726f6e673e20696e20796f7572204c61726176656c206170702028652e672e2c203c636f646520646174612d73746172743d2236392220646174612d656e643d223833223e736974655f73657474696e673c2f636f64653e2c203c636f646520646174612d73746172743d2238352220646174612d656e643d223936223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72203c7374726f6e6720646174612d73746172743d223136312220646174612d656e643d22313739223e62657374207072616374696365733c2f7374726f6e673e20646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e3c703e546f203c7374726f6e6720646174612d73746172743d22332220646174612d656e643d223431223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7374726f6e673e20696e20796f7572204c61726176656c206170702028652e672e2c203c636f646520646174612d73746172743d2236392220646174612d656e643d223833223e736974655f73657474696e673c2f636f64653e2c203c636f646520646174612d73746172743d2238352220646174612d656e643d223936223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72203c7374726f6e6720646174612d73746172743d223136312220646174612d656e643d22313739223e62657374207072616374696365733c2f7374726f6e673e20646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e3c703e546f203c7374726f6e6720646174612d73746172743d22332220646174612d656e643d223431223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7374726f6e673e20696e20796f7572204c61726176656c206170702028652e672e2c203c636f646520646174612d73746172743d2236392220646174612d656e643d223833223e736974655f73657474696e673c2f636f64653e2c203c636f646520646174612d73746172743d2238352220646174612d656e643d223936223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72203c7374726f6e6720646174612d73746172743d223136312220646174612d656e643d22313739223e62657374207072616374696365733c2f7374726f6e673e20646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e, 1, '2025-06-04 13:30:05', NULL),
(10, '683ffe96b73fe.webp', 'CHATTISGARH', NULL, 'chattisgarh', 0x3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20666f6e742d73697a653a20313770783b223e546f266e6273703b3c7370616e20646174612d73746172743d22332220646174612d656e643d22343122207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7370616e3e266e6273703b696e20796f7572204c61726176656c206170702028652e672e2c266e6273703b3c636f646520646174612d73746172743d2236392220646174612d656e643d22383322207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e736974655f73657474696e673c2f636f64653e2c266e6273703b3c636f646520646174612d73746172743d2238352220646174612d656e643d22393622207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72266e6273703b3c7370616e20646174612d73746172743d223136312220646174612d656e643d2231373922207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e62657374207072616374696365733c2f7370616e3e266e6273703b646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20666f6e742d73697a653a20313770783b223e546f266e6273703b3c7370616e20646174612d73746172743d22332220646174612d656e643d22343122207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7370616e3e266e6273703b696e20796f7572204c61726176656c206170702028652e672e2c266e6273703b3c636f646520646174612d73746172743d2236392220646174612d656e643d22383322207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e736974655f73657474696e673c2f636f64653e2c266e6273703b3c636f646520646174612d73746172743d2238352220646174612d656e643d22393622207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72266e6273703b3c7370616e20646174612d73746172743d223136312220646174612d656e643d2231373922207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e62657374207072616374696365733c2f7370616e3e266e6273703b646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20666f6e742d73697a653a20313770783b223e546f266e6273703b3c7370616e20646174612d73746172743d22332220646174612d656e643d22343122207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7370616e3e266e6273703b696e20796f7572204c61726176656c206170702028652e672e2c266e6273703b3c636f646520646174612d73746172743d2236392220646174612d656e643d22383322207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e736974655f73657474696e673c2f636f64653e2c266e6273703b3c636f646520646174612d73746172743d2238352220646174612d656e643d22393622207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72266e6273703b3c7370616e20646174612d73746172743d223136312220646174612d656e643d2231373922207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e62657374207072616374696365733c2f7370616e3e266e6273703b646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20666f6e742d73697a653a20313770783b223e546f266e6273703b3c7370616e20646174612d73746172743d22332220646174612d656e643d22343122207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e7072696e7420616e6420636865636b2064617461206f6e20657665727920706167653c2f7370616e3e266e6273703b696e20796f7572204c61726176656c206170702028652e672e2c266e6273703b3c636f646520646174612d73746172743d2236392220646174612d656e643d22383322207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e736974655f73657474696e673c2f636f64653e2c266e6273703b3c636f646520646174612d73746172743d2238352220646174612d656e643d22393622207374796c653d22666f6e742d66616d696c793a206d6f6e6f73706163652c206d6f6e6f73706163653b20666f6e742d73697a653a2031656d3b20636f6c6f723a20726762283233322c2036322c20313430293b223e6d6574615f646174613c2f636f64653e292c20796f75206861766520612066657720636c65616e206f7074696f6e732e2048657265e2809973206120737465702d62792d7374657020677569646520666f72266e6273703b3c7370616e20646174612d73746172743d223136312220646174612d656e643d2231373922207374796c653d22666f6e742d7765696768743a20626f6c6465723b223e62657374207072616374696365733c2f7370616e3e266e6273703b646570656e64696e67206f6e207768617420796f752077616e743a3c2f703e, 1, '2025-06-04 13:36:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `addeddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE `engineer` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `work_p` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`id`, `image`, `name`, `work_p`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'team-thumb-05.jpg', 'Wolverine', 'Mechanic', 1, '2022-08-25 12:43:48', '0000-00-00 00:00:00'),
(3, 'team-thumb-01.jpg', 'Wedding', 'Mechanic', 1, '2022-08-25 12:44:00', '0000-00-00 00:00:00'),
(4, 'team-thumb-03.jpg', 'Birthday', 'Mechanic', 1, '2022-08-25 12:44:09', '0000-00-00 00:00:00'),
(5, 'team-thumb-04.jpg', 'Venom', 'Mechanic', 1, '2022-08-25 12:44:24', '0000-00-00 00:00:00'),
(6, 'fevi2.png', 'Hulk', 'Mechanic', 1, '2022-08-25 12:44:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `device_id` text NOT NULL,
  `ip_address` text NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `logout_date` date DEFAULT NULL,
  `logout_time` time DEFAULT NULL,
  `login_status` int(11) NOT NULL COMMENT '0=login,1=logout,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(150) DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` varchar(150) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `add_date_time` datetime DEFAULT NULL,
  `update_date_time` datetime DEFAULT NULL,
  `update_history` text DEFAULT NULL,
  `is_delete` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `type` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `slug`, `add_date_time`, `update_date_time`, `update_history`, `is_delete`, `status`, `type`) VALUES
(11, NULL, NULL, NULL, NULL, NULL, 'technicians-for-service', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'azmal title', 'azmal author', 'azmal keyword', 'azmal desxcription', 'azmal-ansari', NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, 'chattisgarh', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'service', 'service author', 'service jeyword', 'service description', 'service', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multipleimage`
--

CREATE TABLE `multipleimage` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `multiple_image_json` text DEFAULT NULL,
  `single_image_data` text DEFAULT NULL,
  `multiple_images` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` text DEFAULT NULL,
  `modifieddate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'barand2.png', 1, '2022-08-25 12:16:46', '0000-00-00 00:00:00'),
(3, 'barand6.png', 1, '2022-08-25 12:16:52', '0000-00-00 00:00:00'),
(4, 'barand6.png', 1, '2022-08-25 12:16:58', '0000-00-00 00:00:00'),
(5, 'barand2.png', 1, '2022-08-25 12:17:08', '0000-00-00 00:00:00'),
(6, 'barand6.png', 1, '2022-08-25 12:17:12', '0000-00-00 00:00:00'),
(7, 'barand2.png', 1, '2022-08-25 12:17:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=hospital,2=physician,3=ambulance,4=pathlogy,5=user',
  `username` text NOT NULL,
  `slug` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `opning_time` text NOT NULL,
  `overview` blob NOT NULL,
  `location` blob NOT NULL,
  `bussiness_hour` blob NOT NULL,
  `logo` text NOT NULL,
  `total_bed` text NOT NULL,
  `avaliable_bed` text NOT NULL,
  `image` text NOT NULL,
  `ambulance_status` float NOT NULL COMMENT '1=active,0=deactive',
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `role_access` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `role_access`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'HR TEAM', 'hr-team', '{\"main_access\":[\"0\",\"1\",\"2\",\"4\",\"5\"],\"inner_access\":[[\"3\"],[\"3\"],[\"3\"],[],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:20:06', '2024-07-31 13:01:40'),
(2, 'NATIONAL SALE MANAGER', 'national-sale-manager', '{\"main_access\":[\"2\"],\"inner_access\":[[],[],[\"3\",\"4\"]]}', 1, '2024-07-30 13:20:42', '2024-07-30 16:17:25'),
(3, 'MIS ADMIN', 'mis-admin', '{\"main_access\":[\"1\"],\"inner_access\":[[],[\"2\",\"3\"],[]]}', 1, '2024-07-30 13:20:54', '2024-07-30 16:17:21'),
(4, 'ACCOUNTS TEAM', 'accounts-team', '{\"main_access\":[\"0\"],\"inner_access\":[[\"2\",\"4\"],[],[]]}', 1, '2024-07-30 13:21:07', '2024-07-30 16:17:16'),
(5, 'PRODUCTION TEAM', 'production-team', '{\"main_access\":[\"0\",\"1\",\"2\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:21:20', '2024-07-30 17:42:01'),
(7, 'test', 'test', '{\"main_access\":[\"0\",\"1\",\"2\",\"7\"],\"inner_access\":[[\"1\",\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\"],[],[],[],[],[\"3\"]]}', 1, '2024-07-30 17:44:07', '2024-08-20 13:08:46'),
(8, 'Azmal Ansari', 'azmal-ansari', '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', 1, '2024-08-24 17:03:02', '2024-09-06 17:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1FVQnM2wndJGKkGMQnNVDEVhBuH4o6WXpqIhyBdz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEkzeVZNU0l5TE5SMEpvMnVjTDVqRE04WURlMW9DVW1iQ1pzc2FWTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbGR5bmFtaWMvYWJvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749032632),
('FuEm3o21UoO13COF6CfPlEbjzqWMoqOxWAJwZ2sl', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTY0OG83eExtb2RSYkdmMEs1Q2ZtOXZyOU04WEVHbDV1MWZ3TkxDYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbGR5bmFtaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749100103),
('TjHENWQo0XUuXAfZ6iuJuszyFzzxwLu4Jr8C408t', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NzoiaHR0cDovL2xvY2FsaG9zdC9sYXJhdmVsZHluYW1pYy9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiQ2pWUnJJaHhHTWJIY3dEbEJDUGhyNGZEdEhGdjhwWmN5Q2poWXdtNCI7czo4OiJhZG1pbl9pZCI7aToyO3M6MTQ6ImFkbWluX3VzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjEwOiJhZG1pbl9uYW1lIjtzOjU6IkFkbWluIjt9', 1749121016),
('tjHn4z13BfWa7jgdVz3yP4SortpTrcHJfv8FMFxl', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRFdrbGpmUXdYYzlzSnZZMFAza2Y3M0lSQUpJUUZuWllUZkVRMk1LOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbGR5bmFtaWMvY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6ODoiYWRtaW5faWQiO2k6MjtzOjE0OiJhZG1pbl91c2VybmFtZSI7czo1OiJhZG1pbiI7czoxMDoiYWRtaW5fbmFtZSI7czo1OiJBZG1pbiI7fQ==', 1749038409),
('v8RrmI34rvyVvoJYlXMAYz39wf2CMGNKYe2cA7x1', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0dyUkF0NzNSNDAwdzNNVUl5NTViQXptMW9XMEQ1VzA4blBpTW9VNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbGR5bmFtaWMvYWJvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749033829),
('vwYK9TQNEGbSeYuDG8Noit5WuOxIkaEpk3Ae1lGd', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUk5bjRLb3NQMWhRRllTbUxtZkxnOFQ2Sk5NQ3QxcG5pUE1tb3FvcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzY6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbGR5bmFtaWMvYXNzZXRzL2Nzcy9hc3NldHMvaW1hZ2VzL2hhY2tlcnktc2xpZGVyMS5qcGciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749816384),
('WZYp9ObLnr8obJnfePJ9gB3DV2HQL1CysIVP48Ax', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibnNxTUlWV1hodjhueHQxWHdGalFLQ21TYlBBczNKclJZbEpnTDJCNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbGR5bmFtaWMvYWRtaW4vc2xpZGVyIjt9czo4OiJhZG1pbl9pZCI7aToyO3M6MTQ6ImFkbWluX3VzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjEwOiJhZG1pbl9uYW1lIjtzOjU6IkFkbWluIjt9', 1749110566),
('xir8snjwp1z87lEhvFK0tjW01HsCyVoHClYLXg9H', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NjoiaHR0cDovL2xvY2FsaG9zdC9sYXJhdmVsZHluYW1pYy9hc3NldHMvY3NzL2Fzc2V0cy9pbWFnZXMvaGFja2VyeS1zbGlkZXIxLmpwZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJmcDJwWU8wdnRiNUM5U3JObnR4ZW93OTU0Q2ZVa3Jpb3drM3M1SFhZIjt9', 1749100108);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '683ff0f0500e7.png', '9856472360', '9586741023', 'email@gmail.com', 'altemail@gmail.com', 'your addressssss', 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `url` text NOT NULL,
  `slug` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `url`, `slug`, `image`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'Best mechanical for service ', NULL, 'service', NULL, 'hackery-slider1.jpg', 'Perspicis unde omne iste natus error sit voluptatem acntium doloremque laudanum totam', 1, '2022-08-25 12:06:17', '0000-00-00 00:00:00'),
(3, 'Technicians for service', NULL, 'service', 'technicians-for-service', 'hackery-slider2.jpg', 'Perspicis unde omne iste natus error sit voluptatem acntium doloremque laudanum totam', 1, '2022-08-25 12:07:04', '2025-06-04 13:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `page_name` varchar(150) NOT NULL,
  `controller_name` varchar(150) NOT NULL,
  `p_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `slug`, `table_name`, `page_name`, `controller_name`, `p_id`) VALUES
(306, 'azmal-ansari', 'blog', 'blog-details', 'blog', 9),
(307, 'chattisgarh', 'blog', 'blog-details', 'blog', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=admin,2=subadmin',
  `role` int(11) DEFAULT NULL,
  `access` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `martial` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `hash_key` text DEFAULT NULL,
  `hash_expiry` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `type`, `role`, `access`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`, `hash_key`, `hash_expiry`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 0, '', 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi', NULL, NULL, 1, NULL, NULL),
(2, 1, 0, '', 'Admin', NULL, 'admin', 'admin', 'admin123@gmail.com', '95822980123', 'India', '675442c5d265d.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 8, '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', '', '', 'azmal12345', 'azmal12345', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2024-11-13 15:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `slug`, `position`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(2, '6759696624865.png', 'Arman Ansari', 'arman-ansari', 'Client', 'Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim', 1, '2024-12-11 15:56:37', '2024-12-11 16:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipleimage`
--
ALTER TABLE `multipleimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
