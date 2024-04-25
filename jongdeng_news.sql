-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2024 at 09:45 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jongdeng_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_about_us`
--

DROP TABLE IF EXISTS `tbl_footer_about_us`;
CREATE TABLE IF NOT EXISTS `tbl_footer_about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_address`
--

DROP TABLE IF EXISTS `tbl_footer_address`;
CREATE TABLE IF NOT EXISTS `tbl_footer_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_site_logo`
--

DROP TABLE IF EXISTS `tbl_footer_site_logo`;
CREATE TABLE IF NOT EXISTS `tbl_footer_site_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer_site_logo`
--

INSERT INTO `tbl_footer_site_logo` (`id`, `thumbnail`) VALUES
(1, '73770-New Project.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_social`
--

DROP TABLE IF EXISTS `tbl_footer_social`;
CREATE TABLE IF NOT EXISTS `tbl_footer_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer_social`
--

INSERT INTO `tbl_footer_social` (`id`, `thumbnail`, `url`) VALUES
(1, '51081-New Project (4).png', 'youtube'),
(4, '79842-New Project (3).png', 'facebook');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `news_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `date`, `description`, `thumbnail`, `banner`, `news_type`, `category`) VALUES
(15, 'Neymar នៅ​តែ​រក្សា​កំណត់​ត្រា​ខ្សែប្រយុទ្ធ​​មាន​តម្លៃ​ខ្លួន​ខ្ពស់​បំផុត​​ ក្នុង​ប្រវត្តិសាស្ត្រ​ដោះដូរ​កីឡាករ​', 'April 25, 2024, 4:35 pm', 'កំណត់​ត្រា​ដ៏​អស្ចារ្យ​របស់​ Neymar នេះ​គឺ​កើត​ឡើង​នៅ​ដើម​រដូវកាល​ឆ្នាំ​២០១៧/១៨ ដែល​នៅ​ពេល​នោះ​ក្លឹប​ Paris Saint Germain បាន​ទិញ​យក​កីឡាករ​នេះ​ពី​ក្លឹប​ Barcelona ក្នុង​តម្លៃ​ខ្លួន​រហូត​ទៅ​ដល់​២២២លាន​អ៊ឺរ៉ូ​ឯណោះ​ ដែល​ជា​កំណត់ត្រា​មួយ​ដែល​មជ្ឈដ្ឋាន​ក្នុង​ពិភព​បាល់ទាត់​មិន​សឹង​ជឿ​ថា​អាច​កើត​ឡើង​នៅ​ពេល​នោះ​។\r\nកីឡាករ​ប្រេស៊ីល​រូប​នេះ​មាន​សមត្ថភាព​អស្ចារ្យ​មិន​ធម្មតា​ ដោយ​មាន​ទម្រង់​លេង​ល្អ​ដោយ​កាល​ពី​លេង​ឲ្យ​ Barca កាល​ពី​ឆ្នាំ​២០១៣-២០១៧ បាន​ចូល​លេង​បាន​ ១៨៦ប្រកួត​ និង​ស៊ុត​ចូល​ ១០៥គ្រាប់​ រី​ឯ​មក​លេង​ឲ្យ​ PSG ពី​ឆ្នាំ​២០១៧-២០២៣ បាន​ចូល​លេង​ ១៧៣ប្រកួត​ និង​ស៊ុត​ចូល​ ១១៨គ្រាប់​។', '37050-New Project (10).png', '39876-New Project (9).png', 'sport', 'international'),
(16, 'ប្រធាន​ក្លឹប Barca ទទូច​ចង់​ឱ្យ​ប្រកួត El Clasico លេង​ឡើង​វិញ', 'April 25, 2024, 4:37 pm', 'ប្រធាន​ក្លឹប Barcelona លោក Juan Laporta ទទូច​ចង់​ឱ្យ​ប្រកួត El Clasico លេង​ឡើង​វិញ ប្រសិន​បើ​គេ​រក​ឃើញ​ថា វីដេអូ​ជំនួយ​អាជ្ញាកណ្ដាល​ ឬ ហៅ​ជា​ភាសា​អង់គ្លេស​ថា VAR បង្ក​កំហុស ដោយ​មិន​អនុញ្ញាត​ឱ្យ​គ្រាប់បាល់​របស់​ខ្សែ​ប្រយុទ្ធ​វ័យ​ ១៦ឆ្នាំ​របស់​ក្លឹប​គឺ កីឡាករ Lamine Yamal យក​ជាការ​បាន។ នេះ​បើ​តាម​វីដេអូ​ ៤នាទី​របស់​លោក​បង្ហោះ​កាល​ពី​ថ្ងៃ​ច័ន្ទ។\r\n\r\nលោក Laporta បាន​តវ៉ា​ថា «គ្រាប់បាល់​ខ្មោច» របស់​ Yamal គួរ​តែ​យក​ជា​ការ​បាន​ ដោយសារ​តែ​គ្រាប់​បាល់​នេះ​បាន​ចូល​ក្នុង​សំណាញ់​ទី​ទៅ​ហើយ។ ខ្សែ​ប្រយុទ្ធ​ Yamal បាន​ស៊ុត​បាល់ ដែល​ហាក់​បី​ដូច​ជា​ចូលសំណាញ់​ទី អំឡុង​ពេល​ដែល​ Real Madrid និង Barcelona ស្មើ​គ្នា​ក្នុង​លទ្ធផល ១-១។\r\nយ៉ាងណាមិញ ខាង VAR បាន​បដិសេធ​មិន​ឱ្យ​យក​គ្រាប់​នេះ​ជា​ការ​នោះ​ទេ។ លីគ​កំពូល​អេស្ប៉ាញ​ La Liga ក៏​មិន​បាន​ប្រើប្រាស់​បច្ចេកវិទ្យា​ខ្សែ​​ចូល​ទី​នោះ​ដែរ។\r\nក្រោយ​មក ខាង Real Madrid បាន​យក​ឈ្នះ​ Barcelona ក្នុង​លទ្ធផល ៣ ទល់​នឹង ២។', '35875-New Project (12).png', '67302-New Project (11).png', 'sport', 'international'),
(10, 'ដៃ​ធ្ងន់​ដូច​ ធឿន​ ធារ៉ា​ អីចឹង​ធ្វើ​បាន​ជោគជ័យ​ទេ​ប្រកួត​ Kick Boxing ​យប់​នេះ', 'April 25, 2024, 3:00 pm', 'កីឡាករ​ជើង​ខ្លាំង​ ធឿន​ ធារ៉ា​ នឹង​ធ្វើ​ការ​ប្រកួត​លក្ខណៈ​ Kick Boxing​ លើក​ដំបូង​នៅ​ថ្ងៃ​នេះ​ជា​មួយ​អ្នក​លេង​ក្បាច់​គុន​ចិន​ ខៃ ហ្សេបពីង ​ ក្នុង​កម្មវិធី​ GANZBERG​ រាជសីហ៍ KUN KHMER ​នៅ​ខណ្ឌ​កំបូល​ រាជធានី​ភ្នំពេញ។\r\n\r\nលោក​ Tommy Kim ​ទីប្រឹក្សា​ស្ថានីយ​ទូរទស្សន៍​ថោន​ (TOWN)​  បាន​ឲ្យ​ដឹង​ថា​ ឥលូវ​នេះ​ទីផ្សារ​ប្រកួត​ Kick Boxing​ លើ​ពិភពលោក​គឺ​មាន​ការ​ផុលផុស​ និង​មាន​ច្រើន​ ដូច្នេះ​កម្ពុជា​ក៏​ត្រូវ​ពង្រឹង​សមត្ថភាព​ត្រៀម​ខ្លួន​ជា​បណ្ដើរៗ​ផង​ដែរ។​​\r\n\r\nលោក​បន្ថែម​ទៀត​ថា​ កីឡាករ​កម្ពុជា​ត្រូវ​ត្រៀម​ខ្លួន​ ពង្រឹង​សមត្ថភាព​ ឲ្យ​បាន​គ្រប់គ្រាន់​ និង​គ្រប់​ពេល​ដើម្បី​បង្ហាញ​ក្បាច់​របស់​ខ្មែរ​ដល់​ពិភពលោក​ឲ្យ​បានដឹង​ បាន​ស្គាល់។ ​សម្រាប់​ការ​ប្រកួត​យប់​នេះ​មាន​កីឡាករ​កម្ពុជា​ខ្លះ​​ទើប​តែ​ប្រកួត​លក្ខណៈ​ Kick Boxing​ នោះ​ទេ​ ដូច្នេះ​ប្រសិន​បើ​ ចាញ់​-ឈ្នះ​ យ៉ាងណា​សូម​អ្នក​គាំទ្រ​យោគយល់​ និង​បន្ត​លើក​ទឹកចិត្ត​បន្ថែម​ទៀត។​', '34929-New Project (5).png', '81288-New Project (6).png', 'sport', 'national'),
(12, 'គ្រូ​ Man Utd អាច​នឹង​កាត់ប្រាក់ខែ ប្រសិន​បើ​ក្លឹប​អត់​បាន​លេង​ UCL រដូវកាល​ក្រោយ', 'April 25, 2024, 3:05 pm', 'លោក Erik Ten Hag អ្នកចាត់ការ​ក្លឹប Manchester United ប្រឈមមុខនឹងការកាត់ប្រាក់ខែ ប្រសិន​បើ​លោក​បរាជ័យ​មិន​អាច​ជួយ​ឱ្យ​ក្លឹប​បិសាចក្រហម​ឡើង​ដល់​ចំណាត់ថ្នាក់​លេខ ៤ ឬ បាន​លេង​នៅ​ក្នុង​ក្របខ័ណ្ឌ​កំពូល​អឺរ៉ុប UEFA Champions League នៅ​រដូវកាល​ក្រោយ។ នេះ​បើ​តាមការចុះផ្សាយ​របស់​សារព័ត៌មាន​កីឡា​ ESPN។\r\n\r\nលោក Ten Hag បាន​ចូល​មក​រួមរស់​ជាមួយ​ក្លឹប Manchester United កាល​ពី​ឆ្នាំ២០២២កន្លងទៅ ជាមួយ​នឹង​កុងត្រា ៣ឆ្នាំ។ កុងត្រា​របស់​លោក​ជា​កុងត្រា​ដោយ​ផ្អែក​លើ​លទ្ធផល។ នា​ពេល​នេះ​ដែរ​ លោក​កំពុង​តែ​មាន​ប្រាក់​ប្រចាំឆ្នាំ​ប្រមាណ ១១,២លាន​ដុល្លារ​អាមេរិក។ ប្រសិន​បើ​លោក​មិន​អាច​ជួយ​ Manchester United កក់​កៅអី​នៅ Champions League នោះ​ទេ លោក​នឹង​ត្រូវ​កាត់​ប្រាក់​ខែ ២៥ភាគរយ ដោយ​កាត់​ពី​ជាង ១១លាន​ដុល្លារ នៅ​សល់​ប្រមាណ ៨លាន​ដុល្លារ​អាមេរិក។\r\n\r\nកាល​ពី​រដូវកាល ២០២២/២៣ បុរស​ជនជាតិ​ហុល្លង់​រូបនេះ​​បាន​ដឹកនាំ​ឱ្យ​បិសាច​ក្រហម​ជាប់​លេខ ៣ នៅ​ក្នុង​ Premier League ទោះ​បី​ជា​ពេល​នោះ​ មាន​រឿងអាស្រូវយាយី​ជាមួយ​នឹង​អតីត​តារា​បាល់ទាត់​របស់​ខ្លួន​គឺ ខ្សែ​ប្រយុទ្ធ​ព័រទុយហ្គាល់ Cristiano Ronaldo។\r\nក្លឹប​ Manchester United នា​ពេល​នេះ​ដែរ​កំពុង​តែ​ឈរ​លេខ ៧ នៅតារាង​លីគ​កំពូល​អង់គ្លេស ដោយ​លេង​បាន ៣២ប្រកួត និង​មាន ៥០ពិន្ទុ​ក្នុង​ដៃ។ ក្លឹប​ដែល​មាន​ចំណាត់ថ្នាក់លេខ ៤គឺ Aston Villa ដែល​លេង​បាន ៣៤ប្រកួត និង​មាន​ ៦៦ពិន្ទុ។ ដូច្នេះ​ហើយ បើ​វិភាគ​ទៅ ខាង​បិសាចក្រហម​រាង​ពិបាក​ខ្លាំង​ក្នុងការ​យក​លេខ ៤៕', '87146-New Project (8).png', '83511-New Project (7).png', 'sport', 'international');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_logo`
--

