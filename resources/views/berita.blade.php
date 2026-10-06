<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon"
          type="image/png"
          href="{{ asset('assets/images/logo ngletih.PNG') }}">

    <title>Berita Terkini |   SDN Ngletih 1</title>


    <!-- ==========================
         GOOGLE FONT
    =========================== -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">


    <!-- ==========================
         BOOTSTRAP CSS
    =========================== -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">


    <!-- ==========================
         BOOTSTRAP ICONS
    =========================== -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">


    <!-- ==========================
         SWIPER CSS
    =========================== -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


    <!-- ==========================
         CUSTOM CSS
    =========================== -->

    <link rel="stylesheet"
          href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/css/berita.css') }}">


    <!-- ==========================
         SWIPER JS
    =========================== -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>


    <!-- ==========================
         CUSTOM JS
    =========================== -->

    <script src="{{ asset('assets/js/script.js') }}">
    </script>

</head>

<body>

    <!-- ==========================
            NAVBAR
    =========================== -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

        <div class="container">

            <a class="navbar-brand fw-bold d-flex align-items-center"
                href="{{ route('home') }}">

                <img src="assets/images/logo ngletih.PNG"
                    class="navbar-logo me-2"
                    alt="Logo">

                SDN Ngletih 1

            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse"
                id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link"
                            href="index.html">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fw-semibold"
                            href="{{ route('berita') }}">
                            Berita
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- ==========================
            HERO
    =========================== -->

    <section class="berita-hero">

        <div class="container text-center">

            <span class="berita-badge">

                <i class="bi bi-newspaper me-2"></i>

                Informasi Sekolah

            </span>

            <h1 class="berita-title">

                Berita Terkini

            </h1>

            <p class="berita-subtitle">

                Informasi kegiatan, prestasi, dan berbagai aktivitas
                terbaru SDN Ngletih 1.

            </p>

        </div>

    </section>

    <!-- ==========================
            BERITA 1
    =========================== -->

    <section class="news-section">

        <div class="container">

            <div class="news-card">

                <span class="news-category">
                    Kegiatan Sekolah
                </span>

                <h2 class="news-title">

                    Peringatan Hari Buku Internasional dan Launching Lingkar Dalam Meriah Digelar di SD Negeri Ngletih 1

                </h2>

                <div class="news-meta">

                    <span>

                        <i class="bi bi-calendar-event"></i>

                        04 Mei 2026

                    </span>

                    <span>

                        <i class="bi bi-person-circle"></i>

                        Admin

                    </span>

                </div>

                <!-- Dokumentasi -->

                <div class="row g-3 mt-2 mb-4">

                    <div class="col-md-4">

                        <img src="assets/images/berita1.jpg"
                            class="img-fluid news-gallery"
                            alt="">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/berita2.jpg"
                            class="img-fluid news-gallery"
                            alt="">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/berita3.jpg"
                            class="img-fluid news-gallery"
                            alt="">

                    </div>

                </div>

                <p>

                    Kediri – SD Negeri Ngletih 1 menjadi tuan rumah kegiatan Peringatan Hari Buku Internasional dan Launching Lingkar Dalam (Literasi Keliling Energi Baru Kota Kediri) yang diselenggarakan oleh Dinas Kearsipan dan Perpustakaan (Disarpus) Kota Kediri. Kegiatan ini dihadiri oleh Wakil Wali Kota Kediri, Qowimuddin, S.Pd.I., Kepala Dinas Kearsipan dan Perpustakaan Kota Kediri, jajaran OPD, kepala sekolah, guru, serta peserta didik dari SD Negeri Ngletih 1.

                </p>
                <p>
                    Acara diawali dengan pembukaan dan menyanyikan lagu Indonesia Raya, dilanjutkan sambutan dari para tamu undangan. Pada kesempatan tersebut juga dilaksanakan Launching Lingkar Dalam, sebuah inovasi layanan literasi keliling yang bertujuan mendekatkan akses membaca kepada masyarakat Kota Kediri. 
                    Suasana semakin semarak dengan penampilan siswa yang membacakan puisi bertema literasi serta berbagai pertunjukan yang menunjukkan kreativitas peserta didik dalam mendukung gerakan gemar membaca. Selain peluncuran program, Wakil Wali Kota Kediri menyerahkan buku secara simbolis dan mengajak seluruh peserta didik untuk menjadikan membaca sebagai kebiasaan sehari-hari demi membangun generasi yang cerdas dan berkarakter. Kegiatan dilanjutkan dengan kunjungan ke stan pameran karya literasi siswa. Wakil Wali Kota berdialog dengan para peserta didik, memberikan motivasi, serta mengapresiasi hasil karya dan kreativitas mereka Antusiasme peserta didik terlihat saat mengikuti seluruh rangkaian kegiatan, mulai dari menyaksikan pertunjukan, mengunjungi pameran lit erasi, hingga berinteraksi langsung dengan Wakil Wali Kota Kediri.

                </p>
                <p>
                    Kegiatan ditutup dengan sesi wawancara bersama media dan harapan agar Gerakan Literasi Sekolah terus berkembang melalui kolaborasi antara pemerintah, sekolah, dan masyarakat Semoga melalui kegiatan ini budaya membaca semakin tumbuh di lingkungan sekolah dan masyarakat, sehingga mampu melahirkan generasi yang gemar membaca, kreatif, dan siap menghadapi tantangan masa depan.
                </p>
                <p>
                    Saksikan video lengkap kemeriahan Peringatan Hari Buku Internasional dan Launching LINGKAR Kediri melalui kanal YouTube SD Negeri Ngletih 1 pada tautan berikut: <a href="https://youtu.be/sX_GUJzBe5o?si=b44HPNGEo9xckmQR" target="_blank">https://www.youtube.com/@sdnngletih1</a>
                </p>
            </div>

        </div>

    </section>

    <!-- ==========================
            BERITA 2
    =========================== -->

    <section class="news-section">

        <div class="container">

            <div class="news-card">

                <span class="news-category">

                    Kegiatan Sekolah

                </span>

                <h2 class="news-title">

                    SMPB SDN Ngletih 1 Tahun Ajaran 2026/2027 Berjalan Lancar dan Transparan

                </h2>

                <div class="news-meta">

                    <span>

                        <i class="bi bi-calendar-event"></i>

                        1o Juli 2026

                    </span>

                    <span>

                        <i class="bi bi-person-circle"></i>

                        Admin

                    </span>

                </div>

                <div class="row g-3 mt-2 mb-4">

                    <div class="col-md-4">

                        <img src="assets/images/beritab1.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritab2.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritab3.jpg"
                            class="img-fluid news-gallery">

                    </div>

                </div>

                <p>

                    Kediri – SDN Ngletih 1 telah sukses melaksanakan rangkaian Sistem Penerimaan Murid Baru (SMPB) Tahun Ajaran 2026/2027 dengan lancar, tertib, transparan, dan akuntabel. Melalui proses penerimaan yang dilaksanakan sesuai ketentuan, sebanyak 56 peserta didik baru resmi diterima dan siap mengawali perjalanan belajar di SDN Ngletih 1.

                 </p>   

                </p>
                    Selama pelaksanaan SMPB, panitia memberikan layanan terbaik melalui kegiatan sosialisasi jalur penerimaan, penjelasan tata cara pendaftaran, pendampingan kepada orang tua/wali, serta verifikasi dan validasi berkas calon peserta didik. Seluruh tahapan dilakukan secara terbuka agar masyarakat memperoleh informasi yang jelas, mudah dipahami, dan dapat diakses oleh semua calon peserta didik.
                <p>

                    <p>
                        Selamat datang kepada 56 peserta didik baru di keluarga besar SDN Ngletih 1. Bersama, mari wujudkan lingkungan belajar yang nyaman, aman, dan penuh prestasi.
                    </p>
                

            </div>

        </div>

    </section>

    <!-- ==========================
            BERITA 3
    =========================== -->

    <section class="news-section">

        <div class="container">

            <div class="news-card">

                <span class="news-category">

                    Kegiatan Sekolah

                </span>

                <h2 class="news-title">

                    SDN Ngletih 1 Resmi Membuka MPLS Tahun Ajaran 2026/2027

                </h2>

                <div class="news-meta">

                    <span>

                        <i class="bi bi-calendar-event"></i>

                        13 Juli 2026

                    </span>

                    <span>

                        <i class="bi bi-person-circle"></i>

                        Admin

                    </span>

                </div>

                <div class="row g-3 mt-2 mb-4">

                    <div class="col-md-4">

                        <img src="assets/images/beritac1.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac2.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac3.jpg"
                            class="img-fluid news-gallery">

                    </div>

                     <div class="col-md-4">

                        <img src="assets/images/beritac4.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac5.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac6.jpg"
                            class="img-fluid news-gallery">

                    </div>

                </div>

                <p>

                    Kediri, 13 Juli 2026 – SDN Ngletih 1 secara resmi mengawali pelaksanaan Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun Ajaran 2026/2027 pada Senin (13/7). Kegiatan berlangsung dengan tertib, meriah, dan penuh semangat sebagai langkah awal dalam menyambut peserta didik baru sekaligus mengenalkan lingkungan sekolah yang aman, nyaman, dan ramah anak.

                </p>

                <p>
                    Rangkaian kegiatan diawali dengan upacara pembukaan yang dipimpin langsung oleh Kepala SDN Ngletih 1. Dalam amanatnya, Kepala Sekolah menyampaikan ucapan selamat datang kepada seluruh peserta didik baru serta memberikan motivasi agar mereka mengikuti proses belajar dengan penuh semangat, disiplin, dan menjunjung tinggi nilai-nilai karakter.
                </p>
                    
                <p>
                    Sebagai bentuk apresiasi terhadap prestasi dan partisipasi peserta didik, sekolah juga menyerahkan hadiah kepada siswa berprestasi dan aktif. Momen tersebut menjadi penyemangat bagi seluruh peserta didik untuk terus mengembangkan potensi dan meraih prestasi di bidang akademik maupun nonakademik.
                </p>

                <p>
                    Kegiatan berikutnya adalah pemasangan kartu identitas (ID Card) secara simbolis kepada peserta didik baru. Pemasangan ID Card ini menjadi simbol resmi bergabungnya para siswa sebagai bagian dari keluarga besar SDN Ngletih 1 sekaligus menumbuhkan rasa bangga dan memiliki terhadap sekolah.
                </p>

                <p>
                    Sebagai penutup kegiatan hari pertama, SDN Ngletih 1 bekerja sama dengan instansi perlindungan anak dalam memberikan edukasi mengenai pencegahan perundungan (bullying), pentingnya saling menghargai, serta menciptakan lingkungan sekolah yang aman, nyaman, inklusif, dan ramah anak. Materi tersebut diharapkan dapat membangun karakter peserta didik sejak dini serta mewujudkan budaya sekolah yang positif.
                </p>

                <p>
                    Seluruh rangkaian kegiatan MPLS hari pertama berjalan dengan lancar berkat kerja sama seluruh guru, tenaga kependidikan, orang tua, serta mitra dari instansi perlindungan anak. Melalui pelaksanaan MPLS ini, SDN Ngletih 1 berharap seluruh peserta didik baru dapat beradaptasi dengan baik, mengenal lingkungan sekolah, serta tumbuh menjadi generasi yang berkarakter, berprestasi, dan berakhlak mulia.
                </p>
            

            </div>

        </div>

    </section>

     <!-- ==========================
            BERITA 4
    =========================== -->

    <section class="news-section">

        <div class="container">

            <div class="news-card">

                <span class="news-category">

                    Kegiatan Sekolah

                </span>

                <h2 class="news-title">

                    SDN Ngletih 1 Resmi Membuka MPLS Tahun Ajaran 2026/2027

                </h2>

                <div class="news-meta">

                    <span>

                        <i class="bi bi-calendar-event"></i>

                        13 Juli 2026

                    </span>

                    <span>

                        <i class="bi bi-person-circle"></i>

                        Admin

                    </span>

                </div>

                <div class="row g-3 mt-2 mb-4">

                    <div class="col-md-4">

                        <img src="assets/images/beritac1.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac2.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac3.jpg"
                            class="img-fluid news-gallery">

                    </div>

                     <div class="col-md-4">

                        <img src="assets/images/beritac4.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac5.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-4">

                        <img src="assets/images/beritac6.jpg"
                            class="img-fluid news-gallery">

                    </div>

                </div>

                <p>

                    Kediri, 13 Juli 2026 – SDN Ngletih 1 secara resmi mengawali pelaksanaan Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun Ajaran 2026/2027 pada Senin (13/7). Kegiatan berlangsung dengan tertib, meriah, dan penuh semangat sebagai langkah awal dalam menyambut peserta didik baru sekaligus mengenalkan lingkungan sekolah yang aman, nyaman, dan ramah anak.

                </p>

                <p>
                    Rangkaian kegiatan diawali dengan upacara pembukaan yang dipimpin langsung oleh Kepala SDN Ngletih 1. Dalam amanatnya, Kepala Sekolah menyampaikan ucapan selamat datang kepada seluruh peserta didik baru serta memberikan motivasi agar mereka mengikuti proses belajar dengan penuh semangat, disiplin, dan menjunjung tinggi nilai-nilai karakter.
                </p>
                    
                <p>
                    Sebagai bentuk apresiasi terhadap prestasi dan partisipasi peserta didik, sekolah juga menyerahkan hadiah kepada siswa berprestasi dan aktif. Momen tersebut menjadi penyemangat bagi seluruh peserta didik untuk terus mengembangkan potensi dan meraih prestasi di bidang akademik maupun nonakademik.
                </p>

                <p>
                    Kegiatan berikutnya adalah pemasangan kartu identitas (ID Card) secara simbolis kepada peserta didik baru. Pemasangan ID Card ini menjadi simbol resmi bergabungnya para siswa sebagai bagian dari keluarga besar SDN Ngletih 1 sekaligus menumbuhkan rasa bangga dan memiliki terhadap sekolah.
                </p>

                <p>
                    Sebagai penutup kegiatan hari pertama, SDN Ngletih 1 bekerja sama dengan instansi perlindungan anak dalam memberikan edukasi mengenai pencegahan perundungan (bullying), pentingnya saling menghargai, serta menciptakan lingkungan sekolah yang aman, nyaman, inklusif, dan ramah anak. Materi tersebut diharapkan dapat membangun karakter peserta didik sejak dini serta mewujudkan budaya sekolah yang positif.
                </p>

                <p>
                    Seluruh rangkaian kegiatan MPLS hari pertama berjalan dengan lancar berkat kerja sama seluruh guru, tenaga kependidikan, orang tua, serta mitra dari instansi perlindungan anak. Melalui pelaksanaan MPLS ini, SDN Ngletih 1 berharap seluruh peserta didik baru dapat beradaptasi dengan baik, mengenal lingkungan sekolah, serta tumbuh menjadi generasi yang berkarakter, berprestasi, dan berakhlak mulia.
                </p>
            

            </div>

        </div>

    </section>

    <!-- ==========================
            BERITA 5
    =========================== -->

    <section class="news-section">

        <div class="container">

            <div class="news-card">

                <span class="news-category">

                    Kegiatan Sekolah

                </span>

                <h2 class="news-title">

                   SDN Ngletih 1 Peringati Hari Anak Nasional dengan Apel, Permainan Tradisional, dan Mewarnai

                </h2>

                <div class="news-meta">

                    <span>

                        <i class="bi bi-calendar-event"></i>

                        23 Juli 2026

                    </span>

                    <span>

                        <i class="bi bi-person-circle"></i>

                        Admin

                    </span>

                </div>

                <div class="row g-3 mt-2 mb-4">

                    <div class="col-md-6">

                        <img src="assets/images/harianak-1.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-6">

                        <img src="assets/images/harianak-2.jpg"
                            class="img-fluid news-gallery">

                    </div>

                <p>

                    Kediri, Kamis, 23 Juli 2026 – Dalam rangka memperingati Hari Anak Nasional (HAN), SDN Ngletih 1 menggelar serangkaian kegiatan yang diikuti oleh seluruh siswa. Kegiatan diawali dengan pelaksanaan apel pagi di halaman sekolah yang berlangsung dengan tertib dan penuh semangat.

                </p>

                <p>
                    Pada kesempatan tersebut, para guru menyampaikan pesan tentang pentingnya Hari Anak Nasional sebagai momentum untuk menghargai, melindungi, dan memenuhi hak-hak anak. Selain itu, siswa juga diajak untuk terus belajar, berprestasi, saling menghormati, serta menerapkan nilai-nilai karakter positif dalam kehidupan sehari-hari.
                </p>
                    
                <p>
                    Usai apel, kegiatan dilanjutkan dengan pengenalan berbagai permainan tradisional Indonesia. Para siswa dikenalkan pada permainan yang telah menjadi bagian dari budaya bangsa, seperti engklek, gobak sodor, egrang batok, lompat tali, dan permainan tradisional lainnya. Melalui kegiatan ini, siswa tidak hanya bermain dengan gembira, tetapi juga belajar tentang kerja sama, sportivitas, kebersamaan, serta pentingnya melestarikan warisan budaya Indonesia di tengah perkembangan teknologi.
                </p>

                <p>
                    Rangkaian peringatan Hari Anak Nasional kemudian dilanjutkan dengan kegiatan mewarnai bertema Hari Anak Nasional. Seluruh siswa mengikuti kegiatan ini dengan penuh antusias dan kreativitas. Beragam hasil karya yang penuh warna menunjukkan imajinasi serta kemampuan seni yang dimiliki oleh para peserta didik.
                </p>

                <p>
                   Suasana sekolah tampak meriah dengan keceriaan para siswa yang menikmati setiap rangkaian kegiatan. Guru-guru turut mendampingi dan memberikan semangat sehingga seluruh kegiatan berjalan dengan lancar, tertib, dan menyenangkan
                </p>

                <p>
                    Kepala SDN Ngletih 1 menyampaikan bahwa peringatan Hari Anak Nasional bukan sekadar kegiatan seremonial, tetapi juga menjadi sarana untuk menanamkan nilai-nilai karakter, menumbuhkan rasa cinta terhadap budaya bangsa, serta memberikan ruang bagi anak-anak untuk berekspresi, berkarya, dan bermain dengan gembira.
                </p>

                <p>
                    Melalui kegiatan ini, SDN Ngletih 1 berharap seluruh peserta didik dapat tumbuh menjadi anak-anak yang sehat, cerdas, kreatif, berkarakter, serta bangga terhadap budaya Indonesia. Semangat Hari Anak Nasional diharapkan terus menginspirasi seluruh warga sekolah untuk menciptakan lingkungan belajar yang aman, nyaman, ramah anak, dan mendukung tumbuh kembang peserta didik secara optimal.
                </p>
            

            </div>

        </div>

    </section>

    <!-- ==========================
            BERITA 6
    =========================== -->

    <section class="news-section">

        <div class="container">

            <div class="news-card">

                <span class="news-category">

                    Kegiatan Sekolah

                </span>

                <h2 class="news-title">

                    Tes Kebugaran Siswa SDN Ngletih 1 Bersama Puskesmas Ngletih

                </h2>

                <div class="news-meta">

                    <span>

                        <i class="bi bi-calendar-event"></i>

                        29 Juli 2026

                    </span>

                    <span>

                        <i class="bi bi-person-circle"></i>

                        Admin

                    </span>

                </div>

                <div class="row g-3 mt-2 mb-4">

                    <div class="col-md-6">

                        <img src="assets/images/teskebugaran-1.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-6">

                        <img src="assets/images/teskebugaran-2.jpg"
                            class="img-fluid news-gallery">

                    </div>

                    <div class="col-md-6">

                        <img src="assets/images/teskebugaran-3.jpg"
                            class="img-fluid news-gallery">

                    </div>

                     <div class="col-md-6">

                        <img src="assets/images/teskebugaran-4.jpg"
                            class="img-fluid news-gallery">

                    </div>

                </div>

                <p>

                   Kediri – RABU, 29 Juli 2026 SDN Ngletih 1 menggelar kegiatan tes kebugaran jasmani yang diikuti oleh seluruh siswa di Lapangan Ngletih. Kegiatan ini merupakan hasil kerja sama antara SDN Ngletih 1 dengan Puskesmas Ngletih sebagai upaya untuk memantau sekaligus meningkatkan kesehatan dan kebugaran peserta didik.

                </p>

                <p>
                   Dalam kegiatan tersebut, para siswa mengikuti berbagai rangkaian tes kebugaran dengan penuh semangat dan antusias. Tes dilakukan untuk mengetahui tingkat kebugaran jasmani siswa sehingga dapat menjadi dasar dalam pembinaan kesehatan dan aktivitas fisik di lingkungan sekolah.
                </p>
                    
                <p>
                   Petugas dari Puskesmas Ngletih turut mendampingi jalannya kegiatan dengan memberikan arahan serta melakukan penilaian sesuai prosedur. Kolaborasi ini menjadi wujud sinergi antara sekolah dan fasilitas kesehatan dalam mendukung tumbuh kembang anak yang sehat, aktif, dan bugar.
                </p>

                <p>
                   Kepala sekolah berharap kegiatan tes kebugaran ini dapat menumbuhkan kesadaran siswa akan pentingnya menjaga kesehatan melalui olahraga dan pola hidup sehat. Selain itu, hasil tes diharapkan menjadi bahan evaluasi bagi sekolah dan orang tua dalam mendukung perkembangan fisik peserta didik.
                </p>

                <p>
                    Kegiatan berlangsung dengan tertib, lancar, dan penuh semangat. Melalui kemitraan antara SDN Ngletih 1 dan Puskesmas Ngletih, diharapkan program kesehatan sekolah dapat terus ditingkatkan demi menciptakan generasi yang sehat, kuat, dan berprestasi.
                </p>

        
            </div>

        </div>

    </section>

    <!-- ==========================
        BERITA DARI DATABASE
