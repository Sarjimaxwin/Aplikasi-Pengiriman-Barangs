<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $lauk_utama = $_POST['lauk_utama'];
    $lauk_tambahan_satu = $_POST['lauk_tambahan_satu'];
    $lauk_tambahan_dua = $_POST['lauk_tambahan_dua'];
    $catatan = $_POST['catatan'];
    
    // Query untuk update data berdasarkan ID
    $query = "UPDATE tb_pesanan SET 
                nama_pemesan = '$nama_pemesan', 
                lauk_utama = '$lauk_utama', 
                lauk_tambahan_satu = '$lauk_tambahan_satu', 
                lauk_tambahan_dua = '$lauk_tambahan_dua', 
                catatan = '$catatan' 
              WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
        echo "<script>
        alert('Data Berhasil Diubah');
        window.location.href='pesanan.php';
      </script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Metode request tidak valid.";
}

mysqli_close($conn);
?>
