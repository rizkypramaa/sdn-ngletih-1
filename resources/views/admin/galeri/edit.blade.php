<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Galeri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h1>Edit Galeri</h1>

    <hr>

    <form action="{{ route('galeri.update', $galeri->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        @method('PUT')


        <div class="mb-3">

            <label class="form-label">
                Judul Kegiatan
            </label>

            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ $galeri->judul }}"
                   required>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea name="deskripsi"
                      class="form-control"
                      rows="5">{{ $galeri->deskripsi }}</textarea>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Tanggal
            </label>

            <input type="date"
                   name="tanggal"
                   class="form-control"
                   value="{{ $galeri->tanggal }}">

        </div>


        <div class="mb-3">

            <label class="form-label">
                Gambar Saat Ini
            </label>

            <br>

            @if($galeri->gambar)

                <img src="{{ asset('storage/' . $galeri->gambar) }}"
                     width="250"
                     class="rounded mb-3">

            @endif

        </div>


        <div class="mb-3">

            <label class="form-label">
                Ganti Gambar
            </label>

            <input type="file"
                   name="gambar"
                   class="form-control"
                   accept="image/*">

            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti gambar.
            </small>

        </div>


        <a href="{{ route('galeri.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

        <button type="submit"
                class="btn btn-primary">

            Simpan Perubahan

        </button>

    </form>

</div>

</body>

</html>