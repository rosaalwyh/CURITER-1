-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 08:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_aidok`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `kategori_artikel` varchar(100) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `konten_artikel` mediumtext NOT NULL,
  `sumber_artikel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `kategori_artikel`, `judul_artikel`, `konten_artikel`, `sumber_artikel`) VALUES
(1, 'Vitamin, Obat', '10 Manfaat Vitamin C yang Unik Bagi Kesehatan, Wajib Tahu Nih!', 'Vitamin C atau asam askorbat adalah salah satu nutrisi penting bagi tubuh yang aman. Vitamin C bisa didapat dari stroberi, kubis, kembang kol, paprika, kentang brokoli, dan cabai.\r\n\r\nDi Hari Vitamin C Sedunia ini, yuk kenali fakta-fakta unik seputar manfaat vitamin C bagi kesehatan kamu.\r\n\r\nDengan begitu, kamu bakal lebih sering mengonsumsinya. Dilansir dari Organic Facts, berikut beberapa yang terpenting di antaranya!\r\n\r\n1. Dilansir dari Cochrane Database of Systematic Reviews, asam askorbat meningkatkan kekebalan tubuh sehingga bisa mengobati pilek\r\n2. Vitamin C bisa mencegah penyakit kudis sebagai akibat melemahnya jaringan ikat, tulang, kolagen, dan pembuluh darah\r\n3. Menurut American Journal of Clinical Nutrition, asupan vitamin C membantu menurunkan tekanan darah atau hipertensi\r\n4. Dilansir dari National Cancer Institute, vitamin C dosis tinggi bisa mencegah kanker\r\n5. Asupan vitamin C yang disertai diet sayur dan buah-buahan mengurangi risiko stroke dan melindungi tubuh dari radikal bebas\r\n6. Vitamin C berperan penting dalam produksi neurotransmiter yang bisa meningkatkan suasana hati dan mengurangi tekanan psikologis\r\n7. Vitamin C juga membantu mempercepat penyembuhan luka\r\n8. Asam askorbat membantu mengurangi gejala asma dengan cara melindungimu dari efek bahaya polusi\r\n9. Vitamin C bermanfaat sebagai obat diabetes karena membantu memproses insulin dan glukosa\r\n10. Asam askorbat mencegah penyakit jantung karena melindungi pembuluh darah dari kerusakan akibat radikal bebas', 'https://www.idntimes.com/health/fitness/viktor-yudha/manfaat-vitamin-c/4'),
(2, 'Penyakit, Virus', 'Banyak Teori Mengenai SARS-Cov-2, Sebenarnya Virus Corona Berasal dari Mana?', 'Beberapa waktu lalu, muncul berbagai teori mengenai asal usul virus corona baru yang menyebabkan penyakit Covid-19. Ada yang menyatakan jika virus corona berasal dari kebocoran lab Wuhan, dari meteor yang meledak di Tiongkok, atau berkaitan dengan uji coba 5G. \r\n\r\nBanyak teori-teori konspirasi yang berseliweran di jagat dunia maya mengenai virus corona ini. Salah satu yang cukup viral adalah bahwa virus corona sudah diprediksi akan muncul pada tahun 2020 di Wuhan melalui sebuah buku fiksi berjudul The Eyes of Darkness yang diterbitkan pada tahun 1981. Namun, benarkah demikian?\r\n\r\nJenis-jenis virus corona\r\nCoronavirus sebenarnya sudah ada sejak tahun 1930-an. Corona adalah suatu kelompok virus yang bisa menyebabkan penyakit pada hewan atau manusia. Nama corona sendiri diambil dari bahasa Latin yang berarti mahkota karena virus ini berbentuk seperti mahkota. \r\n\r\nJenis-jenis virus corona yang menginfeksi manusia bervariasi bergantung pada seberapa parah penyakit yang ditimbulkan dan seberapa jauh penyebarannya. Namun, kini ada 7 jenis coronavirus yang dikenal dapat menginfeksi manusia, yaitu:\r\n\r\nHuman coronavirus yang terdiri dari 229E (alpha coronavirus), NL63 (alpha coronavirus), OC43 (betha coronavirus), dan HKU1 (betha coronavirus)\r\nMERS-CoV yang menyebabkan penyakit MERS (Middle East Respiratory Syndrome)\r\nSARS-CoV yang menyebabkan penyakit SARS (Severe Acute Respiratory Syndrome)\r\nSARS-CoV-2 yang menyebabkan penyakit Covid-19\r\nBeberapa jenis virus ini dapat menyebabkan timbulnya infeksi saluran pernapasan mulai dari batuk, pilek, hingga masalah yang lebih serius. Di antara satu sama lain, virus ini memiliki kemiripan dalam morfologi dan struktur kimia. Umumnya, virus corona ditemukan dalam spesies mamalia. \r\n\r\nVirus corona berasal dari mana?\r\nSebagian infeksi akibat virus corona, termasuk MERS dan SARS berasal dari kelelawar. Pada kasus infeksi MERS-CoV, ketika air liur atau urine kelelawar yang membawa virus termakan unta, maka unta akan terinfeksi dan menjadi perantara. \r\n\r\nSelanjutnya, unta pun menulari manusia melalui kontak langsung dengan susu, urine atau dagingnya. Lalu, manusia yang telah terinfeksi akan menulari manusia lainnya melalui tetesan air liur saat batuk atau bersin. Sementara pada kasus SARS, yang menjadi hewan perantara yaitu musang dan rakun. Karena virus SARS-CoV-2 masih baru, maka terdapat beberapa kemungkinan mengenai asal muasal virus ini, yaitu:\r\n\r\nKelelawar\r\nSama halnya dengan MERS dan SARS, virus corona SARS CoV-2 pun dipercaya berasal dari kelelawar. Sebuah penelitian yang diterbitkan pada 30 Januari lalu menemukan bukti bahwa kelelawar-lah yang sebenarnya menjadi asal dari infeksi ini. Melalui analisis filogenetik, menunjukkan bahwa virus SARS CoV-2 memiliki kemiripan dengan dua virus corona yang menyerupai SARS dari kelelawar.\r\n\r\nAkan tetapi, meski analisis filogenetik menunjukkan hal tersebut, namun bagaimana virus ini berpindah dari populasi hewan ke manusia belum ditemukan. Sebelumnya, hewan yang dijual di pasar makanan laut Wuhan digadang-gadang menjadi inang perantara yang memfasilitasi kemunculan virus SARS-CoV-2 pada manusia. Namun, pada 5 dari 7 kasus Covid-19 yang pertama tidak memiliki keterkaitan dengan pasar makanan laut Wuhan tersebut.\r\n\r\nPangolin atau trenggiling\r\nSelain kelelawar, trenggiling juga dipercaya menjadi pembawa virus SARS-CoV-2. Para peneliti di South China Agricultural University menganalisis lebih dari seribu sampel metagenome hewan liar. Mereka menemukan bahwa pangolin atau trenggiling lah yang paling mungkin menjadi inang perantara virus tersebut. Sebab, urutan strain coronavirus yang dikumpulkan dari metagenome trenggiling 99% identik dengan pasien virus corona.\r\n\r\nUlar\r\nDi pasar Huanan di Wuhan, ular adalah reptil yang sangat diminati sehingga para peneliti pun curiga apakah ular menjadi awal penyebaran virus corona. Lalu, peneliti melakukan analisis kode protein terhadap ular apakah memiliki kode yang sama dengan virus corona. Hasilnya, ditemukan kemiripan kode protein. Karena hasil tersebut, ular diduga menjadi asal pembawa virus corona baru.\r\n\r\nSeorang profesor yang menjadi tim peneliti tersebut juga menyatakan, meski penelitian sebelumnya menemukan bahwa  virus corona baru ini berasal dari kelelawar namun hewan tersebut tidur di musim dingin sehingga tak mungkin menyebabkan wabah. Meski begitu, penelitian ini belum dipublikasikan dan masih sebatas siaran pers.', 'https://www.sehatq.com/artikel/virus-corona-berasal-dari-kelelawar-benarkah-demikian'),
(3, 'Puasa, Manfaat, Kesehatan, Tubuh', 'Tujuh Manfaat Puasa bagi Kesehatan Fisik dan Mental, Apa Saja?', 'Bulan Ramadan menjadi salah satu momen yang tepat bagi umat muslim berlomba-lomba dalam mendapatkan pahala. Terlepas dari menjalankan kewajiban agama dan mendapatkan pahala, ternyata puasa memiliki banyak manfaat bagi kesehatan tubuh. Dilansir dari kapanlagi.com, puasa memiliki tujuh manfaat bagi kesehatan. Apa saja manfaatnya?\r\n\r\n1. Menurunkan Risiko Penyakit Jantung\r\nDilansir dari Alodokter, salah satu penelitian menemukan bahwa seseorang yang berpuasa selama sebulan sekali memiliki risiko 58 persen lebih rendah terkena penyakit jantung daripada yang tidak. Selain itu, puasa juga dapat mencegah hal-hal yang menyebabkan penyakit jantung, seperti mencegah diabetes dan menurunkan kadar kolesterol dalam tubuh.\r\n\r\nSelain berpuasa, mencegah munculnya penyakit jantung juga harus diimbangi dengan asupan makanan yang masuk ke dalam tubuh. Dianjurkan untuk mengonsumsi ikan karena mengandung zat-zat yang baik untuk jangung serta menghindari makanan-makanan yang mengandung lemak trans, seperti gorengan.\r\n\r\n2. Membantu Menurunkan Berat Badan\r\nIlustrasi Diet\r\nIlustrasi diet (dok. Pixabay.com/Putu Elmira)\r\nSaat berpuasa, tubuh akan membakar lemak berlebih di sekitar organ seperti ginjal maupun hati. Hal ini dapat membantu mencegah fungsi organ terganggun. Selain itu, pembakaran lemak menjadi energi saat puasa juga dapat menurunkan berat badan.\r\n\r\nPara ahli mengatakan bahwa apabila berpuasa secara benar dan teratur, maka akan memberikan manfaat jangka panjang bagi tubuh, yaitu membantu meningkatkan sistem pencernaan dan metabolisme secara keseluruhan.\r\n\r\n3. Turunkan Gula Darah\r\nDilansir dari doktersehat, puasa dapat menurunkan kadar gula darah dalam tubuh secara signifikan, yaitu lebih dari 30 persen, Hal itu dapat terjadi di beberapa hari pertama berpuasa. Dianjurkan pula untuk selalu menjaga kadar gula darah agar tetap stabil karena kelebihan ataupun kekurangan kadar gula darah dalam tubuh sama-sama tidak baik\r\n\r\n4. Meningkatkan Kesehatan Mental\r\nIlustrasi orang bahagia\r\nIlustrasi orang bahagia. Sumber foto: unsplash.com/Brooke Cagle.\r\nSelain memberikan manfaat secara fisik, puasa juga bermanfaat bagi kesehatan mental.Sebuah studi mengungkapkan bahwa saat puasa tubuh dapat memproduksi banyak endorphin yaitu hormon yang membuat bahagia. Hal itu dapat meningkatkan mood, meningkatkan rasa bahagia, mencegah depresi dan juga gangguan kecemasan\r\n\r\nEfek tersebut biasanya akan dirasakan setelah 3-4 hari. Hal itu disebabkan karena tubuh harus beradaptasi terlebih dahulu saat puasa.\r\n\r\n5. Membuang Racun dalam Tubuh\r\nSaat puasa, tidak ada makanan yang dikonsumsi hampir sehari penuh. Hal ini dapat memberikan kesempatan bagi sistem pencernaan untuk beristirahat, sehingga tubuh dapatlebih fokus pada pembuangan racun di dalam tubuh. Lalu saat proses pembakaran lemak menjadi energi, tubuh juga akan membakar racun berbahaya yang ada pada lemak yang tersisa.\r\n\r\n6. Meningkatkan Fungsi Otak\r\nAhli berpendapat bahwa berpuasa dapat merangsang pelepasan BDNF (brain-derived neurothropic factor) di otak. BDNF berfungsi untuk membantu tubuh meningkatkan fungsi otak dan memproduksi lebih banyak sel-sel otak. Selain itu, BDNF juga dapat melindungi sel-sel otak serta mengurangi depresi sekaligus resiko terkena demensia atau pikun\r\n\r\n7. Awet Muda\r\nAwet muda menjadi hal yang diidam-idamkan setiap orang. Hal ini bisa didapatkan dengan cara berpuasa. Dengan berpuasa tubuh akan menghentikan sementara atau mengurangi proses metabolisme dalam tubuh, khususnya saluran pencernaan. Penghentian proses metabolisme inilah yang dapat menghambat penuaan dini.\r\n\r\nSelain itu, berpuasa juga dapat mengurangi radikal bebas dalam tubuh secara signifikan sekaligus meningkatkan antioksidan yang juga dapat membuat kita awet muda.\r\n\r\nItulah beberapa manfaat yang kita dapatkan apabila melaksanakan puasa. Selain mendapatkan pahala, tubuh juga lebih sehat secara fisik dan mental.', 'https://www.liputan6.com/ramadan/read/3964491/tujuh-manfaat-puasa-bagi-kesehatan-fisik-dan-mental-apa-saja'),
(4, 'Vitamin, Obat, Manfaat', 'MANFAAT VITAMIN A BAGI TUBUH', 'Vitamin A atau retinol atau asam retinoik merupakan nutrisi yang penting untuk organ penglihatan, pertumbuhan tubuh, pembelahan sel, kesehatan sistem reproduksi dan menunjang sistem kekebalan tubuh. Vitamin A dapat dibedakan menjadi dua jenis berdasarkan asalnya, yaitu:\r\n\r\nRetinoid merupakan vitamin A yang berasal dari produk hewani\r\nBeta karoten merupakan vitamin A yang berasal dari tumbuhan\r\nVitamin A juga memiliki sifat antioksidan. Antioksidan merupakan zat yang dapat melindungi sel terhadap efek radikal bebas. Radikal bebas memiliki kemungkinan dapat memicu terjadinya penyakit jantung, kanker dan penyakit lain. The American Heart Association merekomendasikan untuk mendapatkan antioksidan seperti beta karoten adalah dengan mengkonsumsi makanan seperti buah-buahan, sayuran, dan biji-bijian.\r\nSuplemen vitamin A dapat bermanfaat bagi orang yang memiliki pola makan buruk atau terbatas atau yang membutuhkan asupan tinggi vitamin A seperti pada penyakit pancreas, penyakit mata, atau campak. Jumlah kebutuhan harian vitamin A pada tubuh adalah 900mcg pada pria dewasa dan 700mcg untuk wanita dewasa.\r\n\r\nApakah fungsi vitamin A bagi kesehatan?\r\nBeberapa penelitian menunjukkan bahwa vitamin A yang dikonsumsi oral dapat bermanfaat bagi kesehatan.\r\nMenjaga Kesehatan Mata\r\nVitamin A merupakan bagian penting dari molekul rhodopsin yang diaktifkan ketika cahaya bersinar pada retina. Sedangkan beta karoten pada vitamin A berperan dalam mencegah degenerasi makula yang merupakan penyebab utama kebutaan karena usia.\r\n\r\nMeningkatkan Daya Tahan Tubuh\r\nBeberapa fungsi sistem kekebalan tubuh bergantung pada asupan vitamin A. Beberapa gen yang terlibat dalam respon sistem kekebalan diatur oleh vitamin A, sehingga vitamin A memiliki peran penting untuk melawan kondisi serius seperti kanker, penyakit autoimun atau juga penyakit seperti flu.\r\nBeta karoten juga merupakan antioksidan kuat yang dapat membantu meningkatkan sistem kekebalan tubuh dan mencegah berbagai penyakit kronis. Pada suatu penelitian menemukan bahwa kekurangan vitamin A pada anak dapat meningkatkan resiko infeksi seperti diare dan campak.\r\n\r\nMengatasi peradangan\r\nVitamin A memiliki sifat antioksidan yang dapat menetralisir radikal bebas dalam tubuh yang menjadi pemicu kerusakan jaringan dan sel. Konsumsi vitamin A juga dapat membantu menurunkan resiko terjadinya alergi pada makanan tertentu.\r\n\r\nMenunjang kesehatan kulit dan pertumbuhan sel\r\nVitamin A diperlukan untuk penyembuhan luka dan pertumbuhan kembali kulit. Kekurangan vitamin A dapat menyebabkan kulit menjadi tidak sehat. Pada penelitian menunjukkan bahwa vitamin A dapat mengatasi jerawat dan meningkatkan kesehatan kulit secara keseluruhan. Vitamin A dapat mengatasi gari dan kerutan pada kulit dan membantu memproduksi kolagen lebih banyak. Vitamin A juga diketahui dapat membantu menjaga kesehatan rambut.\r\n\r\nMembantu mencegah kanker\r\nAsupan vitamin A dapat membantu mengobati beberapa bentuk kanker karena mampu mengendalikan sel-sel ganas dalam tubuh.\r\n\r\nSumber Vitamin A pada Makanan\r\nTerdapat beberapa makanan yang mengandung tinggi vitamin A, seperti:\r\n\r\nHati sapi\r\nWortel\r\nUbi\r\nKubis\r\nBayam\r\nBrokoli\r\nTelur\r\nIkan tuna\r\nMangga\r\nLabu', 'https://vivahealth.co.id/article/detail/12319/manfaat-vitamin-a-bagi-tubuh'),
(5, 'Penyakit, Tubuh, Kesehatan', 'Banyak Kondisi Buruk Menanti Anda Karena Efek Begadang', 'Sejauh ini belum ada informasi tentang efek begadang yang baik bagi kesehatan. Namun sebaliknya, kondisi kurang tidur, sebagai salah satu efek buruk dari begadang, dapat membuat kondisi fisik dan mental menjadi lebih buruk. Hal ini berkaitan dengan manfaat tidur untuk tubuh manusia.\r\n\r\nJam tidur yang dibutuhkan setiap orang berbeda tergantung usianya, orang dewasa dikatakan telah mendapat tidur yang cukup jika jam tidurnya selama 7 ??? 9 jam per hari, sedangkan anak-anak perlu tidur selama 10 ??? 13 jam setiap hari. Jika sulit menjalani tidur malam selama itu, Anda bisa mencoba tidur bifasik.\r\n\r\nPada saat manusia tidur, tubuh memperbaiki kondisi fisik dan mental. Khususnya pada usia remaja, tidur adalah saat di mana tubuh melepas hormon pertumbuhan. Hormon inilah yang akan membangun massa otot serta memperbaiki jaringan tubuh yang rusak.\r\n\r\nEfek Begadang yang Buruk Bagi Kesehatan\r\nSelain mengantuk berlebihan dan sering menguap, kurang tidur akibat begadang akan berpengaruh kepada kondisi emosi, kemampuan kognitif, dan fungsi otak. Efek begadang bagi kesehatan juga termasuk meningkatkan risiko penyakit, seperti diabetes, obesitas, tekanan darah tinggi, kanker, dan penyakit jantung.\r\n\r\nSelain hal-hal yang sudah disebutkan di atas, ternyata masih banyak risiko-risiko yang menyertai kebiasaan buruk seseorang untuk begadang. Mari kita telaah satu-persatu efek begadang berikut ini:\r\n\r\nMenambah berat badan\r\nPenelitian menunjukkan, orang yang kurang tidur cenderung lebih banyak makan camilan berkalori tinggi di malam hari. Selain itu, mereka juga cenderung mengonsumsi makanan berkarbohidrat tinggi dengan porsi lebih besar. Studi lain membuktikan bahwa orang yang tidur kurang dari tujuh jam sehari cenderung mengalami kenaikan berat badan ditambah peningkatan risiko obesitas dibandingkan orang yang jam tidurnya tercukupi.\r\nKurang tidur ada kaitannya dengan peningkatan nafsu makan dan bertambahnya rasa lapar. Bagi Anda yang berencana menurunkan berat badan, tentu saja begadang bukan cara yang baik untuk mewujudkannya.\r\nKulit tampak lebih tua\r\nBerkebalikan dengan hormon pertumbuhan yang dilepas dalam jumlah lebih sedikit ketika begadang, kurang tidur membuat hormon kortisol (hormon stres) dilepaskan dalam jumlah yang lebih banyak. Hormon ini bersifat memecah kolagen pada kulit, padahal kolagen adalah protein yang membuat kulit lebih kencang dan elastis.\r\nKurang tidur akibat begadang juga dapat menyebabkan mata bengkak dan kulit menjadi pucat dan kusam. Kebiasaan begadang secara berkepanjangan akan menimbulkan efek kurang tidur kronis. Akibatnya, timbul garis-garis penuaan halus di wajah dan menjadikan kulit terlihat kusam.\r\nPernah mendengar istilah mata panda? Mata panda adalah lingkaran gelap di sekitar mata yang muncul akibat pelebaran pembuluh darah di balik kulit mata yang tipis. Kondisi kurang tidur adalah penyebab utama terjadinya mata panda.\r\nPelupa\r\nKetika tidur, otak akan mengalami proses regenerasi sel yang berguna untuk memperkuat ingatan. Proses ini juga akan memindahkan ingatan dan memori ke bagian otak yang berfungsi sebagai tempat penyimpanan memori jangka panjang.\r\nBergadang akan menghambat semua proses ini dan meningkatkan rasa mengantuk, sehingga Anda menjadi pelupa dan sulit berkonsentrasi. Agar tidak mudah lupa, sekaligus untuk meningkatkan kemampuan mengingat, hentikan kebiasaan begadang. Terutama bagi Anda yang disibukkan dengan aktivitas bersekolah dan bekerja.\r\nMenurunkan kemampuan berpikir\r\nEfek begadang dapat mengurangi daya nalar, kemampuan memecahkan masalah, dan konsentrasi. Kemampuan memperhatikan sesuatu serta tingkat kewaspadaan juga akan mengalami penurunan. Kesulitan fokus dapat berakibat pada kecelakaan saat berkendara atau bekerja.\r\nMenurunkan libido\r\nLibido yang menurun adalah salah satu efek begadang. Ketika kurang tidur, tubuh menjadi kelelahan, mengantuk, energi berkurang, meningkatkan ketegangan, dan pada akhirnya menjadi kurang berminat kepada seks.\r\nDepresi\r\nBegadang berarti memotong jam tidur Anda di malam hari. Kebanyakan orang yang didiagnosis mengalami depresi dan kecemasan adalah mereka yang tidur kurang dari enam jam di malam hari. Tidak hanya kebiasaan begadang, gangguan tidur pun dapat mengarah kepada insomnia yang sangat berkaitan dengan kondisi depresi.\r\nRisiko kanker\r\nTernyata efek begadang juga berkaitan dengan peningkatan risiko terkena kanker. Penelitian menunjukkan bahwa mereka yang memiliki kebiasaan kurang tidur, atau sering bekerja shift di malam hari, memiliki risiko terkena kanker yang tinggi. Belum diketahui pasti apa efek begadang terhadap kemunculan kanker, namun diduga berkaitan dengan stres dan kerusakan sel tubuh.\r\nMeningkatkan risiko kematian\r\nSebuah studi menyatakan bahwa tidur yang hanya berdurasi lima jam, dapat meningkatkan risiko kematian sebesar 12 persen. Peningkatan risiko ini berlaku untuk semua penyebab kematian, terutama kematian yang disebabkan penyakit jantung dan pembuluh darah.\r\nSetelah mengetahui bahwa efek begadang tidak ada yang baik bagi tubuh, kini saatnya Anda berpikir lagi sebelum memutuskan untuk begadang. Usahakan untuk memenuhi kebutuhan tidur minimal tujuh jam setiap harinya. Jika terdapat gangguan tidur yang membuat kualitas atau jam tidur berkurang, Anda dapat berkonsultasi ke dokter untuk mendapatkan pengobatan lebih lanjut.', 'https://www.alodokter.com/banyak-kondisi-buruk-menanti-anda-karena-efek-begadang'),
(6, 'Penyakit, Kesehatan', '5 Penyakit Umum yang Sering Dialami Balita', 'Selama usia bayi hingga prasekolah, umumnya anak akan mengalami 6-8 kali sakit per tahun. Berikut adalaha 5 penyakit umum yang sering dialami balita dan cara menanganinya.\r\n\r\nKondisi kesehatan balita bisa terjadi karena antibodi yang si Kecil dapatkan dari Ibu selama kehamilan hanya bertahan selama 6-12 bulan pertama. Akibatnya, sistem imunnya yang belum matang menyebabkan ia rentan sakit. \r\n\r\nSistem imun yang matang baru tercapai saat usia anak 5 tahun. Selain itu, lingkungan juga memperbesar kemungkinan anak sakit, seperti asap rokok dan paparan kuman di tempat penitipan anak atau sekolah. Terdapat 5 kondisi sakit yang sering dialami anak, yaitu:\r\n\r\nInfeksi Saluran Napas Atas (ISPA)\r\n\r\nKondisi ini biasanya disertai dengan gejala berupa pilek, batuk dan demam. Demam pada ISPA bisa mencapai 39-40oC dan sering membuat ibu merasa khawatir. Umumnya ISPA disebabkan oleh virus, sehingga si kecil akan sembuh dengan sendirinya selama 7-10 hari. Pengobatan ISPA biasanya berupa obat-obatan untuk meringankan gejala dan tidak memerlukan antibiotik.\r\n\r\nYang perlu ibu lakukan bila si kecil mengalami ISPA antara lain mengompres jika demam, memberikan obat penurun panas, obat batuk-pilek, memberikan minuman lebih banyak dari biasa, dan memperhatikan perjalanan gejala si kecil. Jika gejala semakin berat, seperti sesak napas berat, napas cepat, batuk disertai darah, dan demam yang disertai kejang, sebaiknya segera bawa si kecil ke dokter. \r\n\r\nIbu juga perlu mengajarkan si Kecil untuk menutup hidung saat bersin dan menutup mulut saat batuk agar anggota keluarga lain tidak tertular.\r\n\r\nBintik Merah pada Kulit\r\n\r\nUmumnya bintik merah yang muncul di kulit anak disebabkan oleh penyakit yang cukup beragam namun tidak berbahaya. Bintik merah dapat menjadi tanda penyakit yang disebabkan virus, bakteri, parasit, reaksi alergi, atau gangguan pembuluh darah. \r\n\r\nNamun terdapat 3 kondisi yang paling sering terjadi dengan tanda bintik merah, yaitu infeksi virus yang tidak spesifik, campak, dan cacar. Infeksi virus yang tidak spesifik (viral exanthema) seringkali menimbulkan gejala bintik merah pada tubuh, lengan, dan tungkai tanpa bentuk yang spesifik. Tidak ada gejala khas pada infeksi ini, namun anak dapat mengalami demam, menggigil, batuk, pilek, gelisah, dan sulit makan.\r\n\r\nLain halnya pada campak, bintik merah umumnya timbul pertama kali di bagian wajah atau belakang telinga dan menyebar ke bawah. Campak seringkali disertai pilek, nyeri tenggorok, dan mata merah. Bintik merah pada cacar berbeda dengan bintik pada campak. Pada cacar, bintik merah akan menyerupai jerawat yang berisi cairan dan terasa gatal. \r\n\r\nBintik merah karena penyakit-peyakit tersebut umumnya tidak berbahaya dan akan menghilang dalam 7 hari. Ibu bisa memberikan obat penurun panas jika si kecil demam dan obat oles pereda gatal jika anak terus menerus menggaruk kulit. Sebaiknya ibu tetap membawa anak ke dokter untuk diperiksa lebih lanjut dan menyingkirkan kemungkinan penyakit lain serta mendapatkan pengobatan yang sesuai.', 'https://www.nutriclub.co.id/kategori/balita/kesehatan/5-penyakit-umum-yang-sering-dialami-balita/'),
(7, 'Obat', '10 Jenis Tanaman Obat-obatan yang Wajib Ada di Rumah Anda', 'Sebelum menggunakan obat dokter, nyatanya sudah banyak orang Indonesia yang lebih dulu mencoba melakukan pengobatan menggunakan obat herbal. Tanaman obat-obatan tersebut memiliki ribuan jenis spesies.\r\n\r\nDari total sekitar 40 ribu jenis obat tradisional yang telah dikenal di dunia, 30 ribunya diyakini berada di Indonesia. Meski demikian, ternyata hanya ada sekitar 9 ribu spesies obat herbal yang diduga memiliki manfaat bagi kesehatan.\r\n\r\nLantas, apa saja tanaman obat-obatan yang bisa ditanam sendiri di rumah dan memiliki khasiat yang baik bagi kesehatan?\r\n\r\nApa itu tanaman obat?\r\nSesuai dengan namanya, tanaman obat adalah jenis tanaman yang sebagian atau seluruh isi tanaman tersebut, seperti daun, batang, buah, umbi (rimpang), hingga akar digunakan sebagai obat, bahan, atau ramuan obat-obatan.\r\n\r\nBadan Kesehatan Dunia (WHO) sendiri mendefinisikan obat herbal atau medicinal plants sebagai tanaman yang digunakan dengan tujuan pengobatan dan merupakan bahan asli dalam pembuatan obat herbal.\r\n\r\nKecenderungan masyarakat untuk mengonsumsi obat tradisional tentu tak terlepas dari gaya hidup back to nature. Akibatnya, masyarakat mulai beralih menggunakan bahan-bahan alami untuk meminimalisir efek samping obat-obatan medis dari dokter.\r\n\r\nApa saja manfaat tanaman obat bagi kesehatan?\r\nManfaat tanaman obat bisa berasal dari akar, batang, hingga daunnya. Tak ayal apabila dari satu jenis obat herbal saja sudah dapat memiliki khasiat yang berbeda-beda dalam mengobati berbagai macam penyakit.\r\n\r\nMenurut Kementerian Kesehatan Republik Indonesia, ada beberapa bagian dari tanaman obat yang dapat digunakan untuk keperluan yang berbeda-beda, di antaranya:\r\n\r\nTanaman atau bagian tanaman yang digunakan sebagai bahan obat herbal atau jamu.\r\nTanaman atau bagian tanaman yang digunakan sebagai bahan utama bahan baku obat.\r\nTanaman atau bagian tanaman yang diekstraksi dan ekstrak tanaman tersebut digunakan sebagai obat.\r\nObat herbal memiliki berbagai efek pada sistem metabolisme tubuh manusia. Mulai dari memberikan efek analgesik, antioksidan, hingga antiradang.\r\n\r\nTak heran apabila banyak masyarakat Indonesia yang menggunakan obat tradisional sebagai cara mengobati beberapa masalah kesehatan, seperti demam, batuk, pilek, flu, sakit kepala, sakit perut, gangguan pencernaan, masalah kulit, hingga insomnia.\r\n\r\nTanaman obat-obatan juga dapat dikembangkan dan diolah untuk berbagai macam kebutuhan, seperti industri makanan atau minuman, sebagai bahan pembuatan kosmetik, serta digunakan dalam industri spa tradisional.\r\n\r\nJenis tanaman obat yang populer di Indonesia dan bisa ditanam sendiri di rumah\r\nBerdasarkan Undang-undang Nomor 13 tahun 2010 mengenai hortikultura, tanaman obat termasuk dalam kelompok tanaman hortikultura, yaitu tanaman yang menghasilkan buah, sayuran, bahan obat nabati, florikultura, dan bahan estetika.\r\n\r\nKementerian Pertanian Republik Indonesia menyatakan bahwa ada 15 jenis tanaman obat-obatan yang dibudidayakan di Indonesia. Kelima belas jenis tanaman obat tersebut adalah\r\n\r\nJahe\r\nLengkuas (laos)\r\nKencur\r\nKunyit\r\nLempuyang\r\nTemulawak\r\nTemuireng\r\nTemukunci\r\nDlingo atau dringo\r\nKapulaga\r\nMengkudu\r\nMahkota dewa\r\nKejibeling\r\nSambiloto\r\nLidah buaya', 'https://www.sehatq.com/artikel/jenis-tanaman-obat-obatan-yang-wajib-ada-di-rumah-anda'),
(8, 'Kesehatan, Manfaat, Tubuh', '8 Manfaat Lidah Buaya bagi Kesehatan, Jadi Bahan untuk Cuci Tangan', 'Merdeka.com - Pemanfaatan lidah buaya tidak hanya sebatas menjadi tanaman hias di rumah. Lidah buaya juga sering dimanfaatkan sebagai obat dari bahan alami ataupun untuk kesehatan. Khasiatnya banyak digunakan sebagai perawatan tubuh bagi manusia ataupun untuk menyembuhkan luka.\r\n\r\nBanyaknya manfaat lidah buaya karena adanya kandungan seperti protein, lemak, karbohidrat, kalsium, dan masih banyak lagi. Berikut 8 manfaat lidah buaya yang telah merdeka.com rangkum dari berbagai sumber, Selasa (24/03/2020).\r\n\r\nMencegah Penuaan Dini\r\nManfaat lidah buaya pertama yaitu dapat mencegah penuaan dini. Lidah buaya dapat bermanfaat untuk menjaga kesehatan kulit. Kamu bisa menggunakan lidah buaya untuk melawan munculnya kerutan dan tanda penuaan pada kulit wajah.\r\n\r\nUntuk mendapatkan manfaat lidah buata, oleskan gel dari lidah buaya ke permukaan kulit secara rutin selama 90 hari. Bila dilakukan secara teratur, kamu bisa mendapatkan hasil berupa kulit yang halus dan kenyal.\r\n\r\nSelain itu, lidah buaya juga dapat berperan sebagai toner. Lidah buaya dapat meningkatkan tekstur kulit dan mengurangi keriput. Lidah buaya juga dapat menenangkan kulit yang pada akhirnya dapat membuat kulit menjadi terasa lebih lembut dan lentur.\r\n\r\nKeriput pada mata pun bisa diatasi dengan lidah buaya. Oleskan gel lidah buaya di daerah bawah mata ketika akan tidur di malam hari. Kandungan vitamin A, C, dan E pada gel lidah buaya tersebut dapat mengobati dan membantu memelihara kulit serta meningkatkan tekstur pada kulit.\r\n\r\nGunakan gel lidah buaya ini secara teratur untuk mendapatkan manfaat yang maksimal. Namun, harus diperhatikan juga agar gel tersebut tidak mengenai mata kita karena efeknya akan membahayakan mata.\r\n\r\nSebagai Obat Pencahar\r\nManfaat lidah buaya berikutnya adalah menghilangkan sembelit. Untuk mendapatkan manfaat lidah buata, kamu bisa mengonsumsi zat lilin berwarna kuning yang menempel pada bagian permukaan bawah daun lidah buaya. Karena pada bagian tersebut mengandung senyawa aloin atau barbaloin yang mana merupakan zat pencahar yang ampuh.\r\n\r\nMerawat Rambut dan Kulit Kepala\r\nManfaat lidah buaya selanjutnya dapat digunakan sebagai perawatan rambut dan kulit kepala. Lidah buaya mengandung mineral, vitamin, asam amino dan phytonutrient yang mana kandungan-kandungan tersebut sangat baik bagi kesehatan kulit dan rambut.\r\n\r\nGel lidah buaya yang mengandung mineral dan vitamin itulah yang mampu menghidrasi kulit kepala dan mengurangi peradangan ketombe. Lidah buaya juga dapat digunakan sebagai conditioner, yang nantinya dapat memberikan manfaat halus pada rambut.\r\n\r\nMencegah Penyakit Gigi\r\nManfaat lidah buaya dapat mencegah penyakit gigi dan menjaga kesehatan gigi. Penyakit gigi banyak disebabkan oleh plak gigi atau biofilm bakteri yang ada di sekitar gusi.\r\n\r\nPenelitian menunjukkan bahwa membilas mulut menggunakan lidah buaya yang diolah menjadi jus, 100 persen memiliki efek yang sama dengan efek yang diberikan oleh chiorthexidine, atau obat kumur standar emas. Hal ini karena kandungan antibakteri yang dimiliki lidah buaya dapat menghancurkan kuman dan melindungi gigi.\r\n\r\nMenyembuhkan Luka Bakar\r\nManfaat lidah buaya lainnya dapat menyembuhkan luka bakar. Getah dari lidah buaya dapat dengan cepat membantu kulit yang mengalami iritasi. Hal ini karena lidah buaya memiliki sifat antiinflamasi dan juga khasiatnya sebagai penyembuh luka. Manfaat tersebut dapat kita peroleh dengan cara mengoleskan lidah buaya dalam bentuk gel.\r\n\r\nPenelitian juga menunjukkan bila kita mengoleskan gel lidah buaya secara rutin di daerah luka bakar, dapat memberikan efek mengurangi waktu penyembuhan hingga 9 hari dari pada menggunakan salep bakar pada umumnya.\r\n\r\nAntioksidan Tinggi\r\nManfaat lidah buaya didapat karena memiliki kandungan antioksidan yang tinggi. Selain kandungan vitamin dan mineral, lidah buaya juga memiliki kandungan senyawa yang berguna sebagai obat.\r\n\r\nSalah satu senyawa yang terdapat pada lidah buaya adalah polifenol. Senyawa ini memiliki sifat antioksidan yang kuat sehingga mampu menghambat perkembangan bakteri yang berbahaya penyebab penyakit.\r\n\r\nObat Diabetes\r\nManfaat lidah buaya lainnya dapat dijadikan sebagai obat bagi penderita diabetes, terutama diabetes tipe 2. Mengonsumsi jus lidah buaya secara teratur, kamu bisa mendapatkan vitamin yang terkandung di dalam lidah buaya sehingga dapat membantu meningkatkan sensitivitas insulin dalam tubuh.\r\n\r\nSelain itu, lidah buaya juga bermanfaat untuk mengatur kadar gula darah kita. Namun, perlu diingat juga agar tidak mengonsumsi lidah buaya terlalu banyak. Beberapa penelitian telah menemukan jika konsumsi lidah buaya yang terlalu banyak dapat merusak hati.\r\n\r\nSebagai Bahan Hand Sanitizer\r\nManfaat lidah buaya yang terakhir sebagai bahan untuk membuat hand sanitizer.Cara membuatnya cukup mudah. Kamu hanya perlu mencampurkan setengah cangkir gel lidah buaya dengan setengah cangkir alkohol dan beberapa tetes minyak esensial. Campuran tersebut nantinya dapat membersihkan tangan, melembutkan kulit, dan juga mengharumkan kulit.', 'https://www.merdeka.com/jabar/8-manfaat-lidah-buaya-tanaman-berduri-untuk-cuci-tangan-kln.html'),
(9, 'Kesehatan, Penyakit, Virus', 'Pentingnya Menggunakan Hand Sanitizer untuk Menangkal Virus!', 'Menjaga kebersihan adalah hal wajib yang harus selalu dilakukan oleh siapapun dan kapanpun. Salah satunya yang terpenting adalah menjaga kebersihan tangan, pasalnya tangan adalah bagian tubuh yang sangat rentan dan dapat dengan mudah menjadi tempat bersarangnya virus, dan bakteri. \r\n\r\nTangan sebagai salah satu organ tubuh yang sering kali berinteraksi, menyentuh dan dapat menjadi media penyebaran kuman, virus serta bakteri yang berbahaya.  Misalnya aktivitas saat membuka pintu, memegang tangga, memencet tombol lift, keyboard komputer dan berjabat tangan. Lalu tanpa disadari, setelahnya kita makan, mengusap mata, menyentuh hidung atau mulut kita sendiri, pada saat itulah kuman atau virus dapat masuk ke tubuh kita.\r\n\r\nDampak yang ditimbulkan akibat kebiasaan tidak menjaga kebersihan tangan bisa berskala ringan hingga berat akibat terserang virus dan bakteri. Dan penyebarannya sendiri dapat terjadi lewat tangan, seperti flu, diare, hepatitis, H1N1 hingga penyakit COVID-19 akibat virus Corona.\r\n\r\nMaka cara terbaik untuk mencegah berbagai infeksi dan penyakit, yaitu menjaga kebersihan tangan dengan rutin mencuci tangan menggunakan air dan sabun selama kurang lebih 20 detik di bawah air yang mengalir.\r\n\r\nNamun, sayangnya ada saat dimana kita sedang bepergian atau beraktivitas di luar rumah sehingga mengalami kesulitan mencari toilet dan tempat mencuci tangan. Karena alasan inilah, penggunaan hand sanitizer bisa menjadi salah satu solusi untuk membersihkan tangan dari kuman serta virus yang menempel.\r\n\r\nHand sanitizer adalah cairan pembersih tangan yang digunakan sebagai alternatif untuk mencuci tangan selain menggunakan sabun dan air. Hand sanitizer berbasis alkohol dengan minimal 60% dipercaya lebih efektif untuk membunuh kuman dan mikroorganisme berbahaya di tangan, termasuk pencegahan virus Corona.\r\n\r\nPerlu kamu tahu, jika hand sanitizer sendiri memiliki banyak manfaat seperti :\r\n\r\nA. Menjaga Kebersihan dan Mencegah Bakteri : Produk ini dirancang untuk membunuh kuman dan mikroorganisme berbahaya sehingga aman jika diaplikasikan pada kulit tangan apabila dilakukan dengan benar.\r\n\r\nB. Dapat Digunakan untuk Benda Lain : Selain digunakan pada kulit tangan, hand sanitizer juga bisa diaplikasikan untuk membersihkan benda mati di sekitar kita. Misalnya saja untuk membersihkan layar hp dan laptop, membersihkan pegangan pintu, serta alat makan saat tidak tersedianya air. \r\n\r\nC. Fleksibel Saat Dibawa Bepergian:  Hand sanitizer biasanya dikemas dalam bentuk gel atau spray dalam ukuran botol yang mini, sehingga dapat dengan mudah dibawa di dalam tas kapan dan dimana saja.\r\n\r\nSayangnya jika digunakan terlalu sering, banyak yang mengeluhkan jika hand sanitizer dapat membuat kulit tangan menjadi kering karena kandungan alkoholnya di dalamnya.\r\n\r\nTapi, kamu tidak perlu khawatir nih, karena Sophie baru saja meluncurkan produk Hand Moisturizer dengan Ekstrak Aloe Vera dan kandungan Alkohol 63%.\r\n\r\nKenapa disebut Hand Moisturizer? Dinamakan demikian karena, produk ini mampu membunuh kuman sekaligus melembabkan dan melembutkan kulit tangan. Tangan pun jadi terasa lebih halus, bersih, dan tentunya membuat kamu merasa nyaman saat beraktivitas.\r\n\r\nMengaplikasikan hand moisturizer ini juga cukup mudah, yaitu dengan cara :\r\n\r\n1. Semprotkan 1 kali di telapak tangan\r\n\r\n2. Gosoklah tangan bersama-sama hingga semua permukaan tangan dan jari terkena cairannya.\r\n\r\n3. Tunggulah sampai cairan meresap dan kering.\r\n\r\n4. Dapat juga digunakan untuk membersihkan permukaan benda disekitarmu menggunakan tisu', 'https://www.sophieparis.com/blog/manfaat-hand-sanitizer'),
(10, 'Penyakit, Virus', '5 Cara Efektif agar Tidak Tertular Virus Corona', 'Coronavirus telah menyerang ribuan orang di berbagai negara dan menelan ratusan korban jiwa. Agar tidak terkena penyakit infeksi yang sedang mewabah ini, ada beberapa cara yang bisa dilakukan untuk mencegah penularan virus Corona.\r\n\r\nPenyebab dari wabah ini adalah coronavirus jenis baru yang disebut dengan novel coronavirus 2019 (2019-nCoV). Penyakit ini termasuk dalam golongan virus yang sama dengan virus penyebab severe acute respiratory syndrome (SARS) dan Middle-East respiratory syndrome (MERS).\r\n\r\nInfeksi virus Corona yang disebut COVID-19 ini pertama kali terjadi di kota Wuhan, China dan sekarang telah ditemukan di berbagai negara, termasuk Indonesia.\r\n\r\nLangkah Mencegah Penularan Virus Corona\r\nVirus ini diperkirakan berasal dari hewan, seperti kelelawar dan unta, dan bisa menular dari hewan ke manusia, serta dari manusia ke manusia. Penularan antarmanusia kemungkinan besar melalui percikan dahak saat batuk atau bersin.\r\n\r\nKetika terinfeksi virus Corona, seseorang akan mengalami gejala mirip flu, seperti demam, batuk, dan pilek. Namun, beberapa hari setelahnya, orang yang terserang infeksi virus corona bisa mengalami sesak napas akibat infeksi pada paru-paru (pneumonia).\r\n\r\nHingga saat ini, belum ada pengobatan yang dapat menyembuhkan infeksi virus Corona. Oleh sebab itu, Organisasi Kesehatan Dunia (WHO) mengimbau agar masyarakat tidak memandang sepele penyakit ini dan senantiasa melakukan tindakan pencegahan. Salah satunya adalah dengan menerapkan social distancing.\r\n\r\nBeberapa langkah yang bisa dilakukan untuk mencegah infeksi virus Corona, di antaranya:\r\n\r\n1. Mencuci tangan dengan benar\r\nMencuci tangan dengan benar adalah cara paling sederhana namun efektif untuk mencegah penyebaran virus 2019-nCoV. Cucilah tangan dengan air mengalir dan sabun, setidaknya selama 20 detik. Pastikan seluruh bagian tangan tercuci hingga bersih, termasuk punggung tangan, pergelangan tangan, sela-sela jari, dan kuku. Setelah itu, keringkan tangan menggunakan tisu, handuk bersih, atau mesin pengering tangan.\r\n\r\nJika Anda adalah pekerja komuter yang berada di dalam transportasi umum, akan sulit untuk menemukan air dan sabun. Anda bisa membersihkan tangan dengan hand sanitizer. Gunakan produk hand sanitizer dengan kandungan alkohol minimal 60% agar lebih efektif membasmi kuman.\r\n\r\nCucilah tangan secara teratur, terutama sebelum dan setelah makan, setelah menggunakan toilet, setelah menyentuh hewan, membuang sampah, serta setelah batuk atau bersin. Cuci tangan juga penting dilakukan sebelum menyusui bayi atau memerah ASI.\r\n\r\n2. Menggunakan masker\r\nBanyak yang menggunakan masker kain untuk mencegah infeksi virus Corona, padahal masker tersebut belum tentu efektif. Secara umum, ada dua tipe masker yang bisa Anda digunakan untuk mencegah penularan virus Corona, yaitu masker bedah dan masker N95.\r\n\r\nMasker bedah atau surgical mask merupakan masker sekali pakai yang umum digunakan. Masker ini mudah ditemukan, harganya terjangkau, dan nyaman dipakai, sehingga banyak orang yang menggunakan masker ini saat beraktivitas sehari-hari.\r\n\r\nCara pakai masker bedah yang benar adalah sisi berwarna pada masker harus menghadap ke luar, sementara sisi dalamnya yang berwarna putih menghadap wajah dan menutupi dagu, hidung, dan mulut. Sisi berwarna putih terbuat dari material yang dapat menyerap kotoran dan menyaring kuman dari udara.\r\n\r\nMeski tidak sepenuhnya efektif mencegah paparan kuman, namun penggunaan masker ini tetap bisa menurunkan risiko penyebaran penyakit infeksi, termasuk infeksi virus Corona. Penggunaan masker lebih disarankan bagi orang yang sedang sakit untuk mencegah penyebaran virus dan kuman, ketimbang pada orang yang sehat.\r\n\r\nSedangkan masker N95 adalah jenis masker yang digunakan sebagai salah satu alat pelindung diri atau APD untuk petugas medis yang merawat pasien COVID-19.\r\n\r\nKetika melepaskan masker dari wajah, baik masker bedah maupun masker N95, hindari menyentuh bagian depan masker, sebab bagian tersebut penuh dengan kuman yang menempel. Setelah melepas masker, cucilah tangan dengan sabun atau hand sanitizer, agar tangan bersih dari kuman yang menempel.\r\n\r\n3. Menjaga daya tahan tubuh\r\nDaya tahan tubuh yang kuat dapat mencegah munculnya berbagai macam penyakit. Untuk menjaga dan meningkatkan daya tahan tubuh, Anda disarankan untuk mengonsumsi makanan sehat, seperti sayuran dan buah-buahan, dan makanan berprotein, seperti telur, ikan, dan daging tanpa lemak. Bila perlu, Anda juga menambah konsumsi suplemen sesuai anjuran dokter.\r\n\r\nSelain itu, rutin berolahraga, tidur yang cukup, tidak merokok, dan tidak mengonsumsi minuman beralkohol juga bisa meningkatkan daya tahan tubuh agar terhindar dari penularan virus Corona.\r\n\r\nBeberapa informasi menyebutkan bahwa berjemur di bawah sinar matahari juga dapat mencegah infeksi virus Corona. Sayangnya hal ini masih perlu diteliti lebih lanjut.\r\n\r\n4. Tidak pergi ke negara terjangkit\r\nTidak hanya Tiongkok, penyakit infeksi virus Corona kini juga sudah mewabah ke beberapa negara lain, seperti Jepang, Korea Selatan, Hongkong, Taiwan, India, Amerika Serikat, dan Eropa. Virus Corona juga sudah terkonfirmasi ditemukan di negara-negara tetangga Indonesia, seperti Singapura, Malaysia, Thailand, Vietnam, dan Filipina.\r\n\r\nAgar tidak tertular virus ini, Anda disarankan untuk tidak bepergian ke tempat-tempat yang sudah memiliki kasus infeksi virus Corona atau berpotensi menjadi lokasi penyebaran coronavirus, baik di luar maupun dalam negeri.\r\n\r\nAnda juga disarankan untuk melakukan physical distancing dengan cara menjaga jarak minimal 1 meter saat berinteraksi dengan orang lain dan hindari bepergian ke tempat yang ramai, kecuali untuk urusan penting seperti berbelanja kebutuhan sehari-hari. Selama di rumah, Anda juga perlu rutin membersihkan rumah guna mengurangi risiko tertular virus Corona.\r\n\r\n5. Menghindari kontak dengan hewan yang berpotensi menularkan coronavirus\r\nCoronavirus jenis baru diduga kuat berasal dari kelelawar dan disebarkan oleh beberapa hewan mamalia dan reptil. Oleh karena itu, hindarilah kontak dengan hewan-hewan tersebut\r\n\r\nJika ingin mengonsumsi daging atau ikan, pastikan daging atau ikan tersebut sudah dicuci dan dimasak hingga benar-benar matang. Hindari mengonsumsi daging atau ikan yang sudah tidak segar atau busuk.\r\n\r\nBila Anda mengalami gejala flu, seperti batuk, demam, dan pilek, yang disertai lemas dan sesak napas, apalagi bila dalam 2 minggu terakhir Anda bepergian ke Tiongkok atau negara-negara lain yang sudah memiliki kasus infeksi virus Corona, segeralah tanyakan ke dokter agar dapat dipastikan penyebabnya dan diberikan penanganan yang tepat.', 'https://www.alodokter.com/ketahui-cara-untuk-mencegah-penularan-virus-corona');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_rs` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis_dokter` varchar(25) NOT NULL,
  `bio_dokter` varchar(100) NOT NULL,
  `no_dokter` varchar(15) NOT NULL,
  `email_dokter` varchar(30) NOT NULL,
  `harga_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_rs`, `nama_dokter`, `spesialis_dokter`, `bio_dokter`, `no_dokter`, `email_dokter`, `harga_dokter`) VALUES
