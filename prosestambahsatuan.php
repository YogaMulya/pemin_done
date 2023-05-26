<?php
    include'config/koneksi.php';
$kode_satuan = $_POST ['id'];
$nama_satuan = $_POST ['nama_satuan'];
// $jenis_barang = $_POST ['jenis_barang'];
// $stok = $_POST ['stok'];

$query = $mysqli->query("INSERT INTO satuan values ('$kode_satuan', '$nama_satuan')");

        if ($query) {
    header("location:satuan.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsassscdssa -->