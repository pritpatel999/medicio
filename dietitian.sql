-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 08:08 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dietitian`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `doc_contact` varchar(255) NOT NULL,
  `doc_expertise` varchar(255) NOT NULL,
  `doc_fee` varchar(11) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `pat_contact` varchar(255) NOT NULL,
  `pat_email` varchar(255) NOT NULL,
  `pat_address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `doc_name`, `userid`, `doc_contact`, `doc_expertise`, `doc_fee`, `pat_name`, `pat_contact`, `pat_email`, `pat_address`, `date`, `time`, `payment`) VALUES
(6, 'Jagadish Patel', 2, '2233445566', 'Dietitian', '500', 'Patel Prit', '321312313', 'prit123@gmail.com', 'Gandhinagar', '2020-03-31', '11.00am', 'cash'),
(8, 'Jagadish Patel', 2, '2233445566', 'Dietitian', '500', 'Rohan Patel', '43223432244', 'rohan@gmail.com', 'Gandhinagar', '2020-04-02', '03.00pm', 'cash'),
(9, 'Sunil Shah', 6, '9988776655', 'Nutritionist', '500', 'Takshay Patel', '32131313213', 'takshay@gmail.com', 'Vadodara', '2020-04-03', '11.00am', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(1, 'Expert Consultant'),
(2, 'Dietitian'),
(3, 'Nutritionist');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 2, 'Takshay', 'takshay@gmail.com', 'This is perfect blog.', 'approved', '2020-02-07'),
(2, 1, 'Naruto', 'naruto@gmail.com', 'There are some errors regarding words in this blog.', 'approved', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_address` varchar(255) NOT NULL,
  `doc_city` varchar(255) NOT NULL,
  `doc_contact` varchar(255) NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_expertise` varchar(255) NOT NULL,
  `doc_fee` int(11) NOT NULL,
  `doc_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doc_name`, `doc_address`, `doc_city`, `doc_contact`, `doc_email`, `doc_expertise`, `doc_fee`, `doc_img`) VALUES
