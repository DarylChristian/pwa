-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2016 at 05:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acn_pwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwa_buckets`
--

CREATE TABLE IF NOT EXISTS `pwa_buckets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bucket_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL,
  `stage` varchar(1) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `pwa_buckets`
--

INSERT INTO `pwa_buckets` (`id`, `bucket_name`, `class_id`, `author`, `created_date`, `modified_by`, `modified_date`, `stage`, `status`) VALUES
(1, 'Vacation Leave', 1, 1, '2016-02-16 15:20:54', 1, '2016-02-16 15:20:54', '', 1),
(2, 'Sick Leave', 1, 1, '2016-02-16 15:21:02', 1, '2016-02-16 15:21:02', '', 1),
(3, 'Emergency Leave', 1, 1, '2016-02-16 15:21:23', 1, '2016-02-16 15:21:23', '', 1),
(4, 'Holiday', 1, 1, '2016-02-16 15:21:36', 1, '2016-02-16 15:21:36', '', 1),
(5, 'APE', 1, 1, '2016-02-16 15:21:45', 1, '2016-02-16 15:21:45', '', 1),
(6, 'Training', 1, 1, '2016-02-16 15:21:49', 1, '2016-02-16 15:21:49', '', 1),
(7, 'Alnova Hints and Tips', 2, 1, '2016-02-16 15:24:18', 1, '2016-02-16 15:24:18', '', 1),
(8, 'AM Daily Task List', 2, 1, '2016-02-16 15:25:32', 1, '2016-02-16 15:25:32', '', 1),
(9, 'Asset Custodian', 2, 1, '2016-02-16 15:25:39', 1, '2016-02-16 15:25:39', '', 1),
(10, 'BCM', 2, 1, '2016-02-16 15:25:43', 1, '2016-02-16 15:25:43', '', 1),
(11, 'Capacity Planning', 2, 1, '2016-02-16 15:25:46', 1, '2016-02-16 15:25:46', '', 1),
(12, 'CM', 2, 1, '2016-02-16 15:25:50', 1, '2016-02-16 15:25:50', '', 1),
(13, 'DAR', 2, 1, '2016-02-16 15:25:52', 1, '2016-02-16 15:25:52', '', 1),
(14, 'DP', 2, 1, '2016-02-16 15:25:53', 1, '2016-02-16 15:25:53', '', 1),
(15, 'EFAS', 2, 1, '2016-02-16 15:25:56', 1, '2016-02-16 15:25:56', '', 1),
(16, 'Financial Management', 2, 1, '2016-02-16 15:26:03', 1, '2016-02-16 15:26:03', '', 1),
(17, 'Internal Ticket Audit', 2, 1, '2016-02-16 15:26:10', 1, '2016-02-16 15:26:10', '', 1),
(18, 'ISMS', 2, 1, '2016-02-16 15:26:12', 1, '2016-02-16 15:26:12', '', 1),
(19, 'Issues and Risk Management', 2, 1, '2016-02-16 15:26:23', 1, '2016-02-16 15:26:23', '', 1),
(20, 'KT Creation', 2, 1, '2016-02-16 15:26:58', 1, '2016-02-16 15:26:58', '', 1),
(21, 'KT Session', 2, 1, '2016-02-16 15:27:05', 1, '2016-02-16 15:27:05', '', 1),
(22, 'Metrics Generation', 2, 1, '2016-02-16 15:27:09', 1, '2016-02-16 15:27:09', '', 1),
(23, 'Oversight', 2, 1, '2016-02-16 15:27:14', 1, '2016-02-16 15:27:14', '', 1),
(24, 'Performance Management', 2, 1, '2016-02-16 15:27:18', 1, '2016-02-16 15:27:18', '', 1),
(25, 'RIRO', 2, 1, '2016-02-16 15:27:20', 1, '2016-02-16 15:27:20', '', 1),
(26, 'Sharepoint Administration', 2, 1, '2016-02-16 15:27:30', 1, '2016-02-16 15:27:30', '', 1),
(27, 'Skills Matrix and Assessment', 2, 1, '2016-02-16 15:27:38', 1, '2016-02-16 15:27:38', '', 1),
(28, 'SOX Audit', 2, 1, '2016-02-16 15:27:41', 1, '2016-02-16 15:27:41', '', 1),
(29, 'Succession Planning', 2, 1, '2016-02-16 15:27:47', 1, '2016-02-16 15:27:47', '', 1),
(30, 'Team Meetings/Town Hall', 2, 1, '2016-02-16 15:28:02', 1, '2016-02-16 15:28:02', '', 1),
(31, 'Time Reporting', 2, 1, '2016-02-16 15:29:50', 1, '2016-02-16 15:29:50', '', 1),
(32, 'Training Coordinator', 2, 1, '2016-02-16 15:29:58', 1, '2016-02-16 15:29:58', '', 1),
(33, 'Visa Processing', 2, 1, '2016-02-16 15:30:03', 1, '2016-02-16 15:30:03', '', 1),
(34, 'CI - LAN Cleanup', 2, 1, '2016-02-16 15:31:02', 1, '2016-02-16 15:31:02', '', 1),
(35, 'CI - LEM', 2, 1, '2016-02-16 15:31:05', 1, '2016-02-16 15:31:05', '', 1),
(36, 'CI - SCOPE', 2, 1, '2016-02-16 15:31:09', 1, '2016-02-16 15:31:09', '', 1),
(37, 'CI - Test Batch', 2, 1, '2016-02-16 15:31:27', 1, '2016-02-16 15:31:27', '', 1),
(38, 'BA - BA Meeting', 3, 1, '2016-02-16 15:32:19', 1, '2016-02-16 15:32:19', '', 1),
(39, 'BA - BA Status Rpt', 3, 1, '2016-02-16 15:32:31', 1, '2016-02-16 15:32:31', '', 1),
(40, 'BA - Incident/Service Request Extract', 3, 1, '2016-02-16 15:33:02', 1, '2016-02-16 15:33:02', '', 1),
(41, 'BA - Master Ticket List', 3, 1, '2016-02-16 15:33:36', 1, '2016-02-16 15:33:36', '', 1),
(42, 'BA - Reassigned Tickets', 3, 1, '2016-02-16 15:35:11', 1, '2016-02-16 15:35:11', '', 1),
(43, 'BA - Ticket Analysis', 3, 1, '2016-02-16 15:35:24', 1, '2016-02-16 15:35:24', '', 1),
(44, 'LEM - Emerg Lib Cleardown', 3, 1, '2016-02-16 15:35:38', 1, '2016-02-16 15:35:38', '', 1),
(45, 'LEM - Endevor Cleanup Report', 3, 1, '2016-02-16 15:35:48', 1, '2016-02-16 15:35:48', '', 1),
(46, 'LEM - Endevor Package Approval/Exec', 3, 1, '2016-02-16 15:36:03', 1, '2016-02-16 15:36:03', '', 1),
(47, 'LEM - Endevor Report', 3, 1, '2016-02-16 15:36:12', 1, '2016-02-16 15:36:12', '', 1),
(48, 'LEM - Envt Cleardown / Restore', 3, 1, '2016-02-16 15:45:13', 1, '2016-02-16 15:45:13', '', 1),
(49, 'LEM - FT User Setup', 3, 1, '2016-02-16 15:45:28', 1, '2016-02-16 15:45:28', '', 1),
(50, 'LEM - Product Setup', 3, 1, '2016-02-16 15:45:37', 1, '2016-02-16 15:45:37', '', 1),
(51, 'LEM - Retrofit', 3, 1, '2016-02-16 15:45:49', 1, '2016-02-16 15:45:49', '', 1),
(52, 'LEM - UAT Prep', 3, 1, '2016-02-16 15:46:00', 1, '2016-02-16 15:46:00', '', 1),
(53, 'Report - Daily Service', 3, 1, '2016-02-16 15:46:18', 1, '2016-02-16 15:46:18', '', 1),
(54, 'Report - Exec Sum', 3, 1, '2016-02-16 15:46:22', 1, '2016-02-16 15:46:22', '', 1),
(55, 'Report - FE Stat', 3, 1, '2016-02-16 15:46:29', 1, '2016-02-16 15:46:29', '', 1),
(56, 'Report - Alnova R5 BC', 3, 1, '2016-02-16 15:46:34', 1, '2016-02-16 15:46:34', '', 1),
(57, 'Report - Batch Owner', 3, 1, '2016-02-16 15:46:39', 1, '2016-02-16 15:46:39', '', 1),
(58, 'Report - Fail Strip', 3, 1, '2016-02-16 15:46:44', 1, '2016-02-16 15:46:44', '', 1),
(59, 'Report - Weekly Batch/FOF Mgt', 3, 1, '2016-02-16 15:46:54', 1, '2016-02-16 15:46:54', '', 1),
(60, 'Report - Accruals CV Amt Discrepancy', 3, 1, '2016-02-16 15:47:05', 1, '2016-02-16 15:47:05', '', 1),
(61, 'Report - Comm', 3, 1, '2016-02-16 15:47:08', 1, '2016-02-16 15:47:08', '', 1),
(62, 'Report - Month End Comm', 3, 1, '2016-02-16 15:47:13', 1, '2016-02-16 15:47:13', '', 1),
(63, 'Report - OLDBOND and MIREPORT', 3, 1, '2016-02-16 15:47:24', 1, '2016-02-16 15:47:24', '', 1),
(64, 'Report - AM Ticket Status Report', 3, 1, '2016-02-16 15:47:32', 1, '2016-02-16 15:47:32', '', 1),
(65, 'Report - AM Weekly Scorecard', 3, 1, '2016-02-16 15:47:46', 1, '2016-02-16 15:47:46', '', 1),
(66, 'Report - AM Monthly Boardpack', 3, 1, '2016-02-16 15:47:55', 1, '2016-02-16 15:47:55', '', 1),
(67, 'Report - Customer and Accounts', 3, 1, '2016-02-16 15:48:02', 1, '2016-02-16 15:48:02', '', 1),
(68, 'Report - Batch Dashboard', 3, 1, '2016-02-16 15:48:08', 1, '2016-02-16 15:48:08', '', 1),
(69, 'Report - PM325', 3, 1, '2016-02-16 15:48:19', 1, '2016-02-16 15:48:19', '', 1),
(70, 'REL - Change Related Incidents', 3, 1, '2016-02-16 15:48:46', 1, '2016-02-16 15:48:46', '', 1),
(71, 'REL - Change Ticket Review', 3, 1, '2016-02-16 15:48:56', 1, '2016-02-16 15:48:56', '', 1),
(72, 'REL - Change Ticket Status Update', 3, 1, '2016-02-16 15:49:05', 1, '2016-02-16 15:49:05', '', 1),
(73, 'REL - Change Tickets Pending Closure', 3, 1, '2016-02-16 15:49:18', 1, '2016-02-16 15:49:18', '', 1),
(74, 'REL - Delinquent Changes', 3, 1, '2016-02-16 15:50:00', 1, '2016-02-16 15:50:00', '', 1),
(75, 'REL - FE Release Deployment', 3, 1, '2016-02-16 15:50:10', 1, '2016-02-16 15:50:10', '', 1),
(76, 'REL - FE Release PreDeployment', 3, 1, '2016-02-16 15:50:18', 1, '2016-02-16 15:50:18', '', 1),
(77, 'REL - PDV', 3, 1, '2016-02-16 15:50:22', 1, '2016-02-16 15:50:22', '', 1),
(78, 'REL - PreCAB Agenda', 3, 1, '2016-02-16 15:50:34', 1, '2016-02-16 15:50:34', '', 1),
(79, 'SI - SI Status Report', 3, 1, '2016-02-16 15:50:44', 1, '2016-02-16 15:50:44', '', 1),
(80, 'T Batch Sup - BBUK SYT', 3, 1, '2016-02-16 15:51:03', 1, '2016-02-16 15:51:03', '', 1),
(81, 'T Batch Sup - NI SYT', 3, 1, '2016-02-16 15:51:07', 1, '2016-02-16 15:51:07', '', 1),
(82, 'T Batch Sup - POFS SYT', 3, 1, '2016-02-16 15:51:15', 1, '2016-02-16 15:51:15', '', 1),
(83, 'T Batch Sup - POFS UAT', 3, 1, '2016-02-16 15:51:19', 1, '2016-02-16 15:51:19', '', 1),
(84, 'T Batch Sup - SYT Coordination', 3, 1, '2016-02-16 15:51:26', 1, '2016-02-16 15:51:26', '', 1),
(85, 'T Batch Sup - UAT Batch Support', 3, 1, '2016-02-16 15:51:34', 1, '2016-02-16 15:51:34', '', 1),
(86, 'T Batch Sup - UAT Coordination', 3, 1, '2016-02-16 15:51:42', 1, '2016-02-16 15:51:42', '', 1),
(87, 'Prod Sup - Oncall Support', 4, 1, '2016-02-16 15:52:54', 1, '2016-02-16 15:52:54', '', 1),
(88, 'Prod Sup - Onsite Support', 5, 1, '2016-02-16 15:53:17', 1, '2016-02-16 15:53:17', '', 1),
(89, 'Prod Sup - Onsite Support EFAS', 5, 1, '2016-02-16 15:53:26', 1, '2016-02-16 15:53:26', '', 1),
(90, 'Prod Sup - Adhoc Prod Support', 5, 1, '2016-02-16 15:53:33', 1, '2016-02-16 15:53:33', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwa_bucket_class`
--

CREATE TABLE IF NOT EXISTS `pwa_bucket_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pwa_bucket_class`
--

INSERT INTO `pwa_bucket_class` (`id`, `class_name`, `author`, `created_date`, `modified_by`, `modified_date`, `status`) VALUES
(1, 'OOO', 1, '2016-02-16 14:30:59', 1, '2016-02-16 14:30:59', 1),
(2, 'Administrative', 1, '2016-02-16 14:30:59', 1, '2016-02-16 14:30:59', 1),
(3, 'Delivery', 1, '2016-02-16 14:33:30', 1, '2016-02-16 14:33:30', 1),
(4, 'On-call Support', 1, '2016-02-16 14:33:30', 1, '2016-02-16 14:33:30', 1),
(5, 'On-site Support', 1, '2016-02-16 14:35:01', 1, '2016-02-16 14:35:01', 1),
(6, 'Ticket', 1, '2016-02-16 14:35:01', 1, '2016-02-16 14:35:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwa_personal_buckets`
--

CREATE TABLE IF NOT EXISTS `pwa_personal_buckets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `bucket_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `type2` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `ticket_name` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pwa_personal_buckets`
--

INSERT INTO `pwa_personal_buckets` (`id`, `class_id`, `bucket_id`, `type`, `type2`, `stage_id`, `ticket_name`, `author`, `created_date`, `modified_by`, `modified_date`, `status`) VALUES
(1, 1, 5, 0, 0, 0, '', 1, '2016-02-20 16:10:28', 1, '2016-02-20 16:10:28', 1),
(2, 1, 2, 0, 0, 0, '', 1, '2016-02-20 17:37:09', 1, '2016-02-20 17:37:09', 1),
(3, 2, 21, 0, 0, 0, '', 1, '2016-02-20 17:41:09', 1, '2016-02-20 17:41:09', 1),
(4, 3, 53, 0, 0, 0, '', 1, '2016-02-20 17:43:50', 1, '2016-02-20 17:43:50', 1),
(5, 4, 87, 1, 0, 0, 'ZQMZ0035', 1, '2016-02-20 17:51:41', 1, '2016-02-20 17:51:41', 1),
(6, 4, 87, 1, 0, 0, 'ZQBGZ140', 1, '2016-02-20 17:59:38', 1, '2016-02-20 17:59:38', 1),
(7, 5, 88, 1, 0, 0, 'ZQMZ0035', 1, '2016-02-20 18:01:21', 1, '2016-02-20 18:01:21', 1),
(8, 5, 89, 0, 0, 0, '', 1, '2016-02-20 18:01:31', 1, '2016-02-20 18:01:31', 1),
(13, 6, 3, 1, 3, 1, '1', 1, '2016-02-21 15:47:47', 1, '2016-02-21 15:47:47', 1),
(14, 6, 3, 1, 3, 4, '1', 1, '2016-02-21 15:53:31', 1, '2016-02-21 15:53:31', 1),
(15, 6, 3, 1, 3, 6, '1', 1, '2016-02-21 16:00:06', 1, '2016-02-21 16:00:06', 1),
(16, 6, 1, 1, 1, 3, '4', 1, '2016-02-21 16:13:07', 1, '2016-02-21 16:13:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwa_supervisor`
--

CREATE TABLE IF NOT EXISTS `pwa_supervisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modify_date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pwa_tickets_added`
--

CREATE TABLE IF NOT EXISTS `pwa_tickets_added` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_name` varchar(20) NOT NULL,
  `ticket_type` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pwa_tickets_added`
--

INSERT INTO `pwa_tickets_added` (`id`, `ticket_name`, `ticket_type`, `added_by`, `created_date`, `modified_by`, `modified_date`, `status`) VALUES
(1, 'ZQBGZ350', 3, 1, '2016-02-21 15:47:47', 1, '2016-02-21 15:47:47', 1),
(4, 'PR123654', 1, 1, '2016-02-21 16:13:07', 1, '2016-02-21 16:13:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwa_ticket_stage`
--

CREATE TABLE IF NOT EXISTS `pwa_ticket_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `stage` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modify_date` timestamp NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pwa_ticket_stage`
--

INSERT INTO `pwa_ticket_stage` (`id`, `name`, `stage`, `author`, `created_date`, `modified_by`, `modify_date`, `status`) VALUES
(1, 'RCA', 1, 1, '2016-02-16 16:18:40', 1, '2016-02-16 16:18:40', 1),
(2, 'Rqt Gath', 1, 1, '2016-02-16 16:18:40', 1, '2016-02-16 16:18:40', 1),
(3, 'Analysis', 1, 1, '2016-02-16 16:18:58', 1, '2016-02-16 16:18:58', 1),
(4, 'Code', 2, 1, '2016-02-16 16:18:58', 1, '2016-02-16 16:18:58', 1),
(5, 'Code Rework', 2, 1, '2016-02-16 16:19:23', 1, '2016-02-16 16:19:23', 1),
(6, 'UTP', 2, 1, '2016-02-16 16:19:23', 1, '2016-02-16 16:19:23', 1),
(7, 'UTP Rework', 2, 1, '2016-02-16 16:19:57', 1, '2016-02-16 16:19:57', 1),
(8, 'UT Exec', 2, 1, '2016-02-16 16:19:57', 1, '2016-02-16 16:19:57', 1),
(9, 'UT Exec Rework', 2, 1, '2016-02-16 16:20:21', 1, '2016-02-16 16:20:21', 1),
(10, 'AT Prep', 2, 1, '2016-02-16 16:20:21', 1, '2016-02-16 16:20:21', 1),
(11, 'AT Prep Rework', 2, 1, '2016-02-16 16:20:57', 1, '2016-02-16 16:20:57', 1),
(12, 'AT Exec', 2, 1, '2016-02-16 16:20:57', 1, '2016-02-16 16:20:57', 1),
(13, 'UAT Support', 2, 1, '2016-02-16 16:21:21', 1, '2016-02-16 16:21:21', 1),
(14, 'Deploy', 2, 1, '2016-02-16 16:21:21', 1, '2016-02-16 16:21:21', 1),
(15, 'PDV', 2, 1, '2016-02-16 16:21:40', 1, '2016-02-16 16:21:40', 1),
(16, 'Code Review', 3, 1, '2016-02-16 16:21:40', 1, '2016-02-16 16:21:40', 1),
(17, 'UTP Review', 3, 1, '2016-02-16 16:22:06', 1, '2016-02-16 16:22:06', 1),
(18, 'UT Exec Review', 3, 1, '2016-02-16 16:22:06', 1, '2016-02-16 16:22:06', 1),
(19, 'AT Prep Review', 3, 1, '2016-02-16 16:22:35', 1, '2016-02-16 16:22:35', 1),
(20, 'AT Exec Review', 3, 1, '2016-02-16 16:22:35', 1, '2016-02-16 16:22:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwa_ticket_type`
--

CREATE TABLE IF NOT EXISTS `pwa_ticket_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pwa_ticket_type`
--

INSERT INTO `pwa_ticket_type` (`id`, `name`, `author`, `created_date`, `modified_by`, `modified_date`, `status`) VALUES
(1, 'FOF', 1, '2016-02-16 16:16:14', 1, '2016-02-16 16:16:14', 1),
(2, 'PROB', 1, '2016-02-16 16:16:14', 1, '2016-02-16 16:16:14', 1),
(3, 'REQ', 1, '2016-02-16 16:16:30', 1, '2016-02-16 16:16:30', 1),
(4, 'SIP', 1, '2016-02-16 16:16:30', 1, '2016-02-16 16:16:30', 1),
(5, 'CR', 1, '2016-02-16 16:16:39', 1, '2016-02-16 16:16:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwa_users`
--

CREATE TABLE IF NOT EXISTS `pwa_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(200) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `mn` varchar(20) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `created_date` timestamp NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pwa_users`
--

INSERT INTO `pwa_users` (`id`, `eid`, `email`, `pw`, `fn`, `mn`, `ln`, `author`, `created_date`, `modified_by`, `modified_date`, `level`, `status`) VALUES
(1, 'daryl.c.m.cabacungan', 'daryl.c.m.cabacungan@accenture.com', 'dacamon', 'Daryl Christian', 'M.', 'Cabacungan', 1, '2016-02-16 14:23:32', 1, '2016-02-16 14:23:32', 'father', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
