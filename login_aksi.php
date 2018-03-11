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
include "core/helper.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql= "SELECT * FROM user where username='$user' and password='$pass'";

$hasil = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($hasil);

$id_user = $row['id_user'];
$st = $row['level'];


if($st == 1){
    
    $_SESSION["id"]=$id_user;
    $_SESSION["username"]=$row['username'];
    $_SESSION["level"]=$row['level'];
    header('Location: '. BASE_URL. "/admin");
}
elseif($st==2){    
    $_SESSION["id"]=$id_user;
    $_SESSION["username"]=$row['username'];
    $_SESSION["level"]=$row['level'];
    header('Location: '. BASE_URL. "/user");
}
<<<<<<< HEAD
elseif($st==3){    
=======
elseif($st==3){
    
>>>>>>> a20838757a5a5bc9707e73b78e55ac3f837a4ed3
    $_SESSION["id"]=$id_user;
    $_SESSION["username"]=$row['username'];
    $_SESSION["level"]=$row['level'];
    header('Location: '. BASE_URL. "/driver");
}
else{
    die('gagal');
}

?>