<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin | SDN Ngletih 1</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/admin-dashboard.css') }}">

</head>


<body>


<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="brand">

        <div class="brand-icon">
            <i class="bi bi-mortarboard-fill"></i>
        </div>

        <div class="brand-text">

            <h5>SDN Ngletih 1</h5>

            <small>Admin Panel</small>

        </div>

    </div>


    <div class="menu-title">
        Menu Utama
    </div>


    <ul class="sidebar-menu">

        <li>

            <a href="{{ route('admin.dashboard') }}"
               class="active">

                <i class="bi bi-grid-1x2-fill"></i>

                <span>Dashboard</span>

            </a>

        </li>


        <li>

            <a href="{{ route('berita.index') }}">

                <i class="bi bi-newspaper"></i>

                <span>Berita</span>

            </a>

        </li>


        <li>

            <a href="{{ route('galeri.index') }}">

                <i class="bi bi-images"></i>

                <span>Galeri</span>

            </a>

        </li>


        <li>

            <a href="{{ route('prestasi.index') }}">

                <i class="bi bi-trophy"></i>

                <span>Prestasi</span>

            </a>

        </li>


        <li>

            <a href="{{ route('ekstrakurikuler.index') }}">

                <i class="bi bi-stars"></i>

                <span>Ekstrakurikuler</span>

            </a>

        </li>


        <li>

            <a href="{{ route('sarpras.index') }}">

                <i class="bi bi-building"></i>

                <span>Sarpras</span>

            </a>

        </li>

    </ul>


    <div class="logout-area">

        <form
            action="{{ route('admin.logout') }}"
            method="POST">

            @csrf

            <button
                class="logout-btn"
                type="submit">

                <i class="bi bi-box-arrow-right me-2"></i>

                <span>Logout</span>

            </button>

        </form>

    </div>

</aside>



<!-- MAIN -->

<main class="main-content">


    <!-- TOPBAR -->

    <div class="topbar">

        <div class="topbar-title">

            <h6>Dashboard</h6>

            <small>
                Administrasi Website Sekolah
            </small>

        </div>


        <div class="admin-profile">

            <div>

                <small class="text-muted">
                    Administrator
                </small>

            </div>

            <div class="profile-icon">

                <i class="bi bi-person-fill"></i>

            </div>

        </div>

    </div>



    <!-- CONTENT -->

    <div class="content">


        <!-- WELCOME -->

        <div class="welcome-card">

            <h2>
                Selamat Datang, Admin 👋
            </h2>

            <p>
                Kelola informasi dan konten website
                SDN Ngletih 1 melalui dashboard ini.
            </p>

        </div>



        <!-- STATISTICS -->

        <div class="row g-4">


            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon icon-blue">

                        <i class="bi bi-newspaper"></i>

                    </div>

                    <h3>{{ $totalBerita }}</h3>

                    <p>Total Berita</p>

                </div>

            </div>


            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon icon-purple">

                        <i class="bi bi-images"></i>

                    </div>

                    <h3>{{ $totalGaleri }}</h3>

                    <p>Total Galeri</p>

                </div>

            </div>


            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon icon-green">

                        <i class="bi bi-trophy"></i>

                    </div>

                    <h3>{{ $totalPrestasi }}</h3>

                    <p>Total Prestasi</p>

                </div>

            </div>


            <div class="col-6 col-xl-3">

                <div class="stat-card">

                    <div class="stat-icon icon-orange">

                        <i class="bi bi-building"></i>

                    </div>

                    <h3>{{ $totalSarpras }}</h3>

                    <p>Total Sarpras</p>

                </div>

            </div>

        </div>



        <!-- MANAGEMENT -->

        <div class="section-title">

            <h4>Kelola Website</h4>

            <p>
                Pilih menu untuk mengelola konten website sekolah.
            </p>

        </div>


        <div class="row g-4">


            <!-- BERITA -->

            <div class="col-md-6 col-xl-4">

                <div class="management-card">

                    <div class="management-icon icon-blue">

                        <i class="bi bi-newspaper"></i>

                    </div>

                    <h5>Berita</h5>

                    <p>
                        Kelola berita, artikel, dan informasi
                        terbaru sekolah.
                    </p>

                    <a href="{{ route('berita.index') }}"
                       class="btn btn-primary manage-btn">

                        <i class="bi bi-arrow-right me-1"></i>

                        Kelola Berita

                    </a>

                </div>

            </div>


            <!-- GALERI -->

            <div class="col-md-6 col-xl-4">

                <div class="management-card">

                    <div class="management-icon icon-purple">

                        <i class="bi bi-images"></i>

                    </div>

                    <h5>Galeri</h5>

                    <p>
                        Kelola dokumentasi foto kegiatan
                        SDN Ngletih 1.
                    </p>

                    <a href="{{ route('galeri.index') }}"
                       class="btn btn-primary manage-btn">

                        <i class="bi bi-arrow-right me-1"></i>

                        Kelola Galeri

                    </a>

                </div>

            </div>


            <!-- PRESTASI -->

            <div class="col-md-6 col-xl-4">

                <div class="management-card">

                    <div class="management-icon icon-green">

                        <i class="bi bi-trophy"></i>

                    </div>

                    <h5>Prestasi</h5>

                    <p>
                        Kelola data prestasi akademik dan
                        non-akademik siswa.
                    </p>

                    <a href="{{ route('prestasi.index') }}"
                       class="btn btn-primary manage-btn">

                        <i class="bi bi-arrow-right me-1"></i>

                        Kelola Prestasi

                    </a>

                </div>

            </div>


            <!-- EKSTRAKURIKULER -->

            <div class="col-md-6 col-xl-4">

                <div class="management-card">

                    <div class="management-icon icon-orange">

                        <i class="bi bi-stars"></i>

                    </div>

                    <h5>Ekstrakurikuler</h5>

                    <p>
                        Kelola program dan kegiatan
                        ekstrakurikuler sekolah.
                    </p>

                    <a href="{{ route('ekstrakurikuler.index') }}"
                       class="btn btn-primary manage-btn">

                        <i class="bi bi-arrow-right me-1"></i>

                        Kelola Ekstrakurikuler

                    </a>

                </div>

            </div>


            <!-- SARPRAS -->

            <div class="col-md-6 col-xl-4">

                <div class="management-card">

                    <div class="management-icon icon-blue">

                        <i class="bi bi-building"></i>

                    </div>

                    <h5>Sarana & Prasarana</h5>

                    <p>
                        Kelola informasi fasilitas dan
                        sarana prasarana sekolah.
                    </p>

                    <a href="{{ route('sarpras.index') }}"
                       class="btn btn-primary manage-btn">

                        <i class="bi bi-arrow-right me-1"></i>

                        Kelola Sarpras

                    </a>

                </div>

            </div>


        </div>

    </div>

</main>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>