<?php
session_start();
session_destroy(); // menghancurkan sistem
header("Location: index.php"); // mengarahkan pengguna ke halaman login atau halaman lain
exit();
?>