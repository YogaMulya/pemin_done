<?php
include "config/koneksi.php";
$kode_aset = $_POST ['kode_barang'];
$namabarang = $_POST ['nama_barang'];
$jenisbarang = $_POST [ 'jenis_barang'];
$stok =$_POST['stok'];

$ganti = "update aset set nama_barang='$namabarang', jenis_barang='$jenisbarang', stok='$stok' where kode_barang='$kode_aset'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:aset.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!-- dxasdd -->