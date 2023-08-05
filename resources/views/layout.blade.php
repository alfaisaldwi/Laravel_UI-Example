<!DOCTYPE html>
<html>
<head>
    <title>Master Data & Laporan Penjualan</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/customers">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/offers">Penawaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sales_reports">Laporan Penjualan</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Tambahkan script JS untuk Bootstrap (jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
