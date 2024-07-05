<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM tb_pesanan WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
        echo "<script>
        alert('Data Berhasil Dihapus');
        window.location.href='pesanan.php';
      </script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan.";
}

mysqli_close($conn);
?>