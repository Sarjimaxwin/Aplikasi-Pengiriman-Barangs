<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $no_HP = mysqli_real_escape_string($conn, $_POST['no_HP']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $hobby = mysqli_real_escape_string($conn, $_POST['hobby']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);

    $query = "UPDATE tb_user SET 
                nama_lengkap='$nama_lengkap', 
                password='$password', 
                no_HP='$no_HP', 
                alamat='$alamat', 
                hobby='$hobby', 
                tanggal_lahir='$tanggal_lahir' 
              WHERE email='$email'";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data Berhasil Diubah');
                window.location.href='profil.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>