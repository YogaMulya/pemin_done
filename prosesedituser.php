<?php
include "config/koneksi.php";
$id_user = $_POST ['id_user'];
$username = $_POST ['username'];
$posisi = $_POST [ 'posisi'];

$ganti = "update user set posisi='$posisi', username='$username' where id_user='$id_user'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:user.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!-- dasd -->