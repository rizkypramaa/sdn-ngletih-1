<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon"
          type="image/png"
          href="{{ asset('assets/images/logo ngletih.PNG') }}">

    <title>SDN Ngletih 1</title>


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
          href="{{ asset('assets/css/sambutan.css') }}">


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

<script src="{{ asset('assets/js/script.js') }}"></script>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center fw-bold"
            href="{{ route('home') }}">

            <img
                src="{{ asset('assets/images/logo ngletih.png') }}"
                alt="Logo SDN Ngletih 1"
                class="navbar-logo">

            <span>SDN Ngletih 1</span>

        </a>

        <!-- Toggle Mobile -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <!-- PROFIL -->
                <li class="nav-item">
                    <a href="{{ route('home') }}#profil"
                        class="nav-link">
                        Profil
                    </a>
                </li>


                <!-- AKADEMIK -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown">

                        Akademik

                    </a>

                    <ul class="dropdown-menu modern-dropdown">

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('home') }}#visi">
                                Visi & Misi
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('home') }}#ekstrakurikuler">
                                Ekstrakurikuler
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('home') }}#prestasi">
                                Prestasi
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- PUBLIKASI -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown">

                        Publikasi

                    </a>

                    <ul class="dropdown-menu modern-dropdown">

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('home') }}#galeri">
                                Galeri
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('berita') }}">
                                Berita
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('sarpras') }}">
                                Sarana & Prasarana
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- INFORMASI -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown">

                        Informasi

                    </a>

                    <ul class="dropdown-menu modern-dropdown">

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('standar-pelayanan') }}">
                                Standar Pelayanan
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('sippn') }}">
                                SIPPN
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('maklumat-pelayanan') }}">
                                Maklumat Pelayanan
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('ikm') }}">
                                IKM
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('aduan') }}">
                                Pengaduan
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('sp4n-lapor') }}">
                                SP4N-LAPOR
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('faq') }}">
                                FAQ
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- LAYANAN -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown">

                        Layanan

                    </a>

                    <ul class="dropdown-menu modern-dropdown">

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('layanan') }}">
                                SILADIK
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- KONTAK -->
                <li class="nav-item">

                    <a href="{{ route('home') }}#kontak"
                        class="nav-link">

                        Kontak

                    </a>

                </li>

            </ul>

            <div class="d-flex      align-items-center">
                    <a href="{{ route('admin.login') }}" class="btn btn-primary ms-3">
                        <i class="bi bi-person-lock"></i>
                        Login Admin
                    </a>
                </div>

        </div>

    </div>

</nav>

<!-- HERO -->
<section id="home" class="hero-section">

    <div class="hero-overlay"></div>

    <div class="container position-relative">

        <div class="row min-vh-100">

            <!-- Text -->
            <div class="col-lg-6 hero-content">

                <span class="badge-school">
                    <i class="bi bi-mortarboard-fill me-2"></i>
                    Sekolah Dasar Negeri
                </span>

                <h1 class="hero-title">
                    Mewujudkan Generasi
                    <span>Cerdas, Berkarakter, dan Berprestasi</span>
                </h1>

                <p class="hero-text text-justify">
                    SDN Ngletih 1 berkomitmen memberikan pendidikan berkualitas
                    yang berlandaskan iman, ilmu, dan teknologi untuk membentuk
                    generasi masa depan yang unggul dan siap menghadapi tantangan zaman.
                </p>

                <div class="hero-buttons mt-4">
                    <a href="#" class="btn btn-warning btn-lg me-3">
                        SPMB Online
                    </a>

                    <a href="#profil" class="btn btn-outline-light btn-lg">
                        Daftar Sekarang
                    </a>
                </div>

            </div>

            <!-- Image -->
            <div class="col-lg-6 p-0">

                <div class="hero-image-wrapper">
                    <img src="assets/images/hero.png"
                        class="hero-img"
                        alt="SDN Ngletih 1">
                </div>

            </div>

        </div>

    </div>

</section>

