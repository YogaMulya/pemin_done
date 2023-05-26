<?php
include 'config/koneksi.php';
$id_lokasi= $_GET['id'];
$hapus = $mysqli->query("DELETE FROM lokasi_aset WHERE id_lokasi=$id_lokasi");
if($hapus){
	header("location:lokasi_aset.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sxfad -->