<?php
session_start();
#PHP akan menjalankan perintah pada server maupun pada client/user
session_destroy();
#PHP akan menghentikan perintah pada server maupun pada client/user
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";
#pesan jika sukses logout
