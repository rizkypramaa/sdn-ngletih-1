<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <link rel="icon"
        href="{{ asset('assets/images/logo ngletih.PNG') }}">

    <title>
        @yield('title', 'SDN Ngletih 1')
    </title>

    <!-- Google Font -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/css/style.css') }}">

    @yield('css')

</head>

<body>

    @include('partials.navbar')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>

    <!-- Global JS -->
    <script src="{{ asset('assets/js/script.js') }}">
    </script>

    @yield('js')

</body>

</html>