<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Tambah Sarpras</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4">
        Tambah Sarana & Prasarana
    </h2>


    <form
        action="{{ route('sarpras.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


        <div class="mb-3">

            <label class="form-label">
                Nama Fasilitas
            </label>

            <input
                type="text"
                name="nama"
                class="form-control"
                value="{{ old('nama') }}"
                placeholder="Contoh: Ruang Kelas"
                required>

            @error('nama')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <div class="mb-3">

            <label class="form-label">
                Icon
            </label>

            <select
                name="icon"
                id="icon"
                class="form-select">

                <option value="">
                    -- Pilih Icon --
                </option>

                <option value="bi bi-door-open-fill">
                    Ruang Kelas
                </option>

                <option value="bi bi-pc-display">
                    Laboratorium Komputer
                </option>

                <option value="bi bi-book-fill">
                    Perpustakaan
                </option>

                <option value="bi bi-moon-stars-fill">
                    Mushola
                </option>

                <option value="bi bi-dribbble">
                    Lapangan
                </option>

                <option value="bi bi-cup-hot-fill">
                    Kantin
                </option>

                <option value="bi bi-droplet-fill">
                    Toilet
                </option>

                <option value="bi bi-building">
                    Gedung
                </option>

            </select>

            <div class="mt-3">

                <span>
                    Preview:
                </span>

                <i
                    id="iconPreview"
                    class="bi fs-2">
                </i>

            </div>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
                rows="5"
                class="form-control"
                placeholder="Deskripsi fasilitas..."
                required>{{ old('deskripsi') }}</textarea>

            @error('deskripsi')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <div class="row">

            <div class="col-md-4 mb-3">

                <label class="form-label">
                    Gambar 1
                </label>

                <input
                    type="file"
                    name="gambar"
                    class="form-control"
                    accept="image/*">

            </div>


            <div class="col-md-4 mb-3">

                <label class="form-label">
                    Gambar 2
                </label>

                <input
                    type="file"
                    name="gambar2"
                    class="form-control"
                    accept="image/*">

            </div>


            <div class="col-md-4 mb-3">

                <label class="form-label">
                    Gambar 3
                </label>

                <input
                    type="file"
                    name="gambar3"
                    class="form-control"
                    accept="image/*">

            </div>

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

        </div>


        <button
            type="submit"
            class="btn btn-primary">

            <i class="bi bi-save"></i>

            Simpan

        </button>


        <a
            href="{{ route('sarpras.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>


<script>

document
    .getElementById('icon')
    .addEventListener('change', function () {

        const preview =
            document.getElementById('iconPreview');

        preview.className =
            this.value + ' fs-2';

    });

</script>

</body>

</html>