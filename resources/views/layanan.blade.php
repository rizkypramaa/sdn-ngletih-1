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

    <title> Layanan Sekolah | SDN Ngletih 1</title>


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
          href="{{ asset('assets/css/layanan.css') }}">


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
                            href="{{ route('home') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fw-semibold"
                            href="{{ route('layanan') }}">
                            Layanan
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- ===========================
            HERO
    ============================ -->

    <section class="layanan-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <span class="layanan-badge">

                        <i class="bi bi-grid-fill me-2"></i>

                        Pelayanan Digital Sekolah

                    </span>

                    <h1 class="layanan-title">

                        Layanan

                        <span>SDN Ngletih 1</span>

                    </h1>

                    <p class="layanan-text">

                        SDN Ngletih 1 menyediakan berbagai layanan administrasi
                        sekolah secara mudah, cepat, transparan, dan dapat
                        diakses secara daring melalui Sistem Layanan Digital
                        (SILADIK).

                    </p>

                    <a href="#siladik"
                        class="btn btn-warning btn-lg">

                        <i class="bi bi-arrow-down-circle me-2"></i>

                        Lihat Layanan

                    </a>

                </div>

                <div class="col-lg-5 text-center">

                    <img src="assets/images/service.png"
                        class="img-fluid layanan-image"
                        alt="Layanan">

                </div>

            </div>

        </div>

    </section>

    <!-- ===========================
            SILADIK
    ============================ -->

    <section id="siladik"
        class="siladik-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-badge">

                    Pelayanan Sekolah

                </span>

                <h2 class="section-title">

                    SILADIK

                </h2>

                <p class="section-subtitle">

                    Sistem Layanan Digital SDN Ngletih 1
                    menyediakan pelayanan administrasi
                    sekolah secara online.

                </p>

            </div>

            <div class="row g-4">

                <!-- Card 1 -->

                <div class="col-lg-6">

                    <div class="layanan-card">

                        <div class="layanan-icon">

                            <i class="bi bi-patch-check-fill"></i>

                        </div>

                        <h3>

                            Legalisasi Ijazah / STTB

                        </h3>

                        <p>

                            Pelayanan legalisasi ijazah atau STTB
                            bagi alumni SDN Ngletih 1 secara
                            online maupun langsung di sekolah.

                        </p>

                        <ul>

                            <li>

                                Persyaratan

                            </li>

                            <li>

                                Alur Pelayanan

                            </li>

                            <li>

                                Gratis

                            </li>

                            <li>

                                Estimasi 2–3 Hari

                            </li>

                        </ul>

                        <a href="{{ route('legalisasi') }}"
                            class="btn btn-primary w-100 mt-4">

                            Detail Layanan

                        </a>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="col-lg-6">

                    <div class="layanan-card">

                        <div class="layanan-icon bg-success">

                            <i class="bi bi-arrow-left-right"></i>

                        </div>

                        <h3>

                            Mutasi Siswa

                        </h3>

                        <p>

                            Pelayanan mutasi masuk dan mutasi keluar
                            bagi peserta didik SDN Ngletih 1.

                        </p>

                        <ul>

                            <li>

                                Persyaratan

                            </li>

                            <li>

                                Alur Pelayanan

                            </li>

                            <li>

                                Gratis

                            </li>

                            <li>

                                Estimasi 1–2 Hari

                            </li>

                        </ul>

                        <a href="{{ route('mutasi') }}"
                            class="btn btn-primary w-100 mt-4">

                            Detail Layanan

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ===========================
            INFORMASI
    ============================ -->

    <section class="layanan-info">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="info-box">

                        <i class="bi bi-info-circle-fill"></i>

                        <div>

                            <h4>

                                Informasi Pelayanan

                            </h4>

                            <p>

                                Seluruh layanan administrasi SDN Ngletih 1
                                tidak dipungut biaya (GRATIS).
                                Pastikan seluruh dokumen persyaratan telah
                                dipersiapkan sebelum mengajukan layanan.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ===========================
            FOOTER
    ============================ -->

    <footer class="footer">

        <div class="container text-center">

            <p class="mb-0">

                © 2026 SDN Ngletih 1

            </p>

        </div>

    </footer>

    <!-- Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>