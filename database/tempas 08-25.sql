-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 12:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempas`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ongoing'),
(2, 'Old'),
(27, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `ctenants`
--

CREATE TABLE `ctenants` (
  `id` int(11) NOT NULL,
  `projnm` varchar(31) CHARACTER SET utf8 DEFAULT NULL,
  `agref` int(11) DEFAULT NULL,
  `fileno` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `procode` int(11) DEFAULT NULL,
  `cuscode` int(11) DEFAULT NULL,
  `firstname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `privadd` varchar(62) CHARACTER SET utf8 DEFAULT NULL,
  `premisadd` varchar(59) CHARACTER SET utf8 DEFAULT NULL,
  `extent` varchar(31) CHARACTER SET utf8 DEFAULT NULL,
  `planno` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `lotno` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `allodate` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `phyhodate` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `peridalloc` varchar(27) CHARACTER SET utf8 DEFAULT NULL,
  `expdate` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `monrent` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  `secudep` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `secureceipt` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `intrst` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `apprp` varchar(26) CHARACTER SET utf8 DEFAULT NULL,
  `duperiod` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `duamnt` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `oic` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `allocval` int(11) DEFAULT NULL,
  `allocpr` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `rnp1` varchar(53) CHARACTER SET utf8 DEFAULT NULL,
  `rnv1` int(11) DEFAULT NULL,
  `rnp2` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `rnv2` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `rnp3` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rnv3` int(11) DEFAULT NULL,
  `rnp4` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `rnv4` int(11) DEFAULT NULL,
  `rnp5` varchar(21) CHARACTER SET utf8 DEFAULT NULL,
  `rnv5` int(11) DEFAULT NULL,
  `rnp6` varchar(23) CHARACTER SET utf8 DEFAULT NULL,
  `rnv6` int(11) DEFAULT NULL,
  `rnp7` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rnv7` int(11) DEFAULT NULL,
  `rnp8` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rnv8` int(11) DEFAULT NULL,
  `rnp9` varchar(23) CHARACTER SET utf8 DEFAULT NULL,
  `rnv9` int(11) DEFAULT NULL,
  `rnp10` varchar(21) CHARACTER SET utf8 DEFAULT NULL,
  `rnv10` int(11) DEFAULT NULL,
  `rnp11` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rnv11` int(11) DEFAULT NULL,
  `rnp12` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rnv12` int(11) DEFAULT NULL,
  `rnp13` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rnv13` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `house_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0= inactive',
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctenants`
--

