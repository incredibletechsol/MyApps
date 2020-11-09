-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2020 at 06:16 AM
-- Server version: 10.2.34-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkkkpmba_myapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `eventdescription` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `imagename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `eventdescription`, `message`, `imagename`) VALUES
(26, '2021-01-01', 'Happy New Year ', 'Happy New Year  !!!!\r\n', '2015.jpg'),
(27, '2021-01-26', 'Happy Republic Day', 'Happy Republic Day !!!!', '26jan.jpg'),
(29, '2020-08-15', 'Independence Day', 'Happy Independence Day !!!!', '15aug.jpg'),
(30, '2020-12-25', 'Mery Christmas', 'Jingle bells Jingle bells what fun it is to wish our friends A Very Happy Merry Christmas.', 'merry.jpg'),
(31, '2020-10-05', 'Gandhi Jayanti', 'Happy Gandhi Jayanti !!!', 'gandhi.jpg'),
(32, '2020-11-14', 'Happy Childrens Day', 'Happy Childrens Day !!!!', '14nov1.jpg'),
(33, '2020-05-01', 'May Day', 'Happy May Day !!!', 'may.jpg'),
(34, '2020-10-25', 'Dussehra', 'Happy Dussehra !!!!!', 'dussehra.jpg'),
(36, '2020-11-12', 'Happy Dhantrayodashi', 'Happy Dhantrayodashi !!!!', 'dhan.jpg'),
(37, '2020-11-13', 'Happy Narak Chaturdashi', 'Happy NarakaChaturdashi !!!!', 'narak.gif'),
(38, '2020-11-14', 'Happy Laxmi Poojan', 'Happy Laxmi Poojan !!!!', 'laxmi.jpg'),
(39, '2020-11-15', 'Happy Bali Pratipada', 'Happy Bali Pratipada !! Happy Diwali !!!!', 'diwali3.jpg'),
(40, '2020-11-16', 'Happy Bhai Dooj', 'Happy Bhai Dooj !!!!', 'bhaubeej.jpg'),
(44, '2020-06-08', 'RelaxBroadband Recharge Expiry', 'Your Broadband Recharge is getting expired on 08-June-2020 !\r\nPlease Recharge', 'relax.jpg'),
(45, '2020-04-10', 'Videocon D2H recharge Expiry', 'Videocon D2H recharge expired', 'd-2-h-service-250x250.jpg'),
(47, '2020-04-20', 'Jupiter servicing', 'Jupiter 4th Servicing is due.Please contact Shelar Auto.', 'jupiter.jpg'),
(48, '2020-03-10', 'Holi', 'Happy holi', 'holi.jpg'),
(49, '2020-03-25', 'Gudi Padwa', 'Happy Gudi Padwa', 'gudi.jpg'),
(50, '2020-08-03', 'Raksha Bandhan', 'Happy Raksha Bandhan', 'raksha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anniversary_messages`
--

CREATE TABLE `tbl_anniversary_messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anniversary_messages`
--

INSERT INTO `tbl_anniversary_messages` (`id`, `message`) VALUES
(1, 'On this special day, best wishes go to you, that this wonderful love u share, lasts your lifetime through. Happy Wedding Anniversary'),
(2, 'No greeting card to give.No sweet flowers to send.No cute graphics to forward.Just a loving heart saying HAPPY ANNIVERSARY'),
(3, 'To The Beautiful Couple In All The Land,\r\nMay Your Anniversary Be Happy And Grand.\r\nHappy Anniversary'),
(4, 'Happy Anniversary And May Your Marriage Be\r\nBlessed With Love,Joy And Companionship For All The Years Of Your Lives!'),
(5, 'Best wishes to you both on your anniversary,May the love that u share Last your lifetime through,As u make a wonderful pair.Happy Anniversary'),
(6, 'Remember The Yesterdays.Plan Your Tomorrows.And Celebrate Your Today.Happy Anniversary '),
(7, 'I Wish U Both Create The Joy Of Celebration Each Day.With Each Day Your Love For Each Other Grows.I Wish You Both A Happy Anniversary'),
(8, 'Anniversary Is A Time To Look Back At The Good Times And A Time To Look Ahead To Live Dreams Together.Happy Anniversary'),
(9, 'A Wonderful Couple,So Kind At Heart So Much In Love May Your Relationship Stay Strong And True These Are Our Anniversary Wishes For You.'),
(10, 'As we learn,let us share.As we take,let us give.As we weep,let us care.As we love,let us live.Happy Wedding Anniversary'),
(11, 'Today you have passed another year of life. It means that you are doing well for the journey of your life.Happy Anniversary'),
(12, 'Each year on your anniversary, it’s a good moment to celebrate and enjoy the memories of your life and marriage day.Happy Anniversary'),
(13, 'This day is the day of many moments.You both should enjoy these moments and make the memories of your life.Happy Anniversary '),
(14, 'Married life agrees with you, and i wish the best for both Of you.Happy Anniversary'),
(15, 'No one and nothing in this world is perfect, but the two of you are as close as it gets. Happy anniversary.'),
(16, 'Real relationships are when you can fight like enemies, laugh like best friends and love like soul mates. Happy anniversary.'),
(17, 'Relationships are not about give and take, they’re about share and care. Happy anniversary.'),
(18, 'Whatever you do and wherever life takes you,never underestimate the power of honesty, love and friendship.Happy anniversary.'),
(19, 'Times change,people change,but memories remain.Wish you both a lifetime of happy memories.Have a fantastic Anniversary.'),
(20, 'Happy anniversary to a couple who has made their marriage as perfect as it is made out to be in romantic books and movies.'),
(21, 'The fact that you don’t behave like a typical husband-wife makes your marriage perfect. Happy anniversary.'),
(22, 'Good relationships don’t just happen.They need to be nurtured and given a foundation that is unshakable just like yours.Happy Anniversary.'),
(23, 'A real relationship is when destinies align,souls connect and hearts beat for each other,just like yours.Happy Anniversary'),
(24, 'Wishing the two of you a happy anniversary and the enjoyment of many more years to come.Happy Anniversary'),
(25, 'Like a flower in the sunlight,your love blossoms beautifully.Happy wishes on your wedding anniversary.'),
(26, 'Enjoy the love and years and most of all each other. Happy wedding anniversary.'),
(27, 'Sending you thoughts of love on your wedding anniversary. Enjoy many more years of happiness.Happy Anniversary'),
(28, 'Sending heartfelt wishes your way and on such an important and lovely day. Happy wedding anniversary.'),
(29, 'Congratulations on another year of love,laughter,and happiness.Here’s to wishing you many more and a happy anniversary.'),
(30, 'Sending thoughtful wishes your way on this very special day of yours.Happy Anniversary.'),
(31, 'Every day I am thankful for our lives together.Happy Anniversary to you now and always.'),
(32, 'Happy anniversary to a couple who deserves the best in love, life, and happiness.'),
(33, 'May your love and your lives together be everlasting and full of joy.Wishing you a very happy anniversary.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthday_messages_kasturi`
--

CREATE TABLE `tbl_birthday_messages_kasturi` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_birthday_messages_kasturi`
--

INSERT INTO `tbl_birthday_messages_kasturi` (`id`, `message`) VALUES
(1, 'On your special day I‘d like to wish that everything you‘ve been dreaming about start coming true! Happy Birthday-Kasturi Collection'),
(2, 'Let this special day bring you ocean of joy and fun! Happy Birthday ! Kasturi Collection'),
(3, 'Happy birthday! Let us make this day as incredible as you, buddy. May it be simply awesome! -Kasturi Collection'),
(4, 'May this day be so happy that smile never fades away from your face, dear friend! Happy Birthday-Kasturi Collection'),
(5, 'Have the most joyful and glamorous birthday, besty! Happy Birthday - Kasturi Collection'),
(6, 'May your life be beautiful like a blooming garden in spring! Happy Birthday - Kasturi Collection'),
(7, 'I wish that every candle on your birthday cake brings you a reason to be happy!Happy Birthday -Kasturi Collection'),
(8, 'On your birthday I wish you determination to turn all your goals and dreams into reality! Happy Birthday-Kasturi Collection'),
(9, ' Wishing you an awesome day with good luck on your way. Happy Birthday - Kasturi Collection'),
(10, 'May your birthday be filled with many happy hours and your life with many happy birthdays.Happy Birthday-Kasturi Collection'),
(11, 'Wishing you a day that is as special in every way as you are. Happy Birthday-Kasturi Collection'),
(12, 'Set the world on fire with your dreams and use the flame to light a birthday candle.Happy Birthday-Kasturi Collection'),
(13, 'Wishing you all the great things in life, hope this day will bring you an extra share of all that makes you happiest.Happy Birthday-Kasturi Collection'),
(14, 'Hope your birthday is totally cool, really funtastic,wonderful,exciting,majorly awesome, rocking and Happy.Happy Birthday-Kasturi Collection'),
(15, 'Happy Birthday. Wishing you more glorious and wonderful years on the surface of the earth - or wherever you might be.Happy Birthday-Kasturi Collection'),
(16, 'May your heart naturally beat with the happiness and laughter that you give others.Happy Birthday-Kasturi Collection'),
(17, 'Wishing you health, love, wealth, happiness and just everything your heart desires.Happy Birthday-Kasturi Collection'),
(18, 'I hope you have a wonderful day and get everything you want! Happy Birthday-Kasturi Collection'),
(19, 'On your birthday, may each hour and minute be filled with delight.Happy Birthday-Kasturi Collection'),
(20, 'I want to wish you a Happy Birthday and I truly hope that you enjoy it to the fullest.Happy Birthday-Kasturi Collection'),
(21, 'I hope that your special day is full of fun and happiness and everything that you enjoy.Happy Birthday-Kasturi Collection'),
(22, 'May your life be filled with laughs and smiles. Happy Birthday-Kasturi Collection'),
(23, 'May birds sing and flowers cover your path to a happy life as you celebrate your birthday.Happy Birthday-Kasturi Collection'),
(24, 'I want to wish you a Happy Birthday and I truly hope that you enjoy it to the fullest.Happy Birthday-Kasturi Collection'),
(25, 'Live your life sharing the beauty and happiness that you have today and every day.Happy Birthday-Kasturi Collection'),
(26, 'May this year bring with it all the success and fulfillment your heart desires.Happy Birthday-Kasturi Collection'),
(27, 'It is not enough to celebrate just one day, so celebrate EVERY day for the rest of your life. But start today.Happy Birthday-Kasturi Collection'),
(28, 'May you find your favorite color on the rainbow and may it be the color of your happiness on your birthday.Happy Birthday-Kasturi Collection'),
(29, 'Happy happy bday! i hope you are so happy and I wish you so many good things for the next year!Happy Birthday-Kasturi Collection'),
(30, 'May every day be your best day ever, starting with today. So have your best birthday EVER!!Happy Birthday-Kasturi Collection'),
(31, 'I wish you happiness, health and so many good things in your life.Happy Birthday-Kasturi Collection');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthday_messages_vivahyog`
--

CREATE TABLE `tbl_birthday_messages_vivahyog` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_birthday_messages_vivahyog`
--

INSERT INTO `tbl_birthday_messages_vivahyog` (`id`, `message`) VALUES
(1, 'On your special day I‘d like to wish that everything you‘ve been dreaming about start coming true!Happy Birthday-Vivahyog.in'),
(2, 'Let this special day bring you ocean of joy and fun! Happy Birthday ! Vivahyog.in'),
(3, 'Happy birthday! Let us make this day as incredible as you, buddy. May it be simply awesome! -Vivahyog.in'),
(4, 'May this day be so happy that smile never fades away from your face, dear friend! Happy Birthday-Vivahyog.in'),
(5, 'Have the most joyful and glamorous birthday, besty! Happy Birthday - Vivahyog.in'),
(6, 'May your life be beautiful like a blooming garden in spring! Happy Birthday - Vivahyog.in'),
(7, 'I wish that every candle on your birthday cake brings you a reason to be happy!Happy Birthday -Vivahyog.in'),
(8, 'On your birthday I wish you determination to turn all your goals and dreams into reality! Happy Birthday-Vivahyog.in'),
(9, ' Wishing you an awesome day with good luck on your way. Happy Birthday - Vivahyog.in'),
(10, 'May your birthday be filled with many happy hours and your life with many happy birthdays.Happy Birthday-Vivahyog.in'),
(11, 'Wishing you a day that is as special in every way as you are. Happy Birthday-Vivahyog.in'),
(12, 'Set the world on fire with your dreams and use the flame to light a birthday candle.Happy Birthday-Vivahyog.in'),
(13, 'Wishing you all the great things in life, hope this day will bring you an extra share of all that makes you happiest.Happy Birthday-Vivahyog.in'),
(14, 'Hope your birthday is totally cool, really funtastic,wonderful,exciting,majorly awesome, rocking and Happy.Happy Birthday-Vivahyog.in'),
(15, 'Happy Birthday. Wishing you more glorious and wonderful years on the surface of the earth - or wherever you might be.Happy Birthday-Vivahyog.in'),
(16, 'May your heart naturally beat with the happiness and laughter that you give others.Happy Birthday-Vivahyog.in'),
(17, 'Wishing you health, love, wealth, happiness and just everything your heart desires.Happy Birthday-Vivahyog.in'),
(18, 'I hope you have a wonderful day and get everything you want! Happy Birthday-Vivahyog.in'),
(19, 'On your birthday, may each hour and minute be filled with delight.Happy Birthday-Vivahyog.in'),
(20, 'I want to wish you a Happy Birthday and I truly hope that you enjoy it to the fullest.Happy Birthday-Vivahyog.in'),
(21, 'I hope that your special day is full of fun and happiness and everything that you enjoy.Happy Birthday-Vivahyog.in'),
(22, 'May your life be filled with laughs and smiles. Happy Birthday-Vivahyog.in'),
(23, 'May birds sing and flowers cover your path to a happy life as you celebrate your birthday.Happy Birthday-Vivahyog.in'),
(24, 'I want to wish you a Happy Birthday and I truly hope that you enjoy it to the fullest.Happy Birthday-Vivahyog.in'),
(25, 'Live your life sharing the beauty and happiness that you have today and every day.Happy Birthday-Vivahyog.in'),
(26, 'May this year bring with it all the success and fulfillment your heart desires.Happy Birthday-Vivahyog.in'),
(27, 'It is not enough to celebrate just one day, so celebrate EVERY day for the rest of your life. But start today.Happy Birthday-Vivahyog.in'),
(28, 'May you find your favorite color on the rainbow and may it be the color of your happiness on your birthday.Happy Birthday-Vivahyog.in'),
(29, 'Happy happy bday! i hope you are so happy and I wish you so many good things for the next year!Happy Birthday-Vivahyog.in'),
(30, 'May every day be your best day ever, starting with today. So have your best birthday EVER!!Happy Birthday-Vivahyog.in'),
(31, 'I wish you happiness, health and so many good things in your life.Happy Birthday-Vivahyog.in');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_friends`
--

CREATE TABLE `tbl_friends` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `annvdate` date NOT NULL,
  `isSpecial` varchar(1) DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_friends`
--

INSERT INTO `tbl_friends` (`id`, `name`, `mobileno`, `emailid`, `birthdate`, `annvdate`, `isSpecial`) VALUES
(9, 'Amit Bhalerao', 8796154725, 'amitbaramatimca@gmail.com', '1987-02-25', '2014-04-22', 'Y'),
(10, 'Ajit Bhalerao', 9850102745, 'ajitbhalerao89@gmail.com', '1989-05-10', '2018-12-13', 'Y'),
(3, 'Janhavi Bhalerao', 7058756668, 'janhavi.bhalerao89@gmail.com', '1989-10-05', '2014-04-22', 'Y'),
(4, 'Chaitanya Wagh', 9503936465, 'waghchaitanya2@gmail.com', '1992-01-04', '2020-06-15', 'Y'),
(5, 'Sachin Gaikwad', 9881267383, 'sachingaikwadbaramati@gmail.com', '1987-02-15', '2016-03-25', 'Y'),
(6, 'Sachin Naik', 9920358299, 'sachinn787@gmail.com', '1983-11-11', '0000-00-00', 'N'),
(12, 'Akhilesh Kumar', 9503463997, 'akhileshkumar18@gmail.com', '2013-12-18', '2013-02-18', 'N'),
(16, 'Vijayanaresh Bandaru', 9881156978, 'vijayanaresh.bandaru@fundtech.com', '1981-08-15', '2009-08-07', 'N'),
(20, 'Sachin Kadam', 9527705413, 'sachin.kadam32@gmail.com', '1988-05-05', '2013-02-26', 'N'),
(23, 'Sanjay Kumar', 9975385674, '4444.sanjay@gmail.com', '1985-05-07', '0000-00-00', 'N'),
(24, 'Matin Shaikh', 9423790803, 'matinmshaikh@gmail.com', '1983-06-12', '2011-11-20', 'N'),
(26, 'Satish Aswale', 8855034043, 'satishaswale30@gmail.com', '1988-06-16', '0000-00-00', 'N'),
(31, 'Nakul Sethiya', 9975688058, 'nakulsethiya@gmail.com', '1985-11-16', '2012-01-15', 'N'),
(42, 'Mahesh Kumar Devulapally', 8698044842, 'emailtomahesh@gmail.com', '1976-02-09', '2004-02-25', 'Y'),
(635, 'Deep Jadhav', 9156102270, 'jadhavsachin1122@gmail.com', '2020-01-30', '0000-00-00', 'N'),
(601, 'Surajit Saha', 9130015176, 'surajit.sh@gmail.com', '2017-02-04', '2017-11-24', 'N'),
(47, 'Abhijit Shinde', 7588504729, 'abhijit.shinde22@rediffmail.com', '1986-09-05', '0000-00-00', 'Y'),
(48, 'Sachin Patil', 9730998987, 'sachin_lpatil@rediffmail.com', '1987-02-04', '0000-00-00', 'N'),
(50, 'Rohit Ranjan', 9970826877, 'ranjanrohit@yahoo.com', '1982-11-01', '0000-00-00', 'N'),
(52, 'Arpit Mathur', 9166897449, 'arpitmathur06@gmail.com', '1988-04-06', '0000-00-00', 'N'),
(53, 'Satyajit Ghadage', 9766068831, 'drsatyajitghadage@gmail.com', '1986-07-27', '0000-00-00', 'N'),
(54, 'Vivek Gupta', 7692039266, 'guptavivek14@gmail.com', '1989-02-14', '0000-00-00', 'N'),
(55, 'Swapnali Kalzunkar', 9769189879, 'swapni_2587@yahoo.co.in', '1987-03-25', '2013-11-20', 'Y'),
(639, 'Mrunal Borle', 9766336271, 'mrunalborle14@gmail.com', '1998-04-14', '0000-00-00', 'N'),
(57, 'Vishal Pande', 9021702307, 'pande.vishal4@gmail.com', '1985-11-14', '0000-00-00', 'N'),
(61, 'Somnath Zankar', 9763667993, 'zankarsomnath@gmail.com', '1986-08-25', '2014-01-24', 'N'),
(603, 'Amey Latkar', 9823895638, 'latkaramey@gmail.com', '1982-10-02', '2012-02-19', 'N'),
(638, 'Samiksha Pande', 7448227594, 'amitbaramatimca@gmail.com', '2020-05-16', '0000-00-00', 'N'),
(66, ' Rahul Gupta', 8806246023, 'rahulg1152@gmail.com', '2014-02-28', '0000-00-00', 'Y'),
(67, 'Shankar Chourasia', 9960082966, 'svchourasia@gmail.com', '1989-05-19', '0000-00-00', 'N'),
(69, 'Pratap Lawande Patil', 9822538753, 'pratapmcs@gmail.com', '1981-11-29', '2009-12-13', 'N'),
(71, 'Rohit Phaltankar', 9975497472, 'rohit.phaltankar@gmail.com', '1986-11-25', '0000-00-00', 'Y'),
(72, 'Shambhavi Badave', 9404989933, 'badave.shambhavi@gmail.com', '1986-05-28', '2016-03-14', 'N'),
(73, 'Ajinkya Abhyankar', 9604264574, 'ajinkya.abhyankar08@gmail.com', '1991-12-15', '0000-00-00', 'Y'),
(74, 'Satish Pawar', 9970217721, 'satishpawar87@gmail.com', '1987-04-02', '2016-03-14', 'N'),
(77, 'Sameer Kazi', 9970965588, 'kazisameer35@gmail.com', '1986-08-10', '0000-00-00', 'N'),
(78, 'Maroti Nawghade', 9405777547, 'nawghademaroti@gmail.com', '1985-11-09', '0000-00-00', 'N'),
(80, 'Priyanka Bhalerao', 8149541918, 'priyanka.bhalerao22@gmail.com', '1992-08-22', '2019-02-10', 'Y'),
(81, 'Smita Bhalerao', 9028248930, 'smitabhalerao111@gmail.com', '1969-02-05', '1991-11-15', 'N'),
(82, 'Vinayak Bhalerao', 7276345009, 'priyanka.bhalerao22@gmail.com', '1964-02-01', '1991-11-15', 'N'),
(83, 'Harshal Kulkarni', 8390587102, 'janhavi.bhalerao89@gmail.com', '1993-05-22', '0000-00-00', 'N'),
(85, 'Nagesh Panse', 7709949594, 'janhavi.bhalerao89@gmail.com', '1983-08-13', '0000-00-00', 'N'),
(86, 'Manish Jakate', 9158785418, 'janhavi.bhalerao89@gmail.com', '1982-05-01', '2015-04-19', 'N'),
(87, 'Sonal Sontakke', 9730710460, 'sonalkulkarni86@gmail.com', '1993-11-12', '0000-00-00', 'N'),
(88, 'Mukund Kulkarni', 9404626468, 'janhavi.bhalerao89@gmail.com', '1996-12-27', '2001-12-24', 'N'),
(89, 'Sarang Bhalerao', 8446188289, '	srcsyscronmail@gmail.com', '1999-05-14', '0000-00-00', 'N'),
(90, 'Anil Bhalerao', 9423015260, 'amitbaramatimca@gmail.com', '1961-07-23', '1985-05-15', 'N'),
(91, 'Sonali Bhalerao', 8149431035, 'amitbaramatimca@gmail.com', '1965-06-16', '1985-05-15', 'Y'),
(92, 'Malti Bhalerao', 8796154725, 'amitbaramatimca@gmail.com', '1944-04-04', '0000-00-00', 'N'),
(93, 'Mama Deshpande', 9923174594, 'kuhakam@gmail.com', '1956-06-16', '1978-05-21', 'N'),
(94, 'Mami Deshpande', 8600935100, 'kuhakam@gmail.com', '1957-03-23', '1978-05-21', 'N'),
(95, 'Nagesh Kulkarni', 9028273920, 'kulkarninagesh13@gmail.com', '1989-02-16', '0000-00-00', 'N'),
(96, 'Shravani Kakade', 9765891413, 'kuhakam@gmail.com', '2013-05-16', '0000-00-00', 'N'),
(97, 'Akshay Abhyankar', 9762461658, 'akshay.abhyankar08@gmail.com', '1994-11-22', '0000-00-00', 'Y'),
(98, 'Aparna Abhyankar', 9921243963, 'akshay.abhyankar08@gmail.com', '1967-07-27', '1990-04-20', 'N'),
(99, 'Kaka Abhyankar', 9822839772, 'ajinkya.abhyankar08@gmail.com', '1965-01-11', '1990-04-20', 'N'),
(100, 'Vivek Deshpande', 9881454344, 'kuhakam@gmail.com', '1982-09-11', '0000-00-00', 'N'),
(101, 'Bhagyashri Kakade', 9765891413, 'kuhakam@gmail.com', '1985-12-12', '2012-05-12', 'Y'),
(102, 'Sandip Kakade', 9922967212, 's_kakade2004@rediffmail.com', '1981-10-01', '2012-05-12', 'N'),
(103, 'Makrand Deshpande', 9175049587, 'makranda.deshpande@gmail.com', '1982-03-17', '2015-05-16', 'N'),
(104, 'Shailesh Tambade', 9975711560, 'shaileshtambade@gmail.com', '1985-11-13', '0000-00-00', 'N'),
(105, 'Manoj Devare', 9860864623, 'devare.manoj@gmail.com', '1980-09-17', '0000-00-00', 'N'),
(106, 'Mayur Palase', 8378940032, 'mayur_apalase@rediffmail.com', '1982-08-11', '2016-04-24', 'N'),
(107, 'Govind Bakale', 9890019389, 'gbakale@gmail.com', '1986-01-21', '0000-00-00', 'Y'),
(108, 'Jitendra Dunakhe', 9623441748, 'jitendra_dunakhe@rediffmail.com', '1972-11-02', '2006-07-02', 'N'),
(109, 'Shubhangi Dunakhe', 9623441748, 'shubhajit21172@rediffmail.com', '1972-06-09', '2006-07-02', 'N'),
(110, 'Vikram Jadhav', 9766906144, 'vikramjadhavpucsd2007@gmail.com', '1987-08-19', '2012-02-02', 'N'),
(117, 'Ajit Adsul  ', 9561095998, 'adsulajit13@gmail.com', '1982-01-13', '2013-12-13', 'N'),
(118, 'Rohit Gaikwad', 9028286535, 'sachingaikwadbaramati@gmail.com', '1989-05-14', '0000-00-00', 'N'),
(119, 'Hanmant Rachmale', 9730320568, 'hanmant.gr@gmail.com', '1986-07-12', '0000-00-00', 'N'),
(120, 'Saurav Ashok', 7875553703, 'saurav1121@gmail.com', '1987-01-30', '0000-00-00', 'N'),
(122, 'Sarika Sakore', 9049616857, 'sakore.sarika0892@gmail.com', '1992-03-08', '2015-05-09', 'Y'),
(641, 'Sayli Rohit Patil', 9730570792, 'sayli.mohape321@gmail.com', '1994-04-08', '2019-04-07', 'N'),
(125, 'Vikas Shivankar', 8983282530, 'vishi.shivankar@gmail.com', '2014-02-17', '0000-00-00', 'Y'),
(126, 'Swapnil Deshpande', 9028263285, 'swapnildeshpande5@gmail.com', '1983-08-07', '2011-07-10', 'N'),
(476, 'Janhavi Chavare', 9766263481, 'sweetmugdhajanhavi@gmail.com', '1987-03-17', '2012-12-16', 'N'),
(477, 'Harshal Prabhune', 9960934483, 'harshalprabhune12@gmail.com', '1983-12-22', '0000-00-00', 'N'),
(484, 'Satsangram Jadhav', 7387425215, 'satsangram.jadhav@gmail.com', '2019-09-19', '0000-00-00', 'N'),
(482, 'Rajendra sonksuare', 8421139551, 'rajendra.sonkusare@gmail.com', '1984-08-13', '0000-00-00', 'N'),
(483, 'Anant Brahmankar', 8007773699, 'glanquist@gmail.com', '1989-06-03', '0000-00-00', 'N'),
(480, 'Sandeep Nalavade', 8806661766, 's8589696@gmail.com', '1983-06-24', '2014-05-17', 'N'),
(479, 'Mayur Khedkar', 9975650156, 'khedkarmayur@gmail.com', '1986-11-20', '0000-00-00', 'N'),
(629, 'Rupesh Boravake', 9762930170, 'rupeshborawake@gmail.com', '2019-06-16', '2019-06-06', 'N'),
(488, 'Sunil Gaikwad', 9049498897, 'amitbaramatimca@gmail.com', '2014-01-06', '0000-00-00', 'N'),
(487, 'Akhil Wagh', 9766905599, 'akhilwagh86@gmail.com', '2014-06-03', '0000-00-00', 'N'),
(485, 'Bhushan Bamb', 9405809045, 'bhushanjain59@gmail.com', '2014-03-06', '0000-00-00', 'N'),
(493, 'Manoj Dhamal', 9766780378, 'amitbaramatimca@gmail.com', '1987-04-06', '0000-00-00', 'N'),
(492, 'Aniket Bhandare', 9762535371, 'aniketmcs@gmail.com', '2014-12-25', '0000-00-00', 'N'),
(491, 'Shailesh Kumbhar', 9503331534, 'prashant4494@gmail.com', '2014-09-18', '0000-00-00', 'N'),
(505, 'Kaka Ghadage', 9423527968, 'drsatyajitghadage@gmail.com', '1959-09-20', '1985-02-24', 'N'),
(497, 'Amol Shinde', 9637303040, 'amolshinde0001@gmail.com', '1987-05-15', '0000-00-00', 'N'),
(496, 'Rizwan Khot', 8446846854, 'rizwankhot143@gmail.com', '2014-02-16', '0000-00-00', 'N'),
(495, 'Nana Kshirsagar', 9028445622, 'nana.kshirsagar1986@gmail.com', '1986-02-25', '0000-00-00', 'N'),
(508, 'Atish Kulkarni', 7709319321, 'atish.kulkarni4u@gmail.com', '1988-03-08', '0000-00-00', 'N'),
(507, 'Amarsinh Pol', 9766128342, 'amarkpol@gmail.com', '1982-04-10', '2013-07-11', 'N'),
(504, 'Mandar Palase', 9922283500, 'palasemandar@gmail.com', '1988-09-06', '0000-00-00', 'N'),
(512, 'Minakshi Bobade', 9763781112, 'minakshi.bhosale2@gmail.com', '2014-11-19', '2014-06-18', 'N'),
(510, 'Hrishikesh Ghadage', 9766792096, 'drsatyajitghadage@gmail.com', '1992-08-18', '0000-00-00', 'N'),
(518, 'Dhananjay Sagare', 9175268122, 'jay.sagare@gmail.com', '1987-07-01', '0000-00-00', 'N'),
(517, 'Harsh Mane', 9049991933, 'harsh.mane@gmail.com', '1981-07-01', '2008-08-14', 'N'),
(515, 'Pravin Shinde', 9766382450, 'shindepravin4u@gmail.com', '1988-09-04', '0000-00-00', 'N'),
(602, 'Sagar Kademani', 9850848088, 'sagar31@gmail.com', '2017-12-31', '2017-05-13', 'N'),
(522, 'Anil Jadhav', 9419794804, 'amitbaramatimca@gmail.com', '1984-01-14', '0000-00-00', 'N'),
(521, 'Shivaji Phadke', 9960144456, 'amitbaramatimca@gmail.com', '2014-05-16', '0000-00-00', 'N'),
(551, 'Darshan Shinde', 9970953598, 'darshanshinde8@gmail.com', '1987-06-08', '0000-00-00', 'N'),
(520, 'Ravikiran Kulkarni', 7709664684, 'ravi.kulkarni8793600@gmail.com', '1993-06-07', '0000-00-00', 'N'),
(527, 'Ramchandra Shelar', 9503996433, 'rspathfinder@gmail.com', '2014-03-03', '2013-06-03', 'Y'),
(526, 'Rahul Raj Saini', 9503186915, 'rahulrajsaini24@gmail.com', '1988-01-24', '0000-00-00', 'Y'),
(525, 'Rohit Ghadage', 9420423703, 'ghadage.rohit@gmail.com', '1987-11-30', '0000-00-00', 'Y'),
(523, 'Nilesh Shinde', 9970427428, 'amitbaramatimca@gmail.com', '1989-10-03', '0000-00-00', 'N'),
(532, 'Reshma Wagh', 8805454895, 'janhavi.bhalerao89@gmail.com', '2014-10-12', '0000-00-00', 'N'),
(530, 'Rakesh Baviskar', 9960665620, 'rakeshbaviskar1986@gmail.com', '1986-04-09', '2012-01-29', 'N'),
(636, 'Rahul Hirve', 9604074516, 'rhlhirave2@gmail.com', '1994-09-16', '0000-00-00', 'N'),
(536, 'Jayant Kikale', 9823025340, 'kikaleassociates@gmail.com', '1965-05-08', '1989-06-26', 'N'),
(537, 'Mangesh Dalvi', 9922348772, 'mangeshdalvi63@yahoo.com', '1986-11-10', '0000-00-00', 'N'),
(538, 'Bharat Agawane', 9923738473, 'bharat_agawane@yahoo.com', '1973-10-28', '0000-00-00', 'N'),
(578, 'Mayur Hajare', 9890624244, 'amitbaramatimca@gmail.com', '0000-00-00', '0000-00-00', 'N'),
(544, 'Samruddhi Tawade', 9673996499, 'tawde.samruddhi@gmail.com', '1989-05-05', '0000-00-00', 'N'),
(546, 'Mukund Pansande', 8600871011, 'mukundpansande@gmail.com', '1990-09-25', '0000-00-00', 'N'),
(550, 'Viraj Dhamal', 9860034935, 'amitbaramatimca@gmail.com', '1987-04-06', '0000-00-00', 'N'),
(553, 'Pravin Gaikwad', 9421004157, 'pravinmcabaramati@gmail.com', '1985-01-15', '0000-00-00', 'N'),
(555, 'Jitendra Holkar', 8600871939, 'jitendra_holkar@rediffmail.com', '1987-06-14', '0000-00-00', 'N'),
(558, 'Shantanu Kulkarni', 9665362039, 'kulkarnishantanu28@gmail.com', '1987-06-22', '0000-00-00', 'N'),
(559, 'Rajendra Kulkarni', 9970058431, 'raju_kulkarni99@yahoo.com', '2014-02-11', '2020-05-09', 'Y'),
(560, 'Ashish Lambe ', 8446241539, 'ashu.lambe@gmail.com', '1989-06-09', '0000-00-00', 'N'),
(562, 'Nikhil Nevase', 8087600913, 'nikhil1216@gmail.com', '1987-06-28', '2013-07-15', 'N'),
(563, 'Avinash Gavali', 9975610480, 'gavaliavinash7@gmail.com', '1993-04-03', '0000-00-00', 'N'),
(564, 'Avdhut Gavali', 8793172089, 'avdhutgavali@gmail.com', '1990-11-29', '0000-00-00', 'N'),
(565, 'Vijay Shelar', 8007426530, 'Shelarvijay.n@gmail.com', '1990-02-07', '0000-00-00', 'N'),
(566, 'Vignesh Shanbhag', 9970473797, 'vigneshshanbhag33@gmail.com', '1989-07-21', '0000-00-00', 'N'),
(567, 'Saksham Khatke', 9766473331, 'sakshamkhatke@precastindia.co.in', '1991-08-25', '0000-00-00', 'N'),
(570, 'Abhijit Jadhav', 8983091092, 'abhijit.jadhav.0909@gmail.com', '1992-10-09', '0000-00-00', 'N'),
(571, 'Ajay Birajdar', 9096211667, 'birajdarajay@gmail.com', '1984-09-25', '0000-00-00', 'N'),
(572, 'Parag Dhudhal', 9420499219, 'paragd24@gmail.com', '1985-11-24', '2010-05-23', 'Y'),
(577, 'Ashish Rane', 9029019960, 'ashu_rane09@yahoo.com', '1988-05-09', '2014-04-04', 'N'),
(580, 'Kishore Dhembare', 9766794702, 'kishor.jdhembare@gmail.com', '1987-02-19', '0000-00-00', 'N'),
(582, 'Mithilesh Gohite', 9011609152, 'mithileshgohite@gmail.com', '1990-10-14', '0000-00-00', 'N'),
(583, 'Saurabh Yergattikar', 8983596076, 'saurabh.ssy@gmail.com', '1990-04-12', '0000-00-00', 'N'),
(587, 'Vishwanath Bhambure', 9096624658, 'vishbhambure@gmail.com', '1987-01-12', '2013-05-22', 'Y'),
(588, 'Priyanka Bhambure', 7875759762, 'piyu.bhambure@gmail.com', '1992-12-24', '2013-05-22', 'Y'),
(589, 'Sarthak Khore', 9503347404, 'sarthak.khore@gmail.com', '1991-07-04', '2020-04-26', 'N'),
(615, 'Namrata Nitnaware', 9561346606, 'pranam07@gmail.com', '1989-09-07', '0000-00-00', 'Y'),
(592, 'Snehal Wagh', 8600173241, 'waghsnehal891@gmail.com', '1991-08-12', '0000-00-00', 'N'),
(593, 'Shruti Wagh', 8605819035, 'waghsnehal891@gmail.com', '1995-11-03', '0000-00-00', 'N'),
(594, 'Ganesh Pawar', 9665996467, 'amitbaramatimca@gmail.com', '2016-09-10', '2016-03-25', 'N'),
(595, 'Amey Bhalerao', 8796154725, 'amitbaramatimca@gmail.com', '2016-01-25', '0000-00-00', 'Y'),
(600, 'Prasad Lambe', 8087853122, 'prasadlambeca@gmail.com', '2017-03-21', '0000-00-00', 'Y'),
(606, 'Amit Maniyar', 9764130780, 'amitmaniyar.2008@gmail.com', '2017-10-13', '2014-11-25', 'N'),
(607, 'Mayur Kulkarni', 8975947618, 'kulkarniakshay557@gmail.com', '1993-12-07', '0000-00-00', 'Y'),
(608, 'Amod Godbole', 9765973620, 'amodgodbole@gmail.com', '1981-09-08', '0000-00-00', 'Y'),
(611, 'Anagha Bhambure', 9096624658, 'vishbhambure@gmail.com', '2018-04-06', '0000-00-00', 'Y'),
(613, 'Kiran Pophale', 8421062273, 'pophale.kiran@gmail.com', '1982-05-05', '2011-02-18', 'N'),
(614, 'Trupti Bhalerao', 7083917573, 'ajitbhalerao89@gmail.com', '1995-07-22', '2018-12-13', 'Y'),
(617, 'Aniket Nigam', 7038814914, 'aniketngm@gmail.com', '1988-04-25', '0000-00-00', 'N'),
(618, 'Guru Lalatendu', 9987104741, 'guru.lalatendu@gmail.com', '2019-01-05', '2019-02-17', 'Y'),
(619, 'Anil Kumar', 9146035402, 'Anilkr279@gmail.com', '1989-09-27', '0000-00-00', 'N'),
(620, 'Kishore Ravichandran', 9677952930, 'kishore8497@gmail.com', '1997-04-08', '0000-00-00', 'N'),
(621, 'Chidambaram Crushev', 9965339730, 'siva20021997@gmail.com', '1997-02-20', '0000-00-00', 'Y'),
(622, 'Hitesh Usare', 9021333122, 'hiteshusare@gmail.com', '1991-05-08', '0000-00-00', 'Y'),
(623, 'Yash Jain', 9975754972, 'yashjain31@gmail.com', '1986-03-31', '2015-11-27', 'N'),
(624, 'Sachin Jadhav', 9767366400, 'jadhavsachin1122@gmail.com', '2018-12-04', '0000-00-00', 'Y'),
(625, 'Omkar Pote', 9970564843, 'amit.bhalerao87@gmail.com', '2018-12-08', '0000-00-00', 'Y'),
(627, 'Ratika Jadhav', 9503894354, 'amitbaramatimca@gmail.com', '2019-01-24', '2018-05-12', 'Y'),
(628, 'Alok Panchal', 7057613161, 'alokpanchal25@gmail.com', '1989-11-25', '2019-02-24', 'N'),
(630, 'Om Prakash', 9762203855, 'omp.mca@gmail.com', '1984-11-08', '2015-12-07', 'N'),
(631, 'Santosh Mohire', 7767000466, 'santosh.mohire@yahoo.com', '1976-02-03', '0000-00-00', 'N'),
(637, 'Pushpak Patil', 9970186872, 'patilpushpak9970@gmail.com', '1998-06-04', '0000-00-00', 'N'),
(633, 'Amol Rajiwade', 9763423404, 'Amol.rajiwade1989@gmail.com', '1989-12-23', '0000-00-00', 'N'),
(634, 'Rushikesh Mane', 8888379406, 'rushikesh30mane30@gmail.com', '1992-11-30', '2015-12-16', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`) VALUES
(100, 'admin', '123456', 'Amit', 'Bhalerao');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myimgdocs`
--

CREATE TABLE `tbl_myimgdocs` (
  `id` int(10) NOT NULL,
  `docname` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_myimgdocs`
