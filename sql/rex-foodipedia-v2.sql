-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2021 at 01:30 AM
-- Server version: 10.2.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rex-foodipedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(3) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `add_info` text DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `email`, `user_address`, `label`, `add_info`, `user_id`) VALUES
(1, 'xavierkhew00@gmail.com', '123, jalan avanue, 45000 Klang senalog rmalaysia', 'Home', 'addtional info', NULL),
(2, 'xavierkhew00@gmail.com', '111, jalan avanue, 45000 Klang senalog rmalaysia', 'Office', 'addtional info', NULL),
(7, 'hailat@gmail.com', '12, jalan hell, persiaran indera, eee', 'Office', NULL, NULL),
(8, 'hailat@gmail.com', '13, jalan hell, persiaran indera, kuala uuu', 'Home', NULL, NULL),
(9, 'rk21@gmail.com', 'kampung dalam dalam', 'Office', NULL, NULL),
(10, 'rk21@gmail.com', 'kampung luar luar', 'Home', NULL, NULL),
(11, 'bbb@gmail.com', 'sd', 'Office', NULL, NULL),
(12, 'bbb@gmail.com', 'gg', 'Home', NULL, NULL),
(13, '123@gmail.com', '20, persiaran pusat bandar puchong 5200, selangor', 'Office', NULL, NULL),
(14, '123@gmail.com', '23, persiaran indera 5200, cyberjaya', 'Home', NULL, NULL),
(15, 'holyboba00@gmail.com', '123, jalan avanue, 45000 Klang senalog rmalaysia', 'Home', 'addtional info', NULL),
(16, 'holyboba00@gmail.com', '123, jalan avanue, 45000 Klang senalog rmalaysia', 'Office', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hashed` text NOT NULL,
  `admin_isDelete` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`id`, `fname`, `staff_id`, `username`, `pwd`, `email`, `hashed`, `admin_isDelete`) VALUES
(1, 'test', '123', '123', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147202cb962ac59075b964b07152d234b70', '123', '202cb962ac59075b964b07152d234b70', 0),
(3, '12333333', 'daw', 'awd11', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy7514931471f73402c644002a7ea3c9532e8ba4139', 'daw@mail', '202cb962ac59075b964b07152d234b66', 0),
(4, 'adman2', 'adman1', 'adman', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147202cb962ac59075b964b07152d234b70', 'adman@mail.com', '202cb962ac59075b964b07152d234b66', 0),
(5, 'tester', 'tester', 'tester', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147f5d1278e8109edd94e1e4197e04873b9', 'test@mail.com', '202cb962ac59075b964b07152d234b66', 0),
(6, '111', '111', '111', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147698d51a19d8a121ce581499d7b701668', '111', '202cb962ac59075b964b07152d234b66', 0),
(7, '555', '555', '555', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy75149314715de21c670ae7c3f6f3f1f37029303c9', '555@mail.com', '15de21c670ae7c3f6f3f1f37029303c9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `id` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `card_num` varchar(255) DEFAULT NULL,
  `exp_date` varchar(10) DEFAULT NULL,
  `name_on_card` varchar(255) DEFAULT NULL,
  `cvv` varchar(5) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`id`, `email`, `card_type`, `card_num`, `exp_date`, `name_on_card`, `cvv`, `user_id`) VALUES
(1, 'xavierkhew00@gmail.com', 'MasterCard', '5555444466661111', '12/25', 'xavier k', '111', NULL),
(2, 'xavierkhew00@gmail.com', 'Amex', '1234432112344321', '08/21', 'XavierKhew', '999', NULL),
(3, 'xavierkhew00@gmail.com', 'MasterCard', '5555444466661111', '12/25', 'xavier\r\n', '111', NULL),
(11, 'holyboba0@gmail.com', 'MasterCard', '5555444466661111', '12/25', 'xavier\r\n', '111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(3) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `dish_name` varchar(255) DEFAULT NULL,
  `dish_price` varchar(255) DEFAULT NULL,
  `dish_total` varchar(7) NOT NULL,
  `dish_id` varchar(255) DEFAULT NULL,
  `dish_qty` int(2) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `cloudinary_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `date`, `dish_name`, `dish_price`, `dish_total`, `dish_id`, `dish_qty`, `user_id`, `cloudinary_link`) VALUES
