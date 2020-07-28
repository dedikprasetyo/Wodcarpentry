-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 18.45
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_usaha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_produk`
--

CREATE TABLE `tb_data_produk` (
  `id_produk` char(6) NOT NULL,
  `id_jenis_produk` char(6) NOT NULL,
  `id_jenis_kayu` char(6) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_data_produk` text NOT NULL,
  `harga_awal` varchar(255) NOT NULL,
  `harga_akhir` varchar(255) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_produk`
--

INSERT INTO `tb_data_produk` (`id_produk`, `id_jenis_produk`, `id_jenis_kayu`, `nama_produk`, `deskripsi_data_produk`, `harga_awal`, `harga_akhir`, `gambar_produk`) VALUES
('C00001', 'B00001', 'A00001', 'nama produk a aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa', 'deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk z', 'Rp50.000,00', 'Rp45.000,00', 'produk_a.png'),
('C00002', 'B00001', 'A00001', 'nama produk b', 'deskripsi produk b', 'Rp23.430.000,00', 'Rp21.200.000,00', 'produk_b.png'),
('C00003', 'B00001', 'A00001', 'nama produk a aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa', 'deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk z', 'Rp50.000,00', 'Rp45.000,00', 'produk_c.png'),
('C00004', 'B00001', 'A00001', 'nama produk b', 'deskripsi produk b', 'Rp430.000,00', 'Rp200.000,00', 'produk_d.png'),
('C00005', 'B00001', 'A00001', 'nama produk a aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa', 'deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk z', 'Rp50.000,00', 'Rp45.000,00', 'produk_e.png'),
('C00006', 'B00001', 'A00001', 'nama produk b', 'deskripsi produk b', 'Rp23.430.000,00', 'Rp21.200.000,00', 'produk_f.png'),
('C00007', 'B00001', 'A00001', 'nama produk a aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa', 'deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk z', 'Rp50.000,00', 'Rp45.000,00', 'produk_g.png'),
('C00008', 'B00001', 'A00001', 'nama produk b', 'deskripsi produk b', 'Rp430.000,00', 'Rp200.000,00', 'produk_h.png'),
('C00009', 'B00001', 'A00001', 'nama produk a aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa', 'deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk a deskripsi produk z', 'Rp50.000,00', 'Rp45.000,00', 'produk_i.png'),
('C00010', 'B00002', 'A00002', 'j1', 'j2', 'j3', 'j3', 'produk_j.png'),
('C00011', 'B00003', 'A00011', 'Kancing Baju', 'kancing baju berbahan kayu perbiji', 'Rp5.000,00', 'Rp3.000,00', 'kancingbaju.png');

--
-- Trigger `tb_data_produk`
--
DELIMITER $$
CREATE TRIGGER `tr_data_produk` BEFORE INSERT ON `tb_data_produk` FOR EACH ROW BEGIN
    SET @hitung = CONVERT((RIGHT((SELECT id_produk FROM `tb_data_produk` ORDER by id_produk DESC LIMIT 1), 5)), UNSIGNED) + 1;
    if (@hitung  >= 1) THEN
        if (@hitung < 10) THEN 
            SET new.id_produk = concat('C0000',@hitung);
        ELSEIF (@hitung < 100) THEN
            SET new.id_produk = concat('C000',@hitung);
        ELSEIF (@hitung < 1000) THEN
            SET new.id_produk = concat('C00',@hitung);
        ELSEIF (@hitung < 10000) THEN
            SET new.id_produk = concat('C0',@hitung);
        ELSE
            SET new.id_produk = concat('C',@hitung);
        END IF;
    ELSE 
    	SET new.id_produk = 'C00001';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kayu`
--

