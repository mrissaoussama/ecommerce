-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2021 at 07:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `nomarticle` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `description` varchar(8000) CHARACTER SET utf8 NOT NULL,
  `quantitearticle` int(10) NOT NULL,
  `prix` int(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idarticle`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`nomarticle`, `description`, `quantitearticle`, `prix`, `type`, `idarticle`) VALUES
('Manette PS5', ' Haptic feedback** - Feel physically responsive feedback to your in-game actions with dual actuators which replace traditional rumble motors. In your hands, these dynamic vibrations can simulate the feeling of everything from environments to the recoil of different weapons.Adaptive triggers** - Experience varying levels of force and tension as you interact with your in-game gear and environments. From pulling back an increasingly tight bowstring to hitting the brakes on a speeding car, feel physically connected to your on-screen actions.Built-in microphone and headset jack - Chat with friends online*** using the built-in microphone or by connecting a headset to the 3.5mm jack. Easily switch voice capture on and off at a moment’s notice with the dedicated mute button. ***Internet and account for PlayStation 5 Network required', 22, 60, 'Gaming', 1),
('RTX 3080', 'carte graphique', 13, 700, 'PC Component', 2),
('PlayStation 5', 'Console PS5', -4, 500, 'Gaming', 3),
('NZXT H510 ', 'Brand 	NZXT\r\nColor 	White\r\nMaterial 	Tempered Glass\r\nCooling Type 	Water, Air\r\nMotherboard Compatability 	Mini ITX\r\nItem Dimensions LxWxH 	16.85 x 8.27 x 18.11 inches\r\nCase Type 	Mid Tower\r\nAbout this item\r\n\r\n    New features: Front I/O USB Type-C Port and Tempered glass side panel with single screw installation\r\n    Enhanced cable management: Our patented cable routing kit with pre-installed channels and straps makes wiring easy and intuitive\r\n    STREAMLINED COOLING: Two Aer F120mm fans included for optimal internal airflow and the front panel and PSU intakes include removable filters, removable bracket designed for radiators up to 240mm - simplifies the installation of either closed-loop or custom-loop water cooling\r\n    Motherboard support: Mini-ITX, MicroATX, and ATX\r\n', 5, 110, 'PC Component', 4),
('WD_Black 1TB SN750 ', 'NVMe Internal Gaming SSD - Gen3 PCIe M2 2280 3D NAND - WDS100T3X0C', 6, 160, 'Storage', 5),
('Asus ROG Strix B450-F Gaming Motherboard (ATX)', ' AMD AM4 Socket: The perfect pairing for 3rd/2nd/1st Gen AMD Ryzen CPUs\r\nGaming connectivity: Dual M.2 and USB 3.1 Gen 2 Type-A connectors.\r\nGaming networking: Intel Gigabit Ethernet, plus ASUS LANGuard and GameFirst technologies.\r\n5-Way Optimization: Automated system-wide tuning, providing overclocking and cooling profiles that are tailor-made for your rig.\r\nAura Sync RGB: Synchronize LED lighting with a vast portfolio of compatible PC gear.\r\nGaming audio: SupremeFX S1220A teams with Sonic Studio III to create an aural landscape that draws you deeper into the action.\r\nGamer’s Guardian: Pre-mounted I/O shield, ASUS SafeSlot and premium components for maximum endurance\r\nPlease ensure your BIOS is up to date if installing a compatible Ryzen 5000 series CPU. Visit ASUS site search by motherboard model name, click on “Support” tab, Drivers and Tools, then BIOS & Firmware to download the latest BIOS ', 8, 200, 'PC Component', 6),
('TP-Link AC1300 PCIe WiFi PCIe Card', ' Lightning Fast speed: upgrade your Wi-Fi Card to 1300Mbps Wi-Fi speedsMore stable performance: heat sink technology distributes heat away from core components to improve reliability and performance; Built for high-performance computing, such as online gaming and 4K Ultra HD video streamingUltimate range: increased wireless range with 2x external antennas to ensure a greater range of Wi-Fi connection and stability. Detachable antennas and low profile bracketCompatibility: Supports Windows 10 Please upgrade to 17025 insider preview build**/ 8. 1/ 8/ 7/ XPIndustry Leading Support: 2-year warranty and free 24/7 technical supportCompatible devices: Windows PC ', 27, 40, 'PC Component', 7),
('Toshiba 8TB 3.5-Inch Internal Hard Drive  CMR SATA 6 GB/s 7200 RPM 128 MB Cache', ' Designed for gaming PC and high-end desktop workstations\r\nHigh Performance with 7200 RPM and large cache size\r\nMassive capacity to accommodate large gaming libraries\r\nToshiba\'s cache technology to deliver high-level performance in real time\r\nRamp loading and drive stabilization technologies for reliability ', 16, 190, 'Storage', 8),
('Samsung Galaxy S20 FE 5G', 'samsung', 2, 6, 'PC Component', 9);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `postalcode` int(5) NOT NULL,
  `datenaissance` date DEFAULT NULL,
  `idclient` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idclient`),
  UNIQUE KEY `email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`prenom`, `nom`, `email`, `mdp`, `phone`, `adresse`, `ville`, `postalcode`, `datenaissance`, `idclient`) VALUES
('oussama', 'mrissa', 'mrissaoussama@gmail.com', 'zzz', '95002154', 'zuila', 'mahdia', 5100, '2020-12-30', 49),
('admin', 'admin', 'admin@admin.com', 'admin', '95002154', 'admin', 'admin', 5100, '2021-01-06', 52),
('adminzzzz', 'user', 'mrissaozzzzussama@gmail.com', 'zzz', '95002254', 'adminzzz', 'adminzzzzz', 5110, '2021-01-13', 56);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
