<?php include "header.php"; ?>


        <div class="clearfix"></div>
        <div class="container" style="margin-top: 80px">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              
              <div class="panel panel-success">
                <div class="panel-heading"><h1>Daftar</h1><span>Isi formulir pendaftaran dibawah ini</span></div>
                <div class="panel-body">
                  
                  <form action="register_aksi.php" method="post">
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="user" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
                      </div>
                    </div>
                    
                    
                    <div class="checkbox">
                    </div>
                    <button type="submit" class="btn btn-success">Daftar</button>
                    <a href="login.php"><button type="button" class="btn btn-primary">Masuk</button></a>
                    
                  </form>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>


<?php include "footer.php"; ?>
