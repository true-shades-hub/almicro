-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2019 at 04:54 AM
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
-- Database: `almicro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL DEFAULT '0',
  `user` varchar(15) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'molik', 'molik');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_titile` text NOT NULL,
  `b_url` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) NOT NULL DEFAULT '',
  `descr` varchar(200) DEFAULT NULL,
  `color` varchar(20) NOT NULL DEFAULT '',
  `rorder` int(11) NOT NULL DEFAULT '0',
  `fcolor` varchar(20) NOT NULL DEFAULT '',
  `path` varchar(200) NOT NULL DEFAULT '',
  `keywords` text,
  `titlewords` text,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `category`, `descr`, `color`, `rorder`, `fcolor`, `path`, `keywords`, `titlewords`) VALUES
(7, 'Metallurgical Microscope12', '', '', 4, '', 'product/category/Metallurgical Microscope/25.jpg', 'Metallurgical Microscope, Metallurgical Microscope Manufacturers, Metallurgical Microscope Exporters, Metallurgical Microscope Suppliers, Metallurgical Microscope India, Indian Metallurgical Microscope, Metallurgical Microscope Ambala, Metallurgy Microscope, Metallurgy Microscope Manufacturers, Metallurgy Microscope Exporters, Metallurgy Microscope Suppliers, Metallurgy Microscope India, Indian Metallurgy Microscope, Metallurgy Microscope Ambala ', 'Metallurgical Microscope, Metallurgical Microscope Manufacturers, Metallurgical Microscope Exporters, Metallurgical Microscope Suppliers, Metallurgical Microscope India, Metallurgical Microscope Ambala '),
(3, 'Accessories For Microscope', '', '', 32, '', 'product/category/Accessories For Microscope/22.jpg', 'Accessories For Microscope, Accessories For Microscope Manufacturers, Accessories For Microscope Exporters, Accessories For Microscope Suppliers, Accessories For Microscope India, Indian Accessories For Microscope, Accessories For Microscope Ambala, Pin Type Lamp, Bio Thermal Heating Stage for Microscope, Double Demonstration Eye piece, Camera Lucida (Prism type) complete in box, Camera Lucida (Mirror type) complete in box, Pointer Eye piece 10x in box, Plano concave reflector 50mm, Mechanical stage, Condensor unit with iris diaphragm, Objective 100x (SL) oil immersion (A grade), Objective 100x (SL) oil immersion (B grade), Objective 45x (SL) (A grade), Objective 45x (SL) (B grade), Objective 10x (SL) (A grade), Objective 10x (SL) (B grade), Objective 5x, Eye Piece W.F. 10x (Coated), Eye Piece W.F. 10x, Eye piece 10x W.F. Extra Large, Eye Piece H 10x, Eye piece H. 5x, Eye piece H 15x, Binocular Head, Trinocular Head, Trinocular Head (Big Prism), Dual Head Attachment for Microscope', 'Accessories For Microscope, Accessories For Microscope Manufacturers, Accessories For Microscope Exporters, Accessories For Microscope Suppliers, Accessories For Microscope India '),
(5, 'Polarising Microscopes', '', '', 8, '', 'product/category/Polarising Microscopes/23.jpg', 'Polarising Microscopes, Polarising Microscopes Manufacturers, Polarising Microscopes Exporters, Polarising Microscopes Suppliers, Polarising Microscopes India, Indian Polarising Microscopes, Polarising Microscopes Ambala, Straight Polarising Microscope, Straight Polarising Microscope Manufacturers, Straight Polarising Microscope Exporters, Straight Polarising Microscope Suppliers, Straight Polarising Microscope India, Indian Straight Polarising Microscope, Straight Polarising Microscope Ambala, Inclined Monocular Polarizing Microscope, Inclined Monocular Polarizing Microscope Manufacturers, Inclined Monocular Polarizing Microscope Exporters, Inclined Monocular Polarizing Microscope Suppliers, Inclined Monocular Polarizing Microscope India, Indian Inclined Monocular Polarizing Microscope, Inclined Monocular Polarizing Microscope Ambala, Binocular Polarising Microscope, Binocular Polarising Microscope Manufacturers, Binocular Polarising Microscope Exporters, Binocular Polarising Microscope Suppliers, Binocular Polarising Microscope India, Indian Binocular Polarising Microscope, Binocular Polarising Microscope Ambala, Ore Polarising/Metallurgical Microscope, Ore Polarising/Metallurgical Microscope Manufacturers, Ore Polarising/Metallurgical Microscope Exporters, Ore Polarising/Metallurgical Microscope Suppliers, Ore Polarising/Metallurgical Microscope India, Indian Ore Polarising/Metallurgical Microscope, Ore Polarising/Metallurgical Microscope Ambala  ', 'Polarising Microscopes, Polarising Microscopes Manufacturers, Polarising Microscopes Exporters, Polarising Microscopes Suppliers, Polarising Microscopes India, Straight Polarising Microscope, Inclined Monocular Polarizing Microscope, Binocular Polarising Microscope, Ore Polarising/Metallurgical Microscope  '),
(6, 'Tissue Culture Microscope', '', '', 16, '', 'product/category/Tissue Culture Microscope/22-23.jpg', 'Tissue Culture Microscope, Tissue Culture Microscope Manufacturers, Tissue Culture Microscope Exporters, Tissue Culture Microscope Suppliers, Tissue Culture Microscope India, Indian Tissue Culture Microscope, Tissue Culture Microscope Ambala', 'Tissue Culture Microscope, Tissue Culture Microscope Manufacturers, Tissue Culture Microscope Exporters, Tissue Culture Microscope Suppliers, Tissue Culture Microscope India '),
(8, 'Dissecting Microscopes', '', '', 30, '', 'product/category/Dissecting Microscopes/1.jpg', 'Dissecting Microscopes, Dissecting Microscopes Manufacturers, Dissecting Microscopes Exporters, Dissecting Microscopes Suppliers, Dissecting Microscopes India, Indian Dissecting Microscopes, Dissecting Microscopes Ambala, Senior Dissecting Microscope, Senior Dissecting Microscope Manufacturers, Senior Dissecting Microscope Exporters, Senior Dissecting Microscope Suppliers, Senior Dissecting Microscope India, Indian Senior Dissecting Microscope, Senior Dissecting Microscope Ambala, MD-1, MD-1A, MD-2\n ', 'Dissecting Microscopes, Dissecting Microscopes Manufacturers, Dissecting Microscopes Exporters, Dissecting Microscopes Suppliers, Dissecting Microscopes India '),
(9, 'Biological Microscopes', '', '', 31, '', 'product/category/Biological Microscopes/18.jpg', 'Junior Medical Microscope, Junior Medical Microscope Manufacturers, Junior Medical Microscope Exporters, Junior Medical Microscope Suppliers, Junior Medical Microscope India, Indian Junior Medical Microscope, Junior Medical Microscope Ambala, Biological Microscopes, Biological Microscopes Manufacturers, Biological Microscopes Exporters, Biological Microscopes Suppliers, Biological Microscopes India, Indian Biological Microscopes, Biological Microscopes Ambala, Senior Laboratory Medical Microscope, Senior Laboratory Medical Microscope Manufacturers, Senior Laboratory Medical Microscope Exporters, Senior Laboratory Medical Microscope Suppliers, Senior Laboratory Medical Microscope India, Indian Senior Laboratory Medical Microscope, Senior Laboratory Medical Microscope Ambala, Research Inclined Monocular, Research Inclined Monocular Manufacturers, Research Inclined Monocular Exporters, Research Inclined Monocular Suppliers, Research Inclined Monocular India, Indian Research Inclined Monocular, Research Inclined Monocular Ambala, Binocular Microscope, Binocular Microscope Manufacturers, Binocular Microscope Exporters, Binocular Microscope Suppliers, Binocular Microscope India, Indian Binocular Microscope, Binocular Microscope Ambala, Wide Field Research Inclined Binocular Microscope, Wide Field Research Inclined Binocular Microscope Manufacturers, Wide Field Research Inclined Binocular Microscope Exporters, Wide Field Research Inclined Binocular Microscope Suppliers, Wide Field Research Inclined Binocular Microscope India, Indian Wide Field Research Inclined Binocular Microscope, Wide Field Research Inclined Binocular Microscope Ambala, Research Inclined Binocular Microscope, Wide Field Research Inclined Trinocular Microscope, Advanced Microscopes, Advanced Binocular Microscope, Advanced Trinocular Microscope, Dark Field Condenser, Phase Contrast Equipment\n', 'Biological Microscopes, Biological Microscopes Manufacturers, Biological Microscopes Exporters, Biological Microscopes Suppliers, Biological Microscopes India, Junior Medical Microscope,\nSenior Laboratory Medical Microscope,\nResearch Inclined Monocular,\nBinocular Microscope,\nWide Field Research Inclined Binocular Microscope,\nResearch Inclined Binocular Microscope,\nWide Field Research Inclined Trinocular Microscope,\nAdvanced Microscopes,\nAdvanced Binocular Microscope,\nAdvanced Trinocular Microscope,\nDark Field Condenser,\nPhase Contrast Equipment\n '),
(10, 'Student Microscope', '', '', 0, '', 'product/category/Student Microscope/8.jpg', 'Student Microscope, Student Microscope Manufacturers, Student Microscope Exporters, Student Microscope Suppliers, Student Microscope India, Indian Student Microscope, Student Microscope Ambala, Junior Medical Microscope, Single Nose Microscope Manufacturers, Single Nose Microscope Exporters, Single Nose Microscope Suppliers, Single Nose Microscope India, Indian Junior Medical Microscope, Single Nose Microscope Ambala, Surface And Skin Examination Microscope, Surface And Skin Examination Microscope Manufacturers, Surface And Skin Examination Microscope Exporters, Surface And Skin Examination Microscope Suppliers, Surface And Skin Examination Microscope India, Indian Surface And Skin Examination Microscope, Surface And Skin Examination Microscope Ambala, Junior Student Microscope, Junior Student Microscope Manufacturers, Junior Student Microscope Exporters, Junior Student Microscope Suppliers, Junior Student Microscope India, Indian Junior Student Microscope, Junior Student Microscope Ambala, Compound Student Microscope ', 'Student Microscope, Student Microscope Manufacturers, Student Microscope Exporters, Student Microscope Suppliers, Student Microscope India, Single Nose Microscope,\nSurface And Skin Examination Microscope,\nJunior Student Microscope,\nCompound Student Microscope\n '),
(13, 'Projectors  Toolmaker Microscope', '', '', 11, '', 'product/category/Projectors & Tool Makers Microscopes/41.jpg', 'Projectors & Toolmaker Microscope, Projectors & Toolmaker Microscope Manufacturers, Projectors & Toolmaker Microscope Exporters, Projectors & Toolmaker Microscope Suppliers, Projectors & Toolmaker Microscope India, Indian Projectors & Toolmaker Microscope, Projectors & Toolmaker Microscope Ambala, Plastic Coated Projection Screen, Plastic Coated Projection Screen Manufacturers, Plastic Coated Projection Screen Exporters, Plastic Coated Projection Screen Suppliers, Plastic Coated Projection Screen India, Indian Plastic Coated Projection Screen, Plastic Coated Projection Screen Ambala, Overhead Projector, Overhead Projector Manufacturers, Overhead Projector Exporters, Overhead Projector Suppliers, Overhead Projector India, Indian Overhead Projector, Overhead Projector Ambala, Slide Projector Deluxe Model (Halogen), Slide Projector Deluxe Model (Halogen) Manufacturers, Slide Projector Deluxe Model (Halogen) Exporters, Slide Projector Deluxe Model (Halogen) Suppliers, Slide Projector Deluxe Model (Halogen) India, Indian Slide Projector Deluxe Model (Halogen), Slide Projector Deluxe Model (Halogen) Ambala, Profile Projector, Profile Projector Manufacturers, Profile Projector Exporters, Profile Projector Suppliers, Profile Projector India, Indian Profile Projector, Profile Projector Ambala, Halogen Bulb, Halogen Bulb Manufacturers, Halogen Bulb Exporters, Halogen Bulb Suppliers, Halogen Bulb India, Indian Halogen Bulb, Halogen Bulb Ambala, Prepared Mounted Transparencies, Accesories For Tool Makers Microscopes      ', 'Projectors & Toolmaker Microscope, Projectors & Toolmaker Microscope Manufacturers, Projectors & Toolmaker Microscope Exporters, Projectors & Toolmaker Microscope Suppliers, Projectors & Toolmaker Microscope India, Plastic Coated Projection Screen,\nOverhead Projector,\nPortable Overhead Projector,\nSlide projector (Halogen),\nSlide Projector Deluxe Model (Halogen),\nProfile Projector,\nTool Makers Microscope,\nHalogen Bulb,\nTransparency Sheets,\nPrepared Mounted Transparencies,\nAccesories For Tool Makers Microscopes '),
(17, 'Projection Microscope', '', '', 9, '', 'product/category/Projector Microscopes/50.jpg', 'Projection Microscope, Projection Microscope Manufacturers, Projection Microscope Exporters, Projection Microscope Suppliers, Projection Microscope India, Projection Microscope Ambala, Class Room Projection Microscope, Class Room Projection Microscope Manufacturers, Class Room Projection Microscope Exporters, Class Room Projection Microscope Suppliers, Class Room Projection Microscope India, Indian Class Room Projection Microscope, Class Room Projection Microscope Ambala, Senior Projection Microscope, Senior Projection Microscope Manufacturers, Senior Projection Microscope Exporters, Senior Projection Microscope Suppliers, Senior Projection Microscope India, Indian Senior Projection Microscope, Senior Projection Microscope Ambala, Student Projection Microscope (Doom Type), Student Projection Microscope (Doom Type) Manufacturers, Student Projection Microscope (Doom Type) Exporters, Student Projection Microscope (Doom Type) Suppliers, Student Projection Microscope (Doom Type) India, Indian Student Projection Microscope (Doom Type), Student Projection Microscope (Doom Type) Ambala, Polarising Projection Microscope, Polarising Projection Microscope Ambala ', 'Projection Microscope, Projection Microscope Manufacturers, Projection Microscope Exporters, Projection Microscope Suppliers, Projection Microscope India, Class Room Projection Microscope,\nSenior Projection,\nSenior Projection Microscope,\nPolarising Projection Microscope,\nStudent Projection Microscope (Doom Type) '),
(28, 'Ultra Series (NEW)', '', '', 0, '', 'product/category/Ultra Series/1.jpg', 'Student Microscope, Student Microscope Manufacturers, Student Microscope Exporters, Student Microscope Suppliers, Student Microscope India, Indian Student Microscope, Student Microscope Ambala, Junior Medical Microscope, Junior Medical Microscope Manufacturers, Junior Medical Microscope Exporters, Junior Medical Microscope Suppliers, Junior Medical Microscope India, Indian Junior Medical Microscope, Junior Medical Microscope Ambala, Medical Microscope, Medical Microscope Manufacturers, Medical Microscope Exporters, Medical Microscope Suppliers, Medical Microscope India, Indian Medical Microscope, Medical Microscope Ambala', 'Student Microscope, Student Microscope Manufacturers, Student Microscope Exporters, Student Microscope Suppliers, Student Microscope India, Indian Student Microscope, Student Microscope Ambala, Junior Medical Microscope, Junior Medical Microscope Manufacturers, Junior Medical Microscope Exporters, Junior Medical Microscope Suppliers, Junior Medical Microscope India, Indian Junior Medical Microscope, Junior Medical Microscope Ambala, Medical Microscope, Medical Microscope Manufacturers, Medical Microscope Exporters, Medical Microscope Suppliers, Medical Microscope India, Indian Medical Microscope, Medical Microscope Ambala'),
(29, 'X - Series (NEW)', '', '', 0, '', 'product/category/X - Series/2.jpg', 'X-1 Research Trinocular Microscope, X-1 Research Trinocular Microscope Manufacturers, X-1 Research Trinocular Microscope Exporters, X-1 Research Trinocular Microscope Suppliers, X-1 Research Trinocular Microscope India, Indian X-1 Research Trinocular Microscope, X-1 Research Trinocular Microscope Ambala, X-2 Research Trinocular Microscope, X-2 Research Trinocular Microscope Manufacturers, X-2 Research Trinocular Microscope Exporters, X-2 Research Trinocular Microscope Suppliers, X-2 Research Trinocular Microscope India, Indian X-2 Research Trinocular Microscope, X-2 Research Trinocular Microscope Ambala, X-3 Research Trinocular/Binocular Microscope, X-3 Research Trinocular/Binocular Microscope Manufacturers, X-3 Research Trinocular/Binocular Microscope Exporters, X-3 Research Trinocular/Binocular Microscope Suppliers, X-3 Research Trinocular/Binocular Microscope India, Indian X-3 Research Trinocular/Binocular Microscope, X-3 Research Trinocular/Binocular Microscope Ambala, X-4 Research Trinocular/Binocular Microscope, X-4 Research Trinocular/Binocular Microscope Manufacturers, X-4 Research Trinocular/Binocular Microscope Exporters, X-4 Research Trinocular/Binocular Microscope Suppliers, X-4 Research Trinocular/Binocular Microscope India, Indian X-4 Research Trinocular/Binocular Microscope, X-4 Research Trinocular/Binocular Microscope Ambala, X-555 Multi Viewing/Pentahead Microscope, X-555 Multi Viewing/Pentahead Microscope Manufacturers, X-555 Multi Viewing/Pentahead Microscope Exporters, X-555 Multi Viewing/Pentahead Microscope Suppliers, X-555 Multi Viewing/Pentahead Microscope India, Indian X-555 Multi Viewing/Pentahead Microscope, X-555 Multi Viewing/Pentahead Microscope Ambala, DSZ-88 Zoom Stereo Trinocular Microscope, DSZ-88 Zoom Stereo Trinocular Microscope Manufacturers, DSZ-88 Zoom Stereo Trinocular Microscope Exporters, DSZ-88 Zoom Stereo Trinocular Microscope Suppliers, DSZ-88 Zoom Stereo Trinocular Microscope India, Indian DSZ-88 Zoom Stereo Trinocular Microscope, DSZ-88 Zoom Stereo Trinocular Microscope Ambala', 'X-1 Research Trinocular Microscope, X-1 Research Trinocular Microscope Manufacturers, X-1 Research Trinocular Microscope Exporters, X-1 Research Trinocular Microscope Suppliers, X-1 Research Trinocular Microscope India, Indian X-1 Research Trinocular Microscope, X-1 Research Trinocular Microscope Ambala, X-2 Research Trinocular Microscope, X-2 Research Trinocular Microscope Manufacturers, X-2 Research Trinocular Microscope Exporters, X-2 Research Trinocular Microscope Suppliers, X-2 Research Trinocular Microscope India, Indian X-2 Research Trinocular Microscope, X-2 Research Trinocular Microscope Ambala, X-3 Research Trinocular/Binocular Microscope, X-3 Research Trinocular/Binocular Microscope Manufacturers, X-3 Research Trinocular/Binocular Microscope Exporters, X-3 Research Trinocular/Binocular Microscope Suppliers, X-3 Research Trinocular/Binocular Microscope India, Indian X-3 Research Trinocular/Binocular Microscope, X-3 Research Trinocular/Binocular Microscope Ambala, X-4 Research Trinocular/Binocular Microscope, X-4 Research Trinocular/Binocular Microscope Manufacturers, X-4 Research Trinocular/Binocular Microscope Exporters, X-4 Research Trinocular/Binocular Microscope Suppliers, X-4 Research Trinocular/Binocular Microscope India, Indian X-4 Research Trinocular/Binocular Microscope, X-4 Research Trinocular/Binocular Microscope Ambala, X-555 Multi Viewing/Pentahead Microscope, X-555 Multi Viewing/Pentahead Microscope Manufacturers, X-555 Multi Viewing/Pentahead Microscope Exporters, X-555 Multi Viewing/Pentahead Microscope Suppliers, X-555 Multi Viewing/Pentahead Microscope India, Indian X-555 Multi Viewing/Pentahead Microscope, X-555 Multi Viewing/Pentahead Microscope Ambala, DSZ-88 Zoom Stereo Trinocular Microscope, DSZ-88 Zoom Stereo Trinocular Microscope Manufacturers, DSZ-88 Zoom Stereo Trinocular Microscope Exporters, DSZ-88 Zoom Stereo Trinocular Microscope Suppliers, DSZ-88 Zoom Stereo Trinocular Microscope India, Indian DSZ-88 Zoom Stereo Trinocular Microscope, DSZ-88 Zoom Stereo Trinocular Microscope Ambala'),
(15, 'Stereo Zoom Microscopes', '', '', 18, '', 'product/category/Zoom Stereoscopic Microscopes/39.jpg', 'Stereo Zoom Microscopes, Stereo Zoom Microscopes Manufacturers, Stereo Zoom Microscopes Exporters, Stereo Zoom Microscopes Suppliers, Stereo Zoom Microscopes India, Indian Stereo Zoom Microscopes, Stereo Zoom Microscopes Ambala, Zoom Binocular Microscope, Zoom Binocular Microscope Manufacturers, Zoom Binocular Microscope Exporters, Zoom Binocular Microscope Suppliers, Zoom Binocular Microscope India, Indian Zoom Binocular Microscope, Zoom Binocular Microscope Ambala, Zoom Stereo Trinocular Microscope, Zoom Stereo Trinocular Microscope Manufacturers, Zoom Stereo Trinocular Microscope Exporters, Zoom Stereo Trinocular Microscope Suppliers, Zoom Stereo Trinocular Microscope India, Indian Zoom Stereo Trinocular Microscope, Zoom Stereo Trinocular Microscope Ambala  ', 'Stereo Zoom Microscopes, Stereo Zoom Microscopes Manufacturers, Stereo Zoom Microscopes Exporters, Stereo Zoom Microscopes Suppliers, Stereo Zoom Microscopes India, Zoom Binocular Microscope,\nZoom Stereo Trinocular Microscope '),
(16, 'Stereo Dissecting Microscopes', '', '', 15, '', 'product/category/Stereo Dissecting Microscopes/38.jpg', 'Stereo Dissecting Microscopes, Stereo Dissecting Microscopes Manufacturers, Stereo Dissecting Microscopes Exporters, Stereo Dissecting Microscopes Suppliers, Stereo Dissecting Microscopes India, Indian Stereo Dissecting Microscopes, Stereo Dissecting Microscopes Ambala, Straight Binocular Microscope, Straight Binocular Microscope Manufacturers, Straight Binocular Microscope Exporters, Straight Binocular Microscope Suppliers, Straight Binocular Microscope India, Indian Straight Binocular Microscope, Straight Binocular Microscope Ambala, Research Inclined Stereoscopic Microscope, Research Inclined Stereoscopic Microscope Manufacturers, Research Inclined Stereoscopic Microscope Exporters, Research Inclined Stereoscopic Microscope Suppliers, Research Inclined Stereoscopic Microscope India, Indian Research Inclined Stereoscopic Microscope, Research Inclined Stereoscopic Microscope Ambala, Universal Stereoscopic Microscope, Universal Stereoscopic Microscope Manufacturers, Universal Stereoscopic Microscope Exporters, Universal Stereoscopic Microscope Suppliers, Universal Stereoscopic Microscope India, Indian Universal Stereoscopic Microscope, Universal Stereoscopic Microscope Ambala  ', 'Stereo Dissecting Microscopes, Stereo Dissecting Microscopes Manufacturers, Stereo Dissecting Microscopes Exporters, Stereo Dissecting Microscopes Suppliers, Stereo Dissecting Microscopes India, \nStraight Binocular Microscope,\nResearch Inclined Stereoscopic Microscope,\nUniversal Stereoscopic Microscope '),
(18, 'Microtomes & Knife Sharpner', '12345678', '', 5, '', 'product/category/Microtomes/54.jpg', 'Microtomes & Knife Sharpner, Microtomes & Knife Sharpner Manufacturers, Microtomes & Knife Sharpner Exporters, Microtomes & Knife Sharpner Suppliers, Microtomes & Knife Sharpner India, Indian Microtomes & Knife Sharpner, Microtomes & Knife Sharpner Ambala, Automatic Knife Sharpener ARS-1, Automatic Knife Sharpener ARS-1 Manufacturers, Automatic Knife Sharpener ARS-1 Exporters, Automatic Knife Sharpener ARS-1 Suppliers, Automatic Knife Sharpener ARS-1 India, Indian Automatic Knife Sharpener ARS-1, Automatic Knife Sharpener ARS-1 Ambala, Automatic Microtome Razor Sharpener, Automatic Microtome Razor Sharpener Manufacturers, Automatic Microtome Razor Sharpener Exporters, Automatic Microtome Razor Sharpener Suppliers, Automatic Microtome Razor Sharpener India, Indian Automatic Microtome Razor Sharpener, Automatic Microtome Razor Sharpener Ambala, Rotary Microtome (Erma type), Rotary Microtome (Erma type) Manufacturers, Rotary Microtome (Erma type) Exporters, Rotary Microtome (Erma type) Suppliers, Rotary Microtome (Erma type) India, Indian Rotary Microtome (Erma type), Rotary Microtome (Erma type) Ambala, Senior Rotary Microtome (820 Spencer Type) MS-80, Senior Rotary Microtome (820 Spencer Type) MS-80 Manufacturers, Senior Rotary Microtome (820 Spencer Type) MS-80 Exporters, Senior Rotary Microtome (820 Spencer Type) MS-80 Suppliers, Senior Rotary Microtome (820 Spencer Type) MS-80 India, Indian Senior Rotary Microtome (820 Spencer Type) MS-80, Senior Rotary Microtome (820 Spencer Type) MS-80 Ambala, Freezing Microtome (Erma Type)MS-90, Sliding Microtome MS-100, Bench Magnifier (Magnascope) MBM-101,Magnifier(Flexible Arm) Deluxe ModelMBM-102, Rotary Mictrome Razor, ARS-1, ARS-2, MS-70, MS-80, MS-90, MS-100, MBM-101, MBM-102  ', 'Microtomes & Knife Sharpner, Microtomes & Knife Sharpner Manufacturers, Microtomes & Knife Sharpner Exporters, Microtomes & Knife Sharpner Suppliers, Microtomes & Knife Sharpner India, Automatic Knife SharpenerARS-1,Automatic Microtome Razor SharpenerARS-2,Rotary Microtome (Erma type)MS-70,Senior Rotary Microtome (820 Spencer Type)MS-80,Freezing Microtome (Erma Type)MS-90,Sliding MicrotomeMS-100,Bench Magnifier (Magnascope)MBM-101,Magnifier (Flexible Arm) Deluxe ModelMBM-102,Rotary Mictrome Razor '),
(19, 'Centrifuge Machines', '', '', 2, '', 'product/category/Centrifuge Machines/60.jpg', 'Centrifugal Machines, Centrifuge Machines Manufacturers, Centrifugal Machines Exporters, Centrifuge Machines Suppliers, Centrifuge Machines India, Indian Centrifuge Machines, Centrifugal Machines Ambala, Centrifuge Machine KW-50, Centrifuge Machine (Dr. Model) KW-60, Centrifuge Machine (Square Model) KW-70, Centrifuge Machine(Square Model) KW-80', 'Centrifugal Machines, Centrifuge Machines Manufacturers, Centrifugal Machines Exporters, Centrifuge Machines Suppliers, Centrifugal Machines India, Centrifuge Machine KW-50, Centrifuge Machine (Dr. Model) KW-60, Centrifuge Machine (Square Model) KW-70, Centrifuge Machine(Square Model) KW-80'),
(20, 'Spectrometers', '', '', 14, '', 'product/category/Spectrometers/63.jpg', 'Spectrometers, Spectrometers Manufacturers, Spectrometers Exporters, Spectrometers Suppliers, Spectrometers India, Indian Spectrometers, Spectrometers Ambala, Spectrometer SM-6, Spectrometer SM-6A, Spectrometer SM-7, Spectrometer SM-7A, Spectrometer SM-10 ', 'Spectrometers, Spectrometers Manufacturers, Spectrometers Exporters, Spectrometers Suppliers, Spectrometers India, Spectrometer SM-6, Spectrometer SM-6A, Spectrometer SM-7, Spectrometer SM-7A, Spectrometer SM-10 '),
(21, 'Polarimeters', '', '', 7, '', 'product/category/Polarimeters/67.jpg', 'Polarimeters, Polarimeters Manufacturers, Polarimeters Exporters, Polarimeters Suppliers, Polarimeters India, Indian Polarimeters, Polarimeters Ambala, Laurenrs Half Shade Polarimeter AW-20, Research Polarimeter AW-21, Research Polarimeter AW-22 ', 'Polarimeters, Polarimeters Manufacturers, Polarimeters Exporters, Polarimeters Suppliers, Polarimeters India, Laurenrs Half Shade Polarimeter AW-20, Research Polarimeter AW-21, Research Polarimeter AW-22 '),
(22, 'Vernier Microscopes', '', '', 17, '', 'product/category/Vernier Microscopes/64.jpg', 'Vernier Microscopes, Vernier Microscopes Manufacturers, Vernier Microscopes Exporters, Vernier Microscopes Suppliers, Vernier Microscopes India, Indian Vernier Microscopes, Vernier Microscopes Ambala, Traveling Microscope, Traveling Microscope Manufacturers, Traveling Microscope Exporters, Traveling Microscope Suppliers, Traveling Microscope India, Indian Traveling Microscope, Traveling Microscope Ambala, Traveling Microscope VM-1, Traveling Microscope VM-2, Traveling Microscope VM-2B, Traveling Microscope VM-2C, Newtons Ring Experiment Apparatus VM-3 ', 'Vernier Microscopes, Vernier Microscopes Manufacturers, Vernier Microscopes Exporters, Vernier Microscopes Suppliers, Vernier Microscopes India, Traveling Microscope VM-1, Traveling Microscope VM-2, Traveling Microscope VM-2B, Traveling Microscope VM-2C, Newtons Ring Experiment Apparatus \nVM-3 '),
(23, 'Refractometer & Moisture Balance', '', '', 13, '', 'product/category/Refractometers/70.jpg', 'Refractometer & Moisture Balance, Refractometer & Moisture Balance Manufacturers, Refractometer & Moisture Balance Exporters, Refractometer & Moisture Balance Suppliers, Refractometer & Moisture Balance India, Indian Refractometer & Moisture Balance, Refractometer & Moisture Balance Ambala, Refractometer & Moisture Balance, Refractometer & Moisture Balance Manufacturers, Refractometer & Moisture Balance Exporters, Refractometer & Moisture Balance Suppliers, Refractometer & Moisture Balance India, Indian Refractometer & Moisture Balance, Refractometer & Moisture Balance Ambala, Pocket Refractometer AW-23, Abbe Refractometer AW-24, Butyro Refractometer AW-25, Sugar & Oil Refractometer AW-26, Digital Video Microscope DVM-01, Infra Red Moisture Balance MB-81  ', 'Refractometer & Moisture Balance, Refractometer & Moisture Balance Manufacturers, Refractometer & Moisture Balance Exporters, Refractometer & Moisture Balance Suppliers, Refractometer & Moisture Balance India, Refractometer & Moisture Balance, Refractometer & Moisture Balance Manufacturers, Refractometer & Moisture Balance Exporters, Refractometer & Moisture Balance Suppliers, Refractometer & Moisture Balance India, Indian Refractometer & Moisture Balance, Refractometer & Moisture Balance Ambala, Pocket Refractometer AW-23, Abbe Refractometer AW-24, Butyro Refractometer AW-25, Sugar & Oil Refractometer AW-26, Digital Video Microscope DVM-01, Infra Red Moisture Balance MB-81 '),
(26, 'Photomicrography Equipments', '', '', 6, '', 'product/category/Photomicrography Equipments/35.jpg', 'Photomicrography Equipments, Photomicrography Equipments Manufacturers, Photomicrography Equipments Exporters, Photomicrography Equipments Suppliers, Photomicrography Equipments India, Indian Photomicrography Equipments, Photomicrography Equipments Ambala, Coloured Video Equipment ACVT-30, Coloured Video Equipment ACVT-30 Manufacturers, Coloured Video Equipment ACVT-30 Exporters, Coloured Video Equipment ACVT-30 Suppliers, Coloured Video Equipment ACVT-30 India, Indian Coloured Video Equipment ACVT-30, Coloured Video Equipment ACVT-30 Ambala, Coloured Video Equipment ACVT-31, Coloured Video Equipment ACVT-32, Photomicrography Equipment APM-20, Photomicrography Equipment APM-20 Manufacturers, Photomicrography Equipment APM-20 Exporters, Photomicrography Equipment APM-20 Suppliers, Photomicrography Equipment APM-20 India, Indian Photomicrography Equipment APM-20, Photomicrography Equipment APM-20 Ambala, Side View Finder AVF-01', 'Photomicrography Equipments, Photomicrography Equipments Manufacturers, Photomicrography Equipments Exporters, Photomicrography Equipments Suppliers, Photomicrography Equipments India, Coloured Video Equipment ACVT-30, Coloured Video Equipment ACVT-31, Coloured Video Equipment ACVT-32, Photomicrography Equipment APM-20, Side View Finder AVF-01'),
(24, 'Microscope', '123243', '', 1, '', 'product/category/Biological Microscopes/18.jpg', 'Microscope, Microscope Manufacturers, Microscope Exporters, Microscope Suppliers, Microscope India, Indian Microscope, Microscope Ambala, Student Microscope, Dissecting Microscopes, Biological Microscopes, Accessories For Microscope, Imported Microscope  ', 'Microscope, Microscope Manufacturers, Microscope Exporters, Microscope Suppliers, Microscope India, Student Microscope, Dissecting Microscopes, Biological Microscopes, Accessories For Microscope, Imported Microscope  '),
(25, 'Metallographic Instruments', '', '', 3, '', 'product/category/Metallographic Instruments/75.jpg', 'Metallographic Instruments, Metallographic Instruments Manufacturers, Metallographic Instruments Exporters, Metallographic Instruments Suppliers, Metallographic Instruments India, Indian Metallographic Instruments, Metallographic Instruments Ambala, Specimen Polishing Machine MMP-6A, Specimen Polishing Machine MMP-7, Specimen Polishing MachineMMP-7A, Specimen Cutter Machine MMP-8', 'Metallographic Instruments, Metallographic Instruments Manufacturers, Metallographic Instruments Exporters, Metallographic Instruments Suppliers, Metallographic Instruments India, Specimen Polishing Machine MMP-6A, Specimen Polishing Machine MMP-7, Specimen Polishing MachineMMP-7A, Specimen Cutter Machine MMP-8 '),
(33, 'Miscmn', 'Misc Productsfr', '', 90, '', '', '33', 'r3e'),
(344, 'name', 'wdewq', '', 0, '', '', 'rytryt', 'wewqrqw');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'Andhra-Pradesh'),
(2, 'Adilabad'),
(3, 'Anantapur'),
(4, 'Chittoor'),
(5, 'Hyderabad'),
(6, 'Kurnool'),
(7, 'Nellore'),
(8, 'Vishakhapatnam'),
(9, 'Arunachal-Pradesh'),
(10, 'Assam'),
(11, 'Lakhimpur'),
(12, 'Bihar'),
(13, 'Aurangabad'),
(14, 'Bhojpur'),
(15, 'Darbhanga'),
(16, 'Gopalganj'),
(17, 'Nalanda'),
(18, 'Patna'),
(19, 'Purnia'),
(20, 'Siwan'),
(21, 'Vaishali'),
(22, 'Chhattisgarh'),
(23, 'Bastar'),
(24, 'Bilaspur'),
(25, 'Dantewada'),
(26, 'Dhamtari'),
(27, 'Durg'),
(28, 'Raigarh'),
(29, 'Rajnandgaon'),
(30, 'Raipur'),
(31, 'Delhi'),
(32, 'New-Delhi'),
(33, 'Gujarat'),
(34, 'Ahmedabad'),
(35, 'Bhavnagar'),
(36, 'Gandhinagar'),
(37, 'Jamnagar'),
(38, 'Kutch'),
(39, 'Mehsana'),
(40, 'Narmada'),
(41, 'Navsari'),
(42, 'Patan'),
(43, 'Porbandar'),
(44, 'Rajkot'),
(45, 'Surat'),
(46, 'Vadodara'),
(47, 'Haryana'),
(48, 'Ambala'),
(49, 'Bhiwani'),
(50, 'Fatehabad'),
(51, 'Gurgaon'),
(52, 'Hissar'),
(53, 'Jhajjar'),
(54, 'Jind'),
(55, 'Karnal'),
(56, 'Kaithal'),
(57, 'Kurukshetra'),
(58, 'Mahendragarh'),
(59, 'Mewat Nuh'),
(60, 'Panchkula'),
(61, 'Panipat'),
(62, 'Rewari'),
(63, 'Rohtak'),
(64, 'Sirsa'),
(65, 'Yamuna-Nagar'),
(66, 'Himachal-Pradesh'),
(67, 'Chamba'),
(68, 'Hamirpur'),
(69, 'Kangra'),
(70, 'Kinnaur'),
(71, 'Kulu'),
(72, 'Lahaul'),
(73, 'Mandi-Shimla'),
(74, 'Sirmaur'),
(75, 'Solan'),
(76, 'Una'),
(77, 'Jammu-And-Kashmir'),
(78, 'Anantnag'),
(79, 'Badgam'),
(80, 'Doda'),
(81, 'Jammu '),
(82, 'Kathua'),
(83, 'Kupwara'),
(84, 'Leh'),
(85, 'Poonch'),
(86, 'Pulwama'),
(87, 'Rajauri'),
(88, 'Srinagar'),
(89, 'Samba'),
(90, 'Udhampur'),
(91, 'Jharkhand'),
(92, 'Bokaro'),
(93, 'Deoghar'),
(94, 'Dhanbad'),
(95, 'Ramgarh'),
(96, 'Karnataka'),
(97, 'Bidar'),
(98, 'Bijapur'),
(99, 'Mysore'),
(100, 'Kerala'),
(101, 'Kollam'),
(102, 'Kannur'),
(103, 'Kozhikode'),
(104, 'Thiruvananthapuram'),
(105, 'Madhya-Pradesh'),
(106, 'Balaghat'),
(107, 'Bhopal'),
(108, 'Chhatarpur'),
(109, 'Datia'),
(110, 'Gwalior'),
(111, 'Indore'),
(112, 'Jabalpur'),
(113, 'Mandla'),
(114, 'Morena'),
(115, 'Rajgarh'),
(116, 'Ratlam'),
(117, 'Seoni'),
(118, 'Shivpuri'),
(119, 'Ujjain'),
(120, 'Maharashtra'),
(121, 'Ahmednagar'),
(122, 'Amravati'),
(123, 'Mumbai'),
(124, 'Nagpur'),
(125, 'Nashik'),
(126, 'Pune'),
(127, 'Ratnagiri'),
(128, 'Satara'),
(129, 'Thane'),
(130, 'Manipur'),
(131, 'Chandel'),
(132, 'Meghalaya'),
(133, 'Mizoram'),
(134, 'Aizawl'),
(135, 'Nagaland'),
(136, 'Kohima'),
(137, 'Tuensang'),
(138, 'Orissa'),
(139, 'Cuttack'),
(140, 'Deogarh'),
(141, 'Puri'),
(142, 'Sambalpur'),
(143, 'Sundargarh'),
(144, 'Puducherry'),
(145, 'Punjab'),
(146, 'Amritsar'),
(147, 'Barnala'),
(148, 'Bathinda'),
(149, 'Faridkot'),
(150, 'Gurdaspur'),
(151, 'Hoshiarpur'),
(152, 'Jalandhar'),
(153, 'Kapurthala'),
(154, 'Ludhiana'),
(155, 'Mansa'),
(156, 'Mahe-Moga'),
(157, 'Muktsar'),
(158, 'Patiala'),
(159, 'Rupnagar'),
(160, 'Sangrur'),
(161, 'Tarn-Taran'),
(162, 'Rajasthan'),
(163, 'Ajmer'),
(164, 'Jodhpur'),
(165, 'Jaisalmer'),
(166, 'Bharatpur'),
(167, 'Sika'),
(168, 'Alwar'),
(169, 'Ganganagar'),
(170, 'Kota'),
(171, 'Sikkim'),
(172, 'Tamil Nadu'),
(173, 'Coimbatore'),
(174, 'Kanchipuram'),
(175, 'Kanyakumari'),
(176, 'Madurai'),
(177, 'Nagapattinam'),
(178, 'Nilgiris'),
(179, 'Tripura'),
(180, 'Uttar-Pradesh'),
(181, 'Agra'),
(182, 'Allahabad'),
(183, 'Aligarh'),
(184, 'Auraiya'),
(185, 'Barabanki'),
(186, 'Bijnor'),
(187, 'Bareilly'),
(188, 'Bulandshahar'),
(189, 'Chitrakoot'),
(190, 'Gonda'),
(191, 'Gorakhpur'),
(192, 'Ghaziabad'),
(193, 'Kannauj'),
(194, 'Lucknow'),
(195, 'Meerut'),
(196, 'Moradabad'),
(197, 'Mainpuri'),
(198, 'Mathura'),
(199, 'Rampur'),
(200, 'Raebareli'),
(201, 'Saharanpur'),
(202, 'Sultanpur'),
(203, 'Varanasi'),
(204, 'Uttarakhand'),
(205, 'Chamoli'),
(206, 'Dehradun'),
(207, 'Haridwar'),
(208, 'Nainital'),
(209, 'Pithoragarh'),
(210, 'Uttarkashi'),
(211, 'WestBengal'),
(212, 'Darjeeling'),
(213, 'Hooghly'),
(214, 'Howrah'),
(215, 'Jalpaiguri'),
(216, 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `eqid` int(11) NOT NULL DEFAULT '0',
  `prd` varchar(20) NOT NULL DEFAULT '',
  `product` varchar(100) NOT NULL DEFAULT '',
  `qty` varchar(20) NOT NULL DEFAULT '',
  `speci` text NOT NULL,
  `replycurr` varchar(10) NOT NULL DEFAULT '',
  `replyprice` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_title` text NOT NULL,
  `g_url` text NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maxcatid`
--

DROP TABLE IF EXISTS `maxcatid`;
CREATE TABLE IF NOT EXISTS `maxcatid` (
  `catid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxcatid`
--

INSERT INTO `maxcatid` (`catid`) VALUES
(32);

-- --------------------------------------------------------

--
-- Table structure for table `maxid`
--

DROP TABLE IF EXISTS `maxid`;
CREATE TABLE IF NOT EXISTS `maxid` (
  `maxy` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxid`
--

INSERT INTO `maxid` (`maxy`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `orders` varchar(15) DEFAULT NULL,
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL DEFAULT '0',
  `subcatid` int(11) NOT NULL DEFAULT '0',
  `product` varchar(200) NOT NULL DEFAULT '',
  `descr` text NOT NULL,
  `path` varchar(200) NOT NULL DEFAULT '',
  `titlewords` text,
  `keywords` text,
  `clog_path` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=7690 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`orders`, `pid`, `catid`, `subcatid`, `product`, `descr`, `path`, `titlewords`, `keywords`, `clog_path`) VALUES
('2', 7688, 3, 12, 'Alcon Exportj', 'rwere', 'uploads/products/analysis-analytics-charts-669610.jpg', 'frtreytte', 'asaf', 'uploads/products/c_log/stephen-dawson-670638-unsplash.jpg'),
('', 7689, 28, 17, 'Vijay', 'trytru', 'uploads/products/personal.jpg', 'rty', 'ytrytry', 'uploads/products/c_log/hotel.png');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `replyid` int(11) NOT NULL AUTO_INCREMENT,
  `eqid` int(4) NOT NULL DEFAULT '0',
  `prd` varchar(50) NOT NULL DEFAULT '',
  `product` varchar(100) NOT NULL DEFAULT '',
  `price_rupee` double(11,3) NOT NULL DEFAULT '0.000',
  `price_dollar` double(11,3) NOT NULL DEFAULT '0.000',
  `spci` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`replyid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `catid` int(11) NOT NULL DEFAULT '0',
  `rorder` int(11) NOT NULL DEFAULT '0',
  `meta` text NOT NULL,
  `keywords` text NOT NULL,
  `descr` text NOT NULL,
  `subc_name` text NOT NULL,
  `s_id` int(15) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`catid`, `rorder`, `meta`, `keywords`, `descr`, `subc_name`, `s_id`) VALUES
(28, 0, 'weeqw', '', 'khbg', 'Labo Microscope', 17),
(15, 0, '', '', '', 'Deadlines', 15),
(3, 0, '', '', '', 'trueshadeshub.com', 12),
(3, 0, '', '', '', 'Labo Microscope', 16),
(6, 0, '', '', '', 'Labo Microscope', 19);

-- --------------------------------------------------------

--
-- Table structure for table `usefullinks`
--

DROP TABLE IF EXISTS `usefullinks`;
CREATE TABLE IF NOT EXISTS `usefullinks` (
  `linkid` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`linkid`),
  UNIQUE KEY `linkname` (`linkname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `eqid` int(11) NOT NULL DEFAULT '0',
  `screen_id` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `company` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `state` varchar(30) NOT NULL DEFAULT '',
  `pin` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `dates` date NOT NULL DEFAULT '0000-00-00',
  `phone` varchar(100) NOT NULL DEFAULT '',
  `fax` varchar(100) NOT NULL DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `terms` text NOT NULL,
  PRIMARY KEY (`eqid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`eqid`, `screen_id`, `password`, `username`, `company`, `address`, `city`, `state`, `pin`, `email`, `dates`, `phone`, `fax`, `country`, `terms`) VALUES
(2, '', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test@test.com', '2012-03-06', '1234', '1234', 'test', 'test'),
(3, '', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test@test.com', '2012-03-06', '1234', '1234', 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
