-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 04:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Infinity_Dreams_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `book_ID` int(11) NOT NULL,
  `book_Type_ID` int(11) NOT NULL,
  `book_Name` text NOT NULL,
  `book_Title` text NOT NULL,
  `book_Genre` text NOT NULL,
  `book_Author` text NOT NULL,
  `book_Level` text NOT NULL,
  `book_Image` text NOT NULL,
  `book_Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`book_ID`, `book_Type_ID`, `book_Name`, `book_Title`, `book_Genre`, `book_Author`, `book_Level`, `book_Image`, `book_Link`) VALUES
(1, 0, 'A Journey to The Center of The Earth', 'A Journey to The Center of The Earth', 'Adventure', 'Jules Verne', 'Diamond', 'A Journey to The Center of The Earth (Adventure).jpg', 'https://manybooks.net/book/123181/read#epubcfi(/6/2[pg-header]!/4/2[the-three-musketeers]/2/2/1:0)'),
(2, 0, 'The Lost World', 'The Lost World', 'Adventure', 'Arthur Conan Doyle', 'Diamond', 'The Lost World (Adventure).jpg', 'https://manybooks.net/titles/doyleartetext94lostw10.html'),
(3, 0, 'Return To Atlantis', 'Return To Atlantis', 'Adventure', 'Charley Vaz', 'Diamond ', 'Return To Atlantis (Adventure).jpg', 'https://www.wattpad.com/story/54909794-return-to-atlantis'),
(4, 0, 'Fall of The Spectrum', 'Fall of The Spectrum', 'Adventure', 'Shannon Rohrer', 'Diamond', 'Fall of The Spectrum (Adventure).jpg', 'https://www.wattpad.com/story/174541662-fall-of-the-spectrum'),
(5, 0, 'The Three Musketeers', 'The Three Musketeers', 'Adventure', 'Alexandre Dumas', 'Diamond', 'The Three Musketeers (Adventure).jpg', 'https://manybooks.net/book/123181/read#epubcfi(/6/2[pg-header]!/4/2[the-three-musketeers]/2/2/1:0)'),
(6, 0, 'The Grandmaster Of Demonic Cultivation', 'The Grandmaster Of Demonic Cultivation', 'Ancient', 'Mo Xiang Tong Xiu', 'Diamond', 'The Grandmaster Of Demonic Cultivation (Ancient Historical).jpg', 'https://exiledrebelsscanlations.com/novels/grandmaster-of-demonic-cultivation/'),
(7, 0, 'Phoenix of the Nine Heavens', 'Phoenix of the Nine Heavens', 'Ancient', 'Feng Yu Jiu Tian', 'Diamond', 'Phoenix of the Nine Heavens (Ancient Historical).jpg', 'https://www.wattpad.com/story/129706858?utm_source=ios&utm_medium=airdrop&utm_content=story_info&wp_page=story_details&wp_uname=SuHninLwin&wp_originator=BkEQbRtLFFQSZhy83aMrlP9BurWhA4S%2FPBy1haJ4lRY88lMVu2z2VyApP2lQ4o2o0I89r7fh4ksEDIUtuEz2Q0KYHQNmcBNfMngQo8aaKkWoqAU0A09RSUAwuuKblX8i&_branch_match_id=818719112415180309'),
(8, 0, 'The Scum Villain\'s Self Saving System', 'The Scum Villain\'s Self Saving System', 'Ancient', 'Mo Xiang Tong Xiu', 'Diamond', 'The Scum Villain Self Saving System (Ancient Historical).jpg', 'https://www.wattpad.com/story/229082961?utm_source=ios&utm_medium=airdrop&utm_content=story_info&wp_page=story_details&wp_uname=SuHninLwin&wp_originator=wV%2FwPVB26sfNpO%2BHKKRjaDls0uRiSfs6sBRman6hjlLG9KWSh12ei0wBruUG7Vs1f2wz5m8yPd7WEcBMGJoZx5UG1x30SSXqDXdPzsctIL61tUvhCKdELjUkn0b%2Bj7x6&_branch_match_id=818719112415180309'),
(9, 0, 'The Deviant Path to Olympus', 'The Deviant Path to Olympus', 'Ancient', 'Jonathan Vilario', 'Diamond', 'The Deviant Path to Olympus (Ancient Historical).jpg', 'https://www.wattpad.com/story/169004062?utm_source=ios&utm_medium=airdrop&utm_content=story_info&wp_page=story_details&wp_uname=SuHninLwin&wp_originator=TOATm5ByUxlcGr9ieFMtNUtqTOr%2BbaR7266%2BIwssxUDN%2F0xhpRzpPheGi9o9NtVambPuQ%2B9%2F6M23efPaoWtRIcaYNCfNmQ85uNeOHUsX6IIDOKReUTZitMIUTgyBNt66&_branch_match_id=818719112415180309'),
(10, 0, 'The Demon Commander\'s Runaway Consort', 'The Demon Commander\'s Runaway Consort', 'Ancient', 'Chu Chu Senpai', 'Diamond', 'The Demon Commander Runaway Consort (Ancient Historical).jpg', 'https://www.wattpad.com/story/155246380?utm_source=ios&utm_medium=airdrop&utm_content=story_info&wp_page=story_details&wp_uname=SuHninLwin&wp_originator=GusrG7dbTWOcmFtFtP%2BnjaZJMtJ31j76kcwB%2ByCt5rbtWYHRALZFEC7hoqjpZwl7yLdqA5F%2Fp62d8dvTEHSVqYGF5gQpZx%2F964a4e63OeNBjNVZx7RwuuDJrfU5Lnv1M&_branch_match_id=818719112415180309'),
(11, 0, 'The Ultimate Sacrifice', 'The Ultimate Sacrifice', 'Fantasy', 'Anthony Fields', 'Diamond', 'The Ultimate Sacrifice (Fantasy).jpg', 'https://manybooks.net/book/230146/read#epubcfi(/6/2[CoverImage]!/4/1:0)'),
(12, 0, 'The Kindly One', 'The Kindly One', 'Fantasy', 'Jonathan Littell', 'Diamond', 'The Kindly One (Fantasy).jpg', 'https://www.wattpad.com/story/77967973-the-kindly-one'),
(13, 0, 'The Adventure of Pinocchio', 'The Adventure of Pinocchio', 'Fantasy', 'Carlo Collodi', 'Diamond', 'The Adventure of Pinocchio (Fantasy).jpg', 'https://manybooks.net/book/132848/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(14, 0, 'Souls and Shadows', 'Souls and Shadows', 'Fantasy', 'Joynell Schultz', 'Diamond', 'Souls and Shadows (Fantasy).jpg', 'https://www.wattpad.com/story/178236895-souls-and-shadows'),
(15, 0, 'Dark Promise', 'Dark Promise', 'Fantasy', 'Juli Crane and Talia Jager', 'Diamond', 'Dark Promise (Fantasy).jpg', 'https://manybooks.net/book/230141/read#epubcfi(/6/4[html31]!/4/1:0)'),
(16, 0, 'Three Men In A Boat', 'Three Men In A Boat', 'Humor', 'Jerome K. Jerome', 'Diamond', 'Three Men In A Boat (Humor).jpg', 'https://manybooks.net/book/124687/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(17, 0, 'The Adventure of Tom Sawyer', 'The Adventure of Tom Sawyer', 'Humor', 'Mark Twain', 'Diamond', 'The Adventure of Tom Sawyer (Humor).jpg', 'https://manybooks.net/book/127534/read#epubcfi(/6/2[coverpage-wrapper]!/4/1:0)'),
(18, 0, 'Emma', 'Emma', 'Humor', 'Jane Austen', 'Diamond', 'Emma (Humor).jpg', 'https://manybooks.net/book/121571/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(19, 0, 'Buddy Holly Is Alive And Well On Ganymede', 'Buddy Holly Is Alive And Well On Ganymede', 'Humor', 'Bradley Denton', 'Diamond', 'Buddy Holly Is Alive And Well On Ganymede (Humor).jpg', 'https://manybooks.net/book/144834/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(20, 0, 'Adventures of Huckleberry Finn', 'Adventures of Huckleberry Finn', 'Humor', 'Mark Twain', 'Diamond', 'Adventures of Huckleberry Finn (Humor).jpg', 'https://manybooks.net/book/127533/read#epubcfi(/6/2[coverpage-wrapper]!/4/1:0)'),
(21, 0, 'The Almost Perfect Murder', 'The Almost Perfect Murder', 'Mystery', 'Hulbert Footner', 'Diamond', 'The Almost Perfect Murder (Mystery Detective).jpg', 'https://manybooks.net/book/148923/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(22, 0, 'The Adventure of Sherlock Holmes', 'The Adventure of Sherlock Holmes', 'Mystery', 'Arthur Conan Doyle', 'Diamond', 'The Adventure of Sherlock Holmes (Mystery Detective).jpg', 'https://manybooks.net/book/123108/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(23, 0, 'S.C.I', 'S.C.I', 'Mystery', 'Liu Ci Xin', 'Diamond', 'S.C.I (Mystery Detective).jpg', 'https://www.wattpad.com/story/181924394-s-c-i-谜案集-mystery-special-criminal-investigation'),
(24, 0, 'Guardian', 'Guardian', 'Mystery', 'Qi Xiaoyu, Ye Fangzhou and Hua Liang', 'Diamond', 'Guardian (Mystery Detective).jpg', 'https://www.wattpad.com/story/167202478-guardian-the-lost-world'),
(25, 0, 'Arson Plus', 'Arson Plus', 'Mystery', 'Dashiell Hammett', 'Diamond', 'Arson Plus (Mystery Detective).jpg', 'https://manybooks.net/book/130539/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(26, 0, 'The Adventures of Odysseus and The Tales', 'The Adventures of Odysseus and The Tales', 'Myths', 'Padraic Colum', 'Diamond', 'The Adventures of Odysseus and The Tales (Myths).jpg', 'https://manybooks.net/book/131152/read#epubcfi(/6/2[item84]!/4/2/1:0)'),
(27, 0, 'Legends of Gods and Ghosts Hawaiian Mythology', 'Legends of Gods and Ghosts Hawaiian Mythology', 'Myths', 'William Drake Westervelt', 'Diamond', 'Legends of Gods and Ghosts Hawaiian Mythology (Myths).jpg', 'https://manybooks.net/book/151041/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(28, 0, 'Legends of Charlemagne', 'Legends of Charlemagne', 'Myths', 'Thomas Bulfinch', 'Diamond', 'Legends of Charlemagne (Myths).jpg', 'https://manybooks.net/book/122148/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(29, 0, 'A Book Of Nature Myths', 'A Book Of Nature Myths', 'Myths', 'Florence Holbrook', 'Diamond', 'A Book Of Nature Myths (Myths).jpg', 'https://manybooks.net/book/138159/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(30, 0, 'A Book Of Myths', 'A Book Of Myths', 'Myths', 'Jean Jean Lang', 'Diamond', 'A Book Of Myths (Myths).jpg', 'https://manybooks.net/book/138441/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(31, 0, '20,000 Leagues Under the Sea', '20,000 Leagues Under the Sea', 'Nature', 'Jules Verne', 'Diamond', '20,000 Leagues Under the Sea (Nature).jpg', 'https://manybooks.net/book/127649/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(32, 0, 'Whales, Dolphins, and Porpoises of the Western North Atlantic', 'Whales, Dolphins, and Porpoises of the Western North Atlantic', 'Nature', 'Stephen Caldwell', 'Diamond', 'Whales, Dolphins, and Porpoises of the Western North Atlantic (Nature).jpg', 'https://manybooks.net/book/167723/read#epubcfi(/6/2[id00000]!/4/2[id00000]/1:0)'),
(33, 0, 'The White Waterfall ', 'The White Waterfall ', 'Nature', 'James Francis Dwyer', 'Diamond', 'The White Waterfall (Nature).jpg', 'https://manybooks.net/book/143462/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(34, 0, 'Wildlife On The Rockies', 'Wildlife On The Rockies', 'Nature', 'Enos Mills', 'Diamond', 'Wildlife On The Rockies (Nature).jpg', 'https://manybooks.net/book/143808/read#epubcfi(/6/2[coverpage-wrapper]!/4/1:0)'),
(35, 0, 'The Sea-Hawk', 'The Sea-Hawk', 'Nature', 'Rafael Sabatini', 'Diamond', 'The Sea-Hawk (Nature).jpg', 'https://manybooks.net/book/126661/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(36, 0, 'Criminal Psychology', 'Criminal Psychology', 'Psychology', 'David V. Canter and 18 others', 'Diamond', 'Criminal Psychology (Psychology).jpg', 'https://manybooks.net/book/123818/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(37, 0, 'The Analysis Of Mind', 'The Analysis Of Mind', 'Psychology ', 'Bertrand Russell', 'Diamond', 'The Analysis Of Mind (Psychology).jpg', 'https://manybooks.net/book/126632/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(38, 0, 'Dream Psychology', 'Dream Psychology', 'Psychology', 'Sigmund Freud', 'Diamond', 'Dream Psychology (Psychology).jpg', 'https://manybooks.net/book/130505/read#epubcfi(/6/2[item3]!/4/2/1:0)'),
(39, 0, 'The Power Of Mental Imagery', 'The Power Of Mental Imagery', 'Psychology', 'Warren Hilton', 'Diamond', 'The Power Of Mental Imagery (Psychology).jpg', 'https://manybooks.net/book/138222/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(40, 0, 'A Mind That Found Itself', 'A Mind That Found Itself', 'Psychology', 'Clifford Whittingham Beers', 'Diamond', 'A Mind That Found Itself (Psychology).jpg', 'https://manybooks.net/book/133470/read#epubcfi(/6/2[item3]!/4/2/1:0)'),
(41, 0, 'Alien Pets', 'Alien Pets', 'Science Fiction', 'Trisha McNary', 'Diamond', 'Alien Pets (Science Fiction).jpg', 'https://manybooks.net/book/230481/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(42, 0, 'The War Of The Worlds', 'The War Of The Worlds', 'Science Fiction', 'H. G. Wells', 'Diamond', 'The War Of The Worlds (Science Fiction).jpg', 'https://manybooks.net/book/127841/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(43, 0, 'The God Of Mars', 'The God Of Mars', 'Science Fiction', 'Edgar Rice Burroughs', 'Diamond', 'The God Of Mars (Science Fiction).jpg', 'https://manybooks.net/book/141234/read#epubcfi(/6/2[item4]!/4/2/1:0)'),
(44, 0, 'The Strange Case of Dr. Jekyll and Mr. Hyde', 'The Strange Case of Dr. Jekyll and Mr. Hyde', 'Science Fiction', 'Robert Louis Stevenson', 'Diamond', 'The Strange Case of Dr. Jekyll and Mr. Hyde (Science Fiction).jpg', 'https://manybooks.net/book/127162/read#epubcfi(/6/2[titlepage]!/4/1:0)'),
(45, 0, 'From The Earth To The Moon', 'From The Earth To The Moon', 'Science Fiction', 'Jules Verne', 'Diamond', 'From The Earth To The Moon (Science Fiction).jpg', 'https://manybooks.net/book/127657/read#epubcfi(/6/2[titlepage]!/4/1:0)');

-- --------------------------------------------------------

--
-- Table structure for table `BookDescription`
--

CREATE TABLE `BookDescription` (
  `book_Type_ID` int(11) NOT NULL,
  `book_Type_Name` text NOT NULL,
  `book_Publisher` text NOT NULL,
  `book_Series_No` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ReadingList`
