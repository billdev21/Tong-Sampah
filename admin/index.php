<?php include "header.php"; ?>
<?php include "../core/helper.php" ?>

        <div class="clearfix"></div>
        <div class="container" style="margin-top: 80px">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              welcome <?php  echo $_SESSION['username'] ?>
            </div>
            
          </div>
        </div>

<?php include "footer.php"; ?>