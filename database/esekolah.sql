-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2023 pada 11.32
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta`
--

CREATE TABLE `akta` (
  `id_akta` int(5) NOT NULL,
  `akta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akta`
--

INSERT INTO `akta` (`id_akta`, `akta`) VALUES
(1, ' Ya, dapat ditunjukkan'),
(2, 'Ya, tidak dapat ditunjukkan'),
(3, 'Tidak memiliki'),
(4, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alasan_masuk_panti`
--

CREATE TABLE `alasan_masuk_panti` (
  `id_alasan` int(5) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alasan_masuk_panti`
--

INSERT INTO `alasan_masuk_panti` (`id_alasan`, `alasan`) VALUES
(1, 'Pendidikan/Agama'),
(2, 'Ditelantarkan/ditelantarkan'),
(3, 'Miskin/tidak mampu'),
(4, 'Sulit diatur/tidak disiplin'),
(5, 'Cacat/cacat'),
(6, 'Korban/kekerasan'),
(7, 'Korban/konflik'),
(8, 'Korban/alam'),
(9, 'Putusan/pengadilan'),
(10, 'Pendidikan/pendidikan'),
(11, 'Yatim/piatu\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `image`) VALUES
(1, 'Doa Rutin 1 Muharram 1444 H', '<div class=\"m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf n3t5jt4f\">\r\n<div dir=\"auto\">Umat Islam Indonesia hari ini, Jumat (29/7/2022), telah memasuki akhir bulan Dzulhijjah, tepatnya tanggal 29 Dzulhijjah 1443 H. Ini sekaligus sebagai tanda bakal memasuki akhir tahun. Jika hilal pada sore ini terlihat, dapat dipastikan lusa, Sabtu (30/7/2022) sudah masuk tahun baru, 1 Muharram 1444 H.</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Ketika menemui akhir dan awal tahun dianjurkan untuk membaca doa begitu juga santri PONDOK PESANTREN RIYADUS SHOLIHIN PUTRA.</div>\r\n<div dir=\"auto\">Doa akhir tahun dibaca selepas shalat Ashar pada Jumat sore. Doa akhir tahun ini dibaca sebanyak 3 kali.</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Berikut doa akhir tahun dan artinya:</div>\r\n<div dir=\"auto\">اَللّٰهُمَّ مَا عَمِلْتُ مِنْ عَمَلٍ فِي هٰذِهِ السَّنَةِ مَا نَهَيْتَنِي عَنْهُ وَلَمْ أَتُبْ مِنْهُ وَحَلُمْتَ فِيْها عَلَيَّ بِفَضْلِكَ بَعْدَ قُدْرَتِكَ عَلَى عُقُوْبَتِيْ وَدَعَوْتَنِيْ إِلَى التَّوْبَةِ مِنْ بَعْدِ جَرَاءَتِيْ عَلَى مَعْصِيَتِكَ فَإِنِّي اسْتَغْفَرْتُكَ فَاغْفِرْلِيْ وَمَا عَمِلْتُ فِيْهَا مِمَّا تَرْضَى وَوَعَدْتَّنِي عَلَيْهِ الثَّوَابَ فَأَسْئَلُكَ أَنْ تَتَقَبَّلَ مِنِّيْ وَلَا تَقْطَعْ رَجَائِيْ مِنْكَ يَا كَرِيْمُ</div>\r\n<div dir=\"auto\">Artinya: &ldquo;Tuhanku, aku meminta ampun atas perbuatanku di tahun ini yang termasuk Kau larang-sementara aku belum sempat bertobat, perbuatanku yang Kau maklumi karena kemurahan-Mu-sementara Kau mampu menyiksaku, dan perbuatan (dosa) yang Kau perintahkan untuk tobat-sementara aku menerjangnya yang berarti mendurhakai-Mu. Tuhanku, aku berharap Kau menerima perbuatanku yang Kau ridhai di tahun ini dan perbuatanku yang terjanjikan pahala-Mu. Janganlah kau membuatku putus asa. Wahai Tuhan Yang Maha Pemurah.&rdquo;</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Berikut doa awal tahun dan artinya:</div>\r\n<div dir=\"auto\">اَللّٰهُمَّ أَنْتَ الأَبَدِيُّ القَدِيمُ الأَوَّلُ وَعَلَى فَضْلِكَ العَظِيْمِ وَكَرِيْمِ جُوْدِكَ المُعَوَّلُ، وَهٰذَا عَامٌ جَدِيْدٌ قَدْ أَقْبَلَ، أَسْأَلُكَ العِصْمَةَ فِيْهِ مِنَ الشَّيْطَانِ وَأَوْلِيَائِهِ، وَالعَوْنَ عَلَى هٰذِهِ النَّفْسِ الأَمَّارَةِ بِالسُّوْءِ، وَالاِشْتِغَالَ بِمَا يُقَرِّبُنِيْ إِلَيْكَ زُلْفَى يَا ذَا الجَلَالِ وَالإِكْرَامِ</div>\r\n<div dir=\"auto\">Artinya: &ldquo;Tuhanku, Kau yang Abadi, Qadim, dan Awal. Atas karunia-Mu yang besar dan kemurahan-Mu yang mulia, Kau menjadi pintu harapan. Tahun baru ini sudah tiba. Aku berlindung kepada-Mu dari bujukan Iblis dan para walinya di tahun ini. Aku pun mengharap pertolongan-Mu dalam mengatasi nafsu yang kerap mendorongku berlaku jahat. Kepada-Mu, aku memohon bimbingan agar aktivitas keseharian mendekatkanku pada rahmat-Mu. Wahai Tuhan Pemilik Kebesaran dan Kemuliaan</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Karangmangu, Jum\'at 29 Juli 2022</div>\r\n<div dir=\"auto\">Follow ig: @rish_putra</div>\r\n<div dir=\"auto\">Fanspage: pondok pesantren riyadus sholihin putra</div>\r\n<div dir=\"auto\">Email: rish.presputra@gmail.com</div>\r\n<div dir=\"auto\">_____</div>\r\n<div dir=\"auto\">Alamat lengkap</div>\r\n<div dir=\"auto\">Ponpes Riyadus Sholihin Putra jl.lokajaya RT. 09 Rw. 02 karangmangu kec Tarub Kab Tegal 52184</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Nomer rekening</div>\r\n<div dir=\"auto\">7685-01-013722-53-3</div>\r\n<div dir=\"auto\">An. Pp riyadus sholihin putra</div>\r\n<div dir=\"auto\">Kontak person</div>\r\n<div dir=\"auto\">+62 838-9634-0565</div>\r\n<div dir=\"auto\">+62 831-5963-5237</div>\r\n</div>', '2022-07-24', 'Foto_User220922-b51b37319f.jpg'),
(3, 'Gebyar Muharram Pondok Pesantren riyadush sholihin Tarub', '<div class=\"m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf n3t5jt4f\">\r\n<div dir=\"auto\">Gebyar Muharram Ponpes Pesantren Riyadus Sholihin Putri dalam rangka Memperingati Tahun Baru Islam 1444 H dan HUT Kemerdekaan Indonesia ke 77</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">____</div>\r\n<div dir=\"auto\">Twibbon HUT RI ke 77</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Ftwb.nz%2Frisputri77%3Ffbclid%3DIwAR30VIq9NAITG-REHRnQMKW4jXKaGRHKCHHYK7LXUGK-JfG-fZKQzk0muXs&amp;h=AT1yi-ArcrE_1q_9OvSPIv3n6AJ1sF-DDEYt-rRxmCn5j4aXA0h-x6hT8DhRwmI0fpoj4u1CfK6mml29gkygAfRi5S92nBmzlc9PJz7EzKjwjFPyG4EySrU1xBn8FoRSkKsM&amp;__tn__=-UK-R&amp;c[0]=AT2PHsxEwS2oPQSOs8ZS6pZXO4na-bpxGt8Z7083zKDE_w9AO6ux8uMoTgyac0K705Qi-dWEr8upWiWr7tmee9SBAb736ar8HPcBY1iqA1Yp8M4qZkeDXnKwwfxkiC0vECbs6r_NkVmzZjjffuC_wGFRPkpGONs5EBVwq320VBV7vhjvGwEijAcmTq3o89Y_R8IbkFLa\" target=\"_blank\" rel=\"nofollow noopener\">https://twb.nz/risputri77</a></div>\r\n<div dir=\"auto\">Ponpes putri</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Ftwb.nz%2Fppsrisputra01%3Ffbclid%3DIwAR2oemjR3dpblwYB5OC51i_ZWoJh4PT9DyMDC2-qzH8syBbwTXCfM7H9dcM&amp;h=AT2p-SW7V1E2---K0saKZM4vvKIq0wVNvWYYodEh0jN_ePyUvLgOnnJqjZ8j-5os5PkhdUP4TD3izfXugSReeSaby-fqP0Y2KkRiYqDidLN_ScJn7XGm1rGyTBH5QW-Tyu64&amp;__tn__=-UK-R&amp;c[0]=AT2PHsxEwS2oPQSOs8ZS6pZXO4na-bpxGt8Z7083zKDE_w9AO6ux8uMoTgyac0K705Qi-dWEr8upWiWr7tmee9SBAb736ar8HPcBY1iqA1Yp8M4qZkeDXnKwwfxkiC0vECbs6r_NkVmzZjjffuC_wGFRPkpGONs5EBVwq320VBV7vhjvGwEijAcmTq3o89Y_R8IbkFLa\" target=\"_blank\" rel=\"nofollow noopener\">https://twb.nz/ppsrisputra01</a></div>\r\n<div dir=\"auto\">Ponpes putra</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Karangmangu, Selasa 16 Agustus 2022</div>\r\n<div dir=\"auto\">Follow ig: @rish_putra</div>\r\n<div dir=\"auto\">Fanspage: pondok pesantren riyadus sholihin putra</div>\r\n<div dir=\"auto\">Email: rish.presputra@gmail.com</div>\r\n<div dir=\"auto\">_____</div>\r\n<div dir=\"auto\">Alamat lengkap</div>\r\n<div dir=\"auto\">Ponpes Riyadus Sholihin Putra jl.lokajaya RT. 09 Rw. 02 karangmangu kec Tarub Kab Tegal 52184</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Nomer rekening</div>\r\n<div dir=\"auto\">7685-01-013722-53-3</div>\r\n<div dir=\"auto\">An. Pp riyadus sholihin putra</div>\r\n<div dir=\"auto\">Kontak person</div>\r\n<div dir=\"auto\">+62 838-9634-0565</div>\r\n<div dir=\"auto\">+62 831-5963-5237</div>\r\n</div>', '2022-07-27', 'Foto_User220922-2f7a8bb0b8.jpg'),
(4, 'Hari Sambangan Pondok pesantren riyadush', '<div class=\"m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf n3t5jt4f\">\r\n<div dir=\"auto\">Di antara kebahagiaan seorang santri di pondok adalah saat orang tua mereka berkunjung ke pesantren untuk menjenguk yang diistilahkan dengan sambangan. Pada momen itulah para santri bisa melepas rindu dengan keluarga dan terlebih bisa mendapat kiriman dan oleh-oleh, diawali dengan istighosah bersama seluruh santri dan keluarga wali santri / orang tua santri.</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Karangmangu, Ahad 4 September 2022</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Link YouTube</div>\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://youtube.com/channel/UCga3bFp7THGcihvaH47xMlQ?fbclid=IwAR2qtohgjyBOL1de1lMDpwRN88tu-EpSq5JjocPCZfoVVfOX4fIWRZAaT7c\" target=\"_blank\" rel=\"nofollow noopener\">https://youtube.com/channel/UCga3bFp7THGcihvaH47xMlQ</a></div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Link Instagram</div>\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/tv/ChPhw4DFZMf/?igshid=YmMyMTA2M2Y%3D&amp;fbclid=IwAR07XYOw0PYimwemNq2q9WdqK54Tft_SQnPOJSZF2IoFXRzj1ZlC3Q28WXU\" target=\"_blank\" rel=\"nofollow noopener\">https://www.instagram.com/tv/ChPhw4DFZMf/?igshid=YmMyMTA2M2Y=</a></div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Link Facebook</div>\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd pbevjfx6 innypi6y\" tabindex=\"0\" role=\"link\" href=\"https://web.facebook.com/profile.php?id=100083387076652&amp;__cft__[0]=AZXXOx9eoN64sqScnkwFcRISD4tVjFOx2Vjo6gMlD4Iab5xsxPuUGuByzpPKwSdXP9sf8yfN2WsOUaqSmbBjXWTm-KS9gU0nUVIfaB2vFCL-XvziZM916KlUW72lOctLbBKVWw6Lpt5e370SprEGnSxzJ6OUo8kO92UTyLUw8Bl6ng&amp;__tn__=-UK-R\">https://www.facebook.com/profile.php?id=100083387076652</a></div>\r\n<div dir=\"auto\">_____</div>\r\n<div dir=\"auto\">Alamat lengkap</div>\r\n<div dir=\"auto\">Ponpes Riyadus Sholihin Putra jl.lokajaya RT. 09 Rw. 02 karangmangu kec Tarub Kab Tegal 52184</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Nomer rekening</div>\r\n<div dir=\"auto\">7685-01-013722-53-3</div>\r\n<div dir=\"auto\">An. Pp riyadus sholihin putra</div>\r\n<div dir=\"auto\">Kontak person</div>\r\n<div dir=\"auto\">+62 838-9634-0565</div>\r\n<div dir=\"auto\">+62 831-5963-5237</div>\r\n</div>', '2022-07-26', 'Foto_User220922-67e8510080.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brosur`
--

CREATE TABLE `brosur` (
  `id_brosur` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brosur`
--

INSERT INTO `brosur` (`id_brosur`, `image`) VALUES
(1, 'Foto_brosur230321-3ae825e91b.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int(5) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `no_hp_tamu` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_tamu` date NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `penerima_tamu` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama_tamu`, `no_hp_tamu`, `alamat`, `tgl_tamu`, `keperluan`, `penerima_tamu`, `id_user`) VALUES
(128, 'aziz', '0845672889933', 'kramat', '2023-03-20', 'Hibah', 'Pak Suratman', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_donatur`
--

CREATE TABLE `data_donatur` (
  `id_donatur` int(5) NOT NULL,
  `tgl_donatur` date NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `alamat_donatur` varchar(100) NOT NULL,
  `no_hp_donatur` varchar(13) NOT NULL,
  `kategori` char(1) NOT NULL,
  `id_user` int(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_donatur`
--

INSERT INTO `data_donatur` (`id_donatur`, `tgl_donatur`, `nama_donatur`, `alamat_donatur`, `no_hp_donatur`, `kategori`, `id_user`, `keterangan`) VALUES
(7, '2023-03-20', 'suratman', 'panggung, tegal', '08765433332', '1', 25, '10000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(5) NOT NULL,
  `gol_assatidz` char(1) NOT NULL,
  `nik_guru` varchar(16) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk_guru` varchar(1) NOT NULL,
  `tempat_lahir_guru` varchar(50) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `mulai_kerja` date NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `pelatihan` text NOT NULL,
  `foto_guru` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `telp_guru` char(13) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `gol_assatidz`, `nik_guru`, `nama_guru`, `jk_guru`, `tempat_lahir_guru`, `tgl_lahir_guru`, `mulai_kerja`, `pendidikan`, `pelatihan`, `foto_guru`, `id_user`, `telp_guru`, `status`) VALUES
(4, '', '098767776666', 'beckam', 'L', 'tegal', '2000-09-10', '2023-03-20', '3', '', 'Foto_guru230320-ce33afedd0.png', 25, '087654333333', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengurus`
--

CREATE TABLE `data_pengurus` (
  `id_pengurus` int(5) NOT NULL,
  `nik_pengurus` varchar(16) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `jk_pengurus` varchar(1) NOT NULL,
  `tempat_lahir_pengurus` varchar(50) NOT NULL,
  `tgl_lahir_pengurus` date NOT NULL,
  `mulai_kerja` date NOT NULL,
  `jabatan` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `pelatihan` text NOT NULL,
  `foto_pengurus` varchar(50) DEFAULT NULL,
  `id_user` int(5) NOT NULL,
  `telp_pengurus` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pengurus`
--

INSERT INTO `data_pengurus` (`id_pengurus`, `nik_pengurus`, `nama_pengurus`, `jk_pengurus`, `tempat_lahir_pengurus`, `tgl_lahir_pengurus`, `mulai_kerja`, `jabatan`, `status`, `pendidikan`, `pelatihan`, `foto_pengurus`, `id_user`, `telp_pengurus`) VALUES
(11, '1234567', 'beckam', 'L', 'tegal', '2000-09-10', '2023-03-20', '3', '1', '3', '', 'Foto_Pengurus230320-584b0b7c26.png', 25, '087654333335');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_anak` int(5) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `jk_anak` varchar(1) NOT NULL,
  `tempat_lahir_anak` varchar(50) NOT NULL,
  `tgl_lahir_anak` date NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `nama_bapak_kandung` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `agama` char(1) NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `foto_anak` varchar(50) NOT NULL,
  `tahun_masuk` char(4) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `NISN` varchar(30) NOT NULL,
  `status` char(1) NOT NULL,
  `scan_ijasah` varchar(250) NOT NULL,
  `scan_kk` varchar(250) NOT NULL,
  `scan_akte` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `ktp` varchar(250) NOT NULL,
  `asal_paud` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_anak`, `nama_anak`, `jk_anak`, `tempat_lahir_anak`, `tgl_lahir_anak`, `nama_ibu_kandung`, `nama_bapak_kandung`, `pekerjaan_ayah`, `pekerjaan_ibu`, `agama`, `pendidikan`, `foto_anak`, `tahun_masuk`, `id_user`, `id_kelas`, `nik_anak`, `NISN`, `status`, `scan_ijasah`, `scan_kk`, `scan_akte`, `alamat`, `no_hp`, `ktp`, `asal_paud`) VALUES
(86, 'ayu', 'P', 'tegal', '2015-01-22', 'lili', 'surya', 'petani', 'petani', '1', '1', '', '2023', 0, 0, '1234567877759', '', '1', '', 'Scan_Kartu_Keluarga230321-4efc97b328.png', 'Scan_Kartu_Akte_Kelahiran230321-f1f6501bc6.png', 'kramat', '083852746901', '', 'tk aba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_santri`
--

CREATE TABLE `detail_santri` (
  `nik_anak` varchar(16) NOT NULL,
  `jenis_masalah` char(1) NOT NULL,
  `keadaan_saat_ini` char(1) NOT NULL,
  `akta` char(1) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `alasan_masuk_panti` char(1) NOT NULL,
  `masuk_dtks` char(1) NOT NULL,
  `jenis_bantuan` char(1) NOT NULL,
  `tahun_bantuan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_santri`
--

INSERT INTO `detail_santri` (`nik_anak`, `jenis_masalah`, `keadaan_saat_ini`, `akta`, `tempat_tinggal`, `wali`, `alasan_masuk_panti`, `masuk_dtks`, `jenis_bantuan`, `tahun_bantuan`) VALUES
('1234567877759', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `judul` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `image`, `judul`) VALUES
(1, 'Foto_User220922-48e852000c.jpg', 'gebyar muharram'),
(2, 'Foto_User220726-dd59985f13.png', 'Memancing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `identitas_barang` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `keadaan` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `kode_barang` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `nama_barang`, `identitas_barang`, `tgl_terima`, `keadaan`, `jumlah`, `asal`, `id_user`, `kode_barang`) VALUES
(11, 'Aplikasi', 'aplikasi web manajemen data', '2023-03-20', '1', 1, 'Hibah', 25, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bantuan`
--

CREATE TABLE `jenis_bantuan` (
  `id_bantuan` int(5) NOT NULL,
  `bantuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_bantuan`
--

INSERT INTO `jenis_bantuan` (`id_bantuan`, `bantuan`) VALUES
(1, 'PKSA/PROGRESA'),
(2, 'PKH'),
(3, 'KIP'),
(4, 'KIS\r\n'),
(5, 'Tidak Ada\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_masalah`
--

CREATE TABLE `jenis_masalah` (
  `id_jenis_masalah` int(5) NOT NULL,
  `jenis_masalah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_masalah`
--

INSERT INTO `jenis_masalah` (`id_jenis_masalah`, `jenis_masalah`) VALUES
(3, 'Anak Jalanan'),
(4, 'Anak Berhadapan Hukum'),
(5, 'Remaja Rentan'),
(6, 'Anak Penyandang Disabilias'),
(7, 'Anak Memerlukan Perlindungan Khusus'),
(8, 'tidak ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan_saat_ini`
--

CREATE TABLE `keadaan_saat_ini` (
  `id_keadaan` int(5) NOT NULL,
  `keadaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keadaan_saat_ini`
--

INSERT INTO `keadaan_saat_ini` (`id_keadaan`, `keadaan`) VALUES
(1, 'Kedua Orang Tua Masih Hidup'),
(2, 'Yatim Piatu'),
(3, 'Yatim '),
(4, 'Piatu'),
(5, 'Keadaan Orang Tua Tidak Diketahui'),
(6, 'Keadaan Ayah Tidak Diketahui'),
(7, 'Keadaan Ibu Tidak Diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id_saldo` int(5) NOT NULL,
  `tgl_keuangan` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah_uang` float NOT NULL,
  `type` char(1) NOT NULL,
  `pemasukan` float DEFAULT NULL,
  `pengeluaran` float DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id_saldo`, `tgl_keuangan`, `keterangan`, `jumlah_uang`, `type`, `pemasukan`, `pengeluaran`, `saldo`, `id_user`) VALUES
(39, '2023-03-20', 'saldo awal', 10000000, '1', 10000000, NULL, 10000000, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mpl` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pendaftaran_awal` date NOT NULL,
  `batas_akhir` date NOT NULL,
  `periode` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL,
  `fasilitas` text NOT NULL,
  `nama_kepala_ponpes` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `no_hp`, `email`, `pendaftaran_awal`, `batas_akhir`, `periode`, `whatsapp`, `instagram`, `facebook`, `youtube`, `fasilitas`, `nama_kepala_ponpes`, `image`) VALUES
(1, '085800688784', 'sdnmejasembarat01@gmail.com', '2023-03-20', '2023-08-15', '2023/2024', '6285800688784', 'https://www.instagram.com', 'https://www.facebook.com', 'https://www.youtube.com', '', 'Suratman, S.Pd.', 'Foto_User230321-c8f5cb7ef1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_kel` int(5) NOT NULL,
  `nomor_surat_kel` varchar(20) NOT NULL,
  `tgl_surat_kel` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `upload_file` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `pengirim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_kel`, `nomor_surat_kel`, `tgl_surat_kel`, `tujuan`, `perihal`, `upload_file`, `id_user`, `pengirim`) VALUES
(6, 'C/BHI/GNSKH/2023', '2023-03-20', 'sd mejasem barat 01', 'Lomba', 'Surat_Keluar230320-bc728fe07f.pdf', 25, 'bu Silau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(5) NOT NULL,
  `tgl_terima` date NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `upload_file` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `tgl_terima`, `nomor_surat`, `tgl_surat`, `perihal`, `pengirim`, `upload_file`, `penerima`, `id_user`) VALUES
(5, '2023-03-20', 'B/126/III/NMVA/2023', '2023-03-20', 'Ujian Sekolah', 'Suratman', 'Surat_Masuk230320-af6b75bd76.pdf', 'Bu fan', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` char(1) NOT NULL COMMENT '0:Master Admin, 1:Pengurus, 2:Keuangan',
  `img_user` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `role`, `img_user`, `email`) VALUES
(25, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'Foto_User200818-070ffad3c0.png', 'adm.sdnmejasembarat01@gmail.com'),
(26, 'Pengurus', 'ef4113dcac30d9fea0cd4ed7caa66ee8', '1', 'Foto_User200708-d79f7940be.png', ''),
(27, 'Bendahara', 'c9ccd7f3c1145515a9d3f7415d5bcbea', '2', 'Foto_User200708-fe373c957b.png', ''),
(30, 'adm', '21232f297a57a5a743894a0e4a801fc3', '0', '', 'husni.hnf@bsi.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `token_id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `alasan_masuk_panti`
--
ALTER TABLE `alasan_masuk_panti`
  ADD PRIMARY KEY (`id_alasan`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `brosur`
--
ALTER TABLE `brosur`
  ADD PRIMARY KEY (`id_brosur`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `data_donatur`
--
ALTER TABLE `data_donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `nik_pengurus` (`id_user`);

--
-- Indeks untuk tabel `detail_santri`
--
ALTER TABLE `detail_santri`
  ADD PRIMARY KEY (`nik_anak`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `jenis_masalah`
--
ALTER TABLE `jenis_masalah`
  ADD PRIMARY KEY (`id_jenis_masalah`);

--
-- Indeks untuk tabel `keadaan_saat_ini`
--
ALTER TABLE `keadaan_saat_ini`
  ADD PRIMARY KEY (`id_keadaan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mpl`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_kel`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta`
--
ALTER TABLE `akta`
  MODIFY `id_akta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `alasan_masuk_panti`
--
ALTER TABLE `alasan_masuk_panti`
  MODIFY `id_alasan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `brosur`
--
ALTER TABLE `brosur`
  MODIFY `id_brosur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `data_donatur`
--
ALTER TABLE `data_donatur`
  MODIFY `id_donatur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `id_pengurus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  MODIFY `id_bantuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenis_masalah`
--
ALTER TABLE `jenis_masalah`
  MODIFY `id_jenis_masalah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keadaan_saat_ini`
--
ALTER TABLE `keadaan_saat_ini`
  MODIFY `id_keadaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_saldo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mpl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_kel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