CREATE TABLE `tb_jenis_kayu` (
  `id_jenis_kayu` char(6) NOT NULL,
  `jenis_kayu` varchar(255) NOT NULL,
  `deskripsi_kayu` text NOT NULL,
  `gambar_jkayu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_kayu`
--

INSERT INTO `tb_jenis_kayu` (`id_jenis_kayu`, `jenis_kayu`, `deskripsi_kayu`, `gambar_jkayu`) VALUES
('A00000', '-', '-', '-'),
('A00001', 'Jati', 'Kayu yang memiliki predikat kayu kuat ini sering kali menjadi patokan bahan kayu yang berkualitas bagi banyak orang. Kayu yang memiliki warna umum coklat ini memiliki urat bewarna coklat gelap yang berjarak antara satu dengan yang lainnya sedikit jarang. Kayu Jati sebenarnya dibawa ke Indonesia sekitar tahun 1800 oleh Belanda ke Indonesia dan tumbuh subur di beberapa daerah panas di pulau Jawa, dari Jawa Barat hingga Jawa Timur. Kayu Jati yang berkualitas tinggi biasanya di supply oleh daerah yang memiliki temperatur panas dan tanah yang berkapur seperti di Jawa Tengah. Kayu Jati terkenal akan kekuatan dan kepadatannya, yang mempengaruhi durabilitas kayu ini. Minyak didalam Kayu Jati dianggap membuatnya menjadi lebih tahan rayap, dan pori-pori nya yang kecil menyebabkan kayu ini dapat di finishing sangat halus. Kepadatan Kayu Jati membuatnya menjadi kayu favorit untuk dibuat ukiran. ', 'jati.jpg'),
('A00002', 'Meranti', 'Kayu Meranti atau sering juga disebut Kayu Kalimantan merupakan kayu yang sering dipergunakan untuk membuat kusen, furniture dan panel. Mendapat julukan Kayu Kalimantan karna meskipun dapat tumbuh diberbagai daerah di Indonesia sebagai negara tropis, Kayu Meranti tumbuh paling baik di daerah Kalimantan. Batang Kayu Meranti dapat tumbuh hingga 70 meter dengan diameter bisa mencapai 4 meter lebih. Kayu Meranti yang bahasa latinnya Mahoni Philipina sering kita temui berwarna coklat kemerahan dan tanpa urat (grain), dijual di toko material sebagai papan atau kaso.', 'meranti.jpg'),
('A00003', 'Merbau', 'Kayu yang berasal dari Maluku dan Papua ini merupakan jenis kayu Indonesia yang keras dan memiliki julukan sebagai Kayu Besi. Kayu Merbau telah menjadi primadona lokal dan eksport sejak lama karna kualitasnya yang superior. Kayu Merbau berwarna coklat abu gelap atau merah coklat gelap dengan arah serat yang hampir lurus. Kayu ini dapat tumbuh menjulang hingga 50 meter dengan diameter hingga 2 meter. Karna kekerasan dan durabilitasnya, Kayu Merbau banyak dijadikan sebagai parkit untuk lantai, tiang bangunan, bak truk hingga digunakan sebagai bahan konstruksi jembatan. Saat ini harga Kayu Merbau cukup bersaing dengan harga Kayu Jati.', 'merbau.jpg'),
('A00004', 'Albasia', 'Kayu Sengon atau Albasia merupakan jenis kayu Indonesia yang khas daerah tropis dan dapat dengan mudah ditemui diberbagai toko material dalam bentuk kaso atau papan. Kayu Albasia termasuk kayu yang lunak dan sulit untuk langsung di finishing, karakternya yang berbulu dan berpori-pori besar dan mudah patah membuat Kayu ini tidak dapat langsung dijadikan material pembuat produk. Meskipun demikian permintaan Albasia yang meningkat dari tahun ketahun memberikan bukti bahwa penggunaan dan manfaat yang disadari produsen atas kayu ini juga semakin luas. Kenyataannya kayu yang mudah untuk di oleh ini dipergunakan sebagai bahan utama pembuatan kayu olahan seperti triplex dan blockboard, stick ice cream, pensil, korek api hingga bahan baku untuk kertas.', 'albasia.jpg'),
('A00005', 'Cendana', 'Wangi, itulah kesan pertama yang anda dapatkan pada kayu Cendana. Jenis kayu Indonesia yang sering digunakan sebagai bahan baku dupa dan produk-produk kerajinan ini sebenarnya bukan merupakan golongan pohon yang tinggi bahkan bisa disebut sebagai parasit. Pohon Cendana hanya tumbuh hingga 15 meter dengan diameter batang hanya 30 cm, sulit dibudidayakan dan membutuhkan waktu yang cukup lama untuk dapat dipanen namun sangat diminati dipasaran menjadikan kayu ini relatif cukup mahal, bahkan dijual dengan takaran kilogram. di Indonesia Kayu Cendana putih dapat tumbuh subur di daerah NTT (Nusa Tenggara Timur) dan telah menjadi komoditas eksport sejak lama.', 'cendana.jpg'),
('A00006', 'Ulin', 'Kayu Ulin merupakan salah satu jenis kayu Indonesia yang dapat dijadikan sebagai material pembuat kapal yang berasal dari Kalimantan dan Sumatra bagian selatan. Kayu Ulin dapat tumbuh hingga 50cm dengan diameter hingga lebih dari 1 meter. Kayu Ulin terkenal sangat tahan perubahan suhu, kelembaban, tidak mudah dimakan rayap dan pengaruh air karna bersifat berat dan keras. Kayu Ulin dapat dimanfaatkan untuk berbagai keperluan terutama konstruksi. Di daerah tempat ditemukannya banyak Kayu Ulin yaitu Kalimantan, kayu ini sejak dahulu kala dipergunakan sebagai bahan pembuat rumah panggung bagi penduduk lokal. Selain itu Kayu Ulin juga sering dimanfaatkan oleh penduduk lokal untuk digunakan sebagai bahan kerajinan seperti patung hingga perhiasan.', 'ulin.jpg'),
('A00007', 'Eboni', 'Kayu yang memiliki nama latin Diospyros Celebica ini, kini sudah cukup langka. Perpaduan warna hitam dan coklat dengan urat yang kontras pada jenis kayu Indonesia yang terkenal dengan nama Macassar Ebony dan Black Ebony ini membuatnya menjadi kayu yang sangat diburu oleh bangsa Jepang, Eropa dan Amerika. Kegiatan eksport kayu ini mencapai puncaknya pada tahun 1973 dengan jumlah mencapai 26.000 m3 dan terus menurun hingga kini ditetapkan oleh IUCN dan 2000 WCN (World Conservation Union) Red List of Threatened Species sebagai kayu yang dilindungi.', 'eboni.jpg'),
('A00008', 'Trembesi', 'Beberapa waktu yang lalu, sebuah perusahaan rokok membuat program CSR dengan penanaman ribuan bibit pohon Trembesi, alasannya pohon Trembesi merupakan salah satu jenis pohon yang dapat menyerap hingga 28.5 ton gas CO2. Selain manfaatnya sebagai penyerap gas CO2 yang baik, Kayu Trembesi kini juga semakin diminati oleh pasar lokal dan Asia untuk dijadikan bahan baku furnitur, ukiran dan patung. Hal ini disebabkan oleh urat Kayu yang dimiliki Kayu Trembesi yang menawan.', 'trembesi.jpg'),
('A00009', 'Bangkirai', 'Kayu yang memiliki nama lain Yellow Balau atau Balau ini banyak ditemukan di Indonesia, Malaysia dan Filipina. Di Indonesia, Kayu ini banyak dipasok dari hutan Kalimantan. Kayu Bangkirai dapat tumbuh hingga 40 meter dengan diameter hingga 120 cm. Kayu ini bewarna kuning kecoklatan dengan kekerasan antara 880-990 kg/m3 hingga 1050 kg/m3 pada kekeringan 12%. Pada suhu normal Kayu Bangkirai dapat kering dalam waktu 12 hingga 1 bulan. Ikatan antar serat yang kuat dan mudah diolah menjadikan kayu ini cocok untuk decking, outdoor furniture, dan berbagai keperluan konstruksi lainnya namun pada beberapa jenis bangkirai seratnya cenderung mudah terbuka dam mudah melintir sehingga tidak disarankan dipergunakan pada konstruksi yang membutuhkan kestabilan tinggi.', 'bangkirai.jpg'),
('A00010', 'Kamper', 'Dahulu kala penggunaan getah beberapa jenis Kayu Kamper menjadi kapur barus merupakan kegiatan bisnis primadona yang membuat Sumatera menjadi terkenal. Penggunaan kapur barus dapat ditemui pada buku History of Sumatera (1783) yang ditulis oleh William Marsden, Kimiya’Al-‘Ltr (Abad ke-9) yang ditulis oleh Al-Kindi dan Actius dari Amida (502-578) serta berbagai tulisan lainnya yang mempropagandakan penggunakan kamper/kapur barus. Bahkan disebutkan pula bahwa pada abad ke 2 masehi terdapat bandar dagang yang terkenal menjual kapur barus bernama Barosai. Kini penggunaan kapur barus semakin meluas dan dibuat pula sintetisnya dengan terpentin. Selain wangi, kapur barus juga dipergunakan untuk mengawetkan mayat dan tidak disukai oleh hama. Demikian pula kayu kamper, kayu ini termasuk kayu yang tahan hama sehingga banyak diminati banyak orang.', 'kamper.jpg'),
('A00011', 'Sonokeling', 'Ini dia Rosewood-nya Indonesia, Sonokeling, Sonobrit, Sonosungu atau Sanakeling adalah nama sejenis pohon penghasil kayu keras dan indah, anggota dari suku Fabaceae. Kayunya yang berbobot sedang dan berkualitas tinggi itu dalam perdagangan dikenal sebagai Indian rosewood, Bombay blackwood atau Java palisander. Kayu ini memiliki corak yang indah, bewarna coklat gelap dengan alur-alur berwarna hitam membuat kayu ini terlihat sangat eksotis. Pohon Kayu Sonokeling dapat tumbuh hingga 40 meter dengan diameter mencapai 2 meter. Pohon ini dapat ditemui di daerah Jawa Tengah dan Jawa Timur terutama didaerah-daerah yang berbatu dan agak kering. Kayu Sonokeling dimanfaatkan untuk membuat berbagai jenis produk, mulai dari furniture, alat musik, hingga alat-alat olah raga. Dengan Berat jenis 0.77-0.86 dengan kadar air 15%, Kayu ini juga termasuk kayu indah kelas 1, kelas awet I dan kelas kuat II. Karna Sonokeling termasuk kayu keras, maka kayu ini dahulunya sering digunakan sebagai bahan konstruksi dan bahan pembuat kusen-kusen mewah yang kuat. Kayu Sonokeling yang juga memiliki kadar air yang rendah serta cukup menghasilkan minyak kayu juga terkenal tahan akan serangan rayap dan jamur pembusuk kayu.', 'sonokeling.jpeg'),
('A00012', 'Sungkai', 'Kayu berwarna terang ini merupakan material Kayu yang sering digunakan oleh pengrajin untuk membuat furniture indoor. Kayu Sungkai juga diolah oleh industri menjadi veneer yang warna dan coraknya banyak diminati oleh pasar. Dengan corak Kayu perpaduan antri warna kuning, coklat muda dan kuning setelah kuning, Kayu Sungkai dapat mempertegas kesan segar dan compact pada furniture indoor. Dipasaran harga Kayu Sungkai jelasnya lebih murah di bandingkan harga Kayu Jati atau Sonokeling, oleh karna itu pemakaiannya juga lebih luas dibandingkan Kayu Jati, Sonokeling atau Ulin yang kelasnya lebih tinggi. Dari segi kualitas, meskipun coraknya cukup menawan, kayu ini hanya termasuk kayu Kelas Kuat II dan III dan Kelas Awet II dan III juga. Massa jenis dan bobot Kayu Sungkai apalagi jika telah melalui proses Kiln atau pengeringan akan lebih berat sedikit di bandingkan Kayu Pinus, Oleh karna itu, penggunaannya disarankan bukan untuk keperluan outdoor kecuali dengan treatment khusus.', 'sungkai.jpg'),
('A00013', 'Pinus dan Cemara', 'Dari beberapa artikel yang saya baca, pada dasarnya Pohon Pinus dan Cemara memiliki ciri fisik dan nama latin yang berbeda pula, namun corak kayu nya tidak berbeda terlalu signifikan. Kayu Cemara memiliki warna yang lebih menonjol dibandingkan Kayu Pinus, Kayu Cemara terkesan lebih merah dan pekat dibandingkan warna Kayu Pinus yang lebih kuning dan terang. Selain itu Kayu Cemara memiliki banyak (mata) karna lebih banyak ranting dan cabang dibandingkan Kayu Pinus. Pinus dan Cemara memiliki banyak manfaat, mulai dari segi religius (sering digunakan sebagai pohon natal) hingga kesehatan. Selain itu, Kayu nya juga dapat dimanfaatkan untuk banyak hal. Kayu Pinus dan Cemara terkenal lembek dan mudah rusak, kepadatan kayunya yang kurang justru dimanfaatkan untuk produk-produk kayu yang membutuhkan pengolahan ringan, disposable dan flamabelity yang tinggi seperti korek api dan palet kayu untuk shipping. Kayu Pinus dan Cemara termasuk Kayu dengan Kelas Awet dan Kuat level III. Kayu Pinus dan Cemara memiliki densitas/kepadatan 480-520 kg/m3 dan kadar air MC 12% dan butuh waktu 12-15 hari untuk pengeringan.', 'pinus_cemara.jpg'),
('A00014', 'Kelapa', 'Diberbagai belahan dunia, kayu kelapa telah dipergunakan sebagai material untuk berbagai keperluan karna keberlimpahannya di alam. Mulai dari kerajinan hingga furniture, Kayu Kelapa menjadi Kayu yang hampir semua orang kenali. Kayu Kelapa telah digunakan sebagai tiang-tiang bangunan hingga jembatan karna kekuatannya. Kayu ini memiliki corak yang unik, perpaduan coklat tua dan coklat muda yang kontras yang berbentuk lurus-lurus. Serat-serat kayu kelapa cukup pendek sehingga pada papan olahan dari kayu kelapa terlihat seperti goresan-goresan pendek. Serat berwarna gelap merupakan serat yang lebih keras dibandingkan serat yang lebih terang. Kayu Kelapa tergolong kayu Kelas Kuat II dan III dengan berat jenis dari 0,5 hingga 0,9 tergantung umur dari pohon tersebut. Densitas Kayu Kelapa rata-rata 400 kg/m3 dengan diameter batang hingga 50cm dan hampir lurus keatas. Salah satu  produk akhir dari Kayu Kelapa yang saat ini menjadi produk andalan ekspor adalah parket Kayu Kelapa. Parket Kayu Kelapa saat ini menjadi primadona dipasar Eropa karna menjadi salah satu produk olahan Kayu yang mendapat predikat Eco Labelling.', 'kelapa.jpg'),
('A00015', 'Mahogany (Mahoni)', 'Butuh kayu untuk di bengkok-kan (bend) dan mampu bertahan lama dalam bentuk tertentu serta sangat baik difinishing duco atau alami maka Kayu Mahoni merupakan kayu yang tepat. Baik secara vertikal maupun secara horizontal Kayu Mahoni cukup baik dalam uji tekan sehingga dapat diaplikasikan penggergajian dari berbagai arah dengan baik. Karna kayu ini lebih lunak dibandingkan Kayu Jati, Kayu ini cukup mudah untuk di ukir dan dibentuk sesuai keinginan. Kayu Mahoni cukup tahan terhadap serangan hama kayu. Ketika di proses seperti pemotongan atau dipaku tidak mudah retak, dan cukup mudah untuk diampelas. Kayu ini tahan terhadap keretakan saat di steam pada proses pembengkokan. Kayu Mahoni memiliki ciri fisik berwarna merah pada bagian dalamnya, berpori-pori kecil dan plain (coraknya tidak terlalu kelihatan). Pohon Kayu Mahoni dapat dipanen pada umur 7 hingga 15 tahun, dan dapat tumbuh dengan baik di daerah tropis. Penggunaan Kayu Mahoni cukup luas karna kekuatan dan ketersediaanya yang cukup banyak sehingga banyak digunakan didunia konstruksi dan pertukangan. Pohon Kayu Mahoni dapat tumbuh hingga berdiameter 125cm dengan tinggi 35-45 m. Pohon ini sering ditanam dipinggir jalan karna ditengari dapat mengurangi polusi udara hingga 69% dan membantu penangkapan air serta berdaun lebat sehingga menjadi peneduh dipinggir jalan.', 'mahoni.jpg'),
('A00016', 'Kayu Aren', 'Orang yang sakti dan punya ilmu kebal, jika ditusuk dengan ruyung tetap akan mati. Kepercayaan orang Sunda terhadap pepatah ini dapat ditemukan logikanya. Kayu Aren atau Ruyung terhitung keras dan jika disabet pinggirannya setajam sembilu.  Pengolahan Kayu Aren dapat merusak mesin pengolah seperti ketam mesin dan gergaji lebih cepat dibandingkan kayu yang lain. Hal ini disebabkan Kayu Aren memiliki urat kayu yang berwarna hitam yang sangat keras. Karna masih dalam keluarga Palma, Kayu Aren memiliki corak seperti Kayu Kelapa. Namun perbedaan yang kontras dapat terlihat dari warna-nya yang jauh lebih gelap dibandingkan Kayu Kelapa. Aren, Enau, Hanau, Peluluk, Moka dan banyak lagi sebutan untuk tumbuhan aren ini memiliki pohon yang dapat tumbuh hingga 25 m dengan diameter hingga 65cm. Bagian batang Aren yang dapat digunakan sebagai papan adalah bagian agak luar hingga 10cm kearah dalam. Sedangkan bagian dalamnya lebih mudah rusak karna lebih lunak. Selain batang, Kayu Aren kita kenal sebagai penghasil gula merah, aren atau enau, dan penghasil kolang-kaling. Tidak sedikit yang mengubah air enau menjadi tuak diberbagai daerah di Indonesia karna air nira cepat terfementasi di udara.', 'aren.jpg');

--
-- Trigger `tb_jenis_kayu`
--
DELIMITER $$
CREATE TRIGGER `tr_jenis_kayu` BEFORE INSERT ON `tb_jenis_kayu` FOR EACH ROW BEGIN
    SET @hitung = CONVERT((RIGHT((SELECT id_jenis_kayu FROM `tb_jenis_kayu` ORDER by id_jenis_kayu DESC LIMIT 1), 5)), UNSIGNED) + 1;
    if (@hitung  >= 1) THEN
        if (@hitung < 10) THEN 
            SET new.id_jenis_kayu = concat('A0000',@hitung);
        ELSEIF (@hitung < 100) THEN
            SET new.id_jenis_kayu = concat('A000',@hitung);
        ELSEIF (@hitung < 1000) THEN
            SET new.id_jenis_kayu = concat('A00',@hitung);
        ELSEIF (@hitung < 10000) THEN
            SET new.id_jenis_kayu = concat('A0',@hitung);
        ELSE
            SET new.id_jenis_kayu = concat('A',@hitung);
        END IF;
    ELSE 
    	SET new.id_jenis_kayu = 'A00001';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_produk`
--

CREATE TABLE `tb_jenis_produk` (
  `id_jenis_produk` char(6) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_produk`
--

INSERT INTO `tb_jenis_produk` (`id_jenis_produk`, `jenis_produk`, `deskripsi_produk`) VALUES
('B00000', '-', '-'),
('B00001', 'Kitchen Stuff', '-'),
('B00002', 'Souvenirs', '-'),
('B00003', 'Fashion Stuff', '-'),
('B00004', 'Games Stuff', '-'),
('B00005', 'Resin Art', '-');

--
-- Trigger `tb_jenis_produk`
--
DELIMITER $$
CREATE TRIGGER `tr_jenis_produk` BEFORE INSERT ON `tb_jenis_produk` FOR EACH ROW BEGIN
    SET @hitung = CONVERT((RIGHT((SELECT id_jenis_produk FROM `tb_jenis_produk` ORDER by id_jenis_produk DESC LIMIT 1), 5)), UNSIGNED) + 1;
    if (@hitung  >= 1) THEN
        if (@hitung < 10) THEN 
            SET new.id_jenis_produk = concat('B0000',@hitung);
        ELSEIF (@hitung < 100) THEN
            SET new.id_jenis_produk = concat('B000',@hitung);
        ELSEIF (@hitung < 1000) THEN
            SET new.id_jenis_produk = concat('B00',@hitung);
        ELSEIF (@hitung < 10000) THEN
            SET new.id_jenis_produk = concat('B0',@hitung);
        ELSE
            SET new.id_jenis_produk = concat('B',@hitung);
        END IF;
    ELSE 
    	SET new.id_jenis_produk = 'B00001';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` char(6) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `sejarah` text NOT NULL,
  `moto` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_usaha`, `logo`, `sejarah`, `moto`, `alamat`) VALUES
