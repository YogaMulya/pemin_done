<?php
session_start();
include("config.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i><?php   echo $_SESSION['user'] ?><i class="fa fa-caret-down"></i>
              </a>
    </li>

    <ul class="nav navbar-nav navbar-right">
    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>

            </ul>

          </li>
          </ul>


            </div>
            <!-- /.navbar-collapse -->
            <div>
            <ul class="dropdown-menu dropdown-user">
             <li class="divider"></li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
        <!-- /.container -->

    </nav>
            <h3 style="text-align:center;"></h3>
            

            
<!-- 
//List produk dari database
// $alat = $mysqli->query("SELECT * FROM barang") or die(mysql_error());
// ?> -->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Daftar User</h2>
          
              <table id="tabelanggota" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>posisi</th>
                         
                        </tr>
                     </thead>

                     <?php
                     $query = $mysqli->query("SELECT * FROM user");
                     $id_peminjam=1;
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $lihat['id_user']; ?></td>
                          <td><?php echo $lihat['username'];?></td>
                          <td><?php echo $lihat['posisi'];?></td>

                          

                        </tr>
                        <?php
                        } ?>

              </table>

        </div>
<br>
<br>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Daftar Jabatan Fungsional</h2>
          
              <table id="tabelanggota" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Jabatan</th>
                         
                        </tr>
                     </thead>

                     <?php
                     $query = $mysqli->query("SELECT * FROM jabatan");
                     $id_jabatan=1;
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $lihat['id_jabat']; ?></td>
                          <td><?php echo $lihat['jabatan'];?></td>
                          

                         
                        </tr>
                        <?php
                        } ?>

              </table>

        </div>

        <br>
        <br>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Daftar pegawai</h2>
           
              <table id="tabelanggota" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Penempatan</th>
                          
                        </tr>
                     </thead>

                     <?php
                     $query = $mysqli->query("SELECT * FROM pegawai");
                     $id_pegawai=1;
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $lihat['id_pegawai']; ?></td>
                          <td><?php echo $lihat['nama'];?></td>
                          <td><?php echo $lihat['penempatan'];?></td>

                          
                           


                        </tr>
                        <?php
                        } ?>

              </table>

        </div>

        <br>
        <br>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Daftar kriteria</h2>
          <div class="row">
            
          </div>
              <table id="tabelbarang" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>No </th>
                          <th> Kriteria </th>
                          <th> Nilai </th>
                          <th>Opsi</th>
                        </tr>
                     </thead>

                <?php
                     $query = $mysqli->query("SELECT * FROM kriteria ");
                     $id_brg=1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $id_brg++; ?></td>
                          <td><?php echo $lihat['kriteria_tbl']; ?></td>
                          <td><?php echo $lihat['nilai'];?></td>
                         
                    
                          </td>



                        </tr>
                        <?php

                        } ?>

                      </tbody>

              </table>
        </div>
    <!-- /.container -->

    <!-- <div class="container">

        <hr>

        ner -->

    <!-- jQuery -->
   <!-- <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script> -->
<!-- $(document).ready(function(){
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Adding...'); //Loading button text

			$.ajax({ //request ajax ke cart_process.php
				url: "cart_process.php",
				type: "POST",
				dataType:"json",
				data: form_data
			}).done(function(data){ //Jika Ajax berhasil
				$("#cart-info").html(data.items); //total items di cart-info element
				button_content.html('BELI'); //
				alert("Item telah dimasukan ke keranjang belanja anda");
				if($(".shopping-cart-box").css("display") == "block"){
					$(".cart-box").trigger( "click" );
				}
			})
			e.preventDefault();
		});

	//menampilkan item ke keranjang belanja
	$( ".cart-box").click(function(e) {
		e.preventDefault();
		$(".shopping-cart-box").fadeIn();
		$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //menampilkan loading gambar
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //membuat permintaan ajax menggunakan dengan jQuery Load() & update
	});

	//keluar keranjang belanja
	$( ".close-shopping-cart-box").click(function(e){ //fungsi klik pengguna pada keranjang belanja
		e.preventDefault();
		$(".shopping-cart-box").fadeOut(); //keluar keranjang belanka
	});

	//Menghapus item dari keranjang
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault();
		var pcode = $(this).attr("data-code"); //mendapatkan get produk
		$(this).parent().fadeOut(); //menghapus elemen item dari kotak
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //mendapatkan Harga Barang dari Server
			$("#cart-info").html(data.items); //update Menjullahkan item pada cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to untuk memperbarui daftar item
		});
	});

}); -->
<!-- </script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
