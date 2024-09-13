-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2024 pada 11.13
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `nama` varchar(100) NOT NULL,
  `ucapan` varchar(500) NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`nama`, `ucapan`, `submit`) VALUES
('zaki', 'selamat atas pernikahannya kak', ''),
('zaki', 'selamat atas pernikahannya kak', ''),
('dsfgdf', 'dfgadfgdfg', ''),
('ayu', 'selamat mbaak', ''),
('ayu', 'selamat mbaak', ''),
('jaki', 'mantap', ''),
('zaki', 'werdfadfasdf', ''),
('gfsdfg', 'fgbdsfbsdf', ''),
('sdfgsdfgs', 'sdfgsdfgs', ''),
('dfgsdf', 'sdfgsdfg', ''),
('dsfsdf', 'sdfsdf', ''),
('sdasdf', 'asdfasdfasd', ''),
('aer675432324567897653', 'adfadfasdfasdfasd', ''),
('wefefasdf', 'sdfasdfasdf', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