(123, 'hailat@gmail.com', NULL, 'kock', '77', '154', NULL, 2, NULL, ' http://res.cloudinary.com/rexfoodipediafyp/image/upload/sfj2qlz3t7i58pulsomw'),
(124, 'hailat@gmail.com', NULL, 'bittttte', '88', '88', NULL, 1, NULL, ' http://res.cloudinary.com/rexfoodipediafyp/image/upload/lxdnhg4xni8oqkrayf4r'),
(127, 'hailat@gmail.com', NULL, 'okkayy fried rice', '56', '56', NULL, 1, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/fpmepnvc63ztv9oiooa1'),
(131, 'hailat@gmail.com', NULL, 'testtt img', '99', '99', NULL, 1, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/w0dtdnmjggiq5jayzc0f'),
(137, 'hailat@gmail.com', NULL, 'okokokmou', '77', '77', NULL, 1, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/mynegokwknz8n7yi8zha'),
(138, 'hailat@gmail.com', NULL, '123', '123', '123', NULL, 1, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/wk9iesbmnhddhbwb2ont'),
(141, 'hailat@gmail.com', NULL, 'kock', '77', '77', NULL, 1, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/sfj2qlz3t7i58pulsomw'),
(158, 'limsusan311@gmail.com', NULL, 'Vietnam Salad', '20', '20', NULL, 1, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/dpul4b6ek9eqdh7lwegf'),
(175, '', NULL, '123', '11', '66', NULL, 6, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/iydospytlhhnxds9nqty');

-- --------------------------------------------------------

--
-- Table structure for table `cart_test`
--

CREATE TABLE `cart_test` (
  `id` int(3) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `dish_name` varchar(255) DEFAULT NULL,
  `dish_price` varchar(255) DEFAULT NULL,
  `dish_id` varchar(255) DEFAULT NULL,
  `dish_qty` int(2) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `rice` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cloudinary_test`
--

CREATE TABLE `cloudinary_test` (
  `id` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `cloudinary_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cloudinary_test`
--

INSERT INTO `cloudinary_test` (`id`, `username`, `cloudinary_link`) VALUES
(5, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/pgt24s1ej1gr0cuvexoh'),
(12, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/mex4nokdva0buuwdondb'),
(13, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/cbsog8z0cf50etem6h1b'),
(32, '', 'https://res.cloudinary.com/rexfoodipediafyp/image/upload/qaay1phao0qnyzx54zxu'),
(35, '', 'https://res.cloudinary.com/rexfoodipediafyp/image/upload/wawcrp3tnweoegwcnjtb'),
(52, '', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/f7czsdtviee2eztlxp3b'),
(53, '', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/cforwwtffcueznc4zmb4'),
(54, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/syqtzani6ab0gexs7dmx'),
(55, NULL, 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/rktg4ewb5xf6oegicqys'),
(56, NULL, 'https://res.cloudinary.com/rexfoodipediafyp/image/upload/ay1zijwk1fkpmdsnqsie');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `dish_name` varchar(255) DEFAULT NULL,
  `dish_id` varchar(20) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `cloudinary_link` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `stock_qty` int(5) DEFAULT NULL,
  `deleted_menu` int(2) NOT NULL DEFAULT 1,
  `permissible` text DEFAULT NULL,
  `cuisine` text DEFAULT NULL,
  `preparationTime` int(255) DEFAULT NULL,
  `staff_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `username`, `dish_name`, `dish_id`, `price`, `cloudinary_link`, `description`, `stock_qty`, `deleted_menu`, `permissible`, `cuisine`, `preparationTime`, `staff_id`) VALUES
(71, '', 'Thai Boat Noodles', 'A001', '5.6', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/wx1jl7bbwy3q9opr8egf', ' \r\n                                         \r\n                                         \r\n                                         \r\n                                         \r\n                                         \r\n                                         \r\n                                        Boat noodles or kuaitiao ruea is a Thai style noodle dish, which has a strong flavor. It contains both pork and beef. \r\n                                     \r\n                                     \r\n                                     \r\n                                     \r\n                                     \r\n                                     \r\n                                    ', 23, 1, 'Yes', 'Thailand', 5, NULL),
(72, '', 'Bak Kut Teh', 'A002', '16', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/o4stixwwnogx7glr6c8b', 'Bak kut teh, the name literally translates from the Hokkien dialect as \"meat bone tea\", and at its simplest, consists of meaty pork ribs & herbal soup', 16, 1, 'No', 'Malaysian', 15, NULL),
(73, '', 'Crispy Fried Chicken', 'A003', '13.5', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/dpqxqpd9u69yjyurag7z', ' \r\n                                        Southern fried chicken, also known simply as fried chicken, is a dish consisting of chicken pieces that have been coated with seasoned flour. \r\n                                    ', 50, 1, 'Yes', 'Malaysian', 20, NULL),
(74, '', 'Wokhey Fried Rice', 'A004', '5.6', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/hclhdofza6ui3um22bev', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually mixed with other ingredients, such as egg, meat..', 50, 1, 'Yes', 'Malaysian', 10, NULL),
(75, '', 'Fried Maggie Mee', 'A005', '4.5', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/k7xbuq8nhy7dt49gpxko', 'Mee Goreng is one of the most popular fried noodle dishes in Malaysia and Indonesia. This Indian Mamak Mee Goreng recipe is authentic and easy', 50, 1, 'Yes', 'Malaysian', 10, NULL),
(76, '', 'Japanese Sushi', 'A006', '3.6', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/eyjqrhnlz65ghjil0o9y', ' \r\n                                        Sushi is a traditional Japanese dish of prepared vinegared rice, usually with some sugar and salt, accompanying a variety of ingredients \r\n                                    ', 35, 1, 'Yes', 'Japanese', 5, NULL),
(77, '', 'Vietnam Salad', 'A007', '20', 'http://res.cloudinary.com/rexfoodipediafyp/image/upload/dpul4b6ek9eqdh7lwegf', 'This refreshing summer salad recipe combines all of the flavours of Vietnam and is perfect with grilled chicken.', 15, 1, 'Yes', 'Malaysian', 10, NULL),
(78, '123', 'Boba', 'G1002', '6.00', 'https://res.cloudinary.com/rexfoodipediafyp/image/upload/gxyf5rmh5vtg6qpnhpvw', 'Bubble tea is a tea-based drink. Originating in Taichung, Taiwan in the early 1980s, it includes chewy tapioca balls or a wide range of other toppings                                    \r\n                                    ', 2, 0, 'Yes', 'Malaysian', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_rec`
--

CREATE TABLE `order_rec` (
  `id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `receipt_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `dish_name` varchar(255) DEFAULT NULL,
  `dish_price` varchar(255) DEFAULT NULL,
  `dish_id` varchar(255) DEFAULT NULL,
  `dish_qty` int(2) NOT NULL DEFAULT 0,
  `order_status` int(2) NOT NULL DEFAULT 0,
  `delivery_type` int(2) NOT NULL DEFAULT 0,
  `delivery_status` int(2) NOT NULL DEFAULT 0,
  `menu_id` int(20) DEFAULT NULL,
  `cloudinary_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_rec`
--

INSERT INTO `order_rec` (`id`, `user_id`, `email`, `receipt_id`, `date`, `dish_name`, `dish_price`, `dish_id`, `dish_qty`, `order_status`, `delivery_type`, `delivery_status`, `menu_id`, `cloudinary_link`) VALUES
(14, NULL, 'xavierkhew00@gmail.com', '0000037', '2021-03-14 20:07:44', 'Thai Boat Noodle', '5.6', '', 3, 0, 0, 0, NULL, NULL),
(15, NULL, 'xavierkhew00@gmail.com', '0000037', '2021-03-14 20:07:44', 'Wokhey Fried Rice', '5.6', '', 2, 0, 0, 0, NULL, NULL),
(16, NULL, 'xavierkhew00@gmail.com', '0000037', '2021-03-14 20:07:44', 'Crispy Fried Chicken', '13.5', '', 1, 0, 0, 0, NULL, NULL),
(17, NULL, 'xavierkhew00@gmail.com', '0000037', '2021-03-15 20:07:44', 'Crispy Fried Chicken', '13.5', '', 1, 0, 0, 0, NULL, NULL),
(18, NULL, 'xavierkhew00@gmail.com', '0000039', '2021-03-15 00:58:38', 'Bak Kut Teh', '16', '', 1, 0, 0, 0, NULL, NULL),
(19, NULL, 'xavierkhew00@gmail.com', '0000039', '2021-03-15 00:58:38', 'Fried Maggie Mee', '4.5', '', 1, 0, 0, 0, NULL, NULL),
(20, NULL, 'xavierkhew00@gmail.com', '0000040', '2021-03-15 00:59:43', 'Thai Boat Noodles', '5.6', '', 1, 0, 0, 0, NULL, NULL),
(21, NULL, 'xavierkhew00@gmail.com', '0000042', '2021-03-15 01:36:10', '123', '11', '', 1, 0, 0, 0, NULL, NULL),
(22, NULL, 'xavierkhew00@gmail.com', '0000042', '2021-03-15 01:36:10', 'Vietnam Salad', '20', '', 3, 0, 0, 0, NULL, NULL),
(23, NULL, 'xavierkhew00@gmail.com', '0000044', '2021-03-15 01:48:01', 'Wokhey Fried Rice', '5.6', '', 1, 0, 0, 0, NULL, NULL),
(24, NULL, 'xavierkhew00@gmail.com', '0000044', '2021-03-15 01:48:01', 'Crispy Fried Chicken', '13.5', '', 2, 0, 0, 0, NULL, NULL),
(25, NULL, 'xavierkhew00@gmail.com', '0000046', '2021-03-15 01:50:44', '123', '11', '', 4, 0, 0, 0, NULL, NULL),
(26, NULL, 'rk21@gmail.com', '0000046', '2021-03-15 01:50:44', 'Japanese Sushi', '3.6', '', 5, 0, 0, 0, NULL, NULL),
(27, NULL, '123@gmail.com', '0000049', '2021-03-15 02:02:38', 'Thai Boat Noodle', '5.6', '', 3, 0, 0, 0, NULL, NULL),
(28, NULL, '123@gmail.com', '0000049', '2021-03-15 02:02:38', 'Wokhey Fried Rice', '5.6', '', 2, 0, 0, 0, NULL, NULL),
(29, NULL, '123@gmail.com', '0000049', '2021-03-15 02:02:38', 'Crispy Fried Chicken', '13.5', '', 1, 0, 0, 0, NULL, NULL),
(30, NULL, '123@gmail.com', '0000049', '2021-03-15 02:02:38', 'Thai Boat Noodle', '5.6', '', 1, 0, 0, 0, NULL, NULL),
(31, NULL, '123@gmail.com', '0000049', '2021-03-15 02:02:38', 'Crispy Fried Chicken', '13.5', '', 3, 0, 0, 0, NULL, NULL),
(32, NULL, '123@gmail.com', '0000049', '2021-03-15 02:02:38', 'Fried Maggie Mee', '4.5', '', 1, 0, 0, 0, NULL, NULL),
(33, NULL, 'holyboba00@gmail.com', '0000050', '2021-03-15 02:04:50', 'Vietnam Salad', '20.54', '', 1, 0, 0, 0, NULL, NULL),
(34, NULL, '123@gmail.com', '0000051', '2021-03-15 02:09:03', 'Vietnam Salad', '20', '', 2, 0, 0, 0, NULL, NULL),
(35, NULL, '123@gmail.com', '0000051', '2021-03-15 02:09:03', '123', '11', '', 6, 0, 0, 0, NULL, NULL),
(36, NULL, '123@gmail.com', '0000052', '2021-03-15 02:13:52', 'Japanese Sushi', '3.6', '', 1, 0, 0, 0, NULL, NULL),
(37, NULL, 'holyboba00@gmail.com', '0000053', '2021-03-15 03:08:50', 'Vietnam Salad', '20', '', 1, 0, 0, 0, NULL, NULL),
(38, NULL, 'holyboba00@gmail.com', '0000054', '2021-03-15 03:17:24', 'Vietnam Salad', '20.56', '', 1, 0, 0, 0, NULL, NULL),
(39, NULL, 'holyboba00@gmail.com', '0000055', '2021-03-15 03:20:08', 'Vietnam Salad', '20', '', 1, 0, 0, 0, NULL, NULL),
(40, NULL, 'rk21@gmail.com', '0000056', '2021-03-15 03:20:08', '123', '11', '', 1, 0, 0, 0, NULL, NULL),
(41, NULL, 'rk21@gmail.com', '0000056', '2021-03-15 03:20:08', 'Boba', '6.00', '', 3, 0, 0, 0, NULL, NULL),
(42, NULL, 'rk21@gmail.com', '0000056', '2021-03-15 03:20:08', 'Wokhey Fried Rice', '5.6', '', 1, 0, 0, 0, NULL, NULL),
(43, NULL, 'rk21@gmail.com', '0000058', '2021-03-15 03:21:13', 'Wokhey Fried Rice', '5.6', '', 1, 0, 0, 0, NULL, NULL),
(44, NULL, 'holyboba00@gmail.com', '0000059', '2021-03-15 03:21:26', 'Vietnam Salad', '20.56', '', 1, 0, 0, 0, NULL, NULL),
(45, NULL, 'xavierkhew00@gmail.com', '0000061', '2021-03-15 03:25:48', 'Vietnam Salad', '20', '', 1, 0, 0, 0, NULL, NULL),
(46, NULL, 'xavierkhew00@gmail.com', '0000062', '2021-03-15 03:37:49', 'Thai Boat Noodles', '5.6', '', 1, 0, 0, 0, NULL, NULL),
(47, NULL, 'xavierkhew00@gmail.com', '0000063', '2021-03-15 03:38:41', 'Crispy Fried Chicken', '13.5', '', 1, 0, 0, 0, NULL, NULL),
(48, NULL, 'holyboba00@gmail.com', '0000064', '2021-03-15 03:40:28', 'Vietnam Salad', '20', '', 1, 0, 0, 0, NULL, NULL),
(49, NULL, 'xavierkhew00@gmail.com', '0000065', '2021-03-15 03:46:30', 'Crispy Fried Chicken', '13.5', '', 2, 0, 0, 0, NULL, NULL),
(50, NULL, 'rk21@gmail.com', '0000066', '2021-03-15 03:47:55', 'Fried Maggie Mee', '4.5', '', 1, 0, 0, 0, NULL, NULL),
(51, NULL, 'xavierkhew00@gmail.com', '0000068', '2021-03-15 05:18:31', '123', '123', '', 1, 0, 0, 0, NULL, NULL),
(52, NULL, 'xavierkhew00@gmail.com', '0000070', '2021-03-15 05:21:54', '123', '123', '', 1, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resetpwd`
--

CREATE TABLE `resetpwd` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpwd`
--

INSERT INTO `resetpwd` (`id`, `userid`, `email`, `code`) VALUES
(9, NULL, 'xavierkhew00@gmail.com', '1604cf04e0249e');

-- --------------------------------------------------------

--
-- Table structure for table `staff_acc`
--

CREATE TABLE `staff_acc` (
  `staffid` int(5) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hashed` text NOT NULL,
  `staff_isDelete` int(2) NOT NULL DEFAULT 0,
  `admin_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_acc`
--

INSERT INTO `staff_acc` (`staffid`, `fname`, `staff_id`, `username`, `pwd`, `email`, `hashed`, `staff_isDelete`, `admin_id`) VALUES
(1, 'REX TEST 1', '001', 'admin', 'admin', '123', '', 1, NULL),
(2, 'test', '123', 'admin', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy75149314721232f297a57a5a743894a0e4a801fc3', NULL, '', 0, NULL),
(3, '123', '123', '123', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147202cb962ac59075b964b07152d234b70', NULL, '202cb962ac59075b964b07152d234b70', 0, NULL),
(4, 'REX TEST 1', '001', 'admin', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147189342e2ed9d23bb9a02ecbf8ed06762', '123', '', 1, NULL),
(5, 'test', '132123', 'test123', 'abcd', 'heeellooo@gmail.com', '', 0, NULL),
(6, 'test', '132123', 'test123', 'abcd', 'heeellooo@gmail.com', '', 0, NULL),
(7, 'Rey', '1325', 'rk21', '123456', 'rk@gmail.com', '', 0, NULL),
(8, 'ABCD', '1314', 'ABCD1234', '123456', 'ABCD@gmail.com', '', 0, NULL),
(9, 'Tester JAck', '8888', '222', '222', 'staff@dummy.com', '', 0, NULL),
(10, '000', '000', '000', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy751493147c6f057b86584942e415435ffb1fa93d4', '000', '', 0, NULL),
(12, '66', '66', '66', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy7514931473295c76acbf4caaed33c36b1b5fc2cb1', '66@mail.com', '3295c76acbf4caaed33c36b1b5fc2cb1', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', ''),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'admin', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy75149314721232f297a57a5a743894a0e4a801fc3'),
(7, 'admin', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy75149314721232f297a57a5a743894a0e4a801fc3'),
(8, 'admin', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy75149314721232f297a57a5a743894a0e4a801fc3'),
(9, 'admin', '!2y$10*GJIZkOgbCNwTH5ji^JZ0mGev36Cj&2EKuRdLp#HP.crF.VQy75149314721232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactornot` varchar(255) DEFAULT NULL,
  `send_type` varchar(255) DEFAULT NULL,
  `receipt_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subtotal` varchar(550) NOT NULL DEFAULT '0',
  `discount` varchar(255) DEFAULT NULL,
  `voucher` int(2) DEFAULT NULL,
  `voucher_code` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `payment_method` int(2) DEFAULT NULL,
  `payment_time` varchar(255) DEFAULT NULL,
  `change_time` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `email`, `contactornot`, `send_type`, `receipt_id`, `date`, `address`, `subtotal`, `discount`, `voucher`, `voucher_code`, `total`, `payment_method`, `payment_time`, `change_time`, `user_id`) VALUES
(1, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000001', '2021-03-13 02:02:32', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-13 02:02:32', NULL, NULL),
(2, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000002', '2021-03-13 02:02:48', NULL, '0.00', NULL, NULL, NULL, '0.00', 2, '2021-03-13 02:02:48', NULL, NULL),
(3, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000003', '2021-03-13 02:11:52', NULL, '13.00', NULL, NULL, NULL, '13.00', 0, '2021-03-13 02:11:52', NULL, NULL),
(4, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000004', '2021-03-13 02:28:46', '', '13', NULL, NULL, NULL, '13', 0, '2021-03-13 02:28:46', NULL, NULL),
(5, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000005', '2021-03-13 02:29:07', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 02:29:07', NULL, NULL),
(6, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000006', '2021-03-13 02:30:18', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 02:30:18', NULL, NULL),
(7, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000007', '2021-03-13 02:37:04', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 02:37:04', NULL, NULL),
(8, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000008', '2021-03-13 02:37:11', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 02:37:11', NULL, NULL),
(9, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000009', '2021-02-07 03:03:02', '', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:03:02', NULL, NULL),
(10, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000010', '2021-03-13 03:04:23', '', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:04:23', NULL, NULL),
(11, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000011', '2021-03-13 03:37:07', '123, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:37:07', NULL, NULL),
(12, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000012', '2021-03-13 03:37:30', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 03:37:30', NULL, NULL),
(13, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000013', '2021-03-13 03:40:20', '123, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:40:20', NULL, NULL),
(14, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000014', '2021-03-13 03:40:32', '123, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:40:32', NULL, NULL),
(15, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000015', '2021-03-13 03:47:30', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:47:30', NULL, NULL),
(16, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000016', '2021-03-13 03:48:09', '123, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 03:48:09', NULL, NULL),
(17, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000017', '2021-03-13 03:48:43', '123, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:48:43', NULL, NULL),
(18, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000018', '2021-03-13 03:50:13', '', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 03:50:13', NULL, NULL),
(19, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000019', '2021-03-13 03:50:19', '111, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 2, '2021-03-13 03:50:19', NULL, NULL),
(20, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000020', '2021-03-13 03:50:35', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-13 03:50:35', NULL, NULL),
(21, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000021', '2021-03-13 03:51:16', '123, jalan avanue, 45000 Klang senalog rmalaysia', '22.5', NULL, NULL, NULL, '22.5', 0, '2021-03-13 03:51:16', NULL, NULL),
(22, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000022', '2021-03-13 04:06:15', '123, jalan avanue, 45000 Klang senalog rmalaysia', '0', NULL, NULL, NULL, '0', 0, '2021-03-13 04:06:15', NULL, NULL),
(23, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000023', '2021-03-13 04:06:31', '123, jalan avanue, 45000 Klang senalog rmalaysia', '22.5', NULL, NULL, NULL, '22.5', 0, '2021-03-13 04:06:31', NULL, NULL),
(24, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000024', '2021-03-13 13:53:56', NULL, '0.00', NULL, NULL, NULL, '0.00', 2, '2021-03-13 13:53:56', NULL, NULL),
(25, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000025', '2021-03-13 14:14:03', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-13 14:14:03', NULL, NULL),
(26, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000026', '2021-03-14 14:20:43', NULL, '156.00', NULL, NULL, NULL, '156.00', 2, '2021-03-14 14:20:43', NULL, NULL),
(27, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000027', '2021-03-14 16:30:41', NULL, '176.00', NULL, NULL, NULL, '176.00', 0, '2021-03-14 16:30:41', NULL, NULL),
(28, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000028', '2021-03-14 17:37:14', NULL, '720.00', NULL, NULL, NULL, '720.00', 0, '2021-03-14 17:37:14', NULL, NULL),
(29, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000029', '2021-03-14 17:37:26', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-14 17:37:26', NULL, NULL),
(30, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000030', '2021-03-14 17:37:40', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-14 17:37:40', NULL, NULL),
(31, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000031', '2021-03-14 17:38:31', NULL, '222.00', NULL, NULL, NULL, '222.00', 0, '2021-03-14 17:38:31', NULL, NULL),
(32, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000032', '2021-03-14 18:59:37', NULL, '176.00', NULL, NULL, NULL, '176.00', 0, '2021-03-14 18:59:37', NULL, NULL),
(33, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000033', '2021-03-14 19:00:34', NULL, '555.00', NULL, NULL, NULL, '555.00', 0, '2021-03-14 19:00:34', NULL, NULL),
(34, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000034', '2021-03-14 19:05:15', NULL, '165.00', NULL, NULL, NULL, '165.00', 0, '2021-03-14 19:05:15', NULL, NULL),
(35, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000035', '2021-03-14 20:04:11', NULL, '41.50', NULL, NULL, NULL, '41.50', 0, '2021-03-14 20:04:11', NULL, NULL),
(36, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000036', '2021-03-14 20:05:34', NULL, '41.50', NULL, NULL, NULL, '41.50', 0, '2021-03-14 20:05:34', NULL, NULL),
(37, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000037', '2021-03-14 20:07:44', NULL, '41.50', NULL, NULL, NULL, '41.50', 0, '2021-03-14 20:07:44', NULL, NULL),
(38, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000038', '2021-03-15 00:55:39', NULL, '47.10', NULL, NULL, NULL, '47.10', 0, '2021-03-15 00:55:39', NULL, NULL),
(39, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Delivery', '0000039', '2021-03-15 00:58:38', '111, jalan avanue, 45000 Klang senalog rmalaysia', '20.5', NULL, NULL, NULL, '20.5', 0, '2021-03-15 00:58:38', NULL, NULL),
(40, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000040', '2021-03-15 00:59:43', NULL, '5.60', NULL, NULL, NULL, '5.60', 0, '2021-03-15 00:59:43', NULL, NULL),
(41, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000041', '2021-03-15 01:34:47', NULL, '47.10', NULL, NULL, NULL, '47.10', 0, '2021-03-15 01:34:47', NULL, NULL),
(42, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000042', '2021-03-15 01:36:10', NULL, '71.00', NULL, NULL, NULL, '71.00', 0, '2021-03-15 01:36:10', NULL, NULL),
(43, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000043', '2021-03-15 01:47:25', NULL, '11.00', NULL, NULL, NULL, '11.00', 0, '2021-03-15 01:47:25', NULL, NULL),
(44, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000044', '2021-03-15 01:48:01', NULL, '32.60', NULL, NULL, NULL, '32.60', 0, '2021-03-15 01:48:01', NULL, NULL),
(45, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000045', '2021-03-15 01:50:10', NULL, '29.00', NULL, NULL, NULL, '29.00', 0, '2021-03-15 01:50:10', NULL, NULL),
(46, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000046', '2021-03-15 01:50:44', NULL, '62.00', NULL, NULL, NULL, '62.00', 0, '2021-03-15 01:50:44', NULL, NULL),
(47, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000047', '2021-03-15 01:56:15', NULL, '87.60', NULL, NULL, NULL, '87.60', 0, '2021-03-15 01:56:15', NULL, NULL),
(48, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000048', '2021-03-15 01:59:10', NULL, '87.60', NULL, NULL, NULL, '87.60', 0, '2021-03-15 01:59:10', NULL, NULL),
(49, '123@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000049', '2021-03-15 02:02:38', NULL, '92.10', NULL, NULL, NULL, '92.10', 0, '2021-03-15 02:02:38', NULL, NULL),
(50, 'holyboba00@gmail.com', 'Contactless', 'Self Pick Up', '0000050', '2021-03-15 02:04:50', NULL, '20.54', NULL, NULL, NULL, '20.54', 2, '2021-03-15 02:04:50', NULL, NULL),
(51, '123@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000051', '2021-03-15 02:09:03', NULL, '106.00', NULL, NULL, NULL, '106.00', 0, '2021-03-15 02:09:03', NULL, NULL),
(52, '123@gmail.com', 'Contactless', 'Delivery', '0000052', '2021-03-15 02:13:52', 'rrrrrrrrr', '3.6', NULL, NULL, NULL, '3.6', 0, '2021-03-15 02:13:52', NULL, NULL),
(53, 'holyboba00@gmail.com', 'Contactless', 'Self Pick Up', '0000053', '2021-03-15 03:08:50', NULL, '20.00', NULL, NULL, NULL, '20.00', 2, '2021-03-15 03:08:50', NULL, NULL),
(54, 'holyboba00@gmail.com', 'Contactless', 'Self Pick Up', '0000054', '2021-03-15 03:17:24', NULL, '20.56', NULL, NULL, NULL, '20.56', 2, '2021-03-15 03:17:24', NULL, NULL),
(55, 'holyboba00@gmail.com', 'Contactless', 'Self Pick Up', '0000055', '2021-03-15 03:20:08', NULL, '20.00', NULL, NULL, NULL, '20.00', 2, '2021-03-15 03:20:08', NULL, NULL),
(56, 'rk21@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000056', '2021-03-15 03:20:08', NULL, '34.60', NULL, NULL, NULL, '34.60', 0, '2021-03-15 03:20:08', NULL, NULL),
(57, 'rk21@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000057', '2021-03-15 03:20:47', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-15 03:20:47', NULL, NULL),
(58, 'rk21@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000058', '2021-03-15 03:21:13', NULL, '5.60', NULL, NULL, NULL, '5.60', 0, '2021-03-15 03:21:13', NULL, NULL),
(59, 'holyboba00@gmail.com', 'Contactless', 'Self Pick Up', '0000059', '2021-03-15 03:21:26', NULL, '20.56', NULL, NULL, NULL, '20.56', 2, '2021-03-15 03:21:26', NULL, NULL),
(60, 'xavierkhew00@gmail.com', 'Non-Contactless', 'Self Pick Up', '0000060', '2021-03-15 03:25:08', NULL, '0.00', NULL, NULL, NULL, '0.00', 2, '2021-03-15 03:25:08', NULL, NULL),
(61, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000061', '2021-03-15 03:25:48', NULL, '20.00', NULL, NULL, NULL, '20.00', 2, '2021-03-15 03:25:48', NULL, NULL),
(62, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000062', '2021-03-15 03:37:49', NULL, '5.60', NULL, NULL, NULL, '5.60', 2, '2021-03-15 03:37:49', NULL, NULL),
(63, 'xavierkhew00@gmail.com', 'Contactless', 'Delivery', '0000063', '2021-03-15 03:38:41', '123, jalan avanue, 45000 Klang senalog rmalaysia', '13.5', NULL, NULL, NULL, '13.5', 0, '2021-03-15 03:38:41', NULL, NULL),
(64, 'holyboba00@gmail.com', 'Contactless', 'Self Pick Up', '0000064', '2021-03-15 03:40:28', NULL, '20.00', NULL, NULL, NULL, '20.00', 2, '2021-03-15 03:40:28', NULL, NULL),
(65, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000065', '2021-03-15 03:46:30', NULL, '27.00', NULL, NULL, NULL, '27.00', 0, '2021-03-15 03:46:30', NULL, NULL),
(66, 'rk21@gmail.com', 'Contactless', 'Self Pick Up', '0000066', '2021-03-15 03:47:55', NULL, '4.50', NULL, NULL, NULL, '4.50', 2, '2021-03-15 03:47:55', NULL, NULL),
(67, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000067', '2021-03-15 05:17:31', NULL, '0.00', NULL, NULL, NULL, '0.00', 2, '2021-03-15 05:17:31', NULL, NULL),
(68, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000068', '2021-03-15 05:18:31', NULL, '123.00', NULL, NULL, NULL, '123.00', 0, '2021-03-15 05:18:31', NULL, NULL),
(69, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000069', '2021-03-15 05:21:24', NULL, '0.00', NULL, NULL, NULL, '0.00', 0, '2021-03-15 05:21:24', NULL, NULL),
(70, 'xavierkhew00@gmail.com', 'Contactless', 'Self Pick Up', '0000070', '2021-03-15 05:21:54', NULL, '123.00', NULL, NULL, NULL, '123.00', 0, '2021-03-15 05:21:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `google_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `email`, `profile_image`) VALUES
(1, '105373187621159999522', 'KHEW XAVIER ETHAN', '1181202757@student.mmu.edu.my', 'https://lh3.googleusercontent.com/a-/AOh14GhPxu76qgd_9kRUa43m_Rj3hw9JPlLD4O-BRVMFsQ=s96-c'),
(2, '116215687932817182395', 'Xavier Khew', 'xavierkhew00@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14Ggpj-Oy3lOH9-RILtPIHnmboUnw0qwVtyVBvBLneg=s96-c');

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `id` int(11) NOT NULL,
  `google_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lpoints` int(11) DEFAULT 0,
  `lpoints_valid` int(11) DEFAULT NULL,
  `lpoints_status` int(2) DEFAULT NULL,
  `verified` int(2) NOT NULL DEFAULT 0,
  `status` int(2) DEFAULT NULL,
  `category` int(2) DEFAULT NULL,
  `vkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`id`, `google_id`, `name`, `email`, `profile_image`, `phone_number`, `password`, `lpoints`, `lpoints_valid`, `lpoints_status`, `verified`, `status`, `category`, `vkey`) VALUES
(11, '116215687932817182395', 'Xavier Khew', 'xavierkhew00@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14Ggpj-Oy3lOH9-RILtPIHnmboUnw0qwVtyVBvBLneg=s96-c', '0102311245', NULL, 408, 4, 1, 1, 1, 3, NULL),
(49, '108986063275618927736', 'ELTON WONG CHUN MENG', '1181203056@student.mmu.edu.my', 'https://lh3.googleusercontent.com/a-/AOh14Gi_yLlKfBBYd7cfkbJRUeB61q0aKW-x1hOUYOaMIg=s96-c', NULL, NULL, 84, 7, 1, 1, 0, 1, NULL),
(53, '106245713607183006088', 'REX Foodipedia', 'noreply.rexfoodipedia@gmail.com', 'https://lh5.googleusercontent.com/-TxCkSZC3d0Q/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucm6rMnWnLIGRG7sxq2oCDBliLXShA/s96-c/photo.jpg', NULL, NULL, 0, NULL, 0, 0, 1, 3, NULL),
(58, '114604502811437316141', 'Editorial Squad MMU Cyberjaya', 'studentpress.mmuc@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GiaDNShxpQUiDVR3mEpMsesZlx_SZLXHD55JTBp=s96-c', NULL, NULL, 0, 44, 1, 0, 0, 0, NULL),
(63, NULL, NULL, 'xavierkhew2800@gmail.com', NULL, '+60102311245', 'e35cf7b66449df565f93c607d5a81d09', 0, NULL, 0, 0, NULL, NULL, NULL),
(64, NULL, NULL, 'rk21@gmail.com', NULL, '22222222', 'e10adc3949ba59abbe56e057f20f883e', 73, 67, 1, 0, NULL, NULL, NULL),
(65, '105373187621159999522', 'KHEW XAVIER ETHAN', '1181202757@student.mmu.edu.my', 'https://lh3.googleusercontent.com/a-/AOh14GhPxu76qgd_9kRUa43m_Rj3hw9JPlLD4O-BRVMFsQ=s96-c', NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL),
(71, NULL, 'apa ni', '123@gmail.com', NULL, '01111111', '202cb962ac59075b964b07152d234b70', 85, 45, 1, 0, NULL, NULL, NULL),
(72, NULL, 'Boba holy', 'holyboba00@gmail.com', NULL, '+6010231124544', '202cb962ac59075b964b07152d234b70', 60, NULL, NULL, 0, NULL, NULL, NULL),
(77, '112130359302559667083', ' Susan', 'limsusan311@gmail.com', 'https://lh3.googleusercontent.com/--YLCjCbwr-k/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnv2d2YeiOgsn5a3tfisurgwiQddw/s96-c/photo.jpg', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(11) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `radio_button` varchar(255) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`id`, `email`, `comment`, `radio_button`, `user_id`) VALUES
(7, 'hailat@gmail.com', 'abcbcbcbcb', 'Comment', NULL),
(8, 'hailat@gmail.com', 'haaaaaiiillaaat', 'Others', NULL),
(16, 'hailat@gmail.com', 'rrrrrrrr', 'Comment', NULL),
(18, 'hailat@gmail.com', 'iisiss', 'Comment', NULL),
(19, 'hailat@gmail.com', 'is meme', 'Bug', NULL),
(21, 'hailat@gmail.com', 'tttt', 'Comment', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_test`
--
ALTER TABLE `cart_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cloudinary_test`
--
ALTER TABLE `cloudinary_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `order_rec`
--
ALTER TABLE `order_rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_acc_contraint` (`user_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `resetpwd`
--
ALTER TABLE `resetpwd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `staff_acc`
--
ALTER TABLE `staff_acc`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_ibfk_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `google_id` (`google_id`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `google_id` (`google_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `card_info`
--
ALTER TABLE `card_info`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `cart_test`
--
ALTER TABLE `cart_test`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cloudinary_test`
--
ALTER TABLE `cloudinary_test`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `order_rec`
--
ALTER TABLE `order_rec`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `resetpwd`
--
ALTER TABLE `resetpwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff_acc`
--
ALTER TABLE `staff_acc`
  MODIFY `staffid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`id`);

--
-- Constraints for table `card_info`
--
ALTER TABLE `card_info`
  ADD CONSTRAINT `card_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_acc` (`staffid`);

--
-- Constraints for table `order_rec`
--
ALTER TABLE `order_rec`
  ADD CONSTRAINT `order_rec_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `user_acc_contraint` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`id`);

--
-- Constraints for table `resetpwd`
--
ALTER TABLE `resetpwd`
  ADD CONSTRAINT `resetpwd_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_acc` (`id`);

--
-- Constraints for table `staff_acc`
--
ALTER TABLE `staff_acc`
  ADD CONSTRAINT `staff_acc_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin_acc` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`id`);

--
-- Constraints for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
