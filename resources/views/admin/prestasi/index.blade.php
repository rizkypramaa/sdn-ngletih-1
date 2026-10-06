<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Prestasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1>Kelola Prestasi</h1>

            <p class="text-muted mb-0">
                Data prestasi akademik dan non akademik siswa.
            </p>
        </div>

        <a href="{{ route('prestasi.create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Prestasi

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

                            <th width="70">No</th>

                            <th>Judul Prestasi</th>

                            <th>Nama Siswa</th>

                            <th>Tingkat</th>

                            <th width="100">Tahun</th>

                            <th width="150">Kategori</th>

                            <th width="250">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($prestasis as $prestasi)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $prestasi->judul }}
                                </td>

                                <td>
                                    {!! nl2br(e($prestasi->nama)) !!}
                                </td>

                                <td>
                                    {{ $prestasi->tingkat }}
                                </td>

                                <td>
                                    {{ $prestasi->tahun }}
                                </td>

                                <td>

                                    @if($prestasi->kategori == 'Akademik')

                                        <span class="badge bg-primary">
                                            Akademik
                                        </span>

                                    @else

                                        <span class="badge bg-success">
                                            Non Akademik
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <a href="{{ route('prestasi.show', $prestasi->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="bi bi-eye"></i>
                                        Lihat

                                    </a>

                                    <a href="{{ route('prestasi.edit', $prestasi->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil"></i>
                                        Edit

                                    </a>

                                    <form
                                        action="{{ route('prestasi.destroy', $prestasi->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus prestasi ini?')">

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

                                <td colspan="7"
                                    class="text-center">

                                    Belum ada data prestasi.

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