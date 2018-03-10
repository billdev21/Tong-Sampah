<?php include '../core/koneksi.php' ?>
<?php include 'header.php' ?>

<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-top: 40px">
			<div class="panel panel-success">
                <div class="panel-heading"><h1>Tambah Sampah</h1></div>
                <div class="panel-body">
                  
                  <form action="tambah_sampah_aksi.php" method="post">
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Kategori</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>                    
							
						<select class="form-control">
						<?php 
							$query = mysqli_query($conn, "SELECT * FROM kategori");	
							while($result = mysqli_fetch_array($query)): ?>	

						  <option value="<?php echo $result['id_kat'] ?>"><?php echo $result['nama_kat'] ?></option>
						<?php endwhile; ?>
						</select>						
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">E-tiket</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="E-tiket" name="etiket" required>
                      </div>
                    </div>
                    
                    
                    <div class="checkbox">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Tambah Sampah</button>
                    
                  </form>
                </div>
                
              </div>
		</div>
	</div>
</div>	

<?php include 'footer.php' ?>