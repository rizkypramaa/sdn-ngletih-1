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

    <title>FAQ | SDN Ngletih 1</title>


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
          href="{{ asset('assets/css/faq.css') }}">


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

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

<div class="container">

<a class="navbar-brand fw-bold"
href="{{ route('home') }}">

<img src="assets/images/logo ngletih.png"
class="navbar-logo me-2">

SDN Ngletih 1

</a>

</div>

</nav>


<section class="info-hero">

<div class="container text-center">

<span class="section-badge">

Pusat Bantuan

</span>

<h1 class="info-title">

Frequently Asked

<span>Questions</span>

</h1>

<p class="info-text">

Temukan jawaban atas pertanyaan yang paling sering diajukan
oleh orang tua, siswa maupun masyarakat.

</p>

</div>

</section>



<section class="py-5">

<div class="container">

<div class="faq-search">

<i class="bi bi-search"></i>

<input
type="text"
id="faqSearch"
placeholder="Cari pertanyaan...">

</div>



<div class="faq-list">

<!-- FAQ -->

<div class="faq-item">

<div class="faq-question">

<span>

Bagaimana cara mendaftar SPMB?

</span>

<i class="bi bi-plus-lg"></i>

</div>

<div class="faq-answer">

Pendaftaran SPMB dilakukan melalui menu
SPMB pada website SDN Ngletih 1 sesuai
jadwal yang telah diumumkan.

</div>

</div>



<div class="faq-item">

<div class="faq-question">

<span>

Apakah legalisasi ijazah dipungut biaya?

</span>

<i class="bi bi-plus-lg"></i>

</div>

<div class="faq-answer">

Tidak.
Seluruh pelayanan legalisasi ijazah
di SDN Ngletih 1 tidak dipungut biaya.

</div>

</div>



<div class="faq-item">

<div class="faq-question">

<span>

Bagaimana cara mutasi siswa?

</span>

<i class="bi bi-plus-lg"></i>

</div>

<div class="faq-answer">

Silakan membuka menu
Layanan → Mutasi
dan melengkapi seluruh persyaratan
yang telah ditentukan.

</div>

</div>



<div class="faq-item">

<div class="faq-question">

<span>

Bagaimana menghubungi sekolah?

</span>

<i class="bi bi-plus-lg"></i>

</div>

<div class="faq-answer">

Hubungi nomor sekolah,
email resmi,
atau datang langsung ke SDN Ngletih 1.

</div>

</div>



<div class="faq-item">

<div class="faq-question">

<span>

Dimana melihat berita terbaru?

</span>

<i class="bi bi-plus-lg"></i>

</div>

<div class="faq-answer">

Semua berita sekolah tersedia
pada menu Berita.

</div>

</div>

</div>

</div>

</section>



<footer class="footer">

<div class="container text-center">

© 2026 SDN Ngletih 1

</div>

</footer>



<script src="assets/js/faq.js"></script>

</body>
</html>