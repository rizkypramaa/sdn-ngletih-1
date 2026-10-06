<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Galeri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Kelola Galeri</h1>

        <a href="{{ route('galeri.create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Galeri

        </a>

    </div>


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="card">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered align-middle">

                    <thead>

                        <tr>

                            <th width="80">No</th>

                            <th width="150">Gambar</th>

                            <th>Judul</th>

                            <th>Deskripsi</th>

                            <th>Tanggal</th>

                            <th width="250">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($galeris as $galeri)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>

                                    @if($galeri->gambar)

                                        <img
                                            src="{{ asset('storage/' . $galeri->gambar) }}"
                                            width="120"
                                            height="80"
                                            style="object-fit: cover;"
                                            class="rounded">

                                    @endif

                                </td>

                                <td>
                                    {{ $galeri->judul }}
                                </td>

                                <td>
                                    {{ $galeri->deskripsi }}
                                </td>

                                <td>
                                    {{ $galeri->tanggal }}
                                </td>

                                <td>

                                    <a href="{{ route('galeri.show', $galeri->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="bi bi-eye"></i>
                                        Lihat

                                    </a>

                                    <a href="{{ route('galeri.edit', $galeri->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil"></i>
                                        Edit

                                    </a>

                                    <form
                                        action="{{ route('galeri.destroy', $galeri->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus galeri ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">

                                            <i class="bi bi-trash"></i>
                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="text-center">

                                    Belum ada data galeri.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>