-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 juil. 2020 à 12:56
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wedding`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`) VALUES
(3, 'Bags', 1),
(4, 'Shoes', 1),
(5, 'Watches', 1),
(7, 'sweat', 1),
(8, 'Tshirts', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `adress` varchar(50) COLLATE utf8_bin NOT NULL,
  `state` int(11) DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `user_id`, `name`, `tel`, `email`, `adress`, `state`, `created`) VALUES
(87, 45, ' idrissEssadik', 6793595, 'idriss34@g.com', 'lissasfa 2', 2, '2020-06-28 21:09:07'),
(92, 45, ' idriss Essadik', 6793595, 'idriss34@g.com', 'lissasfa 2', 1, '2020-07-10 16:01:29'),
(93, 45, ' idriss Essadik', 6793595, 'idriss34@g.com', 'lissasfa 2', 2, '2020-07-12 18:06:37');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `sujet` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `sujet`) VALUES
(1, 'idriss@gmail.com', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb'),
(2, 'idriss@gmail.com', 'fdvfvdvdfv');

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_bin NOT NULL,
  `prixtot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`id`, `commande_id`, `produit_id`, `qte`, `color`, `prixtot`) VALUES
(123, 87, 25, 1, '', 299),
(135, 92, 26, 2, 'Red', 398),
(136, 92, 32, 0, 'White', 0),
(137, 92, 33, 2, 'Blue', 598),
(138, 93, 25, 1, 'Red', 299),
(139, 93, 26, 1, 'White', 199),
(140, 93, 27, 1, 'Red', 249);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `produit_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `name`, `produit_id`, `created`) VALUES
(1095, '22-50-03254084384.jpg', 6, '2020-06-13 22:50:03'),
(1096, '22-50-03129395609.jpg', 6, '2020-06-13 22:50:03'),
(1097, '22-53-201090633230.jpg', 7, '2020-06-13 22:53:20'),
(1098, '22-53-20559711465.jpg', 7, '2020-06-13 22:53:20'),
(1099, '22-53-201132717940.jpg', 7, '2020-06-13 22:53:20'),
(1100, '22-53-20601905763.jpg', 7, '2020-06-13 22:53:20'),
(1101, '22-53-201489734102.jpg', 7, '2020-06-13 22:53:20'),
(1102, '22-58-42456773282.jpg', 8, '2020-06-13 22:58:42'),
(1103, '23-04-06150839797.jpg', 9, '2020-06-13 23:04:06'),
(1104, '23-04-06562385477.jpg', 9, '2020-06-13 23:04:06'),
(1105, '23-05-032032833067.jpg', 10, '2020-06-13 23:05:03'),
(1106, '23-05-03220692522.jpg', 10, '2020-06-13 23:05:03'),
(1107, '23-06-071855224788.jpg', 11, '2020-06-13 23:06:07'),
(1108, '23-06-071824596986.jpg', 11, '2020-06-13 23:06:07'),
(1109, '23-06-07945737613.jpg', 11, '2020-06-13 23:06:07'),
(1110, '23-13-08592522942.jpg', 12, '2020-06-13 23:13:08'),
(1111, '23-13-081777166906.jpg', 12, '2020-06-13 23:13:08'),
(1112, '23-14-591238482166.jpg', 13, '2020-06-13 23:14:59'),
(1113, '23-14-591906011082.jpg', 13, '2020-06-13 23:14:59'),
(1114, '23-14-59307993636.jpg', 13, '2020-06-13 23:14:59'),
(1115, '23-15-33646605468.jpg', 14, '2020-06-13 23:15:33'),
(1116, '23-15-331321532328.jpg', 14, '2020-06-13 23:15:33'),
(1117, '23-15-331305148364.jpg', 14, '2020-06-13 23:15:33'),
(1118, '23-15-331947463546.jpg', 14, '2020-06-13 23:15:33'),
(1119, '23-58-481480775062.jpg', 14, '2020-06-13 23:58:48'),
(1120, '00-00-501088215743.jpg', 15, '2020-06-14 00:00:50'),
(1121, '00-00-501029828806.jpg', 15, '2020-06-14 00:00:50'),
(1122, '00-04-11878850465.jpg', 16, '2020-06-14 00:04:11'),
(1123, '00-04-112114667244.jpg', 16, '2020-06-14 00:04:11'),
(1124, '00-04-111775057262.jpg', 16, '2020-06-14 00:04:11'),
(1125, '00-43-261921897389.jpg', 16, '2020-06-14 00:43:26'),
(1126, '00-43-26258532111.jpg', 16, '2020-06-14 00:43:26'),
(1127, '01-08-101174557084.jpg', 22, '2020-06-14 01:08:10'),
(1128, '01-08-101016585742.jpg', 22, '2020-06-14 01:08:10'),
(1129, '01-08-10151760328.jpg', 22, '2020-06-14 01:08:10'),
(1130, '01-08-10148207239.jpg', 22, '2020-06-14 01:08:10'),
(1131, '01-08-102128467643.jpg', 22, '2020-06-14 01:08:10'),
(1132, '16-54-152018864146.jpg', 23, '2020-06-14 16:54:15'),
(1133, '16-54-151169246515.jpg', 23, '2020-06-14 16:54:15'),
(1228, '17-37-111603226515.jpg', 5, '2020-06-25 17:37:11'),
(1229, '17-37-111960677733.jpg', 5, '2020-06-25 17:37:11'),
(1230, '17-37-111104063501.jpg', 5, '2020-06-25 17:37:11'),
(1231, '22-14-161652644229.webp', 24, '2020-06-27 22:14:16'),
(1232, '22-57-22588473213.webp', 25, '2020-06-27 22:57:22'),
(1233, '22-57-22649978121.webp', 25, '2020-06-27 22:57:22'),
(1234, '22-57-221466486951.webp', 25, '2020-06-27 22:57:22'),
(1235, '22-57-221620055355.webp', 25, '2020-06-27 22:57:22'),
(1237, '23-20-51451292822.webp', 26, '2020-06-27 23:20:51'),
(1238, '23-20-511579726378.webp', 26, '2020-06-27 23:20:51'),
(1239, '23-24-12506209541.webp', 27, '2020-06-27 23:24:12'),
(1240, '23-24-121681960425.webp', 27, '2020-06-27 23:24:12'),
(1241, '23-24-121901408289.webp', 27, '2020-06-27 23:24:12'),
(1242, '23-24-122134326774.webp', 27, '2020-06-27 23:24:12'),
(1243, '00-14-3825949715.webp', 28, '2020-06-28 00:14:38'),
(1244, '14-35-10500326510.webp', 29, '2020-06-28 14:35:10'),
(1245, '14-35-112024977647.webp', 29, '2020-06-28 14:35:11'),
(1246, '14-35-11491243377.webp', 29, '2020-06-28 14:35:11'),
(1247, '14-38-261631705689.webp', 30, '2020-06-28 14:38:26'),
(1248, '14-38-261464112358.webp', 30, '2020-06-28 14:38:26'),
(1249, '14-38-26998683898.webp', 30, '2020-06-28 14:38:26'),
(1250, '14-38-26318457264.webp', 30, '2020-06-28 14:38:26'),
(1251, '14-44-25629632339.webp', 31, '2020-06-28 14:44:25'),
(1252, '14-44-25647374533.webp', 31, '2020-06-28 14:44:25'),
(1253, '14-44-251915267524.webp', 31, '2020-06-28 14:44:25'),
(1254, '14-44-25109121469.webp', 31, '2020-06-28 14:44:25'),
(1255, '14-44-25824226328.webp', 31, '2020-06-28 14:44:25'),
(1256, '14-46-59425086754.webp', 32, '2020-06-28 14:46:59'),
(1257, '14-46-59516391750.webp', 32, '2020-06-28 14:46:59'),
(1258, '14-46-591227138921.webp', 32, '2020-06-28 14:46:59'),
(1259, '14-46-59538264244.webp', 32, '2020-06-28 14:46:59'),
(1260, '14-51-38744760225.webp', 33, '2020-06-28 14:51:38'),
(1261, '14-51-38540040480.webp', 33, '2020-06-28 14:51:38'),
(1262, '14-51-38492046966.webp', 33, '2020-06-28 14:51:38'),
(1263, '14-51-381992464172.webp', 33, '2020-06-28 14:51:38'),
(1264, '14-51-38142641035.webp', 33, '2020-06-28 14:51:38'),
(1265, '15-00-13776536390.webp', 34, '2020-06-28 15:00:13'),
(1266, '15-00-13188767428.webp', 34, '2020-06-28 15:00:13'),
(1267, '15-00-13650891440.webp', 34, '2020-06-28 15:00:13'),
(1268, '15-00-131594090040.webp', 34, '2020-06-28 15:00:13'),
(1269, '15-04-00936139041.webp', 35, '2020-06-28 15:04:00'),
(1270, '15-04-00806630104.webp', 35, '2020-06-28 15:04:00'),
(1271, '15-04-001000811530.webp', 35, '2020-06-28 15:04:00'),
(1272, '15-04-00416052977.webp', 35, '2020-06-28 15:04:00'),
(1273, '15-04-01611318653.webp', 35, '2020-06-28 15:04:01'),
(1274, '15-05-58499044113.webp', 36, '2020-06-28 15:05:58'),
(1275, '15-05-588447533.webp', 36, '2020-06-28 15:05:58'),
(1276, '15-05-581784083621.webp', 36, '2020-06-28 15:05:58'),
(1277, '15-05-581692364355.webp', 36, '2020-06-28 15:05:58'),
(1278, '15-05-58975701465.webp', 36, '2020-06-28 15:05:58'),
(1279, '15-08-22499198010.webp', 37, '2020-06-28 15:08:22'),
(1280, '15-08-221054274405.webp', 37, '2020-06-28 15:08:22'),
(1281, '15-08-221416908957.webp', 37, '2020-06-28 15:08:22'),
(1282, '15-08-22149904106.webp', 37, '2020-06-28 15:08:22'),
(1283, '17-22-42112434610.webp', 38, '2020-06-28 17:22:42'),
(1284, '17-22-421130420573.webp', 38, '2020-06-28 17:22:42'),
(1285, '17-22-421946641518.webp', 38, '2020-06-28 17:22:42'),
(1286, '17-22-42920341595.webp', 38, '2020-06-28 17:22:42'),
(1287, '17-22-421461186537.webp', 38, '2020-06-28 17:22:42'),
(1288, '17-24-05165654503.webp', 39, '2020-06-28 17:24:05'),
(1289, '17-24-0578147472.webp', 39, '2020-06-28 17:24:05'),
(1290, '17-24-051012097978.webp', 39, '2020-06-28 17:24:05'),
(1291, '17-24-0550716824.webp', 39, '2020-06-28 17:24:05'),
(1292, '17-29-071634857799.webp', 40, '2020-06-28 17:29:07'),
(1293, '17-29-071531107306.webp', 40, '2020-06-28 17:29:07'),
(1294, '17-29-08701196733.webp', 40, '2020-06-28 17:29:08'),
(1295, '17-29-08838994543.webp', 40, '2020-06-28 17:29:08'),
(1296, '17-32-29566125156.webp', 41, '2020-06-28 17:30:37'),
(1297, '17-30-37426336633.webp', 41, '2020-06-28 17:30:37'),
(1298, '17-30-371546989410.webp', 41, '2020-06-28 17:30:37'),
(1299, '17-30-37474522700.webp', 41, '2020-06-28 17:30:37'),
(1300, '17-35-26406940325.webp', 42, '2020-06-28 17:34:26'),
(1301, '17-34-26702476970.webp', 42, '2020-06-28 17:34:26'),
(1302, '17-34-262060486064.webp', 42, '2020-06-28 17:34:26'),
(1303, '17-34-26374457733.webp', 42, '2020-06-28 17:34:26'),
(1304, '17-37-30932187096.webp', 43, '2020-06-28 17:37:30'),
(1305, '17-37-30787266664.webp', 43, '2020-06-28 17:37:30'),
(1306, '17-37-301321942673.webp', 43, '2020-06-28 17:37:30'),
(1307, '17-37-301645781977.webp', 43, '2020-06-28 17:37:30'),
(1308, '17-51-59247261854.webp', 44, '2020-06-28 17:45:17'),
(1309, '17-45-171048348563.webp', 44, '2020-06-28 17:45:17'),
(1310, '17-45-171004395786.webp', 44, '2020-06-28 17:45:17'),
(1311, '17-45-172124341746.webp', 44, '2020-06-28 17:45:17'),
(1312, '17-45-171273811632.webp', 44, '2020-06-28 17:45:17'),
(1313, '17-56-14155637399.webp', 45, '2020-06-28 17:56:14'),
(1314, '17-56-14218571508.webp', 45, '2020-06-28 17:56:14'),
(1315, '17-56-141336807954.webp', 45, '2020-06-28 17:56:14'),
(1316, '17-56-141066761203.webp', 45, '2020-06-28 17:56:14'),
(1317, '17-58-031218147729.webp', 46, '2020-06-28 17:58:03'),
(1318, '17-58-031456487638.webp', 46, '2020-06-28 17:58:03'),
(1319, '17-58-031353070451.webp', 46, '2020-06-28 17:58:03'),
(1320, '17-58-03285104267.webp', 46, '2020-06-28 17:58:03'),
(1321, '18-00-342123651144.webp', 47, '2020-06-28 18:00:34'),
(1322, '18-00-341621719112.webp', 47, '2020-06-28 18:00:34'),
(1323, '18-00-341418499773.webp', 47, '2020-06-28 18:00:34'),
(1324, '18-00-34554246992.webp', 47, '2020-06-28 18:00:34'),
(1325, '18-01-571723542702.webp', 48, '2020-06-28 18:01:57'),
(1326, '18-01-57842438789.webp', 48, '2020-06-28 18:01:57'),
(1327, '18-01-571442208396.webp', 48, '2020-06-28 18:01:57'),
(1328, '18-01-571802485340.webp', 48, '2020-06-28 18:01:57'),
(1329, '18-01-57770254473.webp', 48, '2020-06-28 18:01:57'),
(1330, '18-03-271252345532.webp', 49, '2020-06-28 18:03:27'),
(1331, '18-03-27913546181.webp', 49, '2020-06-28 18:03:27'),
(1332, '18-03-27415601889.webp', 49, '2020-06-28 18:03:27'),
(1333, '18-03-27861765248.webp', 49, '2020-06-28 18:03:27'),
(1334, '18-03-27766865175.webp', 49, '2020-06-28 18:03:27'),
(1335, '18-05-392042746169.webp', 50, '2020-06-28 18:05:39'),
(1336, '18-05-391690364988.webp', 50, '2020-06-28 18:05:39'),
(1337, '18-05-39738145109.webp', 50, '2020-06-28 18:05:39'),
(1338, '18-05-39235646093.webp', 50, '2020-06-28 18:05:39'),
(1339, '18-05-39292304890.webp', 50, '2020-06-28 18:05:39'),
(1340, '18-46-201749860124.webp', 51, '2020-06-28 18:46:20'),
(1341, '18-46-201979479093.webp', 51, '2020-06-28 18:46:20'),
(1342, '18-46-201614287696.webp', 51, '2020-06-28 18:46:20'),
(1343, '18-46-20127152583.webp', 51, '2020-06-28 18:46:20'),
(1344, '18-46-201285044836.webp', 51, '2020-06-28 18:46:20'),
(1345, '18-47-45788238017.webp', 52, '2020-06-28 18:47:45'),
(1346, '18-47-462084757764.webp', 52, '2020-06-28 18:47:46'),
(1347, '18-47-462053267659.webp', 52, '2020-06-28 18:47:46'),
(1348, '18-47-461045311549.webp', 52, '2020-06-28 18:47:46'),
(1349, '18-49-28107174232.webp', 53, '2020-06-28 18:49:28'),
(1350, '18-49-28425106299.webp', 53, '2020-06-28 18:49:28'),
(1351, '18-49-29804697565.webp', 53, '2020-06-28 18:49:29'),
(1352, '18-49-291797684993.webp', 53, '2020-06-28 18:49:29'),
(1353, '18-50-551102333331.webp', 54, '2020-06-28 18:50:55'),
(1354, '18-50-551319407743.webp', 54, '2020-06-28 18:50:55'),
(1355, '18-50-551938208965.webp', 54, '2020-06-28 18:50:55'),
(1356, '18-50-552137369776.webp', 54, '2020-06-28 18:50:55'),
(1357, '18-50-56594831496.webp', 54, '2020-06-28 18:50:56'),
(1358, '18-58-301487225594.webp', 55, '2020-06-28 18:52:39'),
(1359, '18-52-391135081927.webp', 55, '2020-06-28 18:52:39'),
(1360, '18-52-391241281888.webp', 55, '2020-06-28 18:52:39'),
(1361, '18-52-391500593701.webp', 55, '2020-06-28 18:52:39'),
(1362, '18-52-391941981981.webp', 55, '2020-06-28 18:52:39'),
(1363, '18-57-00839960831.webp', 56, '2020-06-28 18:57:00'),
(1364, '18-57-001320219531.webp', 56, '2020-06-28 18:57:00'),
(1365, '18-57-001001787920.webp', 56, '2020-06-28 18:57:00'),
(1366, '18-57-001082298075.webp', 56, '2020-06-28 18:57:00'),
(1367, '18-57-00623667544.webp', 56, '2020-06-28 18:57:00'),
(1368, '19-12-521954500949.webp', 57, '2020-06-28 19:12:52'),
(1369, '19-12-521283246984.webp', 57, '2020-06-28 19:12:52'),
(1370, '19-12-5217761941.webp', 57, '2020-06-28 19:12:52'),
(1371, '19-12-5245267419.webp', 57, '2020-06-28 19:12:52'),
(1372, '19-14-22459945143.webp', 58, '2020-06-28 19:14:22'),
(1373, '19-14-221674442997.webp', 58, '2020-06-28 19:14:22'),
(1374, '19-14-2258969029.webp', 58, '2020-06-28 19:14:22'),
(1375, '19-14-22679824824.webp', 58, '2020-06-28 19:14:22'),
(1376, '19-19-111979674328.webp', 59, '2020-06-28 19:19:11'),
(1377, '19-19-111641221592.webp', 59, '2020-06-28 19:19:11'),
(1378, '19-19-111134271536.webp', 59, '2020-06-28 19:19:11'),
(1379, '19-19-11194704482.webp', 59, '2020-06-28 19:19:11'),
(1380, '19-21-13637676698.webp', 60, '2020-06-28 19:21:13'),
(1381, '19-21-131850749988.webp', 60, '2020-06-28 19:21:13'),
(1382, '19-21-13361583480.webp', 60, '2020-06-28 19:21:13'),
(1383, '19-21-131111316680.webp', 60, '2020-06-28 19:21:13'),
(1388, '19-25-181031214303.webp', 61, '2020-06-28 19:25:18'),
(1389, '19-25-181632591045.webp', 61, '2020-06-28 19:25:18'),
(1390, '19-25-181341481636.webp', 61, '2020-06-28 19:25:18'),
(1391, '19-25-191639901570.webp', 61, '2020-06-28 19:25:19'),
(1392, '19-28-051290861732.webp', 62, '2020-06-28 19:28:05'),
(1393, '19-28-0566516762.webp', 62, '2020-06-28 19:28:05'),
(1394, '19-28-051274976459.webp', 62, '2020-06-28 19:28:05'),
(1395, '19-28-051238195697.webp', 62, '2020-06-28 19:28:05'),
(1431, '22-12-051085650706.png', 63, '2020-07-20 22:12:05'),
(1443, '22-34-561296523752.jpg', 64, '2020-07-20 22:26:01'),
(1445, '22-34-561077646863.jpg', 64, '2020-07-20 22:27:19'),
(1446, '22-34-56328878459.jpg', 64, '2020-07-20 22:27:20'),
(1449, '22-35-32824910061.jpg', 64, '2020-07-20 22:35:33'),
(1450, '22-35-332110649310.jpg', 64, '2020-07-20 22:35:33');

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `sex_id` int(11) NOT NULL,
  `info` varchar(255) COLLATE utf8_bin NOT NULL,
  `marque` varchar(50) COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `name`, `prix`, `categorie_id`, `sex_id`, `info`, `marque`, `created`) VALUES