(2, 'Manish Shah', 'B-6, Oxford Complex, Asarwa, Ahmedabad', 'Ahmedabad', '1234561111', 'dr.manish@gmail.com', 'Dietitian', 800, '4.jpg'),
(3, 'Jagadish Patel', 'B-1, Rajastan Hospital, Shahibag, Ahmedabad', 'Ahmedabad', '2233445566', 'jagadish@gmail.com', 'Dietitian', 500, '3.jpg'),
(4, 'Sunil Shah', 'K-3, Oxford complex, Vijay Road, Vadodara', 'Vadodara', '9988776655', 'sunil@gmail.com', 'Nutritionist', 500, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(1, 1, 'WEIGHT IT OUT: THE MATH BEHIND VACATION WEIGHT GAIN', 'Kath', '2020-03-21', 'travel.jpeg', 'Over a decade ago when I had just finished losing my college weight, I used to weigh myself daily. But the scale started to control my emotions and I knew it was no longer serving me. I gave it up years ago. These days, the only time I hop on a scale is at the doctors office. My goal is to feel good in my body and in my clothes. A scale tells me my force against the earth, but it cant tell me how I feel.\r\n\r\nThe Math Behind Vacation Weight Gain\r\n\r\nWEIGHT IT OUT: THE MATH BEHIND VACATION WEIGHT GAIN\r\nYou come home from your vacation proclaiming a 10 pound weight gain. But a week later you feel back to normal. Diving into the math behind vacation weight gain will help you realize its not as dramatic as you think. Enjoy your trip knowing that your regular healthy eating patterns matter much more than a few days of indulging.\r\n\r\ngiant 10 sprinkle layer cake\r\n\r\nI still dream about that amazing 10? sprinkle cake from the Nest County Fair!\r\n\r\nOTHER VIDEOS\r\n\r\nVACATION WEIGHT GAIN: WEIGHT (WAIT) IT OUT\r\nOver a decade ago when I had just finished losing my college weight, I used to weigh myself daily. But the scale started to control my emotions and I knew it was no longer serving me. I gave it up years ago. These days, the only time I hop on a scale is at the doctors office. My goal is to feel good in my body and in my clothes. A scale tells me my force against the earth, but it canï¿½t tell me how I feel.\r\n\r\nA scale can be a useful tool to track long term trends and motivate someone to lose weight if they have medical advice they need to. I dont think that all scales need to be banished from society, as they serve a purpose for those whose health would benefit from weight loss. But if youre healthy and happy at the weight you are, a scale will likely cause more frustration than cheer.\r\n\r\nAs I have made peace with my body over time, I realized that the number on the scale discouraged me more than it helped. Stepping on a scale after a vacation was one of those times. I have overheard folks report back from a week-long vacation, I gained 10 vacation pounds on my trip to Italy! I want to tell them to weight it out.\r\n\r\nI have learned that it takes about 2 days into a vacation of eating more than I usually do, in both portion size and richer foods and alcohol, to notice that my body feels different. And upon my return it takes me about 4 to 5 days of regular meals and my exercise routine to feel normal again. Most of this extra weight is in the form of water. Remember that to gain a pound of fat you have to eat 3,500 calories more than your body needs to burn to function.\r\n\r\n\r\nTHE MATH\r\nConsider a vacation to a big city where you might walk five miles a day sightseeing, visit a hip new fitness studio once during the week, and go for one run while youï¿½re there. You are likely burning 2,200+ calories per day. That means you would have to eat 2,200 PLUS 500 calories more every day to average a single one-pound weight gain on your trip. \r\n\r\nIf you came home from your vacation five pounds heavier on the scale, you likely did not eat 17,500 calories above your needs in a week ï¿½ that would be an average of about 4,850 calories per day! Now I know I have probably come close to eating that number in one day before, but not seven days in a row. I find that my body usually wants to eat less the day after I eat a lot. #balance.\r\n\r\nHOW TO AVOID VACATION WEIGHT GAIN: DONï¿½T WORRY SO MUCH!\r\n\r\nAs a Registered Dietitian, I am telling you to relax during your vacation. Knowing the math and how my body operates helps me truly embrace the trip. Remember that just a few days of healthy eating is all it takes to counteract a few days of overeating. Your long term eating habits in your regular daily life are way more important than those you adopt for a few days away.', 'diet, math, expert, vacation, weight gain, dietitian', 0, 'published', 10),
(2, 0, 'How To Lose Weight The Right Way, The Healthy Way', 'Julie Mancuso', '2020-02-08', 'dish.jpg', '1. Get to the root of the problem by seeking the help of a mental health professional who can help you find more constructive ways to manage stress or help treat mental health conditions.\r\n\r\n2. Introduce more frequent exercise to release tension, get fresh air and to help you stay more fit.\r\n\r\n3. Relax. Meditate. Go for a swim. Read a book. Go for a walk with the dog. Find something that relaxes you and makes you feel good.\r\n\r\n4. Socialize. Go out with friends and try to forget about stress, at least temporarily. Your body needs a break. Let it recharge and refuel. Perhaps you will get better perspective after you return.\r\n\r\n5. Pre-plan healthy snacks that you enjoy eating to avoid impulse grabs when you are at your most vulnerable.\r\n\r\n', 'diet, health, weight', 0, 'published', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_confpass` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_pass`, `user_confpass`, `user_role`) VALUES
(1, 'Patel Prit', 'prit1234@gmail.com', '7046651111', 'helloprit', 'helloprit', 'admin'),
(2, 'prit patel', 'patelprit111@gmail.com', '7046623332', 'abcde', 'abcde', 'admin'),
(5, 'Takshay Patel', 'takshay@gmail.com', '1234567891', 'abcde', '', 'admin'),
(6, 'rohan patel', 'rohan@gmail.com', '2323232323', 'abcde', 'abcde', 'subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'em6uhrp88dqlconp0gmrb5urra', 1584715662),
(2, 'od08qkrro5qs701mpu1n8gnalr', 1584697372),
(3, 'th6kapu9unjfauidfpj9312gku', 1584801651),
(4, 'vvjrc0gf0kcj4shs9lstvqibjp', 1584880907),
(5, '8ibed4dus73pja6u5ek0s5errp', 1584893446),
(6, 'id8980lss76n40p0j8vmmn12f5', 1584898079),
(7, 'qp4ptk2ts45lkm7ns9gc35v201', 1584910325),
(8, '7ep70n136ueepab70n6ui3qoe7', 1584986429),
(9, 'u5r4b4230iuv0i4b4svengtlcm', 1585067402),
(10, 'k87ae13r05lbfe3hj1grpfb6k0', 1585079798),
(11, '976ccp6qslt1185ah78iodt775', 1585079811),
(12, 'llqu7epkmh802nrr8u08p2jphb', 1585395080),
(13, 'n69bb7ale6k9rbkju6eum6p6po', 1585393828),
(14, 'b1r8t8m9te5gdrt057j7dnhr1a', 1585471011);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
