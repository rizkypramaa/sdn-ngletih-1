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

    <title>Pengaduan | SDN Ngletih 1</title>


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
                href="index.html">

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
                            href="aduan.html">
                            Aduan
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

<!-- HERO -->

<section class="layanan-hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-7">

<span class="layanan-badge">

<i class="bi bi-chat-dots-fill me-2"></i>

Layanan Aspirasi

</span>

<h1 class="layanan-title">

Layanan

<span>Pengaduan</span>

</h1>

<p class="layanan-text">

SDN Ngletih 1 menyediakan layanan pengaduan
untuk menerima kritik, saran, maupun laporan
dari masyarakat demi meningkatkan kualitas
pelayanan sekolah.

</p>

<a href="https://forms.gle/GoxFYcANVcYqpBTY8"

target="_blank"

class="btn btn-warning btn-lg">

<i class="bi bi-send-fill me-2"></i>

Isi Form Pengaduan

</a>

</div>

<div class="col-lg-5 text-center">

<img src="assets/images/aduan.png"

class="img-fluid layanan-image">

</div>

</div>

</div>

</section>

<!-- CONTENT -->

<section class="siladik-section">

<div class="container">

<div class="row g-4">

<div class="col-lg-4">

<div class="layanan-card">

<div class="layanan-icon">

<i class="bi bi-exclamation-circle-fill"></i>

</div>

<h3>Pengaduan</h3>

<p>

Menyampaikan laporan mengenai pelayanan sekolah.

</p>

</div>

</div>

<div class="col-lg-4">

<div class="layanan-card">

<div class="layanan-icon bg-success">

<i class="bi bi-lightbulb-fill"></i>

</div>

<h3>Saran</h3>

<p>

Memberikan masukan untuk meningkatkan mutu pelayanan.

</p>

</div>

</div>

<div class="col-lg-4">

<div class="layanan-card">

<div class="layanan-icon bg-warning text-dark">

<i class="bi bi-hand-thumbs-up-fill"></i>

</div>

<h3>Apresiasi</h3>

<p>

Memberikan penghargaan kepada guru maupun sekolah.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- INFORMASI -->

<section class="layanan-info">

<div class="container">

<div class="info-box">

<i class="bi bi-info-circle-fill"></i>

<div>

<h4>Informasi Pengaduan</h4>

<p>

Seluruh pengaduan akan diproses oleh pihak sekolah.

Harap mengisi data dengan benar agar pengaduan dapat ditindaklanjuti.

Estimasi respon maksimal 2×24 jam pada hari kerja.

</p>

</div>

</div>

</div>

</section>

<footer class="footer">

<div class="container text-center">

<p class="mb-0">

© 2026 SDN Ngletih 1

</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>