(25, 'Sweat lilas illustration contrastante', 299, 7, 2, 'Sweat lilas 100 % coton à manches longues et col rond, avec illustration contrastante.', 'Pull&Bear', '2020-06-27 22:57:22'),
(26, 'Sweat basic à capuche', 199, 7, 2, 'Sweat basique à capuche et manches longues en coton, disponible en plusieurs couleurs.', 'Pull&Bear', '2020-06-27 23:20:51'),
(27, 'Sweat basique inscription bande', 249, 7, 2, 'Sweat basique en coton à manches longues et col rond, disponible en plusieurs couleurs avec bande et inscription contrastantes.', 'Pull&Bear', '2020-06-27 23:24:12'),
(29, 'Sweat La Casa de Papel x Pull&Bear rouge', 399, 7, 2, 'Autocollant cadeau avec cet article ! Sweat femme La Casa de Papel x Pull&Bear, rouge en coton à capuche et manches longues, avec inscription « Bella Ciao » contrastante.', 'Pull&Bear', '2020-06-28 14:35:10'),
(30, 'Sweat bleu tie-dye avec soleil', 299, 7, 2, 'JOIN LIFE Care for fiber : au moins 50 % de coton organique. Le coton organique est cultivé en suivant des méthodes qui contribuent à préserver la biodiversité, telles que la rotation des cultures ou l’utilisation d’engrais naturels.', 'Pull&Bear', '2020-06-28 14:38:26'),
(31, 'Sweat court gris avec bas élastiqué', 289, 7, 2, 'JOIN LIFE Care for fiber : au moins 50 % de coton organique. Le coton organique est cultivé en suivant des méthodes qui contribuent à préserver la biodiversité, telles que la rotation des cultures ou l’utilisation d’engrais naturels.', 'Pull&Bear', '2020-06-28 14:44:25'),
(32, 'Sweat La Casa de Papel x Pull&Bear Bella Ciao', 399, 7, 2, 'Autocollant cadeau avec cet article ! Sweat femme La Casa de Papel x Pull&Bear, noir en coton à capuche et manches longues, avec inscription « Bella Ciao » contrastante.', 'Pull&Bear', '2020-06-28 14:46:59'),
(33, 'Sweat bleu logo PBTC', 299, 7, 2, 'Sweat bleu en coton avec logo PBTC contrastant sur le devant, manches longues et capuche réglable par cordon.', 'Pull&Bear', '2020-06-28 14:51:38'),
(34, 'T-shirt Care Bears tie-dye', 249, 8, 2, 'Autocollant cadeau avec cet article ! T-shirt Care Bears effet tie-dye 100 % coton à manches courtes et col rond, avec illustration contrastante des personnages.', 'Pull&Bear', '2020-06-28 15:00:13'),
(35, 'T-shirt sans manches épaulettes', 249, 8, 2, 'T-shirt sans manches en coton avec épaulettes et col rond.', 'Pull&Bear', '2020-06-28 15:04:00'),
(36, 'T-shirt blanc « La naissance de Vénus »', 199, 8, 2, 'T-shirt blanc 100 % coton à manches courtes et col rond avec illustration de l’œuvre de Botticelli « La naissance de Vénus ».', 'Pull&Bear', '2020-06-28 15:05:58'),
(37, 'T-shirt basique oversize flammé', 119, 8, 2, 'Chemise basique en coton de coupe oversize en tissu flammé, à manches courtes et col rond.', 'Pull&Bear', '2020-06-28 15:08:22'),
(38, 'T-shirt Smiley effects of art', 249, 8, 2, 'Autocollant cadeau avec cet article ! T-shirt Smiley blanc 100 % coton à manches courtes et col rond, avec illustration et inscription « Effects of art » contrastantes.', 'Pull&Bear', '2020-06-28 17:22:42'),
(39, 'T-shirt Smiley David', 249, 8, 2, 'Autocollant cadeau avec cet article ! T-shirt Smiley blanc 100 % coton à manches courtes et col rond, avec logo contrastant sur « Le David » de Michel-Ange.', 'Pull&Bear', '2020-06-28 17:24:05'),
(40, 'Sac cabas Smiley', 379, 3, 2, 'Sac format cabas blanc avec bandoulières et imprimé Smiley multicolore. Hauteur x Largeur x Profondeur : 43 x 60 x 19 cm.', 'Pull&Bear', '2020-06-28 17:29:07'),
(41, 'Sac banane noir avec chaîne', 249, 3, 2, 'Sac banane noir avec deux poches sur le devant et chaîne métallisée. Hauteur x Largeur x Profondeur : 12 x 32 x 6,5 cm.', 'Pull&Bear', '2020-06-28 17:30:37'),
(42, 'Sac cabas franges', 299, 3, 2, 'Sac style cabas en papier beige avec franges sur les côtés. Hauteur x Largeur x Profondeur : 37 x 32 x 13 cm.', 'Pull&Bear', '2020-06-28 17:34:26'),
(43, 'Sac à dos vinyle', 379, 3, 1, 'Sac à dos pour femme en vinyle et anse noire.', 'Pull&Bear', '2020-06-28 17:37:30'),
(45, 'Baskets montantes Join Life', 499, 4, 1, 'Baskets montantes unisexe à lacets avec bout renforcé. Épaisseur de la semelle : 2,5 cm.', 'Pull&Bear', '2020-06-28 17:56:14'),
(46, 'Baskets montantes Join Life', 499, 4, 1, 'Baskets montantes unisexe à lacets avec bout renforcé. Épaisseur de la semelle : 2,5 cm.', 'Pull&Bear', '2020-06-28 17:58:03'),
(47, 'Baskets montantes Join Life', 499, 4, 1, 'Baskets montantes unisexe à lacets avec bout renforcé. Épaisseur de la semelle : 2,5 cm.', 'Pull&Bear', '2020-06-28 18:00:34'),
(48, 'Baskets semelle épaisse', 399, 4, 1, 'Baskets pour homme blanches à semelle épaisse, lacets et contrefort contrastant. Épaisseur de la semelle : 4,5 cm.', 'Pull&Bear', '2020-06-28 18:01:57'),
(49, 'Tennis semelle épaisse noires', 399, 4, 1, 'Tennis semelle épaisse noires à lacets. Disponibles en plusieurs couleurs.', 'Pull&Bear', '2020-06-28 18:03:27'),
(50, 'Tennis graffiti all over', 399, 4, 1, 'Baskets homme à lacets avec illustration de type graffiti. Épaisseur de la semelle : 3,5 cm.', 'Pull&Bear', '2020-06-28 18:05:39'),
(51, 'T-shirt Looney Tunes Daffy Duck', 249, 8, 1, 'T-shirt Looney Tunes blanc 100 % coton à manches courtes et col rond avec logo et illustration de Daffy Duck.', 'Pull&Bear', '2020-06-28 18:46:20'),
(52, 'T-shirt NASA fusée', 249, 8, 1, 'T-shirt NASA en coton à manches courtes et col rond, avec illustration de fusée.', 'Pull&Bear', '2020-06-28 18:47:45'),
(53, 'T-shirt Smiley tableau', 249, 8, 1, 'T-shirt Smiley 100 % coton à manches courtes et col rond, avec illustration de tableau contrastante.', 'Pull&Bear', '2020-06-28 18:49:28'),
(54, 'T-shirt Popeye blanc oversize', 249, 8, 1, 'T-shirt blanc 100 % coton de coupe oversize, à manches courtes et col rond, avec illustration contrastante de Popeye.', 'Pull&Bear', '2020-06-28 18:50:55'),
(55, 'T-shirt basique en tissu premium à manches courtes', 149, 8, 1, 'T-shirt basique relaxed fit 100 % coton en tissu premium à manches courtes et col rond. JOIN LIFE.', 'Pull&Bear', '2020-06-28 18:52:39'),
(56, 'T-shirt Chapelle Sixtine noir', 249, 8, 1, 'T-shirt Chapelle Sixtine noir 100 % coton, à manches courtes et col rond, avec imprimé photo sur le devant.', 'Pull&Bear', '2020-06-28 18:57:00'),
(57, 'T-shirt Popeye noir oversize', 249, 8, 1, 'T-shirt noir 100 % coton de coupe oversize, à manches courtes et col rond, avec illustration contrastante de Popeye.', 'Pull&Bear', '2020-06-28 19:12:52'),
(58, 'T-shirt illustration contrastante fleurs', 119, 8, 1, 'T-shirt 100 % coton à manches courtes et col rond, disponible dans différentes couleurs avec illustration de fleurs contrastante.', 'Pull&Bear', '2020-06-28 19:14:22'),
(59, 'Montre caoutchouc vert', 289, 5, 1, 'Montre avec bracelet en caoutchouc vert et cadran rond contrastant.', 'Pull&Bear', '2020-06-28 19:19:11'),
(60, 'Montre noire réfléchissante', 249, 5, 1, 'Montre noire avec bracelet en toile noire, cadran rond et détail réfléchissant.', 'Pull&Bear', '2020-06-28 19:21:13'),
(61, 'Montre similicuir marron bracelet contrastant', 299, 5, 1, 'Montre avec bracelet en similicuir marron et cadran rond contrastant.', 'Pull&Bear', '2020-06-28 19:23:13'),
(62, 'Montre cadran octogonal', 289, 5, 1, 'Montre à petit cadran octogonal et bracelet métallique finition mate.', 'Pull&Bear', '2020-06-28 19:28:05');

