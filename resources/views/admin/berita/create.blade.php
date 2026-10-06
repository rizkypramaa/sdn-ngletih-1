<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Berita - Admin SDN Ngletih 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .container-form {
            max-width: 900px;
            margin: 50px auto;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .card-header {
            background: #0d6efd;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 20px 25px;
        }

        .form-label {
            font-weight: 600;
        }

        .btn {
            border-radius: 8px;
        }
    </style>
</head> 
<body>

<div class="container-form">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-0">
                Tambah Berita
            </h4>
        </div>

        <div class="card-body p-4">

            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi kesalahan!</strong>

                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('berita.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                {{-- Judul --}}
                <div class="mb-3">
                    <label for="judul" class="form-label">
                        Judul Berita
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="judul"
                        name="judul"
                        value="{{ old('judul') }}"
                        placeholder="Masukkan judul berita"
                        required
                    >
                </div>


                {{-- Kategori --}}
                <div class="mb-3">
                    <label for="kategori" class="form-label">
                        Kategori
                    </label>

                    <select
                        class="form-select"
                        id="kategori"
                        name="kategori"
                    >
                        <option value="">-- Pilih Kategori --</option>

                        <option value="Sekolah"
                            {{ old('kategori') == 'Sekolah' ? 'selected' : '' }}>
                            Sekolah
                        </option>

                        <option value="Prestasi"
                            {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>
                            Prestasi
                        </option>

                        <option value="Kegiatan"
                            {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>
                            Kegiatan
                        </option>

                        <option value="Pengumuman"
                            {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}>
                            Pengumuman
                        </option>
                    </select>
                </div>


                {{-- Tanggal --}}
                <div class="mb-3">
                    <label for="tanggal" class="form-label">
                        Tanggal Berita
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        id="tanggal"
                        name="tanggal"
                        value="{{ old('tanggal', date('Y-m-d')) }}"
                        required
                    >
                </div>


                {{-- Isi --}}
                <div class="mb-3">
                    <label for="isi" class="form-label">
                        Isi Berita
                    </label>

                    <textarea
                        class="form-control"
                        id="isi"
                        name="isi"
                        rows="10"
                        placeholder="Tuliskan isi berita..."
                        required
                    >{{ old('isi') }}</textarea>
                </div>


                {{-- Gambar --}}
                <<div class="mb-3">
                <label for="gambar" class="form-label">
                    Gambar 1
                </label>

                <input
                    type="file"
                    class="form-control"
                    id="gambar"
                    name="gambar"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                @error('gambar')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="gambar2" class="form-label">
                    Gambar 2
                </label>

                <input
                    type="file"
                    class="form-control"
                    id="gambar2"
                    name="gambar2"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                @error('gambar2')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="gambar3" class="form-label">
                    Gambar 3
                </label>

                <input
                    type="file"
                    class="form-control"
                    id="gambar3"
                    name="gambar3"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                @error('gambar3')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>


                {{-- Tombol --}}
                <div class="d-flex justify-content-between">

                    <a href="{{ route('berita.index') }}"
                       class="btn btn-secondary">
                        ← Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan Berita
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>