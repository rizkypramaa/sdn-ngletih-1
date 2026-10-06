<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Edit Berita</h1>

    <hr>

    <form action="{{ route('berita.update', $berita->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">
                Judul Berita
            </label>

            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ $berita->judul }}"
                   required>
        </div>


        <div class="mb-3">
            <label class="form-label">
                Kategori
            </label>

            <input type="text"
                   name="kategori"
                   class="form-control"
                   value="{{ $berita->kategori }}">
        </div>


        <div class="mb-3">
            <label class="form-label">
                Tanggal
            </label>

            <input type="date"
                   name="tanggal"
                   class="form-control"
                   value="{{ $berita->tanggal }}"
                   required>
        </div>


        <div class="mb-3">
            <label class="form-label">
                Isi Berita
            </label>

            <textarea name="isi"
                      class="form-control"
                      rows="10"
                      required>{{ $berita->isi }}</textarea>
        </div>


        <hr>

        <h5>Gambar</h5>


        <div class="mb-3">
            <label class="form-label">
                Gambar 1
            </label>

            @if ($berita->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $berita->gambar) }}"
                         width="200">
                </div>
            @endif

            <input type="file"
                   name="gambar"
                   class="form-control">
        </div>


        <div class="mb-3">
            <label class="form-label">
                Gambar 2
            </label>

            @if ($berita->gambar2)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $berita->gambar2) }}"
                         width="200">
                </div>
            @endif

            <input type="file"
                   name="gambar2"
                   class="form-control">
        </div>


        <div class="mb-3">
            <label class="form-label">
                Gambar 3
            </label>

            @if ($berita->gambar3)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $berita->gambar3) }}"
                         width="200">
                </div>
            @endif

            <input type="file"
                   name="gambar3"
                   class="form-control">
        </div>


        <a href="{{ route('berita.index') }}"
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