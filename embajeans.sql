-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2018 pada 18.17
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `embajeans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `barangnama` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `diskonpersen` int(11) DEFAULT NULL,
  `diskonangka` int(11) DEFAULT NULL,
  `lim_diskon` date DEFAULT NULL,
  `petunjukcuci` text NOT NULL,
  `detailsize` text NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_ubah` datetime NOT NULL,
  `warna` char(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `sku`, `barangnama`, `id_kategori`, `harga`, `deskripsi`, `diskonpersen`, `diskonangka`, `lim_diskon`, `petunjukcuci`, `detailsize`, `tgl_buat`, `tgl_ubah`, `warna`) VALUES
(1, 'SKU001', 'EMBA JEANS-Espumante Two Sweater Rajut Warna Cream', 13, 389900, 'Type : sweater pria22\r\nMaterial : Katun\r\nWarna : Cream\r\nCutting : regular fit\r\nBentuk kerah : straight\r\nDetail : dilengkapi mini hoodies & tali kerah, detail logo\r\nBentuk lengan : Lengan panjang', 0, 0, '0000-00-00', 'Perawatan\r\nCuci dengan menggunakan detergen yang lembut\r\nJangan direndam terlalu lama, baik dengan air atau detergen\r\nSetrika dengan suhu yang rendah\r\nHindari dari cairan pemutih', 'Ukuran Produk\r\nUkuran M lingkar dada 110 cm panjang 63 cm\r\nUkuran L lingkar dada 114 cm panjang 64 cm\r\nUkuran XL lingkar dada 118 cm panjang 65 cm', '2018-12-03 00:00:00', '2018-12-03 18:51:53', 'Cream'),
(2, 'SKU004', 'EMBA JEANS- KEMEJA PUTIH LENGAN PANJANG MOTIF COKLAT', 14, 389900, 'deskripsi', 5, NULL, '2018-12-28', 'perawatan', 'detail size', '2018-12-04 06:05:42', '2018-12-04 11:01:25', 'White'),
(3, 'SKU003', 'EMBA JEANS-KOAS WARNA PINK MOTIF DEPAN ICE CREAM', 18, 289900, 'deskripsi2', 0, 0, '0000-00-00', 'yo dirawat', 'size2', '2018-12-04 06:11:08', '2018-12-04 06:46:51', 'Pink'),
(4, 'SKU005', 'EMBA JEANS-KAOS COKLAT POLOS MOTIF DEPAN ICE CREAM', 18, 289900, 'deksirpsi aja', 50, NULL, '2018-12-10', 'yo dirawat lah', 'size', '2018-12-04 06:13:17', '2018-12-04 06:47:10', 'Brown'),
(5, 'SKU006', 'EMBA JEANS-E KAOS WARNA PUTIH MOTIF DEPAN POTATO', 18, 489900, 'desc 6', NULL, 100000, '2018-12-31', 'dirawat yang baik" lah, ', 'Size6', '2018-12-04 06:37:52', '2018-12-04 06:48:40', 'White'),
(6, 'SKU007', 'EMBA JEANS-JAKET EMBA JEANS WARNA NAVY COOL', 15, 599900, 'deskcrip1', 0, 0, '0000-00-00', 'jelas e dirawat', 'ukuran size', '2018-12-04 06:50:58', '0000-00-00 00:00:00', 'Navy'),
(7, 'SKU008', 'EMBA JEANS- CELANA JEANS PANJANG COOL WARNA CREAM POLOS', 2, 489900, 'di desc aja', 10, NULL, '2018-12-19', 'di rawat aja', 'di size in aja', '2018-12-04 06:53:13', '0000-00-00 00:00:00', 'Grey'),
(8, 'SKU010', 'EMBA JEANS- JAKET JEANS BIRU MUDA COOL ABISZ', 15, 589900, 'des cin aja 3', NULL, 300000, '2018-12-13', 'rawat ajah', 'size in aj a2', '2018-12-04 06:55:33', '0000-00-00 00:00:00', 'Blue'),
(9, '12345678', 'EMBA JEANS-Espumante Two Sweater Rajut Warna Hitam', 13, 500000, 'Deskripsi', NULL, 200000, '2018-12-22', 'Cuci', 'Detail Size :\r\nM\r\nL\r\nXL', '2018-12-20 09:03:59', '0000-00-00 00:00:00', 'Black');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mac` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_barang`, `id_user`, `mac`, `qty`, `harga`, `tanggal`) VALUES
(2, 1, -1050516363, 'l                  ', -1608507360, -1608507318, 'L849-03-02'),
(3, 0, -445816223, '                         ', -1608507360, -1608507360, 'D496-01-00'),
(4, 0, -445816223, '                         ', -1608507360, -1608507360, 'D496-01-00'),
(5, 1, 0, '12-10-B3-3C-D4-55', 1, 389900, '2018-12-20');

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_beli`
--
CREATE TABLE IF NOT EXISTS `detail_beli` (
`id_trans` varchar(50)
,`barangnama` varchar(200)
,`qty` int(11)
,`harga` int(11)
,`ukuran` varchar(3)
,`subtotal` int(11)
,`kurir` varchar(11)
,`kodepromo` varchar(30)
,`provinsi` varchar(30)
,`city` varchar(30)
,`alamat` text
,`estimasi` varchar(10)
,`ongkir` int(11)
,`sku` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_barang`, `ukuran`, `harga`, `qty`, `subtotal`) VALUES
(1, 'EMB20181214154854', 1, 'M', 389900, 4, 1559600),
(2, 'EMB20181214154854', 2, 'M', 370405, 1, 370405),
(3, 'EMB20181218152820', 1, 'L', 389900, 1, 389900),
(4, 'EMB20181220084948', 3, 'XL', 289900, 1, 289900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `gambar_product` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `sku`, `gambar_product`) VALUES
(1, 'SKU001', '1543885530swet1.PNG'),
(2, 'SKU001', '1543885530swet2.jpg'),
(7, 'SKU001', '1543891889swet4.jpg'),
(8, 'SKU001', '1543891913swet3.jpg'),
(9, 'SKU004', '1543932343D_1.jpg'),
(10, 'SKU004', '1543932343D_2.jpg'),
(11, 'SKU004', '1543932413D_4.jpg'),
(12, 'SKU004', '1543932343E_4.jpg'),
(13, 'SKU003', '1543932668EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_1.jpg'),
(14, 'SKU003', '1543932668EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_2.jpg'),
(15, 'SKU003', '1543932668EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_3.jpg'),
(16, 'SKU003', '1543932668EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_4.jpg'),
(17, 'SKU003', '1543932668EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_5.jpg'),
(18, 'SKU005', '1543932797EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_1.jpg'),
(19, 'SKU005', '1543932797EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_2.jpg'),
(20, 'SKU005', '1543932797EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_3.jpg'),
(21, 'SKU005', '1543932797EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_5.jpg'),
(22, 'SKU005', '1543932797EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_4.jpg'),
(23, 'SKU006', '1543934273EMBA_JEANS-Boone_T-shirt_Pria_Warna_White-_1.jpg'),
(24, 'SKU006', '1543934273EMBA_JEANS-Boone_T-shirt_Pria_Warna_White-_2.jpg'),
(25, 'SKU006', '1543934273EMBA_JEANS-Boone_T-shirt_Pria_Warna_White-_3.jpg'),
(26, 'SKU006', '1543934273EMBA_JEANS-Boone_T-shirt_Pria_Warna_White-_4.jpg'),
(27, 'SKU006', '1543934273EMBA_JEANS-Boone_T-shirt_Pria_Warna_White-_5.jpg'),
(28, 'SKU007', '1543935058EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_1.jpg'),
(29, 'SKU007', '1543935058EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_2.jpg'),
(30, 'SKU007', '1543935058EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_3.jpg'),
(31, 'SKU007', '1543935058EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_4.jpg'),
(32, 'SKU007', '1543935059EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_5.jpg'),
(33, 'SKU008', '1543935193EMBA_JEANS-BS07-4_Celana_Panjang_Pria_Warna_Grey_1.jpg'),
(34, 'SKU008', '1543935193EMBA_JEANS-BS074_Celana_Panjang_Pria_Warna_Grey_2.jpg'),
(35, 'SKU008', '1543935193EMBA_JEANS-BS074_Celana_Panjang_Pria_Warna_Grey_3.jpg'),
(36, 'SKU008', '1543935193EMBA_JEANS-BS074_Celana_Panjang_Pria_Warna_Grey_4.jpg'),
(37, 'SKU008', '1543935193EMBA_JEANS-BS074_Celana_Panjang_Pria_Warna_Grey_5.jpg'),
(38, 'SKU010', '1543935334EMBA_JEANS-JK276_Jacket_Pria_Warna_HS_Muda_1.jpg'),
(39, 'SKU010', '1543935334EMBA_JEANS-JK276_Jacket_Pria_Warna_HS_Muda_2.jpg'),
(40, 'SKU010', '1543935334EMBA_JEANS-JK276_Jacket_Pria_Warna_HS_Muda_3.jpg'),
(41, 'SKU010', '1543935334EMBA_JEANS-JK276_Jacket_Pria_Warna_HS_Muda_4.jpg'),
(42, '123', '1543935372B_4.jpg'),
(43, '12345678', '1545325439EMBA_JEANS-Egerton_Two_Short_Pants_Pria_Warna_Frost_Grey_1.jpg'),
(44, '12345678', '1545325439EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_4.jpg'),
(45, '12345678', '1545325439EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_1.jpg'),
(46, '12345678', '1545325439EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_5.jpg'),
(47, '12345678', '1545325439EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_5.jpg'),
(48, '12345678', '1545325439EMBA_JEANS-Egerton_Two_Short_Pants_Pria_Warna_Stone_1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL,
  `kategorinama` char(30) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategorinama`, `berat`) VALUES
(2, 'Celana', 300),
(13, 'Sweater', 500),
(14, 'Kemeja Panjang', 500),
(15, 'Jacket', 500),
(16, 'Celana Pendek', 500),
(17, 'Celana Panjang', 500),
(18, 'Kaos', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `komen` text NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `head1` varchar(30) NOT NULL,
  `head2` varchar(30) NOT NULL,
  `head3` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `head1`, `head2`, `head3`) VALUES
(2, '15440221411544022141home1-2.jpg', '1234', '2345', '3456'),
(3, '1544022659home1-3.jpg', 'Judul', 'Diskon', 'Jenis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_by_size`
--

CREATE TABLE IF NOT EXISTS `stok_by_size` (
  `id` int(11) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `ukuran` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_by_size`
--

INSERT INTO `stok_by_size` (`id`, `sku`, `stok`, `ukuran`) VALUES
(1, 'SKU001', 0, 'M'),
(2, 'SKU001', 5, 'L'),
(3, 'SKU001', 2, 'XL'),
(4, 'SKU004', 1, 'M'),
(5, 'SKU004', 3, 'L'),
(6, 'SKU004', 4, 'XL'),
(7, 'SKU003', 5, 'M'),
(8, 'SKU003', 2, 'L'),
(9, 'SKU003', 4, 'XL'),
(10, 'SKU005', 0, 'M'),
(11, 'SKU005', 0, 'L'),
(12, 'SKU005', 2, 'XL'),
(13, 'SKU006', 5, 'M'),
(14, 'SKU006', 0, 'L'),
(15, 'SKU006', 0, 'XL'),
(16, 'SKU007', 5, 'M'),
(17, 'SKU007', 9, 'L'),
(18, 'SKU007', 10, 'XL'),
(19, 'SKU008', 5, '27'),
(20, 'SKU008', 6, '28'),
(21, 'SKU008', 7, '29'),
(22, 'SKU008', 5, '30'),
(23, 'SKU008', 4, '31'),
(24, 'SKU008', 3, '32'),
(25, 'SKU010', 5, 'M'),
(26, 'SKU010', 6, 'L'),
(27, 'SKU010', 3, 'XL'),
(28, '123', 3, 'M'),
(29, '12345678', 5, 'M'),
(30, '12345678', 6, 'L'),
(31, '12345678', 7, 'XL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE IF NOT EXISTS `suka` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `mac` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `kurir` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `estimasi` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `kodepromo` varchar(30) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tgl_beli` datetime NOT NULL,
  `tgl_tf` datetime NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `method` varchar(10) NOT NULL,
  `bukti` text NOT NULL,
  `batasbayar` datetime NOT NULL,
  `status` char(20) NOT NULL,
  `noresi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `jumlah_barang`, `provinsi`, `city`, `kurir`, `alamat`, `estimasi`, `catatan`, `kodepromo`, `ongkir`, `total_harga`, `tgl_beli`, `tgl_tf`, `rekening`, `method`, `bukti`, `batasbayar`, `status`, `noresi`) VALUES
('EMB20181214154854', 2, 5, 'Jawa Timur', 'Kediri', 'jne', 'b', '2-3 Hari', 'k', '', 7000, 1930005, '2018-12-14 15:48:54', '2018-12-14 15:49:02', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '1544831342images.png', '2018-12-15 15:48:54', 'expired', ''),
('EMB20181218152820', 3, 1, 'Jawa Timur', 'Kediri', 'jne', 'Bandar lor gang iii', '1-2 Hari', 'Catatan', '', 8000, 389900, '2018-12-18 15:28:20', '0000-00-00 00:00:00', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '', '2018-12-19 15:28:20', 'nonpaid', ''),
('EMB20181220084948', 4, 1, 'Jawa Timur', 'Jember', 'jne', 'Jember Kota', '1-2 Hari', 'catatan', '', 8000, 289900, '2018-12-20 08:49:48', '2018-12-20 08:51:18', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '1545324678img_bg_1.jpg', '2018-12-21 08:49:48', 'Dikirim', 'nomorresi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `usernama_depan` char(30) NOT NULL,
  `usernama_belakang` char(30) NOT NULL,
  `jk` char(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `repassword` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_daftar` date NOT NULL,
  `telephon` varchar(16) NOT NULL,
  `images` text NOT NULL,
  `status` char(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_alamat`, `usernama_depan`, `usernama_belakang`, `jk`, `email`, `password`, `repassword`, `tgl_lahir`, `tgl_daftar`, `telephon`, `images`, `status`) VALUES
(1, 0, 'embajeans', 'emb', 'none', 'embajeans@embajeans.store', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '2018-12-03', '2018-12-03', 'null', '', 'adm'),
(2, 0, 'Abdul', 'Jabbar', '', 'aab.peezz@gmail.com', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '1996-01-13', '2018-12-06', '085608129137', '', ''),
(3, 0, 'Apemo', 'J', '', 'apemo@gmail.com', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '2017-12-13', '2018-12-15', '08562252855', '', ''),
(4, 0, 'Jabbar', 'Abdul', '', 'abuduru@gmail.com', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '2018-12-01', '2018-12-20', '08562252855', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `whislist`
--

CREATE TABLE IF NOT EXISTS `whislist` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_beli`
--
DROP TABLE IF EXISTS `detail_beli`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_beli` AS select `transaksi`.`id` AS `id_trans`,`barang`.`barangnama` AS `barangnama`,`detail_transaksi`.`qty` AS `qty`,`detail_transaksi`.`harga` AS `harga`,`detail_transaksi`.`ukuran` AS `ukuran`,`detail_transaksi`.`subtotal` AS `subtotal`,`transaksi`.`kurir` AS `kurir`,`transaksi`.`kodepromo` AS `kodepromo`,`transaksi`.`provinsi` AS `provinsi`,`transaksi`.`city` AS `city`,`transaksi`.`alamat` AS `alamat`,`transaksi`.`estimasi` AS `estimasi`,`transaksi`.`ongkir` AS `ongkir`,`barang`.`sku` AS `sku` from ((`barang` join `detail_transaksi`) join `transaksi`) where ((`barang`.`id` = `detail_transaksi`.`id_barang`) and (`transaksi`.`id` = `detail_transaksi`.`id_transaksi`));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_by_size`
--
ALTER TABLE `stok_by_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whislist`
--
ALTER TABLE `whislist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stok_by_size`
--
ALTER TABLE `stok_by_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `whislist`
--
ALTER TABLE `whislist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
