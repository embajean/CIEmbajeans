-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2019 pada 03.14
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
  `lim_diskon2` date DEFAULT NULL,
  `petunjukcuci` text NOT NULL,
  `detailsize` text NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_ubah` datetime NOT NULL,
  `warna` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `sku`, `barangnama`, `id_kategori`, `harga`, `deskripsi`, `diskonpersen`, `diskonangka`, `lim_diskon`, `lim_diskon2`, `petunjukcuci`, `detailsize`, `tgl_buat`, `tgl_ubah`, `warna`) VALUES
(1, 'SKU001', 'EMBA JEANS-Espumante Two Sweater Rajut Warna Cream', 13, 389900, 'Type : sweater pria22\r\nMaterial : Katun\r\nWarna : Cream\r\nCutting : regular fit\r\nBentuk kerah : straight\r\nDetail : dilengkapi mini hoodies & tali kerah, detail logo\r\nBentuk lengan : Lengan panjang', 0, 0, '0000-00-00', '0000-00-00', 'Perawatan\r\nCuci dengan menggunakan detergen yang lembut\r\nJangan direndam terlalu lama, baik dengan air atau detergen\r\nSetrika dengan suhu yang rendah\r\nHindari dari cairan pemutih', 'Ukuran Produk\r\nUkuran M lingkar dada 110 cm panjang 63 cm\r\nUkuran L lingkar dada 114 cm panjang 64 cm\r\nUkuran XL lingkar dada 118 cm panjang 65 cm', '2018-12-03 00:00:00', '2018-12-03 18:51:53', 'Cream'),
(2, 'SKU004', 'EMBA JEANS- KEMEJA PUTIH LENGAN PANJANG MOTIF COKLAT', 14, 389900, 'deskripsi', 5, NULL, '2018-12-28', '0000-00-00', 'perawatan', 'detail size', '2018-12-04 06:05:42', '2018-12-04 11:01:25', 'White'),
(3, 'SKU003', 'EMBA JEANS-KOAS WARNA PINK MOTIF DEPAN ICE CREAM', 18, 289900, 'deskripsi2', 0, 0, '0000-00-00', '0000-00-00', 'yo dirawat', 'size2', '2018-12-04 06:11:08', '2018-12-04 06:46:51', 'Pink'),
(5, 'SKU006', 'EMBA JEANS-E KAOS WARNA PUTIH MOTIF DEPAN POTATO', 18, 489900, 'desc 6', NULL, 100000, '2018-12-31', '0000-00-00', 'dirawat yang baik" lah, ', 'Size6', '2018-12-04 06:37:52', '2018-12-04 06:48:40', 'White'),
(6, 'SKU007', 'EMBA JEANS-JAKET EMBA JEANS WARNA NAVY COOL', 15, 599900, 'deskcrip1', 0, 0, '0000-00-00', '0000-00-00', 'jelas e dirawat', 'ukuran size', '2018-12-04 06:50:58', '0000-00-00 00:00:00', 'Navy'),
(8, 'SKU010', 'EMBA JEANS- JAKET JEANS BIRU MUDA COOL ABISZ', 15, 589900, 'des cin aja 3', NULL, 300000, '2018-12-13', '0000-00-00', 'rawat ajah', 'size in aj ', '2018-12-04 06:55:33', '2018-12-21 14:37:34', 'Blue'),
(10, '01', 'Em', 13, 300000, 'ds', 0, 0, '2018-12-22', '2018-12-23', 'c', 'd', '2018-12-21 16:55:46', '2018-12-21 17:50:19', 'black'),
(13, '9', '9', 2, 2333, 'l', 0, 0, NULL, NULL, 'm', 'kl', '2019-01-02 12:31:11', '0000-00-00 00:00:00', 'c'),
(14, '3', '3', 2, 3, '3', 0, 0, NULL, NULL, '3', '3', '2019-01-02 12:56:35', '0000-00-00 00:00:00', '4'),
(15, '99999', '9999', 2, 4, '4', 0, 0, NULL, NULL, '4', '4', '2019-01-02 13:34:16', '0000-00-00 00:00:00', '4'),
(16, 'SKU000000000000003', '4', 2, 3900000, 'e', 0, 0, '0000-00-00', '0000-00-00', 'e', 'c', '2019-01-02 14:02:20', '2019-01-02 14:39:22', 'cc'),
(17, 'SKU00000000000003434', '434', 2, 50000, 'b', 0, 0, '0000-00-00', '0000-00-00', 'c', 'a', '2019-01-02 16:40:17', '2019-01-02 16:46:32', 'ee'),
(18, '9999912312', 'EMBA JEANS-Espumante Two Sweater Rajut Warna Cream', 14, 3434, '3', 0, 0, '0000-00-00', '0000-00-00', '4', '1', '2019-01-03 05:47:21', '2019-01-03 05:58:58', '34'),
(19, '3243434', '34', 2, 34, '3', 0, 0, '0000-00-00', '0000-00-00', '3', '34', '2019-01-03 05:54:54', '2019-01-03 05:57:15', '34'),
(20, '1231231', '3', 15, 444, '4', 0, 0, NULL, NULL, '4', '4', '2019-01-03 06:00:04', '0000-00-00 00:00:00', '4'),
(21, '43434', '4', 14, 4, '4', 0, 0, '0000-00-00', '0000-00-00', '4', '4', '2019-01-03 06:05:06', '2019-01-03 06:05:46', '4'),
(22, 'SKU0000000000003434', '4', 13, 4, '4', 0, 0, '0000-00-00', '0000-00-00', '4', '4', '2019-01-03 06:06:33', '2019-01-03 06:06:50', '4'),
(23, '111', '11', 14, 1, '1', 0, 0, '0000-00-00', '0000-00-00', '1', '1', '2019-01-03 06:13:13', '2019-01-03 06:13:45', '1'),
(24, 'SKU0000000003434343', '3', 14, 0, '3', 0, 0, NULL, NULL, '3', '3', '2019-01-03 08:58:05', '0000-00-00 00:00:00', 'Beige,Blue,Pink,White,Light Blue,Black,Maroon,Khaki,Blue,Orange,Red,Brown,Grey,Light Grey,Navy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `mac` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_barang`, `id_user`, `mac`, `qty`, `harga`, `tanggal`) VALUES
(1, 10, 'EMB20181224191259', '12-10-B3-3C-D4-55', 1, 300000, '2018-12-24'),
(2, 10, 'EMB20181224191201', '12-10-B3-3C-D4-55', 1, 300000, '2018-12-24'),
(3, 10, 'EMB20181224191216', '12-10-B3-3C-D4-55', 1, 300000, '2018-12-24'),
(7, 6, 'EMB20181224211247', '12-10-B3-3C-D4-55', 1, 599900, '2018-12-24'),
(14, 1, '4', '12-10-B3-3C-D4-55', 1, 389900, '2018-12-25'),
(15, 6, '8', '12-10-B3-3C-D4-55', 1, 599900, '2018-12-25');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_barang`, `ukuran`, `harga`, `qty`, `subtotal`) VALUES
(1, 'EMB20181214154854', 1, 'M', 389900, 4, 1559600),
(2, 'EMB20181214154854', 2, 'M', 370405, 1, 370405),
(3, 'EMB20181218152820', 1, 'L', 389900, 1, 389900),
(4, 'EMB20181220084948', 3, 'XL', 289900, 1, 289900),
(5, 'EMB20181224123955', 5, 'M', 100000, 2, 200000),
(6, 'EMB20181224134440', 2, 'L', 370405, 1, 370405);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `gambar_product` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

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
(40, 'SKU010', '1545431854EMBA_JEANS-Niles_T-shirt_Pria_Warna_Grey_3.jpg'),
(42, '123', '1543935372B_4.jpg'),
(43, '12345678', '1545325439EMBA_JEANS-Egerton_Two_Short_Pants_Pria_Warna_Frost_Grey_1.jpg'),
(44, '12345678', '1545325439EMBA_JEANS-Belden_T-shirt_Pria_Warna_Tiramizu_4.jpg'),
(45, '12345678', '1545325439EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_1.jpg'),
(46, '12345678', '1545325439EMBA_JEANS-Ansell_T-shirt_Pria_Warna_LT_Coral_5.jpg'),
(47, '12345678', '1545325439EMBA_JEANS-Brody_Adeo_Jacket_Pria_Heavy_Stom_5.jpg'),
(48, '12345678', '1545325439EMBA_JEANS-Egerton_Two_Short_Pants_Pria_Warna_Stone_1.jpg'),
(49, '01', '1545440146swet1.PNG'),
(50, '01', '1545440146swet2.jpg'),
(51, '0', '1546406329home1-2.jpg'),
(52, '12', '1546406889img_bg_1.jpg'),
(53, '3', '1546408595img_bg_1.jpg'),
(54, '99999', '46620de7c1c664c25a32c8bb2c0ba57e.png'),
(55, 'SKU000000000000003', 'bbffcb6da67295f872d2bc60c406a59a.jpg'),
(56, 'SKU000000000000003', '7562b31a6c383014e24572d172a682f9.PNG'),
(58, 'SKU00000000000003434', 'aeb75f9744313ead4b89841d9e2238b3.PNG'),
(59, 'SKU00000000000003434', '527fe81ef6fab2038c7be63e5c16cd31.jpg'),
(60, 'SKU00000000000003434', '08c38eeac9edef1423f97fd01a941174.jpg'),
(61, 'SKU00000000000003434', '5aec54c21ac08b18bec42330a26a2dc4.jpg'),
(62, 'SKU00000000000003434', 'cf81a2c1760afe97d6c3993300979186.PNG'),
(64, '9999912312', '32fb20b22b6bda0e784a9f830c9092b0.jpg'),
(65, '9999912312', 'b4f7a0f3a045b42d4b12399e53dc4df6.jpg'),
(66, '9999912312', 'fe99e137651cd87fa158ee5e3d242304.jpg'),
(67, '9999912312', '97d48c0d86ed89e8e1da16e0f76c8d79.jpg'),
(68, '9999912312', 'ae42fc3b7231bdb3576cd63af5b44992.jpg'),
(70, '3243434', 'e9b01ee4213bb91a22b19d0745d8e387.jpg'),
(71, '3243434', '1f3ce3a5dba4cd09d609b521591fe06a.jpg'),
(72, '3243434', '672d0c958679a36c0ea26d2b49d0851c.jpg'),
(73, '3243434', 'c5b3f112d40ccfae00e09a74ca0b865c.jpg'),
(74, '3243434', '4062d1cfc6ff9fc5999f9f3f3e34523b.jpg'),
(75, '3243434', 'f5f54e4ad62fb7525be72979af404822.jpg'),
(76, '1231231', '13e0c786cb844578ffed7b2dd8af7970.PNG'),
(77, '1231231', 'ecabae563baf33c81e88da1f4b150812.jpg'),
(78, '1231231', 'b96ee340e2c72caa9762513ffaba1a43.jpg'),
(79, '1231231', '69352bc087be07d8c214208567cd6a13.jpg'),
(80, '1231231', '08af0b35f694d0c558983d75f5ddc675.PNG'),
(81, '1231231', '9f70ae2cdcef54ef9f9f273e033434d0.PNG'),
(82, '43434', '8ba22dc1bd9f4e5a666eb2144915260c.jpg'),
(83, '43434', 'be1aad8fbcb1d72b8825ec69977e7a25.jpg'),
(84, 'SKU0000000000003434', 'f0e7a09d672e87b651f6b034d1bcffcc.jpg'),
(85, 'SKU0000000000003434', '5769819130322742d13904204373db93.jpg'),
(86, 'SKU0000000000003434', '188204057e5b0242a636a286be1570ad.jpg'),
(87, '111', '1bbdf6af2ea84a1cb022f2ed8069391f.jpg'),
(88, '111', 'd2e548819be600beb9a7209ef30322b5.jpg'),
(89, 'SKU0000000003434343', '6020acb57d0f4ad2bbd5a67515bd2a99.jpg'),
(90, 'SKU0000000003434343', 'b8c126cbd46f6e7dbb50ea3e7dd32d10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `id` varchar(30) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guest`
--

