<?php include "templates/header.php";

session_start();

?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
          <h2 class="page-header">Pendaftaran Anggota</h2>

          <div class="panel panel-primary">
            <div class="panel panel-heading"> 
                Form Pendaftaran
            </div> 
            <div class="panel-body">  
                <form action="prosesregister.php" method="post">  
                     <div class ="form-group">
                          <label for="username">username</label>
                          <input type="text"   name="username" 
                          class="form-control" placeholder="username..." required>
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"   name="password" 
                        class="form-control" placeholder="Password..." required>
                    </div>
                   <div class ="form-group">
                        <label for="exampleInputPassword1">konfirmasi Password</label>
                        <input type="password"   name="password2" 
                        class="form-control" placeholder="konfirmasi Password..." required>
                    </div>
                     </div>
                     </div>
                    

              <div class="row" style="margin-top: 15px; margin-left: 5px">
                <button type="submit" class="btn btn-danger">Tambah Data</button>
              <a href="barang.php" class="btn btn-danger">Back</a>
              </div>
        </form>
            </div>
          </div>
    </div>
</div>
<?php include "templates/footer.php"; ?>