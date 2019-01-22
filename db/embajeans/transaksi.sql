-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.6.26 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table embajeans.transaksi
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
  `noresi` text NOT NULL,
  `tgl_no_resi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
