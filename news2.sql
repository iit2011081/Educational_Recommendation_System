-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 04:36 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news2`
--
CREATE DATABASE IF NOT EXISTS `news2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `news2`;

-- --------------------------------------------------------

--
-- Table structure for table `news_story`
--

CREATE TABLE IF NOT EXISTS `news_story` (
  `title` varchar(60) NOT NULL,
  `link` varchar(50) NOT NULL,
  `type_news` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `cnt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_story`
--

INSERT INTO `news_story` (`title`, `link`, `type_news`, `date`, `cnt`) VALUES
('NIT_Warangal', 'http://www.nitw.ac.in/nitw/', 'NITs', '2014-03-02', 1),
('NIT_Raipur', 'http://www.nitrr.ac.in/', 'NITs', '2014-03-04', 0),
('NIT_Patna', 'http://www.nitp.ac.in/', 'NITs', '2014-03-05', 4),
('MNIT_Bhopal', 'http://www.manit.ac.in/manitbhopal/', 'NITs', '2014-03-03', 1),
('NIT_Kurukshetra', 'http://www.nitkkr.nic.in/', 'NITs', '2014-03-06', 0),
('MNIT_allahabad', 'http://www.mnnit.ac.in/', 'NITs', '2014-02-27', 0),
('NIT_Trichy', 'http://www.nitt.edu/home/', 'NITs', '2014-03-08', 5),
('IIT_Bombay', 'http://www.iitb.ac.in/', 'IITs', '2014-05-05', 2),
('IIT_Delhi', 'www.iitd.ac.in', 'IITs', '2014-05-04', 2),
('IIT_Guwahati', 'http://www.iitg.ac.in/', 'IITs', '2014-05-07', 1),
('IIT_Hyderabad', 'http://www.iith.ac.in/', 'IITs', '2014-04-08', 1),
('IIT_Indore', 'http://www.iiti.ac.in/', 'IITs', '2014-04-07', 0),
('IIT_Jodhpur', 'www.iitj.ac.in', 'IITs', '2014-04-16', 1),
('Engineering_College_Ajmer', 'http://www.ecajmer.ac.in/', 'State Govt. Colleges', '2014-03-03', 2),
('IIT_BHU_Varanasi', 'www.iitbhu.ac.in', 'IITs', '2014-03-05', 0),
('IIT_Roorkee', 'www.iitr.ac.in', 'IITs', '2014-03-03', 0),
('IIT_Patna', 'www.iitp.ac.in', 'IITs', '2014-04-22', 0),
('IIT_Mandi', 'www.iitmandi.ac.in', 'IITs', '2014-04-10', 0),
('IIT_Madras', 'www.iitm.ac.in', 'IITs', '2014-04-20', 1),
('IIT_Kharagpur', 'www.iitkgp.ac.in', 'IITs', '2014-04-26', 0),
('IIT_Kanpur', 'www.iitk.ac.in', 'IITs', '2014-01-06', 0),
('NIT_Delhi', 'nitdelhi.ac.in', 'NITs', '2014-01-13', 0),
('NIT_Durgapur', 'http://www.nitdgp.ac.in/', 'NITs', '2014-02-13', 0),
('NIT_Goa', 'http://www.new.nitgoa.ac.in/web/', 'NITs', '2014-05-25', 0),
('NIT_Mizoram', 'http://www.nitmz.ac.in/', 'NITs', '2014-05-30', 1),
('NIT_Nagaland', 'http://nitnagaland.ac.in/home/', 'NITs', '2014-04-29', 0),
('NIT_Jamshedpur', 'http://www.nitj.ac.in/', 'NITs', '2014-03-15', 3),
('NIT_Sikkim', 'http://www.nitsikkim.ac.in/', 'NITs', '2014-03-27', 0),
('NIT_Karnataka', 'http://www.nitk.ac.in/', 'NITs', '2014-03-23', 0),
('IIIT_Allahabad', 'http://www.iiita.ac.in/', 'IIITs', '2014-04-05', 1),
('IIIT_Gwalior', 'http://www.iiitm.ac.in/', 'IIITs', '2014-03-09', 1),
('IIIT_Hyderabad', 'http://www.iiit.ac.in/', 'IIITs', '2014-03-22', 0),
('IIIT_Jabalpur', 'http://www.iiitdmj.ac.in/', 'IIITs', '2014-03-21', 1),
('IIIT_Kancheepuram', 'http://www.iiitdm.ac.in/', 'IIITs', '2014-02-27', 2),
('Engineering_College_Bikaner', 'http://www.ecb.ac.in/', 'State Govt. Colleges', '2014-05-30', 2),
('MBM_Engineering_College', 'http://www.jnvu.edu.in/', 'State Govt. Colleges', '2014-05-10', 1),
('Jaipur_National_University', 'http://jnujaipur.ac.in/', 'State Govt. Colleges', '2014-04-16', 2),
('Jaipur_Engineering_College', 'http://www.jeckukas.org.in/', 'State Govt. Colleges', '2014-05-30', 3),
('IIM_Calcutta', 'http://www.iimcal.ac.in/', 'IIMS', '2014-05-01', 2),
('IIM_Ahmedabad', 'http://www.iimahd.ernet.in/', 'IIMS', '2014-03-13', 2),
('IIM_Benglore', 'http://www.iimb.ernet.in/', 'IIMS', '2014-05-05', 4),
('IIM_Lucknow', 'http://www.iiml.ac.in/', 'IIMS', '2014-05-09', 2),
('IIM_Indore', 'http://www.iimidr.ac.in/iimi', 'IIMS', '2014-03-19', 2),
('IIM_Shilong', 'http://www.iimshillong.in/', 'IIMS', '2014-03-21', 2),
('IIM_ROhtak', 'http://www.iimrohtak.ac.in/', 'IIMS', '2014-04-28', 0),
('IIM_Ranchi', 'http://www.iimranchi.ac.in/', 'IIMS', '2014-05-05', 2),
('IIM_Raipur', 'http://www.iimraipur.ac.in/', 'IIMS', '2014-05-10', 2),
('IIM_Udaypur', 'http://www.iimu.ac.in/', 'IIMS', '2014-05-02', 4),
('AIIMS_New_Delhi', 'http://www.aiims.edu/', 'Medical colleges', '2014-05-08', 4),
('AIIMS_Bhopal', 'http://www.aiimsbhopal.edu.in/', 'Medical colleges', '2014-04-21', 2),
('AIIMS_Bhubaneswar', 'http://www.aiimsbhubaneswar.edu.in/', 'Medical colleges', '2014-04-19', 4),
('AIIMS_Jodhpur', 'http://aiimsjodhpur.edu.in/', 'Medical colleges', '2014-04-06', 3),
('AIIMS_Patna', 'http://aiimspatna.org/', 'Medical colleges', '2014-04-01', 1),
('AIIMS_Raipur', 'http://www.aiimsraipur.edu.in/', 'Medical colleges', '2014-03-18', 3),
('AIIMS_Rishikesh', 'http://aiimsrishikesh.edu.in/', 'Medical colleges', '2014-05-08', 0),
('Stanley_Medical_College', 'http://www.tnhealth.org/mesmc.htm', 'Medical colleges', '2014-04-17', 2),
('Government_Kilpauk_Medical_chennai', 'http://www.gkmc.in/ ', 'Medical colleges', '2014-05-03', 4),
('University_of_Cambridge', 'http://www.cam.ac.uk/', 'Foreign Colleges', '2014-03-31', 0),
('Harvard_University', 'http://www.harvard.edu/', 'Foreign Colleges', '2014-05-18', 3),
('University_of_Aberdeen', 'http://www.abdn.ac.uk/', 'Foreign Colleges', '2014-05-27', 2),
('National_Chiao_Tung_University', ' http://www.nctu.edu.tw/', 'Foreign Colleges', '2014-04-25', 3),
('Barbados_Community_College', 'http://www.bcc.edu.bb/', 'Foreign Colleges', '2014-03-19', 3),
('MIT', 'http://web.mit.edu/', 'Foreign Colleges', '2014-04-24', 5),
('Jauhar University', 'http://www.jauharuniversity.edu.in/', 'Private Colleges', '2014-04-03', 1),
('United College', 'www.united.ac.in', 'Private Colleges', '2014-04-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prediction`
--

CREATE TABLE IF NOT EXISTS `prediction` (
  `username` varchar(20) NOT NULL,
  `MNIT_allahabad` float NOT NULL,
  `MNIT_Bhopal` float NOT NULL,
  `NIT_Kurukshetra` float NOT NULL,
  `NIT_Raipur` float NOT NULL,
  `NIT_Warangal` float NOT NULL,
  `NIT_Patna` float NOT NULL,
  `NIT_Trichy` float NOT NULL,
  `IIT_Bhubaneswar` float NOT NULL,
  `IIT_Bombay` float NOT NULL,
  `IIT_Delhi` float NOT NULL,
  `IIT_Guwahati` float NOT NULL,
  `IIT_Hyderabad` float NOT NULL,
  `IIT_Indore` float NOT NULL,
  `IIT_Jodhpur` float NOT NULL,
  `Engineering_College_Ajmer` float NOT NULL,
  `IIT_BHU_Varanasi` float NOT NULL,
  `IIT_Roorkee` float NOT NULL,
  `IIT_Patna` float NOT NULL,
  `IIT_Mandi` float NOT NULL,
  `IIT_Madras` float NOT NULL,
  `IIT_Kharagpur` float NOT NULL,
  `IIT_Kanpur` float NOT NULL,
  `NIT_Delhi` float NOT NULL,
  `NIT_Durgapur` float NOT NULL,
  `NIT_Goa` float NOT NULL,
  `NIT_Mizoram` float NOT NULL,
  `NIT_Nagaland` float NOT NULL,
  `NIT_Jamshedpur` float NOT NULL,
  `NIT_Sikkim` float NOT NULL,
  `NIT_Karnataka` float NOT NULL,
  `IIIT_Allahabad` float NOT NULL,
  `IIIT_Gwalior` float NOT NULL,
  `IIIT_Hyderabad` float NOT NULL,
  `IIIT_Jabalpur` float NOT NULL,
  `IIIT_Kancheepuram` float NOT NULL,
  `Engineering_College_Bikaner` float NOT NULL,
  `MBM_Engineering_College` float NOT NULL,
  `Jaipur_National_University` float NOT NULL,
  `Jaipur_Engineering_College` float NOT NULL,
  `IIM_Calcutta` float NOT NULL,
  `IIM_Ahmedabad` float NOT NULL,
  `IIM_Benglore` float NOT NULL,
  `IIM_Lucknow` float NOT NULL,
  `IIM_Indore` float NOT NULL,
  `IIM_Shilong` float NOT NULL,
  `IIM_ROhtak` float NOT NULL,
  `IIM_Ranchi` float NOT NULL,
  `IIM_Raipur` float NOT NULL,
  `IIM_Udaypur` float NOT NULL,
  `AIIMS_New_Delhi` float NOT NULL,
  `AIIMS_Bhopal` float NOT NULL,
  `AIIMS_Bhubaneswar` float NOT NULL,
  `AIIMS_Jodhpur` float NOT NULL,
  `AIIMS_Patna` float NOT NULL,
  `AIIMS_Raipur` float NOT NULL,
  `AIIMS_Rishikesh` float NOT NULL,
  `Stanley_Medical_College` float NOT NULL,
  `Government_Kilpauk_Medical_chennai` float NOT NULL,
  `University_of_Cambridge` float NOT NULL,
  `Harvard_University` float NOT NULL,
  `University_of_Aberdeen` float NOT NULL,
  `National_Chiao_Tung_University` float NOT NULL,
  `Barbados_Community_College` float NOT NULL,
  `MIT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prediction`
--

INSERT INTO `prediction` (`username`, `MNIT_allahabad`, `MNIT_Bhopal`, `NIT_Kurukshetra`, `NIT_Raipur`, `NIT_Warangal`, `NIT_Patna`, `NIT_Trichy`, `IIT_Bhubaneswar`, `IIT_Bombay`, `IIT_Delhi`, `IIT_Guwahati`, `IIT_Hyderabad`, `IIT_Indore`, `IIT_Jodhpur`, `Engineering_College_Ajmer`, `IIT_BHU_Varanasi`, `IIT_Roorkee`, `IIT_Patna`, `IIT_Mandi`, `IIT_Madras`, `IIT_Kharagpur`, `IIT_Kanpur`, `NIT_Delhi`, `NIT_Durgapur`, `NIT_Goa`, `NIT_Mizoram`, `NIT_Nagaland`, `NIT_Jamshedpur`, `NIT_Sikkim`, `NIT_Karnataka`, `IIIT_Allahabad`, `IIIT_Gwalior`, `IIIT_Hyderabad`, `IIIT_Jabalpur`, `IIIT_Kancheepuram`, `Engineering_College_Bikaner`, `MBM_Engineering_College`, `Jaipur_National_University`, `Jaipur_Engineering_College`, `IIM_Calcutta`, `IIM_Ahmedabad`, `IIM_Benglore`, `IIM_Lucknow`, `IIM_Indore`, `IIM_Shilong`, `IIM_ROhtak`, `IIM_Ranchi`, `IIM_Raipur`, `IIM_Udaypur`, `AIIMS_New_Delhi`, `AIIMS_Bhopal`, `AIIMS_Bhubaneswar`, `AIIMS_Jodhpur`, `AIIMS_Patna`, `AIIMS_Raipur`, `AIIMS_Rishikesh`, `Stanley_Medical_College`, `Government_Kilpauk_Medical_chennai`, `University_of_Cambridge`, `Harvard_University`, `University_of_Aberdeen`, `National_Chiao_Tung_University`, `Barbados_Community_College`, `MIT`) VALUES
('kevin', 4.5, 8.89561, 3, 6.18176, 9, 6, 2, 7, 5.5, 8, 3, 8, 4, 3, 3.37193, 9.79546, 7, 7, 3.97019, 6, 5.0073, 5, 7.77161, 6.5, 3, 6.5, 8, 8, 4.09969, 5, 7, 9, 4, 6.98315, 0, 8, 5.5, 8, 2.5, 5.68687, 8, 5.79882, 9, 9, 5, 3.5, 6.43813, 6, 5, 7, 5, 8.5, 9, 7.50039, 7, 8, 8.01122, 4, 8.5, 9.5, 8, 5.8713, 6, 7.5),
('smith', 8.5, 8, 2.93042, 5.9468, 9, 8, 4, 4, 2.69842, 3, 3.90019, 7.5, 3.87428, 6, 6, 5.6, 5, 6.60479, 4, 5.44118, 8, 8, 8, 5.54702, 6, 2.92845, 8.5, 8.8559, 5, 7, 6.8402, 6, 6.5, 4, 3.57582, 7.96187, 3.5, 5.13814, 5, 5.95504, 9, 4, 2.54243, 7.94476, 6, 8, 3.76341, 5.91529, 9.14391, 8.87118, 3, 6, 3.5, 8, 7, 9.27429, 4.02056, 8, 9.42126, 4.19105, 9.58873, 7, 9, 9.61792),
('maria', 4, 8, 7.5, 5, 8.48122, 8.16383, 7.29682, 8.55729, 8.62666, 3, 6, 9.92288, 8.5, 2.5, 7.84399, 6.05455, 5, 7, 6.5, 3.36361, 4, 4.5, 7.79917, 7.95286, 9.91113, 3, 6, 7.78923, 9.40087, 4, 8, 2.54646, 6, 4, 5.13793, 7, 2.10901, 9.13356, 6.28358, 2.52949, 5.56443, 4.98305, 7, 6.57348, 2.88266, 3.66784, 4.4, 2.84655, 6.5, 5, 7, 6.81333, 5.16397, 3.51372, 7, 5, 5.5, 6.00973, 9.03563, 2, 3, 5, 4, 5.5),
('alfred', 7, 5.5, 8, 2.61129, 7.5, 2.72427, 7, 4, 4, 3.5, 3, 2.62178, 7, 5, 5, 8, 6, 6, 2.01273, 3.31458, 7, 3, 3.71914, 4, 4.22336, 3.25546, 5, 2.33208, 2.93777, 5, 3.3709, 7, 6, 6, 8, 2.84074, 3.5, 3.51882, 8, 8, 9, 6, 4, 6, 8, 3.00736, 3, 2.40757, 7, 5.5, 4.5, 7, 8, 5, 4.17433, 6, 8, 7, 3, 6, 7, 5, 2, 4),
('chriss', 5, 8, 7.5, 9, 8.5, 7, 6, 7, 3, 2, 2.19009, 8.62837, 2.37115, 3.4, 3, 3, 3, 3.56011, 2, 6, 4, 7, 8, 4.9177, 9.05796, 9.39073, 7, 8.90473, 2.242, 4.59111, 8, 5, 5, 9, 4, 3, 7, 2.68934, 4, 3.38589, 6.5, 2.06411, 4, 7.62943, 3.14571, 7, 5, 5, 5.99121, 8.7, 7.01783, 5.47084, 2.66749, 3.36277, 2.08292, 4.58412, 4.23265, 3.4627, 8.55625, 3, 2, 5, 6, 6),
('sachin', 7.69838, 6.60136, 7.59884, 7.41305, 3.12131, 5, 2.5695, 9, 9, 8, 4, 5, 4, 4.40317, 4, 6, 3, 6, 9.16939, 6, 7, 8, 2.76161, 2.71742, 6, 6.36408, 3, 2.73869, 2, 4, 6, 3.06575, 7, 3.0896, 7, 4, 4, 5.63958, 3, 2.25285, 4, 3.95517, 8, 3.13006, 7.80676, 2.25066, 3.06401, 3.59897, 4.88828, 7.66922, 9, 3.42283, 4, 4, 5, 3.20246, 4, 2.63247, 4, 5, 9, 4, 3.28098, 8.53164),
('pollard', 9, 5.5, 7.5, 9.8875, 3.5, 4, 8.5, 9.65587, 4.78957, 7.5, 6.5, 2.5, 8.5, 4.5, 5, 8, 6.5, 8, 4.09545, 5, 3, 9, 4.5, 7, 5, 4, 8.45756, 3.5, 8, 7, 6, 8, 5, 6, 8.97166, 8, 9.5, 8.48543, 8, 7.5, 5.36958, 5.5, 3, 2.5, 9, 6.5, 6, 5, 6.86843, 5.5, 4.5, 8.5, 9, 4.5, 2, 5.04191, 8.66513, 3.13513, 9.07094, 4, 6, 7, 8.40284, 9),
('hrithik', 8.54272, 6.2517, 4.50479, 8.19793, 8, 6.78949, 8, 5.39258, 7.11622, 4.1483, 8.84061, 7.22503, 6.3168, 8.10056, 7.61159, 4, 8.99658, 3.53627, 8.58286, 7.60713, 9, 8.50994, 8.21668, 8.34397, 7.57855, 7.57575, 6, 8.41948, 7.13878, 6.99741, 7.4708, 8.84039, 8.12047, 6.14183, 3.48841, 3.36318, 6.94609, 3.2164, 7.92077, 8.76121, 6.35534, 7.21744, 6.8449, 6.57781, 8.21986, 7.03748, 3.25397, 5.23113, 8.60987, 8.53066, 7, 8.61395, 9.4496, 4.1344, 5.78148, 8.01718, 6.91995, 8.69032, 8.50393, 4.74109, 8.33196, 3.22711, 8.55691, 8.53325),
('kipta', 6.90591, 4.05152, 7.99441, 3.55595, 6.94551, 3.02566, 8, 3.02312, 6.79227, 7.79644, 5.70949, 7.29957, 9.54363, 5, 5.07074, 8.36907, 8.396, 8.1546, 4.5898, 5.82237, 4.93953, 6.67902, 8.82975, 6.87471, 6.30404, 9.0725, 6, 8.50817, 6.5691, 5.11405, 9, 8.40564, 4.20079, 5.22706, 6.97819, 7.36717, 6.67109, 3.60647, 5.7201, 6.07173, 6.57639, 5.89926, 3.04287, 6.82886, 7.72347, 7.12583, 5.90068, 5.38634, 6.7288, 5.45153, 5.38954, 5.98066, 6.55557, 5.89573, 4.71076, 3.53392, 7.36328, 7, 6.07214, 5.12445, 3.46702, 7.92013, 5.97245, 4.50305),
('mfaraz', 8.9, 7.81572, 6.7, 3.21964, 9.20277, 4.23914, 6.02937, 6.7, 5.1507, 3.67609, 6, 4.79217, 8.3, 3.47955, 3.33245, 4.26519, 7.8918, 7.8104, 8, 6.22475, 7.44781, 6.95632, 7.98882, 7.3169, 7.30291, 6.36546, 7.3916, 3.09211, 6.35529, 6.33848, 6.87456, 7.50831, 6.28329, 6.16854, 6.62191, 5.92826, 5.60743, 5.11927, 7.30803, 7.45768, 3.07518, 6.09896, 3.27985, 5.75776, 3.00621, 6.71847, 7.873, 7.84694, 3.41361, 3.2652, 7.93975, 5, 8.0058, 9.70549, 5.99046, 6.46632, 9.867, 9.9022, 9.5029, 4.18888, 6.37299, 7.54644, 6.69912, 5.31636);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `email_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`email_id`, `username`, `password`) VALUES
('john@gmail.com', 'john', 'john'),
('virat@gmail.com', 'virat', 'virat'),
('siya@gmail.com', 'siya', 'siya'),
('kevin@gmali.com', 'kevin', 'kevin'),
('danga@gmail.com', 'danga', 'danga'),
('smith@gmail.com', 'smith', 'smith'),
('maria@gmail.com', 'maria', 'maria'),
('alfred@gmail.com', 'alfred', 'alfred'),
('chriss@gmail.com', 'chriss', 'chriss'),
('sachin@gmail.com', 'sachin', 'sachin'),
('pollard@gmail.com', 'pollard', 'pollard'),
('gjrelgjml', 'surya', 'surya'),
('fhewifnk', 'gvc', 'gvc'),
('gvjklnmr', 'ads', 'ads'),
('fvnrklgnfdkewl', 'apk', 'apk'),
('vferwklfmwa', 'adsp', 'adsp'),
('vnerklmfasd', 'qwer', 'qwer'),
('ram@gmail.com', 'ram', 'ram'),
('new', 'new', 'new'),
('rajfkde@gmail.com', 'dravid', 'dravid'),
('shyam@gmail.com', 'shyam', 'shyam'),
('shiva@gmail.com', 'shiva', 'shiva'),
('hrithik@gmail.com', 'hrithik', 'hrithik'),
('krpta@gmail.com', 'kipta', 'kipta'),
('mfarazzzz@gmail.com', 'mfaraz', 'faraz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
