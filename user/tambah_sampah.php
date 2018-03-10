
<?php include 'header.php' ?>

<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-top: 40px">
			<div class="panel panel-success">
                <div class="panel-heading"><h1>Tambah Sampah</h1></div>
                <div class="panel-body">
                  
                  <form action="tambah_sampah_aksi.php" method="post">

<?php

//membuat angka acak tiket
//fungsi nomor kode otomatis
function buatkode($nomor_terakhir, $kunci, $jumlah_karakter = 0)
{
//menambahkan nomor baru
$nomor_baru = intval(substr($nomor_terakhir, strlen($kunci))) + 1;
//menambahkan nol didepan nomor baru sesuai panjang jumlah karakter
$nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
//menyusun kunci dan nomor baru
$kode = $kunci.$nomor_baru_plus_nol;
return $kode;
}

$tgl=date('m');
//pengambilan record terakhir
$s_tiket = "SELECT max(etiket) AS tiket_baru FROM data_sampah";
$q_tiket  = mysqli_query($conn,$s_tiket);
$v_tiket= mysqli_fetch_array($q_tiket);
$newtiket=substr($v_tiket['tiket_baru'],3);
$nomor_terakhir = $newtiket;
$etiket=buatkode($nomor_terakhir, $tgl ,3);
//out put : 16.0001

?>


                  <div class="form-group">
                      <label>E-tiket</label>
                      
                      <div class="input-group">
                      <input type="hidden" name="etiket" value="<?php echo $etiket; ?>">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" disabled="disabled" placeholder="E-tiket" name="etiket" value="<?php echo $etiket; ?>" required >                        
                      </div>
                      <span class="help-block">Ini adalah E-Tiket Jemput Sampah Anda.</span>
                    </div>

                    
                    <div class="form-group">
                      <label for="exampleInputName1">Kategori</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>                    
							
            						<select class="form-control" name="id_kat">
                          <option value="">Pilih Kategori</option>
                          <option value="">------------------</option>

            						<?php 
            							$query = mysqli_query($conn, "SELECT * FROM kategori");	
            							while($result = mysqli_fetch_array($query)): ?>	
                          
            						  <option value="<?php echo $result['id_kat'] ?>"><?php echo $result['nama_kat'] ?></option>
            						<?php endwhile; ?>
            						</select>						
                        
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keterangan" name="ket" required>
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