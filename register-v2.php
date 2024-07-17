<!DOCTYPE html>
<html lang="en">

<head>
<style>
    body {
        background: linear-gradient(to bottom right, #2980b9, #6dd5fa);
        font-family: 'Source Sans Pro', sans-serif;
        color: #333;
    }

    .register-page {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .register-box {
        width: 300px; /* Adjusted width */
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #0033FF;
        color: #ffffff;
        text-align: center;
        padding: 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin-bottom: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .btn-primary {
        background-color: #FF0000;
        border-color: #FF0000;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0000CC;
        border-color: #0000CC;
    }

    .form-floating input.form-control {
        border-radius: 5px;
    }

    .form-floating label {
        color: #555;
    }

    .link-primary {
        color: #007bff;
    }

    /* Background Gradients */
    body {
        background: linear-gradient(to bottom right, #4e54c8, #8f94fb);
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
    }

    /* Register Box Styling */
    .register-box {
        width: 300px; /* Adjusted width */
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .card-header {
        background-color: #3f51b5;
        color: #fff;
        text-align: center;
        padding: 15px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #f44336;
        border-color: #f44336;
        width: 100%;
        padding: 12px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e91e63;
        border-color: #e91e63;
    }

    .form-floating input.form-control {
        border-radius: 8px;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ccc;
    }

    .form-floating label {
        color: #555;
        font-size: 14px;
    }

    .link-primary {
        color: #2196f3;
    }
</style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login kantin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Register Page v2">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="adminlte.css">
</head>

<body class="register-page bg-body-secondary">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h1 class="mb-0"><b>JE EN EE</b></h1>
                <h3>Pengiriman barang Terpercaya</h3>
            </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">Buat Akun Baru</p>
                <form action="tambah_data.php" method="post">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="fullName" type="text" class="form-control" name="fullname" placeholder="" required>
                            <label for="registerFullName">Nama Lengkap</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="email" type="email" class="form-control" name="email" placeholder="" required>
                            <label for="registerEmail">Email</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="password" type="password" class="form-control" name="password" placeholder="" required>
                            <label for="registerPassword">Password</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="HP" type="number" class="form-control" name="number" placeholder="" required>
                            <label for="HP">NO.HP</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-phone"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="alamat" type="text" class="form-control" name="alamat" placeholder="" required>
                            <label for="registerALAMAT">ALAMAT</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-house"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="hobby" type="text" class="form-control" name="hobby" placeholder="" required>
                            <label for="registerHOBBY">HOBBY</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-basket"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="tanggallahir" type="date" class="form-control" name="tanggallahir" placeholder="" required>
                            <label for="registerTANGGALLAHIR">TANGGAL LAHIR</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-calendar"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-8 d-inline-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Saya Setuju Dengan <a href="#">Persyaratannya</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Buat Akun</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="mb-0">
                    <a href="index.php" class="link-primary text-center">Saya Sudah Mempunyai Akun</a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
    <script src="../../../dist/js/adminlte.js"></script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined") {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registration Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your registration was successful!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php if (isset($_POST['success']) && $_POST['success'] == 'true'): ?>
            var myModal = new bootstrap.Modal(document.getElementById('successModal'), {keyboard: false});
            myModal.show();
        <?php endif; ?>
    </script>
</body>

</html>
