<?php include '../core/koneksi.php' ?>
<?php include '../core/helper.php' ?>

<?php 

$id_kat = $_POST['id_kat'];
$etiket = $_POST['etiket'];
$ket = $_POST['ket'];
$id_user = $_SESSION['id'];


$s_sampah = "SELECT id_user FROM user WHERE level=3 ORDER BY RAND() LIMIT 1";
$q_sampah = mysqli_query($conn,$s_sampah);
$td = mysqli_fetch_assoc($q_sampah);
$driver=$td['id_user'];

$query = "INSERT INTO data_sampah (id_kat, id_user,id_driver, ket, etiket,berat,status) VALUES ('$id_kat', '$id_user', '$driver', '$ket', '$etiket','0','0') ";
$result = mysqli_query($conn, $query);



if($result){
  header("Location: ". BASE_URL. "/user/tambah_sampah.php");
}

