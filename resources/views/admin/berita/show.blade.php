<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $berita->judul }} | Kelola Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">

            <a href="{{ route('admin.dashboard') }}"
               class="navbar-brand fw-bold">
                Admin SDN Ngletih 1
            </a>

            <div class="d-flex align-items-center gap-2">

                <a href="{{ route('berita') }}"
                   target="_blank"
                   class="btn btn-outline-light btn-sm">
                    <i class="bi bi-globe"></i>
                    Lihat Website
                </a>

                <form action="{{ route('admin.logout') }}"
                      method="POST"
                      class="m-0">
                    @csrf

                    <button type="submit"
                            class="btn btn-danger btn-sm">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </nav>


    {{-- CONTENT --}}
    <div class="container py-4">

        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    Detail Berita
                </h2>

                <p class="text-muted mb-0">
                    Melihat detail berita yang tersimpan di database.
                </p>
            </div>

            <div class="d-flex gap-2">

                <a href="{{ route('berita.index') }}"
                   class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

                <a href="{{ route('berita.edit', $berita->id) }}"
                   class="btn btn-warning">
                    <i class="bi bi-pencil"></i>
                    Edit
                </a>

            </div>

        </div>


        {{-- DETAIL CARD --}}
        <div class="card border-0 shadow-sm">

            <div class="card-body p-4">

                {{-- KATEGORI --}}
                <div class="mb-3">

                    <span class="badge bg-primary">
                        {{ $berita->kategori ?? 'Informasi Sekolah' }}
                    </span>

                </div>


                {{-- JUDUL --}}
                <h1 class="fw-bold mb-3">
                    {{ $berita->judul }}
                </h1>


                {{-- META --}}
                <div class="text-muted mb-4">

                    <i class="bi bi-calendar-event"></i>

                    {{ \Carbon\Carbon::parse($berita->tanggal)->format('d-m-Y') }}

                    <span class="mx-2">•</span>

                    <i class="bi bi-link-45deg"></i>

                    {{ $berita->slug }}

                </div>


                {{-- GAMBAR --}}
                @if ($berita->gambar || $berita->gambar2 || $berita->gambar3)

                    <div class="row g-3 mb-4">

                        {{-- GAMBAR 1 --}}
                        @if ($berita->gambar)

                            <div class="col-md-4">

                                <div class="card border">

                                    <img src="{{ asset('storage/' . $berita->gambar) }}"
                                         class="card-img-top"
                                         style="height: 250px; object-fit: cover;"
                                         alt="{{ $berita->judul }}">

                                </div>

                            </div>

                        @endif


                        {{-- GAMBAR 2 --}}
                        @if ($berita->gambar2)

                            <div class="col-md-4">

                                <div class="card border">

                                    <img src="{{ asset('storage/' . $berita->gambar2) }}"
                                         class="card-img-top"
                                         style="height: 250px; object-fit: cover;"
                                         alt="{{ $berita->judul }}">

                                </div>

                            </div>

                        @endif


                        {{-- GAMBAR 3 --}}
                        @if ($berita->gambar3)

                            <div class="col-md-4">

                                <div class="card border">

                                    <img src="{{ asset('storage/' . $berita->gambar3) }}"
                                         class="card-img-top"
                                         style="height: 250px; object-fit: cover;"
                                         alt="{{ $berita->judul }}">

                                </div>

                            </div>

                        @endif

                    </div>

                @else

                    <div class="alert alert-secondary">
                        <i class="bi bi-image"></i>
                        Berita ini tidak memiliki gambar.
                    </div>

                @endif


                {{-- ISI BERITA --}}
                <div class="border-top pt-4">

                    <h5 class="fw-bold mb-3">
                        Isi Berita
                    </h5>

                    <div style="white-space: pre-line; line-height: 1.8;">
                        {{ $berita->isi }}
                    </div>

                </div>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>  