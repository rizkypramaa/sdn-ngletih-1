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

    <title>SP4N-LAPOR! | SDN Ngletih 1</title>


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
          href="{{ asset('assets/css/informasi.css') }}">


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
========================== -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center"
            href="index.html">

            <img src="assets/images/logo ngletih.png"
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

                    <a class="nav-link active"
                        href="#">

                        SP4N-LAPOR!

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- ==========================
        HERO
========================== -->

<section class="info-hero">

    <div class="container text-center">

        <span class="section-badge">

            Pelayanan Pengaduan Nasional

        </span>

        <h1 class="info-title">

            SP4N

            <span>LAPOR!</span>

        </h1>

        <p class="info-text">

            Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional
            yang dapat digunakan masyarakat untuk menyampaikan
            aspirasi maupun pengaduan kepada instansi pemerintah.

        </p>

    </div>

</section>

<!-- ==========================
        PENJELASAN
========================== -->

<section class="service-list">

    <div class="container">

        <div class="service-box">

            <div class="row align-items-center">

                <div class="col-lg-5 text-center">

                    <img src="assets/images/sp4n-lapor.png"
                        class="img-fluid"
                        alt="SP4N LAPOR">

                </div>

                <div class="col-lg-7">

                    <h2>

                        Apa itu SP4N-LAPOR!?

                    </h2>

                    <p>

                        SP4N-LAPOR! merupakan layanan penyampaian
                        aspirasi dan pengaduan masyarakat secara
                        online yang dikelola Pemerintah Republik Indonesia.

                    </p>

                    <p>

                        Melalui sistem ini masyarakat dapat
                        menyampaikan laporan mengenai pelayanan publik,
                        termasuk pelayanan pendidikan pada SDN Ngletih 1.

                    </p>

                    <a href="https://www.lapor.go.id/"
                        target="_blank"
                        class="btn btn-info-modern mt-3">

                        <i class="bi bi-box-arrow-up-right me-2"></i>

                        Kunjungi Website SP4N-LAPOR!

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
        MANFAAT
========================== -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-badge">

                Manfaat

            </span>

            <h2 class="section-title">

                Mengapa Menggunakan SP4N-LAPOR!?

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="info-card-page text-center">

                    <i class="bi bi-chat-left-text-fill display-4 text-primary"></i>

                    <h3 class="mt-3">

                        Aspirasi

                    </h3>

                    <p>

                        Menyampaikan saran dan masukan
                        untuk peningkatan pelayanan publik.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="info-card-page text-center">

                    <i class="bi bi-shield-check display-4 text-success"></i>

                    <h3 class="mt-3">

                        Transparan

                    </h3>

                    <p>

                        Seluruh laporan diproses secara
                        terbuka dan dapat dipantau.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="info-card-page text-center">

                    <i class="bi bi-lightning-charge-fill display-4 text-warning"></i>

                    <h3 class="mt-3">

                        Cepat

                    </h3>

                    <p>

                        Laporan diteruskan kepada
                        instansi yang berwenang.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
        ALUR
========================== -->

<section class="py-5">

    <div class="container">

        <div class="information-box">

            <h2 class="mb-4">

                Alur Penyampaian Pengaduan

            </h2>

            <div class="row text-center">

                <div class="col-lg-3">

                    <i class="bi bi-pencil-square display-4 text-primary"></i>

                    <h5 class="mt-3">

                        1. Tulis Laporan

                    </h5>

                </div>

                <div class="col-lg-3">

                    <i class="bi bi-send-fill display-4 text-success"></i>

                    <h5 class="mt-3">

                        2. Kirim

                    </h5>

                </div>

                <div class="col-lg-3">

                    <i class="bi bi-search display-4 text-warning"></i>

                    <h5 class="mt-3">

                        3. Verifikasi

                    </h5>

                </div>

                <div class="col-lg-3">

                    <i class="bi bi-check-circle-fill display-4 text-danger"></i>

                    <h5 class="mt-3">

                        4. Tindak Lanjut

                    </h5>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
        CTA
========================== -->

<section class="py-5">

    <div class="container">

        <div class="information-box text-center">

            <i class="bi bi-megaphone-fill display-1 text-primary mb-4"></i>

            <h2>

                Sampaikan Aspirasi Anda

            </h2>

            <p>

                Mari bersama-sama meningkatkan kualitas pelayanan
                publik dengan menyampaikan kritik, saran,
                maupun pengaduan melalui SP4N-LAPOR!.

            </p>

            <a href="https://www.lapor.go.id/"
                target="_blank"
                class="btn btn-info-modern mt-3">

                <i class="bi bi-box-arrow-up-right me-2"></i>

                Buka SP4N-LAPOR!

            </a>

        </div>

    </div>

</section>

<!-- ==========================
        FOOTER
========================== -->

<footer class="footer">

    <div class="container text-center">

        <p class="mb-0">

            © 2026 SDN Ngletih 1. All Rights Reserved.

        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>