<!-- SAMBUTAN -->
<section class="section-sambutan py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5 text-center">

                <img
                    src="assets/images/kepala sekolah.jpeg"
                    class="img-fluid shadow kepala-sekolah"
                    alt="Kepala Sekolah">

            </div>

            <div class="col-lg-7">

            <h2 class="section-title">
                Eka Yudi Kristanto, S.Pd.
            </h2>

            <h5 class="fw-bold text-primary mb-3">
                Sambutan Kepala Sekolah
            </h5>

            <p class="text-justify sambutan-opening">
                Assalamu’alaikum warahmatullahi wabarakatuh 
            </p>

            <p class="text-justify">    
                Puji syukur ke hadirat Tuhan yang Maha Esa atas segala rahmat dan karunia-Nya sehingga SDN Ngletih 1 Kecamatan Pesantren Kota Kediri senantiasa diberikan kesempatan untuk terus berkontribusi dalam dunia pendidikan, khususnya dalam membentuk generasi yang cerdas, berkarakter, dan berakhlak mulia...
            </p>

            <a href="{{ route('sambutan-kepsek') }}" class="btn btn-primary modern-btn mt-3">
                Read More
            </a>

            </div>

        </div>

    </div>

</section>

<!-- PROFIL -->
<section id="profil" class="section-profil mb-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Data SDN Ngletih 1</h2>
            <p class="section-subtitle">
                Sekolah dasar unggulan yang berkomitmen mencetak generasi berkarakter,
                cerdas, dan berprestasi.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="info-card profil-card-modern profil-card-blue">
                    <i class="bi bi-people-fill"></i>
                    <h3>200+</h3>
                    <p>Siswa Aktif</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-card profil-card-modern profil-card-light">
                    <i class="bi bi-person-workspace"></i>
                    <h3>22</h3>
                    <p>Tenaga Pendidik</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-card profil-card-modern profil-card-soft">
                    <i class="bi bi-building"></i>
                    <h3>15+</h3>
                    <p>Ruang Kelas</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-card profil-card-modern profil-card-gold">
                    <i class="bi bi-award-fill"></i>
                    <h3>A</h3>
                    <p>Akreditasi</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- ========================================
        MAKLUMAT PELAYANAN
======================================== -->

<section id="maklumat" class="maklumat-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-badge">
                Pelayanan Publik
            </span>

            <h2 class="section-title">
                Maklumat Pelayanan
            </h2>

            <p class="section-subtitle">
                Komitmen SDN Ngletih 1 dalam memberikan pelayanan pendidikan
                yang profesional, transparan, cepat, dan berorientasi kepada
                kepuasan masyarakat.
            </p>

        </div>

        <div class="row align-items-center g-5">


            <!-- Isi -->
            <div class="col-lg-12">

                <div class="maklumat-card">

                    <div class="maklumat-header">

                        <i class="bi bi-award-fill"></i>

                        <h3>
                            Maklumat Pelayanan SDN Ngletih 1
                        </h3>

                    </div>

                    <ol class="maklumat-list">

                        <li>
                            KAMI BERJANJI DAN SANGGUP UNTUK MELAKSANAKAN PELAYANAN SESUAI DENGAN STANDAR PELAYANAN.
                        <li>
                            KAMI BERJANJI DAN SANGGUP UNTUK MEMBERIKAN PELAYANAN SESUAI DENGAN KEWAJIBAN DAN AKAN MELAKUKAN PERBAIKAN SECARA TERUS MENERUS.
                        </li>

                        <li>
                            KAMI BERSEDIA UNTUK MENERIMA SANKSI DAN/ATAU MEMBERIKAN KOMPENSANSASI APABILA PELAYANAN YANG DIBERIKAN TIDAK SESUAI DENGAN STANDAR.
                        </li>
                    </ol>

                    <div class="kepsek-sign">

                        <h5>
                            Kepala Sekolah
                        </h5>

                        <strong>
                            Eka Yudi Kristanto, S.Pd.
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- VISI MISI -->
<section id="visi" class="visi-section">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title text-white">
                Visi & Misi
            </h2>
        </div>

        <div class="row g-4">

            <!-- VISI -->
            <div class="col-lg-6">

                <div class="card-visi modern-visi visi-card">

                    <div class="visi-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>

                    <h3>Visi</h3>

                    <p>
                        Terwujudnya sekolah dengan ekosistem pendidikan berpusat pada murid,
                        unggul dalam prestasi, berkarakter, serta inovatif berbasis kemitraan.
                    </p>

                </div>

            </div>

            <!-- MISI -->
            <div class="col-lg-6">

                <div class="card-visi modern-visi misi-card">

                    <div class="visi-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>

                    <h3>Misi</h3>

                    <ul>
                        <li>Mewujudkan transformasi pembelajaran yang mengutamakan kebutuhan murid
                        demi menciptakan pengalaman belajar yang berkesadaran, bermakna, dan
                        menyenangkan.</li>
                        <li>Menumbuhkan karakter positif dan kesejahteraan yang mendalam bagi setiap
                        siswa untuk menciptakan pribadi yang utuh dan berdaya saing.</li>
                        <li>Mengembangkan etos kerja guru yang profesional dan memperbarui sarana
                        prasarana untuk mendukung proses belajar mengajar yang inovatif dan efisien.</li>
                        <li>Membangun kolaborasi strategis dengan orang tua dan masyarakat untuk
                        menciptakan lingkungan belajar yang mendukung perkembangan siswa secara
                        holistik.</li>
                    </ul>
                    <a href="{{ route('misi') }}" class="btn btn-primary modern-btn mt-3">
                        Learn More
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- EKSTRAKURIKULER -->
<section id="ekstrakurikuler" class="program-section py-5">

    <div class="container">

        <!-- Judul Section -->
        <div class="text-center mb-5">

            <h2 class="section-title">
                Ekstrakurikuler
            </h2>

            <p class="section-subtitle">
                Berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat,
                minat, karakter, dan prestasi siswa SDN Ngletih 1.
            </p>

        </div>

            <!-- Slider Ekstrakurikuler -->
