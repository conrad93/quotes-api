-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 05:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotes_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `email`, `password`, `name`) VALUES
(1, 'test@test.com', '12345678', 'Conrad');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `quote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `admin_id`, `author`, `quote`) VALUES
(4, 1, 'Felix \"xQcOW\" Lengyel', 'You need a lil bit of rain, to have a lil bit of rainbow.'),
(5, 1, 'Byron Pulsifer', 'Fate is in your hands and no one elses'),
(7, 1, 'Yogi Berra', 'Life is a learning experience, only if you learn.'),
(8, 1, 'Napoleon Hill', 'Ideas are the beginning points of all fortunes.'),
(9, 1, 'Lao Tzu', 'Doing nothing is better than being busy doing nothing.'),
(10, 1, 'Sigmund Freud', 'From error to error one discovers the entire truth.'),
(11, 1, 'John Wooden', 'Never mistake activity for achievement.'),
(12, 1, 'Albert Einstein', 'Learn from yesterday, live for today, hope for tomorrow.'),
(13, 1, 'Napoleon Hill', 'Don\'t wait. The time will never be just right.'),
(14, 1, 'Ralph Emerson', 'Skill to do comes of doing.'),
(15, 1, 'Bodhidharma', 'All know the way; few actually walk it.'),
(16, 1, 'Johann Wolfgang von Goethe', 'Great talent finds happiness in execution.'),
(17, 1, 'Michelangelo', 'Faith in oneself is the best and safest course.'),
(18, 1, 'Winston Churchill', 'Courage is going from failure to failure without losing enthusiasm.'),
(19, 1, 'Seneca', 'Luck is what happens when preparation meets opportunity.'),
(20, 1, 'Napoleon Bonaparte', 'Victory belongs to the most persevering.'),
(21, 1, 'Thich Nhat Hanh', 'Smile, breathe, and go slowly.'),
(22, 1, 'Ellen Gilchrist', 'Don\'t ruin the present with the ruined past.'),
(23, 1, 'Albert Schweitzer', 'Do something wonderful, people may imitate it.'),
(24, 1, 'Carl Jung', 'Who looks outside, dreams; who looks inside, awakes.'),
(25, 1, 'Leonardo da Vinci', 'Nothing strengthens authority so much as silence.'),
(26, 1, 'Theophrastus', 'Time is the most valuable thing a man can spend.'),
(27, 1, 'Pablo Picasso', 'Everything you can imagine is real.'),
(28, 1, 'John Dryden', 'Fortune befriends the bold.'),
(29, 1, 'Mike Ditka', 'You\'re never a loser until you quit trying.'),
(30, 1, 'Johann Wolfgang von Goethe', 'Knowing is not enough; we must apply!'),
(31, 1, 'Toni Morrison', 'If you surrender to the wind, you can ride it.'),
(32, 1, 'Paulo Coelho', 'Write your plans in pencil and give God the eraser.'),
(33, 1, 'Epictetus', 'Difficulties are things that show a person what they are.'),
(34, 1, 'Honore de Balzac', 'When you doubt your power, you give power to your doubt.'),
(35, 1, 'Ovid', 'The cause is hidden. The effect is visible to all.'),
(36, 1, 'Tony Robbins', 'The path to success is to take massive, determined action.'),
(37, 1, 'Epictetus', 'If you wish to be a writer, write.'),
(38, 1, 'Benjamin Franklin', 'There never was a good knife made of bad steel.'),
(39, 1, 'Lao Tzu', 'The journey of a thousand miles begins with one step.'),
(40, 1, 'Babe Ruth', 'Yesterdays home runs don\'t win today\'s games.'),
(41, 1, 'Benjamin Disraeli', 'The secret of success is constancy to purpose.'),
(42, 1, 'Mahatma Gandhi', 'Strength does not come from physical capacity. It comes from an indomitable will.'),
(43, 1, 'Dave Weinbaum', 'The secret to a rich life is to have more beginnings than endings.'),
(44, 1, 'Louisa Alcott', 'I\'m not afraid of storms, for I\'m learning how to sail my ship.'),
(45, 1, 'Henry Ford', 'If you think you can, you can. And if you think you can\'t, you\'re right.'),
(46, 1, 'John De Paola', 'Slow down and everything you are chasing will come around and catch you.'),
(47, 1, 'Lily Tomlin', 'I always wanted to be somebody, but I should have been more specific.'),
(48, 1, 'Albert Einstein', 'Life is like riding a bicycle. To keep your balance you must keep moving.'),
(49, 1, 'Johann Wolfgang von Goethe', 'In the end we retain from our studies only that which we practically apply.'),
(50, 1, 'Calvin Coolidge', 'We cannot do everything at once, but we can do something at once.'),
(51, 1, 'Bruce Lee', 'If you spend too much time thinking about a thing, you\'ll never get it done.'),
(52, 1, 'Napoleon Hill', 'No man can succeed in a line of endeavor which he does not like.'),
(53, 1, 'Confucius', 'It does not matter how slowly you go as long as you do not stop.'),
(54, 1, 'Confucius', 'To study and not think is a waste. To think and not study is dangerous.'),
(55, 1, 'Napoleon Hill', 'If you cannot do great things, do small things in a great way.'),
(56, 1, 'Confucius', 'Choose a job you love, and you will never have to work a day in your life.'),
(57, 1, 'Anne Bronte', 'All our talents increase in the using, and the every faculty, both good and bad, strengthen by exercise.'),
(58, 1, 'Sai Baba', 'What is new in the world? Nothing. What is old in the world? Nothing. Everything has always been and will always be.'),
(59, 1, 'Alfred Sheinwold', 'Learn all you can from the mistakes of others. You won\'t have time to make them all yourself.'),
(60, 1, 'Vista Kelly', 'Snowflakes are one of natures most fragile things, but just look what they can do when they stick together.'),
(61, 1, 'Bruce Lee', 'Always be yourself, express yourself, have faith in yourself, do not go out and look for a successful personality and duplicate it.'),
(62, 1, 'Lou Holtz', 'You were not born a winner, and you were not born a loser. You are what you make yourself be.'),
(63, 1, 'Elizabeth Arden', 'I\'m not interested in age. People who tell me their age are silly. You\'re as old as you feel.'),
(64, 1, 'Pablo Picasso', 'He can who thinks he can, and he can\'t who thinks he can\'t. This is an inexorable, indisputable law.'),
(65, 1, 'Pablo Picasso', 'I am always doing that which I cannot do, in order that I may learn how to do it.'),
(66, 1, 'Buddha', 'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
