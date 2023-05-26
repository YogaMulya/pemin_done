<?php
include 'config/koneksi.php';
$id_barang = $_GET['id'];
$hapus = $mysqli->query("DELETE FROM aset WHERE kode_barang=$id_barang");
if($hapus){
	header("location:aset.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sxad -->