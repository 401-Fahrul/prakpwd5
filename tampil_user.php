<?php
echo "<h2>User</h2>
<form method=POST action=form_user.php>
<input type=submit value='Tambah User'>
</form>
<table>
<tr><th>No</th><th>Username</th><th>Nama Lengkap</th><th>Email</th><th>Aksi</th
></tr>";
include "../pwdprak5/koneksi.php";
#lokasi file koneksi.php yang digunakan untuk menghubungkan ke database
$sql = "select * from users order by id_user";
#memanggil perintah menampilkan data dari user dengan id_user di sql
$tampil = mysqli_query($con, $sql);
#Untuk mengirimkan perintah query. Terdiri dari dua parameter yaitu: koneksi, dan SQL
if (mysqli_num_rows($tampil) > 0) {
    #Mengambil jumlah baris di dalam tabel.
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
        #	Mengambil hasil baris sebagai asosiatif , array numerik , atau keduanya. Singkatnya untuk menampung baris tabel menjadi array
        echo "<tr><td>$no</td><td>$r[id_user]</td>
              <td>$r[nama_lengkap]</td>
              <td>$r[email]</td>
              <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
              </tr>";
        $no++;
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($con);
#Untuk memutus atau menutup koneksi ke server
