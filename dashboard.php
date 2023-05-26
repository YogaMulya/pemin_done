<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $admin = $_SESSION['admin'];
}
?>
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
          <a class="navbar-brand" href="#">WEB</a>
        </div>

        <!-- Navigasi bar admin menu -->
        <div id="navbar" class="navbar-collapse collapse">

      
          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i>Data Master <i class="fa fa-caret-down"></i>
              </a>
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
            <!-- <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;</i></a></li> -->
            <li><a href="user.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;User</i></a></li>
            <li><a href="pegawai.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Pegawai</i></a></li>
            <li><a href="jabatan_fungsional.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Jabatan Fungsional</i></a></li>
            <!-- <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
            <br> -->
            
            <!-- <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li> -->
            </ul>

          </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i>Data Aset <i class="fa fa-caret-down"></i>
              </a>
              
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
            <li><a href="aset.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Aset</i></a></li>
            <li><a href="kategori_aset.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Kategori Aset</i></a></li>
            <li><a href="lokasi_aset.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Lokasi Aset</i></a></li>
            <li><a href="satuan.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Satuan</i></a></li>
            <br>
            <!-- <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li> -->
            </ul>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i>Keputusan pengadaan <i class="fa fa-caret-down"></i>
              </a>
              
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
            <li><a href="data_kriteria.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Data Kriteria</i></a></li>
            <li><a href="aset.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Data Aset</i></a></li>
            <!-- <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Lokasi Aset</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Satuan</i></a></li>
            <br> -->
            <!-- <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li> -->
            </ul>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-gear fa-fw"></i> Penghapusan <i class="fa fa-caret-down"></i>
              </a>
              
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
            <li><a href="hapus_aset.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Hapus Aset</i></a></li>
            <!-- <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Data Aset</i></a></li> -->
            <!-- <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Lokasi Aset</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Satuan</i></a></li>
            <br> -->
            <!-- <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li> -->
            </ul>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-book fa-fw"></i> Laporan <i class="fa fa-caret-down"></i>
              </a>
              
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
            <li><a href="pegawai_lapor.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp; Pegawai</i></a></li>
            <li><a href="jabatan_fungsional_lapor.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Jabatan Fungsional</i></a></li>
            <li><a href="user_lapor.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;User </i></a></li>
            <!-- <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Satuan</i></a></li>
            <br>  -->
            <!-- <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li> -->
            </ul>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i>Admin<i class="fa fa-caret-down"></i>
              </a>
              
            <ul class="dropdown-menu dropdown-user">
             <li class="divider">Logout</li>
            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>

          </li>
          </ul>
          
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
</div>
      </div>
    </nav>





    <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="dashboard.php" class="fa fa-home fa-6px"> Dashboard</a></li>
    </div>

      <div class="row">

        <!-- <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href="#"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
              <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
              <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;User</i></a></li>
            <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
          </ul>

        </div> -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>


         <div class="row">
         <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">Data Aset</div>
            <div class="panel-body">
              <div class="col-md-4">
                <i class="fa fa-laptop fa-4x"></i>
              </div>
              <?php
              require 'config/koneksi.php';
                $query = $mysqli->query("SELECT count(id_brg) as a FROM barang");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h2><?php echo $data['a']; ?>  Aset</h2>
            </div>
          </div>
        </div>
        </div>
       
          <!-- </div>
        </div> -->

        <div class="row">
         <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">Data user</div>
            <div class="panel-body">
              <div class="col-md-4">
                <i class="fa fa-user fa-4x" ></i>
              </div>
              <?php
              require 'config/koneksi.php';
              $query = $mysqli->query("SELECT count(id_user) as b FROM user");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h2><?php echo $data['b']; ?> user</h2>
            </div>
          </div>
        </div>
        

      <div class="row">
         <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">Data Pegawai</div>
            <div class="panel-body">
              <div class="col-md-5">
                <i class="fa fa-user fa-4x" ></i>
              </div>
              <?php
              require 'config/koneksi.php';
              $query = $mysqli->query("SELECT count(id_pegawai) as c FROM pegawai");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h2><?php echo $data['c']; ?> pegawai</h2>
            </div>
          </div>
        </div>
        </div>

        
      </div>

      <div class="row">
         <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">Jabatan Fungsional</div>
            <div class="panel-body">
              <div class="col-md-5">
                <i class="fa fa-gear fa-4x" ></i>
              </div>
              <?php
              require 'config/koneksi.php';
              $query = $mysqli->query("SELECT count(id_jabat) as d FROM jabatan");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h2><?php echo $data['d']; ?>Jabatan</h2>
            </div>
          </div>
        </div>
        </div>

        
      </div>
  
    <?php require_once "templates/footer.php" ?>