-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2016 at 07:12 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'admin',
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `role` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `salt`, `name`, `phone`, `email`, `notes`, `role`, `session_id`, `created`, `last_login`) VALUES
(1, '4d9cddb10e6527b972014e315cb213c2', 'ebba00f4ef066bb3dcb1e42b3b4f56c823fa8cc06991c0b9f30532933443272a23af4b2d4bf52a1f', 'ebba00f4ef066bb3dcb1e42b3b4f56c823fa8cc0', 'Admin Killer', '01683113211', 'admin@salmagroup.com', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 'eab7d4b98c0f60679866ee0d79224c22875b71bf', '2016-09-01', '2016-09-30'),
(4, 'cc7d7899b390cb04cc7e6f65838905b1', '7b439b39cb649b77c37c188561ca145ced86fdec0d3f3cc00ea9674d30ad0dcf791a39034ea5e457', '7b439b39cb649b77c37c188561ca145ced86fdec', 'admin', '01920420320', 'jewelbio10@gmail.com', '<p>Nothing to say ! :p</p>', 0, '', '2016-09-23', '2016-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `a_i`
--

CREATE TABLE `a_i` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `s_img_path` varchar(252) NOT NULL,
  `l_img_path` varchar(252) NOT NULL,
  `section` varchar(30) NOT NULL,
  `url` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_i`
--

INSERT INTO `a_i` (`id`, `title`, `s_img_path`, `l_img_path`, `section`, `url`) VALUES
(2, 'DSM-home', 'a788c9a9a94161852e4f0af790f6d25f.png', '', 'Home', 'page_products_3DSM'),
(3, 'TSM-home', 'fc9be6bf71c6c042990e56967a12fc78.png', '', 'Home', 'page_products_3TSM'),
(4, 'BSM-home', 'ac6eb074e15b765b395bc8adcdf69d31.png', '', 'Home', 'page_products_3BSM'),
(5, 'DSM-home', '98e93622c154ea21795ae304dac25fec.png', '', 'Home', 'page_products_3DSM'),
(6, 'img_1', '114539f76e64fb9a3d77153b531a8035.jpg', 'b5a44d7a01e71d31701299c35869a06c.jpg', 'DABIRUDDIN SPINNING MILLS LTD.', '');

-- --------------------------------------------------------

--
-- Table structure for table `a_n_e`
--

CREATE TABLE `a_n_e` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_path` varchar(252) NOT NULL,
  `type` int(2) NOT NULL DEFAULT '1',
  `date` varchar(20) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_n_e`
--

INSERT INTO `a_n_e` (`id`, `title`, `content`, `img_path`, `type`, `date`, `stat`) VALUES
(1, 'News_1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'b4262536c9843117b9b77f0000a200c3.jpg', 0, '22/07/2016', 1),
(2, 'Event_1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '99fda6bc22a636c2bbfe6dda58c46207.jpg', 1, '22/07/2016', 1),
(3, 'News_2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '201dea9c9c7830f619dcdd139334dbb1.jpg', 0, '22/07/2016', 0),
(4, 'Event_2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '4baf29b0770f5603637a1f50aea01dc1.jpg', 1, '22/07/2016', 1),
(5, 'New_Future_plan', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1d17b541411ff1f968790472b5c64683.jpg', 2, '22/07/2016', 0),
(6, 'Job_vacancy_1', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example', 'page_blog_2a.png', 3, '22/07/2016', 1),
(7, 'Suraiya Spinning Mills Ltd.', 'The next project of Salma Group is `Suraiya Spinning Mills Ltd.’.  The required land of the project has already been bought at Guzium, Trishal of Mymensingh. It is going to be established adjacent to the existing `Dabiruddin Spinning Mills Ltd.’.  Suraiya Spinning Mills Ltd. is planned to have 1,05,000 spindles capacity. The management has already finalised the bank formalities & the construction of the factory building will commence very soon.', 'fp1.jpg', 1, '23/07/2016', 1),
(8, 'Humaira Spinning Mills Ltd.', 'Salma Group has also planned to establish another spinning mills named `Humaira Spinning Mills Ltd.’ The required land has already been bought adjacent to the existing Dabiruddin Spinning Mills Ltd. This factory will have about 60,000 spindles. In this regard the management already initiated necessary correspondence with bank and other concerns.', 'fp1.jpg', 1, '23/07/2016', 1),
(13, 'Switch On & Test Run Of Dabiruddin Spinning Mills ', '<p>Recently Dabiruddin Spinning Mills Ltd. has gone into operation. Prior to that on 30.01.2016 the Managing Director & Chief Executive Officer Chowdhury Mohammed Hanif has inaugurated the switching on and test run of the factory. Mentionable that Dabiruddin Spinning Mills Ltd. is running on 4.5 MW electric power through Rural Electrification Board (REB). The factory is built with latest machineries having 80,000 spindle capacities. It is build over huge area having maximum green & vegetation.</p>', 'c37b8363230a1abd959914e140e4011f.jpg', 1, '27/08/2016', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_path` varchar(252) NOT NULL,
  `location` varchar(100) NOT NULL DEFAULT 'Dhaka',
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `img_path`, `location`, `date`) VALUES
(2, 'BSB Spinning Mills Ltd.', 'BSB Spinning Mills Ltd. is one of the most modern & professionally managed spinning mills in Bangladesh. It was registered as a private limited company in 2005 (Reg No.C- 56798 (3481)/05). Commercial operation of the factory started from December 2007 with an aim to meet the quality requirements of today’s most demanding yarn. BSB Spinning Mills is a backward linkage project of knitting & hosiery garments industries and entire cotton yarn is consumed by the 100% export oriented knitting and hosiery garments factories.<br>Spinning division operates 30,240 ring spindles and produces a wide range of yarns for end usage in hosiery and knitting unit. The company has the most modern automated, state of the art, manufacturing technology ; a complete range of latest programmed with high-speed ring frames, having the capacity to produce wide variety of carded yarn.<br>The machineries are all imported from well-known brands from USA, Europe and Japan like Truetzschler, Toyota, Hara, Murata, Caterpillar etc. The factory uses best quality world class raw cotton to ensure production of best quality yarn. BSB Spinning Mills Ltd. is awarded with Oeko-Tex @ Standard 100 certificate as a recognition.', 'q.jpg', 'Dhaka', '23/07/2016'),
(3, 'Dabiruddin Spinning Mills Ltd', 'Dabiruddin Spinning Mills Ltd is 100% export – oriented Spinning spmiing mills.The unit consisting of 80,640 Ring Spindles and situated at Guziam, Trishal, Mymensingh. The plant has most modern and sophisticated Brand New Machinery and equipment from Switzerland/ Germany/ Italy/Japan/ Korea/ Taiwan/ India/ USA & Europe.The factory is self-sufficient, continuous trouble free operation and also maintain smooth delivery.It is build over a huge area keeping wide open space with green natural environment<br>Spinning division operates 80,640 ring spindles and produces a wide range of yarns for end usage in hosiery and knitting unit. The company has the most modern automated,  high-speed ring frames, having the capacity to produce wide variety of carded yarn.<br>The factory uses best quality world class raw cotton to ensure production of best quality yarn.', 'q.jpg', 'Dhaka', '24/07/2016'),
(4, 'Tamijuddin Textile Mills Limited', 'Tamijuddin Textile Mills Ltd. is having a long heritage in the journey of textile mills in Bangladesh. It is one of the most modern textile mills of Bangladesh which came into operation in 19200. Through many modifications and up-gradations the factory now uses most modern machineries and produces best quality 100% export oriented different composition blended ring spun yarn of various count. Presently the company has emerged as a symbol of quality and excellence in the Textile Sector. Because of its effective management, professionalism & quality, the company is recognised as Oeko-Tex @ Standard 100 certified organisation and it is also well established in the export market with a wide product range from blended yarns which are used for Knitting.', 'q.jpg', 'Dhaka', '03/07/2016');

-- --------------------------------------------------------

--
-- Table structure for table `b_p`
--

CREATE TABLE `b_p` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `feature` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_p`
--

INSERT INTO `b_p` (`id`, `title`, `feature`, `description`, `img_path`) VALUES
(2, 'Why Choose Us?', 'World Class Raw Materials', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'cd607a8f5b867a6fd6b6cba2816b2156.png'),
(3, 'Why Choose Us?', 'Latest Machineries', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English.', 'cd607a8f5b867a6fd6b6cba2816b2156.png'),
(4, 'Quality ', 'Quality Control & Best Quality Yarn', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'cd607a8f5b867a6fd6b6cba2816b2156.png'),
(5, 'Why Choose Us?', 'Member of OEKO-TEX & BCI', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.', 'cd607a8f5b867a6fd6b6cba2816b2156.png'),
(6, 'Why Choose Us?', 'Timely Delivery', 'The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'cd607a8f5b867a6fd6b6cba2816b2156.png'),
(7, 'Why Choose Us?', 'Effective Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cd607a8f5b867a6fd6b6cba2816b2156.png'),
(8, 'Why Choose Us?', 'World Class Raw Materials', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cd607a8f5b867a6fd6b6cba2816b2156.png');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img_path` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `img_path`) VALUES
(1, 'Lantabur Group', '3be347f4287f829ae2b2f13195b7532a.png'),
(2, 'Osman Group', '8daacf31d52037508b3941ede1cf38a9.png'),
(3, 'Jaheen Knitwear Ltd.', '7c4aa7652cee66ae59148e9e1e5f51cd.png'),
(4, 'Starlet Apparels Ltd. ', '3a9b03517bf4ef7ffc170442b98547e8.png'),
(5, 'Niagra Textile', 'b3017eb88444646d3ab424fe23f26adf.png'),
(6, 'Chaity Group', '79acf46535637c75ee8c1bb1d9f6fa43.png'),
(7, 'AMA Syntex Ltd.', 'd2f0f1d4d94e2570a20a4d76f9b9f506.png'),
(8, 'M/S Knit Syndicate', '68bdc6a68ba8e805bc1f0b1b0fbc928a.png'),
(9, 'Rupashi Group', '0ea816af3e25212edacabe6278978023.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `page_heading` varchar(50) NOT NULL,
  `office_heading` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `page_heading`, `office_heading`, `address`, `phone`, `fax`, `email`) VALUES
(1, 'Where to Find Us:', 'HEAD OFFICE', 'SENA KALYAN BHABAN (11TH FLOOR), SUITE # 1101-1103, 195 MOTIJHEEL C/A, DHAKA-1000', '+8802 7122942, 7121997, 7114120, 7124088', '+8802-7122925', 'bsbspintex@salmagroup.com.bd');

-- --------------------------------------------------------

--
-- Table structure for table `f_profile`
--

CREATE TABLE `f_profile` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `info` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_profile`
--

INSERT INTO `f_profile` (`id`, `blog_id`, `heading`, `info`) VALUES
(1, 2, 'Name of Mill', 'BSB Spinning Mills Limited'),
(2, 2, 'Factory Address', 'Nishinda, Vhaluka, Mymensingh'),
(3, 2, 'Corporate Structure', 'Private Limited Company'),
(4, 2, 'Main Sponsor & Key Person', 'Chowdhury Mohammed Hanif Shoeb'),
(5, 2, 'Capacity', 'Spindles : 30,240');

-- --------------------------------------------------------

--
-- Table structure for table `g_info`
--

CREATE TABLE `g_info` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` text NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_info`
--

INSERT INTO `g_info` (`id`, `title`, `subtitle`, `section`) VALUES
(1, 'Gallery', 'The Gallery speaks about the day to day operation of the factories. \nThe viewer get a better idea about the quality of the raw materials,machineries used and the finished product of the group.', 'Home'),
(2, 'DABIRUDDIN SPINNING MILLS LTD.', 'Some picture are shown bellow to speak about the operation of the DABIRUDDIN SPINNING MILLS LTD.', 'DABIRUDDIN SPINNING MILLS LTD.'),
(3, 'TAMIJUDDIN TEXTILE MILLS LTD.', 'Some picture are shown bellow to speak about the operation of the TAMIJUDDIN TEXTILE MILLS LTD.', 'TAMIJUDDIN TEXTILE MILLS LTD.'),
(4, 'BSB SPINNING MILLS LTD.', 'Some picture are shown bellow to speak about the operation of the BSB SPINNING MILLS LTD.', 'BSB SPINNING MILLS LTD.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_path` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `name`, `content`, `img_path`) VALUES
(1, 'Managing Director & CEO', 'Chowdhury Mohammed Hanif Shoeb', '<p>A great business personality Chowdhury Mohammed Hanif Shoeb is the Managing Director & CEO of Salma Group. He is a dynamic business man having about 20 years of experience in the field of international trading, specially on trading of Raw Cotton and production of quality yarns.<br><br>He comes of a very respectable muslim family of Narayangang. His father late Dabir Uddin Chowdhury was a pioneer in Textile sector of the country. The most Modern Spinning Mills of the group “Dabiruddin Spinning Mills Ltd” is named on him.<br><br>Mr. Hanif is a regular member of FBCCI, BTMA, Dhaka Club Ltd., Kurmitola Golf Club (KGC), Gulshan Club Ltd., Narayanganj Club Ltd. & many other.</p>', 'c8858b38629c790ed32e2d1d277d93b8.png');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_path` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `title`, `subtitle`, `content`, `img_path`) VALUES
(1, 'Welcome To Salma Group', '', '<p>“Salma Group” is basically engaged in import and trading of raw cotton and producing 100% export oriented yarn through different spinning mills owned by the group.This group is a leading quality yarn producer of the country and its yarn are been used by prominent 100% export oriented knit and garments factories of the country. The spinning mills under this group is using world class raw cotton & machineries to ensure the production of best quality yarn. A dedicated group of highly experienced professionals are working day and night to keep the production uninterrupted. Most costly & best machineries and spares are used by the factories to ensure the quality of yarn. Because of effective management, motivation and professionalism this group is expanding rapidly with increased production rate and thus contributing substantially in this sector which in turn helping the country in earning foreign currency.</p>', '7cb288d6511c5ad363e3eee7ac69c8ef.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `msg` text,
  `date` varchar(255) DEFAULT NULL,
  `stat` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `phone`, `msg`, `date`, `stat`) VALUES
(243, 'Bruno', 'arcu@nonummyac.edu', '88-015-96-020184', 'et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae,', '28-12-16', 0),
(244, 'Aristotle', 'elit.Aliquam.auctor@arcuMorbi.net', '88-018-71-182195', 'ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus', '17-10-15', 1),
(245, 'Tiger', 'eu@Sedeget.ca', '88-010-11-109319', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas', '25-11-15', 1),
(246, 'Neil', 'Cum.sociis@telluslorem.ca', '88-018-10-127539', 'Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum', '26-11-16', 1),
(247, 'Lee', 'laoreet@metusInnec.net', '88-019-24-599064', 'cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor', '02-02-17', 1),
(248, 'Hall', 'ac.risus@massa.org', '88-010-53-593624', 'ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', '06-02-17', 0),
(249, 'Rigel', 'Nam.interdum.enim@urnaVivamusmolestie.co.uk', '88-010-33-593395', 'Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu.', '15-03-16', 1),
(250, 'Edward', 'elit.dictum@augue.co.uk', '88-015-76-532518', 'quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla.', '09-01-16', 0),
(251, 'Macaulay', 'in@faucibuslectusa.com', '88-016-60-896834', 'iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada', '06-05-16', 0),
(252, 'Fitzgerald', 'sagittis@liberoet.org', '88-012-30-905267', 'ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam', '25-11-15', 1),
(253, 'Cole', 'primis.in.faucibus@indolor.edu', '88-010-83-416193', 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut', '13-01-17', 0),
(254, 'Jonas', 'quis@Classaptent.ca', '88-013-38-494875', 'sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque', '13-12-15', 1),
(255, 'Robert', 'turpis.vitae@Loremipsumdolor.com', '88-015-29-709113', 'Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis', '10-12-15', 0),
(256, 'Norman', 'sit.amet.ultricies@posuerevulputate.ca', '88-017-41-161204', 'elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum purus, accumsan interdum libero', '11-02-17', 1),
(257, 'Tanner', 'Aliquam.rutrum@velquam.net', '88-019-84-682651', 'Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet', '27-11-16', 0),
(258, 'Ciaran', 'volutpat.Nulla.facilisis@nuncInat.co.uk', '88-019-41-804452', 'Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem', '21-01-16', 0),
(259, 'Fuller', 'Mauris.eu@egetdictum.co.uk', '88-015-36-098673', 'dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed,', '20-05-16', 0),
(260, 'Emerson', 'sed@tristiquepharetra.edu', '88-019-63-987350', 'lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa.', '20-09-15', 0),
(261, 'Porter', 'pede.Suspendisse@ipsum.edu', '88-019-71-782278', 'elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui.', '05-10-16', 1),
(262, 'Tanek', 'enim.Curabitur.massa@et.ca', '88-013-58-614067', 'Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras', '12-09-15', 1),
(263, 'Quentin', 'Quisque.fringilla.euismod@pretiumaliquet.edu', '88-011-54-250394', 'lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in', '19-07-17', 1),
(264, 'Tyler', 'pede@ultriciesornare.co.uk', '88-013-46-396926', 'purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean', '02-03-16', 0),
(265, 'Xavier', 'malesuada@Inscelerisquescelerisque.org', '88-016-12-678295', 'Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper', '05-03-17', 0),
(266, 'Steven', 'Donec.luctus@eu.com', '88-011-81-338515', 'hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi', '09-03-16', 1),
(267, 'Gregory', 'vestibulum.nec.euismod@tellusnon.net', '88-015-49-961547', 'nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In', '13-08-16', 1),
(268, 'Curran', 'et.netus@elit.com', '88-017-72-576861', 'ut eros non enim commodo hendrerit. Donec porttitor tellus non magna.', '27-10-16', 0),
(269, 'Calvin', 'dapibus@consequatenim.edu', '88-010-13-316407', 'a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis', '10-12-15', 0),
(270, 'Hashim', 'commodo.ipsum.Suspendisse@mieleifendegestas.ca', '88-018-54-533025', 'Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum purus, accumsan interdum', '23-12-16', 0),
(271, 'Reese', 'felis@Seddiam.edu', '88-017-81-279309', 'libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus.', '19-02-17', 1),
(272, 'Gabriel', 'in.felis@semut.org', '88-010-61-357766', 'Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida', '15-02-16', 0),
(273, 'Martin', 'vestibulum.neque@semper.org', '88-015-34-061901', 'rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque', '24-02-17', 1),
(274, 'Marsden', 'Donec@utdolordapibus.net', '88-018-71-438347', 'purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus', '03-12-15', 0),
(275, 'Zane', 'aliquam.enim@mollisduiin.com', '88-013-64-365632', 'Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis', '05-04-16', 0),
(276, 'Isaac', 'Vestibulum.ut@etmagnisdis.com', '88-013-80-623696', 'erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget', '25-05-16', 1),
(277, 'Bradley', 'a.neque.Nullam@felispurusac.edu', '88-015-94-163257', 'ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit', '02-04-17', 1),
(278, 'Caesar', 'pede.nonummy@nibhlaciniaorci.com', '88-016-06-568196', 'lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla.', '01-03-16', 0),
(279, 'Wyatt', 'dolor.vitae@Aliquam.com', '88-011-94-818339', 'magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec', '19-07-17', 0),
(280, 'Forrest', 'Duis.mi.enim@consectetuermaurisid.com', '88-010-88-973332', 'Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel', '15-02-17', 0),
(281, 'Dylan', 'nisl.elementum.purus@a.co.uk', '88-012-66-884082', 'laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum', '20-10-16', 1),
(282, 'Ulric', 'Vivamus.sit.amet@laoreetipsumCurabitur.ca', '88-013-98-940730', 'arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis', '24-03-16', 1),
(283, 'Vaughan', 'sollicitudin.commodo@Duis.org', '88-017-33-670002', 'purus mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut', '08-12-16', 0),
(284, 'Deacon', 'vehicula.aliquet@nisinibhlacinia.org', '88-018-32-241583', 'vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam.', '08-11-15', 0),
(285, 'Demetrius', 'sit@ultricesDuis.edu', '88-014-90-420578', 'quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris', '02-08-17', 0),
(286, 'Magee', 'ullamcorper.velit.in@duiCumsociis.edu', '88-016-72-795470', 'semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut', '27-05-16', 0),
(287, 'Jasper', 'amet@vitaediam.org', '88-016-51-053821', 'mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum.', '28-04-17', 1),
(288, 'Brett', 'turpis.vitae@tellusAeneanegestas.net', '88-014-19-498437', 'congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed', '08-08-17', 1),
(289, 'Hu', 'Nullam.velit.dui@ante.org', '88-012-85-230187', 'In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt.', '19-02-16', 1),
(290, 'Joshua', 'dignissim.tempor@nonummy.edu', '88-018-02-084510', 'pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec', '04-02-16', 1),
(291, 'Xenos', 'interdum.Nunc.sollicitudin@augueeu.org', '88-011-08-438180', 'tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare,', '02-08-17', 1),
(292, 'Edan', 'lacus.Etiam@sem.net', '88-016-11-005993', 'Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', '05-04-17', 1),
(293, 'Arden', 'augue.ut@dapibus.edu', '88-016-27-383323', 'accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et', '28-11-15', 0),
(294, 'Octavius', 'imperdiet@vestibulumneque.ca', '88-011-05-960596', 'tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor', '17-01-17', 0),
(295, 'Lawrence', 'erat.volutpat@Cumsociis.co.uk', '88-018-30-480264', 'convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum.', '22-03-16', 1),
(296, 'Ashton', 'risus.Quisque@sempertellusid.edu', '88-015-65-955060', 'aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor,', '08-09-15', 1),
(297, 'Galvin', 'Donec@nascetur.ca', '88-014-42-469112', 'cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis', '06-08-17', 0),
(298, 'Akeem', 'tempus.risus@ornareegestasligula.edu', '88-015-85-142332', 'vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat.', '03-12-16', 0),
(299, 'Zeph', 'ultrices.Vivamus.rhoncus@enimNuncut.edu', '88-014-63-236200', 'vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc', '21-02-16', 1),
(300, 'Graiden', 'Pellentesque@eu.com', '88-017-72-478234', 'malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed', '02-06-17', 0),
(301, 'Quamar', 'Proin@Suspendisse.org', '88-016-62-317596', 'Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis', '28-05-16', 1),
(302, 'Owen', 'cursus@elitCurabitur.edu', '88-010-98-735435', 'enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum', '25-12-16', 1),
(303, 'Blake', 'malesuada@Cumsociis.ca', '88-011-27-068622', 'consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras', '20-08-15', 1),
(304, 'Hasad', 'Cum.sociis@Proin.net', '88-019-38-555988', 'urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar', '09-12-16', 1),
(305, 'Reece', 'quam.dignissim.pharetra@nonummyacfeugiat.ca', '88-019-56-391319', 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit', '05-03-16', 0),
(306, 'Coby', 'dolor.Nulla@laciniamattisInteger.com', '88-015-53-377794', 'turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit', '21-03-16', 0),
(307, 'Cadman', 'magnis@arcueu.edu', '88-011-35-091546', 'volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed', '06-01-17', 0),
(308, 'Colton', 'tempus@velconvallisin.org', '88-010-74-518717', 'Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam', '29-03-16', 1),
(309, 'Tyler', 'malesuada.augue@conubianostraper.net', '88-013-39-002781', 'Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus', '16-03-17', 1),
(310, 'Bruce', 'odio.semper.cursus@metus.co.uk', '88-011-40-395143', 'Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna,', '05-05-16', 0),
(311, 'Jacob', 'Duis.risus@tinciduntcongue.org', '88-016-47-473054', 'Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis.', '08-11-16', 1),
(312, 'Lev', 'semper@imperdiet.ca', '88-010-92-427761', 'ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus', '21-04-16', 1),
(313, 'Malachi', 'Suspendisse@Nunc.net', '88-018-17-817911', 'Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin', '21-01-16', 1),
(314, 'Travis', 'amet.nulla@odioNam.co.uk', '88-015-07-232396', 'Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', '22-09-15', 1),
(315, 'Carl', 'enim.Etiam.gravida@cursus.net', '88-010-89-309586', 'id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare', '02-06-17', 1),
(316, 'Elvis', 'a.sollicitudin.orci@pedePraesent.com', '88-015-66-887848', 'nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed', '20-12-15', 0),
(317, 'Nehru', 'purus.gravida.sagittis@blanditviverra.com', '88-010-66-915084', 'massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec,', '12-02-17', 0),
(318, 'Paki', 'eu.elit@netuset.co.uk', '88-016-86-570072', 'natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim.', '02-12-16', 1),
(319, 'Jackson', 'leo.in.lobortis@Nuncac.edu', '88-011-59-975837', 'dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna', '21-04-17', 0),
(320, 'Zahir', 'eget.varius@odio.co.uk', '88-016-43-322558', 'egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis', '16-05-16', 0),
(321, 'Tiger', 'est@Vivamus.net', '88-012-68-939924', 'auctor, velit eget laoreet posuere, enim nisl elementum purus, accumsan interdum libero dui', '25-07-17', 1),
(322, 'Kyle', 'est@lacusCras.co.uk', '88-010-67-689529', 'Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim', '26-02-17', 1),
(323, 'Ryder', 'ac@mieleifend.co.uk', '88-016-84-986829', 'tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,', '28-11-16', 1),
(324, 'Harrison', 'sem.semper.erat@massarutrum.org', '88-012-14-045961', 'purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus.', '26-05-16', 0),
(325, 'Wing', 'magna@suscipit.co.uk', '88-010-09-509660', 'Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor', '07-07-16', 0),
(326, 'Eaton', 'scelerisque@velitPellentesqueultricies.co.uk', '88-013-87-840688', 'egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci', '05-10-16', 1),
(327, 'Salvador', 'posuere@purusgravidasagittis.ca', '88-019-99-589459', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.', '22-04-16', 1),
(328, 'Rajah', 'ligula.tortor.dictum@euismodet.org', '88-018-21-688137', 'purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit', '28-10-16', 1),
(329, 'Noble', 'cursus@imperdietdictum.com', '88-019-08-260725', 'mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie.', '31-12-16', 1),
(330, 'Lyle', 'est@anteblandit.ca', '88-018-38-147377', 'Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus', '17-05-16', 0),
(331, 'Kane', 'dolor.sit.amet@eu.co.uk', '88-015-12-570022', 'nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris', '21-09-16', 0),
(332, 'Gray', 'arcu.Vivamus@congueturpis.co.uk', '88-017-69-004953', 'ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu.', '24-03-16', 1),
(333, 'Nissim', 'mollis@lacusvariuset.co.uk', '88-016-68-023521', 'ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu', '09-07-17', 1),
(334, 'Cade', 'sed@Cras.co.uk', '88-012-59-609178', 'consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet', '28-10-16', 1),
(335, 'Kirk', 'blandit@euturpis.org', '88-017-63-759470', 'Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in', '31-01-17', 1),
(336, 'Griffith', 'erat.vel.pede@Vivamus.org', '88-012-62-864427', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo', '15-06-16', 1),
(337, 'Kibo', 'In.mi@Maurisvelturpis.org', '88-010-74-660940', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus.', '10-12-16', 1),
(338, 'Caleb', 'nisi@Proin.net', '88-015-34-375439', 'quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas', '21-11-16', 1),
(339, 'Burke', 'Morbi.vehicula@liberoMorbi.org', '88-011-40-752711', 'ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut', '19-02-17', 1),
(340, 'Brennan', 'dui@molestietellus.org', '88-014-81-675592', 'ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus', '03-10-16', 1),
(341, 'Harrison', 'nunc.est.mollis@arcueu.org', '88-018-71-079345', 'luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue', '23-05-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_path` varchar(252) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `title`, `content`, `img_path`, `name`, `designation`, `address`, `date`) VALUES
(8, 'Some Words About Our Business', 'A most impressive operation. Management \r\nis certainly the key to success here.', '0e78411b9b0fa4eb8d3aec6f4cadec12.png', 'Roger I.Galy', 'International Finance Corporat', 'Washington DC.', '1990-05-23'),
(9, 'Some Words About Our Business', 'After the flying start of the project we do wish and hope that a prosperous future lies ahead of this enterprise.', 'cbfa2288442d5fb4318baaf2bf820084.png', 'Dick Schopman,', 'FMO,The Hague', 'Holland', '1990-01-26'),
(10, 'Some Words About Our Business', 'The working force is dedicated and hard working.Management system is also effective. We wish further progress and prosperity of this Mill.', '23dc3eccc862ba7326b19348def355af.png', 'A.H.M.Afzal Hossain', 'Director(Joint Secretary),Priv', 'Commission,Prime Minister’s Office.', '2010-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `a_i`
--
ALTER TABLE `a_i`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_n_e`
--
ALTER TABLE `a_n_e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_p`
--
ALTER TABLE `b_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_profile`
--
ALTER TABLE `f_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_info`
--
ALTER TABLE `g_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `a_i`
--
ALTER TABLE `a_i`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `a_n_e`
--
ALTER TABLE `a_n_e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `b_p`
--
ALTER TABLE `b_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `f_profile`
--
ALTER TABLE `f_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `g_info`
--
ALTER TABLE `g_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
