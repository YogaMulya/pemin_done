<?php
include 'config/koneksi.php';
$id_user = $_GET['id'];
$hapus = $mysqli->query("DELETE FROM user WHERE id_user=$id_user");
if($hapus){
	header("location:user.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sad -->