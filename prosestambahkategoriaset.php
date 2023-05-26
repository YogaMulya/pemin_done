<?php
    include'config/koneksi.php';
$kode_kategori = $_POST ['id_kategori'];
$nama_kategori = $_POST ['nama_kategori'];
// $jenis_barang = $_POST ['jenis_barang'];
// $stok = $_POST ['stok'];

$query = $mysqli->query("INSERT INTO kategori_aset values ('$kode_kategori', '$nama_kategori')");

        if ($query) {
    header("location:kategori_aset.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsascda -->