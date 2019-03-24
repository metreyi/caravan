-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 08:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caravan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'zxcvbnm90');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(200) NOT NULL,
  `Bookdate` date NOT NULL,
  `Booktime` time(6) NOT NULL,
  `seat` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Bookdate`, `Booktime`, `seat`) VALUES
(12, '2018-06-30', '20:30:00.000000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(200) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Appetizers'),
(2, 'SouthIndian'),
(3, 'Chinese'),
(4, 'Maincourse'),
(5, 'Nonvegetarian'),
(6, 'Beverages'),
(7, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Name`, `price`, `category`, `pic`) VALUES
(1, 'French Fries', '50.00', 'Appetizers', '2.jpg'),
(2, 'Burger', '50.00', 'Appetizers', 'images.jpg'),
(3, 'Cheese chilly toasts', '100.00', 'Appetizers', '6.jpg'),
(4, 'Mini cheesy hotdogs', '200.00', 'Appetizers', '99.jpg'),
(5, 'Potato Nuggets', '50.00', 'Appetizers', '98.jpg'),
(6, 'Honey chilly potato', '200.00', 'Appetizers', '5.jpg'),
(7, 'Chilly paneer', '250.00', 'Appetizers', '90.jpg'),
(8, 'Pasta alfredo', '200.00', 'Appetizers', '97.jpg'),
(9, 'Red Sauce Pasta', '150.00', 'Appetizers', '96.jpg'),
(10, 'Garlic Bread', '100.00', 'Appetizers', '10.jpg'),
(11, 'Cheese balls', '100.00', 'Appetizers', '95.jpg'),
(12, 'Paneer tikka', '200.00', 'Appetizers', '13.jpg'),
(13, 'Idli Sambar', '100.00', 'SouthIndian', 'i.jpg'),
(14, 'Sambar Vada', '100.00', 'SouthIndian', '1.jpg'),
(15, 'Masala Dosa', '150.00', 'SouthIndian', '8.jpg'),
(16, 'Paal payasam', '150.00', 'SouthIndian', '3.jpg'),
(17, 'Iddiappam', '150.00', 'SouthIndian', '94.jpg'),
(18, 'Unniappam', '150.00', 'SouthIndian', '17.jpg'),
(19, 'Uttappam', '100.00', 'SouthIndian', '92.jpg'),
(20, 'Puttu', '100.00', 'SouthIndian', '93.jpg'),
(21, 'Manchurian', '150.00', 'Chinese', '20.png'),
(22, 'Hakka noodles', '250.00', 'Chinese', '101.jpg'),
(23, 'Fried Rice', '200.00', 'Chinese', '102.jpg'),
(24, 'Schezwan Noodles', '200.00', 'Chinese', '103.jpg'),
(25, 'Chopsi', '150.00', 'Chinese', '104.jpg'),
(26, 'Momos', '150.00', 'Chinese', '105.jpg'),
(27, 'Broth', '150.00', 'Chinese', '106.jpg'),
(28, 'Spring Rolls', '200.00', 'Chinese', '27.jpg'),
(29, 'Amritsari Kulcha', '50.00', 'Maincourse', '31.jpg'),
(30, 'Chole Kulcha', '100.00', 'Maincourse', '32.jpg'),
(31, 'Naan', '40.00', 'Maincourse', '44.jpg'),
(32, 'Tandoori Roti', '20.00', 'Maincourse', '43.jpg'),
(33, 'Multigrain Roti', '20.00', 'Maincourse', '45.jpg'),
(34, 'Bejad roti', '30.00', 'Maincourse', '46.jpg'),
(35, 'Aloo parantha', '40.00', 'Maincourse', '49.jpg'),
(36, 'Paneer Parantha', '50.00', 'Maincourse', '48.jpg'),
(37, 'dal makhani', '75.00', 'Maincourse', '38.jpg'),
(38, 'Dal fry', '50.00', 'Maincourse', '40.jpg'),
(39, 'Kadhi', '50.00', 'Maincourse', '41.jpg'),
(40, 'Dal tadka', '50.00', 'Maincourse', '42.jpg'),
(41, 'Paav bhaji', '100.00', 'Maincourse', '34.jpg'),
(42, 'Missile pav', '100.00', 'Maincourse', '35.jpg'),
(43, 'Aloo tikki', '75.00', 'Maincourse', '30.jpg'),
(44, 'Chole bhature', '100.00', 'Maincourse', '50.jpg'),
(45, 'Dum Aloo', '75.00', 'Maincourse', '111.jpg'),
(46, 'Shahi Paneer', '100.00', 'Maincourse', '36.jpg'),
(47, 'kadai Paneer', '100.00', 'Maincourse', '37.jpg'),
(48, 'Chana masala', '75.00', 'Maincourse', '39.jpg'),
(49, 'Shahi gatte', '100.00', 'Maincourse', '51.jpg'),
(50, 'Panchkuta', '250.00', 'Maincourse', '52.jpg'),
(51, 'dal Baati', '300.00', 'Maincourse', '53.jpg'),
(52, 'Bajra roti with Garlic Chutney', '150.00', 'Maincourse', '54.jpg'),
(53, 'Chicken Tikka', '150.00', 'Nonvegetarian', '60.jpg'),
(54, 'Tangri kebabs', '200.00', 'Nonvegetarian', '61.jpg'),
(55, 'Hyderabadi Chicken Biriyani', '250.00', 'Nonvegetarian', '62.jpg'),
(56, 'Mutton Chops', '200.00', 'Nonvegetarian', '63.jpg'),
(57, 'Laal Maans', '350.00', 'Nonvegetarian', '64.jpg'),
(58, 'Grilled Chicken', '250.00', 'Nonvegetarian', '65.jpg'),
(59, 'Mutton Korma', '200.00', 'Nonvegetarian', '66.jpg'),
(60, 'Pina Colada Pork Chops', '200.00', 'Nonvegetarian', '67.jpg'),
(61, 'Mojito', '100.00', 'Beverages', '70.jpg'),
(62, 'Blue lagoon', '100.00', 'Beverages', '71.jpg'),
(63, 'Cherry Cocktail', '100.00', 'Beverages', '72.jpg'),
(64, 'Gabbie\'s Punch', '150.00', 'Beverages', '73.jpg'),
(65, 'Oreo Shake', '100.00', 'Beverages', '74.jpg'),
(66, 'Kitkat Shake', '100.00', 'Beverages', '75.jpg'),
(67, 'Brownie Shake', '100.00', 'Beverages', '76.jpg'),
(68, 'Nutella Shake', '200.00', 'Beverages', '77.jpg'),
(69, 'Gulab Jamun', '50.00', 'Desserts', '80.jpg'),
(70, 'Malpua', '100.00', 'Desserts', '82.jpg'),
(71, 'Kheer', '70.00', 'Desserts', '83.jpg'),
(72, 'Ras Malai', '70.00', 'Desserts', '84.jpg'),
(73, 'Raj Bhog', '70.00', 'Desserts', '85.jpg'),
(74, 'Rabdi Ghevar', '100.00', 'Desserts', '86.jpg'),
(75, 'Rabdi Kulfi', '50.00', 'Desserts', '87.jpg'),
(76, 'Daal halwa', '100.00', 'Desserts', '88.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Phone` int(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Firstname`, `Lastname`, `Phone`, `Mail`, `Password`) VALUES
(6, 'Ridhima', 'Dadhich', 1234567890, 'dadhichriddhima@gmail.com', '14968ce7f2bca4c8254109f1663ea171'),
(7, 'Cheena', 'Garg', 2147483647, 'cheenagarg@gmail.com', '14968ce7f2bca4c8254109f1663ea171'),
(8, 'indu', 'sharma', 678906789, 'hahidw@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(10, 'Metreyi', 'Vyas', 2147483647, 'metreyi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
