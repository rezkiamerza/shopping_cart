-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2023 pada 07.51
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` char(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama`, `stok`, `harga`, `keterangan`, `gambar`) VALUES
(6, 'qsz', '1Zzb45MtCQHG2Nb6c9Uvfg==', 10, 12000, 'Bubur Ketan Hitam Pilihan', 'ketan_item.jpg'),
(19, 'V38', 'R1/1TxFHZMHtE6kLW4SvyhAo7x6fUbLDfFV3CiWRcsg=', 11, 10000, 'Bubur ayam Kampung', 'bubur_ayam.jpg'),
(20, '9y3', 'a4DhV7s70qtfjZIhf8hLlw==', 15, 5000, 'Es perpaduan daun teh+air+Gula', 'ilustrasi-es-teh-manis.jpg'),
(21, 'KjD', 'Orm//pPd70xlVDasPNImAQ==', 15, 13000, 'Indomie Campur telor digoreng kering+bawang merah', 'indomi_goreng.jpg'),
(23, 'S0u', 'f6BGjs3fIusXRkwNHLytFQ==', 15, 7000, 'perpaduan teh dan madu', 'Ketahui-Fakta-Es-Teh-Manis.jpg'),
(25, 'Eon', 'vPLuxjDcO2GEswl1CBc9iw==', 10, 20000, 'Sate Kambing muda', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kodelogin` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kodelogin`, `Password`) VALUES
('6116afedcb0bc31083935c1c262ff4c9', '6116afedcb0bc31083935c1c262ff4c9'),
('700c8b805a3e2a265b01c77614cd8b21', '700c8b805a3e2a265b01c77614cd8b21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kodelogin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
