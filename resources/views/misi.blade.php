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

    <title>Visi & Misi | SDN Ngletih 1</title>


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

<body>

    <!-- Navbar -->
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        
        <a class="navbar-brand d-flex align-items-center fw-bold" href="index.html">
    
        <img 
            src="assets/images/logo ngletih.png" 
            alt="Logo SDN Ngletih 1"
            class="navbar-logo"
        >

        <span>SDN Ngletih 1</span>

    </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="#home" class="nav-link">Beranda</a>
                </li>

                <li class="nav-item">
                    <a href="#profil" class="nav-link">Profil</a>
                </li>

                <li class="nav-item">
                    <a href="#ekstrakurikuler" class="nav-link">Ekstrakurikuler</a>
                </li>

                <li class="nav-item">
                    <a href="#prestasi" class="nav-link">Prestasi</a>
                </li>

                <li class="nav-item">
                    <a href="#galeri" class="nav-link">Galeri</a>
                </li>

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
                        href="layanan.html">

                            SILADIK

                        </a>

                    </li>

                    <li>

                        <a class="dropdown-item"
                        href="aduan.html">

                            ADUAN

                        </a>

                    </li>

                </ul>

                </li>

                <li class="nav-item">
                    <a href="#kontak" class="nav-link">Kontak</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

    <!-- Hero -->
    <section class="hero-section">
        <div class="container text-center">

            <span class="section-badge mb-3">
                Profil Sekolah
            </span>

            <h1 class="hero-title">
                Visi & <span>Misi Sekolah</span>
            </h1>

            <p class="hero-text mx-auto" style="max-width:700px;">
                Komitmen SDN Ngletih 1 dalam membangun pendidikan yang unggul,
                berkarakter, inovatif, dan berorientasi pada kebutuhan peserta didik.
            </p>

        </div>
    </section>

    <!-- Visi -->
    <section class="py-5" style="background:#EEF5FF;">
        <div class="container">

            <div class="card border-0 shadow-lg rounded-4 p-4 modern-visi-card">

                <div class="d-flex align-items-center mb-4">
                    <div class="visi-icon me-3">
                        <i class="bi bi-eye-fill"></i>
                    </div>

                    <h2 class="section-title mb-0">Visi Sekolah</h2>
                </div>

                <p class="fs-5 text-justify">
                    Terwujudnya sekolah dengan ekosistem pendidikan berpusat pada murid,
                    unggul dalam prestasi, berkarakter, serta inovatif berbasis kemitraan.
                </p>

            </div>

        </div>
    </section>

    <!-- Misi -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="section-badge">Misi Sekolah</span>
                <h2 class="section-title">Komitmen SDN Ngletih 1</h2>
            </div>

            <!-- MISI 1 -->
            <div class="misi-card mb-4">
                <div class="misi-number">01</div>

                <h4>
                    Mewujudkan transformasi pembelajaran yang mengutamakan kebutuhan murid demi menciptakan pengalaman belajar yang berkesadaran, bermakna, dan menyenangkan.
                </h4>

                <ul>
                    <li>Menyelenggarakan pembelajaran berdiferensiasi yang menghargai keunikan minat dan bakat setiap murid untuk memulihkan capaian literasi dan numerasi.</li>

                    <li>Menciptakan suasana kelas yang teratur, aman, dan penuh dukungan emosional dari pendidik untuk meningkatkan kualitas proses belajar.</li>

                    <li>Mengintegrasikan media belajar dan buku paket yang telah disediakan ke dalam metode pembelajaran aktif dan inovatif.</li>

                    <li>Menguatkan kemampuan literasi dan numerasi siswa melalui integrasi media belajar modern dan metode pembelajaran yang menyenangkan.</li>

                    <li>Mengembangkan potensi akademik dan non-akademik siswa agar mampu bersaing dan berprestasi di tingkat daerah maupun nasional.</li>
                </ul>
            </div>

            <!-- MISI 2 -->
            <div class="misi-card mb-4">
                <div class="misi-number">02</div>

                <h4>
                    Menumbuhkan karakter positif dan kesejahteraan yang mendalam bagi setiap siswa untuk menciptakan pribadi yang utuh dan berdaya saing.
                </h4>

                <ul>
                    <li>Menanamkan nilai-nilai Profil Pelajar Pancasila yang beriman, berakhlak mulia, bergotong royong, kreatif, kritis, dan mandiri.</li>

                    <li>Meningkatkan kesadaran akan kebinekaan global melalui program interaksi positif dengan masyarakat dari berbagai latar belakang budaya dan agama.</li>

                    <li>Menjamin kondisi sekolah yang aman, bahagia, bebas dari perundungan, kekerasan fisik, dan zat berbahaya demi kenyamanan belajar siswa.</li>
                </ul>
            </div>

            <!-- MISI 3 -->
            <div class="misi-card mb-4">
                <div class="misi-number">03</div>

                <h4>
                    Mengembangkan etos kerja guru yang profesional dan memperbarui sarana prasarana untuk mendukung proses belajar mengajar yang inovatif dan efisien.
                </h4>

                <ul>
                    <li>Membangun budaya kerja guru yang memiliki kepedulian tinggi, dedikasi, dan tanggung jawab terhadap mutu pendidikan dan pelayanan siswa.</li>

                    <li>Mengoptimalkan pemanfaatan sarana dan prasarana sekolah yang bersih, sehat, dan memadai (buku paket, media belajar, lingkungan) untuk mendukung proses belajar mengajar.</li>

                    <li>Melaksanakan kebijakan pendidikan pemerintah secara konsisten melalui peningkatan kompetensi pendidik yang berkelanjutan.</li>
                </ul>
            </div>

            <!-- MISI 4 -->
            <div class="misi-card mb-4">
                <div class="misi-number">04</div>

                <h4>
                    Membangun kolaborasi strategis dengan orang tua dan masyarakat untuk menciptakan lingkungan belajar yang mendukung perkembangan siswa secara holistik.
                </h4>

                <ul>
                    <li>Membangun komunikasi yang transparan, komunikatif, dan solutif dengan wali murid sebagai mitra utama dalam pendidikan anak.</li>

                    <li>Mewadahi aspirasi dan kritik membangun dari wali murid untuk terus memacu peningkatan kualitas layanan pendidikan di SDN Ngletih 1.</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p class="mb-0">
                © 2026 SDN Ngletih 1. All Rights Reserved.
            </p>
        </div>
    </footer>

</body>
</html>