<?php include 'header.php' ?>



<div class="container" style="margin-top: 30px;">
<div class="jumbotron text-center">
	<h2>Data Jemput Sampah</h2>


	<div class="row">
		<div class="col-md-7 col-md-offset-3" style="margin-top: 5px">
			<div class="panel panel-default">
			  <!-- Table -->
			  <table class="table table-bordered">
			    <tr>
			    	<th>No</th>
			    	<th>E-Tiket</th>
			    	<th>Jenis Sampah</th>
			    	<th>Keterangan</th>

			    	<th>Berat Sampah</th>
			    	<th>Status</th>
			    	<th>Aksi</th>
			    </tr>

<?php
$no=0;
$s_sampah = "SELECT * FROM data_sampah,kategori, user WHERE data_sampah.id_kat=kategori.id_kat AND data_sampah.id_driver = $id AND user.id_user = $id";
$q_sampah = mysqli_query($conn,$s_sampah);
while ($td = mysqli_fetch_assoc($q_sampah)){
$no++;
?>

			    <tr>
			    	<td><?php echo $no; ?></td>
			    	<td><?php echo $td['etiket']; ?></td>
			    	<td><?php echo $td['nama_kat']; ?></td>
			    	<td><?php echo $td['ket']; ?></td>			    	
			    	<td><?php echo $td['berat']; ?></td>
			    	<td><?php 
			    	$st=$td['berat']; 

			    	if($st==0){
			    		echo "<button class='btn btn-danger btn-sm'>Tunda</button>";			    		
			    	}else{
			    		echo "<button class='btn btn-primary btn-sm'>Diterima</button>";
			    	}
			    	?></td>
			    	<td>
			    		<a href="edit_dompet.php?id=<?php echo $id ?>" class="btn btn-primary">Edit</a>
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
</div>

<?php include 'footer.php' ?>