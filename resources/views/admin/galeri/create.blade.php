<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Galeri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h1>Tambah Galeri</h1>

    <hr>

    <form action="{{ route('galeri.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf


        <div class="mb-3">

            <label class="form-label">
                Judul Kegiatan
            </label>

            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ old('judul') }}"
                   required>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea name="deskripsi"
                      class="form-control"
                      rows="5">{{ old('deskripsi') }}</textarea>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Tanggal
            </label>

            <input type="date"
                   name="tanggal"
                   class="form-control"
                   value="{{ old('tanggal') }}">

        </div>


        <div class="mb-3">

            <label class="form-label">
                Gambar
            </label>

            <input type="file"
                   name="gambar"
                   class="form-control"
                   accept="image/*"
                   required>

            <small class="text-muted">
                JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
            </small>

        </div>


        <a href="{{ route('galeri.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

        <button type="submit"
                class="btn btn-primary">

            Simpan Galeri

        </button>

    </form>

</div>

</body>
</html>