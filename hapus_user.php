<?php
include "../pwdprak5/koneksi.php";
#lokasi file koneksi.php yang digunakan untuk menghubungkan ke database
$sql = "delete from users where id_user= '$_GET[id]'";
#memanggil perintah delete data dari user dengan id_user di sql
mysqli_query($con, $sql);
#Untuk mengirimkan perintah query. Terdiri dari dua parameter yaitu: koneksi, dan SQL
mysqli_close($conn);
#Untuk memutus atau menutup koneksi ke server
header('location:tampil_user.php');
#membuat redirect ke file tampil_user.PHP