DROP TABLE IF EXISTS `tbl_site_logo`;
CREATE TABLE IF NOT EXISTS `tbl_site_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_site_logo`
--

INSERT INTO `tbl_site_logo` (`id`, `thumbnail`) VALUES
(1, '70902-New Project (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

DROP TABLE IF EXISTS `tbl_slide`;
CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `thumbnail`) VALUES
(6, '94032-New Project (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `title`, `thumbnail`, `url`) VALUES
(1, 'PSG សុខ​ចិត្ត​ខាត​​១២២​លាន​ផោន​ត្រៀម​លក់ Neymar ចេញ​ក្នុង​រដូវ​ក្ដៅ​​នេះ​', '94350-New Project (5).png', 'https://youtu.be/vhtlAjSUuHA?si=Zf3s9lyhgatdrdko'),
(2, '​ហៅ​អាជ្ញាកណ្ដាល​យប់មិញ ​ថា​នៅ​ស្ទើរ​មិន​សម​កាត់​ក្ដី​ប្រកួត​សំខាន់​', '87146-New Project (8).png', 'https://www.youtube.com/watch?v=xTQ1Mm8SmXo'),
(4, 'Neymar នៅ​តែ​រក្សា​កំណត់​ត្រា​ខ្សែប្រយុទ្ធ​​មាន​តម្លៃ​ខ្លួន​ខ្ពស់​បំផុត​​ ក្នុង​ប្រវត្តិសាស្ត្រ​ដោះដូរ​កីឡាករ​', '70787-New Project (10).png', 'https://youtu.be/3czg9ZXbNaA?si=TayBF8Je3Wp6SCWS'),
(5, 'Neymar នៅ​តែ​រក្សា​កំណត់​ត្រា​ខ្សែប្រយុទ្ធ​​មាន​តម្លៃ​ខ្លួន​ខ្ពស់​បំផុត​​ ក្នុង​ប្រវត្តិសាស្ត្រ​ដោះដូរ​កីឡាករ​', '70787-New Project (10).png', 'https://youtu.be/3czg9ZXbNaA?si=TayBF8Je3Wp6SCWS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
