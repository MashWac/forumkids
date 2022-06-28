-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 12:21 PM
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
-- Database: `kids_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_role` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `password`, `admin_role`, `created_at`, `updated_at`, `is_deleted`) VALUES
(2, 'Jeff Smithy', 'smith@email.com', '12345678', 1, '2022-05-30 20:58:59', '2022-05-15 07:19:18', 0),
(3, 'Freddy Krugger', 'fred@email.com', '12345678', 1, '2022-05-15 05:21:11', '2022-05-15 07:19:18', 0),
(15, 'Greg Rex', 'rex@email.com', '12345678', 1, '2022-05-26 14:11:09', NULL, 0),
(17, 'Kib Nate', 'kn@email.com', '\n????\'?4֪j????\r??;ߛo!VGI?89?|W\rB?????\n?c)G???\Z/j4?6???C3?N)Dgz??3??M+?????x?S??', 1, '2022-06-27 18:35:41', NULL, 1),
(18, 'feebo steele', 'feebo@email.com', '????	??*???,+!??\n窄??y2?+?O?ms?<??X?x?g%?]?f??j?,	??? ???9??@??????	Cן99lL?', 1, '2022-05-30 21:38:54', NULL, 0),
(19, 'reee', 'reeree@email.com', 'w@?;??p????r!H??~NB;c mez??????l5o?d?$?w??hZ?{#?D???)?Eʕd6	??St?\"8??.9?<+<?\\?', 1, '2022-06-27 17:42:59', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL,
  `book_description` varchar(1000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publish_year` int(6) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_delete` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `book`, `book_description`, `author`, `publisher`, `publish_year`, `book_image`, `created_at`, `updated_at`, `is_delete`) VALUES
(6, 'Kite runner', '', 'A book about kites maybe', 'Khalid Houssein', 'Macmiller', 2012, 'not found', '2022-06-21 06:11:19', '2022-06-21 08:10:26', 0),
(10, 'Red Riding Hood', '', 'Little red riding hood goes to visit her grandma with a plot twist.', 'Red', 'Hood', 2102, '1656356400_4a5411ed375bb07b8568.jpg', '2022-06-27 19:00:00', NULL, 0),
(11, 'Red', '', 'Little red riding hood goes to visit her grandma with a plot twist.', 'Red', 'Hood', 2011, '1656404764_ec4b9846eb2529df4c45.jpg', '2022-06-28 08:26:04', NULL, 0),
(12, 'red', '', 'Little red riding hood goes to visit her grandma with a plot twist.', 'Red', 'Hood', 2135, '1656405278_5b834256a4e612170166.jpg', '2022-06-28 08:34:38', NULL, 0),
(13, 'Book3', '1656405636_abee6c2d3a8d0dd79f9a.pdf', 'Little red riding hood goes to visit her grandma with a plot twist.', 'book', 'Hood', 2013, '1656405636_d7dae85aec40b24b5d1a.jpg', '2022-06-28 08:40:36', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `commentor` int(10) NOT NULL,
  `forum` int(10) DEFAULT NULL,
  `comment_post` varchar(255) NOT NULL,
  `comments_flagged` int(2) NOT NULL,
  `commentcreated_at` timestamp NULL DEFAULT NULL,
  `commentupdated_at` datetime DEFAULT NULL,
  `is_deleted` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `commentor`, `forum`, `comment_post`, `comments_flagged`, `commentcreated_at`, `commentupdated_at`, `is_deleted`) VALUES
(1, 5, 1, 'let\'s plant more trees', 1, '2022-05-30 16:27:42', NULL, 1),
(3, 2, 2, 'It\'s not that bad as long as you\'re careful.', 0, '2022-05-29 16:28:02', NULL, 1),
(4, 1, 2, 'I blame China', 0, '2022-05-29 16:28:09', NULL, 1),
(5, 7, 1, 'Climate change is good for the environment. Lets goooooo!\r\n', 1, '2022-05-30 18:42:04', '2022-05-30 20:42:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(10) NOT NULL,
  `initiator` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `clicks` int(10) NOT NULL,
  `main_comment` varchar(1000) NOT NULL,
  `flagged` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `initiator`, `title`, `genre`, `clicks`, `main_comment`, `flagged`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 4, 'The world needs change', 'Climate change', 40, 'We need to take care of our environment', 1, '2022-06-27 18:20:17', '2022-05-30 13:03:06', 0),
(2, 3, 'Pandemic ', 'lifestyle', 20, 'How can we cope with the issues arising from the pandemic', 1, '2022-06-27 18:23:40', '2022-05-30 13:03:06', 1),
(3, 4, 'Nimechoka', 'climate', 0, 'Its getting hot in here', 0, '2022-06-27 14:32:18', NULL, 0),
(4, 4, 'what the hell', 'Games', 0, 'Hii ni nini hii', 0, '2022-06-27 18:12:50', NULL, 0),
(5, 4, 'what the hell', 'Games', 0, 'Hii ni nini hii', 1, '2022-06-27 18:23:34', NULL, 1),
(6, 4, 'freedome', 'Technology', 0, 'Buy androids', 0, '2022-06-28 09:20:59', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `kid_id` int(10) NOT NULL,
  `kid_name` varchar(255) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `kid_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kid_role` int(3) DEFAULT NULL,
  `parent` int(10) NOT NULL,
  `flagged` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`kid_id`, `kid_name`, `age`, `gender`, `kid_email`, `password`, `kid_role`, `parent`, `flagged`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'Stevo', 11, 'male', 'stevo@email.com', '12345678', 3, 2, 0, '2022-03-14 21:19:10', NULL, 0),
(2, 'Sharon', 8, 'female', 'sharon@email.com', '12345678', 3, 2, 1, '2022-06-27 18:26:03', NULL, 0),
(3, 'Jonny', 13, 'male', 'jonny@email.com', '12345678', 3, 1, 1, '2022-05-30 19:34:54', NULL, 0),
(4, 'Fatima', 12, 'female', 'fatima@email.com', '12345678', 3, 1, 0, '2022-01-03 21:18:18', NULL, 0),
(5, 'Kiddo Smal', 9, 'male', '', ']u???39[/o)S9???m??|?n??ܷ?Ed?D????s޾?f?r???:??O??}vK!P4Zp?2??M???B????=E?N', 3, 2, 0, '2022-06-27 19:11:18', NULL, 1),
(7, 'Mtoi Jobu', 8, 'male', 'jobu@email.com', 'f?@l٭d??uAa??x};??E??m2t7\n????m?h??Uc;n,???-??s??n<{\"??<4?K??C?2???/W?8.???', 3, 3, 0, '2022-05-30 21:19:20', NULL, 0),
(9, 'Mike Oxlong', 10, 'male', 'mike@email.com', 'k$NҋM??Ȇ\0=?=^?)RsO???;3Cp?N;]S>?t^?5r\"6??ӈq????+?WD?	??y??D?,?h??rb???uD', 3, 3, 0, '2022-05-30 21:41:31', NULL, 0),
(10, 'Hugh Jass', 9, 'female', 'jass@email.com', 'kid1234', 3, 1, 0, '2022-06-27 18:26:07', NULL, 0),
(12, 'Free Mind', 11, 'male', 'free@email.com', 'kid1234', 3, 1, 0, '2022-06-14 06:08:33', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(10) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `parent_role` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `parent_name`, `parent_email`, `password`, `parent_role`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'Mama Jonny', 'mamajonny@email.com', '12345678', 2, '2022-05-15 05:28:27', NULL, 0),
(2, 'BaBa Stevo', 'babastevoo@email.com', '12345678', 2, '2022-05-30 21:18:36', NULL, 0),
(3, 'Mark John', 'jm@email.com', '???||s??/	z?kt}o\\???5?w???Z?z?jE??i?k\"B?h?ukg???mz?1?T??j?:*????\"L?ο:\r??Ī', 2, '2022-05-30 21:30:45', NULL, 0),
(4, 'Hugh Jass', 'jass@email.com', '?Gj?8O?CV}6??>??a???y?K\07-??>L?\r???[?Xt@??x?M??B(¿?z??BT?+|~???s8?\\??=?????Z?wY', 2, '2022-05-30 21:40:03', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `puzzles`
--

CREATE TABLE `puzzles` (
  `puzzle_id` int(10) NOT NULL,
  `puzzle` varchar(255) NOT NULL,
  `puzzle_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puzzles`
--

INSERT INTO `puzzles` (`puzzle_id`, `puzzle`, `puzzle_name`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, '1656405742_6aed49bd6a12938a3873.pdf', 'puzzl1', '2022-06-28 08:45:41', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `quiz_id` int(10) NOT NULL,
  `quiz` varchar(255) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`quiz_id`, `quiz`, `quiz_name`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, '1656405761_f14954eed60a53235338.pdf', 'quiz1', '2022-06-28 08:45:47', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `reviewer` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `book_id`, `reviewer`, `rating`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 6, 1, 4, '2022-06-25 04:31:31', NULL, 0),
(2, 6, 1, 4, '2022-06-25 05:39:21', NULL, 0),
(3, 6, 1, 4, '2022-06-25 05:45:01', NULL, 0),
(4, 6, 1, 4, '2022-06-25 05:46:18', NULL, 0),
(5, 6, 1, 4, '2022-06-25 05:46:36', NULL, 0),
(6, 6, 1, 4, '2022-06-25 05:47:31', NULL, 0),
(7, 6, 1, 4, '2022-06-25 05:58:47', NULL, 0),
(8, 6, 1, 4, '2022-06-25 06:00:43', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(3) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `is_deleted` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(1, 'admin', 0),
(2, 'parent', 0),
(3, 'kid', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`),
  ADD KEY `role` (`admin_role`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `commentor` (`commentor`),
  ADD KEY `forum` (`forum`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`),
  ADD KEY `initiator` (`initiator`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`kid_id`),
  ADD UNIQUE KEY `email` (`kid_email`),
  ADD KEY `parent` (`parent`),
  ADD KEY `role` (`kid_role`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `email` (`parent_email`),
  ADD KEY `role` (`parent_role`);

--
-- Indexes for table `puzzles`
--
ALTER TABLE `puzzles`
  ADD PRIMARY KEY (`puzzle_id`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviewer` (`reviewer`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `kid_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `puzzles`
--
ALTER TABLE `puzzles`
  MODIFY `puzzle_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`admin_role`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`commentor`) REFERENCES `kids` (`kid_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`forum`) REFERENCES `forum` (`forum_id`);

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`initiator`) REFERENCES `kids` (`kid_id`);

--
-- Constraints for table `kids`
--
ALTER TABLE `kids`
  ADD CONSTRAINT `kids_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `parents` (`parent_id`),
  ADD CONSTRAINT `kids_ibfk_2` FOREIGN KEY (`kid_role`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`parent_role`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`reviewer`) REFERENCES `kids` (`kid_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
