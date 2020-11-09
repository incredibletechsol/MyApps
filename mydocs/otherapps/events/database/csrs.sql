-- phpMyAdmin SQL Dump
-- version 2.6.4-pl4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 19, 2015 at 03:15 PM
-- Server version: 5.5.21
-- PHP Version: 5.1.1
-- 
-- Database: `csrs`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `dept_photo_galleries`
-- 

CREATE TABLE `dept_photo_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `shortdescription` varchar(50) NOT NULL,
  `dept` varchar(500) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- 
-- Dumping data for table `dept_photo_galleries`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `newsevents`
-- 

CREATE TABLE `newsevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `shortdescription` varchar(50) NOT NULL,
  `longdescription` varchar(500) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `newsevents`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (100, 'admin', '123456', 'Amit', 'Bhalerao');
