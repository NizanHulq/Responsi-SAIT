-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 05.47
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_cucisepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pemesanan`
--

CREATE TABLE `form_pemesanan` (
  `nama` varchar(200) DEFAULT NULL,
  `noHp` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `paket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form_pemesanan`
--

INSERT INTO `form_pemesanan` (`nama`, `noHp`, `email`, `alamat`, `paket`) VALUES
('Nizan Dhiaulhaq', '2147483647', 'nizan_dhiaulhaq@yahoo.com', 'JL. BARUNA TIMUR X NO.370 TEGAL ASRI RT/RW 002/016 KELURAHAN TEGALKAMULYAN KECAMATAN CILACAP SELATAN', 'Deep Cleaning'),
('Umi Suprapti', '2147483647', 'hulqgame@gmail.com', 'Jl baruna timur x no 370', 'Unyellowing'),
('Dudi Dodu', '08763526712', 'siap.dudi@gmail.com', 'Jalan. Nyasar No. 120 ', 'Fast Cleaning'),
('Nabila Siapa Hayo', '0987654321', 'nabnab.nab@gmail.com', 'Jl. Raya Kaya No. 3000', 'Fast Cleaning'),
('Nabila Siapa Hayo', '0987654321', 'nabnab.nab@gmail.com', 'Jl. Raya Kaya No. 3000', 'Fast Cleaning'),
('Nabila Siapa Hayo', '0987654321', 'nabnab.nab@gmail.com', 'Jl. Raya Kaya No. 3000', 'Fast Cleaning'),
('Dhia Ul', '0832192837', 'DhiaulDhi@gmail.com', 'Jl. Baru DiBangun No. 100', 'Deep Cleaning'),
('Nizan', '089283727167', 'nizanizan@gmail.com', 'Jl. Baruna Raya No. 2220', 'Deep Cleaning');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
