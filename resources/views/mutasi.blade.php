<!doctype html>
<html lang="id">
  <head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon"
          type="image/png"
          href="{{ asset('assets/images/logo ngletih.PNG') }}">

    <title>Mutasi Siswa | SDN Ngletih 1</title>


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
    <!-- ===========================
        NAVBAR
=========================== -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
      <div class="container">
        <a
          class="navbar-brand fw-bold d-flex align-items-center"
          href="index.html"
        >
          <img
            src="assets/images/logo.png"
            class="navbar-logo me-2"
            alt="Logo"
          />

          SDN Ngletih 1
        </a>

        <div class="ms-auto">
          <a href="layanan.html" class="btn btn-outline-primary rounded-pill">
            <i class="bi bi-arrow-left me-2"></i>

            Kembali
          </a>
        </div>
      </div>
    </nav>

    <!-- ===========================
        HERO
=========================== -->

    <section class="layanan-hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <span class="layanan-badge">
              <i class="bi bi-arrow-left-right me-2 text-center"></i>

              SILADIK SDN Ngletih 1
            </span>

            <h1 class="layanan-title">
              Mutasi

              <span>Peserta Didik</span>
            </h1>

            <p class="layanan-text">
              SDN Ngletih 1 melayani proses mutasi masuk maupun mutasi keluar
              peserta didik sesuai dengan ketentuan Dinas Pendidikan serta
              peraturan yang berlaku.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===========================
        CONTENT
=========================== -->

    <section class="siladik-section">
      <div class="container">
        <div class="row g-4">
          <!-- Persyaratan -->

          <div class="col-lg-6">
            <div class="layanan-card">
              <div class="layanan-icon">
                <i class="bi bi-file-earmark-check-fill"></i>
              </div>

              <h3>Persyaratan Mutasi Siswa</h3>

              <ul>
                <li>Surat permohonan pindah/mutasi dari orang tua/wali.</li>

                <a
                  href="https://drive.google.com/file/d/136q9obh5JZdqd9m0ALZmOj-0fOPvZoTD/view?usp=drive_link"
                  target="_blank"
                  >Unduh Surat Permohonan pindah/mutasi</a
                >

                <li>Surat keterangan diterima oleh sekolah yang dituju</li>

                <li>Surat pindah/mutasi dari sekolah asal</li>

                <li>Fotokopi Rapor siswa.</li>

                <li>
                  NISN siswa yang dapat diunduh dari laman
                  <a href="https://nisn.data.kemdikbud.go.id" target="_blank"
                    >https://nisn.data.kemdikbud.go.id</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <!-- Prosedur -->

          <div class="col-lg-6">
            <div class="layanan-card">
              <div class="layanan-icon bg-success">
                <i class="bi bi-diagram-3-fill"></i>
              </div>

              <h3>Alur Pelayanan</h3>

              <ol>
                <li>Mengisi formulir secara daring</li>

                <li>Mengunggah dokumen persyaratan</li>

                <li>Operator melakukan verifikasi.</li>

                <li>Kepala sekolah memberikan persetujuan</li>

                <li>
                  Pemohon menerima pemberitahuan melalui WhatsApp atau email.
                </li>

                <li>Dokumen mutasi diambil sesuai jadwal</li>
              </ol>
            </div>
          </div>

          <!-- Waktu -->

          <div class="col-lg-6">
            <div class="layanan-card">
              <div class="layanan-icon bg-warning text-dark">
                <i class="bi bi-clock-history"></i>
              </div>

              <h3>Jam Pelayanan</h3>

              <table class="table">
                <tr>
                  <th>Hari</th>

                  <td>Senin - Jumat</td>
                </tr>

                <tr>
                  <th>Jam</th>

                  <td>08.00 - 12.00 WIB</td>
                </tr>

                <tr>
                  <th>Estimasi</th>

                  <td>2 - 3 Hari Kerja</td>
                </tr>

                <tr>
                  <th>Biaya</th>

                  <td><strong>Gratis</strong></td>
                </tr>
              </table>
            </div>
          </div>

          <!-- Informasi -->

          <div class="col-lg-6">
            <div class="layanan-card">
              <div class="layanan-icon bg-danger">
                <i class="bi bi-headset"></i>
              </div>

              <h3>Informasi Layanan</h3>

              <p>
                Apabila terdapat pertanyaan mengenai proses mutasi peserta
                didik, silakan menghubungi operator SDN Ngletih 1.
              </p>

              <p>
                <i class="bi bi-envelope-fill me-2"></i>

                sdnegeringletih1@gmail.com
              </p>

              <p>
                <i class="bi bi-telephone-fill me-2"></i>

                (0354) 123456
              </p>

              <a
                href="https://forms.gle/4ScLSUmW2Kc8AJVQ7"
                target="_blank"
                class="btn btn-primary rounded-pill w-100 mt-3"
              >
                <i class="bi bi-send-fill me-2"></i>

                Ajukan Permohonan
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===========================
        PERSYARATAN TAMBAHAN
=========================== -->

    <section class="layanan-info">
      <div class="container">
        <div class="info-box">
          <i class="bi bi-info-circle-fill"></i>

          <div>
            <h4>Informasi Penting</h4>

            <p>
              Mutasi peserta didik hanya dapat diproses apabila seluruh
              persyaratan administrasi telah lengkap. Keputusan penerimaan
              mutasi mengikuti daya tampung dan ketentuan yang berlaku di SDN
              Ngletih 1.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===========================
        FOOTER
=========================== -->

    <footer class="footer">
      <div class="container text-center">
        <p class="mb-0">© 2026 SDN Ngletih 1. All Rights Reserved.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
