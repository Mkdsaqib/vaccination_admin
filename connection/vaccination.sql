-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 04:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(55) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `vaccine` varchar(55) NOT NULL,
  `preferred_appointment_date` date NOT NULL,
  `preferred_appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `user_id`, `name`, `date_of_birth`, `gender`, `postal_code`, `vaccine`, `preferred_appointment_date`, `preferred_appointment_time`) VALUES
(1, 1, 'Younas', '2023-10-26', 'female', 12343, '1', '2023-10-25', '20:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `user_image`, `user_name`, `user_email`, `feedback`) VALUES
(1, 1, 'comment_2.png', 'jaweria', 'jaweria@gmail.com', 'I vaccinate my kids, because I believe in providing them with the best healthcare possible. Vaccinations play into that because they protect children from harmful, sometimes deadly diseases. Failing to vaccinate intentionally puts my kids (and others\' kids) at risk. We\'re fortunate to live in a country that makes such vaccinations available.'),
(2, 2, 'comment_1.png', 'falak', 'falak@gmail.com', 'I vaccinate my children to protect them from contracting a debilitating disease that could impact their entire life. My thought has always been, \'Why would I want to take the chance if a 3-second shot will protect them?\' I had chickenpox and measles as a child; my kids are not missing anything by not having them!');

-- --------------------------------------------------------

--
-- Table structure for table `hosp-reg`
--

CREATE TABLE `hosp-reg` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hosp-reg`
--

INSERT INTO `hosp-reg` (`id`, `hospital_name`, `address`, `email`, `url`, `telephone`, `password`, `description`, `img`) VALUES
(1, 'aga khan', 'stadium road', 'aku@edu.net', 'https://www.aku.com', '0313-2232456', 'pak12345', 'no', 'download.jfif'),
(2, 'jinnah hosp', 'M.A jinnah road ', 'jinah@hosp.com', 'https://www.jinnah.com', '0313-2232876', 'pak12345', 'wdssadsadasdaad', 'download.jfif'),
(14, 'jinnah hosp', 'stadium road', 'aku@edu.net', 'https://www.aku.com', '0313-2232456', '321', 'agadsfgasdfd', 'download (1).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `register_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `password`, `register_date`) VALUES
(1, 'saqib', 'sheikh', 'saqib.sheikh@gmail.com', 'pak.12345', '2023-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `user_image`, `user_name`, `phone_number`, `street_address`, `city`, `state`, `user_email`, `password`) VALUES
(1, 'Array', '', 0, '', '', '', 'jaweria@gmail.com', 'jay123'),
(2, 'Array', 'falak naz', 0, '', '', '', 'falak@gmail.com', 'falak'),
(10, 'comment_1.png', 'jaweria jamil', 2147483647, 'board office aptech', 'karachi', 'sindh', 'kysjaweriaa670@gmail.com', '$2y$10$ArAdHrLdmC9mH/o/cgOQ6egnEQ/vEk8U6w/UGTurEt5QBo8qouGYK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hosp-reg`
--
ALTER TABLE `hosp-reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hosp-reg`
--
ALTER TABLE `hosp-reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `signup` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
