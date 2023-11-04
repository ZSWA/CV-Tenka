-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2023 pada 09.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(4, 'sdad', '20231026150334.jpg'),
(5, 'Yamasekimochi', '20231026153125.jpg'),
(6, 'meiyu', '20231026154055.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `profil` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`, `profil`, `foto`, `instagram`) VALUES
(2, 'Yamaseki', 'Yamaseki adalah divisi event', '20231104093025.jpg', 'Yamaseki.official'),
(3, 'Atarashii Kaze', 'Atarashii kaze adalah Divisi Cosplay', '20231104093518.jpg', 'atakaze.official'),
(4, 'Setsuki', 'Setsuki adalah divisi konten', '20231104093617.jpg', 'setsuki.official'),
(5, 'Shiro Okami', 'Shirokami adalah divisi game', '20231104093649.jpg', 'jdkaljiw'),
(6, 'Utagawa', 'Utagawa adalah divisi musik', '20231104093729.jpg', 'Utagawa.official'),
(7, 'Kiseki no Hi', 'KnH adalah divisi dance', '20231104093807.jpg', 'kiseki.no.hi'),
(8, 'Yume no Ki', 'Yume no Ki adalah divisi hilang', '20231104093903.jpg', 'yumeki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(6, 'Pancing Reaksi'),
(7, 'Wibu Sanctuary'),
(8, 'Penting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `judul_website` varchar(60) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `tiktok` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `judul_website`, `profil_website`, `instagram`, `facebook`, `tiktok`, `alamat`, `email`, `foto`) VALUES
(1, 'Tenka ID', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'tenka.id', 'japanholic', 'tenka.id', 'misterius', 'znuri160@gmail.com', 'konfigurasi.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `id_kategori` varchar(30) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `isi_konten` text NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(60) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `id_kategori`, `slug`, `isi_konten`, `tanggal`, `username`, `foto`) VALUES
(7, 'PENILAIAN JSONG COVER COMPETITION', '7', 'PENILAIAN-JSONG-COVER-COMPETITION', 'Istilah JSong merupakan singkatan dari Japanese Song atau lagu Jepang. Sejauh ini istilah JSong digunakan di acara atau festival Jepang. Sebagaimana penggunaan istilah Japanese Drama yang disingkat JDorama atau Japanese Band atau JBand.  Singkatnya, untuk menyebut unsur pop kultur dari negara Jepang digunakan istilah “J” di awal kata. Sebagaimana penyebutan kultur dari negara China dengan istilah “C” di awal kata seperti Chinese Pop (CPop) atau “K” untuk Korean Pop (KPop).  Kesimpulannya, istilah JSong sudah dikenal luas untuk menyebut Japanese Song. Dengan bukti adanya penyelenggaraan lomba JSong di JFest yang menjadi ajang adu bakat menyanyikan lagu Jepang. Sehingga kurang tepat rasanya jika istilah JSong untuk menyebut Javanese Song atau lagu Jawa.  Penilaian lomba JSong gimana sih?  JSong terbukti menjadi salah satu konten wajib dalam setiap gelaran JFest, baik perform saja atau dilombakan. Seiring banyaknya penggemar lagu-lagu Jepang dari berbagai genre musik. Entah dari tema anime, film, karya musisi solo, duo atau band dari negara Sakura.  Kompetisi JSong mendapat antusiasme tinggi. Terlihat dari jumlah pendaftar lomba JSong bisa mencapai puluhan orang. Penyelenggara bisa memilih format audisi offline atau online, sesuai ketersediaan waktu.', '2023-10-20', 'admin', '20231020161559.jpg'),
(9, 'DILEMA PANITIA EVENT WIBU', '6', 'DILEMA-PANITIA-EVENT-WIBU', 'Quotes “Bosen ngevent!” sebenarnya adalah ungkapan normal bagi seseorang yang jenuh datang ke acara berbau Jepang yang belakangan ini marak diselenggarakan sejak pandemi melandai di awal 2022.\r\n\r\nLucunya, komen-komen senada “bosen” justru ditemukan di grup chat atau sosial media komunitas atau sirkel wibu itu sendiri. Berdasarkan pantauan, jarang ditemukan komen bosen di post sosial media Japanholic Solo Raya.\r\n\r\nJadi kayak semacam rasan-rasan asyik di tongkrongan. Sah-sah aja ya,\r\n\r\nApakah salah melontarkan komen “bosen”? Nggak juga. Orang bebas berpendapat. Karena pada dasarnya panitia event hanya menawarkan jasa di bidang hiburan di mana ente bisa memilih datang atau nggak.\r\n\r\nHanya saja, flashback ke masa pandemi 2020 – 2021, regulasi pemerintah soal pembatasan kegiatan masyarakat sangat berdampak ke eksistensi event-event Jejepangan Solo Raya.\r\n\r\nJangankan ngevent, kumpul di wedangan aja kena razia Satpol PP bahkan polisi patroli.\r\n\r\nTahun 2021, Japanholic Solo Raya sempat membuat 2 event skala kecil di mall. Itupun dibayangi ketakutan kena razia pihak berwenang. Atau didramakan dan diviralkan oleh netizen. Karena berpotensi jadi klaster baru.\r\n\r\nDua tahun vakum event akibat pandemi bikin kaum wibu Solo Raya kangen dateng event Jejepangan offline. “Ga asik ngevent online min!” tandas seorang wibuzen Konoha yang diamini Panitia Japanholic Solo Raya.\r\n\r\nPhisically dateng ke event Jejepangan udah menjadi kebutuhan wajib para wibu. Ngaku aja, event Jepang tu sebagai sarana (pura-pura) ke isekai, kumpul sama temen sirkel, foto bareng cosplayer hingga cari jodoh. Ya nggak?\r\n\r\nAwal 2022, setelah situasi mulai kondusif, Japanholic Solo Raya mulai mewacanakan event bertajuk SOLO JAPAN MATSURI untuk mengobati kerinduan para wibu. Meski saat itu belum diputuskan lokasi dan waktunya. Alias nekat bermodalkan pamflet kamingsun ala-ala.\r\n\r\n“Yang penting cek ombak dulu, nanti pasti ada jalannya.” – Zayn Ex Oyabun Japanholic Solo Raya.\r\n\r\nAntusiasme wibuzen Konoha bikin kaget. Maka, dibuatlah serangkaian mini event rutin dari Maret – Oktober 2022. Rata-rata, setiap weekend Japanholic mengadakan event di sejumlah tempat.\r\n\r\nHingga akhirnya muncul ungkapan “Bosen ngevent terus!” dari wibuzen yang budiman. Ungkapan jenuh karena hampir setiap minggu ada event, baik dari Japanholic Solo Raya atau komunitas lain.\r\n\r\nEntah beliau beneran merasa bosan atau hanya oknum whistle blower yang lagi black campaign biar pada kepengaruh buat ikutan merasa bosan.\r\n\r\nTapi syukurnya, masih banyak wibu yang menyambut hangat event dari Japanholic Solo Raya. Motivasi “Mencari waifu/husbu adalah jalan ninjaku!” sudah kuat mengakar di hati sanubari para wibu. Para pengabdi 2D pun tak pernah absen dari event Japanholic Solo Raya.\r\n\r\n“Ga bakal nyerah sampe ketemu waifu min!” kata wibu yang tak bisa disebut namanya.\r\n\r\nLalu, respons panitia Japanholic gimana? Begini ya bestie, udah tugas Japanholic Solo Raya memfasilitasi para wibu untuk mengejar kebahagiaan.\r\n\r\nHadapi komen kayak gitu dengan tersenyum dan lanjut siapin event di dua bulan terakhir tahun 2022 ini.', '2023-10-26', 'admin', '20231026165926.jpg'),
(10, 'MENYOAL STANDAR HARGA TIKET JFEST DI SOLO', '8', 'MENYOAL-STANDAR-HARGA-TIKET-JFEST-DI-SOLO', 'Persoalan harga tiket di setiap gelaran Japanese Festival (JFest) nampaknya masih menjadi parameter besar atau tidaknya sebuah event. Semakin mahal tiket yang dijual, biasanya Guest Star atau Performer yang dihadirkan sudah bertitel “Artis / Selebritis”.Venue juga menjadi pertimbangan dalam menentukan harga tiket. Biasanya semakin mahal berbanding lurus dengan venue yang nyaman. Bisa indoor dengan full AC ataupun tempat yang representatif dan cukup mengakomodir kebutuhan pengunjung khususnya cosplayer.Flashback ke harga tiket Solo Japan Matsuri (SJM) pada Agustus 2022 kemarin, dengan bandrol tiket mulai dari IDR 30k – 50k per hari, menimbulkan pro kontra.Opini pertama, harga dinilai standar, tidak terlalu mahal meski tidak bisa dikatakan murah. Dengan venue indoor full AC dan outdoor yang luas, bisa mengakomodir kebutuhan pengunjung, khususnya para cosplayer. Penjualan presale 1 dan 2 diadakan untuk membantu teman-teman yang keuangannya sedang tipis.Opini kedua, tiket SJM MAHAL. Saat ditanya berapa standar yang diinginkan, jawabannya cukup manusiawi: “Kalo bisa ya nggak usah beli tiket min! Guest starnya yang femes!”.Admin sih setuju setuju wae, tapi sayang biaya produksi tidak bisa dibayar dengan senyuman manis panitia.Flashback ke era 2003 saat JFest pertama kali diselenggarakan oleh JCLUB di SMA Negeri 5 Surakarta, tiket masih dibandrol dengan harga 5000 rupiah. Standar pada jaman itu disaat mie ayam masih seharga 2500 saja.Era 2010 – 2020 awal, rata rata tiket dibandrol dengan kisaran 15k – 25k untuk 1 hari. Tiket diatas itu sudah dianggap mahal dan elite untuk beberapa teman teman Wibu kita. Untuk venue kebanyakan bertempat di Gelora Pemuda Bung Karno Manahan, Universitas Sahid, Lokananta, ataupun UNS.Kembali ke pertanyaan awal, berapa standar harga tiket di Solo??Jika melihat angka Kehidupan Hidup Layak (KHL) di Kota Surakarta dari data resmi BPS adalah di angka 2 jutaan. Bahasa simplenya, dengan duit 10 ribu aja di Solo kamu udah bisa makan kenyang plus minum di HIK (kalo ente ga kalap lo ya).Melihat data dan histori harga tiket JFest di Solo dari 2017 keatas, dan dengan inflasi rata rata 1 – 1,5 % di kota Solo, memang standar harga tiket JFest di Solo tidak bisa mahal, misal diatas 100k ^^Mahal atau murah itu relatif, tergantung benefit apa yang didapatkan oleh pembeli tiket semisal: Venue, Pengisi Acara, Konten Acara, ataupun pertimbangan lainnya.Kembali lagi, JFest adalah penawaran jasa hiburan, dimana kebutuhan hiburan bukan sebuah kebutuhan primer seperti pangan, sandang, dan papan. Kamu bisa memilih menabung untuk membeli tiket dan memang sudah mengalokasikan pengeluaran untuk hedon di event.Atau mengeluh hanya dapat air mineral mini, yang dimana harusnya dapet free cendol dawet juga.Bagaimana opinimu??', '2023-10-26', 'admin', '20231026170252.jpg'),
(11, 'nyoba slugnya oke', '6', 'nyoba-slugnya-oke', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-11-04', 'admin', '20231104081919.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` enum('Admin','Kontributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Zainuri', 'Admin'),
(8, 'Kaitoga', 'd2e16e6ef52a45b7468f1da56bba1953', 'Lorem', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
