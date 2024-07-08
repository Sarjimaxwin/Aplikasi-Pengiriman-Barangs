<?php

if(empty($_SESSION['email'])){
    echo"<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'index.php';</script>";
    exit();
}
    ?>

<footer class="app-footer"> <!--begin::To the end-->
            <!--end::To the end--> <!--begin::Copyright-->
             
               <b> Copyright &copy; 2024 
                <a  class="text-decoration-none">Anto Tegar Bintang</a>.
        
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
