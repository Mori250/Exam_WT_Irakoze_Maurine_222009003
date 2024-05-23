-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_anger_management_counseling_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `patients` varchar(23) NOT NULL,
  `counseling issues` varchar(43) NOT NULL,
  `appointment_date` datetime DEFAULT NULL,
  `appointment_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `patients`, `counseling issues`, `appointment_date`, `appointment_status`) VALUES
(1, '', '', '2024-05-15 16:25:53', 'pending'),
(2, '', '', '2024-05-27 16:25:59', 'pendin'),
(3, 'Rugema', 'family therapy', '2024-05-28 17:04:11', 'pending'),
(4, 'Annet', 'Emotional regulation', '2024-05-13 17:04:11', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(65) NOT NULL,
  `address` varchar(32) DEFAULT NULL,
  `email` varchar(34) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `address`, `email`, `password`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, 'bigmind', 'huye', 'lolie@gmail.com', '21'),
(4, 'bigmind', 'huye', 'lolie@gmail.com', '21'),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coping_strategies`
--

CREATE TABLE `coping_strategies` (
  `strategy_id` int(11) NOT NULL,
  `strategy_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `stress_type` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counselors`
--

CREATE TABLE `counselors` (
  `counselor_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `phone` varchar(16) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counselors`
--

INSERT INTO `counselors` (`counselor_id`, `username`, `email`, `specialization`, `phone`, `password`) VALUES
(1, 'mikewill', 'rwanda@gmail.com', 'Stress Management', '0788834678', ''),
(2, 'mikewill', 'rwanda@gmail.com', 'Stress Management', '0788834678', ''),
(3, 'lil wayne', 'lolie@gmail.com', 'Decision-Making Skills', '0788834623', '16424'),
(4, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `owner` varchar(21) NOT NULL,
  `transactionID` varchar(16) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(50) DEFAULT NULL,
  `transaction_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `owner`, `transactionID`, `amount`, `payment_date`, `payment_method`, `transaction_status`) VALUES
(2, 'icetube', '43424354', 1000000.00, '2024-05-09 06:23:00', 'BANK TRANSFER', 'COMPLETED'),
(3, 'john wicky 3', '4564553', 6000000.00, '2024-05-09 06:23:00', 'DIGITAL WALLET', 'COMPLETED');

-- --------------------------------------------------------

--
-- Table structure for table `progress_reports`
--

CREATE TABLE `progress_reports` (
  `report_id` int(11) NOT NULL,
  `reporter's name` varchar(81) DEFAULT NULL,
  `issues` varchar(43) NOT NULL,
  `reporter's email` varchar(43) DEFAULT NULL,
  `report_date` date DEFAULT NULL,
  `reporter subject` varchar(545) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progress_reports`
--

INSERT INTO `progress_reports` (`report_id`, `reporter's name`, `issues`, `reporter's email`, `report_date`, `reporter subject`) VALUES
(1, '', '', '', '0000-00-00', ''),
(2, '', '', '', '0000-00-00', ''),
(3, '', '', '', '0000-00-00', ''),
(4, '', 'mandatory', 'rwigema@gmail.com', '2024-05-15', 'real talk'),
(5, 'rwigema', 'mandatory', 'rwigema@gmail.com', '2024-05-15', 'real talk');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `resource_type` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `resources date` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `resource_type`, `description`, `resources date`) VALUES
(1, '', '', ''),
(2, 'tables', '', '2024-05-13'),
(3, 'tables', 'used for medication', '2024-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(43) NOT NULL,
  `session date` varchar(87) DEFAULT NULL,
  `duration minutes` varchar(787) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session date`, `duration minutes`) VALUES
(1, '', ''),
(2, '2024-05-27', '45'),
(3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `support_groups`
--

CREATE TABLE `support_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `supper_name` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `date_of_birth`, `email`, `password`) VALUES
(1, 'admin', 'kelly', '2024-05-20', 'ndayidieu046@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'kiza', 'kelly', '2024-05-01', 'ndayidieu046@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'kiza', 'kellysgahjds', '2024-05-21', 'ndayidieu04060@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'kiza', 'kelly', '2024-05-19', 'ndayidieu0406@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'admin', 'kelly', '2024-05-01', 'ndayidieu@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'dieudonne', 'kelly', '2024-05-02', 'ndayidieu0460@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'kiza', 'kellysga', '2024-05-22', 'izereirasub1@gmail.com', '1'),
(8, 'maurine', 'kelly', '2024-05-02', 'maurine@gmail.com', '123'),
(9, 'keza', 'kelly', '2024-05-09', 'lolie1@gmail.com', '1'),
(10, 'kiza', 'kelly', '2024-05-09', 'rwanda@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `coping_strategies`
--
ALTER TABLE `coping_strategies`
  ADD PRIMARY KEY (`strategy_id`);

--
-- Indexes for table `counselors`
--
ALTER TABLE `counselors`
  ADD PRIMARY KEY (`counselor_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `progress_reports`
--
ALTER TABLE `progress_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `support_groups`
--
ALTER TABLE `support_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coping_strategies`
--
ALTER TABLE `coping_strategies`
  MODIFY `strategy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counselors`
--
ALTER TABLE `counselors`
  MODIFY `counselor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `progress_reports`
--
ALTER TABLE `progress_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(43) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support_groups`
--
ALTER TABLE `support_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
