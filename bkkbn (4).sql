-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jun 2019 pada 13.19
-- Versi server: 5.7.24
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkkbn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(3) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `nip`, `nama_pegawai`, `golongan`, `jabatan`) VALUES
(4, 19600511, 'Dra. Budi Mulia, M.Si', 'IV/b', 'Sekretaris'),
(5, 19600511, 'Effa Zulmaini, SE, M.Pd', 'IV/b', 'Kabid Dalduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi_surat`
--

CREATE TABLE `disposisi_surat` (
  `id_disposisi_surat` int(5) NOT NULL,
  `surat_dari` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `nomor_agenda` varchar(20) NOT NULL,
  `sifat` varchar(10) NOT NULL,
  `disposisi_kepala` text NOT NULL,
  `diteruskan_kepada` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi_surat`
--

INSERT INTO `disposisi_surat` (`id_disposisi_surat`, `surat_dari`, `nomor_surat`, `tanggal_surat`, `perihal`, `tanggal_terima`, `nomor_agenda`, `sifat`, `disposisi_kepala`, `diteruskan_kepada`) VALUES
(3, '001', '359/PK.04/F4/2019', '2019-06-04', '<p>Laporan Poster UPPTS di Kampung KB</p>', '0000-00-00', '<p>Laporan Poster UP', 'Rahasia', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_administrasi`
--

CREATE TABLE `jenis_administrasi` (
  `id` int(3) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_administrasi`
--

INSERT INTO `jenis_administrasi` (`id`, `nip`, `jabatan`, `username`, `password`) VALUES
(8, '19600511 198603 1 004', 'Sekretaris', 'Budi', 'e5a9179a17078f9e013fd54df717b0fffbac2b32d2fd8166d8c408a543a165ad40c7c125a749c146c667f9daf66cd09fe601d0d0b3ebe990c4562f4742093e29GBs5/YY1MzbZEhTpt4lNWYPEsiAEi+Cj9gdXC3GsKlE='),
(9, '19600511 198603 1 003', 'Kabid Dalduk', 'Effa', 'bb771a24a8a5ad21aab173c769d75efcff9701ac982b8242a411ba10f23e89e3c0e25d0075359c3494748e0f332a62be8116ff7afd2812f0e55313816910e1c2JnoZ5EHUFRI7SXzR7ZILRzONvjpkFlJzJNFn7I4TqII=');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(3) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `npwp` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip`, `nama`, `no_telp`, `jk`, `npwp`, `alamat`, `jabatan`, `golongan`) VALUES
(4, '19600511 198603 1 002', 'H. Syahruddin, SH,M.Si', '081321212100', 'L', 55139, 'Jl. AR.Hakim No. 63, Ranah Parak Rumbio, Kec.Padan', 'Kepala Perwakilan BKKBN Provinsi', 'IV/c'),
(5, '19600511 198603 1 004', 'Dra. Budi Mulia, M.Si', '081109882355', 'L', 9000, 'JL. Sutan Syahrir No. 11 Padang, Mata Air, Kec. Pa', 'Sekretaris', 'IV/b'),
(6, '19600511 198603 1 003', 'Effa Zulmaini, SE, M.Pd', '0811120090', 'P', 55100, 'Jl. Delima Raya Ujung, Alang Laweh, Kec. Padang Se', 'Kabid Dalduk', 'IV/b'),
(7, '19600511 198603 1 001', 'Gusrial, SE', '08123398888', 'L', 55139, 'JL. SEB.Padang Utara I/10, Seberang Padang, Kec. P', 'Kabid KB/KR', 'IV/a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(10) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `pertalian_nomor` varchar(20) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `nama_pengirim`, `tanggal`, `alamat`, `isi`, `pertalian_nomor`, `catatan`, `lampiran`) VALUES
(3, 'Kepala Bidang ADPIN', '2019-06-06', 'KABAAG. Kab. Sinjunjung', '<p>Berita Acara</p>', '11086/PW-08/901', 'Tidak Ada', '73CD357D-D0D2-4F3A-B573-47DA3C8AB9C5.png'),
(4, 'Kepala Bidang ADPIN', '2019-06-06', 'DALDUK Kab. Pasaman Barat', '<p>Mohon Bantuan Tenaga Pelayanan Kampung KB</p>', '', 'Tidak Ada', 'akreditasi_prodi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(5) NOT NULL,
  `nomor_berikut` varchar(10) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `pertalian_nomor` varchar(30) NOT NULL,
  `lampiran` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `nomor_berikut`, `pengirim`, `tanggal`, `nomor`, `isi`, `pertalian_nomor`, `lampiran`, `email`, `status`) VALUES
(9, '001', 'BKKBN PUSAT', '2019-06-04', '359/PK.04/F4/2019', '<p>Laporan Poster UPPTS di Kampung KB</p>', 'Kepala Bidang KS/PK', '5AF2C4B0-36B6-42DA-9DCA-E57CC88C8BD6.png', 'hafid@gmail.com', 'f'),
(10, '002', 'DALDUK Kab. Solok Selatan', '2019-06-12', 'SRT/001/007/090', '<p>Umpan Balik Pembinaan UPPK</p>', 'Kepala Bidang DALDUK', 'Annotation_2019-06-14_112352.png', 'hendrymudarkt@gmail.com', 'f'),
(11, '003', 'DALDUK Kab. Payakumbuh', '2019-06-05', 'SRT/001/007/565', '<p>Surat Permohonan Dana Masyarakat Kampung KB</p>', 'Kepala Bidang DALDUK', 'Annotation_2019-06-14_1123521.png', 'lokapermatasari55@gmail.com', 'f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '926eb5ca8a41ac2b895231a03146d9a8900d7f821e71a35875e8c682d6d183749d6d2a313f036275a1ca2e6d79bcacc1e5d1a70487683420f5f3225702f032006SaADPqVYpsfg/nKM7uzjQK4FbqarNcbpIwOdZKR2e8=');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `disposisi_surat`
--
ALTER TABLE `disposisi_surat`
  ADD PRIMARY KEY (`id_disposisi_surat`);

--
-- Indeks untuk tabel `jenis_administrasi`
--
ALTER TABLE `jenis_administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `disposisi_surat`
--
ALTER TABLE `disposisi_surat`
  MODIFY `id_disposisi_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_administrasi`
--
ALTER TABLE `jenis_administrasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
