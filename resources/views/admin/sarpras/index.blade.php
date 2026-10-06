<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Kelola Sarpras</title>

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

        <div>

            <h2>
                Kelola Sarana & Prasarana
            </h2>

            <p class="text-muted">
                Kelola fasilitas yang ditampilkan pada halaman Sarpras.
            </p>

        </div>

        <a
            href="{{ route('sarpras.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg"></i>

            Tambah Sarpras

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

                    <thead class="table-light">

                        <tr>

                            <th width="70">
                                No
                            </th>

                            <th width="80">
                                Urutan
                            </th>

                            <th width="100">
                                Icon
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Deskripsi
                            </th>

                            <th width="180">
                                Gambar
                            </th>

                            <th width="230">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($sarpras as $item)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->urutan }}
                                </td>

                                <td class="text-center">

                                    @if($item->icon)

                                        <i
                                            class="{{ $item->icon }} fs-3">
                                        </i>

                                    @endif

                                </td>

                                <td>
                                    <strong>
                                        {{ $item->nama }}
                                    </strong>
                                </td>

                                <td>

                                    {{ Str::limit(
                                        $item->deskripsi,
                                        100
                                    ) }}

                                </td>

                                <td>

                                    <div class="d-flex gap-1">

                                        @foreach([
                                            $item->gambar,
                                            $item->gambar2,
                                            $item->gambar3
                                        ] as $gambar)

                                            @if($gambar)

                                                <img
                                                    src="{{ asset('storage/' . $gambar) }}"
                                                    width="50"
                                                    height="50"
                                                    style="object-fit: cover;"
                                                    class="rounded">

                                            @endif

                                        @endforeach

                                    </div>

                                </td>

                                <td>

                                    <a
                                        href="{{ route(
                                            'sarpras.show',
                                            $item->id
                                        ) }}"
                                        class="btn btn-info btn-sm">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <a
                                        href="{{ route(
                                            'sarpras.edit',
                                            $item->id
                                        ) }}"
                                        class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil"></i>

                                    </a>

                                    <form
                                        action="{{ route(
                                            'sarpras.destroy',
                                            $item->id
                                        ) }}"
                                        method="POST"
                                        class="d-inline">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm(
                                                'Yakin ingin menghapus data ini?'
                                            )">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="text-center py-4">

                                    Belum ada data sarpras.

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