--

INSERT INTO `tbl_myimgdocs` (`id`, `docname`, `filename`) VALUES
(11, 'PassPort Page-1', 'Passport_Page1_Amit.jpg'),
(12, 'PassPort Page-2', 'Passport_Page2_Amit.jpg'),
(13, 'FYBCS', 'fybcs.jpg'),
(14, 'SYBCS-1', 'sybcs-sem1.jpg'),
(15, 'SYBCS', 'sybcs.jpg'),
(16, 'TYBCS-1', 'tybcs-sem1.jpg'),
(17, 'TYBCS', 'tybcs.jpg'),
(19, 'MCA Sem-1', 'fymca-sem1.jpg'),
(20, 'MCA Sem-1+2', 'fymca.jpg'),
(22, 'MCA Sem-1+2+3', 'symca-sem2.jpg'),
(23, 'MCA Sem-1+2+3+4', 'symca.jpg'),
(24, 'MCA Sem-1+2+3+4+5', 'tymca-sem1.jpg'),
(25, 'MCA Sem-1+2+3+4+5+6 ', 'tymca.jpg'),
(26, 'Birth Certificate', 'Birth_Certificate_Amit.jpg'),
(27, 'Domicile Certificate', 'Domicile_Certificate_Amit.jpg'),
(28, 'Election_Card_Page-1', 'Election_Card_Amit.jpg'),
(29, 'Election_Card_Amit-Page-2', 'Election_Card_Amit1.jpg'),
(30, 'Graduation_Certificate_Amit', 'Graduation_Certificate_Amit.jpg'),
(31, 'Leaving_Certificate_Amit', 'Leaving_Certificate_Amit.jpg'),
(32, 'MCA_Certificate_English_Amit', 'MCA_Certificate_English_Amit.jpg'),
(33, 'MCA_Certificate_Marathi_Amit', 'MCA_Certificate_Marathi_Amit.jpg'),
(34, 'Pan_Card_Amit', 'Pan_Card_Amit.jpg'),
(35, 'School_Leaving_Certificate_Amit', 'School_Leaving_Certificate_Amit.jpg'),
(36, 'SSC Marksheet', 'ssc.jpg'),
(37, 'SSC Cerificate', 'ssc-certificate.jpg'),
(38, 'HSC Marksheet', 'hsc.jpg'),
(39, 'HSC Cerificate', 'hsc-certificate.jpg'),
(40, 'Aadhar Card', 'AadharCard_Amit.jpg'),
(41, 'Ration Card-1', 'RationCard1_Amit.jpg'),
(42, 'Ration Card-2', 'RationCard2_Amit.jpg'),
(43, 'NSR', 'nsr.jpg'),
(68, 'Cognizant Brainbench Javascript Certificate', 'Javascript_Certificate_Amit.jpg'),
(45, 'TCS Appointment Letter', 'Apppointment_Letter_TCS.jpg'),
(46, 'GB Certificate', 'GBCertificate.jpg'),
(47, 'Marriage Certificate', 'Marriage_Certificate.jpg'),
(48, 'TCS Reliving Letter', 'TCS Reliving Letter.jpg'),
(51, 'TCS Experience Letter', 'TCS-ExperienceLetter.jpg'),
(54, 'TCS Service Letter', 'TCS-ServiceLetter.jpg'),
(59, 'E-Aadhar Card', 'EAadhaar_986521047763_Amit.jpg'),
(60, 'Narhe Address Letter', 'Narhe_AddressLetter.jpg'),
(61, 'HSCCertificate-Digital', 'HscCertificate-Digital.jpg'),
(62, 'HSCMarkheet-Digital', 'HscMarksheet-Digital.jpg'),
(63, 'SSCMarksheet-Digital', 'SscMarksheet-Digital.jpg'),
(64, 'SSCCertificate-Digital', 'SscCertificate-Digital.jpg'),
(65, 'Index2', 'Index2.jpg'),
(66, 'Index2', 'Index2.jpg'),
(69, 'Cognizant Brainbench JSP Certificate', 'JSP_Certificate_Amit.jpg'),
(70, 'Cognizant Brainbench Struts Certificate', 'Struts_Certificate_Amit.jpg'),
(71, 'Ration Card New', 'RationCard1_New.jpg'),
(72, 'Ration Card New1', 'RationCard2_New.jpg'),
(73, 'My Photo-1', 'amittcs.jpg'),
(74, 'My Photo-2', 'DSCN0493.JPG'),
(75, 'Visa Photo 35 by 45 mm', 'visa photo 35 by45 mm.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myletters`
--

CREATE TABLE `tbl_myletters` (
  `id` int(10) NOT NULL,
  `docname` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_myletters`
--

INSERT INTO `tbl_myletters` (`id`, `docname`, `filename`) VALUES
(74, 'Cognizant Offer Letter', 'Cognizant_OfferLetter.pdf'),
(75, 'Cognizant Confirmation Letter', 'Cognizant_Confirmation_2011.pdf'),
(76, 'Cognizant Revision Letter 2012', 'Cognizant_Revision_2012.pdf'),
(77, 'Cognizant Revision Letter 2013', 'Cognizant_Revision_2013.pdf'),
(78, 'Cognizant Experience Letter', 'Cognizant_Experience_Letter.pdf'),
(79, 'Cognizant Brainbench Javascript Certificate', 'Cognizant_Javascript_Certificate.pdf'),
(80, 'Cognizant Brainbench JSP Certificate', 'Cognizant_JSP_Certificate.pdf'),
(81, 'Cognizant Brainbench Struts Certificate', 'Cognizant_Struts_Certificate.pdf'),
(82, 'TCS Offer Letter', 'TCS_OfferLetter.pdf'),
(83, 'TCS Confirmation Letter', 'TCS_Confirmation.pdf'),
(84, 'TCS Anniversary Letter', 'TCSAnniversary_Letter_2014-15.pdf'),
(85, 'TCS Revision Letter 2014-15', 'TCS_Revision_Letter_2014-15.pdf'),
(86, 'TCS  Reliving Letter', 'TCS_Reliving_Letter.pdf'),
(87, 'TCS  Reliving Letter-1', 'TCS_Reliving_Letter1.pdf'),
(88, 'TCS Experience Letter', 'TCS_Experience_Letter.pdf'),
(89, 'TCS Resignation  Acceptance Letter', 'TCS_Resignation_Acceptance_Letter.pdf'),
(90, 'Wipro Offer Letter', 'Wipro_OfferLetter.pdf'),
(91, 'Wipro Confirmation Letter', 'Wipro_Confirmation_Letter.pdf'),
(92, 'Wipro Revision Letter 2017', 'Wipro_Revision_Letter_2017.pdf'),
(93, 'Wipro Resignation Acceptance Letter', 'Wipro_Resignation_Acceptance_Letter.pdf'),
(94, 'Wipro Experience Letter', 'Wipro_Experience_Letter.pdf'),
(95, 'HDFC HomeLoan Sanction Letter', 'HDFC_HomeLoan_SanctionLetter.pdf'),
(96, 'Capgemini Offer Letter', 'Capgemini_OfferLetter.pdf'),
(97, 'TCS Appointment Letter', 'TCS_Appointment_Letter.pdf'),
(98, 'CapGemini Confirmation Letter', 'CapGemini_Confirmation_Letter.pdf'),
(100, 'CapGemini Revision  Letter 2018', 'CapGemini_Revision_Letter_2018.pdf'),
(101, 'CapGemini Resignation Acceptance Letter', 'CG_Resignation_Acceptance_Letter.pdf'),
(102, 'CapGemini Relieving  Letter ', 'CG_Relieving_Letter.pdf'),
(103, 'CapGemini Experience Letter', 'CG_Experience_Letter.pdf'),
(104, 'Virtusa Polaris Offer Letter', 'VirtusaPolaris_Offer_Letter.pdf'),
(105, 'Virtusa Polaris Confirmation Letter', 'Virtusa_Confirmation_Letter.pdf'),
(106, 'Cognizant Offer Letter 2019', 'Cognizant_Offer_Letter_2019.pdf'),
(108, 'Virtusa Resignation Acceptance Letter', 'Virtusa_Resignation_Acceptance_Letter.pdf'),
(112, 'Virtusa Experience Letter', 'Virtusa_Experience_Letter.pdf'),
(113, 'TCS  FullAndFinal  Settlement', 'TCS_FullAndFinal_Settlement.pdf'),
(114, 'Wipro FullAndFinal Settlement', 'Wipro_FullAndFinal_Settlement.PDF'),
(117, 'Capgemini FullAndFinal Settlement', 'Capgemini_FullAndFinal_Settlement.pdf'),
(116, 'Virtusa FullAndFinal Settlement', 'Virtusa_FullAndFinal_Settlement.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mypayslips`
--

CREATE TABLE `tbl_mypayslips` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mypayslips`
--

INSERT INTO `tbl_mypayslips` (`id`, `date`, `name`) VALUES
(536, '2011-02-28', 'Feb2011.pdf'),
(29893, '2011-01-31', 'Jan2011.pdf'),
(20204, '2011-03-31', 'March2011.pdf'),
(17375, '2011-04-30', 'April2011.pdf'),
(71849, '2011-05-31', 'May2011.pdf'),
(47451, '2011-06-30', 'June2011.pdf'),
(54355, '2011-07-31', 'July2011.pdf'),
(55744, '2011-08-31', 'August2011.pdf'),
(81882, '2011-09-30', 'Sep2011.pdf'),
(253, '2011-10-31', 'Oct2011.pdf'),
(99908, '2011-11-30', 'Nov2011.pdf'),
(44619, '2011-12-31', 'Dec2011.pdf'),
(76542, '2012-01-31', 'Jan2012.pdf'),
(35455, '2012-02-29', 'Feb2012.pdf'),
(76047, '2012-03-31', 'Mar2012.pdf'),
(87919, '2012-04-30', 'April2012.pdf'),
(22641, '2012-05-31', 'May2012.pdf'),
(3465, '2012-06-30', 'June2012.pdf'),
(68027, '2012-07-31', 'July2012.pdf'),
(42599, '2012-08-31', 'August2012.pdf'),
(31580, '2012-09-30', 'Sep2012.pdf'),
(47893, '2012-10-31', 'Oct2012.pdf'),
(99725, '2012-11-30', 'Nov2012.pdf'),
(45352, '2012-12-31', 'Dec2012.pdf'),
(94686, '2013-01-31', 'Jan2013.pdf'),
(6344, '2013-02-28', 'Feb2013.pdf'),
(19522, '2013-03-31', 'Mar2013.pdf'),
(11519, '2013-04-30', 'April2013.pdf'),
(55100, '2013-06-30', 'June2013.pdf'),
(12076, '2013-07-31', 'July2013.pdf'),
(70403, '2013-08-31', 'August2013.pdf'),
(44060, '2013-09-23', 'Sep2013.pdf'),
(59074, '2013-05-31', 'May2013.pdf'),
(24953, '2013-10-31', 'Oct2013.pdf'),
(64580, '2013-11-30', 'Nov2013.pdf'),
(24063, '2013-12-31', 'Dec2013.pdf'),
(5920, '2014-01-31', 'JAN_2014.pdf'),
(74291, '2014-02-28', 'FEB_2014.pdf'),
(6976, '2014-03-31', 'MAR_2014.pdf'),
(39832, '2014-04-30', 'APR_2014.pdf'),
(17566, '2014-05-31', 'MAY_2014.pdf'),
(46932, '2014-06-30', 'June_2014.pdf'),
(24802, '2014-07-31', 'JUL_2014.pdf'),
(22525, '2014-08-31', 'AUG_2014.pdf'),
(63756, '2014-09-30', 'SEP_2014.pdf'),
(28868, '2014-10-31', 'OCT_2014.pdf'),
(60059, '2014-11-30', 'NOV_2014.pdf'),
(20752, '2014-12-31', 'DEC_2014.pdf'),
(23278, '2015-01-31', 'JAN_2015.pdf'),
(71356, '2015-02-28', 'FEB_2015.pdf'),
(11588, '2015-03-31', 'MAR_2015.pdf'),
(59457, '2015-04-30', 'APR_2015.pdf'),
(24565, '2015-05-31', 'MAY_2015.pdf'),
(99823, '2015-06-30', 'JUN_2015.pdf'),
(56335, '2015-07-31', 'July2015.pdf'),
(99355, '2015-08-31', 'August_2015.pdf'),
(22584, '2015-09-30', 'Sep-2015.pdf'),
(15529, '2015-10-31', 'Oct_2015.pdf'),
(62668, '2015-11-30', 'Nov-2015.pdf'),
(81656, '2015-12-31', 'Dec-2015.pdf'),
(96259, '2016-01-31', 'Jan_2016.pdf'),
(61270, '2016-02-29', 'Feb-2016.pdf'),
(14497, '2016-03-31', 'Mar-2016.pdf'),
(90435, '2016-04-30', 'Apr_2016.pdf'),
(83266, '2016-05-31', 'May_2016.pdf'),
(61993, '2016-06-30', 'June_2016.pdf'),
(42133, '2016-07-31', 'July_2016.pdf'),
(12871, '2016-08-31', 'Aug_2016.pdf'),
(50745, '2016-09-30', 'Sep_2016.pdf'),
(89442, '2016-10-31', 'Oct_2016.pdf'),
(29244, '2016-11-30', 'Nov_2016.pdf'),
(37891, '2016-12-31', 'Dec-2016.pdf'),
(69354, '2017-01-31', 'Jan_2017.pdf'),
(99751, '2017-02-28', 'Feb_2017.pdf'),
(20923, '2017-03-31', 'Mar_2017.pdf'),
(57944, '2017-04-30', 'Apr_2017.pdf'),
(28609, '2017-05-31', 'May_2017.pdf'),
(36946, '2017-06-30', 'June_2017.pdf'),
(34024, '2017-07-31', 'July_2017.pdf'),
(44220, '2017-08-31', 'Aug_2017.pdf'),
(72235, '2017-09-30', 'Sep_2017.pdf'),
(35329, '2017-10-31', 'Oct_2017.pdf'),
(27525, '2017-11-30', 'Nov_2017.pdf'),
(9902, '2017-12-31', 'Dec_2017.pdf'),
(34040, '2018-01-31', 'Jan_2018.pdf'),
(92970, '2018-02-28', 'Feb_2018.pdf'),
(19379, '2018-03-31', 'Mar_2018.pdf'),
(12264, '2018-04-30', 'Apr_2018.pdf'),
(85348, '2018-05-31', 'May_2018.pdf'),
(30764, '2018-06-30', 'June_2018.pdf'),
(13236, '2018-07-31', 'July_2018.pdf'),
(47830, '2018-08-31', 'Aug_2018.pdf'),
(1687, '2018-09-30', 'Sep_2018.pdf'),
(2420, '2018-10-31', 'Oct_2018.pdf'),
(99713, '2018-11-30', 'Nov_2018.pdf'),
(12283, '2018-12-31', 'Dec_2018.pdf'),
(60944, '2019-01-31', 'Jan_2019.pdf'),
(89107, '2019-02-28', 'Feb_2019.pdf'),
(39360, '2019-03-31', 'Mar_2019.pdf'),
(99228, '2019-04-30', 'Apr_2019.pdf'),
(28160, '2019-05-31', 'May_2019.pdf'),
(44134, '2019-06-30', 'June_2019.pdf'),
(69865, '2019-07-31', 'July_2019.pdf'),
(75596, '2019-08-31', 'Aug_2019.pdf'),
(11175, '2019-09-30', 'Sep_2019.pdf'),
(49202, '2019-10-31', 'Oct_2019.pdf'),
(19495, '2019-11-30', 'Nov_2019.pdf'),
(12911, '2019-12-31', 'Dec_2019.pdf'),
(36023, '2020-01-31', 'Jan_2020.pdf'),
(70011, '2020-02-29', 'Feb_2020.pdf'),
(86743, '2020-03-31', 'Mar_2020.pdf'),
(20213, '2020-04-30', 'Apr_2020.pdf'),
(8191, '2020-05-31', 'May_2020.pdf'),
(47334, '2020-06-30', 'June_2020.pdf'),
(5045, '2020-07-31', 'July_2020.pdf'),
(29523, '2020-08-31', 'Aug_2020.pdf'),
(86948, '2020-09-30', 'Sep_2020.pdf'),
(98584, '2020-10-31', 'Oct_2020.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mypdfdocs`
--

CREATE TABLE `tbl_mypdfdocs` (
  `id` int(10) NOT NULL,
  `docname` text NOT NULL,
  `pdffilename` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mypdfdocs`
--

INSERT INTO `tbl_mypdfdocs` (`id`, `docname`, `pdffilename`) VALUES
(10, 'Passport ', 'Passport_Amit.pdf'),
(5, 'SSC Marksheet', 'SSC_Amit.pdf'),
(6, 'SSC Certificate', 'SSC_Certificate_Amit.pdf'),
(7, 'HSC Marksheet', 'HSC_Amit.pdf'),
(8, 'HSC Certificate', 'HSC_Certificate_Amit.pdf'),
(11, 'Birth Certificate', 'Birth_Certificate_Amit.pdf'),
(12, 'Domicile Certificate', 'Domicile_Certificate_Amit.pdf'),
(13, 'Election Card-Page1', 'Election_Card_Amit.pdf'),
(14, 'Election Card-Page2', 'Election_Card_Amit1.pdf'),
(15, 'MCA Leaving Certificate', 'Leaving_Certificate_Amit.pdf'),
(16, 'MCA Certificate Marathi', 'MCA_Certificate_Marathi_Amit.pdf'),
(17, 'Pan Card', 'Pan_Card_Amit.pdf'),
(18, 'School Leaving Certificate', 'School_Leaving_Certificate_Amit.pdf'),
(19, 'MCA Certificate English', 'MCA_Certificate_English_Amit.pdf'),
(20, 'FYBCS Marksheet', 'Fybcs.pdf'),
(21, 'SYBCS Sem-1', 'Sybcs-Sem1.pdf'),
(22, 'SYBCS Marksheet', 'Sybcs.pdf'),
(23, 'Tybcs-Sem1', 'Tybcs-Sem1.pdf'),
(24, 'TYBCS Marksheet', 'Tybcs.pdf'),
(25, 'FYMCA-Sem1 Makrsheet', 'Fymca-Sem1.pdf'),
(26, 'FYMCA-Sem2 Makrsheet', 'Fymca.pdf'),
(27, 'SYMCA-Sem1 Makrsheet', 'Symca-Sem1.pdf'),
(28, 'SYMCA-Sem2 Makrsheet', 'Symca.pdf'),
(29, 'TYMCA-Sem1 Makrsheet', 'Tymca-Sem1.pdf'),
(30, 'TYMCA-Sem2 Makrsheet', 'Tymca.pdf'),
(31, 'BCS Certificate', 'Graduation_Certificate_Amit.pdf'),
(32, 'NSR', 'NSR.pdf'),
(33, 'Aadhar Card', 'Aadhar_Card.pdf'),
(35, 'GB Certificate', 'GB Certificate.pdf'),
(36, 'Marriage Certificate', 'Marriage_Certificate.pdf'),
(80, 'Universal Account Number', 'UAN.pdf'),
(39, 'SSC Marksheet-Digital', 'SscMarksheet-Digital.pdf'),
(40, 'SSC Certificate-Digital', 'SscCertificate-Digital.pdf'),
(41, 'HSC Marksheet-Digital', 'HscMarksheet-Digital.pdf'),
(42, 'HSC Certificate-Digital', 'HscCertificate-Digital.pdf'),
(71, 'EAadhaar Amit Baramati', 'EAadhaar_Amit_Baramati.pdf'),
(44, 'Index2', 'Index2.pdf'),
(45, 'Ration Card', 'RationCard__New.pdf'),
(72, 'EAadhaar Amit Narhe', 'EAadhaar_Amit_Narhe.pdf'),
(73, 'GB Certificate', 'GB Certificate.pdf'),
(79, 'i10 Magna MH12FU1269', 'i10 Magna MH12FU1269.pdf'),
(76, 'Pleasure MH12FB0652', 'Pleasure MH12FB0652.pdf'),
(77, 'Indane Gas Voucher', 'Indane Gas Voucher.pdf'),
(78, 'Driving License MCWOG', 'Driving License-MCWOG.pdf'),
(81, 'Pleasure MH42W7583', 'Pleasure MH42W7583.pdf'),
(82, 'Jupiter MH12RL4688', 'Jupiter MH12RL4688.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otherspdfdocs`
--

CREATE TABLE `tbl_otherspdfdocs` (
  `id` int(10) NOT NULL,
  `docname` text NOT NULL,
  `pdffilename` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otherspdfdocs`
--

INSERT INTO `tbl_otherspdfdocs` (`id`, `docname`, `pdffilename`) VALUES
(46, 'All Aadhar Cards', 'All_Aadhar_Cards.pdf'),
(47, 'All Election Cards', 'All_Election_Cards.pdf'),
(48, 'All Pan Cards', 'All_Pan_Cards.pdf'),
(49, 'Anil Bhalerao - All Documents', 'Anil Bhalerao-All Documents.pdf'),
(50, 'Ajit Bhalerao - All Documents', 'Ajit Bhalerao-All Documents.pdf'),
(51, 'Sonali Bhalerao - All Documents', 'Sonali Bhalerao-All Documents.pdf'),
(52, 'Malti Bhalerao - All Documents', 'Malti Bhalerao.pdf'),
(53, 'Janhavi Bhalerao - All Documents', 'Janhavi Bhalerao - All Documents.pdf'),
(54, 'Chaitanya Wagh - All Documents', 'Chaitanya Wagh-All Documents.pdf'),
(55, 'Reshma Wagh - All Documents', 'Reshma Wagh - All Documents.pdf'),
(61, 'Amit Bhalerao - Al IT Return Receipts', 'ITReturns.pdf'),
(62, 'Narhe Flat Receipts', 'Flat Receipts.pdf'),
(78, 'Anil Bhalerao Max Life Receipts', 'Anil Bhalerao Max Life Receipts.pdf'),
(74, 'Ajit Bhalerao -LIC Receipts', 'Ajit Bhalerao -LIC Receipts.pdf'),
(75, 'Amit Bhalerao -LIC Receipts', 'Amit Bhalerao -LIC Receipts.pdf'),
(76, 'Amit Bhalerao Max Life Receipts', 'Amit Bhalerao Max Life Receipts.pdf'),
(77, 'Ajit Bhalerao Max Life Receipts', 'Ajit Bhalerao Max Life Receipts.pdf'),
(79, 'IT Returs', 'ITReturns.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pune_it_companies`
--

CREATE TABLE `tbl_pune_it_companies` (
  `cmpny_id` int(20) NOT NULL,
  `cmpny_name` text NOT NULL,
  `cmpny_area_location` text NOT NULL,
  `cmpny_address` varchar(100) DEFAULT 'Not Specified',
  `cmpny_website` varchar(100) DEFAULT 'Not Specified',
  `cmpny_emailid` varchar(100) DEFAULT 'Not Specified',
  `cmpny_contactno` varchar(15) DEFAULT '0',
  `cmpny_technologies` varchar(200) DEFAULT 'Not Specified',
  `cmpny_domain_areas` varchar(200) DEFAULT 'Not Specified',
  `cmpny_type` varchar(200) DEFAULT 'Not Specified'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pune_it_companies`
--

INSERT INTO `tbl_pune_it_companies` (`cmpny_id`, `cmpny_name`, `cmpny_area_location`, `cmpny_address`, `cmpny_website`, `cmpny_emailid`, `cmpny_contactno`, `cmpny_technologies`, `cmpny_domain_areas`, `cmpny_type`) VALUES
(1, 'Boot Infotech', 'Baner', 'Suite 602, 6th Floor, Amar Neptune, Behind Big Bazaar, Baner Road, Pune, India 411045', 'www.bootinfotech.com', 'info@bootinfotech.com', '9075079757', 'Java', 'Banking and Financial Services', 'Product'),
(3, 'Barclays Technology India Pvt Ltd', 'Hinjawadi', 'The Quadron Business Park Rajeev Gandhi Infotech Park 411057, Phase 2, Hinjewadi Rajiv Gandhi Infote', 'www.barclays.in', '', '0206695411', 'Java,Spring,Hibernate,AngularJs', 'Banking and Financial Services', 'Captive'),
(4, 'Enzigma Software Pvt. Ltd', 'Baner', ' 111/10/3, Baner Road, Opp D-Mart, Behind Dominos, Pune, Maharashtra 411045', 'www.enzigma.com', '', '08600515678', 'ASP.net', '', 'Product'),
(5, 'Cognizant Technology Solutions', 'Hinjawadi', 'Plot # 26, Rajiv Gandhi Infotech Park, MIDC, Hinjawadi, Pune, Maharashtra 411057', 'www.cognizant.com', '', '020 4021 6000', '', '', 'Service'),
(6, 'Xoriant Solutions Pvt. Ltd.', 'Baner', '501-502, 5th Floor, Amar Paradigm, Baner Road, Near D-Mart,Baner, Pune, Maharashtra 411045', 'www.xoriant.com', '', '020 6604 6000', 'Java,BigData,Cloud,Mobility', 'Banking and Financial Services,Hi Tech,Healthcare,Telecom,Automotive', 'Product'),
(7, 'Veritas Technologies', 'Baner', 'Survey No 3/8, Rmz Icon Project, Baner Road, Village Baner, Pune, Maharashtra 411005', 'www.veritas.com', '', '020 6615 7000', '', '', 'Product'),
(8, 'Survik Software Limited', 'Baner', '2nd Floor, Sapphire Chambers, Baner Road, Opposite to Food Bazar, Baner,\r\n\r\nPune, Maharashtra 411045', 'www.survik.com', '', ' 020 2729 2427', '', 'Manufacturing', 'Service'),
(9, 'Bitwise Solutions Pvt. Ltd', 'Baner', 'Baner Rd, Baner, Pune, Maharashtra 411045', 'www.bitwiseglobal.com', '', ' 020 4010 2000', '', '', 'Service and Product'),
(10, 'Vyom Labs Pvt. Ltd', 'Baner', 'Aditi Samruddhi, S. NO. 173/4, Baner, Pune, Maharashtra 411045', 'www.vyomlabs.com', 'info@vyomlabs.com', '', 'Java,Selenium', '', 'Product'),
(11, 'Braves Technologies', 'Baner', 'Baner, Pune, Maharashtra 411045', 'www.bravestechnologies.com', '', '020 4124 2690', 'Java,Cognos', '', ''),
(12, 'IDeaS â€“ A SAS Company', 'Baner', '3rd Floor, Amar Megaplex ,Sr. no 110, Plot no 11 / 24, Banner Road, Above D Mart, Pune, Maharashtra ', 'www.ideas.com/en', '', '020 6600 2000', 'Java,Spring,Hibernate', '', 'Product'),
(13, 'ICERTIS', 'Baner', 'First Floor, Amar Megaplex S. No. 0, Plot No. 11/24, 11, Baner Road,Baner, Pune, Maharashtra 411045', 'www.icertis.com', '', '020 6627 7777', '', '', ''),
(14, 'iD4 Realms Infotech Pvt. Ltd.', 'Baner', 'iD4 Realms Infotech Pvt. Ltd.\r\nA, \'Bhagirathi\', S.No 1-3-3 & 4\r\nBaner Rd, Baner\r\nPune - 411 045\r\nPh:', 'www.id4-realms.com', 'admin@id4-realms.com', '', 'Java,Openstack,CloudStack', '', 'Service and Product'),
(15, 'Prorigo Software Pvt. Ltd.', 'Pashan', 'Sr.No. 140 / 2, Orange Life,\r\n1st floor, opp. Datta Mandir,\r\nPashan-Sus Road, Pashan,\r\nPune - 411021', 'www.prorigosoftware.com', 'enquiry@prorigosoftware.com', '020 - 66241800', 'Java,BigData,Cloud,Mobility,.NET', '', 'Service and Product'),
(16, 'Great Software Laboratory Pvt. Ltd.', 'Baner', 'Amar Arma Genesis, Baner Road,', 'www.gslab.com', '', '020 4671 1000/1', '', 'Energy,Fintech,Hitech,Telecom,Security and Survelliance', 'Service'),
(17, 'Harbinger Group', 'Baner', '102/A, â€œGlobal Portâ€, Mumbai-Banglore Highway, Baner Road,\r\n\r\nPune, Maharashtra 411045', 'www.harbinger-systems.com', '', '020 6673 2500', '', 'HR,Health,Learning', 'Service'),
(18, 'Futurism Technologies Pvt. Ltd.', 'Baner', 'Futurism House, Survey No. 105, Opp. Sadanand Resort,\r\nMumbai-Bengaluru Bypass Highway, Baner, Pune ', 'www.futurismtechnologies.com', '', '20 6712 0700', '', 'Banking and Financial Services,Healthcare,Telecom,Govt,Ecommerce,Education,Energy', 'Service'),
(19, 'Benison Technologies', 'Aundh', 'Abja Pavillion, 3rd Floor, D P Road, Aundh, Pune-411007, Maharashtra, India', 'www.benisontech.com', '', '20 25897044 / 4', '', 'Networking,IOT,Embedded', 'Product'),
(20, 'Digital Cues', 'Shivajinagar', '', 'www.digitalcues.com', '', '', '', '', 'Service'),
(21, 'Nitor Infotech Pvt. Ltd', 'Hinjawadi', 'Rhine, Block 1.5, Embassy Tech Zone, Rajiv Gandhi Infotech Park, Hinjewadi Phase - II, Pune, Maharas', 'www.nitorinfotech.com', '', '020 6694 0150', '', 'Healthcare,Retail', 'Service'),
(22, 'PubMatic India Pvt. Ltd.', 'Baner', '6th Floor, Amar Paradigm, Near D-mart, Baner Road, Pune, Maharashtra 411045', 'www.pubmatic.com', '', '020 6728 5700', '', 'Digital Media industry', 'Product'),
(23, 'Xpanxion Int. Pvt. Ltd.', 'Aundh', ' Sarjaa Rd, Sahil Park, Sanewadi, Aundh, Pune, Maharashtra 411007', 'www.xpanxion.com', '', '020 6629 0500', '', '', 'Service'),
(24, 'PTC Software', 'Kalyani Nagar', ' S.No.30/3,31/1 & 2A GF,MZF, 203, 204, 201, 202, 301 & 901, 5th floor, Weikfield IT CITI Info Park T', 'www.ptc.com', '', '020 6605 3000', '', 'CAD,PLM,ALM,SLM', 'Product'),
(25, 'Cybage Software Pvt Ltd', 'Kalyani Nagar', 'Cybage Software Pvt. Ltd.\r\nCybage Towers\r\nSurvey No 13A/ 1+2+3/1\r\nWadgaon Sheri\r\nPune, Maharashtra -', 'www.cybage.com', '', '20-66041700', '', 'Supply Chain and Logistics,Media & Entertainment,Travel & Hospitality,Online Retail', 'Service'),
(26, 'Tech Mahindra', 'Hinjawadi', 'Plot No.1, MIDC Phase III Main Road, Phase 3, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pimpr', 'www.techmahindra.com', '', ' 020 4225 0000', '', 'Telecommunications', 'Service'),
(27, 'Tata Consultancy Services', 'Hinjawadi', 'Sahyadri Park, Plot No. 2 & 3, Phase 3, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Mahar', 'www.tcs.com', '', '020 6794 0000', '', '', 'Service and Product'),
(28, 'Capgemini India Pvt Ltd', 'Magarpatta', '1st, 3rd, 4th & 5th Floor, B-1, Cerebrum IT Park, Kalyaninagar, Pune, Maharashtra 411014', 'www.capgemini.com', '', '020 2760 1000', '', '', 'Service'),
(29, 'Wipro Technologies', 'Hinjawadi', 'Plot No.31 MIDC, Pune Infotech Park, Ph-2 Hinjewadi, Pune, Maharashtra 411057', 'www.wipro.com', '', '020 2293 3700', '', '', 'Service'),
(30, 'Synechron Technologies', 'Hinjawadi', 'CEDAR Ascendas IT Park Building, Rajiv Gandhi Infotech Park, Hinjewadi Phase III, Pune, Maharashtra ', 'www.synechron.com', '', '020 4290 1000', '', 'Capital Markets', 'Service'),
(31, 'YASH Technologies Pvt. Ltd.', 'Magarpatta', 'Level-7, Tower 15, Cybercity, Magarpatta City, Hadapsar, Pune, Maharashtra 411028', 'www.yash.com', '', '020 6608 8000', '', '', 'Service'),
(32, 'Hexaware Technologies Pvt. Ltd.', 'Hinjawadi', ' Phase 3, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Maharashtra 411057', 'www.hexaware.com', '', '02066988000', '', '', 'Service'),
(33, 'Infosys', 'Hinjawadi', 'Plot No. 1, Rajiv Gandhi Infotech Park, Hinjawadi, Taluka Mulshi, Pune, Maharashtra 411057', 'www.infosys.com', '', '020 2293 2800', '', '', 'Service and Product'),
(34, 'InverseSoft Pvt.Ltd.', 'Baner', 'Survay no. 133/3, Shriram Bhavan\r\nBalewadi Fata, Baner Road\r\nBaner, Pune. Maharashtra 411045, (INDIA', 'www.inversesoft.com', '', '20 60501060', '', '', 'Service'),
(35, 'Talentica Software Pvt. Ltd', 'Baner', '4th Floor, Amar Megaplex, Sr. No. 110, Plot No. 11/, 4,\r\nBaner Rd, Baner, Pune, Maharashtra 411045', 'www.talentica.com', '', '020 4075 1111', '', '', 'Product'),
(36, 'INTELLECT LOGIC SOFTWARES PVT LTD', 'Baner', '10, Eastern Paradise, Beside Prabhavee Tech Park, Baner, Pune,Maharashtra 411045', 'www.intellect-logic.com', '', '080071 72849', '', '', 'Service'),
(37, 'Prescient Technologies Pvt. Ltd.', 'Baner', 'Teerth Technospace, Survey No 103, B507,\r\n4th Floor, Off Mumbai Bangalore Bypass, Baner\r\nPune 411045', 'www.pre-scient.com', 'contact@pre-scient.com', '20-664 779 00', '', 'CAD,CAM', 'Product'),
(38, 'Josh Software Private Limited', 'Baner', 'A13/14 Sunflower Building, 5th Floor, \r\nSurvey No. 77/1, Mahalunge Baner Road, \r\nBaner, Pune - 411 0', 'www.joshsoftware.com', 'info@joshsoftware.com', '20-65313161 ', 'Ruby ', '', 'Service'),
(39, 'Xpointers consulting private limited', 'Baner', 'xPointers Consulting Private Limited\r\n706, B Wing, 7th Floor, Teerth Technospace,\r\nAdjoining Mercede', 'www.xpointers.com', '', '9021212383', '', '', 'Service'),
(40, 'Dimentrix Technologies Pvt. Ltd.', 'Baner', '101, Paradigm Emerald, Ramindu Park, Baner, Pune, Maharashtra 411045', 'www.dimentrix.com', '', '020 3240 5519', '', '', 'Product'),
(41, 'Uberall Solutions (I) Limited', 'Baner', '401, Mont Vert Zenith,\r\nBaner Road, \r\nPune - 411 045 Maharashtra (India)', 'www.uberall.in', '', ' 020 2729 3902', '', '', 'Service and Product'),
(42, 'Forgeahead Solutions Pvt. Ltd', 'Mundhwa', '601 Zero One\r\nLevel 6, Mundhwa\r\nPune 411036, India', 'www.forgeahead.io', '', '20 66445900', '', '', 'Service and Product'),
(43, ' CCR Technologies Private Limited', 'Baner', '101 & 102 Amar Neptune, Apex IT Park, Survey No. 6-1-1 Baner, Pune 411045, Maharashtra', 'www.ccr-tech.com', '', '020 2729 2807', '', '', 'Service'),
(44, 'IMC GLOBAL SERVICE', 'Baner', '82/1, 5th Floor, Kapil Complex, Baner Rd, Baner, Pune, Maharashtra 411045', 'www.imc.com', '', '020 2729 1522', '', '', 'Service'),
(45, ' iASYS Technology Solutions Pvt Ltd', 'Baner', '401 A/2,, Nano Space IT Park, Baner â€“ Pashan Link Rd, Baner, Pune, Maharashtra 411045', 'www.iasys.co.in', '', '096234 47255', '', '', 'Service'),
(46, 'Techlead Software Engineering Private Limited', 'Baner', 'Techlead Bhavan, Plot No.1, S. No. 112/1, Baner, Pune - 410045', 'www.techlead-india.com', '', '020-27291681', '', '', 'Product'),
(47, 'SphereGen Software', 'Baner', '4th Floor, Pride Purple Coronet, Baner, Pune, Maharashtra 411045', 'www.spheregen.com', '', '020 2729 3815', '', '', 'Service and Product'),
(48, 'SpadeWorx Software Services', 'Baner', '101, Nano Space IT Park, Baner-Pashan Link Road, Behind Symantec,\r\nBaner, Pune, Maharashtra 411045', 'www.spadeworx.com', '', '020 6647 3300', '.NET', '', 'Service'),
(49, 'Aeon Logiciel', 'Baner', 'Mitrangan, Baner Gaon, Baner, Pune, Maharashtra 411045', 'www.aeonlogiciel.com', '', '020 6560 1606', '', '', ''),
(50, 'Delmon Solutions', 'Baner', 'Teerth Technospace IT Park,\r\nOffice C-207, 2nd Floor,\r\nOff Mumbai Bangalore Highway,\r\nAdjoining Merc', 'www.delmonsolution.com', '', '090110 79619', 'Java,Hadoop,BigData', '', 'Service and Product'),
(51, ' Averon Infotech Pvt Ltd', 'Baner', 'Pancard Club Rd, Baner, Pune, Maharashtra 411045', 'www.averoninfotech.com', '', ' 020 6417 6442', '', '', ''),
(52, 'Globant', 'Hinjawadi', '4th & 5th Floor, IT8 Building, Blue Ridge SEZ, Rajiv Gandhi Infotech Park - Phase-I, Hinjewadi,Pune', 'www.globant.com', '', ' 800-266-0206', '', '', ''),
(53, 'CoreView Systems Private Limited', 'Baner', '101, Pride Purple Coronate, Above Bata Showroom, Baner, Pune, Maharashtra 411045', 'www.coreviewsystems.com', 'info@coreviewsystems.com', '', '', '', 'Service'),
(54, 'MindTickle Inc', 'Baner', 'Solitaire World, Bangalore \r\nHighway, Baner, Pune 411045', 'www.mindtickle.com', '', '98339 96455', '', '', ''),
(55, 'Biz4Solutions', 'Baner', '201, Sai Shilp Business Centre,\r\nSr. No. 79, Balewadi Phata, Baner,\r\nPune, MH-411045', 'www.biz4solutions.com', '', '', 'Java,.NET', '', 'Service and Product'),
(56, 'iSN Global Solutions Pvt. Ltd.', 'Baner', '1st Floor, Pashan Hwy Side Rd, Mohan Nagar Co-Op Society, Baner,\r\nPune, Maharashtra 411045', 'www.isngs.com', '', '020 6673 1000', '', '', ''),
(57, 'Salt Technologies', 'Baner', 'Baner Rd, Baner, Pune, Maharashtra 411045', 'www.salttechno.com', '', ' 020 6562 2622', 'PHP', '', 'Service'),
(58, 'Deven InfoTech Pvt. Ltd.', 'Baner', 'Office No.101, 102 & 103, 1st Floor, Survey No.111/10/1, Krishna Avenue,\r\nOpposite â€œD Martâ€, Ban', 'www.deveninfotech.com', '', '8379850526', 'Java,.NET,Python,Android,', '', 'Service'),
(59, 'Exceptionaire Technologies', 'Baner', '102 Aurum Avenue, Beside Cummins\r\nBanerâ€“Balewadi Link Road\r\nPune 411045, India', 'www.exceptionaire.com', '', '020 6511 2500', 'PHP,iOS,Android', '', 'Service'),
(60, 'Adaptive Softech Pvt Ltd', 'Baner', 'No 201, Montreal Business Centre Tower 2,, S.No. 272/4/5/6/7, Pallod Farms, Baner Road, Baner, Pune,', 'www.adaptive.com', '', ' 020 6012 2299', '', '', ''),
(61, 'Silicus Technologies India Private Limited', 'Bopodi', 'Survey No. 41-C&41/A-1/5, Building â€˜Bâ€™,\r\n6th & 7th Floor, 34 Aundh Road, Aundh IT Park,\r\nBhau Pa', 'www.silicus.com', '', '020 3939 5430', 'Java,.NET,Python,Android,Mean,C++', '', 'Service'),
(62, ' CredenTek Software & Consultancy Pvt Ltd', 'Baner', '303 & 304, Pride Purple Accord, 3rd Floor, S.No 3/1, Baner, Pune 411045-INDIA', 'www.credentek.com', '', '', 'C++,Java', '', 'Product'),
(63, 'BNT Soft', 'Bopodi', 'Office No. 301-304, â€œAâ€ Building,Pune IT Park, 34, Aundh Road,Bhau Patil Marg, Pune, Maharashtra', 'www.bnt-soft.com', '', '020 6529 1835', '', 'Payments', 'Product'),
(64, ' InnovaPoint Infotech Pvt. Ltd', 'Pashan-Sus Road', 'Unit no 104, Supreme HQ, Near Audi Showroom,Pashan â€“ Sus Road,\r\nPune-411045', 'www.innovapoint.com', '', '02067112105', '.NET', 'Manufacturing,Automotive', 'Service'),
(65, 'Acceltree Software Private Limited', 'Pashan-Sus Road', '  604, Supreme HQ, Mumbai-Bangalore Highway, Near Audi Showroom, Baner, Pune - 411045, Maharashtra, ', 'www.acceltree.com', '', '20-6734 2000', '', 'Insurance', 'Service and Product'),
(66, 'Bisil', 'Bopodi', 'B- 501, Pune IT Park 34,Aundh Road Bhau Patil Marg,Pune 411 020, Bhau Patil Rd,\r\nBopodi, Pune, Mahar', 'www.bisil.com', '', '020 3020 8217', '', '', 'Product'),
(67, 'DEEN TECHNOLOGIES', 'Bopodi', '12, Shri Shilpa, Bhaupatil Road, Bopodi,\r\nNear Pune IT Park, Pune, India 411020', 'www.deen-technologies.com', '', '097305 79879', '', '', 'Service'),
(68, 'Whiz Technologies', 'Bopodi', 'Unit No. C/1/103-104/29 34, Aundh Road,Bhau Patil Marg, Bopodi,Pune 411 020', 'www.whizti.com', '', '', '', '', ''),
(69, 'Yagna IQ', 'Bopodi', 'Pune IT Park 34, Aundh Road, Bhau Patil Marg, Bopodi, Pune 411 020', ' www.yagnaiq.com', '', '', 'Java', '', ''),
(70, 'TransPerfect Solutions India Private Limited', 'Bopodi', 'B â€“ 401-404, Pune IT Park 34 Aundh Road Bhau Patil Marg, Bopodi Pune, India 411 020', 'www.transperfect.com', '', '2025820755', '', '', ''),
(71, 'Alepo Technologies Pvt. Ltd.', 'Bopodi', ' Build. B, Office No. 301, 3rd Floor,Pune IT Park, 34, Aundh Road,\r\nBhau Patil Road, Pune-411020', 'www.alepo.com', '', '+91 020-4003498', '', '', ''),
(72, 'Flightcase IT Services P Ltd', 'Bopodi', 'Pune IT Park, 34, Aundh Road,Bhau Patil Road, Pune-411020', 'www.fltcase.com', '', '817-350-6011/12', '', '', ''),
(73, 'Cadence Design Systems (India) Pvt. Ltd. ', 'Yerwada', 'Building No 1, 1st Floor, Commerzone \r\nSamrat Ashok Path, Yerwada \r\nPune â€“ 411 006 ', 'www.cadence.com', '', '020-6707 3500', '', '', ''),
(74, 'Accenture', 'Magarpatta', 'Tower 5, Cybercity, 143, Magarpatta City, Hadapsar â€“ Mundhwa Road, Pune, Maharashtra 411013', 'www.accenture.com', '', '020 6625 3000', '', '', 'Service'),
(75, 'Ignify Software Pvt Ltd', 'Magarpatta', 'KPCT, C-Wing, Suite no 401, Vitthal Rao Shivarkar Rd, Parmar Nagar, Wanowri, Pune, Maharashtra 41101', 'www.ignify.com', '', '', 'Java,.NET', '', ''),
(76, 'Siddhatech Softwares', 'Erandwana', 'Flat No 103, Bhagyatara Society,\r\n20/47 Erandwana, Patwardhan Baug,\r\nPune- 411004,\r\nMaharashtra, Ind', 'www.siddhatech.com', '', '91560 11637', 'PHP', 'Digital Banking Solutions.', 'Service and Product'),
(77, 'Capsilon Software Private Limited', 'Magarpatta', 'Tower S4, Magarpatta City, Hadapsar, Pune, Maharashtra 411028', 'ww.capsilon.com', '', '080066 07183', '', '', 'Product'),
(78, 'Amdocs', 'Magarpatta', 'CyberCity Tower 2, Magarpatta City, Hadapsar, Pune, Maharashtra 411013', 'www.amdocs.com', '', '020 4015 3000', 'Java', 'Telecommunications', 'Product'),
(79, 'Leo Technosoft', 'Magarpatta', '201, Tower S4, Phase II, Cybercity, Magarpatta Township,, Hadapsar, Pune, Maharashtra 411013', 'www.leotechnosoft.net', '', '020 2689 9853', '', '', 'Service and Product'),
(80, 'Systems Plus', 'Magarpatta', 'Level 8, Unit No. 801, Tower 8, Magarpatta SEZ Entrance, Magarpatta City, Hadapsar, Pune, Maharashtr', 'www.systems-plus.com', '', '', '', '', ''),
(81, 'Oleander Software Solutions Pvt Ltd', 'Hadapsar-Megacenter', 'Office No.407,mega center,Hadapsar, PUNE', 'www.oleandersoftwares.com', '', '020 6522 2550', '.NET,Android,Windows Phone,iOS', 'Mobile Computing', ''),
(82, 'Causecode Technologies', 'Baner', 'Office 3, 2nd floor, Revati Arcade 2, Baner, Baner Rd, Baner, Pune, Maharashtra 411045', 'www.causecode.com', '', '', '', '', ''),
(83, 'Inteliment Technologies (India) Pvt. Ltd.', 'Aundh', 'Level 3, Meenasai, 4 Pushpak Park, Aundh-ITI Road,', 'www.inteliment.com', '', '', '', '', ''),
(84, 'iNautix Technologies', 'Magarpatta', 'Level 3, Tower 8 Magarpatta City SEZ, Pune, Maharashtra 411013', 'www.inautix.co.in', '', '020 6621 7000', '', 'Banking and Financial Services', 'Captive'),
(85, 'Enovate IT', 'Hadapsar-Megacenter', 'Office G-306, 2nd floor, Mega Center of Magarpatta,, Hadapsar, North Hadapsar, Hadapsar, Pune, Mahar', 'www.enovate-it.com', '', '020 4120 2027', 'Android', '', 'Service'),
(86, 'Techechelons Infosolution Pvt ltd', 'Magarpatta', ' #404, 4nd Floor, Pentagon Tower, P-1, Slip Rd to Tower-3/4, Magarpatta City, Hadapsar, Pune, Mahara', 'www.techechelons.com', '', '020 2689 8448', '.NET,Android', 'Mobile Computing', ''),
(87, 'Syntel Private Limited', 'Talwade', 'Plot No. B-1 Software Technology Park, MIDC Talawade, Pune 412114', 'www.syntelinc.com', '', '20-30615000 / 4', '', '', ''),
(88, 'DSK Digital Technologies Pvt. Limited', 'Hadapsar', 'DSK Digital Technologies Pvt. Limited\r\n3rd Floor, B Wing, DSK Sunderban\r\nSadesatara Nali Gram Panchy', 'www.dskdigital.com', '', '8805281313, 880', '', '', ''),
(89, 'CODAEMON SOFTWARES PRIVATE LIMITED', 'Hadapsar', '425 Amanora Chambers, Magarpatta Cir, Amanora Park Town, Hadapsar, Pune, Maharashtra 411028\r\n\r\n', 'www.codaemonsoftwares.com', '', '7709519370 ', '', '', ''),
(90, 'Clarion Technologies', 'Magarpatta', '4th Floor, Tower S-4, Magarpatta City, Hadapsar, Pune - 411028', 'www.clariontech.com', '', '02049007000', '', '', ''),
(91, 'Synerzip Softech India Private Limited', 'Kothrud', ' Revolution Mall, 3rd floor, Above Big Bazaar, Opposite Chrome Store, Near Citipride Multiplex,, Kot', 'www.synerzip.com', '', '020 6728 3222', '', '', 'Service'),
(92, 'Saarthi Infotech', 'Sadashiv Peth', 'Office no 404, 4th Floor, Silver Mist, Near Nilayam Theatre, Sadashiv Peth, Pune-411030', 'www.sarathisoftech.com', '', '9595570355', '', '', ''),
(93, 'IDmission', 'Baner', '402-403, 4th floor, Icon Tower, Baner Road, Baner, Pune, Maharashtra 411045', 'www.idmission.com', '', '', '', '', ''),
(94, 'Mitej Technologies', 'Baner', '111, Kumar Sahwas, \r\nPashan-Baner Link Road, Pune, \r\nMaharashtra, India : 411009.', 'www.mitej.com', '', '20â€“2586 1733 ', 'Java,.NET,PHP', '', 'Service'),
(95, 'Savy Software Pvt. Ltd', 'Baner', 'Office #204, Regent Plaza Mall, Baner - Pashan Link Rd, Baner, Pune, Maharashtra 411045', 'www.savysoft.co.in', '', ' 020 6687 9000', '', '', ''),
(96, 'Geeky Works', 'Baner', '3rd Floor,Shrushti Elegance,Behind Salt Hotel,\r\nBalewadi Phata, Baner, Pune - 411045', 'www.geekyworks.com', '', '8552003232/8669', 'Android,PHP', '', ''),
(97, 'Gridlogics Technologies Pvt. Ltd', 'Baner', '4th Floor, Sunflower Commercial,\r\n77/1 Baner Road, Baner,\r\nPune â€“ 411 045 INDIA', 'www.gridlogics.com', '', '20.66202640, 64', '', '', ''),
(98, 'Baroc Technologies Pvt. Ltd.', 'Baner', 'S. No. 272, 6th Floor, Montreal Business Center Tower - I, Office 602, Pallod Farms, Pune, Maharasht', 'www.baroc.co.in', '', '020 6400 9785', '', '', ''),
(99, 'Mobiliya', 'Baner', ' 401-402, Amar Apex, Baner Road, Pune, Maharashtra 411045', 'www.mobiliya.com', '', '020 6708 0217', '', '', ''),
(100, 'Mobien Digital', 'Shivajinagar', 'Office No. 501 City Mall, Pune University Road,\r\nShivaji Nagar, Pune, 411 004, India,', 'www.mobientech.com', '', '020 64015817 / ', '', '', 'Not Specified'),
(101, 'KloudData', 'Aundh', 'A.G. Technology Park,\r\nGaikwad Avenue, Survey No. 127/1,\r\nA/8, Off ITI Road,\r\nAundh, Pune â€“ 411 00', 'www.klouddata.com', '', '020.6708 0000', '', '', ''),
(102, 'Raja Software Labs', 'Baner', 'Survey # 116/3/1/1 & 2\r\n2nd Floor Aria Towers\r\nBaner Road, \r\nBaner, Pune-411045 ', 'www.rajasoftwarelabs.com', '', '', '', '', ''),
(103, 'Asccent IT Solutions', 'Baner', 'Level 4, Prabhavee Tech Park, Baner, Pune 411 045 INDIA.', 'www.ascentsol.com', '', '20 6723 5821/65', 'Java,.NET, C#, C++, J2EE, Visual Basic', '', ''),
(104, 'Spring Computing Technologies Pvt. Ltd.', 'Kothrud', 'Vijay Commercial Complex, 3rd Floor,\r\nNear Guruganesh Nagar, D.P.Road, \r\nKothrud, Pune, India 411 03', 'www.springcomputing.in', '', '20 25391319 ', '', '', 'Not Specified'),
(105, 'Calsoft Inc', 'Bavdhan', 'S. No 320/1/C, Bavdhan (B)\r\nTal â€“ Mulshi,\r\nPune â€“ 411 021,\r\nIndia', 'www.calsoftinc.com', '', '(20) 6654 4444', '', '', ''),
(106, 'Ecotech IT Solutions Pvt. Ltd', 'Kondhwa', 'Sunshree â€œWoodsâ€,\r\nNIBM Road,\r\nPune 411 048 INDIA.', 'www.www.ecotechservices.com', '', '20 49120000', '', '', ''),
(107, 'KPIT Technologies Pvt Ltd', 'Hinjawadi', 'Plot No. 35 & 36, Rajiv Gandhi Infotech Park\r\nPhase 1, MIDC, Hinjawadi, Pune 411 057', 'www.kpit.com', '', '20 6652 5000', '', '', 'Service'),
(108, 'HCL Technologies', 'Hinjawadi', 'Phase 1', 'www.hcl.com', '', '', '', '', 'Service'),
(109, 'Affinity Express', 'Kharadi-EON IT Park', ' EON Free Zone, MIDC Kharadi Knowledge Park Pune.', 'www.affinityexpress.com', '', '', '', '', ''),
(110, 'Allscripts', 'Kharadi-EON IT Park', '1st Floor, Wing 4, Cluster C,\r\nEON Free Zone, Kharadi, Pune.', 'www.allscripts.com', '', '20 3057 8000', '', '', 'Service and Product'),
(111, 'Eaton Technologies Pvt. Ltd.', 'Kharadi-EON IT Park', 'EON Free Zone, Cluster\r\nC, Wing 1 Plot No. 1, Survey No. 77,\r\nMIDC Kharadi Knowledge Park, Pune.', 'www.eaton.com', '', '20 66337000', '', '', 'Captive'),
(112, 'Eclipsys India', 'Kharadi-EON IT Park', 'EON Free Zone Plot no. 1, S. No. 77,\r\nMIDC Kharadi Knowledge Park Pune.', 'www.eclipsys.com', '', '20 3057800', '', '', ''),
(113, 'EpiComm Technologies Limited', 'Kharadi', ' Venus Plaza, Plot No. 4, Sr.\r\nNo. 50/2, Chandan Nagar, Nagar Road Highway,\r\nNEI Bus Stop, Village K', ' www.epicommonline.com', '', '20 27014242, 65', '', '', ''),
(114, 'Epitome Global Services Pvt Ltd', 'Kharadi-EON IT Park', 'EON IT Park, 7th Floor, Wing 3, Cluster\r\nD, Kharadi Knowledge Park, Pune.', ' www.epitomeglobalservices.com', '', '', '', '', ''),
(115, 'Honeywell', 'Kharadi-EON IT Park', 'EON Free Zone, MIDC Kharadi Knowledge Park Pune.', 'www.honeywell.com', '', '', '', '', 'Captive'),
(116, 'Idhasoft Ltd', 'Kharadi-EON IT Park', 'Unit 602, 6th floor, wing 2, Cluster C,\r\nEON Free Zone, Plot no 1, Survey no 77, MIDC,\r\nKnowledge Pa', 'www.idhasoft.com', '', '20 67312900', '', '', 'Service'),
(117, 'InfoBeans ', 'Kharadi-EON IT Park', '603 Cluster C, EON Free Zone Kharadi Knowledge Park,\r\nMIDC Kharadi Pune.', 'www.infobeans.com', '', '02067313131', '', '', 'Service'),
(118, 'Maxxton India Technologies Pvt. Ltd', 'Kharadi-EON IT Park', '601, 6th floor, Wing 2,\r\nCluster C, EON Free Zone, Plot No. 1,\r\nSurvey No. 77 MIDC Kharadi Knowledge', 'www.maxxton.com', '', '20 30453300', '', '', ''),
(119, 'Meltek Infosystems Pvt. Ltd.', 'Kharadi-EON IT Park', '3/2, IT Knowledge Park, MIDC Kharadi, Pune.', 'www.meltekinfosystems.com', '', '020 40720100', '', '', 'Service and Product'),
(120, 'Mphasis', 'Magarpatta', 'Cybercity, Tower IV, \r\nMagarpatta City, Hadapsar, \r\nPune - 411 013 ', 'www.mphasis.com', '', ' 020 4014 1000', '', '', 'Service'),
(121, 'Polaris Software Lab Ltd', 'Kharadi-EON IT Park', 'Unit 502, Wing 3, Cluster D, 5th Floor,\r\nPlot 1, EON Free Zone, MIDC Kharadi Knowledge Park, Pune.', 'www.polarisft.com', '', '20 40734000', '', '', 'Service'),
(122, 'Sears Holdings', 'Kharadi-EON IT Park', '6th Floor, Wing 2, Cluster C, EON Free\r\nZone, Plot No.1, Survey No.77,\r\nMIDC Knowledge Park, Kharadi', 'www.searsholdings.in', '', '', '', '', 'Captive'),
(123, 'FIS-Sungard', 'Kharadi-EON IT Park', 'EON Free Zone, Plot No.1,\r\nSurvey No.77, MIDC Knowledge\r\nPark, Kharadi, Pune.', 'www.fisglobal.com', '', '', '', '', 'Product'),
(124, 'Tavisca Solutions Pvt. Ltd', 'Kharadi-EON IT Park', 'â€˜Bâ€™ Block, 1st Floor, Weikfield IT Info City Park, Viman Nagar, Pune â€“ 411014, Maharashtra, In', 'www.tavisca.com', '', ' 020-67083100', '', '', 'Not Specified'),
(125, 'Tieto Software Technologies Pvt. Ltd', 'Kharadi-EON IT Park', 'Wing 1, Cluster D, EON Free Zone, MIDC Kharadi Knowledge Park, Pune.', 'www.tieto.com', '', '', '', '', 'Service and Product'),
(126, 'Zensar Technologies Ltd.', 'Kharadi', 'Zensar Knowledge Park, Kharadi,\r\nPlot #4, MIDC, Off Nagar Road, Pune.', 'www.zensar.com', '', '20 66074000', '', '', 'Service'),
(127, 'Persistent Systems', 'Erandwana', 'Aryabhata-Pingala, 9A/12 Kashibai Khilare Marg, Erandwana, Pune 411 004', 'www.persistent.com', '', '(20) 6703 3000', '', '', 'Service and Product'),
(128, 'Mindtree', 'Hinjawadi', 'Hinjawadi Phase 2 Rd, Phase 1, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pimpri-Chinchwad, Ma', 'www.mindtree.com', '', '020 6792 4000', '', '', 'Service'),
(129, 'L & T Infotech ', 'Hinjawadi', 'IT-6 Building, Plot No.41, Blue Ridge Approach Rd, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi, ', 'www.lntinfotech.com', '', '020 6657 1212', '', '', 'Service'),
(130, 'Neosoft Technologies', 'Hinjawadi', 'NTPL SEZ (Blueridge), IT6, 1st Floor, Rajiv Gandhi - Infotech Park, Phase-I, \r\nHinjewadi, Pune - 411', 'www.neosofttech.com', '', '22 40500600', '', '', 'Service'),
(131, 'Atos', 'Hinjawadi', 'Block 1.6, Embassy Tech Zone,, Hinjawadi Phase II, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi, ', 'www.atos.net', '', '', '', '', 'Service'),
(132, 'IBM India Pvt. Ltd', 'Hinjawadi', ' Embassy Tech Zone Block 1.3 Congo Plot 03, Phase 2, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi', 'www.ibm.com', '', '', '', '', 'Service and Product'),
(133, 'Symphony Teleca - Harman', 'Hinjawadi', 'Ground, 1st and 2nd Floor, Hinjewadi IT Park, Plot No.41, Rajiv Gandhi Infotech Park, MIDC Phase I, ', 'www.harman.com', '', '', '', '', 'Service'),
(134, 'Tudip Technologies', 'Wakad', 'India - Sr. No. 241/3/A, Datta Mandir Road, Wakad, Pune, India - 411057', 'www.tudip.com', '', '20-4674-0881', '', '', 'Service'),
(135, 'SplendorNet Technologies Pvt. Ltd.', 'Warje', '1st Floor, Tirupati Niwas, Plot #4, Shriram Colony,\r\nLane #6, Tapodham Road,\r\nWarje, Pune, Maharasht', 'www.splendornet.com', '', '020 25230661', '', 'PHP,Python', 'Service'),
(136, 'Upside Learning', 'Warje', 'Punakar Complex, Survey No-117, 1st Floor, Opposite Popular Nagar, Bangalore Pune Highway, Warje,Pun', 'www.upsidelearning.com', '', '20-2523 6050', '', '', 'Service and Product'),
(137, 'Quantazone Software Pvt. Ltd.', 'Hinjawadi', '403, Suratwala Mark Plazzo\r\nOpp. Courtyard Marriott Hotel \r\nPhase 1 Hinjewadi Pune\r\nMaharashtra 4110', 'www.quantazone.com', '', ' 965 703 8888', '', '', 'Service'),
(138, 'Digilant Solutions Ltd', 'Wakad', '247, Wakad Rd, Kaspate Wasti, Wakad, Pimpri-Chinchwad, Maharashtra 411057', 'www.digilantsolutions.com', '', '', '', '', 'Service'),
(139, 'OpenDev Technologies Pvt. Ltd', 'Warje', 'Plot No. 16, Nirmala Vishwa Banglow, Shreeram Sahakari Soc,Warje, Pune, \r\nMaharashtra, India. 411 05', 'www.opendevtechnologies.com', '', '9823686543 ', '', '', 'Service'),
(140, 'Manosa Technologies Pvt. Ltd', 'Warje', 'Office 4, Second Floor, Fly View Residency, Above Bank of Maharashtra, \r\nNear Warje Bridge, Pune - 4', 'www.manosa.in', '', '91398 89081', '', '', 'Service'),
(141, 'NUCLEOSYS TECHNOLOGIES', 'Karve Nagar', 'Karve Nagar, Pune, MH 411052, India.', 'www.nucleosystechnologies.com', '', '7709075764', 'PHP,iOS,Android,.NET', '', 'Service'),
(142, 'WhiteSnow', 'Bavdhan', 'Visulon Building, 69 Amchi Colony, Near Bank of Maharashtra, Bavdhan, Pune, India', 'www.whitesnow.com', '', '', '', '', 'Service'),
(143, 'Sunbridge Software Services', 'Bavdhan', 'Sr.No. 19/12/B/1, 2nd floor, Anish, Bawdhan, Pune, Maharashtra 411021', 'www.sunbridgeindia.com', '', '020 2295 3291', '.NET', '', 'Service'),
(144, 'Cytel Statistical Software & Services Private Limited', 'Kothrud', '5th, 6th, 7th Floor, Lohia-Jain IT Park â€“ A Wing, Survey #150, India, Paud Rd, Bhusari Colony, Kot', 'www.cytel.com', '', '020 6709 0100', '', '', 'Product'),
(145, 'e-Zest Solutions Ltd.', 'Karve Road', 'Anand Nilay Business Center,\r\nNear Karve Statue, Karve Road, Kothrud\r\nPune â€“ 411029. Maharashtra I', 'www.e-zest.com', '', '20-25459802/ 03', '', '', 'Service'),
(146, 'Oracle Financial Software Services', 'Bavdhan ', 'Oracle Park, Ambrosia, 8th Floor, Mulshi Road, Bavdhan Khurd, Pune, Maharashtra 411021', 'www.oracle.com', '', '020 6656 2000', '', '', 'Service and Product'),
(147, 'Webonise Lab', 'Bavdhan', '3rd Floor, GaloreTech IT Park, Behind Maratha Mandir, Bavdhan, Pune, Maharashtra 411021', 'www.webonise.com', '', ' 020 6685 9500', '', '', 'Service'),
(148, 'Indus Software', 'Bavdhan', 'Service Rd, Bhunde Vasti, Bavdhan, Pune, Maharashtra 411021', 'www.indussoft.com', '', '020 2295 2520', '', '', 'Service and Product'),
(149, 'Excellon Software Pvt Ltd', 'Baner', 'Survey No. 22/4/1, Behind IRIS Balewadi, Near Cummins Campus,, Baner Balewadi Road, Balewadi, Pune, ', 'www.excellonsoft.com', '', '020 6628 3600', '', '', 'Service'),
(150, 'MindWorx Software Services Pvt. Ltd', 'Baner', 'peciality Business Centre, 3rd Floor, Survey no 3,, Balewadi Rd, Balewadi, Pune, Maharashtra 411045', 'www.mindworxsoftware.com', '', '020 6060 6027', 'Java,.NET,Python,Android,PHP', '', 'Service'),
(151, 'SoftLink International Private Limited', 'Aundh', 'Anand Park, Near Anandban Club, Seasons Rd, Aundh, Pune, Maharashtra 411007', 'www.softlinkinternational.com', '', ' 020 2588 1940', '', '', ''),
(152, 'Vatsa Solutions Pvt. Ltd.', 'Baner', 'C-508, Teerth Technospace, Off Mumbai-Bangalore Highway Baner, Baner, Pune, Maharashtra 411045\r\n', 'www.vsplc.com', '', '020 2545 6679', '.NET', '', 'Service'),
(153, 'D+H', 'Bavdhan', 'AG Trade Centre, S., No. 7 & 8\r\nPune Maharashtra 411021\r\nIndia', 'www.dh.com', '', '20 67939000', '', 'Corporate Banking,Payments and Collections', 'Product'),
(154, 'Reynold Infotek', 'Hinjawadi', 'A305, Suratwala Mark Plazzo, Hinjawadi Village,, Diagonally Opposite to Marriot, Hinjewadi Phase1, H', 'www.reynoldinfotek.com', '', '020 65103210', '', '', 'Service'),
(155, 'CDK Global (India) Private Limited', 'Yerwada', '9th & 10th floor Binarius Building, Deepak Complex, Opp Golf Course, National Games Road,, Shastrina', 'www.cdkgloal.com', '', '020 6745 7000', '', '', ''),
(156, 'Mobisoft Infotech', 'Hinjawadi', 'Plot No. 46, Rajiv Gandhi Infotech Park,Phase I, MIDC, Hinjawadi, Pune, India - 411057', 'www.mobisoftinfotech.com', '', '20-65293692', 'Java,Android,iOS,PHP', '', 'Product'),
(157, 'CLSA Technology & Services LLP', 'Yerwada', '4/F, C-Wing\r\nPanchshil Tech Park-1\r\nYerawada, Pune 411006', 'www.clsa.com', '', '20 6646 8888', '', 'Investment Banking', 'Captive'),
(158, 'Capco India', 'Kasarwadi', ' No 37, Rahul Chamber, Opposite Forbes Marshall, Pune-mumbai Road, Kasarwadi, Kasarwadi, Pune, Mahar', 'www.capco.com', '', '020 2714 5959', '', 'Investment Banking', 'Captive'),
(159, 'ADP', 'SP Infocity', 'Suite 11, Apeejay Business Centre,1st Floor, Pride House, S.No. 108/7, Shivaji Nagar,University Road', 'www.adp.in', '', '', '', '', 'Product'),
(160, 'Zycus', 'Baner', 'Pride purple accord, 1st floor,above Vijay sales,Next to Hotel Mahableshwar,Baner Road,Pune-411045', 'www.zycus.com', '', '022 2829 0528', '', '', 'Service'),
(161, 'Welkin IT Services Pvt Ltd', 'Baner', 'Sai Building, S No 6/1/1,Behind Big Bazaar, Baner Road, Pune-411045', 'www.welserv.com', '', '020 27291500/60', '', '', 'Service and Product'),
(162, 'Verinite Technologies Pvt Ltd', 'Baner', 'Office no 501,Icon tower,5th floor,Plot B ,S.No. 114/115 Main Baner Road,Baner, Pune-411045', 'www.verinite.com', '', '02066297000', '', 'Cards & Payments', 'Service'),
(163, 'Excellon Software Private Limited', 'Balewadi', 'S no 22/4/1,Behind IRIS,near Cummins campus,Baner Balewadi Road pune-411045', 'www.excellonsoft.com', '', '02066283600', '.Net', '', 'Service and Product'),
(164, 'Aurionpro Solutions', 'Hinjawadi', '6th Floor,IT 5,Qubix Business Park pvt Ltd,Neopro Sez,Rajiv Gandhi Infotech Park Phase-1,Hinjawadi,P', 'www.aurionpro.com', '', '02066766700', '', 'Cash Management,Cyber Security', 'Product'),
(165, 'E-Zest Solutions', 'Karve Road', 'Anand Nilay Business Center,Near Karve Statue,Karve Road,Kothrud,Pune-411029', 'www.e-zest.com', '', '02065002363', '', '', 'Service'),
(166, 'Avalara', 'Shivajinagar', '3rd Floor, Pride Portal, Shivaji Co-operative Housing Society, Bahiratwadi,\r\nShivajinagar, Pune 411 ', 'www.avalara.com', '', '', '', '', 'Service'),
(167, 'Medline Industries India Private Limited', 'Shivajinagar', ' Bhalerao Towers, 4th Floor, Plot no. 36, CTS 1669-1670, Behind Hotel Pride, Shivajinagar, Pune, Mah', 'www.medline.com', '', '020 6709 6900', '', '', 'Captive'),
(168, 'Giesecke & Devrient', 'Erandwana', ' Erandwane, Pune, Maharashtra 411004', 'www.gi-de.com', '', '020 4711 4000', '', '', 'Captive'),
(169, 'Credit Suisse Services (India) Private Limited', 'Kharadi-EON IT Park', ' Cluster A, Wing 1 & 2, EON Free Zone, Kharadi, Pune, Maharashtra 411014', 'www.credit-suisse.com', '', '020 6738 7109', '', '', 'Captive'),
(170, 'Citi Service Center', 'Kharadi-EON IT Park', ' EON Free Zone, Kharadi, Pune, Maharashtra 411014', 'www.citibank.co.in', '', '', '', '', 'Captive'),
(171, 'Deutsche Bank Group', 'Yerwada', ' Business Bay, Wing 1, Jayprakash Nagar, Yerawada, Pune, Maharashtra 411006', 'www.db.com', '', '020 7124 9000', '', '', 'Captive'),
(172, 'United Bank of Scotland', 'Yerwada', '8, Commerzone IT Park, Commerzone IT Park Internal Road, Yerawada, Pune, Maharashtra 411006', 'www.ubs.com', '', '020 6742 1500', '', '', 'Captive'),
(173, 'Virtusa Consulting Services PVT LTD', 'Phursungi', '3rd Floor, Block 4 A,\r\nThe Manjri Stud Farm Pvt. Ltd.\r\nSEZ, SP Infocity, S. No. 209,\r\nPune - Saswad ', 'www.virtusa.com', '', '0204 150 3434', '', '', 'Service'),
(174, 'NVIDIA Graphics Pvt Ltd', 'Yerwada', 'Survey No. 144/145, Building No. 5, Commerzone, Samrat Ashok Path, Off Airport Road, Yerwada, Pune, ', 'www.nvidia.in', '', '020 6641 3000', '', '', 'Captive'),
(175, 'Sela Technology Solutions (India) Pvt. Ltd.', 'Yerwada', 'Building no 2, Floor No- 5\r\nCommerzone, Samrat Ashoka Path, Off Airport Rd,\r\nYerwada Pune - 411 006', 'www.sela.co.in', '', '20 66841 777', '', '', 'Service'),
(176, 'Decos Software', 'Yerwada', '2nd Floor Muttha Towers\r\nAirport Road Yerawada\r\nPune â€“ 411006, India', 'www.decos.com', '', '02066466700', '', '', 'Product'),
(177, 'SaleBuild IT Enabled Services Private Limited', 'Yerwada', 'Office No. 303, 3rd Floor,\r\nCommerzone â€“ Building No.6,\r\nSurvey No. 144/145, Yerwada,\r\nSamrat Asho', 'www.salesify.com', '', '20 414-99301', '', '', 'Product'),
(178, 'Blue Shores Solutions Pvt. Ltd.', 'Yerwada', ' Unit 303, Building 2, Commerzone, Samrat Ashok Path, Off Airport Road, Yerwada, Pune, Maharashtra 4', 'www.blue-shores.com', '', '020 6560 1203', '', '', 'Service'),
(179, 'Allentics IT Solutions Pvt. Ltd.', 'Wakad', '206,Pride Purple Square,\r\nKalewadi Phata, Wakad,\r\nPune-411057', 'www.allentics.com', '', ' 020-27275100', '', '', 'Service'),
(180, 'Mediaocean', 'Wakad', 'Suite 304, Bldg A, GO-Square IT Park, Wakad Rd, Kaspate Wasti, Wakad, Pimpri-Chinchwad, Maharashtra ', 'www.mediaocean.com', '', '020 6712 2222', '', '', 'Captive'),
(181, 'PROBUS SOFTWARE ', 'Thergoan', 'Office no 8, 2nd Floor,\r\nAkshay Centre, \r\nNear Santosh Nagar Bus Stop\r\nAundh -Ravet BRTS Road, \r\nThe', 'www.probus.co.in', '', '20 65 290 290 ', '', '', 'Product'),
(182, 'Softential Solutions', 'Wakad', 'C-202, Wisteriaa Fortune\r\nBhumkar Nagar, Wakad\r\nPUNE 411057 - INDIA', 'www.softential.in', '', '721-911-9331', '.NET', '', ''),
(183, 'POSIVIEW TECHNOLOGIES', 'Wakad', 'Bhakti Genesis, A-406, 4th Floor, Wakad - Hinjewadi Road, Pune, India - 411057', 'www.posiviewtech.com', '', '98908 17644', '', '', 'Service and Product'),
(184, 'Disha Technologies Software Solutions & Services.(DTS3)', 'Wakad', 'Building-B,404.\r\nG.O.Square IT Complex,\r\nAundh Hinjewadi link road,\r\nMankar Chowk,Wakad,\r\nPune-41105', 'www.dts3.co.in', '', '918380092921  /', '', '', 'Product'),
(185, 'Oamisys Technologies', 'Wakad', '2nd Floor,\r\nNear Copacabana,\r\nSurvey No 26\r\nVishalNagar, Pune.', 'www.oamisys.com', '', '2032-944100', '', '', 'Service and Product'),
(186, 'JYS Infotech Private Limited', 'Wakad', ' Office #408, D Wing, Siddhi Nisarg, S.No. 84/3B, Near Bhumkar Chowk, Hinjewadi Road,Wakad, Pune - 4', 'www.jysinfotech.com', '', '9886419966', '', '', 'Service'),
(187, 'Vishwasya Technologiess Private Limited', 'Wakad', 'C-103, Nisarg City-2,\r\nKaspate Wasti, Near Hotel Ambience, Kalewadi Phata, Wakad, \r\nPune - 411057, M', 'www.vishwasya.com', '', '020-27309476', '', '', 'Service'),
(188, 'Thinking Hut IT Solutions Pvt. Ltd', 'Pimple-Nilakh', '2nd floor, Shree Tower, \r\nOpp 24K Tower, New DP Road, \r\nVishal Nagar, \r\nPimple-Nilakh ', 'www.thinkinghut.com', '', '20 69000420/22 ', '', '', 'Product'),
(189, 'ITWIZZ TECHNOLOGY', 'Wakad', 'C-208, Westeria Fortune, Marunje Road, Near Poona Bakery, Opposite Silver Spoon Restaurant, Bhumkar ', 'www.itwizz.in', '', '91 84461 11125/', '', '', 'Service'),
(190, 'RtMinds Technologies', 'Wakad', 'No.13/2, Santosh Nagar, No. 16 Bus Stop, Near Dange Chowk, Thergaon, Belthika Nagar, Wakad, Pune, Ma', 'www.rtminds.com', '', '7720 038 717', '', '', ''),
(191, 'InnoBytes Technologies Pvt. Ltd', 'Pimple Saudagar', 'C-101, SwapnaShilp, Five Gardens Soc., Near Jagtap Dairy, Near Balaji Tyres, Rahatani, Pune, Maharas', 'www.innobytes.in', '', '8806087800', '', '', 'Service'),
(192, 'I Knowledge Factory Pvt. Ltd.', 'Swargate', '2nd Floor, Manohar Building, Taware Colony, \r\nPune, Maharashtra, India. 411009', 'www.ikf.co.in', '', '20-24-22-7861', '.NET', '', 'Service'),
(193, 'AFour Technologies Pvt Ltd', 'Bavdhan ', '501-502, 5th Floor, Kapil Zenith IT Park, Near Chandani Chowk, Bavdhan (Kh)., Pune, Maharashtra 4110', 'www.afourtech.com', '', '020 6401 0079', '', '', 'Service'),
(194, 'Interface Infosoft Solutions', 'Bavdhan', ' Plot 3, Amchi Colony, Pashan Road, Sagar Co-Operative Housing Society, Bavdhan, Pune, Maharashtra 4', 'www.interfaceinfosoft.com', '', '020 2295 1653', 'J2EE, ASP.Net, ExtJS, Flex, jQuery, JSF, Spring, SEAM, Hibernate, SOAP, Web Services, XML/XSLT, AJAX, HTML5, Silverlight', 'Healthcare', 'Service'),
(195, 'Benchmark IT Solutions', 'Bavdhan', 'Shinde Complex, 2nd Floor, Shinde Nagar,, Pashan Rd, Shindenagar, Bavdhan, Pune, Maharashtra 411021', 'www.benchmarkitsolutions.com', '', '020 2295 1951', '', '', 'Service'),
(196, 'Dynamisch IT Pvt. Ltd.', 'Bavdhan', '401, Vaman Ganesh Heights, Near Shinde Petrol Pump, \r\nAbove Cafe Peter Donut, Bavdhan, Pune, Maharas', 'www.dynamisch.co', '', '20 6933 5533', '', '', 'Service'),
(197, 'Winner Software Pvt. Ltd', 'Deccan', 'Saraswati Heights, Deccan Gymkhana,\r\nNear Hotel Good Luck,\r\nPune -411004,\r\nMaharashtra, India. ', 'www.winnersoft.co.in', '', '020-25654833', '', '', 'Service'),
(198, 'Equations Work IT services Pvt. Ltd', 'Bavdhan', 'Level 1,  101 ,  A G Trade Centre,\r\nNDA - Pashan Road,  Bavdhan,  Pune 411021', 'www.equations.work', '', '20665-22999', '', '', 'Service'),
(199, 'zCon Solutions Pvt. Ltd.', 'Kothrud', 'S.No. 98, Plot no. 23, Right Bhusari Colony, Kothrud, Pune â€“ 411038. \r\nIndia', 'www.zconsolutions.com', '', '020-25280034', '', '', 'Service'),
(200, 'Synthesys Solutions', 'Kothrud', '14C-II, Ganesh Krupa Society, Lane No 12, Paramahansa Nagar, Paud Road, Kothrud, Pune-411038, Mahara', 'www.synthesys.co.in', '', '20-25383161', '.NET,PHP', '', 'Service'),
(201, 'SumanaBh Software Pvt. Ltd.', 'Kothrud', '1, Anant Manohar, S. No 78, Plot no 171 + 158, Above Balaji Automobiles,, Left Bhusari Colony, Kothr', 'www.sumanabh.com', '', '98225 54411', '.NET', 'ERP', ''),
(202, 'Invitra Technologies Private Limited', 'Kothrud', 'Plot # 209, Survey # 96/2B, Right Bhusari Colony,\r\nPaud Road, Pune 411 038, India', 'www.invitratech.com', '', '204-121-3991', '.NET', '', 'Service'),
(203, 'Creativecrows Technologies', 'Kothrud', '12, 2nd Floor, Pushpa Apt., Above Union Bank, Vanaj Corner, Kothrud, Pune, Maharashtra 411038', 'www.creativecrows.com', '', '(020) - 6531-32', '', '', 'Service'),
(204, 'QualEx Systems', 'Kothrud', '426 Siddharth Towers, Bldg. No.1, Near Sangam Press, Kothrud, Pune-411 038. India', 'www.qualexsystems.com', '', '20-25406000', '', '', 'Service'),
(205, 'DesignTech Systems', 'Kothrud', ' 6, Commerce Centre, Opp. Krishna hospital, Paud Road, Rambaug Colony, Pune, Maharashtra 411038', 'www.designtechsys.com', '', '020 4131 1200', '', '', ''),
(206, 'S P Software Technologies (I) Pvt. Ltd.', 'Kothrud', 'S P Software Technologies (I) Pvt. Ltd.\r\nOffice No 201,202, Giridhar Avenue,\r\nOpposite Big Bazaar, K', 'www.spsoftindia.com', '', '20 - 65006154', '', '', ''),
(207, 'Tekdi Technologies Pvt. Ltd.', 'Kothrud', 'Office No 6. Silver Fern. Karve Road. Pune 411029. Above Titan Showroom and Canara Bank. ', 'www.tekdi.net', '', '', 'PHP', '', ''),
(208, 'Techview Web Solutions Pvt Ltd', 'Kothrud', '10, Parvati Chambers, 3rd floor, Sangam Press Rd, Kothrud, Pune, Maharashtra 411029', 'www.techview.biz', '', '020 3233 1101', 'PHP', '', ''),
(209, 'Quleiss Technology.', 'Kothrud ', '25, Maharaja Complex, Kothrud \r\nPune, Maharastra India, 411029', 'www.quleiss.com', '', '9766 019149', '', '', ''),
(210, 'Xtensible Software Technologies Private Limited', 'Kothrud', 'Office No. 503 And 504, 5Th Floor, Building C2, Saudamini Commercial Complex, Right Bhusari Colony P', 'www.xtensible.in', '', '91 98223 16412 ', 'Android,iOS', '', 'Service'),
(211, 'Pragmasys', 'Kothrud', 'F, Pinnac Memories Phase III,\r\nS No 7 & 8 , Near CityPride Multiplex,\r\nKothrud , Pune - 411038', 'www.pragmasys.in', '', ' 020 69000 770', '', '', ''),
(212, 'PEOCIT', 'Kothrud', 'PEOCIT House, S.No.96,97, Right Bhusari Colony, Near New India School,\r\nKothrud, Pune- 411038', 'www.peocit.com', '', '91.20.2528.3002', '', '', 'Product'),
(213, 'BrainPower Software', 'Kothrud', 'F4, Galaxy Arcade, 148,Bhusari Colony,Near Kothrud Bus Depo,Paud Road, Kothrud,Pune,Maharashtra[Indi', 'www.brainpowersoftware.org', '', '20-25280156', '.NET,Android', '', 'Service'),
(214, 'G N Solutions Pvt. Ltd', 'Kothrud', '128/1A,3rd floor, \'B wing, Plot No.2, Pate Icon, Paud Road, Kothrud, Mahaganesh Colony, Kothrud, Pun', 'www.globalnestsolutions.com', '', '20 66000254', '', '', 'Not Specified'),
(215, 'Evisipro', 'Kothrud', 'E-15, \r\nShivnagari Society, \r\nNear Mahatma Society,\r\nKothrud, Pune - 411038,\r\nMaharashtra.', 'www.evisipro.com', '', '20-25380803', 'PHP', '', 'Service'),
(216, 'einfochips Pvt Ltd ', 'Magarpatta', 'Level-3, Wing B (Part), Tower 9, \r\nMTDCCL SEZ, Magarpatta City, \r\nHadapsar.\r\nPin: 411013\r\nPhone: +91', 'www.einfochips.com', '', '', '', '', ''),
(217, 'Cross Country Infotech Pvt Ltd', 'Aundh', '3rd Floor, Sr. No. 169/1, Sector II, \r\nBuilding D, West End Centre III, \r\nAundh, Pune 411007.(Neares', 'www.crosscountry.in', '', '', '', '', ''),
(218, 'Ansys Software Pvt Ltd', 'Hinjawadi', 'Phase 1, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Maharashtra 411057', 'www.ansys.com', '', '', '', '', ''),
(220, 'Innovita Technologies', 'Bavdhan', 'Flat no 5 ,Raj Vilas Apartment,NDA pashan road,Bavdhan', 'www.Innovita.com', '', '02065002244', '', '', ''),
(221, 'ITyX Pvt Ltd', 'Viman Nagar', 'Weikfield IT City Info Park, \r\nOff Nagar Road, Viman Nagar, \r\nPune, Maharashtra 411014\r\nIndia', 'www.ityxsolutions.com', '', '20 49018600', '', '', ''),
(222, 'KET Infotech Pvt. Ltd', 'Magarpatta', '7th floor,Cybercity, Magarpatta,Pune 411013', 'www.ketinfotech.com', '', '20-65409099', '', '', 'Service'),
(223, 'Principal Global Services', 'Magarpatta', 'Tower 6, Cybercity, Magarpatta City, Hadapsar, Cybercity, Magarpatta City, Hadapsar, Pune, Maharasht', 'www.principal.com', '', '020 6621 4000', '', '', 'Captive'),
(224, 'BioEnable Technologies Pvt. Ltd', 'Magarpatta', '203, Tower S4, Cypercity, Magarpatta, Cybercity, Magarpatta City, Hadapsar, Pune, Maharashtra 411013', 'www.bioenabletech.com', '', '020 6560 0600', '', '', 'Product'),
(225, 'Reflexis Systems India Private Limited', 'Magarpatta', 'Tower - 5, Wing A, Upper Ground Floor, Magarpatta Inner Circle, Cybercity, Magarpatta City, Hadapsar', 'www.reflexisinc.com', '', '020 6625 7300', '', '', 'Service'),
(226, 'CompuCom', 'Magarpatta', 'Level 4 Tower 7\r\nMagarpatta City, Pune, 411013', 'www.compucom.com', '', ' 206 724 7888', '', '', 'Service and Product'),
(227, 'Bigbox Info Soft', 'Hadapsar-Megacenter', 'L610, Megacenter, Hadapsar\r\nPune - 411028, India ', 'www.bigboxinfosoft.com', '', '2030258315', '', '', 'Service'),
(228, 'Spectraforce Technologies', 'Hadapsar-Megacenter', 'Unit K-401, Megacenter,\r\nHadapsar\r\nPune 411 028', 'www.spectraforce.com', '', '20-30220200', '', '', 'Service'),
(229, 'SOFTAiD SYSTEMS', 'Hadapsar', 'Office No 306\r\nAmanora Chember\r\nAmanora Town Centre\r\nAmanora Magarpatta Road, \r\nHadapsar ,Pune 41102', 'www.softaidsystems.com', '', '20-67278557,955', '', '', 'Product'),
(230, 'HEIN+FRICKE India Technology Services Pvt. Ltd.', 'Yerwada', 'FL-5, Tower C, Techpark One\r\nLoop Rd, Shastrinagar, Yerawada\r\nPune - 411006 MH\r\nIndia', 'www.heinfricke.com', '', '20 4011 1239', '', '', 'Service'),
(231, 'Mplussoft', 'Vishrantwadi', 'ANSEC,Tank Road,Yashwantnagar,Vishrantwadi,Pune 411006', 'www.mplussoft.com', '', '', '', '', 'Service'),
(232, 'Coriolis Technologies', 'Aundh', '260/2/4,Sai Pratik,Ganesh Baug,Aundh,Pune 411007', 'www.coriolis.co.in', '', '02027297833', '', '', 'Product'),
(233, 'Capita', 'Magarpatta', 'Tower 10,2nd floor,Cyber City,Magarpatta City,Hadapsar,Pune 411013', 'www.capita.co.in', '', '02067081700', '', '', ''),
(234, 'Regel Systems Pvt Ltd', 'Kalyani Nagar', 'Building no B-3,Celebrum IT Park Kalyani Nagar,Pune-411014', 'www.regelsys.com', '', '9922317213', '', '', 'Not Specified'),
(235, 'Searce', 'Hinjawadi', 'IT-06,6th floor,Qubix Business Park,SEZ,Phase 1,Pune-411057', 'www.searce.com', '', '02067269800', '', '', ''),
(236, 'Probus Software', 'Thergoan', 'Office no 8 ,2nd Floor,Akshay Centre,Near Santosh Nagar Bus Stop,Audh Ravet road,Thergoan', 'www.probus.co.in', '', '02065290290', '', '', ''),
(237, 'BizKonnect Solutions Pvt Ltd', 'Sahakar Nagar', '156,Sagar Society,Pune - 411009', 'www.bizkonnect.com', '', '8888844269', '', '', 'Product'),
(238, 'WhiteHedge', 'Bavdhan', '#201,AG Trade Center, Ramnagar Colony,Bavdhan,Pune 411021', 'www.whitehedge.com', '', '02067994020', '', '', 'Product'),
(239, 'Zymr Systems Pvt Ltd', 'Shivajinagar', 'Epicenter\', 2nd Floor, #203\r\nNext to Shopper\'s Stop Shivaji Nagar,\r\nPune, MH 411005, India', 'www.zymr.com', '', '+91-75-0756-372', '', '', ''),
(240, 'Payso Infotech Pvt Ltd', 'Balewadi', 'A-4, 3rd Floor, Thorve Vishwa\r\n     Adjacent to Comfort Zone \r\n     Balewadi, Pune 411045.', 'www.paysoinfotech.com', '', '02048603322', '', 'Payments', ''),
(241, 'Aloha Technology Pvt Ltd', 'Aundh', '2nd and 3rd floor,Kumar Crystals,New D P Road,Opposite Converses,Aundh,Pune-411045', 'www.aloha technology.com', '', '02030202885', '', '', 'Service'),
(242, 'Nihilent Technologies', 'IT Citi Infopark', 'D block,4 the floor,Weikfield IT Citi Park,Nagar Road,Pune - 411014', 'www.nihilent.com', '', '02039846100', '', '', 'Service'),
(243, 'Technex Technologies', 'Vishrantwadi', '316,3rd floor,Wing c,Shoppers Orbit,Above Big Bazaar,Vishrantwadi, Pune-411015', 'www.tnex.co.in', '', '02065220157', '', '', ''),
(244, 'Fidel Softtech Pvt Ltd', 'Koregoan Park', 'The HUB,Lane no 6,North Main Road,Koregoan Park,Pune- 411001', 'www.fideltech.com', '', '02066463200', '', '', 'Service and Product'),
(245, 'QuicSolv Technologies Pvt Ltd', 'Viman Nagar', '501 A,5th floor,East Court, Phoenix Market city,Viman Nagar,Pune- 411014', 'www.quicsolv.com', '', '02065291599', '', '', 'Service'),
(246, 'SmarTek21', 'Hinjawadi', 'IT 05,Ground Floor IT 04 Sixth Floor,Qubix SEZ,Blue Ridge,Phase 1,Hinjawadi,Pune', 'www.smartek21.com', '', '02039193500', '', '', 'Product'),
(247, 'Ignatiuz Software Pvt Ltd', 'Baner', '609,Supreme Headquarters,36,Pashan highway side road,Baner', 'www.Ignatius.com', '', '7758818998', '', '', 'Product'),
(248, 'Invezza Technologies', 'Baner', '710,Supreme Headquarters, Near Audi show room,Baner', 'www.invezzatechnologies.com', '', '9850111273', '', '', 'Service'),
(249, 'SA Technologies', 'Kharadi - EON IT Park', 'Suite 203, 204, 505, World Trade Center,\r\nOpp. EON IT Park,\r\nKharadi,\r\nPune-411014, India', 'www.satincorp.com', '', '02067113300', '', '', 'Not Specified'),
(250, 'Logical DNA IT Solutions', 'Magarpatta', 'Ground Floor, Unit 003, Pentagon 1\r\nMagarpatta Cyber City\r\nHadpsar Pune 411028\r\nMaharashtra, India', 'www.logicaldna.com', '', '985-097-7384', '', '', ''),
(251, 'Titanium Technologies', 'Swargate', 'Near CyberNEX,ShankarSheth Road,\r\nSwargate,Pune 411037.\r\nMH, INDIA.', 'www.titaniumtechnologies.com', '', '9960333075,  99', 'Android, iPhone,iPad', '', ''),
(252, 'KnoXsys Solutions Pvt. Ltd.', 'Warje', '201, R-Cube Business Center, Atul Nagar, Bangalore 411052, Pune Banglore Highway Pashan Exit, Laxman', 'www.knoxsys.com', '', '020 25204051', '.NET,PHP', '', 'Service and Product'),
(253, 'InfoBridge Solutions Pvt. Ltd.', 'Salunke Vihar', 'S2 to S7, Super Mall Commercial Complex,\r\nSalunke Vihar Road, Wanowrie,\r\nPune 411 040, India. ', 'www.infobridgesolutions.com', '', '20 -26837005', '', '', ''),
(254, 'Allied Softtech Pvt Ltd', 'Baner', 'Austin Belvedere,\r\nS. No. 85/B/9/1,\r\nNear Ganraj Mangal Karyalay,\r\nBaner,\r\nPune - 411045.', 'www.alliedsoftech.com', '', ' 20 - 4691 9999', '', '', '');
INSERT INTO `tbl_pune_it_companies` (`cmpny_id`, `cmpny_name`, `cmpny_area_location`, `cmpny_address`, `cmpny_website`, `cmpny_emailid`, `cmpny_contactno`, `cmpny_technologies`, `cmpny_domain_areas`, `cmpny_type`) VALUES
(255, 'Softwin Solutions Pvt. Ltd', 'Sinhgad Road', '3,First Floor, Pooja Building, Opposite Abhiruchi Mall, Pune-Sinhgad Road, Pune - 411 041', 'www.softwinsolutions.com', '', '20 2439 2249 / ', '', '', ''),
(256, 'VTeleByte Software Pvt. Ltd', 'Sahakar Nagar', '258, Shivashree,\r\nUlhas Society,\r\nSahakar Nagar 2.\r\nPune 411009.\r\nMaharashtra INDIA.', 'www.vtelebyte.com', '', '07447795569', '', '', ''),
(257, 'Oyster Technology', 'Rajendra Nagar,', 'Rajendra Nagar, Pune (India) - 411026', 'www.oystertechnology.in', '', '91 9850226699 /', '', '', ''),
(258, 'Medsynaptic', 'Shivajinagar', '5th Floor, Mantri Galleria, Off S.B. Road,\r\nModel Colony, Shivaji Nagar, Pune - 411016, India', 'www.medsynaptic.com', '', '20-25650411', '', '', ''),
(259, 'Century Soft Solutions Pvt Ltd', ' Koregaon Park ', '701, Zero One IT Park, Koregaon Park Annexe,\r\nPune. Maharashtra. INDIA 411036', 'www.centurysoft.com', '', '18007865187', '', '', ''),
(260, 'Devman Technology Solutions', 'Nigdi', 'Above Rupee Bank, Old Mumbai - Pune Hwy, Sector No. 24, Pradhikaran, Nigdi, Pimpri-Chinchwad, Mahara', 'www.devmantechnology.com', '', '9860 758 444', '', '', ''),
(261, 'Austere Technology Solutions', 'Nigdi', 'Office no 205,206,207 , A SQUARE, Plot no 34 ADC, Sec 26 , Pradhikaran, Ganga Nagar Rd, Government E', 'www.austere.co.in', '', '7720083881 / 77', '', '', ''),
(262, 'Amuwa Infotech', 'Narhe', 'Siddhivinayak Angan, F Wing F-02, Pune Banglore Highway, Behind CCD, Near Navale Lawn, Narhe, Pune -', 'www.amuwa.com', '', ' 9764 84 0404 |', '', '', ''),
(263, 'Sparken IT Solutions Pvt.Ltd', 'Sinhgad Road', 'Shivranjani House, 18 Seeta baug colony,\r\nGanesh Mala, Pune 411 030.', 'www.sparken.in', '', '9168798866', '', '', ''),
(264, 'Reformist Solutions', 'Dange Chowk', '302,wing \'A\' Laxmitara market, near sonigara park,\r\nDange chowk, Pune-411033', 'www.reformist.in', '', '020-65008620', '', '', 'Not Specified'),
(265, 'ITCube Solutions Pvt Ltd', 'Bibvewadi', 'Kapil Upvan Plaza,\r\n5th Floor, Chaitraban, Lake Town Road,\r\nNear State Bank Nagar, Bibvewadi,\r\nPune ', 'www.itcube.net', '', '20-24280665/66/', '', '', ''),
(266, 'Winsoft Technologies India Pvt. Ltd', 'Bibvewadi', '3rd Floor, Sadanand CHS., Survey No.678, Plot No.17, Opp. Soba Savera Society, Sangamnagar, Bibvewad', 'www.winsoftech.com', '', '91(020)-2421884', '', '', 'Service and Product'),
(267, 'Xplore Logic Systems Private Limited', 'Magarpatta', 'Level 7, Pentagon P-1, Magarpatta City , Hadapsar , Pune - 411013 , India.', 'www.xplorelogic.com', '', '91-020-66488612', '', '', ''),
(268, 'Kimaya Infotech', 'Bibvewadi', '672/5b, \'Ayodhya\',\r\n5th Floor, Opp. Canara Bank, Bibwewadi,\r\nPune-411037, Maharastra.', 'www.kimayainfotech.com', '', '(020) 2422 5969', '', '', ''),
(269, 'CodeToArt', 'Bibvewadi', ' Flat no.3, Ganesh Corner, Mahesh Society, Bibvewadi, \r\nPune â€“ 411037. India', 'www.codetoart.com', '', '942 073 0595', '', '', ''),
(270, 'Yobisys Solutions Pvt. Ltd.', 'K K Market', 'Office No. 52,53, B-Wing, 3rd Floor, K.K. Market, \r\nDhankawadi, Pune - 411 043, State - Maharashtra,', 'www.yobisys.com', '', '', '', '', ''),
(271, 'Educe Solutions Pvt. Ltd', 'Sadashiv Peth', '102/2 Swojas House, Near Hatti Ganapati,\r\n\r\n      Sadashiv Peth, Pune â€“ 411030. INDIA.', 'www.educesolutions.com', '', '91 20 69000190 ', '', '', ''),
(272, 'Codeapp Solutions Pvt Ltd', 'Dhankawadi', 'Ajinkyatara 17-Kalaniketan, Kala Nagar Nr. Rajashri Shahu Bank Dhankawadi Pune, Maharashtra', 'www.codeappsolutions.com', '', ' 86980 04323', '', '', ''),
(273, 'Tej IT Solutions', 'Balajinagar', 'SR. No. 22, Office No. B-21, \r\nGround Floor, Balaji Krupa Building, \r\nOPP. Siddhi Hospital Pune-Sata', 'www.tejitsolutions.com', '', '020 65701010, 0', '', '', ''),
(274, 'MSOFT', 'K K Market', 'Office No - 85, \'A\' Wing, 6th Floor\r\nâ€ƒK.K. Market, Pune-Satara Road, Pune\r\nâ€ƒMaharashtra, India', 'www.msoft.co.in', '', '20 4125 5050 / ', '', '', ''),
(275, 'G N Solutions Pvt. Ltd.', 'Kothrud', '128/1A,3rd floor, \'B wing, Plot No.2, Pate Icon, Paud Road, Kothrud, Mahaganesh Colony, Kothrud, Pun', 'www.globalnestsolutions.com', '', ' 20 66000254', '', '', ''),
(276, 'Ieinfosoft', 'Narhe', 'Office No.107, Valhekar Heights, Near Hdfc bank, New Nahre, Mumbai Pune Bypass Rd, Pune, Maharashtra', 'www.ieinfosoft.com', '', '20 6521 1313', '', '', ''),
(277, 'ExploreSys', 'Bibvewadi', '414-415, 4th Floor, â€˜Decision Towerâ€™\r\nS.No. : 692A, Near City Pride Multiplex,\r\nBibwewadi, Pune ', 'www.exploresys.com', '', '91 20 2421 5430', '', '', ''),
(278, 'IBN Technologies', 'Swargate', 'CYBERNEX,\r\n4th Floor, 399, Shankerseth Road,\r\nBeside Vega Center Swargate,\r\nPune, Maharashtra â€“ 41', 'www.ibntech.com', '', '20-66556565', '', '', ''),
(279, 'Sphinx Solutions Pvt. Ltd.', 'Swargate', '6th Floor, Cybernex, 399,\r\nShankar Seth Road, Swargate,Pune â€“ 411037, M.H., INDIA', 'www.sphinx-solution.com', '', '2024464646', '', '', ''),
(280, ' Kairee Systems Pvt. Ltd', 'Sadashiv Peth', '2036, Lokmanya Bal Gangadhar Tilak Rd, Vijayanagar Colony, Sadashiv Peth, Pune, Maharashtra 411030, ', 'www.kaireesystems.com', '', '91 20 2432 5112', '', '', ''),
(281, 'Suma Soft Private Limited', 'Erandwana', 'SumaCenter, 2nd Floor, Opposite Himali Society. Erandawane,\r\nPune, Maharashtra â€“ 411004', 'www.sumasoft.com', '', '20 4013 0400', '', '', ''),
(282, 'Radiant Software Solutions', 'Dhankawadi', 'Plot No. 41,Chandrama Bunglow, Nityanand Society, Balajinagar, Dhankwadi, Pune - 411 043.', 'www.radiantsoftwares.net', '', '20-243 65622', '', '', ''),
(283, 'Dench Technologies', 'Narhe', '3rd Floor, Samarth Recidancy, Opposite Pratik Hostel, Near Kashibai Navle Hospital, Narhe, Pune- 411', 'www.denchtechnologies.com', '', '', '', '', ''),
(284, 'Speed Techserve Pvt Ltd', 'Narhe', '1 & 2nd Floor,\r\nOpp. to Vrundavan Hall,\r\nVetalBuva Chouk, Narhe,\r\nPune, Maharashtra\r\n411041, India ', 'www.speedtechserve.com', '', '', '', '', ''),
(285, 'LizhenTech Pvt. Ltd', 'Narhe', 'Flat No. 202 Varad Vihar Building, \r\nNarhe, Pune, India 411041', 'www.lizhentech.in', '', '9923219756,9767', '', '', ''),
(286, 'CoperByte Software Solutions Pvt. Ltd.', 'Sinhgad Road', 'CoperByte Software Solutions Pvt. Ltd. Shop No.77, Amrut Ganga Society, Near By ICICI Bank Manik Bau', 'www.coperbyte.co.in', '', '9527966188', '', '', ''),
(287, 'iAriana Technologies Pvt. Ltd.', 'Dhayri', 'B 810/811, Madhukosh, Dhayari Phata, Sinhagad Road, Pune 411041, Maharashtra, INDIA', 'www.iarianatech.com', '', '9673990312', '', '', ''),
(288, 'MindPlanet Technologies', 'Sinhgad Road', 'Shriji Bunglow, Second Floor,Near Pune-Banglore Highway,\r\nVadgaon BK,Pune - 411041', 'www.mindplanet.in', '', '9552718072', '', '', ''),
(289, ' Sandat Web Solution', 'Sinhgad Road', 'Office No. 12 \r\nKudale App, Opp to Brahma Garden, Manik Chawk, Sinhgad Road Pune 411051.', 'www.sandatwebsolution.com', '', ' 7083671009/ +9', '', '', ''),
(290, 'KasNet Technologies Pvt. Ltd.', 'Narhe', 'Ganesh Plaza,Above ICICI Bank, Manaji Nagar, Narhe Pune-411041', 'www.kasnetinc.com', '', '020-65203110', '', '', ''),
(291, 'OMVSAB IT SOLUTION', 'Karve Nagar', 'Hingane Home Colony,\r\nNear Karvenagar Bus Stop,\r\nKarvenagar,\r\nPune.', 'www.omvsabitsolution.in', '', '020-65222250', '', '', ''),
(292, 'Elite Softwares Pvt. Ltd.', 'Karve Nagar', 'Office No.6, 2nd Floor, Kusai Market Building, Above Roopam Sweets, Karvenagar Main Bus-Stop. \r\nPune', 'www.elitesoftwares.co.in', '', '927-2222-120', '', '', ''),
(293, 'Inditech Systems', 'Sinhgad Road', 'Survey No. 29/2/1 Anant Heights, Jadhav Nagar, Village Nanded, Sinhagad Road, Pune-411041', 'www.inditechsystems.com', '', '020 - 24380074 ', '', '', ''),
(294, 'PeakSoft Technologies Pvt. Ltd.', 'Tilak Road', '2nd Floor, Madhav Heritage,Opposite of\r\nHeera Photo Lab\r\nSadashiv Peth,\r\nTilak Road, Pune - 30 ,', 'www.pstpl.com', '', '', '', '', ''),
(295, 'Yardi Systems', 'Senapati Bapat Road', 'Senapati Bapat Road\r\nSigma House, 2nd Floor\r\nPune, MH 411016\r\nIndia', 'www.yardi.com', '', '20 6723 9000', '', '', ''),
(296, 'Shivrai Technologies Pvt.Ltd', 'Pune Satara Road', 'Unit No. 17, 2nd Floor,Electronic Co-operative Estate Ltd.,\r\nPune-Satara Road,Pune 411009, India.', 'www.shivrai.co.in', '', '20-24216370, +9', '', '', ''),
(297, 'EDS Technologies Pvt. Ltd.', 'Vimannagar', 'Fourth Floor, Alpha â€“ 2,Gigaspace, Vimannagar, Pune â€“ 411 014, India ', 'www.edstechnologies.com', '', '02041210121', '', '', ''),
(298, 'MyosPaz Technologies Pvt. Ltd.', 'Shivane', 'kanchandeep,NDA Road,\r\nNear Harishkumar Super Shop,\r\nShinde Pool,Shivane,Pune-411023', 'www.myospaz.in', '', '020- 65627999', '', '', ''),
(299, 'AbyZ Infotech India Pvt. Ltd.', 'Karve Nagar', '44, Naman bunglow \r\nSwastik colony \r\nnear saras bank,\r\nKarve nagar, Pune (Maharashtra', 'www.abyzinfotech.com', '', '', '', '', ''),
(300, 'Expedite Informatics Pvt Ltd', 'Shivane', '3rd Floor, Shivakamal Prestige,, Near Shinde Pull, NDA Road, (Landmark-Sadguru Electronics), Dangat ', 'www.exinformatics.com', '', ' 20 6510 0228', '', '', ''),
(301, 'Sagacity Softwares Pvt Ltd', 'Warje', 'Office No. 301-302,\r\n3rd Floor, R-Cube Complex,\r\nOpposite Vinayak Hospital,\r\nMumbai-Pune Highway,\r\nW', 'www.sagacitysoftware.co.in', '', '20-25204305 | U', '', '', ''),
(302, 'BancTec TPS India Pvt. Ltd', 'Senapati Bapat Road', '9th Floor, Tower-A, ICC Tech Park, Mahrashtra, Senapati Bapat Road, Pune, Maharashtra 411016', 'www.sourcehov.com', '', '020 3953 7500', '', '', 'Not Specified'),
(303, 'SailPoint Technologies Pvt.Ltd', 'Senapati Bapat Road', '1st Floor, Tower A, ICC Tech Park, City Survey No.-985, F.P. No-403, Senapati Bapat Road, Pune, Maha', 'www.sailpoint.com', '', '', '', '', ''),
(304, 'KAT Technologies', 'Sadashiv Peth', '4th fl., Laxmi Prasad,\r\n1185, Sadashiv Peth,\r\nBehind Maharashtra Mandal,\r\nPune 411 030. Maharashtra ', 'www.kattechnologies.com', '', '020 24444379', '', '', ''),
(305, 'EclatSol Technologies Pvt. Ltd.', 'Tilak Road', 'Office #401, 4th Floor, Pinacle Pride, Above Maharashtra Electronics Corporation, Tilak Road, Pune', 'www.eclatsol.com', '', '020-40040092', '', '', ''),
(306, 'SpotOn Software Pvt. Ltd.', 'Kothrud', 'C3-303, Saudamini Commercial, Bhusari Colony, Paud Road, Kothrud, \r\nPune, Maharashtra, India - 41103', 'www.spotonsoft.com', '', '206 401 0958', 'Android,iOS', '', ''),
(307, 'Softcell', 'Wakdewadi', '504, Mayfair Towers,\r\n28, Mumbai-Pune Road,\r\nWakdewadi, Pune - 411005\r\nMaharashtra, India', 'www.softcell.com', '', '020 6600 6700', '', '', ''),
(308, 'Cassiopae Solutions Pvt Ltd', 'Senapati Bapat Road', 'Pride Silicon Plaza, Senapati Bapat Rd, Chattushringi, Gokhalenagar, Pune, Maharashtra 411016', 'www.cassiopae.com', '', '020 6723 3604', '', '', ''),
(309, 'CityIT Solutions Pvt. Ltd.', 'Rahatani', '4, Shruti Enclave,\r\nLane Opp. Park Street, Rahatani,\r\nPune-411017, MH, India', 'www.cityit.in', '', '020-2027 2720', '', '', ''),
(310, 'Optra Systems, Inc', 'Hinjawadi', '5th Floor, IT - 4, Neopro SEZ,\r\n2 Blue Ridge, Hinjewadi,\r\nPune 411057', 'www.optrasystems.com', '', '20-64009828', '', '', ''),
(311, 'Redbytes Software', 'Vishrantwadi', 'Kalas road,\r\nVishrantwadi,\r\nPune, Maharashtra-411015', 'www.redbytes.in', '', '81 1386 0000', '', '', ''),
(312, 'OmniBridge Systems Pvt. Ltd', 'Baner', '301, Octave Complex, Baner Road, Near Subway, Pallod Farms, Baner, Pune, Maharashtra 411045', 'www.omni-bridge.com', '', '9595804884', '', '', ''),
(313, 'ROW', 'Aundh', '1st Floor, Nanasaheb S. Gaikwad (NSG) IT Park,\r\nAbove Croma Showroom,\r\nPune, India-411 007', 'www.returnonweb.com', '', '(976) 5932-558', '', '', ''),
(314, 'Quick Heal Technologies Pvt. Ltd', 'Wakdewadi', '603, Mayfair Towers-II, Wakdewadi, Shivaji Nagar, Pune, Maharashtra 411005', 'www.quickheal.com', '', '020 2566 3632', '', '', ''),
(315, 'NTT DATA', 'Aundh', 'Server Space, 6th Floor, AG Technology Park, Off ITI Road, Sarjaa Road, Sanewadi, Aundh, Pune, Mahar', 'www.nttdata.com', '', '020 6709 5600', '', '', ''),
(316, 'Texity Systems Pvt Ltd', 'Aundh', '4 Rajyog Creation\r\nAnand Park, Aundh\r\nPune - 411 007, India', 'www.texity.com', '', '20-27299046 / +', '', '', ''),
(317, 'Intelliswift Software Pvt Ltd', 'Vimannagar', '101-A, Gamma -1\r\nGiga Space IT Park\r\nOff Pune â€“ Ahmednagar Road\r\nViman Nagar\r\nPune - 411 014', 'www.intelliswift.co.in', '', '02049138009', '', '', ''),
(318, 'TechBulls SoftTech Pvt. Ltd', 'Baner', '13A, 6th Floor, Windsor Commerce\r\nNear Wadeshwar Hotel\r\nBaner Road, Baner\r\nPune, Maharashtra, 411 04', 'www.techbulls.com', '', '', '', '', ''),
(319, 'Infogain', 'Bund Garden Road', 'Office No. 603, 6th Floor, B-Wing,\r\nOpp. Wadia College, Godrej Castlemaine,\r\nAdjacent to Ruby Hall C', 'www.infigain.com', '', '02049113700', '', '', ''),
(320, 'Thinkbridge Software Solutions', 'Baner', '401 Crystal Homes, Baner Road\r\nPune, MH â€“ 411045, India', 'www.thinkbridgesoftware.com', '', '800-120-9232', '.NET', '', 'Service'),
(321, 'HSBC Software Pvt ltd', 'Kalyani Nagar', 'HSBC Centre, Riverside, West Avenue, 25 B, Kalyani Nagar Pune. INDIA - 411006\r\n', 'www.hsbcglt.com', '', '02026683000', '', '', 'Captive'),
(322, 'Arvan Technologies Pvt. Ltd.', 'Koregoan Park', '\r\n8, Dee Bee Tower, Lane No. 5,\r\nSouth Main Road, Koregaon Park,\r\nPune â€“ 411001\r\nMaharashtra, Indi', 'www.arvan.in', '', '', '', '', ''),
(323, 'Citrus Payments', 'Baner', ' Icon Tower, 5th floor, Baner Rd, Baner, Pune, Maharashtra 411045', 'www.citruspay.com', '', '', '', '', 'Product'),
(324, 'Indexnine Technologies Pvt Ltd', 'Balewadi', '201, \'Angelica\'\r\nShivneri Park, \r\nBalewadi, Pune - 411045,\r\nMaharashtra, India', 'www.indexnine.com', '', '96899 47441', '', '', ''),
(325, 'TSQUARE Software Pvt. Ltd', 'Hadapsar-Megacenter', 'K-305, Mega Center,\r\nOff. Pune-Solapur Road,\r\nHadapsar,\r\nPune - 411 028,\r\nMaharashtra, India', 'www.tsquare.co.in', '', '020  2689 0579', '', '', ''),
(326, 'MindWorx Software Services Pvt. Ltd', 'Balewadi', 'Speciality Business Center S.No: 3, Next to MITCON,\r\nBalewadi Rd, Balewadi, Pune:- 411045 Maharashtr', 'www.mindworxsoftware.com', '', '91 020 6060 602', '', '', ''),
(327, 'EC Infosolutions Pvt Ltd', 'Baner', '102 Network Savoy, Next to Comfort Zone, Baner Balewadi Road\r\nPune, Maharastra 411 045\r\nIndia', 'www.ecinfosolutions.com', '', '99211 93330', '', '', ''),
(328, 'Mindstix Software Labs Pvt. Ltd', 'Baner-Pashan Link Road', ' 3, Baner - Pashan Link Rd, Baner, Pune, Maharashtra 411045', 'www.mindstix.com', '', '', '', '', ''),
(329, 'Indecomm Global Services ', 'Aundh', 'Indecomm Global Services \r\nLearning Services Division\r\n1st Floor, Westend Centre III\r\nSurvey No 169/', 'www.indecomm.net', '', '20 66240500', '', '', ''),
(330, 'Exioms Technology Pvt Ltd', 'Wakad', 'B-203 G.O. Square IT Park, Wakad, Hinjewadi Road Pune, Maharastra,- 411027', 'www.exioms.com', '', '', '', '', ''),
(331, 'Entytle India Private Limited ', 'Baner', 'Unit No. 601, Siddh Icon, Near Bikaner Sweets, Baner Road, Baner Pune Pune MH 411045 ', 'www.entytle.com', '', '', '', '', ''),
(332, 'Excellence IT Solutions Pvt. Ltd', 'Aundh', '3rd Floor, Vasundhara Spaces,\r\nS.No â€“ 167/1 & 168/1,\r\nCTS No. 2493 & 2494,\r\nAdjacent to Rahul Hote', 'www.excellenceitsolutions.com', '', '020 6686 0866 /', '', '', ''),
(333, 'ConfluxSys', 'Baner', '803 â€“ 804, Supreme Headquarter,\r\nMumbai-Bangalore Highway, Baner,\r\nPune â€“ 411045, Maharashtra, I', 'www.confluxsys.com', '', '', '', '', ''),
(334, 'QUAGGA TECH Pvt Ltd', 'Kharadi', 'Nasscom Startup Warehouse, MIDC IT tower\r\nKharadi South Main Rd, Near Zensar Technologies\r\nKharadi, ', 'www.quagga.in', '', '', '', '', ''),
(335, 'Infovision Labs', 'Baner', 'Teerth TechnoSpace, S.No. 103, Off Mumbai Bangalore Highway, Baner, Pune â€“ 411 045', 'www.infovisionlabs.com', '', '', '', '', ''),
(336, 'IDRIG Software', 'Wanowarie', '104, F.J.Palace, Near Sungrace School, Off Salunkhe Vihar Road,Wanowrie, Oxford Village, Kedari Naga', 'www.idrig.com', '', '', '', '', ''),
(337, 'Sarvaha Systems Pvt. Ltd.', 'Aundh', '204, Gaikawad Villa, Opposite Punjab National Bank, Aundh, Pune, India. PIN â€“ 411007', 'www.sarvaha.com', '', '9850847857, +91', '', '', ''),
(338, 'Agile Soft Systems Pvt. Ltd', 'Sus', 'M-Arch Centre, Opp. Audi Service Station, Sus road, Pune, Maharashtra ', 'www.agsft.com', '', '', '', '', ''),
(339, 'Infort Technology Pvt. Ltd.', 'Senapati Bapat Road', '\'Pratibha\' 2nd Floor, 6th Block,\r\nBehind Ratna Memorial Hospital,\r\nSenapati Bapat Road Ramoshivadi,\r', 'www.inforttechnology.com', '', ' 20 25656757', '', '', ''),
(340, 'SteepGraph Systems Private Limited', 'Wakad', 'A-502,Ganga Osian Square,\r\nWakad,Pune-411057,\r\nIndia.', 'www.steepgraph.com', '', '20-6500-2000', '', '', ''),
(341, 'Spieler IT Solution', 'Bavdhan', '103, Karanjawane building,\r\nNDA Pashan road , Bavdhan,\r\nPune - 411021', 'www.spielerglobal.com', '', '919595663646', '', '', ''),
(342, 'vDriviT Solutions Pvt. Ltd', 'Bavdhan', 'vDriviT Solutions Pvt. Ltd. 103/104, Sukhwani Prestige, NDA-Pashan Road, Bavdhan, Pune-411021, India', 'www.vdrivit.com', '', '9120-2295-1179,', '', '', ''),
(343, 'Quick Report Software Pvt Ltd', 'Swargate', 'CTS No. 8/30, Final Plot No. 413/30, 2nd Floor,\r\nAshray Apartment, Mukundnagar, Pune - 411037, India', 'www.quickreport.in', '', '9699110120', '', '', ''),
(344, 'Happiest Minds', 'Yerwada', 'Vatika Business Centre,\r\nLevel 5, C - Tower, Tech Park - 1,\r\nAirport Road, Yerwada,\r\nPune - 411006, ', 'www.happiestminds.com', '', '9845903260', '', '', ''),
(345, ' SYNNOVE TECHNOLOGIES ', 'Kothrud', 'Block No-5,2nd Floor,137/4/44,Ratan,Gururaj Society,Paud Road,Kothrud,Pune-411038', 'www.synnovesystems.com', '', ':020-65393300', '', '', ''),
(346, 'Vishwasya Technologiess Pvt. Ltd.', 'Kalewadi Phata', 'C-103, Nisarg City-2,\r\nKaspate Wasti, Near Hotel Ambience, Kalewadi Phata, Wakad, \r\nPune - 411057, M', 'www.vishwasya.com', '', '', '', '', ''),
(347, 'CodesCastle', 'Wakad', '501, Fortune Business Centre, Wakad, Pune - 411057, Maharashtra, India.', 'www.codescastle.com', '', '888 888 1551', '', '', ''),
(348, 'Vibeosys Software Pvt Ltd', 'Pashan', ' F.No. Rajey Apartment, Near HDFC, 301, Baner - Pashan Link Rd, State Bank Nagar, Pashan, Pune, Maha', 'www.vibeosys.com', '', '098811 03650', '', '', ''),
(349, 'RELFOR LABS PVT. LTD.', 'Kalyani Nagar', '14th Floor,\r\nSky One,\r\nKalyani Nagar,\r\nPune 411006, MH-India.', 'www.relfor.com', '', '20-67475454', '', '', ''),
(350, 'Fiserv Software Pvt Ltd', 'Kalyani Nagar', 'Cerebrum IT Park, Marigold complex, Kalyani Nagar, Pune, Maharashtra 411014', 'www.fiserv.com', '', '020 4101 4000', '', '', ''),
(351, 'Zealium Technologies Pvt Ltd', 'Bhumkar Nagar', '504, 5th Floor, Wisteriaa Fortune, Marunji Rd Wakad, Bhagwan Nagar, Bhumkar Nagar, Wakad, Pune-41105', 'www.zealium.com', '', '', '', '', ''),
(352, ' Liza Technologies Pvt. Ltd.', 'Sanghavi', 'Flat No.9, 4th Floor, Sai Rang Complex, \r\nOpp. Kate Puram Bus Stop,\r\nSanghavi,Pune-27', 'www.lizatechnologies.com', '', '8237 796 788', '', '', ''),
(353, 'SunONE Technologies Pvt Ltd', 'Kothrud', '81/2, Paud Rd, Bharti Nagar, Kothrud, Pune, Maharashtra 411038', 'www.sunonetech.com', '', '089833 96000', '', '', ''),
(354, 'Saama', 'Hinjawadi', 'Level-10, Building - IT8, Qubix SEZ, Blue Ridge,, Survey No. 154/6, Phase -1, Rajiv Gandhi Infotech ', 'www.saama.com', '', '020 6692 9000', '', '', ''),
(355, 'LinguaSol ', 'Bavdhan', '4th Floor, Galore Tech Park, \r\nBavdhan, Pune - 411021', 'www.linguasol.net', '', ' 20 22 95 38 48', '', '', ''),
(356, 'New IndicTrans Technologies', 'Bavdhan', 'Office 3 & 4, Suman Sudha, Amchi Colony, NDA-Pashan Road, Bavdhan, Bavdhan, Pune, Maharashtra 411021', 'www.indictranstech.com', '', '', '', '', ''),
(357, 'NXG Labs Pvt Ltd', 'Baner', '2nd Floor, Madhuvant Villa, Plot no. 7, Rajyog Housing Society, Baner Mahalunge Road, Baner â€“ 4110', 'www.nxglabs.in', '', '', '', '', ''),
(358, 'BiCS infotech Pvt Ltd', 'Katraj', 'Sr No.78,Phase 7, Row House 3,Patang Plaza,\r\nKatraj, Pune-411046, Maharashtra, India', 'www.bicsinfotech.com', '', '', '', '', ''),
(359, 'Trust systems & Software', 'Bavdhan', '4th Floor, Sumanglam Complex, \r\nBavdhan, Pune 411 021', 'www.softtrust.com', '', '9422111442', '', '', ''),
(360, 'Greensoft Systems', 'Katraj', '205 Shree Ganesh Vishwa , Katraj-Kondhawa Road, Pune-411046', 'www.greensoftsystems.com', '', '9766364455', '', '', ''),
(361, 'Tsysinfo Technologies Pvt. Ltd.', 'Sinhgad Road', '14 Vijaya Chambers . Opp. State Bank Of India . Hingane Khurd . Sinhgad Road . Pune, Maharashtra 411', 'www.tsysinfo.com', '', '020 24345773 | ', '', '', ''),
(362, 'Xpanso Technologies Pvt. Ltd.', 'Wakad', 'C-1102, Sanskriti, \r\nKaspate Vasti \r\nWakad, Pune - 411057 \r\nMaharashtra \r\nIndia ', 'www.xpanso.com', '', '', '', '', ''),
(363, 'CREINTECH SOLUTIONS LLP ', 'Katraj', 'Rajwade Complex, Office # 10, 3rd Floor\r\nNear Podar International School, Pune-Mumbai Bypass,\r\nKatra', 'www.creintech.com', '', '99700-22668', '', '', ''),
(364, 'Hexabitz IT Solution', 'Katraj', '#5, Classic Garden,\r\nOpp. Bharti Vidyapeeth Main Gate,\r\nSatara Road, Katraj,\r\nPune, Maharashtra.\r\nPI', 'www.hexabitzitsolutions.com', '', '2065001020', '', '', ''),
(365, 'Cryptimatrix Solutions', 'Dhankawadi', 'Row House No. 11, Bhagyashree Gardens, Near Vinkar Sabhagruha, Dhankawadi, Pune, Maharashtra 411043', 'www.cryptimatrix.com', '', '9923-585053', '', '', ''),
(366, 'Quagnitia', 'Kalyani Nagar', 'Office No. 7, \r\n1st floor, Building No B-3,\r\nCerebrum â€“IT PARK, \r\nKalyani Nagar, \r\nPune- 411014\r\nI', 'www.quagnitia.com', '', '', '', '', ''),
(367, 'Kopera Software Pvt. Ltd.', 'Senapati Bapat Road', 'Second floor, Plot No. 7\r\nShri Shantadurga Niwas\r\nShivaji Coâ€“operative Housing Society Ltd.\r\nOff S', 'www.koperadev.com', '', '020 25637890', '', '', ''),
(368, 'Ashtech', 'Sahakar Nagar', '84-Meghana Housing Soc., Sahakarnagar No.2, Ground Floor, Morya Sanskriti Apt., Tulshibagwale Colony', 'www.ashtech.in', '', '+91-(20) - 2422', '', '', ''),
(369, 'Sokrati Technologies Pvt Ltd', 'Baner', 'Survey No. 35, Deep Complex, 1st floor,\r\nAbove Renault Showroom, Mumbai â€“ Bangalore Highway Road,\r', 'www.sokrati.com', '', '20-66250000 / 7', '', '', ''),
(370, 'Lets Webify eCommerce Solutions', 'Sahakar Nagar', 'Flat No. 1, 1st Floor, C3 Building,Maniratna Complex, Off Pune-Satara Road, \r\nSahakar Nagar â€“ 1, T', 'www.letswebify.com', '', '20-64000140', '', '', ''),
(371, 'Websym Solutions Pvt. Ltd', 'Hinjawadi', 'Plot no. 34/2, Rajiv Gandhi Infotech Park â€“ Phase 1,\r\nHinjawadi, Pune 411 057 â€“ India', 'www.websym.com', '', '(20) 661 43 400', '', '', ''),
(372, 'Sycamore ', 'Parvati', 'Survey No.44,Plot No.6,Office No.7,\r\nManogat Apt., Near Muktangan School,\r\nParvati, Pune, India 4110', 'www.sycamoresoft.com', '', '', '', '', ''),
(373, 'AgreeYa Mobility India Pvt.Ltd', 'Baner', '401-402 4th Floor, \r\nAmar Apex, Baner Road,\r\nPune-411045\r\nMaharashtra', 'www.agreeya.com', '', '', '', '', ''),
(374, 'Blue Pearl Infotech Pvt. Ltd', 'Pashan', '201,Chandravarsha commercial complex,Above SBI Bank,near balaji chowk,, Pashan - Sus Road, Pashan, P', 'www.bluepearlinfotech.com', '', '', '', '', ''),
(375, 'Incraft Technologies', 'Kharadi', 'Knowledge Park, EON IT Tower Rd, near last bus stop kharadi gaon,\r\nPune-411014', '.www.incrafttechnologies.com', '', '', '', '', ''),
(376, 'CLARISMAT TECHNOLOGIES PVT LTD', 'Erandwana', ' 3, Shrey, Prabhat Road, Lane No - 9A, Erandwane, Pune - 411004, INDIA', 'www.clarismart.com', '', '70309 09772 / 7', '', '', ''),
(377, 'Kahuna Systems', 'Aundh', '4, Varsa Court,\r\nOpp. Kirloskar House, Anand Park,\r\nAundh, Pune (MH) â€“ 411 007', 'www.kahunasystems.com', '', '20-65293244', '', '', ''),
(378, 'Techila Global Services', 'Magarpatta', 'A101, Pentagon 5, Magarpatta City, Hadapsar, Pune, Maharashtra 411013, India', 'www.techilaservices.com', '', '020.69784402', '', '', ''),
(379, 'NityaObject Software Services Private Limited', 'Erandwana', '#404, Chinar Heights, Prabhat Road Lane 5,\r\nErandwane, Pune 411004.', 'www.nityaobject.com', '', ' 020 - 25457871', '', '', ''),
(380, 'Clover Infotech', 'Boat Club Road', 'Clover Centrum No. 5. Galaxy Society\r\n245 Boat Club Road\r\nPune - 411001, Maharashtra, India', 'www.cloverinfotech.com', '', '(20) 26160022', '', '', ''),
(381, 'Xebrium Software Pvt ltd.', 'Erandwana', '14, The Senate Business Centre, opp Gharkul Lawns, Erandwane Erandwane 411052, Vakil Nagar, Erandwan', 'www.xebrium.com', '', '', '', '', ''),
(382, 'Zenovoir Technologies Pvt. Ltd.', 'Wanowarie', '614, South Block \r\nSacred World, Wanowrie \r\nPune, PIN:411 040\r\nMaharashtra, India', 'www.zenovoir.com', '', ' 020 41240400 ', '', '', ''),
(383, 'MindNerves Technology Services Pvt Ltd', 'Hadapsar', '2nd Floor , Nitron Classic \r\nSt. Patrick Town (Before Gate no. 04), Next to Kalpana Housing Society,', 'www.mindnerves.com', '', '', '', '', ''),
(384, 'Sysfort', 'Erandwana', 'A1-2 Prasanna, Koumudi Society, \r\nErandawane, Pune, \r\nMaharashtra 411004, India.', 'www.sysfort.com', '', '202 543 6640', '', '', ''),
(385, ' Intellection Software & Technologies Pvt. Ltd,', 'Kothrud', ' Indradhanu, Plot No. 18, Mangaldham Society, Near Eklavya College, Kothrud, Pune â€“ 411038, India', 'www.intellection.in', '', '20-25362888', '', '', ''),
(386, 'Soft Corner ', 'Karve Road', 'Fifth Floor, Shree Niketan,\r\nSheelavihar Colony, Off Karve Road,\r\nPune - 411038. India.', 'www.soft-corner.com', '', '20-25460736 / 2', '', '', ''),
(387, 'Qualitia Software Pvt. Ltd.', 'Kalyani Nagar', 'Level 2, B-3, Cerebrum IT Park, Marigold complex, Kalyani Nagar, Pune, Maharashtra 411014', 'www.qualitiasoft.com', '', '020 6727 8200', '', '', ''),
(388, 'Intellify Solutions', 'Kothrud', 'PAYKO TOWER, 5TH FLOOR, S. NO. 147/8, KARVE CHOWK, KOTHRUD, PUNE 411038, INDIA   ', 'www.intellifysolutions.com', '', '', '', '', ''),
(389, 'Lean Apps Software Pvt. Ltd.', 'Wakad', 'B-114, G O Square, Kaspate Wasti, \r\nAundh Hinjewadi Link Road, Wakad,\r\nPune, Maharashtra - 411057, I', 'www.theleanapps.com', '', '20 6570 9000', '', '', ''),
(390, 'Xoyal IT Services', 'Dhole Patil Road', '2nd Floor, Mansur Ali Tower, Behind Yes Bank, Dhole Patil Road, \r\nPune - 411001 (Maharashtra) India', 'www.xoyal.com', '', '9860183377', '', '', ''),
(391, 'OmniBridge Systems Pvt. Ltd', 'Baner', '301, Octave Complex, Baner Road, Near Subway, Pallod Farms, Baner, Pune, Maharashtra 411045', 'www.omni-bridge.com', '', '9595804884', '', '', ''),
(392, 'iauro Systems Pvt Ltd', 'Senapati Bapat Road', 'Wankhede Bunglow, Plot no 41, Lane No 3,\r\nShivaji Housing Society, S.B Road, Shivajinagar,\r\nPune - 4', 'www.iauro.com', '', '20 6400 8585', '', '', ''),
(393, 'Sibz Solutions', 'Koregoan Park', 'Koregaon Park, Pune, Maharashtra 411001', 'www.sibzsolutions.com', '', '098230 25343', '', '', ''),
(394, 'Rahi-Tech Solution', 'Erandwana', '66, 3rd Floor, Patil Arcade, Opp. Sharada Center, Near Nal-Stop, Erandwane, Pune-04.', 'www.rahitech.com', '', '9421776347 ', '', '', ''),
(395, 'Signy IT Solutions Pvt Ltd', 'Kothrud', 'A15, Phase I, Lunavat Complex, Opp Kothrud Stand, Kothrud, Pune â€“ 411038, Maharashtra, India. Emai', 'www..signyit.com', '', '919561096003', '', '', ''),
(396, 'Empower Integrated Solutions (P) Ltd.', 'Kalyani Nagar', 'EFC Facility, 4th Floor, Marisoft III,\r\nMarigold Premises, Behind Gold Adlabs Multiplex,\r\nKalyani Na', 'www.empower-solutions.com', '', '20-49022030', '', '', ''),
(397, 'MobileSutra', 'Kothrud', 'B-6 , Patil Gardens, Tejas Nagar, \r\nKothrud Pune, India 411038', 'www.mobilesutra.com', '', '9890211198 ', '', '', ''),
(398, 'QualitasIT', 'Magarpatta', '304, Pentagon Towers, (P2), Magarpatta City, Hadapsar,  Pune, Maharashtra 411013', 'www.qualitasit.com', '', '', '', '', ''),
(399, 'SoftDEL', 'Magarpatta', 'SoftDEL\r\n3rd Floor, Pentagon P4,\r\nMagarpatta City, Hadapsar,\r\nPune, 411 028.', 'www.softdel.com', '', '20 6701 0001', '', '', ''),
(400, 'SOFTWAREGEN TECHNOLOGIES', 'Magarpatta', 'PENTAGON P2-P3,\r\nMAGARPATTA CITY, PUNE - 28\r\nMAHARASHTRA, INDIA', 'www.softwaregen.com', '', '2041208585', '', '', ''),
(401, 'CakeSoft Technologies Private Limited', 'Magarpatta', '1st floor, Pentagon IT Tower P-3 \r\nMagarpatta City,\r\nPune - 411028 India', 'www.cakesofttech.com', '', '20-41290009 ', '', '', ''),
(402, 'Swisslink Software Solutions Pvt. Ltd', 'Kharadi', 'Pride Icon, 4th floor\r\nMaharashtra State Highway 27, Kharadi\r\nPune - 411014', 'www.swisslink-software.com', '', '7719969121', '', '', ''),
(403, 'ADWI Technologies', 'Warje', 'D4/ A /801, Rahul Park,\r\nWarje, Pune - 411058', 'www.adwitechnologies.com', '', '7720077514', '', '', ''),
(404, 'CyberCode Consolidates.', 'Kothrud', 'No. 8, Lane No. 9 Laxmi Prasad,Off Karve Road, Kothrud, Pune-38', 'www.cybercode.co.in', '', '09730272005 ', '', '', ''),
(405, 'Knoxed Infotech', 'Vimannagar', 'MarieGold Building,\r\nOffice No 604, 6th Floor, \r\nSurvey No. 208,\r\nViman Nagar,Pune\r\nPin: 411014', 'www.knoxed.in', '', '(020) 41223290', '', '', ''),
(406, 'EncureIT Systems Pvt. Ltd', 'Fatimanagar', 'KPCT Mall, C Wing, 3rd Floor,Office No 309, Fatima Nagar,Pune 411040, INDIA.', 'www.encureit.com', '', '20-26861114', '', '', ''),
(407, 'Izel Technologies Pvt.Ltd', 'Kothrud', 'C-3 , 101-Saudamini Complex,\r\nRight Bhusari Colony, Paud Road,\r\nPune â€“ 411038, India', 'www.izeltech.com', '', '20 25280082', '', '', ''),
(408, 'Prometteur Solutions Pvt Ltd', 'Warje', '1st floor, Office 14, D 13, Near 411052, Popular Nagar, Ward No. 8, Warje, Pune, Maharashtra 411058', 'www.prometteursolutions.com', '', '080875 55678', '', '', ''),
(409, 'Bee Logical Software Solutions', 'Karve Nagar', 'Plot No.12,Purvakarta Bungalow,\r\nKshripa Society,Lane No.1,Near Idea Showroom,\r\nKarvenagar, Pune- 41', 'www.bee-logical.com', '', '+91 9665862273 ', '', '', ''),
(410, 'Triage Technocrats Pvt Ltd', 'Modell Colony', 'Lakeview Apartments, Model Colony,Pune- 16', 'www.triage-tech.com', '', '20-25664770', '', '', ''),
(411, 'Fullstackpoint', 'Kothrud', '11-12 Vasantika, 3rd Floor, \r\nOpp. Yena Bungalow,\r\nPaud Road, Pune 411 038', 'www.fullstackpoint.com', '', '9766931776', '', '', 'Not Specified'),
(412, 'mphatek', 'Padmavati', 'A-40, Kumar Panchashil,\r\nPadmavati, Pune - 411009', 'www.mphatek.com', '', '', '', '', ''),
(413, 'Gestell Technologies', 'K K Market', 'Office No. 63, A-Wing, 6th Floor K.K.Market,Dhankawadi,Pune-411043 Maharashtra,India.', 'www.gestell.in', '', '', '', '', ''),
(414, 'Swaliya Softech Pvt. Ltd.', 'Dhankawadi', 'Kashinath Patil Nagar, Balaji Nagar, Dhankawadi\r\nPune', 'www.swaliyasoftech.com', '', ' (020)- 6913141', '', '', ''),
(415, 'TECHCHIC Software Solutions Pvt. Ltd', 'Karve Nagar', 'Office No. 7, Nandanwan Park,\r\nS.No. 19/8/3, PL. 17,\r\nHingne Home Colony,\r\nKarve Nagar, Pune - 41105', 'www.techchicsoft.com', '', '976 466 9107 ', '', '', ''),
(416, 'Vigopa Solutions Pvt. Ltd.', 'Katraj-Kondhwa', '104-Second floor, Sliver Point building,\r\nSurvey No: 20/1/3, Katraj-Kondhawa road,\r\nNear Vishwa Gym ', 'www.vigopasolutions.com', '', '', '', '', ''),
(417, 'ArdSoftech', 'Sanghavi', '1st Floor, Shri Sai Building,\r\nAbove 3D Generation Shop, Main Krishna Chowk,\r\nNew Sangvi, Pune-41102', 'www.ardsoftech.com', '', '+912060302327', '', '', ''),
(418, 'Softsys Corporation', 'Bibwewadi', 'B/22/11, KK Market Rd, Lower Bibwewadi, Indira Nagar, Pune, Maharashtra - 411037 India', 'www.softsyscorporation.com', '', '9561382053', '', '', ''),
(419, 'Cosmos e-solutions & Services Pvt. Ltd.', 'ShivajiNagar', 'Cosmos Tower, S.No.132,\r\nPlot No.6, ICS Colony, GaneshKhind Road,\r\nShivajiNager, Pune-411007\r\nMahara', 'www.cosmosesolutions.com', '', '', '', '', 'Service and Product'),
(420, 'Majesco ', 'Kalyani Nagar', 'B1/B2, 2nd floor\r\nKumar Cerebrum, Kalyani Nagar,\r\nPune, Maharashtra 411014', 'www.majesco.com', '', '020 6607 2000', '', '', ''),
(421, 'Volkswagen IT Services ( VWITS )', 'Hinjawadi', ' Embassy Techzone, 9th Floor, Congo Building, 411057, Phase 2, Hinjewadi Rajiv Gandhi Infotech Park,', 'www.volkswagenits.com', '', '020 3915 7000', '', '', ''),
(422, 'Bacancy Technology', 'Kalyani Nagar', '2nd Floor, Marisoft-1, Marigold IT Park,\r\nPune, India - 411006', 'www.bacancytechnology.com', '', '', '', '', ''),
(423, 'Vizitech Solution', 'Kothrud', '2, Kaustubh Society,\r\nLane no 9, Dahanukar Colony,\r\nKothrud, Pune', 'www.vizitechsolutions.com', '', '20-65267017/18', '', '', ''),
(424, 'Opcito Technologies Pvt. Ltd', 'Wakad', '204, G-O Square, A-Building,\r\nWakad, Pune - 411057', 'www.opcito.com', '', '(20) 6712 4100', '', '', ''),
(425, 'Faichi Solutions', 'Baner', '504, Accord IT Park, Baner\r\nRoad, Pune â€“ 411045\r\nMaharashtra, India', 'www.saksoft.com', '', '20-65291435', '', '', ''),
(426, 'LifeLine Systech Solutions P. Ltd', 'Kothrud', 'Gopal House, 3rd Floor,\r\nB Wing, Above McDonalds,\r\nSurvey No 127, Karve Road,\r\nPune - 411029\r\nMahara', 'www.lifeline-sys.com', '', '020 67447000', '', '', ''),
(427, 'Clairvoyant  Soft', 'Baner', 'Plot No. 6, Survey No. 35, 1st Floor \r\nMumbai Bangalore Bypass Road \r\nBaner, Pune', 'www.clairvoyantsoft.com', '', '', '', '', 'Not Specified'),
(428, 'Futurica Technologies Pvt. Ltd', 'Baner', 'R.H. No-3, Elite Brookland,\r\n\r\nSR.No-22/5, Balewadi, Baner\r\n\r\nRoad,Pune-411045(INDIA', 'www.futurica.in', '', '916-8846-777', '', '', 'Service and Product'),
(429, 'Elliot Systems', 'Baner', '901, Tower 2, Montreal Business Center,\r\n\r\nnear Pallod Farms, Baner, Pune 411045\r\n\r\nIndia', 'www.elliotsystems.com', '', '916.772.0136', '', '', 'Not Specified'),
(430, ' ITARIUM Technologies India Pvt. Ltd', 'Karve Nagar', 'Office No: 3, Shreeyash, 59/22\r\nAppasaheb Kulkarni Path, Navasahyadri Society,\r\nKarve Nagar (Erandwa', 'www.itariumtech.com', '', '70386 76736', '', '', 'Not Specified'),
(431, 'Ignitiv', 'Baner', 'A-803, Teerth Technospace IT Park, Off Mumbai-Pune Highway, Baner, Pune - 411045', 'www.ignitiv.com', '', '976.540.0773', '', '', 'Not Specified'),
(432, 'Paratus Systems Pvt Ltd', 'Aundh', 'A-1 Krishnamayee Apartments, Above Sarjaa Hotel, 411 007, ITI Rd, Sahil Park, Sanewadi, Aundh, Pune,', 'www.paratussystems.com', '', '98507 55660', '', '', 'Not Specified'),
(433, 'Experis IT Pvt. Ltd', 'Sangamvadi', '19, Bund Garden Rd, Central Excise Colony, Sangamvadi, Pune, Maharashtra 411001', 'www.experisindia.com', '', ' 077795 94236', '', '', 'Not Specified'),
(434, 'Microlucid Technology Pvt. Ltd.', 'Baner', '101,Ashwamedh Harmony, Near State Bank Of Hyderabad \r\nBehind DMART, Baner ,Pune -411045,Maharastra  ', 'www.microlucid.com', 'contactus@microlucid.com', '020-64017888', '', '', 'Not Specified'),
(435, 'Exela Technologies', 'Senapati Bapat Road', '9th Floor, ICC Tech Park City | S.B. Road | Pune 411016', 'www.exelatech.com', '', '', '', '', 'Not Specified'),
(436, 'Ascentt ', 'Kalyani Nagar', '6th Floor, B3 Tower\r\nCerebrum IT Park, Kalyani Nagar\r\nPune, India 411014', 'www.ascentt.com', '', '020 6620 5772', '', '', 'Not Specified'),
(437, 'Mezzure Software Pvt. Ltd.', 'Camp', '509, 5th Flor, West Wing, Aurora Towers,\r\nM.G.Road, Camp, Pune 411001\r\nIndia.', 'www.mezzure.com', 'info@mezzure.com', '20 65280003 ', '', '', 'Not Specified'),
(438, 'Accelya', 'Bibvewadi', 'Accelya Enclave, 685/2B & 2C\r\n1st Floor, Sharada Arcade, Satara Road\r\nPune - 411037, India', 'w3.accelya.com', '', '20 6608 3777', '', '', 'Not Specified'),
(439, 'Zoftech Systems and Solutions Pvt. Ltd', 'Magarpatta', '001/P3, Pentagon Towers, Magarpatta IT Park, Pune, India', 'www.zoftech.net', '', '9890795699', '', '', 'Not Specified'),
(440, 'Wolters Kluwer', 'Kalyani Nagar', ' F-2 Floor, Matrix Tower CTS No.4/1, \r\nFinal Plot No.64/A Old Mumbai Pune Highway Wakadewadi, Shivaj', 'www.wolterskluwer.com ', '', '', '', '', 'Captive'),
(441, 'Xebia', 'Yerwada', 'Vatika Business Center,\r\nLevel-5, C-Tower, Tech Park-1, Airport Road, Yerwada, Pune - 411006', 'www.xebia.com', '', '02040111473', '', '', 'Service and Product'),
(442, 'Mobiquity Inc', 'Kharadi', '411, Fourth Floor, World Trade Center, Maharashtra, EON Free Zone, Kharadi, Pune, Maharashtra 411014', 'www.mobiquityinc.com', '', '020 60222285', '', '', 'Not Specified'),
(443, 'Neova Solutions', 'Magarpatta City', ' P3-603, Pentagon Tower, Slip Rd to Tower-3/4, Magarpatta City, Hadapsar, Pune, Maharashtra 411028', 'www.neovasolutions.com', '', '020 2689 9991', '', '', 'Not Specified'),
(444, 'InstaData', 'Magarpatta City', 'P2-304 Pentagon Tower, Slip Rd to Tower-3/4, Magarpatta City, Hadapsar, Pune, Maharashtra 411013', 'www.instainnovations.com', '', '089830 65000', '', '', 'Not Specified'),
(445, 'AST Corporation', 'Koregoan Park', 'Zero 1 Building, Office 702, 7th Floor, \r\nCTS No 1512 to 1551, Village Extension \r\nVanshaj Society, ', 'www.astcorporation.com', '', '20-69001020 ', '', '', 'Not Specified'),
(446, 'E-QL Business Solutions Pvt. Ltd', 'Narhe', 'B-102, Siddhivinayak Gardenia, S.No: 4/2/2, Off Mumbai-Satara Road, Narhe Pune-411041', 'www.eqlsoft.com', '', '020-24619295/96', '', '', 'Service and Product'),
(447, 'Eccentric Infotech', 'Baner-Balewadi link road', 'Palladian square,203,\r\nE wing, Second Floor,\r\nBaner-Balewadi link road,\r\nPune, 411045', 'www.eccentricinfotech.com', '', '', '', '', 'Not Specified'),
(448, '90DegreeNorth Technologies', 'Bibvewadi', 'Office No 104,Gagan Enclave, \r\nPune 411037', 'www.90degreenorth.com', '', '90110 76728', '', '', 'Not Specified'),
(449, 'Techsum Technology Pvt. Ltd', 'Ghorpadi', 'Kawade Patil Complex, 2nd Floor BT Kawade Road, Dombi Wadi, Ghorpadi, Pune-411001, Maharashtra', 'www.techsumtechnology.com', '', '7741930690', '', '', 'Not Specified'),
(450, 'Xtream InfoSystems ', 'Phursungi', 'B-5, Saptrang Akash\r\nBhekrai Nagar, Phursungi\r\nPune - 412308\r\nMaharashtra, INDIA', 'www.xtreaminfosystems.com', '', '020-30460019', '', '', 'Not Specified'),
(451, 'Atharva Techno-Solutions Pvt. Ltd.', 'Kothrud', '1,Vimal Vihar,Right bhusari Colony,\r\nBehind Reliance Mall,Paud Road,Kothrud\r\nPune (Maharashtra) - 41', 'www.atharvtech.com', '', '9423047277', '', '', 'Not Specified'),
(452, 'Logic Palace Systems & Softwares', 'Warje', 'Survey No. 14/1/15, Canel Road, \r\nOld Jakat Naka, Warje, \r\nPune- 411029. (India)', 'www.logicpalace.in', '', '', '', '', ''),
(453, 'Cystems Logic Inc', 'Baner', 'SaiShilp Business Center,\r\nNear Balewadi Phata Baner,\r\nPune 411045\r\nMaharashtra India.', 'www.cystemslogic.com', '', '22 2309 0885', '', '', ''),
(454, 'PolarStar Software Solutions', 'Narhe', 'B-303, Nirman Viva, \r\nSr. No. 11, 12 Ambegaon Bk. \r\nPune - 411 046 ', 'www.polarstarsoftware.com', '', '727-608-2362', '', '', ''),
(455, 'PezalTech Pvt. Ltd.', 'Narhe', 'Sai Ganesh Residency,\r\nNarhe, Pune Maharashtra,\r\nPincode - 411041', 'www.pezaltech.com', '', '7066661888', '', '', ''),
(456, 'ORIOLE', 'Narhe', 'F/14-17, 3rd Floor, Shree Siddhivinayak Angan, Above Cafe Coffee Day, Near Navale Bridge, Bangalore ', 'www.oriole.co.in', '', '9822115932', '', '', ''),
(457, 'Relevance Infosystems', 'Pune Satara Road', '312, Decision Towers, Next to Satara road CityPride, Above Domino\'s. Pune-37', 'www.relevanceinfosystems.com', '', '9167699952', '', '', ''),
(458, 'Sirsonite Solutions Pvt. Ltd', 'Vadgaon Budruk', 'Office No.- C-401, Shree Venkatesh Srushti, Near Nawale IT Park, Vadgaon Bk, Wadgaon Budruk, Vadgaon', 'www.sirsonite.com', '', '9404557688', '', '', ''),
(459, ' Swipfe Infotech Pvt. Ltd.', 'Vadgaon Bk', 'H. No. 1/82/4, Survey No. 69,\r\nSinhagad Road, Vadgaon Bk.,\r\nPUNE - 411041 , INDIA', 'www.swipfeinfotech.com', '', ' 020 -2439 1540', '', '', ''),
(461, 'Caprium Technologies India Pvt. Ltd', 'Kothrud', 'Opp. Lahia Jain IT Park, Paud Rd, Bhusari Colony, Kothrud, Pune, Maharashtra 411038', 'www.caprium.com', '', '020 3242 4244', '', '', ''),
(462, 'Angular Minds Pvt. Ltd.', 'Baner', '1st Floor, Silver Spring, Sahyadri Farms, Balewadi Road,\r\nBehind Kapil Complex, Baner, Pune, MH, Ind', 'www.angularminds.com', '', '+91 9096932144 ', 'AngularJS,NodeJS', '', ''),
(463, 'Asentech', 'Sadhu Vaswani Chowk', '7th Floor, Amar Synergy Building,\r\nNr. PMT Bus Depot, \r\nSadhu Vaswani Chowk,\r\nPune 411001, India.', 'www.asentechllc.com', '', '20 4914 9999', '', '', ''),
(464, 'Synnex Softech', 'Balaji Nagar', 'Office No.10, 4th Floor, Above Rajarshi Shahu Bank, Pune-Satara Road, Chitanya Nagar, Dhankawadi, Pu', 'www.synnexsoftech.com', '', '9096198683', '', '', ''),
(465, 'BMC Software', 'Yerwada', 'Wing 1, Tower \'B\', Business Bay\r\nSurvey No. 103, Hissa No. 2, Airport Road, Yerwada\r\nPune, Maharasht', 'www.bmcsoftware.in', '', '020 4017 5000', '', '', ''),
(466, 'Velotio Technologies Pvt Ltd.', 'Hinjawadi Phase-1', 'Websym, 34/2 Rajiv Gandhi Infotech Park, Hinjawadi Phase-1, Pune,, Maharashtra, Pune, Maharashtra 41', 'www.velotio.com', '', '020 6614 3480', '', '', 'Not Specified'),
(467, 'BlazeClan Technologies', 'Senapati Road', 'A-Wing, 3rd Floor, Pride Silicon Plaza, Gokhale Nagar, Near Chattushringi Mandir, Chattushringi, Gok', 'www.blazeclan.com', '', '020-67611100', '', '', ''),
(468, 'Heera Software Private Limited', 'Narhe', 'Sarve no 1/7A/1 Village Narhe , Above union Bank ,Mumbai-Bangalore bypass Highwa, Phase, 2, Wadgaon ', 'www.heerasoftware.com', '', ' 20 66478200/01', '', '', ''),
(469, 'Bornbit Technologies private limited', 'Dange Chowk', 'F3 ,Maha Lakshmi Plaza, Beside PMC Bank,\r\nDange Chowk, Thergone,\r\nPune-411033.', 'www.bbtechnologiesinc.com', '', ' 020 30157567', '', '', ''),
(470, 'Cerillion Technologies (I) Pvt. Ltd.', 'Magarpatta', 'Cyber City, Tower V, Level - 2, Wing - B, Magarpatta City, Hadapsar, Pune, Maharashtra 411013', 'www.cerillion.com', '', '020 6748 8000', '', 'Telecom', 'Product'),
(471, 'Incedo Inc', 'Baner', '7th Floor, Pride Gateway, \r\nS.No. 112, Baner Road, \r\nBaner, Pune â€“ 411045 ', 'www.incedoinc.com', '', '020 67182007', '', '', ''),
(472, 'Whiz IT Services', 'Dhayri', '5th floor, Ujwal House, Oposite Honda Service Center, Near Kailas Jeevan Factory, Pune, Maharashtra ', 'www.whizit.co.in', '', '020 6050 2090', '', '', 'Not Specified'),
(473, 'Gunadhya Software Solutions Pvt Ltd', 'Chinchwad', 'Esha House, Sudarshan Nagar,Chinchwad, Pune-411033.', 'www.gunadhyasoft.com', 'info@gunadhyasoft.com', '91300 81345', '', '', ''),
(474, 'NICE Interactive Solutions India Pvt Ltd', 'Hinjawadi Phase-2', '8th Floor, Block n.o 5, Rhine Building, Embassy Tech Zone, Hinjawadi Phase II, Hinjawadi Rajiv Gandh', 'www.nice.com', '', ' 020 4291 4000', '', '', ''),
(475, 'Think Smart Soft ', 'Hinjawadi Phase-1', '14,138/1,City Center, Rajiv Gandhi Infotech Park, Hinjewadi Phase I, Pune, MH 411057, India', 'www.thinksmartsoft.com', '', '020 65220908', '', '', ''),
(476, 'The Digital Group InfoTech Pvt. Ltd.', 'Hinjawadi Phase-1', 'Pyramid Building, Plot No.5\r\nRajeev Gandhi InfoTech Park, Phase I\r\nHinjewadi, Pune 411 057, India', 'www.thedigitalgroup.com', '', ' 20 66532051', '', '', ''),
(477, 'Dassault SystÃ¨mes', 'Hinjawadi Phase-1', 'Plot No. 15B, Pune Infotech Park, \r\nM.I.D.C, Phase-I, Hinjewadi, \r\nTaluka Mulshi, Pune 411 057', 'www.3dplmsoftware.com', '', '20 6793 6600 ', '', '', ''),
(478, 'SilverGlobe Software Solutions', 'Wakad', 'Office 425, The Address Commercia,\r\nPune-Bangalore highway,\r\nBeside Hinjewadi Flyover,\r\nWakad, Pune ', 'www.silverglobesoft.com', '', '8421128918', '', '', ''),
(479, 'MSys Tech India Pvt. Ltd', 'Hinjawadi Phase-1', 'Midas Tower, 2nd Floor,\r\nRajiv Gandhi Infotech Parkâ€“Phase1, Hinjawadi,\r\nPune, Maharashtra 411057 I', 'www.msystechnologies.com', '', '20-66545700', '', '', ''),
(480, 'Sorted Pixel', 'Wakad', '407, White Square, Wakad-Hinjewadi Road\r\nHinjewadi, Pune 411057 India', 'www.sortedpixel.com', '', '9067990647', '', '', ''),
(481, 'Innoplexus ', 'Hinjawadi Phase-1', '7th Floor, Midas Tower,Beside STPI Building, Rajiv Gandhi Infotech Park, Phase-1, Hinjewadi, Pune', 'www.innoplexus.com', '', '20-66527300', '', '', ''),
(482, 'iT Gurus Software', 'Hinjawadi Phase-1', 'Ground floor, IT-06 building, Flagship Infrastructure Pvt Ltd (BlueRidge SEZ), S.No.154/6, Near Cogn', 'www.itgurussoftware.com', '', '020-65600197', '', '', ''),
(483, 'Digitate', 'Hinjawadi Phase-3', 'Sahyadri Park, Plot No.2 & 3\r\nRajiv Gandhi Infotech Park, Phase-III\r\nHinjewadi, Pune 411057\r\nMaharas', 'www.digitate.com', '', '', '', '', ''),
(484, 'Huda\'s Technologies', 'Hinjawadi Phase-1', 'Office No. 1807/08, B6, Blue Ridge,\r\nHinjewadi Phase-1, Pune(M.S.) India. 411057.', 'www.hudastechnologies.com', '', '', '', '', ''),
(485, 'Amshoft IT Solution', 'Pimple Saudagar', 'Unit No 4, 1st Floor, Ganesham D Commercial, Nashik Phata Road,, Near Govind Garden BRT Stop, Pimple', 'www.amshoft.in', '', '8888895222', '', '', ''),
(486, 'Qualys', 'Shivaji Nagar', '10, 11th floor, Panchshil Tech Park, Near Rahul theatre, Ganesh Khind Road, Shivajinagar, Pune, Maha', 'www.qualys.com', '', '020 6012 5123', '', '', ''),
(487, 'Creospan Solution Pvt. Ltd', 'Kharadi', '306, Tower-1, World Trade Center, Opposite EON IT Park, Kharadi, Pune- 411014, Maharashtra State, In', 'www.creospan.co.in', '', '20-65212736', '', '', ''),
(488, 'Softinfology', 'Kharadi', 'World Trade Center Office No.314,\r\nKharadi ,\r\nPune 411014,Maharashtra,India.', 'www.softinfology.com', '', '7768941555', '', '', ''),
(489, 'Ranosys Technologies Pte Ltd', 'Kharadi', '415/416, Tower 2, World Trade Center, Kharadi Pune - 411014, Maharashtra, India', 'www.ranosys.com', '', '020 6627 9675', '', '', ''),
(490, 'Netfotech Solutions', 'Kharadi', 'Netfotech Solutions\r\nWorld Trade Center,\r\nTower 2,Level 9,\r\nKharadi,Pune\r\nMaharashtra - 411014 \r\nIND', 'www.netfotech.in', '', '', '', '', ''),
(491, 'Rebelute Digital Solutions', 'Kharadi', 'Office No. 710, Tower 2,\r\nWorld Trade Center, Kharadi,\r\nPune - 411014, Maharashtra, India', 'www.rebelute.com', '', '020-65618181', '', '', ''),
(492, 'CUBICTREE TECHNOLOGY SOLOUTIONS PVT. LTD', 'Kharadi', '312 Tower 1, \r\nWorld Trade Center, \r\nKharadi, Pune - 411014. \r\nMaharshtra, India', 'www.cubictree.com', '', '', '', '', ''),
(493, 'Rhizomatic Web Services ', 'Kharadi', 'TEC, Level 9, Tower 2, World Trade Center, Kharadi, Pune 411014, India', 'www.rhizomaticweb.com', '', '98 60 75 3857', '', '', ''),
(494, ' IT Universe Techsol Pvt.Ltd', 'Baner', 'Divine Co-Working,\r\nPlot No.26,Cosmos Gardens,Next To\r\n      Learning Curve School,\r\n      Baner Roa', 'www.itutechsol.com', '', '', '', '', ''),
(495, 'iSASH IT Solution Pvt. Ltd.', 'Kharadi', 'Khandagale Complex, 2nd Floor, \r\nAbove Pune Marchent Bank,\r\nNear Kharadi Bypass BRT Bus Stop, \r\nNaga', 'www.isashitsolution.com', '', '020-65218772', '', '', ''),
(496, 'CruncherSoft Technologies Pvt. Ltd.', 'Kharadi', 'Office No-3,\r\n\r\n3rd floor, J.P.Heights,\r\n\r\nOpposite Reliance Mart,\r\n\r\nKharadi-411014, Pune, Maharash', 'www.crunchersoft.com', '', '8975626060', '', '', ''),
(497, 'SpanIdea Systems Pvt Ltd ', 'Kharadi', 'Unit 101, Tower 1 \r\nWorld Trade Center, \r\nKharadi, Pune 411014', 'www.spanidea.com', '', '96206 31177', '', '', ''),
(498, 'Edzeal Technologies LLP', 'Kharadi', '#3, First Floor,3/2 IT Knowledge Park MIDC,Kharadi Pune(MH.)-411014', 'www.edzeal.com', '', '020 2701 2333', '', '', ''),
(499, 'Cuelogic Technologies', 'Bund Garden Road', 'Unit 503, Godrej Castlemaine,\r\nBund Garden Road, Pune - 411001', 'www.cuelogic.com', '', '020 67242323', '', '', ''),
(500, 'Intellect Design Arena Limited', 'Kalyani Nagar', ' 6th Floor, West wing,Marisoft - III, Marigold Premises, Marigold complex, Kalyani Nagar, Pune, Maha', 'www.intellectdesign.com', '', ' 020 6748 3300', '', '', ''),
(501, 'Digital Fives Pvt Ltd', 'Kalyani Nagar', '4th Floor, Marisoft III, West Wing, \r\nMarigold IT Park, Kalyani Nagar, \r\nPune - 411014, Maharashtra,', 'www.digitalfives.com', '', '973 021 4766 ', '', '', ''),
(502, 'Stride Technologies', 'Kalyani Nagar', 'Marisoft 3, 4th Floor, \r\nKalyani Nagar, Pune: 411014 ', 'www.istride.com', '', '20 49022045', '', '', ''),
(503, 'Zelite Solutions Pvt. Ltd', 'Vishrantwadi', 'A â€“ 54, Aashirwad Bldg,\r\nKastruba Soc. Rd,\r\nBehind Saraswat Bank,\r\nVishrantwadi, Pune â€“ 411015, ', 'www.zelitesolutions.com', '', '83808 41000', '', '', ''),
(504, 'Indusa', 'Kalyani Nagar', '  Marigold Complex, Marisoft â€“ 3, 6th Floor, West Wing, Kalyani Nagar,Pune â€“ 411 014', 'www.indusa.com', '', '020 4850 1100', '', '', ''),
(505, 'Zensoft Services Pvt. Ltd', 'Pune Station', '6th Floor, Sai Radhe Complex Sangamvadi, Pune, India, Maharashtra 411001', 'www.zensoftservices.com', '', ' 0206 647 9400', '', '', ''),
(506, 'ProMobi Technologies Pvt Ltd.', 'Viman Nagar', '101-B, Gamma-1 Building, GigaSpace IT Park, Off Pune-Ahmednagar Road, Viman Nagar, Pune-411014', 'www.promobitech.com', '', '89-83-235684', '', '', ''),
(507, 'AppDirect India', 'Magarpatta', ' level 6 ,Tower 12, Magarpatta Inner Circle, Cybercity, Magarpatta City,, Hadapsar, Pune, Maharashtr', 'www.appdirect.com', '', '020 6533 0008', '', '', ''),
(508, 'MetaMorphoSys Technologies Pvt. Ltd', 'Baner', 'Himgiri Bungalow,\r\nLa Ratan Lane, Next to HDFC Home Loan Bank, Opp KFC,\r\nBaner, Pune 411045\r\nMaharas', 'www.metamorphtech.com', '', '', '', '', ''),
(509, ' Sigma Software Solutions', 'Senapati Bapat Road', ' 6th Floor, B Wings, Sigma House, Senapati Bapat Rd, Shivaji Co operative Housing Society, Bhageerat', 'www.sigma-software.ca', '', '020 2566 1992', '', '', ''),
(510, 'Twinkle IT Solutions Pvt Ltd', 'Katraj', '203, Royal Orchid, Near Indian Oil Petrol Pump, Podar International School,  Katraj Bypass, Mumbai-B', 'www.twinkleitsolutions.com ', '', '02064-000-399', '', '', ''),
(511, 'Tweak Technology India Pvt Ltd', 'Narhe', '101,Avnish Regency, off Mumbai Pune Bypass Road Near Navle IT Park, Narhe Pune, Pincode â€“ 411041,M', 'www.tweaktechnology.com', '', '954 527 7273', '', '', ''),
(512, 'Onward Technologies', 'Kharadi', 'Almonte IT Park, 5th Floor,\r\nNext to Radisson Blu Hotel,\r\nKharadi, Pune â€“ 411014', 'www.onwardgroup.com', '', '020 67249500', '', '', '');
INSERT INTO `tbl_pune_it_companies` (`cmpny_id`, `cmpny_name`, `cmpny_area_location`, `cmpny_address`, `cmpny_website`, `cmpny_emailid`, `cmpny_contactno`, `cmpny_technologies`, `cmpny_domain_areas`, `cmpny_type`) VALUES
(513, 'Bioanalytical Technologies (India) Private Limited', 'LBS Road', 'B.A.T House, Plot No 985, 720/10, Off Lal Bahadur Shastri Road, Pune, Maharashtra 411030', 'https://bioanalytical.net/', '', '020 2453 0811', '', '', ''),
(514, 'Attra Infotech', 'Mundhwa', '201/202 Zero1ne\r\nVillage Mundhwa\r\nKoregaon Park Extension\r\nPune â€“ 411036', 'www.attra.com', 'info@attra.com', '020 49108500', '', '', 'Product'),
(515, 'MJB technology solutions', 'Hinjewadi Phase 1', 'Office no 3, ground floor,IT 8 Qubix Blueridge IT park', 'www.mjbtech.com', 'info@mjbtech.com', '', '', '', ''),
(516, 'eBaoTech', 'Aundh', 'NSG IT Park,4th floor,Sanewadi,Aundh,pune', 'https://www.ebaotech.com', '', '02067343100', '', 'Insurance', 'Product'),
(517, 'Nisum', 'Vimannagar', 'E Space Building, 6th Floor, Viman nagar,\r\nPune - 411014\r\n\r\n', 'www.nisum.com', 'contacto@nisum.com', '020 6707 3838', '', '', ''),
(518, 'M3BI', 'Baner', 'Teerth Technospace\r\nUnit# C-307, S. No. 103,\r\nOff Mumbai Bangalore Highway, Baner\r\nPune â€“ 411 045,', 'www.m3bi.com', '', '020-6709 8200/2', '', '', ''),
(519, 'Continuum Managed Solutions Private Limited', 'Hinjewadi', 'Rhine, Block 1.5, 5th Floor, Embassy Tech Zone\r\nRajiv Gandhi Infotech Park, Hinjewadi', 'www.continuum.net', '', '', '', '', ''),
(520, 'EXFO Electro Optical Engineering India Private Limited', 'Magarpatta', 'Office No 604\r\nTower S-4, Cybercity\r\nMagarpatta, Hadapsar\r\nPune 411 013\r\nIndia', 'www.exfo.com', '', '020-6604-0246', '', '', ''),
(521, 'Perscitus Solutions Pvt. Ltd', 'Bavdhan', '3rd Floor, Ambashish,\r\nPlot 3-4 Pakhar Baug,\r\nNDA Pashan Road, Bavdhan,\r\nPune, Maharashtra (I) 41102', 'www.perscitussln.com', 'contactus@perscitussln.com', '76203 77001', 'Java', 'Auto mobile', 'Service and Product'),
(522, 'Innovecture ', 'Aundh', '55/2, Ganeshkhindh road, Jagadishnagar, Sadhu Vasvani Nagar, Aundh Pune, Maharashtra Pin: 411007', 'www.innovect.com', '', '02067687016', '', '', ''),
(523, 'Aayansh Germinate Pvt. Ltd', 'Pimple Saudagar', '1st floor, s.no- 28/1/19, Near Savitribai Phule Udyan, Jagtap Dairy,\r\n    Pimple Saudagar, Pune-27, ', 'https://www.aayanshgerminate.com/', '', '9158660873', '', '', ''),
(524, 'Magic Software Enterprises', 'Wakdewadi', '9-12, Tara Icon, Mumbai Pune Road, Pune 411003, India', 'www.magicsoftware.com', '', '020 4102 20 22', '', '', 'Service and Product'),
(525, 'Sincro LLC', 'Vimannagar', 'Lunkad Sky One Corporate Park,\r\n3rd Floor, New Airport Road, \r\nViman Nagar, Pune 411014', 'www.sincrodigital.com', '', '', '', '', 'Product');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo_career`
--

CREATE TABLE `tbl_todo_career` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 for not completed, 1 for completed, 2 for hidden',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_todo_career`
--

INSERT INTO `tbl_todo_career` (`id`, `description`, `status`, `date_time`) VALUES
(24, 'AWS Study and Documentation', 0, '2017-02-15 00:00:00'),
(85, 'Docker Container Management Service', 0, '0000-00-00 00:00:00'),
(98, 'Spring cloud - API Gateway and Feign Clients', 0, '0000-00-00 00:00:00'),
(101, ' Spring Integration study and documentation', 0, '0000-00-00 00:00:00'),
(103, 'Spring boot activiti integration project', 0, '0000-00-00 00:00:00'),
(104, 'Spring boot hibernate envers Auditing', 0, '0000-00-00 00:00:00'),
(106, 'Spring boot Auditing', 0, '0000-00-00 00:00:00'),
(107, 'Spring Boot Criteria Query, Criteria Builder', 0, '0000-00-00 00:00:00'),
(108, 'Narayana Transaction Manager', 0, '0000-00-00 00:00:00'),
(109, 'Soring boot FlywayDB', 0, '0000-00-00 00:00:00'),
(110, 'Heroku Documentation for Spring Boot and Angular applications developed', 0, '0000-00-00 00:00:00'),
(111, 'Angular PrimeNG Integration Documentation', 0, '0000-00-00 00:00:00'),
(112, 'Angular Material Study and Documentation', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo_personal`
--

CREATE TABLE `tbl_todo_personal` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 for not completed, 1 for completed, 2 for hidden',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_todo_personal`
--

INSERT INTO `tbl_todo_personal` (`id`, `description`, `status`, `date_time`) VALUES
(78, 'Amey Life Insurance Policy', 0, '0000-00-00 00:00:00'),
(101, 'Bathroom Water tank cleaning', 0, '0000-00-00 00:00:00'),
(105, 'Janhavi Passport Creation', 0, '0000-00-00 00:00:00'),
(113, 'Janhavi life insurance policy', 0, '0000-00-00 00:00:00'),
(124, 'Janhavi Aadhar card mobile no update request ', 0, '0000-00-00 00:00:00'),
(136, 'i10 Insurance and FastTag Installation', 0, '0000-00-00 00:00:00'),
(141, 'Pest Control for cockroch filter cleaning and plumber works', 0, '0000-00-00 00:00:00'),
(145, 'Update aadhar card for Amey', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo_virtusa`
--

CREATE TABLE `tbl_todo_virtusa` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 for not completed, 1 for completed, 2 for hidden',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_todo_virtusa`
--

INSERT INTO `tbl_todo_virtusa` (`id`, `description`, `status`, `date_time`) VALUES
(29, 'My Learning Skill - Spring Boot', 0, '0000-00-00 00:00:00'),
(31, 'A2D - Agile Assessment completion', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(20) NOT NULL,
  `order_id` int(50) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `response_code` int(10) NOT NULL,
  `response_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `amount`, `response_code`, `response_desc`) VALUES
(1, 15478952, 100.00, 0, 'PAID'),
(2, 15478955, 10.00, 0, 'PAID'),
(3, 15478958, 50.00, 1, 'FAILED'),
(4, 15478959, 60.00, 0, 'PAID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_anniversary_messages`
--
ALTER TABLE `tbl_anniversary_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_birthday_messages_kasturi`
--
ALTER TABLE `tbl_birthday_messages_kasturi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_birthday_messages_vivahyog`
--
ALTER TABLE `tbl_birthday_messages_vivahyog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_friends`
--
ALTER TABLE `tbl_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_myimgdocs`
--
ALTER TABLE `tbl_myimgdocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myletters`
--
ALTER TABLE `tbl_myletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mypayslips`
--
ALTER TABLE `tbl_mypayslips`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `tbl_mypdfdocs`
--
ALTER TABLE `tbl_mypdfdocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_otherspdfdocs`
--
ALTER TABLE `tbl_otherspdfdocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pune_it_companies`
--
ALTER TABLE `tbl_pune_it_companies`
  ADD PRIMARY KEY (`cmpny_id`);

--
-- Indexes for table `tbl_todo_career`
--
ALTER TABLE `tbl_todo_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_todo_personal`
--
ALTER TABLE `tbl_todo_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_todo_virtusa`
--
ALTER TABLE `tbl_todo_virtusa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_anniversary_messages`
--
ALTER TABLE `tbl_anniversary_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_birthday_messages_kasturi`
--
ALTER TABLE `tbl_birthday_messages_kasturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_birthday_messages_vivahyog`
--
ALTER TABLE `tbl_birthday_messages_vivahyog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_friends`
--
ALTER TABLE `tbl_friends`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbl_myimgdocs`
--
ALTER TABLE `tbl_myimgdocs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_myletters`
--
ALTER TABLE `tbl_myletters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `tbl_mypdfdocs`
--
ALTER TABLE `tbl_mypdfdocs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_otherspdfdocs`
--
ALTER TABLE `tbl_otherspdfdocs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_pune_it_companies`
--
ALTER TABLE `tbl_pune_it_companies`
  MODIFY `cmpny_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=526;

--
-- AUTO_INCREMENT for table `tbl_todo_career`
--
ALTER TABLE `tbl_todo_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tbl_todo_personal`
--
ALTER TABLE `tbl_todo_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `tbl_todo_virtusa`
--
ALTER TABLE `tbl_todo_virtusa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
