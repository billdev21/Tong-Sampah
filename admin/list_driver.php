<?php include "header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-3" style="margin-top: 30px">
      <h2 class="text-center">List Driver</h2>
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">List Driver</div>

        <!-- Table -->
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Aksi</th>
          </tr>

<?php
$no=0;
$s_sampah = "SELECT * FROM user WHERE level = 3";
$q_sampah = mysqli_query($conn,$s_sampah);
while ($td = mysqli_fetch_assoc($q_sampah)){
$no++;
?>

          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $td['username']; ?></td>
            <td>
              <a href="edit_driver.php?id=<?php echo $td['id_user'] ?>" class="btn btn-primary">Edit</a>
              <a href="hapus_driver.php?id=<?php echo $td['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ?')">Hapus</a>
            </td>
          </tr>
<?php
}
?>
        </table>
      </div>
    </div>
  </div>
</div>  

<?php include "footer.php"; ?>