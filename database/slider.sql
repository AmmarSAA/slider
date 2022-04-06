-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slider`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `profile_picture` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `admin_email`, `user_name`, `password`, `reg_date`, `updation_date`, `status`, `profile_picture`) VALUES
(0, 'Not Replied', '', 'Not Replied', '', '2022-03-31 08:53:45', '2022-03-31 08:54:10', 'Active', ''),
(1, 'Admin', 's.ammarahmed14@gmail.com', 'Admin', 'Admin@Bazm', '2022-03-31 06:33:56', '2022-03-31 06:33:56', 'Active', 'form-woman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthors`
--

CREATE TABLE `tblauthors` (
  `id` int(11) NOT NULL,
  `author_name` varchar(159) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_name_urdu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblauthors`
--

INSERT INTO `tblauthors` (`id`, `author_name`, `author_name_urdu`, `creation_date`, `updation_date`) VALUES
(1, ' C.S Lewis', NULL, '2020-04-23 11:50:45', '2020-06-24 12:29:02'),
(2, 'Doctor Imran Mushtaq', 'ڈاکٹر عمران مشتاق', '2020-04-07 14:00:00', '2022-03-31 06:38:12'),
(3, 'Enid Blyton', NULL, '2020-04-14 08:53:52', '2020-06-24 12:29:26'),
(4, 'Ishtiaq Ahmed', 'اشتیاق احمد', '2020-04-16 11:11:28', '2022-03-31 06:38:29'),
(5, 'Ibn E Safi', 'ابن صفی', '2020-04-16 11:11:51', '2022-03-31 06:38:39'),
(6, 'Jenny Nimmo', NULL, '2020-04-22 10:38:21', '2020-06-24 12:29:47'),
(7, 'Lemony Snicket', NULL, '2020-04-22 10:53:41', '2020-06-24 12:29:51'),
(8, 'Elspeth Graham', NULL, '2020-04-22 14:23:23', '2020-06-24 12:29:53'),
(9, 'J.K Rowling', NULL, '2020-04-22 14:23:41', '2020-06-24 12:29:56'),
(10, 'Roderick Hunt and Alex Brychta', NULL, '2020-04-23 11:42:10', '2020-06-24 12:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `book_pic` text COLLATE utf8_unicode_ci NOT NULL,
  `book_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `book_name_urdu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `isbn_number` int(100) DEFAULT NULL,
  `book_price` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `book_pic`, `book_name`, `book_name_urdu`, `cat_id`, `author_id`, `isbn_number`, `book_price`, `reg_date`, `updation_date`, `status`) VALUES
(1, 'capture.PNG', '19 & 20: Famous Five |The Case of Gobbling Goop & The Case of The Surfer Dude Who is Truly Rude', NULL, 2, 3, 2147483647, 700, '2020-04-08 14:00:00', '2020-08-10 09:26:51', NULL),
(2, 'Picture111.png', 'Daylight Robbery', '', 3, 2, 0, 0, '2020-04-14 12:28:58', '2020-08-10 09:26:57', NULL),
(3, '', 'Computer Test Book', 'کمپیوٹر ٹیسٹ بک', 4, 3, 1230, 299, '2020-04-16 07:06:33', '2022-03-31 06:36:47', NULL),
(4, '', 'Novel', '', 7, 7, 1230, 299, '2020-04-22 14:49:23', '2020-08-10 09:27:08', NULL),
(5, '', 'Test Book', 'ٹیسٹ بک', 3, 3, 1230, 299, '2020-04-23 09:18:39', '2022-03-31 06:36:59', NULL),
(6, '', 'Castle Adventure', '', 3, 10, 2147483647, 150, '2020-04-23 11:30:38', '2020-08-10 09:26:55', NULL),
(7, '', 'The Dragon\'s Child', NULL, 3, 6, 340673044, 570, '2020-04-23 11:32:51', '2020-08-10 09:27:04', NULL),
(8, '', '15: Secret Seven | Fun For The Secret Seven  English', NULL, 7, 3, 340182415, 200, '2020-07-07 14:24:05', '2020-08-10 09:27:13', NULL),
(9, '', 'Ghaar Ka Samandar', 'غار کا سمندر', 2, 4, 123, 700, '2020-07-30 09:34:21', '2022-03-31 06:37:11', NULL),
(10, '', 'Test', 'ٹیسٹ', 3, 3, 1230, 299, '2020-07-30 09:46:54', '2022-03-31 06:37:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `category_name`, `status`, `creation_date`, `updation_date`) VALUES
(1, 'Urdu Magazine', 'Active ', '2020-04-23 11:48:32', '2020-06-24 12:16:43'),
(2, 'Urdu Novel', 'Active', '2020-04-14 10:43:39', '2020-06-24 12:42:23'),
(3, 'English Story Book', 'Active', '2020-04-14 12:37:53', '2020-06-24 12:42:52'),
(4, 'Computer Science', 'Active ', '2020-04-15 10:13:21', '2020-06-24 12:16:50'),
(5, 'English Encyclopedia', 'Active ', '2020-04-22 10:54:34', '2020-06-24 12:16:53'),
(6, 'Urdu Encyclopedia', 'Active ', '2020-04-23 09:14:35', '2020-06-24 12:16:56'),
(7, 'English Novel', 'Active', '2020-06-24 12:43:25', '2020-07-16 15:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `id` int(3) NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `feedback_urdu` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(3) NOT NULL,
  `email_id` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rating` int(11) DEFAULT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feedback_reply` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reply_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`id`, `feedback`, `feedback_urdu`, `user_id`, `email_id`, `creation_date`, `rating`, `reply_date`, `feedback_reply`, `reply_id`) VALUES
(1, 'Wow Nice!', '', 1, 's.ammarahmed14@gmail.com', '2020-08-09 08:26:15', NULL, '2022-04-01 13:56:21', 'Thanks for your feedback :)', 1),
(2, 'Awesome!', '????????', 1, 's.ammarahmed14@gmail.com', '2022-03-31 08:46:04', 4, '2022-03-31 08:52:15', '', 0),
(3, 'Awesome!', '????????', 1, 's.ammarahmed14@gmail.com', '2022-03-31 08:47:23', 3, '2022-03-31 08:52:18', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblissuedbooksdetail`
--

CREATE TABLE `tblissuedbooksdetail` (
  `id` int(4) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `user_id` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `issue_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` timestamp NULL DEFAULT NULL,
  `return_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `return_status` tinyint(4) DEFAULT 0,
  `day_fine` int(11) NOT NULL,
  `damagepage_fine` int(11) NOT NULL,
  `extra_fine` int(11) NOT NULL,
  `total_fine` int(11) NOT NULL,
  `comments` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblissuedbooksdetail`
--

INSERT INTO `tblissuedbooksdetail` (`id`, `book_id`, `user_id`, `issue_date`, `due_date`, `return_date`, `return_status`, `day_fine`, `damagepage_fine`, `extra_fine`, `total_fine`, `comments`) VALUES
(1, 8, '1', '2022-03-30 19:00:00', '2022-04-10 19:00:00', '2022-04-02 13:20:39', 0, 0, 50, 80, 130, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblrulesandregulations`
--

CREATE TABLE `tblrulesandregulations` (
  `id` int(11) NOT NULL,
  `rule` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rule_urdu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblrulesandregulations`
--

INSERT INTO `tblrulesandregulations` (`id`, `rule`, `rule_urdu`, `creation_date`, `updation_date`) VALUES
(1, 'Before Donating anything write your name on it with full Date. \nExample: \nDonated To Masooma Library \nName: Sadia Date:1-January-2019 Day: Tuesday.', 'کچھ بھی عطیہ کرنے سے پہلے اس پر اپنا نام پوری تاریخ کے ساتھ لکھیں۔\nمثال:\nمعصومہ لائبریری کو عطیہ کیا۔\nنام: سعدیہ تاریخ: 1-جنوری-2019 دن: منگل۔', '2020-07-06 17:47:55', '2022-03-31 06:40:30'),
(3, 'You can only borrow one book at a time.', 'آپ ایک وقت میں صرف ایک کتاب ادھار لے سکتے ہیں۔', '2020-07-21 16:10:53', '2022-03-31 06:41:55'),
(4, 'Maximum days of borrowing a book are 10 days.', 'کتاب ادھار لینے کے زیادہ سے زیادہ دن 10 دن ہیں۔', '2020-07-21 16:11:10', '2022-03-31 06:42:22'),
(5, 'After 10 days (of borrowing), \"fine of 2 Rs.\" (per day) will be charged.', 'قرض لینے کے 10 دن کے بعد 2 روپے (فی دن) جرمانہ وصول کیا جائے گا۔', '2020-07-21 16:11:25', '2022-03-31 06:44:24'),
(6, 'Turning the corner of the page and writing in book isn\'t allowed; if you turn or write so, \"10 Rs. fine\" (per page) will be charged.', 'کتاب کے صفحات کو کونے سے موڑنے اور کتاب میں لکھنے کی اجازت نہیں ہے۔ اگر آپ ایسا کرتے ہیں تو \"10 روپے جرمانہ\" (فی صفحہ) وصول کیا جائے گا۔', '2020-07-21 16:11:37', '2022-03-31 07:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblslider`
--

CREATE TABLE `tblslider` (
  `id` int(3) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slider_img` text COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slide_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblslider`
--

INSERT INTO `tblslider` (`id`, `title`, `slider_img`, `content`, `creation_date`, `updation_date`, `slide_no`) VALUES
(1, 'Lorem Ipsum', 'Green Green.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', '2020-07-13 18:04:15', '2022-03-31 14:55:14', 1),
(2, 'Lorem Ipsum', '123.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', '2020-07-13 18:43:39', '2022-03-31 14:52:33', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_picture` text COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_role` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `full_name`, `email_id`, `mobile_no`, `user_name`, `password`, `status`, `profile_picture`, `reg_date`, `updation_date`, `user_role`) VALUES
(1, 'User', 's.ammarahmed14@gmail.com', NULL, 'User', 'User@Bazm', 'Active', 'image-removebg-preview.png', '2022-03-31 11:30:26', '2022-03-31 06:32:04', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `tblauthors`
--
ALTER TABLE `tblauthors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`),
  ADD UNIQUE KEY `author_name` (`author_name`),
  ADD UNIQUE KEY `author_name_urdu` (`author_name_urdu`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `book_name` (`book_name`,`isbn_number`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissuedbooksdetail`
--
ALTER TABLE `tblissuedbooksdetail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`);

--
-- Indexes for table `tblrulesandregulations`
--
ALTER TABLE `tblrulesandregulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblslider`
--
ALTER TABLE `tblslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblauthors`
--
ALTER TABLE `tblauthors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblissuedbooksdetail`
--
ALTER TABLE `tblissuedbooksdetail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblrulesandregulations`
--
ALTER TABLE `tblrulesandregulations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblslider`
--
ALTER TABLE `tblslider`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