INSERT INTO `guest` (`id`, `namadepan`, `tanggal_lahir`, `email`, `alamat`) VALUES
('EMB20181224191201', 'Abuduru', '1111-11-11', 'email@gmail.com', 'Bandar'),
('EMB20181224191216', 'Abuduru', '1111-11-11', 'email@gmail.com', 'Bandar'),
('EMB20181224191259', 'Abuduru', '1111-11-11', 'email@gmail.com', 'Bandar'),
('EMB20181224211244', 'jojo', '2017-01-11', 'jojo@gmail.com', 'lukaku'),
('EMB20181224211247', 'Apemo', '2018-04-02', 'qwer@gmail.com', 'Bandar');

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_by_size`
--

INSERT INTO `stok_by_size` (`id`, `sku`, `stok`, `ukuran`) VALUES
(1, 'SKU001', 0, 'M'),
(2, 'SKU001', 5, 'L'),
(3, 'SKU001', 2, 'XL'),
(4, 'SKU004', 1, 'M'),
(5, 'SKU004', 2, 'L'),
(6, 'SKU004', 4, 'XL'),
(7, 'SKU003', 5, 'M'),
(8, 'SKU003', 2, 'L'),
(9, 'SKU003', 4, 'XL'),
(13, 'SKU006', 3, 'M'),
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
(31, '12345678', 7, 'XL'),
(32, '01', 1, 'M'),
(33, '01', 3, 'L'),
(34, '01', 5, 'XL'),
(35, '0', 1, 'M'),
(36, '12', 1, 'M'),
(37, '3', 3, '27'),
(38, 'SKU000000000000003', 5, '27'),
(39, 'SKU000000000000003', 3, '28'),
(40, 'SKU000000000000003', 3, '33'),
(41, 'SKU00000000000003434', 5, '27'),
(42, '9999912312', 4, 'L'),
(43, '3243434', 3, '27'),
(44, '1231231', 4, 'M'),
(45, '43434', 4, 'M'),
(46, 'SKU0000000000003434', 4, 'L'),
(47, '111', 1, 'XL'),
(48, '111', 1, 'L'),
(49, 'SKU0000000003434343', 2, 'M'),
(50, 'SKU0000000003434343', 3, 'L');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suka`
--

