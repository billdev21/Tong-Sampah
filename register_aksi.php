<?php
include "core/helper.php";
include "core/koneksi.php";

$user=$_POST['user'];
$pass=$_POST['pass'];
$level=2;

$query = mysqli_query($conn, "SELECT username FROM user WHERE username='$user'");
$cek_username = mysqli_num_rows($query);

if($cek_username>0){
  $pesan = "Username sudah ada, Silahkan Ulangi lagi";
  header("Location: ".BASE_URL. "/register.php?pesan=$pesan");
}else{
  $masuk="INSERT INTO user(username, password,level) VALUES ('$user', '$pass', $level)";

  mysqli_query($conn, $masuk);

  header("Location: ".BASE_URL. "/login.php");

}

?>
