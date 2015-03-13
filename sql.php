<?php

$create_tables = <<<QUERY
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `user` text NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `result` tinyint(1) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_referals`
--

CREATE TABLE IF NOT EXISTS `data_referals` (
`id` int(11) NOT NULL,
  `user` text NOT NULL,
  `referrer` text NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `result` tinyint(1) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referals`
--

CREATE TABLE IF NOT EXISTS `referals` (
  `username` text NOT NULL,
  `reffered_by` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `ip` text NOT NULL,
  `claimed_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_referals`
--
ALTER TABLE `data_referals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `data_referals`
--
ALTER TABLE `data_referals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
QUERY;


$insert_settings = <<<QUERY
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Dumping data for table `settings`
--

INSERT IGNORE INTO `settings` (`name`, `value`) VALUES
('contact_mail', 'admin@domain.com'),
('description_1', 'description 1'),
('description_2', 'description 2'),
('referral_percentage', '20'),
('rewards', '10*8, 20*4, 30*2, 40'),
('solvemedia_challenge_key', 'YOUR_SOLVEMEDIA_CHALLENGE_KEY'),
('solvemedia_verification_key', 'YOUR_SOLVEMEDIA_VERIFICATION_KEY'),
('subtitle', 'faucet subtitle'),
('timer', '1'),
('title', 'faucet title'),
('xapo_app_id', 'YOUR_APP_ID'),
('xapo_secret_key', 'YOUR_SECRET_KEY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
QUERY;


?>
