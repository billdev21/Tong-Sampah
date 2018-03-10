<?php
/* index.php ------------------------------------------------------
   	version: 1.0

	By : M. Fajri Basuki
	Email : fajri21@gmail.com
	License: GPL v2
			http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
			
-Program ini tidak diperkenankan untuk diperjual belikan tanpa izin pembuat
-apabila aplikasi ini diperjual belikan maka sangsi sesuai hukum yang berlaku
-siapapun boleh mengedit file ini dengan izin pemilik dan digunakan untuk pendidikan
----------------------------------------------------------------*/

?>
<?php
session_start();
include "core/koneksi.php" ;
$var_user = $_POST['user'];
$var_pass = $_POST['pass'];

// $q = mysqli_query($conn, "select * from user where username='$user' and password ='$pass'");
// $sql = mysqli_fetch_assoc($q);

$sql= "select * from user where username='$user' and password ='$pass'";

$hasil = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($hasil);

die($hasil['level']);
$st = $hasil['level'];

if($st == 1){
    die('admin');
    $_SESSION["id"]=$id_user;
}
elseif($st==2){
    die('user');
    $_SESSION["id"]=$id_user;
}
elseif($st==3){
    die('user');
    $_SESSION["id"]=$id_user;
}
else{
    die('gagal');
}

?>