<?php
    include'config/koneksi.php';
$kode_barang = $_POST ['kode_barang'];
$nama_barang = $_POST ['nama_barang'];
$jenis_barang = $_POST ['jenis_barang'];
$stok = $_POST ['stok'];

$query = $mysqli->query("INSERT INTO aset values ('$kode_barang', '$nama_barang','$jenis_barang','$stok')");

        if ($query) {
    header("location:aset.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsacda -->