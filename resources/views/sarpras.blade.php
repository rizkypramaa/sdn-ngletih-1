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

    <title>Sarana & Prasarana | SDN Ngletih 1</title>


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
          href="{{ asset('assets/css/sarpras.css') }}">


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

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

        <div class="container">

            <a class="navbar-brand d-flex align-items-center"
                href="index.html">

                <img src="assets/images/logo ngletih.png"
                    class="navbar-logo">

                SDN Ngletih 1

            </a>

        </div>

    </nav>

    <!-- HERO -->

    <section class="sarpras-hero">

        <div class="container text-center">

            <span class="section-badge">

                Fasilitas Sekolah

            </span>

            <h1 class="sarpras-title">

                Sarana &
                <span>Prasarana</span>

            </h1>

            <p class="sarpras-subtitle">

                SDN Ngletih 1 memiliki berbagai fasilitas yang mendukung
                kegiatan belajar mengajar, pembinaan karakter,
                serta pengembangan potensi peserta didik.

            </p>

        </div>

    </section>

    <!-- CONTENT -->

    <!-- CONTENT -->

<section class="sarpras-section">

    <div class="container">

        @forelse($sarpras as $item)

            <div class="sarpras-card">

                <h2>

                    @if($item->icon)
                        <i class="{{ $item->icon }}"></i>
                    @endif

                    {{ $item->nama }}

                </h2>


                <div class="row g-3 mb-4">

                    @foreach([
                        $item->gambar,
                        $item->gambar2,
                        $item->gambar3
                    ] as $gambar)

                        @if($gambar)

                            <div class="col-md-4">

                                <img
                                    src="{{ asset('storage/' . $gambar) }}"
                                    class="img-fluid sarpras-img"
                                    alt="{{ $item->nama }}">

                            </div>

                        @endif

                    @endforeach

                </div>


                <p>
                    {{ $item->deskripsi }}
                </p>

            </div>

        @empty

            <div class="text-center py-5">

                <p>
                    Data sarana dan prasarana belum tersedia.
                </p>

            </div>

        @endforelse

    </div>

</section>

    <!-- FOOTER -->

    <footer class="footer">

        <div class="container text-center">

            © 2026 SDN Ngletih 1

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>