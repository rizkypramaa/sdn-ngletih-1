<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Admin | SDN Ngletih 1</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>

        body {
            min-height: 100vh;
            background:
                linear-gradient(
                    135deg,
                    #176B87,
                    #86B6F6
                );

            display: flex;
            align-items: center;
            justify-content: center;

            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 430px;

            background: #fff;

            border-radius: 24px;

            padding: 40px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, .15);
        }

        .login-logo {
            width: 85px;
            height: 85px;

            object-fit: contain;

            margin-bottom: 15px;
        }

        .login-title {
            color: #176B87;
            font-weight: 700;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 12px;
        }

        .btn-login {
            background: #176B87;
            border: none;

            color: #fff;

            padding: 12px;

            border-radius: 12px;

            font-weight: 600;
        }

        .btn-login:hover {
            background: #12566d;
            color: #fff;
        }

    </style>

</head>

<body>

<div class="login-card">

    <div class="text-center">

        <img
            src="{{ asset('assets/images/logo ngletih.PNG') }}"
            class="login-logo"
            alt="Logo SDN Ngletih 1">

        <h3 class="login-title">
            Login Admin
        </h3>

        <p class="text-muted">
            SDN Ngletih 1
        </p>

    </div>

    @if ($errors->any())

        <div class="alert alert-danger">

            {{ $errors->first() }}

        </div>

    @endif

    <form
    action="{{ route('admin.login.process') }}"
    method="POST">

    @csrf

    <div class="mb-3">

        <label class="form-label">
            Email
        </label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-envelope"></i>
            </span>

            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Masukkan email"
                value="{{ old('email') }}"
                required>

        </div>

    </div>

    <div class="mb-4">

        <label class="form-label">
            Password
        </label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-lock"></i>
            </span>

            <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="Masukkan password"
                required>

            <button
                type="button"
                class="btn btn-outline-secondary"
                id="togglePassword">

                <i class="bi bi-eye" id="eyeIcon"></i>

            </button>

        </div>

    </div>

    <button
        type="submit"
        class="btn btn-login w-100">

        <i class="bi bi-box-arrow-in-right me-2"></i>

        Login Admin

    </button>

    <!-- Button Kembali ke Home -->
    <a
        href="{{ url('/') }}"
        class="btn btn-outline-secondary w-100 mt-3">

        <i class="bi bi-house-door me-2"></i>

        Kembali ke Home

    </a>

</form>

</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {

        const type = password.getAttribute('type') === 'password'
            ? 'text'
            : 'password';

        password.setAttribute('type', type);

        if (type === 'text') {
            eyeIcon.classList.remove('bi-eye');
            eyeIcon.classList.add('bi-eye-slash');
        } else {
            eyeIcon.classList.remove('bi-eye-slash');
            eyeIcon.classList.add('bi-eye');
        }

    });
</script>

</body>

</html>