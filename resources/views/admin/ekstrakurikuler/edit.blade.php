<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Ekstrakurikuler</title>

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
            Edit Ekstrakurikuler
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
                action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id) }}"
                method="POST">

                @csrf

                @method('PUT')


                <div class="mb-3">

                    <label class="form-label">
                        Nama Ekstrakurikuler
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama', $ekstrakurikuler->nama) }}"
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
                        required>{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea>

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Icon
                    </label>

                    <input
                        type="text"
                        name="icon"
                        class="form-control"
                        value="{{ old('icon', $ekstrakurikuler->icon) }}">

                    <small class="text-muted">
                        Contoh: bi bi-compass
                    </small>

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Class Warna
                    </label>

                    <input
                        type="text"
                        name="warna"
                        class="form-control"
                        value="{{ old('warna', $ekstrakurikuler->warna) }}">

                </div>


                <div class="mb-4">

                    <label class="form-label">
                        Urutan
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        class="form-control"
                        value="{{ old('urutan', $ekstrakurikuler->urutan) }}"
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