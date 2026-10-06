<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        {{ $sarpra->nama }}
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-body">

            <div class="text-center mb-4">

                @if($sarpra->icon)

                    <i
                        class="{{ $sarpra->icon }}"
                        style="font-size: 50px;">
                    </i>

                @endif

                <h2 class="mt-3">

                    {{ $sarpra->nama }}

                </h2>

            </div>


            <div class="row g-3 mb-4">

                @foreach([
                    $sarpra->gambar,
                    $sarpra->gambar2,
                    $sarpra->gambar3
                ] as $gambar)

                    @if($gambar)

                        <div class="col-md-4">

                            <img
                                src="{{ asset(
                                    'storage/' . $gambar
                                ) }}"
                                class="img-fluid rounded"
                                style="
                                    width:100%;
                                    height:250px;
                                    object-fit:cover;
                                ">

                        </div>

                    @endif

                @endforeach

            </div>


            <h5>
                Deskripsi
            </h5>

            <p>
                {{ $sarpra->deskripsi }}
            </p>


            <p>
                <strong>Urutan:</strong>
                {{ $sarpra->urutan }}
            </p>


            <a
                href="{{ route('sarpras.edit', $sarpra->id) }}"
                class="btn btn-warning">

                <i class="bi bi-pencil"></i>

                Edit

            </a>


            <a
                href="{{ route('sarpras.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </div>

</div>

</body>

</html>