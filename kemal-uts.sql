-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2021 at 06:24 PM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemal-uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','pelanggan','teknisi','cs','kasir','manajer') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `created_at`) VALUES
(1, 'admin', '$2y$10$JgRIOR.evZcNAze/IKxTz.Wlz.uzX2YmdkSYR9NkrR2oRO4z5Jzp.', 'admin', '2021-05-15 17:25:18'),
(2, 'pelanggan', '$2y$10$4eNtNNAWpV7b/muEMQMxQeFog3DLLztGWObJTHY9a6UeHIbN0DIJC', 'pelanggan', '2021-05-15 17:26:12'),
(3, 'teknisi', '$2y$10$D/QpXKkamwH3rspxw4jAQ.V9GSGWjk4IvdglCkc6JYfmw8KCGlKlO', 'teknisi', '2021-05-15 17:26:34'),
(4, 'cs', '$2y$10$RwjfjO9EIV24ropEcpnJ9eP9Nigj91GgMVBQa5l3bCILq0osXQIpa', 'cs', '2021-05-15 17:26:50'),
(5, 'kasir', '$2y$10$0G6h5m8eUkF3iWfWAV7N.OwABRUn4PhmbjCKUKesIYS80CvCsGw/y', 'kasir', '2021-05-15 17:27:06'),
(6, 'manager', '$2y$10$giQNwNr1.M4ZNuFmLhBEr.Db0Z8JffQ37Bt2cnz3po8n1Ff8kigNW', 'manajer', '2021-05-15 17:27:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
