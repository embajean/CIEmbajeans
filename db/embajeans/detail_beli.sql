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

-- membuang struktur untuk view embajeans.detail_beli
-- Menghapus tabel sementara dan menciptakan struktur VIEW terakhir
DROP TABLE IF EXISTS `detail_beli`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_beli` AS select `embajeans`.`transaksi`.`id` AS `id_trans`,`embajeans`.`barang`.`barangnama` AS `barangnama`,`embajeans`.`detail_transaksi`.`qty` AS `qty`,`embajeans`.`detail_transaksi`.`harga` AS `harga`,`embajeans`.`detail_transaksi`.`ukuran` AS `ukuran`,`embajeans`.`detail_transaksi`.`subtotal` AS `subtotal`,`embajeans`.`transaksi`.`kurir` AS `kurir`,`embajeans`.`transaksi`.`kodepromo` AS `kodepromo`,`embajeans`.`transaksi`.`provinsi` AS `provinsi`,`embajeans`.`transaksi`.`city` AS `city`,`embajeans`.`transaksi`.`alamat` AS `alamat`,`embajeans`.`transaksi`.`estimasi` AS `estimasi`,`embajeans`.`transaksi`.`ongkir` AS `ongkir`, barang.sku as sku from `embajeans`.`barang` join `embajeans`.`detail_transaksi` join `embajeans`.`transaksi` where ((`embajeans`.`barang`.`id` = `embajeans`.`detail_transaksi`.`id_barang`) and (`embajeans`.`transaksi`.`id` = `embajeans`.`detail_transaksi`.`id_transaksi`)) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