(1, 1, 'drg Anjay', 'Gigi dan Gusi', 'gigi lu bau', '6281285559743', 'Nldita19@gmail.com', 15000),
(2, 4, 'drg Anjay juga', 'Gigi bolonk', 'mama bolonk bolonk', '6281285559743', 'Nldita19@gmail.com', 10000),
(3, 2, 'Prof. Dr. dr. Alvin, S.S, G.G.', 'Spesial', 'bisa semua penyakit', '6282240131000', 'landeralvin@gmail.com', 15000),
(5, 1, 'dr. I Made Wirgunatha', 'Dokter Umum', 'Aku dokter umum yang berasal dari Bali', '6281285559743', 'hanarifdahs@gmail.com', 15000),
(6, 2, 'dr. Alvin Lander', 'Dokter Poli Anak', 'Saya suka anak-anak', '628224013100', 'landeralvin@gmail.com', 15000),
(7, 3, 'drg. Ni Luh Made Dita Anjani', 'Dokter Gigi', 'Halo, saya dokter gigi berasal dari Bali', '6281285559743', 'Nldita19@gmail.com', 15000),
(8, 4, 'dr. Ferzi Samal Yerzi', 'Dokter Bedah Orthopedi', 'Saya suka jadi dokter bedah', '6281313074384', 'ferzisamaly@gmail.com', 15000),
(9, 5, 'dr. Fauzi Cahya', 'Dokter Umum', 'Aku dokter umum yang berasal dari tanah Sunda', '6281313067792', 'mugiawarafauzi@gmail.com', 15000),
(10, 1, 'dr. Zakiya Ainur Rohman', 'Dokter Penyakit Dalam', 'Aku dokter penyakit dalam, aku hafal semua organ tubuh', '6282234661815', 'zakigaming.zar@gmail.com', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `id_janji` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_user` int(15) NOT NULL,
  `tgl_janji` date NOT NULL,
  `waktu_janji` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `janji`
--

INSERT INTO `janji` (`id_janji`, `id_dokter`, `id_user`, `nama_user`, `no_user`, `tgl_janji`, `waktu_janji`) VALUES
(8, 7, 3, 'coding', 909090, '2020-04-30', '12:00'),
(9, 10, 8, 'Alvin Lander', 2147483647, '2020-05-04', '09:00');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poli` int(11) NOT NULL,
  `id_rs` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `tentang_poli` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id_poli`, `id_rs`, `nama_poli`, `tentang_poli`) VALUES
(1, 1, 'Poli Kebidanan', 'Dikhususkan untuk wanita'),
(2, 2, 'Poli Kebidanan', 'Dikhususkan untuk wanita'),
(3, 3, 'Poli Kebidanan', 'Dikhususkan untuk wanita'),
(4, 1, 'Poli Anak / Pediatrik', 'Khusus anak-anak ya!'),
(5, 3, 'Poli Anak / Pediatrik', 'Khusus anak-anak ya!'),
(6, 4, 'Poli Anak / Pediatrik', 'Khusus anak-anak ya!'),
(7, 2, 'Poli Jantung', 'Jantungku sehat tubuhku kuat'),
(8, 4, 'Poli Jantung', 'Jantungku sehat tubuhku kuat'),
(9, 3, 'Poli Jantung', 'Jantungku sehat tubuhku kuat'),
(10, 2, 'Poli Bedah Umum', 'Untuk yang umum-umum aja bedahnya'),
(11, 1, 'Poli Bedah Umum', 'Untuk yang umum-umum aja bedahnya'),
(12, 4, 'Poli Bedah Umum', 'Untuk yang umum-umum aja bedahnya'),
(13, 3, 'Poli Bedah Orthopedi', 'Untuk bedah bagian orthopedi aja'),
(14, 2, 'Poli Kulit dan Kelamin', 'Urusan kulit dan kelamin disini aja'),
(15, 4, 'Poli Kulit dan Kelamin', 'Urusan kulit dan kelamin disini aja'),
(16, 1, 'Poli Kulit dan Kelamin', 'Urusan kulit dan kelamin disini aja'),
(17, 3, 'Poli Penyakit Dalam', 'Ada yang bermasalah dengan organ dalammu? Konsultasi disini bisa kok'),
(18, 1, 'Poli Penyakit Dalam', 'Ada yang bermasalah dengan organ dalammu? Konsultasi disini bisa kok'),
(19, 4, 'Poli Penyakit Dalam', 'Ada yang bermasalah dengan organ dalammu? Konsultasi disini bisa kok'),
(20, 5, 'Poli Penyakit Dalam', 'Ada yang bermasalah dengan organ dalammu? Konsultasi disini bisa kok'),
(21, 5, 'Poli Anastesi', 'Urusan anestesi disini aja'),
(22, 5, 'Poli Anastesi', 'Urusan anestesi disini aja'),
(23, 5, 'Poli Anastesi', 'Urusan anestesi disini aja');

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(50) NOT NULL,
  `alamat_rs` varchar(255) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `telp_rs` varchar(25) NOT NULL,
  `fasilitas_rs` varchar(1000) NOT NULL,
  `tentang_rs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`id_rs`, `nama_rs`, `alamat_rs`, `kota`, `telp_rs`, `fasilitas_rs`, `tentang_rs`) VALUES
