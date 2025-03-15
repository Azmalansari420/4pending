-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 01:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1685947652.png', 'What a Real Relationship Looks Like', 'what-a-real-relationship-looks-like', '<p>Do you ever think negatively about your partner and your relationship? Maybe you feel:</p><p>Disappointment. Disagreement. Out of sync. Out of touch. Lack of balance. Unfulfilled expectations. Unmet needs.</p><p>You probably do not associate these words with what happens in a good relationship. That is perfectly understandable. And yet, that’s exactly what happens in a successful, real relationship.</p><ul><li>Many of us grew up without watching a real relationship unfold day in and day out</li><li>Our main source of information about successful relationships comes from Hollywood movies that never show us the sequels to the “happily ever after”</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/5-reasons-intimate-relationships-hard-today/\">We lead pretty isolated lives in spite our constant connectivity</a>. We don’t have role models of successful relationships and we live in an anti-relational cultural environment</li><li>Our ideas about what happens are rooted in our imagination, not in reality</li></ul><p><strong>In real relationships:</strong></p><ul><li>We are disappointed</li><li>We don’t get our needs met</li><li>We can be out of touch and out of sync</li><li>There are some things on which we never agree</li><li>Our partner may exhibit personality characteristics or behaviors that we dislike</li></ul><h2>Good Relationships: Ups Versus Downs</h2><p>In successful relationships the ups outweigh the downs. Periods of harmony follow tough transitions. Partners <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/relationship-troubles-why-are-relationships-so-hard/\">deal with disagreements</a>&nbsp;and unmet needs. Empathy trumps hostility. Expectations get reconsidered, clarified, and addressed yet again.</p><p>And of course, in a real, successful relationship, we can repair and apologize, forgive and rebalance. And we do this with respect, patience, acceptance, love, and caring acts.</p><p>Then, we do it all over again.</p><p>However, consistent, negative thoughts about your partner can lead to severely distressed relationships.</p>', 1, '2023-06-05 12:17:32', '0000-00-00 00:00:00'),
(2, '1685947735.png', '5 Things You Can do to Improve your Relationship ', '5-things-you-can-do-to-improve-your-relationship', '<p><br></p><p>Do you ever think negatively about your partner and your relationship? Maybe you feel:</p><p>Disappointment. Disagreement. Out of sync. Out of touch. Lack of balance. Unfulfilled expectations. Unmet needs.</p><p>You probably do not associate these words with what happens in a good relationship. That is perfectly understandable. And yet, that’s exactly what happens in a successful, real relationship.</p><ul><li>Many of us grew up without watching a real relationship unfold day in and day out</li><li>Our main source of information about successful relationships comes from Hollywood movies that never show us the sequels to the “happily ever after”</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/5-reasons-intimate-relationships-hard-today/\">We lead pretty isolated lives in spite our constant connectivity</a>. We don’t have role models of successful relationships and we live in an anti-relational cultural environment</li><li>Our ideas about what happens are rooted in our imagination, not in reality</li></ul><p><strong>In real relationships:</strong></p><ul><li>We are disappointed</li><li>We don’t get our needs met</li><li>We can be out of touch and out of sync</li><li>There are some things on which we never agree</li><li>Our partner may exhibit personality characteristics or behaviors that we dislike</li></ul><h2>Good Relationships: Ups Versus Downs</h2><p>In successful relationships the ups outweigh the downs. Periods of harmony follow tough transitions. Partners <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/relationship-troubles-why-are-relationships-so-hard/\">deal with disagreements</a>&nbsp;and unmet needs. Empathy trumps hostility. Expectations get reconsidered, clarified, and addressed yet again.</p><p>And of course, in a real, successful relationship, we can repair and apologize, forgive and rebalance. And we do this with respect, patience, acceptance, love, and caring acts.</p><p>Then, we do it all over again.</p><p>However, consistent, negative thoughts about your partner can lead to severely distressed relationships.</p>', 1, '2023-06-05 12:18:55', '2023-06-20 05:28:50'),
(3, '1685947833.png', 'Marriage Advice for Newlyweds', 'marriage-advice-for-newlyweds', '<p>Do you ever think negatively about your partner and your relationship? Maybe you feel:</p><p>Disappointment. Disagreement. Out of sync. Out of touch. Lack of balance. Unfulfilled expectations. Unmet needs.</p><p>You probably do not associate these words with what happens in a good relationship. That is perfectly understandable. And yet, that’s exactly what happens in a successful, real relationship.</p><ul><li>Many of us grew up without watching a real relationship unfold day in and day out</li><li>Our main source of information about successful relationships comes from Hollywood movies that never show us the sequels to the “happily ever after”</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/5-reasons-intimate-relationships-hard-today/\">We lead pretty isolated lives in spite our constant connectivity</a>. We don’t have role models of successful relationships and we live in an anti-relational cultural environment</li><li>Our ideas about what happens are rooted in our imagination, not in reality</li></ul><p><strong>In real relationships:</strong></p><ul><li>We are disappointed</li><li>We don’t get our needs met</li><li>We can be out of touch and out of sync</li><li>There are some things on which we never agree</li><li>Our partner may exhibit personality characteristics or behaviors that we dislike</li></ul><h2>Good Relationships: Ups Versus Downs</h2><p>In successful relationships the ups outweigh the downs. Periods of harmony follow tough transitions. Partners <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/relationship-troubles-why-are-relationships-so-hard/\">deal with disagreements</a>&nbsp;and unmet needs. Empathy trumps hostility. Expectations get reconsidered, clarified, and addressed yet again.</p><p>And of course, in a real, successful relationship, we can repair and apologize, forgive and rebalance. And we do this with respect, patience, acceptance, love, and caring acts.</p><p>Then, we do it all over again.</p><p>However, consistent, negative thoughts about your partner can lead to severely distressed relationships.</p>', 1, '2023-06-05 12:20:33', '0000-00-00 00:00:00'),
(4, '1685947855.png', 'Give and Take', 'give-and-take', '<p>Do you ever think negatively about your partner and your relationship? Maybe you feel:</p><p>Disappointment. Disagreement. Out of sync. Out of touch. Lack of balance. Unfulfilled expectations. Unmet needs.</p><p>You probably do not associate these words with what happens in a good relationship. That is perfectly understandable. And yet, that’s exactly what happens in a successful, real relationship.</p><ul><li>Many of us grew up without watching a real relationship unfold day in and day out</li><li>Our main source of information about successful relationships comes from Hollywood movies that never show us the sequels to the “happily ever after”</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/5-reasons-intimate-relationships-hard-today/\">We lead pretty isolated lives in spite our constant connectivity</a>. We don’t have role models of successful relationships and we live in an anti-relational cultural environment</li><li>Our ideas about what happens are rooted in our imagination, not in reality</li></ul><p><strong>In real relationships:</strong></p><ul><li>We are disappointed</li><li>We don’t get our needs met</li><li>We can be out of touch and out of sync</li><li>There are some things on which we never agree</li><li>Our partner may exhibit personality characteristics or behaviors that we dislike</li></ul><h2>Good Relationships: Ups Versus Downs</h2><p>In successful relationships the ups outweigh the downs. Periods of harmony follow tough transitions. Partners <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.couples-counseling-now.com/relationship-troubles-why-are-relationships-so-hard/\">deal with disagreements</a>&nbsp;and unmet needs. Empathy trumps hostility. Expectations get reconsidered, clarified, and addressed yet again.</p><p>And of course, in a real, successful relationship, we can repair and apologize, forgive and rebalance. And we do this with respect, patience, acceptance, love, and caring acts.</p><p>Then, we do it all over again.</p><p>However, consistent, negative thoughts about your partner can lead to severely distressed relationships.</p>', 1, '2023-06-05 12:20:55', '0000-00-00 00:00:00');

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
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(2, 'Azmal Ansari', 'wolverine@gmail.com', '645416', '45sdfsd', 'ad asds');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `happy_story`
--

