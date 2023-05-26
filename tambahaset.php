<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
}
// kaskkd
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
    <!-- Custocm Fonts -->
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
  <li><a href="data_aset.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Data Aset</i></a></li>
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
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Tambah Aset </h2>
          <form role="form1" action="prosestambahaset.php" method="post">
             <table>
                 <div class = "box-body">
                     <div class ="form-group">
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">kode Barang</label>
                        <input type="text"  name="kode_barang" class="form-control" placeholder=" nama barang ..." required>
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Nama Barang</label>
                        <input type="text"  name="nama_barang" class="form-control" placeholder=" nama barang ..." required>
                    </div>
                   <div class ="form-group">
                        <label for="exampleInputPassword1">Jenis Barang</label>
                        <input type="text"   name="jenis_barang"
                        class="form-control" placeholder="Jenis Barang ... " required>
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Stok</label>
                        <input type="text"   name="stok"
                        class="form-control" placeholder="Jumlah Stok ..." required>
                    </div>

                        <!-- <div class="row">
                        <label>Kelas</label>
                    <div class ="form-group">
                        <div class="col-md-3">
                          <select name="kelas" class="form-control">
                            <option value="" disabled selected>- Pilih Kelas -</option>
                            <option value="10">X</option>
                            <option value="11">XI</option>
                            <option value="12">XII</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <select name="jurusan" class="form-control">
                            <option value="" disabled selected>- Pilih Jurusan -</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="MM">Multi Media</option>
                            <option value="JB">Jasa Boga</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="APH">Akomodasi Perhotelan</option>
                            <option value="ANM">Animasi</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <select name="no" class="form-control">
                            <option value="" disabled selected>- Pilih No -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                        </div> -->
                    </div>
                        </div>
               <div class="row" style="margin-top: 20px;">
                 <button type="submit" class="btn btn-danger">Tambah Data</button>
             <a href="aset.php" class="btn btn-danger">Back </a>
               </div>
           </div>
        </div>
      </div>
    </div>

    <?php require_once "templates/footer.php" ?>