<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - ElyMart</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: #f5f6f8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0,0,0,.1);
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 5px;
        }

        .logo span {
            color: #ff7a00;
        }

        .login-btn {
            width: 100%;
            background: #ff7a00;
            border: none;
            padding: 12px;
            font-weight: bold;
        }

        .login-btn:hover {
            background: #e96d00;
        }
    </style>
</head>

<body>

<div class="login-card">

    <div class="logo">
        Ely<span>Mart</span>
    </div>

    <p class="text-center text-muted mb-4">
        Login ke akun ElyMart
    </p>

    <form action="{{ route('admin') }}" method="GET">

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                placeholder="Masukkan email"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                placeholder="Masukkan password"
                required
            >
        </div>

        <div class="d-flex justify-content-between mb-4">
            <div>
                <input type="checkbox">
                <small>Ingat saya</small>
            </div>

            <a href="#" class="text-decoration-none">
                Lupa password?
            </a>
        </div>

        <button type="submit" class="btn btn-primary login-btn">
            <i class="bi bi-box-arrow-in-right"></i>
            Login
        </button>

    </form>

    <div class="text-center mt-4">
        <a href="{{ route('frontend') }}" class="text-decoration-none">
            ← Kembali ke ElyMart
        </a>
    </div>

</div>

</body>
</html>