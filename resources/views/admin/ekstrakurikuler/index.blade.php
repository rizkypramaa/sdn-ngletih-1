<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Kelola Ekstrakurikuler</title>

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

            <h1>Kelola Ekstrakurikuler</h1>

            <p class="text-muted mb-0">
                Kelola data kegiatan ekstrakurikuler SDN Ngletih 1.
            </p>

        </div>

        <a
            href="{{ route('ekstrakurikuler.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Ekstrakurikuler

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

                            <th>
                                Warna
                            </th>

                            <th width="250">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($ekstrakurikulers as $ekstrakurikuler)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $ekstrakurikuler->urutan }}
                                </td>

                                <td>

                                    @if($ekstrakurikuler->icon)

                                        <i
                                            class="{{ $ekstrakurikuler->icon }}"
                                            style="font-size: 30px;">
                                        </i>

                                    @endif

                                </td>

                                <td>
                                    <strong>
                                        {{ $ekstrakurikuler->nama }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $ekstrakurikuler->deskripsi }}
                                </td>

                                <td>

                                    @if($ekstrakurikuler->warna)

                                        <span class="badge bg-secondary">
                                            {{ $ekstrakurikuler->warna }}
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <a
                                        href="{{ route('ekstrakurikuler.show', $ekstrakurikuler->id) }}"
                                        class="btn btn-info btn-sm">

                                        <i class="bi bi-eye"></i>
                                        Lihat

                                    </a>

                                    <a
                                        href="{{ route('ekstrakurikuler.edit', $ekstrakurikuler->id) }}"
                                        class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil"></i>
                                        Edit

                                    </a>

                                    <form
                                        action="{{ route('ekstrakurikuler.destroy', $ekstrakurikuler->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus ekstrakurikuler ini?')">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm">

                                            <i class="bi bi-trash"></i>
                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="text-center">

                                    Belum ada data ekstrakurikuler.

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