CREATE TABLE `happy_story` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `small_info` text NOT NULL,
  `content` longtext NOT NULL,
  `youtube` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `happy_story`
--

INSERT INTO `happy_story` (`id`, `image`, `name`, `slug`, `small_info`, `content`, `youtube`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1687178281.jpg', 'Alex & Dolorita  Prieto', 'alex-dolorita-prieto', ' If I had a flower every time I thought of you, I could walk in my garden forever.', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EMVIy-voVks\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 06:08:01', '2023-06-19 06:46:09'),
(2, '1687179437.jpg', 'Robert &amp; Dolorita  Prieto', 'robert-amp-dolorita-prieto', 'Relationship are always stronger when you are best friends first, and a couple second.', 'Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.Relationship are always stronger when you are best friends first, and a couple second.<br>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EMVIy-voVks\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 06:27:17', '0000-00-00 00:00:00'),
(3, '1687179456.jpg', 'Derrick &amp; Gregory J Luton', 'derrick-amp-gregory-j-luton', ' Sometimes I look at you and I woder hoe i got to be so damn lucky.', '&nbsp;Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky. Sometimes I look at you and I woder hoe i got to be so damn lucky.&nbsp;Sometimes I look at you and I woder hoe i got to be so damn lucky.<br>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EMVIy-voVks\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 06:27:36', '0000-00-00 00:00:00'),
(4, '1687179477.jpg', 'Kathy & Kimberley Lang', 'kathy-kimberley-lang', ' Me & You we could make the whole world jealous.', '&nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. &nbsp;Me &amp; You we could make the whole world jealous. <br>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EMVIy-voVks\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 06:27:57', '2023-06-19 06:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `field_1` varchar(500) NOT NULL,
  `field_2` varchar(500) NOT NULL,
  `field_3` varchar(500) NOT NULL,
  `field_4` varchar(500) NOT NULL,
  `field_5` varchar(500) NOT NULL,
  `field_6` varchar(500) NOT NULL,
  `price` varchar(20) NOT NULL,
  `days` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `image`, `name`, `field_1`, `field_2`, `field_3`, `field_4`, `field_5`, `field_6`, `price`, `days`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1683201469.png', 'Free', '5 Express Interests', ' 2 Gallery Photo Upload', '0 Contact Info View', 'Show Auto Profile Match', '', '', 'Free', '10 Days', 1, '2023-05-04 05:27:49', '0000-00-00 00:00:00'),
(2, '1683201569.png', 'Bronze Package', ' 30 Express Interests', '30 Gallery Photo Upload', '5 Contact Info View', 'Show Auto Profile Match', '', '', '30 ₹', '30 Days', 1, '2023-05-04 05:29:29', '2023-05-04 06:07:37'),
(3, '1683201672.png', 'Silver Package', '40 Express Interests', ' 50 Gallery Photo Upload', ' 10 Contact Info View', ' Show Auto Profile Match', '', '', '40 ₹', '60 Days', 1, '2023-05-04 05:31:12', '2023-05-04 06:07:33'),
(4, '1683201740.png', 'Gold Package', ' 50 Express Interests', ' 60 Gallery Photo Upload', ' 15 Contact Info View', ' Show Auto Profile Match', '', '', '50 ₹', '90 Days', 1, '2023-05-04 05:32:20', '2023-05-04 06:07:29'),
(5, '1683201824.png', 'Diamond Package', '90 Express Interests', '80 Gallery Photo Upload', '20 Contact Info View', 'Show Auto Profile Match', '', '', '100 ₹', '120 Days', 1, '2023-05-04 05:33:44', '2023-05-04 06:07:25'),
(6, '1683201969.png', 'Platinum Package', ' 500 Express Interests', ' 500 Gallery Photo Upload', '500 Contact Info View', ' Show Auto Profile Match', '', '', '200 ₹', '365 Days', 1, '2023-05-04 05:36:09', '2023-05-04 06:07:00'),
(7, '1683202785.png', 'Professional Package', '1000 Express Interests', '1000 Gallery Photo Upload', ' 1000 Contact Info View', 'Show Auto Profile Match', '', '', '300 ₹', '790 Days', 1, '2023-05-04 05:49:45', '2023-05-04 06:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `memeber_id` varchar(50) NOT NULL,
  `membership` int(11) NOT NULL COMMENT '1=Premium\r\n0=new member',
  `image` text NOT NULL,
  `on_behalf` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `country_code` varchar(20) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `reffer_code` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `introduction` text NOT NULL,
  `marital_status` text NOT NULL,
  `children` text NOT NULL,
  `present_country_id` text NOT NULL,
  `present_state_id` text NOT NULL,
  `present_city_id` text NOT NULL,
  `present_postal_code` text NOT NULL,
  `height` text NOT NULL,
  `weight` text NOT NULL,
  `eye_color` text NOT NULL,
  `hair_color` text NOT NULL,
  `complexion` text NOT NULL,
  `blood_group` text NOT NULL,
  `body_type` text NOT NULL,
  `body_art` text NOT NULL,
  `disability` text NOT NULL,
  `mothere_tongue` text NOT NULL,
  `known_languages` text NOT NULL,
  `hobbies` text NOT NULL,
  `interests` text NOT NULL,
  `music` text NOT NULL,
  `books` text NOT NULL,
  `movies` text NOT NULL,
  `tv_shows` text NOT NULL,
  `sports` text NOT NULL,
  `fitness_activities` text NOT NULL,
  `cuisines` text NOT NULL,
  `dress_styles` text NOT NULL,
  `affection` text NOT NULL,
  `humor` text NOT NULL,
  `political_views` text NOT NULL,
  `religious_service` text NOT NULL,
  `birth_country_id` text NOT NULL,
  `recidency_country_id` text NOT NULL,
  `growup_country_id` text NOT NULL,
  `immigration_status` text NOT NULL,
  `member_religion_id` text NOT NULL,
  `member_caste_id` text NOT NULL,
  `member_sub_caste_id` text NOT NULL,
  `ethnicity` text NOT NULL,
  `personal_value` text NOT NULL,
  `family_value_id` text NOT NULL,
  `community_value` text NOT NULL,
  `diet` text NOT NULL,
  `drink` text NOT NULL,
  `smoke` text NOT NULL,
  `living_with` text NOT NULL,
  `sun_sign` text NOT NULL,
  `moon_sign` text NOT NULL,
  `time_of_birth` text NOT NULL,
  `city_of_birth` text NOT NULL,
  `permanent_country_id` text NOT NULL,
  `permanent_state_id` text NOT NULL,
  `permanent_city_id` text NOT NULL,
  `permanent_postal_code` text NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `sibling` text NOT NULL,
  `general` text NOT NULL,
  `residence_country_id` text NOT NULL,
  `partner_height` text NOT NULL,
  `partner_weight` text NOT NULL,
  `partner_marital_status` text NOT NULL,
  `partner_children_acceptable` text NOT NULL,
  `partner_religion_id` text NOT NULL,
  `partner_caste_id` text NOT NULL,
  `partner_sub_caste_id` text NOT NULL,
  `language_id` text NOT NULL,
  `pertner_education` text NOT NULL,
  `partner_profession` text NOT NULL,
  `smoking_acceptable` text NOT NULL,
  `drinking_acceptable` text NOT NULL,
  `partner_diet` text NOT NULL,
  `partner_body_type` text NOT NULL,
  `partner_personal_value` text NOT NULL,
  `partner_manglik` text NOT NULL,
  `partner_country_id` text NOT NULL,
  `partner_state_id` text NOT NULL,
  `family_value_id2` text NOT NULL,
  `pertner_complexion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `memeber_id`, `membership`, `image`, `on_behalf`, `first_name`, `last_name`, `gender`, `dob`, `email`, `country_code`, `mobile`, `password`, `confirm_password`, `reffer_code`, `status`, `addeddate`, `introduction`, `marital_status`, `children`, `present_country_id`, `present_state_id`, `present_city_id`, `present_postal_code`, `height`, `weight`, `eye_color`, `hair_color`, `complexion`, `blood_group`, `body_type`, `body_art`, `disability`, `mothere_tongue`, `known_languages`, `hobbies`, `interests`, `music`, `books`, `movies`, `tv_shows`, `sports`, `fitness_activities`, `cuisines`, `dress_styles`, `affection`, `humor`, `political_views`, `religious_service`, `birth_country_id`, `recidency_country_id`, `growup_country_id`, `immigration_status`, `member_religion_id`, `member_caste_id`, `member_sub_caste_id`, `ethnicity`, `personal_value`, `family_value_id`, `community_value`, `diet`, `drink`, `smoke`, `living_with`, `sun_sign`, `moon_sign`, `time_of_birth`, `city_of_birth`, `permanent_country_id`, `permanent_state_id`, `permanent_city_id`, `permanent_postal_code`, `father`, `mother`, `sibling`, `general`, `residence_country_id`, `partner_height`, `partner_weight`, `partner_marital_status`, `partner_children_acceptable`, `partner_religion_id`, `partner_caste_id`, `partner_sub_caste_id`, `language_id`, `pertner_education`, `partner_profession`, `smoking_acceptable`, `drinking_acceptable`, `partner_diet`, `partner_body_type`, `partner_personal_value`, `partner_manglik`, `partner_country_id`, `partner_state_id`, `family_value_id2`, `pertner_complexion`) VALUES
(1, '074a0f6069', 1, 'd60ho8ezrvYMxYH7SaU0mF4UmWttV321vSMrZ8yz.png', 'Selfs', 'Azmal', 'Ansari', 'Male', '1999-01-29', 'azmal@gmail.com', '1', '12345678', '123456', '123456', '12345', 1, '2023-05-01 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Never Married', '', 'India', 'Delhi', '', '', '', '', '', '', 'Fair skin, always burns, sometimes tans', '', 'Skinny bitch', '', '', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Islam', 'Shia', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Goa', 'Rohini', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'a89425f0d4', 0, 'ftplN2fgKnlYgX6qMTj8bYldFN50VZd1wDsuoW4I.png', 'Brother', 'Armaan', 'Malik', 'Male', '1992-12-09', 'admin@gmail.com', '91', '9685741230', '123456', '123456', '123456', 1, '2023-05-01 00:00:00', 'hi am Azmal Ansari. Good morning', 'Never Married', '100', 'India', 'New Delhi', 'uttam nager', '110026', '1.2', '59', 'Black', 'Black', 'Fair skin, always burns, sometimes tans', 'A+', 'Skinny bitch', 'Good', 'No', 'Hindi', 'German, Spanish', 'Watching Anime', 'Anime', 'Love', 'Manga', 'One Stand night', 'One Stand night', 'Cricket', 'Gym', 'ys', 'Formal', 'a feeling of liking and caring for someone or something : tender attachment : fondness She had a deep affection for her parents', 'Incongruity, Slapstick', 'Not interested', 'Not interested', 'India', 'India', 'India', 'no', 'Buddhism', 'Sunni', 'BBB', 'FFF', 'Nothing', '5', 'Good', 'no', 'no', 'no', 'Parents', 'DDDD', 'MMMM', '2023-06-02', 'Delhi', 'India', 'Delhi', 'New Delhi', '11058', 'Yes', 'Yes', 'No', 'Nothing', 'India', '5.5', '80', 'Never Married', 'Does not matter', 'Islam', 'Caste', 'Caste', 'German', 'M.B.B.S', 'Doctor', 'yes', 'yes', 'Does not matter', 'Stable', 'Good', 'yes', 'India', 'Delhi', 'Moderate', 'Fair skin, always burns, sometimes tans'),
(7, 'b179c04202', 1, 'ApRvIDurTmGrHYCP8HNrm5gQyfFByvt02JOnxDWg.png', 'Selfs', 'Shovana ', 'Logan', 'Male', '1972-04-21', 'wolverine@gmail.com', '1', '136546', '123456', '123456', '12345', 1, '2023-05-04 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Never Married', '', 'India', 'New Delhi', 'uttam nager', '', '', '', '', '', 'Fair skin, always burns, sometimes tans', '', 'Skinny bitch', '', '', 'Hindi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Islam', 'Israelites (Yisraelim)', '', '', '', '', '', '', '', '', '', '', '', '', '', 'India', 'Gujarat', 'sec-11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Doctor', '', '', '', '', '', '', '', '', '', ''),
(8, '2bce3a7d91', 0, '9uC6PPkpVpfOu5FuhF2enDj3Com30pgwnLjWZlR1.png', 'Brother', 'Alex', 'Satr', 'Male', '1998-04-29', 'alex@gmail.com', '', '56465465', 'admin', 'admin', 'a89425f0d4', 1, '2023-06-19 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Married', '', 'India', 'New Delhi', '', '', '', '', '', '', 'Fair skin, always burns, sometimes tans', '', 'Skinny bitch', '', '', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Judaismm', 'Vaishyas', '', '', '', '', '', '', '', '', '', '', '', '', '', 'India', 'Haryana', 'nagloi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Doctor', '', '', '', '', '', '', '', '', '', ''),
(9, '7c6f06c3ed', 0, '4KfjU2TSW4HAkmtZN9OGGjfCjAIjoMjn5PB0s6bU.png', 'Brother', 'donna', 'donna', 'Female', '1997-12-10', 'donna@gmail.com', '', '46464654', 'admin', 'admin', '', 1, '2023-06-19 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Never Married', '', 'India', 'New Delhi', '', '', '', '', '', '', ' always burns, sometimes tans', '', 'Skinny bitch', '', '', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Hinduism', 'Brahmin', '', '', '', '', '', '', '', '', '', '', '', '', '', 'India', 'Jharkhand', 'prem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Developer', '', '', '', '', '', '', '', '', '', ''),
(10, '1057f522d5', 0, 'AKgrssE0aIV4yzwTzRQsBaNp93KS2PPp5wqMsld9.png', 'Selfs', 'Sylivia', 'Perryman', 'Female', '1918-12-27', 'sylivia@gmail.com', '1', '11646', 'admin', 'admin', '', 1, '2023-06-19 00:00:00', '44 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Married', '', 'India', 'New Delhi', 'uttam nager', '110026', '155', '', 'green', 'brown', 'Fair skin, always burns, sometimes tans', 'o', 'Skinny bitch', 'fair', 'no', 'English', 'turkish', 'Astronomy,Traditional Sports', 'Astronomy', 'Popular music', 'One Hundred Years of Solitude', 'Munich(2005)', 'Drift Away(by The Doobie Brothers)', 'ricket, Handall', 'Stable', 'Open-minded', 'Midi Dress,Off the Shoulder', '', '', '', '', '', '', '', '', 'Christianity', 'Kshatriyas', '', '', '', '', '', '', '', '', '', '', '', '', '', 'India', 'Delhi', 'rohini', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Developer', '', '', '', '', '', '', '', '', '', ''),
(11, '8c0e24373b', 1, 'EQNFezAk0ZnHgT1f6P2ToxJ5DxZctllDfSy0iuM9.png', 'Selfs', 'nicole', 'nicole', 'Female', '1926-12-29', 'nicole@gmail.com', '', '78898989', 'admin', 'admin', '', 1, '2023-06-19 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Never Married', '', 'India', 'Delhi', '', '', '', '', '', '', 'Fair skin,', '', 'Skinny bitch', '', '', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Jainism', 'Shudras', '', '', '', '', '', '', '', '', '', '', '', '', '', 'India', 'Delhi', 'delhi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Developer', '', '', '', '', '', '', '', '', '', ''),
(12, '90712f7e04', 1, 'fb6a0r1ea9xT1CsDBotRTd6DqvAWS3dODkGr1cUN.png', 'Selfs', 'kathley', 'kathley', 'Female', '1935-12-25', 'kathley@gmail.com', '', '9584712015', 'admin', 'admin', '', 1, '2023-06-19 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Never Married', '', 'India', 'New Delhi', '', '', '', '', '', '', 'Fair skin, always burns, sometimes tans', '', 'Skinny bitch', '', '', 'Hindi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sikhism', 'Brahmin', '', '', '', '', '', '', '', '', '', '', '', '', '', 'India', 'Kerala', 'prem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Developer', '', '', '', '', '', '', '', '', '', '');

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
(1, '1683032910.png', '9856472360', '9586741023', 'email@gmail.com', 'altemail@gmail.com', '1020, 10th Floor Kirti Shikhar Tower, District Center Janakpuri', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.024852414841!2d77.0783872149481!3d28.62901724099117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04bf6ac2495d%3A0xfff07fc03531f009!2sJanakpuri%20District%20Center%2C%20Janakpuri%2C%20Delhi!5e0!3m2!1sen!2sin!4v1667453565010!5m2!1sen!2sin\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `martial` text NOT NULL,
  `age` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`) VALUES
(1, 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi'),
(2, 'Admin', 'Admin', 'admin', 'admin', 'admin1@gmail.com', '95822980123', 'delhi', '1677049590.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi'),
(3, 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1687261617.jpg', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.', 1, '2023-06-20 05:16:57', '2023-06-20 17:17:00'),
(2, '1687261698.jpg', 'Ceck But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.', 1, '2023-06-20 05:18:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `images` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `images`, `status`, `addeddate`, `modifieddate`) VALUES
(12, 2, 'wol.jpg', 1, '2023-06-03 10:46:40', '0000-00-00 00:00:00'),
(14, 2, 'wol2.jpg', 1, '2023-06-03 10:46:40', '0000-00-00 00:00:00'),
(15, 2, 'wol.gif', 1, '2023-06-03 10:51:33', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happy_story`
--
ALTER TABLE `happy_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `happy_story`
--
ALTER TABLE `happy_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
