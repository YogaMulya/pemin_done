<?php
include 'config/koneksi.php';
$id_satuan= $_GET['id'];
$hapus = $mysqli->query("DELETE FROM satuan WHERE id_satuan=$id_satuan");
if($hapus){
	header("location:satuan.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sxsssfad -->