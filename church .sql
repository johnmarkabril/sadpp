-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 10:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptism`
--

CREATE TABLE IF NOT EXISTS `baptism` (
`no` int(11) NOT NULL,
  `nob` int(11) NOT NULL,
  `dob` date NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `leg` varchar(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `pob1` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `pob2` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ninong` varchar(50) NOT NULL,
  `rninong` varchar(50) NOT NULL,
  `ninang` varchar(50) NOT NULL,
  `rninang` varchar(50) NOT NULL,
  `minister` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baptism`
--

INSERT INTO `baptism` (`no`, `nob`, `dob`, `firstname`, `mi`, `lastname`, `bday`, `leg`, `fname`, `pob1`, `mname`, `pob2`, `address`, `ninong`, `rninong`, `ninang`, `rninang`, `minister`) VALUES
(1, 2, '1994-01-01', 'Marie Joy', '', 'Castillo', '1993-07-06', 'Leg.', 'Estanislao Castillo', 'Laguna', 'Marivic Serafica', 'Malabon', '3 Mapalad St., Tonsuya, Malabon', 'Bernie Trinidad', 'Malabon', 'Eufemia Santos', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(2, 2, '1994-01-01', 'Rodolfo', '', 'Evangelista, Jr.', '1993-06-10', 'Leg.', 'Rodolfo Evangelista, Jr.', 'Catanduanes', 'Jocelyn Del Pilar', 'Capiz', '19 Mapalad St., Tonsuya, Malabon', 'Rey Cerdina', 'Malabon', 'Rosalinda Ruth Regarde', 'Navotas', 'Rev. Fr, Eusebio Manangbao, SVD'),
(3, 2, '1994-01-01', 'Catherine Anne', '', 'Villar', '1993-02-08', 'Civ.', 'Palavio Villar', 'Masbate', 'Florentina Gelordo', 'Masbate', 'Malabon, Metro Manila', 'Pedro Baguio', 'Malabon', 'Melita Abando', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(4, 2, '1994-01-01', 'Carrissa', 'A.', 'Obispo', '1993-06-23', 'Leg.', 'Antonio Obispo', 'Malabon', 'Emelita Angeles', 'Pangasinan', 'Sitio Balut, Tonsuya, Malabon', 'Roberto Angeles', 'Malabon', 'Emma Angeles', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(5, 2, '1994-01-01', 'Louise Mourielle', 'M.', 'Pio', '1993-05-29', 'Leg.', 'Ricardo D. Pio', 'Pampanga', 'Ednalyn P. Manuel', 'Pasay City', '24 Mapalad St., Tonsuya, Malabon', 'Ailene Roque', 'Navotas', 'Rosauro Pamatian', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(6, 2, '1994-01-01', 'Ronalyn Cleyd', '', 'Dionisio', '1993-10-17', 'Leg.', 'Ronilo A. Dionisio', 'Malabon', 'Corazon Delos Reyes', 'Mindoro', 'Sitio Balut, Tonsuya, Malabon', 'Leonardo Alocada', 'Malabon', 'Ging-Ging Santos', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(7, 2, '1994-01-02', 'Rizamay', 'I', 'Anastacio', '1993-03-20', 'Civ.', 'Ricardo Anastacio', 'Manila', 'Maribeth Ilaog', 'Olongapo City', 'C. Perez St., Tonsuya, Malabon', 'Benno Kottke', 'Germany', 'Jeannie Yu', 'Quezon City', 'Rev. Fr, Eusebio Manangbao, SVD'),
(8, 2, '1994-01-02', 'Krista Marie', 'M.', 'De Castro', '1993-12-07', 'Leg.', 'Romeo C. De Castro, Jr.', 'Blandina P. Mondina', 'Blandina P. Mondina', 'La Union', '47 Sitio Camia, N. Vicencio St., Niugan, Malabon', 'Tranquilino Moral', 'Malabon', 'Fe De Castro', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(9, 2, '1994-01-02', 'Edna', 'T.', 'Morilla', '1993-02-07', 'Civ.', 'Ricardo G. Morilla', 'Cebu', 'Laura Tolibas', 'Leyte', 'Purok VI Hernandez St., Catmon, Malabon', 'Jay-R Cabatana', 'Malabon', 'Philip Barrientos', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(10, 2, '1994-01-02', 'Jeric', '', 'Tajaran', '1993-05-11', 'Pro.', 'Julian Tajaran', 'Malabon', 'Clarissa Rodriguez', 'Malabon', '143 Sanciangco St., Catmon, Malabon', 'Rodolfo Motos', 'Malabon', 'Giselle Tajaran', 'Malabon', 'Rev. Fr, Eusebio Manangbao, SVD'),
(11, 2, '1994-01-02', 'Dave', '', 'Fortuna', '0000-00-00', 'Leg.', 'Pricilo Fortuna Jr.', 'Cebu', 'Leny Ocate', 'Bacolod', '32-C Arellano St., Malabon', 'Anecito Solis', 'Malabon', 'Lorna Fortuna', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(12, 2, '1994-01-02', 'Jerome', '', 'Fernando', '1992-04-06', 'Leg.', 'Ronaldo Fernando', 'Malabon', 'Rosalia Cubacub', 'Caloocan', 'Sanciangco St., Tonsuya, Malabon', 'Roberto C. Felix', 'Malabon', 'Irma Corpuz', 'Caloocan', 'Rev. Fr. Eusebio Manangbao, SVD'),
(13, 2, '1994-01-02', 'Mary Christine', 'S.', 'Arpon', '1993-09-25', 'Leg.', 'Rolito E. Arpon', 'Leyte', 'Marilyn B. Supolmo', 'Masbate', 'Pinagsabugan, Longos, Malabon', 'Simplicio Arpon Jr.', 'Malabon', 'Wilma Pilande', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(14, 2, '1994-01-09', 'Nelson', 'S.', 'Daguiles', '1970-08-06', 'Leg.', 'Lusino S. Daguiles', '', 'Maria Siso', '', '3. Gen. P. Borromeo, Longos, Malabon', 'Benny Mangalindan', 'Bataan', 'Delia Palines', 'Bicutan', 'Rev. Fr. Eusebio Manangbao, SVD'),
(15, 2, '1994-01-09', 'Jamaica', 'G.', 'Aguinaldo', '1993-01-03', 'Civ.', 'Nicanor Aguinaldo', '', 'Mary Joy Gacosta', '', '50 Sanciangco St., Tonsuya, Malabon', 'Francisco Francisco', 'Malabon', 'Josefina Evasco', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(16, 2, '1994-01-09', 'Ericka', 'E.', 'Zafra', '1993-09-04', 'Leg.', 'Hernando V. Zafra', 'Manila', 'Violeta Esguerra', 'Malabon', 'Maysilo, Malabon, Metro Manila', 'Ronaldo Torres', 'Manila', 'Rita Gatdula', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(17, 2, '1994-01-09', 'Antonio', '', 'Cagne Jr.', '1993-08-28', 'Leg.', 'Antonio Cagne Sr.', 'Leyte', 'Anabel Daygam', 'Misamis Occidental', '17 Pasco St., Tonsuya, Malabon', 'Nick Isidro', 'Malabon', 'Cecil San Pedro', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(18, 2, '1994-01-09', 'Eduardo', '', 'Medall, Jr.', '1992-11-25', 'Civ.', 'Eduardo Medalla, Sr.', 'Leyte', 'Anabel Daygam', 'Misamis Occidental', '45- B Sanciangco St., Tonsuya, Malabon', 'Garry Blanco', 'Malabon', 'Marilou Paganpan', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(19, 2, '1994-01-09', 'Charlene', '', 'Dionisio', '1993-07-18', 'Leg.', 'Marianito Dionisio', 'Romblon', 'Lourdes Roque', 'Malabon', '14 C. Perez St., Tonsuya, Malabon', 'Alladino Abrazaldo', 'Malabon', 'Elizabeth Salenga', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(20, 2, '1994-01-09', 'Monique', '', 'Bautista', '1993-12-12', 'Civ.', 'Rogelio Bautista, Jr.', 'Malabon', 'Raquel Bautista', 'Malabon', '121 Sitio Jasmin, Niugan, Malabon', 'Bayani Bautista', 'Bulacan', 'Marlyn Abellera', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(21, 2, '1994-01-09', 'Michael Angelo', 'C.', 'Mallari', '1993-08-25', 'Leg.', 'Anotonio C. Mallari', 'Malabon', 'Edna Conanan', 'Manila', '31 Sitio Camia, Niugan, Malabon', 'Junie Sadicon', 'Malabon', 'Dorenda Corcuera', 'Mandaluyong', 'Rev. Fr. Eusebio Manangbao, SVD'),
(22, 2, '1994-01-09', 'Kc Lyn', 'A.', 'Sta. Maria', '1993-11-21', 'Leg.', 'Reynaldo Sta. Maria', 'Malabon', 'Barbara Alima', 'Leyte', 'Sitio Jasmin, Niugan, Malabon', 'Noel De Dios', 'Malabon', 'Flory Garcia', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(23, 2, '1994-01-09', 'Maria Victoria', 'C.', 'Pastrana', '1993-10-11', 'Leg.', 'Rey Pastrana', 'Caloocan', 'Gina Dela Cruz', 'Caloocan', '63 C. Santos St., Niugan, Malabon', 'Napoleon Dizon', 'Caloocan', 'Gina Cruz', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(24, 2, '1994-01-09', 'Jeric', '', 'Tulalian, Jr.', '1993-10-11', 'Leg.', 'Elias Tulilian', 'Bicol', 'Jasmin Recto', 'Manila', '71 Sityo Champaca, Niugan, Malabon', 'Ronald Santiago', 'Malabon', 'Elsa Dandula', 'Malabon', 'Rev. Fr. Eusebio Manangbao, SVD'),
(25, 2, '1994-01-16', 'John Camillus', 'R.', 'Datuin', '1993-10-03', 'Leg.', 'Ronilo T. Datuin', 'Manila', 'Susan G. Ramos', 'Malabon', '12 Pinagpala St., Tonusya, Malabon', 'Zenaida Medel', 'Malabon', 'Jaime R. Garcia', 'Malabon', 'Rev. Fr. Joselino B. Tuazon'),
(26, 2, '1994-01-16', 'Mark Jim', '', 'Montalbo', '1993-12-04', 'Leg.', 'Jimmy Montalbo', 'Caloocan', 'Marissa G. Marcos', 'Caloocan', '1057 INT. 2 Gen. San Miguel, Caloocan', 'Rodel Angeles', 'Caloocan', 'Emma Montalbo', 'Caloocan', 'Rev. Fr. Joselino B. Tuazon'),
(27, 2, '1994-01-16', 'Mark Bryan', '', 'Jabagat', '1993-09-27', 'Leg.', 'Franklin Jabagat', 'Negros', 'Teresita Mangalindan', 'Malabon', 'F. Palmario St., Tonsuya, Malabon', 'Rinel Macaranas', 'Malabon', 'Analyn Pajarillo', 'Malabon', 'Rev. Fr. Joselino B. Tuazon'),
(28, 2, '1994-01-16', 'Beverly', '', 'Atian', '1993-11-02', 'Leg.', 'Virgilio N. Atian', 'Camarines Sur', 'Merced Rull', 'Camarines Sur', 'L6 B12 49N. P3 A2 Kaunlaran Vill., DD, Malabon', 'Narciso LEgalion', 'Malabon', 'Evelyn Morillo', 'Malabon', 'Rev. Fr. Joselino B. Tuazon'),
(29, 2, '1994-01-16', 'Madel', 'S.', 'Mercado', '1993-09-18', 'Leg.', 'Rodelio O. Mercado', 'Malabon', 'Ma. Teresa M. Salvador', 'Manila', 'Tonsuya, Malabon, Metro Manila', 'Julio Salvador', 'Malabon', 'Elvie Del Mundo', 'Paranaque', 'Rev. Fr. Joselino B. Tuazon'),
(30, 0, '0000-00-00', '', '', '', '0000-00-00', 'Leg.', '', '', '', '', '', '', '', '', '', ''),
(31, 2, '2017-02-26', 'Ian', 'S', 'Apront', '2017-03-02', 'Leg.', 'Roy Apront', 'Negros', 'Evelyn Saladino', 'Ilocos', '7f Palmario St., Tonsuya Malabon City', 'Louie Cortez', 'Obando Bulacan', 'Claire Ilagan', 'Obando Bulacan', 'Fr Benedict Cervantes'),
(33, 2, '1994-01-16', 'Joseph', '', 'Padohinog', '1993-09-08', 'Leg.', 'Orly Padohinog', 'Antique', 'Gina Alvarez', 'Manila', '40 Vicencio St., Niugan, Malabon', 'Policarpo Nocos', 'Malabon', 'Lani Alvarez', 'Malabon', 'Joselino Tuazon');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE IF NOT EXISTS `confirmation` (
  `no` varchar(1) NOT NULL,
  `nob` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `chch` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `ninong` varchar(50) NOT NULL,
  `ninang` varchar(50) NOT NULL,
  `pesos` varchar(10) NOT NULL,
  `bishop` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`no`, `nob`, `date`, `fname`, `lname`, `age`, `chch`, `address`, `pname`, `mname`, `ninong`, `ninang`, `pesos`, `bishop`) VALUES
('1', '1', '1990-06-12', 'Jasper', 'Sarmiento', 13, 'Sadpp', 'Malabon', 'Sumilang Sarmiento', 'Norma Sarmiento', 'Edgar Bula', 'Teddy Vallecer', '30', 'Sobrevinas'),
('2', '1', '1990-06-12', 'Lawrence', 'Sarmiento', 13, 'Sadpp', 'Malabon', 'Luis Sarmiento', 'Sinjorosa Canes', 'Teddy Vallecer', 'Edgar Bulay', '30', 'Sobrevinas');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE IF NOT EXISTS `death` (
  `no` varchar(2) NOT NULL,
  `nob` varchar(1) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `namatay` date NOT NULL,
  `nilibing` date NOT NULL,
  `age` int(11) NOT NULL,
  `status` enum('Single','Married','Widowed','Child') NOT NULL,
  `pname` varchar(60) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sacrament` varchar(20) NOT NULL,
  `kinamatay` varchar(60) NOT NULL,
  `cemetery` varchar(60) NOT NULL,
  `classis` varchar(30) NOT NULL,
  `minister` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`no`, `nob`, `fname`, `lname`, `namatay`, `nilibing`, `age`, `status`, `pname`, `address`, `sacrament`, `kinamatay`, `cemetery`, `classis`, `minister`) VALUES
