<?php
include "../pwdprak5/koneksi.php";
#lokasi file koneksi.php yang digunakan untuk menghubungkan ke database
$id_user = $_POST['id_user'];
#memanggil data id_user yang telah diinputkan agar bisa ditampilkan di file action.
$nama_lengkap = $_POST['nama_lengkap'];
#memanggil data nama_lengkap yang telah diinputkan agar bisa ditampilkan di file action.
$email = $_POST['email'];
#memanggil data email yang telah diinputkan agar bisa ditampilkan di file action.
$password = md5($_POST['password']);
#memanggil data password dengan enskripsi yang telah diinputkan agar bisa ditampilkan di file action.
$sql = "INSERT INTO users(id_user,password, nama_lengkap, email) VALUES ('$id_user', '$password','$nama_lengkap','$email')";
#suatu statement yang berfungsi untuk menambahkan data ke dalam tabel database yang telah ditentukan. 
$query = mysqli_query($con, $sql);
#Untuk mengirimkan perintah query. Terdiri dari dua parameter yaitu: koneksi, dan SQL
mysqli_close($con);
#Untuk memutus atau menutup koneksi ke server
header('location:tampil_user.php');
#membuat redirect ke file tampil_user.php
