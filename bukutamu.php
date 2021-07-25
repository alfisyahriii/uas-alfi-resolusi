<html> 
<head> 
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
            <div align="center"><strong><font size="6" face="Courier New, Courier, mono">BUKU TAMU </font></strong></div> 

<form name="form1" method="post" action="proses.php"> 
	<table width="58%" border="0" align="center"> 
	<tr> 
		<td>Nama Lengkap</td> 
		<td><input name="nama" type="text" id="nama"></td> 
	</tr> 

	<tr> 
		<td>Alamat</td> 
		<td><input name="alamat" type="text" id="alamat"></td> 
	</tr>

	<tr> 
		<td>E-Mail</td> 
		<td><input name="email" type="text" id="email"></td> </tr> 
	</tr> 

	<tr> 
		<td>Status</td> 
		<td><select name="status" id="status"> 
		<option>Menikah</option> 
		<option>Single</option> 
		</select></td> 
	</tr> 
	<tr> 
		<td>Komentar</td> 
		<td><textarea name="komentar" id="komentar"></textarea></td> 
	</textarea>
	</tr> 

 <tr> 
 <td>&nbsp;</td> 
 <td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal"> 
 </td> 
 </tr> 
 </table> 
 </form> 
 <div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu:: 
</a></strong></div> 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
