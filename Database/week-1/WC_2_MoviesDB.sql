-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 29, 2022 at 05:19 PM
-- Server version: 10.9.2-MariaDB-1:10.9.2+maria~ubu2204
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesdb`
--
CREATE DATABASE IF NOT EXISTS `moviesdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `moviesdb`;

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `movie_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`movie_id`, `person_id`) VALUES
(145487, 600),
(316654, 600),
(413300, 600),
(948470, 1989536),
(10778364, 10900600),
(10782740, 9141090),
(10872600, 1218281),
(10974542, 10556887),
(11022238, 11016883),
(12767902, 11762832),
(13154232, 724436),
(13904644, 12259066),
(15477560, 12961801),
(1872181, 1989536),
(2250912, 1218281),
(4060252, 1361273),
(4321248, 7025441),
(4633694, 2130108),
(4633694, 709056),
(4633694, 745247),
(4770784, 7156441),
(5727514, 7025441),
(6318156, 7025441),
(6320628, 1218281),
(6416304, 7025441),
(6510632, 7025441),
(8010444, 7025441),
(8390388, 7025441),
(9362722, 1690966),
(9362722, 5358492),
(9362722, 1042511);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `year` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`) VALUES
(145487, 'Spider-Man', '2002'),
(241527, 'Harry Potter and the Sorcerer\'s Stone', '2001'),
(295297, 'Harry Potter and the Chamber of Secrets', '2002'),
(304141, 'Harry Potter and the Prisoner of Azkaban', '2004'),
(316654, 'Spider-Man 2', '2004'),
(330373, 'Harry Potter and the Goblet of Fire', '2005'),
(373889, 'Harry Potter and the Order of the Phoenix', '2007'),
(413300, 'Spider-Man 3', '2007'),
(417741, 'Harry Potter and the Half-Blood Prince', '2009'),
(926084, 'Harry Potter and the Deathly Hallows: Part 1', '2010'),
(948470, 'The Amazing Spider-Man', '2012'),
(1201607, 'Harry Potter and the Deathly Hallows: Part 2', '2011'),
(1503725, 'Symbiote Spider-Man: The Saga of the Black Costume', '2007'),
(1781796, 'Creating the World of Harry Potter, Part 4: Sound and Music', '2010'),
(1867094, 'The Seekers Guide to Harry Potter', '2010'),
(1872181, 'The Amazing Spider-Man 2', '2014'),
(2250912, 'Spider-Man: Homecoming', '2017'),
(4060186, 'Something Sinister This Way Comes - The Amazing Spider-Man 2', '2014'),
(4060252, 'The Wages of Heroism: Making the Amazing Spider-Man 2', '2014'),
(4321248, 'The Avenging Spider-Man', '2015'),
(4633694, 'Spider-Man: Into the Spider-Verse', '2018'),
(4770784, 'The Indestructible Spider-Man', '2016'),
(4779842, 'Marvel Knights: Spider-Man', '2015'),
(5727514, 'Spider-Man: Vengeance', '2016'),
(6245274, 'Spider-Man 2: Another World', '2018'),
(6318156, 'Spider-Man: Commencement', '2017'),
(6320628, 'Spider-Man: Far from Home', '2019'),
(6416304, 'Spider-Man: Balance Act', '2016'),
(6510632, 'Spider-Man 2: Age of Darkness', '2014'),
(6859022, 'Spider-Man 2: A Darker Path', '2017'),
(7263172, 'Spider-Man 2: Dawn of Darkness', '2018'),
(7783322, 'Harry Potter: A History of Magic', '2017'),
(8010444, 'Spider-Man: Rise of a Legacy', '2018'),
(8151338, 'CF Picture\'s Spider-Man', '2018'),
(8358970, 'The Harry Potter Saga Analyzed', '2018'),
(8390388, 'Spider-Man: Final Swing', '2021'),
(8443702, 'Harry Potter and the Untold Stories of Hogwarts', '2012'),
(8446672, 'The Marvelous Spider-Man 3: Empire of Blood', '2018'),
(9362722, 'Spider-Man: Into the Spider-Verse 2', '2022'),
(9765564, 'Spider-Man 4: Fan Film', '2021'),
(10443172, 'Spider-Man: Identity', '2019'),
(10778364, 'The Spider-Man (Fan Film)', '2020'),
(10782740, 'The Spider-Man 2', '2021'),
(10872600, 'Spider-Man: No Way Home', '2021'),
(10892412, 'Spider-Man: At the End of Time', '2021'),
(10974542, 'Spider-Man 2: Broken Identity', '2019'),
(11022238, 'The Spectacular Spider-Man Trilogy Responsibility, Repute and Requiem', '2021'),
(11579056, 'The Lego Batman and Spider-Man Movie', '2022'),
(12291314, 'Spider-Man: A Whole New Beginning', '2021'),
(12767902, 'Spider-Man 4 Fan Film', '2021'),
(13154232, 'Spider-Man Venom Saga', '2005'),
(13155056, 'Darla\'s Book Club: Discussing the Harry Potter Series', '2020'),
(13904644, 'Spider-Man: Lotus', '2022'),
(14572454, 'Harry Potter and the Cursed Child', '2016'),
(15477560, 'Spider-Man: Bad Reputation', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `birth` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `birth`) VALUES
(168, 'Samuel L. Jackson', '1948'),
(353, 'Willem Dafoe', '1955'),
(375, 'Robert Downey Jr.', '1965'),
(379, 'Kirsten Dunst', '1982'),
(474, 'Michael Keaton', '1951'),
(547, 'Alfred Molina', '1953'),
(600, 'Sam Raimi', '1959'),
(673, 'Marisa Tomei', '1964'),
(1497, 'Tobey Maguire', '1975'),
(1975, 'Roscoe Lee Browne', '1922'),
(2006, 'Thomas Haden Church', '1960'),
(4937, 'Jamie Foxx', '1967'),
(50547, 'Sara Ballantine', '1954'),
(290556, 'James Franco', '1978'),
(316079, 'Paul Giamatti', '1967'),
(333410, 'Topher Grace', '1978'),
(350453, 'Jake Gyllenhaal', '1980'),
(406975, 'Rhys Ifans', '1967'),
(451234, 'Irrfan Khan', '1967'),
(628420, 'Paula Newsome', NULL),
(709056, 'Peter Ramsey', '1962'),
(724436, 'Bob Richardson', NULL),
(745247, 'Rodney Rothman', NULL),
(991810, 'Mahershala Ali', '1974'),
(1042511, 'Justin K. Thompson', NULL),
(1212722, 'Benedict Cumberbatch', '1976'),
(1218281, 'Jon Watts', '1981'),
(1297015, 'Emma Stone', '1988'),
(1361273, 'Charles de Lauzirika', NULL),
(1643074, 'Joan Lee', '1922'),
(1690966, 'Joaquim Dos Santos', '1977'),
(1940449, 'Andrew Garfield', '1983'),
(1989536, 'Marc Webb', '1974'),
(2130108, 'Bob Persichetti', NULL),
(2159926, 'Jake Johnson', '1978'),
(2316654, 'Wayne Bradley', NULL),
(2794962, 'Hailee Steinfeld', '1996'),
(2805688, 'Cheryl De Luca', '1971'),
(3532001, 'Leslie Tripathy', NULL),
(3889698, 'Lisa Kovack', NULL),
(3918035, 'Zendaya', '1996'),
(4043618, 'Tom Holland', '1996'),
(4271336, 'Shameik Moore', '1995'),
(4793987, 'Issa Rae', '1985'),
(5358492, 'Kemp Powers', NULL),
(5435751, 'Tyler Buckingham', NULL),
(5540890, 'Leeza Mangaldas', NULL),
(5562562, 'Joey Lever', NULL),
(5567049, 'Erik Franklin', NULL),
(5607314, 'Gillian Broderick', NULL),
(5926064, 'Tarun Madan Chopra', NULL),
(5926066, 'Sonal Giani', NULL),
(6297982, 'Raaj Singh Arora', NULL),
(6551884, 'Bryn Clayton Jones', NULL),
(6680484, 'Michael Innamorato', NULL),
(6859022, 'Sang Jun Park', NULL),
(7025441, 'Cameron Dodd', NULL),
(7025442, 'Alyssa McGarrity', NULL),
(7121570, 'Gemma-Louise Keane', NULL),
(7155492, 'Kosta Stylianou', NULL),
(7155493, 'Greg Campbell', NULL),
(7155494, 'Adam Mcilmoyle', NULL),
(7156441, 'Jackson Morehu', NULL),
(7156444, 'Vaughn Eeastwood', NULL),
(7156470, 'Emily Morehu', NULL),
(7157814, 'Hussein Mohammed', NULL),
(7201417, 'Mark Ricci', NULL),
(7283971, 'Dasheil Matias', NULL),
(7380490, 'Kaleb Carmichael', NULL),
(7380491, 'Michael Graham', NULL),
(7389969, 'Riley Ferguson', NULL),
(7389973, 'Gwen Aterey', NULL),
(7702890, 'Kellyann Summers', NULL),
(7832005, 'Alex Lieu', NULL),
(7832006, 'Markel McKee', NULL),
(7845967, 'Noah Young', NULL),
(7890364, 'Jesse Scimeca', NULL),
(8031855, 'Ray Ulbikas', NULL),
(8240023, 'Sydney Hall', NULL),
(8240024, 'Madi King', NULL),
(8416563, 'Alex Murphy', NULL),
(8500687, 'Wayne Lundy', NULL),
(8581498, 'Jak Beasley', NULL),
(8581499, 'Lauren Baxter', NULL),
(8581503, 'Wade Keeling', NULL),
(8703454, 'Joe Ricci', NULL),
(8703456, 'Carter Purtelle', NULL),
(8765455, 'John Sousa', NULL),
(8879252, 'Brandon Melo', NULL),
(8906135, 'Richard DiTaranto', NULL),
(8906136, 'Casey Priehs', NULL),
(8910536, 'Hanna Scott', NULL),
(8973385, 'Miguel Archer', NULL),
(8973386, 'Jeffrey Archer', NULL),
(8973387, 'Marquis Earl', NULL),
(9060711, 'Ronan Doss', NULL),
(9141090, 'Shahzaib Yaqoob', NULL),
(9180736, 'Daven Talbot', NULL),
(9340786, 'Danny Loduca', NULL),
(9631228, 'Ricar Giachini', NULL),
(9704011, 'Markos Lee', NULL),
(9704012, 'Nikolai Vadala', NULL),
(9704013, 'Sam Zwicker', NULL),
(9704014, 'Tom Field', NULL),
(9704015, 'Brandon Phomvongsa', NULL),
(9826554, 'Thomas Genga', NULL),
(9854091, 'Michael Lamberti', NULL),
(9854092, 'Alex Krah', NULL),
(9937700, 'Leona Britt', NULL),
(10179566, 'Bryan Reyes', NULL),
(10235918, 'Billie Wolff', NULL),
(10556887, 'Nathan McInnes', NULL),
(10556891, 'Brandon Denton', NULL),
(10584127, 'Warden Wayne', NULL),
(10641203, 'Maxwell Fox-Andrews', NULL),
(10707369, 'Jorge Eadon-Davies', NULL),
(10900332, 'Levi Balla', NULL),
(10900333, 'Alex Nowis', NULL),
(10900340, 'Tiffany Joyelle Page', NULL),
(10900600, 'Michael Nightman', NULL),
(10900601, 'Seth Beckson', NULL),
(10900602, 'X.R. Chavez', NULL),
(10902146, 'Mary', NULL),
(10919908, 'Sam Corner', NULL),
(10994566, 'William Evans', NULL),
(10994570, 'Roman Cook', NULL),
(11016883, 'Quaid Cundall', NULL),
(11016885, 'Chan Bayne', NULL),
(11016886, 'Linda Bayne', NULL),
(11016894, 'Scott Bednasek', NULL),
(11016904, 'Audrey Angle', NULL),
(11260380, 'Lennon Richardson', NULL),
(11260381, 'Gabriel Combs', NULL),
(11506550, 'David Steingart', NULL),
(11506551, 'Donna Fischer', NULL),
(11506552, 'Mike Noren', NULL),
(11762832, 'Ben Cunin', NULL),
(11762833, 'Michael Stirling', NULL),
(11762834, 'Allison Shiyu', NULL),
(11764772, 'David Peralez', NULL),
(11764773, 'Mike Sims', NULL),
(12259066, 'Gavin J. Konop', NULL),
(12278238, 'Sean Thomas Reid', NULL),
(12435095, 'Moriah Brooklyn', NULL),
(12908953, 'John Price', NULL),
(12919025, 'Frank Guglielmelli', NULL),
(12961801, 'Levram', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `movie_id` int(11) NOT NULL,
  `rating` double NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`movie_id`, `rating`, `votes`) VALUES
