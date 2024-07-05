<?php
require('koneksi.php');

// Cek jika form telah disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $alamat = $_POST['alamat'];
    $hobby = $_POST['hobby'];
    $tanggallahir = $_POST['tanggallahir'];

    // Validasi apakah email sudah terdaftar
    $check_stmt = $conn->prepare("SELECT email FROM tb_user WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // Jika email sudah terdaftar, tampilkan pesan error
        echo "<script>
                alert('Email sudah terdaftar.');
                window.location.href='register-v2.php?success=false';
              </script>";
    } else {
        // Jika email belum terdaftar, lanjutkan dengan INSERT
        $stmt = $conn->prepare("INSERT INTO tb_user (nama_lengkap, email, password, no_HP, alamat, hobby, tanggal_lahir) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fullname, $email, $password, $number, $alamat, $hobby, $tanggallahir);

        if ($stmt->execute()) {
            // Jika INSERT berhasil, berikan pesan sukses
            echo "<script>
                    alert('Data Berhasil Ditambahkan');
                    window.location.href='register-v2.php?success=true';
                  </script>";
        } else {
            // Jika terjadi error saat INSERT, tampilkan pesan error
            echo "<script>
                    alert('Error: " . $stmt->error . "');
                    window.location.href='register-v2.php?success=false';
                  </script>";
        }

        $stmt->close();
    }

    $check_stmt->close();
    mysqli_close($conn);
} else {
    // Jika bukan metode POST, redirect ke halaman index.php
    echo "<script>
            alert('Anda tidak dapat mengakses halaman ini.');
            window.location.href = 'index.php';
          </script>";
    exit();
}
?>
