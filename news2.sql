-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 09:24 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news2`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `username` varchar(20) NOT NULL,
  `india` varchar(100) NOT NULL,
  `world` varchar(100) NOT NULL,
  `technical` varchar(100) NOT NULL,
  `business` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `health` varchar(100) NOT NULL,
  `science` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `lifestyle` varchar(100) NOT NULL,
  `entertainment` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`username`, `india`, `world`, `technical`, `business`, `sports`, `health`, `science`, `education`, `lifestyle`, `entertainment`) VALUES
('dkm1910', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0'),
('vipul1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0'),
('rahul', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('niranjan', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0'),
('naved', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
('dk', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0'),
('dkm', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `news_story`
--

CREATE TABLE IF NOT EXISTS `news_story` (
  `uid` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `link` varchar(5000) NOT NULL,
  `date` datetime NOT NULL,
  `type_news` varchar(500) NOT NULL,
  `cnt` int(11) NOT NULL,
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_story`
--

INSERT INTO `news_story` (`uid`, `title`, `link`, `date`, `type_news`, `cnt`) VALUES
(-2144481548, 'Molecular gastronomy on your plate', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df69/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfood0Cfood0Ereviews0CMolecular0Egastronomy0Eon0Eyour0Eplate0Carticleshow0C194265940Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-2136325807, 'Delhi govt considers double shifts in private schools', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/243778fe/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CDelhi0Egovt0Econsiders0Edouble0Eshifts0Ein0Eprivate0Eschools0Carticleshow0C167171750Bcms/story01.htm', '2012-10-07 15:28:05', 'education', 0),
(-2124277840, 'Short on faculty, IITs look towards students', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/273a9292/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CShort0Eon0Efaculty0EIITs0Elook0Etowards0Estudents0Carticleshow0C1790A79330Bcms/story01.htm', '2013-01-05 19:29:09', 'education', 0),
(-2095863903, 'New wave of Swine flu could sicken millions', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b13/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48780A480Bcms/story01.htm', '2009-08-10 07:24:25', 'health', 0),
(-2036962116, 'Drive to curb school dropouts in Jharkhand', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d11e38/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CDrive0Eto0Ecurb0Eschool0Edropouts0Ein0EJharkhand0Carticleshow0C144740A590Bcms/story01.htm', '2012-06-28 12:19:59', 'education', 0),
(-2036939117, 'Will Kolkata Knight Riders be able to beat the upbeat Mumbai Indians?', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b97e74a/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E60Ewill0Ekolkata0Eknight0Eriders0Ebe0Eable0Eto0Ebeat0Emumbai0Eindians0Eindia0Etoday0C10C2696630Bhtml/story01.htm', '2013-05-06 21:25:16', 'sports', 0),
(-2011296202, 'Mumbai Indians storm to 3rd spot after stunning win over CSK', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b882366/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Elive0Escore0Emumbai0Eindians0Evs0Echennai0Esuper0Ekings0Eipl0E60Et20A0C10C2694130Bhtml/story01.htm', '2013-05-05 10:03:31', 'sports', 0),
(-2008758053, 'Bipasha-Basu-dropped-from-Freedom', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/id5a0ntBqio/story01.htm', '2013-05-04 01:55:33', 'entertainment', 0),
(-1967316286, 'The Boost or Bust Election', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b8057cd/l/0Lindiatoday0Bintoday0Bin0Cstory0Ckarnataka0Epolls0E20A130Ebjp0Econgress0C10C2678630Bhtml/story01.htm', '2013-05-04 04:27:27', 'india', 0),
(-1961395820, 'Avoid these foods to avoid constipation', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df75/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Chealth0Efitness0Cdiet0CAvoid0Ethese0Efoods0Eto0Eavoid0Econstipation0Carticleshow0C128345230Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-1934142858, 'Deutsche Bank sees Sensex at 22,500 by Dec', 'http://economictimes.indiatimes.com/markets/analysis/deutsche-bank-sees-sensex-at-22500-by-december-further-rate-cuts/articleshow/19915974.cms', '2013-05-06 08:59:31', 'business', 0),
(-1912930540, 'Remembering Ruth', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2aabd9e1/l/0Lindiatoday0Bintoday0Bin0Cstory0Cremembering0Eruth0Eprawer0Ejhabvala0Eaward0Ewinning0Enovelist0Escreenplay0Ewriter0C10C260A8440Bhtml/story01.htm', '2013-04-13 05:06:21', 'india', 0),
(-1905937010, 'BJP''s new power couple: Rajnath Singh appoints Modi''s men to key party positions, signalling his growing stature and Advani''s eclipse', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2a93cd9e/l/0Lindiatoday0Bintoday0Bin0Cstory0Crajnath0Esingh0Enarendra0Emodi0Eadvani0Ebjp0Eparliamentary0Eboard0C10C260A8340Bhtml/story01.htm', '2013-04-10 21:01:15', 'india', 0),
(-1883723666, 'For pet-friendly homes', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df6f/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Chome0Egarden0CFor0Epet0Efriendly0Ehomes0Carticleshow0C1650A34990Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-1856497160, 'More than just idol talk', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2aabd9e0/l/0Lindiatoday0Bintoday0Bin0Cstory0Cindia0Etoday0Emind0Erocks0Esummit0E20A130Ekolkata0C10C260A8530Bhtml/story01.htm', '2013-04-13 05:06:26', 'india', 0),
(-1840109142, 'Sensex rallies 100 pts; Nifty hits 6000 level', 'http://economictimes.indiatimes.com/markets/stocks/market-news/sensex-rallies-100-points-nifty-hits-6000-level-in-intraday-trade/articleshow/19925770.cms', '2013-05-06 22:30:58', 'business', 0),
(-1793375328, 'iReporters watch planets, moon align', 'http://rss.cnn.com/~r/rss/edition_space/~3/lNpVH39eh3U/index.html', '2008-12-02 17:52:24', 'science', 0),
(-1779729175, 'Shahid-Kapoor-s-injury-not-minor', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/rlKQesNAEXU/story01.htm', '2013-05-04 02:05:56', 'entertainment', 0),
(-1768171936, 'Police to give special IDs to northeast students', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d21253/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CPolice0Eto0Egive0Especial0EIDs0Eto0Enortheast0Estudents0Carticleshow0C144762180Bcms/story01.htm', '2012-06-28 14:07:00', 'education', 0),
(-1755214295, 'A sweeter broccoli to cut heart diseases', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b0c/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C490A11580Bcms/story01.htm', '2009-08-17 00:41:38', 'health', 0),
(-1746146243, 'Mumbai Indians gear up to face unstoppable Chennai Super Kings', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8578c3/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E60Emumbai0Eindians0Eto0Eface0Echennai0Esuper0Ekings0Eindia0Etoday0C10C269360A0Bhtml/story01.htm', '2013-05-04 21:21:18', 'sports', 0),
(-1719945984, 'Injured Pakistani prisoner Sanaullah Ranjay''s relatives get visas to visit India', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/J1rprgBF1L4/story01.htm', '2013-05-06 10:49:43', 'technical', 0),
(-1713322633, 'Honesty may not be best policy at work', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df70/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cwork0CHonesty0Emay0Enot0Ebe0Ebest0Epolicy0Eat0Ework0Carticleshow0C128216490Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-1636922069, 'What is new on Web?', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b8057cf/l/0Lindiatoday0Bintoday0Bin0Cstory0Cwhat0Eis0Enew0Eon0Eweb0C10C267860A0Bhtml/story01.htm', '2013-05-04 04:28:44', 'india', 0),
(-1631601258, 'Jagdish Tytler back in the dock as Delhi court tells CBI to reopen probe into 1984 riots', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2ad08c18/l/0Lindiatoday0Bintoday0Bin0Cstory0Cjagdish0Etytler0E19840Eanti0Esikh0Eriots0Edelhi0Ecourt0Ecbi0C10C2619770Bhtml/story01.htm', '2013-04-17 03:35:47', 'india', 0),
(-1621839282, 'Libya passes ban on Gaddafi-era officials', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8a06ad/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cmiddle0Eeast0CLibya0Epasses0Eban0Eon0EGaddafi0Eera0Eofficials0Carticleshow0C1990A18550Bcms/story01.htm', '2013-05-05 12:18:16', 'world', 0),
(-1620873129, '''Pakistan major buyer of Chinese arms''', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b98d75a/l/0Ltimesofindia0Bindiatimes0N0Cindia0CChina0Eexported0Earms0Eworth0E110Ebillion0Ein0E50Eyears0EPakistan0Emajor0Ebuyer0EPentagon0Carticleshow0C199261160Bcms/story01.htm', '2013-05-06 23:10:24', 'world', 0),
(-1587651858, 'Book Review: Home by Toni Morrison', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df65/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cbooks0CToni0EMorrison0Ebuilds0Ea0EHome0Ewe0Enever0Eknew0Carticleshow0C164630A0A0A0Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-1553821161, 'How to lose weight for your wedding', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df74/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Chealth0Efitness0Cfitness0CHow0Eto0Elose0Eweight0Efor0Eyour0Ewedding0Carticleshow0C166372490Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-1516261714, 'UV radiation blinding rural folk, finds study', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b1a/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48471220Bcms/story01.htm', '2009-08-01 17:55:10', 'health', 0),
(-1515370651, 'Volcano in Philippines kills 4 climbers', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b981728/l/0Ltimesofindia0Bindiatimes0N0Cworld0Crest0Eof0Eworld0CPhilippine0Evolcano0Espews0Erocks0Ekills0Efour0Eclimbers0Carticleshow0C199250A170Bcms/story01.htm', '2013-05-06 20:58:14', 'world', 0),
(-1507258672, 'California bride, friends died trying to escape burning limousine', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/vrlXgONbPEg/story01.htm', '2013-05-06 12:55:24', 'technical', 0),
(-1503399459, 'Will be army chief''s boss: Nawaz Sharif', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b91b3da/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cpakistan0CWill0Ebe0Earmy0Echiefs0Eboss0Esays0ENawaz0ESharif0Carticleshow0C199134720Bcms/story01.htm', '2013-05-06 06:22:19', 'world', 0),
(-1484811140, 'Why dentures? Grow new teeth', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b17/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48581550Bcms/story01.htm', '2009-08-04 14:12:39', 'health', 0),
(-1473325759, 'Allow your child to follow his interests', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df6b/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cparenting0CAllow0Eyour0Echild0Eto0Efollow0Ehis0Einterests0Carticleshow0C172778730Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-1456278180, 'President-felicitates-60th-National-Film-Awards', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/vASIj3QYWNY/story01.htm', '2013-05-04 01:53:30', 'entertainment', 0),
(-1441712650, 'Rani returns with a common touch', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2af1bee9/l/0Lindiatoday0Bintoday0Bin0Cstory0Cvasundhara0Eraje0Eassembly0Epolls0Eroadshow0Ebjp0Econgress0C10C2619930Bhtml/story01.htm', '2013-04-20 02:56:01', 'india', 0),
(-1426334547, 'Good turnout expected for IPL matches as Delhi-Dharamsala flights resume', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8db4a1/l/0Lindiatoday0Bintoday0Bin0Cstory0Cindian0Epremier0Eleague0Edelhi0Edharamsala0Eflights0Eresume0Efrom0Emay0E150Efor0Eipl0Ematches0C10C26950A90Bhtml/story01.htm', '2013-05-05 23:04:41', 'sports', 0),
(-1410371810, 'OTC EC and abortion pills cause menstrual problems', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b19/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48540A580Bcms/story01.htm', '2009-08-03 21:36:45', 'health', 0),
(-1410043948, 'Bollywood-actors-use-real-stuff-on-reel', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/61gpRotd23U/story01.htm', '2013-05-04 01:42:34', 'entertainment', 0),
(-1382206731, 'Rajasthan Royals inflict 7th consecutive loss on Pune in IPL', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b88d908/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Elive0Escore0Erajasthan0Eroyals0Evs0Epune0Ewarriors0Eindia0Et20A0Elive0C10C2694360Bhtml/story01.htm', '2013-05-05 12:28:15', 'sports', 0),
(-1310161824, 'Syrian rebels ''used sarin'': UN', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8fee94/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cmiddle0Eeast0CSyrian0Erebels0Eused0Esarin0EUN0Erights0Einvestigator0Carticleshow0C19910A8830Bcms/story01.htm', '2013-05-06 03:22:59', 'world', 0),
(-1302638758, 'Blast at election rally kills 15 in Pakistan', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b921136/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cpakistan0CBlast0Eat0Eelection0Erally0Ekills0E150Ein0EPakistan0Carticleshow0C199139430Bcms/story01.htm', '2013-05-06 06:54:44', 'world', 0),
(-1264820208, 'Omaxe plans stake sale to meet public shareholding norms', 'http://economictimes.indiatimes.com/markets/real-estate/news/omaxe-plans-stake-sale-to-meet-public-shareholding-norms/articleshow/19916488.cms', '2013-05-06 10:29:45', 'business', 0),
(-1235475588, 'Net Flux', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2af1beec/l/0Lindiatoday0Bintoday0Bin0Cstory0Cworld0Ewide0Eweb0Enet0Eflux0Einternet0Etrends0C10C261980A0Bhtml/story01.htm', '2013-04-20 02:56:33', 'india', 0),
(-1218485965, 'Democratic Republic of Congo named worst place to be mother', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/hYbNwz6xwoo/story01.htm', '2013-05-06 23:27:43', 'technical', 0),
(-1196954719, 'WATCH-melodious-track-from-Yeh-Jawaani-Hai-Deewani', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/4OzrCI9ntGQ/story01.htm', '2013-05-04 07:26:22', 'entertainment', 0),
(-1153711723, 'Prequel to Bofors', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2aa4f106/l/0Lindiatoday0Bintoday0Bin0Cstory0Cwikileaks0Erevelation0Eon0Erajiv0Egandhi0Erole0Eswedish0Efirm0Ebofors0C10C2619680Bhtml/story01.htm', '2013-04-12 22:40:00', 'india', 0),
(-1149013072, 'Saif-Ali-Khan-advises-Tigmanshu-on-cast-for-Bullett-Raja', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/9kPxHq7qwzg/story01.htm', '2013-05-04 01:05:16', 'entertainment', 0),
(-1146186194, 'Stephenâ€™s files complaint on admission fraud', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d21255/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CStephens0Efiles0Ecomplaint0Eon0Eadmission0Efraud0Carticleshow0C144761980Bcms/story01.htm', '2012-06-28 14:05:28', 'education', 0),
(-1142500113, 'How healthy is your marriage?', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b8a63a3/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cman0Ewoman0CHow0Ehealthy0Eis0Eyour0Emarriage0Carticleshow0C133912180Bcms/story01.htm', '2013-05-05 13:00:00', 'lifestyle', 0),
(-1135049072, 'UN chief urges restraint after Israeli air strikes in Syria', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8ce37f/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cmiddle0Eeast0CUN0Echief0Eurges0Erestraint0Eafter0EIsraeli0Eair0Estrikes0Ein0ESyria0Carticleshow0C1990A5310A0Bcms/story01.htm', '2013-05-05 18:04:03', 'world', 0),
(-1128959399, 'IPL 6: Will Delhi turn devils for upbeat Sunrisers Hyderabad?', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b7ecfd5/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E60Eipl0E20A130Edelhi0Edaredevils0Esunrisers0Ehyderabad0C10C269230A0Bhtml/story01.htm', '2013-05-04 05:35:12', 'sports', 0),
(-1113924376, 'Tips to keep your wardrobe in order', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b8a63a7/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfashion0Cstyle0Eguide0CTips0Eto0Ekeep0Eyour0Ewardrobe0Ein0Eorder0Carticleshow0C177198450Bcms/story01.htm', '2013-05-05 13:00:00', 'lifestyle', 0),
(-1069214416, '70m diabetics in India by 2015: Study', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b1b/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C483620A10Bcms/story01.htm', '2009-07-29 19:37:18', 'health', 0),
(-1051561345, 'President-releases-stamps-on-50-film-personalities', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/683SK0St5OQ/story01.htm', '2013-05-04 02:09:40', 'entertainment', 0),
(-1044446281, 'Now just pop a pill to stop blood clots', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b09/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C490A59510Bcms/story01.htm', '2009-08-18 02:54:34', 'health', 0),
(-1043597080, 'Dropout from schools still a big concern in rural West Bengal: Report', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20ca7c89/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CDropout0Efrom0Eschools0Estill0Ea0Ebig0Econcern0Ein0Erural0EWest0EBengal0EReport0Carticleshow0C144579170Bcms/story01.htm', '2012-06-28 00:45:42', 'education', 0),
(-1040662064, 'FIIs from Middle East and elsewhere more bullish on India', 'http://economictimes.indiatimes.com/opinion/comments-analysis/foreign-investors-from-middle-east-and-elsewhere-more-bullish-on-india/articleshow/19922936.cms', '2013-05-07 00:04:52', 'business', 0),
(-1027018251, 'School education body discusses issues on common entrance exams for IITs and engineering colleges', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d113bd/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CSchool0Eeducation0Ebody0Ediscusses0Eissues0Eon0Ecommon0Eentrance0Eexams0Efor0EIITs0Eand0Eengineering0Ecolleges0Carticleshow0C144731730Bcms/story01.htm', '2012-06-28 11:37:30', 'education', 0),
(-941689249, 'India-China border tensions remain: Pentagon', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/bW-x0pNZfj4/story01.htm', '2013-05-06 21:02:36', 'technical', 0),
(-935695511, 'Oil and gold booms are over: Ruchir Sharma', 'http://economictimes.indiatimes.com/opinion/comments-analysis/such-a-good-fall-oil-gold-booms-are-over-good-for-global-economy/articleshow/19921291.cms', '2013-05-06 22:35:32', 'business', 0),
(-902106495, '''Sell in May and go away'' holds true for Sensex', 'http://economictimes.indiatimes.com/markets/analysis/sell-in-may-and-go-away-holds-true-for-sensex/articleshow/19922178.cms', '2013-05-06 21:44:38', 'business', 0),
(-885664009, 'Goa government makes interest-free loan plan more student-friendly', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20ce6dc7/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CGoa0Egovernment0Emakes0Einterest0Efree0Eloan0Eplan0Emore0Estudent0Efriendly0Carticleshow0C144682120Bcms/story01.htm', '2012-06-28 07:17:10', 'education', 0),
(-881632809, 'Indian-cinema-Hollywood-s-eastern-equivalent-Saif-Ali-Khan', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/5_9FO-rX6-Q/story01.htm', '2013-05-03 09:18:18', 'entertainment', 0),
(-876851306, 'Mining Money at play in bellary', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b8057cb/l/0Lindiatoday0Bintoday0Bin0Cstory0Cbellary0Emining0Egali0Ejanardhana0Ereddy0Ebangalore0C10C2678670Bhtml/story01.htm', '2013-05-06 03:03:37', 'india', 0),
(-856184415, 'India should trains its doctors in infectious diseases', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b0f/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48989480Bcms/story01.htm', '2009-08-16 04:29:57', 'health', 0),
(-804690273, 'Easy ways to decorate your bathroom', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df67/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Chome0Egarden0CEasy0Eways0Eto0Edecorate0Eyour0Ebathroom0Carticleshow0C850A92840Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-797666626, 'Council of Boards of School Education discuss operational issues on common entrance exams', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d1190d/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CCouncil0Eof0EBoards0Eof0ESchool0EEducation0Ediscuss0Eoperational0Eissues0Eon0Ecommon0Eentrance0Eexams0Carticleshow0C144731760Bcms/story01.htm', '2012-06-28 11:37:55', 'education', 0),
(-778907661, 'Iron-Man-3-kicks-off-US-Canada-run-with-15-6-mln-ticket-sales', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/SKSfb8-skZY/story01.htm', '2013-05-04 03:21:48', 'entertainment', 0),
(-775322616, 'Money-is-no-matter-for-nawab-Saif-Ali-Khan', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/2zT4hdZwPjY/story01.htm', '2013-05-04 05:49:55', 'entertainment', 0),
(-747794995, 'Dogs to blame for fierce family arguments', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df71/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cpets0CDogs0Eto0Eblame0Efor0Efierce0Efamily0Earguments0Carticleshow0C114464730Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-621850973, 'Kings XI Punjab to face the mighty Royal Challengers Bangalore today', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8ced4a/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E60Ekings0Exi0Epunjab0Eprepare0Eto0Eface0Eroyal0Echallengers0Ebangalore0Eindia0Etoday0C10C26950A0A0Bhtml/story01.htm', '2013-05-05 22:51:20', 'sports', 0),
(-591913228, 'China''s military is accused by US in cyberattacks', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/1qt_QlFoiys/story01.htm', '2013-05-06 22:24:52', 'technical', 0),
(-512262568, 'Gambhir, Yuvraj sidelined for Champions Trophy, Dinesh Karthik makes comeback after 3 years', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b80116d/l/0Lindiatoday0Bintoday0Bin0Cstory0Cgambhir0Eyuvraj0Esidelined0Efor0Echampions0Etrophy0Edinesh0Ekarthink0Emakes0Ecomeback0C10C2692650Bhtml/story01.htm', '2013-05-04 03:07:39', 'sports', 0),
(-511270153, 'Ranchi varsity to get Romanian researcher', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d11e36/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CRanchi0Evarsity0Eto0Eget0ERomanian0Eresearcher0Carticleshow0C144741630Bcms/story01.htm', '2012-06-28 12:26:34', 'education', 0),
(-502145079, 'Selectors deserve pat on back', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8527f9/l/0Lindiatoday0Bintoday0Bin0Cstory0Cselectors0Edeserve0Epat0Eon0Eback0Eindia0Etoday0C10C2693540Bhtml/story01.htm', '2013-05-04 21:03:54', 'sports', 0),
(-424705038, 'Top salt substitute recipes', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df66/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfood0Crecipes0CTop0Esalt0Esubstitute0Erecipes0Carticleshow0C19320A2910Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-410592304, 'Anupama-Chopra-s-review-Bombay-Talkies', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/HDzfgWSA1qo/story01.htm', '2013-05-03 15:00:11', 'entertainment', 0),
(-405218361, 'China''s cyber spying targets US government: Pentagon', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/63_bmbV6Ts0/story01.htm', '2013-05-06 20:15:57', 'technical', 0),
(-398321515, 'Family drama singes Chandy', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2aabd9df/l/0Lindiatoday0Bintoday0Bin0Cstory0Ckb0Eganesh0Ekumar0Eyamini0Ethankachi0Ephysical0Eabuse0Ekerala0Echandy0C10C260A8570Bhtml/story01.htm', '2013-04-13 05:07:02', 'india', 0),
(-394545220, 'Boston bombing suspect''s friend to be released', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/e_cPSBnJk-o/story01.htm', '2013-05-06 22:12:08', 'technical', 0),
(-342777276, 'Volcano in Philippines kills 4 climbers', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b97e71f/l/0Ltimesofindia0Bindiatimes0N0Cworld0Crest0Eof0Eworld0CVolcano0Ein0EPhilippines0Espews0Erocks0Ekills0Efour0Eclimbers0Carticleshow0C199250A170Bcms/story01.htm', '2013-05-06 20:58:14', 'world', 0),
(-338857583, 'Google''s ''Palestine'' page harms peace hopes: Israel', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b931541/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cmiddle0Eeast0CIsrael0Esays0EGoogles0EPalestine0Epage0Eharms0Epeace0Ehopes0Carticleshow0C199157450Bcms/story01.htm', '2013-05-06 08:46:00', 'world', 0),
(-336852302, 'Lace up in style', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b8a63a6/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfashion0Ctrends0CLace0Eup0Ein0Estyle0Carticleshow0C94926780Bcms/story01.htm', '2013-05-05 13:00:00', 'lifestyle', 0),
(-334925742, 'After consistently trailing BJP across social media, Congress hits back with a Twitter catchphrase that marks the launch of its online push for the 2014 polls', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2ab932fc/l/0Lindiatoday0Bintoday0Bin0Cstory0Ccongress0Ebjp0Elok0Esabha0Epolls0E20A140Etwitter0Erahul0Egandhi0C10C2619840Bhtml/story01.htm', '2013-04-15 03:22:25', 'india', 0),
(-326755583, 'I-have-done-enough-small-roles-Nawazuddin-Siddiqui', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/GCLmHOU8BTY/story01.htm', '2013-05-04 05:36:40', 'entertainment', 0),
(-309697116, 'Norms for hiring teachers relaxed in 13 states', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/2a1ace77/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CNorms0Efor0Ehiring0Eteachers0Erelaxed0Ein0E130Estates0Carticleshow0C192639140Bcms/story01.htm', '2013-03-28 11:55:33', 'education', 0),
(-286139459, 'Diabetics likelier to have heart attack', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df73/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Chealth0Efitness0Chealth0CDiabetics0Elikelier0Eto0Ehave0Eheart0Eattack0Carticleshow0C178585340Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-267863997, 'Rashid-Irani-s-review-Mud', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/_fw2Rq_9J4E/story01.htm', '2013-05-03 15:03:46', 'entertainment', 0),
(-262650780, 'Breast cancer cases surge as cervical dips', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b16/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48613880Bcms/story01.htm', '2009-08-05 13:50:01', 'health', 0),
(-262338431, 'Is it a superhero? Is it a tsunami? No, it''s Chris Gayle!', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b487809/l/0Lindiatoday0Bintoday0Bin0Cstory0Cindian0Epremier0Eleague0Eipl0E60Emahendra0Esingh0Edhoni0Ems0Edhoni0Echris0Egayle0Eroyal0Echallengers0Ebangalore0Epune0Ewarriors0C10C26820A50Bhtml/story01.htm', '2013-05-03 05:08:11', 'sports', 0),
(-237601429, 'Test', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b2505ba/l/0Lindiatoday0Bintoday0Bin0Cstory0Ctest0C10C2675790Bhtml/story01.htm', '2013-04-25 02:21:01', 'india', 0),
(-206216925, 'Bank stocks: Gains for some, losses for others', 'http://economictimes.indiatimes.com/markets/stocks/stocks-in-news/bank-stocks-gains-for-some-losses-for-others/articleshow/19915350.cms', '2013-05-06 08:21:25', 'business', 0),
(-203909619, 'IIT Council''s decision hasty: Super 30 founder', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20ca7c88/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CIIT0ECouncils0Edecision0Ehasty0ESuper0E30A0Efounder0Carticleshow0C144580A360Bcms/story01.htm', '2012-06-28 00:50:04', 'education', 0),
(-192051357, 'Deepak Bhardwaj murder case: Son, lawyer sent to police custody', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2a9023d3/l/0Lindiatoday0Bintoday0Bin0Cstory0Cdeepak0Ebhardwaj0Emurder0Ecase0Eson0Enitesh0Elawyer0Esent0Eto0Epolice0Ecustody0C10C2616320Bhtml/story01.htm', '2013-04-11 21:14:59', 'india', 0),
(-186168829, 'Educational train journey for DU students', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20cd80dd/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CEducational0Etrain0Ejourney0Efor0EDU0Estudents0Carticleshow0C1446570A50Bcms/story01.htm', '2012-06-28 05:40:51', 'education', 0),
(-176486082, 'Morgan Stanley ''Overweight'' on Grasim Industries', 'http://economictimes.indiatimes.com/markets/stocks/stocks-in-news/morgan-stanley-overweight-on-grasim-industries/articleshow/19922234.cms', '2013-05-06 18:34:28', 'business', 0),
(-127636142, 'North Korea missiles moved away from launch site, say US officials', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/jKC_nNGjXqw/story01.htm', '2013-05-06 21:34:24', 'technical', 0),
(-125364122, 'I-d-love-to-do-a-comedy-film-Karisma-Kapoor', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/Y_bAxNR83r4/story01.htm', '2013-05-03 08:02:19', 'entertainment', 0),
(-123895976, 'FIFA vice prez backs India''s 2017 U-17 World Cup bid', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b92034e/l/0Lindiatoday0Bintoday0Bin0Cstory0Cindias0E20A170Eu0E170Eworld0Ecup0Ebid0Efifa0Evice0Epresident0Ebacks0Efootball0C10C26960A20Bhtml/story01.htm', '2013-05-06 07:20:07', 'sports', 0),
(-93849788, 'Where notorious criminals have been buried', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b98f828/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cus0CWhere0Enotorious0Ecriminals0Ehave0Ebeen0Eburied0Carticleshow0C199267370Bcms/story01.htm', '2013-05-06 23:59:45', 'world', 0),
(-76561025, 'The golden liquid goes great with veg food', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df6e/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfood0Cdrinks0Ecorner0CThe0Egolden0Eliquid0Egoes0Egreat0Ewith0Eveg0Efood0Carticleshow0C17255970A0Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(-31724110, 'Philippines volcano erupts, five feared killed', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/siQZGSy4km8/story01.htm', '2013-05-06 21:26:46', 'technical', 0),
(-20414311, 'Blood is thicker than water in Pak elections too', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b93bda9/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cpakistan0CBlood0Eis0Ethicker0Ethan0Ewater0Ein0EPak0Eelections0Etoo0Carticleshow0C199165330Bcms/story01.htm', '2013-05-06 09:32:05', 'world', 0),
(-13592852, 'New-look rankings show the unstoppable rise of student mobility', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/237d1284/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CNew0Elook0Erankings0Eshow0Ethe0Eunstoppable0Erise0Eof0Estudent0Emobility0Carticleshow0C1642920A10Bcms/story01.htm', '2012-09-16 19:20:25', 'education', 0),
(5536075, 'Republican Senators defeat Obama in golf', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b9900fa/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cus0CRepublican0ESenators0Edefeat0EObama0Ein0Egolf0Carticleshow0C199264420Bcms/story01.htm', '2013-05-06 23:39:57', 'world', 0),
(7534922, 'British comedian Jimmy Tarbuck arrested over child abuse claim', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/MfjwH8FGv04/story01.htm', '2013-05-06 22:18:36', 'technical', 0),
(12425041, 'Hysterectomy through belly button leaves no scars', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b0a/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C490A4370A0Bcms/story01.htm', '2009-08-17 13:16:15', 'health', 0),
(17033723, 'Mkts will outperform on robust global flows: BNP', 'http://economictimes.indiatimes.com/opinion/interviews/indian-markets-will-outperform-if-global-flows-remain-robust-manishi-raychaudhuri-bnp-paribas-securities/articleshow/19926930.cms', '2013-05-07 00:13:48', 'business', 0),
(34265428, 'Goa women top higher education enrolment', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/23321fba/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CGoa0Ewomen0Etop0Ehigher0Eeducation0Eenrolment0Carticleshow0C1630A46720Bcms/story01.htm', '2012-09-07 16:05:44', 'education', 0),
(39800763, 'Gippi-will-make-its-own-mark-Divya-Dutta', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/MpnpSx-0JmE/story01.htm', '2013-05-04 06:40:31', 'entertainment', 0),
(69673134, 'Youth will vote for me: Imran Khan', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8d85a1/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cpakistan0CImran0Econfident0Eyoung0Ewill0Ebat0Efor0Ehim0Ein0Epolls0Carticleshow0C1990A60A780Bcms/story01.htm', '2013-05-05 19:35:14', 'world', 0),
(84649530, 'How to deal with sunburn', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df64/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cbeauty0CHow0Eto0Edeal0Ewith0Esunburn0Carticleshow0C1890A62450Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(145956999, 'Bangladesh building collapse death toll approaches 700', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/Svfp10IWlMc/story01.htm', '2013-05-06 23:38:24', 'technical', 0),
(165007977, 'Inspiration for ''Contact'' still listening', 'http://rss.cnn.com/~r/rss/edition_space/~3/84C0ckrT5D4/index.html', '2008-11-26 17:02:33', 'science', 0),
(231833678, 'Test', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2ad9ccc0/l/0Lindiatoday0Bintoday0Bin0Cstory0Ctest0C10C2663490Bhtml/story01.htm', '2013-04-25 02:18:29', 'india', 0),
(247381141, 'BHU goes hi-tech, to provide better internet facilities', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/23770f71/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CBHU0Egoes0Ehi0Etech0Eto0Eprovide0Ebetter0Einternet0Efacilities0Carticleshow0C164169770Bcms/story01.htm', '2012-09-15 18:16:55', 'education', 0),
(259941451, 'North Korea threatens to hit back against US-South Korea military drill', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/wFJDrWaKBaA/story01.htm', '2013-05-06 20:47:22', 'technical', 0),
(260276770, '''Buying on dips to sustain till mkt moves higher''', 'http://economictimes.indiatimes.com/markets/analysis/buying-on-dips-to-sustain-till-market-moves-higher-ashwani-gujral/articleshow/19913778.cms', '2013-05-06 06:44:14', 'business', 0),
(271658032, 'God of big deals? MS Dhoni in dock for posing as Lord Vishnu', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b918171/l/0Lindiatoday0Bintoday0Bin0Cstory0Cms0Edhoni0Eas0Elord0Evishnu0Ead0Edepiction0Ehurting0Ehindus0Emagazine0Ecase0Efiled0Eindian0Eskipper0C10C2695890Bhtml/story01.htm', '2013-05-06 06:40:19', 'sports', 0),
(277118167, 'Texting while driving increases risk of crashing', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b1c/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48289470Bcms/story01.htm', '2009-07-28 01:15:41', 'health', 0),
(278304414, 'Women enjoy ''best sex'' at age 28', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df62/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cman0Ewoman0CWomen0Eenjoy0Ebest0Esex0Eat0Eage0E280Carticleshow0C135986930Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(286339477, 'Kerala high court asks AICTE to consider revoking affiliations of self-financing engineering colleges lacking performance', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d08a4f/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CKerala0Ehigh0Ecourt0Easks0EAICTE0Eto0Econsider0Erevoking0Eaffiliations0Eof0Eself0Efinancing0Eengineering0Ecolleges0Elacking0Eperformance0Carticleshow0C144714540Bcms/story01.htm', '2012-06-28 09:55:33', 'education', 0),
(337778885, 'Delhi Darevdevils to take on Rajasthan Royals on latter''s home turf today', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b982bc8/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E60Edelhi0Edarevdevils0Eto0Ebattle0Erajasthan0Eroyals0Eindia0Etoday0C10C2696640Bhtml/story01.htm', '2013-05-07 00:31:01', 'sports', 0),
(343389530, 'Making fashion affordable', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df6c/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfashion0Cstyle0Eguide0CMaking0Efashion0Eaffordable0Carticleshow0C19630A80A0A0Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(374544693, 'Synthetic bedding ''can cause asthma''', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b12/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C4880A6660Bcms/story01.htm', '2009-08-11 01:53:53', 'health', 0),
(410585881, 'Aircraft crashes at Spanish air show', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8dda55/l/0Ltimesofindia0Bindiatimes0N0Cworld0Ceurope0CAircraft0Ecrashes0Ein0Ea0Efireball0Eat0ESpanish0Eair0Eshow0Carticleshow0C1990A86810Bcms/story01.htm', '2013-05-06 00:17:25', 'world', 0),
(413875613, '''Havan'' for bacteria-free homes: Study', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b0d/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C490A0A8310Bcms/story01.htm', '2009-08-16 23:00:40', 'health', 0),
(431191907, 'Is Gambhir one of the top 3 annoying cricketers? Warne comments on Dravid-Gambhir spat', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b7fadc4/l/0Lindiatoday0Bintoday0Bin0Cstory0Cis0Egambhir0Eone0Eof0Ethe0Etop0E30Eannoying0Ecricketers0Ewarne0Ecomments0Eon0Edravid0Egambhir0Espat0C10C2692440Bhtml/story01.htm', '2013-05-04 05:56:43', 'sports', 0),
(463169780, 'Now, an HIV blocking gel for women', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b14/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C4876890A0Bcms/story01.htm', '2009-08-10 02:22:03', 'health', 0),
(559010363, 'Stretch limo fire in US kills five women', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b969a7d/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cus0CStretch0Elimo0Efire0Ein0EUS0Ekills0Efive0Ewomen0Eraises0Equestions0Eabout0Eextravagant0Eritual0Carticleshow0C199230A730Bcms/story01.htm', '2013-05-06 17:00:24', 'world', 0),
(612444915, 'World''s first 3D-printed gun fires real bullets', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/h6R9Cs7LjZw/story01.htm', '2013-05-06 20:37:05', 'technical', 0),
(613658888, 'BJP, Congress loss is JD-S gain in Karnataka Assembly polls', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b9838f4/l/0Lindiatoday0Bintoday0Bin0Cstory0Ckarnataka0Eassembly0Epolls0E20A130Ejds0Eemerges0Ebjp0Econgress0Efail0C10C2691120Bhtml/story01.htm', '2013-05-07 00:24:27', 'india', 0),
(620471393, 'Shootout-At-Wadala-mints-Rs-10-01-crore-on-opening-day', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/6e5qU6kL2x0/story01.htm', '2013-05-04 02:41:09', 'entertainment', 0),
(626411210, 'Irish PM dismisses concerns over abortion bill', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b970bfd/l/0Ltimesofindia0Bindiatimes0N0Cworld0Ceurope0CIrish0EPM0Edismisses0Econcerns0Eover0Eabortion0Ebill0Carticleshow0C199238130Bcms/story01.htm', '2013-05-06 18:26:02', 'world', 0),
(638746511, 'China''s cyber spying targets US government: Pentagon', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/V_tD9izltrk/story01.htm', '2013-05-06 13:54:02', 'technical', 0),
(639608907, 'Oppn to fight ''stolen'' Malaysia polls', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8e85ad/l/0Ltimesofindia0Bindiatimes0N0Cworld0Crest0Eof0Eworld0COpposition0Eto0Efight0Estolen0EMalaysia0Epolls0EAnwar0Carticleshow0C1990A960A70Bcms/story01.htm', '2013-05-06 01:29:52', 'world', 0),
(641078641, 'KKR rout Rajasthan Royals to keep IPL playoffs dream alive', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b79f49e/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Elive0Escore0Ekolkata0Eknight0Eriders0Evs0Erajasthan0Eroyals0Elive0Eipl0E60C10C2691410Bhtml/story01.htm', '2013-05-03 12:13:58', 'sports', 0),
(682629691, 'DU cutoff 2: Hope still floats', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d21252/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CDU0Ecutoff0E20EHope0Estill0Efloats0Carticleshow0C144764810Bcms/story01.htm', '2012-06-28 14:15:21', 'education', 0),
(741224644, 'Inconsistent attendance policy troubles DU students', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/25ca9d10/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CInconsistent0Eattendance0Epolicy0Etroubles0EDU0Estudents0Carticleshow0C1730A0A6940Bcms/story01.htm', '2012-11-20 14:14:41', 'education', 0),
(757766693, 'Indian lunar orbiter hit by heat rise', 'http://rss.cnn.com/~r/rss/edition_space/~3/utoHWQBr1hc/index.html', '2008-11-26 12:26:44', 'science', 0),
(878838197, 'Top four momentum trading picks for this week', 'http://economictimes.indiatimes.com/markets/stocks/stocks-in-news/top-four-momentum-trading-picks-for-this-week/articleshow/19912933.cms', '2013-05-06 05:45:25', 'business', 0),
(911799856, 'Homeopathy can cure swine flu, claims practitioner', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b15/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48746140Bcms/story01.htm', '2009-08-09 10:09:09', 'health', 0),
(918302887, 'IPL 6: Shah Rukh Khan to use mask, fake moustache to enter Wankhede stadium?', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b80f1c3/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Ekolkata0Eknight0Eriders0Eshah0Erukh0Ekhan0Ewankhede0Estadium0Efake0Emoustache0Emask0C10C2692970Bhtml/story01.htm', '2013-05-04 06:46:20', 'sports', 0),
(941574109, 'Malaysia''s governing coalition retains hold on power', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8bc534/l/0Ltimesofindia0Bindiatimes0N0Cworld0Csouth0Easia0CMalaysias0Egoverning0Ecoalition0Eretains0Eits0E560Eyear0Ehold0Eon0Epower0Carticleshow0C1990A19190Bcms/story01.htm', '2013-05-05 12:24:20', 'world', 0),
(942529079, 'The right bag can make you look thin!', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df72/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfashion0Ctrends0CThe0Eright0Ebag0Ecan0Emake0Eyou0Elook0Ethin0Carticleshow0C86467640Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(971329825, 'Why some love and others hate coffee', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b8a63a4/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cfood0Cdrinks0Ecorner0CWhy0Esome0Elove0Eand0Eothers0Ehate0Ecoffee0Carticleshow0C99786450Bcms/story01.htm', '2013-05-05 13:00:00', 'lifestyle', 0),
(977040754, 'Nazi trial: Germany arrests ''Auschwitz guard'' on murder charges', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/vZb80UXc-Dg/story01.htm', '2013-05-06 13:34:51', 'technical', 0),
(1004177262, 'Helen Mirren gives royal lashing to street drummers', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b971b5b/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cuk0CQueen0EHelen0EMirren0Egives0Eroyal0Elashing0Eto0Estreet0Edrummers0Carticleshow0C199236410Bcms/story01.htm', '2013-05-06 18:06:00', 'world', 0),
(1006539383, 'Grade rating for Devi Ahilya Vishwavidhyalaya, a distant dream', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d093da/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CGrade0Erating0Efor0EDevi0EAhilya0EVishwavidhyalaya0Ea0Edistant0Edream0Carticleshow0C144722120Bcms/story01.htm', '2012-06-28 10:46:57', 'education', 0),
(1007278272, 'The Losing Battle', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2ae97ef3/l/0Lindiatoday0Bintoday0Bin0Cstory0Cnitish0Ekumar0Enda0Epm0Ecandidate0Emodi0Elok0Esabha0Epolls0E20A140C10C266620A0Bhtml/story01.htm', '2013-04-30 00:19:04', 'india', 0),
(1062651858, 'Men who do household chores more likely to marry', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b18/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48571840Bcms/story01.htm', '2009-08-04 08:49:42', 'health', 0),
(1074863367, 'Test', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2aa02abb/l/0Lindiatoday0Bintoday0Bin0Cstory0Ctest0C10C2618570Bhtml/story01.htm', '2013-04-11 23:35:03', 'india', 0),
(1087964815, 'I-do-limited-films-because-script-is-important-to-me-Mahie-Gill', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/vcMefxENjZ0/story01.htm', '2013-05-04 02:27:50', 'entertainment', 0),
(1104792261, 'Bhardwaj murder case: Accused sent to 14-day judicial custody', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2a9f662e/l/0Lindiatoday0Bintoday0Bin0Cstory0Cdeepak0Ebhardwaj0Emurder0Ecase0Erskesh0Eowner0Eof0Ecar0Ejudicial0Ecustody0Enitesh0Ebhardwaj0Epolice0Eremand0C10C2618260Bhtml/story01.htm', '2013-04-11 21:53:06', 'india', 0),
(1108137897, 'New jihadi magazine appeals for help against drones', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/n7HuwAQF_p8/story01.htm', '2013-05-06 12:28:54', 'technical', 0),
(1114342744, 'Three women, missing for a decade, found alive in US', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/84V22n6tHK0/story01.htm', '2013-05-06 21:20:00', 'technical', 0),
(1133032923, 'Do you know everything about sex?', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df68/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cman0Ewoman0CDo0Eyou0Eknow0Eeverything0Eabout0Esex0Carticleshow0C70A753820Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(1133494253, 'United Nations chief appeals for peace and calm in Bangladesh', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/BXlUKHLYoTs/story01.htm', '2013-05-06 14:01:30', 'technical', 0),
(1163121384, 'DLF picks banks to sell up to 81 mn shares | Quote', 'http://economictimes.indiatimes.com/markets/stocks/stocks-in-news/dlf-picks-banks-to-sell-up-to-81-milion-shares/articleshow/19925987.cms', '2013-05-06 22:58:57', 'business', 0),
(1180430413, 'Worldâ€™s oldest novelist pens 124th book at 105', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b8a63a5/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cbooks0CWorlds0Eoldest0Enovelist0Epens0E124th0Ebook0Eat0E10A50Carticleshow0C1980A17510Bcms/story01.htm', '2013-05-05 13:00:00', 'lifestyle', 0),
(1184101813, 'Mid-caps soar in what may be an early hint of rally', 'http://economictimes.indiatimes.com/markets/stocks/market-news/mid-cap-stocks-up-10-20-on-strong-q4-hopes-valuation-gap-with-large-caps-creates-opportunities/articleshow/19922012.cms', '2013-05-06 15:01:29', 'business', 0),
(1185051887, 'Iran to begin registering presidential candidates', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/QGn5DBi9iz8/story01.htm', '2013-05-06 22:37:37', 'technical', 0),
(1189130961, 'The Man Who Conned Bengal', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b34fae2/l/0Lindiatoday0Bintoday0Bin0Cstory0Csudipta0Esen0Echit0Efund0Escam0Ein0Ekolkata0Ecbi0Etrinamool0Econgress0C10C2678710Bhtml/story01.htm', '2013-04-27 04:05:06', 'india', 0),
(1217243767, 'Chechnya strongman calls Boston bombing suspects ''devils''', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/YM9RcVwl8cY/story01.htm', '2013-05-06 13:43:37', 'technical', 0),
(1223059309, 'Katrina-Kaif-s-sister-set-to-debut-courtesy-Salman-Khan', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/A3IWtSO9718/story01.htm', '2013-05-04 01:00:52', 'entertainment', 0),
(1231403188, 'Kushinagar, a serene Buddhist destination', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df6a/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Ctravel0CKushinagar0Ea0Eserene0EBuddhist0Edestination0Carticleshow0C166245830Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(1269120672, 'US bill has high stakes for immigrants, Obama', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8de030/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cus0CUS0Ebill0Ehas0Ehigh0Estakes0Efor0Eimmigrants0EObama0Carticleshow0C1990A82520Bcms/story01.htm', '2013-05-05 23:47:29', 'world', 0),
(1296196455, 'High-profile German neo-Nazi trial opens in Munich', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8fd492/l/0Ltimesofindia0Bindiatimes0N0Cworld0Ceurope0CHigh0Eprofile0EGerman0Eneo0ENazi0Etrial0Eopens0Ein0EMunich0Carticleshow0C199112790Bcms/story01.htm', '2013-05-06 03:49:05', 'world', 0),
(1332541611, 'Selectors deserve pat on back', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8578c5/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl60Es0Ekannan0Eselectors0Eplayers0Eicc0Echampions0Etrophy0C10C2693540Bhtml/story01.htm', '2013-05-04 21:06:55', 'sports', 0),
(1348115395, 'Will Pune Warriors be able to end Rajasthan Royals'' unending home winning streak?', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8527fa/l/0Lindiatoday0Bintoday0Bin0Cstory0Cwill0Epune0Ewarriors0Eindia0Ebe0Eable0Eto0Eend0Erajasthan0Eroyals0Ehome0Ewinning0Estreak0Eindia0Etoday0C10C2693530Bhtml/story01.htm', '2013-05-04 21:00:07', 'sports', 0),
(1348148304, 'Know all about the new IIT exam pattern', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20cac42e/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CKnow0Eall0Eabout0Ethe0Enew0EIIT0Eexam0Epattern0Carticleshow0C144582170Bcms/story01.htm', '2012-06-28 00:58:03', 'education', 0),
(1356184707, 'British deputy speaker Nigel Evans held for gay rape', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8c0f00/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cuk0CBritish0Edeputy0Espeaker0ENigel0EEvans0Eheld0Efor0Egay0Erape0Carticleshow0C1990A380A50Bcms/story01.htm', '2013-05-05 14:57:17', 'world', 0),
(1366525904, 'Nifty hovers near 6,000; realty, pharma, FMCG lead', 'http://economictimes.indiatimes.com/markets/stocks/market-news/nifty-hovers-near-6000-realty-pharma-fmcg-lead/articleshow/19927132.cms', '2013-05-07 00:28:41', 'business', 0),
(1375234754, 'A cot mattress that mimics the womb', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b0e/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48991530Bcms/story01.htm', '2009-08-16 05:58:25', 'health', 0),
(1387681243, 'Under Taliban shadow, Pak parties fighting to keep democracy alive', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/e48TCVWbP5c/story01.htm', '2013-05-06 21:52:28', 'technical', 0),
(1392371486, 'Iran: Quake rattles region near nuke reactor', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b8fee95/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cmiddle0Eeast0CIran0EQuake0Erattles0Eregion0Enear0Enuke0Ereactor0Carticleshow0C19910A9620Bcms/story01.htm', '2013-05-06 03:28:23', 'world', 0),
(1413385536, 'Orphan City: Bangalore on the brink of collapse', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b59f88d/l/0Lindiatoday0Bintoday0Bin0Cstory0Cbangalore0Einadequate0Einfrastructure0Epolitician0Erealtor0Enexus0C10C2678510Bhtml/story01.htm', '2013-05-06 03:07:41', 'india', 0),
(1444538158, '10,000 foreign-educated doctors jobless after failing Medical Council of India test', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/25b65929/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0C10A0A0A0A0Eforeign0Eeducated0Edoctors0Ejobless0Eafter0Efailing0EMedical0ECouncil0Eof0EIndia0Etest0Carticleshow0C172728780Bcms/story01.htm', '2012-11-18 15:17:51', 'education', 0),
(1471911001, 'Falling inflation, interest rates to benefit banks: Deutsche Bank', 'http://economictimes.indiatimes.com/markets/analysis/falling-inflation-interest-rates-to-benefit-banks-leverage-plays-deutsche-bank/articleshow/19926708.cms', '2013-05-07 00:03:04', 'business', 0),
(1478306801, 'Country''s education system burdened with demands of quantity, quality: President Pranab Mukherjee', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/26ec90d4/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CCountrys0Eeducation0Esystem0Eburdened0Ewith0Edemands0Eof0Equantity0Equality0EPresident0EPranab0EMukherjee0Carticleshow0C177560A260Bcms/story01.htm', '2012-12-25 05:48:47', 'education', 0),
(1486392660, 'Men readily have sex with strangers', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df63/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Crelationships0Cman0Ewoman0CMen0Ereadily0Ehave0Esex0Ewith0Estrangers0Carticleshow0C98826780Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0);
INSERT INTO `news_story` (`uid`, `title`, `link`, `date`, `type_news`, `cnt`) VALUES
(1508409200, 'Israel raids on Syria killed at least 15 soldiers', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b9321c8/l/0Ltimesofindia0Bindiatimes0N0Cworld0Cmiddle0Eeast0CIsrael0Eraids0Eon0ESyria0Ekilled0Eat0Eleast0E150Esoldiers0ENGO0Carticleshow0C19915370A0Bcms/story01.htm', '2013-05-06 08:22:14', 'world', 0),
(1552483945, 'Indian-artists-with-a-global-face', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/szmUiK2fmcY/story01.htm', '2013-05-03 07:32:59', 'entertainment', 0),
(1602891205, 'Kissing can cause herpes', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b0b/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C490A25260Bcms/story01.htm', '2009-08-17 05:22:57', 'health', 0),
(1638216645, 'Death toll in Bangladesh building collapse reaches 645', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/XuSxw_Hn0oQ/story01.htm', '2013-05-06 11:35:05', 'technical', 0),
(1655958333, 'Bollywood-adds-glamour-to-the-National-Film-Awards-felicitation', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/qv535v6Fj1Y/story01.htm', '2013-05-04 02:00:18', 'entertainment', 0),
(1659455822, 'New selection norms may change colour and code of IIT campuses', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/20d2b4a2/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CNew0Eselection0Enorms0Emay0Echange0Ecolour0Eand0Ecode0Eof0EIIT0Ecampuses0Carticleshow0C14480A7740Bcms/story01.htm', '2012-06-28 16:55:12', 'education', 0),
(1661231922, '10 home remedies to avoid swine flu', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b10/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48885980Bcms/story01.htm', '2009-08-13 00:15:24', 'health', 0),
(1668439132, 'Russian daredevil hangs off bridge with one hand', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/fJ3FtYOv8RY/story01.htm', '2013-05-06 13:48:13', 'technical', 0),
(1735877540, 'Net Flux', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2aabd9de/l/0Lindiatoday0Bintoday0Bin0Cstory0Cworld0Ewide0Eweb0Enet0Eflux0Einternet0Etrends0C10C2610A0A30Bhtml/story01.htm', '2013-04-13 05:07:37', 'india', 0),
(1743515310, 'CBSE to conduct dope tests in school sports meet', 'http://timesofindia.feedsportal.com/c/33039/f/533924/s/223b028a/l/0Ltimesofindia0Bindiatimes0N0Chome0Ceducation0Cnews0CCBSE0Eto0Econduct0Edope0Etests0Ein0Eschool0Esports0Emeet0Carticleshow0C154275570Bcms/story01.htm', '2012-08-09 15:42:35', 'education', 0),
(1749913848, 'No-one-to-receive-Pran-s-Phalke-award-at-National-Film-Awards-ceremony', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/Sj8Z3MF8zac/story01.htm', '2013-05-03 09:31:51', 'entertainment', 0),
(1758791816, 'Outcry over Guantanamo Bay grows, as does hunger strike', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/HjglDtfF9_o/story01.htm', '2013-05-06 13:39:23', 'technical', 0),
(1786168826, 'Women''s Day out at mind spa', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b8057d0/l/0Lindiatoday0Bintoday0Bin0Cstory0Cindia0Etoday0Ewomen0Esummit0E20A130C10C2678490Bhtml/story01.htm', '2013-05-04 04:29:12', 'india', 0),
(1791398995, 'Nifty hits 6000 level: Twelve stocks in action', 'http://economictimes.indiatimes.com/markets/stocks/stocks-in-news/nifty-hits-6000-level-twelve-stocks-in-action/articleshow/19926115.cms', '2013-05-06 23:04:23', 'business', 0),
(1823202410, 'Scintillating Cameron White says it''s all about hitting the ball in a Super Over', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b7eee0e/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E60Esuper0Eover0Ematch0Eroyal0Echallengers0Ebangalore0Esunrisers0Ehyderabad0Ecameron0Ewhite0Eindia0Etoday0C10C2692180Bhtml/story01.htm', '2013-05-03 23:15:14', 'sports', 0),
(1829383812, 'What''s new in web world?', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b3cda42/l/0Lindiatoday0Bintoday0Bin0Cstory0Cwhats0Enew0Ein0Eweb0Eworld0C10C2667110Bhtml/story01.htm', '2013-04-27 04:22:32', 'india', 0),
(1835094814, 'Ravi Bopara earns Champions Trophy recall from England', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b790da1/l/0Lindiatoday0Bintoday0Bin0Cstory0Cchampions0Etrophy0E20A130Eengland0Eannounces0Esquad0Ebresnan0Ebopara0Erecall0Eodi0Eseries0C10C2691250Bhtml/story01.htm', '2013-05-03 06:58:31', 'sports', 0),
(1877289561, 'Bollywood-s-most-in-significant-achievement-Amol-Palekar', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/L3P10YGRwXA/story01.htm', '2013-05-03 08:42:54', 'entertainment', 0),
(1883842224, 'IPL 6: Can KKR keep Shah Rukh Khan''s promise this season?', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b781cca/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Ekolkata0Eknight0Eriders0Evs0Erajasthan0Eroyals0Eshah0Erukh0Ekhan0Eipl0E60Et20A0C10C2690A870Bhtml/story01.htm', '2013-05-03 07:51:26', 'sports', 0),
(1890660343, '37 dead as Bangladesh Islamists demand tougher blasphemy law', 'http://feedproxy.google.com/~r/ndtv/TqgX/~3/yAMA3_j-NXw/story01.htm', '2013-05-06 21:10:45', 'technical', 0),
(1891873088, 'Ayushmann-Khurrana-to-sing-a-song-in-YRF-s-next', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/-8J5wjvjP90/story01.htm', '2013-05-04 06:37:16', 'entertainment', 0),
(1900129114, 'Mars Science Lab launch delayed two years', 'http://rss.cnn.com/~r/rss/edition_space/~3/OkAPP_GA5mE/index.html', '2008-12-05 15:34:54', 'science', 0),
(1905780942, 'Flip books tell NGOâ€™s success stories', 'http://timesofindia.feedsportal.com/c/33039/f/533929/s/2b94df6d/l/0Ltimesofindia0Bindiatimes0N0Clife0Estyle0Cbooks0CFlip0Ebooks0Etell0ENGOs0Esuccess0Estories0Carticleshow0C194265610Bcms/story01.htm', '2013-05-06 13:00:00', 'lifestyle', 0),
(1909473507, 'Subscribe Now', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b781ccd/l/0Lindiatoday0Bintoday0Bin0Csubscription0Bhtml/story01.htm', '2013-05-03 05:14:43', 'sports', 0),
(1942840316, 'Bangladesh violence worsens, 37 killed', 'http://timesofindia.feedsportal.com/c/33039/f/533917/s/2b970bfb/l/0Ltimesofindia0Bindiatimes0N0Cworld0Csouth0Easia0CBangladesh0Eviolence0Eworsens0E370Ekilled0Carticleshow0C199237530Bcms/story01.htm', '2013-05-06 18:19:23', 'world', 0),
(1948490916, 'Indian-movies-which-have-shone-in-the-international-arena', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/bL6IvH74va4/story01.htm', '2013-05-03 08:30:18', 'entertainment', 0),
(1973804110, 'Shuttle lands at California air base', 'http://rss.cnn.com/~r/rss/edition_space/~3/YzjKXjuxFKY/index.html', '2008-12-01 05:17:51', 'science', 0),
(2002246525, 'Keira-Knightley-gets-married-in-a-quiet-ceremony-in-France', 'http://feeds.hindustantimes.com/~r/HT-HomePage-Entertainment/~3/y4YKoql3dKc/story01.htm', '2013-05-05 03:38:09', 'entertainment', 0),
(2019086253, 'Overseas success makes Pak strong contender in Champions Trophy: Mohammad Hafeez', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8d8359/l/0Lindiatoday0Bintoday0Bin0Cstory0Coverseas0Esuccess0Emakes0Epak0Estrong0Econtender0Ein0Echampions0Etrophy0Ehafeez0C10C269510A0Bhtml/story01.htm', '2013-05-06 03:02:02', 'sports', 0),
(2062396352, 'David Miller emulates Gayle to help Punjab annihilate RCB in IPL', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b9246d5/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Elive0Escore0Ekings0Exi0Epunjab0Evs0Eroyal0Echallengers0Ebangalore0Et20A0Elive0C10C26960A70Bhtml/story01.htm', '2013-05-06 12:53:47', 'sports', 0),
(2074114897, 'Clueless in a lawless land: A ruthless CM''s politics of vengeance adds to the violence spreading across the state', 'http://indiatoday.feedsportal.com/c/33614/f/589702/s/2b120b1c/l/0Lindiatoday0Bintoday0Bin0Cstory0Cmamata0Ebanerjee0Epresidency0Euniversity0Eamit0Emitra0Ecpi0Em0Eactivists0C10C2666650Bhtml/story01.htm', '2013-04-30 00:18:27', 'india', 0),
(2142819022, 'Cadila to apply for clinical trials for swine flu vaccine', 'http://timesofindia.feedsportal.com/c/33039/f/533968/s/1f181b11/l/0Ltimesofindia0Bindiatimes0N0Carticleshow0C48818430Bcms/story01.htm', '2009-08-11 06:19:44', 'health', 0),
(2143836060, 'Sunrisers Hyderabad storm to 3rd spot after win over Delhi', 'http://indiatoday.feedsportal.com/c/33614/f/589706/s/2b8200c8/l/0Lindiatoday0Bintoday0Bin0Cstory0Cipl0E20A130Elive0Escore0Esunrisers0Ehyderabad0Evs0Edelhi0Edaredevils0Eipl0E60Et20A0C10C26930A90Bhtml/story01.htm', '2013-05-04 12:03:43', 'sports', 0);

-- --------------------------------------------------------

--
-- Table structure for table `story_visit`
--

CREATE TABLE IF NOT EXISTS `story_visit` (
  `uid` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `link` varchar(5000) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story_visit`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_behaviour`
--

CREATE TABLE IF NOT EXISTS `user_behaviour` (
  `username` varchar(20) NOT NULL,
  `india` varchar(20) NOT NULL,
  `world` varchar(20) NOT NULL,
  `technical` varchar(20) NOT NULL,
  `business` varchar(20) NOT NULL,
  `sports` varchar(20) NOT NULL,
  `health` varchar(20) NOT NULL,
  `science` varchar(20) NOT NULL,
  `education` varchar(20) NOT NULL,
  `lifestyle` varchar(20) NOT NULL,
  `entertainment` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_behaviour`
--

INSERT INTO `user_behaviour` (`username`, `india`, `world`, `technical`, `business`, `sports`, `health`, `science`, `education`, `lifestyle`, `entertainment`) VALUES
('dkm1910', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('vipul1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('rahul', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('niranjan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('naved', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('dk', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('dkm', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `email_id` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`email_id`, `username`, `password`) VALUES
('dkm1910@gmail.com', 'dk', 'dk'),
('meena@gmail.com', 'dkm', 'dkm'),
('meena.deepak0@gmail.com', 'dkm1910', 'dib856'),
('naved@gmail.com', 'naved', 'naved'),
('niranjan111@gmail.com', 'niranjan', 'niranjan'),
('rahul123@gmail.com', 'rahul', 'rahul'),
('vipuls1@gmail.com', 'vipul1', 'vipul');

-- --------------------------------------------------------

--
-- Table structure for table `user_interest`
--

CREATE TABLE IF NOT EXISTS `user_interest` (
  `username` varchar(100) NOT NULL,
  `title` longtext NOT NULL,
  `link` varchar(5000) NOT NULL,
  `type_news` varchar(100) NOT NULL,
  `cnt` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_interest`
--

INSERT INTO `user_interest` (`username`, `title`, `link`, `type_news`, `cnt`, `date`) VALUES
('dkm1910', 'Gunmen attack Syrian army from sea', 'http://timesofindia.feedsportal.com/fy/8at2EtZ0Z073d2Gk/story01.htm', 'world', 2, '2013-05-05'),
('naved', 'Hope floats as 3 Internet cos plan IPOs', 'http://economictimes.indiatimes.com/markets/ipos/fpos/rights-issues/hope-floats-as-3-internet-cos-just-dial-bharatmatrimony-homeshop18-plan-ipos/articleshow/19922087.cms', 'business', 1, '2013-05-07'),
('niranjan', '''Chak De! India'' actress made kiss scene comfortable: Shadab', 'http://timesofindia.feedsportal.com/c/33039/f/533928/s/2b8a3ee7/l/0Ltimesofindia0Bindiatimes0N0Centertainment0Cbollywood0Cnews0Einterviews0CChak0EDe0EIndia0Eactress0Emade0Ekiss0Escene0Ecomfortable0EShadab0Carticleshow0C198934290Bcms/story01.htm', 'entertainment', 2, '2013-05-05'),
('vipul1', 'Pawan Kumar Bansal, Ashwani Kumar must go: BJP', 'http://timesofindia.feedsportal.com/c/33039/f/533916/s/2b884523/l/0Ltimesofindia0Bindiatimes0N0Cindia0CPawan0EKumar0EBansal0EAshwani0EKumar0Emust0Ego0EBJP0Carticleshow0C198976260Bcms/story01.htm', 'india', 1, '2013-05-05');