=========================== -->

@foreach ($beritas as $berita)

<section class="news-section">

    <div class="container">

        <div class="news-card">

            <span class="news-category">
                {{ $berita->kategori ?? 'Informasi Sekolah' }}
            </span>

            <h2 class="news-title">
                {{ $berita->judul }}
            </h2>

            <div class="news-meta">

                <span>
                    <i class="bi bi-calendar-event"></i>

                    {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}
                </span>

                <span>
                    <i class="bi bi-person-circle"></i>

                    Admin
                </span>

            </div>


            <!-- ==========================
                    GAMBAR BERITA
            =========================== -->

            @if ($berita->gambar || $berita->gambar2 || $berita->gambar3)

                <div class="row g-3 mt-2 mb-4">

                    @if ($berita->gambar)

                        <div class="col-md-4">

                            <img
                                src="{{ asset('storage/' . $berita->gambar) }}"
                                class="img-fluid news-gallery"
                                alt="{{ $berita->judul }}"
                            >

                        </div>

                    @endif


                    @if ($berita->gambar2)

                        <div class="col-md-4">

                            <img
                                src="{{ asset('storage/' . $berita->gambar2) }}"
                                class="img-fluid news-gallery"
                                alt="{{ $berita->judul }}"
                            >

                        </div>

                    @endif


                    @if ($berita->gambar3)

                        <div class="col-md-4">

                            <img
                                src="{{ asset('storage/' . $berita->gambar3) }}"
                                class="img-fluid news-gallery"
                                alt="{{ $berita->judul }}"
                            >

                        </div>

                    @endif

                </div>

            @endif


            <!-- ==========================
                    ISI BERITA
            =========================== -->

            <p>
                {!! nl2br(e($berita->isi)) !!}
            </p>

        </div>

    </div>

</section>

@endforeach

    <!-- ==========================
            FOOTER
    =========================== -->

    <footer class="footer">

        <div class="container text-center">

            <p class="mb-0">

                © 2026 SDN Ngletih 1. All Rights Reserved.

            </p>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>//