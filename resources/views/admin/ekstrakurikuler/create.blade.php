<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tambah Ekstrakurikuler</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>
            Tambah Ekstrakurikuler
        </h1>

        <a
            href="{{ route('ekstrakurikuler.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>


    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="card">

        <div class="card-body">

            <form
                action="{{ route('ekstrakurikuler.store') }}"
                method="POST">

                @csrf


                <div class="mb-3">

                    <label class="form-label">
                        Nama Ekstrakurikuler
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama') }}"
                        placeholder="Contoh: Pramuka"
                        required>

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="4"
                        placeholder="Deskripsi kegiatan ekstrakurikuler"
                        required>{{ old('deskripsi') }}</textarea>

                </div>


                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label>

                    <select name="icon" id="icon" class="form-select">
                        <option value="">-- Pilih Icon --</option>

                        <option value="bi bi-compass">
                            Pramuka / Compass
                        </option>

                        <option value="bi bi-pc-display">
                            Komputer
                        </option>

                        <option value="bi bi-person-arms-up">
                            Seni Tari
                        </option>

                        <option value="bi bi-music-note-beamed">
                            Musik
                        </option>

                        <option value="bi bi-palette-fill">
                            Menggambar / Seni
                        </option>

                        <option value="bi bi-journal-check">
                            Belajar
                        </option>

                        <option value="bi bi-trophy-fill">
                            Prestasi / Olimpiade
                        </option>

                        <option value="bi bi-shield-fill-check">
                            Karate / Bela Diri
                        </option>

                        <option value="bi bi-dribbble">
                            Olahraga
                        </option>

                        <option value="bi bi-balloon-fill">
                            Sepak Bola
                        </option>

                        <option value="bi bi-emoji-smile">
                            Pantomim
                        </option>
                    </select>
                </div>


                <div class="mb-3">
    <label for="warna" class="form-label">Warna Card</label>

    <select name="warna" id="warna" class="form-select">

        <option value="">-- Pilih Warna --</option>

        <option value="ekstra-card-blue">
            Biru
        </option>

        <option value="ekstra-card-sky">
            Biru Muda
        </option>

        <option value="ekstra-card-purple">
            Ungu
        </option>

        <option value="ekstra-card-green">
            Hijau
        </option>

        <option value="ekstra-card-orange">
            Oranye
        </option>

        <option value="ekstra-card-red">
            Merah
        </option>

        <option value="ekstra-card-yellow">
            Kuning
        </option>

        <option value="ekstra-card-dark">
            Gelap
        </option>

        <option value="ekstra-card-pink">
            Pink
        </option>

        <option value="ekstra-card-cyan">
            Cyan
        </option>

        <option value="ekstra-card-lime">
            Lime
        </option>

    </select>
</div>


                <div class="mb-4">

                    <label class="form-label">
                        Urutan
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        class="form-control"
                        value="{{ old('urutan', 0) }}"
                        min="0"
                        required>

                    <small class="text-muted">
                        Angka lebih kecil akan tampil lebih dahulu.
                    </small>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-save"></i>
                    Simpan

                </button>


                <a
                    href="{{ route('ekstrakurikuler.index') }}"
                    class="btn btn-secondary">

                    Batal

                </a>

            </form>

        </div>

    </div>

</div>

</body>

</html>