(145487, 7.3, 728758),
(316654, 7.3, 578615),
(413300, 6.2, 526793),
(948470, 6.9, 583948),
(10443172, 6.3, 16),
(13154232, 8, 31),
(1503725, 7.9, 11),
(1872181, 6.5, 437738),
(2250912, 7.4, 558993),
(4060186, 6.2, 6),
(4060252, 6.9, 22),
(4321248, 6, 55),
(4633694, 8.4, 432178),
(4770784, 7.2, 15),
(4779842, 6.7, 72),
(5727514, 6.4, 46),
(6245274, 7.3, 285),
(6318156, 8.4, 18),
(6320628, 7.4, 385077),
(6416304, 6.3, 33),
(6510632, 6.7, 13),
(6859022, 5.8, 14),
(8010444, 7.2, 35),
(8446672, 6.7, 18),
(10872600, 8.6, 8888);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `movie_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`movie_id`, `person_id`) VALUES
(145487, 1497),
(145487, 379),
(145487, 353),
(145487, 290556),
(316654, 1497),
(316654, 379),
(316654, 547),
(316654, 290556),
(413300, 1497),
(413300, 379),
(413300, 333410),
(413300, 2006),
(948470, 1940449),
(948470, 1297015),
(948470, 406975),
(948470, 451234),
(10443172, 9060711),
(10443172, 8500687),
(10443172, 9180736),
(10443172, 10235918),
(10778364, 10900602),
(10778364, 10900601),
(10782740, 12908953),
(10782740, 10900332),
(10782740, 10919908),
(10782740, 12919025),
(10782740, 7121570),
(10782740, 10902146),
(10782740, 8416563),
(10782740, 10900333),
(10782740, 10900340),
(10974542, 10994570),
(10974542, 10556891),
(10974542, 10707369),
(10974542, 10994566),
(11022238, 11016904),
(11022238, 11016885),
(11022238, 11016886),
(11022238, 11016894),
(11579056, 11260381),
(11579056, 11260380),
(12291314, 11506551),
(12291314, 11506552),
(12291314, 10179566),
(12291314, 11506550),
(12767902, 11762833),
(12767902, 11762834),
(12767902, 11764772),
(12767902, 11764773),
(13154232, 50547),
(13154232, 1975),
(13154232, 1643074),
(13904644, 10584127),
(13904644, 12278238),
(13904644, 10641203),
(13904644, 12435095),
(15477560, 5567049),
(15477560, 9631228),
(1872181, 1940449),
(1872181, 1297015),
(1872181, 4937),
(1872181, 316079),
(2250912, 4043618),
(2250912, 474),
(2250912, 375),
(2250912, 673),
(4321248, 7155492),
(4321248, 7155493),
(4321248, 7157814),
(4321248, 7025442),
(4633694, 4271336),
(4633694, 2159926),
(4633694, 2794962),
(4633694, 991810),
(4770784, 7389973),
(4770784, 7156444),
(4770784, 7389969),
(4770784, 7156470),
(4779842, 8906135),
(4779842, 5435751),
(4779842, 8906136),
(4779842, 7890364),
(5727514, 7201417),
(5727514, 7380490),
(5727514, 8240023),
(5727514, 7155493),
(6245274, 8581503),
(6245274, 5562562),
(6245274, 5607314),
(6245274, 8581498),
(6245274, 8581499),
(6245274, 7702890),
(6318156, 7201417),
(6318156, 2805688),
(6318156, 8031855),
(6318156, 7380490),
(6320628, 4043618),
(6320628, 168),
(6320628, 350453),
(6320628, 673),
(6416304, 7201417),
(6416304, 2805688),
(6416304, 7832006),
(6416304, 7832005),
(6510632, 7380491),
(6510632, 7025442),
(6510632, 7157814),
(6510632, 8910536),
(6510632, 7155494),
(6510632, 7283971),
(6510632, 8765455),
(6510632, 8240024),
(6859022, 8973385),
(6859022, 8973387),
(6859022, 8973386),
(8010444, 7201417),
(8010444, 2805688),
(8010444, 8703456),
(8010444, 3889698),
(8151338, 9704011),
(8151338, 9704014),
(8151338, 9704015),
(8151338, 9704012),
(8151338, 9704013),
(8390388, 7201417),
(8390388, 2805688),
(8390388, 9340786),
(8390388, 8703454),
(8390388, 9826554),
(8446672, 6680484),
(8446672, 9854091),
(8446672, 7845967),
(8446672, 9854092),
(9362722, 4271336),
(9362722, 2794962),
(9362722, 4793987),
(9765564, 9937700),
(9765564, 6551884),
(9765564, 8879252),
(9765564, 5567049),
(10872600, 3918035),
(2250912, 3918035),
(10872600, 4043618),
(6320628, 3918035),
(10872600, 1212722),
(10872600, 628420),
(10872600, 1497),
(10872600, 1940449);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `directors`
--
ALTER TABLE `directors`
  ADD CONSTRAINT `directors_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `directors_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `stars`
--
ALTER TABLE `stars`
  ADD CONSTRAINT `stars_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `stars_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
