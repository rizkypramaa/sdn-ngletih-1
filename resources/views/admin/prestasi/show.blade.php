<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Prestasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Detail Prestasi</h1>

        <a href="{{ route('prestasi.index') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>


    <div class="card">

        <div class="card-body">

            <h3 class="mb-4">
                {{ $prestasi->judul }}
            </h3>


            <div class="mb-3">

                <strong>Nama Siswa:</strong>

                <div class="mt-1">
                    {!! nl2br(e($prestasi->nama)) !!}
                </div>

            </div>


            <div class="mb-3">

                <strong>Tingkat:</strong>

                <div>
                    {{ $prestasi->tingkat }}
                </div>

            </div>


            <div class="mb-3">

                <strong>Tahun:</strong>

                <div>
                    {{ $prestasi->tahun }}
                </div>

            </div>


            <div class="mb-4">

                <strong>Kategori:</strong>

                <div>

                    @if($prestasi->kategori == 'Akademik')

                        <span class="badge bg-primary">
                            Akademik
                        </span>

                    @else

                        <span class="badge bg-success">
                            Non Akademik
                        </span>

                    @endif

                </div>

            </div>


            <a href="{{ route('prestasi.edit', $prestasi->id) }}"
               class="btn btn-warning">

                <i class="bi bi-pencil"></i>
                Edit

            </a>

        </div>

    </div>

</div>

</body>
</html>