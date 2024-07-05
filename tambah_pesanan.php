<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemesan = addslashes ($_POST['nama_pemesan']);
    $lauk_utama = addslashes ($_POST['lauk_utama']);
    $lauk_tambahan_satu = addslashes ($_POST['lauk_tambahan_satu']);
    $lauk_tambahan_dua = addslashes ($_POST['lauk_tambahan_dua']);
    $catatan = addslashes ($_POST['catatan']);

    $query = "INSERT INTO tb_pesanan (nama_pemesan, lauk_utama, lauk_tambahan_satu, lauk_tambahan_dua, catatan) VALUES ('$nama_pemesan', '$lauk_utama', '$lauk_tambahan_satu', '$lauk_tambahan_dua', '$catatan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                window.location.href='pesanan.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
