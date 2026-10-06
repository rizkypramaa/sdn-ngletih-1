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

    <title>Standar Pelayanan | SDN Ngletih 1</title>


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
          href="{{ asset('assets/css/standar-pelayanan.css') }}">


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

<!-- =======================================================
                        NAVBAR
======================================================= -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <a href="index.html"
            class="navbar-brand d-flex align-items-center fw-bold">

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

                    <a href="index.html"
                        class="nav-link">

                        Beranda

                    </a>

                </li>

                <li class="nav-item">

                    <a href="#"
                        class="nav-link active fw-semibold">

                        Standar Pelayanan

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- =======================================================
                        HERO
======================================================= -->

<section class="sp-hero">

    <div class="container">

        <div class="text-center sp-hero-content">

            <span class="sp-badge">

                <i class="bi bi-file-earmark-text-fill me-2"></i>

                INFORMASI PELAYANAN

            </span>

            <h1>

                Standar Pelayanan

            </h1>

            <p>

                Standar Pelayanan SDN Ngletih 1 merupakan pedoman dalam
                penyelenggaraan pelayanan administrasi sekolah yang
                profesional, transparan, mudah, cepat, dan akuntabel
                kepada seluruh masyarakat.

            </p>

        </div>

    </div>

</section>

<!-- =======================================================
                STANDAR PELAYANAN
======================================================= -->

<section class="sp-section">

<div class="container">

<!-- =======================================================
                    STANDAR PELAYANAN 1
======================================================= -->

<div class="sp-service-card">

    <div class="sp-header">

        <div class="sp-number">

            1

        </div>

        <div>

            <h2>

                Standar Pelayanan SPMB

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/spmb.jpeg"
                    alt="Standar Pelayanan SPMB"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/spmb-alur.jpg"
                    alt="Alur Pelayanan SPMB"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =======================================================
                    STANDAR PELAYANAN 2
======================================================= -->

<div class="sp-service-card sp-card-even">

    <div class="sp-header">

        <div class="sp-number">

            2

        </div>

        <div>

            <h2>

                Standar Pelayanan Legalisasi Ijazah

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/legalisasi.jpeg"
                    class="img-fluid sp-image"
                    alt="Standar Pelayanan Legalisasi"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/legalisasi-alur.jpg"
                    class="img-fluid sp-image"
                    alt="Alur Pelayanan Legalisasi"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>
<!-- =======================================================
                    STANDAR PELAYANAN 3
======================================================= -->

<div class="sp-service-card">

    <div class="sp-header">

        <div class="sp-number">

            3

        </div>

        <div>

            <h2>

                Standar Pelayanan Mutasi Siswa

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/mutasi.jpeg"
                    alt="Standar Pelayanan Mutasi Siswa"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/mutasi-alur.jpg"
                    alt="Alur Pelayanan Mutasi Siswa"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =======================================================
                    STANDAR PELAYANAN 4
======================================================= -->

<div class="sp-service-card sp-card-even">

    <div class="sp-header">

        <div class="sp-number">

            4

        </div>

        <div>

            <h2>

                Standar Pelayanan Pengajuan Surat Keterangan Pengganti Ijazah

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/pengganti.jpeg"
                    class="img-fluid sp-image"
                    alt="Standar Pelayanan Pengajuan Surat Keterangan Pengganti Ijazah"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/pengganti-alur.jpg"
                    class="img-fluid sp-image"
                    alt="Alur Pelayanan Pengajuan Surat Keterangan Pengganti Ijazah"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>
<!-- =======================================================
                    STANDAR PELAYANAN 5
======================================================= -->

<div class="sp-service-card">

    <div class="sp-header">

        <div class="sp-number">

            5
        </div>

        <div>

            <h2>
                Standar Pelayanan Surat Keterangan Kesalahan Penulisan Ijazah
            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/kesalahan.jpeg"
                    alt="Standar Pelayanan Surat Keterangan Kesalahan Penulisan Ijazah"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/kesalahan-alur.jpg"
                    alt="Alur Pelayanan Surat Keterangan Kesalahan Penulisan Ijazah"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =======================================================
                    STANDAR PELAYANAN 6
======================================================= -->

