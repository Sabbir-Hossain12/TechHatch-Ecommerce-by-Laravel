-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techhatch_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_img` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_img`, `slug`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Apple', 'https://pngfre.com/wp-content/uploads/apple-logo-6-1024x1024.png', 'apple', 'Innovative technology company', 0, '2024-01-28 02:00:00', '2024-02-17 18:25:11'),
(3, 'Sony', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHJ-ypGZC9LZclYqNNxOg01rONcjRMe005ow&usqp=CAU', 'sony', 'Entertainment and electronics', 0, '2024-01-28 02:00:00', '2024-02-17 18:25:54'),
(4, 'Dell', 'https://via.placeholder.com/150', 'dell', 'Computer technology company', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(5, 'Bose', 'https://via.placeholder.com/150', 'bose', 'Audio equipment manufacturer', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(6, 'HP', 'https://via.placeholder.com/150', 'hp', 'Technology and hardware company', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(7, 'LG', 'https://via.placeholder.com/150', 'lg', 'Consumer electronics company', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(8, 'Microsoft', 'https://via.placeholder.com/150', 'microsoft', 'Technology company', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(9, 'Canon', 'https://via.placeholder.com/150', 'canon', 'Imaging and optical products', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(10, 'Acer', 'https://via.placeholder.com/150', 'acer', 'Computer hardware and electronics', 0, '2024-01-28 02:00:00', '2024-01-28 02:00:00'),
(16, 'Samsung', 'https://cdn3d.iconscout.com/3d/free/preview/free-samsung-5728462-4781226.png?f=webp&h=700', 'samsung-brand', NULL, 1, '2024-01-29 15:35:29', '2024-01-29 15:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_img` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_img`, `slug`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(21, 'Mobile', 'https://www.excelestore.com.bd/public/uploads/all/Ubdj9Jm1nR7KBsL9EDHO5uRZ9llN1J8yGA3ZKoMv.webp', 'mobile-phone', NULL, 1, '2024-01-29 15:48:07', '2024-01-29 15:48:07'),
(22, 'Headphone', 'https://www.startech.com.bd/image/cache/catalog/headphone/haylou/s35-anc/s35-anc-01-500x500.webp', 'head-phone', NULL, 1, '2024-01-29 15:48:07', '2024-01-29 15:48:07'),
(23, 'Computer', 'https://5.imimg.com/data5/SELLER/Default/2022/12/FN/ZL/OJ/3866941/desktop-computer-500x500.jpg', 'pc-computer', NULL, 1, '2024-01-29 15:50:03', '2024-01-29 15:51:05'),
(24, 'Smart Watch', 'https://www.shoppersbd.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/l/bluetooth.jpg', 'smart-watch', NULL, 1, '2024-01-29 15:55:01', '2024-01-29 15:55:01'),
(25, 'Cameras ', 'https://s7d1.scene7.com/is/image/canon/4147C013_eos-r5-rf24-105mm-f4-l-is-usm-lens-kit_primary?$Canon-Responsive$&fmt=png-alpha&wid=1100', '', NULL, 1, '2024-01-29 15:55:01', '2024-01-29 15:55:01'),
(26, 'Gaming', 'https://p1.hiclipart.com/preview/692/16/842/xbox-controller-cartoon-video-games-game-controllers-video-game-consoles-video-game-console-accessories-technology-orange-png-clipart.jpg', 'gaming-console', NULL, 1, '2024-01-29 16:01:16', '2024-01-29 16:01:16'),
(27, 'TVs and Home Entertainment', 'https://img.freepik.com/premium-vector/frame-tv-empty-led-monitor-computer-black-photo-frame-isolated-transparent-background-blank-screen-lcd-plasma-panel-tv-your-design_167801-822.jpg', 'tv-home', NULL, 1, '2024-01-29 16:01:16', '2024-02-17 10:54:17'),
(28, 'Smart Home Devices', 'https://images.unsplash.com/photo-1545259741-2ea3ebf61fa3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'smart-home-devices', NULL, 1, '2024-02-17 10:58:41', '2024-02-17 10:58:41'),
(29, 'Drones and Accessories', 'https://images.unsplash.com/photo-1521405924368-64c5b84bec60?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'drones-accessories', NULL, 1, '2024-02-17 10:59:47', '2024-02-17 10:59:47'),
(30, 'Networking and Smart Routers', 'https://images.unsplash.com/photo-1606904825846-647eb07f5be2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'networking-smart-routers', NULL, 1, '2024-02-17 11:00:40', '2024-02-17 11:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `customer_profiles`
--

CREATE TABLE `customer_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_add` varchar(255) NOT NULL,
  `cus_city` varchar(255) NOT NULL,
  `cus_state` varchar(255) NOT NULL,
  `cus_postcode` varchar(255) NOT NULL,
  `cus_country` varchar(255) NOT NULL,
  `cus_phone` varchar(255) NOT NULL,
  `cus_fax` varchar(255) NOT NULL,
  `ship_name` varchar(255) NOT NULL,
  `ship_add` varchar(255) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL,
  `ship_postcode` varchar(255) NOT NULL,
  `ship_country` varchar(255) NOT NULL,
  `ship_phone` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_profiles`
--

INSERT INTO `customer_profiles` (`id`, `cus_name`, `cus_add`, `cus_city`, `cus_state`, `cus_postcode`, `cus_country`, `cus_phone`, `cus_fax`, `ship_name`, `ship_add`, `ship_city`, `ship_state`, `ship_postcode`, `ship_country`, `ship_phone`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Sabbir Hossain', '549', 'Dhaka', 'Dhaka', '1230', 'Bangladesh', '01926241906', '1234', 'Sabbir Hossain', '549', 'Dhaka', 'Dhaka', '1230', 'Bangladesh', '01926241906', 1, '2024-02-05 01:55:04', '2024-02-05 01:55:04'),
(6, 'Sab', 'dhaka', 'dhaka', 'dhaka', '1230', 'Bangladesh', '888000265', '1234', 'Sab', 'dhaka', 'dhaka', 'dhaka', '1230', 'Bangladesh', '018653213', 2, '2024-02-18 02:29:45', '2024-02-18 02:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `payable` varchar(50) NOT NULL,
  `cus_details` varchar(500) NOT NULL,
  `ship_details` varchar(500) NOT NULL,
  `tran_id` varchar(100) NOT NULL,
  `val_id` varchar(100) NOT NULL DEFAULT '0',
  `delivery_status` enum('Pending','Processing','Completed') NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `total`, `vat`, `payable`, `cus_details`, `ship_details`, `tran_id`, `val_id`, `delivery_status`, `payment_status`, `user_id`, `created_at`, `updated_at`) VALUES
(23, '1733', '51.99', '1784.99', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65c27202ec9dc', '0', 'Pending', 'pending', 1, '2024-02-06 11:53:06', '2024-02-06 11:53:06'),
(24, '1733', '51.99', '1784.99', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65c272248b7a8', '0', 'Pending', 'Fail', 1, '2024-02-06 11:53:40', '2024-02-06 11:55:24'),
(25, '1733', '51.99', '1784.99', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65c278ac338fe', '0', 'Pending', 'pending', 1, '2024-02-06 12:21:32', '2024-02-06 12:21:32'),
(26, '7258', '217.74', '7475.74', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65c27990bfbe6', '0', 'Pending', 'pending', 1, '2024-02-06 12:25:20', '2024-02-06 12:25:20'),
(27, '8673', '260.19', '8933.19', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65cb86a49283c', '0', 'Pending', 'pending', 1, '2024-02-13 09:11:32', '2024-02-13 09:11:32'),
(28, '8673', '260.19', '8933.19', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65cb86bcb9d43', '0', 'Pending', 'Fail', 1, '2024-02-13 09:11:56', '2024-02-13 09:12:57'),
(29, '2159', '64.77', '2223.77', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65d0944a491a9', '0', 'Pending', 'pending', 1, '2024-02-17 05:11:06', '2024-02-17 05:11:06'),
(30, '142', '4.26', '146.26', 'Name: Sab, Address:dhaka, City:dhaka, Phone: 888000265', 'Name: Sab, Address:dhaka, City:dhaka, Phone: 018653213', '65d1bff938acc', '0', 'Pending', 'pending', 2, '2024-02-18 02:29:45', '2024-02-18 02:29:45'),
(31, '142', '4.26', '146.26', 'Name: Sab, Address:dhaka, City:dhaka, Phone: 888000265', 'Name: Sab, Address:dhaka, City:dhaka, Phone: 018653213', '65d1c007d2a8d', '0', 'Pending', 'Success', 2, '2024-02-18 02:29:59', '2024-02-18 02:30:08'),
(32, '142', '4.26', '146.26', 'Name: Sab, Address:dhaka, City:dhaka, Phone: 888000265', 'Name: Sab, Address:dhaka, City:dhaka, Phone: 018653213', '65d1c25ed3be2', '0', 'Pending', 'Success', 2, '2024-02-18 02:39:58', '2024-02-18 02:40:04'),
(33, '599', '17.97', '616.97', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', 'Name: Sabbir Hossain, Address:549, City:Dhaka, Phone: 01926241906', '65d1c34abbd65', '0', 'Pending', 'pending', 1, '2024-02-18 02:43:54', '2024-02-18 02:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

CREATE TABLE `invoice_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(50) NOT NULL,
  `sale_price` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_products`
--

INSERT INTO `invoice_products` (`id`, `invoice_id`, `product_id`, `user_id`, `qty`, `sale_price`, `created_at`, `updated_at`) VALUES
(39, 23, 1, 1, '1', '629', '2024-02-06 11:53:07', '2024-02-06 11:53:07'),
(40, 23, 2, 1, '1', '1104', '2024-02-06 11:53:07', '2024-02-06 11:53:07'),
(41, 24, 1, 1, '1', '629', '2024-02-06 11:53:40', '2024-02-06 11:53:40'),
(42, 24, 2, 1, '1', '1104', '2024-02-06 11:53:40', '2024-02-06 11:53:40'),
(43, 25, 1, 1, '1', '629', '2024-02-06 12:21:32', '2024-02-06 12:21:32'),
(44, 25, 2, 1, '1', '1104', '2024-02-06 12:21:32', '2024-02-06 12:21:32'),
(45, 26, 1, 1, '1', '629', '2024-02-06 12:25:20', '2024-02-06 12:25:20'),
(46, 26, 2, 1, '6', '6629', '2024-02-06 12:25:20', '2024-02-06 12:25:20'),
(47, 27, 1, 1, '5', '3149', '2024-02-13 09:11:32', '2024-02-13 09:11:32'),
(48, 27, 2, 1, '5', '5524', '2024-02-13 09:11:32', '2024-02-13 09:11:32'),
(49, 28, 1, 1, '5', '3149', '2024-02-13 09:11:56', '2024-02-13 09:11:56'),
(50, 28, 2, 1, '5', '5524', '2024-02-13 09:11:56', '2024-02-13 09:11:56'),
(51, 29, 4, 1, '3', '2159', '2024-02-17 05:11:06', '2024-02-17 05:11:06'),
(52, 30, 5, 2, '1', '142', '2024-02-18 02:29:45', '2024-02-18 02:29:45'),
(53, 31, 5, 2, '1', '142', '2024-02-18 02:29:59', '2024-02-18 02:29:59'),
(54, 32, 5, 2, '1', '142', '2024-02-18 02:39:58', '2024-02-18 02:39:58'),
(55, 33, 3, 1, '3', '599', '2024-02-18 02:43:54', '2024-02-18 02:43:54');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_23_122742_create_users_table', 1),
(3, '2024_01_23_123354_create_customer_profiles_table', 1),
(4, '2024_01_23_124141_create_brands_table', 1),
(5, '2024_01_23_124205_create_categories_table', 1),
(6, '2024_01_24_113821_create_products_table', 1),
(7, '2024_01_24_114723_create_product_details_table', 1),
(8, '2024_01_24_120241_create_product_sliders_table', 1),
(9, '2024_01_24_122014_create_product_wishes', 2),
(10, '2024_01_24_122318_create_product_carts', 3),
(11, '2024_01_24_122632_create_product_reviews', 4),
(12, '2024_01_24_123911_create_invoices_table', 5),
(13, '2024_01_24_124320_create_invoice_products_table', 5),
(14, '2024_01_24_124514_create_policies_table', 6),
(15, '2024_01_24_124551_create_sslcommerz_accounts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('about','refund','terms','how to buy','contact','complain') NOT NULL,
  `des` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `type`, `des`) VALUES
(1, 'about', 'At [Your E-commerce Brand], we are passionate about delivering an exceptional online shopping experience. Our journey began with a vision to redefine the way you shop for quality products and create a seamless connection between you and the products you love.\r\nOur Story\r\n\r\nEstablished [Year], we have grown from a small idea to a thriving online marketplace. Our story is woven with a commitment to curate a diverse range of products, ensuring that every purchase reflects your unique style and preferences.\r\nMission Statement\r\n\r\nOur mission is simple — to empower you to discover, explore, and shop with confidence. We strive to provide a platform where innovation meets affordability, offering a curated selection of products that blend quality, style, and functionality.\r\nWhat Sets Us Apart\r\n\r\n    Diverse Product Range: From the latest fashion trends to tech essentials and home decor, we curate a wide range of products to cater to your every need.\r\n\r\n    Quality Assurance: We believe in quality over quantity. Each product is carefully selected, ensuring it meets our high standards and exceeds your expectations.\r\n\r\n    User-Friendly Experience: Navigating through our website is designed to be effortless. Enjoy a seamless shopping journey from the comfort of your home.\r\n\r\n    Customer Satisfaction: Your satisfaction is our priority. Our dedicated customer support team is here to assist you at every step, making your shopping experience enjoyable and stress-free.\r\n\r\nJoin Our Community\r\n\r\n[Your E-commerce Brand] is more than a platform; it\'s a community of like-minded individuals who share a love for great products. Connect with us on social media, and be part of our growing family!\r\n\r\nThank you for choosing [Your E-commerce Brand]. We look forward to being your go-to destination for all your shopping needs.\r\n\r\nHappy Shopping!\r\n\r\n[Your E-commerce Brand] Team');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_des` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` tinyint(1) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `star` double NOT NULL,
  `remarks` enum('arrival','sellers','featured','special','regular') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `short_des`, `price`, `discount`, `discount_price`, `image`, `stock`, `qty`, `star`, `remarks`, `slug`, `brand_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Smartphone X', 'Latest smartphone with amazing features', '699.99', 10, '629.99', 'https://images.unsplash.com/photo-1567581935884-3349723552ca?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 1, '-4', 80, 'arrival', 'smartphone-x', 16, 21, '2024-01-28 02:00:00', '2024-02-13 09:11:56'),
(2, 'Laptop Pro', 'High-performance laptop for professionals', '1299.99', 15, '1104.99', 'https://t3.ftcdn.net/jpg/05/50/01/56/360_F_550015657_qkczaCj0zNDy1uuZtuwAK3MZpGhwRiQv.jpg', 1, '17', 90, 'sellers', 'laptop-pro', 2, 23, '2024-01-28 02:00:00', '2024-02-13 09:11:56'),
(3, 'Wireless Headphones', 'Premium wireless headphones with noise cancellation', '199.99', 0, '199.99', 'https://ecom.rangs.com.bd//storage/5088/860X740-02.jpg', 1, '37', 90, 'featured', 'wireless-headphones', 4, 22, '2024-01-28 02:00:00', '2024-02-18 02:43:54'),
(4, 'Digital Camera 2022', 'Professional-grade digital camera for photographers', '899.99', 20, '719.99', 'https://acmartbd.com/wp-content/uploads/2015/02/nikon-s2800.jpg', 1, '12', 90, 'special', 'digital-camera-2022', 9, 25, '2024-01-28 02:00:00', '2024-02-17 05:11:06'),
(5, 'Smartwatch Plus', 'Advanced smartwatch with health monitoring features', '149.99', 5, '142.49', 'https://static-01.daraz.com.bd/p/18b1064730a23b7d32e48d03fa425a05.jpg', 1, '57', 80, 'featured', 'smartwatch-plus', 7, 24, '2024-01-28 02:00:00', '2024-02-18 02:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_carts`
--

CREATE TABLE `product_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_carts`
--

INSERT INTO `product_carts` (`id`, `product_id`, `user_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(48, 3, 1, 'Blue', 'Big', '3', '599', '2024-02-17 12:41:48', '2024-02-17 12:41:48'),
(49, 5, 2, 'Black', 'L', '1', '142', '2024-02-18 02:27:54', '2024-02-18 02:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `img1`, `img2`, `img3`, `img4`, `des`, `color`, `size`, `warranty`, `slug`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 'https://t3.ftcdn.net/jpg/05/50/01/56/360_F_550015657_qkczaCj0zNDy1uuZtuwAK3MZpGhwRiQv.jpg', 'https://t3.ftcdn.net/jpg/05/50/01/56/360_F_550015657_qkczaCj0zNDy1uuZtuwAK3MZpGhwRiQv.jpg', 'https://t3.ftcdn.net/jpg/05/50/01/56/360_F_550015657_qkczaCj0zNDy1uuZtuwAK3MZpGhwRiQv.jpg', 'https://t3.ftcdn.net/jpg/05/50/01/56/360_F_550015657_qkczaCj0zNDy1uuZtuwAK3MZpGhwRiQv.jpg', 'Introducing the XYZ UltraBook Pro 2023, a cutting-edge laptop that redefines the way you experience technology. Engineered for power, performance, and portability, this sleek device is your gateway to seamless productivity and immersive entertainment.', 'Green,Red,Black', '16\',18\',21\'', '5 years', 'laptop', 2, '2024-02-01 19:59:40', '2024-02-03 22:39:16'),
(3, 'https://images.unsplash.com/photo-1567581935884-3349723552ca?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1567581935884-3349723552ca?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1528795259021-d8c86e14354c?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1528795259021-d8c86e14354c?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'Introducing the cutting-edge XYZ Mobile, a sleek and sophisticated device designed to elevate your mobile experience. With its stunning 6.5-inch Super AMOLED display, immerse yourself in vibrant colors and crystal-clear details for an unparalleled visual feast.\r\n\r\nPowered by a lightning-fast octa-core processor, XYZ Mobile ensures seamless multitasking and swift app launches, delivering a smooth and responsive performance. Capture every moment with precision using the advanced dual-camera system, featuring a 48MP main sensor and a dedicated 8MP ultra-wide lens. From breathtaking landscapes to detailed close-ups, your photography game will reach new heights.', 'Black,Blue,White', '6.1\"', '2 years', 'mobile-phone', 1, '2024-02-03 22:34:32', '2024-02-03 22:42:37'),
(4, 'https://images.unsplash.com/photo-1484704849700-f032a568e944?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1484704849700-f032a568e944?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1484704849700-f032a568e944?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1484704849700-f032a568e944?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'mmersive Sound: Enjoy crystal-clear, high-fidelity audio with our state-of-the-art sound technology. From deep bass to crisp highs, every detail is meticulously reproduced for an immersive listening experience.\r\n\r\nActive Noise Cancellation: Block out the world and focus on your audio. The advanced noise-canceling feature eliminates ambient sounds, letting you enjoy your music or calls in peace.\r\n\r\nWireless Freedom: Say goodbye to tangled wires. The HX-500 supports Bluetooth connectivity, providing you with the freedom to move without restrictions. Connect effortlessly to your devices and experience wireless audio at its best.\r\n\r\nAll-Day Comfort: Designed for extended wear, these headphones feature plush ear cushions and an adjustable headband for maximum comfort. The lightweight and ergonomic design ensure a snug fit, making them perfect for long listening sessions.\r\n\r\nLong Battery Life: Keep the music playing. The HX-500 boasts an extended battery life, ensuring that your headphones are ready whenever you are. Charge up quickly and enjoy hours of uninterrupted audio.\r\n\r\nSleek and Durable Design: Crafted with a sleek and modern aesthetic, the HX-500 is as stylish as it is durable. The robust construction ensures longevity, making these headphones a reliable companion for your audio adventures.', 'Blue,Black,White', 'Big', '2', 'headphone', 3, '2024-02-17 10:36:30', '2024-02-17 10:36:30'),
(5, 'https://images.unsplash.com/photo-1632794716789-42d9995fb5b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1632794716789-42d9995fb5b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1632794716789-42d9995fb5b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1632794716789-42d9995fb5b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'Stylish Design: The TechWear Pro Series Smartwatch combines cutting-edge technology with a sleek and modern design. Crafted with premium materials, it complements any style and adds a touch of sophistication to your wrist.\r\n\r\nHealth and Fitness Tracking: Monitor your health in real-time with advanced health tracking features. Keep tabs on your heart rate, sleep patterns, and activity levels. The built-in fitness tracker helps you achieve your fitness goals with precision.\r\nSmart Notifications: Stay connected without constantly checking your phone. Receive notifications for calls, messages, emails, and app alerts directly on your wrist. Stay in the loop effortlessly.\r\n\r\nGPS Navigation: Navigate the world confidently with built-in GPS functionality. Whether you\'re exploring a new city or tracking your running route, the TechWear Pro Series Smartwatch keeps you on the right path.\r\n\r\nWater-Resistant: Designed for an active lifestyle, this smartwatch is water-resistant, making it suitable for workouts, outdoor activities, and everyday use.\r\n\r\nCustomizable Watch Faces: Express your personal style by choosing from a variety of customizable watch faces. Match your smartwatch to your mood or outfit effortlessly.\r\n\r\nLong Battery Life: Go about your day without constantly worrying about charging. The TechWear Pro Series Smartwatch offers an impressive battery life, ensuring it keeps up with your busy schedule.', 'Black', 'L', '2', 'smart', 5, '2024-02-17 10:46:43', '2024-02-17 10:46:43'),
(6, 'https://images.unsplash.com/photo-1611048219784-ca687f9fe55d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1611048219784-ca687f9fe55d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1611048219784-ca687f9fe55d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1611048219784-ca687f9fe55d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'Crystal Clear 1080p HD Video: Experience sharp and clear video quality with a 1080p HD camera. Whether you\'re monitoring your home, office, or pets, see every detail in vivid clarity.\r\n\r\nIntelligent Motion Detection: The VisionTech Smart Camera is equipped with advanced motion detection technology. Receive instant alerts on your mobile device whenever motion is detected, ensuring you\'re always in the know.\r\n\r\nTwo-Way Audio: Communicate with family members, pets, or visitors through the built-in two-way audio. Perfect for checking in or deterring intruders even when you\'re away.\r\n\r\nNight Vision Capability: Don\'t miss a thing, even in low-light conditions. The smart camera features infrared night vision, providing clear footage in complete darkness.\r\n\r\nSmart Connectivity: Connect seamlessly to your home Wi-Fi network. Access live feeds, recorded footage, and settings through a dedicated mobile app, available for both iOS and Android.\r\n\r\nCloud Storage and Local SD Card Support: Choose your preferred storage option. The VisionTech Smart Camera supports both cloud storage and local microSD cards, ensuring you never miss a moment.\r\n\r\nEasy Installation: Set up your smart camera effortlessly with a user-friendly installation process. Mount it on a wall, ceiling, or place it on a flat surface – adapt it to your space.', 'Black,White', 'L', '3', 'digital-camera', 4, '2024-02-17 10:52:30', '2024-02-17 10:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(1000) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `des`, `rating`, `product_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'good', '4.5', 5, 1, '2024-01-25 12:37:44', '2024-01-25 12:38:18'),
(2, 'good', '4.5', 1, 1, '2024-01-25 12:38:31', '2024-01-25 12:38:31'),
(3, 'good is good', '4.5', 2, 1, '2024-01-25 13:04:10', '2024-01-25 13:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_sliders`
--

CREATE TABLE `product_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_des` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sliders`
--

INSERT INTO `product_sliders` (`id`, `title`, `short_des`, `price`, `image`, `slug`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Smart Watch', '50% off in all products', '1299', 'https://images.unsplash.com/photo-1461141346587-763ab02bced9?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'smart-watch', 5, '2024-01-29 22:45:27', '2024-02-14 13:13:40'),
(2, 'Headphones', 'Taking your Music Experience to Next Level', '780', 'https://images.unsplash.com/photo-1599139894727-62676829679b?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'headphone', 3, '2024-01-30 19:23:02', '2024-02-14 13:08:55'),
(3, 'Digital Camera', 'Get up to 50% off Today Only!', '99999', 'https://images.unsplash.com/photo-1480365501497-199581be0e66?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'digital-camera', 4, '2024-01-30 19:23:02', '2024-02-14 13:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_wishes`
--

CREATE TABLE `product_wishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_wishes`
--

INSERT INTO `product_wishes` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(18, 4, 1, '2024-02-17 04:53:29', '2024-02-17 04:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `sslcommerz_accounts`
--

CREATE TABLE `sslcommerz_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` varchar(255) NOT NULL,
  `store_passwd` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `success_url` varchar(255) NOT NULL,
  `fail_url` varchar(255) NOT NULL,
  `cancel_url` varchar(255) NOT NULL,
  `ipn_url` varchar(255) NOT NULL,
  `init_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sslcommerz_accounts`
--

INSERT INTO `sslcommerz_accounts` (`id`, `store_id`, `store_passwd`, `currency`, `success_url`, `fail_url`, `cancel_url`, `ipn_url`, `init_url`, `created_at`, `updated_at`) VALUES
(1, 'teamr64c9e84055219', 'teamr64c9e84055219@ssl', 'BDT', 'http://127.0.0.1:8000/PaymentSuccess', 'http://127.0.0.1:8000/PaymentFail', 'http://127.0.0.1:8000/PaymentCancel', 'http://127.0.0.1:8000/api/PaymentIPN', 'https://sandbox.sslcommerz.com/gwprocess/v4/api.php', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'h.sabbir36@yahoo.com', '0', '2024-01-24 14:49:14', '2024-02-18 02:43:43'),
(2, 'sh1389045@gmail.com', '0', '2024-02-18 08:26:29', '2024-02-18 02:27:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_brand_name_unique` (`brand_name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `customer_profiles`
--
ALTER TABLE `customer_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_profiles_user_id_unique` (`user_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_products_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoice_products_product_id_foreign` (`product_id`),
  ADD KEY `invoice_products_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_carts`
--
ALTER TABLE `product_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_carts_product_id_foreign` (`product_id`),
  ADD KEY `product_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_details_product_id_unique` (`product_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `product_reviews_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `product_sliders`
--
ALTER TABLE `product_sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_sliders_product_id_unique` (`product_id`);

--
-- Indexes for table `product_wishes`
--
ALTER TABLE `product_wishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_wishes_product_id_foreign` (`product_id`),
  ADD KEY `product_wishes_user_id_foreign` (`user_id`);

--
-- Indexes for table `sslcommerz_accounts`
--
ALTER TABLE `sslcommerz_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer_profiles`
--
ALTER TABLE `customer_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_carts`
--
ALTER TABLE `product_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sliders`
--
ALTER TABLE `product_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_wishes`
--
ALTER TABLE `product_wishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sslcommerz_accounts`
--
ALTER TABLE `sslcommerz_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_profiles`
--
ALTER TABLE `customer_profiles`
  ADD CONSTRAINT `customer_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD CONSTRAINT `invoice_products_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_carts`
--
ALTER TABLE `product_carts`
  ADD CONSTRAINT `product_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer_profiles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_sliders`
--
ALTER TABLE `product_sliders`
  ADD CONSTRAINT `product_sliders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_wishes`
--
ALTER TABLE `product_wishes`
  ADD CONSTRAINT `product_wishes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_wishes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