--

CREATE TABLE `ReadingList` (
  `readingList_ID` int(11) NOT NULL,
  `book_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ReadingList`
--

INSERT INTO `ReadingList` (`readingList_ID`, `book_ID`, `user_ID`, `date`) VALUES
(126, 22, 15, '2020-08-29'),
(128, 27, 15, '2020-08-29'),
(129, 5, 13, '2020-08-29'),
(130, 27, 13, '2020-08-29'),
(135, 5, 2, '2020-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_ID` int(11) NOT NULL,
  `user_Name` text NOT NULL,
  `user_Email` text NOT NULL,
  `user_Password` text NOT NULL,
  `user_Level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_ID`, `user_Name`, `user_Email`, `user_Password`, `user_Level`) VALUES
(1, 'Cindy', 'Cindy@gmail.com', 'Admin123', 'Admin'),
(2, 'Su Su', 'Su@gmail.com', 'User123', 'User'),
(3, 'Mya Mya', 'Mya@gmail.com', 'User123', 'User'),
(13, 'Din Yu', 'Din@gmail.com', 'User123', 'User'),
(14, 'Mark', 'Mark@gmail.com', 'User123', 'User'),
(15, 'Wendy', 'Wendy@gmail.com', 'User123', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`book_ID`),
  ADD KEY `book_Type_ID` (`book_Type_ID`);

--
-- Indexes for table `BookDescription`
--
ALTER TABLE `BookDescription`
  ADD PRIMARY KEY (`book_Type_ID`);

--
-- Indexes for table `ReadingList`
--
ALTER TABLE `ReadingList`
  ADD PRIMARY KEY (`readingList_ID`),
  ADD KEY `book_ID` (`book_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Book`
--
ALTER TABLE `Book`
  MODIFY `book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ReadingList`
--
ALTER TABLE `ReadingList`
  MODIFY `readingList_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BookDescription`
--
ALTER TABLE `BookDescription`
  ADD CONSTRAINT `bookdescription_ibfk_1` FOREIGN KEY (`book_Type_ID`) REFERENCES `Book` (`book_Type_ID`);

--
-- Constraints for table `ReadingList`
--
ALTER TABLE `ReadingList`
  ADD CONSTRAINT `readinglist_ibfk_1` FOREIGN KEY (`book_ID`) REFERENCES `Book` (`book_ID`),
  ADD CONSTRAINT `readinglist_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `User` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
