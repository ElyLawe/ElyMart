<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - ElyMart</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        body {
            background: #f5f6f8;
        }

        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: white;
        }

        .sidebar .logo {
            font-size: 28px;
            font-weight: bold;
            padding: 25px;
        }

        .sidebar .logo span {
            color: #ff7a00;
        }

        .sidebar a {
            display: block;
            color: #ddd;
            text-decoration: none;
            padding: 13px 25px;
        }

        .sidebar a:hover {
            background: #343a40;
            color: white;
        }

        .main-content {
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .stat-card {
            padding: 25px;
        }

        .stat-icon {
            font-size: 35px;
            color: #ff7a00;
        }
    </style>
</head>

<body>

<div class="container-fluid">

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-3 col-lg-2 p-0 sidebar">

            <div class="logo">
                Ely<span>Mart</span>
            </div>

            <a href="{{ route('admin') }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

            <a href="#">
                <i class="bi bi-box-seam"></i>
                Produk
            </a>

            <a href="#">
                <i class="bi bi-cart3"></i>
                Pesanan
            </a>

            <a href="#">
                <i class="bi bi-people"></i>
                Pelanggan
            </a>

            <a href="#">
                <i class="bi bi-tags"></i>
                Promo
            </a>

            <a href="#">
                <i class="bi bi-gear"></i>
                Pengaturan
            </a>

            <hr>

            <a href="{{ route('frontend') }}">
                <i class="bi bi-house"></i>
                Lihat Website
            </a>

        </div>

        <!-- CONTENT -->
        <div class="col-md-9 col-lg-10 main-content">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h2 class="fw-bold">Dashboard</h2>
                    <p class="text-muted">
                        Selamat datang di Admin ElyMart
                    </p>
                </div>

                <a href="{{ route('frontend') }}"
                   class="btn btn-outline-secondary">
                    <i class="bi bi-globe"></i>
                    Website
                </a>

            </div>

            <!-- STATISTIK -->
            <div class="row g-4 mb-4">

                <div class="col-md-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <i class="bi bi-box-seam stat-icon"></i>
                        <h6 class="text-muted mt-3">Total Produk</h6>
                        <h2>0</h2>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <i class="bi bi-cart-check stat-icon"></i>
                        <h6 class="text-muted mt-3">Pesanan</h6>
                        <h2>0</h2>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <i class="bi bi-people stat-icon"></i>
                        <h6 class="text-muted mt-3">Pelanggan</h6>
                        <h2>0</h2>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <i class="bi bi-currency-dollar stat-icon"></i>
                        <h6 class="text-muted mt-3">Pendapatan</h6>
                        <h2>Rp 0</h2>
                    </div>
                </div>

            </div>

            <!-- PESANAN -->
            <div class="card shadow-sm">

                <div class="card-body">

                    <h5 class="fw-bold mb-3">
                        Pesanan Terbaru
                    </h5>

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pelanggan</th>
                                    <th>Produk</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td colspan="5"
                                        class="text-center text-muted py-4">
                                        Belum ada pesanan
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>