<div class="swiper ekstraSwiper">

    <div class="swiper-wrapper">

        @forelse($ekstrakurikulers as $ekstrakurikuler)

            <div class="swiper-slide">

                <div class="program-card ekstra-card {{ $ekstrakurikuler->warna }}">

                    @if($ekstrakurikuler->icon)
                        <i class="{{ $ekstrakurikuler->icon }}"></i>
                    @endif

                    <h4>
                        {{ $ekstrakurikuler->nama }}
                    </h4>

                    <p>
                        {{ $ekstrakurikuler->deskripsi }}
                    </p>

                </div>

            </div>

        @empty

            <div class="swiper-slide">

                <div class="program-card ekstra-card">

                    <h4>
                        Belum ada ekstrakurikuler
                    </h4>

                    <p>
                        Data ekstrakurikuler belum tersedia.
                    </p>

                </div>

            </div>

        @endforelse

    </div>

</div>
       

        </div>

    </div>

</section>
      

<!-- PRESTASI -->
<section id="prestasi" class="prestasi-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Prestasi Akademik & Non Akademik
            </h2>

            <p class="section-subtitle">
                Berbagai pencapaian siswa SDN Ngletih 1 dalam bidang akademik
                maupun non-akademik.
            </p>

        </div>


        <!-- PRESTASI AKADEMIK -->

        <div class="mb-5">

            <h3 class="mb-4 fw-bold">
                Prestasi Akademik
            </h3>

            <div class="row g-4">

                @forelse($prestasis->where('kategori', 'Akademik') as $prestasi)

                    <div class="col-lg-4">

                        <div class="prestasi-card">

                            <h5>
                                {{ $prestasi->judul }}
                            </h5>

                            <div class="prestasi-info">

                                <p>
                                    <i class="bi bi-person-fill"></i>
                                    <strong>Nama :</strong>
                                </p>

                                <div class="mb-2">
                                    {!! nl2br(e($prestasi->nama)) !!}
                                </div>

                                <p>
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <strong>Tingkat :</strong>
                                    {{ $prestasi->tingkat }}
                                </p>

                                <p>
                                    <i class="bi bi-calendar-event-fill"></i>
                                    <strong>Tahun :</strong>
                                    {{ $prestasi->tahun }}
                                </p>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <p class="text-muted">
                            Belum ada prestasi akademik.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>


        <!-- PRESTASI NON AKADEMIK -->

        <div>

            <h3 class="mb-4 fw-bold">
                Prestasi Non Akademik
            </h3>

            <div class="row g-4">

                @forelse($prestasis->where('kategori', 'Non Akademik') as $prestasi)

                    <div class="col-lg-4">

                        <div class="prestasi-card">

                            <h5>
                                {{ $prestasi->judul }}
                            </h5>

                            <div class="prestasi-info">

                                <p>
                                    <i class="bi bi-person-fill"></i>
                                    <strong>Nama :</strong>
                                </p>

                                <div class="mb-2">
                                    {!! nl2br(e($prestasi->nama)) !!}
                                </div>

                                <p>
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <strong>Tingkat :</strong>
                                    {{ $prestasi->tingkat }}
                                </p>

                                <p>
                                    <i class="bi bi-calendar-event-fill"></i>
                                    <strong>Tahun :</strong>
                                    {{ $prestasi->tahun }}
                                </p>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <p class="text-muted">
                            Belum ada prestasi non akademik.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>


    </div>

