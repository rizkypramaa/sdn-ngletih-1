<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Prestasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Tambah Prestasi</h1>

        <a href="{{ route('prestasi.index') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>


    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <div class="card">

        <div class="card-body">

            <form action="{{ route('prestasi.update', $prestasi->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label class="form-label">
            Judul Prestasi
        </label>

        <input type="text"
               name="judul"
               class="form-control"
               value="{{ old('judul', $prestasi->judul) }}"
               required>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Nama Siswa
        </label>

        <textarea name="nama"
                  class="form-control"
                  rows="4"
                  required>{{ old('nama', $prestasi->nama) }}</textarea>

        <small class="text-muted">
            Jika lebih dari satu siswa, tulis satu nama pada setiap baris.
        </small>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Tingkat
        </label>

        <input type="text"
               name="tingkat"
               class="form-control"
               value="{{ old('tingkat', $prestasi->tingkat) }}"
               required>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Tahun
        </label>

        <input type="number"
               name="tahun"
               class="form-control"
               value="{{ old('tahun', $prestasi->tahun) }}"
               required>

    </div>

    <div class="mb-4">

        <label class="form-label">
            Kategori
        </label>

        <select name="kategori"
                class="form-select"
                required>

            <option value="Akademik"
                {{ old('kategori', $prestasi->kategori) == 'Akademik' ? 'selected' : '' }}>
                Akademik
            </option>

            <option value="Non Akademik"
                {{ old('kategori', $prestasi->kategori) == 'Non Akademik' ? 'selected' : '' }}>
                Non Akademik
            </option>

        </select>

    </div>

    <button type="submit"
            class="btn btn-primary">

        <i class="bi bi-save"></i>
        Simpan Perubahan

    </button>

    <a href="{{ route('prestasi.index') }}"
       class="btn btn-secondary">

        Batal

    </a>

</form>

        </div>

    </div>

</div>

</body>
</html>