<?php
if (empty($_SESSION['email'])) {
    echo "<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'index.php';</script>";
    exit();
}
?>

<footer class="app-footer" style="background-color: red;">
    <!--begin::To the end-->
    <!--end::To the end-->
    <!--begin::Copyright-->
    <b>
        <span style="color: white;">Copyright &copy; 2024 </span>
        <a href="#" class="text-decoration-none" style="color: white;">Anto Tegar Bintang</a>.
    </b>
    All rights reserved.
    <!--end::Copyright-->
</footer>
<!--end::Footer-->
