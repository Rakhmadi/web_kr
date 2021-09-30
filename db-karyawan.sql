-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2021 pada 17.47
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_user_test`
--

CREATE TABLE `jawaban_user_test` (
  `id_jawaban` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawaban_user_test`
--

INSERT INTO `jawaban_user_test` (`id_jawaban`, `user_id`, `soal_id`, `jawaban`) VALUES
(1, 2, 1, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_token` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_test`
--

CREATE TABLE `soal_test` (
  `id_soal` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `kunci` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal_test`
--

INSERT INTO `soal_test` (`id_soal`, `pertanyaan`, `kunci`, `created_at`) VALUES
(1, 'saya cantik', '0', '2021-09-21 13:44:52'),
(2, 'saya tidak ada', '1', '2021-09-21 13:56:45'),
(3, 'saya tidak baik', '0', '2021-09-21 13:56:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `posisi_yang_dilamar` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `tanggal_lahir`, `posisi_yang_dilamar`, `pendidikan_terakhir`, `jurusan`, `user_role`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-09-20', 'n', 'n', 'n', 'admin'),
(2, 'rini', 'rini@gmail.com', 'b86872751de1e13c142d050acfd09842', '2021-09-06', 's', 's', 's', 'user'),
(8, 'wahyu', 'wahyu@gmial.com', '32c9e71e866ecdbc93e497482aa6779f', '0000-00-00', 'fugonumu', 'fugonumu', 'fugonumu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban_user_test`
--
ALTER TABLE `jawaban_user_test`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `soal_id` (`soal_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_test`
--
ALTER TABLE `soal_test`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban_user_test`
--
ALTER TABLE `jawaban_user_test`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `soal_test`
--
ALTER TABLE `soal_test`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jawaban_user_test`
--
ALTER TABLE `jawaban_user_test`
  ADD CONSTRAINT `jawaban_user_test_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal_test` (`id_soal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_user_test_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