('1', '1', 'Atanacia', 'Ramirez', '1989-10-13', '1989-10-13', 78, 'Widowed', 'Rogelio', 'Caloocan City', 'Non', 'Pulmonary', 'Tugatog Cemetery', 'Ambassador', 'Fr Erick Santos'),
('2', '1', 'awdaw', 'dawdawd', '2017-02-28', '2017-02-28', 12, 'Single', 'awfda', 'awfsfd', 'bbcvbc', 'cvbcvb', 'ggd', 'nbv', 'vbn');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `fname`, `lname`, `email`, `address`, `position`) VALUES
('544654', 'wrewr././', 'gfdgfd', 'fd45465', 'dfgfder5', 'fdgfdgdfdgfe4353543./././.', 'user'),
('admin', 'sadp2017', 'alma', 'pasola', 'alma.pasola@yahoo.com', 'tonsuya, malabon', 'admin'),
('ange', 'ronquillo', 'ange', 'ronquillo', 'angeronquillo', '', 'user'),
('angel', 'gamsahamnida', 'angelica', 'ronquillo', 'aronquillo78@yahoo.com', '142 F, Gonzales St, Panghulo, Obando, Bulacan', 'user'),
('cielo', 'macion', 'cielo', 'macion', 'cielomacio@yahoo.com', 'potrero, malabon city', 'user'),
('coleen', 'moralidad', 'coleen', 'moralidad', 'coleen.moralidad@yahoo.com', 'malabon city', 'user'),
('doflamingo', 'qwerty', 'marc', 'barrientos', 'asdasd@yahoo', 'caloocan', 'user'),
('edgardo', 'reyes21', 'edgardo', 'reyes', 'edgardoreyes2115@yahoo.com', 'malabon', 'user'),
('Erroll', 'mesina', 'Erroll', 'Mesina', 'erroll.mesina@yahoo.com', 'palmario, malabon', 'user'),
('ian', 'ian', 'ian', 'ian', 'ian', 'ian', 'user'),
('rose', 'palay', 'rose', 'palay', 'rose@yahoo.com', 'manila', 'user'),
('sdfq', 'dfsq', 'fds', 'sdfds', 'sadas98@hotmail.com', 'sdfdfs/', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `matrimony`
--

CREATE TABLE IF NOT EXISTS `matrimony` (
  `no` varchar(2) NOT NULL,
  `nob` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `bname` varchar(60) NOT NULL,
  `gname` varchar(60) NOT NULL,
  `bstatus` varchar(30) NOT NULL,
  `gstatus` varchar(30) NOT NULL,
  `bage` varchar(5) NOT NULL,
  `gage` varchar(5) NOT NULL,
  `badd` varchar(30) NOT NULL,
  `gadd` varchar(30) NOT NULL,
  `bparentf` varchar(50) NOT NULL,
  `bparentm` varchar(50) NOT NULL,
  `faddress` varchar(50) NOT NULL,
  `gparentf` varchar(50) NOT NULL,
  `gparentm` varchar(50) NOT NULL,
  `gaddress` varchar(50) NOT NULL,
  `ninong` varchar(50) NOT NULL,
  `nresidence` varchar(60) NOT NULL,
  `ninang` varchar(50) NOT NULL,
  `gresidence` varchar(50) NOT NULL,
  `minister` varchar(50) NOT NULL,
  `license` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrimony`
--

INSERT INTO `matrimony` (`no`, `nob`, `date`, `bname`, `gname`, `bstatus`, `gstatus`, `bage`, `gage`, `badd`, `gadd`, `bparentf`, `bparentm`, `faddress`, `gparentf`, `gparentm`, `gaddress`, `ninong`, `nresidence`, `ninang`, `gresidence`, `minister`, `license`) VALUES
('1', '1', '1989-10-15', 'Danillo Abcede Jr', 'Angela Gutierrez', 'Single', 'Single', '22', '24', 'Zambales', 'Malabon', 'Danilo Abcede Jr', 'Melania Reyes', 'San Miguel Caloocan', 'Juanito Gutierrez', 'Leonora Miranda', 'Malabon', 'Rodolfo Miranda', 'Pasig City', 'Antonia David', 'Caloocan City', 'Fr Enrique Santos', 'awaw'),
('1', '2', '2017-02-13', 'awd', 'awdaw', 'awdaw', 'awda', '12', '21', 'acac', 'cavev', 'evsvs', 'svsev', 'sevsev', 'sevse', 'esvesv', 'seves', 'seves', 'sevsv', 'svcdsv', 'zxcvz', 'terte', 'tre');

-- --------------------------------------------------------

--
-- Table structure for table `mintention`
--

CREATE TABLE IF NOT EXISTS `mintention` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `cpnumber` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `intention` enum('Thanks Giving','Soul','Birthday','Sick','Fast Recovery','Safe Journey') NOT NULL,
  `date` date NOT NULL,
  `time` enum('6:00 A.M','7:30 A.M','9:00 A.M','4:00 P.M','5:30 P.M','6:30 P.M','7:00 P.M') NOT NULL,
  `ni` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mintention`
--

INSERT INTO `mintention` (`fname`, `lname`, `cpnumber`, `address`, `intention`, `date`, `time`, `ni`) VALUES
('Marimar', 'Farina', '09075858219', 'Navotas City', 'Birthday', '2017-02-12', '9:00 A.M', 'Marimar Farina'),
('Ian', 'Apront', '09362031667', 'Tonsuya, Malabon', 'Thanks Giving', '2017-02-12', '9:00 A.M', 'Ianda'),
('Angelica', 'Ronquillo', '09357553643', '142 F,Gonzales St Panghulo', 'Birthday', '2017-02-28', '5:30 P.M', 'Angelica'),
('ian', 'apront', '09362031667', 'palmario', 'Thanks Giving', '2017-02-22', '6:00 A.M', 'ian'),
('claire', 'ilagan', '09165744281', 'obando', 'Thanks Giving', '2017-02-26', '9:00 A.M', 'claire ilagan'),
('Ian', 'Apront', '09362031667', 'tonsuya, malabon', 'Thanks Giving', '2017-02-26', '9:00 A.M', 'Ian Apront'),
('bawdawd', 'opipoi', '11111111111', 'gegfd', 'Birthday', '0000-00-00', '5:30 P.M', 'qweqe');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `number` varchar(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `reserve` enum('Baptism','Mass','Wedding','Mass Burial','Anointing of the Sick') NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`fname`, `lname`, `number`, `address`, `reserve`, `date`, `time`) VALUES
('ange', 'ronquillo', '09357553643', 'panghulo, obando', 'Baptism', '2017-02-19', '22:00:00'),
('Claire', 'Ilagan', '09362031667', '7f Palmario St., Tonsuya Malabon City', 'Baptism', '2017-02-27', '12:12:00'),
('', '', '', '', 'Baptism', '0000-00-00', '00:00:00'),
('Ian', 'Apront', '09362031667', 'tonsuya, malabon', 'Baptism', '2017-03-05', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptism`
--
ALTER TABLE `baptism`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `matrimony`
--
ALTER TABLE `matrimony`
 ADD PRIMARY KEY (`license`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptism`
--
ALTER TABLE `baptism`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
