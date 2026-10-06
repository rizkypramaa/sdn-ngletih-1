<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Edit Sarpras</title>

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
        Edit Sarana & Prasarana
    </h2>


    <form
        action="{{ route(
            'sarpras.update',
            $sarpra->id
        ) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @method('PUT')


        <div class="mb-3">

            <label class="form-label">
                Nama Fasilitas
            </label>

            <input
                type="text"
                name="nama"
                class="form-control"
                value="{{ old(
                    'nama',
                    $sarpra->nama
                ) }}"
                required>

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

                @php
                    $icons = [
                        'bi bi-door-open-fill'
                            => 'Ruang Kelas',

                        'bi bi-pc-display'
                            => 'Laboratorium Komputer',

                        'bi bi-book-fill'
                            => 'Perpustakaan',

                        'bi bi-moon-stars-fill'
                            => 'Mushola',

                        'bi bi-dribbble'
                            => 'Lapangan',

                        'bi bi-cup-hot-fill'
                            => 'Kantin',

                        'bi bi-droplet-fill'
                            => 'Toilet',

                        'bi bi-building'
                            => 'Gedung',
                    ];
                @endphp

                @foreach($icons as $value => $label)

                    <option
                        value="{{ $value }}"
                        @selected(
                            old('icon', $sarpra->icon)
                            == $value
                        )>

                        {{ $label }}

                    </option>

                @endforeach

            </select>


            <div class="mt-3">

                Preview:

                <i
                    id="iconPreview"
                    class="{{ $sarpra->icon }} fs-2">
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
                required>{{ old(
                    'deskripsi',
                    $sarpra->deskripsi
                ) }}</textarea>

        </div>


        <div class="row">

            @foreach([
                'gambar' => $sarpra->gambar,
                'gambar2' => $sarpra->gambar2,
                'gambar3' => $sarpra->gambar3
            ] as $field => $gambar)

                <div class="col-md-4 mb-3">

                    <label class="form-label">

                        {{ ucfirst($field) }}

                    </label>

                    @if($gambar)

                        <div class="mb-2">

                            <img
                                src="{{ asset(
                                    'storage/' . $gambar
                                ) }}"
                                class="img-thumbnail"
                                style="
                                    width:150px;
                                    height:100px;
                                    object-fit:cover;
                                ">

                        </div>

                    @endif

                    <input
                        type="file"
                        name="{{ $field }}"
                        class="form-control"
                        accept="image/*">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti.
                    </small>

                </div>

            @endforeach

        </div>


        <div class="mb-4">

            <label class="form-label">
                Urutan
            </label>

            <input
                type="number"
                name="urutan"
                class="form-control"
                value="{{ old(
                    'urutan',
                    $sarpra->urutan
                ) }}"
                min="0"
                required>

        </div>


        <button
            type="submit"
            class="btn btn-primary">

            <i class="bi bi-save"></i>

            Simpan Perubahan

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