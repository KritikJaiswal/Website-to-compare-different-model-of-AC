-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 05:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevenstech_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `compare_data`
--

CREATE TABLE `compare_data` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare_data`
--

INSERT INTO `compare_data` (`id`, `name`, `price`, `about`) VALUES
(1, 'MITSUBISHI MS-GK18VA 1.5 TON 5 STAR SPLIT AC SPECIFICATIONS
', '42100', 'Noise	47 dB Indoor Noise \r\n\r\n
Type Split \r\n\r\n
Energy Rating	5 Star \r\n\r\n
Capacity	1.5 Ton \r\n\r\n
GENERAL \r\n\r\n
Capacity In Tons	1.5 Ton \r\n\r\n
Ac Type	Split \r\n\r\n
Title	Mitsubishi MS-GK18VA 1.5 Ton 5 Star Split AC \r\n\r\n
Brand	Mitsubishi \r\n\r\n
Model No	MS-GK18VA \r\n\r\n
Star Rating	5 \r\n\r\n
MODES \r\n\r\n
Operating Mode	Sleep Mode \r\n\r\n
Sleep Mode	Yes'),
(2, 'O GENERAL ASGA18FTTA 1.5 TON 5 STAR SPLIT AC SPECIFICATIONS
', '52968', 'Noise	33 dB Indoor Noise
Power Input	1510 W
Type	Split
Energy Rating	5 Star
Capacity	1.5 Ton
AIR FLOW FEATURES
Other Air Flow Features	Automatic Air Flow Adjustment, Power Air Flow Dual Flaps, Multi Air Flow, Large Outdoor Fan, Comfortable Air Flow, Double Swing Automatic-3D, Air flow - High m3/hr:985
Speed Setting	No
Auto Air Swing	Present
Air Flow Direction	2 Way Direction
GENERAL
Capacity In Tons	1.5 Ton
Ac Type	Split
Title	O General ASGA18FTTA 1.5 Ton 5 Star Split AC
Brand	O General
Model No	ASGA18FTTA
Star Rating	5'),
(3, 'LLOYD LS18VI 1.5 TON INVERTER SPLIT AC SPECIFICATIONS
', '40491', 'Power Input	1740 W
Type	Split
Energy Rating	Inverter Star
Capacity	1.5 Ton
AIR FLOW FEATURES
Auto Air Swing	Present
Air Flow Direction	4-way Direction
Other Air Flow Features	Smart Four Way Swing
GENERAL
Capacity In Tons	1.5 Ton
Ac Type	Split
Title	Lloyd LS18VI 1.5 Ton Inverter Split AC
Brand	Lloyd
Model No	LS18VI
Star Rating	Inverter\r\n\r\n'),
(4, 'LG JS-Q18NPXA 1.5 TON INVERTER SPLIT AC SPECIFICATIONS
', '44281', ' Power Input	1760 W
Type	Split
Energy Rating	Inverter Star
Capacity	1.5 Ton
AIR FLOW FEATURES
Air Circulation Out	1207 CFM
Speed Setting	Yes
Auto Air Swing	Present
Air Circulation In	568 CFM
GENERAL
Capacity In Tons	1.5 Ton
Ac Type	Split
Title	Lg JS-Q18NPXA Dual Inverter 1.5 Ton 3 Star Split Ac
Brand	LG
Model No	JS-Q18NPXA
Star Rating	Inverter MODES
Dehumidification	Yes
Turbo Mode	Yes
Other Modes	Himalaya Cool, Monsoon comfort, Auto Operation
Dry Mode	No
Sleep Mode	Yes
Cool Mode	Yes.\r\n\r\n'),
(5, 'HITACHI RAU524IVD 2 TON 5 STAR SPLIT AC SPECIFICATIONS
', '44632', 'Noise	37 dB Indoor Noise
Type	Split
Energy Rating	5 Star
Capacity	2 Ton
AIR FLOW FEATURES
Air Flow Direction	4 Way Direction
Other Air Flow Features	Air Circulation (High) (M3/Hr):670 (CFM)
Speed Setting	No
GENERAL
Capacity In Tons	2 Ton
Ac Type	Split
Title	Hitachi RAU524IVD 2 Ton 5 Star Split AC
Brand	Hitachi
Model No	RAU524IVD
Star Rating	5');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `compare_data`
--
ALTER TABLE `compare_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compare_data`
--
ALTER TABLE `compare_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