(1, 'Al Islam', 'No.644, Jl. Soekarno Hatta, Manjahlega, Kec. Rancasari, Kota Bandung, Jawa Barat', 'Bandung', '0227510583', 'Farmasi, Ambulans, Instalasi Rawat Jalan, Medical Check Up, Instalasi Radiologi, Instalasi Gawat Darurat, Instalasi Gizi, Instalasi Rawat Inap, Instalasi Fisioterapi, Instalasi Laboratorium, Home Care', 'Rumah Sakit Al Islam Bandung, pertama kali beroperasi pada 01 Agustus 1990 di bawah yayasan RSI KSWI Jawa Barat, Rumah Sakit Al Islam Bandung memiliki visi menjadi Rumah Sakit Islam yang unggul, terpercaya dalam pelayanan pendidikan, dengan Misi Melaksanakan pelayanan kesehatan dengan memberi kepuasan kepada konsumen sehingga melebihi apa yang diharapkannya.'),
(2, 'Pindad', 'Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat', 'Bandung', '0227322877', 'Farmasi, Unit Perawatan Intensif, Instalasi Gizi, Instalasi Rawat Inap, Instalasi Rawat Jalan, Instalasi Gawat Darurat', 'Rumah Sakit Pindad merupakan Rumah Sakit kelas C yang terletak di wilayah Bandung berdiri dibawah naungan PT Pindad. RS Pindad Bandung memiliki Visi Menjadi rumah sakit yang profesional, mandiri, bermutu, dan terpercaya. Dan memiliki Misi meningkatkan dan memanfaatkan sumber daya untuk memberikan pelayanan kesehatan yang efektif, efisien, bermutu dan terpercaya.'),
(3, 'Hasan Sadikin', 'No. 38, Jl. Pasteur, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat', 'Bandung', '0222551111', 'Farmasi, Unit Perawatan Intensif, Instalasi Gizi, Bank Darah, Ambulans, Instalasi Rawat Inap, Instalasi , Rawat Jalan, Instalasi Laboratorium, Instalasi Radiologi, Home Care, Neonate Intensive Care Unit, Paediatric Intensive Care Unit, Instalasi Gawat Darurat, High Care Unit', 'Rumah Sakit Hasan Sadikin Bandung didirikan pada tahun 1920. Rumah Sakit Hasan Sadikin Bandung memiliki Visi menjadi Rumah Sakit yang unggul dan transformatif untuk peningkatan kesehatan masyarakat, dengan Misi menyelenggarakan pelayanan yang prima, paripurna, dan bermutu, dan mewujudkan status kesehatan masyarakat yang lebih baik.'),
(4, 'Bhayangkara Sartika Asih', '369, Jl. Moh. Toha, Ciseureuh, Kec. Regol, Kota Bandung, Jawa Barat', 'Bandung', '0225229544', 'Farmasi, Unit Perawatan Intensif, Instalasi Gizi, Ambulans, Instalasi Bersalin, Instalasi Bedah, Instalasi Endoskopi, Instalasi Rawat Inap, Kantin, ATM, Masjid, Instalasi Laboratorium, Instalasi Radiologi, Unit Gawat Darurat', 'Rumah Sakit Bhayangkara Sartika Asih Bandung didirikan pada tanggal 15 Maret 1957, dibawah naungan Yayasan Kesejahteraan Pegawai Polisi Priangan. Rumah Sakit Bhayangkara Sartika Asih Bandung memiliki Visi menjadikan Rumah Sakit yang unggul dalam pelayanan kedokteran, kepolisian, dan kesehatan di Jawa Barat, dengan Misi memberikan pelayanan kedokteran kepolisian untuk wilayah POLDA JABAR, pelayanan kesehatan untuk pegawai negeri polri dan masyarakat.'),
(5, 'Immanuel', 'No.161, Jl. Kopo, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat', 'Bandung', '0225201656', 'Farmasi, Ambulans, Instalasi Rawat Inap, Instalasi Rawat Jalan, ATM, Area Parkir, Medical Check Up, Instalasi Laboratorium, Instalasi Radiologi, Home Care, Unit Gawat Darurat', 'Rumah Sakit Immanuel Bandung didirikan pada tahun 1910, dibawah naungan Yayasan Badan Rumah Sakit GKP. Rumah Sakit Immanuel Bandung memiliki Visi memberikan pelayanan prima yang bermutu sesuai dengan harapan konsumen.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`) VALUES
(3, 'codin', 'nldita19@gmail.com', '123456'),
(8, 'Alvin Lander', 'landeralvin@gmail.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `fk_dokter_rs` (`id_rs`);

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id_janji`),
  ADD KEY `fk_janji_dokter` (`id_dokter`),
  ADD KEY `fk_janji_user` (`id_user`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poli`),
  ADD KEY `fk_poli_rs` (`id_rs`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `janji`
--
ALTER TABLE `janji`
  MODIFY `id_janji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_dokter_rs` FOREIGN KEY (`id_rs`) REFERENCES `rumahsakit` (`id_rs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `janji`
--
ALTER TABLE `janji`
  ADD CONSTRAINT `fk_janji_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_janji_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD CONSTRAINT `fk_poli_rs` FOREIGN KEY (`id_rs`) REFERENCES `rumahsakit` (`id_rs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
