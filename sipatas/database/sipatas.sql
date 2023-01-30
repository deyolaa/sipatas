-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2023 pada 17.40
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipatas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absenmg`
--

CREATE TABLE `absenmg` (
  `id_magang` int(100) NOT NULL,
  `tglabs` date NOT NULL,
  `namaabs` varchar(100) NOT NULL,
  `asalabs` varchar(100) NOT NULL,
  `pembimbingabs` varchar(100) NOT NULL,
  `bidangabs` varchar(100) NOT NULL,
  `outputabs` varchar(100) NOT NULL,
  `buktiabs` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absenmg`
--

INSERT INTO `absenmg` (`id_magang`, `tglabs`, `namaabs`, `asalabs`, `pembimbingabs`, `bidangabs`, `outputabs`, `buktiabs`) VALUES
(1, '2023-01-30', 'Vero', 'Universitas Pendidikan Indonesia', 'desi', 'dcdda', 'dca', 0x736970617461736267202831292e706e67),
(5, '2023-01-27', 'erlangga', 'ipb univ', 'fikri', 'ijp', 'mengelola rumput', 0x62303263343037623536383439653031393463363932656365316138363963362e6a7067),
(6, '2023-01-27', 'Thomas', 'UI', 'desi', 'ijp', 'bikin desain ig', 0x30333964626265313365663964373931663333626230336166393861613463632e6a7067),
(7, '2023-01-30', 'Vero', 'unpad', 'desi', 'Pakan', 'naik traktor', 0x32303233303132345f3130323131312e6a7067),
(22, '2023-01-30', 'Erlangga', 'unpad', 'yopi', 'obat', 'suntik sapi', 0x32303233303132345f3039313235322e6a7067),
(29, '2023-01-30', 'erlangga', 'unpad', 'Hasanah', 'pakan', 'campur pakan', 0x32303233303132345f3039323333392e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_admin`
--

CREATE TABLE `akses_admin` (
  `id_admin` varchar(100) NOT NULL,
  `jam_login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_ikm`
--

CREATE TABLE `db_ikm` (
  `id_ikm` int(99) NOT NULL,
  `nama_ikm` varchar(99) NOT NULL,
  `instansi_ikm` varchar(99) NOT NULL,
  `nomor_ikm` varchar(99) NOT NULL,
  `umur_ikm` varchar(99) NOT NULL,
  `jeniskelamin_ikm` varchar(99) NOT NULL,
  `pendidikan_ikm` varchar(99) NOT NULL,
  `pekerjaan_ikm` varchar(99) NOT NULL,
  `pertanyaan1` varchar(99) NOT NULL,
  `pertanyaan2` varchar(99) NOT NULL,
  `pertanyaan3` varchar(99) NOT NULL,
  `pertanyaan4` varchar(99) NOT NULL,
  `pertanyaan5` varchar(99) NOT NULL,
  `pertanyaan6` varchar(99) NOT NULL,
  `pertanyaan7` varchar(99) NOT NULL,
  `pertanyaan8` varchar(99) NOT NULL,
  `pertanyaan9` varchar(99) NOT NULL,
  `pertanyaan10` varchar(99) NOT NULL,
  `pertanyaan11` varchar(99) NOT NULL,
  `pertanyaan12` varchar(99) NOT NULL,
  `pertanyaan13` varchar(99) NOT NULL,
  `pertanyaan14` varchar(99) NOT NULL,
  `kritik_ikm` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_ikm`
--

INSERT INTO `db_ikm` (`id_ikm`, `nama_ikm`, `instansi_ikm`, `nomor_ikm`, `umur_ikm`, `jeniskelamin_ikm`, `pendidikan_ikm`, `pekerjaan_ikm`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `pertanyaan6`, `pertanyaan7`, `pertanyaan8`, `pertanyaan9`, `pertanyaan10`, `pertanyaan11`, `pertanyaan12`, `pertanyaan13`, `pertanyaan14`, `kritik_ikm`) VALUES
(40, 'Tono', 'Kelompok Tani LEGUSA', '081288771633', '46', 'Laki - Laki', 'S1', 'Lainnya', 'Mudah', 'Sangat Wajar', 'Kurang Terjamin', 'Konsisten', 'Sangat Jelas', 'Kurang Mampu', 'Kurang Cepat', 'Kadang Membedakan', 'Sopan dan Ramah', 'Sangat Wajar', 'Sangat Pasti', 'Tepat', 'Sangat Nyaman', 'Aman', 'Semoga Lebih Baik Kedepannya'),
(41, 'cahya', 'cahyadi center', '084469775181', '36', 'Laki - Laki', 'D1-D2-D3', 'Pegawai Swasta', 'Mudah', 'Sangat Wajar', 'Sangat Terjamin', 'Konsisten', 'Jelas', 'Sangat Mampu', 'Kurang Cepat', 'Tidak Membedakan', 'Kurang Sopan dan Kurang Ramah', 'Sangat Wajar', 'Pasti', 'Kurang Tepat', 'Nyaman', 'Sangat Aman', 'Semoga Kedepannya Lebih Baik Lagi '),
(42, 'Tiora Putri', 'Untung Sari', '082264784377', '25', 'Perempuan', 'SLTA', 'Pelajar/Mahasiswa', 'Mudah', 'Wajar', 'Terjamin', 'Konsisten', 'Jelas', 'Mampu', 'Cepat', 'Tidak Membedakan', 'Sopan dan Ramah', 'Wajar', 'Pasti', 'Tepat', 'Nyaman', 'Sangat Aman', 'Semoga BPTU-HPT ke depannya lebih baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_magang`
--

CREATE TABLE `detail_magang` (
  `id_magang` int(100) NOT NULL,
  `asalmg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_pengajuan` int(99) NOT NULL,
  `email_kun` varchar(99) NOT NULL,
  `instansi_kun` varchar(99) NOT NULL,
  `nama_kun` varchar(99) NOT NULL,
  `whatsapp_kun` varchar(15) NOT NULL,
  `tujuan_kun` varchar(99) NOT NULL,
  `tgl_kun` date NOT NULL,
  `waktu_kun` time(6) NOT NULL,
  `surat_kun` mediumblob NOT NULL,
  `status_kun` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`id_pengajuan`, `email_kun`, `instansi_kun`, `nama_kun`, `whatsapp_kun`, `tujuan_kun`, `tgl_kun`, `waktu_kun`, `surat_kun`, `status_kun`) VALUES
(45, 'erlangga982002@gmail.com', 'PT. Insan Karya', 'susanto', '089624526061', 'belajar tentang ilmu peternakan', '2023-01-27', '11:50:00.000000', 0x63353837356163373630306437326234393763353033383631653434353230322e6a7067, 'Diterima'),
(46, 'marfuah123@gmail.com', 'PT. Raja Mulia', 'Marfuah', '089624526542', 'Ingin mengetahui tentangsapi yang ada di BPTU HPT Padang mengatas, dan berharap akan terjalin kerja', '2023-02-10', '11:00:00.000000', 0x36383334343661343938333566323732373835356531306138346232623866322e6a7067, 'Ditolak'),
(47, 'susanti324@gmail.com', 'Kelompok Tani Solok Selatan', 'susanti shifana andini', '089624525672', 'belajar dan memahami sistem pakan yang ada di BPTU HPT', '2023-02-09', '13:00:00.000000', 0x35346262353237666534376637393863323266383030623461623736303063382e6a7067, ''),
(48, 'ererer@gmail.com', 'putradaerah', 'susanti', '089624526061', 'belajar', '2023-02-04', '21:00:00.000000', 0x3237204a616e7561726920323032332e706466, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_admin` varchar(100) NOT NULL,
  `kode_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_admin`, `kode_admin`, `password`) VALUES
('admin1', '001', 'e00cf25ad42683b3df678c61f42c6bda'),
('admin2', '002', 'c84258e9c39059a89ab77d846ddab909'),
('admin3', '003', '32cacb2f994f6b42183a1300d9a3e8d6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_sapi`
--

CREATE TABLE `pengajuan_sapi` (
  `id_pengajuan` int(99) NOT NULL,
  `email_pengajuan` varchar(99) NOT NULL,
  `instansi_pengajuan` varchar(99) NOT NULL,
  `nama_pengajuan` varchar(99) NOT NULL,
  `nomor_pengajuan` varchar(99) NOT NULL,
  `sapi_pengajuan` varchar(99) NOT NULL,
  `jumlah_pengajuan` varchar(99) NOT NULL,
  `alasan_pengajuan` varchar(99) NOT NULL,
  `surat_pengajuan` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_sapi`
--

INSERT INTO `pengajuan_sapi` (`id_pengajuan`, `email_pengajuan`, `instansi_pengajuan`, `nama_pengajuan`, `nomor_pengajuan`, `sapi_pengajuan`, `jumlah_pengajuan`, `alasan_pengajuan`, `surat_pengajuan`) VALUES
(1, 'akramthomas21@gmail.com', 'Thomas', 'Akramm', '082288333637', 'Limousin Jantan Calon Bibit 3-6 Bulan', '2 Ekor', 'ternak', 0x42505455202d20485054202834292e706e67),
(9, 'selamat123@gmail.com', 'PT. Selamat Sentousa', 'Ikhsan', '081356472812', 'Simmental Jantan Calon Bibit >12-18 Bulan', '2 Ekor', 'Untuk Pengembangan Ternak Instansi', 0x5375726174205050532050542e2053656c616d61742053656e746f7573612e706466);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_magang`
--

CREATE TABLE `permohonan_magang` (
  `id_magang` int(100) NOT NULL,
  `tglmagang` date DEFAULT current_timestamp(),
  `emailmg` varchar(100) NOT NULL,
  `asalmg` varchar(100) NOT NULL,
  `jurusanmg` varchar(100) NOT NULL,
  `perwakilanmg` varchar(100) NOT NULL,
  `anggotamg` varchar(100) NOT NULL,
  `nomormg` varchar(100) NOT NULL,
  `tujuanmg` text NOT NULL,
  `mulaimg` date NOT NULL,
  `selesaimg` date NOT NULL,
  `suratmg` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permohonan_magang`
--

INSERT INTO `permohonan_magang` (`id_magang`, `tglmagang`, `emailmg`, `asalmg`, `jurusanmg`, `perwakilanmg`, `anggotamg`, `nomormg`, `tujuanmg`, `mulaimg`, `selesaimg`, `suratmg`) VALUES
(29, '2023-01-30', 'erlangga@gmail.com', 'Unpad', 'Teknik Informatika', 'Erlangga', 'deyola', '083801070295', 'acsaknaj', '2023-02-09', '2023-02-10', 0x5375726174205050532050542e2053656c616d61742053656e746f7573612e706466);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(99) NOT NULL,
  `nama_tamu` varchar(99) NOT NULL,
  `instansi_tamu` varchar(99) NOT NULL,
  `whatsapp_tamu` varchar(99) NOT NULL,
  `tgl_tamu` date NOT NULL,
  `kritik_tamu` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `instansi_tamu`, `whatsapp_tamu`, `tgl_tamu`, `kritik_tamu`) VALUES
(1, 'erlangga', 'Universitas Andalas', '089624526061', '2023-01-25', 'bagus'),
(2, 'Deyola Fadwa', 'Universitas Andalas', '089624526061', '2023-01-31', 'BAGUSSS'),
(3, 'thomas', 'Universitas Andalas', '089624526061', '2023-02-02', 'mantap'),
(4, 'turmijan mijani', 'PT. Sasana jaya', '089624528976', '2023-01-25', 'Semoga dapat melihat pemandangan lagi di BPTU HPT'),
(5, 'Wendy Kustarmiji', 'Universitas Negeri Medan', '089624528932', '2023-01-24', 'edukasi yang dibuat harus semenarik mungkin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absenmg`
--
ALTER TABLE `absenmg`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `db_ikm`
--
ALTER TABLE `db_ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `detail_magang`
--
ALTER TABLE `detail_magang`
  ADD KEY `detail_magang` (`id_magang`);

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `pengajuan_sapi`
--
ALTER TABLE `pengajuan_sapi`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `permohonan_magang`
--
ALTER TABLE `permohonan_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_ikm`
--
ALTER TABLE `db_ikm`
  MODIFY `id_ikm` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_pengajuan` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_sapi`
--
ALTER TABLE `pengajuan_sapi`
  MODIFY `id_pengajuan` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `permohonan_magang`
--
ALTER TABLE `permohonan_magang`
  MODIFY `id_magang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_magang`
--
ALTER TABLE `detail_magang`
  ADD CONSTRAINT `detail_magang` FOREIGN KEY (`id_magang`) REFERENCES `permohonan_magang` (`id_magang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
