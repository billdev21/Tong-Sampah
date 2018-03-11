<?php include "header.php"; ?>
<?php
$idx=$_GET['iddom'];

?>
        <div class="clearfix"></div>
        <div class="container" style="margin-top: 80px">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              
              <div class="panel panel-danger">
                <div class="panel-heading"><h1>Edit Sampah</h1></div>
                <div class="panel-body">
                  
                  <form action="edit_dompet_aksi.php" method="post">
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Berat</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="hidden" name="idorder" value="<?php echo $idx; ?>">
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Berat" name="berat" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Edit Sampah</button>
                    </div>
                    
                    
                  </form>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>

<?php include "footer.php"; ?>