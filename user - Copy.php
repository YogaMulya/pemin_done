<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
   require_once 'config/koneksi.php';
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
          <a class="navbar-brand" href="dashboard.php">Data Master</a>
        </div>


        <!-- navigasi menu admin-->

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
            <br>sat-->
            
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
    <div>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="dashboard.php" class="fa fa-home fa-6px"> Dashboard</a></li>
    </div>

      <div class="row">
        <!-- <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href="dashboard.php"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
            <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
            <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Anggota</i></a></li>
            <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
          </ul>

        </div> -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Daftar User</h2>
           <a href="tambahuser.php" class="btn btn-danger pull-right" style="margin-bottom: 20px;"><i class="fa fa-plus"></i> Tambah</a>
              <table id="tabelanggota" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>posisi</th>
                          <th>Opsi</th>
                          <th>Hapus</th>
                        </tr>
                     </thead>

                     <?php
                     $query = $mysqli->query("SELECT * FROM user");
                     $id_user=1;
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $lihat['id_user']; ?></td>
                          <td><?php echo $lihat['username'];?></td>
                          <td><?php echo $lihat['posisi'];?></td>

                          <td style="">
                            <!-- <a href="buku_pinjam.php?id_anggota=<?php echo $lihat['id_user']; ?>" class="btn btn-danger">Lihat Barang <i class="fa fa-eye"></i></a> -->
                            <a href="edituser.php?id_peminjam=<?php echo $lihat['id_user']; ?>" class="btn btn-danger">Edit</a>
                          </td>
                            <td>
                              <a href="hapususer.php?id=<?php echo $lihat['id_user']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>


                        </tr>
                        <?php
                        } ?>

              </table>

        </div>
      </div>
    </div>

    <?php require_once "templates/footer.php" ?>