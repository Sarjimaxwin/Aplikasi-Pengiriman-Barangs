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
    <title>Login - JE EN EE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .login-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-title h1 {
            font-weight: bold;
            color: #333333;
        }

        .login-form .form-floating {
            position: relative;
            margin-bottom: 20px;
        }

        .login-form .form-floating input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .login-form .form-floating label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888888;
            background-color: #ffffff;
            padding: 0 5px;
            font-size: 14px;
            pointer-events: none;
            transition: top 0.3s, left 0.3s, transform 0.3s, font-size 0.3s;
        }

        .login-form .form-floating input:focus + label,
        .login-form .form-floating input:not(:placeholder-shown) + label {
            top: 0;
            left: 0;
            transform: translateY(-30%);
            font-size: 12px;
            color: #333333;
            background: #ffffff;
            padding: 0 5px;
        }

        .login-form .btn-primary {
            width: 100%;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            background-color: #007bff;
            border: none;
        }

        .login-form .btn-primary:hover {
            background-color: #0056b3;
        }

        .login-form .form-check-label {
            color: #888888;
        }

        .login-form .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .login-form .forgot-password a {
            color: #888888;
        }

        .login-form .create-account {
            text-align: center;
            margin-top: 20px;
        }

        .login-form .create-account a {
            color: #007bff;
        }

        .alert {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-container">
                    <div class="login-title">
                        <h1>JE EN EE</h1>
                        <h3>Pengiriman Barang Terpercaya</h3>
                    </div>
                    <form class="login-form" action="" method="post">
                        <?php if (isset($_POST['submit']) && $stmt->num_rows <= 0) : ?>
                            <div class="alert alert-danger" role="alert">
                                Email tidak terdaftar!
                            </div>
                        <?php endif; ?>
                        <div class="form-floating">
                            <input id="loginEmail" name="email" type="email" class="form-control" placeholder="Email" required>
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating">
                            <input id="loginPassword" name="password" type="password" class="form-control" placeholder="Password" required>
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Ingatkan Saya</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
                    </form>
                    <div class="forgot-password">
                        <a href="#">Lupa Password?</a>
                    </div>
                    <div class="create-account">
                        <p>Belum punya akun? <a href="register-v2.php">Daftar Sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
