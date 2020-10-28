-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 08:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `emp_id` text NOT NULL,
  `unit_kerja` text NOT NULL,
  `pembebanan` text NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `gol` text,
  `tgl_awal_kerja` text,
  `masa_kerja` text,
  `status_karyawan` text,
  `gpb20` text,
  `tt20` text,
  `upah20` text,
  `upah_kebijakan` text,
  `premi` text,
  `pph21` text,
  `lain_lain` text,
  `proporsional` text,
  `upah_variable` text,
  `upah_kotor` text,
  `upah_bulat` text,
  `kas_bon` text,
  `bpjs_k` text,
  `bpjs_tk` text,
  `pph21_1` text,
  `pinjaman_adhimix` text,
  `simpanan_wajib_adhimix` text,
  `potongan_lain_lain` text,
  `total_potongan` text,
  `thp_upah` text,
  `tp` text,
  `tsk` text,
  `tlk` text,
  `email` text NOT NULL,
  `beban_kesehatan_perusahaan_real` text,
  `beban_kesehatan_perusahaan` text,
  `no_bpjs_k` text,
  `no_bpjs_tk` text,
  `npwp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `emp_id`, `unit_kerja`, `pembebanan`, `nama`, `jabatan`, `gol`, `tgl_awal_kerja`, `masa_kerja`, `status_karyawan`, `gpb20`, `tt20`, `upah20`, `upah_kebijakan`, `premi`, `pph21`, `lain_lain`, `proporsional`, `upah_variable`, `upah_kotor`, `upah_bulat`, `kas_bon`, `bpjs_k`, `bpjs_tk`, `pph21_1`, `pinjaman_adhimix`, `simpanan_wajib_adhimix`, `potongan_lain_lain`, `total_potongan`, `thp_upah`, `tp`, `tsk`, `tlk`, `email`, `beban_kesehatan_perusahaan_real`, `beban_kesehatan_perusahaan`, `no_bpjs_k`, `no_bpjs_tk`, `npwp`) VALUES
(5, '100101', 'KANTOR PUSAT APIK', 'KANTOR PUSAT APIK', ' https://caramengatasimasalahmu.blogspot.com/ ', 'IT', 'O', '11/3/2019', '16.07', 'TK', '  17,172,554 ', '  4,000,000 ', '  21,172,554 ', '  19,055,298 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dustwork.id@gmail.com', NULL, NULL, NULL, NULL, NULL),
(6, '516', 'KANTOR PUSAT APIK', 'KANTOR PUSAT APIK', 'Ilman Darmawan', 'CC', 'O', '11/4/2019', '16.07', 'TK', '  17,172,554 ', '  4,000,000 ', '  21,172,554 ', '  19,055,298 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rootwritter@aol.com', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
