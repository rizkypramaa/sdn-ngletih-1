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

    <title>Maklumat Pelayanan | SDN Ngletih 1</title>


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

<!-- ==========================
        NAVBAR
========================== -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center"
            href="index.html">

            <img src="assets/images/logo ngletih.png"
                class="navbar-logo me-2">

            SDN Ngletih 1

        </a>

        <button class="navbar-toggler"
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

                        Maklumat Pelayanan

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

    <div class="container">

        <div class="text-center">

            <span class="section-badge">

                Informasi Pelayanan

            </span>

            <h1 class="info-title">

                Maklumat

                <span>Pelayanan</span>

            </h1>

            <p class="info-text">

                Maklumat pelayanan merupakan bentuk komitmen SDN Ngletih 1
                dalam memberikan pelayanan pendidikan yang berkualitas,
                transparan, cepat, serta sesuai dengan standar pelayanan
                yang telah ditetapkan.

            </p>

        </div>

    </div>

</section>

<!-- ==========================
        MAKLUMAT
========================== -->

<section class="service-list">

    <div class="container">

        <div class="service-box">

            <h2 class="text-center">

                Maklumat Pelayanan SDN Ngletih 1

            </h2>

            <p class="text-center text-muted mb-4">

                Berikut merupakan dokumen resmi Maklumat Pelayanan
                SDN Ngletih 1.

            </p>

            <img
                src="assets/images/maklumat-pelayanan.jpg"
                class="img-fluid"
                alt="Maklumat Pelayanan">

            <div class="text-center mt-4">

                <a href="assets/images/maklumat-pelayanan.jpg"
                    target="_blank"
                    class="btn btn-info-modern">

                    <i class="bi bi-arrows-fullscreen me-2"></i>

                    Lihat Gambar Penuh

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
        INFORMASI
========================== -->

<section class="py-5">

    <div class="container">

        <div class="information-box">

            <div class="row">

                <div class="col-lg-2 text-center">

                    <i class="bi bi-patch-check-fill display-2 text-success"></i>

                </div>

                <div class="col-lg-10">

                    <h3>

                        Makna Maklumat Pelayanan

                    </h3>

                    <p>

                        Maklumat Pelayanan merupakan pernyataan resmi
                        penyelenggara pelayanan kepada masyarakat
                        mengenai kesanggupan dalam melaksanakan pelayanan
                        sesuai dengan standar pelayanan yang telah
                        ditetapkan.

                    </p>

                    <p class="mb-0">

                        SDN Ngletih 1 berkomitmen memberikan pelayanan
                        yang cepat, transparan, akuntabel, ramah,
                        serta senantiasa melakukan perbaikan kualitas
                        pelayanan secara berkelanjutan.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
        FOOTER
========================== -->

<footer class="footer">

    <div class="container text-center">

        <p class="mb-0">

            © 2026 SDN Ngletih 1.
            All Rights Reserved.

        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>