('Z00001', 'Wodcarpentry', 'Logo.jpeg', 'Sejarah A', 'Moto A', 'Alamat A');

--
-- Trigger `tb_profil`
--
DELIMITER $$
CREATE TRIGGER `tr_profil` BEFORE INSERT ON `tb_profil` FOR EACH ROW BEGIN
    SET @hitung = CONVERT((RIGHT((SELECT id_profil FROM `tb_profil` ORDER by id_profil DESC LIMIT 1), 5)), UNSIGNED) + 1;
    if (@hitung  >= 1) THEN
        if (@hitung < 10) THEN 
            SET new.id_profil = concat('Z0000',@hitung);
        ELSEIF (@hitung < 100) THEN
            SET new.id_profil = concat('Z000',@hitung);
        ELSEIF (@hitung < 1000) THEN
            SET new.id_profil = concat('Z00',@hitung);
        ELSEIF (@hitung < 10000) THEN
            SET new.id_profil = concat('Z0',@hitung);
        ELSE
            SET new.id_profil = concat('Z',@hitung);
        END IF;
    ELSE 
    	SET new.id_profil = 'Z00001';
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_produk`
--
ALTER TABLE `tb_data_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`),
  ADD KEY `id_jenis_kayu` (`id_jenis_kayu`);

--
-- Indeks untuk tabel `tb_jenis_kayu`
--
ALTER TABLE `tb_jenis_kayu`
  ADD PRIMARY KEY (`id_jenis_kayu`);

--
-- Indeks untuk tabel `tb_jenis_produk`
--
ALTER TABLE `tb_jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_data_produk`
--
ALTER TABLE `tb_data_produk`
  ADD CONSTRAINT `tb_data_produk_ibfk_1` FOREIGN KEY (`id_jenis_kayu`) REFERENCES `tb_jenis_kayu` (`id_jenis_kayu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_produk_ibfk_2` FOREIGN KEY (`id_jenis_produk`) REFERENCES `tb_jenis_produk` (`id_jenis_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
