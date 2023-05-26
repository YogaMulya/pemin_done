<?php
    include'config/koneksi.php';
$kode_lokasi = $_POST ['id'];
$nama_lokasi = $_POST ['nama_lokasi'];
// $jenis_barang = $_POST ['jenis_barang'];
// $stok = $_POST ['stok'];

$query = $mysqli->query("INSERT INTO lokasi_aset values ('$kode_lokasi', '$nama_lokasi')");

        if ($query) {
    header("location:lokasi_aset.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsassscda -->