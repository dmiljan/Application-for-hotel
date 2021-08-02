-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 03:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `capacity` int(11) NOT NULL,
  `accommodation_type_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `name`, `capacity`, `accommodation_type_id`, `price_id`) VALUES
(1, '1-soba', 3, 1, 1),
(2, '2-soba', 4, 1, 2),
(3, '3-soba', 2, 1, 3),
(4, '1-apartman', 6, 2, 4),
(5, '2-apartman', 4, 2, 5),
(6, '3-apartman', 7, 2, 6),
(7, '4-soba', 5, 1, 7),
(8, 'Specijal', 5, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_type`
--

CREATE TABLE `accommodation_type` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation_type`
--

INSERT INTO `accommodation_type` (`id`, `name`) VALUES
(1, 'soba'),
(2, 'apartman');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Marko', 'Markovic', 'mmarkovic@yahoo.com', 'c3552d88acaa2e2bb70291175f7e0328'),
(2, 'Filip', 'Filipovic', 'ffilipovic@gmail.com', '2aaf0fcea23c5c403ac63a315196787d'),
(3, 'Stefan', 'Stefanovic', 'sstefanovic@yahoo.com', '5f68ea14df9ede919ce8f15365061f06'),
(4, 'Goran', 'Goranovic', 'ggoranovic@hotmail.com', '649b1be16a9cd20b9a9da43244f16e27'),
(5, 'Dragan', 'Markovic', 'dbjelogrlic@gmail.com', 'd085c0cb159980febac5922ffa06a744'),
(6, 'Marija', 'Petrovic', 'mpetrovic@gmail.com', 'b416671324b588e0a33970cb2a5a0197'),
(7, 'Tamara ', 'Jovanovic', 'tjovanovic@hotmail.com', '4d2e7dceab5345fb2514706bc0d46f0e'),
(8, 'Tatjana', 'Kovacevic', 'tkovacevic', '02c378a284847ca8efb23be93c7f484d'),
(9, 'Dragan', 'Ivanovic', 'divanovic@hotmail.com', '35e668243b1363ce776d4fa822af33e0');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `PIB` varchar(25) NOT NULL,
  `star_rating` int(11) NOT NULL,
  `number_accommodation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `address`, `PIB`, `star_rating`, `number_accommodation`) VALUES
