<?php
// include database connection file
include_once("koneksi.php");
// Dapatkan id dari URL untuk menghapus pengguna itu
$nim = $_GET['nim'];
// Hapus baris data dari tabel berdasarkan id yang diberikan
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim=’$nim’");
// Setelah menghapus redirect ke Home, maka daftar data terbaru akan ditampilkan.
header("Location:index.php");
