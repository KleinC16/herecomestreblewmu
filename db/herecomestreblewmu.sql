-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 05:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herecomestreblewmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bios`
--

DROP TABLE IF EXISTS `bios`;

CREATE TABLE `bios` (
  `biosid` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `position` varchar(16) DEFAULT NULL,
  `classification` varchar(42) NOT NULL,
  `major` varchar(64) NOT NULL,
  `description` varchar(576) NOT NULL,
  `complete` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bios`
--

INSERT INTO `bios` (`biosid`, `username`, `position`, `classification`, `major`, `description`, `complete`, `image`) VALUES
(1, 'briana.klug', 'Secretary', 'Soprano', 'Elementary Eductaion', 'I\'m from Muskegon, Michigan and currently in my fourth year at WMU. I love: singing, teaching, learning, and traveling. I\'ve enjoyed being a part of such a beautiful a capella group since its foundation and watching our continual growth.', 1, 'assets/images/users/briana.klug.jpg'),
(2, 'christopher.frego', 'President', 'Alto', 'Engineering Design Technology', 'I have been singing/performing for over 7 years now, from show choir, to dance, to singing. I come from a long line of musicians and music lovers, so music has been a keystone in my life. I still have three years left of school, but I plan to stay in Here Comes Treble every step!', 1, 'assets/images/users/christopher.frego.jpg'),
(3, 'maddie.pierce', 'Vice President', 'Alto', 'Photography & Intermedia', 'I love TV shows, art, and creating art, music, and singing! I have a year and a half left of school and I\'m eager to see where life takes me. Here Comes Treble has been such a huge part of my college experience and I\'m so happy and proud to be a part of this wonderful creation of an a capella group. I truly love my HCT family!', 1, 'assets/images/users/maddie.pierce.jpg'),
(4, 'anna.sitar', 'Treasurer', 'Alto', 'Mechanical Engineering', 'Hi friends! I am originally from Marshall, MI. I am an avid photographer and videographer and adore getting to know new people. I joined Here Comes Treble in 2016 at the start of the group and fell in love with not only its members but the way making music with these amazing humans felt. I can\'t wait to continue my a capella career this year!', 1, 'assets/images/users/anna.sitar.jpg'),
(5, 'emma.dunlop', 'Music Director', 'Alto', 'Acting Performance', 'I\'m a Junior at WMU. I\'m the token Canadian in the group! I love theatre, music, and anything to do with the arts. I\'m so lucky to be in such an amazing a capella group and make amazing music every week!', 1, 'assets/images/users/emma.dunlop.jpg'),
(6, 'niang.siam', NULL, 'Alto', 'Elementary Education', 'I\'m a Sophomore at WMU. I\'m originally from Myanmar (Burma). I love music, singing, and artistic people. In my free time I watch movies, hang out with babies, or do community service. I feel blessed to be part of this group because it made me feel more confident about myself. I\'m glad I joined Here Comes Treble a capella group.', 1, 'assets/images/users/niang.siam.jpg'),
(7, 'ryan.loney', NULL, 'Beatboxer, Backup Dancer, Group Hypeman', 'Sales and Business Marketing', 'I am from Kalamazoo, MI. My first love is sports, especially football and rugby, however I have discovered new passion since joining HCT as a Sophomore in the Winter of 2016. Outside of sports and HCT I love reading, watching movies, and giving all my love to my puppies.', 1, 'assets/images/users/ryan.loney.jpg'),
(8, 'kylee.wheeler', NULL, 'Alto', 'Secondary Education, English and Earth Science', 'I\'m a Freshman at WMU! I\'ve been singing as long as I can remember and I absolutely love being in Here Comes Treble! In the few weeks I\'ve been here, HCT has been such a kind, welcoming family and I wouldn\'t want to be anywhere else. When I\'m not singing, I love to read, listen to music, watch America\'s Next Top Model, and tend to my bees. I\'m so happy to be part of a community filled with so much support and positivity. I love being a part of this group!!', 1, 'assets/images/users/kylee.wheeler.jpg'),
(9, 'chelsea.chavez', NULL, 'Alto', 'Business and Communications', 'I love writing poetry, playing guitar, and crafting/upscaling clothing, jewelry, and furniture. I am 23 years old with an ever-growing passion for creating art including music. Here Comes Treble is my first experience in an a capella group and I am so thrilled to grow with everyone.', 1, 'assets/images/users/chelsea.chavez.jpg'),
(10, 'ophelia.williams', NULL, 'Alto', 'Pyschology', 'I\'m a freshamn at WMU. I love music with all my heart and am blessed to be in an amazing a capella group. I was born into a very musical family and have been singing since birth. When I\'m not singing I love to read, write, dance, and watch TV. I plan to stay in the group HCT for the rest of my college career because since I\'ve joined HCT I\'ve met so many amazing people and have made amazing memories that will last a lifetime. I love this group and am blessed to have the opportunity to sing with them!', 1, 'assets/images/users/ophelia.williams.jpg'),
(11, 'elizabeth.taylor', NULL, 'Alto', 'Public Relations', 'I love to sing and am an excitable ball of energy. I aspire to be happy in whatever career I choose. In addition to this, I would hope to leave the world better than when I came in it. I love food! Here Comes Treble is awesome, so I look forward to great things with the group.', 1, 'assets/images/users/elizabeth.taylor.jpg'),
(12, 'jillian.brown', NULL, 'Soprano', 'English Rhetoric and Writing Studies', 'I have been singing for the majority of my life and I cannot think of a better way to spend my free time! I love all things musical, as well as theatre, reading, animals, watching The Office, and spending time with my cats. Shout out to my AMAZING family for always supporting my crazy dreams and for not kicking me out of the house every time I refused to stop singing Les Mis music at the top of my lungs. I love love LOVE  my Treble family and I\'m so excited to make some SICK music with these peeps this year', 1, 'assets/images/users/jillian.brown.jpg'),
(13, 'cat.vaught', NULL, 'Soprano', 'Political Science', 'I am a Freshman here at Western. I\'m originally from Traverse City, Michigan. I love musical theatre and I am super passionate about politics. I\'m so excited to be a part of Here Comes Treble this year and I\'m so happy it comes with so many great connections and relationships as well!', 1, 'assets/images/users/cat.vaught.jpg'),
(14, 'kitty.clark', NULL, 'Soprano', 'Vocal Performance', 'I am a Freshman at WMU. I\'ve been performing since I can remember and I\'m so happy to be a part of HCT! When I\'m not signing, I love to read, do community service, and watch movies. I could not imagine a better group of people to perform with and I\'m so thankful to have met these amazing people!', 1, 'assets/images/users/kitty.clark.jpg'),
(15, 'kailyn.riebe', NULL, 'Soprano', 'Secondary Education', 'I am from Berkley, Michigan. I am a Sophomore at Western. I have done theatre since I was eight years old, dance since I was three ears old, and singing a good majority of my life. I love the performing arts in general, it is a passion of mine. I am really excited to be a part of Here Comes Treble, I feel like I am already a part of a family. They even tolerate my bad dance moves! I am so lucky to have the opportunity to make music alongside all of these amazingly talented people!', 1, 'assets/images/users/kailyn.riebe.jpg'),
(16, 'meggie.anderson', NULL, 'Soprano', 'Education, WMU Grad', 'I\'m a WMU graduate. I\'ve been a musical theatre kid since way back. While other kids in gym class were strategizing how to win the sports games, I was in the outfield choreographing dances and picking dandelions. In my freetime I like to read books about magic and mysteries. I love our a capella group because I think it\'s so important to have a good group of genuine, no-drama friends, and it\'s even cooler when we all have a love of singing in common!', 1, 'assets/images/users/meggie.anderson.jpg'),
(17, 'haley.schnoor', NULL, 'Alto', 'Special Education', 'I\'m a super super Senior after chaning my major, but I\'ve finally found my niche. I love music, dramatic TV shows, reading, Taco Bell, and snuggling my cat. I am thrilled to be a part of HCT this year and I already love it!', 1, 'assets/images/users/haley.schnoor.jpg'),
(18, 'noah.jahn', 'Test', 'asdf', 'asdf', 'I\'m from Muskegon, Michigan and currently in my fourth year at WMU. I love: singing, teaching, learning, and traveling. I\'ve enjoyed being a part of such a beautiful a capella group since its foundation and watching our continual growth.', 1, 'assets/images/users/Jahn,Noah_0764E.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

DROP TABLE IF EXISTS `configurations`;

CREATE TABLE `configurations` (
  `website_name` varchar(32) NOT NULL,
  `header_image` varchar(128) NOT NULL,
  `home_description` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`website_name`, `header_image`, `home_description`) VALUES
('Here Comes Treble', 'home', 'an a capella group at Western Michigan University focused on growth and friendship. With members that share a strong passion for music, we are dedicated to bringing our audience the most moving experience possible. We sing for the love of singing, and showcase all of our members through compromise and flexibility.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `post_title` varchar(64) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_author` varchar(64) NOT NULL,
  `post_description` varchar(512) NOT NULL,
  `post_tags` varchar(64) NOT NULL,
  `post_likes` int(11) NOT NULL DEFAULT '0',
  `post_dislikes` int(11) NOT NULL DEFAULT '0',
  `post_image` varchar(256) NOT NULL,
  `post_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `post_title`, `post_date`, `post_author`, `post_description`, `post_tags`, `post_likes`, `post_dislikes`, `post_image`, `post_views`) VALUES
(1, 'My First Post', '2018-12-02 00:00:00', 'noah.jahn', 'This is my very first post and my very first post description. I hope you like this image as much as I do.', 'test,tag,cool,awesome', 10000, 99999999, 'assets/images/gallery/bongo-cat.jpg', 5),
(2, 'My second post', '2018-12-02 00:00:00', 'noah.jahn', 'this is my second post!', 'second,post', 448, 5557, 'assets/images/gallery/699169.jpg', 71),
(3, 'Juicy', '2018-12-01 00:00:00', 'noah.jahn', 'This is my third juicy post.', 'juicy', 88888, 0, 'assets/images/gallery/Fun.jpg', 0),
(4, 'Yet another post', '2018-11-30 00:00:00', 'noah.jahn', 'This is another post that I did', 'another,poost', 1111, 838383, 'assets/images/gallery/Spiderman_png_by_captainjackharkness-d5cbru1.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_comments`
--

DROP TABLE IF EXISTS `gallery_comments`;

CREATE TABLE `gallery_comments` (
  `cid` int(11) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `gid` int(11) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_comments`
--

INSERT INTO `gallery_comments` (`cid`, `comment`, `gid`, `username`) VALUES
(1, 'This is a comment on this photo.', 2, 'noah.jahn'),
(2, 'I am also commenting on this post.', 2, 'noah.jahn'),
(3, 'last comment.', 2, 'noah.jahn'),
(4, 'new comment', 1, 'noah.jahn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Briana', 'Klug', 'briana.klug@gmail.com', 'briana.klug', '123456'),
(2, 'Christopher', 'Frego', '', 'christopher.frego', '123456'),
(3, 'Maddie', 'Pierce', '', 'maddie.pierce', '123456'),
(4, 'Anna', 'Sitar', '', 'anna.sitar', '123456'),
(5, 'Emma', 'Dunlop', '', 'emma.dunlop', '123456'),
(6, 'Niang', 'Siam', '', 'niang.siam', '123456'),
(7, 'Ryan', 'Loney', '', 'ryan.loney', '123456'),
(8, 'Kylee', 'Wheeler', '', 'kylee.wheeler', '123456'),
(9, 'Chelsea', 'Chavez', '', 'chelsea.chavez', '123456'),
(10, 'Ophelia', 'Williams', '', 'ophelia.williams', '123456'),
(11, 'Elizabeth', 'Taylor', '', 'elizabeth.taylor', '123456'),
(12, 'Jillian', 'Brown', '', 'jillian.brown', '123456'),
(13, 'Cat', 'Vaught', '', 'cat.vaught', '123456'),
(14, 'Kitty', 'Clark', '', 'kitty.clark', '123456'),
(15, 'Kailyn', 'Riebe', '', 'kailyn.riebe', '123456'),
(16, 'Meggie', 'Anderson', '', 'meggie.anderson', '123456'),
(17, 'Haley', 'Schnoor', '', 'haley.schnoor', '123456'),
(21, 'Noah', 'Jahn', 'noah.a.jahn@wmich.edu', 'noah.jahn', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user_favorites`
--

DROP TABLE IF EXISTS `user_favorites`;

CREATE TABLE `user_favorites` (
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_favorites`
--

INSERT INTO `user_favorites` (`fid`, `uid`, `gid`) VALUES
(1, 21, 3),
(2, 1, 3),
(3, 21, 2),
(4, 21, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bios`
--
ALTER TABLE `bios`
  ADD PRIMARY KEY (`biosid`),
  ADD UNIQUE KEY `biosid` (`biosid`),
  ADD UNIQUE KEY `biosid_2` (`biosid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`),
  ADD UNIQUE KEY `gid` (`gid`);

--
-- Indexes for table `gallery_comments`
--
ALTER TABLE `gallery_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fid` (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bios`
--
ALTER TABLE `bios`
  MODIFY `biosid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gallery_comments`
--
ALTER TABLE `gallery_comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_favorites`
--
ALTER TABLE `user_favorites`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
