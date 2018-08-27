-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 05:37 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_ly_nhan_su`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `role` int(1) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `role`, `username`, `email`, `password`) VALUES
(21, 2, 'dong12343', 'dongphung19996@gmail.com', 'b0067595050ea222bba3eb9054d0dccb'),
(22, 2, 'dongphung199', 'dongphung19896@gmail.com', '51700f1e7d66ef0922e5350e6da2f136'),
(23, 2, 'dong223123', 'dongphung19226@gmail.com', '7c96053e681f16e90aaefd33566ed1fc'),
(24, 1, '4444', 'dongphung199643434@gmail.com', '19c5209c26f519cf04aabfd91dc2c95b'),
(25, 2, 'immortals0402', 'phong1234@gmail.com', 'e919fa7f54ef5892792d9aa0d2f3ce7c');

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_leave`
--

CREATE TABLE `apply_for_leave` (
  `id` int(11) NOT NULL,
  `type_of_contract` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `check_asset` int(11) NOT NULL,
  `date_off` date NOT NULL,
  `regisnation_reasons` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurrance_book` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `evalute` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_work` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_work` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language_work` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DB` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `name`, `address_work`, `time_work`, `language_work`, `DB`, `technology`) VALUES
(1, 'dong', 'SDC Da Nang', '1 nam', 'C++, Javascript, PHP', 'MySQL', 'Laravel, AngularJS'),
(2, 'Hoang', 'FPT Company', '2 nam', 'PHP', 'MySQL', 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `infomationn_personal`
--

CREATE TABLE `infomationn_personal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `id_card` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `date_range` date NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `maried` int(11) NOT NULL,
  `passport_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `passport_date` date NOT NULL,
  `passport_where` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_insurrance` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date_range_insurrance` date NOT NULL,
  `issued_by` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bank_account` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infomationn_personal`
--

INSERT INTO `infomationn_personal` (`id`, `name`, `gender`, `date_of_birth`, `id_card`, `date_range`, `phone`, `email`, `skype`, `address`, `nationality`, `maried`, `passport_no`, `passport_date`, `passport_where`, `number_of_insurrance`, `date_range_insurrance`, `issued_by`, `bank_account`) VALUES
(5, 'đồng', 1, '2000-08-15', '195623123', '2012-12-14', '01658777234', 'dongphung1996@gmail.com', 'Dong Phung', 'quảng bình', 'việt nam', 0, '12343123', '2018-01-01', 'đà nẵng', '19', '2018-08-15', 'SDC Da Nang', '1231231'),
(6, 'Phùng Thành Đồng', 1, '2018-08-01', '12354333', '2012-12-14', '01658777233', 'dongphung196@gmail.com', 'Immortals', 'Đà Nẵng', 'việt nam', 0, '12343123', '2018-01-01', 'Đà Nẵng', '20', '2017-08-01', 'SDC Đà Nẵng', '072047534');

-- --------------------------------------------------------

--
-- Table structure for table `information_residence`
--

CREATE TABLE `information_residence` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `host` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_residence` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` int(11) NOT NULL,
  `issued_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relationship` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_card` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurrance_book`
--

CREATE TABLE `insurrance_book` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `check_insurrance_book` int(1) NOT NULL,
  `number_of_insurrance` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `place_of_birth_certificate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registed_residence_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurrance_book`
--

INSERT INTO `insurrance_book` (`id`, `name`, `date_of_birth`, `check_insurrance_book`, `number_of_insurrance`, `gender`, `place_of_birth_certificate`, `registed_residence_address`) VALUES
(3, 'Phùng Thành Đồng', '1997-03-04', 0, '21', 1, 'Vinh', 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `labol_contract`
--

CREATE TABLE `labol_contract` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `part` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type_of_contract` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `employed_code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date_start_contract` date NOT NULL,
  `date_end_contract` date NOT NULL,
  `bonus` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `labol_contract`
--

INSERT INTO `labol_contract` (`id`, `name`, `part`, `type_of_contract`, `role`, `employed_code`, `rank`, `level`, `salary`, `date_start_contract`, `date_end_contract`, `bonus`) VALUES
(2, 'Phùng Thành Vinh', 'Coder', 'Dài hạn', 2, '1231', 'leader', 'senior', '2000$', '2018-01-18', '2018-09-15', '200$');

-- --------------------------------------------------------

--
-- Table structure for table `register_for_the_clinic`
--

CREATE TABLE `register_for_the_clinic` (
  `id` int(11) NOT NULL,
  `city_of_province` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `district_or_town` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `hospital` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `address_examination` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `soft_skill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language_work` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level_language` int(11) NOT NULL,
  `DB` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level_DB` int(11) NOT NULL,
  `technology` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level_technology` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `name`, `soft_skill`, `language_work`, `level_language`, `DB`, `level_DB`, `technology`, `level_technology`) VALUES
(1, 'Phùng Thành Đồng', 'Tiếng anh', 'C#, Javascript', 3, 'MySQL, SQLserver', 3, 'VueJS, ASP.NET', 4),
(2, 'Mai Thành Vinh', 'Tiếng Anh, Tiếng Hàn', 'Java, HTML5', 4, 'SQLserver', 4, 'Spring, Hibermate', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infomationn_personal`
--
ALTER TABLE `infomationn_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_residence`
--
ALTER TABLE `information_residence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurrance_book`
--
ALTER TABLE `insurrance_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labol_contract`
--
ALTER TABLE `labol_contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_for_the_clinic`
--
ALTER TABLE `register_for_the_clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `infomationn_personal`
--
ALTER TABLE `infomationn_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `information_residence`
--
ALTER TABLE `information_residence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurrance_book`
--
ALTER TABLE `insurrance_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `labol_contract`
--
ALTER TABLE `labol_contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register_for_the_clinic`
--
ALTER TABLE `register_for_the_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
