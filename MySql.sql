-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2018 at 08:35 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_admin`
--

DROP TABLE IF EXISTS `ms_admin`;
CREATE TABLE IF NOT EXISTS `ms_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_admin`
--

INSERT INTO `ms_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$W/aCv7o0pffnGzWrRHHcmOC6nQAUnOvipCRVAvMZr.mQio6vLG/iK');

-- --------------------------------------------------------

--
-- Table structure for table `ms_students`
--

DROP TABLE IF EXISTS `ms_students`;
CREATE TABLE IF NOT EXISTS `ms_students` (
  `student_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_fname` varchar(20) NOT NULL,
  `student_lname` varchar(20) NOT NULL,
  `student_age` int(5) NOT NULL,
  `student_gender` varchar(6) NOT NULL,
  `student_address` varchar(100) NOT NULL,
  `student_parents` varchar(100) NOT NULL,
  `student_note` varchar(255) NOT NULL,
  `student_analysis` json NOT NULL,
  `student_notes` json NOT NULL,
  `student_score` json NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_students`
--

INSERT INTO `ms_students` (`student_id`, `student_fname`, `student_lname`, `student_age`, `student_gender`, `student_address`, `student_parents`, `student_note`, `student_analysis`, `student_notes`, `student_score`) VALUES
(1, 'John', 'Doe', 10, 'Male', 'Manila', 'Mr. Doe', 'Bagong enrolls', '{\"table1\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\"}, \"row2\": {\"10\": \"\", \"11\": \"\", \"12\": \"\", \"13\": \"\", \"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\"}, \"row3\": {\"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\", \"25\": \"\", \"26\": \"\", \"27\": \"\"}, \"row4\": {\"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\"}, \"row5\": {\"37\": \"\", \"38\": \"\", \"39\": \"\", \"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\"}, \"row6\": {\"46\": \"\", \"47\": \"\", \"48\": \"\", \"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\", \"53\": \"\", \"54\": \"\"}, \"row7\": {\"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\", \"61\": \"\", \"62\": \"\", \"63\": \"\"}, \"row8\": {\"64\": \"\", \"65\": \"\", \"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\"}, \"row9\": {\"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"77\": \"\", \"78\": \"\", \"79\": \"\", \"80\": \"\", \"81\": \"\"}, \"row10\": {\"82\": \"\", \"83\": \"\", \"84\": \"\", \"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\"}}, \"table2\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\", \"10\": \"\", \"11\": \"\", \"12\": \"\"}, \"row2\": {\"13\": \"\", \"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\", \"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\"}, \"row3\": {\"25\": \"\", \"26\": \"\", \"27\": \"\", \"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\"}, \"row4\": {\"37\": \"\", \"38\": \"\", \"39\": \"\", \"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\", \"46\": \"\", \"47\": \"\", \"48\": \"\"}, \"row5\": {\"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\", \"53\": \"\", \"54\": \"\", \"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\"}, \"row6\": {\"61\": \"\", \"62\": \"\", \"63\": \"\", \"64\": \"\", \"65\": \"\", \"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\"}, \"row7\": {\"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"77\": \"\", \"78\": \"\", \"79\": \"\", \"80\": \"\", \"81\": \"\", \"82\": \"\", \"83\": \"\", \"84\": \"\"}, \"row8\": {\"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\", \"91\": \"\", \"92\": \"\", \"93\": \"\", \"94\": \"\", \"95\": \"\", \"96\": \"\"}, \"row9\": {\"97\": \"\", \"98\": \"\", \"99\": \"\", \"100\": \"\", \"101\": \"\", \"102\": \"\", \"103\": \"\", \"104\": \"\", \"105\": \"\", \"106\": \"\", \"107\": \"\", \"108\": \"\"}, \"row10\": {\"109\": \"\", \"110\": \"\", \"111\": \"\", \"112\": \"\", \"113\": \"\", \"114\": \"\", \"115\": \"\", \"116\": \"\", \"117\": \"\", \"118\": \"\", \"119\": \"\", \"120\": \"\"}}, \"table3\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\", \"10\": \"\", \"11\": \"\", \"12\": \"\", \"13\": \"\"}, \"row2\": {\"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\", \"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\", \"25\": \"\", \"26\": \"\"}, \"row3\": {\"27\": \"\", \"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\", \"37\": \"\", \"38\": \"\", \"39\": \"\"}, \"row4\": {\"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\", \"46\": \"\", \"47\": \"\", \"48\": \"\", \"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\"}, \"row5\": {\"53\": \"\", \"54\": \"\", \"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\", \"61\": \"\", \"62\": \"\", \"63\": \"\", \"64\": \"\", \"65\": \"\"}, \"row6\": {\"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\", \"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"78\": \"\", \"79\": \"\"}, \"row7\": {\"80\": \"\", \"81\": \"\", \"82\": \"\", \"83\": \"\", \"84\": \"\", \"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\", \"91\": \"\", \"92\": \"\"}, \"row8\": {\"93\": \"\", \"94\": \"\", \"95\": \"\", \"96\": \"\", \"97\": \"\", \"98\": \"\", \"99\": \"\", \"100\": \"\", \"101\": \"\", \"102\": \"\", \"103\": \"\", \"104\": \"\", \"105\": \"\"}, \"row9\": {\"106\": \"\", \"107\": \"\", \"108\": \"\", \"109\": \"\", \"110\": \"\", \"111\": \"\", \"112\": \"\", \"113\": \"\", \"114\": \"\", \"115\": \"\", \"116\": \"\", \"117\": \"\", \"118\": \"\"}, \"row10\": {\"119\": \"\", \"120\": \"\", \"121\": \"\", \"122\": \"\", \"123\": \"\", \"124\": \"\", \"125\": \"\", \"126\": \"\", \"127\": \"\", \"128\": \"\", \"129\": \"\", \"130\": \"\", \"131\": \"\"}}}', '{\"table1\": {\"cc11\": {\"notes\": [], \"updated\": \"\"}, \"cc13\": {\"notes\": [{\"date\": \"2018-03-02 01:04:pm\", \"note\": \"Bugo ning bataa\", \"source\": \"Admin\"}], \"updated\": \"2018-03-02 01:04:pm\"}, \"cc15\": {\"notes\": [], \"updated\": \"\"}, \"cc17\": {\"notes\": [], \"updated\": \"\"}, \"cc19\": null, \"cc21\": null, \"cc23\": null, \"cc25\": null, \"cc27\": null, \"cc47\": null, \"cc49\": null, \"cc51\": null, \"cc53\": null, \"cc55\": null, \"cc57\": null, \"cc59\": null, \"cc61\": null, \"cc63\": null, \"cc83\": null, \"cc85\": null, \"cc87\": null, \"cc89\": null, \"cc91\": null, \"cc93\": null, \"cc95\": null, \"cc97\": null, \"cc99\": null, \"cc119\": null, \"cc121\": null, \"cc123\": null, \"cc125\": null, \"cc127\": null, \"cc129\": null, \"cc131\": null, \"cc133\": null, \"cc135\": null, \"cc155\": null, \"cc157\": null, \"cc159\": null, \"cc161\": null, \"cc163\": null, \"cc165\": null, \"cc167\": null, \"cc169\": null, \"cc171\": null}, \"table2\": {\"cc14\": null, \"cc16\": null, \"cc18\": null, \"cc20\": null, \"cc22\": null, \"cc24\": null, \"cc26\": null, \"cc28\": null, \"cc30\": null, \"cc32\": null, \"cc34\": null, \"cc36\": null, \"cc62\": null, \"cc64\": null, \"cc66\": null, \"cc68\": null, \"cc70\": null, \"cc72\": null, \"cc74\": null, \"cc76\": null, \"cc78\": null, \"cc80\": null, \"cc82\": null, \"cc84\": null, \"cc110\": null, \"cc112\": null, \"cc114\": null, \"cc116\": null, \"cc118\": null, \"cc120\": null, \"cc122\": null, \"cc124\": null, \"cc126\": null, \"cc128\": null, \"cc130\": null, \"cc132\": null, \"cc158\": null, \"cc160\": null, \"cc162\": null, \"cc164\": null, \"cc166\": null, \"cc168\": null, \"cc170\": null, \"cc172\": null, \"cc174\": null, \"cc176\": null, \"cc178\": null, \"cc180\": null, \"cc206\": null, \"cc208\": null, \"cc210\": null, \"cc212\": null, \"cc214\": null, \"cc216\": null, \"cc218\": null, \"cc220\": null, \"cc222\": null, \"cc224\": null, \"cc226\": null, \"cc228\": null}, \"table3\": {\"cc15\": null, \"cc17\": null, \"cc19\": null, \"cc21\": null, \"cc23\": null, \"cc25\": null, \"cc27\": null, \"cc29\": null, \"cc31\": null, \"cc33\": null, \"cc35\": null, \"cc37\": null, \"cc39\": null, \"cc67\": null, \"cc69\": null, \"cc71\": null, \"cc73\": null, \"cc75\": null, \"cc77\": null, \"cc79\": null, \"cc81\": null, \"cc83\": null, \"cc85\": null, \"cc87\": null, \"cc89\": null, \"cc91\": null, \"cc119\": null, \"cc121\": null, \"cc123\": null, \"cc125\": null, \"cc127\": null, \"cc129\": null, \"cc131\": null, \"cc133\": null, \"cc135\": null, \"cc137\": null, \"cc139\": null, \"cc142\": null, \"cc144\": null, \"cc173\": null, \"cc175\": null, \"cc177\": null, \"cc179\": null, \"cc181\": null, \"cc183\": null, \"cc185\": null, \"cc187\": null, \"cc189\": null, \"cc191\": null, \"cc193\": null, \"cc195\": null, \"cc197\": null, \"cc225\": null, \"cc227\": null, \"cc229\": null, \"cc231\": null, \"cc233\": null, \"cc235\": null, \"cc237\": null, \"cc239\": null, \"cc241\": null, \"cc243\": null, \"cc245\": null, \"cc247\": null, \"cc249\": null}}', '{\"t1\": {\"date\": \"none\", \"score\": \"\"}, \"t2\": {\"date\": \"none\", \"score\": \"\"}, \"t3\": {\"date\": \"none\", \"score\": \"\"}, \"t4\": {\"date\": \"none\", \"score\": \"\"}}'),
(7, 'Jeniffer', 'Doe', 4, 'Female', 'Manila', 'Doe', 'Gi enroll lang bago', '{\"table1\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\"}, \"row2\": {\"10\": \"\", \"11\": \"\", \"12\": \"\", \"13\": \"\", \"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\"}, \"row3\": {\"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\", \"25\": \"\", \"26\": \"\", \"27\": \"\"}, \"row4\": {\"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\"}, \"row5\": {\"37\": \"\", \"38\": \"\", \"39\": \"\", \"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\"}, \"row6\": {\"46\": \"\", \"47\": \"\", \"48\": \"\", \"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\", \"53\": \"\", \"54\": \"\"}, \"row7\": {\"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\", \"61\": \"\", \"62\": \"\", \"63\": \"\"}, \"row8\": {\"64\": \"\", \"65\": \"\", \"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\"}, \"row9\": {\"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"77\": \"\", \"78\": \"\", \"79\": \"\", \"80\": \"\", \"81\": \"\"}, \"row10\": {\"82\": \"\", \"83\": \"\", \"84\": \"\", \"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\"}}, \"table2\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\", \"10\": \"\", \"11\": \"\", \"12\": \"\"}, \"row2\": {\"13\": \"\", \"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\", \"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\"}, \"row3\": {\"25\": \"\", \"26\": \"\", \"27\": \"\", \"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\"}, \"row4\": {\"37\": \"\", \"38\": \"\", \"39\": \"\", \"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\", \"46\": \"\", \"47\": \"\", \"48\": \"\"}, \"row5\": {\"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\", \"53\": \"\", \"54\": \"\", \"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\"}, \"row6\": {\"61\": \"\", \"62\": \"\", \"63\": \"\", \"64\": \"\", \"65\": \"\", \"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\"}, \"row7\": {\"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"77\": \"\", \"78\": \"\", \"79\": \"\", \"80\": \"\", \"81\": \"\", \"82\": \"\", \"83\": \"\", \"84\": \"\"}, \"row8\": {\"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\", \"91\": \"\", \"92\": \"\", \"93\": \"\", \"94\": \"\", \"95\": \"\", \"96\": \"\"}, \"row9\": {\"97\": \"\", \"98\": \"\", \"99\": \"\", \"100\": \"\", \"101\": \"\", \"102\": \"\", \"103\": \"\", \"104\": \"\", \"105\": \"\", \"106\": \"\", \"107\": \"\", \"108\": \"\"}, \"row10\": {\"109\": \"\", \"110\": \"\", \"111\": \"\", \"112\": \"\", \"113\": \"\", \"114\": \"\", \"115\": \"\", \"116\": \"\", \"117\": \"\", \"118\": \"\", \"119\": \"\", \"120\": \"\"}}, \"table3\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\", \"10\": \"\", \"11\": \"\", \"12\": \"\", \"13\": \"\"}, \"row2\": {\"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\", \"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\", \"25\": \"\", \"26\": \"\"}, \"row3\": {\"27\": \"\", \"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\", \"37\": \"\", \"38\": \"\", \"39\": \"\"}, \"row4\": {\"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\", \"46\": \"\", \"47\": \"\", \"48\": \"\", \"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\"}, \"row5\": {\"53\": \"\", \"54\": \"\", \"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\", \"61\": \"\", \"62\": \"\", \"63\": \"\", \"64\": \"\", \"65\": \"\"}, \"row6\": {\"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\", \"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"78\": \"\", \"79\": \"\"}, \"row7\": {\"80\": \"\", \"81\": \"\", \"82\": \"\", \"83\": \"\", \"84\": \"\", \"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\", \"91\": \"\", \"92\": \"\"}, \"row8\": {\"93\": \"\", \"94\": \"\", \"95\": \"\", \"96\": \"\", \"97\": \"\", \"98\": \"\", \"99\": \"\", \"100\": \"\", \"101\": \"\", \"102\": \"\", \"103\": \"\", \"104\": \"\", \"105\": \"\"}, \"row9\": {\"106\": \"\", \"107\": \"\", \"108\": \"\", \"109\": \"\", \"110\": \"\", \"111\": \"\", \"112\": \"\", \"113\": \"\", \"114\": \"\", \"115\": \"\", \"116\": \"\", \"117\": \"\", \"118\": \"\"}, \"row10\": {\"119\": \"\", \"120\": \"\", \"121\": \"\", \"122\": \"\", \"123\": \"\", \"124\": \"\", \"125\": \"\", \"126\": \"\", \"127\": \"\", \"128\": \"\", \"129\": \"\", \"130\": \"\", \"131\": \"\"}}}', '{\"table1\": {\"cc11\": null, \"cc13\": {\"notes\": [], \"updated\": \"\"}, \"cc15\": null, \"cc17\": null, \"cc19\": null, \"cc21\": null, \"cc23\": null, \"cc25\": null, \"cc27\": null, \"cc47\": null, \"cc49\": null, \"cc51\": null, \"cc53\": null, \"cc55\": null, \"cc57\": null, \"cc59\": null, \"cc61\": null, \"cc63\": null, \"cc83\": null, \"cc85\": null, \"cc87\": null, \"cc89\": null, \"cc91\": null, \"cc93\": null, \"cc95\": null, \"cc97\": null, \"cc99\": null, \"cc119\": null, \"cc121\": null, \"cc123\": null, \"cc125\": null, \"cc127\": null, \"cc129\": null, \"cc131\": null, \"cc133\": null, \"cc135\": null, \"cc155\": null, \"cc157\": null, \"cc159\": null, \"cc161\": null, \"cc163\": null, \"cc165\": null, \"cc167\": null, \"cc169\": null, \"cc171\": null}, \"table2\": {\"cc14\": null, \"cc16\": null, \"cc18\": null, \"cc20\": null, \"cc22\": null, \"cc24\": null, \"cc26\": null, \"cc28\": null, \"cc30\": null, \"cc32\": null, \"cc34\": null, \"cc36\": null, \"cc62\": null, \"cc64\": null, \"cc66\": null, \"cc68\": null, \"cc70\": null, \"cc72\": null, \"cc74\": null, \"cc76\": null, \"cc78\": null, \"cc80\": null, \"cc82\": null, \"cc84\": null, \"cc110\": null, \"cc112\": null, \"cc114\": null, \"cc116\": null, \"cc118\": null, \"cc120\": null, \"cc122\": null, \"cc124\": null, \"cc126\": null, \"cc128\": null, \"cc130\": null, \"cc132\": null, \"cc158\": null, \"cc160\": null, \"cc162\": null, \"cc164\": null, \"cc166\": null, \"cc168\": null, \"cc170\": null, \"cc172\": null, \"cc174\": null, \"cc176\": null, \"cc178\": null, \"cc180\": null, \"cc206\": null, \"cc208\": null, \"cc210\": null, \"cc212\": null, \"cc214\": null, \"cc216\": null, \"cc218\": null, \"cc220\": null, \"cc222\": null, \"cc224\": null, \"cc226\": null, \"cc228\": null}, \"table3\": {\"cc15\": null, \"cc17\": null, \"cc19\": null, \"cc21\": null, \"cc23\": null, \"cc25\": null, \"cc27\": null, \"cc29\": null, \"cc31\": null, \"cc33\": null, \"cc35\": null, \"cc37\": null, \"cc39\": null, \"cc67\": null, \"cc69\": null, \"cc71\": null, \"cc73\": null, \"cc75\": null, \"cc77\": null, \"cc79\": null, \"cc81\": null, \"cc83\": null, \"cc85\": null, \"cc87\": null, \"cc89\": null, \"cc91\": null, \"cc119\": null, \"cc121\": null, \"cc123\": null, \"cc125\": null, \"cc127\": null, \"cc129\": null, \"cc131\": null, \"cc133\": null, \"cc135\": null, \"cc137\": null, \"cc139\": null, \"cc142\": null, \"cc144\": null, \"cc173\": null, \"cc175\": null, \"cc177\": null, \"cc179\": null, \"cc181\": null, \"cc183\": null, \"cc185\": null, \"cc187\": null, \"cc189\": null, \"cc191\": null, \"cc193\": null, \"cc195\": null, \"cc197\": null, \"cc225\": null, \"cc227\": null, \"cc229\": null, \"cc231\": null, \"cc233\": null, \"cc235\": null, \"cc237\": null, \"cc239\": null, \"cc241\": null, \"cc243\": null, \"cc245\": null, \"cc247\": null, \"cc249\": null}}', '{\"t1\": {\"date\": \"2018-03-05\", \"score\": \"1\"}, \"t2\": {\"date\": \"none\", \"score\": \"\"}, \"t3\": {\"date\": \"none\", \"score\": \"\"}, \"t4\": {\"date\": \"none\", \"score\": \"\"}}'),
(22, 'John', 'Cena', 100, 'Male', 'Manila', 'Dela Cruz', 'New Enroll', '{\"table1\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\"}, \"row2\": {\"10\": \"\", \"11\": \"\", \"12\": \"\", \"13\": \"\", \"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\"}, \"row3\": {\"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\", \"25\": \"\", \"26\": \"\", \"27\": \"\"}, \"row4\": {\"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\"}, \"row5\": {\"37\": \"\", \"38\": \"\", \"39\": \"\", \"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\"}, \"row6\": {\"46\": \"\", \"47\": \"\", \"48\": \"\", \"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\", \"53\": \"\", \"54\": \"\"}, \"row7\": {\"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\", \"61\": \"\", \"62\": \"\", \"63\": \"\"}, \"row8\": {\"64\": \"\", \"65\": \"\", \"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\"}, \"row9\": {\"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"77\": \"\", \"78\": \"\", \"79\": \"\", \"80\": \"\", \"81\": \"\"}, \"row10\": {\"82\": \"\", \"83\": \"\", \"84\": \"\", \"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\"}}, \"table2\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\", \"10\": \"\", \"11\": \"\", \"12\": \"\"}, \"row2\": {\"13\": \"\", \"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\", \"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\"}, \"row3\": {\"25\": \"\", \"26\": \"\", \"27\": \"\", \"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\"}, \"row4\": {\"37\": \"\", \"38\": \"\", \"39\": \"\", \"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\", \"46\": \"\", \"47\": \"\", \"48\": \"\"}, \"row5\": {\"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\", \"53\": \"\", \"54\": \"\", \"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\"}, \"row6\": {\"61\": \"\", \"62\": \"\", \"63\": \"\", \"64\": \"\", \"65\": \"\", \"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\"}, \"row7\": {\"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"77\": \"\", \"78\": \"\", \"79\": \"\", \"80\": \"\", \"81\": \"\", \"82\": \"\", \"83\": \"\", \"84\": \"\"}, \"row8\": {\"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\", \"91\": \"\", \"92\": \"\", \"93\": \"\", \"94\": \"\", \"95\": \"\", \"96\": \"\"}, \"row9\": {\"97\": \"\", \"98\": \"\", \"99\": \"\", \"100\": \"\", \"101\": \"\", \"102\": \"\", \"103\": \"\", \"104\": \"\", \"105\": \"\", \"106\": \"\", \"107\": \"\", \"108\": \"\"}, \"row10\": {\"109\": \"\", \"110\": \"\", \"111\": \"\", \"112\": \"\", \"113\": \"\", \"114\": \"\", \"115\": \"\", \"116\": \"\", \"117\": \"\", \"118\": \"\", \"119\": \"\", \"120\": \"\"}}, \"table3\": {\"row1\": {\"1\": \"\", \"2\": \"\", \"3\": \"\", \"4\": \"\", \"5\": \"\", \"6\": \"\", \"7\": \"\", \"8\": \"\", \"9\": \"\", \"10\": \"\", \"11\": \"\", \"12\": \"\", \"13\": \"\"}, \"row2\": {\"14\": \"\", \"15\": \"\", \"16\": \"\", \"17\": \"\", \"18\": \"\", \"19\": \"\", \"20\": \"\", \"21\": \"\", \"22\": \"\", \"23\": \"\", \"24\": \"\", \"25\": \"\", \"26\": \"\"}, \"row3\": {\"27\": \"\", \"28\": \"\", \"29\": \"\", \"30\": \"\", \"31\": \"\", \"32\": \"\", \"33\": \"\", \"34\": \"\", \"35\": \"\", \"36\": \"\", \"37\": \"\", \"38\": \"\", \"39\": \"\"}, \"row4\": {\"40\": \"\", \"41\": \"\", \"42\": \"\", \"43\": \"\", \"44\": \"\", \"45\": \"\", \"46\": \"\", \"47\": \"\", \"48\": \"\", \"49\": \"\", \"50\": \"\", \"51\": \"\", \"52\": \"\"}, \"row5\": {\"53\": \"\", \"54\": \"\", \"55\": \"\", \"56\": \"\", \"57\": \"\", \"58\": \"\", \"59\": \"\", \"60\": \"\", \"61\": \"\", \"62\": \"\", \"63\": \"\", \"64\": \"\", \"65\": \"\"}, \"row6\": {\"66\": \"\", \"67\": \"\", \"68\": \"\", \"69\": \"\", \"70\": \"\", \"71\": \"\", \"72\": \"\", \"73\": \"\", \"74\": \"\", \"75\": \"\", \"76\": \"\", \"78\": \"\", \"79\": \"\"}, \"row7\": {\"80\": \"\", \"81\": \"\", \"82\": \"\", \"83\": \"\", \"84\": \"\", \"85\": \"\", \"86\": \"\", \"87\": \"\", \"88\": \"\", \"89\": \"\", \"90\": \"\", \"91\": \"\", \"92\": \"\"}, \"row8\": {\"93\": \"\", \"94\": \"\", \"95\": \"\", \"96\": \"\", \"97\": \"\", \"98\": \"\", \"99\": \"\", \"100\": \"\", \"101\": \"\", \"102\": \"\", \"103\": \"\", \"104\": \"\", \"105\": \"\"}, \"row9\": {\"106\": \"\", \"107\": \"\", \"108\": \"\", \"109\": \"\", \"110\": \"\", \"111\": \"\", \"112\": \"\", \"113\": \"\", \"114\": \"\", \"115\": \"\", \"116\": \"\", \"117\": \"\", \"118\": \"\"}, \"row10\": {\"119\": \"\", \"120\": \"\", \"121\": \"\", \"122\": \"\", \"123\": \"\", \"124\": \"\", \"125\": \"\", \"126\": \"\", \"127\": \"\", \"128\": \"\", \"129\": \"\", \"130\": \"\", \"131\": \"\"}}}', '{\"table1\": {\"cc11\": null, \"cc13\": null, \"cc15\": null, \"cc17\": null, \"cc19\": null, \"cc21\": null, \"cc23\": null, \"cc25\": null, \"cc27\": null, \"cc47\": null, \"cc49\": null, \"cc51\": null, \"cc53\": null, \"cc55\": null, \"cc57\": null, \"cc59\": null, \"cc61\": null, \"cc63\": null, \"cc83\": null, \"cc85\": null, \"cc87\": null, \"cc89\": null, \"cc91\": null, \"cc93\": null, \"cc95\": null, \"cc97\": null, \"cc99\": null, \"cc119\": null, \"cc121\": null, \"cc123\": null, \"cc125\": null, \"cc127\": null, \"cc129\": null, \"cc131\": null, \"cc133\": null, \"cc135\": null, \"cc155\": null, \"cc157\": null, \"cc159\": null, \"cc161\": null, \"cc163\": null, \"cc165\": null, \"cc167\": null, \"cc169\": null, \"cc171\": null}, \"table2\": {\"cc14\": null, \"cc16\": null, \"cc18\": null, \"cc20\": null, \"cc22\": null, \"cc24\": null, \"cc26\": null, \"cc28\": null, \"cc30\": null, \"cc32\": null, \"cc34\": null, \"cc36\": null, \"cc62\": null, \"cc64\": null, \"cc66\": null, \"cc68\": null, \"cc70\": null, \"cc72\": null, \"cc74\": null, \"cc76\": null, \"cc78\": null, \"cc80\": null, \"cc82\": null, \"cc84\": null, \"cc110\": null, \"cc112\": null, \"cc114\": null, \"cc116\": null, \"cc118\": null, \"cc120\": null, \"cc122\": null, \"cc124\": null, \"cc126\": null, \"cc128\": null, \"cc130\": null, \"cc132\": null, \"cc158\": null, \"cc160\": null, \"cc162\": null, \"cc164\": null, \"cc166\": null, \"cc168\": null, \"cc170\": null, \"cc172\": null, \"cc174\": null, \"cc176\": null, \"cc178\": null, \"cc180\": null, \"cc206\": null, \"cc208\": null, \"cc210\": null, \"cc212\": null, \"cc214\": null, \"cc216\": null, \"cc218\": null, \"cc220\": null, \"cc222\": null, \"cc224\": null, \"cc226\": null, \"cc228\": null}, \"table3\": {\"cc15\": null, \"cc17\": null, \"cc19\": null, \"cc21\": null, \"cc23\": null, \"cc25\": null, \"cc27\": null, \"cc29\": null, \"cc31\": null, \"cc33\": null, \"cc35\": null, \"cc37\": null, \"cc39\": null, \"cc67\": null, \"cc69\": null, \"cc71\": null, \"cc73\": null, \"cc75\": null, \"cc77\": null, \"cc79\": null, \"cc81\": null, \"cc83\": null, \"cc85\": null, \"cc87\": null, \"cc89\": null, \"cc91\": null, \"cc119\": null, \"cc121\": null, \"cc123\": null, \"cc125\": null, \"cc127\": null, \"cc129\": null, \"cc131\": null, \"cc133\": null, \"cc135\": null, \"cc137\": null, \"cc139\": null, \"cc142\": null, \"cc144\": null, \"cc173\": null, \"cc175\": null, \"cc177\": null, \"cc179\": null, \"cc181\": null, \"cc183\": null, \"cc185\": null, \"cc187\": null, \"cc189\": null, \"cc191\": null, \"cc193\": null, \"cc195\": null, \"cc197\": null, \"cc225\": null, \"cc227\": null, \"cc229\": null, \"cc231\": null, \"cc233\": null, \"cc235\": null, \"cc237\": null, \"cc239\": null, \"cc241\": null, \"cc243\": null, \"cc245\": null, \"cc247\": null, \"cc249\": null}}', '{\"t1\": {\"date\": \"none\", \"score\": \"\"}, \"t2\": {\"date\": \"none\", \"score\": \"\"}, \"t3\": {\"date\": \"none\", \"score\": \"\"}, \"t4\": {\"date\": \"none\", \"score\": \"\"}}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
