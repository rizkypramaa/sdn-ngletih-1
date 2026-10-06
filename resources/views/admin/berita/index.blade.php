<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Kelola Berita | SDN Ngletih 1</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >

</head>


<body class="bg-light">


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-dark bg-dark shadow-sm">

    <div class="container">

        <a href="{{ route('admin.dashboard') }}"
           class="navbar-brand fw-bold">

            <i class="bi bi-speedometer2 me-2"></i>

            Admin SDN Ngletih 1

        </a>


        <div class="d-flex align-items-center gap-2">

            <a href="{{ route('berita') }}"
               target="_blank"
               class="btn btn-outline-light btn-sm">

                <i class="bi bi-eye me-1"></i>

                Lihat Website

            </a>


            <form action="{{ route('admin.logout') }}"
                  method="POST"
                  class="d-inline">

                @csrf

                <button type="submit"
                        class="btn btn-danger btn-sm">

                    <i class="bi bi-box-arrow-right me-1"></i>

                    Logout

                </button>

            </form>

        </div>

    </div>

</nav>



<!-- =====================================================
     CONTENT
===================================================== -->

<div class="container py-4">


    <!-- HEADER -->

    <div class="d-flex justify-content-between
                align-items-center
                flex-wrap
                gap-3
                mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                <i class="bi bi-newspaper me-2"></i>

                Kelola Berita

            </h2>

            <p class="text-muted mb-0">

                Kelola berita yang ditampilkan pada website
                SDN Ngletih 1.

            </p>

        </div>


        <a href="{{ route('berita.create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>

            Tambah Berita

        </a>

    </div>



    <!-- =================================================
         SUCCESS MESSAGE
    ================================================== -->

    @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show"
             role="alert">

            <i class="bi bi-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif



    <!-- =================================================
         ERROR MESSAGE
    ================================================== -->

    @if (session('error'))

        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">

            <i class="bi bi-exclamation-circle me-2"></i>

            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif



    <!-- =================================================
         TOTAL BERITA
    ================================================== -->

    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body">

            <div class="d-flex align-items-center">

                <div class="bg-primary text-white rounded p-3 me-3">

                    <i class="bi bi-newspaper fs-4"></i>

                </div>

                <div>

                    <div class="text-muted small">

                        Total Berita

                    </div>

                    <div class="fs-4 fw-bold">

                        {{ $beritas->count() }}

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- =================================================
         TABLE BERITA
    ================================================== -->

    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">


            @if ($beritas->count() > 0)

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">


                        <!-- TABLE HEADER -->

                        <thead class="table-dark">

                            <tr>

                                <th style="width: 70px;"
                                    class="text-center">

                                    No.

                                </th>

                                <th style="width: 180px;">

                                    Gambar

                                </th>

                                <th>

                                    Judul Berita

                                </th>

                                <th style="width: 160px;">

                                    Kategori

                                </th>

                                <th style="width: 150px;">

                                    Tanggal

                                </th>

                                <th style="width: 210px;"
                                    class="text-center">

                                    Aksi

                                </th>

                            </tr>

                        </thead>


                        <!-- TABLE BODY -->

                        <tbody>

                            @foreach ($beritas as $index => $berita)

                                <tr>


                                    <!-- NOMOR -->

                                    <td class="text-center">

                                        {{ $index + 1 }}

                                    </td>



                                    <!-- GAMBAR -->

                                    <td>

                                        @if ($berita->gambar)

                                            <img
                                                src="{{ asset('storage/' . $berita->gambar) }}"
                                                alt="{{ $berita->judul }}"
                                                class="rounded"
                                                style="
                                                    width: 150px;
                                                    height: 90px;
                                                    object-fit: cover;
                                                "
                                            >

                                        @else

                                            <div
                                                class="bg-light border rounded d-flex
                                                       align-items-center
                                                       justify-content-center"
                                                style="
                                                    width: 150px;
                                                    height: 90px;
                                                "
                                            >

                                                <span class="text-muted">

                                                    <i class="bi bi-image me-1"></i>

                                                    Tidak ada gambar

                                                </span>

                                            </div>

                                        @endif

                                    </td>



                                    <!-- JUDUL -->

                                    <td>

                                        <div class="fw-bold">

                                            {{ $berita->judul }}

                                        </div>


                                        @if ($berita->gambar2 || $berita->gambar3)

                                            <small class="text-muted">

                                                <i class="bi bi-images me-1"></i>

                                                {{ collect([
                                                    $berita->gambar,
                                                    $berita->gambar2,
                                                    $berita->gambar3
                                                ])->filter()->count() }}

                                                gambar

                                            </small>

                                        @endif

                                    </td>



                                    <!-- KATEGORI -->

                                    <td>

                                        @if ($berita->kategori)

                                            <span class="badge bg-primary">

                                                {{ $berita->kategori }}

                                            </span>

                                        @else

                                            <span class="text-muted">

                                                -

                                            </span>

                                        @endif

                                    </td>



                                    <!-- TANGGAL -->

                                    <td>

                                        <i class="bi bi-calendar-event me-1"></i>

                                        {{ \Carbon\Carbon::parse($berita->tanggal)->format('d-m-Y') }}

                                    </td>



                                    <!-- AKSI -->

                                    <td>

                                        <div class="d-flex
                                                    justify-content-center
                                                    gap-1
                                                    flex-wrap">


                                            <!-- LIHAT -->

                                            <a
                                                href="{{ route('berita.show', $berita->id) }}"
                                                class="btn btn-info btn-sm text-white"
                                                title="Lihat"
                                            >

                                                <i class="bi bi-eye"></i>

                                            </a>



                                            <!-- EDIT -->

                                            <a
                                                href="{{ route('berita.edit', $berita->id) }}"
                                                class="btn btn-warning btn-sm"
                                                title="Edit"
                                            >

                                                <i class="bi bi-pencil-square"></i>

                                            </a>



                                            <!-- HAPUS -->

                                            <form
                                                action="{{ route('berita.destroy', $berita->id) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Hapus"
                                                >

                                                    <i class="bi bi-trash"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <!-- =========================================
                     BELUM ADA BERITA
                ========================================== -->

                <div class="text-center py-5">

                    <i class="bi bi-newspaper display-1 text-muted"></i>

                    <h4 class="mt-3">

                        Belum Ada Berita

                    </h4>

                    <p class="text-muted">

                        Belum ada berita yang ditambahkan
                        ke dalam database.

                    </p>

                    <a href="{{ route('berita.create') }}"
                       class="btn btn-primary">

                        <i class="bi bi-plus-lg me-1"></i>

                        Tambah Berita

                    </a>

                </div>

            @endif

        </div>

    </div>

</div>



<!-- =====================================================
     BOOTSTRAP JS
===================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>