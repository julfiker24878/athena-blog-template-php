-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 06:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athena`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `posted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `des`, `category`, `tags`, `blog_image`, `posted_at`) VALUES
(1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Health', '5', 'blog1.jpg', '2022-04-28'),
(2, 'What I Learned Living Where Everyone Told Me to Avoid', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Blog', '3', 'blog2.jpg', '2022-04-28'),
(3, 'Chorizo and Potato Tostada with a Fried Egg for breakfast', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Inspiration', 'Array', 'blog3.jpg', '2022-04-28'),
(4, 'The World Caters to Average People and Mediocre Lifestyles', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Health', '3', 'blog4.jpg', '2022-04-28'),
(5, 'Dear, Anonymous: If You Want More in Life, Now’s the Time to Take It', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lifestyle', '2', 'blog5.jpg', '2022-04-28'),
(6, 'How to Work From Home: 20 Tips From People Who Do It Successfully', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Blog', '4', 'blog6.jpg', '2022-04-28'),
(7, 'I Took SLT For A Month And Here’s What Happened', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Health', '4', 'blog7.jpg', '2022-04-28'),
(8, 'How To Instill Healthy Habits From a Young Age', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Health', '5', 'blog8.jpg', '2022-04-28'),
(9, 'First trip post lockdown – Narendra Bhawan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Inspiration', '2', 'blog9.jpg', '2022-04-28'),
(10, 'Easiest Ice Cream You’ll Ever Make. No Ice-cream Maker', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lifestyle', '1', 'blog10.jpg', '2022-04-28'),
(11, 'Inside an Antiques-Filled Los Angeles Home', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Inspiration', '2', 'blog11.jpg', '2022-04-28'),
(12, 'A House Designed for Throwing Great Parties', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Blog', '1', 'blog12.jpg', '2022-04-28'),
(13, 'A Turn-of-the-Century West Village Apartment', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Blog', '1', 'blog13.jpg', '2022-04-28'),
(14, 'A New Site Spotlights Black Women\'s Outdoor Spaces', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Blog', '1', 'blog14.jpg', '2022-04-28'),
(15, 'Explore interesting journeys', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lifestyle', '2', 'blog15.jpg', '2022-04-28'),
(17, ' South Africa Is Reopening Its Borders, but Only to Select Countries', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lifestyle', '2', 'blog17.jpg', '2022-04-28'),
(18, ' Southwest Temporarily Grounds 115 Planes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Inspiration', '3', 'blog18.jpg', '2022-04-28'),
(19, ' Beautiful pictures of the golden age of train travel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Inspiration', '3', 'blog19.jpg', '2022-04-28'),
(20, '22, OCTOBER 2020 Senators Introduce Bill to Safely Bring Back Cruising in US', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Health', '4', 'blog20.jpg', '2022-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `link`) VALUES
(1, 'Blog', '#'),
(2, 'Lifestyle', '#'),
(3, 'Inspiration', '#'),
(4, 'Health', '#');

-- --------------------------------------------------------

--
-- Table structure for table `footer_credit`
--

CREATE TABLE `footer_credit` (
  `id` int(11) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `link_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_credit`
--

INSERT INTO `footer_credit` (`id`, `credit`, `link_text`, `link`) VALUES
(1, 'Athena Magazine | All rights reserved | Designed by AliThemes.com | Developed by', 'Julfiker Ali', 'https://julfikerali.com/');

-- --------------------------------------------------------

--
-- Table structure for table `important_links`
--

CREATE TABLE `important_links` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `important_links`
--

INSERT INTO `important_links` (`id`, `title`, `link`) VALUES
(1, 'Terms & Conditions', '#'),
(2, 'Privacy Policy', '#'),
(3, 'Licensing Policy', '#'),
(4, 'Refund Policy', '#');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_text` varchar(100) NOT NULL,
  `logo_image` varchar(100) NOT NULL,
  `tagline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_text`, `logo_image`, `tagline`) VALUES
(1, 'Athena', 'logo1.png', 'Creative Magazine');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `account_name`, `icon`, `link`, `status`) VALUES
(1, 'Facebook', 'fa-brands fa-facebook-square', '#', 1),
(2, 'Twitter', 'fa-brands fa-twitter-square', '#', 1),
(3, 'Linkedin', 'fa-brands fa-linkedin', '#', 1),
(4, 'Instagram', 'fa-brands fa-instagram-square', '#', 1),
(5, 'Pinterest', 'fa-brands fa-pinterest-square', '#', 0),
(7, 'Map', 'fa-solid fa-map-location-dot', '#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subscribed_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `subscribed_at`) VALUES
(1, 'test@gmail.com', '2022-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `link`) VALUES
(1, 'Travel', '#'),
(2, 'Journey by Boat', '#'),
(3, 'Bus', '#'),
(4, 'Airplane', '#'),
(5, 'Food Vlog', '#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `cover_photo` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `about`, `role`, `password`, `profile_image`, `cover_photo`, `created_at`) VALUES
(1, 'Julfiker Ali', 'julfiker24878', 'julfiker@ali.com', 'Hello there! Are you looking for someone who can develop a professional web application for your website? Then you are at the right place, welcome!!!', 1, '$2y$10$DYV0FlSICJlLQHhp397WjuiIikUkwhQMzrjQQpL/m4bWtNzCWC0fm', '1.jpg', '1.jpg', '2022-04-27'),
(2, 'Lani Nielsen', 'geryjyry', 'valiwa@mailinator.com', '', 2, '$2y$10$TsMzsVKJVrOdsNaFiIPXc.GjAK.1l2SOwJJt4iIIcV/QpkFG9trDS', '2.jpg', '', '2022-04-28'),
(3, 'Chloe Gonzales', 'pyqajesi', 'cutihopuza@mailinator.com', '', 3, '$2y$10$2JKFYzXM2PG4KZAXP8YTD.hJCFl7qcRFZXu6c3I5Q339RLy6Z5Fti', '3.jpg', '', '2022-04-28'),
(4, 'Rhonda Gordon', 'nonolipifu', 'fade@mailinator.com', '', 2, '$2y$10$AUTfQLGR5fei6mx7sZslzu9dMAaETcUUTr7Ko/RAJVLP3zB7U52EC', '4.jpg', '', '2022-04-28'),
(5, 'Xaviera Mcpherson', 'pihimoj', 'qylukehef@mailinator.com', '', 3, '$2y$10$WEJkrFiGfboCmqLEYm8DVOtDtG7yGTklyVZgIPJvmQDhu4HQOF6dW', '5.jpg', '', '2022-04-28'),
(6, 'Ashely Good', 'turuqujy', 'nijapimive@mailinator.com', '', 4, '$2y$10$RGIQHqzBqquJ/THcNae2reuKF1EzSnYp3ktdf7/cFWpbXXReP5yPa', '6.jpg', '', '2022-04-28'),
(7, 'Cyrus Mccoy', 'xanuwyhi', 'kacycykezy@mailinator.com', '', 4, '$2y$10$yTU01VQOktgOB75qPQCGlemnTA0T1I2/QKKdekbil6yZzMls6K892', '7.jpg', '', '2022-04-28'),
(8, 'Leilani Horn', 'sakecysy', 'tonecylal@mailinator.com', '', 2, '$2y$10$9yrHvsTtvQINgThgFXnMd.Z4GbvZx8f6eepgUca81HFb5q6Cu.LXy', '8.jpg', '', '2022-04-28'),
(9, 'Kathleen Simmons', 'zomazu', 'cixihinaj@mailinator.com', '', 3, '$2y$10$pdWxPBp6jVe/6zoVEv3mGul8FbBvXjGoiV5rHQLHtpsF1GlslfaCW', '9.jpg', '', '2022-04-28'),
(10, 'Veda Hoover', 'fiteracaqe', 'xibytary@mailinator.com', '', 4, '$2y$10$pqvc60AnP0Akheb.Y3MgtubEO5tCsgLFLyVMSoVAgMxjuceK5YLS2', '10.jpg', '', '2022-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_credit`
--
ALTER TABLE `footer_credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_credit`
--
ALTER TABLE `footer_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
