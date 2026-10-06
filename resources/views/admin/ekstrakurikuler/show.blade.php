<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Detail Ekstrakurikuler</title>

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
            Detail Ekstrakurikuler
        </h1>

        <a
            href="{{ route('ekstrakurikuler.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>


    <div class="card">

        <div class="card-body">

            <div class="text-center mb-4">

                @if($ekstrakurikuler->icon)

                    <i
                        class="{{ $ekstrakurikuler->icon }}"
                        style="font-size: 60px;">
                    </i>

                @endif

            </div>


            <h2 class="text-center mb-4">

                {{ $ekstrakurikuler->nama }}

            </h2>


            <hr>


            <p>

                <strong>
                    Deskripsi:
                </strong>

            </p>

            <p>
                {{ $ekstrakurikuler->deskripsi }}
            </p>


            <p>

                <strong>
                    Icon:
                </strong>

                {{ $ekstrakurikuler->icon }}

            </p>


            <p>

                <strong>
                    Class Warna:
                </strong>

                {{ $ekstrakurikuler->warna }}

            </p>


            <p>

                <strong>
                    Urutan:
                </strong>

                {{ $ekstrakurikuler->urutan }}

            </p>


            <a
                href="{{ route('ekstrakurikuler.edit', $ekstrakurikuler->id) }}"
                class="btn btn-warning">

                <i class="bi bi-pencil"></i>
                Edit

            </a>

        </div>

    </div>

</div>

</body>

</html>