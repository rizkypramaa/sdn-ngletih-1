<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $galeri->judul }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h1>{{ $galeri->judul }}</h1>

    <hr>

    @if($galeri->gambar)

        <div class="mb-4">

            <img src="{{ asset('storage/' . $galeri->gambar) }}"
                 class="img-fluid rounded"
                 style="max-width: 600px;">

        </div>

    @endif


    <p>
        <strong>Tanggal:</strong>
        {{ $galeri->tanggal }}
    </p>


    <p>
        <strong>Deskripsi:</strong>
    </p>

    <p>
        {{ $galeri->deskripsi }}
    </p>


    <a href="{{ route('galeri.index') }}"
       class="btn btn-secondary">

        Kembali

    </a>


    <a href="{{ route('galeri.edit', $galeri->id) }}"
       class="btn btn-warning">

        Edit

    </a>

</div>

</body>

</html>