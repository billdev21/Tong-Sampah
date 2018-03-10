<?php include 'header.php' ?>
<?php include "../core/helper.php"; ?>
<?php cek_login(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-7 col-md-offset-3" style="margin-top: 30px">
			<h2 class="text-center">Dompet</h2>
			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">Daftar Sampah</div>

			  <!-- Table -->
			  <table class="table table-bordered">
			    <tr>
			    	<th>No</th>
			    	<th>Kategori</th>
			    	<th>Harga</th>
			    	<th>E-tiket</th>
			    	<th>Status</th>
			    </tr>

<?php
$no=0;
$s_sampah = "SELECT * FROM data_sampah";
$q_sampah = mysqli_query($conn,$s_sampah);
while ($td = mysqli_fetch_assoc($q_sampah)){
$no++;
?>

			    <tr>
			    	<td><?php echo $no; ?></td>
			    	<td><?php echo $td['id_kat']; ?></td>
			    	<td><?php echo $td['id_kat']; ?></td>
			    	<td><?php echo $td['id_kat']; ?></td>
			    	<td><?php echo $td['status']; ?></td>
			    </tr>
<?php
}
?>
			  </table>
			</div>
		</div>
	</div>
</div>	

<?php include 'footer.php' ?>