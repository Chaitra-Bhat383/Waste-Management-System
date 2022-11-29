SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gabbbbbage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `password` text NOT NULL,
  `ucat` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `acstatus` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `fullname`, `password`, `ucat`, `address`, `contact`, `acstatus`, `date`, `image`) VALUES
(7, 'adarsh', 'adarshnayak', 'adarsh', 'collector', 'adarsh', '9632541590', 'active', '2022-06-22', 'Screenshot_20210321-205607.png'),
(8, 'chaitra', 'chaitrabhat', 'chaitra', 'admin', 'chaitra', '8147497087', 'active', '2022-06-22', 'Chaitra Bhat.png');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(500) NOT NULL,
  `pay_type` varchar(500) NOT NULL,
  `client_type` varchar(500) NOT NULL,
  `gabage_type` varchar(500) NOT NULL,
  `location` int(11) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `names`, `pay_type`, `client_type`, `gabage_type`, `location`, `contact`, `status`, `date`) VALUES
(25, 'Naresh', 'yearly', 'individual', 'Bio', '1', '9075846954', 'pending', '2022-11-23'),
(26, 'Kiran', 'monthly', 'individual', 'Bio', '2', '7795702175', 'pending', '2022-11-22'),
(29, 'Charvi', 'monthly', 'individual', 'Hazardous', '1', '9837362522', 'pending', '2022-11-23'),
(30, 'Chaitanya', 'monthly', 'company', 'Non Hazardous', '1', '9441244545', 'pending', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `gabbage_type`
--

CREATE TABLE IF NOT EXISTS `gabbage_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `chargespm` text NOT NULL,
  `chargespd` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gabbage_type`
--

INSERT INTO `gabbage_type` (`id`, `name`, `chargespm`, `chargespd`) VALUES
(1, 'Non Hazardous', '500', '150000'),
(8, 'Hazardous', '150000', '30000'),
(9, 'Bio Waste', '1500', '3500');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collector` text NOT NULL,
  `clientname` text NOT NULL,
  `typeofwaste` text NOT NULL,
  `paytype` text NOT NULL,
  `amountpaid` text NOT NULL,
  `date` text NOT NULL,
  `recieptno` text NOT NULL,
  `reason` text NOT NULL,
  `balance` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `collector`, `clientname`, `typeofwaste`, `paytype`, `amountpaid`, `date`, `recieptno`, `reason`, `balance`) VALUES
(1, 'adarsh', 'Naresh', 'Bio', 'yearly', '45000', '2022-11-23', '45', 'payment for jan and feb', '120000'),
(2, 'adarsh', 'Kiran', 'Bio', 'monthly', '54000', '2022-11-23', '5455', 'PAY', '65550'),
(3, 'adarsh', 'Charvi', 'Hazardous', 'monthly', '15000', '2022-11-24', '1122', 'paid', '5000'),
(4, 'adarsh', 'Chaitanya', 'Non Hazardous', 'percollection', '20000', '2022-11-25', '12452', 'paid', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `wastecollect`
--

CREATE TABLE IF NOT EXISTS `wastecollect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collector` text NOT NULL,
  `clientname` text NOT NULL,
  `typeofwaste` text NOT NULL,
  `paytype` text NOT NULL,
  `amountpaid` text NOT NULL,
  `balance` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wastecollect`
--

INSERT INTO `wastecollect` (`id`, `collector`, `clientname`, `typeofwaste`, `paytype`, `amountpaid`, `balance`, `date`) VALUES
(1, 'adarsh', 'Naresh', 'Bio', 'monthly', '10000', '', '2022-11-23'),
(2, 'adarsh', 'Kiran', 'Bio', 'percollection', '50000', '', '2022-11-23'),
(3, 'adarsh', 'Charvi', 'Hazardous', 'monthly', '51000', '', '2022-11-23'),
(4, 'adarsh', 'Chaitanya', 'Non Hazardous', 'percollection', '78000', '12000', '2022-11-23'),
(5, 'adarsh', 'Basava', 'Bio', 'percollection', '85000', '52000', '2022-11-23'),
(6, 'adarsh', 'Ankitha', 'Hazardous', 'monthly', '10000', '2000', '2022-11-24'),
(7, 'adarsh', 'Rocky Bhai', 'Bio', 'percollection', '15000', '5000', '2022-11-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