-- --------------------------------------------------------

--
-- Structure de la table `sexes`
--

CREATE TABLE `sexes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `sexes`
--

INSERT INTO `sexes` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'user',
  `firstName` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `lastName` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `adress` varchar(100) COLLATE utf8_bin NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_bin DEFAULT '01.png',
  `tel` int(11) DEFAULT NULL,
  `cin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `firstName`, `lastName`, `age`, `adress`, `city`, `zipcode`, `img`, `tel`, `cin`, `verified`) VALUES
(45, 'idriss34', '427996cb22f47ef3bb9835c809c231cec5289081', 'idriss34@g.com', 'user', ' idriss    ', 'Essadik', 19, 'lissasfa 2', 'casa', 20190, '22-38-31639553827.png', 6793595, 'BK1254', 1),
(126, 'BK1354', 'ce11ce39761a97a39fa26b22c839d70436c7525b', 'BK1354@g.com', 'user', 'idriss ', 'essadik', 19, 'azopdazdazd', 'casablanca', 20190, '20-35-421383228549.png', 679357306, 'BK668544', 1),
(127, 'test1a', '7dec471dd48ee8b47039632fc7c6c615c6da1ced', 'test1a@g.com', 'admin', ' ', '', NULL, '', '', NULL, '01.png', NULL, '', 1),
(131, 'idriss', 'ca9c1cffa398366d5a1b221942eff8e6bec57d90', 'idriss@g.com', 'user', NULL, NULL, NULL, '', '', NULL, '01.png', NULL, NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1451;

--
-- AUTO_INCREMENT pour la table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
