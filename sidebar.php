<?php
if(empty($_SESSION['email'])){
    echo"<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'index.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Aplikasi Kantin - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.min.js">
    <style>
        .app-sidebar {
            background-color: #ffc107; /* Ubah warna sidebar menjadi kuning */
            color: #212529; /* Warna teks di sidebar */
        }

        .brand-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .brand-text {
            margin-left: 10px;
            color: red; /* Ubah warna teks "JE EN EE" menjadi merah */
        }

        .brand-img {
            width: 40px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
            height: 40px;
            border-radius: 50%; /* Untuk membuat gambar bulat */
        }

        .nav-link p {
            color: red; /* Ubah warna teks pada tag <p> di dalam nav-link menjadi merah */
        }
    </style>
</head>

<body>
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="#" class="brand-link">
                <!--begin::Brand Image-->
                <img src="path-to-your-image.jpg" alt="Logo" class="brand-img">
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">JE EN EE</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon bi bi-house-door-fill"></i>
                            <p>Menu Utama</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pesanan.php" class="nav-link">
                            <i class="nav-icon bi bi-truck"></i>
                            <p>Daftar Pengiriman</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="profil.php" class="nav-link">
                            <i class="nav-icon bi bi-person-fill-check"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="signout.php" class="nav-link">
                            <i class="nav-icon bi bi-box-arrow-left"></i>
                            <p>Keluar</p>
                        </a>
                    </li>
                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
</body>

</html>