<div class="sp-service-card sp-card-even">

    <div class="sp-header">

        <div class="sp-number">

            6

        </div>

        <div>

            <h2>

                Standar Pelayanan Pengajuan Sertifikat/Piagam Penghargaan

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/piagam.jpeg"
                    class="img-fluid sp-image"
                    alt="Standar Pelayanan Pengajuan Sertifikat/Piagam Penghargaan"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/piagam-alur.jpg"
                    class="img-fluid sp-image"
                    alt="Alur Pelayanan Pengajuan Sertifikat/Piagam Penghargaan"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>
<!-- =======================================================
                    STANDAR PELAYANAN 7
======================================================= -->

<div class="sp-service-card">

    <div class="sp-header">

        <div class="sp-number">

            7

        </div>

        <div>

            <h2>

                Standar Pelayanan Pengesahan Dokumen Kurikulum Satuan Pendidikan

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/kurikulum.jpeg"
                    alt="Standar Pelayanan Pengesahan Dokumen Kurikulum Satuan Pendidikan"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/kurikulum-alur.jpg"
                    alt="Alur Pelayanan Pengesahan Dokumen Kurikulum Satuan Pendidikan"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =======================================================
                    STANDAR PELAYANAN 8
======================================================= -->

<div class="sp-service-card sp-card-even">

    <div class="sp-header">

        <div class="sp-number">

            8

        </div>

        <div>

            <h2>

                 Pelayanan UKS

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/uks.jpeg"
                    class="img-fluid sp-image"
                    alt="Standar Pelayanan UKS"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/uks-alur.jpg"
                    class="img-fluid sp-image"
                    alt="Alur Pelayanan UKS"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>
<!-- =======================================================
                    STANDAR PELAYANAN 9
======================================================= -->

<div class="sp-service-card">

    <div class="sp-header">

        <div class="sp-number">

            9

        </div>

        <div>

            <h2>

                 Pelayanan Perpustakaan

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/perpustakaan.jpeg"
                    alt="Standar Pelayanan Perpustakaan"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/perpustakaan-alur.jpg"
                    alt="Alur Pelayanan Perpustakaan"
                    class="img-fluid sp-image"

                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =======================================================
                    STANDAR PELAYANAN 10
======================================================= -->

<div class="sp-service-card sp-card-even">

    <div class="sp-header">

        <div class="sp-number">

            10

        </div>

        <div>

            <h2>

                 Pelayanan Kantin

            </h2>

        </div>

    </div>

    <div class="row g-4">

        <!-- Poster Standar -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/kantin.jpeg"
                    class="img-fluid sp-image"
                    alt="Standar Pelayanan Kantin"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-file-earmark-text me-2"></i>

                    Standar Pelayanan

                </div>

            </div>

        </div>

        <!-- Poster Alur -->

        <div class="col-lg-6">

            <div class="sp-poster">

                <img src="assets/images/standar/kantin-alur.jpg"
                    class="img-fluid sp-image"
                    alt="Alur Pelayanan Kantin"
                    onclick="previewImage(this.src)">

                <div class="sp-title">

                    <i class="bi bi-diagram-3 me-2"></i>

                    Alur Pelayanan

                </div>

            </div>

        </div>

    </div>

</div>

</div>

</section>

<!-- =======================================================
                        MODAL PREVIEW
======================================================= -->

<div class="modal fade"
    id="imagePreview"
    tabindex="-1"
    aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content border-0 bg-transparent">

            <button
                type="button"
                class="btn-close btn-close-white ms-auto mb-3"
                data-bs-dismiss="modal">
            </button>

            <img
                id="previewImg"
                class="img-fluid rounded-4 shadow-lg"
                alt="Preview Gambar">

        </div>

    </div>

</div>

<!-- =======================================================
                        FOOTER
======================================================= -->

<footer class="footer py-4">

    <div class="container text-center">

        <p class="mb-1">

            © 2026 SDN Ngletih 1 Kota Kediri

        </p>

        <small class="text-muted">

            Website Resmi SDN Ngletih 1

        </small>

    </div>

</footer>

<!-- =======================================================
                    BOOTSTRAP JS
======================================================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- =======================================================
                    PREVIEW GAMBAR
======================================================= -->

<script>

function previewImage(image){

    document.getElementById("previewImg").src = image;

    const modal = new bootstrap.Modal(
        document.getElementById("imagePreview")
    );

    modal.show();

}

</script>

</body>

</html>