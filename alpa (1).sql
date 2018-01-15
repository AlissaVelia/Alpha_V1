-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2018 pada 13.37
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `KD_ABSEN` int(11) NOT NULL,
  `NIS` int(11) DEFAULT NULL,
  `TGL_ABSEN` datetime DEFAULT NULL,
  `KETERANGAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `KD_GURU` int(11) NOT NULL,
  `KD_MAPEL` int(11) DEFAULT NULL,
  `NM_GURU` varchar(20) DEFAULT NULL,
  `NIK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`KD_GURU`, `KD_MAPEL`, `NM_GURU`, `NIK`) VALUES
(108, 23, 'Siana Norma Heny', 10880011),
(117, 13, 'TULUS ANDRIANTO', 11720059),
(127, 11, 'AHMAD NASIKIN, M.Pd', 2740012),
(138, 21, 'Firmansyah Ayatullah', 13890062),
(148, 14, 'Ana Wahyuning Sholik', 14880070),
(158, 12, 'Felly Fitriani Supri', 15870040),
(159, 39, 'Hirga Ertama Putra, ', 15910008),
(168, 36, 'PASHATANIA FITRI IND', 6820024),
(169, 32, 'Firdausa, S.Pd', 16940014),
(176, 24, 'SRI CHUSNUL HANIYAH,', 17680052),
(208, 38, 'IFA CHOIRUNNISA, M.P', 10860082),
(238, 33, 'Hendra Wahyu Prasety', 13840074),
(248, 15, 'Jevi Wenda Santi,S P', 14890053),
(258, 16, 'Fajar Setiyawan, S.P', 15850085),
(268, 37, 'HENDRO SOEMARNO, S.T', 16810041),
(269, 34, 'Muhamad Arifin, M.Pd', 16910055),
(348, 311, 'Candra Kurniawan, S.', 14870014),
(358, 31, 'Laili Agustin, S.T', 15880052),
(458, 310, 'Susanto, S.Kom', 15820067),
(786, 35, 'MOKHAMAD HADI WIJAYA', 7860075),
(927, 22, 'SANTY FIDRIANNA. S.E', 92720057),
(995, 25, 'Soelarso, S.T', 99550012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kehadiran`
--

CREATE TABLE `tb_kehadiran` (
  `KD_KEHADIRAN` int(11) NOT NULL,
  `NIS` int(11) DEFAULT NULL,
  `MASUK` char(2) DEFAULT NULL,
  `IJIN` char(2) DEFAULT NULL,
  `SAKIT` char(2) DEFAULT NULL,
  `ALPA` char(2) DEFAULT NULL,
  `LAST_ABSEN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kehadiran`
--

INSERT INTO `tb_kehadiran` (`KD_KEHADIRAN`, `NIS`, `MASUK`, `IJIN`, `SAKIT`, `ALPA`, `LAST_ABSEN`) VALUES
(2, 5555, '0', '1', '0', '0', '2018-01-14'),
(3, 5556, '0', '0', '1', '0', '2018-01-14'),
(4, 5597, '0', '0', '0', '1', '2018-01-14'),
(5, 5600, '1', '0', '0', '0', '2018-01-14'),
(6, 5602, '1', '0', '0', '0', '2018-01-14'),
(7, 5720, '0', '0', '0', '1', '2018-01-14'),
(8, 5748, '1', '0', '0', '0', '2018-01-14'),
(9, 5745, '1', '0', '0', '0', '2018-01-14'),
(10, 5613, '0', '1', '0', '0', '2018-01-14'),
(11, 5708, '1', '0', '0', '0', '2018-01-14'),
(12, 5556, '1', '0', '0', '0', '2018-01-15'),
(13, 5597, '1', '0', '0', '0', '2018-01-15'),
(14, 5745, '1', '0', '0', '0', '2018-01-15'),
(15, 5748, '1', '0', '0', '0', '2018-01-15'),
(16, 5613, '1', '0', '0', '0', '2018-01-15'),
(17, 5720, '0', '0', '0', '1', '2018-01-15'),
(18, 5555, '1', '0', '0', '0', '2018-01-15'),
(19, 5600, '1', '0', '0', '0', '2018-01-15'),
(20, 5786, '1', '0', '0', '0', '2018-01-15'),
(21, 5759, '1', '0', '0', '0', '2018-01-15'),
(22, 5649, '1', '0', '0', '0', '2018-01-15'),
(23, 5751, '1', '0', '0', '0', '2018-01-15'),
(24, 5763, '0', '1', '0', '0', '2018-01-15'),
(25, 5708, '1', '0', '0', '0', '2018-01-15'),
(26, 5775, '1', '0', '0', '0', '2018-01-15'),
(27, 5602, '0', '1', '0', '0', '2018-01-15'),
(28, 5618, '1', '0', '0', '0', '2018-01-15'),
(29, 5646, '1', '0', '0', '0', '2018-01-15'),
(30, 5792, '1', '0', '0', '0', '2018-01-15'),
(31, 5707, '1', '0', '0', '0', '2018-01-15'),
(32, 5550, '1', '0', '0', '0', '2018-01-15'),
(33, 5717, '0', '0', '1', '0', '2018-01-15'),
(34, 5656, '1', '0', '0', '0', '2018-01-15'),
(35, 5757, '1', '0', '0', '0', '2018-01-15'),
(36, 5444, '1', '0', '0', '0', '2018-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `KD_KELAS` int(11) NOT NULL,
  `NM_KELAS` varchar(10) DEFAULT NULL,
  `JML_SISWA` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`KD_KELAS`, `NM_KELAS`, `JML_SISWA`) VALUES
(101, 'XRPL1', 4),
(102, 'XRPL2', 4),
(103, 'XRPL3', 4),
(104, 'XRPL4', 4),
(105, 'XRPL5', 4),
(106, 'XRPL6', 4),
(111, 'XTKJ1', 4),
(112, 'XTKJ2', 4),
(113, 'XTKJ3', 4),
(114, 'XTKJ4', 4),
(115, 'XTKJ5', 0),
(116, 'XTKJ6', 0),
(201, 'XIRPL1', 0),
(202, 'XIRPL2', 0),
(203, 'XIRPL3', 0),
(204, 'XIRPL4', 0),
(205, 'XIRPL5', 0),
(206, 'XIRPL6', 0),
(211, 'XITKJ1', 0),
(212, 'XITKJ2', 0),
(213, 'XITKJ3', 0),
(214, 'XITKJ4', 0),
(215, 'XITKJ5', 0),
(216, 'XITKJ6', 0),
(301, 'XIIRPL1', 0),
(302, 'XIIRPL2', 0),
(303, 'XIIRPL3', 0),
(304, 'XIIRPL4', 0),
(305, 'XIIRPL5', 0),
(306, 'XIIRPL6', 0),
(311, 'XIITKJ1', 0),
(312, 'XIITKJ2', 0),
(313, 'XIITKJ3', 0),
(314, 'XIITKJ4', 0),
(315, 'XIITKJ5', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `USERNAME` varchar(11) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`USERNAME`, `PASSWORD`) VALUES
('admin', 'admin'),
('kurikulum', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `KD_MAPEL` int(11) NOT NULL,
  `NM_MAPEL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`KD_MAPEL`, `NM_MAPEL`) VALUES
