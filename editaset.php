<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
}
?>
<?php
include "config/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/dist/css/global.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>


  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Data Master</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
              </a>
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>

          </li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
            <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
            <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Anggota</i></a></li>
            <li><a href="#"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
            <li><a href="#"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
          </ul> -->

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Aset</h1>

              <section class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form element -->
                <div class="box box-danger">
                <div class="box-header with-border">
                </div><!--/.box-header-->
                <?php
                  $kode_aset = $_GET['kode_barang'];
                  $query = $mysqli->query("SELECT * FROM aset where kode_barang='$kode_aset'");

                  while ($qu = mysqli_fetch_array($query)){
                    ?>
                  <!-- form sdasddtart -->
                  <form role="form" action="proseseditaset.php" method="post">
                  <div class = "box-body">
                  <div class ="form-group">
                    <label for="exampleInputEmail1">No</label>
                    <input type="text" disable value="<?php echo $qu['kode_barang'] ?>" name="kode_barang" class="form-control" placeholder="" disabled>
                    <input type="hidden" value="<?= $qu['kode_barang']; ?>" name="kode_barang">
                    </div>
                    <div class ="form-group">
                    <label for="exampleInputPassword1"> Nama Barang </label>
                    <input type="text"  value="<?php echo$qu['nama_barang'] ?>" name="nama_barang"
                    class="form-control" placeholder="" required>
                    </div>
                    <div class ="form-group">
                    <label for="exampleInputPassword1"> jenis Barang </label>
                    <input type="text"  value="<?php echo$qu['jenis_barang'] ?>" name="jenis_barang"
                    class="form-control" placeholder="" required>
                    </div>
                    <div class ="form-group">
                    <label for="exampleInputPassword1"> stok</label>
                    <input type="text"  value="<?php echo$qu['stok'] ?>" name="stok"
                    class="form-control" placeholder="" required>
                    </div>
                   
                    <!-- <div class ="form-group">
                      <label for="exampleInputPassword1">Kelas </label>
                      <input type="text" disabled value="" name="kelas"
                      class="form-control" placeholder="" required>
                    </div> -->

                <?php
                }
            ?>

             <div class="box-footer">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="aset.php" class="btn btn-danger">Back</a>
            </div>
            </form>
            </section><!-- /.content -->

          </div>
        </div>
      </div>

    <?php require_once "templates/footer.php" ?>