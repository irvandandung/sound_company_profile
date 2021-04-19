-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 08:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `path_image` varchar(225) NOT NULL,
  `id_kategori` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `tanggal`, `isi`, `path_image`, `id_kategori`) VALUES
(1, 'Metode Pembayaran Online Favorite di Masa Pandemi', '2021-04-03', 'Menurut Undang-Undang nomor 23 Tahun 1999 tentang Bank Indonesia (BI), system pembayaran merupakan system yang mencakup seperangkat aturan, lembaga dan mekanisme yang digunakan untuk melaksanakan pemindahan dana guna memenuhi kewajiban yang timbul dari suatu kegiatan ekonomi. Singkatnya, system pembayaran adalah system pemindahan sejumlah uang dari satu pihak ke pihak lain, baik oleh perorangan maupun badan usaha, sesuai aturan yang berlaku.\r\nSecara umum, system pembayaran terdiri dari 2 jenis, yaitu system pembayaran tunai dan nontunai. Jika system pembayaran tunai dapat menggunakan uang kartal (baik kertas maupun logam) sebagai alat pembayaran. Dan untuk pembayaran non tunai dapat menggunakan Emoney, Kartu Kredit, Cek, Nota debit, Transfer Bank.\r\nBanyak gaya hidup yang berubah selama masa pandemi covid19 ini. Penggunaan Emoney juga mengalami peningkatan permintaan. Transaksi melalui Emoney pembayaran digital semakin diandalkan sebagai opsi pembayaran utama bagi masyarakat. Dengan Emoney, pengguna dapat melakukan berbagai transaksi dengan mudah dan nyaman tanpa harus bersentuhan fisik saat bertransaksi di masa pandemic ini yang diharuskan untuk menjaga jarak.\r\nSalah satu nya untuk berbagi rezeki dibulan Ramadhan atau peringatan hari besar lainnya, jumlah pengguna Emoney selalu meningkat, Anda bisa memanfaatkan Emoney untuk transfer saldo Emoney Anda ke sesama pengguna Emoney. Atau Anda juga bisa beli dan bayar tagihan hanya melalui Emoney Anda.\r\n\r\nTau ngga system pembayaran favorite di Indonesia? Yuk simak berikut ini adalah system pembayaran yang paling sering digunakan di Indonesia selama pandemi :\r\n\r\nKartu Kredit\r\nSejak PSBB diberlakukan, metode pembayaran menggunakan Kartu kredit ini mengalami peningkatan yang signifikan yaitu sebesar 61%. Dalam 5 tahun terakhir, nilai transaksi kartu kredit Indonesia terus meningkat. Sepanjang tahun 2019, terdapat 349,2 juta transaksi dengan kartu kredit senilai 342, 7 triliun.\r\n\r\nTransfer Bank\r\nPada bulan Maret-April 2020, perusahaan fintech Rapyd melakukan survei terhadap 3.500 responden dari 7 negara dan menemukan bahwa 44,4 persen responden dari Indonesi lebih memilih menggunakan system pembayaran transfer bank untuk bertransasi. Untuk alternatif transaksinya yang beragam memudahkan orang untuk menggunakan transfer bank ini dari mulai transfer langsung dari mesin ATM sampai menggunakan fasilitas sms, internet banking atau mobile banking.\r\n\r\nDompet Digital\r\nMasih dalam penelitian yang sama, survei Rapyd juga menemukan bahwa 33,8 persen responden Indonesia lebih mengutamakan penggunaan dompet digital dalam kegiatan transaksi sehari-hari. Penggunaan dompet digital lebih praktis, aman dan nyaman.\r\n\r\nKartu Debit\r\nMeski mengalami penurunan volume transaksi dari 12,54 persen pada tahun 2018 menjadi 9,67 persen pada tahun 2019, penggunaan kartu debit atau ATM masih cukup popular dalam industri keuangan. Hal ini disebabkan oleh metode pembayaran dengan menggunakan uang elektronik berbasis server atau Emoney, penggunaan kartu debit masih diandalkan untuk transaksi dalam jumlah yang besar. Selain itu, pemilik kartu juga cukup memasukkan kode tertentu untuk melakukan pembayaran saat bertransaksi.\r\n\r\nMengingat banyaknya metode pembayaran yang ada di Indonesia, para pebisnis seperti Anda tentu perlu menyesuaikan system pembayaran untuk mengakomodasi kebutuhan pelanggan Anda. Tanpa harus membawa uang tunai atau harus membuka akun rekening bank, kartu kredit atau e-money, Anda bisa menyediakan metode pembayaran yang sesuai dengan preferensi pelanggan melalui layanan payment gateway kami yaitu Pay2U. Daftar dan gabung segera dengan Payment Gateway kami Pay2U untuk memudahkan transaksi pembayaran bisnis Anda.', 'https://www.pay2u.co.id/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-22-at-11.12.04.png', 1),
(2, 'Apa itu QRIS?', '2021-04-03', 'Musim pandemic covid19 juga mengakibatkan banyaknya masyarakat yang lebih memilih untuk melakukan pembayaran non tunai dalam belanja kebutuhan sehari hari. Pada 1 Januari 2020 Bank Indonesia (BI) mewajibkan seluruh penyedia layanan pembayaran non tunai menggunakan system QRIS (Quick Response [QR] Code Indonesian Standard).\r\nSetiap penyedia Penyelenggara Jasa Sistem Pembayaran (PJSP) berbasis QR (termasuk PJSP asing) wajib menggunakan QRIS. Ini diatur dalam ketentuan BI dalam PADG No 21/18/2019 tentang Implememtasi Standar International QRIS untuk pembayaran.\r\nLalu apa itu QRIS?\r\n\r\nQRIS merupakan standar QR Code untuk pembayaran digital melalui aplikasi uang elektronik berbasis server, dompet digital, atau mobile banking. Tujuan utama dari QRIS adalah agar pembayaran digital menjadi lebih mudah bagi masyarakat dan memudahkan regulator untuk mengawasi dari satu pintu saja.\r\n\r\nBerikut makna QRIS menurut BI :\r\n\r\nUniversal, yaitu QRIS bersifat inklusif, digunakan untuk seluruh lapisan masyarakat, serta mendukung untuk transaksi pembayaran domestic dan luar negeri.\r\nGampang, yaitu masyarakat bisa bertransaksi dengan mudah dan aman dalam satu genggaman ponsel.\r\nUntung, yaitu QRIS akan menguntungkan penjual dan pembeli dikarenakan hanya membutuhkan satu kode QR untuk semua aplikasi pembayaran pada ponsel yang akan lebih efisien dalam bertransaksi.\r\nLangsung, yaitu transaksi menggunakan QRIS akan berlangsung dengan proses cepat atau instan dan seketika sehingga mendukung kelancaran system pembayaran.\r\nTujuan utama dari QRIS adalah agar lebih memudahkan masyarakat luas dalam pembayaran digital dan memudahkan regulator untuk mengawasi dari satu pintu saja.\r\n\r\nTerdapat 2 jenis QRIS yakni sebagai berikut :\r\n\r\nStatis\r\nPenggunaan QR Code ditampilkan melalui stiker atau hasil cetak lain\r\nDapat menggunakan QR Code yang sama untuk setiap transaksi pembayaran\r\nQR Code belum memiliki nominal pembayaran yang harus dibayar, sehingga perlu menginput manual untuk jumlah nominal nya.\r\nDinamis\r\nQR Code ditampilkan melalui struk yang dicetak mesin EDC atau ditampilkan pada monitor\r\nQR Code akan selalu berbeda untuk setiap transaksi pembayaran\r\nQR Code telah memiliki nominal pembayaran yang harus dibayarkan oleh pembeli\r\nTerdapat Batasan nominal untuk setiap transaksi QRIS yaitu maksimal Rp 2 juta. Akan tetapi penerbit (PJSP) dapat menetapkan batas kumulatif harian dan bulanan atas transaksi QRIS yang dilakukan oleh masing masing pengguna. Penetapan batas kumulatif mengharuskan penerbit memiliki manajemen risiko yang baik.\r\n\r\nDengan biaya yang cukup murah (0,7% per transaksi) Anda sebagai merchant tidak akan lagi merasa kerepotan karena harus menyediakan QR Code yang berbeda untuk masing-masing PJSP. Konsumen Anda juga akan dimudahkan karena mereka dapat menggunakan metode pembayaran non tunai sesuai keinginan.\r\n\r\nCara Kerja QRIS :\r\n\r\nKetika Anda telah memasuki halaman pembayaran, Anda dapat memilih metode pembayaran. Kemudian pilih “Uang Elektronik” selanjutnya “QRIS”. Selanjutnya klik “Bayar Sekarang”.\r\nLalu akan diarahkan menuju ke halaman konfirmasi untuk nilai transaksi.\r\nAnda perlu cek Kembali untuk nilai transaksi nya. Scan QR Code dengan aplikasi E-money atau E-Wallet yang mendukung QRIS.\r\nMasukkin PIN untuk melanjutkan transaksi\r\nTransaksi Anda telah berhasil.\r\nIngin bisnis Anda semakin berkembang? Integrasikan website toko online Anda dengan payment gateway kami Pay2U agar bisa menerima pembayaran secara langsung di website Anda.', 'https://www.pay2u.co.id/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-17-at-09.54.40.jpeg', 1),
(3, 'Sebelum Berjualan Online, Ketahui Fakta Menarik Tentang Jual Beli Online di Indonesia', '2021-04-03', 'Kemajuan teknologi mengubah banyak hal salah satunya adalah cara berjualan orang-orang yang semakin canggih, yaitu dengan membuka toko online. Membuka toko online dirasa sangat menjangkau banyak audiens dan lebih praktis.\r\nPara pelaku bisnis memanfatakan internet sebagai media utamanya, karena sudah pasti banyak orang menggunakan dan sering mengaksesnya.\r\n\r\nTerlepas dari hal tersebut, tahukah kamu ada beberapa fakta menarik mengenai jual-beli online di Indonesia loh..\r\n\r\nBerikut 5 Fakta menarik tentang jual-beli online di Negara kita :\r\n\r\nPerempuan lebih sering belanja online\r\nPerempuan memang dominan lebih sering belanja offline maupun online dari pada laki-laki. Berdasarkan data survei, 58% pelaku belanja online adalah perempuan.\r\n\r\nBusana adalah jenis produk yang paling laris\r\nBusana menjadi komoditas yang paling laku, tercatat 71,6% menjadikan busana adalah produk yang dominan di beli oleh perempuan. Kemudian disusul oleh kosmetik dengan angka 20%. Di posisi ke 3 ada gadget yang mendapat porsi 17,1% peringkat keempat dan kelima adalah jasa travel dan buku, yaitu dengan presentase 9,75 saja.\r\n\r\nTransaksi paling sering berlangsung via jejaring sosial\r\njejaring sosial menempati kedudukan pertama sebagai tempat yang paling banyak dimanfaatkan oleh pedagang online di Indonesia, tepatnya sebesar 64,9%. Disusul oleh messenger di posisi kedua dengan porsi 22,9%. Dari sini bisa kita lihat bahwa kegiatan jual-beli online di Indonesia seringkali melibatkan penjual dan pembeli secara langsung.\r\n\r\nSMS banking adalah metode pembayaran terpopuler\r\nSMS Banking banyak digunakan oleh masyarakat di kota besar maupun kecil. SMS banking merupakan metode pembayaran yang paling sering digunakan, meliputi 67% dari total pengguna. Internet banking menyusul di posisi kedua, mencatatkan angka 33% dari total transaksi jual-beli online.\r\n\r\nAlasan tidak berbelanja online secara umum\r\nSebanyak 72,7%  pengguna internet di Indonesia mengatakan belum pernah berbelanja online. Alasan paling umum yang membuat pengguna internet mengurungkan niatnya untuk berbelanja online adalah anggapan mereka bahwa prosesnya akan berlangsung lama. Selain itu alasan lain tidak mau berbelanja online adalah takut barang yang dijual tidak sama dengan yang ada pada gambar alias ditipu pedangan.\r\n\r\nNah itulah 5 Fakta menarik yang data-data ini diambil dari riset yang dilakukan oleh APJII (Asosiasi Penyelanggara Jasa Internet Indonesia) dan PUSKAKOM UI. Silahkan menikmati transaksi yang mudah dan cepat di toko online kepercayaan kamu. Hanya saja, tetap pilih toko online terpercaya yang sudah terakreditasi untuk menghindari penipuan.', 'https://www.pay2u.co.id/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-15-at-10.39.56.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(50) NOT NULL,
  `nama` text NOT NULL,
  `id_kategori_jabatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(50) NOT NULL,
  `nama` text NOT NULL,
  `id_jabatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` int(50) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `nama`, `keterangan`) VALUES
(1, 'Dompet Digital', 'Berita - berita mengenai dompet digital'),
(2, 'Peer To Peer Landing', 'Berita - berita tentang Payment Gateway');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_jabatan`
--

CREATE TABLE `kategori_jabatan` (
  `id` int(50) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_title`
--

CREATE TABLE `tbl_title` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `detail` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `version` varchar(15) NOT NULL,
  `logo` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_title`
--

INSERT INTO `tbl_title` (`id`, `title`, `detail`, `owner`, `version`, `logo`) VALUES
(1, 'SOUND', 'SOUND ', 'PT.SOUND_ID', '1.0.0', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` int(11) NOT NULL,
  `typefile` varchar(15) NOT NULL,
  `user_group` varchar(20) NOT NULL,
  `user_level` varchar(20) NOT NULL,
  `user_area` varchar(20) NOT NULL,
  `registrasi` datetime DEFAULT NULL,
  `log_in` datetime NOT NULL,
  `log_out` datetime NOT NULL,
  `idcard` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `nama`, `nik`, `typefile`, `user_group`, `user_level`, `user_area`, `registrasi`, `log_in`, `log_out`, `idcard`) VALUES
(1, 'mobile', 'da185433a3e114a3b4ac5774d78e1136d38', 'Dmuktico', 11234, 'dalu.jpg', 'User', 'MobileScan', 'Mobile', '2018-12-15 09:26:36', '2020-03-27 14:46:42', '2020-03-27 14:46:49', '34572016a90803b62859929c53ba59ccd6459729'),
(9, 'nis_sugianto', 'c3160f7df730ba8f6999604b82eebd1e9cb', 'NIS SUGIANTO', 12988, '', 'Admin', 'Service Part', 'Admin', '2020-03-13 17:29:05', '2021-03-08 16:54:15', '2021-03-08 16:57:40', '98119b41748de6d2097e726b238ac120bd81f891'),
(6, 'admin', 'b2fb06abbe7ea77e4c53cbf7ea3fd15b294', 'DMUKTICO', 56540, 'admin.jpg', 'Admin', 'Administrator', 'Admin', '2020-01-11 16:06:36', '2021-04-16 14:50:47', '2021-03-26 14:07:52', 'b0b9515ace4c525d8af7a66a3f152c5146ff93a8'),
(8, 'bintang', 'd807da8d8b873adc60d9734303d6f6611e1', 'BINTANG KALIMASADA', 67701, '', 'User', 'MobileScan', 'Mobile', '2020-03-13 16:48:46', '2021-03-26 14:08:13', '2021-03-26 14:08:17', '6175f918157c11200a84eab2a8784e2a05b4c805'),
(13, 'ppc', '58c6dabfa5e6550ab739bae63b26859280f', 'PPC Operation', 12345, '', 'Admin', 'Operation', 'Admin', '2021-03-26 14:06:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'f10b8cdd6a3a2b1a67a5eaa7be5eb4f187c9ada0'),
(10, 'gunawan', 'a994bed95a10de324d8fdfa8406d7fe8578', 'Anggun Gunawan', 69000, '', 'User', 'MobileScan', 'Mobile', '2021-03-03 17:39:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'be8eb8bd606deedcb65f0fcbece4705a37163fa1'),
(11, 'yuli', 'e388487dfbc150109d15ea08e8dcd2403cf', 'Yuli Wibowo', 9206, '', 'Admin', 'Operation', 'Admin', '2021-03-03 17:41:30', '2021-03-18 16:55:21', '2021-03-18 17:19:15', 'a9801db2900f6f41b5504179e7507acdd4826e69'),
(12, 'sofiyan', '45ae207d9cb8a7fddd48d7f2a9702ffe259', 'Sofiyan Abdurrahman', 6948, '', 'Admin', 'Operation', 'Admin', '2021-03-03 17:42:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'f96f6c1f8a054c88a4554c1ca5aee87a7b8a6bd2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_berita` (`id_kategori`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_jabatn` (`id_kategori_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jabatan` (`id_jabatan`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_jabatan`
--
ALTER TABLE `kategori_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_title`
--
ALTER TABLE `tbl_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`),
  ADD KEY `idcard` (`idcard`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_jabatan`
--
ALTER TABLE `kategori_jabatan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_title`
--
ALTER TABLE `tbl_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_kategori_berita` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_berita` (`id`);

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `fk_kategori_jabatn` FOREIGN KEY (`id_kategori_jabatan`) REFERENCES `kategori_jabatan` (`id`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `fk_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
