-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 12:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(3, 'Women', 1),
(4, 'Accessories ', 1),
(5, 'Men', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Roshan Rodie', 'roshanshetty78@gmail.com', '9876543210', 'First Request', '2020-12-14 17:18:32'),
(2, 'roshan', 'roshanshetty78@gmail.com', '789456123', 'hello database', '2020-12-17 08:40:10'),
(3, 'roshan', 'rahulnshetty@gmail.com', '987456123', 'kljkl', '2020-12-18 10:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `status`, `meta_keyword`) VALUES
(7, 5, 'Gray T-shirt', 699, 1200, 5, '693120477_pic2.jpg', 'Gray T-shirt by Hrx', 'Gray T-shirt by Hrx', 'Gray T-shirt by Hrx', 'Gray T-shirt by Hrx', 1, 'Gray T-shirt by Hrx'),
(8, 5, 'Nike', 1299, 7995, 10, '420519621_nikeshoe.jpg', 'Men Black FREE RN 5.0 Running Shoes', 'Ideal for runs up to 3 miles, the Nike Free RN 5.0 returns to its roots as a natural motion shoe.\r\nAn updated flex groove pattern and modified midsole foam provides more flexibility than its predecessor, creating a barefoot sensation with every step.\r\nAt the upper, breathable and stretchy mesh moves with your foot, while synthetic suede overlays provide stable support.', 'Men Black FREE RN 5.0 Running Shoes', 'Men Black FREE RN 5.0 Running Shoes', 1, 'Men Black FREE RN 5.0 Running Shoes'),
(9, 3, 'Vero Moda', 2149, 4299, 10, '793470285_f69b849a-6874-406a-aa9c-876de24cfa491575541677557-VMMQ-MALTA-LS-JACKET-I-Harvest-Gold-XS-8751575541676041-1.jpg', 'Mustard Yellow & Black Blazer', 'Mustard yellow and black printed casual blazer, has a shawl collar, long sleeves, single-breasted with button closure.\r\nComes with a fabric belt.', 'Mustard yellow and black printed casual blazer, has a shawl collar, long sleeves, single-breasted with button closure.\r\nComes with a fabric belt.', 'Mustard yellow and black printed casual blazer, has a shawl collar, long sleeves, single-breasted with button closure.\r\nComes with a fabric belt.', 1, 'Mustard yellow and black printed casual blazer, has a shawl collar, long sleeves, single-breasted with button closure.\r\nComes with a fabric belt.'),
(10, 5, 'Tommy Hilfiger', 11500, 5750, 25, '574744753_ezgif.com-webp-to-jpg.jpg', 'Men Black Analogue Watch', 'Display: Analogue\r\nMovement: Quartz\r\nPower source: Battery\r\nDial style: Solid round stainless steel dial\r\nFeatures: Reset Time\r\nStrap style: Black bracelet style, stainless steel strap with a foldover closure\r\nWater resistance: 50 m\r\nWarranty: 2 years', 'Men Black Analogue Watch', 'Men Black Analogue Watch', 1, 'Men Black Analogue Watch'),
(11, 5, 'Amazfit', 13000, 7999, 25, '627469826_ezgif.com-webp-to-jpg (1).jpg', 'Unisex Black GTS Smartwatch ', 'Screen: 1.34\", full round MIP transflective TFT, Resolution 320 x 320\r\nTouch Screen: Corning Gorilla 3 tempered glass + anti-fingerprint coating\r\nWater resistant to a depth of 50 meters, Amazfit GTS also supports multiple swimming scenarios. The watch can automatically recognize your swimming position, and record data like SWOLF, pace, or calorie consumption, and enables an accurate analysis on the data each time you swim', 'Unisex Black GTS Smartwatch ', 'Unisex Black GTS Smartwatch ', 1, 'Unisex Black GTS Smartwatch '),
(12, 4, 'Blacksmith', 7999, 1679, 20, '304018619_ezgif.com-webp-to-jpg (2).jpg', 'Men Navy Blue & Silver-Toned Accessory Gift Set', 'This accessory gift set consists of a tie, a pocket square, a pair of socks, a pair of cufflinks, a tie clip, a lapel pin, a belt, and a wallet\r\nNavy blue printed tie\r\nNavy blue printed pocket square\r\nA pair of navy blue and blue printed ankle-length socks, each has a wide mouth and a flat toe seam\r\nA pair of navy blue stone inlaid tonal plain round-shaped square cufflinks, has a hinged-back closure\r\nSilver-toned tie pin, has striped engraved textured design, secured by alligator clasp', 'Men Navy Blue & Silver-Toned Accessory Gift Set', 'Men Navy Blue & Silver-Toned Accessory Gift Set', 1, 'Men Navy Blue & Silver-Toned Accessory Gift Set'),
(13, 4, 'Puma', 1299, 584, 25, '849772302_11513943834155-Puma-Unisex-Black-Solid-Pro-Training-II-Backpack-6871513943833904-1.jpg', 'Unisex Black Solid Pro Training II Backpack', 'Black backpack\r\nPadded haul loop\r\n1 main compartment with zip closure\r\nPadded back\r\nZip Pocket\r\nPadded shoulder strap: Padded\r\nWater-resistance: No\r\nVolume: up to 23 litres\r\nWarranty: 3 months\r\nWarranty provided by Brand Owner / Manufacturer', 'Unisex Black Solid Pro Training II Backpack', 'Unisex Black Solid Pro Training II Backpack', 1, 'Unisex Black Solid Pro Training II Backpack'),
(14, 5, 'Red Tape', 6299, 1574, 25, '416444031_ezgif.com-webp-to-jpg (3).jpg', 'Men Black Solid Leather High-Top Flat Boots', 'A pair of round-toe black flat boots, has high-top styling, lace-up detail\r\nLeather upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 3 months\r\nWarranty provided by brand/manufacturer', 'Men Black Solid Leather High-Top Flat Boots', 'Men Black Solid Leather High-Top Flat Boots', 1, 'Men Black Solid Leather High-Top Flat Boots'),
(15, 5, 'ADIDAS Originals', 12999, 6499, 20, '335142377_ezgif.com-webp-to-jpg (4).jpg', 'Men Red & Maroon POD-S3.2 ML Camouflage Patterned Sneakers', 'Main materials: textile upper/ rubber outsole\r\nBrand colour: Scarlet / Collegiate Burgundy / Core Black\r\nLace-up closure\r\nWarranty: 3  months\r\nWarranty provided by brand/ manufacturer\r\n', 'Men Red & Maroon POD-S3.2 ML Camouflage Patterned Sneakers', 'Men Red & Maroon POD-S3.2 ML Camouflage Patterned Sneakers', 1, 'Men Red & Maroon POD-S3.2 ML Camouflage Patterned Sneakers'),
(16, 3, 'Libas', 2199, 879, 20, '564707261_ezgif.com-webp-to-jpg (5).jpg', 'Women Black Embroidered A-Line Dress', 'Black embroidered woven A-line dress, has a keyhole neck, three-quarter sleeves, hook and eye closure, and flared hem', 'Women Black Embroidered A-Line Dress', 'Women Black Embroidered A-Line Dress', 1, 'Women Black Embroidered A-Line Dress'),
(17, 3, 'SASSAFRAS', 2399, 959, 25, '681074053_ezgif.com-webp-to-jpg (7).jpg', 'Women Black & Pink Printed Wrap Dress', 'Black and pink printed woven wrap dress with tie-up detail, has a v-neck, three-quarter sleeves, concealed zip closure, an attached lining, and flared hem', 'Women Black & Pink Printed Wrap Dress', 'Women Black & Pink Printed Wrap Dress', 1, 'Women Black & Pink Printed Wrap Dress'),
(18, 3, 'Tiered Maxi Dress', 2199, 769, 25, '528274290_ezgif.com-webp-to-jpg (8).jpg', 'Women Maroon Solid Tiered Maxi Dress', 'Maroon solid woven tiered maxi dress, has a square neck, short sleeves, concealed zip closure, an attached lining, and flounce hem\\r\\nComes with a belt', 'Women Maroon Solid Tiered Maxi Dress', 'Women Maroon Solid Tiered Maxi Dress', 1, 'Women Maroon Solid Tiered Maxi Dress'),
(19, 0, 'Athena', 2499, 1249, 50, '608753486_ezgif.com-webp-to-jpg (9).jpg', 'Women Maroon Floral Printed Maxi Dress', 'Maroon printed woven maxi dress, has a tie-up neck, long sleeves, an attached lining, and flounce hem', 'Women Maroon Floral Printed Maxi Dress', 'Women Maroon Floral Printed Maxi Dress', 1, 'Women Maroon Floral Printed Maxi Dress'),
(20, 3, 'Athenaa', 2499, 1249, 25, '392883571_ezgif.com-webp-to-jpg (10).jpg', 'Women Maroon Floral Printed Maxi Dress', 'Maroon printed woven maxi dress, has a tie-up neck, long sleeves, an attached lining, and flounce hem', 'Women Maroon Floral Printed Maxi Dress', '', 1, 'Women Maroon Floral Printed Maxi Dress'),
(21, 4, 'Versace', 4250, 3825, 50, '433896823_2ea9c002-aea7-4123-8f50-d34606465aff1570776610496-Versace-Eros-Flame-Perfumed-Deodorant-Natural-Spray-100ml-93-1.jpg', 'Men Eros Flame Perfumed Deodorant ', 'The olfactory notes of Versace Eros Flame are characterised by strong contrasts in which the most noble and elegant ingredients enrich and enhance one another', 'Men Eros Flame Perfumed Deodorant ', 'Men Eros Flame Perfumed Deodorant ', 1, 'Men Eros Flame Perfumed Deodorant '),
(22, 3, 'Ishin', 4999, 2249, 50, '345030395_ezgif.com-webp-to-jpg (11).jpg', 'Women Red & Orange Bandhani Print Anarkali Kurta', 'Red, orange and pink bandhani printed anarkali kurta with gotta patti detailing, has a round neck, three-quarter sleeves, and flared hem', 'Women Red & Orange Bandhani Print Anarkali Kurta', 'Women Red & Orange Bandhani Print Anarkali Kurta', 1, 'Women Red & Orange Bandhani Print Anarkali Kurta'),
(23, 3, 'Libas Pink & Black Block', 2199, 989, 50, '779998295_ezgif.com-webp-to-jpg (12).jpg', 'Women Pink & Black Block Print Kurta with Skirt', 'Pink, black and golden Block print kurta with skirt\r\nPink, black and golden straight calf length kurta, has a notched round neck, short sleeves, straight hem, side slits\r\nPink, black and golden printed skirt with tiered detail, has elasticated waistband, slip-on closure', 'Women Pink & Black Block Print Kurta with Skirt', 'Women Pink & Black Block Print Kurta with Skirt', 1, 'Women Pink & Black Block Print Kurta with Skirt'),
(24, 5, 'Moda Rapido', 649, 389, 25, '899911991_ezgif.com-webp-to-jpg (13).jpg', 'Men Maroon Printed Round Neck T-shirt', 'Men Maroon Printed Round Neck T-shirt\r\nSize & Fit\r\nThe model (height 6\') is wearing a size M\r\n\r\nMaterial & Care\r\n100% cotton\r\nMachine-wash', 'Men Maroon Printed Round Neck T-shirt', 'Men Maroon Printed Round Neck T-shirt', 1, 'Men Maroon Printed Round Neck T-shirt'),
(25, 5, 'Moda Rapido', 749, 374, 50, '780929231_ezgif.com-webp-to-jpg (14).jpg', 'Men Grey & Black Colourblocked Round Neck T-shirt', 'Grey, black and maroon colourblocked T-shirt, has a round neck, long sleeves', 'Men Grey & Black Colourblocked Round Neck T-shirt', 'Men Grey & Black Colourblocked Round Neck T-shirt', 1, 'Men Grey & Black Colourblocked Round Neck T-shirt'),
(26, 3, 'Nike', 7995, 5196, 50, '317998353_ezgif.com-webp-to-jpg (15).jpg', 'Women Pink FREE RN 5.0 Running Shoes', 'A pair of pink & black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 6 months\r\nWarranty provided by brand/manufacturer', 'Women Pink FREE RN 5.0 Running Shoes', 'Women Pink FREE RN 5.0 Running Shoes', 1, 'Women Pink FREE RN 5.0 Running Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `added_on`) VALUES
(1, 'Roshan Shetty', 'roshanshetty78@gmail.com', '9876543210', 'qwerty', '2020-12-15 18:36:18'),
(2, 'pankudi', 'pankaj@g.com', '6969696969', 'qwerty', '2020-12-18 11:18:21'),
(3, 'pankudi', 'pankaj@gmail.com', '868686', 'qwerty', '2020-12-18 11:35:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