</section>


<!-- Galeri -->
<section id="galeri" class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">
                Galeri Kegiatan
            </h2>
        </div>

          <div class="swiper ekstraSwiper">

            <div class="swiper-wrapper">

    @forelse($galeris as $galeri)

        <div class="swiper-slide">
            <div class="gallery-card">

                <img
                    src="{{ asset('storage/' . $galeri->gambar) }}"
                    class="gallery-img"
                    alt="{{ $galeri->judul }}"
                >

                <div class="gallery-caption">
                    <h5>{{ $galeri->judul }}</h5>

                    <p>{{ $galeri->deskripsi }}</p>
                </div>

            </div>
        </div>

    @empty

        <div class="swiper-slide">
            <div class="text-center">
                <p>Belum ada kegiatan di galeri.</p>
            </div>
        </div>

    @endforelse

</div>

        </div>

        <div class="text-center mt-5">

        <a href="{{ route('berita') }}" class="btn btn-primary btn-lg">

            <i class="bi bi-newspaper me-2"></i>

            Lihat Berita Terkini

        </a>

    </div>

    </div>

</section>

<!-- KONTAK -->
<section id="kontak" class="contact-section py-5">

    <div class="container">

        <div class="row g-4">

            <!-- Title -->
            <div class="col-12 text-center mb-4">
                <h2 class="text-white">
                    Hubungi Kami
                </h2>

                <p class="text-white opacity-75">
                    Informasi kontak resmi SDN Ngletih 1
                </p>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3">

                <div class="contact-item mb-3">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>SDN Ngletih 1, Kota Kediri</span>
                </div>

                <div class="contact-item mb-3">
                    <i class="bi bi-telephone-fill"></i>
                    <span>(0354) 123456</span>
                </div>

                <div class="contact-item mb-3">
                    <i class="bi bi-envelope-fill"></i>
                    <a href="mailto:sdnegeringletih1@gmail.com">
                        sdnegeringletih1@gmail.com
                    </a>
                </div>

            </div>

            <!-- Social Media -->
            <div class="col-lg-3">

                <div class="contact-item mb-3">
                    <i class="bi bi-youtube"></i>
                    <a href="#" target="_blank">
                        sdnngletih1241
                    </a>
                </div>

                <div class="contact-item mb-3">
                    <i class="bi bi-instagram"></i>
                    <a href="#" target="_blank">
                        sdn_ngletih1
                    </a>
                </div>

                <div class="contact-item mb-3">
                    <i class="bi bi-tiktok"></i>
                    <a href="#" target="_blank">
                        sdn_ngletih1
                    </a>
                </div>

            </div>

            <div class="col-lg-6">

                <iframe
                  src="https://maps.google.com/maps?q=SDN%20Ngletih%201%20Kediri&t=&z=15&ie=UTF8&iwloc=&output=embed"
                  width="100%"
                  height="300"
                  style="border-radius:20px;border:0;">
              </iframe>
            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="footer">

    <div class="container">

        <p class="mb-0">
            © 2026 SDN Ngletih 1 | Website Profil Sekolah
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>