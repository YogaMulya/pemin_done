<?php
    include'config/koneksi.php';
$kode_kriteria = $_POST ['id'];
$nama_kriteria = $_POST ['kriteria_tbl'];
$nilai = $_POST ['nilai'];
// $stok = ss$_POST ['stok'];

$query = $mysqli->query("INSERT INTO kriteria values ('$kode_kriteria','$nama_kriteria','$nilai')");

        if ($query) {
    header("location:data_kriteria.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsassscdssa -->