<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Footer Menarik</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .app-footer {
            background-image: linear-gradient(to right, #ff3366, #ff9933);
            color: white;
            text-align: left;
            padding: 10px 20px; /* Adjusted padding to make footer shorter */
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .social-icons {
            margin-bottom: 5px; /* Adjusted margin bottom */
        }
        .social-icons a {
            color: white;
            margin-right: 10px;
            font-size: 20px;
            display: inline-block;
            transition: transform 0.3s ease;
        }
        .social-icons a:hover {
            transform: scale(1.2);
        }
        .social-icons .icon-label {
            display: block;
            font-size: 12px;
            margin-top: 2px; /* Adjusted margin top */
        }
        b {
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <footer class="app-footer">
        <div class="social-icons">
            <a target="_blank">
                <i class="fab fa-facebook"></i>
                <span class="icon-label">Anto</span>
            </a>
            <a target="_blank">
                <i class="fab fa-twitter"></i>
                <span class="icon-label">Tegar</span>
            </a>
            <a target="_blank">
                <i class="fab fa-instagram"></i>
                <span class="icon-label">Bintang</span>
            </a>
        </div>
        <b>&copy; 2024 </b>
        <a href="#" class="text-decoration-none">Anto Tegar Bintang</a>.
        All rights reserved.
    </footer>
    <!-- Your other HTML content here -->

    <!-- JavaScript for Font Awesome icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
