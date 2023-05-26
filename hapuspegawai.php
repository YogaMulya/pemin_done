<?php
include 'config/koneksi.php';
$id_pegawai = $_GET['id'];
$hapus = $mysqli->query("DELETE FROM pegawai WHERE id_pegawai=$id_pegawai");
if($hapus){
	header("location:pegawai.php");
}else{
	echo"gagal menghapus data";
}
?>