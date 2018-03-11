<?php include '../core/koneksi.php' ?>
<?php include '../core/helper.php' ?>

<?php 

$berat = $_POST['berat'];

$query = "UPDATE data_sampah SET berat = $berat WHERE id_driver = $id";
$result = mysqli_query($conn, $query);



if($result){
  header("Location: ". BASE_URL. "/driver/index.php");
}