INSERT INTO `ctenants` (`id`, `projnm`, `agref`, `fileno`, `procode`, `cuscode`, `firstname`, `privadd`, `premisadd`, `extent`, `planno`, `lotno`, `allodate`, `phyhodate`, `peridalloc`, `expdate`, `monrent`, `tax`, `secudep`, `secureceipt`, `intrst`, `apprp`, `duperiod`, `duamnt`, `oic`, `allocval`, `allocpr`, `rnp1`, `rnv1`, `rnp2`, `rnv2`, `rnp3`, `rnv3`, `rnp4`, `rnv4`, `rnp5`, `rnv5`, `rnp6`, `rnv6`, `rnp7`, `rnv7`, `rnp8`, `rnv8`, `rnp9`, `rnv9`, `rnp10`, `rnv10`, `rnp11`, `rnv11`, `rnp12`, `rnv12`, `rnp13`, `rnv13`, `email`, `contact`, `house_id`, `status`, `date_in`) VALUES
(1, NULL, NULL, '10/6/450', 4774401, 98675, 'D.Ajith Kumara', '54,Gjabapura, Magastota, Nuwara Eliya', 'Lake Gregory Sourounding Nuwara Eliya', '88.18 Perches', '2211', 'A', '23.03.2021', NULL, '10 Years', '22.03.2031', '121000', 8, '363000', NULL, NULL, NULL, NULL, NULL, 'R.M.K.B.Rathnayake ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(2, NULL, NULL, '10/6/450', 4774401, 98647, 'H.M.Dharshana Samarasinghe', 'Resturant ii, 59/2, Lady Rd, Nuwara Eliya', 'Lake Gregory Sourounding Nuwara Eliya', '23.13 Perches', '2210', 'A', '23.03.2021', NULL, '10 Years', '22.03.2031', '125500', 8, '376500', NULL, NULL, NULL, NULL, NULL, 'R.M.K.B.Rathnayake ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(3, 'Haputhale Viewing Deck', NULL, '10/8/\'1', 3001400, 97355, 'RBPA Pathinayaka', 'No.310 B, Gonamaditta Road, Kesbewa', 'No.310/3, Gonamaditta Road, Kesbewa', '22.35 P', ' 6094', NULL, '28.02.2019', '28.02.2019', '1 Year', NULL, '130500', 8, '391500', NULL, '2', 'BOM', NULL, NULL, 'Ranjani Fernando', 130500, NULL, '1 Year ', 130500, '2022/02/28  143,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(4, 'Car Park Bdulla Post office', NULL, '493725', 8890300, 97659, 'Badulla Eksath Welanda Sangamaya', NULL, 'Post Office Road, Badulla', '1R 17.26P', 'BA/508', '1', '30.05.2019', NULL, '6 Months', NULL, '80000', 8, NULL, NULL, NULL, 'DG, UDA', NULL, NULL, 'Ranjani Fernando', NULL, NULL, NULL, 80000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(5, NULL, NULL, '10/6/288,10/6/517(new)', 9190100, 92964, 'Kaduwela Municipal Council', 'Kaduwela Municipal Council Kaduwela', 'Udumulla Rd. Battaramulla', '36P', 'PPCo8010', '28', '14.02.2020', '14.02.2020', '6 Months', '13.08.2020', '15000', NULL, NULL, NULL, NULL, 'DG, UDA', NULL, NULL, 'Nilanthi Renuka', NULL, NULL, NULL, 15000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(6, NULL, NULL, '10/8/3364 (ix)', 3090700, 98374, 'CHEC- CGC JV', 'No.53/13, Dharmapala Mw, Colombo 7.', 'Elumaduwawatta, Dematagoda', '1A ', '3799', 'B', '27.02.2017', '27.02.2017', '6 Months', '30.06.2021', '435000', 8, '50000', 'H22998', NULL, 'DG, UDA', NULL, NULL, 'Kanchana Ranasinghe', 340000, NULL, '2017.8.28 to 2018.2.27', 2040000, '2018.2.28 to 2018.8.27', '.2,040,000.00', '2018.8.28 to 2018.11.28  ', 1020000, '2018.11.29 to 2019.5.28 ', 2250000, '2019.5.29 to 209.8.28', 1125000, '2019.8.29 to 2019.10.28', 750000, '2019.10.29 to 2019.12.31 ', 750000, '2019.12.31 to 2020.01.31 ', 375000, '2019.2.01 to 2021.2.28 ', 375000, '2020.3/1 to 2021.6.30', 1740000, '2020.09.01 to 2021.02.28 ', 375000, '2021.03.01 to 2021.09.30 ', 435000, '2021.10.01 to 2022.02.28 ', 475000, '', '', 0, 1, '0000-00-00'),
(7, NULL, NULL, '10/6.496', 3050500, 98651, 'Nine Wells Hospital (pvt) ltd', '55/1, Kirimandala Mawatha, Narahenpita', ' Kirimandala Mawatha, Narahenpita', '75.5P', '6396', 'C', '2021.03.04', '2021.01.01', '6 Months', '2021.6.30', '390000', 8, NULL, NULL, NULL, NULL, NULL, NULL, 'Kanchana Ranasinghe', 390000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(8, NULL, NULL, '10/6/472', 9150100, 98660, 'M.Dayakantha Perera', 'No.644/10, Mahavila Lane, Dematagoda, Colombo 09.', 'Sri sadarma Rd, Col 10.', '30 P', NULL, NULL, '11.03.2021', '22.03.2021', '6 Months', '21.09.2021', '53400', 8, '160200', 'K51352', NULL, 'DG, UDA', NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(9, NULL, NULL, '10/6/475', 8104200, 98684, 'China Railway ', '25th Bureun Group, Corporation Ltd', 'Apple watta', '20.21 P', 'CO 9376', '1', '12.03.2021', '26.03.2021', '6 Months', '25.09.2021', '25000', 8, '75000', 'K51823', NULL, 'DG, UDA', NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(10, NULL, NULL, '10/6/379', 6130900, 98426, 'Access Engineering PLC', 'Access Tower, No.278, Union Place, Colombo 2.', 'Adjucent to the \"Sirisanda Sewana\" Scheme Maligawatta', '75 P', '1178', 'A', '14.12.2020', '14.12.2020', '6 Months', '13.06.2021', '37500', 8, '50000', 'K20896', NULL, 'DG, UDA', NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(11, NULL, NULL, '10/6/464', 3150600, 98603, 'Chaminda Vidanagamage', 'Daron International (Pvt) ltd, 312/2E, Suriyapaluwa, Kadawatha', 'Henamulla Land', '100 p', 'CD/DSD/2015/126', 'Part of 2', '21.01.2021', '24.02.2021', '6 Months', '23.08.2021', '75000', 8, NULL, NULL, NULL, 'DG, UDA', NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(12, NULL, NULL, '10/6/438', 9190100, NULL, 'Srilanka Army', 'Srilanka Army Headquarters,No.553,Colombo.', 'Mahawatta Road, Koswatta, Battaramulla', '1A 1R 0P', '390', '5', '16.10.2019', '16.10.2019', '3 Years', '15.10.2022', 'Requested Free of Charge', NULL, NULL, NULL, NULL, 'BOM &Minister of Megapolis', NULL, NULL, 'Nilanthi Renuka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(13, NULL, NULL, '10/6/501', 5330200, NULL, 'Ms Sunken Construction (Pvt) Ltd', 'No.295,Madampitiya Road, Col 14', 'No.43, Agoda Premier Village Peliyagoda', '2 Housing Units', '5770A', '24, 28', '02.03.2021', NULL, '2 Years', '14.02.2023', '32500', 8, 'Not Paid Yet', NULL, NULL, 'DG, UDA', '5 Month', '(132,600+32,500*4) = 262,600', 'A.C.H.Sampath', 32500, ' per month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(14, NULL, NULL, '146744', 8031400, 98436, 'Ms Pan Asia Bank PLC', 'No.450, Galle Rd, Col 3.', 'No. 27, Sea Avenue, Kollupitiya', '40P', '011', '1', '15.10.2020', '22.10.2020', '6 Months- 3 months extended', '14.07.2021', '105000', 8, '200,000/ M12815 ', NULL, NULL, 'DG, UDA', '15.07.2021 to Up to Date', NULL, 'A.C.H.Sampath', 100000, '6 Months', '3 Months', 105000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(15, NULL, NULL, '10/8/3364 (T)', 5950100, 98847, 'Causway Paint Lanka (Pvt)', 'No.15, Noel Mendis Mw, Modarawila Industrial Zone, Panadura', 'No.15, Noel Mendis Mw, Modarawila Industrial Zone, Panadura', '80P', '2426', 'Road', '22.06.2021', NULL, '6 Months', NULL, '90000', 8, '25000', 'K53675', NULL, 'DG, UDA', NULL, NULL, 'A.C.H.Sampath', 50000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(16, NULL, NULL, '10/6/457', 5130000, 98958, 'Access Engineering PLC', 'Access Tower, No.278, Union Place, Colombo 2.', '31 Wata, Orugodawatta', '44P', '3714', 'Part of 01', '25.02.2021', '15.01.2021', '1 Year', '14.01.2022', '50000', 8, '150000', 'K53072', NULL, 'DG, UDA', NULL, NULL, 'A.C.H.Sampath', 50000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(17, NULL, NULL, '240977', 5290200, 58547, 'Quick Linnen Washing & Other Services', 'No.17, Eksath Subasadaka Mawatha, Pamunuwa Road, Maharagama', 'No.17, Modarawila Industrial Zone, Panadura', '10P', '1464', '02', '24.05.2013', NULL, 'Monthly Basis', NULL, '18000', 8, '48000', 'F56575', NULL, 'DG, UDA', NULL, NULL, 'A.C.H.Sampath', 16000, 'per month', 'from Oct 2017', 18000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(18, NULL, NULL, '10/8/2035 (T)', 5330200, 55945, 'P.P.Dharmasiri', 'No.688/B, Kandy Road, Pattiya, Kelaniya', 'K.G.Peris Mw, Peliyagoda, Kelaniya', '78.53', '2504', '01', '06.09.2006', 'Unoutharized legalized by above allocation  letter', 'Monthly Basis', NULL, '30000', 8, NULL, NULL, '10% From 2019 oct', NULL, '7 Month', '7*30,000  =210,000', 'A.C.H.Sampath', 12000, NULL, ' 2010.05.13', 14000, ' 2011.05.13', '15000', '2017.06.12', 30000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(19, NULL, NULL, '10/7/629', 5390200, 98696, 'W.H.P.Fernando', 'No.295, De Soyza Rd,Nalluruwa, Panadura', 'Toilet Block at Panadura Commercial Complex', NULL, NULL, 'Toilet Block', '15.03.2020', 'Not yet', '6 MonthS', '15.09.2021', '5000', 8, '30000', 'K51917', '2', 'DG, UDA', NULL, NULL, 'A.C.H.Sampath', 50000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(20, NULL, NULL, '10/6/524', 3050500, 98944, 'Kings Hospital', 'No.18/A, Evergreen Park Road,Colombo 5 ', 'Narahenpita, Kirimandala Mawatha', 'Approx80P', '6396', 'Part of Lot A', '07.09.2021', '07.09.2021', '6 MonthS', '06.03.2022', '300000', NULL, '25000', 'K56191 07.09.2021', NULL, NULL, NULL, NULL, 'Kanchana Ranasighe ', 300000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(21, 'Toilet Block at Thalapathpitiya', NULL, '10/6/259', 9190100, NULL, 'P.N.Roshan', 'No. 520/01, Kimbulawala Junction, Madiwela, Kotte ', 'Toilet Block Bus Stand, Sri Jayawardenapura Hospital ', NULL, NULL, NULL, '03.08.2021', NULL, NULL, NULL, '4000', NULL, NULL, NULL, NULL, NULL, '1 year', NULL, 'Nilanthi Renuka', NULL, NULL, '2021.03.08 to 2022.03.07 51,840.00 + security deposit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(22, NULL, NULL, '10/6/550', 5100202, 99180, 'Balis Club', '34, D.R. Wijewardana Mawatha, Col. 10', 'Excise Dept. Land D.R.Wijewardana Mawatha', '92.2 P', 'Co.9144', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(23, 'Charlmers Land', NULL, '465601', 8110500, 97278, 'World Capital  Centre Limited', '60, Davidson Road, Colombo 4.', 'Charlmers Land, Colombo 11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, '3388520.26 will be charged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(24, NULL, NULL, '10/6/543', NULL, NULL, 'J.H.Saman Surendra', '145, Ihalawewa Road, N\' Eliya', 'Cey Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R.M.K.B. Rathnayake', NULL, NULL, '2021.12.22 to 2021.12.31-', NULL, '2022.01.01 to 2022.03.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(25, NULL, NULL, '17/01/04/01/01/05', NULL, NULL, 'Access Engineering', NULL, '38. Bowala Path, Angampitiya', '.03686 Ha', '7049', '01', '15/02/2022', NULL, '6 Months', '14.08.2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bandara (Kandy)', NULL, NULL, '15.02.2022 to 14.08.2022 (600,000.00- 6m)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(26, NULL, NULL, '10/6/507', 8104200, 98931, 'S.P.Kumarasighe', 'No.573/4, Mahawela Lane, Dematagoda', 'Maligawatta Land', '60p', 'Co9376', 'Part of lot 1', '44324', '44477', '6 months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(27, NULL, NULL, '10/6/312', 6130900, 97852, 'Nalin Chaminda', 'Sirisanda sewana, Cyril C.Perera Mawatha', 'K.Cyril C.Perera Mawatha', '140P', '5684', 'A', '43923', '43923', '6 months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(28, NULL, NULL, '10/6/519', 5100202, 99001, 'MAGA Engineeing', 'No,200, Nawala Road, Narahenpita', 'Beira Lake Reservation ', '4 Container boxes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(29, NULL, NULL, '10/6/467', NULL, NULL, 'Dayakantha Perera', NULL, 'Abeysingharama', '40P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(30, NULL, NULL, '10/6/\'1', 5940200, NULL, 'P.Uditha Cahthuranga', 'No.131, Bogahawatta, Kalamulla, Kaluthara', 'Kiriwehera Road, Sellakatharagama', '60P', '1467D', '37', '44713', '15/12/2021', '6 Months', '15.06.2022', '20000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S.N.Wickramasinghe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(31, NULL, NULL, '167198', 8030700, 55498, 'NSB ', 'No.255, Galle Road, Colombo 3', 'Kollupitiya', '12.2P', '495', 'Lot 3 ', '39661', '39661', NULL, '12.06.2021', '750000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A.C.H.Sampath', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(32, NULL, NULL, '167198', 8030700, 55498, 'NSB ', 'No.255, Galle Road, Colombo 3', 'Kollupitiya', '25P', '495', 'Lot 2 &4', '44171', NULL, 'Annual', '12.06.2021', '2000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A.C.H.Sampath', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(33, NULL, NULL, '10/6/526', NULL, NULL, 'Access Engineering', 'No278, Union Place, Colombo 2', 'Castle Street, Borella', '3R 3.55P', 'PPCo9496', '28-35', '44594', '44443', 'monthly', '44777', '250000', NULL, NULL, NULL, NULL, NULL, '11 M', NULL, 'A.C.H.Sampath', 250000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(34, NULL, NULL, '10/6/539', 8000100, 58132, 'Sanken Consruction (Pvt) Ltd', 'No.245, Madampitiya Road, Colombo 14.', 'Sir James Peiris Mw. Colombo 02', '121P', '3454', 'Part of Lot A', '44206', NULL, '6 Months', '31/3/2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(35, NULL, NULL, '10/6/374', 8096300, 98375, 'CHEC- CGC JV', 'No.53/13, Dharmapala Mw, Colombo 7.', 'Abeysingharama Road, Panchikawatta', '110P', '824', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T.P.L.R.D. Suvimali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(36, NULL, NULL, '534998', 3001400, 98858, 'M.P.Lalith Ellawala', 'No.154, Horana Road, Widagama, Bandaragama', 'No.34, Janadhipathi Mw, Bandargama', 'Two story building (Land 19.5P)', '4766', '25', NULL, NULL, NULL, NULL, NULL, NULL, '24000', 'K54190 5.7.2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(37, NULL, NULL, '10/6/588', 3520200, NULL, 'Jagath Liyanage', 'No.318/21, Malsinghagoda Road, Hokandara', NULL, '42.97P', '5742', 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(38, NULL, NULL, '10/6/601', 3520200, NULL, 'D.N.Gunawardena', 'No.16, Mahaweli Project, Pelwehera', NULL, '47.75P', '6762', 'A & B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(39, NULL, NULL, '10/6/543', NULL, NULL, 'J.H.S.Surendra', 'No.145, Ihalawewa Road, Nuwara Eliya', 'Badulla Road, Nuwara Eliya', '15 Sqft (shop)', '-', '-', '20/12/2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(40, NULL, NULL, '563851', 9190100, NULL, 'Thimira Madushan Thabrew', 'No. 927/24, Sevana Place, Udawatta Road, Malambe', 'Battaramulla Junction', '01 A', '3442', 'Part of lot A', '20/12/2021', '20/12/2021', '6 month', '19/06/2022', '160000', NULL, NULL, NULL, '2', 'DG UDA', NULL, '960000', 'Nilanthi Renuka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(41, NULL, NULL, '10/6/590', 9190100, 98921, 'DIMO (pvt ) Ltd', 'No.65, Jethawana Road, Colombo 14', 'Pelawatta, Battaramulla', '30 P(Approx)', 'Tracing no.(Co/DSO/2016/249)', NULL, '44447', '44447', '6 month', '44775', '27500', 8, NULL, NULL, NULL, 'DG UDA', NULL, '-', 'Nilanthi Renuka', 27500, NULL, '09/02/2022 to 08/08/2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(42, NULL, NULL, '10/6/577', 3960100, 100030, 'U.G.Samarasena', 'Sampatha Niwasa, Sailarama, Kirindigala, Balangoda', 'Balangoda Town', '144 sqft', 'Near to by pass Road', NULL, '44746', NULL, '6 month', '44752', '5000', 8, NULL, NULL, NULL, NULL, NULL, NULL, 'S.N.Wickramasinghe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(43, NULL, NULL, '10/6/580', 3960100, 100031, 'Rathnapura District Motor Traffic Office', 'District Motor Traffic Office, Rathnapura', 'Balangoda Town', '30P', 'Near to by pass Road', '1', '44777', NULL, '6 month', '44783', '25000', 8, NULL, NULL, NULL, NULL, NULL, NULL, 'S.N.Wickramasinghe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00'),
(44, 'test', 0, '10/6/578', 5950100, 0, 'Rathnapura District Motor Traffic Office', 'District Motor Traffic Office, Rathnapura', 'Rathnapura', '25P', '538', 'A', '29/04/2022', '', '6 month', '19500', '8', 0, '', '', '', NULL, '', '', 'S.N.Wickramasinghe', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `sub_land_no` varchar(50) NOT NULL,
  `lnd_add` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_no`, `sub_land_no`, `lnd_add`, `category_id`, `description`, `price`) VALUES
(2, '3', '', '', 1, 'this is wetland ', 75300),
(4, '1232', '', '', 1, 'abnx', 25000),
(5, '12', '', '', 1, 'Can use for parking', 25000),
(6, '6767', '', '', 1, 'nice land', 125000),
(7, '66', '', '', 1, 'hdsfhj', 2424254),
(8, '33', '', '', 1, 'gffg', 25),
(9, '545', '55', '', 1, 'dgdfg', 2500),
(10, '45', '66', 'thilakarawardha textile, colombo road, nittabuwa junction', 1, 'bla bla ', 3000),
(11, '45', '44', 'dsdfgssdf', 1, 'sdfdguyf sdfgsdh sdghfhsdv', 454);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `invoicedate` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `tenant_id`, `amount`, `invoice`, `invoicedate`, `date_created`) VALUES
(5, 35, 27300, '22hshd', '0000-00-00', '2022-05-05 11:14:58'),
(6, 35, 78032, '22hshda', '0000-00-00', '2022-05-05 11:15:29'),
(7, 40, 15000, 'ivc12223', '2022-05-05', '2022-05-09 10:41:57'),
(9, 40, 10000, 'invc2', '2022-05-06', '2022-05-13 09:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `payment_cat`
--

CREATE TABLE `payment_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_cat`
--

INSERT INTO `payment_cat` (`id`, `name`) VALUES
(1, '6 months'),
(2, '12 months'),
(3, 'daily'),
(4, 'weekly'),
(5, '5 year'),
(6, 'unlimited');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Temporary Allocation Management System', 'info@uda.gov.lk', '+6948 8542 623', '1603344720_1602738120_pngtree-purple-hd-business-banner-image_5493.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `agref` varchar(20) NOT NULL,
  `fileno` varchar(50) NOT NULL,
  `procode` varchar(50) NOT NULL,
  `cuscode` varchar(50) NOT NULL,
  `privadd` varchar(500) NOT NULL,
  `extent` varchar(20) NOT NULL,
  `planno` varchar(25) NOT NULL,
  `lotno` varchar(50) NOT NULL,
  `allodate` date NOT NULL,
  `phyhodate` date NOT NULL,
  `expdate` date NOT NULL,
  `monrent` float NOT NULL,
  `tax` int(11) NOT NULL,
  `secudep` int(11) NOT NULL,
  `secureceipt` varchar(50) NOT NULL,
  `intrst` int(11) NOT NULL,
  `apprv` varchar(50) NOT NULL,
  `dperiod` varchar(50) NOT NULL,
  `damnt` int(11) NOT NULL,
  `oic` varchar(100) NOT NULL,
  `rrdav` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `house_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0= inactive',
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `agref`, `fileno`, `procode`, `cuscode`, `privadd`, `extent`, `planno`, `lotno`, `allodate`, `phyhodate`, `expdate`, `monrent`, `tax`, `secudep`, `secureceipt`, `intrst`, `apprv`, `dperiod`, `damnt`, `oic`, `rrdav`, `firstname`, `email`, `contact`, `house_id`, `status`, `date_in`) VALUES
(38, 'hghjk', 'tyyteyrt', 'gh', 'jfgjh', 'hhhh', 'hghgf', 'ghghh', 'hhhh', '2022-05-09', '2022-05-12', '2022-08-19', 36000, 52, 12500, 'xbcd', 12, 'lakmini', '5 month', 2300, 'fkjkf', 'plz', 'ghhghh', 'aaaa@aa.com', '1418787844', 5, 1, '2022-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2=Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(2, 'userx', 'user', 'c93ccd78b2076528346216b3b2f701e6', 2),
(3, 'land', 'land', 'deb2c9b4e62ecf6f04f96811b7a01d3b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctenants`
--
ALTER TABLE `ctenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_cat`
--
ALTER TABLE `payment_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ctenants`
--
ALTER TABLE `ctenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_cat`
--
ALTER TABLE `payment_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
