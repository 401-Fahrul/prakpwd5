<html>
<!-- pada baris ke 3 s/d 5 merupakan kode HTML untuk membuat tabel header -->

<head>
    <title>Tambah data mahasiswa</title>
</head>

<body>
    <!-- untuk memanggil file index.php -->
    <a href="index.php">Go to Home</a>
    <br /><br />
    <!--Membuat form tambah data-->
    <form action="tambah.php" method="post" name="form1">
        <!-- Ukuran tabel form yang dibuat -->
        <table width="25%" border="0">
            <!-- Pada baris ke 16 sampai 43 merupakan kode untuk menampilkan record field yang ada pada tabel.-->
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gender (L/P)</td>
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgllhr"></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <?php

    // digunakan untuk menyatakan variabel sudah diset atau tidak.
    // Periksa Jika formulir dikirimkan, masukkan data formulir ke dalam tabel.
    if (isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jkel = $_POST['jkel'];
        $alamat = $_POST['alamat'];
        $tgllhr = $_POST['tgllhr'];
        $no_telp = $_POST['no_telp'];
        // memasukkan file koneksi database
        include_once("koneksi.php");
        // menyisipkan atau menambah data ke dalam tabel mahasiswa
        $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr,no_telp) VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr','$no_telp')");
        // menampilkan pesan ketika berhasil menambahkan data
        echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    }
    ?>
</body>

</html>