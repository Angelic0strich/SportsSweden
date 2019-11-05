-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: sportsweden
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT 'None',
  `sport` varchar(45) NOT NULL DEFAULT 'None',
  `city` varchar(45) NOT NULL DEFAULT 'None',
  `address` varchar(45) NOT NULL DEFAULT 'None',
  `googlemaps` text NOT NULL,
  `website` text,
  `logo` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs`
--

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` VALUES (13,'Skuru Basket','basketball','stockholm','GriffelvÃ¤gen 11, 131 40 Nacka','https://maps.google.com/maps?q=Griffelv%C3%A4gen%2011%2C%20131%2040%20Nacka&t=&z=13&ie=UTF8&iwloc=&output=embed','http://www.skurubasket.se/','https://www4.idrottonline.se/globalassets/skuru-ik---basket/loggor/namnlost-3.jpg','https://www4.idrottonline.se/globalassets/skuru-ik---basket/dsc03736.jpg'),(11,'Enskede IK','football','stockholm','EnskedevÃ¤gen 95, 122 63 Enskede','https://maps.google.com/maps?q=Enskedev%C3%A4gen%2095%2C%20122%2063%20Enskede&t=&z=13&ie=UTF8&iwloc=&output=embed','http://www.enskedeik.nu/start/?ID=1712','http://www.enskedeik.nu/images/15/10686/719554_512.JPG?v=2019-01-31%2016:29:33','https://i.ytimg.com/vi/WJprKlwPKRc/maxresdefault.jpg'),(12,'LidingÃ¶ Basket','basketball','stockholm','LÃ¤roverksvÃ¤gen 17, 181 42 LidingÃ¶','https://maps.google.com/maps?q=L%C3%A4roverksv%C3%A4gen%2017%2C%20181%2042%20Liding%C3%B6&t=&z=13&ie=UTF8&iwloc=&output=embed','https://www.localgymsandfitness.com','https://tse2.mm.bing.net/th?id=OIP.EpbV9D6egUCQR59SO2ieVAHaHv&pid=Api&P=0&w=300&h=300','https://i.ytimg.com/vi/Mm5qQlokHTw/maxresdefault.jpg'),(10,'Vasalunds IF','football','stockholm','SÃ¶dermannagatan 63, 116 66','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2033.3735981929535!2d17.990820815870272!3d59.360103481669626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9dea41f337cf%3A0x521872a8f7ab7a23!2sVasalunds%20IF!5e0!3m2!1sfr!2sse!4v1572946699241!5m2!1sfr!2sse','http://www.vasalundsif.se/?firstRef','https://tse4.mm.bing.net/th?id=OIP.k9wCjpy9RAFQ9BzMUvH-rAAAAA&pid=Api&P=0&w=300&h=300','https://pbs.twimg.com/media/DE786e0WsAEqzcA.jpg'),(14,'Idrottsklubben Bolton','handball','stockholm','Odengatan 71, 113 22 Stockholm','https://maps.google.com/maps?q=Odengatan%2071%2C%20113%2022%20Stockholm&t=&z=13&ie=UTF8&iwloc=&output=embed','http://www.bolton.se/','https://handbollskanalen.se/wp-content/uploads/2016/02/IK-Bolton.png','https://handbollskanalen.se/wp-content/uploads/2017/04/IK-Bolton.jpg'),(15,'Ã…rsta Aik HandbollfÃ¶rening','handball','stockholm','SkeppsmÃ¤klargatan 1, 120 69 Stockholm','https://maps.google.com/maps?q=Skeppsm%C3%A4klargatan%201%2C%20120%2069%20Stockholm&t=&z=13&ie=UTF8&iwloc=&output=embed','https://www.arstahandboll.se/Omoss/arsmote/Arsmote20141/','https://tse1.mm.bing.net/th?id=OIP.cYI1AwoST5F3Q-fJiReZmQAAAA&pid=Api&P=0&w=250&h=140','https://i.ytimg.com/vi/X53theFqwNA/maxresdefault.jpg'),(16,'VÃ¤sterÃ¥s Basket','basketball','vasteras','Box 166, 72105 VÃ¤sterÃ¥s','https://maps.google.com/maps?q=Box%20166%2C%2072105%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed','http://www.vasterasbasket.se/?firstRef','https://tse1.mm.bing.net/th?id=OIP.MhBzpy0nkQNM515AtZQsTQHaHa&pid=Api&P=0&w=300&h=300','http://www.salabasket.se/globalassets/sala-bbf---basket-herrlaget/match-080907-vasteras-basket/ma080907_vasteras_3.jpg?w=900&h=900'),(17,'VÃ¤sterÃ¥s Friidrottsklubb','athletics','vasteras','KungsÃ¤ngsgatan 8, 72130 VÃ¤sterÃ¥s','https://maps.google.com/maps?q=Kungs%C3%A4ngsgatan%208%2C%2072130%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed','https://www.vasterasfriidrott.se/','https://tse3.mm.bing.net/th?id=OIP.zW-YoNOpStJ4LSjHXaAYYQAAAA&pid=Api&P=0&w=300&h=300','https://vasterasfriidrott.se/_files/200000407-b0773b172e/700/Gurkspelen%202018.JPG'),(18,'VÃ¤sterÃ¥s Irsta HF','handball','vasteras','Vasagatan 73, 72223 VÃ¤sterÃ¥s','https://maps.google.com/maps?q=Vasagatan%2073%2C%2072223%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed','http://www.vasterasirsta.se/?firstRef','https://tse1.mm.bing.net/th?id=OIP.bL1SNhyGZai_aujC1xZiqwAAAA&pid=Api&P=0&w=300&h=300','https://tse3.mm.bing.net/th?id=OIP.rZNsCYE7pkmHuRIfb3ww4QHaEK&pid=Api&P=0&w=281&h=159'),(19,'VÃ¤sterÃ¥s IK Fotboll','football','vasteras','Apalby, 72223 VÃ¤sterÃ¥s','https://maps.google.com/maps?q=Apalby%2C%2072223%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed','http://www.vik-fotboll.com/?firstRef','http://www.datasportsgroup.com/images/clubs/200x200/1310.png','http://i.ytimg.com/vi/jcDMTfJNt8Y/maxresdefault.jpg'),(20,'VÃ¤sterÃ¥s IBF','floorball','vasteras','SjÃ¶hagsvÃ¤gen 7, 72132 VÃ¤sterÃ¥s','https://maps.google.com/maps?q=Sj%C3%B6hagsv%C3%A4gen%207%2C%2072132%20V%C3%A4ster%C3%A5s&t=&z=13&ie=UTF8&iwloc=&output=embed','https://www.vib.se/start/?ID=76555','http://upload.wikimedia.org/wikipedia/fi/thumb/3/33/V%C3%A4ster%C3%A5s_IBF_Logo.jpg/150px-V%C3%A4ster%C3%A5s_IBF_Logo.jpg','https://i.ytimg.com/vi/i4eQAG4G94c/hqdefault.jpg');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-05 18:02:05
