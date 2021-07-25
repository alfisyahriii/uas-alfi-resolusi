<?php
require 'function.php';
require 'cek.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ALFI SYAHRI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">2000018148</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="bukutamu.php">Buku Tamu</a></li>
                                <li><a class="dropdown-item" href="lihat.php">Daftar Tamu</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                

            <?php 
             echo "<head><title>My Guest Book</title></head>"; 
             $fp = fopen("guestbook.txt","r"); 
             echo "<table border=0>"; 

             while ($isi = fgets($fp,80)) 
             { 
             $pisah = explode("|",$isi); 
             echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; 
             echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>"; 
             echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>"; 
             echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>"; 
             echo "<tr><td>Komentar </td><td>: $pisah[4]
             </td></tr> <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; 
             } 

             echo "</table>"; 
             echo "<a href=bukutamu.php> Klik Disini </a>Isi Form Buku Tamu"; 
             ?> 
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
