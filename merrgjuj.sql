-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 11:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merrgjuj`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(155) DEFAULT NULL,
  `content` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `title`, `content`) VALUES
(1, 'assets/images/isa.jpg.png', 'Isa Tashkërani', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id provident sint pariatur dolores eius aliquam, veniam vitae eos, facilis distinctio voluptates a beatae sed labore dolor adipisci officiis libero nulla totam. Tenetur similique reprehenderit dolores ipsum delectus, architecto necessitatibus voluptates sed quidem porro unde sequi accusamus neque sint blanditiis, expedita non odit eaque aliquam distinctio facere vel eius, odio laudantium. Quidem doloribus minima ullam fuga. Eius aliquid inventore ex unde hic earum at molestiae, voluptatem tempora, voluptas ipsa iste suscipit nam! Excepturi facilis officiis earum suscipit laborum. Eveniet quas molestiae quia inventore beatae, deleniti voluptatem repudiandae ducimus provident fuga nihil quasi commodi, assumenda enim corporis maxime, reprehenderit non distinctio suscipit magni itaque? Perspiciatis ea explicabo, a voluptates illo omnis molestiae tempora corporis officia quis ab eum vero excepturi nemo, quisquam neque aut quia expedita numquam eius. Voluptas dolore ducimus omnis dolorum maxime amet aut et quidem. Et recusandae dolores unde tempore, officiis quo. Fugiat aspernatur, eligendi laboriosam perferendis earum blanditiis accusamus impedit assumenda veritatis ut fuga molestias beatae repudiandae labore sed hic doloremque exercitationem consectetur culpa rerum placeat aut omnis. Fugit, perferendis deleniti id quaerat repellendus eligendi dolore incidunt dicta labore, assumenda quidem rerum ullam laboriosam maxime, iste odio quasi?'),
(2, 'assets/images/nadi.jpg', 'Nadi Dida', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id provident sint pariatur dolores eius aliquam, veniam vitae eos, facilis distinctio voluptates a beatae sed labore dolor adipisci officiis libero nulla totam. Tenetur similique reprehenderit dolores ipsum delectus, architecto necessitatibus voluptates sed quidem porro unde sequi accusamus neque sint blanditiis, expedita non odit eaque aliquam distinctio facere vel eius, odio laudantium. Quidem doloribus minima ullam fuga. Eius aliquid inventore ex unde hic earum at molestiae, voluptatem tempora, voluptas ipsa iste suscipit nam! Excepturi facilis officiis earum suscipit laborum. Eveniet quas molestiae quia inventore beatae, deleniti voluptatem repudiandae ducimus provident fuga nihil quasi commodi, assumenda enim corporis maxime, reprehenderit non distinctio suscipit magni itaque? Perspiciatis ea explicabo, a voluptates illo omnis molestiae tempora corporis officia quis ab eum vero excepturi nemo, quisquam neque aut quia expedita numquam eius. Voluptas dolore ducimus omnis dolorum maxime amet aut et quidem. Et recusandae dolores unde tempore, officiis quo. Fugiat aspernatur, eligendi laboriosam perferendis earum blanditiis accusamus impedit assumenda veritatis ut fuga molestias beatae repudiandae labore sed hic doloremque exercitationem consectetur culpa rerum placeat aut omnis. Fugit, perferendis deleniti id quaerat repellendus eligendi dolore incidunt dicta labore, assumenda quidem rerum ullam laboriosam maxime, iste odio quasi?');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(155) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `subtitle`) VALUES
(1, 'assets/images/banner.jpg', 'The GunStore', 'MerrGjuj'),
(2, 'assets/images/banner_2.jpg', 'The GunStore', 'MerrGjuj'),
(3, 'assets/images/special.jpg', 'The GunStore', 'MerrGjuj');

-- --------------------------------------------------------

--
-- Table structure for table `komentet`
--

CREATE TABLE `komentet` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentet`
--

INSERT INTO `komentet` (`id`, `image`, `title`, `content`) VALUES
(1, 'assets/images/box_1.png', 'Besarta Fisteku', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,\r\n          sunt ut. Aut consequuntur omnis natus, ipsum, inventore magni\r\n          reprehenderit quasi possimus et officia optio, sunt ad illum\r\n          officiis. Veritatis nihil iusto ad asperiores architecto sunt,\r\n          dolores nesciunt, dolor repudiandae consequuntur dicta\r\n          voluptatibus excepturi odit at corporis? Repudiandae vitae iure,\r\n          voluptate fuga officia, modi animi unde, quas impedit dolore\r'),
(2, 'assets/images/box_3.jpg', 'Hajdar Tashkernaj', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,\r\n          sunt ut. Aut consequuntur omnis natus, ipsum, inventore magni\r\n          reprehenderit quasi possimus et officia optio, sunt ad illum\r\n          officiis. Veritatis nihil iusto ad asperiores architecto sunt,\r\n          dolores nesciunt, dolor repudiandae consequuntur dicta\r\n          voluptatibus excepturi odit at corporis? Repudiandae vitae iure,\r\n          voluptate fuga officia, modi animi unde, quas impedit dolore\r'),
(3, 'assets/images/box_2.jpg', 'Filan Fisteku', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,\r\n          sunt ut. Aut consequuntur omnis natus, ipsum, inventore magni\r\n          reprehenderit quasi possimus et officia optio, sunt ad illum\r\n          officiis. Veritatis nihil iusto ad asperiores architecto sunt,\r\n          dolores nesciunt, dolor repudiandae consequuntur dicta\r\n          voluptatibus excepturi odit at corporis? Repudiandae vitae iure,\r\n          voluptate fuga officia, modi animi unde, quas impedit dolore\r');

-- --------------------------------------------------------

--
-- Table structure for table `paketat`
--

CREATE TABLE `paketat` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paketat`
--

INSERT INTO `paketat` (`id`, `image`, `title`, `content`) VALUES
(1, 'assets/images/box_1.png', 'PAKETA XENOMORPH', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt\r\n          veniam quaerat necessitatibus quis numquam itaque doloribus harum\r\n          quo, voluptatum accusamus accusantium asperiores ad consequatur.\r\n          Tempora consectetur adipisci, alias id in porro ut soluta\r\n          excepturi laudantium ea esse dolore, non delectus.'),
(2, 'assets/images/box_2.jpg', 'PAKETA LUFTAT E GALAKSISE', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt\r\n          veniam quaerat necessitatibus quis numquam itaque doloribus harum\r\n          quo, voluptatum accusamus accusantium asperiores ad consequatur.\r\n          Tempora consectetur adipisci, alias id in porro ut soluta\r\n          excepturi laudantium ea esse dolore, non delectus.'),
(3, 'assets/images/box_3.jpg', 'PAKETA SMARTGUN (M56)', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt\r\n          veniam quaerat necessitatibus quis numquam itaque doloribus harum\r\n          quo, voluptatum accusamus accusantium asperiores ad consequatur.\r\n          Tempora consectetur adipisci, alias id in porro ut soluta\r\n          excepturi laudantium ea esse dolore, non delectus.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'bandera', 'isa@gmail.com', '0a1c6944cb66d02ccefac35620ce2e51', 2),
(2, 'test', 'test@test.com', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(3, 'nadi', 'nadi@nadi.com', 'c4ca4238a0b923820dcc509a6f75849b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentet`
--
ALTER TABLE `komentet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paketat`
--
ALTER TABLE `paketat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentet`
--
ALTER TABLE `komentet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paketat`
--
ALTER TABLE `paketat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
