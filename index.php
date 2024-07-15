<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT email,password,nama_lengkap FROM tb_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_email, $db_password, $db_nama);
        $stmt->fetch();
        if ($password == $db_password) {
            $_SESSION['email'] = $db_email;
            $_SESSION['nama'] = $db_nama;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Password Salah!');</script>";
        }
    } else {
        echo "<script>alert('Email tidak terdaftar!');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #0033FF;
            background-image: url('assets/img/background.jpg');
            background-size: cover;
        }

        .login-box {
            width: 360px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #0033FF;
            color: #ffffff;
            border-bottom: none;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
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
    </style>
</head>

<body class="login-page">

    <div class="login-box">
        <div class="card">
            <div class="card-header text-center">
                <h1 class="mb-0"><b>JE EN EE</b></h1>
                <h3>Pengiriman Barang Terpercaya</h3>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Log In Untuk Masuk</p>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingatkan Saya</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
                </form>
                <p class="mt-3 mb-0 text-center">
                    Belum punya akun? <a href="register-v2.php">Daftar disini</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
