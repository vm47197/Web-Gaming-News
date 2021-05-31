-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 11:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frida_gamehubdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug_reports`
--

CREATE TABLE `bug_reports` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bug_reports`
--

INSERT INTO `bug_reports` (`id`, `type_id`, `game_name`, `message`) VALUES
(9, 5, 'Snake', 'Snake vanishes in  a split second when you navigate outside canvas! '),
(10, 7, 'Shooter', 'Scroll Bar flickers when targets are hit!'),
(11, 7, 'Shooter', 'Enemies randomly die!why?');

-- --------------------------------------------------------

--
-- Table structure for table `bug_type`
--

CREATE TABLE `bug_type` (
  `type_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bug_type`
--

INSERT INTO `bug_type` (`type_id`, `description`) VALUES
(1, 'Crash'),
(2, 'Severe'),
(3, 'General'),
(4, 'Minor'),
(5, 'Freezing'),
(6, 'Hanging'),
(7, 'Graphics Glitch'),
(8, 'Gameplay Defect'),
(9, 'In-Game Purchase'),
(10, 'Audio Problem'),
(11, 'Save Glitch'),
(12, 'End Glitch'),
(13, 'Other..');

-- --------------------------------------------------------

--
-- Table structure for table `contact_request`
--

CREATE TABLE `contact_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `date_of_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_request`
--

INSERT INTO `contact_request` (`id`, `name`, `email`, `message`, `checked`, `date_of_register`) VALUES
(82, 'Valon Marku', 'valon.ma@hotmail.com', 'Kjo faqe eshte ne rregull dhe deshta te ju pergezoj!!!', 1, '2021-05-31'),
(83, 'teste', 'test@gmail.com', 'SHUM KEQ KJO FAQE', 0, '2021-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `created_by` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `content`, `created_by`, `image`, `active`) VALUES
(21, 'Call Of Duty', 'COD', 'Call of Duty: Mobile has its own Season 2 debuting this week, while Call of Duty League congratulates its first Major Tournament winner for the 2021 season. Meanwhile, there are plenty of ways to celebrate St. Patrick’s Day, from shamrock-themed modes and in store bundles.Another thing to keep an eye out for: Face Off will move from Featured Playlists to Quick Play to make room for more modes coming later in Season Two.', 48, '60377cd2421f4COD.webp', 1),
(22, 'CyberPunk 2077', 'CuberPunk', 'Cyberpunk 2077 is a 2020 action role-playing video game developed and published by CD Projekt. The story takes place in Night City, an open world set in the Cyberpunk universe. Players assume the first-person perspective of a customisable mercenary known as V, who can acquire skills in hacking and machinery with options for melee and ranged combat. The game was developed using the REDengine 4 by a team of around 500 people, exceeding the number that worked on the studio\'s previous game The Witcher 3: Wild Hunt (2015). CD Projekt launched a new division in Wrocław, Poland, and partnered with Digital Scapes, Nvidia, QLOC, and Jali Research to aid the production. Cyberpunk creator Mike Pondsmith was a consultant, and actor Keanu Reeves has a starring role. The original score was led by Marcin Przybyłowicz, featuring the contributions of several licensed artists. CD Projekt released Cyberpunk 2077 for PlayStation 4, Stadia, Windows, and Xbox One on 10 December 2020, with PlayStation 5 and Xbox Series X/S versions planned to follow in 2021. It received praise for its narrative, setting, and graphics, although some of its gameplay elements received mixed responses. In contrast, it was widely criticized for bugs, particularly in the console versions which also suffered from performance issues; Sony removed it from the PlayStation Store on 17 December 2020.', 48, '60377e2074557Cyberpunk.jpg', 1),
(27, 'BloodBorne', 'Riot Games', 'A PS5 version of Bloodborne has reportedly been appearing for several users around the world, but there\'s a high chance it\'s a bug.\r\n\r\nOver the weekend, a user on Twitter noted that a PS5 version of Bloodborne was available on Sony\'s next-gen console. As you can see below, the user in question doesn\'t really know what to make of a PS5 version of FromSoftware\'s excellent game suddenly appearing out of nowhere on their console.FromSoftware expert modder Lance McDonald chimed in on Twitter, noting that he had previously noticed this on his PS5, and received a similar notification that a next-gen version of Bloodborne was apparently available. However, according to McDonald, this is likely a visual bug, and only happens with SKDs (software development kits), further pointing to the version being nothing more than a bug.', 50, '603c96563c4e7BloodBorne.jpg', 1),
(30, 'Assassin\'s Creed Valhalla', 'Ubisoft', 'Assassin\'s Creed Valhalla is an action role-playing video game developed by Ubisoft Montreal and published by Ubisoft. It is the twelfth major installment and the twenty-second release in the Assassin\'s Creed series, and a successor to the 2018\'s Assassin\'s Creed\r\nOdyssey. Set in 873 AD, the game recounts a fictional story during the Viking invasion of Britain. The player controls Eivor, a Viking raider who becomes embroiled in the conflict between the Brotherhood of Assassins and the Templar Order.[c] The game was released on November 10, 2020, for Microsoft Windows, PlayStation 4, Xbox One, Xbox Series X and Series S, and Stadia, while the PlayStation 5 version was released on November 12. The game received generally positive reviews from critics, who praised thegraphics and story,but criticized it for technical issues and lack of innovation.', 48, '6048d283c18beeivor-assassins-creed-valhalla-pc-games-playstation-4-3840x2160-1753.jpg', 1),
(34, 'Apex Legends will soon let solo queue, but don\'t except a fair fight', 'Riot Games', 'We\'ve all been there. You\'ve just dropped into a match of Apex Legends, only to find one of your squadmates has sprinted off on their lonesome, ready to solo every other team on the battlefieldâ€”leaving the other two at a disadvantage. Fortunately, Apex will soon let these lone wolves queue up without hindering a team, but be warnedâ€”this isn\'t exactly a proper solos mode.', 50, '6049c94579fbbapex.jpg', 1),
(35, 'A new level from Fall Guys Season 4 has been revealed', 'Jody Macgregor', 'The forthcoming Fall Guys Season 4 will have a sci-fi theme, and be called Fall Guys 4041. Because 4041 is the year it\'s setâ€”a time of rocketships, robots, and space travel if the bumblethon battle royale game show\'s recent promos are anything to go by. One of the seven new levels coming with Season 4 has been revealed, and it\'s called Skyline Stumble. ', 50, '6049c998ab210fallguys.jpg', 1),
(36, 'EA launches investigation after allegations an employee profited from FIFA 21 Ultimate Team trading', 'EA Sports', 'Right now, #EAGATE is trending on Twitter after allegations that an employee of EA has been selling FIFA 21 Ultimate Team icons directly to players. Normally these digital player cards are available in packs that have been compared to loot boxes, but some of them can also be traded over the transfer market. The tweets that set off the hashtag claim to show icons that aren\'t tradeable being purchased for hundreds of euros (in one case for â‚¬1,700, or roughly $US2,026). A video shows icons that arrived directly in the purchaser\'s game, all marked as having no previous owners.  EA has responded to these allegations with a statement, saying that it is aware of the situation. \"A thorough investigation is underway,\" it goes on, \"and if we identify improper conduct, we will take swift action. We want to be clear - this type of behavior is unacceptable, and we in no way condone what is alleged to have happened here. We understand how this creates concern about unfair balance in the game and competition. We will update the community as we get more clarity on the situation.\"', 51, '6049c9d7399b3Fifa21.jpg', 1),
(37, 'Activision details how Call of Duty: Cold War\'s Zombies Outbreak mode will actually work', 'Andy Chalk', 'Last week, Activision revealed that a \"large-scale\" Zombies mode called Outbreak is coming to Season Two of Call of Duty: Black Opsâ€”Cold War. Today it dropped a trailer showcasing the new mode in action, along with a blog post detailing how it\'s all going to work.  The trailer isn\'t much to write home about, I don\'t think: Gunfire, explosions, zombies, and generic one-liners delivered flatly by voice actors who sound like they\'re reading from the phone book, while a classic rock remix plays in the background. The blog post is a different story, however. There\'s plenty of narrative background if you\'re into that sort of thing, and more practically there\'s also a breakdown of how the new mode will actually play.', 51, '6049ca699daaacodzombieoutbreak.jpg', 1),
(38, 'Counter-Strike: Global Offensive mysteriously vanished from Steam', 'Mollie Taylor', 'A bunch of store pages for Steam games bizarrely vanished earlier today, including the store page for Counter-Strike: Global Offensive.  As noted by VGC24/7, a quick glance at SteamDB will show that all promotional screenshots, videos, Steam achievements, and store description for CS:GO all disappeared one by one before the listing for the game was taken down all together. The game still appeared in search bars, but the store page was very much gone for several hours.', 51, '6049caa01b23fcsgo.jpg', 1),
(39, 'TestPost', 'Tests', 'THE BEST CONTENT', 46, '60b491fee1696front-view-sliced-tomatoes-with-cucumbers-inside-white-plate-with-green-salad-brown-food-vegetable-fresh-lunch-sald_140725-18862.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_doc`
--

CREATE TABLE `slider_doc` (
  `id` int(11) NOT NULL,
  `path_name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_doc`
--

INSERT INTO `slider_doc` (`id`, `path_name`, `content`) VALUES
(1, 'gamingevent1.jpg', 'Meet Up Gaming  Online Event'),
(2, 'gamingevent2.jpg', 'Bege Expo Event'),
(3, 'gamingevent3.jpg', 'Game Developer Colorado Meet Up'),
(4, 'gamingevent4.jpg', 'London Games Event'),
(5, 'gamingevent5.jpg', 'RebQot Gaming Event');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`, `role`, `active`) VALUES
(38, 'valon', 'Valon Marku', 'valon.ma@hotmail.com', '12345678', 'User', 1),
(46, 'Admin', 'Admin Admin', 'admin@gmail.com', '12345678', 'Admin', 1),
(47, 'User', 'User User', 'user@gmail.com', '12345678', 'User', 1),
(48, 'Retila', 'Retila Ramadani', 'retila@gmail.com', '12345678', 'User', 1),
(50, 'Gjylasfije', 'Gjylasfije Pulti', 'gjylafsije@gmail.com', '12345678', 'User', 1),
(51, 'Profi', 'Profi Betim', 'profi@gmail.com', '12345678', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `website_data`
--

CREATE TABLE `website_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_data`
--

INSERT INTO `website_data` (`id`, `name`, `content`) VALUES
(1, 'Gamehub', 'Our team is made of young,ambitious and hard-working Computer Science majors.\r\n				What brought us together is a project that required us to create our first website from sratch.We\r\n				learned together through the process\r\n				basic html,css,js and php knowledge and did our best to succeed at it.We created a gaming website and\r\n				got the highest grade.That really\r\n				motivated us and kept us going until we created our very own masterpiece \"Web-Gaming-News\".This website\r\n				contains the lates news which\r\n				are updated everyday,and some fun little games to keep our audience entertained.\r\n\r\n				We have a group of journalists who take care of our page.There are many fields of journalism, including\r\n				the niche discipline of video\r\n				game journalism. This type of journalism connects us to the audience by providing up-to-date news\r\n				coverage on development\r\n				and trusted opinions on upcoming or just released games and systems.If you have good writing skills and\r\n				interest in the gaming\r\n				community while also wanting to pursue a career in journalism,feel free to contact us.\r\n			');

-- --------------------------------------------------------

--
-- Table structure for table `web_members`
--

CREATE TABLE `web_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_role` varchar(255) NOT NULL,
  `about_content` varchar(501) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_members`
--

INSERT INTO `web_members` (`id`, `name`, `company_role`, `about_content`, `img`) VALUES
(1, 'Gjylasfije Pulti', 'Manager', 'is the founder and manager of Web-Gaming-News.Her love for technology started at an early age,later on resulting on a computer science degree.She was very interested and loved the gaming world so she wanted to build a like-minded community in a form of a ', 'imageone.jpg'),
(5, 'Reetila Ramadani', 'Article Writer', 'is a young succesful woman who graduated computer science and english.She is the one who writes about the latest game trends and gaming news.Retila makes sure the news are 100% accurate and real.Her articles have been on \"the most read\" list many times.She accepts all feedback and makes sure to keep our followers happy.', 'imagethree.jpg'),
(6, 'Valon Marku', 'Manager', 'is the co-founder and manager of Web-Gaming-News.He mostly manages the website,builds new and interesting games which attract our followers and makes sure everything is going in the right direction.He graduated computer science,but is now working in his phD.Valon is always happy to accept new request about any game you would like to see on our website!', 'imagetwo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bug_reports`
--
ALTER TABLE `bug_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `bug_type`
--
ALTER TABLE `bug_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `contact_request`
--
ALTER TABLE `contact_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_doc`
--
ALTER TABLE `slider_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_data`
--
ALTER TABLE `website_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_members`
--
ALTER TABLE `web_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bug_reports`
--
ALTER TABLE `bug_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bug_type`
--
ALTER TABLE `bug_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_request`
--
ALTER TABLE `contact_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `slider_doc`
--
ALTER TABLE `slider_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `website_data`
--
ALTER TABLE `website_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_members`
--
ALTER TABLE `web_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bug_reports`
--
ALTER TABLE `bug_reports`
  ADD CONSTRAINT `bug_reports_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `bug_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
