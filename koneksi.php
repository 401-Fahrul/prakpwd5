<?php

// merupakan kodePHP untuk membuat variabel dengan data yang telah di definisikan.
//Server yang berada di alamat localhost
$host="localhost";
//username yang dipakai bawaan dari Xampp
$username="root";
//password user
$password="";
//nama database yang dipakai
$databasename="akademik";

// Create connection
$con=@mysqli_connect($host,$username,$password,$databasename);
// Check connection
if (!$con) {
//menampilkan pesan 'Error' apabila gagal terkoneksi
 echo "Error: " . mysqli_connect_error();
 //untuk membuat proses PHP berhenti diproses pada saat itu juga
exit();
}
