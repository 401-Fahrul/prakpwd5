<?php
#menampilkan tabel form login
echo "<h2>Login</h2>
<form method=post action=cek_login.php>
<table>
<tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr>
<tr><td>Password</td><td> : <input name='password' type='text'></td></tr>
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr>
</table>
</form>";
