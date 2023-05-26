<?php
include 'config/koneksi.php';
$id_jabatan = $_GET['id'];
$hapus = $mysqli->query("DELETE FROM jabatan WHERE id_jabat=$id_jabatan");
if($hapus){
	header("location:jabatan_fungsional.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sxad -->