INSERT INTO `suka` (`id`, `id_user`, `id_barang`, `mac`, `tanggal`) VALUES
(4, 0, 8, '12-10-B3-3C-D4-55', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` varchar(50) NOT NULL,
  `id_user` varchar(30) NOT NULL,
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
('EMB20181214154854', '2', 5, 'Jawa Timur', 'Kediri', 'jne', 'b', '2-3 Hari', 'k', '', 7000, 1930005, '2018-12-14 15:48:54', '2018-12-14 15:49:02', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '1544831342images.png', '2018-12-15 15:48:54', 'expired', ''),
('EMB20181218152820', '3', 1, 'Jawa Timur', 'Kediri', 'jne', 'Bandar lor gang iii', '1-2 Hari', 'Catatan', '', 8000, 389900, '2018-12-18 15:28:20', '0000-00-00 00:00:00', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '', '2018-12-19 15:28:20', 'nonpaid', ''),
('EMB20181220084948', '4', 1, 'Jawa Timur', 'Jember', 'jne', 'Jember Kota', '1-2 Hari', 'catatan', '', 8000, 289900, '2018-12-20 08:49:48', '2018-12-20 08:51:18', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '1545324678img_bg_1.jpg', '2018-12-21 08:49:48', 'Dikirim', 'kk'),
('EMB20181224123955', 'EMB20181224211244', 2, 'Jawa Timur', 'Kediri', 'jne', 'lukaku', '1-1 Hari', 'jangan sampe rusak', '', 13000, 200000, '2018-12-24 12:39:55', '2018-12-24 12:40:12', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '1545684012jdid.jpg', '2018-12-25 12:39:55', 'Diperiksa', ''),
('EMB20181224134440', 'EMB20181224211244', 1, 'Jawa Barat', 'Banjar', 'jne', 'lukaku', '3-5 Hari', 'a', '', 25000, 370405, '2018-12-24 13:44:40', '0000-00-00 00:00:00', '0113135112, AN : Kasih Karunia Sejati PT', 'Rek BCA', '', '2018-12-25 13:44:40', 'nonpaid', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_alamat`, `usernama_depan`, `usernama_belakang`, `jk`, `email`, `password`, `repassword`, `tgl_lahir`, `tgl_daftar`, `telephon`, `images`, `status`) VALUES
(1, 0, 'embajeans', 'emb', 'none', 'embajeans@embajeans.store', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '2018-12-03', '2018-12-03', 'null', '', 'adm'),
(2, 0, 'Abdul', 'Jabbar', '', 'aab.peezz@gmail.com', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '1996-01-13', '2018-12-06', '085608129137', '', ''),
(3, 0, 'Apemo', 'J', '', 'apemo@gmail.com', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '2017-12-13', '2018-12-15', '08562252855', '', ''),
(4, 0, 'Jabbar', 'Abdul', '', 'abuduru@gmail.com', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '2018-12-01', '2018-12-20', '08562252855', '', ''),
(5, 0, 'Burudu', 'Abc', '', 'email@gmail.com', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '1111-12-13', '2018-12-25', '08562252855', '', ''),
(8, 0, 'Burudududu', 'dudu', '', 'abubu@gmail.com', '58b4e38f66bcdb546380845d6af27187', '58b4e38f66bcdb546380845d6af27187', '1111-11-11', '2018-12-25', '1111', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE IF NOT EXISTS `warna` (
  `id` int(11) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`id`, `warna`, `kode`) VALUES
(1, 'Beige', '#F5F5DC'),
(2, 'Blue', '#1F75FE'),
(3, 'Pink', '#FFA6C9'),
(4, 'White', '#FFFFFF'),
(5, 'Light Blue', '#ADD8E6'),
(6, 'Black', '#000000'),
(7, 'Maroon', '#7B1113'),
(8, 'Khaki', '#F0E68C'),
(9, 'Blue', '#0000FF'),
(10, 'Orange', '#FFA500'),
(11, 'Red', '#FF0000'),
(12, 'Brown', '#964B00'),
(13, 'Grey', '#B2BEB5'),
(14, 'Light Grey', '#808080'),
(15, 'Navy', '#000080');

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
-- Indexes for table `guest`
--
ALTER TABLE `guest`
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
-- Indexes for table `warna`
--
ALTER TABLE `warna`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `whislist`
--
ALTER TABLE `whislist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
