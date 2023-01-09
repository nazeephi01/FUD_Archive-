-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2010 at 03:36 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `Id` int(100) NOT NULL auto_increment,
  `Fullname` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`Id`, `Fullname`, `Username`, `Password`, `Department`) VALUES
(1, 'super', 'super', 'super', 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `DeptId` int(100) NOT NULL auto_increment,
  `DeptName` varchar(100) NOT NULL,
  `SchoolName` varchar(100) NOT NULL,
  PRIMARY KEY  (`DeptId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `departments`
--


-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(100) NOT NULL auto_increment,
  `MatricNo` varchar(100) NOT NULL,
  `ProjectAim` text NOT NULL,
  `ProjectTittle` varchar(100) NOT NULL,
  `ProjectObj` text NOT NULL,
  `ProjectYear` varchar(100) NOT NULL,
  `SupervisorId` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `ProjectMain` varchar(100) NOT NULL,
  `ProjectSupervisor` varchar(100) NOT NULL,
  PRIMARY KEY  (`projectId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `projects`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `Id` int(100) NOT NULL auto_increment,
  `MatricNo` varchar(100) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`),
  UNIQUE KEY `MatricNo` (`MatricNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_list`
--


-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `SupervisorId` int(100) NOT NULL auto_increment,
  `Fullname` varchar(100) NOT NULL,
  `Tittle` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY  (`SupervisorId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `supervisors`
--