(11, 'AGAMA'),
(12, 'BIN'),
(13, 'MAT'),
(14, 'SEJARAH'),
(15, 'BIG'),
(16, 'PKN'),
(21, 'SENBUD'),
(22, 'PKWU'),
(23, 'OR'),
(24, 'BJAWA'),
(25, 'SISTEL'),
(31, 'SISOS'),
(32, 'WEB'),
(33, 'PPB'),
(34, 'PBO'),
(35, 'PPL'),
(36, 'GRAFIK'),
(37, 'DEKSTOP'),
(38, 'BASDAT'),
(39, 'RBJ'),
(310, 'ADSER'),
(311, 'JARDAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sikap`
--

CREATE TABLE `tb_sikap` (
  `ID_SIKAP` int(11) NOT NULL,
  `KD_MAPEL` int(11) DEFAULT NULL,
  `NIS` int(11) DEFAULT NULL,
  `KD_GURU` int(11) DEFAULT NULL,
  `SIKAP` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sikap`
--

INSERT INTO `tb_sikap` (`ID_SIKAP`, `KD_MAPEL`, `NIS`, `KD_GURU`, `SIKAP`) VALUES
(1, 23, 5556, 108, 'B'),
(2, 13, 5041, 117, 'A'),
(3, 14, 5318, 148, 'D'),
(4, 14, 5343, 148, 'A'),
(5, 23, 5041, 108, 'A'),
(6, 23, 5318, 108, 'A'),
(7, 12, 5041, 158, 'A'),
(8, 12, NULL, 158, NULL),
(9, 12, 5333, 158, 'D'),
(10, 11, 5343, 127, 'C'),
(11, 11, NULL, 127, NULL),
(12, 11, 5355, 127, 'D'),
(13, 11, 5708, 127, 'A'),
(14, 11, NULL, 127, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `NIS` int(11) NOT NULL,
  `KD_WALSIS` int(11) DEFAULT NULL,
  `KD_KELAS` int(11) DEFAULT NULL,
  `NM_SISWA` varchar(500) DEFAULT NULL,
  `TTL` date DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `ASAL_SMP` varchar(20) DEFAULT NULL,
  `NO_TELP` decimal(10,0) DEFAULT NULL,
  `NM_AYAH` varchar(20) DEFAULT NULL,
  `NM_IBU` varchar(20) DEFAULT NULL,
  `NO_AYAH` decimal(8,0) DEFAULT NULL,
  `NO_IBU` decimal(8,0) DEFAULT NULL,
  `JENKEL` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`NIS`, `KD_WALSIS`, `KD_KELAS`, `NM_SISWA`, `TTL`, `ALAMAT`, `ASAL_SMP`, `NO_TELP`, `NM_AYAH`, `NM_IBU`, `NO_AYAH`, `NO_IBU`, `JENKEL`) VALUES
(5041, 118, 112, 'FIORELLA AMELIA SAFIRA', '2002-10-31', 'PERUMAHAN BUMI MERANTI WANGI B', 'SMPN 20 MALANG', '599722', 'NANANG HIDAYAT', 'IRMAYANTI', '99999999', '99999999', 'P'),
(5318, 178, 114, 'Achmed Bintang Erfanillah Ayodha', '2001-11-02', 'Perumahan Taman Landungsari In', 'SMP Ar-Rohmah Putra', '328915', 'Bagus Budi Cahyono,', 'Meti Purbianti, S.Pd', '3329653', '3329653', 'L'),
(5333, 178, 111, 'ANANDHA IKA SETYANTI', '2002-03-19', 'Perum Dampit Permai C4/02', 'SMP Negeri 1 Dampit', '76928176', 'Andriyono Ciptosanto', 'Tri Mukti Purnasuran', '55697172', '55697172', 'P'),
(5343, 485, 111, 'Anugerah Ramadhani', '2001-11-16', 'Jl. Danau Buyan G7/E16', 'SMPN 3 Kepanjen', '792616', 'Kurniawan Juniadi', 'Neneng Kusrini', '53244474', '53244474', 'L'),
(5355, 889, 112, 'Bagas Maulana', '2001-06-03', 'Jl. Pelabuhan Bakauhuni No.07', 'MTs Nahdlatuth Thala', '291743', 'Fuad Dedik Hartono', 'Kridu Wahyunintyas', '3475183', '3475183', 'L'),
(5439, 167, 113, 'LINTANG FAJARIANTI AMARADIPTA', '2003-02-14', 'JL.RAYA WAGIR RT. 8 RW. 1 SITI', 'SMPN 1 WAGIR', '356118', 'Irwan suprayitno', 'Dyah purwatmi kusuma', '19880699', '19880699', 'P'),
(5444, 159, 111, 'M. Yusron Irza Annafi', '2002-07-24', 'Jl. Danau Kerinci V Sawojajar ', 'SMP Negeri 1 Jabon S', '723108', 'Wahyudi Hariyono', 'Asririn Faidah Chafa', '50837273', '50837272', 'L'),
(5451, 149, 113, 'Mochammad Rakha Hanan', '2002-05-23', 'JLN BANTARAN INDAH BLOK E NO.1', 'SMP Negeri 3 Malang', '703892', 'MOCHAMMAD HAFID', 'CAHYANING TRI GUNAST', '32666780', '32666780', 'L'),
(5477, 127, 112, 'NADHIRA AULIA CAHYANING QISTHINA', '2001-12-19', 'Jl Kapi Sata Bali 16F No 2 Kab', 'SMPN 21 Malang', '716397', 'SUPRIYO', 'ANIS SHOKIBAH', '43683600', '43683600', 'P'),
(5506, 889, 114, 'Ravi Alfarizy Gymnastiar', '2002-04-10', 'Jalan Kapi Sraba X10A38 Sawoja', 'SMP Negeri 16 Malang', '882256', 'Fuad Choliq', 'Niken Pramesti', '2077828', '2077828', 'L'),
(5513, 159, 113, 'Risky Adi Surya Pratama', '2001-07-16', 'Jln. Danau Buyan G7D7', 'SMPN 2 Probolinggo', '398775', 'Suryadi', 'Etty Mulyaningsih', '36482552', '36482552', 'L'),
(5522, 167, 111, 'Shofi''ur Rizky Iffanda', '2002-03-03', 'JL. DANAU LAUT TAWAR 4G5A-9', 'SMPN 1 Perak', '201492', 'MAT URIP', 'SOFIYAH', '3001758', '3001758', 'L'),
(5525, 158, 113, 'SRI WIJI SULISTYO WURI', '2002-05-08', 'Jl. Stasiun No.18 Dampit', 'SMPN 1 Turen', '312876', 'SUPRIYONO', 'SRI ANDAYANI', '45364411', '45364411', 'P'),
(5533, 926, 114, 'TIARA AMALIA PUTRI', '2002-01-06', 'Jalan Danau Ngebel F5C No.10', 'SMPN 1 Kraksaan', '657433', 'Heru Purwanto', 'Psykha Nur Cahyani', '10538763', '10538763', 'P'),
(5538, 926, 112, 'Wahyu Ristho Ramadhani', '2001-12-12', 'Perum Griya Sampoerna Sejahter', 'SMP Islam Sabilillah', '381965', 'M Thomas Hendrianto', 'Risa Safrida', '3839827', '3839827', 'L'),
(5540, 485, 114, 'WIKKE ALVINA MEDYANTI', '2002-03-17', 'KPR Asabri I Blok B 208 RT 01/', 'SMP Ar-Rohmah Putri ', '778265', 'Semedi, S.Pd.', 'Dra. Sri Suwartini, ', '30768181', '30768181', 'P'),
(5550, 118, 106, 'AAYYASHA MULIA ROSADI', '2002-04-19', 'Perum Sukorejo indah II/4, Nga', 'MTs NEGERI 2 KEDIRI', '827395', 'Imron Rosadi', 'Endang Mulyaningtyas', '3537013', '34142289', 'P'),
(5555, 159, 102, 'Adam Wildan Ramadhan Susanto', '2001-01-12', 'JL. RA KARTINI Jabung Kemantre', 'SMPN 21 Malang', '477509', 'Agus Susanto', 'Eny Isnawati', '35477509', '35477509', 'L'),
(5556, 149, 104, 'Ade Guntur Ramadhan', '2001-11-28', 'Jl.Gubeng Masjid 2/19 Surabaya', 'SMPN 29 SURABAYA', '562891', 'IMAM SOEDJONO', 'RIANINGSIH', '30401915', '30401915', 'L'),
(5597, 889, 103, 'Atmanur Makarym', '2002-02-03', 'JL.DANAU KERINCI V G6 G NO 15', 'SMPN 7 JEMBER', '145892', 'Budiarso', 'Rina Suntiana', '9708668', '9708667', 'L'),
(5600, 167, 102, 'AULYA DINA RIFQIAH', '2002-03-15', 'Jl. Gubis Baru No.20', 'SMPN 3 MALANG', '389765', 'Mashudi', 'Mutmainah', '55999760', '55999760', 'P'),
(5602, 158, 104, 'AURELIA QORRY SONIA', '2001-09-05', 'RT. 05 RW.01 Dusun Puser, Desa', 'SMP Negeri 1 Ngunut ', '668079', 'Sudarto', 'Eny Widayati', '16680797', '16680797', 'P'),
(5613, 118, 101, 'CAHYA TRI AMIRTHA AGSANIA', '2001-07-25', 'Desa Prambonwetan RW. 01 RT. 0', 'SMPN 1 Rengel', '892758', 'Mashuri', 'Lulut Karyawati', '16249209', '16249209', 'P'),
(5618, 178, 105, 'CLARISSA SANINDITA REIKISYIFA', '2001-10-08', 'Jl. S Supriadi GG8 No14 RW 06 ', 'SMPN 02 Malang', '823459', 'Samsul Hidayat', 'Diyah Musiyati', '3899943', '3899943', 'P'),
(5646, 485, 105, 'Farhan Habibun', '2001-09-27', 'Jl. Arjuno No. 44 Kelurahan Si', 'MTs Hasyim Asy''ari B', '194728', 'Sumantri', 'Maghfuroh', '57091734', '57091732', 'L'),
(5649, 926, 103, 'FIFI AGUSTINA', '2001-08-31', 'PERUM VILLA KEMBANG ASRI BONDO', 'SMP NEGERI 1 BONDOWO', '290876', 'SAMSUL ARIFIN', 'RASIANIK EKA PRAMIST', '41817008', '41817008', 'P'),
(5656, 127, 106, 'GEULIS JUAN ISHMAH ANDINI', '2001-09-25', 'Jl. Danau Ngebel III F5/K8 Saw', 'SMPN 21 Malang', '872945', 'Andek Haris Trisiari', 'Jumana', '34244855', '34244855', 'P'),
(5707, 889, 105, 'Muhammad Andika Tata', '2001-03-08', 'JL.DANAU TAWAR 4 G5A/2', 'SMPN 1 TULUNGAGUNG', '923478', 'Jupri Susanto', 'Widaryani', '34333054', '34333054', 'L'),
(5708, 159, 104, 'Muhammad Daffa Dwinurrohman', '2002-04-27', 'Jl. Tidar Gg. Tenesan, Asrama ', 'SMPN 3 Jember', '671298', 'Parsono', 'Jumiati Dasilva', '34899966', '34899966', 'L'),
(5717, 158, 106, 'Muhammad Raditya Prasetyo', '2002-04-04', 'Jln. Danau Diatas F1 D1, Sawoj', 'SMPN 21 MALANG', '293486', 'Boedi Prasetyo Minar', 'Ratna Chairani', '554068', '554068', 'L'),
(5720, 127, 101, 'Muhammad Zidane Nur Abidin', '2002-04-07', 'Jalan Danau Poso I Blok G2D No', 'SMPN 1 Singosari', '462937', 'Yayan Bastian Tomazo', 'Dhani Nurhayati', '39503939', '39503939', 'L'),
(5745, 149, 101, 'PRISHE ANNADJAR ARDATILLA', '2001-10-19', 'Jl. Raya Jongbiru No. 94 RT. 0', 'MTsN 2 Kota Kediri', '283745', 'Imam Supriyono', 'Sunarsih', '34636617', '34636617', 'P'),
(5748, 158, 101, 'Thoriq Rahmadiputra', '2002-05-16', 'Perum Gading Mutiara Permai Bl', 'SMPIT Al Ibrah', '934562', 'M. Badrim Tholchah', 'Erma Latifah', '56524888', '56524888', 'L'),
(5751, 118, 103, 'Ramadhan Salman Alfarisi', '2001-12-08', 'Ds. Jenisari RT/RW: 02/02, Kec', 'SMPN 1 Genteng', '315692', 'Saekhoni', 'Siti Masrukah', '38801202', '38801202', 'L'),
(5757, 149, 106, 'Rheznandya Daffi Pradipta', '2001-12-29', 'JL. RAJASANEGARA PERUM WIKARSA', 'SMPIT PERMATA MOJOKE', '923671', 'TRENGGONO ADHI WIBOW', 'NURUL DIAH REJEKI', '1868283', '1868283', 'L'),
(5759, 178, 102, 'Ridho Jhulang Aqsha', '2001-05-03', 'Jl. DANAU KERINCI V G6 G NO 15', 'SMPN 6 Tulungagung', '897654', 'Adam Mughni', 'Min''um Yastutik', '34986165', '34986165', 'L'),
(5763, 127, 103, 'RISKA NAZILA CAHYANI', '2001-09-03', 'Jl Cendana No. 53c', 'SMPN 1 Kertosono', '425914', 'Yuli Eko Tjahjono', 'Siti Munawaroh', '425914', '425914', 'P'),
(5775, 167, 104, 'SALSABILA SITI MUBARANI', '2002-04-26', 'Jln. KH. Ali Mas''ud Pagerwojo ', 'MTsN 1 Sidoarjo', '912548', 'Arif Hadianto', 'Siti Kholifah', '1780353', '1780353', 'P'),
(5786, 485, 102, 'VIOLA SALVADORA', '2002-06-06', 'DUSUN BAKAH, RT 001 RW 001, DE', 'SMP NEGERI 1 BANDUNG', '561239', 'MUCHTAROM', 'WIWIEK PRASETYOWATI', '35915461', '35915461', 'P'),
(5792, 926, 105, 'Zamzam Marzuq Aulia Rafi', '2002-03-10', 'Jl. Indra Manis II No.8 Manisr', 'SMPN 4 MADIUN', '921768', 'Muchlis Surono', 'Dewi Retno Lestari', '30964806', '30964806', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_walisiswa`
--

CREATE TABLE `tb_walisiswa` (
  `KD_WALSIS` int(11) NOT NULL,
  `NM_WALSIS` varchar(20) DEFAULT NULL,
  `NIK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_walisiswa`
--

INSERT INTO `tb_walisiswa` (`KD_WALSIS`, `NM_WALSIS`, `NIK`) VALUES
(118, 'ROFIQUT THORIQ, S.Pd', 11860083),
(127, 'Titik Apriana Dewi, ', 12700013),
(149, 'Rendi Lusbiantoro, M', 14920020),
(158, 'Pangadongan Elfin Pu', 15890040),
(159, 'Yan Pritaningtyas, S', 15910005),
(167, 'Hery Yudiyanto, S.Pd', 16700050),
(178, 'RIYA DWI PUSPA, S.Pd', 17890104),
(485, 'RAHMAT DWI DJATMIKO,', 4850094),
(889, 'YANIKO DIMAS YP, S.K', 8890012),
(926, 'PENI WARDAYANI DRA.', 92660001);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kehadiran_siswa`
--
CREATE TABLE `v_kehadiran_siswa` (
`NIS` int(11)
,`NAMA` varchar(500)
,`KD_WALSIS` int(11)
,`KELAS` varchar(10)
,`JML_MASUK` double
,`JML_IJIN` double
,`JML_SAKIT` double
,`JML_ALPA` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sikap_siswa`
--
CREATE TABLE `v_sikap_siswa` (
`NIS` int(11)
,`NAMA` varchar(500)
,`WALSIS` varchar(20)
,`KD_WALSIS` int(11)
,`KELAS` varchar(10)
,`PAI` varchar(5)
,`BIND` varchar(5)
,`MATEMATIKA` varchar(5)
,`SEJARAHIND` varchar(5)
,`BING` varchar(5)
,`KEWARGANEGARAAN` varchar(5)
,`SBD` varchar(5)
,`WIRAUSAHA` varchar(5)
,`PENJAS` varchar(5)
,`BD` varchar(5)
,`TELEKOMUNIKASI` varchar(5)
,`SO` varchar(5)
,`PWD` varchar(5)
,`ANDROID` varchar(5)
,`JAVA` varchar(5)
,`PRG_LUNAK` varchar(5)
,`PGRAFIK` varchar(5)
,`DSKTP` varchar(5)
,`BASISDATA` varchar(5)
,`BANGUNJARINGAN` varchar(5)
,`ADMINSERVER` varchar(5)
,`JARINGANDASAR` varchar(5)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_kehadiran_siswa`
--
DROP TABLE IF EXISTS `v_kehadiran_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kehadiran_siswa`  AS  select `ts`.`NIS` AS `NIS`,`ts`.`NM_SISWA` AS `NAMA`,`ts`.`KD_WALSIS` AS `KD_WALSIS`,`tk`.`NM_KELAS` AS `KELAS`,sum(`tkh`.`MASUK`) AS `JML_MASUK`,sum(`tkh`.`IJIN`) AS `JML_IJIN`,sum(`tkh`.`SAKIT`) AS `JML_SAKIT`,sum(`tkh`.`ALPA`) AS `JML_ALPA` from ((`tb_kehadiran` `tkh` join `tb_siswa` `ts`) join `tb_kelas` `tk`) where ((`ts`.`KD_KELAS` = `tk`.`KD_KELAS`) and (`ts`.`NIS` = `tkh`.`NIS`)) group by `ts`.`NIS` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_sikap_siswa`
--
DROP TABLE IF EXISTS `v_sikap_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sikap_siswa`  AS  select `ts`.`NIS` AS `NIS`,`ts`.`NM_SISWA` AS `NAMA`,`tw`.`NM_WALSIS` AS `WALSIS`,`tw`.`KD_WALSIS` AS `KD_WALSIS`,`tk`.`NM_KELAS` AS `KELAS`,max(if((`tm`.`NM_MAPEL` = 'AGAMA'),`tsk`.`SIKAP`,NULL)) AS `PAI`,max(if((`tm`.`NM_MAPEL` = 'BIN'),`tsk`.`SIKAP`,NULL)) AS `BIND`,max(if((`tk`.`NM_KELAS` = 'MAT'),`tsk`.`SIKAP`,NULL)) AS `MATEMATIKA`,max(if((`tk`.`NM_KELAS` = 'SEJARAH'),`tsk`.`SIKAP`,NULL)) AS `SEJARAHIND`,max(if((`tm`.`NM_MAPEL` = 'BIG'),`tsk`.`SIKAP`,NULL)) AS `BING`,max(if((`tk`.`NM_KELAS` = 'PKN'),`tsk`.`SIKAP`,NULL)) AS `KEWARGANEGARAAN`,max(if((`tk`.`NM_KELAS` = 'SENBUD'),`tsk`.`SIKAP`,NULL)) AS `SBD`,max(if((`tk`.`NM_KELAS` = 'PKWU'),`tsk`.`SIKAP`,NULL)) AS `WIRAUSAHA`,max(if((`tm`.`NM_MAPEL` = 'OR'),`tsk`.`SIKAP`,NULL)) AS `PENJAS`,max(if((`tk`.`NM_KELAS` = 'BJAWA'),`tsk`.`SIKAP`,NULL)) AS `BD`,max(if((`tk`.`NM_KELAS` = 'SISTEL'),`tsk`.`SIKAP`,NULL)) AS `TELEKOMUNIKASI`,max(if((`tk`.`NM_KELAS` = 'SISOS'),`tsk`.`SIKAP`,NULL)) AS `SO`,max(if((`tk`.`NM_KELAS` = 'WEB'),`tsk`.`SIKAP`,NULL)) AS `PWD`,max(if((`tk`.`NM_KELAS` = 'PPB'),`tsk`.`SIKAP`,NULL)) AS `ANDROID`,max(if((`tk`.`NM_KELAS` = 'PBO'),`tsk`.`SIKAP`,NULL)) AS `JAVA`,max(if((`tk`.`NM_KELAS` = 'PPL'),`tsk`.`SIKAP`,NULL)) AS `PRG_LUNAK`,max(if((`tk`.`NM_KELAS` = 'GRAFIK'),`tsk`.`SIKAP`,NULL)) AS `PGRAFIK`,max(if((`tk`.`NM_KELAS` = 'DESKTOP'),`tsk`.`SIKAP`,NULL)) AS `DSKTP`,max(if((`tk`.`NM_KELAS` = 'BASDAT'),`tsk`.`SIKAP`,NULL)) AS `BASISDATA`,max(if((`tk`.`NM_KELAS` = 'RBJ'),`tsk`.`SIKAP`,NULL)) AS `BANGUNJARINGAN`,max(if((`tk`.`NM_KELAS` = 'ADSER'),`tsk`.`SIKAP`,NULL)) AS `ADMINSERVER`,max(if((`tk`.`NM_KELAS` = 'JARDAS'),`tsk`.`SIKAP`,NULL)) AS `JARINGANDASAR` from (((((`tb_siswa` `ts` join `tb_kelas` `tk`) join `tb_sikap` `tsk`) join `tb_guru` `tg`) join `tb_mapel` `tm`) join `tb_walisiswa` `tw`) where ((`ts`.`KD_KELAS` = `tk`.`KD_KELAS`) and (`ts`.`NIS` = `tsk`.`NIS`) and (`ts`.`KD_WALSIS` = `tw`.`KD_WALSIS`) and (`tg`.`KD_MAPEL` = `tsk`.`KD_MAPEL`) and (`tg`.`KD_MAPEL` = `tm`.`KD_MAPEL`)) group by `ts`.`NIS`,`tk`.`NM_KELAS` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`KD_ABSEN`),
  ADD KEY `FK_MELAKUKAN` (`NIS`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`KD_GURU`),
  ADD KEY `FK_DIBAWAKAN` (`KD_MAPEL`);

--
-- Indexes for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD PRIMARY KEY (`KD_KEHADIRAN`),
  ADD KEY `FK_MENGISI` (`NIS`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`KD_KELAS`);

--
-- Indexes for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`KD_MAPEL`);

--
-- Indexes for table `tb_sikap`
--
ALTER TABLE `tb_sikap`
  ADD PRIMARY KEY (`ID_SIKAP`),
  ADD KEY `FK_MENENTUKAN` (`KD_MAPEL`),
  ADD KEY `FK_MENENTUKAN1` (`NIS`),
  ADD KEY `FK_MENGISI1` (`KD_GURU`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `FK_MEMILIKI` (`KD_WALSIS`),
  ADD KEY `FK_MEMILIKI1` (`KD_KELAS`);

--
-- Indexes for table `tb_walisiswa`
--
ALTER TABLE `tb_walisiswa`
  ADD PRIMARY KEY (`KD_WALSIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  MODIFY `KD_KEHADIRAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tb_sikap`
--
ALTER TABLE `tb_sikap`
  MODIFY `ID_SIKAP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`NIS`) REFERENCES `tb_siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `FK_DIBAWAKAN` FOREIGN KEY (`KD_MAPEL`) REFERENCES `tb_mapel` (`KD_MAPEL`);

--
-- Ketidakleluasaan untuk tabel `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD CONSTRAINT `FK_MENGISI` FOREIGN KEY (`NIS`) REFERENCES `tb_siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `tb_sikap`
--
ALTER TABLE `tb_sikap`
  ADD CONSTRAINT `FK_MENENTUKAN` FOREIGN KEY (`KD_MAPEL`) REFERENCES `tb_mapel` (`KD_MAPEL`),
  ADD CONSTRAINT `FK_MENENTUKAN1` FOREIGN KEY (`NIS`) REFERENCES `tb_siswa` (`NIS`),
  ADD CONSTRAINT `FK_MENGISI1` FOREIGN KEY (`KD_GURU`) REFERENCES `tb_guru` (`KD_GURU`);

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`KD_WALSIS`) REFERENCES `tb_walisiswa` (`KD_WALSIS`),
  ADD CONSTRAINT `FK_MEMILIKI1` FOREIGN KEY (`KD_KELAS`) REFERENCES `tb_kelas` (`KD_KELAS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
