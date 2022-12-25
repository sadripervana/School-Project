-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 04:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galleryexample`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `idGallery` int(11) NOT NULL,
  `titleGallery` varchar(225) NOT NULL,
  `descGallery` longtext NOT NULL,
  `imgFULLNameGallery` longtext NOT NULL,
  `orderGallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`idGallery`, `titleGallery`, `descGallery`, `imgFULLNameGallery`, `orderGallery`) VALUES
(1, 'Palawan Island, Philippines', 'Palawan Island is the most beautiful island in Philippines and the largest in Palawan province. It’s a slice of heaven, also voted as the most beautiful island in the world several time. The ultimate destination full of incredibly beautiful natural seascapes and landscapes. Teeming with exotic wildlife, quiet waterfalls and quaint fishing villages, it’s one of the most bio-diverse islands in the Philippines.\r\n\r\nWhat to do must here? According to the National Geographic Traveler magazine, Palawan is the best island destination in Asia region. If you ever came to Palawan, you must visit the Calauit Game Preserve and peaceful wildlife sanctuaries. And also got to El Nido and Coron Island, regarded as one of the best dive sites in the world.', 'palawan-island,-philippines.60abad65c126b5.21558966.jpg', 1),
(2, 'Barcelona, Spain', 'Barcelona, Known around the world for its legendary football team. It is the capital of Catalonia and the second largest city in Spain. Barcelona is located on the northeast coast of the Iberian Peninsula, facing the Mediterranean Sea. It has a Mediterranean climate with mild, humid winters and warm, dry summers.\r\n\r\nBarcelona has many attractions for tourists like Sagrada Familia by Antonio Gaudí, L’Aquarium de Barcelona, Poble Espanyol de Montjuïc otherwise known as the Spanish Village, La Pedrera – Casa Mila by Antonio Gaudí and many more.', 'barcelona,-spain.60abad7b54beb1.44074495.jpg', 2),
(3, 'London, England', 'London is the capital city of England and the United Kingdom. Also, London ranked top amongst the best place to visit in the world by U.S. News Travel. There are so many interesting places to visit in London. With eclectic neighborhoods and numerous landmarks, London requires several days to get to know. Along London’s bankside you will find a reconstruction of Shakespeare’s Globe Theatre, resident storytellers show visitors every intricate element of this impressive replica building. With a London Pass you can visit all of these top London attractions, a fantastic sightseeing saving! See also; Top 10 Places to Visit in London.', 'london,-england.60abad9790e3e7.66379207.jpeg', 3),
(4, 'Paris, France', 'Paris is the capital and largest city of France. It is situated on the river Seine, in northern France, at the heart of the Île-de-France region. Paris has the typical Western European oceanic climate which is affected by the North Atlantic Current. Over a year, Paris’ climate can be described as mild and moderately wet. Paris has many attractive sites like Boat Tour of the Seine River, Père Lachaise Cemetery, Sacre Coeur and Montmartre, Arc de Triomphe and the Champs-Elysées, The Sorbonne and the Latin Quarter, Musée d’Orsay, Eiffel Tower and many more.', 'paris,-france.60abadb0269550.32991523.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idGallery`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
