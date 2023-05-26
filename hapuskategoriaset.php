<?php
include 'config/koneksi.php';
$id_kategori2= $_GET['id'];
$hapus = $mysqli->query("DELETE FROM kategori_aset WHERE id_kategori=$id_kategori2");
if($hapus){
	header("location:kategori_aset.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sxad -->