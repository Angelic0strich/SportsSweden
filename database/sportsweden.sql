-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 03:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsweden`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(6, 'Edvin', 'Parmeza', 98464, 'parmeza', '4567'),
(17, 'we', 'qw', 123123213, 'er', '3245');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT 'None',
  `sport` varchar(45) NOT NULL DEFAULT 'None',
  `city` varchar(45) NOT NULL DEFAULT 'None',
  `address` varchar(45) NOT NULL DEFAULT 'None',
  `googlemaps` text NOT NULL,
  `website` text DEFAULT NULL,
  `logo` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `sport`, `city`, `address`, `googlemaps`, `website`, `logo`, `image`) VALUES
(13, 'Skuru Basket', 'basketball', 'stockholm', 'GriffelvÃ¤gen 11, 131 40 Nacka', 'https://maps.google.com/maps?q=Griffelv%C3%A4gen%2011%2C%20131%2040%20Nacka&t=&z=13&ie=UTF8&iwloc=&output=embed', 'http://www.skurubasket.se/', 'https://www4.idrottonline.se/globalassets/skuru-ik---basket/loggor/namnlost-3.jpg', 'https://www4.idrottonline.se/globalassets/skuru-ik---basket/dsc03736.jpg'),
(11, 'Enskede IK', 'football', 'stockholm', 'EnskedevÃ¤gen 95, 122 63 Enskede', 'https://maps.google.com/maps?q=Enskedev%C3%A4gen%2095%2C%20122%2063%20Enskede&t=&z=13&ie=UTF8&iwloc=&output=embed', 'http://www.enskedeik.nu/start/?ID=1712', 'http://www.enskedeik.nu/images/15/10686/719554_512.JPG?v=2019-01-31%2016:29:33', 'https://i.ytimg.com/vi/WJprKlwPKRc/maxresdefault.jpg'),
(12, 'LidingÃ¶ Basket', 'basketball', 'stockholm', 'LÃ¤roverksvÃ¤gen 17, 181 42 LidingÃ¶', 'https://maps.google.com/maps?q=L%C3%A4roverksv%C3%A4gen%2017%2C%20181%2042%20Liding%C3%B6&t=&z=13&ie=UTF8&iwloc=&output=embed', 'https://www.localgymsandfitness.com', 'https://tse2.mm.bing.net/th?id=OIP.EpbV9D6egUCQR59SO2ieVAHaHv&pid=Api&P=0&w=300&h=300', 'https://i.ytimg.com/vi/Mm5qQlokHTw/maxresdefault.jpg'),
(10, 'Vasalunds IF', 'football', 'stockholm', 'SÃ¶dermannagatan 63, 116 66', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2033.3735981929535!2d17.990820815870272!3d59.360103481669626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9dea41f337cf%3A0x521872a8f7ab7a23!2sVasalunds%20IF!5e0!3m2!1sfr!2sse!4v1572946699241!5m2!1sfr!2sse', 'http://www.vasalundsif.se/?firstRef', 'https://tse4.mm.bing.net/th?id=OIP.k9wCjpy9RAFQ9BzMUvH-rAAAAA&pid=Api&P=0&w=300&h=300', 'https://pbs.twimg.com/media/DE786e0WsAEqzcA.jpg'),
(14, 'Idrottsklubben Bolton', 'handball', 'stockholm', 'Odengatan 71, 113 22 Stockholm', 'https://maps.google.com/maps?q=Odengatan%2071%2C%20113%2022%20Stockholm&t=&z=13&ie=UTF8&iwloc=&output=embed', 'http://www.bolton.se/', 'https://handbollskanalen.se/wp-content/uploads/2016/02/IK-Bolton.png', 'https://handbollskanalen.se/wp-content/uploads/2017/04/IK-Bolton.jpg'),
(15, 'Ã…rsta Aik HandbollfÃ¶rening', 'handball', 'stockholm', 'SkeppsmÃ¤klargatan 1, 120 69 Stockholm', 'https://maps.google.com/maps?q=Skeppsm%C3%A4klargatan%201%2C%20120%2069%20Stockholm&t=&z=13&ie=UTF8&iwloc=&output=embed', 'https://www.arstahandboll.se/Omoss/arsmote/Arsmote20141/', 'https://tse1.mm.bing.net/th?id=OIP.cYI1AwoST5F3Q-fJiReZmQAAAA&pid=Api&P=0&w=250&h=140', 'https://i.ytimg.com/vi/X53theFqwNA/maxresdefault.jpg'),
(16, 'VÃ¤sterÃ¥s Basket', 'basketball', 'vasteras', 'Box 166, 72105 VÃ¤sterÃ¥s', 'https://maps.google.com/maps?q=Box%20166%2C%2072105%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed', 'http://www.vasterasbasket.se/?firstRef', 'https://tse1.mm.bing.net/th?id=OIP.MhBzpy0nkQNM515AtZQsTQHaHa&pid=Api&P=0&w=300&h=300', 'http://www.salabasket.se/globalassets/sala-bbf---basket-herrlaget/match-080907-vasteras-basket/ma080907_vasteras_3.jpg?w=900&h=900'),
(17, 'VÃ¤sterÃ¥s Friidrottsklubb', 'athletics', 'vasteras', 'KungsÃ¤ngsgatan 8, 72130 VÃ¤sterÃ¥s', 'https://maps.google.com/maps?q=Kungs%C3%A4ngsgatan%208%2C%2072130%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed', 'https://www.vasterasfriidrott.se/', 'https://tse3.mm.bing.net/th?id=OIP.zW-YoNOpStJ4LSjHXaAYYQAAAA&pid=Api&P=0&w=300&h=300', 'https://vasterasfriidrott.se/_files/200000407-b0773b172e/700/Gurkspelen%202018.JPG'),
(18, 'VÃ¤sterÃ¥s Irsta HF', 'handball', 'vasteras', 'Vasagatan 73, 72223 VÃ¤sterÃ¥s', 'https://maps.google.com/maps?q=Vasagatan%2073%2C%2072223%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed', 'http://www.vasterasirsta.se/?firstRef', 'https://tse1.mm.bing.net/th?id=OIP.bL1SNhyGZai_aujC1xZiqwAAAA&pid=Api&P=0&w=300&h=300', 'https://tse3.mm.bing.net/th?id=OIP.rZNsCYE7pkmHuRIfb3ww4QHaEK&pid=Api&P=0&w=281&h=159'),
(19, 'VÃ¤sterÃ¥s IK Fotboll', 'football', 'vasteras', 'Apalby, 72223 VÃ¤sterÃ¥s', 'https://maps.google.com/maps?q=Apalby%2C%2072223%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed', 'http://www.vik-fotboll.com/?firstRef', 'http://www.datasportsgroup.com/images/clubs/200x200/1310.png', 'http://i.ytimg.com/vi/jcDMTfJNt8Y/maxresdefault.jpg'),
(20, 'VÃ¤sterÃ¥s IBF', 'floorball', 'vasteras', 'SjÃ¶hagsvÃ¤gen 7, 72132 VÃ¤sterÃ¥s', 'https://maps.google.com/maps?q=Sj%C3%B6hagsv%C3%A4gen%207%2C%2072132%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed', 'https://www.vib.se/start/?ID=76555', 'http://upload.wikimedia.org/wikipedia/fi/thumb/3/33/V%C3%A4ster%C3%A5s_IBF_Logo.jpg/150px-V%C3%A4ster%C3%A5s_IBF_Logo.jpg', 'https://i.ytimg.com/vi/i4eQAG4G94c/hqdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` text NOT NULL,
  `imgurl` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `imgurl`, `content`) VALUES
