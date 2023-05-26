<?php
include 'config/koneksi.php';
$id_peminjam = $_GET['id'];
$hapus = $mysqli->query("DELETE FROM user WHERE id_anggota=$id_peminjam");
if($hapus){
	header("location:peminjam.php");
}else{
	echo"gagal menghapus data";
}
?>