(1, 'Jadran', 'Spasovdanska', '55666', 4, 40);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `accommodation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_path`, `accommodation_id`) VALUES
(1, 'imageAccommodation/_HEO0476.jpg', 1),
(2, 'imageAccommodation/_HEO0508.jpg', 1),
(3, 'imageAccommodation/_HEO0516.jpg', 1),
(4, 'imageAccommodation/_HEO0628.jpg', 2),
(5, 'imageAccommodation/_HEO0648.jpg', 2),
(6, 'imageAccommodation/_HEO0755.jpg', 2),
(7, 'imageAccommodation/_HEO0803_1.jpg', 3),
(8, 'imageAccommodation/_HEO1130.jpg', 3),
(9, 'imageAccommodation/_HEO1328.jpg', 3),
(10, 'imageAccommodation/_HEO9092.jpg', 4),
(11, 'imageAccommodation/_HEO9715.jpg', 4),
(12, 'imageAccommodation/_HEO9757.jpg', 4),
(13, 'imageAccommodation/_HEO9774.jpg', 5),
(14, 'imageAccommodation/_HEO9790.jpg', 5),
(15, 'imageAccommodation/_HEO9813.jpg', 5),
(16, 'imageAccommodation/_HEO9874.jpg', 6),
(17, 'imageAccommodation/_HEO9976.jpg', 6),
(18, 'imageAccommodation/_HEO9979.jpg', 6),
(19, 'imageAccommodation/_HEO9981.jpg', 6),
(20, 'imageAccommodation/_MG_8715.jpg', 7),
(21, 'imageAccommodation/11.jpg', 7),
(22, 'imageAccommodation/22.jpg', 7),
(23, 'imageAccommodation/33.jpg', 7),
(24, 'imageAccommodation/44.jpg', 7),
(25, 'imageAccommodation/55.jpg', 7),
(29, 'imageAccommodation/8a.jpg', 8),
(32, 'imageAccommodation/8b.jpg', 8),
(33, 'imageAccommodation/8c.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `obligation`
--

CREATE TABLE `obligation` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obligation`
--

INSERT INTO `obligation` (`id`, `name`, `description`, `start_date`, `end_date_time`) VALUES
(3, 'Rezervacije', 'Potrebno je vrsiti rezervacije za goste.', '2021-04-25', '2021-04-30 11:30:00'),
(5, 'Pisanje molbe', 'Napisati molbu', '2021-03-03', '2021-03-13 19:17:00'),
(6, 'Ciscenje', 'Ocistiti sobe', '2021-02-26', '2021-02-27 15:15:00'),
(7, 'Nabavka', 'Izvrsiti nabavku hrane.', '2021-03-25', '2021-03-26 07:40:00'),
(8, 'Prevoz', 'Izvrsiti prevoz robe.', '2021-03-26', '2021-03-30 05:46:00'),
(9, 'Placanje', 'Isplatiti obaveze.', '2021-04-22', '2021-04-30 01:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `price_with_breakfast` decimal(7,2) NOT NULL,
  `price_weekend` decimal(7,2) NOT NULL,
  `price_weekend_with_breakfast` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `price`, `price_with_breakfast`, `price_weekend`, `price_weekend_with_breakfast`) VALUES
(1, '32.00', '33.00', '45.00', '66.00'),
(2, '66.00', '77.00', '67.00', '87.00'),
(3, '44.00', '77.00', '67.00', '87.00'),
(4, '88.00', '99.00', '111.00', '119.00'),
(5, '66.00', '77.00', '88.00', '99.00'),
(6, '100.00', '110.00', '122.00', '133.00'),
(7, '44.00', '45.00', '56.00', '78.00'),
(8, '120.00', '100.00', '110.00', '100.00'),
(10, '150.00', '150.00', '150.00', '150.00'),
(11, '555.00', '111.00', '111.00', '111.00'),
(12, '56.00', '56.00', '56.00', '56.00');

-- --------------------------------------------------------

--
-- Table structure for table `rezervation`
--

CREATE TABLE `rezervation` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `jmbg` varchar(20) NOT NULL,
  `date_arrival` date NOT NULL,
  `date_departure` date NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervation`
--

INSERT INTO `rezervation` (`id`, `age`, `jmbg`, `date_arrival`, `date_departure`, `accommodation_id`, `user_id`, `guest_id`) VALUES
(3, 55, '1254658935112', '2020-03-25', '2020-03-29', 2, 1, 3),
(11, 23, '1611991171588', '2021-05-12', '2021-06-02', 3, 1, 7),
(16, 25, '1254658938523', '2021-05-20', '2021-05-28', 7, 15, 6),
(17, 28, '1254658935677', '2021-03-26', '2021-03-30', 5, 15, 9),
(20, 34, '1611992171589', '2021-03-11', '2021-03-25', 3, 1, 8),
(21, 23, '1611992173211', '2021-03-18', '2021-04-23', 7, 1, 2),
(23, 25, '1611996178989', '2021-09-16', '2021-10-08', 4, 1, 5),
(24, 32, '1254658935656', '2021-06-11', '2021-06-26', 8, 15, 7),
(26, 25, '1611996171111', '2021-05-06', '2021-05-14', 1, 15, 8),
(27, 43, '1254658935999', '2021-04-07', '2021-04-17', 3, 15, 5),
(29, 30, '1611996171511', '2021-05-07', '2021-05-15', 4, 1, 1),
(30, 30, '1611996171511', '2021-09-10', '2021-09-20', 2, 15, 1),
(31, 34, '1254658935555', '2021-08-20', '2021-08-28', 4, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name_workplace` varchar(45) DEFAULT NULL,
  `date_employment` date DEFAULT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `name_workplace`, `date_employment`, `user_type_id`) VALUES
(1, 'Miljan', 'Drakul', 'mdrakul@yahoo.com', 'ec7906dc6b7a9d9e97accaefe0b3bdba', '', '0000-00-00', 1),
(4, 'Milos', 'Milosevic', 'mmilosevic@yahoo.com', '0fb733b4bf42a541cc552cf91bef64cf', '', '0000-00-00', 1),
(5, 'Milan', 'Gutovic', 'mgutovic@hotmail.com', '84bcd09d479150f932d84bc7bba6a73e', 'Recepcioner', '2020-03-26', 2),
(6, 'Mirko', 'Mirkovic', 'mmirkovic@yahoo.com', '0c002d4fe1cc5ce7bb0b2a5c1b51d0d2', 'Referent rezervacija', '2021-02-10', 2),
(10, 'Vesna', 'Popovic', 'vpopovic@gmail.com', '66e9966c26756b5809817f09e4c5395e', 'Nocni recepcioner', '2021-02-25', 2),
(11, 'Ana', 'Stojanovic', 'astojanovic@yahoo.com', 'e6222808c58114c9c493a60c068f3218', 'Pravnik', '2021-03-25', 2),
(12, 'Jovan', 'Nikolic', 'jnikolic@yahoo.com', 'fe41a4938374e32e013d69e34c5c991e', 'Vozac', '2021-03-18', 2),
(13, 'Gordana', 'Popovic', 'gpopovic@gmail.com', '1fbb1272313953452f6aa6a6892a3547', 'Kuvar', '2021-03-04', 2),
(14, 'Aleksandar', 'Savic', 'asavic@hotmail.com', '510e263036645b64c068888c581b8de8', 'Ekonomista', '2021-03-17', 2),
(15, 'Sara', 'Rodic', 'srodic@yahoo.com', '42f80c32e4adfbc6bc81ed251cf6ea7b', 'Recepcioner', '2021-03-09', 2),
(16, 'Zoran', 'Ilic', 'zilic@gmail.com', '3d78d783cb7c9f3121c96be88defe153', 'Recepcioner', '2021-03-02', 2),
(17, 'Ognjen', 'Popov', 'opopov@hotmail.com', '0282e1ae061bf836fb7c8b97b0c3566d', 'Referent rezervacija', '2021-01-07', 2),
(18, 'Darko', 'Djukic', 'ddjukic@yahoo.com', 'c950a8c36e36c78acc9b42ed446e8d0c', 'Voditelj smjene', '2021-03-04', 2),
(19, 'Milica', 'Kis', 'mkis@gmail.com', '9ef3ca9681d32efd77e6a839537754f4', 'Referent rezervacija', '2021-02-27', 2),
(20, 'Kristina', 'Novakovic', 'knovakovic', '91e4ba4039fa8298e4943dd6a7213718', 'Kuvar', '2020-09-25', 2),
(21, 'Goran', 'Tomoc', 'gtomic@gmail.com', 'e6e54d20e80e21a4b30fbb6663390008', 'Domar', '2021-03-02', 2),
(22, 'Jelena', 'Matic', 'jmatic@gmail.com', '19bc73064f4a0789948be4ca6fba7d7a', 'Spremacica', '2021-03-18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_obligation`
--

CREATE TABLE `user_has_obligation` (
  `user_id` int(11) NOT NULL,
  `obligation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_has_obligation`
--

INSERT INTO `user_has_obligation` (`user_id`, `obligation_id`) VALUES
(5, 3),
(5, 6),
(6, 5),
(6, 7),
(10, 3),
(14, 7),
(15, 3),
(15, 9),
(16, 7),
(19, 3),
(21, 5),
(22, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'administrator'),
(2, 'radnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_accommodation_accommodation_type_idx` (`accommodation_type_id`),
  ADD KEY `fk_accommodation_price1_idx` (`price_id`);

--
-- Indexes for table `accommodation_type`
--
ALTER TABLE `accommodation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_accommodation1_idx` (`accommodation_id`);

--
-- Indexes for table `obligation`
--
ALTER TABLE `obligation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervation`
--
ALTER TABLE `rezervation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rezervation_accommodation1_idx` (`accommodation_id`),
  ADD KEY `fk_rezervation_user1_idx` (`user_id`),
  ADD KEY `fk_rezervation_guest1_idx` (`guest_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_user_type1_idx` (`user_type_id`);

--
-- Indexes for table `user_has_obligation`
--
ALTER TABLE `user_has_obligation`
  ADD PRIMARY KEY (`user_id`,`obligation_id`),
  ADD KEY `fk_user_has_obligation_obligation1_idx` (`obligation_id`),
  ADD KEY `fk_user_has_obligation_user1_idx` (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `accommodation_type`
--
ALTER TABLE `accommodation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `obligation`
--
ALTER TABLE `obligation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rezervation`
--
ALTER TABLE `rezervation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_has_obligation`
--
ALTER TABLE `user_has_obligation`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `fk_accommodation_accommodation_type` FOREIGN KEY (`accommodation_type_id`) REFERENCES `accommodation_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_accommodation_price1` FOREIGN KEY (`price_id`) REFERENCES `price` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_accommodation1` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rezervation`
--
ALTER TABLE `rezervation`
  ADD CONSTRAINT `fk_rezervation_accommodation1` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rezervation_guest1` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rezervation_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_type1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_obligation`
--
ALTER TABLE `user_has_obligation`
  ADD CONSTRAINT `fk_user_has_obligation_obligation1` FOREIGN KEY (`obligation_id`) REFERENCES `obligation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_obligation_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
