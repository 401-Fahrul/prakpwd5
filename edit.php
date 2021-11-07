<?php
// include database connection file
include_once("koneksi.php");
// Periksa apakah formulir dikirimkan untuk pembaruan data, lalu arahkan kembali ke beranda setelah pembaruan
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];
    $no_telp = $_POST['no_telp'];
    // update user data
    $result = mysqli_query($con, "UPDATE mahasiswa SET nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr',no_telp='$no_telp' WHERE nim='$nim'");
    // Arahkan ulang ke beranda untuk menampilkan data yang diperbarui dalam daftar
    header("Location: index.php");
}
?>
<?php
// Tampilkan data yang dipilih berdasarkan id
// Mendapatkan id dari url
$nim = $_GET['nim'];
// Ambil data pengguna berdasarkan id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while ($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
    $no_telp = $user_data['no_telp'];
}
?>
<html>
<!-- pada baris ke 35 s/d 37 merupakan kode HTML untuk membuat tabel header -->
<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <!-- untuk memanggil file index.php -->
    <a href="index.php">Home</a>
    <br /><br />
    <!--Membuat edit data-->
    <form name="update_mahasiswa" method="post" action="edit.php">
        <table border="0">
            <!-- Pada baris ke 47 sampai 70 merupakan kode untuk menampilkan record field yang ada pada tabel.-->
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="jkel" value=<?php echo $jkel; ?>></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgllhr" value=<?php echo $tgllhr; ?>></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td><input type="text" name="no_telp" value=<?php echo $no_telp; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>