(35, 'VÃ¤sterÃ¥s Irsta HF - Ã…rsta Aik HandbollfÃ¶rening', 'https://handbollskanalen.se/ovriga-sverige/gruppspelet-lottat-trim-sm-mastarna-gar-nya-guld/', 'The match will be played this weekend at Bombardier Arenadfsfsfsdf'),
(36, 'Enskede IK - VÃ¤sterÃ¥s IK Fotboll', 'https://svenskafanscdn.blob.core.windows.net/image-7/765328.jpg', 'The match will take place the next thursday at Enskede IP.'),
(38, 'Sweden Team', 'https://i2-prod.mirror.co.uk/incoming/article833792.ece/ALTERNATES/s1200/Sweden%20football%20team%20topic.jpg', 'Sweden are in a draw against Spain in the Euro 2020 qualifiers'),
(39, 'Djorgarden team', 'https://blog.campanella.se/wp-content/uploads/2016/08/20160814-172849_MC_6014.jpg', 'Djorgarden top the standings with two rounds to close'),
(40, 'Stockholm ATP', 'https://www.atptour.com/en/tournaments/stockholm/429/www.atptour.com/-/media/images/atp-tournaments/tournament-images/stockholm_tournimage17.jpg', 'Karl Freiberg leaves the Stockholm championship from the first round');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_user_club`
--

CREATE TABLE `subscription_user_club` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `phone`, `username`, `password`, `role`) VALUES
(1, 'Edvin', 'Parmeza', 324, 'ep', '1234', 'user'),
(24, 'Julien', 'Savornin', 378264238, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `subscription_user_club`
--
ALTER TABLE `subscription_user_club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subscription_user_club`
--
ALTER TABLE `subscription_user_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
